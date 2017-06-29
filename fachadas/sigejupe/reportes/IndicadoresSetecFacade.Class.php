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
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/IndicadoresSetecController.Class.php");

    class IndicadoresSetecFacade {

        public function __construct() {
            
        }

        public function indicadoresSetecWebService($datos) {
            $paginacion = array();
            $paginacion["pag"] = $datos["pag"];
            $paginacion["cantxPag"] = $datos["cantxPag"];
            $paginacion["paginacion"] = $datos["paginacion"];
            $paginacion["fechaDesde"] = $datos["fechaDesde"];
            $paginacion["fechaHasta"] = $datos["fechaHasta"];
            return $this->consultarIndicadoresSetec($datos, $paginacion);
        }

        public function validarIndicadorSeleccionadoSentencia($datos) {
            $datos["idIndicador"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["idIndicador"], "utf8") : strtoupper($datos["idIndicador"]))))));
            $datos["agrupacion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["agrupacion"], "utf8") : strtoupper($datos["agrupacion"]))))));
            $datos["numero"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["numero"], "utf8") : strtoupper($datos["numero"]))))));
            $datos["anio"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["anio"], "utf8") : strtoupper($datos["anio"]))))));
            $datos["mes"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["mes"], "utf8") : strtoupper($datos["mes"]))))));
            $datos["cveJuzgado"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveJuzgado"], "utf8") : strtoupper($datos["cveJuzgado"]))))));
            $datos["cveTipoCarpeta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoCarpeta"], "utf8") : strtoupper($datos["cveTipoCarpeta"]))))));
            $datos["cveRegion"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveRegion"], "utf8") : strtoupper($datos["cveRegion"]))))));
            $datos["cveDistrito"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveDistrito"], "utf8") : strtoupper($datos["cveDistrito"]))))));
            $datos["nivel"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["nivel"], "utf8") : strtoupper($datos["nivel"]))))));
            $datos["cveTipoJuzgado"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoJuzgado"], "utf8") : strtoupper($datos["cveTipoJuzgado"]))))));
            $datos["detalles"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["detalles"], "utf8") : strtoupper($datos["detalles"]))))));
            $datos["cveTipoPersona"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoPersona"], "utf8") : strtoupper($datos["cveTipoPersona"]))))));
            $datos["cveTipoParte"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["cveTipoParte"], "utf8") : strtoupper($datos["cveTipoParte"]))))));
            $datos["idOfendidoCarpeta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["idOfendidoCarpeta"], "utf8") : strtoupper($datos["idOfendidoCarpeta"]))))));
            $datos["porMes"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($datos["porMes"], "utf8") : strtoupper($datos["porMes"]))))));
            return $datos;
        }

        public function consultarIndicadoresSetec($datos, $paginacion = null) {
            $datos = $this->validarIndicadorSeleccionadoSentencia($datos);
            $indicadoresSetecController = new IndicadoresSetecController();
            $respuesta = $indicadoresSetecController->consultarIndicadoresSetec($datos, $paginacion);
            if ($respuesta != "") {
                return $respuesta;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE ENCONTRO EL INDICADOR"));
        }

    }

    @$accion = $_POST["accion"];

//------------Param Paginaci�n
    $param = array();
    @$param["pag"] = $_POST['pag'];
    $param["pag"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["pag"], "utf8") : strtoupper($param["pag"]))))));
    @$param["cantxPag"] = $_POST['cantxPag'];
    $param["cantxPag"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["cantxPag"], "utf8") : strtoupper($param["cantxPag"]))))));
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    $param["fechaDesde"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["fechaDesde"], "utf8") : strtoupper($param["fechaDesde"]))))));
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    $param["fechaHasta"] = (strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($param["fechaHasta"], "utf8") : strtoupper($param["fechaHasta"]))))));
//----------------------------

    $indicadoresSetecFacade = new IndicadoresSetecFacade();

    if ($accion == "consultar_indicador") {
        $datos = array();
        @$datos["idIndicador"] = $_POST["idIndicador"];
        @$datos["agrupacion"] = $_POST["agrupacion"];
        @$datos["numero"] = $_POST["numero"];
        @$datos["mes"] = $_POST["mes"];
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["porMes"] = $_POST["p�rMes"];
        @$datos["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["cveTipoPersona"] = $_POST["cveTipoPersona"];
        @$datos["cveTipoParte"] = $_POST['cmbTipoParteMoral'];
        @$datos["idOfendidoCarpeta"] = $_POST["idOfendidoCarpeta"];
        echo $indicadoresSetecFacade->consultarIndicadoresSetec($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>