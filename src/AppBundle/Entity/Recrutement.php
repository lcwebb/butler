<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recrutement
 *
 * @ORM\Table(name="recrutement")
 * @ORM\Entity
 */
class Recrutement
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilite_dimanche", type="string", length=45, nullable=true)
     */
    private $disponibiliteDimanche;

    /**
     * @var string
     *
     * @ORM\Column(name="travail_min_20", type="string", length=45, nullable=true)
     */
    private $travailMin20;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=45, nullable=true)
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime", nullable=true)
     */
    private $dateEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="blob", length=65535, nullable=true)
     */
    private $cv;

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
     * @return Recrutement
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
     * Set prenom
     *
     * @param string $prenom
     * @return Recrutement
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Recrutement
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
     * Set telephone
     *
     * @param string $telephone
     * @return Recrutement
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set disponibiliteDimanche
     *
     * @param string $disponibiliteDimanche
     * @return Recrutement
     */
    public function setDisponibiliteDimanche($disponibiliteDimanche)
    {
        $this->disponibiliteDimanche = $disponibiliteDimanche;

        return $this;
    }

    /**
     * Get disponibiliteDimanche
     *
     * @return string 
     */
    public function getDisponibiliteDimanche()
    {
        return $this->disponibiliteDimanche;
    }

    /**
     * Set travailMin20
     *
     * @param string $travailMin20
     * @return Recrutement
     */
    public function setTravailMin20($travailMin20)
    {
        $this->travailMin20 = $travailMin20;

        return $this;
    }

    /**
     * Get travailMin20
     *
     * @return string 
     */
    public function getTravailMin20()
    {
        return $this->travailMin20;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Recrutement
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
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     * @return Recrutement
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime 
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set cv
     *
     * @param string $cv
     * @return Recrutement
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
