<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Distrital\CecadBundle\Entity\Paquete;


class ContenidosController extends Controller
{
    public function indexAction($pagina)
    {
    	/*
    		ToDo: Hay que revisar si la pagina existe, si no existe entonces
    		redireccionar a inicio y mostrar mensaje de pagina que no existe
    	*/
        return $this->render('DistritalCecadBundle:Contenidos:'.$pagina.'.html.twig', array());
    }
    
    
    public function preciosAction(){
    	
    	
        $em = $this->getDoctrine()->getManager();

        $paquetes = $em->getRepository('DistritalCecadBundle:Paquete')->findAll();
    
    	return $this->render('DistritalCecadBundle:Contenidos:Precios.html.twig', array("paquetes"=>$paquetes));
    }
    
}








