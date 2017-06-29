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
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/AmparosFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/amparos/RadicarAmparosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AmparosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAmparos($AmparosDto) {
        $AmparosDto->setidAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getidAmparo(), "utf8") : strtoupper($AmparosDto->getidAmparo()))))));
        if ($this->esFecha($AmparosDto->getidAmparo())) {
            $AmparosDto->setidAmparo($this->fechaMysql($AmparosDto->getidAmparo()));
        }
        $AmparosDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getidCarpetaJudicial(), "utf8") : strtoupper($AmparosDto->getidCarpetaJudicial()))))));
        if ($this->esFecha($AmparosDto->getidCarpetaJudicial())) {
            $AmparosDto->setidCarpetaJudicial($this->fechaMysql($AmparosDto->getidCarpetaJudicial()));
        }
        $AmparosDto->setcveTipoAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getcveTipoAmparo(), "utf8") : strtoupper($AmparosDto->getcveTipoAmparo()))))));
        if ($this->esFecha($AmparosDto->getcveTipoAmparo())) {
            $AmparosDto->setcveTipoAmparo($this->fechaMysql($AmparosDto->getcveTipoAmparo()));
        }
        $AmparosDto->setnumAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getnumAmparo(), "utf8") : strtoupper($AmparosDto->getnumAmparo()))))));
        if ($this->esFecha($AmparosDto->getnumAmparo())) {
            $AmparosDto->setnumAmparo($this->fechaMysql($AmparosDto->getnumAmparo()));
        }
        $AmparosDto->setaniAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getaniAmparo(), "utf8") : strtoupper($AmparosDto->getaniAmparo()))))));
        if ($this->esFecha($AmparosDto->getaniAmparo())) {
            $AmparosDto->setaniAmparo($this->fechaMysql($AmparosDto->getaniAmparo()));
        }
        $AmparosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getcveJuzgado(), "utf8") : strtoupper($AmparosDto->getcveJuzgado()))))));
        if ($this->esFecha($AmparosDto->getcveJuzgado())) {
            $AmparosDto->setcveJuzgado($this->fechaMysql($AmparosDto->getcveJuzgado()));
        }
        $AmparosDto->setautoridadProcedencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getautoridadProcedencia(), "utf8") : strtoupper($AmparosDto->getautoridadProcedencia()))))));
        if ($this->esFecha($AmparosDto->getautoridadProcedencia())) {
            $AmparosDto->setautoridadProcedencia($this->fechaMysql($AmparosDto->getautoridadProcedencia()));
        }
        $AmparosDto->setnumeroProcedencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getnumeroProcedencia(), "utf8") : strtoupper($AmparosDto->getnumeroProcedencia()))))));
        if ($this->esFecha($AmparosDto->getnumeroProcedencia())) {
            $AmparosDto->setnumeroProcedencia($this->fechaMysql($AmparosDto->getnumeroProcedencia()));
        }
        $AmparosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getcarpetaInv(), "utf8") : strtoupper($AmparosDto->getcarpetaInv()))))));
        if ($this->esFecha($AmparosDto->getcarpetaInv())) {
            $AmparosDto->setcarpetaInv($this->fechaMysql($AmparosDto->getcarpetaInv()));
        }
        $AmparosDto->setnumOficio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getnumOficio(), "utf8") : strtoupper($AmparosDto->getnumOficio()))))));
        if ($this->esFecha($AmparosDto->getnumOficio())) {
            $AmparosDto->setnumOficio($this->fechaMysql($AmparosDto->getnumOficio()));
        }
        $AmparosDto->settoca(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->gettoca(), "utf8") : strtoupper($AmparosDto->gettoca()))))));
        if ($this->esFecha($AmparosDto->gettoca())) {
            $AmparosDto->settoca($this->fechaMysql($AmparosDto->gettoca()));
        }
        $AmparosDto->setexhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getexhorto(), "utf8") : strtoupper($AmparosDto->getexhorto()))))));
        if ($this->esFecha($AmparosDto->getexhorto())) {
            $AmparosDto->setexhorto($this->fechaMysql($AmparosDto->getexhorto()));
        }
        $AmparosDto->setnumSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getnumSala(), "utf8") : strtoupper($AmparosDto->getnumSala()))))));
        if ($this->esFecha($AmparosDto->getnumSala())) {
            $AmparosDto->setnumSala($this->fechaMysql($AmparosDto->getnumSala()));
        }
        $AmparosDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getcveSala(), "utf8") : strtoupper($AmparosDto->getcveSala()))))));
        if ($this->esFecha($AmparosDto->getcveSala())) {
            $AmparosDto->setcveSala($this->fechaMysql($AmparosDto->getcveSala()));
        }
        $AmparosDto->setactoReclamado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getactoReclamado(), "utf8") : strtoupper($AmparosDto->getactoReclamado()))))));
        if ($this->esFecha($AmparosDto->getactoReclamado())) {
            $AmparosDto->setactoReclamado($this->fechaMysql($AmparosDto->getactoReclamado()));
        }
