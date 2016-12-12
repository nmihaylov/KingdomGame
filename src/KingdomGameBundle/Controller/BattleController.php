<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function attack($id){

        $myKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($this->getKingdomId());
        $attackedKingdom = $this->getDoctrine()->getRepository(Kingdom::class)->find($id);


        return $this->render('battles/sendUnits.html.twig', [
            'attackedKingdom' => $attackedKingdom,
            'myKingdom' => $myKingdom
        ]);
    }
}
