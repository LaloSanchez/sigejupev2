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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortosgenerados/ExhortosgeneradosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/exhortosgenerados/ExhortosgeneradosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ExhortosgeneradosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarExhortosgenerados($ExhortosgeneradosDto) {
            $ExhortosgeneradosDto->setidExhortoGenerado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosgeneradosDto->getidExhortoGenerado(), "utf8") : strtoupper($ExhortosgeneradosDto->getidExhortoGenerado()))))));
            if ($this->esFecha($ExhortosgeneradosDto->getidExhortoGenerado())) {
                $ExhortosgeneradosDto->setidExhortoGenerado($this->fechaMysql($ExhortosgeneradosDto->getidExhortoGenerado()));
            }
            $ExhortosgeneradosDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosgeneradosDto->getidActuacion(), "utf8") : strtoupper($ExhortosgeneradosDto->getidActuacion()))))));
            if ($this->esFecha($ExhortosgeneradosDto->getidActuacion())) {
                $ExhortosgeneradosDto->setidActuacion($this->fechaMysql($ExhortosgeneradosDto->getidActuacion()));
            }
            $ExhortosgeneradosDto->setidExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosgeneradosDto->getidExhorto(), "utf8") : strtoupper($ExhortosgeneradosDto->getidExhorto()))))));
            if ($this->esFecha($ExhortosgeneradosDto->getidExhorto())) {
                $ExhortosgeneradosDto->setidExhorto($this->fechaMysql($ExhortosgeneradosDto->getidExhorto()));
            }
            $ExhortosgeneradosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosgeneradosDto->getfechaRegistro(), "utf8") : strtoupper($ExhortosgeneradosDto->getfechaRegistro()))))));
            if ($this->esFecha($ExhortosgeneradosDto->getfechaRegistro())) {
                $ExhortosgeneradosDto->setfechaRegistro($this->fechaMysql($ExhortosgeneradosDto->getfechaRegistro()));
            }
            $ExhortosgeneradosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosgeneradosDto->getfechaActualizacion(), "utf8") : strtoupper($ExhortosgeneradosDto->getfechaActualizacion()))))));
            if ($this->esFecha($ExhortosgeneradosDto->getfechaActualizacion())) {
                $ExhortosgeneradosDto->setfechaActualizacion($this->fechaMysql($ExhortosgeneradosDto->getfechaActualizacion()));
            }
            return $ExhortosgeneradosDto;
        }

        public function selectExhortosgenerados($ExhortosgeneradosDto) {
            $ExhortosgeneradosDto = $this->validarExhortosgenerados($ExhortosgeneradosDto);
            $ExhortosgeneradosController = new ExhortosgeneradosController();
            $ExhortosgeneradosDto = $ExhortosgeneradosController->selectExhortosgenerados($ExhortosgeneradosDto);
            if ($ExhortosgeneradosDto != "") {
                $dtoToJson = new DtoToJson($ExhortosgeneradosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertExhortosgenerados($ExhortosgeneradosDto) {
            $ExhortosgeneradosDto = $this->validarExhortosgenerados($ExhortosgeneradosDto);
            $ExhortosgeneradosController = new ExhortosgeneradosController();
            $ExhortosgeneradosDto = $ExhortosgeneradosController->insertExhortosgenerados($ExhortosgeneradosDto);
            if ($ExhortosgeneradosDto != "") {
                $dtoToJson = new DtoToJson($ExhortosgeneradosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateExhortosgenerados($ExhortosgeneradosDto) {
            $ExhortosgeneradosDto = $this->validarExhortosgenerados($ExhortosgeneradosDto);
            $ExhortosgeneradosController = new ExhortosgeneradosController();
            $ExhortosgeneradosDto = $ExhortosgeneradosController->updateExhortosgenerados($ExhortosgeneradosDto);
            if ($ExhortosgeneradosDto != "") {
                $dtoToJson = new DtoToJson($ExhortosgeneradosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteExhortosgenerados($ExhortosgeneradosDto) {
            $ExhortosgeneradosDto = $this->validarExhortosgenerados($ExhortosgeneradosDto);
            $ExhortosgeneradosController = new ExhortosgeneradosController();
            $ExhortosgeneradosDto = $ExhortosgeneradosController->deleteExhortosgenerados($ExhortosgeneradosDto);
            if ($ExhortosgeneradosDto == true) {
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

    @$idExhortoGenerado = $_POST["idExhortoGenerado"];
    @$idActuacion = $_POST["idActuacion"];
    @$idExhorto = $_POST["idExhorto"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $exhortosgeneradosFacade = new ExhortosgeneradosFacade();
    $exhortosgeneradosDto = new ExhortosgeneradosDTO();

    $exhortosgeneradosDto->setIdExhortoGenerado($idExhortoGenerado);
    $exhortosgeneradosDto->setIdActuacion($idActuacion);
    $exhortosgeneradosDto->setIdExhorto($idExhorto);
    $exhortosgeneradosDto->setFechaRegistro($fechaRegistro);
    $exhortosgeneradosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idExhortoGenerado == "")) {
        $exhortosgeneradosDto = $exhortosgeneradosFacade->insertExhortosgenerados($exhortosgeneradosDto);
        echo $exhortosgeneradosDto;
    } else if (($accion == "guardar") && ($idExhortoGenerado != "")) {
        $exhortosgeneradosDto = $exhortosgeneradosFacade->updateExhortosgenerados($exhortosgeneradosDto);
        echo $exhortosgeneradosDto;
    } else if ($accion == "consultar") {
        $exhortosgeneradosDto = $exhortosgeneradosFacade->selectExhortosgenerados($exhortosgeneradosDto);
        echo $exhortosgeneradosDto;
    } else if (($accion == "baja") && ($idExhortoGenerado != "")) {
        $exhortosgeneradosDto = $exhortosgeneradosFacade->deleteExhortosgenerados($exhortosgeneradosDto);
        echo $exhortosgeneradosDto;
    } else if (($accion == "seleccionar") && ($idExhortoGenerado != "")) {
        $exhortosgeneradosDto = $exhortosgeneradosFacade->selectExhortosgenerados($exhortosgeneradosDto);
        echo $exhortosgeneradosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>