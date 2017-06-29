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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadosmuestrasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadosmuestras($imputadosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadosmuestras(";
        if ($imputadosmuestrasDto->getIdImputadoMuestra() != "") {
            $sql.="idImputadoMuestra";
            if (($imputadosmuestrasDto->getIdSolicitudMuestra() != "") || ($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra";
            if (($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombre() != "") {
            $sql.="nombre";
            if (($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getPaterno() != "") {
            $sql.="paterno";
            if (($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getMaterno() != "") {
            $sql.="materno";
            if (($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getAlias() != "") {
            $sql.="alias";
            if (($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDetenido() != "") {
            $sql.="detenido";
            if (($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral";
            if (($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio";
            if (($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getTelefono() != "") {
            $sql.="telefono";
            if (($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getEmail() != "") {
            $sql.="email";
            if (($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }

        if ($imputadosmuestrasDto->getActivo() != "") {
            $sql.="activo";
            if (($imputadosmuestrasDto->getCveOrigen() != "")) {
                $sql.=",";
            }
        }

        if ($imputadosmuestrasDto->getCveOrigen() != "") {
            $sql.="cveOrigen";
        }

        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadosmuestrasDto->getIdImputadoMuestra() != "") {
            $sql.="'" . $imputadosmuestrasDto->getIdImputadoMuestra() . "'";
            if (($imputadosmuestrasDto->getIdSolicitudMuestra() != "") || ($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="'" . $imputadosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombre() != "") {
            $sql.="'" . $imputadosmuestrasDto->getNombre() . "'";
            if (($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getPaterno() != "") {
            $sql.="'" . $imputadosmuestrasDto->getPaterno() . "'";
            if (($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getMaterno() != "") {
            $sql.="'" . $imputadosmuestrasDto->getMaterno() . "'";
            if (($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getAlias() != "") {
            $sql.="'" . $imputadosmuestrasDto->getAlias() . "'";
            if (($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveGenero() != "") {
            $sql.="'" . $imputadosmuestrasDto->getCveGenero() . "'";
            if (($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDetenido() != "") {
            $sql.="'" . $imputadosmuestrasDto->getDetenido() . "'";
            if (($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="'" . $imputadosmuestrasDto->getCveTipoPersona() . "'";
            if (($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombreMoral() != "") {
            $sql.="'" . $imputadosmuestrasDto->getNombreMoral() . "'";
            if (($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDomicilio() != "") {
            $sql.="'" . $imputadosmuestrasDto->getDomicilio() . "'";
            if (($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getTelefono() != "") {
            $sql.="'" . $imputadosmuestrasDto->getTelefono() . "'";
            if (($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getEmail() != "") {
            $sql.="'" . $imputadosmuestrasDto->getEmail() . "'";
            if (($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getActivo() != "") {
            $sql.="'" . $imputadosmuestrasDto->getActivo() . "'";
            if (($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveOrigen() != "") {
            $sql.="'" . $imputadosmuestrasDto->getCveOrigen() . "'";
        }
        if ($imputadosmuestrasDto->getFechaRegistro() != "") {
            
        }
        if ($imputadosmuestrasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosmuestrasDTO();
            $tmp->setIdImputadoMuestra($this->_proveedor->lastID());
            $tmp = $this->selectImputadosmuestras($tmp, "", $this->_proveedor);
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

    public function updateImputadosmuestras($imputadosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadosmuestras SET ";
        if ($imputadosmuestrasDto->getIdImputadoMuestra() != "") {
            $sql.="idImputadoMuestra='" . $imputadosmuestrasDto->getIdImputadoMuestra() . "'";
            if (($imputadosmuestrasDto->getIdSolicitudMuestra() != "") || ($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $imputadosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombre() != "") {
            $sql.="nombre='" . $imputadosmuestrasDto->getNombre() . "'";
            if (($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadosmuestrasDto->getPaterno() . "'";
            if (($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getMaterno() != "") {
            $sql.="materno='" . $imputadosmuestrasDto->getMaterno() . "'";
            if (($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getAlias() != "") {
            $sql.="alias='" . $imputadosmuestrasDto->getAlias() . "'";
            if (($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadosmuestrasDto->getCveGenero() . "'";
            if (($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDetenido() != "") {
            $sql.="detenido='" . $imputadosmuestrasDto->getDetenido() . "'";
            if (($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadosmuestrasDto->getCveTipoPersona() . "'";
            if (($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadosmuestrasDto->getNombreMoral() . "'";
            if (($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio='" . $imputadosmuestrasDto->getDomicilio() . "'";
            if (($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getTelefono() != "") {
            $sql.="telefono='" . $imputadosmuestrasDto->getTelefono() . "'";
            if (($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getEmail() != "") {
            $sql.="email='" . $imputadosmuestrasDto->getEmail() . "'";
            if (($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $imputadosmuestrasDto->getActivo() . "'";
            if (($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "") || ($imputadosmuestrasDto->getCveOrigen())) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getCveOrigen() != "") {
            $sql.="cveOrigen='" . $imputadosmuestrasDto->getCveOrigen() . "'";
            if (($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosmuestrasDto->getFechaRegistro() . "'";
            if (($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosmuestrasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE ='" . $imputadosmuestrasDto->get() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosmuestrasDTO();
            $tmp->set($imputadosmuestrasDto->get());
            $tmp = $this->selectImputadosmuestras($tmp, "", $this->_proveedor);
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

    public function deleteImputadosmuestras($imputadosmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadosmuestras  WHERE ='" . $imputadosmuestrasDto->get() . "'";
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

    public function selectImputadosmuestras($imputadosmuestrasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImputadoMuestra,idSolicitudMuestra,nombre,paterno,materno,alias,cveGenero,detenido,cveTipoPersona,nombreMoral,domicilio,telefono,email,activo,fechaRegistro,fechaActualizacion FROM tblimputadosmuestras ";
        if (($imputadosmuestrasDto->getIdImputadoMuestra() != "") || ($imputadosmuestrasDto->getIdSolicitudMuestra() != "") || ($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadosmuestrasDto->getIdImputadoMuestra() != "") {
            $sql.="idImputadoMuestra='" . $imputadosmuestrasDto->getIdImputadoMuestra() . "'";
            if (($imputadosmuestrasDto->getIdSolicitudMuestra() != "") || ($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $imputadosmuestrasDto->getIdSolicitudMuestra() . "'";
            if (($imputadosmuestrasDto->getNombre() != "") || ($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getNombre() != "") {
            $sql.="nombre='" . $imputadosmuestrasDto->getNombre() . "'";
            if (($imputadosmuestrasDto->getPaterno() != "") || ($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadosmuestrasDto->getPaterno() . "'";
            if (($imputadosmuestrasDto->getMaterno() != "") || ($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getMaterno() != "") {
            $sql.="materno='" . $imputadosmuestrasDto->getMaterno() . "'";
            if (($imputadosmuestrasDto->getAlias() != "") || ($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getAlias() != "") {
            $sql.="alias='" . $imputadosmuestrasDto->getAlias() . "'";
            if (($imputadosmuestrasDto->getCveGenero() != "") || ($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadosmuestrasDto->getCveGenero() . "'";
            if (($imputadosmuestrasDto->getDetenido() != "") || ($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getDetenido() != "") {
            $sql.="detenido='" . $imputadosmuestrasDto->getDetenido() . "'";
            if (($imputadosmuestrasDto->getCveTipoPersona() != "") || ($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadosmuestrasDto->getCveTipoPersona() . "'";
            if (($imputadosmuestrasDto->getNombreMoral() != "") || ($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadosmuestrasDto->getNombreMoral() . "'";
            if (($imputadosmuestrasDto->getDomicilio() != "") || ($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getDomicilio() != "") {
            $sql.="domicilio='" . $imputadosmuestrasDto->getDomicilio() . "'";
            if (($imputadosmuestrasDto->getTelefono() != "") || ($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getTelefono() != "") {
            $sql.="telefono='" . $imputadosmuestrasDto->getTelefono() . "'";
            if (($imputadosmuestrasDto->getEmail() != "") || ($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getEmail() != "") {
            $sql.="email='" . $imputadosmuestrasDto->getEmail() . "'";
            if (($imputadosmuestrasDto->getActivo() != "") || ($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $imputadosmuestrasDto->getActivo() . "'";
            if (($imputadosmuestrasDto->getFechaRegistro() != "") || ($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosmuestrasDto->getFechaRegistro() . "'";
            if (($imputadosmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosmuestrasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ImputadosmuestrasDTO();
                    $tmp[$contador]->setIdImputadoMuestra($row["idImputadoMuestra"]);
                    $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setAlias($row["alias"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
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