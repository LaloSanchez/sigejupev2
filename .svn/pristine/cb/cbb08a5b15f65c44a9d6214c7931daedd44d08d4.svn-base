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
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteTocasEstatusController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    class ReporteTocasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteTocasPrevio($tocasDto, $datos, $param) {
            $reporteTocasController = new ReporteTocasEstatusController();
            $reporteTocas = $reporteTocasController->reporteTocasPrevio($tocasDto, $datos, $param);
            return $reporteTocas;
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
    if ($accion == "consultar_Tocas_Estatus") {
        $datos = array();
        @$datos["filtroTC"] = false;
        @$datos["anioMes"] = "";
        @$datos["numero"] = strtoupper(str_ireplace("'", "", trim($_POST["numero"])));
        @$datos["anio"] = strtoupper(str_ireplace("'", "", trim($_POST["anio"])));
        @$datos["mes"] = strtoupper(str_ireplace("'", "", trim($_POST["mes"])));
        @$datos["anioMes"] = strtoupper(str_ireplace("'", "", trim($_POST["anioMes"])));
        @$datos["fechaInicial"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecInicialBusqueda"])));
        @$datos["fechaFinal"] = strtoupper(str_ireplace("'", "", trim($_POST["txtFecFinalBusqueda"])));
        @$datos["cveJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveJuzgado"])));
        @$datos["cveEstatusCarpeta"] = strtoupper(str_ireplace("'", "", trim($_POST["cveEstatusCarpeta"])));
        @$datos["filtroTC"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroTC"])));
        @$datos["nivel"] = strtoupper(str_ireplace("'", "", trim($_POST["nivel"])));
        @$datos["cveTipoJuzgado"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoJuzgado"])));
        @$datos["detalles"] = strtoupper(str_ireplace("'", "", trim($_POST["detalles"])));
        @$datos["groups"] = strtoupper(str_ireplace("'", "", trim($_POST["groups"])));
        @$datos["checkConclusiones"] = strtoupper(str_ireplace("'", "", trim($_POST["checkConclusiones"])));
        $tocasDto = $tocasFacade->reporteTocasPrevio($tocasDto, $datos, $param);
        echo $tocasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>