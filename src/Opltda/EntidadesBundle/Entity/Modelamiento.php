<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelamiento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Modelamiento
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
     * Get id
     *
     * @return integer 
     */
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $archivoDoc;
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $archivoBpm;
    
    
    
    
    
    
    
             /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="modelamiento")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */
    
    
    private $puertos;
    
    
    
    
    
       /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Cadenas", inversedBy="modelamiento")
     * @ORM\JoinColumn(name="cadenas_id", referencedColumnName="id")
     */

    private $cadenas;
    
    
    
    
    
    
    
   

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
     * Set archivoDoc
     *
     * @param string $archivoDoc
     * @return Modelamiento
     */
    public function setArchivoDoc($archivoDoc)
    {
        $this->archivoDoc = $archivoDoc;

        return $this;
    }

    /**
     * Get archivoDoc
     *
     * @return string 
     */
    public function getArchivoDoc()
    {
        return $this->archivoDoc;
    }

    /**
     * Set archivoBpm
     *
     * @param string $archivoBpm
     * @return Modelamiento
     */
    public function setArchivoBpm($archivoBpm)
    {
        $this->archivoBpm = $archivoBpm;

        return $this;
    }

    /**
     * Get archivoBpm
     *
     * @return string 
     */
    public function getArchivoBpm()
    {
        return $this->archivoBpm;
    }

    /**
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Modelamiento
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
     * Set cadenas
     *
     * @param \Opltda\EntidadesBundle\Entity\Cadenas $cadenas
     * @return Modelamiento
     */
    public function setCadenas(\Opltda\EntidadesBundle\Entity\Cadenas $cadenas = null)
    {
        $this->cadenas = $cadenas;

        return $this;
    }

    /**
     * Get cadenas
     *
     * @return \Opltda\EntidadesBundle\Entity\Cadenas 
     */
    public function getCadenas()
    {
        return $this->cadenas;
    }
}
