<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosFocusGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ArchivosFocusGroup
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
	*
	* @ORM\Column(name="nombre", type="text" ,nullable=true )
	*/
    private $nombre;
    
    /**
	*
	* @ORM\Column(name="url", type="text" ,nullable=true )
	*/
    
    private $url;
    
    
           /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime" , nullable=true)
     */
    
    
    
    private $fechaIngreso;
    
    
    
        /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\FocusGroup", inversedBy="archivosfocusgroup")
     * @ORM\JoinColumn(name="focusgroup_id", referencedColumnName="id")
     */
    
    
    
    
    
    private $focusgroup;

  

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
     * @return ArchivosFocusGroup
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
     * @return ArchivosFocusGroup
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ArchivosFocusGroup
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
     * Set focusgroup
     *
     * @param \Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup
     * @return ArchivosFocusGroup
     */
    public function setFocusgroup(\Opltda\EntidadesBundle\Entity\FocusGroup $focusgroup = null)
    {
        $this->focusgroup = $focusgroup;

        return $this;
    }

    /**
     * Get focusgroup
     *
     * @return \Opltda\EntidadesBundle\Entity\FocusGroup 
     */
    public function getFocusgroup()
    {
        return $this->focusgroup;
    }
}
