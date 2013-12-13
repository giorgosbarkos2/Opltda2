<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regiones
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Regiones
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
     * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="regiones")
    */

    private $entrevistas;




    /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\InversionVial", mappedBy="regiones")
    */

    private $inversionVial;
    
    
    
        /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Estudio", mappedBy="regiones")
    */

    private $estudio;
    
    



}
