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
    include_once(dirname(__FILE__) . "/../../../tribunal/excel/Classes/PHPExcel.php");

    class ReportemedidasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteMedidasPrevio($datos, $paginacion) {
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
            if ($datos["origen"] == 0) {
                $consulta = $this->reporteMedidas($datos, $paginacion);
            } else {
                if ($datos["origen"] == 1) {//Medidas de proteccion
                    $consulta = $this->reporteMedidasProteccion($datos, $paginacion);
                } else {//medidas cautelares
                    $consulta = $this->reporteMedidasCautelares($datos, $paginacion);
                }
            }
            return $consulta;
        }

        public function reporteMedidasProteccion($datos, $paginacion) {
            $sqlIntervalo = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND mp.fechaInicio >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  mp.fechaInicio <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["orders"] = "totalCount DESC";
            $params["fields"] = " count(mp.idMedidaProteccion) as totalCount,'1' origen,r.cveRegion,r.desRegion,
                        d.cveDistrito,d.desDistrito,j.cveJuzgado,j.desJuzgado";
            $params["tables"] = "tblmedidasprotecciones mp,tblofendidoscarpetas oc,tblcarpetasjudiciales cj,
                tbljuzgados j LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
                LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = "mp.idOfendidoCarpeta=oc.idOfendidoCarpeta AND cj.idCarpetaJudicial=oc.idCarpetaJudicial
                AND mp.activo='S' AND oc.activo='S' AND cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado
                AND j.activo='S' AND d.activo='S' AND r.activo='S'" . $sqlIntervalo;
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "oc.cveTipoPersona,oc.nombre,oc.paterno,oc.materno,oc.nombreMoral,tp.desTipoProteccion as medida,
                j.desJuzgado,d.desDistrito,r.desRegion,tc.desTipoCarpeta,cj.numero,cj.anio,mp.fechaInicio,mp.fechaTermino";
                $params["tables"] .= ",tbltiposcarpetas tc,tbltiposprotecciones tp";
                $params["conditions"].=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tc.activo='S'
                AND tp.cveTipoProteccion=mp.cveTipoProteccion AND tp.activo='S'";
                $datos["groups"] = "";
                $params["orders"] = "oc.nombre,oc.nombreMoral DESC";
            }
            $params["conditions"].= $this->condicionesEnComun($datos);
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.medida) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["orders"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
        }

        public function reporteMedidasCautelares($datos, $paginacion) {
            $sqlIntervalo = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND mc.fechaInicio >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  mc.fechaInicio <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["orders"] = "totalCount DESC";
            $params["fields"] = " count(mc.idMedidaCautelar)as totalCount,'2' origen,r.cveRegion,r.desRegion,
                        d.cveDistrito,d.desDistrito,j.cveJuzgado,j.desJuzgado";
            $params["tables"] = "tblmedidascautelares mc,tblimputadoscarpetas ic,tblcarpetasjudiciales cj,
                tbljuzgados j LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
                LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion)";
            $params["conditions"] = " mc.idImputadoCarpeta=ic.idImputadoCarpeta AND cj.idCarpetaJudicial=ic.idCarpetaJudicial
                AND mc.activo='S' AND ic.activo='S' AND cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado
                AND j.activo='S' AND d.activo='S' AND r.activo='S'" . $sqlIntervalo;
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "ic.cveTipoPersona,ic.nombre,ic.paterno,ic.materno,ic.nombreMoral,tmc.desTipoMedidaCautelar as medida,
                j.desJuzgado,d.desDistrito,r.desRegion,tc.desTipoCarpeta,cj.numero,cj.anio,mc.fechaInicio,mc.fechaTermina as fechaTermino";
                $params["tables"] .=",tbltiposcarpetas tc,tbltiposmedidascautelares tmc";
                $params["conditions"].=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tc.activo='S'
                AND tmc.cveTipoMedidaCautelar=mc.cveTipoMedidaCautelar AND tmc.activo='S'";
                $datos["groups"] = "";
                $params["orders"] = "ic.nombre,ic.nombreMoral DESC";
            }
            $params["conditions"].= $this->condicionesEnComun($datos);
            if (($datos["mCautelar"] == "S") && ($datos["detalles"] != "detalle")) {
                $params["fields"] .=",mc.cveTipoMedidaCautelar";
                $params["tables"] .= ",tbltiposmedidascautelares tmc";
                $params["conditions"] .= " AND tmc.activo='S' AND tmc.cveTipoMedidaCautelar=mc.cveTipoMedidaCautelar";
                if ($datos["groups"] == "") {
                    $datos["groups"] = "mc.cveTipoMedidaCautelar";
                } else {
                    $datos["groups"] .=",mc.cveTipoMedidaCautelar";
                }
            }
            if ($datos["cveTipoMedidaCautelar"] != "") {
                $params["conditions"].=" AND mc.cveTipoMedidaCautelar=" . $datos["cveTipoMedidaCautelar"];
            }
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.medida) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["orders"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
        }

        public function reporteMedidas($datos, $paginacion) {
            $sqlIntervalo = "";
            $sqlIntervalo2 = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND mp.fechaInicio >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                $sqlIntervalo2 = " AND mc.fechaInicio >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  mp.fechaInicio <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                    $sqlIntervalo2.=" AND  mc.fechaInicio <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            $params = array();
            $params["fields"] = " count(mp.idMedidaProteccion) as totalCount,'1' origen";
            $condiciones = $this->condicionesEnComun($datos);
            $params["tables"] = "tblmedidasprotecciones mp,tblofendidoscarpetas oc,tblcarpetasjudiciales cj
            WHERE mp.idOfendidoCarpeta=oc.idOfendidoCarpeta AND cj.idCarpetaJudicial=oc.idCarpetaJudicial
            AND mp.activo='S' AND oc.activo='S' AND cj.activo='S'" . $condiciones . $sqlIntervalo;
            $params["tables"] .=" UNION SELECT count(mc.idMedidaCautelar),'2' origen
            FROM tblmedidascautelares mc,tblimputadoscarpetas ic,tblcarpetasjudiciales cj 
            WHERE mc.idImputadoCarpeta=ic.idImputadoCarpeta AND cj.idCarpetaJudicial=ic.idCarpetaJudicial
                AND mc.activo='S' AND ic.activo='S' AND cj.activo='S'" . $condiciones . $sqlIntervalo2;
            if ($datos["groups"] != "") {
                $params["tables"] .=" GROUP BY " . $datos["groups"] . " ORDER BY totalCount DESC";
            } else {
                $params["tables"] .=" ORDER BY totalCount DESC ";
            }
            if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                $aux = "count(x.totalCount) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.medida) as totalCount";
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                $params["tables"].=") as x";
            }
            $SelectDao = new SelectDAO();
            return $SelectDao->selectDAO($params, null, $paginacion);
        }

        private function condicionesEnComun($datos) {
            $condiciones = "";
            if ($datos["cveRegion"] != "") {
                $condiciones.=" AND r.cveRegion=" . $datos["cveRegion"];
            }
            if ($datos["cveDistrito"] != "") {
                $condiciones.=" AND d.cveDistrito=" . $datos["cveDistrito"];
            }
            if ($datos["cveJuzgado"] != "") {
                $condiciones.=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
            }
            if ($datos["anio"] != "") {
                $condiciones.=" AND cj.anio=" . $datos["anio"];
            }
            if ($datos["porMes"] != "") {
                $mesAnio = explode("/", $datos["porMes"]);
                if ($mesAnio[0] != "") {
                    $condiciones.= " AND (month(cj.fechaRadicacion)=$mesAnio[0])";
                }
                if ($mesAnio[1] != "") {
                    $condiciones.=" AND (year(cj.fechaRadicacion)=$mesAnio[1]) ";
                }
            }
            return $condiciones;
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
    $reportemedidasFacade = new ReportemedidasFacade();

    if ($accion == "consultar_medidas_Reporte") {
        $datos = array();
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["groups"] = $_POST["groups"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["origen"] = $_POST["origen"];
        @$datos["mCautelar"] = $_POST["mCautelar"];
        @$datos["cveTipoMedidaCautelar"] = $_POST["cveTipoMedidaCautelar"];
        echo $reportemedidasFacade->reporteMedidasPrevio($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>