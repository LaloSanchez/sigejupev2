<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */
define('WP_DEBUG', true); // enable debugging mode
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//Reporte promociones que generan carpeta judicializada
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReportePromocionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ReportePromocionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reportePromocionesPrevio($promocionesDto, $datos, $param) {
            $reportePromocionesController = new ReportePromocionesController();
            $reportePromociones = $reportePromocionesController->reportePromocionesPrevio($promocionesDto, $datos, $param);
            return $reportePromociones;
        }

    }

    @$accion = $_POST["accion"];
//------------Param Paginaci�n
    $param = array();
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    @$param["generico"] = $_POST['generico'];
    $promocionesFacade = new ReportePromocionesFacade();
    $promocionesDto = new ActuacionesDTO();
    if ($accion == "consultar_Promociones_Reporte") {
        $datos = array();
        @$datos["anioMes"] = "";
        @$datos["numero"] = strtoupper(str_ireplace("'", "", trim($_POST["numero"])));
        @$datos["anio"] = strtoupper(str_ireplace("'", "", trim($_POST["anio"])));
        @$datos["mes"] = strtoupper(str_ireplace("'", "", trim($_POST["mes"])));
        @$datos["anioMes"] = strtoupper(str_ireplace("'", "", trim($_POST["anioMes"])));
        @$datos["fechaInicial"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
        @$datos["fechaFinal"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
        @$datos["cveJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgado"])));
        @$datos["cveRegion"] = strtoupper(str_ireplace("'", "", trim($_POST["cveRegion"])));
        @$datos["cveDistrito"] = strtoupper(str_ireplace("'", "", trim($_POST["cveDistrito"])));
        @$datos["nivel"] = strtoupper(str_ireplace("'", "", trim($_POST["nivel"])));
        @$datos["cveTipoJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoJuzgado"])));
        @$datos["cveTipoCarpeta"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoCarpeta"])));
        @$datos["detalles"] = strtoupper(str_ireplace("'", "", trim($_POST["detalles"])));
        @$datos["groups"] = strtoupper(str_ireplace("'", "", trim($_POST["groups"])));
        $promocionesDto = $promocionesFacade->reportePromocionesPrevio($promocionesDto, $datos, $param);
        echo $promocionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>