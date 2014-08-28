<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrital\CecadBundle\Entity\Proyecto;
use Distrital\CecadBundle\Entity\ParticipanteProyecto;
use Distrital\CecadBundle\Form\ProyectoType;

/**
 * Proyecto controller.
 *
 * @Route("/usuario/proyecto")
 */
class ProyectoController extends Controller
{

    /**
     * Lists all Proyecto entities.
     *
     * @Route("/", name="usuario_proyecto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
    
		$usuario = $this->getUser();

		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}
		
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistritalCecadBundle:Proyecto')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Proyecto entity.
     *
     * @Route("/", name="usuario_proyecto_create")
     * @Method("POST")
     * @Template("DistritalCecadBundle:Proyecto:new.html.twig")
     */
    public function createAction(Request $request)
    {
		$usuario = $this->getUser();

		if (!isset($usuario)){
			return $this->redirect($this->generateUrl('distrital_cecad_homepage'));
		}
		
        $entity = new Proyecto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setEstado('P');
            $em->persist($entity);
            $em->flush();
            
            $usuario = $this->getUser();
            
            $pp = new ParticipanteProyecto();
            $pp->setProyecto($entity);
            $pp->setUsuario($usuario);
            $pp->setRol("Dueño");
            $em->persist($pp);
            $em->flush();
            

            return $this->redirect($this->generateUrl('usuario_proyecto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Proyecto entity.
    *
    * @param Proyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Proyecto $entity)
    {
        $form = $this->createForm(new ProyectoType(), $entity, array(
            'action' => $this->generateUrl('usuario_proyecto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Registrar'));

        return $form;
    }

    /**
     * Displays a form to create a new Proyecto entity.
     *
     * @Route("/new", name="usuario_proyecto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Proyecto();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Proyecto entity.
     *
     * @Route("/{id}", name="usuario_proyecto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Proyecto entity.
     *
     * @Route("/{id}/edit", name="usuario_proyecto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
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
    * Creates a form to edit a Proyecto entity.
    *
    * @param Proyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Proyecto $entity)
    {
        $form = $this->createForm(new ProyectoType(), $entity, array(
            'action' => $this->generateUrl('usuario_proyecto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Proyecto entity.
     *
     * @Route("/{id}", name="usuario_proyecto_update")
     * @Method("PUT")
     * @Template("DistritalCecadBundle:Proyecto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('usuario_proyecto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Proyecto entity.
     *
     * @Route("/{id}", name="usuario_proyecto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistritalCecadBundle:Proyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Proyecto entity.');
            }
			$entity->setEstado("I");
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuario_proyecto'));
    }

    /**
     * Creates a form to delete a Proyecto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_proyecto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Cancelar proyecto'))
            ->getForm()
        ;
    }
}
