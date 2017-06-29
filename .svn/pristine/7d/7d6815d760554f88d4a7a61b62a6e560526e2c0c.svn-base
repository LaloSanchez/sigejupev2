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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/SolicitudescateosFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/ComprobanteSolicitudescateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudescateosFirmaFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudescateos($SolicitudescateosDto) {
        $SolicitudescateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getidSolicitudCateo(), "utf8") : strtoupper($SolicitudescateosDto->getidSolicitudCateo()))))));
        if ($this->esFecha($SolicitudescateosDto->getidSolicitudCateo())) {
            $SolicitudescateosDto->setidSolicitudCateo($this->fechaMysql($SolicitudescateosDto->getidSolicitudCateo()));
        }
        $SolicitudescateosDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getnumero(), "utf8") : strtoupper($SolicitudescateosDto->getnumero()))))));
        if ($this->esFecha($SolicitudescateosDto->getnumero())) {
            $SolicitudescateosDto->setnumero($this->fechaMysql($SolicitudescateosDto->getnumero()));
        }
        $SolicitudescateosDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getanio(), "utf8") : strtoupper($SolicitudescateosDto->getanio()))))));
        if ($this->esFecha($SolicitudescateosDto->getanio())) {
            $SolicitudescateosDto->setanio($this->fechaMysql($SolicitudescateosDto->getanio()));
        }
        $SolicitudescateosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveJuzgado(), "utf8") : strtoupper($SolicitudescateosDto->getcveJuzgado()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveJuzgado())) {
            $SolicitudescateosDto->setcveJuzgado($this->fechaMysql($SolicitudescateosDto->getcveJuzgado()));
        }
        $SolicitudescateosDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveCatAudiencia(), "utf8") : strtoupper($SolicitudescateosDto->getcveCatAudiencia()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveCatAudiencia())) {
            $SolicitudescateosDto->setcveCatAudiencia($this->fechaMysql($SolicitudescateosDto->getcveCatAudiencia()));
        }
        $SolicitudescateosDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveJuzgadoDesahoga(), "utf8") : strtoupper($SolicitudescateosDto->getcveJuzgadoDesahoga()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveJuzgadoDesahoga())) {
            $SolicitudescateosDto->setcveJuzgadoDesahoga($this->fechaMysql($SolicitudescateosDto->getcveJuzgadoDesahoga()));
        }
        $SolicitudescateosDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getidReferencia(), "utf8") : strtoupper($SolicitudescateosDto->getidReferencia()))))));
        if ($this->esFecha($SolicitudescateosDto->getidReferencia())) {
            $SolicitudescateosDto->setidReferencia($this->fechaMysql($SolicitudescateosDto->getidReferencia()));
        }
        $SolicitudescateosDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getfechaEnvio(), "utf8") : strtoupper($SolicitudescateosDto->getfechaEnvio()))))));
        if ($this->esFecha($SolicitudescateosDto->getfechaEnvio())) {
            $SolicitudescateosDto->setfechaEnvio($this->fechaMysql($SolicitudescateosDto->getfechaEnvio()));
        }
        $SolicitudescateosDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveTipoCarpeta(), "utf8") : strtoupper($SolicitudescateosDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveTipoCarpeta())) {
            $SolicitudescateosDto->setcveTipoCarpeta($this->fechaMysql($SolicitudescateosDto->getcveTipoCarpeta()));
        }
        $SolicitudescateosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcarpetaInv(), "utf8") : strtoupper($SolicitudescateosDto->getcarpetaInv()))))));
        if ($this->esFecha($SolicitudescateosDto->getcarpetaInv())) {
            $SolicitudescateosDto->setcarpetaInv($this->fechaMysql($SolicitudescateosDto->getcarpetaInv()));
        }
        $SolicitudescateosDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getnuc(), "utf8") : strtoupper($SolicitudescateosDto->getnuc()))))));
        if ($this->esFecha($SolicitudescateosDto->getnuc())) {
            $SolicitudescateosDto->setnuc($this->fechaMysql($SolicitudescateosDto->getnuc()));
        }
        $SolicitudescateosDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveUsuario(), "utf8") : strtoupper($SolicitudescateosDto->getcveUsuario()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveUsuario())) {
            $SolicitudescateosDto->setcveUsuario($this->fechaMysql($SolicitudescateosDto->getcveUsuario()));
        }
        $SolicitudescateosDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveAdscripcionSolicita(), "utf8") : strtoupper($SolicitudescateosDto->getcveAdscripcionSolicita()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveAdscripcionSolicita())) {
            $SolicitudescateosDto->setcveAdscripcionSolicita($this->fechaMysql($SolicitudescateosDto->getcveAdscripcionSolicita()));
        }
        $SolicitudescateosDto->setcveEstatusSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getcveEstatusSolicitudCateo(), "utf8") : strtoupper($SolicitudescateosDto->getcveEstatusSolicitudCateo()))))));
        if ($this->esFecha($SolicitudescateosDto->getcveEstatusSolicitudCateo())) {
            $SolicitudescateosDto->setcveEstatusSolicitudCateo($this->fechaMysql($SolicitudescateosDto->getcveEstatusSolicitudCateo()));
        }
        $SolicitudescateosDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getobservaciones(), "utf8") : strtoupper($SolicitudescateosDto->getobservaciones()))))));
        if ($this->esFecha($SolicitudescateosDto->getobservaciones())) {
            $SolicitudescateosDto->setobservaciones($this->fechaMysql($SolicitudescateosDto->getobservaciones()));
        }
        $SolicitudescateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getfechaRegistro(), "utf8") : strtoupper($SolicitudescateosDto->getfechaRegistro()))))));
        if ($this->esFecha($SolicitudescateosDto->getfechaRegistro())) {
            $SolicitudescateosDto->setfechaRegistro($this->fechaMysql($SolicitudescateosDto->getfechaRegistro()));
        }
        $SolicitudescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudescateosDto->getfechaActualizacion(), "utf8") : strtoupper($SolicitudescateosDto->getfechaActualizacion()))))));
        if ($this->esFecha($SolicitudescateosDto->getfechaActualizacion())) {
            $SolicitudescateosDto->setfechaActualizacion($this->fechaMysql($SolicitudescateosDto->getfechaActualizacion()));
        }
        return $SolicitudescateosDto;
    }

    public function selectSolicitudescateos($SolicitudescateosDto) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
        $SolicitudescateosDto = $SolicitudescateosFirmaController->selectSolicitudescateos($SolicitudescateosDto);
        if ($SolicitudescateosDto != "") {
            $dtoToJson = new DtoToJson($SolicitudescateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSolicitudescateos($param = "") {
//        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
        return $SolicitudescateosDto = $SolicitudescateosFirmaController->insertSolicitudescateos($param);
        /*
          if ($SolicitudescateosDto != "") {
          $dtoToJson = new DtoToJson($SolicitudescateosDto);
          return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
          }
          $jsonDto = new Encode_JSON();
          return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
         */
    }

    public function updateSolicitudescateos($SolicitudescateosDto) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
        $SolicitudescateosDto = $SolicitudescateosFirmaController->updateSolicitudescateos($SolicitudescateosDto);
        if ($SolicitudescateosDto != "") {
            $dtoToJson = new DtoToJson($SolicitudescateosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "texto" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSolicitudescateos($SolicitudescateosDto) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
        $SolicitudescateosDto = $SolicitudescateosFirmaController->deleteSolicitudescateos($SolicitudescateosDto);
        if ($SolicitudescateosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function consultaCateos($idJuez, $param) {
        if ($idJuez != "" && $idJuez != 0) {
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDao = new JuzgadoresDAO();
            $juzgadoresDto->setCveUsuario($idJuez);
            $juzgadoresDto = $juzgadoresDao->selectJuzgadoreCveUsario($juzgadoresDto);
            if ($juzgadoresDto != "" && count($juzgadoresDto) > 0) {
                $juzgadoresDto = $juzgadoresDto[0];
                $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
                $resultados = $SolicitudescateosFirmaController->consultaCateos($juzgadoresDto->getIdJuzgador(), $param);
                if ($resultados["type"] == "OK") {
                    $juzgadosDao = new JuzgadosDAO();
                    $estatussolicitudesDto = new EstatussolicitudesDTO();
                    $estatussolicitudesDao = new EstatussolicitudesDAO();
                    $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudes($estatussolicitudesDto);
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
                        $json .= '"solicitudCateo":{';
                        $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getIdSolicitudCateo()) . '",';
                        $json .= '"numero":"' . utf8_encode($resultado["solicitudCateo"]->getNumero()) . '",';
                        $json .= '"anio":"' . utf8_encode($resultado["solicitudCateo"]->getAnio()) . '",';
                        $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgado()) . '",';
                        if ($resultado["solicitudCateo"]->getCveJuzgado() != "" && $resultado["solicitudCateo"]->getCveJuzgado() != 0) {
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgado());
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
                        $json .= '"cveCatAudiencia":"' . utf8_encode($resultado["solicitudCateo"]->getCveCatAudiencia()) . '",';
                        $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgadoDesahoga()) . '",';
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgadoDesahoga());
                        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                        if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                            $juzgadosDto = $juzgadosDto[0];
                            $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                        } else {
                            $json .= '"desJuzgadoDesahoga":"",';
                        }

                        $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudCateo"]->getIdReferencia()) . '",';
                        $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudCateo"]->getFechaEnvio()) . '",';
                        $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudCateo"]->getCveTipoCarpeta()) . '",';
                        $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudCateo"]->getCarpetaInv()) . '",';
                        $json .= '"nuc":"' . utf8_encode($resultado["solicitudCateo"]->getNuc()) . '",';
                        $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudCateo"]->getCveUsuario()) . '",';
                        $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudCateo"]->getCveAdscripcionSolicita()) . '",';
                        $json .= '"cveEstatusSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) . '",';
                        $desEstatusSolicitud = "";
                        foreach ($estatussolicitudesDto as $estatusSolicitud) {
                            if ($estatusSolicitud->getCveEstatusSolicitud() == $resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) {
                                $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitud();
                                break;
                            }
                        }
                        $json .= '"descEstatusSolicitudCateo":"' . utf8_encode($desEstatusSolicitud) . '",';
                        $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudCateo"]->getObservaciones())) . ',';
                        $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudCateo"]->getFechaRegistro()));
                        $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                        $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                        $horaRegistro = $fechaHoraRegistro[1];
                        $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudCateo"]->getFechaActualizacion()) . '"';
                        $json .= '}';
                        $json .= ',"cateo":{';
                        $json .= '"idCateo":"' . utf8_encode($resultado["cateo"]->getIdCateo()) . '",';
                        $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getIdSolicitudCateo()) . '",';
                        $json .= '"cveRespuestaSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getCveRespuestaSolicitudCateo()) . '",';
                        $json .= '"numeroCateo":"' . utf8_encode($resultado["cateo"]->getNumeroCateo()) . '",';
                        $json .= '"anioCateo":"' . utf8_encode($resultado["cateo"]->getAnioCateo()) . '",';
                        $json .= '"solicitud":' . json_encode(utf8_encode($resultado["cateo"]->getSolicitud())) . ',';
                        $json .= '"negada":' . json_encode(utf8_encode($resultado["cateo"]->getNegada())) . ',';
                        $json .= '"concedida":' . json_encode(utf8_encode($resultado["cateo"]->getConcedida())) . ',';
                        $json .= '"fechaPractica":"' . utf8_encode($resultado["cateo"]->getFechaPractica()) . '",';
                        $json .= '"horaPractica":"' . utf8_encode($resultado["cateo"]->getHoraPractica()) . '",';
                        $json .= '"horasPractica":"' . utf8_encode($resultado["cateo"]->getHorasPractica()) . '",';
                        $json .= '"fechaInforme":"' . utf8_encode($resultado["cateo"]->getFechaInforme()) . '",';
                        $json .= '"horaInforme":"' . utf8_encode($resultado["cateo"]->getHoraInforme()) . '",';
                        $json .= '"horasInforme":"' . utf8_encode($resultado["cateo"]->getHorasInforme()) . '",';
                        $json .= '"fechaRespuesta":"' . utf8_encode($resultado["cateo"]->getFechaRespuesta()) . '",';
                        $json .= '"qr":"' . utf8_encode($resultado["cateo"]->getQr()) . '",';
                        $json .= '"firmaDigital":"' . utf8_encode($resultado["cateo"]->getFirmaDigital()) . '",';
                        $json .= '"selloDigital":"' . utf8_encode($resultado["cateo"]->getSelloDigital()) . '",';
                        $json .= '"fechaRegistro":"' . utf8_encode($resultado["cateo"]->getFechaRegistro()) . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["cateo"]->getFechaActualizacion()) . '",';
                        $json .= '"email":"' . utf8_encode($resultado["cateo"]->getEmail()) . '"';
                        $json .= '}';
                        $countObjetos = 1;
                        $json .= ',"objetos":[';
                        if (count($resultado["objetos"]) > 0 && $resultado["objetos"] != "") {
                            foreach ($resultado["objetos"] as $objeto) {
                                $json .= '{';
                                $json .= '"idObjeto":"' . utf8_encode($objeto->getIdObjeto()) . '",';
                                $json .= '"idSolicitudCateo":"' . utf8_encode($objeto->getIdSolicitudCateo()) . '",';
                                $json .= '"desObjeto":' . json_encode(utf8_encode($objeto->getDesObjeto())) . ',';
                                $json .= '"domicilio":' . json_encode(utf8_encode($objeto->getDomicilio())) . ',';
                                $json .= '"fechaRegistro":"' . utf8_encode($objeto->getFechaRegistro()) . '",';
                                $json .= '"fechaActualizacion":"' . utf8_encode($objeto->getFechaActualizacion()) . '",';
                                $json .= '"cveOrigen":"' . utf8_encode($objeto->getCveOrigen()) . '"';
                                $json .= '}';
                                $countObjetos++;
                                if ($countObjetos <= count($resultado["objetos"])) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= ']';
                        $countPersonas = 1;
                        $json .= ',"personas":[';
                        if (count($resultado["personas"]) > 0 && $resultado["personas"] != "") {
                            foreach ($resultado["personas"] as $personas) {
                                $json .= '{';
                                $json .= '"idPersona":"' . utf8_encode($personas->getIdPersona()) . '",';
                                $json .= '"idSolicitudCateo":"' . utf8_encode($personas->getIdSolicitudCateo()) . '",';
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

    public function consultaCateoDetalle($idCateo, $juez = "") {
        if ($idCateo != "" && $idCateo != 0) {
            $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
            $resultados = $SolicitudescateosFirmaController->consultaCateosDetalle($idCateo);
            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudesDAO();
                $estatussolicitudesDto = new EstatussolicitudesDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudes($estatussolicitudesDto);

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
                        $solCateoDto = new SolicitudescateosDTO();
                        $solicitudescateosDao = new SolicitudescateosDAO();
                        $solCateoDto->setCveEstatusSolicitudCateo(2);
                        $fecha = $solicitudescateosDao->selectFechaHoraMySql();
                        $solCateoDto->setFechaActualizacion($fecha);
                        $solCateoDto->setIdSolicitudCateo($resultado["solicitudCateo"]->getIdSolicitudCateo());
                        $solCateoDto = $solicitudescateosDao->updateSolicitudescateos($solCateoDto);
                    }
                    $json .= '{';
                    $json .= '"solicitudCateo":{';
                    $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getIdSolicitudCateo()) . '",';
                    $json .= '"numero":"' . utf8_encode($resultado["solicitudCateo"]->getNumero()) . '",';
                    $json .= '"anio":"' . utf8_encode($resultado["solicitudCateo"]->getAnio()) . '",';
                    $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgado()) . '",';
                    if ($resultado["solicitudCateo"]->getCveJuzgado() != "" && $resultado["solicitudCateo"]->getCveJuzgado() != 0) {
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgado());
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
                    $json .= '"cveCatAudiencia":"' . utf8_encode($resultado["solicitudCateo"]->getCveCatAudiencia()) . '",';
                    $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgadoDesahoga()) . '",';
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgadoDesahoga());
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                    if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                        $juzgadosDto = $juzgadosDto[0];
                        $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                    } else {
                        $json .= '"desJuzgadoDesahoga":"",';
                    }
                    $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudCateo"]->getIdReferencia()) . '",';
                    $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudCateo"]->getFechaEnvio()) . '",';
                    $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudCateo"]->getCveTipoCarpeta()) . '",';
                    $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudCateo"]->getCarpetaInv()) . '",';
                    $json .= '"nuc":"' . utf8_encode($resultado["solicitudCateo"]->getNuc()) . '",';
                    $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudCateo"]->getCveUsuario()) . '",';
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($resultado["solicitudCateo"]->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    }
                    $json .= '"nombreUsuario":"' . utf8_encode($nombreMP) . '",';
                    $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudCateo"]->getCveAdscripcionSolicita()) . '",';
                    $json .= '"cveEstatusSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) . '",';
                    $desEstatusSolicitud = "";
                    foreach ($estatussolicitudesDto as $estatusSolicitud) {
                        if ($estatusSolicitud->getCveEstatusSolicitud() == $resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitud();
                            break;
                        }
                    }
                    $json .= '"descEstatusSolicitudCateo":"' . utf8_encode($desEstatusSolicitud) . '",';
                    $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudCateo"]->getObservaciones())) . ',';
                    $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudCateo"]->getFechaRegistro()));
                    $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                    $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                    $horaRegistro = $fechaHoraRegistro[1];
                    $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudCateo"]->getFechaActualizacion()) . '"';
                    $json .= '}';
                    $json .= ',"cateo":{';
                    $json .= '"idCateo":"' . utf8_encode($resultado["cateo"]->getIdCateo()) . '",';
                    $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getIdSolicitudCateo()) . '",';
                    $json .= '"cveRespuestaSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getCveRespuestaSolicitudCateo()) . '",';
                    $json .= '"numeroCateo":"' . utf8_encode($resultado["cateo"]->getNumeroCateo()) . '",';
                    $json .= '"anioCateo":"' . utf8_encode($resultado["cateo"]->getAnioCateo()) . '",';
                    $json .= '"solicitud":' . json_encode(utf8_encode(preg_replace("/\n/", "<br>", $resultado["cateo"]->getSolicitud()))) . ',';
                    $json .= '"negada":' . json_encode(utf8_encode($resultado["cateo"]->getNegada())) . ',';
                    $json .= '"concedida":' . json_encode(utf8_encode($resultado["cateo"]->getConcedida())) . ',';
                    $json .= '"fechaPractica":"' . utf8_encode($resultado["cateo"]->getFechaPractica()) . '",';
                    $json .= '"horaPractica":"' . utf8_encode($resultado["cateo"]->getHoraPractica()) . '",';
                    $json .= '"horasPractica":"' . utf8_encode($resultado["cateo"]->getHorasPractica()) . '",';
                    $json .= '"fechaInforme":"' . utf8_encode($resultado["cateo"]->getFechaInforme()) . '",';
                    $json .= '"horaInforme":"' . utf8_encode($resultado["cateo"]->getHoraInforme()) . '",';
                    $json .= '"horasInforme":"' . utf8_encode($resultado["cateo"]->getHorasInforme()) . '",';
                    $json .= '"fechaRespuesta":"' . utf8_encode($resultado["cateo"]->getFechaRespuesta()) . '",';
                    $json .= '"qr":"' . utf8_encode($resultado["cateo"]->getQr()) . '",';
                    $json .= '"firmaDigital":"' . utf8_encode($resultado["cateo"]->getFirmaDigital()) . '",';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["cateo"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["cateo"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["cateo"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . utf8_encode($resultado["cateo"]->getEmail()) . '",';
                    $json .= '"motivoCancelacion":"' . utf8_encode($resultado["cateo"]->getMotivoCancelacion()) . '"';
                    $json .= '}';
                    $countObjetos = 1;
                    $json .= ',"objetos":[';
                    if (count($resultado["objetos"]) > 0 && $resultado["objetos"] != "") {
                        foreach ($resultado["objetos"] as $objeto) {
                            $json .= '{';
                            $json .= '"idObjeto":"' . ($objeto->getIdObjeto()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($objeto->getIdSolicitudCateo()) . '",';
                            $json .= '"desObjeto":' . json_encode(utf8_encode(($objeto->getDesObjeto()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($objeto->getDomicilio()))) . ',';
                            $json .= '"fechaRegistro":"' . ($objeto->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($objeto->getFechaActualizacion()) . '",';
                            $json .= '"cveOrigen":"' . ($objeto->getCveOrigen()) . '"';
                            $json .= '}';
                            $countObjetos++;
                            if ($countObjetos <= count($resultado["objetos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countPersonas = 1;
                    $json .= ',"personas":[';
                    if (count($resultado["personas"]) > 0 && $resultado["personas"] != "") {
                        foreach ($resultado["personas"] as $persona) {
                            $json .= '{';
                            $json .= '"idPersona":' . json_encode(utf8_encode(($persona->getIdPersona()))) . ',';
                            $json .= '"idSolicitudCateo":' . json_encode(utf8_encode(($persona->getIdSolicitudCateo()))) . ',';
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
                            $json .= '"idImputadoCateo":"' . ($imputado->getIdImputadoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($imputado->getIdSolicitudCateo()) . '",';
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
                            $json .= '"idOfendidoCateo":"' . ($ofendido->getIdOfendidoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($ofendido->getIdSolicitudCateo()) . '",';
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
                            $json .= '"idDelitoCateo":"' . ($delito->getIdDelitoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($delito->getIdSolicitudCateo()) . '",';
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
                            $json .= '"idMinisterioResponsable":"' . ($ministerioPublico->getIdMinisterioResponsable()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($ministerioPublico->getIdSolicitudCateo()) . '",';
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
                    $documentosdto->setIdCarpetaJudicial($resultado["cateo"]->getIdCateo());
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

    public function consultaDetalleCateos($idCateo, $proveedor = null) {
        if ($idCateo != 0 || $idCateo != "") {
            $SolicitudescateosDao = new SolicitudescateosDAO();
            $resultado = $SolicitudescateosDao->consultaDetalleCateos($idCateo, $proveedor);
            if ($resultado != "") {
                $resultado["status"] = "OK";
                return $resultado;
            }
        }
        return "";
    }

    public function descargaSolicitudCateo($idCateo) {
        if ($idCateo != "" && $idCateo != "0") {
            $ComprobanteSolicitudescateosFirmaController = new ComprobanteSolicitudescateosFirmaController();
            $resultado = $ComprobanteSolicitudescateosFirmaController->generaComprobante($idCateo);
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
//                    #DESCARGA LA SOLICITUD GENERADA
//                    header("Content-disposition: attachment; filename=" . $resultado["file"]);
//                    header("Content-type: application/octet-stream");
//                    readfile("./../../../solicitudespdf/" . $resultado["file"]);
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
                "text" => "EL CATEO SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function cancelarSolicitudCateo($idSolicitudCateo, $motivoCancelacion) {
        if ($idSolicitudCateo != "" && $idSolicitudCateo > 0) {
            $SolicitudescateosFirmaController = new SolicitudescateosFirmaController();
            $SolicitudescateosDto = $SolicitudescateosFirmaController->cancelarSolicitudCateo($idSolicitudCateo, $motivoCancelacion);
//        if ($SolicitudescateosDto == true) {
//            $jsonDto = new Encode_JSON();
//            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
//        }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode($SolicitudescateosDto);
        } else {
            return array("type" => "Error",
                "text" => "EL CATEO SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
    }

    public function selectJuzgadoresGenericoJuzgado() {
        //pendiente --- quitar el valor por defaul del juzgado
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

    public function descargaSolicitudCateoDownload($idCateo) {
        if ($idCateo != "" && $idCateo != "0") {
            $ComprobanteSolicitudescateosFirmaController = new ComprobanteSolicitudescateosFirmaController();
            $resultado = $ComprobanteSolicitudescateosFirmaController->generaComprobante($idCateo);
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
            echo "EL CATEO SELECCIONADO NO ES VALIDO";
        }
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

    public function consultaCateosInformacion($type, $solicitudescateosDto, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new SolicitudescateosFirmaController();
            $resultado = $consultaCtr->consultaCateosInformacion($type, $solicitudescateosDto, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function actualizaJuzgadorCateo($idJuzgador, $idCateo) {
        if ($idJuzgador != 0 && $idCateo != 0) {
            $consultaCtr = new SolicitudescateosFirmaController();
            $resultado = $consultaCtr->actualizaJuzgadorCateo($idJuzgador, $idCateo);
            return $resultado;
        } else {
            $resultado = array("type" => "Error");
        }
    }

    public function getInfoWS($idJuzgado) {
        $solicitudCtr = new SolicitudescateosFirmaController();
        $resultado = $solicitudCtr->getInfoWS($idJuzgado);
        return $resultado;
    }
    
    public function getAdminInfoJuzgadorWS($idJuzgado) {
        $solicitudCtr = new SolicitudescateosFirmaController();
        $resultado = $solicitudCtr->getAdminInfoJuzgadorWS($idJuzgado);
        return $resultado;
    }

}

#DATOS DE A SOLICITUD
@$idSolicitudCateo = $_POST["idSolicitudCateo"];
@$numero = $_POST["numeroCarpeta"];
@$anio = $_POST["anioCarpeta"];
@$cveJuzgado = $_POST["juzgadoProcedencia"];
@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$cveJuzgadoDesahoga = $_POST["juzgadoSolicitar"];
@$idReferencia = $_POST["idReferencia"];
@$fechaEnvio = $_POST["fechaEnvio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$carpetaInv = $_POST["carpetaInv"];
@$nuc = $_POST["nuc"];
@$cveUsuario = $_POST["cveUsuario"];
@$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
@$cveEstatusSolicitudCateo = $_POST["cveEstatusSolicitudCateo"];
@$observaciones = $_POST["observaciones"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

#OTROS DATOS
@$eMailMP = $_POST["eMailMP"];
@$personasArray = $_POST["personasArray"];
@$objetosArray = $_POST["objetosArray"];
@$imputadosArray = $_POST["imputadosArray"];
@$victimasArray = $_POST["victimasArray"];
@$delitosArray = $_POST["delitosArray"];
@$solicitud = $_POST["solicitud"];
@$mpsResponsablesArray = $_POST["mpsResponsablesArray"];
@$fileSolicitud = $_POST["fileSolicitud"];
@$idCateo = $_POST["idCateo"];
@$action = $_GET['action'];

@$motivoCancelacion = $_POST["motivoCancelacion"];

$solicitudescateosFacade = new SolicitudescateosFirmaFacade();
$solicitudescateosDto = new SolicitudescateosDTO();

$solicitudescateosDto->setIdSolicitudCateo($idSolicitudCateo);
$solicitudescateosDto->setNumero($numero);
$solicitudescateosDto->setAnio($anio);
$solicitudescateosDto->setCveJuzgado($cveJuzgado);
$solicitudescateosDto->setCveCatAudiencia($cveCatAudiencia);
$solicitudescateosDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
$solicitudescateosDto->setIdReferencia($idReferencia);
$solicitudescateosDto->setFechaEnvio($fechaEnvio);
$solicitudescateosDto->setCveTipoCarpeta($cveTipoCarpeta);
$solicitudescateosDto->setCarpetaInv($carpetaInv);
$solicitudescateosDto->setNuc($nuc);
$solicitudescateosDto->setCveUsuario($cveUsuario);
$solicitudescateosDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$solicitudescateosDto->setCveEstatusSolicitudCateo($cveEstatusSolicitudCateo);
$solicitudescateosDto->setObservaciones($observaciones);
$solicitudescateosDto->setFechaRegistro($fechaRegistro);
$solicitudescateosDto->setFechaActualizacion($fechaActualizacion);

@$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

if (($accion == "guardar") && ($idSolicitudCateo == "")) {
    $solicitudescateosDto = $solicitudescateosFacade->insertSolicitudescateos($solicitudescateosDto);
    echo $solicitudescateosDto;
} else if (($accion == "cancelarSolicitudCateo") && ($idSolicitudCateo != "")) {
    $solicitudescateosDto = $solicitudescateosFacade->cancelarSolicitudCateo($idSolicitudCateo, $motivoCancelacion);
    echo $solicitudescateosDto;
} else if (($accion == "guardar") && ($idSolicitudCateo != "")) {
    $solicitudescateosDto = $solicitudescateosFacade->updateSolicitudescateos($solicitudescateosDto);
    echo $solicitudescateosDto;
} else if ($accion == "consultar") {
    $solicitudescateosDto = $solicitudescateosFacade->selectSolicitudescateos($solicitudescateosDto);
    echo $solicitudescateosDto;
} else if (($accion == "baja") && ($idSolicitudCateo != "")) {
    $solicitudescateosDto = $solicitudescateosFacade->deleteSolicitudescateos($solicitudescateosDto);
    echo $solicitudescateosDto;
} else if (($accion == "seleccionar") && ($idSolicitudCateo != "")) {
    $solicitudescateosDto = $solicitudescateosFacade->selectSolicitudescateos($solicitudescateosDto);
    echo $solicitudescateosDto;
} else if (($accion == "guardarCateo") && ($idSolicitudCateo == "")) {
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
     * Paso 2: Datos objetos y personas
     */
    $param["personasArray"] = $personasArray;
    $param["objetosArray"] = $objetosArray;

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

    $solicitudescateosDto = $solicitudescateosFacade->insertSolicitudescateos($param);
    echo json_encode($solicitudescateosDto);
} else if (($accion == "consultarCateo") && ($idSolicitudCateo == "")) {
    $idJuez = $_SESSION["cveUsuarioSistema"];
    $param = array();
    $param["fechaInicial"] = "";
    $param["fechaFinal"] = "";
    $param["paginacion"] = true;
    $param["cantxPag"] = $_POST["cantxPag"];
    $param["pag"] = $_POST["pag"];
    $solicitudescateosDto = $solicitudescateosFacade->consultaCateos($idJuez, $param);
    echo $solicitudescateosDto;
} else if (($accion == "consultarDetalleCateo")) {
    $idCateo = $_POST["idCateo"];
    $juez = "";
    if(isset($_POST["juez"])){
        $juez = $_POST["juez"];
    }
    $solicitudescateosDto = $solicitudescateosFacade->consultaCateoDetalle($idCateo, $juez);
    echo $solicitudescateosDto;
} else if (($accion == "descargaSolicitudCateo")) {
    $solicitudescateosDto = $solicitudescateosFacade->descargaSolicitudCateo($idCateo);
    echo $solicitudescateosDto;
} else if ($action == "decargaSolicitudCateoDownload") {
    $idCateo = $_GET['idCateo'];
    $solicitudescateosFacade->descargaSolicitudCateoDownload($idCateo);
    exit;
} else if (($accion == "consultarCateoInformacion") && ($idSolicitudCateo == "")) {
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
    @$numeroCateo = $_POST["numero"];
    @$anioCateo = $_POST["anio"];
    $param["numeroCateo"] = $numeroCateo;
    $param["anioCateo"] = $anioCateo;
    $param["paginacion"] = true;
    $datosBusqueda = $solicitudescateosFacade->consultaCateosInformacion($type, $solicitudescateosDto, $param);
    echo json_encode($datosBusqueda, true);
} else if ($accion == "actualizarJuzgadorCateo") {
    $idJuzgador = $_POST['idJuzgador'];
    $idCateo = $_POST['idCateo'];
    $resultado = $solicitudescateosFacade->actualizaJuzgadorCateo($idJuzgador, $idCateo);
    echo json_encode($resultado);
} else if ($accion == "Juzgadores") {
    $resultado = $solicitudescateosFacade->selectJuzgadoresGenericoJuzgado();
    echo $resultado;
} else if ($accion == "getInfoJuzgadorWS") {
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudescateosFacade->getInfoWS($idJuzgado);
    echo $resultado;
} else if ($accion == "getAdminInfoJuzgadorWS"){
    // --> Accion para obtener la informacion a travez del Web Service
    $idJuzgado = $_POST["juzgado"];
    $resultado = $solicitudescateosFacade->getAdminInfoJuzgadorWS($idJuzgado);
    echo $resultado;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>