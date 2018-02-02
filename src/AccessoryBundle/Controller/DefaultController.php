<?php

namespace AccessoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccessoryBundle:Default:index.html.twig');
    }
}
