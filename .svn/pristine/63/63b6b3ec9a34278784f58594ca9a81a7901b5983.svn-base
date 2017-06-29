<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once("Matrizrelacion.Class.php");

class IndicadoresMASCController {

    private $query;
    private $paginacion;
    private $nuevosCampos;
    private $alias;
    private $datos;
    
    public function __construct($datos, $paginacion = null) {
        $this->query["fields"] = "";
        $this->query["tables"] = "";
        $this->query["conditions"] = "";
        $this->query["groups"] = "";
        $this->query["orders"] = "";
        $this->nuevosCampos = true;
        $this->alias = "";
        $this->datos=$datos;
        $this->paginacion=$paginacion;
    }

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

    private function obtenerIndicadorPrimario($datos, $paginacion = null, $bandera = null) {
        switch ($datos["idIndicador"]) {
            case 57://Sumatoria de la duracion de un proceso atendido a traves del MASC. Sumatoria(Fecha del acuerdo - fecha de inicio del proceso )/ Total de procesos atendidos por los centros estatales
                $this->query["fields"] = "SUM(DATEDIFF(e.FechaTer,e.FechaReg)) AS numerador,
                    COUNT(e.CveExp) AS denominador,SUM(DATEDIFF(e.FechaTer,e.FechaReg))/COUNT(e.CveExp) AS totalCount
                    ,YEAR(e.FechaTer) AS anio,MONTH(e.FechaTer) AS mes";
                $this->query["tables"] = "tblexpediente e INNER JOIN tblcentrom c ON e.idCentroM=c.idCentroM";
                $this->query["conditions"] = "YEAR(e.FechaTer)>1000";
                $this->query["orders"] = "c.Ciudad ASC";
                $this->condicionesFecha("e.FechaTer", $datos, $paginacion);
                break;
            case 104://Numero de asuntos atendidos en el MASC
                $this->query["fields"] = "count(e.CveExp) as totalCount, count(e.CveExp) as sumatoria,year(e.FechaReg) as anio
                    ,month(e.FechaReg) as mes";
                $this->query["tables"] = "bdmediacion.tblexpediente e,bdmediacion.tblcentrom c";
                $this->query["conditions"] = "c.idCentroM=e.idCentroM";
                $this->query["orders"] = "c.Ciudad ASC";
                $this->condicionesFecha("e.FechaReg", $datos, $paginacion);
                break;
            case 105://Numero de asuntos resueltos en el MASC
                $this->query["fields"] = "count(e.CveExp) as totalCount, count(e.CveExp) as sumatoria,year(e.FechaReg) as anio
                    ,month(e.FechaReg) as mes";
                $this->query["tables"] = "bdmediacion.tblexpediente e,bdmediacion.tblcentrom c";
                $this->query["conditions"] = "c.idCentroM=e.idCentroM AND e.FechaTer is not null";
                $this->query["orders"] = "c.Ciudad ASC";
                $this->condicionesFecha("e.FechaReg", $datos, $paginacion);
                break;
            case 106: //Total de Centro de Mediacion, Conciliacion y Justicia Restaurativa
                $this->query["fields"] = "count(c.idCentroM) as totalCount, count(c.idCentroM) as sumatoria";
                $this->query["tables"] = "tblcentrom as c";
                $this->query["conditions"] = "1=1";
                $this->query["orders"] = "c.Ciudad ASC";
                break;
            case 110://Numero de asuntos resueltos en el MASC por mediacion
                $this->query["fields"] = "count(e.CveExp) as totalCount, count(e.CveExp) as sumatoria,year(e.FechaReg) as anio
                    ,month(e.FechaReg) as mes";
                $this->query["tables"] = "bdmediacion.tblexpediente e,bdmediacion.tblcentrom c";
                $this->query["conditions"] = "c.idCentroM=e.idCentroM AND e.FechaTer is not null and e.idTipoExpediente=1";//mediacion
                $this->query["orders"] = "c.Ciudad ASC";
                $this->condicionesFecha("e.FechaReg", $datos, $paginacion);
                break;
            
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
    }

    private function obtenerIndicadorSecundario($datos, $paginacion = null, $bandera = null) {
        switch ($datos["idIndicador"]) {
            
        }
        return $this->obtenerResultado($datos, $paginacion, $bandera);
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
            case 57: return ',"desNumerador":"Duraci\u00F3n (d\u00EDas) de un proceso atendido a trav\u00E9s del MASC (Fecha del acuerdo - Fecha de inicio del proceso)","desDenominador":"N\u00FAmero de procesos Atendidos por los Centros Estatales"}';
        
        }
    }

    private function aplicarFormulaIndicador($datos, $paginacion = null) {
        $json = "";
        switch ($datos["idIndicador"]) {
            case 57:    //calculando sumatoria                           4=dias
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //dias
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"4"' . $this->descripcion($datos["idIndicador"]);
                return $consulta;
            case 104://metrica=unidades
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 105://metrica=unidades
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 106:    //calculando sumatoria                           7=U.
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
                return $consulta;
            case 110://metrica=unidades
                $consulta = $this->obtenerIndicadorPrimario($datos, $paginacion);
                //return $consulta;
                $paginacion["paginacion"] = false; //se calculan el total de rgistros obtenidos en el query anterior
                $pagAux = $this->obtenerIndicadorPrimario($datos, $paginacion);
                $decode_JSON = new Decode_JSON();
                $pag = $decode_JSON->decode($pagAux, true);                                                     //U. = unidades
                $consulta = substr($consulta, 0, -1) . ',"totalRegistros":"' . $pag["resultados"][0]->totalCount . '","metrica":"7"}';
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
                $this->agregarGroupBy("c.idCentroM");
                if ($this->nuevosCampos) {
                    $this->query["fields"] .= ",c.Ciudad" . $this->alias;
                }
                break;
        }
        $this->nuevosCampos = false;
        if ($datos["cveRegion"] != "") {
            $this->query["conditions"].=" AND j.cveRegion=" . $datos["cveRegion"];
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
         $proveedor = new Proveedor('mysql','masc');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        return json_encode($proveedor);
        $resultado = $SelectDao->selectDAO($this->query, $proveedor, $paginacion, false);
//        return "..ram 3 hizo el query..". print_r($resultado);
         
        $proveedor->close();
        return $resultado;
    }

    public function getConsulta() {
        return $this->aplicarFormulaIndicador($this->datos, $this->paginacion);
    }

}
