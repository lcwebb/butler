<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Demande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DemandeController extends Controller
{

    /**
     * @Route("/list_demande", name="list_demande")
     */
    public function ListDemande()
    {
        $demandes = $this->getDoctrine()
            ->getRepository('AppBundle:Demande')
            ->findAll();

        return $this->render(
        'admin/listing.html.twig',
        array('demandes'  => $demandes)
        );
    }

    /**
     * @Route("/get_demande/{id}", name="get_demande")
     */
    public function getDemande($id)
    {
        $demande = $this->getDoctrine()
            ->getRepository('AppBundle:Demande')
            ->find($id);

        return $this->render(
            'admin/listing.html.twig',
            array('demande'  => $demande)
        );
    }

    /**
     * @Route("/create_demande/{id", name="create_demande")
     */
    public function createDemande($id, $demande, $horaireDebut, $horaireFin, $prixMax, $prixValideHT, $prixValideTTC, $status)
    {
        $Demande = new Demande();
        $Demande->setDemande($demande);
        $Demande->setIdClient($id);
        $Demande->setHoraireDebut($horaireDebut);
        $Demande->setHoraireFin($horaireFin);
        $Demande->setPrixMax($prixMax);
        $Demande->setPrixValideHt($prixValideHT);
        $Demande->setPrixValideTtc($prixValideTTC);
        $Demande->setStatus($status);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Client (no queries yet)
        $em->persist($Demande);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
    }

}