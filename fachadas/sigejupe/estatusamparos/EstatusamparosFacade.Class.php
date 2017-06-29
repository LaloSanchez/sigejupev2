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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusamparos/EstatusamparosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatusamparos/EstatusamparosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatusamparosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatusamparos($EstatusamparosDto) {
            $EstatusamparosDto->setcveEstatusAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusamparosDto->getcveEstatusAmparo(), "utf8") : strtoupper($EstatusamparosDto->getcveEstatusAmparo()))))));
            if ($this->esFecha($EstatusamparosDto->getcveEstatusAmparo())) {
                $EstatusamparosDto->setcveEstatusAmparo($this->fechaMysql($EstatusamparosDto->getcveEstatusAmparo()));
            }
            $EstatusamparosDto->setdesEstatus(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusamparosDto->getdesEstatus(), "utf8") : strtoupper($EstatusamparosDto->getdesEstatus()))))));
            if ($this->esFecha($EstatusamparosDto->getdesEstatus())) {
                $EstatusamparosDto->setdesEstatus($this->fechaMysql($EstatusamparosDto->getdesEstatus()));
            }
            $EstatusamparosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusamparosDto->getactivo(), "utf8") : strtoupper($EstatusamparosDto->getactivo()))))));
            if ($this->esFecha($EstatusamparosDto->getactivo())) {
                $EstatusamparosDto->setactivo($this->fechaMysql($EstatusamparosDto->getactivo()));
            }
            $EstatusamparosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusamparosDto->getfechaRegistro(), "utf8") : strtoupper($EstatusamparosDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatusamparosDto->getfechaRegistro())) {
                $EstatusamparosDto->setfechaRegistro($this->fechaMysql($EstatusamparosDto->getfechaRegistro()));
            }
            $EstatusamparosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusamparosDto->getfechaActualizacion(), "utf8") : strtoupper($EstatusamparosDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatusamparosDto->getfechaActualizacion())) {
                $EstatusamparosDto->setfechaActualizacion($this->fechaMysql($EstatusamparosDto->getfechaActualizacion()));
            }
            return $EstatusamparosDto;
        }

        public function selectEstatusamparos($EstatusamparosDto) {
            $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
            $EstatusamparosController = new EstatusamparosController();
            $EstatusamparosDto = $EstatusamparosController->selectEstatusamparos($EstatusamparosDto);
            if ($EstatusamparosDto != "") {
                $dtoToJson = new DtoToJson($EstatusamparosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectEstatusamparosOrden($EstatusamparosDto, $orden) {
            $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
            $EstatusamparosController = new EstatusamparosController();
            $EstatusamparosDto = $EstatusamparosController->selectEstatusamparosOrden($EstatusamparosDto, $orden, null);
            if ($EstatusamparosDto != "") {
                $dtoToJson = new DtoToJson($EstatusamparosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatusamparos($EstatusamparosDto) {
            $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
            $EstatusamparosController = new EstatusamparosController();
            $EstatusamparosDto = $EstatusamparosController->insertEstatusamparos($EstatusamparosDto);
            if ($EstatusamparosDto != "") {
                $dtoToJson = new DtoToJson($EstatusamparosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatusamparos($EstatusamparosDto) {
            $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
            $EstatusamparosController = new EstatusamparosController();
            $EstatusamparosDto = $EstatusamparosController->updateEstatusamparos($EstatusamparosDto);
            if ($EstatusamparosDto != "") {
                $dtoToJson = new DtoToJson($EstatusamparosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatusamparos($EstatusamparosDto) {
            $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
            $EstatusamparosController = new EstatusamparosController();
            $EstatusamparosDto = $EstatusamparosController->deleteEstatusamparos($EstatusamparosDto);
            if ($EstatusamparosDto == true) {
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

    @$cveEstatusAmparo = $_POST["cveEstatusAmparo"];
    @$desEstatus = $_POST["desEstatus"];
    @$activo = $_POST["activo"];
    @$orden = $_POST["orden"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatusamparosFacade = new EstatusamparosFacade();
    $estatusamparosDto = new EstatusamparosDTO();

    $estatusamparosDto->setCveEstatusAmparo($cveEstatusAmparo);
    $estatusamparosDto->setDesEstatus($desEstatus);
    $estatusamparosDto->setActivo($activo);
    $estatusamparosDto->setFechaRegistro($fechaRegistro);
    $estatusamparosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusAmparo == "")) {
        $estatusamparosDto = $estatusamparosFacade->insertEstatusamparos($estatusamparosDto);
        echo $estatusamparosDto;
    } else if (($accion == "guardar") && ($cveEstatusAmparo != "")) {
        $estatusamparosDto = $estatusamparosFacade->updateEstatusamparos($estatusamparosDto);
        echo $estatusamparosDto;
    } else if ($accion == "consultar") {
        $estatusamparosDto = $estatusamparosFacade->selectEstatusamparos($estatusamparosDto);
        echo $estatusamparosDto;
    } else if (($accion == "baja") && ($cveEstatusAmparo != "")) {
        $estatusamparosDto = $estatusamparosFacade->deleteEstatusamparos($estatusamparosDto);
        echo $estatusamparosDto;
    } else if (($accion == "seleccionar") && ($cveEstatusAmparo != "")) {
        $estatusamparosDto = $estatusamparosFacade->selectEstatusamparos($estatusamparosDto);
        echo $estatusamparosDto;
    } else if ($accion == "consultarOrdenado") {
        $estatusamparosDto = $estatusamparosFacade->selectEstatusamparosOrden($estatusamparosDto, $orden);
        echo $estatusamparosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>