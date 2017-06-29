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

class DelitosDTO {

    private $cveDelito;
    private $desDelito;
    private $fechaVigencia;
    private $fechaInicio;
    private $activo;
    private $cveClasificacionDelito;
    private $CveEspecialidad;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $articulo;
    private $peso;
    private $cveBienJuridicoAfectado;
    private $cveCodigo;

    public function getCveDelito() {
        return $this->cveDelito;
    }

    public function setCveDelito($cveDelito) {
        $this->cveDelito = $cveDelito;
    }

    public function getDesDelito() {
        return $this->desDelito;
    }

    public function setDesDelito($desDelito) {
        $this->desDelito = $desDelito;
    }

    public function getFechaVigencia() {
        return $this->fechaVigencia;
    }

    public function setFechaVigencia($fechaVigencia) {
        $this->fechaVigencia = $fechaVigencia;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getCveClasificacionDelito() {
        return $this->cveClasificacionDelito;
    }

    public function setCveClasificacionDelito($cveClasificacionDelito) {
        $this->cveClasificacionDelito = $cveClasificacionDelito;
    }

    function getCveEspecialidad() {
        return $this->CveEspecialidad;
    }

    function setCveEspecialidad($CveEspecialidad) {
        $this->CveEspecialidad = $CveEspecialidad;
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

    public function getArticulo() {
        return $this->articulo;
    }

    public function setArticulo($articulo) {
        $this->articulo = $articulo;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getCveBienJuridicoAfectado() {
        return $this->cveBienJuridicoAfectado;
    }

    public function setCveBienJuridicoAfectado($cveBienJuridicoAfectado) {
        $this->cveBienJuridicoAfectado = $cveBienJuridicoAfectado;
    }

    public function getCveCodigo() {
        return $this->cveCodigo;
    }

    public function setCveCodigo($cveCodigo) {
        $this->cveCodigo = $cveCodigo;
    }

    public function toString() {
        return array("cveDelito" => $this->cveDelito,
            "desDelito" => $this->desDelito,
            "fechaVigencia" => $this->fechaVigencia,
            "fechaInicio" => $this->fechaInicio,
            "activo" => $this->activo,
            "cveClasificacionDelito" => $this->cveClasificacionDelito,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "articulo" => $this->articulo,
            "peso" => $this->peso,
            "cveBienJuridicoAfectado" => $this->cveBienJuridicoAfectado,
            "cveCodigo" => $this->cveCodigo);
    }

}

?>