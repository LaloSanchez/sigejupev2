<?php

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/adscripciones/AdscripcionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AdscripcionesFacade {

    public function getAdscripciones()
    {
        $adscripcionesController = new AdscripcionesController();

        return json_encode($adscripcionesController->getAdscripciones());
    }

    public function getAdscripcionesInternas()
    {
        $adscripcionesController = new AdscripcionesController();

        return json_encode($adscripcionesController->getAdscripcionesInternas());
    }

    public function getAdscripcionesInBitacoraMovimientos()
    {
        $adscripcionesController = new AdscripcionesController();

        return json_encode($adscripcionesController->getAdscripcionesInBitacoraMovimientos());
    }
}

$accion = @$_POST['accion'];

$adscripciones = new AdscripcionesFacade();
if (isset($_POST['accion']) and $_POST['accion'] === 'get') {
    if (isset($_POST['tipoAdscripcion'])) {

        if ($_POST['tipoAdscripcion'] == 'externas') {

            echo $adscripciones->getAdscripciones();

        } else if ($_POST['tipoAdscripcion'] == 'internas') {

            echo $adscripciones->getAdscripcionesInternas();

        }

    }

} elseif ($accion == 'consultaadscripcionesbitacoramovimientos') {

    echo $adscripciones->getAdscripcionesInBitacoraMovimientos();

}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}