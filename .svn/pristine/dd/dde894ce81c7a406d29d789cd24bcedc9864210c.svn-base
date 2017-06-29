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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TelefonosofendidossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto->setidTelefonoOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud())))));
        $TelefonosofendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getidOfendidoSolicitud())))));
        $TelefonosofendidossolicitudesDto->settelefono(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->gettelefono())))));
        $TelefonosofendidossolicitudesDto->setcelular(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getcelular())))));
        $TelefonosofendidossolicitudesDto->setemail(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getemail())))));
        $TelefonosofendidossolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getactivo())))));
        $TelefonosofendidossolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getfechaRegistro())))));
        if ($this->esFecha($TelefonosofendidossolicitudesDto->getfechaRegistro())) {
            $TelefonosofendidossolicitudesDto->setfechaRegistro($this->fechaMysql($TelefonosofendidossolicitudesDto->getfechaRegistro()));
        }
        $TelefonosofendidossolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TelefonosofendidossolicitudesDto->getfechaActualizacion())))));
        if ($this->esFecha($TelefonosofendidossolicitudesDto->getfechaActualizacion())) {
            $TelefonosofendidossolicitudesDto->setfechaActualizacion($this->fechaMysql($TelefonosofendidossolicitudesDto->getfechaActualizacion()));
        }

        return $TelefonosofendidossolicitudesDto;
    }

    public function agregarTelefonoOfendido($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $telefonosResponse = $TelefonosofendidossolicitudesController->agregarTelefonoOfendido($TelefonosofendidossolicitudesDto);

        return json_encode($telefonosResponse);
    }

    public function modificarTelefonoOfendido($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $telefonosResponse = $TelefonosofendidossolicitudesController->modificarTelefonoOfendido($TelefonosofendidossolicitudesDto);

        return json_encode($telefonosResponse);
    }

    public function eliminarTelefonoOfendido($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $telefonosResponse = $TelefonosofendidossolicitudesController->eliminarTelefonoOfendido($TelefonosofendidossolicitudesDto);

        return json_encode($telefonosResponse);
    }

    public function selectTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesController->selectTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        if (count($TelefonosofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($TelefonosofendidossolicitudesDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesController->insertTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        if (count($TelefonosofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($TelefonosofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesController->updateTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        if ($TelefonosofendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($TelefonosofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesController = new TelefonosofendidossolicitudesController();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesController->deleteTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        if ($TelefonosofendidossolicitudesDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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
        list($dia, $mes, $year) = explode(" / ", $fecha);

        return $year . " - " . $mes . " - " . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode(" / ", $fecha);

        return $year . " - " . $mes . " - " . $dia;
    }

}

@$idTelefonoOfendidoSolicitud = $_POST["idTelefonoOfendidoSolicitud"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$telefono = $_POST["telefonoTel"];
@$celular = $_POST["celTel"];
@$email = $_POST["emailTel"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$telefonosofendidossolicitudesFacade = new TelefonosofendidossolicitudesFacade();
$telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();

$telefonosofendidossolicitudesDto->setIdTelefonoOfendidoSolicitud($idTelefonoOfendidoSolicitud);
$telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$telefonosofendidossolicitudesDto->setTelefono($telefono);
$telefonosofendidossolicitudesDto->setCelular($celular);
$telefonosofendidossolicitudesDto->setEmail($email);
$telefonosofendidossolicitudesDto->setActivo($activo);
$telefonosofendidossolicitudesDto->setFechaRegistro($fechaRegistro);
$telefonosofendidossolicitudesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idTelefonoOfendidoSolicitud == "")) {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if (($accion == "guardar") && ($idTelefonoOfendidoSolicitud != "")) {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->updateTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if ($accion == "consultar") {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->selectTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if (($accion == "baja") && ($idTelefonoOfendidoSolicitud != "")) {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->deleteTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if (($accion == "seleccionar") && ($idTelefonoOfendidoSolicitud != "")) {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->selectTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if ($accion == "agregar" && $idTelefonoOfendidoSolicitud == "") {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->agregarTelefonoOfendido($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if ($accion == "agregar" && $idTelefonoOfendidoSolicitud != "") {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->modificarTelefonoOfendido($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
} else if ($accion == "eliminar" && $idTelefonoOfendidoSolicitud != "") {
    $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesFacade->eliminarTelefonoOfendido($telefonosofendidossolicitudesDto);
    echo $telefonosofendidossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
