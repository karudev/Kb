<?php

namespace Kb\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="Kb\CarBundle\Entity\CarRepository")
 */
class Car {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Kb\UserBundle\Entity\User", inversedBy="Car")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    private $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity="Kb\UserBundle\Entity\User", inversedBy="Car")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=64, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_km", type="integer", nullable=true)
     */
    private $nbKm;

    /**
     * @ORM\OneToMany(targetEntity="Kb\CoreBundle\Entity\Pricing", mappedBy="car")
     */
    private $pricings;

    /**
     * @ORM\ManyToOne(targetEntity="Mark", inversedBy="Car")
     * @ORM\JoinColumn(name="mark_id", referencedColumnName="id")
     */
    private $mark;

    /**
     * @ORM\ManyToOne(targetEntity="Engine", inversedBy="Car")
     * @ORM\JoinColumn(name="engine_id", referencedColumnName="id")
     */
    private $engine;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_space", type="integer")
     */
    private $nbSpace;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_door", type="integer")
     */
    private $nbDoor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_conditioned", type="boolean")
     */
    private $isConditioned;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="gearbox", type="string", length=32)
     */
    private $gearbox;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_release", type="datetime")
     */
     private $dateRelease;
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Car
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Car
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Car
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Car
     */
    public function setColor($color) {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Car
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set nbKm
     *
     * @param integer $nbKm
     * @return Car
     */
    public function setNbKm($nbKm) {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return integer 
     */
    public function getNbKm() {
        return $this->nbKm;
    }
    

    /**
     * Set nbSpace
     *
     * @param integer $nbSpace
     * @return Car
     */
    public function setNbSpace($nbSpace) {
        $this->nbSpace = $nbSpace;

        return $this;
    }

    /**
     * Get nbSpace
     *
     * @return integer 
     */
    public function getNbSpace() {
        return $this->nbSpace;
    }

    /**
     * Set isConditioned
     *
     * @param boolean $isConditioned
     * @return Car
     */
    public function setIsConditioned($isConditioned) {
        $this->isConditioned = $isConditioned;

        return $this;
    }

    /**
     * Get isConditioned
     *
     * @return boolean 
     */
    public function getIsConditioned() {
        return $this->isConditioned;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Car
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive() {
        return $this->isActive;
    }

    /**
     * Set gearbox
     *
     * @param string $gearbox
     * @return Car
     */
    public function setGearbox($gearbox) {
        
        $this->gearbox = $gearbox != null ? $gearbox : 'Manuelle';

        return $this;
    }

    /**
     * Get gearbox
     *
     * @return string 
     */
    public function getGearbox() {
        return $this->gearbox;
    }

    /**
     * Set createdBy
     *
     * @param \Kb\UserBundle\Entity\User $createdBy
     * @return Car
     */
    public function setCreatedBy(\Kb\UserBundle\Entity\User $createdBy = null) {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Kb\UserBundle\Entity\User 
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \Kb\UserBundle\Entity\User $updatedBy
     * @return Car
     */
    public function setUpdatedBy(\Kb\UserBundle\Entity\User $updatedBy = null) {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \Kb\UserBundle\Entity\User 
     */
    public function getUpdatedBy() {
        return $this->updatedBy;
    }

    /**
     * Set mark
     *
     * @param \Kb\CarBundle\Entity\Mark $mark
     * @return Car
     */
    public function setMark(\Kb\CarBundle\Entity\Mark $mark = null) {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return \Kb\CarBundle\Entity\Mark 
     */
    public function getMark() {
        return $this->mark;
    }

    /**
     * Set engine
     *
     * @param \Kb\CarBundle\Entity\Engine $engine
     * @return Car
     */
    public function setEngine(\Kb\CarBundle\Entity\Engine $engine = null) {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return \Kb\CarBundle\Entity\Engine 
     */
    public function getEngine() {
        return $this->engine;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Car
     */
    public function setSlug($slug) {
        if ($slug == null || $slug == true) {
            $slug = $this->getId() . '-' . str_replace(' ', '-', $this->getName());
        }
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }


    /**
     * Set nbDoor
     *
     * @param integer $nbDoor
     * @return Car
     */
    public function setNbDoor($nbDoor)
    {
        $this->nbDoor = $nbDoor;

        return $this;
    }

    /**
     * Get nbDoor
     *
     * @return integer 
     */
    public function getNbDoor()
    {
        return $this->nbDoor;
    }

    /**
     * Set dateRelease
     *
     * @param \DateTime $dateRelease
     * @return Car
     */
    public function setDateRelease($dateRelease)
    {
        $this->dateRelease = $dateRelease;

        return $this;
    }

    /**
     * Get dateRelease
     *
     * @return \DateTime 
     */
    public function getDateRelease()
    {
        return $this->dateRelease;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pricings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pricings
     *
     * @param \Kb\CarBundle\Entity\Car $pricings
     * @return Car
     */
    public function addPricing(\Kb\CarBundle\Entity\Car $pricings)
    {
        $this->pricings[] = $pricings;

        return $this;
    }

    /**
     * Remove pricings
     *
     * @param \Kb\CarBundle\Entity\Car $pricings
     */
    public function removePricing(\Kb\CarBundle\Entity\Car $pricings)
    {
        $this->pricings->removeElement($pricings);
    }

    /**
     * Get pricings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPricings()
    {
        return $this->pricings;
    }
}
