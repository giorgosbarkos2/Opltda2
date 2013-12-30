<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estudio
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
    
    
    private $codigoCadena;
    
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $nombreCadena;
    
    
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $macroProceso;
    
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $dimension;
    
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    
    private $codigoActividad;
    
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $nombreActividad;
    
    private $agente;
    
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $costo;
    
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $tiempoPromedioServicio;
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $tiempoPromedioEspera;
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $inificencias;
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $causainificencia;
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $iniciativa;
    
        
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $fechaIngreso;
    

    
	   /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="estudio")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
    
	private $regiones;
        
        
        
        
             	   /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="estudio")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */
	private $puertos;
        
        
        
        
        

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
     * Set codigoCadena
     *
     * @param string $codigoCadena
     * @return Estudio
     */
    public function setCodigoCadena($codigoCadena)
    {
        $this->codigoCadena = $codigoCadena;

        return $this;
    }

    /**
     * Get codigoCadena
     *
     * @return string 
     */
    public function getCodigoCadena()
    {
        return $this->codigoCadena;
    }

    /**
     * Set nombreCadena
     *
     * @param string $nombreCadena
     * @return Estudio
     */
    public function setNombreCadena($nombreCadena)
    {
        $this->nombreCadena = $nombreCadena;

        return $this;
    }

    /**
     * Get nombreCadena
     *
     * @return string 
     */
    public function getNombreCadena()
    {
        return $this->nombreCadena;
    }

    /**
     * Set macroProceso
     *
     * @param string $macroProceso
     * @return Estudio
     */
    public function setMacroProceso($macroProceso)
    {
        $this->macroProceso = $macroProceso;

        return $this;
    }

    /**
     * Get macroProceso
     *
     * @return string 
     */
    public function getMacroProceso()
    {
        return $this->macroProceso;
    }

    /**
     * Set dimension
     *
     * @param string $dimension
     * @return Estudio
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return string 
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set codigoActividad
     *
     * @param string $codigoActividad
     * @return Estudio
     */
    public function setCodigoActividad($codigoActividad)
    {
        $this->codigoActividad = $codigoActividad;

        return $this;
    }

    /**
     * Get codigoActividad
     *
     * @return string 
     */
    public function getCodigoActividad()
    {
        return $this->codigoActividad;
    }

    /**
     * Set nombreActividad
     *
     * @param string $nombreActividad
     * @return Estudio
     */
    public function setNombreActividad($nombreActividad)
    {
        $this->nombreActividad = $nombreActividad;

        return $this;
    }

    /**
     * Get nombreActividad
     *
     * @return string 
     */
    public function getNombreActividad()
    {
        return $this->nombreActividad;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Estudio
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set tiempoPromedioServicio
     *
     * @param string $tiempoPromedioServicio
     * @return Estudio
     */
    public function setTiempoPromedioServicio($tiempoPromedioServicio)
    {
        $this->tiempoPromedioServicio = $tiempoPromedioServicio;

        return $this;
    }

    /**
     * Get tiempoPromedioServicio
     *
     * @return string 
     */
    public function getTiempoPromedioServicio()
    {
        return $this->tiempoPromedioServicio;
    }

    /**
     * Set tiempoPromedioEspera
     *
     * @param string $tiempoPromedioEspera
     * @return Estudio
     */
    public function setTiempoPromedioEspera($tiempoPromedioEspera)
    {
        $this->tiempoPromedioEspera = $tiempoPromedioEspera;

        return $this;
    }

    /**
     * Get tiempoPromedioEspera
     *
     * @return string 
     */
    public function getTiempoPromedioEspera()
    {
        return $this->tiempoPromedioEspera;
    }

    /**
     * Set inificencias
     *
     * @param string $inificencias
     * @return Estudio
     */
    public function setInificencias($inificencias)
    {
        $this->inificencias = $inificencias;

        return $this;
    }

    /**
     * Get inificencias
     *
     * @return string 
     */
    public function getInificencias()
    {
        return $this->inificencias;
    }

    /**
     * Set causainificencia
     *
     * @param string $causainificencia
     * @return Estudio
     */
    public function setCausainificencia($causainificencia)
    {
        $this->causainificencia = $causainificencia;

        return $this;
    }

    /**
     * Get causainificencia
     *
     * @return string 
     */
    public function getCausainificencia()
    {
        return $this->causainificencia;
    }

    /**
     * Set iniciativa
     *
     * @param string $iniciativa
     * @return Estudio
     */
    public function setIniciativa($iniciativa)
    {
        $this->iniciativa = $iniciativa;

        return $this;
    }

    /**
     * Get iniciativa
     *
     * @return string 
     */
    public function getIniciativa()
    {
        return $this->iniciativa;
    }

    /**
     * Set fechaIngreso
     *
     * @param string $fechaIngreso
     * @return Estudio
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return string 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return Estudio
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
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Estudio
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
}
