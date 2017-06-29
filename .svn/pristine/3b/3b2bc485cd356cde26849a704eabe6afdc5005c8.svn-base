<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteSentenciasController.Class.php");

class ReporteSentenciasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteSentencias($datos, $paginacion, $accion = null, $reporte = null) {
        $reporteSentenciasController = new reporteSentenciasController();
        $datosCausas = $reporteSentenciasController->reporteSentenciasPrevio($datos, $paginacion, $accion, $reporte);
        return $datosCausas;
    }

}

$reporteSentenciasFacade = new reporteSentenciasFacade();
@$accion = $_POST["accion"];

if ($accion == "consultar_Sentencias_Reporte") {

    
     @$datos['cveDelito'] = "";
     @$datos['checkDelitos'] = "";
     @$datos['checkDetalle'] = "";
    @$datos['fechaSentencia'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['fechaSentencia'], "utf8") : strtoupper($_POST['fechaSentencia'])))));
    @$datos['cveTipoJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoJuzgado'], "utf8") : strtoupper($_POST['cveTipoJuzgado'])))));
    @$datos['anio'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['anio'], "utf8") : strtoupper($_POST['anio'])))));
    @$datos['fechaDesde'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['txtFecInicialBusqueda'], "utf8") : strtoupper($_POST['txtFecInicialBusqueda'])))));
    @$datos['fechaHasta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['txtFecFinalBusqueda'], "utf8") : strtoupper($_POST['txtFecFinalBusqueda'])))));
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    @$paginacion['cantxPag'] = $_POST['cantxPag'];
    @$paginacion['paginacion'] = $_POST['paginacion'];
    @$paginacion['pag'] = $_POST['pag'];
    @$datos['txtAnioMes'] =strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['txtAnioMes'],"utf8"):strtoupper($_POST['txtAnioMes']))))) ;
    @$datos['checkDetalle'] =strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['checkDetalle'],"utf8"):strtoupper($_POST['checkDetalle']))))) ;
    @$datos['cveDelito'] =strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['cveDelito'],"utf8"):strtoupper($_POST['cveDelito']))))) ;
     @$datos['cveTipoProcedimiento'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoProcedimiento'], "utf8") : strtoupper($_POST['cveTipoProcedimiento'])))));
     @$datos['checkDelitos'] =strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['checkDelitos'],"utf8"):strtoupper($_POST['checkDelitos']))))) ;
     @$datos['nivel'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['nivel'], "utf8") : strtoupper($_POST['nivel'])))));
    @$datos['mes'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['mes'], "utf8") : strtoupper($_POST['mes'])))));
    @$datos['cveRegion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveRegion'], "utf8") : strtoupper($_POST['cveRegion'])))));
    @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
    @$datos['cveTipoCarpeta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoCarpeta'], "utf8") : strtoupper($_POST['cveTipoCarpeta'])))));
    @$datos['cveTipoSentencia'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoSentencia'], "utf8") : strtoupper($_POST['cveTipoSentencia'])))));
    @$datos['numero'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['numero'], "utf8") : strtoupper($_POST['numero'])))));
    @$datos['porMes'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['porMes'], "utf8") : strtoupper($_POST['porMes'])))));
    @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
    @$datos['groups'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['groups'], "utf8") : strtoupper($_POST['groups'])))));
    @$datos['cveJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgado'], "utf8") : strtoupper($_POST['cveJuzgado'])))));
    @$datos['detalles'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['detalles'], "utf8") : strtoupper($_POST['detalles'])))));
    $SentenciasDto = $reporteSentenciasFacade->reporteSentencias($datos, $paginacion);
    echo $SentenciasDto ;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>