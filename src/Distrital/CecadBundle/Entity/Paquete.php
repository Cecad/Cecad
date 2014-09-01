<?php

namespace Distrital\CecadBundle\Entity;


use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paquete
 * @ORM\Entity
 * @ORM\Table()
 */
class Paquete
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=12)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=12)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="ram", type="integer")
     */
    private $ram;

    /**
     * @var string
     *
     * @ORM\Column(name="procesador", type="string", length=256)
     */
    private $procesador;

    /**
     * @var string
     *
     * @ORM\Column(name="almacenamiento", type="string", length=256)
     */
    private $almacenamiento;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

	public function __toString(){
		return $this->nombre;
	}

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
     * Set nombre
     *
     * @param string $nombre
     * @return Paquete
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
     * Set categoria
     *
     * @param string $categoria
     * @return Paquete
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set ram
     *
     * @param integer $ram
     * @return Paquete
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return integer 
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set procesador
     *
     * @param string $procesador
     * @return Paquete
     */
    public function setProcesador($procesador)
    {
        $this->procesador = $procesador;

        return $this;
    }

    /**
     * Get procesador
     *
     * @return string 
     */
    public function getProcesador()
    {
        return $this->procesador;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Paquete
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set almacenamiento
     *
     * @param string $almacenamiento
     * @return Paquete
     */
    public function setAlmacenamiento($almacenamiento)
    {
        $this->almacenamiento = $almacenamiento;

        return $this;
    }

    /**
     * Get almacenamiento
     *
     * @return string 
     */
    public function getAlmacenamiento()
    {
        return $this->almacenamiento;
    }
}
