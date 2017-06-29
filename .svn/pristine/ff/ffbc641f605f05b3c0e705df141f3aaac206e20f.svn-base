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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresosadscripciones/CeresosadscripcionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ceresosadscripciones/CeresosadscripcionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class CeresosadscripcionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCeresosadscripciones($CeresosadscripcionesDto) {
        $CeresosadscripcionesDto->setidCeresoAdscripcion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getidCeresoAdscripcion(), "utf8") : strtoupper($CeresosadscripcionesDto->getidCeresoAdscripcion()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getidCeresoAdscripcion())) {
            $CeresosadscripcionesDto->setidCeresoAdscripcion($this->fechaMysql($CeresosadscripcionesDto->getidCeresoAdscripcion()));
        }
        $CeresosadscripcionesDto->setcveCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getcveCereso(), "utf8") : strtoupper($CeresosadscripcionesDto->getcveCereso()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getcveCereso())) {
            $CeresosadscripcionesDto->setcveCereso($this->fechaMysql($CeresosadscripcionesDto->getcveCereso()));
        }
        $CeresosadscripcionesDto->setcveAdscripcion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getcveAdscripcion(), "utf8") : strtoupper($CeresosadscripcionesDto->getcveAdscripcion()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getcveAdscripcion())) {
            $CeresosadscripcionesDto->setcveAdscripcion($this->fechaMysql($CeresosadscripcionesDto->getcveAdscripcion()));
        }
        $CeresosadscripcionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getactivo(), "utf8") : strtoupper($CeresosadscripcionesDto->getactivo()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getactivo())) {
            $CeresosadscripcionesDto->setactivo($this->fechaMysql($CeresosadscripcionesDto->getactivo()));
        }
        $CeresosadscripcionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getfechaRegistro(), "utf8") : strtoupper($CeresosadscripcionesDto->getfechaRegistro()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getfechaRegistro())) {
            $CeresosadscripcionesDto->setfechaRegistro($this->fechaMysql($CeresosadscripcionesDto->getfechaRegistro()));
        }
        $CeresosadscripcionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CeresosadscripcionesDto->getfechaActualizacion(), "utf8") : strtoupper($CeresosadscripcionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($CeresosadscripcionesDto->getfechaActualizacion())) {
            $CeresosadscripcionesDto->setfechaActualizacion($this->fechaMysql($CeresosadscripcionesDto->getfechaActualizacion()));
        }
        return $CeresosadscripcionesDto;
    }

    public function selectCeresosadscripciones($CeresosadscripcionesDto) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->selectCeresosadscripciones($CeresosadscripcionesDto);
        if ($CeresosadscripcionesDto != "") {
            $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertCeresosadscripciones($CeresosadscripcionesDto,$cveAccion,$paramSession) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->insertCeresosadscripciones($CeresosadscripcionesDto,$cveAccion,$paramSession);
        
        if (is_array($CeresosadscripcionesDto)) {
        
            if ($CeresosadscripcionesDto != "") {
                $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
        } else if($CeresosadscripcionesDto == "existe"){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "EL REGISTRO YA EXISTE"));
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }
        
    }

    public function updateCeresosadscripciones($CeresosadscripcionesDto,$cveAccion,$paramSession) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->updateCeresosadscripciones($CeresosadscripcionesDto,$cveAccion,$paramSession);
        
        if (is_array($CeresosadscripcionesDto)) {
        
            if ($CeresosadscripcionesDto != "") {
                $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
        } else if($CeresosadscripcionesDto == "existe"){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "EL REGISTRO YA EXISTE"));
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }
    }

    public function deleteCeresosadscripciones($CeresosadscripcionesDto,$cveAccion) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->deleteCeresosadscripciones($CeresosadscripcionesDto,$cveAccion);
        if ($CeresosadscripcionesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function consultarDescripciones($CeresosadscripcionesDto, $param) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->consultarDescripciones($CeresosadscripcionesDto,$param);
        if ($CeresosadscripcionesDto != "") {
            //$dtoToJson = new DtoToJson($CeresosadscripcionesDto);
            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            return $CeresosadscripcionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function getPaginas($CeresosadscripcionesDto, $param) {
        //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $CeresosadscripcionesController = new CeresosadscripcionesController();
        $CeresosadscripcionesDto = $CeresosadscripcionesController->getPaginas($CeresosadscripcionesDto, $param);
        if ($CeresosadscripcionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $CeresosadscripcionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
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

@$idCeresoAdscripcion = $_POST["idCeresoAdscripcion"];
@$cveCereso = $_POST["cveCereso"];
@$cveAdscripcion = $_POST["cveAdscripcion"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
@$param["asigNumero"] = $_POST['asigNumero'];
// variables de session
$paramSession = array();
@$paramSession["cveUsuarioSesion"] = $_POST['cveUsuarioSesion'];
@$paramSession["cvePerfilSesion"] = $_POST['cvePerfilSesion'];
@$paramSession["juzgadoSesion"] = $_POST['juzgadoSesion'];



$ceresosadscripcionesFacade = new CeresosadscripcionesFacade();
$ceresosadscripcionesDto = new CeresosadscripcionesDTO();

$ceresosadscripcionesDto->setIdCeresoAdscripcion($idCeresoAdscripcion);
$ceresosadscripcionesDto->setCveCereso($cveCereso);
$ceresosadscripcionesDto->setCveAdscripcion($cveAdscripcion);
$ceresosadscripcionesDto->setActivo($activo);
$ceresosadscripcionesDto->setFechaRegistro($fechaRegistro);
$ceresosadscripcionesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idCeresoAdscripcion == "")) {
    $cveAccion = $_POST["cveAccion"]; // bitacora
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->insertCeresosadscripciones($ceresosadscripcionesDto,$cveAccion,$paramSession);
    echo $ceresosadscripcionesDto;
} else if (($accion == "guardar") && ($idCeresoAdscripcion != "")) { // actualizacion
    $cveAccion = $_POST["cveAccion"]; // bitacora
    $ceresosadscripcionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->updateCeresosadscripciones($ceresosadscripcionesDto,$cveAccion,$paramSession);
    echo $ceresosadscripcionesDto;
} else if ($accion == "consultar") {
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->selectCeresosadscripciones($ceresosadscripcionesDto);
    echo $ceresosadscripcionesDto;
} else if (($accion == "baja") && ($idCeresoAdscripcion != "")) {
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->deleteCeresosadscripciones($ceresosadscripcionesDto);
    echo $ceresosadscripcionesDto;
} else if (($accion == "seleccionar") && ($idCeresoAdscripcion != "")) {
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->selectCeresosadscripciones($ceresosadscripcionesDto);
    echo $ceresosadscripcionesDto;
} else if (($accion == "consultarDescripciones")) {
    $param["paginacion"] = true;
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->consultarDescripciones($ceresosadscripcionesDto,$param);
    echo $ceresosadscripcionesDto;
}else if($accion == "getPaginas"){
    $param["paginacion"] = true;
    $ceresosadscripcionesDto = $ceresosadscripcionesFacade->getPaginas($ceresosadscripcionesDto,$param);
    echo $ceresosadscripcionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>