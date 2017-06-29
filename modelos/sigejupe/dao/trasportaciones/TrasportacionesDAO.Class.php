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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/trasportaciones/TrasportacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TrasportacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTrasportaciones($trasportacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltrasportaciones(";
        if ($trasportacionesDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion";
            if (($trasportacionesDto->getDesTrasportacion() != "") || ($trasportacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getdesTrasportacion() != "") {
            $sql.="desTrasportacion";
            if (($trasportacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($trasportacionesDto->getcveTrasportacion() != "") {
            $sql.="'" . $trasportacionesDto->getcveTrasportacion() . "'";
            if (($trasportacionesDto->getDesTrasportacion() != "") || ($trasportacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getdesTrasportacion() != "") {
            $sql.="'" . $trasportacionesDto->getdesTrasportacion() . "'";
            if (($trasportacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getactivo() != "") {
            $sql.="'" . $trasportacionesDto->getactivo() . "'";
        }
        if ($trasportacionesDto->getfechaRegistro() != "") {
            
        }
        if ($trasportacionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TrasportacionesDTO();
            $tmp->setcveTrasportacion($this->_proveedor->lastID());
            $tmp = $this->selectTrasportaciones($tmp, "", $this->_proveedor);
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

    public function updateTrasportaciones($trasportacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltrasportaciones SET ";
        if ($trasportacionesDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trasportacionesDto->getcveTrasportacion() . "'";
            if (($trasportacionesDto->getDesTrasportacion() != "") || ($trasportacionesDto->getActivo() != "") || ($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getdesTrasportacion() != "") {
            $sql.="desTrasportacion='" . $trasportacionesDto->getdesTrasportacion() . "'";
            if (($trasportacionesDto->getActivo() != "") || ($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getactivo() != "") {
            $sql.="activo='" . $trasportacionesDto->getactivo() . "'";
            if (($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trasportacionesDto->getfechaRegistro() . "'";
            if (($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trasportacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trasportacionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTrasportacion='" . $trasportacionesDto->getcveTrasportacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TrasportacionesDTO();
            $tmp->setcveTrasportacion($trasportacionesDto->getcveTrasportacion());
            $tmp = $this->selectTrasportaciones($tmp, "", $this->_proveedor);
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

    public function deleteTrasportaciones($trasportacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltrasportaciones  WHERE cveTrasportacion='" . $trasportacionesDto->getcveTrasportacion() . "'";
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

    public function selectTrasportaciones($trasportacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTrasportacion,desTrasportacion,activo,fechaRegistro,fechaActualizacion FROM tbltrasportaciones ";
        if (($trasportacionesDto->getcveTrasportacion() != "") || ($trasportacionesDto->getdesTrasportacion() != "") || ($trasportacionesDto->getactivo() != "") || ($trasportacionesDto->getfechaRegistro() != "") || ($trasportacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($trasportacionesDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trasportacionesDto->getCveTrasportacion() . "'";
            if (($trasportacionesDto->getDesTrasportacion() != "") || ($trasportacionesDto->getActivo() != "") || ($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trasportacionesDto->getdesTrasportacion() != "") {
            $sql.="desTrasportacion='" . $trasportacionesDto->getDesTrasportacion() . "'";
            if (($trasportacionesDto->getActivo() != "") || ($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trasportacionesDto->getactivo() != "") {
            $sql.="activo='" . $trasportacionesDto->getActivo() . "'";
            if (($trasportacionesDto->getFechaRegistro() != "") || ($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trasportacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trasportacionesDto->getFechaRegistro() . "'";
            if (($trasportacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trasportacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trasportacionesDto->getFechaActualizacion() . "'";
        }
        $sql .= " order by desTrasportacion ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TrasportacionesDTO();
                    $tmp[$contador]->setCveTrasportacion($row["cveTrasportacion"]);
                    $tmp[$contador]->setDesTrasportacion($row["desTrasportacion"]);
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