<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once("Matrizrelacion.Class.php");

class IndicadorseleccionadoController {

    private $query;
    private $paginacion;
    private $nuevosCampos;
    private $alias;
    private $proveedor;

    private function obtenerPeriodoAnterior($fechaIntervalo) {
        $fechaI = "";
        $fechaF = "";
        if (($fechaIntervalo["fechaDesde"] != "") && ($fechaIntervalo["fechaHasta"] != "")) {
            $fechaInicio = explode("/", $fechaIntervalo["fechaDesde"]);
            $mes = intval($fechaInicio[0]);
            $anio = intval($fechaInicio[1]);
            if ($mes == 1) {//enero
                $anio--;
                $mes = 13;
            }
            $mes--;
            if ($mes < 10) {
                $mes = "0" . $mes;
            }
            $fechaI = $anio . "-" . $mes;
            $fechaFinal = explode("/", $fechaIntervalo["fechaHasta"]);
            $mes = intval($fechaFinal[0]);
            $anio = intval($fechaFinal[1]);
            if ($mes == 1) {//enero
                $anio--;
                $mes = 13;
            }
            $mes--;
            if ($mes < 10) {
                $mes = "0" . $mes;
            }
            $fechaF = $anio . "-" . $mes;
        }
        $fechaIntervalo["fechaDesde"] = $fechaI;
        $fechaIntervalo["fechaHasta"] = $fechaF;
        return $fechaIntervalo;
    }
    
    private function condicionesFechaPeriodoAnterior($campoFecha, $datos, $paginacion) {
        if ($datos["agrupacion"] == "S") {
            $this->query["groups"] = "year(" . $campoFecha . "),month(". $campoFecha . ")";
        }
        $fecha = $this->obtenerPeriodoAnterior($paginacion);
        if ($fecha["fechaDesde"] != "") {
            $this->query["conditions"] .= " AND " . $campoFecha . " >='" . $fecha["fechaDesde"] . "-01'";
            $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $this->fechaSQL($fecha["fechaHasta"]) . "'";
        } else {
            if (($datos["mes"] == "") && ($datos["anio"] != "")) {
                $anio=intval($datos["anio"])-1;
                $this->query["conditions"] .=" AND " . $campoFecha . " > '" . $anio . "-11-30'";
                $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $datos["anio"] . "-12-01'";
            }
            if (($datos["mes"] != "") && ($datos["anio"] != "")) {
                $mes = intval($datos["mes"]);
                $anio = intval($datos["anio"]);
                if ($mes == 1) {//enero
                    $anio--;
                    $mes = 13;
                }
                $mes--;
                if ($mes < 10) {
                    $mes = "0" . $mes;
                }
                $this->query["conditions"] .=" AND " . $campoFecha . " >= '" . $anio . "-" . $mes . "-01'";
                $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $datos["anio"] . "-" . $datos["mes"] . "-01'";
                $this->query["groups"] = "";
            }
        }
        $this->query["orders"] = $campoFecha . " ASC";
    }
    
    private function fechaSQL($fecha){
        $fechaFinal = explode("/", $fecha);
        if(count($fechaFinal)<2){
            $fechaFinal = explode("-", $fecha);
            $anioF = intval($fechaFinal[0]);
            $mesF = intval($fechaFinal[1]);
        }else{
            $anioF = intval($fechaFinal[1]);
            $mesF = intval($fechaFinal[0]);
        }
        $mesF++;
        if($mesF==13){
            $mesF=1;
            $anioF++;
        }
        if($mesF<10){
            $mesF="0".$mesF;
        }
        return $anioF."-".$mesF."-01";
    }

    private function condicionesFecha($campoFecha, $datos, $paginacion) {
        if ($datos["agrupacion"] == "S") {
            $this->query["groups"] = "year(" . $campoFecha . "),month(". $campoFecha . ")";
        }
        if ($paginacion["fechaDesde"] != "") { 
            $fechaInicio = explode("/", $paginacion["fechaDesde"]);
            $this->query["conditions"] .= " AND " . $campoFecha . " >='" . $fechaInicio[1] . "-" . $fechaInicio[0] . "-01'";
            if ($paginacion["fechaHasta"] != "") {
                $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $this->fechaSQL($paginacion["fechaHasta"]) . "'";
            }
        } else {
            if (($datos["mes"] == "") && ($datos["anio"] != "")) {
                $anio=intval($datos["anio"])-1;
                $this->query["conditions"] .=" AND " . $campoFecha . " > '" . $anio . "-12-31'";
                $anio=2+intval($datos["anio"]);
                $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $anio . "-01-01'";
            }
            if (($datos["mes"] != "") && ($datos["anio"] != "")) {
                $mes = $datos["mes"];
                if (intval($datos["mes"]) < 10) {
                    $mes = "0" . $datos["mes"];
                }
                $this->query["conditions"] .=" AND " . $campoFecha . " >= '" . $datos["anio"] . "-" . $mes . "-01'";
                $this->query["conditions"] .=" AND " . $campoFecha . " < '" . $this->fechaSQL($mes."/".$datos["anio"]) . "'";
                $this->query["groups"] = "";
            }
        }
        $this->query["orders"] = $campoFecha . " ASC";
    }
    /*private function condicionesFechaPeriodoAnterior($campoFecha, $datos, $paginacion) {
        if ($datos["agrupacion"] == "S") {
            $this->query["groups"] = "date_format(" . $campoFecha . ",'%Y-%m')";
        }
        $fecha = $this->obtenerPeriodoAnterior($paginacion);
        if ($fecha["fechaDesde"] != "") {
            $this->query["conditions"] .= " AND date_format(" . $campoFecha . ",'%Y-%m') >='" . $fecha["fechaDesde"] . "'";
            $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') <= '" . $fecha["fechaHasta"] . "'";
        } else {
            if (($datos["mes"] == "") && ($datos["anio"] != "")) {
                $intervalo["inicio"] = intval($datos["anio"]) - 1;
                $intervalo["inicio"].="-12";
                $intervalo["final"] = $datos["anio"];
                $intervalo["final"].="-11";
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') >= '" . $intervalo["inicio"] . "'";
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') <= '" . $intervalo["final"] . "'";
            }
            if (($datos["mes"] != "") && ($datos["anio"] != "")) {
                $mes = intval($datos["mes"]);
                $anio = intval($datos["anio"]);
                if ($mes == 1) {//enero
                    $anio--;
                    $mes = 13;
                }
                $mes--;
                if ($mes < 10) {
                    $mes = "0" . $mes;
                }
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') = '" . $anio . "-" . $mes . "'";
                $this->query["groups"] = "";
            }
        }
        $this->query["orders"] = $campoFecha . " ASC";
    }

    private function condicionesFecha($campoFecha, $datos, $paginacion) {
        if ($datos["agrupacion"] == "S") {
            $this->query["groups"] = "date_format(" . $campoFecha . ",'%Y-%m')";
        }
        if ($paginacion["fechaDesde"] != "") {
            $fechaInicio = explode("/", $paginacion["fechaDesde"]);
            $this->query["conditions"] .= " AND date_format(" . $campoFecha . ",'%Y-%m') >='" . $fechaInicio[1] . "-" . $fechaInicio[0] . "'";
            if ($paginacion["fechaHasta"] != "") {
                $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') <= '" . $fechaFinal[1] . "-" . $fechaFinal[0] . "'";
            }
        } else {
            if (($datos["mes"] == "") && ($datos["anio"] != "")) {
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y') = '" . $datos["anio"] . "'";
            }
            if (($datos["mes"] != "") && ($datos["anio"] != "")) {
                $mes = $datos["mes"];
                if (intval($datos["mes"]) < 10) {
                    $mes = "0" . $datos["mes"];
                }
                $this->query["conditions"] .=" AND date_format(" . $campoFecha . ",'%Y-%m') = '" . $datos["anio"] . "-" . $mes . "'";
                $this->query["groups"] = "";
            }
        }
        $this->query["orders"] = $campoFecha . " ASC";
    }*/

    public function __construct() {
        $this->query["fields"] = "";
        $this->query["tables"] = "";
        $this->query["conditions"] = "";
        $this->query["groups"] = "";
        $this->query["orders"] = "";
        $this->nuevosCampos = true;
        $this->alias = "";
    }

