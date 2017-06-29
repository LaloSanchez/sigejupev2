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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class CarpetasjudicialesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertCarpetasjudiciales($carpetasjudicialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcarpetasjudiciales(";
        if ($carpetasjudicialesDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($carpetasjudicialesDto->getCveEtapaProcesal() != "") || ($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal";
            if (($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion";
            if (($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getCveConsignacionA() != "") {
            $sql.="cveConsignacionA";
            if (($carpetasjudicialesDto->getnumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumero() != "") {
            $sql.="numero";
            if (($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getanio() != "") {
            $sql.="anio";
            if (($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaRadicacion() != "") {
            $sql.="fechaRadicacion";
            if (($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getactivo() != "") {
            $sql.="activo";
            if (($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcarpetaInv() != "") {
            $sql.="carpetaInv";
            if (($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnuc() != "") {
            $sql.="nuc";
            if (($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveUsuario() != "") {
            $sql.="cveUsuario";
            if (($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getobservaciones() != "") {
            $sql.="observaciones";
            if (($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumImputados() != "") {
            $sql.="numImputados";
            if (($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumOfendidos() != "") {
            $sql.="numOfendidos";
            if (($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumDelitos() != "") {
            $sql.="numDelitos";
            if (($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEstatusCarpeta() != "") {
            $sql.="cveEstatusCarpeta";
            if (($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getincompetencia() != "") {
            $sql.="incompetencia";
            if (($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoIncompetencia() != "") {
            $sql.="cveTipoIncompetencia";
            if (($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getacumulado() != "") {
            $sql.="acumulado";
            if (($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumAcumulado() != "") {
            $sql.="numAcumulado";
            if (($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaTermino() != "") {
            $sql.="fechaTermino";
            if (($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConclucion() != "") {
            $sql.="cveConclucion";
            if (($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getponderacion() != "") {
            $sql.="ponderacion";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($carpetasjudicialesDto->getidCarpetaJudicial() != "") {
            $sql.="'" . $carpetasjudicialesDto->getidCarpetaJudicial() . "'";
            if (($carpetasjudicialesDto->getCveEtapaProcesal() != "") || ($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEtapaProcesal() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveEtapaProcesal() . "'";
            if (($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConsignacion() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveConsignacion() . "'";
            if (($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveTipoCarpeta() . "'";
            if (($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getCveConsignacionA() != "") {
            $sql.="'" . $carpetasjudicialesDto->getCveConsignacionA() . "'";
            if (($carpetasjudicialesDto->getnumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumero() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnumero() . "'";
            if (($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getanio() != "") {
            $sql.="'" . $carpetasjudicialesDto->getanio() . "'";
            if (($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaRadicacion() != "") {
            $sql.="'" . $carpetasjudicialesDto->getfechaRadicacion() . "'";
            if (($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getactivo() != "") {
            $sql.="'" . $carpetasjudicialesDto->getactivo() . "'";
            if (($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveJuzgado() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveJuzgado() . "'";
            if (($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcarpetaInv() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcarpetaInv() . "'";
            if (($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnuc() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnuc() . "'";
            if (($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveUsuario() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveUsuario() . "'";
            if (($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getobservaciones() != "") {
            $sql.="'" . $carpetasjudicialesDto->getobservaciones() . "'";
            if (($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumImputados() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnumImputados() . "'";
            if (($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumOfendidos() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnumOfendidos() . "'";
            if (($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumDelitos() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnumDelitos() . "'";
            if (($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEstatusCarpeta() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveEstatusCarpeta() . "'";
            if (($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getincompetencia() != "") {
            $sql.="'" . $carpetasjudicialesDto->getincompetencia() . "'";
            if (($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoIncompetencia() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveTipoIncompetencia() . "'";
            if (($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getacumulado() != "") {
            $sql.="'" . $carpetasjudicialesDto->getacumulado() . "'";
            if (($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumAcumulado() != "") {
            $sql.="'" . $carpetasjudicialesDto->getnumAcumulado() . "'";
            if (($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaTermino() != "") {
            $sql.="'" . $carpetasjudicialesDto->getfechaTermino() . "'";
            if (($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConclucion() != "") {
            $sql.="'" . $carpetasjudicialesDto->getcveConclucion() . "'";
            if (($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getponderacion() != "") {
            $sql.="'" . $carpetasjudicialesDto->getponderacion() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CarpetasjudicialesDTO();
            $tmp->setidCarpetaJudicial($this->_proveedor->lastID());
            $tmp = $this->selectCarpetasjudiciales($tmp, "", $this->_proveedor);
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

    public function updateCarpetasjudiciales($carpetasjudicialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcarpetasjudiciales SET ";
        if ($carpetasjudicialesDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $carpetasjudicialesDto->getidCarpetaJudicial() . "'";
            if (($carpetasjudicialesDto->getCveEtapaProcesal() != "") || ($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $carpetasjudicialesDto->getcveEtapaProcesal() . "'";
            if (($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion='" . $carpetasjudicialesDto->getcveConsignacion() . "'";
            if (($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $carpetasjudicialesDto->getcveTipoCarpeta() . "'";
            if (($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getCveConsignacionA() != "") {
            $sql.="cveConsignacionA='" . $carpetasjudicialesDto->getCveConsignacionA() . "'";
            if (($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumero() != "") {
            $sql.="numero='" . $carpetasjudicialesDto->getnumero() . "'";
            if (($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getanio() != "") {
            $sql.="anio='" . $carpetasjudicialesDto->getanio() . "'";
            if (($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaRadicacion() != "") {
            $sql.="fechaRadicacion='" . $carpetasjudicialesDto->getfechaRadicacion() . "'";
            if (($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $carpetasjudicialesDto->getfechaRegistro() . "'";
            if (($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $carpetasjudicialesDto->getfechaActualizacion() . "'";
            if (($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getactivo() != "") {
            $sql.="activo='" . $carpetasjudicialesDto->getactivo() . "'";
            if (($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $carpetasjudicialesDto->getcveJuzgado() . "'";
            if (($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcarpetaInv() != "") {
            $sql.="carpetaInv='" . $carpetasjudicialesDto->getcarpetaInv() . "'";
            if (($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnuc() != "") {
            $sql.="nuc='" . $carpetasjudicialesDto->getnuc() . "'";
            if (($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $carpetasjudicialesDto->getcveUsuario() . "'";
            if (($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getobservaciones() != "") {
            $sql.="observaciones='" . $carpetasjudicialesDto->getobservaciones() . "'";
            if (($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumImputados() != "") {
            $sql.="numImputados='" . $carpetasjudicialesDto->getnumImputados() . "'";
            if (($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumOfendidos() != "") {
            $sql.="numOfendidos='" . $carpetasjudicialesDto->getnumOfendidos() . "'";
            if (($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumDelitos() != "") {
            $sql.="numDelitos='" . $carpetasjudicialesDto->getnumDelitos() . "'";
            if (($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveEstatusCarpeta() != "") {
            $sql.="cveEstatusCarpeta='" . $carpetasjudicialesDto->getcveEstatusCarpeta() . "'";
            if (($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getincompetencia() != "") {
            $sql.="incompetencia='" . $carpetasjudicialesDto->getincompetencia() . "'";
            if (($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoIncompetencia() != "") {
            $sql.="cveTipoIncompetencia='" . $carpetasjudicialesDto->getcveTipoIncompetencia() . "'";
            if (($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getacumulado() != "") {
            $sql.="acumulado='" . $carpetasjudicialesDto->getacumulado() . "'";
            if (($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getnumAcumulado() != "") {
            $sql.="numAcumulado='" . $carpetasjudicialesDto->getnumAcumulado() . "'";
            if (($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getfechaTermino() != "") {
            $sql.="fechaTermino='" . $carpetasjudicialesDto->getfechaTermino() . "'";
            if (($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getcveConclucion() != "") {
            $sql.="cveConclucion='" . $carpetasjudicialesDto->getcveConclucion() . "'";
            if (($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=",";
            }
        }
        if ($carpetasjudicialesDto->getponderacion() != "") {
            $sql.="ponderacion='" . $carpetasjudicialesDto->getponderacion() . "'";
        }
        $sql.=" WHERE idCarpetaJudicial='" . $carpetasjudicialesDto->getidCarpetaJudicial() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CarpetasjudicialesDTO();
            $tmp->setidCarpetaJudicial($carpetasjudicialesDto->getidCarpetaJudicial());
            $tmp = $this->selectCarpetasjudiciales($tmp, "", $this->_proveedor);
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

    public function deleteCarpetasjudiciales($carpetasjudicialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcarpetasjudiciales  WHERE idCarpetaJudicial='" . $carpetasjudicialesDto->getidCarpetaJudicial() . "'";
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

    public function selectCarpetasjudiciales($carpetasjudicialesDto, $orden = "", $proveedor = null, $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if ($fields === null) {
            $sql = "SELECT idCarpetaJudicial,cveEtapaProcesal,cveConsignacion,cveTipoCarpeta,cveConsignacionA,numero,anio,fechaRadicacion,fechaRegistro,fechaActualizacion,activo,cveJuzgado,carpetaInv,nuc,cveUsuario,observaciones,numImputados,numOfendidos,numDelitos,cveEstatusCarpeta,incompetencia,cveTipoIncompetencia,acumulado,numAcumulado,fechaTermino,cveConclucion,ponderacion ";
        } else {
            $sql.=$fields;
        }
        $sql.=" FROM tblcarpetasjudiciales ";
        if (($carpetasjudicialesDto->getidCarpetaJudicial() != "") || ($carpetasjudicialesDto->getcveEtapaProcesal() != "") || ($carpetasjudicialesDto->getcveConsignacion() != "") || ($carpetasjudicialesDto->getcveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getnumero() != "") || ($carpetasjudicialesDto->getanio() != "") || ($carpetasjudicialesDto->getfechaRadicacion() != "") || ($carpetasjudicialesDto->getfechaRegistro() != "") || ($carpetasjudicialesDto->getfechaActualizacion() != "") || ($carpetasjudicialesDto->getactivo() != "") || ($carpetasjudicialesDto->getcveJuzgado() != "") || ($carpetasjudicialesDto->getcarpetaInv() != "") || ($carpetasjudicialesDto->getnuc() != "") || ($carpetasjudicialesDto->getcveUsuario() != "") || ($carpetasjudicialesDto->getobservaciones() != "") || ($carpetasjudicialesDto->getnumImputados() != "") || ($carpetasjudicialesDto->getnumOfendidos() != "") || ($carpetasjudicialesDto->getnumDelitos() != "") || ($carpetasjudicialesDto->getcveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getincompetencia() != "") || ($carpetasjudicialesDto->getcveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getacumulado() != "") || ($carpetasjudicialesDto->getnumAcumulado() != "") || ($carpetasjudicialesDto->getfechaTermino() != "") || ($carpetasjudicialesDto->getcveConclucion() != "") || ($carpetasjudicialesDto->getponderacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($carpetasjudicialesDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $carpetasjudicialesDto->getIdCarpetaJudicial() . "'";
            if (($carpetasjudicialesDto->getCveEtapaProcesal() != "") || ($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $carpetasjudicialesDto->getCveEtapaProcesal() . "'";
            if (($carpetasjudicialesDto->getCveConsignacion() != "") || ($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveConsignacion() != "") {
            $sql.="cveConsignacion='" . $carpetasjudicialesDto->getCveConsignacion() . "'";
            if (($carpetasjudicialesDto->getCveTipoCarpeta() != "") || ($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $carpetasjudicialesDto->getCveTipoCarpeta() . "'";
            if (($carpetasjudicialesDto->getCveConsignacionA() != "") || ($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getCveConsignacionA() != "") {
            $sql.="cveConsignacionA='" . $carpetasjudicialesDto->getCveConsignacionA() . "'";
            if (($carpetasjudicialesDto->getNumero() != "") || ($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnumero() != "") {
            $sql.="numero='" . $carpetasjudicialesDto->getNumero() . "'";
            if (($carpetasjudicialesDto->getAnio() != "") || ($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getanio() != "") {
            $sql.="anio='" . $carpetasjudicialesDto->getAnio() . "'";
            if (($carpetasjudicialesDto->getFechaRadicacion() != "") || ($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getfechaRadicacion() != "") {
            $sql.="fechaRadicacion='" . $carpetasjudicialesDto->getFechaRadicacion() . "'";
            if (($carpetasjudicialesDto->getFechaRegistro() != "") || ($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $carpetasjudicialesDto->getFechaRegistro() . "'";
            if (($carpetasjudicialesDto->getFechaActualizacion() != "") || ($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $carpetasjudicialesDto->getFechaActualizacion() . "'";
            if (($carpetasjudicialesDto->getActivo() != "") || ($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getactivo() != "") {
            $sql.="activo='" . $carpetasjudicialesDto->getActivo() . "'";
            if (($carpetasjudicialesDto->getCveJuzgado() != "") || ($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $carpetasjudicialesDto->getCveJuzgado() . "'";
            if (($carpetasjudicialesDto->getCarpetaInv() != "") || ($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcarpetaInv() != "") {
            $sql.="carpetaInv='" . $carpetasjudicialesDto->getCarpetaInv() . "'";
            if (($carpetasjudicialesDto->getNuc() != "") || ($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnuc() != "") {
            $sql.="nuc='" . $carpetasjudicialesDto->getNuc() . "'";
            if (($carpetasjudicialesDto->getCveUsuario() != "") || ($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $carpetasjudicialesDto->getCveUsuario() . "'";
            if (($carpetasjudicialesDto->getObservaciones() != "") || ($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getobservaciones() != "") {
            $sql.="observaciones='" . $carpetasjudicialesDto->getObservaciones() . "'";
            if (($carpetasjudicialesDto->getNumImputados() != "") || ($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnumImputados() != "") {
            $sql.="numImputados='" . $carpetasjudicialesDto->getNumImputados() . "'";
            if (($carpetasjudicialesDto->getNumOfendidos() != "") || ($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnumOfendidos() != "") {
            $sql.="numOfendidos='" . $carpetasjudicialesDto->getNumOfendidos() . "'";
            if (($carpetasjudicialesDto->getNumDelitos() != "") || ($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnumDelitos() != "") {
            $sql.="numDelitos='" . $carpetasjudicialesDto->getNumDelitos() . "'";
            if (($carpetasjudicialesDto->getCveEstatusCarpeta() != "") || ($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveEstatusCarpeta() != "") {
            $sql.="cveEstatusCarpeta='" . $carpetasjudicialesDto->getCveEstatusCarpeta() . "'";
            if (($carpetasjudicialesDto->getIncompetencia() != "") || ($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getincompetencia() != "") {
            $sql.="incompetencia='" . $carpetasjudicialesDto->getIncompetencia() . "'";
            if (($carpetasjudicialesDto->getCveTipoIncompetencia() != "") || ($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveTipoIncompetencia() != "") {
            $sql.="cveTipoIncompetencia='" . $carpetasjudicialesDto->getCveTipoIncompetencia() . "'";
            if (($carpetasjudicialesDto->getAcumulado() != "") || ($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getacumulado() != "") {
            $sql.="acumulado='" . $carpetasjudicialesDto->getAcumulado() . "'";
            if (($carpetasjudicialesDto->getNumAcumulado() != "") || ($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getnumAcumulado() != "") {
            $sql.="numAcumulado='" . $carpetasjudicialesDto->getNumAcumulado() . "'";
            if (($carpetasjudicialesDto->getFechaTermino() != "") || ($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getfechaTermino() != "") {
            $sql.="fechaTermino='" . $carpetasjudicialesDto->getFechaTermino() . "'";
            if (($carpetasjudicialesDto->getCveConclucion() != "") || ($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getcveConclucion() != "") {
            $sql.="cveConclucion='" . $carpetasjudicialesDto->getCveConclucion() . "'";
            if (($carpetasjudicialesDto->getPonderacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($carpetasjudicialesDto->getponderacion() != "") {
            $sql.="ponderacion='" . $carpetasjudicialesDto->getPonderacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $inicial = "";
        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new CarpetasjudicialesDTO();
                        $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                        $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
                        $tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setCveConsignacionA($row["cveConsignacionA"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setFechaRadicacion($row["fechaRadicacion"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setNumImputados($row["numImputados"]);
                        $tmp[$contador]->setNumOfendidos($row["numOfendidos"]);
                        $tmp[$contador]->setNumDelitos($row["numDelitos"]);
                        $tmp[$contador]->setCveEstatusCarpeta($row["cveEstatusCarpeta"]);
                        $tmp[$contador]->setIncompetencia($row["incompetencia"]);
                        $tmp[$contador]->setCveTipoIncompetencia($row["cveTipoIncompetencia"]);
                        $tmp[$contador]->setAcumulado($row["acumulado"]);
                        $tmp[$contador]->setNumAcumulado($row["numAcumulado"]);
                        $tmp[$contador]->setFechaTermino($row["fechaTermino"]);
                        $tmp[$contador]->setCveConclucion($row["cveConclucion"]);
                        $tmp[$contador]->setPonderacion($row["ponderacion"]);
                    } else { // HSAY VA 
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = $row[$fieldInfo->name];
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    /*
     * Método para aperturar una carpeta judicial
     * @param $carpetasjudicialesDto
     * return $carpetasjudicialesDto
     */

    public function aperturarCarpeta($carpetasjudicialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcarpetasjudiciales
                SET cveConclucion=NULL
                , fechaActualizacion=NOW()
                , fechaTermino=NULL
                , cveEstatusCarpeta=" . $carpetasjudicialesDto->getCveEstatusCarpeta();
        $sql .= " WHERE idCarpetaJudicial=" . $carpetasjudicialesDto->getIdCarpetaJudicial();
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CarpetasjudicialesDTO();
            $tmp->setidCarpetaJudicial($carpetasjudicialesDto->getidCarpetaJudicial());
            $tmp = $this->selectCarpetasjudiciales($tmp, "", $this->_proveedor);
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

    public function eliminaCarpetaJudicial($carpetasjudicialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcarpetasjudiciales SET ";
        $sql.=" activo= 'N'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idCarpetaJudicial='" . $carpetasjudicialesDto->getIdCarpetaJudicial() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CarpetasjudicialesDTO();
            $tmp->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
            $tmp = $this->selectCarpetasjudiciales($tmp, "", $this->_proveedor);
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