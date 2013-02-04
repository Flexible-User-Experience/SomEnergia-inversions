<?php

namespace SomEnergia\InversionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SomEnergiaInversionsBundle:Default:index.html.twig', array('name' => $name));
    }
}
