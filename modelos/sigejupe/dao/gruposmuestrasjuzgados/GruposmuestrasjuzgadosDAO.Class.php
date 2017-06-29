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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposmuestrasjuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposmuestrasjuzgados(";
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado";
            if (($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra";
            if (($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="'" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") {
            $sql.="'" . $gruposmuestrasjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") {
            $sql.="'" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getActivo() != "") {
            $sql.="'" . $gruposmuestrasjuzgadosDto->getActivo() . "'";
        }
        if ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") {
            
        }
        if ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposmuestrasjuzgadosDTO();
            $tmp->setcveGrupoMuestraJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectGruposmuestrasjuzgados($tmp, "", $this->_proveedor);
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

    public function updateGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposmuestrasjuzgados SET ";
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposmuestrasjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposmuestrasjuzgadosDto->getActivo() . "'";
            if (($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposmuestrasjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposmuestrasjuzgadosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoMuestraJuzgado='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposmuestrasjuzgadosDTO();
            $tmp->setcveGrupoMuestraJuzgado($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado());
            $tmp = $this->selectGruposmuestrasjuzgados($tmp, "", $this->_proveedor);
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

    public function deleteGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposmuestrasjuzgados  WHERE cveGrupoMuestraJuzgado='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() . "'";
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

    public function selectGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoMuestraJuzgado,cveJuzgado,cveGrupoMuestra,activo,fechaRegistro,fechaActualizacion FROM tblgruposmuestrasjuzgados ";
        if (($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestraJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") || ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposmuestrasjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") || ($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getCveGrupoMuestra() != "") {
            $sql.="cveGrupoMuestra='" . $gruposmuestrasjuzgadosDto->getCveGrupoMuestra() . "'";
            if (($gruposmuestrasjuzgadosDto->getActivo() != "") || ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposmuestrasjuzgadosDto->getActivo() . "'";
            if (($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") || ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposmuestrasjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposmuestrasjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposmuestrasjuzgadosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new GruposmuestrasjuzgadosDTO();
                    $tmp[$contador]->setCveGrupoMuestraJuzgado($row["cveGrupoMuestraJuzgado"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveGrupoMuestra($row["cveGrupoMuestra"]);
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