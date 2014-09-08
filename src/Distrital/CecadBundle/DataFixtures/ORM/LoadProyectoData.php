<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Distrital\CecadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Distrital\CecadBundle\Entity\Proyecto;

class LoadProyectoData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
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
    
    
    	for($i=0;$i<5;$i++){
			$proyecto = new Proyecto();
		
			$proyecto->setNombre("Nombre proyecto ".$i);
			$proyecto->setPresupuesto(1000000*($i+1));
			$proyecto->setFechaInicio(new \Datetime());
			$proyecto->setFechaFinal(new \Datetime());
			$proyecto->setDescripcion("Descripcion proyecto ".$i);
			$proyecto->setObjetivos("Objetivos proyecto ".$i);
			$proyecto->setEstado("A");
			
			$manager->persist($proyecto);
			$manager->flush();

			$this->addReference('proyecto_'.$i, $proyecto);
		
		}
		
	  
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}





