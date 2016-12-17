<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\GameResourceRepository")
 */
class GameResource
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /** @var  KingdomResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomResource", mappedBy="resource")
     */
    private $kingdomResources;


    /** @var  BuildingCostResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\BuildingCostResource", mappedBy="resource")
     */
    private $buildingCosts;


    /** @var  UnitCostResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\UnitCostResource", mappedBy="resource")
     */
    private $unitCosts;

    /**
     * @var Building
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\Building", inversedBy="resource")
     * @ORM\JoinColumn(name="building_id")
     */
    private $building;

    /**
     * @var int
     *
     * @ORM\Column(name="amount_per_hour", type="integer")
     */
    private $amountPerHour;

    public function __construct()
    {
        $this->kingdomResources = new ArrayCollection();
        $this->buildingCosts = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return GameResource
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return KingdomResource[]
     */
    public function getKingdomResources()
    {
        return $this->kingdomResources;
    }

    /**
     * @param KingdomResource[] $kingdomResources
     */
    public function setKingdomResources(array $kingdomResources)
    {
        $this->kingdomResources = $kingdomResources;
    }

    /**
     * @return BuildingCostResource[]
     */
    public function getBuildingCosts()
    {
        return $this->buildingCosts;
    }

    /**
     * @param BuildingCostResource[] $buildingCosts
     */
    public function setBuildingCosts(array $buildingCosts)
    {
        $this->buildingCosts = $buildingCosts;
    }

    /**
     * @return UnitCostResource[]
     */
    public function getUnitCosts()
    {
        return $this->unitCosts;
    }

    /**
     * @param UnitCostResource[] $unitCosts
     */
    public function setUnitCosts(array $unitCosts)
    {
        $this->unitCosts = $unitCosts;
    }

    /**
     * @return int
     */
    public function getAmountPerHour()
    {
        return $this->amountPerHour;
    }

    /**
     * @param int $amountPerHour
     */
    public function setAmountPerHour(int $amountPerHour)
    {
        $this->amountPerHour = $amountPerHour;
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

}

