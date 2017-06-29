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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/funcionesjuzgadores/FuncionesjuzgadoresController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class FuncionesjuzgadoresFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarFuncionesjuzgadores($FuncionesjuzgadoresDto) {
            $FuncionesjuzgadoresDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FuncionesjuzgadoresDto->getcveFuncionJuzgador(), "utf8") : strtoupper($FuncionesjuzgadoresDto->getcveFuncionJuzgador()))))));
            if ($this->esFecha($FuncionesjuzgadoresDto->getcveFuncionJuzgador())) {
                $FuncionesjuzgadoresDto->setcveFuncionJuzgador($this->fechaMysql($FuncionesjuzgadoresDto->getcveFuncionJuzgador()));
            }
            $FuncionesjuzgadoresDto->setdesFuncionJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FuncionesjuzgadoresDto->getdesFuncionJuzgador(), "utf8") : strtoupper($FuncionesjuzgadoresDto->getdesFuncionJuzgador()))))));
            if ($this->esFecha($FuncionesjuzgadoresDto->getdesFuncionJuzgador())) {
                $FuncionesjuzgadoresDto->setdesFuncionJuzgador($this->fechaMysql($FuncionesjuzgadoresDto->getdesFuncionJuzgador()));
            }
            $FuncionesjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FuncionesjuzgadoresDto->getactivo(), "utf8") : strtoupper($FuncionesjuzgadoresDto->getactivo()))))));
            if ($this->esFecha($FuncionesjuzgadoresDto->getactivo())) {
                $FuncionesjuzgadoresDto->setactivo($this->fechaMysql($FuncionesjuzgadoresDto->getactivo()));
            }
            $FuncionesjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FuncionesjuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($FuncionesjuzgadoresDto->getfechaRegistro()))))));
            if ($this->esFecha($FuncionesjuzgadoresDto->getfechaRegistro())) {
                $FuncionesjuzgadoresDto->setfechaRegistro($this->fechaMysql($FuncionesjuzgadoresDto->getfechaRegistro()));
            }
            $FuncionesjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FuncionesjuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($FuncionesjuzgadoresDto->getfechaActualizacion()))))));
            if ($this->esFecha($FuncionesjuzgadoresDto->getfechaActualizacion())) {
                $FuncionesjuzgadoresDto->setfechaActualizacion($this->fechaMysql($FuncionesjuzgadoresDto->getfechaActualizacion()));
            }
            return $FuncionesjuzgadoresDto;
        }

        public function selectFuncionesjuzgadores($FuncionesjuzgadoresDto) {
            $FuncionesjuzgadoresDto = $this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
            $FuncionesjuzgadoresController = new FuncionesjuzgadoresController();
            $FuncionesjuzgadoresDto = $FuncionesjuzgadoresController->selectFuncionesjuzgadores($FuncionesjuzgadoresDto);
            if ($FuncionesjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($FuncionesjuzgadoresDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertFuncionesjuzgadores($FuncionesjuzgadoresDto) {
            $FuncionesjuzgadoresDto = $this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
            $FuncionesjuzgadoresController = new FuncionesjuzgadoresController();
            $FuncionesjuzgadoresDto = $FuncionesjuzgadoresController->insertFuncionesjuzgadores($FuncionesjuzgadoresDto);
            if ($FuncionesjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($FuncionesjuzgadoresDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateFuncionesjuzgadores($FuncionesjuzgadoresDto) {
            $FuncionesjuzgadoresDto = $this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
            $FuncionesjuzgadoresController = new FuncionesjuzgadoresController();
            $FuncionesjuzgadoresDto = $FuncionesjuzgadoresController->updateFuncionesjuzgadores($FuncionesjuzgadoresDto);
            if ($FuncionesjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($FuncionesjuzgadoresDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteFuncionesjuzgadores($FuncionesjuzgadoresDto) {
            $FuncionesjuzgadoresDto = $this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
            $FuncionesjuzgadoresController = new FuncionesjuzgadoresController();
            $FuncionesjuzgadoresDto = $FuncionesjuzgadoresController->deleteFuncionesjuzgadores($FuncionesjuzgadoresDto);
            if ($FuncionesjuzgadoresDto == true) {
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

    @$cveFuncionJuzgador = $_POST["cveFuncionJuzgador"];
    @$desFuncionJuzgador = $_POST["desFuncionJuzgador"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $funcionesjuzgadoresFacade = new FuncionesjuzgadoresFacade();
    $funcionesjuzgadoresDto = new FuncionesjuzgadoresDTO();

    $funcionesjuzgadoresDto->setCveFuncionJuzgador($cveFuncionJuzgador);
    $funcionesjuzgadoresDto->setDesFuncionJuzgador($desFuncionJuzgador);
    $funcionesjuzgadoresDto->setActivo($activo);
    $funcionesjuzgadoresDto->setFechaRegistro($fechaRegistro);
    $funcionesjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveFuncionJuzgador == "")) {
        $funcionesjuzgadoresDto = $funcionesjuzgadoresFacade->insertFuncionesjuzgadores($funcionesjuzgadoresDto);
        echo $funcionesjuzgadoresDto;
    } else if (($accion == "guardar") && ($cveFuncionJuzgador != "")) {
        $funcionesjuzgadoresDto = $funcionesjuzgadoresFacade->updateFuncionesjuzgadores($funcionesjuzgadoresDto);
        echo $funcionesjuzgadoresDto;
    } else if ($accion == "consultar") {
        $funcionesjuzgadoresDto = $funcionesjuzgadoresFacade->selectFuncionesjuzgadores($funcionesjuzgadoresDto);
        echo $funcionesjuzgadoresDto;
    } else if (($accion == "baja") && ($cveFuncionJuzgador != "")) {
        $funcionesjuzgadoresDto = $funcionesjuzgadoresFacade->deleteFuncionesjuzgadores($funcionesjuzgadoresDto);
        echo $funcionesjuzgadoresDto;
    } else if (($accion == "seleccionar") && ($cveFuncionJuzgador != "")) {
        $funcionesjuzgadoresDto = $funcionesjuzgadoresFacade->selectFuncionesjuzgadores($funcionesjuzgadoresDto);
        echo $funcionesjuzgadoresDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>