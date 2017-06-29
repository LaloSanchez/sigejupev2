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
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audiencias/AudienciasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

    class ReporteautosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function reporteAutosPrevio($datos, $paginacion) {
            $consulta = "";
            switch ($datos["nivel"]) {
                case 1:
                    if($datos["checkTipoAuto"] == true){
                        $datos["groups"] = "a.cveTipoAuto";
                    }
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
            $consulta = $this->reporteAutos($datos, $paginacion);
            return $consulta;
        }

        public function reporteAutos($datos, $paginacion) {
            $sqlIntervalo = "";
            $tablas = "";
            $campos = "";
            if ($paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $sqlIntervalo = " AND a.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($paginacion["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                    $sqlIntervalo.=" AND  a.fecharegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            if($datos["checkTipoAuto"] == true){
                        $tablas = " LEFT JOIN tbltiposautos ta on (a.cveTipoAuto = ta.cveTipoAuto)";
                        $campos = " ,ta.desTipoAuto,ta.cveTipoAuto";
            }
            $params = array();
            $params["orders"] = "totalCount DESC";
            $params["fields"] = "count(*) as totalCount,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,
            j.desJuzgado,j.cveJuzgado".$campos;
            $params["tables"] = "tblautosimputados ai, tbltiposcarpetas tc, tbljuzgados j 
            LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
            LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion),tblactuaciones a" . $tablas;
            $params["conditions"] = "cveTipoActuacion=5 AND a.activo='S' AND tc.activo='S' AND j.activo='S'
            AND ai.idActuacion=a.idActuacion AND ai.activo='S'
            AND tc.cveTipoCarpeta=a.cveTipoCarpeta AND j.cveJuzgado=a.cveJuzgado";
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
            if ($sqlIntervalo != "") {
                $params["conditions"].=$sqlIntervalo;
            }
            if ($datos["groups"] != "") {
                $params["groups"] = $datos["groups"];
            }
            if ($datos["detalles"] == "detalle") {
                $params["fields"] = "a.idActuacion,a.numero,a.anio,tc.desTipoCarpeta,ta.desTipoAuto,
                r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,
                j.desJuzgado,j.cveJuzgado,a.fechaRegistro,ic.nombre,ic.paterno,ic.materno,ic.nombreMoral,ic.cveTipoPersona";
                if($datos["checkTipoAuto"] == true){
                    $params["tables"].=",tblimputadoscarpetas ic";
                }else{
                    $params["tables"].=",tbltiposautos ta,tblimputadoscarpetas ic";
                }
                $params["conditions"].=" AND ta.cveTipoAuto=a.cveTipoAuto AND ta.activo='S'
                    AND ic.idImputadoCarpeta=ai.idImputadoCarpeta AND ic.activo='S'";
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
            if ($datos["detalles"] == "detalle") {
                $rs = json_decode($SelectDao->selectDAO($params, null, $paginacion));

                $ArrCausas = array();
                $ArrCausas2 = array();
                $ArrCausas2["Estatus"] = $rs->Estatus;
                $ArrCausas2["totalCount"] = $rs->totalCount;
                $ArrCausas2["mnj"] = $rs->mnj;

                foreach ($rs->resultados as $key => $value) {
                    $numero = "";
                    $anio = "";
                    $cveJuzgado = "";
                    foreach ($value as $key2 => $value2) {
                        if($key2 == "totalCJ"){
             $ArrCausas[$key][$key2] = number_format($value2);
             }else if($key2 == "totalCount"){
                 $ArrCausas[$key][$key2] = number_format($value2);
             }else{
                 $ArrCausas[$key][$key2] = ($value2);
             }
                        if ($key2 == "numero") {
                            $numero = $value2;
                        }
                        if ($key2 == "anio") {
                            $anio = $value2;
                        }
                        if ($key2 == "cveJuzgado") {
                            $cveJuzgado = $value2;
                        }
                    }
                    $ArrCausas[$key]["codigo"] = $this->obtenerCodigo($numero, $anio, $cveJuzgado); //
                }
                $ArrCausas2["resultados"] = $ArrCausas;
                return json_encode($ArrCausas2);
            } else {
                 $rs = json_decode($SelectDao->selectDAO($params, $this->proveedor, $paginacion));
        
        $ArrCausas=array();
        $ArrCausas2=array();
        $ArrCausas2["Estatus"] =  $rs->Estatus;
        $ArrCausas2["totalCount"] =  number_format($rs->totalCount);
        $ArrCausas2["mnj"] =  $rs->mnj;
        
        foreach($rs->resultados as $key => $value){
            $numero = "";
            $anio="";
            $cveJuzgado="";
            
                
            
            
         foreach($value as $key2 => $value2){
             if($key2 == "totalCJ"){
             $ArrCausas[$key][$key2] = number_format($value2);
             }else if($key2 == "totalCount"){
                 $ArrCausas[$key][$key2] = number_format($value2);
             }else{
                 $ArrCausas[$key][$key2] = ($value2);
             }
             
            }
            
        }
        $ArrCausas2["resultados"] = $ArrCausas;
        
        return json_encode($ArrCausas2);
            }
        }

        public function obtenerCodigo($numero, $anio, $cveJuzgado) {
            $AudienciasDto = new AudienciasDTO();
            $AudienciasDto->setNumero($numero);
            $AudienciasDto->setAnio($anio);
            $AudienciasDto->setCveJuzgado($cveJuzgado);
            $AudienciasDto->setActivo("S");
            $AudienciasController = new AudienciasController();

            $AudienciasDto = $AudienciasController->consultarAudienciaCodigo($AudienciasDto);

            return $AudienciasDto;
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
    $reporteautosFacade = new ReporteautosFacade();

    if ($accion == "consultar_autos_Reporte") {
        $datos = array();
        @$datos["anio"] = $_POST["anio"];
        @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datos["cveRegion"] = $_POST["cveRegion"];
        @$datos["cveDistrito"] = $_POST["cveDistrito"];
        @$datos["nivel"] = $_POST["nivel"];
        @$datos["detalles"] = $_POST["detalles"];
        @$datos["groups"] = $_POST["groups"];
        @$datos["porMes"] = $_POST["porMes"];
        @$datos["checkTipoAuto"] = $_POST["checkTipoAuto"];
        @$datos["cveTipoAuto"] = $_POST["cveTipoAuto"];
        echo $reporteautosFacade->reporteAutosPrevio($datos, $param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>