    private function obtenerIndicadorPrimario($datos, $paginacion = null, $bandera = null) {
        switch ($datos["idIndicador"]) {
            case 1://Total de causas penales ingresadas (radicadas)
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) 
                    as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2 AND jc.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 2://Total de causas penales terminadas por los jueces de Control y total de jueces de control
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial)/COUNT(DISTINCT(jc.idJuzgador)) as totalCount,year(cj.fechaTermino) as anio,
                    month(cj.fechaTermino) as mes,COUNT(cj.idCarpetaJudicial) as numerador,COUNT(DISTINCT(jc.idJuzgador)) as denominador";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial)
                    inner join tbljuzgados j on cj.cveJuzgado=j.cveJuzgado";
                $this->query["conditions"] = "cj.activo='S' AND j.activo='S' AND jc.activo='S'
                    AND cj.cveTipoCarpeta = 2 AND  cj.cveEstatusCarpeta=2";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 3://Total de ordenes de aprehension condedidas
                $this->query["fields"] = "sum(case when (o.cveRespuestaSolicitudOrden=2) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (o.cveRespuestaSolicitudOrden IN (1,2,3)) THEN 1 ELSE 0 END) AS denominador,sum(case when (o.cveRespuestaSolicitudOrden=2) 
                    THEN 1 ELSE 0 END)*100/count(o.idOrden) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblordenes o,tblsolicitudesordenes so,tbljuzgados j";
                $this->query["conditions"] = "so.idSolicitudOrden=o.idSolicitudOrden AND so.cveJuzgado=j.cveJuzgado
                    AND j.activo='S' AND so.cveEstatusSolicitudOrden IN (1,2,3)";
                $this->condicionesFecha("o.fechaRespuesta", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 331://Total de ordenes de aprehension negadas
                $this->query["fields"] = "sum(case when (o.cveRespuestaSolicitudOrden=1) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (o.cveRespuestaSolicitudOrden IN (1,2,3)) THEN 1 ELSE 0 END) AS denominador,sum(case when (o.cveRespuestaSolicitudOrden=1) 
                    THEN 1 ELSE 0 END)*100/count(o.idOrden) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblordenes o,tblsolicitudesordenes so,tbljuzgados j";
                $this->query["conditions"] = "so.idSolicitudOrden=o.idSolicitudOrden AND so.cveJuzgado=j.cveJuzgado
                    AND j.activo='S' AND so.cveEstatusSolicitudOrden IN (1,2,3)";
                $this->condicionesFecha("o.fechaRespuesta", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 332://Total de ordenes de aprehension parcialmente autorizadas
                $this->query["fields"] = "sum(case when (o.cveRespuestaSolicitudOrden=3) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (o.cveRespuestaSolicitudOrden IN (1,2,3)) THEN 1 ELSE 0 END) AS denominador,sum(case when (o.cveRespuestaSolicitudOrden=3) 
                    THEN 1 ELSE 0 END)*100/count(o.idOrden) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblordenes o,tblsolicitudesordenes so,tbljuzgados j";
                $this->query["conditions"] = "so.idSolicitudOrden=o.idSolicitudOrden AND so.cveJuzgado=j.cveJuzgado
                    AND j.activo='S' AND so.cveEstatusSolicitudOrden IN (1,2,3)";
                $this->condicionesFecha("o.fechaRespuesta", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 31://Total de cateos condedidoss
                $this->query["fields"] = "sum(case when (c.cveRespuestaSolicitudCateo=2) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (c.cveRespuestaSolicitudCateo=1) OR (c.cveRespuestaSolicitudCateo=2) OR (c.cveRespuestaSolicitudCateo=3) THEN 1 ELSE 0 END) denominador,sum(case when (c.cveRespuestaSolicitudCateo=2) THEN 1 ELSE 0 END)*100/count(c.idCateo) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblcateos c,tblsolicitudescateos sc, tbljuzgados j";
                $this->query["conditions"] = "c.idSolicitudCateo=sc.idSolicitudCateo AND sc.cveJuzgado=j.cveJuzgado
                    AND j.activo='S'";
                $this->condicionesFecha("c.fechaRegistro", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 32://Total de cateos negados
                $this->query["fields"] = "sum(case when (c.cveRespuestaSolicitudCateo=1) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (c.cveRespuestaSolicitudCateo=1) OR (c.cveRespuestaSolicitudCateo=2) OR (c.cveRespuestaSolicitudCateo=3) THEN 1 ELSE 0 END) denominador,sum(case when (c.cveRespuestaSolicitudCateo=1) THEN 1 ELSE 0 END)*100/count(c.idCateo) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblcateos c,tblsolicitudescateos sc, tbljuzgados j";
                $this->query["conditions"] = "c.idSolicitudCateo=sc.idSolicitudCateo AND sc.cveJuzgado=j.cveJuzgado
                    AND j.activo='S'";
                $this->condicionesFecha("c.fechaRegistro", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 33://Total de cateos autorizados parcialmente
                $this->query["fields"] = "sum(case when (c.cveRespuestaSolicitudCateo=3) THEN 1 ELSE 0 END) as numerador,
                    SUM(CASE WHEN (c.cveRespuestaSolicitudCateo=1) OR (c.cveRespuestaSolicitudCateo=2) OR (c.cveRespuestaSolicitudCateo=3) THEN 1 ELSE 0 END) denominador,sum(case when (c.cveRespuestaSolicitudCateo=3) THEN 1 ELSE 0 END)*100/count(c.idCateo) as totalCount,year(fechaRespuesta) anio,month(fechaRespuesta) as mes ";
                $this->query["tables"] = "tblcateos c,tblsolicitudescateos sc, tbljuzgados j";
                $this->query["conditions"] = "c.idSolicitudCateo=sc.idSolicitudCateo AND sc.cveJuzgado=j.cveJuzgado
                    AND j.activo='S'";
                $this->condicionesFecha("c.fechaRegistro", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 4: //sumatoria del tiempo de duracion de las audiencias efectivamente desahogadas ante jueces de control
                /* $this->query["fields"] = "COUNT(a.idAudiencia) as totalCount,year(a.fechaInicial) as year,
                  month(a.fechaInicial) as month,a.idAudiencia,date_format(SEC_TO_TIME( SUM(
                  TIME_TO_SEC(date_format(SEC_TO_TIME(TIMESTAMPDIFF(SECOND,a.fechaInicial,a.fechaFinal))
                  ,'%H:%i')))),'%H:%i') as sumatoria"; */
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                $this->query["fields"] = "SUM(time_to_sec(TIMEDIFF(a.fechaFinal,a.fechaInicial)))/3600 numerador,
                    year(a.fechaInicial) as anio,COUNT(a.idAudiencia) denominador,month(a.fechaInicial) as mes,                    
                    sec_to_time(SUM(time_to_sec(TIMEDIFF(a.fechaFinal,a.fechaInicial)))/COUNT(a.idAudiencia)) as totalCount ";
                $this->query["tables"] = "tblaudiencias a,tblsolicitudesaudiencias sa,tbljuzgados j";
                $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' AND sa.activo='S'
                    AND a.cveEstatusAudiencia = 2 AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND a.cveTipoCarpeta=2 AND TIMEDIFF(a.fechaFinal,a.fechaInicial)>0";
                $this->condicionesFecha("a.fechaInicial", $datos, $paginacion);
                break;
            case 5://Total de audiencias de control efectivamente desahogadas
                $this->query["fields"] = "* FROM(SELECT SUM(case when a.cveEstatusAudiencia=2 
                    THEN 1 ELSE 0 END) as numerador,(SUM(case when a.cveEstatusAudiencia=2 THEN 1 ELSE 0 END)/
                    SUM(case when a.cveEstatusAudiencia<3 THEN 1 ELSE 0 END)*100)  as totalCount,
                    SUM(case when a.cveEstatusAudiencia<3 THEN 1 ELSE 0 END) as denominador,
                    year(a.fechaInicial) as anio,month(a.fechaInicial) as mes,j.cveJuzgado";
                $this->query["tables"] = "tblaudiencias a,tblsolicitudesaudiencias sa,tbljuzgados j";
                $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' AND sa.activo='S'
                    AND (a.cveEstatusAudiencia = 1 OR a.cveEstatusAudiencia = 2) 
                    AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND a.cveTipoCarpeta=2 AND TIMEDIFF(a.fechaFinal,a.fechaInicial)>0"; //Etapa procesal
                $this->condicionesFecha("a.fechaInicial", $datos, $paginacion);
                $this->query["orders"].=") as con where con.totalCount>0";
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 6://Total de causas penales ingresadas
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) as sumatoria,COUNT(cj.idCarpetaJudicial) 
                    as totalCount,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 3 AND jc.activo='S' AND j.cveTipoJuzgado=2";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 7://Total de resoluciones dictadas (sentencias)
                $this->query["fields"] = "COUNT(iss.idImputadoSentencia) as sumatoria,
                    COUNT(iss.idImputadoSentencia) as totalCount,
                    year(a.fechaSentencia) as year,month(a.fechaSentencia) as month";
                $this->query["tables"] = "tblimputadossentencias iss,tblactuaciones a,tbljuzgados j,tblcarpetasjudiciales cj,
                    tbljuzgadorescarpetas jc,tbljuzgadores juz";
                $this->query["conditions"] = "iss.activo='S' AND a.idActuacion=iss.idActuacion AND cj.activo='S' AND cj.idCarpetaJudicial=
                    a.idReferencia AND jc.activo='S' AND jc.idCarpetaJudicial=cj.idCarpetaJudicial
                    AND a.activo='S' AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND (juz.cveTipoJuzgador=2 
                    OR juz.cveTipoJuzgador=3) AND juz.idJuzgador=jc.idJuzgador";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
            case 8://Sumatoria del tiempo de duracion efectiva de cada audiencia de juicio oral realizada / Total de audiencias de juicio oral efectivamente realizadas
                /* $this->query["fields"] = "count(a.idAudiencia) as totalCount,
                  date_format(SEC_TO_TIME( SUM( TIME_TO_SEC(date_format(SEC_TO_TIME(
                  TIMESTAMPDIFF(SECOND,a.fechaInicial,a.fechaFinal)),'%H:%i')))/count(a.idAudiencia) ),'%H:%i') as calculo,
                  year(a.fechaInicial) as anio, month(a.fechaInicial) as mes "; */
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                $this->query["fields"] = "SUM(time_to_sec(TIMEDIFF(a.fechaFinal,a.fechaInicial)))/3600 numerador,
                    year(a.fechaInicial) as anio,COUNT(a.idAudiencia) denominador,month(a.fechaInicial) as mes,                    
                    sec_to_time(SUM(time_to_sec(TIMEDIFF(a.fechaFinal,a.fechaInicial)))/COUNT(a.idAudiencia)) as totalCount ";
                $this->query["tables"] = "tblaudiencias a,tblsolicitudesaudiencias sa,tbljuzgados j";
                $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' AND sa.activo='S'
                    AND a.cveEstatusAudiencia = 2 AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND a.cveTipoCarpeta=3 AND TIMEDIFF(a.fechaFinal,a.fechaInicial)>0";
                $this->condicionesFecha("a.fechaInicial", $datos, $paginacion);
                break;
            case 9://Total de audiencias de juicio oral diferidas
                $this->query["fields"] = "count(*) as totalCount,count(*) as sumatoria,year(j.fechaInicial) as year,
                    month(j.fechaInicial) as month";
                $this->query["tables"] = "(SELECT count(*) as subtotal,juz.cveJuzgado,juz.cveDistrito,
                    juz.cveRegion,a.fechaInicial FROM tblaudiencias a,tbljuzgados juz";
                $this->query["conditions"] = "idReferencia!=0 AND a.activo='S' AND (a.cveCatAudiencia=90 OR a.cveCatAudiencia=91) 
                    AND juz.cveJuzgado=a.cveJuzgado AND juz.activo='S' AND a.cveTipoCarpeta=3
                    GROUP BY idReferencia) as j WHERE j.subtotal>1";
                $this->condicionesFecha("j.fechaInicial", $datos, $paginacion);
                break;
            case 10: //Total de detenciones declaradas legales por el juez de control
                $this->query["fields"] = "SUM(case when ic.LegalDetencion = 'S' THEN 1 ELSE 0 END) as numerador,
                    COUNT(*)  as denominador,(SUM(case when ic.LegalDetencion = 'S' THEN 1 
                    ELSE 0 END)/COUNT(*))*100 as totalCount,
                    year(cj.fechaRadicacion) as anio,month(cj.fechaRadicacion) as mes";
                $this->query["tables"] = "tblimputadoscarpetas ic,tblcarpetasjudiciales cj,tbljuzgados j,tbljuzgadorescarpetas jc";
                $this->query["conditions"] = "ic.activo = 'S' AND cj.activo = 'S' AND ic.idCarpetaJudicial=cj.idCarpetaJudicial
                    AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta<3
                    AND jc.activo='S' AND jc.idCarpetaJudicial=cj.idCarpetaJudicial";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 11://Total de causas penales terminadas por los jueces de Control
                $this->query["fields"] = "SUM(case when cj.cveEstatusCarpeta = 2 THEN 1 ELSE 0 END) as totalCount,
                    SUM(case when cj.cveEstatusCarpeta = 2 THEN 1 ELSE 0 END) as sumatoria
                    ,year(cj.fechaTermino) as year,month(cj.fechaTermino) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                break;
            case 12://Total de causas penales ingresadas a los Tribunales de Enjuiciamiento
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=3 AND j.cveTipoJuzgado=2"; //juicio
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 13://Total de causas penales ingresadas a los Control
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=2"; //control
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 14://Sumatoria(fecha de termino con juz de control-fecha de ingreso con el juez de control)/n
                $this->query["fields"] = "sum(datediff(fechaTermino,fechaRadicacion)) as numerador,count(idCarpetaJudicial) 
                    as denominador,sum(datediff(fechaTermino,fechaRadicacion))/
                    count(idCarpetaJudicial) as totalCount,year(fechaTermino) anio,month(fechaTermino) as mes";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.fechaTermino is not null AND cj.activo = 'S' AND cj.cveEstatusCarpeta=2
                    AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta=2";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 15://Sumatoria(fecha en que se determina el auto de apertura a juicio oral - fecha de ingreso con el juez de control)/n
                $this->query["fields"] = "sum(datediff(a.fechaRegistro,cj.fechaRadicacion)) as totalCount,
                    sum(datediff(a.fechaRegistro,cj.fechaRadicacion)) as sumatoria,
                    year(a.fechaRegistro) as year,month(a.fechaRegistro) as month";
                $this->query["tables"] = "tblactuaciones a,tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "a.cveTipoActuacion = 23 AND cj.idCarpetaJudicial = a.idReferencia AND cj.activo = 'S'
                    AND a.activo = 'S' AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'";
                $this->condicionesFecha("a.fechaRegistro", $datos, $paginacion);
                break;
            case 16: //Total de causas penales terminadas en juicio
                /* $this->query["fields"] = "sum(case when cj.cveEstatusCarpeta=2 THEN 1 ELSE 0 END) as numerador,year(cj.fechaRadicacion) as anio,
                  month(cj.fechaRadicacion) as mes,count(cj.idCarpetaJudicial) as denominador,
                  (sum(case when cj.cveEstatusCarpeta=2 THEN 1 ELSE 0 END)/count(cj.idCarpetaJudicial))*100 AS totalCount";
                  $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                  $this->query["conditions"] = "cj.activo = 'S' AND cj.cveTipoCarpeta = 3
                  AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'";
                  $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                  $this->alias=" as cveGeografia"; //alias para el juzgado, region o distrito
                  break; */
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaTermino) as year,month(cj.fechaTermino) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo = 'S' AND cj.cveTipoCarpeta = 3
                    AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND cj.cveEstatusCarpeta=2 AND j.cveTipoJuzgado=2";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                //$this->alias=" as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 17://Total de causas penales ingresadas a los Tribunales de Enjuiciamiento
                /* $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) 
                  as month,COUNT(*) as totalCount";
                  $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                  $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                  AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=3";//juicio
                  $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                  break; */
                $this->query["fields"] = "COUNT(*) as sumatoria,year(a.fechaInicio) as year,month(a.fechaInicio) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j, tblaperturasjuicio a,tblimputadoscarpetas ic ";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND "
                        . " a.idImputadoCarpeta=ic.idImputadoCarpeta and cj.idCarpetaJudicial=ic.idCarpetaJudicial  and a.activo='S'"; //juicio
                $this->condicionesFecha("a.fechaInicio", $datos, $paginacion);
                break;
            case 18://Suma(fecha de termino en el tribunal de enjuiciamiento - fecha de ingreso al tribunal de enjuiciamiento)/n
                $this->query["fields"] = "count(idCarpetaJudicial) as denominador,sum(datediff(fechaTermino,fechaRadicacion))/
                    count(idCarpetaJudicial) as totalCount,year(fechaTermino) anio,month(fechaTermino) as mes,
                    sum(datediff(fechaTermino,fechaRadicacion)) as numerador";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.fechaTermino is not null AND cj.activo = 'S' AND cj.cveEstatusCarpeta=2
                    AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta=3 AND j.cveTipoJuzgado=2"; //tribunal de enjuiciamiento
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 19: //Total de causas penales en que se dicta sentencia condenatoria en procedimiento abreviado o juicio oral
                $this->query["fields"] = "SUM(CASE WHEN a.cveTipoSentencia = 1 THEN 1 ELSE 0 END) AS numerador,COUNT(a.idActuacion) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (SUM(CASE WHEN a.cveTipoSentencia = 1 THEN 1 ELSE 0 END)/COUNT(a.idActuacion))*100 AS totalCount";
                $this->query["tables"] = "tblactuaciones a,tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.idCarpetaJudicial=a.idReferencia AND j.cveJuzgado=a.cveJuzgado AND a.cveTipoActuacion = 3 
                    AND cj.cveTipoCarpeta<4 AND j.activo='S' AND a.activo='S' AND cj.activo='S'";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 20: //Total de imputados a los que se les dictaron medidas cautelares distintas a la prision preventiva
                $this->query["fields"] = "count(ic.idImputadoCarpeta) as totalCount,count(ic.idImputadoCarpeta) as sumatoria,
                    year(mc.fechaInicio) as year ,month(mc.fechaInicio) as month";
                $this->query["tables"] = "tblimputadoscarpetas ic,tblmedidascautelares mc, tbltiposmedidascautelares tmc,
                    tblactuaciones as a,tbljuzgados as j";
                $this->query["conditions"] = "ic.idImputadoCarpeta = mc.idImputadoCarpeta
                    AND a.idActuacion=mc.idActuacion AND a.activo='S'
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND mc.cveTipoMedidaCautelar = tmc.cveTipoMedidaCautelar
                    AND mc.activo='S' AND tmc.activo='S' AND ic.activo='S' AND mc.cveTipoMedidaCautelar != 14";
                $this->condicionesFecha("mc.fechaInicio", $datos, $paginacion);
                break;
