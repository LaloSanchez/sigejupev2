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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SolicitudescateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSolicitudescateos($solicitudescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsolicitudescateos(";
        if ($solicitudescateosDto->getIdSolicitudCateo() != "") {
            $sql .= "idSolicitudCateo";
            if (($solicitudescateosDto->getCaseProceedingId() != "") || ($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getCaseProceedingId() != "") {
            $sql .= "caseProceedingId";
            if (($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnumero() != "") {
            $sql .= "numero";
            if (($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getanio() != "") {
            $sql .= "anio";
            if (($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado";
            if (($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia";
            if (($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga";
            if (($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getidReferencia() != "") {
            $sql .= "idReferencia";
            if (($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getfechaEnvio() != "") {
            $sql .= "fechaEnvio";
            if (($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta";
            if (($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcarpetaInv() != "") {
            $sql .= "carpetaInv";
            if (($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnuc() != "") {
            $sql .= "nuc";
            if (($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveUsuario() != "") {
            $sql .= "cveUsuario";
            if (($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita";
            if (($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveEstatusSolicitudCateo() != "") {
            $sql .= "cveEstatusSolicitudCateo";
            if (($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getobservaciones() != "") {
            $sql .= "observaciones";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($solicitudescateosDto->getIdSolicitudCateo() != "") {
            $sql .= "'" . $solicitudescateosDto->getIdSolicitudCateo() . "'";
            if (($solicitudescateosDto->getCaseProceedingId() != "") || ($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getCaseProceedingId() != "") {
            $sql .= "'" . $solicitudescateosDto->getCaseProceedingId() . "'";
            if (($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnumero() != "") {
            $sql .= "'" . $solicitudescateosDto->getnumero() . "'";
            if (($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getanio() != "") {
            $sql .= "'" . $solicitudescateosDto->getanio() . "'";
            if (($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgado() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveJuzgado() . "'";
            if (($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveCatAudiencia() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveCatAudiencia() . "'";
            if (($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveJuzgadoDesahoga() . "'";
            if (($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getidReferencia() != "") {
            $sql .= "'" . $solicitudescateosDto->getidReferencia() . "'";
            if (($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getfechaEnvio() != "") {
            $sql .= "'" . $solicitudescateosDto->getfechaEnvio() . "'";
            if (($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveTipoCarpeta() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveTipoCarpeta() . "'";
            if (($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcarpetaInv() != "") {
            $sql .= "'" . $solicitudescateosDto->getcarpetaInv() . "'";
            if (($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnuc() != "") {
            $sql .= "'" . $solicitudescateosDto->getnuc() . "'";
            if (($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveUsuario() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveUsuario() . "'";
            if (($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveAdscripcionSolicita() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveAdscripcionSolicita() . "'";
            if (($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveEstatusSolicitudCateo() != "") {
            $sql .= "'" . $solicitudescateosDto->getcveEstatusSolicitudCateo() . "'";
            if (($solicitudescateosDto->getObservaciones() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getobservaciones() != "") {
            $sql .= "'" . $solicitudescateosDto->getobservaciones() . "'";
        }
        if ($solicitudescateosDto->getfechaRegistro() != "") {
            
        }
        if ($solicitudescateosDto->getfechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudescateosDTO();
            $tmp->setidSolicitudCateo($this->_proveedor->lastID());
            $tmp = $this->selectSolicitudescateos($tmp, "", "", $this->_proveedor);
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

    public function updateSolicitudescateos($solicitudescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsolicitudescateos SET ";
        if ($solicitudescateosDto->getIdSolicitudCateo() != "") {
            $sql .= "idSolicitudCateo='" . $solicitudescateosDto->getIdSolicitudCateo() . "'";
            if (($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnumero() != "") {
            $sql .= "numero='" . $solicitudescateosDto->getnumero() . "'";
            if (($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getanio() != "") {
            $sql .= "anio='" . $solicitudescateosDto->getanio() . "'";
            if (($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $solicitudescateosDto->getcveJuzgado() . "'";
            if (($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $solicitudescateosDto->getcveCatAudiencia() . "'";
            if (($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $solicitudescateosDto->getcveJuzgadoDesahoga() . "'";
            if (($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $solicitudescateosDto->getidReferencia() . "'";
            if (($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getfechaEnvio() != "") {
            $sql .= "fechaEnvio='" . $solicitudescateosDto->getfechaEnvio() . "'";
            if (($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $solicitudescateosDto->getcveTipoCarpeta() . "'";
            if (($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcarpetaInv() != "") {
            $sql .= "carpetaInv='" . $solicitudescateosDto->getcarpetaInv() . "'";
            if (($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getnuc() != "") {
            $sql .= "nuc='" . $solicitudescateosDto->getnuc() . "'";
            if (($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $solicitudescateosDto->getcveUsuario() . "'";
            if (($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $solicitudescateosDto->getcveAdscripcionSolicita() . "'";
            if (($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getcveEstatusSolicitudCateo() != "") {
            $sql .= "cveEstatusSolicitudCateo='" . $solicitudescateosDto->getcveEstatusSolicitudCateo() . "'";
            if (($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getobservaciones() != "") {
            $sql .= "observaciones='" . $solicitudescateosDto->getobservaciones() . "'";
            if (($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $solicitudescateosDto->getfechaRegistro() . "'";
            if (($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $solicitudescateosDto->getfechaActualizacion() . "'";
            if (($solicitudescateosDto->getNip() != "")) {
                $sql .= ",";
            }
        }
        if ($solicitudescateosDto->getNip() != "") {
            $sql .= "nip='" . $solicitudescateosDto->getNip() . "'";
        }
        $sql .= " WHERE idSolicitudCateo='" . $solicitudescateosDto->getIdSolicitudCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudescateosDTO();
            $tmp->setidSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
            $tmp = $this->selectSolicitudescateos($tmp, "", "", $this->_proveedor);
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

    public function deleteSolicitudescateos($solicitudescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsolicitudescateos  WHERE idSolicitudCateo='" . $solicitudescateosDto->getIdSolicitudCateo() . "'";
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

    public function selectSolicitudescateos($solicitudescateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= "idSolicitudCateo,caseProceedingId,numero,anio,cveJuzgado,cveCatAudiencia,cveJuzgadoDesahoga,idReferencia,fechaEnvio,cveTipoCarpeta,carpetaInv,nuc,cveUsuario,cveAdscripcionSolicita,cveEstatusSolicitudCateo,observaciones,fechaRegistro,fechaActualizacion,nip";
        } else {
            $sql .= $param["fields"];
        }
        $sql .= " FROM tblsolicitudescateos ";
        if (($solicitudescateosDto->getIdSolicitudCateo() != "") || ($solicitudescateosDto->getCaseProceedingId() != "") || ($solicitudescateosDto->getnumero() != "") || ($solicitudescateosDto->getanio() != "") || ($solicitudescateosDto->getcveJuzgado() != "") || ($solicitudescateosDto->getcveCatAudiencia() != "") || ($solicitudescateosDto->getcveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getidReferencia() != "") || ($solicitudescateosDto->getfechaEnvio() != "") || ($solicitudescateosDto->getcveTipoCarpeta() != "") || ($solicitudescateosDto->getcarpetaInv() != "") || ($solicitudescateosDto->getnuc() != "") || ($solicitudescateosDto->getcveUsuario() != "") || ($solicitudescateosDto->getcveAdscripcionSolicita() != "") || ($solicitudescateosDto->getcveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getobservaciones() != "") || ($solicitudescateosDto->getfechaRegistro() != "") || ($solicitudescateosDto->getfechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
            $sql .= " WHERE ";
        }
        if ($solicitudescateosDto->getIdSolicitudCateo() != "") {
            $sql .= "idSolicitudCateo='" . $solicitudescateosDto->getIdSolicitudCateo() . "'";
            if (($solicitudescateosDto->getCaseProceedingId() != "") || ($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getCaseProceedingId() != "") {
            $sql .= "caseProceedingId='" . $solicitudescateosDto->getCaseProceedingId() . "'";
            if (($solicitudescateosDto->getNumero() != "") || ($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getnumero() != "") {
            $sql .= "numero='" . $solicitudescateosDto->getNumero() . "'";
            if (($solicitudescateosDto->getAnio() != "") || ($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getanio() != "") {
            $sql .= "anio='" . $solicitudescateosDto->getAnio() . "'";
            if (($solicitudescateosDto->getCveJuzgado() != "") || ($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $solicitudescateosDto->getCveJuzgado() . "'";
            if (($solicitudescateosDto->getCveCatAudiencia() != "") || ($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $solicitudescateosDto->getCveCatAudiencia() . "'";
            if (($solicitudescateosDto->getCveJuzgadoDesahoga() != "") || ($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $solicitudescateosDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudescateosDto->getIdReferencia() != "") || ($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $solicitudescateosDto->getIdReferencia() . "'";
            if (($solicitudescateosDto->getFechaEnvio() != "") || ($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getfechaEnvio() != "") {
            $sql .= "fechaEnvio='" . $solicitudescateosDto->getFechaEnvio() . "'";
            if (($solicitudescateosDto->getCveTipoCarpeta() != "") || ($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $solicitudescateosDto->getCveTipoCarpeta() . "'";
            if (($solicitudescateosDto->getCarpetaInv() != "") || ($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcarpetaInv() != "") {
            $sql .= "carpetaInv='" . $solicitudescateosDto->getCarpetaInv() . "'";
            if (($solicitudescateosDto->getNuc() != "") || ($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getnuc() != "") {
            $sql .= "nuc='" . $solicitudescateosDto->getNuc() . "'";
            if (($solicitudescateosDto->getCveUsuario() != "") || ($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $solicitudescateosDto->getCveUsuario() . "'";
            if (($solicitudescateosDto->getCveAdscripcionSolicita() != "") || ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $solicitudescateosDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") || ($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getcveEstatusSolicitudCateo() != "") {
            $sql .= "cveEstatusSolicitudCateo='" . $solicitudescateosDto->getCveEstatusSolicitudCateo() . "'";
            if (($solicitudescateosDto->getObservaciones() != "") || ($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getobservaciones() != "") {
            $sql .= "observaciones='" . $solicitudescateosDto->getObservaciones() . "'";
            if (($solicitudescateosDto->getFechaRegistro() != "") || ($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getfechaRegistro() != "") {
            $sql .= "Date(fechaRegistro)='" . $solicitudescateosDto->getFechaRegistro() . "'";
            if (($solicitudescateosDto->getFechaActualizacion() != "") || ($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $solicitudescateosDto->getFechaActualizacion() . "'";
            if (($solicitudescateosDto->getNip() != "")) {
                $sql .= " AND ";
            }
        }
        if ($solicitudescateosDto->getNip() != "") {
            $sql .= "nip='" . $solicitudescateosDto->getNip() . "'";
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
                    $sql .= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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

        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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

    public function selectSolicitudesCateosJuzgadores($solicitudescateosDto, $cateosDto, $idJuzgado = "", $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudCateo,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudCateo,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion,SC.nip ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= "where JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") {
                $sql .= "and   SC.CveEstatusSolicitudCateo in (" . $solicitudescateosDto->getCveEstatusSolicitudCateo() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudCateo) as totalCount ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= " WHERE JC.idJuzgador= '" . $idJuzgado . "' ";
            $sql .= "and   JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getCveEstatusSolicitudCateo() != "") {
                $sql .= "and   SC.CveEstatusSolicitudCateo in (" . $solicitudescateosDto->getCveEstatusSolicitudCateo() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . " ";
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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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

    public function selectSolicitudesCateosmp($solicitudescateosDto, $cateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudCateo,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudCateo,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion, SC.nip ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudCateo) as totalCount ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . " ";
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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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
            $sql = "SELECT C.idCateo,C.idSolicitudCateo,C.cveRespuestaSolicitudCateo,C.numeroCateo,C.anioCateo,C.solicitud,C.negada,C.concedida,C.fechaPractica,C.horaPractica,C.horasPractica,C.fechaInforme,C.horaInforme,";
            $sql .= "C.horasInforme,C.fechaRespuesta,C.qr,C.firmaDigital,C.selloDigital,C.fechaRegistro,C.fechaActualizacion,C.email, C.motivoCancelacion ";
            $sql .= "FROM tblsolicitudescateos SC INNER JOIN tblcateos C ON(SC.idSolicitudCateo = C.idSolicitudCateo)";

            if ($param["numeroCateo"] != "" || $param["anioCateo"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroCateo"] != "") {
                $sql .= " C.numeroCateo = " . $param["numeroCateo"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioCateo"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioCateo"] != "") {
                $sql .= "C.anioCateo = " . $param["anioCateo"] . "";
                if ($param["numJuzgado"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["numJuzgado"] != "") {
                $sql .= "SC.cveJuzgado = " . $param["numJuzgado"] . "";
            }
        } else {
            $sql = "SELECT count(C.idCateo) as totalCount ";
            $sql .= "FROM tblsolicitudescateos SC INNER JOIN tblcateos C ON(SC.idSolicitudCateo = C.idSolicitudCateo)";

            if ($param["numeroCateo"] != "" || $param["anioCateo"] != "" || $param["numJuzgado"] != "") {
                $sql .= " WHERE ";
            }

            if ($param["numeroCateo"] != "") {
                $sql .= " C.numeroCateo = " . $param["numeroCateo"] . " ";
                if ($param["numJuzgado"] != "" || $param["anioCateo"] != "") {
                    $sql .= " AND ";
                }
            }
            if ($param["anioCateo"] != "") {
                $sql .= "C.anioCateo = " . $param["anioCateo"] . "";
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
                        $tmp[$contador] = new CateosDTO();
                        $tmp[$contador]->setIdCateo($row["idCateo"]);
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setCveRespuestaSolicitudCateo($row["cveRespuestaSolicitudCateo"]);
                        $tmp[$contador]->setNumeroCateo($row["numeroCateo"]);
                        $tmp[$contador]->setAnioCateo($row["anioCateo"]);
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

    public function consultaCateos($idJuez, $proveedor) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT c.idCateo AS idCateo, s.IdSolicitudCateo AS idSolicitud, j.desJuzgado AS DesJuzgado, c.numeroCateo AS numCateo, ";
        $sql .= " c.anioCateo AS aniCateo, s.carpetaInv AS CarpetaInv, ";
        $sql .= " (SELECT GROUP_CONCAT(desObjeto  SEPARATOR ', ') FROM tblObjetos WHERE idSolicitudCateo = c.idSolicitudCateo) AS objetos, ";
        $sql .= " (SELECT GROUP_CONCAT(nombre, ' ', paterno, ' ', materno SEPARATOR ', ') FROM tblPersonas WHERE idSolicitudCateo = c.idSolicitudCateo) AS personas,";
        $sql .= " DATE_FORMAT(c.fechaRegistro, '%d/%m/%Y %h:%i:%s') AS fechaRegistrocateo ";
        $sql .= " FROM  tblsolicitudescateos AS s, tblcateos AS c , tbljuzgados AS j, ";
        $sql .= " tbljuzgadorescateos AS sj ";
        $sql .= " WHERE ";
        $sql .= " s.cveEstatusSolicitudCateo <= 2 AND ";
        $sql .= " s.idSolicitudCateo = c.idSolicitudCateo AND ";
        $sql .= " sj.IdSolicitudCateo = s.idSolicitudCateo AND ";
        $sql .= " sj.idJuzgador = $idJuez AND";
        $sql .= " s.cveJuzgado = j.cveJuzgado";
        $x = 0;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($rows = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$x]["idCateo"] = $rows["idCateo"];
                    $tmp[$x]["idSolicitud"] = $rows["idSolicitud"];
                    $tmp[$x]["DesJuzgado"] = $rows["DesJuzgado"];
                    $tmp[$x]["numCateo"] = $rows["numCateo"];
                    $tmp[$x]["aniCateo"] = $rows["aniCateo"];
                    $tmp[$x]["CarpetaInv"] = $rows["CarpetaInv"];
                    $tmp[$x]["objetos"] = $rows["objetos"];
                    $tmp[$x]["personas"] = $rows["personas"];
                    $tmp[$x]["fechaRegistrocateo"] = $rows["fechaRegistrocateo"];
                    $x++;
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

    public function consultaDetalleCateos($idCateo, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "select c.idCateo as idCateo, c.idSolicitudCateo as idSolicitudCateo, c.numeroCateo as numCateo, 
	cs.fechaRegistro as fechaSolicitud, c.anioCateo as anio, c.solicitud as solicitud, cs.carpetaInv as carpetaInv,
	cs.nuc as nuc
        from tblcateos c
        inner join  tblsolicitudescateos  cs
        on (c.idSolicitudCateo = cs.idSolicitudCateo)
        where c.idCateo = $idCateo;";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp["data"][$contador]["idSolicitudCateo"] = $row["idSolicitudCateo"];
                    $tmp["data"][$contador]["numero"] = $row["numCateo"];
                    $tmp["data"][$contador]["anio"] = $row["anio"];
                    $tmp["data"][$contador]["carpetaInv"] = $row["carpetaInv"];
                    $tmp["data"][$contador]["nuc"] = $row["nuc"];
                    $tmp["data"][$contador]["observaciones"] = $row["solicitud"];
                    $tmp["data"][$contador]["fechaRegistro"] = $row["fechaSolicitud"];
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

    public function consultaDetalleCateosJuzgado($cateoDto, $idJuzgadoDesahoga, $orden = "", $proveedor = null, $param) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select sc.idSolicitudCateo,sc.numero,sc.anio,sc.cveJuzgado,sc.cveCatAudiencia,sc.cveJuzgadoDesahoga,sc.idReferencia,sc.fechaEnvio,sc.cveTipoCarpeta,sc.carpetaInv,sc.nuc,sc.cveUsuario,sc.cveAdscripcionSolicita,sc.cveEstatusSolicitudCateo,sc.observaciones,sc.fechaRegistro,sc.fechaActualizacion, sc.nip ";
            $sql .= "from tblsolicitudescateos sc ";
            $sql .= "inner join  tblcateos  c ";
            $sql .= "on (sc.idSolicitudCateo = c.idSolicitudCateo) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($cateoDto->getNumeroCateo() != "" && $cateoDto->getNumeroCateo() != 0) {
                $sql .= " and c.numeroCateo = '" . $cateoDto->getNumeroCateo() . "' ";
            }
            if ($cateoDto->getAnioCateo() != "" && $cateoDto->getAnioCateo() != 0) {
                $sql .= " and c.anioCateo = '" . $cateoDto->getAnioCateo() . "' ";
            }
        } else {
            $sql = "select count(sc.idSolicitudCateo) as totalCount ";
            $sql .= "from tblsolicitudescateos sc ";
            $sql .= "inner join  tblcateos  c ";
            $sql .= "on (sc.idSolicitudCateo = c.idSolicitudCateo) ";
            $sql .= "where sc.cveJuzgadoDesahoga = $idJuzgadoDesahoga ";
            if ($cateoDto->getNumeroCateo() != "" && $cateoDto->getNumeroCateo() != 0) {
                $sql .= " and c.numeroCateo = '" . $cateoDto->getNumeroCateo() . "' ";
            }
            if ($cateoDto->getAnioCateo() != "" && $cateoDto->getAnioCateo() != 0) {
                $sql .= " and c.anioCateo = '" . $cateoDto->getAnioCateo() . "' ";
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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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

    public function selectSolicitudesCateosApelacion($solicitudescateosDto, $cateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "select SC.idSolicitudCateo,SC.numero,SC.anio,SC.cveJuzgado,SC.cveCatAudiencia,SC.cveJuzgadoDesahoga,SC.idReferencia,SC.fechaEnvio,SC.cveTipoCarpeta,";
            $sql .= "SC.carpetaInv,SC.nuc,SC.cveUsuario,SC.cveAdscripcionSolicita,SC.cveEstatusSolicitudCateo,SC.observaciones,SC.fechaRegistro,SC.fechaActualizacion ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C, tblapelacioncateos as ac ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "ac.idCateo = C.idCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "select count(SC.idSolicitudCateo) as totalCount ";
            $sql .= "from tbljuzgadorescateos as JC, tblsolicitudescateos as SC, tblcateos as C, tblapelacioncateos as ac ";
            $sql .= "where JC.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and C.idSolicitudCateo = SC.idSolicitudCateo ";
            $sql .= "and ac.idCateo = C.idCateo ";
            if ($solicitudescateosDto->getcveUsuario() != "") {
                $sql .= "and   SC.CveUsuario in (" . $solicitudescateosDto->getcveUsuario() . ") ";
            }
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . " ";
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

        $sql .= " $orden ORDER BY SC.fechaRegistro DESC ";

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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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

    public function selectSolicitudesCateosSecretario($cateosDto, $idSecretario = "", $param = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        if ($param == "" || isset($param["fields"]) == "") {
            $sql = "SELECT SC.* ";
            $sql .= " FROM tblapelacioncateos a";
            $sql .= " inner JOIN tblcateos c ON (a.idCateo = c.idCateo)";
            $sql .= " inner join tblsolicitudescateos SC ON (c.idSolicitudCateo = SC.idSolicitudCateo)";
            $sql .= " WHERE  a.cveUsuarioSecretario = '" . $idSecretario . "' ";
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        } else {
            $sql = "SELECT count(SC.idSolicitudCateo) as totalCount  ";
            $sql .= " FROM tblapelacioncateos a";
            $sql .= " inner JOIN tblcateos c ON (a.idCateo = c.idCateo)";
            $sql .= " inner join tblsolicitudescateos SC ON (c.idSolicitudCateo = SC.idSolicitudCateo)";
            $sql .= " WHERE  a.cveUsuarioSecretario = '" . $idSecretario . "' ";
            if ($cateosDto->getNumeroCateo() != "") {
                $sql .= "and   C.numeroCateo = " . $cateosDto->getNumeroCateo() . " ";
            }
            if ($cateosDto->getAnioCateo() != "") {
                $sql .= "and   C.anioCateo = " . $cateosDto->getAnioCateo() . "";
            }
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql .= " AND a.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND a.fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " AND a.fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND a.fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
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

        $sql .= " ORDER BY a.fechaRegistro DESC ";

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
                        $tmp[$contador] = new SolicitudescateosDTO();
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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
                        $tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
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

}

?>