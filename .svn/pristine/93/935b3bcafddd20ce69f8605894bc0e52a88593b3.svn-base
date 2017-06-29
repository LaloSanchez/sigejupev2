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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reclusos/ReclusosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReclusosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarReclusos($ReclusosDto) {
        $ReclusosDto->setidRecluso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getidRecluso(), "utf8") : strtoupper($ReclusosDto->getidRecluso()))))));
        if ($this->esFecha($ReclusosDto->getidRecluso())) {
            $ReclusosDto->setidRecluso($this->fechaMysql($ReclusosDto->getidRecluso()));
        }
        $ReclusosDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getidIngresoCereso(), "utf8") : strtoupper($ReclusosDto->getidIngresoCereso()))))));
        if ($this->esFecha($ReclusosDto->getidIngresoCereso())) {
            $ReclusosDto->setidIngresoCereso($this->fechaMysql($ReclusosDto->getidIngresoCereso()));
        }
        $ReclusosDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getnombre(), "utf8") : strtoupper($ReclusosDto->getnombre()))))));
        if ($this->esFecha($ReclusosDto->getnombre())) {
            $ReclusosDto->setnombre($this->fechaMysql($ReclusosDto->getnombre()));
        }
        $ReclusosDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getpaterno(), "utf8") : strtoupper($ReclusosDto->getpaterno()))))));
        if ($this->esFecha($ReclusosDto->getpaterno())) {
            $ReclusosDto->setpaterno($this->fechaMysql($ReclusosDto->getpaterno()));
        }
        $ReclusosDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getmaterno(), "utf8") : strtoupper($ReclusosDto->getmaterno()))))));
        if ($this->esFecha($ReclusosDto->getmaterno())) {
            $ReclusosDto->setmaterno($this->fechaMysql($ReclusosDto->getmaterno()));
        }
        $ReclusosDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getalias(), "utf8") : strtoupper($ReclusosDto->getalias()))))));
        if ($this->esFecha($ReclusosDto->getalias())) {
            $ReclusosDto->setalias($this->fechaMysql($ReclusosDto->getalias()));
        }
        $ReclusosDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getdetenido(), "utf8") : strtoupper($ReclusosDto->getdetenido()))))));
        if ($this->esFecha($ReclusosDto->getdetenido())) {
            $ReclusosDto->setdetenido($this->fechaMysql($ReclusosDto->getdetenido()));
        }
        $ReclusosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getcveGenero(), "utf8") : strtoupper($ReclusosDto->getcveGenero()))))));
        if ($this->esFecha($ReclusosDto->getcveGenero())) {
            $ReclusosDto->setcveGenero($this->fechaMysql($ReclusosDto->getcveGenero()));
        }
        $ReclusosDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getcveEstadoPsicofisico(), "utf8") : strtoupper($ReclusosDto->getcveEstadoPsicofisico()))))));
        if ($this->esFecha($ReclusosDto->getcveEstadoPsicofisico())) {
            $ReclusosDto->setcveEstadoPsicofisico($this->fechaMysql($ReclusosDto->getcveEstadoPsicofisico()));
        }
        return $ReclusosDto;
    }

    public function selectReclusos($ReclusosDto) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->selectReclusos($ReclusosDto);
        if ($ReclusosDto != "") {
            $dtoToJson = new DtoToJson($ReclusosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function reclusosSolicitudes($param) {
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->reclusosSolicitudes($param);
        return $ReclusosDto;
    }

    public function consultarReclusos($ReclusosDto,$datos,$paginacion) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->consultarReclusos($ReclusosDto,$datos,$paginacion);
        if ($ReclusosDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ReclusosDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertReclusos($ReclusosDto) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->insertReclusos($ReclusosDto);
        if ($ReclusosDto != "") {
            $dtoToJson = new DtoToJson($ReclusosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateReclusos($ReclusosDto) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->updateReclusos($ReclusosDto);
        if ($ReclusosDto != "") {
            $dtoToJson = new DtoToJson($ReclusosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteReclusos($ReclusosDto) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->deleteReclusos($ReclusosDto);
        if ($ReclusosDto == true) {
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

    public function consultarCeresosPermitidos() {
        $ReclusosController = new ReclusosController();
        $CeresosPermitidos = $ReclusosController->consultarCeresosPermitidos();
        if ($CeresosPermitidos != "") {
            return $CeresosPermitidos;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function consultarDetallesRecluso($ReclusosDto,$datos,$paginacion){
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosController = new ReclusosController();
        $ReclusosDto = $ReclusosController->consultarDetallesRecluso($ReclusosDto,$datos,$paginacion);
        if ($ReclusosDto != "") {
            return $ReclusosDto;
}
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

}

@$idRecluso = $_POST["idRecluso"];
@$idIngresoCereso = $_POST["idIngresoCereso"];
@$nombre = $_POST["nombre"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$alias = $_POST["alias"];
@$detenido = $_POST["detenido"];
@$cveGenero = $_POST["cveGenero"];
@$cveEstadoPsicofisico = $_POST["cveEstadoPsicofisico"];
@$accion = $_POST["accion"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion']; //true
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
@$param["asigNumero"] = $_POST['asigNumero'];
@$param["idSolicitudAudiencia"] = $_POST['idSolicitudAudiencia'];

$reclusosFacade = new ReclusosFacade();
$reclusosDto = new ReclusosDTO();

$reclusosDto->setIdRecluso($idRecluso);
$reclusosDto->setIdIngresoCereso($idIngresoCereso);
$reclusosDto->setNombre($nombre);
$reclusosDto->setPaterno($paterno);
$reclusosDto->setMaterno($materno);
$reclusosDto->setAlias($alias);
$reclusosDto->setDetenido($detenido);
$reclusosDto->setCveGenero($cveGenero);
$reclusosDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);

if (($accion == "guardar") && ($idRecluso == "")) {
    $reclusosDto = $reclusosFacade->insertReclusos($reclusosDto);
    echo $reclusosDto;
} else if (($accion == "guardar") && ($idRecluso != "")) {
    $reclusosDto = $reclusosFacade->updateReclusos($reclusosDto);
    echo $reclusosDto;
} else if ($accion == "consultar") {
    $reclusosDto = $reclusosFacade->selectReclusos($reclusosDto);
    echo $reclusosDto;
} else if (($accion == "baja") && ($idRecluso != "")) {
    $reclusosDto = $reclusosFacade->deleteReclusos($reclusosDto);
    echo $reclusosDto;
} else if (($accion == "seleccionar") && ($idRecluso != "")) {
    $reclusosDto = $reclusosFacade->selectReclusos($reclusosDto);
    echo $reclusosDto;
} else if ($accion == "consultarReclusos") {
    $datos = array();
    @$datos["cveCereso"] = $_POST["cveCereso"];
    @$datos["carpetaInv"] = $_POST["carpetaInv"];
    @$datos["nuc"] = $_POST["nuc"]; 
    $reclusosDto = $reclusosFacade->consultarReclusos($reclusosDto,$datos,$param);
    echo $reclusosDto;
} else if ($accion == "consultarCeresosPermitidos") {
    $reclusosDto = $reclusosFacade->consultarCeresosPermitidos();
    echo $reclusosDto;
} else if ($accion == "reclusosSolicitudes") {
    $reclusosDto = $reclusosFacade->reclusosSolicitudes($param);
    echo $reclusosDto;
} else if ($accion =="consultarDetallesRecluso"){
    $datos = array();
    @$datos["cveCereso"] = $_POST["cveCereso"];
    @$datos["carpetaInv"] = $_POST["carpetaInv"];
    @$datos["nuc"] = $_POST["nuc"]; 
    @$datos["nombreCompleto"] = $_POST["nombreCompleto"];
    $reclusosDto = $reclusosFacade->consultarDetallesRecluso($reclusosDto,$datos,$param);
    echo $reclusosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>