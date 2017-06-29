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

    class ReportebeneficiosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteBeneficiosPrevio($datos, $paginacion) {
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
                    $datos["tipoBeneficio"] = "S";
                    break;
            }
            if ($datos["groups"] != "") {
                if ($datos["tipoBeneficio"] == "S") {
                    $datos["groups"].=",b.cveTipoBeneficioES";
                }
            } else {
                if ($datos["tipoBeneficio"] == "S") {
                    $datos["groups"] = "b.cveTipoBeneficioES";
                }
            }
            $consulta = $this->reporteBeneficios($datos, $paginacion);
            return $consulta;
        }

        public function reporteBeneficios($datos, $paginacion) {
            $sqlIntervalo = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND b.fechaInicio >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND b.fechaInicio <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["orders"] = " totalCount DESC";
            $params["fields"] = "count(b.idBeneficioES) as totalCount,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,
            j.desJuzgado,j.cveJuzgado,b.idBeneficioES";
            $params["tables"] = "tblbeneficioses b,tblactuaciones a,tbljuzgados j LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
            LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = "b.idActuacion=a.idActuacion AND b.activo='S' AND a.activo='S'
            AND j.cveJuzgado=a.cveJuzgado AND d.activo='S' AND j.activo='S' AND r.activo='S'";
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
                    $params["conditions"].= " AND (month(b.fechaInicio)=$mesAnio[0])";
                }
                if ($mesAnio[1] != "") {
                    $params["conditions"].=" AND (year(b.fechaInicio)=$mesAnio[1]) ";
                }
            }
            if ($datos["tipoBeneficio"] == "S") {
                $params["fields"].=",tbe.desTipoBeneficioES";
                $params["tables"].=",tbltiposbeneficioses tbe";
                $params["conditions"].=" AND tbe.cveTipoBeneficioES=b.cveTipoBeneficioES AND tbe.activo='S'";
            }
            if ($datos["cveTipoBeneficio"] != "") {
                $params["conditions"].=" AND b.cveTipoBeneficioES=" . $datos["cveTipoBeneficio"];
            }
            if ($sqlIntervalo != "") {
                $params["conditions"].=$sqlIntervalo;
            }
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "a.idActuacion,a.numero,a.anio,tc.desTipoCarpeta,tbe.desTipoBeneficioES,
                r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,ic.nombre,ic.paterno,ic.materno,ic.nombreMoral,
                j.desJuzgado,j.cveJuzgado,b.fechaInicio,b.fechaTermina,ic.cveTipoPersona";
                $params["tables"].=",tblimputadoscarpetas ic,tbltiposcarpetas tc";
                $params["conditions"].=" AND ic.idImputadoCarpeta=b.idImputadoCarpeta AND ic.activo='S'
                AND tc.cveTipoCarpeta=a.cveTipoCarpeta AND tc.activo='S'";
                $params["groups"] = "";
                $params["orders"] = "a.anio,a.numero DESC";
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.idBeneficioES) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["orders"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
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
    $reportebeneficiosFacade = new ReportebeneficiosFacade();

    if ($accion == "consultar_beneficios_Reporte") {
        $datos = array();
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["groups"] = $_POST["groups"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["tipoBeneficio"] = $_POST["tipoBeneficio"];
        @$datos["cveTipoBeneficio"] = $_POST["cveTipoBeneficio"];
        echo $reportebeneficiosFacade->reporteBeneficiosPrevio($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>