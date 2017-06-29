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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TelefonosofendidossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltelefonosofendidossolicitudes(";
        if ($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() != "") {
            $sql .= "idTelefonoOfendidoSolicitud";
            if (($telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
            if (($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "telefono";
            if (($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getcelular() != "") {
            $sql .= "celular";
            if (($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getemail() != "") {
            $sql .= "email";
            if (($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->gettelefono() . "'";
            if (($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getcelular() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->getcelular() . "'";
            if (($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getemail() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->getemail() . "'";
            if (($telefonosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $telefonosofendidossolicitudesDto->getactivo() . "'";
        }
        if ($telefonosofendidossolicitudesDto->getfechaRegistro() != "") {

        }
        if ($telefonosofendidossolicitudesDto->getfechaActualizacion() != "") {

        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosofendidossolicitudesDTO();
            $tmp->setidTelefonoOfendidoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectTelefonosofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosofendidossolicitudes SET ";
        if ($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() != "") {
            $sql .= "idTelefonoOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }

        $sql .= "telefono='" . $telefonosofendidossolicitudesDto->gettelefono() . "'";
        $sql .= ",";

        $sql .= "celular='" . $telefonosofendidossolicitudesDto->getcelular() . "'";
        $sql .= ",";

        $sql .= "email='" . $telefonosofendidossolicitudesDto->getemail() . "'";
        $sql .= ",";

        if ($telefonosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $telefonosofendidossolicitudesDto->getactivo() . "'";
            if (($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $telefonosofendidossolicitudesDto->getfechaRegistro() . "'";
            if (($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($telefonosofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
        }
        $sql .= " WHERE idTelefonoOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosofendidossolicitudesDTO();
            $tmp->setidTelefonoOfendidoSolicitud($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud());
            $tmp = $this->selectTelefonosofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminarTelefonosOfendido($telefonosofendidossolicitudesDto, $proveedor = null, $byRow = 'idOfendidoSolicitud')
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosofendidossolicitudes SET activo='N', fechaActualizacion=NOW()";

        if ($byRow == 'idOfendidoSolicitud') {
            $sql .= " WHERE idOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
        } else if ($byRow == 'idTelefonoOfendidoSolicitud') {
            $sql .= " WHERE idTelefonoOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getIdTelefonoOfendidoSolicitud() . "'";

        }


        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $response = true;
        } else {
            $response = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }


        return $response;

    }

    public function deleteTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltelefonosofendidossolicitudes  WHERE idTelefonoOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() . "'";
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

    public function selectTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTelefonoOfendidoSolicitud,idOfendidoSolicitud,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbltelefonosofendidossolicitudes ";
        if (($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->getidOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->gettelefono() != "") || ($telefonosofendidossolicitudesDto->getcelular() != "") || ($telefonosofendidossolicitudesDto->getemail() != "") || ($telefonosofendidossolicitudesDto->getactivo() != "") || ($telefonosofendidossolicitudesDto->getfechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($telefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud() != "") {
            $sql .= "idTelefonoOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getIdTelefonoOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $telefonosofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($telefonosofendidossolicitudesDto->getTelefono() != "") || ($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "telefono='" . $telefonosofendidossolicitudesDto->getTelefono() . "'";
            if (($telefonosofendidossolicitudesDto->getCelular() != "") || ($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getcelular() != "") {
            $sql .= "celular='" . $telefonosofendidossolicitudesDto->getCelular() . "'";
            if (($telefonosofendidossolicitudesDto->getEmail() != "") || ($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getemail() != "") {
            $sql .= "email='" . $telefonosofendidossolicitudesDto->getEmail() . "'";
            if (($telefonosofendidossolicitudesDto->getActivo() != "") || ($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $telefonosofendidossolicitudesDto->getActivo() . "'";
            if (($telefonosofendidossolicitudesDto->getFechaRegistro() != "") || ($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $telefonosofendidossolicitudesDto->getFechaRegistro() . "'";
            if (($telefonosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($telefonosofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $telefonosofendidossolicitudesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TelefonosofendidossolicitudesDTO();
                    $tmp[$contador]->setIdTelefonoOfendidoSolicitud($row["idTelefonoOfendidoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $telefono = ($row['telefono'] == '' || is_null($row['telefono'])) ? '' : $row['telefono'];
                    $tmp[$contador]->setTelefono($telefono);
                    $celular = ($row['celular'] == '' || is_null($row['celular'])) ? '' : $row['celular'];
                    $tmp[$contador]->setCelular($celular);
                    $email = ($row['email'] == '' || is_null($row['email'])) ? '' : $row['email'];
                    $tmp[$contador]->setEmail(utf8_encode($email));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador ++;
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
