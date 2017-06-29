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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ApelantescarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertApelantescarpetas($apelantescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblapelantescarpetas(";
        if ($apelantescarpetasDto->getIdApelanteCarpeta() != "") {
            $sql.="idApelanteCarpeta";
            if (($apelantescarpetasDto->getIdCarpetaJudicial() != "") || ($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getNombre() != "") {
            $sql.="nombre";
            if (($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getPaterno() != "") {
            $sql.="paterno";
            if (($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getMaterno() != "") {
            $sql.="materno";
            if (($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral";
            if (($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoApelante() != "") {
            $sql.="cveTipoApelante";
            if (($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getDomicilio() != "") {
            $sql.="domicilio";
            if (($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getEmail() != "") {
            $sql.="email";
            if (($apelantescarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($apelantescarpetasDto->getIdApelanteCarpeta() != "") {
            $sql.="'" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
            if (($apelantescarpetasDto->getIdCarpetaJudicial() != "") || ($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="'" . $apelantescarpetasDto->getIdCarpetaJudicial() . "'";
            if (($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getNombre() != "") {
            $sql.="'" . $apelantescarpetasDto->getNombre() . "'";
            if (($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getPaterno() != "") {
            $sql.="'" . $apelantescarpetasDto->getPaterno() . "'";
            if (($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getMaterno() != "") {
            $sql.="'" . $apelantescarpetasDto->getMaterno() . "'";
            if (($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveGenero() != "") {
            $sql.="'" . $apelantescarpetasDto->getCveGenero() . "'";
            if (($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoPersona() != "") {
            $sql.="'" . $apelantescarpetasDto->getCveTipoPersona() . "'";
            if (($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getNombreMoral() != "") {
            $sql.="'" . $apelantescarpetasDto->getNombreMoral() . "'";
            if (($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoApelante() != "") {
            $sql.="'" . $apelantescarpetasDto->getCveTipoApelante() . "'";
            if (($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")||($apelantescarpetasDto->getDomicilio() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getDomicilio() != "") {
            $sql.="'" . $apelantescarpetasDto->getDomicilio() . "'";
            if (($apelantescarpetasDto->getActivo() != "")||($apelantescarpetasDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getEmail() != "") {
            $sql.="'" . $apelantescarpetasDto->getEmail() . "'";
            if (($apelantescarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getActivo() != "") {
            $sql.="'" . $apelantescarpetasDto->getActivo() . "'";
        }
        if ($apelantescarpetasDto->getFechaRegistro() != "") {
            
        }
        if ($apelantescarpetasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ApelantescarpetasDTO();
            $tmp->setidApelanteCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectApelantescarpetas($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
//        echo $sql;
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updateApelantescarpetas($apelantescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblapelantescarpetas SET ";
        if ($apelantescarpetasDto->getIdApelanteCarpeta() != "") {
            $sql.="idApelanteCarpeta='" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
            if (($apelantescarpetasDto->getIdCarpetaJudicial() != "") || ($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $apelantescarpetasDto->getIdCarpetaJudicial() . "'";
            if (($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        
        if ($apelantescarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $apelantescarpetasDto->getNombre() . "'";
            if (($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $apelantescarpetasDto->getPaterno() . "'";
            if (($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $apelantescarpetasDto->getMaterno() . "'";
            if (($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $apelantescarpetasDto->getCveGenero() . "'";
            if (($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $apelantescarpetasDto->getCveTipoPersona() . "'";
            if (($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $apelantescarpetasDto->getNombreMoral() . "'";
            if (($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getCveTipoApelante() != "") {
            $sql.="cveTipoApelante='" . $apelantescarpetasDto->getCveTipoApelante() . "'";
            if (($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getActivo() != "") {
            $sql.="activo='" . $apelantescarpetasDto->getActivo() . "'";
            if (($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "")|| ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $apelantescarpetasDto->getFechaRegistro() . "'";
            if (($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() !="")|| ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getDomicilio() != "") {
            $sql.="domicilio='" . $apelantescarpetasDto->getDomicilio() . "'";
            if (($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getEmail() !="")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getEmail() != "") {
            $sql.="email='" . $apelantescarpetasDto->getEmail() . "'";
            if (($apelantescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($apelantescarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $apelantescarpetasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idApelanteCarpeta='" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ApelantescarpetasDTO();
            $tmp->setidApelanteCarpeta($apelantescarpetasDto->getIdApelanteCarpeta());
            $tmp = $this->selectApelantescarpetas($tmp, "", $this->_proveedor);
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

    public function deleteApelantescarpetas($apelantescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblapelantescarpetas  WHERE idApelanteCarpeta='" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
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

    public function selectApelantescarpetas($apelantescarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idApelanteCarpeta,idCarpetaJudicial,nombre,paterno,materno,cveGenero,cveTipoPersona,nombreMoral,cveTipoApelante,activo,fechaRegistro,fechaActualizacion,domicilio,email FROM tblapelantescarpetas ";
        if (($apelantescarpetasDto->getIdApelanteCarpeta() != "") || ($apelantescarpetasDto->getIdCarpetaJudicial() != "") || ($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
            $sql.=" WHERE ";
        }
        if ($apelantescarpetasDto->getIdApelanteCarpeta() != "") {
            $sql.="idApelanteCarpeta='" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
            if (($apelantescarpetasDto->getIdCarpetaJudicial() != "") || ($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $apelantescarpetasDto->getIdCarpetaJudicial() . "'";
            if (($apelantescarpetasDto->getNombre() != "") || ($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $apelantescarpetasDto->getNombre() . "'";
            if (($apelantescarpetasDto->getPaterno() != "") || ($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $apelantescarpetasDto->getPaterno() . "'";
            if (($apelantescarpetasDto->getMaterno() != "") || ($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $apelantescarpetasDto->getMaterno() . "'";
            if (($apelantescarpetasDto->getCveGenero() != "") || ($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $apelantescarpetasDto->getCveGenero() . "'";
            if (($apelantescarpetasDto->getCveTipoPersona() != "") || ($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $apelantescarpetasDto->getCveTipoPersona() . "'";
            if (($apelantescarpetasDto->getNombreMoral() != "") || ($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $apelantescarpetasDto->getNombreMoral() . "'";
            if (($apelantescarpetasDto->getCveTipoApelante() != "") || ($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getCveTipoApelante() != "") {
            $sql.="cveTipoApelante='" . $apelantescarpetasDto->getCveTipoApelante() . "'";
            if (($apelantescarpetasDto->getActivo() != "") || ($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getActivo() != "") {
            $sql.="activo='" . $apelantescarpetasDto->getActivo() . "'";
            if (($apelantescarpetasDto->getFechaRegistro() != "") || ($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $apelantescarpetasDto->getFechaRegistro() . "'";
            if (($apelantescarpetasDto->getFechaActualizacion() != "") || ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($apelantescarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $apelantescarpetasDto->getFechaActualizacion() . "'";
            if ( ($apelantescarpetasDto->getDomicilio() != "") || ($apelantescarpetasDto->getEmail() != "") ) {
                $sql .= " AND ";
            }
        }
        if ( $apelantescarpetasDto->getDomicilio() != "" ) {
            $sql .= " domicilio='" . $apelantescarpetasDto->getDomicilio() . "'";
            if ( $apelantescarpetasDto->getEmail() != "" ) {
                $sql .= " AND ";
            }
        }
        if ( $apelantescarpetasDto->getEmail() != "" ) {
            $sql .= "email='" . $apelantescarpetasDto->getEmail() . "'";
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
                    $tmp[$contador] = new ApelantescarpetasDTO();
                    $tmp[$contador]->setIdApelanteCarpeta($row["idApelanteCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setCveTipoApelante($row["cveTipoApelante"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setEmail($row["email"]);
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
    
    public function modificarApelanteCarpeta($apelantescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblapelantescarpetas SET ";
        $sql.=" nombre='" . $apelantescarpetasDto->getNombre() . "'";
        $sql.=" ,paterno='" . $apelantescarpetasDto->getPaterno() . "'";
        $sql.=" ,materno='" . $apelantescarpetasDto->getMaterno() . "'";
        $sql.=" ,cveGenero='" . $apelantescarpetasDto->getCveGenero() . "'";
        $sql.=" ,cveTipoPersona='" . $apelantescarpetasDto->getCveTipoPersona() . "'";
        $sql.=" ,nombreMoral='" . $apelantescarpetasDto->getNombreMoral() . "'";
        $sql.=" ,cveTipoApelante='" . $apelantescarpetasDto->getCveTipoApelante() . "'";
        $sql.=" ,domicilio='" . $apelantescarpetasDto->getDomicilio() . "'";
        $sql.=" ,email='" . $apelantescarpetasDto->getEmail() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idApelanteCarpeta='" . $apelantescarpetasDto->getIdApelanteCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ApelantescarpetasDTO();
            $tmp->setIdApelanteCarpeta($apelantescarpetasDto->getIdApelanteCarpeta());
            $tmp = $this->selectApelantescarpetas($tmp, "", $this->_proveedor);
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