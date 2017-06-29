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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AudienciasjuzgadorDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAudienciasjuzgador($audienciasjuzgadorDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblaudienciasjuzgador(";
        if ($audienciasjuzgadorDto->getidAudienciaJuez() != "") {
            $sql.="idAudienciaJuez";
            if (($audienciasjuzgadorDto->getIdAudiencia() != "") || ($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidAudiencia() != "") {
            $sql.="idAudiencia";
            if (($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador";
            if (($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($audienciasjuzgadorDto->getidAudienciaJuez() != "") {
            $sql.="'" . $audienciasjuzgadorDto->getidAudienciaJuez() . "'";
            if (($audienciasjuzgadorDto->getIdAudiencia() != "") || ($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidAudiencia() != "") {
            $sql.="'" . $audienciasjuzgadorDto->getidAudiencia() . "'";
            if (($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidJuzgador() != "") {
            $sql.="'" . $audienciasjuzgadorDto->getidJuzgador() . "'";
            if (($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getcveFuncionJuzgador() != "") {
            $sql.="'" . $audienciasjuzgadorDto->getcveFuncionJuzgador() . "'";
            if (($audienciasjuzgadorDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getactivo() != "") {
            $sql.="'" . $audienciasjuzgadorDto->getactivo() . "'";
        }
        if ($audienciasjuzgadorDto->getfechaRegistro() != "") {
            
        }
        if ($audienciasjuzgadorDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        echo $this->_proveedor->error();
        if (!$this->_proveedor->error()) {
            $tmp = new AudienciasjuzgadorDTO();
            $tmp->setidAudienciaJuez($this->_proveedor->lastID());
            $tmp = $this->selectAudienciasjuzgador($tmp, "", $this->_proveedor);
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

    public function updateAudienciasjuzgador($audienciasjuzgadorDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblaudienciasjuzgador SET ";
        if ($audienciasjuzgadorDto->getidAudienciaJuez() != "") {
            $sql.="idAudienciaJuez='" . $audienciasjuzgadorDto->getidAudienciaJuez() . "'";
            if (($audienciasjuzgadorDto->getIdAudiencia() != "") || ($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidAudiencia() != "") {
            $sql.="idAudiencia='" . $audienciasjuzgadorDto->getidAudiencia() . "'";
            if (($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $audienciasjuzgadorDto->getidJuzgador() . "'";
            if (($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador='" . $audienciasjuzgadorDto->getcveFuncionJuzgador() . "'";
            if (($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getactivo() != "") {
            $sql.="activo='" . $audienciasjuzgadorDto->getactivo() . "'";
            if (($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $audienciasjuzgadorDto->getfechaRegistro() . "'";
            if (($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($audienciasjuzgadorDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $audienciasjuzgadorDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idAudienciaJuez='" . $audienciasjuzgadorDto->getidAudienciaJuez() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AudienciasjuzgadorDTO();
            $tmp->setidAudienciaJuez($audienciasjuzgadorDto->getidAudienciaJuez());
            $tmp = $this->selectAudienciasjuzgador($tmp, "", $this->_proveedor);
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

    public function deleteAudienciasjuzgador($audienciasjuzgadorDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblaudienciasjuzgador  WHERE idAudienciaJuez='" . $audienciasjuzgadorDto->getidAudienciaJuez() . "'";
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

    public function selectAudienciasjuzgador($audienciasjuzgadorDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudienciaJuez,idAudiencia,idJuzgador,cveFuncionJuzgador,activo,fechaRegistro,fechaActualizacion FROM tblaudienciasjuzgador ";
        if (($audienciasjuzgadorDto->getidAudienciaJuez() != "") || ($audienciasjuzgadorDto->getidAudiencia() != "") || ($audienciasjuzgadorDto->getidJuzgador() != "") || ($audienciasjuzgadorDto->getcveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getactivo() != "") || ($audienciasjuzgadorDto->getfechaRegistro() != "") || ($audienciasjuzgadorDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($audienciasjuzgadorDto->getidAudienciaJuez() != "") {
            $sql.="idAudienciaJuez='" . $audienciasjuzgadorDto->getIdAudienciaJuez() . "'";
            if (($audienciasjuzgadorDto->getIdAudiencia() != "") || ($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getidAudiencia() != "") {
            $sql.="idAudiencia='" . $audienciasjuzgadorDto->getIdAudiencia() . "'";
            if (($audienciasjuzgadorDto->getIdJuzgador() != "") || ($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $audienciasjuzgadorDto->getIdJuzgador() . "'";
            if (($audienciasjuzgadorDto->getCveFuncionJuzgador() != "") || ($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador='" . $audienciasjuzgadorDto->getCveFuncionJuzgador() . "'";
            if (($audienciasjuzgadorDto->getActivo() != "") || ($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getactivo() != "") {
            $sql.="activo='" . $audienciasjuzgadorDto->getActivo() . "'";
            if (($audienciasjuzgadorDto->getFechaRegistro() != "") || ($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $audienciasjuzgadorDto->getFechaRegistro() . "'";
            if (($audienciasjuzgadorDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($audienciasjuzgadorDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $audienciasjuzgadorDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new AudienciasjuzgadorDTO();
                    $tmp[$contador]->setIdAudienciaJuez($row["idAudienciaJuez"]);
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveFuncionJuzgador($row["cveFuncionJuzgador"]);
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