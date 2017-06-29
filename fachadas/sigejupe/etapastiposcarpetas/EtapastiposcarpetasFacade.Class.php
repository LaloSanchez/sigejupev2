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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapastiposcarpetas/EtapastiposcarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/etapastiposcarpetas/EtapastiposcarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class EtapastiposcarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarEtapastiposcarpetas($EtapastiposcarpetasDto) {
            $EtapastiposcarpetasDto->setidEtapaTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapastiposcarpetasDto->getidEtapaTipoCarpeta(), "utf8") : strtoupper($EtapastiposcarpetasDto->getidEtapaTipoCarpeta()))))));
            if ($this->esFecha($EtapastiposcarpetasDto->getidEtapaTipoCarpeta())) {
                $EtapastiposcarpetasDto->setidEtapaTipoCarpeta($this->fechaMysql($EtapastiposcarpetasDto->getidEtapaTipoCarpeta()));
            }
            $EtapastiposcarpetasDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapastiposcarpetasDto->getcveEtapaProcesal(), "utf8") : strtoupper($EtapastiposcarpetasDto->getcveEtapaProcesal()))))));
            if ($this->esFecha($EtapastiposcarpetasDto->getcveEtapaProcesal())) {
                $EtapastiposcarpetasDto->setcveEtapaProcesal($this->fechaMysql($EtapastiposcarpetasDto->getcveEtapaProcesal()));
            }
            $EtapastiposcarpetasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapastiposcarpetasDto->getcveTipoCarpeta(), "utf8") : strtoupper($EtapastiposcarpetasDto->getcveTipoCarpeta()))))));
            if ($this->esFecha($EtapastiposcarpetasDto->getcveTipoCarpeta())) {
                $EtapastiposcarpetasDto->setcveTipoCarpeta($this->fechaMysql($EtapastiposcarpetasDto->getcveTipoCarpeta()));
            }
            $EtapastiposcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapastiposcarpetasDto->getfechaRegistro(), "utf8") : strtoupper($EtapastiposcarpetasDto->getfechaRegistro()))))));
            if ($this->esFecha($EtapastiposcarpetasDto->getfechaRegistro())) {
                $EtapastiposcarpetasDto->setfechaRegistro($this->fechaMysql($EtapastiposcarpetasDto->getfechaRegistro()));
            }
            $EtapastiposcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EtapastiposcarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($EtapastiposcarpetasDto->getfechaActualizacion()))))));
            if ($this->esFecha($EtapastiposcarpetasDto->getfechaActualizacion())) {
                $EtapastiposcarpetasDto->setfechaActualizacion($this->fechaMysql($EtapastiposcarpetasDto->getfechaActualizacion()));
            }
            return $EtapastiposcarpetasDto;
        }

        public function selectEtapastiposcarpetas($EtapastiposcarpetasDto) {
            $EtapastiposcarpetasDto = $this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
            $EtapastiposcarpetasController = new EtapastiposcarpetasController();
            $EtapastiposcarpetasDto = $EtapastiposcarpetasController->selectEtapastiposcarpetas($EtapastiposcarpetasDto);
            if ($EtapastiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($EtapastiposcarpetasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertEtapastiposcarpetas($EtapastiposcarpetasDto) {
            $EtapastiposcarpetasDto = $this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
            $EtapastiposcarpetasController = new EtapastiposcarpetasController();
            $EtapastiposcarpetasDto = $EtapastiposcarpetasController->insertEtapastiposcarpetas($EtapastiposcarpetasDto);
            if ($EtapastiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($EtapastiposcarpetasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateEtapastiposcarpetas($EtapastiposcarpetasDto) {
            $EtapastiposcarpetasDto = $this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
            $EtapastiposcarpetasController = new EtapastiposcarpetasController();
            $EtapastiposcarpetasDto = $EtapastiposcarpetasController->updateEtapastiposcarpetas($EtapastiposcarpetasDto);
            if ($EtapastiposcarpetasDto != "") {
                $dtoToJson = new DtoToJson($EtapastiposcarpetasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteEtapastiposcarpetas($EtapastiposcarpetasDto) {
            $EtapastiposcarpetasDto = $this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
            $EtapastiposcarpetasController = new EtapastiposcarpetasController();
            $EtapastiposcarpetasDto = $EtapastiposcarpetasController->deleteEtapastiposcarpetas($EtapastiposcarpetasDto);
            if ($EtapastiposcarpetasDto == true) {
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

    @$idEtapaTipoCarpeta = $_POST["idEtapaTipoCarpeta"];
    @$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $etapastiposcarpetasFacade = new EtapastiposcarpetasFacade();
    $etapastiposcarpetasDto = new EtapastiposcarpetasDTO();

    $etapastiposcarpetasDto->setIdEtapaTipoCarpeta($idEtapaTipoCarpeta);
    $etapastiposcarpetasDto->setCveEtapaProcesal($cveEtapaProcesal);
    $etapastiposcarpetasDto->setCveTipoCarpeta($cveTipoCarpeta);
    $etapastiposcarpetasDto->setFechaRegistro($fechaRegistro);
    $etapastiposcarpetasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idEtapaTipoCarpeta == "")) {
        $etapastiposcarpetasDto = $etapastiposcarpetasFacade->insertEtapastiposcarpetas($etapastiposcarpetasDto);
        echo $etapastiposcarpetasDto;
    } else if (($accion == "guardar") && ($idEtapaTipoCarpeta != "")) {
        $etapastiposcarpetasDto = $etapastiposcarpetasFacade->updateEtapastiposcarpetas($etapastiposcarpetasDto);
        echo $etapastiposcarpetasDto;
    } else if ($accion == "consultar") {
        $etapastiposcarpetasDto = $etapastiposcarpetasFacade->selectEtapastiposcarpetas($etapastiposcarpetasDto);
        echo $etapastiposcarpetasDto;
    } else if (($accion == "baja") && ($idEtapaTipoCarpeta != "")) {
        $etapastiposcarpetasDto = $etapastiposcarpetasFacade->deleteEtapastiposcarpetas($etapastiposcarpetasDto);
        echo $etapastiposcarpetasDto;
    } else if (($accion == "seleccionar") && ($idEtapaTipoCarpeta != "")) {
        $etapastiposcarpetasDto = $etapastiposcarpetasFacade->selectEtapastiposcarpetas($etapastiposcarpetasDto);
        echo $etapastiposcarpetasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>