<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", indexes={@ORM\Index(name="fk_client_order_idx", columns={"id_client"}), @ORM\Index(name="fk_user_order1_idx", columns={"id_manager"}), @ORM\Index(name="fk_user_order2_idx", columns={"id_butler"})})
 * @ORM\Entity
 */
class Order
{
    /**
     * @var string
     *
     * @ORM\Column(name="order", type="text", length=65535, nullable=false)
     */
    private $order;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var float
     *
     * @ORM\Column(name="max_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="valid_price_HT", type="float", precision=10, scale=0, nullable=true)
     */
    private $validPriceHt;

    /**
     * @var float
     *
     * @ORM\Column(name="valid_price_TTC", type="float", precision=10, scale=0, nullable=true)
     */
    private $validPriceTtc;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="pick_up_address", type="text", length=65535, nullable=true)
     */
    private $pickUpAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="pick_up_cp", type="string", length=5, nullable=true)
     */
    private $pickUpCp;

    /**
     * @var string
     *
     * @ORM\Column(name="pick_up_city", type="string", length=255, nullable=true)
     */
    private $pickUpCity;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address", type="text", length=65535, nullable=true)
     */
    private $deliveryAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_cp", type="string", length=5, nullable=true)
     */
    private $deliveryCp;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_city", type="string", length=255, nullable=true)
     */
    private $deliveryCity;

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
     *   @ORM\JoinColumn(name="id_manager", referencedColumnName="id")
     * })
     */
    private $idManager;

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
     * Set order
     *
     * @param string $order
     * @return Order
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return string 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Order
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return Order
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set maxPrice
     *
     * @param float $maxPrice
     * @return Order
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get maxPrice
     *
     * @return float 
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set validPriceHt
     *
     * @param float $validPriceHt
     * @return Order
     */
    public function setValidPriceHt($validPriceHt)
    {
        $this->validPriceHt = $validPriceHt;

        return $this;
    }

    /**
     * Get validPriceHt
     *
     * @return float 
     */
    public function getValidPriceHt()
    {
        return $this->validPriceHt;
    }

    /**
     * Set validPriceTtc
     *
     * @param float $validPriceTtc
     * @return Order
     */
    public function setValidPriceTtc($validPriceTtc)
    {
        $this->validPriceTtc = $validPriceTtc;

        return $this;
    }

    /**
     * Get validPriceTtc
     *
     * @return float 
     */
    public function getValidPriceTtc()
    {
        return $this->validPriceTtc;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Order
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
     * Set pickUpAddress
     *
     * @param string $pickUpAddress
     * @return Order
     */
    public function setPickUpAddress($pickUpAddress)
    {
        $this->pickUpAddress = $pickUpAddress;

        return $this;
    }

    /**
     * Get pickUpAddress
     *
     * @return string 
     */
    public function getPickUpAddress()
    {
        return $this->pickUpAddress;
    }

    /**
     * Set pickUpCp
     *
     * @param string $pickUpCp
     * @return Order
     */
    public function setPickUpCp($pickUpCp)
    {
        $this->pickUpCp = $pickUpCp;

        return $this;
    }

    /**
     * Get pickUpCp
     *
     * @return string 
     */
    public function getPickUpCp()
    {
        return $this->pickUpCp;
    }

    /**
     * Set pickUpCity
     *
     * @param string $pickUpCity
     * @return Order
     */
    public function setPickUpCity($pickUpCity)
    {
        $this->pickUpCity = $pickUpCity;

        return $this;
    }

    /**
     * Get pickUpCity
     *
     * @return string 
     */
    public function getPickUpCity()
    {
        return $this->pickUpCity;
    }

    /**
     * Set deliveryAddress
     *
     * @param string $deliveryAddress
     * @return Order
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return string 
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set deliveryCp
     *
     * @param string $deliveryCp
     * @return Order
     */
    public function setDeliveryCp($deliveryCp)
    {
        $this->deliveryCp = $deliveryCp;

        return $this;
    }

    /**
     * Get deliveryCp
     *
     * @return string 
     */
    public function getDeliveryCp()
    {
        return $this->deliveryCp;
    }

    /**
     * Set deliveryCity
     *
     * @param string $deliveryCity
     * @return Order
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;

        return $this;
    }

    /**
     * Get deliveryCity
     *
     * @return string 
     */
    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Order
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
     * @return Order
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
     * Set idButler
     *
     * @param \AppBundle\Entity\User $idButler
     * @return Order
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
     * Set idManager
     *
     * @param \AppBundle\Entity\User $idManager
     * @return Order
     */
    public function setIdManager(\AppBundle\Entity\User $idManager = null)
    {
        $this->idManager = $idManager;

        return $this;
    }

    /**
     * Get idManager
     *
     * @return \AppBundle\Entity\User 
     */
    public function getIdManager()
    {
        return $this->idManager;
    }

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     * @return Order
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
