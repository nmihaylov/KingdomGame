<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Battle;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomBuilding;
use KingdomGameBundle\Entity\KingdomUnit;
use KingdomGameBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class KingdomCurrentController
 * @package KingdomGameBundle\Controller
 */
class KingdomCurrentController extends Controller
{
    public function getKingdomId()
    {
        $session = $this->get('session');
        /** @var Player $player */
        $player = $this->getUser();
        $kingdomId = $session->get('kingdom_id');
        if ($kingdomId == null) {
            $kingdomId = $player->getKingdoms()[0]->getId();
            $session->set('kingdom_id', $kingdomId);
        }

        return $kingdomId;
    }

    public function resourcesAction()
    {
        $id = $this->getKingdomId();
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($id);
        $now = new \DateTime("now");

        $kingdomResources = $kingdom->getResources();
        foreach ($kingdomResources as $kingdomResource) {
            $lastAdded = $kingdomResource->getLastAdded();

            $secondsLeft = $now->getTimestamp() - $lastAdded->getTimestamp();
//            var_dump($secondsLeft);
            if ($secondsLeft > 120) {
                $resourcePerHour = $kingdomResource->getResource()->getAmountPerHour();
                $resourcePerTwoMinutes = $resourcePerHour / 30;
                $timesToUpdate = $secondsLeft / 200;
                $resourceBuilding = $kingdomResource->getResource()->getBuilding();

                /** @var KingdomBuilding $kingdomResourceBuilding */
                $kingdomResourceBuilding = $this->getDoctrine()->getRepository(KingdomBuilding::class)->findOneBy([
                    'kingdom' => $kingdom,
                    'building' => $resourceBuilding
                ]);

                $kingdomResourceBuildingLevel = $kingdomResourceBuilding->getLevel();
                if ($kingdomResourceBuildingLevel == 0) {
                    $resourceAmountAdd = round($timesToUpdate * $resourcePerTwoMinutes);
                } else {
                    $resourceAmountAdd = round($timesToUpdate * $resourcePerTwoMinutes * $kingdomResourceBuildingLevel);
                }

//                var_dump(round($resourceAmountAdd));
                $kingdomResourceCurrentAmount = $kingdomResource->getAmount();
                $kingdomResource->setAmount($kingdomResourceCurrentAmount + $resourceAmountAdd);
                $kingdomResource->setLastAdded($now);
                $em = $this->getDoctrine()->getManager();

                $em->persist($kingdomResource);
                $em->flush();
            }
        }

        return $this->render("kingdoms/partials/resources.html.twig", [
            'kingdom' => $kingdom
        ]);
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function battlesAction()
    {
        $limit = 5;
        $offset = 5;
        $id = $this->getKingdomId();
        $kingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($id);
        /** @var Battle[] $attackerBattles */
        $attackerBattles = $this->getDoctrine()->getRepository(Battle::class)->findBy(
            [
                'attacker' => $kingdom
            ],
            [
                'impactOn' => 'DESC'
            ],
            $limit
        );
        /** @var Battle[] $defenderBattles */
        $defenderBattles = $this->getDoctrine()->getRepository(Battle::class)->findBy(
            [
                'defender' => $kingdom
            ],
            [
                'impactOn' => 'DESC'
            ],
            $limit
        );
        $now = new \DateTime("now");

        foreach ($attackerBattles as $battle) {
            $em = $this->getDoctrine()->getManager();
            if ($battle->getImpactOn() < $now) {
                $battle->setFinished(1);
                $em->persist($battle);
                $em->flush();
            }

            if ($battle->isFinished()) {
                $attackerBattleUnits = $battle->getBattleUnits();
                $defenderBattleUnits = $battle->getDefender()->getUnits();
                $attackerUnitsCoefficient = 0;
                foreach ($attackerBattleUnits as $attackerBattleUnit) {
                    $attackerUnitsCoefficient += $attackerBattleUnit->getAmount() * $attackerBattleUnit->getUnit()->getUnitCoefficient()->getCoefficient();
                }
                $defenderUnitsCoefficient = 0;
                foreach ($defenderBattleUnits as $attackerBattleUnit) {
                    $defenderUnitsCoefficient += $attackerBattleUnit->getAmount() * $attackerBattleUnit->getUnit()->getUnitCoefficient()->getCoefficient();
                }

                if ($attackerUnitsCoefficient >= $defenderUnitsCoefficient) {
                    foreach ($attackerBattleUnits as $attackerBattleUnit) {
                        /** @var KingdomUnit $defenderUnit */
                        $defenderUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
                            'kingdom' => $battle->getDefender(),
                            'unit' => $attackerBattleUnit->getUnit()
                        ]);

                        $defenderUnitAmount = $defenderUnit->getAmount();
                        $attackerUnitAmount = $attackerBattleUnit->getAmount();

                        if ($attackerUnitAmount > $defenderUnitAmount) {
                            $attackerBattleUnit->setAmount($attackerUnitAmount - $defenderUnitAmount);
                            $defenderUnit->setAmount(0);
                        } else {
                            $defenderUnit->setAmount($defenderUnitAmount - $attackerUnitAmount);
                            $attackerBattleUnit->setAmount(0);
                        }

                        $em->persist($defenderUnit);
                        $em->flush();
                        $em->persist($attackerBattleUnit);
                        $em->flush();
                    }

                    $defenderKingdom = $battle->getDefender();
                    $defenderKingdom->setPlayer($battle->getAttacker()->getPlayer());
                    $em->persist($defenderKingdom);
                    $em->flush();
                }

                $now = new \DateTime("now");
                $attackerBattleUnitReturn = $battle->getUnitsReturn();
                if ($battle->isFinished() && $attackerBattleUnitReturn < $now) {
                    if (!$battle->areUnitsReturned()) {
                        $em = $this->getDoctrine()->getManager();
                        $battleUnits = $battle->getBattleUnits();
                        foreach ($battleUnits as $battleUnit) {
                            $battleUnitAmount = $battleUnit->getAmount();
                            if ($battleUnitAmount > 0) {
                                /** @var KingdomUnit $kingdomUnit */
                                $kingdomUnit = $this->getDoctrine()->getRepository(KingdomUnit::class)->findOneBy([
                                    'kingdom' => $kingdom,
                                    'unit' => $battleUnit->getUnit()
                                ]);
                                $kingdomUnitCurrentAmount = $kingdomUnit->getAmount();
                                $kingdomUnit->setAmount($kingdomUnitCurrentAmount + $battleUnitAmount);
                                $em->persist($kingdomUnit);
                                $em->flush();
                            }
                        }
                        $battle->setUnitsReturned(1);
                        $em->persist($battle);
                        $em->flush();
                    }
                }

            }
        }

        return $this->render("battles/partials/battles.html.twig", [
            'attackerBattles' => $attackerBattles,
            'defenderBattles' => $defenderBattles,
            'now' => $now
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function allBattlesAction()
    {
        $now = new \DateTime("now");

        $userAllKingdoms = $this->getDoctrine()->getRepository(Kingdom::class)->findBy([
            'player' => $this->getUser()
        ]);

        /** @var Battle[] $allDefendingBattles */
        $allDefendingBattles = [];
        foreach ($userAllKingdoms as $userKingdom) {
            $kingdomDefendingBattles = $this->getDoctrine()->getRepository(Battle::class)->findBy(
                [
                    'defender' => $userKingdom
                ],
                [
                    'impactOn' => 'DESC'
                ],
                20
            );
            foreach ($kingdomDefendingBattles as $kingdomDefendingBattle) {
                $allDefendingBattles[] = $kingdomDefendingBattle;
            }
        }


        return $this->render("battles/partials/allBattles.html.twig", [
            'allDefendingBattles' => $allDefendingBattles,
            'now' => $now
        ]);
    }

}
