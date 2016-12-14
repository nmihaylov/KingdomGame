<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomBuilding;
use KingdomGameBundle\Entity\KingdomResource;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Unit;
use KingdomGameBundle\Entity\UnitBuildingDependency;
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
        $now = new \DateTime("now");
//        $buildingDependencies =  $this->getDoctrine()->getRepository(UnitBuildingDependency::class)->findAll();
//        $units[0]->getUnitDependencies()[0]->getBuildingLevel()
        $unitsInProgress = [];
        foreach ($kingdom->getUnits() as $kingdomUnit) {
            /** @var UnitProgress $unitInProgress */
            $unitInProgress = $this->getDoctrine()->getRepository(UnitProgress::class)->findOneBy([
                'unit' => $kingdomUnit->getId()
            ]);
//            var_dump($kingdomUnit->getId());
            if ($unitInProgress) {
                if ($unitInProgress->getFinishesOn() > $now) {
                    $unitsInProgress[] = $unitInProgress;
                } else {
                    $finishedUnit = $unitInProgress->getUnit();
                    $currentAmount = $finishedUnit->getAmount();
                    $finishedUnit->setAmount($currentAmount + $unitInProgress->getAmount());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($finishedUnit);
                    $em->flush();
                    $em->remove($unitInProgress);
                    $em->flush();
                }
            }
//            $unitInProgress->getFinishesOn();
        }

        return $this->render('units/index.html.twig', [
            'units' => $units,
            'kingdom' => $kingdom,
            'unitsInProgress' => $unitsInProgress,
            'now' => $now,
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
//        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        $unit = $this->getDoctrine()->getRepository(Unit::class)->find($id);
        $err = null;
        $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
            'kingdom' => $kingdom,
            'unit' => $unit
        ]);

        $unit->getUnitDependencies();
        foreach ($unit->getUnitDependencies() as $unitDependency){

            $kingdomBuilding = $this->getDoctrine()->getRepository(KingdomBuilding::class)->findOneBy([
                'building' => $unitDependency->getBuilding()->getId(),
                'kingdom' => $kingdom->getId()
            ]);
            $kingdomBuildingLevel = $kingdomBuilding->getLevel();
//                var_dump($kingdomBuildingLevel);
//                var_dump($unitDependency->getBuildingLevel());
            if ($kingdomBuildingLevel < $unitDependency->getBuildingLevel()){
//            TODO: add error message!
                $err = "you do not have the right buildings for this";
                return $this->redirectToRoute("units");
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
                return $this->redirectToRoute("units");
//                return $this->render('units/index.html.twig', [
//                    'units' => $units,
//                    'kingdom' => $kingdom,
//                    'err' => $err
//                ]);
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

//       TODO: TO GET THIS FROM USER INPUT
        $addedUnits = 5;

//        TODO finish when already in progress to throw exception

        $now = new \DateTime("now");
        $unitTimeCostInt = $unit->getTimeCost()->getAmount() * $addedUnits;
        $unitTimeCost = new \DateInterval('PT' . $unitTimeCostInt . 'S');
        $finishesOn = $now->add($unitTimeCost);
        $unitProgress = new UnitProgress();
        $unitProgress->setUnit($kingdomUnit);
        $unitProgress->setFinishesOn($finishesOn);
        $unitProgress->setAmount($addedUnits);

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
