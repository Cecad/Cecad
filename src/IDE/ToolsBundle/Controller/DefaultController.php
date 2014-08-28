<?php

namespace IDE\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IDEToolsBundle:Default:index.html.twig', array('name' => $name));
    }
}
