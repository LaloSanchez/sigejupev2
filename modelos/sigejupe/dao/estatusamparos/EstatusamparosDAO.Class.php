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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/estatusamparos/EstatusamparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EstatusamparosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertEstatusamparos($estatusamparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblestatusamparos(";
        if ($estatusamparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo";
            if (($estatusamparosDto->getDesEstatus() != "") || ($estatusamparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getDesEstatus() != "") {
            $sql.="desEstatus";
            if (($estatusamparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($estatusamparosDto->getCveEstatusAmparo() != "") {
            $sql.="'" . $estatusamparosDto->getCveEstatusAmparo() . "'";
            if (($estatusamparosDto->getDesEstatus() != "") || ($estatusamparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getDesEstatus() != "") {
            $sql.="'" . $estatusamparosDto->getDesEstatus() . "'";
            if (($estatusamparosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getActivo() != "") {
            $sql.="'" . $estatusamparosDto->getActivo() . "'";
        }
        if ($estatusamparosDto->getFechaRegistro() != "") {
            
        }
        if ($estatusamparosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EstatusamparosDTO();
            $tmp->setcveEstatusAmparo($this->_proveedor->lastID());
            $tmp = $this->selectEstatusamparos($tmp, "", $this->_proveedor);
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

    public function updateEstatusamparos($estatusamparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblestatusamparos SET ";
        if ($estatusamparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo='" . $estatusamparosDto->getCveEstatusAmparo() . "'";
            if (($estatusamparosDto->getDesEstatus() != "") || ($estatusamparosDto->getActivo() != "") || ($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getDesEstatus() != "") {
            $sql.="desEstatus='" . $estatusamparosDto->getDesEstatus() . "'";
            if (($estatusamparosDto->getActivo() != "") || ($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getActivo() != "") {
            $sql.="activo='" . $estatusamparosDto->getActivo() . "'";
            if (($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $estatusamparosDto->getFechaRegistro() . "'";
            if (($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($estatusamparosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $estatusamparosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveEstatusAmparo='" . $estatusamparosDto->getCveEstatusAmparo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EstatusamparosDTO();
            $tmp->setcveEstatusAmparo($estatusamparosDto->getCveEstatusAmparo());
            $tmp = $this->selectEstatusamparos($tmp, "", $this->_proveedor);
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

    public function deleteEstatusamparos($estatusamparosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblestatusamparos  WHERE cveEstatusAmparo='" . $estatusamparosDto->getCveEstatusAmparo() . "'";
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

    public function selectEstatusamparos($estatusamparosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveEstatusAmparo,desEstatus,activo,fechaRegistro,fechaActualizacion FROM tblestatusamparos ";
        if (($estatusamparosDto->getCveEstatusAmparo() != "") || ($estatusamparosDto->getDesEstatus() != "") || ($estatusamparosDto->getActivo() != "") || ($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($estatusamparosDto->getCveEstatusAmparo() != "") {
            $sql.="cveEstatusAmparo='" . $estatusamparosDto->getCveEstatusAmparo() . "'";
            if (($estatusamparosDto->getDesEstatus() != "") || ($estatusamparosDto->getActivo() != "") || ($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estatusamparosDto->getDesEstatus() != "") {
            $sql.="desEstatus='" . $estatusamparosDto->getDesEstatus() . "'";
            if (($estatusamparosDto->getActivo() != "") || ($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estatusamparosDto->getActivo() != "") {
            $sql.="activo='" . $estatusamparosDto->getActivo() . "'";
            if (($estatusamparosDto->getFechaRegistro() != "") || ($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estatusamparosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $estatusamparosDto->getFechaRegistro() . "'";
            if (($estatusamparosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($estatusamparosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $estatusamparosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new EstatusamparosDTO();
                    $tmp[$contador]->setCveEstatusAmparo($row["cveEstatusAmparo"]);
                    $tmp[$contador]->setDesEstatus($row["desEstatus"]);
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