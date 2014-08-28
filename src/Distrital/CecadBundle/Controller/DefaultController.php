<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Distrital\CecadBundle\Entity\Usuario;
use Distrital\CecadBundle\Form\UsuarioType;


class DefaultController extends Controller
{
    public function indexAction()
    {
    	$request = $this->getRequest(); 
	

		$usuario = $this->getUser();

		if (isset($usuario)){
			return $this->redirect($this->generateUrl('usuario_index'));
		}
		
        return $this->render('DistritalCecadBundle:Default:index.html.twig', 
        		array(
        		
        		));
    }
	public function registroAction()
	{
		$request = $this->get('request');
		$entity = new Usuario();
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('registro'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Registrarse'));
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
			$password = $encoder->encodePassword($entity->getPassword(), "");
			$entity->setClave($password);
			$entity->setSalt("");
			$entity->setEstado("A");
            
            $em->persist($entity);
            $em->flush();
            
            //ToDo: Colocar en la bolsa el mensaje sobre el registro

            return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
        }

        return $this->render('DistritalCecadBundle:Default:registro.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));

    }

    public function loginAction()
    {
		$request = $this->getRequest();
		$session = $request->getSession();
		// get the login error if there is one
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(
						SecurityContext::AUTHENTICATION_ERROR
					);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}


		return $this->render(
				'DistritalCecadBundle:Default:login.html.twig',
				array(
					// last username entered by the user
					'last_username' => $session->get(SecurityContext::LAST_USERNAME),
					'error'=> $error,
				));
	}

}








