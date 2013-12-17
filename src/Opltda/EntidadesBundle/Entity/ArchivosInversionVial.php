<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosInversionVial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ArchivosInversionVial
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
    
    
             /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime" , nullable=true)
     */
    
    
    
    private $fecha;
    
    
    
        /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\InversionVial", inversedBy="archivosinversionvial")
     * @ORM\JoinColumn(name="inversionvial_id", referencedColumnName="id")
     */
    
    
    
    private $inversionvial;
    
    


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
     * @return ArchivosInversionVial
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
     * @return ArchivosInversionVial
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ArchivosInversionVial
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
     * Set inversionvial
     *
     * @param \Opltda\EntidadesBundle\Entity\InversionVial $inversionvial
     * @return ArchivosInversionVial
     */
    public function setInversionvial(\Opltda\EntidadesBundle\Entity\InversionVial $inversionvial = null)
    {
        $this->inversionvial = $inversionvial;

        return $this;
    }

    /**
     * Get inversionvial
     *
     * @return \Opltda\EntidadesBundle\Entity\InversionVial 
     */
    public function getInversionvial()
    {
        return $this->inversionvial;
    }
}
