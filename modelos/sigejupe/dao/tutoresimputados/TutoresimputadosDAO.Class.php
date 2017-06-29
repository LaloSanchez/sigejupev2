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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TutoresimputadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltutoresimputados(";
        if ($tutoresimputadosDto->getidTutorImputado() != "") {
            $sql.="idTutorImputado";
            if (($tutoresimputadosDto->getIdImputadoSolicitud() != "") || ($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveTipoTutor() != "") {
            $sql.="cveTipoTutor";
            if (($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getProvDef() != "") {
            $sql.="ProvDef";
            if (($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getnombre() != "") {
            $sql.="nombre";
            if (($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getpaterno() != "") {
            $sql.="paterno";
            if (($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getmaterno() != "") {
            $sql.="materno";
            if (($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento";
            if (($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getedad() != "") {
            $sql.="edad";
            if (($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getactivo() != "") {
            $sql.="activo";
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveGenero() != "") {
            $sql.="cveGenero";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tutoresimputadosDto->getidTutorImputado() != "") {
            $sql.="'" . $tutoresimputadosDto->getidTutorImputado() . "'";
            if (($tutoresimputadosDto->getIdImputadoSolicitud() != "") || ($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $tutoresimputadosDto->getidImputadoSolicitud() . "'";
            if (($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveTipoTutor() != "") {
            $sql.="'" . $tutoresimputadosDto->getcveTipoTutor() . "'";
            if (($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getProvDef() != "") {
            $sql.="'" . $tutoresimputadosDto->getProvDef() . "'";
            if (($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getnombre() != "") {
            $sql.="'" . $tutoresimputadosDto->getnombre() . "'";
            if (($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getpaterno() != "") {
            $sql.="'" . $tutoresimputadosDto->getpaterno() . "'";
            if (($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getmaterno() != "") {
            $sql.="'" . $tutoresimputadosDto->getmaterno() . "'";
            if (($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaNacimiento() != "") {
            $sql.="'" . $tutoresimputadosDto->getfechaNacimiento() . "'";
            if (($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getedad() != "") {
            $sql.="'" . $tutoresimputadosDto->getedad() . "'";
            if (($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getactivo() != "") {
            $sql.="'" . $tutoresimputadosDto->getactivo() . "'";
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaRegistro() != "") {
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaActualizacion() != "") {
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveGenero() != "") {
            $sql.="'" . $tutoresimputadosDto->getcveGenero() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadosDTO();
            $tmp->setidTutorImputado($this->_proveedor->lastID());
            $tmp = $this->selectTutoresimputados($tmp, "", $this->_proveedor);
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

    public function updateTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresimputados SET ";
        $sql.=" cveTipoTutor='" . $tutoresimputadosDto->getcveTipoTutor() . "'";
        $sql.=" ,ProvDef='" . $tutoresimputadosDto->getProvDef() . "'";
        $sql.=" ,nombre='" . $tutoresimputadosDto->getnombre() . "'";
        $sql.=" ,paterno='" . $tutoresimputadosDto->getpaterno() . "'";
        $sql.=" ,materno='" . $tutoresimputadosDto->getmaterno() . "'";
        $sql.=" ,fechaNacimiento='" . $tutoresimputadosDto->getfechaNacimiento() . "'";
        $sql.=" ,edad='" . $tutoresimputadosDto->getedad() . "'";
        $sql.=" ,cveGenero='" . $tutoresimputadosDto->getcveGenero() . "'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idTutorImputado='" . $tutoresimputadosDto->getidTutorImputado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadosDTO();
            $tmp->setidTutorImputado($tutoresimputadosDto->getidTutorImputado());
            $tmp = $this->selectTutoresimputados($tmp, "", $this->_proveedor);
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

    public function eliminaTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresimputados SET ";
        $sql.=" activo = 'N'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idTutorImputado='" . $tutoresimputadosDto->getidTutorImputado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadosDTO();
            $tmp->setidTutorImputado($tutoresimputadosDto->getidTutorImputado());
            $tmp = $this->selectTutoresimputados($tmp, "", $this->_proveedor);
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

    public function updateTutoresimputadosRSP($tutoresimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresimputados SET ";
        if ($tutoresimputadosDto->getidTutorImputado() != "") {
            $sql.="idTutorImputado='" . $tutoresimputadosDto->getidTutorImputado() . "'";
            if (($tutoresimputadosDto->getIdImputadoSolicitud() != "") || ($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $tutoresimputadosDto->getidImputadoSolicitud() . "'";
            if (($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveTipoTutor() != "") {
            $sql.="cveTipoTutor='" . $tutoresimputadosDto->getcveTipoTutor() . "'";
            if (($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getnombre() != "") {
            $sql.="nombre='" . $tutoresimputadosDto->getnombre() . "'";
            if (($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getpaterno() != "") {
            $sql.="paterno='" . $tutoresimputadosDto->getpaterno() . "'";
            if (($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getmaterno() != "") {
            $sql.="materno='" . $tutoresimputadosDto->getmaterno() . "'";
            if (($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $tutoresimputadosDto->getfechaNacimiento() . "'";
            if (($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getedad() != "") {
            $sql.="edad='" . $tutoresimputadosDto->getedad() . "'";
            if (($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getactivo() != "") {
            $sql.="activo='" . $tutoresimputadosDto->getactivo() . "'";
            if (($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tutoresimputadosDto->getfechaRegistro() . "'";
            if (($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tutoresimputadosDto->getfechaActualizacion() . "'";
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresimputadosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $tutoresimputadosDto->getcveGenero() . "'";
        }
        $sql.=" WHERE idTutorImputado='" . $tutoresimputadosDto->getidTutorImputado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadosDTO();
            $tmp->setidTutorImputado($tutoresimputadosDto->getidTutorImputado());
            $tmp = $this->selectTutoresimputados($tmp, "", $this->_proveedor);
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

    public function deleteTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltutoresimputados  WHERE idTutorImputado='" . $tutoresimputadosDto->getidTutorImputado() . "'";
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

    public function selectTutoresimputados($tutoresimputadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTutorImputado,idImputadoSolicitud,cveTipoTutor,ProvDef,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion,cveGenero FROM tbltutoresimputados ";
        if (($tutoresimputadosDto->getidTutorImputado() != "") || ($tutoresimputadosDto->getidImputadoSolicitud() != "") || ($tutoresimputadosDto->getcveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getnombre() != "") || ($tutoresimputadosDto->getpaterno() != "") || ($tutoresimputadosDto->getmaterno() != "") || ($tutoresimputadosDto->getfechaNacimiento() != "") || ($tutoresimputadosDto->getedad() != "") || ($tutoresimputadosDto->getactivo() != "") || ($tutoresimputadosDto->getfechaRegistro() != "") || ($tutoresimputadosDto->getfechaActualizacion() != "") || ($tutoresimputadosDto->getcveGenero() != "")) {
            $sql.=" WHERE ";
        }
        if ($tutoresimputadosDto->getidTutorImputado() != "") {
            $sql.="idTutorImputado='" . $tutoresimputadosDto->getIdTutorImputado() . "'";
            if (($tutoresimputadosDto->getIdImputadoSolicitud() != "") || ($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $tutoresimputadosDto->getIdImputadoSolicitud() . "'";
            if (($tutoresimputadosDto->getCveTipoTutor() != "") || ($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getcveTipoTutor() != "") {
            $sql.="cveTipoTutor='" . $tutoresimputadosDto->getCveTipoTutor() . "'";
            if (($tutoresimputadosDto->getProvDef() != "") || ($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getProvDef() != "") {
            $sql.="ProvDef='" . $tutoresimputadosDto->getProvDef() . "'";
            if (($tutoresimputadosDto->getNombre() != "") || ($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getnombre() != "") {
            $sql.="nombre='" . $tutoresimputadosDto->getNombre() . "'";
            if (($tutoresimputadosDto->getPaterno() != "") || ($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getpaterno() != "") {
            $sql.="paterno='" . $tutoresimputadosDto->getPaterno() . "'";
            if (($tutoresimputadosDto->getMaterno() != "") || ($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getmaterno() != "") {
            $sql.="materno='" . $tutoresimputadosDto->getMaterno() . "'";
            if (($tutoresimputadosDto->getFechaNacimiento() != "") || ($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $tutoresimputadosDto->getFechaNacimiento() . "'";
            if (($tutoresimputadosDto->getEdad() != "") || ($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getedad() != "") {
            $sql.="edad='" . $tutoresimputadosDto->getEdad() . "'";
            if (($tutoresimputadosDto->getActivo() != "") || ($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getactivo() != "") {
            $sql.="activo='" . $tutoresimputadosDto->getActivo() . "'";
            if (($tutoresimputadosDto->getFechaRegistro() != "") || ($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tutoresimputadosDto->getFechaRegistro() . "'";
            if (($tutoresimputadosDto->getFechaActualizacion() != "") || ($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tutoresimputadosDto->getFechaActualizacion() . "'";
            if (($tutoresimputadosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresimputadosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $tutoresimputadosDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new TutoresimputadosDTO();
                    $tmp[$contador]->setIdTutorImputado($row["idTutorImputado"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
                    $tmp[$contador]->setProvDef($row["ProvDef"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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