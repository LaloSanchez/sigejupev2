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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SexualesconductasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSexualesconductas($sexualesconductasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsexualesconductas(";
        if ($sexualesconductasDto->getidSexualConducta() != "") {
            $sql.="idSexualConducta";
            if (($sexualesconductasDto->getIdSexual() != "") || ($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getidSexual() != "") {
            $sql.="idSexual";
            if (($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getcveConducta() != "") {
            $sql.="cveConducta";
            if (($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($sexualesconductasDto->getidSexualConducta() != "") {
            $sql.="'" . $sexualesconductasDto->getidSexualConducta() . "'";
            if (($sexualesconductasDto->getIdSexual() != "") || ($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getidSexual() != "") {
            $sql.="'" . $sexualesconductasDto->getidSexual() . "'";
            if (($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getcveConducta() != "") {
            $sql.="'" . $sexualesconductasDto->getcveConducta() . "'";
            if (($sexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getactivo() != "") {
            $sql.="'" . $sexualesconductasDto->getactivo() . "'";
        }
        if ($sexualesconductasDto->getfechaRegistro() != "") {
            
        }
        if ($sexualesconductasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualesconductasDTO();
            $tmp->setidSexualConducta($this->_proveedor->lastID());
            $tmp = $this->selectSexualesconductas($tmp, "", $this->_proveedor);
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

    public function updateSexualesconductas($sexualesconductasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsexualesconductas SET ";

        if ($sexualesconductasDto->getidSexual() != "") {
            $sql.="idSexual='" . $sexualesconductasDto->getidSexual() . "'";
            if (($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "") || ($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getcveConducta() != "") {
            $sql.="cveConducta='" . $sexualesconductasDto->getcveConducta() . "'";
            if (($sexualesconductasDto->getActivo() != "") || ($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getactivo() != "") {
            $sql.="activo='" . $sexualesconductasDto->getactivo() . "'";
            if (($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $sexualesconductasDto->getfechaRegistro() . "'";
            if (($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($sexualesconductasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $sexualesconductasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idSexualConducta='" . $sexualesconductasDto->getidSexualConducta() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualesconductasDTO();
            $tmp->setidSexualConducta($sexualesconductasDto->getidSexualConducta());
            $tmp = $this->selectSexualesconductas($tmp, "", $this->_proveedor);
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

    public function deleteSexualesconductas($sexualesconductasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsexualesconductas  WHERE idSexualConducta='" . $sexualesconductasDto->getidSexualConducta() . "'";
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

    public function selectSexualesconductas($sexualesconductasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idSexualConducta,idSexual,cveConducta,activo,fechaRegistro,fechaActualizacion FROM tblsexualesconductas ";
        if (($sexualesconductasDto->getidSexualConducta() != "") || ($sexualesconductasDto->getidSexual() != "") || ($sexualesconductasDto->getcveConducta() != "") || ($sexualesconductasDto->getactivo() != "") || ($sexualesconductasDto->getfechaRegistro() != "") || ($sexualesconductasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($sexualesconductasDto->getidSexualConducta() != "") {
            $sql.="idSexualConducta='" . $sexualesconductasDto->getIdSexualConducta() . "'";
            if (($sexualesconductasDto->getIdSexual() != "") || ($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "") || ($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($sexualesconductasDto->getidSexual() != "") {
            $sql.="idSexual='" . $sexualesconductasDto->getIdSexual() . "'";
            if (($sexualesconductasDto->getCveConducta() != "") || ($sexualesconductasDto->getActivo() != "") || ($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($sexualesconductasDto->getcveConducta() != "") {
            $sql.="cveConducta='" . $sexualesconductasDto->getCveConducta() . "'";
            if (($sexualesconductasDto->getActivo() != "") || ($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($sexualesconductasDto->getactivo() != "") {
            $sql.="activo='" . $sexualesconductasDto->getActivo() . "'";
            if (($sexualesconductasDto->getFechaRegistro() != "") || ($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($sexualesconductasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $sexualesconductasDto->getFechaRegistro() . "'";
            if (($sexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($sexualesconductasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $sexualesconductasDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new SexualesconductasDTO();
                    $tmp[$contador]->setIdSexualConducta($row["idSexualConducta"]);
                    $tmp[$contador]->setIdSexual($row["idSexual"]);
                    $tmp[$contador]->setCveConducta($row["cveConducta"]);
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