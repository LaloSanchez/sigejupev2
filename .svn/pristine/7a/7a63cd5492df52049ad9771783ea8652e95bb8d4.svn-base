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

session_start();
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposestatusradicacion/TiposestatusradicacionDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposestatusradicacion/TiposestatusradicacionController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TiposestatusradicacionFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto->setcveTipoEstatusRadicacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposestatusradicacionDto->getcveTipoEstatusRadicacion(), "utf8") : strtoupper($TiposestatusradicacionDto->getcveTipoEstatusRadicacion()))))));
        if ($this->esFecha($TiposestatusradicacionDto->getcveTipoEstatusRadicacion())) {
            $TiposestatusradicacionDto->setcveTipoEstatusRadicacion($this->fechaMysql($TiposestatusradicacionDto->getcveTipoEstatusRadicacion()));
        }
        $TiposestatusradicacionDto->setdesTipoEstatusRadicacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposestatusradicacionDto->getdesTipoEstatusRadicacion(), "utf8") : strtoupper($TiposestatusradicacionDto->getdesTipoEstatusRadicacion()))))));
        if ($this->esFecha($TiposestatusradicacionDto->getdesTipoEstatusRadicacion())) {
            $TiposestatusradicacionDto->setdesTipoEstatusRadicacion($this->fechaMysql($TiposestatusradicacionDto->getdesTipoEstatusRadicacion()));
        }
        $TiposestatusradicacionDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposestatusradicacionDto->getactivo(), "utf8") : strtoupper($TiposestatusradicacionDto->getactivo()))))));
        if ($this->esFecha($TiposestatusradicacionDto->getactivo())) {
            $TiposestatusradicacionDto->setactivo($this->fechaMysql($TiposestatusradicacionDto->getactivo()));
        }
        $TiposestatusradicacionDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposestatusradicacionDto->getfechaRegistro(), "utf8") : strtoupper($TiposestatusradicacionDto->getfechaRegistro()))))));
        if ($this->esFecha($TiposestatusradicacionDto->getfechaRegistro())) {
            $TiposestatusradicacionDto->setfechaRegistro($this->fechaMysql($TiposestatusradicacionDto->getfechaRegistro()));
        }
        $TiposestatusradicacionDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposestatusradicacionDto->getfechaActualizacion(), "utf8") : strtoupper($TiposestatusradicacionDto->getfechaActualizacion()))))));
        if ($this->esFecha($TiposestatusradicacionDto->getfechaActualizacion())) {
            $TiposestatusradicacionDto->setfechaActualizacion($this->fechaMysql($TiposestatusradicacionDto->getfechaActualizacion()));
        }
        return $TiposestatusradicacionDto;
    }

    public function selectTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionController = new TiposestatusradicacionController();
        $TiposestatusradicacionDto = $TiposestatusradicacionController->selectTiposestatusradicacion($TiposestatusradicacionDto);
        if ($TiposestatusradicacionDto != "") {
            $dtoToJson = new DtoToJson($TiposestatusradicacionDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionController = new TiposestatusradicacionController();
        $TiposestatusradicacionDto = $TiposestatusradicacionController->insertTiposestatusradicacion($TiposestatusradicacionDto);
        if ($TiposestatusradicacionDto != "") {
            $dtoToJson = new DtoToJson($TiposestatusradicacionDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionController = new TiposestatusradicacionController();
        $TiposestatusradicacionDto = $TiposestatusradicacionController->updateTiposestatusradicacion($TiposestatusradicacionDto);
        if ($TiposestatusradicacionDto != "") {
            $dtoToJson = new DtoToJson($TiposestatusradicacionDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionController = new TiposestatusradicacionController();
        $TiposestatusradicacionDto = $TiposestatusradicacionController->deleteTiposestatusradicacion($TiposestatusradicacionDto);
        if ($TiposestatusradicacionDto == true) {
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

@$cveTipoEstatusRadicacion = $_POST["cveTipoEstatusRadicacion"];
@$desTipoEstatusRadicacion = $_POST["desTipoEstatusRadicacion"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$tiposestatusradicacionFacade = new TiposestatusradicacionFacade();
$tiposestatusradicacionDto = new TiposestatusradicacionDTO();

$tiposestatusradicacionDto->setCveTipoEstatusRadicacion($cveTipoEstatusRadicacion);
$tiposestatusradicacionDto->setDesTipoEstatusRadicacion($desTipoEstatusRadicacion);
$tiposestatusradicacionDto->setActivo($activo);
$tiposestatusradicacionDto->setFechaRegistro($fechaRegistro);
$tiposestatusradicacionDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveTipoEstatusRadicacion == "")) {
    $tiposestatusradicacionDto = $tiposestatusradicacionFacade->insertTiposestatusradicacion($tiposestatusradicacionDto);
    echo $tiposestatusradicacionDto;
} else if (($accion == "guardar") && ($cveTipoEstatusRadicacion != "")) {
    $tiposestatusradicacionDto = $tiposestatusradicacionFacade->updateTiposestatusradicacion($tiposestatusradicacionDto);
    echo $tiposestatusradicacionDto;
} else if ($accion == "consultar") {
    $tiposestatusradicacionDto = $tiposestatusradicacionFacade->selectTiposestatusradicacion($tiposestatusradicacionDto);
    echo $tiposestatusradicacionDto;
} else if (($accion == "baja") && ($cveTipoEstatusRadicacion != "")) {
    $tiposestatusradicacionDto = $tiposestatusradicacionFacade->deleteTiposestatusradicacion($tiposestatusradicacionDto);
    echo $tiposestatusradicacionDto;
} else if (($accion == "seleccionar") && ($cveTipoEstatusRadicacion != "")) {
    $tiposestatusradicacionDto = $tiposestatusradicacionFacade->selectTiposestatusradicacion($tiposestatusradicacionDto);
    echo $tiposestatusradicacionDto;
}
?>