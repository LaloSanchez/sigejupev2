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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DomiciliosimputadoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldomiciliosimputadoscarpetas(";
        if ($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") {
            $sql.="idDomicilioImputadoCarpeta";
            if (($domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta";
            if (($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal";
            if (($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais";
            if (($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado";
            if (($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getdireccion() != "") {
            $sql.="direccion";
            if (($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcolonia() != "") {
            $sql.="colonia";
            if (($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior";
            if (($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior";
            if (($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcp() != "") {
            $sql.="cp";
            if (($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlatitud() != "") {
            $sql.="latitud";
            if (($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlongitud() != "") {
            $sql.="longitud";
            if (($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual";
            if (($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getestado() != "") {
            $sql.="estado";
            if (($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio";
            if (($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia";
            if (($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda";
            if (($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getidImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcvePais() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcvePais() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveEstado() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcveEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcveMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getdireccion() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getdireccion() . "'";
            if (($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcolonia() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcolonia() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumInterior() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getnumInterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumExterior() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getnumExterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcp() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcp() . "'";
            if (($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlatitud() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getlatitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlongitud() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getlongitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getrecidenciaHabitual() . "'";
            if (($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getestado() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getestado() . "'";
            if (($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getmunicipio() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getmunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcveConvivencia() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosimputadoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getactivo() != "") {
            $sql.="'" . $domiciliosimputadoscarpetasDto->getactivo() . "'";
        }
        if ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadoscarpetasDTO();
            $tmp->setidDomicilioImputadoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectDomiciliosimputadoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadoscarpetas SET ";
        if ($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") {
            $sql.="idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getidImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosimputadoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosimputadoscarpetasDto->getcvePais() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosimputadoscarpetasDto->getcveEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosimputadoscarpetasDto->getcveMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosimputadoscarpetasDto->getdireccion() . "'";
            if (($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosimputadoscarpetasDto->getcolonia() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosimputadoscarpetasDto->getnumInterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosimputadoscarpetasDto->getnumExterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcp() != "") {
            $sql.="cp='" . $domiciliosimputadoscarpetasDto->getcp() . "'";
            if (($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosimputadoscarpetasDto->getlatitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosimputadoscarpetasDto->getlongitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosimputadoscarpetasDto->getrecidenciaHabitual() . "'";
            if (($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getestado() != "") {
            $sql.="estado='" . $domiciliosimputadoscarpetasDto->getestado() . "'";
            if (($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosimputadoscarpetasDto->getmunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosimputadoscarpetasDto->getcveConvivencia() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosimputadoscarpetasDto->getactivo() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosimputadoscarpetasDto->getfechaRegistro() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosimputadoscarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadoscarpetasDTO();
            $tmp->setidDomicilioImputadoCarpeta($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta());
            $tmp = $this->selectDomiciliosimputadoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldomiciliosimputadoscarpetas  WHERE idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() . "'";
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

    public function selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDomicilioImputadoCarpeta,idImputadoCarpeta,DomicilioProcesal,cvePais,cveEstado,cveMunicipio,direccion,colonia,numInterior,numExterior,cp,latitud,longitud,recidenciaHabitual,estado,municipio,cveConvivencia,cveTipoDeVivienda,activo,fechaRegistro,fechaActualizacion FROM tbldomiciliosimputadoscarpetas ";
        if (($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getcvePais() != "") || ($domiciliosimputadoscarpetasDto->getcveEstado() != "") || ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getdireccion() != "") || ($domiciliosimputadoscarpetasDto->getcolonia() != "") || ($domiciliosimputadoscarpetasDto->getnumInterior() != "") || ($domiciliosimputadoscarpetasDto->getnumExterior() != "") || ($domiciliosimputadoscarpetasDto->getcp() != "") || ($domiciliosimputadoscarpetasDto->getlatitud() != "") || ($domiciliosimputadoscarpetasDto->getlongitud() != "") || ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getestado() != "") || ($domiciliosimputadoscarpetasDto->getmunicipio() != "") || ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getactivo() != "") || ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") {
            $sql.="idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosimputadoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosimputadoscarpetasDto->getCvePais() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosimputadoscarpetasDto->getCveEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosimputadoscarpetasDto->getCveMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosimputadoscarpetasDto->getDireccion() . "'";
            if (($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosimputadoscarpetasDto->getColonia() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosimputadoscarpetasDto->getNumInterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosimputadoscarpetasDto->getNumExterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcp() != "") {
            $sql.="cp='" . $domiciliosimputadoscarpetasDto->getCp() . "'";
            if (($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosimputadoscarpetasDto->getLatitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosimputadoscarpetasDto->getLongitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosimputadoscarpetasDto->getRecidenciaHabitual() . "'";
            if (($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getestado() != "") {
            $sql.="estado='" . $domiciliosimputadoscarpetasDto->getEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosimputadoscarpetasDto->getMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosimputadoscarpetasDto->getCveConvivencia() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() . "'";
            if (($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosimputadoscarpetasDto->getActivo() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosimputadoscarpetasDto->getFechaRegistro() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosimputadoscarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DomiciliosimputadoscarpetasDTO();
                    $tmp[$contador]->setIdDomicilioImputadoCarpeta($row["idDomicilioImputadoCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
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
    
    /*
     * Actualizar carpetas judiciales
     */
    public function modificarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadoscarpetas SET ";
        $sql.=" DomicilioProcesal='" . $domiciliosimputadoscarpetasDto->getDomicilioProcesal() . "'";
        $sql.=" ,cvePais='" . $domiciliosimputadoscarpetasDto->getcvePais() . "'";
        $sql.=" ,cveEstado='" . $domiciliosimputadoscarpetasDto->getcveEstado() . "'";
        $sql.=" ,cveMunicipio='" . $domiciliosimputadoscarpetasDto->getcveMunicipio() . "'";
        $sql.=" ,direccion='" . $domiciliosimputadoscarpetasDto->getdireccion() . "'";
        $sql.=" ,colonia='" . $domiciliosimputadoscarpetasDto->getcolonia() . "'";
        $sql.=" ,numInterior='" . $domiciliosimputadoscarpetasDto->getnumInterior() . "'";
        $sql.=" ,numExterior='" . $domiciliosimputadoscarpetasDto->getnumExterior() . "'";
        $sql.=" ,cp='" . $domiciliosimputadoscarpetasDto->getcp() . "'";
        $sql.=" ,latitud='" . $domiciliosimputadoscarpetasDto->getlatitud() . "'";
        $sql.=" ,longitud='" . $domiciliosimputadoscarpetasDto->getlongitud() . "'";
        $sql.=" ,recidenciaHabitual='" . $domiciliosimputadoscarpetasDto->getrecidenciaHabitual() . "'";
        $sql.=" ,estado='" . $domiciliosimputadoscarpetasDto->getestado() . "'";
        $sql.=" ,municipio='" . $domiciliosimputadoscarpetasDto->getmunicipio() . "'";
        $sql.=" ,cveConvivencia='" . $domiciliosimputadoscarpetasDto->getcveConvivencia() . "'";
        $sql.=" ,cveTipoDeVivienda='" . $domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosimputadoscarpetasDTO();
            $tmp->setIdDomicilioImputadoCarpeta($domiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta());
            $tmp = $this->selectDomiciliosimputadoscarpetas($tmp, "", $this->_proveedor);
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
    
    public function eliminarDomiciliosImputadosCarpetasByIdImputado($domiciliosimputadoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosimputadoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta() . "'";

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
    
    public function selectDomiciliosimputadoscarpetasPag($domiciliosimputadoscarpetasDto,$proveedor = null,$orden="",$param=null,$fields=null) {
        //print_r($fields).'Campos---';
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql= "SELECT ";
        
        if($fields===null)
        {
            $sql.=" idDomicilioImputadoCarpeta,idImputadoCarpeta,DomicilioProcesal,cvePais,cveEstado,cveMunicipio,direccion,colonia,numInterior,numExterior,cp,latitud,longitud,recidenciaHabitual,estado,municipio,cveConvivencia,cveTipoDeVivienda,activo,fechaRegistro,fechaActualizacion ";
        }else{
            $sql.=$fields;
        }
        $sql.=" FROM tbldomiciliosimputadoscarpetas";
        
        if (($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getcvePais() != "") || ($domiciliosimputadoscarpetasDto->getcveEstado() != "") || ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getdireccion() != "") || ($domiciliosimputadoscarpetasDto->getcolonia() != "") || ($domiciliosimputadoscarpetasDto->getnumInterior() != "") || ($domiciliosimputadoscarpetasDto->getnumExterior() != "") || ($domiciliosimputadoscarpetasDto->getcp() != "") || ($domiciliosimputadoscarpetasDto->getlatitud() != "") || ($domiciliosimputadoscarpetasDto->getlongitud() != "") || ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getestado() != "") || ($domiciliosimputadoscarpetasDto->getmunicipio() != "") || ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getactivo() != "") || ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        
        if ($domiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta() != "") {
            $sql.="idDomicilioImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdDomicilioImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $domiciliosimputadoscarpetasDto->getIdImputadoCarpeta() . "'";
            if (($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosimputadoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosimputadoscarpetasDto->getCvePais() != "") || ($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosimputadoscarpetasDto->getCvePais() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveEstado() != "") || ($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosimputadoscarpetasDto->getCveEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosimputadoscarpetasDto->getCveMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getDireccion() != "") || ($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosimputadoscarpetasDto->getDireccion() . "'";
            if (($domiciliosimputadoscarpetasDto->getColonia() != "") || ($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosimputadoscarpetasDto->getColonia() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumInterior() != "") || ($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosimputadoscarpetasDto->getNumInterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getNumExterior() != "") || ($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosimputadoscarpetasDto->getNumExterior() . "'";
            if (($domiciliosimputadoscarpetasDto->getCp() != "") || ($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcp() != "") {
            $sql.="cp='" . $domiciliosimputadoscarpetasDto->getCp() . "'";
            if (($domiciliosimputadoscarpetasDto->getLatitud() != "") || ($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosimputadoscarpetasDto->getLatitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getLongitud() != "") || ($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosimputadoscarpetasDto->getLongitud() . "'";
            if (($domiciliosimputadoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosimputadoscarpetasDto->getRecidenciaHabitual() . "'";
            if (($domiciliosimputadoscarpetasDto->getEstado() != "") || ($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getestado() != "") {
            $sql.="estado='" . $domiciliosimputadoscarpetasDto->getEstado() . "'";
            if (($domiciliosimputadoscarpetasDto->getMunicipio() != "") || ($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosimputadoscarpetasDto->getMunicipio() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveConvivencia() != "") || ($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosimputadoscarpetasDto->getCveConvivencia() . "'";
            if (($domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosimputadoscarpetasDto->getCveTipoDeVivienda() . "'";
            if (($domiciliosimputadoscarpetasDto->getActivo() != "") || ($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosimputadoscarpetasDto->getActivo() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaRegistro() != "") || ($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosimputadoscarpetasDto->getFechaRegistro() . "'";
            if (($domiciliosimputadoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosimputadoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosimputadoscarpetasDto->getFechaActualizacion() . "'";
        }
        
        $inicial="";
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
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
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
        
        //echo $sql.'----Consulta---';
        error_log("sql => ".$sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField= mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if($fields===null){
                    $tmp[$contador] = new DomiciliosimputadoscarpetasDTO();
                    $tmp[$contador]->setIdDomicilioImputadoCarpeta($row["idDomicilioImputadoCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
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
                    //$contador++;
                }
                else{
                    $tmp[$contador] = array();
                    for ($i = 0; $i < $numField; $i++){
                        $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                        //var_dump($fieldInfo);
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