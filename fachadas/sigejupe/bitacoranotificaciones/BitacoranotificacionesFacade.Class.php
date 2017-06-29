<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoranotificaciones/BitacoranotificacionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudescateos/EstatussolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesmuestras/EstatussolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class BitacoranotificacionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto->setidBitacoraNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getidBitacoraNotificacion(), "utf8") : strtoupper($BitacoranotificacionesDto->getidBitacoraNotificacion()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getidBitacoraNotificacion())) {
            $BitacoranotificacionesDto->setidBitacoraNotificacion($this->fechaMysql($BitacoranotificacionesDto->getidBitacoraNotificacion()));
        }
        $BitacoranotificacionesDto->setcveMedioNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcveMedioNotificacion(), "utf8") : strtoupper($BitacoranotificacionesDto->getcveMedioNotificacion()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcveMedioNotificacion())) {
            $BitacoranotificacionesDto->setcveMedioNotificacion($this->fechaMysql($BitacoranotificacionesDto->getcveMedioNotificacion()));
        }
        $BitacoranotificacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcveTipoCarpeta(), "utf8") : strtoupper($BitacoranotificacionesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcveTipoCarpeta())) {
            $BitacoranotificacionesDto->setcveTipoCarpeta($this->fechaMysql($BitacoranotificacionesDto->getcveTipoCarpeta()));
        }
        $BitacoranotificacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcveTipoActuacion(), "utf8") : strtoupper($BitacoranotificacionesDto->getcveTipoActuacion()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcveTipoActuacion())) {
            $BitacoranotificacionesDto->setcveTipoActuacion($this->fechaMysql($BitacoranotificacionesDto->getcveTipoActuacion()));
        }
        $BitacoranotificacionesDto->setcveEstatusNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcveEstatusNotificacion(), "utf8") : strtoupper($BitacoranotificacionesDto->getcveEstatusNotificacion()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcveEstatusNotificacion())) {
            $BitacoranotificacionesDto->setcveEstatusNotificacion($this->fechaMysql($BitacoranotificacionesDto->getcveEstatusNotificacion()));
        }
        $BitacoranotificacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getidReferencia(), "utf8") : strtoupper($BitacoranotificacionesDto->getidReferencia()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getidReferencia())) {
            $BitacoranotificacionesDto->setidReferencia($this->fechaMysql($BitacoranotificacionesDto->getidReferencia()));
        }
        $BitacoranotificacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getnumero(), "utf8") : strtoupper($BitacoranotificacionesDto->getnumero()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getnumero())) {
            $BitacoranotificacionesDto->setnumero($this->fechaMysql($BitacoranotificacionesDto->getnumero()));
        }
        $BitacoranotificacionesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getanio(), "utf8") : strtoupper($BitacoranotificacionesDto->getanio()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getanio())) {
            $BitacoranotificacionesDto->setanio($this->fechaMysql($BitacoranotificacionesDto->getanio()));
        }
        $BitacoranotificacionesDto->setcvejuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcvejuzgado(), "utf8") : strtoupper($BitacoranotificacionesDto->getcvejuzgado()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcvejuzgado())) {
            $BitacoranotificacionesDto->setcvejuzgado($this->fechaMysql($BitacoranotificacionesDto->getcvejuzgado()));
        }
        $BitacoranotificacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getcveUsuario(), "utf8") : strtoupper($BitacoranotificacionesDto->getcveUsuario()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getcveUsuario())) {
            $BitacoranotificacionesDto->setcveUsuario($this->fechaMysql($BitacoranotificacionesDto->getcveUsuario()));
        }
        $BitacoranotificacionesDto->setmedio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getmedio(), "utf8") : strtoupper($BitacoranotificacionesDto->getmedio()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getmedio())) {
            $BitacoranotificacionesDto->setmedio($this->fechaMysql($BitacoranotificacionesDto->getmedio()));
        }
        $BitacoranotificacionesDto->setmovimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getmovimiento(), "utf8") : strtoupper($BitacoranotificacionesDto->getmovimiento()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getmovimiento())) {
            $BitacoranotificacionesDto->setmovimiento($this->fechaMysql($BitacoranotificacionesDto->getmovimiento()));
        }
        $BitacoranotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getfechaRegistro(), "utf8") : strtoupper($BitacoranotificacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getfechaRegistro())) {
            $BitacoranotificacionesDto->setfechaRegistro($this->fechaMysql($BitacoranotificacionesDto->getfechaRegistro()));
        }
        $BitacoranotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacoranotificacionesDto->getfechaActualizacion(), "utf8") : strtoupper($BitacoranotificacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($BitacoranotificacionesDto->getfechaActualizacion())) {
            $BitacoranotificacionesDto->setfechaActualizacion($this->fechaMysql($BitacoranotificacionesDto->getfechaActualizacion()));
        }
        return $BitacoranotificacionesDto;
    }

    public function selectBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->selectBitacoranotificaciones($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "") {
            $dtoToJson = new DtoToJson($BitacoranotificacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectBitacoranotificacionesCateos($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->selectBitacoranotificacionesCateos($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
            $juzgadosDao = new JuzgadosDAO();
            $BitacoraNotificacion = $BitacoranotificacionesDto["data"];
            $statusDto = new EstatussolicitudescateosDTO();
            $statusDAO = new EstatussolicitudescateosDAO();
            $statusDto->setCveEstatusSolicitudCateo($BitacoraNotificacion["solicitudCateo"]->getCveEstatusSolicitudCateo());
            $estatusCateos = $statusDAO->selectEstatussolicitudescateos($statusDto);
            $estatus = "";
            if ($estatusCateos != "") {
                $estatus = $estatusCateos[0]->getDesEstatusSolicitudCateo();
            }
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"data":[';
            $json .= '{';
            $json .= '"solicitudCateo":{';
            $json .= '"idSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getIdSolicitudCateo()) . '",';
            $json .= '"numero":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getNumero()) . '",';
            $json .= '"anio":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getAnio()) . '",';
            $json .= '"estatus":"' . utf8_encode($estatus) . '",';
            $json .= '"cveJuzgado":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado()) . '",';
            if ($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado() != "" && $BitacoraNotificacion["solicitudCateo"]->getCveJuzgado() != 0) {
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                    $juzgadosDto = $juzgadosDto[0];
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                } else {
                    $json .= '"desJuzgadoDesahoga":"",';
                }
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }
            $json .= '"cveCatAudiencia":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveCatAudiencia()) . '",';
            $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveJuzgadoDesahoga()) . '",';
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudCateo"]->getCveJuzgadoDesahoga());
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                $juzgadosDto = $juzgadosDto[0];
                $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }

            $json .= '"idReferencia":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getIdReferencia()) . '",';
            $json .= '"fechaEnvio":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaEnvio()) . '",';
            $json .= '"cveTipoCarpeta":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveTipoCarpeta()) . '",';
            $json .= '"carpetaInv":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCarpetaInv()) . '",';
            $json .= '"nuc":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getNuc()) . '",';
            $json .= '"cveUsuario":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveUsuario()) . '",';
            $json .= '"cveAdscripcionSolicita":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveAdscripcionSolicita()) . '",';
            $json .= '"cveEstatusSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveEstatusSolicitudCateo()) . '",';
            $json .= '"observaciones":' . json_encode(utf8_encode($BitacoraNotificacion["solicitudCateo"]->getObservaciones())) . ',';
            $fechaHoraRegistro = explode(" ", utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaRegistro()));
            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
            $fechaRegistro = $fechaRegistro[2] . "-" . $fechaRegistro[1] . "-" . $fechaRegistro[0];
            $horaRegistro = $fechaHoraRegistro[1];
            $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaActualizacion()) . '"';
            $json .= '}';
            $json .= ',"cateo":{';
            $json .= '"idCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getIdCateo()) . '",';
            $json .= '"idSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getIdSolicitudCateo()) . '",';
            $json .= '"cveRespuestaSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getCveRespuestaSolicitudCateo()) . '",';
            $json .= '"numeroCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getNumeroCateo()) . '",';
            $json .= '"anioCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getAnioCateo()) . '",';
            $json .= '"solicitud":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getSolicitud())) . ',';
            $json .= '"negada":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getNegada())) . ',';
            $json .= '"concedida":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getConcedida())) . ',';
            $json .= '"fechaPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaPractica()) . '",';
            $json .= '"horaPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHoraPractica()) . '",';
            $json .= '"horasPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHorasPractica()) . '",';
            $json .= '"fechaInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaInforme()) . '",';
            $json .= '"horaInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHoraInforme()) . '",';
            $json .= '"horasInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHorasInforme()) . '",';
            $json .= '"fechaRespuesta":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaRespuesta()) . '",';
            $json .= '"qr":"' . utf8_encode($BitacoraNotificacion["cateo"]->getQr()) . '",';
            $json .= '"firmaDigital":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFirmaDigital()) . '",';
            $json .= '"selloDigital":"' . utf8_encode($BitacoraNotificacion["cateo"]->getSelloDigital()) . '",';
            $json .= '"fechaRegistro":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaRegistro()) . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaActualizacion()) . '",';
            $json .= '"email":"' . utf8_encode($BitacoraNotificacion["cateo"]->getEmail()) . '"';
            $json .= '}';

            #RESUMEN CORREO
            $countResumen = 1;
            $json .= ',"resumenCorreos":[';
            if (count($BitacoraNotificacion["correosResumen"]) > 0 && $BitacoraNotificacion["correosResumen"] != "") {
                foreach ($BitacoraNotificacion["correosResumen"] as $correosResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($correosResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["correosResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE CORREO
            $countDetalle = 1;
            $json .= ',"detalleCorreos":[';
            if (count($BitacoraNotificacion["correosDetalle"]) > 0 && $BitacoraNotificacion["correosDetalle"] != "") {
                foreach ($BitacoraNotificacion["correosDetalle"] as $correosDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . utf8_encode($correosDetalle->getMovimiento()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($correosDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["correosDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #RESUMEN LLAMADA
            $countResumen = 1;
            $json .= ',"resumenLlamadas":[';
            if (count($BitacoraNotificacion["llamadasResumen"]) > 0 && $BitacoraNotificacion["llamadasResumen"] != "") {
                foreach ($BitacoraNotificacion["llamadasResumen"] as $llamadasResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($llamadasResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["llamadasResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE LLAMADA
            $countDetalle = 1;
            $json .= ',"detalleLlmadas":[';
            if (count($BitacoraNotificacion["llamadasDetalle"]) > 0 && $BitacoraNotificacion["llamadasDetalle"] != "") {
                foreach ($BitacoraNotificacion["llamadasDetalle"] as $llamadasDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . preg_replace("/\n/", "", utf8_encode($llamadasDetalle->getMovimiento())) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($llamadasDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["llamadasDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            $json .= "}";
            $json .= "]";
            $json .= "}";
            return $json;
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

    public function insertBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->insertBitacoranotificaciones($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "") {
            $dtoToJson = new DtoToJson($BitacoranotificacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->updateBitacoranotificaciones($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "") {
            $dtoToJson = new DtoToJson($BitacoranotificacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->deleteBitacoranotificaciones($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    public function selectBitacoranotificacionesOrden($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
            $juzgadosDao = new JuzgadosDAO();
            $BitacoraNotificacion = $BitacoranotificacionesDto["data"];
            $statusDto = new EstatussolicitudesordenesDTO();
            $statusDAO = new EstatussolicitudesordenesDAO();
            $statusDto->setCveEstatusSolicitudOrdenes($BitacoraNotificacion["solicitudOrden"]->getCveEstatusSolicitudOrden());
            $estatusOrdenes = $statusDAO->selectEstatussolicitudesordenes($statusDto);
            $estatus = "";
            if ($estatusOrdenes != "") {
                $estatus = $estatusOrdenes[0]->getDesEstatusSolicitudOrdenes();
            }
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"data":[';
            $json .= '{';
            $json .= '"solicitudOrden":{';
            $json .= '"idSolicitudOrden":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getIdSolicitudOrden()) . '",';
            $json .= '"numero":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getNumero()) . '",';
            $json .= '"anio":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getAnio()) . '",';
            $json .= '"estatus":"' . utf8_encode($estatus) . '",';
            $json .= '"cveJuzgado":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveJuzgado()) . '",';
            if ($BitacoraNotificacion["solicitudOrden"]->getCveJuzgado() != "" && $BitacoraNotificacion["solicitudOrden"]->getCveJuzgado() != 0) {
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudOrden"]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                    $juzgadosDto = $juzgadosDto[0];
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                } else {
                    $json .= '"desJuzgadoDesahoga":"",';
                }
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }
            $json .= '"cveCatAudiencia":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveCatAudiencia()) . '",';
            $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveJuzgadoDesahoga()) . '",';
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudOrden"]->getCveJuzgadoDesahoga());
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                $juzgadosDto = $juzgadosDto[0];
                $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }

            $json .= '"idReferencia":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getIdReferencia()) . '",';
            $json .= '"fechaEnvio":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getFechaEnvio()) . '",';
            $json .= '"cveTipoCarpeta":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveTipoCarpeta()) . '",';
            $json .= '"carpetaInv":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCarpetaInv()) . '",';
            $json .= '"nuc":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getNuc()) . '",';
            $json .= '"cveUsuario":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveUsuario()) . '",';
            $json .= '"cveAdscripcionSolicita":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveAdscripcionSolicita()) . '",';
            $json .= '"cveEstatusSolicitudOrden":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getCveEstatusSolicitudOrden()) . '",';
            $json .= '"observaciones":' . json_encode(utf8_encode($BitacoraNotificacion["solicitudOrden"]->getObservaciones())) . ',';
            $fechaHoraRegistro = explode(" ", utf8_encode($BitacoraNotificacion["solicitudOrden"]->getFechaRegistro()));
            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
            $fechaRegistro = $fechaRegistro[2] . "-" . $fechaRegistro[1] . "-" . $fechaRegistro[0];
            $horaRegistro = $fechaHoraRegistro[1];
            $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["solicitudOrden"]->getFechaActualizacion()) . '"';
            $json .= '}';
            $json .= ',"orden":{';
            $json .= '"idOrden":"' . utf8_encode($BitacoraNotificacion["orden"]->getIdOrden()) . '",';
            $json .= '"idSolicitudOrden":"' . utf8_encode($BitacoraNotificacion["orden"]->getIdSolicitudOrden()) . '",';
            $json .= '"cveRespuestaSolicitudOrden":"' . utf8_encode($BitacoraNotificacion["orden"]->getCveRespuestaSolicitudOrden()) . '",';
            $json .= '"numeroOrden":"' . utf8_encode($BitacoraNotificacion["orden"]->getNumeroOrden()) . '",';
            $json .= '"anioOrden":"' . utf8_encode($BitacoraNotificacion["orden"]->getAnioOrden()) . '",';
            $json .= '"solicitud":' . json_encode(utf8_encode($BitacoraNotificacion["orden"]->getSolicitud())) . ',';
            $json .= '"negada":' . json_encode(utf8_encode($BitacoraNotificacion["orden"]->getNegada())) . ',';
            $json .= '"concedida":' . json_encode(utf8_encode($BitacoraNotificacion["orden"]->getConcedida())) . ',';
            $json .= '"fechaPractica":"' . utf8_encode($BitacoraNotificacion["orden"]->getFechaPractica()) . '",';
            $json .= '"horaPractica":"' . utf8_encode($BitacoraNotificacion["orden"]->getHoraPractica()) . '",';
            $json .= '"horasPractica":"' . utf8_encode($BitacoraNotificacion["orden"]->getHorasPractica()) . '",';
            $json .= '"fechaInforme":"' . utf8_encode($BitacoraNotificacion["orden"]->getFechaInforme()) . '",';
            $json .= '"horaInforme":"' . utf8_encode($BitacoraNotificacion["orden"]->getHoraInforme()) . '",';
            $json .= '"horasInforme":"' . utf8_encode($BitacoraNotificacion["orden"]->getHorasInforme()) . '",';
            $json .= '"fechaRespuesta":"' . utf8_encode($BitacoraNotificacion["orden"]->getFechaRespuesta()) . '",';
            $json .= '"qr":"' . utf8_encode($BitacoraNotificacion["orden"]->getQr()) . '",';
            $json .= '"firmaDigital":"' . utf8_encode($BitacoraNotificacion["orden"]->getFirmaDigital()) . '",';
            $json .= '"selloDigital":"' . utf8_encode($BitacoraNotificacion["orden"]->getSelloDigital()) . '",';
            $json .= '"fechaRegistro":"' . utf8_encode($BitacoraNotificacion["orden"]->getFechaRegistro()) . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["orden"]->getFechaActualizacion()) . '",';
            $json .= '"email":"' . utf8_encode($BitacoraNotificacion["orden"]->getEmail()) . '"';
            $json .= '}';

            #RESUMEN CORREO
            $countResumen = 1;
            $json .= ',"resumenCorreos":[';
            if (count($BitacoraNotificacion["correosResumen"]) > 0 && $BitacoraNotificacion["correosResumen"] != "") {
                foreach ($BitacoraNotificacion["correosResumen"] as $correosResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($correosResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["correosResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE CORREO
            $countDetalle = 1;
            $json .= ',"detalleCorreos":[';
            if (count($BitacoraNotificacion["correosDetalle"]) > 0 && $BitacoraNotificacion["correosDetalle"] != "") {
                foreach ($BitacoraNotificacion["correosDetalle"] as $correosDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . utf8_encode($correosDetalle->getMovimiento()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($correosDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["correosDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #RESUMEN LLAMADA
            $countResumen = 1;
            $json .= ',"resumenLlamadas":[';
            if (count($BitacoraNotificacion["llamadasResumen"]) > 0 && $BitacoraNotificacion["llamadasResumen"] != "") {
                foreach ($BitacoraNotificacion["llamadasResumen"] as $llamadasResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"])));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($llamadasResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["llamadasResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE LLAMADA
            $countDetalle = 1;
            $json .= ',"detalleLlmadas":[';
            if (count($BitacoraNotificacion["llamadasDetalle"]) > 0 && $BitacoraNotificacion["llamadasDetalle"] != "") {
                foreach ($BitacoraNotificacion["llamadasDetalle"] as $llamadasDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . preg_replace("/\n/", "", utf8_encode($llamadasDetalle->getMovimiento())) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($llamadasDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["llamadasDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            $json .= "}";
            $json .= "]";
            $json .= "}";
            return $json;
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

    public function selectBitacoranotificacionesMuestras($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->selectBitacoranotificacionesMuestras($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
            $juzgadosDao = new JuzgadosDAO();
            $BitacoraNotificacion = $BitacoranotificacionesDto["data"];
            $statusDto = new EstatussolicitudesmuestrasDTO();
            $statusDAO = new EstatussolicitudesmuestrasDAO();
            $statusDto->setCveEstatusSolicitudMuestra($BitacoraNotificacion["solicitudMuestra"]->getCveEstatusSolicitudMuestra());
            $estatusMuestras = $statusDAO->selectEstatussolicitudesmuestras($statusDto);
            $estatus = "";
            if ($estatusMuestras != "") {
                $estatus = $estatusMuestras[0]->getDesEstatusSolicitudMuestra();
            }
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"data":[';
            $json .= '{';
            $json .= '"solicitudMuestra":{';
            $json .= '"idSolicitudMuestra":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getIdSolicitudMuestra()) . '",';
            $json .= '"numero":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getNumero()) . '",';
            $json .= '"anio":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getAnio()) . '",';
            $json .= '"estatus":"' . utf8_encode($estatus) . '",';
            $json .= '"cveJuzgado":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveJuzgado()) . '",';
            if ($BitacoraNotificacion["solicitudMuestra"]->getCveJuzgado() != "" && $BitacoraNotificacion["solicitudMuestra"]->getCveJuzgado() != 0) {
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudMuestra"]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                    $juzgadosDto = $juzgadosDto[0];
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                } else {
                    $json .= '"desJuzgadoDesahoga":"",';
                }
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }
            $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveJuzgadoDesahoga()) . '",';
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudMuestra"]->getCveJuzgadoDesahoga());
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                $juzgadosDto = $juzgadosDto[0];
                $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }

            $json .= '"idReferencia":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getIdReferencia()) . '",';
            $json .= '"fechaEnvio":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getFechaEnvio()) . '",';
            $json .= '"cveTipoCarpeta":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveTipoCarpeta()) . '",';
            $json .= '"carpetaInv":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCarpetaInv()) . '",';
            $json .= '"nuc":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getNuc()) . '",';
            $json .= '"cveUsuario":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveUsuario()) . '",';
            $json .= '"cveAdscripcionSolicita":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveAdscripcionSolicita()) . '",';
            $json .= '"cveEstatusSolicitudMuestra":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getCveEstatusSolicitudMuestra()) . '",';
            $json .= '"observaciones":' . json_encode(utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getObservaciones())) . ',';
            $fechaHoraRegistro = explode(" ", utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getFechaRegistro()));
            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
            $fechaRegistro = $fechaRegistro[2] . "-" . $fechaRegistro[1] . "-" . $fechaRegistro[0];
            $horaRegistro = $fechaHoraRegistro[1];
            $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["solicitudMuestra"]->getFechaActualizacion()) . '"';
            $json .= '}';
            $json .= ',"muestra":{';
            $json .= '"idMuestra":"' . utf8_encode($BitacoraNotificacion["muestra"]->getIdMuestra()) . '",';
            $json .= '"idSolicitudMuestra":"' . utf8_encode($BitacoraNotificacion["muestra"]->getIdSolicitudMuestra()) . '",';
            $json .= '"cveRespuestaSolicitudMuestra":"' . utf8_encode($BitacoraNotificacion["muestra"]->getCveRespuestaSolicitudMuestra()) . '",';
            $json .= '"numeroMuestra":"' . utf8_encode($BitacoraNotificacion["muestra"]->getNumeroMuestra()) . '",';
            $json .= '"anioMuestra":"' . utf8_encode($BitacoraNotificacion["muestra"]->getAnioMuestra()) . '",';
            $json .= '"solicitud":' . json_encode(utf8_encode($BitacoraNotificacion["muestra"]->getSolicitud())) . ',';
            $json .= '"negada":' . json_encode(utf8_encode($BitacoraNotificacion["muestra"]->getNegada())) . ',';
            $json .= '"concedida":' . json_encode(utf8_encode($BitacoraNotificacion["muestra"]->getConcedida())) . ',';
            $json .= '"fechaPractica":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFechaPractica()) . '",';
            $json .= '"horaPractica":"' . utf8_encode($BitacoraNotificacion["muestra"]->getHoraPractica()) . '",';
            $json .= '"horasPractica":"' . utf8_encode($BitacoraNotificacion["muestra"]->getHorasPractica()) . '",';
            $json .= '"fechaInforme":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFechaInforme()) . '",';
            $json .= '"horaInforme":"' . utf8_encode($BitacoraNotificacion["muestra"]->getHoraInforme()) . '",';
            $json .= '"horasInforme":"' . utf8_encode($BitacoraNotificacion["muestra"]->getHorasInforme()) . '",';
            $json .= '"fechaRespuesta":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFechaRespuesta()) . '",';
            $json .= '"qr":"' . utf8_encode($BitacoraNotificacion["muestra"]->getQr()) . '",';
            $json .= '"firmaDigital":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFirmaDigital()) . '",';
            $json .= '"selloDigital":"' . utf8_encode($BitacoraNotificacion["muestra"]->getSelloDigital()) . '",';
            $json .= '"fechaRegistro":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFechaRegistro()) . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["muestra"]->getFechaActualizacion()) . '",';
            $json .= '"email":"' . utf8_encode($BitacoraNotificacion["muestra"]->getEmail()) . '"';
            $json .= '}';

            #RESUMEN CORREO
            $countResumen = 1;
            $json .= ',"resumenCorreos":[';
            if (count($BitacoraNotificacion["correosResumen"]) > 0 && $BitacoraNotificacion["correosResumen"] != "") {
                foreach ($BitacoraNotificacion["correosResumen"] as $correosResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($correosResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["correosResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE CORREO
            $countDetalle = 1;
            $json .= ',"detalleCorreos":[';
            if (count($BitacoraNotificacion["correosDetalle"]) > 0 && $BitacoraNotificacion["correosDetalle"] != "") {
                foreach ($BitacoraNotificacion["correosDetalle"] as $correosDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . utf8_encode($correosDetalle->getMovimiento()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($correosDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["correosDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #RESUMEN LLAMADA
            $countResumen = 1;
            $json .= ',"resumenLlamadas":[';
            if (count($BitacoraNotificacion["llamadasResumen"]) > 0 && $BitacoraNotificacion["llamadasResumen"] != "") {
                foreach ($BitacoraNotificacion["llamadasResumen"] as $llamadasResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"])));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($llamadasResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["llamadasResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE LLAMADA
            $countDetalle = 1;
            $json .= ',"detalleLlmadas":[';
            if (count($BitacoraNotificacion["llamadasDetalle"]) > 0 && $BitacoraNotificacion["llamadasDetalle"] != "") {
                foreach ($BitacoraNotificacion["llamadasDetalle"] as $llamadasDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . preg_replace("/\n/", "", utf8_encode($llamadasDetalle->getMovimiento())) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($llamadasDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["llamadasDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            $json .= "}";
            $json .= "]";
            $json .= "}";
            return $json;
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

    public function selectBitacoranotificacionesApelacion($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesController = new BitacoranotificacionesController();
        $BitacoranotificacionesDto = $BitacoranotificacionesController->selectBitacoranotificacionesApelacion($BitacoranotificacionesDto);
        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
            $juzgadosDao = new JuzgadosDAO();
            $BitacoraNotificacion = $BitacoranotificacionesDto["data"];
            $statusDto = new EstatussolicitudescateosDTO();
            $statusDAO = new EstatussolicitudescateosDAO();
            $statusDto->setCveEstatusSolicitudCateo($BitacoraNotificacion["solicitudCateo"]->getCveEstatusSolicitudCateo());
            $estatusCateos = $statusDAO->selectEstatussolicitudescateos($statusDto);
            $estatus = "";
            if ($estatusCateos != "") {
                $estatus = $estatusCateos[0]->getDesEstatusSolicitudCateo();
            }
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"data":[';
            $json .= '{';
            $json .= '"solicitudCateo":{';
            $json .= '"idSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getIdSolicitudCateo()) . '",';
            $json .= '"numero":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getNumero()) . '",';
            $json .= '"anio":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getAnio()) . '",';
            $json .= '"estatus":"' . utf8_encode($estatus) . '",';
            $json .= '"cveJuzgado":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado()) . '",';
            if ($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado() != "" && $BitacoraNotificacion["solicitudCateo"]->getCveJuzgado() != 0) {
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudCateo"]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                    $juzgadosDto = $juzgadosDto[0];
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                } else {
                    $json .= '"desJuzgadoDesahoga":"",';
                }
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }
            $json .= '"cveCatAudiencia":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveCatAudiencia()) . '",';
            $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveJuzgadoDesahoga()) . '",';
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($BitacoraNotificacion["solicitudCateo"]->getCveJuzgadoDesahoga());
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                $juzgadosDto = $juzgadosDto[0];
                $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
            } else {
                $json .= '"desJuzgadoDesahoga":"",';
            }

            $json .= '"idReferencia":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getIdReferencia()) . '",';
            $json .= '"fechaEnvio":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaEnvio()) . '",';
            $json .= '"cveTipoCarpeta":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveTipoCarpeta()) . '",';
            $json .= '"carpetaInv":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCarpetaInv()) . '",';
            $json .= '"nuc":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getNuc()) . '",';
            $json .= '"cveUsuario":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveUsuario()) . '",';
            $json .= '"cveAdscripcionSolicita":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveAdscripcionSolicita()) . '",';
            $json .= '"cveEstatusSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getCveEstatusSolicitudCateo()) . '",';
            $json .= '"observaciones":' . json_encode(utf8_encode($BitacoraNotificacion["solicitudCateo"]->getObservaciones())) . ',';
            $fechaHoraRegistro = explode(" ", utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaRegistro()));
            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
            $fechaRegistro = $fechaRegistro[2] . "-" . $fechaRegistro[1] . "-" . $fechaRegistro[0];
            $horaRegistro = $fechaHoraRegistro[1];
            $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["solicitudCateo"]->getFechaActualizacion()) . '"';
            $json .= '}';
            $json .= ',"cateo":{';
            $json .= '"idCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getIdCateo()) . '",';
            $json .= '"idSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getIdSolicitudCateo()) . '",';
            $json .= '"cveRespuestaSolicitudCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getCveRespuestaSolicitudCateo()) . '",';
            $json .= '"numeroCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getNumeroCateo()) . '",';
            $json .= '"anioCateo":"' . utf8_encode($BitacoraNotificacion["cateo"]->getAnioCateo()) . '",';
            $json .= '"solicitud":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getSolicitud())) . ',';
            $json .= '"negada":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getNegada())) . ',';
            $json .= '"concedida":' . json_encode(utf8_encode($BitacoraNotificacion["cateo"]->getConcedida())) . ',';
            $json .= '"fechaPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaPractica()) . '",';
            $json .= '"horaPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHoraPractica()) . '",';
            $json .= '"horasPractica":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHorasPractica()) . '",';
            $json .= '"fechaInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaInforme()) . '",';
            $json .= '"horaInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHoraInforme()) . '",';
            $json .= '"horasInforme":"' . utf8_encode($BitacoraNotificacion["cateo"]->getHorasInforme()) . '",';
            $json .= '"fechaRespuesta":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaRespuesta()) . '",';
            $json .= '"qr":"' . utf8_encode($BitacoraNotificacion["cateo"]->getQr()) . '",';
            $json .= '"firmaDigital":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFirmaDigital()) . '",';
            $json .= '"selloDigital":"' . utf8_encode($BitacoraNotificacion["cateo"]->getSelloDigital()) . '",';
            $json .= '"fechaRegistro":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaRegistro()) . '",';
            $json .= '"fechaActualizacion":"' . utf8_encode($BitacoraNotificacion["cateo"]->getFechaActualizacion()) . '",';
            $json .= '"email":"' . utf8_encode($BitacoraNotificacion["cateo"]->getEmail()) . '"';
            $json .= '}';

            #RESUMEN CORREO
            $countResumen = 1;
            $json .= ',"resumenCorreos":[';
            if (count($BitacoraNotificacion["correosResumen"]) > 0 && $BitacoraNotificacion["correosResumen"] != "") {
                foreach ($BitacoraNotificacion["correosResumen"] as $correosResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($correosResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["correosResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE CORREO
            $countDetalle = 1;
            $json .= ',"detalleCorreos":[';
            if (count($BitacoraNotificacion["correosDetalle"]) > 0 && $BitacoraNotificacion["correosDetalle"] != "") {
                foreach ($BitacoraNotificacion["correosDetalle"] as $correosDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($correosDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . utf8_encode($correosDetalle->getMovimiento()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($correosDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $correosDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $correosDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["correosDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #RESUMEN LLAMADA
            $countResumen = 1;
            $json .= ',"resumenLlamadas":[';
            if (count($BitacoraNotificacion["llamadasResumen"]) > 0 && $BitacoraNotificacion["llamadasResumen"] != "") {
                foreach ($BitacoraNotificacion["llamadasResumen"] as $llamadasResumen) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasResumen["Medio"]) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasResumen["CveUsuario"] . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasResumen["CveUsuario"]) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '",';
                    $json .= '"total":"' . utf8_encode($llamadasResumen["totalRegistros"]) . '"';
                    $json .= '}';
                    $countResumen++;
                    if ($countResumen <= count($BitacoraNotificacion["llamadasResumen"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            #DETALLE LLAMADA
            $countDetalle = 1;
            $json .= ',"detalleLlmadas":[';
            if (count($BitacoraNotificacion["llamadasDetalle"]) > 0 && $BitacoraNotificacion["llamadasDetalle"] != "") {
                foreach ($BitacoraNotificacion["llamadasDetalle"] as $llamadasDetalle) {
                    $json .= '{';
                    $json .= '"medio":"' . utf8_encode($llamadasDetalle->getMedio()) . '",';
                    $json .= '"movimiento":"' . preg_replace("/\n/", "", utf8_encode($llamadasDetalle->getMovimiento())) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($llamadasDetalle->getFechaRegistro()) . '",';
                    $usuario = "NO INENTIFICADO(IDENTIFICADOR:" . $llamadasDetalle->getCveUsuario() . ")";
                    if ($BitacoraNotificacion["usuarios"] != "" && count($BitacoraNotificacion["usuarios"]) > 0) {
                        foreach ($BitacoraNotificacion["usuarios"]["data"] as $usuariosGestion) {
                            if ($usuariosGestion["cveUsuario"] == $llamadasDetalle->getCveUsuario()) {
                                $usuario = utf8_decode(utf8_decode($usuariosGestion["nombre"] . " " . $usuariosGestion["paterno"] . " " . $usuariosGestion["materno"]));
                                break;
                            }
                        }
                    }
                    $json .= '"usuario":"' . utf8_encode($usuario) . '"';
                    $json .= '}';
                    $countDetalle++;
                    if ($countDetalle <= count($BitacoraNotificacion["llamadasDetalle"])) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';

            $json .= "}";
            $json .= "]";
            $json .= "}";
            return $json;
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

}

@$idBitacoraNotificacion = $_POST["idBitacoraNotificacion"];
@$cveMedioNotificacion = $_POST["cveMedioNotificacion"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$cveEstatusNotificacion = $_POST["cveEstatusNotificacion"];
@$idReferencia = $_POST["idReferencia"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cvejuzgado = $_POST["cvejuzgado"];
@$cveUsuario = $_POST["cveUsuario"];
@$medio = $_POST["medio"];
@$movimiento = $_POST["movimiento"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$bitacoranotificacionesFacade = new BitacoranotificacionesFacade();
$bitacoranotificacionesDto = new BitacoranotificacionesDTO();

$bitacoranotificacionesDto->setIdBitacoraNotificacion($idBitacoraNotificacion);
$bitacoranotificacionesDto->setCveMedioNotificacion($cveMedioNotificacion);
$bitacoranotificacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
$bitacoranotificacionesDto->setCveTipoActuacion($cveTipoActuacion);
$bitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
$bitacoranotificacionesDto->setIdReferencia($idReferencia);
$bitacoranotificacionesDto->setNumero($numero);
$bitacoranotificacionesDto->setAnio($anio);
$bitacoranotificacionesDto->setCvejuzgado($cvejuzgado);
$bitacoranotificacionesDto->setCveUsuario($cveUsuario);
$bitacoranotificacionesDto->setMedio($medio);
$bitacoranotificacionesDto->setMovimiento($movimiento);
$bitacoranotificacionesDto->setFechaRegistro($fechaRegistro);
$bitacoranotificacionesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idBitacoraNotificacion == "")) {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->insertBitacoranotificaciones($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if (($accion == "guardar") && ($idBitacoraNotificacion != "")) {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->updateBitacoranotificaciones($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if ($accion == "consultar") {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificaciones($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if (($accion == "baja") && ($idBitacoraNotificacion != "")) {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->deleteBitacoranotificaciones($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if (($accion == "seleccionar") && ($idBitacoraNotificacion != "")) {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificaciones($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if ($accion == "consultaCateos") {
    $bitacoranotificacionesDto->setCveTipoCarpeta("9");
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificacionesCateos($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if ($accion == "consultaOrden") {
    $bitacoranotificacionesDto->setCveTipoCarpeta("10");
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificacionesOrden($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if ($accion == "consultaMuestras") {
    $bitacoranotificacionesDto->setCveTipoCarpeta("11");
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificacionesMuestras($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
} else if ($accion == "consultaApelacion") {
    $bitacoranotificacionesDto = $bitacoranotificacionesFacade->selectBitacoranotificacionesApelacion($bitacoranotificacionesDto);
    echo $bitacoranotificacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>