//            case 21: //Total de sentenciados en condenatoria con pena de prision
//                $this->query["fields"] = "SUM(CASE WHEN (imsa.cveTipoSancion=1) THEN 1 ELSE 0 END) AS numerador,COUNT(ic.idImputadoCarpeta) AS denominador,
//                    (SUM(CASE WHEN (imsa.cveTipoSancion=1) THEN 1 ELSE 0 END)/COUNT(ic.idImputadoCarpeta))*100 AS totalCount,YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes";
//                $this->query["tables"] = "tblactuaciones as a,tbljuzgados as j,tblimputadossanciones as imsa,
//                    tblimpofedelcarpetas as iodc,tblimputadossentencias as imse,tblimputadoscarpetas as ic";
//                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
//                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
//                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
//                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
//                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S'";
//                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
//                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
//                break;
            case 21: //Total de sentenciados en condenatoria con pena de prision
                $this->query["fields"] = " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalCount,COUNT(DISTINCT(ic.idImputadoCarpeta)) AS sumatoria,
                    YEAR(a.fechaSentencia) AS year ,MONTH(a.fechaSentencia) AS month";
                $this->query["tables"] = "tblactuaciones AS a,tbljuzgados AS j,tblimputadossanciones AS imsa,
                    tblimpofedelcarpetas AS iodc,tblimputadossentencias AS imse,tblimputadoscarpetas AS ic";
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S' AND imsa.cveTipoSancion=1";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
//            case 22: //Total de sentenciados con pena de prision menor o igual a 3 anios
//                $this->query["fields"] = "sum(case when  imsa.anioPrision<4 THEN 1 ELSE 0 END) as numerador,count(ic.idImputadoCarpeta) as denominador, 
//                    year(a.fechaSentencia) as anio,month(a.fechaSentencia) as mes,
//                    (sum(case when imsa.anioPrision<4 THEN 1 ELSE 0 END)/count(ic.idImputadoCarpeta))*100 as totalCount";
//                $this->query["tables"] = "tblactuaciones as a,tbljuzgados as j,tblimputadossanciones as imsa,
//                    tblimpofedelcarpetas as iodc,tblimputadossentencias as imse,tblimputadoscarpetas as ic";
//                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
//                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
//                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3 AND imsa.cveTipoSancion=1
//                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
//                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S'";
//                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
//                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
//                break;
            case 22: //Total de sentenciados en condenatoria con pena de prision menor o igual a 3 anios
                $this->query["fields"] = " COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalCount,COUNT(DISTINCT(ic.idImputadoCarpeta)) AS sumatoria,
                    YEAR(a.fechaSentencia) AS year ,MONTH(a.fechaSentencia) AS month";
                $this->query["tables"] = "tblactuaciones AS a,tbljuzgados AS j,tblimputadossanciones AS imsa,
                    tblimpofedelcarpetas AS iodc,tblimputadossentencias AS imse,tblimputadoscarpetas AS ic";
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S' AND imsa.cveTipoSancion=1 AND imsa.anioPrision<4";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
            case 147: //Sumatoria(fecha de termino con juz de control-fecha de ingreso con el juez de control: Sentencias + autos + sobreseimientos)/n, donde n=
                //Causas terminadas por sentencias + autos de apertura + sobreseimientos
                $geografia = "";
                switch ($datos["nivel"]) {
                    case 2: $geografia = ",j.cveRegion";
                        break;
                    case 3: $geografia = ",j.cveDistrito";
                        break;
                    case 4: $geografia = ",j.cveJuzgado";
                        break;
                }
                $this->query["fields"] = "year(fecha) as anio,month(fecha) as mes,sum(subCount) as denominador,sum(subSumatoria) as numerador
                    ,sum(subSumatoria)/sum(subCount) as totalCount";
                $this->query["conditions"] = "";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $con = $this->query["conditions"];
                $this->query["conditions"] = "";
                $this->condicionesFecha("a.fechaRegistro", $datos, $paginacion);
                $con2 = $this->query["conditions"];
                $this->query["conditions"] = "";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                $con3 = $this->query["conditions"];
                $this->query["conditions"] = "";
                $this->query["tables"] = "(SELECT count(*) as subCount,
                    sum(datediff(a.fechaSentencia,date_format(cj.fechaRadicacion,'%Y-%m-%d'))) 
                    as subSumatoria,j.cveJuzgado,j.cveDistrito,j.cveRegion,a.fechaSentencia as fecha
