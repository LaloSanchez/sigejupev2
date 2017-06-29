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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/factoresculturales/FactoresculturalesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/factoresculturales/FactoresculturalesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class FactoresculturalesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarFactoresculturales($FactoresculturalesDto) {
            $FactoresculturalesDto->setcveFactorCultural(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FactoresculturalesDto->getcveFactorCultural(), "utf8") : strtoupper($FactoresculturalesDto->getcveFactorCultural()))))));
            if ($this->esFecha($FactoresculturalesDto->getcveFactorCultural())) {
                $FactoresculturalesDto->setcveFactorCultural($this->fechaMysql($FactoresculturalesDto->getcveFactorCultural()));
            }
            $FactoresculturalesDto->setdesFactorCultural(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FactoresculturalesDto->getdesFactorCultural(), "utf8") : strtoupper($FactoresculturalesDto->getdesFactorCultural()))))));
            if ($this->esFecha($FactoresculturalesDto->getdesFactorCultural())) {
                $FactoresculturalesDto->setdesFactorCultural($this->fechaMysql($FactoresculturalesDto->getdesFactorCultural()));
            }
            $FactoresculturalesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FactoresculturalesDto->getactivo(), "utf8") : strtoupper($FactoresculturalesDto->getactivo()))))));
            if ($this->esFecha($FactoresculturalesDto->getactivo())) {
                $FactoresculturalesDto->setactivo($this->fechaMysql($FactoresculturalesDto->getactivo()));
            }
            $FactoresculturalesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FactoresculturalesDto->getfechaRegistro(), "utf8") : strtoupper($FactoresculturalesDto->getfechaRegistro()))))));
            if ($this->esFecha($FactoresculturalesDto->getfechaRegistro())) {
                $FactoresculturalesDto->setfechaRegistro($this->fechaMysql($FactoresculturalesDto->getfechaRegistro()));
            }
            $FactoresculturalesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FactoresculturalesDto->getfechaActualizacion(), "utf8") : strtoupper($FactoresculturalesDto->getfechaActualizacion()))))));
            if ($this->esFecha($FactoresculturalesDto->getfechaActualizacion())) {
                $FactoresculturalesDto->setfechaActualizacion($this->fechaMysql($FactoresculturalesDto->getfechaActualizacion()));
            }
            return $FactoresculturalesDto;
        }

        public function selectFactoresculturales($FactoresculturalesDto) {
            $FactoresculturalesDto = $this->validarFactoresculturales($FactoresculturalesDto);
            $FactoresculturalesController = new FactoresculturalesController();
            $FactoresculturalesDto = $FactoresculturalesController->selectFactoresculturales($FactoresculturalesDto);
            if ($FactoresculturalesDto != "") {
                $dtoToJson = new DtoToJson($FactoresculturalesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertFactoresculturales($FactoresculturalesDto) {
            $FactoresculturalesDto = $this->validarFactoresculturales($FactoresculturalesDto);
            $FactoresculturalesController = new FactoresculturalesController();
            $FactoresculturalesDto = $FactoresculturalesController->insertFactoresculturales($FactoresculturalesDto);
            if ($FactoresculturalesDto != "") {
                $dtoToJson = new DtoToJson($FactoresculturalesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateFactoresculturales($FactoresculturalesDto) {
            $FactoresculturalesDto = $this->validarFactoresculturales($FactoresculturalesDto);
            $FactoresculturalesController = new FactoresculturalesController();
            $FactoresculturalesDto = $FactoresculturalesController->updateFactoresculturales($FactoresculturalesDto);
            if ($FactoresculturalesDto != "") {
                $dtoToJson = new DtoToJson($FactoresculturalesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteFactoresculturales($FactoresculturalesDto) {
            $FactoresculturalesDto = $this->validarFactoresculturales($FactoresculturalesDto);
            $FactoresculturalesController = new FactoresculturalesController();
            $FactoresculturalesDto = $FactoresculturalesController->deleteFactoresculturales($FactoresculturalesDto);
            if ($FactoresculturalesDto == true) {
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

    @$cveFactorCultural = $_POST["cveFactorCultural"];
    @$desFactorCultural = $_POST["desFactorCultural"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $factoresculturalesFacade = new FactoresculturalesFacade();
    $factoresculturalesDto = new FactoresculturalesDTO();

    $factoresculturalesDto->setCveFactorCultural($cveFactorCultural);
    $factoresculturalesDto->setDesFactorCultural($desFactorCultural);
    $factoresculturalesDto->setActivo($activo);
    $factoresculturalesDto->setFechaRegistro($fechaRegistro);
    $factoresculturalesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveFactorCultural == "")) {
        $factoresculturalesDto = $factoresculturalesFacade->insertFactoresculturales($factoresculturalesDto);
        echo $factoresculturalesDto;
    } else if (($accion == "guardar") && ($cveFactorCultural != "")) {
        $factoresculturalesDto = $factoresculturalesFacade->updateFactoresculturales($factoresculturalesDto);
        echo $factoresculturalesDto;
    } else if ($accion == "consultar") {
        $factoresculturalesDto = $factoresculturalesFacade->selectFactoresculturales($factoresculturalesDto);
        echo $factoresculturalesDto;
    } else if (($accion == "baja") && ($cveFactorCultural != "")) {
        $factoresculturalesDto = $factoresculturalesFacade->deleteFactoresculturales($factoresculturalesDto);
        echo $factoresculturalesDto;
    } else if (($accion == "seleccionar") && ($cveFactorCultural != "")) {
        $factoresculturalesDto = $factoresculturalesFacade->selectFactoresculturales($factoresculturalesDto);
        echo $factoresculturalesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>