<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DomiciliosofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldomiciliosofendidoscarpetas(";
        if ($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() != "") {
            $sql.="idDomicilioOfendidoCarpeta";
            if (($domiciliosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal";
            if (($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais";
            if (($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado";
            if (($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getdireccion() != "") {
            $sql.="direccion";
            if (($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcolonia() != "") {
            $sql.="colonia";
            if (($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior";
            if (($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior";
            if (($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcp() != "") {
            $sql.="cp";
            if (($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlatitud() != "") {
            $sql.="latitud";
            if (($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlongitud() != "") {
            $sql.="longitud";
            if (($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual";
            if (($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getestado() != "") {
            $sql.="estado";
            if (($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio";
            if (($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia";
            if (($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda";
            if (($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcvePais() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcvePais() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveEstado() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcveEstado() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveMunicipio() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcveMunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getdireccion() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getdireccion() . "'";
            if (($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcolonia() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcolonia() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumInterior() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getnumInterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumExterior() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getnumExterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcp() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcp() . "'";
            if (($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlatitud() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getlatitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlongitud() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getlongitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getrecidenciaHabitual() . "'";
            if (($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getestado() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getestado() . "'";
            if (($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getmunicipio() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getmunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveConvivencia() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcveConvivencia() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getactivo() != "") {
            $sql.="'" . $domiciliosofendidoscarpetasDto->getactivo() . "'";
        }
        if ($domiciliosofendidoscarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($domiciliosofendidoscarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosofendidoscarpetasDTO();
            $tmp->setidDomicilioOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectDomiciliosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosofendidoscarpetas SET ";
        if ($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() != "") {
            $sql.="idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosofendidoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosofendidoscarpetasDto->getcvePais() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosofendidoscarpetasDto->getcveEstado() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosofendidoscarpetasDto->getcveMunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosofendidoscarpetasDto->getdireccion() . "'";
            if (($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosofendidoscarpetasDto->getcolonia() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosofendidoscarpetasDto->getnumInterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosofendidoscarpetasDto->getnumExterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcp() != "") {
            $sql.="cp='" . $domiciliosofendidoscarpetasDto->getcp() . "'";
            if (($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosofendidoscarpetasDto->getlatitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosofendidoscarpetasDto->getlongitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosofendidoscarpetasDto->getrecidenciaHabitual() . "'";
            if (($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getestado() != "") {
            $sql.="estado='" . $domiciliosofendidoscarpetasDto->getestado() . "'";
            if (($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosofendidoscarpetasDto->getmunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosofendidoscarpetasDto->getcveConvivencia() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() . "'";
            if (($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosofendidoscarpetasDto->getactivo() . "'";
            if (($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosofendidoscarpetasDto->getfechaRegistro() . "'";
            if (($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosofendidoscarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosofendidoscarpetasDTO();
            $tmp->setidDomicilioOfendidoCarpeta($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta());
            $tmp = $this->selectDomiciliosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldomiciliosofendidoscarpetas  WHERE idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() . "'";
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

    public function selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDomicilioOfendidoCarpeta,idOfendidoCarpeta,DomicilioProcesal,cvePais,cveEstado,cveMunicipio,direccion,colonia,numInterior,numExterior,cp,latitud,longitud,recidenciaHabitual,estado,municipio,cveConvivencia,cveTipoDeVivienda,activo,fechaRegistro,fechaActualizacion FROM tbldomiciliosofendidoscarpetas ";
        if (($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getcvePais() != "") || ($domiciliosofendidoscarpetasDto->getcveEstado() != "") || ($domiciliosofendidoscarpetasDto->getcveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getdireccion() != "") || ($domiciliosofendidoscarpetasDto->getcolonia() != "") || ($domiciliosofendidoscarpetasDto->getnumInterior() != "") || ($domiciliosofendidoscarpetasDto->getnumExterior() != "") || ($domiciliosofendidoscarpetasDto->getcp() != "") || ($domiciliosofendidoscarpetasDto->getlatitud() != "") || ($domiciliosofendidoscarpetasDto->getlongitud() != "") || ($domiciliosofendidoscarpetasDto->getrecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getestado() != "") || ($domiciliosofendidoscarpetasDto->getmunicipio() != "") || ($domiciliosofendidoscarpetasDto->getcveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getactivo() != "") || ($domiciliosofendidoscarpetasDto->getfechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() != "") {
            $sql.="idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getIdDomicilioOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") || ($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getDomicilioProcesal() != "") {
            $sql.="DomicilioProcesal='" . $domiciliosofendidoscarpetasDto->getDomicilioProcesal() . "'";
            if (($domiciliosofendidoscarpetasDto->getCvePais() != "") || ($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcvePais() != "") {
            $sql.="cvePais='" . $domiciliosofendidoscarpetasDto->getCvePais() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveEstado() != "") || ($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $domiciliosofendidoscarpetasDto->getCveEstado() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $domiciliosofendidoscarpetasDto->getCveMunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getDireccion() != "") || ($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $domiciliosofendidoscarpetasDto->getDireccion() . "'";
            if (($domiciliosofendidoscarpetasDto->getColonia() != "") || ($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $domiciliosofendidoscarpetasDto->getColonia() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumInterior() != "") || ($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $domiciliosofendidoscarpetasDto->getNumInterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getNumExterior() != "") || ($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $domiciliosofendidoscarpetasDto->getNumExterior() . "'";
            if (($domiciliosofendidoscarpetasDto->getCp() != "") || ($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcp() != "") {
            $sql.="cp='" . $domiciliosofendidoscarpetasDto->getCp() . "'";
            if (($domiciliosofendidoscarpetasDto->getLatitud() != "") || ($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlatitud() != "") {
            $sql.="latitud='" . $domiciliosofendidoscarpetasDto->getLatitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getLongitud() != "") || ($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getlongitud() != "") {
            $sql.="longitud='" . $domiciliosofendidoscarpetasDto->getLongitud() . "'";
            if (($domiciliosofendidoscarpetasDto->getRecidenciaHabitual() != "") || ($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getrecidenciaHabitual() != "") {
            $sql.="recidenciaHabitual='" . $domiciliosofendidoscarpetasDto->getRecidenciaHabitual() . "'";
            if (($domiciliosofendidoscarpetasDto->getEstado() != "") || ($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getestado() != "") {
            $sql.="estado='" . $domiciliosofendidoscarpetasDto->getEstado() . "'";
            if (($domiciliosofendidoscarpetasDto->getMunicipio() != "") || ($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getmunicipio() != "") {
            $sql.="municipio='" . $domiciliosofendidoscarpetasDto->getMunicipio() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveConvivencia() != "") || ($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveConvivencia() != "") {
            $sql.="cveConvivencia='" . $domiciliosofendidoscarpetasDto->getCveConvivencia() . "'";
            if (($domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() != "") || ($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() != "") {
            $sql.="cveTipoDeVivienda='" . $domiciliosofendidoscarpetasDto->getCveTipoDeVivienda() . "'";
            if (($domiciliosofendidoscarpetasDto->getActivo() != "") || ($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $domiciliosofendidoscarpetasDto->getActivo() . "'";
            if (($domiciliosofendidoscarpetasDto->getFechaRegistro() != "") || ($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $domiciliosofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($domiciliosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($domiciliosofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $domiciliosofendidoscarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DomiciliosofendidoscarpetasDTO();
                    $tmp[$contador]->setIdDomicilioOfendidoCarpeta($row["idDomicilioOfendidoCarpeta"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
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
     * Modificar domicilios ofendidos carpetas
     */
    public function modificarDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosofendidoscarpetas SET ";
        $sql.=" DomicilioProcesal='" . $domiciliosofendidoscarpetasDto->getDomicilioProcesal() . "'";
        $sql.=" ,cvePais='" . $domiciliosofendidoscarpetasDto->getcvePais() . "'";
        $sql.=" ,cveEstado='" . $domiciliosofendidoscarpetasDto->getcveEstado() . "'";
        $sql.=" ,cveMunicipio='" . $domiciliosofendidoscarpetasDto->getcveMunicipio() . "'";
        $sql.=" ,direccion='" . $domiciliosofendidoscarpetasDto->getdireccion() . "'";
        $sql.=" ,colonia='" . $domiciliosofendidoscarpetasDto->getcolonia() . "'";
        $sql.=" ,numInterior='" . $domiciliosofendidoscarpetasDto->getnumInterior() . "'";
        $sql.=" ,numExterior='" . $domiciliosofendidoscarpetasDto->getnumExterior() . "'";
        $sql.=" ,cp='" . $domiciliosofendidoscarpetasDto->getcp() . "'";
        $sql.=" ,latitud='" . $domiciliosofendidoscarpetasDto->getlatitud() . "'";
        $sql.=" ,longitud='" . $domiciliosofendidoscarpetasDto->getlongitud() . "'";
        $sql.=" ,recidenciaHabitual='" . $domiciliosofendidoscarpetasDto->getrecidenciaHabitual() . "'";
        $sql.=" ,estado='" . $domiciliosofendidoscarpetasDto->getestado() . "'";
        $sql.=" ,municipio='" . $domiciliosofendidoscarpetasDto->getmunicipio() . "'";
        $sql.=" ,cveConvivencia='" . $domiciliosofendidoscarpetasDto->getcveConvivencia() . "'";
        $sql.=" ,cveTipoDeVivienda='" . $domiciliosofendidoscarpetasDto->getcveTipoDeVivienda() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DomiciliosofendidoscarpetasDTO();
            $tmp->setIdDomicilioOfendidoCarpeta($domiciliosofendidoscarpetasDto->getIdDomicilioOfendidoCarpeta());
            $tmp = $this->selectDomiciliosofendidoscarpetas($tmp, "", $this->_proveedor);
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
    
    /**
     * para eliminar el domicilio del ofendido por el campo idDomicilioOfendidoCarpeta se se modifica el campo activo a 'N'
     * @param $domiciliosofendidoscarpetasDto
     * @param null $proveedor
     * @return bool
     */
    public function eliminarDomiciliosOfendidoByIdOfendido($domiciliosofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldomiciliosofendidoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idDomicilioOfendidoCarpeta='" . $domiciliosofendidoscarpetasDto->getIdDomicilioOfendidoCarpeta() . "'";

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
    
}

?>