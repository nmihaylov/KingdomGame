<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitBuildingDependency
 *
 * @ORM\Table(name="unit_building_dependency")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\UnitBuildingDependencyRepository")
 */
class UnitBuildingDependency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @var  Unit
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Unit", inversedBy="unitDependencies")
     */
    private $unit;

    /** @var  Building
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Building", inversedBy="buildingDependencies")
     */
    private $building;

    /**
     * @var int
     *
     * @ORM\Column(name="buildingLevel", type="integer")
     */
    private $buildingLevel;

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
     * Set buildingLevel
     *
     * @param integer $buildingLevel
     *
     * @return UnitBuildingDependency
     */
    public function setBuildingLevel($buildingLevel)
    {
        $this->buildingLevel = $buildingLevel;

        return $this;
    }

    /**
     * Get buildingLevel
     *
     * @return int
     */
    public function getBuildingLevel()
    {
        return $this->buildingLevel;
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

