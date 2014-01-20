<?php

namespace Opltda\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estudio
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
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Cadenas", inversedBy="estudio")
     * @ORM\JoinColumn(name="cadenas_id", referencedColumnName="id")
     */

    private $cadenas;
    
    
    
    
   /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Regiones", inversedBy="estudio")
     * @ORM\JoinColumn(name="regiones_id", referencedColumnName="id")
     */
   
    
    private $regiones;
        

             	   /**
     * @ORM\ManyToOne(targetEntity="Opltda\EntidadesBundle\Entity\Puertos", inversedBy="estudio")
     * @ORM\JoinColumn(name="puertos_id", referencedColumnName="id")
     */
	private $puertos;
        
        
     
        
        
        
        
 /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $CADENA;
    
    
            
 /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $MACROPROCESO;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $FACTOR;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $CODIGOACTIVIDAD;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $ACTIVIDAD;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $AGENTE;
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $GENERADOR;
    
    
    /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    
    private $sector;
    
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $COSTOunitario;
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $COSTOUNITARIOFACTORESPACIALYTEMPORAL;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $TIEMPOPROMEDIOSERVICIO;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $PRECIODELPRODUCTO;
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    private $COSTODEINVENTARIO;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    private $Sumadelosfactoresmasinventarios;
    
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    
    private $TRANSFERENCIADECARGASISTEMA;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
    private $TRANSFERENCIADECARGAPUERTO;
    
     /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $TRANSFERENCIADECARGACADENA;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $COSTOFACTOR;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $COSTOLOGISTICO;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   
   private $COSTOINVENTARIO;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   
   private $Ineficencias;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   
   private $CAUSASDELASINEFICIENCIAS;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   
   private $eje;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $iniciativa;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $INVERSIONESTIMADA;
   
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $COSTOTOTAL;
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   private $Costologistico2;
    /** @ORM\Column(type="string", length=200 , nullable=true) */
   
   private $Coberturaimpacto;
  
    

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
     * Set CADENA
     *
     * @param string $cADENA
     * @return Estudio
     */
    public function setCADENA($cADENA)
    {
        $this->CADENA = $cADENA;

        return $this;
    }

    /**
     * Get CADENA
     *
     * @return string 
     */
    public function getCADENA()
    {
        return $this->CADENA;
    }

    /**
     * Set MACROPROCESO
     *
     * @param string $mACROPROCESO
     * @return Estudio
     */
    public function setMACROPROCESO($mACROPROCESO)
    {
        $this->MACROPROCESO = $mACROPROCESO;

        return $this;
    }

    /**
     * Get MACROPROCESO
     *
     * @return string 
     */
    public function getMACROPROCESO()
    {
        return $this->MACROPROCESO;
    }

    /**
     * Set FACTOR
     *
     * @param string $fACTOR
     * @return Estudio
     */
    public function setFACTOR($fACTOR)
    {
        $this->FACTOR = $fACTOR;

        return $this;
    }

    /**
     * Get FACTOR
     *
     * @return string 
     */
    public function getFACTOR()
    {
        return $this->FACTOR;
    }

    /**
     * Set CODIGOACTIVIDAD
     *
     * @param string $cODIGOACTIVIDAD
     * @return Estudio
     */
    public function setCODIGOACTIVIDAD($cODIGOACTIVIDAD)
    {
        $this->CODIGOACTIVIDAD = $cODIGOACTIVIDAD;

        return $this;
    }

    /**
     * Get CODIGOACTIVIDAD
     *
     * @return string 
     */
    public function getCODIGOACTIVIDAD()
    {
        return $this->CODIGOACTIVIDAD;
    }

    /**
     * Set ACTIVIDAD
     *
     * @param string $aCTIVIDAD
     * @return Estudio
     */
    public function setACTIVIDAD($aCTIVIDAD)
    {
        $this->ACTIVIDAD = $aCTIVIDAD;

        return $this;
    }

    /**
     * Get ACTIVIDAD
     *
     * @return string 
     */
    public function getACTIVIDAD()
    {
        return $this->ACTIVIDAD;
    }

    /**
     * Set AGENTE
     *
     * @param string $aGENTE
     * @return Estudio
     */
    public function setAGENTE($aGENTE)
    {
        $this->AGENTE = $aGENTE;

        return $this;
    }

    /**
     * Get AGENTE
     *
     * @return string 
     */
    public function getAGENTE()
    {
        return $this->AGENTE;
    }

    /**
     * Set GENERADOR
     *
     * @param string $gENERADOR
     * @return Estudio
     */
    public function setGENERADOR($gENERADOR)
    {
        $this->GENERADOR = $gENERADOR;

        return $this;
    }

    /**
     * Get GENERADOR
     *
     * @return string 
     */
    public function getGENERADOR()
    {
        return $this->GENERADOR;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return Estudio
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set COSTOunitario
     *
     * @param string $cOSTOunitario
     * @return Estudio
     */
    public function setCOSTOunitario($cOSTOunitario)
    {
        $this->COSTOunitario = $cOSTOunitario;

        return $this;
    }

    /**
     * Get COSTOunitario
     *
     * @return string 
     */
    public function getCOSTOunitario()
    {
        return $this->COSTOunitario;
    }

    /**
     * Set COSTOUNITARIOFACTORESPACIALYTEMPORAL
     *
     * @param string $cOSTOUNITARIOFACTORESPACIALYTEMPORAL
     * @return Estudio
     */
    public function setCOSTOUNITARIOFACTORESPACIALYTEMPORAL($cOSTOUNITARIOFACTORESPACIALYTEMPORAL)
    {
        $this->COSTOUNITARIOFACTORESPACIALYTEMPORAL = $cOSTOUNITARIOFACTORESPACIALYTEMPORAL;

        return $this;
    }

    /**
     * Get COSTOUNITARIOFACTORESPACIALYTEMPORAL
     *
     * @return string 
     */
    public function getCOSTOUNITARIOFACTORESPACIALYTEMPORAL()
    {
        return $this->COSTOUNITARIOFACTORESPACIALYTEMPORAL;
    }

    /**
     * Set TIEMPOPROMEDIOSERVICIO
     *
     * @param string $tIEMPOPROMEDIOSERVICIO
     * @return Estudio
     */
    public function setTIEMPOPROMEDIOSERVICIO($tIEMPOPROMEDIOSERVICIO)
    {
        $this->TIEMPOPROMEDIOSERVICIO = $tIEMPOPROMEDIOSERVICIO;

        return $this;
    }

    /**
     * Get TIEMPOPROMEDIOSERVICIO
     *
     * @return string 
     */
    public function getTIEMPOPROMEDIOSERVICIO()
    {
        return $this->TIEMPOPROMEDIOSERVICIO;
    }

    /**
     * Set PRECIODELPRODUCTO
     *
     * @param string $pRECIODELPRODUCTO
     * @return Estudio
     */
    public function setPRECIODELPRODUCTO($pRECIODELPRODUCTO)
    {
        $this->PRECIODELPRODUCTO = $pRECIODELPRODUCTO;

        return $this;
    }

    /**
     * Get PRECIODELPRODUCTO
     *
     * @return string 
     */
    public function getPRECIODELPRODUCTO()
    {
        return $this->PRECIODELPRODUCTO;
    }

    /**
     * Set COSTODEINVENTARIO
     *
     * @param string $cOSTODEINVENTARIO
     * @return Estudio
     */
    public function setCOSTODEINVENTARIO($cOSTODEINVENTARIO)
    {
        $this->COSTODEINVENTARIO = $cOSTODEINVENTARIO;

        return $this;
    }

    /**
     * Get COSTODEINVENTARIO
     *
     * @return string 
     */
    public function getCOSTODEINVENTARIO()
    {
        return $this->COSTODEINVENTARIO;
    }

    /**
     * Set Sumadelosfactoresmasinventarios
     *
     * @param string $sumadelosfactoresmasinventarios
     * @return Estudio
     */
    public function setSumadelosfactoresmasinventarios($sumadelosfactoresmasinventarios)
    {
        $this->Sumadelosfactoresmasinventarios = $sumadelosfactoresmasinventarios;

        return $this;
    }

    /**
     * Get Sumadelosfactoresmasinventarios
     *
     * @return string 
     */
    public function getSumadelosfactoresmasinventarios()
    {
        return $this->Sumadelosfactoresmasinventarios;
    }

    /**
     * Set TRANSFERENCIADECARGASISTEMA
     *
     * @param string $tRANSFERENCIADECARGASISTEMA
     * @return Estudio
     */
    public function setTRANSFERENCIADECARGASISTEMA($tRANSFERENCIADECARGASISTEMA)
    {
        $this->TRANSFERENCIADECARGASISTEMA = $tRANSFERENCIADECARGASISTEMA;

        return $this;
    }

    /**
     * Get TRANSFERENCIADECARGASISTEMA
     *
     * @return string 
     */
    public function getTRANSFERENCIADECARGASISTEMA()
    {
        return $this->TRANSFERENCIADECARGASISTEMA;
    }

    /**
     * Set TRANSFERENCIADECARGAPUERTO
     *
     * @param string $tRANSFERENCIADECARGAPUERTO
     * @return Estudio
     */
    public function setTRANSFERENCIADECARGAPUERTO($tRANSFERENCIADECARGAPUERTO)
    {
        $this->TRANSFERENCIADECARGAPUERTO = $tRANSFERENCIADECARGAPUERTO;

        return $this;
    }

    /**
     * Get TRANSFERENCIADECARGAPUERTO
     *
     * @return string 
     */
    public function getTRANSFERENCIADECARGAPUERTO()
    {
        return $this->TRANSFERENCIADECARGAPUERTO;
    }

    /**
     * Set TRANSFERENCIADECARGACADENA
     *
     * @param string $tRANSFERENCIADECARGACADENA
     * @return Estudio
     */
    public function setTRANSFERENCIADECARGACADENA($tRANSFERENCIADECARGACADENA)
    {
        $this->TRANSFERENCIADECARGACADENA = $tRANSFERENCIADECARGACADENA;

        return $this;
    }

    /**
     * Get TRANSFERENCIADECARGACADENA
     *
     * @return string 
     */
    public function getTRANSFERENCIADECARGACADENA()
    {
        return $this->TRANSFERENCIADECARGACADENA;
    }

    /**
     * Set COSTOFACTOR
     *
     * @param string $cOSTOFACTOR
     * @return Estudio
     */
    public function setCOSTOFACTOR($cOSTOFACTOR)
    {
        $this->COSTOFACTOR = $cOSTOFACTOR;

        return $this;
    }

    /**
     * Get COSTOFACTOR
     *
     * @return string 
     */
    public function getCOSTOFACTOR()
    {
        return $this->COSTOFACTOR;
    }

    /**
     * Set COSTOLOGISTICO
     *
     * @param string $cOSTOLOGISTICO
     * @return Estudio
     */
    public function setCOSTOLOGISTICO($cOSTOLOGISTICO)
    {
        $this->COSTOLOGISTICO = $cOSTOLOGISTICO;

        return $this;
    }

    /**
     * Get COSTOLOGISTICO
     *
     * @return string 
     */
    public function getCOSTOLOGISTICO()
    {
        return $this->COSTOLOGISTICO;
    }

    /**
     * Set COSTOINVENTARIO
     *
     * @param string $cOSTOINVENTARIO
     * @return Estudio
     */
    public function setCOSTOINVENTARIO($cOSTOINVENTARIO)
    {
        $this->COSTOINVENTARIO = $cOSTOINVENTARIO;

        return $this;
    }

    /**
     * Get COSTOINVENTARIO
     *
     * @return string 
     */
    public function getCOSTOINVENTARIO()
    {
        return $this->COSTOINVENTARIO;
    }

    /**
     * Set Ineficencias
     *
     * @param string $ineficencias
     * @return Estudio
     */
    public function setIneficencias($ineficencias)
    {
        $this->Ineficencias = $ineficencias;

        return $this;
    }

    /**
     * Get Ineficencias
     *
     * @return string 
     */
    public function getIneficencias()
    {
        return $this->Ineficencias;
    }

    /**
     * Set CAUSASDELASINEFICIENCIAS
     *
     * @param string $cAUSASDELASINEFICIENCIAS
     * @return Estudio
     */
    public function setCAUSASDELASINEFICIENCIAS($cAUSASDELASINEFICIENCIAS)
    {
        $this->CAUSASDELASINEFICIENCIAS = $cAUSASDELASINEFICIENCIAS;

        return $this;
    }

    /**
     * Get CAUSASDELASINEFICIENCIAS
     *
     * @return string 
     */
    public function getCAUSASDELASINEFICIENCIAS()
    {
        return $this->CAUSASDELASINEFICIENCIAS;
    }

    /**
     * Set eje
     *
     * @param string $eje
     * @return Estudio
     */
    public function setEje($eje)
    {
        $this->eje = $eje;

        return $this;
    }

    /**
     * Get eje
     *
     * @return string 
     */
    public function getEje()
    {
        return $this->eje;
    }

    /**
     * Set iniciativa
     *
     * @param string $iniciativa
     * @return Estudio
     */
    public function setIniciativa($iniciativa)
    {
        $this->iniciativa = $iniciativa;

        return $this;
    }

    /**
     * Get iniciativa
     *
     * @return string 
     */
    public function getIniciativa()
    {
        return $this->iniciativa;
    }

    /**
     * Set INVERSIONESTIMADA
     *
     * @param string $iNVERSIONESTIMADA
     * @return Estudio
     */
    public function setINVERSIONESTIMADA($iNVERSIONESTIMADA)
    {
        $this->INVERSIONESTIMADA = $iNVERSIONESTIMADA;

        return $this;
    }

    /**
     * Get INVERSIONESTIMADA
     *
     * @return string 
     */
    public function getINVERSIONESTIMADA()
    {
        return $this->INVERSIONESTIMADA;
    }

    /**
     * Set COSTOTOTAL
     *
     * @param string $cOSTOTOTAL
     * @return Estudio
     */
    public function setCOSTOTOTAL($cOSTOTOTAL)
    {
        $this->COSTOTOTAL = $cOSTOTOTAL;

        return $this;
    }

    /**
     * Get COSTOTOTAL
     *
     * @return string 
     */
    public function getCOSTOTOTAL()
    {
        return $this->COSTOTOTAL;
    }

    /**
     * Set Costologistico2
     *
     * @param string $costologistico2
     * @return Estudio
     */
    public function setCostologistico2($costologistico2)
    {
        $this->Costologistico2 = $costologistico2;

        return $this;
    }

    /**
     * Get Costologistico2
     *
     * @return string 
     */
    public function getCostologistico2()
    {
        return $this->Costologistico2;
    }

    /**
     * Set Coberturaimpacto
     *
     * @param string $coberturaimpacto
     * @return Estudio
     */
    public function setCoberturaimpacto($coberturaimpacto)
    {
        $this->Coberturaimpacto = $coberturaimpacto;

        return $this;
    }

    /**
     * Get Coberturaimpacto
     *
     * @return string 
     */
    public function getCoberturaimpacto()
    {
        return $this->Coberturaimpacto;
    }

    /**
     * Set cadenas
     *
     * @param \Opltda\EntidadesBundle\Entity\Cadenas $cadenas
     * @return Estudio
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

    /**
     * Set regiones
     *
     * @param \Opltda\EntidadesBundle\Entity\Regiones $regiones
     * @return Estudio
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
     * Set puertos
     *
     * @param \Opltda\EntidadesBundle\Entity\Puertos $puertos
     * @return Estudio
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
}
