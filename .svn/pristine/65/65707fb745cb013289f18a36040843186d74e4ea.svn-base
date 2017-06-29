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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tutoresofendidos/TutoresofendidosadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TutoresofendidosFacade {

    public function validarTutoresofendidos($TutoresofendidosDto) {

        $TutoresofendidosDto->setidTutorOfendido(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getidTutorOfendido())))));
        $TutoresofendidosDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getidOfendidoSolicitud())))));
        $TutoresofendidosDto->setcveTipoTutor(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getcveTipoTutor())))));
        $TutoresofendidosDto->setProvDef(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getProvDef())))));
        $TutoresofendidosDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getnombre())))));
        $TutoresofendidosDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getpaterno())))));
        $TutoresofendidosDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getmaterno())))));
        $TutoresofendidosDto->setfechaNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getfechaNacimiento())))));
        if ($this->esFecha($TutoresofendidosDto->getfechaNacimiento())) {
            $TutoresofendidosDto->setfechaNacimiento($this->fechaMysql($TutoresofendidosDto->getfechaNacimiento()));
        }

        $TutoresofendidosDto->setedad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getedad())))));
        $TutoresofendidosDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getactivo())))));
        $TutoresofendidosDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getfechaRegistro())))));
        $TutoresofendidosDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getfechaActualizacion())))));
        $TutoresofendidosDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresofendidosDto->getcveGenero())))));

        return $TutoresofendidosDto;
    }

    public function agregarTutorOfendido($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->agregarTutorOfendido($TutoresofendidosDto);

        return json_encode($TutoresofendidosDto);
    }

    public function modificarTutorOfendido($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->modificarTutorOfendido($TutoresofendidosDto);

        return json_encode($TutoresofendidosDto);
    }

    public function eliminarTutorOfendido($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->eliminarTutorOfendido($TutoresofendidosDto);

        return json_encode($TutoresofendidosDto);
    }

    public function selectTutoresofendidos($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->selectTutoresofendidos($TutoresofendidosDto);
        if (count($TutoresofendidosDto)) {
            $dtoToJson = new DtoToJson($TutoresofendidosDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTutoresofendidos($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->insertTutoresofendidos($TutoresofendidosDto);
        if (count($TutoresofendidosDto)) {
            $dtoToJson = new DtoToJson($TutoresofendidosDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTutoresofendidos($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->updateTutoresofendidos($TutoresofendidosDto);
        if ($TutoresofendidosDto != "") {
            $dtoToJson = new DtoToJson($TutoresofendidosDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTutoresofendidos($TutoresofendidosDto) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosController = new TutoresofendidosController();
        $TutoresofendidosDto = $TutoresofendidosController->deleteTutoresofendidos($TutoresofendidosDto);
        if ($TutoresofendidosDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "status" => "error", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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

@$idTutorOfendido = $_POST["idTutorOfendido"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$cveTipoTutor = $_POST["cmbTipoTutorOfendido"];
@$ProvDef = $_POST["ProvDef"];
@$nombre = $_POST["nombreTutorOfendido"];
@$paterno = $_POST["paternoTutorOfendido"];
@$materno = $_POST["maternoTutorOfendido"];
@$fechaNacimiento = $_POST["fechaNacimientoTutorOfendido"];
@$edad = $_POST["txtEdadTutorOfendido"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveGenero = $_POST["cmbGeneroTutorOfendido"];
@$accion = $_POST["accion"];

$tutoresofendidosFacade = new TutoresofendidosFacade();
$tutoresofendidosDto = new TutoresofendidosDTO();

$tutoresofendidosDto->setIdTutorOfendido($idTutorOfendido);
$tutoresofendidosDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$tutoresofendidosDto->setCveTipoTutor($cveTipoTutor);
$tutoresofendidosDto->setProvDef($ProvDef);
$tutoresofendidosDto->setNombre($nombre);
$tutoresofendidosDto->setPaterno($paterno);
$tutoresofendidosDto->setMaterno($materno);
$tutoresofendidosDto->setFechaNacimiento($fechaNacimiento);
$tutoresofendidosDto->setEdad($edad);
$tutoresofendidosDto->setActivo($activo);
$tutoresofendidosDto->setFechaRegistro($fechaRegistro);
$tutoresofendidosDto->setFechaActualizacion($fechaActualizacion);
$tutoresofendidosDto->setCveGenero($cveGenero);

if (($accion == "guardar") && ($idTutorOfendido == "")) {
    $tutoresofendidosDto = $tutoresofendidosFacade->insertTutoresofendidos($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if (($accion == "guardar") && ($idTutorOfendido != "")) {
    $tutoresofendidosDto = $tutoresofendidosFacade->updateTutoresofendidos($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if ($accion == "consultar") {
    $tutoresofendidosDto = $tutoresofendidosFacade->selectTutoresofendidos($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if (($accion == "baja") && ($idTutorOfendido != "")) {
    $tutoresofendidosDto = $tutoresofendidosFacade->deleteTutoresofendidos($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if (($accion == "seleccionar") && ($idTutorOfendido != "")) {
    $tutoresofendidosDto = $tutoresofendidosFacade->selectTutoresofendidos($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if ($accion == "agregar" && $idTutorOfendido == "") {
    $tutoresofendidosDto = $tutoresofendidosFacade->agregarTutorOfendido($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if ($accion == "agregar" && $idTutorOfendido != "") {
    $tutoresofendidosDto = $tutoresofendidosFacade->modificarTutorOfendido($tutoresofendidosDto);
    echo $tutoresofendidosDto;
} else if ($accion == "eliminar" && $idTutorOfendido != "") {
    $tutoresofendidosDto = $tutoresofendidosFacade->eliminarTutorOfendido($tutoresofendidosDto);
    echo $tutoresofendidosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}