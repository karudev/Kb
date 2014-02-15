<?php


namespace Kb\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string 
     * @ORM\Column(name="firstname", type="string", length=128)
     */
    private $firstname;
    
    /**
     * @var string 
     * @ORM\Column(name="lastname", type="string", length=128)
     */
    private $lastname;

     /**
     * @var string 
     * @ORM\Column(name="phone", type="string", length=10, nullable=true)
     */
    private $phone;
    
     /**
     * @var string 
     * @ORM\Column(name="mobile", type="string", length=10, nullable=true)
     */
    private $mobile;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="UserType")
     * @ORM\JoinColumn(name="user_type_id", referencedColumnName="id")
     */
    private $userType;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set userType
     *
     * @param \Kb\UserBundle\Entity\UserType $userType
     * @return User
     */
    public function setUserType(\Kb\UserBundle\Entity\UserType $userType = null) {
         
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return \Kb\UserBundle\Entity\UserType 
     */
    public function getUserType() {
        return $this->userType;
    }
   


    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
