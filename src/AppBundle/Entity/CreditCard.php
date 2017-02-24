<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditCard
 *
 * @ORM\Table(name="credit_card", indexes={@ORM\Index(name="fk_client_credit_card_idx", columns={"id_client"})})
 * @ORM\Entity
 */
class CreditCard
{
    /**
     * @var string
     *
     * @ORM\Column(name="braintree_link", type="string", length=255, nullable=true)
     */
    private $braintreeLink;

    /**
     * @var string
     *
     * @ORM\Column(name="expiration_date", type="string", length=45, nullable=true)
     */
    private $expirationDate;

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
     * @var \AppBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;



    /**
     * Set braintreeLink
     *
     * @param string $braintreeLink
     * @return CreditCard
     */
    public function setBraintreeLink($braintreeLink)
    {
        $this->braintreeLink = $braintreeLink;

        return $this;
    }

    /**
     * Get braintreeLink
     *
     * @return string 
     */
    public function getBraintreeLink()
    {
        return $this->braintreeLink;
    }

    /**
     * Set expirationDate
     *
     * @param string $expirationDate
     * @return CreditCard
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return string 
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return CreditCard
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
     * @return CreditCard
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
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     * @return CreditCard
     */
    public function setIdClient(\AppBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \AppBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
