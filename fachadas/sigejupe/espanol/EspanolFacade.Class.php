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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/espanol/EspanolDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/espanol/EspanolController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class EspanolFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarEspanol($EspanolDto) {
        $EspanolDto->setcveEspanol(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EspanolDto->getcveEspanol(), "utf8") : strtoupper($EspanolDto->getcveEspanol()))))));
        if ($this->esFecha($EspanolDto->getcveEspanol())) {
            $EspanolDto->setcveEspanol($this->fechaMysql($EspanolDto->getcveEspanol()));
        }
        $EspanolDto->setdesEspanol(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EspanolDto->getdesEspanol(), "utf8") : strtoupper($EspanolDto->getdesEspanol()))))));
        if ($this->esFecha($EspanolDto->getdesEspanol())) {
            $EspanolDto->setdesEspanol($this->fechaMysql($EspanolDto->getdesEspanol()));
        }
        $EspanolDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EspanolDto->getactivo(), "utf8") : strtoupper($EspanolDto->getactivo()))))));
        if ($this->esFecha($EspanolDto->getactivo())) {
            $EspanolDto->setactivo($this->fechaMysql($EspanolDto->getactivo()));
        }
        $EspanolDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EspanolDto->getfechaRegistro(), "utf8") : strtoupper($EspanolDto->getfechaRegistro()))))));
        if ($this->esFecha($EspanolDto->getfechaRegistro())) {
            $EspanolDto->setfechaRegistro($this->fechaMysql($EspanolDto->getfechaRegistro()));
        }
        $EspanolDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EspanolDto->getfechaActualizacion(), "utf8") : strtoupper($EspanolDto->getfechaActualizacion()))))));
        if ($this->esFecha($EspanolDto->getfechaActualizacion())) {
            $EspanolDto->setfechaActualizacion($this->fechaMysql($EspanolDto->getfechaActualizacion()));
        }
        return $EspanolDto;
    }

    public function selectEspanol($EspanolDto) {
        $EspanolDto = $this->validarEspanol($EspanolDto);
        $EspanolController = new EspanolController();
        $EspanolDto = $EspanolController->selectEspanol($EspanolDto);
        if ($EspanolDto != "") {
            $dtoToJson = new DtoToJson($EspanolDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return utf8_encode($jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR")));
    }

    public function insertEspanol($EspanolDto) {
        $EspanolDto = $this->validarEspanol($EspanolDto);
        $EspanolController = new EspanolController();
        $EspanolDto = $EspanolController->insertEspanol($EspanolDto);
        if ($EspanolDto != "") {
            $dtoToJson = new DtoToJson($EspanolDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateEspanol($EspanolDto) {
        $EspanolDto = $this->validarEspanol($EspanolDto);
        $EspanolController = new EspanolController();
        $EspanolDto = $EspanolController->updateEspanol($EspanolDto);
        if ($EspanolDto != "") {
            $dtoToJson = new DtoToJson($EspanolDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteEspanol($EspanolDto) {
        $EspanolDto = $this->validarEspanol($EspanolDto);
        $EspanolController = new EspanolController();
        $EspanolDto = $EspanolController->deleteEspanol($EspanolDto);
        if ($EspanolDto == true) {
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

@$cveEspanol = $_POST["cveEspanol"];
@$desEspanol = $_POST["desEspanol"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$espanolFacade = new EspanolFacade();
$espanolDto = new EspanolDTO();

$espanolDto->setCveEspanol($cveEspanol);
$espanolDto->setDesEspanol($desEspanol);
$espanolDto->setActivo($activo);
$espanolDto->setFechaRegistro($fechaRegistro);
$espanolDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveEspanol == "")) {
    $espanolDto = $espanolFacade->insertEspanol($espanolDto);
    echo $espanolDto;
} else if (($accion == "guardar") && ($cveEspanol != "")) {
    $espanolDto = $espanolFacade->updateEspanol($espanolDto);
    echo $espanolDto;
} else if ($accion == "consultar") {
    $espanolDto = $espanolFacade->selectEspanol($espanolDto);
    echo utf8_encode($espanolDto);
} else if (($accion == "baja") && ($cveEspanol != "")) {
    $espanolDto = $espanolFacade->deleteEspanol($espanolDto);
    echo $espanolDto;
} else if (($accion == "seleccionar") && ($cveEspanol != "")) {
    $espanolDto = $espanolFacade->selectEspanol($espanolDto);
    echo $espanolDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>