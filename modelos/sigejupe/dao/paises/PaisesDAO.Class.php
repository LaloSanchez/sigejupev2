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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class PaisesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertPaises($paisesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblpaises(";
        if ($paisesDto->getcvePais() != "") {
            $sql.="cvePais";
            if (($paisesDto->getCveRegionMundial() != "") || ($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getcveRegionMundial() != "") {
            $sql.="cveRegionMundial";
            if (($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getdesPais() != "") {
            $sql.="desPais";
            if (($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($paisesDto->getcvePais() != "") {
            $sql.="'" . $paisesDto->getcvePais() . "'";
            if (($paisesDto->getCveRegionMundial() != "") || ($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getcveRegionMundial() != "") {
            $sql.="'" . $paisesDto->getcveRegionMundial() . "'";
            if (($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getdesPais() != "") {
            $sql.="'" . $paisesDto->getdesPais() . "'";
            if (($paisesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getactivo() != "") {
            $sql.="'" . $paisesDto->getactivo() . "'";
        }
        if ($paisesDto->getfechaRegistro() != "") {
            
        }
        if ($paisesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new PaisesDTO();
            $tmp->setcvePais($this->_proveedor->lastID());
            $tmp = $this->selectPaises($tmp, "", $this->_proveedor);
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

    public function updatePaises($paisesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblpaises SET ";
        if ($paisesDto->getcvePais() != "") {
            $sql.="cvePais='" . $paisesDto->getcvePais() . "'";
            if (($paisesDto->getCveRegionMundial() != "") || ($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getcveRegionMundial() != "") {
            $sql.="cveRegionMundial='" . $paisesDto->getcveRegionMundial() . "'";
            if (($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getdesPais() != "") {
            $sql.="desPais='" . $paisesDto->getdesPais() . "'";
            if (($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getactivo() != "") {
            $sql.="activo='" . $paisesDto->getactivo() . "'";
            if (($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $paisesDto->getfechaRegistro() . "'";
            if (($paisesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($paisesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $paisesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cvePais='" . $paisesDto->getcvePais() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new PaisesDTO();
            $tmp->setcvePais($paisesDto->getcvePais());
            $tmp = $this->selectPaises($tmp, "", $this->_proveedor);
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

    public function deletePaises($paisesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblpaises  WHERE cvePais='" . $paisesDto->getcvePais() . "'";
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

    public function selectPaises($paisesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cvePais,cveRegionMundial,desPais,activo,fechaRegistro,fechaActualizacion FROM tblpaises ";
        if (($paisesDto->getcvePais() != "") || ($paisesDto->getcveRegionMundial() != "") || ($paisesDto->getdesPais() != "") || ($paisesDto->getactivo() != "") || ($paisesDto->getfechaRegistro() != "") || ($paisesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($paisesDto->getcvePais() != "") {
            $sql.="cvePais='" . $paisesDto->getCvePais() . "'";
            if (($paisesDto->getCveRegionMundial() != "") || ($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($paisesDto->getcveRegionMundial() != "") {
            $sql.="cveRegionMundial='" . $paisesDto->getCveRegionMundial() . "'";
            if (($paisesDto->getDesPais() != "") || ($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($paisesDto->getdesPais() != "") {
            $sql.="desPais='" . $paisesDto->getDesPais() . "'";
            if (($paisesDto->getActivo() != "") || ($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($paisesDto->getactivo() != "") {
            $sql.="activo='" . $paisesDto->getActivo() . "'";
            if (($paisesDto->getFechaRegistro() != "") || ($paisesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($paisesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $paisesDto->getFechaRegistro() . "'";
            if (($paisesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($paisesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $paisesDto->getFechaActualizacion() . "'";
        }
        $sql.= " order by desPais asc";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new PaisesDTO();
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setCveRegionMundial($row["cveRegionMundial"]);
                    $tmp[$contador]->setDesPais($row["desPais"]);
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