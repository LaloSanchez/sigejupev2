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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatussolicitudes/EstatussolicitudesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatussolicitudesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatussolicitudes($EstatussolicitudesDto) {
            $EstatussolicitudesDto->setcveEstatusSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesDto->getcveEstatusSolicitud(), "utf8") : strtoupper($EstatussolicitudesDto->getcveEstatusSolicitud()))))));
            if ($this->esFecha($EstatussolicitudesDto->getcveEstatusSolicitud())) {
                $EstatussolicitudesDto->setcveEstatusSolicitud($this->fechaMysql($EstatussolicitudesDto->getcveEstatusSolicitud()));
            }
            $EstatussolicitudesDto->setdesEstatusSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesDto->getdesEstatusSolicitud(), "utf8") : strtoupper($EstatussolicitudesDto->getdesEstatusSolicitud()))))));
            if ($this->esFecha($EstatussolicitudesDto->getdesEstatusSolicitud())) {
                $EstatussolicitudesDto->setdesEstatusSolicitud($this->fechaMysql($EstatussolicitudesDto->getdesEstatusSolicitud()));
            }
            $EstatussolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesDto->getactivo(), "utf8") : strtoupper($EstatussolicitudesDto->getactivo()))))));
            if ($this->esFecha($EstatussolicitudesDto->getactivo())) {
                $EstatussolicitudesDto->setactivo($this->fechaMysql($EstatussolicitudesDto->getactivo()));
            }
            $EstatussolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesDto->getfechaRegistro(), "utf8") : strtoupper($EstatussolicitudesDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatussolicitudesDto->getfechaRegistro())) {
                $EstatussolicitudesDto->setfechaRegistro($this->fechaMysql($EstatussolicitudesDto->getfechaRegistro()));
            }
            $EstatussolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesDto->getfechaActualizacion(), "utf8") : strtoupper($EstatussolicitudesDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatussolicitudesDto->getfechaActualizacion())) {
                $EstatussolicitudesDto->setfechaActualizacion($this->fechaMysql($EstatussolicitudesDto->getfechaActualizacion()));
            }
            return $EstatussolicitudesDto;
        }

        public function selectEstatussolicitudes($EstatussolicitudesDto) {
            $EstatussolicitudesDto = $this->validarEstatussolicitudes($EstatussolicitudesDto);
            $EstatussolicitudesController = new EstatussolicitudesController();
            $EstatussolicitudesDto = $EstatussolicitudesController->selectEstatussolicitudes($EstatussolicitudesDto);
            if ($EstatussolicitudesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatussolicitudes($EstatussolicitudesDto) {
            $EstatussolicitudesDto = $this->validarEstatussolicitudes($EstatussolicitudesDto);
            $EstatussolicitudesController = new EstatussolicitudesController();
            $EstatussolicitudesDto = $EstatussolicitudesController->insertEstatussolicitudes($EstatussolicitudesDto);
            if ($EstatussolicitudesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatussolicitudes($EstatussolicitudesDto) {
            $EstatussolicitudesDto = $this->validarEstatussolicitudes($EstatussolicitudesDto);
            $EstatussolicitudesController = new EstatussolicitudesController();
            $EstatussolicitudesDto = $EstatussolicitudesController->updateEstatussolicitudes($EstatussolicitudesDto);
            if ($EstatussolicitudesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatussolicitudes($EstatussolicitudesDto) {
            $EstatussolicitudesDto = $this->validarEstatussolicitudes($EstatussolicitudesDto);
            $EstatussolicitudesController = new EstatussolicitudesController();
            $EstatussolicitudesDto = $EstatussolicitudesController->deleteEstatussolicitudes($EstatussolicitudesDto);
            if ($EstatussolicitudesDto == true) {
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

    @$cveEstatusSolicitud = $_POST["cveEstatusSolicitud"];
    @$desEstatusSolicitud = $_POST["desEstatusSolicitud"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatussolicitudesFacade = new EstatussolicitudesFacade();
    $estatussolicitudesDto = new EstatussolicitudesDTO();

    $estatussolicitudesDto->setCveEstatusSolicitud($cveEstatusSolicitud);
    $estatussolicitudesDto->setDesEstatusSolicitud($desEstatusSolicitud);
    $estatussolicitudesDto->setActivo($activo);
    $estatussolicitudesDto->setFechaRegistro($fechaRegistro);
    $estatussolicitudesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusSolicitud == "")) {
        $estatussolicitudesDto = $estatussolicitudesFacade->insertEstatussolicitudes($estatussolicitudesDto);
        echo $estatussolicitudesDto;
    } else if (($accion == "guardar") && ($cveEstatusSolicitud != "")) {
        $estatussolicitudesDto = $estatussolicitudesFacade->updateEstatussolicitudes($estatussolicitudesDto);
        echo $estatussolicitudesDto;
    } else if ($accion == "consultar") {
        $estatussolicitudesDto = $estatussolicitudesFacade->selectEstatussolicitudes($estatussolicitudesDto);
        echo $estatussolicitudesDto;
    } else if (($accion == "baja") && ($cveEstatusSolicitud != "")) {
        $estatussolicitudesDto = $estatussolicitudesFacade->deleteEstatussolicitudes($estatussolicitudesDto);
        echo $estatussolicitudesDto;
    } else if (($accion == "seleccionar") && ($cveEstatusSolicitud != "")) {
        $estatussolicitudesDto = $estatussolicitudesFacade->selectEstatussolicitudes($estatussolicitudesDto);
        echo $estatussolicitudesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>