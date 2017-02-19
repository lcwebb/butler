<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="string", length=255, nullable=false)
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_prestation", type="string", length=255, nullable=false)
     */
    private $nombrePrestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Abonnement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     * @return Abonnement
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set nombrePrestation
     *
     * @param string $nombrePrestation
     * @return Abonnement
     */
    public function setNombrePrestation($nombrePrestation)
    {
        $this->nombrePrestation = $nombrePrestation;

        return $this;
    }

    /**
     * Get nombrePrestation
     *
     * @return string 
     */
    public function getNombrePrestation()
    {
        return $this->nombrePrestation;
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
