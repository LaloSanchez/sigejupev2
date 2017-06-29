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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatussolicitudescateos/EstatussolicitudescateosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatussolicitudescateosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatussolicitudescateos($EstatussolicitudescateosDto) {
            $EstatussolicitudescateosDto->setcveEstatusSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudescateosDto->getcveEstatusSolicitudCateo(), "utf8") : strtoupper($EstatussolicitudescateosDto->getcveEstatusSolicitudCateo()))))));
            if ($this->esFecha($EstatussolicitudescateosDto->getcveEstatusSolicitudCateo())) {
                $EstatussolicitudescateosDto->setcveEstatusSolicitudCateo($this->fechaMysql($EstatussolicitudescateosDto->getcveEstatusSolicitudCateo()));
            }
            $EstatussolicitudescateosDto->setdesEstatusSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudescateosDto->getdesEstatusSolicitudCateo(), "utf8") : strtoupper($EstatussolicitudescateosDto->getdesEstatusSolicitudCateo()))))));
            if ($this->esFecha($EstatussolicitudescateosDto->getdesEstatusSolicitudCateo())) {
                $EstatussolicitudescateosDto->setdesEstatusSolicitudCateo($this->fechaMysql($EstatussolicitudescateosDto->getdesEstatusSolicitudCateo()));
            }
            $EstatussolicitudescateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudescateosDto->getactivo(), "utf8") : strtoupper($EstatussolicitudescateosDto->getactivo()))))));
            if ($this->esFecha($EstatussolicitudescateosDto->getactivo())) {
                $EstatussolicitudescateosDto->setactivo($this->fechaMysql($EstatussolicitudescateosDto->getactivo()));
            }
            $EstatussolicitudescateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudescateosDto->getfechaRegistro(), "utf8") : strtoupper($EstatussolicitudescateosDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatussolicitudescateosDto->getfechaRegistro())) {
                $EstatussolicitudescateosDto->setfechaRegistro($this->fechaMysql($EstatussolicitudescateosDto->getfechaRegistro()));
            }
            $EstatussolicitudescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudescateosDto->getfechaActualizacion(), "utf8") : strtoupper($EstatussolicitudescateosDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatussolicitudescateosDto->getfechaActualizacion())) {
                $EstatussolicitudescateosDto->setfechaActualizacion($this->fechaMysql($EstatussolicitudescateosDto->getfechaActualizacion()));
            }
            return $EstatussolicitudescateosDto;
        }

        public function selectEstatussolicitudescateos($EstatussolicitudescateosDto, $orden) {
            $EstatussolicitudescateosDto = $this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
            $EstatussolicitudescateosController = new EstatussolicitudescateosController();
            $EstatussolicitudescateosDto = $EstatussolicitudescateosController->selectEstatussolicitudescateos($EstatussolicitudescateosDto, null, $orden);
            if ($EstatussolicitudescateosDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudescateosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatussolicitudescateos($EstatussolicitudescateosDto) {
            $EstatussolicitudescateosDto = $this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
            $EstatussolicitudescateosController = new EstatussolicitudescateosController();
            $EstatussolicitudescateosDto = $EstatussolicitudescateosController->insertEstatussolicitudescateos($EstatussolicitudescateosDto);
            if ($EstatussolicitudescateosDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudescateosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatussolicitudescateos($EstatussolicitudescateosDto) {
            $EstatussolicitudescateosDto = $this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
            $EstatussolicitudescateosController = new EstatussolicitudescateosController();
            $EstatussolicitudescateosDto = $EstatussolicitudescateosController->updateEstatussolicitudescateos($EstatussolicitudescateosDto);
            if ($EstatussolicitudescateosDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudescateosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatussolicitudescateos($EstatussolicitudescateosDto) {
            $EstatussolicitudescateosDto = $this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
            $EstatussolicitudescateosController = new EstatussolicitudescateosController();
            $EstatussolicitudescateosDto = $EstatussolicitudescateosController->deleteEstatussolicitudescateos($EstatussolicitudescateosDto);
            if ($EstatussolicitudescateosDto == true) {
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

    @$cveEstatusSolicitudCateo = $_POST["cveEstatusSolicitudCateo"];
    @$desEstatusSolicitudCateo = $_POST["desEstatusSolicitudCateo"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];
    @$orden = $_POST["orden"];

    $estatussolicitudescateosFacade = new EstatussolicitudescateosFacade();
    $estatussolicitudescateosDto = new EstatussolicitudescateosDTO();

    $estatussolicitudescateosDto->setCveEstatusSolicitudCateo($cveEstatusSolicitudCateo);
    $estatussolicitudescateosDto->setDesEstatusSolicitudCateo($desEstatusSolicitudCateo);
    $estatussolicitudescateosDto->setActivo($activo);
    $estatussolicitudescateosDto->setFechaRegistro($fechaRegistro);
    $estatussolicitudescateosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusSolicitudCateo == "")) {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->insertEstatussolicitudescateos($estatussolicitudescateosDto);
        echo $estatussolicitudescateosDto;
    } else if (($accion == "guardar") && ($cveEstatusSolicitudCateo != "")) {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->updateEstatussolicitudescateos($estatussolicitudescateosDto);
        echo $estatussolicitudescateosDto;
    } else if ($accion == "consultar") {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->selectEstatussolicitudescateos($estatussolicitudescateosDto);
        echo $estatussolicitudescateosDto;
    } else if (($accion == "baja") && ($cveEstatusSolicitudCateo != "")) {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->deleteEstatussolicitudescateos($estatussolicitudescateosDto);
        echo $estatussolicitudescateosDto;
    } else if (($accion == "seleccionar") && ($cveEstatusSolicitudCateo != "")) {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->selectEstatussolicitudescateos($estatussolicitudescateosDto);
        echo $estatussolicitudescateosDto;
    } else if ($accion == "consultarOrdenado") {
        $estatussolicitudescateosDto = $estatussolicitudescateosFacade->selectEstatussolicitudescateos($estatussolicitudescateosDto, $orden);
        echo $estatussolicitudescateosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>