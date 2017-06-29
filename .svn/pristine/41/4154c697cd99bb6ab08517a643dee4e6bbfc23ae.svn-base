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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tutoresofendidoscateos/TutoresofendidoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');

class TutoresofendidoscateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTutoresofendidoscateos($tutoresofendidoscateosDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "INSERT INTO tbltutoresofendidoscateos(";
        if ($tutoresofendidoscateosDto->getIdTutorOfendidocateo() != "") {
            $sql .= "idTutorOfendidocateo";
            if (($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") || ($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") {
            $sql .= "idOfendidoCateo";
            if (($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor";
            if (($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getnombre() != "") {
            $sql .= "nombre";
            if (($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getpaterno() != "") {
            $sql .= "paterno";
            if (($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getmaterno() != "") {
            $sql .= "materno";
            if (($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento";
            if (($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getDomicilio() != "") {
            $sql .= "domicilio";
            if (($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getTelefono() != "") {
            $sql .= "telefono";
            if (($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getEmail() != "") {
            $sql .= "email";
            if (($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getActivo() != "") {
            $sql .= "activo";
            if (($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getcveGenero() != "") {
            $sql .= "cveGenero";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($tutoresofendidoscateosDto->getIdTutorOfendidocateo() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getIdTutorOfendidocateo() . "'";
            if (($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") || ($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getIdOfendidoCateo() . "'";
            if (($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getcveTipoTutor() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getcveTipoTutor() . "'";
            if (($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getnombre() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getnombre() . "'";
            if (($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getpaterno() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getpaterno() . "'";
            if (($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getmaterno() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getmaterno() . "'";
            if (($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaNacimiento() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getfechaNacimiento() . "'";
            if (($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getDomicilio() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getDomicilio() . "'";
            if (($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getTelefono() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getTelefono() . "'";
            if (($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getEmail() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getEmail() . "'";
            if (($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getActivo() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getActivo() . "'";
            if (($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaRegistro() != "") {
            if (($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaActualizacion() != "") {
            if (($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getcveGenero() != "") {
            $sql .= "'" . $tutoresofendidoscateosDto->getcveGenero() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscateosDTO();
            $tmp->setidTutorOfendidocateo($this->_proveedor->lastID());
            $tmp = $this->selectTutoresofendidoscateos($tmp, "", $this->_proveedor);
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

    public function updateTutoresofendidoscateos($tutoresofendidoscateosDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidoscateos SET ";
        if ($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") {
            $sql .= "idOfendidoCateo='" . $tutoresofendidoscateosDto->getIdOfendidoCateo() . "'";
            if (($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor='" . $tutoresofendidoscateosDto->getcveTipoTutor() . "'";
            if (($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getnombre() != "") {
            $sql .= "nombre='" . $tutoresofendidoscateosDto->getnombre() . "'";
            if (($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getpaterno() != "") {
            $sql .= "paterno='" . $tutoresofendidoscateosDto->getpaterno() . "'";
            if (($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getmaterno() != "") {
            $sql .= "materno='" . $tutoresofendidoscateosDto->getmaterno() . "'";
            if (($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $tutoresofendidoscateosDto->getfechaNacimiento() . "'";
            if (($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getEmail() != "") {
            $sql .= "edad='" . $tutoresofendidoscateosDto->getEmail() . "'";
            if (($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getActivo() != "") {
            $sql .= "activo='" . $tutoresofendidoscateosDto->getActivo() . "'";
            if (($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tutoresofendidoscateosDto->getfechaRegistro() . "'";
            if (($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }

        if ($tutoresofendidoscateosDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $tutoresofendidoscateosDto->getcveGenero() . "'";
        }

        $sql .= ",fechaActualizacion=NOW()";

        $sql .= " WHERE idTutorOfendidocateo='" . $tutoresofendidoscateosDto->getIdTutorOfendidocateo() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscateosDTO();
            $tmp->setidTutorOfendidocateo($tutoresofendidoscateosDto->getIdTutorOfendidocateo());
            $tmp = $this->selectTutoresofendidoscateos($tmp, "", $this->_proveedor);
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

    public function eliminarTutoresOfendidocateos($tutoresofendidoscateosDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidoscateos SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idOfendidoCateo='" . $tutoresofendidoscateosDto->getIdOfendidoCateo() . "'";

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

    public function deleteTutoresofendidoscateos($tutoresofendidoscateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltutoresofendidoscateos  WHERE idTutorOfendidocateo='" . $tutoresofendidoscateosDto->$getIdTutorOfendidocateo() . "'";
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

    public function selectTutoresofendidoscateos($tutoresofendidoscateosDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                idTutorOfendidocateo,idOfendidoCateo,cveTipoTutor,nombre,paterno,materno,
                fechaNacimiento,domicilio,telefono,email,activo,fechaRegistro,fechaActualizacion,cveGenero
                FROM tbltutoresofendidoscateos ";
        //$sql = "SELECT idTutorOfendidocateo,idOfendidoCateo,cveTipoTutor,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion,cveGenero FROM tbltutoresofendidoscateos ";
        if (($tutoresofendidoscateosDto->getIdTutorOfendidocateo() != "") || ($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") || ($tutoresofendidoscateosDto->getcveTipoTutor() != "") || ($tutoresofendidoscateosDto->getnombre() != "") || ($tutoresofendidoscateosDto->getpaterno() != "") || ($tutoresofendidoscateosDto->getmaterno() != "") || ($tutoresofendidoscateosDto->getfechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getfechaRegistro() != "") || ($tutoresofendidoscateosDto->getfechaActualizacion() != "") || ($tutoresofendidoscateosDto->getcveGenero() != "")) {
            $sql .= " WHERE ";
        }
        if ($tutoresofendidoscateosDto->getIdTutorOfendidocateo() != "") {
            $sql .= "idTutorOfendidocateo='" . $tutoresofendidoscateosDto->getIdTutorOfendidocateo() . "'";
            if (($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") || ($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getIdOfendidoCateo() != "") {
            $sql .= "idOfendidoCateo='" . $tutoresofendidoscateosDto->getIdOfendidoCateo() . "'";
            if (($tutoresofendidoscateosDto->getCveTipoTutor() != "") || ($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor='" . $tutoresofendidoscateosDto->getCveTipoTutor() . "'";
            if (($tutoresofendidoscateosDto->getNombre() != "") || ($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getnombre() != "") {
            $sql .= "nombre='" . $tutoresofendidoscateosDto->getNombre() . "'";
            if (($tutoresofendidoscateosDto->getPaterno() != "") || ($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getpaterno() != "") {
            $sql .= "paterno='" . $tutoresofendidoscateosDto->getPaterno() . "'";
            if (($tutoresofendidoscateosDto->getMaterno() != "") || ($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getmaterno() != "") {
            $sql .= "materno='" . $tutoresofendidoscateosDto->getMaterno() . "'";
            if (($tutoresofendidoscateosDto->getFechaNacimiento() != "") || ($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $tutoresofendidoscateosDto->getFechaNacimiento() . "'";
            if (($tutoresofendidoscateosDto->getDomicilio() != "") || ($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getDomicilio() != "") {
            $sql .= "domicilio='" . $tutoresofendidoscateosDto->getDomicilio() . "'";
            if (($tutoresofendidoscateosDto->getTelefono() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getTelefono() != "") {
            $sql .= "domicilio='" . $tutoresofendidoscateosDto->getTelefono() . "'";
            if (($tutoresofendidoscateosDto->getEmail() != "") || ($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getEmail() != "") {
            $sql .= "email='" . $tutoresofendidoscateosDto->getEmail() . "'";
            if (($tutoresofendidoscateosDto->getActivo() != "") || ($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getActivo() != "") {
            $sql .= "activo='" . $tutoresofendidoscateosDto->getActivo() . "'";
            if (($tutoresofendidoscateosDto->getFechaRegistro() != "") || ($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tutoresofendidoscateosDto->getFechaRegistro() . "'";
            if (($tutoresofendidoscateosDto->getFechaActualizacion() != "") || ($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tutoresofendidoscateosDto->getFechaActualizacion() . "'";
            if (($tutoresofendidoscateosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidoscateosDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $tutoresofendidoscateosDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new TutoresofendidoscateosDTO();
                    $tmp[$contador]->setIdTutorOfendidocateo($row["idTutorOfendidocateo"]);
                    $tmp[$contador]->setIdOfendidoCateo($row["idOfendidoCateo"]);
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
