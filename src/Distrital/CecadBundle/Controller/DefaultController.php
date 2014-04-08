<?php

namespace Distrital\CecadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DistritalCecadBundle:Default:index.html.twig', array('name' => $name));
    }
}
