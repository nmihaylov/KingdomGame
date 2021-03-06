<?php

namespace KingdomGameBundle\Controller;

use KingdomGameBundle\Entity\Building;
use KingdomGameBundle\Entity\GameResource;
use KingdomGameBundle\Entity\Kingdom;
use KingdomGameBundle\Entity\KingdomBuilding;
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
//  TODO: rename UserController to PlayerController
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
        $now = new \DateTime("now");

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

//              TODO: make service - add kingdom ...
//              TODO: what if run out of space on the map?
            $kingdomRepository = $this->getDoctrine()->getRepository(Kingdom::class);
            $kingdomNames = ["Aerie Peak","Aldrassil","Allerian Stronghold","Amberpine Lodge","Anvilmar","Astranaar","Auberdine","Azure Watch","Blackfathom Camp","Blood Watch","Brewnall Village","Chillwind Camp","Darkshire","Dolanaar","Eastvale Logging Camp","Farwatcher's Glen","Feathermoon Stronghold","Fizzcrank Airstrip","Fordragon Hold","Forest Song","Fort Wildervar","Goldshire","G cont.","Greenwarden's Grove","Honor Hold","Kharanos","Lakeshire","Lor'danel","Menethil Harbor","Morgan's Vigil","Nethergarde Keep","New Tinkertown","Nijel's Point","Orebor Harborage","Paw'don Village","Pearlfin Village","Pyrewood Village","Refuge Pointe","Rut'theran Village","Sentinel Hill","Southshore","Stardust Spire","Starfall Village","Stars' Rest","Stonetalon Peak","S cont.","Stormfeather Outpost","Surwich","Sylvanaar","Talonbranch Glade","Telaar","Telredor","Temple of Telhamat","Thal'darah Overlook","Thalanaar","Thelsamar","Theramore Isle","Toshley's Station","Tushui Landing","Valgarde","Valiance Keep","Westfall Brigade Encampment","Westguard Keep","Wildhammer Stronghold","Windrunner's Overlook","Windshear Hold","Wintergarde Keep","Agmar's Hammer","Apothecary Camp","Bambala","Bilgewater Harbor","Bloodhoof Village","Bloodvenom Post","Bor'gorok Outpost","Brackenwall Village","Brill","Camp Mojache","Camp Narache","Camp Oneqwah","Camp Taurajo","Camp Winterhoof","Cliffwalker Post","Conquest Hold","Crossroads","Deathknell","The Den","Fairbreeze Village","Falcon Watch","Forsaken Rear Guard","Garadar","Ghost Walker Post","Grim Ulang","Grom'gol Base Camp","Hammerfall","Hellscream's Watch","Honeydew Village","Huojin Landing","Kargath","Mok'Nathal Village","New Agamand","Razor Hill","Revantusk Village","Sen'jin Village","Sepulcher","Shadowmoon Village","S cont.","Shadowprey Village","Silverwind Refuge","Splintertree Post","Stonard","Stonebreaker Hold","Sun Rock Retreat","Sunreaver's Command","Swamprat Post","Tarren Mill","Taunka'le Village","Thunderlord Stronghold","Tidus","Tranquillien","Valormok","Vengeance Landing","Venomspite","Warsong Hold","Zabra'jin","Zoram'gar Outpost"];

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
//                $kingdom->setName($player->getUsername() . "_" . ($i + 1));
                $kingdomNameIndex = array_rand($kingdomNames, 1);
                $kingdom->setName($kingdomNames[$kingdomNameIndex]);
                $kingdom->setPlayer($player);
                $em->persist($kingdom);
                $em->flush();

//                TODO: make service - add initial resources

                $resourceRepository = $this->getDoctrine()->getRepository(GameResource::class);
                $resourceTypes = $resourceRepository->findAll();

                foreach ($resourceTypes as $resourceType){
                    $kingdomResource = new KingdomResource();
                    $kingdomResource->setResource($resourceType);
                    $kingdomResource->setAmount(self::INITIAL_RESOURCES);
                    $kingdomResource->setKingdom($kingdom);
                    $kingdomResource->setLastAdded($now);
                    $em->persist($kingdomResource);
                    $em->flush();
                }

//                TODO: make service - add initial buildings
                $buildingRepository = $this->getDoctrine()->getRepository(Building::class);
                $buildingTypes = $buildingRepository->findAll();
                foreach ($buildingTypes as $buildingType){
                    $kingdomBuilding = new KingdomBuilding();
                    $kingdomBuilding->setKingdom($kingdom);
                    $kingdomBuilding->setBuilding($buildingType);
                    $kingdomBuilding->setLevel(0);
                    $em->persist($kingdomBuilding);
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
