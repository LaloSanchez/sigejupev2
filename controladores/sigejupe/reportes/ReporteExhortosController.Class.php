<?php

//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteExhortosController {

    private $proveedor;

    public function __construct() {
        
    }
    public function reporteExhortosPrevio($exhortosDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                $datos["groups"] = "ee.cveEstatusExhorto";
                break;
            case 2:
                $datos["groups"] = "r.desRegion,ee.cveEstatusExhorto";
                break;
            case 3:
                $datos["groups"] = "d.desDistrito,ee.cveEstatusExhorto";
                break;
            case 4:
                $datos["groups"] = "j.desJuzgado,ee.cveEstatusExhorto";
                break;
            case 5:
                if($datos["checkDetalle"] != ""){
               
           }else{
                $datos["groups"] = "e.idExhorto,ee.cveEstatusExhorto";
           }
                break;
        }
        $consulta = $this->reporteExhortos($exhortosDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteExhortos($exhortosDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(e.idExhorto) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "DETALLE") {
            $params["fields"] = "";
            $params["orders"] = "e.aniExhorto DESC,e.numExhorto ASC,e.sintesis ASC";
        }
        $params["fields"] .= "e.aniExhorto,e.numExhorto,e.fechaRegistro,e.sintesis,e.idExhorto,
            ee.cveEstatusExhorto,ee.desEstatusExhorto,
            j.desJuzgado,j.cveJuzgado,tj.desTipoJuzgado,
            r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["orders"] = " e.fechaRegistro DESC";
        $params["tables"] = "tblexhortos e
            INNER JOIN tblestatusexhortos ee ON e.cveEstatusExhorto=ee.cveEstatusExhorto
            LEFT JOIN tbljuzgados j ON e.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "e.activo='S' AND ee.activo='S' "
                . " AND d.activo='S' AND r.activo='S' "
                . " AND tj.activo='S' AND j.activo='S'";
        
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND e.aniExhorto=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(e.fechaRegistro)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(e.fechaRegistro)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND e.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  e.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND j.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveEstatusExhorto"] != "") {
            $params["conditions"].=" AND e.cveEstatusExhorto=" . $datos["cveEstatusExhorto"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            if($datos["checkDetalle"] != ""){
               
           }else{
                $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idExhorto) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
           }
        }
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $SelectDao = new SelectDAO();
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
