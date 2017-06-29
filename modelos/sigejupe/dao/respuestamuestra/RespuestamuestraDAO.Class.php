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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RespuestamuestraDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertRespuestamuestra($respuestamuestraDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblrespuestamuestra(";
        if ($respuestamuestraDto->getIdMuestra() != "") {
            $sql.="idMuestra";
            if (($respuestamuestraDto->getIdSolicitudMuestra() != "") || ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra";
            if (($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") {
            $sql.="cveRespuestaSolicitudMuestra";
            if (($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNumeroMuestra() != "") {
            $sql.="numeroMuestra";
            if (($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getAnioMuestra() != "") {
            $sql.="anioMuestra";
            if (($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSolicitud() != "") {
            $sql.="solicitud";
            if (($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNegada() != "") {
            $sql.="negada";
            if (($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getConcedida() != "") {
            $sql.="concedida";
            if (($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaPractica() != "") {
            $sql.="fechaPractica";
            if (($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraPractica() != "") {
            $sql.="horaPractica";
            if (($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasPractica() != "") {
            $sql.="horasPractica";
            if (($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaInforme() != "") {
            $sql.="fechaInforme";
            if (($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraInforme() != "") {
            $sql.="horaInforme";
            if (($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasInforme() != "") {
            $sql.="horasInforme";
            if (($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta";
            if (($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getQr() != "") {
            $sql.="qr";
            if (($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFirmaDigital() != "") {
            $sql.="firmaDigital";
            if (($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSelloDigital() != "") {
            $sql.="selloDigital";
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getEmail() != "") {
            $sql.="email";
            if (($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($respuestamuestraDto->getIdMuestra() != "") {
            $sql.="'" . $respuestamuestraDto->getIdMuestra() . "'";
            if (($respuestamuestraDto->getIdSolicitudMuestra() != "") || ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getIdSolicitudMuestra() != "") {
            $sql.="'" . $respuestamuestraDto->getIdSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") {
            $sql.="'" . $respuestamuestraDto->getCveRespuestaSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNumeroMuestra() != "") {
            $sql.="'" . $respuestamuestraDto->getNumeroMuestra() . "'";
            if (($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getAnioMuestra() != "") {
            $sql.="'" . $respuestamuestraDto->getAnioMuestra() . "'";
            if (($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSolicitud() != "") {
            $sql.="'" . $respuestamuestraDto->getSolicitud() . "'";
            if (($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNegada() != "") {
            $sql.="'" . $respuestamuestraDto->getNegada() . "'";
            if (($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getConcedida() != "") {
            $sql.="'" . $respuestamuestraDto->getConcedida() . "'";
            if (($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaPractica() != "") {
            $sql.="'" . $respuestamuestraDto->getFechaPractica() . "'";
            if (($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraPractica() != "") {
            $sql.="'" . $respuestamuestraDto->getHoraPractica() . "'";
            if (($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasPractica() != "") {
            $sql.="'" . $respuestamuestraDto->getHorasPractica() . "'";
            if (($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaInforme() != "") {
            $sql.="'" . $respuestamuestraDto->getFechaInforme() . "'";
            if (($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraInforme() != "") {
            $sql.="'" . $respuestamuestraDto->getHoraInforme() . "'";
            if (($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasInforme() != "") {
            $sql.="'" . $respuestamuestraDto->getHorasInforme() . "'";
            if (($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaRespuesta() != "") {
            $sql.="'" . $respuestamuestraDto->getFechaRespuesta() . "'";
            if (($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getQr() != "") {
            $sql.="'" . $respuestamuestraDto->getQr() . "'";
            if (($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFirmaDigital() != "") {
            $sql.="'" . $respuestamuestraDto->getFirmaDigital() . "'";
            if (($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSelloDigital() != "") {
            $sql.="'" . $respuestamuestraDto->getSelloDigital() . "'";
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaRegistro() != "") {
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaActualizacion() != "") {
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getEmail() != "") {
            $sql.="'" . $respuestamuestraDto->getEmail() . "'";
            if (($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getMotivoCancelacion() != "") {
            $sql.="'" . $respuestamuestraDto->getMotivoCancelacion() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RespuestamuestraDTO();
            $tmp->setidMuestra($this->_proveedor->lastID());
            $tmp = $this->selectRespuestamuestra($tmp, "", "", $this->_proveedor);
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

    public function updateRespuestamuestra($respuestamuestraDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblrespuestamuestra SET ";
        if ($respuestamuestraDto->getIdMuestra() != "") {
            $sql.="idMuestra='" . $respuestamuestraDto->getIdMuestra() . "'";
            if (($respuestamuestraDto->getIdSolicitudMuestra() != "") || ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $respuestamuestraDto->getIdSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") {
            $sql.="cveRespuestaSolicitudMuestra='" . $respuestamuestraDto->getCveRespuestaSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNumeroMuestra() != "") {
            $sql.="numeroMuestra='" . $respuestamuestraDto->getNumeroMuestra() . "'";
            if (($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getAnioMuestra() != "") {
            $sql.="anioMuestra='" . $respuestamuestraDto->getAnioMuestra() . "'";
            if (($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSolicitud() != "") {
            $sql.="solicitud='" . $respuestamuestraDto->getSolicitud() . "'";
            if (($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getNegada() != "") {
            $sql.="negada='" . $respuestamuestraDto->getNegada() . "'";
            if (($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getConcedida() != "") {
            $sql.="concedida='" . $respuestamuestraDto->getConcedida() . "'";
            if (($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaPractica() != "") {
            $sql.="fechaPractica='" . $respuestamuestraDto->getFechaPractica() . "'";
            if (($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraPractica() != "") {
            $sql.="horaPractica='" . $respuestamuestraDto->getHoraPractica() . "'";
            if (($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasPractica() != "") {
            $sql.="horasPractica='" . $respuestamuestraDto->getHorasPractica() . "'";
            if (($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaInforme() != "") {
            $sql.="fechaInforme='" . $respuestamuestraDto->getFechaInforme() . "'";
            if (($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHoraInforme() != "") {
            $sql.="horaInforme='" . $respuestamuestraDto->getHoraInforme() . "'";
            if (($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getHorasInforme() != "") {
            $sql.="horasInforme='" . $respuestamuestraDto->getHorasInforme() . "'";
            if (($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $respuestamuestraDto->getFechaRespuesta() . "'";
            if (($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getQr() != "") {
            $sql.="qr='" . $respuestamuestraDto->getQr() . "'";
            if (($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFirmaDigital() != "") {
            $sql.="firmaDigital='" . $respuestamuestraDto->getFirmaDigital() . "'";
            if (($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getSelloDigital() != "") {
            $sql.="selloDigital='" . $respuestamuestraDto->getSelloDigital() . "'";
            if (($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $respuestamuestraDto->getFechaRegistro() . "'";
            if (($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $respuestamuestraDto->getFechaActualizacion() . "'";
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getEmail() != "") {
            $sql.="email='" . $respuestamuestraDto->getEmail() . "'";
            if (($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($respuestamuestraDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $respuestamuestraDto->getMotivoCancelacion() . "'";
        }
        $sql.=" WHERE idMuestra='" . $respuestamuestraDto->getIdMuestra() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RespuestamuestraDTO();
            $tmp->setidMuestra($respuestamuestraDto->getIdMuestra());
            $tmp = $this->selectRespuestamuestra($tmp, "", "", $this->_proveedor);
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

    public function deleteRespuestamuestra($respuestamuestraDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblrespuestamuestra  WHERE idMuestra='" . $respuestamuestraDto->getIdMuestra() . "'";
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

    public function selectRespuestamuestra($respuestamuestraDto, $param = '', $orden = "", $proveedor = null) {

        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";

        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= "idMuestra,idSolicitudMuestra,cveRespuestaSolicitudMuestra,numeroMuestra,anioMuestra,solicitud,negada,concedida,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email,motivoCancelacion";
        } else {

            $sql .= $param["fields"];
        }

        $sql .= ' FROM tblrespuestamuestra ';

        if (($respuestamuestraDto->getIdMuestra() != "") || ($respuestamuestraDto->getIdSolicitudMuestra() != "") || ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($respuestamuestraDto->getIdMuestra() != "") {
            $sql.="idMuestra='" . $respuestamuestraDto->getIdMuestra() . "'";
            if (($respuestamuestraDto->getIdSolicitudMuestra() != "") || ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getIdSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $respuestamuestraDto->getIdSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") || ($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getCveRespuestaSolicitudMuestra() != "") {
            $sql.="cveRespuestaSolicitudMuestra='" . $respuestamuestraDto->getCveRespuestaSolicitudMuestra() . "'";
            if (($respuestamuestraDto->getNumeroMuestra() != "") || ($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getNumeroMuestra() != "") {
            $sql.="numeroMuestra='" . $respuestamuestraDto->getNumeroMuestra() . "'";
            if (($respuestamuestraDto->getAnioMuestra() != "") || ($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getAnioMuestra() != "") {
            $sql.="anioMuestra='" . $respuestamuestraDto->getAnioMuestra() . "'";
            if (($respuestamuestraDto->getSolicitud() != "") || ($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getSolicitud() != "") {
            $sql.="solicitud='" . $respuestamuestraDto->getSolicitud() . "'";
            if (($respuestamuestraDto->getNegada() != "") || ($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getNegada() != "") {
            $sql.="negada='" . $respuestamuestraDto->getNegada() . "'";
            if (($respuestamuestraDto->getConcedida() != "") || ($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getConcedida() != "") {
            $sql.="concedida='" . $respuestamuestraDto->getConcedida() . "'";
            if (($respuestamuestraDto->getFechaPractica() != "") || ($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFechaPractica() != "") {
            $sql.="fechaPractica='" . $respuestamuestraDto->getFechaPractica() . "'";
            if (($respuestamuestraDto->getHoraPractica() != "") || ($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getHoraPractica() != "") {
            $sql.="horaPractica='" . $respuestamuestraDto->getHoraPractica() . "'";
            if (($respuestamuestraDto->getHorasPractica() != "") || ($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getHorasPractica() != "") {
            $sql.="horasPractica='" . $respuestamuestraDto->getHorasPractica() . "'";
            if (($respuestamuestraDto->getFechaInforme() != "") || ($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFechaInforme() != "") {
            $sql.="fechaInforme='" . $respuestamuestraDto->getFechaInforme() . "'";
            if (($respuestamuestraDto->getHoraInforme() != "") || ($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getHoraInforme() != "") {
            $sql.="horaInforme='" . $respuestamuestraDto->getHoraInforme() . "'";
            if (($respuestamuestraDto->getHorasInforme() != "") || ($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getHorasInforme() != "") {
            $sql.="horasInforme='" . $respuestamuestraDto->getHorasInforme() . "'";
            if (($respuestamuestraDto->getFechaRespuesta() != "") || ($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $respuestamuestraDto->getFechaRespuesta() . "'";
            if (($respuestamuestraDto->getQr() != "") || ($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getQr() != "") {
            $sql.="qr='" . $respuestamuestraDto->getQr() . "'";
            if (($respuestamuestraDto->getFirmaDigital() != "") || ($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFirmaDigital() != "") {
            $sql.="firmaDigital='" . $respuestamuestraDto->getFirmaDigital() . "'";
            if (($respuestamuestraDto->getSelloDigital() != "") || ($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getSelloDigital() != "") {
            $sql.="selloDigital='" . $respuestamuestraDto->getSelloDigital() . "'";
            if (($respuestamuestraDto->getFechaRegistro() != "") || ($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $respuestamuestraDto->getFechaRegistro() . "'";
            if (($respuestamuestraDto->getFechaActualizacion() != "") || ($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $respuestamuestraDto->getFechaActualizacion() . "'";
            if (($respuestamuestraDto->getEmail() != "") || ($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getEmail() != "") {
            $sql.="email='" . $respuestamuestraDto->getEmail() . "'";
            if (($respuestamuestraDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($respuestamuestraDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $respuestamuestraDto->getMotivoCancelacion() . "'";
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
                    $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND " . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            $inicial = 0;
            if ($param["paginacion"]) {
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
                $sql.=" LIMIT " . $param["cantxPag"] . " OFFSET " . ($param["pag"] * $param["cantxPag"] - $param["cantxPag"]) . " ";
            }
        }

        error_log("sql => " . $sql);

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new RespuestamuestraDTO();
                        $tmp[$contador]->setIdMuestra($row["idMuestra"]);
                        $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                        $tmp[$contador]->setCveRespuestaSolicitudMuestra($row["cveRespuestaSolicitudMuestra"]);
                        $tmp[$contador]->setNumeroMuestra($row["numeroMuestra"]);
                        $tmp[$contador]->setAnioMuestra($row["anioMuestra"]);
                        $tmp[$contador]->setSolicitud($row["solicitud"]);
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

        //echo $sql;

        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectMuestrasNoSolicitud($muestrasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idMuestra,idSolicitudMuestra,cveRespuestaSolicitudMuestra,numeroMuestra,anioMuestra,negada,concedida,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email,motivoCancelacion FROM tblrespuestamuestra ";
        if (($muestrasDto->getidMuestra() != "") || ($muestrasDto->getidSolicitudMuestra() != "") || ($muestrasDto->getcveRespuestaSolicitudMuestra() != "") || ($muestrasDto->getnumeroMuestra() != "") || ($muestrasDto->getanioMuestra() != "") || ($muestrasDto->getsolicitud() != "") || ($muestrasDto->getnegada() != "") || ($muestrasDto->getconcedida() != "") || ($muestrasDto->getfechaPractica() != "") || ($muestrasDto->gethoraPractica() != "") || ($muestrasDto->gethorasPractica() != "") || ($muestrasDto->getfechaInforme() != "") || ($muestrasDto->gethoraInforme() != "") || ($muestrasDto->gethorasInforme() != "") || ($muestrasDto->getfechaRespuesta() != "") || ($muestrasDto->getqr() != "") || ($muestrasDto->getfirmaDigital() != "") || ($muestrasDto->getselloDigital() != "") || ($muestrasDto->getfechaRegistro() != "") || ($muestrasDto->getfechaActualizacion() != "") || ($muestrasDto->getemail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($muestrasDto->getidMuestra() != "") {
            $sql.="idMuestra='" . $muestrasDto->getIdMuestra() . "'";
            if (($muestrasDto->getIdSolicitudMuestra() != "") || ($muestrasDto->getCveRespuestaSolicitudMuestra() != "") || ($muestrasDto->getNumeroMuestra() != "") || ($muestrasDto->getAnioMuestra() != "") || ($muestrasDto->getSolicitud() != "") || ($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getidSolicitudMuestra() != "") {
            $sql.="idSolicitudMuestra='" . $muestrasDto->getIdSolicitudMuestra() . "'";
            if (($muestrasDto->getCveRespuestaSolicitudMuestra() != "") || ($muestrasDto->getNumeroMuestra() != "") || ($muestrasDto->getAnioMuestra() != "") || ($muestrasDto->getSolicitud() != "") || ($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getcveRespuestaSolicitudMuestra() != "") {
            $sql.="cveRespuestaSolicitudMuestra='" . $muestrasDto->getCveRespuestaSolicitudMuestra() . "'";
            if (($muestrasDto->getNumeroMuestra() != "") || ($muestrasDto->getAnioMuestra() != "") || ($muestrasDto->getSolicitud() != "") || ($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getnumeroMuestra() != "") {
            $sql.="numeroMuestra='" . $muestrasDto->getNumeroMuestra() . "'";
            if (($muestrasDto->getAnioMuestra() != "") || ($muestrasDto->getSolicitud() != "") || ($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getanioMuestra() != "") {
            $sql.="anioMuestra='" . $muestrasDto->getAnioMuestra() . "'";
            if (($muestrasDto->getSolicitud() != "") || ($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getsolicitud() != "") {
            $sql.="solicitud='" . $muestrasDto->getSolicitud() . "'";
            if (($muestrasDto->getNegada() != "") || ($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getnegada() != "") {
            $sql.="negada='" . $muestrasDto->getNegada() . "'";
            if (($muestrasDto->getConcedida() != "") || ($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getconcedida() != "") {
            $sql.="concedida='" . $muestrasDto->getConcedida() . "'";
            if (($muestrasDto->getFechaPractica() != "") || ($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfechaPractica() != "") {
            $sql.="fechaPractica='" . $muestrasDto->getFechaPractica() . "'";
            if (($muestrasDto->getHoraPractica() != "") || ($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->gethoraPractica() != "") {
            $sql.="horaPractica='" . $muestrasDto->getHoraPractica() . "'";
            if (($muestrasDto->getHorasPractica() != "") || ($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->gethorasPractica() != "") {
            $sql.="horasPractica='" . $muestrasDto->getHorasPractica() . "'";
            if (($muestrasDto->getFechaInforme() != "") || ($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfechaInforme() != "") {
            $sql.="fechaInforme='" . $muestrasDto->getFechaInforme() . "'";
            if (($muestrasDto->getHoraInforme() != "") || ($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->gethoraInforme() != "") {
            $sql.="horaInforme='" . $muestrasDto->getHoraInforme() . "'";
            if (($muestrasDto->getHorasInforme() != "") || ($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->gethorasInforme() != "") {
            $sql.="horasInforme='" . $muestrasDto->getHorasInforme() . "'";
            if (($muestrasDto->getFechaRespuesta() != "") || ($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $muestrasDto->getFechaRespuesta() . "'";
            if (($muestrasDto->getQr() != "") || ($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getqr() != "") {
            $sql.="qr='" . $muestrasDto->getQr() . "'";
            if (($muestrasDto->getFirmaDigital() != "") || ($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfirmaDigital() != "") {
            $sql.="firmaDigital='" . $muestrasDto->getFirmaDigital() . "'";
            if (($muestrasDto->getSelloDigital() != "") || ($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getselloDigital() != "") {
            $sql.="selloDigital='" . $muestrasDto->getSelloDigital() . "'";
            if (($muestrasDto->getFechaRegistro() != "") || ($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $muestrasDto->getFechaRegistro() . "'";
            if (($muestrasDto->getFechaActualizacion() != "") || ($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $muestrasDto->getFechaActualizacion() . "'";
            if (($muestrasDto->getEmail() != "") || ($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getemail() != "") {
            $sql.="email='" . $muestrasDto->getEmail() . "'";
            if (($muestrasDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($muestrasDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $muestrasDto->getMotivoCancelacion() . "'";
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
                    $tmp[$contador] = new RespuestamuestraDTO();
                    $tmp[$contador]->setIdMuestra($row["idMuestra"]);
                    $tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
                    $tmp[$contador]->setCveRespuestaSolicitudMuestra($row["cveRespuestaSolicitudMuestra"]);
                    $tmp[$contador]->setNumeroMuestra($row["numeroMuestra"]);
                    $tmp[$contador]->setAnioMuestra($row["anioMuestra"]);
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