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
     * @var integer
     *
     * @ORM\Column(name="cod_proyecto", type="integer")
     */
    private $codProyecto;

	/**
	* @ORM\ManyToOne(targetEntity="EquipoProyecto")
	* @ORM\JoinColumn(name="idEquipoProyecto", referencedColumnName="id")
	*/
	protected $equipoproyecto;
    /**
	* @ORM\ManyToOne(targetEntity="GrupoInvestigacion")
	* @ORM\JoinColumn(name="idGrupoInvestigacion", referencedColumnName="id")
	*/
	protected $GrupoInvestigacion;
	 /**
     * @ORM\OneToMany(targetEntity="Hito", mappedBy="proyecto")
     */
	  private $hitos;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_proyecto", type="string", length=255)
     */

	 
	 
	 
	 
	 
	
	 
	 
    private $nomProyecto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_inicio", type="datetime")
     */
    private $fecInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_final", type="datetime")
     */
    private $fecFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_proyecto", type="text")
     */
    private $descProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="obj_proyecto", type="text")
     */
    private $objProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_proyecto", type="string", length=1)
     */
    private $estadoProyecto;


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
     * Set codProyecto
     *
     * @param integer $codProyecto
     * @return Proyecto
     */
    public function setCodProyecto($codProyecto)
    {
        $this->codProyecto = $codProyecto;

        return $this;
    }

    /**
     * Get codProyecto
     *
     * @return integer 
     */
    public function getCodProyecto()
    {
        return $this->codProyecto;
    }

    /**
     * Set nomProyecto
     *
     * @param string $nomProyecto
     * @return Proyecto
     */
    public function setNomProyecto($nomProyecto)
    {
        $this->nomProyecto = $nomProyecto;

        return $this;
    }

    /**
     * Get nomProyecto
     *
     * @return string 
     */
    public function getNomProyecto()
    {
        return $this->nomProyecto;
    }

    /**
     * Set fecInicio
     *
     * @param \DateTime $fecInicio
     * @return Proyecto
     */
    public function setFecInicio($fecInicio)
    {
        $this->fecInicio = $fecInicio;

        return $this;
    }

    /**
     * Get fecInicio
     *
     * @return \DateTime 
     */
    public function getFecInicio()
    {
        return $this->fecInicio;
    }

    /**
     * Set fecFinal
     *
     * @param \DateTime $fecFinal
     * @return Proyecto
     */
    public function setFecFinal($fecFinal)
    {
        $this->fecFinal = $fecFinal;

        return $this;
    }

    /**
     * Get fecFinal
     *
     * @return \DateTime 
     */
    public function getFecFinal()
    {
        return $this->fecFinal;
    }

    /**
     * Set descProyecto
     *
     * @param string $descProyecto
     * @return Proyecto
     */
    public function setDescProyecto($descProyecto)
    {
        $this->descProyecto = $descProyecto;

        return $this;
    }

    /**
     * Get descProyecto
     *
     * @return string 
     */
    public function getDescProyecto()
    {
        return $this->descProyecto;
    }

    /**
     * Set objProyecto
     *
     * @param string $objProyecto
     * @return Proyecto
     */
    public function setObjProyecto($objProyecto)
    {
        $this->objProyecto = $objProyecto;

        return $this;
    }

    /**
     * Get objProyecto
     *
     * @return string 
     */
    public function getObjProyecto()
    {
        return $this->objProyecto;
    }

    /**
     * Set estadoProyecto
     *
     * @param string $estadoProyecto
     * @return Proyecto
     */
    public function setEstadoProyecto($estadoProyecto)
    {
        $this->estadoProyecto = $estadoProyecto;

        return $this;
    }

    /**
     * Get estadoProyecto
     *
     * @return string 
     */
    public function getEstadoProyecto()
    {
        return $this->estadoProyecto;
    }
}
