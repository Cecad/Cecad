<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cloud
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\CloudRepository")
 */
class Cloud
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
     * @ORM\Column(name="cod_cloud", type="integer")
     */
    private $codCloud;

	/**
	* @ORM\ManyToOne(targetEntity="Hardware")
	* @ORM\JoinColumn(name="idHardware", referencedColumnName="id")
	*/
	 protected $hardware;
	 
	 /**
	* @ORM\ManyToOne(targetEntity="CloudProyecto")
	* @ORM\JoinColumn(name="idCloudProyecto", referencedColumnName="id")
	*/
	private $cloudproyectos;
	 
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cloud", type="string", length=255)
     */
	 
	
	 
    private $nombreCloud;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado_cloud", type="string", length=255)
     */
    private $encargadoCloud;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_cloud", type="string", length=255)
     */
    private $estadoCloud;


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
     * Set codCloud
     *
     * @param integer $codCloud
     * @return Cloud
     */
    public function setCodCloud($codCloud)
    {
        $this->codCloud = $codCloud;

        return $this;
    }

    /**
     * Get codCloud
     *
     * @return integer 
     */
    public function getCodCloud()
    {
        return $this->codCloud;
    }

    /**
     * Set nombreCloud
     *
     * @param string $nombreCloud
     * @return Cloud
     */
    public function setNombreCloud($nombreCloud)
    {
        $this->nombreCloud = $nombreCloud;

        return $this;
    }

    /**
     * Get nombreCloud
     *
     * @return string 
     */
    public function getNombreCloud()
    {
        return $this->nombreCloud;
    }

    /**
     * Set encargadoCloud
     *
     * @param string $encargadoCloud
     * @return Cloud
     */
    public function setEncargadoCloud($encargadoCloud)
    {
        $this->encargadoCloud = $encargadoCloud;

        return $this;
    }

    /**
     * Get encargadoCloud
     *
     * @return string 
     */
    public function getEncargadoCloud()
    {
        return $this->encargadoCloud;
    }

    /**
     * Set estadoCloud
     *
     * @param string $estadoCloud
     * @return Cloud
     */
    public function setEstadoCloud($estadoCloud)
    {
        $this->estadoCloud = $estadoCloud;

        return $this;
    }

    /**
     * Get estadoCloud
     *
     * @return string 
     */
    public function getEstadoCloud()
    {
        return $this->estadoCloud;
    }
}
