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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposresoluciones/TiposresolucionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposresolucionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposresoluciones($tiposresolucionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposresoluciones(";
        if ($tiposresolucionesDto->getcveTipoResolucion() != "") {
            $sql.="cveTipoResolucion";
            if (($tiposresolucionesDto->getDesTipoResolucion() != "") || ($tiposresolucionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getdesTipoResolucion() != "") {
            $sql.="desTipoResolucion";
            if (($tiposresolucionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposresolucionesDto->getcveTipoResolucion() != "") {
            $sql.="'" . $tiposresolucionesDto->getcveTipoResolucion() . "'";
            if (($tiposresolucionesDto->getDesTipoResolucion() != "") || ($tiposresolucionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getdesTipoResolucion() != "") {
            $sql.="'" . $tiposresolucionesDto->getdesTipoResolucion() . "'";
            if (($tiposresolucionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getactivo() != "") {
            $sql.="'" . $tiposresolucionesDto->getactivo() . "'";
        }
        if ($tiposresolucionesDto->getfechaRegistro() != "") {
            
        }
        if ($tiposresolucionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposresolucionesDTO();
            $tmp->setcveTipoResolucion($this->_proveedor->lastID());
            $tmp = $this->selectTiposresoluciones($tmp, "", $this->_proveedor);
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

    public function updateTiposresoluciones($tiposresolucionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposresoluciones SET ";
        if ($tiposresolucionesDto->getcveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $tiposresolucionesDto->getcveTipoResolucion() . "'";
            if (($tiposresolucionesDto->getDesTipoResolucion() != "") || ($tiposresolucionesDto->getActivo() != "") || ($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getdesTipoResolucion() != "") {
            $sql.="desTipoResolucion='" . $tiposresolucionesDto->getdesTipoResolucion() . "'";
            if (($tiposresolucionesDto->getActivo() != "") || ($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getactivo() != "") {
            $sql.="activo='" . $tiposresolucionesDto->getactivo() . "'";
            if (($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposresolucionesDto->getfechaRegistro() . "'";
            if (($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposresolucionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposresolucionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoResolucion='" . $tiposresolucionesDto->getcveTipoResolucion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposresolucionesDTO();
            $tmp->setcveTipoResolucion($tiposresolucionesDto->getcveTipoResolucion());
            $tmp = $this->selectTiposresoluciones($tmp, "", $this->_proveedor);
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

    public function deleteTiposresoluciones($tiposresolucionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposresoluciones  WHERE cveTipoResolucion='" . $tiposresolucionesDto->getcveTipoResolucion() . "'";
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

    public function selectTiposresoluciones($tiposresolucionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoResolucion,desTipoResolucion,activo,fechaRegistro,fechaActualizacion FROM tbltiposresoluciones ";
        if (($tiposresolucionesDto->getcveTipoResolucion() != "") || ($tiposresolucionesDto->getdesTipoResolucion() != "") || ($tiposresolucionesDto->getactivo() != "") || ($tiposresolucionesDto->getfechaRegistro() != "") || ($tiposresolucionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposresolucionesDto->getcveTipoResolucion() != "") {
            $sql.="cveTipoResolucion='" . $tiposresolucionesDto->getCveTipoResolucion() . "'";
            if (($tiposresolucionesDto->getDesTipoResolucion() != "") || ($tiposresolucionesDto->getActivo() != "") || ($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposresolucionesDto->getdesTipoResolucion() != "") {
            $sql.="desTipoResolucion='" . $tiposresolucionesDto->getDesTipoResolucion() . "'";
            if (($tiposresolucionesDto->getActivo() != "") || ($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposresolucionesDto->getactivo() != "") {
            $sql.="activo='" . $tiposresolucionesDto->getActivo() . "'";
            if (($tiposresolucionesDto->getFechaRegistro() != "") || ($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposresolucionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposresolucionesDto->getFechaRegistro() . "'";
            if (($tiposresolucionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposresolucionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposresolucionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TiposresolucionesDTO();
                    $tmp[$contador]->setCveTipoResolucion($row["cveTipoResolucion"]);
                    $tmp[$contador]->setDesTipoResolucion(utf8_encode($row["desTipoResolucion"]));
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