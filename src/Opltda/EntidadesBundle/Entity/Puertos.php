<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puertos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Puertos
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
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="puertos")
    */
    private $entrevistas;

    /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\FocusGroup", mappedBy="puertos")
    */
    private $FocusGroup;
    
    
    
            /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Estudio", mappedBy="puertos")
    */

    private $estudio;



}
