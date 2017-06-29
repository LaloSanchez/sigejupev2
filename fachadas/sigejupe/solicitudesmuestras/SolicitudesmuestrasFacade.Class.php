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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesmuestras/SolicitudesmuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesmuestras/ComprobanteSolicitudesmuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesmuestras/EstatussolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosmuestras/ImputadosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidosmuestras/OfendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tomamuestras/TomamuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/muestras/MuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudesmuestrasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudesmuestras($SolicitudesmuestrasDto) {
        $SolicitudesmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getidSolicitudMuestra(), "utf8") : strtoupper($SolicitudesmuestrasDto->getidSolicitudMuestra()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getidSolicitudMuestra())) {
            $SolicitudesmuestrasDto->setidSolicitudMuestra($this->fechaMysql($SolicitudesmuestrasDto->getidSolicitudMuestra()));
        }
        $SolicitudesmuestrasDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getnumero(), "utf8") : strtoupper($SolicitudesmuestrasDto->getnumero()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getnumero())) {
            $SolicitudesmuestrasDto->setnumero($this->fechaMysql($SolicitudesmuestrasDto->getnumero()));
        }
        $SolicitudesmuestrasDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getanio(), "utf8") : strtoupper($SolicitudesmuestrasDto->getanio()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getanio())) {
            $SolicitudesmuestrasDto->setanio($this->fechaMysql($SolicitudesmuestrasDto->getanio()));
        }
        $SolicitudesmuestrasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveJuzgado(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveJuzgado()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveJuzgado())) {
            $SolicitudesmuestrasDto->setcveJuzgado($this->fechaMysql($SolicitudesmuestrasDto->getcveJuzgado()));
        }
        $SolicitudesmuestrasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveJuzgadoDesahoga(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveJuzgadoDesahoga()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveJuzgadoDesahoga())) {
            $SolicitudesmuestrasDto->setcveJuzgadoDesahoga($this->fechaMysql($SolicitudesmuestrasDto->getcveJuzgadoDesahoga()));
        }
        $SolicitudesmuestrasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getidReferencia(), "utf8") : strtoupper($SolicitudesmuestrasDto->getidReferencia()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getidReferencia())) {
            $SolicitudesmuestrasDto->setidReferencia($this->fechaMysql($SolicitudesmuestrasDto->getidReferencia()));
        }
        $SolicitudesmuestrasDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getfechaEnvio(), "utf8") : strtoupper($SolicitudesmuestrasDto->getfechaEnvio()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getfechaEnvio())) {
            $SolicitudesmuestrasDto->setfechaEnvio($this->fechaMysql($SolicitudesmuestrasDto->getfechaEnvio()));
        }
        $SolicitudesmuestrasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveTipoCarpeta(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveTipoCarpeta())) {
            $SolicitudesmuestrasDto->setcveTipoCarpeta($this->fechaMysql($SolicitudesmuestrasDto->getcveTipoCarpeta()));
        }
        $SolicitudesmuestrasDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcarpetaInv(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcarpetaInv()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcarpetaInv())) {
            $SolicitudesmuestrasDto->setcarpetaInv($this->fechaMysql($SolicitudesmuestrasDto->getcarpetaInv()));
        }
        $SolicitudesmuestrasDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getnuc(), "utf8") : strtoupper($SolicitudesmuestrasDto->getnuc()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getnuc())) {
            $SolicitudesmuestrasDto->setnuc($this->fechaMysql($SolicitudesmuestrasDto->getnuc()));
        }
        $SolicitudesmuestrasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveUsuario(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveUsuario()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveUsuario())) {
            $SolicitudesmuestrasDto->setcveUsuario($this->fechaMysql($SolicitudesmuestrasDto->getcveUsuario()));
        }
        $SolicitudesmuestrasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveAdscripcionSolicita(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveAdscripcionSolicita()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveAdscripcionSolicita())) {
            $SolicitudesmuestrasDto->setcveAdscripcionSolicita($this->fechaMysql($SolicitudesmuestrasDto->getcveAdscripcionSolicita()));
        }
        $SolicitudesmuestrasDto->setcveEstatusSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getcveEstatusSolicitudMuestra(), "utf8") : strtoupper($SolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getcveEstatusSolicitudMuestra())) {
            $SolicitudesmuestrasDto->setcveEstatusSolicitudMuestra($this->fechaMysql($SolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()));
        }
        $SolicitudesmuestrasDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getobservaciones(), "utf8") : strtoupper($SolicitudesmuestrasDto->getobservaciones()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getobservaciones())) {
            $SolicitudesmuestrasDto->setobservaciones($this->fechaMysql($SolicitudesmuestrasDto->getobservaciones()));
        }
        $SolicitudesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getfechaRegistro(), "utf8") : strtoupper($SolicitudesmuestrasDto->getfechaRegistro()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getfechaRegistro())) {
            $SolicitudesmuestrasDto->setfechaRegistro($this->fechaMysql($SolicitudesmuestrasDto->getfechaRegistro()));
        }
        $SolicitudesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesmuestrasDto->getfechaActualizacion(), "utf8") : strtoupper($SolicitudesmuestrasDto->getfechaActualizacion()))))));
        if ($this->esFecha($SolicitudesmuestrasDto->getfechaActualizacion())) {
            $SolicitudesmuestrasDto->setfechaActualizacion($this->fechaMysql($SolicitudesmuestrasDto->getfechaActualizacion()));
        }
        return $SolicitudesmuestrasDto;
    }

    public function selectSolicitudesmuestras($SolicitudesmuestrasDto) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasController = new SolicitudesmuestrasController();
        $SolicitudesmuestrasDto = $SolicitudesmuestrasController->selectSolicitudesmuestras($SolicitudesmuestrasDto);
        if ($SolicitudesmuestrasDto != "") {
            $dtoToJson = new DtoToJson($SolicitudesmuestrasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSolicitudesmuestras($param = "") {
        $SolicitudesmuestrasController = new SolicitudesmuestrasController();
        return $SolicitudesmuestrasDto = $SolicitudesmuestrasController->insertSolicitudesmuestras($param);
    }

    public function updateSolicitudesmuestras($SolicitudesmuestrasDto) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasController = new SolicitudesmuestrasController();
        $SolicitudesmuestrasDto = $SolicitudesmuestrasController->updateSolicitudesmuestras($SolicitudesmuestrasDto);
        if ($SolicitudesmuestrasDto != "") {
            $dtoToJson = new DtoToJson($SolicitudesmuestrasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSolicitudesmuestras($SolicitudesmuestrasDto) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasController = new SolicitudesmuestrasController();
        $SolicitudesmuestrasDto = $SolicitudesmuestrasController->deleteSolicitudesmuestras($SolicitudesmuestrasDto);
        if ($SolicitudesmuestrasDto == true) {
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

    public function getInfoWS($idJuzgado) {
        $solicitudCtr = new SolicitudesmuestrasController();
        $resultado = $solicitudCtr->getInfoWS($idJuzgado);
        return $resultado;
    }

    public function descargaSolicitudMuestra($idMuestra) {
        if ($idMuestra != "" && $idMuestra != "0") {
            $ComprobanteSolicitudesmuestrasController = new ComprobanteSolicitudesmuestrasController();
            $resultado = $ComprobanteSolicitudesmuestrasController->generaComprobante($idMuestra);
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
                    $resultado = array("type" => "Error",
                        "text" => $resultado["text"],
                        "file" => "");
                }
            } else {
                $resultado = array("type" => "Error",
                    "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD",
                    "file" => "");
            }
        } else {
            $resultado = array("type" => "Error",
                "text" => "LA TOMA DE MUESTRA SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function descargaSolicitudMuestraDownload($idMuestra) {
        if ($idMuestra != "" && $idMuestra != "0") {
            $ComprobanteSolicitudesmuestrasController = new ComprobanteSolicitudesmuestrasController();
            $resultado = $ComprobanteSolicitudesmuestrasController->generaComprobante($idMuestra);
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
            echo "LA SOLICITUD DE TOMA DE MUESTRA SELECCIONADA NO ES VALIDA";
        }
    }

    public function consultaMuestras($idJuez, $param) {
        if ($idJuez != "" && $idJuez != 0) {
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDao = new JuzgadoresDAO();
            $juzgadoresDto->setCveUsuario($idJuez);
            $juzgadoresDto = $juzgadoresDao->selectJuzgadoreCveUsario($juzgadoresDto);
            if ($juzgadoresDto != "" && count($juzgadoresDto) > 0) {
                $juzgadoresDto = $juzgadoresDto[0];
                $SolicitudesmuestrasController = new SolicitudesmuestrasController();
                $resultados = $SolicitudesmuestrasController->consultaMuestras($juzgadoresDto->getIdJuzgador(), $param);
                if ($resultados["type"] == "OK") {
                    $juzgadosDao = new JuzgadosDAO();
                    $estatussolicitudesDto = new EstatussolicitudesmuestrasDTO();
                    $estatussolicitudesDao = new EstatussolicitudesmuestrasDAO();
                    $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudesmuestras($estatussolicitudesDto);

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
                        $json .= '"solicitudMuestra":{';
                        $json .= '"idSolicitudMuestra":"' . utf8_encode($resultado["solicitudMuestra"]->getIdSolicitudMuestra()) . '",';
                        $json .= '"numero":"' . utf8_encode($resultado["solicitudMuestra"]->getNumero()) . '",';
                        $json .= '"anio":"' . utf8_encode($resultado["solicitudMuestra"]->getAnio()) . '",';
                        $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudMuestra"]->getCveJuzgado()) . '",';
                        if ($resultado["solicitudMuestra"]->getCveJuzgado() != "" && $resultado["solicitudMuestra"]->getCveJuzgado() != 0) {
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDto->setCveJuzgado($resultado["solicitudMuestra"]->getCveJuzgado());
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
                        $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudMuestra"]->getCveJuzgadoDesahoga()) . '",';
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudMuestra"]->getCveJuzgadoDesahoga());
                        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                        if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                            $juzgadosDto = $juzgadosDto[0];
                            $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                        } else {
                            $json .= '"desJuzgadoDesahoga":"",';
                        }

                        $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudMuestra"]->getIdReferencia()) . '",';
                        $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudMuestra"]->getFechaEnvio()) . '",';
                        $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudMuestra"]->getCveTipoCarpeta()) . '",';
                        $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudMuestra"]->getCarpetaInv()) . '",';
                        $json .= '"nuc":"' . utf8_encode($resultado["solicitudMuestra"]->getNuc()) . '",';
                        $json .= '"nip":"' . utf8_encode($resultado["solicitudOrden"]->getNip()) . '",';
                        $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudMuestra"]->getCveUsuario()) . '",';
                        $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudMuestra"]->getCveAdscripcionSolicita()) . '",';
                        $json .= '"cveEstatusSolicitudMuestra":"' . utf8_encode($resultado["solicitudMuestra"]->getCveEstatusSolicitudMuestra()) . '",';
                        $desEstatusSolicitud = "";
                        foreach ($estatussolicitudesDto as $estatusSolicitud) {
                            if ($estatusSolicitud->getCveEstatusSolicitudMuestra() == $resultado["solicitudMuestra"]->getCveEstatusSolicitudMuestra()) {
                                $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudMuestra();
                                break;
                            }
                        }
                        $json .= '"descEstatusSolicitudMuestra":"' . utf8_encode($desEstatusSolicitud) . '",';
                        $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudMuestra"]->getObservaciones())) . ',';
                        $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudMuestra"]->getFechaRegistro()));
                        $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                        $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                        $horaRegistro = $fechaHoraRegistro[1];
                        $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudMuestra"]->getFechaActualizacion()) . '"';
                        $json .= '}';
                        $json .= ',"respmuestra":{';
                        $json .= '"idMuestra":"' . utf8_encode($resultado["respmuestra"]->getIdMuestra()) . '",';
                        $json .= '"idSolicitudMuestra":"' . utf8_encode($resultado["respmuestra"]->getIdSolicitudMuestra()) . '",';
                        $json .= '"cveRespuestaSolicitudMuestra":"' . utf8_encode($resultado["respmuestra"]->getCveRespuestaSolicitudMuestra()) . '",';
                        $json .= '"numeroMuestra":"' . utf8_encode($resultado["respmuestra"]->getNumeroMuestra()) . '",';
                        $json .= '"anioMuestra":"' . utf8_encode($resultado["respmuestra"]->getAnioMuestra()) . '",';
                        $json .= '"solicitud":' . json_encode(utf8_encode($resultado["respmuestra"]->getSolicitud())) . ',';
                        $json .= '"negada":' . json_encode(utf8_encode($resultado["respmuestra"]->getNegada())) . ',';
                        $json .= '"concedida":' . json_encode(utf8_encode($resultado["respmuestra"]->getConcedida())) . ',';
                        $json .= '"fechaPractica":"' . utf8_encode($resultado["respmuestra"]->getFechaPractica()) . '",';
                        $json .= '"horaPractica":"' . utf8_encode($resultado["respmuestra"]->getHoraPractica()) . '",';
                        $json .= '"horasPractica":"' . utf8_encode($resultado["respmuestra"]->getHorasPractica()) . '",';
                        $json .= '"fechaInforme":"' . utf8_encode($resultado["respmuestra"]->getFechaInforme()) . '",';
                        $json .= '"horaInforme":"' . utf8_encode($resultado["respmuestra"]->getHoraInforme()) . '",';
                        $json .= '"horasInforme":"' . utf8_encode($resultado["respmuestra"]->getHorasInforme()) . '",';
                        $json .= '"fechaRespuesta":"' . utf8_encode($resultado["respmuestra"]->getFechaRespuesta()) . '",';
                        $json .= '"qr":"' . utf8_encode($resultado["respmuestra"]->getQr()) . '",';
                        $json .= '"firmaDigital":"' . utf8_encode($resultado["respmuestra"]->getFirmaDigital()) . '",';
                        $json .= '"selloDigital":"' . utf8_encode($resultado["respmuestra"]->getSelloDigital()) . '",';
                        $json .= '"fechaRegistro":"' . utf8_encode($resultado["respmuestra"]->getFechaRegistro()) . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["respmuestra"]->getFechaActualizacion()) . '",';
                        $json .= '"email":"' . utf8_encode($resultado["respmuestra"]->getEmail()) . '"';
                        $json .= '}';
                        $countImputados = 1;
                        $json .= ',"imputados":[';
                        if (count($resultado["imputados"]) > 0 && $resultado["imputados"] != "") {
                            foreach ($resultado["imputados"] as $imputado) {
                                $json .= '{';
                                $json .= '"idImputado":"' . utf8_encode($imputado->getIdImputadoMuestra()) . '",';
                                $json .= '"idSolicitudMuestra":"' . utf8_encode($imputado->getIdSolicitudMuestra()) . '",';
                                $json .= '"paterno":' . json_encode(utf8_encode($imputado->getPaterno())) . ',';
                                $json .= '"materno":' . json_encode(utf8_encode($imputado->getMaterno())) . ',';
                                $json .= '"nombre":' . json_encode(utf8_encode($imputado->getNombre())) . ',';
                                $json .= '"domicilio":' . json_encode(utf8_encode($imputado->getDomicilio())) . ',';
                                $json .= '"genero":' . json_encode(utf8_encode($imputado->getCveGenero())) . ',';
                                $json .= '"alias":' . json_encode(utf8_encode($imputado->getAlias())) . ',';
                                $json .= '"phone":' . json_encode(utf8_encode($imputado->getTelefono())) . ',';
                                $json .= '"email":' . json_encode(utf8_encode($imputado->getEmail())) . ',';
                                $json .= '"detenido":' . json_encode(utf8_encode($imputado->getDetenido())) . ',';
                                $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ',';
                                $json .= '"cveTipoPersona":"' . utf8_encode($imputado->getCveTipoPersona()) . '"';
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
                                $json .= '"idOfendido":"' . utf8_encode($ofendido->getIdOfendidoMuestra()) . '",';
                                $json .= '"idSolicitudMuestra":"' . utf8_encode($ofendido->getIdSolicitudMuestra()) . '",';
                                $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ',';
                                $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . ',';
                                $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ',';
                                $json .= '"domicilio":' . json_encode(utf8_encode($ofendido->getDomicilio())) . ',';
                                $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . ',';
                                $json .= '"cveTipoPersona":"' . utf8_encode($ofendido->getCveTipoPersona()) . '"';
                                $json .= '}';
                                $countOfendidos++;
                                if ($countOfendidos <= count($resultado["ofendidos"])) {
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
                        // --> Obtenemos el Documento Si es que existe
                        $documentosdto = new DocumentosimgDTO();
                        $documentosdto->setIdCarpetaJudicial($resultado["respmuestra"]->getIdMuestra());
                        $documentosdto->setCveTipoDocumento(25);
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

    public function consultaMuestraDetalle($idMuestra, $juez = "") {
        if ($idMuestra != "" && $idMuestra != 0) {
            $SolicitudesmuestraController = new SolicitudesmuestrasController();
            $resultados = $SolicitudesmuestraController->consultaMuestrasDetalle($idMuestra);

            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudesmuestrasDAO();
                $estatussolicitudesDto = new EstatussolicitudesmuestrasDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudesmuestras($estatussolicitudesDto);
                $tiposjuzgadoresDao = new TiposjuzgadoresDAO();
                $tiposjuzgadoresDto = new TiposjuzgadoresDTO();
                $tomamuestrasDao = new TomamuestrasDAO();
                $MuestrasDao = new MuestrasDAO();
                $tiposjuzgadoresDto = $tiposjuzgadoresDao->selectTiposjuzgadores($tiposjuzgadoresDto);
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"data":[';
                $x = 1;
                foreach ($resultados["data"] as $resultado) {
                    // --> Actualizamo la solicitud
                    if ($juez != "") {
                        $solMuestraDto = new SolicitudesmuestrasDTO();
                        $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                        $solMuestraDto->setCveEstatusSolicitudMuestra(2);
                        $fecha = $solicitudesmuestrasDao->selectFechaHoraMySql();
                        $solMuestraDto->setFechaActualizacion($fecha);
                        $solMuestraDto->setIdSolicitudMuestra($resultado["solicitudMuestra"]->getIdSolicitudMuestra());
                        $solMuestraDto = $solicitudesmuestrasDao->updateSolicitudesmuestras($solMuestraDto);
                    }
                    $json .= '{';
                    $json .= '"solicitudMuestra":{';
                    $json .= '"idSolicitudMuestra":"' . utf8_encode($resultado["solicitudMuestra"]->getIdSolicitudMuestra()) . '",';
                    $json .= '"numero":"' . utf8_encode($resultado["solicitudMuestra"]->getNumero()) . '",';
                    $json .= '"anio":"' . utf8_encode($resultado["solicitudMuestra"]->getAnio()) . '",';
                    $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudMuestra"]->getCveJuzgado()) . '",';
                    if ($resultado["solicitudMuestra"]->getCveJuzgado() != "" && $resultado["solicitudMuestra"]->getCveJuzgado() != 0) {
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudMuestra"]->getCveJuzgado());
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
                    $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudMuestra"]->getCveJuzgadoDesahoga()) . '",';
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($resultado["solicitudMuestra"]->getCveJuzgadoDesahoga());
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                    if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                        $juzgadosDto = $juzgadosDto[0];
                        $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                    } else {
                        $json .= '"desJuzgadoDesahoga":"",';
                    }
                    $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudMuestra"]->getIdReferencia()) . '",';
                    $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudMuestra"]->getFechaEnvio()) . '",';
                    $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudMuestra"]->getCveTipoCarpeta()) . '",';
                    $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudMuestra"]->getCarpetaInv()) . '",';
                    $json .= '"nuc":"' . utf8_encode($resultado["solicitudMuestra"]->getNuc()) . '",';
                    $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudMuestra"]->getCveUsuario()) . '",';
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($resultado["solicitudMuestra"]->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    }
                    $json .= '"nombreUsuario":"' . utf8_encode($nombreMP) . '",';
                    $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudMuestra"]->getCveAdscripcionSolicita()) . '",';
                    $json .= '"cveEstatusSolicitudMuestra":"' . utf8_encode($resultado["solicitudMuestra"]->getCveEstatusSolicitudMuestra()) . '",';
                    $desEstatusSolicitud = "";
                    foreach ($estatussolicitudesDto as $estatusSolicitud) {
                        if ($estatusSolicitud->getCveEstatusSolicitudMuestra() == $resultado["solicitudMuestra"]->getCveEstatusSolicitudMuestra()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudMuestra();
                            break;
                        }
                    }
                    $json .= '"descEstatusSolicitudMuestra":"' . utf8_encode($desEstatusSolicitud) . '",';
                    $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudMuestra"]->getObservaciones())) . ',';
                    $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudMuestra"]->getFechaRegistro()));
                    $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                    $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                    $horaRegistro = $fechaHoraRegistro[1];
                    $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudMuestra"]->getFechaActualizacion()) . '"';
                    $json .= '}';
                    $json .= ',"respmuestra":{';
                    $json .= '"idMuestra":"' . utf8_encode($resultado["respmuestra"]->getIdMuestra()) . '",';
                    $json .= '"idSolicitudMuestra":"' . utf8_encode($resultado["respmuestra"]->getIdSolicitudMuestra()) . '",';
                    $json .= '"cveRespuestaSolicitudMuestra":"' . utf8_encode($resultado["respmuestra"]->getCveRespuestaSolicitudMuestra()) . '",';
                    $json .= '"numeroMuestra":"' . utf8_encode($resultado["respmuestra"]->getNumeroMuestra()) . '",';
                    $json .= '"anioMuestra":"' . utf8_encode($resultado["respmuestra"]->getAnioMuestra()) . '",';
                    $json .= '"solicitud":' . json_encode(utf8_encode(preg_replace("/\n/", "<br>", $resultado["respmuestra"]->getSolicitud()))) . ',';
                    $json .= '"negada":' . json_encode(utf8_encode($resultado["respmuestra"]->getNegada())) . ',';
                    $json .= '"concedida":' . json_encode(utf8_encode($resultado["respmuestra"]->getConcedida())) . ',';
                    $json .= '"fechaPractica":"' . utf8_encode($resultado["respmuestra"]->getFechaPractica()) . '",';
                    $json .= '"horaPractica":"' . utf8_encode($resultado["respmuestra"]->getHoraPractica()) . '",';
                    $json .= '"horasPractica":"' . utf8_encode($resultado["respmuestra"]->getHorasPractica()) . '",';
                    $json .= '"fechaInforme":"' . utf8_encode($resultado["respmuestra"]->getFechaInforme()) . '",';
                    $json .= '"horaInforme":"' . utf8_encode($resultado["respmuestra"]->getHoraInforme()) . '",';
                    $json .= '"horasInforme":"' . utf8_encode($resultado["respmuestra"]->getHorasInforme()) . '",';
                    $json .= '"fechaRespuesta":"' . utf8_encode($resultado["respmuestra"]->getFechaRespuesta()) . '",';
                    $json .= '"qr":"' . utf8_encode($resultado["respmuestra"]->getQr()) . '",';
                    $json .= '"firmaDigital":"' . utf8_encode($resultado["respmuestra"]->getFirmaDigital()) . '",';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["respmuestra"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["respmuestra"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["respmuestra"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . utf8_encode($resultado["respmuestra"]->getEmail()) . '",';
                    $json .= '"motivoCancelacion":"' . utf8_encode($resultado["respmuestra"]->getMotivoCancelacion()) . '"';
                    $json .= '}';
                    $countImputados = 1;
                    $json .= ',"imputados":[';
                    if (count($resultado["imputados"]) > 0 && $resultado["imputados"] != "") {
                        foreach ($resultado["imputados"] as $imputado) {
                            $json .= '{';
                            $json .= '"idImputadoMuestra":"' . ($imputado->getIdImputadoMuestra()) . '",';
                            $json .= '"idSolicitudMuestra":"' . ($imputado->getIdSolicitudMuestra()) . '",';
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
                            $json .= '"email":' . json_encode(utf8_encode($imputado->getEmail())) . ',';
                            $json .= '"muestras":[';
                            # OBTENEMOS LAS TOMAS DE MUESTRAS RELACIOANDAS A ESE IMPUTADO
                            $tomamuestrasDto = new TomamuestrasDTO();
                            $tomamuestrasDto->setIdImputadoMuestra($imputado->getIdImputadoMuestra());
                            $tomamuestrasDto->setIdSolicitudMuestra($imputado->getIdSolicitudMuestra());
                            $tomamuestrasDto = $tomamuestrasDao->selectTomamuestras($tomamuestrasDto);
                            if ($tomamuestrasDto != "") {
                                $countTomaMuestra = 1;
                                foreach ($tomamuestrasDto as $tomamuestra) {
                                    $muestraDto = new MuestrasDTO();
                                    $muestraDto->setCveMuestra($tomamuestra->getCveMuestra());
                                    $muestraDto = $MuestrasDao->selectMuestras($muestraDto);
                                    if ($muestraDto != "") {
                                        $json .="{";
                                        $json .= '"idMuestra" : "' . $muestraDto[0]->getCveMuestra() . '",';
                                        $json .= '"desMuestra" : "' . utf8_encode($muestraDto[0]->getDesMuestra()) . '",';
                                        $json .= '"TipoMuestra" : "' . $muestraDto[0]->getTipo() . '"';
                                        $json .="}";
                                        $countTomaMuestra++;
                                        if ($countTomaMuestra <= count($tomamuestrasDto)) {
                                            $json .= ",";
                                        }
                                    }
                                }
                            }
                            $json .= ']';
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
                            $json .= '"idOfendidoMuestra":"' . ($ofendido->getIdOfendidoMuestra()) . '",';
                            $json .= '"idSolicitudMuestra":"' . ($ofendido->getIdSolicitudMuestra()) . '",';
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
                            $json .= '"email":' . json_encode(utf8_encode($ofendido->getEmail())) . ',';
                            $json .= '"telefono":' . json_encode(utf8_encode($ofendido->getTelefono())) . ',';
                            $json .= '"muestras":[';
                            # OBTENEMOS LAS TOMAS DE MUESTRAS RELACIOANDAS A ESE IMPUTADO
                            $tomamuestrasDto = new TomamuestrasDTO();
                            $tomamuestrasDto->setIdOfendidoMuestra($ofendido->getIdOfendidoMuestra());
                            $tomamuestrasDto->setIdSolicitudMuestra($ofendido->getIdSolicitudMuestra());
                            $tomamuestrasDto = $tomamuestrasDao->selectTomamuestras($tomamuestrasDto);
                            if ($tomamuestrasDto != "") {
                                $countTomaMuestra = 1;
                                foreach ($tomamuestrasDto as $tomamuestra) {
                                    $muestraDto = new MuestrasDTO();
                                    $muestraDto->setCveMuestra($tomamuestra->getCveMuestra());
                                    $muestraDto = $MuestrasDao->selectMuestras($muestraDto);
                                    if ($muestraDto != "") {
                                        $json .="{";
                                        $json .= '"idMuestra" : "' . $muestraDto[0]->getCveMuestra() . '",';
                                        $json .= '"desMuestra" : "' . utf8_encode($muestraDto[0]->getDesMuestra()) . '",';
                                        $json .= '"TipoMuestra" : "' . $muestraDto[0]->getTipo() . '"';
                                        $json .="}";
                                        $countTomaMuestra++;
                                        if ($countTomaMuestra <= count($tomamuestrasDto)) {
                                            $json .= ",";
                                        }
                                    }
                                }
                            }
                            $json .= '],';
                            $json .= '"tutor":[';
                            # OBTENEMOS EL TUTOR DEL OFENDIDO
                            $tutorOfendidoDto = new TutoresofendidosmuestrasDTO();
                            $tutorOfendidoDao = new TutoresofendidosmuestrasDAO();
                            $tutorOfendidoDto->setActivo("S");
                            $tutorOfendidoDto->setIdOfendidoMuestra($ofendido->getIdOfendidoMuestra());
                            $tutorOfendidoDto = $tutorOfendidoDao->selectTutoresofendidosmuestras($tutorOfendidoDto);
                            if ($tutorOfendidoDto != "") {
                                $tutorDto = $tutorOfendidoDto[0];
                                $json .="{";
                                $json .= '"idTutor" : "' . $tutorDto->getIdTutorOfendidoMuestra() . '",';
                                $json .= '"cveGenero" : "' . $tutorDto->getCveGenero() . '",';
                                $json .= '"cveTipoTutor" : "' . $tutorDto->getCveTipoTutor() . '",';
                                $json .= '"domicilio" : "' . utf8_encode($tutorDto->getDomicilio()) . '",';
                                $json .= '"email" : "' . $tutorDto->getEmail() . '",';
                                $json .= '"IdOfendidoMuestra" : "' . $tutorDto->getIdOfendidoMuestra() . '",';
                                $json .= '"materno" : "' . utf8_encode($tutorDto->getMaterno()) . '",';
                                $json .= '"nombre" : "' . utf8_encode($tutorDto->getNombre()) . '",';
                                $json .= '"paterno" : "' . utf8_encode($tutorDto->getPaterno()) . '",';
                                $fechaTO = explode("-", $tutorDto->getFechaNacimiento());
                                $fechaNac = $fechaTO[0] . "/" . $fechaTO[1] . "/" . $fechaTO[2];
                                $json .= '"FechaNacimiento" : "' . $fechaNac . '",';
                                $json .= '"telefono" : "' . $tutorDto->getTelefono() . '"';
                                $json .="}";
                            }
                            $json .= ']';
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
                            $json .= '"idDelitoMuestra":"' . ($delito->getIdDelitoMuestra()) . '",';
                            $json .= '"idSolicitudMuestra":"' . ($delito->getIdSolicitudMuestra()) . '",';
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
                            $json .= '"idMinisterioResponsable":"' . ($ministerioPublico->getIdMinisterioResponsableMuestras()) . '",';
                            $json .= '"idSolicitudMuestra":"' . ($ministerioPublico->getIdSolicitudMuestra()) . '",';
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
                    $documentosdto->setIdCarpetaJudicial($resultado["respmuestra"]->getIdMuestra());
                    $documentosdto->setCveTipoDocumento(19);
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

    public function consultaMuestrasInformacion($type, $solicitudesmuestrasDto, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new SolicitudesmuestrasController();
            $resultado = $consultaCtr->consultaMuestrasInformacion($type, $solicitudesmuestrasDto, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function consultaMuestrasInformacionAdmon($type, $solicitudesmuestrasDto, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new SolicitudesmuestrasController();
            $resultado = $consultaCtr->consultaMuestrasInformacionAdmon($type, $solicitudesmuestrasDto, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function selectJuzgadoresGenericoJuzgado() {
        $juzgadoresDTO = new JuzgadoresDTO();
        $juzgadoresDTO->setCveJuzgado("762");
        $juzgadoresController = new JuzgadoresController();
        $tmp = $juzgadoresController->selectJuzgadoresGenericoJuzgado($juzgadoresDTO);
        if ($tmp != "" && count($tmp) > 0) {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($tmp) . '",';
            $json .= '"text":"RESULTADOS DE LA CONSULTA",';
            $json .= '"data":[';
            $x = 1;
            foreach ($tmp as $juzgador) {
                $json .= '{';
                $json .= '"idJuzgador":' . json_encode(utf8_encode($juzgador->getIdJuzgador())) . ',';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($juzgador->getCveUsuario())) . ',';
                $json .= '"numEmpleado":' . json_encode(utf8_encode($juzgador->getNumEmpleado())) . ',';
                $json .= '"titulo":' . json_encode(utf8_encode($juzgador->getTitulo())) . ',';
                $json .= '"paterno":' . json_encode(utf8_encode($juzgador->getPaterno())) . ',';
                $json .= '"materno":' . json_encode(utf8_encode($juzgador->getMaterno())) . ',';
                $json .= '"nombre":' . json_encode(utf8_encode($juzgador->getNombre())) . ',';
                $json .= '"sorteo":' . json_encode(utf8_encode($juzgador->getSorteo())) . ',';
                $json .= '"cveEspecialidad":' . json_encode(utf8_encode($juzgador->getCveEspecialidad())) . ',';
                $json .= '"programable":' . json_encode(utf8_encode($juzgador->getProgramable())) . ',';
                $json .= '"activo":' . json_encode(utf8_encode($juzgador->getActivo())) . ',';
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($juzgador->getFechaRegistro())) . ',';
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($juzgador->getFechaActualizacion())) . ',';
                $json .= '"desTipoJuzgador":' . json_encode(utf8_encode($juzgador->getDesTipoJuzgador())) . ',';
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($juzgador->getCveJuzgado())) . ',';
                $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgador->getDesJuzgado())) . ',';
                $json .= '"juzgados":' . json_encode(utf8_encode($juzgador->getJuzgados())) . ',';
                $json .= '"totalPaginas":' . json_encode(utf8_encode($juzgador->getTotalPaginas())) . ',';
                $json .= '"pagina":' . json_encode(utf8_encode($juzgador->getPagina())) . '';
                $json .= '}';
                $x++;
                if ($x <= count($tmp)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
            return $tmp = $json;
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
        return $tmp;
    }

    public function actualizaJuzgadorMuestra($idJuzgador, $idMuestra) {
        if ($idJuzgador != 0 && $idMuestra != 0) {
            $consultaCtr = new SolicitudesmuestrasController();
            $resultado = $consultaCtr->actualizaJuzgadorMuestra($idJuzgador, $idMuestra);
            return $resultado;
        } else {
            $resultado = array("type" => "Error");
        }
    }

    public function consultarMuestraInformacionBitacora($type, $solicitudesmuestrasDto, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new SolicitudesmuestrasController();
            $resultado = $consultaCtr->consultarMuestraInformacionBitacora($type, $solicitudesmuestrasDto, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function getAdminInfoJuzgadorWS($idJuzgado) {
        $solicitudCtr = new SolicitudesmuestrasController();
        $resultado = $solicitudCtr->getAdminInfoJuzgadorWS($idJuzgado);
        return $resultado;
    }

    public function cancelarSolicitudMuestra($idSolicitudMuestra, $motivoCancelacion) {
        if ($idSolicitudMuestra != "" && $idSolicitudMuestra > 0) {
            $SolicitudesmuestrasController = new SolicitudesmuestrasController();
            $SolicitudesmuestrasDto = $SolicitudesmuestrasController->cancelarSolicitudMuestra($idSolicitudMuestra, $motivoCancelacion);
//        if ($SolicitudescateosDto == true) {
//            $jsonDto = new Encode_JSON();
//            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
//        }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode($SolicitudesmuestrasDto);
        } else {
            return array("type" => "Error",
                "text" => "EL CATEO SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
    }

}

@$idSolicitudMuestra = $_POST["idSolicitudMuestra"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$cveJuzgadoDesahoga = $_POST["juzgadoSolicitar"];
@$idReferencia = $_POST["idReferencia"];
@$fechaEnvio = $_POST["fechaEnvio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$carpetaInv = $_POST["carpetaInv"];
@$nuc = $_POST["nuc"];
@$cveUsuario = $_POST["cveUsuario"];
@$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
@$cveEstatusSolicitudMuestra = $_POST["cveEstatusSolicitudMuestra"];
@$observaciones = $_POST["observaciones"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$nip = $_POST["nip"];
@$accion = $_POST["accion"];

#OTROS DATOS
@$eMailMP = $_POST["eMailMP"];
@$examensArray = $_POST["examensArray"];
@$muestrasArray = $_POST["muestrasArray"];
@$imputadosArray = $_POST["imputadosArray"];
@$victimasArray = $_POST["victimasArray"];
@$tutoresArray = $_POST["tutoresArray"];
@$delitosArray = $_POST["delitosArray"];
@$solicitud = $_POST["solicitud"];
@$mpsResponsablesArray = $_POST["mpsResponsablesArray"];
@$fileSolicitud = $_POST["fileSolicitud"];
@$idMuestra = $_POST["idMuestra"];
@$action = $_GET['action'];

$solicitudesmuestrasFacade = new SolicitudesmuestrasFacade();
$solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
$solicitudesmuestrasDao = new SolicitudesmuestrasDAO();

$solicitudesmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$solicitudesmuestrasDto->setNumero($numero);
$solicitudesmuestrasDto->setAnio($anio);
$solicitudesmuestrasDto->setCveJuzgado($cveJuzgado);
$solicitudesmuestrasDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
$solicitudesmuestrasDto->setIdReferencia($idReferencia);
$solicitudesmuestrasDto->setFechaEnvio($fechaEnvio);
$solicitudesmuestrasDto->setCveTipoCarpeta($cveTipoCarpeta);
$solicitudesmuestrasDto->setCarpetaInv($carpetaInv);
$solicitudesmuestrasDto->setNuc($nuc);
$solicitudesmuestrasDto->setCveUsuario($cveUsuario);
$solicitudesmuestrasDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$solicitudesmuestrasDto->setCveEstatusSolicitudMuestra($cveEstatusSolicitudMuestra);
$solicitudesmuestrasDto->setObservaciones($observaciones);
$solicitudesmuestrasDto->setFechaRegistro($fechaRegistro);
$solicitudesmuestrasDto->setFechaActualizacion($fechaActualizacion);

@$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

if (($accion == "guardar") && ($idSolicitudMuestra == "")) {
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->insertSolicitudesmuestras($solicitudesmuestrasDto);
    echo $solicitudesmuestrasDto;
} else if (($accion == "guardar") && ($idSolicitudMuestra != "")) {
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->updateSolicitudesmuestras($solicitudesmuestrasDto);
    echo $solicitudesmuestrasDto;
} else if ($accion == "consultar") {
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->selectSolicitudesmuestras($solicitudesmuestrasDto);
    echo $solicitudesmuestrasDto;
} else if (($accion == "baja") && ($idSolicitudMuestra != "")) {
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->deleteSolicitudesmuestras($solicitudesmuestrasDto);
    echo $solicitudesmuestrasDto;
} else if (($accion == "seleccionar") && ($idSolicitudMuestra != "")) {
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->selectSolicitudesmuestras($solicitudesmuestrasDto);
    echo $solicitudesmuestrasDto;
} else if (($accion == "consultarMuestraInformacion") && ($idSolicitudMuestra == "")) {
    $type = $_POST["type"];
    $param["fechaEnd"] = "";
    $param["fechaInicial"] = "";
    if (isset($_POST["fechaRegistro"])) {
        $param["fechaInicial"] = $_POST["fechaRegistro"];
    }
    if (isset($_POST["fechaRegistroEnd"])) {
        $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
    }

    $param["paginacion"] = true;
    @$numeroMuestra = $_POST["numero"];
    @$anioMuestra = $_POST["anio"];
    $param["numeroMuestra"] = $numeroMuestra;
    $param["anioMuestra"] = $anioMuestra;
    $param["paginacion"] = true;
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["generico"] = $_POST['generico'];
    $datosBusqueda = $solicitudesmuestrasFacade->consultaMuestrasInformacion($type, $solicitudesmuestrasDto, $param);
    echo json_encode($datosBusqueda);
} else if (($accion == "consultaDetalleMuestra")) {
    $juez = "";
    if (isset($_POST["juez"])) {
        $juez = $_POST["juez"];
    }
    $solicitudesmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
    $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto);
    $solicitudesmuestrasController = new SolicitudesmuestrasController();
    $respuesta = $solicitudesmuestrasController->getInformacionMuestra($solicitudesmuestrasDto[0]);
    $solicitudesMuestrasArray = $solicitudesmuestrasController->dto2array($solicitudesmuestrasDto[0], 'SolicitudesmuestrasDTO');

    if ($respuesta) {
        $solicitud['data'] = array_merge($solicitudesMuestrasArray, $respuesta);
        $solicitud['type'] = 'OK';
        echo json_encode($solicitud);
    } else {
        echo json_encode(array('type' => 'ERROR'));
    }
}

if (($accion == "guardarMuestra")) {
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
    $param["nip"] = $nip;
    $param["eMailMP"] = $eMailMP;

    /*
     * Paso 2: Datos objetos y personas
     */
    $param["examensArray"] = $examensArray;
    $param["muestrasArray"] = $muestrasArray;

    /*
     * Paso 3: Datos imputados, victimas y delitos
     */
    $param["imputadosArray"] = $imputadosArray;
    $param["victimasArray"] = $victimasArray;
    $param["tutoresArray"] = $tutoresArray;
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

    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->insertSolicitudesmuestras($param);
    echo json_encode($solicitudesmuestrasDto);
} else if ($accion == "getInfoJuzgadorWS") {
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudesmuestrasFacade->getInfoWS($idJuzgado);
    echo $resultado;
} else if (($accion == "descargaSolicitudMuestra")) {
    $idMuestra = $_POST['idMuestra'];
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->descargaSolicitudMuestra($idMuestra);
    echo $solicitudesmuestrasDto;
} else if ($action == "descargaSolicitudMuestraDownload") {
    $idMuestra = $_GET['idMuestra'];
    $solicitudesmuestrasFacade->descargaSolicitudMuestraDownload($idMuestra);
    exit;
} else if (($accion == "cancelarSolicitudMuestra") && ($idSolicitudMuestra != "")) {
    $motivoCancelacion = $_POST['motivoCancelacion'];
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->cancelarSolicitudMuestra($idSolicitudMuestra, $motivoCancelacion);
    echo $solicitudesmuestrasDto;
} else if (($accion == "consultarMuestra") && ($idSolicitudMuestra == "")) {
    $idJuez = $_SESSION["cveUsuarioSistema"];
    $param = array();
    $param["fechaInicial"] = "";
    $param["fechaFinal"] = "";
    $param["paginacion"] = true;
    $param["cantxPag"] = $_POST["cantxPag"];
    $param["pag"] = $_POST["pag"];
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->consultaMuestras($idJuez, $param);
    echo $solicitudesmuestrasDto;
} else if ($accion == "consultarDetalleMuestra") {
    $idMuestra = $_POST["idMuestra"];
    $juez = "";
    if (isset($_POST["juez"])) {
        $juez = $_POST["juez"];
    }
    $solicitudesmuestrasDto = $solicitudesmuestrasFacade->consultaMuestraDetalle($idMuestra, $juez);
    echo $solicitudesmuestrasDto;
} else if (($accion == "consultarMuestraInformacionAdmon")) {
    $type = $_POST["type"];
    $param["fechaEnd"] = "";
    $param["fechaInicial"] = "";
    if (isset($_POST["fechaRegistro"])) {
        $param["fechaInicial"] = $_POST["fechaRegistro"];
    }
    if (isset($_POST["fechaRegistroEnd"])) {
        $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
    }

    @$numeroMuestra = $_POST["numero"];
    @$anioMuestra = $_POST["anio"];
    $param["numeroMuestra"] = $numeroMuestra;
    $param["anioMuestra"] = $anioMuestra;
    $param["paginacion"] = true;
    $datosBusqueda = $solicitudesmuestrasFacade->consultaMuestrasInformacionAdmon($type, $solicitudesmuestrasDto, $param);
    echo json_encode($datosBusqueda, true);
} else if (($accion == "Juzgadores")) {
    $resultado = $solicitudesmuestrasFacade->selectJuzgadoresGenericoJuzgado();
    echo $resultado;
} else if (($accion == "actualizarJuzgadorMuestra")) {
    $idJuzgador = $_POST['idJuzgador'];
    $idMuestra = $_POST['idMuestra'];
    $resultado = $solicitudesmuestrasFacade->actualizaJuzgadorMuestra($idJuzgador, $idMuestra);
    echo json_encode($resultado);
} else if (($accion == "consultarMuestraInformacionBitacora")) {
    $type = $_POST["type"];
    $param["fechaEnd"] = "";
    $param["fechaInicial"] = "";
    if (isset($_POST["fechaRegistro"])) {
        $param["fechaInicial"] = $_POST["fechaRegistro"];
    }
    if (isset($_POST["fechaRegistroEnd"])) {
        $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
    }

    @$numeroMuestra = $_POST["numero"];
    @$anioMuestra = $_POST["anio"];
    $param["numeroMuestra"] = $numeroMuestra;
    $param["anioMuestra"] = $anioMuestra;
    $param["paginacion"] = true;
    $datosBusqueda = $solicitudesmuestrasFacade->consultarMuestraInformacionBitacora($type, $solicitudesmuestrasDto, $param);
    echo json_encode($datosBusqueda, true);
} else if ($accion == "getAdminInfoJuzgadorWS") {
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudesmuestrasFacade->getAdminInfoJuzgadorWS($idJuzgado);
    echo $resultado;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>