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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class BitacoraasignacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertBitacoraasignaciones($bitacoraasignacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblbitacoraasignaciones(";
        if ($bitacoraasignacionesDto->getidBitacoraAsignacion() != "") {
            $sql.="idBitacoraAsignacion";
            if (($bitacoraasignacionesDto->getCveJuzgado() != "") || ($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia";
            if (($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaMovimiento() != "") {
            $sql.="fechaMovimiento";
            if (($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getobservaciones() != "") {
            $sql.="observaciones";
            if (($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaInicial() != "") {
            $sql.="fechaInicial";
            if (($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaFInal() != "") {
            $sql.="fechaFInal";
            if (($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita";
            if (($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveSala() != "") {
            $sql.="cveSala";
        }
        $sql.=") VALUES(";
        if ($bitacoraasignacionesDto->getidBitacoraAsignacion() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getidBitacoraAsignacion() . "'";
            if (($bitacoraasignacionesDto->getCveJuzgado() != "") || ($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveJuzgado() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getcveJuzgado() . "'";
            if (($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidSolicitudAudiencia() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getidSolicitudAudiencia() . "'";
            if (($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaMovimiento() != "") {
            $sql.="now()";
            if (($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getobservaciones() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getobservaciones() . "'";
            if (($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaInicial() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getfechaInicial() . "'";
            if (($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaFInal() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getfechaFInal() . "'";
            if (($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveAdscripcionSolicita() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getcveAdscripcionSolicita() . "'";
            if (($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidJuzgador() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getidJuzgador() . "'";
            if (($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveSala() != "") {
            $sql.="'" . $bitacoraasignacionesDto->getcveSala() . "'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoraasignacionesDTO();
            $tmp->setidBitacoraAsignacion($this->_proveedor->lastID());
            $tmp = $this->selectBitacoraasignaciones($tmp, "", $this->_proveedor);
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

    public function updateBitacoraasignaciones($bitacoraasignacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblbitacoraasignaciones SET ";
        if ($bitacoraasignacionesDto->getidBitacoraAsignacion() != "") {
            $sql.="idBitacoraAsignacion='" . $bitacoraasignacionesDto->getidBitacoraAsignacion() . "'";
            if (($bitacoraasignacionesDto->getCveJuzgado() != "") || ($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $bitacoraasignacionesDto->getcveJuzgado() . "'";
            if (($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $bitacoraasignacionesDto->getidSolicitudAudiencia() . "'";
            if (($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaMovimiento() != "") {
            $sql.="fechaMovimiento='" . $bitacoraasignacionesDto->getfechaMovimiento() . "'";
            if (($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getobservaciones() != "") {
            $sql.="observaciones='" . $bitacoraasignacionesDto->getobservaciones() . "'";
            if (($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaInicial() != "") {
            $sql.="fechaInicial='" . $bitacoraasignacionesDto->getfechaInicial() . "'";
            if (($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getfechaFInal() != "") {
            $sql.="fechaFInal='" . $bitacoraasignacionesDto->getfechaFInal() . "'";
            if (($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $bitacoraasignacionesDto->getcveAdscripcionSolicita() . "'";
            if (($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $bitacoraasignacionesDto->getidJuzgador() . "'";
            if (($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoraasignacionesDto->getcveSala() != "") {
            $sql.="cveSala='" . $bitacoraasignacionesDto->getcveSala() . "'";
        }
        $sql.=" WHERE idBitacoraAsignacion='" . $bitacoraasignacionesDto->getidBitacoraAsignacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoraasignacionesDTO();
            $tmp->setidBitacoraAsignacion($bitacoraasignacionesDto->getidBitacoraAsignacion());
            $tmp = $this->selectBitacoraasignaciones($tmp, "", $this->_proveedor);
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

    public function deleteBitacoraasignaciones($bitacoraasignacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblbitacoraasignaciones  WHERE idBitacoraAsignacion='" . $bitacoraasignacionesDto->getidBitacoraAsignacion() . "'";
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

    public function selectBitacoraasignaciones($bitacoraasignacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idBitacoraAsignacion,cveJuzgado,idSolicitudAudiencia,fechaMovimiento,observaciones,fechaInicial,fechaFInal,cveAdscripcionSolicita,idJuzgador,cveSala FROM tblbitacoraasignaciones ";
        if (($bitacoraasignacionesDto->getidBitacoraAsignacion() != "") || ($bitacoraasignacionesDto->getcveJuzgado() != "") || ($bitacoraasignacionesDto->getidSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getfechaMovimiento() != "") || ($bitacoraasignacionesDto->getobservaciones() != "") || ($bitacoraasignacionesDto->getfechaInicial() != "") || ($bitacoraasignacionesDto->getfechaFInal() != "") || ($bitacoraasignacionesDto->getcveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getidJuzgador() != "") || ($bitacoraasignacionesDto->getcveSala() != "")) {
            $sql.=" WHERE ";
        }
        if ($bitacoraasignacionesDto->getidBitacoraAsignacion() != "") {
            $sql.="idBitacoraAsignacion='" . $bitacoraasignacionesDto->getIdBitacoraAsignacion() . "'";
            if (($bitacoraasignacionesDto->getCveJuzgado() != "") || ($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $bitacoraasignacionesDto->getCveJuzgado() . "'";
            if (($bitacoraasignacionesDto->getIdSolicitudAudiencia() != "") || ($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $bitacoraasignacionesDto->getIdSolicitudAudiencia() . "'";
            if (($bitacoraasignacionesDto->getFechaMovimiento() != "") || ($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getfechaMovimiento() != "") {
            $sql.="fechaMovimiento='" . $bitacoraasignacionesDto->getFechaMovimiento() . "'";
            if (($bitacoraasignacionesDto->getObservaciones() != "") || ($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getobservaciones() != "") {
            $sql.="observaciones='" . $bitacoraasignacionesDto->getObservaciones() . "'";
            if (($bitacoraasignacionesDto->getFechaInicial() != "") || ($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getfechaInicial() != "") {
            $sql.="fechaInicial='" . $bitacoraasignacionesDto->getFechaInicial() . "'";
            if (($bitacoraasignacionesDto->getFechaFInal() != "") || ($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getfechaFInal() != "") {
            $sql.="fechaFInal='" . $bitacoraasignacionesDto->getFechaFInal() . "'";
            if (($bitacoraasignacionesDto->getCveAdscripcionSolicita() != "") || ($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getcveAdscripcionSolicita() != "") {
            $sql.="cveAdscripcionSolicita='" . $bitacoraasignacionesDto->getCveAdscripcionSolicita() . "'";
            if (($bitacoraasignacionesDto->getIdJuzgador() != "") || ($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $bitacoraasignacionesDto->getIdJuzgador() . "'";
            if (($bitacoraasignacionesDto->getCveSala() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoraasignacionesDto->getcveSala() != "") {
            $sql.="cveSala='" . $bitacoraasignacionesDto->getCveSala() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new BitacoraasignacionesDTO();
                    $tmp[$contador]->setIdBitacoraAsignacion($row["idBitacoraAsignacion"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setFechaMovimiento($row["fechaMovimiento"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFInal($row["fechaFInal"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
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

}

?>