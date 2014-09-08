<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrital\CecadBundle\Entity\Hito;
use Distrital\CecadBundle\Form\HitoType;

/**
 * Hito controller.
 *
 * @Route("/hito")
 */
class HitoController extends Controller
{

    /**
     * Lists all Hito entities.
     *
     * @Route("/", name="hito")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistritalCecadBundle:Hito')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Hito entity.
     *
     * @Route("/", name="hito_create")
     * @Method("POST")
     * @Template("DistritalCecadBundle:Hito:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Hito();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hito_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Hito entity.
     *
     * @param Hito $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hito $entity)
    {
        $form = $this->createForm(new HitoType(), $entity, array(
            'action' => $this->generateUrl('hito_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hito entity.
     *
     * @Route("/new", name="hito_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Hito();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Hito entity.
     *
     * @Route("/{id}", name="hito_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Hito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Hito entity.
     *
     * @Route("/{id}/edit", name="hito_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Hito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hito entity.');
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
    * Creates a form to edit a Hito entity.
    *
    * @param Hito $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hito $entity)
    {
        $form = $this->createForm(new HitoType(), $entity, array(
            'action' => $this->generateUrl('hito_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hito entity.
     *
     * @Route("/{id}", name="hito_update")
     * @Method("PUT")
     * @Template("DistritalCecadBundle:Hito:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritalCecadBundle:Hito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hito_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Hito entity.
     *
     * @Route("/{id}", name="hito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistritalCecadBundle:Hito')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hito entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hito'));
    }

    /**
     * Creates a form to delete a Hito entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hito_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
