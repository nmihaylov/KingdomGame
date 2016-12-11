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
        $resources = $this->getDoctrine()->getRepository(GameResource::class)->findAll();

//TODO: fix when only 2 of 3 resources to be shown
//        var_dump( $kingdom->getBuildings()[0]->getBuilding()->getCosts()[2]);exit;

        return $this->render('buildings/index.html.twig', [
            'buildings' => $kingdom->getBuildings(),
            'resources' => $resources
        ]);
    }

    /**
     * @Route("buildings/evolve/{id}", name="building_evolve")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function evolve($id)
    {
//        TODO: to finish this + time and so on and so on!

        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $building = $this->getDoctrine()->getRepository(Building::class)->find($id);

//    TODO: check if you have resources

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
//            TODO: get this formula for costs somewhere else !
            if ($resourcesInKingdom->getAmount() >= ($cost->getAmount() * 1.5 * ($currentLevel + 1))) {
                $allResources[$cost->getResource()->getName()] = $cost->getAmount() * 1.5 * ($currentLevel + 1);
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
        $em->persist($kingdomBuilding);
        $em->flush();

        return $this->redirectToRoute("buildings_list");
    }
}
