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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/formulacionimputaciones/FormulacionimputacionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class FormulacionimputacionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto->setidFormulacionImputacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getidFormulacionImputacion(), "utf8") : strtoupper($FormulacionimputacionesDto->getidFormulacionImputacion()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getidFormulacionImputacion())) {
                $FormulacionimputacionesDto->setidFormulacionImputacion($this->fechaMysql($FormulacionimputacionesDto->getidFormulacionImputacion()));
            }
            $FormulacionimputacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getidActuacion(), "utf8") : strtoupper($FormulacionimputacionesDto->getidActuacion()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getidActuacion())) {
                $FormulacionimputacionesDto->setidActuacion($this->fechaMysql($FormulacionimputacionesDto->getidActuacion()));
            }
            $FormulacionimputacionesDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getidImpOfeDelCarpeta(), "utf8") : strtoupper($FormulacionimputacionesDto->getidImpOfeDelCarpeta()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getidImpOfeDelCarpeta())) {
                $FormulacionimputacionesDto->setidImpOfeDelCarpeta($this->fechaMysql($FormulacionimputacionesDto->getidImpOfeDelCarpeta()));
            }
            $FormulacionimputacionesDto->setcveTipoFormulacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getcveTipoFormulacion(), "utf8") : strtoupper($FormulacionimputacionesDto->getcveTipoFormulacion()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getcveTipoFormulacion())) {
                $FormulacionimputacionesDto->setcveTipoFormulacion($this->fechaMysql($FormulacionimputacionesDto->getcveTipoFormulacion()));
            }
            $FormulacionimputacionesDto->setfechaFormulacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getfechaFormulacion(), "utf8") : strtoupper($FormulacionimputacionesDto->getfechaFormulacion()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getfechaFormulacion())) {
                $FormulacionimputacionesDto->setfechaFormulacion($this->fechaMysql($FormulacionimputacionesDto->getfechaFormulacion()));
            }
            $FormulacionimputacionesDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($FormulacionimputacionesDto->getidJuzgador(), "utf8") : strtoupper($FormulacionimputacionesDto->getidJuzgador()))))));
            if ($this->esFecha($FormulacionimputacionesDto->getidJuzgador())) {
                $FormulacionimputacionesDto->setidJuzgador($this->fechaMysql($FormulacionimputacionesDto->getidJuzgador()));
            }
            return $FormulacionimputacionesDto;
        }

        public function selectFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->selectFormulacionimputaciones($FormulacionimputacionesDto);
            if ($FormulacionimputacionesDto != "") {
                $dtoToJson = new DtoToJson($FormulacionimputacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectFormulacionimputacionesDetalles($formulacionimputacionesDto, $param, $datos) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($formulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->selectFormulacionimputacionesDetalles($FormulacionimputacionesDto, $param, $datos);
            if ($FormulacionimputacionesDto != "") {
                return $FormulacionimputacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasFormulacionimputacionesDetalles($formulacionimputacionesDto, $param, $datos) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($formulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->getPaginasFormulacionimputaciones($FormulacionimputacionesDto, $param, $datos);
            if ($FormulacionimputacionesDto != "") {
                return $FormulacionimputacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->insertFormulacionimputaciones($FormulacionimputacionesDto);
            if ($FormulacionimputacionesDto != "") {
                $dtoToJson = new DtoToJson($FormulacionimputacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->updateFormulacionimputaciones($FormulacionimputacionesDto);
            if ($FormulacionimputacionesDto != "") {
                $dtoToJson = new DtoToJson($FormulacionimputacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->deleteFormulacionimputaciones($FormulacionimputacionesDto);
            if ($FormulacionimputacionesDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function borrarFormulacionimputaciones($FormulacionimputacionesDto) {
            $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
            $FormulacionimputacionesController = new FormulacionimputacionesController();
            $FormulacionimputacionesDto = $FormulacionimputacionesController->borrarFormulacionimputaciones($FormulacionimputacionesDto);
            if ($FormulacionimputacionesDto != "") {
                return $FormulacionimputacionesDto;
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

    @$idFormulacionImputacion = $_POST["idFormulacionImputacion"];
    @$idActuacion = $_POST["idActuacion"];
    @$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
    @$cveTipoFormulacion = $_POST["cveTipoFormulacion"];
    @$fechaFormulacion = $_POST["fechaFormulacion"];
    @$idJuzgador = $_POST["idJuzgador"];
    @$accion = $_POST["accion"];

    $param = array();
    @$param["fechaDesde"] = $_POST['fechaDesde'];
    @$param["fechaHasta"] = $_POST['fechaHasta'];
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion']; //true

    $datos = array();
    @$datos["numero"] = $_POST["numero"];
    @$datos["anio"] = $_POST["anio"];
    @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
    @$datos["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];

    $formulacionimputacionesFacade = new FormulacionimputacionesFacade();
    $formulacionimputacionesDto = new FormulacionimputacionesDTO();

    $formulacionimputacionesDto->setIdFormulacionImputacion($idFormulacionImputacion);
    $formulacionimputacionesDto->setIdActuacion($idActuacion);
    $formulacionimputacionesDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
    $formulacionimputacionesDto->setCveTipoFormulacion($cveTipoFormulacion);
    $formulacionimputacionesDto->setFechaFormulacion($fechaFormulacion);
    $formulacionimputacionesDto->setIdJuzgador($idJuzgador);

    if (($accion == "guardar") && ($idFormulacionImputacion == "")) {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->insertFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto;
    } else if (($accion == "guardar") && ($idFormulacionImputacion != "")) {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->updateFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto;
    } else if ($accion == "consultar") {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->selectFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto;
    } else if (($accion == "baja") && ($idFormulacionImputacion != "")) {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->deleteFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto;
    } else if (($accion == "seleccionar") && ($idFormulacionImputacion != "")) {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->selectFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto;
    } else if ($accion == "consultarDetalles") {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->selectFormulacionimputacionesDetalles($formulacionimputacionesDto, $param, $datos);
        echo $formulacionimputacionesDto;
    } else if ($accion == "getPaginasConsultarDetalles") {
        $param["paginacion"] = false;
        $formulacionimputacionesDto = $formulacionimputacionesFacade->getPaginasFormulacionimputacionesDetalles($formulacionimputacionesDto, $param, $datos);
        echo $formulacionimputacionesDto;
    } else if ($accion == "borrarFormulacionImputacion") {
        $formulacionimputacionesDto = $formulacionimputacionesFacade->borrarFormulacionimputaciones($formulacionimputacionesDto);
        echo $formulacionimputacionesDto; //
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>