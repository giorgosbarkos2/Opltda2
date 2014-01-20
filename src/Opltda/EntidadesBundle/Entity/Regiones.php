<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regiones
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Regiones
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
    
    
    private $nombre;
            
  
    
    
  /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    
    private $numero;


    /**
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="regiones")
    */

    
    private $entrevistas;




    /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\InversionVial", mappedBy="regiones")
    */

    private $inversionvial;
    
    
    
    
    
        /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Estudio", mappedBy="regiones")
    */
    
    

    private $estudio;
    
    
    
    
     /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", mappedBy="regiones")
    */
    
    

    private $puertos;
    
    
    
    
      /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Mapas", mappedBy="regiones")
    */
    
    

    private $mapas;
    
        /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Cadenas", mappedBy="regiones")
    */
    
    
    
    private $cadenas;
    
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entrevistas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->inversionvial = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estudio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->puertos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mapas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cadenas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Regiones
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
     * Set numero
     *
     * @param string $numero
     * @return Regiones
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Add entrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas
     * @return Regiones
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
     * Add inversionvial
     *
     * @param \Opltda\EntidadesBundle\Entity\InversionVial $inversionvial
     * @return Regiones
     */
    public function addInversionvial(\Opltda\EntidadesBundle\Entity\InversionVial $inversionvial)
    {
        $this->inversionvial[] = $inversionvial;

        return $this;
    }

    /**
     * Remove inversionvial
     *
     * @param \Opltda\EntidadesBundle\Entity\InversionVial $inversionvial
     */
    public function removeInversionvial(\Opltda\EntidadesBundle\Entity\InversionVial $inversionvial)
    {
        $this->inversionvial->removeElement($inversionvial);
    }

    /**
     * Get inversionvial
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInversionvial()
    {
        return $this->inversionvial;
    }

    /**
     * Add estudio
     *
     * @param \Opltda\EntidadesBundle\Entity\Estudio $estudio
     * @return Regiones
     */
    public function addEstudio(\Opltda\EntidadesBundle\Entity\Estudio $estudio)
    {
        $this->estudio[] = $estudio;

        return $this;
    }

    /**
     * Remove estudio
     *
     * @param \Opltda\EntidadesBundle\Entity\Estudio $estudio
     */
    public function removeEstudio(\Opltda\EntidadesBundle\Entity\Estudio $estudio)
    {
        $this->estudio->removeElement($estudio);
    }

    /**
     * Get estudio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudio()
    {
        return $this->estudio;
    }

    /**
     * Add puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Regiones
     */
    public function addPuerto(\Opltda\EntidadesBundle\Entity\Puertos $puertos)
    {
        $this->puertos[] = $puertos;

        return $this;
    }

    /**
     * Remove puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     */
    public function removePuerto(\Opltda\EntidadesBundle\Entity\Puertos $puertos)
    {
        $this->puertos->removeElement($puertos);
    }

    /**
     * Get puertos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPuertos()
    {
        return $this->puertos;
    }

    /**
     * Add mapas
     *
     * @param \Opltda\EntidadesBundle\Entity\Mapas $mapas
     * @return Regiones
     */
    public function addMapa(\Opltda\EntidadesBundle\Entity\Mapas $mapas)
    {
        $this->mapas[] = $mapas;

        return $this;
    }

    /**
     * Remove mapas
     *
     * @param \Opltda\EntidadesBundle\Entity\Mapas $mapas
     */
    public function removeMapa(\Opltda\EntidadesBundle\Entity\Mapas $mapas)
    {
        $this->mapas->removeElement($mapas);
    }

    /**
     * Get mapas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMapas()
    {
        return $this->mapas;
    }

    /**
     * Add cadenas
     *
     * @param \Opltda\EntidadesBundle\Entity\Cadenas $cadenas
     * @return Regiones
     */
    public function addCadena(\Opltda\EntidadesBundle\Entity\Cadenas $cadenas)
    {
        $this->cadenas[] = $cadenas;

        return $this;
    }

    /**
     * Remove cadenas
     *
     * @param \Opltda\EntidadesBundle\Entity\Cadenas $cadenas
     */
    public function removeCadena(\Opltda\EntidadesBundle\Entity\Cadenas $cadenas)
    {
        $this->cadenas->removeElement($cadenas);
    }

    /**
     * Get cadenas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCadenas()
    {
        return $this->cadenas;
    }
}
