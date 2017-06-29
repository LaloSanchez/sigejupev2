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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatussolicitudesordenes/EstatussolicitudesordenesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EstatussolicitudesordenesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEstatussolicitudesordenes($EstatussolicitudesordenesDto) {
            $EstatussolicitudesordenesDto->setcveEstatusSolicitudOrdenes(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesordenesDto->getcveEstatusSolicitudOrdenes(), "utf8") : strtoupper($EstatussolicitudesordenesDto->getcveEstatusSolicitudOrdenes()))))));
            if ($this->esFecha($EstatussolicitudesordenesDto->getcveEstatusSolicitudOrdenes())) {
                $EstatussolicitudesordenesDto->setcveEstatusSolicitudOrdenes($this->fechaMysql($EstatussolicitudesordenesDto->getcveEstatusSolicitudOrdenes()));
            }
            $EstatussolicitudesordenesDto->setdesEstatusSolicitudOrdenes(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesordenesDto->getdesEstatusSolicitudOrdenes(), "utf8") : strtoupper($EstatussolicitudesordenesDto->getdesEstatusSolicitudOrdenes()))))));
            if ($this->esFecha($EstatussolicitudesordenesDto->getdesEstatusSolicitudOrdenes())) {
                $EstatussolicitudesordenesDto->setdesEstatusSolicitudOrdenes($this->fechaMysql($EstatussolicitudesordenesDto->getdesEstatusSolicitudOrdenes()));
            }
            $EstatussolicitudesordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesordenesDto->getactivo(), "utf8") : strtoupper($EstatussolicitudesordenesDto->getactivo()))))));
            if ($this->esFecha($EstatussolicitudesordenesDto->getactivo())) {
                $EstatussolicitudesordenesDto->setactivo($this->fechaMysql($EstatussolicitudesordenesDto->getactivo()));
            }
            $EstatussolicitudesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesordenesDto->getfechaRegistro(), "utf8") : strtoupper($EstatussolicitudesordenesDto->getfechaRegistro()))))));
            if ($this->esFecha($EstatussolicitudesordenesDto->getfechaRegistro())) {
                $EstatussolicitudesordenesDto->setfechaRegistro($this->fechaMysql($EstatussolicitudesordenesDto->getfechaRegistro()));
            }
            $EstatussolicitudesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EstatussolicitudesordenesDto->getfechaActualizacion(), "utf8") : strtoupper($EstatussolicitudesordenesDto->getfechaActualizacion()))))));
            if ($this->esFecha($EstatussolicitudesordenesDto->getfechaActualizacion())) {
                $EstatussolicitudesordenesDto->setfechaActualizacion($this->fechaMysql($EstatussolicitudesordenesDto->getfechaActualizacion()));
            }
            return $EstatussolicitudesordenesDto;
        }

        public function selectEstatussolicitudesordenes($EstatussolicitudesordenesDto, $orden) {
            $EstatussolicitudesordenesDto = $this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            $EstatussolicitudesordenesController = new EstatussolicitudesordenesController();
            $EstatussolicitudesordenesDto = $EstatussolicitudesordenesController->selectEstatussolicitudesordenes($EstatussolicitudesordenesDto, null, $orden);
            if ($EstatussolicitudesordenesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesordenesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEstatussolicitudesordenes($EstatussolicitudesordenesDto) {
            $EstatussolicitudesordenesDto = $this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            $EstatussolicitudesordenesController = new EstatussolicitudesordenesController();
            $EstatussolicitudesordenesDto = $EstatussolicitudesordenesController->insertEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            if ($EstatussolicitudesordenesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesordenesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEstatussolicitudesordenes($EstatussolicitudesordenesDto) {
            $EstatussolicitudesordenesDto = $this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            $EstatussolicitudesordenesController = new EstatussolicitudesordenesController();
            $EstatussolicitudesordenesDto = $EstatussolicitudesordenesController->updateEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            if ($EstatussolicitudesordenesDto != "") {
                $dtoToJson = new DtoToJson($EstatussolicitudesordenesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEstatussolicitudesordenes($EstatussolicitudesordenesDto) {
            $EstatussolicitudesordenesDto = $this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            $EstatussolicitudesordenesController = new EstatussolicitudesordenesController();
            $EstatussolicitudesordenesDto = $EstatussolicitudesordenesController->deleteEstatussolicitudesordenes($EstatussolicitudesordenesDto);
            if ($EstatussolicitudesordenesDto == true) {
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

    @$cveEstatusSolicitudOrdenes = $_POST["cveEstatusSolicitudOrdenes"];
    @$desEstatusSolicitudOrdenes = $_POST["desEstatusSolicitudOrdenes"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];
    @$orden = $_POST["orden"];

    $estatussolicitudesordenesFacade = new EstatussolicitudesordenesFacade();
    $estatussolicitudesordenesDto = new EstatussolicitudesordenesDTO();

    $estatussolicitudesordenesDto->setCveEstatusSolicitudOrdenes($cveEstatusSolicitudOrdenes);
    $estatussolicitudesordenesDto->setDesEstatusSolicitudOrdenes($desEstatusSolicitudOrdenes);
    $estatussolicitudesordenesDto->setActivo($activo);
    $estatussolicitudesordenesDto->setFechaRegistro($fechaRegistro);
    $estatussolicitudesordenesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveEstatusSolicitudOrdenes == "")) {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->insertEstatussolicitudesordenes($estatussolicitudesordenesDto);
        echo $estatussolicitudesordenesDto;
    } else if (($accion == "guardar") && ($cveEstatusSolicitudOrdenes != "")) {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->updateEstatussolicitudesordenes($estatussolicitudesordenesDto);
        echo $estatussolicitudesordenesDto;
    } else if ($accion == "consultar") {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->selectEstatussolicitudesordenes($estatussolicitudesordenesDto);
        echo $estatussolicitudesordenesDto;
    } else if (($accion == "baja") && ($cveEstatusSolicitudOrdenes != "")) {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->deleteEstatussolicitudesordenes($estatussolicitudesordenesDto);
        echo $estatussolicitudesordenesDto;
    } else if (($accion == "seleccionar") && ($cveEstatusSolicitudOrdenes != "")) {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->selectEstatussolicitudesordenes($estatussolicitudesordenesDto);
        echo $estatussolicitudesordenesDto;
    } else if ($accion == "consultarOrdenado") {
        $estatussolicitudesordenesDto = $estatussolicitudesordenesFacade->selectEstatussolicitudesordenes($estatussolicitudesordenesDto, $orden);
        echo $estatussolicitudesordenesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>