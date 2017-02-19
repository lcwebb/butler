<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cb
 *
 * @ORM\Table(name="cb", indexes={@ORM\Index(name="fk_client_cb_idx", columns={"id_client"})})
 * @ORM\Entity
 */
class Cb
{
    /**
     * @var string
     *
     * @ORM\Column(name="lien_braintree", type="string", length=255, nullable=true)
     */
    private $lienBraintree;

    /**
     * @var string
     *
     * @ORM\Column(name="date_expiration", type="string", length=255, nullable=true)
     */
    private $dateExpiration;

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
     * Set lienBraintree
     *
     * @param string $lienBraintree
     * @return Cb
     */
    public function setLienBraintree($lienBraintree)
    {
        $this->lienBraintree = $lienBraintree;

        return $this;
    }

    /**
     * Get lienBraintree
     *
     * @return string 
     */
    public function getLienBraintree()
    {
        return $this->lienBraintree;
    }

    /**
     * Set dateExpiration
     *
     * @param string $dateExpiration
     * @return Cb
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return string 
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
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
     * @return Cb
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
