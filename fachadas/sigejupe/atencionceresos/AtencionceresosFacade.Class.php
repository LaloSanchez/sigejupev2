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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionceresos/AtencionceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/atencionceresos/AtencionceresosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AtencionceresosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAtencionceresos($AtencionceresosDto) {
        $AtencionceresosDto->setidAtencionCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getidAtencionCereso(), "utf8") : strtoupper($AtencionceresosDto->getidAtencionCereso()))))));
        if ($this->esFecha($AtencionceresosDto->getidAtencionCereso())) {
            $AtencionceresosDto->setidAtencionCereso($this->fechaMysql($AtencionceresosDto->getidAtencionCereso()));
        }
        $AtencionceresosDto->setcveCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getcveCereso(), "utf8") : strtoupper($AtencionceresosDto->getcveCereso()))))));
        if ($this->esFecha($AtencionceresosDto->getcveCereso())) {
            $AtencionceresosDto->setcveCereso($this->fechaMysql($AtencionceresosDto->getcveCereso()));
        }
        $AtencionceresosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getcveJuzgado(), "utf8") : strtoupper($AtencionceresosDto->getcveJuzgado()))))));
        if ($this->esFecha($AtencionceresosDto->getcveJuzgado())) {
            $AtencionceresosDto->setcveJuzgado($this->fechaMysql($AtencionceresosDto->getcveJuzgado()));
        }
        $AtencionceresosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getactivo(), "utf8") : strtoupper($AtencionceresosDto->getactivo()))))));
        if ($this->esFecha($AtencionceresosDto->getactivo())) {
            $AtencionceresosDto->setactivo($this->fechaMysql($AtencionceresosDto->getactivo()));
        }
        $AtencionceresosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getfechaRegistro(), "utf8") : strtoupper($AtencionceresosDto->getfechaRegistro()))))));
        if ($this->esFecha($AtencionceresosDto->getfechaRegistro())) {
            $AtencionceresosDto->setfechaRegistro($this->fechaMysql($AtencionceresosDto->getfechaRegistro()));
        }
        $AtencionceresosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionceresosDto->getfechaActualizacion(), "utf8") : strtoupper($AtencionceresosDto->getfechaActualizacion()))))));
        if ($this->esFecha($AtencionceresosDto->getfechaActualizacion())) {
            $AtencionceresosDto->setfechaActualizacion($this->fechaMysql($AtencionceresosDto->getfechaActualizacion()));
        }
        return $AtencionceresosDto;
    }

    public function selectAtencionceresos($AtencionceresosDto) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosController = new AtencionceresosController();
        $AtencionceresosDto = $AtencionceresosController->selectAtencionceresos($AtencionceresosDto);
        if ($AtencionceresosDto != "") {
            $dtoToJson = new DtoToJson($AtencionceresosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosController = new AtencionceresosController();
        $AtencionceresosDto = $AtencionceresosController->insertAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession);
        
        if (is_array($AtencionceresosDto)) {
        
            if ($AtencionceresosDto != "") {
                $dtoToJson = new DtoToJson($AtencionceresosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
        } else if($AtencionceresosDto == "existe"){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "EL REGISTRO YA EXISTE"));
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }
    }

    public function updateAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosController = new AtencionceresosController();
        $AtencionceresosDto = $AtencionceresosController->updateAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession);
        
        if (is_array($AtencionceresosDto)) {
        
            if ($AtencionceresosDto != "") {
                $dtoToJson = new DtoToJson($AtencionceresosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
        } else if($AtencionceresosDto == "existe"){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "EL REGISTRO YA EXISTE"));
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }
        
    }

    public function deleteAtencionceresos($AtencionceresosDto) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosController = new AtencionceresosController();
        $AtencionceresosDto = $AtencionceresosController->deleteAtencionceresos($AtencionceresosDto);
        if ($AtencionceresosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function consultarDescripciones($AtencionceresosDto, $param) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosController = new AtencionceresosController();
        $AtencionceresosDto = $AtencionceresosController->consultarDescripciones($AtencionceresosDto,$param);
        if ($AtencionceresosDto != "") {
            //$dtoToJson = new DtoToJson($CeresosadscripcionesDto);
            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            return $AtencionceresosDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function getPaginas($atencionceresosDto, $param) {
        //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $AtencionceresosController = new AtencionceresosController();
        $atencionceresosDto = $AtencionceresosController->getPaginas($atencionceresosDto, $param);
        if ($atencionceresosDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $atencionceresosDto;
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

@$idAtencionCereso = $_POST["idAtencionCereso"];
@$cveCereso = $_POST["cveCereso"];
@$cveJuzgado = $_POST["cveJuzgado"];
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

$atencionceresosFacade = new AtencionceresosFacade();
$atencionceresosDto = new AtencionceresosDTO();

$atencionceresosDto->setIdAtencionCereso($idAtencionCereso);
$atencionceresosDto->setCveCereso($cveCereso);
$atencionceresosDto->setCveJuzgado($cveJuzgado);
$atencionceresosDto->setActivo($activo);
$atencionceresosDto->setFechaRegistro($fechaRegistro);
$atencionceresosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idAtencionCereso == "")) {
    $cveAccion = $_POST["cveAccion"]; // bitacora
    $atencionceresosDto = $atencionceresosFacade->insertAtencionceresos($atencionceresosDto,$cveAccion,$paramSession);
    echo $atencionceresosDto;
} else if (($accion == "guardar") && ($idAtencionCereso != "")) {
    $cveAccion = $_POST["cveAccion"]; // bitacora
    $atencionceresosDto = $atencionceresosFacade->updateAtencionceresos($atencionceresosDto,$cveAccion,$paramSession);
    echo $atencionceresosDto;
} else if ($accion == "consultar") {
    $atencionceresosDto = $atencionceresosFacade->selectAtencionceresos($atencionceresosDto);
    echo $atencionceresosDto;
} else if (($accion == "baja") && ($idAtencionCereso != "")) {
    $atencionceresosDto = $atencionceresosFacade->deleteAtencionceresos($atencionceresosDto);
    echo $atencionceresosDto;
} else if (($accion == "seleccionar") && ($idAtencionCereso != "")) {
    $atencionceresosDto = $atencionceresosFacade->selectAtencionceresos($atencionceresosDto);
    echo $atencionceresosDto;
} else if($accion == "consultarDescripciones"){
   $param["paginacion"] = true; 
   $atencionceresosDto = $atencionceresosFacade->consultarDescripciones($atencionceresosDto,$param);
    echo $atencionceresosDto; 
}else if($accion == "getPaginas"){
    $param["paginacion"] = true;
    $atencionceresosDto = $atencionceresosFacade->getPaginas($atencionceresosDto,$param);
    echo $atencionceresosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>