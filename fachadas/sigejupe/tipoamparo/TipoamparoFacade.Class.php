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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipoamparo/TipoamparoController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TipoamparoFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTipoamparo($TipoamparoDto) {
        $TipoamparoDto->setCveTipoAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TipoamparoDto->getCveTipoAmparo(), "utf8") : strtoupper($TipoamparoDto->getCveTipoAmparo()))))));
        if ($this->esFecha($TipoamparoDto->getCveTipoAmparo())) {
            $TipoamparoDto->setCveTipoAmparo($this->fechaMysql($TipoamparoDto->getCveTipoAmparo()));
        }
        $TipoamparoDto->setDesTipoAmparo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TipoamparoDto->getDesTipoAmparo(), "utf8") : strtoupper($TipoamparoDto->getDesTipoAmparo()))))));
        if ($this->esFecha($TipoamparoDto->getDesTipoAmparo())) {
            $TipoamparoDto->setDesTipoAmparo($this->fechaMysql($TipoamparoDto->getDesTipoAmparo()));
        }
        return $TipoamparoDto;
    }

    public function selectTipoamparo($TipoamparoDto) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoController = new TipoamparoController();
        $TipoamparoDto = $TipoamparoController->selectTipoamparo($TipoamparoDto);
        if ($TipoamparoDto != "") {
            $dtoToJson = new DtoToJson($TipoamparoDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function selectTipoamparoOrden($TipoamparoDto,$orden) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoController = new TipoamparoController();
        $TipoamparoDto = $TipoamparoController->selectTipoamparoOrden($TipoamparoDto,$orden,null);
        if ($TipoamparoDto != "") {
            $dtoToJson = new DtoToJson($TipoamparoDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTipoamparo($TipoamparoDto) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoController = new TipoamparoController();
        $TipoamparoDto = $TipoamparoController->insertTipoamparo($TipoamparoDto);
        if ($TipoamparoDto != "") {
            $dtoToJson = new DtoToJson($TipoamparoDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTipoamparo($TipoamparoDto) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoController = new TipoamparoController();
        $TipoamparoDto = $TipoamparoController->updateTipoamparo($TipoamparoDto);
        if ($TipoamparoDto != "") {
            $dtoToJson = new DtoToJson($TipoamparoDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTipoamparo($TipoamparoDto) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoController = new TipoamparoController();
        $TipoamparoDto = $TipoamparoController->deleteTipoamparo($TipoamparoDto);
        if ($TipoamparoDto == true) {
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

@$CveTipoAmparo = $_POST["CveTipoAmparo"];
@$DesTipoAmparo = $_POST["DesTipoAmparo"];
@$accion = $_POST["accion"];
@$orden = $_POST["orden"];
$tipoamparoFacade = new TipoamparoFacade();
$tipoamparoDto = new TipoamparoDTO();

$tipoamparoDto->setCveTipoAmparo($CveTipoAmparo);
$tipoamparoDto->setDesTipoAmparo($DesTipoAmparo);

if (($accion == "guardar") && ($CveTipoAmparo == "")) {
    $tipoamparoDto = $tipoamparoFacade->insertTipoamparo($tipoamparoDto);
    echo $tipoamparoDto;
} else if (($accion == "guardar") && ($CveTipoAmparo != "")) {
    $tipoamparoDto = $tipoamparoFacade->updateTipoamparo($tipoamparoDto);
    echo $tipoamparoDto;
} else if ($accion == "consultar") {
    $tipoamparoDto = $tipoamparoFacade->selectTipoamparo($tipoamparoDto);
    echo $tipoamparoDto;
} else if (($accion == "baja") && ($CveTipoAmparo != "")) {
    $tipoamparoDto = $tipoamparoFacade->deleteTipoamparo($tipoamparoDto);
    echo $tipoamparoDto;
} else if (($accion == "seleccionar")) {
    $tipoamparoDto = $tipoamparoFacade->selectTipoamparo($tipoamparoDto);
    echo $tipoamparoDto;
} else if ($accion == "consultarOrdenado") {
    $tipoamparoDto = $tipoamparoFacade->selectTipoamparoOrden($tipoamparoDto,$orden);
    echo $tipoamparoDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>