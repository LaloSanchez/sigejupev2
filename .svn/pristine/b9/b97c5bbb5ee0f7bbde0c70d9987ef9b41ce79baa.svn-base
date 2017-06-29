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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class PaisesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarPaises($PaisesDto) {
        $PaisesDto->setcvePais(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getcvePais(), "utf8") : strtoupper($PaisesDto->getcvePais()))))));
        if ($this->esFecha($PaisesDto->getcvePais())) {
            $PaisesDto->setcvePais($this->fechaMysql($PaisesDto->getcvePais()));
        }
        $PaisesDto->setcveRegionMundial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getcveRegionMundial(), "utf8") : strtoupper($PaisesDto->getcveRegionMundial()))))));
        if ($this->esFecha($PaisesDto->getcveRegionMundial())) {
            $PaisesDto->setcveRegionMundial($this->fechaMysql($PaisesDto->getcveRegionMundial()));
        }
        $PaisesDto->setdesPais(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getdesPais(), "utf8") : strtoupper($PaisesDto->getdesPais()))))));
        if ($this->esFecha($PaisesDto->getdesPais())) {
            $PaisesDto->setdesPais($this->fechaMysql($PaisesDto->getdesPais()));
        }
        $PaisesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getactivo(), "utf8") : strtoupper($PaisesDto->getactivo()))))));
        if ($this->esFecha($PaisesDto->getactivo())) {
            $PaisesDto->setactivo($this->fechaMysql($PaisesDto->getactivo()));
        }
        $PaisesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getfechaRegistro(), "utf8") : strtoupper($PaisesDto->getfechaRegistro()))))));
        if ($this->esFecha($PaisesDto->getfechaRegistro())) {
            $PaisesDto->setfechaRegistro($this->fechaMysql($PaisesDto->getfechaRegistro()));
        }
        $PaisesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PaisesDto->getfechaActualizacion(), "utf8") : strtoupper($PaisesDto->getfechaActualizacion()))))));
        if ($this->esFecha($PaisesDto->getfechaActualizacion())) {
            $PaisesDto->setfechaActualizacion($this->fechaMysql($PaisesDto->getfechaActualizacion()));
        }
        return $PaisesDto;
    }

    public function selectPaises($PaisesDto) {
        $PaisesDto = $this->validarPaises($PaisesDto);
        $PaisesController = new PaisesController();
        $PaisesDto = $PaisesController->selectPaises($PaisesDto);
        if ($PaisesDto != "") {
            $dtoToJson = new DtoToJson($PaisesDto);
            return utf8_encode($dtoToJson->toJson("RESULTADOS DE LA CONSULTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertPaises($PaisesDto) {
        $PaisesDto = $this->validarPaises($PaisesDto);
        $PaisesController = new PaisesController();
        $PaisesDto = $PaisesController->insertPaises($PaisesDto);
        if ($PaisesDto != "") {
            $dtoToJson = new DtoToJson($PaisesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updatePaises($PaisesDto) {
        $PaisesDto = $this->validarPaises($PaisesDto);
        $PaisesController = new PaisesController();
        $PaisesDto = $PaisesController->updatePaises($PaisesDto);
        if ($PaisesDto != "") {
            $dtoToJson = new DtoToJson($PaisesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deletePaises($PaisesDto) {
        $PaisesDto = $this->validarPaises($PaisesDto);
        $PaisesController = new PaisesController();
        $PaisesDto = $PaisesController->deletePaises($PaisesDto);
        if ($PaisesDto == true) {
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

@$cvePais = $_POST["cvePais"];
@$cveRegionMundial = $_POST["cveRegionMundial"];
@$desPais = $_POST["desPais"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$paisesFacade = new PaisesFacade();
$paisesDto = new PaisesDTO();

$paisesDto->setCvePais($cvePais);
$paisesDto->setCveRegionMundial($cveRegionMundial);
$paisesDto->setDesPais($desPais);
$paisesDto->setActivo($activo);
$paisesDto->setFechaRegistro($fechaRegistro);
$paisesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cvePais == "")) {
    $paisesDto = $paisesFacade->insertPaises($paisesDto);
    echo $paisesDto;
} else if (($accion == "guardar") && ($cvePais != "")) {
    $paisesDto = $paisesFacade->updatePaises($paisesDto);
    echo $paisesDto;
} else if ($accion == "consultar") {
    $paisesDto = $paisesFacade->selectPaises($paisesDto);
    echo $paisesDto;
} else if (($accion == "baja") && ($cvePais != "")) {
    $paisesDto = $paisesFacade->deletePaises($paisesDto);
    echo $paisesDto;
} else if (($accion == "seleccionar") && ($cvePais != "")) {
    $paisesDto = $paisesFacade->selectPaises($paisesDto);
    echo $paisesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>