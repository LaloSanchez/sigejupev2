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

    class ReporteduracionpromediojuicioFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteDuracionPromedioJuicioWebService($datos) {
            $paginacion = array();
            $paginacion["pag"] = $datos["pag"];
            $paginacion["cantxPag"] = $datos["cantxPag"];
            $paginacion["paginacion"] = $datos["paginacion"];
            $paginacion["fechaDesde"] = $datos["txtFecInicialBusqueda"];
            $paginacion["fechaHasta"] = $datos["txtFecFinalBusqueda"];
            return $this->reporteDuracionPromedioJuciosPrevio($datos, $paginacion);
        }

        public function reporteDuracionPromedioJuciosPrevio($datos, $paginacion) {
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
            $consulta = $this->reporteDuracionPromedioJuicios($datos, $paginacion);
            return $consulta;
        }

        public function reporteDuracionPromedioJuicios($datos, $paginacion) {
            $sqlIntervalo = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND a.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["fields"] = "count(a.idActuacion) as totalCount,sum(datediff(date_format(a.fechaSentencia,'%Y-%m-%d'),
            date_format(cj.fechaRadicacion,'%Y-%m-%d')))/count(a.idActuacion) as duracionPromedio,
            r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,j.desJuzgado,j.cveJuzgado";
            $params["tables"] = "tblactuaciones a, tblcarpetasjudiciales cj, tbljuzgados j 
            LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
            LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = "a.idReferencia=cj.idCarpetaJudicial AND a.cveTipoActuacion=3
            AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND d.activo='S' AND r.activo='S'
            AND a.cveTipoCarpeta !=7 AND a.cveTipoCarpeta !=8 AND cj.activo='S' AND a.activo='S'";
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
            if ($datos["porMes"] != "") {
                $mesAnio = explode("/", $datos["porMes"]);
                if ($mesAnio[0] != "") {
                    $params["conditions"].= " AND (month(cj.fechaRadicacion)=$mesAnio[0])";
                }
                if ($mesAnio[1] != "") {
                    $params["conditions"].=" AND (year(cj.fechaRadicacion)=$mesAnio[1]) ";
                }
            }
            if ($datos["porIntervaloDuracion"] == "S") {
                $dateDiff = "datediff(date_format(a.fechaSentencia,'%Y-%m-%d'),
                       date_format(cj.fechaRadicacion,'%Y-%m-%d'))";
                $params["fields"] = "CASE WHEN (" . $dateDiff . ")<31 THEN 1 ELSE
                CASE WHEN (" . $dateDiff . ">30 AND " . $dateDiff . "<91) THEN 2 ELSE
                CASE WHEN (" . $dateDiff . ">90 AND " . $dateDiff . "<181) THEN 3 ELSE
                CASE WHEN (" . $dateDiff . ">180 AND " . $dateDiff . "<366) THEN 4 ELSE
                CASE WHEN (" . $dateDiff . ">365 AND " . $dateDiff . "<2191) THEN 5 ELSE
                CASE WHEN (" . $dateDiff . ">2190 AND " . $dateDiff . "<5476) THEN 6 ELSE
                CASE WHEN (" . $dateDiff . ">5475) THEN 7
                END END END END END END END rangoDuracion,count(*) as totalCount,
                a.idActuacion,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,j.desJuzgado,j.cveJuzgado ";
                if ($datos["groups"] != "") {
                    $datos["groups"] = $datos["groups"] . ",rangoDuracion";
                } else {
                    $datos["groups"] = "rangoDuracion";
                }               //rangoDuracion
                $params["orders"] = "totalCount DESC";
            }
            if ($datos["cveIntervaloDuracion"] != "") {
                $params["conditions"].=$this->procesarIntervalo($datos["cveIntervaloDuracion"]);
            }
            if ($sqlIntervalo != "") {
                $params["conditions"].=$sqlIntervalo;
            }
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "a.idActuacion,a.numero,a.anio,tc.desTipoCarpeta,
                r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,a.fechaSentencia,cj.fechaRadicacion,
                j.desJuzgado,j.cveJuzgado,a.fechaRegistro,(datediff(date_format(a.fechaSentencia,'%Y-%m-%d'),
                       date_format(cj.fechaRadicacion,'%Y-%m-%d'))) as duracion";
                $params["tables"].=",tbltiposcarpetas tc";
                $params["conditions"].=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tc.activo='S'";
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
            $dateDiff = "datediff(date_format(a.fechaSentencia,'%Y-%m-%d'),
                       date_format(cj.fechaRadicacion,'%Y-%m-%d'))";
            switch ($num) {
                case 1: return " AND(" . $dateDiff . "<31)";
                case 2: return " AND(" . $dateDiff . ">30 AND " . $dateDiff . "<91)";
                case 3: return " AND(" . $dateDiff . ">90 AND " . $dateDiff . "<181)";
                case 4: return " AND(" . $dateDiff . ">180 AND " . $dateDiff . "<366)";
                case 5: return " AND(" . $dateDiff . ">365 AND " . $dateDiff . "<2191)";
                case 6: return " AND(" . $dateDiff . ">2190 AND " . $dateDiff . "<5476)";
                case 7: return " AND(" . $dateDiff . ">5475)";
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
    $reporteduracionpromediojuicioFacade = new ReporteduracionpromedioJuicioFacade();

    if ($accion == "consultar_duracionJuicio_Reporte") {
        $datos = array();
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["groups"] = $_POST["groups"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["porIntervaloDuracion"] = $_POST["porIntervaloDuracion"];
        @$datos["cveIntervaloDuracion"] = $_POST["cveIntervaloDuracion"];
        echo $reporteduracionpromediojuicioFacade->reporteDuracionPromedioJuciosPrevio($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>