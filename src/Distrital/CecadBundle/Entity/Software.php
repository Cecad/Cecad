<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Software
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\SoftwareRepository")
 */
class Software
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
     * @ORM\Column(name="cod_software", type="integer")
     */
    private $codSoftware;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_software", type="string", length=255)
     */
    private $nomSoftware;

    /**
     * @var string
     *
     * @ORM\Column(name="licencia", type="string", length=255)
     */
    private $licencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_software", type="string", length=255)
     */
    private $tipoSoftware;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_software", type="string", length=1)
     */
    private $estadoSoftware;


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
     * Set codSoftware
     *
     * @param integer $codSoftware
     * @return Software
     */
    public function setCodSoftware($codSoftware)
    {
        $this->codSoftware = $codSoftware;

        return $this;
    }

    /**
     * Get codSoftware
     *
     * @return integer 
     */
    public function getCodSoftware()
    {
        return $this->codSoftware;
    }

    /**
     * Set nomSoftware
     *
     * @param string $nomSoftware
     * @return Software
     */
    public function setNomSoftware($nomSoftware)
    {
        $this->nomSoftware = $nomSoftware;

        return $this;
    }

    /**
     * Get nomSoftware
     *
     * @return string 
     */
    public function getNomSoftware()
    {
        return $this->nomSoftware;
    }

    /**
     * Set licencia
     *
     * @param string $licencia
     * @return Software
     */
    public function setLicencia($licencia)
    {
        $this->licencia = $licencia;

        return $this;
    }

    /**
     * Get licencia
     *
     * @return string 
     */
    public function getLicencia()
    {
        return $this->licencia;
    }

    /**
     * Set tipoSoftware
     *
     * @param string $tipoSoftware
     * @return Software
     */
    public function setTipoSoftware($tipoSoftware)
    {
        $this->tipoSoftware = $tipoSoftware;

        return $this;
    }

    /**
     * Get tipoSoftware
     *
     * @return string 
     */
    public function getTipoSoftware()
    {
        return $this->tipoSoftware;
    }

    /**
     * Set estadoSoftware
     *
     * @param string $estadoSoftware
     * @return Software
     */
    public function setEstadoSoftware($estadoSoftware)
    {
        $this->estadoSoftware = $estadoSoftware;

        return $this;
    }

    /**
     * Get estadoSoftware
     *
     * @return string 
     */
    public function getEstadoSoftware()
    {
        return $this->estadoSoftware;
    }
}
