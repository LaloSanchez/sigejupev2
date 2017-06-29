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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/telefonosjuzgadores/TelefonosjuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TelefonosjuzgadoresFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto->setidTelefonJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getidTelefonJuzgador(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getidTelefonJuzgador()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getidTelefonJuzgador())) {
            $TelefonosjuzgadoresDto->setidTelefonJuzgador($this->fechaMysql($TelefonosjuzgadoresDto->getidTelefonJuzgador()));
        }
        $TelefonosjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getidJuzgador(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getidJuzgador()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getidJuzgador())) {
            $TelefonosjuzgadoresDto->setidJuzgador($this->fechaMysql($TelefonosjuzgadoresDto->getidJuzgador()));
        }
        $TelefonosjuzgadoresDto->setcveTipoLada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getcveTipoLada(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getcveTipoLada()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getcveTipoLada())) {
            $TelefonosjuzgadoresDto->setcveTipoLada($this->fechaMysql($TelefonosjuzgadoresDto->getcveTipoLada()));
        }
        $TelefonosjuzgadoresDto->settelefono(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->gettelefono(), "utf8") : strtoupper($TelefonosjuzgadoresDto->gettelefono()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->gettelefono())) {
            $TelefonosjuzgadoresDto->settelefono($this->fechaMysql($TelefonosjuzgadoresDto->gettelefono()));
        }
        $TelefonosjuzgadoresDto->setcelular(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getcelular(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getcelular()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getcelular())) {
            $TelefonosjuzgadoresDto->setcelular($this->fechaMysql($TelefonosjuzgadoresDto->getcelular()));
        }


        $TelefonosjuzgadoresDto->setemail(trim(mb_strtolower(utf8_decode(str_replace("'", "", $TelefonosjuzgadoresDto->getemail())))));


        $TelefonosjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getactivo(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getactivo()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getactivo())) {
            $TelefonosjuzgadoresDto->setactivo($this->fechaMysql($TelefonosjuzgadoresDto->getactivo()));
        }
        $TelefonosjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getfechaRegistro()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getfechaRegistro())) {
            $TelefonosjuzgadoresDto->setfechaRegistro($this->fechaMysql($TelefonosjuzgadoresDto->getfechaRegistro()));
        }
        $TelefonosjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($TelefonosjuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($TelefonosjuzgadoresDto->getfechaActualizacion()))))));
        if ($this->esFecha($TelefonosjuzgadoresDto->getfechaActualizacion())) {
            $TelefonosjuzgadoresDto->setfechaActualizacion($this->fechaMysql($TelefonosjuzgadoresDto->getfechaActualizacion()));
        }
        return $TelefonosjuzgadoresDto;
    }

    public function selectTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresController = new TelefonosjuzgadoresController();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresController->selectTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $json = "";
        $x = 1;
        if ($TelefonosjuzgadoresDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TelefonosjuzgadoresDto) . '",';
            $json .= '"data":[';
            foreach ($TelefonosjuzgadoresDto as $Telefonosjuzgador) {
                $json .= "{";
                $json .= '"idTelefonJuzgador":' . json_encode(($Telefonosjuzgador->getIdTelefonJuzgador())) . ",";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($Telefonosjuzgador->getIdJuzgador())) . ",";
                $json .= '"cveTipoLada":' . json_encode(utf8_encode($Telefonosjuzgador->getCveTipoLada())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($Telefonosjuzgador->getTelefono())) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($Telefonosjuzgador->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($Telefonosjuzgador->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Telefonosjuzgador->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TelefonosjuzgadoresDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function insertTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresController = new TelefonosjuzgadoresController();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresController->insertTelefonosjuzgadores($TelefonosjuzgadoresDto);
        if ($TelefonosjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($TelefonosjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresController = new TelefonosjuzgadoresController();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresController->updateTelefonosjuzgadores($TelefonosjuzgadoresDto);
        if ($TelefonosjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($TelefonosjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function elimar($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresController = new TelefonosjuzgadoresController();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresController->elimar($TelefonosjuzgadoresDto);
        if ($TelefonosjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($TelefonosjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresController = new TelefonosjuzgadoresController();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresController->deleteTelefonosjuzgadores($TelefonosjuzgadoresDto);
        if ($TelefonosjuzgadoresDto == true) {
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

@$idTelefonJuzgador = $_POST["idTelefonJuzgador"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveTipoLada = $_POST["cveTipoLada"];
@$telefono = $_POST["telefono"];
@$celular = $_POST["celular"];
@$email = $_POST["email"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$telefonosjuzgadoresFacade = new TelefonosjuzgadoresFacade();
$telefonosjuzgadoresDto = new TelefonosjuzgadoresDTO();

$telefonosjuzgadoresDto->setIdTelefonJuzgador($idTelefonJuzgador);
$telefonosjuzgadoresDto->setIdJuzgador($idJuzgador);
$telefonosjuzgadoresDto->setCveTipoLada($cveTipoLada);
$telefonosjuzgadoresDto->setTelefono($telefono);
$telefonosjuzgadoresDto->setCelular($celular);
$telefonosjuzgadoresDto->setEmail($email);
$telefonosjuzgadoresDto->setActivo($activo);
$telefonosjuzgadoresDto->setFechaRegistro($fechaRegistro);
$telefonosjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idTelefonJuzgador == "")) {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->insertTelefonosjuzgadores($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
} else if (($accion == "guardar") && ($idTelefonJuzgador != "")) {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->updateTelefonosjuzgadores($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
} else if ($accion == "consultar") {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->selectTelefonosjuzgadores($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
} else if (($accion == "baja") && ($idTelefonJuzgador != "")) {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->deleteTelefonosjuzgadores($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
} else if (($accion == "seleccionar") && ($idTelefonJuzgador != "")) {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->selectTelefonosjuzgadores($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
} else if (($accion == "eliminar")) {
    $telefonosjuzgadoresDto = $telefonosjuzgadoresFacade->elimar($telefonosjuzgadoresDto);
    echo $telefonosjuzgadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>