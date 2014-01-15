<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cadenas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cadenas
{
   
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   
    
    private $id;
    
    

     /** @ORM\Column(type="string", length=200 , nullable=true) */


    private $codigo;
    
    
    
    
    
    private $descripcion;
    
    
    
    
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="cadenas")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */



    private $puertos;
    
    
    
    
    
        
     /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="cadenas")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */



    private $regiones;
    
    
    
    

    
    
    
    /**
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="cadenas")
    */

    
    private $entrevistas;
    
    
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\memoriaCalculo", mappedBy="cadenas")
    */
     
   private  $memoriacalculo;

     
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entrevistas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->memoriacalculo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigo
     *
     * @param string $codigo
     * @return Cadenas
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Cadenas
     */
    public function setPuertos(\Opltda\EntidadesBundle\Entity\Puertos $puertos = null)
    {
        $this->puertos = $puertos;

        return $this;
    }

    /**
     * Get puertos
     *
     * @return \Opltda\EntidadesBundle\Entity\Puertos 
     */
    public function getPuertos()
    {
        return $this->puertos;
    }

    /**
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return Cadenas
     */
    public function setRegiones(\Opltda\EntidadesBundle\Entity\Regiones $regiones = null)
    {
        $this->regiones = $regiones;

        return $this;
    }

    /**
     * Get regiones
     *
     * @return \Opltda\EntidadesBundle\Entity\Regiones 
     */
    public function getRegiones()
    {
        return $this->regiones;
    }

    /**
     * Add entrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas
     * @return Cadenas
     */
    public function addEntrevista(\Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas)
    {
        $this->entrevistas[] = $entrevistas;

        return $this;
    }

    /**
     * Remove entrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas
     */
    public function removeEntrevista(\Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas)
    {
        $this->entrevistas->removeElement($entrevistas);
    }

    /**
     * Get entrevistas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntrevistas()
    {
        return $this->entrevistas;
    }

    /**
     * Add memoriacalculo
     *
     * @param \Opltda\EntidadesBundle\Entity\memoriaCalculo $memoriacalculo
     * @return Cadenas
     */
    public function addMemoriacalculo(\Opltda\EntidadesBundle\Entity\memoriaCalculo $memoriacalculo)
    {
        $this->memoriacalculo[] = $memoriacalculo;

        return $this;
    }

    /**
     * Remove memoriacalculo
     *
     * @param \Opltda\EntidadesBundle\Entity\memoriaCalculo $memoriacalculo
     */
    public function removeMemoriacalculo(\Opltda\EntidadesBundle\Entity\memoriaCalculo $memoriacalculo)
    {
        $this->memoriacalculo->removeElement($memoriacalculo);
    }

    /**
     * Get memoriacalculo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMemoriacalculo()
    {
        return $this->memoriacalculo;
    }
}