//        $AmparosDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getobservaciones(), "utf8") : strtoupper($AmparosDto->getobservaciones()))))));
        if ($this->esFecha($AmparosDto->getobservaciones())) {
            $AmparosDto->setobservaciones($this->fechaMysql($AmparosDto->getobservaciones()));
        }
        $AmparosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getfechaRegistro(), "utf8") : strtoupper($AmparosDto->getfechaRegistro()))))));
        if ($this->esFecha($AmparosDto->getfechaRegistro())) {
            $AmparosDto->setfechaRegistro($this->fechaMysql($AmparosDto->getfechaRegistro()));
        }
        $AmparosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getfechaActualizacion(), "utf8") : strtoupper($AmparosDto->getfechaActualizacion()))))));
        if ($this->esFecha($AmparosDto->getfechaActualizacion())) {
            $AmparosDto->setfechaActualizacion($this->fechaMysql($AmparosDto->getfechaActualizacion()));
        }
         $AmparosDto->setCveEstatusAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AmparosDto->getCveEstatusAmparo(), "utf8") : strtoupper($AmparosDto->getCveEstatusAmparo()))))));
        if ($this->esFecha($AmparosDto->getCveEstatusAmparo())) {
            $AmparosDto->setCveEstatusAmparo($this->fechaMysql($AmparosDto->getCveEstatusAmparo()));
        }
        return $AmparosDto;
    }

    public function selectAmparos($AmparosDto, $fechaInicial = "", $fechaFinal = "", $cantxPag) {
        $params = "";
        if ($fechaInicial != "" && $fechaFinal != "") {
            $params = array();
            $params["fechaDesde"] = $fechaInicial;
            $params["fechaHasta"] = $fechaFinal;
            $params["cantxPag"] = $cantxPag;
        }

        error_log(print_r($params, true));
        $AmparosDto = $this->validarAmparos($AmparosDto);
//          error_log("Parametros ".print_r($AmparosDto,true));
        $RadicarAmparosController = new RadicarAmparosController();
        $AmparosDto = $RadicarAmparosController->selectAmparos($AmparosDto, "", $params);
//        error_log(print_r($AmparosDto,true));
        if ($AmparosDto != "") {
//$dtoToJson = new DtoToJson($AmparosDto);
//return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            return json_encode($AmparosDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAmparos($AmparosDto, $listaQuejosos, $listaTerceros, $tipoPersonaAdd) {
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $RadicarAmparosController = new RadicarAmparosController();
        $AmparosDto = $RadicarAmparosController->insertAmparos($AmparosDto, "", $listaQuejosos, $listaTerceros, $tipoPersonaAdd);
        if ($AmparosDto != "" && $listaQuejosos != "") {
            if ($AmparosDto["Estatus"] == "Ok") {
//                $dtoToJson = new DtoToJson($AmparosDto);
//                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
//                $jsonDto = new Encode_JSON();
                return json_encode(array("totalCount" => "1", "text" => $AmparosDto["Mensaje"], "amparo" => $AmparosDto));
//                $jsonDto->encode(array("totalCount" => "0", "text" => $AmparosDto["Mensaje"]));
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => $AmparosDto["Mensaje"]));
            }
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAmparos($AmparosDto, $listaQuejosos, $listaTerceros, $tipoPersonaAdd) {
        error_log("actualizar amparos");
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $RadicarAmparosController = new RadicarAmparosController();
        $AmparosDto = $RadicarAmparosController->updateAmparos($AmparosDto, "", $listaQuejosos, $listaTerceros, $tipoPersonaAdd);
        if ($AmparosDto != "") {
            $dtoToJson = new DtoToJson($AmparosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAmparos($AmparosDto) {
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $RadicarAmparosController = new RadicarAmparosController();
        $AmparosDto = $RadicarAmparosController->deleteAmparos($AmparosDto);
        if ($AmparosDto == true) {
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

@$idAmparo = $_POST["idAmparo"];
@$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
@$cveTipoAmparo = $_POST["cveTipoAmparo"];
@$numAmparo = $_POST["numAmparo"];
@$aniAmparo = $_POST["aniAmparo"];
@$cveEstatusAmparo = $_POST["cveEstatusAmparo"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$autoridadProcedencia = $_POST["autoridadProcedencia"];
@$numeroProcedencia = $_POST["numeroProcedencia"];
@$carpetaInv = $_POST["carpetaInv"];
@$numOficio = $_POST["numOficio"];
@$toca = $_POST["toca"];
@$exhorto = $_POST["exhorto"];
@$numSala = $_POST["numSala"];
@$cveSala = $_POST["cveSala"];
@$actoReclamado = $_POST["actoReclamado"];
@$observaciones = $_POST["observaciones"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];
@$tipoPersonaAdd = $_POST["tipoPersonaAdd"];
@$listaQuejosos = json_decode($_POST["listaQuejosos"], true);
@$listaTerceros = json_decode($_POST["listaTerceros"], true);
@$txtFecInicialBusqueda = $_POST["txtFecInicialBusqueda"];
@$txtFecFinalBusqueda = $_POST["txtFecFinalBusqueda"];
@$cantxPag = $_POST["cantxPag"];

$amparosFacade = new AmparosFacade();
$amparosDto = new AmparosDTO();

$amparosDto->setIdAmparo($idAmparo);
$amparosDto->setIdCarpetaJudicial($idCarpetaJudicial);
$amparosDto->setCveTipoAmparo($cveTipoAmparo);
$amparosDto->setNumAmparo($numAmparo);
$amparosDto->setCveEstatusAmparo($cveEstatusAmparo);
$amparosDto->setAniAmparo($aniAmparo);
$amparosDto->setCveJuzgado($cveJuzgado);
$amparosDto->setAutoridadProcedencia($autoridadProcedencia);
$amparosDto->setNumeroProcedencia($numeroProcedencia);
$amparosDto->setCarpetaInv($carpetaInv);
$amparosDto->setNumOficio($numOficio);
$amparosDto->setToca($toca);
$amparosDto->setExhorto($exhorto);
$amparosDto->setNumSala($numSala);
$amparosDto->setCveSala($cveSala);
$amparosDto->setActoReclamado($actoReclamado);
$amparosDto->setObservaciones($observaciones);
$amparosDto->setFechaRegistro($fechaRegistro);
$amparosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idAmparo == "")) {
    $amparosDto = $amparosFacade->insertAmparos($amparosDto, $listaQuejosos, $listaTerceros, $tipoPersonaAdd);
    echo $amparosDto;
} else if (($accion == "guardar") && ($idAmparo != "")) {
    $amparosDto = $amparosFacade->updateAmparos($amparosDto, $listaQuejosos, $listaTerceros, $tipoPersonaAdd);
    echo $amparosDto;
} else if ($accion == "consultar") {
    $amparosDto = $amparosFacade->selectAmparos($amparosDto, $txtFecInicialBusqueda, $txtFecFinalBusqueda, $cantxPag);
    echo $amparosDto;
} else if (($accion == "baja") && ($idAmparo != "")) {
    $amparosDto = $amparosFacade->deleteAmparos($amparosDto);
    echo $amparosDto;
} else if (($accion == "seleccionar") && ($idAmparo != "")) {
    $amparosDto = $amparosFacade->selectAmparos($amparosDto, "", "", "");
    echo $amparosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>