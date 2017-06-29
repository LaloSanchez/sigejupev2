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

class ActuacionesDTO {

    private $idActuacion;
    private $numActuacion;
    private $aniActuacion;
    private $cveTipoActuacion;
    private $idReferencia;
    private $numero;
    private $anio;
    private $noFojas;
    private $cveTipoCarpeta;
    private $cveJuzgado;
    private $Sintesis;
    private $destinatario;
    private $observaciones;
    private $cveUsuario;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveEstado;
    private $cveJuzgadoDestino;
    private $juzgadoDestino;
    private $cveTipoNotificacion;
    private $cveTipoSentencia;
    private $cveTipoAuto;
    private $cveTipoResolucion;
    private $idJuzgadorAcuerdo;
    private $cveTipoOrden;
    private $cveTipoProcedimiento;
    private $fechaSentencia;
    private $fechaEjecutoria;
    private $secreto;
    private $fechaDevolucion;
    private $diligencia;

    public function getIdActuacion() {
        return $this->idActuacion;
    }

    public function setIdActuacion($idActuacion) {
        $this->idActuacion = $idActuacion;
    }

    public function getNumActuacion() {
        return $this->numActuacion;
    }

    public function setNumActuacion($numActuacion) {
        $this->numActuacion = $numActuacion;
    }

    public function getAniActuacion() {
        return $this->aniActuacion;
    }

    public function setAniActuacion($aniActuacion) {
        $this->aniActuacion = $aniActuacion;
    }

    public function getCveTipoActuacion() {
        return $this->cveTipoActuacion;
    }

    public function setCveTipoActuacion($cveTipoActuacion) {
        $this->cveTipoActuacion = $cveTipoActuacion;
    }

    public function getIdReferencia() {
        return $this->idReferencia;
    }

    public function setIdReferencia($idReferencia) {
        $this->idReferencia = $idReferencia;
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

    public function getNoFojas() {
        return $this->noFojas;
    }

    public function setNoFojas($noFojas) {
        $this->noFojas = $noFojas;
    }

    public function getCveTipoCarpeta() {
        return $this->cveTipoCarpeta;
    }

    public function setCveTipoCarpeta($cveTipoCarpeta) {
        $this->cveTipoCarpeta = $cveTipoCarpeta;
    }

    public function getCveJuzgado() {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado) {
        $this->cveJuzgado = $cveJuzgado;
    }

    public function getSintesis() {
        return $this->Sintesis;
    }

    public function setSintesis($Sintesis) {
        $this->Sintesis = $Sintesis;
    }

    function getDestinatario() {
        return $this->destinatario;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function getCveUsuario() {
        return $this->cveUsuario;
    }

    public function setCveUsuario($cveUsuario) {
        $this->cveUsuario = $cveUsuario;
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

    public function getCveEstado() {
        return $this->cveEstado;
    }

    public function setCveEstado($cveEstado) {
        $this->cveEstado = $cveEstado;
    }

    public function getCveJuzgadoDestino() {
        return $this->cveJuzgadoDestino;
    }

    public function setCveJuzgadoDestino($cveJuzgadoDestino) {
        $this->cveJuzgadoDestino = $cveJuzgadoDestino;
    }

    public function getJuzgadoDestino() {
        return $this->juzgadoDestino;
    }

    public function setJuzgadoDestino($juzgadoDestino) {
        $this->juzgadoDestino = $juzgadoDestino;
    }

    public function getCveTipoNotificacion() {
        return $this->cveTipoNotificacion;
    }

    public function setCveTipoNotificacion($cveTipoNotificacion) {
        $this->cveTipoNotificacion = $cveTipoNotificacion;
    }

    public function getCveTipoSentencia() {
        return $this->cveTipoSentencia;
    }

    public function setCveTipoSentencia($cveTipoSentencia) {
        $this->cveTipoSentencia = $cveTipoSentencia;
    }

    public function getCveTipoAuto() {
        return $this->cveTipoAuto;
    }

    public function setCveTipoAuto($cveTipoAuto) {
        $this->cveTipoAuto = $cveTipoAuto;
    }

    public function getCveTipoResolucion() {
        return $this->cveTipoResolucion;
    }

    public function setCveTipoResolucion($cveTipoResolucion) {
        $this->cveTipoResolucion = $cveTipoResolucion;
    }

    public function getIdJuzgadorAcuerdo() {
        return $this->idJuzgadorAcuerdo;
    }

    public function setIdJuzgadorAcuerdo($idJuzgadorAcuerdo) {
        $this->idJuzgadorAcuerdo = $idJuzgadorAcuerdo;
    }

    public function getCveTipoOrden() {
        return $this->cveTipoOrden;
    }

    public function setCveTipoOrden($cveTipoOrden) {
        $this->cveTipoOrden = $cveTipoOrden;
    }

    public function getCveTipoProcedimiento() {
        return $this->cveTipoProcedimiento;
    }

    public function setCveTipoProcedimiento($cveTipoProcedimiento) {
        $this->cveTipoProcedimiento = $cveTipoProcedimiento;
    }

    public function getFechaSentencia() {
        return $this->fechaSentencia;
    }

    public function setFechaSentencia($fechaSentencia) {
        $this->fechaSentencia = $fechaSentencia;
    }

    public function getFechaEjecutoria() {
        return $this->fechaEjecutoria;
    }

    public function setFechaEjecutoria($fechaEjecutoria) {
        $this->fechaEjecutoria = $fechaEjecutoria;
    }

    public function setSecreto($secreto) {
        $this->secreto = $secreto;
    }

    public function getSecreto() {
        return $this->secreto;
    }

    function getFechaDevolucion() {
        return $this->fechaDevolucion;
    }

    function setFechaDevolucion($fechaDevolucion) {
        $this->fechaDevolucion = $fechaDevolucion;
    }

    function getDiligencia() {
        return $this->diligencia;
    }

    function setDiligencia($diligencia) {
        $this->diligencia = $diligencia;
    }

    public function toString() {
        return array("idActuacion" => $this->idActuacion,
            "numActuacion" => $this->numActuacion,
            "aniActuacion" => $this->aniActuacion,
            "cveTipoActuacion" => $this->cveTipoActuacion,
            "idReferencia" => $this->idReferencia,
            "numero" => $this->numero,
            "anio" => $this->anio,
            "noFojas" => $this->noFojas,
            "cveTipoCarpeta" => $this->cveTipoCarpeta,
            "cveJuzgado" => $this->cveJuzgado,
            "Sintesis" => $this->Sintesis,
            "destinatario" => $this->destinatario,
            "observaciones" => $this->observaciones,
            "cveUsuario" => $this->cveUsuario,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "cveEstado" => $this->cveEstado,
            "cveJuzgadoDestino" => $this->cveJuzgadoDestino,
            "juzgadoDestino" => $this->juzgadoDestino,
            "cveTipoNotificacion" => $this->cveTipoNotificacion,
            "cveTipoSentencia" => $this->cveTipoSentencia,
            "cveTipoAuto" => $this->cveTipoAuto,
            "cveTipoResolucion" => $this->cveTipoResolucion,
            "idJuzgadorAcuerdo" => $this->idJuzgadorAcuerdo,
            "cveTipoOrden" => $this->cveTipoOrden,
            "cveTipoProcedimiento" => $this->cveTipoProcedimiento,
            "fechaSentencia" => $this->fechaSentencia,
            "fechaEjecutoria" => $this->fechaEjecutoria,
            "secreto" => $this->secreto,
            "fechaDevolucion" => $this->fechaDevolucion,
            "diligencia" => $this->diligencia);
    }

}

?>
