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

class SolicitudesaudienciasDTO {

    private $idSolicitudAudiencia;
    private $cveCatAudiencia;
    private $cveJuzgadoDesahoga;
    private $cveJuzgado;
    private $cveConsignacion;
    private $cveEtapaProcesal;
    private $idReferencia;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $fechaEnvio;
    private $cveTipoCarpeta;
    private $numero;
    private $anio;
    private $activo;
    private $carpetaInv;
    private $nuc;
    private $cveUsuario;
    private $cveAdscripcionSolicita;
    private $mismoJuzgador;
    private $tribunal;
    private $cveEstatusSolicitud;
    private $observaciones;
    private $numImputados;
    private $numDelitos;
    private $numOfendidos;
    private $cveNaturaleza;
    private $cveTipoAudiencia;

    public function getIdSolicitudAudiencia() {
        return $this->idSolicitudAudiencia;
    }

    public function setIdSolicitudAudiencia($idSolicitudAudiencia) {
        $this->idSolicitudAudiencia = $idSolicitudAudiencia;
    }

    public function getCveCatAudiencia() {
        return $this->cveCatAudiencia;
    }

    public function setCveCatAudiencia($cveCatAudiencia) {
        $this->cveCatAudiencia = $cveCatAudiencia;
    }

    public function getCveJuzgadoDesahoga() {
        return $this->cveJuzgadoDesahoga;
    }

    public function setCveJuzgadoDesahoga($cveJuzgadoDesahoga) {
        $this->cveJuzgadoDesahoga = $cveJuzgadoDesahoga;
    }

    public function getCveJuzgado() {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado) {
        $this->cveJuzgado = $cveJuzgado;
    }

    public function getCveConsignacion() {
        return $this->cveConsignacion;
    }

    public function setCveConsignacion($cveConsignacion) {
        $this->cveConsignacion = $cveConsignacion;
    }

    public function getCveEtapaProcesal() {
        return $this->cveEtapaProcesal;
    }

    public function setCveEtapaProcesal($cveEtapaProcesal) {
        $this->cveEtapaProcesal = $cveEtapaProcesal;
    }

    public function getIdReferencia() {
        return $this->idReferencia;
    }

    public function setIdReferencia($idReferencia) {
        $this->idReferencia = $idReferencia;
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

    public function getFechaEnvio() {
        return $this->fechaEnvio;
    }

    public function setFechaEnvio($fechaEnvio) {
        $this->fechaEnvio = $fechaEnvio;
    }

    public function getCveTipoCarpeta() {
        return $this->cveTipoCarpeta;
    }

    public function setCveTipoCarpeta($cveTipoCarpeta) {
        $this->cveTipoCarpeta = $cveTipoCarpeta;
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

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getCarpetaInv() {
        return $this->carpetaInv;
    }

    public function setCarpetaInv($carpetaInv) {
        $this->carpetaInv = $carpetaInv;
    }

    public function getNuc() {
        return $this->nuc;
    }

    public function setNuc($nuc) {
        $this->nuc = $nuc;
    }

    public function getCveUsuario() {
        return $this->cveUsuario;
    }

    public function setCveUsuario($cveUsuario) {
        $this->cveUsuario = $cveUsuario;
    }

    public function getCveAdscripcionSolicita() {
        return $this->cveAdscripcionSolicita;
    }

    public function setCveAdscripcionSolicita($cveAdscripcionSolicita) {
        $this->cveAdscripcionSolicita = $cveAdscripcionSolicita;
    }

    public function getMismoJuzgador() {
        return $this->mismoJuzgador;
    }

    public function setMismoJuzgador($mismoJuzgador) {
        $this->mismoJuzgador = $mismoJuzgador;
    }

    function getTribunal() {
        return $this->tribunal;
    }

    function setTribunal($tribunal) {
        $this->tribunal = $tribunal;
    }

    public function getCveEstatusSolicitud() {
        return $this->cveEstatusSolicitud;
    }

    public function setCveEstatusSolicitud($cveEstatusSolicitud) {
        $this->cveEstatusSolicitud = $cveEstatusSolicitud;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function getNumImputados() {
        return $this->numImputados;
    }

    public function setNumImputados($numImputados) {
        $this->numImputados = $numImputados;
    }

    public function getNumDelitos() {
        return $this->numDelitos;
    }

    public function setNumDelitos($numDelitos) {
        $this->numDelitos = $numDelitos;
    }

    public function getNumOfendidos() {
        return $this->numOfendidos;
    }

    public function setNumOfendidos($numOfendidos) {
        $this->numOfendidos = $numOfendidos;
    }

    public function getCveNaturaleza() {
        return $this->cveNaturaleza;
    }

    public function setCveNaturaleza($cveNaturaleza) {
        $this->cveNaturaleza = $cveNaturaleza;
    }

    public function getCveTipoAudiencia() {
        return $this->cveTipoAudiencia;
    }

    public function setCveTipoAudiencia($cveTipoAudiencia) {
        $this->cveTipoAudiencia = $cveTipoAudiencia;
    }

    public function toString() {
        return array("idSolicitudAudiencia" => $this->idSolicitudAudiencia,
            "cveCatAudiencia" => $this->cveCatAudiencia,
            "cveJuzgadoDesahoga" => $this->cveJuzgadoDesahoga,
            "cveJuzgado" => $this->cveJuzgado,
            "cveConsignacion" => $this->cveConsignacion,
            "cveEtapaProcesal" => $this->cveEtapaProcesal,
            "idReferencia" => $this->idReferencia,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "fechaEnvio" => $this->fechaEnvio,
            "cveTipoCarpeta" => $this->cveTipoCarpeta,
            "numero" => $this->numero,
            "anio" => $this->anio,
            "activo" => $this->activo,
            "carpetaInv" => $this->carpetaInv,
            "nuc" => $this->nuc,
            "cveUsuario" => $this->cveUsuario,
            "cveAdscripcionSolicita" => $this->cveAdscripcionSolicita,
            "mismoJuzgador" => $this->mismoJuzgador,
            "tribunal" => $this->tribunal,
            "cveEstatusSolicitud" => $this->cveEstatusSolicitud,
            "observaciones" => $this->observaciones,
            "numImputados" => $this->numImputados,
            "numDelitos" => $this->numDelitos,
            "numOfendidos" => $this->numOfendidos,
            "cveNaturaleza" => $this->cveNaturaleza,
            "cveTipoAudiencia" => $this->cveTipoAudiencia);
    }

}

?>