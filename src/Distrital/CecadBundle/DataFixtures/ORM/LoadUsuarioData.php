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
    	$usuario->setEstado("X");   // Administrador
		$manager->persist($usuario);
		$manager->flush();
		$this->addReference('usuario_1', $usuario);
		
		
    	$usuario = new Usuario();
    	$usuario->setCedula(1026260827);
    	$usuario->setClave($password);
    	$usuario->setNombre("Hector");
    	$usuario->setApellido("Dussan");
    	$usuario->setCorreo("hector@dussan.com");
    	$usuario->setCelular(123456789);
    	$usuario->setTelefono(123456789);
    	$usuario->setProfesion("Ingeniero");
    	$usuario->setEstado("D");   //// Docente
		$manager->persist($usuario);
		$manager->flush();
		$this->addReference('usuario_2', $usuario);
		
		
		
    	$usuario = new Usuario();
    	$usuario->setCedula(1023887190);
    	$usuario->setClave($password);
    	$usuario->setNombre("Julio");
    	$usuario->setApellido("Pinzon");
    	$usuario->setCorreo("julio@pinzon.com");
    	$usuario->setCelular(123456789);
    	$usuario->setTelefono(123456789);
    	$usuario->setProfesion("Ingeniero");
    	$usuario->setEstado("A");   /// Estudiante
		$manager->persist($usuario);
		$manager->flush();
		$this->addReference('usuario_3', $usuario);
	
		
		

	  
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}





