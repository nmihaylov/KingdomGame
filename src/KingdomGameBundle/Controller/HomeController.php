<?php

namespace KingdomGameBundle\Controller;

use Doctrine\ORM\Mapping\Cache;
use KingdomGameBundle\Entity\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="game_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        if ($user){

        }
        return $this->render('game/index.html.twig');
    }
}
