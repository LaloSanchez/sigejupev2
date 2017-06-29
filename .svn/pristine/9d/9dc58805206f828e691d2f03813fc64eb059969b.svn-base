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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/interpretes/InterpretesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class InterpretesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarInterpretes($InterpretesDto) {
            $InterpretesDto->setcveInterprete(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InterpretesDto->getcveInterprete(), "utf8") : strtoupper($InterpretesDto->getcveInterprete()))))));
            if ($this->esFecha($InterpretesDto->getcveInterprete())) {
                $InterpretesDto->setcveInterprete($this->fechaMysql($InterpretesDto->getcveInterprete()));
            }
            $InterpretesDto->setdesInterprete(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InterpretesDto->getdesInterprete(), "utf8") : strtoupper($InterpretesDto->getdesInterprete()))))));
            if ($this->esFecha($InterpretesDto->getdesInterprete())) {
                $InterpretesDto->setdesInterprete($this->fechaMysql($InterpretesDto->getdesInterprete()));
            }
            $InterpretesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InterpretesDto->getactivo(), "utf8") : strtoupper($InterpretesDto->getactivo()))))));
            if ($this->esFecha($InterpretesDto->getactivo())) {
                $InterpretesDto->setactivo($this->fechaMysql($InterpretesDto->getactivo()));
            }
            $InterpretesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InterpretesDto->getfechaRegistro(), "utf8") : strtoupper($InterpretesDto->getfechaRegistro()))))));
            if ($this->esFecha($InterpretesDto->getfechaRegistro())) {
                $InterpretesDto->setfechaRegistro($this->fechaMysql($InterpretesDto->getfechaRegistro()));
            }
            $InterpretesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InterpretesDto->getfechaActualizacion(), "utf8") : strtoupper($InterpretesDto->getfechaActualizacion()))))));
            if ($this->esFecha($InterpretesDto->getfechaActualizacion())) {
                $InterpretesDto->setfechaActualizacion($this->fechaMysql($InterpretesDto->getfechaActualizacion()));
            }
            return $InterpretesDto;
        }

        public function selectInterpretes($InterpretesDto) {
            $InterpretesDto = $this->validarInterpretes($InterpretesDto);
            $InterpretesController = new InterpretesController();
            $InterpretesDto = $InterpretesController->selectInterpretes($InterpretesDto);
            if ($InterpretesDto != "") {
                $dtoToJson = new DtoToJson($InterpretesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertInterpretes($InterpretesDto) {
            $InterpretesDto = $this->validarInterpretes($InterpretesDto);
            $InterpretesController = new InterpretesController();
            $InterpretesDto = $InterpretesController->insertInterpretes($InterpretesDto);
            if ($InterpretesDto != "") {
                $dtoToJson = new DtoToJson($InterpretesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateInterpretes($InterpretesDto) {
            $InterpretesDto = $this->validarInterpretes($InterpretesDto);
            $InterpretesController = new InterpretesController();
            $InterpretesDto = $InterpretesController->updateInterpretes($InterpretesDto);
            if ($InterpretesDto != "") {
                $dtoToJson = new DtoToJson($InterpretesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteInterpretes($InterpretesDto) {
            $InterpretesDto = $this->validarInterpretes($InterpretesDto);
            $InterpretesController = new InterpretesController();
            $InterpretesDto = $InterpretesController->deleteInterpretes($InterpretesDto);
            if ($InterpretesDto == true) {
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

    @$cveInterprete = $_POST["cveInterprete"];
    @$desInterprete = $_POST["desInterprete"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $interpretesFacade = new InterpretesFacade();
    $interpretesDto = new InterpretesDTO();

    $interpretesDto->setCveInterprete($cveInterprete);
    $interpretesDto->setDesInterprete($desInterprete);
    $interpretesDto->setActivo($activo);
    $interpretesDto->setFechaRegistro($fechaRegistro);
    $interpretesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveInterprete == "")) {
        $interpretesDto = $interpretesFacade->insertInterpretes($interpretesDto);
        echo $interpretesDto;
    } else if (($accion == "guardar") && ($cveInterprete != "")) {
        $interpretesDto = $interpretesFacade->updateInterpretes($interpretesDto);
        echo $interpretesDto;
    } else if ($accion == "consultar") {
        $interpretesDto = $interpretesFacade->selectInterpretes($interpretesDto);
        echo $interpretesDto;
    } else if (($accion == "baja") && ($cveInterprete != "")) {
        $interpretesDto = $interpretesFacade->deleteInterpretes($interpretesDto);
        echo $interpretesDto;
    } else if (($accion == "seleccionar") && ($cveInterprete != "")) {
        $interpretesDto = $interpretesFacade->selectInterpretes($interpretesDto);
        echo $interpretesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>