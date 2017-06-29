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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class OfendidosmuestrasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOfendidosmuestras($ofendidosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblofendidosmuestras(";
        if ($ofendidosmuestrasDto->getIdOfendidoMuestra() != "") {
            $sql.="idOfendidoMuestra";
            if (($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") || ($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra";
            if (($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombre() != "") {
            $sql.="nombre";
            if (($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getPaterno() != "") {
            $sql.="paterno";
            if (($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getMaterno() != "") {
            $sql.="materno";
            if (($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral";
            if (($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio";
            if (($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getTelefono() != "") {
            $sql.="telefono";
            if (($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getEmail() != "") {
            $sql.="email";
            if (($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveOrigen() != "") {
            $sql.="cveOrigen";
            if (($ofendidosmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ofendidosmuestrasDto->getIdOfendidoMuestra() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getIdOfendidoMuestra() . "'";
            if (($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") || ($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombre() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getNombre() . "'";
            if (($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getPaterno() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getPaterno() . "'";
            if (($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getMaterno() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getMaterno() . "'";
            if (($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getCveTipoPersona() . "'";
            if (($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombreMoral() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getNombreMoral() . "'";
            if (($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveGenero() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getCveGenero() . "'";
            if (($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getDomicilio() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getDomicilio() . "'";
            if (($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getTelefono() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getTelefono() . "'";
            if (($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getEmail() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getEmail() . "'";
            if (($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveOrigen() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getCveOrigen() . "'";
            if (($ofendidosmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getActivo() != "") {
            $sql.="'" . $ofendidosmuestrasDto->getActivo() . "'";
        }
        if ($ofendidosmuestrasDto->getFechaRegistro() != "") {
            
        }
        if ($ofendidosmuestrasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidosmuestrasDTO();
            $tmp->setidOfendidoMuestra($this->_proveedor->lastID());
            $tmp = $this->selectOfendidosmuestras($tmp, "", $this->_proveedor);
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

    public function updateOfendidosmuestras($ofendidosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofendidosmuestras SET ";
        if ($ofendidosmuestrasDto->getIdOfendidoMuestra() != "") {
            $sql.="idOfendidoMuestra='" . $ofendidosmuestrasDto->getIdOfendidoMuestra() . "'";
            if (($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") || ($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $ofendidosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombre() != "") {
            $sql.="nombre='" . $ofendidosmuestrasDto->getNombre() . "'";
            if (($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getPaterno() != "") {
            $sql.="paterno='" . $ofendidosmuestrasDto->getPaterno() . "'";
            if (($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getMaterno() != "") {
            $sql.="materno='" . $ofendidosmuestrasDto->getMaterno() . "'";
            if (($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidosmuestrasDto->getCveTipoPersona() . "'";
            if (($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidosmuestrasDto->getNombreMoral() . "'";
            if (($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $ofendidosmuestrasDto->getCveGenero() . "'";
            if (($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio='" . $ofendidosmuestrasDto->getDomicilio() . "'";
            if (($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getTelefono() != "") {
            $sql.="telefono='" . $ofendidosmuestrasDto->getTelefono() . "'";
            if (($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getEmail() != "") {
            $sql.="email='" . $ofendidosmuestrasDto->getEmail() . "'";
            if (($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "") || ($ofendidosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getCveOrigen() != "") {
            $sql.="cveOrigen='" . $ofendidosmuestrasDto->getCveOrigen() . "'";
            if (($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $ofendidosmuestrasDto->getActivo() . "'";
            if (($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidosmuestrasDto->getFechaRegistro() . "'";
            if (($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidosmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidosmuestrasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idOfendidoMuestra='" . $ofendidosmuestrasDto->getIdOfendidoMuestra() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidosmuestrasDTO();
            $tmp->setidOfendidoMuestra($ofendidosmuestrasDto->getIdOfendidoMuestra());
            $tmp = $this->selectOfendidosmuestras($tmp, "", $this->_proveedor);
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

    public function deleteOfendidosmuestras($ofendidosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblofendidosmuestras  WHERE idOfendidoMuestra='" . $ofendidosmuestrasDto->getIdOfendidoMuestra() . "'";
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

    public function selectOfendidosmuestras($ofendidosmuestrasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idOfendidoMuestra,idSolicitudMuestra,nombre,paterno,materno,cveTipoPersona,nombreMoral,cveGenero,domicilio,telefono,email,activo,fechaRegistro,fechaActualizacion FROM tblofendidosmuestras ";
        if (($ofendidosmuestrasDto->getIdOfendidoMuestra() != "") || ($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") || ($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofendidosmuestrasDto->getIdOfendidoMuestra() != "") {
            $sql.="idOfendidoMuestra='" . $ofendidosmuestrasDto->getIdOfendidoMuestra() . "'";
            if (($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") || ($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $ofendidosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($ofendidosmuestrasDto->getNombre() != "") || ($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getNombre() != "") {
            $sql.="nombre='" . $ofendidosmuestrasDto->getNombre() . "'";
            if (($ofendidosmuestrasDto->getPaterno() != "") || ($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getPaterno() != "") {
            $sql.="paterno='" . $ofendidosmuestrasDto->getPaterno() . "'";
            if (($ofendidosmuestrasDto->getMaterno() != "") || ($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getMaterno() != "") {
            $sql.="materno='" . $ofendidosmuestrasDto->getMaterno() . "'";
            if (($ofendidosmuestrasDto->getCveTipoPersona() != "") || ($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidosmuestrasDto->getCveTipoPersona() . "'";
            if (($ofendidosmuestrasDto->getNombreMoral() != "") || ($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidosmuestrasDto->getNombreMoral() . "'";
            if (($ofendidosmuestrasDto->getCveGenero() != "") || ($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $ofendidosmuestrasDto->getCveGenero() . "'";
            if (($ofendidosmuestrasDto->getDomicilio() != "") || ($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio='" . $ofendidosmuestrasDto->getDomicilio() . "'";
            if (($ofendidosmuestrasDto->getTelefono() != "") || ($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getTelefono() != "") {
            $sql.="telefono='" . $ofendidosmuestrasDto->getTelefono() . "'";
            if (($ofendidosmuestrasDto->getEmail() != "") || ($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getEmail() != "") {
            $sql.="email='" . $ofendidosmuestrasDto->getEmail() . "'";
            if (($ofendidosmuestrasDto->getActivo() != "") || ($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $ofendidosmuestrasDto->getActivo() . "'";
            if (($ofendidosmuestrasDto->getFechaRegistro() != "") || ($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidosmuestrasDto->getFechaRegistro() . "'";
            if (($ofendidosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidosmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidosmuestrasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new OfendidosmuestrasDTO();
                    $tmp[$contador]->setIdOfendidoMuestra($row["idOfendidoMuestra"]);
                    $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
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