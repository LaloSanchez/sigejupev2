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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatuscarpetas/EstatuscarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatuscarpetas/EstatuscarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatuscarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatuscarpetas($EstatuscarpetasDto) {
            $EstatuscarpetasDto->setcveEstatusCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatuscarpetasDto->getcveEstatusCarpeta(), "utf8") : strtoupper($EstatuscarpetasDto->getcveEstatusCarpeta()))))));
            if ($this->esFecha($EstatuscarpetasDto->getcveEstatusCarpeta())) {
                $EstatuscarpetasDto->setcveEstatusCarpeta($this->fechaMysql($EstatuscarpetasDto->getcveEstatusCarpeta()));
            }
            $EstatuscarpetasDto->setdesEstatusCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatuscarpetasDto->getdesEstatusCarpeta(), "utf8") : strtoupper($EstatuscarpetasDto->getdesEstatusCarpeta()))))));
            if ($this->esFecha($EstatuscarpetasDto->getdesEstatusCarpeta())) {
                $EstatuscarpetasDto->setdesEstatusCarpeta($this->fechaMysql($EstatuscarpetasDto->getdesEstatusCarpeta()));
            }
            $EstatuscarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatuscarpetasDto->getactivo(), "utf8") : strtoupper($EstatuscarpetasDto->getactivo()))))));
            if ($this->esFecha($EstatuscarpetasDto->getactivo())) {
                $EstatuscarpetasDto->setactivo($this->fechaMysql($EstatuscarpetasDto->getactivo()));
            }
            $EstatuscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatuscarpetasDto->getfechaRegistro(), "utf8") : strtoupper($EstatuscarpetasDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatuscarpetasDto->getfechaRegistro())) {
                $EstatuscarpetasDto->setfechaRegistro($this->fechaMysql($EstatuscarpetasDto->getfechaRegistro()));
            }
            $EstatuscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatuscarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($EstatuscarpetasDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatuscarpetasDto->getfechaActualizacion())) {
                $EstatuscarpetasDto->setfechaActualizacion($this->fechaMysql($EstatuscarpetasDto->getfechaActualizacion()));
            }
            return $EstatuscarpetasDto;
        }

        public function selectEstatuscarpetas($EstatuscarpetasDto) {
            $EstatuscarpetasDto = $this->validarEstatuscarpetas($EstatuscarpetasDto);
            $EstatuscarpetasController = new EstatuscarpetasController();
            $EstatuscarpetasDto = $EstatuscarpetasController->selectEstatuscarpetas($EstatuscarpetasDto);
            if ($EstatuscarpetasDto != "") {
                $dtoToJson = new DtoToJson($EstatuscarpetasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatuscarpetas($EstatuscarpetasDto) {
            $EstatuscarpetasDto = $this->validarEstatuscarpetas($EstatuscarpetasDto);
            $EstatuscarpetasController = new EstatuscarpetasController();
            $EstatuscarpetasDto = $EstatuscarpetasController->insertEstatuscarpetas($EstatuscarpetasDto);
            if ($EstatuscarpetasDto != "") {
                $dtoToJson = new DtoToJson($EstatuscarpetasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatuscarpetas($EstatuscarpetasDto) {
            $EstatuscarpetasDto = $this->validarEstatuscarpetas($EstatuscarpetasDto);
            $EstatuscarpetasController = new EstatuscarpetasController();
            $EstatuscarpetasDto = $EstatuscarpetasController->updateEstatuscarpetas($EstatuscarpetasDto);
            if ($EstatuscarpetasDto != "") {
                $dtoToJson = new DtoToJson($EstatuscarpetasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatuscarpetas($EstatuscarpetasDto) {
            $EstatuscarpetasDto = $this->validarEstatuscarpetas($EstatuscarpetasDto);
            $EstatuscarpetasController = new EstatuscarpetasController();
            $EstatuscarpetasDto = $EstatuscarpetasController->deleteEstatuscarpetas($EstatuscarpetasDto);
            if ($EstatuscarpetasDto == true) {
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

    @$cveEstatusCarpeta = $_POST["cveEstatusCarpeta"];
    @$desEstatusCarpeta = $_POST["desEstatusCarpeta"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatuscarpetasFacade = new EstatuscarpetasFacade();
    $estatuscarpetasDto = new EstatuscarpetasDTO();

    $estatuscarpetasDto->setCveEstatusCarpeta($cveEstatusCarpeta);
    $estatuscarpetasDto->setDesEstatusCarpeta($desEstatusCarpeta);
    $estatuscarpetasDto->setActivo($activo);
    $estatuscarpetasDto->setFechaRegistro($fechaRegistro);
    $estatuscarpetasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusCarpeta == "")) {
        $estatuscarpetasDto = $estatuscarpetasFacade->insertEstatuscarpetas($estatuscarpetasDto);
        echo $estatuscarpetasDto;
    } else if (($accion == "guardar") && ($cveEstatusCarpeta != "")) {
        $estatuscarpetasDto = $estatuscarpetasFacade->updateEstatuscarpetas($estatuscarpetasDto);
        echo $estatuscarpetasDto;
    } else if ($accion == "consultar") {
        $estatuscarpetasDto = $estatuscarpetasFacade->selectEstatuscarpetas($estatuscarpetasDto);
        echo $estatuscarpetasDto;
    } else if (($accion == "baja") && ($cveEstatusCarpeta != "")) {
        $estatuscarpetasDto = $estatuscarpetasFacade->deleteEstatuscarpetas($estatuscarpetasDto);
        echo $estatuscarpetasDto;
    } else if (($accion == "seleccionar") && ($cveEstatusCarpeta != "")) {
        $estatuscarpetasDto = $estatuscarpetasFacade->selectEstatuscarpetas($estatuscarpetasDto);
        echo $estatuscarpetasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>