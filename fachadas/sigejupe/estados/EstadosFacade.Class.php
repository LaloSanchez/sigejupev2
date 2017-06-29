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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class EstadosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarEstados($EstadosDto) {
        $EstadosDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getcveEstado(), "utf8") : strtoupper($EstadosDto->getcveEstado()))))));
        if ($this->esFecha($EstadosDto->getcveEstado())) {
            $EstadosDto->setcveEstado($this->fechaMysql($EstadosDto->getcveEstado()));
        }
        $EstadosDto->setdesEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getdesEstado(), "utf8") : strtoupper($EstadosDto->getdesEstado()))))));
        if ($this->esFecha($EstadosDto->getdesEstado())) {
            $EstadosDto->setdesEstado($this->fechaMysql($EstadosDto->getdesEstado()));
        }
        $EstadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getactivo(), "utf8") : strtoupper($EstadosDto->getactivo()))))));
        if ($this->esFecha($EstadosDto->getactivo())) {
            $EstadosDto->setactivo($this->fechaMysql($EstadosDto->getactivo()));
        }
        $EstadosDto->setcvePais(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getcvePais(), "utf8") : strtoupper($EstadosDto->getcvePais()))))));
        if ($this->esFecha($EstadosDto->getcvePais())) {
            $EstadosDto->setcvePais($this->fechaMysql($EstadosDto->getcvePais()));
        }
        $EstadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getfechaRegistro(), "utf8") : strtoupper($EstadosDto->getfechaRegistro()))))));
        if ($this->esFecha($EstadosDto->getfechaRegistro())) {
            $EstadosDto->setfechaRegistro($this->fechaMysql($EstadosDto->getfechaRegistro()));
        }
        $EstadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadosDto->getfechaActualizacion(), "utf8") : strtoupper($EstadosDto->getfechaActualizacion()))))));
        if ($this->esFecha($EstadosDto->getfechaActualizacion())) {
            $EstadosDto->setfechaActualizacion($this->fechaMysql($EstadosDto->getfechaActualizacion()));
        }
        return $EstadosDto;
    }

    public function selectEstados($EstadosDto) {
        $EstadosDto = $this->validarEstados($EstadosDto);
        $EstadosController = new EstadosController();
        $EstadosDto = $EstadosController->selectEstados($EstadosDto);
        if ($EstadosDto != "") {
            $dtoToJson = new DtoToJson($EstadosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return utf8_encode($jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR")));
    }

    public function insertEstados($EstadosDto) {
        $EstadosDto = $this->validarEstados($EstadosDto);
        $EstadosController = new EstadosController();
        $EstadosDto = $EstadosController->insertEstados($EstadosDto);
        if ($EstadosDto != "") {
            $dtoToJson = new DtoToJson($EstadosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateEstados($EstadosDto) {
        $EstadosDto = $this->validarEstados($EstadosDto);
        $EstadosController = new EstadosController();
        $EstadosDto = $EstadosController->updateEstados($EstadosDto);
        if ($EstadosDto != "") {
            $dtoToJson = new DtoToJson($EstadosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteEstados($EstadosDto) {
        $EstadosDto = $this->validarEstados($EstadosDto);
        $EstadosController = new EstadosController();
        $EstadosDto = $EstadosController->deleteEstados($EstadosDto);
        if ($EstadosDto == true) {
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

@$cveEstado = $_POST["cveEstado"];
@$desEstado = $_POST["desEstado"];
@$activo = $_POST["activo"];
@$cvePais = $_POST["cvePais"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$estadosFacade = new EstadosFacade();
$estadosDto = new EstadosDTO();

$estadosDto->setCveEstado($cveEstado);
$estadosDto->setDesEstado($desEstado);
$estadosDto->setActivo($activo);
$estadosDto->setCvePais($cvePais);
$estadosDto->setFechaRegistro($fechaRegistro);
$estadosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveEstado == "")) {
    $estadosDto = $estadosFacade->insertEstados($estadosDto);
    echo $estadosDto;
} else if (($accion == "guardar") && ($cveEstado != "")) {
    $estadosDto = $estadosFacade->updateEstados($estadosDto);
    echo $estadosDto;
} else if ($accion == "consultar") {
    $estadosDto = $estadosFacade->selectEstados($estadosDto);
    echo $estadosDto;
} else if (($accion == "baja") && ($cveEstado != "")) {
    $estadosDto = $estadosFacade->deleteEstados($estadosDto);
    echo $estadosDto;
} else if (($accion == "seleccionar") && ($cveEstado != "")) {
    $estadosDto = $estadosFacade->selectEstados($estadosDto);
    echo $estadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>