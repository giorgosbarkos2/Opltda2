<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puertos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Puertos
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
    
    
    
    private $codigo;
    
    /**
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="puertos")
    */
    private $entrevistas;

    /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\FocusGroup", mappedBy="puertos")
    */
    private $focusgroup;
    
    
    
            /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Estudio", mappedBy="puertos")
    */

    private $estudio;
    
    
        /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="puertos")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
    
    private $regiones;
    
    
    
          /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Mapas", mappedBy="puertos")
    */
    
    

    private $mapas;
        
    
    
     /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Cadenas", mappedBy="puertos")
    */
    
    
    
    private $cadenas;
    
    
       /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Modelamiento", mappedBy="puertos")
    */
    
    
    
    private $modelamiento;
    
    
    
        /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Fotos", mappedBy="puertos")
    */
    

    private $fotos;
    
    
    
    
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entrevistas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->focusgroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estudio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mapas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cadenas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modelamiento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fotos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Puertos
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
     * Set codigo
     *
     * @param string $codigo
     * @return Puertos
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
     * Add entrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas
     * @return Puertos
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
     * Add focusgroup
     *
     * @param \Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup
     * @return Puertos
     */
    public function addFocusgroup(\Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup)
    {
        $this->focusgroup[] = $focusgroup;

        return $this;
    }

    /**
     * Remove focusgroup
     *
     * @param \Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup
     */
    public function removeFocusgroup(\Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup)
    {
        $this->focusgroup->removeElement($focusgroup);
    }

    /**
     * Get focusgroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFocusgroup()
    {
        return $this->focusgroup;
    }

    /**
     * Add estudio
     *
     * @param \Opltda\EntidadesBundle\Entity\Estudio $estudio
     * @return Puertos
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
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return Puertos
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
     * Add mapas
     *
     * @param \Opltda\EntidadesBundle\Entity\Mapas $mapas
     * @return Puertos
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
     * @return Puertos
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

    /**
     * Add modelamiento
     *
     * @param \Opltda\EntidadesBundle\Entity\Modelamiento $modelamiento
     * @return Puertos
     */
    public function addModelamiento(\Opltda\EntidadesBundle\Entity\Modelamiento $modelamiento)
    {
        $this->modelamiento[] = $modelamiento;

        return $this;
    }

    /**
     * Remove modelamiento
     *
     * @param \Opltda\EntidadesBundle\Entity\Modelamiento $modelamiento
     */
    public function removeModelamiento(\Opltda\EntidadesBundle\Entity\Modelamiento $modelamiento)
    {
        $this->modelamiento->removeElement($modelamiento);
    }

    /**
     * Get modelamiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModelamiento()
    {
        return $this->modelamiento;
    }

    /**
     * Add fotos
     *
     * @param \Opltda\EntidadesBundle\Entity\Fotos $fotos
     * @return Puertos
     */
    public function addFoto(\Opltda\EntidadesBundle\Entity\Fotos $fotos)
    {
        $this->fotos[] = $fotos;

        return $this;
    }

    /**
     * Remove fotos
     *
     * @param \Opltda\EntidadesBundle\Entity\Fotos $fotos
     */
    public function removeFoto(\Opltda\EntidadesBundle\Entity\Fotos $fotos)
    {
        $this->fotos->removeElement($fotos);
    }

    /**
     * Get fotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotos()
    {
        return $this->fotos;
    }
}
