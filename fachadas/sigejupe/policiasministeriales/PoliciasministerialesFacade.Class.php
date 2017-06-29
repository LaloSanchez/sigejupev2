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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/policiasministeriales/PoliciasministerialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/policiasministeriales/PoliciasministerialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class PoliciasministerialesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarPoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto->setidPoliciaMinisterial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getidPoliciaMinisterial(), "utf8") : strtoupper($PoliciasministerialesDto->getidPoliciaMinisterial()))))));
        if ($this->esFecha($PoliciasministerialesDto->getidPoliciaMinisterial())) {
            $PoliciasministerialesDto->setidPoliciaMinisterial($this->fechaMysql($PoliciasministerialesDto->getidPoliciaMinisterial()));
        }
        $PoliciasministerialesDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getidIngresoCereso(), "utf8") : strtoupper($PoliciasministerialesDto->getidIngresoCereso()))))));
        if ($this->esFecha($PoliciasministerialesDto->getidIngresoCereso())) {
            $PoliciasministerialesDto->setidIngresoCereso($this->fechaMysql($PoliciasministerialesDto->getidIngresoCereso()));
        }
        $PoliciasministerialesDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getnombre(), "utf8") : strtoupper($PoliciasministerialesDto->getnombre()))))));
        if ($this->esFecha($PoliciasministerialesDto->getnombre())) {
            $PoliciasministerialesDto->setnombre($this->fechaMysql($PoliciasministerialesDto->getnombre()));
        }
        $PoliciasministerialesDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getpaterno(), "utf8") : strtoupper($PoliciasministerialesDto->getpaterno()))))));
        if ($this->esFecha($PoliciasministerialesDto->getpaterno())) {
            $PoliciasministerialesDto->setpaterno($this->fechaMysql($PoliciasministerialesDto->getpaterno()));
        }
        $PoliciasministerialesDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getmaterno(), "utf8") : strtoupper($PoliciasministerialesDto->getmaterno()))))));
        if ($this->esFecha($PoliciasministerialesDto->getmaterno())) {
            $PoliciasministerialesDto->setmaterno($this->fechaMysql($PoliciasministerialesDto->getmaterno()));
        }
        $PoliciasministerialesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getactivo(), "utf8") : strtoupper($PoliciasministerialesDto->getactivo()))))));
        if ($this->esFecha($PoliciasministerialesDto->getactivo())) {
            $PoliciasministerialesDto->setactivo($this->fechaMysql($PoliciasministerialesDto->getactivo()));
        }
        $PoliciasministerialesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getfechaRegistro(), "utf8") : strtoupper($PoliciasministerialesDto->getfechaRegistro()))))));
        if ($this->esFecha($PoliciasministerialesDto->getfechaRegistro())) {
            $PoliciasministerialesDto->setfechaRegistro($this->fechaMysql($PoliciasministerialesDto->getfechaRegistro()));
        }
        $PoliciasministerialesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getfechaActualizacion(), "utf8") : strtoupper($PoliciasministerialesDto->getfechaActualizacion()))))));
        if ($this->esFecha($PoliciasministerialesDto->getfechaActualizacion())) {
            $PoliciasministerialesDto->setfechaActualizacion($this->fechaMysql($PoliciasministerialesDto->getfechaActualizacion()));
        }
        return $PoliciasministerialesDto;
    }

    public function selectPoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto = $this->validarPoliciasministeriales($PoliciasministerialesDto);
        $PoliciasministerialesController = new PoliciasministerialesController();
        $PoliciasministerialesDto = $PoliciasministerialesController->selectPoliciasministeriales($PoliciasministerialesDto);
        if ($PoliciasministerialesDto != "") {
            $dtoToJson = new DtoToJson($PoliciasministerialesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertPoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto = $this->validarPoliciasministeriales($PoliciasministerialesDto);
        $PoliciasministerialesController = new PoliciasministerialesController();
        $PoliciasministerialesDto = $PoliciasministerialesController->insertPoliciasministeriales($PoliciasministerialesDto);
        if ($PoliciasministerialesDto != "") {
            $dtoToJson = new DtoToJson($PoliciasministerialesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updatePoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto = $this->validarPoliciasministeriales($PoliciasministerialesDto);
        $PoliciasministerialesController = new PoliciasministerialesController();
        $PoliciasministerialesDto = $PoliciasministerialesController->updatePoliciasministeriales($PoliciasministerialesDto);
        if ($PoliciasministerialesDto != "") {
            $dtoToJson = new DtoToJson($PoliciasministerialesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deletePoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto = $this->validarPoliciasministeriales($PoliciasministerialesDto);
        $PoliciasministerialesController = new PoliciasministerialesController();
        $PoliciasministerialesDto = $PoliciasministerialesController->deletePoliciasministeriales($PoliciasministerialesDto);
        if ($PoliciasministerialesDto == true) {
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

@$idPoliciaMinisterial = $_POST["idPoliciaMinisterial"];
@$idIngresoCereso = $_POST["idIngresoCereso"];
@$nombre = $_POST["nombre"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveAdscripcionMP = $_POST["cveAdscripcionMP"];
@$accion = $_POST["accion"];

$policiasministerialesFacade = new PoliciasministerialesFacade();
$policiasministerialesDto = new PoliciasministerialesDTO();

$policiasministerialesDto->setIdPoliciaMinisterial($idPoliciaMinisterial);
$policiasministerialesDto->setIdIngresoCereso($idIngresoCereso);
$policiasministerialesDto->setNombre($nombre);
$policiasministerialesDto->setPaterno($paterno);
$policiasministerialesDto->setMaterno($materno);
$policiasministerialesDto->setActivo($activo);
$policiasministerialesDto->setFechaRegistro($fechaRegistro);
$policiasministerialesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idPoliciaMinisterial == "")) {
    $policiasministerialesDto = $policiasministerialesFacade->insertPoliciasministeriales($policiasministerialesDto);
    echo $policiasministerialesDto;
} else if (($accion == "guardar") && ($idPoliciaMinisterial != "")) {
    $policiasministerialesDto = $policiasministerialesFacade->updatePoliciasministeriales($policiasministerialesDto);
    echo $policiasministerialesDto;
} else if ($accion == "consultar") {
    $policiasministerialesDto = $policiasministerialesFacade->selectPoliciasministeriales($policiasministerialesDto);
    echo $policiasministerialesDto;
} else if (($accion == "baja") && ($idPoliciaMinisterial != "")) {
    $policiasministerialesDto = $policiasministerialesFacade->deletePoliciasministeriales($policiasministerialesDto);
    echo $policiasministerialesDto;
} else if (($accion == "seleccionar") && ($idPoliciaMinisterial != "")) {
    $policiasministerialesDto = $policiasministerialesFacade->selectPoliciasministeriales($policiasministerialesDto);
    echo $policiasministerialesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>