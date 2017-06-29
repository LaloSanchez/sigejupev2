<?php

//ihs
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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class TiposcarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarTiposcarpetas($TiposcarpetasDto) {
            $TiposcarpetasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposcarpetasDto->getcveTipoCarpeta(), "utf8") : strtoupper($TiposcarpetasDto->getcveTipoCarpeta()))))));
            if ($this->esFecha($TiposcarpetasDto->getcveTipoCarpeta())) {
                $TiposcarpetasDto->setcveTipoCarpeta($this->fechaMysql($TiposcarpetasDto->getcveTipoCarpeta()));
            }
            $TiposcarpetasDto->setdesTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposcarpetasDto->getdesTipoCarpeta(), "utf8") : strtoupper($TiposcarpetasDto->getdesTipoCarpeta()))))));
            if ($this->esFecha($TiposcarpetasDto->getdesTipoCarpeta())) {
                $TiposcarpetasDto->setdesTipoCarpeta($this->fechaMysql($TiposcarpetasDto->getdesTipoCarpeta()));
            }
            $TiposcarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposcarpetasDto->getactivo(), "utf8") : strtoupper($TiposcarpetasDto->getactivo()))))));
            if ($this->esFecha($TiposcarpetasDto->getactivo())) {
                $TiposcarpetasDto->setactivo($this->fechaMysql($TiposcarpetasDto->getactivo()));
            }
            $TiposcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposcarpetasDto->getfechaRegistro(), "utf8") : strtoupper($TiposcarpetasDto->getfechaRegistro()))))));
            if ($this->esFecha($TiposcarpetasDto->getfechaRegistro())) {
                $TiposcarpetasDto->setfechaRegistro($this->fechaMysql($TiposcarpetasDto->getfechaRegistro()));
            }
            $TiposcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiposcarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($TiposcarpetasDto->getfechaActualizacion()))))));
            if ($this->esFecha($TiposcarpetasDto->getfechaActualizacion())) {
                $TiposcarpetasDto->setfechaActualizacion($this->fechaMysql($TiposcarpetasDto->getfechaActualizacion()));
            }
            return $TiposcarpetasDto;
        }

        public function selectTiposcarpetas($TiposcarpetasDto) {
            $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $TiposcarpetasDto = $TiposcarpetasController->selectTiposcarpetas($TiposcarpetasDto);
            if ($TiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($TiposcarpetasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertTiposcarpetas($TiposcarpetasDto) {
            $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $TiposcarpetasDto = $TiposcarpetasController->insertTiposcarpetas($TiposcarpetasDto);
            if ($TiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($TiposcarpetasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateTiposcarpetas($TiposcarpetasDto) {
            $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $TiposcarpetasDto = $TiposcarpetasController->updateTiposcarpetas($TiposcarpetasDto);
            if ($TiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($TiposcarpetasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteTiposcarpetas($TiposcarpetasDto) {
            $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $TiposcarpetasDto = $TiposcarpetasController->deleteTiposcarpetas($TiposcarpetasDto);
            if ($TiposcarpetasDto == true) {
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

        public function selectTiposcarpetasActivas($tiposcarpetasDto) {
            $tiposcarpetasDto = $this->validarTiposcarpetas($tiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $tiposcarpetasDto = $TiposcarpetasController->selectTiposCarpetasActivadas($tiposcarpetasDto);

            return json_encode($tiposcarpetasDto);
        }
        
        public function getTipoCarpeta($tiposcarpetasDto) {
            $tiposcarpetasDto = $this->validarTiposcarpetas($tiposcarpetasDto);
            $TiposcarpetasController = new TiposcarpetasController();
            $tiposcarpetasDto = $TiposcarpetasController->getTipoCarpeta($tiposcarpetasDto);

            return json_encode($tiposcarpetasDto);
        }

    }

    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$desTipoCarpeta = $_POST["desTipoCarpeta"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $tiposcarpetasFacade = new TiposcarpetasFacade();
    $tiposcarpetasDto = new TiposcarpetasDTO();

    $tiposcarpetasDto->setCveTipoCarpeta($cveTipoCarpeta);
    $tiposcarpetasDto->setDesTipoCarpeta($desTipoCarpeta);
    $tiposcarpetasDto->setActivo($activo);
    $tiposcarpetasDto->setFechaRegistro($fechaRegistro);
    $tiposcarpetasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveTipoCarpeta == "")) {
        $tiposcarpetasDto = $tiposcarpetasFacade->insertTiposcarpetas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if (($accion == "guardar") && ($cveTipoCarpeta != "")) {
        $tiposcarpetasDto = $tiposcarpetasFacade->updateTiposcarpetas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if ($accion == "consultar") {
        $tiposcarpetasDto = $tiposcarpetasFacade->selectTiposcarpetas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if (($accion == "baja") && ($cveTipoCarpeta != "")) {
        $tiposcarpetasDto = $tiposcarpetasFacade->deleteTiposcarpetas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if (($accion == "seleccionar") && ($cveTipoCarpeta != "")) {
        $tiposcarpetasDto = $tiposcarpetasFacade->selectTiposcarpetas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if ($accion == "consultaTiposCarpetasActivos") {
        $tiposcarpetasDto = $tiposcarpetasFacade->selectTiposcarpetasActivas($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    } else if( $accion == 'getTipoCarpeta' ){
        $tiposcarpetasDto = $tiposcarpetasFacade->getTipoCarpeta($tiposcarpetasDto);
        echo $tiposcarpetasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>