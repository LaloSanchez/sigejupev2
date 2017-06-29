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

class TutoresimputadosDTO {

    private $idTutorImputado;
    private $idImputadoSolicitud;
    private $cveTipoTutor;
    private $ProvDef;
    private $nombre;
    private $paterno;
    private $materno;
    private $fechaNacimiento;
    private $edad;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveGenero;

    public function getIdTutorImputado() {
        return $this->idTutorImputado;
    }

    public function setIdTutorImputado($idTutorImputado) {
        $this->idTutorImputado = $idTutorImputado;
    }

    public function getIdImputadoSolicitud() {
        return $this->idImputadoSolicitud;
    }

    public function setIdImputadoSolicitud($idImputadoSolicitud) {
        $this->idImputadoSolicitud = $idImputadoSolicitud;
    }

    public function getCveTipoTutor() {
        return $this->cveTipoTutor;
    }

    public function setCveTipoTutor($cveTipoTutor) {
        $this->cveTipoTutor = $cveTipoTutor;
    }

    function getProvDef() {
        return $this->ProvDef;
    }

    function setProvDef($ProvDef) {
        $this->ProvDef = $ProvDef;
        return $this;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPaterno() {
        return $this->paterno;
    }

    public function setPaterno($paterno) {
        $this->paterno = $paterno;
    }

    public function getMaterno() {
        return $this->materno;
    }

    public function setMaterno($materno) {
        $this->materno = $materno;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
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

    public function getCveGenero() {
        return $this->cveGenero;
    }

    public function setCveGenero($cveGenero) {
        $this->cveGenero = $cveGenero;
    }

    public function toString() {
        return array("idTutorImputado" => $this->idTutorImputado,
            "idImputadoSolicitud" => $this->idImputadoSolicitud,
            "cveTipoTutor" => $this->cveTipoTutor,
            "ProvDef" => $this->ProvDef,
            "nombre" => $this->nombre,
            "paterno" => $this->paterno,
            "materno" => $this->materno,
            "fechaNacimiento" => $this->fechaNacimiento,
            "edad" => $this->edad,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "cveGenero" => $this->cveGenero);
    }

}

?>