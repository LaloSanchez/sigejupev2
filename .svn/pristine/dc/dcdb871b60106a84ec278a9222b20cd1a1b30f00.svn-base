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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatusaudiencias/EstatusaudienciasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatusaudienciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatusaudiencias($EstatusaudienciasDto) {
            $EstatusaudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusaudienciasDto->getcveEstatusAudiencia(), "utf8") : strtoupper($EstatusaudienciasDto->getcveEstatusAudiencia()))))));
            if ($this->esFecha($EstatusaudienciasDto->getcveEstatusAudiencia())) {
                $EstatusaudienciasDto->setcveEstatusAudiencia($this->fechaMysql($EstatusaudienciasDto->getcveEstatusAudiencia()));
            }
            $EstatusaudienciasDto->setdesEstatusAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusaudienciasDto->getdesEstatusAudiencia(), "utf8") : strtoupper($EstatusaudienciasDto->getdesEstatusAudiencia()))))));
            if ($this->esFecha($EstatusaudienciasDto->getdesEstatusAudiencia())) {
                $EstatusaudienciasDto->setdesEstatusAudiencia($this->fechaMysql($EstatusaudienciasDto->getdesEstatusAudiencia()));
            }
            $EstatusaudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusaudienciasDto->getactivo(), "utf8") : strtoupper($EstatusaudienciasDto->getactivo()))))));
            if ($this->esFecha($EstatusaudienciasDto->getactivo())) {
                $EstatusaudienciasDto->setactivo($this->fechaMysql($EstatusaudienciasDto->getactivo()));
            }
            $EstatusaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusaudienciasDto->getfechaRegistro(), "utf8") : strtoupper($EstatusaudienciasDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatusaudienciasDto->getfechaRegistro())) {
                $EstatusaudienciasDto->setfechaRegistro($this->fechaMysql($EstatusaudienciasDto->getfechaRegistro()));
            }
            $EstatusaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusaudienciasDto->getfechaActualizacion(), "utf8") : strtoupper($EstatusaudienciasDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatusaudienciasDto->getfechaActualizacion())) {
                $EstatusaudienciasDto->setfechaActualizacion($this->fechaMysql($EstatusaudienciasDto->getfechaActualizacion()));
            }
            return $EstatusaudienciasDto;
        }

        public function selectEstatusaudiencias($EstatusaudienciasDto) {
            $EstatusaudienciasDto = $this->validarEstatusaudiencias($EstatusaudienciasDto);
            $EstatusaudienciasController = new EstatusaudienciasController();
            $EstatusaudienciasDto = $EstatusaudienciasController->selectEstatusaudiencias($EstatusaudienciasDto);
            if ($EstatusaudienciasDto != "") {
                $dtoToJson = new DtoToJson($EstatusaudienciasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatusaudiencias($EstatusaudienciasDto) {
            $EstatusaudienciasDto = $this->validarEstatusaudiencias($EstatusaudienciasDto);
            $EstatusaudienciasController = new EstatusaudienciasController();
            $EstatusaudienciasDto = $EstatusaudienciasController->insertEstatusaudiencias($EstatusaudienciasDto);
            if ($EstatusaudienciasDto != "") {
                $dtoToJson = new DtoToJson($EstatusaudienciasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatusaudiencias($EstatusaudienciasDto) {
            $EstatusaudienciasDto = $this->validarEstatusaudiencias($EstatusaudienciasDto);
            $EstatusaudienciasController = new EstatusaudienciasController();
            $EstatusaudienciasDto = $EstatusaudienciasController->updateEstatusaudiencias($EstatusaudienciasDto);
            if ($EstatusaudienciasDto != "") {
                $dtoToJson = new DtoToJson($EstatusaudienciasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatusaudiencias($EstatusaudienciasDto) {
            $EstatusaudienciasDto = $this->validarEstatusaudiencias($EstatusaudienciasDto);
            $EstatusaudienciasController = new EstatusaudienciasController();
            $EstatusaudienciasDto = $EstatusaudienciasController->deleteEstatusaudiencias($EstatusaudienciasDto);
            if ($EstatusaudienciasDto == true) {
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

    @$cveEstatusAudiencia = $_POST["cveEstatusAudiencia"];
    @$desEstatusAudiencia = $_POST["desEstatusAudiencia"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatusaudienciasFacade = new EstatusaudienciasFacade();
    $estatusaudienciasDto = new EstatusaudienciasDTO();

    $estatusaudienciasDto->setCveEstatusAudiencia($cveEstatusAudiencia);
    $estatusaudienciasDto->setDesEstatusAudiencia($desEstatusAudiencia);
    $estatusaudienciasDto->setActivo($activo);
    $estatusaudienciasDto->setFechaRegistro($fechaRegistro);
    $estatusaudienciasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusAudiencia == "")) {
        $estatusaudienciasDto = $estatusaudienciasFacade->insertEstatusaudiencias($estatusaudienciasDto);
        echo $estatusaudienciasDto;
    } else if (($accion == "guardar") && ($cveEstatusAudiencia != "")) {
        $estatusaudienciasDto = $estatusaudienciasFacade->updateEstatusaudiencias($estatusaudienciasDto);
        echo $estatusaudienciasDto;
    } else if ($accion == "consultar") {
        $estatusaudienciasDto = $estatusaudienciasFacade->selectEstatusaudiencias($estatusaudienciasDto);
        echo $estatusaudienciasDto;
    } else if (($accion == "baja") && ($cveEstatusAudiencia != "")) {
        $estatusaudienciasDto = $estatusaudienciasFacade->deleteEstatusaudiencias($estatusaudienciasDto);
        echo $estatusaudienciasDto;
    } else if (($accion == "seleccionar") && ($cveEstatusAudiencia != "")) {
        $estatusaudienciasDto = $estatusaudienciasFacade->selectEstatusaudiencias($estatusaudienciasDto);
        echo $estatusaudienciasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>