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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadoresapelacateos/JuzgadoresapelacateosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class JuzgadoresapelacateosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarJuzgadoresapelacateos($JuzgadoresapelacateosDto) {
            $JuzgadoresapelacateosDto->setidJuzgadorApelaCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getidJuzgadorApelaCateo(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getidJuzgadorApelaCateo()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getidJuzgadorApelaCateo())) {
                $JuzgadoresapelacateosDto->setidJuzgadorApelaCateo($this->fechaMysql($JuzgadoresapelacateosDto->getidJuzgadorApelaCateo()));
            }
            $JuzgadoresapelacateosDto->setidApelacionCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getidApelacionCateo(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getidApelacionCateo()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getidApelacionCateo())) {
                $JuzgadoresapelacateosDto->setidApelacionCateo($this->fechaMysql($JuzgadoresapelacateosDto->getidApelacionCateo()));
            }
            $JuzgadoresapelacateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getidJuzgador(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getidJuzgador()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getidJuzgador())) {
                $JuzgadoresapelacateosDto->setidJuzgador($this->fechaMysql($JuzgadoresapelacateosDto->getidJuzgador()));
            }
            $JuzgadoresapelacateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getactivo(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getactivo()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getactivo())) {
                $JuzgadoresapelacateosDto->setactivo($this->fechaMysql($JuzgadoresapelacateosDto->getactivo()));
            }
            $JuzgadoresapelacateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getfechaRegistro()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getfechaRegistro())) {
                $JuzgadoresapelacateosDto->setfechaRegistro($this->fechaMysql($JuzgadoresapelacateosDto->getfechaRegistro()));
            }
            $JuzgadoresapelacateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresapelacateosDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadoresapelacateosDto->getfechaActualizacion()))))));
            if ($this->esFecha($JuzgadoresapelacateosDto->getfechaActualizacion())) {
                $JuzgadoresapelacateosDto->setfechaActualizacion($this->fechaMysql($JuzgadoresapelacateosDto->getfechaActualizacion()));
            }
            return $JuzgadoresapelacateosDto;
        }

        public function selectJuzgadoresapelacateos($JuzgadoresapelacateosDto) {
            $JuzgadoresapelacateosDto = $this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            $JuzgadoresapelacateosController = new JuzgadoresapelacateosController();
            $JuzgadoresapelacateosDto = $JuzgadoresapelacateosController->selectJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            if ($JuzgadoresapelacateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresapelacateosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertJuzgadoresapelacateos($JuzgadoresapelacateosDto) {
            $JuzgadoresapelacateosDto = $this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            $JuzgadoresapelacateosController = new JuzgadoresapelacateosController();
            $JuzgadoresapelacateosDto = $JuzgadoresapelacateosController->insertJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            if ($JuzgadoresapelacateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresapelacateosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateJuzgadoresapelacateos($JuzgadoresapelacateosDto) {
            $JuzgadoresapelacateosDto = $this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            $JuzgadoresapelacateosController = new JuzgadoresapelacateosController();
            $JuzgadoresapelacateosDto = $JuzgadoresapelacateosController->updateJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            if ($JuzgadoresapelacateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresapelacateosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteJuzgadoresapelacateos($JuzgadoresapelacateosDto) {
            $JuzgadoresapelacateosDto = $this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            $JuzgadoresapelacateosController = new JuzgadoresapelacateosController();
            $JuzgadoresapelacateosDto = $JuzgadoresapelacateosController->deleteJuzgadoresapelacateos($JuzgadoresapelacateosDto);
            if ($JuzgadoresapelacateosDto == true) {
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

    @$idJuzgadorApelaCateo = $_POST["idJuzgadorApelaCateo"];
    @$idApelacionCateo = $_POST["idApelacionCateo"];
    @$idJuzgador = $_POST["idJuzgador"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $juzgadoresapelacateosFacade = new JuzgadoresapelacateosFacade();
    $juzgadoresapelacateosDto = new JuzgadoresapelacateosDTO();

    $juzgadoresapelacateosDto->setIdJuzgadorApelaCateo($idJuzgadorApelaCateo);
    $juzgadoresapelacateosDto->setIdApelacionCateo($idApelacionCateo);
    $juzgadoresapelacateosDto->setIdJuzgador($idJuzgador);
    $juzgadoresapelacateosDto->setActivo($activo);
    $juzgadoresapelacateosDto->setFechaRegistro($fechaRegistro);
    $juzgadoresapelacateosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idJuzgadorApelaCateo == "")) {
        $juzgadoresapelacateosDto = $juzgadoresapelacateosFacade->insertJuzgadoresapelacateos($juzgadoresapelacateosDto);
        echo $juzgadoresapelacateosDto;
    } else if (($accion == "guardar") && ($idJuzgadorApelaCateo != "")) {
        $juzgadoresapelacateosDto = $juzgadoresapelacateosFacade->updateJuzgadoresapelacateos($juzgadoresapelacateosDto);
        echo $juzgadoresapelacateosDto;
    } else if ($accion == "consultar") {
        $juzgadoresapelacateosDto = $juzgadoresapelacateosFacade->selectJuzgadoresapelacateos($juzgadoresapelacateosDto);
        echo $juzgadoresapelacateosDto;
    } else if (($accion == "baja") && ($idJuzgadorApelaCateo != "")) {
        $juzgadoresapelacateosDto = $juzgadoresapelacateosFacade->deleteJuzgadoresapelacateos($juzgadoresapelacateosDto);
        echo $juzgadoresapelacateosDto;
    } else if (($accion == "seleccionar") && ($idJuzgadorApelaCateo != "")) {
        $juzgadoresapelacateosDto = $juzgadoresapelacateosFacade->selectJuzgadoresapelacateos($juzgadoresapelacateosDto);
        echo $juzgadoresapelacateosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>