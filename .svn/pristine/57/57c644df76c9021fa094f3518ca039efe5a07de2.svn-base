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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TipofamilialinguisticaDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTipofamilialinguistica($tipofamilialinguisticaDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltipofamilialinguistica(";
        if ($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica";
            if (($tipofamilialinguisticaDto->getDesTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() != "") {
            $sql.="desTipoFamiliaLinguistica";
            if (($tipofamilialinguisticaDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="'" . $tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getDesTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() != "") {
            $sql.="'" . $tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getactivo() != "") {
            $sql.="'" . $tipofamilialinguisticaDto->getactivo() . "'";
        }
        if ($tipofamilialinguisticaDto->getfechaRegistro() != "") {
            
        }
        if ($tipofamilialinguisticaDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TipofamilialinguisticaDTO();
            $tmp->setcveTipoFamiliaLinguistica($this->_proveedor->lastID());
            $tmp = $this->selectTipofamilialinguistica($tmp, "", $this->_proveedor);
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

    public function updateTipofamilialinguistica($tipofamilialinguisticaDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltipofamilialinguistica SET ";
        if ($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getDesTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getActivo() != "") || ($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() != "") {
            $sql.="desTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getActivo() != "") || ($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getactivo() != "") {
            $sql.="activo='" . $tipofamilialinguisticaDto->getactivo() . "'";
            if (($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tipofamilialinguisticaDto->getfechaRegistro() . "'";
            if (($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($tipofamilialinguisticaDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tipofamilialinguisticaDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TipofamilialinguisticaDTO();
            $tmp->setcveTipoFamiliaLinguistica($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica());
            $tmp = $this->selectTipofamilialinguistica($tmp, "", $this->_proveedor);
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

    public function deleteTipofamilialinguistica($tipofamilialinguisticaDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltipofamilialinguistica  WHERE cveTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() . "'";
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

    public function selectTipofamilialinguistica($tipofamilialinguisticaDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoFamiliaLinguistica,desTipoFamiliaLinguistica,activo,fechaRegistro,fechaActualizacion FROM tbltipofamilialinguistica ";
        if (($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getactivo() != "") || ($tipofamilialinguisticaDto->getfechaRegistro() != "") || ($tipofamilialinguisticaDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($tipofamilialinguisticaDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getCveTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getDesTipoFamiliaLinguistica() != "") || ($tipofamilialinguisticaDto->getActivo() != "") || ($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipofamilialinguisticaDto->getdesTipoFamiliaLinguistica() != "") {
            $sql.="desTipoFamiliaLinguistica='" . $tipofamilialinguisticaDto->getDesTipoFamiliaLinguistica() . "'";
            if (($tipofamilialinguisticaDto->getActivo() != "") || ($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipofamilialinguisticaDto->getactivo() != "") {
            $sql.="activo='" . $tipofamilialinguisticaDto->getActivo() . "'";
            if (($tipofamilialinguisticaDto->getFechaRegistro() != "") || ($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipofamilialinguisticaDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tipofamilialinguisticaDto->getFechaRegistro() . "'";
            if (($tipofamilialinguisticaDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tipofamilialinguisticaDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tipofamilialinguisticaDto->getFechaActualizacion() . "'";
        }
        $sql .= " order by desTipoFamiliaLinguistica ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TipofamilialinguisticaDTO();
                    $tmp[$contador]->setCveTipoFamiliaLinguistica($row["cveTipoFamiliaLinguistica"]);
                    $tmp[$contador]->setDesTipoFamiliaLinguistica($row["desTipoFamiliaLinguistica"]);
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