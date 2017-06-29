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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');

class TutoresofendidosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertTutoresofendidos($tutoresofendidosDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltutoresofendidos(";
        if ($tutoresofendidosDto->getidTutorOfendido() != "") {
            $sql .= "idTutorOfendido";
            if (($tutoresofendidosDto->getIdOfendidoSolicitud() != "") || ($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
            if (($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor";
            if (($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getProvDef() != "") {
            $sql .= "ProvDef";
            if (($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getnombre() != "") {
            $sql .= "nombre";
            if (($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getpaterno() != "") {
            $sql .= "paterno";
            if (($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getmaterno() != "") {
            $sql .= "materno";
            if (($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento";
            if (($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getedad() != "") {
            $sql .= "edad";
            if (($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getactivo() != "") {
            $sql .= "activo";
            if (($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getcveGenero() != "") {
            $sql .= "cveGenero";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($tutoresofendidosDto->getidTutorOfendido() != "") {
            $sql .= "'" . $tutoresofendidosDto->getidTutorOfendido() . "'";
            if (($tutoresofendidosDto->getIdOfendidoSolicitud() != "") || ($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $tutoresofendidosDto->getidOfendidoSolicitud() . "'";
            if (($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getcveTipoTutor() != "") {
            $sql .= "'" . $tutoresofendidosDto->getcveTipoTutor() . "'";
            if (($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getProvDef() != "") {
            $sql .= "'" . $tutoresofendidosDto->getProvDef() . "'";
            if (($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getnombre() != "") {
            $sql .= "'" . $tutoresofendidosDto->getnombre() . "'";
            if (($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getpaterno() != "") {
            $sql .= "'" . $tutoresofendidosDto->getpaterno() . "'";
            if (($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getmaterno() != "") {
            $sql .= "'" . $tutoresofendidosDto->getmaterno() . "'";
            if (($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaNacimiento() != "") {
            $sql .= "'" . $tutoresofendidosDto->getfechaNacimiento() . "'";
            if (($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getedad() != "") {
            $sql .= "'" . $tutoresofendidosDto->getedad() . "'";
            if (($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getactivo() != "") {
            $sql .= "'" . $tutoresofendidosDto->getactivo() . "'";
            if (($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaRegistro() != "") {
            if (($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaActualizacion() != "") {
            if (($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getcveGenero() != "") {
            $sql .= "'" . $tutoresofendidosDto->getcveGenero() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidosDTO();
            $tmp->setidTutorOfendido($this->_proveedor->lastID());
            $tmp = $this->selectTutoresofendidos($tmp, "", $this->_proveedor);
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

    public function updateTutoresofendidos($tutoresofendidosDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidos SET ";
        if ($tutoresofendidosDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $tutoresofendidosDto->getidOfendidoSolicitud() . "'";
            if (($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getcveTipoTutor() != "") {
            $sql .= "cveTipoTutor='" . $tutoresofendidosDto->getcveTipoTutor() . "'";
            if (($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getProvDef() != "") {
            $sql .= "ProvDef='" . $tutoresofendidosDto->getProvDef() . "'";
            if (($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getnombre() != "") {
            $sql .= "nombre='" . $tutoresofendidosDto->getnombre() . "'";
            if (($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getpaterno() != "") {
            $sql .= "paterno='" . $tutoresofendidosDto->getpaterno() . "'";
            if (($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getmaterno() != "") {
            $sql .= "materno='" . $tutoresofendidosDto->getmaterno() . "'";
            if (($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $tutoresofendidosDto->getfechaNacimiento() . "'";
            if (($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getedad() != "") {
            $sql .= "edad='" . $tutoresofendidosDto->getedad() . "'";
            if (($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getactivo() != "") {
            $sql .= "activo='" . $tutoresofendidosDto->getactivo() . "'";
            if (($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }
        if ($tutoresofendidosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tutoresofendidosDto->getfechaRegistro() . "'";
            if (($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= ",";
            }
        }

        if ($tutoresofendidosDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $tutoresofendidosDto->getcveGenero() . "'";
        }

        $sql .= ",fechaActualizacion=NOW()";

        $sql .= " WHERE idTutorOfendido='" . $tutoresofendidosDto->getidTutorOfendido() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidosDTO();
            $tmp->setidTutorOfendido($tutoresofendidosDto->getidTutorOfendido());
            $tmp = $this->selectTutoresofendidos($tmp, "", $this->_proveedor);
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

    public function eliminarTutoresOfendido($tutoresofendidosDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidos SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idOfendidoSolicitud='" . $tutoresofendidosDto->getIdOfendidoSolicitud() . "'";

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

    public function deleteTutoresofendidos($tutoresofendidosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltutoresofendidos  WHERE idTutorOfendido='" . $tutoresofendidosDto->getidTutorOfendido() . "'";
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

    public function selectTutoresofendidos($tutoresofendidosDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                a.idTutorOfendido,a.idOfendidoSolicitud,a.cveTipoTutor,a.ProvDef,b.desTipoTutor,a.nombre,a.paterno,a.materno,
                a.fechaNacimiento,a.edad,a.activo,a.fechaRegistro,a.fechaActualizacion,a.cveGenero,c.desGenero
                FROM tbltutoresofendidos a
                JOIN tbltipostutores b ON a.cveTipoTutor = b.cveTipoTutor
                JOIN tblgeneros c ON a.cveGenero = c.cveGenero";
        //$sql = "SELECT idTutorOfendido,idOfendidoSolicitud,cveTipoTutor,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion,cveGenero FROM tbltutoresofendidos ";
        if (($tutoresofendidosDto->getidTutorOfendido() != "") || ($tutoresofendidosDto->getidOfendidoSolicitud() != "") || ($tutoresofendidosDto->getcveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getnombre() != "") || ($tutoresofendidosDto->getpaterno() != "") || ($tutoresofendidosDto->getmaterno() != "") || ($tutoresofendidosDto->getfechaNacimiento() != "") || ($tutoresofendidosDto->getedad() != "") || ($tutoresofendidosDto->getactivo() != "") || ($tutoresofendidosDto->getfechaRegistro() != "") || ($tutoresofendidosDto->getfechaActualizacion() != "") || ($tutoresofendidosDto->getcveGenero() != "")) {
            $sql .= " WHERE ";
        }
        if ($tutoresofendidosDto->getidTutorOfendido() != "") {
            $sql .= "a.idTutorOfendido='" . $tutoresofendidosDto->getIdTutorOfendido() . "'";
            if (($tutoresofendidosDto->getIdOfendidoSolicitud() != "") || ($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getidOfendidoSolicitud() != "") {
            $sql .= "a.idOfendidoSolicitud='" . $tutoresofendidosDto->getIdOfendidoSolicitud() . "'";
            if (($tutoresofendidosDto->getCveTipoTutor() != "") || ($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getcveTipoTutor() != "") {
            $sql .= "a.cveTipoTutor='" . $tutoresofendidosDto->getCveTipoTutor() . "'";
            if (($tutoresofendidosDto->getProvDef() != "") || ($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getProvDef() != "") {
            $sql .= "a.ProvDef='" . $tutoresofendidosDto->getProvDef() . "'";
            if (($tutoresofendidosDto->getNombre() != "") || ($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getnombre() != "") {
            $sql .= "a.nombre='" . $tutoresofendidosDto->getNombre() . "'";
            if (($tutoresofendidosDto->getPaterno() != "") || ($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getpaterno() != "") {
            $sql .= "a.paterno='" . $tutoresofendidosDto->getPaterno() . "'";
            if (($tutoresofendidosDto->getMaterno() != "") || ($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getmaterno() != "") {
            $sql .= "a.materno='" . $tutoresofendidosDto->getMaterno() . "'";
            if (($tutoresofendidosDto->getFechaNacimiento() != "") || ($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getfechaNacimiento() != "") {
            $sql .= "a.fechaNacimiento='" . $tutoresofendidosDto->getFechaNacimiento() . "'";
            if (($tutoresofendidosDto->getEdad() != "") || ($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getedad() != "") {
            $sql .= "a.edad='" . $tutoresofendidosDto->getEdad() . "'";
            if (($tutoresofendidosDto->getActivo() != "") || ($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getactivo() != "") {
            $sql .= "a.activo='" . $tutoresofendidosDto->getActivo() . "'";
            if (($tutoresofendidosDto->getFechaRegistro() != "") || ($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $tutoresofendidosDto->getFechaRegistro() . "'";
            if (($tutoresofendidosDto->getFechaActualizacion() != "") || ($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getfechaActualizacion() != "") {
            $sql .= "a.fechaActualizacion='" . $tutoresofendidosDto->getFechaActualizacion() . "'";
            if (($tutoresofendidosDto->getCveGenero() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tutoresofendidosDto->getcveGenero() != "") {
            $sql .= "a.cveGenero='" . $tutoresofendidosDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new TutoresofendidosDTO();
                    $tmp[$contador]->setIdTutorOfendido($row["idTutorOfendido"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
                    $tmp[$contador]->setDesTipoTutor(utf8_encode($row["desTipoTutor"]));
                    $tmp[$contador]->setProvDef(utf8_encode($row["ProvDef"]));
                    $tmp[$contador]->setNombre(utf8_encode($row["nombre"]));
                    $tmp[$contador]->setPaterno(utf8_encode($row["paterno"]));
                    $tmp[$contador]->setMaterno(utf8_encode($row["materno"]));
                    $tmp[$contador]->setFechaNacimiento(date_format(date_create($row["fechaNacimiento"]), 'd/m/Y'));
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setDesGenero(utf8_encode($row["desGenero"]));
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
