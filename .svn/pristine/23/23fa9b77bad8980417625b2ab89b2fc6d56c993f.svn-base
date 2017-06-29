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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class OrdenesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOrdenes($ordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblordenes(";
        if ($ordenesDto->getIdOrden() != "") {
            $sql.="idOrden";
            if (($ordenesDto->getIdSolicitudOrden() != "") || ($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getIdSolicitudOrden() != "") {
            $sql.="idSolicitudOrden";
            if (($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getCveRespuestaSolicitudOrden() != "") {
            $sql.="cveRespuestaSolicitudOrden";
            if (($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroEspecializadoOrden() != "") {
            $sql.="numeroEspecializadoOrden";
            if (($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroOrden() != "") {
            $sql.="numeroOrden";
            if (($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getAnioOrden() != "") {
            $sql.="anioOrden";
            if (($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSolicitud() != "") {
            $sql.="solicitud";
            if (($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNegada() != "") {
            $sql.="negada";
            if (($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getConcedida() != "") {
            $sql.="concedida";
            if (($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaPractica() != "") {
            $sql.="fechaPractica";
            if (($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraPractica() != "") {
            $sql.="horaPractica";
            if (($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasPractica() != "") {
            $sql.="horasPractica";
            if (($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaInforme() != "") {
            $sql.="fechaInforme";
            if (($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraInforme() != "") {
            $sql.="horaInforme";
            if (($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasInforme() != "") {
            $sql.="horasInforme";
            if (($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta";
            if (($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getQr() != "") {
            $sql.="qr";
            if (($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFirmaDigital() != "") {
            $sql.="firmaDigital";
            if (($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSelloDigital() != "") {
            $sql.="selloDigital";
            if (($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getEmail() != "") {
            $sql.="email";
            if (($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ordenesDto->getIdOrden() != "") {
            $sql.="'" . $ordenesDto->getIdOrden() . "'";
            if (($ordenesDto->getIdSolicitudOrden() != "") || ($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getIdSolicitudOrden() != "") {
            $sql.="'" . $ordenesDto->getIdSolicitudOrden() . "'";
            if (($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getCveRespuestaSolicitudOrden() != "") {
            $sql.="'" . $ordenesDto->getCveRespuestaSolicitudOrden() . "'";
            if (($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroEspecializadoOrden() != "") {
            $sql.="'" . $ordenesDto->getNumeroEspecializadoOrden() . "'";
            if (($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroOrden() != "") {
            $sql.="'" . $ordenesDto->getNumeroOrden() . "'";
            if (($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getAnioOrden() != "") {
            $sql.="'" . $ordenesDto->getAnioOrden() . "'";
            if (($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSolicitud() != "") {
            $sql.="'" . $ordenesDto->getSolicitud() . "'";
            if (($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNegada() != "") {
            $sql.="'" . $ordenesDto->getNegada() . "'";
            if (($ordenesDto->getConcedida() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getConcedida() != "") {
            $sql.="'" . $ordenesDto->getConcedida() . "'";
            if (($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaPractica() != "") {
            $sql.="'" . $ordenesDto->getFechaPractica() . "'";
            if (($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraPractica() != "") {
            $sql.="'" . $ordenesDto->getHoraPractica() . "'";
            if (($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasPractica() != "") {
            $sql.="'" . $ordenesDto->getHorasPractica() . "'";
            if (($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaInforme() != "") {
            $sql.="'" . $ordenesDto->getFechaInforme() . "'";
            if (($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraInforme() != "") {
            $sql.="'" . $ordenesDto->getHoraInforme() . "'";
            if (($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasInforme() != "") {
            $sql.="'" . $ordenesDto->getHorasInforme() . "'";
            if (($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaRespuesta() != "") {
            $sql.="'" . $ordenesDto->getFechaRespuesta() . "'";
            if (($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getQr() != "") {
            $sql.="'" . $ordenesDto->getQr() . "'";
            if (($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFirmaDigital() != "") {
            $sql.="'" . $ordenesDto->getFirmaDigital() . "'";
            if (($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSelloDigital() != "") {
            $sql.="'" . $ordenesDto->getSelloDigital() . "'";
            if (($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getEmail() != "") {
            $sql.="'" . $ordenesDto->getEmail() . "'";
            if (($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getMotivoCancelacion() != "") {
            $sql.="'" . $ordenesDto->getMotivoCancelacion() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OrdenesDTO();
            $tmp->setidOrden($this->_proveedor->lastID());
            $tmp = $this->selectOrdenes($tmp, "", "", $this->_proveedor);
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

    public function updateOrdenes($ordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblordenes SET ";
        if ($ordenesDto->getIdOrden() != "") {
            $sql.="idOrden='" . $ordenesDto->getIdOrden() . "'";
            if (($ordenesDto->getIdSolicitudOrden() != "") || ($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getIdSolicitudOrden() != "") {
            $sql.="idSolicitudOrden='" . $ordenesDto->getIdSolicitudOrden() . "'";
            if (($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getCveRespuestaSolicitudOrden() != "") {
            $sql.="cveRespuestaSolicitudOrden='" . $ordenesDto->getCveRespuestaSolicitudOrden() . "'";
            if (($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroEspecializadoOrden() != "") {
            $sql.="numeroEspecializadoOrden='" . $ordenesDto->getNumeroEspecializadoOrden() . "'";
            if (($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNumeroOrden() != "") {
            $sql.="numeroOrden='" . $ordenesDto->getNumeroOrden() . "'";
            if (($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getAnioOrden() != "") {
            $sql.="anioOrden='" . $ordenesDto->getAnioOrden() . "'";
            if (($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSolicitud() != "") {
            $sql.="solicitud='" . $ordenesDto->getSolicitud() . "'";
            if (($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getNegada() != "") {
            $sql.="negada='" . $ordenesDto->getNegada() . "'";
            if (($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getConcedida() != "") {
            $sql.="concedida='" . $ordenesDto->getConcedida() . "'";
            if (($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getOficio() != "") {
            $sql.="oficio='" . $ordenesDto->getOficio() . "'";
            if (($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaPractica() != "") {
            $sql.="fechaPractica='" . $ordenesDto->getFechaPractica() . "'";
            if (($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraPractica() != "") {
            $sql.="horaPractica='" . $ordenesDto->getHoraPractica() . "'";
            if (($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasPractica() != "") {
            $sql.="horasPractica='" . $ordenesDto->getHorasPractica() . "'";
            if (($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaInforme() != "") {
            $sql.="fechaInforme='" . $ordenesDto->getFechaInforme() . "'";
            if (($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHoraInforme() != "") {
            $sql.="horaInforme='" . $ordenesDto->getHoraInforme() . "'";
            if (($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getHorasInforme() != "") {
            $sql.="horasInforme='" . $ordenesDto->getHorasInforme() . "'";
            if (($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $ordenesDto->getFechaRespuesta() . "'";
            if (($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getQr() != "") {
            $sql.="qr='" . $ordenesDto->getQr() . "'";
            if (($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFirmaDigital() != "") {
            $sql.="firmaDigital='" . $ordenesDto->getFirmaDigital() . "'";
            if (($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getSelloDigital() != "") {
            $sql.="selloDigital='" . $ordenesDto->getSelloDigital() . "'";
            if (($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ordenesDto->getFechaRegistro() . "'";
            if (($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ordenesDto->getFechaActualizacion() . "'";
            if (($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getEmail() != "") {
            $sql.="email='" . $ordenesDto->getEmail() . "'";
            if (($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($ordenesDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $ordenesDto->getMotivoCancelacion() . "'";
        }
        $sql.=" WHERE idOrden='" . $ordenesDto->getIdOrden() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OrdenesDTO();
            $tmp->setidOrden($ordenesDto->getIdOrden());
            $tmp = $this->selectOrdenes($tmp, "", "", $this->_proveedor);
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

    public function deleteOrdenes($ordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblordenes  WHERE idOrden='" . $ordenesDto->getIdOrden() . "'";
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

    public function selectOrdenes($ordenesDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= "idOrden,idSolicitudOrden,cveRespuestaSolicitudOrden,numeroEspecializadoOrden,numeroOrden,anioOrden,solicitud,negada,concedida,oficio,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email,motivoCancelacion ";
        } else {

            $sql .= $param["fields"];
        }

        $sql .= "FROM tblordenes ";

        if (($ordenesDto->getIdOrden() != "") || ($ordenesDto->getIdSolicitudOrden() != "") || ($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($ordenesDto->getIdOrden() != "") {
            $sql.="idOrden='" . $ordenesDto->getIdOrden() . "'";
            if (($ordenesDto->getIdSolicitudOrden() != "") || ($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getIdSolicitudOrden() != "") {
            $sql.="idSolicitudOrden='" . $ordenesDto->getIdSolicitudOrden() . "'";
            if (($ordenesDto->getCveRespuestaSolicitudOrden() != "") || ($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getCveRespuestaSolicitudOrden() != "") {
            $sql.="cveRespuestaSolicitudOrden='" . $ordenesDto->getCveRespuestaSolicitudOrden() . "'";
            if (($ordenesDto->getNumeroEspecializadoOrden() != "") || ($ordenesDto->getNumeroOrden() != "") || ($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getNumeroEspecializadoOrden() != "") {
            $sql.="numeroEspecializadoOrden='" . $ordenesDto->getNumeroEspecializadoOrden() . "'";
            if (($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getNumeroOrden() != "") {
            $sql.="numeroOrden='" . $ordenesDto->getNumeroOrden() . "'";
            if (($ordenesDto->getAnioOrden() != "") || ($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getAnioOrden() != "") {
            $sql.="anioOrden='" . $ordenesDto->getAnioOrden() . "'";
            if (($ordenesDto->getSolicitud() != "") || ($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getSolicitud() != "") {
            $sql.="solicitud='" . $ordenesDto->getSolicitud() . "'";
            if (($ordenesDto->getNegada() != "") || ($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getNegada() != "") {
            $sql.="negada='" . $ordenesDto->getNegada() . "'";
            if (($ordenesDto->getConcedida() != "") || ($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getConcedida() != "") {
            $sql.="concedida='" . $ordenesDto->getConcedida() . "'";
            if (($ordenesDto->getOficio() != "") || ($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getOficio() != "") {
            $sql.="oficio='" . $ordenesDto->getOficio() . "'";
            if (($ordenesDto->getFechaPractica() != "") || ($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFechaPractica() != "") {
            $sql.="fechaPractica='" . $ordenesDto->getFechaPractica() . "'";
            if (($ordenesDto->getHoraPractica() != "") || ($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getHoraPractica() != "") {
            $sql.="horaPractica='" . $ordenesDto->getHoraPractica() . "'";
            if (($ordenesDto->getHorasPractica() != "") || ($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getHorasPractica() != "") {
            $sql.="horasPractica='" . $ordenesDto->getHorasPractica() . "'";
            if (($ordenesDto->getFechaInforme() != "") || ($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFechaInforme() != "") {
            $sql.="fechaInforme='" . $ordenesDto->getFechaInforme() . "'";
            if (($ordenesDto->getHoraInforme() != "") || ($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getHoraInforme() != "") {
            $sql.="horaInforme='" . $ordenesDto->getHoraInforme() . "'";
            if (($ordenesDto->getHorasInforme() != "") || ($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getHorasInforme() != "") {
            $sql.="horasInforme='" . $ordenesDto->getHorasInforme() . "'";
            if (($ordenesDto->getFechaRespuesta() != "") || ($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $ordenesDto->getFechaRespuesta() . "'";
            if (($ordenesDto->getQr() != "") || ($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getQr() != "") {
            $sql.="qr='" . $ordenesDto->getQr() . "'";
            if (($ordenesDto->getFirmaDigital() != "") || ($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFirmaDigital() != "") {
            $sql.="firmaDigital='" . $ordenesDto->getFirmaDigital() . "'";
            if (($ordenesDto->getSelloDigital() != "") || ($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getSelloDigital() != "") {
            $sql.="selloDigital='" . $ordenesDto->getSelloDigital() . "'";
            if (($ordenesDto->getFechaRegistro() != "") || ($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFechaRegistro() != "") {
            $sql.="Date(fechaRegistro)='" . $ordenesDto->getFechaRegistro() . "'";
            if (($ordenesDto->getFechaActualizacion() != "") || ($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ordenesDto->getFechaActualizacion() . "'";
            if (($ordenesDto->getEmail() != "") || ($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getEmail() != "") {
            $sql.="email='" . $ordenesDto->getEmail() . "'";
            if (($ordenesDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenesDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $ordenesDto->getMotivoCancelacion() . "'";
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                $helpSql = strpos($sql, " WHERE");
                if ($helpSql) {
                    $sql .= " AND ";
                } else {
                    $sql .= " WHERE ";
                }
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }

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
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new OrdenesDTO();
                        $tmp[$contador]->setIdOrden($row["idOrden"]);
                        $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                        $tmp[$contador]->setCveRespuestaSolicitudOrden($row["cveRespuestaSolicitudOrden"]);
                        $tmp[$contador]->setNumeroEspecializadoOrden($row["numeroEspecializadoOrden"]);
                        $tmp[$contador]->setNumeroOrden($row["numeroOrden"]);
                        $tmp[$contador]->setAnioOrden($row["anioOrden"]);
                        $tmp[$contador]->setSolicitud($row["solicitud"]);
                        $tmp[$contador]->setNegada($row["negada"]);
                        $tmp[$contador]->setConcedida($row["concedida"]);
                        $tmp[$contador]->setOficio($row["oficio"]);
                        $tmp[$contador]->setFechaPractica($row["fechaPractica"]);
                        $tmp[$contador]->setHoraPractica($row["horaPractica"]);
                        $tmp[$contador]->setHorasPractica($row["horasPractica"]);
                        $tmp[$contador]->setFechaInforme($row["fechaInforme"]);
                        $tmp[$contador]->setHoraInforme($row["horaInforme"]);
                        $tmp[$contador]->setHorasInforme($row["horasInforme"]);
                        $tmp[$contador]->setFechaRespuesta($row["fechaRespuesta"]);
                        $tmp[$contador]->setQr($row["qr"]);
                        $tmp[$contador]->setFirmaDigital($row["firmaDigital"]);
                        $tmp[$contador]->setSelloDigital($row["selloDigital"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setEmail($row["email"]);
                        $tmp[$contador]->setMotivoCancelacion($row["motivoCancelacion"]);
                        $contador++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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

    public function selectOrdenesNoSolicitud($ordenDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idOrden,idSolicitudOrden,cveRespuestaSolicitudOrden,numeroOrden,anioOrden,negada,concedida,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email,motivoCancelacion FROM tblordenes ";
        if (($ordenDto->getIdOrden() != "") || ($ordenDto->getidSolicitudOrden() != "") || ($ordenDto->getcveRespuestaSolicitudOrden() != "") || ($ordenDto->getnumeroOrden() != "") || ($ordenDto->getanioOrden() != "") || ($ordenDto->getsolicitud() != "") || ($ordenDto->getnegada() != "") || ($ordenDto->getconcedida() != "") || ($ordenDto->getfechaPractica() != "") || ($ordenDto->gethoraPractica() != "") || ($ordenDto->gethorasPractica() != "") || ($ordenDto->getfechaInforme() != "") || ($ordenDto->gethoraInforme() != "") || ($ordenDto->gethorasInforme() != "") || ($ordenDto->getfechaRespuesta() != "") || ($ordenDto->getqr() != "") || ($ordenDto->getfirmaDigital() != "") || ($ordenDto->getselloDigital() != "") || ($ordenDto->getfechaRegistro() != "") || ($ordenDto->getfechaActualizacion() != "") || ($ordenDto->getemail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($ordenDto->getIdOrden() != "") {
            $sql.="idOrden='" . $ordenDto->getIdCateo() . "'";
            if (($ordenDto->getIdSolicitudOrden() != "") || ($ordenDto->getCveRespuestaSolicitudOrden() != "") || ($ordenDto->getNumeroOrden() != "") || ($ordenDto->getAnioOrden() != "") || ($ordenDto->getSolicitud() != "") || ($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getidSolicitudOrden() != "") {
            $sql.="idSolicitudOrden='" . $ordenDto->getIdSolicitudOrden() . "'";
            if (($ordenDto->getCveRespuestaSolicitudOrden() != "") || ($ordenDto->getNumeroOrden() != "") || ($ordenDto->getAnioOrden() != "") || ($ordenDto->getSolicitud() != "") || ($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getcveRespuestaSolicitudOrden() != "") {
            $sql.="cveRespuestaSolicitudOrden='" . $ordenDto->getCveRespuestaSolicitudOrden() . "'";
            if (($ordenDto->getNumeroOrden() != "") || ($ordenDto->getAnioOrden() != "") || ($ordenDto->getSolicitud() != "") || ($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getnumeroOrden() != "") {
            $sql.="numeroOrden='" . $ordenDto->getNumeroOrden() . "'";
            if (($ordenDto->getAnioOrden() != "") || ($ordenDto->getSolicitud() != "") || ($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getanioOrden() != "") {
            $sql.="anioOrden='" . $ordenDto->getAnioOrden() . "'";
            if (($ordenDto->getSolicitud() != "") || ($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getsolicitud() != "") {
            $sql.="solicitud='" . $ordenDto->getSolicitud() . "'";
            if (($ordenDto->getNegada() != "") || ($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getnegada() != "") {
            $sql.="negada='" . $ordenDto->getNegada() . "'";
            if (($ordenDto->getConcedida() != "") || ($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getconcedida() != "") {
            $sql.="concedida='" . $ordenDto->getConcedida() . "'";
            if (($ordenDto->getFechaPractica() != "") || ($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfechaPractica() != "") {
            $sql.="fechaPractica='" . $ordenDto->getFechaPractica() . "'";
            if (($ordenDto->getHoraPractica() != "") || ($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->gethoraPractica() != "") {
            $sql.="horaPractica='" . $ordenDto->getHoraPractica() . "'";
            if (($ordenDto->getHorasPractica() != "") || ($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->gethorasPractica() != "") {
            $sql.="horasPractica='" . $ordenDto->getHorasPractica() . "'";
            if (($ordenDto->getFechaInforme() != "") || ($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfechaInforme() != "") {
            $sql.="fechaInforme='" . $ordenDto->getFechaInforme() . "'";
            if (($ordenDto->getHoraInforme() != "") || ($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->gethoraInforme() != "") {
            $sql.="horaInforme='" . $ordenDto->getHoraInforme() . "'";
            if (($ordenDto->getHorasInforme() != "") || ($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->gethorasInforme() != "") {
            $sql.="horasInforme='" . $ordenDto->getHorasInforme() . "'";
            if (($ordenDto->getFechaRespuesta() != "") || ($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $ordenDto->getFechaRespuesta() . "'";
            if (($ordenDto->getQr() != "") || ($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getqr() != "") {
            $sql.="qr='" . $ordenDto->getQr() . "'";
            if (($ordenDto->getFirmaDigital() != "") || ($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfirmaDigital() != "") {
            $sql.="firmaDigital='" . $ordenDto->getFirmaDigital() . "'";
            if (($ordenDto->getSelloDigital() != "") || ($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getselloDigital() != "") {
            $sql.="selloDigital='" . $ordenDto->getSelloDigital() . "'";
            if (($ordenDto->getFechaRegistro() != "") || ($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ordenDto->getFechaRegistro() . "'";
            if (($ordenDto->getFechaActualizacion() != "") || ($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ordenDto->getFechaActualizacion() . "'";
            if (($ordenDto->getEmail() != "") || ($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getemail() != "") {
            $sql.="email='" . $ordenDto->getEmail() . "'";
            if (($ordenDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ordenDto->getMotivoCancelacion() != "") {
            $sql.="motivocancelacion='" . $ordenDto->getMotivoCancelacion() . "'";
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
                    $tmp[$contador] = new OrdenesDTO();
                    $tmp[$contador]->setIdOrden($row["idOrden"]);
                    $tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
                    $tmp[$contador]->setCveRespuestaSolicitudOrden($row["cveRespuestaSolicitudOrden"]);
                    $tmp[$contador]->setNumeroOrden($row["numeroOrden"]);
                    $tmp[$contador]->setAnioOrden($row["anioOrden"]);
                    $tmp[$contador]->setNegada($row["negada"]);
                    $tmp[$contador]->setConcedida($row["concedida"]);
                    $tmp[$contador]->setFechaPractica($row["fechaPractica"]);
                    $tmp[$contador]->setHoraPractica($row["horaPractica"]);
                    $tmp[$contador]->setHorasPractica($row["horasPractica"]);
                    $tmp[$contador]->setFechaInforme($row["fechaInforme"]);
                    $tmp[$contador]->setHoraInforme($row["horaInforme"]);
                    $tmp[$contador]->setHorasInforme($row["horasInforme"]);
                    $tmp[$contador]->setFechaRespuesta($row["fechaRespuesta"]);
                    $tmp[$contador]->setQr($row["qr"]);
                    $tmp[$contador]->setFirmaDigital($row["firmaDigital"]);
                    $tmp[$contador]->setSelloDigital($row["selloDigital"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setEmail($row["email"]);
                    $tmp[$contador]->setMotivoCancelacion($row["motivoCancelacion"]);
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

    public function extraeLlavePrivada($archivo) {
        $fp = fopen("./../../../tribunal/" . $archivo, "r");
        $privKey = fread($fp, 8192);
        fclose($fp);

        return $privKey;
    }

}

?>