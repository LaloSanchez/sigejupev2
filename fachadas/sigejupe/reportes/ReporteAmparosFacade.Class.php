<?php

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/AmparosFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//Reporte amparos
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteAmparosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ReporteAmparosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteAmparosPrevio($amparosDto, $datos, $param) {
            $reporteAmparosController = new ReporteAmparosController();
            $reporteAmparos = $reporteAmparosController->reporteAmparosPrevio($amparosDto, $datos, $param);
            return $reporteAmparos;
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

    $amparosFacade = new ReporteAmparosFacade();
    $amparosDto = new AmparosDTO();
    if ($accion == "consultar_Amparos_Reporte") {
        $datos = array();
        @$datos["anioMes"] = "";
        @$datos["filtroTA"] = false;
        @$datos["filtroEA"] = false;
        @$datos["numero"] = strtoupper(str_ireplace("'", "", trim($_POST["numero"])));
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
        @$datos["cveTipoAmparo"] = strtoupper(str_ireplace("'", "", trim($_POST["cveTipoAmparo"])));
        @$datos["cveEstatusAmparo"] = strtoupper(str_ireplace("'", "", trim($_POST["cveEstatusAmparo"])));
        @$datos["filtroTA"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroTA"])));
        @$datos["filtroEA"] = strtoupper(str_ireplace("'", "", trim($_POST["filtroEA"])));
        @$datos["detalles"] = strtoupper(str_ireplace("'", "", trim($_POST["detalles"])));
        @$datos["groups"] = strtoupper(str_ireplace("'", "", trim($_POST["groups"])));
        $amparosDto = $amparosFacade->reporteAmparosPrevio($amparosDto, $datos, $param);
        echo $amparosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>