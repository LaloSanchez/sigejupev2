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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscateos/ImputadoscateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscateos/ImputadoscateosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadoscateosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadoscateos($ImputadoscateosDto) {
            $ImputadoscateosDto->setidImputadoCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getidImputadoCateo(), "utf8") : strtoupper($ImputadoscateosDto->getidImputadoCateo()))))));
            if ($this->esFecha($ImputadoscateosDto->getidImputadoCateo())) {
                $ImputadoscateosDto->setidImputadoCateo($this->fechaMysql($ImputadoscateosDto->getidImputadoCateo()));
            }
            $ImputadoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getidSolicitudCateo(), "utf8") : strtoupper($ImputadoscateosDto->getidSolicitudCateo()))))));
            if ($this->esFecha($ImputadoscateosDto->getidSolicitudCateo())) {
                $ImputadoscateosDto->setidSolicitudCateo($this->fechaMysql($ImputadoscateosDto->getidSolicitudCateo()));
            }
            $ImputadoscateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getactivo(), "utf8") : strtoupper($ImputadoscateosDto->getactivo()))))));
            if ($this->esFecha($ImputadoscateosDto->getactivo())) {
                $ImputadoscateosDto->setactivo($this->fechaMysql($ImputadoscateosDto->getactivo()));
            }
            $ImputadoscateosDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getnombre(), "utf8") : strtoupper($ImputadoscateosDto->getnombre()))))));
            if ($this->esFecha($ImputadoscateosDto->getnombre())) {
                $ImputadoscateosDto->setnombre($this->fechaMysql($ImputadoscateosDto->getnombre()));
            }
            $ImputadoscateosDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getpaterno(), "utf8") : strtoupper($ImputadoscateosDto->getpaterno()))))));
            if ($this->esFecha($ImputadoscateosDto->getpaterno())) {
                $ImputadoscateosDto->setpaterno($this->fechaMysql($ImputadoscateosDto->getpaterno()));
            }
            $ImputadoscateosDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getmaterno(), "utf8") : strtoupper($ImputadoscateosDto->getmaterno()))))));
            if ($this->esFecha($ImputadoscateosDto->getmaterno())) {
                $ImputadoscateosDto->setmaterno($this->fechaMysql($ImputadoscateosDto->getmaterno()));
            }
            $ImputadoscateosDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getalias(), "utf8") : strtoupper($ImputadoscateosDto->getalias()))))));
            if ($this->esFecha($ImputadoscateosDto->getalias())) {
                $ImputadoscateosDto->setalias($this->fechaMysql($ImputadoscateosDto->getalias()));
            }
            $ImputadoscateosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getcveGenero(), "utf8") : strtoupper($ImputadoscateosDto->getcveGenero()))))));
            if ($this->esFecha($ImputadoscateosDto->getcveGenero())) {
                $ImputadoscateosDto->setcveGenero($this->fechaMysql($ImputadoscateosDto->getcveGenero()));
            }
            $ImputadoscateosDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getdetenido(), "utf8") : strtoupper($ImputadoscateosDto->getdetenido()))))));
            if ($this->esFecha($ImputadoscateosDto->getdetenido())) {
                $ImputadoscateosDto->setdetenido($this->fechaMysql($ImputadoscateosDto->getdetenido()));
            }
            $ImputadoscateosDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getcveTipoPersona(), "utf8") : strtoupper($ImputadoscateosDto->getcveTipoPersona()))))));
            if ($this->esFecha($ImputadoscateosDto->getcveTipoPersona())) {
                $ImputadoscateosDto->setcveTipoPersona($this->fechaMysql($ImputadoscateosDto->getcveTipoPersona()));
            }
            $ImputadoscateosDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getnombreMoral(), "utf8") : strtoupper($ImputadoscateosDto->getnombreMoral()))))));
            if ($this->esFecha($ImputadoscateosDto->getnombreMoral())) {
                $ImputadoscateosDto->setnombreMoral($this->fechaMysql($ImputadoscateosDto->getnombreMoral()));
            }
            $ImputadoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getfechaRegistro(), "utf8") : strtoupper($ImputadoscateosDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadoscateosDto->getfechaRegistro())) {
                $ImputadoscateosDto->setfechaRegistro($this->fechaMysql($ImputadoscateosDto->getfechaRegistro()));
            }
            $ImputadoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscateosDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadoscateosDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadoscateosDto->getfechaActualizacion())) {
                $ImputadoscateosDto->setfechaActualizacion($this->fechaMysql($ImputadoscateosDto->getfechaActualizacion()));
            }
            return $ImputadoscateosDto;
        }

        public function selectImputadoscateos($ImputadoscateosDto) {
            $ImputadoscateosDto = $this->validarImputadoscateos($ImputadoscateosDto);
            $ImputadoscateosController = new ImputadoscateosController();
            $ImputadoscateosDto = $ImputadoscateosController->selectImputadoscateos($ImputadoscateosDto);
            if ($ImputadoscateosDto != "") {
                $dtoToJson = new DtoToJson($ImputadoscateosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadoscateos($ImputadoscateosDto) {
            $ImputadoscateosDto = $this->validarImputadoscateos($ImputadoscateosDto);
            $ImputadoscateosController = new ImputadoscateosController();
            $ImputadoscateosDto = $ImputadoscateosController->insertImputadoscateos($ImputadoscateosDto);
            if ($ImputadoscateosDto != "") {
                $dtoToJson = new DtoToJson($ImputadoscateosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadoscateos($ImputadoscateosDto) {
            $ImputadoscateosDto = $this->validarImputadoscateos($ImputadoscateosDto);
            $ImputadoscateosController = new ImputadoscateosController();
            $ImputadoscateosDto = $ImputadoscateosController->updateImputadoscateos($ImputadoscateosDto);
            if ($ImputadoscateosDto != "") {
                $dtoToJson = new DtoToJson($ImputadoscateosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadoscateos($ImputadoscateosDto) {
            $ImputadoscateosDto = $this->validarImputadoscateos($ImputadoscateosDto);
            $ImputadoscateosController = new ImputadoscateosController();
            $ImputadoscateosDto = $ImputadoscateosController->deleteImputadoscateos($ImputadoscateosDto);
            if ($ImputadoscateosDto == true) {
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

    @$idImputadoCateo = $_POST["idImputadoCateo"];
    @$idSolicitudCateo = $_POST["idSolicitudCateo"];
    @$activo = $_POST["activo"];
    @$nombre = $_POST["nombre"];
    @$paterno = $_POST["paterno"];
    @$materno = $_POST["materno"];
    @$alias = $_POST["alias"];
    @$cveGenero = $_POST["cveGenero"];
    @$detenido = $_POST["detenido"];
    @$cveTipoPersona = $_POST["cveTipoPersona"];
    @$nombreMoral = $_POST["nombreMoral"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $imputadoscateosFacade = new ImputadoscateosFacade();
    $imputadoscateosDto = new ImputadoscateosDTO();

    $imputadoscateosDto->setIdImputadoCateo($idImputadoCateo);
    $imputadoscateosDto->setIdSolicitudCateo($idSolicitudCateo);
    $imputadoscateosDto->setActivo($activo);
    $imputadoscateosDto->setNombre($nombre);
    $imputadoscateosDto->setPaterno($paterno);
    $imputadoscateosDto->setMaterno($materno);
    $imputadoscateosDto->setAlias($alias);
    $imputadoscateosDto->setCveGenero($cveGenero);
    $imputadoscateosDto->setDetenido($detenido);
    $imputadoscateosDto->setCveTipoPersona($cveTipoPersona);
    $imputadoscateosDto->setNombreMoral($nombreMoral);
    $imputadoscateosDto->setFechaRegistro($fechaRegistro);
    $imputadoscateosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idImputadoCateo == "")) {
        $imputadoscateosDto = $imputadoscateosFacade->insertImputadoscateos($imputadoscateosDto);
        echo $imputadoscateosDto;
    } else if (($accion == "guardar") && ($idImputadoCateo != "")) {
        $imputadoscateosDto = $imputadoscateosFacade->updateImputadoscateos($imputadoscateosDto);
        echo $imputadoscateosDto;
    } else if ($accion == "consultar") {
        $imputadoscateosDto = $imputadoscateosFacade->selectImputadoscateos($imputadoscateosDto);
        echo $imputadoscateosDto;
    } else if (($accion == "baja") && ($idImputadoCateo != "")) {
        $imputadoscateosDto = $imputadoscateosFacade->deleteImputadoscateos($imputadoscateosDto);
        echo $imputadoscateosDto;
    } else if (($accion == "seleccionar") && ($idImputadoCateo != "")) {
        $imputadoscateosDto = $imputadoscateosFacade->selectImputadoscateos($imputadoscateosDto);
        echo $imputadoscateosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>