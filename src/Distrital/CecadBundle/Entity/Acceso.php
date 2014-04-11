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
}
