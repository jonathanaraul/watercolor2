<?php

namespace Proyecto\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Helpers:base.html.twig', array('name' => $name));
    }
}
