<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KingdomUnit
 *
 * @ORM\Table(name="kingdom_unit")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\KingdomUnitRepository")
 */
class KingdomUnit
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
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Kingdom", inversedBy="units")
     * @ORM\JoinColumn(name="kingdom_id")
     */
    private $kingdom;

    /**
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Unit", inversedBy="kingdomUnits")
     * @ORM\JoinColumn(name="unit_id")
     */
    private $unit;

    /** @var  UnitProgress
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\UnitProgress", mappedBy="unit")
     */
    private $unitProgress;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     * 
     */
    private $amount;


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
     * Set amount
     *
     * @param integer $amount
     *
     * @return KingdomUnit
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Kingdom
     */
    public function getKingdom()
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
     * @return Unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param Unit $unit
     */
    public function setUnit(Unit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return UnitProgress
     */
    public function getUnitProgress()
    {
        return $this->unitProgress;
    }

    /**
     * @param UnitProgress $unitProgress
     */
    public function setUnitProgress(UnitProgress $unitProgress)
    {
        $this->unitProgress = $unitProgress;
    }


}

