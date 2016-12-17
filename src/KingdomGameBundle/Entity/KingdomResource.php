<?php

namespace KingdomGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KingdomResource
 *
 * @ORM\Table(name="kingdom_resource")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\KingdomResourceRepository")
 */
class KingdomResource
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
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Kingdom", inversedBy="resources")
     * @ORM\JoinColumn(name="kingdom_id")
     */
    private $kingdom;

    /**
     * @var GameResource
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\GameResource", inversedBy="kingdomResources")
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_added", type="datetime")
     */
    private $lastAdded;

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
     * @return KingdomResource
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
    public function getKingdom(): Kingdom
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

    /**
     * @return \DateTime
     */
    public function getLastAdded()
    {
        return $this->lastAdded;
    }

    /**
     * @param \DateTime $lastAdded
     */
    public function setLastAdded(\DateTime $lastAdded)
    {
        $this->lastAdded = $lastAdded;
    }

}

