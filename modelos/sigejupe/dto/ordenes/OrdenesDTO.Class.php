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

class OrdenesDTO {

    private $idOrden;
    private $idSolicitudOrden;
    private $cveRespuestaSolicitudOrden;
    private $numeroEspecializadoOrden;
    private $numeroOrden;
    private $anioOrden;
    private $solicitud;
    private $negada;
    private $concedida;
    private $oficio;
    private $fechaPractica;
    private $horaPractica;
    private $horasPractica;
    private $fechaInforme;
    private $horaInforme;
    private $horasInforme;
    private $fechaRespuesta;
    private $qr;
    private $firmaDigital;
    private $selloDigital;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $email;
    private $motivoCancelacion;

    public function getIdOrden() {
        return $this->idOrden;
    }

    public function setIdOrden($idOrden) {
        $this->idOrden = $idOrden;
    }

    public function getIdSolicitudOrden() {
        return $this->idSolicitudOrden;
    }

    public function setIdSolicitudOrden($idSolicitudOrden) {
        $this->idSolicitudOrden = $idSolicitudOrden;
    }

    public function getCveRespuestaSolicitudOrden() {
        return $this->cveRespuestaSolicitudOrden;
    }

    public function setCveRespuestaSolicitudOrden($cveRespuestaSolicitudOrden) {
        $this->cveRespuestaSolicitudOrden = $cveRespuestaSolicitudOrden;
    }

    public function getNumeroOrden() {
        return $this->numeroOrden;
    }

    public function setNumeroOrden($numeroOrden) {
        $this->numeroOrden = $numeroOrden;
    }

    public function getAnioOrden() {
        return $this->anioOrden;
    }

    public function setAnioOrden($anioOrden) {
        $this->anioOrden = $anioOrden;
    }

    public function getSolicitud() {
        return $this->solicitud;
    }

    public function setSolicitud($solicitud) {
        $this->solicitud = $solicitud;
    }

    public function getNegada() {
        return $this->negada;
    }

    public function setNegada($negada) {
        $this->negada = $negada;
    }

    public function getConcedida() {
        return $this->concedida;
    }

    public function setConcedida($concedida) {
        $this->concedida = $concedida;
    }

    function getOficio() {
        return $this->oficio;
    }

    function setOficio($oficio) {
        $this->oficio = $oficio;
    }

    public function getFechaPractica() {
        return $this->fechaPractica;
    }

    public function setFechaPractica($fechaPractica) {
        $this->fechaPractica = $fechaPractica;
    }

    public function getHoraPractica() {
        return $this->horaPractica;
    }

    public function setHoraPractica($horaPractica) {
        $this->horaPractica = $horaPractica;
    }

    public function getHorasPractica() {
        return $this->horasPractica;
    }

    public function setHorasPractica($horasPractica) {
        $this->horasPractica = $horasPractica;
    }

    public function getFechaInforme() {
        return $this->fechaInforme;
    }

    public function setFechaInforme($fechaInforme) {
        $this->fechaInforme = $fechaInforme;
    }

    public function getHoraInforme() {
        return $this->horaInforme;
    }

    public function setHoraInforme($horaInforme) {
        $this->horaInforme = $horaInforme;
    }

    public function getHorasInforme() {
        return $this->horasInforme;
    }

    public function setHorasInforme($horasInforme) {
        $this->horasInforme = $horasInforme;
    }

    public function getFechaRespuesta() {
        return $this->fechaRespuesta;
    }

    public function setFechaRespuesta($fechaRespuesta) {
        $this->fechaRespuesta = $fechaRespuesta;
    }

    public function getQr() {
        return $this->qr;
    }

    public function setQr($qr) {
        $this->qr = $qr;
    }

    public function getFirmaDigital() {
        return $this->firmaDigital;
    }

    public function setFirmaDigital($firmaDigital) {
        $this->firmaDigital = $firmaDigital;
    }

    public function getSelloDigital() {
        return $this->selloDigital;
    }

    public function setSelloDigital($selloDigital) {
        $this->selloDigital = $selloDigital;
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMotivoCancelacion() {
        return $this->motivoCancelacion;
    }

    public function setMotivoCancelacion($motivoCancelacion) {
        $this->motivoCancelacion = $motivoCancelacion;
    }

    function getNumeroEspecializadoOrden() {
        return $this->numeroEspecializadoOrden;
    }

    function setNumeroEspecializadoOrden($numeroEspecializadoOrden) {
        $this->numeroEspecializadoOrden = $numeroEspecializadoOrden;
    }

    public function toString() {
        return array("idOrden" => $this->idOrden,
            "idSolicitudOrden" => $this->idSolicitudOrden,
            "cveRespuestaSolicitudOrden" => $this->cveRespuestaSolicitudOrden,
            "numeroEspecializadoOrden" => $this->numeroEspecializadoOrden,
            "numeroOrden" => $this->numeroOrden,
            "anioOrden" => $this->anioOrden,
            "solicitud" => $this->solicitud,
            "negada" => $this->negada,
            "concedida" => $this->concedida,
            "fechaPractica" => $this->fechaPractica,
            "horaPractica" => $this->horaPractica,
            "horasPractica" => $this->horasPractica,
            "fechaInforme" => $this->fechaInforme,
            "horaInforme" => $this->horaInforme,
            "horasInforme" => $this->horasInforme,
            "fechaRespuesta" => $this->fechaRespuesta,
            "qr" => $this->qr,
            "firmaDigital" => $this->firmaDigital,
            "selloDigital" => $this->selloDigital,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "email" => $this->email,
            "motivoCancelacion" => $this->motivoCancelacion);
    }

}

?>