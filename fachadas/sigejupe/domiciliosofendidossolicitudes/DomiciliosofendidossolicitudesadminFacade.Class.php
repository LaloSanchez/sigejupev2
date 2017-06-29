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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DomiciliosofendidossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto->setidDomicilioOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud())))));
        $DomiciliosofendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getIdOfendidoSolicitud())))));
        $DomiciliosofendidossolicitudesDto->setDomicilioProcesal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getDomicilioProcesal())))));
        $DomiciliosofendidossolicitudesDto->setcvePais(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcvePais())))));
        $DomiciliosofendidossolicitudesDto->setcveEstado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveEstado())))));
        $DomiciliosofendidossolicitudesDto->setcveMunicipio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveMunicipio())))));
        $DomiciliosofendidossolicitudesDto->setdireccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getDireccion())))));
        $DomiciliosofendidossolicitudesDto->setcolonia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcolonia())))));
        $DomiciliosofendidossolicitudesDto->setnumInterior(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getnumInterior())))));
        $DomiciliosofendidossolicitudesDto->setnumExterior(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getnumExterior())))));
        $DomiciliosofendidossolicitudesDto->setcp(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcp())))));
        $DomiciliosofendidossolicitudesDto->setlatitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getlatitud())))));
        $DomiciliosofendidossolicitudesDto->setlongitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getlongitud())))));
        $DomiciliosofendidossolicitudesDto->setrecidenciaHabitual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getrecidenciaHabitual())))));
        $DomiciliosofendidossolicitudesDto->setestado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getEstado())))));
        $DomiciliosofendidossolicitudesDto->setmunicipio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getmunicipio())))));
        $DomiciliosofendidossolicitudesDto->setcveConvivencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveConvivencia())))));
        $DomiciliosofendidossolicitudesDto->setcveTipoDeVivienda(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveTipoDeVivienda())))));

        return $DomiciliosofendidossolicitudesDto;
    }

    public function selectDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->selectDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        if (count($DomiciliosofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($DomiciliosofendidossolicitudesDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function agregarDomicilioOfendido($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->agregarDomicilioOfendido($DomiciliosofendidossolicitudesDto);

        return json_encode($DomiciliosofendidossolicitudesDto);
    }

    public function modificarDomicilioOfendido($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->modificarDomicilioOfendido($DomiciliosofendidossolicitudesDto);

        return json_encode($DomiciliosofendidossolicitudesDto);
    }

    public function eliminarDomicilioOfendido($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->eliminarDomicilioOfendido($DomiciliosofendidossolicitudesDto);

        return json_encode($DomiciliosofendidossolicitudesDto);
    }

    public function insertDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->insertDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        if (count($DomiciliosofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($DomiciliosofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->updateDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        if (count($DomiciliosofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($DomiciliosofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto) {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesController = new DomiciliosofendidossolicitudesController();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesController->deleteDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        if ($DomiciliosofendidossolicitudesDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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

@$idDomicilioOfendidoSolicitud = $_POST["idDomicilioOfendidoSolicitud"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$DomicilioProcesal = isset($_POST["DomicilioProcesal"]) ? 'S' : '';
@$cvePais = $_POST["cmbPaisDomicilioOfendido"];
@$cveEstado = $_POST["cmbEstadoDomicilioOfendido"];
@$cveMunicipio = $_POST["cmbMunicipioDomicilioOfendido"];
@$direccion = $_POST["direccionDomicilio"];
@$colonia = $_POST["coloniaDireccion"];
@$numInterior = $_POST["numeroIntDomicilio"];
@$numExterior = $_POST["numeroExtDomicilio"];
@$cp = $_POST["cpDomicilio"];
@$latitud = $_POST["latitud"];
@$longitud = $_POST["longitud"];
@$recidenciaHabitual = isset($_POST["cbResidenciaHabitualOfendido"]) ? 'S' : '';
@$estado = $_POST["estadoDomicilioOfendido"];
@$municipio = $_POST["municipioDomicilioOfendido"];
@$cveConvivencia = $_POST["cmbConvivenciaOfendido"];
@$cveTipoDeVivienda = $_POST["cmbTipoViviendaOfendido"];
@$accion = $_POST["accion"];
@$activo = $_POST["activo"];

$domiciliosofendidossolicitudesFacade = new DomiciliosofendidossolicitudesFacade();
$domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();

$domiciliosofendidossolicitudesDto->setIdDomicilioOfendidoSolicitud($idDomicilioOfendidoSolicitud);
$domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$domiciliosofendidossolicitudesDto->setDomicilioProcesal($DomicilioProcesal);
$domiciliosofendidossolicitudesDto->setCvePais($cvePais);
$domiciliosofendidossolicitudesDto->setCveEstado($cveEstado);
$domiciliosofendidossolicitudesDto->setCveMunicipio($cveMunicipio);
$domiciliosofendidossolicitudesDto->setDireccion($direccion);
$domiciliosofendidossolicitudesDto->setColonia($colonia);
$domiciliosofendidossolicitudesDto->setNumInterior($numInterior);
$domiciliosofendidossolicitudesDto->setNumExterior($numExterior);
$domiciliosofendidossolicitudesDto->setCp($cp);
$domiciliosofendidossolicitudesDto->setLatitud($latitud);
$domiciliosofendidossolicitudesDto->setLongitud($longitud);
$domiciliosofendidossolicitudesDto->setRecidenciaHabitual($recidenciaHabitual);
$domiciliosofendidossolicitudesDto->setEstado($estado);
$domiciliosofendidossolicitudesDto->setMunicipio($municipio);
$domiciliosofendidossolicitudesDto->setCveConvivencia($cveConvivencia);
$domiciliosofendidossolicitudesDto->setCveTipoDeVivienda($cveTipoDeVivienda);
$domiciliosofendidossolicitudesDto->setActivo($activo);

if (($accion == "guardar") && ($idDomicilioOfendidoSolicitud == "")) {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if (($accion == "guardar") && ($idDomicilioOfendidoSolicitud != "")) {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->updateDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if ($accion == "consultar") {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->selectDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if (($accion == "baja") && ($idDomicilioOfendidoSolicitud != "")) {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->deleteDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if (($accion == "seleccionar") && ($idDomicilioOfendidoSolicitud != "")) {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->selectDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if ($accion == "agregar" && $idDomicilioOfendidoSolicitud == "") {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->agregarDomicilioOfendido($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if ($accion == "agregar" && $idDomicilioOfendidoSolicitud != "") {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->modificarDomicilioOfendido($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
} else if ($accion == "eliminar" && $idDomicilioOfendidoSolicitud != "") {
    $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesFacade->eliminarDomicilioOfendido($domiciliosofendidossolicitudesDto);
    echo $domiciliosofendidossolicitudesDto;
}

 else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}