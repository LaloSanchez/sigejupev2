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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ControlcargasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertControlcargas($controlcargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcontrolcargas(";
        if ($controlcargasDto->getidControlCarga() != "") {
            $sql.="idControlCarga";
            if (($controlcargasDto->getAnioCarga() != "") || ($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getanioCarga() != "") {
            $sql.="anioCarga";
            if (($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveMes() != "") {
            $sql.="cveMes";
            if (($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador";
            if (($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalPuntaje() != "") {
            $sql.="totalPuntaje";
            if (($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalAsignado() != "") {
            $sql.="totalAsignado";
            if (($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcontrol() != "") {
            $sql.="control";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($controlcargasDto->getidControlCarga() != "") {
            $sql.="'" . $controlcargasDto->getidControlCarga() . "'";
            if (($controlcargasDto->getAnioCarga() != "") || ($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getanioCarga() != "") {
            $sql.="'" . $controlcargasDto->getanioCarga() . "'";
            if (($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveMes() != "") {
            $sql.="'" . $controlcargasDto->getcveMes() . "'";
            if (($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveJuzgado() != "") {
            $sql.="'" . $controlcargasDto->getcveJuzgado() . "'";
            if (($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getidJuzgador() != "") {
            $sql.="'" . $controlcargasDto->getidJuzgador() . "'";
            if (($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveFuncionJuzgador() != "") {
            $sql.="'" . $controlcargasDto->getcveFuncionJuzgador() . "'";
            if (($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalPuntaje() != "") {
            $sql.="'" . $controlcargasDto->gettotalPuntaje() . "'";
            if (($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalAsignado() != "") {
            $sql.="'" . $controlcargasDto->gettotalAsignado() . "'";
            if (($controlcargasDto->getControl() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcontrol() != "") {
            $sql.="'" . $controlcargasDto->getcontrol() . "'";
        }
        if ($controlcargasDto->getfechaRegistro() != "") {
            
        }
        if ($controlcargasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ControlcargasDTO();
            $tmp->setidControlCarga($this->_proveedor->lastID());
            $tmp = $this->selectControlcargas($tmp, "", $this->_proveedor);
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

    public function updateControlcargas($controlcargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcontrolcargas SET ";
        if ($controlcargasDto->getidControlCarga() != "") {
            $sql.="idControlCarga='" . $controlcargasDto->getidControlCarga() . "'";
            if (($controlcargasDto->getAnioCarga() != "") || ($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getanioCarga() != "") {
            $sql.="anioCarga='" . $controlcargasDto->getanioCarga() . "'";
            if (($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveMes() != "") {
            $sql.="cveMes='" . $controlcargasDto->getcveMes() . "'";
            if (($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $controlcargasDto->getcveJuzgado() . "'";
            if (($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $controlcargasDto->getidJuzgador() . "'";
            if (($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador='" . $controlcargasDto->getcveFuncionJuzgador() . "'";
            if (($controlcargasDto->getTotalPuntaje() !== "") || ($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalPuntaje() !== "") {
            $sql.="totalPuntaje='" . $controlcargasDto->gettotalPuntaje() . "'";
            if (($controlcargasDto->getTotalAsignado() !== "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->gettotalAsignado() !== "") {
            $sql.="totalAsignado='" . $controlcargasDto->gettotalAsignado() . "'";
            if (($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getcontrol() != "") {
            $sql.="control='" . $controlcargasDto->getcontrol() . "'";
            if (($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $controlcargasDto->getfechaRegistro() . "'";
            if (($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($controlcargasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $controlcargasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idControlCarga='" . $controlcargasDto->getidControlCarga() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ControlcargasDTO();
            $tmp->setidControlCarga($controlcargasDto->getidControlCarga());
            $tmp = $this->selectControlcargas($tmp, "", $this->_proveedor);
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

    public function deleteControlcargas($controlcargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcontrolcargas  WHERE idControlCarga='" . $controlcargasDto->getidControlCarga() . "'";
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

    public function selectControlcargas($controlcargasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idControlCarga,anioCarga,cveMes,cveJuzgado,idJuzgador,cveFuncionJuzgador,totalPuntaje,totalAsignado,control,fechaRegistro,fechaActualizacion FROM tblcontrolcargas ";
        if (($controlcargasDto->getidControlCarga() != "") || ($controlcargasDto->getanioCarga() != "") || ($controlcargasDto->getcveMes() != "") || ($controlcargasDto->getcveJuzgado() != "") || ($controlcargasDto->getidJuzgador() != "") || ($controlcargasDto->getcveFuncionJuzgador() != "") || ($controlcargasDto->gettotalPuntaje() != "") || ($controlcargasDto->gettotalAsignado() != "") || ($controlcargasDto->getcontrol() != "") || ($controlcargasDto->getfechaRegistro() != "") || ($controlcargasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($controlcargasDto->getidControlCarga() != "") {
            $sql.="idControlCarga='" . $controlcargasDto->getIdControlCarga() . "'";
            if (($controlcargasDto->getAnioCarga() != "") || ($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getanioCarga() != "") {
            $sql.="anioCarga='" . $controlcargasDto->getAnioCarga() . "'";
            if (($controlcargasDto->getCveMes() != "") || ($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getcveMes() != "") {
            $sql.="cveMes='" . $controlcargasDto->getCveMes() . "'";
            if (($controlcargasDto->getCveJuzgado() != "") || ($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $controlcargasDto->getCveJuzgado() . "'";
            if (($controlcargasDto->getIdJuzgador() != "") || ($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $controlcargasDto->getIdJuzgador() . "'";
            if (($controlcargasDto->getCveFuncionJuzgador() != "") || ($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getcveFuncionJuzgador() != "") {
            $sql.="cveFuncionJuzgador='" . $controlcargasDto->getCveFuncionJuzgador() . "'";
            if (($controlcargasDto->getTotalPuntaje() != "") || ($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->gettotalPuntaje() != "") {
            $sql.="totalPuntaje='" . $controlcargasDto->getTotalPuntaje() . "'";
            if (($controlcargasDto->getTotalAsignado() != "") || ($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->gettotalAsignado() != "") {
            $sql.="totalAsignado='" . $controlcargasDto->getTotalAsignado() . "'";
            if (($controlcargasDto->getControl() != "") || ($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getcontrol() != "") {
            $sql.="control='" . $controlcargasDto->getControl() . "'";
            if (($controlcargasDto->getFechaRegistro() != "") || ($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $controlcargasDto->getFechaRegistro() . "'";
            if (($controlcargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($controlcargasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $controlcargasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ControlcargasDTO();
                    $tmp[$contador]->setIdControlCarga($row["idControlCarga"]);
                    $tmp[$contador]->setAnioCarga($row["anioCarga"]);
                    $tmp[$contador]->setCveMes($row["cveMes"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveFuncionJuzgador($row["cveFuncionJuzgador"]);
                    $tmp[$contador]->setTotalPuntaje($row["totalPuntaje"]);
                    $tmp[$contador]->setTotalAsignado($row["totalAsignado"]);
                    $tmp[$contador]->setControl($row["control"]);
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