<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonnementClient
 *
 * @ORM\Table(name="abonnement_client", indexes={@ORM\Index(name="fk_client_abonnement2_idx", columns={"id_abonnement"}), @ORM\Index(name="IDX_2577B9CAE173B1B8", columns={"id_client"})})
 * @ORM\Entity
 */
class AbonnementClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_prestation_restante", type="integer", nullable=false)
     */
    private $nombrePrestationRestante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateDebut;

    /**
     * @var \AppBundle\Entity\Abonnement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Abonnement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abonnement", referencedColumnName="id")
     * })
     */
    private $idAbonnement;

    /**
     * @var \AppBundle\Entity\Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;



    /**
     * Set nombrePrestationRestante
     *
     * @param integer $nombrePrestationRestante
     * @return AbonnementClient
     */
    public function setNombrePrestationRestante($nombrePrestationRestante)
    {
        $this->nombrePrestationRestante = $nombrePrestationRestante;

        return $this;
    }

    /**
     * Get nombrePrestationRestante
     *
     * @return integer 
     */
    public function getNombrePrestationRestante()
    {
        return $this->nombrePrestationRestante;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return AbonnementClient
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return AbonnementClient
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set idAbonnement
     *
     * @param \AppBundle\Entity\Abonnement $idAbonnement
     * @return AbonnementClient
     */
    public function setIdAbonnement(\AppBundle\Entity\Abonnement $idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;

        return $this;
    }

    /**
     * Get idAbonnement
     *
     * @return \AppBundle\Entity\Abonnement 
     */
    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     * @return AbonnementClient
     */
    public function setIdClient(\AppBundle\Entity\Client $idClient)
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
