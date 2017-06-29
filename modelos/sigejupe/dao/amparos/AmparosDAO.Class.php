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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AmparosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAmparos($amparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblamparos(";
        if ($amparosDto->getIdAmparo() != "") {
            $sql.="idAmparo";
            if (($amparosDto->getIdCarpetaJudicial() != "") || ($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveTipoAmparo() != "") {
            $sql.="cveTipoAmparo";
            if (($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo";
            if (($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumAmparo() != "") {
            $sql.="numAmparo";
            if (($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getAniAmparo() != "") {
            $sql.="aniAmparo";
            if (($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getAutoridadProcedencia() != "") {
            $sql.="autoridadProcedencia";
            if (($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumeroProcedencia() != "") {
            $sql.="numeroProcedencia";
            if (($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv";
            if (($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumOficio() != "") {
            $sql.="numOficio";
            if (($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getToca() != "") {
            $sql.="toca";
            if (($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getExhorto() != "") {
            $sql.="exhorto";
            if (($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumSala() != "") {
            $sql.="numSala";
            if (($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveSala() != "") {
            $sql.="cveSala";
            if (($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActoReclamado() != "") {
            $sql.="actoReclamado";
            if (($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($amparosDto->getIdAmparo() != "") {
            $sql.="'" . $amparosDto->getIdAmparo() . "'";
            if (($amparosDto->getIdCarpetaJudicial() != "") || ($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getIdCarpetaJudicial() != "") {
            $sql.="'" . $amparosDto->getIdCarpetaJudicial() . "'";
            if (($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveTipoAmparo() != "") {
            $sql.="'" . $amparosDto->getCveTipoAmparo() . "'";
            if (($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveEstatusAmparo() != "") {
            $sql.="'" . $amparosDto->getCveEstatusAmparo() . "'";
            if (($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumAmparo() != "") {
            $sql.="'" . $amparosDto->getNumAmparo() . "'";
            if (($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getAniAmparo() != "") {
            $sql.="'" . $amparosDto->getAniAmparo() . "'";
            if (($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveJuzgado() != "") {
            $sql.="'" . $amparosDto->getCveJuzgado() . "'";
            if (($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getAutoridadProcedencia() != "") {
            $sql.="'" . $amparosDto->getAutoridadProcedencia() . "'";
            if (($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumeroProcedencia() != "") {
            $sql.="'" . $amparosDto->getNumeroProcedencia() . "'";
            if (($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCarpetaInv() != "") {
            $sql.="'" . $amparosDto->getCarpetaInv() . "'";
            if (($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumOficio() != "") {
            $sql.="'" . $amparosDto->getNumOficio() . "'";
            if (($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getToca() != "") {
            $sql.="'" . $amparosDto->getToca() . "'";
            if (($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getExhorto() != "") {
            $sql.="'" . $amparosDto->getExhorto() . "'";
            if (($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumSala() != "") {
            $sql.="'" . $amparosDto->getNumSala() . "'";
            if (($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveSala() != "") {
            $sql.="'" . $amparosDto->getCveSala() . "'";
            if (($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActoReclamado() != "") {
            $sql.="'" . $amparosDto->getActoReclamado() . "'";
            if (($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getObservaciones() != "") {
            $sql.="'" . $amparosDto->getObservaciones() . "'";
            if (($amparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActivo() != "") {
            $sql.="'" . $amparosDto->getActivo() . "'";
        }
        if ($amparosDto->getFechaRegistro() != "") {
            
        }
        if ($amparosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AmparosDTO();
            $tmp->setidAmparo($this->_proveedor->lastID());
            $tmp = $this->selectAmparos($tmp, "", $this->_proveedor);
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

    public function updateAmparos($amparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblamparos SET ";
        if ($amparosDto->getIdAmparo() != "") {
            $sql.="idAmparo='" . $amparosDto->getIdAmparo() . "'";
            if (($amparosDto->getIdCarpetaJudicial() != "") || ($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $amparosDto->getIdCarpetaJudicial() . "'";
            if (($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveTipoAmparo() != "") {
            $sql.="cveTipoAmparo='" . $amparosDto->getCveTipoAmparo() . "'";
            if (($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo='" . $amparosDto->getCveEstatusAmparo() . "'";
            if (($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumAmparo() != "") {
            $sql.="numAmparo='" . $amparosDto->getNumAmparo() . "'";
            if (($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getAniAmparo() != "") {
            $sql.="aniAmparo='" . $amparosDto->getAniAmparo() . "'";
            if (($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $amparosDto->getCveJuzgado() . "'";
            if (($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
//        if ($amparosDto->getAutoridadProcedencia() != "") {
            $sql.="autoridadProcedencia='" . $amparosDto->getAutoridadProcedencia() . "'";
            if (($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
//        }
        if ($amparosDto->getNumeroProcedencia() != "") {
            $sql.="numeroProcedencia='" . $amparosDto->getNumeroProcedencia() . "'";
            if (($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv='" . $amparosDto->getCarpetaInv() . "'";
            if (($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumOficio() != "") {
            $sql.="numOficio='" . $amparosDto->getNumOficio() . "'";
            if (($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getToca() != "") {
            $sql.="toca='" . $amparosDto->getToca() . "'";
            if (($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getExhorto() != "") {
            $sql.="exhorto='" . $amparosDto->getExhorto() . "'";
            if (($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getNumSala() != "") {
            $sql.="numSala='" . $amparosDto->getNumSala() . "'";
            if (($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getCveSala() != "") {
            $sql.="cveSala='" . $amparosDto->getCveSala() . "'";
            if (($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActoReclamado() != "") {
            $sql.="actoReclamado='" . $amparosDto->getActoReclamado() . "'";
            if (($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $amparosDto->getObservaciones() . "'";
            if (($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getActivo() != "") {
            $sql.="activo='" . $amparosDto->getActivo() . "'";
            if (($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $amparosDto->getFechaRegistro() . "'";
            if (($amparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($amparosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $amparosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idAmparo='" . $amparosDto->getIdAmparo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AmparosDTO();
            $tmp->setidAmparo($amparosDto->getIdAmparo());
            $tmp = $this->selectAmparos($tmp, "", $this->_proveedor);
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

    public function deleteAmparos($amparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblamparos  WHERE idAmparo='" . $amparosDto->getIdAmparo() . "'";
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

    public function selectAmparos($amparosDto, $orden = "", $proveedor = null,$fields = null) {
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
            $sql .= "idAmparo,idCarpetaJudicial,cveTipoAmparo,cveEstatusAmparo,numAmparo,aniAmparo,cveJuzgado,autoridadProcedencia,numeroProcedencia,carpetaInv,numOficio,toca,exhorto,numSala,cveSala,actoReclamado,observaciones,activo,fechaRegistro,fechaActualizacion";
        } else {
            $sql .= $fields;
        }

        $sql .= " FROM tblamparos ";
        if (($amparosDto->getIdAmparo() != "") || ($amparosDto->getIdCarpetaJudicial() != "") || ($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($amparosDto->getIdAmparo() != "") {
            $sql.="idAmparo='" . $amparosDto->getIdAmparo() . "'";
            if (($amparosDto->getIdCarpetaJudicial() != "") || ($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $amparosDto->getIdCarpetaJudicial() . "'";
            if (($amparosDto->getCveTipoAmparo() != "") || ($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getCveTipoAmparo() != "") {
            $sql.="cveTipoAmparo='" . $amparosDto->getCveTipoAmparo() . "'";
            if (($amparosDto->getCveEstatusAmparo() != "") || ($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo='" . $amparosDto->getCveEstatusAmparo() . "'";
            if (($amparosDto->getNumAmparo() != "") || ($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getNumAmparo() != "") {
            $sql.="numAmparo='" . $amparosDto->getNumAmparo() . "'";
            if (($amparosDto->getAniAmparo() != "") || ($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getAniAmparo() != "") {
            $sql.="aniAmparo='" . $amparosDto->getAniAmparo() . "'";
            if (($amparosDto->getCveJuzgado() != "") || ($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $amparosDto->getCveJuzgado() . "'";
            if (($amparosDto->getAutoridadProcedencia() != "") || ($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getAutoridadProcedencia() != "") {
            $sql.="autoridadProcedencia='" . $amparosDto->getAutoridadProcedencia() . "'";
            if (($amparosDto->getNumeroProcedencia() != "") || ($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getNumeroProcedencia() != "") {
            $sql.="numeroProcedencia='" . $amparosDto->getNumeroProcedencia() . "'";
            if (($amparosDto->getCarpetaInv() != "") || ($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv='" . $amparosDto->getCarpetaInv() . "'";
            if (($amparosDto->getNumOficio() != "") || ($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getNumOficio() != "") {
            $sql.="numOficio='" . $amparosDto->getNumOficio() . "'";
            if (($amparosDto->getToca() != "") || ($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getToca() != "") {
            $sql.="toca='" . $amparosDto->getToca() . "'";
            if (($amparosDto->getExhorto() != "") || ($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getExhorto() != "") {
            $sql.="exhorto='" . $amparosDto->getExhorto() . "'";
            if (($amparosDto->getNumSala() != "") || ($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getNumSala() != "") {
            $sql.="numSala='" . $amparosDto->getNumSala() . "'";
            if (($amparosDto->getCveSala() != "") || ($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getCveSala() != "") {
            $sql.="cveSala='" . $amparosDto->getCveSala() . "'";
            if (($amparosDto->getActoReclamado() != "") || ($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getActoReclamado() != "") {
            $sql.="actoReclamado='" . $amparosDto->getActoReclamado() . "'";
            if (($amparosDto->getObservaciones() != "") || ($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $amparosDto->getObservaciones() . "'";
            if (($amparosDto->getActivo() != "") || ($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getActivo() != "") {
            $sql.="activo='" . $amparosDto->getActivo() . "'";
            if (($amparosDto->getFechaRegistro() != "") || ($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $amparosDto->getFechaRegistro() . "'";
            if (($amparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($amparosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $amparosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null){
                    $tmp[$contador] = new AmparosDTO();
                    $tmp[$contador]->setIdAmparo($row["idAmparo"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setCveTipoAmparo($row["cveTipoAmparo"]);
                    $tmp[$contador]->setCveEstatusAmparo($row["cveEstatusAmparo"]);
                    $tmp[$contador]->setNumAmparo($row["numAmparo"]);
                    $tmp[$contador]->setAniAmparo($row["aniAmparo"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setAutoridadProcedencia($row["autoridadProcedencia"]);
                    $tmp[$contador]->setNumeroProcedencia($row["numeroProcedencia"]);
                    $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                    $tmp[$contador]->setNumOficio($row["numOficio"]);
                    $tmp[$contador]->setToca($row["toca"]);
                    $tmp[$contador]->setExhorto($row["exhorto"]);
                    $tmp[$contador]->setNumSala($row["numSala"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setActoReclamado($row["actoReclamado"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador++;
                    } else {
                            $tmp[$contador] = array();
                            for ($i = 0; $i < $numField; $i++){
                                $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                                //var_dump($fieldInfo);
                                $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                                
                            }
                            
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