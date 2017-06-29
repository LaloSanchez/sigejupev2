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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estadosciviles/EstadoscivilesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstadoscivilesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstadosciviles($EstadoscivilesDto) {
            $EstadoscivilesDto->setcveEstadoCivil(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadoscivilesDto->getcveEstadoCivil(), "utf8") : strtoupper($EstadoscivilesDto->getcveEstadoCivil()))))));
            if ($this->esFecha($EstadoscivilesDto->getcveEstadoCivil())) {
                $EstadoscivilesDto->setcveEstadoCivil($this->fechaMysql($EstadoscivilesDto->getcveEstadoCivil()));
            }
            $EstadoscivilesDto->setdesEstadoCivil(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadoscivilesDto->getdesEstadoCivil(), "utf8") : strtoupper($EstadoscivilesDto->getdesEstadoCivil()))))));
            if ($this->esFecha($EstadoscivilesDto->getdesEstadoCivil())) {
                $EstadoscivilesDto->setdesEstadoCivil($this->fechaMysql($EstadoscivilesDto->getdesEstadoCivil()));
            }
            $EstadoscivilesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadoscivilesDto->getactivo(), "utf8") : strtoupper($EstadoscivilesDto->getactivo()))))));
            if ($this->esFecha($EstadoscivilesDto->getactivo())) {
                $EstadoscivilesDto->setactivo($this->fechaMysql($EstadoscivilesDto->getactivo()));
            }
            $EstadoscivilesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadoscivilesDto->getfechaRegistro(), "utf8") : strtoupper($EstadoscivilesDto->getfechaRegistro()))))));
            if ($this->esFecha($EstadoscivilesDto->getfechaRegistro())) {
                $EstadoscivilesDto->setfechaRegistro($this->fechaMysql($EstadoscivilesDto->getfechaRegistro()));
            }
            $EstadoscivilesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadoscivilesDto->getfechaActualizacion(), "utf8") : strtoupper($EstadoscivilesDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstadoscivilesDto->getfechaActualizacion())) {
                $EstadoscivilesDto->setfechaActualizacion($this->fechaMysql($EstadoscivilesDto->getfechaActualizacion()));
            }
            return $EstadoscivilesDto;
        }

        public function selectEstadosciviles($EstadoscivilesDto) {
            $EstadoscivilesDto = $this->validarEstadosciviles($EstadoscivilesDto);
            $EstadoscivilesController = new EstadoscivilesController();
            $EstadoscivilesDto = $EstadoscivilesController->selectEstadosciviles($EstadoscivilesDto);
            if ($EstadoscivilesDto != "") {
                $dtoToJson = new DtoToJson($EstadoscivilesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstadosciviles($EstadoscivilesDto) {
            $EstadoscivilesDto = $this->validarEstadosciviles($EstadoscivilesDto);
            $EstadoscivilesController = new EstadoscivilesController();
            $EstadoscivilesDto = $EstadoscivilesController->insertEstadosciviles($EstadoscivilesDto);
            if ($EstadoscivilesDto != "") {
                $dtoToJson = new DtoToJson($EstadoscivilesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstadosciviles($EstadoscivilesDto) {
            $EstadoscivilesDto = $this->validarEstadosciviles($EstadoscivilesDto);
            $EstadoscivilesController = new EstadoscivilesController();
            $EstadoscivilesDto = $EstadoscivilesController->updateEstadosciviles($EstadoscivilesDto);
            if ($EstadoscivilesDto != "") {
                $dtoToJson = new DtoToJson($EstadoscivilesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstadosciviles($EstadoscivilesDto) {
            $EstadoscivilesDto = $this->validarEstadosciviles($EstadoscivilesDto);
            $EstadoscivilesController = new EstadoscivilesController();
            $EstadoscivilesDto = $EstadoscivilesController->deleteEstadosciviles($EstadoscivilesDto);
            if ($EstadoscivilesDto == true) {
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

    @$cveEstadoCivil = $_POST["cveEstadoCivil"];
    @$desEstadoCivil = $_POST["desEstadoCivil"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estadoscivilesFacade = new EstadoscivilesFacade();
    $estadoscivilesDto = new EstadoscivilesDTO();

    $estadoscivilesDto->setCveEstadoCivil($cveEstadoCivil);
    $estadoscivilesDto->setDesEstadoCivil($desEstadoCivil);
    $estadoscivilesDto->setActivo($activo);
    $estadoscivilesDto->setFechaRegistro($fechaRegistro);
    $estadoscivilesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstadoCivil == "")) {
        $estadoscivilesDto = $estadoscivilesFacade->insertEstadosciviles($estadoscivilesDto);
        echo $estadoscivilesDto;
    } else if (($accion == "guardar") && ($cveEstadoCivil != "")) {
        $estadoscivilesDto = $estadoscivilesFacade->updateEstadosciviles($estadoscivilesDto);
        echo $estadoscivilesDto;
    } else if ($accion == "consultar") {
        $estadoscivilesDto = $estadoscivilesFacade->selectEstadosciviles($estadoscivilesDto);
        echo $estadoscivilesDto;
    } else if (($accion == "baja") && ($cveEstadoCivil != "")) {
        $estadoscivilesDto = $estadoscivilesFacade->deleteEstadosciviles($estadoscivilesDto);
        echo $estadoscivilesDto;
    } else if (($accion == "seleccionar") && ($cveEstadoCivil != "")) {
        $estadoscivilesDto = $estadoscivilesFacade->selectEstadosciviles($estadoscivilesDto);
        echo $estadoscivilesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>