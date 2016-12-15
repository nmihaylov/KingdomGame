<?php

namespace KingdomGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Battle
 *
 * @ORM\Table(name="battle")
 * @ORM\Entity(repositoryClass="KingdomGameBundle\Repository\BattleRepository")
 */
class Battle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @var  BattleUnits[]
     *
     * @ORM\OneToMany(targetEntity="KingdomGameBundle\Entity\BattleUnits", mappedBy="battle", cascade={"persist"})
     */
    private $battleUnits;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="impact_on", type="datetime")
     */
    private $impactOn;

    /**
     * @var Kingdom
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Kingdom", inversedBy="id")
     * @ORM\JoinColumn(name="attacker_kingdom_id")
     */
    private $attacker;

    /**
     * @var Kingdom
     *
     * @ORM\ManyToOne(targetEntity="KingdomGameBundle\Entity\Kingdom", inversedBy="id")
     * @ORM\JoinColumn(name="defender_kingdom_id")
     */
    private $defender;

    public function __construct()
    {
        $this->battleUnits = new ArrayCollection();
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
     * Set impactOn
     *
     * @param \DateTime $impactOn
     *
     * @return Battle
     */
    public function setImpactOn($impactOn)
    {
        $this->impactOn = $impactOn;

        return $this;
    }

    /**
     * Get impactOn
     *
     * @return \DateTime
     */
    public function getImpactOn()
    {
        return $this->impactOn;
    }

    /**
     * @return BattleUnits[]
     */
    public function getBattleUnits()
    {
        return $this->battleUnits;
    }

    /**
     * @param BattleUnits[] $battleUnits
     */
    public function setBattleUnits($battleUnits)
    {
        $this->battleUnits = $battleUnits;
    }

    /**
     * @return Kingdom
     */
    public function getAttacker()
    {
        return $this->attacker;
    }

    /**
     * @param Kingdom $attacker
     */
    public function setAttacker(Kingdom $attacker)
    {
        $this->attacker = $attacker;
    }

    /**
     * @return Kingdom
     */
    public function getDefender()
    {
        return $this->defender;
    }

    /**
     * @param Kingdom $defender
     */
    public function setDefender(Kingdom $defender)
    {
        $this->defender = $defender;
    }

    public function addBattleUnit(BattleUnits $battleUnits)
    {
        $this->battleUnits[] = $battleUnits;
        $battleUnits->setBattle($this);
    }



}

