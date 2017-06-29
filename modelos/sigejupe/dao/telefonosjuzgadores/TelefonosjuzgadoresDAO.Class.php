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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TelefonosjuzgadoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTelefonosjuzgadores($telefonosjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltelefonosjuzgadores(";
        if ($telefonosjuzgadoresDto->getidTelefonJuzgador() != "") {
            $sql.="idTelefonJuzgador";
            if (($telefonosjuzgadoresDto->getIdJuzgador() != "") || ($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcveTipoLada() != "") {
            $sql.="cveTipoLada";
            if (($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->gettelefono() != "") {
            $sql.="telefono";
            if (($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcelular() != "") {
            $sql.="celular";
            if (($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getemail() != "") {
            $sql.="email";
            if (($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($telefonosjuzgadoresDto->getidTelefonJuzgador() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getidTelefonJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getIdJuzgador() != "") || ($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getidJuzgador() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getidJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcveTipoLada() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getcveTipoLada() . "'";
            if (($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->gettelefono() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->gettelefono() . "'";
            if (($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcelular() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getcelular() . "'";
            if (($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getemail() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getemail() . "'";
            if (($telefonosjuzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getactivo() != "") {
            $sql.="'" . $telefonosjuzgadoresDto->getactivo() . "'";
        }
        if ($telefonosjuzgadoresDto->getfechaRegistro() != "") {
            
        }
        if ($telefonosjuzgadoresDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosjuzgadoresDTO();
            $tmp->setidTelefonJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectTelefonosjuzgadores($tmp, "", $this->_proveedor);
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

    public function updateTelefonosjuzgadores($telefonosjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosjuzgadores SET ";
        $sql.=" telefono='" . $telefonosjuzgadoresDto->gettelefono() . "'";
        if ($telefonosjuzgadoresDto->getcveTipoLada() != "") {
            $sql.=", cveTipoLada='" . $telefonosjuzgadoresDto->getcveTipoLada() . "'";
        }
        $sql.=", celular='" . $telefonosjuzgadoresDto->getcelular() . "'";
        $sql.=", email='" . $telefonosjuzgadoresDto->getemail() . "'";
        $sql.=", fechaActualizacion = now()";
        $sql.=" WHERE idTelefonJuzgador='" . $telefonosjuzgadoresDto->getidTelefonJuzgador() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosjuzgadoresDTO();
            $tmp->setidTelefonJuzgador($telefonosjuzgadoresDto->getidTelefonJuzgador());
            $tmp = $this->selectTelefonosjuzgadores($tmp, "", $this->_proveedor);
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

    public function updateTelefonosjuzgadoresRSP($telefonosjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosjuzgadores SET ";
        if ($telefonosjuzgadoresDto->getidTelefonJuzgador() != "") {
            $sql.="idTelefonJuzgador='" . $telefonosjuzgadoresDto->getidTelefonJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getIdJuzgador() != "") || ($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $telefonosjuzgadoresDto->getidJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcveTipoLada() != "") {
            $sql.="cveTipoLada='" . $telefonosjuzgadoresDto->getcveTipoLada() . "'";
            if (($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->gettelefono() != "") {
            $sql.="telefono='" . $telefonosjuzgadoresDto->gettelefono() . "'";
            if (($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getcelular() != "") {
            $sql.="celular='" . $telefonosjuzgadoresDto->getcelular() . "'";
            if (($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getemail() != "") {
            $sql.="email='" . $telefonosjuzgadoresDto->getemail() . "'";
            if (($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getactivo() != "") {
            $sql.="activo='" . $telefonosjuzgadoresDto->getactivo() . "'";
            if (($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $telefonosjuzgadoresDto->getfechaRegistro() . "'";
            if (($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosjuzgadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $telefonosjuzgadoresDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idTelefonJuzgador='" . $telefonosjuzgadoresDto->getidTelefonJuzgador() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosjuzgadoresDTO();
            $tmp->setidTelefonJuzgador($telefonosjuzgadoresDto->getidTelefonJuzgador());
            $tmp = $this->selectTelefonosjuzgadores($tmp, "", $this->_proveedor);
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

    public function deleteTelefonosjuzgadores($telefonosjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltelefonosjuzgadores  WHERE idTelefonJuzgador='" . $telefonosjuzgadoresDto->getidTelefonJuzgador() . "'";
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

    public function selectTelefonosjuzgadores($telefonosjuzgadoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTelefonJuzgador,idJuzgador,cveTipoLada,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbltelefonosjuzgadores ";
        if (($telefonosjuzgadoresDto->getidTelefonJuzgador() != "") || ($telefonosjuzgadoresDto->getidJuzgador() != "") || ($telefonosjuzgadoresDto->getcveTipoLada() != "") || ($telefonosjuzgadoresDto->gettelefono() != "") || ($telefonosjuzgadoresDto->getcelular() != "") || ($telefonosjuzgadoresDto->getemail() != "") || ($telefonosjuzgadoresDto->getactivo() != "") || ($telefonosjuzgadoresDto->getfechaRegistro() != "") || ($telefonosjuzgadoresDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($telefonosjuzgadoresDto->getidTelefonJuzgador() != "") {
            $sql.="idTelefonJuzgador='" . $telefonosjuzgadoresDto->getIdTelefonJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getIdJuzgador() != "") || ($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $telefonosjuzgadoresDto->getIdJuzgador() . "'";
            if (($telefonosjuzgadoresDto->getCveTipoLada() != "") || ($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getcveTipoLada() != "") {
            $sql.="cveTipoLada='" . $telefonosjuzgadoresDto->getCveTipoLada() . "'";
            if (($telefonosjuzgadoresDto->getTelefono() != "") || ($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->gettelefono() != "") {
            $sql.="telefono='" . $telefonosjuzgadoresDto->getTelefono() . "'";
            if (($telefonosjuzgadoresDto->getCelular() != "") || ($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getcelular() != "") {
            $sql.="celular='" . $telefonosjuzgadoresDto->getCelular() . "'";
            if (($telefonosjuzgadoresDto->getEmail() != "") || ($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getemail() != "") {
            $sql.="email='" . $telefonosjuzgadoresDto->getEmail() . "'";
            if (($telefonosjuzgadoresDto->getActivo() != "") || ($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getactivo() != "") {
            $sql.="activo='" . $telefonosjuzgadoresDto->getActivo() . "'";
            if (($telefonosjuzgadoresDto->getFechaRegistro() != "") || ($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $telefonosjuzgadoresDto->getFechaRegistro() . "'";
            if (($telefonosjuzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosjuzgadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $telefonosjuzgadoresDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TelefonosjuzgadoresDTO();
                    $tmp[$contador]->setIdTelefonJuzgador($row["idTelefonJuzgador"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveTipoLada($row["cveTipoLada"]);
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