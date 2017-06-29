<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once("Matrizrelacion.Class.php");
include_once("IndicadoresMASCController.Class.php");

class IndicadoresSetecController {

    private $query;
    private $paginacion;
    private $nuevosCampos;
    private $alias;

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
    }

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
            /* case 39://Porcentaje de asuntos radicados en el nuevo sistema de justicia penal
              $this->query["fields"] = "sum(case when cj.fechaRadicacion>='2016-06-18 00:00:00' then 1 else 0 end) as numerador,
              count(cj.idCarpetaJudicial) as denominador,sum(case when cj.fechaRadicacion>='2016-06-18 00:00:00'
              then 1 else 0 end)*100/count(cj.idCarpetaJudicial) as totalCount,year(cj.fechaRadicacion) as anio,
              month(cj.fechaRadicacion) as mes";
              $this->query["tables"] = "tblcarpetasjudiciales as cj,tbljuzgados j";
              $this->query["conditions"] = "cj.activo='S' AND j.activo='S' AND j.cveJuzgado=cj.cveJuzgado";
              $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
              $this->alias=" as cveGeografia"; //alias para el juzgado, region o distrito
              break; */
            case 40://Total de asuntos terminados en el nuevo sistema de justicia penal
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) as totalCount,COUNT(cj.idCarpetaJudicial) as sumatoria,
                    year(cj.fechaTermino) as year,month(cj.fechaTermino) as month";
                $this->query["tables"] = "tblcarpetasjudiciales as cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.activo='S' AND j.cveJuzgado=cj.cveJuzgado
                    AND cj.cveEstatusCarpeta=2 AND cj.fechaTermino is not null";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                break;
            case 41://Total de causas penales terminadas por los jueces y total de jueces del poder judicial
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial)/COUNT(DISTINCT(jc.idJuzgador)) as totalCount,year(cj.fechaTermino) as anio,
                    month(cj.fechaTermino) as mes,COUNT(cj.idCarpetaJudicial) as numerador,COUNT(DISTINCT(jc.idJuzgador)) as denominador";
                $this->query["tables"] = "tblcarpetasjudiciales cj inner join
                    tbljuzgadorescarpetas jc on (jc.idCarpetaJudicial=cj.idCarpetaJudicial),tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND jc.activo='S'
                    AND cj.cveEstatusCarpeta=2";
                $this->condicionesFecha("cj.fechaTermino", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 42://Total de causas penales terminadas por los jueces y total de jueces del poder judicial
                $this->query["fields"] = "COUNT(a.idActuacion)/COUNT(DISTINCT(js.idJuzgador)) as totalCount,year(a.fechaSentencia) as anio,
                    month(a.fechaSentencia) as mes,COUNT(a.idActuacion) as numerador,COUNT(DISTINCT(js.idJuzgador)) as denominador";
                $this->query["tables"] = "tblActuaciones a inner join
                    tbljuzgadoressentencias js on (js.idActuacion=a.idActuacion),tbljuzgados j";
                $this->query["conditions"] = "a.activo='S' AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND js.activo='S'";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 43://Total de causas penales terminadas por los jueces y total de jueces del poder judicial
                $geografia = "";
                switch ($datos["nivel"]) {
                    case 2: $geografia = ",j.cveRegion";
                        break;
                    case 3: $geografia = ",j.cveDistrito";
                        break;
                    case 4: $geografia = ",j.cveJuzgado";
                        break;
                }
                $this->query["fields"] = "year(fecha) as anio,month(fecha) as mes,sum(subCount) as denominador,sum(subSentencias) as numerador
                    ,(sum(subSentencias)/sum(subCount))*100 as totalCount";
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
                $this->query["tables"] = "(SELECT count(idActuacion) as subCount,
                    count(a.idActuacion) 
                    as subSentencias,j.cveJuzgado,j.cveDistrito,j.cveRegion,a.fechaSentencia as fecha
FROM tblactuaciones as a,tbljuzgados as j
WHERE a.activo='S' AND j.activo='S' AND j.cveJuzgado=a.cveJuzgado
AND a.cveTipoActuacion=3 " . $con . " GROUP BY date_format(a.fechaSentencia,'%Y-%m')" . $geografia . "
UNION ALL
SELECT COUNT(a.idActuacion) as subCount,
                    0 as subSentencias,j.cveJuzgado,j.cveDistrito,j.cveRegion,a.fechaRegistro
FROM tblactuaciones a,tbljuzgados j
WHERE a.cveTipoActuacion = 23 AND a.activo = 'S' AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' " . $con2 . "
GROUP BY date_format(a.fechaRegistro,'%Y-%m')" . $geografia . "
UNION ALL
SELECT COUNT(cj.idCarpetaJudicial), 0 as subSentencias,j.cveJuzgado,j.cveDistrito,j.cveRegion,cj.fechaTermino
FROM tblcarpetasjudiciales cj,tbljuzgados j
WHERE cj.activo='S' AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S' AND cj.cveTipoCarpeta=2 
                    AND cj.cveEstatusCarpeta=2 AND cj.cveConclucion=5
                    " . $con3 . "
GROUP BY date_format(cj.fechaTermino,'%Y-%m')" . $geografia . ") as j";
                $this->query["conditions"] = "1=1";
                $this->condicionesFecha("j.fecha", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 46://Sumatoria(fecha en que se dicta la sentencia - fecha de ingreso al reclusorio)/ Total de acusados en prision
                $geografia = "";
                switch ($datos["nivel"]) {
                    case 2: $geografia = ",j.cveRegion";
                        break;
                    case 3: $geografia = ",j.cveDistrito";
                        break;
                    case 4: $geografia = ",j.cveJuzgado";
                        break;
                }
                $this->query["fields"] = "SUM(diasPrision)/COUNT(idImputadoCarpeta) as totalCount,SUM(diasPrision) AS numerador,COUNT(idImputadoCarpeta) AS denominador,anio,mes";
                $this->query["tables"] = " (SELECT DATEDIFF(a.fechaSentencia,DATE_FORMAT(inc.FechaHoraIngreso,'%Y-%m-%d')) AS diasPrision,COUNT(DISTINCT(ic.idImputadoCarpeta)) 
                    AS denominador,YEAR(a.fechaSentencia) anio,MONTH(a.fechaSentencia) AS mes,a.fechaSentencia,ic.idImputadoCarpeta,j.cveJuzgado,j.cveDistrito,j.cveRegion 
                    FROM tblimputadossentencias imse,tblactuaciones a,tblimpofedelcarpetas iodc,tblimputadoscarpetas ic,tblreclusos re,
                        tblingresosceresos inc,tbljuzgados j, tblcarpetasjudiciales cj
                        WHERE imse.idActuacion=a.idActuacion AND iodc.idImpOfeDelCarpeta=imse.idImpOfeDelCarpeta AND 
                    ic.idImputadoCarpeta=iodc.idImputadoCarpeta AND inc.idIngresoCereso=re.idIngresoCereso AND
                    re.idImputadoCarpeta=iodc.idImputadoCarpeta AND iodc.idCarpetaJudicial=cj.idCarpetaJudicial AND imse.activo='S' AND a.activo='S'
                    AND j.cveJuzgado=cj.cveJuzgado AND iodc.activo='S' AND  ic.activo='S' AND  inc.activo='S' AND re.activo='S' GROUP BY ic.idImputadoCarpeta ORDER BY a.fechaSentencia" . $geografia . ") AS j";
                $this->query["conditions"] = "1=1";
                $this->condicionesFecha("j.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                $this->nuevosCampos = true;
                break;
            case 48://Sumatoria de la duracion de un Juicio. Sumatoria(Fecha sentencia - fecha de radicacion)/n en el Nuevo Sistema de Justicia Penal
                $this->query["fields"] = "sum(DATEDIFF(a.fechaSentencia,cj.fechaRadicacion)) as numerador,
                    count(a.idActuacion) as denominador,sum(DATEDIFF(a.fechaSentencia,cj.fechaRadicacion))/count(a.idActuacion) as totalCount
                    ,year(a.fechaSentencia) as anio,month(a.fechaSentencia) as mes";
                $this->query["tables"] = "tblactuaciones a,tblcarpetasjudiciales cj,tbljuzgados j";
                $this->query["conditions"] = "a.activo='S' AND j.activo='S' AND a.cveJuzgado=j.cveJuzgado
                    AND a.cveTipoActuacion=3 AND cj.idCarpetaJudicial=a.idReferencia AND cj.activo='S'
                    AND cj.cveTipoCarpeta=3 AND a.fechaSentencia is not null";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 102: //Total de juzgados y tribunales
                $this->query["fields"] = "count(j.cveJuzgado) as totalCount, count(j.cveJuzgado) as sumatoria";
                $this->query["tables"] = "tbljuzgados as j";
                $this->query["conditions"] = "j.activo='S'";
                $this->query["orders"] = "j.desJuzgado ASC";
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 113: //Total de personas sentenciadas
                $this->query["fields"] = "COUNT(DISTINCT(ic.idImputadoCarpeta)) AS totalCount, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes";
                $this->query["tables"] = "tblactuaciones AS a,tbljuzgados AS j,tblimputadossanciones AS imsa,
                    tblimpofedelcarpetas AS iodc,tblimputadossentencias AS imse,tblimputadoscarpetas AS ic";
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S'";
                $this->query["orders"] = "j.desJuzgado ASC";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 114:// Total de sentenciados con condenatoria o absolutoria y en la que participo al menos un defensor publico, y Total de sentencias en las que participo al menos un defensor publico
                $this->query["fields"] = "COUNT(DISTINCT(ic.idImputadoCarpeta)) AS numerador,COUNT(cj.idCarpetaJudicial) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (COUNT(DISTINCT(ic.idImputadoCarpeta))/COUNT(cj.idCarpetaJudicial))*100 AS totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj 
                    INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial
                    INNER JOIN tbldefensoresimputadoscarpetas dic ON ic.idImputadoCarpeta=dic.idImputadoCarpeta
                    INNER JOIN tblactuaciones a ON cj.idCarpetaJudicial=a.idReferencia
                    INNER JOIN tblimputadossentencias ise ON a.idActuacion=ise.idActuacion
                    INNER JOIN tbljuzgados j ON a.cveJuzgado=j.cveJuzgado";
                $this->query["conditions"] = "(dic.cveTipoDefensor=1 OR dic.cveTipoDefensor=7) AND a.cveTipoActuacion=3 AND cj.activo='S' 
                    AND ic.activo='S' AND dic.activo='S' AND a.activo='S' AND ise.activo='S' AND j.activo='S' AND cj.cveEtapaProcesal=3";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 115:// Total de sentenciados con condenatoria o absolutoria y en la que participo al menos un defensor privado, y Total de sentencias en las que participo al menos un defensor publico
                $this->query["fields"] = "COUNT(DISTINCT(ic.idImputadoCarpeta)) AS numerador,COUNT(cj.idCarpetaJudicial) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (COUNT(DISTINCT(ic.idImputadoCarpeta))/COUNT(cj.idCarpetaJudicial))*100 AS totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj 
                    INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial
                    INNER JOIN tbldefensoresimputadoscarpetas dic ON ic.idImputadoCarpeta=dic.idImputadoCarpeta
                    INNER JOIN tblactuaciones a ON cj.idCarpetaJudicial=a.idReferencia
                    INNER JOIN tblimputadossentencias ise ON a.idActuacion=ise.idActuacion
                    INNER JOIN tbljuzgados j ON a.cveJuzgado=j.cveJuzgado";
                $this->query["conditions"] = "(dic.cveTipoDefensor=2 OR dic.cveTipoDefensor=9) AND a.cveTipoActuacion=3 AND cj.activo='S' 
                    AND ic.activo='S' AND dic.activo='S' AND a.activo='S' AND ise.activo='S' AND j.activo='S' AND cj.cveEtapaProcesal=3";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 116:// Total de sentenciados con condenatoria o absolutoria apelada (confirmada, modificada o revocada)y en la que participo al menos un defensor publico, y Total de sentencias en las que participo al menos un defensor publico
                $this->query["fields"] = "COUNT(DISTINCT(ic.idImputadoCarpeta)) AS numerador,COUNT(cj.idCarpetaJudicial) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (COUNT(DISTINCT(ic.idImputadoCarpeta))/COUNT(cj.idCarpetaJudicial))*100 AS totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj 
                    INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial
                    INNER JOIN tbldefensoresimputadoscarpetas dic ON ic.idImputadoCarpeta=dic.idImputadoCarpeta
                    INNER JOIN tblactuaciones a ON cj.idCarpetaJudicial=a.idReferencia
                    INNER JOIN tblimputadossentencias ise ON a.idActuacion=ise.idActuacion
                    INNER JOIN tblsentenciasapeladas sa ON ise.idImputadoSentencia=sa.idImputadoSentencia
                    INNER JOIN tbljuzgados j ON a.cveJuzgado=j.cveJuzgado";
                $this->query["conditions"] = "(dic.cveTipoDefensor=1 OR dic.cveTipoDefensor=7) AND a.cveTipoActuacion=3 AND cj.activo='S' 
                    AND ic.activo='S' AND dic.activo='S' AND a.activo='S' AND ise.activo='S' AND j.activo='S' AND cj.cveEtapaProcesal=3";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 117:// Total de sentenciados con condenatoria o absolutoria apelada (confirmada, modificada o revocada) y en la que participo al menos un defensor privado, y Total de sentencias en las que participo al menos un defensor publico
                $this->query["fields"] = "COUNT(DISTINCT(ic.idImputadoCarpeta)) AS numerador,COUNT(cj.idCarpetaJudicial) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (COUNT(DISTINCT(ic.idImputadoCarpeta))/COUNT(cj.idCarpetaJudicial))*100 AS totalCount";
                $this->query["tables"] = "tblcarpetasjudiciales cj 
                    INNER JOIN tblimputadoscarpetas ic ON cj.idCarpetaJudicial=ic.idCarpetaJudicial
                    INNER JOIN tbldefensoresimputadoscarpetas dic ON ic.idImputadoCarpeta=dic.idImputadoCarpeta
                    INNER JOIN tblactuaciones a ON cj.idCarpetaJudicial=a.idReferencia
                    INNER JOIN tblimputadossentencias ise ON a.idActuacion=ise.idActuacion
                    INNER JOIN tblsentenciasapeladas sa ON ise.idImputadoSentencia=sa.idImputadoSentencia
                    INNER JOIN tbljuzgados j ON a.cveJuzgado=j.cveJuzgado";
                $this->query["conditions"] = "(dic.cveTipoDefensor=2 OR dic.cveTipoDefensor=9) AND a.cveTipoActuacion=3 AND cj.activo='S' 
                    AND ic.activo='S' AND dic.activo='S' AND a.activo='S' AND ise.activo='S' AND j.activo='S' AND cj.cveEtapaProcesal=3";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 128: //Total de imputados a los que se les dictaron medidas cautelares de prision preventiva
                $this->query["fields"] = "count(ic.idImputadoCarpeta) as totalCount,count(ic.idImputadoCarpeta) as sumatoria,
                    year(mc.fechaInicio) as year ,month(mc.fechaInicio) as month";
                $this->query["tables"] = "tblimputadoscarpetas ic,tblmedidascautelares mc, tbltiposmedidascautelares tmc,
                    tblactuaciones as a,tbljuzgados as j";
                $this->query["conditions"] = "ic.idImputadoCarpeta = mc.idImputadoCarpeta
                    AND a.idActuacion=mc.idActuacion AND a.activo='S'
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND mc.cveTipoMedidaCautelar = tmc.cveTipoMedidaCautelar
                    AND mc.activo='S' AND tmc.activo='S' AND ic.activo='S' AND mc.cveTipoMedidaCautelar = 14";
                $this->condicionesFecha("mc.fechaInicio", $datos, $paginacion);
                break;
            case 140://Proporcion de sentencias condenatorias que incluyen reparacion del danio
                $this->query["fields"] = "count(icc.cveConclusion) as totalCount,count(icc.cveConclusion) as sumatoria,
                    year(icc.fechaRegistro) as anio ,month(icc.fechaRegistro) as mes";
                $this->query["tables"] = "tblimputadoscarpetasconclusiones icc, tblconclusiones c, tblcarpetasjudiciales cj, "
                        . "tblimputadosCarpetas ic, tblimpofedelcarpetas iodc,tbljuzgados as j";
                $this->query["conditions"] = "iodc.idCarpetaJudicial=cj.idCarpetaJudicial and iodc.idCarpetaJudicial=ic.idCarpetaJudicial and icc.idImputadoCarpeta=ic.IdImputadoCarpeta and icc.cveConclusion=c.cveConclusion 
                    and (icc.cveConclusion = 1 or icc.cveConclusion = 7 or icc.cveConclusion = 3) 
                    AND cj.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    and icc.activo='S' and ic.activo='S' and cj.activo='S' and c.activo='S' and iodc.activo='S'";
                $this->condicionesFecha("icc.fechaRegistro", $datos, $paginacion);
                $this->alias = " as cveGeografia";
                break;
            case 141://Porcentaje de numero de apelaciones interpuestas (sentencias apeladas)/sentencias publicadas
                $this->query["fields"] = "sum(case when imsa.Apelacion='S' then 1 else 0 end) as numerador
                    ,sum(case when ae.cveEstatus=12 then 1 else 0 end) as denominador,year(a.fechaSentencia) as anio,
                    month(a.fechaSentencia) as mes,sum(case when imsa.Apelacion='S' then 1 else 0 end)*100/sum(case when ae.cveEstatus=12 then 1 else 0 end)
                    as totalCount";
                $this->query["tables"] = "tblactuaciones as a,tblimputadossentencias as imsa,tblactuacionesestatus as ae,tbljuzgados j";
                $this->query["conditions"] = "a.cveTipoActuacion=3 AND a.activo='S' AND ae.activo='S' AND ae.idActuacion=a.idActuacion
                    AND imsa.idActuacion=a.idActuacion AND imsa.activo='S' AND j.activo='S' AND j.cveJuzgado=a.cveJuzgado";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
            case 146://Proporcion de sentencias condenatorias que incluyen reparacion del danio
                $this->query["fields"] = "SUM(CASE WHEN imsa.cveTipoSancion=3 THEN 1 ELSE 0 END) AS numerador,COUNT(ic.idImputadoCarpeta) AS denominador, 
                    YEAR(a.fechaSentencia) AS anio,MONTH(a.fechaSentencia) AS mes,
                    (SUM(CASE WHEN imsa.cveTipoSancion=3 THEN 1 ELSE 0 END)/COUNT(ic.idImputadoCarpeta))*100 AS totalCount";
                $this->query["tables"] = "tblactuaciones AS a,tbljuzgados AS j,tblimputadossanciones AS imsa,
                    tblimpofedelcarpetas AS iodc,tblimputadossentencias AS imse,tblimputadoscarpetas AS ic";
                $this->query["conditions"] = "a.activo='S' AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta
                    AND imse.idImpOfeDelCarpeta=iodc.idImpOfeDelCarpeta  AND imse.idImputadoSentencia=imsa.idImputadoSentencia
                    AND imse.idActuacion=a.idActuacion AND a.cveTipoActuacion=3 
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S' AND ic.activo='S' 
                    AND (a.cveTipoSentencia=1 OR a.cveTipoSentencia=3) AND iodc.activo='S' AND imse.activo='S' AND imsa.activo='S'";
                $this->condicionesFecha("a.fechaSentencia", $datos, $paginacion);
                $this->alias = " as cveGeografia"; //alias para el juzgado, region o distrito
                break;
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function obtenerIndicadorSecundario($datos, $paginacion = null, $bandera = null) {
        switch ($datos["idIndicador"]) {
            case 40://Total de asuntos radicados en el nuevo sistema de justicia penal
                $this->query["fields"] = "COUNT(cj.idCarpetaJudicial) as totalCount,COUNT(cj.idCarpetaJudicial) as sumatoria,
                    year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as month";
                $this->query["tables"] = "tblcarpetasjudiciales as cj,tbljuzgados j";
                $this->query["conditions"] = "cj.activo='S' AND j.activo='S' AND j.cveJuzgado=cj.cveJuzgado";
                $this->query["groups"] = "";
                $this->query["orders"] = "";
                $this->condicionesFecha("cj.fechaRadicacion", $datos, $paginacion);
                $this->nuevosCampos = true;
                break;
            case 128://Total de imputados a los que se les dictaron medidas cautelares
                $this->query["conditions"] = "ic.idImputadoCarpeta = mc.idImputadoCarpeta 
                    AND a.idActuacion=mc.idActuacion AND a.activo='S'
                    AND a.cveJuzgado=j.cveJuzgado AND j.activo='S'
                    AND mc.cveTipoMedidaCautelar = tmc.cveTipoMedidaCautelar
                    AND mc.activo='S' AND tmc.activo='S' AND ic.activo='S'";
                $this->condicionesFecha("mc.fechaInicio", $datos, $paginacion);
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
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function obtenerIndicadorPeriodoAnterior($datos, $paginacion = null) {
        switch ($datos["idIndicador"]) {
            
        }
        return $this->obtenerResultado($datos, $paginacion);
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
            //case 39: return ',"desNumerador":"N\u00FAmero de Asuntos Radicados en el Nuevo Sistema de Justicia (Asuntos >= 18/06/2016)","desDenominador":"Asuntos Radicados"}';
            case 40: return ',"desNumerador":"N\u00FAmero de Asuntos Terminados en el Nuevo Sistema de Justicia (Asuntos >= 18/06/2016)","desDenominador":"Asuntos Radicados en el Nuevo Sistema de Justicia (Asuntos >= 18/06/2016)"}';
            case 41: return ',"desNumerador":"Total de Asuntos Terminados","desDenominador":"Total de Jueces del Poder Judicial"}';
            case 42: return ',"desNumerador":"Total de Sentencias Definitivas Dictadas en los Juzgados","desDenominador":"Total de Jueces del Poder Judicial"}';
            case 43: return ',"desNumerador":"Total de Sentencias Definitivas Dictadas en los Juzgados","desDenominador":"Total de Causas Terminadas"}';
            case 46: return ',"desNumerador":"Duraci\u00F3n (D\u00EDas) de Espera de un Acusado en Prisi\u00F3n Provisional","desDenominador":"Total de Acusados en Prisi\u00F3n"}';
            case 48: return ',"desNumerador":"Duraci\u00F3n (d\u00EDas) de los Asuntos en el Nuevo Sistema de Justicia Penal (Fecha de la Sentencia - Fecha de Radicaci\u00F3n)","desDenominador":"N\u00FAmero de Asuntos Radicados en el Nuevo Sistema de Justicia Penal"}';
            case 114: return ',"desNumerador":"Total de sentencias de juicio y que haya participado al menos un defensor p\u00FAblico","desDenominador":"Total de sentencias de juicio"}';
            case 115: return ',"desNumerador":"Total de sentencias de juicio y que haya participado al menos un defensor privado","desDenominador":"Total de sentencias de juicio"}';                
            case 116: return ',"desNumerador":"Total de sentencias de juicio (confirmada, modificada o revocada) y que haya participado al menos un defensor p\u00FAblico","desDenominador":"Total de sentencias de juicio"}';
            case 117: return ',"desNumerador":"Total de sentencias de juicio (confirmada, modificada o revocada) y que haya participado al menos un defensor privado","desDenominador":"Total de sentencias de juicio"}';   
            case 128: return ',"desNumerador":"Total de personas con medida cautelar de prisi\u00F3n preventiva","desDenominador":"Total de personas con medida cautelar"}';
            case 141: return ',"desNumerador":"N\u00FAmero de Apelaciones Interpuestas","desDenominador":"N\u00FAmero de Sentencias definitivas"}';
            case 146: return ',"desNumerador":"Total de Sentencias Condenatorias que incluyen Reparaci\u00F3n del Da\u00F1o","desDenominador":"Total de Sentencias Condenatorias"}';
        }
    }

    private function aplicarFormulaIndicador($datos, $paginacion = null) {
        $json = "";
        switch ($datos["idIndicador"]) {
            /* case 39:    //calculando porcentaje                          3=entero,100=porciento
              $consulta=$this->obtenerIndicadorPrimario($datos, $paginacion);
              $paginacion["paginacion"]=false;//se calculan el total de rgistros obtenidos en el query anterior
              $pagAux=$this->obtenerIndicadorPrimario($datos, $paginacion);
              $decode_JSON = new Decode_JSON();
              $pag = $decode_JSON->decode($pagAux, true);                                                     //%
              $consulta=substr($consulta,0,-1).',"totalRegistros":"'.$pag["resultados"][0]->totalCount.'","metrica":"3"'.$this->descripcion($datos["idIndicador"]);
              return $consulta; */
            case 40:    //calculando porcentaje                            3=entero,100=porciento
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 41:    //calculando promedio                            6=promedio,                         
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //Promedio
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"6"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 42:    //calculando promedio                          6=promedio
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"6"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 43:    //calculando promedio                            3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 46:    //el indicador se puede calcular en una sola sentencia query
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
//                return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 48:    //calculando sumatoria                           4=dias
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;

            //return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 57:
                $consulta=new IndicadoresMASCController($datos,$paginacion);
                return $consulta->getConsulta();
            case 102:    //calculando sumatoria                           7=U.
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 104:
                $consulta=new IndicadoresMASCController($datos,$paginacion);
                return $consulta->getConsulta();
            case 105:
                $consulta=new IndicadoresMASCController($datos,$paginacion);
                return $consulta->getConsulta();
            case 106:
                $consulta=new IndicadoresMASCController($datos,$paginacion);
                return $consulta->getConsulta();
            case 110:
                $consulta=new IndicadoresMASCController($datos,$paginacion);
                return $consulta->getConsulta();
            case 113:    //calculando sumatoria                           7=U.
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 114:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 115:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 116:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 117:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 128:    //calculando porcentaje                          3=entero,,100=calculaar porcentaje *100
                return $this->calcularIndicadorJson($datos, $paginacion, 3, 100);
            case 140:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 141:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 146:    //calculando porcentaje                          3=entero,100=porciento
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //%
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"3"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
        }
        return $json;
    }

    private function calcularIndicadorJsonComplejo($datos, $paginacion, $tipoValor, $porciento = 1, $periodoAnterior = null) {
        $paginacion["cantxPag"] = 5000;
        $paginacion["pag"] = 1;
        $consulta1 = $this->obtenerIndicadorPrimario($datos, $paginacion);
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
        $consulta3 = $this->obtenerIndicadorPeriodoAnterior($datos, $paginacion);
        //return $consulta3;
        $matriz = new Matrizrelacion($jsonConsulta1, $datos["nivel"], $agrupacion);
        $jsonConsulta3 = $decode_JSON->decode($consulta3, true);
        $matrizAux = new Matrizrelacion($jsonConsulta3, $datos["nivel"], $agrupacion);
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
                $prom = ' + ' . $indicadorProm;
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
                $prom.=' + ' . $indicadorPromAnt;
            }
            $indicador3 = $matrizAux->getElemento($geografia, $anio, $mes);
            if (($indicador1 != "") || ($indicador3 != "")) {
                if ($this->paginar($totalCount)) {
                    $aux0 = $this->conversorValor($indicador1, $tipoValor);
                    $aux = $this->conversorValor($indicador3, $tipoValor);
                    $totalPromociones = $this->conversorValor($indicadorPromAnt, $tipoValor) + $this->conversorValor($indicadorPromAnt, $tipoValor);
                    $promedio = (($aux0 + $aux + $totalPromociones) / $jsonConsulta2["resultados"][$i]->totalCount) * $porciento;
                    $json.='{"totalCount":"' . $promedio . '",';
                    $json.='"anio":"' . $anioAux . '",';
                    $json.='"mes":"' . $mesAux . '",';
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
            case 2: $this->agregarGroupBy("j.cveRegion");
                if ($this->nuevosCampos) {
                    $this->query["fields"] .= ",j.cveRegion" . $this->alias;
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
        return $SelectDao->selectDAO($this->query, null, $paginacion, false,$bandera);
    }

    public function consultarIndicadoresSetec($datos, $paginacion = null) {
        $this->paginacion = array();
        if ($paginacion != null) {
            $this->paginacion["cantxPag"] = $paginacion["cantxPag"];
            $this->paginacion["pag"] = $paginacion["pag"];
        }
        return $this->aplicarFormulaIndicador($datos, $paginacion);
    }

}
