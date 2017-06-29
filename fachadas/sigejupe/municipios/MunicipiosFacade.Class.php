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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class MunicipiosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarMunicipios($MunicipiosDto) {
        $MunicipiosDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getcveMunicipio(), "utf8") : strtoupper($MunicipiosDto->getcveMunicipio()))))));
        if ($this->esFecha($MunicipiosDto->getcveMunicipio())) {
            $MunicipiosDto->setcveMunicipio($this->fechaMysql($MunicipiosDto->getcveMunicipio()));
        }
        $MunicipiosDto->setdesMunicipio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getdesMunicipio(), "utf8") : strtoupper($MunicipiosDto->getdesMunicipio()))))));
        if ($this->esFecha($MunicipiosDto->getdesMunicipio())) {
            $MunicipiosDto->setdesMunicipio($this->fechaMysql($MunicipiosDto->getdesMunicipio()));
        }
        $MunicipiosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getactivo(), "utf8") : strtoupper($MunicipiosDto->getactivo()))))));
        if ($this->esFecha($MunicipiosDto->getactivo())) {
            $MunicipiosDto->setactivo($this->fechaMysql($MunicipiosDto->getactivo()));
        }
        $MunicipiosDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getcveEstado(), "utf8") : strtoupper($MunicipiosDto->getcveEstado()))))));
        if ($this->esFecha($MunicipiosDto->getcveEstado())) {
            $MunicipiosDto->setcveEstado($this->fechaMysql($MunicipiosDto->getcveEstado()));
        }
        $MunicipiosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getfechaRegistro(), "utf8") : strtoupper($MunicipiosDto->getfechaRegistro()))))));
        if ($this->esFecha($MunicipiosDto->getfechaRegistro())) {
            $MunicipiosDto->setfechaRegistro($this->fechaMysql($MunicipiosDto->getfechaRegistro()));
        }
        $MunicipiosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($MunicipiosDto->getfechaActualizacion(), "utf8") : strtoupper($MunicipiosDto->getfechaActualizacion()))))));
        if ($this->esFecha($MunicipiosDto->getfechaActualizacion())) {
            $MunicipiosDto->setfechaActualizacion($this->fechaMysql($MunicipiosDto->getfechaActualizacion()));
        }
        return $MunicipiosDto;
    }

    public function selectMunicipios($MunicipiosDto) {
        $MunicipiosDto = $this->validarMunicipios($MunicipiosDto);
        $MunicipiosController = new MunicipiosController();
        $MunicipiosDto = $MunicipiosController->selectMunicipios($MunicipiosDto);
        if ($MunicipiosDto != "") {
            $dtoToJson = new DtoToJson($MunicipiosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return utf8_encode($jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR")));
    }

    public function insertMunicipios($MunicipiosDto) {
        $MunicipiosDto = $this->validarMunicipios($MunicipiosDto);
        $MunicipiosController = new MunicipiosController();
        $MunicipiosDto = $MunicipiosController->insertMunicipios($MunicipiosDto);
        if ($MunicipiosDto != "") {
            $dtoToJson = new DtoToJson($MunicipiosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateMunicipios($MunicipiosDto) {
        $MunicipiosDto = $this->validarMunicipios($MunicipiosDto);
        $MunicipiosController = new MunicipiosController();
        $MunicipiosDto = $MunicipiosController->updateMunicipios($MunicipiosDto);
        if ($MunicipiosDto != "") {
            $dtoToJson = new DtoToJson($MunicipiosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteMunicipios($MunicipiosDto) {
        $MunicipiosDto = $this->validarMunicipios($MunicipiosDto);
        $MunicipiosController = new MunicipiosController();
        $MunicipiosDto = $MunicipiosController->deleteMunicipios($MunicipiosDto);
        if ($MunicipiosDto == true) {
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

@$cveMunicipio = $_POST["cveMunicipio"];
@$desMunicipio = $_POST["desMunicipio"];
@$activo = $_POST["activo"];
@$cveEstado = $_POST["cveEstado"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$municipiosFacade = new MunicipiosFacade();
$municipiosDto = new MunicipiosDTO();

$municipiosDto->setCveMunicipio($cveMunicipio);
$municipiosDto->setDesMunicipio($desMunicipio);
$municipiosDto->setActivo($activo);
$municipiosDto->setCveEstado($cveEstado);
$municipiosDto->setFechaRegistro($fechaRegistro);
$municipiosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveMunicipio == "")) {
    $municipiosDto = $municipiosFacade->insertMunicipios($municipiosDto);
    echo $municipiosDto;
} else if (($accion == "guardar") && ($cveMunicipio != "")) {
    $municipiosDto = $municipiosFacade->updateMunicipios($municipiosDto);
    echo $municipiosDto;
} else if ($accion == "consultar") {
    $municipiosDto = $municipiosFacade->selectMunicipios($municipiosDto);
    echo $municipiosDto;
} else if (($accion == "baja") && ($cveMunicipio != "")) {
    $municipiosDto = $municipiosFacade->deleteMunicipios($municipiosDto);
    echo $municipiosDto;
} else if (($accion == "seleccionar") && ($cveMunicipio != "")) {
    $municipiosDto = $municipiosFacade->selectMunicipios($municipiosDto);
    echo $municipiosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>