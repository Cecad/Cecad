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
     * @var integer
     *
     * @ORM\Column(name="cod_hito", type="integer")
     */
    private $codHito;

    /**
     * @var integer
     *
     * @ORM\Column(name="entrega_hito", type="integer")
     */
    private $entregaHito;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_entrega", type="string", length=255)
     */
    private $nombreEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_inicio", type="datetime")
     */
    private $fecInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_entrega", type="datetime")
     */
    private $fecEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="calificacion_hito", type="float")
     */
    private $calificacionHito;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_hito", type="string", length=1)
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
     * Set codHito
     *
     * @param integer $codHito
     * @return Hito
     */
    public function setCodHito($codHito)
    {
        $this->codHito = $codHito;

        return $this;
    }

    /**
     * Get codHito
     *
     * @return integer 
     */
    public function getCodHito()
    {
        return $this->codHito;
    }

    /**
     * Set entregaHito
     *
     * @param integer $entregaHito
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
     * @return integer 
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
     * Set fecInicio
     *
     * @param \DateTime $fecInicio
     * @return Hito
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
     * Set fecEntrega
     *
     * @param \DateTime $fecEntrega
     * @return Hito
     */
    public function setFecEntrega($fecEntrega)
    {
        $this->fecEntrega = $fecEntrega;

        return $this;
    }

    /**
     * Get fecEntrega
     *
     * @return \DateTime 
     */
    public function getFecEntrega()
    {
        return $this->fecEntrega;
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
}
