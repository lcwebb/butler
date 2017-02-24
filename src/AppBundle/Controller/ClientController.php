<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DeliveryAddress;
use AppBundle\Entity\Client;
use AppBundle\Entity\CreditCard;
use AppBundle\Entity\Order;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Debug\Debug;
Debug::enable();

class ClientController extends Controller
{
    /**
     * @Route("/list_client", name="list_client")
     */
    public function listClient()
    {
        $clients = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->findAll();

        return $this->render(
            'admin/index.html.twig',
            array('clients'  => $clients)
        );
    }

    /**
    * @Route("/get_client/{id}", name="get_client")
    */
    public function getClient($id)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        return $this->render(
            'admin/index.html.twig',
            array('client'  => $client)
        );
    }


    /**
     * @Route("/get_client_order/{id}", name="get_client_order")
     */
    public function getClientOrder($id)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        //print_r($client);
        $order = $this->getDoctrine()
            ->getRepository('AppBundle:Order')
            ->find($id);

        $tab = array($client);

        $tab[] = $order;

        //print_r($tab[0]->getId()); die;

        return $this->render('admin/index.html.twig', array(
            'tab' => $tab[0],
        ));
    }

    /**
     * @Route("/get_client_order_all", name="get_client_order_all")
     */
    public function getClientOrderAll()
    {
        $clients = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->findAll();

        $orders = $this->getDoctrine()
            ->getRepository('AppBundle:Order')
            ->findAll();

        //print_r($clients); die;


        // renders admin/listing.html.twig
        return $this->render('admin/listing.html.twig', array(
            '$clients' => $clients,
            'orders' => $orders,
        ));
    }

    /**
     * @Route("/create_client", name="create_client")
     */
    public function createClient($name, $firstname, $email, $password, $phone, $address, $cp, $city)
    {
        $client = new Client();
        $client->setName($name);
        $client->setFirstname($firstname);
        $client->setEmail($email);
        $client->setPassword(md5($password));
        $client->setPhone($phone);
        $client->setAddress($address);
        $client->setCp($cp);
        $client->setCity($city);
        $client->setCreatedAt(new \DateTime());

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($client);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
    }

    /**
     * @Route("/update_client/{id}", name="update_client")
     */
    public function updateClient($id, $name, $firstname, $email, $phone, $address, $cp, $city)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        $client->setNom($name);
        $client->setPrenom($firstname);
        $client->setEmail($email);
        $client->setPhone($phone);
        $client->setAdresse($address);
        $client->setCp($cp);
        $client->setVille($city);

        $em = $this->getDoctrine()->getManager();

        $em->persist($client);

        $em->flush();
    }

    /**
     * @Route("/check_password/{id}", name="check_password")
     */
    public function checkPassword($id, $password)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        if (md5($password) != $client->getPassword()) {
            throw $this->createNotFoundException(
                'Not the good password for id ' . $id
            );
        } else
        {
            return new Response('Good password for id ' . $client->getId());
        }
    }

    /**
     * @Route("/change_password/{id}", name="change_password")
     */
    public function changePassword($id, $password)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        $client->setPassword(md5($password));

        $em = $this->getDoctrine()->getManager();

        $em->persist($client);

        $em->flush();

        return new Response('Password ' . $client->getId(). ' updated');
    }

    /**
     * @Route("/save_cb/{id}", name="save_cb")
     */
    public function saveClientCC($id, $cardNumber, $expirationDate, $cvv)
    {
        //envoyer informations bancaires sur braintree -- braintree renvoi un id ($lienVaultBraintree)
        $clientCC = new CreditCard();
        $clientCC->setExpirationDate($expirationDate);
        $clientCC->setIdClient($id);
        //$cbClient->setLienBraintree($lienVaultBraintree);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($clientCC);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('CB ' . $clientCC->getId(). ' added');
    }

    public function getBraintreeVaultId($id)
    {

        //envoyer ordre de paiement CB avec API braintree


    }

    /**
     * @Route("/add_shipping_address/{id}", name="add_shipping_address")
     */
    public function addShippingAdress($id, $address, $cp, $city)
    {
        $shippingAdress = new DeliveryAddress();
        $shippingAdress->setIdClient($id);
        $shippingAdress->setAddress($address);
        $shippingAdress->setCp($cp);
        $shippingAdress->setCity($city);

        $em = $this->getDoctrine()->getManager();

        $em->persist($shippingAdress);

        $em->flush();
    }
}