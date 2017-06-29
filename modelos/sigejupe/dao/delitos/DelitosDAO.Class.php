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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DelitosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDelitos($delitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldelitos(";
        if ($delitosDto->getCveDelito() != "") {
            $sql.="cveDelito";
            if (($delitosDto->getDesDelito() != "") || ($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getDesDelito() != "") {
            $sql.="desDelito";
            if (($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaVigencia() != "") {
            $sql.="fechaVigencia";
            if (($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaInicio() != "") {
            $sql.="fechaInicio";
            if (($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getActivo() != "") {
            $sql.="activo";
            if (($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito";
            if (($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveEspecialidad() != "") {
            $sql.="CveEspecialidad";
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getArticulo() != "") {
            $sql.="articulo";
            if (($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getPeso() != "") {
            $sql.="peso";
            if (($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveBienJuridicoAfectado() != "") {
            $sql.="cveBienJuridicoAfectado";
            if (($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveCodigo() != "") {
            $sql.="cveCodigo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($delitosDto->getCveDelito() != "") {
            $sql.="'" . $delitosDto->getCveDelito() . "'";
            if (($delitosDto->getDesDelito() != "") || ($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getDesDelito() != "") {
            $sql.="'" . $delitosDto->getDesDelito() . "'";
            if (($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaVigencia() != "") {
            $sql.="'" . $delitosDto->getFechaVigencia() . "'";
            if (($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaInicio() != "") {
            $sql.="'" . $delitosDto->getFechaInicio() . "'";
            if (($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getActivo() != "") {
            $sql.="'" . $delitosDto->getActivo() . "'";
            if (($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveClasificacionDelito() != "") {
            $sql.="'" . $delitosDto->getCveClasificacionDelito() . "'";
            if (($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveEspecialidad() != "") {
            $sql.="'" . $delitosDto->getCveEspecialidad() . "'";
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaRegistro() != "") {
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaActualizacion() != "") {
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getArticulo() != "") {
            $sql.="'" . $delitosDto->getArticulo() . "'";
            if (($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getPeso() != "") {
            $sql.="'" . $delitosDto->getPeso() . "'";
            if (($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveBienJuridicoAfectado() != "") {
            $sql.="'" . $delitosDto->getCveBienJuridicoAfectado() . "'";
            if (($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveCodigo() != "") {
            $sql.="'" . $delitosDto->getCveCodigo() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DelitosDTO();
            $tmp->setcveDelito($this->_proveedor->lastID());
            $tmp = $this->selectDelitos($tmp, "", $this->_proveedor);
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

    public function updateDelitos($delitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldelitos SET ";
        if ($delitosDto->getCveDelito() != "") {
            $sql.="cveDelito='" . $delitosDto->getCveDelito() . "'";
            if (($delitosDto->getDesDelito() != "") || ($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getDesDelito() != "") {
            $sql.="desDelito='" . $delitosDto->getDesDelito() . "'";
            if (($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaVigencia() != "") {
            $sql.="fechaVigencia='" . $delitosDto->getFechaVigencia() . "'";
            if (($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $delitosDto->getFechaInicio() . "'";
            if (($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getActivo() != "") {
            $sql.="activo='" . $delitosDto->getActivo() . "'";
            if (($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $delitosDto->getCveClasificacionDelito() . "'";
            if (($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveEspecialidad() != "") {
            $sql.="CveEspecialidad='" . $delitosDto->getCveEspecialidad() . "'";
            if (($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $delitosDto->getFechaRegistro() . "'";
            if (($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $delitosDto->getFechaActualizacion() . "'";
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getArticulo() != "") {
            $sql.="articulo='" . $delitosDto->getArticulo() . "'";
            if (($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getPeso() != "") {
            $sql.="peso='" . $delitosDto->getPeso() . "'";
            if (($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveBienJuridicoAfectado() != "") {
            $sql.="cveBienJuridicoAfectado='" . $delitosDto->getCveBienJuridicoAfectado() . "'";
            if (($delitosDto->getCveCodigo() != "")) {
                $sql.=",";
            }
        }
        if ($delitosDto->getCveCodigo() != "") {
            $sql.="cveCodigo='" . $delitosDto->getCveCodigo() . "'";
        }
        $sql.=" WHERE cveDelito='" . $delitosDto->getCveDelito() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DelitosDTO();
            $tmp->setcveDelito($delitosDto->getCveDelito());
            $tmp = $this->selectDelitos($tmp, "", $this->_proveedor);
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

    public function deleteDelitos($delitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldelitos  WHERE cveDelito='" . $delitosDto->getCveDelito() . "'";
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

    public function selectDelitos($delitosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveDelito,desDelito,fechaVigencia,fechaInicio,activo,cveClasificacionDelito,CveEspecialidad,fechaRegistro,fechaActualizacion,articulo,peso,cveBienJuridicoAfectado,cveCodigo FROM tbldelitos ";
        if (($delitosDto->getCveDelito() != "") || ($delitosDto->getDesDelito() != "") || ($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
            $sql.=" WHERE ";
        }
        if ($delitosDto->getCveDelito() != "") {
            $sql.="cveDelito='" . $delitosDto->getCveDelito() . "'";
            if (($delitosDto->getDesDelito() != "") || ($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getDesDelito() != "") {
            $sql.="desDelito='" . $delitosDto->getDesDelito() . "'";
            if (($delitosDto->getFechaVigencia() != "") || ($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getFechaVigencia() != "") {
            $sql.="fechaVigencia='" . $delitosDto->getFechaVigencia() . "'";
            if (($delitosDto->getFechaInicio() != "") || ($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $delitosDto->getFechaInicio() . "'";
            if (($delitosDto->getActivo() != "") || ($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getActivo() != "") {
            $sql.="activo='" . $delitosDto->getActivo() . "'";
            if (($delitosDto->getCveClasificacionDelito() != "") || ($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getCveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $delitosDto->getCveClasificacionDelito() . "'";
            if (($delitosDto->getCveEspecialidad() != "") || ($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getCveEspecialidad() != "") {
            $sql.="CveEspecialidad='" . $delitosDto->getCveEspecialidad() . "'";
            if (($delitosDto->getFechaRegistro() != "") || ($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $delitosDto->getFechaRegistro() . "'";
            if (($delitosDto->getFechaActualizacion() != "") || ($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $delitosDto->getFechaActualizacion() . "'";
            if (($delitosDto->getArticulo() != "") || ($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getArticulo() != "") {
            $sql.="articulo='" . $delitosDto->getArticulo() . "'";
            if (($delitosDto->getPeso() != "") || ($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getPeso() != "") {
            $sql.="peso='" . $delitosDto->getPeso() . "'";
            if (($delitosDto->getCveBienJuridicoAfectado() != "") || ($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getCveBienJuridicoAfectado() != "") {
            $sql.="cveBienJuridicoAfectado='" . $delitosDto->getCveBienJuridicoAfectado() . "'";
            if (($delitosDto->getCveCodigo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitosDto->getCveCodigo() != "") {
            $sql.="cveCodigo='" . $delitosDto->getCveCodigo() . "'";
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
                    $tmp[$contador] = new DelitosDTO();
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setDesDelito($row["desDelito"]);
                    $tmp[$contador]->setFechaVigencia($row["fechaVigencia"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
                    $tmp[$contador]->setCveEspecialidad($row["CveEspecialidad"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setArticulo($row["articulo"]);
                    $tmp[$contador]->setPeso($row["peso"]);
                    $tmp[$contador]->setCveBienJuridicoAfectado($row["cveBienJuridicoAfectado"]);
                    $tmp[$contador]->setCveCodigo($row["cveCodigo"]);
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

    public function selectDelitosLike($delitosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveDelito,desDelito,fechaVigencia,fechaInicio,activo,cveClasificacionDelito,fechaRegistro,fechaActualizacion,articulo,peso,cveBienJuridicoAfectado,cveCodigo FROM tbldelitos ";
        $sql.="WHERE desDelito like '%" . $delitosDto->getDesDelito() . "%' AND activo = 'S' ORDER BY desDelito ASC";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DelitosDTO();
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setDesDelito($row["desDelito"]);
                    $tmp[$contador]->setFechaVigencia($row["fechaVigencia"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setArticulo($row["articulo"]);
                    $tmp[$contador]->setPeso($row["peso"]);
                    $tmp[$contador]->setCveBienJuridicoAfectado($row["cveBienJuridicoAfectado"]);
                    $tmp[$contador]->setCveCodigo($row["cveCodigo"]);
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