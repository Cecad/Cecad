<?php

namespace Distrital\CecadBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Distrital\CecadBundle\Entity\Usuario;
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
		
		
		
        return $this->render('DistritalCecadBundle:Usuario:index_general.html.twig', 
        		array(
					'usuario'=>$usuario,
        			'participaciones'=>$participaciones,
        		));
    }
}
