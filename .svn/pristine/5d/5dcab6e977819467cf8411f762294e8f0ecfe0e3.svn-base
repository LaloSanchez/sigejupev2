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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class JuzgadoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertJuzgadores($juzgadoresDto, $proveedor = null) {
        $tmp = array();
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbljuzgadores(";
        if ($juzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($juzgadoresDto->getCveUsuario() != "") || ($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveUsuario() != "") {
            $sql.="cveUsuario";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql.="numEmpleado";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->gettitulo() != "") {
            $sql.="titulo";
            if (($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getpaterno() != "") {
            $sql.="paterno";
            if (($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getmaterno() != "") {
            $sql.="materno";
            if (($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnombre() != "") {
            $sql.="nombre";
            if (($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveTipoJuzgador() != "") {
            $sql.="cveTipoJuzgador";
            if (($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getsorteo() != "") {
            $sql.="sorteo";
            if (($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getprogramable() != "") {
            $sql.="programable";
            if (($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($juzgadoresDto->getidJuzgador() != "") {
            $sql.="'" . $juzgadoresDto->getidJuzgador() . "'";
            if (($juzgadoresDto->getCveUsuario() != "") || ($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveUsuario() != "") {
            $sql.="'" . $juzgadoresDto->getcveUsuario() . "'";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql.="'" . $juzgadoresDto->getnumEmpleado() . "'";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->gettitulo() != "") {
            $sql.="'" . $juzgadoresDto->gettitulo() . "'";
            if (($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getpaterno() != "") {
            $sql.="'" . $juzgadoresDto->getpaterno() . "'";
            if (($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getmaterno() != "") {
            $sql.="'" . $juzgadoresDto->getmaterno() . "'";
            if (($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnombre() != "") {
            $sql.="'" . $juzgadoresDto->getnombre() . "'";
            if (($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveTipoJuzgador() != "") {
            $sql.="'" . $juzgadoresDto->getcveTipoJuzgador() . "'";
            if (($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getsorteo() != "") {
            $sql.="'" . $juzgadoresDto->getsorteo() . "'";
            if (($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getprogramable() != "") {
            $sql.="'" . $juzgadoresDto->getprogramable() . "'";
            if (($juzgadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getactivo() != "") {
            $sql.="'" . $juzgadoresDto->getactivo() . "'";
        }
        if ($juzgadoresDto->getfechaRegistro() != "") {
            
        }
        if ($juzgadoresDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadoresDTO();
            $tmp->setidJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectJuzgadores($tmp, "", $this->_proveedor);
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

    public function updateJuzgadores($juzgadoresDto, $proveedor = null) {
        $tmp = array();
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbljuzgadores SET ";
        if ($juzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $juzgadoresDto->getidJuzgador() . "'";
            if (($juzgadoresDto->getCveUsuario() != "") || ($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $juzgadoresDto->getcveUsuario() . "'";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql.="numEmpleado='" . $juzgadoresDto->getnumEmpleado() . "'";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->gettitulo() != "") {
            $sql.="titulo='" . $juzgadoresDto->gettitulo() . "'";
            if (($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getpaterno() != "") {
            $sql.="paterno='" . $juzgadoresDto->getpaterno() . "'";
            if (($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getmaterno() != "") {
            $sql.="materno='" . $juzgadoresDto->getmaterno() . "'";
            if (($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getnombre() != "") {
            $sql.="nombre='" . $juzgadoresDto->getnombre() . "'";
            if (($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getcveTipoJuzgador() != "") {
            $sql.="cveTipoJuzgador='" . $juzgadoresDto->getcveTipoJuzgador() . "'";
            if (($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getsorteo() != "") {
            $sql.="sorteo='" . $juzgadoresDto->getsorteo() . "'";
            if (($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getprogramable() != "") {
            $sql.="programable='" . $juzgadoresDto->getprogramable() . "'";
            if (($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getactivo() != "") {
            $sql.="activo='" . $juzgadoresDto->getactivo() . "'";
            if (($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadoresDto->getfechaRegistro() . "'";
            if (($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadoresDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idJuzgador='" . $juzgadoresDto->getidJuzgador() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadoresDTO();
            $tmp->setidJuzgador($juzgadoresDto->getidJuzgador());
            $tmp = $this->selectJuzgadores($tmp, "", $this->_proveedor);
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

    public function updateBaja($juzgadoresDto, $proveedor = null) {
        $tmp = array();
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbljuzgadores SET activo='N' WHERE idJuzgador='" . $juzgadoresDto->getidJuzgador() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadoresDTO();
            $tmp->setidJuzgador($juzgadoresDto->getidJuzgador());
            if ($juzgadoresDto->getidJuzgador() > 0) {
                $sqlDel = "DELETE FROM tbljuzgadoresjuzgados WHERE idJuzgador = " . $juzgadoresDto->getidJuzgador();
                $this->_proveedor->execute($sqlDel);
            }
            $tmp = $this->selectJuzgadores($tmp, "", $this->_proveedor);
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

    public function deleteJuzgadores($juzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbljuzgadores  WHERE idJuzgador='" . $juzgadoresDto->getidJuzgador() . "'";
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

    public function selectJuzgadores($juzgadoresDto, $orden = "", $proveedor = null, $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " idJuzgador,cveUsuario,numEmpleado,titulo,paterno,materno,nombre,cveTipoJuzgador,cveEspecialidad,sorteo,programable,activo,fechaRegistro,FechaActualizacion ";
        } else {
            $sql.=$fields;
        }
        $sql.=" FROM tbljuzgadores ";
        if (($juzgadoresDto->getCveEspecialidad() != "") || ($juzgadoresDto->getidJuzgador() != "") || ($juzgadoresDto->getcveUsuario() != "") || ($juzgadoresDto->getnumEmpleado() != "") || ($juzgadoresDto->gettitulo() != "") || ($juzgadoresDto->getpaterno() != "") || ($juzgadoresDto->getmaterno() != "") || ($juzgadoresDto->getnombre() != "") || ($juzgadoresDto->getcveTipoJuzgador() != "") || ($juzgadoresDto->getsorteo() != "") || ($juzgadoresDto->getprogramable() != "") || ($juzgadoresDto->getactivo() != "") || ($juzgadoresDto->getfechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($juzgadoresDto->getidJuzgador() != "") {
            $sql .= "idJuzgador='" . $juzgadoresDto->getIdJuzgador() . "'";
            if (($juzgadoresDto->getCveEspecialidad() != "") || ($juzgadoresDto->getCveUsuario() != "") || ($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }

        if ($juzgadoresDto->getCveEspecialidad() != "") {
            $sql .= "cveEspecialidad='" . $juzgadoresDto->getCveEspecialidad() . "'";
            if (($juzgadoresDto->getCveUsuario() != "") || ($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }

        if ($juzgadoresDto->getCveUsuario() != "") {
            $sql .= "cveUsuario='" . $juzgadoresDto->getCveUsuario() . "'";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }

        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql .= "numEmpleado='" . $juzgadoresDto->getNumEmpleado() . "'";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->gettitulo() != "") {
            $sql .= "titulo='" . $juzgadoresDto->getTitulo() . "'";
            if (($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getpaterno() != "") {
            $sql .= "paterno='" . $juzgadoresDto->getPaterno() . "'";
            if (($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getmaterno() != "") {
            $sql .= "materno='" . $juzgadoresDto->getMaterno() . "'";
            if (($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getnombre() != "") {
            $sql .= "nombre='" . $juzgadoresDto->getNombre() . "'";
            if (($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getcveTipoJuzgador() != "") {
            $sql .= "cveTipoJuzgador='" . $juzgadoresDto->getCveTipoJuzgador() . "'";
            if (($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getsorteo() != "") {
            $sql .= "sorteo='" . $juzgadoresDto->getSorteo() . "'";
            if (($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getprogramable() != "") {
            $sql .= "programable='" . $juzgadoresDto->getProgramable() . "'";
            if (($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getactivo() != "") {
            $sql .= "activo='" . $juzgadoresDto->getActivo() . "'";
            if (($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $juzgadoresDto->getFechaRegistro() . "'";
            if (($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getFechaActualizacion() != "") {
            $sql .= "FechaActualizacion='" . $juzgadoresDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
        $inicial = "";
        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new JuzgadoresDTO();
                        $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setNumEmpleado($row["numEmpleado"]);
                        $tmp[$contador]->setTitulo($row["titulo"]);
                        $tmp[$contador]->setPaterno($row["paterno"]);
                        $tmp[$contador]->setMaterno($row["materno"]);
                        $tmp[$contador]->setNombre($row["nombre"]);
                        $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                        $tmp[$contador]->setCveEspecialidad($row["cveEspecialidad"]);
                        $tmp[$contador]->setSorteo($row["sorteo"]);
                        $tmp[$contador]->setProgramable($row["programable"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
                    } else { // HSAY VA 
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = $row[$fieldInfo->name];
                        }
                    }
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

    public function selectJuzgadoresLike($juzgadoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idJuzgador,cveUsuario,numEmpleado,titulo,paterno,materno,nombre,cveTipoJuzgador,sorteo,programable,activo,fechaRegistro,FechaActualizacion FROM tbljuzgadores ";
        if (($juzgadoresDto->getidJuzgador() != "") || ($juzgadoresDto->getcveUsuario() != "") || ($juzgadoresDto->getnumEmpleado() != "") || ($juzgadoresDto->gettitulo() != "") || ($juzgadoresDto->getpaterno() != "") || ($juzgadoresDto->getmaterno() != "") || ($juzgadoresDto->getnombre() != "") || ($juzgadoresDto->getcveTipoJuzgador() != "") || ($juzgadoresDto->getsorteo() != "") || ($juzgadoresDto->getprogramable() != "") || ($juzgadoresDto->getactivo() != "") || ($juzgadoresDto->getfechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
            $sql .= " WHERE activo = 'S' AND (";
        }
        if ($juzgadoresDto->getcveUsuario() != "") {
            $sql .= "cveUsuario like '%" . $juzgadoresDto->getCveUsuario() . "%'";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " OR ";
            }
        }
        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql .= "numEmpleado like '%" . $juzgadoresDto->getNumEmpleado() . "%'";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " OR ";
            }
        }
        if ($juzgadoresDto->getpaterno() != "") {
            $sql .= "paterno like '%" . $juzgadoresDto->getPaterno() . "%'";
            if (($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " OR ";
            }
        }
        if ($juzgadoresDto->getmaterno() != "") {
            $sql .= "materno like '%" . $juzgadoresDto->getMaterno() . "%'";
            if (($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " OR ";
            }
        }
        if ($juzgadoresDto->getnombre() != "") {
            $sql .= "nombre like '%" . $juzgadoresDto->getNombre() . "%'";
            $explodeValor = $juzgadoresDto->getNombre();
            $explodeValor = explode(" ", $explodeValor);
            $like = "";
            foreach ($explodeValor as $key => $value) {
                $like .= "'%" . $value . "%' OR ";
            }
            $subsLike = substr($like, 0, -4);
            $sql .= " OR CONCAT_WS(nombre,paterno,nombre) like " . $subsLike . ")";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setNumEmpleado($row["numEmpleado"]);
                    $tmp[$contador]->setTitulo($row["titulo"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                    $tmp[$contador]->setSorteo($row["sorteo"]);
                    $tmp[$contador]->setProgramable($row["programable"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
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

    public function selectJuzgadoresGenerico($juzgadoresDto, $query, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        //////////////////////////////////////////////////////
        /////////////////LOGICA DE PAGINACION/////////////////
        //////////////////////////////////////////////////////
        $tamanoPagina = 20;
        $sql = "SELECT * FROM tbljuzgadores WHERE activo = 'S'";
        $this->_proveedor->execute($sql);
        $totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);
        $paginaActual = $juzgadoresDto->getPagina();
        $pagina = $paginaActual;
        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $tamanoPagina;
        }
        $totalPaginas = ceil($totalRegistros / $tamanoPagina);
        $consulta = "SELECT * FROM tbljuzgadores j INNER JOIN tbltiposjuzgadores t ON j.cveTipoJuzgador = t.cveTipoJuzgador";
        $consulta .= " WHERE j.activo='S'";
        if ($juzgadoresDto->getidJuzgador() != "") {
            $consulta .= " AND j.idJuzgador =" . $juzgadoresDto->getIdJuzgador();
        }
        $consulta .= " ORDER BY nombre ASC LIMIT " . $inicio . "," . $tamanoPagina;
        $this->_proveedor->execute($consulta);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setNumEmpleado($row["numEmpleado"]);
                    $tmp[$contador]->setTitulo($row["titulo"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                    $tmp[$contador]->setSorteo($row["sorteo"]);
                    $tmp[$contador]->setProgramable($row["programable"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setDesTipoJuzgador($row["desTipoJuzgador"]);
                    $tmp[$contador]->setTotalPaginas($totalPaginas);
                    $tmp[$contador]->setPagina($pagina);
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

    public function selectJuzgadoresGenericoJuzgado($juzgadoresDto, $query, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        //////////////////////////////////////////////////////
        /////////////////LOGICA DE PAGINACION/////////////////
        //////////////////////////////////////////////////////
        $tamanoPagina = 1000;
        $sql = "SELECT *, b.idJuzgador AS idJ FROM tbljuzgadoresjuzgados a INNER JOIN tbljuzgadores b ON a.idJuzgador = b.idJuzgador WHERE b.activo = 'S' AND a.cveJuzgado = " . $juzgadoresDto->getCveJuzgado();
        $this->_proveedor->execute($sql);
        $totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);
        $paginaActual = $juzgadoresDto->getPagina();
        $pagina = $paginaActual;
        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $tamanoPagina;
        }
        $totalPaginas = ceil($totalRegistros / $tamanoPagina);
        $consulta = "SELECT *, b.idJuzgador AS idJ FROM tbljuzgadoresjuzgados a INNER JOIN tbljuzgadores b ON a.idJuzgador = b.idJuzgador INNER JOIN  tbltiposjuzgadores c ON b.cveTipoJuzgador = c.cveTipoJuzgador WHERE b.activo = 'S' AND a.activo = 'S' AND a.cveJuzgado = " . $juzgadoresDto->getCveJuzgado();
        $consulta .= " ORDER BY b.nombre ASC LIMIT " . $inicio . "," . $tamanoPagina;
        $this->_proveedor->execute($consulta);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setIdJuzgador($row["idJ"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setNumEmpleado($row["numEmpleado"]);
                    $tmp[$contador]->setTitulo($row["titulo"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                    $tmp[$contador]->setSorteo($row["sorteo"]);
                    $tmp[$contador]->setProgramable($row["programable"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setDesTipoJuzgador($row["desTipoJuzgador"]);
                    $tmp[$contador]->setTotalPaginas($totalPaginas);
                    $tmp[$contador]->setPagina($pagina);
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

    public function selectJuzgados($juzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $consulta = "SELECT b.cveJuzgado, b.desJuzgado FROM tbljuzgadoresjuzgados a INNER JOIN tbljuzgados b ON a.cveJuzgado = b.cveJuzgado WHERE idJuzgador = " . $juzgadoresDto->getIdJuzgador() . " AND a.activo='S'";
        $this->_proveedor->execute($consulta);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
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

    public function selectJuzgadoreCveUsario($juzgadoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idJuzgador,cveUsuario,numEmpleado,titulo,paterno,materno,nombre,cveTipoJuzgador,sorteo,programable,activo,fechaRegistro,FechaActualizacion FROM tbljuzgadores ";
        if (($juzgadoresDto->getidJuzgador() != "") || ($juzgadoresDto->getcveUsuario() != "") || ($juzgadoresDto->getnumEmpleado() != "") || ($juzgadoresDto->gettitulo() != "") || ($juzgadoresDto->getpaterno() != "") || ($juzgadoresDto->getmaterno() != "") || ($juzgadoresDto->getnombre() != "") || ($juzgadoresDto->getcveTipoJuzgador() != "") || ($juzgadoresDto->getsorteo() != "") || ($juzgadoresDto->getprogramable() != "") || ($juzgadoresDto->getactivo() != "") || ($juzgadoresDto->getfechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($juzgadoresDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $juzgadoresDto->getCveUsuario() . "'";
            if (($juzgadoresDto->getNumEmpleado() != "") || ($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadoresDto->getnumEmpleado() != "") {
            $sql .= "numEmpleado='" . $juzgadoresDto->getNumEmpleado() . "'";
            if (($juzgadoresDto->getTitulo() != "") || ($juzgadoresDto->getPaterno() != "") || ($juzgadoresDto->getMaterno() != "") || ($juzgadoresDto->getNombre() != "") || ($juzgadoresDto->getCveTipoJuzgador() != "") || ($juzgadoresDto->getSorteo() != "") || ($juzgadoresDto->getProgramable() != "") || ($juzgadoresDto->getActivo() != "") || ($juzgadoresDto->getFechaRegistro() != "") || ($juzgadoresDto->getFechaActualizacion() != "")) {
                
            }
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
        $sql .=" AND activo = 'S'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setNumEmpleado($row["numEmpleado"]);
                    $tmp[$contador]->setTitulo($row["titulo"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                    $tmp[$contador]->setSorteo($row["sorteo"]);
                    $tmp[$contador]->setProgramable($row["programable"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
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

?>