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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    class ReporteduracionpromediosentenciaFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteDuracionPromedioSentenciasPrevio($datos, $paginacion) {
            $consulta = "";
            switch ($datos["nivel"]) {
                case 1:
                    break;
                case 2:
                    $datos["groups"] = "r.cveRegion";
                    break;
                case 3:
                    $datos["groups"] = "d.cveDistrito";
                    break;
                case 4:
                    $datos["groups"] = "j.cveJuzgado";
                    break;
                case 5:
                    break;
            }
            $consulta = $this->reporteDuracionPromedioSentencias($datos, $paginacion);
            return $consulta;
        }

        public function reporteDuracionPromedioSentencias($datos, $paginacion) {
            $sqlIntervalo = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND a.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  a.fecharegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["fields"] = "count(a.idActuacion) as totalCount,
            sum(a.fechaEjecutoria-a.fechaSentencia)/count(a.idActuacion) as duracionPromedio,
            r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,j.desJuzgado,j.cveJuzgado";
            $params["tables"] = "tblactuaciones a, tbltiposcarpetas tc, tbljuzgados j 
            LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
            LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = "cveTipoActuacion=3 AND a.activo='S' AND tc.activo='S' AND j.activo='S'
            AND tc.cveTipoCarpeta=a.cveTipoCarpeta AND j.cveJuzgado=a.cveJuzgado";
            $params["orders"] = "totalCount DESC";
            if ($datos["cveRegion"] != "") {
                $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
            }
            if ($datos["cveDistrito"] != "") {
                $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
            }
            if ($datos["cveJuzgado"] != "") {
                $params["conditions"].=" AND j.cveJuzgado=" . $datos["cveJuzgado"];
            }
            if ($datos["anio"] != "") {
                $params["conditions"].=" AND a.anio=" . $datos["anio"];
            }
            if ($datos["cveTipoAuto"] != "") {
                $params["conditions"].=" AND a.cveTipoAuto=" . $datos["cveTipoAuto"];
            }
            if ($datos["porMes"] != "") {
                $mesAnio = explode("/", $datos["porMes"]);
                if ($mesAnio[0] != "") {
                    $params["conditions"].= " AND (month(a.fechaRegistro)=$mesAnio[0])";
                }
                if ($mesAnio[1] != "") {
                    $params["conditions"].=" AND (year(a.fechaRegistro)=$mesAnio[1]) ";
                }
            }
            if ($datos["porIntervaloDuracion"] == "S") {
                $params["fields"] = "CASE WHEN (a.fechaEjecutoria-a.fechaSentencia)<31 THEN 1 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>30 AND a.fechaEjecutoria-a.fechaSentencia<91) THEN 2 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>90 AND a.fechaEjecutoria-a.fechaSentencia<181) THEN 3 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>180 AND a.fechaEjecutoria-a.fechaSentencia<366) THEN 4 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>365 AND a.fechaEjecutoria-a.fechaSentencia<2191) THEN 5 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>2190 AND a.fechaEjecutoria-a.fechaSentencia<5476) THEN 6 ELSE
                CASE WHEN (a.fechaEjecutoria-a.fechaSentencia>5475) THEN 7
                END END END END END END END rangoDuracion,count(*) as totalCount,
                a.idActuacion,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,j.desJuzgado,j.cveJuzgado ";
                if ($datos["groups"] != "") {
                    $datos["groups"] = $datos["groups"] . ",rangoDuracion";
                } else {
                    $datos["groups"] = "rangoDuracion";
                }
                //$params["orders"]="rangoDuracion";
            }
            if ($datos["cveIntervaloDuracion"] != "") {
                $params["conditions"].=$this->procesarIntervalo($datos["cveIntervaloDuracion"]);
            }
            if (($datos["porSentencia"] == "S") && ($datos["detalles"] == "")) {
                $params["fields"].=",ts.cveTipoSentencia,ts.desTipoSentencia";
                $params["tables"].=",tbltipossentencias ts";
                $params["conditions"].=" AND a.cveTipoSentencia=ts.cveTipoSentencia AND ts.activo='S'";
                if ($datos["groups"] != "") {
                    $datos["groups"] = $datos["groups"] . ",ts.cveTipoSentencia";
                } else {
                    $datos["groups"] = "ts.cveTipoSentencia";
                }
            }
            if ($datos["cveTipoSentencia"] != "") {
                $params["conditions"].=" AND ts.cveTipoSentencia=" . $datos["cveTipoSentencia"];
            }
            if ($sqlIntervalo != "") {
                $params["conditions"].=$sqlIntervalo;
            }
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "a.idActuacion,a.numero,a.anio,tc.desTipoCarpeta,ts.desTipoSentencia,
                r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,a.fechaSentencia,a.fechaEjecutoria,
                j.desJuzgado,j.cveJuzgado,a.fechaRegistro,(a.fechaEjecutoria-a.fechaSentencia) as duracion";
                $params["tables"].=",tbltipossentencias ts";
                $params["conditions"].=" AND ts.cveTipoSentencia=a.cveTipoSentencia AND ts.activo='S'";
                $params["groups"] = "";
                $params["orders"] = "a.anio,a.numero DESC";
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.idActuacion) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["orders"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
        }

        private function procesarIntervalo($num) {
            switch ($num) {
                case 1: return " AND(a.fechaEjecutoria-a.fechaSentencia<31)";
                case 2: return " AND(a.fechaEjecutoria-a.fechaSentencia>30 AND a.fechaEjecutoria-a.fechaSentencia<91)";
                case 3: return " AND(a.fechaEjecutoria-a.fechaSentencia>90 AND a.fechaEjecutoria-a.fechaSentencia<181)";
                case 4: return " AND(a.fechaEjecutoria-a.fechaSentencia>180 AND a.fechaEjecutoria-a.fechaSentencia<366)";
                case 5: return " AND(a.fechaEjecutoria-a.fechaSentencia>365 AND a.fechaEjecutoria-a.fechaSentencia<2191)";
                case 6: return " AND(a.fechaEjecutoria-a.fechaSentencia>2190 AND a.fechaEjecutoria-a.fechaSentencia<5476)";
                case 7: return " AND(a.fechaEjecutoria-a.fechaSentencia>5475)";
            }
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
//----------------------------
    $reporteduracionpromediosentenciaFacade = new ReporteduracionpromediosentenciaFacade();

    if ($accion == "consultar_duracionSentencia_Reporte") {
        $datos = array();
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["groups"] = $_POST["groups"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["cveTipoAuto"] = $_POST["cveTipoAuto"];
        @$datos["porSentencia"] = $_POST["porSentencia"];
        @$datos["cveTipoSentencia"] = $_POST["cveTipoSentencia"];
        @$datos["porIntervaloDuracion"] = $_POST["porIntervaloDuracion"];
        @$datos["cveIntervaloDuracion"] = $_POST["cveIntervaloDuracion"];
        echo $reporteduracionpromediosentenciaFacade->reporteDuracionPromedioSentenciasPrevio($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>