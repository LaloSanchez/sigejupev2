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

class ApelacioncateosDTO {

    private $idApelacionCateo;
    private $idCateo;
    private $agravios;
    private $escritoApelacion;
    private $fechaEscritoApelacion;
    private $acuerdo;
    private $fechaAcuerdo;
    private $aceptada;
    private $resolucionSala;
    private $fechaResolucion;
    private $cveSentido;
    private $cveEstatusSolicitudCateo;
    private $cveUsuarioMP;
    private $cveUsuarioSecretario;
    private $cveSala;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdApelacionCateo() {
        return $this->idApelacionCateo;
    }

    public function setIdApelacionCateo($idApelacionCateo) {
        $this->idApelacionCateo = $idApelacionCateo;
    }

    public function getIdCateo() {
        return $this->idCateo;
    }

    public function setIdCateo($idCateo) {
        $this->idCateo = $idCateo;
    }

    public function getAgravios() {
        return $this->agravios;
    }

    public function setAgravios($agravios) {
        $this->agravios = $agravios;
    }

    public function getEscritoApelacion() {
        return $this->escritoApelacion;
    }

    public function setEscritoApelacion($escritoApelacion) {
        $this->escritoApelacion = $escritoApelacion;
    }

    public function getFechaEscritoApelacion() {
        return $this->fechaEscritoApelacion;
    }

    public function setFechaEscritoApelacion($fechaEscritoApelacion) {
        $this->fechaEscritoApelacion = $fechaEscritoApelacion;
    }

    public function getAcuerdo() {
        return $this->acuerdo;
    }

    public function setAcuerdo($acuerdo) {
        $this->acuerdo = $acuerdo;
    }

    public function getFechaAcuerdo() {
        return $this->fechaAcuerdo;
    }

    public function setFechaAcuerdo($fechaAcuerdo) {
        $this->fechaAcuerdo = $fechaAcuerdo;
    }

    public function getResolucionSala() {
        return $this->resolucionSala;
    }

    public function setResolucionSala($resolucionSala) {
        $this->resolucionSala = $resolucionSala;
    }

    public function getFechaResolucion() {
        return $this->fechaResolucion;
    }

    public function setFechaResolucion($fechaResolucion) {
        $this->fechaResolucion = $fechaResolucion;
    }

    public function getAceptada() {
        return $this->aceptada;
    }

    public function setAceptada($aceptada) {
        $this->aceptada = $aceptada;
    }

    public function getCveSentido() {
        return $this->cveSentido;
    }

    public function setCveSentido($cveSentido) {
        $this->cveSentido = $cveSentido;
    }

    public function getCveEstatusSolicitudCateo() {
        return $this->cveEstatusSolicitudCateo;
    }

    public function setCveEstatusSolicitudCateo($cveEstatusSolicitudCateo) {
        $this->cveEstatusSolicitudCateo = $cveEstatusSolicitudCateo;
    }

    public function getCveUsuarioMP() {
        return $this->cveUsuarioMP;
    }

    public function setCveUsuarioMP($cveUsuarioMP) {
        $this->cveUsuarioMP = $cveUsuarioMP;
    }

    public function getCveUsuarioSecretario() {
        return $this->cveUsuarioSecretario;
    }

    public function setCveUsuarioSecretario($cveUsuarioSecretario) {
        $this->cveUsuarioSecretario = $cveUsuarioSecretario;
    }

    public function getCveSala() {
        return $this->cveSala;
    }

    public function setCveSala($cveSala) {
        $this->cveSala = $cveSala;
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
        return array("idApelacionCateo" => $this->idApelacionCateo,
            "idCateo" => $this->idCateo,
            "agravios" => $this->agravios,
            "escritoApelacion" => $this->escritoApelacion,
            "fechaEscritoApelacion" => $this->fechaEscritoApelacion,
            "acuerdo" => $this->acuerdo,
            "fechaAcuerdo" => $this->fechaAcuerdo,
            "aceptada" => $this->aceptada,
            "resolucionSala" => $this->resolucionSala,
            "fechaResolucion" => $this->fechaResolucion,
            "cveSentido" => $this->cveSentido,
            "cveEstatusSolicitudCateo" => $this->cveEstatusSolicitudCateo,
            "cveUsuarioMP" => $this->cveUsuarioMP,
            "cveUsuarioSecretario" => $this->cveUsuarioSecretario,
            "cveSala" => $this->cveSala,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion);
    }

}

?>