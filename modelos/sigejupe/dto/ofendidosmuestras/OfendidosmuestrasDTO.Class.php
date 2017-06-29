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

class OfendidosmuestrasDTO {

    private $idOfendidoMuestra;
    private $idSolicitudMuestra;
    private $nombre;
    private $paterno;
    private $materno;
    private $cveTipoPersona;
    private $nombreMoral;
    private $cveGenero;
    private $domicilio;
    private $telefono;
    private $email;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveOrigen;

    public function getIdOfendidoMuestra() {
        return $this->idOfendidoMuestra;
    }

    public function setIdOfendidoMuestra($idOfendidoMuestra) {
        $this->idOfendidoMuestra = $idOfendidoMuestra;
    }

    public function getIdSolicitudMuestra() {
        return $this->idSolicitudMuestra;
    }

    public function setIdSolicitudMuestra($idSolicitudMuestra) {
        $this->idSolicitudMuestra = $idSolicitudMuestra;
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

    public function getCveTipoPersona() {
        return $this->cveTipoPersona;
    }

    public function setCveTipoPersona($cveTipoPersona) {
        $this->cveTipoPersona = $cveTipoPersona;
    }

    public function getNombreMoral() {
        return $this->nombreMoral;
    }

    public function setNombreMoral($nombreMoral) {
        $this->nombreMoral = $nombreMoral;
    }

    public function getCveGenero() {
        return $this->cveGenero;
    }

    public function setCveGenero($cveGenero) {
        $this->cveGenero = $cveGenero;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
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

    function getCveOrigen() {
        return $this->cveOrigen;
    }

    function setCveOrigen($cveOrigen) {
        $this->cveOrigen = $cveOrigen;
    }

    public function toString() {
        return array("idOfendidoMuestra" => $this->idOfendidoMuestra,
            "idSolicitudMuestra" => $this->idSolicitudMuestra,
            "nombre" => $this->nombre,
            "paterno" => $this->paterno,
            "materno" => $this->materno,
            "cveTipoPersona" => $this->cveTipoPersona,
            "nombreMoral" => $this->nombreMoral,
            "cveGenero" => $this->cveGenero,
            "domicilio" => $this->domicilio,
            "telefono" => $this->telefono,
            "email" => $this->email,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "cveOrigen" => $this->cveOrigen);
    }

}

?>