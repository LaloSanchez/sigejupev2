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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadorescateos/JuzgadorescateosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class JuzgadorescateosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarJuzgadorescateos($JuzgadorescateosDto) {
            $JuzgadorescateosDto->setidJuzgadorCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getidJuzgadorCateo(), "utf8") : strtoupper($JuzgadorescateosDto->getidJuzgadorCateo()))))));
            if ($this->esFecha($JuzgadorescateosDto->getidJuzgadorCateo())) {
                $JuzgadorescateosDto->setidJuzgadorCateo($this->fechaMysql($JuzgadorescateosDto->getidJuzgadorCateo()));
            }
            $JuzgadorescateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getidSolicitudCateo(), "utf8") : strtoupper($JuzgadorescateosDto->getidSolicitudCateo()))))));
            if ($this->esFecha($JuzgadorescateosDto->getidSolicitudCateo())) {
                $JuzgadorescateosDto->setidSolicitudCateo($this->fechaMysql($JuzgadorescateosDto->getidSolicitudCateo()));
            }
            $JuzgadorescateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getidJuzgador(), "utf8") : strtoupper($JuzgadorescateosDto->getidJuzgador()))))));
            if ($this->esFecha($JuzgadorescateosDto->getidJuzgador())) {
                $JuzgadorescateosDto->setidJuzgador($this->fechaMysql($JuzgadorescateosDto->getidJuzgador()));
            }
            $JuzgadorescateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getactivo(), "utf8") : strtoupper($JuzgadorescateosDto->getactivo()))))));
            if ($this->esFecha($JuzgadorescateosDto->getactivo())) {
                $JuzgadorescateosDto->setactivo($this->fechaMysql($JuzgadorescateosDto->getactivo()));
            }
            $JuzgadorescateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadorescateosDto->getfechaRegistro()))))));
            if ($this->esFecha($JuzgadorescateosDto->getfechaRegistro())) {
                $JuzgadorescateosDto->setfechaRegistro($this->fechaMysql($JuzgadorescateosDto->getfechaRegistro()));
            }
            $JuzgadorescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescateosDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadorescateosDto->getfechaActualizacion()))))));
            if ($this->esFecha($JuzgadorescateosDto->getfechaActualizacion())) {
                $JuzgadorescateosDto->setfechaActualizacion($this->fechaMysql($JuzgadorescateosDto->getfechaActualizacion()));
            }
            return $JuzgadorescateosDto;
        }

        public function selectJuzgadorescateos($JuzgadorescateosDto) {
            $JuzgadorescateosDto = $this->validarJuzgadorescateos($JuzgadorescateosDto);
            $JuzgadorescateosController = new JuzgadorescateosController();
            $JuzgadorescateosDto = $JuzgadorescateosController->selectJuzgadorescateos($JuzgadorescateosDto);
            if ($JuzgadorescateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadorescateosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertJuzgadorescateos($JuzgadorescateosDto) {
            $JuzgadorescateosDto = $this->validarJuzgadorescateos($JuzgadorescateosDto);
            $JuzgadorescateosController = new JuzgadorescateosController();
            $JuzgadorescateosDto = $JuzgadorescateosController->insertJuzgadorescateos($JuzgadorescateosDto);
            if ($JuzgadorescateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadorescateosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateJuzgadorescateos($JuzgadorescateosDto) {
            $JuzgadorescateosDto = $this->validarJuzgadorescateos($JuzgadorescateosDto);
            $JuzgadorescateosController = new JuzgadorescateosController();
            $JuzgadorescateosDto = $JuzgadorescateosController->updateJuzgadorescateos($JuzgadorescateosDto);
            if ($JuzgadorescateosDto != "") {
                $dtoToJson = new DtoToJson($JuzgadorescateosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteJuzgadorescateos($JuzgadorescateosDto) {
            $JuzgadorescateosDto = $this->validarJuzgadorescateos($JuzgadorescateosDto);
            $JuzgadorescateosController = new JuzgadorescateosController();
            $JuzgadorescateosDto = $JuzgadorescateosController->deleteJuzgadorescateos($JuzgadorescateosDto);
            if ($JuzgadorescateosDto == true) {
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

    @$idJuzgadorCateo = $_POST["idJuzgadorCateo"];
    @$idSolicitudCateo = $_POST["idSolicitudCateo"];
    @$idJuzgador = $_POST["idJuzgador"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $juzgadorescateosFacade = new JuzgadorescateosFacade();
    $juzgadorescateosDto = new JuzgadorescateosDTO();

    $juzgadorescateosDto->setIdJuzgadorCateo($idJuzgadorCateo);
    $juzgadorescateosDto->setIdSolicitudCateo($idSolicitudCateo);
    $juzgadorescateosDto->setIdJuzgador($idJuzgador);
    $juzgadorescateosDto->setActivo($activo);
    $juzgadorescateosDto->setFechaRegistro($fechaRegistro);
    $juzgadorescateosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idJuzgadorCateo == "")) {
        $juzgadorescateosDto = $juzgadorescateosFacade->insertJuzgadorescateos($juzgadorescateosDto);
        echo $juzgadorescateosDto;
    } else if (($accion == "guardar") && ($idJuzgadorCateo != "")) {
        $juzgadorescateosDto = $juzgadorescateosFacade->updateJuzgadorescateos($juzgadorescateosDto);
        echo $juzgadorescateosDto;
    } else if ($accion == "consultar") {
        $juzgadorescateosDto = $juzgadorescateosFacade->selectJuzgadorescateos($juzgadorescateosDto);
        echo $juzgadorescateosDto;
    } else if (($accion == "baja") && ($idJuzgadorCateo != "")) {
        $juzgadorescateosDto = $juzgadorescateosFacade->deleteJuzgadorescateos($juzgadorescateosDto);
        echo $juzgadorescateosDto;
    } else if (($accion == "seleccionar") && ($idJuzgadorCateo != "")) {
        $juzgadorescateosDto = $juzgadorescateosFacade->selectJuzgadorescateos($juzgadorescateosDto);
        echo $juzgadorescateosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>