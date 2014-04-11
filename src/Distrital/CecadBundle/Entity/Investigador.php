<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investigador
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\InvestigadorRepository")
 */
class Investigador
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
     * @ORM\Column(name="cod_estudiante", type="integer")
     */
    private $codEstudiante;

	   /**
     * @ORM\OneToMany(targetEntity="EquipoProyecto", mappedBy="investigador")
     */
	  private $equipos;
    /**
     * @var string
     *
     * @ORM\Column(name="pro_curricular", type="string", length=255)
     */
    private $proCurricular;

    /**
     * @var string
     *
     * @ORM\Column(name="universidad", type="string", length=255)
     */
    private $universidad;


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
     * Set codEstudiante
     *
     * @param integer $codEstudiante
     * @return Investigador
     */
    public function setCodEstudiante($codEstudiante)
    {
        $this->codEstudiante = $codEstudiante;

        return $this;
    }

    /**
     * Get codEstudiante
     *
     * @return integer 
     */
    public function getCodEstudiante()
    {
        return $this->codEstudiante;
    }

    /**
     * Set proCurricular
     *
     * @param string $proCurricular
     * @return Investigador
     */
    public function setProCurricular($proCurricular)
    {
        $this->proCurricular = $proCurricular;

        return $this;
    }

    /**
     * Get proCurricular
     *
     * @return string 
     */
    public function getProCurricular()
    {
        return $this->proCurricular;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return Investigador
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Get universidad
     *
     * @return string 
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }
}
