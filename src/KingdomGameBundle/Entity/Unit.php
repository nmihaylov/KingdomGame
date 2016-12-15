<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table(name="unit")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\UnitRepository")
 */
class Unit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @var  UnitCostResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\UnitCostResource", mappedBy="unit")
     */
    private $costs;

    /** @var  UnitCostTime
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\UnitCostTime", mappedBy="unit")
     */
    private $timeCost;

    /** @var  KingdomUnit[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomUnit", mappedBy="unit")
     */
    private $kingdomUnits;

    /** @var  BattleUnits[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\BattleUnits", mappedBy="battle")
     */
    private $battleUnits;

    /** @var  UnitBuildingDependency[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\UnitBuildingDependency", mappedBy="unit")
     */
    private $unitDependencies;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    public function __construct()
    {
        $this->costs = new ArrayCollection();
        $this->battleUnits = new ArrayCollection();
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
     * @return Unit
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
     * @return UnitCostResource[]
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * @param UnitCostResource[] $costs
     */
    public function setCosts(array $costs)
    {
        $this->costs = $costs;
    }

    /**
     * @return UnitCostTime
     */
    public function getTimeCost()
    {
        return $this->timeCost;
    }

    /**
     * @param UnitCostTime $timeCost
     */
    public function setTimeCost(UnitCostTime $timeCost)
    {
        $this->timeCost = $timeCost;
    }

    /**
     * @return KingdomUnit[]
     */
    public function getKingdomUnits()
    {
        return $this->kingdomUnits;
    }

    /**
     * @param KingdomUnit[] $kingdomUnits
     */
    public function setKingdomUnits(array $kingdomUnits)
    {
        $this->kingdomUnits = $kingdomUnits;
    }

    /**
     * @return BattleUnits[]
     */
    public function getBattleUnits()
    {
        return $this->battleUnits;
    }

    /**
     * @param BattleUnits[] $battleUnits
     */
    public function setBattleUnits(array $battleUnits)
    {
        $this->battleUnits = $battleUnits;
    }

    /**
     * @return UnitBuildingDependency[]
     */
    public function getUnitDependencies()
    {
        return $this->unitDependencies;
    }

    /**
     * @param UnitBuildingDependency[] $unitDependencies
     */
    public function setUnitDependencies(array $unitDependencies)
    {
        $this->unitDependencies = $unitDependencies;
    }

    public function __toString()
    {
        return (string)$this->id;
    }
}

