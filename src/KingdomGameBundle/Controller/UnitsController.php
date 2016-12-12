<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomResource;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Unit;
use KingdomGameBundle\Form\UnitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UnitsController extends KingdomCurrentController
{
    /**
     * @Route("/units", name="units")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        /** @var Kingdom $kingdom */
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();

        return $this->render('units/index.html.twig',
            array(
                'units' => $units,
                'kingdom' => $kingdom,
            ));

    }


    /**
     * @Route("armUnit/{id}", name="arm_unit")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function armUnits($id){
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $unit = $this->getDoctrine()->getRepository(Unit::class)->find($id);

        $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
            'kingdom' => $kingdom,
            'unit' => $unit
        ]);

        $unitCosts = $unit->getCosts();


        $allResources = [];
        foreach ($unitCosts as $cost){
            $resourcesInKingdom = $this->getDoctrine()->getRepository(KingdomResource::class)->findOneBy([
                'resource' => $cost->getResource(),
                'kingdom' => $kingdom
            ]);
            if ($resourcesInKingdom->getAmount() >= $cost->getAmount()) {
                $allResources[$cost->getResource()->getName()] = $cost->getAmount();
            } else {
//            TODO: add error message!
                $this->redirectToRoute("units");
            }
        }

        $kingdomResources = $this->getDoctrine()->getRepository(KingdomResource::class)->findBy([
            'kingdom' => $kingdom
        ]);
//        var_dump($kingdomResources);exit;
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

        if ($kingdomUnit === null){
            $kingdomUnit = new KingdomUnit();
            $kingdomUnit->setAmount(0);
            $kingdomUnit->setUnit($unit);
            $kingdomUnit->setKingdom($kingdom);
        }

        $currentUnitAmount = $kingdomUnit->getAmount();
        $kingdomUnit->setAmount($currentUnitAmount + 1);

        $em->persist($kingdomUnit);
        $em->flush();

        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        return $this->render('units/index.html.twig',
            array(
                'units' => $units,
                'kingdom' => $kingdom,
            ));
    }

}
