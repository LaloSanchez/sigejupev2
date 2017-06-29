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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosordenes/ImputadosordenesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadosordenes/ImputadosordenesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadosordenesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadosordenes($ImputadosordenesDto) {
            $ImputadosordenesDto->setidImputadoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getidImputadoOrden(), "utf8") : strtoupper($ImputadosordenesDto->getidImputadoOrden()))))));
            if ($this->esFecha($ImputadosordenesDto->getidImputadoOrden())) {
                $ImputadosordenesDto->setidImputadoOrden($this->fechaMysql($ImputadosordenesDto->getidImputadoOrden()));
            }
            $ImputadosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getidSolicitudOrden(), "utf8") : strtoupper($ImputadosordenesDto->getidSolicitudOrden()))))));
            if ($this->esFecha($ImputadosordenesDto->getidSolicitudOrden())) {
                $ImputadosordenesDto->setidSolicitudOrden($this->fechaMysql($ImputadosordenesDto->getidSolicitudOrden()));
            }
            $ImputadosordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getactivo(), "utf8") : strtoupper($ImputadosordenesDto->getactivo()))))));
            if ($this->esFecha($ImputadosordenesDto->getactivo())) {
                $ImputadosordenesDto->setactivo($this->fechaMysql($ImputadosordenesDto->getactivo()));
            }
            $ImputadosordenesDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getnombre(), "utf8") : strtoupper($ImputadosordenesDto->getnombre()))))));
            if ($this->esFecha($ImputadosordenesDto->getnombre())) {
                $ImputadosordenesDto->setnombre($this->fechaMysql($ImputadosordenesDto->getnombre()));
            }
            $ImputadosordenesDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getpaterno(), "utf8") : strtoupper($ImputadosordenesDto->getpaterno()))))));
            if ($this->esFecha($ImputadosordenesDto->getpaterno())) {
                $ImputadosordenesDto->setpaterno($this->fechaMysql($ImputadosordenesDto->getpaterno()));
            }
            $ImputadosordenesDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getmaterno(), "utf8") : strtoupper($ImputadosordenesDto->getmaterno()))))));
            if ($this->esFecha($ImputadosordenesDto->getmaterno())) {
                $ImputadosordenesDto->setmaterno($this->fechaMysql($ImputadosordenesDto->getmaterno()));
            }
            $ImputadosordenesDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getalias(), "utf8") : strtoupper($ImputadosordenesDto->getalias()))))));
            if ($this->esFecha($ImputadosordenesDto->getalias())) {
                $ImputadosordenesDto->setalias($this->fechaMysql($ImputadosordenesDto->getalias()));
            }
            $ImputadosordenesDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getcveGenero(), "utf8") : strtoupper($ImputadosordenesDto->getcveGenero()))))));
            if ($this->esFecha($ImputadosordenesDto->getcveGenero())) {
                $ImputadosordenesDto->setcveGenero($this->fechaMysql($ImputadosordenesDto->getcveGenero()));
            }
            $ImputadosordenesDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getdetenido(), "utf8") : strtoupper($ImputadosordenesDto->getdetenido()))))));
            if ($this->esFecha($ImputadosordenesDto->getdetenido())) {
                $ImputadosordenesDto->setdetenido($this->fechaMysql($ImputadosordenesDto->getdetenido()));
            }
            $ImputadosordenesDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getcveTipoPersona(), "utf8") : strtoupper($ImputadosordenesDto->getcveTipoPersona()))))));
            if ($this->esFecha($ImputadosordenesDto->getcveTipoPersona())) {
                $ImputadosordenesDto->setcveTipoPersona($this->fechaMysql($ImputadosordenesDto->getcveTipoPersona()));
            }
            $ImputadosordenesDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getnombreMoral(), "utf8") : strtoupper($ImputadosordenesDto->getnombreMoral()))))));
            if ($this->esFecha($ImputadosordenesDto->getnombreMoral())) {
                $ImputadosordenesDto->setnombreMoral($this->fechaMysql($ImputadosordenesDto->getnombreMoral()));
            }
            $ImputadosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getfechaRegistro(), "utf8") : strtoupper($ImputadosordenesDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadosordenesDto->getfechaRegistro())) {
                $ImputadosordenesDto->setfechaRegistro($this->fechaMysql($ImputadosordenesDto->getfechaRegistro()));
            }
            $ImputadosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadosordenesDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadosordenesDto->getfechaActualizacion())) {
                $ImputadosordenesDto->setfechaActualizacion($this->fechaMysql($ImputadosordenesDto->getfechaActualizacion()));
            }
            $ImputadosordenesDto->setdomicilio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getdomicilio(), "utf8") : strtoupper($ImputadosordenesDto->getdomicilio()))))));
            if ($this->esFecha($ImputadosordenesDto->getdomicilio())) {
                $ImputadosordenesDto->setdomicilio($this->fechaMysql($ImputadosordenesDto->getdomicilio()));
            }
            $ImputadosordenesDto->settelefono(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->gettelefono(), "utf8") : strtoupper($ImputadosordenesDto->gettelefono()))))));
            if ($this->esFecha($ImputadosordenesDto->gettelefono())) {
                $ImputadosordenesDto->settelefono($this->fechaMysql($ImputadosordenesDto->gettelefono()));
            }
            $ImputadosordenesDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosordenesDto->getemail(), "utf8") : strtoupper($ImputadosordenesDto->getemail()))))));
            if ($this->esFecha($ImputadosordenesDto->getemail())) {
                $ImputadosordenesDto->setemail($this->fechaMysql($ImputadosordenesDto->getemail()));
            }
            return $ImputadosordenesDto;
        }

        public function selectImputadosordenes($ImputadosordenesDto) {
            $ImputadosordenesDto = $this->validarImputadosordenes($ImputadosordenesDto);
            $ImputadosordenesController = new ImputadosordenesController();
            $ImputadosordenesDto = $ImputadosordenesController->selectImputadosordenes($ImputadosordenesDto);
            if ($ImputadosordenesDto != "") {
                $dtoToJson = new DtoToJson($ImputadosordenesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadosordenes($ImputadosordenesDto) {
            $ImputadosordenesDto = $this->validarImputadosordenes($ImputadosordenesDto);
            $ImputadosordenesController = new ImputadosordenesController();
            $ImputadosordenesDto = $ImputadosordenesController->insertImputadosordenes($ImputadosordenesDto);
            if ($ImputadosordenesDto != "") {
                $dtoToJson = new DtoToJson($ImputadosordenesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadosordenes($ImputadosordenesDto) {
            $ImputadosordenesDto = $this->validarImputadosordenes($ImputadosordenesDto);
            $ImputadosordenesController = new ImputadosordenesController();
            $ImputadosordenesDto = $ImputadosordenesController->updateImputadosordenes($ImputadosordenesDto);
            if ($ImputadosordenesDto != "") {
                $dtoToJson = new DtoToJson($ImputadosordenesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadosordenes($ImputadosordenesDto) {
            $ImputadosordenesDto = $this->validarImputadosordenes($ImputadosordenesDto);
            $ImputadosordenesController = new ImputadosordenesController();
            $ImputadosordenesDto = $ImputadosordenesController->deleteImputadosordenes($ImputadosordenesDto);
            if ($ImputadosordenesDto == true) {
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

    @$idImputadoOrden = $_POST["idImputadoOrden"];
    @$idSolicitudOrden = $_POST["idSolicitudOrden"];
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
    @$domicilio = $_POST["domicilio"];
    @$telefono = $_POST["telefono"];
    @$email = $_POST["email"];
    @$accion = $_POST["accion"];

    $imputadosordenesFacade = new ImputadosordenesFacade();
    $imputadosordenesDto = new ImputadosordenesDTO();

    $imputadosordenesDto->setIdImputadoOrden($idImputadoOrden);
    $imputadosordenesDto->setIdSolicitudOrden($idSolicitudOrden);
    $imputadosordenesDto->setActivo($activo);
    $imputadosordenesDto->setNombre($nombre);
    $imputadosordenesDto->setPaterno($paterno);
    $imputadosordenesDto->setMaterno($materno);
    $imputadosordenesDto->setAlias($alias);
    $imputadosordenesDto->setCveGenero($cveGenero);
    $imputadosordenesDto->setDetenido($detenido);
    $imputadosordenesDto->setCveTipoPersona($cveTipoPersona);
    $imputadosordenesDto->setNombreMoral($nombreMoral);
    $imputadosordenesDto->setFechaRegistro($fechaRegistro);
    $imputadosordenesDto->setFechaActualizacion($fechaActualizacion);
    $imputadosordenesDto->setDomicilio($domicilio);
    $imputadosordenesDto->setTelefono($telefono);
    $imputadosordenesDto->setEmail($email);

    if (($accion == "guardar") && ($idImputadoOrden == "")) {
        $imputadosordenesDto = $imputadosordenesFacade->insertImputadosordenes($imputadosordenesDto);
        echo $imputadosordenesDto;
    } else if (($accion == "guardar") && ($idImputadoOrden != "")) {
        $imputadosordenesDto = $imputadosordenesFacade->updateImputadosordenes($imputadosordenesDto);
        echo $imputadosordenesDto;
    } else if ($accion == "consultar") {
        $imputadosordenesDto = $imputadosordenesFacade->selectImputadosordenes($imputadosordenesDto);
        echo $imputadosordenesDto;
    } else if (($accion == "baja") && ($idImputadoOrden != "")) {
        $imputadosordenesDto = $imputadosordenesFacade->deleteImputadosordenes($imputadosordenesDto);
        echo $imputadosordenesDto;
    } else if (($accion == "seleccionar") && ($idImputadoOrden != "")) {
        $imputadosordenesDto = $imputadosordenesFacade->selectImputadosordenes($imputadosordenesDto);
        echo $imputadosordenesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>