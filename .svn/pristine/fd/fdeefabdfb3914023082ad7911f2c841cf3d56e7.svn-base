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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EfectosofendidosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertEfectosofendidos($efectosofendidosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblefectosofendidos(";
        if ($efectosofendidosDto->getIdEfectoOfendido() != "") {
            $sql.="idEfectoOfendido";
            if (($efectosofendidosDto->getCveDetalleEfecto() != "") || ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto";
            if (($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud";
            if (($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdReferencia() != "") {
            $sql.="IdReferencia";
            if (($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getOrigen() != "") {
            $sql.="origen";
            if (($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($efectosofendidosDto->getIdEfectoOfendido() != "") {
            $sql.="'" . $efectosofendidosDto->getIdEfectoOfendido() . "'";
            if (($efectosofendidosDto->getCveDetalleEfecto() != "") || ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getCveDetalleEfecto() != "") {
            $sql.="'" . $efectosofendidosDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") {
            $sql.="'" . $efectosofendidosDto->getIdImpOfeDelSolicitud() . "'";
            if (($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdReferencia() != "") {
            $sql.="'" . $efectosofendidosDto->getIdReferencia() . "'";
            if (($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getOrigen() != "") {
            $sql.="'" . $efectosofendidosDto->getOrigen() . "'";
            if (($efectosofendidosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getActivo() != "") {
            $sql.="'" . $efectosofendidosDto->getActivo() . "'";
        }
        if ($efectosofendidosDto->getFechaRegistro() != "") {
            
        }
        if ($efectosofendidosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosofendidosDTO();
            $tmp->setidEfectoOfendido($this->_proveedor->lastID());
            $tmp = $this->selectEfectosofendidos($tmp, "", $this->_proveedor);
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

    public function updateEfectosofendidos($efectosofendidosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblefectosofendidos SET ";
        if ($efectosofendidosDto->getIdEfectoOfendido() != "") {
            $sql.="idEfectoOfendido='" . $efectosofendidosDto->getIdEfectoOfendido() . "'";
            if (($efectosofendidosDto->getCveDetalleEfecto() != "") || ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $efectosofendidosDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $efectosofendidosDto->getIdImpOfeDelSolicitud() . "'";
            if (($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getIdReferencia() != "") {
            $sql.="IdReferencia='" . $efectosofendidosDto->getIdReferencia() . "'";
            if (($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getOrigen() != "") {
            $sql.="origen='" . $efectosofendidosDto->getOrigen() . "'";
            if (($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getActivo() != "") {
            $sql.="activo='" . $efectosofendidosDto->getActivo() . "'";
            if (($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosofendidosDto->getFechaRegistro() . "'";
            if (($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosofendidosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idEfectoOfendido='" . $efectosofendidosDto->getIdEfectoOfendido() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosofendidosDTO();
            $tmp->setidEfectoOfendido($efectosofendidosDto->getIdEfectoOfendido());
            $tmp = $this->selectEfectosofendidos($tmp, "", $this->_proveedor);
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

    public function deleteEfectosofendidos($efectosofendidosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblefectosofendidos  WHERE idEfectoOfendido='" . $efectosofendidosDto->getIdEfectoOfendido() . "'";
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

    public function selectEfectosofendidos($efectosofendidosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idEfectoOfendido,cveDetalleEfecto,idImpOfeDelSolicitud,IdReferencia,origen,activo,fechaRegistro,fechaActualizacion FROM tblefectosofendidos ";
        if (($efectosofendidosDto->getIdEfectoOfendido() != "") || ($efectosofendidosDto->getCveDetalleEfecto() != "") || ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($efectosofendidosDto->getIdEfectoOfendido() != "") {
            $sql.="idEfectoOfendido='" . $efectosofendidosDto->getIdEfectoOfendido() . "'";
            if (($efectosofendidosDto->getCveDetalleEfecto() != "") || ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $efectosofendidosDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") || ($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getIdImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $efectosofendidosDto->getIdImpOfeDelSolicitud() . "'";
            if (($efectosofendidosDto->getIdReferencia() != "") || ($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getIdReferencia() != "") {
            $sql.="IdReferencia='" . $efectosofendidosDto->getIdReferencia() . "'";
            if (($efectosofendidosDto->getOrigen() != "") || ($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getOrigen() != "") {
            $sql.="origen='" . $efectosofendidosDto->getOrigen() . "'";
            if (($efectosofendidosDto->getActivo() != "") || ($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getActivo() != "") {
            $sql.="activo='" . $efectosofendidosDto->getActivo() . "'";
            if (($efectosofendidosDto->getFechaRegistro() != "") || ($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosofendidosDto->getFechaRegistro() . "'";
            if (($efectosofendidosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosofendidosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new EfectosofendidosDTO();
                    $tmp[$contador]->setIdEfectoOfendido($row["idEfectoOfendido"]);
                    $tmp[$contador]->setCveDetalleEfecto($row["cveDetalleEfecto"]);
                    $tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
                    $tmp[$contador]->setIdReferencia($row["IdReferencia"]);
                    $tmp[$contador]->setOrigen($row["origen"]);
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