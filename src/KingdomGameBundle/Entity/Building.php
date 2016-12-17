<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\BuildingRepository")
 */
class Building
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @var  BuildingCostResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\BuildingCostResource", mappedBy="building")
     */
    private $costs;

    /** @var  BuildingCostTime
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\BuildingCostTime", mappedBy="building")
     */
    private $timeCosts;

    /** @var  KingdomBuilding[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomBuilding", mappedBy="buildings")
     */
    private $kingdomBuildings;

    /** @var  UnitBuildingDependency[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\UnitBuildingDependency", mappedBy="building")
     */
    private $buildingDependencies;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /** @var  GameResource
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\GameResource", mappedBy="building")
     */
    private $resource;

    public function __construct()
    {
        $this->costs = new ArrayCollection();
        $this->kingdomBuildings = new ArrayCollection();
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
     * @return Building
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
     * @return BuildingCostResource[]
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * @param BuildingCostResource[] $costs
     */
    public function setCosts(array $costs)
    {
        $this->costs = $costs;
    }

    /**
     * @return BuildingCostTime
     */
    public function getTimeCosts()
    {
        return $this->timeCosts;
    }

    /**
     * @param BuildingCostTime $timeCosts
     */
    public function setTimeCosts(BuildingCostTime $timeCosts)
    {
        $this->timeCosts = $timeCosts;
    }

    /**
     * @return KingdomBuilding[]
     */
    public function getKingdomBuildings()
    {
        return $this->kingdomBuildings;
    }

    /**
     * @param KingdomBuilding[] $kingdomBuildings
     */
    public function setKingdomBuildings(array $kingdomBuildings)
    {
        $this->kingdomBuildings = $kingdomBuildings;
    }

    /**
     * @return UnitBuildingDependency[]
     */
    public function getBuildingDependencies()
    {
        return $this->buildingDependencies;
    }

    /**
     * @param UnitBuildingDependency[] $buildingDependencies
     */
    public function setBuildingDependencies(array $buildingDependencies)
    {
        $this->buildingDependencies = $buildingDependencies;
    }

    /**
     * @return GameResource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param GameResource $resource
     */
    public function setResource(GameResource $resource)
    {
        $this->resource = $resource;
    }


}

