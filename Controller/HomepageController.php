<?php

namespace Exogenesick\SimpleServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExogenesickExternalVendorBundle:Homepage:index.html.twig', array('name' => $name));
    }
}
