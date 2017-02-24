<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recruitment
 *
 * @ORM\Table(name="recruitment")
 * @ORM\Entity
 */
class Recruitment
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="availability_sunday", type="string", length=45, nullable=true)
     */
    private $availabilitySunday;

    /**
     * @var string
     *
     * @ORM\Column(name="available_more_than_20_hours", type="string", length=45, nullable=true)
     */
    private $availableMoreThan20Hours;

    /**
     * @var string
     *
     * @ORM\Column(name="auto_entrepreneur", type="string", length=45, nullable=true)
     */
    private $autoEntrepreneur;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=45, nullable=true)
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="datetime", nullable=true)
     */
    private $registrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="blob", length=65535, nullable=true)
     */
    private $cv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finished_at", type="datetime", nullable=true)
     */
    private $finishedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Recruitment
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
     * Set firstname
     *
     * @param string $firstname
     * @return Recruitment
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
     * Set email
     *
     * @param string $email
     * @return Recruitment
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Recruitment
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
     * Set availabilitySunday
     *
     * @param string $availabilitySunday
     * @return Recruitment
     */
    public function setAvailabilitySunday($availabilitySunday)
    {
        $this->availabilitySunday = $availabilitySunday;

        return $this;
    }

    /**
     * Get availabilitySunday
     *
     * @return string 
     */
    public function getAvailabilitySunday()
    {
        return $this->availabilitySunday;
    }

    /**
     * Set availableMoreThan20Hours
     *
     * @param string $availableMoreThan20Hours
     * @return Recruitment
     */
    public function setAvailableMoreThan20Hours($availableMoreThan20Hours)
    {
        $this->availableMoreThan20Hours = $availableMoreThan20Hours;

        return $this;
    }

    /**
     * Get availableMoreThan20Hours
     *
     * @return string 
     */
    public function getAvailableMoreThan20Hours()
    {
        return $this->availableMoreThan20Hours;
    }

    /**
     * Set autoEntrepreneur
     *
     * @param string $autoEntrepreneur
     * @return Recruitment
     */
    public function setAutoEntrepreneur($autoEntrepreneur)
    {
        $this->autoEntrepreneur = $autoEntrepreneur;

        return $this;
    }

    /**
     * Get autoEntrepreneur
     *
     * @return string 
     */
    public function getAutoEntrepreneur()
    {
        return $this->autoEntrepreneur;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Recruitment
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Recruitment
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime 
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set cv
     *
     * @param string $cv
     * @return Recruitment
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Recruitment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set finishedAt
     *
     * @param \DateTime $finishedAt
     * @return Recruitment
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Get finishedAt
     *
     * @return \DateTime 
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
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
}
