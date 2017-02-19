<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */

    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/listing_page", name="listing_page")
     */

    public function listingAction(Request $request)
    {
        return $this->render('admin/listing.html.twig');
    }
}
