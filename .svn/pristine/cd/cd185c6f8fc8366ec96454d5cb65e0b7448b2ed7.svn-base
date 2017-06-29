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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/reclusosdelitos/ReclusosdelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ReclusosdelitosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertReclusosdelitos($reclusosdelitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblreclusosdelitos(";
        if ($reclusosdelitosDto->getIdReclusoDelito() != "") {
            $sql.="idReclusoDelito";
            if (($reclusosdelitosDto->getCveDelito() != "") || ($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getCveDelito() != "") {
            $sql.="cveDelito";
            if (($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getIdRecluso() != "") {
            $sql.="idRecluso";
            if (($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($reclusosdelitosDto->getIdReclusoDelito() != "") {
            $sql.="'" . $reclusosdelitosDto->getIdReclusoDelito() . "'";
            if (($reclusosdelitosDto->getCveDelito() != "") || ($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getCveDelito() != "") {
            $sql.="'" . $reclusosdelitosDto->getCveDelito() . "'";
            if (($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getIdRecluso() != "") {
            $sql.="'" . $reclusosdelitosDto->getIdRecluso() . "'";
            if (($reclusosdelitosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getActivo() != "") {
            $sql.="'" . $reclusosdelitosDto->getActivo() . "'";
        }
        if ($reclusosdelitosDto->getFechaRegistro() != "") {
            
        }
        if ($reclusosdelitosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql); //echo $sql;
        if (!$this->_proveedor->error()) {
            $tmp = new ReclusosdelitosDTO();
            $tmp->setidReclusoDelito($this->_proveedor->lastID());
            $tmp = $this->selectReclusosdelitos($tmp, "", $this->_proveedor);
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

    public function updateReclusosdelitos($reclusosdelitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblreclusosdelitos SET ";
        if ($reclusosdelitosDto->getIdReclusoDelito() != "") {
            $sql.="idReclusoDelito='" . $reclusosdelitosDto->getIdReclusoDelito() . "'";
            if (($reclusosdelitosDto->getCveDelito() != "") || ($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getCveDelito() != "") {
            $sql.="cveDelito='" . $reclusosdelitosDto->getCveDelito() . "'";
            if (($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getIdRecluso() != "") {
            $sql.="idRecluso='" . $reclusosdelitosDto->getIdRecluso() . "'";
            if (($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getActivo() != "") {
            $sql.="activo='" . $reclusosdelitosDto->getActivo() . "'";
            if (($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $reclusosdelitosDto->getFechaRegistro() . "'";
            if (($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosdelitosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $reclusosdelitosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idReclusoDelito='" . $reclusosdelitosDto->getIdReclusoDelito() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ReclusosdelitosDTO();
            $tmp->setidReclusoDelito($reclusosdelitosDto->getIdReclusoDelito());
            $tmp = $this->selectReclusosdelitos($tmp, "", $this->_proveedor);
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

    public function deleteReclusosdelitos($reclusosdelitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblreclusosdelitos  WHERE idReclusoDelito='" . $reclusosdelitosDto->getIdReclusoDelito() . "'";
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

    public function selectReclusosdelitos($reclusosdelitosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idReclusoDelito,cveDelito,idRecluso,activo,fechaRegistro,fechaActualizacion FROM tblreclusosdelitos ";
        if (($reclusosdelitosDto->getIdReclusoDelito() != "") || ($reclusosdelitosDto->getCveDelito() != "") || ($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($reclusosdelitosDto->getIdReclusoDelito() != "") {
            $sql.="idReclusoDelito='" . $reclusosdelitosDto->getIdReclusoDelito() . "'";
            if (($reclusosdelitosDto->getCveDelito() != "") || ($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosdelitosDto->getCveDelito() != "") {
            $sql.="cveDelito='" . $reclusosdelitosDto->getCveDelito() . "'";
            if (($reclusosdelitosDto->getIdRecluso() != "") || ($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosdelitosDto->getIdRecluso() != "") {
            $sql.="idRecluso='" . $reclusosdelitosDto->getIdRecluso() . "'";
            if (($reclusosdelitosDto->getActivo() != "") || ($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosdelitosDto->getActivo() != "") {
            $sql.="activo='" . $reclusosdelitosDto->getActivo() . "'";
            if (($reclusosdelitosDto->getFechaRegistro() != "") || ($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosdelitosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $reclusosdelitosDto->getFechaRegistro() . "'";
            if (($reclusosdelitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosdelitosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $reclusosdelitosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);//echo$sql;
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ReclusosdelitosDTO();
                    $tmp[$contador]->setIdReclusoDelito($row["idReclusoDelito"]);
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setIdRecluso($row["idRecluso"]);
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