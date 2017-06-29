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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposestatusradicacion/TiposestatusradicacionDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposestatusradicacionDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposestatusradicacion($tiposestatusradicacionDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposestatusradicacion(";
        if ($tiposestatusradicacionDto->getCveTipoEstatusRadicacion() != "") {
            $sql.="cveTipoEstatusRadicacion";
            if (($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") {
            $sql.="desTipoEstatusRadicacion";
            if (($tiposestatusradicacionDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposestatusradicacionDto->getCveTipoEstatusRadicacion() != "") {
            $sql.="'" . $tiposestatusradicacionDto->getCveTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") {
            $sql.="'" . $tiposestatusradicacionDto->getDesTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getActivo() != "") {
            $sql.="'" . $tiposestatusradicacionDto->getActivo() . "'";
        }
        if ($tiposestatusradicacionDto->getFechaRegistro() != "") {
            
        }
        if ($tiposestatusradicacionDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposestatusradicacionDTO();
            $tmp->setcveTipoEstatusRadicacion($this->_proveedor->lastID());
            $tmp = $this->selectTiposestatusradicacion($tmp, "", $this->_proveedor);
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

    public function updateTiposestatusradicacion($tiposestatusradicacionDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposestatusradicacion SET ";
        if ($tiposestatusradicacionDto->getCveTipoEstatusRadicacion() != "") {
            $sql.="cveTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getCveTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getActivo() != "") || ($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") {
            $sql.="desTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getDesTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getActivo() != "") || ($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getActivo() != "") {
            $sql.="activo='" . $tiposestatusradicacionDto->getActivo() . "'";
            if (($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposestatusradicacionDto->getFechaRegistro() . "'";
            if (($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposestatusradicacionDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposestatusradicacionDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getCveTipoEstatusRadicacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposestatusradicacionDTO();
            $tmp->setcveTipoEstatusRadicacion($tiposestatusradicacionDto->getCveTipoEstatusRadicacion());
            $tmp = $this->selectTiposestatusradicacion($tmp, "", $this->_proveedor);
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

    public function deleteTiposestatusradicacion($tiposestatusradicacionDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposestatusradicacion  WHERE cveTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getCveTipoEstatusRadicacion() . "'";
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

    public function selectTiposestatusradicacion($tiposestatusradicacionDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoEstatusRadicacion,desTipoEstatusRadicacion,activo,fechaRegistro,fechaActualizacion FROM tbltiposestatusradicacion ";
        if (($tiposestatusradicacionDto->getCveTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getActivo() != "") || ($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposestatusradicacionDto->getCveTipoEstatusRadicacion() != "") {
            $sql.="cveTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getCveTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") || ($tiposestatusradicacionDto->getActivo() != "") || ($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposestatusradicacionDto->getDesTipoEstatusRadicacion() != "") {
            $sql.="desTipoEstatusRadicacion='" . $tiposestatusradicacionDto->getDesTipoEstatusRadicacion() . "'";
            if (($tiposestatusradicacionDto->getActivo() != "") || ($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposestatusradicacionDto->getActivo() != "") {
            $sql.="activo='" . $tiposestatusradicacionDto->getActivo() . "'";
            if (($tiposestatusradicacionDto->getFechaRegistro() != "") || ($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposestatusradicacionDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposestatusradicacionDto->getFechaRegistro() . "'";
            if (($tiposestatusradicacionDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposestatusradicacionDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposestatusradicacionDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TiposestatusradicacionDTO();
                    $tmp[$contador]->setCveTipoEstatusRadicacion($row["cveTipoEstatusRadicacion"]);
                    $tmp[$contador]->setDesTipoEstatusRadicacion($row["desTipoEstatusRadicacion"]);
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