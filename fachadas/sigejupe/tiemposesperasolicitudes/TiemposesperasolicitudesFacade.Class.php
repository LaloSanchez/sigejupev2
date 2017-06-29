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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiemposesperasolicitudes/TiemposesperasolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TiemposesperasolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto->setidTiempoEsperaSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getidTiempoEsperaSolicitud(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getidTiempoEsperaSolicitud()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getidTiempoEsperaSolicitud())) {
            $TiemposesperasolicitudesDto->setidTiempoEsperaSolicitud($this->fechaMysql($TiemposesperasolicitudesDto->getidTiempoEsperaSolicitud()));
        }
        $TiemposesperasolicitudesDto->setmunitosEspera(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getmunitosEspera(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getmunitosEspera()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getmunitosEspera())) {
            $TiemposesperasolicitudesDto->setmunitosEspera($this->fechaMysql($TiemposesperasolicitudesDto->getmunitosEspera()));
        }
        $TiemposesperasolicitudesDto->setcveTipoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getcveTipoSolicitud(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getcveTipoSolicitud()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getcveTipoSolicitud())) {
            $TiemposesperasolicitudesDto->setcveTipoSolicitud($this->fechaMysql($TiemposesperasolicitudesDto->getcveTipoSolicitud()));
        }
        $TiemposesperasolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getactivo(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getactivo()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getactivo())) {
            $TiemposesperasolicitudesDto->setactivo($this->fechaMysql($TiemposesperasolicitudesDto->getactivo()));
        }
        $TiemposesperasolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getfechaRegistro(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getfechaRegistro()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getfechaRegistro())) {
            $TiemposesperasolicitudesDto->setfechaRegistro($this->fechaMysql($TiemposesperasolicitudesDto->getfechaRegistro()));
        }
        $TiemposesperasolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TiemposesperasolicitudesDto->getfechaActualizacion(), "utf8") : strtoupper($TiemposesperasolicitudesDto->getfechaActualizacion()))))));
        if ($this->esFecha($TiemposesperasolicitudesDto->getfechaActualizacion())) {
            $TiemposesperasolicitudesDto->setfechaActualizacion($this->fechaMysql($TiemposesperasolicitudesDto->getfechaActualizacion()));
        }
        return $TiemposesperasolicitudesDto;
    }

    public function selectTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesController = new TiemposesperasolicitudesController();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesController->selectTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        if ($TiemposesperasolicitudesDto != "") {
            $dtoToJson = new DtoToJson($TiemposesperasolicitudesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesController = new TiemposesperasolicitudesController();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesController->insertTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        if ($TiemposesperasolicitudesDto != "") {
            $dtoToJson = new DtoToJson($TiemposesperasolicitudesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesController = new TiemposesperasolicitudesController();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesController->updateTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        if ($TiemposesperasolicitudesDto != "") {
            $dtoToJson = new DtoToJson($TiemposesperasolicitudesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesController = new TiemposesperasolicitudesController();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesController->deleteTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        if ($TiemposesperasolicitudesDto == true) {
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

@$idTiempoEsperaSolicitud = $_POST["idTiempoEsperaSolicitud"];
@$munitosEspera = $_POST["munitosEspera"];
@$cveTipoSolicitud = $_POST["cveTipoSolicitud"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$tiemposesperasolicitudesFacade = new TiemposesperasolicitudesFacade();
$tiemposesperasolicitudesDto = new TiemposesperasolicitudesDTO();

$tiemposesperasolicitudesDto->setIdTiempoEsperaSolicitud($idTiempoEsperaSolicitud);
$tiemposesperasolicitudesDto->setMunitosEspera($munitosEspera);
$tiemposesperasolicitudesDto->setCveTipoSolicitud($cveTipoSolicitud);
$tiemposesperasolicitudesDto->setActivo($activo);
$tiemposesperasolicitudesDto->setFechaRegistro($fechaRegistro);
$tiemposesperasolicitudesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idTiempoEsperaSolicitud == "")) {
    $tiemposesperasolicitudesDto = $tiemposesperasolicitudesFacade->insertTiemposesperasolicitudes($tiemposesperasolicitudesDto);
    echo $tiemposesperasolicitudesDto;
} else if (($accion == "guardar") && ($idTiempoEsperaSolicitud != "")) {
    $tiemposesperasolicitudesDto = $tiemposesperasolicitudesFacade->updateTiemposesperasolicitudes($tiemposesperasolicitudesDto);
    echo $tiemposesperasolicitudesDto;
} else if ($accion == "consultar") {
    $tiemposesperasolicitudesDto = $tiemposesperasolicitudesFacade->selectTiemposesperasolicitudes($tiemposesperasolicitudesDto);
    echo $tiemposesperasolicitudesDto;
} else if (($accion == "baja") && ($idTiempoEsperaSolicitud != "")) {
    $tiemposesperasolicitudesDto = $tiemposesperasolicitudesFacade->deleteTiemposesperasolicitudes($tiemposesperasolicitudesDto);
    echo $tiemposesperasolicitudesDto;
} else if (($accion == "seleccionar") && ($idTiempoEsperaSolicitud != "")) {
    $tiemposesperasolicitudesDto = $tiemposesperasolicitudesFacade->selectTiemposesperasolicitudes($tiemposesperasolicitudesDto);
    echo $tiemposesperasolicitudesDto;
}
?>