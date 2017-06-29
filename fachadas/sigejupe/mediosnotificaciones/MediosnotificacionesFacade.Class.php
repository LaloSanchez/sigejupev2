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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/mediosnotificaciones/MediosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/mediosnotificaciones/MediosnotificacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class MediosnotificacionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto->setcveMedioNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MediosnotificacionesDto->getcveMedioNotificacion(), "utf8") : strtoupper($MediosnotificacionesDto->getcveMedioNotificacion()))))));
        if ($this->esFecha($MediosnotificacionesDto->getcveMedioNotificacion())) {
            $MediosnotificacionesDto->setcveMedioNotificacion($this->fechaMysql($MediosnotificacionesDto->getcveMedioNotificacion()));
        }
        $MediosnotificacionesDto->setdesMedioNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MediosnotificacionesDto->getdesMedioNotificacion(), "utf8") : strtoupper($MediosnotificacionesDto->getdesMedioNotificacion()))))));
        if ($this->esFecha($MediosnotificacionesDto->getdesMedioNotificacion())) {
            $MediosnotificacionesDto->setdesMedioNotificacion($this->fechaMysql($MediosnotificacionesDto->getdesMedioNotificacion()));
        }
        $MediosnotificacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MediosnotificacionesDto->getactivo(), "utf8") : strtoupper($MediosnotificacionesDto->getactivo()))))));
        if ($this->esFecha($MediosnotificacionesDto->getactivo())) {
            $MediosnotificacionesDto->setactivo($this->fechaMysql($MediosnotificacionesDto->getactivo()));
        }
        $MediosnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MediosnotificacionesDto->getfechaRegistro(), "utf8") : strtoupper($MediosnotificacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($MediosnotificacionesDto->getfechaRegistro())) {
            $MediosnotificacionesDto->setfechaRegistro($this->fechaMysql($MediosnotificacionesDto->getfechaRegistro()));
        }
        $MediosnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MediosnotificacionesDto->getfechaActualizacion(), "utf8") : strtoupper($MediosnotificacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($MediosnotificacionesDto->getfechaActualizacion())) {
            $MediosnotificacionesDto->setfechaActualizacion($this->fechaMysql($MediosnotificacionesDto->getfechaActualizacion()));
        }
        return $MediosnotificacionesDto;
    }

    public function selectMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesController = new MediosnotificacionesController();
        $MediosnotificacionesDto = $MediosnotificacionesController->selectMediosnotificaciones($MediosnotificacionesDto);
        if ($MediosnotificacionesDto != "") {
            $dtoToJson = new DtoToJson($MediosnotificacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesController = new MediosnotificacionesController();
        $MediosnotificacionesDto = $MediosnotificacionesController->insertMediosnotificaciones($MediosnotificacionesDto);
        if ($MediosnotificacionesDto != "") {
            $dtoToJson = new DtoToJson($MediosnotificacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesController = new MediosnotificacionesController();
        $MediosnotificacionesDto = $MediosnotificacionesController->updateMediosnotificaciones($MediosnotificacionesDto);
        if ($MediosnotificacionesDto != "") {
            $dtoToJson = new DtoToJson($MediosnotificacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesController = new MediosnotificacionesController();
        $MediosnotificacionesDto = $MediosnotificacionesController->deleteMediosnotificaciones($MediosnotificacionesDto);
        if ($MediosnotificacionesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function getInfoMediosNotificacion($MediosnotificacionesDto) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesController = new MediosnotificacionesController();
        $MediosnotificacionesDto = $MediosnotificacionesController->getInfoMediosNotificacion($MediosnotificacionesDto);
        if ($MediosnotificacionesDto != "") {
            return $MediosnotificacionesDto;
        }
        return json_encode(array("type" => "Error", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function saveTask($param) {
        $mediosNotificacion = new MediosnotificacionesController();
        $result = $mediosNotificacion->saveTask($param);
        return $result;
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

@$cveMedioNotificacion = $_POST["cveMedioNotificacion"];
@$desMedioNotificacion = $_POST["desMedioNotificacion"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$mediosnotificacionesFacade = new MediosnotificacionesFacade();
$mediosnotificacionesDto = new MediosnotificacionesDTO();

$mediosnotificacionesDto->setCveMedioNotificacion($cveMedioNotificacion);
$mediosnotificacionesDto->setDesMedioNotificacion($desMedioNotificacion);
$mediosnotificacionesDto->setActivo($activo);
$mediosnotificacionesDto->setFechaRegistro($fechaRegistro);
$mediosnotificacionesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveMedioNotificacion == "")) {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->insertMediosnotificaciones($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if (($accion == "guardar") && ($cveMedioNotificacion != "")) {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->updateMediosnotificaciones($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if ($accion == "consultar") {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->selectMediosnotificaciones($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if (($accion == "baja") && ($cveMedioNotificacion != "")) {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->deleteMediosnotificaciones($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if (($accion == "seleccionar") && ($cveMedioNotificacion != "")) {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->selectMediosnotificaciones($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if ($accion == "getMediosNotificacion") {
    $mediosnotificacionesDto = $mediosnotificacionesFacade->getInfoMediosNotificacion($mediosnotificacionesDto);
    echo $mediosnotificacionesDto;
} else if ($accion == "saveTask") {
    $param = array();
    @$procesos = $_POST["tasks"];
    $param["proceso"] = $procesos;
    $mediosnotificacionesDto = $mediosnotificacionesFacade->saveTask($param);
    echo $mediosnotificacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>