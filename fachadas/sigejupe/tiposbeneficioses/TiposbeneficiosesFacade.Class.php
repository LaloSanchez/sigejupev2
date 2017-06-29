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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposbeneficioses/TiposbeneficiosesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposbeneficioses/TiposbeneficiosesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TiposbeneficiosesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto->setcveTipoBeneficioES(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposbeneficiosesDto->getcveTipoBeneficioES(), "utf8") : strtoupper($TiposbeneficiosesDto->getcveTipoBeneficioES()))))));
        if ($this->esFecha($TiposbeneficiosesDto->getcveTipoBeneficioES())) {
            $TiposbeneficiosesDto->setcveTipoBeneficioES($this->fechaMysql($TiposbeneficiosesDto->getcveTipoBeneficioES()));
        }
        $TiposbeneficiosesDto->setdesTipoBeneficioES(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposbeneficiosesDto->getdesTipoBeneficioES(), "utf8") : strtoupper($TiposbeneficiosesDto->getdesTipoBeneficioES()))))));
        if ($this->esFecha($TiposbeneficiosesDto->getdesTipoBeneficioES())) {
            $TiposbeneficiosesDto->setdesTipoBeneficioES($this->fechaMysql($TiposbeneficiosesDto->getdesTipoBeneficioES()));
        }
        $TiposbeneficiosesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposbeneficiosesDto->getactivo(), "utf8") : strtoupper($TiposbeneficiosesDto->getactivo()))))));
        if ($this->esFecha($TiposbeneficiosesDto->getactivo())) {
            $TiposbeneficiosesDto->setactivo($this->fechaMysql($TiposbeneficiosesDto->getactivo()));
        }
        $TiposbeneficiosesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposbeneficiosesDto->getfechaRegistro(), "utf8") : strtoupper($TiposbeneficiosesDto->getfechaRegistro()))))));
        if ($this->esFecha($TiposbeneficiosesDto->getfechaRegistro())) {
            $TiposbeneficiosesDto->setfechaRegistro($this->fechaMysql($TiposbeneficiosesDto->getfechaRegistro()));
        }
        $TiposbeneficiosesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposbeneficiosesDto->getfechaActualizacion(), "utf8") : strtoupper($TiposbeneficiosesDto->getfechaActualizacion()))))));
        if ($this->esFecha($TiposbeneficiosesDto->getfechaActualizacion())) {
            $TiposbeneficiosesDto->setfechaActualizacion($this->fechaMysql($TiposbeneficiosesDto->getfechaActualizacion()));
        }
        return $TiposbeneficiosesDto;
    }

    public function selectTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesController = new TiposbeneficiosesController();
        $TiposbeneficiosesDto = $TiposbeneficiosesController->selectTiposbeneficioses($TiposbeneficiosesDto);
        if ($TiposbeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($TiposbeneficiosesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesController = new TiposbeneficiosesController();
        $TiposbeneficiosesDto = $TiposbeneficiosesController->insertTiposbeneficioses($TiposbeneficiosesDto);
        if ($TiposbeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($TiposbeneficiosesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesController = new TiposbeneficiosesController();
        $TiposbeneficiosesDto = $TiposbeneficiosesController->updateTiposbeneficioses($TiposbeneficiosesDto);
        if ($TiposbeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($TiposbeneficiosesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesController = new TiposbeneficiosesController();
        $TiposbeneficiosesDto = $TiposbeneficiosesController->deleteTiposbeneficioses($TiposbeneficiosesDto);
        if ($TiposbeneficiosesDto == true) {
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
    
    public function selectTiposbeneficiosesActivos($TiposbeneficiosesDto){
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesController = new TiposbeneficiosesController();
        $TiposbeneficiosesDto = $TiposbeneficiosesController->selectTiposBeneficiosActivos($TiposbeneficiosesDto);
        return json_encode($TiposbeneficiosesDto);
    }

}

@$cveTipoBeneficioES = $_POST["cveTipoBeneficioES"];
@$desTipoBeneficioES = $_POST["desTipoBeneficioES"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$tiposbeneficiosesFacade = new TiposbeneficiosesFacade();
$tiposbeneficiosesDto = new TiposbeneficiosesDTO();

$tiposbeneficiosesDto->setCveTipoBeneficioES($cveTipoBeneficioES);
$tiposbeneficiosesDto->setDesTipoBeneficioES($desTipoBeneficioES);
$tiposbeneficiosesDto->setActivo($activo);
$tiposbeneficiosesDto->setFechaRegistro($fechaRegistro);
$tiposbeneficiosesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveTipoBeneficioES == "")) {
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->insertTiposbeneficioses($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
} else if (($accion == "guardar") && ($cveTipoBeneficioES != "")) {
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->updateTiposbeneficioses($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
} else if ($accion == "consultar") {
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->selectTiposbeneficioses($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
} else if (($accion == "baja") && ($cveTipoBeneficioES != "")) {
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->deleteTiposbeneficioses($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
} else if (($accion == "seleccionar") && ($cveTipoBeneficioES != "")) {
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->selectTiposbeneficioses($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
} else if ($accion=="consultaTiposBeneficiosActivos"){
    $tiposbeneficiosesDto = $tiposbeneficiosesFacade->selectTiposbeneficiosesActivos($tiposbeneficiosesDto);
    echo $tiposbeneficiosesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>