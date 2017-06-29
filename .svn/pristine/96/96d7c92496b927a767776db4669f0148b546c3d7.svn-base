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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatussolicitudesmuestras/EstatussolicitudesmuestrasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatussolicitudesmuestrasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto) {
            $EstatussolicitudesmuestrasDto->setcveEstatusSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesmuestrasDto->getcveEstatusSolicitudMuestra(), "utf8") : strtoupper($EstatussolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()))))));
            if ($this->esFecha($EstatussolicitudesmuestrasDto->getcveEstatusSolicitudMuestra())) {
                $EstatussolicitudesmuestrasDto->setcveEstatusSolicitudMuestra($this->fechaMysql($EstatussolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()));
            }
            $EstatussolicitudesmuestrasDto->setdesEstatusSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesmuestrasDto->getdesEstatusSolicitudMuestra(), "utf8") : strtoupper($EstatussolicitudesmuestrasDto->getdesEstatusSolicitudMuestra()))))));
            if ($this->esFecha($EstatussolicitudesmuestrasDto->getdesEstatusSolicitudMuestra())) {
                $EstatussolicitudesmuestrasDto->setdesEstatusSolicitudMuestra($this->fechaMysql($EstatussolicitudesmuestrasDto->getdesEstatusSolicitudMuestra()));
            }
            $EstatussolicitudesmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesmuestrasDto->getactivo(), "utf8") : strtoupper($EstatussolicitudesmuestrasDto->getactivo()))))));
            if ($this->esFecha($EstatussolicitudesmuestrasDto->getactivo())) {
                $EstatussolicitudesmuestrasDto->setactivo($this->fechaMysql($EstatussolicitudesmuestrasDto->getactivo()));
            }
            $EstatussolicitudesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesmuestrasDto->getfechaRegistro(), "utf8") : strtoupper($EstatussolicitudesmuestrasDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatussolicitudesmuestrasDto->getfechaRegistro())) {
                $EstatussolicitudesmuestrasDto->setfechaRegistro($this->fechaMysql($EstatussolicitudesmuestrasDto->getfechaRegistro()));
            }
            $EstatussolicitudesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesmuestrasDto->getfechaActualizacion(), "utf8") : strtoupper($EstatussolicitudesmuestrasDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatussolicitudesmuestrasDto->getfechaActualizacion())) {
                $EstatussolicitudesmuestrasDto->setfechaActualizacion($this->fechaMysql($EstatussolicitudesmuestrasDto->getfechaActualizacion()));
            }
            return $EstatussolicitudesmuestrasDto;
        }

        public function selectEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto) {
            $EstatussolicitudesmuestrasDto = $this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            $EstatussolicitudesmuestrasController = new EstatussolicitudesmuestrasController();
            $EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasController->selectEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            if ($EstatussolicitudesmuestrasDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesmuestrasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto) {
            $EstatussolicitudesmuestrasDto = $this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            $EstatussolicitudesmuestrasController = new EstatussolicitudesmuestrasController();
            $EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasController->insertEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            if ($EstatussolicitudesmuestrasDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesmuestrasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto) {
            $EstatussolicitudesmuestrasDto = $this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            $EstatussolicitudesmuestrasController = new EstatussolicitudesmuestrasController();
            $EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasController->updateEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            if ($EstatussolicitudesmuestrasDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesmuestrasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto) {
            $EstatussolicitudesmuestrasDto = $this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            $EstatussolicitudesmuestrasController = new EstatussolicitudesmuestrasController();
            $EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasController->deleteEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
            if ($EstatussolicitudesmuestrasDto == true) {
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

    @$cveEstatusSolicitudMuestra = $_POST["cveEstatusSolicitudMuestra"];
    @$desEstatusSolicitudMuestra = $_POST["desEstatusSolicitudMuestra"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $estatussolicitudesmuestrasFacade = new EstatussolicitudesmuestrasFacade();
    $estatussolicitudesmuestrasDto = new EstatussolicitudesmuestrasDTO();

    $estatussolicitudesmuestrasDto->setCveEstatusSolicitudMuestra($cveEstatusSolicitudMuestra);
    $estatussolicitudesmuestrasDto->setDesEstatusSolicitudMuestra($desEstatusSolicitudMuestra);
    $estatussolicitudesmuestrasDto->setActivo($activo);
    $estatussolicitudesmuestrasDto->setFechaRegistro($fechaRegistro);
    $estatussolicitudesmuestrasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusSolicitudMuestra == "")) {
        $estatussolicitudesmuestrasDto = $estatussolicitudesmuestrasFacade->insertEstatussolicitudesmuestras($estatussolicitudesmuestrasDto);
        echo $estatussolicitudesmuestrasDto;
    } else if (($accion == "guardar") && ($cveEstatusSolicitudMuestra != "")) {
        $estatussolicitudesmuestrasDto = $estatussolicitudesmuestrasFacade->updateEstatussolicitudesmuestras($estatussolicitudesmuestrasDto);
        echo $estatussolicitudesmuestrasDto;
    } else if ($accion == "consultar") {
        $estatussolicitudesmuestrasDto = $estatussolicitudesmuestrasFacade->selectEstatussolicitudesmuestras($estatussolicitudesmuestrasDto);
        echo $estatussolicitudesmuestrasDto;
    } else if (($accion == "baja") && ($cveEstatusSolicitudMuestra != "")) {
        $estatussolicitudesmuestrasDto = $estatussolicitudesmuestrasFacade->deleteEstatussolicitudesmuestras($estatussolicitudesmuestrasDto);
        echo $estatussolicitudesmuestrasDto;
    } else if (($accion == "seleccionar") && ($cveEstatusSolicitudMuestra != "")) {
        $estatussolicitudesmuestrasDto = $estatussolicitudesmuestrasFacade->selectEstatussolicitudesmuestras($estatussolicitudesmuestrasDto);
        echo $estatussolicitudesmuestrasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>