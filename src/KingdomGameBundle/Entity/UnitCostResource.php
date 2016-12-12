<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitCostResource
 *
 * @ORM\Table(name="unit_cost_resource")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\UnitCostResourceRepository")
 */
class UnitCostResource
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
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Unit", inversedBy="costs")
     * @ORM\JoinColumn(name="unit_id")
     */
    private $unit;

    /**
     * @var GameResource
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\GameResource", inversedBy="buildingCosts")
     * @ORM\JoinColumn(name="resource_id")
     */
    private $resource;

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
     * @return UnitCostResource
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