FROM tblactuaciones as a,tbljuzgados as j,tblcarpetasjudiciales cj
WHERE a.activo='S' AND j.activo='S' AND j.cveJuzgado=a.cveJuzgado
AND a.cveTipoActuacion=3 AND a.idReferencia=cj.idCarpetaJudicial AND cj.activo='S'
" . $con . "
AND cj.cveTipoCarpeta=2 GROUP BY date_format(a.fechaSentencia,'%Y-%m')" . $geografia . "
UNION ALL
SELECT COUNT(*) as subCount,
                    sum(datediff(a.fechaRegistro,cj.fechaRadicacion)) as subSumatoria,j.cveJuzgado,j.cveDistrito,j.cveRegion,a.fechaRegistro
FROM tblactuaciones a,tblcarpetasjudiciales cj,tbljuzgados j
WHERE a.cveTipoActuacion = 23 AND cj.idCarpetaJudicial = a.idReferencia AND cj.activo = 'S'
                    AND a.activo = 'S' AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta=2
                    " . $con2 . "
GROUP BY date_format(a.fechaRegistro,'%Y-%m')" . $geografia . "
UNION ALL
SELECT COUNT(*), sum(datediff(cj.fechaTermino,cj.fechaRadicacion)) as subSumatoria,j.cveJuzgado,j.cveDistrito,j.cveRegion,cj.fechaTermino
FROM tblcarpetasjudiciales cj,tbljuzgados j
WHERE cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta=2 
                    AND cj.cveEstatusCarpeta=2 AND cj.cveConclucion=5
                    " . $con3 . "
