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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposrelaciones/TiposrelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposrelaciones/TiposrelacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TiposrelacionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposrelaciones($TiposrelacionesDto) {
        $TiposrelacionesDto->setcveTipoRelacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getcveTipoRelacion(), "utf8") : strtoupper($TiposrelacionesDto->getcveTipoRelacion()))))));
        if ($this->esFecha($TiposrelacionesDto->getcveTipoRelacion())) {
            $TiposrelacionesDto->setcveTipoRelacion($this->fechaMysql($TiposrelacionesDto->getcveTipoRelacion()));
        }
        $TiposrelacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getcveTipoCarpeta(), "utf8") : strtoupper($TiposrelacionesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($TiposrelacionesDto->getcveTipoCarpeta())) {
            $TiposrelacionesDto->setcveTipoCarpeta($this->fechaMysql($TiposrelacionesDto->getcveTipoCarpeta()));
        }
        $TiposrelacionesDto->setdesTipoRelacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getdesTipoRelacion(), "utf8") : strtoupper($TiposrelacionesDto->getdesTipoRelacion()))))));
        if ($this->esFecha($TiposrelacionesDto->getdesTipoRelacion())) {
            $TiposrelacionesDto->setdesTipoRelacion($this->fechaMysql($TiposrelacionesDto->getdesTipoRelacion()));
        }
        $TiposrelacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getactivo(), "utf8") : strtoupper($TiposrelacionesDto->getactivo()))))));
        if ($this->esFecha($TiposrelacionesDto->getactivo())) {
            $TiposrelacionesDto->setactivo($this->fechaMysql($TiposrelacionesDto->getactivo()));
        }
        $TiposrelacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getfechaRegistro(), "utf8") : strtoupper($TiposrelacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($TiposrelacionesDto->getfechaRegistro())) {
            $TiposrelacionesDto->setfechaRegistro($this->fechaMysql($TiposrelacionesDto->getfechaRegistro()));
        }
        $TiposrelacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposrelacionesDto->getfechaActualizacion(), "utf8") : strtoupper($TiposrelacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($TiposrelacionesDto->getfechaActualizacion())) {
            $TiposrelacionesDto->setfechaActualizacion($this->fechaMysql($TiposrelacionesDto->getfechaActualizacion()));
        }
        return $TiposrelacionesDto;
    }

    public function selectTiposrelaciones($TiposrelacionesDto) {
        $TiposrelacionesDto = $this->validarTiposrelaciones($TiposrelacionesDto);
        $TiposrelacionesController = new TiposrelacionesController();
        $TiposrelacionesDto = $TiposrelacionesController->selectTiposrelaciones($TiposrelacionesDto);
        if ($TiposrelacionesDto != "") {
            $dtoToJson = new DtoToJson($TiposrelacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTiposrelaciones($TiposrelacionesDto) {
        $TiposrelacionesDto = $this->validarTiposrelaciones($TiposrelacionesDto);
        $TiposrelacionesController = new TiposrelacionesController();
        $TiposrelacionesDto = $TiposrelacionesController->insertTiposrelaciones($TiposrelacionesDto);
        if ($TiposrelacionesDto != "") {
            $dtoToJson = new DtoToJson($TiposrelacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTiposrelaciones($TiposrelacionesDto) {
        $TiposrelacionesDto = $this->validarTiposrelaciones($TiposrelacionesDto);
        $TiposrelacionesController = new TiposrelacionesController();
        $TiposrelacionesDto = $TiposrelacionesController->updateTiposrelaciones($TiposrelacionesDto);
        if ($TiposrelacionesDto != "") {
            $dtoToJson = new DtoToJson($TiposrelacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTiposrelaciones($TiposrelacionesDto) {
        $TiposrelacionesDto = $this->validarTiposrelaciones($TiposrelacionesDto);
        $TiposrelacionesController = new TiposrelacionesController();
        $TiposrelacionesDto = $TiposrelacionesController->deleteTiposrelaciones($TiposrelacionesDto);
        if ($TiposrelacionesDto == true) {
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

@$cveTipoRelacion = $_POST["cveTipoRelacion"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$desTipoRelacion = $_POST["desTipoRelacion"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$tiposrelacionesFacade = new TiposrelacionesFacade();
$tiposrelacionesDto = new TiposrelacionesDTO();

$tiposrelacionesDto->setCveTipoRelacion($cveTipoRelacion);
$tiposrelacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
$tiposrelacionesDto->setDesTipoRelacion($desTipoRelacion);
$tiposrelacionesDto->setActivo($activo);
$tiposrelacionesDto->setFechaRegistro($fechaRegistro);
$tiposrelacionesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveTipoRelacion == "")) {
    $tiposrelacionesDto = $tiposrelacionesFacade->insertTiposrelaciones($tiposrelacionesDto);
    echo $tiposrelacionesDto;
} else if (($accion == "guardar") && ($cveTipoRelacion != "")) {
    $tiposrelacionesDto = $tiposrelacionesFacade->updateTiposrelaciones($tiposrelacionesDto);
    echo $tiposrelacionesDto;
} else if ($accion == "consultar") {
    $tiposrelacionesDto = $tiposrelacionesFacade->selectTiposrelaciones($tiposrelacionesDto);
    echo $tiposrelacionesDto;
} else if (($accion == "baja") && ($cveTipoRelacion != "")) {
    $tiposrelacionesDto = $tiposrelacionesFacade->deleteTiposrelaciones($tiposrelacionesDto);
    echo $tiposrelacionesDto;
} else if (($accion == "seleccionar") && ($cveTipoRelacion != "")) {
    $tiposrelacionesDto = $tiposrelacionesFacade->selectTiposrelaciones($tiposrelacionesDto);
    echo $tiposrelacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>