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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/segundainstanciatoca/SegundaInstanciaTocaController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");


include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudesaudienciasFacade {

    private $proveedor;

    public function __construct()
    {

    }

    public function validarSolicitudesaudiencias($SolicitudesaudienciasDto)
    {
        $SolicitudesaudienciasDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getidSolicitudAudiencia())))));
        $SolicitudesaudienciasDto->setcveCatAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveCatAudiencia())))));
        $SolicitudesaudienciasDto->setcveJuzgadoDesahoga(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveJuzgadoDesahoga())))));
        $SolicitudesaudienciasDto->setcveJuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveJuzgado())))));
        $SolicitudesaudienciasDto->setcveConsignacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveConsignacion())))));
        $SolicitudesaudienciasDto->setcveEtapaProcesal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveEtapaProcesal())))));
        $SolicitudesaudienciasDto->setidReferencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getidReferencia())))));
        $SolicitudesaudienciasDto->setfechaEnvio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getfechaEnvio())))));
        $SolicitudesaudienciasDto->setcveTipoCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveTipoCarpeta())))));
        $SolicitudesaudienciasDto->setnumero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumero())))));
        $SolicitudesaudienciasDto->setanio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getanio())))));
        $SolicitudesaudienciasDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getactivo())))));
        $SolicitudesaudienciasDto->setcarpetaInv(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcarpetaInv())))));
        $SolicitudesaudienciasDto->setnuc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnuc())))));
        $SolicitudesaudienciasDto->setcveUsuario(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveUsuario())))));
        $SolicitudesaudienciasDto->setcveAdscripcionSolicita(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveAdscripcionSolicita())))));
        $SolicitudesaudienciasDto->setmismoJuzgador(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getmismoJuzgador())))));
        $SolicitudesaudienciasDto->setTribunal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getTribunal())))));
        $SolicitudesaudienciasDto->setcveEstatusSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveEstatusSolicitud())))));
        $SolicitudesaudienciasDto->setobservaciones(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getobservaciones())))));
        $SolicitudesaudienciasDto->setnumImputados(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumImputados())))));
        $SolicitudesaudienciasDto->setnumDelitos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumDelitos())))));
        $SolicitudesaudienciasDto->setnumOfendidos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumOfendidos())))));
        $SolicitudesaudienciasDto->setcveNaturaleza(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveNaturaleza())))));
        $SolicitudesaudienciasDto->setcveTipoAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveTipoAudiencia())))));

        return $SolicitudesaudienciasDto;
    }

    public function selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param)
    {
        $f1 = $param["fechaInicialConsulta"];
        $f2 = $param["fechaFinalConsulta"];
        $detenido = false;
        if ($f1 > $f2) {
            $mensaje = array("estatus" => "Fail", "mnj" => "La Fecha Inicial no puede ser mayor a la Fecha Final");

            return json_encode($mensaje);
        }
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param);

        $juzgadosDto = new JuzgadosDTO ();
        $juzgadosDao = new JuzgadosDAO ();
        $catAudienciasDto = new CataudienciasDTO();
        $catAudienciasDao = new CataudienciasDAO();

        $estatusSolictudesDto = new EstatussolicitudesDTO();
        $estatusSolictudesDao = new EstatussolicitudesDAO();

        $imputadossolicitudesDto = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();

        $tiposcarpetasDto = new TiposcarpetasDTO();
        $tiposcarpetasDao = new TiposcarpetasDAO();

        $json = "";
        $x = 1;
        if ($SolicitudesaudienciasDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($SolicitudesaudienciasDto) . '",';
            $json .= '"data":[';
            foreach ($SolicitudesaudienciasDto as $Solicitudaudiencia) {
                $juzgadosDto->setCveJuzgado($Solicitudaudiencia->getCveJuzgado());
                $rsJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto);

                $catAudienciasDto->setCveCatAudiencia($Solicitudaudiencia->getCveCatAudiencia());
                $rsCatAudiencias = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

                $estatusSolictudesDto->setCveEstatusSolicitud($Solicitudaudiencia->getCveEstatusSolicitud());
                $rsEstatusSolicitud = $estatusSolictudesDao->selectEstatussolicitudes($estatusSolictudesDto);
                if ($Solicitudaudiencia->getCveTipoCarpeta() != 0 && $Solicitudaudiencia->getCveTipoCarpeta() != "" && $Solicitudaudiencia->getCveTipoCarpeta() != null) {
                    $tiposcarpetasDto->setCveTipoCarpeta($Solicitudaudiencia->getCveTipoCarpeta());
                    $rsTipoCarpeta = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto);
                } else {
                    $rsTipoCarpeta = "";
                }

                $imputadossolicitudesDto->setIdSolicitudAudiencia($Solicitudaudiencia->getIdSolicitudAudiencia());
                $rsimputadosSolicitudes = $imputadossolicitudesDao->selectimputadossolicitudes($imputadossolicitudesDto);
                if ($rsimputadosSolicitudes != "") {
                    foreach ($rsimputadosSolicitudes as $rsimputadoSolicitud) {
                        if ($rsimputadoSolicitud->getDetenido() == "S") {
                            $detenido = true;
                        }
                    }
                }

                $json .= "{";
                $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdSolicitudAudiencia())) . ",";
                $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveCatAudiencia())) . ",";
                if ($rsCatAudiencias != "") {
                    $json .= '"desAudiencia":' . json_encode(utf8_encode($rsCatAudiencias[0]->getDesCatAudiencia())) . ",";
                } else {
                    $json .= '"desAudiencia": "",';
                }
                $json .= '"cveJuzgadoDesahoga":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgadoDesahoga())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgado())) . ",";
                if ($rsJuzgado != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($rsJuzgado[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado": "",';
                }

                if ($detenido == true) {
                    $json .= '"detenido":' . json_encode(utf8_encode("S")) . ",";
                } else {
                    $json .= '"detenido":' . json_encode(utf8_encode("N")) . ",";
                }

                $json .= '"cveConsignacion":' . json_encode(utf8_encode($Solicitudaudiencia->getCveConsignacion())) . ",";
                $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEtapaProcesal())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdReferencia())) . ",";
                $fecha = explode(" ", $Solicitudaudiencia->getFechaRegistro());
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($this->fechaNormal($fecha[0]))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaActualizacion())) . ",";
                $json .= '"fechaEnvio":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaEnvio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoCarpeta())) . ",";
                if ($rsTipoCarpeta != "") {
                    $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($rsTipoCarpeta[0]->getDesTipoCarpeta())) . ",";
                } else {
                    $json .= '"desTipoCarpeta": "N/A",';
                }
                $json .= '"numero":' . json_encode(utf8_encode($Solicitudaudiencia->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($Solicitudaudiencia->getAnio())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Solicitudaudiencia->getActivo())) . ",";
                $json .= '"carpetaInv":' . json_encode(utf8_encode($Solicitudaudiencia->getCarpetaInv())) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($Solicitudaudiencia->getNuc())) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Solicitudaudiencia->getCveUsuario())) . ",";
                $json .= '"cveAdscripcionSolicita":' . json_encode(utf8_encode($Solicitudaudiencia->getCveAdscripcionSolicita())) . ",";
                $json .= '"mismoJuzgador":' . json_encode(utf8_encode($Solicitudaudiencia->getMismoJuzgador())) . ",";
                $json .= '"tribunal":' . json_encode(utf8_encode($Solicitudaudiencia->getTribunal())) . ",";
                $json .= '"cveEstatusSolicitud":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEstatusSolicitud())) . ",";
                if ($rsEstatusSolicitud != "") {
                    $json .= '"desEstatusSolictud":' . json_encode(utf8_encode($rsEstatusSolicitud[0]->getDesEstatusSolicitud())) . ",";
                } else {
                    $json .= '"desEstatusSolictud": "",';
                }
                $json .= '"observaciones":' . json_encode(utf8_encode($Solicitudaudiencia->getObservaciones())) . ",";
                $json .= '"numImputados":' . json_encode(utf8_encode($Solicitudaudiencia->getNumImputados())) . ",";
                $json .= '"numOfendidos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumOfendidos())) . ",";
                $json .= '"numDelitos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumDelitos())) . ",";
                $json .= '"cveNaturaleza":' . json_encode(utf8_encode($Solicitudaudiencia->getCveNaturaleza())) . ",";
                $json .= '"cveTipoAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoAudiencia())) . "";

                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($SolicitudesaudienciasDto)) {
                    $json .= ",";
                }
            }
