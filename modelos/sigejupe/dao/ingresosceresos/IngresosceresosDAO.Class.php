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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ingresosceresos/IngresosceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class IngresosceresosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertIngresosceresos($ingresosceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblingresosceresos(";
        if ($ingresosceresosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso";
            if (($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getOficio() != "") {
            $sql.="oficio";
            if (($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv";
            if (($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNuc() != "") {
            $sql.="nuc";
            if (($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCveCereso() != "") {
            $sql.="cveCereso";
            if (($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaHoraIngreso() != "") {
            $sql.="FechaHoraIngreso";
            if (($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getActivo() != "") {
            $sql.="activo";
            if (($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNumOficio() != "") {
            $sql.="numOficio";
            if (($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getAniOficio() != "") {
            $sql.="aniOficio";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ingresosceresosDto->getIdIngresoCereso() != "") {
            $sql.="'" . $ingresosceresosDto->getIdIngresoCereso() . "'";
            if (($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getOficio() != "") {
            $sql.="'" . $ingresosceresosDto->getOficio() . "'";
            if (($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCarpetaInv() != "") {
            $sql.="'" . $ingresosceresosDto->getCarpetaInv() . "'";
            if (($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNuc() != "") {
            $sql.="'" . $ingresosceresosDto->getNuc() . "'";
            if (($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCveCereso() != "") {
            $sql.="'" . $ingresosceresosDto->getCveCereso() . "'";
            if (($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaHoraIngreso() != "") {
            $sql.="'" . $ingresosceresosDto->getFechaHoraIngreso() . "'";
            if (($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getObservaciones() != "") {
            $sql.="'" . $ingresosceresosDto->getObservaciones() . "'";
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaRegistro() != "") {
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaActualizacion() != "") {
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getActivo() != "") {
            $sql.="'" . $ingresosceresosDto->getActivo() . "'";
            if (($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNumOficio() != "") {
            $sql.="'" . $ingresosceresosDto->getNumOficio() . "'";
            if (($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getAniOficio() != "") {
            $sql.="'" . $ingresosceresosDto->getAniOficio() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new IngresosceresosDTO();
            $tmp->setidIngresoCereso($this->_proveedor->lastID());
            $tmp = $this->selectIngresosceresos($tmp, $this->_proveedor, "", null, null);
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

    public function updateIngresosceresos($ingresosceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblingresosceresos SET ";
        if ($ingresosceresosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso='" . $ingresosceresosDto->getIdIngresoCereso() . "'";
            if (($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getOficio() != "") {
            $sql.="oficio='" . $ingresosceresosDto->getOficio() . "'";
            if (($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv='" . $ingresosceresosDto->getCarpetaInv() . "'";
            if (($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNuc() != "") {
            $sql.="nuc='" . $ingresosceresosDto->getNuc() . "'";
            if (($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $ingresosceresosDto->getCveCereso() . "'";
            if (($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaHoraIngreso() != "") {
            $sql.="FechaHoraIngreso='" . $ingresosceresosDto->getFechaHoraIngreso() . "'";
            if (($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $ingresosceresosDto->getObservaciones() . "'";
            if (($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ingresosceresosDto->getFechaRegistro() . "'";
            if (($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ingresosceresosDto->getFechaActualizacion() . "'";
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getActivo() != "") {
            $sql.="activo='" . $ingresosceresosDto->getActivo() . "'";
            if (($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getNumOficio() != "") {
            $sql.="numOficio='" . $ingresosceresosDto->getNumOficio() . "'";
            if (($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=",";
            }
        }
        if ($ingresosceresosDto->getAniOficio() != "") {
            $sql.="aniOficio='" . $ingresosceresosDto->getAniOficio() . "'";
        }
        $sql.=" WHERE idIngresoCereso='" . $ingresosceresosDto->getIdIngresoCereso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new IngresosceresosDTO();
            $tmp->setidIngresoCereso($ingresosceresosDto->getIdIngresoCereso());
            $tmp = $this->selectIngresosceresos($tmp, $this->_proveedor, "", null, null);
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

    public function deleteIngresosceresos($ingresosceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblingresosceresos  WHERE idIngresoCereso='" . $ingresosceresosDto->getIdIngresoCereso() . "'";
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

//                                        $ingresosceresosDto, $proveedor = null,$orden = "", $param = null, $fields = null
    public function selectIngresosceresos($ingresosceresosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
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
            $sql .= " idIngresoCereso,oficio,carpetaInv,nuc,cveCereso,FechaHoraIngreso,observaciones,fechaRegistro,fechaActualizacion,activo,numOficio,aniOficio  ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblingresosceresos";

        if (($ingresosceresosDto->getIdIngresoCereso() != "") || ($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
            $sql.=" WHERE ";
        }
        if ($ingresosceresosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso='" . $ingresosceresosDto->getIdIngresoCereso() . "'";
            if (($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getOficio() != "") {
            $sql.="oficio like '%" . $ingresosceresosDto->getOficio() . "%'";
            if (($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv like '%" . $ingresosceresosDto->getCarpetaInv() . "%'";
            if (($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getNuc() != "") {
            $sql.="nuc like '%" . $ingresosceresosDto->getNuc() . "%'";
            if (($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $ingresosceresosDto->getCveCereso() . "'";
            if (($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getFechaHoraIngreso() != "") {
            $sql.="FechaHoraIngreso='" . $ingresosceresosDto->getFechaHoraIngreso() . "'";
            if (($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $ingresosceresosDto->getObservaciones() . "'";
            if (($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ingresosceresosDto->getFechaRegistro() . "'";
            if (($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ingresosceresosDto->getFechaActualizacion() . "'";
            if (($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getActivo() != "") {
            $sql.="activo='" . $ingresosceresosDto->getActivo() . "'";
            if (($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getNumOficio() != "") {
            $sql.="numOficio='" . $ingresosceresosDto->getNumOficio() . "'";
            if (($ingresosceresosDto->getAniOficio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ingresosceresosDto->getAniOficio() != "") {
            $sql.="aniOficio='" . $ingresosceresosDto->getAniOficio() . "'";
        }


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
        error_log("sql => " . $sql);

//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new IngresosceresosDTO();
                        $tmp[$contador]->setIdIngresoCereso($row["idIngresoCereso"]);
                        $tmp[$contador]->setOficio($row["oficio"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveCereso($row["cveCereso"]);
                        $tmp[$contador]->setFechaHoraIngreso($row["FechaHoraIngreso"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setNumOficio($row["numOficio"]);
                        $tmp[$contador]->setAniOficio($row["aniOficio"]);
                        $contador++;
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectIngresosceresosSolicitudes($ingresosceresosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
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
            $sql .= " idIngresoCereso,oficio,carpetaInv,nuc,cveCereso,FechaHoraIngreso,observaciones,fechaRegistro,fechaActualizacion,activo,numOficio,aniOficio  ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblingresosceresos";

        if (($ingresosceresosDto->getIdIngresoCereso() != "") || ($ingresosceresosDto->getOficio() != "") || ($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getCveCereso() != "") || ($ingresosceresosDto->getFechaHoraIngreso() != "") || ($ingresosceresosDto->getObservaciones() != "") || ($ingresosceresosDto->getFechaRegistro() != "") || ($ingresosceresosDto->getFechaActualizacion() != "") || ($ingresosceresosDto->getActivo() != "") || ($ingresosceresosDto->getNumOficio() != "") || ($ingresosceresosDto->getAniOficio() != "")) {
            $sql.=" WHERE ";
        }
        if ($ingresosceresosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso='" . $ingresosceresosDto->getIdIngresoCereso() . "'";
            if (($ingresosceresosDto->getCarpetaInv() != "") || ($ingresosceresosDto->getNuc() != "") || ($ingresosceresosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }

        if ($ingresosceresosDto->getCarpetaInv() != "") {
            $sql.="carpetaInv like '" . $ingresosceresosDto->getCarpetaInv() . "'";
            if (($ingresosceresosDto->getNuc() != "")) {
                $sql.=" OR ";
            }
        }
        if ($ingresosceresosDto->getNuc() != "") {
            $sql.="nuc = '" . $ingresosceresosDto->getNuc() . "'";
        }

        if ($ingresosceresosDto->getActivo() != "") {
            $sql.="and activo='" . $ingresosceresosDto->getActivo() . "'";
        }



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
        error_log("sql => " . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);

                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new IngresosceresosDTO();
                        $tmp[$contador]->setIdIngresoCereso($row["idIngresoCereso"]);
                        $tmp[$contador]->setOficio($row["oficio"]);
                        $tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
                        $tmp[$contador]->setNuc($row["nuc"]);
                        $tmp[$contador]->setCveCereso($row["cveCereso"]);
                        $tmp[$contador]->setFechaHoraIngreso($row["FechaHoraIngreso"]);
                        $tmp[$contador]->setObservaciones($row["observaciones"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setNumOficio($row["numOficio"]);
                        $tmp[$contador]->setAniOficio($row["aniOficio"]);
                        $contador++;
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>