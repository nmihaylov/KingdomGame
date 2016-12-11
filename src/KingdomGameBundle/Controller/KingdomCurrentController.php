<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

        return $this->render("kingdoms/partials/resources.html.twig", [
            'kingdom' => $kingdom
        ]);
    }
}
