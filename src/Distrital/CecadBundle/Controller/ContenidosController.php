<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



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
}








