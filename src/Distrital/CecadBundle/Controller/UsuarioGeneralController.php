<?php

namespace Distrital\CecadBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Distrital\CecadBundle\Entity\Usuario;
use Distrital\CecadBundle\Entity\ParticipanteProyecto;
use Distrital\CecadBundle\Form\UsuarioType;


/**
* Usuario controller.
*
* @Route("/usuario")
*/
class UsuarioGeneralController extends Controller
{
	/**
	* Displays a form to create a new Inmueble entity.
	*
	* @Route("/", name="usuario_index")
	* @Method("GET")
	* @Template()
	*/
    public function indexAction()
    {
    
		$em = $this->getDoctrine()->getManager();

		$usuario = $this->getUser();

		$id = 0;
		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}
		
		$em = $this->getDoctrine()->getManager();

		$r_participantes = $em->getRepository('DistritalCecadBundle:ParticipanteProyecto');
		$participaciones = $r_participantes->findByUsuario($usuario);
		
		
		
        return $this->render('DistritalCecadBundle:UsuarioGeneral:index_general.html.twig', 
        		array(
					'usuario'=>$usuario,
        			'participaciones'=>$participaciones,
        		));
    }
    
    
	/**
	* Mi perfil action
	*
	* @Route("/", name="usuario_miPerfil")
	* @Method("GET")
	* @Template()
	*/
    public function miPerfilAction()
    {
		$em = $this->getDoctrine()->getManager();

		$usuario = $this->getUser();

		$id = 0;
		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}




        return $this->render('DistritalCecadBundle:UsuarioGeneral:miPerfil.html.twig', 
        		array(
					'usuario'=>$usuario,
        		));
    }




	

	/**
	* Agregar integrante
	*
	* @Route("/agregarIntegrante/{id}", name="usuario_agregar_integrante")
	* @Method({"GET", "POST"})
	* @Template()
	*/
    public function agregarIntegranteAction($id)
    {
		$em = $this->getDoctrine()->getManager();

    	$request = $this->getRequest(); 
		$usuario = $this->getUser();


		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}

		$datos = $request->get('form');

		$cedula = $datos["cedula"];

		$defaultData = array('message' => '');
		$form = $this->createFormBuilder($defaultData)
		    ->add('cedula', 'number',  array('label' => 'Cedula', 'data' => $cedula))
		    ->add('send', 'submit',  array('label' => 'Filtrar'))
		    ->getForm();
		$form->handleRequest($request);
		
		
        $r_usuarios = $em->getRepository('DistritalCecadBundle:Usuario');
        $r_proyectos = $em->getRepository('DistritalCecadBundle:Proyecto');
        $r_partitipante = $em->getRepository('DistritalCecadBundle:ParticipanteProyecto');
        $usuario = $r_usuarios->findOneBy(array("cedula"=>$cedula));
        $proyecto = $r_proyectos->find($id);
        
        
        $novalido=false;
        $mensaje = "";
        
        if ($usuario==null){
        	$novalido=true;
        	if ($cedula!=""){
	        	$mensaje = "El usuario no se encuentra registrado en el sistema";
        	}
        }else{
		
			$listaParticipantes = $proyecto->getParticipantes();
			$novalido = false;
			foreach($listaParticipantes as $participante){
				if ($participante->getUsuario()->getId()==$usuario->getId()){
					$novalido = true;
					$mensaje = "El usuario ya es participante del proyecto como ".$participante->getRol();
				}
			}
		}
		
		
		if (!$form->isValid() || $novalido) {
	        return $this->render('DistritalCecadBundle:UsuarioGeneral:agregarIntegrante.html.twig', 
        		array(
					'cedula'=>$cedula,
					'form'=>$form->createView(),
					'id'=>$id,
					'mensaje'=>$mensaje,
        		));
		}
		
		
		$pp = new ParticipanteProyecto();
		$pp->setUsuario($usuario);
		$pp->setProyecto($proyecto);
		$pp->setRol("Integrante");
		$em = $this->getDoctrine()->getManager();
		$em->persist($pp);
		$em->flush();
		
		
		
		
		
		return $this->redirect($this->generateUrl('usuario_proyecto_show', array('id' => $id)));		
    }








}








