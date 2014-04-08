<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoAcceso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\ProyectoAccesoRepository")
 */
class ProyectoAcceso
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ini_acc", type="datetime")
     */
    private $fechaIniAcc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin_acc", type="datetime")
     */
    private $fechaFinAcc;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_proy_acc", type="string", length=1)
     */
    private $estadoProyAcc;


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
     * Set fechaIniAcc
     *
     * @param \DateTime $fechaIniAcc
     * @return ProyectoAcceso
     */
    public function setFechaIniAcc($fechaIniAcc)
    {
        $this->fechaIniAcc = $fechaIniAcc;

        return $this;
    }

    /**
     * Get fechaIniAcc
     *
     * @return \DateTime 
     */
    public function getFechaIniAcc()
    {
        return $this->fechaIniAcc;
    }

    /**
     * Set fechaFinAcc
     *
     * @param \DateTime $fechaFinAcc
     * @return ProyectoAcceso
     */
    public function setFechaFinAcc($fechaFinAcc)
    {
        $this->fechaFinAcc = $fechaFinAcc;

        return $this;
    }

    /**
     * Get fechaFinAcc
     *
     * @return \DateTime 
     */
    public function getFechaFinAcc()
    {
        return $this->fechaFinAcc;
    }

    /**
     * Set estadoProyAcc
     *
     * @param string $estadoProyAcc
     * @return ProyectoAcceso
     */
    public function setEstadoProyAcc($estadoProyAcc)
    {
        $this->estadoProyAcc = $estadoProyAcc;

        return $this;
    }

    /**
     * Get estadoProyAcc
     *
     * @return string 
     */
    public function getEstadoProyAcc()
    {
        return $this->estadoProyAcc;
    }
}