<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingsProgress
 *
 * @ORM\Table(name="buildings_progress")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\BuildingsProgressRepository")
 */
class BuildingProgress
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var KingdomBuilding
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\KingdomBuilding", inversedBy="buildingProgress")
     * @ORM\JoinColumn(name="building_id")
     */
    private $building;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishes_on", type="datetimetz")
     */
    private $finishesOn;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set finishesOn
     *
     * @param \DateTime $finishesOn
     *
     * @return BuildingProgress
     */
    public function setFinishesOn($finishesOn)
    {
        $this->finishesOn = $finishesOn;

        return $this;
    }

    /**
     * Get finishesOn
     *
     * @return \DateTime
     */
    public function getFinishesOn()
    {
        return $this->finishesOn;
    }

    /**
     * @return KingdomBuilding
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param KingdomBuilding $building
     */
    public function setBuilding(KingdomBuilding $building)
    {
        $this->building = $building;
    }

}

