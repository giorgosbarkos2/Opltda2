<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosEstudios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ArchivosEstudios
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
    
    private $url;
    
    
    
         /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime" , nullable=true)
     */
    
    
    
    private $fecha;
    
    
    
           /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Estudio", inversedBy="archivosestudios")
     * @ORM\JoinColumn(name="estudio_id", referencedColumnName="id")
     */

    
    private $estudio;
    



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
     * @return ArchivosEstudios
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
     * Set url
     *
     * @param string $url
     * @return ArchivosEstudios
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ArchivosEstudios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estudio
     *
     * @param \Opltda\EntidadesBundle\Entity\Estudio $estudio
     * @return ArchivosEstudios
     */
    public function setEstudio(\Opltda\EntidadesBundle\Entity\Estudio $estudio = null)
    {
        $this->estudio = $estudio;

        return $this;
    }

    /**
     * Get estudio
     *
     * @return \Opltda\EntidadesBundle\Entity\Estudio 
     */
    public function getEstudio()
    {
        return $this->estudio;
    }
}
