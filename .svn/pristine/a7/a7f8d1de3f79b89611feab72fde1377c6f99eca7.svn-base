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
 */

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SolicitudesmuestrasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSolicitudesmuestras($solicitudesmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsolicitudesmuestras(";
        if ($solicitudesmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra";
            if (($solicitudesmuestrasDto->getNumero() != "") || ($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNumero() != "") {
            $sql.="numero";
            if (($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getAnio() != "") {
            $sql.="anio";
            if (($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga";
            if (($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getIdReferencia() != "") {
            $sql.="idReferencia";
            if (($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getFechaEnvio() != "") {
            $sql.="fechaEnvio";
            if (($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCarpetaInv() != "") {
            $sql.="carpetaInv";
            if (($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNuc() != "") {
            $sql.="nuc";
            if (($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveUsuario() != "") {
            $sql.="cveUsuario";
            if (($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita";
            if (($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
            $sql.="cveEstatusSolicitudMuestra";
            if (($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getObservaciones() != "") {
            $sql.="observaciones";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($solicitudesmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getNumero() != "") || ($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNumero() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getNumero() . "'";
            if (($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getAnio() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getAnio() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveJuzgado() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getIdReferencia() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getIdReferencia() . "'";
            if (($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getFechaEnvio() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getFechaEnvio() . "'";
            if (($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveTipoCarpeta() . "'";
            if (($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCarpetaInv() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCarpetaInv() . "'";
            if (($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNuc() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getNuc() . "'";
            if (($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveUsuario() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveUsuario() . "'";
            if (($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getObservaciones() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getObservaciones() != "") {
            $sql.="'" . $solicitudesmuestrasDto->getObservaciones() . "'";
        }
        if ($solicitudesmuestrasDto->getFechaRegistro() != "") {
            
        }
        if ($solicitudesmuestrasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesmuestrasDTO();
            $tmp->setidSolicitudMuestra($this->_proveedor->lastID());
            $tmp = $this->selectSolicitudesmuestras($tmp, "", "", $this->_proveedor);
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

    public function updateSolicitudesmuestras($solicitudesmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsolicitudesmuestras SET ";
        if ($solicitudesmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $solicitudesmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getNumero() != "") || ($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNumero() != "") {
            $sql.="numero='" . $solicitudesmuestrasDto->getNumero() . "'";
            if (($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getAnio() != "") {
            $sql.="anio='" . $solicitudesmuestrasDto->getAnio() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesmuestrasDto->getCveJuzgado() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga='" . $solicitudesmuestrasDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesmuestrasDto->getIdReferencia() . "'";
            if (($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getFechaEnvio() != "") {
            $sql.="fechaEnvio='" . $solicitudesmuestrasDto->getFechaEnvio() . "'";
            if (($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesmuestrasDto->getCveTipoCarpeta() . "'";
            if (($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCarpetaInv() != "") {
            $sql.="carpetaInv='" . $solicitudesmuestrasDto->getCarpetaInv() . "'";
            if (($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getNuc() != "") {
            $sql.="nuc='" . $solicitudesmuestrasDto->getNuc() . "'";
            if (($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $solicitudesmuestrasDto->getCveUsuario() . "'";
            if (($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $solicitudesmuestrasDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
            $sql.="cveEstatusSolicitudMuestra='" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getObservaciones() != "") {
            $sql.="observaciones='" . $solicitudesmuestrasDto->getObservaciones() . "'";
            if (($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $solicitudesmuestrasDto->getFechaRegistro() . "'";
            if (($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $solicitudesmuestrasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idSolicitudMuestra='" . $solicitudesmuestrasDto->getIdSolicitudMuestra() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesmuestrasDTO();
            $tmp->setidSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
            $tmp = $this->selectSolicitudesmuestras($tmp, "", "", $this->_proveedor);
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

    public function deleteSolicitudesmuestras($solicitudesmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsolicitudesmuestras  WHERE idSolicitudMuestra='" . $solicitudesmuestrasDto->getIdSolicitudMuestra() . "'";
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

    public function selectSolicitudesmuestras($solicitudesmuestrasDto, $param = '', $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = ' SELECT ';

        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= " idSolicitudMuestra,numero,anio,cveJuzgado,cveJuzgadoDesahoga,idReferencia,fechaEnvio,cveTipoCarpeta,carpetaInv,nuc,cveUsuario,cveAdscripcionSolicita,cveEstatusSolicitudMuestra,observaciones,fechaRegistro,fechaActualizacion ";
        } else {

            $sql .= $param["fields"];
        }

        $sql .= " FROM tblsolicitudesmuestras ";

        if (($solicitudesmuestrasDto->getIdSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getNumero() != "") || ($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($solicitudesmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $solicitudesmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getNumero() != "") || ($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getNumero() != "") {
            $sql.="numero='" . $solicitudesmuestrasDto->getNumero() . "'";
            if (($solicitudesmuestrasDto->getAnio() != "") || ($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getAnio() != "") {
            $sql.="anio='" . $solicitudesmuestrasDto->getAnio() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgado() != "") || ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesmuestrasDto->getCveJuzgado() . "'";
            if (($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga='" . $solicitudesmuestrasDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesmuestrasDto->getIdReferencia() != "") || ($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesmuestrasDto->getIdReferencia() . "'";
            if (($solicitudesmuestrasDto->getFechaEnvio() != "") || ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getFechaEnvio() != "") {
            $sql.="fechaEnvio='" . $solicitudesmuestrasDto->getFechaEnvio() . "'";
            if (($solicitudesmuestrasDto->getCveTipoCarpeta() != "") || ($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesmuestrasDto->getCveTipoCarpeta() . "'";
            if (($solicitudesmuestrasDto->getCarpetaInv() != "") || ($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCarpetaInv() != "") {
            $sql.="carpetaInv='" . $solicitudesmuestrasDto->getCarpetaInv() . "'";
            if (($solicitudesmuestrasDto->getNuc() != "") || ($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getNuc() != "") {
            $sql.="nuc='" . $solicitudesmuestrasDto->getNuc() . "'";
            if (($solicitudesmuestrasDto->getCveUsuario() != "") || ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $solicitudesmuestrasDto->getCveUsuario() . "'";
            if (($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") || ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $solicitudesmuestrasDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") || ($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
            $sql.="cveEstatusSolicitudMuestra='" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . "'";
            if (($solicitudesmuestrasDto->getObservaciones() != "") || ($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getObservaciones() != "") {
            $sql.="observaciones='" . $solicitudesmuestrasDto->getObservaciones() . "'";
            if (($solicitudesmuestrasDto->getFechaRegistro() != "") || ($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $solicitudesmuestrasDto->getFechaRegistro() . "'";
            if (($solicitudesmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $solicitudesmuestrasDto->getFechaActualizacion() . "'";
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                $helpSql = strpos($sql, " WHERE");
                if ($helpSql) {
                    $sql .= " AND ";
                } else {
                    $sql .= " WHERE ";
                }
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND " . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            $inicial = 0;
            if ($param["paginacion"]) {
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
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $param["cantxPag"] . " OFFSET " . ($param["pag"] * $param["cantxPag"] - $param["cantxPag"]) . " ";
            }
        }

        error_log("sql => " . $sql);
        
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesmuestrasDTO();
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudMuestra($row["cveEstatusSolicitudMuestra"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectFecha($proveedor = null) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "Select date_format(now(),'%Y%m%d') as Fecha";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp = $row["Fecha"];
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

        unset($sql);
        return $tmp;
    }

    public function selectHora($proveedor = null) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "Select date_format(now(),'%H%i%s') as Hora";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp = $row["Hora"];
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

        unset($sql);
        return $tmp;
    }

    public function selectFechaHora($proveedor = null) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "Select date_format(now(),'%d/%m/%Y %H:%i:%s') as FechaHora";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp = $row["FechaHora"];
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

        unset($sql);
        return $tmp;
    }

    public function selectFechaHoraMySql($proveedor = null) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "Select now() as FechaHora";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp = $row["FechaHora"];
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

        unset($sql);
        return $tmp;
    }

    public function selectSolicitudesMuestraJuzgadores($solicitudesmuestrasDto, $muestrasDto, $idJuzgado = "", $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudMuestra,SC.numero,SC.anio,SC.cveJuzgado,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudMuestra,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion ";
            $sql .= "from tbljuzgadoresmuestras as JC, tblsolicitudesmuestras as SC, tblrespuestamuestra as C ";
            $sql .= "where JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudMuestra = SC.idSolicitudMuestra ";
            $sql .= "and C.idSolicitudMuestra = SC.idSolicitudMuestra ";
            if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
                $sql .= "and   SC.CveEstatusSolicitudMuestra in (" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . ") ";
            }
            if ($muestrasDto->getNumeroMuestra() != "") {
                $sql .= "and   C.numeroMuestra = " . $muestrasDto->getNumeroMuestra() . " ";
            }
            if ($muestrasDto->getAnioMuestra() != "") {
                $sql .= "and   C.anioMuestra = " . $muestrasDto->getAnioMuestra() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudMuestra) as totalCount ";
            $sql .= "from tbljuzgadoresmuestras as JC, tblsolicitudesmuestras as SC, tblrespuestamuestra as C ";
            $sql .= " WHERE JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudMuestra = SC.idSolicitudMuestra ";
            $sql .= "and C.idSolicitudMuestra = SC.idSolicitudMuestra ";
            if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
                $sql .= "and   SC.CveEstatusSolicitudMuestra in (" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . ") ";
            }
            if ($muestrasDto->getNumeroMuestra() != "") {
                $sql .= "and   C.numeroMuestra = " . $muestrasDto->getNumeroMuestra() . " ";
            }
            if ($muestrasDto->getAnioMuestra() != "") {
                $sql .= "and   C.anioMuestra = " . $muestrasDto->getAnioMuestra() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " ORDER BY SC.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);
//echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesmuestrasDTO();
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudMuestra($row["cveEstatusSolicitudMuestra"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectSolicitudesMuestrasJuzgadores($solicitudesmuestrasDto, $muestrasDto, $idJuzgado = "", $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudMuestra,SC.numero,SC.anio,SC.cveJuzgado,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudMuestra,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion ";
            $sql .= "from tbljuzgadoresmuestras as JC, tblsolicitudesmuestras as SC, tblrespuestamuestra as C ";
            $sql .= "where JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudMuestra = SC.idSolicitudMuestra ";
            $sql .= "and C.idSolicitudMuestra = SC.idSolicitudMuestra ";
            if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
                $sql .= "and   SC.CveEstatusSolicitudMuestra in (" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . ") ";
            }
            if ($muestrasDto->getNumeroMuestra() != "") {
                $sql .= "and   C.numeroMuestra = " . $muestrasDto->getNumeroMuestra() . " ";
            }
            if ($muestrasDto->getAnioMuestra() != "") {
                $sql .= "and   C.anioMuestra = " . $muestrasDto->getAnioMuestra() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudMuestra) as totalCount ";
            $sql .= "from tbljuzgadoresmuestras as JC, tblsolicitudesmuestras as SC, tblrespuestamuestra as C ";
            $sql .= " WHERE JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudMuestra = SC.idSolicitudMuestra ";
            $sql .= "and C.idSolicitudMuestra = SC.idSolicitudMuestra ";
            if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() != "") {
                $sql .= "and   SC.CveEstatusSolicitudMuestra in (" . $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() . ") ";
            }
            if ($muestrasDto->getNumeroMuestra() != "") {
                $sql .= "and   C.numeroMuestra = " . $muestrasDto->getNumeroMuestra() . " ";
            }
            if ($muestrasDto->getAnioMuestra() != "") {
                $sql .= "and   C.anioMuestra = " . $muestrasDto->getAnioMuestra() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " ORDER BY SC.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);
//echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesmuestrasDTO();
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudMuestra($row["cveEstatusSolicitudMuestra"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function consultaDetalleMuestrasJuzgadoAdmon($muestraDto, $idJuzgadoDesahoga, $orden = "", $proveedor = null, $param) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select sc.idSolicitudMuestra,sc.numero,sc.anio,sc.cveJuzgado,sc.cveJuzgadoDesahoga,sc.idReferencia,sc.fechaEnvio,sc.cveTipoCarpeta,sc.carpetaInv,sc.nuc,sc.cveUsuario,sc.cveAdscripcionSolicita,sc.cveEstatusSolicitudMuestra,sc.observaciones,sc.fechaRegistro,sc.fechaActualizacion ";
            $sql .= "from tblsolicitudesmuestras sc ";
            $sql .= "inner join  tblrespuestamuestra  c ";
            $sql .= "on (sc.idSolicitudMuestra = c.idSolicitudMuestra) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($muestraDto->getNumeroMuestra() != "" && $muestraDto->getNumeroMuestra() != 0) {
                $sql.= " and c.numeroMuestra = '" . $muestraDto->getNumeroMuestra() . "' ";
            }
            if ($muestraDto->getAnioMuestra() != "" && $muestraDto->getAnioMuestra() != 0) {
                $sql.= " and c.anioMuestra = '" . $muestraDto->getAnioMuestra() . "' ";
            }
        } else {
            $sql = "select count(sc.idSolicitudMuestra) as totalCount ";
            $sql .= "from tblsolicitudesmuestras sc ";
            $sql .= "inner join  tblrespuestamuestra  c ";
            $sql .= "on (sc.idSolicitudMuestra = c.idSolicitudMuestra) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($muestraDto->getNumeroMuestra() != "" && $muestraDto->getNumeroMuestra() != 0) {
                $sql.= " and c.numeroMuestra = '" . $muestraDto->getNumeroMuestra() . "' ";
            }
            if ($muestraDto->getAnioMuestra() != "" && $muestraDto->getAnioMuestra() != 0) {
                $sql.= " and c.anioMuestra = '" . $muestraDto->getAnioMuestra() . "' ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND sc.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND sc.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND sc.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND sc.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " ORDER BY sc.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesmuestrasDTO();
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudMuestra($row["cveEstatusSolicitudMuestra"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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

        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectBitacora($param = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "SELECT C.idMuestra,C.idSolicitudMuestra,C.cveRespuestaSolicitudMuestra,C.numeroMuestra,C.anioMuestra,C.solicitud,C.negada,C.concedida,C.fechaPractica,C.horaPractica,C.horasPractica,C.fechaInforme,C.horaInforme,";
            $sql .= "C.horasInforme,C.fechaRespuesta,C.qr,C.firmaDigital,C.selloDigital,C.fechaRegistro,C.fechaActualizacion,C.email, C.motivoCancelacion ";
            $sql .= "FROM tblsolicitudesmuestras SC INNER JOIN tblrespuestamuestra C ON(SC.idSolicitudMuestra = C.idSolicitudMuestra)";

            if ($param["numeroMuestra"] != "" || $param["anioMuestra"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroMuestra"] != "") {
                $sql .= " C.numeroMuestra = " . $param["numeroMuestra"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioMuestra"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioMuestra"] != "") {
                $sql .= "C.anioMuestra = " . $param["anioMuestra"] . "";
                if ($param["numJuzgado"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["numJuzgado"] != "") {
                $sql .= "SC.cveJuzgado = " . $param["numJuzgado"] . "";
            }
        } else {
            $sql = "SELECT count(C.idMuestra) as totalCount ";
            $sql .= "FROM tblsolicitudesmuestras SC INNER JOIN tblrespuestamuestra C ON(SC.idSolicitudMuestra = C.idSolicitudMuestra)";

            if ($param["numeroMuestra"] != "" || $param["anioMuestra"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroMuestra"] != "") {
                $sql .= " C.numeroMuestra = " . $param["numeroMuestra"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioMuestra"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioMuestra"] != "") {
                $sql .= "C.anioMuestra = " . $param["anioMuestra"] . "";
                if ($param["numJuzgado"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["numJuzgado"] != "") {
                $sql .= "SC.cveJuzgado = " . $param["numJuzgado"] . "";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($param["paginacion"] == "true") {
            if ($param["pag"] > 0) {
                $inicial = ($param["pag"] - 1) * $param["cantxPag"];
            } else {
                $inicial = 0;
            }
        }

        $sql .= " ORDER BY C.fechaRegistro DESC ";

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new MuestrasDTO();
                        $tmp[$contador]->setIdMuestra($row["idMuestra"]);
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setCveRespuestaSolicitudMuestra($row["cveRespuestaSolicitudMuestra"]);
                        $tmp[$contador]->setNumeroMuestra($row["numeroMuestra"]);
                        $tmp[$contador]->setAnioMuestra($row["anioMuestra"]);
                        $tmp[$contador]->setSolicitud($row["solicitud"]);
                        $tmp[$contador]->setNegada($row["negada"]);
                        $tmp[$contador]->setConcedida($row["concedida"]);
                        $tmp[$contador]->setFechaPractica($row["fechaPractica"]);
                        $tmp[$contador]->setHoraPractica($row["horaPractica"]);
                        $tmp[$contador]->setHorasPractica($row["horasPractica"]);
                        $tmp[$contador]->setFechaInforme($row["fechaInforme"]);
                        $tmp[$contador]->setHoraInforme($row["horaInforme"]);
                        $tmp[$contador]->setHorasInforme($row["horasInforme"]);
                        $tmp[$contador]->setFechaRespuesta($row["fechaRespuesta"]);
                        $tmp[$contador]->setQr($row["qr"]);
                        $tmp[$contador]->setFirmaDigital($row["firmaDigital"]);
                        $tmp[$contador]->setSelloDigital($row["selloDigital"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setEmail($row["email"]);
                        $tmp[$contador]->setMotivoCancelacion($row["motivoCancelacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>