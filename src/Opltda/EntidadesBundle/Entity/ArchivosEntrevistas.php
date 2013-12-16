<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosEntrevistas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ArchivosEntrevistas
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

    private $url;
    
    
    
   /** @ORM\Column(type="string", length=200 , nullable=true) */

    
    private $nombre;
    
    
    
   /** @ORM\Column(type="string", length=200 , nullable=true) */

    
    
    private $descripcion;
    
    
    
        
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime" , nullable=true)
     */
    
    
    
    private $fechaIngreso;
    
         /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", inversedBy="archivosentrevistas")
     * @ORM\JoinColumn(name="entrevistas_id", referencedColumnName="id")
     */


    
    
    private $entrevistas;
    
    
    
  

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
     * Set url
     *
     * @param string $url
     * @return ArchivosEntrevistas
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return ArchivosEntrevistas
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ArchivosEntrevistas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ArchivosEntrevistas
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
     * Set entrevistas
     *
     * @param \Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas
     * @return ArchivosEntrevistas
     */
    public function setEntrevistas(\Opltda\EntidadesBundle\Entity\Entrevistas $entrevistas = null)
    {
        $this->entrevistas = $entrevistas;

        return $this;
    }

    /**
     * Get entrevistas
     *
     * @return \Opltda\EntidadesBundle\Entity\Entrevistas 
     */
    public function getEntrevistas()
    {
        return $this->entrevistas;
    }
}
