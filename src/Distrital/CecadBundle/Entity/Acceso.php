<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acceso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\AccesoRepository")
 */
class Acceso
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
     * @ORM\Column(name="cod_acceso", type="integer")
     */
    private $codAcceso;

	 /**
     * @ORM\OneToMany(targetEntity="ProyectoAcceso", mappedBy="Acceso")
     */
	 private $accesos;	
    /**
     * @var string
     *
     * @ORM\Column(name="nom_privilegio", type="string", length=50)
     */
    private $nomPrivilegio;


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
     * Set codAcceso
     *
     * @param integer $codAcceso
     * @return Acceso
     */
    public function setCodAcceso($codAcceso)
    {
        $this->codAcceso = $codAcceso;

        return $this;
    }

    /**
     * Get codAcceso
     *
     * @return integer 
     */
    public function getCodAcceso()
    {
        return $this->codAcceso;
    }

    /**
     * Set nomPrivilegio
     *
     * @param string $nomPrivilegio
     * @return Acceso
     */
    public function setNomPrivilegio($nomPrivilegio)
    {
        $this->nomPrivilegio = $nomPrivilegio;

        return $this;
    }

    /**
     * Get nomPrivilegio
     *
     * @return string 
     */
    public function getNomPrivilegio()
    {
        return $this->nomPrivilegio;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accesos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add accesos
     *
     * @param \Distrital\CecadBundle\Entity\ProyectoAcceso $accesos
     * @return Acceso
     */
    public function addAcceso(\Distrital\CecadBundle\Entity\ProyectoAcceso $accesos)
    {
        $this->accesos[] = $accesos;

        return $this;
    }

    /**
     * Remove accesos
     *
     * @param \Distrital\CecadBundle\Entity\ProyectoAcceso $accesos
     */
    public function removeAcceso(\Distrital\CecadBundle\Entity\ProyectoAcceso $accesos)
    {
        $this->accesos->removeElement($accesos);
    }

    /**
     * Get accesos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccesos()
    {
        return $this->accesos;
    }
}
