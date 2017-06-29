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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/trataspersonas/TrataspersonasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TrataspersonasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto->setidTrataPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getidTrataPersona(), "utf8") : strtoupper($TrataspersonasDto->getidTrataPersona()))))));
        if ($this->esFecha($TrataspersonasDto->getidTrataPersona())) {
            $TrataspersonasDto->setidTrataPersona($this->fechaMysql($TrataspersonasDto->getidTrataPersona()));
        }
        $TrataspersonasDto->setcveEstadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveEstadoDestino(), "utf8") : strtoupper($TrataspersonasDto->getcveEstadoDestino()))))));
        if ($this->esFecha($TrataspersonasDto->getcveEstadoDestino())) {
            $TrataspersonasDto->setcveEstadoDestino($this->fechaMysql($TrataspersonasDto->getcveEstadoDestino()));
        }
        $TrataspersonasDto->setcveMunicipioDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveMunicipioDestino(), "utf8") : strtoupper($TrataspersonasDto->getcveMunicipioDestino()))))));
        if ($this->esFecha($TrataspersonasDto->getcveMunicipioDestino())) {
            $TrataspersonasDto->setcveMunicipioDestino($this->fechaMysql($TrataspersonasDto->getcveMunicipioDestino()));
        }
        $TrataspersonasDto->setcvePaisDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcvePaisDestino(), "utf8") : strtoupper($TrataspersonasDto->getcvePaisDestino()))))));
        if ($this->esFecha($TrataspersonasDto->getcvePaisDestino())) {
            $TrataspersonasDto->setcvePaisDestino($this->fechaMysql($TrataspersonasDto->getcvePaisDestino()));
        }
        $TrataspersonasDto->setestadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getestadoDestino(), "utf8") : strtoupper($TrataspersonasDto->getestadoDestino()))))));
        if ($this->esFecha($TrataspersonasDto->getestadoDestino())) {
            $TrataspersonasDto->setestadoDestino($this->fechaMysql($TrataspersonasDto->getestadoDestino()));
        }
        $TrataspersonasDto->setmunicipioDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getmunicipioDestino(), "utf8") : strtoupper($TrataspersonasDto->getmunicipioDestino()))))));
        if ($this->esFecha($TrataspersonasDto->getmunicipioDestino())) {
            $TrataspersonasDto->setmunicipioDestino($this->fechaMysql($TrataspersonasDto->getmunicipioDestino()));
        }
        $TrataspersonasDto->setcveEstadoOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveEstadoOrigen(), "utf8") : strtoupper($TrataspersonasDto->getcveEstadoOrigen()))))));
        if ($this->esFecha($TrataspersonasDto->getcveEstadoOrigen())) {
            $TrataspersonasDto->setcveEstadoOrigen($this->fechaMysql($TrataspersonasDto->getcveEstadoOrigen()));
        }
        $TrataspersonasDto->setcveMunicipioOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveMunicipioOrigen(), "utf8") : strtoupper($TrataspersonasDto->getcveMunicipioOrigen()))))));
        if ($this->esFecha($TrataspersonasDto->getcveMunicipioOrigen())) {
            $TrataspersonasDto->setcveMunicipioOrigen($this->fechaMysql($TrataspersonasDto->getcveMunicipioOrigen()));
        }
        $TrataspersonasDto->setcvePaisOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcvePaisOrigen(), "utf8") : strtoupper($TrataspersonasDto->getcvePaisOrigen()))))));
        if ($this->esFecha($TrataspersonasDto->getcvePaisOrigen())) {
            $TrataspersonasDto->setcvePaisOrigen($this->fechaMysql($TrataspersonasDto->getcvePaisOrigen()));
        }
        $TrataspersonasDto->setestadoOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getestadoOrigen(), "utf8") : strtoupper($TrataspersonasDto->getestadoOrigen()))))));
        if ($this->esFecha($TrataspersonasDto->getestadoOrigen())) {
            $TrataspersonasDto->setestadoOrigen($this->fechaMysql($TrataspersonasDto->getestadoOrigen()));
        }
        $TrataspersonasDto->setmunicipioOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getmunicipioOrigen(), "utf8") : strtoupper($TrataspersonasDto->getmunicipioOrigen()))))));
        if ($this->esFecha($TrataspersonasDto->getmunicipioOrigen())) {
            $TrataspersonasDto->setmunicipioOrigen($this->fechaMysql($TrataspersonasDto->getmunicipioOrigen()));
        }
        $TrataspersonasDto->setcveTipoTrata(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveTipoTrata(), "utf8") : strtoupper($TrataspersonasDto->getcveTipoTrata()))))));
        if ($this->esFecha($TrataspersonasDto->getcveTipoTrata())) {
            $TrataspersonasDto->setcveTipoTrata($this->fechaMysql($TrataspersonasDto->getcveTipoTrata()));
        }
        $TrataspersonasDto->setcveTrasportacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getcveTrasportacion(), "utf8") : strtoupper($TrataspersonasDto->getcveTrasportacion()))))));
        if ($this->esFecha($TrataspersonasDto->getcveTrasportacion())) {
            $TrataspersonasDto->setcveTrasportacion($this->fechaMysql($TrataspersonasDto->getcveTrasportacion()));
        }
        $TrataspersonasDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TrataspersonasDto->getidImpOfeDelSolicitud(), "utf8") : strtoupper($TrataspersonasDto->getidImpOfeDelSolicitud()))))));
        if ($this->esFecha($TrataspersonasDto->getidImpOfeDelSolicitud())) {
            $TrataspersonasDto->setidImpOfeDelSolicitud($this->fechaMysql($TrataspersonasDto->getidImpOfeDelSolicitud()));
        }
        return $TrataspersonasDto;
    }

    public function selectTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasController = new TrataspersonasController();
        $TrataspersonasDto = $TrataspersonasController->selectTrataspersonas($TrataspersonasDto);
        if ($TrataspersonasDto != "") {
            $dtoToJson = new DtoToJson($TrataspersonasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasController = new TrataspersonasController();
        $TrataspersonasDto = $TrataspersonasController->insertTrataspersonas($TrataspersonasDto);
        if ($TrataspersonasDto != "") {
            $dtoToJson = new DtoToJson($TrataspersonasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasController = new TrataspersonasController();
        $TrataspersonasDto = $TrataspersonasController->updateTrataspersonas($TrataspersonasDto);
        if ($TrataspersonasDto != "") {
            $dtoToJson = new DtoToJson($TrataspersonasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasController = new TrataspersonasController();
        $TrataspersonasDto = $TrataspersonasController->deleteTrataspersonas($TrataspersonasDto);
        if ($TrataspersonasDto == true) {
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

@$idTrataPersona = $_POST["idTrataPersona"];
@$cveEstadoDestino = $_POST["cveEstadoDestino"];
@$cveMunicipioDestino = $_POST["cveMunicipioDestino"];
@$cvePaisDestino = $_POST["cvePaisDestino"];
@$estadoDestino = $_POST["estadoDestino"];
@$municipioDestino = $_POST["municipioDestino"];
@$cveEstadoOrigen = $_POST["cveEstadoOrigen"];
@$cveMunicipioOrigen = $_POST["cveMunicipioOrigen"];
@$cvePaisOrigen = $_POST["cvePaisOrigen"];
@$estadoOrigen = $_POST["estadoOrigen"];
@$municipioOrigen = $_POST["municipioOrigen"];
@$cveTipoTrata = $_POST["cveTipoTrata"];
@$cveTrasportacion = $_POST["cveTrasportacion"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$accion = $_POST["accion"];

$trataspersonasFacade = new TrataspersonasFacade();
$trataspersonasDto = new TrataspersonasDTO();

$trataspersonasDto->setIdTrataPersona($idTrataPersona);
$trataspersonasDto->setCveEstadoDestino($cveEstadoDestino);
$trataspersonasDto->setCveMunicipioDestino($cveMunicipioDestino);
$trataspersonasDto->setCvePaisDestino($cvePaisDestino);
$trataspersonasDto->setEstadoDestino($estadoDestino);
$trataspersonasDto->setMunicipioDestino($municipioDestino);
$trataspersonasDto->setCveEstadoOrigen($cveEstadoOrigen);
$trataspersonasDto->setCveMunicipioOrigen($cveMunicipioOrigen);
$trataspersonasDto->setCvePaisOrigen($cvePaisOrigen);
$trataspersonasDto->setEstadoOrigen($estadoOrigen);
$trataspersonasDto->setMunicipioOrigen($municipioOrigen);
$trataspersonasDto->setCveTipoTrata($cveTipoTrata);
$trataspersonasDto->setCveTrasportacion($cveTrasportacion);
$trataspersonasDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);

if (($accion == "guardar") && ($idTrataPersona == "")) {
    $trataspersonasDto = $trataspersonasFacade->insertTrataspersonas($trataspersonasDto);
    echo $trataspersonasDto;
} else if (($accion == "guardar") && ($idTrataPersona != "")) {
    $trataspersonasDto = $trataspersonasFacade->updateTrataspersonas($trataspersonasDto);
    echo $trataspersonasDto;
} else if ($accion == "consultar") {
    $trataspersonasDto = $trataspersonasFacade->selectTrataspersonas($trataspersonasDto);
    echo $trataspersonasDto;
} else if (($accion == "baja") && ($idTrataPersona != "")) {
    $trataspersonasDto = $trataspersonasFacade->deleteTrataspersonas($trataspersonasDto);
    echo $trataspersonasDto;
} else if (($accion == "seleccionar") && ($idTrataPersona != "")) {
    $trataspersonasDto = $trataspersonasFacade->selectTrataspersonas($trataspersonasDto);
    echo $trataspersonasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>