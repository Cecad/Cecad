<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Distrital\CecadBundle\Entity\GrupoInvestigacion;

/**
 * Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\ProyectoRepository")
 */
class Proyecto
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
	* @ORM\OneToMany(targetEntity="Hito", mappedBy="proyecto")
	*/
	private $hitos;
	
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */

    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinal", type="datetime")
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivos", type="text")
     */
    private $objetivos;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1)
     */
    private $estado;


	/**
     * @ORM\OneToMany(targetEntity="ParticipanteProyecto", mappedBy="proyecto")
     */
	protected $participantes;
	
    /**
	* @ ORM\ManyToOne(targetEntity="GrupoInvestigacion")
	* @ ORM\JoinColumn(name="idGrupoInvestigacion", referencedColumnName="id")
	protected $GrupoInvestigacion;
	*/


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hitos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->participantes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
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
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return Proyecto
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set objetivos
     *
     * @param string $objetivos
     * @return Proyecto
     */
    public function setObjetivos($objetivos)
    {
        $this->objetivos = $objetivos;

        return $this;
    }

    /**
     * Get objetivos
     *
     * @return string 
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Proyecto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add hitos
     *
     * @param \Distrital\CecadBundle\Entity\Hito $hitos
     * @return Proyecto
     */
    public function addHito(\Distrital\CecadBundle\Entity\Hito $hitos)
    {
        $this->hitos[] = $hitos;

        return $this;
    }

    /**
     * Remove hitos
     *
     * @param \Distrital\CecadBundle\Entity\Hito $hitos
     */
    public function removeHito(\Distrital\CecadBundle\Entity\Hito $hitos)
    {
        $this->hitos->removeElement($hitos);
    }

    /**
     * Get hitos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHitos()
    {
        return $this->hitos;
    }

    /**
     * Add participantes
     *
     * @param \Distrital\CecadBundle\Entity\ParticipanteProyecto $participantes
     * @return Proyecto
     */
    public function addParticipante(\Distrital\CecadBundle\Entity\ParticipanteProyecto $participantes)
    {
        $this->participantes[] = $participantes;

        return $this;
    }

    /**
     * Remove participantes
     *
     * @param \Distrital\CecadBundle\Entity\ParticipanteProyecto $participantes
     */
    public function removeParticipante(\Distrital\CecadBundle\Entity\ParticipanteProyecto $participantes)
    {
        $this->participantes->removeElement($participantes);
    }

    /**
     * Get participantes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }
}
