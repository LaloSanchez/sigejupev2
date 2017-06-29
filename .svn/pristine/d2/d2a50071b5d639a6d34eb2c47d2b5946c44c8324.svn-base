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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitos/DelitosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");

class DelitosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDelitos($DelitosDto) {
        $DelitosDto->setcveDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getcveDelito(), "utf8") : strtoupper($DelitosDto->getcveDelito()))))));
        if ($this->esFecha($DelitosDto->getcveDelito())) {
            $DelitosDto->setcveDelito($this->fechaMysql($DelitosDto->getcveDelito()));
        }
        $DelitosDto->setdesDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getdesDelito(), "utf8") : strtoupper($DelitosDto->getdesDelito()))))));
        if ($this->esFecha($DelitosDto->getdesDelito())) {
            $DelitosDto->setdesDelito($this->fechaMysql($DelitosDto->getdesDelito()));
        }
        $DelitosDto->setfechaVigencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getfechaVigencia(), "utf8") : strtoupper($DelitosDto->getfechaVigencia()))))));
        if ($this->esFecha($DelitosDto->getfechaVigencia())) {
            $DelitosDto->setfechaVigencia($this->fechaMysql($DelitosDto->getfechaVigencia()));
        }
        $DelitosDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getfechaInicio(), "utf8") : strtoupper($DelitosDto->getfechaInicio()))))));
        if ($this->esFecha($DelitosDto->getfechaInicio())) {
            $DelitosDto->setfechaInicio($this->fechaMysql($DelitosDto->getfechaInicio()));
        }
        $DelitosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getactivo(), "utf8") : strtoupper($DelitosDto->getactivo()))))));
        if ($this->esFecha($DelitosDto->getactivo())) {
            $DelitosDto->setactivo($this->fechaMysql($DelitosDto->getactivo()));
        }
        $DelitosDto->setcveClasificacionDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getcveClasificacionDelito(), "utf8") : strtoupper($DelitosDto->getcveClasificacionDelito()))))));
        if ($this->esFecha($DelitosDto->getcveClasificacionDelito())) {
            $DelitosDto->setcveClasificacionDelito($this->fechaMysql($DelitosDto->getcveClasificacionDelito()));
        }
        $DelitosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getfechaRegistro(), "utf8") : strtoupper($DelitosDto->getfechaRegistro()))))));
        if ($this->esFecha($DelitosDto->getfechaRegistro())) {
            $DelitosDto->setfechaRegistro($this->fechaMysql($DelitosDto->getfechaRegistro()));
        }
        $DelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getfechaActualizacion(), "utf8") : strtoupper($DelitosDto->getfechaActualizacion()))))));
        if ($this->esFecha($DelitosDto->getfechaActualizacion())) {
            $DelitosDto->setfechaActualizacion($this->fechaMysql($DelitosDto->getfechaActualizacion()));
        }
        $DelitosDto->setarticulo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getarticulo(), "utf8") : strtoupper($DelitosDto->getarticulo()))))));
        if ($this->esFecha($DelitosDto->getarticulo())) {
            $DelitosDto->setarticulo($this->fechaMysql($DelitosDto->getarticulo()));
        }
        $DelitosDto->setpeso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getpeso(), "utf8") : strtoupper($DelitosDto->getpeso()))))));
        if ($this->esFecha($DelitosDto->getpeso())) {
            $DelitosDto->setpeso($this->fechaMysql($DelitosDto->getpeso()));
        }
        $DelitosDto->setcveBienJuridicoAfectado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getcveBienJuridicoAfectado(), "utf8") : strtoupper($DelitosDto->getcveBienJuridicoAfectado()))))));
        if ($this->esFecha($DelitosDto->getcveBienJuridicoAfectado())) {
            $DelitosDto->setcveBienJuridicoAfectado($this->fechaMysql($DelitosDto->getcveBienJuridicoAfectado()));
        }
        $DelitosDto->setcveCodigo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitosDto->getcveCodigo(), "utf8") : strtoupper($DelitosDto->getcveCodigo()))))));
        if ($this->esFecha($DelitosDto->getcveCodigo())) {
            $DelitosDto->setcveCodigo($this->fechaMysql($DelitosDto->getcveCodigo()));
        }
        return $DelitosDto;
    }

    public function selectDelitos($DelitosDto) {
        $DelitosDto = $this->validarDelitos($DelitosDto);
        $DelitosController = new DelitosController();
        $DelitosDto = $DelitosController->selectDelitos($DelitosDto);
        if ($DelitosDto != "") {
            $dtoToJson = new DtoToJson($DelitosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectDelitosLike($DelitosDto) {
        $DelitosDto = $this->validarDelitos($DelitosDto);
        $DelitosController = new DelitosController();
        $DelitosDto = $DelitosController->selectDelitosLike($DelitosDto);
        if ($DelitosDto != "") {
            $dtoToJson = new DtoToJson($DelitosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertDelitos($DelitosDto) {
        $DelitosDto = $this->validarDelitos($DelitosDto);
        $DelitosController = new DelitosController();
        $DelitosDto = $DelitosController->insertDelitos($DelitosDto);
        if ($DelitosDto != "") {
            $dtoToJson = new DtoToJson($DelitosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateDelitos($DelitosDto) {
        $DelitosDto = $this->validarDelitos($DelitosDto);
        $DelitosController = new DelitosController();
        $DelitosDto = $DelitosController->updateDelitos($DelitosDto);
        if ($DelitosDto != "") {
            $dtoToJson = new DtoToJson($DelitosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteDelitos($DelitosDto) {
        $DelitosDto = $this->validarDelitos($DelitosDto);
        $DelitosController = new DelitosController();
        $DelitosDto = $DelitosController->deleteDelitos($DelitosDto);
        if ($DelitosDto == true) {
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
    //******************************
}

@$cveDelito = $_POST["cveDelito"];
@$desDelito = $_POST["desDelito"];
@$fechaVigencia = $_POST["fechaVigencia"];
@$fechaInicio = $_POST["fechaInicio"];
@$activo = $_POST["activo"];
@$cveClasificacionDelito = $_POST["cveClasificacionDelito"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$articulo = $_POST["articulo"];
@$peso = $_POST["peso"];
@$cveBienJuridicoAfectado = $_POST["cveBienJuridicoAfectado"];
@$cveCodigo = $_POST["cveCodigo"];
@$accion = $_POST["accion"];

$delitosFacade = new DelitosFacade();
$delitosDto = new DelitosDTO();

$delitosDto->setCveDelito($cveDelito);
$delitosDto->setDesDelito($desDelito);
$delitosDto->setFechaVigencia($fechaVigencia);
$delitosDto->setFechaInicio($fechaInicio);
$delitosDto->setActivo($activo);
$delitosDto->setCveClasificacionDelito($cveClasificacionDelito);
$delitosDto->setFechaRegistro($fechaRegistro);
$delitosDto->setFechaActualizacion($fechaActualizacion);
$delitosDto->setArticulo($articulo);
$delitosDto->setPeso($peso);
$delitosDto->setCveBienJuridicoAfectado($cveBienJuridicoAfectado);
$delitosDto->setCveCodigo($cveCodigo);

if (($accion == "guardar") && ($cveDelito == "")) {
    $delitosDto = $delitosFacade->insertDelitos($delitosDto);
    echo utf8_encode($delitosDto);
} else if (($accion == "guardar") && ($cveDelito != "")) {
    $delitosDto = $delitosFacade->updateDelitos($delitosDto);
    echo utf8_encode($delitosDto);
} else if ($accion == "consultar") {
    $delitosDto = $delitosFacade->selectDelitos($delitosDto);
    echo utf8_encode($delitosDto);
} else if ($accion == "consultarLike") {
    $delitosDto = $delitosFacade->selectDelitosLike($delitosDto);
    echo utf8_encode($delitosDto);
} else if (($accion == "baja") && ($cveDelito != "")) {
    $delitosDto = $delitosFacade->deleteDelitos($delitosDto);
    echo utf8_encode($delitosDto);
} else if (($accion == "seleccionar") && ($cveDelito != "")) {
    $delitosDto = $delitosFacade->selectDelitos($delitosDto);
    echo utf8_encode($delitosDto);
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>