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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DomiciliosofendidossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldomiciliosofendidossolicitudes(";
        if ($domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() != "") {
            $sql .= "idDomicilioOfendidoSolicitud";
            if (($domiciliosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($domiciliosofendidossolicitudesDto->getDomicilioProcesal()) || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
            if (($domiciliosofendidossolicitudesDto->getDomicilioProcesal()) || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }

        if ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") {
            $sql .= "DomicilioProcesal";
            if (($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }

        if ($domiciliosofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "cvePais";
            if (($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveEstado() != "") {
            $sql .= "cveEstado";
            if (($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveMunicipio() != "") {
            $sql .= "cveMunicipio";
            if (($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getdireccion() != "") {
            $sql .= "direccion";
            if (($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcolonia() != "") {
            $sql .= "colonia";
            if (($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumInterior() != "") {
            $sql .= "numInterior";
            if (($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumExterior() != "") {
            $sql .= "numExterior";
            if (($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcp() != "") {
            $sql .= "cp";
            if (($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlatitud() != "") {
            $sql .= "latitud";
            if (($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlongitud() != "") {
            $sql .= "longitud";
            if (($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql .= "recidenciaHabitual";
            if (($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getestado() != "") {
            $sql .= "estado";
            if (($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getmunicipio() != "") {
            $sql .= "municipio";
            if (($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveConvivencia() != "") {
            $sql .= "cveConvivencia";
            if (($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql .= "cveTipoDeVivienda";
            if (($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($domiciliosofendidossolicitudesDto->getDomicilioProcesal()) || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getDomicilioProcesal()) || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcvePais() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveEstado() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcveEstado() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveMunicipio() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcveMunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getdireccion() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getdireccion() . "'";
            if (($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcolonia() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcolonia() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumInterior() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getnumInterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumExterior() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getnumExterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcp() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcp() . "'";
            if (($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlatitud() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getlatitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlongitud() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getlongitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getrecidenciaHabitual() . "'";
            if (($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getestado() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getestado() . "'";
            if (($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getmunicipio() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getmunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveConvivencia() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcveConvivencia() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $domiciliosofendidossolicitudesDto->getactivo() . "'";
        }
        if ($domiciliosofendidossolicitudesDto->getfechaRegistro() != "") {

        }
        if ($domiciliosofendidossolicitudesDto->getfechaActualizacion() != "") {

        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosofendidossolicitudesDTO();
            $tmp->setidDomicilioOfendidoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectDomiciliosofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosofendidossolicitudes SET ";
        if ($domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getDomicilioProcesal()) || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") {
            $sql .= "DomicilioProcesal='" . $domiciliosofendidossolicitudesDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "cvePais='" . $domiciliosofendidossolicitudesDto->getcvePais() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveEstado() != "") {
            $sql .= "cveEstado='" . $domiciliosofendidossolicitudesDto->getcveEstado() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveMunicipio() != "") {
            $sql .= "cveMunicipio='" . $domiciliosofendidossolicitudesDto->getcveMunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getdireccion() != "") {
            $sql .= "direccion='" . $domiciliosofendidossolicitudesDto->getdireccion() . "'";
            if (($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcolonia() != "") {
            $sql .= "colonia='" . $domiciliosofendidossolicitudesDto->getcolonia() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumInterior() != "") {
            $sql .= "numInterior='" . $domiciliosofendidossolicitudesDto->getnumInterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumExterior() != "") {
            $sql .= "numExterior='" . $domiciliosofendidossolicitudesDto->getnumExterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcp() != "") {
            $sql .= "cp='" . $domiciliosofendidossolicitudesDto->getcp() . "'";
            if (($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlatitud() != "") {
            $sql .= "latitud='" . $domiciliosofendidossolicitudesDto->getlatitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlongitud() != "") {
            $sql .= "longitud='" . $domiciliosofendidossolicitudesDto->getlongitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql .= "recidenciaHabitual='" . $domiciliosofendidossolicitudesDto->getrecidenciaHabitual() . "'";
            if (($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getestado() != "") {
            $sql .= "estado='" . $domiciliosofendidossolicitudesDto->getestado() . "'";
            if (($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getmunicipio() != "") {
            $sql .= "municipio='" . $domiciliosofendidossolicitudesDto->getmunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveConvivencia() != "") {
            $sql .= "cveConvivencia='" . $domiciliosofendidossolicitudesDto->getcveConvivencia() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql .= "cveTipoDeVivienda='" . $domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $domiciliosofendidossolicitudesDto->getactivo() . "'";
            if (($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $domiciliosofendidossolicitudesDto->getfechaRegistro() . "'";
            if (($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
        }
        $sql .= " WHERE idDomicilioOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() . "'";
//        ECHO $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosofendidossolicitudesDTO();
            $tmp->setidDomicilioOfendidoSolicitud($domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud());
            $tmp = $this->selectDomiciliosofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminarDomicilioOfendido($domiciliosofendidossolicitudesDto, $proveedor = null, $byRow = 'idOfendidoSolicitud')
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosofendidossolicitudes SET activo='N', fechaActualizacion=NOW()";

        if ($byRow == 'idOfendidoSolicitud') {
            $sql .= " WHERE idOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
        } else if ($byRow == 'idDomicilioOfendidoSolicitud') {
            $sql .= " WHERE idDomicilioOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud() . "'";

        }


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

    public function deleteDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldomiciliosofendidossolicitudes  WHERE idDomicilioOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() . "'";
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

    public function selectDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        //$sql = "SELECT idDomicilioOfendidoSolicitud,idOfendidoSolicitud,cvePais,cveEstado,cveMunicipio,direccion,colonia,numInterior,numExterior,cp,latitud,longitud,recidenciaHabitual,estado,municipio,cveConvivencia,cveTipoDeVivienda,activo,fechaRegistro,fechaActualizacion FROM tbldomiciliosofendidossolicitudes ";
        $sql = "SELECT
                a.idDomicilioOfendidoSolicitud, a.idOfendidoSolicitud, a.DomicilioProcesal, a.cvePais, b.desPais, a.cveEstado, c.desEstado, a.cveMunicipio, d.desMunicipio,
                a.direccion, a.colonia, a.numInterior, a.numExterior, a.cp, a.latitud, a.longitud, a.recidenciaHabitual,
                a.estado, a.municipio, a.cveConvivencia, a.cveTipoDeVivienda, a.activo, a.fechaRegistro, a.fechaActualizacion
                FROM tbldomiciliosofendidossolicitudes a
                JOIN tblpaises b ON a.cvePais = b.cvePais
                LEFT JOIN tblestados c ON a.cveEstado = c.cveEstado
                LEFT JOIN tblmunicipios d ON a.cveMunicipio = d.cveMunicipio";

        if (($domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() != "") || ($domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() != "") || ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosofendidossolicitudesDto->getcvePais() != "") || ($domiciliosofendidossolicitudesDto->getcveEstado() != "") || ($domiciliosofendidossolicitudesDto->getcveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getdireccion() != "") || ($domiciliosofendidossolicitudesDto->getcolonia() != "") || ($domiciliosofendidossolicitudesDto->getnumInterior() != "") || ($domiciliosofendidossolicitudesDto->getnumExterior() != "") || ($domiciliosofendidossolicitudesDto->getcp() != "") || ($domiciliosofendidossolicitudesDto->getlatitud() != "") || ($domiciliosofendidossolicitudesDto->getlongitud() != "") || ($domiciliosofendidossolicitudesDto->getrecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getestado() != "") || ($domiciliosofendidossolicitudesDto->getmunicipio() != "") || ($domiciliosofendidossolicitudesDto->getcveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getactivo() != "") || ($domiciliosofendidossolicitudesDto->getfechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($domiciliosofendidossolicitudesDto->getidDomicilioOfendidoSolicitud() != "") {
            $sql .= "a.idDomicilioOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "a.idOfendidoSolicitud='" . $domiciliosofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getDomicilioProcesal() != "") {
            $sql .= "a.DomicilioProcesal='" . $domiciliosofendidossolicitudesDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidossolicitudesDto->getCvePais() != "") || ($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "a.cvePais='" . $domiciliosofendidossolicitudesDto->getCvePais() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveEstado() != "") || ($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveEstado() != "") {
            $sql .= "a.cveEstado='" . $domiciliosofendidossolicitudesDto->getCveEstado() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveMunicipio() != "") {
            $sql .= "a.cveMunicipio='" . $domiciliosofendidossolicitudesDto->getCveMunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getDireccion() != "") || ($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getdireccion() != "") {
            $sql .= "direccion='" . $domiciliosofendidossolicitudesDto->getDireccion() . "'";
            if (($domiciliosofendidossolicitudesDto->getColonia() != "") || ($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcolonia() != "") {
            $sql .= "a.colonia='" . $domiciliosofendidossolicitudesDto->getColonia() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumInterior() != "") || ($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumInterior() != "") {
            $sql .= "a.numInterior='" . $domiciliosofendidossolicitudesDto->getNumInterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getNumExterior() != "") || ($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getnumExterior() != "") {
            $sql .= "a.numExterior='" . $domiciliosofendidossolicitudesDto->getNumExterior() . "'";
            if (($domiciliosofendidossolicitudesDto->getCp() != "") || ($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcp() != "") {
            $sql .= "a.cp='" . $domiciliosofendidossolicitudesDto->getCp() . "'";
            if (($domiciliosofendidossolicitudesDto->getLatitud() != "") || ($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlatitud() != "") {
            $sql .= "a.latitud='" . $domiciliosofendidossolicitudesDto->getLatitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getLongitud() != "") || ($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getlongitud() != "") {
            $sql .= "a.longitud='" . $domiciliosofendidossolicitudesDto->getLongitud() . "'";
            if (($domiciliosofendidossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql .= "a.recidenciaHabitual='" . $domiciliosofendidossolicitudesDto->getRecidenciaHabitual() . "'";
            if (($domiciliosofendidossolicitudesDto->getEstado() != "") || ($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getestado() != "") {
            $sql .= "a.estado='" . $domiciliosofendidossolicitudesDto->getEstado() . "'";
            if (($domiciliosofendidossolicitudesDto->getMunicipio() != "") || ($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getmunicipio() != "") {
            $sql .= "a.municipio='" . $domiciliosofendidossolicitudesDto->getMunicipio() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveConvivencia() != "") || ($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveConvivencia() != "") {
            $sql .= "a.cveConvivencia='" . $domiciliosofendidossolicitudesDto->getCveConvivencia() . "'";
            if (($domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql .= "a.cveTipoDeVivienda='" . $domiciliosofendidossolicitudesDto->getCveTipoDeVivienda() . "'";
            if (($domiciliosofendidossolicitudesDto->getActivo() != "") || ($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getactivo() != "") {
            $sql .= "a.activo='" . $domiciliosofendidossolicitudesDto->getActivo() . "'";
            if (($domiciliosofendidossolicitudesDto->getFechaRegistro() != "") || ($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $domiciliosofendidossolicitudesDto->getFechaRegistro() . "'";
            if (($domiciliosofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($domiciliosofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "a.fechaActualizacion='" . $domiciliosofendidossolicitudesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DomiciliosofendidossolicitudesDTO();
                    $tmp[$contador]->setIdDomicilioOfendidoSolicitud($row["idDomicilioOfendidoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setDomicilioProcesal($row["DomicilioProcesal"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setDesPais(utf8_encode($row["desPais"]));
                    $tmp[$contador]->setCveEstado($row["cveEstado"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setDireccion(utf8_encode($row["direccion"]));
                    $tmp[$contador]->setColonia(utf8_encode($row["colonia"]));
                    $tmp[$contador]->setNumInterior(utf8_encode($row["numInterior"]));
                    $tmp[$contador]->setNumExterior(utf8_encode($row["numExterior"]));
                    $tmp[$contador]->setCp(utf8_encode($row["cp"]));
                    $tmp[$contador]->setLatitud(utf8_encode($row["latitud"]));
                    $tmp[$contador]->setLongitud(utf8_encode($row["longitud"]));
                    $tmp[$contador]->setRecidenciaHabitual(utf8_encode($row["recidenciaHabitual"]));


                    if ($row["cvePais"] == 119) {
                        $tmp[$contador]->setEstado(utf8_encode($row["desEstado"]));
                        $tmp[$contador]->setMunicipio(utf8_encode($row["desMunicipio"]));
                    } else {
                        $tmp[$contador]->setEstado(utf8_encode($row["estado"]));
                        $tmp[$contador]->setMunicipio(utf8_encode($row["municipio"]));
                    }

                    $tmp[$contador]->setCveConvivencia($row["cveConvivencia"]);
                    $tmp[$contador]->setCveTipoDeVivienda($row["cveTipoDeVivienda"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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