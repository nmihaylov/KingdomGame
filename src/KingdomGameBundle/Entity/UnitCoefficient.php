<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitCoefficient
 *
 * @ORM\Table(name="unit_coefficient")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\UnitCoefficientRepository")
 */
class UnitCoefficient
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
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\Unit", inversedBy="unitCoefficient")
     * @ORM\JoinColumn(name="unit_id")
     */
    private $unit;

    /**
     * @var int
     *
     * @ORM\Column(name="coefficient", type="integer")
     */
    private $coefficient;


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
     * Set coefficient
     *
     * @param integer $coefficient
     *
     * @return UnitCoefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return int
     */
    public function getCoefficient()
    {
        return $this->coefficient;
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

