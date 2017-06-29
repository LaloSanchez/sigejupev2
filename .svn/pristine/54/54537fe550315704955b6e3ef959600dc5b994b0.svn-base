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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tutoresofendidosordenes/TutoresofendidosordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');

class TutoresofendidosordenesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTutoresofendidosordenes($tutoresofendidosordenesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "INSERT INTO tbltutoresofendidosordenes(";
        if ($tutoresofendidosordenesDto->getIdTutorOfendidoorden() != "") {
            $sql .= "idTutorOfendidoorden";
            if (($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") || ($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") {
            $sql .= "idOfendidoOrden";
            if (($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor";
            if (($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getnombre() != "") {
            $sql .= "nombre";
            if (($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getpaterno() != "") {
            $sql .= "paterno";
            if (($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getmaterno() != "") {
            $sql .= "materno";
            if (($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento";
            if (($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getDomicilio() != "") {
            $sql .= "domicilio";
            if (($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getTelefono() != "") {
            $sql .= "telefono";
            if (($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getEmail() != "") {
            $sql .= "email";
            if (($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getActivo() != "") {
            $sql .= "activo";
            if (($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getcveGenero() != "") {
            $sql .= "cveGenero";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($tutoresofendidosordenesDto->getIdTutorOfendidoorden() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getIdTutorOfendidoorden() . "'";
            if (($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") || ($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getIdOfendidoOrden() . "'";
            if (($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getcveTipoTutor() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getcveTipoTutor() . "'";
            if (($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getnombre() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getnombre() . "'";
            if (($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getpaterno() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getpaterno() . "'";
            if (($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getmaterno() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getmaterno() . "'";
            if (($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaNacimiento() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getfechaNacimiento() . "'";
            if (($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getDomicilio() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getDomicilio() . "'";
            if (($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getTelefono() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getTelefono() . "'";
            if (($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getEmail() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getEmail() . "'";
            if (($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getActivo() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getActivo() . "'";
            if (($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaRegistro() != "") {
            if (($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaActualizacion() != "") {
            if (($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getcveGenero() != "") {
            $sql .= "'" . $tutoresofendidosordenesDto->getcveGenero() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidosordenesDTO();
            $tmp->setIdTutorOfendidoorden($this->_proveedor->lastID());
            $tmp = $this->selectTutoresofendidosordenes($tmp, "", $this->_proveedor);
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

    public function updateTutoresofendidosordenes($tutoresofendidosordenesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidosordenes SET ";
        if ($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") {
            $sql .= "idOfendidoOrden='" . $tutoresofendidosordenesDto->getIdOfendidoOrden() . "'";
            if (($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor='" . $tutoresofendidosordenesDto->getcveTipoTutor() . "'";
            if (($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getnombre() != "") {
            $sql .= "nombre='" . $tutoresofendidosordenesDto->getnombre() . "'";
            if (($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getpaterno() != "") {
            $sql .= "paterno='" . $tutoresofendidosordenesDto->getpaterno() . "'";
            if (($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getmaterno() != "") {
            $sql .= "materno='" . $tutoresofendidosordenesDto->getmaterno() . "'";
            if (($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $tutoresofendidosordenesDto->getfechaNacimiento() . "'";
            if (($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getEmail() != "") {
            $sql .= "edad='" . $tutoresofendidosordenesDto->getEmail() . "'";
            if (($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getActivo() != "") {
            $sql .= "activo='" . $tutoresofendidosordenesDto->getActivo() . "'";
            if (($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tutoresofendidosordenesDto->getfechaRegistro() . "'";
            if (($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }

        if ($tutoresofendidosordenesDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $tutoresofendidosordenesDto->getcveGenero() . "'";
        }

        $sql .= ",fechaActualizacion=NOW()";

        $sql .= " WHERE idTutorOfendidoorden='" . $tutoresofendidosordenesDto->getIdTutorOfendidoorden() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidosordenesDTO();
            $tmp->setidTutorOfendidoorden($tutoresofendidosordenesDto->getIdTutorOfendidoorden());
            $tmp = $this->selectTutoresofendidosordenes($tmp, "", $this->_proveedor);
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

    public function eliminarTutoresOfendidoordenes($tutoresofendidosordenesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidosordenes SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idOfendidoOrden='" . $tutoresofendidosordenesDto->getIdOfendidoOrden() . "'";

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

    public function deleteTutoresofendidosordenes($tutoresofendidosordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltutoresofendidosordenes  WHERE idTutorOfendidoorden='" . $tutoresofendidosordenesDto->$getIdTutorOfendidoorden() . "'";
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

    public function selectTutoresofendidosordenes($tutoresofendidosordenesDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                idTutorOfendidoorden,idOfendidoOrden,cveTipoTutor,nombre,paterno,materno,
                fechaNacimiento,domicilio,telefono,email,activo,fechaRegistro,fechaActualizacion,cveGenero
                FROM tbltutoresofendidosordenes ";
        //$sql = "SELECT idTutorOfendidoorden,idOfendidoOrden,cveTipoTutor,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion,cveGenero FROM tbltutoresofendidosordenes ";
        if (($tutoresofendidosordenesDto->getIdTutorOfendidoorden() != "") || ($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") || ($tutoresofendidosordenesDto->getcveTipoTutor() != "") || ($tutoresofendidosordenesDto->getnombre() != "") || ($tutoresofendidosordenesDto->getpaterno() != "") || ($tutoresofendidosordenesDto->getmaterno() != "") || ($tutoresofendidosordenesDto->getfechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getfechaRegistro() != "") || ($tutoresofendidosordenesDto->getfechaActualizacion() != "") || ($tutoresofendidosordenesDto->getcveGenero() != "")) {
            $sql .= " WHERE ";
        }
        if ($tutoresofendidosordenesDto->getIdTutorOfendidoorden() != "") {
            $sql .= "idTutorOfendidoorden='" . $tutoresofendidosordenesDto->getIdTutorOfendidoorden() . "'";
            if (($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") || ($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getIdOfendidoOrden() != "") {
            $sql .= "idOfendidoOrden='" . $tutoresofendidosordenesDto->getIdOfendidoOrden() . "'";
            if (($tutoresofendidosordenesDto->getCveTipoTutor() != "") || ($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor='" . $tutoresofendidosordenesDto->getCveTipoTutor() . "'";
            if (($tutoresofendidosordenesDto->getNombre() != "") || ($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getnombre() != "") {
            $sql .= "nombre='" . $tutoresofendidosordenesDto->getNombre() . "'";
            if (($tutoresofendidosordenesDto->getPaterno() != "") || ($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getpaterno() != "") {
            $sql .= "paterno='" . $tutoresofendidosordenesDto->getPaterno() . "'";
            if (($tutoresofendidosordenesDto->getMaterno() != "") || ($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getmaterno() != "") {
            $sql .= "materno='" . $tutoresofendidosordenesDto->getMaterno() . "'";
            if (($tutoresofendidosordenesDto->getFechaNacimiento() != "") || ($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $tutoresofendidosordenesDto->getFechaNacimiento() . "'";
            if (($tutoresofendidosordenesDto->getDomicilio() != "") || ($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getDomicilio() != "") {
            $sql .= "domicilio='" . $tutoresofendidosordenesDto->getDomicilio() . "'";
            if (($tutoresofendidosordenesDto->getTelefono() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getTelefono() != "") {
            $sql .= "domicilio='" . $tutoresofendidosordenesDto->getTelefono() . "'";
            if (($tutoresofendidosordenesDto->getEmail() != "") || ($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getEmail() != "") {
            $sql .= "email='" . $tutoresofendidosordenesDto->getEmail() . "'";
            if (($tutoresofendidosordenesDto->getActivo() != "") || ($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getActivo() != "") {
            $sql .= "activo='" . $tutoresofendidosordenesDto->getActivo() . "'";
            if (($tutoresofendidosordenesDto->getFechaRegistro() != "") || ($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tutoresofendidosordenesDto->getFechaRegistro() . "'";
            if (($tutoresofendidosordenesDto->getFechaActualizacion() != "") || ($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tutoresofendidosordenesDto->getFechaActualizacion() . "'";
            if (($tutoresofendidosordenesDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosordenesDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $tutoresofendidosordenesDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new TutoresofendidosordenesDTO();
                    $tmp[$contador]->setIdTutorOfendidoorden ($row["idTutorOfendidoorden"]);
                    $tmp[$contador]->setIdOfendidoOrden($row["idOfendidoOrden"]);
                    $tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
                    $tmp[$contador]->setNombre(utf8_encode($row["nombre"]));
                    $tmp[$contador]->setPaterno(utf8_encode($row["paterno"]));
                    $tmp[$contador]->setMaterno(utf8_encode($row["materno"]));
                    $tmp[$contador]->setFechaNacimiento(date_format(date_create($row["fechaNacimiento"]), 'd/m/Y'));
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setEmail($row["email"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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
