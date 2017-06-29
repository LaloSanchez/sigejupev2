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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tipospartes/TipospartesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TipospartesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTipospartes($tipospartesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltipospartes(";
        if ($tipospartesDto->getcveTipoParte() != "") {
            $sql.="cveTipoParte";
            if (($tipospartesDto->getDescTipoParte() != "") || ($tipospartesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getdescTipoParte() != "") {
            $sql.="descTipoParte";
            if (($tipospartesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tipospartesDto->getcveTipoParte() != "") {
            $sql.="'" . $tipospartesDto->getcveTipoParte() . "'";
            if (($tipospartesDto->getDescTipoParte() != "") || ($tipospartesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getdescTipoParte() != "") {
            $sql.="'" . $tipospartesDto->getdescTipoParte() . "'";
            if (($tipospartesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getactivo() != "") {
            $sql.="'" . $tipospartesDto->getactivo() . "'";
        }
        if ($tipospartesDto->getfechaRegistro() != "") {
            
        }
        if ($tipospartesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TipospartesDTO();
            $tmp->setcveTipoParte($this->_proveedor->lastID());
            $tmp = $this->selectTipospartes($tmp, "", $this->_proveedor);
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

    public function updateTipospartes($tipospartesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltipospartes SET ";
        if ($tipospartesDto->getcveTipoParte() != "") {
            $sql.="cveTipoParte='" . $tipospartesDto->getcveTipoParte() . "'";
            if (($tipospartesDto->getDescTipoParte() != "") || ($tipospartesDto->getActivo() != "") || ($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getdescTipoParte() != "") {
            $sql.="descTipoParte='" . $tipospartesDto->getdescTipoParte() . "'";
            if (($tipospartesDto->getActivo() != "") || ($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getactivo() != "") {
            $sql.="activo='" . $tipospartesDto->getactivo() . "'";
            if (($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tipospartesDto->getfechaRegistro() . "'";
            if (($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipospartesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tipospartesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoParte='" . $tipospartesDto->getcveTipoParte() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TipospartesDTO();
            $tmp->setcveTipoParte($tipospartesDto->getcveTipoParte());
            $tmp = $this->selectTipospartes($tmp, "", $this->_proveedor);
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

    public function deleteTipospartes($tipospartesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltipospartes  WHERE cveTipoParte='" . $tipospartesDto->getcveTipoParte() . "'";
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

    public function selectTipospartes($tipospartesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoParte,descTipoParte,activo,fechaRegistro,fechaActualizacion FROM tbltipospartes ";
        if (($tipospartesDto->getcveTipoParte() != "") || ($tipospartesDto->getdescTipoParte() != "") || ($tipospartesDto->getactivo() != "") || ($tipospartesDto->getfechaRegistro() != "") || ($tipospartesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tipospartesDto->getcveTipoParte() != "") {
            $sql.="cveTipoParte='" . $tipospartesDto->getCveTipoParte() . "'";
            if (($tipospartesDto->getDescTipoParte() != "") || ($tipospartesDto->getActivo() != "") || ($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipospartesDto->getdescTipoParte() != "") {
            $sql.="descTipoParte='" . $tipospartesDto->getDescTipoParte() . "'";
            if (($tipospartesDto->getActivo() != "") || ($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipospartesDto->getactivo() != "") {
            $sql.="activo='" . $tipospartesDto->getActivo() . "'";
            if (($tipospartesDto->getFechaRegistro() != "") || ($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipospartesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tipospartesDto->getFechaRegistro() . "'";
            if (($tipospartesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipospartesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tipospartesDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.=" ORDER BY descTipoParte ASC";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TipospartesDTO();
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setDescTipoParte($row["descTipoParte"]);
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