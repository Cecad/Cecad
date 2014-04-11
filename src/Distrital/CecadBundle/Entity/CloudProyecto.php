<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CloudProyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\CloudProyectoRepository")
 */
class CloudProyecto
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
     * @var string
     *
     * @ORM\Column(name="horario_investigacion", type="string", length=255)
     */
    private $horarioInvestigacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ini_lab_pro", type="datetime")
     */
    private $fechaIniLabPro;

	
	/**
	* @ORM\ManyToOne(targetEntity="Proyecto")
	* @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
	*/
	protected $proyecto;
	/**
	* @ORM\ManyToOne(targetEntity="Cloud")
	* @ORM\JoinColumn(name="idCloud", referencedColumnName="id")
	*/
	protected $cloud;			
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin_lab_pro", type="datetime")
     */
	 
	
	
	 
    private $fechaFinLabPro;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_lab_pro", type="string", length=1)
     */
    private $estadoLabPro;


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
     * Set horarioInvestigacion
     *
     * @param string $horarioInvestigacion
     * @return CloudProyecto
     */
    public function setHorarioInvestigacion($horarioInvestigacion)
    {
        $this->horarioInvestigacion = $horarioInvestigacion;

        return $this;
    }

    /**
     * Get horarioInvestigacion
     *
     * @return string 
     */
    public function getHorarioInvestigacion()
    {
        return $this->horarioInvestigacion;
    }

    /**
     * Set fechaIniLabPro
     *
     * @param \DateTime $fechaIniLabPro
     * @return CloudProyecto
     */
    public function setFechaIniLabPro($fechaIniLabPro)
    {
        $this->fechaIniLabPro = $fechaIniLabPro;

        return $this;
    }

    /**
     * Get fechaIniLabPro
     *
     * @return \DateTime 
     */
    public function getFechaIniLabPro()
    {
        return $this->fechaIniLabPro;
    }

    /**
     * Set fechaFinLabPro
     *
     * @param \DateTime $fechaFinLabPro
     * @return CloudProyecto
     */
    public function setFechaFinLabPro($fechaFinLabPro)
    {
        $this->fechaFinLabPro = $fechaFinLabPro;

        return $this;
    }

    /**
     * Get fechaFinLabPro
     *
     * @return \DateTime 
     */
    public function getFechaFinLabPro()
    {
        return $this->fechaFinLabPro;
    }

    /**
     * Set estadoLabPro
     *
     * @param string $estadoLabPro
     * @return CloudProyecto
     */
    public function setEstadoLabPro($estadoLabPro)
    {
        $this->estadoLabPro = $estadoLabPro;

        return $this;
    }

    /**
     * Get estadoLabPro
     *
     * @return string 
     */
    public function getEstadoLabPro()
    {
        return $this->estadoLabPro;
    }
}
