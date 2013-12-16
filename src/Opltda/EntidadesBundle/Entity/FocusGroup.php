<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FocusGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FocusGroup
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
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="focusgroup")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */
    
    
    
    private $puertos;
    
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $trascripciones;
    
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $categorizaciones;
    
    
    
            /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\ArchivosFocusGroup", mappedBy="focusgroup")
    */
    
    
   
    private $archivosfocusgroup;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->archivosfocusgroup = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set trascripciones
     *
     * @param string $trascripciones
     * @return FocusGroup
     */
    public function setTrascripciones($trascripciones)
    {
        $this->trascripciones = $trascripciones;

        return $this;
    }

    /**
     * Get trascripciones
     *
     * @return string 
     */
    public function getTrascripciones()
    {
        return $this->trascripciones;
    }

    /**
     * Set categorizaciones
     *
     * @param string $categorizaciones
     * @return FocusGroup
     */
    public function setCategorizaciones($categorizaciones)
    {
        $this->categorizaciones = $categorizaciones;

        return $this;
    }

    /**
     * Get categorizaciones
     *
     * @return string 
     */
    public function getCategorizaciones()
    {
        return $this->categorizaciones;
    }

    /**
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return FocusGroup
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
     * Add archivosfocusgroup
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosFocusGroup $archivosfocusgroup
     * @return FocusGroup
     */
    public function addArchivosfocusgroup(\Opltda\EntidadesBundle\Entity\ArchivosFocusGroup $archivosfocusgroup)
    {
        $this->archivosfocusgroup[] = $archivosfocusgroup;

        return $this;
    }

    /**
     * Remove archivosfocusgroup
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosFocusGroup $archivosfocusgroup
     */
    public function removeArchivosfocusgroup(\Opltda\EntidadesBundle\Entity\ArchivosFocusGroup $archivosfocusgroup)
    {
        $this->archivosfocusgroup->removeElement($archivosfocusgroup);
    }

    /**
     * Get archivosfocusgroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchivosfocusgroup()
    {
        return $this->archivosfocusgroup;
    }
}
