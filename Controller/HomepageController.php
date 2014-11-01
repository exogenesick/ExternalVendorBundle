<?php

namespace Exogenesick\ExternalVendorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    const BUNDLE_VERSION = 'v1.0.0';

    public function indexAction()
    {
        return $this->render(
            'ExogenesickExternalVendorBundle:Homepage:index.html.twig',
            ['version' => self::BUNDLE_VERSION]
        );
    }
}
