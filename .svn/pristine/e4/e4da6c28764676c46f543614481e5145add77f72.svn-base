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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tutoresimputados/TutoresimputadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipostutores/TipostutoresController.Class.php");

class TutoresimputadosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto->setidTutorImputado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getidTutorImputado())))));
        $TutoresimputadosDto->setidImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getidImputadoSolicitud())))));
        $TutoresimputadosDto->setcveTipoTutor(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getcveTipoTutor())))));
        $TutoresimputadosDto->setProvDef(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getProvDef())))));
        $TutoresimputadosDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getnombre())))));
        $TutoresimputadosDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getpaterno())))));
        $TutoresimputadosDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getmaterno())))));
        $TutoresimputadosDto->setfechaNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getfechaNacimiento())))));
        if ($this->esFecha($TutoresimputadosDto->getfechaNacimiento())) {
            $TutoresimputadosDto->setfechaNacimiento($this->fechaMysql($TutoresimputadosDto->getfechaNacimiento()));
        }
        $TutoresimputadosDto->setedad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getedad())))));
        $TutoresimputadosDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getactivo())))));
        $TutoresimputadosDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $TutoresimputadosDto->getcveGenero())))));
        return $TutoresimputadosDto;
    }

    public function selectTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto = $this->validarTutoresimputados($TutoresimputadosDto);
        $TutoresimputadosController = new TutoresimputadosController();
        $TutoresimputadosDto = $TutoresimputadosController->selectTutoresimputados($TutoresimputadosDto);
        $json = "";
        $x = 1;
        $TiposTutoresDto = new TipostutoresDTO();
        $TiposTutoresDao = new TipostutoresDAO();
        if ($TutoresimputadosDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TutoresimputadosDto) . '",';
            $json .= '"data":[';
            foreach ($TutoresimputadosDto as $Tutorimputado) {
                $TiposTutoresDto->setCveTipoTutor($Tutorimputado->getCveTipoTutor());
                $rsTutores = $TiposTutoresDao->selectTipostutores($TiposTutoresDto);
                $json .= "{";
                $json .= '"idTutorImputado":' . json_encode(utf8_encode($Tutorimputado->getIdTutorImputado())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($Tutorimputado->getIdImputadoSolicitud())) . ",";
                $json .= '"cveTipoTutor":' . json_encode(utf8_encode($Tutorimputado->getCveTipoTutor())) . ",";
                if ($rsTutores != "") {
                    $json .= '"desTipoTutor":' . json_encode(utf8_encode($rsTutores[0]->getDesTipoTutor())) . ",";
                } else {
                    $json .= '"desTipoTutor": "N/A",';
                }
                $json .= '"ProvDef":' . json_encode(utf8_encode($Tutorimputado->getProvDef())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Tutorimputado->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Tutorimputado->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Tutorimputado->getMaterno())) . ",";
                $json .= '"fechaNacimiento":' . json_encode(utf8_encode($Tutorimputado->getFechaNacimiento())) . ",";
                $json .= '"edad":' . json_encode(utf8_encode($Tutorimputado->getEdad())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($Tutorimputado->getCveGenero())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Tutorimputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TutoresimputadosDto)) {
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

    public function insertTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto = $this->validarTutoresimputados($TutoresimputadosDto);
        $TutoresimputadosController = new TutoresimputadosController();
        $rs = $TutoresimputadosController->insertTutoresimputados($TutoresimputadosDto);
        return $rs;
    }

    public function updateTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto = $this->validarTutoresimputados($TutoresimputadosDto);
        $TutoresimputadosController = new TutoresimputadosController();
        $rs = $TutoresimputadosController->updateTutoresimputados($TutoresimputadosDto);
        return $rs;
    }

    public function deleteTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto = $this->validarTutoresimputados($TutoresimputadosDto);
        $TutoresimputadosController = new TutoresimputadosController();
        $rs = $TutoresimputadosController->deleteTutoresimputados($TutoresimputadosDto);
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

@$idTutorImputado = $_POST["idTutorImputado"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$cveTipoTutor = $_POST["cveTipoTutor"];
@$ProvDef = $_POST["ProvDef"];
@$nombre = $_POST["nombre"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$fechaNacimiento = $_POST["fechaNacimiento"];
@$edad = $_POST["edad"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveGenero = $_POST["cveGenero"];
@$accion = $_POST["accion"];

$tutoresimputadosFacade = new TutoresimputadosFacade();
$tutoresimputadosDto = new TutoresimputadosDTO();

$tutoresimputadosDto->setIdTutorImputado($idTutorImputado);
$tutoresimputadosDto->setIdImputadoSolicitud($idImputadoSolicitud);
$tutoresimputadosDto->setCveTipoTutor($cveTipoTutor);
$tutoresimputadosDto->setProvDef($ProvDef);
$tutoresimputadosDto->setNombre($nombre);
$tutoresimputadosDto->setPaterno($paterno);
$tutoresimputadosDto->setMaterno($materno);
$tutoresimputadosDto->setFechaNacimiento($fechaNacimiento);
$tutoresimputadosDto->setEdad($edad);
$tutoresimputadosDto->setActivo($activo);
$tutoresimputadosDto->setFechaRegistro($fechaRegistro);
$tutoresimputadosDto->setFechaActualizacion($fechaActualizacion);
$tutoresimputadosDto->setCveGenero($cveGenero);

if (($accion == "guardar") && ($idTutorImputado == "")) {
    $tutoresimputadosDto = $tutoresimputadosFacade->insertTutoresimputados($tutoresimputadosDto);
    echo $tutoresimputadosDto;
} else if (($accion == "guardar") && ($idTutorImputado != "")) {
    $tutoresimputadosDto = $tutoresimputadosFacade->updateTutoresimputados($tutoresimputadosDto);
    echo $tutoresimputadosDto;
} else if ($accion == "consultar") {
    $tutoresimputadosDto = $tutoresimputadosFacade->selectTutoresimputados($tutoresimputadosDto);
    echo $tutoresimputadosDto;
} else if (($accion == "eliminar") && ($idTutorImputado != "")) {
    $tutoresimputadosDto = $tutoresimputadosFacade->deleteTutoresimputados($tutoresimputadosDto);
    echo $tutoresimputadosDto;
} else if (($accion == "seleccionar") && ($idTutorImputado != "")) {
    $tutoresimputadosDto = $tutoresimputadosFacade->selectTutoresimputados($tutoresimputadosDto);
    echo $tutoresimputadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>