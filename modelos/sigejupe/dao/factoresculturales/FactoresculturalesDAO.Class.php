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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/factoresculturales/FactoresculturalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class FactoresculturalesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertFactoresculturales($factoresculturalesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblfactoresculturales(";
        if ($factoresculturalesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural";
            if (($factoresculturalesDto->getDesFactorCultural() != "") || ($factoresculturalesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getdesFactorCultural() != "") {
            $sql.="desFactorCultural";
            if (($factoresculturalesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($factoresculturalesDto->getcveFactorCultural() != "") {
            $sql.="'" . $factoresculturalesDto->getcveFactorCultural() . "'";
            if (($factoresculturalesDto->getDesFactorCultural() != "") || ($factoresculturalesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getdesFactorCultural() != "") {
            $sql.="'" . $factoresculturalesDto->getdesFactorCultural() . "'";
            if (($factoresculturalesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getactivo() != "") {
            $sql.="'" . $factoresculturalesDto->getactivo() . "'";
        }
        if ($factoresculturalesDto->getfechaRegistro() != "") {
            
        }
        if ($factoresculturalesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new FactoresculturalesDTO();
            $tmp->setcveFactorCultural($this->_proveedor->lastID());
            $tmp = $this->selectFactoresculturales($tmp, "", $this->_proveedor);
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

    public function updateFactoresculturales($factoresculturalesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblfactoresculturales SET ";
        if ($factoresculturalesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural='" . $factoresculturalesDto->getcveFactorCultural() . "'";
            if (($factoresculturalesDto->getDesFactorCultural() != "") || ($factoresculturalesDto->getActivo() != "") || ($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getdesFactorCultural() != "") {
            $sql.="desFactorCultural='" . $factoresculturalesDto->getdesFactorCultural() . "'";
            if (($factoresculturalesDto->getActivo() != "") || ($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getactivo() != "") {
            $sql.="activo='" . $factoresculturalesDto->getactivo() . "'";
            if (($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $factoresculturalesDto->getfechaRegistro() . "'";
            if (($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($factoresculturalesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $factoresculturalesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveFactorCultural='" . $factoresculturalesDto->getcveFactorCultural() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new FactoresculturalesDTO();
            $tmp->setcveFactorCultural($factoresculturalesDto->getcveFactorCultural());
            $tmp = $this->selectFactoresculturales($tmp, "", $this->_proveedor);
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

    public function deleteFactoresculturales($factoresculturalesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblfactoresculturales  WHERE cveFactorCultural='" . $factoresculturalesDto->getcveFactorCultural() . "'";
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

    public function selectFactoresculturales($factoresculturalesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveFactorCultural,desFactorCultural,activo,fechaRegistro,fechaActualizacion FROM tblfactoresculturales ";
        if (($factoresculturalesDto->getcveFactorCultural() != "") || ($factoresculturalesDto->getdesFactorCultural() != "") || ($factoresculturalesDto->getactivo() != "") || ($factoresculturalesDto->getfechaRegistro() != "") || ($factoresculturalesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($factoresculturalesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural='" . $factoresculturalesDto->getCveFactorCultural() . "'";
            if (($factoresculturalesDto->getDesFactorCultural() != "") || ($factoresculturalesDto->getActivo() != "") || ($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($factoresculturalesDto->getdesFactorCultural() != "") {
            $sql.="desFactorCultural='" . $factoresculturalesDto->getDesFactorCultural() . "'";
            if (($factoresculturalesDto->getActivo() != "") || ($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($factoresculturalesDto->getactivo() != "") {
            $sql.="activo='" . $factoresculturalesDto->getActivo() . "'";
            if (($factoresculturalesDto->getFechaRegistro() != "") || ($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($factoresculturalesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $factoresculturalesDto->getFechaRegistro() . "'";
            if (($factoresculturalesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($factoresculturalesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $factoresculturalesDto->getFechaActualizacion() . "'";
        }

        $sql .= " order by desFactorCultural ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new FactoresculturalesDTO();
                    $tmp[$contador]->setCveFactorCultural($row["cveFactorCultural"]);
                    $tmp[$contador]->setDesFactorCultural($row["desFactorCultural"]);
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