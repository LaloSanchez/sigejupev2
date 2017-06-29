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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/terminos/TerminosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class TerminosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTerminos($TerminosDto) {
        return $TerminosDto;
    }

    public function selectTerminos($TerminosDTO) {
        $TerminosDTO = $this->validarTerminos($TerminosDTO);
        $TerminosController = new TerminosController();
        $TerminosDTO = $TerminosController->selectTerminos($TerminosDTO);
        if ($TerminosDTO != "") {
            $dtoToJson = new DtoToJson($TerminosDTO);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
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

@$idTermino = $_POST["idTermino"];
@$texto = $_POST["texto"];
@$activo = $_POST["activo"];
@$cveTipoTermino = $_POST["cveTipoTermino"];
@$accion = $_POST['accion'];

$terminosFacade = new TerminosFacade();
$terminosDto = new TerminosDTO();

$terminosDto->setIdTermino($idTermino);
$terminosDto->setTexto($texto);
$terminosDto->setActivo($activo);
$terminosDto->setCveTipoTermino($cveTipoTermino);

if ($accion == "consultar") {
    $terminosDto = $terminosFacade->selectTerminos($terminosDto);
    echo utf8_encode($terminosDto);
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>