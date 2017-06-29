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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TelefonosimputadossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltelefonosimputadossolicitudes(";
        if ($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() != "") {
            $sql.="idTelefonoImputadosSolicitud";
            if (($telefonosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->gettelefono() != "") {
            $sql.="telefono";
            if (($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getcelular() != "") {
            $sql.="celular";
            if (($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getemail() != "") {
            $sql.="email";
            if (($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() . "'";
            if (($telefonosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->gettelefono() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->gettelefono() . "'";
            if (($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getcelular() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->getcelular() . "'";
            if (($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getemail() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->getemail() . "'";
            if (($telefonosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosimputadossolicitudesDto->getactivo() != "") {
            $sql.="'" . $telefonosimputadossolicitudesDto->getactivo() . "'";
        }
        if ($telefonosimputadossolicitudesDto->getfechaRegistro() != "") {
            
        }
        if ($telefonosimputadossolicitudesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadossolicitudesDTO();
            $tmp->setidTelefonoImputadosSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectTelefonosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosimputadossolicitudes SET ";
        $sql.="telefono='" . $telefonosimputadossolicitudesDto->gettelefono() . "'";
        $sql.=" ,celular='" . $telefonosimputadossolicitudesDto->getcelular() . "'";
        $sql.=" ,email='" . $telefonosimputadossolicitudesDto->getemail() . "'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idTelefonoImputadosSolicitud='" . $telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadossolicitudesDTO();
            $tmp->setidTelefonoImputadosSolicitud($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud());
            $tmp = $this->selectTelefonosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminaTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosimputadossolicitudes SET ";
        $sql.=" activo = 'N'";
        $sql.=" ,fechaActualizacion= now()";
        $sql.=" WHERE idTelefonoImputadosSolicitud='" . $telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadossolicitudesDTO();
            $tmp->setidTelefonoImputadosSolicitud($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud());
            $tmp = $this->selectTelefonosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltelefonosimputadossolicitudes  WHERE idTelefonoImputadosSolicitud='" . $telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() . "'";
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

    public function selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTelefonoImputadosSolicitud,idImputadoSolicitud,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbltelefonosimputadossolicitudes ";
        if (($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() != "") || ($telefonosimputadossolicitudesDto->getidImputadoSolicitud() != "") || ($telefonosimputadossolicitudesDto->gettelefono() != "") || ($telefonosimputadossolicitudesDto->getcelular() != "") || ($telefonosimputadossolicitudesDto->getemail() != "") || ($telefonosimputadossolicitudesDto->getactivo() != "") || ($telefonosimputadossolicitudesDto->getfechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($telefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud() != "") {
            $sql.="idTelefonoImputadosSolicitud='" . $telefonosimputadossolicitudesDto->getIdTelefonoImputadosSolicitud() . "'";
            if (($telefonosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "") || ($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $telefonosimputadossolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($telefonosimputadossolicitudesDto->getTelefono() != "") || ($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "") || ($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->gettelefono() != "") {
            $sql.="telefono='" . $telefonosimputadossolicitudesDto->getTelefono() . "'";
            if (($telefonosimputadossolicitudesDto->getCelular() != "") || ($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "") || ($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getcelular() != "") {
            $sql.="celular='" . $telefonosimputadossolicitudesDto->getCelular() . "'";
            if (($telefonosimputadossolicitudesDto->getEmail() != "") || ($telefonosimputadossolicitudesDto->getActivo() != "") || ($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getemail() != "") {
            $sql.="email='" . $telefonosimputadossolicitudesDto->getEmail() . "'";
            if (($telefonosimputadossolicitudesDto->getActivo() != "") || ($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $telefonosimputadossolicitudesDto->getActivo() . "'";
            if (($telefonosimputadossolicitudesDto->getFechaRegistro() != "") || ($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $telefonosimputadossolicitudesDto->getFechaRegistro() . "'";
            if (($telefonosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosimputadossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $telefonosimputadossolicitudesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TelefonosimputadossolicitudesDTO();
                    $tmp[$contador]->setIdTelefonoImputadosSolicitud($row["idTelefonoImputadosSolicitud"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCelular($row["celular"]);
                    $tmp[$contador]->setEmail($row["email"]);
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