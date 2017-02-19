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
        $demande = $this->getDoctrine()
            ->getRepository('AppBundle:Demande')
            ->findAll();

    }

    /**
     * @Route("/get_demande/{id}", name="get_demande")
     */
    public function getDemande($id)
    {
        $demande = $this->getDoctrine()
            ->getRepository('AppBundle:Demande')
            ->find($id);

    }

}