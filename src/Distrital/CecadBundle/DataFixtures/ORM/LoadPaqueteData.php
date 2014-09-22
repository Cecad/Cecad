<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadPaqueteData.php

namespace Distrital\CecadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Distrital\CecadBundle\Entity\Paquete;

class LoadPaqueteData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
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
    
    
    	$datos =array(
    			array("t2.micro", "Micro","1", "1", "20", 50000),
    			array("t2.small", "Micro","1", "2", "20", 80000),
    			array("t2.medium", "Micro","1", "4", "20", 100000),
    			array("m3.medium", "General","3", "4", "50", 150000),
    			array("m3.large", "General","7", "8", "50", 200000),
    			array("m3.xlarge", "General","13", "15", "50", 300000),
    			array("m3.2xlarge", "General","26", "20", "50", 400000),
    		);
    
    	foreach($datos as $i=>$d){
			$paquete = new Paquete();

			$paquete->setNombre($d[0]);
			$paquete->setCategoria($d[1]);
			$paquete->setRam($d[2]);
			$paquete->setProcesador($d[3]);
			$paquete->setAlmacenamiento($d[4]);
			$paquete->setPrecio($d[5]);
			$manager->persist($paquete);
			$manager->flush();
			$this->addReference('paquete_'.$i, $paquete);
    	}
		
		

	  
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}





