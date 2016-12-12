<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KingdomBuilding
 *
 * @ORM\Table(name="kingdom_building")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\KingdomBuildingRepository")
 */
class KingdomBuilding
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
     * @var Kingdom
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Kingdom", inversedBy="buildings")
     * @ORM\JoinColumn(name="kingdom_id")
     */
    private $kingdom;

    /**
     * @var Building
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Building", inversedBy="kingdomBuildings")
     * @ORM\JoinColumn(name="building_id")
     */
    private $building;

    /** @var  BuildingProgress
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\BuildingProgress", mappedBy="building")
     */
    private $buildingProgress;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


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
     * Set level
     *
     * @param integer $level
     *
     * @return KingdomBuilding
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return Kingdom
     */
    public function getKingdom(): Kingdom
    {
        return $this->kingdom;
    }

    /**
     * @param Kingdom $kingdom
     */
    public function setKingdom(Kingdom $kingdom)
    {
        $this->kingdom = $kingdom;
    }

    /**
     * @return Building
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param Building $building
     */
    public function setBuilding(Building $building)
    {
        $this->building = $building;
    }

    /**
     * @return BuildingProgress
     */
    public function getBuildingProgress()
    {
        return $this->buildingProgress;
    }

    /**
     * @param BuildingProgress $buildingProgress
     */
    public function setBuildingProgress(BuildingProgress $buildingProgress)
    {
        $this->buildingProgress = $buildingProgress;
    }

}

