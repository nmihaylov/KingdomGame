<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Building;
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
//        $resources = $this->getDoctrine()->getRepository(GameResource::class)->findAll();

//        $kingdom->getBuildings()[0]->getBuilding()->getCosts()

        return $this->render('buildings/index.html.twig', [
            'buildings' => $kingdom->getBuildings(),
//            'resources' => $resources,
//            'kingdom_buildings' => $this->calculateBuildingsCosts($this->getKingdomId())
        ]);
    }

    /**
     * @Route("buildings/evolve/{id}", name="building_evolve")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function evolve($id)
    {
//        TODO: to finish this + time cost and so on and so on!

        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $building = $this->getDoctrine()->getRepository(Building::class)->find($id);

        $kingdomBuilding = $this->getDoctrine()->getRepository(KingdomBuilding::class)
            ->findOneBy([
                'kingdom' => $kingdom,
                'building' => $building
            ]);
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
//            TODO: add error message!
                $this->redirectToRoute("buildings_list");
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

        $kingdomBuilding->setLevel($currentLevel + 1);
//        $buildingTimeCostInt = $this->evolveTimeCost($kingdomBuilding->getBuilding()->getTimeCosts()->getAmount(), $currentLevel);
//        $buildingTimeCost = new \DateInterval('PT'.$buildingTimeCostInt.'S');
//        $now = new \DateTime("now");
//        $finishesOn = $now->add($buildingTimeCost);
//        $kingdomBuilding->getBuildingProgress()->setFinishesOn($finishesOn);
//        var_dump($finishesOn);
//        var_dump($kingdomBuilding->getBuildingProgress()->getFinishesOn());exit;

        $em->persist($kingdomBuilding);
        $em->flush();

        return $this->redirectToRoute("buildings_list");
    }

    /**
     * @Route("buildings/evolve/{id}", name="building_evolve")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
//    public function evolve($id)
//    {
//        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
//        $currentBuilding = $this->getDoctrine()->getRepository(KingdomBuilding::class)->find($id);
//        $currentLevel = $currentBuilding->getLevel();
//        $costs = $currentBuilding->getBuilding()->getCosts();
//
//        $em = $this->getDoctrine()->getManager();
//
//        foreach ($costs as $cost) {
//            $resourcesInKingdom = $this->getDoctrine()->getRepository(KingdomResource::class)->findOneBy([
//                'resource' => $cost->getResource(),
//                'kingdom' => $kingdom
//            ]);
//            if ($resourcesInKingdom->getAmount() - $this->evolveCost($cost->getAmount(), $currentLevel) < 0) {
//                return $this->redirectToRoute("buildings_list");
//            }
//            $resourcesInKingdom->setAmount($resourcesInKingdom->getAmount() - $this->evolveCost($cost->getAmount(), $currentLevel));
//            $currentBuilding->setLevel($currentLevel + 1);
//            $em->persist($resourcesInKingdom);
//            $em->flush();
//        }
//
////        $currentBuilding->getBuilding()
//        $em->persist($currentBuilding->getBuilding());
//        $em->flush();
//
//        return $this->redirectToRoute("buildings_list");
//    }

    /**
     * @Route("/buildings/costs", name="buildings_costs")
     * @param null $kingdomId
     * @return array
     */
//    not used
    public function calculateBuildingsCosts($kingdomId)
    {
//        if (!$kingdomId){
//            $kingdomId = $this->getKingdomId();
//        }
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($kingdomId);
        $kingdomBuildings = $this->getDoctrine()->getRepository(KingdomBuilding::class)
            ->findBy([
                'kingdom' => $kingdom
            ]);

        $allCosts = [];
        /** @var KingdomBuilding[] $kingdomBuildings */
        foreach ($kingdomBuildings as $kingdomBuilding) {

            $buildingCurrentLevel = $kingdomBuilding->getLevel();
            $buildingCosts = $kingdomBuilding->getBuilding()->getCosts();
            foreach ($buildingCosts as $buildingCost) {
                $newCost = $this->evolveResourceCost($buildingCost->getAmount(), $buildingCurrentLevel);
//                $buildingCost->setAmount($newCost);
                $allCosts[$kingdomBuilding->getBuilding()->getName()][$buildingCost->getResource()->getName()] = $newCost;
            }
        }
//        var_dump($allCosts);exit;
//        var_dump($allCosts[0]->getBuilding()->getCosts()[0]);
//        var_dump($allCosts[0]->getBuilding()->getCosts()[0]->getAmount());
//        var_dump($allCosts[0]->getBuilding()->getCosts()[0]->getResource()->getName());
//        exit;
        return $allCosts;

    }

    /**
     * @param int $cost
     * @param int $buildingCurrentLevel
     * @return int
     */
    public function evolveResourceCost(int $cost, int $buildingCurrentLevel)
    {
        if ($buildingCurrentLevel == 0){
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
        if ($buildingCurrentLevel == 0){
            $buildingCurrentLevel = 1;
        }
        return $cost * (($buildingCurrentLevel + 1) / 2);
    }
}
