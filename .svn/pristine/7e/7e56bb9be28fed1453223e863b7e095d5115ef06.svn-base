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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesfirmadas/ActuacionesfirmadasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesfirmadas/ActuacionesfirmadasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ActuacionesfirmadasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarActuacionesfirmadas($ActuacionesfirmadasDto) {
        $ActuacionesfirmadasDto->setidActuacionFirmada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getidActuacionFirmada(), "utf8") : strtoupper($ActuacionesfirmadasDto->getidActuacionFirmada()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getidActuacionFirmada())) {
            $ActuacionesfirmadasDto->setidActuacionFirmada($this->fechaMysql($ActuacionesfirmadasDto->getidActuacionFirmada()));
        }
        $ActuacionesfirmadasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getidReferencia(), "utf8") : strtoupper($ActuacionesfirmadasDto->getidReferencia()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getidReferencia())) {
            $ActuacionesfirmadasDto->setidReferencia($this->fechaMysql($ActuacionesfirmadasDto->getidReferencia()));
        }
        $ActuacionesfirmadasDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getcveTipoActuacion(), "utf8") : strtoupper($ActuacionesfirmadasDto->getcveTipoActuacion()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getcveTipoActuacion())) {
            $ActuacionesfirmadasDto->setcveTipoActuacion($this->fechaMysql($ActuacionesfirmadasDto->getcveTipoActuacion()));
        }
        $ActuacionesfirmadasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getcveTipoCarpeta(), "utf8") : strtoupper($ActuacionesfirmadasDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getcveTipoCarpeta())) {
            $ActuacionesfirmadasDto->setcveTipoCarpeta($this->fechaMysql($ActuacionesfirmadasDto->getcveTipoCarpeta()));
        }
        $ActuacionesfirmadasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getcveUsuario(), "utf8") : strtoupper($ActuacionesfirmadasDto->getcveUsuario()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getcveUsuario())) {
            $ActuacionesfirmadasDto->setcveUsuario($this->fechaMysql($ActuacionesfirmadasDto->getcveUsuario()));
        }
        $ActuacionesfirmadasDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getcveGrupo(), "utf8") : strtoupper($ActuacionesfirmadasDto->getcveGrupo()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getcveGrupo())) {
            $ActuacionesfirmadasDto->setcveGrupo($this->fechaMysql($ActuacionesfirmadasDto->getcveGrupo()));
        }
        $ActuacionesfirmadasDto->setfileNameFirma(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getfileNameFirma(), "utf8") : strtoupper($ActuacionesfirmadasDto->getfileNameFirma()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getfileNameFirma())) {
            $ActuacionesfirmadasDto->setfileNameFirma($this->fechaMysql($ActuacionesfirmadasDto->getfileNameFirma()));
        }
        $ActuacionesfirmadasDto->settransferenciaFirma(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->gettransferenciaFirma(), "utf8") : strtoupper($ActuacionesfirmadasDto->gettransferenciaFirma()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->gettransferenciaFirma())) {
            $ActuacionesfirmadasDto->settransferenciaFirma($this->fechaMysql($ActuacionesfirmadasDto->gettransferenciaFirma()));
        }
        $ActuacionesfirmadasDto->settokenFirma(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->gettokenFirma(), "utf8") : strtoupper($ActuacionesfirmadasDto->gettokenFirma()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->gettokenFirma())) {
            $ActuacionesfirmadasDto->settokenFirma($this->fechaMysql($ActuacionesfirmadasDto->gettokenFirma()));
        }
        $ActuacionesfirmadasDto->setidRegistroFirma(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getidRegistroFirma(), "utf8") : strtoupper($ActuacionesfirmadasDto->getidRegistroFirma()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getidRegistroFirma())) {
            $ActuacionesfirmadasDto->setidRegistroFirma($this->fechaMysql($ActuacionesfirmadasDto->getidRegistroFirma()));
        }
        $ActuacionesfirmadasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getactivo(), "utf8") : strtoupper($ActuacionesfirmadasDto->getactivo()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getactivo())) {
            $ActuacionesfirmadasDto->setactivo($this->fechaMysql($ActuacionesfirmadasDto->getactivo()));
        }
        $ActuacionesfirmadasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getfechaActualizacion(), "utf8") : strtoupper($ActuacionesfirmadasDto->getfechaActualizacion()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getfechaActualizacion())) {
            $ActuacionesfirmadasDto->setfechaActualizacion($this->fechaMysql($ActuacionesfirmadasDto->getfechaActualizacion()));
        }
        $ActuacionesfirmadasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesfirmadasDto->getfechaRegistro(), "utf8") : strtoupper($ActuacionesfirmadasDto->getfechaRegistro()))))));
        if ($this->esFecha($ActuacionesfirmadasDto->getfechaRegistro())) {
            $ActuacionesfirmadasDto->setfechaRegistro($this->fechaMysql($ActuacionesfirmadasDto->getfechaRegistro()));
        }
        return $ActuacionesfirmadasDto;
    }

    public function selectActuacionesfirmadas($ActuacionesfirmadasDto) {
        $ActuacionesfirmadasDto = $this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
        $ActuacionesfirmadasController = new ActuacionesfirmadasController();
        $ActuacionesfirmadasDto = $ActuacionesfirmadasController->selectActuacionesfirmadas($ActuacionesfirmadasDto);
        if ($ActuacionesfirmadasDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesfirmadasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertActuacionesfirmadas($ActuacionesfirmadasDto) {
        $ActuacionesfirmadasDto = $this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
        $ActuacionesfirmadasController = new ActuacionesfirmadasController();
        $ActuacionesfirmadasDto = $ActuacionesfirmadasController->insertActuacionesfirmadas($ActuacionesfirmadasDto);
        if ($ActuacionesfirmadasDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesfirmadasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateActuacionesfirmadas($ActuacionesfirmadasDto) {
        $ActuacionesfirmadasDto = $this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
        $ActuacionesfirmadasController = new ActuacionesfirmadasController();
        $ActuacionesfirmadasDto = $ActuacionesfirmadasController->updateActuacionesfirmadas($ActuacionesfirmadasDto);
        if ($ActuacionesfirmadasDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesfirmadasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteActuacionesfirmadas($ActuacionesfirmadasDto) {
        $ActuacionesfirmadasDto = $this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
        $ActuacionesfirmadasController = new ActuacionesfirmadasController();
        $ActuacionesfirmadasDto = $ActuacionesfirmadasController->deleteActuacionesfirmadas($ActuacionesfirmadasDto);
        if ($ActuacionesfirmadasDto == true) {
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
@$idActuacionFirmada = $_POST["idActuacionFirmada"];
@$idReferencia = $_POST["idReferencia"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
if (isset($_POST["cveUsuarioSistema"])) {
    @$cveUsuario = $_POST["cveUsuarioSistema"];
} else {
    @$cveUsuario = $_SESSION["cveUsuarioSistema"];
}
if (isset($_POST["cveGrupo"])) {
    @$cveGrupo = $_POST["cveGrupo"];
} else {
    @$cveGrupo = $_SESSION["cveGrupo"];
}
@$fileNameFirma = $_POST["fileNameFirma"];
@$transferenciaFirma = $_POST["transferenciaFirma"];
@$tokenFirma = $_POST["tokenFirma"];
@$idRegistroFirma = $_POST["idRegistroFirma"];
@$activo = $_POST["activo"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$accion = $_POST["accion"];

$actuacionesfirmadasFacade = new ActuacionesfirmadasFacade();
$actuacionesfirmadasDto = new ActuacionesfirmadasDTO();

$actuacionesfirmadasDto->setIdActuacionFirmada($idActuacionFirmada);
$actuacionesfirmadasDto->setIdReferencia($idReferencia);
$actuacionesfirmadasDto->setCveTipoActuacion($cveTipoActuacion);
$actuacionesfirmadasDto->setCveTipoCarpeta($cveTipoCarpeta);
$actuacionesfirmadasDto->setCveUsuario($cveUsuario);
$actuacionesfirmadasDto->setCveGrupo($cveGrupo);
$actuacionesfirmadasDto->setFileNameFirma($fileNameFirma);
$actuacionesfirmadasDto->setTransferenciaFirma($transferenciaFirma);
$actuacionesfirmadasDto->setTokenFirma($tokenFirma);
$actuacionesfirmadasDto->setIdRegistroFirma($idRegistroFirma);
$actuacionesfirmadasDto->setActivo($activo);
$actuacionesfirmadasDto->setFechaActualizacion($fechaActualizacion);
$actuacionesfirmadasDto->setFechaRegistro($fechaRegistro);

if (($accion == "guardar") && ($idActuacionFirmada == "")) {
    $actuacionesfirmadasDto = $actuacionesfirmadasFacade->insertActuacionesfirmadas($actuacionesfirmadasDto);
    echo $actuacionesfirmadasDto;
} else if (($accion == "guardar") && ($idActuacionFirmada != "")) {
    $actuacionesfirmadasDto = $actuacionesfirmadasFacade->updateActuacionesfirmadas($actuacionesfirmadasDto);
    echo $actuacionesfirmadasDto;
} else if ($accion == "consultar") {
    $actuacionesfirmadasDto = $actuacionesfirmadasFacade->selectActuacionesfirmadas($actuacionesfirmadasDto);
    echo $actuacionesfirmadasDto;
} else if (($accion == "baja") && ($idActuacionFirmada != "")) {
    $actuacionesfirmadasDto = $actuacionesfirmadasFacade->deleteActuacionesfirmadas($actuacionesfirmadasDto);
    echo $actuacionesfirmadasDto;
} else if (($accion == "seleccionar") && ($idActuacionFirmada != "")) {
    $actuacionesfirmadasDto = $actuacionesfirmadasFacade->selectActuacionesfirmadas($actuacionesfirmadasDto);
    echo $actuacionesfirmadasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>