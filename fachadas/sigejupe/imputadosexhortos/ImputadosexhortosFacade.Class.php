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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadosexhortos/ImputadosexhortosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadosexhortosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadosexhortos($ImputadosexhortosDto) {
            $ImputadosexhortosDto->setidImputadoExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getidImputadoExhorto(), "utf8") : strtoupper($ImputadosexhortosDto->getidImputadoExhorto()))))));
            if ($this->esFecha($ImputadosexhortosDto->getidImputadoExhorto())) {
                $ImputadosexhortosDto->setidImputadoExhorto($this->fechaMysql($ImputadosexhortosDto->getidImputadoExhorto()));
            }
            $ImputadosexhortosDto->setidExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getidExhorto(), "utf8") : strtoupper($ImputadosexhortosDto->getidExhorto()))))));
            if ($this->esFecha($ImputadosexhortosDto->getidExhorto())) {
                $ImputadosexhortosDto->setidExhorto($this->fechaMysql($ImputadosexhortosDto->getidExhorto()));
            }
            $ImputadosexhortosDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveConsignacion(), "utf8") : strtoupper($ImputadosexhortosDto->getcveConsignacion()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveConsignacion())) {
                $ImputadosexhortosDto->setcveConsignacion($this->fechaMysql($ImputadosexhortosDto->getcveConsignacion()));
            }
            $ImputadosexhortosDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getpaterno(), "utf8") : strtoupper($ImputadosexhortosDto->getpaterno()))))));
            if ($this->esFecha($ImputadosexhortosDto->getpaterno())) {
                $ImputadosexhortosDto->setpaterno($this->fechaMysql($ImputadosexhortosDto->getpaterno()));
            }
            $ImputadosexhortosDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getmaterno(), "utf8") : strtoupper($ImputadosexhortosDto->getmaterno()))))));
            if ($this->esFecha($ImputadosexhortosDto->getmaterno())) {
                $ImputadosexhortosDto->setmaterno($this->fechaMysql($ImputadosexhortosDto->getmaterno()));
            }
            $ImputadosexhortosDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getnombre(), "utf8") : strtoupper($ImputadosexhortosDto->getnombre()))))));
            if ($this->esFecha($ImputadosexhortosDto->getnombre())) {
                $ImputadosexhortosDto->setnombre($this->fechaMysql($ImputadosexhortosDto->getnombre()));
            }
            $ImputadosexhortosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveGenero(), "utf8") : strtoupper($ImputadosexhortosDto->getcveGenero()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveGenero())) {
                $ImputadosexhortosDto->setcveGenero($this->fechaMysql($ImputadosexhortosDto->getcveGenero()));
            }
            $ImputadosexhortosDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveEstado(), "utf8") : strtoupper($ImputadosexhortosDto->getcveEstado()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveEstado())) {
                $ImputadosexhortosDto->setcveEstado($this->fechaMysql($ImputadosexhortosDto->getcveEstado()));
            }
            $ImputadosexhortosDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveMunicipio(), "utf8") : strtoupper($ImputadosexhortosDto->getcveMunicipio()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveMunicipio())) {
                $ImputadosexhortosDto->setcveMunicipio($this->fechaMysql($ImputadosexhortosDto->getcveMunicipio()));
            }
            $ImputadosexhortosDto->setdomicilio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getdomicilio(), "utf8") : strtoupper($ImputadosexhortosDto->getdomicilio()))))));
            if ($this->esFecha($ImputadosexhortosDto->getdomicilio())) {
                $ImputadosexhortosDto->setdomicilio($this->fechaMysql($ImputadosexhortosDto->getdomicilio()));
            }
            $ImputadosexhortosDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getalias(), "utf8") : strtoupper($ImputadosexhortosDto->getalias()))))));
            if ($this->esFecha($ImputadosexhortosDto->getalias())) {
                $ImputadosexhortosDto->setalias($this->fechaMysql($ImputadosexhortosDto->getalias()));
            }
            $ImputadosexhortosDto->settelefono(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->gettelefono(), "utf8") : strtoupper($ImputadosexhortosDto->gettelefono()))))));
            if ($this->esFecha($ImputadosexhortosDto->gettelefono())) {
                $ImputadosexhortosDto->settelefono($this->fechaMysql($ImputadosexhortosDto->gettelefono()));
            }
            $ImputadosexhortosDto->setcveCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveCereso(), "utf8") : strtoupper($ImputadosexhortosDto->getcveCereso()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveCereso())) {
                $ImputadosexhortosDto->setcveCereso($this->fechaMysql($ImputadosexhortosDto->getcveCereso()));
            }
            $ImputadosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getfechaRegistro(), "utf8") : strtoupper($ImputadosexhortosDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadosexhortosDto->getfechaRegistro())) {
                $ImputadosexhortosDto->setfechaRegistro($this->fechaMysql($ImputadosexhortosDto->getfechaRegistro()));
            }
            $ImputadosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadosexhortosDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadosexhortosDto->getfechaActualizacion())) {
                $ImputadosexhortosDto->setfechaActualizacion($this->fechaMysql($ImputadosexhortosDto->getfechaActualizacion()));
            }
            $ImputadosexhortosDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getcveTipoPersona(), "utf8") : strtoupper($ImputadosexhortosDto->getcveTipoPersona()))))));
            if ($this->esFecha($ImputadosexhortosDto->getcveTipoPersona())) {
                $ImputadosexhortosDto->setcveTipoPersona($this->fechaMysql($ImputadosexhortosDto->getcveTipoPersona()));
            }
            $ImputadosexhortosDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosexhortosDto->getnombreMoral(), "utf8") : strtoupper($ImputadosexhortosDto->getnombreMoral()))))));
            if ($this->esFecha($ImputadosexhortosDto->getnombreMoral())) {
                $ImputadosexhortosDto->setnombreMoral($this->fechaMysql($ImputadosexhortosDto->getnombreMoral()));
            }
            return $ImputadosexhortosDto;
        }

        public function selectImputadosexhortos($ImputadosexhortosDto) {
            $ImputadosexhortosDto = $this->validarImputadosexhortos($ImputadosexhortosDto);
            $ImputadosexhortosController = new ImputadosexhortosController();
            $ImputadosexhortosDto = $ImputadosexhortosController->selectImputadosexhortos($ImputadosexhortosDto);
            if ($ImputadosexhortosDto != "") {
                $dtoToJson = new DtoToJson($ImputadosexhortosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadosexhortos($ImputadosexhortosDto) {
            $ImputadosexhortosDto = $this->validarImputadosexhortos($ImputadosexhortosDto);
            $ImputadosexhortosController = new ImputadosexhortosController();
            $ImputadosexhortosDto = $ImputadosexhortosController->insertImputadosexhortos($ImputadosexhortosDto);
            if ($ImputadosexhortosDto != "") {
                $dtoToJson = new DtoToJson($ImputadosexhortosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadosexhortos($ImputadosexhortosDto) {
            $ImputadosexhortosDto = $this->validarImputadosexhortos($ImputadosexhortosDto);
            $ImputadosexhortosController = new ImputadosexhortosController();
            $ImputadosexhortosDto = $ImputadosexhortosController->updateImputadosexhortos($ImputadosexhortosDto);
            if ($ImputadosexhortosDto != "") {
                $dtoToJson = new DtoToJson($ImputadosexhortosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadosexhortos($ImputadosexhortosDto) {
            $ImputadosexhortosDto = $this->validarImputadosexhortos($ImputadosexhortosDto);
            $ImputadosexhortosController = new ImputadosexhortosController();
            $ImputadosexhortosDto = $ImputadosexhortosController->deleteImputadosexhortos($ImputadosexhortosDto);
            if ($ImputadosexhortosDto == true) {
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

    @$idImputadoExhorto = $_POST["idImputadoExhorto"];
    @$idExhorto = $_POST["idExhorto"];
    @$cveConsignacion = $_POST["cveConsignacion"];
    @$paterno = $_POST["paterno"];
    @$materno = $_POST["materno"];
    @$nombre = $_POST["nombre"];
    @$cveGenero = $_POST["cveGenero"];
    @$cveEstado = $_POST["cveEstado"];
    @$cveMunicipio = $_POST["cveMunicipio"];
    @$domicilio = $_POST["domicilio"];
    @$alias = $_POST["alias"];
    @$telefono = $_POST["telefono"];
    @$cveCereso = $_POST["cveCereso"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$cveTipoPersona = $_POST["cveTipoPersona"];
    @$nombreMoral = $_POST["nombreMoral"];
    @$accion = $_POST["accion"];

    $imputadosexhortosFacade = new ImputadosexhortosFacade();
    $imputadosexhortosDto = new ImputadosexhortosDTO();

    $imputadosexhortosDto->setIdImputadoExhorto($idImputadoExhorto);
    $imputadosexhortosDto->setIdExhorto($idExhorto);
    $imputadosexhortosDto->setCveConsignacion($cveConsignacion);
    $imputadosexhortosDto->setPaterno($paterno);
    $imputadosexhortosDto->setMaterno($materno);
    $imputadosexhortosDto->setNombre($nombre);
    $imputadosexhortosDto->setCveGenero($cveGenero);
    $imputadosexhortosDto->setCveEstado($cveEstado);
    $imputadosexhortosDto->setCveMunicipio($cveMunicipio);
    $imputadosexhortosDto->setDomicilio($domicilio);
    $imputadosexhortosDto->setAlias($alias);
    $imputadosexhortosDto->setTelefono($telefono);
    $imputadosexhortosDto->setCveCereso($cveCereso);
    $imputadosexhortosDto->setFechaRegistro($fechaRegistro);
    $imputadosexhortosDto->setFechaActualizacion($fechaActualizacion);
    $imputadosexhortosDto->setCveTipoPersona($cveTipoPersona);
    $imputadosexhortosDto->setNombreMoral($nombreMoral);

    if (($accion == "guardar") && ($idImputadoExhorto == "")) {
        $imputadosexhortosDto = $imputadosexhortosFacade->insertImputadosexhortos($imputadosexhortosDto);
        echo $imputadosexhortosDto;
    } else if (($accion == "guardar") && ($idImputadoExhorto != "")) {
        $imputadosexhortosDto = $imputadosexhortosFacade->updateImputadosexhortos($imputadosexhortosDto);
        echo $imputadosexhortosDto;
    } else if ($accion == "consultar") {
        $imputadosexhortosDto = $imputadosexhortosFacade->selectImputadosexhortos($imputadosexhortosDto);
        echo $imputadosexhortosDto;
    } else if (($accion == "baja") && ($idImputadoExhorto != "")) {
        $imputadosexhortosDto = $imputadosexhortosFacade->deleteImputadosexhortos($imputadosexhortosDto);
        echo $imputadosexhortosDto;
    } else if (($accion == "seleccionar") && ($idImputadoExhorto != "")) {
        $imputadosexhortosDto = $imputadosexhortosFacade->selectImputadosexhortos($imputadosexhortosDto);
        echo $imputadosexhortosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>