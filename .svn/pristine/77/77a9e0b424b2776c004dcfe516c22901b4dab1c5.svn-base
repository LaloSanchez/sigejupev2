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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estadospsicofisicos/EstadospsicofisicosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstadospsicofisicosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstadospsicofisicos($EstadospsicofisicosDto) {
            $EstadospsicofisicosDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadospsicofisicosDto->getcveEstadoPsicofisico(), "utf8") : strtoupper($EstadospsicofisicosDto->getcveEstadoPsicofisico()))))));
            if ($this->esFecha($EstadospsicofisicosDto->getcveEstadoPsicofisico())) {
                $EstadospsicofisicosDto->setcveEstadoPsicofisico($this->fechaMysql($EstadospsicofisicosDto->getcveEstadoPsicofisico()));
            }
            $EstadospsicofisicosDto->setdesEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadospsicofisicosDto->getdesEstadoPsicofisico(), "utf8") : strtoupper($EstadospsicofisicosDto->getdesEstadoPsicofisico()))))));
            if ($this->esFecha($EstadospsicofisicosDto->getdesEstadoPsicofisico())) {
                $EstadospsicofisicosDto->setdesEstadoPsicofisico($this->fechaMysql($EstadospsicofisicosDto->getdesEstadoPsicofisico()));
            }
            $EstadospsicofisicosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadospsicofisicosDto->getactivo(), "utf8") : strtoupper($EstadospsicofisicosDto->getactivo()))))));
            if ($this->esFecha($EstadospsicofisicosDto->getactivo())) {
                $EstadospsicofisicosDto->setactivo($this->fechaMysql($EstadospsicofisicosDto->getactivo()));
            }
            $EstadospsicofisicosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadospsicofisicosDto->getfechaRegistro(), "utf8") : strtoupper($EstadospsicofisicosDto->getfechaRegistro()))))));
            if ($this->esFecha($EstadospsicofisicosDto->getfechaRegistro())) {
                $EstadospsicofisicosDto->setfechaRegistro($this->fechaMysql($EstadospsicofisicosDto->getfechaRegistro()));
            }
            $EstadospsicofisicosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstadospsicofisicosDto->getfechaActualizacion(), "utf8") : strtoupper($EstadospsicofisicosDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstadospsicofisicosDto->getfechaActualizacion())) {
                $EstadospsicofisicosDto->setfechaActualizacion($this->fechaMysql($EstadospsicofisicosDto->getfechaActualizacion()));
            }
            return $EstadospsicofisicosDto;
        }

        public function selectEstadospsicofisicos($EstadospsicofisicosDto) {
            $EstadospsicofisicosDto = $this->validarEstadospsicofisicos($EstadospsicofisicosDto);
            $EstadospsicofisicosController = new EstadospsicofisicosController();
            $EstadospsicofisicosDto = $EstadospsicofisicosController->selectEstadospsicofisicos($EstadospsicofisicosDto);
            if ($EstadospsicofisicosDto != "") {
                $dtoToJson = new DtoToJson($EstadospsicofisicosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstadospsicofisicos($EstadospsicofisicosDto) {
            $EstadospsicofisicosDto = $this->validarEstadospsicofisicos($EstadospsicofisicosDto);
            $EstadospsicofisicosController = new EstadospsicofisicosController();
            $EstadospsicofisicosDto = $EstadospsicofisicosController->insertEstadospsicofisicos($EstadospsicofisicosDto);
            if ($EstadospsicofisicosDto != "") {
                $dtoToJson = new DtoToJson($EstadospsicofisicosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstadospsicofisicos($EstadospsicofisicosDto) {
            $EstadospsicofisicosDto = $this->validarEstadospsicofisicos($EstadospsicofisicosDto);
            $EstadospsicofisicosController = new EstadospsicofisicosController();
            $EstadospsicofisicosDto = $EstadospsicofisicosController->updateEstadospsicofisicos($EstadospsicofisicosDto);
            if ($EstadospsicofisicosDto != "") {
                $dtoToJson = new DtoToJson($EstadospsicofisicosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstadospsicofisicos($EstadospsicofisicosDto) {
            $EstadospsicofisicosDto = $this->validarEstadospsicofisicos($EstadospsicofisicosDto);
            $EstadospsicofisicosController = new EstadospsicofisicosController();
            $EstadospsicofisicosDto = $EstadospsicofisicosController->deleteEstadospsicofisicos($EstadospsicofisicosDto);
            if ($EstadospsicofisicosDto == true) {
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

    @$cveEstadoPsicofisico = $_POST["cveEstadoPsicofisico"];
    @$desEstadoPsicofisico = $_POST["desEstadoPsicofisico"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estadospsicofisicosFacade = new EstadospsicofisicosFacade();
    $estadospsicofisicosDto = new EstadospsicofisicosDTO();

    $estadospsicofisicosDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
    $estadospsicofisicosDto->setDesEstadoPsicofisico($desEstadoPsicofisico);
    $estadospsicofisicosDto->setActivo($activo);
    $estadospsicofisicosDto->setFechaRegistro($fechaRegistro);
    $estadospsicofisicosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstadoPsicofisico == "")) {
        $estadospsicofisicosDto = $estadospsicofisicosFacade->insertEstadospsicofisicos($estadospsicofisicosDto);
        echo $estadospsicofisicosDto;
    } else if (($accion == "guardar") && ($cveEstadoPsicofisico != "")) {
        $estadospsicofisicosDto = $estadospsicofisicosFacade->updateEstadospsicofisicos($estadospsicofisicosDto);
        echo $estadospsicofisicosDto;
    } else if ($accion == "consultar") {
        $estadospsicofisicosDto = $estadospsicofisicosFacade->selectEstadospsicofisicos($estadospsicofisicosDto);
        echo $estadospsicofisicosDto;
    } else if (($accion == "baja") && ($cveEstadoPsicofisico != "")) {
        $estadospsicofisicosDto = $estadospsicofisicosFacade->deleteEstadospsicofisicos($estadospsicofisicosDto);
        echo $estadospsicofisicosDto;
    } else if (($accion == "seleccionar") && ($cveEstadoPsicofisico != "")) {
        $estadospsicofisicosDto = $estadospsicofisicosFacade->selectEstadospsicofisicos($estadospsicofisicosDto);
        echo $estadospsicofisicosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>