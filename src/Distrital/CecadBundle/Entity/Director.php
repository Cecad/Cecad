<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Distrital\CecadBundle\Entity\EquipoProyecto;

/**
 * Director
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\DirectorRepository")
 */
class Director
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_director", type="integer")
     */
    private $codDirector;
    
    
    

   /**
     * @ORM\OneToMany(targetEntity="EquipoProyecto", mappedBy="director")
     */
    private $equipos;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codDirector
     *
     * @param integer $codDirector
     * @return Director
     */
    public function setCodDirector($codDirector)
    {
        $this->codDirector = $codDirector;

        return $this;
    }

    /**
     * Get codDirector
     *
     * @return integer 
     */
    public function getCodDirector()
    {
        return $this->codDirector;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipos
     *
     * @param \Distrital\CecadBundle\Entity\EquipoProyecto $equipos
     * @return Director
     */
    public function addEquipo(\Distrital\CecadBundle\Entity\EquipoProyecto $equipos)
    {
        $this->equipos[] = $equipos;

        return $this;
    }

    /**
     * Remove equipos
     *
     * @param \Distrital\CecadBundle\Entity\EquipoProyecto $equipos
     */
    public function removeEquipo(\Distrital\CecadBundle\Entity\EquipoProyecto $equipos)
    {
        $this->equipos->removeElement($equipos);
    }

    /**
     * Get equipos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipos()
    {
        return $this->equipos;
    }
}
