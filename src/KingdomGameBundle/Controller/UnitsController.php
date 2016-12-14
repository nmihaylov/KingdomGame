<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomResource;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Unit;
use KingdomGameBundle\Entity\UnitProgress;
use KingdomGameBundle\Form\KingdomUnitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UnitsController extends KingdomCurrentController
{
    /**
     * @Route("/units", name="units")
     * @param null $err
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($err = null)
    {
        /** @var Kingdom $kingdom */
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        $form = $this->createForm(KingdomUnitType::class);

        return $this->render('units/index.html.twig', [
            'units' => $units,
            'kingdom' => $kingdom,
            'err' => $err,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("armUnit/{id}", name="arm_unit")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function armUnits($id, Request $request)
    {
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        $unit = $this->getDoctrine()->getRepository(Unit::class)->find($id);
        $err = null;
        $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
            'kingdom' => $kingdom,
            'unit' => $unit
        ]);
        $now = new \DateTime("now");


        $unitInProgress = $this->getDoctrine()->getRepository(UnitProgress::class)->findOneBy(['unit' =>$kingdomUnit->getId()]);

        if ($unitInProgress) {
            $isInProgress = $now <= $unitInProgress->getFinishesOn();

            if ($isInProgress){
                $err = "The task is in progress and will be finished on " . $unitInProgress->getFinishesOn()->format('Y-m-d H:i:s');
//                return $this->redirectToRoute("units");
                return $this->render('units/index.html.twig',[
                    'units' => $units,
                    'kingdom' => $kingdom,
                    'err' => $err
                ]);
            }
            else{
//                TODO: find why this gives error - A new entity was found through the relationship.....
                $em->remove($unitInProgress);
                $em->flush();

            }
        }


        $unitCosts = $unit->getCosts();

        $allResources = [];
        foreach ($unitCosts as $cost) {
            $resourcesInKingdom = $this->getDoctrine()->getRepository(KingdomResource::class)->findOneBy([
                'resource' => $cost->getResource(),
                'kingdom' => $kingdom
            ]);
            if ($resourcesInKingdom->getAmount() >= $cost->getAmount()) {
                $allResources[$cost->getResource()->getName()] = $cost->getAmount();
            } else {
//            TODO: add error message!
                $err = "Not enough resources";
//                return $this->redirectToRoute("units");
                return $this->render('units/index.html.twig', [
                    'units' => $units,
                    'kingdom' => $kingdom,
                    'err' => $err
                ]);
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

        if ($kingdomUnit === null) {
            $kingdomUnit = new KingdomUnit();
            $kingdomUnit->setAmount(0);
            $kingdomUnit->setUnit($unit);
            $kingdomUnit->setKingdom($kingdom);
        }

//        TO FINISH THIS
        $addedUnits = 5;
        $currentUnitAmount = $kingdomUnit->getAmount();
        $kingdomUnit->setAmount($currentUnitAmount + $addedUnits);

        $em->persist($kingdomUnit);
        $em->flush();

        $unitTimeCostInt = $unit->getTimeCost()->getAmount() * $addedUnits;
        $unitTimeCost = new \DateInterval('PT' . $unitTimeCostInt . 'S');
        $finishesOn = $now->add($unitTimeCost);
        $unitProgress = new UnitProgress();
        $unitProgress->setUnit($kingdomUnit);
        $unitProgress->setFinishesOn($finishesOn);

        $em->persist($unitProgress);
        $em->flush();


//        return $this->render('units/index.html.twig',[
//                'units' => $units,
//                'kingdom' => $kingdom,
//                'err' => $err
//            ]);

        return $this->redirectToRoute("units");
    }

}
