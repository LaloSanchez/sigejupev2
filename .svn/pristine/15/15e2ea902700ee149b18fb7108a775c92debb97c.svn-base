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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/sexualesconductas/SexualesconductasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SexualesconductasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesconductasDto->getidSexualConducta(), "utf8") : strtoupper($SexualesconductasDto->getidSexualConducta()))))));
        if ($this->esFecha($SexualesconductasDto->getidSexualConducta())) {
            $SexualesconductasDto->setidSexualConducta($this->fechaMysql($SexualesconductasDto->getidSexualConducta()));
        }
        $SexualesconductasDto->setidSexual(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesconductasDto->getidSexual(), "utf8") : strtoupper($SexualesconductasDto->getidSexual()))))));
        if ($this->esFecha($SexualesconductasDto->getidSexual())) {
            $SexualesconductasDto->setidSexual($this->fechaMysql($SexualesconductasDto->getidSexual()));
        }
        $SexualesconductasDto->setcveConducta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesconductasDto->getcveConducta(), "utf8") : strtoupper($SexualesconductasDto->getcveConducta()))))));
        if ($this->esFecha($SexualesconductasDto->getcveConducta())) {
            $SexualesconductasDto->setcveConducta($this->fechaMysql($SexualesconductasDto->getcveConducta()));
        }
        $SexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesconductasDto->getfechaRegistro(), "utf8") : strtoupper($SexualesconductasDto->getfechaRegistro()))))));
        if ($this->esFecha($SexualesconductasDto->getfechaRegistro())) {
            $SexualesconductasDto->setfechaRegistro($this->fechaMysql($SexualesconductasDto->getfechaRegistro()));
        }
        $SexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesconductasDto->getfechaActualizacion(), "utf8") : strtoupper($SexualesconductasDto->getfechaActualizacion()))))));
        if ($this->esFecha($SexualesconductasDto->getfechaActualizacion())) {
            $SexualesconductasDto->setfechaActualizacion($this->fechaMysql($SexualesconductasDto->getfechaActualizacion()));
        }
        return $SexualesconductasDto;
    }

    public function selectSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto = $this->validarSexualesconductas($SexualesconductasDto);
        $SexualesconductasController = new SexualesconductasController();
        $SexualesconductasDto = $SexualesconductasController->selectSexualesconductas($SexualesconductasDto);
        if ($SexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($SexualesconductasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto = $this->validarSexualesconductas($SexualesconductasDto);
        $SexualesconductasController = new SexualesconductasController();
        $SexualesconductasDto = $SexualesconductasController->insertSexualesconductas($SexualesconductasDto);
        if ($SexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($SexualesconductasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto = $this->validarSexualesconductas($SexualesconductasDto);
        $SexualesconductasController = new SexualesconductasController();
        $SexualesconductasDto = $SexualesconductasController->updateSexualesconductas($SexualesconductasDto);
        if ($SexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($SexualesconductasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSexualesconductas($SexualesconductasDto) {
        $SexualesconductasDto = $this->validarSexualesconductas($SexualesconductasDto);
        $SexualesconductasController = new SexualesconductasController();
        $SexualesconductasDto = $SexualesconductasController->deleteSexualesconductas($SexualesconductasDto);
        if ($SexualesconductasDto == true) {
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

@$idSexualConducta = $_POST["idSexualConducta"];
@$idSexual = $_POST["idSexual"];
@$cveConducta = $_POST["cveConducta"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$sexualesconductasFacade = new SexualesconductasFacade();
$sexualesconductasDto = new SexualesconductasDTO();

$sexualesconductasDto->setIdSexualConducta($idSexualConducta);
$sexualesconductasDto->setIdSexual($idSexual);
$sexualesconductasDto->setCveConducta($cveConducta);
$sexualesconductasDto->setFechaRegistro($fechaRegistro);
$sexualesconductasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idSexualConducta == "")) {
    $sexualesconductasDto = $sexualesconductasFacade->insertSexualesconductas($sexualesconductasDto);
    echo $sexualesconductasDto;
} else if (($accion == "guardar") && ($idSexualConducta != "")) {
    $sexualesconductasDto = $sexualesconductasFacade->updateSexualesconductas($sexualesconductasDto);
    echo $sexualesconductasDto;
} else if ($accion == "consultar") {
    $sexualesconductasDto = $sexualesconductasFacade->selectSexualesconductas($sexualesconductasDto);
    echo $sexualesconductasDto;
} else if (($accion == "baja") && ($idSexualConducta != "")) {
    $sexualesconductasDto = $sexualesconductasFacade->deleteSexualesconductas($sexualesconductasDto);
    echo $sexualesconductasDto;
} else if (($accion == "seleccionar") && ($idSexualConducta != "")) {
    $sexualesconductasDto = $sexualesconductasFacade->selectSexualesconductas($sexualesconductasDto);
    echo $sexualesconductasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>