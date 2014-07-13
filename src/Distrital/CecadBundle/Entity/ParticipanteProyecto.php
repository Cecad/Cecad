<?php

namespace Distrital\CecadBundle\Entity;


use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipanteProyecto
 * @ORM\Entity
 * @ORM\Table()
 */
// * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\ParticipanteProyectoRepository")
class ParticipanteProyecto
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
	 * @ORM\ManyToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
	 */
	private $usuario;
    
	/**
	 * @ORM\ManyToOne(targetEntity="Proyecto")
	 * @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
	 */
	private $proyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=128)
     */
    private $rol;

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
     * Set rol
     *
     * @param string $rol
     * @return ParticipanteProyecto
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set usuario
     *
     * @param \Distrital\CecadBundle\Entity\Usuario $usuario
     * @return ParticipanteProyecto
     */
    public function setUsuario(\Distrital\CecadBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Distrital\CecadBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set proyecto
     *
     * @param \Distrital\CecadBundle\Entity\Proyecto $proyecto
     * @return ParticipanteProyecto
     */
    public function setProyecto(\Distrital\CecadBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \Distrital\CecadBundle\Entity\Proyecto 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
