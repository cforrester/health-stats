<?php

// src/AppBundle/Entity/VitalPost.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="VitalPost")
 */
 class VitalPost
 {

 	/**
 	 * @ORM\Column(type="integer")
 	 * @ORM\Id
 	 * @ORM\GeneratedValue(strategy="AUTO")
 	 */
 	 protected $id;

 	 /**
 	  * @ORM\Column(type="integer" , name="userid")
 	  * @ORM\GeneratedValue(strategy="AUTO")
 	  */
 	 protected $userid;

 	 /**
 	  * @ORM\Column(type="datetime" , name="date")
 	  */
 	 protected $date;

 	 /**
 	  * @ORM\Column(type="decimal" , name="weight")
 	  */
 	 protected $weight;

 	 /**
 	  * @ORM\Column(type="decimal" , name="bmi")
 	  */
 	 protected $bmi;

 	 /**
 	  * @ORM\Column(type="decimal" , name="bodyfat")
 	  */
 	 protected $bodyfat;

 	 /**
 	  * @ORM\Column(type="decimal" , name="muscle")
 	  */
 	 protected $muscle;

 	 /**
 	  * @ORM\Column(type="integer" , name="rmcal")
 	  */
 	 protected $rmcal;

 	 /**
 	  * @ORM\Column(type="integer" , name="bodyage")
 	  */
 	 protected $bodyage;

 	 /**
 	  * @ORM\Column(type="integer" , name="visceralfat")
 	  */
 	 protected $visceralfat;
 
 	public function __construct()
    {
        $this->date = new \DateTime();
    }

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
     * Set userid
     *
     * @param integer $userid
     * @return VitalPost
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return VitalPost
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return VitalPost
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set bmi
     *
     * @param string $bmi
     * @return VitalPost
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;

        return $this;
    }

    /**
     * Get bmi
     *
     * @return string 
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set bodyfat
     *
     * @param string $bodyfat
     * @return VitalPost
     */
    public function setBodyfat($bodyfat)
    {
        $this->bodyfat = $bodyfat;

        return $this;
    }

    /**
     * Get bodyfat
     *
     * @return string 
     */
    public function getBodyfat()
    {
        return $this->bodyfat;
    }

    /**
     * Set muscle
     *
     * @param string $muscle
     * @return VitalPost
     */
    public function setMuscle($muscle)
    {
        $this->muscle = $muscle;

        return $this;
    }

    /**
     * Get muscle
     *
     * @return string 
     */
    public function getMuscle()
    {
        return $this->muscle;
    }

    /**
     * Set rmcal
     *
     * @param integer $rmcal
     * @return VitalPost
     */
    public function setRmcal($rmcal)
    {
        $this->rmcal = $rmcal;

        return $this;
    }

    /**
     * Get rmcal
     *
     * @return integer 
     */
    public function getRmcal()
    {
        return $this->rmcal;
    }

    /**
     * Set bodyage
     *
     * @param integer $bodyage
     * @return VitalPost
     */
    public function setBodyage($bodyage)
    {
        $this->bodyage = $bodyage;

        return $this;
    }

    /**
     * Get bodyage
     *
     * @return integer 
     */
    public function getBodyage()
    {
        return $this->bodyage;
    }

    /**
     * Set visceralfat
     *
     * @param integer $visceralfat
     * @return VitalPost
     */
    public function setVisceralfat($visceralfat)
    {
        $this->visceralfat = $visceralfat;

        return $this;
    }

    /**
     * Get visceralfat
     *
     * @return integer 
     */
    public function getVisceralfat()
    {
        return $this->visceralfat;
    }
}
