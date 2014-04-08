<?php

namespace Distrital\CecadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Director
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrital\CecadBundle\Entity\DirectorRepository")
 */
class Director
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
     * @ORM\Column(name="cod_director", type="integer")
     */
    private $codDirector;


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
     * Set codDirector
     *
     * @param integer $codDirector
     * @return Director
     */
    public function setCodDirector($codDirector)
    {
        $this->codDirector = $codDirector;

        return $this;
    }

    /**
     * Get codDirector
     *
     * @return integer 
     */
    public function getCodDirector()
    {
        return $this->codDirector;
    }
}
