<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrital\CecadBundle\Entity\Usuario;
use Distrital\CecadBundle\Entity\Proyecto;

use Distrital\CecadBundle\Form\UsuarioType;

/**
 * Docente controller.
 *
 * @Route("/docente")
 */
class DocenteController extends Controller
{

    /**
     * Lists all Usuario entities.
     *
     * @Route("/", name="docente_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proyectos = $em->getRepository('DistritalCecadBundle:Proyecto')->findAll();

        return array(
            'proyectos' => $proyectos,
        );
    }
}
