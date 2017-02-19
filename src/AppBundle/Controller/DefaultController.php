<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
//    public function indexAction(Request $request)
//    {
//        // replace this example code with whatever you need
//        return $this->render('default/index_1.html.twig', array(
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ));
//    }

    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/mentions", name="mentions")
     */

    public function mentionsAction(Request $request)
    {
        return $this->render('default/mentions.html.twig');
    }

    /**
     * @Route("/conditions", name="conditions")
     */

    public function conditionAction(Request $request)
    {
        return $this->render('default/cgv.html.twig');
    }
}