<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaController.Class.php");

class ResumensolicitudaudienciaFacade {

    public function consultarResumen($idSolicitudAudiencia) {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->consultarResumen($idSolicitudAudiencia);

        $response = json_encode($response);

        return $response;
    }

    public function enviarSolicitud($param, $imputadosReclusos = "") {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->enviarSolicitudAudiencia($param, $imputadosReclusos);

        return json_encode($response);
    }

    public function consultaAcuse($param) {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->consultaAcuse($param);

        return $response;
    }

    public function consultaAcuseAuto($param) {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->consultaAcuseAuto($param);

        return $response;
    }

    public function consultaAcuseAudiencia($param) {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->consultaAcuseAudiencia($param);

        return $response;
    }

    public function consultaInfoAudiencia($paramAudiencia) {
        $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
        $response = $resumenSolicitudAudienciaController->consultaInfoAudiencia($paramAudiencia);

        return $response;
    }

}

$param = array();
$paramAudiencia = array();
@$idSolicitudAudiencia = $_POST['idSolicitud'];
@$imputadosReclusos = $_POST['imputadosReclusos'];
@$param["idSolicitudAudienca"] = $_POST['idSolicitud'];
@$param["idSolicitudAudiencaGet"] = $_GET['idSolicitud'];
@$param["idAudienciaGet"] = $_GET['idAudiencia'];
@$param["mismoJuzgador"] = (isset($_POST['mismoJuzgador'])) ? $_POST['mismoJuzgador'] : "N";
@$param["tribunal"] = (isset($_POST['tribunal']) ? $_POST['tribunal'] : "N");
@$param["toca"] = isset($_GET['toca']) ? $_GET['toca'] : 'N';
@$param["leyendajuez"] = isset($_GET['leyendajuez']) ? $_GET['leyendajuez'] : '';
@$accion = $_POST['accion'];
@$accionGet = $_GET['accion'];

@$paramAudiencia["idAudiencia"] = $_POST['idAudienciaInfo'];

$resumensolicitudaudienciaFacade = new ResumensolicitudaudienciaFacade();

if ($idSolicitudAudiencia != "") {
    if ($accion == "consultarResumen") {
        $resumenSolicitud = $resumensolicitudaudienciaFacade->consultarResumen($idSolicitudAudiencia);
        echo $resumenSolicitud;
    } else if ($accion == 'enviarSolicitud') {
        $enviarSolicitud = $resumensolicitudaudienciaFacade->enviarSolicitud($param, $imputadosReclusos);
        echo $enviarSolicitud;
    }
}
if ($accionGet == "consultaAcuse") {
    $resumen = $resumensolicitudaudienciaFacade->consultaAcuse($param);
    echo $resumen;
} else if ($accionGet == "consultaAcuseAudiencia") {
    $resumen = $resumensolicitudaudienciaFacade->consultaAcuseAudiencia($param);
    echo $resumen;
} else if ($accionGet == "consultaAcuseAuto") {
    $resumen = $resumensolicitudaudienciaFacade->consultaAcuseAuto($param);
    echo $resumen;
} else if ($accionGet == "consultaInfoAudiencia") {
    $resumen = $resumensolicitudaudienciaFacade->consultaInfoAudiencia($paramAudiencia);
    echo $resumen;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>