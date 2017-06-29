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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DrogasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDrogas($drogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldrogas(";
        if ($drogasDto->getcveDroga() != "") {
            $sql.="cveDroga";
            if (($drogasDto->getDesDroga() != "") || ($drogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getdesDroga() != "") {
            $sql.="desDroga";
            if (($drogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($drogasDto->getcveDroga() != "") {
            $sql.="'" . $drogasDto->getcveDroga() . "'";
            if (($drogasDto->getDesDroga() != "") || ($drogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getdesDroga() != "") {
            $sql.="'" . $drogasDto->getdesDroga() . "'";
            if (($drogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getactivo() != "") {
            $sql.="'" . $drogasDto->getactivo() . "'";
        }
        if ($drogasDto->getfechaRegistro() != "") {
            
        }
        if ($drogasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DrogasDTO();
            $tmp->setcveDroga($this->_proveedor->lastID());
            $tmp = $this->selectDrogas($tmp, "", $this->_proveedor);
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

    public function updateDrogas($drogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldrogas SET ";
        if ($drogasDto->getcveDroga() != "") {
            $sql.="cveDroga='" . $drogasDto->getcveDroga() . "'";
            if (($drogasDto->getDesDroga() != "") || ($drogasDto->getActivo() != "") || ($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getdesDroga() != "") {
            $sql.="desDroga='" . $drogasDto->getdesDroga() . "'";
            if (($drogasDto->getActivo() != "") || ($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getactivo() != "") {
            $sql.="activo='" . $drogasDto->getactivo() . "'";
            if (($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $drogasDto->getfechaRegistro() . "'";
            if (($drogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($drogasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $drogasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveDroga='" . $drogasDto->getcveDroga() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DrogasDTO();
            $tmp->setcveDroga($drogasDto->getcveDroga());
            $tmp = $this->selectDrogas($tmp, "", $this->_proveedor);
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

    public function deleteDrogas($drogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldrogas  WHERE cveDroga='" . $drogasDto->getcveDroga() . "'";
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

    public function selectDrogas($drogasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveDroga,desDroga,activo,fechaRegistro,fechaActualizacion FROM tbldrogas ";
        if (($drogasDto->getcveDroga() != "") || ($drogasDto->getdesDroga() != "") || ($drogasDto->getactivo() != "") || ($drogasDto->getfechaRegistro() != "") || ($drogasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($drogasDto->getcveDroga() != "") {
            $sql.="cveDroga='" . $drogasDto->getCveDroga() . "'";
            if (($drogasDto->getDesDroga() != "") || ($drogasDto->getActivo() != "") || ($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($drogasDto->getdesDroga() != "") {
            $sql.="desDroga='" . $drogasDto->getDesDroga() . "'";
            if (($drogasDto->getActivo() != "") || ($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($drogasDto->getactivo() != "") {
            $sql.="activo='" . $drogasDto->getActivo() . "'";
            if (($drogasDto->getFechaRegistro() != "") || ($drogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($drogasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $drogasDto->getFechaRegistro() . "'";
            if (($drogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($drogasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $drogasDto->getFechaActualizacion() . "'";
        }
        $sql.= " order by desDroga asc ";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DrogasDTO();
                    $tmp[$contador]->setCveDroga($row["cveDroga"]);
                    $tmp[$contador]->setDesDroga($row["desDroga"]);
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