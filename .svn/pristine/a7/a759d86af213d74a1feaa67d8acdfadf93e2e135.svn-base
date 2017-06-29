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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DomiciliosimputadossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldomiciliosimputadossolicitudes(";
        if ($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() != "") {
            $sql.="idDomicilioImputadoSolicitud";
            if (($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal";
            if (($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcvePais() != "") {
            $sql.="cvePais";
            if (($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveEstado() != "") {
            $sql.="cveEstado";
            if (($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getdireccion() != "") {
            $sql.="direccion";
            if (($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcolonia() != "") {
            $sql.="colonia";
            if (($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior";
            if (($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior";
            if (($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcp() != "") {
            $sql.="cp";
            if (($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlatitud() != "") {
            $sql.="latitud";
            if (($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlongitud() != "") {
            $sql.="longitud";
            if (($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual";
            if (($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getestado() != "") {
            $sql.="estado";
            if (($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getmunicipio() != "") {
            $sql.="municipio";
            if (($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia";
            if (($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda";
            if (($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcvePais() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcvePais() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveEstado() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcveEstado() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveMunicipio() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcveMunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getdireccion() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getdireccion() . "'";
            if (($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcolonia() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcolonia() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumInterior() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getnumInterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumExterior() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getnumExterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcp() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcp() . "'";
            if (($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlatitud() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getlatitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlongitud() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getlongitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getrecidenciaHabitual() . "'";
            if (($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getestado() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getestado() . "'";
            if (($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getmunicipio() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getmunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveConvivencia() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcveConvivencia() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getactivo() != "") {
            $sql.="'" . $domiciliosimputadossolicitudesDto->getactivo() . "'";
        }
        if ($domiciliosimputadossolicitudesDto->getfechaRegistro() != "") {
            
        }
        if ($domiciliosimputadossolicitudesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadossolicitudesDTO();
            $tmp->setidDomicilioImputadoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectDomiciliosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadossolicitudes SET ";
        $sql.=" DomicilioProcesal='" . $domiciliosimputadossolicitudesDto->getDomicilioProcesal() . "'";
        $sql.=" ,cvePais='" . $domiciliosimputadossolicitudesDto->getcvePais() . "'";
        $sql.=" ,cveEstado='" . $domiciliosimputadossolicitudesDto->getcveEstado() . "'";
        $sql.=" ,cveMunicipio='" . $domiciliosimputadossolicitudesDto->getcveMunicipio() . "'";
        $sql.=" ,direccion='" . $domiciliosimputadossolicitudesDto->getdireccion() . "'";
        $sql.=" ,colonia='" . $domiciliosimputadossolicitudesDto->getcolonia() . "'";
        $sql.=" ,numInterior='" . $domiciliosimputadossolicitudesDto->getnumInterior() . "'";
        $sql.=" ,numExterior='" . $domiciliosimputadossolicitudesDto->getnumExterior() . "'";
        $sql.=" ,cp='" . $domiciliosimputadossolicitudesDto->getcp() . "'";
        if ($domiciliosimputadossolicitudesDto->getlatitud() != "") {
            $sql.=" ,latitud='" . $domiciliosimputadossolicitudesDto->getlatitud() . "'";
        }
        if ($domiciliosimputadossolicitudesDto->getlongitud() != "") {
            $sql.=" ,longitud='" . $domiciliosimputadossolicitudesDto->getlongitud() . "'";
        }
        $sql.=" ,recidenciaHabitual='" . $domiciliosimputadossolicitudesDto->getrecidenciaHabitual() . "'";
        $sql.=" ,estado='" . $domiciliosimputadossolicitudesDto->getestado() . "'";
        $sql.=" ,municipio='" . $domiciliosimputadossolicitudesDto->getmunicipio() . "'";
        $sql.=" ,cveConvivencia='" . $domiciliosimputadossolicitudesDto->getcveConvivencia() . "'";
        $sql.=" ,cveTipoDeVivienda='" . $domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() . "'";
        if ($domiciliosimputadossolicitudesDto->getactivo() != "") {
            $sql.=" ,activo='" . $domiciliosimputadossolicitudesDto->getactivo() . "'";
        }
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idDomicilioImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() . "'";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadossolicitudesDTO();
            $tmp->setidDomicilioImputadoSolicitud($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud());
            $tmp = $this->selectDomiciliosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminaDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadossolicitudes SET ";
        $sql.=" activo= 'N'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idDomicilioImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadossolicitudesDTO();
            $tmp->setidDomicilioImputadoSolicitud($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud());
            $tmp = $this->selectDomiciliosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDomiciliosimputadossolicitudesRSP($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadossolicitudes SET ";
        if ($domiciliosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosimputadossolicitudesDto->getcvePais() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosimputadossolicitudesDto->getcveEstado() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosimputadossolicitudesDto->getcveMunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosimputadossolicitudesDto->getdireccion() . "'";
            if (($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosimputadossolicitudesDto->getcolonia() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosimputadossolicitudesDto->getnumInterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosimputadossolicitudesDto->getnumExterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcp() != "") {
            $sql.="cp='" . $domiciliosimputadossolicitudesDto->getcp() . "'";
            if (($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosimputadossolicitudesDto->getlatitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosimputadossolicitudesDto->getlongitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosimputadossolicitudesDto->getrecidenciaHabitual() . "'";
            if (($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getestado() != "") {
            $sql.="estado='" . $domiciliosimputadossolicitudesDto->getestado() . "'";
            if (($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosimputadossolicitudesDto->getmunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosimputadossolicitudesDto->getcveConvivencia() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosimputadossolicitudesDto->getactivo() . "'";
            if (($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosimputadossolicitudesDto->getfechaRegistro() . "'";
            if (($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosimputadossolicitudesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idDomicilioImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadossolicitudesDTO();
            $tmp->setidDomicilioImputadoSolicitud($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud());
            $tmp = $this->selectDomiciliosimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldomiciliosimputadossolicitudes  WHERE idDomicilioImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() . "'";
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

    public function selectDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDomicilioImputadoSolicitud,idImputadoSolicitud,DomicilioProcesal,cvePais,cveEstado,cveMunicipio,direccion,colonia,numInterior,numExterior,cp,latitud,longitud,recidenciaHabitual,estado,municipio,cveConvivencia,cveTipoDeVivienda,activo,fechaRegistro,fechaActualizacion FROM tbldomiciliosimputadossolicitudes ";
        if (($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() != "") || ($domiciliosimputadossolicitudesDto->getidImputadoSolicitud() != "") || ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getcvePais() != "") || ($domiciliosimputadossolicitudesDto->getcveEstado() != "") || ($domiciliosimputadossolicitudesDto->getcveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getdireccion() != "") || ($domiciliosimputadossolicitudesDto->getcolonia() != "") || ($domiciliosimputadossolicitudesDto->getnumInterior() != "") || ($domiciliosimputadossolicitudesDto->getnumExterior() != "") || ($domiciliosimputadossolicitudesDto->getcp() != "") || ($domiciliosimputadossolicitudesDto->getlatitud() != "") || ($domiciliosimputadossolicitudesDto->getlongitud() != "") || ($domiciliosimputadossolicitudesDto->getrecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getestado() != "") || ($domiciliosimputadossolicitudesDto->getmunicipio() != "") || ($domiciliosimputadossolicitudesDto->getcveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getactivo() != "") || ($domiciliosimputadossolicitudesDto->getfechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($domiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud() != "") {
            $sql.="idDomicilioImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getIdDomicilioImputadoSolicitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $domiciliosimputadossolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") || ($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosimputadossolicitudesDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadossolicitudesDto->getCvePais() != "") || ($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosimputadossolicitudesDto->getCvePais() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveEstado() != "") || ($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosimputadossolicitudesDto->getCveEstado() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosimputadossolicitudesDto->getCveMunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getDireccion() != "") || ($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosimputadossolicitudesDto->getDireccion() . "'";
            if (($domiciliosimputadossolicitudesDto->getColonia() != "") || ($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosimputadossolicitudesDto->getColonia() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumInterior() != "") || ($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosimputadossolicitudesDto->getNumInterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getNumExterior() != "") || ($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosimputadossolicitudesDto->getNumExterior() . "'";
            if (($domiciliosimputadossolicitudesDto->getCp() != "") || ($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcp() != "") {
            $sql.="cp='" . $domiciliosimputadossolicitudesDto->getCp() . "'";
            if (($domiciliosimputadossolicitudesDto->getLatitud() != "") || ($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosimputadossolicitudesDto->getLatitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getLongitud() != "") || ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosimputadossolicitudesDto->getLongitud() . "'";
            if (($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() != "") || ($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosimputadossolicitudesDto->getRecidenciaHabitual() . "'";
            if (($domiciliosimputadossolicitudesDto->getEstado() != "") || ($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getestado() != "") {
            $sql.="estado='" . $domiciliosimputadossolicitudesDto->getEstado() . "'";
            if (($domiciliosimputadossolicitudesDto->getMunicipio() != "") || ($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosimputadossolicitudesDto->getMunicipio() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveConvivencia() != "") || ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosimputadossolicitudesDto->getCveConvivencia() . "'";
            if (($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() . "'";
            if (($domiciliosimputadossolicitudesDto->getActivo() != "") || ($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosimputadossolicitudesDto->getActivo() . "'";
            if (($domiciliosimputadossolicitudesDto->getFechaRegistro() != "") || ($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosimputadossolicitudesDto->getFechaRegistro() . "'";
            if (($domiciliosimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosimputadossolicitudesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DomiciliosimputadossolicitudesDTO();
                    $tmp[$contador]->setIdDomicilioImputadoSolicitud($row["idDomicilioImputadoSolicitud"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setDomicilioProcesal($row["DomicilioProcesal"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setCveEstado($row["cveEstado"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setDireccion($row["direccion"]);
                    $tmp[$contador]->setColonia($row["colonia"]);
                    $tmp[$contador]->setNumInterior($row["numInterior"]);
                    $tmp[$contador]->setNumExterior($row["numExterior"]);
                    $tmp[$contador]->setCp($row["cp"]);
                    $tmp[$contador]->setLatitud($row["latitud"]);
                    $tmp[$contador]->setLongitud($row["longitud"]);
                    $tmp[$contador]->setRecidenciaHabitual($row["recidenciaHabitual"]);
                    $tmp[$contador]->setEstado($row["estado"]);
                    $tmp[$contador]->setMunicipio($row["municipio"]);
                    $tmp[$contador]->setCveConvivencia($row["cveConvivencia"]);
                    $tmp[$contador]->setCveTipoDeVivienda($row["cveTipoDeVivienda"]);
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