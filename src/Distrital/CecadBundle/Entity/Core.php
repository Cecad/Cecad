<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Core
 * @ORM\Entity
 * @ORM\Table()
 */
class Core
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
	 * @ORM\ManyToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="idUsuarioSolicita", referencedColumnName="id")
	 */
	private $usuarioSolicita;
    
	/**
	 * @ORM\ManyToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="idUsuarioAprueba", referencedColumnName="id", nullable=true)
	 */
	private $usuarioAprueba;
    
	/**
	 * @ORM\ManyToOne(targetEntity="Proyecto")
	 * @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
	 */
	private $proyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=12)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=256)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sistemaOperativo", type="string", length=256)
     */
    private $sistemaOperativo;

    /**
     * @var string
     *
     * @ORM\Column(name="programasInstalados", type="text")
     */
    private $programasInstalados;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempoSolicitado", type="string", length=256)
     */
    private $tiempoSolicitado;

    /**
	 * @ORM\ManyToOne(targetEntity="Paquete")
	 * @ORM\JoinColumn(name="idPaquete", referencedColumnName="id")
	 */
	private $paquete;


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
     * Set estado
     *
     * @param string $estado
     * @return Core
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
     * Set nombre
     *
     * @param string $nombre
     * @return Core
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
     * Set sistemaOperativo
     *
     * @param string $sistemaOperativo
     * @return Core
     */
    public function setSistemaOperativo($sistemaOperativo)
    {
        $this->sistemaOperativo = $sistemaOperativo;

        return $this;
    }

    /**
     * Get sistemaOperativo
     *
     * @return string 
     */
    public function getSistemaOperativo()
    {
        return $this->sistemaOperativo;
    }

    /**
     * Set programasInstalados
     *
     * @param string $programasInstalados
     * @return Core
     */
    public function setProgramasInstalados($programasInstalados)
    {
        $this->programasInstalados = $programasInstalados;

        return $this;
    }

    /**
     * Get programasInstalados
     *
     * @return string 
     */
    public function getProgramasInstalados()
    {
        return $this->programasInstalados;
    }

    /**
     * Set usuarioSolicita
     *
     * @param \Distrital\CecadBundle\Entity\Usuario $usuarioSolicita
     * @return Core
     */
    public function setUsuarioSolicita(\Distrital\CecadBundle\Entity\Usuario $usuarioSolicita = null)
    {
        $this->usuarioSolicita = $usuarioSolicita;

        return $this;
    }

    /**
     * Get usuarioSolicita
     *
     * @return \Distrital\CecadBundle\Entity\Usuario 
     */
    public function getUsuarioSolicita()
    {
        return $this->usuarioSolicita;
    }

    /**
     * Set usuarioAprueba
     *
     * @param \Distrital\CecadBundle\Entity\Usuario $usuarioAprueba
     * @return Core
     */
    public function setUsuarioAprueba(\Distrital\CecadBundle\Entity\Usuario $usuarioAprueba = null)
    {
        $this->usuarioAprueba = $usuarioAprueba;

        return $this;
    }

    /**
     * Get usuarioAprueba
     *
     * @return \Distrital\CecadBundle\Entity\Usuario 
     */
    public function getUsuarioAprueba()
    {
        return $this->usuarioAprueba;
    }

    /**
     * Set proyecto
     *
     * @param \Distrital\CecadBundle\Entity\Proyecto $proyecto
     * @return Core
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

    /**
     * Set paquete
     *
     * @param \Distrital\CecadBundle\Entity\Paquete $paquete
     * @return Core
     */
    public function setPaquete(\Distrital\CecadBundle\Entity\Paquete $paquete = null)
    {
        $this->paquete = $paquete;

        return $this;
    }

    /**
     * Get paquete
     *
     * @return \Distrital\CecadBundle\Entity\Paquete 
     */
    public function getPaquete()
    {
        return $this->paquete;
    }

    /**
     * Set tiempoSolicitado
     *
     * @param string $tiempoSolicitado
     * @return Core
     */
    public function setTiempoSolicitado($tiempoSolicitado)
    {
        $this->tiempoSolicitado = $tiempoSolicitado;

        return $this;
    }

    /**
     * Get tiempoSolicitado
     *
     * @return string 
     */
    public function getTiempoSolicitado()
    {
        return $this->tiempoSolicitado;
    }
}
