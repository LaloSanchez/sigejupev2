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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ViolenciafactoressocialesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertViolenciafactoressociales($violenciafactoressocialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblviolenciafactoressociales(";
        if ($violenciafactoressocialesDto->getidViolenciaFactorSocial() != "") {
            $sql.="idViolenciaFactorSocial";
            if (($violenciafactoressocialesDto->getCveFactorCultural() != "") || ($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural";
            if (($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero";
            if (($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($violenciafactoressocialesDto->getidViolenciaFactorSocial() != "") {
            $sql.="'" . $violenciafactoressocialesDto->getidViolenciaFactorSocial() . "'";
            if (($violenciafactoressocialesDto->getCveFactorCultural() != "") || ($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getcveFactorCultural() != "") {
            $sql.="'" . $violenciafactoressocialesDto->getcveFactorCultural() . "'";
            if (($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getidViolenciaDeGenero() != "") {
            $sql.="'" . $violenciafactoressocialesDto->getidViolenciaDeGenero() . "'";
            if (($violenciafactoressocialesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getactivo() != "") {
            $sql.="'" . $violenciafactoressocialesDto->getactivo() . "'";
        }
        if ($violenciafactoressocialesDto->getfechaRegistro() != "") {
            
        }
        if ($violenciafactoressocialesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciafactoressocialesDTO();
            $tmp->setidViolenciaFactorSocial($this->_proveedor->lastID());
            $tmp = $this->selectViolenciafactoressociales($tmp, "", $this->_proveedor);
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

    public function updateViolenciafactoressociales($violenciafactoressocialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblviolenciafactoressociales SET ";
        if ($violenciafactoressocialesDto->getidViolenciaFactorSocial() != "") {
            $sql.="idViolenciaFactorSocial='" . $violenciafactoressocialesDto->getidViolenciaFactorSocial() . "'";
            if (($violenciafactoressocialesDto->getCveFactorCultural() != "") || ($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural='" . $violenciafactoressocialesDto->getcveFactorCultural() . "'";
            if (($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero='" . $violenciafactoressocialesDto->getidViolenciaDeGenero() . "'";
            if (($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getactivo() != "") {
            $sql.="activo='" . $violenciafactoressocialesDto->getactivo() . "'";
            if (($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciafactoressocialesDto->getfechaRegistro() . "'";
            if (($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciafactoressocialesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciafactoressocialesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idViolenciaFactorSocial='" . $violenciafactoressocialesDto->getidViolenciaFactorSocial() . "'";
        
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciafactoressocialesDTO();
            $tmp->setidViolenciaFactorSocial($violenciafactoressocialesDto->getidViolenciaFactorSocial());
            $tmp = $this->selectViolenciafactoressociales($tmp, "", $this->_proveedor);
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

    public function deleteViolenciafactoressociales($violenciafactoressocialesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblviolenciafactoressociales  WHERE idViolenciaFactorSocial='" . $violenciafactoressocialesDto->getidViolenciaFactorSocial() . "'";
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

    public function selectViolenciafactoressociales($violenciafactoressocialesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idViolenciaFactorSocial,cveFactorCultural,idViolenciaDeGenero,activo,fechaRegistro,fechaActualizacion FROM tblviolenciafactoressociales ";
        if (($violenciafactoressocialesDto->getidViolenciaFactorSocial() != "") || ($violenciafactoressocialesDto->getcveFactorCultural() != "") || ($violenciafactoressocialesDto->getidViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getactivo() != "") || ($violenciafactoressocialesDto->getfechaRegistro() != "") || ($violenciafactoressocialesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($violenciafactoressocialesDto->getidViolenciaFactorSocial() != "") {
            $sql.="idViolenciaFactorSocial='" . $violenciafactoressocialesDto->getIdViolenciaFactorSocial() . "'";
            if (($violenciafactoressocialesDto->getCveFactorCultural() != "") || ($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciafactoressocialesDto->getcveFactorCultural() != "") {
            $sql.="cveFactorCultural='" . $violenciafactoressocialesDto->getCveFactorCultural() . "'";
            if (($violenciafactoressocialesDto->getIdViolenciaDeGenero() != "") || ($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciafactoressocialesDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero='" . $violenciafactoressocialesDto->getIdViolenciaDeGenero() . "'";
            if (($violenciafactoressocialesDto->getActivo() != "") || ($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciafactoressocialesDto->getactivo() != "") {
            $sql.="activo='" . $violenciafactoressocialesDto->getActivo() . "'";
            if (($violenciafactoressocialesDto->getFechaRegistro() != "") || ($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciafactoressocialesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciafactoressocialesDto->getFechaRegistro() . "'";
            if (($violenciafactoressocialesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciafactoressocialesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciafactoressocialesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ViolenciafactoressocialesDTO();
                    $tmp[$contador]->setIdViolenciaFactorSocial($row["idViolenciaFactorSocial"]);
                    $tmp[$contador]->setCveFactorCultural($row["cveFactorCultural"]);
                    $tmp[$contador]->setIdViolenciaDeGenero($row["idViolenciaDeGenero"]);
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