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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposreligiones/TiposreligionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposreligionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposreligiones($tiposreligionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposreligiones(";
        if ($tiposreligionesDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion";
            if (($tiposreligionesDto->getDesTipoReligion() != "") || ($tiposreligionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getDesTipoReligion() != "") {
            $sql.="desTipoReligion";
            if (($tiposreligionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposreligionesDto->getCveTipoReligion() != "") {
            $sql.="'" . $tiposreligionesDto->getCveTipoReligion() . "'";
            if (($tiposreligionesDto->getDesTipoReligion() != "") || ($tiposreligionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getDesTipoReligion() != "") {
            $sql.="'" . $tiposreligionesDto->getDesTipoReligion() . "'";
            if (($tiposreligionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getActivo() != "") {
            $sql.="'" . $tiposreligionesDto->getActivo() . "'";
        }
        if ($tiposreligionesDto->getFechaRegistro() != "") {
            
        }
        if ($tiposreligionesDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposreligionesDTO();
            $tmp->setcveTipoReligion($this->_proveedor->lastID());
            $tmp = $this->selectTiposreligiones($tmp, "", $this->_proveedor);
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

    public function updateTiposreligiones($tiposreligionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposreligiones SET ";
        if ($tiposreligionesDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $tiposreligionesDto->getCveTipoReligion() . "'";
            if (($tiposreligionesDto->getDesTipoReligion() != "") || ($tiposreligionesDto->getActivo() != "") || ($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getDesTipoReligion() != "") {
            $sql.="desTipoReligion='" . $tiposreligionesDto->getDesTipoReligion() . "'";
            if (($tiposreligionesDto->getActivo() != "") || ($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getActivo() != "") {
            $sql.="activo='" . $tiposreligionesDto->getActivo() . "'";
            if (($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposreligionesDto->getFechaRegistro() . "'";
            if (($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposreligionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposreligionesDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoReligion='" . $tiposreligionesDto->getCveTipoReligion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposreligionesDTO();
            $tmp->setcveTipoReligion($tiposreligionesDto->getCveTipoReligion());
            $tmp = $this->selectTiposreligiones($tmp, "", $this->_proveedor);
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

    public function deleteTiposreligiones($tiposreligionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposreligiones  WHERE cveTipoReligion='" . $tiposreligionesDto->getCveTipoReligion() . "'";
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

    public function selectTiposreligiones($tiposreligionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoReligion,desTipoReligion,activo,fechaRegistro,fechaActualizacion FROM tbltiposreligiones ";
        if (($tiposreligionesDto->getCveTipoReligion() != "") || ($tiposreligionesDto->getDesTipoReligion() != "") || ($tiposreligionesDto->getActivo() != "") || ($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposreligionesDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $tiposreligionesDto->getCveTipoReligion() . "'";
            if (($tiposreligionesDto->getDesTipoReligion() != "") || ($tiposreligionesDto->getActivo() != "") || ($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposreligionesDto->getDesTipoReligion() != "") {
            $sql.="desTipoReligion='" . $tiposreligionesDto->getDesTipoReligion() . "'";
            if (($tiposreligionesDto->getActivo() != "") || ($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposreligionesDto->getActivo() != "") {
            $sql.="activo='" . $tiposreligionesDto->getActivo() . "'";
            if (($tiposreligionesDto->getFechaRegistro() != "") || ($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposreligionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposreligionesDto->getFechaRegistro() . "'";
            if (($tiposreligionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposreligionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposreligionesDto->getFechaActualizacion() . "'";
        }
        
        $sql .= " order by desTipoReligion asc";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TiposreligionesDTO();
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setDesTipoReligion($row["desTipoReligion"]);
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