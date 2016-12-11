<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingCostTime
 *
 * @ORM\Table(name="building_cost_time")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\BuildingCostTimeRepository")
 */
class BuildingCostTime
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
     * @var Building
     *
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\Building", inversedBy="timeCosts")
     * @ORM\JoinColumn(name="building_id")
     */
    private $building;

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
     * @return BuildingCostTime
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

