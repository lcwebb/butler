<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Order;
use AppBundle\Entity\Client;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class OrderController extends Controller
{

    /**
     * @Route("/list_order", name="list_order")
     */
    public function listOrder()
    {
        $orders = $this->getDoctrine()
            ->getRepository('AppBundle:Order')
            ->findAll();

        return $this->render(
            'admin/listing.html.twig',
            array('orders' => $orders)
        );
    }

    public function getButler($id)
    {
        $butler = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find(array('id' => $id,
                    'type' => 'B')
            );

        return $butler;
    }

    public function getManager($id)
    {
        $manager = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find(array('id' => $id,
                    'type' => 'G')
            );

        return $manager;
    }

    public function getClient($id)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        return $client;
    }

    /**
     * @Route("/get_order/{id}", name="get_order")
     */
    public function getOrder($id)
    {
        $order = $this->getDoctrine()
            ->getRepository('AppBundle:Order')
            ->find($id);

        //print_r($order); die('tot)');

        $client = self::getClient($order->getIdClient());
        $manager = self::getManager($order->getIdManager());
        $butler = self::getButler($order->getIdButler());

        return $this->render(
            'admin/index.html.twig',
            array(  'order'     => $order,
                    'manager'   => $manager,
                    'butler'    => $butler,
                    'client'    => $client
                )
        );
    }

    /**
     * @Route("/create_order/{id", name="create_order")
     */
    public function createOrder($id, $ordertext, $idManager, $idButler,
                                $startTime, $endTime, $maxPrice, $validPriceHT, $validPriceTTC, $status, $deliveryAddress,
                                $deliveryCp, $deliveryCity)
    {
        $order = new Order();
        $order->setOrder($ordertext);
        $order->setIdClient($id);
        $order->setIdManager($idManager);
        $order->setIdButler($idButler);
        $order->setStartTime($startTime);
        $order->setEndTime($endTime);
        $order->setMaxPrice($maxPrice);
        $order->setValidPriceHt($validPriceHT);
        $order->setValidPriceTtc($validPriceTTC);
        $order->setStatus($status);
        $order->setDeliveryAddress($deliveryAddress);
        $order->setDeliveryCp($deliveryCp);
        $order->setDeliveryCity($deliveryCity);
        $order->setCreatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();
                
        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($order);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
    }

}
