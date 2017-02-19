<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use AppBundle\Entity\Cb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ClientController extends Controller
{
    /**
     * @Route("/list_client", name="list_client")
     */
    public function ListClient()
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
            array('clients'  => $client)
        );
    }

    /**
     * @Route("/create_client", name="create_client")
     */
    public function createClient($nom, $prenom, $email, $password, $telephone, $adresse, $cp, $ville)
    {
        $client = new Client();
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setEmail($email);
        $client->setPassword(md5($password));
        $client->setTelephone($telephone);
        $client->setAdresse($adresse);
        $client->setCp($cp);
        $client->setVille($ville);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($client);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
    }

    /**
     * @Route("/update_client/{id}", name="update_client")
     */
    public function updateClient($id, $nom, $prenom, $email, $telephone, $adresse, $cp, $ville)
    {
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setEmail($email);
        $client->setTelephone($telephone);
        $client->setAdresse($adresse);
        $client->setCp($cp);
        $client->setVille($ville);

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
    public function saveClientCB($id, $numero_carte, $date_expiration, $cvv)
    {
        //envoyer informations bancaires sur braintree -- braintree renvoi un id ($lienVaultBraintree)
        $cbClient = new Cb();
        $cbClient->setDateExpiration($date_expiration);
        $cbClient->setIdClient($id);
        //$cbClient->setLienBraintree($lienVaultBraintree);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($cbClient);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('CB ' . $cbClient->getId(). ' added');

    }

    public function getBraintreeVaultId($id)
    {

        //envoyer ordre de paiement CB avec API braintree


    }
}