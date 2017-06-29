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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SolicitudesaudienciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSolicitudesaudiencias($solicitudesaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsolicitudesaudiencias(";
        if ($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia";
            if (($solicitudesaudienciasDto->getCveCatAudiencia() != "") || ($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia";
            if (($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga";
            if (($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion";
            if (($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal";
            if (($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getidReferencia() != "") {
            $sql.="idReferencia";
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaEnvio() != "") {
            $sql.="fechaEnvio";
            if (($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumero() != "") {
            $sql.="numero";
            if (($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getanio() != "") {
            $sql.="anio";
            if (($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getactivo() != "") {
            $sql.="activo";
            if (($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcarpetaInv() != "") {
            $sql.="carpetaInv";
            if (($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnuc() != "") {
            $sql.="nuc";
            if (($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveUsuario() != "") {
            $sql.="cveUsuario";
            if (($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita";
            if (($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getmismoJuzgador() != "") {
            $sql.="mismoJuzgador";
            if (($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getTribunal() != "") {
            $sql.="tribunal";
            if (($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") {
            $sql.="cveEstatusSolicitud";
            if (($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getobservaciones() != "") {
            $sql.="observaciones";
            if (($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumImputados() != "") {
            $sql.="numImputados";
            if (($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumDelitos() != "") {
            $sql.="numDelitos";
            if (($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumOfendidos() != "") {
            $sql.="numOfendidos";
            if (($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveNaturaleza() != "") {
            $sql.="cveNaturaleza";
            if (($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoAudiencia() != "") {
            $sql.="cveTipoAudiencia";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getidSolicitudAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveCatAudiencia() != "") || ($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveCatAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveJuzgadoDesahoga() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgado() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveJuzgado() . "'";
            if (($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveConsignacion() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveConsignacion() . "'";
            if (($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveEtapaProcesal() . "'";
            if (($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getidReferencia() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getidReferencia() . "'";
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaRegistro() != "") {
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaActualizacion() != "") {
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaEnvio() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getfechaEnvio() . "'";
            if (($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveTipoCarpeta() . "'";
            if (($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumero() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getnumero() . "'";
            if (($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getanio() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getanio() . "'";
            if (($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getactivo() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getactivo() . "'";
            if (($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcarpetaInv() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcarpetaInv() . "'";
            if (($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnuc() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getnuc() . "'";
            if (($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveUsuario() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveUsuario() . "'";
            if (($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveAdscripcionSolicita() . "'";
            if (($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getmismoJuzgador() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getmismoJuzgador() . "'";
            if (($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getTribunal() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getTribunal() . "'";
            if (($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveEstatusSolicitud() . "'";
            if (($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getobservaciones() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getobservaciones() . "'";
            if (($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumImputados() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getnumImputados() . "'";
            if (($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumDelitos() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getnumDelitos() . "'";
            if (($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumOfendidos() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getnumOfendidos() . "'";
            if (($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveNaturaleza() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveNaturaleza() . "'";
            if (($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoAudiencia() != "") {
            $sql.="'" . $solicitudesaudienciasDto->getcveTipoAudiencia() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesaudienciasDTO();
            $tmp->setidSolicitudAudiencia($this->_proveedor->lastID());
            $tmp = $this->selectSolicitudesaudiencias($tmp, "", "", $this->_proveedor);
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

    public function updateSolicitudesaudiencias($solicitudesaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsolicitudesaudiencias SET ";
        if ($solicitudesaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia='" . $solicitudesaudienciasDto->getcveCatAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga='" . $solicitudesaudienciasDto->getcveJuzgadoDesahoga() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesaudienciasDto->getcveJuzgado() . "'";
            if (($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion='" . $solicitudesaudienciasDto->getcveConsignacion() . "'";
            if (($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $solicitudesaudienciasDto->getcveEtapaProcesal() . "'";
            if (($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesaudienciasDto->getidReferencia() . "'";
            if (($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $solicitudesaudienciasDto->getfechaRegistro() . "'";
            if (($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $solicitudesaudienciasDto->getfechaActualizacion() . "'";
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getfechaEnvio() != "") {
            $sql.="fechaEnvio='" . $solicitudesaudienciasDto->getfechaEnvio() . "'";
            if (($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesaudienciasDto->getcveTipoCarpeta() . "'";
            if (($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumero() != "") {
            $sql.="numero='" . $solicitudesaudienciasDto->getnumero() . "'";
            if (($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getanio() != "") {
            $sql.="anio='" . $solicitudesaudienciasDto->getanio() . "'";
            if (($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getactivo() != "") {
            $sql.="activo='" . $solicitudesaudienciasDto->getactivo() . "'";
            if (($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcarpetaInv() != "") {
            $sql.="carpetaInv='" . $solicitudesaudienciasDto->getcarpetaInv() . "'";
            if (($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnuc() != "") {
            $sql.="nuc='" . $solicitudesaudienciasDto->getnuc() . "'";
            if (($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $solicitudesaudienciasDto->getcveUsuario() . "'";
            if (($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $solicitudesaudienciasDto->getcveAdscripcionSolicita() . "'";
            if (($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getmismoJuzgador() != "") {
            $sql.="mismoJuzgador='" . $solicitudesaudienciasDto->getmismoJuzgador() . "'";
            if (($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getTribunal() != "") {
            $sql.="tribunal='" . $solicitudesaudienciasDto->getTribunal() . "'";
            if (($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") {
            $sql.="cveEstatusSolicitud='" . $solicitudesaudienciasDto->getcveEstatusSolicitud() . "'";
            if (($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getobservaciones() != "") {
            $sql.="observaciones='" . $solicitudesaudienciasDto->getobservaciones() . "'";
            if (($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumImputados() != "") {
            $sql.="numImputados='" . $solicitudesaudienciasDto->getnumImputados() . "'";
            if (($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumDelitos() != "") {
            $sql.="numDelitos='" . $solicitudesaudienciasDto->getnumDelitos() . "'";
            if (($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getnumOfendidos() != "") {
            $sql.="numOfendidos='" . $solicitudesaudienciasDto->getnumOfendidos() . "'";
            if (($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveNaturaleza() != "") {
            $sql.="cveNaturaleza='" . $solicitudesaudienciasDto->getcveNaturaleza() . "'";
            if (($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoAudiencia() != "") {
            $sql.="cveTipoAudiencia='" . $solicitudesaudienciasDto->getcveTipoAudiencia() . "'";
        }
        $sql.=" WHERE idSolicitudAudiencia='" . $solicitudesaudienciasDto->getidSolicitudAudiencia() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesaudienciasDTO();
            $tmp->setidSolicitudAudiencia($solicitudesaudienciasDto->getidSolicitudAudiencia());
            $tmp = $this->selectSolicitudesaudiencias($tmp, "", "", $this->_proveedor);
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

    public function deleteSolicitudesaudiencias($solicitudesaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsolicitudesaudiencias  WHERE idSolicitudAudiencia='" . $solicitudesaudienciasDto->getidSolicitudAudiencia() . "'";
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

    public function selectSolicitudesaudiencias($solicitudesaudienciasDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idSolicitudAudiencia,cveCatAudiencia,cveJuzgadoDesahoga,cveJuzgado,cveConsignacion,cveEtapaProcesal,idReferencia,fechaRegistro,fechaActualizacion,fechaEnvio,cveTipoCarpeta,numero,anio,activo,carpetaInv,nuc,cveUsuario,cveAdscripcionSolicita,mismoJuzgador,tribunal,cveEstatusSolicitud,observaciones,numImputados,numDelitos,numOfendidos,cveNaturaleza,cveTipoAudiencia FROM tblsolicitudesaudiencias ";
        if (($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") || ($solicitudesaudienciasDto->getcveCatAudiencia() != "") || ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getcveJuzgado() != "") || ($solicitudesaudienciasDto->getcveConsignacion() != "") || ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getidReferencia() != "") || ($solicitudesaudienciasDto->getfechaRegistro() != "") || ($solicitudesaudienciasDto->getfechaActualizacion() != "") || ($solicitudesaudienciasDto->getfechaEnvio() != "") || ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getnumero() != "") || ($solicitudesaudienciasDto->getanio() != "") || ($solicitudesaudienciasDto->getactivo() != "") || ($solicitudesaudienciasDto->getcarpetaInv() != "") || ($solicitudesaudienciasDto->getnuc() != "") || ($solicitudesaudienciasDto->getcveUsuario() != "") || ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getmismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getobservaciones() != "") || ($solicitudesaudienciasDto->getnumImputados() != "") || ($solicitudesaudienciasDto->getnumDelitos() != "") || ($solicitudesaudienciasDto->getnumOfendidos() != "") || ($solicitudesaudienciasDto->getcveNaturaleza() != "") || ($solicitudesaudienciasDto->getcveTipoAudiencia() != "")) {
            $sql.=" WHERE ";
        }
        if ($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $solicitudesaudienciasDto->getIdSolicitudAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveCatAudiencia() != "") || ($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia='" . $solicitudesaudienciasDto->getCveCatAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga='" . $solicitudesaudienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesaudienciasDto->getCveJuzgado() . "'";
            if (($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion='" . $solicitudesaudienciasDto->getCveConsignacion() . "'";
            if (($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $solicitudesaudienciasDto->getCveEtapaProcesal() . "'";
            if (($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesaudienciasDto->getIdReferencia() . "'";
            if (($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $solicitudesaudienciasDto->getFechaRegistro() . "'";
            if (($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $solicitudesaudienciasDto->getFechaActualizacion() . "'";
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaEnvio() != "") {
            $sql.="fechaEnvio='" . $solicitudesaudienciasDto->getFechaEnvio() . "'";
            if (($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesaudienciasDto->getCveTipoCarpeta() . "'";
            if (($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumero() != "") {
            $sql.="numero='" . $solicitudesaudienciasDto->getNumero() . "'";
            if (($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getanio() != "") {
            $sql.="anio='" . $solicitudesaudienciasDto->getAnio() . "'";
            if (($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getactivo() != "") {
            $sql.="activo='" . $solicitudesaudienciasDto->getActivo() . "'";
            if (($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcarpetaInv() != "") {
            $sql.="carpetaInv='" . $solicitudesaudienciasDto->getCarpetaInv() . "'";
            if (($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnuc() != "") {
            $sql.="nuc='" . $solicitudesaudienciasDto->getNuc() . "'";
            if (($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $solicitudesaudienciasDto->getCveUsuario() . "'";
            if (($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $solicitudesaudienciasDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getmismoJuzgador() != "") {
            $sql.="mismoJuzgador='" . $solicitudesaudienciasDto->getMismoJuzgador() . "'";
            if (($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getTribunal() != "") {
            $sql.="tribunal='" . $solicitudesaudienciasDto->getTribunal() . "'";
            if (($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") {
            $sql.="cveEstatusSolicitud='" . $solicitudesaudienciasDto->getCveEstatusSolicitud() . "'";
            if (($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getobservaciones() != "") {
            $sql.="observaciones='" . $solicitudesaudienciasDto->getObservaciones() . "'";
            if (($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumImputados() != "") {
            $sql.="numImputados='" . $solicitudesaudienciasDto->getNumImputados() . "'";
            if (($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumDelitos() != "") {
            $sql.="numDelitos='" . $solicitudesaudienciasDto->getNumDelitos() . "'";
            if (($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumOfendidos() != "") {
            $sql.="numOfendidos='" . $solicitudesaudienciasDto->getNumOfendidos() . "'";
            if (($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveNaturaleza() != "") {
            $sql.="cveNaturaleza='" . $solicitudesaudienciasDto->getCveNaturaleza() . "'";
            if (($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoAudiencia() != "") {
            $sql.="cveTipoAudiencia='" . $solicitudesaudienciasDto->getCveTipoAudiencia() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "") {
            if ($param['fechaInicialConsulta'] != "" && $param['fechaInicialConsulta'] != 0 &&
                    $param['fechaFinalConsulta'] != "" && $param['fechaFinalConsulta'] != 0) {
                if ($param['fechaInicialConsulta'] == $param['fechaFinalConsulta']) {
                    $sql.= " AND fechaRegistro >= '" . $param['fechaInicialConsulta'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaInicialConsulta'] . " 23:59:59'";
                } else {
                    $sql.= " AND fechaRegistro >= '" . $param['fechaInicialConsulta'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaFinalConsulta'] . " 23:59:59'";
                }
            }
        }
        $sql.= " order by idSolicitudAudiencia DESC";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new SolicitudesaudienciasDTO();
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
                    $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                    $tmp[$contador]->setNuc($row["nuc"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setMismoJuzgador($row["mismoJuzgador"]);
                    $tmp[$contador]->setTribunal($row["tribunal"]);
                    $tmp[$contador]->setCveEstatusSolicitud($row["cveEstatusSolicitud"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setNumImputados($row["numImputados"]);
                    $tmp[$contador]->setNumDelitos($row["numDelitos"]);
                    $tmp[$contador]->setNumOfendidos($row["numOfendidos"]);
                    $tmp[$contador]->setCveNaturaleza($row["cveNaturaleza"]);
                    $tmp[$contador]->setCveTipoAudiencia($row["cveTipoAudiencia"]);
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

    public function selectSolicitudesaudienciasGeneral($solicitudesaudienciasDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
//        $inicial = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " idSolicitudAudiencia,cveCatAudiencia,cveJuzgadoDesahoga,cveJuzgado,cveConsignacion,cveEtapaProcesal,idReferencia,fechaRegistro,fechaActualizacion,fechaEnvio,cveTipoCarpeta,numero,anio,activo,carpetaInv,nuc,cveUsuario,cveAdscripcionSolicita,mismoJuzgador,tribunal,cveEstatusSolicitud,observaciones,numImputados,numDelitos,numOfendidos,cveNaturaleza,cveTipoAudiencia ";
        } else {
            $sql .= $fields;
        }
        $sql .= "FROM tblsolicitudesaudiencias";
        if (($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") || ($solicitudesaudienciasDto->getcveCatAudiencia() != "") || ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getcveJuzgado() != "") || ($solicitudesaudienciasDto->getcveConsignacion() != "") || ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getidReferencia() != "") || ($solicitudesaudienciasDto->getfechaRegistro() != "") || ($solicitudesaudienciasDto->getfechaActualizacion() != "") || ($solicitudesaudienciasDto->getfechaEnvio() != "") || ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getnumero() != "") || ($solicitudesaudienciasDto->getanio() != "") || ($solicitudesaudienciasDto->getactivo() != "") || ($solicitudesaudienciasDto->getcarpetaInv() != "") || ($solicitudesaudienciasDto->getnuc() != "") || ($solicitudesaudienciasDto->getcveUsuario() != "") || ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getmismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getobservaciones() != "") || ($solicitudesaudienciasDto->getnumImputados() != "") || ($solicitudesaudienciasDto->getnumDelitos() != "") || ($solicitudesaudienciasDto->getnumOfendidos() != "") || ($solicitudesaudienciasDto->getcveNaturaleza() != "") || ($solicitudesaudienciasDto->getcveTipoAudiencia() != "")) {
            $sql.=" WHERE ";
        }
        if ($solicitudesaudienciasDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $solicitudesaudienciasDto->getIdSolicitudAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveCatAudiencia() != "") || ($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia='" . $solicitudesaudienciasDto->getCveCatAudiencia() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgadoDesahoga() != "") || ($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql.="cveJuzgadoDesahoga='" . $solicitudesaudienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($solicitudesaudienciasDto->getCveJuzgado() != "") || ($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesaudienciasDto->getCveJuzgado() . "'";
            if (($solicitudesaudienciasDto->getCveConsignacion() != "") || ($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion='" . $solicitudesaudienciasDto->getCveConsignacion() . "'";
            if (($solicitudesaudienciasDto->getCveEtapaProcesal() != "") || ($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $solicitudesaudienciasDto->getCveEtapaProcesal() . "'";
            if (($solicitudesaudienciasDto->getIdReferencia() != "") || ($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesaudienciasDto->getIdReferencia() . "'";
            if (($solicitudesaudienciasDto->getFechaRegistro() != "") || ($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $solicitudesaudienciasDto->getFechaRegistro() . "'";
            if (($solicitudesaudienciasDto->getFechaActualizacion() != "") || ($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $solicitudesaudienciasDto->getFechaActualizacion() . "'";
            if (($solicitudesaudienciasDto->getFechaEnvio() != "") || ($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getfechaEnvio() != "") {
            $sql.="fechaEnvio='" . $solicitudesaudienciasDto->getFechaEnvio() . "'";
            if (($solicitudesaudienciasDto->getCveTipoCarpeta() != "") || ($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesaudienciasDto->getCveTipoCarpeta() . "'";
            if (($solicitudesaudienciasDto->getNumero() != "") || ($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumero() != "") {
            $sql.="numero='" . $solicitudesaudienciasDto->getNumero() . "'";
            if (($solicitudesaudienciasDto->getAnio() != "") || ($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getanio() != "") {
            $sql.="anio='" . $solicitudesaudienciasDto->getAnio() . "'";
            if (($solicitudesaudienciasDto->getActivo() != "") || ($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getactivo() != "") {
            $sql.="activo='" . $solicitudesaudienciasDto->getActivo() . "'";
            if (($solicitudesaudienciasDto->getCarpetaInv() != "") || ($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcarpetaInv() != "") {
            $sql.="carpetaInv='" . $solicitudesaudienciasDto->getCarpetaInv() . "'";
            if (($solicitudesaudienciasDto->getNuc() != "") || ($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnuc() != "") {
            $sql.="nuc='" . $solicitudesaudienciasDto->getNuc() . "'";
            if (($solicitudesaudienciasDto->getCveUsuario() != "") || ($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $solicitudesaudienciasDto->getCveUsuario() . "'";
            if (($solicitudesaudienciasDto->getCveAdscripcionSolicita() != "") || ($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $solicitudesaudienciasDto->getCveAdscripcionSolicita() . "'";
            if (($solicitudesaudienciasDto->getMismoJuzgador() != "") || ($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getmismoJuzgador() != "") {
            $sql.="mismoJuzgador='" . $solicitudesaudienciasDto->getMismoJuzgador() . "'";
            if (($solicitudesaudienciasDto->getTribunal() != "") || ($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getTribunal() != "") {
            $sql.="tribunal='" . $solicitudesaudienciasDto->getTribunal() . "'";
            if (($solicitudesaudienciasDto->getCveEstatusSolicitud() != "") || ($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveEstatusSolicitud() != "") {
            $sql.="cveEstatusSolicitud='" . $solicitudesaudienciasDto->getCveEstatusSolicitud() . "'";
            if (($solicitudesaudienciasDto->getObservaciones() != "") || ($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getobservaciones() != "") {
            $sql.="observaciones='" . $solicitudesaudienciasDto->getObservaciones() . "'";
            if (($solicitudesaudienciasDto->getNumImputados() != "") || ($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumImputados() != "") {
            $sql.="numImputados='" . $solicitudesaudienciasDto->getNumImputados() . "'";
            if (($solicitudesaudienciasDto->getNumDelitos() != "") || ($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumDelitos() != "") {
            $sql.="numDelitos='" . $solicitudesaudienciasDto->getNumDelitos() . "'";
            if (($solicitudesaudienciasDto->getNumOfendidos() != "") || ($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getnumOfendidos() != "") {
            $sql.="numOfendidos='" . $solicitudesaudienciasDto->getNumOfendidos() . "'";
            if (($solicitudesaudienciasDto->getCveNaturaleza() != "") || ($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveNaturaleza() != "") {
            $sql.="cveNaturaleza='" . $solicitudesaudienciasDto->getCveNaturaleza() . "'";
            if (($solicitudesaudienciasDto->getCveTipoAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesaudienciasDto->getcveTipoAudiencia() != "") {
            $sql.="cveTipoAudiencia='" . $solicitudesaudienciasDto->getCveTipoAudiencia() . "'";
        }
//            print_r($param);
        if ($param != "") {
            if ($param['fechaInicialConsulta'] != "" && $param['fechaInicialConsulta'] != 0 &&
                    $param['fechaFinalConsulta'] != "" && $param['fechaFinalConsulta'] != 0) {
                if ($param['fechaInicialConsulta'] == $param['fechaFinalConsulta']) {
                    $sql.= " AND fechaRegistro >= '" . $param['fechaInicialConsulta'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaInicialConsulta'] . " 23:59:59'";
                } else {
                    $sql.= " AND fechaRegistro >= '" . $param['fechaInicialConsulta'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaFinalConsulta'] . " 23:59:59'";
                }
            }
//                print_r($param);
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
            $sql.= " order by idSolicitudAudiencia DESC";
        }
//        echo $sql;

        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }

        }

        error_log("sql => " . $sql);
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new SolicitudesaudienciasDTO();
                        $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
                        $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setFechaEnvio($row["fechaEnvio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setMismoJuzgador($row["mismoJuzgador"]);
                        $tmp[$contador]->setTribunal($row["tribunal"]);
                        $tmp[$contador]->setCveEstatusSolicitud($row["cveEstatusSolicitud"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setNumImputados($row["numImputados"]);
                        $tmp[$contador]->setNumDelitos($row["numDelitos"]);
                        $tmp[$contador]->setNumOfendidos($row["numOfendidos"]);
                        $tmp[$contador]->setCveNaturaleza($row["cveNaturaleza"]);
                        $tmp[$contador]->setCveTipoAudiencia($row["cveTipoAudiencia"]);
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