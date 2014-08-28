<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Distrital\CecadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Distrital\CecadBundle\Entity\Usuario;

class LoadUsuarioData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
    
    	$usuario = new Usuario();
    	
		$encoder = $this->container
			->get('security.encoder_factory')
			->getEncoder($usuario)
			;
		$password = $encoder->encodePassword("123456", "");
    
    	$usuario->setCedula(80213841);
    	$usuario->setClave($password);
    	$usuario->setNombre("Jorge");
    	$usuario->setApellido("Gonzalez");
    	$usuario->setCorreo("jorge@gonzalez.com");
    	$usuario->setCelular(123456789);
    	$usuario->setTelefono(123456789);
    	$usuario->setProfesion("Ingeniero");
    	$usuario->setEstado("A");
    	
		$manager->persist($usuario);
		$manager->flush();

	  
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}





