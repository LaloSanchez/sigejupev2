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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadosmuestras/ImputadosmuestrasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadosmuestrasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadosmuestras($ImputadosmuestrasDto) {
            $ImputadosmuestrasDto->setidImputadoMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getidImputadoMuestra(), "utf8") : strtoupper($ImputadosmuestrasDto->getidImputadoMuestra()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getidImputadoMuestra())) {
                $ImputadosmuestrasDto->setidImputadoMuestra($this->fechaMysql($ImputadosmuestrasDto->getidImputadoMuestra()));
            }
            $ImputadosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getidSolicitudMuestra(), "utf8") : strtoupper($ImputadosmuestrasDto->getidSolicitudMuestra()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getidSolicitudMuestra())) {
                $ImputadosmuestrasDto->setidSolicitudMuestra($this->fechaMysql($ImputadosmuestrasDto->getidSolicitudMuestra()));
            }
            $ImputadosmuestrasDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getnombre(), "utf8") : strtoupper($ImputadosmuestrasDto->getnombre()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getnombre())) {
                $ImputadosmuestrasDto->setnombre($this->fechaMysql($ImputadosmuestrasDto->getnombre()));
            }
            $ImputadosmuestrasDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getpaterno(), "utf8") : strtoupper($ImputadosmuestrasDto->getpaterno()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getpaterno())) {
                $ImputadosmuestrasDto->setpaterno($this->fechaMysql($ImputadosmuestrasDto->getpaterno()));
            }
            $ImputadosmuestrasDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getmaterno(), "utf8") : strtoupper($ImputadosmuestrasDto->getmaterno()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getmaterno())) {
                $ImputadosmuestrasDto->setmaterno($this->fechaMysql($ImputadosmuestrasDto->getmaterno()));
            }
            $ImputadosmuestrasDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getalias(), "utf8") : strtoupper($ImputadosmuestrasDto->getalias()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getalias())) {
                $ImputadosmuestrasDto->setalias($this->fechaMysql($ImputadosmuestrasDto->getalias()));
            }
            $ImputadosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getcveGenero(), "utf8") : strtoupper($ImputadosmuestrasDto->getcveGenero()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getcveGenero())) {
                $ImputadosmuestrasDto->setcveGenero($this->fechaMysql($ImputadosmuestrasDto->getcveGenero()));
            }
            $ImputadosmuestrasDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getdetenido(), "utf8") : strtoupper($ImputadosmuestrasDto->getdetenido()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getdetenido())) {
                $ImputadosmuestrasDto->setdetenido($this->fechaMysql($ImputadosmuestrasDto->getdetenido()));
            }
            $ImputadosmuestrasDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getcveTipoPersona(), "utf8") : strtoupper($ImputadosmuestrasDto->getcveTipoPersona()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getcveTipoPersona())) {
                $ImputadosmuestrasDto->setcveTipoPersona($this->fechaMysql($ImputadosmuestrasDto->getcveTipoPersona()));
            }
            $ImputadosmuestrasDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getnombreMoral(), "utf8") : strtoupper($ImputadosmuestrasDto->getnombreMoral()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getnombreMoral())) {
                $ImputadosmuestrasDto->setnombreMoral($this->fechaMysql($ImputadosmuestrasDto->getnombreMoral()));
            }
            $ImputadosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getdomicilio(), "utf8") : strtoupper($ImputadosmuestrasDto->getdomicilio()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getdomicilio())) {
                $ImputadosmuestrasDto->setdomicilio($this->fechaMysql($ImputadosmuestrasDto->getdomicilio()));
            }
            $ImputadosmuestrasDto->settelefono(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->gettelefono(), "utf8") : strtoupper($ImputadosmuestrasDto->gettelefono()))))));
            if ($this->esFecha($ImputadosmuestrasDto->gettelefono())) {
                $ImputadosmuestrasDto->settelefono($this->fechaMysql($ImputadosmuestrasDto->gettelefono()));
            }
            $ImputadosmuestrasDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getemail(), "utf8") : strtoupper($ImputadosmuestrasDto->getemail()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getemail())) {
                $ImputadosmuestrasDto->setemail($this->fechaMysql($ImputadosmuestrasDto->getemail()));
            }
            $ImputadosmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getactivo(), "utf8") : strtoupper($ImputadosmuestrasDto->getactivo()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getactivo())) {
                $ImputadosmuestrasDto->setactivo($this->fechaMysql($ImputadosmuestrasDto->getactivo()));
            }
            $ImputadosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getfechaRegistro(), "utf8") : strtoupper($ImputadosmuestrasDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getfechaRegistro())) {
                $ImputadosmuestrasDto->setfechaRegistro($this->fechaMysql($ImputadosmuestrasDto->getfechaRegistro()));
            }
            $ImputadosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosmuestrasDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadosmuestrasDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadosmuestrasDto->getfechaActualizacion())) {
                $ImputadosmuestrasDto->setfechaActualizacion($this->fechaMysql($ImputadosmuestrasDto->getfechaActualizacion()));
            }
            return $ImputadosmuestrasDto;
        }

        public function selectImputadosmuestras($ImputadosmuestrasDto) {
            $ImputadosmuestrasDto = $this->validarImputadosmuestras($ImputadosmuestrasDto);
            $ImputadosmuestrasController = new ImputadosmuestrasController();
            $ImputadosmuestrasDto = $ImputadosmuestrasController->selectImputadosmuestras($ImputadosmuestrasDto);
            if ($ImputadosmuestrasDto != "") {
                $dtoToJson = new DtoToJson($ImputadosmuestrasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadosmuestras($ImputadosmuestrasDto) {
            $ImputadosmuestrasDto = $this->validarImputadosmuestras($ImputadosmuestrasDto);
            $ImputadosmuestrasController = new ImputadosmuestrasController();
            $ImputadosmuestrasDto = $ImputadosmuestrasController->insertImputadosmuestras($ImputadosmuestrasDto);
            if ($ImputadosmuestrasDto != "") {
                $dtoToJson = new DtoToJson($ImputadosmuestrasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadosmuestras($ImputadosmuestrasDto) {
            $ImputadosmuestrasDto = $this->validarImputadosmuestras($ImputadosmuestrasDto);
            $ImputadosmuestrasController = new ImputadosmuestrasController();
            $ImputadosmuestrasDto = $ImputadosmuestrasController->updateImputadosmuestras($ImputadosmuestrasDto);
            if ($ImputadosmuestrasDto != "") {
                $dtoToJson = new DtoToJson($ImputadosmuestrasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadosmuestras($ImputadosmuestrasDto) {
            $ImputadosmuestrasDto = $this->validarImputadosmuestras($ImputadosmuestrasDto);
            $ImputadosmuestrasController = new ImputadosmuestrasController();
            $ImputadosmuestrasDto = $ImputadosmuestrasController->deleteImputadosmuestras($ImputadosmuestrasDto);
            if ($ImputadosmuestrasDto == true) {
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

    @$idImputadoMuestra = $_POST["idImputadoMuestra"];
    @$idSolicitudMuestra = $_POST["idSolicitudMuestra"];
    @$nombre = $_POST["nombre"];
    @$paterno = $_POST["paterno"];
    @$materno = $_POST["materno"];
    @$alias = $_POST["alias"];
    @$cveGenero = $_POST["cveGenero"];
    @$detenido = $_POST["detenido"];
    @$cveTipoPersona = $_POST["cveTipoPersona"];
    @$nombreMoral = $_POST["nombreMoral"];
    @$domicilio = $_POST["domicilio"];
    @$telefono = $_POST["telefono"];
    @$email = $_POST["email"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $imputadosmuestrasFacade = new ImputadosmuestrasFacade();
    $imputadosmuestrasDto = new ImputadosmuestrasDTO();

    $imputadosmuestrasDto->setIdImputadoMuestra($idImputadoMuestra);
    $imputadosmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
    $imputadosmuestrasDto->setNombre($nombre);
    $imputadosmuestrasDto->setPaterno($paterno);
    $imputadosmuestrasDto->setMaterno($materno);
    $imputadosmuestrasDto->setAlias($alias);
    $imputadosmuestrasDto->setCveGenero($cveGenero);
    $imputadosmuestrasDto->setDetenido($detenido);
    $imputadosmuestrasDto->setCveTipoPersona($cveTipoPersona);
    $imputadosmuestrasDto->setNombreMoral($nombreMoral);
    $imputadosmuestrasDto->setDomicilio($domicilio);
    $imputadosmuestrasDto->setTelefono($telefono);
    $imputadosmuestrasDto->setEmail($email);
    $imputadosmuestrasDto->setActivo($activo);
    $imputadosmuestrasDto->setFechaRegistro($fechaRegistro);
    $imputadosmuestrasDto->setFechaActualizacion($fechaActualizacion);

    if( ($accion=="guardar") && ($=="") ) {
        $imputadosmuestrasDto = $imputadosmuestrasFacade->insertImputadosmuestras($imputadosmuestrasDto);
        echo $imputadosmuestrasDto;
    } else if(($accion=="guardar") && ($!="")) {
        $imputadosmuestrasDto = $imputadosmuestrasFacade->updateImputadosmuestras($imputadosmuestrasDto);
        echo $imputadosmuestrasDto;
    } else if ($accion == "consultar") {
        $imputadosmuestrasDto = $imputadosmuestrasFacade->selectImputadosmuestras($imputadosmuestrasDto);
        echo $imputadosmuestrasDto;
    } else
        if ( ($accion=="baja") && ($!="") ) {
        $imputadosmuestrasDto = $imputadosmuestrasFacade->deleteImputadosmuestras($imputadosmuestrasDto);
        echo $imputadosmuestrasDto;
    } else if( ($accion=="seleccionar") && ($!="") ) {
        $imputadosmuestrasDto = $imputadosmuestrasFacade->selectImputadosmuestras($imputadosmuestrasDto);
        echo $imputadosmuestrasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>