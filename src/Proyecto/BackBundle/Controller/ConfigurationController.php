<?php

namespace Proyecto\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;


class ConfigurationController extends Controller
{
    public function listAction(Request $request)
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Configuration:list.html.twig', array('name' => $name));
    }
    public function newAction(Request $request)
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Configuration:new.html.twig', array('name' => $name));
    }
    public function editAction($id, Request $request)
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Configuration:edit.html.twig', array('name' => $name));
    }
    public function rankAction()
    {
    	$name = '';
        return $this->render('ProyectoBackBundle:Configuration:rank.html.twig', array('name' => $name));
    }
    public function statusPostAction()
    {
		$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;
		$estado = true;
		/*
		$id = $post -> get("id");
		$em = $this -> getDoctrine() -> getManager();
		$object = $em -> getRepository('ProyectoPrincipalBundle:CmsPage') -> find($id);
		$em -> remove($object);
		$em -> flush();
		*/
		
		$respuesta = new response(json_encode(array('estado' => $estado)));
		$respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
    }
    public function removePostAction()
    {
    	
		$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;
		$estado = true;
		/*
		$id = $post -> get("id");
		$em = $this -> getDoctrine() -> getManager();
		$object = $em -> getRepository('ProyectoPrincipalBundle:CmsPage') -> find($id);
		$em -> remove($object);
		$em -> flush();
		*/
		
		$respuesta = new response(json_encode(array('estado' => $estado)));
		$respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
    }
    public function rankPostAction()
    {
		$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;
		$estado = true;

		/*
		$id = $post -> get("id");
		$em = $this -> getDoctrine() -> getManager();
		$object = $em -> getRepository('ProyectoPrincipalBundle:CmsPage') -> find($id);
		$em -> remove($object);
		$em -> flush();
		*/
		
		$respuesta = new response(json_encode(array('estado' => $estado)));
		$respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
    }
}
