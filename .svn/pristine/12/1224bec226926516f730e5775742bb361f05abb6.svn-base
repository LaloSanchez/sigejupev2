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
//Reporte audiencias
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteAudienciasv3Controller.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
class ReporteAudienciasFacade {

    private $proveedor;

    public function __construct() {
        
    }
    public function indicadorAudienciasWebService($datos){
        $paginacion = array();
        $paginacion["pag"]=$datos["pag"];
        $paginacion["cantxPag"]=$datos["cantxPag"];
        $paginacion["paginacion"]=$datos["paginacion"];
        $paginacion["fechaDesde"]=$datos["txtFecInicialBusqueda"];
        $paginacion["fechaHasta"]=$datos["txtFecFinalBusqueda"];
        return $this->indicadorAudienciasPrevio($datos, $paginacion);
    }
    public function indicadorAudienciasPrevio($datos, $param) {
        $indicadorAudienciasController = new ReporteAudienciasController();
        $indicadorAudiencias= $indicadorAudienciasController->indicadorAudienciasPrevio($datos, $param);
        return $indicadorAudiencias;
    }
    public function reporteAudienciasPrevio($audienciasDto, $datos, $param) {
        $reporteAudienciasController = new ReporteAudienciasController();
        $reporteAudiencias= $reporteAudienciasController->reporteAudienciasPrevio($audienciasDto, $datos, $param);
        return $reporteAudiencias;
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

$audienciasFacade = new ReporteAudienciasFacade();
$audienciasDto = new AudienciasDTO();

if ($accion == "consultar_Audiencias_Reporte") {
    $datos = array();
    @$datos["anioMes"] = "";
    @$datos["filtroPorJuez"] = false;
    @$datos["porJuez"] = false;
    @$datos["filtroPorEtapaProcesal"] = false;
    @$datos["audienciasDeIniciales"] = false;
    @$datos["audienciasDeJuicio"] = false;
    @$datos["audienciasAJDC"] = false;
    @$datos["numero"] = strtoupper(str_ireplace("'", "", trim($_POST["numero"])));
    @$datos["anio"] = strtoupper(str_ireplace("'", "", trim($_POST["anio"])));
    @$datos["mes"] = strtoupper(str_ireplace("'", "", trim($_POST["mes"])));
    @$datos["anioMes"] = strtoupper(str_ireplace("'", "", trim($_POST["anioMes"])));
    @$datos["fechaInicial"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
    @$datos["fechaFinal"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
    @$datos["cveJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgado"])));
    @$datos["checkDetalle"] = strtoupper(str_ireplace("'", "", trim($_POST["checkDetalle"])));
    @$datos["cveRegion"] = strtoupper(str_ireplace("'", "", trim($_POST["cveRegion"])));
    @$datos["cveDistrito"] = strtoupper(str_ireplace("'", "", trim($_POST["cveDistrito"])));
    @$datos["nivel"] = strtoupper(str_ireplace("'", "", trim($_POST["nivel"])));
    @$datos["filtroPorJuez"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroPorJuez"])));
    @$datos["porJuez"] = strtoupper(str_ireplace("'", "", trim($_POST["porJuez"])));
    @$datos["filtroPorEtapaProcesal"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroPorEtapaProcesal"])));
    @$datos["cveJuzgador"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgador"])));
    @$datos["cveTipoAudiencia"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoAudiencia"])));
    @$datos["cveEtapaProcesal"] = strtoupper(str_ireplace("'", "", trim($_POST["cveEtapaProcesal"])));
    @$datos["cveEstatusAudiencia"] = strtoupper(str_ireplace("'", "", trim($_POST["cveEstatusAudiencia"])));
    @$datos["cveTipoJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoJuzgado"])));
    @$datos["cveTipoCarpeta"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoCarpeta"])));
    @$datos["cveEstatusAudiencia"] = strtoupper(str_ireplace("'", "", trim($_POST["cveEstatusAudiencia"])));
    @$datos["audienciasDeIniciales"] = strtoupper(str_ireplace("'", "", trim($_POST["audienciasDeIniciales"])));
    @$datos["audienciasDeJuicio"] = strtoupper(str_ireplace("'", "", trim($_POST["audienciasDeJuicio"])));
    @$datos["audienciasAJDC"] = strtoupper(str_ireplace("'", "", trim($_POST["audienciasAJDC"])));
    @$datos["promedioDuracionAudiencias"] = strtoupper(str_ireplace("'", "", trim($_POST["promedioDuracionAudiencias"])));
    @$datos["detalles"] = $_POST["detalles"];
    @$datos["groups"] = strtoupper(str_ireplace("'", "", trim($_POST["groups"])));
    $audienciasDto = $audienciasFacade->reporteAudienciasPrevio($audienciasDto, $datos, $param);
    echo $audienciasDto;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>