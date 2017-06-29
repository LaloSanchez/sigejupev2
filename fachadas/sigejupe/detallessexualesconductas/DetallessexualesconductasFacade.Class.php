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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/detallessexualesconductas/DetallessexualesconductasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DetallessexualesconductasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto->setidDetalleSexualConducta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DetallessexualesconductasDto->getidDetalleSexualConducta(), "utf8") : strtoupper($DetallessexualesconductasDto->getidDetalleSexualConducta()))))));
        if ($this->esFecha($DetallessexualesconductasDto->getidDetalleSexualConducta())) {
            $DetallessexualesconductasDto->setidDetalleSexualConducta($this->fechaMysql($DetallessexualesconductasDto->getidDetalleSexualConducta()));
        }
        $DetallessexualesconductasDto->setcveDetalleConducta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DetallessexualesconductasDto->getcveDetalleConducta(), "utf8") : strtoupper($DetallessexualesconductasDto->getcveDetalleConducta()))))));
        if ($this->esFecha($DetallessexualesconductasDto->getcveDetalleConducta())) {
            $DetallessexualesconductasDto->setcveDetalleConducta($this->fechaMysql($DetallessexualesconductasDto->getcveDetalleConducta()));
        }
        $DetallessexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DetallessexualesconductasDto->getidSexualConducta(), "utf8") : strtoupper($DetallessexualesconductasDto->getidSexualConducta()))))));
        if ($this->esFecha($DetallessexualesconductasDto->getidSexualConducta())) {
            $DetallessexualesconductasDto->setidSexualConducta($this->fechaMysql($DetallessexualesconductasDto->getidSexualConducta()));
        }
        $DetallessexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DetallessexualesconductasDto->getfechaRegistro(), "utf8") : strtoupper($DetallessexualesconductasDto->getfechaRegistro()))))));
        if ($this->esFecha($DetallessexualesconductasDto->getfechaRegistro())) {
            $DetallessexualesconductasDto->setfechaRegistro($this->fechaMysql($DetallessexualesconductasDto->getfechaRegistro()));
        }
        $DetallessexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DetallessexualesconductasDto->getfechaActualizacion(), "utf8") : strtoupper($DetallessexualesconductasDto->getfechaActualizacion()))))));
        if ($this->esFecha($DetallessexualesconductasDto->getfechaActualizacion())) {
            $DetallessexualesconductasDto->setfechaActualizacion($this->fechaMysql($DetallessexualesconductasDto->getfechaActualizacion()));
        }
        return $DetallessexualesconductasDto;
    }

    public function selectDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto = $this->validarDetallessexualesconductas($DetallessexualesconductasDto);
        $DetallessexualesconductasController = new DetallessexualesconductasController();
        $DetallessexualesconductasDto = $DetallessexualesconductasController->selectDetallessexualesconductas($DetallessexualesconductasDto);
        if ($DetallessexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($DetallessexualesconductasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto = $this->validarDetallessexualesconductas($DetallessexualesconductasDto);
        $DetallessexualesconductasController = new DetallessexualesconductasController();
        $DetallessexualesconductasDto = $DetallessexualesconductasController->insertDetallessexualesconductas($DetallessexualesconductasDto);
        if ($DetallessexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($DetallessexualesconductasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto = $this->validarDetallessexualesconductas($DetallessexualesconductasDto);
        $DetallessexualesconductasController = new DetallessexualesconductasController();
        $DetallessexualesconductasDto = $DetallessexualesconductasController->updateDetallessexualesconductas($DetallessexualesconductasDto);
        if ($DetallessexualesconductasDto != "") {
            $dtoToJson = new DtoToJson($DetallessexualesconductasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteDetallessexualesconductas($DetallessexualesconductasDto) {
        $DetallessexualesconductasDto = $this->validarDetallessexualesconductas($DetallessexualesconductasDto);
        $DetallessexualesconductasController = new DetallessexualesconductasController();
        $DetallessexualesconductasDto = $DetallessexualesconductasController->deleteDetallessexualesconductas($DetallessexualesconductasDto);
        if ($DetallessexualesconductasDto == true) {
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

@$idDetalleSexualConducta = $_POST["idDetalleSexualConducta"];
@$cveDetalleConducta = $_POST["cveDetalleConducta"];
@$idSexualConducta = $_POST["idSexualConducta"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$detallessexualesconductasFacade = new DetallessexualesconductasFacade();
$detallessexualesconductasDto = new DetallessexualesconductasDTO();

$detallessexualesconductasDto->setIdDetalleSexualConducta($idDetalleSexualConducta);
$detallessexualesconductasDto->setCveDetalleConducta($cveDetalleConducta);
$detallessexualesconductasDto->setIdSexualConducta($idSexualConducta);
$detallessexualesconductasDto->setFechaRegistro($fechaRegistro);
$detallessexualesconductasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idDetalleSexualConducta == "")) {
    $detallessexualesconductasDto = $detallessexualesconductasFacade->insertDetallessexualesconductas($detallessexualesconductasDto);
    echo $detallessexualesconductasDto;
} else if (($accion == "guardar") && ($idDetalleSexualConducta != "")) {
    $detallessexualesconductasDto = $detallessexualesconductasFacade->updateDetallessexualesconductas($detallessexualesconductasDto);
    echo $detallessexualesconductasDto;
} else if ($accion == "consultar") {
    $detallessexualesconductasDto = $detallessexualesconductasFacade->selectDetallessexualesconductas($detallessexualesconductasDto);
    echo $detallessexualesconductasDto;
} else if (($accion == "baja") && ($idDetalleSexualConducta != "")) {
    $detallessexualesconductasDto = $detallessexualesconductasFacade->deleteDetallessexualesconductas($detallessexualesconductasDto);
    echo $detallessexualesconductasDto;
} else if (($accion == "seleccionar") && ($idDetalleSexualConducta != "")) {
    $detallessexualesconductasDto = $detallessexualesconductasFacade->selectDetallessexualesconductas($detallessexualesconductasDto);
    echo $detallessexualesconductasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>