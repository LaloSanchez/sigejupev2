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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/sexuales/SexualesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SexualesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSexuales($SexualesDto) {
        $SexualesDto->setidSexual(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getidSexual(), "utf8") : strtoupper($SexualesDto->getidSexual()))))));
        if ($this->esFecha($SexualesDto->getidSexual())) {
            $SexualesDto->setidSexual($this->fechaMysql($SexualesDto->getidSexual()));
        }
        $SexualesDto->setcveModalidadAcoso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getcveModalidadAcoso(), "utf8") : strtoupper($SexualesDto->getcveModalidadAcoso()))))));
        if ($this->esFecha($SexualesDto->getcveModalidadAcoso())) {
            $SexualesDto->setcveModalidadAcoso($this->fechaMysql($SexualesDto->getcveModalidadAcoso()));
        }
        $SexualesDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getcveAmbitoAcoso(), "utf8") : strtoupper($SexualesDto->getcveAmbitoAcoso()))))));
        if ($this->esFecha($SexualesDto->getcveAmbitoAcoso())) {
            $SexualesDto->setcveAmbitoAcoso($this->fechaMysql($SexualesDto->getcveAmbitoAcoso()));
        }
        $SexualesDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getidImpOfeDelSolicitud(), "utf8") : strtoupper($SexualesDto->getidImpOfeDelSolicitud()))))));
        if ($this->esFecha($SexualesDto->getidImpOfeDelSolicitud())) {
            $SexualesDto->setidImpOfeDelSolicitud($this->fechaMysql($SexualesDto->getidImpOfeDelSolicitud()));
        }
        $SexualesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getfechaRegistro(), "utf8") : strtoupper($SexualesDto->getfechaRegistro()))))));
        if ($this->esFecha($SexualesDto->getfechaRegistro())) {
            $SexualesDto->setfechaRegistro($this->fechaMysql($SexualesDto->getfechaRegistro()));
        }
        $SexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SexualesDto->getfechaActualizacion(), "utf8") : strtoupper($SexualesDto->getfechaActualizacion()))))));
        if ($this->esFecha($SexualesDto->getfechaActualizacion())) {
            $SexualesDto->setfechaActualizacion($this->fechaMysql($SexualesDto->getfechaActualizacion()));
        }
        return $SexualesDto;
    }

    public function selectSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesController = new SexualesController();
        $SexualesDto = $SexualesController->selectSexuales($SexualesDto);
        if ($SexualesDto != "") {
            $dtoToJson = new DtoToJson($SexualesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesController = new SexualesController();
        $SexualesDto = $SexualesController->insertSexuales($SexualesDto);
        if ($SexualesDto != "") {
            $dtoToJson = new DtoToJson($SexualesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesController = new SexualesController();
        $SexualesDto = $SexualesController->updateSexuales($SexualesDto);
        if ($SexualesDto != "") {
            $dtoToJson = new DtoToJson($SexualesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSexuales($SexualesDto) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesController = new SexualesController();
        $SexualesDto = $SexualesController->deleteSexuales($SexualesDto);
        if ($SexualesDto == true) {
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

@$idSexual = $_POST["idSexual"];
@$cveModalidadAcoso = $_POST["cveModalidadAcoso"];
@$cveAmbitoAcoso = $_POST["cveAmbitoAcoso"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$sexualesFacade = new SexualesFacade();
$sexualesDto = new SexualesDTO();

$sexualesDto->setIdSexual($idSexual);
$sexualesDto->setCveModalidadAcoso($cveModalidadAcoso);
$sexualesDto->setCveAmbitoAcoso($cveAmbitoAcoso);
$sexualesDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$sexualesDto->setFechaRegistro($fechaRegistro);
$sexualesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idSexual == "")) {
    $sexualesDto = $sexualesFacade->insertSexuales($sexualesDto);
    echo $sexualesDto;
} else if (($accion == "guardar") && ($idSexual != "")) {
    $sexualesDto = $sexualesFacade->updateSexuales($sexualesDto);
    echo $sexualesDto;
} else if ($accion == "consultar") {
    $sexualesDto = $sexualesFacade->selectSexuales($sexualesDto);
    echo $sexualesDto;
} else if (($accion == "baja") && ($idSexual != "")) {
    $sexualesDto = $sexualesFacade->deleteSexuales($sexualesDto);
    echo $sexualesDto;
} else if (($accion == "seleccionar") && ($idSexual != "")) {
    $sexualesDto = $sexualesFacade->selectSexuales($sexualesDto);
    echo $sexualesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>