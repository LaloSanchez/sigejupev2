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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusnotificaciones/EstatusnotificacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatusnotificaciones/EstatusnotificacionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatusnotificacionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatusnotificaciones($EstatusnotificacionesDto) {
            $EstatusnotificacionesDto->setcveEstatusNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusnotificacionesDto->getcveEstatusNotificacion(), "utf8") : strtoupper($EstatusnotificacionesDto->getcveEstatusNotificacion()))))));
            if ($this->esFecha($EstatusnotificacionesDto->getcveEstatusNotificacion())) {
                $EstatusnotificacionesDto->setcveEstatusNotificacion($this->fechaMysql($EstatusnotificacionesDto->getcveEstatusNotificacion()));
            }
            $EstatusnotificacionesDto->setdesEstatusNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusnotificacionesDto->getdesEstatusNotificacion(), "utf8") : strtoupper($EstatusnotificacionesDto->getdesEstatusNotificacion()))))));
            if ($this->esFecha($EstatusnotificacionesDto->getdesEstatusNotificacion())) {
                $EstatusnotificacionesDto->setdesEstatusNotificacion($this->fechaMysql($EstatusnotificacionesDto->getdesEstatusNotificacion()));
            }
            $EstatusnotificacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusnotificacionesDto->getactivo(), "utf8") : strtoupper($EstatusnotificacionesDto->getactivo()))))));
            if ($this->esFecha($EstatusnotificacionesDto->getactivo())) {
                $EstatusnotificacionesDto->setactivo($this->fechaMysql($EstatusnotificacionesDto->getactivo()));
            }
            $EstatusnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusnotificacionesDto->getfechaRegistro(), "utf8") : strtoupper($EstatusnotificacionesDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatusnotificacionesDto->getfechaRegistro())) {
                $EstatusnotificacionesDto->setfechaRegistro($this->fechaMysql($EstatusnotificacionesDto->getfechaRegistro()));
            }
            $EstatusnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusnotificacionesDto->getfechaActualizacion(), "utf8") : strtoupper($EstatusnotificacionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatusnotificacionesDto->getfechaActualizacion())) {
                $EstatusnotificacionesDto->setfechaActualizacion($this->fechaMysql($EstatusnotificacionesDto->getfechaActualizacion()));
            }
            return $EstatusnotificacionesDto;
        }

        public function selectEstatusnotificaciones($EstatusnotificacionesDto) {
            $EstatusnotificacionesDto = $this->validarEstatusnotificaciones($EstatusnotificacionesDto);
            $EstatusnotificacionesController = new EstatusnotificacionesController();
            $EstatusnotificacionesDto = $EstatusnotificacionesController->selectEstatusnotificaciones($EstatusnotificacionesDto);
            if ($EstatusnotificacionesDto != "") {
                $dtoToJson = new DtoToJson($EstatusnotificacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatusnotificaciones($EstatusnotificacionesDto) {
            $EstatusnotificacionesDto = $this->validarEstatusnotificaciones($EstatusnotificacionesDto);
            $EstatusnotificacionesController = new EstatusnotificacionesController();
            $EstatusnotificacionesDto = $EstatusnotificacionesController->insertEstatusnotificaciones($EstatusnotificacionesDto);
            if ($EstatusnotificacionesDto != "") {
                $dtoToJson = new DtoToJson($EstatusnotificacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatusnotificaciones($EstatusnotificacionesDto) {
            $EstatusnotificacionesDto = $this->validarEstatusnotificaciones($EstatusnotificacionesDto);
            $EstatusnotificacionesController = new EstatusnotificacionesController();
            $EstatusnotificacionesDto = $EstatusnotificacionesController->updateEstatusnotificaciones($EstatusnotificacionesDto);
            if ($EstatusnotificacionesDto != "") {
                $dtoToJson = new DtoToJson($EstatusnotificacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatusnotificaciones($EstatusnotificacionesDto) {
            $EstatusnotificacionesDto = $this->validarEstatusnotificaciones($EstatusnotificacionesDto);
            $EstatusnotificacionesController = new EstatusnotificacionesController();
            $EstatusnotificacionesDto = $EstatusnotificacionesController->deleteEstatusnotificaciones($EstatusnotificacionesDto);
            if ($EstatusnotificacionesDto == true) {
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

    @$cveEstatusNotificacion = $_POST["cveEstatusNotificacion"];
    @$desEstatusNotificacion = $_POST["desEstatusNotificacion"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatusnotificacionesFacade = new EstatusnotificacionesFacade();
    $estatusnotificacionesDto = new EstatusnotificacionesDTO();

    $estatusnotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
    $estatusnotificacionesDto->setDesEstatusNotificacion($desEstatusNotificacion);
    $estatusnotificacionesDto->setActivo($activo);
    $estatusnotificacionesDto->setFechaRegistro($fechaRegistro);
    $estatusnotificacionesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusNotificacion == "")) {
        $estatusnotificacionesDto = $estatusnotificacionesFacade->insertEstatusnotificaciones($estatusnotificacionesDto);
        echo $estatusnotificacionesDto;
    } else if (($accion == "guardar") && ($cveEstatusNotificacion != "")) {
        $estatusnotificacionesDto = $estatusnotificacionesFacade->updateEstatusnotificaciones($estatusnotificacionesDto);
        echo $estatusnotificacionesDto;
    } else if ($accion == "consultar") {
        $estatusnotificacionesDto = $estatusnotificacionesFacade->selectEstatusnotificaciones($estatusnotificacionesDto);
        echo $estatusnotificacionesDto;
    } else if (($accion == "baja") && ($cveEstatusNotificacion != "")) {
        $estatusnotificacionesDto = $estatusnotificacionesFacade->deleteEstatusnotificaciones($estatusnotificacionesDto);
        echo $estatusnotificacionesDto;
    } else if (($accion == "seleccionar") && ($cveEstatusNotificacion != "")) {
        $estatusnotificacionesDto = $estatusnotificacionesFacade->selectEstatusnotificaciones($estatusnotificacionesDto);
        echo $estatusnotificacionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>