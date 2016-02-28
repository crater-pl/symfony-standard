<?php

namespace Inpost\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InpostDemoBundle:Default:index.html.twig');
    }
}
