<?php

namespace Proyecto\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Content:index.html.twig', array('name' => $name));
    }
}
