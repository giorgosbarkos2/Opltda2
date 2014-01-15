<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mapas
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
    
    

    
    
             /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="mapas")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
    
    
    private $regiones;
    
    
    
    
              /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="mapas")
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
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return Mapas
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
     * @return Mapas
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
     * Set url
     *
     * @param string $url
     * @return Mapas
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
}
