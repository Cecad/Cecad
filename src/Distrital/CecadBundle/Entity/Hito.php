<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hito
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\HitoRepository")
 */
class Hito
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
	* @ORM\ManyToOne(targetEntity="Proyecto")
	* @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
	*/	
	protected $proyecto;


    /**
     * @var integer
     *
     * @ORM\Column(name="entregaHito", type="string", length=255)
     */
    private $entregaHito;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreEntrega", type="string", length=255)
     */
    private $nombreEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrega", type="datetime")
     */
    private $fechaEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="calificacionHito", type="float")
     */
    private $calificacionHito;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoHito", type="string", length=1)
     */
    private $estadoHito;

    /**
     * @var string
     *
     * @ORM\Column(name="correciones", type="text")
     */
    private $correciones;



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
     * Set entregaHito
     *
     * @param string $entregaHito
     * @return Hito
     */
    public function setEntregaHito($entregaHito)
    {
        $this->entregaHito = $entregaHito;

        return $this;
    }

    /**
     * Get entregaHito
     *
     * @return string 
     */
    public function getEntregaHito()
    {
        return $this->entregaHito;
    }

    /**
     * Set nombreEntrega
     *
     * @param string $nombreEntrega
     * @return Hito
     */
    public function setNombreEntrega($nombreEntrega)
    {
        $this->nombreEntrega = $nombreEntrega;

        return $this;
    }

    /**
     * Get nombreEntrega
     *
     * @return string 
     */
    public function getNombreEntrega()
    {
        return $this->nombreEntrega;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Hito
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Hito
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set calificacionHito
     *
     * @param float $calificacionHito
     * @return Hito
     */
    public function setCalificacionHito($calificacionHito)
    {
        $this->calificacionHito = $calificacionHito;

        return $this;
    }

    /**
     * Get calificacionHito
     *
     * @return float 
     */
    public function getCalificacionHito()
    {
        return $this->calificacionHito;
    }

    /**
     * Set estadoHito
     *
     * @param string $estadoHito
     * @return Hito
     */
    public function setEstadoHito($estadoHito)
    {
        $this->estadoHito = $estadoHito;

        return $this;
    }

    /**
     * Get estadoHito
     *
     * @return string 
     */
    public function getEstadoHito()
    {
        return $this->estadoHito;
    }

    /**
     * Set correciones
     *
     * @param string $correciones
     * @return Hito
     */
    public function setCorreciones($correciones)
    {
        $this->correciones = $correciones;

        return $this;
    }

    /**
     * Get correciones
     *
     * @return string 
     */
    public function getCorreciones()
    {
        return $this->correciones;
    }

    /**
     * Set proyecto
     *
     * @param \Distrital\CecadBundle\Entity\Proyecto $proyecto
     * @return Hito
     */
    public function setProyecto(\Distrital\CecadBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \Distrital\CecadBundle\Entity\Proyecto 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
