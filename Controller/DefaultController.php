<?php

namespace Prism\SimpleServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PrismSimpleServiceBundle:Default:index.html.twig', array('name' => $name));
    }
}
