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
    
    
    
    private $puerto;
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $trascripciones;
    
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $categorizaciones;
    
    
    
    
    
    
    
    
    
    
}
