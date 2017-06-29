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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/convivencias/ConvivenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ConvivenciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertConvivencias($convivenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblconvivencias(";
        if ($convivenciasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia";
            if (($convivenciasDto->getDesConvivencia() != "") || ($convivenciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getdesConvivencia() != "") {
            $sql.="desConvivencia";
            if (($convivenciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($convivenciasDto->getcveConvivencia() != "") {
            $sql.="'" . $convivenciasDto->getcveConvivencia() . "'";
            if (($convivenciasDto->getDesConvivencia() != "") || ($convivenciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getdesConvivencia() != "") {
            $sql.="'" . $convivenciasDto->getdesConvivencia() . "'";
            if (($convivenciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getactivo() != "") {
            $sql.="'" . $convivenciasDto->getactivo() . "'";
        }
        if ($convivenciasDto->getfechaRegistro() != "") {
            
        }
        if ($convivenciasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConvivenciasDTO();
            $tmp->setcveConvivencia($this->_proveedor->lastID());
            $tmp = $this->selectConvivencias($tmp, "", $this->_proveedor);
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

    public function updateConvivencias($convivenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblconvivencias SET ";
        if ($convivenciasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $convivenciasDto->getcveConvivencia() . "'";
            if (($convivenciasDto->getDesConvivencia() != "") || ($convivenciasDto->getActivo() != "") || ($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getdesConvivencia() != "") {
            $sql.="desConvivencia='" . $convivenciasDto->getdesConvivencia() . "'";
            if (($convivenciasDto->getActivo() != "") || ($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getactivo() != "") {
            $sql.="activo='" . $convivenciasDto->getactivo() . "'";
            if (($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $convivenciasDto->getfechaRegistro() . "'";
            if (($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($convivenciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $convivenciasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveConvivencia='" . $convivenciasDto->getcveConvivencia() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConvivenciasDTO();
            $tmp->setcveConvivencia($convivenciasDto->getcveConvivencia());
            $tmp = $this->selectConvivencias($tmp, "", $this->_proveedor);
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

    public function deleteConvivencias($convivenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblconvivencias  WHERE cveConvivencia='" . $convivenciasDto->getcveConvivencia() . "'";
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

    public function selectConvivencias($convivenciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveConvivencia,desConvivencia,activo,fechaRegistro,fechaActualizacion FROM tblconvivencias ";
        if (($convivenciasDto->getcveConvivencia() != "") || ($convivenciasDto->getdesConvivencia() != "") || ($convivenciasDto->getactivo() != "") || ($convivenciasDto->getfechaRegistro() != "") || ($convivenciasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($convivenciasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $convivenciasDto->getCveConvivencia() . "'";
            if (($convivenciasDto->getDesConvivencia() != "") || ($convivenciasDto->getActivo() != "") || ($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($convivenciasDto->getdesConvivencia() != "") {
            $sql.="desConvivencia='" . $convivenciasDto->getDesConvivencia() . "'";
            if (($convivenciasDto->getActivo() != "") || ($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($convivenciasDto->getactivo() != "") {
            $sql.="activo='" . $convivenciasDto->getActivo() . "'";
            if (($convivenciasDto->getFechaRegistro() != "") || ($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($convivenciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $convivenciasDto->getFechaRegistro() . "'";
            if (($convivenciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($convivenciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $convivenciasDto->getFechaActualizacion() . "'";
        }
        $sql .= " order by desConvivencia ASC";
        
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ConvivenciasDTO();
                    $tmp[$contador]->setCveConvivencia($row["cveConvivencia"]);
                    $tmp[$contador]->setDesConvivencia($row["desConvivencia"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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