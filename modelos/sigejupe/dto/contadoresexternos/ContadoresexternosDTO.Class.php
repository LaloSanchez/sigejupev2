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

class ContadoresexternosDTO {

    private $idContadorExterno;
    private $numero;
    private $anio;
    private $cveTipoActuacion;
    private $cveAdscripcion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdContadorExterno() {
        return $this->idContadorExterno;
    }

    public function setIdContadorExterno($idContadorExterno) {
        $this->idContadorExterno = $idContadorExterno;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
    }

    public function getCveTipoActuacion() {
        return $this->cveTipoActuacion;
    }

    public function setCveTipoActuacion($cveTipoActuacion) {
        $this->cveTipoActuacion = $cveTipoActuacion;
    }

    public function getCveAdscripcion() {
        return $this->cveAdscripcion;
    }

    public function setCveAdscripcion($cveAdscripcion) {
        $this->cveAdscripcion = $cveAdscripcion;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function toString() {
        return array("idContadorExterno" => $this->idContadorExterno,
            "numero" => $this->numero,
            "anio" => $this->anio,
            "cveTipoActuacion" => $this->cveTipoActuacion,
            "cveAdscripcion" => $this->cveAdscripcion,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion);
    }

}

?>