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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImpofedelsolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImpofedelsolicitudes($impofedelsolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimpofedelsolicitudes(";
        if ($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud";
            if (($impofedelsolicitudesDto->getIdSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia";
            if (($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql.="idOfendidoSolicitud";
            if (($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud";
            if (($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveModalidad() != "") {
            $sql.="cveModalidad";
            if (($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveComision() != "") {
            $sql.="cveComision";
            if (($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConcurso() != "") {
            $sql.="cveConcurso";
            if (($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden";
            if (($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision";
            if (($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito";
            if (($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion";
            if (($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion";
            if (($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveEntidad() != "") {
            $sql.="cveEntidad";
            if (($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion";
            if (($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe";
            if (($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getCveTerminacion() != "") {
            $sql.="CveTerminacion";
            if (($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getactivo() != "") {
            $sql.="activo";
            if (($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getfechaDelito() != "") {
            $sql.="fechaDelito";
            if (($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getdireccion() != "") {
            $sql.="direccion";
            if (($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcolonia() != "") {
            $sql.="colonia";
            if (($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior";
            if (($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior";
            if (($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcp() != "") {
            $sql.="cp";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";

        $sql.=") VALUES(";
        if ($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getidImpOfeDelSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getidSolicitudAudiencia() . "'";
            if (($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getidImputadoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getidDelitoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveModalidad() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveModalidad() . "'";
            if (($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveComision() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveComision() . "'";
            if (($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConcurso() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveConcurso() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveClasificacionDelitoOrden() . "'";
            if (($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveElementoComision() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveElementoComision() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveClasificacionDelito() . "'";
            if (($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveFormaAccion() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveFormaAccion() . "'";
            if (($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConsumacion() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveConsumacion() . "'";
            if (($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveMunicipio() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveMunicipio() . "'";
            if (($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveEntidad() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveEntidad() . "'";
            if (($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveGradoParticipacion() . "'";
            if (($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcveRelacionImpOfe() . "'";
            if (($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getCveTerminacion() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getCveTerminacion() . "'";
            if (($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getactivo() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getactivo() . "'";
            if (($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getfechaDelito() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getfechaDelito() . "'";
            if (($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getdireccion() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getdireccion() . "'";
            if (($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcolonia() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcolonia() . "'";
            if (($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumInterior() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getnumInterior() . "'";
            if (($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumExterior() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getnumExterior() . "'";
            if (($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcp() != "") {
            $sql.="'" . $impofedelsolicitudesDto->getcp() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql.=")";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelsolicitudesDTO();
            $tmp->setidImpOfeDelSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectImpofedelsolicitudes($tmp, "", $this->_proveedor);
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

    public function updateImpofedelsolicitudes($impofedelsolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelsolicitudes SET ";
        $sql.=" idImputadoSolicitud='" . $impofedelsolicitudesDto->getidImputadoSolicitud() . "'";
        $sql.=" ,idOfendidoSolicitud='" . $impofedelsolicitudesDto->getidOfendidoSolicitud() . "'";
        $sql.=" ,idDelitoSolicitud='" . $impofedelsolicitudesDto->getidDelitoSolicitud() . "'";
        $sql.=" ,cveModalidad='" . $impofedelsolicitudesDto->getcveModalidad() . "'";
        $sql.=" ,cveComision='" . $impofedelsolicitudesDto->getcveComision() . "'";
        $sql.=" ,cveConcurso='" . $impofedelsolicitudesDto->getcveConcurso() . "'";
        $sql.=" ,cveClasificacionDelitoOrden='" . $impofedelsolicitudesDto->getcveClasificacionDelitoOrden() . "'";
        $sql.=" ,cveElementoComision='" . $impofedelsolicitudesDto->getcveElementoComision() . "'";
        $sql.=" ,cveClasificacionDelito='" . $impofedelsolicitudesDto->getcveClasificacionDelito() . "'";
        $sql.=" ,cveFormaAccion='" . $impofedelsolicitudesDto->getcveFormaAccion() . "'";
        $sql.=" ,cveMunicipio='" . $impofedelsolicitudesDto->getcveMunicipio() . "'";
        $sql.=" ,cveEntidad='" . $impofedelsolicitudesDto->getcveEntidad() . "'";
        $sql.=" ,cveGradoParticipacion='" . $impofedelsolicitudesDto->getcveGradoParticipacion() . "'";
        $sql.=" ,cveRelacionImpOfe='" . $impofedelsolicitudesDto->getcveRelacionImpOfe() . "'";
        if ($impofedelsolicitudesDto->getCveTerminacion() != "") {
            $sql.=" ,CveTerminacion='" . $impofedelsolicitudesDto->getCveTerminacion() . "'";
        }
        $sql.=" ,activo='" . $impofedelsolicitudesDto->getactivo() . "'";
        $sql.=" ,fechaDelito='" . $impofedelsolicitudesDto->getfechaDelito() . "'";
        $sql.=" ,direccion='" . $impofedelsolicitudesDto->getdireccion() . "'";
        $sql.=" ,colonia='" . $impofedelsolicitudesDto->getcolonia() . "'";
        $sql.=" ,numInterior='" . $impofedelsolicitudesDto->getnumInterior() . "'";
        $sql.=" ,numExterior='" . $impofedelsolicitudesDto->getnumExterior() . "'";
        $sql.=" ,cp='" . $impofedelsolicitudesDto->getcp() . "'";
        $sql.=" ,fechaActualizacion = now()";
        $sql.=" WHERE idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getidImpOfeDelSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelsolicitudesDTO();
            $tmp->setidImpOfeDelSolicitud($impofedelsolicitudesDto->getidImpOfeDelSolicitud());
            $tmp = $this->selectImpofedelsolicitudes($tmp, "", $this->_proveedor);
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

    public function updateImpofedelsolicitudesRSP($impofedelsolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelsolicitudes SET ";

        if ($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getidImpOfeDelSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $impofedelsolicitudesDto->getidSolicitudAudiencia() . "'";
            if (($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $impofedelsolicitudesDto->getidImputadoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql.="idOfendidoSolicitud='" . $impofedelsolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud='" . $impofedelsolicitudesDto->getidDelitoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveModalidad() != "") {
            $sql.="cveModalidad='" . $impofedelsolicitudesDto->getcveModalidad() . "'";
            if (($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveComision() != "") {
            $sql.="cveComision='" . $impofedelsolicitudesDto->getcveComision() . "'";
            if (($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConcurso() != "") {
            $sql.="cveConcurso='" . $impofedelsolicitudesDto->getcveConcurso() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden='" . $impofedelsolicitudesDto->getcveClasificacionDelitoOrden() . "'";
            if (($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision='" . $impofedelsolicitudesDto->getcveElementoComision() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $impofedelsolicitudesDto->getcveClasificacionDelito() . "'";
            if (($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion='" . $impofedelsolicitudesDto->getcveFormaAccion() . "'";
            if (($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion='" . $impofedelsolicitudesDto->getcveConsumacion() . "'";
            if (($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $impofedelsolicitudesDto->getcveMunicipio() . "'";
            if (($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveEntidad() != "") {
            $sql.="cveEntidad='" . $impofedelsolicitudesDto->getcveEntidad() . "'";
            if (($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion='" . $impofedelsolicitudesDto->getcveGradoParticipacion() . "'";
            if (($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe='" . $impofedelsolicitudesDto->getcveRelacionImpOfe() . "'";
            if (($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getCveTerminacion() != "") {
            $sql.="CveTerminacion='" . $impofedelsolicitudesDto->getCveTerminacion() . "'";
            if (($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $impofedelsolicitudesDto->getactivo() . "'";
            if (($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getfechaDelito() != "") {
            $sql.="fechaDelito='" . $impofedelsolicitudesDto->getfechaDelito() . "'";
            if (($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getdireccion() != "") {
            $sql.="direccion='" . $impofedelsolicitudesDto->getdireccion() . "'";
            if (($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcolonia() != "") {
            $sql.="colonia='" . $impofedelsolicitudesDto->getcolonia() . "'";
            if (($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior='" . $impofedelsolicitudesDto->getnumInterior() . "'";
            if (($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior='" . $impofedelsolicitudesDto->getnumExterior() . "'";
            if (($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=",";
            }
        }
        if ($impofedelsolicitudesDto->getcp() != "") {
            $sql.="cp='" . $impofedelsolicitudesDto->getcp() . "'";
        }

        $sql .= " ,fechaActualizacion = now()";
        $sql.=" WHERE idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getidImpOfeDelSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelsolicitudesDTO();
            $tmp->setidImpOfeDelSolicitud($impofedelsolicitudesDto->getidImpOfeDelSolicitud());
            $tmp = $this->selectImpofedelsolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteImpofedelsolicitudes($impofedelsolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimpofedelsolicitudes  WHERE idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getidImpOfeDelSolicitud() . "'";
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

    public function selectImpofedelsolicitudes($impofedelsolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImpOfeDelSolicitud,idSolicitudAudiencia,idImputadoSolicitud,idOfendidoSolicitud,idDelitoSolicitud,cveModalidad,cveComision,cveConcurso,cveClasificacionDelitoOrden,cveElementoComision,cveClasificacionDelito,cveFormaAccion,cveConsumacion,cveMunicipio,cveEntidad,cveGradoParticipacion,cveRelacionImpOfe,CveTerminacion,activo,fechaDelito,direccion,colonia,numInterior,numExterior,cp, fechaRegistro, fechaActualizacion FROM tblimpofedelsolicitudes ";
        if (($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") || ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getcveModalidad() != "") || ($impofedelsolicitudesDto->getcveComision() != "") || ($impofedelsolicitudesDto->getcveConcurso() != "") || ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getcveElementoComision() != "") || ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getcveFormaAccion() != "") || ($impofedelsolicitudesDto->getcveConsumacion() != "") || ($impofedelsolicitudesDto->getcveMunicipio() != "") || ($impofedelsolicitudesDto->getcveEntidad() != "") || ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getactivo() != "") || ($impofedelsolicitudesDto->getfechaDelito() != "") || ($impofedelsolicitudesDto->getdireccion() != "") || ($impofedelsolicitudesDto->getcolonia() != "") || ($impofedelsolicitudesDto->getnumInterior() != "") || ($impofedelsolicitudesDto->getnumExterior() != "") || ($impofedelsolicitudesDto->getcp() != "")) {
            $sql.=" WHERE ";
        }
        if ($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getIdImpOfeDelSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $impofedelsolicitudesDto->getIdSolicitudAudiencia() . "'";
            if (($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $impofedelsolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql.="idOfendidoSolicitud='" . $impofedelsolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud='" . $impofedelsolicitudesDto->getIdDelitoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveModalidad() != "") {
            $sql.="cveModalidad='" . $impofedelsolicitudesDto->getCveModalidad() . "'";
            if (($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveComision() != "") {
            $sql.="cveComision='" . $impofedelsolicitudesDto->getCveComision() . "'";
            if (($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveConcurso() != "") {
            $sql.="cveConcurso='" . $impofedelsolicitudesDto->getCveConcurso() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") {
            $sql.="cveClasificacionDelitoOrden='" . $impofedelsolicitudesDto->getCveClasificacionDelitoOrden() . "'";
            if (($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveElementoComision() != "") {
            $sql.="cveElementoComision='" . $impofedelsolicitudesDto->getCveElementoComision() . "'";
            if (($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") {
            $sql.="cveClasificacionDelito='" . $impofedelsolicitudesDto->getCveClasificacionDelito() . "'";
            if (($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveFormaAccion() != "") {
            $sql.="cveFormaAccion='" . $impofedelsolicitudesDto->getCveFormaAccion() . "'";
            if (($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveConsumacion() != "") {
            $sql.="cveConsumacion='" . $impofedelsolicitudesDto->getCveConsumacion() . "'";
            if (($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $impofedelsolicitudesDto->getCveMunicipio() . "'";
            if (($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveEntidad() != "") {
            $sql.="cveEntidad='" . $impofedelsolicitudesDto->getCveEntidad() . "'";
            if (($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") {
            $sql.="cveGradoParticipacion='" . $impofedelsolicitudesDto->getCveGradoParticipacion() . "'";
            if (($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") {
            $sql.="cveRelacionImpOfe='" . $impofedelsolicitudesDto->getCveRelacionImpOfe() . "'";
            if (($impofedelsolicitudesDto->getCveTerminacion() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getCveTerminacion() != "") {
            $sql.="CveTerminacion='" . $impofedelsolicitudesDto->getCveTerminacion() . "'";
            if (($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $impofedelsolicitudesDto->getActivo() . "'";
            if (($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getfechaDelito() != "") {
            $sql.="fechaDelito='" . $impofedelsolicitudesDto->getFechaDelito() . "'";
            if (($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getdireccion() != "") {
            $sql.="direccion='" . $impofedelsolicitudesDto->getDireccion() . "'";
            if (($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcolonia() != "") {
            $sql.="colonia='" . $impofedelsolicitudesDto->getColonia() . "'";
            if (($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getnumInterior() != "") {
            $sql.="numInterior='" . $impofedelsolicitudesDto->getNumInterior() . "'";
            if (($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getnumExterior() != "") {
            $sql.="numExterior='" . $impofedelsolicitudesDto->getNumExterior() . "'";
            if (($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getcp() != "") {
            $sql.="cp='" . $impofedelsolicitudesDto->getCp() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ImpofedelsolicitudesDTO();
                    $tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setIdDelitoSolicitud($row["idDelitoSolicitud"]);
                    $tmp[$contador]->setCveModalidad($row["cveModalidad"]);
                    $tmp[$contador]->setCveComision($row["cveComision"]);
                    $tmp[$contador]->setCveConcurso($row["cveConcurso"]);
                    $tmp[$contador]->setCveClasificacionDelitoOrden($row["cveClasificacionDelitoOrden"]);
                    $tmp[$contador]->setCveElementoComision($row["cveElementoComision"]);
                    $tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
                    $tmp[$contador]->setCveFormaAccion($row["cveFormaAccion"]);
                    $tmp[$contador]->setCveConsumacion($row["cveConsumacion"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setCveEntidad($row["cveEntidad"]);
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

    public function validaExiste($impofedelsolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImpOfeDelSolicitud,idSolicitudAudiencia,idImputadoSolicitud,idOfendidoSolicitud,idDelitoSolicitud,cveModalidad,cveComision,cveConcurso,cveClasificacionDelitoOrden,cveElementoComision,cveClasificacionDelito,cveFormaAccion,cveConsumacion,cveMunicipio,cveEntidad,cveGradoParticipacion,cveRelacionImpOfe,CveTerminacion,activo,fechaDelito,direccion,colonia,numInterior,numExterior,cp, fechaRegistro, fechaActualizacion FROM tblimpofedelsolicitudes ";
        if (($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") || ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getcveModalidad() != "") || ($impofedelsolicitudesDto->getcveComision() != "") || ($impofedelsolicitudesDto->getcveConcurso() != "") || ($impofedelsolicitudesDto->getcveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getcveElementoComision() != "") || ($impofedelsolicitudesDto->getcveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getcveFormaAccion() != "") || ($impofedelsolicitudesDto->getcveConsumacion() != "") || ($impofedelsolicitudesDto->getcveMunicipio() != "") || ($impofedelsolicitudesDto->getcveEntidad() != "") || ($impofedelsolicitudesDto->getcveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getcveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getactivo() != "") || ($impofedelsolicitudesDto->getfechaDelito() != "") || ($impofedelsolicitudesDto->getdireccion() != "") || ($impofedelsolicitudesDto->getcolonia() != "") || ($impofedelsolicitudesDto->getnumInterior() != "") || ($impofedelsolicitudesDto->getnumExterior() != "") || ($impofedelsolicitudesDto->getcp() != "")) {
            $sql.=" WHERE ";
        }
        if ($impofedelsolicitudesDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getIdImpOfeDelSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdSolicitudAudiencia() != "") || ($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $impofedelsolicitudesDto->getIdSolicitudAudiencia() . "'";
            if (($impofedelsolicitudesDto->getIdImputadoSolicitud() != "") || ($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $impofedelsolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdOfendidoSolicitud() != "") || ($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql.="idOfendidoSolicitud='" . $impofedelsolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getIdDelitoSolicitud() != "") || ($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud='" . $impofedelsolicitudesDto->getIdDelitoSolicitud() . "'";
            if (($impofedelsolicitudesDto->getCveModalidad() != "") || ($impofedelsolicitudesDto->getCveComision() != "") || ($impofedelsolicitudesDto->getCveConcurso() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelitoOrden() != "") || ($impofedelsolicitudesDto->getCveElementoComision() != "") || ($impofedelsolicitudesDto->getCveClasificacionDelito() != "") || ($impofedelsolicitudesDto->getCveFormaAccion() != "") || ($impofedelsolicitudesDto->getCveConsumacion() != "") || ($impofedelsolicitudesDto->getCveMunicipio() != "") || ($impofedelsolicitudesDto->getCveEntidad() != "") || ($impofedelsolicitudesDto->getCveGradoParticipacion() != "") || ($impofedelsolicitudesDto->getCveRelacionImpOfe() != "") || ($impofedelsolicitudesDto->getActivo() != "") || ($impofedelsolicitudesDto->getFechaDelito() != "") || ($impofedelsolicitudesDto->getDireccion() != "") || ($impofedelsolicitudesDto->getColonia() != "") || ($impofedelsolicitudesDto->getNumInterior() != "") || ($impofedelsolicitudesDto->getNumExterior() != "") || ($impofedelsolicitudesDto->getCp() != "")) {
                $sql.=" AND ";
            }
        }
        if ($impofedelsolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $impofedelsolicitudesDto->getActivo() . "'";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ImpofedelsolicitudesDTO();
                    $tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setIdDelitoSolicitud($row["idDelitoSolicitud"]);
                    $tmp[$contador]->setCveModalidad($row["cveModalidad"]);
                    $tmp[$contador]->setCveComision($row["cveComision"]);
                    $tmp[$contador]->setCveConcurso($row["cveConcurso"]);
                    $tmp[$contador]->setCveClasificacionDelitoOrden($row["cveClasificacionDelitoOrden"]);
                    $tmp[$contador]->setCveElementoComision($row["cveElementoComision"]);
                    $tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
                    $tmp[$contador]->setCveFormaAccion($row["cveFormaAccion"]);
                    $tmp[$contador]->setCveConsumacion($row["cveConsumacion"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setCveEntidad($row["cveEntidad"]);
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

    public function eliminaImpodelsolicitudes($impofedelsolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimpofedelsolicitudes SET ";
        $sql .= " activo = 'N'";
        $sql .= " ,fechaActualizacion = now()";
        $sql .= " WHERE idImpOfeDelSolicitud='" . $impofedelsolicitudesDto->getIdImpOfeDelSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImpofedelsolicitudesDTO();
            $tmp->setIdImpOfeDelSolicitud($impofedelsolicitudesDto->getIdImpOfeDelSolicitud());
            $tmp = $this->selectImpofedelsolicitudes($tmp, "", $this->_proveedor);
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