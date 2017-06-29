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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/grupos/GruposDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/grupos/GruposController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class GruposFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGrupos($GruposDto) {
            $GruposDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposDto->getcveGrupo(), "utf8") : strtoupper($GruposDto->getcveGrupo()))))));
            if ($this->esFecha($GruposDto->getcveGrupo())) {
                $GruposDto->setcveGrupo($this->fechaMysql($GruposDto->getcveGrupo()));
            }
            $GruposDto->setdesGrupo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposDto->getdesGrupo(), "utf8") : strtoupper($GruposDto->getdesGrupo()))))));
            if ($this->esFecha($GruposDto->getdesGrupo())) {
                $GruposDto->setdesGrupo($this->fechaMysql($GruposDto->getdesGrupo()));
            }
            $GruposDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposDto->getactivo(), "utf8") : strtoupper($GruposDto->getactivo()))))));
            if ($this->esFecha($GruposDto->getactivo())) {
                $GruposDto->setactivo($this->fechaMysql($GruposDto->getactivo()));
            }
            $GruposDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposDto->getfechaRegistro(), "utf8") : strtoupper($GruposDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposDto->getfechaRegistro())) {
                $GruposDto->setfechaRegistro($this->fechaMysql($GruposDto->getfechaRegistro()));
            }
            $GruposDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposDto->getfechaActualizacion(), "utf8") : strtoupper($GruposDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposDto->getfechaActualizacion())) {
                $GruposDto->setfechaActualizacion($this->fechaMysql($GruposDto->getfechaActualizacion()));
            }
            return $GruposDto;
        }

        public function selectGrupos($GruposDto) {
            $GruposDto = $this->validarGrupos($GruposDto);
            $GruposController = new GruposController();
            $GruposDto = $GruposController->selectGrupos($GruposDto);
            if ($GruposDto != "") {
                $dtoToJson = new DtoToJson($GruposDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consgruposautoresaudiencias($GruposDto, $paramcataudiencia) {
            $GruposDto = $this->validarGrupos($GruposDto);
            $GruposController = new GruposController();
            $GruposDto = $GruposController->consgruposautoresaudiencias($GruposDto, $paramcataudiencia);

            //print_r(json_encode($CarpetasjudicialesDto));

            return json_encode($GruposDto);
        }

        public function insertGrupos($GruposDto) {
            $GruposDto = $this->validarGrupos($GruposDto);
            $GruposController = new GruposController();
            $GruposDto = $GruposController->insertGrupos($GruposDto);
            if ($GruposDto != "") {
                $dtoToJson = new DtoToJson($GruposDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGrupos($GruposDto) {
            $GruposDto = $this->validarGrupos($GruposDto);
            $GruposController = new GruposController();
            $GruposDto = $GruposController->updateGrupos($GruposDto);
            if ($GruposDto != "") {
                $dtoToJson = new DtoToJson($GruposDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGrupos($GruposDto) {
            $GruposDto = $this->validarGrupos($GruposDto);
            $GruposController = new GruposController();
            $GruposDto = $GruposController->deleteGrupos($GruposDto);
            if ($GruposDto == true) {
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

    @$cveGrupo = $_POST["cveGrupo"];
    @$desGrupo = $_POST["desGrupo"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];


    $paramcataudiencia = array();
    @$paramcataudiencia["idCatAudiencia"] = $_POST['idCatAudiencia'];

    $gruposFacade = new GruposFacade();
    $gruposDto = new GruposDTO();

    $gruposDto->setCveGrupo($cveGrupo);
    $gruposDto->setDesGrupo($desGrupo);
    $gruposDto->setActivo($activo);
    $gruposDto->setFechaRegistro($fechaRegistro);
    $gruposDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupo == "")) {
        $gruposDto = $gruposFacade->insertGrupos($gruposDto);
        echo $gruposDto;
    } else if (($accion == "guardar") && ($cveGrupo != "")) {
        $gruposDto = $gruposFacade->updateGrupos($gruposDto);
        echo $gruposDto;
    } else if ($accion == "consultar") {
        $gruposDto = $gruposFacade->selectGrupos($gruposDto);
        echo $gruposDto;
    } else if (($accion == "baja") && ($cveGrupo != "")) {
        $gruposDto = $gruposFacade->deleteGrupos($gruposDto);
        echo $gruposDto;
    } else if (($accion == "seleccionar") && ($cveGrupo != "")) {
        $gruposDto = $gruposFacade->selectGrupos($gruposDto);
        echo $gruposDto;
    } else if ($accion == "consgruposautoresaudiencias") {
        $gruposDto = $gruposFacade->consgruposautoresaudiencias($gruposDto, $paramcataudiencia);
        echo $gruposDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>