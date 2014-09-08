<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Distrital\CecadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Distrital\CecadBundle\Entity\ParticipanteProyecto;

class LoadParticipanteProyectoData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
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
		$usuario2 = $this->getReference('usuario_2');
		$usuario3 = $this->getReference('usuario_3');
		$proyecto1 = $this->getReference('proyecto_1');
		$proyecto2 = $this->getReference('proyecto_2');
		$proyecto3 = $this->getReference('proyecto_3');
    
    	$participanteProyecto = new ParticipanteProyecto();
		$participanteProyecto->setProyecto($proyecto1);
		$participanteProyecto->setUsuario($usuario3);
		$participanteProyecto->setRol("Dueño");
		$manager->persist($participanteProyecto);
		$manager->flush();
	
    	$participanteProyecto = new ParticipanteProyecto();
		$participanteProyecto->setProyecto($proyecto2);
		$participanteProyecto->setUsuario($usuario3);
		$participanteProyecto->setRol("Dueño");
		$manager->persist($participanteProyecto);
		$manager->flush();
	
    	$participanteProyecto = new ParticipanteProyecto();
		$participanteProyecto->setProyecto($proyecto3);
		$participanteProyecto->setUsuario($usuario3);
		$participanteProyecto->setRol("Dueño");
		$manager->persist($participanteProyecto);
		$manager->flush();

    	$participanteProyecto = new ParticipanteProyecto();
		$participanteProyecto->setProyecto($proyecto3);
		$participanteProyecto->setUsuario($usuario2);
		$participanteProyecto->setRol("Docente");
		$manager->persist($participanteProyecto);
		$manager->flush();
	
	
	
	
	
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}





