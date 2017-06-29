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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposdeviviendas/TiposdeviviendasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposdeviviendasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposdeviviendas($tiposdeviviendasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposdeviviendas(";
        if ($tiposdeviviendasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda";
            if (($tiposdeviviendasDto->getDesTipoDeVivienda() != "") || ($tiposdeviviendasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getdesTipoDeVivienda() != "") {
            $sql.="desTipoDeVivienda";
            if (($tiposdeviviendasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tiposdeviviendasDto->getcveTipoDeVivienda() != "") {
            $sql.="'" . $tiposdeviviendasDto->getcveTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getDesTipoDeVivienda() != "") || ($tiposdeviviendasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getdesTipoDeVivienda() != "") {
            $sql.="'" . $tiposdeviviendasDto->getdesTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getactivo() != "") {
            $sql.="'" . $tiposdeviviendasDto->getactivo() . "'";
        }
        if ($tiposdeviviendasDto->getfechaRegistro() != "") {
            
        }
        if ($tiposdeviviendasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposdeviviendasDTO();
            $tmp->setcveTipoDeVivienda($this->_proveedor->lastID());
            $tmp = $this->selectTiposdeviviendas($tmp, "", $this->_proveedor);
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

    public function updateTiposdeviviendas($tiposdeviviendasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposdeviviendas SET ";
        if ($tiposdeviviendasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $tiposdeviviendasDto->getcveTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getDesTipoDeVivienda() != "") || ($tiposdeviviendasDto->getActivo() != "") || ($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getdesTipoDeVivienda() != "") {
            $sql.="desTipoDeVivienda='" . $tiposdeviviendasDto->getdesTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getActivo() != "") || ($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getactivo() != "") {
            $sql.="activo='" . $tiposdeviviendasDto->getactivo() . "'";
            if (($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposdeviviendasDto->getfechaRegistro() . "'";
            if (($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tiposdeviviendasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposdeviviendasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoDeVivienda='" . $tiposdeviviendasDto->getcveTipoDeVivienda() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposdeviviendasDTO();
            $tmp->setcveTipoDeVivienda($tiposdeviviendasDto->getcveTipoDeVivienda());
            $tmp = $this->selectTiposdeviviendas($tmp, "", $this->_proveedor);
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

    public function deleteTiposdeviviendas($tiposdeviviendasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposdeviviendas  WHERE cveTipoDeVivienda='" . $tiposdeviviendasDto->getcveTipoDeVivienda() . "'";
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

    public function selectTiposdeviviendas($tiposdeviviendasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoDeVivienda,desTipoDeVivienda,activo,fechaRegistro,fechaActualizacion FROM tbltiposdeviviendas ";
        if (($tiposdeviviendasDto->getcveTipoDeVivienda() != "") || ($tiposdeviviendasDto->getdesTipoDeVivienda() != "") || ($tiposdeviviendasDto->getactivo() != "") || ($tiposdeviviendasDto->getfechaRegistro() != "") || ($tiposdeviviendasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tiposdeviviendasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $tiposdeviviendasDto->getCveTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getDesTipoDeVivienda() != "") || ($tiposdeviviendasDto->getActivo() != "") || ($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdeviviendasDto->getdesTipoDeVivienda() != "") {
            $sql.="desTipoDeVivienda='" . $tiposdeviviendasDto->getDesTipoDeVivienda() . "'";
            if (($tiposdeviviendasDto->getActivo() != "") || ($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdeviviendasDto->getactivo() != "") {
            $sql.="activo='" . $tiposdeviviendasDto->getActivo() . "'";
            if (($tiposdeviviendasDto->getFechaRegistro() != "") || ($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdeviviendasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tiposdeviviendasDto->getFechaRegistro() . "'";
            if (($tiposdeviviendasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tiposdeviviendasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tiposdeviviendasDto->getFechaActualizacion() . "'";
        }
          $sql.=" order by desTipoDeVivienda ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TiposdeviviendasDTO();
                    $tmp[$contador]->setCveTipoDeVivienda($row["cveTipoDeVivienda"]);
                    $tmp[$contador]->setDesTipoDeVivienda($row["desTipoDeVivienda"]);
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