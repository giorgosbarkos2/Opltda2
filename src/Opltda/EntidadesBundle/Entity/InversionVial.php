<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InversionVial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InversionVial
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
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="inversionvial")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
    
    
    
    private $region;
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $nombre;
    
    
    
    
    
    
    
    
}
