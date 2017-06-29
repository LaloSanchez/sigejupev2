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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class CeresosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertCeresos($ceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblceresos(";
        if ($ceresosDto->getcveCereso() != "") {
            $sql.="cveCereso";
            if (($ceresosDto->getDesCereso() != "") || ($ceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getdesCereso() != "") {
            $sql.="desCereso";
            if (($ceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ceresosDto->getcveCereso() != "") {
            $sql.="'" . $ceresosDto->getcveCereso() . "'";
            if (($ceresosDto->getDesCereso() != "") || ($ceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getdesCereso() != "") {
            $sql.="'" . $ceresosDto->getdesCereso() . "'";
            if (($ceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getactivo() != "") {
            $sql.="'" . $ceresosDto->getactivo() . "'";
        }
        if ($ceresosDto->getfechaRegistro() != "") {
            
        }
        if ($ceresosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CeresosDTO();
            $tmp->setcveCereso($this->_proveedor->lastID());
            $tmp = $this->selectCeresos($tmp, "", $this->_proveedor);
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

    public function updateCeresos($ceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblceresos SET ";
        if ($ceresosDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $ceresosDto->getcveCereso() . "'";
            if (($ceresosDto->getDesCereso() != "") || ($ceresosDto->getActivo() != "") || ($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getdesCereso() != "") {
            $sql.="desCereso='" . $ceresosDto->getdesCereso() . "'";
            if (($ceresosDto->getActivo() != "") || ($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getactivo() != "") {
            $sql.="activo='" . $ceresosDto->getactivo() . "'";
            if (($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ceresosDto->getfechaRegistro() . "'";
            if (($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ceresosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveCereso='" . $ceresosDto->getcveCereso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CeresosDTO();
            $tmp->setcveCereso($ceresosDto->getcveCereso());
            $tmp = $this->selectCeresos($tmp, "", $this->_proveedor);
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

    public function deleteCeresos($ceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblceresos  WHERE cveCereso='" . $ceresosDto->getcveCereso() . "'";
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

    public function selectCeresos($ceresosDto, $orden = "", $proveedor = null, $param = null,$fields=null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if($fields === null){
           $sql .= " cveCereso,desCereso,activo,fechaRegistro,fechaActualizacion ";
        }else{
            $sql.=$fields;
        }
        $sql.=" FROM tblceresos ";
        if (($ceresosDto->getcveCereso() != "") || ($ceresosDto->getdesCereso() != "") || ($ceresosDto->getactivo() != "") || ($ceresosDto->getfechaRegistro() != "") || ($ceresosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($ceresosDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $ceresosDto->getCveCereso() . "'";
            if (($ceresosDto->getDesCereso() != "") || ($ceresosDto->getActivo() != "") || ($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosDto->getdesCereso() != "") {
            $sql.="desCereso='" . $ceresosDto->getDesCereso() . "'";
            if (($ceresosDto->getActivo() != "") || ($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosDto->getactivo() != "") {
            $sql.="activo='" . $ceresosDto->getActivo() . "'";
            if (($ceresosDto->getFechaRegistro() != "") || ($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ceresosDto->getFechaRegistro() . "'";
            if (($ceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ceresosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $inicial="";
        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                    $tmp[$contador] = new CeresosDTO();
                    $tmp[$contador]->setCveCereso($row["cveCereso"]);
                    $tmp[$contador]->setDesCereso($row["desCereso"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    } else { // HSAY VA 
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++){
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = $row[$fieldInfo->name];
                        } 
                    }
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