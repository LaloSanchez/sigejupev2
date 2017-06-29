<?php

//ihs
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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteCausasPorViolenciaController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

class ReporteCausasPorViolenciaFacade {

    private $proveedor;

    public function __construct() {
        
    }
    public function reporteCausasPorViolenciaPrevio($ofendidoscarpetasDto, $datos, $param) {
        $reporteCausasPorViolenciaController = new ReporteCausasPorViolenciaController();
        $reporteCausasPorViolencia = $reporteCausasPorViolenciaController->reporteCausasPorViolenciaPrevio($ofendidoscarpetasDto, $datos, $param);
        return $reporteCausasPorViolencia;
    }
    public function numCausasPrevio($ofendidoscarpetasDto, $datos, $param) {
        $reporteCausasPorViolenciaController = new ReporteCausasPorViolenciaController();
        $numCausas = $reporteCausasPorViolenciaController->numCausasPrevio($ofendidoscarpetasDto, $datos, $param);
        return $numCausas;
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
//------------Param Paginaci�n
$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
//----------------------------

$ofendidoscarpetasFacade = new ReporteCausasPorViolenciaFacade();
$ofendidoscarpetasDto = new OfendidoscarpetasDTO();
if ($accion == "consultar_causasOfendidosCarpetas_Reporte") {
    $datos = array();
    @$datos["cveVictimaDeLaDelincuenciaOrganizada"] = "";
    @$datos["cveVictimaDeViolenciaDeGenero"] = "";
    @$datos["cveVictimaDeTrata"] = "";
    @$datos["cveVictimaDeAcoso"] = "";
    @$datos["anioMes"] = "";
    @$datos["filtroTV"] = false;
    @$datos["filtroMV"] = false;
    @$datos["numero"] = strtoupper(str_ireplace("'", "", trim($_POST["numero"])));
    @$datos["idCarpetaJudicial"] = strtoupper(str_ireplace("'", "", trim($_POST["idCarpetaJudicial"])));
    @$datos["anio"] = strtoupper(str_ireplace("'", "", trim($_POST["anio"])));
    @$datos["mes"] = strtoupper(str_ireplace("'", "", trim($_POST["mes"])));
    @$datos["anioMes"] = strtoupper(str_ireplace("'", "", trim($_POST["anioMes"])));
    @$datos["fechaInicial"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
    @$datos["fechaFinal"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
    @$datos["cveJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgado"])));
    @$datos["cveTipoCarpeta"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoCarpeta"])));
    @$datos["cveRegion"] = strtoupper(str_ireplace("'", "", trim($_POST["cveRegion"])));
    @$datos["cveDistrito"] = strtoupper(str_ireplace("'", "", trim($_POST["cveDistrito"])));
    @$datos["nivel"] = strtoupper(str_ireplace("'", "", trim($_POST["nivel"])));
    @$datos["cveTipoJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoJuzgado"])));
    @$datos["cveTipoViolencia"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoViolencia"])));
    if ($_POST["cveTipoViolencia"] == 1) {
        @$datos["cveVictimaDeLaDelincuenciaOrganizada"] = 1;
    } else if ($_POST["cveTipoViolencia"] == 2) {
        @$datos["cveVictimaDeViolenciaDeGenero"] = 1;
    } else if ($_POST["cveTipoViolencia"] == 3) {
        @$datos["cveVictimaDeTrata"] = 1;
    } else if ($_POST["cveTipoViolencia"] == 4) {
        @$datos["cveVictimaDeAcoso"] = 1;
    }
    @$datos["cveModalidad"] = strtoupper(str_ireplace("'", "", trim($_POST["cveModalidad"])));
    @$datos["idCarpetaJudicial"] = strtoupper(str_ireplace("'", "", trim($_POST["idCarpetaJudicial"])));
    @$datos["filtroTV"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroTV"])));
    @$datos["filtroMV"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroMV"])));
    @$datos["detalles"] = strtoupper(str_ireplace("'", "", trim($_POST["detalles"])));
    @$datos["groups"] = strtoupper(str_ireplace("'", "", trim($_POST["groups"])));
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->reporteCausasPorViolenciaPrevio($ofendidoscarpetasDto, $datos, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "numCausas") {
    $datos = array();
    @$datos["anioMes"] = "";
    @$datos["anio"] = strtoupper(str_ireplace("'", "", trim($_POST["anio"])));
    @$datos["mes"] = strtoupper(str_ireplace("'", "", trim($_POST["mes"])));
    @$datos["anioMes"] = strtoupper(str_ireplace("'", "", trim($_POST["anioMes"])));
    @$datos["fechaInicial"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
    @$datos["fechaFinal"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
    @$datos["cveTipoJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoJuzgado"])));
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->numCausasPrevio($ofendidoscarpetasDto, $datos, $param);
    echo $ofendidoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>