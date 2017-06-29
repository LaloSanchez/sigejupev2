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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/efectos/EfectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EfectosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertEfectos($efectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblefectos(";
        if ($efectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto";
            if (($efectosDto->getDesEfecto() != "") || ($efectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getdesEfecto() != "") {
            $sql.="desEfecto";
            if (($efectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($efectosDto->getcveEfecto() != "") {
            $sql.="'" . $efectosDto->getcveEfecto() . "'";
            if (($efectosDto->getDesEfecto() != "") || ($efectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getdesEfecto() != "") {
            $sql.="'" . $efectosDto->getdesEfecto() . "'";
            if (($efectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getactivo() != "") {
            $sql.="'" . $efectosDto->getactivo() . "'";
        }
        if ($efectosDto->getfechaRegistro() != "") {
            
        }
        if ($efectosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosDTO();
            $tmp->setcveEfecto($this->_proveedor->lastID());
            $tmp = $this->selectEfectos($tmp, "", $this->_proveedor);
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

    public function updateEfectos($efectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblefectos SET ";
        if ($efectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $efectosDto->getcveEfecto() . "'";
            if (($efectosDto->getDesEfecto() != "") || ($efectosDto->getActivo() != "") || ($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getdesEfecto() != "") {
            $sql.="desEfecto='" . $efectosDto->getdesEfecto() . "'";
            if (($efectosDto->getActivo() != "") || ($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getactivo() != "") {
            $sql.="activo='" . $efectosDto->getactivo() . "'";
            if (($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosDto->getfechaRegistro() . "'";
            if (($efectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveEfecto='" . $efectosDto->getcveEfecto() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosDTO();
            $tmp->setcveEfecto($efectosDto->getcveEfecto());
            $tmp = $this->selectEfectos($tmp, "", $this->_proveedor);
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

    public function deleteEfectos($efectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblefectos  WHERE cveEfecto='" . $efectosDto->getcveEfecto() . "'";
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

    public function selectEfectos($efectosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveEfecto,desEfecto,activo,fechaRegistro,fechaActualizacion FROM tblefectos ";
        if (($efectosDto->getcveEfecto() != "") || ($efectosDto->getdesEfecto() != "") || ($efectosDto->getactivo() != "") || ($efectosDto->getfechaRegistro() != "") || ($efectosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($efectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $efectosDto->getCveEfecto() . "'";
            if (($efectosDto->getDesEfecto() != "") || ($efectosDto->getActivo() != "") || ($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosDto->getdesEfecto() != "") {
            $sql.="desEfecto='" . $efectosDto->getDesEfecto() . "'";
            if (($efectosDto->getActivo() != "") || ($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosDto->getactivo() != "") {
            $sql.="activo='" . $efectosDto->getActivo() . "'";
            if (($efectosDto->getFechaRegistro() != "") || ($efectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosDto->getFechaRegistro() . "'";
            if (($efectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosDto->getFechaActualizacion() . "'";
        }
        $sql .= " order by desEfecto ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new EfectosDTO();
                    $tmp[$contador]->setCveEfecto($row["cveEfecto"]);
                    $tmp[$contador]->setDesEfecto($row["desEfecto"]);
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