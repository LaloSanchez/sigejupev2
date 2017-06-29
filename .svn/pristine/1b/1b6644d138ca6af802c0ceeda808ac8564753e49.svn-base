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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelacioncateos/ApelacioncateosController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudescateos/EstatussolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/SolicitudescateosController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestasolicitudcateo/RespuestasolicitudcateoDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ApelacioncateosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function insertApelacioncateos($ApelacioncateosDto, $file) {
        $ApelacioncateosController = new ApelacioncateosController();
        $result = $ApelacioncateosDto = $ApelacioncateosController->insertApelacioncateos($ApelacioncateosDto, $file);
        echo json_encode($result);
    }

    public function guardarApelacionResolucion($ApelacioncateosDto, $file) {
        $ApelacioncateosController = new ApelacioncateosController();
        $result = $ApelacioncateosDto = $ApelacioncateosController->guardarApelacionResolucion($ApelacioncateosDto, $file);
        echo $result;
    }

    public function guardarApelacionJuez($ApelacioncateosDto, $file) {
        $ApelacioncateosController = new ApelacioncateosController();
        $result = $ApelacioncateosDto = $ApelacioncateosController->guardarApelacionJuez($ApelacioncateosDto, $file);
        echo $result;
    }

    public function consultaCateosInformacionApelacion($type, $param = "") {
        if ($type != 0 && $type != "") {
            $consultaCtr = new ApelacioncateosController();
            $resultado = $consultaCtr->consultaCateosInformacionApelacion($type, $param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function consultarDetalleCateoApelacion($idCateo, $juez = "") {
        if ($idCateo != "" && $idCateo != 0) {
            $SolicitudescateosController = new ApelacioncateosController();
            $resultados = $SolicitudescateosController->consultaCateosDetalleApelacion($idCateo);
            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudescateosDAO();
                $estatussolicitudesDto = new EstatussolicitudescateosDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudescateos($estatussolicitudesDto);

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
                        if ($juez == 2) {
                            $cveEstatus = 8;
                        } else if ($juez == 3) {
                            $cveEstatus = 10;
                        }
                        $solCateoDto = new SolicitudescateosDTO();
                        $solicitudescateosDao = new SolicitudescateosDAO();
                        $solCateoDto->setCveEstatusSolicitudCateo($cveEstatus);
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
                        if ($estatusSolicitud->getCveEstatusSolicitudCateo() == $resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudCateo();
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
#Obtenemos la Descripcion de la Respuesta
                    $respSolicitudCateoDTO = new RespuestasolicitudcateoDTO();
                    $respSolicitudCateoDAO = new RespuestasolicitudcateoDAO();
                    $respSolicitudCateoDTO->setActivo("S");
                    $respSolicitudCateoDTO->setCveRespuestaSolicitudCateo($resultado["cateo"]->getCveRespuestaSolicitudCateo());
                    $respSolicitudCateoDTO = $respSolicitudCateoDAO->selectRespuestasolicitudcateo($respSolicitudCateoDTO);
                    if ($respSolicitudCateoDTO != "") {
                        $json .= '"desRespuestaSolicitudCateo":"' . utf8_encode($respSolicitudCateoDTO[0]->getDesRespuestaSolicitudCateo()) . '",';
                    } else {
                        $json .= '"desRespuestaSolicitudCateo":"",';
                    }
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
                    $json .= '"qr":"' . $resultado["cateo"]->getQr() . '",';
                    $json .= '"firmaDigital":' . json_encode($resultado["cateo"]->getFirmaDigital()) . ',';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["cateo"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["cateo"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["cateo"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . ($resultado["cateo"]->getEmail()) . '",';
                    $json .= '"motivoCancelacion":"' . utf8_encode($resultado["cateo"]->getMotivoCancelacion()) . '"';
                    $json .= '}';
                    $json .= ',"apelacion":{';
                    if ($resultado["apelacion"] != "") {
                        $json .= '"idApelacionCateo":"' . utf8_encode($resultado["apelacion"]->getIdApelacionCateo()) . '",';
                        $json .= '"idCateo":"' . utf8_encode($resultado["apelacion"]->getIdCateo()) . '",';
                        $json .= '"agravios":' . json_encode(utf8_encode($resultado["apelacion"]->getAgravios())) . ',';
                        $json .= '"escritoApelacion":' . json_encode(utf8_encode($resultado["apelacion"]->getEscritoApelacion())) . ',';
                        $json .= '"acuerdo":' . json_encode(utf8_encode($resultado["apelacion"]->getAcuerdo())) . ',';
                        $json .= '"resolucionSala":' . json_encode(utf8_encode($resultado["apelacion"]->getResolucionSala())) . '';
                    }
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

                    $countObjetosRespuesta = 1;
                    $json .= ',"objetosRespuesta":[';
                    if (count($resultado["objetosRespuesta"]) > 0 && $resultado["objetosRespuesta"] != "") {
                        foreach ($resultado["objetosRespuesta"] as $objetoRespuesta) {
                            $json .= '{';
                            $json .= '"idObjeto":"' . ($objetoRespuesta->getIdObjeto()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($objetoRespuesta->getIdSolicitudCateo()) . '",';
                            $json .= '"desObjeto":' . json_encode(utf8_encode(($objetoRespuesta->getDesObjeto()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($objetoRespuesta->getDomicilio()))) . ',';
                            $json .= '"fechaRegistro":"' . ($objetoRespuesta->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($objetoRespuesta->getFechaActualizacion()) . '",';
                            $json .= '"cveOrigen":"' . ($objetoRespuesta->getCveOrigen()) . '"';
                            $json .= '}';
                            $countObjetosRespuesta++;
                            if ($countObjetosRespuesta <= count($resultado["objetosRespuesta"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countPersonasRespuesta = 1;
                    $json .= ',"personasRespuesta":[';
                    if (count($resultado["personasRespuesta"]) > 0 && $resultado["personasRespuesta"] != "") {
                        foreach ($resultado["personasRespuesta"] as $personasRespuesta) {
                            $json .= '{';
                            $json .= '"idPersona":' . json_encode(utf8_encode(($personasRespuesta->getIdPersona()))) . ',';
                            $json .= '"idSolicitudCateo":' . json_encode(utf8_encode(($personasRespuesta->getIdSolicitudCateo()))) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode(($personasRespuesta->getPaterno()))) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode(($personasRespuesta->getMaterno()))) . ',';
                            $json .= '"nombre":' . json_encode(utf8_encode(($personasRespuesta->getNombre()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($personasRespuesta->getDomicilio()))) . ',';
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode(($personasRespuesta->getCveMunicipio()))) . ',';
                            $json .= '"cveGenero":' . json_encode(utf8_encode(($personasRespuesta->getCveGenero()))) . ',';
                            $json .= '"cveOrigen":' . json_encode(utf8_encode(($personasRespuesta->getCveOrigen()))) . '';
                            $json .= '}';
                            $countPersonasRespuesta++;
                            if ($countPersonasRespuesta <= count($resultado["personasRespuesta"])) {
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
                    // --> Obtenemos el Documento SolicitudApelacion MP
                    $idApelacion = (isset($resultado["apelacion"]) ? $resultado["apelacion"]->getIdApelacionCateo() : 0);
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(29);
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
                            $json .= ', "documentoMP":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoMP":""';
                        }
                    } else {
                        $json .= ', "documentoMP":""';
                    }
                    // --> Obtenemos el Documento SolicitudApelacion Juez
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(30);
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
                            $json .= ', "documentoJuez":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoJuez":""';
                        }
                    } else {
                        $json .= ', "documentoJuez":""';
                    }
                    // --> Obtenemos el Documento SolicitudApelacion Secretario
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(31);
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
                            $json .= ', "documentoSec":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoSec":""';
                        }
                    } else {
                        $json .= ', "documentoSec":""';
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

    public function getApelacionesPendientes() {
        $ctrCateos = new ApelacioncateosController();
        $result = "";
        return $result = $ctrCateos->getApelacionesPendientes();
    }

    public function consultarApelacionInformacionBitacora($param = "") {
        if ($param != "" && is_array($param)) {
            $consultaCtr = new ApelacioncateosController();
            $resultado = $consultaCtr->consultarApelacionInformacionBitacora($param);
            return $resultado;
        }
        return $resultado = array("type" => "Error",
            "text" => "ERROR AL CONSULTAR INFORMACI&OACUTE;N");
    }

    public function actualizarJuzgadorApelacion($idJuzgador, $idCateo, $type) {
        if ($idJuzgador != 0 && $idCateo != 0 && $type != 0) {
            $consultaCtr = new ApelacioncateosController();
            $resultado = $consultaCtr->actualizarJuzgadorApelacion($idJuzgador, $idCateo, $type);
            return $resultado;
        } else {
            $resultado = array("type" => "Error");
        }
    }

}

@$idApelacionCateo = $_POST["idApelacionCateo"];
@$idCateo = $_POST["idCateo"];
@$agravios = $_POST["agravios"];
@$escritoApelacion = $_POST["escritoApelacion"];
@$acuerdo = $_POST["acuerdo"];
@$resolucionSala = $_POST["resolucionSala"];
@$cveSentido = $_POST["cveSentido"];
@$cveEstatusSolicitudCateo = $_POST["cveEstatusSolicitudCateo"];
@$cveUsuarioMP = $_POST["cveUsuarioMP"];
@$cveUsuarioSecretario = $_POST["cveUsuarioSecretario"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$aceptada = $_POST["calificada"];
@$accion = $_POST["accion"];

$apelacioncateosFacade = new ApelacioncateosFacade();
$apelacioncateosDto = new ApelacioncateosDTO();

$apelacioncateosDto->setIdApelacionCateo($idApelacionCateo);
$apelacioncateosDto->setIdCateo($idCateo);
$apelacioncateosDto->setAgravios($agravios);
$apelacioncateosDto->setEscritoApelacion($escritoApelacion);
$apelacioncateosDto->setAcuerdo($acuerdo);
$apelacioncateosDto->setAceptada($aceptada);
$apelacioncateosDto->setResolucionSala($resolucionSala);
$apelacioncateosDto->setCveSentido($cveSentido);
$apelacioncateosDto->setCveEstatusSolicitudCateo($cveEstatusSolicitudCateo);
$apelacioncateosDto->setCveUsuarioMP($cveUsuarioMP);
$apelacioncateosDto->setCveUsuarioSecretario($cveUsuarioSecretario);
$apelacioncateosDto->setFechaRegistro($fechaRegistro);
$apelacioncateosDto->setFechaActualizacion($fechaActualizacion);

@$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

if (isset($_SESSION["cveUsuarioSistema"])) {
    if (($accion == "guardarApelacion") && ($idApelacionCateo == "")) {
        $apelacioncateosDto = $apelacioncateosFacade->insertApelacioncateos($apelacioncateosDto, $_FILES["fileSolicitud"]);
        echo $apelacioncateosDto;
    } else if (($accion == "guardarApelacionResolucion") && ($idApelacionCateo == "")) {
        $apelacioncateosDto = $apelacioncateosFacade->guardarApelacionResolucion($apelacioncateosDto, $_FILES["fileSolicitud"]);
        echo $apelacioncateosDto;
    } else if (($accion == "guardarApelacionJuez") && ($idApelacionCateo == "")) {
        $apelacioncateosDto = $apelacioncateosFacade->guardarApelacionJuez($apelacioncateosDto, $_FILES["fileSolicitud"]);
        echo $apelacioncateosDto;
    } else if (($accion == "consultarCateoInformacionApelacion") && ($idSolicitudCateo == "")) {
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
        @$cveJuzgado = $_POST["cveJuzgado"];
        $param["numeroCateo"] = $numeroCateo;
        $param["anioCateo"] = $anioCateo;
        $param["cveJuzgado"] = $cveJuzgado;
        $param["paginacion"] = true;
        $datosBusqueda = $apelacioncateosFacade->consultaCateosInformacionApelacion($type, $param);
        echo json_encode($datosBusqueda, true);
    } else if (($accion == "consultarDetalleCateoApelacion")) {
        $idCateo = $_POST["idCateo"];
        $juez = "";
        if (isset($_POST["juez"])) {
            $juez = $_POST["juez"];
        }
        $solicitudescateosDto = $apelacioncateosFacade->consultarDetalleCateoApelacion($idCateo, $juez);
        echo $solicitudescateosDto;
    } else if ($accion == "getApelacionesPendientes") {
        echo $apelacioncateosFacade->getApelacionesPendientes();
    } else if (($accion == "consultarApelacionInformacionBitacora")) {
        $param["fechaEnd"] = "";
        $param["fechaInicial"] = "";
        if (isset($_POST["fechaRegistro"])) {
            $param["fechaInicial"] = $_POST["fechaRegistro"];
        }
        if (isset($_POST["fechaRegistroEnd"])) {
            $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
        }

        @$type = $_POST["type"];
        @$numeroCateo = $_POST["numero"];
        @$anioCateo = $_POST["anio"];
        @$juzgado = $_POST["juzgadoProcedencia"];
        @$fechaRegistro = $_POST["fechaRegistro"];

        $param["juzgadoProcedencia"] = $juzgado;
        $param["numeroCateo"] = $numeroCateo;
        $param["anioCateo"] = $anioCateo;
        $param["paginacion"] = true;
        $param["type"] = $type;

        $datosBusqueda = $apelacioncateosFacade->consultarApelacionInformacionBitacora($param);
        echo json_encode($datosBusqueda, true);
    } else if ($accion == "actualizarJuzgadorApelacion") {
        $idJuzgador = $_POST['idJuzgador'];
        $idCateo = $_POST['idCateo'];
        $type = $_POST['type'];
        $resultado = $apelacioncateosFacade->actualizarJuzgadorApelacion($idJuzgador, $idCateo, $type);
        echo json_encode($resultado);
    }
} else {
    echo json_encode(array("type" => "Error", "text" => "SU SESSION A FINALIZADO, INGRESE NUEVAMENTE AL SISTEMA"));
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>