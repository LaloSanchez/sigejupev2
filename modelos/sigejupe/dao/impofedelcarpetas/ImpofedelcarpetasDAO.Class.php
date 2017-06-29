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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImpofedelcarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImpofedelcarpetas($impofedelcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimpofedelcarpetas(";
        if ($impofedelcarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta";
            if (($impofedelcarpetasDto->getIdCarpetaJudicial() != "") || ($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta";
            if (($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidDelitoCarpeta() != "") {
            $sql.="idDelitoCarpeta";
            if (($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveModalidad() != "") {
            $sql.="cveModalidad";
            if (($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveComision() != "") {
            $sql.="cveComision";
            if (($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConcurso() != "") {
            $sql.="cveConcurso";
            if (($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden";
            if (($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision";
            if (($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito";
            if (($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveEntidad() != "") {
            $sql.="cveEntidad";
            if (($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion";
            if (($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion";
            if (($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion";
            if (($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe";
            if (($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getCveTerminacion() != "") {
            $sql.="cveTerminacion";
            if (($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getactivo() != "") {
            $sql.="activo";
            if (($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getfechaDelito() != "") {
            $sql.="fechaDelito";
            if (($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getdireccion() != "") {
            $sql.="direccion";
            if (($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcolonia() != "") {
            $sql.="colonia";
            if (($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumInterior() != "") {
            $sql.="numInterior";
            if (($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumExterior() != "") {
            $sql.="numExterior";
            if (($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcp() != "") {
            $sql.="cp";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($impofedelcarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="'" . $impofedelcarpetasDto->getidImpOfeDelCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdCarpetaJudicial() != "") || ($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="'" . $impofedelcarpetasDto->getidCarpetaJudicial() . "'";
            if (($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="'" . $impofedelcarpetasDto->getidImputadoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="'" . $impofedelcarpetasDto->getidOfendidoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidDelitoCarpeta() != "") {
            $sql.="'" . $impofedelcarpetasDto->getidDelitoCarpeta() . "'";
            if (($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || (($impofedelcarpetasDto->getCveTerminacion() != "") || $impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveModalidad() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveModalidad() . "'";
            if (($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveComision() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveComision() . "'";
            if (($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConcurso() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveConcurso() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveClasificacionDelitoOrden() . "'";
            if (($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveElementoComision() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveElementoComision() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelito() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveClasificacionDelito() . "'";
            if (($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveMunicipio() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveMunicipio() . "'";
            if (($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveEntidad() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveEntidad() . "'";
            if (($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveFormaAccion() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveFormaAccion() . "'";
            if (($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConsumacion() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveConsumacion() . "'";
            if (($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveGradoParticipacion() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveGradoParticipacion() . "'";
            if (($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveRelacionImpOfe() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcveRelacionImpOfe() . "'";
            if (($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getCveTerminacion() != "") {
            $sql.="'" . $impofedelcarpetasDto->getCveTerminacion() . "'";
            if (($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getactivo() != "") {
            $sql.="'" . $impofedelcarpetasDto->getactivo() . "'";
            if (($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getfechaDelito() != "") {
            $sql.="'" . $impofedelcarpetasDto->getfechaDelito() . "'";
            if (($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getdireccion() != "") {
            $sql.="'" . $impofedelcarpetasDto->getdireccion() . "'";
            if (($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcolonia() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcolonia() . "'";
            if (($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumInterior() != "") {
            $sql.="'" . $impofedelcarpetasDto->getnumInterior() . "'";
            if (($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumExterior() != "") {
            $sql.="'" . $impofedelcarpetasDto->getnumExterior() . "'";
            if (($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcp() != "") {
            $sql.="'" . $impofedelcarpetasDto->getcp() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        
        error_log($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelcarpetasDTO();
            $tmp->setidImpOfeDelCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectImpofedelcarpetas($tmp, "", $this->_proveedor);
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

    public function updateImpofedelcarpetas($impofedelcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelcarpetas SET ";
        if ($impofedelcarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getidImpOfeDelCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdCarpetaJudicial() != "") || ($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $impofedelcarpetasDto->getidCarpetaJudicial() . "'";
            if (($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $impofedelcarpetasDto->getidImputadoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $impofedelcarpetasDto->getidOfendidoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getidDelitoCarpeta() != "") {
            $sql.="idDelitoCarpeta='" . $impofedelcarpetasDto->getidDelitoCarpeta() . "'";
            if (($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveModalidad() != "") {
            $sql.="cveModalidad='" . $impofedelcarpetasDto->getcveModalidad() . "'";
            if (($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveComision() != "") {
            $sql.="cveComision='" . $impofedelcarpetasDto->getcveComision() . "'";
            if (($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConcurso() != "") {
            $sql.="cveConcurso='" . $impofedelcarpetasDto->getcveConcurso() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden='" . $impofedelcarpetasDto->getcveClasificacionDelitoOrden() . "'";
            if (($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision='" . $impofedelcarpetasDto->getcveElementoComision() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $impofedelcarpetasDto->getcveClasificacionDelito() . "'";
            if (($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $impofedelcarpetasDto->getcveMunicipio() . "'";
            if (($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveEntidad() != "") {
            $sql.="cveEntidad='" . $impofedelcarpetasDto->getcveEntidad() . "'";
            if (($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion='" . $impofedelcarpetasDto->getcveFormaAccion() . "'";
            if (($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion='" . $impofedelcarpetasDto->getcveConsumacion() . "'";
            if (($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion='" . $impofedelcarpetasDto->getcveGradoParticipacion() . "'";
            if (($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe='" . $impofedelcarpetasDto->getcveRelacionImpOfe() . "'";
            if (($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getCveTerminacion() != "") {
            $sql.="CveTerminacion='" . $impofedelcarpetasDto->getCveTerminacion() . "'";
            if (($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getactivo() != "") {
            $sql.="activo='" . $impofedelcarpetasDto->getactivo() . "'";
            if (($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getfechaDelito() != "") {
            $sql.="fechaDelito='" . $impofedelcarpetasDto->getfechaDelito() . "'";
            if (($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $impofedelcarpetasDto->getdireccion() . "'";
            if (($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $impofedelcarpetasDto->getcolonia() . "'";
            if (($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $impofedelcarpetasDto->getnumInterior() . "'";
            if (($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $impofedelcarpetasDto->getnumExterior() . "'";
            if (($impofedelcarpetasDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelcarpetasDto->getcp() != "") {
            $sql.="cp='" . $impofedelcarpetasDto->getcp() . "'";
        }
        $sql.=" WHERE idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getidImpOfeDelCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelcarpetasDTO();
            $tmp->setidImpOfeDelCarpeta($impofedelcarpetasDto->getidImpOfeDelCarpeta());
            $tmp = $this->selectImpofedelcarpetas($tmp, "", $this->_proveedor);
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

    public function deleteImpofedelcarpetas($impofedelcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimpofedelcarpetas  WHERE idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getidImpOfeDelCarpeta() . "'";
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

    public function selectImpofedelcarpetas($impofedelcarpetasDto, $orden = "", $proveedor = null, $param = null,$fields=null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if($fields === null){
           $sql .= " idImpOfeDelCarpeta,idCarpetaJudicial,idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta,cveModalidad,cveComision,cveConcurso,cveClasificacionDelitoOrden,cveElementoComision,cveClasificacionDelito,cveMunicipio,cveEntidad,cveFormaAccion,cveConsumacion,cveGradoParticipacion,cveRelacionImpOfe,CveTerminacion,activo,fechaDelito,direccion,colonia,numInterior,numExterior,cp,fechaRegistro,fechaActualizacion ";
        }else{
            $sql.=$fields;
        }
        $sql.=" FROM tblimpofedelcarpetas ";
        if (($impofedelcarpetasDto->getidImpOfeDelCarpeta() != "") || ($impofedelcarpetasDto->getidCarpetaJudicial() != "") || ($impofedelcarpetasDto->getidImputadoCarpeta() != "") || ($impofedelcarpetasDto->getidOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getidDelitoCarpeta() != "") || ($impofedelcarpetasDto->getcveModalidad() != "") || ($impofedelcarpetasDto->getcveComision() != "") || ($impofedelcarpetasDto->getcveConcurso() != "") || ($impofedelcarpetasDto->getcveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getcveElementoComision() != "") || ($impofedelcarpetasDto->getcveClasificacionDelito() != "") || ($impofedelcarpetasDto->getcveMunicipio() != "") || ($impofedelcarpetasDto->getcveEntidad() != "") || ($impofedelcarpetasDto->getcveFormaAccion() != "") || ($impofedelcarpetasDto->getcveConsumacion() != "") || ($impofedelcarpetasDto->getcveGradoParticipacion() != "") || ($impofedelcarpetasDto->getcveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getactivo() != "") || ($impofedelcarpetasDto->getfechaDelito() != "") || ($impofedelcarpetasDto->getdireccion() != "") || ($impofedelcarpetasDto->getcolonia() != "") || ($impofedelcarpetasDto->getnumInterior() != "") || ($impofedelcarpetasDto->getnumExterior() != "") || ($impofedelcarpetasDto->getcp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($impofedelcarpetasDto->getidImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdCarpetaJudicial() != "") || ($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $impofedelcarpetasDto->getIdCarpetaJudicial() . "'";
            if (($impofedelcarpetasDto->getIdImputadoCarpeta() != "") || ($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getidImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $impofedelcarpetasDto->getIdImputadoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdOfendidoCarpeta() != "") || ($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $impofedelcarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($impofedelcarpetasDto->getIdDelitoCarpeta() != "") || ($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getidDelitoCarpeta() != "") {
            $sql.="idDelitoCarpeta='" . $impofedelcarpetasDto->getIdDelitoCarpeta() . "'";
            if (($impofedelcarpetasDto->getCveModalidad() != "") || ($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveModalidad() != "") {
            $sql.="cveModalidad='" . $impofedelcarpetasDto->getCveModalidad() . "'";
            if (($impofedelcarpetasDto->getCveComision() != "") || ($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveComision() != "") {
            $sql.="cveComision='" . $impofedelcarpetasDto->getCveComision() . "'";
            if (($impofedelcarpetasDto->getCveConcurso() != "") || ($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveConcurso() != "") {
            $sql.="cveConcurso='" . $impofedelcarpetasDto->getCveConcurso() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelitoOrden() != "") || ($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden='" . $impofedelcarpetasDto->getCveClasificacionDelitoOrden() . "'";
            if (($impofedelcarpetasDto->getCveElementoComision() != "") || ($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision='" . $impofedelcarpetasDto->getCveElementoComision() . "'";
            if (($impofedelcarpetasDto->getCveClasificacionDelito() != "") || ($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $impofedelcarpetasDto->getCveClasificacionDelito() . "'";
            if (($impofedelcarpetasDto->getCveMunicipio() != "") || ($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $impofedelcarpetasDto->getCveMunicipio() . "'";
            if (($impofedelcarpetasDto->getCveEntidad() != "") || ($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveEntidad() != "") {
            $sql.="cveEntidad='" . $impofedelcarpetasDto->getCveEntidad() . "'";
            if (($impofedelcarpetasDto->getCveFormaAccion() != "") || ($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion='" . $impofedelcarpetasDto->getCveFormaAccion() . "'";
            if (($impofedelcarpetasDto->getCveConsumacion() != "") || ($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion='" . $impofedelcarpetasDto->getCveConsumacion() . "'";
            if (($impofedelcarpetasDto->getCveGradoParticipacion() != "") || ($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion='" . $impofedelcarpetasDto->getCveGradoParticipacion() . "'";
            if (($impofedelcarpetasDto->getCveRelacionImpOfe() != "") || ($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe='" . $impofedelcarpetasDto->getCveRelacionImpOfe() . "'";
            if (($impofedelcarpetasDto->getCveTerminacion() != "") || ($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getCveTerminacion() != "") {
            $sql.="CveTerminacion='" . $impofedelcarpetasDto->getCveTerminacion() . "'";
            if (($impofedelcarpetasDto->getActivo() != "") || ($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getactivo() != "") {
            $sql.="activo='" . $impofedelcarpetasDto->getActivo() . "'";
            if (($impofedelcarpetasDto->getFechaDelito() != "") || ($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getfechaDelito() != "") {
            $sql.="fechaDelito='" . $impofedelcarpetasDto->getFechaDelito() . "'";
            if (($impofedelcarpetasDto->getDireccion() != "") || ($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getdireccion() != "") {
            $sql.="direccion='" . $impofedelcarpetasDto->getDireccion() . "'";
            if (($impofedelcarpetasDto->getColonia() != "") || ($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcolonia() != "") {
            $sql.="colonia='" . $impofedelcarpetasDto->getColonia() . "'";
            if (($impofedelcarpetasDto->getNumInterior() != "") || ($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getnumInterior() != "") {
            $sql.="numInterior='" . $impofedelcarpetasDto->getNumInterior() . "'";
            if (($impofedelcarpetasDto->getNumExterior() != "") || ($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getnumExterior() != "") {
            $sql.="numExterior='" . $impofedelcarpetasDto->getNumExterior() . "'";
            if (($impofedelcarpetasDto->getCp() != "") || ($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getcp() != "") {
            $sql.="cp='" . $impofedelcarpetasDto->getCp() . "'";
            if (($impofedelcarpetasDto->getFechaRegistro() != "") || ($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $impofedelcarpetasDto->getFechaRegistro() . "'";
            if (($impofedelcarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelcarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $impofedelcarpetasDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $inicial="";
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
                    $tmp[$contador] = new ImpofedelcarpetasDTO();
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setIdDelitoCarpeta($row["idDelitoCarpeta"]);
                    $tmp[$contador]->setCveModalidad($row["cveModalidad"]);
                    $tmp[$contador]->setCveComision($row["cveComision"]);
                    $tmp[$contador]->setCveConcurso($row["cveConcurso"]);
                    $tmp[$contador]->setCveClasificacionDelitoOrden($row["cveClasificacionDelitoOrden"]);
                    $tmp[$contador]->setCveElementoComision($row["cveElementoComision"]);
                    $tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setCveEntidad($row["cveEntidad"]);
                    $tmp[$contador]->setCveFormaAccion($row["cveFormaAccion"]);
                    $tmp[$contador]->setCveConsumacion($row["cveConsumacion"]);
                    $tmp[$contador]->setCveGradoParticipacion($row["cveGradoParticipacion"]);
                    $tmp[$contador]->setCveRelacionImpOfe($row["cveRelacionImpOfe"]);
                    $tmp[$contador]->setCveTerminacion($row["CveTerminacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaDelito($row["fechaDelito"]);
                    $tmp[$contador]->setDireccion($row["direccion"]);
                    $tmp[$contador]->setColonia($row["colonia"]);
                    $tmp[$contador]->setNumInterior($row["numInterior"]);
                    $tmp[$contador]->setNumExterior($row["numExterior"]);
                    $tmp[$contador]->setCp($row["cp"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    } else { // HSAY VA 
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++){
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = $row[$fieldInfo->name];
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

    /*
     * Editar datos impofedel carpetas
     */
    public function modificarImpofedelcarpetas($impofedelcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelcarpetas SET ";
        $sql.=" idImputadoCarpeta='" . $impofedelcarpetasDto->getidImputadoCarpeta() . "'";
        $sql.=" ,idOfendidoCarpeta='" . $impofedelcarpetasDto->getidOfendidoCarpeta() . "'";
        $sql.=" ,idDelitoCarpeta='" . $impofedelcarpetasDto->getidDelitoCarpeta() . "'";
        $sql.=" ,cveModalidad='" . $impofedelcarpetasDto->getcveModalidad() . "'";
        $sql.=" ,cveComision='" . $impofedelcarpetasDto->getcveComision() . "'";
        $sql.=" ,cveConcurso='" . $impofedelcarpetasDto->getcveConcurso() . "'";
        $sql.=" ,cveClasificacionDelitoOrden='" . $impofedelcarpetasDto->getcveClasificacionDelitoOrden() . "'";
        $sql.=" ,cveElementoComision='" . $impofedelcarpetasDto->getcveElementoComision() . "'";
        $sql.=" ,cveClasificacionDelito='" . $impofedelcarpetasDto->getcveClasificacionDelito() . "'";
        $sql.=" ,cveMunicipio='" . $impofedelcarpetasDto->getcveMunicipio() . "'";
        $sql.=" ,cveEntidad='" . $impofedelcarpetasDto->getcveEntidad() . "'";
        $sql.=" ,cveFormaAccion='" . $impofedelcarpetasDto->getcveFormaAccion() . "'";
        $sql.=" ,cveConsumacion='" . $impofedelcarpetasDto->getcveConsumacion() . "'";
        $sql.=" ,cveGradoParticipacion='" . $impofedelcarpetasDto->getcveGradoParticipacion() . "'";
        $sql.=" ,cveRelacionImpOfe='" . $impofedelcarpetasDto->getcveRelacionImpOfe() . "'";
        //$sql.=" ,CveTerminacion='" . $impofedelcarpetasDto->getCveTerminacion() . "'";
        $sql.=" ,fechaDelito='" . $impofedelcarpetasDto->getfechaDelito() . "'";
        $sql.=" ,direccion='" . $impofedelcarpetasDto->getdireccion() . "'";
        $sql.=" ,colonia='" . $impofedelcarpetasDto->getcolonia() . "'";
        $sql.=" ,numInterior='" . $impofedelcarpetasDto->getnumInterior() . "'";
        $sql.=" ,numExterior='" . $impofedelcarpetasDto->getnumExterior() . "'";        
        $sql.=" ,cp='" . $impofedelcarpetasDto->getcp() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getidImpOfeDelCarpeta() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelcarpetasDTO();
            $tmp->setidImpOfeDelCarpeta($impofedelcarpetasDto->getidImpOfeDelCarpeta());
            $tmp = $this->selectImpofedelcarpetas($tmp, "", $this->_proveedor);
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
    public function eliminarImpofedelCarpetasByIdImpofedel($impofedelcarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelcarpetas SET activo='N'";

        $sql .= " WHERE idImpOfeDelCarpeta='" . $impofedelcarpetasDto->getIdImpOfeDelCarpeta() . "'";

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
