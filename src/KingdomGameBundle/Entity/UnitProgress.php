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
     * @ORM\OneToOne(targetEntity="KingdomGameBundle\Entity\KingdomUnit", inversedBy="unitProgress")
     * @ORM\JoinColumn(name="unit_id")
     */
    private $unit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishes_on", type="datetime")
     */
    private $finishesOn;


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
}

