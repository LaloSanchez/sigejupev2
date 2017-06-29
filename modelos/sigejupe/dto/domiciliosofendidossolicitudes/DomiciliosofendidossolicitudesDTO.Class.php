<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DTOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

class DomiciliosofendidossolicitudesDTO {

    private $idDomicilioOfendidoSolicitud;
    private $idOfendidoSolicitud;
    private $DomicilioProcesal;
    private $cvePais;
    private $desPais;
    private $cveEstado;
    private $cveMunicipio;
    private $direccion;
    private $colonia;
    private $numInterior;
    private $numExterior;
    private $cp;
    private $latitud;
    private $longitud;
    private $recidenciaHabitual;
    private $estado;
    private $municipio;
    private $cveConvivencia;
    private $cveTipoDeVivienda;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdDomicilioOfendidoSolicitud()
    {
        return $this->idDomicilioOfendidoSolicitud;
    }

    public function setIdDomicilioOfendidoSolicitud($idDomicilioOfendidoSolicitud)
    {
        $this->idDomicilioOfendidoSolicitud = $idDomicilioOfendidoSolicitud;
    }

    public function getIdOfendidoSolicitud()
    {
        return $this->idOfendidoSolicitud;
    }

    public function setIdOfendidoSolicitud($idOfendidoSolicitud)
    {
        $this->idOfendidoSolicitud = $idOfendidoSolicitud;
    }


    public function setDomicilioProcesal($DomicilioProcesal)
    {
        $this->DomicilioProcesal = $DomicilioProcesal;
    }

    public function getDomicilioProcesal()
    {
        return $this->DomicilioProcesal;
    }

    public function getCvePais()
    {
        return $this->cvePais;
    }

    public function setCvePais($cvePais)
    {
        $this->cvePais = $cvePais;
    }

    /**
     * @return mixed
     */
    public function getDesPais()
    {
        return $this->desPais;
    }

    /**
     * @param mixed $desPais
     */
    public function setDesPais($desPais)
    {
        $this->desPais = $desPais;
    }


    public function getCveEstado()
    {
        return $this->cveEstado;
    }

    public function setCveEstado($cveEstado)
    {
        $this->cveEstado = $cveEstado;
    }

    public function getCveMunicipio()
    {
        return $this->cveMunicipio;
    }

    public function setCveMunicipio($cveMunicipio)
    {
        $this->cveMunicipio = $cveMunicipio;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getColonia()
    {
        return $this->colonia;
    }

    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    }

    public function getNumInterior()
    {
        return $this->numInterior;
    }

    public function setNumInterior($numInterior)
    {
        $this->numInterior = $numInterior;
    }

    public function getNumExterior()
    {
        return $this->numExterior;
    }

    public function setNumExterior($numExterior)
    {
        $this->numExterior = $numExterior;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getLatitud()
    {
        return $this->latitud;
    }

    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    }

    public function getRecidenciaHabitual()
    {
        return $this->recidenciaHabitual;
    }

    public function setRecidenciaHabitual($recidenciaHabitual)
    {
        $this->recidenciaHabitual = $recidenciaHabitual;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    public function getCveConvivencia()
    {
        return $this->cveConvivencia;
    }

    public function setCveConvivencia($cveConvivencia)
    {
        $this->cveConvivencia = $cveConvivencia;
    }

    public function getCveTipoDeVivienda()
    {
        return $this->cveTipoDeVivienda;
    }

    public function setCveTipoDeVivienda($cveTipoDeVivienda)
    {
        $this->cveTipoDeVivienda = $cveTipoDeVivienda;
    }

    function getActivo()
    {
        return $this->activo;
    }

    function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    function setActivo($activo)
    {
        $this->activo = $activo;
    }

    function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    }

    function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    }


    public function toString()
    {
        return array("idDomicilioOfendidoSolicitud" => $this->idDomicilioOfendidoSolicitud,
                     "idOfendidoSolicitud"          => $this->idOfendidoSolicitud,
                     "DomicilioProcesal"            => $this->DomicilioProcesal,
                     "cvePais"                      => $this->cvePais,
                     "desPais"                      => $this->desPais,
                     "cveEstado"                    => $this->cveEstado,
                     "cveMunicipio"                 => $this->cveMunicipio,
                     "direccion"                    => $this->direccion,
                     "colonia"                      => $this->colonia,
                     "numInterior"                  => $this->numInterior,
                     "numExterior"                  => $this->numExterior,
                     "cp"                           => $this->cp,
                     "latitud"                      => $this->latitud,
                     "longitud"                     => $this->longitud,
                     "recidenciaHabitual"           => $this->recidenciaHabitual,
                     "estado"                       => $this->estado,
                     "municipio"                    => $this->municipio,
                     "cveConvivencia"               => $this->cveConvivencia,
                     "cveTipoDeVivienda"            => $this->cveTipoDeVivienda,
                     "activo"                       => $this->activo,
                     "fechaRegistro"                => $this->fechaRegistro,
                     "fechaActualizacion"           => $this->fechaActualizacion);
    }

}
