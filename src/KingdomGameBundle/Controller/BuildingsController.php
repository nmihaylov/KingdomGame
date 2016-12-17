<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Building;
use KingdomGameBundle\Entity\BuildingProgress;
use KingdomGameBundle\Entity\GameResource;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomBuilding;
use KingdomGameBundle\Entity\KingdomResource;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Class BuildingsController
 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
 * @package KingdomGameBundle\Controller
 */
class BuildingsController extends KingdomCurrentController
{

    /**
     * @Route("/buildings", name="buildings_list")
     *

     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        /** @var Building $buildings */
//        $buildings = $this->getDoctrine()->getRepository(Building::class)->findAll();
        $now = new \DateTime("now");
        /** @var BuildingProgress[] $buildingsInProgress */
        $buildingsInProgress = [];
        foreach ($kingdom->getBuildings() as $kingdomBuilding) {
            $buildingInProgress = $this->getDoctrine()->getRepository(BuildingProgress::class)->findOneBy([
                'building' => $kingdomBuilding->getId()
            ]);

            if ($buildingInProgress) {
                if ($buildingInProgress->getFinishesOn() >= $now) {
                    $buildingsInProgress[] = $buildingInProgress;
                } else {
                    $finishedBuilding = $buildingInProgress->getBuilding();
                    $currentLevel = $finishedBuilding->getLevel();
                    $finishedBuilding->setLevel($currentLevel + 1);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($finishedBuilding);
                    $em->flush();
                    $em->remove($buildingInProgress);
                    $em->flush();
                }
            }
        }


        return $this->render('buildings/index.html.twig', [
            'buildings' => $kingdom->getBuildings(),
            'buildingsInProgress' => $buildingsInProgress,
            'now' => $now
        ]);
    }

    /**
     * @Route("buildings/evolve/{id}", name="building_evolve")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function evolve($id)
    {

        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $building = $this->getDoctrine()->getRepository(Building::class)->find($id);

        $kingdomBuilding = $this->getDoctrine()->getRepository(KingdomBuilding::class)
            ->findOneBy([
                'kingdom' => $kingdom,
                'building' => $building
            ]);

        $alreadyInProgress = $this->getDoctrine()->getRepository(BuildingProgress::class)->findBy([
            'building' => $kingdomBuilding
        ]);

        if ($alreadyInProgress){
            $this->addFlash(
                'error',
                'This building is already in progress'
            );
            return $this->redirectToRoute("buildings_list");
        }

        $currentLevel = $kingdomBuilding->getLevel();
        $costs = $building->getCosts();
        $allResources = [];
        foreach ($costs as $cost) {
            $resourcesInKingdom = $this->getDoctrine()->getRepository(KingdomResource::class)->findOneBy([
                'resource' => $cost->getResource(),
                'kingdom' => $kingdom
            ]);
            if ($resourcesInKingdom->getAmount() >= ($this->evolveResourceCost($cost->getAmount(), $currentLevel))) {
                $allResources[$cost->getResource()->getName()] = $this->evolveResourceCost($cost->getAmount(), $currentLevel);
            } else {
                $this->addFlash(
                    'error',
                    'Not enough resources'
                );
                return $this->redirectToRoute("buildings_list");
            }
        }

        $kingdomResources = $this->getDoctrine()->getRepository(KingdomResource::class)->findBy([
            'kingdom' => $kingdom
        ]);
        $em = $this->getDoctrine()->getManager();
        foreach ($kingdomResources as $kingdomResource) {
            $name = $kingdomResource->getResource()->getName();

            $cost = $allResources[$name];

            $kingdomResource->setAmount(
                $kingdomResource->getAmount() - $cost
            );
            $em->persist($kingdomResource);
            $em->flush();
        }

        if ($kingdomBuilding === null) {
            $kingdomBuilding = new KingdomBuilding();
            $kingdomBuilding->setLevel(0);
            $kingdomBuilding->setBuilding($building);
            $kingdomBuilding->setKingdom($kingdom);
        }


        $buildingInProgress = new BuildingProgress();
        $buildingTimeCostInt = $this->evolveTimeCost($kingdomBuilding->getBuilding()->getTimeCosts()->getAmount(), $currentLevel);
        $buildingTimeCost = new \DateInterval('PT' . $buildingTimeCostInt . 'S');
        $now = new \DateTime("now");
        $buildingFinishOn = $now->add($buildingTimeCost);
        $buildingInProgress->setBuilding($kingdomBuilding);
        $buildingInProgress->setFinishesOn($buildingFinishOn);

        $em->persist($buildingInProgress);
        $em->flush();


        return $this->redirectToRoute("buildings_list");
    }


    /**
     * @param int $cost
     * @param int $buildingCurrentLevel
     * @return int
     */
    public function evolveResourceCost(int $cost, int $buildingCurrentLevel)
    {
        if ($buildingCurrentLevel == 0) {
            $buildingCurrentLevel = 1;
        }
        return $cost * (($buildingCurrentLevel + 1) / 2);
    }

    /**
     * @param int $cost
     * @param int $buildingCurrentLevel
     * @return int
     */
    public function evolveTimeCost(int $cost, int $buildingCurrentLevel)
    {
        if ($buildingCurrentLevel == 0) {
            $buildingCurrentLevel = 1;
        }
        return $cost * (($buildingCurrentLevel + 1) / 2);
    }
}
