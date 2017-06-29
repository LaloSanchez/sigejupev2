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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposmuestras/GruposmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposmuestrasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposmuestras($gruposmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposmuestras(";
        if ($gruposmuestrasDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra";
            if (($gruposmuestrasDto->getDesGrupoMuestra() != "") || ($gruposmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getDesGrupoMuestra() != "") {
            $sql.="desGrupoMuestra";
            if (($gruposmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposmuestrasDto->getCveGrupoMuestra() != "") {
            $sql.="'" . $gruposmuestrasDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getDesGrupoMuestra() != "") || ($gruposmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getDesGrupoMuestra() != "") {
            $sql.="'" . $gruposmuestrasDto->getDesGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getActivo() != "") {
            $sql.="'" . $gruposmuestrasDto->getActivo() . "'";
        }
        if ($gruposmuestrasDto->getFechaRegistro() != "") {
            
        }
        if ($gruposmuestrasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposmuestrasDTO();
            $tmp->setcveGrupoMuestra($this->_proveedor->lastID());
            $tmp = $this->selectGruposmuestras($tmp, "", $this->_proveedor);
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

    public function updateGruposmuestras($gruposmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposmuestras SET ";
        if ($gruposmuestrasDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra='" . $gruposmuestrasDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getDesGrupoMuestra() != "") || ($gruposmuestrasDto->getActivo() != "") || ($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getDesGrupoMuestra() != "") {
            $sql.="desGrupoMuestra='" . $gruposmuestrasDto->getDesGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getActivo() != "") || ($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $gruposmuestrasDto->getActivo() . "'";
            if (($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposmuestrasDto->getFechaRegistro() . "'";
            if (($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposmuestrasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoMuestra='" . $gruposmuestrasDto->getCveGrupoMuestra() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposmuestrasDTO();
            $tmp->setcveGrupoMuestra($gruposmuestrasDto->getCveGrupoMuestra());
            $tmp = $this->selectGruposmuestras($tmp, "", $this->_proveedor);
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

    public function deleteGruposmuestras($gruposmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposmuestras  WHERE cveGrupoMuestra='" . $gruposmuestrasDto->getCveGrupoMuestra() . "'";
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

    public function selectGruposmuestras($gruposmuestrasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoMuestra,desGrupoMuestra,activo,fechaRegistro,fechaActualizacion FROM tblgruposmuestras ";
        if (($gruposmuestrasDto->getCveGrupoMuestra() != "") || ($gruposmuestrasDto->getDesGrupoMuestra() != "") || ($gruposmuestrasDto->getActivo() != "") || ($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposmuestrasDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra='" . $gruposmuestrasDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getDesGrupoMuestra() != "") || ($gruposmuestrasDto->getActivo() != "") || ($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasDto->getDesGrupoMuestra() != "") {
            $sql.="desGrupoMuestra='" . $gruposmuestrasDto->getDesGrupoMuestra() . "'";
            if (($gruposmuestrasDto->getActivo() != "") || ($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $gruposmuestrasDto->getActivo() . "'";
            if (($gruposmuestrasDto->getFechaRegistro() != "") || ($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposmuestrasDto->getFechaRegistro() . "'";
            if (($gruposmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposmuestrasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new GruposmuestrasDTO();
                    $tmp[$contador]->setCveGrupoMuestra($row["cveGrupoMuestra"]);
                    $tmp[$contador]->setDesGrupoMuestra($row["desGrupoMuestra"]);
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