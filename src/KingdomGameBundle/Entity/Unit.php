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
    private $timeCosts;

    /** @var  KingdomUnit[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomUnit", mappedBy="unit")
     */
    private $kingdomUnits;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    public function __construct()
    {
        $this->costs = new ArrayCollection();
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
    public function getTimeCosts()
    {
        return $this->timeCosts;
    }

    /**
     * @param UnitCostTime $timeCosts
     */
    public function setTimeCosts(UnitCostTime $timeCosts)
    {
        $this->timeCosts = $timeCosts;
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

}
