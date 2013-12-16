<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrevistas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Entrevistas
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

    private $codigoFicha;



     /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="entrevistas")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */

    private $regiones;




     /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="entrevistas")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */



    private $puertos;




   /** @ORM\Column(type="string", length=200 , nullable=true) */


    private $nombreCadena;




     /** @ORM\Column(type="string", length=200 , nullable=true) */


    private $CodigoCadena;




     /** @ORM\Column(type="string", length=200 , nullable=true) */


    private $TipoActor;





    
    
       /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\ArchivosEntrevistas", mappedBy="entrevistas")
    */
    
    
   
    private $archivosentrevistas;
    
    






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->archivosentrevistas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoFicha
     *
     * @param string $codigoFicha
     * @return Entrevistas
     */
    public function setCodigoFicha($codigoFicha)
    {
        $this->codigoFicha = $codigoFicha;

        return $this;
    }

    /**
     * Get codigoFicha
     *
     * @return string 
     */
    public function getCodigoFicha()
    {
        return $this->codigoFicha;
    }

    /**
     * Set nombreCadena
     *
     * @param string $nombreCadena
     * @return Entrevistas
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
     * Set CodigoCadena
     *
     * @param string $codigoCadena
     * @return Entrevistas
     */
    public function setCodigoCadena($codigoCadena)
    {
        $this->CodigoCadena = $codigoCadena;

        return $this;
    }

    /**
     * Get CodigoCadena
     *
     * @return string 
     */
    public function getCodigoCadena()
    {
        return $this->CodigoCadena;
    }

    /**
     * Set TipoActor
     *
     * @param string $tipoActor
     * @return Entrevistas
     */
    public function setTipoActor($tipoActor)
    {
        $this->TipoActor = $tipoActor;

        return $this;
    }

    /**
     * Get TipoActor
     *
     * @return string 
     */
    public function getTipoActor()
    {
        return $this->TipoActor;
    }

    /**
     * Set region
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $region
     * @return Entrevistas
     */
    public function setRegion(\Opltda\EntidadesBundle\Entity\Regiones $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Opltda\EntidadesBundle\Entity\Regiones 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set puerto
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puerto
     * @return Entrevistas
     */
    public function setPuerto(\Opltda\EntidadesBundle\Entity\Puertos $puerto = null)
    {
        $this->puerto = $puerto;

        return $this;
    }

    /**
     * Get puerto
     *
     * @return \Opltda\EntidadesBundle\Entity\Puertos 
     */
    public function getPuerto()
    {
        return $this->puerto;
    }

    /**
     * Add archivosentrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosEntrevistas $archivosentrevistas
     * @return Entrevistas
     */
    public function addArchivosentrevista(\Opltda\EntidadesBundle\Entity\ArchivosEntrevistas $archivosentrevistas)
    {
        $this->archivosentrevistas[] = $archivosentrevistas;

        return $this;
    }

    /**
     * Remove archivosentrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosEntrevistas $archivosentrevistas
     */
    public function removeArchivosentrevista(\Opltda\EntidadesBundle\Entity\ArchivosEntrevistas $archivosentrevistas)
    {
        $this->archivosentrevistas->removeElement($archivosentrevistas);
    }

    /**
     * Get archivosentrevistas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchivosentrevistas()
    {
        return $this->archivosentrevistas;
    }

    /**
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Entrevistas
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
     * @return Entrevistas
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
}
