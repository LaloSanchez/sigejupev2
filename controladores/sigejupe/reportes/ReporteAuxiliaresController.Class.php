<?php

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposaudiencias/TiposaudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");
//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteAuxiliaresController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteAuxiliaresPrevio($auxiliaresDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                $datos["groups"] = "";
                break;
            case 2:
                $datos["groups"] = "r.desRegion";
                break;
            case 3:
                $datos["groups"] = "d.desDistrito";
                break;
            case 4:
                $datos["groups"] = "j.desJuzgado";
                break;
            case 5:
//                $datos["groups"] = "cj.idCarpetaJudicial";
                break;
        }
        $consulta = $this->reporteAuxiliares($auxiliaresDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteAuxiliares($auxiliaresDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(cj.idCarpetaJudicial) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            $params["fields"] = "";
            $params["orders"] = "cj.anio DESC,cj.numero ASC,cj.fechaRadicacion ASC";
        }
        $params["fields"] .= "cj.idCarpetaJudicial,cj.numero,cj.anio,cj.fechaRadicacion,
            ec.cveEstatusCarpeta,ec.desEstatusCarpeta,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,
            j.desJuzgado,j.cveJuzgado,
            r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["tables"] = "tblcarpetasjudiciales cj 
            INNER JOIN tbltiposcarpetas tc ON cj.cveTipoCarpeta=tc.cveTipoCarpeta 
            INNER JOIN tblestatuscarpetas ec ON cj.cveEstatusCarpeta=ec.cveEstatusCarpeta
            LEFT JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "cj.activo='S' AND ec.activo='S' AND tc.activo='S' 
            AND d.activo='S' AND r.activo='S' AND tj.activo='S' AND j.activo='S'
            AND cj.cveTipoCarpeta=1 AND cj.cveEstatusCarpeta=1";
        
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["numero"] != "") {
            $params["conditions"].=" AND cj.numero=" . $datos["numero"];
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
            $params["conditions"].=" AND j.cveJuzgado=" . $datos["cveJuzgado"];
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
                $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
                $aux = "count(x.idCarpetaJudicial) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
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
