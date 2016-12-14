<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitProgress
 *
 * @ORM\Table(name="unit_progress")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\UnitProgressRepository")
 */
class UnitProgress
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
     * @var KingdomUnit
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\KingdomUnit", mappedBy="unitProgress", cascade={"persist"})
     * @ORM\JoinColumn(name="kingdom_unit_id")
     */
    private $unit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishes_on", type="datetime")
     */
    private $finishesOn;

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
     * Set finishesOn
     *
     * @param \DateTime $finishesOn
     *
     * @return UnitProgress
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
     * @return KingdomUnit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param KingdomUnit $unit
     */
    public function setUnit(KingdomUnit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }



}

