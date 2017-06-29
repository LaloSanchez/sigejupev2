<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteDelitosController.Class.php");

    class ReporteDelitosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteDelitos($datos, $paginacion) {
            $reporteDelitosController = new reporteDelitosController();
            $datosDelitos = $reporteDelitosController->reporteDelitos($datos, $paginacion);
            return $datosDelitos;
        }

    }

    $reporteDelitosFacade = new ReporteDelitosFacade();
    @$accion = $_POST["accion"];

    if ($accion == "ConsultarDelitos_Reporte") {
        @$datos['cveConcurso'] = "";
        @$datos['cveElementoComision'] = "";
        @$datos['cveConsumacion'] = "";
        @$datos['checkConsumaciones'] = "";
        @$datos['checkDelitos'] = "";
        @$datos['checkMunicipio'] = "";
        @$datos['checkCarEjecu'] = "";
        @$datos['checkClasDelitos'] = "";
        @$datos['cveDelito'] = "";
        @$datos['cveMunicipio'] = "";
        @$datos['cveClasificacionDelito'] = "";
        @$datos['cveComision'] = "";
        @$datos['cveFormaAccion'] = "";
        @$datos['cveClasificacionDelitoOrden'] = "";
        @$datos['cveModalidad'] = "";
        @$datos['cveConsignacion'] = "";
        @$datos['anio'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['anio'], "utf8") : strtoupper($_POST['anio'])))));
        @$datos['fechaDesde'] = $_POST['txtFecInicialBusqueda'];
        @$datos['fechaHasta'] = $_POST['txtFecFinalBusqueda'];
        @$paginacion['cantxPag'] = $_POST['cantxPag'];
        @$paginacion['paginacion'] = $_POST['paginacion'];
        //@$datos['checkrango'] = strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['checkrango'],"utf8"):strtoupper($_POST['checkrango'])))));
        @$paginacion['pag'] = $_POST['pag'];
        @$datos['nivel'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['nivel'], "utf8") : strtoupper($_POST['nivel'])))));
        @$datos['cveTipoJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoJuzgado'], "utf8") : strtoupper($_POST['cveTipoJuzgado'])))));
        @$datos['cveEstatusCarpeta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveEstatusCarpeta'], "utf8") : strtoupper($_POST['cveEstatusCarpeta'])))));
        @$datos['cveRegion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveRegion'], "utf8") : strtoupper($_POST['cveRegion'])))));
        @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
        @$datos['cveTipoCarpeta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoCarpeta'], "utf8") : strtoupper($_POST['cveTipoCarpeta'])))));
        @$datos['numero'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['numero'], "utf8") : strtoupper($_POST['numero'])))));
        @$datos['porMes'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['porMes'], "utf8") : strtoupper($_POST['porMes'])))));
        @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
        @$datos['groups'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['groups'], "utf8") : strtoupper($_POST['groups'])))));
        @$datos['cveJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgado'], "utf8") : strtoupper($_POST['cveJuzgado'])))));
        @$datos['detalles'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['detalles'], "utf8") : strtoupper($_POST['detalles'])))));
        @$datos['cveDelito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDelito'], "utf8") : strtoupper($_POST['cveDelito'])))));
        @$datos['cveMunicipio'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveMunicipio'], "utf8") : strtoupper($_POST['cveMunicipio'])))));
        @$datos['cveClasificacionDelito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveClasificacionDelito'], "utf8") : strtoupper($_POST['cveClasificacionDelito'])))));
        @$datos['cveComision'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveComision'], "utf8") : strtoupper($_POST['cveComision'])))));
        @$datos['cveFormaAccion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveFormaAccion'], "utf8") : strtoupper($_POST['cveFormaAccion'])))));
        @$datos['cveClasificacionDelitoOrden'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveClasificacionDelitoOrden'], "utf8") : strtoupper($_POST['cveClasificacionDelitoOrden'])))));
        @$datos['cveModalidad'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveModalidad'], "utf8") : strtoupper($_POST['cveModalidad'])))));
        @$datos['cveConcurso'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConcurso'], "utf8") : strtoupper($_POST['cveConcurso'])))));
        @$datos['cveConsignacion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConsignacion'], "utf8") : strtoupper($_POST['cveConsignacion'])))));
        @$datos['cveElementoComision'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveElementoComision'], "utf8") : strtoupper($_POST['cveElementoComision'])))));
        @$datos['cveConclusion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConclusion'], "utf8") : strtoupper($_POST['cveConclusion'])))));
        @$datos['cveConsumacion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConsumacion'], "utf8") : strtoupper($_POST['cveConsumacion'])))));
        @$datos['checkConsumaciones'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkConsumaciones'], "utf8") : strtoupper($_POST['checkConsumaciones'])))));
        @$datos['checkDelitos'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkDelitos'], "utf8") : strtoupper($_POST['checkDelitos'])))));
        @$datos['checkMunicipio'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkMunicipio'], "utf8") : strtoupper($_POST['checkMunicipio'])))));
        @$datos['checkCarEjecu'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkMunicipio'], "utf8") : strtoupper($_POST['checkMunicipio'])))));
        @$datos['checkClasDelitos'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkClasDelitos'], "utf8") : strtoupper($_POST['checkClasDelitos'])))));
        @$datos['checkCarEjecu'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkCarEjecu'], "utf8") : strtoupper($_POST['checkCarEjecu'])))));
        @$datos['opcCheck'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['opcCheck'], "utf8") : strtoupper($_POST['opcCheck'])))));

        $reporteDelitosFacade->reporteDelitos($datos, $paginacion);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>

