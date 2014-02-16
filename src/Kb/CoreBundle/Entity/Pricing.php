<?php

namespace Kb\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricing
 *
 * @ORM\Table(name="pricing")
 * @ORM\Entity(repositoryClass="Kb\CoreBundle\Entity\PricingRepository")
 */
class Pricing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_amount", type="string", length=32)
     */
    private $unitAmount;

    /**
     * @ORM\ManyToOne(targetEntity="Seasion", inversedBy="pricings")
     * @ORM\JoinColumn(name="seasion_id", referencedColumnName="id")
     */
    private $seasion;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="min_duration", type="integer")
     */
    private $min_duration;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="max_duration", type="integer", nullable = true)
     */
    private $max_duration;

    /**
     * @ORM\ManyToOne(targetEntity="Kb\CarBundle\Entity\Car", inversedBy="pricings")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="price_by_default", type="boolean")
     */
    private $priceByDefault;

    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Pricing
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set unitAmount
     *
     * @param string $unitAmount
     * @return Pricing
     */
    public function setUnitAmount($unitAmount)
    {
        $this->unitAmount = $unitAmount;

        return $this;
    }

    /**
     * Get unitAmount
     *
     * @return string 
     */
    public function getUnitAmount()
    {
        return $this->unitAmount;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Pricing
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
     * Set min_duration
     *
     * @param integer $minDuration
     * @return Pricing
     */
    public function setMinDuration($minDuration)
    {
        $this->min_duration = $minDuration;

        return $this;
    }

    /**
     * Get min_duration
     *
     * @return integer 
     */
    public function getMinDuration()
    {
        return $this->min_duration;
    }

    /**
     * Set max_duration
     *
     * @param integer $maxDuration
     * @return Pricing
     */
    public function setMaxDuration($maxDuration)
    {
        $this->max_duration = $maxDuration;

        return $this;
    }

    /**
     * Get max_duration
     *
     * @return integer 
     */
    public function getMaxDuration()
    {
        return $this->max_duration;
    }

    /**
     * Set seasion
     *
     * @param \Kb\CoreBundle\Entity\Seasion $seasion
     * @return Pricing
     */
    public function setSeasion(\Kb\CoreBundle\Entity\Seasion $seasion = null)
    {
        $this->seasion = $seasion;

        return $this;
    }

    /**
     * Get seasion
     *
     * @return \Kb\CoreBundle\Entity\Seasion 
     */
    public function getSeasion()
    {
        return $this->seasion;
    }

    /**
     * Set car
     *
     * @param \Kb\CarBundle\Entity\Car $car
     * @return Pricing
     */
    public function setCar(\Kb\CarBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \Kb\CarBundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set priceByDefault
     *
     * @param boolean $priceByDefault
     * @return Pricing
     */
    public function setPriceByDefault($priceByDefault)
    {
        $this->priceByDefault = $priceByDefault;

        return $this;
    }

    /**
     * Get priceByDefault
     *
     * @return boolean 
     */
    public function getPriceByDefault()
    {
        return $this->priceByDefault;
    }
}
