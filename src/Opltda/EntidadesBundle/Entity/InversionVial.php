<?php //

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
    
    
    
    private $regiones;
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $nombre;
    
    
    
    
    
            /**
    * @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\ArchivosInversionVial", mappedBy="inversionvial")
    */
    
    
    private $archivosinversionvial;
    
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->archivosinversionvial = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return InversionVial
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
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return InversionVial
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
     * Add archivosinversionvial
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosInversionVial $archivosinversionvial
     * @return InversionVial
     */
    public function addArchivosinversionvial(\Opltda\EntidadesBundle\Entity\ArchivosInversionVial $archivosinversionvial)
    {
        $this->archivosinversionvial[] = $archivosinversionvial;

        return $this;
    }

    /**
     * Remove archivosinversionvial
     *
     * @param \Opltda\EntidadesBundle\Entity\ArchivosInversionVial $archivosinversionvial
     */
    public function removeArchivosinversionvial(\Opltda\EntidadesBundle\Entity\ArchivosInversionVial $archivosinversionvial)
    {
        $this->archivosinversionvial->removeElement($archivosinversionvial);
    }

    /**
     * Get archivosinversionvial
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchivosinversionvial()
    {
        return $this->archivosinversionvial;
    }
}
