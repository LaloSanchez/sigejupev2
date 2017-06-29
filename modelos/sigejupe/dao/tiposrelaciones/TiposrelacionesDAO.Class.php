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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposrelaciones/TiposrelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposrelacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposrelaciones($tiposrelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposrelaciones(";
        if ($tiposrelacionesDto->getcveTipoRelacion() != "") {
            $sql.="cveTipoRelacion";
            if (($tiposrelacionesDto->getCveTipoCarpeta() != "") || ($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getdesTipoRelacion() != "") {
            $sql.="desTipoRelacion";
            if (($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposrelacionesDto->getcveTipoRelacion() != "") {
            $sql.="'" . $tiposrelacionesDto->getcveTipoRelacion() . "'";
            if (($tiposrelacionesDto->getCveTipoCarpeta() != "") || ($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $tiposrelacionesDto->getcveTipoCarpeta() . "'";
            if (($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getdesTipoRelacion() != "") {
            $sql.="'" . $tiposrelacionesDto->getdesTipoRelacion() . "'";
            if (($tiposrelacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getactivo() != "") {
            $sql.="'" . $tiposrelacionesDto->getactivo() . "'";
        }
        if ($tiposrelacionesDto->getfechaRegistro() != "") {
            
        }
        if ($tiposrelacionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposrelacionesDTO();
            $tmp->setcveTipoRelacion($this->_proveedor->lastID());
            $tmp = $this->selectTiposrelaciones($tmp, "", $this->_proveedor);
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

    public function updateTiposrelaciones($tiposrelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposrelaciones SET ";
        if ($tiposrelacionesDto->getcveTipoRelacion() != "") {
            $sql.="cveTipoRelacion='" . $tiposrelacionesDto->getcveTipoRelacion() . "'";
            if (($tiposrelacionesDto->getCveTipoCarpeta() != "") || ($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $tiposrelacionesDto->getcveTipoCarpeta() . "'";
            if (($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getdesTipoRelacion() != "") {
            $sql.="desTipoRelacion='" . $tiposrelacionesDto->getdesTipoRelacion() . "'";
            if (($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getactivo() != "") {
            $sql.="activo='" . $tiposrelacionesDto->getactivo() . "'";
            if (($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposrelacionesDto->getfechaRegistro() . "'";
            if (($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposrelacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposrelacionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoRelacion='" . $tiposrelacionesDto->getcveTipoRelacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposrelacionesDTO();
            $tmp->setcveTipoRelacion($tiposrelacionesDto->getcveTipoRelacion());
            $tmp = $this->selectTiposrelaciones($tmp, "", $this->_proveedor);
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

    public function deleteTiposrelaciones($tiposrelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposrelaciones  WHERE cveTipoRelacion='" . $tiposrelacionesDto->getcveTipoRelacion() . "'";
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

    public function selectTiposrelaciones($tiposrelacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoRelacion,cveTipoCarpeta,desTipoRelacion,activo,fechaRegistro,fechaActualizacion FROM tbltiposrelaciones ";
        if (($tiposrelacionesDto->getcveTipoRelacion() != "") || ($tiposrelacionesDto->getcveTipoCarpeta() != "") || ($tiposrelacionesDto->getdesTipoRelacion() != "") || ($tiposrelacionesDto->getactivo() != "") || ($tiposrelacionesDto->getfechaRegistro() != "") || ($tiposrelacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposrelacionesDto->getcveTipoRelacion() != "") {
            $sql.="cveTipoRelacion='" . $tiposrelacionesDto->getCveTipoRelacion() . "'";
            if (($tiposrelacionesDto->getCveTipoCarpeta() != "") || ($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposrelacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $tiposrelacionesDto->getCveTipoCarpeta() . "'";
            if (($tiposrelacionesDto->getDesTipoRelacion() != "") || ($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposrelacionesDto->getdesTipoRelacion() != "") {
            $sql.="desTipoRelacion='" . $tiposrelacionesDto->getDesTipoRelacion() . "'";
            if (($tiposrelacionesDto->getActivo() != "") || ($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposrelacionesDto->getactivo() != "") {
            $sql.="activo='" . $tiposrelacionesDto->getActivo() . "'";
            if (($tiposrelacionesDto->getFechaRegistro() != "") || ($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposrelacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposrelacionesDto->getFechaRegistro() . "'";
            if (($tiposrelacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposrelacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposrelacionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TiposrelacionesDTO();
                    $tmp[$contador]->setCveTipoRelacion($row["cveTipoRelacion"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setDesTipoRelacion($row["desTipoRelacion"]);
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