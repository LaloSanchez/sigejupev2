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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EstadospsicofisicosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertEstadospsicofisicos($estadospsicofisicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblestadospsicofisicos(";
        if ($estadospsicofisicosDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico";
            if (($estadospsicofisicosDto->getDesEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getdesEstadoPsicofisico() != "") {
            $sql.="desEstadoPsicofisico";
            if (($estadospsicofisicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($estadospsicofisicosDto->getcveEstadoPsicofisico() != "") {
            $sql.="'" . $estadospsicofisicosDto->getcveEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getDesEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getdesEstadoPsicofisico() != "") {
            $sql.="'" . $estadospsicofisicosDto->getdesEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getactivo() != "") {
            $sql.="'" . $estadospsicofisicosDto->getactivo() . "'";
        }
        if ($estadospsicofisicosDto->getfechaRegistro() != "") {
            
        }
        if ($estadospsicofisicosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EstadospsicofisicosDTO();
            $tmp->setcveEstadoPsicofisico($this->_proveedor->lastID());
            $tmp = $this->selectEstadospsicofisicos($tmp, "", $this->_proveedor);
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

    public function updateEstadospsicofisicos($estadospsicofisicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblestadospsicofisicos SET ";
        if ($estadospsicofisicosDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $estadospsicofisicosDto->getcveEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getDesEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getActivo() != "") || ($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getdesEstadoPsicofisico() != "") {
            $sql.="desEstadoPsicofisico='" . $estadospsicofisicosDto->getdesEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getActivo() != "") || ($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getactivo() != "") {
            $sql.="activo='" . $estadospsicofisicosDto->getactivo() . "'";
            if (($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $estadospsicofisicosDto->getfechaRegistro() . "'";
            if (($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estadospsicofisicosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $estadospsicofisicosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveEstadoPsicofisico='" . $estadospsicofisicosDto->getcveEstadoPsicofisico() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EstadospsicofisicosDTO();
            $tmp->setcveEstadoPsicofisico($estadospsicofisicosDto->getcveEstadoPsicofisico());
            $tmp = $this->selectEstadospsicofisicos($tmp, "", $this->_proveedor);
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

    public function deleteEstadospsicofisicos($estadospsicofisicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblestadospsicofisicos  WHERE cveEstadoPsicofisico='" . $estadospsicofisicosDto->getcveEstadoPsicofisico() . "'";
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

    public function selectEstadospsicofisicos($estadospsicofisicosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveEstadoPsicofisico,desEstadoPsicofisico,activo,fechaRegistro,fechaActualizacion FROM tblestadospsicofisicos ";
        if (($estadospsicofisicosDto->getcveEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getdesEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getactivo() != "") || ($estadospsicofisicosDto->getfechaRegistro() != "") || ($estadospsicofisicosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($estadospsicofisicosDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $estadospsicofisicosDto->getCveEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getDesEstadoPsicofisico() != "") || ($estadospsicofisicosDto->getActivo() != "") || ($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estadospsicofisicosDto->getdesEstadoPsicofisico() != "") {
            $sql.="desEstadoPsicofisico='" . $estadospsicofisicosDto->getDesEstadoPsicofisico() . "'";
            if (($estadospsicofisicosDto->getActivo() != "") || ($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estadospsicofisicosDto->getactivo() != "") {
            $sql.="activo='" . $estadospsicofisicosDto->getActivo() . "'";
            if (($estadospsicofisicosDto->getFechaRegistro() != "") || ($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estadospsicofisicosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $estadospsicofisicosDto->getFechaRegistro() . "'";
            if (($estadospsicofisicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estadospsicofisicosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $estadospsicofisicosDto->getFechaActualizacion() . "'";
        }
        $sql .= " order by desEstadoPsicofisico ASC";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new EstadospsicofisicosDTO();
                    $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                    $tmp[$contador]->setDesEstadoPsicofisico($row["desEstadoPsicofisico"]);
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