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

session_start();
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoraws/BitacorawsController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class BitacorawsFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarBitacoraws($BitacorawsDto) {
        $BitacorawsDto->setidBitacoraws(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getidBitacoraws(), "utf8") : strtoupper($BitacorawsDto->getidBitacoraws()))))));
        if ($this->esFecha($BitacorawsDto->getidBitacoraws())) {
            $BitacorawsDto->setidBitacoraws($this->fechaMysql($BitacorawsDto->getidBitacoraws()));
        }
        $BitacorawsDto->setcveAccionws(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getcveAccionws(), "utf8") : strtoupper($BitacorawsDto->getcveAccionws()))))));
        if ($this->esFecha($BitacorawsDto->getcveAccionws())) {
            $BitacorawsDto->setcveAccionws($this->fechaMysql($BitacorawsDto->getcveAccionws()));
        }
        $BitacorawsDto->setdescEstatusBitacoraws(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getdescEstatusBitacoraws(), "utf8") : strtoupper($BitacorawsDto->getdescEstatusBitacoraws()))))));
        if ($this->esFecha($BitacorawsDto->getdescEstatusBitacoraws())) {
            $BitacorawsDto->setdescEstatusBitacoraws($this->fechaMysql($BitacorawsDto->getdescEstatusBitacoraws()));
        }
        $BitacorawsDto->setobservacionesOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getobservacionesOrigen(), "utf8") : strtoupper($BitacorawsDto->getobservacionesOrigen()))))));
        if ($this->esFecha($BitacorawsDto->getobservacionesOrigen())) {
            $BitacorawsDto->setobservacionesOrigen($this->fechaMysql($BitacorawsDto->getobservacionesOrigen()));
        }
        $BitacorawsDto->setobservacionesDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getobservacionesDestino(), "utf8") : strtoupper($BitacorawsDto->getobservacionesDestino()))))));
        if ($this->esFecha($BitacorawsDto->getobservacionesDestino())) {
            $BitacorawsDto->setobservacionesDestino($this->fechaMysql($BitacorawsDto->getobservacionesDestino()));
        }
        $BitacorawsDto->sethrefOrigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->gethrefOrigen(), "utf8") : strtoupper($BitacorawsDto->gethrefOrigen()))))));
        if ($this->esFecha($BitacorawsDto->gethrefOrigen())) {
            $BitacorawsDto->sethrefOrigen($this->fechaMysql($BitacorawsDto->gethrefOrigen()));
        }
        $BitacorawsDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getfechaRegistro(), "utf8") : strtoupper($BitacorawsDto->getfechaRegistro()))))));
        if ($this->esFecha($BitacorawsDto->getfechaRegistro())) {
            $BitacorawsDto->setfechaRegistro($this->fechaMysql($BitacorawsDto->getfechaRegistro()));
        }
        $BitacorawsDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BitacorawsDto->getfechaActualizacion(), "utf8") : strtoupper($BitacorawsDto->getfechaActualizacion()))))));
        if ($this->esFecha($BitacorawsDto->getfechaActualizacion())) {
            $BitacorawsDto->setfechaActualizacion($this->fechaMysql($BitacorawsDto->getfechaActualizacion()));
        }
        return $BitacorawsDto;
    }

    public function selectBitacoraws($BitacorawsDto, $param = '') {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsController = new BitacorawsController();
        $BitacorawsDto = $BitacorawsController->selectBitacoraws($BitacorawsDto, $param);
        if ($BitacorawsDto != "") {
            return json_encode($BitacorawsDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertBitacoraws($BitacorawsDto) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsController = new BitacorawsController();
        $BitacorawsDto = $BitacorawsController->insertBitacoraws($BitacorawsDto);
        if ($BitacorawsDto != "") {
            $dtoToJson = new DtoToJson($BitacorawsDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateBitacoraws($BitacorawsDto) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsController = new BitacorawsController();
        $BitacorawsDto = $BitacorawsController->updateBitacoraws($BitacorawsDto);
        if ($BitacorawsDto != "") {
            $dtoToJson = new DtoToJson($BitacorawsDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteBitacoraws($BitacorawsDto) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsController = new BitacorawsController();
        $BitacorawsDto = $BitacorawsController->deleteBitacoraws($BitacorawsDto);
        if ($BitacorawsDto == true) {
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

@$idBitacoraws = $_POST["idBitacoraws"];
@$cveAccionws = $_POST["cveAccionws"];
@$descEstatusBitacoraws = $_POST["descEstatusBitacoraws"];
@$observacionesOrigen = $_POST["observacionesOrigen"];
@$observacionesDestino = $_POST["observacionesDestino"];
@$hrefOrigen = $_POST["hrefOrigen"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$bitacorawsFacade = new BitacorawsFacade();
$bitacorawsDto = new BitacorawsDTO();

$bitacorawsDto->setIdBitacoraws($idBitacoraws);
$bitacorawsDto->setCveAccionws($cveAccionws);
$bitacorawsDto->setDescEstatusBitacoraws($descEstatusBitacoraws);
$bitacorawsDto->setObservacionesOrigen($observacionesOrigen);
$bitacorawsDto->setObservacionesDestino($observacionesDestino);
$bitacorawsDto->setHrefOrigen($hrefOrigen);
$bitacorawsDto->setFechaRegistro($fechaRegistro);
$bitacorawsDto->setFechaActualizacion($fechaActualizacion);
@$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];

if (($accion == "guardar") && ($idBitacoraws == "")) {
    $bitacorawsDto = $bitacorawsFacade->insertBitacoraws($bitacorawsDto);
    echo $bitacorawsDto;
} else if (($accion == "guardar") && ($idBitacoraws != "")) {
    $bitacorawsDto = $bitacorawsFacade->updateBitacoraws($bitacorawsDto);
    echo $bitacorawsDto;
} else if ($accion == "consultar") {
    $param["fechaEnd"] = "";
    $param["fechaInicial"] = "";
    if (isset($_POST["fechaRegistro"])) {
        $param["fechaInicial"] = $_POST["fechaRegistro"];
    }
    if (isset($_POST["fechaRegistroEnd"])) {
        $param["fechaEnd"] = $_POST["fechaRegistroEnd"];
    }
    $param["paginacion"] = true;
    $bitacorawsDto = $bitacorawsFacade->selectBitacoraws($bitacorawsDto, $param);
    echo $bitacorawsDto;
} else if (($accion == "baja") && ($idBitacoraws != "")) {
    $bitacorawsDto = $bitacorawsFacade->deleteBitacoraws($bitacorawsDto);
    echo $bitacorawsDto;
} else if (($accion == "seleccionar") && ($idBitacoraws != "")) {
    $bitacorawsDto = $bitacorawsFacade->selectBitacoraws($bitacorawsDto);
    echo $bitacorawsDto;
}
?>