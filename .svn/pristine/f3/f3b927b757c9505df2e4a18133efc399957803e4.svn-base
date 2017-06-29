<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/ReporteCargaJuecesInicialController.Class.php");
    

    Class ReporteCargaJuecesInicialFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteCarga($datos, $paginacion, $accion) {
            $reporteCargaController = new ReporteCargaJuecesInicialController();
            if ($accion == "ConsultarCargaJueces_Indicador" || $accion == "ConsultarPromCausasTerJuezCtrl_Indicador" || $accion == "ConsultarProductividadJuezJuicio_Indicador") {
                $datosCarga = $reporteCargaController->reporteCargaIndicadores($datos, $paginacion, $accion);
            } else {
                $datosCarga = $reporteCargaController->reporteCarga($datos, $paginacion, $accion);
            }
            echo $datosCarga;
        }

        public function reporteCargaWebService($accion2, $datos) {

            $paginacion = array();
            $paginacion["pag"] = $datos["pag"];
            $paginacion["cantxPag"] = $datos["cantxPag"];
            $paginacion["paginacion"] = $datos["paginacion"];
            $paginacion["fechaDesde"] = $datos["txtFecInicialBusqueda"];
            $paginacion["fechaHasta"] = $datos["txtFecFinalBusqueda"];
            include "ReporteCausasFacade.Class.php";
            $datos['opcCheck'] = 0;

            if ($accion2 == "ConsultarCargaJueces_Indicador") {
                $ReporteCausasFacade = new ReporteCausasFacade();
                $causas1 = $ReporteCausasFacade->reporteCausas($datos, $paginacion, $accion2);
                $val1 = $this->validarConsulta($causas1);
                $datos['cveEstatusCarpeta'] = 1;
                $causas2 = $ReporteCausasFacade->reporteCausas($datos, $paginacion, $accion2);
                $val2 = $this->validarConsulta($causas2);
                $jueces = $this->reporteCargaPrevio($datos, $paginacion, $accion2);
                $val3 = $this->validarConsulta($jueces);

                if ($val1 && $val2 && $val3) {
                    $consulta .= '{"type":"OK","mnj":"Consulta exitosa",';
                    $consulta .= '"data":[' . $causas1 . ',' . $causas2 . ',' . $jueces . ']}';
                } else {
                    $consulta .= '{"type":"NO","mnj":"Sin resultados",';
                    $consulta .= '"data":[' . $causas1 . ',' . $causas2 . ',' . $jueces . ']}';
                }
                $consulta = json_encode($consulta);
            } else if ($accion2 == "ConsultarPromCausasTerJuezCtrl_Indicador") {
                $ReporteCausasFacade = new ReporteCausasFacade();
                $datos['cveEstatusCarpeta'] = 2;
                $causas1 = $ReporteCausasFacade->reporteCausas($datos, $paginacion, $accion2);
                $val1 = $this->validarConsulta($causas1);
                $jueces = $this->reporteCargaPrevio($datos, $paginacion, $accion2);
                $val2 = $this->validarConsulta($jueces);

                if ($val1 && $val2) {
                    $consulta .= '{"type":"OK","mnj":"Consulta exitosa",';
                    $consulta .= '"data":[' . $causas1 . ',' . $jueces . ']}';
                } else {
                    $consulta .= '{"type":"NO","mnj":"Sin resultados",';
                    $consulta .= '"data":[' . $causas1 . ',' . $jueces . ']}';
                }
                //$consulta = json_encode($consulta);
            }

            return $consulta;
        }

        public function validarConsulta($json) {
            $jsonVal = json_decode($json);
            if ($jsonVal->Estatus == "ok") {
                return true;
            } else {
                return false;
            }
        }

        public function reporteCargaPrevio($datos, $paginacion, $accion) {
            $consulta = "";
            if ($accion == "ConsultarCargaJueces_Indicador") {
                $consulta = $this->reporteCarga($datos, $paginacion, $accion);
            } else if ($accion == "ConsultarPromCausasTerJuezCtrl_Indicador") {
                $consulta = $this->reporteCarga($datos, $paginacion, $accion);
            }
            return $consulta;
        }

    }
    $ReporteCargaJuecesInicialFacade = new ReporteCargaJuecesInicialFacade();
    @$accion = $_POST["accion"];

    if ($accion == "ConsultarCargaJueces_ReporteGeneral") {

        @$datos['nivel'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['nivel'], "utf8") : strtoupper($_POST['nivel'])))));
        @$datos['detalles'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['detalles'], "utf8") : strtoupper($_POST['detalles'])))));
        @$datos['cveJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgado'], "utf8") : strtoupper($_POST['cveJuzgado'])))));
        @$datos['cveJuzgadoArray'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgadoArray'], "utf8") : strtoupper($_POST['cveJuzgadoArray'])))));
        @$datos['idJuzgador'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['idJuzgador'], "utf8") : strtoupper($_POST['idJuzgador'])))));
        @$datos['checkProgramada'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkProgramada'], "utf8") : strtoupper($_POST['checkProgramada'])))));
        @$datos['checkPrivada'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkPrivada'], "utf8") : strtoupper($_POST['checkPrivada'])))));
        @$datos['cveCatAudiencia'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveCatAudiencia'], "utf8") : strtoupper($_POST['cveCatAudiencia'])))));
        @$datos['fechaDesde'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['fechaDesde'], "utf8") : strtoupper($_POST['fechaDesde'])))));
        @$datos['fechaHasta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['fechaHasta'], "utf8") : strtoupper($_POST['fechaHasta'])))));
        @$datos['bar'] = $_POST['bar'];
        @$paginacion['cantxPag'] = $_POST['cantxPag'];
        @$paginacion['paginacion'] = $_POST['paginacion'];
        @$paginacion['pag'] = $_POST['pag'];
        @$accion = $_POST["accion"];

        echo $ReporteCargaJuecesInicialFacade->ReporteCarga($datos, $paginacion, $accion);
    }if ($accion == "ConsultarCargaJueces_Reporte") {
        @$datos['nivel'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['nivel'], "utf8") : strtoupper($_POST['nivel'])))));
        @$datos['detalles'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['detalles'], "utf8") : strtoupper($_POST['detalles'])))));
        @$datos['cveJuzgado'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgado'], "utf8") : strtoupper($_POST['cveJuzgado'])))));
        @$datos['cveJuzgadoArray'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveJuzgadoArray'], "utf8") : strtoupper($_POST['cveJuzgadoArray'])))));
        @$datos['idJuzgador'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['idJuzgador'], "utf8") : strtoupper($_POST['idJuzgador'])))));
        @$datos['cveCatAudiencia'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['cveCatAudiencia'], "utf8") : strtoupper($_POST['cveCatAudiencia'])))));
        @$datos['checkProgramada'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkProgramada'], "utf8") : strtoupper($_POST['checkProgramada'])))));
        @$datos['checkPrivada'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['checkPrivada'], "utf8") : strtoupper($_POST['checkPrivada'])))));
        @$datos['fechaDesde'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['fechaDesde'], "utf8") : strtoupper($_POST['fechaDesde'])))));
        @$datos['fechaHasta'] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST['fechaHasta'], "utf8") : strtoupper($_POST['fechaHasta'])))));
        @$datos['bar'] = $_POST['bar'];
        @$paginacion['cantxPag'] = $_POST['cantxPag'];
        @$paginacion['paginacion'] = $_POST['paginacion'];
        @$paginacion['pag'] = $_POST['pag'];
        @$accion = $_POST["accion"];


        $ReporteCargaJuecesInicialFacade->ReporteCarga($datos, $paginacion, $accion);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>