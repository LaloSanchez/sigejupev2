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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadoscateos/ImputadoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadoscateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadoscateos($imputadoscateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadoscateos(";
        if ($imputadoscateosDto->getidImputadoCateo() != "") {
            $sql.="idImputadoCateo";
            if (($imputadoscateosDto->getIdSolicitudCateo() != "") || ($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo";
            if (($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getactivo() != "") {
            $sql.="activo";
            if (($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombre() != "") {
            $sql.="nombre";
            if (($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getpaterno() != "") {
            $sql.="paterno";
            if (($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getmaterno() != "") {
            $sql.="materno";
            if (($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getalias() != "") {
            $sql.="alias";
            if (($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveGenero() != "") {
            $sql.="cveGenero";
            if (($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdetenido() != "") {
            $sql.="detenido";
            if (($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombreMoral() != "") {
            $sql.="nombreMoral";
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdomicilio() != "") {
            $sql.="domicilio";
            if (($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->gettelefono() != "") {
            $sql.="telefono";
            if (($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getemail() != "") {
            $sql.="email";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadoscateosDto->getidImputadoCateo() != "") {
            $sql.="'" . $imputadoscateosDto->getidImputadoCateo() . "'";
            if (($imputadoscateosDto->getIdSolicitudCateo() != "") || ($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getidSolicitudCateo() != "") {
            $sql.="'" . $imputadoscateosDto->getidSolicitudCateo() . "'";
            if (($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getactivo() != "") {
            $sql.="'" . $imputadoscateosDto->getactivo() . "'";
            if (($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombre() != "") {
            $sql.="'" . $imputadoscateosDto->getnombre() . "'";
            if (($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getpaterno() != "") {
            $sql.="'" . $imputadoscateosDto->getpaterno() . "'";
            if (($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getmaterno() != "") {
            $sql.="'" . $imputadoscateosDto->getmaterno() . "'";
            if (($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getalias() != "") {
            $sql.="'" . $imputadoscateosDto->getalias() . "'";
            if (($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveGenero() != "") {
            $sql.="'" . $imputadoscateosDto->getcveGenero() . "'";
            if (($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdetenido() != "") {
            $sql.="'" . $imputadoscateosDto->getdetenido() . "'";
            if (($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveTipoPersona() != "") {
            $sql.="'" . $imputadoscateosDto->getcveTipoPersona() . "'";
            if (($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombreMoral() != "") {
            $sql.="'" . $imputadoscateosDto->getnombreMoral() . "'";
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getfechaRegistro() != "") {
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getfechaActualizacion() != "") {
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdomicilio() != "") {
            $sql.="'" . $imputadoscateosDto->getdomicilio() . "'";
            if (($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->gettelefono() != "") {
            $sql.="'" . $imputadoscateosDto->gettelefono() . "'";
            if (($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getemail() != "") {
            $sql.="'" . $imputadoscateosDto->getemail() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscateosDTO();
            $tmp->setidImputadoCateo($this->_proveedor->lastID());
            $tmp = $this->selectImputadoscateos($tmp, "", $this->_proveedor);
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

    public function updateImputadoscateos($imputadoscateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadoscateos SET ";
        if ($imputadoscateosDto->getidImputadoCateo() != "") {
            $sql.="idImputadoCateo='" . $imputadoscateosDto->getidImputadoCateo() . "'";
            if (($imputadoscateosDto->getIdSolicitudCateo() != "") || ($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $imputadoscateosDto->getidSolicitudCateo() . "'";
            if (($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getactivo() != "") {
            $sql.="activo='" . $imputadoscateosDto->getactivo() . "'";
            if (($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombre() != "") {
            $sql.="nombre='" . $imputadoscateosDto->getnombre() . "'";
            if (($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getpaterno() != "") {
            $sql.="paterno='" . $imputadoscateosDto->getpaterno() . "'";
            if (($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getmaterno() != "") {
            $sql.="materno='" . $imputadoscateosDto->getmaterno() . "'";
            if (($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getalias() != "") {
            $sql.="alias='" . $imputadoscateosDto->getalias() . "'";
            if (($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $imputadoscateosDto->getcveGenero() . "'";
            if (($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdetenido() != "") {
            $sql.="detenido='" . $imputadoscateosDto->getdetenido() . "'";
            if (($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadoscateosDto->getcveTipoPersona() . "'";
            if (($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadoscateosDto->getnombreMoral() . "'";
            if (($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscateosDto->getfechaRegistro() . "'";
            if (($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscateosDto->getfechaActualizacion() . "'";
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getdomicilio() != "") {
            $sql.="domicilio='" . $imputadoscateosDto->getdomicilio() . "'";
            if (($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->gettelefono() != "") {
            $sql.="telefono='" . $imputadoscateosDto->gettelefono() . "'";
            if (($imputadoscateosDto->getEmail() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscateosDto->getemail() != "") {
            $sql.="email='" . $imputadoscateosDto->getemail() . "'";
        }
        $sql.=" WHERE idImputadoCateo='" . $imputadoscateosDto->getidImputadoCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscateosDTO();
            $tmp->setidImputadoCateo($imputadoscateosDto->getidImputadoCateo());
            $tmp = $this->selectImputadoscateos($tmp, "", $this->_proveedor);
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

    public function deleteImputadoscateos($imputadoscateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadoscateos  WHERE idImputadoCateo='" . $imputadoscateosDto->getidImputadoCateo() . "'";
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

    public function selectImputadoscateos($imputadoscateosDto, $orden = "", $proveedor = null, $param = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT";
        if ($param == null || isset($param["fields"]) == "") {
            $sql .= " idImputadoCateo,idSolicitudCateo,activo,nombre,paterno,materno,alias,cveGenero,detenido,cveTipoPersona,nombreMoral,fechaRegistro,fechaActualizacion,domicilio,telefono,email ";
        } else {
            $sql .= $param["fields"];
        }

        $sql.= " FROM tblimputadoscateos ";

        if (($imputadoscateosDto->getidImputadoCateo() != "") || ($imputadoscateosDto->getidSolicitudCateo() != "") || ($imputadoscateosDto->getactivo() != "") || ($imputadoscateosDto->getnombre() != "") || ($imputadoscateosDto->getpaterno() != "") || ($imputadoscateosDto->getmaterno() != "") || ($imputadoscateosDto->getalias() != "") || ($imputadoscateosDto->getcveGenero() != "") || ($imputadoscateosDto->getdetenido() != "") || ($imputadoscateosDto->getcveTipoPersona() != "") || ($imputadoscateosDto->getnombreMoral() != "") || ($imputadoscateosDto->getfechaRegistro() != "") || ($imputadoscateosDto->getfechaActualizacion() != "") || ($imputadoscateosDto->getdomicilio() != "") || ($imputadoscateosDto->gettelefono() != "") || ($imputadoscateosDto->getemail() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadoscateosDto->getidImputadoCateo() != "") {
            $sql.="idImputadoCateo='" . $imputadoscateosDto->getIdImputadoCateo() . "'";
            if (($imputadoscateosDto->getIdSolicitudCateo() != "") || ($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $imputadoscateosDto->getIdSolicitudCateo() . "'";
            if (($imputadoscateosDto->getActivo() != "") || ($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getactivo() != "") {
            $sql.="activo='" . $imputadoscateosDto->getActivo() . "'";
            if (($imputadoscateosDto->getNombre() != "") || ($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getnombre() != "") {
            $sql.="nombre='" . $imputadoscateosDto->getNombre() . "'";
            if (($imputadoscateosDto->getPaterno() != "") || ($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getpaterno() != "") {
            $sql.="paterno='" . $imputadoscateosDto->getPaterno() . "'";
            if (($imputadoscateosDto->getMaterno() != "") || ($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getmaterno() != "") {
            $sql.="materno='" . $imputadoscateosDto->getMaterno() . "'";
            if (($imputadoscateosDto->getAlias() != "") || ($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getalias() != "") {
            $sql.="alias='" . $imputadoscateosDto->getAlias() . "'";
            if (($imputadoscateosDto->getCveGenero() != "") || ($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $imputadoscateosDto->getCveGenero() . "'";
            if (($imputadoscateosDto->getDetenido() != "") || ($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getdetenido() != "") {
            $sql.="detenido='" . $imputadoscateosDto->getDetenido() . "'";
            if (($imputadoscateosDto->getCveTipoPersona() != "") || ($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadoscateosDto->getCveTipoPersona() . "'";
            if (($imputadoscateosDto->getNombreMoral() != "") || ($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadoscateosDto->getNombreMoral() . "'";
            if (($imputadoscateosDto->getFechaRegistro() != "") || ($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscateosDto->getFechaRegistro() . "'";
            if (($imputadoscateosDto->getFechaActualizacion() != "") || ($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscateosDto->getFechaActualizacion() . "'";
            if (($imputadoscateosDto->getDomicilio() != "") || ($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getdomicilio() != "") {
            $sql.="domicilio='" . $imputadoscateosDto->getDomicilio() . "'";
            if (($imputadoscateosDto->getTelefono() != "") || ($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->gettelefono() != "") {
            $sql.="telefono='" . $imputadoscateosDto->getTelefono() . "'";
            if (($imputadoscateosDto->getEmail() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscateosDto->getemail() != "") {
            $sql.="email='" . $imputadoscateosDto->getEmail() . "'";
        }

        if ($param != null && count($param) > 1) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * ($param["cantxPag"]);
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . ($param["cantxPag"]); //+1
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if (isset($param["fields"]) == "") {
                        $tmp[$contador] = new ImputadoscateosDTO();
                        $tmp[$contador]->setIdImputadoCateo($row["idImputadoCateo"]);
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setNombre($row["nombre"]);
                        $tmp[$contador]->setPaterno($row["paterno"]);
                        $tmp[$contador]->setMaterno($row["materno"]);
                        $tmp[$contador]->setAlias($row["alias"]);
                        $tmp[$contador]->setCveGenero($row["cveGenero"]);
                        $tmp[$contador]->setDetenido($row["detenido"]);
                        $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                        $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setDomicilio($row["domicilio"]);
                        $tmp[$contador]->setTelefono($row["telefono"]);
                        $tmp[$contador]->setEmail($row["email"]);
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                        }
                    }
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