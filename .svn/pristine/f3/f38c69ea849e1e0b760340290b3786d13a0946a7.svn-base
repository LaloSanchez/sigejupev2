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
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteCausasViolenciaGeneroController.Class.php");
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

class ReporteCausasViolenciaGeneroFacade {

    private $proveedor;

    public function __construct() {
        
    }
    public function reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $param) {
        $reporteCausasPorViolenciaController = new ReporteCausasViolenciaGeneroController();
        $reporteCausasPorViolencia = $reporteCausasPorViolenciaController->reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $param);
        return $reporteCausasPorViolencia;
    }
    public function jsonCausas($causasDto, $datos, $param) {
        $reporteCausasPorViolenciaController = new ReporteCausasViolenciaGeneroController();
        $reporteCausasPorViolencia = $reporteCausasPorViolenciaController->jsonCausas($causasDto, $datos, $param);
        return $reporteCausasPorViolencia;
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

$causasFacade = new ReporteCausasViolenciaGeneroFacade();
$causasDto = new OfendidoscarpetasDTO();
if ($accion == "consultar_causasViolenciaGenero_Reporte") {
    $datos = array();
    @$datos["anioMes"] = "";
    @$datos["filtroTV"] = false;
    @$datos["filtroMV"] = false;
    @$datos["numero"] = $_POST["numero"];
    @$datos["idCarpetaJudicial"] = $_POST["idCarpetaJudicial"];
    @$datos["anio"] = $_POST["anio"];
    @$datos["mes"] = $_POST["mes"];
    @$datos["anioMes"] = $_POST["anioMes"];
    @$datos["fechaInicial"] = $_POST["txtFecInicialBusqueda"];
    @$datos["fechaFinal"] = $_POST["txtFecFinalBusqueda"];
    @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
    @$datos["cveRegion"] = $_POST["cveRegion"];
    @$datos["cveDistrito"] = $_POST["cveDistrito"];
    @$datos["nivel"] = $_POST["nivel"];
    @$datos["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
    @$datos["idCarpetaJudicial"] = $_POST["idCarpetaJudicial"];
    @$datos["filtroTV"] = $_POST["filtroTV"];
    @$datos["filtroMV"] = $_POST["filtroMV"];
    @$datos["detalles"] = $_POST["detalles"];
    @$datos["groups"] = $_POST["groups"];
    $causasDto = $causasFacade->reporteCausasViolenciaGeneroPrevio($causasDto, $datos, $param);
    echo $causasDto;
} else if ($accion == "consultar_causasVG6_Reporte") {
    $datos = array();
    @$datos["anioMes"] = "";
    @$datos["filtroTV"] = false;
    @$datos["filtroMV"] = false;
    @$datos["numero"] = $_POST["numero"];
    @$datos["idCarpetaJudicial"] = $_POST["idCarpetaJudicial"];
    @$datos["anio"] = $_POST["anio"];
    @$datos["mes"] = $_POST["mes"];
    @$datos["anioMes"] = $_POST["anioMes"];
    @$datos["fechaInicial"] = $_POST["txtFecInicialBusqueda"];
    @$datos["fechaFinal"] = $_POST["txtFecFinalBusqueda"];
    @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
    @$datos["cveRegion"] = $_POST["cveRegion"];
    @$datos["cveDistrito"] = $_POST["cveDistrito"];
    @$datos["nivel"] = $_POST["nivel"];
    @$datos["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
    @$datos["idCarpetaJudicial"] = $_POST["idCarpetaJudicial"];
    @$datos["filtroTV"] = $_POST["filtroTV"];
    @$datos["filtroMV"] = $_POST["filtroMV"];
    @$datos["detalles"] = $_POST["detalles"];
    @$datos["groups"] = $_POST["groups"];
    $x = $causasFacade->jsonCausas($causasDto, $datos, $param);
    echo $x;
} 

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>