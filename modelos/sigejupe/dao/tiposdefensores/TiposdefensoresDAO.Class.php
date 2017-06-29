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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposdefensoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposdefensores($tiposdefensoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposdefensores(";
        if ($tiposdefensoresDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor";
            if (($tiposdefensoresDto->getDesTipoDefensor() != "") || ($tiposdefensoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getdesTipoDefensor() != "") {
            $sql.="desTipoDefensor";
            if (($tiposdefensoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposdefensoresDto->getcveTipoDefensor() != "") {
            $sql.="'" . $tiposdefensoresDto->getcveTipoDefensor() . "'";
            if (($tiposdefensoresDto->getDesTipoDefensor() != "") || ($tiposdefensoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getdesTipoDefensor() != "") {
            $sql.="'" . $tiposdefensoresDto->getdesTipoDefensor() . "'";
            if (($tiposdefensoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getactivo() != "") {
            $sql.="'" . $tiposdefensoresDto->getactivo() . "'";
        }
        if ($tiposdefensoresDto->getfechaRegistro() != "") {
            
        }
        if ($tiposdefensoresDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposdefensoresDTO();
            $tmp->setcveTipoDefensor($this->_proveedor->lastID());
            $tmp = $this->selectTiposdefensores($tmp, "", $this->_proveedor);
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

    public function updateTiposdefensores($tiposdefensoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposdefensores SET ";
        if ($tiposdefensoresDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $tiposdefensoresDto->getcveTipoDefensor() . "'";
            if (($tiposdefensoresDto->getDesTipoDefensor() != "") || ($tiposdefensoresDto->getActivo() != "") || ($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getdesTipoDefensor() != "") {
            $sql.="desTipoDefensor='" . $tiposdefensoresDto->getdesTipoDefensor() . "'";
            if (($tiposdefensoresDto->getActivo() != "") || ($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getactivo() != "") {
            $sql.="activo='" . $tiposdefensoresDto->getactivo() . "'";
            if (($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposdefensoresDto->getfechaRegistro() . "'";
            if (($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdefensoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposdefensoresDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoDefensor='" . $tiposdefensoresDto->getcveTipoDefensor() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposdefensoresDTO();
            $tmp->setcveTipoDefensor($tiposdefensoresDto->getcveTipoDefensor());
            $tmp = $this->selectTiposdefensores($tmp, "", $this->_proveedor);
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

    public function deleteTiposdefensores($tiposdefensoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposdefensores  WHERE cveTipoDefensor='" . $tiposdefensoresDto->getcveTipoDefensor() . "'";
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

    public function selectTiposdefensores($tiposdefensoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoDefensor,desTipoDefensor,activo,fechaRegistro,fechaActualizacion FROM tbltiposdefensores ";
        if (($tiposdefensoresDto->getcveTipoDefensor() != "") || ($tiposdefensoresDto->getdesTipoDefensor() != "") || ($tiposdefensoresDto->getactivo() != "") || ($tiposdefensoresDto->getfechaRegistro() != "") || ($tiposdefensoresDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposdefensoresDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $tiposdefensoresDto->getCveTipoDefensor() . "'";
            if (($tiposdefensoresDto->getDesTipoDefensor() != "") || ($tiposdefensoresDto->getActivo() != "") || ($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdefensoresDto->getdesTipoDefensor() != "") {
            $sql.="desTipoDefensor='" . $tiposdefensoresDto->getDesTipoDefensor() . "'";
            if (($tiposdefensoresDto->getActivo() != "") || ($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdefensoresDto->getactivo() != "") {
            $sql.="activo='" . $tiposdefensoresDto->getActivo() . "'";
            if (($tiposdefensoresDto->getFechaRegistro() != "") || ($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdefensoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposdefensoresDto->getFechaRegistro() . "'";
            if (($tiposdefensoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdefensoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposdefensoresDto->getFechaActualizacion() . "'";
        }
        
         $sql.=" order by desTipoDefensor ASC";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TiposdefensoresDTO();
                    $tmp[$contador]->setCveTipoDefensor($row["cveTipoDefensor"]);
                    $tmp[$contador]->setDesTipoDefensor($row["desTipoDefensor"]);
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