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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposednicosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposednicos($gruposednicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposednicos(";
        if ($gruposednicosDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico";
            if (($gruposednicosDto->getDesGrupoEdnico() != "") || ($gruposednicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getdesGrupoEdnico() != "") {
            $sql.="desGrupoEdnico";
            if (($gruposednicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposednicosDto->getcveGrupoEdnico() != "") {
            $sql.="'" . $gruposednicosDto->getcveGrupoEdnico() . "'";
            if (($gruposednicosDto->getDesGrupoEdnico() != "") || ($gruposednicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getdesGrupoEdnico() != "") {
            $sql.="'" . $gruposednicosDto->getdesGrupoEdnico() . "'";
            if (($gruposednicosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getactivo() != "") {
            $sql.="'" . $gruposednicosDto->getactivo() . "'";
        }
        if ($gruposednicosDto->getfechaRegistro() != "") {
            
        }
        if ($gruposednicosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposednicosDTO();
            $tmp->setcveGrupoEdnico($this->_proveedor->lastID());
            $tmp = $this->selectGruposednicos($tmp, "", $this->_proveedor);
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

    public function updateGruposednicos($gruposednicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposednicos SET ";
        if ($gruposednicosDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $gruposednicosDto->getcveGrupoEdnico() . "'";
            if (($gruposednicosDto->getDesGrupoEdnico() != "") || ($gruposednicosDto->getActivo() != "") || ($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getdesGrupoEdnico() != "") {
            $sql.="desGrupoEdnico='" . $gruposednicosDto->getdesGrupoEdnico() . "'";
            if (($gruposednicosDto->getActivo() != "") || ($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getactivo() != "") {
            $sql.="activo='" . $gruposednicosDto->getactivo() . "'";
            if (($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposednicosDto->getfechaRegistro() . "'";
            if (($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposednicosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposednicosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoEdnico='" . $gruposednicosDto->getcveGrupoEdnico() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposednicosDTO();
            $tmp->setcveGrupoEdnico($gruposednicosDto->getcveGrupoEdnico());
            $tmp = $this->selectGruposednicos($tmp, "", $this->_proveedor);
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

    public function deleteGruposednicos($gruposednicosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposednicos  WHERE cveGrupoEdnico='" . $gruposednicosDto->getcveGrupoEdnico() . "'";
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

    public function selectGruposednicos($gruposednicosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoEdnico,desGrupoEdnico,activo,fechaRegistro,fechaActualizacion FROM tblgruposednicos ";
        if (($gruposednicosDto->getcveGrupoEdnico() != "") || ($gruposednicosDto->getdesGrupoEdnico() != "") || ($gruposednicosDto->getactivo() != "") || ($gruposednicosDto->getfechaRegistro() != "") || ($gruposednicosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposednicosDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $gruposednicosDto->getCveGrupoEdnico() . "'";
            if (($gruposednicosDto->getDesGrupoEdnico() != "") || ($gruposednicosDto->getActivo() != "") || ($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposednicosDto->getdesGrupoEdnico() != "") {
            $sql.="desGrupoEdnico='" . $gruposednicosDto->getDesGrupoEdnico() . "'";
            if (($gruposednicosDto->getActivo() != "") || ($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposednicosDto->getactivo() != "") {
            $sql.="activo='" . $gruposednicosDto->getActivo() . "'";
            if (($gruposednicosDto->getFechaRegistro() != "") || ($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposednicosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposednicosDto->getFechaRegistro() . "'";
            if (($gruposednicosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposednicosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposednicosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $sql .= " order by desGrupoEdnico ASC ";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new GruposednicosDTO();
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                    $tmp[$contador]->setDesGrupoEdnico($row["desGrupoEdnico"]);
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