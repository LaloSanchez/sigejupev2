<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteSolicitudesAudienciasController.Class.php");

    class ReporteSolicitudesAudienciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteSolicitudesAudiencias($datos, $paginacion) {
            $reporteSolicitudesAudienciasController = new reporteSolicitudesAudienciasController();
            $datosSolicitudesAudiencias = $reporteSolicitudesAudienciasController->reporteSolicitudesAudiencias($datos, $paginacion);
            return $datosSolicitudesAudiencias;
        }

    }

    $reporteSolicitudesAudienciasFacade = new ReporteSolicitudesAudienciasFacade();
    @$accion = $_POST["accion"];

    if ($accion == "ConsultarSolicitudAudiencia_Reporte") {
        @$datos['cveConcurso'] = "";
        @$datos['cveElementoComision'] = "";
        @$datos['cveConsumacion'] = "";
        @$datos['checkConsumaciones'] = "";
        @$datos['checkTerminaciones'] = "";
        @$datos['checkDelitos'] = "";
        @$datos['checkCarEjecu'] = "";
        @$datos['checkClasDelitos'] = "";
        @$datos['cveDelito'] = "";
        @$datos['cveClasificacionDelito'] = "";
        @$datos['cveComision'] = "";
        @$datos['cveFormaAccion'] = "";
        @$datos['cveClasificacionDelitoOrden'] = "";
        @$datos['cveModalidad'] = "";
        @$datos['cveConsignacion'] = "";
        @$datos['anio'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['anio'], "utf8") : strtoupper($_POST['anio'])))));
        @$datos['fechaDesde'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['txtFecInicialBusqueda'], "utf8") : strtoupper($_POST['txtFecInicialBusqueda'])))));
        @$datos['fechaHasta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['txtFecFinalBusqueda'], "utf8") : strtoupper($_POST['txtFecFinalBusqueda'])))));
        @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
        @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
        @$paginacion['cantxPag'] = $_POST['cantxPag'];
        @$paginacion['paginacion'] = $_POST['paginacion'];
        @$paginacion['pag'] = $_POST['pag'];
        @$datos['nivel'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['nivel'], "utf8") : strtoupper($_POST['nivel'])))));
        @$datos['cveTipoJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTipoJuzgado'], "utf8") : strtoupper($_POST['cveTipoJuzgado'])))));
        @$datos['cveEstatusSolicitud'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveEstatusSolicitud'], "utf8") : strtoupper($_POST['cveEstatusSolicitud'])))));
        @$datos['cveRegion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveRegion'], "utf8") : strtoupper($_POST['cveRegion'])))));
        @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
        @$datos['cvetipoCarpeta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cvetipoCarpeta'], "utf8") : strtoupper($_POST['cvetipoCarpeta'])))));
        @$datos['numero'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['numero'], "utf8") : strtoupper($_POST['numero'])))));
        @$datos['porMes'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['porMes'], "utf8") : strtoupper($_POST['porMes'])))));
        @$datos['cveDistrito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDistrito'], "utf8") : strtoupper($_POST['cveDistrito'])))));
        @$datos['groups'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['groups'], "utf8") : strtoupper($_POST['groups'])))));
        @$datos['cveJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgado'], "utf8") : strtoupper($_POST['cveJuzgado'])))));
        @$datos['detalles'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['detalles'], "utf8") : strtoupper($_POST['detalles'])))));
        @$datos['checkDetenido'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkDetenido'], "utf8") : strtoupper($_POST['checkDetenido'])))));
//    @$datos['checkIncompetencia'] =strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($_POST['checkIncompetencia'],"utf8"):strtoupper($_POST['checkIncompetencia']))))) ;
        @$datos['cveDelito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveDelito'], "utf8") : strtoupper($_POST['cveDelito'])))));
        @$datos['cveClasificacionDelito'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveClasificacionDelito'], "utf8") : strtoupper($_POST['cveClasificacionDelito'])))));
        @$datos['cveComision'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveComision'], "utf8") : strtoupper($_POST['cveComision'])))));
        @$datos['cveFormaAccion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveFormaAccion'], "utf8") : strtoupper($_POST['cveFormaAccion'])))));
        @$datos['cveClasificacionDelitoOrden'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveClasificacionDelitoOrden'], "utf8") : strtoupper($_POST['cveClasificacionDelitoOrden'])))));
        @$datos['cveModalidad'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveModalidad'], "utf8") : strtoupper($_POST['cveModalidad'])))));
        @$datos['cveConcurso'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConcurso'], "utf8") : strtoupper($_POST['cveConcurso'])))));
        @$datos['cveConsignacion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConsignacion'], "utf8") : strtoupper($_POST['cveConsignacion'])))));
        @$datos['cveElementoComision'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveElementoComision'], "utf8") : strtoupper($_POST['cveElementoComision'])))));
        @$datos['cveTerminacion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveTerminacion'], "utf8") : strtoupper($_POST['cveTerminacion'])))));
        @$datos['cveConsumacion'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveConsumacion'], "utf8") : strtoupper($_POST['cveConsumacion'])))));
        @$datos['checkConsumaciones'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkConsumaciones'], "utf8") : strtoupper($_POST['checkConsumaciones'])))));
        @$datos['checkTerminaciones'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkTerminaciones'], "utf8") : strtoupper($_POST['checkTerminaciones'])))));
        @$datos['checkDelitos'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkDelitos'], "utf8") : strtoupper($_POST['checkDelitos'])))));
        @$datos['checkClasDelitos'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkClasDelitos'], "utf8") : strtoupper($_POST['checkClasDelitos'])))));
        @$datos['checkCarEjecu'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkCarEjecu'], "utf8") : strtoupper($_POST['checkCarEjecu'])))));
        @$datos['opcCheck'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['opcCheck'], "utf8") : strtoupper($_POST['opcCheck'])))));
        $solicitudesAudiencias = $reporteSolicitudesAudienciasFacade->reporteSolicitudesAudiencias($datos, $paginacion);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>