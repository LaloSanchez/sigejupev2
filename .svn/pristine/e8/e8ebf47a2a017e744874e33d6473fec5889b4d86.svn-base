<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/CausasRadicadasDetalleController.Class.php");

    class causasRadicadasDetalle {

        public function obtenerDatos() {
            
        }

        public function selectCausas($carpetasJudicialesDto, $param = null) {

            $CausasRadicadasDetalleController = new causasRadicadasDetalleController();
            $actuacionesres = $CausasRadicadasDetalleController->selectCausas($carpetasJudicialesDto, $param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }

        public function fechaMysql($fecha) {
            list($dia, $mes, $year) = explode("/", $fecha);

            return $year . "-" . $mes . "-" . $dia;
        }

        public function fechaNormal($fecha) {
            list($dia, $mes, $year) = explode("/", $fecha);
            return $year . "-" . $mes . "-" . $dia;
        }

    }

    @$fechaInicio = $_POST["fechainicio"];
    @$fechafin = $_POST["fechafin"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveDistrito = $_POST["cveDistrito"];
    @$cveRegion = $_POST["cveRegion"];
    @$id = $_POST["id"];
    @$accion = $_POST["accion"];

    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
    $param = array();
    $causasRadicadasFacade = new causasRadicadasDetalle();
    $fechaInicio = $causasRadicadasFacade->fechaMysql($fechaInicio);
    $fechaFin = $causasRadicadasFacade->fechaMysql($fechafin);

    $carpetasJudicialesDto->setActivo("S");
    $carpetasJudicialesDto->setCveJuzgado($cveJuzgado);

    $param["fechaDesde"] = $fechaInicio;
    $param["fechaHasta"] = $fechaFin;
    $param["region"] = $cveRegion;
    $param["distrito"] = $cveDistrito;
    $param["juzgado"] = $cveJuzgado;
    if ($accion == "consultar") {
        $controller = $causasRadicadasFacade->selectCausas($carpetasJudicialesDto, $param);
        echo $controller;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}