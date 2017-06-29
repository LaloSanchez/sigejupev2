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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelaciones/RemisionapelacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

//inclusiones para impresion de acuse remision
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospartes/TipospartesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospartes/TipospartesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposrecursos/TiposrecursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposrecursos/TiposrecursosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposefectos/TiposefectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposefectos/TiposefectosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposapelantes/TiposapelantesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/catresolucionescombatidas/CatresolucionescombatidasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/catresolucionescombatidas/CatresolucionescombatidasDTO.Class.php");

//terminan las inclusiones de acuse

class RemisionapelacionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRemisionapelaciones($RemisionapelacionesDto) {
        $RemisionapelacionesDto->setidRemisionApelacion(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getidRemisionApelacion()))));
        $RemisionapelacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getidActuacion()))));
        $RemisionapelacionesDto->setidOficio(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getidOficio()))));
        $RemisionapelacionesDto->setidResolucionCombatida(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getidResolucionCombatida()))));
        $RemisionapelacionesDto->setcveRecurso(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getcveRecurso()))));
        $RemisionapelacionesDto->setcveEfecto(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getcveEfecto()))));
        $RemisionapelacionesDto->setagravios(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getagravios()))));
        $RemisionapelacionesDto->setfecCorreTraslado(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfecCorreTraslado()))));
        $RemisionapelacionesDto->setfecInterponeRecurso(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfecInterponeRecurso()))));
        $RemisionapelacionesDto->setfecNotificaSenAut(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfecNotificaSenAut()))));
        $RemisionapelacionesDto->setfecAdhesion(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfecAdhesion()))));
        $RemisionapelacionesDto->setemplazamiento(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getemplazamiento()))));
        $RemisionapelacionesDto->setcveSentido(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getcveSentido()))));
        $RemisionapelacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getactivo()))));
        $RemisionapelacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfechaRegistro()))));
        $RemisionapelacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($RemisionapelacionesDto->getfechaActualizacion()))));
        return $RemisionapelacionesDto;
    }

    public function selectRemisionapelaciones($RemisionapelacionesDto, $proveedor = null) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesDao = new RemisionapelacionesDAO();
        $RemisionapelacionesDto = $RemisionapelacionesDao->selectRemisionapelaciones($RemisionapelacionesDto, $proveedor);
        return $RemisionapelacionesDto;
    }

    public function consultarRemisionapelaciones($params, $paginacion, $proveedor = null) {
        //$RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $SelectDao = new SelectDAO();
        $condicion = "";
        $campos = "";
        $tabla = "";
        $json = "";
        $cont = "";
        $sqlIntervalo = "";
        if ($params['cveJuzgado'] != "0") {
            $condicion .= " and a.cveJuzgado=" . $params['cveJuzgado'];
        }
        if ($params['cveTipoCarpeta'] != "") {
            $condicion .= " and a.cveTipoCarpeta=" . $params['cveTipoCarpeta'];
        }
        if ($params['numero'] != "") {
            $condicion .= " and a.numero=" . $params['numero'];
        }
        if ($params['anio'] != "") {
            $condicion .= " and a.anio=" . $params['anio'];
        }
        if ($params['anio'] == "" && $params['numero'] == "" && $params['cveTipoCarpeta'] == "") {
            if ($params['fechaInicial'] != "" && $params['fechaFinal'] != "") {
                $fechaInicio = explode("/", $params["fechaInicial"]);
                $sqlIntervalo = " AND a.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($params["fechaFinal"] != "") {
                    $fechaFinal = explode("/", $params["fechaFinal"]);
                    $sqlIntervalo.=" AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
        }

        $remisionCausa = "";
        $remisionToca = "";
        $params["fields"] = "ra.idActuacionCopia idActuacionCopia, a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion . $sqlIntervalo;
        $params["orders"] = " ra.idRemisionApelacion desc ";
        $remisionCausa = $SelectDao->selectDAO($params, null, $paginacion);
        $remisionCausaAux = json_decode($remisionCausa);

        $arrayRepetidos = [];
        if ($remisionCausaAux->Estatus != "Fail") {
            $params["orders"] = "";
            if ($remisionCausaAux->mnj != "Sin resultados") {
                for ($i = 0; $i <= ($remisionCausaAux->totalCount) - 1; $i++) {

//                    $params["fields"] = "idCarpetaPadre";
//                    $params["tables"] = "tblantecedescarpetas ac" . $tabla;
//                    $params["conditions"] = " ac.activo ='S'and idCarpetaHija=" . $remisionTocaAux->resultados[$i]->idReferencia;
//                    $carpetaPadre = $SelectDao->selectDAO($params, null, false);
//                    $carpetaPadreAux = json_decode($carpetaPadre);
//                    for ($j = 0; $j <= ($carpetaPadreAux->totalCount) - 1; $j++) {

                    $condicion2 = " and ra.idRemisionApelacion=" . $remisionCausaAux->resultados[$i]->idActuacionCopia;
                    $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,ra.idRemisionApelacion idRemisionApelacion,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                    $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                    $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'  and a.cveTipoCarpeta = 6" . $condicion2;
                    //var_dump($params["conditions"]);
                    $remisionToca = $SelectDao->selectDAO($params);
                    $remisionTocaAux = json_decode($remisionToca);
                    if ($remisionCausaAux->totalCount > 0) {
                        $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                        $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                        $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[0]->idReferencia;
                        $apelante = $SelectDao->selectDAO($params, null, false);
                        $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                        $params["tables"] = "tblremisionapelacionesimputados rai";
                        $params["conditions"] = "rai.idRemisionApelacion=" . $remisionCausaAux->resultados[$i]->idRemisionApelacion;
                        $impofedel = $SelectDao->selectDAO($params, null, false);
                        $impofedelAux = json_decode($impofedel);
                        $apelanteAux = json_decode($apelante);
                    }
                    if ($json != "") {
                        if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
//                                for ($w = 0; $w < $remisionCausaAux->totalCount; $w++) {
//                                    if ($remisionCausaAux->totalCount < 2) {
//                                        if (true) {
//                                            $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[$w]) . "]";
//                                        } else {
//                                            $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";
//                                        }
//                                    } else {
//                                        $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";
//                                    }
//                                }
                            $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[$i]) . "]";
                            $arrayRepetidos[] = $remisionCausaAux->resultados[$i]->numeroRemision;
                            $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";

                            if ($impofedelAux->totalCount > 0) {

                                if ($apelanteAux->totalCount > 0) {
                                    $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                } else {
                                    $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                }
                            }
                            if ($apelanteAux->totalCount > 0) {
                                $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                            }
                            $cont++;
                        }
                    } else {
                        if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                            $json .= '{"causa":[' . json_encode($remisionCausaAux->resultados[$i]) . "]";

                            $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";
                            if ($impofedelAux->totalCount > 0) {

                                if ($apelanteAux->totalCount > 0) {
                                    $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                } else {
                                    $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                }
                            }

                            if ($apelanteAux->totalCount > 0) {

                                $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                            }
                            $cont++;
                        }
                    }
//                    }
                }
            }
        }
        if ($remisionCausa != "" && $remisionToca != "") {
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"' . $cont . '",';
            $tmp .= '"mnj":"Sin resultados a mostrar",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"Sin resultados"';
            $tmp .= "}";
        }


        return $tmp; //var_dump($apelanteAux->resultados);
    }

    public function obtenerPaginas($params, $paginacion, $proveedor = null) {
        //$RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $SelectDao = new SelectDAO();
        $condicion = "";
        $campos = "";
        $tabla = "";
        $json = "";
        $cont = "";
        $sqlIntervalo = "";
        $toca = $params['toca'];
        if ($params['cveJuzgado'] != "0") {
            $condicion .= " and a.cveJuzgado=" . $params['cveJuzgado'];
        }
        if ($params['cveTipoCarpeta'] != "") {
            $condicion .= " and a.cveTipoCarpeta=" . $params['cveTipoCarpeta'];
        }
        if ($params['numero'] != "") {
            $condicion .= " and a.numero=" . $params['numero'];
        }
        if ($params['anio'] != "") {
            $condicion .= " and a.anio=" . $params['anio'];
        }
if ($params['anio'] == "" && $params['numero'] == "" && $params['cveTipoCarpeta'] == "") {        if ($params['fechaInicial'] != "" && $params['fechaFinal'] != "") {
            $fechaInicio = explode("/", $params["fechaInicial"]);
            $sqlIntervalo = " AND a.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($params["fechaFinal"] != "") {
                $fechaFinal = explode("/", $params["fechaFinal"]);
                $sqlIntervalo.=" AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
}

//        if($params['variabl']!="" && $params['fechaFinal']!=""){
//            $campos .= ",campos";
//            $tabla .= ", tblapelantescarpetas ac";
//            $condicion .= " and cj.idCarpetaJudicial=ac.idCarpetaJudicial and ac.activo='S'";
//        }
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        if ($toca == "") {

            $params["fields"] = "ra.idActuacionCopia idActuacionCopia,a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
            $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
            $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S' and a.cveTipoCarpeta < 6" . $condicion . $sqlIntervalo;
            $remisionCausa = $SelectDao->selectDAO($params, null, false);
            $remisionAux = json_decode($remisionCausa);
            if ($remisionAux->Estatus != "Fail") {
                if ($remisionAux->Estatus != "Fail") {
                    if ($remisionAux->mnj != "Sin resultados") {
                        for ($i = 0; $i <= ($remisionAux->totalCount) - 1; $i++) {
//                            $params["fields"] = "idCarpetaHija";
//                            $params["tables"] = "tblantecedescarpetas ac" . $tabla;
//                            $params["conditions"] = " ac.activo ='S' and cveTipoCarpeta=6 and idCarpetaPadre=" . $remisionAux->resultados[$i]->idReferencia;
//                            $carpetaPadre = $SelectDao->selectDAO($params, null, false);
//                            $carpetaPadreAux = json_decode($carpetaPadre);
//                            for ($j = 0; $j <= ($carpetaPadreAux->totalCount) - 1; $j++) {
//                                $condicion2 = " and a.idReferencia=" . $carpetaPadreAux->resultados[$j]->idCarpetaHija;
                            $condicion2 = " and ra.idRemisionApelacion=" . $remisionAux->resultados[$i]->idActuacionCopia;
                            $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,ra.idRemisionApelacion idRemisionApelacion,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                            $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                            $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S' and a.cveTipoCarpeta = 6" . $condicion2;
//$params["orders"] = "a.numActuacion asc";
                            $remisionToca = $SelectDao->selectDAO($params, null, false);
                            $remisionTocaAux = json_decode($remisionToca);

                            if ($remisionTocaAux->totalCount > 0) {
                                $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                                $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                                $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionAux->resultados[$i]->idReferencia;
                                $apelante = $SelectDao->selectDAO($params, null, false);
                                $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                                $params["tables"] = "tblremisionapelacionesimputados rai";
                                $params["conditions"] = "rai.idRemisionApelacion=" . $remisionTocaAux->resultados[0]->idRemisionApelacion;
                                $impofedel = $SelectDao->selectDAO($params, null, false);
                                $impofedelAux = json_decode($impofedel);
                                $apelanteAux = json_decode($apelante);
                            }
                            if ($json != "") {
                                if ($remisionTocaAux->totalCount > 0 && $remisionAux->totalCount > 0) {
                                    $json .= ',{"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";
                                    $arrayRepetidos[] = $remisionTocaAux->resultados[0]->numeroRemision;
                                    $json .= ',"causa":[' . json_encode($remisionAux->resultados[$i]) . "]";

                                    if ($impofedelAux->totalCount > 0) {

                                        if ($apelanteAux->totalCount > 0) {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                        } else {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                        }
                                    }
                                    if ($apelanteAux->totalCount > 0) {
                                        $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                    }
                                    $cont++;
                                }
                            } else {
                                if ($remisionTocaAux->totalCount > 0 && $remisionAux->totalCount > 0) {
                                    $json .= '{"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";

                                    $json .= ',"causa":[' . json_encode($remisionAux->resultados[$i]) . "]";
                                    if ($impofedelAux->totalCount > 0) {

                                        if ($apelanteAux->totalCount > 0) {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                        } else {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                        }
                                    }

                                    if ($apelanteAux->totalCount > 0) {

                                        $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                    }
                                    $cont++;
                                }
                            }
                        }
//                        }
                        //$remisionCausaAux->totalCount;
                        $Pages = (int) $cont / $paginacion["cantxPag"];
                        $restoPages = $cont % $paginacion["cantxPag"];

                        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

                        $json = "";
                        $json .= '{"type":"OK",';
                        $json .= '"totalCount":"' . $cont . '",';

                        $json .= '"data":[';
                        $x = 1;

                        if ($totPages > 0) {
                            for ($index = 1; $index <= $totPages; $index++) {

                                $json .= "{";
                                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                                $json .= "}";
                                $x++;
                                if ($x <= ($totPages )) {
                                    $json .= ",";
                                }
                            }
                            $json .= "],";
                            $json .= '"pagina":{"total":""},';
                            $json .= '"total":"' . ($index - 1) . '"';
                            $json .= "}";
                        } else {
                            $json .= "]}";
                        }
                        return $json;
                    }
                } else {
                    return "";
                }
            } else {
                return "";
            }
        } else {
            $params["fields"] = "a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
            $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
            $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S' and a.cveTipoCarpeta = 6" . $condicion . $sqlIntervalo;

            $remisionToca = $SelectDao->selectDAO($params, null, false);
            $remisionAux = json_decode($remisionToca);
            if ($remisionAux->Estatus != "Fail") {
                if ($remisionAux->mnj != "Sin resultados") {
                    for ($i = 0; $i <= ($remisionAux->totalCount) - 1; $i++) {
                        $params["fields"] = "idCarpetaPadre";
                        $params["tables"] = "tblantecedescarpetas ac" . $tabla;
                        $params["conditions"] = " ac.activo ='S'and idCarpetaHija=" . $remisionAux->resultados[$i]->idReferencia;
                        $carpetaPadre = $SelectDao->selectDAO($params, null, false);
                        $carpetaPadreAux = json_decode($carpetaPadre);

                        for ($j = 0; $j <= ($carpetaPadreAux->totalCount) - 1; $j++) {
                            $condicion = " and a.idReferencia=" . $carpetaPadreAux->resultados[$j]->idCarpetaPadre;
                            $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                            $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                            $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                            $remisionCausa = $SelectDao->selectDAO($params, null, false);
                            $remisionCausaAux = json_decode($remisionCausa);
                            $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                            $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                            $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionAux->resultados[$i]->idReferencia;
                            $apelante = $SelectDao->selectDAO($params, null, false);
                            $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                            $params["tables"] = "tblremisionapelacionesimputados rai";
                            $params["conditions"] = "rai.idRemisionApelacion=" . $remisionAux->resultados[$i]->idRemisionApelacion;
                            $impofedel = $SelectDao->selectDAO($params, null, false);
                            $impofedelAux = json_decode($impofedel);
                            $apelanteAux = json_decode($apelante);

                            if ($json != "") {
                                if ($remisionCausaAux->totalCount > 0 && $remisionAux->totalCount > 0) {
                                    $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                                    $json .= ',"toca":[' . json_encode($remisionAux->resultados[$i]) . "]";

                                    if ($impofedelAux->totalCount > 0) {

                                        if ($apelanteAux->totalCount > 0) {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                        } else {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                        }
                                    }
                                    if ($apelanteAux->totalCount > 0) {
                                        $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                    }
                                }
                            } else {
                                if ($remisionCausaAux->totalCount > 0 && $remisionAux->totalCount > 0) {
                                    $json .= '{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                                    $json .= ',"toca":[' . json_encode($remisionAux->resultados[$i]) . "]";
                                    if ($impofedelAux->totalCount > 0) {

                                        if ($apelanteAux->totalCount > 0) {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                        } else {
                                            $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                        }
                                    }

                                    if ($apelanteAux->totalCount > 0) {

                                        $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                    }
                                }
                            }
                            $cont++;
                        }
                    }

                    $Pages = (int) $cont / $paginacion["cantxPag"];
                    $restoPages = $cont % $paginacion["cantxPag"];

                    $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

                    $json = "";
                    $json .= '{"type":"OK",';
                    $json .= '"totalCount":"' . $cont . '",';

                    $json .= '"data":[';
                    $x = 1;

                    if ($totPages > 0) {
                        for ($index = 1; $index <= $totPages; $index++) {

                            $json .= "{";
                            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                            $json .= "}";
                            $x++;
                            if ($x <= ($totPages )) {
                                $json .= ",";
                            }
                        }
                        $json .= "],";
                        $json .= '"pagina":{"total":""},';
                        $json .= '"total":"' . ($index - 1) . '"';
                        $json .= "}";
                    } else {
                        $json .= "]}";
                    }
                    return $json;
                } else {
                    return "";
                }
            } else {
                return "";
            }
        }
    }

    public function buscarActuacionRemision($params, $paginacion, $proveedor = null) {
        //$RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $regresar = "true";
        $SelectDao = new SelectDAO();
        $condicion = "";
        $campos = "";
        $tabla = "";
        $json = "";
        $cont = "";
        if ($params["idActuacion"] != "") {
            $condicion .= " and ra.idResolucionCombatida =" . $params["idActuacion"];
        } else if ($params["idActuacionCarpeta"] != "") {
            $condicion .= " and ra.idResolucionesCarpetasCombatidas =" . $params["idActuacionCarpeta"];
        }
        $params["fields"] = "idReferencia ";
        $params["tables"] = "tblactuaciones a, tblremisionapelaciones ra ";
        $params["conditions"] = "ra.idActuacion=a.idActuacion and a.activo = 'S' and ra.activo='S' and a.cveTipoActuacion=32 " . $condicion;
        $remisiones = $SelectDao->selectDAO($params, null, false);
        $remisionesAux = json_decode($remisiones);
        if ($remisionesAux->Estatus != "Fail") {
            if ($remisionesAux->mnj != "Sin resultados") {
                $regresar = "false";
            }
        }

        return $regresar;
    }

    public function consultarRemisionapelacionesToca($params, $paginacion, $proveedor = null) {
        //$RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $SelectDao = new SelectDAO();
        $condicion = "";
        $campos = "";
        $tabla = "";
        $json = "";
        $cont = "";
        $sqlIntervalo = "";
        if ($params['cveJuzgado'] != "0") {
            $condicion .= " and a.cveJuzgado=" . $params['cveJuzgado'];
        }
        if ($params['cveTipoCarpeta'] != "") {
            $condicion .= " and a.cveTipoCarpeta=" . $params['cveTipoCarpeta'];
        }
        if ($params['numero'] != "") {
            $condicion .= " and a.numero=" . $params['numero'];
        }

        if ($params['anio'] != "") {
            $condicion .= " and a.anio=" . $params['anio'];
        }
        if ($params['anio'] == "" && $params['numero'] == "" && $params['cveTipoCarpeta'] == "") {    
        if ($params['fechaInicial'] != "" && $params['fechaFinal'] != "") {
            $fechaInicio = explode("/", $params["fechaInicial"]);
            $sqlIntervalo = " AND a.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($params["fechaFinal"] != "") {
                $fechaFinal = explode("/", $params["fechaFinal"]);
                $sqlIntervalo.=" AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        }
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $remisionCausa = "";
        $remisionToca = "";
        $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'  and a.cveTipoCarpeta = 6" . $condicion . $sqlIntervalo;
        $params["orders"] = " ra.idRemisionApelacion desc ";
        //var_dump($params["conditions"]);
        $remisionToca = $SelectDao->selectDAO($params, null, $paginacion);

        $remisionTocaAux = json_decode($remisionToca);
        //var_dump($remisionTocaAux->mnj != "Sin resultados");
        if ($remisionTocaAux->Estatus != "Fail") {
            $params["orders"] = "";
            if ($remisionTocaAux->mnj != "Sin resultados") {
                for ($i = 0; $i <= ($remisionTocaAux->totalCount) - 1; $i++) {
                    $params["fields"] = "idCarpetaPadre";
                    $params["tables"] = "tblantecedescarpetas ac" . $tabla;
                    $params["conditions"] = " ac.activo ='S'and idCarpetaHija=" . $remisionTocaAux->resultados[$i]->idReferencia;
                    $carpetaPadre = $SelectDao->selectDAO($params, null, false);
                    $carpetaPadreAux = json_decode($carpetaPadre);
                    for ($j = 0; $j <= ($carpetaPadreAux->totalCount) - 1; $j++) {
                        $condicion = " and a.idReferencia=" . $carpetaPadreAux->resultados[$j]->idCarpetaPadre;

                        $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                        $remisionCausa = $SelectDao->selectDAO($params, null, false);
                        $remisionCausaAux = json_decode($remisionCausa);
                        $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                        $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                        $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[$i]->idReferencia;
                        $apelante = $SelectDao->selectDAO($params, null, false);
                        $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                        $params["tables"] = "tblremisionapelacionesimputados rai";
                        $params["conditions"] = "rai.idRemisionApelacion=" . $remisionTocaAux->resultados[$i]->idRemisionApelacion;
                        $impofedel = $SelectDao->selectDAO($params, null, false);
                        $impofedelAux = json_decode($impofedel);
                        $apelanteAux = json_decode($apelante);
                        if ($json != "") {
                            if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                                $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                                $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[$i]) . "]";

                                if ($impofedelAux->totalCount > 0) {

                                    if ($apelanteAux->totalCount > 0) {
                                        $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                    } else {
                                        $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                    }
                                }
                                if ($apelanteAux->totalCount > 0) {
                                    $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                }
                            }
                        } else {
                            if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                                $json .= '{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                                $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[$i]) . "]";
                                if ($impofedelAux->totalCount > 0) {

                                    if ($apelanteAux->totalCount > 0) {
                                        $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                                    } else {
                                        $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                                    }
                                }

                                if ($apelanteAux->totalCount > 0) {

                                    $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                                }
                            }
                        }
                        $cont++;
                    }
                }
            }
        }
        if ($remisionCausa != "" && $remisionToca != "") {
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"' . $cont . '",';
            $tmp .= '"mnj":"Sin resultados a mostrar",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"Sin resultados"';
            $tmp .= "}";
        }

        return $tmp; //var_dump($apelanteAux->resultados);
    }

    public function obtenerRemisionTocaArbol($param) {
        $paginacion = null;
        $SelectDao = new SelectDAO();
        $idActuacion = $param["idActuacion"];
        $condicion = " and a.idActuacion=" . $idActuacion;
        $remisionCausa = "";
        $campos = "";
        $tabla = "";
        $json = "";
        $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'  and a.cveTipoCarpeta = 6" . $condicion;
        //var_dump($params["conditions"]);
        $remisionToca = $SelectDao->selectDAO($params, null, $paginacion);
        $remisionTocaAux = json_decode($remisionToca);
        //var_dump($remisionTocaAux);
        if ($remisionTocaAux->Estatus != "Fail") {
            if ($remisionTocaAux->mnj != "Sin resultados") {
                $params["fields"] = "idCarpetaPadre";
                $params["tables"] = "tblantecedescarpetas ac" . $tabla;
                $params["conditions"] = " ac.activo ='S'and idCarpetaHija=" . $remisionTocaAux->resultados[0]->idReferencia;
                $carpetaPadre = $SelectDao->selectDAO($params, null, $paginacion);
                $carpetaPadreAux = json_decode($carpetaPadre);
                $condicion = " and a.idReferencia=" . $carpetaPadreAux->resultados[0]->idCarpetaPadre;

                $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                $remisionCausa = $SelectDao->selectDAO($params, null, $paginacion);
                $remisionCausaAux = json_decode($remisionCausa);
                $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[0]->idReferencia;
                $apelante = $SelectDao->selectDAO($params, null, $paginacion);
                $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                $params["tables"] = "tblremisionapelacionesimputados rai";
                $params["conditions"] = "rai.idRemisionApelacion=" . $remisionTocaAux->resultados[0]->idRemisionApelacion;
                $impofedel = $SelectDao->selectDAO($params, null, $paginacion);
                $impofedelAux = json_decode($impofedel);
                $apelanteAux = json_decode($apelante);
                if ($json != "") {
                    if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                        $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                        $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";

                        if ($impofedelAux->totalCount > 0) {

                            if ($apelanteAux->totalCount > 0) {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                            } else {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                            }
                        }
                        if ($apelanteAux->totalCount > 0) {
                            $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                        }
                    }
                } else {
                    if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                        $json .= '{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                        $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";
                        if ($impofedelAux->totalCount > 0) {

                            if ($apelanteAux->totalCount > 0) {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                            } else {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                            }
                        }

                        if ($apelanteAux->totalCount > 0) {

                            $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                        }
                    }
                }
            }
        }
        if ($remisionCausa != "" && $remisionToca != "") {
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"1",';
            $tmp .= '"mnj":"Sin resultados a mostrar",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"Sin resultados"';
            $tmp .= "}";
        }

        return $tmp;
    }

    public function obtenerRemisionCausaArbol($param) {
        $paginacion = null;
        $SelectDao = new SelectDAO();
        $idActuacion = $param["idActuacion"];
        $condicion = " and a.idActuacion=" . $idActuacion;
        $remisionCausa = "";
        $campos = "";
        $tabla = "";
//        $condicion = "";
        $json = "";
        $params["fields"] = "ra.idActuacionCopia as idActuacionCopia,a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S' " . $condicion;
        //var_dump($params["conditions"]);
        $remisionCausa = $SelectDao->selectDAO($params, null, $paginacion);
         $remisionCausaAux = json_decode($remisionCausa);
        //var_dump($remisionTocaAux->mnj != "Sin resultados");
        if ($remisionCausaAux->Estatus != "Fail") {
            if ($remisionCausaAux->mnj != "Sin resultados") {
//                $params["fields"] = "idCarpetaHija";
//                $params["tables"] = "tblantecedescarpetas ac" . $tabla;
//                $params["conditions"] = " ac.activo ='S' and idCarpetaPadre=" . $remisionCausaAux->resultados[0]->idReferencia;
//                $carpetaHija = $SelectDao->selectDAO($params, null, $paginacion);
//                $carpetaHijaAux = json_decode($carpetaHija);
//                $condicion = " and a.idReferencia=" . $carpetaHijaAux->resultados[0]->idCarpetaHija;
                $condicion = " and ra.idRemisionApelacion=" . $remisionCausaAux->resultados[0]->idActuacionCopia;

                $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida" . $campos;
                $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra" . $tabla;
                $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                $remisionToca = $SelectDao->selectDAO($params, null, $paginacion);
                $remisionTocaAux = json_decode($remisionToca);
                $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo" . $campos;
                $params["tables"] = "tblapelantescarpetas ac" . $tabla;
                $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[0]->idReferencia;
                $apelante = $SelectDao->selectDAO($params, null, $paginacion);
                $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                $params["tables"] = "tblremisionapelacionesimputados rai";
                $params["conditions"] = "rai.idRemisionApelacion=" . $remisionCausaAux->resultados[0]->idRemisionApelacion;
                $impofedel = $SelectDao->selectDAO($params, null, $paginacion);
                $impofedelAux = json_decode($impofedel);
                $apelanteAux = json_decode($apelante);
                if ($json != "") {
                    if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                        $json .= ',{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                        $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";

                        if ($impofedelAux->totalCount > 0) {

                            if ($apelanteAux->totalCount > 0) {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                            } else {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                            }
                        }
                        if ($apelanteAux->totalCount > 0) {
                            $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                        }
                    }
                } else {
                    if ($remisionCausaAux->totalCount > 0 && $remisionTocaAux->totalCount > 0) {
                        $json .= '{"causa":[' . json_encode($remisionCausaAux->resultados[0]) . "]";

                        $json .= ',"toca":[' . json_encode($remisionTocaAux->resultados[0]) . "]";
                        if ($impofedelAux->totalCount > 0) {

                            if ($apelanteAux->totalCount > 0) {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]";
                            } else {
                                $json .= ',"impofedel":[' . json_encode($impofedelAux) . "]}";
                            }
                        }

                        if ($apelanteAux->totalCount > 0) {

                            $json .= ',"apelante":[' . json_encode($apelanteAux) . "]}";
                        }
                    }
                }
            }
        }
        if ($remisionCausa != "" && $remisionToca != "") {
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"1",';
            $tmp .= '"mnj":"Sin resultados a mostrar",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"Sin resultados"';
            $tmp .= "}";
        }

        return $tmp;
    }

    public function consultaAcuseRemisionToca($param) {
        $html = "";
        $SelectDao = new SelectDAO();
        $idActuacion = $param["idActuacion"];
        $condicion = " and a.idActuacion=" . $idActuacion;
        $remisionCausa = "";
        $fecha = date("dd/mm/yyy");
        $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida";
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra";
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'  and a.cveTipoCarpeta = 6" . $condicion;
        //var_dump($params["conditions"]);
        $remisionToca = $SelectDao->selectDAO($params);
        $remisionTocaAux = json_decode($remisionToca);

        if ($remisionTocaAux->Estatus != "Fail") {
            if ($remisionTocaAux->mnj != "Sin resultados") {

                $params["fields"] = "idCarpetaPadre";
                $params["tables"] = "tblantecedescarpetas ac";
                $params["conditions"] = " ac.activo ='S'and idCarpetaHija=" . $remisionTocaAux->resultados[0]->idReferencia;
                $carpetaPadre = $SelectDao->selectDAO($params);
                $carpetaPadreAux = json_decode($carpetaPadre);

                $condicion = " and a.idReferencia=" . $carpetaPadreAux->resultados[0]->idCarpetaPadre;
//
                $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida";
                $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra";
                $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                $remisionCausa = $SelectDao->selectDAO($params);
                $remisionCausaAux = json_decode($remisionCausa);

                $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo";
                $params["tables"] = "tblapelantescarpetas ac";
                $params["conditions"] = " ac.activo='S' AND ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[0]->idReferencia;
                $apelante = $SelectDao->selectDAO($params);
                $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                $params["tables"] = "tblremisionapelacionesimputados rai";
                $params["conditions"] = "rai.idRemisionApelacion=" . $remisionTocaAux->resultados[0]->idRemisionApelacion;
                $impofedel = $SelectDao->selectDAO($params);
                $impofedelAux = json_decode($impofedel);
                $apelanteAux = json_decode($apelante);



                $html .= "<style type='text/css'>";
                $html .= ".tablaPrint{";
                $html .= "font-family: Arial;";
                $html .= "font-size: 12px;";
                $html .= "border: 1px solid #000;";
                $html .= "border-collapse: collapse;";
                $html .= "}";
                $html .= "</style>";

                ///////////////////////////////////////Logos////////////////////
                $html .= "<table border='0' width='100%' >";
                $html .= "<tr>";
                $html .= "<td><img src='../../../vistas/img/logoPj.png'></td>";
                $html .= "</tr>";
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE AUDIENCIAS////////////////////
                $html .= " <table class='tablaPrint' border='1' width='100%' >";
                $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA REMISI&Oacute;N<b></td></tr>";
                $html .= "<tr>";
                $html .= "<td>Fecha Registro:</td>";
                $html .= "<td colspan='3'>" . $this->fechaMySQLaNormal($remisionTocaAux->resultados[0]->fechaRegistro) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Materia:</td>";
                $html .= "<td>PENAL</td>";
                $html .= "<td>Instancia:</td>";
                $html .= "<td >SEGUNDA</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Juzgado:</td>";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($remisionCausaAux->resultados[0]->cvejuzgadoC);
                $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
                $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Tribunal:</td>";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($remisionTocaAux->resultados[0]->cvejuzgadoC);
                $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);

                $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Toca:</td>";
                $html .= "<td colspan='3'>" . $remisionTocaAux->resultados[0]->numeroC . "/" . $remisionTocaAux->resultados[0]->anioC . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Causa:</td>";
                $html .= "<td colspan='3'>" . $remisionCausaAux->resultados[0]->numeroC . "/" . $remisionCausaAux->resultados[0]->anioC . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Tipo Recurso:</td>";
                $tiposRecursosDao = new TiposrecursosDAO();
                $tiposRecursosDto = new TiposrecursosDTO();
                $tiposRecursosDto->setCveRecurso($remisionTocaAux->resultados[0]->cveRecurso);
                $tiposRecursosDto = $tiposRecursosDao->selectTiposrecursos($tiposRecursosDto);
                $html .= "<td>" . $tiposRecursosDto[0]->getDesRecurso() . "</td>";
                $html .= "<td>Resolucion Combatida</td>";
                $catresolucionescombatidasDao = new CatresolucionescombatidasDAO();
                $catresolucionescombatidasDto = new CatresolucionescombatidasDTO();
                $catresolucionescombatidasDto->setCveCatResolucionCombatida($remisionTocaAux->resultados[0]->cveCatResolucionCombatida);
                $catresolucionescombatidasDto = $catresolucionescombatidasDao->selectCatresolucionescombatidas($catresolucionescombatidasDto);

                if ($remisionTocaAux->resultados[0]->idResolucionCombatida != "") {
                    $ActuacionesDao = new ActuacionesDAO();
                    $ActuacionesDto = new ActuacionesDTO();
                    $ActuacionesDto->setIdActuacion($remisionTocaAux->resultados[0]->idResolucionCombatida);

                    $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto);

                    $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $ActuacionesDto[0]->getSintesis() . "</td>";
                    $html .= "</tr>";
                } else {
                    if ($remisionTocaAux->resultados[0]->otraResolucionCombatida == 1) {
                        $ordenesDao = new OrdenesDAO();
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setIdOrden($remisionTocaAux->resultados[0]->idResolucionesCarpetasCombatidas);
                        $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
                        $html .= "<td> " . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $this->fechaMySQLaNormal($ordenesDto[0]->getFechaRespuesta()) . "</td>";
                        $html .= "</tr>";
                    } else if ($remisionTocaAux->resultados[0]->otraResolucionCombatida == 2) {
                        $cateosDao = new CateosDAO();
                        $cateosDto = new CateosDTO();
                        $cateosDto->setIdCateo($remisionTocaAux->resultados[0]->idResolucionesCarpetasCombatidas);
                        $cateosDto = $cateosDao->selectCateos($cateosDto);
                        $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $this->fechaMySQL($cateosDto[0]->getFechaRespuesta()) . "</td>";
                        $html .= "</tr>";
                    } else {

                        $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . utf8_decode($remisionTocaAux->resultados[0]->otraResolucionCombatida) . "</td>";
                        $html .= "</tr>";
                    }
                }

                $html .= "<tr>";
                $html .= "<td>Fecha Notifica la Sentencia o Auto:</td>";
                $html .= "<td>" . $this->fechaMySQL($remisionTocaAux->resultados[0]->fecNotifica) . "</td>";
                $html .= "<td>Fecha interpone Recurso</td>";
                $html .= "<td>" . $this->fechaMySQL($remisionTocaAux->resultados[0]->fecInterponeRecurso) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td width='20%'>Fecha corre traslado:</td>";
                $html .= "<td width='30%'>" . $this->fechaMySQL($remisionTocaAux->resultados[0]->fecTraslado) . "</td>";
                $html .= "<td width='20%'>Fecha interpone adhesion</td>";
                $html .= "<td width='30%'>" . $this->fechaMySQL($remisionTocaAux->resultados[0]->fecAdhesion) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Efecto en que admite:</td>";
                $tiposefectosDao = new TiposefectosDAO();
                $tiposefectosDto = new TiposefectosDTO();
                $tiposefectosDto->setCveEfecto($remisionTocaAux->resultados[0]->cveEfecto);
                $tiposefectosDto = $tiposefectosDao->selectTiposefectos($tiposefectosDto);
                $html .= "<td colspan='3'>" . $tiposefectosDto[0]->getDesEfecto() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Agravios:</td>";
                if ($remisionTocaAux->resultados[0]->agravios == "S") {
                    $agravio = "SI";
                } else {
                    $agravio = "NO";
                }
                $html .= "<td colspan='3'>" . $agravio . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Observaciones:</td>";
                $html .= "<td colspan='3'>" . $remisionTocaAux->resultados[0]->observaciones . "</td>";
                $html .= "</tr>";
                $html .= "</table><br>";

//                // informacion apelante
                $html .= " <table class='tablaPrint' border='1' width='100%' >";
                $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LOS APELANTES<b></td></tr>";
                for ($i = 0; $i < $apelanteAux->totalCount; $i++) {
                    $html .= "<tr><td colspan='4' align='center'><b>Apelante<b></td></tr>";
                    $html .= "<tr>";
                    $html .= "<td >Nombre:</td>";
                    if ($apelanteAux->resultados[$i]->cveTipoPersona == 1) {
                        $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->nombre . " " . $apelanteAux->resultados[$i]->paterno . " " . $apelanteAux->resultados[$i]->materno . "</td>";
                    } else {
                        $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->nombreMoral . "</td>";
                    }
                    $html .= "</tr>";
                    $html .= "<tr>";
                    $html .= "<td width='20%'>Tipo Apelante:</td>";
                    $tiposApelantesDao = new TiposapelantesDAO();
                    $tiposApelantesDto = new TiposapelantesDTO();
                    $tiposApelantesDto->setCveTipoApelante($apelanteAux->resultados[$i]->cveTipoApelante);
                    $tiposApelantesDto = $tiposApelantesDao->selectTiposapelantes($tiposApelantesDto);
                    $html .= "<td width='30%'>" . $tiposApelantesDto[0]->getDesTipoApelante() . "</td>";
                    $html .= "<td width='20%'>Genero:</td>";
                    $generosDao = new GenerosDAO();
                    $generosDto = new GenerosDTO();
                    $generosDto->setCveGenero($apelanteAux->resultados[$i]->cveGenero);
                    $generosDto = $generosDao->selectGeneros($generosDto);
                    $html .= "<td width='30%'>" . $generosDto[0]->getDesGenero() . "</td>";
                    $html .= "</tr>";
                    $html .= "<td >Domicilio:</td>";
                    $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->domicilio . "</td>";
                    $html .= "</tr>";
                    $html .= "<td >Correo:</td>";
                    $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->email . "</td>";
                    $html .= "</tr>";
                }
                $html .= "</table><br>";


                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                $imputadosCarpetasDao = new ImputadoscarpetasDAO();

                $ofendidosCarpetasDao = new OfendidosCarpetasDAO();
                $ofendidosCarpetasDto = new OfendidosCarpetasDTO();

                $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

                $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

                $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
                $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();


                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();


                $tipospartesDto = new TipospartesDTO();
                $tipospartesDao = new TipospartesDAO();

                ///////////////////////////////////////TABLA DE IMPUTADOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='2' align='center'><b>IMPUTADO(S)</b></td></tr>";
                $imputadosCarpetasDto->setIdCarpetaJudicial($remisionTocaAux->resultados[0]->idReferencia);
                $imputadosCarpetasDto->setActivo("S");
                $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
                if ($imputadosCarpetasDto != "") {
                    foreach ($imputadosCarpetasDto as $imputado) {
                        $html .= "<tr>";
                        $html .= "<td width='40%'>";
                        if ($imputado->getCveTipoPersona() == 1) {
                            $html .= "Nombre: " . utf8_encode($imputado->getNombre()) . " " . utf8_encode($imputado->getPaterno()) . " " . utf8_encode($imputado->getMaterno());
                        } else {
                            $html .= "Nombre: " . utf8_encode($imputado->getNombreMoral());
                        }
                        if ($imputado->getDetenido() == "S") {
                            $html .= "<br>fecha de Detenci&oacute;n: " . $this->fechaMySQLaNormal($imputado->getFechaControlDet());
                        }
                        $html .= "</td>";
                        $html .= "<td width='60%'>";

                        $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $domiciliosimputadoscarpetasDto->setActivo("S");
                        $rsDomiciliosimputadosDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
                        if ($rsDomiciliosimputadosDto != "") {
                            foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                                $html .= "Domicilio: " . utf8_encode($domicilioImputado->getDireccion());
                                if ($domicilioImputado->getNumExterior() != "") {
                                    $html .= " No. " . utf8_encode($domicilioImputado->getNumExterior());
                                }
                                if ($domicilioImputado->getColonia() != "") {
                                    $html .= " Colonia " . utf8_encode($domicilioImputado->getColonia());
                                }
                                if ($domicilioImputado->getCp() != "") {
                                    $html .= " C.P. " . ($domicilioImputado->getCp());
                                }
                                $html .= "<br>";
                            }
                        }
                        $defensoresImputadosDto->setActivo("S");
                        $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                        if ($rsDefensoresImputadosDto != "") {
                            foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                                $html .= "Defensor: " . utf8_encode($defensorImputados->getNombre()) . "<br>";
                            }
                        }
                        $html .= "</td>";
                        $html .= "</tr>";
                    }
                }
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE OFENDIDOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='2' align='center'><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>";
                $ofendidosCarpetasDto->setIdCarpetaJudicial($remisionTocaAux->resultados[0]->idReferencia);
                $ofendidosCarpetasDto->setActivo("S");
                $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto);
                if ($ofendidosCarpetasDto != "") {
                    foreach ($ofendidosCarpetasDto as $ofendido) {
                        $html .= "<tr>";
                        $html .= "<td width='40%'>";
                        if ($ofendido->getCveTipoParte() != "" && $ofendido->getCveTipoParte() != "0") {
                            $tipospartesDto->setCveTipoParte($ofendido->getCveTipoParte());
                            $rsTipospartesDto = $tipospartesDao->selectTipospartes($tipospartesDto);
                            if ($rsTipospartesDto != "") {
                                $tipo = $rsTipospartesDto[0]->getDescTipoParte();
                            } else {
                                $tipo = "OFENDIDO";
                            }
                        } else {
                            $tipo = "OFENDIDO";
                        }

                        if ($ofendido->getCveTipoPersona() == 1) {
                            $html .= "Nombre: " . utf8_encode($ofendido->getNombre()) . " " . utf8_encode($ofendido->getPaterno()) . " " . utf8_encode($ofendido->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                        } else {
                            $html .= "Nombre: " . utf8_encode($ofendido->getNombreMoral()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                        }

                        $html .= "</td>";
                        $html .= "<td width='60%'>";

                        $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                        $domiciliosofendidoscarpetasDto->setActivo("S");
                        $rsDomiciliosOfendidosDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
                        if ($rsDomiciliosOfendidosDto != "") {
                            foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                                $html .= "Domicilio: " . utf8_encode($domicilioOfendido->getDireccion());
                                if ($domicilioOfendido->getNumExterior() != "") {
                                    $html .= " No. " . utf8_encode($domicilioOfendido->getNumExterior());
                                }
                                if ($domicilioOfendido->getColonia() != "") {
                                    $html .= " Colonia " . utf8_encode($domicilioOfendido->getColonia());
                                }
                                if ($domicilioOfendido->getCp() != "") {
                                    $html .= " C.P. " . ($domicilioOfendido->getCp());
                                }
                                $html .= "<br>";
                            }
                        }

                        $html .= "</td>";
                        $html .= "</tr>";
                    }
                }
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE DELITOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='4' align='center'><b>DELITO(S)</b></td></tr>";
                $html .= "<td>";
                $delitosCarpetasDto->setActivo("S");
                $delitosCarpetasDto->setIdCarpetaJudicial($remisionTocaAux->resultados[0]->idReferencia);
                $rsDelitosCarpetasDto = $delitosCarpetasDao->selectDelitosInner($delitosCarpetasDto);
                $index = 0;
                if ($rsDelitosCarpetasDto != "") {
                    foreach ($rsDelitosCarpetasDto as $delitoCarpeta) {
                        $index ++;
                        $html .= $index . ".- " . utf8_encode($delitoCarpeta->getDesDelito()) . "<br>";
                    }
                }
                $html .= "</td>";
                $html .= "</table><br>";


                $html .= "<script language=\"javascript\">";
                $html .= "window.print();";
                $html .= "</script>";
            } else {
                $html .= "El acuse no se pudo generar.";
            }
        } else {
            $html .= "El acuse no se pudo generar.";
        }

        //hasta aqui

        return $html;
    }

    public function consultaAcuseRemision($param) {
        $html = "";
        $SelectDao = new SelectDAO();
        $idActuacion = $param["idActuacion"];
        $condicion = " and a.idActuacion=" . $idActuacion;
        $remisionCausa = "";
        $params["fields"] = "ra.idActuacionCopia idActuacionCopia, ra.idActuacion,a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida";
        $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra";
        $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'  and a.cveTipoCarpeta < 6" . $condicion;
        //var_dump($params["conditions"]);
        $remisionCausa = $SelectDao->selectDAO($params);
        $remisionCausaAux = json_decode($remisionCausa);
        if ($remisionCausaAux->Estatus != "Fail") {
            if ($remisionCausaAux->mnj != "Sin resultados") {
                $condicion = " and ra.idRemisionApelacion=" . $remisionCausaAux->resultados[0]->idActuacionCopia;
                $params["fields"] = "a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRemision,a.aniActuacion anioRemision,a.idReferencia idReferencia,a.numero numeroC, a.anio anioC, a.cveJuzgado cvejuzgadoC, a.cveTipoCarpeta cveTipoCarpetaC, ra.idOficio idOficio, ra.cveRecurso cveRecurso, ra.cveEfecto cveEfecto,ra.agravios agravios,ra.idResolucionCombatida idResolucionCombatida,ra.idResolucionesCarpetasCombatidas idResolucionesCarpetasCombatidas, ra.fecCorreTraslado fecTraslado, ra.fecInterponeRecurso fecInterponeRecurso, ra.fecNotificaSenAut fecNotifica, ra.fecAdhesion fecAdhesion, ra.emplazamiento emplazamiento, ra.cveSentido cveSentido, ra.fechaRegistro fechaRegistro, ra.idRemisionApelacion idRemisionApelacion,a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,ra.cveCatResolucionCombatida cveCatResolucionCombatida,ra.otraResolucionCombatida otraResolucionCombatida";
                $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a, tblremisionapelaciones ra";
                $params["conditions"] = " cj.idCarpetaJudicial=a.idReferencia  and  a.idActuacion=ra.idActuacion and cveTipoActuacion = 32 and a.activo='S' and ra.activo='S'" . $condicion;
                $remisionToca = $SelectDao->selectDAO($params);
                $remisionTocaAux = json_decode($remisionToca);
                $params["fields"] = "ac.idApelanteCarpeta idApelanteCarpeta,ac.nombre nombre,ac.paterno paterno,ac.materno materno,ac.cveGenero cveGenero, ac.cveTipoPersona cveTipoPersona, ac.nombreMoral nombreMoral, ac.cveTipoApelante cveTipoApelante,ac.domicilio domicilio,ac.email email, ac.fechaRegistro fechaRegistro, ac.activo activo";
                $params["tables"] = "tblapelantescarpetas ac";
                $params["conditions"] = "ac.idCarpetaJudicial=" . $remisionTocaAux->resultados[0]->idReferencia;
                $apelante = $SelectDao->selectDAO($params);
                $params["fields"] = "idImpOfeDelCarpeta,idRemisionApelacionImp";
                $params["tables"] = "tblremisionapelacionesimputados rai";
                $params["conditions"] = "rai.idRemisionApelacion=" . $remisionTocaAux->resultados[0]->idRemisionApelacion;
                $impofedel = $SelectDao->selectDAO($params);
                $impofedelAux = json_decode($impofedel);
                $apelanteAux = json_decode($apelante);



                $html .= "<style type='text/css'>";
                $html .= ".tablaPrint{";
                $html .= "font-family: Arial;";
                $html .= "font-size: 12px;";
                $html .= "border: 1px solid #000;";
                $html .= "border-collapse: collapse;";
                $html .= "}";
                $html .= "</style>";

                ///////////////////////////////////////Logos////////////////////
                $html .= "<table border='0' width='100%' >";
                $html .= "<tr>";
                $html .= "<td><img src='../../../vistas/img/logoPj.png'></td>";
                $html .= "</tr>";
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE AUDIENCIAS////////////////////
                $html .= " <table class='tablaPrint' border='1' width='100%' >";
                $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA REMISI&Oacute;N<b></td></tr>";
                $html .= "<tr>";
                $html .= "<td>Fecha Registro:</td>";
                $html .= "<td colspan='3'>" . $this->fechaMySQLaNormal($remisionCausaAux->resultados[0]->fechaRegistro) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Materia:</td>";
                $html .= "<td>PENAL</td>";
                $html .= "<td>Instancia:</td>";
                $html .= "<td >PRIMERA</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Juzgado:</td>";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($remisionCausaAux->resultados[0]->cvejuzgadoC);
                $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
                $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Tribunal:</td>";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($remisionTocaAux->resultados[0]->cvejuzgadoC);
                $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
                $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Toca:</td>";
                $html .= "<td colspan='3'>" . $remisionTocaAux->resultados[0]->numeroC . "/" . $remisionTocaAux->resultados[0]->anioC . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Causa:</td>";
                $html .= "<td colspan='3'>" . $remisionCausaAux->resultados[0]->numeroC . "/" . $remisionCausaAux->resultados[0]->anioC . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td>Tipo Recurso:</td>";
                $tiposRecursosDao = new TiposrecursosDAO();
                $tiposRecursosDto = new TiposrecursosDTO();
                $tiposRecursosDto->setCveRecurso($remisionCausaAux->resultados[0]->cveRecurso);
                $tiposRecursosDto = $tiposRecursosDao->selectTiposrecursos($tiposRecursosDto);
                $html .= "<td>" . $tiposRecursosDto[0]->getDesRecurso() . "</td>";
                $html .= "<td>Resolucion Combatida</td>";
                $catresolucionescombatidasDao = new CatresolucionescombatidasDAO();
                $catresolucionescombatidasDto = new CatresolucionescombatidasDTO();
                $catresolucionescombatidasDto->setCveCatResolucionCombatida($remisionTocaAux->resultados[0]->cveCatResolucionCombatida);
                $catresolucionescombatidasDto = $catresolucionescombatidasDao->selectCatresolucionescombatidas($catresolucionescombatidasDto);
                if ($remisionTocaAux->resultados[0]->idResolucionCombatida != "") {
                    $ActuacionesDao = new ActuacionesDAO();
                    $ActuacionesDto = new ActuacionesDTO();
                    $ActuacionesDto->setIdActuacion($remisionTocaAux->resultados[0]->idResolucionCombatida);

                    $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto);

                    $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $ActuacionesDto[0]->getSintesis() . "</td>";
                    $html .= "</tr>";
                } else {
                    if ($remisionTocaAux->resultados[0]->otraResolucionCombatida == 1) {
                        $ordenesDao = new OrdenesDAO();
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setIdOrden($remisionTocaAux->resultados[0]->idResolucionesCarpetasCombatidas);
                        $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
                        $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $this->fechaMySQLaNormal($ordenesDto[0]->getFechaRespuesta()) . "</td>";
                        $html .= "</tr>";
                    } else if ($remisionTocaAux->resultados[0]->otraResolucionCombatida == 2) {
                        $cateosDao = new CateosDAO();
                        $cateosDto = new CateosDTO();
                        $cateosDto->setIdCateo($remisionTocaAux->resultados[0]->idResolucionesCarpetasCombatidas);
                        $cateosDto = $cateosDao->selectCateos($cateosDto);
                        $html .= "<td> " . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . $this->fechaMySQLaNormal($cateosDto[0]->getFechaRespuesta()) . "</td>";
                        $html .= "</tr>";
                    } else {
                        $html .= "<td>" . $catresolucionescombatidasDto[0]->getDesResolucionCombatida() . ": " . utf8_decode($remisionTocaAux->resultados[0]->otraResolucionCombatida) . "</td>";
                        $html .= "</tr>";
                    }
                }
                $html .= "<tr>";
                $html .= "<td>Fecha Notifica la Sentencia o Auto:</td>";
                $html .= "<td>" . $this->fechaMySQL($remisionCausaAux->resultados[0]->fecNotifica) . "</td>";
                $html .= "<td>Fecha interpone Recurso</td>";
                $html .= "<td>" . $this->fechaMySQL($remisionCausaAux->resultados[0]->fecInterponeRecurso) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td width='20%'>Fecha corre traslado:</td>";
                $html .= "<td width='30%'>" . $this->fechaMySQL($remisionCausaAux->resultados[0]->fecTraslado) . "</td>";
                $html .= "<td width='20%'>Fecha interpone adhesion</td>";
                $html .= "<td width='30%'>" . $this->fechaMySQL($remisionCausaAux->resultados[0]->fecAdhesion) . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Efecto en que admite:</td>";
                $tiposefectosDao = new TiposefectosDAO();
                $tiposefectosDto = new TiposefectosDTO();
                $tiposefectosDto->setCveEfecto($remisionCausaAux->resultados[0]->cveEfecto);
                $tiposefectosDto = $tiposefectosDao->selectTiposefectos($tiposefectosDto);
                $html .= "<td colspan='3'>" . $tiposefectosDto[0]->getDesEfecto() . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Agravios:</td>";
                if ($remisionTocaAux->resultados[0]->agravios == "S") {
                    $agravio = "SI";
                } else {
                    $agravio = "NO";
                }
                $html .= "<td colspan='3'>" . $agravio . "</td>";
                $html .= "</tr>";
                $html .= "<tr>";
                $html .= "<td >Observaciones:</td>";
                $html .= "<td colspan='3'>" . $remisionCausaAux->resultados[0]->observaciones . "</td>";
                $html .= "</tr>";
                $html .= "</table><br>";

//                // informacion apelante
                $html .= " <table class='tablaPrint' border='1' width='100%' >";
                $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LOS APELANTES<b></td></tr>";
                for ($i = 0; $i < $apelanteAux->totalCount; $i++) {
                    $html .= "<tr><td colspan='4' align='center'><b>Apelante<b></td></tr>";
                    $html .= "<tr>";
                    $html .= "<td >Nombre:</td>";
                    if ($apelanteAux->resultados[$i]->cveTipoPersona == 1) {
                        $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->nombre . " " . $apelanteAux->resultados[$i]->paterno . " " . $apelanteAux->resultados[$i]->materno . "</td>";
                    } else {
                        $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->nombreMoral . "</td>";
                    }
                    $html .= "</tr>";
                    $html .= "<tr>";
                    $html .= "<td width='20%'>Tipo Apelante:</td>";
                    $tiposApelantesDao = new TiposapelantesDAO();
                    $tiposApelantesDto = new TiposapelantesDTO();
                    $tiposApelantesDto->setCveTipoApelante($apelanteAux->resultados[$i]->cveTipoApelante);
                    $tiposApelantesDto = $tiposApelantesDao->selectTiposapelantes($tiposApelantesDto);
                    $html .= "<td width='30%'>" . $tiposApelantesDto[0]->getDesTipoApelante() . "</td>";
                    $html .= "<td width='20%'>Genero:</td>";
                    $generosDao = new GenerosDAO();
                    $generosDto = new GenerosDTO();
                    $generosDto->setCveGenero($apelanteAux->resultados[$i]->cveGenero);
                    $generosDto = $generosDao->selectGeneros($generosDto);
                    $html .= "<td width='30%'>" . $generosDto[0]->getDesGenero() . "</td>";
                    $html .= "</tr>";
                    $html .= "<td >Domicilio:</td>";
                    $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->domicilio . "</td>";
                    $html .= "</tr>";
                    $html .= "<td >Correo:</td>";
                    $html .= "<td colspan='3'>" . $apelanteAux->resultados[$i]->email . "</td>";
                    $html .= "</tr>";
                }
                $html .= "</table><br>";


                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                $imputadosCarpetasDao = new ImputadoscarpetasDAO();

                $ofendidosCarpetasDao = new OfendidosCarpetasDAO();
                $ofendidosCarpetasDto = new OfendidosCarpetasDTO();

                $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

                $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

                $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
                $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();


                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();


                $tipospartesDto = new TipospartesDTO();
                $tipospartesDao = new TipospartesDAO();

                ///////////////////////////////////////TABLA DE IMPUTADOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='2' align='center'><b>IMPUTADO(S)</b></td></tr>";
                $imputadosCarpetasDto->setIdCarpetaJudicial($remisionCausaAux->resultados[0]->idReferencia);
                $imputadosCarpetasDto->setActivo("S");
                $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
                if ($imputadosCarpetasDto != "") {
                    foreach ($imputadosCarpetasDto as $imputado) {
                        $html .= "<tr>";
                        $html .= "<td width='40%'>";
                        if ($imputado->getCveTipoPersona() == 1) {
                            $html .= "Nombre: " . utf8_encode($imputado->getNombre()) . " " . utf8_encode($imputado->getPaterno()) . " " . utf8_encode($imputado->getMaterno());
                        } else {
                            $html .= "Nombre: " . utf8_encode($imputado->getNombreMoral());
                        }
                        if ($imputado->getDetenido() == "S") {
                            $html .= "<br>fecha de detenci&oacute;n: " . $this->fechaMySQLaNormal($imputado->getFechaControlDet());
                        }
                        $html .= "</td>";
                        $html .= "<td width='60%'>";

                        $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $domiciliosimputadoscarpetasDto->setActivo("S");
                        $rsDomiciliosimputadosDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
                        if ($rsDomiciliosimputadosDto != "") {
                            foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                                $html .= "Domicilio: " . utf8_encode($domicilioImputado->getDireccion());
                                if ($domicilioImputado->getNumExterior() != "") {
                                    $html .= " No. " . utf8_encode($domicilioImputado->getNumExterior());
                                }
                                if ($domicilioImputado->getColonia() != "") {
                                    $html .= " Colonia " . utf8_encode($domicilioImputado->getColonia());
                                }
                                if ($domicilioImputado->getCp() != "") {
                                    $html .= " C.P. " . ($domicilioImputado->getCp());
                                }
                                $html .= "<br>";
                            }
                        }
                        $defensoresImputadosDto->setActivo("S");
                        $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                        if ($rsDefensoresImputadosDto != "") {
                            foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                                $html .= "Defensor: " . utf8_encode($defensorImputados->getNombre()) . "<br>";
                            }
                        }
                        $html .= "</td>";
                        $html .= "</tr>";
                    }
                }
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE OFENDIDOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='2' align='center'><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>";
                $ofendidosCarpetasDto->setIdCarpetaJudicial($remisionCausaAux->resultados[0]->idReferencia);
                $ofendidosCarpetasDto->setActivo("S");
                $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto);
                if ($ofendidosCarpetasDto != "") {
                    foreach ($ofendidosCarpetasDto as $ofendido) {
                        $html .= "<tr>";
                        $html .= "<td width='40%'>";
                        if ($ofendido->getCveTipoParte() != "" && $ofendido->getCveTipoParte() != "0") {
                            $tipospartesDto->setCveTipoParte($ofendido->getCveTipoParte());
                            $rsTipospartesDto = $tipospartesDao->selectTipospartes($tipospartesDto);
                            if ($rsTipospartesDto != "") {
                                $tipo = $rsTipospartesDto[0]->getDescTipoParte();
                            } else {
                                $tipo = "OFENDIDO";
                            }
                        } else {
                            $tipo = "OFENDIDO";
                        }

                        if ($ofendido->getCveTipoPersona() == 1) {
                            $html .= "Nombre: " . utf8_encode($ofendido->getNombre()) . " " . utf8_encode($ofendido->getPaterno()) . " " . utf8_encode($ofendido->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                        } else {
                            $html .= "Nombre: " . utf8_encode($ofendido->getNombreMoral()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                        }

                        $html .= "</td>";
                        $html .= "<td width='60%'>";

                        $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                        $domiciliosofendidoscarpetasDto->setActivo("S");
                        $rsDomiciliosOfendidosDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
                        if ($rsDomiciliosOfendidosDto != "") {
                            foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                                $html .= "Domicilio: " . utf8_encode($domicilioOfendido->getDireccion());
                                if ($domicilioOfendido->getNumExterior() != "") {
                                    $html .= " No. " . utf8_encode($domicilioOfendido->getNumExterior());
                                }
                                if ($domicilioOfendido->getColonia() != "") {
                                    $html .= " Colonia " . utf8_encode($domicilioOfendido->getColonia());
                                }
                                if ($domicilioOfendido->getCp() != "") {
                                    $html .= " C.P. " . ($domicilioOfendido->getCp());
                                }
                                $html .= "<br>";
                            }
                        }

                        $html .= "</td>";
                        $html .= "</tr>";
                    }
                }
                $html .= "</table><br>";

                ///////////////////////////////////////TABLA DE DELITOS////////////////////
                $html .= "<table class='tablaPrint' border='1' width='100%'>";
                $html .= "<tr><td colspan='4' align='center'><b>DELITO(S)</b></td></tr>";
                $html .= "<td>";
                $delitosCarpetasDto->setActivo("S");
                $delitosCarpetasDto->setIdCarpetaJudicial($remisionCausaAux->resultados[0]->idReferencia);
                $rsDelitosCarpetasDto = $delitosCarpetasDao->selectDelitosInner($delitosCarpetasDto);
                $index = 0;
                if ($rsDelitosCarpetasDto != "") {
                    foreach ($rsDelitosCarpetasDto as $delitoCarpeta) {
                        $index ++;
                        $html .= $index . ".- " . utf8_encode($delitoCarpeta->getDesDelito()) . "<br>";
                    }
                }
                $html .= "</td>";
                $html .= "</table><br>";


                $html .= "<script language=\"javascript\">";
                $html .= "window.print();";
                $html .= "</script>";
            } else {
                $html .= "El acuse no se pudo generar1.";
            }
        } else {
            $html .= "El acuse no se pudo generar2.";
        }

        //hasta aqui

        return $html;
    }

    public function insertRemisionapelaciones($RemisionapelacionesDto, $proveedor = null) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesDao = new RemisionapelacionesDAO();
        $RemisionapelacionesDto = $RemisionapelacionesDao->insertRemisionapelaciones($RemisionapelacionesDto, $proveedor);
        return $RemisionapelacionesDto;
    }

    public function updateRemisionapelaciones($RemisionapelacionesDto, $proveedor = null) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesDao = new RemisionapelacionesDAO();
