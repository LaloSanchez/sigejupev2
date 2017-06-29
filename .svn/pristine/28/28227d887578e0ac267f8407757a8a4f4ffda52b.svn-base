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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitossolicitudes/DelitossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DelitossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto->setidDelitoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitossolicitudesDto->getidDelitoSolicitud(), "utf8") : strtoupper($DelitossolicitudesDto->getidDelitoSolicitud()))))));
        if ($this->esFecha($DelitossolicitudesDto->getidDelitoSolicitud())) {
            $DelitossolicitudesDto->setidDelitoSolicitud($this->fechaMysql($DelitossolicitudesDto->getidDelitoSolicitud()));
        }

        $DelitossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitossolicitudesDto->getactivo(), "utf8") : strtoupper($DelitossolicitudesDto->getactivo()))))));
        if ($this->esFecha($DelitossolicitudesDto->getactivo())) {
            $DelitossolicitudesDto->setactivo($this->fechaMysql($DelitossolicitudesDto->getactivo()));
        }
        $DelitossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitossolicitudesDto->getfechaRegistro(), "utf8") : strtoupper($DelitossolicitudesDto->getfechaRegistro()))))));
        if ($this->esFecha($DelitossolicitudesDto->getfechaRegistro())) {
            $DelitossolicitudesDto->setfechaRegistro($this->fechaMysql($DelitossolicitudesDto->getfechaRegistro()));
        }
        $DelitossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitossolicitudesDto->getfechaActualizacion(), "utf8") : strtoupper($DelitossolicitudesDto->getfechaActualizacion()))))));
        if ($this->esFecha($DelitossolicitudesDto->getfechaActualizacion())) {
            $DelitossolicitudesDto->setfechaActualizacion($this->fechaMysql($DelitossolicitudesDto->getfechaActualizacion()));
        }
        $DelitossolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DelitossolicitudesDto->getidSolicitudAudiencia(), "utf8") : strtoupper($DelitossolicitudesDto->getidSolicitudAudiencia()))))));
        if ($this->esFecha($DelitossolicitudesDto->getidSolicitudAudiencia())) {
            $DelitossolicitudesDto->setidSolicitudAudiencia($this->fechaMysql($DelitossolicitudesDto->getidSolicitudAudiencia()));
        }
        return $DelitossolicitudesDto;
    }

    public function selectDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->selectDelitossolicitudes($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($DelitossolicitudesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectDelitossolicitudesinner($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->selectDelitosInner($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($DelitossolicitudesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectDelitossolicitudestotales($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->selectDelitossolicitudestotales($DelitossolicitudesDto);
        return $DelitossolicitudesDto;
    }

    public function selectDelitosInner($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->selectDelitosInner($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($DelitossolicitudesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $rs = $DelitossolicitudesController->insertDelitossolicitudes($DelitossolicitudesDto);
        return $rs;
    }

    public function updateDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->updateDelitossolicitudes($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            return $DelitossolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function updateDelitos($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->updateDelitos($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            return $DelitossolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function eliminaDelitos($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->eliminaDelitos($DelitossolicitudesDto);
        if ($DelitossolicitudesDto != "") {
            $array = array("totalCount" => "1", "text" => "REGISTROS ACTUALIZADOS");
            return $json = json_encode($array);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function eliminarDelito($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $rsDelitos = $DelitossolicitudesController->eliminarDelito($DelitossolicitudesDto);
        return $rsDelitos;
    }

    public function deleteDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesController = new DelitossolicitudesController();
        $DelitossolicitudesDto = $DelitossolicitudesController->deleteDelitossolicitudes($DelitossolicitudesDto);
        if ($DelitossolicitudesDto == true) {
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

@$idDelitoSolicitud = $_POST["idDelitoSolicitud"];
@$cveDelito = $_POST["cveDelito"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$accion = $_POST["accion"];

$delitossolicitudesFacade = new DelitossolicitudesFacade();
$delitossolicitudesDto = new DelitossolicitudesDTO();

$delitossolicitudesDto->setIdDelitoSolicitud($idDelitoSolicitud);
$delitossolicitudesDto->setCveDelito($cveDelito);
$delitossolicitudesDto->setActivo($activo);
$delitossolicitudesDto->setFechaRegistro($fechaRegistro);
$delitossolicitudesDto->setFechaActualizacion($fechaActualizacion);
$delitossolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);

if (($accion == "guardar") && ($idDelitoSolicitud == "")) {
    $delitossolicitudesDto = $delitossolicitudesFacade->insertDelitossolicitudes($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if (($accion == "guardar") && ($idDelitoSolicitud != "")) {
    $delitossolicitudesDto = $delitossolicitudesFacade->updateDelitossolicitudes($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "guardaDelitos") {
    $delitossolicitudesDto = $delitossolicitudesFacade->updateDelitos($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "eliminaDelitos") {
    $delitossolicitudesDto = $delitossolicitudesFacade->eliminaDelitos($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "consultar") {
    $delitossolicitudesDto = $delitossolicitudesFacade->selectDelitossolicitudes($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "consultarDelitosSolicitudes") {
    $delitossolicitudesDto = $delitossolicitudesFacade->selectDelitossolicitudesinner($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "consultarTotal") {
    $delitossolicitudesDto = $delitossolicitudesFacade->selectDelitossolicitudestotales($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if ($accion == "consultarDelitos") {
    $delitossolicitudesDto = $delitossolicitudesFacade->selectDelitosInner($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if (($accion == "baja") && ($idDelitoSolicitud != "")) {
    $delitossolicitudesDto = $delitossolicitudesFacade->deleteDelitossolicitudes($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if (($accion == "seleccionar") && ($idDelitoSolicitud != "")) {
    $delitossolicitudesDto = $delitossolicitudesFacade->selectDelitossolicitudes($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
} else if (($accion == "eliminarDelito")) {
    $delitossolicitudesDto = $delitossolicitudesFacade->eliminarDelito($delitossolicitudesDto);
    echo utf8_encode($delitossolicitudesDto);
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>