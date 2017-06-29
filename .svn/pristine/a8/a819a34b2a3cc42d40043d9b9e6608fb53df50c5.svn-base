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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/testigossexuales/TestigossexualesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TestigossexualesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto->setidTestigoSexual(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getidTestigoSexual(), "utf8") : strtoupper($TestigossexualesDto->getidTestigoSexual()))))));
        if ($this->esFecha($TestigossexualesDto->getidTestigoSexual())) {
            $TestigossexualesDto->setidTestigoSexual($this->fechaMysql($TestigossexualesDto->getidTestigoSexual()));
        }
        $TestigossexualesDto->setidSexual(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getidSexual(), "utf8") : strtoupper($TestigossexualesDto->getidSexual()))))));
        if ($this->esFecha($TestigossexualesDto->getidSexual())) {
            $TestigossexualesDto->setidSexual($this->fechaMysql($TestigossexualesDto->getidSexual()));
        }
        $TestigossexualesDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getpaterno(), "utf8") : strtoupper($TestigossexualesDto->getpaterno()))))));
        if ($this->esFecha($TestigossexualesDto->getpaterno())) {
            $TestigossexualesDto->setpaterno($this->fechaMysql($TestigossexualesDto->getpaterno()));
        }
        $TestigossexualesDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getmaterno(), "utf8") : strtoupper($TestigossexualesDto->getmaterno()))))));
        if ($this->esFecha($TestigossexualesDto->getmaterno())) {
            $TestigossexualesDto->setmaterno($this->fechaMysql($TestigossexualesDto->getmaterno()));
        }
        $TestigossexualesDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getnombre(), "utf8") : strtoupper($TestigossexualesDto->getnombre()))))));
        if ($this->esFecha($TestigossexualesDto->getnombre())) {
            $TestigossexualesDto->setnombre($this->fechaMysql($TestigossexualesDto->getnombre()));
        }
        $TestigossexualesDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getcveGenero(), "utf8") : strtoupper($TestigossexualesDto->getcveGenero()))))));
        if ($this->esFecha($TestigossexualesDto->getcveGenero())) {
            $TestigossexualesDto->setcveGenero($this->fechaMysql($TestigossexualesDto->getcveGenero()));
        }
        $TestigossexualesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getactivo(), "utf8") : strtoupper($TestigossexualesDto->getactivo()))))));
        if ($this->esFecha($TestigossexualesDto->getactivo())) {
            $TestigossexualesDto->setactivo($this->fechaMysql($TestigossexualesDto->getactivo()));
        }
        $TestigossexualesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getfechaRegistro(), "utf8") : strtoupper($TestigossexualesDto->getfechaRegistro()))))));
        if ($this->esFecha($TestigossexualesDto->getfechaRegistro())) {
            $TestigossexualesDto->setfechaRegistro($this->fechaMysql($TestigossexualesDto->getfechaRegistro()));
        }
        $TestigossexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TestigossexualesDto->getfechaActualizacion(), "utf8") : strtoupper($TestigossexualesDto->getfechaActualizacion()))))));
        if ($this->esFecha($TestigossexualesDto->getfechaActualizacion())) {
            $TestigossexualesDto->setfechaActualizacion($this->fechaMysql($TestigossexualesDto->getfechaActualizacion()));
        }
        return $TestigossexualesDto;
    }

    public function selectTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesController = new TestigossexualesController();
        $TestigossexualesDto = $TestigossexualesController->selectTestigossexuales($TestigossexualesDto);
        if ($TestigossexualesDto != "") {
            $dtoToJson = new DtoToJson($TestigossexualesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesController = new TestigossexualesController();
        $TestigossexualesDto = $TestigossexualesController->insertTestigossexuales($TestigossexualesDto);
        if ($TestigossexualesDto != "") {
            $dtoToJson = new DtoToJson($TestigossexualesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesController = new TestigossexualesController();
        $TestigossexualesDto = $TestigossexualesController->updateTestigossexuales($TestigossexualesDto);
        if ($TestigossexualesDto != "") {
            $dtoToJson = new DtoToJson($TestigossexualesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTestigossexuales($TestigossexualesDto) {
        $TestigossexualesDto = $this->validarTestigossexuales($TestigossexualesDto);
        $TestigossexualesController = new TestigossexualesController();
        $TestigossexualesDto = $TestigossexualesController->deleteTestigossexuales($TestigossexualesDto);
        if ($TestigossexualesDto == true) {
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

}

@$idTestigoSexual = $_POST["idTestigoSexual"];
@$idSexual = $_POST["idSexual"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$nombre = $_POST["nombre"];
@$cveGenero = $_POST["cveGenero"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$testigossexualesFacade = new TestigossexualesFacade();
$testigossexualesDto = new TestigossexualesDTO();

$testigossexualesDto->setIdTestigoSexual($idTestigoSexual);
$testigossexualesDto->setIdSexual($idSexual);
$testigossexualesDto->setPaterno($paterno);
$testigossexualesDto->setMaterno($materno);
$testigossexualesDto->setNombre($nombre);
$testigossexualesDto->setCveGenero($cveGenero);
$testigossexualesDto->setActivo($activo);
$testigossexualesDto->setFechaRegistro($fechaRegistro);
$testigossexualesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idTestigoSexual == "")) {
    $testigossexualesDto = $testigossexualesFacade->insertTestigossexuales($testigossexualesDto);
    echo $testigossexualesDto;
} else if (($accion == "guardar") && ($idTestigoSexual != "")) {
    $testigossexualesDto = $testigossexualesFacade->updateTestigossexuales($testigossexualesDto);
    echo $testigossexualesDto;
} else if ($accion == "consultar") {
    $testigossexualesDto = $testigossexualesFacade->selectTestigossexuales($testigossexualesDto);
    echo $testigossexualesDto;
} else if (($accion == "baja") && ($idTestigoSexual != "")) {
    $testigossexualesDto = $testigossexualesFacade->deleteTestigossexuales($testigossexualesDto);
    echo $testigossexualesDto;
} else if (($accion == "seleccionar") && ($idTestigoSexual != "")) {
    $testigossexualesDto = $testigossexualesFacade->selectTestigossexuales($testigossexualesDto);
    echo $testigossexualesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>