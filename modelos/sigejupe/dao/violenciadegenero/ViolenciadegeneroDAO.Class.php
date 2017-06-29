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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ViolenciadegeneroDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertViolenciadegenero($violenciadegeneroDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblviolenciadegenero(";
        if ($violenciadegeneroDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero";
            if (($violenciadegeneroDto->getCveEfecto() != "") || ($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getcveEfecto() != "") {
            $sql.="cveEfecto";
            if (($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud";
            if (($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($violenciadegeneroDto->getidViolenciaDeGenero() != "") {
            $sql.="'" . $violenciadegeneroDto->getidViolenciaDeGenero() . "'";
            if (($violenciadegeneroDto->getCveEfecto() != "") || ($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getcveEfecto() != "") {
            $sql.="'" . $violenciadegeneroDto->getcveEfecto() . "'";
            if (($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getidImpOfeDelSolicitud() != "") {
            $sql.="'" . $violenciadegeneroDto->getidImpOfeDelSolicitud() . "'";
            if (($violenciadegeneroDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getactivo() != "") {
            $sql.="'" . $violenciadegeneroDto->getactivo() . "'";
        }
        if ($violenciadegeneroDto->getfechaRegistro() != "") {
            
        }
        if ($violenciadegeneroDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciadegeneroDTO();
            $tmp->setidViolenciaDeGenero($this->_proveedor->lastID());
            $tmp = $this->selectViolenciadegenero($tmp, "", $this->_proveedor);
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

    public function updateViolenciadegenero($violenciadegeneroDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblviolenciadegenero SET ";
        if ($violenciadegeneroDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero='" . $violenciadegeneroDto->getidViolenciaDeGenero() . "'";
            if (($violenciadegeneroDto->getCveEfecto() != "") || ($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $violenciadegeneroDto->getcveEfecto() . "'";
            if (($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $violenciadegeneroDto->getidImpOfeDelSolicitud() . "'";
            if (($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getactivo() != "") {
            $sql.="activo='" . $violenciadegeneroDto->getactivo() . "'";
            if (($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciadegeneroDto->getfechaRegistro() . "'";
            if (($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegeneroDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciadegeneroDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idViolenciaDeGenero='" . $violenciadegeneroDto->getidViolenciaDeGenero() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciadegeneroDTO();
            $tmp->setidViolenciaDeGenero($violenciadegeneroDto->getidViolenciaDeGenero());
            $tmp = $this->selectViolenciadegenero($tmp, "", $this->_proveedor);
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

    public function deleteViolenciadegenero($violenciadegeneroDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblviolenciadegenero  WHERE idViolenciaDeGenero='" . $violenciadegeneroDto->getidViolenciaDeGenero() . "'";
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

    public function selectViolenciadegenero($violenciadegeneroDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idViolenciaDeGenero,cveEfecto,idImpOfeDelSolicitud,activo,fechaRegistro,fechaActualizacion FROM tblviolenciadegenero ";
        if (($violenciadegeneroDto->getidViolenciaDeGenero() != "") || ($violenciadegeneroDto->getcveEfecto() != "") || ($violenciadegeneroDto->getidImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getactivo() != "") || ($violenciadegeneroDto->getfechaRegistro() != "") || ($violenciadegeneroDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($violenciadegeneroDto->getidViolenciaDeGenero() != "") {
            $sql.="idViolenciaDeGenero='" . $violenciadegeneroDto->getIdViolenciaDeGenero() . "'";
            if (($violenciadegeneroDto->getCveEfecto() != "") || ($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegeneroDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $violenciadegeneroDto->getCveEfecto() . "'";
            if (($violenciadegeneroDto->getIdImpOfeDelSolicitud() != "") || ($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegeneroDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $violenciadegeneroDto->getIdImpOfeDelSolicitud() . "'";
            if (($violenciadegeneroDto->getActivo() != "") || ($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegeneroDto->getactivo() != "") {
            $sql.="activo='" . $violenciadegeneroDto->getActivo() . "'";
            if (($violenciadegeneroDto->getFechaRegistro() != "") || ($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegeneroDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciadegeneroDto->getFechaRegistro() . "'";
            if (($violenciadegeneroDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegeneroDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciadegeneroDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ViolenciadegeneroDTO();
                    $tmp[$contador]->setIdViolenciaDeGenero($row["idViolenciaDeGenero"]);
                    $tmp[$contador]->setCveEfecto($row["cveEfecto"]);
                    $tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
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