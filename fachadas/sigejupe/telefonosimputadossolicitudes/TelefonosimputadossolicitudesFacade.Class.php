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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/telefonosimputadossolicitudes/TelefonosimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TelefonosimputadossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto->setidTelefonoImputadosSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud())) {
            $TelefonosimputadossolicitudesDto->setidTelefonoImputadosSolicitud($this->fechaMysql($TelefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud()));
        }
        $TelefonosimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getidImputadoSolicitud(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getidImputadoSolicitud()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getidImputadoSolicitud())) {
            $TelefonosimputadossolicitudesDto->setidImputadoSolicitud($this->fechaMysql($TelefonosimputadossolicitudesDto->getidImputadoSolicitud()));
        }
        $TelefonosimputadossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->gettelefono(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->gettelefono()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->gettelefono())) {
            $TelefonosimputadossolicitudesDto->settelefono($this->fechaMysql($TelefonosimputadossolicitudesDto->gettelefono()));
        }
        $TelefonosimputadossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getcelular(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getcelular()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getcelular())) {
            $TelefonosimputadossolicitudesDto->setcelular($this->fechaMysql($TelefonosimputadossolicitudesDto->getcelular()));
        }
        $TelefonosimputadossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getemail(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getemail()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getemail())) {
            $TelefonosimputadossolicitudesDto->setemail($this->fechaMysql($TelefonosimputadossolicitudesDto->getemail()));
        }
        $TelefonosimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getactivo(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getactivo()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getactivo())) {
            $TelefonosimputadossolicitudesDto->setactivo($this->fechaMysql($TelefonosimputadossolicitudesDto->getactivo()));
        }
        $TelefonosimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getfechaRegistro(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getfechaRegistro()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getfechaRegistro())) {
            $TelefonosimputadossolicitudesDto->setfechaRegistro($this->fechaMysql($TelefonosimputadossolicitudesDto->getfechaRegistro()));
        }
        $TelefonosimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosimputadossolicitudesDto->getfechaActualizacion(), "utf8") : strtoupper($TelefonosimputadossolicitudesDto->getfechaActualizacion()))))));
        if ($this->esFecha($TelefonosimputadossolicitudesDto->getfechaActualizacion())) {
            $TelefonosimputadossolicitudesDto->setfechaActualizacion($this->fechaMysql($TelefonosimputadossolicitudesDto->getfechaActualizacion()));
        }
        return $TelefonosimputadossolicitudesDto;
    }

    public function selectTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $TelefonosimputadossolicitudesController = new TelefonosimputadossolicitudesController();
        $TelefonosimputadossolicitudesDto = $TelefonosimputadossolicitudesController->selectTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $json = "";
        $x = 1;
        if ($TelefonosimputadossolicitudesDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TelefonosimputadossolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($TelefonosimputadossolicitudesDto as $TelefonoImputado) {
                $json .= "{";
                $json .= '"idTelefonoImputadosSolicitud":' . json_encode(utf8_encode($TelefonoImputado->getIdTelefonoImputadosSolicitud())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($TelefonoImputado->getIdImputadoSolicitud())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($TelefonoImputado->getTelefono())) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($TelefonoImputado->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($TelefonoImputado->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($TelefonoImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TelefonosimputadossolicitudesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function insertTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $TelefonosimputadossolicitudesController = new TelefonosimputadossolicitudesController();
        $rs = $TelefonosimputadossolicitudesController->insertTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        return $rs;
    }

    public function updateTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $TelefonosimputadossolicitudesController = new TelefonosimputadossolicitudesController();
        $rs = $TelefonosimputadossolicitudesController->updateTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        return $rs;
    }

    public function deleteTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $TelefonosimputadossolicitudesController = new TelefonosimputadossolicitudesController();
        $rs = $TelefonosimputadossolicitudesController->deleteTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        return $rs;
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

@$idTelefonoImputadosSolicitud = $_POST["idTelefonoImputadosSolicitud"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$telefono = $_POST["telefono"];
@$celular = $_POST["celular"];
@$email = $_POST["email"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$telefonosimputadossolicitudesFacade = new TelefonosimputadossolicitudesFacade();
$telefonosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();

$telefonosimputadossolicitudesDto->setIdTelefonoImputadosSolicitud($idTelefonoImputadosSolicitud);
$telefonosimputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
$telefonosimputadossolicitudesDto->setTelefono($telefono);
$telefonosimputadossolicitudesDto->setCelular($celular);
$telefonosimputadossolicitudesDto->setEmail($email);
$telefonosimputadossolicitudesDto->setActivo($activo);
$telefonosimputadossolicitudesDto->setFechaRegistro($fechaRegistro);
$telefonosimputadossolicitudesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idTelefonoImputadosSolicitud == "")) {
    $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesFacade->insertTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto);
    echo $telefonosimputadossolicitudesDto;
} else if (($accion == "guardar") && ($idTelefonoImputadosSolicitud != "")) {
    $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesFacade->updateTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto);
    echo $telefonosimputadossolicitudesDto;
} else if ($accion == "consultar") {
    $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesFacade->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto);
    echo $telefonosimputadossolicitudesDto;
} else if (($accion == "eliminar") && ($idTelefonoImputadosSolicitud != "")) {
    $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesFacade->deleteTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto);
    echo $telefonosimputadossolicitudesDto;
} else if (($accion == "seleccionar") && ($idTelefonoImputadosSolicitud != "")) {
    $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesFacade->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto);
    echo $telefonosimputadossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>