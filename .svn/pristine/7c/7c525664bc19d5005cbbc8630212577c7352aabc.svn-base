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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class FormulacionimputacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertFormulacionimputaciones($formulacionimputacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblformulacionimputaciones(";
        if ($formulacionimputacionesDto->getIdFormulacionImputacion() != "") {
            $sql.="idFormulacionImputacion";
            if (($formulacionimputacionesDto->getIdActuacion() != "") || ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta";
            if (($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $sql.="cveTipoFormulacion";
            if (($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getFechaFormulacion() != "") {
            $sql.="fechaFormulacion";
            if (($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador";
            if (($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=") VALUES(";
        if ($formulacionimputacionesDto->getIdFormulacionImputacion() != "") {
            $sql.="'" . $formulacionimputacionesDto->getIdFormulacionImputacion() . "'";
            if (($formulacionimputacionesDto->getIdActuacion() != "") || ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdActuacion() != "") {
            $sql.="'" . $formulacionimputacionesDto->getIdActuacion() . "'";
            if (($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="'" . $formulacionimputacionesDto->getIdImpOfeDelCarpeta() . "'";
            if (($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $sql.="'" . $formulacionimputacionesDto->getCveTipoFormulacion() . "'";
            if (($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getFechaFormulacion() != "") {
            $sql.="'" . $formulacionimputacionesDto->getFechaFormulacion() . "'";
            if (($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdJuzgador() != "") {
            $sql.="'" . $formulacionimputacionesDto->getIdJuzgador() . "'";
            if (($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getActivo() != "") {
            $sql.="'" . $formulacionimputacionesDto->getActivo() . "'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new FormulacionimputacionesDTO();
            $tmp->setidFormulacionImputacion($this->_proveedor->lastID());
            $tmp = $this->selectFormulacionimputaciones($tmp, "", $this->_proveedor);
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

    public function updateFormulacionimputaciones($formulacionimputacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblformulacionimputaciones SET ";
        if ($formulacionimputacionesDto->getIdFormulacionImputacion() != "") {
            $sql.="idFormulacionImputacion='" . $formulacionimputacionesDto->getIdFormulacionImputacion() . "'";
            if (($formulacionimputacionesDto->getIdActuacion() != "") || ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $formulacionimputacionesDto->getIdActuacion() . "'";
            if (($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $formulacionimputacionesDto->getIdImpOfeDelCarpeta() . "'";
            if (($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $sql.="cveTipoFormulacion='" . $formulacionimputacionesDto->getCveTipoFormulacion() . "'";
            if (($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getFechaFormulacion() != "") {
            $sql.="fechaFormulacion='" . $formulacionimputacionesDto->getFechaFormulacion() . "'";
            if (($formulacionimputacionesDto->getIdJuzgador() != "") || ($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $formulacionimputacionesDto->getIdJuzgador() . "'";
            if (($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($formulacionimputacionesDto->getActivo() != "") {
            $sql.="activo='" . $formulacionimputacionesDto->getActivo() . "'";
        }
        $sql.=" WHERE idFormulacionImputacion='" . $formulacionimputacionesDto->getIdFormulacionImputacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new FormulacionimputacionesDTO();
            $tmp->setidFormulacionImputacion($formulacionimputacionesDto->getIdFormulacionImputacion());
            $tmp = $this->selectFormulacionimputaciones($tmp, "", $this->_proveedor);
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

    public function deleteFormulacionimputaciones($formulacionimputacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblformulacionimputaciones  WHERE idFormulacionImputacion='" . $formulacionimputacionesDto->getIdFormulacionImputacion() . "'";
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

     public function selectFormulacionimputaciones($formulacionimputacionesDto, $orden = "", $proveedor = null, $param = null,$fields=null) {
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
            $sql .= " idFormulacionImputacion,idActuacion,idImpOfeDelCarpeta,cveTipoFormulacion,fechaFormulacion,idJuzgador,activo ";
        }else{
            $sql.=$fields;
        }
        $sql.=" FROM tblformulacionimputaciones ";
        if (($formulacionimputacionesDto->getIdFormulacionImputacion() != "") || ($formulacionimputacionesDto->getIdActuacion() != "") || ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
            $sql.=" WHERE ";
        }
        if ($formulacionimputacionesDto->getIdFormulacionImputacion() != "") {
            $sql.="idFormulacionImputacion='" . $formulacionimputacionesDto->getIdFormulacionImputacion() . "'";
            if (($formulacionimputacionesDto->getIdActuacion() != "") || ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($formulacionimputacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $formulacionimputacionesDto->getIdActuacion() . "'";
            if (($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") || ($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($formulacionimputacionesDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $formulacionimputacionesDto->getIdImpOfeDelCarpeta() . "'";
            if (($formulacionimputacionesDto->getCveTipoFormulacion() != "") || ($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($formulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $sql.="cveTipoFormulacion='" . $formulacionimputacionesDto->getCveTipoFormulacion() . "'";
            if (($formulacionimputacionesDto->getFechaFormulacion() != "") || ($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($formulacionimputacionesDto->getFechaFormulacion() != "") {
            $sql.="fechaFormulacion='" . $formulacionimputacionesDto->getFechaFormulacion() . "'";
            if (($formulacionimputacionesDto->getIdJuzgador() != "")||($formulacionimputacionesDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($formulacionimputacionesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $formulacionimputacionesDto->getIdJuzgador() . "'";
            if($formulacionimputacionesDto->getActivo() != ""){
                $sql.=" AND ";
            }
        }
        if($formulacionimputacionesDto->getActivo() != ""){
            $sql.="activo='".$formulacionimputacionesDto->getActivo()."'";
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
                    $tmp[$contador] = new FormulacionimputacionesDTO();
                    $tmp[$contador]->setIdFormulacionImputacion($row["idFormulacionImputacion"]);
                    $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
                    $tmp[$contador]->setCveTipoFormulacion($row["cveTipoFormulacion"]);
                    $tmp[$contador]->setFechaFormulacion($row["fechaFormulacion"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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