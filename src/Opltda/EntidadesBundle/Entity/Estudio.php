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
     * @var string
     *
     * @ORM\Column(name="codigoCadena", type="text" ,nullable=true )
     */
    private $codigoCadena;

	/**
	*
	* @ORM\Column(name="nombreCadena", type="text" ,nullable=true )
	*/
	private $nombreCadena;

	/**
	*
	* @ORM\Column(name="macroProceso", type="text" ,nullable=true )
	*/
	private $macroProceso;

	/**
	*
	* @ORM\Column(name="dimension", type="text" ,nullable=true )
	*/
	private $dimension;

	/**
	*
	* @ORM\Column(name="codigoActividad", type="text" ,nullable=true )
	*/
	private $codigoActividad;

	/**
	*
	* @ORM\Column(name="nombreActividad", type="text" ,nullable=true )
	*/
	private $nombreActividad;

	/**
	*
	* @ORM\Column(name="generadoresIneficiencia", type="text" ,nullable=true )
	*/
	private $generadoresIneficiencia;

	/**
	*
	* @ORM\Column(name="tiempoServicio", type="text" ,nullable=true )
	*/
	private $tiempoServicio;

	/**
	*
	* @ORM\Column(name="tiempoEspera", type="text" ,nullable=true )
	*/
	private $tiempoEspera;

	/**
	*
	* @ORM\Column(name="tipoInficiencia", type="text" ,nullable=true )
	*/
	private $tipoIneficiencia;

	/**
	*
	* @ORM\Column(name="descripcionIneficiencia", type="text" ,nullable=true )
	*/
	private $descripcionIneficiencia;

	/**
	*
	* @ORM\Column(name="costoIneficiencia", type="text" ,nullable=true )
	*/
	private $costoIneficiena;

	/**
	*
	* @ORM\Column(name="causaIneficiencia", type="text" ,nullable=true )
	*/
	private $causaIneficiencia;

	/**
	*
	* @ORM\Column(name="impactoIneficiencia", type="text" ,nullable=true )
	*/
	private $impactoIneficiencia;

	/**
	*
	* @ORM\Column(name="ejeIniciativa", type="text" ,nullable=true )
	*/
	private $ejeIniciativa;

	/**
	*
	* @ORM\Column(name="descripcionInciativa", type="text" ,nullable=true )
	*/
	private $descripcionInciativa;

	/**
	*
	* @ORM\Column(name="fechaIngreso", type="datetime" ,nullable=true )
	*/
	private $fechaIngreso;
        
        
        
        
               /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\ArchivosEstudios", mappedBy="estudio")
    */
    
    
   
    private $archivosestudios;
    
    
    
    

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
     * Set generadoresIneficiencia
     *
     * @param string $generadoresIneficiencia
     * @return Estudio
     */
    public function setGeneradoresIneficiencia($generadoresIneficiencia)
    {
        $this->generadoresIneficiencia = $generadoresIneficiencia;

        return $this;
    }

    /**
     * Get generadoresIneficiencia
     *
     * @return string 
     */
    public function getGeneradoresIneficiencia()
    {
        return $this->generadoresIneficiencia;
    }

    /**
     * Set tiempoServicio
     *
     * @param string $tiempoServicio
     * @return Estudio
     */
    public function setTiempoServicio($tiempoServicio)
    {
        $this->tiempoServicio = $tiempoServicio;

        return $this;
    }

    /**
     * Get tiempoServicio
     *
     * @return string 
     */
    public function getTiempoServicio()
    {
        return $this->tiempoServicio;
    }

    /**
     * Set tiempoEspera
     *
     * @param string $tiempoEspera
     * @return Estudio
     */
    public function setTiempoEspera($tiempoEspera)
    {
        $this->tiempoEspera = $tiempoEspera;

        return $this;
    }

    /**
     * Get tiempoEspera
     *
     * @return string 
     */
    public function getTiempoEspera()
    {
        return $this->tiempoEspera;
    }

    /**
     * Set tipoIneficiencia
     *
     * @param string $tipoIneficiencia
     * @return Estudio
     */
    public function setTipoIneficiencia($tipoIneficiencia)
    {
        $this->tipoIneficiencia = $tipoIneficiencia;

        return $this;
    }

    /**
     * Get tipoIneficiencia
     *
     * @return string 
     */
    public function getTipoIneficiencia()
    {
        return $this->tipoIneficiencia;
    }

    /**
     * Set descripcionIneficiencia
     *
     * @param string $descripcionIneficiencia
     * @return Estudio
     */
    public function setDescripcionIneficiencia($descripcionIneficiencia)
    {
        $this->descripcionIneficiencia = $descripcionIneficiencia;

        return $this;
    }

    /**
     * Get descripcionIneficiencia
     *
     * @return string 
     */
    public function getDescripcionIneficiencia()
    {
        return $this->descripcionIneficiencia;
    }

    /**
     * Set costoIneficiena
     *
     * @param string $costoIneficiena
     * @return Estudio
     */
    public function setCostoIneficiena($costoIneficiena)
    {
        $this->costoIneficiena = $costoIneficiena;

        return $this;
    }

    /**
     * Get costoIneficiena
     *
     * @return string 
     */
    public function getCostoIneficiena()
    {
        return $this->costoIneficiena;
    }

    /**
     * Set causaIneficiencia
     *
     * @param string $causaIneficiencia
     * @return Estudio
     */
    public function setCausaIneficiencia($causaIneficiencia)
    {
        $this->causaIneficiencia = $causaIneficiencia;

        return $this;
    }

    /**
     * Get causaIneficiencia
     *
     * @return string 
     */
    public function getCausaIneficiencia()
    {
        return $this->causaIneficiencia;
    }

    /**
     * Set impactoIneficiencia
     *
     * @param string $impactoIneficiencia
     * @return Estudio
     */
    public function setImpactoIneficiencia($impactoIneficiencia)
    {
        $this->impactoIneficiencia = $impactoIneficiencia;

        return $this;
    }

    /**
     * Get impactoIneficiencia
     *
     * @return string 
     */
    public function getImpactoIneficiencia()
    {
        return $this->impactoIneficiencia;
    }

    /**
     * Set ejeIniciativa
     *
     * @param string $ejeIniciativa
     * @return Estudio
     */
    public function setEjeIniciativa($ejeIniciativa)
    {
        $this->ejeIniciativa = $ejeIniciativa;

        return $this;
    }

    /**
     * Get ejeIniciativa
     *
     * @return string 
     */
    public function getEjeIniciativa()
    {
        return $this->ejeIniciativa;
    }

    /**
     * Set descripcionInciativa
     *
     * @param string $descripcionInciativa
     * @return Estudio
     */
    public function setDescripcionInciativa($descripcionInciativa)
    {
        $this->descripcionInciativa = $descripcionInciativa;

        return $this;
    }

    /**
     * Get descripcionInciativa
     *
     * @return string 
     */
    public function getDescripcionInciativa()
    {
        return $this->descripcionInciativa;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
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
     * @return \DateTime 
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->archivosestudios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add archivosestudios
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosEstudios $archivosestudios
     * @return Estudio
     */
    public function addArchivosestudio(\Opltda\EntidadesBundle\Entity\ArchivosEstudios $archivosestudios)
    {
        $this->archivosestudios[] = $archivosestudios;

        return $this;
    }

    /**
     * Remove archivosestudios
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosEstudios $archivosestudios
     */
    public function removeArchivosestudio(\Opltda\EntidadesBundle\Entity\ArchivosEstudios $archivosestudios)
    {
        $this->archivosestudios->removeElement($archivosestudios);
    }

    /**
     * Get archivosestudios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchivosestudios()
    {
        return $this->archivosestudios;
    }
}
