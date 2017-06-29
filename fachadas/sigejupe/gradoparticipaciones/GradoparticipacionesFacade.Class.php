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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gradoparticipaciones/GradoparticipacionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class GradoparticipacionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGradoparticipaciones($GradoparticipacionesDto) {
            $GradoparticipacionesDto->setcveGradoParticipacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GradoparticipacionesDto->getcveGradoParticipacion(), "utf8") : strtoupper($GradoparticipacionesDto->getcveGradoParticipacion()))))));
            if ($this->esFecha($GradoparticipacionesDto->getcveGradoParticipacion())) {
                $GradoparticipacionesDto->setcveGradoParticipacion($this->fechaMysql($GradoparticipacionesDto->getcveGradoParticipacion()));
            }
            $GradoparticipacionesDto->setdesGradoParticipacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GradoparticipacionesDto->getdesGradoParticipacion(), "utf8") : strtoupper($GradoparticipacionesDto->getdesGradoParticipacion()))))));
            if ($this->esFecha($GradoparticipacionesDto->getdesGradoParticipacion())) {
                $GradoparticipacionesDto->setdesGradoParticipacion($this->fechaMysql($GradoparticipacionesDto->getdesGradoParticipacion()));
            }
            $GradoparticipacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GradoparticipacionesDto->getactivo(), "utf8") : strtoupper($GradoparticipacionesDto->getactivo()))))));
            if ($this->esFecha($GradoparticipacionesDto->getactivo())) {
                $GradoparticipacionesDto->setactivo($this->fechaMysql($GradoparticipacionesDto->getactivo()));
            }
            $GradoparticipacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GradoparticipacionesDto->getfechaRegistro(), "utf8") : strtoupper($GradoparticipacionesDto->getfechaRegistro()))))));
            if ($this->esFecha($GradoparticipacionesDto->getfechaRegistro())) {
                $GradoparticipacionesDto->setfechaRegistro($this->fechaMysql($GradoparticipacionesDto->getfechaRegistro()));
            }
            $GradoparticipacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GradoparticipacionesDto->getfechaActualizacion(), "utf8") : strtoupper($GradoparticipacionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($GradoparticipacionesDto->getfechaActualizacion())) {
                $GradoparticipacionesDto->setfechaActualizacion($this->fechaMysql($GradoparticipacionesDto->getfechaActualizacion()));
            }
            return $GradoparticipacionesDto;
        }

        public function selectGradoparticipaciones($GradoparticipacionesDto) {
            $GradoparticipacionesDto = $this->validarGradoparticipaciones($GradoparticipacionesDto);
            $GradoparticipacionesController = new GradoparticipacionesController();
            $GradoparticipacionesDto = $GradoparticipacionesController->selectGradoparticipaciones($GradoparticipacionesDto);
            if ($GradoparticipacionesDto != "") {
                $dtoToJson = new DtoToJson($GradoparticipacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertGradoparticipaciones($GradoparticipacionesDto) {
            $GradoparticipacionesDto = $this->validarGradoparticipaciones($GradoparticipacionesDto);
            $GradoparticipacionesController = new GradoparticipacionesController();
            $GradoparticipacionesDto = $GradoparticipacionesController->insertGradoparticipaciones($GradoparticipacionesDto);
            if ($GradoparticipacionesDto != "") {
                $dtoToJson = new DtoToJson($GradoparticipacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGradoparticipaciones($GradoparticipacionesDto) {
            $GradoparticipacionesDto = $this->validarGradoparticipaciones($GradoparticipacionesDto);
            $GradoparticipacionesController = new GradoparticipacionesController();
            $GradoparticipacionesDto = $GradoparticipacionesController->updateGradoparticipaciones($GradoparticipacionesDto);
            if ($GradoparticipacionesDto != "") {
                $dtoToJson = new DtoToJson($GradoparticipacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGradoparticipaciones($GradoparticipacionesDto) {
            $GradoparticipacionesDto = $this->validarGradoparticipaciones($GradoparticipacionesDto);
            $GradoparticipacionesController = new GradoparticipacionesController();
            $GradoparticipacionesDto = $GradoparticipacionesController->deleteGradoparticipaciones($GradoparticipacionesDto);
            if ($GradoparticipacionesDto == true) {
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

    @$cveGradoParticipacion = $_POST["cveGradoParticipacion"];
    @$desGradoParticipacion = $_POST["desGradoParticipacion"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gradoparticipacionesFacade = new GradoparticipacionesFacade();
    $gradoparticipacionesDto = new GradoparticipacionesDTO();

    $gradoparticipacionesDto->setCveGradoParticipacion($cveGradoParticipacion);
    $gradoparticipacionesDto->setDesGradoParticipacion($desGradoParticipacion);
    $gradoparticipacionesDto->setActivo($activo);
    $gradoparticipacionesDto->setFechaRegistro($fechaRegistro);
    $gradoparticipacionesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGradoParticipacion == "")) {
        $gradoparticipacionesDto = $gradoparticipacionesFacade->insertGradoparticipaciones($gradoparticipacionesDto);
        echo $gradoparticipacionesDto;
    } else if (($accion == "guardar") && ($cveGradoParticipacion != "")) {
        $gradoparticipacionesDto = $gradoparticipacionesFacade->updateGradoparticipaciones($gradoparticipacionesDto);
        echo $gradoparticipacionesDto;
    } else if ($accion == "consultar") {
        $gradoparticipacionesDto = $gradoparticipacionesFacade->selectGradoparticipaciones($gradoparticipacionesDto);
        echo $gradoparticipacionesDto;
    } else if (($accion == "baja") && ($cveGradoParticipacion != "")) {
        $gradoparticipacionesDto = $gradoparticipacionesFacade->deleteGradoparticipaciones($gradoparticipacionesDto);
        echo $gradoparticipacionesDto;
    } else if (($accion == "seleccionar") && ($cveGradoParticipacion != "")) {
        $gradoparticipacionesDto = $gradoparticipacionesFacade->selectGradoparticipaciones($gradoparticipacionesDto);
        echo $gradoparticipacionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>