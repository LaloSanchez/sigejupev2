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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/remisionapelaciones/RemisionapelacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class RemisionapelacionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto->setidRemisionApelacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getidRemisionApelacion(), "utf8") : strtoupper($RemisionapelacionesDto->getidRemisionApelacion()))))));
        if ($this->esFecha($RemisionapelacionesDto->getidRemisionApelacion())) {
            $RemisionapelacionesDto->setidRemisionApelacion($this->fechaMysql($RemisionapelacionesDto->getidRemisionApelacion()));
        }
        $RemisionapelacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getidActuacion(), "utf8") : strtoupper($RemisionapelacionesDto->getidActuacion()))))));
        if ($this->esFecha($RemisionapelacionesDto->getidActuacion())) {
            $RemisionapelacionesDto->setidActuacion($this->fechaMysql($RemisionapelacionesDto->getidActuacion()));
        }
        $RemisionapelacionesDto->setidOficio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getidOficio(), "utf8") : strtoupper($RemisionapelacionesDto->getidOficio()))))));
        if ($this->esFecha($RemisionapelacionesDto->getidOficio())) {
            $RemisionapelacionesDto->setidOficio($this->fechaMysql($RemisionapelacionesDto->getidOficio()));
        }
        $RemisionapelacionesDto->setidResolucionCombatida(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getidResolucionCombatida(), "utf8") : strtoupper($RemisionapelacionesDto->getidResolucionCombatida()))))));
        if ($this->esFecha($RemisionapelacionesDto->getidResolucionCombatida())) {
            $RemisionapelacionesDto->setidResolucionCombatida($this->fechaMysql($RemisionapelacionesDto->getidResolucionCombatida()));
        }
        $RemisionapelacionesDto->setcveRecurso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getcveRecurso(), "utf8") : strtoupper($RemisionapelacionesDto->getcveRecurso()))))));
        if ($this->esFecha($RemisionapelacionesDto->getcveRecurso())) {
            $RemisionapelacionesDto->setcveRecurso($this->fechaMysql($RemisionapelacionesDto->getcveRecurso()));
        }
        $RemisionapelacionesDto->setcveEfecto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getcveEfecto(), "utf8") : strtoupper($RemisionapelacionesDto->getcveEfecto()))))));
        if ($this->esFecha($RemisionapelacionesDto->getcveEfecto())) {
            $RemisionapelacionesDto->setcveEfecto($this->fechaMysql($RemisionapelacionesDto->getcveEfecto()));
        }
        $RemisionapelacionesDto->setagravios(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getagravios(), "utf8") : strtoupper($RemisionapelacionesDto->getagravios()))))));
        if ($this->esFecha($RemisionapelacionesDto->getagravios())) {
            $RemisionapelacionesDto->setagravios($this->fechaMysql($RemisionapelacionesDto->getagravios()));
        }
        $RemisionapelacionesDto->setfecCorreTraslado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfecCorreTraslado(), "utf8") : strtoupper($RemisionapelacionesDto->getfecCorreTraslado()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfecCorreTraslado())) {
            $RemisionapelacionesDto->setfecCorreTraslado($this->fechaMysql($RemisionapelacionesDto->getfecCorreTraslado()));
        }
        $RemisionapelacionesDto->setfecInterponeRecurso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfecInterponeRecurso(), "utf8") : strtoupper($RemisionapelacionesDto->getfecInterponeRecurso()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfecInterponeRecurso())) {
            $RemisionapelacionesDto->setfecInterponeRecurso($this->fechaMysql($RemisionapelacionesDto->getfecInterponeRecurso()));
        }
        $RemisionapelacionesDto->setfecNotificaSenAut(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfecNotificaSenAut(), "utf8") : strtoupper($RemisionapelacionesDto->getfecNotificaSenAut()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfecNotificaSenAut())) {
            $RemisionapelacionesDto->setfecNotificaSenAut($this->fechaMysql($RemisionapelacionesDto->getfecNotificaSenAut()));
        }
        $RemisionapelacionesDto->setfecAdhesion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfecAdhesion(), "utf8") : strtoupper($RemisionapelacionesDto->getfecAdhesion()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfecAdhesion())) {
            $RemisionapelacionesDto->setfecAdhesion($this->fechaMysql($RemisionapelacionesDto->getfecAdhesion()));
        }
        $RemisionapelacionesDto->setemplazamiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getemplazamiento(), "utf8") : strtoupper($RemisionapelacionesDto->getemplazamiento()))))));
        if ($this->esFecha($RemisionapelacionesDto->getemplazamiento())) {
            $RemisionapelacionesDto->setemplazamiento($this->fechaMysql($RemisionapelacionesDto->getemplazamiento()));
        }

        $RemisionapelacionesDto->setcveSentido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getcveSentido(), "utf8") : strtoupper($RemisionapelacionesDto->getcveSentido()))))));
        if ($this->esFecha($RemisionapelacionesDto->getcveSentido())) {
            $RemisionapelacionesDto->setcveSentido($this->fechaMysql($RemisionapelacionesDto->getcveSentido()));
        }
        $RemisionapelacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getactivo(), "utf8") : strtoupper($RemisionapelacionesDto->getactivo()))))));
        if ($this->esFecha($RemisionapelacionesDto->getactivo())) {
            $RemisionapelacionesDto->setactivo($this->fechaMysql($RemisionapelacionesDto->getactivo()));
        }
        $RemisionapelacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfechaRegistro(), "utf8") : strtoupper($RemisionapelacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfechaRegistro())) {
            $RemisionapelacionesDto->setfechaRegistro($this->fechaMysql($RemisionapelacionesDto->getfechaRegistro()));
        }
        $RemisionapelacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RemisionapelacionesDto->getfechaActualizacion(), "utf8") : strtoupper($RemisionapelacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($RemisionapelacionesDto->getfechaActualizacion())) {
            $RemisionapelacionesDto->setfechaActualizacion($this->fechaMysql($RemisionapelacionesDto->getfechaActualizacion()));
        }
        return $RemisionapelacionesDto;
    }

    public function selectRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->selectRemisionapelaciones($RemisionapelacionesDto);
        if ($RemisionapelacionesDto != "") {
            $dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function consultarRemisionapelaciones($params, $paginacion) {

        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->consultarRemisionapelaciones($params, $paginacion);
        if ($RemisionapelacionesDto != "") {
            //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function consultarRemisionapelacionesToca($params, $paginacion) {

        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->consultarRemisionapelacionesToca($params, $paginacion);
        if ($RemisionapelacionesDto != "") {
            //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function obtenerPaginas($params, $paginacion) {

        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->obtenerPaginas($params, $paginacion);
        if ($RemisionapelacionesDto != "") {
            //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function buscarActuacionRemision($params, $paginacion) {

        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->buscarActuacionRemision($params, $paginacion);
        return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        
    }
    public function obtenerRemisionTocaArbol($params, $paginacion) {

        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->obtenerRemisionTocaArbol($params, $paginacion);
        return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        
    }
    public function obtenerRemisionCausaArbol($params, $paginacion) {
        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->obtenerRemisionCausaArbol($params, $paginacion);
        return $RemisionapelacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
    }
    
    

    public function insertRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->insertRemisionapelaciones($RemisionapelacionesDto);
        if ($RemisionapelacionesDto != "") {
            $dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->updateRemisionapelaciones($RemisionapelacionesDto);
        if ($RemisionapelacionesDto != "") {
            $dtoToJson = new DtoToJson($RemisionapelacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesController = new RemisionapelacionesController();
        $RemisionapelacionesDto = $RemisionapelacionesController->deleteRemisionapelaciones($RemisionapelacionesDto);
        if ($RemisionapelacionesDto == true) {
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

@$idRemisionApelacion = $_POST["idRemisionApelacion"];
@$idActuacion = $_POST["idActuacion"];
@$idOficio = $_POST["idOficio"];
@$idResolucionCombatida = $_POST["idResolucionCombatida"];
@$cveRecurso = $_POST["cveRecurso"];
@$cveEfecto = $_POST["cveEfecto"];
@$agravios = $_POST["agravios"];
@$fecCorreTraslado = $_POST["fecCorreTraslado"];
@$fecInterponeRecurso = $_POST["fecInterponeRecurso"];
@$fecNotificaSenAut = $_POST["fecNotificaSenAut"];
@$fecAdhesion = $_POST["fecAdhesion"];
@$emplazamiento = $_POST["emplazamiento"];
@$fecEmplazamiento = $_POST["fecEmplazamiento"];
@$cveSentido = $_POST["cveSentido"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$remisionapelacionesFacade = new RemisionapelacionesFacade();
$remisionapelacionesDto = new RemisionapelacionesDTO();

$remisionapelacionesDto->setIdRemisionApelacion($idRemisionApelacion);
$remisionapelacionesDto->setIdActuacion($idActuacion);
$remisionapelacionesDto->setIdOficio($idOficio);
$remisionapelacionesDto->setIdResolucionCombatida($idResolucionCombatida);
$remisionapelacionesDto->setCveRecurso($cveRecurso);
$remisionapelacionesDto->setCveEfecto($cveEfecto);
$remisionapelacionesDto->setAgravios($agravios);
$remisionapelacionesDto->setFecCorreTraslado($fecCorreTraslado);
$remisionapelacionesDto->setFecInterponeRecurso($fecInterponeRecurso);
$remisionapelacionesDto->setFecNotificaSenAut($fecNotificaSenAut);
$remisionapelacionesDto->setFecAdhesion($fecAdhesion);
$remisionapelacionesDto->setEmplazamiento($emplazamiento);
$remisionapelacionesDto->setCveSentido($cveSentido);
$remisionapelacionesDto->setActivo($activo);
$remisionapelacionesDto->setFechaRegistro($fechaRegistro);
$remisionapelacionesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idRemisionApelacion == "")) {
    $remisionapelacionesDto = $remisionapelacionesFacade->insertRemisionapelaciones($remisionapelacionesDto);
    echo $remisionapelacionesDto;
} else if (($accion == "guardar") && ($idRemisionApelacion != "")) {
    $remisionapelacionesDto = $remisionapelacionesFacade->updateRemisionapelaciones($remisionapelacionesDto);
    echo $remisionapelacionesDto;
} else if ($accion == "consultar") {
    $remisionapelacionesDto = $remisionapelacionesFacade->selectRemisionapelaciones($remisionapelacionesDto);
    echo $remisionapelacionesDto;
} else if (($accion == "baja") && ($idRemisionApelacion != "")) {
    $remisionapelacionesDto = $remisionapelacionesFacade->deleteRemisionapelaciones($remisionapelacionesDto);
    echo $remisionapelacionesDto;
} else if (($accion == "seleccionar") && ($idRemisionApelacion != "")) {
    $remisionapelacionesDto = $remisionapelacionesFacade->selectRemisionapelaciones($remisionapelacionesDto);
    echo $remisionapelacionesDto;
} else if ($accion == "consultarRemision") {
    $params['cveJuzgado'] = $_POST['cveJuzgado'];
    $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
    $params['numero'] = $_POST['numero'];
    $params['anio'] = $_POST['anio'];
    $params['fechaInicial'] = $_POST['fechaInicial'];
    $params['fechaFinal'] = $_POST['fechaFinal'];
    //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = $_POST["paginacion"];
    $remisionapelacionesDto = $remisionapelacionesFacade->consultarRemisionapelaciones($params, $paginacion);
    echo $remisionapelacionesDto;
} else if ($accion == "consultarRemisionToca") {
    $params['cveJuzgado'] = $_POST['cveJuzgado'];
    $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
    $params['numero'] = $_POST['numero'];
    $params['anio'] = $_POST['anio'];
    $params['fechaInicial'] = $_POST['fechaInicial'];
    $params['fechaFinal'] = $_POST['fechaFinal'];
    //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = $_POST["paginacion"];
    $remisionapelacionesDto = $remisionapelacionesFacade->consultarRemisionapelacionesToca($params, $paginacion);
    echo $remisionapelacionesDto;
} else if ($accion == "getPaginasRemision") {
    $params['toca'] = "";
    $params['cveJuzgado'] = $_POST['cveJuzgado'];
    $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
    $params['numero'] = $_POST['numero'];
    $params['anio'] = $_POST['anio'];
    $params['fechaInicial'] = $_POST['fechaInicial'];
    $params['fechaFinal'] = $_POST['fechaFinal'];
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;
    $remisionapelacionesDto = $remisionapelacionesFacade->obtenerPaginas($params, $paginacion);
    echo $remisionapelacionesDto;
} else if ($accion == "getPaginasRemisionToca") {
    $params['toca'] = "true";
    $params['cveJuzgado'] = $_POST['cveJuzgado'];
    $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
    $params['numero'] = $_POST['numero'];
    $params['anio'] = $_POST['anio'];
    $params['fechaInicial'] = $_POST['fechaInicial'];
    $params['fechaFinal'] = $_POST['fechaFinal'];
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;
    $remisionapelacionesDto = $remisionapelacionesFacade->obtenerPaginas($params, $paginacion);
    echo $remisionapelacionesDto;
} else if ($accion == "buscarActuacionRemision") {
    $params['idActuacionCarpeta'] = $_POST['idActuacionCarpeta'];
    $params['idActuacion'] = $_POST['idActuacion'];
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;
    $actuacionremision = $remisionapelacionesFacade->buscarActuacionRemision($params, $paginacion);
    echo $actuacionremision;
}else if ($accion == "obtenerRemisionTocaArbol") {
    $params['idActuacion'] = $_POST['idActuacion'];
    $actuacionremision = $remisionapelacionesFacade->obtenerRemisionTocaArbol($params, null);
    echo $actuacionremision;
}
else if ($accion == "obtenerRemisionCausaArbol") {
    $params['idActuacion'] = $_POST['idActuacion'];
    $actuacionremision = $remisionapelacionesFacade->obtenerRemisionCausaArbol($params, null);
    echo $actuacionremision;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>