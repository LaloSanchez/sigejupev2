<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DAOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 *///actualizacion 
//ini_set("memory_limit", "1024M");
//ini_set("error_log", dirname(__FILE__) . "/../../logs/ACTUACIONESDAO.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/logger/Logger.Class.php");

class ActuacionesDAO {

// se agrega numero de fojas
    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
        $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertActuaciones($actuacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblactuaciones(";
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="numActuacion";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="aniActuacion";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="idReferencia";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="numero";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="anio";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="noFojas";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="Sintesis";
            if (($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getDestinatario() != "") {
            $sql.="destinatario";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="cveUsuario";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="activo";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="cveEstado";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="cveJuzgadoDestino";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="juzgadoDestino";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="cveTipoNotificacion";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="cveTipoSentencia";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="cveTipoAuto";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="cveTipoResolucion";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="idJuzgadorAcuerdo";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="cveTipoOrden";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="cveTipoProcedimiento";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="fechaSentencia";
            if (($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="fechaEjecutoria";
            if (($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSecreto() != "") {
            $sql.="secreto";
            if (($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaDevolucion() != "") {
            $sql.="fechaDevolucion";
            if (($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getDiligencia() != "") {
            $sql.="diligencia";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="'" . $actuacionesDto->getIdActuacion() . "'";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="'" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="'" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="'" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="'" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="'" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="'" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="'" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="'" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getDestinatario() != "") {
            $sql.="'" . $actuacionesDto->getDestinatario() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="'" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="'" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="'" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="'" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="'" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="'" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="'" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="'" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="'" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="'" . $actuacionesDto->getFechaEjecutoria() . "'";
            if (($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSecreto() != "") {
            $sql.="'" . $actuacionesDto->getSecreto() . "'";
            if (($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaDevolucion() != "") {
            $sql.="'" . $actuacionesDto->getFechaDevolucion() . "'";
            if (($actuacionesDto->getDiligencia() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getDiligencia() != "") {
            $sql.="'" . $actuacionesDto->getDiligencia() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
//        $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
//                $logger->w_onError("**********MAS DE 1000");
//                $logger->w_onError("QUERY NORMAL:" . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ActuacionesDTO();
            $tmp->setidActuacion($this->_proveedor->lastID());
            $tmp = $this->selectActuaciones($tmp, $this->_proveedor, "", null, null);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updateActuaciones($actuacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblactuaciones SET ";
//        if ($actuacionesDto->getIdActuacion() != "") {
//            $sql.="idActuacion='" . $actuacionesDto->getIdActuacion() . "'";
//            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
//                $sql.=",";
//            }
//        }
//        if ($actuacionesDto->getObservaciones() != "") {
        $sql.="observaciones='" . $actuacionesDto->getObservaciones() . "'";
        if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
            $sql.=",";
        }
//        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getDestinatario() != "") {
            $sql.="destinatario='" . $actuacionesDto->getDestinatario() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
            if (($actuacionesDto->getSecreto() != "")) {
                $sql.=",";
            }
        }
        if ($actuacionesDto->getSecreto() != "") {
            $sql.="secreto='" . $actuacionesDto->getSecreto() . "'";
        }
        $sql = trim($sql, ",");
        $sql.=" WHERE idActuacion='" . $actuacionesDto->getIdActuacion() . "'";
//        print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ActuacionesDTO();
            $tmp->setidActuacion($actuacionesDto->getIdActuacion());
            $tmp = $this->selectActuaciones($tmp, $this->_proveedor, "", null, null);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function deleteActuaciones($actuacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblactuaciones  WHERE idActuacion='" . $actuacionesDto->getIdActuacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

//    public function selectActuaciones($actuacionesDto, $orden = "", $param = null, $proveedor = null, $fields = null) {
    public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idActuacion,numActuacion,aniActuacion,cveTipoActuacion,idReferencia,numero,anio,cveTipoCarpeta,cveJuzgado,Sintesis,destinatario,observaciones,cveUsuario,activo,fechaRegistro,fechaActualizacion,cveEstado,cveJuzgadoDestino,juzgadoDestino,cveTipoNotificacion,cveTipoSentencia,cveTipoAuto,cveTipoResolucion,cveTipoOrden,cveTipoProcedimiento,fechaSentencia,fechaEjecutoria,noFojas,idJuzgadorAcuerdo,secreto, fechaDevolucion, diligencia ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblactuaciones";
        if (($actuacionesDto->getIdActuacion() != "") || ($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || (($actuacionesDto->getCveTipoCarpeta() != "") && ($actuacionesDto->getCveTipoCarpeta() != 0) ) || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || (($actuacionesDto->getCveTipoNotificacion() != "") && ($actuacionesDto->getCveTipoNotificacion() != 0) ) || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || (($actuacionesDto->getCveTipoResolucion() != "") && ($actuacionesDto->getCveTipoResolucion() != 0) ) || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
            $sql.=" WHERE ";
        }
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion = '" . $actuacionesDto->getIdActuacion() . "' ";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if (strstr($actuacionesDto->getCveTipoActuacion(), ',')) { // busca si el tipo de actuacion contiene una (,) realizar un in recibe un string = 1,2,3
            $sql.="cveTipoActuacion in (" . $actuacionesDto->getCveTipoActuacion() . ")";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        } else if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getDestinatario() != "") {
            $sql.="destinatario='" . $actuacionesDto->getDestinatario() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="observaciones='" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "" ) || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "") || ($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
            if (($actuacionesDto->getSecreto() != "") || ($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSecreto() != "") {
            $sql.="secreto='" . $actuacionesDto->getSecreto() . "'";
            if (($actuacionesDto->getFechaDevolucion() != "") || ($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaDevolucion() != "") {
            $sql.="secreto='" . $actuacionesDto->getFechaDevolucion() . "'";
            if (($actuacionesDto->getDiligencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getDiligencia() != "") {
            $sql.="secreto='" . $actuacionesDto->getDiligencia() . "'";
        }
        $inicial = "";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
//        error_log("sql => ".$sql);
//        echo $sql;
//        $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
//                $logger->w_onError("**********MAS DE 1000");
//                $logger->w_onError("QUERY NORMAL:" . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                try {
                    if ($this->_proveedor->rows($this->_proveedor->stmt) > 1000) {
                        throw new Exception("query malo", 10001);
                    }
                } catch (Exception $e) {
                    $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
                    $logger->w_onError("**********MAS DE 1000");
                    $logger->w_onError("QUERY NORMAL:" . $sql);
                    $logger->w_onError("Tracer:" . $e->getTraceAsString());
                }

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        $tmp[$contador] = new ActuacionesDTO();
                        $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        $tmp[$contador]->setNumActuacion($row["numActuacion"]);
                        $tmp[$contador]->setAniActuacion($row["aniActuacion"]);
                        $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setNoFojas($row["noFojas"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setSintesis(utf8_encode($row["Sintesis"]));   ////para permitir acentos
                        $tmp[$contador]->setDestinatario(utf8_encode($row["destinatario"]));   ////para permitir acentos
                        $tmp[$contador]->setObservaciones(utf8_encode($row["observaciones"]));
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveEstado($row["cveEstado"]);
                        $tmp[$contador]->setCveJuzgadoDestino($row["cveJuzgadoDestino"]);
                        $tmp[$contador]->setJuzgadoDestino($row["juzgadoDestino"]);
                        $tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
                        $tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
                        $tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
                        $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                        $tmp[$contador]->setIdJuzgadorAcuerdo($row["idJuzgadorAcuerdo"]);
                        $tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
                        $tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
                        $tmp[$contador]->setFechaSentencia($row["fechaSentencia"]);
                        $tmp[$contador]->setFechaEjecutoria($row["fechaEjecutoria"]);
                        $tmp[$contador]->setSecreto($row["secreto"]);
                        $tmp[$contador]->setFechaDevolucion($row["fechaDevolucion"]);
                        $tmp[$contador]->setDiligencia($row["diligencia"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            //var_dump($fieldInfo);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectActuaciones1($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idActuacion,numActuacion,aniActuacion,cveTipoActuacion,idReferencia,numero,anio,cveTipoCarpeta,cveJuzgado,Sintesis,observaciones,cveUsuario,activo,fechaRegistro,fechaActualizacion,cveEstado,cveJuzgadoDestino,juzgadoDestino,cveTipoNotificacion,cveTipoSentencia,cveTipoAuto,cveTipoResolucion,cveTipoOrden,cveTipoProcedimiento,fechaSentencia,fechaEjecutoria,noFojas,idJuzgadorAcuerdo ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblactuaciones";
        if (($actuacionesDto->getIdActuacion() != "") || ($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || (($actuacionesDto->getCveTipoCarpeta() != "") && ($actuacionesDto->getCveTipoCarpeta() != 0) ) || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || (($actuacionesDto->getCveTipoNotificacion() != "") && ($actuacionesDto->getCveTipoNotificacion() != 0) ) || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || (($actuacionesDto->getCveTipoResolucion() != "") && ($actuacionesDto->getCveTipoResolucion() != 0) ) || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
            $sql.=" WHERE ";
        }
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion = '" . $actuacionesDto->getIdActuacion() . "' ";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if (strstr($actuacionesDto->getCveTipoActuacion(), ',')) { // busca si el tipo de actuacion contiene una (,) realizar un in recibe un string = 1,2,3
            $sql.="cveTipoActuacion in (" . $actuacionesDto->getCveTipoActuacion() . ")";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        } else if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="observaciones='" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
        }
        $inicial = "";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
//        error_log("sql => ".$sql);
//        echo $sql;
//        $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
//                $logger->w_onError("**********MAS DE 1000");
//                $logger->w_onError("QUERY NORMAL:" . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                try {
                    if ($this->_proveedor->rows($this->_proveedor->stmt) > 1000) {
                        throw new Exception("query malo", 10001);
                    }
                } catch (Exception $e) {
                    $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
                    $logger->w_onError("**********MAS DE 1000");
                    $logger->w_onError("QUERY NORMAL:" . $sql);
                    $logger->w_onError("Tracer:" . $e->getTraceAsString());
                }

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        $tmp[$contador] = new ActuacionesDTO();
                        $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        $tmp[$contador]->setNumActuacion($row["numActuacion"]);
                        $tmp[$contador]->setAniActuacion($row["aniActuacion"]);
                        $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setNoFojas($row["noFojas"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setSintesis(utf8_encode($row["Sintesis"]));   ////para permitir acentos
                        $tmp[$contador]->setObservaciones(utf8_encode($row["observaciones"]));
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveEstado($row["cveEstado"]);
                        $tmp[$contador]->setCveJuzgadoDestino($row["cveJuzgadoDestino"]);
                        $tmp[$contador]->setJuzgadoDestino($row["juzgadoDestino"]);
                        $tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
                        $tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
                        $tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
                        $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                        $tmp[$contador]->setIdJuzgadorAcuerdo($row["idJuzgadorAcuerdo"]);
                        $tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
                        $tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
                        $tmp[$contador]->setFechaSentencia($row["fechaSentencia"]);
                        $tmp[$contador]->setFechaEjecutoria($row["fechaEjecutoria"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            //var_dump($fieldInfo);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);
//        print_r($tmp);
        return $tmp;
    }

    public function selectActuacionesLibro($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idActuacion,numActuacion,aniActuacion,cveTipoActuacion,idReferencia,numero,anio,cveTipoCarpeta,cveJuzgado,Sintesis,observaciones,cveUsuario,activo,fechaRegistro,fechaActualizacion,cveEstado,cveJuzgadoDestino,juzgadoDestino,cveTipoNotificacion,cveTipoSentencia,cveTipoAuto,cveTipoResolucion,cveTipoOrden,cveTipoProcedimiento,fechaSentencia,fechaEjecutoria,noFojas,idJuzgadorAcuerdo ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblactuaciones";
        if (($actuacionesDto->getIdActuacion() != "") || ($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || (($actuacionesDto->getCveTipoCarpeta() != "") && ($actuacionesDto->getCveTipoCarpeta() != 0) ) || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || (($actuacionesDto->getCveTipoNotificacion() != "") && ($actuacionesDto->getCveTipoNotificacion() != 0) ) || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || (($actuacionesDto->getCveTipoResolucion() != "") && ($actuacionesDto->getCveTipoResolucion() != 0) ) || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
            $sql.=" WHERE ";
        }
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion in( " . $actuacionesDto->getIdActuacion() . ")";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if (strstr($actuacionesDto->getCveTipoActuacion(), ',')) { // busca si el tipo de actuacion contiene una (,) realizar un in recibe un string = 1,2,3
            $sql.="cveTipoActuacion in (" . $actuacionesDto->getCveTipoActuacion() . ")";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        } else if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="observaciones='" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
        }
        $inicial = "";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                if ($param != "" || $param != null) {
                    $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }

        error_log("sql => " . $sql);
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        $tmp[$contador] = new ActuacionesDTO();
                        $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        $tmp[$contador]->setNumActuacion($row["numActuacion"]);
                        $tmp[$contador]->setAniActuacion($row["aniActuacion"]);
                        $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setNoFojas($row["noFojas"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setSintesis(utf8_encode($row["Sintesis"]));   ////para permitir acentos
                        $tmp[$contador]->setObservaciones(utf8_encode($row["observaciones"]));
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveEstado($row["cveEstado"]);
                        $tmp[$contador]->setCveJuzgadoDestino($row["cveJuzgadoDestino"]);
                        $tmp[$contador]->setJuzgadoDestino($row["juzgadoDestino"]);
                        $tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
                        $tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
                        $tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
                        $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                        $tmp[$contador]->setIdJuzgadorAcuerdo($row["idJuzgadorAcuerdo"]);
                        $tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
                        $tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
                        $tmp[$contador]->setFechaSentencia($row["fechaSentencia"]);
                        $tmp[$contador]->setFechaEjecutoria($row["fechaEjecutoria"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            //var_dump($fieldInfo);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectActuacionesPorEstatus($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null, $estatusActuacion = null, $sinRelacion = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " a.idActuacion,a.numActuacion,a.aniActuacion,a.cveTipoActuacion,a.idReferencia,a.numero,a.anio,a.cveTipoCarpeta,a.cveJuzgado,a.Sintesis,a.destinatario,a.observaciones,a.cveUsuario,a.activo,a.fechaRegistro,a.fechaActualizacion,a.cveEstado,a.cveJuzgadoDestino,a.juzgadoDestino,a.cveTipoNotificacion,a.cveTipoSentencia,a.cveTipoAuto,a.cveTipoResolucion,a.cveTipoOrden,a.cveTipoProcedimiento,a.fechaSentencia,a.fechaEjecutoria,a.noFojas,a.idJuzgadorAcuerdo ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblactuaciones a left join tblactuacionesestatus ae on (a.idActuacion = ae.idActuacion and ae.activo = 'S') ";
        if (($actuacionesDto->getIdActuacion() != "") || ($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || (($actuacionesDto->getCveTipoCarpeta() != "") && ($actuacionesDto->getCveTipoCarpeta() != 0) ) || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || (($actuacionesDto->getCveTipoNotificacion() != "") && ($actuacionesDto->getCveTipoNotificacion() != 0) ) || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || (($actuacionesDto->getCveTipoResolucion() != "") && ($actuacionesDto->getCveTipoResolucion() != 0) ) || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
            $sql.=" WHERE ";
        }
//      var_dump($estatusActuacion);
        if ($estatusActuacion != null && $estatusActuacion != 0 && $estatusActuacion != "0") {
            $sql.=" ae.cveEstatus = " . $estatusActuacion . " AND ";
        }
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="a.idActuacion  = '" . $actuacionesDto->getIdActuacion() . "' ";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="a.numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="a.aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if (strstr($actuacionesDto->getCveTipoActuacion(), ',')) { // busca si el tipo de actuacion contiene una (,) realizar un in recibe un string = 1,2,3
            $sql.="a.cveTipoActuacion in (" . $actuacionesDto->getCveTipoActuacion() . ")";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        } else if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="a.cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="a.idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="a.numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="a.anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="a.noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="a.cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="a.cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="a.Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getDestinatario() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getDestinatario() != "") {
            $sql.="a.destinatario='" . $actuacionesDto->getDestinatario() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="a.observaciones='" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="a.cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="a.activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="a.fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="a.fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="a.cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="a.cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="a.juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="a.cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="a.cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="a.cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="a.cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="a.idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="a.cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="a.cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="a.fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="a.fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
        }
        $inicial = "";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and a.fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and a.fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and a.fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and a.fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and a.fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and a.fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if($sinRelacion == "true"){
            $sql .= "AND idReferencia is null ";
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
       
        error_log("sql => " . $sql);
//      if($fields != NULL)
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                try {
                    if ($this->_proveedor->rows($this->_proveedor->stmt) > 1000) {
                        throw new Exception("query malo", 10001);
                    }
                } catch (Exception $e) {
                    $logger = new Logger("/../../logs/", "ACTUACIONESDAO");
                    $logger->w_onError("**********MAS DE 1000");
                    $logger->w_onError("QUERY ESTATUS:" . $sql);
                    $logger->w_onError("Tracer:" . $e->getTraceAsString());
                }

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        $tmp[$contador] = new ActuacionesDTO();
                        $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        $tmp[$contador]->setNumActuacion($row["numActuacion"]);
                        $tmp[$contador]->setAniActuacion($row["aniActuacion"]);
                        $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setNoFojas($row["noFojas"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setSintesis(utf8_encode($row["Sintesis"]));   ////para permitir acentos
                        $tmp[$contador]->setDestinatario(utf8_encode($row["destinatario"]));   ////para permitir acentos
                        $tmp[$contador]->setObservaciones(utf8_encode($row["observaciones"]));
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveEstado($row["cveEstado"]);
                        $tmp[$contador]->setCveJuzgadoDestino($row["cveJuzgadoDestino"]);
                        $tmp[$contador]->setJuzgadoDestino($row["juzgadoDestino"]);
                        $tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
                        $tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
                        $tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
                        $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                        $tmp[$contador]->setIdJuzgadorAcuerdo($row["idJuzgadorAcuerdo"]);
                        $tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
                        $tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
                        $tmp[$contador]->setFechaSentencia($row["fechaSentencia"]);
                        $tmp[$contador]->setFechaEjecutoria($row["fechaEjecutoria"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            //var_dump($fieldInfo);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectActuacionesPorEstatusRadicacion($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null, $estatusActuacion = null, $cveTipoEstatusRadicacion = null) {
        $tmp = ""; //
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " a.idActuacion,a.numActuacion,a.aniActuacion,a.cveTipoActuacion,a.idReferencia,a.numero,a.anio,a.cveTipoCarpeta,a.cveJuzgado,a.Sintesis,a.observaciones,a.cveUsuario,a.activo,a.fechaRegistro,a.fechaActualizacion,a.cveEstado,a.cveJuzgadoDestino,a.juzgadoDestino,a.cveTipoNotificacion,a.cveTipoSentencia,a.cveTipoAuto,a.cveTipoResolucion,a.cveTipoOrden,a.cveTipoProcedimiento,a.fechaSentencia,a.fechaEjecutoria,a.noFojas,a.idJuzgadorAcuerdo ";
        } else {
            $sql .= $fields;
        }
        if ($cveTipoEstatusRadicacion != "" && $cveTipoEstatusRadicacion != 0 && $cveTipoEstatusRadicacion != "0") {
            $sql .=",aer.cveTipoEstatusRadicacion,ter.desTipoEstatusRadicacion ";
        }
        $sql .= "FROM tblactuaciones a inner join tblactuacionesestatus ae on (a.idActuacion = ae.idActuacion and ae.activo = 'S') ";
        if ($cveTipoEstatusRadicacion != "" && $cveTipoEstatusRadicacion != 0 && $cveTipoEstatusRadicacion != "0") {
            $sql .=" INNER JOIN tblactuacionesestatusrad aer ON a.idActuacion=aer.idActuacion
            INNER JOIN tbltiposestatusradicacion ter ON aer.cveTipoEstatusRadicacion=ter.cveTipoEstatusRadicacion";
        }
        if (($actuacionesDto->getIdActuacion() != "") || ($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || (($actuacionesDto->getCveTipoCarpeta() != "") && ($actuacionesDto->getCveTipoCarpeta() != 0) ) || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || (($actuacionesDto->getCveTipoNotificacion() != "") && ($actuacionesDto->getCveTipoNotificacion() != 0) ) || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || (($actuacionesDto->getCveTipoResolucion() != "") && ($actuacionesDto->getCveTipoResolucion() != 0) ) || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
            $sql.=" WHERE ";
        }
        if ($cveTipoEstatusRadicacion != "" && $cveTipoEstatusRadicacion != 0 && $cveTipoEstatusRadicacion != "0") {
            $sql.=" aer.activo='S' AND ter.activo='S' AND ";
        }
//      var_dump($estatusActuacion);
        if ($estatusActuacion != null && $estatusActuacion != 0 && $estatusActuacion != "0") {
            $sql.=" ae.cveEstatus = " . $estatusActuacion . " AND ";
        }
        if ($cveTipoEstatusRadicacion != "" && $cveTipoEstatusRadicacion != 0 && $cveTipoEstatusRadicacion != "0") {
            $sql.=" aer.cveTipoEstatusRadicacion=" . $cveTipoEstatusRadicacion . " AND ";
        }
        if ($actuacionesDto->getIdActuacion() != "") {
            $sql.="a.idActuacion in( " . $actuacionesDto->getIdActuacion() . ")";
            if (($actuacionesDto->getNumActuacion() != "") || ($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumActuacion() != "") {
            $sql.="a.numActuacion='" . $actuacionesDto->getNumActuacion() . "'";
            if (($actuacionesDto->getAniActuacion() != "") || ($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAniActuacion() != "") {
            $sql.="a.aniActuacion='" . $actuacionesDto->getAniActuacion() . "'";
            if (($actuacionesDto->getCveTipoActuacion() != "") || ($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if (strstr($actuacionesDto->getCveTipoActuacion(), ',')) { // busca si el tipo de actuacion contiene una (,) realizar un in recibe un string = 1,2,3
            $sql.="a.cveTipoActuacion in (" . $actuacionesDto->getCveTipoActuacion() . ")";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        } else if ($actuacionesDto->getCveTipoActuacion() != "") {
            $sql.="a.cveTipoActuacion='" . $actuacionesDto->getCveTipoActuacion() . "'";
            if (($actuacionesDto->getIdReferencia() != "") || ($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdReferencia() != "") {
            $sql.="a.idReferencia='" . $actuacionesDto->getIdReferencia() . "'";
            if (($actuacionesDto->getNumero() != "") || ($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNumero() != "") {
            $sql.="a.numero='" . $actuacionesDto->getNumero() . "'";
            if (($actuacionesDto->getAnio() != "") || ($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getAnio() != "") {
            $sql.="a.anio='" . $actuacionesDto->getAnio() . "'";
            if (($actuacionesDto->getNoFojas() != "") || ($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getNoFojas() != "") {
            $sql.="a.noFojas='" . $actuacionesDto->getNoFojas() . "'";
            if (($actuacionesDto->getCveTipoCarpeta() != "") || ($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoCarpeta() != "") {
            $sql.="a.cveTipoCarpeta='" . $actuacionesDto->getCveTipoCarpeta() . "'";
            if (($actuacionesDto->getCveJuzgado() != "") || ($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgado() != "") {
            $sql.="a.cveJuzgado='" . $actuacionesDto->getCveJuzgado() . "'";
            if (($actuacionesDto->getSintesis() != "") || ($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getSintesis() != "") {
            $sql.="a.Sintesis='" . $actuacionesDto->getSintesis() . "'";
            if (($actuacionesDto->getObservaciones() != "") || ($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getObservaciones() != "") {
            $sql.="a.observaciones='" . $actuacionesDto->getObservaciones() . "'";
            if (($actuacionesDto->getCveUsuario() != "") || ($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveUsuario() != "") {
            $sql.="a.cveUsuario='" . $actuacionesDto->getCveUsuario() . "'";
            if (($actuacionesDto->getActivo() != "") || ($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getActivo() != "") {
            $sql.="a.activo='" . $actuacionesDto->getActivo() . "'";
            if (($actuacionesDto->getFechaRegistro() != "") || ($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaRegistro() != "") {
            $sql.="a.fechaRegistro='" . $actuacionesDto->getFechaRegistro() . "'";
            if (($actuacionesDto->getFechaActualizacion() != "") || ($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaActualizacion() != "") {
            $sql.="a.fechaActualizacion='" . $actuacionesDto->getFechaActualizacion() . "'";
            if (($actuacionesDto->getCveEstado() != "") || ($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveEstado() != "") {
            $sql.="a.cveEstado='" . $actuacionesDto->getCveEstado() . "'";
            if (($actuacionesDto->getCveJuzgadoDestino() != "") || ($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveJuzgadoDestino() != "") {
            $sql.="a.cveJuzgadoDestino='" . $actuacionesDto->getCveJuzgadoDestino() . "'";
            if (($actuacionesDto->getJuzgadoDestino() != "") || ($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getJuzgadoDestino() != "") {
            $sql.="a.juzgadoDestino='" . $actuacionesDto->getJuzgadoDestino() . "'";
            if (($actuacionesDto->getCveTipoNotificacion() != "") || ($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoNotificacion() != "") {
            $sql.="a.cveTipoNotificacion='" . $actuacionesDto->getCveTipoNotificacion() . "'";
            if (($actuacionesDto->getCveTipoSentencia() != "") || ($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoSentencia() != "") {
            $sql.="a.cveTipoSentencia='" . $actuacionesDto->getCveTipoSentencia() . "'";
            if (($actuacionesDto->getCveTipoAuto() != "") || ($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoAuto() != "") {
            $sql.="a.cveTipoAuto='" . $actuacionesDto->getCveTipoAuto() . "'";
            if (($actuacionesDto->getCveTipoResolucion() != "") || ($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoResolucion() != "") {
            $sql.="a.cveTipoResolucion='" . $actuacionesDto->getCveTipoResolucion() . "'";
            if (($actuacionesDto->getIdJuzgadorAcuerdo() != "") || ($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getIdJuzgadorAcuerdo() != "") {
            $sql.="a.idJuzgadorAcuerdo='" . $actuacionesDto->getIdJuzgadorAcuerdo() . "'";
            if (($actuacionesDto->getCveTipoOrden() != "") || ($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoOrden() != "") {
            $sql.="a.cveTipoOrden='" . $actuacionesDto->getCveTipoOrden() . "'";
            if (($actuacionesDto->getCveTipoProcedimiento() != "") || ($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getCveTipoProcedimiento() != "") {
            $sql.="a.cveTipoProcedimiento='" . $actuacionesDto->getCveTipoProcedimiento() . "'";
            if (($actuacionesDto->getFechaSentencia() != "") || ($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaSentencia() != "") {
            $sql.="a.fechaSentencia='" . $actuacionesDto->getFechaSentencia() . "'";
            if (($actuacionesDto->getFechaEjecutoria() != "")) {
                $sql.=" AND ";
            }
        }
        if ($actuacionesDto->getFechaEjecutoria() != "") {
            $sql.="a.fechaEjecutoria='" . $actuacionesDto->getFechaEjecutoria() . "'";
        }
        $inicial = "";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and a.fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and a.fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and a.fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and a.fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and a.fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and a.fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
        error_log("sql => " . $sql);
//      if($fields != NULL)
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        $tmp[$contador] = new ActuacionesDTO();
                        $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        $tmp[$contador]->setNumActuacion($row["numActuacion"]);
                        $tmp[$contador]->setAniActuacion($row["aniActuacion"]);
                        $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setNoFojas($row["noFojas"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setSintesis(utf8_encode($row["Sintesis"]));   ////para permitir acentos
                        $tmp[$contador]->setObservaciones(utf8_encode($row["observaciones"]));
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveEstado($row["cveEstado"]);
                        $tmp[$contador]->setCveJuzgadoDestino($row["cveJuzgadoDestino"]);
                        $tmp[$contador]->setJuzgadoDestino($row["juzgadoDestino"]);
                        $tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
                        $tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
                        $tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
                        $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                        $tmp[$contador]->setIdJuzgadorAcuerdo($row["idJuzgadorAcuerdo"]);
                        $tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
                        $tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
                        $tmp[$contador]->setFechaSentencia($row["fechaSentencia"]);
                        $tmp[$contador]->setFechaEjecutoria($row["fechaEjecutoria"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            //var_dump($fieldInfo);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //echo $sql;
        error_log($sql);
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>
