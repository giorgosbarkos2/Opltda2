<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * memoriaCalculo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class memoriaCalculo
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
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Cadenas", inversedBy="entrevistas")
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
     * Set url
     *
     * @param string $url
     * @return memoriaCalculo
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
     * Set cadenas
     *
     * @param \Opltda\EntidadesBundle\Entity\Cadenas $cadenas
     * @return memoriaCalculo
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
