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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/controlcargas/ControlcargasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ControlcargasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarControlcargas($ControlcargasDto) {
        $ControlcargasDto->setidControlCarga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getidControlCarga(), "utf8") : strtoupper($ControlcargasDto->getidControlCarga()))))));
        if ($this->esFecha($ControlcargasDto->getidControlCarga())) {
            $ControlcargasDto->setidControlCarga($this->fechaMysql($ControlcargasDto->getidControlCarga()));
        }
        $ControlcargasDto->setanioCarga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getanioCarga(), "utf8") : strtoupper($ControlcargasDto->getanioCarga()))))));
        if ($this->esFecha($ControlcargasDto->getanioCarga())) {
            $ControlcargasDto->setanioCarga($this->fechaMysql($ControlcargasDto->getanioCarga()));
        }
        $ControlcargasDto->setcveMes(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getcveMes(), "utf8") : strtoupper($ControlcargasDto->getcveMes()))))));
        if ($this->esFecha($ControlcargasDto->getcveMes())) {
            $ControlcargasDto->setcveMes($this->fechaMysql($ControlcargasDto->getcveMes()));
        }
        $ControlcargasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getcveJuzgado(), "utf8") : strtoupper($ControlcargasDto->getcveJuzgado()))))));
        if ($this->esFecha($ControlcargasDto->getcveJuzgado())) {
            $ControlcargasDto->setcveJuzgado($this->fechaMysql($ControlcargasDto->getcveJuzgado()));
        }
        $ControlcargasDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getidJuzgador(), "utf8") : strtoupper($ControlcargasDto->getidJuzgador()))))));
        if ($this->esFecha($ControlcargasDto->getidJuzgador())) {
            $ControlcargasDto->setidJuzgador($this->fechaMysql($ControlcargasDto->getidJuzgador()));
        }
        $ControlcargasDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getcveFuncionJuzgador(), "utf8") : strtoupper($ControlcargasDto->getcveFuncionJuzgador()))))));
        if ($this->esFecha($ControlcargasDto->getcveFuncionJuzgador())) {
            $ControlcargasDto->setcveFuncionJuzgador($this->fechaMysql($ControlcargasDto->getcveFuncionJuzgador()));
        }
        $ControlcargasDto->settotalPuntaje(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->gettotalPuntaje(), "utf8") : strtoupper($ControlcargasDto->gettotalPuntaje()))))));
        if ($this->esFecha($ControlcargasDto->gettotalPuntaje())) {
            $ControlcargasDto->settotalPuntaje($this->fechaMysql($ControlcargasDto->gettotalPuntaje()));
        }
        $ControlcargasDto->settotalAsignado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->gettotalAsignado(), "utf8") : strtoupper($ControlcargasDto->gettotalAsignado()))))));
        if ($this->esFecha($ControlcargasDto->gettotalAsignado())) {
            $ControlcargasDto->settotalAsignado($this->fechaMysql($ControlcargasDto->gettotalAsignado()));
        }
        $ControlcargasDto->setcontrol(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getcontrol(), "utf8") : strtoupper($ControlcargasDto->getcontrol()))))));
        if ($this->esFecha($ControlcargasDto->getcontrol())) {
            $ControlcargasDto->setcontrol($this->fechaMysql($ControlcargasDto->getcontrol()));
        }
        $ControlcargasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getfechaRegistro(), "utf8") : strtoupper($ControlcargasDto->getfechaRegistro()))))));
        if ($this->esFecha($ControlcargasDto->getfechaRegistro())) {
            $ControlcargasDto->setfechaRegistro($this->fechaMysql($ControlcargasDto->getfechaRegistro()));
        }
        $ControlcargasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ControlcargasDto->getfechaActualizacion(), "utf8") : strtoupper($ControlcargasDto->getfechaActualizacion()))))));
        if ($this->esFecha($ControlcargasDto->getfechaActualizacion())) {
            $ControlcargasDto->setfechaActualizacion($this->fechaMysql($ControlcargasDto->getfechaActualizacion()));
        }
        return $ControlcargasDto;
    }

    public function selectControlcargas($ControlcargasDto) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasController = new ControlcargasController();
        $ControlcargasDto = $ControlcargasController->selectControlcargas($ControlcargasDto);
        if ($ControlcargasDto != "") {
            $dtoToJson = new DtoToJson($ControlcargasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertControlcargas($ControlcargasDto) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasController = new ControlcargasController();
        $ControlcargasDto = $ControlcargasController->insertControlcargas($ControlcargasDto);
        if ($ControlcargasDto != "") {
            $dtoToJson = new DtoToJson($ControlcargasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateControlcargas($ControlcargasDto) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasController = new ControlcargasController();
        $ControlcargasDto = $ControlcargasController->updateControlcargas($ControlcargasDto);
        if ($ControlcargasDto != "") {
            $dtoToJson = new DtoToJson($ControlcargasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteControlcargas($ControlcargasDto) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasController = new ControlcargasController();
        $ControlcargasDto = $ControlcargasController->deleteControlcargas($ControlcargasDto);
        if ($ControlcargasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function obtenerJuzgador() {
        
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

@$idControlCarga = $_POST["idControlCarga"];
@$anioCarga = $_POST["anioCarga"];
@$cveMes = $_POST["cveMes"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveFuncionJuzgador = $_POST["cveFuncionJuzgador"];
@$totalPuntaje = $_POST["totalPuntaje"];
@$totalAsignado = $_POST["totalAsignado"];
@$control = $_POST["control"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$controlcargasFacade = new ControlcargasFacade();
$controlcargasDto = new ControlcargasDTO();

$controlcargasDto->setIdControlCarga($idControlCarga);
$controlcargasDto->setAnioCarga($anioCarga);
$controlcargasDto->setCveMes($cveMes);
$controlcargasDto->setCveJuzgado($cveJuzgado);
$controlcargasDto->setIdJuzgador($idJuzgador);
$controlcargasDto->setCveFuncionJuzgador($cveFuncionJuzgador);
$controlcargasDto->setTotalPuntaje($totalPuntaje);
$controlcargasDto->setTotalAsignado($totalAsignado);
$controlcargasDto->setControl($control);
$controlcargasDto->setFechaRegistro($fechaRegistro);
$controlcargasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idControlCarga == "")) {
    $controlcargasDto = $controlcargasFacade->insertControlcargas($controlcargasDto);
    echo $controlcargasDto;
} else if (($accion == "guardar") && ($idControlCarga != "")) {
    $controlcargasDto = $controlcargasFacade->updateControlcargas($controlcargasDto);
    echo $controlcargasDto;
} else if ($accion == "consultar") {
    $controlcargasDto = $controlcargasFacade->selectControlcargas($controlcargasDto);
    echo $controlcargasDto;
} else if (($accion == "baja") && ($idControlCarga != "")) {
    $controlcargasDto = $controlcargasFacade->deleteControlcargas($controlcargasDto);
    echo $controlcargasDto;
} else if (($accion == "seleccionar") && ($idControlCarga != "")) {
    $controlcargasDto = $controlcargasFacade->selectControlcargas($controlcargasDto);
    echo $controlcargasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>