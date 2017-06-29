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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/etapasprocesales/EtapasprocesalesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EtapasprocesalesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEtapasprocesales($EtapasprocesalesDto) {
            $EtapasprocesalesDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapasprocesalesDto->getcveEtapaProcesal(), "utf8") : strtoupper($EtapasprocesalesDto->getcveEtapaProcesal()))))));
            if ($this->esFecha($EtapasprocesalesDto->getcveEtapaProcesal())) {
                $EtapasprocesalesDto->setcveEtapaProcesal($this->fechaMysql($EtapasprocesalesDto->getcveEtapaProcesal()));
            }
            $EtapasprocesalesDto->setdesEtapaProcesal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapasprocesalesDto->getdesEtapaProcesal(), "utf8") : strtoupper($EtapasprocesalesDto->getdesEtapaProcesal()))))));
            if ($this->esFecha($EtapasprocesalesDto->getdesEtapaProcesal())) {
                $EtapasprocesalesDto->setdesEtapaProcesal($this->fechaMysql($EtapasprocesalesDto->getdesEtapaProcesal()));
            }
            $EtapasprocesalesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapasprocesalesDto->getactivo(), "utf8") : strtoupper($EtapasprocesalesDto->getactivo()))))));
            if ($this->esFecha($EtapasprocesalesDto->getactivo())) {
                $EtapasprocesalesDto->setactivo($this->fechaMysql($EtapasprocesalesDto->getactivo()));
            }
            $EtapasprocesalesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapasprocesalesDto->getfechaRegistro(), "utf8") : strtoupper($EtapasprocesalesDto->getfechaRegistro()))))));
            if ($this->esFecha($EtapasprocesalesDto->getfechaRegistro())) {
                $EtapasprocesalesDto->setfechaRegistro($this->fechaMysql($EtapasprocesalesDto->getfechaRegistro()));
            }
            $EtapasprocesalesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapasprocesalesDto->getfechaActualizacion(), "utf8") : strtoupper($EtapasprocesalesDto->getfechaActualizacion()))))));
            if ($this->esFecha($EtapasprocesalesDto->getfechaActualizacion())) {
                $EtapasprocesalesDto->setfechaActualizacion($this->fechaMysql($EtapasprocesalesDto->getfechaActualizacion()));
            }
            return $EtapasprocesalesDto;
        }

        public function selectEtapasprocesales($EtapasprocesalesDto) {
            $EtapasprocesalesDto = $this->validarEtapasprocesales($EtapasprocesalesDto);
            $EtapasprocesalesController = new EtapasprocesalesController();
            $EtapasprocesalesDto = $EtapasprocesalesController->selectEtapasprocesales($EtapasprocesalesDto);
            if ($EtapasprocesalesDto != "") {
                $dtoToJson = new DtoToJson($EtapasprocesalesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEtapasprocesales($EtapasprocesalesDto) {
            $EtapasprocesalesDto = $this->validarEtapasprocesales($EtapasprocesalesDto);
            $EtapasprocesalesController = new EtapasprocesalesController();
            $EtapasprocesalesDto = $EtapasprocesalesController->insertEtapasprocesales($EtapasprocesalesDto);
            if ($EtapasprocesalesDto != "") {
                $dtoToJson = new DtoToJson($EtapasprocesalesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEtapasprocesales($EtapasprocesalesDto) {
            $EtapasprocesalesDto = $this->validarEtapasprocesales($EtapasprocesalesDto);
            $EtapasprocesalesController = new EtapasprocesalesController();
            $EtapasprocesalesDto = $EtapasprocesalesController->updateEtapasprocesales($EtapasprocesalesDto);
            if ($EtapasprocesalesDto != "") {
                $dtoToJson = new DtoToJson($EtapasprocesalesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEtapasprocesales($EtapasprocesalesDto) {
            $EtapasprocesalesDto = $this->validarEtapasprocesales($EtapasprocesalesDto);
            $EtapasprocesalesController = new EtapasprocesalesController();
            $EtapasprocesalesDto = $EtapasprocesalesController->deleteEtapasprocesales($EtapasprocesalesDto);
            if ($EtapasprocesalesDto == true) {
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

    @$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
    @$desEtapaProcesal = $_POST["desEtapaProcesal"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $etapasprocesalesFacade = new EtapasprocesalesFacade();
    $etapasprocesalesDto = new EtapasprocesalesDTO();

    $etapasprocesalesDto->setCveEtapaProcesal($cveEtapaProcesal);
    $etapasprocesalesDto->setDesEtapaProcesal($desEtapaProcesal);
    $etapasprocesalesDto->setActivo($activo);
    $etapasprocesalesDto->setFechaRegistro($fechaRegistro);
    $etapasprocesalesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEtapaProcesal == "")) {
        $etapasprocesalesDto = $etapasprocesalesFacade->insertEtapasprocesales($etapasprocesalesDto);
        echo $etapasprocesalesDto;
    } else if (($accion == "guardar") && ($cveEtapaProcesal != "")) {
        $etapasprocesalesDto = $etapasprocesalesFacade->updateEtapasprocesales($etapasprocesalesDto);
        echo $etapasprocesalesDto;
    } else if ($accion == "consultar") {
        $etapasprocesalesDto = $etapasprocesalesFacade->selectEtapasprocesales($etapasprocesalesDto);
        echo $etapasprocesalesDto;
    } else if (($accion == "baja") && ($cveEtapaProcesal != "")) {
        $etapasprocesalesDto = $etapasprocesalesFacade->deleteEtapasprocesales($etapasprocesalesDto);
        echo $etapasprocesalesDto;
    } else if (($accion == "seleccionar") && ($cveEtapaProcesal != "")) {
        $etapasprocesalesDto = $etapasprocesalesFacade->selectEtapasprocesales($etapasprocesalesDto);
        echo $etapasprocesalesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>