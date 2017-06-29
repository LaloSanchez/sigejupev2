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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SolicitudesordenesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSolicitudesordenes($solicitudesordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsolicitudesordenes(";
        if ($solicitudesordenesDto->getIdSolicitudOrden() != "") {
            $sql .= "idSolicitudOrden";
            if (($solicitudesordenesDto->getCaseProceedingId() != "") || ($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCaseProceedingId() != "") {
            $sql .= "caseProceedingId";
            if (($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNumero() != "") {
            $sql .= "numero";
            if (($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getAnio() != "") {
            $sql .= "anio";
            if (($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgado() != "") {
            $sql .= "cveJuzgado";
            if (($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia";
            if (($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga";
            if (($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getIdReferencia() != "") {
            $sql .= "idReferencia";
            if (($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getFechaEnvio() != "") {
            $sql .= "fechaEnvio";
            if (($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta";
            if (($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCarpetaInv() != "") {
            $sql .= "carpetaInv";
            if (($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNuc() != "") {
            $sql .= "nuc";
            if (($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveUsuario() != "") {
            $sql .= "cveUsuario";
            if (($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita";
            if (($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") {
            $sql .= "cveEstatusSolicitudOrden";
            if (($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getObservaciones() != "") {
            $sql .= "observaciones";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($solicitudesordenesDto->getIdSolicitudOrden() != "") {
            $sql .= "'" . $solicitudesordenesDto->getIdSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getCaseProceedingId() != "") || ($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCaseProceedingId() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCaseProceedingId() . "'";
            if (($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNumero() != "") {
            $sql .= "'" . $solicitudesordenesDto->getNumero() . "'";
            if (($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getAnio() != "") {
            $sql .= "'" . $solicitudesordenesDto->getAnio() . "'";
            if (($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgado() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveJuzgado() . "'";
            if (($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveCatAudiencia() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveCatAudiencia() . "'";
            if (($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getIdReferencia() != "") {
            $sql .= "'" . $solicitudesordenesDto->getIdReferencia() . "'";
            if (($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getFechaEnvio() != "") {
            $sql .= "'" . $solicitudesordenesDto->getFechaEnvio() . "'";
            if (($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveTipoCarpeta() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveTipoCarpeta() . "'";
            if (($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCarpetaInv() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCarpetaInv() . "'";
            if (($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNuc() != "") {
            $sql .= "'" . $solicitudesordenesDto->getNuc() . "'";
            if (($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveUsuario() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveUsuario() . "'";
            if (($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") {
            $sql .= "'" . $solicitudesordenesDto->getCveEstatusSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getObservaciones() != "") {
            $sql .= "'" . $solicitudesordenesDto->getObservaciones() . "'";
        }
        if ($solicitudesordenesDto->getFechaRegistro() != "") {
            
        }
        if ($solicitudesordenesDto->getFechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesordenesDTO();
            $tmp->setidSolicitudOrden($this->_proveedor->lastID());
            $tmp = $this->selectSolicitudesordenes($tmp, "", $this->_proveedor);
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

    public function updateSolicitudesordenes($solicitudesordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsolicitudesordenes SET ";
        if ($solicitudesordenesDto->getIdSolicitudOrden() != "") {
            $sql .= "idSolicitudOrden='" . $solicitudesordenesDto->getIdSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNumero() != "") {
            $sql .= "numero='" . $solicitudesordenesDto->getNumero() . "'";
            if (($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getAnio() != "") {
            $sql .= "anio='" . $solicitudesordenesDto->getAnio() . "'";
            if (($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $solicitudesordenesDto->getCveJuzgado() . "'";
            if (($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $solicitudesordenesDto->getCveCatAudiencia() . "'";
            if (($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $solicitudesordenesDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getIdReferencia() != "") {
            $sql .= "idReferencia='" . $solicitudesordenesDto->getIdReferencia() . "'";
            if (($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getFechaEnvio() != "") {
            $sql .= "fechaEnvio='" . $solicitudesordenesDto->getFechaEnvio() . "'";
            if (($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $solicitudesordenesDto->getCveTipoCarpeta() . "'";
            if (($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCarpetaInv() != "") {
            $sql .= "carpetaInv='" . $solicitudesordenesDto->getCarpetaInv() . "'";
            if (($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNuc() != "") {
            $sql .= "nuc='" . $solicitudesordenesDto->getNuc() . "'";
            if (($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveUsuario() != "") {
            $sql .= "cveUsuario='" . $solicitudesordenesDto->getCveUsuario() . "'";
            if (($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $solicitudesordenesDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") {
            $sql .= "cveEstatusSolicitudOrden='" . $solicitudesordenesDto->getCveEstatusSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getObservaciones() != "") {
            $sql .= "observaciones='" . $solicitudesordenesDto->getObservaciones() . "'";
            if (($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $solicitudesordenesDto->getFechaRegistro() . "'";
            if (($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $solicitudesordenesDto->getFechaActualizacion() . "'";
            if (($solicitudesordenesDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudesordenesDto->getNip() != "") {
            $sql .= "nip='" . $solicitudesordenesDto->getNip() . "'";
        }
        $sql .= " WHERE idSolicitudOrden='" . $solicitudesordenesDto->getIdSolicitudOrden() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesordenesDTO();
            $tmp->setidSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
            $tmp = $this->selectSolicitudesordenes($tmp, "", $this->_proveedor);
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

    public function deleteSolicitudesordenes($solicitudesordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsolicitudesordenes  WHERE idSolicitudOrden='" . $solicitudesordenesDto->getIdSolicitudOrden() . "'";
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

    public function selectSolicitudesordenes($solicitudesordenesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idSolicitudOrden,caseProceedingId,numero,anio,cveJuzgado,cveCatAudiencia,cveJuzgadoDesahoga,idReferencia,fechaEnvio,cveTipoCarpeta,carpetaInv,nuc,cveUsuario,cveAdscripcionSolicita,cveEstatusSolicitudOrden,observaciones,fechaRegistro,fechaActualizacion,nip FROM tblsolicitudesordenes ";
        if (($solicitudesordenesDto->getIdSolicitudOrden() != "") || ($solicitudesordenesDto->getCaseProceedingId() != "") || ($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
            $sql .= " WHERE ";
        }
        if ($solicitudesordenesDto->getIdSolicitudOrden() != "") {
            $sql .= "idSolicitudOrden='" . $solicitudesordenesDto->getIdSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getCaseProceedingId() != "") || ($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCaseProceedingId() != "") {
            $sql .= "caseProceedingId='" . $solicitudesordenesDto->getCaseProceedingId() . "'";
            if (($solicitudesordenesDto->getNumero() != "") || ($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getNumero() != "") {
            $sql .= "numero='" . $solicitudesordenesDto->getNumero() . "'";
            if (($solicitudesordenesDto->getAnio() != "") || ($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getAnio() != "") {
            $sql .= "anio='" . $solicitudesordenesDto->getAnio() . "'";
            if (($solicitudesordenesDto->getCveJuzgado() != "") || ($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $solicitudesordenesDto->getCveJuzgado() . "'";
            if (($solicitudesordenesDto->getCveCatAudiencia() != "") || ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $solicitudesordenesDto->getCveCatAudiencia() . "'";
            if (($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") || ($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $solicitudesordenesDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesordenesDto->getIdReferencia() != "") || ($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getIdReferencia() != "") {
            $sql .= "idReferencia='" . $solicitudesordenesDto->getIdReferencia() . "'";
            if (($solicitudesordenesDto->getFechaEnvio() != "") || ($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getFechaEnvio() != "") {
            $sql .= "fechaEnvio='" . $solicitudesordenesDto->getFechaEnvio() . "'";
            if (($solicitudesordenesDto->getCveTipoCarpeta() != "") || ($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $solicitudesordenesDto->getCveTipoCarpeta() . "'";
            if (($solicitudesordenesDto->getCarpetaInv() != "") || ($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCarpetaInv() != "") {
            $sql .= "carpetaInv='" . $solicitudesordenesDto->getCarpetaInv() . "'";
            if (($solicitudesordenesDto->getNuc() != "") || ($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getNuc() != "") {
            $sql .= "nuc='" . $solicitudesordenesDto->getNuc() . "'";
            if (($solicitudesordenesDto->getCveUsuario() != "") || ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveUsuario() != "") {
            $sql .= "cveUsuario='" . $solicitudesordenesDto->getCveUsuario() . "'";
            if (($solicitudesordenesDto->getCveAdscripcionSolicita() != "") || ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $solicitudesordenesDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") || ($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() != "") {
            $sql .= "cveEstatusSolicitudOrden='" . $solicitudesordenesDto->getCveEstatusSolicitudOrden() . "'";
            if (($solicitudesordenesDto->getObservaciones() != "") || ($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getObservaciones() != "") {
            $sql .= "observaciones='" . $solicitudesordenesDto->getObservaciones() . "'";
            if (($solicitudesordenesDto->getFechaRegistro() != "") || ($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $solicitudesordenesDto->getFechaRegistro() . "'";
            if (($solicitudesordenesDto->getFechaActualizacion() != "") || ($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $solicitudesordenesDto->getFechaActualizacion() . "'";
            if (($solicitudesordenesDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudesordenesDto->getNip() != "") {
            $sql .= "nip='" . $solicitudesordenesDto->getNip() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new SolicitudesordenesDTO();
                    $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                    $tmp[$contador]->setCaseProceedingId($row["caseProceedingId"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                    $tmp[$contador]->setNuc($row["nuc"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveEstatusSolicitudOrden($row["cveEstatusSolicitudOrden"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNip($row["nip"]);
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function consultaDetalleOrdenesJuzgado($ordenDto, $idJuzgadoDesahoga, $orden = "", $param, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select sc.idSolicitudOrden,sc.numero,sc.anio,sc.cveJuzgado,sc.cveCatAudiencia,sc.cveJuzgadoDesahoga,sc.idReferencia,sc.fechaEnvio,sc.cveTipoCarpeta,sc.carpetaInv,sc.nuc,sc.cveUsuario,sc.cveAdscripcionSolicita,sc.cveEstatusSolicitudOrden,sc.observaciones,sc.fechaRegistro,sc.fechaActualizacion,sc.nip ";
            $sql .= "from tblsolicitudesordenes sc ";
            $sql .= "inner join  tblordenes  c ";
            $sql .= "on (sc.idSolicitudOrden = c.idSolicitudOrden) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($ordenDto->getNumeroOrden() != "" && $ordenDto->getNumeroOrden() != 0) {
                $sql .= " and c.numeroOrden = '" . $ordenDto->getNumeroOrden() . "' ";
            }
            if ($ordenDto->getAnioOrden() != "" && $ordenDto->getAnioOrden() != 0) {
                $sql .= " and c.anioOrden = '" . $ordenDto->getAnioOrden() . "' ";
            }
        } else {
            $sql = "select count(sc.idSolicitudOrden) as totalCount ";
            $sql .= "from tblsolicitudesordenes sc ";
            $sql .= "inner join  tblordenes  c ";
            $sql .= "on (sc.idSolicitudOrden = c.idSolicitudOrden) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($ordenDto->getNumeroOrden() != "" && $ordenDto->getNumeroOrden() != 0) {
                $sql .= " and c.numeroOrden = '" . $ordenDto->getNumeroOrden() . "' ";
            }
            if ($ordenDto->getAnioOrden() != "" && $ordenDto->getAnioOrden() != 0) {
                $sql .= " and c.anioOrden = '" . $ordenDto->getAnioOrden() . "' ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql .= " AND sc.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND sc.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " AND sc.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND sc.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesordenesDTO();
                        $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudOrden($row["cveEstatusSolicitudOrden"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setNip($row["nip"]);
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

    public function selectSolicitudesOrdenesJuzgadores($solicitudesordenessDto, $ordenDto, $idJuzgado = "", $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudOrden ,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudOrden,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion,SC.nip ";
            $sql .= "from tbljuzgadoresordenes as JC, tblsolicitudesordenes as SC, tblordenes as C ";
            $sql .= "where JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudOrden = SC.idSolicitudOrden ";
            $sql .= "and C.idSolicitudOrden = SC.idSolicitudOrden ";
            if ($solicitudesordenessDto->getCveEstatusSolicitudOrden() != "") {
                $sql .= "and   SC.CveEstatusSolicitudOrden in (" . $solicitudesordenessDto->getCveEstatusSolicitudOrden() . ") ";
            }
            if ($ordenDto->getNumeroOrden() != "") {
                $sql .= "and   C.numeroOrden = " . $ordenDto->getNumeroOrden() . " ";
            }
            if ($ordenDto->getAnioOrden() != "") {
                $sql .= "and   C.anioOrden = " . $ordenDto->getAnioOrden() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudOrden) as totalCount ";
            $sql .= "from tbljuzgadoresordenes as JC, tblsolicitudesordenes as SC, tblordenes as C ";
            $sql .= " WHERE JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudOrden = SC.idSolicitudOrden ";
            $sql .= "and C.idSolicitudOrden = SC.idSolicitudOrden ";
            if ($solicitudesordenessDto->getCveEstatusSolicitudOrden() != "") {
                $sql .= "and   SC.CveEstatusSolicitudOrden in (" . $solicitudesordenessDto->getCveEstatusSolicitudOrden() . ") ";
            }
            if ($ordenDto->getNumeroOrden() != "") {
                $sql .= "and   C.numeroOrden = " . $ordenDto->getNumeroOrden() . " ";
            }
            if ($ordenDto->getAnioOrden() != "") {
                $sql .= "and C.anioOrden = " . $ordenDto->getAnioOrden() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesordenesDTO();
                        $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudOrden($row["cveEstatusSolicitudOrden"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setNip($row["nip"]);
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

    public function selectSolicitudesOrdenmp($solicitudesordenesDto, $ordenesDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudOrden,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudOrden,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion,SC.nip ";
            $sql .= "from tbljuzgadoresordenes as JC, tblsolicitudesordenes as SC, tblordenes as C ";
            $sql .= "where JC.idSolicitudOrden = SC.idSolicitudOrden ";
            $sql .= "and C.idSolicitudOrden = SC.idSolicitudOrden ";
            if ($solicitudesordenesDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudesordenesDto->getcveUsuario() . ") ";
            }
            if ($ordenesDto->getNumeroOrden() != "") {
                $sql .= "and   C.numeroOrden = " . $ordenesDto->getNumeroOrden() . " ";
            }
            if ($ordenesDto->getAnioOrden() != "") {
                $sql .= "and   C.anioOrden = " . $ordenesDto->getAnioOrden() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudOrden) as totalCount ";
            $sql .= "from tbljuzgadoresordenes as JC, tblsolicitudesordenes as SC, tblordenes as C ";
            $sql .= "where JC.idSolicitudOrden = SC.idSolicitudOrden ";
            $sql .= "and C.idSolicitudOrden = SC.idSolicitudOrden ";
            if ($solicitudesordenesDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudesordenesDto->getcveUsuario() . ") ";
            }
            if ($ordenesDto->getNumeroOrden() != "") {
                $sql .= "and   C.numeroOrden = " . $ordenesDto->getNumeroOrden() . " ";
            }
            if ($ordenesDto->getAnioOrden() != "") {
                $sql .= "and   C.anioOrden = " . $ordenesDto->getAnioOrden() . " ";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        error_log("sql => " . $sql);
//echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new SolicitudesordenesDTO();
                        $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveEstatusSolicitudOrden($row["cveEstatusSolicitudOrden"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setNip($row["nip"]);
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
            $sql = "SELECT C.idOrden,C.idSolicitudOrden,C.cveRespuestaSolicitudOrden,C.numeroOrden,C.anioOrden,C.solicitud,C.negada,C.concedida,C.fechaPractica,C.horaPractica,C.horasPractica,C.fechaInforme,C.horaInforme,";
            $sql .= "C.horasInforme,C.fechaRespuesta,C.qr,C.firmaDigital,C.selloDigital,C.fechaRegistro,C.fechaActualizacion,C.email, C.motivoCancelacion ";
            $sql .= "FROM tblsolicitudesordenes SC INNER JOIN tblordenes C ON(SC.idSolicitudOrden = C.idSolicitudOrden)";

            if ($param["numeroOrden"] != "" || $param["anioOrden"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroOrden"] != "") {
                $sql .= " C.numeroOrden = " . $param["numeroOrden"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioOrden"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioOrden"] != "") {
                $sql .= "C.anioOrden = " . $param["anioOrden"] . "";
                if ($param["numJuzgado"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["numJuzgado"] != "") {
                $sql .= "SC.cveJuzgado = " . $param["numJuzgado"] . "";
            }
        } else {
            $sql = "SELECT count(C.idOrden) as totalCount ";
            $sql .= "FROM tblsolicitudesordenes SC INNER JOIN tblordenes C ON(SC.idSolicitudOrden = C.idSolicitudOrden)";

            if ($param["numeroOrden"] != "" || $param["anioOrden"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroOrden"] != "") {
                $sql .= " C.numeroOrden = " . $param["numeroOrden"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioOrden"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioOrden"] != "") {
                $sql .= "C.anioOrden = " . $param["anioOrden"] . "";
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
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " AND SC.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND SC.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new OrdenesDTO();
                        $tmp[$contador]->setIdOrden($row["idOrden"]);
                        $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                        $tmp[$contador]->setCveRespuestaSolicitudOrden($row["cveRespuestaSolicitudOrden"]);
                        $tmp[$contador]->setNumeroOrden($row["numeroOrden"]);
                        $tmp[$contador]->setAnioOrden($row["anioOrden"]);
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

}

?>