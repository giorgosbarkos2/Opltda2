<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrevistas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Entrevistas
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
    
    private $codigoFicha;
    
    
    
       /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="entrevistas")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
    
    private $region;
    
    
    
    
         /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="entrevistas")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */
    
    
    
    private $puerto;
    
    
    
    
      /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $nombreCadena;
    
    
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $CodigoCadena;
    
    
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $TipoActor;
    
    
    
    
    
    
    
    
    
    


}
