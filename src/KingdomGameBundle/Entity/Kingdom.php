<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * Kingdom
 *
 *
 * @ORM\Table(name="kingdoms", uniqueConstraints={@UniqueConstraint(name="position", columns={"x","y"})})
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\KingdomRepository")
 */
class Kingdom
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="x", type="integer")
     */
    private $x;

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer")
     */
    private $y;

    /**
     * @var Player
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Player", inversedBy="kingdoms")
     * @ORM\JoinColumn(name="player_id")
     */
    private $player;

    /** @var  KingdomResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomResource", mappedBy="kingdom")
     */
    private $resources;


    /** @var  KingdomBuilding[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomBuilding", mappedBy="kingdom")
     */
    private $buildings;

    /** @var  KingdomUnit[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomUnit", mappedBy="kingdom")
     */
    private $units;


    public function __construct()
    {
        $this->resources = new ArrayCollection();
        $this->buildings = new ArrayCollection();
        $this->units = new ArrayCollection();
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
     * @return Kingdom
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
     * Set x
     *
     * @param integer $x
     *
     * @return Kingdom
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return Kingdom
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Player $player
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return KingdomResource[]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param KingdomResource[] $resources
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;
    }

    /**
     * @return KingdomBuilding[]
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    /**
     * @param KingdomBuilding[] $buildings
     */
    public function setBuildings(array $buildings)
    {
        $this->buildings = $buildings;
    }

    /**
     * @return KingdomUnit[]
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param KingdomUnit[] $units
     */
    public function setUnits(array $units)
    {
        $this->units = $units;
    }


    public function __toString()
    {
        return (string)$this->id;
    }
}

