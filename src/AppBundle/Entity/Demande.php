<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="fk_client_demande_idx", columns={"id_client"}), @ORM\Index(name="fk_user_demande1_idx", columns={"id_gestionnaire"}), @ORM\Index(name="fk_user_demande2_idx", columns={"id_butler"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var string
     *
     * @ORM\Column(name="demande", type="text", length=65535, nullable=false)
     */
    private $demande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_debut", type="datetime", nullable=true)
     */
    private $horaireDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_fin", type="datetime", nullable=true)
     */
    private $horaireFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixMax;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_valide_HT", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixValideHt;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_valide_TTC", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixValideTtc;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_butler", referencedColumnName="id")
     * })
     */
    private $idButler;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gestionnaire", referencedColumnName="id")
     * })
     */
    private $idGestionnaire;

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
     * Set demande
     *
     * @param string $demande
     * @return Demande
     */
    public function setDemande($demande)
    {
        $this->demande = $demande;

        return $this;
    }

    /**
     * Get demande
     *
     * @return string 
     */
    public function getDemande()
    {
        return $this->demande;
    }

    /**
     * Set horaireDebut
     *
     * @param \DateTime $horaireDebut
     * @return Demande
     */
    public function setHoraireDebut($horaireDebut)
    {
        $this->horaireDebut = $horaireDebut;

        return $this;
    }

    /**
     * Get horaireDebut
     *
     * @return \DateTime 
     */
    public function getHoraireDebut()
    {
        return $this->horaireDebut;
    }

    /**
     * Set horaireFin
     *
     * @param \DateTime $horaireFin
     * @return Demande
     */
    public function setHoraireFin($horaireFin)
    {
        $this->horaireFin = $horaireFin;

        return $this;
    }

    /**
     * Get horaireFin
     *
     * @return \DateTime 
     */
    public function getHoraireFin()
    {
        return $this->horaireFin;
    }

    /**
     * Set prixMax
     *
     * @param float $prixMax
     * @return Demande
     */
    public function setPrixMax($prixMax)
    {
        $this->prixMax = $prixMax;

        return $this;
    }

    /**
     * Get prixMax
     *
     * @return float 
     */
    public function getPrixMax()
    {
        return $this->prixMax;
    }

    /**
     * Set prixValideHt
     *
     * @param float $prixValideHt
     * @return Demande
     */
    public function setPrixValideHt($prixValideHt)
    {
        $this->prixValideHt = $prixValideHt;

        return $this;
    }

    /**
     * Get prixValideHt
     *
     * @return float 
     */
    public function getPrixValideHt()
    {
        return $this->prixValideHt;
    }

    /**
     * Set prixValideTtc
     *
     * @param float $prixValideTtc
     * @return Demande
     */
    public function setPrixValideTtc($prixValideTtc)
    {
        $this->prixValideTtc = $prixValideTtc;

        return $this;
    }

    /**
     * Get prixValideTtc
     *
     * @return float 
     */
    public function getPrixValideTtc()
    {
        return $this->prixValideTtc;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Demande
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set idButler
     *
     * @param \AppBundle\Entity\User $idButler
     * @return Demande
     */
    public function setIdButler(\AppBundle\Entity\User $idButler = null)
    {
        $this->idButler = $idButler;

        return $this;
    }

    /**
     * Get idButler
     *
     * @return \AppBundle\Entity\User 
     */
    public function getIdButler()
    {
        return $this->idButler;
    }

    /**
     * Set idGestionnaire
     *
     * @param \AppBundle\Entity\User $idGestionnaire
     * @return Demande
     */
    public function setIdGestionnaire(\AppBundle\Entity\User $idGestionnaire = null)
    {
        $this->idGestionnaire = $idGestionnaire;

        return $this;
    }

    /**
     * Get idGestionnaire
     *
     * @return \AppBundle\Entity\User 
     */
    public function getIdGestionnaire()
    {
        return $this->idGestionnaire;
    }

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     * @return Demande
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