GROUP BY date_format(cj.fechaTermino,'%Y-%m')" . $geografia . ") as j";
                $this->query["conditions"] = "1=1";
                $this->condicionesFecha("j.fecha", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function obtenerIndicadorSecundario($datos, $paginacion = null, $bandera = null) {
        switch ($datos["idIndicador"]) {
            case 1://Total de jueces de control
                $this->query["fields"] = "COUNT(DISTINCT(jc.idJuzgador)) as sumatoria,
                    COUNT(DISTINCT(jc.idJuzgador)) as totalCount,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2 AND jc.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 2://Total de jueces de control
            /* case 3://Total de ordenes de aprehension solicitadas
              $this->query["conditions"] = "so.idSolicitudOrden=o.idSolicitudOrden
              AND j.cveJuzgado=so.cveJuzgado AND j.activo='S'";
              $this->condicionesFecha("o.fechaRegistro", $datos, $paginacion);
              break; */
            case 4: //total de audiencias de control efectivamente desahogadas
                $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' 
                    AND sa.activo='S' AND (a.cveEstatusAudiencia = 1 OR a.cveEstatusAudiencia = 2) 
                    AND j.cveJuzgado=a.cveJuzgado AND j.activo='S'";
                $this->condicionesFecha("a.fechaInicial", $datos, $paginacion);
                break;
            case 5://Total de audiencias de control programadas
                /* $this->query["tables"] .=",tblcataudiencias cta";
                  $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' AND sa.activo='S'
                  AND (a.cveEstatusAudiencia = 1 OR a.cveEstatusAudiencia = 2) AND j.cveJuzgado=a.cveJuzgado AND j.activo='S'
                  AND cta.cveCatAudiencia = sa.cveCatAudiencia AND cta.activo='S' AND cta.cveTipoAudiencia=1"; //audiencia programada
                  $this->condicionesFecha("a.fechaInicial", $datos, $paginacion); */
                break;
            case 6://Total de jueces de enjuiciamiento
                $this->query["fields"] = "COUNT(DISTINCT(jc.idJuzgador)) as sumatoria,
                    COUNT(DISTINCT(jc.idJuzgador)) as totalCount,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 3 AND jc.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 7://Total de Jueces de Enjuiciamiento (sentencias)
                $this->query["fields"] = "COUNT(DISTINCT(jc.idJuzgador)) as sumatoria,
                    COUNT(DISTINCT(jc.idJuzgador)) as totalCount,
                    year(a.fechaSentencia) as year,month(a.fechaSentencia) as month";
                $this->query["tables"] = "tblimputadossentencias iss,tblactuaciones a,tbljuzgados j,tblcarpetasjudiciales cj,
                    tbljuzgadorescarpetas jc,tbljuzgadores juz";
                $this->query["conditions"] = "iss.activo='S' AND a.idActuacion=iss.idActuacion AND cj.activo='S' AND cj.idCarpetaJudicial=
                    a.idReferencia AND jc.activo='S' AND jc.idCarpetaJudicial=cj.idCarpetaJudicial
                    AND a.activo='S' AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND (juz.cveTipoJuzgador=2 
                    OR juz.cveTipoJuzgador=3) AND juz.idJuzgador=jc.idJuzgador";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
            case 9://Total de audiencias de juicio oral programadas
                $this->query["fields"] = "count(a.idAudiencia) as totalCount,count(a.idAudiencia) as sumatoria,
                    year(a.fechaInicial) as year, month(a.fechaInicial) as month";
                $this->query["tables"] = "tblaudiencias a,tblsolicitudesaudiencias sa,tbljuzgados j";
                $this->query["conditions"] = "sa.idSolicitudAudiencia = a.idSolicitudAudiencia AND a.activo='S' AND sa.activo='S'
                    AND (a.cveEstatusAudiencia = 1 OR a.cveEstatusAudiencia = 2) 
                    AND j.cveJuzgado=a.cveJuzgado AND j.activo='S' AND sa.cveEtapaProcesal=3";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->condicionesFecha("a.fechaInicial", $datos, $paginacion);
                $this->nuevosCampos = true;
                break;
            case 10: //Total de detenciones vistas por los jueces de control
                $this->query["conditions"] = "ic.activo = 'S' AND cj.activo = 'S' AND ic.idCarpetaJudicial=cj.idCarpetaJudicial
                    AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND ic.detenido = 'S' AND cj.cveTipoCarpeta=2";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 11://Total de causas penales ingresadas con los jueces de Control
                $this->query["fields"] = "year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month,
                    COUNT(cj.idCarpetaJudicial) as totalCount,COUNT(cj.idCarpetaJudicial) as sumatoria";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                $this->nuevosCampos = true;
                $this->alias = "";
                break;
            case 12://Total de causas penales ingresadas a los Jueces de Control
                $this->query["fields"] = "year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month,
                    COUNT(cj.idCarpetaJudicial) as totalCount,COUNT(cj.idCarpetaJudicial) as sumatoria";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                $this->nuevosCampos = true;
                $this->alias = "";
                break;
            case 13://Total de causas penales terminadas por los Jueces de Control en el periodo
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaTermino) as year,month(cj.fechaTermino) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=2 AND cveEstatusCarpeta=2"; //control y terminadas
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                break;
            case 15://Total de Autos de apertura a Juicio Oral
                $this->query["fields"] = "COUNT(*) as totalCount,COUNT(*) as sumatoria,
                    year(a.fechaRegistro) as year,month(a.fechaRegistro) as month";
                $this->query["tables"] = "tblactuaciones a,tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "a.cveTipoActuacion = 23 AND cj.idCarpetaJudicial = a.idReferencia AND cj.activo = 'S'
                    AND a.activo = 'S' AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->alias = "";
                $this->condicionesFecha("a.fechaRegistro", $datos, $paginacion);
                break;
            case 16://Total de causas penales ingresadas a los Tribunales de Enjuiciamiento
                /* $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) as totalCount,year(cj.fechaTermino) as year,
                  month(cj.fechaTermino) as month,COUNT(cj.idCarpetaJudicial) as sumatoria";
                  $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                  $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                  AND cj.cveTipoCarpeta = 3";
                  $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                  $this->nuevosCampos=true;
                  break; */
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) as totalCount,year(cj.fechaRadicacion) as year,
                    month(cj.fechaRadicacion) as month,COUNT(cj.idCarpetaJudicial) as sumatoria";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 3 AND j.cveTipoJuzgado=2";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
//                $this->alias=" as cveGeografia"; //alias para el juzgado, region o distrito
                $this->alias = "";
                $this->nuevosCampos = true;
                break;
            case 17://Total de causas penales terminadas por los Jueces de Enjuiciamiento en el periodo
                /* $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaTermino) as year,month(cj.fechaTermino) 
                  as month,COUNT(*) as totalCount";
                  $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                  $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                  AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=3 AND cveEstatusCarpeta=2";//juicio y terminadas
                  $this->query["groups"] = "";
                  $this->query["orders"] = "";
                  $this->nuevosCampos=true;
                  $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                  break; */
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaTermino) as year,month(cj.fechaTermino) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=3 AND cveEstatusCarpeta=2"; //juicio y terminadas
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->alias = "";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                break;
            case 20:
                $this->query["conditions"] = "ic.idImputadoCarpeta = mc.idImputadoCarpeta 
                    AND a.idActuacion=mc.idActuacion AND a.activo='S'
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND mc.cveTipoMedidaCautelar = tmc.cveTipoMedidaCautelar
                    AND mc.activo='S' AND tmc.activo='S' AND ic.activo='S'";
                $this->condicionesFecha("mc.fechaInicio", $datos, $paginacion);
                break;
            case 21: //Total de sentenciados en condenatoria
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S'";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
            case 22: //Total de sentenciados con pena de prision
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S' AND imsa.cveTipoSancion=1";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                break;
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function obtenerPromocionesPendientes($datos, $paginacion = null, $periodoAnterior = false) {
        $this->query["fields"] = "count(idActuacion) as totalCount,count(idActuacion) as sumatoria
            ,month(a.fechaRegistro) as month, year(a.fechaRegistro) as year";
        $this->query["tables"] = "tblactuaciones as a,tbljuzgados as j ";
        $this->query["conditions"] = "a.idActuacion not in (select aa.idActuacionPadre 
            from htsj_sigejupe.tblantecedesactuaciones as aa where aa.activo='S') and a.activo = 'S' and a.cveTipoActuacion =1
            and j.activo='S' and j.cveJuzgado=a.cveJuzgado";
        $this->query["groups"] = "";
        $this->query["orders"] = "";
        $this->nuevosCampos = true;
        if ($periodoAnterior) {
            $this->condicionesFechaPeriodoAnterior("a.fechaRegistro", $datos, $paginacion);
        } else {
            $this->condicionesFecha("a.fechaRegistro", $datos, $paginacion);
        }
        return $this->obtenerResultado($datos, $paginacion);
    }

    private function obtenerIndicadorPeriodoAnterior($datos, $paginacion = null, $bandera = false) {
        switch ($datos["idIndicador"]) {
            case 1://Total de causas de control pendientes del periodo anterior
                $this->query["fields"] = "(COUNT(cj.idCarpetaJudicial)-sum(case when cj.cveEstatusCarpeta=2 then 1 else 0 end)) 
                    as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 2 AND jc.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFechaPeriodoAnterior("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 6://Total de causas de control pendientes del periodo anterior
                $this->query["fields"] = "(COUNT(cj.idCarpetaJudicial)-sum(case when cj.cveEstatusCarpeta=2 then 1 else 0 end)) 
                    as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.cveJuzgado=cj.cveJuzgado AND j.activo='S'
                    AND cj.cveTipoCarpeta = 3 AND jc.activo='S'";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFechaPeriodoAnterior("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 7://Sobreseimiento de juicio
                $this->query["fields"] = "year(cj.fechaTermino) as year,month(cj.fechaTermino) as month,
                    sum(case when (cj.cveConclucion=12) then 1 else 0 end) as sumatoria";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND cj.cveEstatusCarpeta=2";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                break;
            case 13://Total de causas penales pendientes a los Control
                $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=2 AND cveEstatusCarpeta!=2"; //juicio
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFechaPeriodoAnterior("cj.fechaRadicacion", $datos, $paginacion);
                break;
            case 17://Total de causas penales pendientes a los Tribunales de Enjuiciamiento
                /* $this->query["fields"] = "COUNT(*) as sumatoria,year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) 
                  as month,COUNT(*) as totalCount";
                  $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j";
                  $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                  AND year(cj.fechaRadicacion)>1999 AND cj.cveTipoCarpeta=3 AND cveEstatusCarpeta!=2";//juicio
                  $this->query["groups"] = "";
                  $this->query["orders"] = "";
                  $this->nuevosCampos=true;
                  $this->condicionesFechaPeriodoAnterior("cj.fechaRadicacion", $datos, $paginacion);
                  break; */
                $this->query["fields"] = "COUNT(*) as sumatoria,year(a.fechaInicio) as year,month(a.fechaInicio) 
                    as month,COUNT(*) as totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj,tbljuzgados j, tblimputadoscarpetas ic, tblaperturasjuicio a ";
                $this->query["conditions"] = " cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND a.idImputadoCarpeta=ic.idImputadoCarpeta "
                        . "AND cj.idCarpetaJudicial=ic.idCarpetaJudicial and a.idAudienciaJuicio is null"; //juicio
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->nuevosCampos = true;
                $this->condicionesFechaPeriodoAnterior("a.fechaInicio", $datos, $paginacion);
                break;
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function agregarGroupBy($grupo) {
        if ($this->query["groups"] != "") {
            $this->query["groups"].=",";
        }
        $this->query["groups"].=$grupo;
    }

    private function conversorValor($valor, $tipo) {
        $numero = "";
        if (($valor == "") || ($valor == null)) {
            return 0;
        }
        switch ($tipo) {
            case 1: //horas y minutos => en horas
                $aux = explode(":", $valor);
                $horas = intval($aux[0], 10);
                $minutos = intval($aux[1], 10);
                $numero = ($minutos / 60) + $horas;
                break;
            case 2: //horas y minutos => en minutos
                $aux = explode(":", $valor);
                $horas = intval($aux[0], 10);
                $minutos = intval($aux[1], 10);
                $numero = $minutos + $horas * 60;
                break;
            case 3: return intval($valor); //porcentaje
            case 4: return $valor; //reales
            case 6: return $valor;
        }
        return $numero;
    }

    private function obtenerGeografica($subConsulta, $nivel) {
        switch ($nivel) {
            case 1: return null;
            case 2: return $subConsulta->cveRegion;
            case 3: return $subConsulta->cveDistrito;
            case 4: return $subConsulta->cveJuzgado;
        }
    }

    private function paginar($numReg) {
        $indexI = (intVal($this->paginacion["pag"]) - 1) * intVal($this->paginacion["cantxPag"]);
        $indexF = intVal($this->paginacion["pag"]) * intVal($this->paginacion["cantxPag"]);
        if (($numReg >= $indexI) && ($numReg < $indexF)) {
            return true;
        }
        return false;
    }

    private function descripcion($idIndicador) {
        switch ($idIndicador) {
            case 1: return ',"desNumerador":"Total de Causas de Control Ingresadas + Total de Causas de Control Pendientes del Periodo Anterior + Total de Promociones Pendientes del Periodo Actual + Total de Promociones Pendientes del Periodo Anterior","desDenominador":"Total de Jueces de Control"}';
            case 2: return ',"desNumerador":"Causas de Control Terminadas por Jueces de Control","desDenominador":"Jueces de Control"}';
            case 3: return ',"desNumerador":"Total de \u00D3rdenes de Aprehensi\u00F3n Concedidas","desDenominador":"Total de \u00D3rdenes de Aprehensi\u00F3n Solicitadas"}';
            case 331: return ',"desNumerador":"Total de \u00D3rdenes de Aprehensi\u00F3n Negadas","desDenominador":"Total de \u00D3rdenes de Aprehensi\u00F3n Solicitadas"}';
            case 332: return ',"desNumerador":"Total de \u00D3rdenes de Aprehensi\u00F3n Autorizadas Parcialmente","desDenominador":"Total de \u00D3rdenes de Aprehensi\u00F3n Solicitadas"}';
            case 31: return ',"desNumerador":"Total de Cateos Concedidos","desDenominador":"Total de Cateos Solicitados"}';
            case 32: return ',"desNumerador":"Total de Cateos Negados","desDenominador":"Total de Cateos Solicitados"}';
            case 33: return ',"desNumerador":"Total de Cateos Autorizados Parcialmente","desDenominador":"Total de Cateos Solicitados"}';
            case 4: return ',"desNumerador":"Duraci\u00F3n (horas) de Audiencias Terminadas ante Jueces de Control","desDenominador":"Total de Audiencias de Control Terminadas"}';
            case 5: return ',"desNumerador":"Total de Audiencias de Control efectivamente desahogadas","desDenominador":"Total de Audiencias de Control Programadas"}';
            case 6: return ',"desNumerador":"Total de Causas de Enjuiciamiento Ingresadas + Total de Causas de Enjuiciamiento Pendientes del Periodo Anterior","desDenominador":"Total de Jueces de Enjuiciamiento"}';
            case 7: return ',"desNumerador":"Total de Resoluciones (Sentencias) dictadas + Causas de Juicio Terminadas por Sobreseimiento","desDenominador":"Total de Jueces de Tribunal de Enjuiciamiento"}';
            case 8: return ',"desNumerador":"Duraci\u00F3n (horas) de Audiencias de Juicio Oral","desDenominador":"Total de Audiencias de Juicio Oral"}';
            case 9: return ',"desNumerador":"Total de audiencias de juicio oral diferidas","desDenominador":"Total de audiencias de juicio oral programadas"}';
            case 10: return ',"desNumerador":"Total de Detenciones declaradas Legales por Juez de Control","desDenominador":"Total de Detenciones vistas por los Jueces de Control"}';
            case 11: return ',"desNumerador":"Total de Causas de Control Terminadas","desDenominador":"Total de Causas de Control Ingresadas"}';
            case 12: return ',"desNumerador":"Total de Causas de Tribunal de Enjuiciamiento Ingresadas","desDenominador":"Total de Causas de Control Ingresadas"}';
            case 13: return ',"desNumerador":"Total de Causas de Control ingresadas en el periodo + Total de Causas de Control pendientes en el periodo anterior","desDenominador":"Total de Causas de Control Terminadas"}';
            case 14: return ',"desNumerador":"Duraci\u00F3n (D\u00EDas) de Causas de Control Terminadas","desDenominador":"Total de Causas de Control Terminadas"}';
            case 15: return ',"desNumerador":"Duraci\u00F3n (D\u00EDas) de Apertura a Juicio Oral de una Causa de Control","desDenominador":"Total de Autos de Apertura a Juicio"}';
            case 16: return ',"desNumerador":"Total de Causas Terminadas de Juicio","desDenominador":"Total de Causas ingresadas a los Tribunales de Enjuiciamiento"}';
            case 17: return ',"desNumerador":"Total de Causas de Juicio ingresadas en el periodo + Total de Causas de Juicio pendientes en el periodo anterior","desDenominador":"Total de Causas de Juicio Terminadas"}';
            case 18: return ',"desNumerador":"Duraci\u00F3n de T\u00E9rmino de Causas de Juicio","desDenominador":"Total de Causas de Juicio Terminadas"}';
            case 19: return ',"desNumerador":"Total de Causas en Procedimiendo Abreviado o Juicio Oral con Sentencia Condenatoria","desDenominador":"Total de Causas en Procedimiendo Abreviado o Juicio Oral con alguna Sentencia"}';
            case 20: return ',"desNumerador":"Total de Imputados con Medida Cautelar Distinta a Prisi\u00F3n Preventiva","desDenominador":"Total de Imputados con Medida Cautelar dictada por Jueces de Control"}';
            case 21: return ',"desNumerador":"Total de Sentenciados en Condenatoria o Mixta con Pena de Prisi\u00F3n","desDenominador":"Total de Sentenciados en Condenatoria o Mixta"}';
            case 22: return ',"desNumerador":"Total de Sentenciados con Pena de Prisi\u00F3n menor o igual a tres a\u00F1os","desDenominador":"Total de Sentenciados con Pena de Prisi\u00F3n"}';
            case 147: return ',"desNumerador":"Duraci\u00F3n (D\u00EDas) de Causas de Control Terminadas","desDenominador":"Total de Causas de Control Terminadas (Sentencias + Autos de Apertura a Juicio + Sobreseimiento)"}';
        }
    }

    private function aplicarFormulaIndicador($datos, $paginacion = null) {
        $json = "";
        switch ($datos["idIndicador"]) {
            case 1:    //                                               6=promedio
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6);
            case 2:    //calculando promedio                            
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //Promedio                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"6"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 3:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 331:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 332:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
             case 31:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 32:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 33:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%                    //id del indicador
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;    
            
            case 4:    //calculando promedio                            2=minutos
                //return $this->calcularIndicadorJson($datos, $paginacion, 2);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //hora y minutos
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"5"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 5:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 6:    //calculando porcentaje                          6=promedio,true=ignorar el periodo anterior
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6, true);
            case 7:    //calculando promedio     
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6);
            case 7:    //calculando promedio                            6=promedio,1=sin porciento,false=ignorar el periodo anterior
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6,1,false);
            /* $consulta=$this->obtenerIndicadorPrimario($datos, $paginacion);
              $paginacion["paginacion"]=false;//se calculan el total de rgistros obtenidos en el query anterior
              $pagAux=$this->obtenerIndicadorPrimario($datos, $paginacion);
              $decode_JSON = new Decode_JSON();
              $pag = $decode_JSON->decode($pagAux, true);                                                     //Promedio                    //id del indicador
              $consulta=substr($consulta,0,-1).',"totalRegistros":"'.$pag["resultados"][0]->totalCount.'","metrica":"6"'.$this->descripcion($datos["idIndicador"]);
              return $consulta; */
            case 8:    //calculando promedio                            2=minutos
                //return $this->calcularIndicadorJson($datos, $paginacion, 2);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //hora y minutos
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"5"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 9:    //calculando promedio                            3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 10:    //calculando porcentaje                          3=entero,100=porciento
                //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 11:    //calculando porcentaje                            3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 12:     //calculando porcentaje                            3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 13:    //                                               6=promedio
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6);
            case 14:    //el indicador se puede calcular en una sola sentencia query
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 15;    //calculando porcentaje                            4=dias
                return $this->calcularIndicadorJson($datos, $paginacion, 4);
            case 16:    //calculando porcentaje                          3=entero,100=porciento
                /* $consulta=$this->obtenerIndicadorPrimario($datos, $paginacion);
                  $paginacion["paginacion"]=false;//se calculan el total de rgistros obtenidos en el query anterior
                  $pagAux=$this->obtenerIndicadorPrimario($datos, $paginacion);
                  $decode_JSON = new Decode_JSON();
                  $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                  $consulta=substr($consulta,0,-1).',"totalRegistros":"'.$pag["resultados"][0]->totalCount.'","metrica":"3"'.$this->descripcion($datos["idIndicador"]);
                  return $consulta; */
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 17:    //                                               6=promedio
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6);
            case 18;    //el indicador se puede calcular en una sola sentencia query
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 19:    //calculando promedio                            3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 20:    //calculando promedio                            3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 21:    //calculando porcentaje                          3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
//            case 21:    //calculando porcentaje                          3=entero,100=porciento
//                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
//                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                $decode_JSON = new Decode_JSON();
//                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
//                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
//                return $consulta;
            case 22:    //calculando porcentaje                          3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
