<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Battle;
use KingdomGameBundle\Entity\BattleUnits;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Player;
use KingdomGameBundle\Entity\Unit;
use KingdomGameBundle\Form\BattleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class BattleController extends KingdomCurrentController
{
    /**
     * @Route("/kingdoms", name="kingdoms")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $myKingdoms = $this->getDoctrine()->getRepository(Kingdom::class)->findBy([
            'player' => $this->getUser()
        ]);

        $kingdoms = $this->getDoctrine()->getRepository(Kingdom::class)->findAll();

        $arrAllKingdomsCoordinates = [];
        foreach ($kingdoms as $kingdom){
            $arrAllKingdomsCoordinates[$kingdom->getX()][$kingdom->getY()] = $kingdom->getId();
//            var_dump($kingdom->getX());
//            var_dump($kingdom->getY());
        }
//        var_dump($arrAllKingdomsCoordinates);exit;
        return $this->render('battles/allKingdoms.html.twig', [
            'kingdoms' => $kingdoms,
            'myKingdoms' => $myKingdoms
        ]);
    }

    /**
     * @Route("/kingdom/{id}", name="view_kingdom")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showKingdom($id){
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->findOneBy([
            'id' => $id
        ]);

        return $this->render('battles/kingdom.html.twig',[
           'kingdom' => $kingdom
        ]);
    }

    /**
     * @Route("/attackKingdom/{id}",name="attack_kingdom")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function attack($id, Request $request){

        $myKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $attackedKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($id);
        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        $buildingTimeCostInt = 10;
        $buildingTimeCost = new \DateInterval('PT' . $buildingTimeCostInt . 'S');
        $now = new \DateTime("now");
        $impactOn = $now->add($buildingTimeCost);
        $battle = new Battle();
//
//        $battleUnit = new BattleUnits();
//        $battleUnit->setAmount(12);
//        $battleUnit->setUnit($units[0]);
//        $battle->getBattleUnits()->add($battleUnit);
//
//        $battleUnit = new BattleUnits();
//        $battleUnit->setAmount(7);
//        $battleUnit->setUnit($units[1]);
//        $battle->getBattleUnits()->add($battleUnit);

        $form = $this->createForm(BattleType::class, $battle);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $battle->setAttacker($myKingdom);
            $battle->setDefender($attackedKingdom);
            $battle->setImpactOn($impactOn);

            $em = $this->getDoctrine()->getManager();

            $em->persist($battle);
            $em->flush();
//            $currentUnits = $myKingdom->getUnits();
//            foreach ($currentUnits as $currnetUnit){
//
//            }
//            var_dump($myKingdomUnits[0]->getUnit());
            $myKingdomUnits = [];
            foreach ($myKingdom->getUnits() as $kingdomUnit){
                $myKingdomUnits[] = $kingdomUnit->getUnit()->getName();
            }

            foreach ($battle->getBattleUnits() as $battleUnit) {
//                TODO: to getDoctrine and check if have this unit and if have the amount for this attack
//                if ($battleUnit->getAmount() > 0){
//                    $battleUnitName = $battleUnit->getUnit()->getName();
//                    if (!in_array($battleUnitName, $myKingdomUnits)){
//                        $this->addFlash(
//                            'error',
//                            'You do not have' . $battleUnit->getUnit()->getName()
//                        );
//                        var_dump($battleUnitName);exit;
//                        return $this->redirectToRoute("attack_kingdom", ['id' => $id]);
//                    }
//                }
                var_dump('here2');exit;

                $battleUnit->setBattle($battle);
            }

//            var_dump($battle);exit;
            $em->persist($battle);
            $em->flush();
            return $this->redirectToRoute("attack_kingdom", ['id' => $id]);
        }

            return $this->render('battles/sendUnits.html.twig', [
            'attackedKingdom' => $attackedKingdom,
            'myKingdom' => $myKingdom,
            'units' => $units,
            'form' => $form->createView()
        ]);
    }
}
