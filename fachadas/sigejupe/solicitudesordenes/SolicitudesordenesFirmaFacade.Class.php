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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/SolicitudesordenesFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/ComprobanteSolicitudesordenesFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudesordenesFacade {

    private $proveedor;

    public function __construct() {

    }

    public function validarSolicitudesordenes($SolicitudesordenesDto) {
        $SolicitudesordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getidSolicitudOrden(), "utf8") : strtoupper($SolicitudesordenesDto->getidSolicitudOrden()))))));
        if ($this->esFecha($SolicitudesordenesDto->getidSolicitudOrden())) {
            $SolicitudesordenesDto->setidSolicitudOrden($this->fechaMysql($SolicitudesordenesDto->getidSolicitudOrden()));
        }
        $SolicitudesordenesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getnumero(), "utf8") : strtoupper($SolicitudesordenesDto->getnumero()))))));
        if ($this->esFecha($SolicitudesordenesDto->getnumero())) {
            $SolicitudesordenesDto->setnumero($this->fechaMysql($SolicitudesordenesDto->getnumero()));
        }
        $SolicitudesordenesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getanio(), "utf8") : strtoupper($SolicitudesordenesDto->getanio()))))));
        if ($this->esFecha($SolicitudesordenesDto->getanio())) {
            $SolicitudesordenesDto->setanio($this->fechaMysql($SolicitudesordenesDto->getanio()));
        }
        $SolicitudesordenesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveJuzgado(), "utf8") : strtoupper($SolicitudesordenesDto->getcveJuzgado()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveJuzgado())) {
            $SolicitudesordenesDto->setcveJuzgado($this->fechaMysql($SolicitudesordenesDto->getcveJuzgado()));
        }
        $SolicitudesordenesDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveCatAudiencia(), "utf8") : strtoupper($SolicitudesordenesDto->getcveCatAudiencia()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveCatAudiencia())) {
            $SolicitudesordenesDto->setcveCatAudiencia($this->fechaMysql($SolicitudesordenesDto->getcveCatAudiencia()));
        }
        $SolicitudesordenesDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveJuzgadoDesahoga(), "utf8") : strtoupper($SolicitudesordenesDto->getcveJuzgadoDesahoga()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveJuzgadoDesahoga())) {
            $SolicitudesordenesDto->setcveJuzgadoDesahoga($this->fechaMysql($SolicitudesordenesDto->getcveJuzgadoDesahoga()));
        }
        $SolicitudesordenesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getidReferencia(), "utf8") : strtoupper($SolicitudesordenesDto->getidReferencia()))))));
        if ($this->esFecha($SolicitudesordenesDto->getidReferencia())) {
            $SolicitudesordenesDto->setidReferencia($this->fechaMysql($SolicitudesordenesDto->getidReferencia()));
        }
        $SolicitudesordenesDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getfechaEnvio(), "utf8") : strtoupper($SolicitudesordenesDto->getfechaEnvio()))))));
        if ($this->esFecha($SolicitudesordenesDto->getfechaEnvio())) {
            $SolicitudesordenesDto->setfechaEnvio($this->fechaMysql($SolicitudesordenesDto->getfechaEnvio()));
        }
        $SolicitudesordenesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveTipoCarpeta(), "utf8") : strtoupper($SolicitudesordenesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveTipoCarpeta())) {
            $SolicitudesordenesDto->setcveTipoCarpeta($this->fechaMysql($SolicitudesordenesDto->getcveTipoCarpeta()));
        }
        $SolicitudesordenesDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcarpetaInv(), "utf8") : strtoupper($SolicitudesordenesDto->getcarpetaInv()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcarpetaInv())) {
            $SolicitudesordenesDto->setcarpetaInv($this->fechaMysql($SolicitudesordenesDto->getcarpetaInv()));
        }
        $SolicitudesordenesDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getnuc(), "utf8") : strtoupper($SolicitudesordenesDto->getnuc()))))));
        if ($this->esFecha($SolicitudesordenesDto->getnuc())) {
            $SolicitudesordenesDto->setnuc($this->fechaMysql($SolicitudesordenesDto->getnuc()));
        }
        $SolicitudesordenesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveUsuario(), "utf8") : strtoupper($SolicitudesordenesDto->getcveUsuario()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveUsuario())) {
            $SolicitudesordenesDto->setcveUsuario($this->fechaMysql($SolicitudesordenesDto->getcveUsuario()));
        }
        $SolicitudesordenesDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveAdscripcionSolicita(), "utf8") : strtoupper($SolicitudesordenesDto->getcveAdscripcionSolicita()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveAdscripcionSolicita())) {
            $SolicitudesordenesDto->setcveAdscripcionSolicita($this->fechaMysql($SolicitudesordenesDto->getcveAdscripcionSolicita()));
        }
        $SolicitudesordenesDto->setcveEstatusSolicitudOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getcveEstatusSolicitudOrden(), "utf8") : strtoupper($SolicitudesordenesDto->getcveEstatusSolicitudOrden()))))));
        if ($this->esFecha($SolicitudesordenesDto->getcveEstatusSolicitudOrden())) {
            $SolicitudesordenesDto->setcveEstatusSolicitudOrden($this->fechaMysql($SolicitudesordenesDto->getcveEstatusSolicitudOrden()));
        }
        $SolicitudesordenesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getobservaciones(), "utf8") : strtoupper($SolicitudesordenesDto->getobservaciones()))))));
        if ($this->esFecha($SolicitudesordenesDto->getobservaciones())) {
            $SolicitudesordenesDto->setobservaciones($this->fechaMysql($SolicitudesordenesDto->getobservaciones()));
        }
        $SolicitudesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getfechaRegistro(), "utf8") : strtoupper($SolicitudesordenesDto->getfechaRegistro()))))));
        if ($this->esFecha($SolicitudesordenesDto->getfechaRegistro())) {
            $SolicitudesordenesDto->setfechaRegistro($this->fechaMysql($SolicitudesordenesDto->getfechaRegistro()));
        }
        $SolicitudesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesordenesDto->getfechaActualizacion(), "utf8") : strtoupper($SolicitudesordenesDto->getfechaActualizacion()))))));
        if ($this->esFecha($SolicitudesordenesDto->getfechaActualizacion())) {
            $SolicitudesordenesDto->setfechaActualizacion($this->fechaMysql($SolicitudesordenesDto->getfechaActualizacion()));
        }
        return $SolicitudesordenesDto;
    }

    public function selectSolicitudesordenes($SolicitudesordenesDto) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
        $SolicitudesordenesDto = $SolicitudesordenesFirmaController->selectSolicitudesordenes($SolicitudesordenesDto);
        if ($SolicitudesordenesDto != "") {
            $dtoToJson = new DtoToJson($SolicitudesordenesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSolicitudesordenes($param = "") {
        $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
        return $SolicitudesordensDto = $SolicitudesordenesFirmaController->insertSolicitudesordenes($param);
    }

    public function updateSolicitudesordenes($SolicitudesordenesDto) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
        $SolicitudesordenesDto = $SolicitudesordenesFirmaController->updateSolicitudesordenes($SolicitudesordenesDto);
        if ($SolicitudesordenesDto != "") {
            $dtoToJson = new DtoToJson($SolicitudesordenesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function consultaOrden($idJuez, $param) {
        if ($idJuez != "" && $idJuez != 0) {
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDao = new JuzgadoresDAO();
//            $idJuez = 1521;
            $juzgadoresDto->setCveUsuario($idJuez);
            $juzgadoresDto = $juzgadoresDao->selectJuzgadoreCveUsario($juzgadoresDto);
            if ($juzgadoresDto != "" && count($juzgadoresDto) > 0) {
                $juzgadoresDto = $juzgadoresDto[0];
                $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
                $resultados = $SolicitudesordenesFirmaController->consultaOrden($juzgadoresDto->getIdJuzgador(), $param);
                if ($resultados["type"] == "OK") {
                    $juzgadosDao = new JuzgadosDAO();
                    $estatussolicitudesDto = new EstatussolicitudesordenesDTO();
                    $estatussolicitudesDao = new EstatussolicitudesordenesDAO();
                    $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudesordenes($estatussolicitudesDto);
                    $json = "";
                    $json .= '{"type":"OK",';
                    $json .= '"total":"' . $resultados["total"] . '",';
                    $json .= '"paginas":"';
                    $paginas = "";
                    for ($i = 0; $i < count($resultados["paginas"]); $i++) {
                        $paginas .= $resultados["paginas"][$i] . ",";
                    }
                    $paginas = substr($paginas, 0, strlen($paginas) - 1);
                    $json .= $paginas . '",';
                    $json .= '"data":[';
                    $x = 1;
                    foreach ($resultados["data"] as $resultado) {
                        $json .= '{';
                        $json .= '"solicitudOrden":{';
                        $json .= '"idSolicitudOrden":"' . utf8_encode($resultado["solicitudOrden"]->getIdSolicitudOrden()) . '",';
                        $json .= '"numero":"' . utf8_encode($resultado["solicitudOrden"]->getNumero()) . '",';
                        $json .= '"anio":"' . utf8_encode($resultado["solicitudOrden"]->getAnio()) . '",';
                        $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudOrden"]->getCveJuzgado()) . '",';
                        if ($resultado["solicitudOrden"]->getCveJuzgado() != "" && $resultado["solicitudOrden"]->getCveJuzgado() != 0) {
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDto->setCveJuzgado($resultado["solicitudOrden"]->getCveJuzgado());
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
                        $json .= '"cveCatAudiencia":"' . utf8_encode($resultado["solicitudOrden"]->getCveCatAudiencia()) . '",';
                        $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudOrden"]->getCveJuzgadoDesahoga()) . '",';
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudOrden"]->getCveJuzgadoDesahoga());
                        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                        if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                            $juzgadosDto = $juzgadosDto[0];
                            $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                        } else {
                            $json .= '"desJuzgadoDesahoga":"",';
                        }

                        $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudOrden"]->getIdReferencia()) . '",';
                        $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudOrden"]->getFechaEnvio()) . '",';
                        $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudOrden"]->getCveTipoCarpeta()) . '",';
                        $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudOrden"]->getCarpetaInv()) . '",';
                        $json .= '"nuc":"' . utf8_encode($resultado["solicitudOrden"]->getNuc()) . '",';
                        $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudOrden"]->getCveUsuario()) . '",';
                        $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudOrden"]->getCveAdscripcionSolicita()) . '",';
                        $json .= '"cveEstatusSolicitudOrden":"' . utf8_encode($resultado["solicitudOrden"]->getCveEstatusSolicitudOrden()) . '",';
                        $desEstatusSolicitud = "";
                        foreach ($estatussolicitudesDto as $estatusSolicitud) {
                            if ($estatusSolicitud->getCveEstatusSolicitudOrdenes() == $resultado["solicitudOrden"]->getCveEstatusSolicitudOrden()) {
                                $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudOrdenes();
                                break;
                            }
                        }
                        $json .= '"descEstatusSolicitudOrden":"' . utf8_encode($desEstatusSolicitud) . '",';
                        $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudOrden"]->getObservaciones())) . ',';
                        $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudOrden"]->getFechaRegistro()));
                        $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                        $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                        $horaRegistro = $fechaHoraRegistro[1];
                        $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudOrden"]->getFechaActualizacion()) . '"';
                        $json .= '}';
                        $json .= ',"orden":{';
                        $json .= '"idOrden":"' . utf8_encode($resultado["orden"]->getIdOrden()) . '",';
                        $json .= '"idSolicitudOrden":"' . utf8_encode($resultado["orden"]->getIdSolicitudOrden()) . '",';
                        $json .= '"cveRespuestaSolicitudOrden":"' . utf8_encode($resultado["orden"]->getCveRespuestaSolicitudOrden()) . '",';
                        $json .= '"numeroOrden":"' . utf8_encode($resultado["orden"]->getNumeroOrden()) . '",';
                        $json .= '"anioOrden":"' . utf8_encode($resultado["orden"]->getAnioOrden()) . '",';
                        $json .= '"solicitud":' . json_encode(utf8_encode($resultado["orden"]->getSolicitud())) . ',';
                        $json .= '"negada":' . json_encode(utf8_encode($resultado["orden"]->getNegada())) . ',';
                        $json .= '"concedida":' . json_encode(utf8_encode($resultado["orden"]->getConcedida())) . ',';
                        $json .= '"fechaPractica":"' . utf8_encode($resultado["orden"]->getFechaPractica()) . '",';
                        $json .= '"horaPractica":"' . utf8_encode($resultado["orden"]->getHoraPractica()) . '",';
                        $json .= '"horasPractica":"' . utf8_encode($resultado["orden"]->getHorasPractica()) . '",';
                        $json .= '"fechaInforme":"' . utf8_encode($resultado["orden"]->getFechaInforme()) . '",';
                        $json .= '"horaInforme":"' . utf8_encode($resultado["orden"]->getHoraInforme()) . '",';
                        $json .= '"horasInforme":"' . utf8_encode($resultado["orden"]->getHorasInforme()) . '",';
                        $json .= '"fechaRespuesta":"' . utf8_encode($resultado["orden"]->getFechaRespuesta()) . '",';
                        $json .= '"qr":"' . utf8_encode($resultado["orden"]->getQr()) . '",';
                        $json .= '"firmaDigital":"' . utf8_encode($resultado["orden"]->getFirmaDigital()) . '",';
                        $json .= '"selloDigital":"' . utf8_encode($resultado["orden"]->getSelloDigital()) . '",';
                        $json .= '"fechaRegistro":"' . utf8_encode($resultado["orden"]->getFechaRegistro()) . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["orden"]->getFechaActualizacion()) . '",';
                        $json .= '"email":"' . utf8_encode($resultado["orden"]->getEmail()) . '"';
                        $json .= '}';
                        $countPersonas = 1;
                        $json .= ',"personas":[';
                        if (count($resultado["personas"]) > 0 && $resultado["personas"] != "") {
                            foreach ($resultado["personas"] as $personas) {
                                $json .= '{';
                                $json .= '"idPersona":"' . utf8_encode($personas->getIdPersonaOrden()) . '",';
                                $json .= '"idSolicitudOrden":"' . utf8_encode($personas->getIdSolicitudOrden()) . '",';
                                $json .= '"paterno":' . json_encode(utf8_encode($personas->getPaterno())) . ',';
                                $json .= '"materno":' . json_encode(utf8_encode($personas->getMaterno())) . ',';
                                $json .= '"nombre":' . json_encode(utf8_encode($personas->getNombre())) . ',';
                                $json .= '"domicilio":' . json_encode(utf8_encode($personas->getDomicilio())) . ',';
                                $json .= '"cveMunicipio":"' . utf8_encode($personas->getCveMunicipio()) . '",';
                                $json .= '"cveGenero":"' . utf8_encode($personas->getCveGenero()) . '"';
                                $json .= '}';
                                $countPersonas++;
                                if ($countPersonas <= count($resultado["personas"])) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= ']';

                        $json .= ',"juzgador":[';
                        if (count($resultado["juzgador"]) > 0 && $resultado["juzgador"] != "") {
                            $json .= '{';
                            $json .= '"idJuzgador":"' . utf8_encode($resultado["juzgador"]->getIdJuzgador()) . '",';
                            $json .= '"cveUsuario":"' . utf8_encode($resultado["juzgador"]->getCveUsuario()) . '",';
                            $json .= '"numEmpleado":' . json_encode(utf8_encode($resultado["juzgador"]->getNumEmpleado())) . ',';
                            $json .= '"titulo":' . json_encode(utf8_encode($resultado["juzgador"]->getTitulo())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($resultado["juzgador"]->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($resultado["juzgador"]->getMaterno())) . ',';
                            $json .= '"nombre":"' . utf8_encode($resultado["juzgador"]->getNombre()) . '",';
                            $json .= '"cveTipoJuzgador":"' . utf8_encode($resultado["juzgador"]->getCveTipoJuzgador()) . '",';
                            $json .= '"sorteo":"' . utf8_encode($resultado["juzgador"]->getSorteo()) . '",';
                            $json .= '"programable":"' . utf8_encode($resultado["juzgador"]->getProgramable()) . '",';
                            $json .= '"activo":"' . utf8_encode($resultado["juzgador"]->getActivo()) . '",';
                            $json .= '"fechaRegistro":"' . utf8_encode($resultado["juzgador"]->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . utf8_encode($resultado["juzgador"]->getFechaActualizacion()) . '"';
                            $json .= '}';
                        }
                        $json .= ']';

                        $json .= '}';
                        $x++;
                        if ($x <= count($resultados["data"])) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                    $json .= "}";
                    return $json;
                } else {
                    $resultado["status"] = "Error";
                    $resultado["text"] = "NO SE ENCONTRARON RESULTADOS";
                    return json_encode($resultado);
                }
            } else {
                $resultado["status"] = "Error";
                $resultado["text"] = "OCURRIO UN ERROR AL REALIZAR LA CONSULTA";
                return json_encode($resultado);
            }
        }
        $resultado["status"] = "Error";
        $resultado["text"] = "OCURRIO UN ERROR AL REALIZAR LA CONSULTA";
        return json_encode($resultado);
    }

    public function deleteSolicitudesordenes($SolicitudesordenesDto) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
        $SolicitudesordenesDto = $SolicitudesordenesFirmaController->deleteSolicitudesordenes($SolicitudesordenesDto);
        if ($SolicitudesordenesDto == true) {
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

    public function consultaOrdenDetalle($idOrden, $juez) {
        if ($idOrden != "" && $idOrden != 0) {
            $SolicitudesordensController = new SolicitudesordenesFirmaController();
            $resultados = $SolicitudesordensController->consultaOrdenDetalle($idOrden);
            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudesordenesDAO();
                $estatussolicitudesDto = new EstatussolicitudesordenesDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudesordenes($estatussolicitudesDto);

                $tiposjuzgadoresDao = new TiposjuzgadoresDAO();
                $tiposjuzgadoresDto = new TiposjuzgadoresDTO();
                $tiposjuzgadoresDto = $tiposjuzgadoresDao->selectTiposjuzgadores($tiposjuzgadoresDto);
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"data":[';
                $x = 1;
                foreach ($resultados["data"] as $resultado) {
                    // --> Actualizamo la solicitud
                    if ($juez != "") {
                        $solOrdenDto = new SolicitudesordenesDTO();
                        $solicitudesordenesDao = new SolicitudesordenesDAO();
                        $solOrdenDto->setCveEstatusSolicitudOrden(2);
                        $fecha = $solicitudesordenesDao->selectFechaHoraMySql();
                        $solOrdenDto->setFechaActualizacion($fecha);
                        $solOrdenDto->setIdSolicitudOrden($resultado["solicitudOrden"]->getIdSolicitudOrden());
                        $solOrdenDto = $solicitudesordenesDao->updateSolicitudesordenes($solOrdenDto);
                    }
                    $json .= '{';
                    $json .= '"solicitudOrden":{';
                    $json .= '"idSolicitudOrden":"' . utf8_encode($resultado["solicitudOrden"]->getIdSolicitudOrden()) . '",';
                    $json .= '"numero":"' . utf8_encode($resultado["solicitudOrden"]->getNumero()) . '",';
                    $json .= '"anio":"' . utf8_encode($resultado["solicitudOrden"]->getAnio()) . '",';
                    $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudOrden"]->getCveJuzgado()) . '",';
                    if ($resultado["solicitudOrden"]->getCveJuzgado() != "" && $resultado["solicitudOrden"]->getCveJuzgado() != 0) {
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudOrden"]->getCveJuzgado());
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
                    $json .= '"cveCatAudiencia":"' . utf8_encode($resultado["solicitudOrden"]->getCveCatAudiencia()) . '",';
                    $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudOrden"]->getCveJuzgadoDesahoga()) . '",';
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($resultado["solicitudOrden"]->getCveJuzgadoDesahoga());
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                    if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                        $juzgadosDto = $juzgadosDto[0];
                        $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                    } else {
                        $json .= '"desJuzgadoDesahoga":"",';
                    }
                    $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudOrden"]->getIdReferencia()) . '",';
                    $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudOrden"]->getFechaEnvio()) . '",';
                    $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudOrden"]->getCveTipoCarpeta()) . '",';
                    $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudOrden"]->getCarpetaInv()) . '",';
                    $json .= '"nuc":"' . utf8_encode($resultado["solicitudOrden"]->getNuc()) . '",';
                    $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudOrden"]->getCveUsuario()) . '",';
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($resultado["solicitudOrden"]->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    }
                    $json .= '"nombreUsuario":"' . utf8_encode($nombreMP) . '",';
                    $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudOrden"]->getCveAdscripcionSolicita()) . '",';
                    $json .= '"cveEstatusSolicitudOrden":"' . utf8_encode($resultado["solicitudOrden"]->getCveEstatusSolicitudOrden()) . '",';
                    $desEstatusSolicitud = "";
                    foreach ($estatussolicitudesDto as $estatusSolicitud) {
                        if ($estatusSolicitud->getCveEstatusSolicitudOrdenes() == $resultado["solicitudOrden"]->getCveEstatusSolicitudOrden()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudOrdenes();
                            break;
                        }
                    }
                    $json .= '"descEstatusSolicitudOrden":"' . utf8_encode($desEstatusSolicitud) . '",';
                    $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudOrden"]->getObservaciones())) . ',';
                    $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudOrden"]->getFechaRegistro()));
                    $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                    $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                    $horaRegistro = $fechaHoraRegistro[1];
                    $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudOrden"]->getFechaActualizacion()) . '"';
                    $json .= '}';
                    $json .= ',"orden":{';
                    $json .= '"idOrden":"' . utf8_encode($resultado["orden"]->getIdOrden()) . '",';
                    $json .= '"idSolicitudOrden":"' . utf8_encode($resultado["orden"]->getIdSolicitudOrden()) . '",';
                    $json .= '"cveRespuestaSolicitudOrden":"' . utf8_encode($resultado["orden"]->getCveRespuestaSolicitudOrden()) . '",';
                    $json .= '"numeroOrden":"' . utf8_encode($resultado["orden"]->getNumeroOrden()) . '",';
                    $json .= '"anioOrden":"' . utf8_encode($resultado["orden"]->getAnioOrden()) . '",';
                    $json .= '"solicitud":' . json_encode(utf8_encode(preg_replace("/\n/", "<br>", $resultado["orden"]->getSolicitud()))) . ',';
                    $json .= '"negada":' . json_encode(utf8_encode($resultado["orden"]->getNegada())) . ',';
                    $json .= '"concedida":' . json_encode(utf8_encode($resultado["orden"]->getConcedida())) . ',';
                    $json .= '"fechaPractica":"' . utf8_encode($resultado["orden"]->getFechaPractica()) . '",';
                    $json .= '"horaPractica":"' . utf8_encode($resultado["orden"]->getHoraPractica()) . '",';
                    $json .= '"horasPractica":"' . utf8_encode($resultado["orden"]->getHorasPractica()) . '",';
                    $json .= '"fechaInforme":"' . utf8_encode($resultado["orden"]->getFechaInforme()) . '",';
                    $json .= '"horaInforme":"' . utf8_encode($resultado["orden"]->getHoraInforme()) . '",';
                    $json .= '"horasInforme":"' . utf8_encode($resultado["orden"]->getHorasInforme()) . '",';
                    $json .= '"fechaRespuesta":"' . utf8_encode($resultado["orden"]->getFechaRespuesta()) . '",';
                    $json .= '"qr":"' . utf8_encode($resultado["orden"]->getQr()) . '",';
                    $json .= '"firmaDigital":"' . utf8_encode($resultado["orden"]->getFirmaDigital()) . '",';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["orden"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["orden"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["orden"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . utf8_encode($resultado["orden"]->getEmail()) . '",';
                    $json .= '"motivoCancelacion":"' . utf8_encode($resultado["orden"]->getMotivoCancelacion()) . '"';
                    $json .= '}';
                    $countPersonas = 1;
                    $json .= ',"personas":[';
                    if (count($resultado["personas"]) > 0 && $resultado["personas"] != "") {
                        foreach ($resultado["personas"] as $persona) {
                            $json .= '{';
                            $json .= '"idPersona":' . json_encode(utf8_encode(($persona->getIdPersonaOrden()))) . ',';
                            $json .= '"idSolicitudOrden":' . json_encode(utf8_encode(($persona->getIdSolicitudOrden()))) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode(($persona->getPaterno()))) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode(($persona->getMaterno()))) . ',';
                            $json .= '"nombre":' . json_encode(utf8_encode(($persona->getNombre()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($persona->getDomicilio()))) . ',';
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode(($persona->getCveMunicipio()))) . ',';
                            $json .= '"cveGenero":' . json_encode(utf8_encode(($persona->getCveGenero()))) . ',';
                            $json .= '"cveOrigen":' . json_encode(utf8_encode(($persona->getCveOrigen()))) . '';
                            $json .= '}';
                            $countPersonas++;
                            if ($countPersonas <= count($resultado["personas"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countImputados = 1;
                    $json .= ',"imputados":[';
                    if (count($resultado["imputados"]) > 0 && $resultado["imputados"] != "") {
                        foreach ($resultado["imputados"] as $imputado) {
                            $json .= '{';
                            $json .= '"idImputadoOrden":"' . ($imputado->getIdImputadoOrden()) . '",';
                            $json .= '"idSolicitudOrden":"' . ($imputado->getIdSolicitudOrden()) . '",';
                            $json .= '"activo":"' . ($imputado->getActivo()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($imputado->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($imputado->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($imputado->getMaterno())) . ',';
                            $json .= '"alias":' . json_encode(utf8_encode($imputado->getAlias())) . ',';
                            $json .= '"cveGenero":"' . ($imputado->getCveGenero()) . '",';
                            $json .= '"detenido":"' . ($imputado->getDetenido()) . '",';
                            $json .= '"cveTipoPersona":"' . ($imputado->getCveTipoPersona()) . '",';
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ',';
                            $json .= '"fechaRegistro":"' . ($imputado->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($imputado->getFechaActualizacion()) . '",';
                            $json .= '"domicilio":' . json_encode(utf8_encode($imputado->getDomicilio())) . ',';
                            $json .= '"telefono":' . json_encode(utf8_encode($imputado->getTelefono())) . ',';
                            $json .= '"email":' . json_encode(utf8_encode($imputado->getEmail())) . '';
                            $json .= '}';
                            $countImputados++;
                            if ($countImputados <= count($resultado["imputados"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $countOfendidos = 1;
                    $json .= ',"ofendidos":[';
                    if (count($resultado["ofendidos"]) > 0 && $resultado["ofendidos"] != "") {
                        foreach ($resultado["ofendidos"] as $ofendido) {
                            $json .= '{';
                            $json .= '"idOfendidoOrden":"' . ($ofendido->getIdOfendidoOrden()) . '",';
                            $json .= '"idSolicitudOrden":"' . ($ofendido->getIdSolicitudOrden()) . '",';
                            $json .= '"activo":"' . ($ofendido->getActivo()) . '",';
                            $json .= '"fechaRegistro":"' . ($ofendido->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($ofendido->getFechaActualizacion()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . ',';
                            $json .= '"cveTipoPersona":"' . ($ofendido->getCveTipoPersona()) . '",';
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . ',';
                            $json .= '"cveGenero":"' . ($ofendido->getCveGenero()) . '",';
                            $json .= '"domicilio":' . json_encode(utf8_encode($ofendido->getDomicilio())) . ',';
                            $json .= '"telefono":' . json_encode(utf8_encode($ofendido->getTelefono())) . '';
                            $json .= '}';
                            $countOfendidos++;
                            if ($countOfendidos <= count($resultado["ofendidos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $countDelitos = 1;
                    $json .= ',"delitos":[';
                    if (count($resultado["delitos"]) > 0 && $resultado["delitos"] != "") {
                        foreach ($resultado["delitos"] as $delito) {
                            $json .= '{';
                            $json .= '"idDelitoOrden":"' . ($delito->getIdDelitoOrden()) . '",';
                            $json .= '"idSolicitudOrden":"' . ($delito->getIdSolicitudOrden()) . '",';
                            $json .= '"cveDelito":"' . ($delito->getCveDelito()) . '",';
                            $json .= '"activo":"' . ($delito->getActivo()) . '",';
                            $json .= '"fechaRegistro":"' . ($delito->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($delito->getFechaActualizacion()) . '"';
                            $json .= '}';
                            $countDelitos++;
                            if ($countDelitos <= count($resultado["delitos"])) {
                                $json .= ",";
                            }
                        }
                    }

                    $json .= ']';
                    $countMinisteriosPublicos = 1;
                    $json .= ',"ministeriosPublicos":[';
                    if (count($resultado["ministeriosPublicos"]) > 0 && $resultado["ministeriosPublicos"] != "") {
                        foreach ($resultado["ministeriosPublicos"] as $ministerioPublico) {
                            $json .= '{';
                            $json .= '"idMinisterioResponsable":"' . ($ministerioPublico->getIdMinisterioResponsableOrden()) . '",';
                            $json .= '"idSolicitudOrden":"' . ($ministerioPublico->getIdSolicitudOrden()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($ministerioPublico->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($ministerioPublico->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($ministerioPublico->getMaterno())) . ',';
                            $json .= '"fechaRegistro":"' . ($ministerioPublico->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($ministerioPublico->getFechaActualizacion()) . '"';
                            $json .= '}';
                            $countMinisteriosPublicos++;
                            if ($countMinisteriosPublicos <= count($resultado["ministeriosPublicos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $json .= ',"juzgador":{';
                    if (count($resultado["juzgador"]) > 0 && $resultado["juzgador"] != "") {
                        $json .= '"idJuzgador":"' . utf8_encode($resultado["juzgador"]->getIdJuzgador()) . '",';
                        $json .= '"cveUsuario":"' . utf8_encode($resultado["juzgador"]->getCveUsuario()) . '",';
                        $json .= '"numEmpleado":' . json_encode(utf8_encode($resultado["juzgador"]->getNumEmpleado())) . ',';
                        $json .= '"titulo":' . json_encode(utf8_encode($resultado["juzgador"]->getTitulo())) . ',';
                        $json .= '"paterno":' . json_encode(utf8_encode($resultado["juzgador"]->getPaterno())) . ',';
                        $json .= '"materno":' . json_encode(utf8_encode($resultado["juzgador"]->getMaterno())) . ',';
                        $json .= '"nombre":"' . utf8_encode($resultado["juzgador"]->getNombre()) . '",';
                        $json .= '"cveTipoJuzgador":"' . utf8_encode($resultado["juzgador"]->getCveTipoJuzgador()) . '",';
                        $desTipoJuzgador = "";
                        foreach ($tiposjuzgadoresDto as $tipojuzgador) {
                            if ($tipojuzgador->getCveTipoJuzgador() == $resultado["juzgador"]->getCveTipoJuzgador()) {
                                $desTipoJuzgador = $tipojuzgador->getDesTipoJuzgador();
                                break;
                            }
                        }
                        $json .= '"desTipoJuzgador":"' . utf8_encode($desTipoJuzgador) . '",';
                        $json .= '"sorteo":"' . utf8_encode($resultado["juzgador"]->getSorteo()) . '",';
                        $json .= '"programable":"' . utf8_encode($resultado["juzgador"]->getProgramable()) . '",';
                        $json .= '"activo":"' . utf8_encode($resultado["juzgador"]->getActivo()) . '",';
                        $json .= '"fechaRegistro":"' . utf8_encode($resultado["juzgador"]->getFechaRegistro()) . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["juzgador"]->getFechaActualizacion()) . '"';
                    }
                    $json .= '}';
                    // --> Obtenemos el Documento Si es que existe
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($resultado["orden"]->getIdOrden());
                    $documentosdto->setCveTipoDocumento(18);
                    $documentosDAO = new DocumentosimgDAO();
                    $documentosdto = $documentosDAO->selectDocumentosimg($documentosdto);
                    if ($documentosdto != "") {
                        $documentosdto = $documentosdto[0];
                        $imagenesDto = new ImagenesDTO();
                        $imagenesDto->setActivo("S");
                        $imagenesDto->setIdDocumentoImg($documentosdto->getIdDocumentoImg());
                        $imagenesDao = new ImagenesDAO();
                        $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                        if ($imagenesDto != "") {
                            $imagenesDto = $imagenesDto[0];
                            $json .= ', "documento":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documento":""';
                        }
                    } else {
                        $json .= ', "documento":""';
                    }
                    $json .= '}';
                    $x++;
                    if ($x < count($resultados["data"])) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
                return $json;
            } else {
                $resultado["status"] = "Error";
                $resultado["text"] = "NO SE ENCONTRARON RESULTADOS";
                return json_encode($resultado);
            }
        }
        $resultado["status"] = "Error";
        $resultado["text"] = "OCURRIO UN ERROR AL REALIZAR LA CONSULTA";
        return json_encode($resultado);
    }

    public function descargaSolicitudOrden($idOrden) {
        if ($idOrden != "" && $idOrden != "0") {
            $ComprobanteSolicitudesordenesFirmaController = new ComprobanteSolicitudesordenesFirmaController();
            $resultado = $ComprobanteSolicitudesordenesFirmaController->generaComprobante($idOrden);
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
                    $resultado = array("type" => "Error",
                        "text" => $resultado["text"],
                        "file" => "");
                }
            } else {
                $resultado = array("type" => "Error",
                    "text" => "ERROR AL GENERAL EL PDF DE LA ORDEN DE APREHENSION",
                    "file" => "");
            }
        } else {
            $resultado = array("type" => "Error",
                "text" => "LA ORDEN DE APREHENSION SELECCIONADA NO ES VALIDA",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function descargaSolicitudOrdenDownload($idOrden) {
        if ($idOrden != "" && $idOrden != "0") {
            $ComprobanteSolicitudesordenesFirmaController = new ComprobanteSolicitudesordenesFirmaController();
            $resultado = $ComprobanteSolicitudesordenesFirmaController->generaComprobante($idOrden);
            if ($resultado != "") {
                if ($resultado["type"] == "OK") {

                    header("Content-disposition: attachment; filename=" . $resultado["file"]);
                    header("Content-type: application/octet-stream");
                    readfile("./../../../solicitudespdf/" . $resultado["file"]);
                }
            } else {
                echo "ERROR AL GENERAL EL PDF DE LA  SOLICITUD";
            }
        } else {
            echo "LA ORDEN DE APREHENSION SELECCIONADA NO ES VALIDO";
        }
    }

    public function cancelarSolicitudOrden($idSolicitudOrden, $motivoCancelacion) {
        if ($idSolicitudOrden != "" && $idSolicitudOrden > 0) {
            $SolicitudesordenesFirmaController = new SolicitudesordenesFirmaController();
            $SolicitudesordenesDto = $SolicitudesordenesFirmaController->cancelarSolicitudOrden($idSolicitudOrden, $motivoCancelacion);
//        if ($SolicitudescateosDto == true) {
//            $jsonDto = new Encode_JSON();
//            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
//        }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode($SolicitudesordenesDto);
        } else {
            return array("type" => "Error",
                "text" => "LA ORDEN DE APREHENSION SELECCIONADA NO ES VALIDO",
                "file" => "");
        }
    }

    public function consultaOrdenInformacion($type, $solicitudescateosDto, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new SolicitudesordenesFirmaController();
            $resultado = $consultaCtr->consultaOrdenInformacion($type, $solicitudescateosDto, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function actualizaJuzgadorOrden($idJuzgador, $idOrden) {
        if ($idJuzgador != 0 && $idOrden != 0) {
            $consultaCtr = new SolicitudesordenesFirmaController();
            $resultado = $consultaCtr->actualizaJuzgadorOrden($idJuzgador, $idOrden);
            return $resultado;
        } else {
            $resultado = array("type" => "Error");
        }
    }

    public function getInfoWS($idJuzgado) {
        $solicitudCtr = new SolicitudesordenesFirmaController();
        $resultado = $solicitudCtr->getInfoWS($idJuzgado);
        return $resultado;
    }

    public function getAdminInfoJuzgadorWS($idJuzgado) {
        $solicitudCtr = new SolicitudesordenesFirmaController();
        $resultado = $solicitudCtr->getAdminInfoJuzgadorWS($idJuzgado);
        return $resultado;
    }

}

@$idSolicitudOrden = $_POST["idSolicitudOrden"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$cveJuzgadoDesahoga = $_POST["cveJuzgadoDesahoga"];
@$idReferencia = $_POST["idReferencia"];
@$fechaEnvio = $_POST["fechaEnvio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$carpetaInv = $_POST["carpetaInv"];
@$nuc = $_POST["nuc"];
@$cveUsuario = $_POST["cveUsuario"];
@$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
@$cveEstatusSolicitudOrden = $_POST["cveEstatusSolicitudOrden"];
@$observaciones = $_POST["observaciones"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

@$motivoCancelacion = $_POST["motivoCancelacion"];

#OTROS DATOS
@$eMailMP = $_POST["eMailMP"];
@$personasArray = $_POST["personasArray"];
@$imputadosArray = $_POST["imputadosArray"];
@$victimasArray = $_POST["victimasArray"];
@$delitosArray = $_POST["delitosArray"];
@$solicitud = $_POST["solicitud"];
@$mpsResponsablesArray = $_POST["mpsResponsablesArray"];
@$fileSolicitud = $_POST["fileSolicitud"];
@$idOrden = $_POST["idOrden"];
@$action = $_GET['action'];

$solicitudesordenesFacade = new SolicitudesordenesFacade();
$solicitudesordenesDto = new SolicitudesordenesDTO();

$solicitudesordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$solicitudesordenesDto->setNumero($numero);
$solicitudesordenesDto->setAnio($anio);
$solicitudesordenesDto->setCveJuzgado($cveJuzgado);
$solicitudesordenesDto->setCveCatAudiencia($cveCatAudiencia);
$solicitudesordenesDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
$solicitudesordenesDto->setIdReferencia($idReferencia);
$solicitudesordenesDto->setFechaEnvio($fechaEnvio);
$solicitudesordenesDto->setCveTipoCarpeta($cveTipoCarpeta);
$solicitudesordenesDto->setCarpetaInv($carpetaInv);
$solicitudesordenesDto->setNuc($nuc);
$solicitudesordenesDto->setCveUsuario($cveUsuario);
$solicitudesordenesDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$solicitudesordenesDto->setCveEstatusSolicitudOrden($cveEstatusSolicitudOrden);
$solicitudesordenesDto->setObservaciones($observaciones);
$solicitudesordenesDto->setFechaRegistro($fechaRegistro);
$solicitudesordenesDto->setFechaActualizacion($fechaActualizacion);

@$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

if (($accion == "guardar") && ($idSolicitudOrden == "")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->insertSolicitudesordenes($solicitudesordenesDto);
    echo $solicitudesordenesDto;
} else if (($accion == "cancelarSolicitudOrden") && ($idSolicitudOrden != "")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->cancelarSolicitudOrden($idSolicitudOrden, $motivoCancelacion);
    echo $solicitudesordenesDto;
} else if (($accion == "guardar") && ($idSolicitudOrden != "")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->updateSolicitudesordenes($solicitudesordenesDto);
    echo $solicitudesordenesDto;
} else if ($accion == "consultar") {
    $solicitudesordenesDto = $solicitudesordenesFacade->selectSolicitudesordenes($solicitudesordenesDto);
    echo $solicitudesordenesDto;
} else if (($accion == "baja") && ($idSolicitudOrden != "")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->deleteSolicitudesordenes($solicitudesordenesDto);
    echo $solicitudesordenesDto;
} else if (($accion == "seleccionar") && ($idSolicitudOrden != "")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->selectSolicitudesordenes($solicitudesordenesDto);
    echo $solicitudesordenesDto;
} else if (($accion == "guardarOrden") && ($idSolicitudOrden == "")) {
    /*
     * Paso 1: Datos solicitud
     */
    $param = array();
    $param["juzgadoSolicitar"] = $cveJuzgadoDesahoga;
    $param["cveTipoCarpeta"] = $cveTipoCarpeta;
    $param["numeroCarpeta"] = $numero;
    $param["anioCarpeta"] = $anio;
    $param["juzgadoProcedencia"] = $cveJuzgado;
    $param["carpetaInvestigacion"] = $carpetaInv;
    $param["nuc"] = $nuc;
    $param["eMailMP"] = $eMailMP;

    /*
     * Paso 2: Datos personas
     */
    $param["personasArray"] = $personasArray;

    /*
     * Paso 3: Datos imputados, victimas y delitos
     */
    $param["imputadosArray"] = $imputadosArray;
    $param["victimasArray"] = $victimasArray;
    $param["delitosArray"] = $delitosArray;

    /*
     * Paso 4: Datos solicitud escrita y archivo adjunto
     */
    $param["solicitud"] = $solicitud;
    @$param["fileSolicitud"] = $_FILES["fileSolicitud"];

    /*
     * Paso 5: Datos acepta los terminos
     */
    $param["mpsResponsablesArray"] = $mpsResponsablesArray;
    
    $solicitudesordenesDto = $solicitudesordenesFacade->insertSolicitudesordenes($param);
    echo json_encode($solicitudesordenesDto);
} else if (($accion == "consultarOrden") && ($idSolicitudOrden == "")) {
    $idJuez = $_SESSION["cveUsuarioSistema"];
    $param = array();
    $param["fechaInicial"] = "";
    $param["fechaFinal"] = "";
    $param["paginacion"] = true;
    $param["cantxPag"] = $_POST["cantxPag"];
    $param["pag"] = $_POST["pag"];
    $solicitudesordenesDto = $solicitudesordenesFacade->consultaOrden($idJuez, $param);
    echo $solicitudesordenesDto;
} else if (($accion == "consultarDetalleOrden")) {
    $idOrden = $_POST["idOrden"];
    $juez = "";
    if (isset($_POST["juez"])) {
        $juez = $_POST["juez"];
    }
    $solicitudesordenesDto = $solicitudesordenesFacade->consultaOrdenDetalle($idOrden, $juez);
    echo $solicitudesordenesDto;
} else if (($accion == "descargaSolicitudOrden")) {
    $solicitudesordenesDto = $solicitudesordenesFacade->descargaSolicitudOrden($idOrden);
    echo $solicitudesordenesDto;
} else if ($action == "decargaSolicitudOrdenDownload") {
    $idOrden = $_GET['idOrden'];
    $solicitudesordenesFacade->descargaSolicitudOrdenDownload($idOrden);
    exit;
} else if (($accion == "consultarOrdenInformacion") && ($idSolicitudOrden == "")) {
    $type = $_POST["type"];
    $param["fechaEnd"] = "";
    $param["fechaInicial"] = "";
    if (isset($_POST["fechaRegistro"])) {
        $param["fechaInicial"] = $_POST["fechaRegistro"];
    }
    if (isset($_POST["fechaRegistroEnd"])) {
        $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
    }
    @$numeroOrden = $_POST["numero"];
    @$anioOrden = $_POST["anio"];
    $param["numeroOrden"] = $numeroOrden;
    $param["anioOrden"] = $anioOrden;
    $param["paginacion"] = true;
    $datosBusqueda = $solicitudesordenesFacade->consultaOrdenInformacion($type, $solicitudesordenesDto, $param);
    echo json_encode($datosBusqueda, true);
} else if ($accion == "actualizarJuzgadorOrden") {
    $idJuzgador = $_POST['idJuzgador'];
    $idOrden = $_POST['idOrden'];
    $resultado = $solicitudesordenesFacade->actualizaJuzgadorOrden($idJuzgador, $idOrden);
    echo json_encode($resultado);
} else if ($accion == "Juzgadores") {
    $resultado = $solicitudesordenesFacade->selectJuzgadoresGenericoJuzgado();
    echo $resultado;
} else if ($accion == "getInfoJuzgadorWS") {
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudesordenesFacade->getInfoWS($idJuzgado);
    echo $resultado;
} else if ($accion == "getAdminInfoJuzgadorWS") {
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudesordenesFacade->getAdminInfoJuzgadorWS($idJuzgado);
    echo $resultado;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
