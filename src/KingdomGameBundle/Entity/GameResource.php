<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\GameResourceRepository")
 */
class GameResource
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /** @var  KingdomResource[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\KingdomResource", mappedBy="resource")
     */
    private $kingdomResources;

    public function __construct()
    {
        $this->kingdomResources = new ArrayCollection();
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
     * @return GameResource
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
     * @return KingdomResource[]
     */
    public function getKingdomResources()
    {
        return $this->kingdomResources;
    }

    /**
     * @param KingdomResource[] $kingdomResources
     */
    public function setKingdomResources(array $kingdomResources)
    {
        $this->kingdomResources = $kingdomResources;
    }

}

