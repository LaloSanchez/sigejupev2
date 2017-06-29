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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class CateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertCateos($cateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcateos(";
        if ($cateosDto->getidCateo() != "") {
            $sql.="idCateo";
            if (($cateosDto->getIdSolicitudCateo() != "") || ($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo";
            if (($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getcveRespuestaSolicitudCateo() != "") {
            $sql.="cveRespuestaSolicitudCateo";
            if (($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getNumeroEspecializadoCateo() != "") {
            $sql.="numeroEspecializadoCateo";
            if (($cateosDto->getnumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnumeroCateo() != "") {
            $sql.="numeroCateo";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getanioCateo() != "") {
            $sql.="anioCateo";
            if (($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getsolicitud() != "") {
            $sql.="solicitud";
            if (($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnegada() != "") {
            $sql.="negada";
            if (($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getconcedida() != "") {
            $sql.="concedida";
            if (($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaPractica() != "") {
            $sql.="fechaPractica";
            if (($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraPractica() != "") {
            $sql.="horaPractica";
            if (($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasPractica() != "") {
            $sql.="horasPractica";
            if (($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaInforme() != "") {
            $sql.="fechaInforme";
            if (($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraInforme() != "") {
            $sql.="horaInforme";
            if (($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasInforme() != "") {
            $sql.="horasInforme";
            if (($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta";
            if (($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getqr() != "") {
            $sql.="qr";
            if (($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfirmaDigital() != "") {
            $sql.="firmaDigital";
            if (($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getselloDigital() != "") {
            $sql.="selloDigital";
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getemail() != "") {
            $sql.="email";
            if (($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($cateosDto->getidCateo() != "") {
            $sql.="'" . $cateosDto->getidCateo() . "'";
            if (($cateosDto->getIdSolicitudCateo() != "") || ($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getidSolicitudCateo() != "") {
            $sql.="'" . $cateosDto->getidSolicitudCateo() . "'";
            if (($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getcveRespuestaSolicitudCateo() != "") {
            $sql.="'" . $cateosDto->getcveRespuestaSolicitudCateo() . "'";
            if (($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getNumeroEspecializadoCateo() != "") {
            $sql.="'" . $cateosDto->getNumeroEspecializadoCateo() . "'";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnumeroCateo() != "") {
            $sql.="'" . $cateosDto->getnumeroCateo() . "'";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getanioCateo() != "") {
            $sql.="'" . $cateosDto->getanioCateo() . "'";
            if (($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getsolicitud() != "") {
            $sql.="'" . $cateosDto->getsolicitud() . "'";
            if (($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnegada() != "") {
            $sql.="'" . $cateosDto->getnegada() . "'";
            if (($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getconcedida() != "") {
            $sql.="'" . $cateosDto->getconcedida() . "'";
            if (($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaPractica() != "") {
            $sql.="'" . $cateosDto->getfechaPractica() . "'";
            if (($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraPractica() != "") {
            $sql.="'" . $cateosDto->gethoraPractica() . "'";
            if (($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasPractica() != "") {
            $sql.="'" . $cateosDto->gethorasPractica() . "'";
            if (($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaInforme() != "") {
            $sql.="'" . $cateosDto->getfechaInforme() . "'";
            if (($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraInforme() != "") {
            $sql.="'" . $cateosDto->gethoraInforme() . "'";
            if (($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasInforme() != "") {
            $sql.="'" . $cateosDto->gethorasInforme() . "'";
            if (($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaRespuesta() != "") {
            $sql.="'" . $cateosDto->getfechaRespuesta() . "'";
            if (($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getqr() != "") {
            $sql.="'" . $cateosDto->getqr() . "'";
            if (($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfirmaDigital() != "") {
            $sql.="'" . $cateosDto->getfirmaDigital() . "'";
            if (($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getselloDigital() != "") {
            $sql.="'" . $cateosDto->getselloDigital() . "'";
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaRegistro() != "") {
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaActualizacion() != "") {
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getemail() != "") {
            $sql.="'" . $cateosDto->getemail() . "'";
            if (($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getMotivoCancelacion() != "") {
            $sql.="'" . $cateosDto->getMotivoCancelacion() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CateosDTO();
            $tmp->setidCateo($this->_proveedor->lastID());
            $tmp = $this->selectCateos($tmp, "", "", $this->_proveedor);
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

    public function updateCateos($cateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcateos SET ";
        if ($cateosDto->getidCateo() != "") {
            $sql.="idCateo='" . $cateosDto->getidCateo() . "'";
            if (($cateosDto->getIdSolicitudCateo() != "") || ($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $cateosDto->getidSolicitudCateo() . "'";
            if (($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getcveRespuestaSolicitudCateo() != "") {
            $sql.="cveRespuestaSolicitudCateo='" . $cateosDto->getcveRespuestaSolicitudCateo() . "'";
            if (($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getNumeroEspecializadoCateo() != "") {
            $sql.="numeroEspecializadoCateo='" . $cateosDto->getNumeroEspecializadoCateo() . "'";
            if (($cateosDto->getnumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnumeroCateo() != "") {
            $sql.="numeroCateo='" . $cateosDto->getnumeroCateo() . "'";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getanioCateo() != "") {
            $sql.="anioCateo='" . $cateosDto->getanioCateo() . "'";
            if (($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getsolicitud() != "") {
            $sql.="solicitud='" . $cateosDto->getsolicitud() . "'";
            if (($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getnegada() != "") {
            $sql.="negada='" . $cateosDto->getnegada() . "'";
            if (($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getconcedida() != "") {
            $sql.="concedida='" . $cateosDto->getconcedida() . "'";
            if (($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaPractica() != "") {
            $sql.="fechaPractica='" . $cateosDto->getfechaPractica() . "'";
            if (($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraPractica() != "") {
            $sql.="horaPractica='" . $cateosDto->gethoraPractica() . "'";
            if (($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasPractica() != "") {
            $sql.="horasPractica='" . $cateosDto->gethorasPractica() . "'";
            if (($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaInforme() != "") {
            $sql.="fechaInforme='" . $cateosDto->getfechaInforme() . "'";
            if (($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethoraInforme() != "") {
            $sql.="horaInforme='" . $cateosDto->gethoraInforme() . "'";
            if (($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->gethorasInforme() != "") {
            $sql.="horasInforme='" . $cateosDto->gethorasInforme() . "'";
            if (($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $cateosDto->getfechaRespuesta() . "'";
            if (($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getqr() != "") {
            $sql.="qr='" . $cateosDto->getqr() . "'";
            if (($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfirmaDigital() != "") {
            $sql.="firmaDigital='" . $cateosDto->getfirmaDigital() . "'";
            if (($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getselloDigital() != "") {
            $sql.="selloDigital='" . $cateosDto->getselloDigital() . "'";
            if (($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $cateosDto->getfechaRegistro() . "'";
            if (($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $cateosDto->getfechaActualizacion() . "'";
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getemail() != "") {
            $sql.="email='" . $cateosDto->getemail() . "'";
            if (($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=",";
            }
        }
        if ($cateosDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $cateosDto->getMotivoCancelacion() . "'";
        }
        $sql.=" WHERE idCateo='" . $cateosDto->getidCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CateosDTO();
            $tmp->setidCateo($cateosDto->getidCateo());
            $tmp = $this->selectCateos($tmp, "", "", $this->_proveedor);
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

    public function deleteCateos($cateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcateos  WHERE idCateo='" . $cateosDto->getidCateo() . "'";
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

    public function selectCateos($cateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT ";
        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= "idCateo,idSolicitudCateo,cveRespuestaSolicitudCateo,numeroEspecializadoCateo,numeroCateo,anioCateo,solicitud,negada,concedida,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email, motivoCancelacion";
        } else {

            $sql .= $param["fields"];
        }
        $sql .= " FROM tblcateos ";
        if (($cateosDto->getidCateo() != "") || ($cateosDto->getidSolicitudCateo() != "") || ($cateosDto->getcveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getnumeroCateo() != "") || ($cateosDto->getanioCateo() != "") || ($cateosDto->getsolicitud() != "") || ($cateosDto->getnegada() != "") || ($cateosDto->getconcedida() != "") || ($cateosDto->getfechaPractica() != "") || ($cateosDto->gethoraPractica() != "") || ($cateosDto->gethorasPractica() != "") || ($cateosDto->getfechaInforme() != "") || ($cateosDto->gethoraInforme() != "") || ($cateosDto->gethorasInforme() != "") || ($cateosDto->getfechaRespuesta() != "") || ($cateosDto->getqr() != "") || ($cateosDto->getfirmaDigital() != "") || ($cateosDto->getselloDigital() != "") || ($cateosDto->getfechaRegistro() != "") || ($cateosDto->getfechaActualizacion() != "") || ($cateosDto->getemail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($cateosDto->getidCateo() != "") {
            $sql.="idCateo='" . $cateosDto->getIdCateo() . "'";
            if (($cateosDto->getIdSolicitudCateo() != "") || ($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $cateosDto->getIdSolicitudCateo() . "'";
            if (($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getcveRespuestaSolicitudCateo() != "") {
            $sql.="cveRespuestaSolicitudCateo='" . $cateosDto->getCveRespuestaSolicitudCateo() . "'";
            if (($cateosDto->getNumeroEspecializadoCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getNumeroEspecializadoCateo() != "") {
            $sql.="numeroEspecializadoCateo='" . $cateosDto->getNumeroEspecializadoCateo() . "'";
            if (($cateosDto->getnumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getnumeroCateo() != "") {
            $sql.="numeroCateo='" . $cateosDto->getNumeroCateo() . "'";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getanioCateo() != "") {
            $sql.="anioCateo='" . $cateosDto->getAnioCateo() . "'";
            if (($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getsolicitud() != "") {
            $sql.="solicitud='" . $cateosDto->getSolicitud() . "'";
            if (($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getnegada() != "") {
            $sql.="negada='" . $cateosDto->getNegada() . "'";
            if (($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getconcedida() != "") {
            $sql.="concedida='" . $cateosDto->getConcedida() . "'";
            if (($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaPractica() != "") {
            $sql.="fechaPractica='" . $cateosDto->getFechaPractica() . "'";
            if (($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethoraPractica() != "") {
            $sql.="horaPractica='" . $cateosDto->getHoraPractica() . "'";
            if (($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethorasPractica() != "") {
            $sql.="horasPractica='" . $cateosDto->getHorasPractica() . "'";
            if (($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaInforme() != "") {
            $sql.="fechaInforme='" . $cateosDto->getFechaInforme() . "'";
            if (($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethoraInforme() != "") {
            $sql.="horaInforme='" . $cateosDto->getHoraInforme() . "'";
            if (($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethorasInforme() != "") {
            $sql.="horasInforme='" . $cateosDto->getHorasInforme() . "'";
            if (($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $cateosDto->getFechaRespuesta() . "'";
            if (($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getqr() != "") {
            $sql.="qr='" . $cateosDto->getQr() . "'";
            if (($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfirmaDigital() != "") {
            $sql.="firmaDigital='" . $cateosDto->getFirmaDigital() . "'";
            if (($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getselloDigital() != "") {
            $sql.="selloDigital='" . $cateosDto->getSelloDigital() . "'";
            if (($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaRegistro() != "") {
            $sql.="DATE(fechaRegistro)='" . $cateosDto->getFechaRegistro() . "'";
            if (($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $cateosDto->getFechaActualizacion() . "'";
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getemail() != "") {
            $sql.="email='" . $cateosDto->getEmail() . "'";
            if (($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $cateosDto->getMotivoCancelacion() . "'";
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
            $sql.=" " . $orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }
        error_log("sql => " . $sql);

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new CateosDTO();
                        $tmp[$contador]->setIdCateo($row["idCateo"]);
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setCveRespuestaSolicitudCateo($row["cveRespuestaSolicitudCateo"]);
                        $tmp[$contador]->setNumeroEspecializadoCateo($row["numeroEspecializadoCateo"]);
                        $tmp[$contador]->setNumeroCateo($row["numeroCateo"]);
                        $tmp[$contador]->setAnioCateo($row["anioCateo"]);
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

    public function selectCateosNoSolicitud($cateosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idCateo,idSolicitudCateo,cveRespuestaSolicitudCateo,numeroCateo,anioCateo,negada,concedida,fechaPractica,horaPractica,horasPractica,fechaInforme,horaInforme,horasInforme,fechaRespuesta,qr,firmaDigital,selloDigital,fechaRegistro,fechaActualizacion,email,motivoCancelacion FROM tblcateos ";
        if (($cateosDto->getidCateo() != "") || ($cateosDto->getidSolicitudCateo() != "") || ($cateosDto->getcveRespuestaSolicitudCateo() != "") || ($cateosDto->getnumeroCateo() != "") || ($cateosDto->getanioCateo() != "") || ($cateosDto->getsolicitud() != "") || ($cateosDto->getnegada() != "") || ($cateosDto->getconcedida() != "") || ($cateosDto->getfechaPractica() != "") || ($cateosDto->gethoraPractica() != "") || ($cateosDto->gethorasPractica() != "") || ($cateosDto->getfechaInforme() != "") || ($cateosDto->gethoraInforme() != "") || ($cateosDto->gethorasInforme() != "") || ($cateosDto->getfechaRespuesta() != "") || ($cateosDto->getqr() != "") || ($cateosDto->getfirmaDigital() != "") || ($cateosDto->getselloDigital() != "") || ($cateosDto->getfechaRegistro() != "") || ($cateosDto->getfechaActualizacion() != "") || ($cateosDto->getemail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($cateosDto->getidCateo() != "") {
            $sql.="idCateo='" . $cateosDto->getIdCateo() . "'";
            if (($cateosDto->getIdSolicitudCateo() != "") || ($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $cateosDto->getIdSolicitudCateo() . "'";
            if (($cateosDto->getCveRespuestaSolicitudCateo() != "") || ($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getcveRespuestaSolicitudCateo() != "") {
            $sql.="cveRespuestaSolicitudCateo='" . $cateosDto->getCveRespuestaSolicitudCateo() . "'";
            if (($cateosDto->getNumeroCateo() != "") || ($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getnumeroCateo() != "") {
            $sql.="numeroCateo='" . $cateosDto->getNumeroCateo() . "'";
            if (($cateosDto->getAnioCateo() != "") || ($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getanioCateo() != "") {
            $sql.="anioCateo='" . $cateosDto->getAnioCateo() . "'";
            if (($cateosDto->getSolicitud() != "") || ($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getsolicitud() != "") {
            $sql.="solicitud='" . $cateosDto->getSolicitud() . "'";
            if (($cateosDto->getNegada() != "") || ($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getnegada() != "") {
            $sql.="negada='" . $cateosDto->getNegada() . "'";
            if (($cateosDto->getConcedida() != "") || ($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getconcedida() != "") {
            $sql.="concedida='" . $cateosDto->getConcedida() . "'";
            if (($cateosDto->getFechaPractica() != "") || ($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaPractica() != "") {
            $sql.="fechaPractica='" . $cateosDto->getFechaPractica() . "'";
            if (($cateosDto->getHoraPractica() != "") || ($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethoraPractica() != "") {
            $sql.="horaPractica='" . $cateosDto->getHoraPractica() . "'";
            if (($cateosDto->getHorasPractica() != "") || ($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethorasPractica() != "") {
            $sql.="horasPractica='" . $cateosDto->getHorasPractica() . "'";
            if (($cateosDto->getFechaInforme() != "") || ($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaInforme() != "") {
            $sql.="fechaInforme='" . $cateosDto->getFechaInforme() . "'";
            if (($cateosDto->getHoraInforme() != "") || ($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethoraInforme() != "") {
            $sql.="horaInforme='" . $cateosDto->getHoraInforme() . "'";
            if (($cateosDto->getHorasInforme() != "") || ($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->gethorasInforme() != "") {
            $sql.="horasInforme='" . $cateosDto->getHorasInforme() . "'";
            if (($cateosDto->getFechaRespuesta() != "") || ($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaRespuesta() != "") {
            $sql.="fechaRespuesta='" . $cateosDto->getFechaRespuesta() . "'";
            if (($cateosDto->getQr() != "") || ($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getqr() != "") {
            $sql.="qr='" . $cateosDto->getQr() . "'";
            if (($cateosDto->getFirmaDigital() != "") || ($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfirmaDigital() != "") {
            $sql.="firmaDigital='" . $cateosDto->getFirmaDigital() . "'";
            if (($cateosDto->getSelloDigital() != "") || ($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getselloDigital() != "") {
            $sql.="selloDigital='" . $cateosDto->getSelloDigital() . "'";
            if (($cateosDto->getFechaRegistro() != "") || ($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $cateosDto->getFechaRegistro() . "'";
            if (($cateosDto->getFechaActualizacion() != "") || ($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $cateosDto->getFechaActualizacion() . "'";
            if (($cateosDto->getEmail() != "") || ($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getemail() != "") {
            $sql.="email='" . $cateosDto->getEmail() . "'";
            if (($cateosDto->getMotivoCancelacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($cateosDto->getMotivoCancelacion() != "") {
            $sql.="motivoCancelacion='" . $cateosDto->getMotivoCancelacion() . "'";
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
                    $tmp[$contador] = new CateosDTO();
                    $tmp[$contador]->setIdCateo($row["idCateo"]);
                    $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                    $tmp[$contador]->setCveRespuestaSolicitudCateo($row["cveRespuestaSolicitudCateo"]);
                    $tmp[$contador]->setNumeroCateo($row["numeroCateo"]);
                    $tmp[$contador]->setAnioCateo($row["anioCateo"]);
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

}

?>