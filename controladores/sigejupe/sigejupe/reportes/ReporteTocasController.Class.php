<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//Tipos Carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class ReporteTocasController {

    private $proveedor;

    public function __construct() {
        
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    public function reporteTocasPrevio($tocasDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                if ($datos["cveConclusion"]) {
                    $datos["groups"] = "c.cveConclusion";
                } else {
                    $datos["groups"] = "";
                }
                break;
            case 2:
                if ($datos["cveConclusion"]) {
                    $datos["groups"] = "r.desRegion,c.cveConclusion";
                } else {
                    $datos["groups"] = "r.desRegion";
                }
                break;
            case 3:
                if ($datos["cveConclusion"]) {
                    $datos["groups"] = "d.desDistrito,c.cveConclusion";
                } else {
                    $datos["groups"] = "d.desDistrito";
                }
                break;
            case 4:
                if ($datos["cveConclusion"]) {
                    $datos["groups"] = "j.desJuzgado,c.cveConclusion";
                } else {
                    $datos["groups"] = "j.desJuzgado";
                }
                break;
            case 5:
                $datos["groups"] = "cj.idCarpetaJudicial";
                break;
        }
        $consulta = $this->reporteTocas($tocasDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteTocas($tocasDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(DISTINCT (cj.idCarpetaJudicial)) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"]==5) {
            $params["fields"] = "";
            $params["orders"] = "cj.anio DESC,cj.numero ASC";
        }
        $params["fields"] .= "cj.idCarpetaJudicial,cj.numero,cj.anio,cj.fechaRadicacion,
            ec.cveEstatusCarpeta,ec.desEstatusCarpeta,
            tc.cveTipoCarpeta,tc.desTipoCarpeta, 
            tj.cveTipoJuzgado,tj.desTipoJuzgado,
            j.cveJuzgado,j.desJuzgado,
            d.cveDistrito,d.desDistrito,r.cveRegion,r.desRegion";
        $params["tables"] = "tblcarpetasjudiciales cj 
            INNER JOIN tbltiposcarpetas tc ON cj.cveTipoCarpeta = tc.cveTipoCarpeta
            INNER JOIN tblestatuscarpetas ec ON cj.cveEstatusCarpeta=ec.cveEstatusCarpeta
            INNER JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado 
            INNER JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado 
            INNER JOIN tbldistritos d ON j.cveDistrito = d.cveDistrito 
            INNER JOIN tblregiones r ON j.cveRegion = r.cveRegion ";
        $params["conditions"] = "cj.cveTipoCarpeta=6 AND cj.activo='S' AND tc.activo='S' 
            AND ec.activo='S' AND j.activo='S' AND tj.activo='S' AND d.activo='S' AND r.activo='S'";
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["numero"] != "") {
            $params["conditions"].=" AND cj.numero=" . $datos["numero"];
        }
        if ($datos["idCarpetaJudicial"] != "") {
            $params["conditions"].=" AND cj.idCarpetaJudicial=" . $datos["idCarpetaJudicial"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND cj.anio=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(cj.fechaRadicacion)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(cj.fechaRadicacion)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveEstatusCarpeta"] != 0) {
            $params["conditions"].=" AND ec.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
        }
        if ($datos["cveConclusion"] != 0) {
            $params["fields"] .= ",c.cveConclusion,c.desConclusion";
            $params["tables"] .= " INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial "
                    . "INNER JOIN tblimputadoscarpetasconclusiones icc ON ic.idImputadoCarpeta=icc.idImputadoCarpeta "
                    . "INNER JOIN tblconclusiones c ON icc.cveConclusion=c.cveConclusion";
            $params["conditions"].=" AND ic.activo='S' AND icc.activo='S' AND c.activo='S' AND c.cveConclusion=" . $datos["cveConclusion"];
        }
        if ($datos["cveConclusion"] == 0 && $datos["filtroTC"] == true) {
            $params["fields"] .= ",c.cveConclusion,c.desConclusion";
            $params["tables"] .= " INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial "
                    . "INNER JOIN tblimputadoscarpetasconclusiones icc ON ic.idImputadoCarpeta=icc.idImputadoCarpeta "
                    . "INNER JOIN tblconclusiones c ON icc.cveConclusion=c.cveConclusion";
            $params["conditions"].=" AND ic.activo='S' AND icc.activo='S' AND c.activo='S'";
        }
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idCarpetaJudicial) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
