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

	/* Relaciones */
	/**
	* @ORM\OneToMany(targetEntity="Opltda\EntidadesBundle\Entity\Entrevistas", mappedBy="puertos")
	*/

	private $entrevistas;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoCadena", type="text" ,nullable=true )
     */
    private $codigoCadena;

	/**
	*
	* @ORM\Column(name="nombreCadena", type="text" ,nullable=true )
	*/
	private $nombreCadena;

	/**
	*
	* @ORM\Column(name="macroProceso", type="text" ,nullable=true )
	*/
	private $macroProceso;

	/**
	*
	* @ORM\Column(name="dimension", type="text" ,nullable=true )
	*/
	private $dimension;

	/**
	*
	* @ORM\Column(name="codigoActividad", type="text" ,nullable=true )
	*/
	private $codigoActividad;

	/**
	*
	* @ORM\Column(name="nombreActividad", type="text" ,nullable=true )
	*/
	private $nombreActividad;

	/**
	*
	* @ORM\Column(name="generadoresIneficiencia", type="text" ,nullable=true )
	*/
	private $generadoresIneficiencia;

	/**
	*
	* @ORM\Column(name="tiempoServicio", type="text" ,nullable=true )
	*/
	private $tiempoServicio;

	/**
	*
	* @ORM\Column(name="tiempoEspera", type="text" ,nullable=true )
	*/
	private $tiempoEspera;

	/**
	*
	* @ORM\Column(name="tipoInficiencia", type="text" ,nullable=true )
	*/
	private $tipoIneficiencia;

	/**
	*
	* @ORM\Column(name="descripcionIneficiencia", type="text" ,nullable=true )
	*/
	private $descripcionIneficiencia;

	/**
	*
	* @ORM\Column(name="costoIneficiencia", type="text" ,nullable=true )
	*/
	private $costoIneficiena;

	/**
	*
	* @ORM\Column(name="causaIneficiencia", type="text" ,nullable=true )
	*/
	private $causaIneficiencia;

	/**
	*
	* @ORM\Column(name="impactoIneficiencia", type="text" ,nullable=true )
	*/
	private $impactoIneficiencia;

	/**
	*
	* @ORM\Column(name="ejeIniciativa", type="text" ,nullable=true )
	*/
	private $ejeIniciativa;

	/**
	*
	* @ORM\Column(name="descripcionInciativa", type="text" ,nullable=true )
	*/
	private $descripcionInciativa;

	/**
	*
	* @ORM\Column(name="fechaIngreso", type="datetime" ,nullable=true )
	*/
	private $fechaIngreso;
}
