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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatus/EstatusController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatusFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatus($EstatusDto) {
            $EstatusDto->setcveEstatus(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getcveEstatus(), "utf8") : strtoupper($EstatusDto->getcveEstatus()))))));
            if ($this->esFecha($EstatusDto->getcveEstatus())) {
                $EstatusDto->setcveEstatus($this->fechaMysql($EstatusDto->getcveEstatus()));
            }
            $EstatusDto->setdescEstatus(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getdescEstatus(), "utf8") : strtoupper($EstatusDto->getdescEstatus()))))));
            if ($this->esFecha($EstatusDto->getdescEstatus())) {
                $EstatusDto->setdescEstatus($this->fechaMysql($EstatusDto->getdescEstatus()));
            }
            $EstatusDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getactivo(), "utf8") : strtoupper($EstatusDto->getactivo()))))));
            if ($this->esFecha($EstatusDto->getactivo())) {
                $EstatusDto->setactivo($this->fechaMysql($EstatusDto->getactivo()));
            }
            $EstatusDto->setcveTipoEstatus(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getcveTipoEstatus(), "utf8") : strtoupper($EstatusDto->getcveTipoEstatus()))))));
            if ($this->esFecha($EstatusDto->getcveTipoEstatus())) {
                $EstatusDto->setcveTipoEstatus($this->fechaMysql($EstatusDto->getcveTipoEstatus()));
            }
            $EstatusDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getfechaActualizacion(), "utf8") : strtoupper($EstatusDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatusDto->getfechaActualizacion())) {
                $EstatusDto->setfechaActualizacion($this->fechaMysql($EstatusDto->getfechaActualizacion()));
            }
            $EstatusDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatusDto->getfechaRegistro(), "utf8") : strtoupper($EstatusDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatusDto->getfechaRegistro())) {
                $EstatusDto->setfechaRegistro($this->fechaMysql($EstatusDto->getfechaRegistro()));
            }
            return $EstatusDto;
        }

        public function selectEstatus($EstatusDto) {
            $EstatusDto = $this->validarEstatus($EstatusDto);
            $EstatusController = new EstatusController();
            $EstatusDto = $EstatusController->selectEstatus($EstatusDto);
            if ($EstatusDto != "") {
                $dtoToJson = new DtoToJson($EstatusDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatus($EstatusDto) {
            $EstatusDto = $this->validarEstatus($EstatusDto);
            $EstatusController = new EstatusController();
            $EstatusDto = $EstatusController->insertEstatus($EstatusDto);
            if ($EstatusDto != "") {
                $dtoToJson = new DtoToJson($EstatusDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatus($EstatusDto) {
            $EstatusDto = $this->validarEstatus($EstatusDto);
            $EstatusController = new EstatusController();
            $EstatusDto = $EstatusController->updateEstatus($EstatusDto);
            if ($EstatusDto != "") {
                $dtoToJson = new DtoToJson($EstatusDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatus($EstatusDto) {
            $EstatusDto = $this->validarEstatus($EstatusDto);
            $EstatusController = new EstatusController();
            $EstatusDto = $EstatusController->deleteEstatus($EstatusDto);
            if ($EstatusDto == true) {
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

    @$cveEstatus = $_POST["cveEstatus"];
    @$descEstatus = $_POST["descEstatus"];
    @$activo = $_POST["activo"];
    @$cveTipoEstatus = $_POST["cveTipoEstatus"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$accion = $_POST["accion"];

    $estatusFacade = new EstatusFacade();
    $estatusDto = new EstatusDTO();

    $estatusDto->setCveEstatus($cveEstatus);
    $estatusDto->setDescEstatus($descEstatus);
    $estatusDto->setActivo($activo);
    $estatusDto->setCveTipoEstatus($cveTipoEstatus);
    $estatusDto->setFechaActualizacion($fechaActualizacion);
    $estatusDto->setFechaRegistro($fechaRegistro);

    if (($accion == "guardar") && ($cveEstatus == "")) {
        $estatusDto = $estatusFacade->insertEstatus($estatusDto);
        echo $estatusDto;
    } else if (($accion == "guardar") && ($cveEstatus != "")) {
        $estatusDto = $estatusFacade->updateEstatus($estatusDto);
        echo $estatusDto;
    } else if ($accion == "consultar") {
        $estatusDto = $estatusFacade->selectEstatus($estatusDto);
        echo $estatusDto;
    } else if (($accion == "baja") && ($cveEstatus != "")) {
        $estatusDto = $estatusFacade->deleteEstatus($estatusDto);
        echo $estatusDto;
    } else if (($accion == "seleccionar") && ($cveEstatus != "")) {
        $estatusDto = $estatusFacade->selectEstatus($estatusDto);
        echo $estatusDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>