//            case 22:    //calculando porcentaje                          3=entero,100=porciento
//                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
//                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                $decode_JSON = new Decode_JSON();
//                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
//                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
//                return $consulta;
            case 23:
                return $this->calcularIndicadorJsonComplejo($datos, $paginacion, 6);
            case 24:    //calculando promedio                        
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 22:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 147: //calculando promedio                            4=dias
                //el indicador se puede calcular en una sola sentencia query
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
        }
        return $json;
    }

    private function calcularIndicadorJsonComplejo($datos, $paginacion, $tipoValor, $porciento = 1, $periodoAnterior = null) {
        $paginacion["cantxPag"] = 5000;
        $paginacion["pag"] = 1;
        $consulta1 = $this->obtenerIndicadorPrimario($datos, $paginacion);
        //return $consulta1;
        if (intval($datos["detalles"] == "DETALLE")) {//detalles (ultimo nivel de la introspeccion)
            return $consulta1;
        }
        $agrupacion = "S";
        if ($datos["agrupacion"] == $agrupacion) {
            $agrupacion = null;
        }
        $decode_JSON = new Decode_JSON();
        $promociones = ""; //promociones pendientes del periodo. Tiene sentido solo para el primer indicador
        $promocionesPA = ""; //promociones pendientes del periodo anterior. Tiene sentido solo para el primer indicador
        if (intval($datos["idIndicador"]) == 1) {//sumar las promociones pendientes del periodo y periodo anterior
            $promociones = $this->obtenerPromocionesPendientes($datos, $paginacion);
            $promocionesPA = $this->obtenerPromocionesPendientes($datos, $paginacion, true);
            $promociones = $decode_JSON->decode($promociones, true);
            $promocionesPA = $decode_JSON->decode($promocionesPA, true);
            $promociones = new Matrizrelacion($promociones, $datos["nivel"], $agrupacion);
            $promocionesPA = new Matrizrelacion($promocionesPA, $datos["nivel"], $agrupacion);
        }
        $jsonConsulta1 = $decode_JSON->decode($consulta1, true);
        $consulta2 = $this->obtenerIndicadorSecundario($datos, $paginacion);
        //return $consulta2;
        $indicador3 = "";
        if ($agrupacion == null) {
            $consulta3 = $this->obtenerIndicadorPeriodoAnterior($datos, $paginacion);
            $jsonConsulta3 = $decode_JSON->decode($consulta3, true);
            $matrizAux = new Matrizrelacion($jsonConsulta3, $datos["nivel"], $agrupacion);
        }
        $matriz = new Matrizrelacion($jsonConsulta1, $datos["nivel"], $agrupacion);

        $totalCount = 0;
        $subtotal = 0;
        $jsonConsulta2 = $decode_JSON->decode($consulta2, true);
        $json = '{"Estatus":"ok","resultados":[';
        $mesAux = "";
        $anioAux = "";
        for ($i = 0; $i < $jsonConsulta2["totalCount"]; $i++) {
            $anio = $jsonConsulta2["resultados"][$i]->year;
            $mes = $jsonConsulta2["resultados"][$i]->month;
            $mesAux = $mes;
            $anioAux = $anio;
            $geografia = $this->obtenerGeografica($jsonConsulta2["resultados"][$i], $datos["nivel"]);
            $indicador1 = $matriz->getElemento($geografia, $anio, $mes);
            $indicadorProm = ""; //indicador de promociones pendientes del periodo. Tiene sentido solo para el primer indicador
            $indicadorPromAnt = ""; //indicador de promociones pendientes del periodo anterior. Tiene sentido solo para el primer indicador
            $prom = ""; //Tiene sentido solo para el primer indicador
            if (intval($datos["idIndicador"]) == 1) {
                $indicadorProm = $promociones->getElemento($geografia, $anio, $mes);
                if ($agrupacion == null) {
                    $prom = ' + ' . $indicadorProm;
                }else{
                    $prom = ' + 0';
                }
            }
            if ($periodoAnterior == null) {
                $mes = intval($mes);
                $anio = intval($anio);
                if ($mes == 1) {//enero
                    $anio--;
                    $mes = 13;
                }
                $mes--;
            }
            if (intval($datos["idIndicador"]) == 1) {
                $indicadorPromAnt = $promocionesPA->getElemento($geografia, $anio, $mes);
                if ($agrupacion == null) {
                    $prom.= ' + ' . $indicadorPromAnt;
                }else{
                    $prom.= ' + 0';
                }
            }
            if ($agrupacion == null) {
                $indicador3 = $matrizAux->getElemento($geografia, $anio, $mes);
            }
            if (($indicador1 != "") || ($indicador3 != "")) {
                if ($this->paginar($totalCount)) {
                    $aux0 = $this->conversorValor($indicador1, $tipoValor);
                    $aux = 0;
                    $jsonAux='';
                    $totalPromociones=0;
                    if ($agrupacion == null) {
                        $aux = $this->conversorValor($indicador3, $tipoValor);
                        $totalPromociones = $this->conversorValor($indicadorProm, $tipoValor) + $this->conversorValor($indicadorPromAnt, $tipoValor);
                    }
                    if(($datos["idIndicador"]>22)&&($datos["idIndicador"]<26)){//indicadores del MASC
                        $jsonAux='"Ciudad":"'.$jsonConsulta2["resultados"][$i]->Ciudad.'",'; 
                    }
                    $promedio = (($aux0 + $aux + $totalPromociones) / $jsonConsulta2["resultados"][$i]->totalCount) * $porciento;
                    $json.='{"totalCount":"' . $promedio . '",';
                    $json.='"anio":"' . $anioAux . '",';
                    $json.='"mes":"' . $mesAux . '",';
                    $json.=$jsonAux;
                    $json.='"numerador":"' . ($indicador1 + $aux + $totalPromociones) . '",';
                    $json.='"numeradorC":"' . ' = (' . $aux0 . ' + ' . $aux . $prom . ')' . '",';
                    $json.='"cveGeografia":"' . $geografia . '",';
                    $json.='"denominador":"' . $jsonConsulta2["resultados"][$i]->totalCount . '"},';
                    // $json.='"totalCount":"' . $indicador1 . '"},';
                    $subtotal++;
                }
                $totalCount++;
            }
        }
        if (($i != 0) && ($subtotal != 0)) {
            $json = substr($json, 0, -1);
        }
        $json.='],"totalCount":"' . $subtotal . '",';
        $json.='"metrica":"' . $tipoValor . '",';
        $json.='"totalRegistros":"' . $totalCount . '"' . $this->descripcion($datos["idIndicador"]);
        return $json;
    }
    
    private function calcularIndicadorJson($datos, $paginacion, $tipoValor, $porciento = 1) {
        $paginacion["cantxPag"] = 5000;
        $paginacion["pag"] = 1;
        $consulta1 = $this->obtenerIndicadorPrimario($datos, $paginacion);
        //return $consulta1;
        if (intval($datos["detalles"] == "DETALLE")) {//detalles (ultimo nivel de la introspeccion)
            return $consulta1;
        }
        $agrupacion = "S";
        if ($datos["agrupacion"] == $agrupacion) {
            $agrupacion = null;
        }
        $decode_JSON = new Decode_JSON();
        $jsonConsulta1 = $decode_JSON->decode($consulta1, true);
        $consulta2 = $this->obtenerIndicadorSecundario($datos, $paginacion);
        //return $consulta2;
        $matriz = new Matrizrelacion($jsonConsulta1, $datos["nivel"], $agrupacion);
        $totalCount = 0;
        $subtotal = 0;
        $jsonConsulta2 = $decode_JSON->decode($consulta2, true);
        $json = '{"Estatus":"ok","resultados":[';
        $aux12 = "";
        for ($i = 0; $i < $jsonConsulta2["totalCount"]; $i++) {
            $anio = $jsonConsulta2["resultados"][$i]->year;
            $mes = $jsonConsulta2["resultados"][$i]->month;
            $geografia = $this->obtenerGeografica($jsonConsulta2["resultados"][$i], $datos["nivel"]);
            $indicador1 = $matriz->getElemento($geografia, $anio, $mes);
            $aux12.="," . $geografia . "/" . $anio . "/" . $mes . ":" . $indicador1;
            if ($indicador1 != "") {
                if ($this->paginar($totalCount)) {
                    $promedio = ($this->conversorValor($indicador1, $tipoValor) / $jsonConsulta2["resultados"][$i]->totalCount) * $porciento;
                    $json.='{"totalCount":"' . $promedio . '",';
                    $json.='"anio":"' . $anio . '",';
                    $json.='"mes":"' . $mes . '",';
                    $json.='"numerador":"' . $indicador1 . '",';
                    $json.='"cveGeografia":"' . $geografia . '",';
                    $json.='"denominador":"' . $jsonConsulta2["resultados"][$i]->totalCount . '"},';
                    // $json.='"totalCount":"' . $indicador1 . '"},';
                    $subtotal++;
                }
                $totalCount++;
            }
        }
        if (($i != 0) && ($subtotal != 0)) {
            $json = substr($json, 0, -1);
        }
        $json.='],"totalCount":"' . $subtotal . '",';
        $json.='"aux12":"' . $aux12 . '",';
        $json.='"agrupacion":"' . $agrupacion . '",';
        $json.='"metrica":"' . $tipoValor . '",';
        $json.='"totalRegistros":"' . $totalCount . '"' . $this->descripcion($datos["idIndicador"]);
        return $json;
    }

    private function obtenerResultado($datos, $paginacion = null, $bandera = null) {
        switch ($datos["nivel"]) {
            case 1: break;
            case 2:
                if (($datos["idIndicador"] > 22) && ($datos["idIndicador"] < 26)) {//INDICADORES DEL MASC
                    $this->agregarGroupBy("cveRegion");
                } else {
                    $this->agregarGroupBy("j.cveRegion");
                    if ($this->nuevosCampos) {
                        $this->query["fields"] .= ",j.cveRegion" . $this->alias;
                    }
                }
                break;
            case 3: $this->agregarGroupBy("j.cveDistrito");
                if ($this->nuevosCampos) {
                    $this->query["fields"] .= ",j.cveDistrito" . $this->alias;
                }
                break;
            case 4: $this->agregarGroupBy("j.cveJuzgado");
                if ($this->nuevosCampos) {
                    $this->query["fields"] .= ",j.cveJuzgado" . $this->alias;
                }
                break;
            case 5://DETALLES

                break;
        }
        $this->nuevosCampos = false;
        if ($datos["cveRegion"] != "") {
            $this->query["conditions"].=" AND j.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $this->query["conditions"].=" AND j.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["cveJuzgado"] != "") {
            $this->query["conditions"].=" AND j.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "DETALLE") {
                $aux = "count(x.idImputadoCarpeta) as totalCount";
            }
            $this->query["fields"] = $aux . " FROM(SELECT " . $this->query["fields"];
            $this->query["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        $resultado = $SelectDao->selectDAO($this->query, null, $paginacion, false, $bandera);
        return $resultado;
    }

    public function consultarIndicadorSeleccionado($datos, $paginacion = null) {
        $this->paginacion = array();
        if ($paginacion != null) {
            $this->paginacion["cantxPag"] = $paginacion["cantxPag"];
            $this->paginacion["pag"] = $paginacion["pag"];
        }
        return $this->aplicarFormulaIndicador($datos, $paginacion);
    }
    
    private function getFechaBaseDatos($cmd=null){//1=anio,2=mes,3=dia,4=hora:miutos
        $params = array();
        $select = new SelectDAO();
        $params["fields"] = "DATE_FORMAT(now(),'%d/%m/%Y %H:%i') AS fecha";
        $json = $select->selectDAO($params);
        $decode_JSON = new Decode_JSON();
            $json = $decode_JSON->decode($json, true);
        if($cmd==null){
            return $json["resultados"][0]->fecha;
        }else{
            $fecha = explode("/", $json["resultados"][0]->fecha);
            $aux = explode(" ", $fecha[2]);
            switch($cmd){
                case 1: return intval($aux[0]);//anio
                case 2: return intval($fecha[1]);//mes
                case 3: return intval($fecha[0]);//dias
                case 4: return intval($aux[1]);//horas:minutos
            }
        }
    }

}
