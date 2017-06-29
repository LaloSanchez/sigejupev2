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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/arbol/ArbolDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ArbolDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertArbol($arbolDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblarbol(";
        if ($arbolDto->getidArbol() != "") {
            $sql.="idArbol";
            if (($arbolDto->getIdPadre() != "") || ($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidPadre() != "") {
            $sql.="idPadre";
            if (($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidHijo() != "") {
            $sql.="idHijo";
            if (($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion";
            if (($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($arbolDto->getidArbol() != "") {
            $sql.="'" . $arbolDto->getidArbol() . "'";
            if (($arbolDto->getIdPadre() != "") || ($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidPadre() != "") {
            $sql.="'" . $arbolDto->getidPadre() . "'";
            if (($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidHijo() != "") {
            $sql.="'" . $arbolDto->getidHijo() . "'";
            if (($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $arbolDto->getcveTipoCarpeta() . "'";
            if (($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoActuacion() != "") {
            $sql.="'" . $arbolDto->getcveTipoActuacion() . "'";
            if (($arbolDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getactivo() != "") {
            $sql.="'" . $arbolDto->getactivo() . "'";
        }
        if ($arbolDto->getfechaRegistro() != "") {
            
        }
        if ($arbolDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ArbolDTO();
            $tmp->setidArbol($this->_proveedor->lastID());
            $tmp = $this->selectArbol($tmp, "", $this->_proveedor);
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

    public function updateArbol($arbolDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblarbol SET ";
        if ($arbolDto->getidArbol() != "") {
            $sql.="idArbol='" . $arbolDto->getidArbol() . "'";
            if (($arbolDto->getIdPadre() != "") || ($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidPadre() != "") {
            $sql.="idPadre='" . $arbolDto->getidPadre() . "'";
            if (($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getidHijo() != "") {
            $sql.="idHijo='" . $arbolDto->getidHijo() . "'";
            if (($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $arbolDto->getcveTipoCarpeta() . "'";
            if (($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $arbolDto->getcveTipoActuacion() . "'";
            if (($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getactivo() != "") {
            $sql.="activo='" . $arbolDto->getactivo() . "'";
            if (($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $arbolDto->getfechaRegistro() . "'";
            if (($arbolDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($arbolDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $arbolDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idArbol='" . $arbolDto->getidArbol() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ArbolDTO();
            $tmp->setidArbol($arbolDto->getidArbol());
            $tmp = $this->selectArbol($tmp, "", $this->_proveedor);
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

    public function deleteArbol($arbolDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblarbol  WHERE idArbol='" . $arbolDto->getidArbol() . "'";
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

    public function selectArbol($arbolDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idArbol,idPadre,idHijo,cveTipoCarpeta,cveTipoActuacion,activo,fechaRegistro,fechaActualizacion FROM tblarbol ";
        if (($arbolDto->getidArbol() != "") || ($arbolDto->getidPadre() != "") || ($arbolDto->getidHijo() != "") || ($arbolDto->getcveTipoCarpeta() != "") || ($arbolDto->getcveTipoActuacion() != "") || ($arbolDto->getactivo() != "") || ($arbolDto->getfechaRegistro() != "") || ($arbolDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($arbolDto->getidArbol() != "") {
            $sql.="idArbol='" . $arbolDto->getIdArbol() . "'";
            if (($arbolDto->getIdPadre() != "") || ($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getidPadre() != "") {
            $sql.="idPadre='" . $arbolDto->getIdPadre() . "'";
            if (($arbolDto->getIdHijo() != "") || ($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getidHijo() != "") {
            $sql.="idHijo='" . $arbolDto->getIdHijo() . "'";
            if (($arbolDto->getCveTipoCarpeta() != "") || ($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $arbolDto->getCveTipoCarpeta() . "'";
            if (($arbolDto->getCveTipoActuacion() != "") || ($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $arbolDto->getCveTipoActuacion() . "'";
            if (($arbolDto->getActivo() != "") || ($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getactivo() != "") {
            $sql.="activo='" . $arbolDto->getActivo() . "'";
            if (($arbolDto->getFechaRegistro() != "") || ($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $arbolDto->getFechaRegistro() . "'";
            if (($arbolDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($arbolDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $arbolDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ArbolDTO();
                    $tmp[$contador]->setIdArbol($row["idArbol"]);
                    $tmp[$contador]->setIdPadre($row["idPadre"]);
                    $tmp[$contador]->setIdHijo($row["idHijo"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
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