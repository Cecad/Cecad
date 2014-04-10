<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Distrital\CecadBundle\Entity\Director;
use Distrital\CecadBundle\Entity\EquipoProyecto;


class DefaultController extends Controller
{
    public function indexAction()
    {
    
    	$r_director = $this->getDoctrine()->getRepository('DistritalCecadBundle:Director');
    	$r_equipoProyecto = $this->getDoctrine()->getRepository('DistritalCecadBundle:EquipoProyecto');

    	
    	$request = $this->getRequest(); 
    	$accion = $request->get("accion");
    	
    	
    	if (!is_null($accion)){
			if (strcmp($accion, "agregar")==0){
				$codigo = $request->get("codigo");
				$directorNuevo = new Director();
				$directorNuevo->setCodDirector($codigo);
				
				
		        $em = $this->getDoctrine()->getManager();
		        $em->persist($directorNuevo);
		        $em->flush();
			}
			if (strcmp($accion, "agregarEquipoProyecto")==0){
				$fecha_ini = $request->get("fecha_ini");
				$estado_equ_pro = $request->get("estado_equ_pro");
				$codigo = $request->get("codigo");
				
				$director = $r_director->findOneByCodDirector($codigo);
				
				
				
				$equipoNuevo = new EquipoProyecto();
				
				$equipoNuevo->setFechaIni(new \Datetime($fecha_ini));
				$equipoNuevo->setEstadoEquPro($estado_equ_pro);
				$equipoNuevo->setDirector($director);
				
				
		        $em = $this->getDoctrine()->getManager();
		        $em->persist($equipoNuevo);
		        $em->flush();
			}
    	}
    


		$directores = $r_director->findAll();
		$equiposProyecto = array();//$r_equipoProyecto->findAll();

		
		

        return $this->render('DistritalCecadBundle:Default:index.html.twig', 
        		array(
        			'directores'=>$directores,
        			'equiposProyecto' => $equiposProyecto,
        		
        		));
    }


}








