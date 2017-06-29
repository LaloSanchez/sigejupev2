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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadosexhortosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadosexhortos($imputadosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadosexhortos(";
        if ($imputadosexhortosDto->getIdImputadoExhorto() != "") {
            $sql.="idImputadoExhorto";
            if (($imputadosexhortosDto->getIdExhorto() != "") || ($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getIdExhorto() != "") {
            $sql.="idExhorto";
            if (($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion";
            if (($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getPaterno() != "") {
            $sql.="paterno";
            if (($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMaterno() != "") {
            $sql.="materno";
            if (($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombre() != "") {
            $sql.="nombre";
            if (($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveEstado() != "") {
            $sql.="cveEstado";
            if (($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getDomicilio() != "") {
            $sql.="domicilio";
            if (($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getAlias() != "") {
            $sql.="alias";
            if (($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getTelefono() != "") {
            $sql.="telefono";
            if (($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveCereso() != "") {
            $sql.="cveCereso";
            if (($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getActivo() != "") {
            $sql.="activo";
            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombreMoral() != "") {
            $sql.="nombreMoral";
            if (($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCvePais() != "") {
            $sql.="cvePais";
            if (($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getEstado() != "") {
            $sql.="estado";
            if (($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMunicipio() != "") {
            $sql.="municipio";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadosexhortosDto->getIdImputadoExhorto() != "") {
            $sql.="'" . $imputadosexhortosDto->getIdImputadoExhorto() . "'";
            if (($imputadosexhortosDto->getIdExhorto() != "") || ($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getIdExhorto() != "") {
            $sql.="'" . $imputadosexhortosDto->getIdExhorto() . "'";
            if (($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveConsignacion() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveConsignacion() . "'";
            if (($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getPaterno() != "") {
            $sql.="'" . $imputadosexhortosDto->getPaterno() . "'";
            if (($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMaterno() != "") {
            $sql.="'" . $imputadosexhortosDto->getMaterno() . "'";
            if (($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombre() != "") {
            $sql.="'" . $imputadosexhortosDto->getNombre() . "'";
            if (($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveGenero() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveGenero() . "'";
            if (($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveEstado() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveEstado() . "'";
            if (($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveMunicipio() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveMunicipio() . "'";
            if (($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getDomicilio() != "") {
            $sql.="'" . $imputadosexhortosDto->getDomicilio() . "'";
            if (($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getAlias() != "") {
            $sql.="'" . $imputadosexhortosDto->getAlias() . "'";
            if (($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getTelefono() != "") {
            $sql.="'" . $imputadosexhortosDto->getTelefono() . "'";
            if (($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveCereso() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveCereso() . "'";
            if (($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getActivo() != "") {
            $sql.="'" . $imputadosexhortosDto->getActivo() . "'";
            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
//        if ($imputadosexhortosDto->getFechaRegistro() != "") {
//            $sql.="now()";
//            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
//                $sql.=",";
//            }
//        }
//        if ($imputadosexhortosDto->getFechaActualizacion() != "") {
//            $sql.="now()";
//            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
//                $sql.=",";
//            }
//        }
        if ($imputadosexhortosDto->getCveTipoPersona() != "") {
            $sql.="'" . $imputadosexhortosDto->getCveTipoPersona() . "'";
            if (($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombreMoral() != "") {
            $sql.="'" . $imputadosexhortosDto->getNombreMoral() . "'";
            if (($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCvePais() != "") {
            $sql.="'" . $imputadosexhortosDto->getCvePais() . "'";
            if (($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getEstado() != "") {
            $sql.="'" . $imputadosexhortosDto->getEstado() . "'";
            if (($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMunicipio() != "") {
            $sql.="'" . $imputadosexhortosDto->getMunicipio() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
//        print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosexhortosDTO();
            $tmp->setidImputadoExhorto($this->_proveedor->lastID());
            $tmp = $this->selectImputadosexhortos($tmp, "", $this->_proveedor);
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

    public function updateImputadosexhortos($imputadosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadosexhortos SET ";
        if ($imputadosexhortosDto->getIdImputadoExhorto() != "") {
            $sql.="idImputadoExhorto='" . $imputadosexhortosDto->getIdImputadoExhorto() . "'";
            if (($imputadosexhortosDto->getIdExhorto() != "") || ($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getIdExhorto() != "") {
            $sql.="idExhorto='" . $imputadosexhortosDto->getIdExhorto() . "'";
            if (($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion='" . $imputadosexhortosDto->getCveConsignacion() . "'";
            if (($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadosexhortosDto->getPaterno() . "'";
            if (($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMaterno() != "") {
            $sql.="materno='" . $imputadosexhortosDto->getMaterno() . "'";
            if (($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombre() != "") {
            $sql.="nombre='" . $imputadosexhortosDto->getNombre() . "'";
            if (($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadosexhortosDto->getCveGenero() . "'";
            if (($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $imputadosexhortosDto->getCveEstado() . "'";
            if (($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio='" . $imputadosexhortosDto->getCveMunicipio() . "'";
            if (($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getDomicilio() != "") {
            $sql.="domicilio='" . $imputadosexhortosDto->getDomicilio() . "'";
            if (($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getAlias() != "") {
            $sql.="alias='" . $imputadosexhortosDto->getAlias() . "'";
            if (($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getTelefono() != "") {
            $sql.="telefono='" . $imputadosexhortosDto->getTelefono() . "'";
            if (($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $imputadosexhortosDto->getCveCereso() . "'";
            if (($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getActivo() != "") {
            $sql.="activo='" . $imputadosexhortosDto->getActivo() . "'";
            if (($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosexhortosDto->getFechaRegistro() . "'";
            if (($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosexhortosDto->getFechaActualizacion() . "'";
            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadosexhortosDto->getCveTipoPersona() . "'";
            if (($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadosexhortosDto->getNombreMoral() . "'";
            if (($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getCvePais() != "") {
            $sql.="cvePais='" . $imputadosexhortosDto->getCvePais() . "'";
            if (($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getEstado() != "") {
            $sql.="estado='" . $imputadosexhortosDto->getEstado() . "'";
            if (($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosexhortosDto->getMunicipio() != "") {
            $sql.="municipio='" . $imputadosexhortosDto->getMunicipio() . "'";
        }
        $sql.=" WHERE idImputadoExhorto='" . $imputadosexhortosDto->getIdImputadoExhorto() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosexhortosDTO();
            $tmp->setidImputadoExhorto($imputadosexhortosDto->getIdImputadoExhorto());
            $tmp = $this->selectImputadosexhortos($tmp, "", $this->_proveedor);
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

    public function deleteImputadosexhortos($imputadosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadosexhortos  WHERE idImputadoExhorto='" . $imputadosexhortosDto->getIdImputadoExhorto() . "'";
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

    public function selectImputadosexhortos($imputadosexhortosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImputadoExhorto,idExhorto,cveConsignacion,paterno,materno,nombre,cveGenero,cveEstado,cveMunicipio,domicilio,alias,telefono,cveCereso,activo,fechaRegistro,fechaActualizacion,cveTipoPersona,nombreMoral,cvePais,estado,municipio FROM tblimputadosexhortos ";
        if (($imputadosexhortosDto->getIdImputadoExhorto() != "") || ($imputadosexhortosDto->getIdExhorto() != "") || ($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadosexhortosDto->getIdImputadoExhorto() != "") {
            $sql.="idImputadoExhorto='" . $imputadosexhortosDto->getIdImputadoExhorto() . "'";
            if (($imputadosexhortosDto->getIdExhorto() != "") || ($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getIdExhorto() != "") {
            $sql.="idExhorto='" . $imputadosexhortosDto->getIdExhorto() . "'";
            if (($imputadosexhortosDto->getCveConsignacion() != "") || ($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion='" . $imputadosexhortosDto->getCveConsignacion() . "'";
            if (($imputadosexhortosDto->getPaterno() != "") || ($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadosexhortosDto->getPaterno() . "'";
            if (($imputadosexhortosDto->getMaterno() != "") || ($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getMaterno() != "") {
            $sql.="materno='" . $imputadosexhortosDto->getMaterno() . "'";
            if (($imputadosexhortosDto->getNombre() != "") || ($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getNombre() != "") {
            $sql.="nombre='" . $imputadosexhortosDto->getNombre() . "'";
            if (($imputadosexhortosDto->getCveGenero() != "") || ($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadosexhortosDto->getCveGenero() . "'";
            if (($imputadosexhortosDto->getCveEstado() != "") || ($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveEstado() != "") {
            $sql.="cveEstado='" . $imputadosexhortosDto->getCveEstado() . "'";
            if (($imputadosexhortosDto->getCveMunicipio() != "") || ($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio='" . $imputadosexhortosDto->getCveMunicipio() . "'";
            if (($imputadosexhortosDto->getDomicilio() != "") || ($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getDomicilio() != "") {
            $sql.="domicilio='" . $imputadosexhortosDto->getDomicilio() . "'";
            if (($imputadosexhortosDto->getAlias() != "") || ($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getAlias() != "") {
            $sql.="alias='" . $imputadosexhortosDto->getAlias() . "'";
            if (($imputadosexhortosDto->getTelefono() != "") || ($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getTelefono() != "") {
            $sql.="telefono='" . $imputadosexhortosDto->getTelefono() . "'";
            if (($imputadosexhortosDto->getCveCereso() != "") || ($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $imputadosexhortosDto->getCveCereso() . "'";
            if (($imputadosexhortosDto->getActivo() != "") || ($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getActivo() != "") {
            $sql.="activo='" . $imputadosexhortosDto->getActivo() . "'";
            if (($imputadosexhortosDto->getFechaRegistro() != "") || ($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosexhortosDto->getFechaRegistro() . "'";
            if (($imputadosexhortosDto->getFechaActualizacion() != "") || ($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosexhortosDto->getFechaActualizacion() . "'";
            if (($imputadosexhortosDto->getCveTipoPersona() != "") || ($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadosexhortosDto->getCveTipoPersona() . "'";
            if (($imputadosexhortosDto->getNombreMoral() != "") || ($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadosexhortosDto->getNombreMoral() . "'";
            if (($imputadosexhortosDto->getCvePais() != "") || ($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getCvePais() != "") {
            $sql.="cvePais='" . $imputadosexhortosDto->getCvePais() . "'";
            if (($imputadosexhortosDto->getEstado() != "") || ($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getEstado() != "") {
            $sql.="estado='" . $imputadosexhortosDto->getEstado() . "'";
            if (($imputadosexhortosDto->getMunicipio() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosexhortosDto->getMunicipio() != "") {
            $sql.="municipio='" . $imputadosexhortosDto->getMunicipio() . "'";
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
                    $tmp[$contador] = new ImputadosexhortosDTO();
                    $tmp[$contador]->setIdImputadoExhorto($row["idImputadoExhorto"]);
                    $tmp[$contador]->setIdExhorto($row["idExhorto"]);
                    $tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveEstado($row["cveEstado"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setAlias($row["alias"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCveCereso($row["cveCereso"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setEstado($row["estado"]);
                    $tmp[$contador]->setMunicipio($row["municipio"]);
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