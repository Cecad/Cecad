<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Distrital\CecadBundle\Entity\Software;
/**
 * Hardware
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\HardwareRepository")
 */
class Hardware
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
     * @ORM\Column(name="serial", type="string", length=255)
     */
    private $serial;

	/**
	* @ORM\ManyToOne(targetEntity="Software")
	* @ORM\JoinColumn(name="idSoftware", referencedColumnName="id")
	*/
	protected $software;
	 /**
     * @ORM\OneToMany(targetEntity="Cloud", mappedBy="Hardware")
     */
	 private $clouds;
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_hardware", type="string", length=255)
     */
	 
	 
	 
	 
    private $nombreHardware;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_hardware", type="string", length=50)
     */
    private $estadoHardware;

    /**
     * @var string
     *
     * @ORM\Column(name="caracteristicas_hardware", type="text")
     */
    private $caracteristicasHardware;


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
     * Set serial
     *
     * @param string $serial
     * @return Hardware
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set nombreHardware
     *
     * @param string $nombreHardware
     * @return Hardware
     */
    public function setNombreHardware($nombreHardware)
    {
        $this->nombreHardware = $nombreHardware;

        return $this;
    }

    /**
     * Get nombreHardware
     *
     * @return string 
     */
    public function getNombreHardware()
    {
        return $this->nombreHardware;
    }

    /**
     * Set estadoHardware
     *
     * @param string $estadoHardware
     * @return Hardware
     */
    public function setEstadoHardware($estadoHardware)
    {
        $this->estadoHardware = $estadoHardware;

        return $this;
    }

    /**
     * Get estadoHardware
     *
     * @return string 
     */
    public function getEstadoHardware()
    {
        return $this->estadoHardware;
    }

    /**
     * Set caracteristicasHardware
     *
     * @param string $caracteristicasHardware
     * @return Hardware
     */
    public function setCaracteristicasHardware($caracteristicasHardware)
    {
        $this->caracteristicasHardware = $caracteristicasHardware;

        return $this;
    }

    /**
     * Get caracteristicasHardware
     *
     * @return string 
     */
    public function getCaracteristicasHardware()
    {
        return $this->caracteristicasHardware;
    }
}
