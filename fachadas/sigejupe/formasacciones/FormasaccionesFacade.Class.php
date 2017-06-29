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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/formasacciones/FormasaccionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class FormasaccionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarFormasacciones($FormasaccionesDto) {
            $FormasaccionesDto->setcveFormaAccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormasaccionesDto->getcveFormaAccion(), "utf8") : strtoupper($FormasaccionesDto->getcveFormaAccion()))))));
            if ($this->esFecha($FormasaccionesDto->getcveFormaAccion())) {
                $FormasaccionesDto->setcveFormaAccion($this->fechaMysql($FormasaccionesDto->getcveFormaAccion()));
            }
            $FormasaccionesDto->setdesFormaAccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormasaccionesDto->getdesFormaAccion(), "utf8") : strtoupper($FormasaccionesDto->getdesFormaAccion()))))));
            if ($this->esFecha($FormasaccionesDto->getdesFormaAccion())) {
                $FormasaccionesDto->setdesFormaAccion($this->fechaMysql($FormasaccionesDto->getdesFormaAccion()));
            }
            $FormasaccionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormasaccionesDto->getactivo(), "utf8") : strtoupper($FormasaccionesDto->getactivo()))))));
            if ($this->esFecha($FormasaccionesDto->getactivo())) {
                $FormasaccionesDto->setactivo($this->fechaMysql($FormasaccionesDto->getactivo()));
            }
            $FormasaccionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormasaccionesDto->getfechaRegistro(), "utf8") : strtoupper($FormasaccionesDto->getfechaRegistro()))))));
            if ($this->esFecha($FormasaccionesDto->getfechaRegistro())) {
                $FormasaccionesDto->setfechaRegistro($this->fechaMysql($FormasaccionesDto->getfechaRegistro()));
            }
            $FormasaccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormasaccionesDto->getfechaActualizacion(), "utf8") : strtoupper($FormasaccionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($FormasaccionesDto->getfechaActualizacion())) {
                $FormasaccionesDto->setfechaActualizacion($this->fechaMysql($FormasaccionesDto->getfechaActualizacion()));
            }
            return $FormasaccionesDto;
        }

        public function selectFormasacciones($FormasaccionesDto) {
            $FormasaccionesDto = $this->validarFormasacciones($FormasaccionesDto);
            $FormasaccionesController = new FormasaccionesController();
            $FormasaccionesDto = $FormasaccionesController->selectFormasacciones($FormasaccionesDto);
            if ($FormasaccionesDto != "") {
                $dtoToJson = new DtoToJson($FormasaccionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertFormasacciones($FormasaccionesDto) {
            $FormasaccionesDto = $this->validarFormasacciones($FormasaccionesDto);
            $FormasaccionesController = new FormasaccionesController();
            $FormasaccionesDto = $FormasaccionesController->insertFormasacciones($FormasaccionesDto);
            if ($FormasaccionesDto != "") {
                $dtoToJson = new DtoToJson($FormasaccionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateFormasacciones($FormasaccionesDto) {
            $FormasaccionesDto = $this->validarFormasacciones($FormasaccionesDto);
            $FormasaccionesController = new FormasaccionesController();
            $FormasaccionesDto = $FormasaccionesController->updateFormasacciones($FormasaccionesDto);
            if ($FormasaccionesDto != "") {
                $dtoToJson = new DtoToJson($FormasaccionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteFormasacciones($FormasaccionesDto) {
            $FormasaccionesDto = $this->validarFormasacciones($FormasaccionesDto);
            $FormasaccionesController = new FormasaccionesController();
            $FormasaccionesDto = $FormasaccionesController->deleteFormasacciones($FormasaccionesDto);
            if ($FormasaccionesDto == true) {
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

    @$cveFormaAccion = $_POST["cveFormaAccion"];
    @$desFormaAccion = $_POST["desFormaAccion"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $formasaccionesFacade = new FormasaccionesFacade();
    $formasaccionesDto = new FormasaccionesDTO();

    $formasaccionesDto->setCveFormaAccion($cveFormaAccion);
    $formasaccionesDto->setDesFormaAccion($desFormaAccion);
    $formasaccionesDto->setActivo($activo);
    $formasaccionesDto->setFechaRegistro($fechaRegistro);
    $formasaccionesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveFormaAccion == "")) {
        $formasaccionesDto = $formasaccionesFacade->insertFormasacciones($formasaccionesDto);
        echo $formasaccionesDto;
    } else if (($accion == "guardar") && ($cveFormaAccion != "")) {
        $formasaccionesDto = $formasaccionesFacade->updateFormasacciones($formasaccionesDto);
        echo $formasaccionesDto;
    } else if ($accion == "consultar") {
        $formasaccionesDto = $formasaccionesFacade->selectFormasacciones($formasaccionesDto);
        echo $formasaccionesDto;
    } else if (($accion == "baja") && ($cveFormaAccion != "")) {
        $formasaccionesDto = $formasaccionesFacade->deleteFormasacciones($formasaccionesDto);
        echo $formasaccionesDto;
    } else if (($accion == "seleccionar") && ($cveFormaAccion != "")) {
        $formasaccionesDto = $formasaccionesFacade->selectFormasacciones($formasaccionesDto);
        echo $formasaccionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>