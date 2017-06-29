<?php

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/TocasFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//Reporte de Tocas
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteCausasTerminadasDetalleController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    class ReporteTocasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function consultarCausasTerminadasDetalle($datos, $param) {
            $reporteCausasTerminadasDetalleController = new ReporteCausasTerminadasDetalleController();
            $reporteCausas = $reporteCausasTerminadasDetalleController->consultarCausasTerminadasDetalle( $datos, $param);
            return $reporteCausas;
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

    $tocasFacade = new ReporteTocasFacade();
    $tocasDto = new CarpetasjudicialesDTO();
    if ($accion == "consultarCausasTerminadas_Detalle_Reporte") {
        $datos = array();
        @$datos["fechaDesde"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
        @$datos["fechaHasta"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
        @$datos["cveJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgado"])));
        @$datos["cveRegion"] = strtoupper(str_ireplace("'", "", trim($_POST["cveRegion"])));
        @$datos["cveDistrito"] = strtoupper(str_ireplace("'", "", trim($_POST["cveDistrito"])));

        $causasTerminadasDetalles = $tocasFacade->consultarCausasTerminadasDetalle($datos, $param);
        echo $causasTerminadasDetalles;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
