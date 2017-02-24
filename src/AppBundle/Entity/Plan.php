<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity
 */
class Plan
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
     * @ORM\Column(name="price", type="string", length=255, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="benefit", type="integer", nullable=true)
     */
    private $benefit;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Client", mappedBy="idPlan")
     */
    private $idClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Plan
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
     * Set price
     *
     * @param string $price
     * @return Plan
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set benefit
     *
     * @param integer $benefit
     * @return Plan
     */
    public function setBenefit($benefit)
    {
        $this->benefit = $benefit;

        return $this;
    }

    /**
     * Get benefit
     *
     * @return integer 
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Plan
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
     * @return Plan
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

    /**
     * Add idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     * @return Plan
     */
    public function addIdClient(\AppBundle\Entity\Client $idClient)
    {
        $this->idClient[] = $idClient;

        return $this;
    }

    /**
     * Remove idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     */
    public function removeIdClient(\AppBundle\Entity\Client $idClient)
    {
        $this->idClient->removeElement($idClient);
    }

    /**
     * Get idClient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
