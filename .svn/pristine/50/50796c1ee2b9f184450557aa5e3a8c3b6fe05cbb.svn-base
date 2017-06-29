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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiemposesperasolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiemposesperasolicitudes($tiemposesperasolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiemposesperasolicitudes(";
        if ($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() != "") {
            $sql .= "idTiempoEsperaSolicitud";
            if (($tiemposesperasolicitudesDto->getMunitosEspera() != "") || ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getMunitosEspera() != "") {
            $sql .= "munitosEspera";
            if (($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") {
            $sql .= "cveTipoSolicitud";
            if (($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getActivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() != "") {
            $sql .= "'" . $tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getMunitosEspera() != "") || ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getMunitosEspera() != "") {
            $sql .= "'" . $tiemposesperasolicitudesDto->getMunitosEspera() . "'";
            if (($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") {
            $sql .= "'" . $tiemposesperasolicitudesDto->getCveTipoSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getActivo() != "") {
            $sql .= "'" . $tiemposesperasolicitudesDto->getActivo() . "'";
        }
        if ($tiemposesperasolicitudesDto->getFechaRegistro() != "") {
            
        }
        if ($tiemposesperasolicitudesDto->getFechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiemposesperasolicitudesDTO();
            $tmp->setidTiempoEsperaSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectTiemposesperasolicitudes($tmp, "", $this->_proveedor);
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

    public function updateTiemposesperasolicitudes($tiemposesperasolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiemposesperasolicitudes SET ";
        if ($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() != "") {
            $sql .= "idTiempoEsperaSolicitud='" . $tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getMunitosEspera() != "") || ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getMunitosEspera() != "") {
            $sql .= "munitosEspera='" . $tiemposesperasolicitudesDto->getMunitosEspera() . "'";
            if (($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") {
            $sql .= "cveTipoSolicitud='" . $tiemposesperasolicitudesDto->getCveTipoSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getActivo() != "") {
            $sql .= "activo='" . $tiemposesperasolicitudesDto->getActivo() . "'";
            if (($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tiemposesperasolicitudesDto->getFechaRegistro() . "'";
            if (($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiemposesperasolicitudesDto->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tiemposesperasolicitudesDto->getFechaActualizacion() . "'";
        }
        $sql .= " WHERE idTiempoEsperaSolicitud='" . $tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiemposesperasolicitudesDTO();
            $tmp->setidTiempoEsperaSolicitud($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud());
            $tmp = $this->selectTiemposesperasolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteTiemposesperasolicitudes($tiemposesperasolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiemposesperasolicitudes  WHERE idTiempoEsperaSolicitud='" . $tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() . "'";
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

    public function selectTiemposesperasolicitudes($tiemposesperasolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTiempoEsperaSolicitud,munitosEspera,cveTipoSolicitud,activo,fechaRegistro,fechaActualizacion FROM tbltiemposesperasolicitudes ";
        if (($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() != "") || ($tiemposesperasolicitudesDto->getMunitosEspera() != "") || ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() != "") {
            $sql .= "idTiempoEsperaSolicitud='" . $tiemposesperasolicitudesDto->getIdTiempoEsperaSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getMunitosEspera() != "") || ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiemposesperasolicitudesDto->getMunitosEspera() != "") {
            $sql .= "munitosEspera='" . $tiemposesperasolicitudesDto->getMunitosEspera() . "'";
            if (($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") || ($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiemposesperasolicitudesDto->getCveTipoSolicitud() != "") {
            $sql .= "cveTipoSolicitud='" . $tiemposesperasolicitudesDto->getCveTipoSolicitud() . "'";
            if (($tiemposesperasolicitudesDto->getActivo() != "") || ($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiemposesperasolicitudesDto->getActivo() != "") {
            $sql .= "activo='" . $tiemposesperasolicitudesDto->getActivo() . "'";
            if (($tiemposesperasolicitudesDto->getFechaRegistro() != "") || ($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiemposesperasolicitudesDto->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tiemposesperasolicitudesDto->getFechaRegistro() . "'";
            if (($tiemposesperasolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiemposesperasolicitudesDto->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tiemposesperasolicitudesDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TiemposesperasolicitudesDTO();
                    $tmp[$contador]->setIdTiempoEsperaSolicitud($row["idTiempoEsperaSolicitud"]);
                    $tmp[$contador]->setMunitosEspera($row["munitosEspera"]);
                    $tmp[$contador]->setCveTipoSolicitud($row["cveTipoSolicitud"]);
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