//            $json .= "]";
//            $json .= "}";
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($SolicitudesaudienciasDto) . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function getPaginas($SolicitudesaudienciasDto, $param)
    {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->getPaginas($SolicitudesaudienciasDto, $param);
        if ($SolicitudesaudienciasDto != "") {
            return $SolicitudesaudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSolicitudesaudiencias($SolicitudesaudienciasDto)
    {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->guardarSolicitudDeAudiencia($SolicitudesaudienciasDto, "");

        return $SolicitudesaudienciasDto;
    }

    public function updateSolicitudesaudiencias($SolicitudesaudienciasDto)
    {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->updateSolicitudesaudiencias($SolicitudesaudienciasDto);
        if ($SolicitudesaudienciasDto != "") {
            $dtoToJson = new DtoToJson($SolicitudesaudienciasDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSolicitudesaudiencias($SolicitudesaudienciasDto)
    {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->deleteSolicitudesaudiencias($SolicitudesaudienciasDto);
        if ($SolicitudesaudienciasDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    public function esFechaMysql($fecha)
    {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }

        return false;
    }

    public function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    public function fechaNormal($fecha)
    {
        list($year, $mes, $dia) = explode("-", $fecha);

        return $dia . "/" . $mes . "/" . $year;
    }

}

@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$cveJuzgadoDesahoga = $_POST["cveJuzgadoDesahoga"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$cveConsignacion = $_POST["cveConsignacion"];
@$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
@$idReferencia = $_POST["idReferencia"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$fechaEnvio = $_POST["fechaEnvio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$activo = $_POST["activo"];
@$carpetaInv = $_POST["carpetaInv"];
@$nuc = $_POST["nuc"];
@$cveUsuario = $_SESSION["cveUsuarioSistema"];
//@$cveUsuario = $_POST["cveUsuario"];
@$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
@$mismoJuzgador = $_POST["mismoJuzgador"];
@$tribunal = $_POST["tribunal"];
@$cveEstatusSolicitud = $_POST["cveEstatusSolicitud"];
@$observaciones = $_POST["observaciones"];
@$numImputados = $_POST["numImputados"];
@$numDelitos = $_POST["numDelitos"];
@$numOfendidos = $_POST["numOfendidos"];
@$cveNaturaleza = $_POST["cveNaturaleza"];
@$cveTipoAudiencia = $_POST["cveTipoAudiencia"];
@$accion = $_POST["accion"];

$param = array();
$solicitudesaudienciasFacade = new SolicitudesaudienciasFacade();
if (@$_POST['fechaInicio'] != "") {
    @$param["fechaInicialConsulta"] = $solicitudesaudienciasFacade->fechaMysql($_POST['fechaInicio']);
} else {
    @$param["fechaInicialConsulta"] = ("");
}
if (@$_POST['fechaFin'] != "") {
    @$param["fechaFinalConsulta"] = $solicitudesaudienciasFacade->fechaMysql($_POST['fechaFin']);
} else {
    @$param["fechaFinalConsulta"] = ("");
}
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

$solicitudesaudienciasFacade = new SolicitudesaudienciasFacade();
$solicitudesaudienciasDto = new SolicitudesaudienciasDTO();

$solicitudesaudienciasDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$solicitudesaudienciasDto->setCveCatAudiencia($cveCatAudiencia);
$solicitudesaudienciasDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
$solicitudesaudienciasDto->setCveJuzgado($cveJuzgado);
$solicitudesaudienciasDto->setCveConsignacion($cveConsignacion);
$solicitudesaudienciasDto->setCveEtapaProcesal($cveEtapaProcesal);
$solicitudesaudienciasDto->setIdReferencia($idReferencia);
$solicitudesaudienciasDto->setFechaRegistro($fechaRegistro);
$solicitudesaudienciasDto->setFechaActualizacion($fechaActualizacion);
$solicitudesaudienciasDto->setFechaEnvio($fechaEnvio);
$solicitudesaudienciasDto->setCveTipoCarpeta($cveTipoCarpeta);
$solicitudesaudienciasDto->setNumero($numero);
$solicitudesaudienciasDto->setAnio($anio);
$solicitudesaudienciasDto->setActivo($activo);
$solicitudesaudienciasDto->setCarpetaInv($carpetaInv);
$solicitudesaudienciasDto->setNuc($nuc);
$solicitudesaudienciasDto->setCveUsuario($cveUsuario);
$solicitudesaudienciasDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$solicitudesaudienciasDto->setMismoJuzgador($mismoJuzgador);
$solicitudesaudienciasDto->setTribunal($tribunal);
$solicitudesaudienciasDto->setCveEstatusSolicitud($cveEstatusSolicitud);
$solicitudesaudienciasDto->setObservaciones($observaciones);
$solicitudesaudienciasDto->setNumImputados($numImputados);
$solicitudesaudienciasDto->setNumDelitos($numDelitos);
$solicitudesaudienciasDto->setNumOfendidos($numOfendidos);
$solicitudesaudienciasDto->setCveNaturaleza($cveNaturaleza);
$solicitudesaudienciasDto->setCveTipoAudiencia($cveTipoAudiencia);


/*
 * se agrega opcion para forzar a mostrar las solicitudes de audiencia del usuario que esta logueado
 */
if (isset($_POST['extra']) && $_POST['extra'] == 'byCveUsuario') {
    $solicitudesaudienciasDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
}
/*
 * termina opcion
 */


if (($accion == "guardar")) {
    $solicitudesaudienciasDto = $solicitudesaudienciasFacade->insertSolicitudesaudiencias($solicitudesaudienciasDto);
    echo $solicitudesaudienciasDto;
} else if ($accion == "consultar") {
    $param["paginacion"] = true;
    $solicitudesaudienciasDto = $solicitudesaudienciasFacade->selectSolicitudesaudiencias($solicitudesaudienciasDto, $param);
    echo $solicitudesaudienciasDto;
} else if (($accion == "baja") && ($idSolicitudAudiencia != "")) {
    $solicitudesaudienciasDto = $solicitudesaudienciasFacade->deleteSolicitudesaudiencias($solicitudesaudienciasDto);
    echo $solicitudesaudienciasDto;
} else if (($accion == "seleccionar") && ($idSolicitudAudiencia != "")) {
    $param["paginacion"] = true;
    $solicitudesaudienciasDto = $solicitudesaudienciasFacade->selectSolicitudesaudiencias($solicitudesaudienciasDto, $param);
    echo $solicitudesaudienciasDto;
} else if ($accion == "getPaginas") {
    $param["paginacion"] = true;
    $solicitudesaudienciasDto = $solicitudesaudienciasFacade->getPaginas($solicitudesaudienciasDto, $param);
    echo $solicitudesaudienciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>