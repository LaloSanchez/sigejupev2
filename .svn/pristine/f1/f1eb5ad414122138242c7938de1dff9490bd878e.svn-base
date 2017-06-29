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
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DigitalizacionFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function getRutasDigitalizacion() {
        $objPlantilla = "";
        $xml = simplexml_load_file("./../../../tribunal/host/config.xml");

        if ((!isset($xml->DIGITALIZACION->MODULODIGITALIZACION->HOST)) || (!isset($xml->SUBIRARCHIVOS->MODULOSUBIRARCHIVOS->HOST))) {
            $resultado["status"] = "Error";
            $resultado["text"] = "NO SE ENCONTRARON LAS RUTAS DE DIGITALIZACION";
        } else {
            $resultado["status"] = "Ok";
            $moduloDigitalizacion = $xml->DIGITALIZACION->MODULODIGITALIZACION->HOST;
            $moduloSubirArchivos = $xml->SUBIRARCHIVOS->MODULOSUBIRARCHIVOS->HOST;
            $resultado["moduloDigitalizacion"] = $moduloDigitalizacion;
            $resultado["moduloSubirArchivos"] = $moduloSubirArchivos;
            return json_encode($resultado);
        }
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

@$accion = $_POST["accion"];

$digitalizacionFacade = new DigitalizacionFacade();

if (($accion == "getRutasDigitalizacion")) {
    $rutasDigitalizacion = $digitalizacionFacade->getRutasDigitalizacion();
    echo $rutasDigitalizacion;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>