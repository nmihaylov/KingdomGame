<?php

namespace KingdomGameBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use KingdomGameBundle\Entity\Battle;
use KingdomGameBundle\Entity\BattleUnits;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Player;
use KingdomGameBundle\Entity\Unit;
use KingdomGameBundle\Form\BattleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class BattleController
 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
 * @package KingdomGameBundle\Controller
 */
class BattleController extends KingdomCurrentController
{
    /**
     * @Route("/kingdoms", name="kingdoms")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        /** @var Kingdom[] $myKingdoms */
        $myKingdoms = $this->getDoctrine()->getRepository(Kingdom::class)->findBy([
            'player' => $this->getUser()
        ]);

        /** @var Kingdom[] $kingdoms */
        $kingdoms = $this->getDoctrine()->getRepository(Kingdom::class)->findAll();

        return $this->render('battles/allKingdoms.html.twig', [
            'kingdoms' => $kingdoms,
            'myKingdoms' => $myKingdoms
        ]);
    }

    /**
     * @Route("/kingdom/{id}", name="view_kingdom")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showKingdom($id)
    {
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->findOneBy([
            'id' => $id
        ]);

        return $this->render('battles/kingdom.html.twig', [
            'kingdom' => $kingdom
        ]);
    }

    /**
     * @Route("/attackKingdom/{id}",name="attack_kingdom")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function attack($id, Request $request)
    {
        $myKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $attackedKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($id);
        $units = $this->getDoctrine()->getRepository(Unit::class)->findAll();
        $battle = new Battle();

        $form = $this->createForm(BattleType::class, $battle);
        $form->handleRequest($request);

        if ($attackedKingdom->getPlayer() == $myKingdom->getPlayer()) {
            $this->addFlash(
                'error',
                'You are now allowed to attack yourself'
            );
            return $this->redirectToRoute("dashboard");
        }

        if ($form->isSubmitted()) {
            $myKingdomX = $myKingdom->getX();
            $myKingdomY = $myKingdom->getY();
            $attackedKingdomX = $attackedKingdom->getX();
            $attackedKingdomY = $attackedKingdom->getY();

            $myKingdomXY = $myKingdomX + $myKingdomY;
            $attackedKingdomXY = $attackedKingdomX + $attackedKingdomY;

            if ($myKingdomXY > $attackedKingdomXY) {
                $roadTimeCostInt = $myKingdomXY - $attackedKingdomXY;
            } else {
                $roadTimeCostInt = $attackedKingdomXY - $myKingdomXY;
            }

//            $roadTimeCostInt += $roadTimeCostInt * 60;

            $roadTimeCost = new \DateInterval('PT' . $roadTimeCostInt . 'S');
            $now = new \DateTime("now");
            $impactOn = $now->add($roadTimeCost);

            $roadBackTimeCostInt = $roadTimeCostInt * 2;
            $roadBackTimeCost = new \DateInterval('PT' . $roadBackTimeCostInt . 'S');
            $now = new \DateTime("now");
            $unitsReturnOn = $now->add($roadBackTimeCost);

            $battle->setAttacker($myKingdom);
            $battle->setDefender($attackedKingdom);
            $battle->setImpactOn($impactOn);
            $battle->setUnitsReturn($unitsReturnOn);
            $battle->setFinished(0);
            $battle->setUnitsReturned(0);

            $em = $this->getDoctrine()->getManager();

//            Adding tha battle
//            $em->persist($battle);
//            $em->flush();

//            Set battle for each battleUnit
            foreach ($battle->getBattleUnits() as $battleUnit) {
                $battleUnit->setBattle($battle);
            }

//            Set into DB battle for each unit
            $em->persist($battle);
            $em->flush();
            $removeBattle = false;

//            Check if battle units are more than in myKingdom
            foreach ($battle->getBattleUnits() as $battleUnit) {
                $battleUnitAmount = $battleUnit->getAmount();
                if ($battleUnitAmount > 0) {
                    $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
                        'unit' => $battleUnit->getUnit(),
                        'kingdom' => $myKingdom
                    ]);

                    if ($kingdomUnit) {
                        if ($kingdomUnit->getAmount() < $battleUnitAmount) {
                            $this->addFlash(
                                'error',
                                'Not enough units from ' . $battleUnit->getUnit()->getName()
                            );
                            $removeBattle = true;
                        }
                    }
                }
            }
//          TODO: if already have a battle then error and it is not finished - battle already happening

//            If battle units are more than in myKingdom then remove battle units and battle from DB
            if ($removeBattle) {
                foreach ($battle->getBattleUnits() as $battleUnit) {
                    $em->remove($battleUnit);
                    $em->flush();
                }

                $em->remove($battle);
                $em->flush();
                return $this->redirectToRoute("attack_kingdom", ['id' => $id]);
            }

//            Set the new amount for each unit in myKingdom after all checks
            foreach ($battle->getBattleUnits() as $battleUnit) {
                $battleUnitAmount = $battleUnit->getAmount();
                if ($battleUnitAmount > 0) {
                    $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
                        'unit' => $battleUnit->getUnit(),
                        'kingdom' => $myKingdom
                    ]);

                    if ($kingdomUnit) {
                        $kingdomUnitCurrentAmount = $kingdomUnit->getAmount();
                        $kingdomUnit->setAmount($kingdomUnitCurrentAmount - $battleUnitAmount);
                        $em->persist($kingdomUnit);
                        $em->flush();
                    }
                }
            }


//            $em->persist($battle);
//            $em->flush();
            $this->addFlash(
                'notice',
                'Battle units sent to ' . $attackedKingdom->getName()
            );
            return $this->redirectToRoute("dashboard");
        }

        return $this->render('battles/sendUnits.html.twig', [
            'attackedKingdom' => $attackedKingdom,
            'myKingdom' => $myKingdom,
            'units' => $units,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("battle/{id}", name="battle_report")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function battleReport($id)
    {
        /** @var Battle $battle */
        $battle = $this->getDoctrine()->getRepository(Battle::class)->findOneBy([
            'id' => $id
        ]);

//        TODO: set unauthorised users to be redirected to dashboard

        return $this->render('battles/report.html.twig', [
            'battle' => $battle
        ]);
    }
}
