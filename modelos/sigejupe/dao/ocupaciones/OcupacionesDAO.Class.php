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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class OcupacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOcupaciones($ocupacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblocupaciones(";
        if ($ocupacionesDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion";
            if (($ocupacionesDto->getDesOcupacion() != "") || ($ocupacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getdesOcupacion() != "") {
            $sql.="desOcupacion";
            if (($ocupacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ocupacionesDto->getcveOcupacion() != "") {
            $sql.="'" . $ocupacionesDto->getcveOcupacion() . "'";
            if (($ocupacionesDto->getDesOcupacion() != "") || ($ocupacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getdesOcupacion() != "") {
            $sql.="'" . $ocupacionesDto->getdesOcupacion() . "'";
            if (($ocupacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getactivo() != "") {
            $sql.="'" . $ocupacionesDto->getactivo() . "'";
        }
        if ($ocupacionesDto->getfechaRegistro() != "") {
            
        }
        if ($ocupacionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OcupacionesDTO();
            $tmp->setcveOcupacion($this->_proveedor->lastID());
            $tmp = $this->selectOcupaciones($tmp, "", $this->_proveedor);
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

    public function updateOcupaciones($ocupacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblocupaciones SET ";
        if ($ocupacionesDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ocupacionesDto->getcveOcupacion() . "'";
            if (($ocupacionesDto->getDesOcupacion() != "") || ($ocupacionesDto->getActivo() != "") || ($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getdesOcupacion() != "") {
            $sql.="desOcupacion='" . $ocupacionesDto->getdesOcupacion() . "'";
            if (($ocupacionesDto->getActivo() != "") || ($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getactivo() != "") {
            $sql.="activo='" . $ocupacionesDto->getactivo() . "'";
            if (($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ocupacionesDto->getfechaRegistro() . "'";
            if (($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ocupacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ocupacionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveOcupacion='" . $ocupacionesDto->getcveOcupacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OcupacionesDTO();
            $tmp->setcveOcupacion($ocupacionesDto->getcveOcupacion());
            $tmp = $this->selectOcupaciones($tmp, "", $this->_proveedor);
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

    public function deleteOcupaciones($ocupacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblocupaciones  WHERE cveOcupacion='" . $ocupacionesDto->getcveOcupacion() . "'";
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

    public function selectOcupaciones($ocupacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveOcupacion,desOcupacion,activo,fechaRegistro,fechaActualizacion FROM tblocupaciones ";
        if (($ocupacionesDto->getcveOcupacion() != "") || ($ocupacionesDto->getdesOcupacion() != "") || ($ocupacionesDto->getactivo() != "") || ($ocupacionesDto->getfechaRegistro() != "") || ($ocupacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($ocupacionesDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ocupacionesDto->getCveOcupacion() . "'";
            if (($ocupacionesDto->getDesOcupacion() != "") || ($ocupacionesDto->getActivo() != "") || ($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ocupacionesDto->getdesOcupacion() != "") {
            $sql.="desOcupacion='" . $ocupacionesDto->getDesOcupacion() . "'";
            if (($ocupacionesDto->getActivo() != "") || ($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ocupacionesDto->getactivo() != "") {
            $sql.="activo='" . $ocupacionesDto->getActivo() . "'";
            if (($ocupacionesDto->getFechaRegistro() != "") || ($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ocupacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ocupacionesDto->getFechaRegistro() . "'";
            if (($ocupacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ocupacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ocupacionesDto->getFechaActualizacion() . "'";
        }
        $sql.= " order by desOcupacion asc ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new OcupacionesDTO();
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setDesOcupacion($row["desOcupacion"]);
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