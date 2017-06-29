<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actaminima/ActaminimaController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ActuacionesFacade {
    private $proveedor; 

    public function __construct() {
    }

    public function validarActuaciones($ActuacionesDto) {
        $ActuacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidActuacion(), "utf8") : strtoupper($ActuacionesDto->getidActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getidActuacion())) {
            $ActuacionesDto->setidActuacion($this->fechaMysql($ActuacionesDto->getidActuacion()));
        }
        $ActuacionesDto->setnumActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumActuacion(), "utf8") : strtoupper($ActuacionesDto->getnumActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getnumActuacion())) {
            $ActuacionesDto->setnumActuacion($this->fechaMysql($ActuacionesDto->getnumActuacion()));
        }
        $ActuacionesDto->setaniActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getaniActuacion(), "utf8") : strtoupper($ActuacionesDto->getaniActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getaniActuacion())) {
            $ActuacionesDto->setaniActuacion($this->fechaMysql($ActuacionesDto->getaniActuacion()));
        }
        $ActuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoActuacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoActuacion())) {
            $ActuacionesDto->setcveTipoActuacion($this->fechaMysql($ActuacionesDto->getcveTipoActuacion()));
        }
        $ActuacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidReferencia(), "utf8") : strtoupper($ActuacionesDto->getidReferencia()))))));
        if ($this->esFecha($ActuacionesDto->getidReferencia())) {
            $ActuacionesDto->setidReferencia($this->fechaMysql($ActuacionesDto->getidReferencia()));
        }
        $ActuacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumero(), "utf8") : strtoupper($ActuacionesDto->getnumero()))))));
        if ($this->esFecha($ActuacionesDto->getnumero())) {
            $ActuacionesDto->setnumero($this->fechaMysql($ActuacionesDto->getnumero()));
        }
        $ActuacionesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getanio(), "utf8") : strtoupper($ActuacionesDto->getanio()))))));
        if ($this->esFecha($ActuacionesDto->getanio())) {
            $ActuacionesDto->setanio($this->fechaMysql($ActuacionesDto->getanio()));
        }
        $ActuacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoCarpeta(), "utf8") : strtoupper($ActuacionesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoCarpeta())) {
            $ActuacionesDto->setcveTipoCarpeta($this->fechaMysql($ActuacionesDto->getcveTipoCarpeta()));
        }
        $ActuacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgado(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgado()))))));
        if ($this->esFecha($ActuacionesDto->getcveJuzgado())) {
            $ActuacionesDto->setcveJuzgado($this->fechaMysql($ActuacionesDto->getcveJuzgado()));
        }
        $ActuacionesDto->setsintesis(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getsintesis(), "utf8") : strtoupper($ActuacionesDto->getsintesis()))))));
        if ($this->esFecha($ActuacionesDto->getsintesis())) {
            $ActuacionesDto->setsintesis($this->fechaMysql($ActuacionesDto->getsintesis()));
        }
        $ActuacionesDto->setobservaciones(str_ireplace("'", "", trim(utf8_decode( $ActuacionesDto->getobservaciones() ))));
        if ($this->esFecha($ActuacionesDto->getobservaciones())) {
            $ActuacionesDto->setobservaciones($this->fechaMysql($ActuacionesDto->getobservaciones()));
        }
        $ActuacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveUsuario(), "utf8") : strtoupper($ActuacionesDto->getcveUsuario()))))));
        if ($this->esFecha($ActuacionesDto->getcveUsuario())) {
            $ActuacionesDto->setcveUsuario($this->fechaMysql($ActuacionesDto->getcveUsuario()));
        }
        $ActuacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getactivo(), "utf8") : strtoupper($ActuacionesDto->getactivo()))))));
        if ($this->esFecha($ActuacionesDto->getactivo())) {
            $ActuacionesDto->setactivo($this->fechaMysql($ActuacionesDto->getactivo()));
        }
        $ActuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaRegistro(), "utf8") : strtoupper($ActuacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($ActuacionesDto->getfechaRegistro())) {
            $ActuacionesDto->setfechaRegistro($this->fechaMysql($ActuacionesDto->getfechaRegistro()));
        }
        $ActuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaActualizacion(), "utf8") : strtoupper($ActuacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($ActuacionesDto->getfechaActualizacion())) {
            $ActuacionesDto->setfechaActualizacion($this->fechaMysql($ActuacionesDto->getfechaActualizacion()));
        }
        $ActuacionesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveEstado(), "utf8") : strtoupper($ActuacionesDto->getcveEstado()))))));
        if ($this->esFecha($ActuacionesDto->getcveEstado())) {
            $ActuacionesDto->setcveEstado($this->fechaMysql($ActuacionesDto->getcveEstado()));
        }
        $ActuacionesDto->setcveJuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgadoDestino()))))));
        if ($this->esFecha($ActuacionesDto->getcveJuzgadoDestino())) {
            $ActuacionesDto->setcveJuzgadoDestino($this->fechaMysql($ActuacionesDto->getcveJuzgadoDestino()));
        }
        $ActuacionesDto->setjuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getjuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getjuzgadoDestino()))))));
        if ($this->esFecha($ActuacionesDto->getjuzgadoDestino())) {
            $ActuacionesDto->setjuzgadoDestino($this->fechaMysql($ActuacionesDto->getjuzgadoDestino()));
        }
        $ActuacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoNotificacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoNotificacion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoNotificacion())) {
            $ActuacionesDto->setcveTipoNotificacion($this->fechaMysql($ActuacionesDto->getcveTipoNotificacion()));
        }
        $ActuacionesDto->setcveTipoSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoSentencia(), "utf8") : strtoupper($ActuacionesDto->getcveTipoSentencia()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoSentencia())) {
            $ActuacionesDto->setcveTipoSentencia($this->fechaMysql($ActuacionesDto->getcveTipoSentencia()));
        }
        $ActuacionesDto->setcveTipoAuto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoAuto(), "utf8") : strtoupper($ActuacionesDto->getcveTipoAuto()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoAuto())) {
            $ActuacionesDto->setcveTipoAuto($this->fechaMysql($ActuacionesDto->getcveTipoAuto()));
        }
        $ActuacionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoResolucion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoResolucion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoResolucion())) {
            $ActuacionesDto->setcveTipoResolucion($this->fechaMysql($ActuacionesDto->getcveTipoResolucion()));
        }
        $ActuacionesDto->setcveTipoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoOrden(), "utf8") : strtoupper($ActuacionesDto->getcveTipoOrden()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoOrden())) {
            $ActuacionesDto->setcveTipoOrden($this->fechaMysql($ActuacionesDto->getcveTipoOrden()));
        }
        $ActuacionesDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoProcedimiento(), "utf8") : strtoupper($ActuacionesDto->getcveTipoProcedimiento()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoProcedimiento())) {
            $ActuacionesDto->setcveTipoProcedimiento($this->fechaMysql($ActuacionesDto->getcveTipoProcedimiento()));
        }
        $ActuacionesDto->setfechaSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaSentencia(), "utf8") : strtoupper($ActuacionesDto->getfechaSentencia()))))));
        if ($this->esFecha($ActuacionesDto->getfechaSentencia())) {
            $ActuacionesDto->setfechaSentencia($this->fechaMysql($ActuacionesDto->getfechaSentencia()));
        }
        $ActuacionesDto->setfechaEjecutoria(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaEjecutoria(), "utf8") : strtoupper($ActuacionesDto->getfechaEjecutoria()))))));
        if ($this->esFecha($ActuacionesDto->getfechaEjecutoria())) {
            $ActuacionesDto->setfechaEjecutoria($this->fechaMysql($ActuacionesDto->getfechaEjecutoria()));
        }
        return $ActuacionesDto;
    }

    public function selectActuaciones($ActuacionesDto) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->selectActuaciones($ActuacionesDto);
        if ($ActuacionesDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertActuaciones($ActuacionesDto) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->insertActuaciones($ActuacionesDto);
        if ($ActuacionesDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateActuaciones($ActuacionesDto) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->updateActuaciones($ActuacionesDto);
        if ($ActuacionesDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteActuaciones($ActuacionesDto) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->deleteActuaciones($ActuacionesDto);
        if ($ActuacionesDto == true) {
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

    public function obtencionAudiencias( $ActuacionesDto ){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->obtencionAudiencias($ActuacionesDto);
        return $ActuacionesDto;
    }
    
    public function guardaActaMinima( $ActuacionesDto, $param ){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->guardaActaMinima($ActuacionesDto, $param);
        return $ActuacionesDto;
    }
    
    public function actualizaActaMinima( $ActuacionesDto, $param ){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->actualizaActaMinima($ActuacionesDto, $param);
        return $ActuacionesDto;
    }
    
    public function eliminaActaMinima( $ActuacionesDto ){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->eliminaActaMinima($ActuacionesDto);
        return $ActuacionesDto;
    }
    
    public function encuentraActasMinimas( $ActuacionesDto, $param ){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->encuentraActasMinimas($ActuacionesDto, $param);
        return $ActuacionesDto;
    }

    public function carpetaArbol( $param ){
        $ActaMinimaController = new ActaMinimaController();
        $ActuacionesDto = $ActaMinimaController->carpetaArbol($param);
        return $ActuacionesDto;
    }
}

@$idActuacion = $_POST["idActuacion"];
@$numActuacion = $_POST["numActuacion"];
@$aniActuacion = $_POST["aniActuacion"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$idReferencia = $_POST["idReferencia"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$noFojas = $_POST['noFojas'];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$sintesis = $_POST["sintesis"];
@$observaciones = $_POST["observaciones"];
@$cveUsuario = $_POST["cveUsuario"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveEstado = $_POST["cveEstado"];
@$cveJuzgadoDestino = $_POST["cveJuzgadoDestino"];
@$juzgadoDestino = $_POST["juzgadoDestino"];
@$cveTipoNotificacion = $_POST["cveTipoNotificacion"];
@$cveTipoSentencia = $_POST["cveTipoSentencia"];
@$cveTipoAuto = $_POST["cveTipoAuto"];
@$cveTipoResolucion = $_POST["cveTipoResolucion"];
@$idJuzgadorAcuerdo = $_POST['idJuzgadorAcuerdo']; 
@$cveTipoOrden = $_POST["cveTipoOrden"];
@$cveTipoProcedimiento = $_POST["cveTipoProcedimiento"];
@$fechaSentencia = $_POST["fechaSentencia"];
@$fechaEjecutoria = $_POST["fechaEjecutoria"];
@$accion = $_POST["accion"];

$param = array();
@$param["idAudiencia"] = $_POST['idAudiencia'];
@$param["listaImputados"] = $_POST['listaImputados'];
@$param["listaDetenidos"] = $_POST['listaDetenidos'];
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
@$param["asigNumero"] = $_POST['asigNumero'];
@$param["idCarpetaJudicial"] = $_POST['idCarpetaJudicial'];
$usuario = (isset($_POST["usuario"])) ? $_POST["usuario"] : '';

$actuacionesFacade = new ActuacionesFacade();
$actuacionesDto = new ActuacionesDTO();

$actuacionesDto->setIdActuacion($idActuacion);
$actuacionesDto->setNumActuacion($numActuacion);
$actuacionesDto->setAniActuacion($aniActuacion);
$actuacionesDto->setCveTipoActuacion($cveTipoActuacion);
$actuacionesDto->setIdReferencia($idReferencia);
$actuacionesDto->setNumero($numero);
$actuacionesDto->setAnio($anio);
$actuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
$actuacionesDto->setCveJuzgado($cveJuzgado);
$actuacionesDto->setSintesis($sintesis);
$actuacionesDto->setObservaciones($observaciones);
$actuacionesDto->setCveUsuario($cveUsuario);
$actuacionesDto->setActivo($activo);
$actuacionesDto->setFechaRegistro($fechaRegistro);
$actuacionesDto->setFechaActualizacion($fechaActualizacion);
$actuacionesDto->setCveEstado($cveEstado);
$actuacionesDto->setCveJuzgadoDestino($cveJuzgadoDestino);
$actuacionesDto->setJuzgadoDestino($juzgadoDestino);
$actuacionesDto->setCveTipoNotificacion($cveTipoNotificacion);
$actuacionesDto->setCveTipoSentencia($cveTipoSentencia);
$actuacionesDto->setCveTipoAuto($cveTipoAuto);
$actuacionesDto->setCveTipoResolucion($cveTipoResolucion);
$actuacionesDto->setCveTipoOrden($cveTipoOrden);
$actuacionesDto->setCveTipoProcedimiento($cveTipoProcedimiento);
$actuacionesDto->setFechaSentencia($fechaSentencia);
$actuacionesDto->setFechaEjecutoria($fechaEjecutoria);
$actuacionesDto->setNoFojas($noFojas);
$actuacionesDto->setIdJuzgadorAcuerdo($idJuzgadorAcuerdo);

if (($accion == "guardar") && ($idActuacion == "")) {
    $actuacionesDto = $actuacionesFacade->insertActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "guardar") && ($idActuacion != "")) {
    $actuacionesDto = $actuacionesFacade->updateActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "consultar") {
    $actuacionesDto = $actuacionesFacade->selectActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "baja") && ($idActuacion != "")) {
    $actuacionesDto = $actuacionesFacade->deleteActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if( $accion == "obtencionAudiencias"){
    $actuacionesDto = $actuacionesFacade->obtencionAudiencias($actuacionesDto);
    echo $actuacionesDto;
} else if( $accion == "guardaActaMinima"){
    $actuacionesDto = $actuacionesFacade->guardaActaMinima($actuacionesDto,$param);
    echo $actuacionesDto;
} else if( $accion == "actualizaActaMinima"){
    $actuacionesDto = $actuacionesFacade->actualizaActaMinima($actuacionesDto,$param);
    echo $actuacionesDto;
} else if( $accion == "eliminaActaMinima"){
    $actuacionesDto = $actuacionesFacade->eliminaActaMinima($actuacionesDto);
    echo $actuacionesDto;
} else if( $accion == "encuentraActasMinimas"){
    $param["paginacion"] = true;
    $actuacionesDto = $actuacionesFacade->encuentraActasMinimas($actuacionesDto, $param);
    echo $actuacionesDto;
} else if( $accion == "carpetaArbol"){
    $actuacionesDto = $actuacionesFacade->carpetaArbol($param);
    echo $actuacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
