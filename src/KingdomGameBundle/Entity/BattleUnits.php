<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BattleUnits
 *
 * @ORM\Table(name="battle_units")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\BattleUnitsRepository")
 */
class BattleUnits
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
     * @var Battle
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Battle", inversedBy="battleUnits", cascade={"persist"})
     * @ORM\JoinColumn(name="battle_id")
     */
    private $battle;

    /**
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Unit", inversedBy="battleUnits", cascade={"persist"})
     * @ORM\JoinColumn(name="unit_id")
     */
    private $unit;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
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
     * @return BattleUnits
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
     * @return Battle
     */
    public function getBattle()
    {
        return $this->battle;
    }

    /**
     * @param Battle $battle
     */
    public function setBattle(Battle $battle)
    {
        $this->battle = $battle;
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

}

