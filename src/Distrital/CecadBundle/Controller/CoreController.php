<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrital\CecadBundle\Entity\Core;
use Distrital\CecadBundle\Form\CoreType;

use Distrital\CecadBundle\Librerias\Estado;

/**
 * Core controller.
 *
 * @Route("/core")
 */
class CoreController extends Controller
{

    /**
     * Lists all Core entities.
     *
     * @Route("/", name="core")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistritalCecadBundle:Core')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Core entity.
     *
     * @Route("/", name="core_create")
     * @Method("POST")
     * @Template("DistritalCecadBundle:Core:new.html.twig")
     */
    public function createAction(Request $request)
    {
    
    	$usuario = $this->getUser();

		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}
    
        $entity = new Core();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

			$request = $this->getRequest();
			$session = $request->getSession();
			$proyecto = $em->getRepository('DistritalCecadBundle:Proyecto')->find($session->get("idProyecto"));


   
            $entity->setEstado(Estado::SOLICITADO);
            $entity->setProyecto($proyecto);
            $entity->setUsuarioSolicita($usuario);
            
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('core_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Core entity.
     *
     * @param Core $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Core $entity)
    {
        $form = $this->createForm(new CoreType(), $entity, array(
            'action' => $this->generateUrl('core_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Core entity.
     *
     * @Route("/new/{id}", name="core_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($id)
    {
        $entity = new Core();
        $form   = $this->createCreateForm($entity);
        
        
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('DistritalCecadBundle:Proyecto')->find($id);
        
        
    	$request = $this->getRequest();
	    $session = $request->getSession();
	    $session->set("idProyecto", $proyecto->getId());

        return array(
        	'proyecto' => $proyecto,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Core entity.
     *
     * @Route("/{id}", name="core_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Core')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Core entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Core entity.
     *
     * @Route("/{id}/edit", name="core_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Core')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Core entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Core entity.
    *
    * @param Core $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Core $entity)
    {
        $form = $this->createForm(new CoreType(), $entity, array(
            'action' => $this->generateUrl('core_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Core entity.
     *
     * @Route("/{id}", name="core_update")
     * @Method("PUT")
     * @Template("DistritalCecadBundle:Core:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Core')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Core entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('core_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Core entity.
     *
     * @Route("/{id}", name="core_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistritalCecadBundle:Core')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Core entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('core'));
    }

    /**
     * Creates a form to delete a Core entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('core_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
