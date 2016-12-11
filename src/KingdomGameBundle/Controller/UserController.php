<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\GameResource;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomResource;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use KingdomGameBundle\Entity\Player;
use KingdomGameBundle\Form\UserType;
use KingdomGameBundle\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class UserController
 * @package KingdomGameBundle\Controller
 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
 */
//  TODO: rename UserController to  PlayerController
class UserController extends KingdomCurrentController
{
    const MIN_X = 0;
    const MAX_X = 100;
    const MIN_Y = 0;
    const MAX_Y = 100;

    const START_KINGDOMS = 2;

    const INITIAL_RESOURCES = 10000;

    /**
     * @Route("/register", name="user_register")
     * @Security("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $player = new Player();
        $form = $this->createForm(UserType::class, $player);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($player, $player->getPassword());
            $player->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();

//              TODO: move this to function - make kingdom ...
//              TODO: what if run out of space on the map?
            $kingdomRepository = $this->getDoctrine()->getRepository(Kingdom::class);
            for ($i = 0; $i < self::START_KINGDOMS; $i++) {
                do {
                    $x = rand(self::MIN_X, self::MAX_X);
                    $y = rand(self::MIN_Y, self::MAX_Y);
                    $usedKingdom = $kingdomRepository->findOneBy(
                        ['x' => $x, 'y' => $y]
                    );
                } while ($usedKingdom !== null);

                $kingdom = new Kingdom();
                $kingdom->setX($x);
                $kingdom->setY($y);
//                TODO: get something of interesting name from array of names
                $kingdom->setName($player->getUsername() . "_" . ($i + 1));
                $kingdom->setPlayer($player);
                $em->persist($kingdom);
                $em->flush();

//                TODO: make function - add initial resources

                $resourceRepository = $this->getDoctrine()->getRepository(GameResource::class);
                $resourceTypes = $resourceRepository->findAll();

                foreach ($resourceTypes as $resourceType){
                    $kingdomResource = new KingdomResource();
                    $kingdomResource->setResource($resourceType);
                    $kingdomResource->setAmount(self::INITIAL_RESOURCES);
                    $kingdomResource->setKingdom($kingdom);
                    $em->persist($kingdomResource);
                    $em->flush();
                }

            }

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('security_login');
        }

        return $this->render(
            'user/register.html.twig',
            array('form' => $form->createView())
        );
    }


    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        /** @var Player $player */
        $player = $this->getUser();
        return $this->render("user/dashboard.html.twig", [
            'player' => $player,
            'kingdomId' => $this->getKingdomId()
        ]);
    }

    /**
     *
     * @Route("/player/changeKingdom/{id}", name="change_Kingdom")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function changeKingdom($id)
    {
        /** @var Player $player */
        $player = $this->getUser();
        $kingdomRepository = $this->getDoctrine()->getRepository(Kingdom::class);
        $kingdom = $kingdomRepository->findOneBy([
            'id' => $id,
            'player' => $player->getId()
        ]);

        if ($kingdom === null){
            return $this->redirectToRoute("security_logout");
        }
        $this->get('session')->set('kingdom_id', $id);

        return $this->redirectToRoute("dashboard");
    }
}
