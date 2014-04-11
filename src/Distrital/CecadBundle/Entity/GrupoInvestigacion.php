<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Distrital\CecadBundle\Entity\Proyecto;

/**
 * GrupoInvestigacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\GrupoInvestigacionRepository")
 */
class GrupoInvestigacion
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
     * @ORM\Column(name="cod_grupo", type="integer")
     */
    private $codGrupo;

	/**
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="grupoinvestigacion")
     */
	private $proyectos;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_grupo", type="string", length=255)
     */
    private $nomGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia_grupo", type="string", length=255)
     */
    private $procedenciaGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_grupo", type="string", length=1)
     */
    private $estadoGrupo;


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
     * Set codGrupo
     *
     * @param integer $codGrupo
     * @return GrupoInvestigacion
     */
    public function setCodGrupo($codGrupo)
    {
        $this->codGrupo = $codGrupo;

        return $this;
    }

    /**
     * Get codGrupo
     *
     * @return integer 
     */
    public function getCodGrupo()
    {
        return $this->codGrupo;
    }

    /**
     * Set nomGrupo
     *
     * @param string $nomGrupo
     * @return GrupoInvestigacion
     */
    public function setNomGrupo($nomGrupo)
    {
        $this->nomGrupo = $nomGrupo;

        return $this;
    }

    /**
     * Get nomGrupo
     *
     * @return string 
     */
    public function getNomGrupo()
    {
        return $this->nomGrupo;
    }

    /**
     * Set procedenciaGrupo
     *
     * @param string $procedenciaGrupo
     * @return GrupoInvestigacion
     */
    public function setProcedenciaGrupo($procedenciaGrupo)
    {
        $this->procedenciaGrupo = $procedenciaGrupo;

        return $this;
    }

    /**
     * Get procedenciaGrupo
     *
     * @return string 
     */
    public function getProcedenciaGrupo()
    {
        return $this->procedenciaGrupo;
    }

    /**
     * Set estadoGrupo
     *
     * @param string $estadoGrupo
     * @return GrupoInvestigacion
     */
    public function setEstadoGrupo($estadoGrupo)
    {
        $this->estadoGrupo = $estadoGrupo;

        return $this;
    }

    /**
     * Get estadoGrupo
     *
     * @return string 
     */
    public function getEstadoGrupo()
    {
        return $this->estadoGrupo;
    }
}