//$tmpDto = new RemisionapelacionesDTO();
//$tmpDto = $RemisionapelacionesDao->selectRemisionapelaciones($RemisionapelacionesDto,$proveedor);
//if($tmpDto!=""){//$RemisionapelacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $RemisionapelacionesDto = $RemisionapelacionesDao->updateRemisionapelaciones($RemisionapelacionesDto, $proveedor);
        return $RemisionapelacionesDto;
//}
//return "";
    }

    public function deleteRemisionapelaciones($RemisionapelacionesDto, $proveedor = null) {
        $RemisionapelacionesDto = $this->validarRemisionapelaciones($RemisionapelacionesDto);
        $RemisionapelacionesDao = new RemisionapelacionesDAO();
        $RemisionapelacionesDto = $RemisionapelacionesDao->deleteRemisionapelaciones($RemisionapelacionesDto, $proveedor);
        return $RemisionapelacionesDto;
    }

    public function fechaMySQLaNormal($fecha) {
        if ($fecha != "") {
            $fecha = explode(" ", $fecha);
            $fechavec = explode("-", $fecha[0]);
            $fechaNormal = $fechavec[2] . "/" . $fechavec[1] . "/" . $fechavec[0];
            $fechaHora = explode(":", $fecha[1]);
            $fechaHora = $fechaHora[0] . ":" . $fechaHora[1];
        } else {
            $fechaNormal = "";
            $fechaHora = "";
        }
        return $fechaNormal . " " . $fechaHora;
    }

    public function fechaMySQL($fecha) {
        if ($fecha != "") {
            $fecha = explode(" ", $fecha);
            $fechavec = explode("-", $fecha[0]);
            $fechaNormal = $fechavec[2] . "/" . $fechavec[1] . "/" . $fechavec[0];
        } else {
            $fechaNormal = "";
        }
        return $fechaNormal;
    }

}

?>