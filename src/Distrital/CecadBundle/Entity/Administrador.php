<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\AdministradorRepository")
 */
class Administrador
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
     * @ORM\Column(name="cod_admin", type="integer")
     */
    private $codAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="celular", type="integer")
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_admin", type="string", length=1)
     */
    private $estadoAdmin;


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
     * Set codAdmin
     *
     * @param integer $codAdmin
     * @return Administrador
     */
    public function setCodAdmin($codAdmin)
    {
        $this->codAdmin = $codAdmin;

        return $this;
    }

    /**
     * Get codAdmin
     *
     * @return integer 
     */
    public function getCodAdmin()
    {
        return $this->codAdmin;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Administrador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Administrador
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     * @return Administrador
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return integer 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Administrador
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set estadoAdmin
     *
     * @param string $estadoAdmin
     * @return Administrador
     */
    public function setEstadoAdmin($estadoAdmin)
    {
        $this->estadoAdmin = $estadoAdmin;

        return $this;
    }

    /**
     * Get estadoAdmin
     *
     * @return string 
     */
    public function getEstadoAdmin()
    {
        return $this->estadoAdmin;
    }
}
