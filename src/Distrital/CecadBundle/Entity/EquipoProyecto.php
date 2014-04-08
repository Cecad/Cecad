<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoProyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\EquipoProyectoRepository")
 */
class EquipoProyecto
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
     * @ORM\Column(name="fecha_ini", type="datetime")
     */
    private $fechaIni;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_equ_pro", type="string", length=1)
     */
    private $estadoEquPro;


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
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return EquipoProyecto
     */
    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    /**
     * Get fechaIni
     *
     * @return \DateTime 
     */
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    /**
     * Set estadoEquPro
     *
     * @param string $estadoEquPro
     * @return EquipoProyecto
     */
    public function setEstadoEquPro($estadoEquPro)
    {
        $this->estadoEquPro = $estadoEquPro;

        return $this;
    }

    /**
     * Get estadoEquPro
     *
     * @return string 
     */
    public function getEstadoEquPro()
    {
        return $this->estadoEquPro;
    }
}
