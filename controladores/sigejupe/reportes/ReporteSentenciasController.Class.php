<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");



//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class reporteSentenciasController {

    private $proveedor;

    public function __construct() {
        
    }

    

    public function reporteSentenciasPrevio( $datos, $paginacion) {
        $consulta = "";
        $agrupar = "";
        switch ($datos["nivel"]) {
            case 1:
               if ($datos["checkDelitos"] != "") {
                    $agrupar .= " x.cveDelito order by totalCJ desc";
                }
                $datos["orders"] = "totalCount DESC";
                break;
            case 2:
                if ($datos["checkDelitos"] != "") {
                    if ($agrupar == "") {
                        $agrupar = " x.cveDelito order by totalCJ desc";
                    } else {
                        $agrupar .= ", x.cveDelito order by totalCJ desc";
                    }
                }
                    $agrupar = "x.desRegion";
                    $datos["orders"] = "totalCount DESC";
                
                break;
            case 3:
                if ($datos["checkDelitos"] != "") {
                    $agrupar .= ",x.cveDelito order by totalCJ desc";
                }
                    $agrupar = "x.desDistrito";
                $datos["orders"] = "totalCount DESC";
                break;
            case 4:
                if ($datos["checkDelitos"] != "") {
                    $agrupar .= ",x.cveDelito order by totalCJ desc";
                }
                    $agrupar = "x.desJuzgado";
                $datos["orders"] = "totalCount DESC";
                break;
            case 5:
                if($datos["checkDetalle"] != ""){
               
           }else{
            $datos["groups"] = " a.idActuacion";
           }
                
                break;
        }
        $consulta = $this->reporteSentencias( $datos, $paginacion,$agrupar);
        return $consulta;
    }

    public function reporteSentencias( $datos, $paginacion,$agrupar) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " count(*) as totalCount, ";
        $params["orders"] = " ";
        $campos = "";
            $tables = "";
            $condiciones = "";
        if ($datos["detalles"] == "DETALLE") {
            $params["fields"] = "  ";
            if($datos["checkDetalle"] != ""){
               $datos["orders"] = "r.desRegion ASC,d.desDistrito ASC,j.desJuzgado ASC,a.anio DESC,a.numero ASC";
           }else{
            $params["orders"] = "a.anio DESC,a.numero ASC ";
           }
        }
        if ($datos["checkDelitos"] != "") {
            $campos .= ", del.cveDelito,del.desDelito";
            $tables .= " INNER JOIN tbldelitoscarpetas dc ON (iodc.idDelitoCarpeta = dc.idDelitoCarpeta)  
            INNER JOIN tbldelitos del ON (dc.cveDelito = del.cveDelito) ";
            $condiciones .= " AND dc.activo = 'S' AND del.activo = 'S' AND cj.idCarpetaJudicial = dc.idCarpetaJudicial AND dc.cveDelito = del.cveDelito";
        }
        if ($datos["cveDelito"] != "") {
            $condiciones .= " AND del.cveDelito=" . $datos["cveDelito"];
        }
        
        $params["fields"] .= "a.idActuacion,tp.desTipoProcedimiento, ts.desTipoSentencia, ts.cveTipoSentencia, cj.numero, cj.anio ,ic.nombre inombre,ic.paterno ipaterno,ic.materno imaterno, ic.nombreMoral inombreMoral,ic.cveTipoPersona icveTipoPersona,oc.nombre onombre,oc.paterno opaterno,oc.materno omaterno, oc.nombreMoral onombreMoral,oc.cveTipoPersona as ocveTipoPersona ,a.numero as snumero, a.anio as sanio, a.Sintesis, a.fechaSentencia, r.desRegion, r.cveRegion, d.desDistrito, d.cveDistrito, j.cveJuzgado, j.desJuzgado ".$campos;
        $params["tables"] = "tblactuaciones a 
INNER JOIN tblimputadossentencias ims ON (a.idActuacion =  ims.idActuacion) 
INNER JOIN tblimpofedelcarpetas iodc ON iodc.idImpOfeDelCarpeta=ims.idImpOfeDelCarpeta 
INNER JOIN tblimputadoscarpetas ic ON iodc.idImputadoCarpeta = ic.idImputadoCarpeta  
INNER JOIN tblofendidoscarpetas oc ON (iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta) 
INNER JOIN tblcarpetasjudiciales cj ON (a.idReferencia = cj.idCarpetaJudicial)
INNER JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado 
INNER JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado 
INNER JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito 
INNER JOIN tblregiones r ON j.cveRegion = r.cveRegion ".$tables.", 
 tbltipossentencias ts,
  tbltiposprocedimientos tp  ";
        $params["conditions"] = "a.cveTipoActuacion = 3 and a.activo='S' 
            AND cj.activo = 'S' AND d.activo='S' AND r.activo='S' 
            AND tj.activo='S' AND j.activo='S' AND ims.activo='S' AND ic.activo='S' AND oc.activo='S' AND ts.activo='S' AND tp.activo='S' AND iodc.activo='S' AND ts.cveTipoSentencia = a.cveTipoSentencia AND tp.cveTipoProcedimiento=a.cveTipoProcedimiento ".$condiciones;
        if($datos["checkDetalle"] != ""){
               
           }else{
               $params["groups"] = " a.idActuacion";
           }
         
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["cveTipoSentencia"] != "") {
            $params["conditions"].=" AND ts.cveTipoSentencia=" . $datos["cveTipoSentencia"];
        }
        if ($datos["cveTipoProcedimiento"] != "") {
            $params["conditions"].=" AND tp.cveTipoProcedimiento=" . $datos["cveTipoProcedimiento"];
        }
        
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND (year(a.fechaSentencia)=" . $datos["anio"]. ")";
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(a.fechaSentencia)=" . $datos['mes'] . ")";
            $params["conditions"].= " AND (year(a.fechaSentencia)=" . $datos['txtAnioMes'] . ")";
            
        }
        if ($datos["fechaDesde"] != "") {
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $params["conditions"].= " AND a.fechaSentencia >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $params["conditions"].=" AND  a.fechaSentencia <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND a.cveJuzgado=" . $datos["cveJuzgado"];
        }
       
        
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if($datos["checkDetalle"] != ""){
            
        }else{
            if($datos['nivel'] != 5){
                $inicio = " *,count(idActuacion) as totalCJ FROM (";
                $params["fields"] = $inicio . " SELECT " . $params["fields"];
                if($agrupar != ""){
                $fin = ") as x GROUP BY ".$agrupar;
                }else{
                    $fin = ") as x ";
                }
                if ($params["groups"] != "") {
                    $params["groups"].= $fin;
                } else {
                    $params["conditions"].= $fin;
                }
            }
        
        }
                
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
           if($datos["checkDetalle"] != ""){
               
           }else{
                
                $aux = "count(x.idActuacion) as totalCount";
            
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x ";
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
        $ArrCausas2["totalCount"] =  ($rs->totalCount);
        $ArrCausas2["mnj"] =  $rs->mnj;
        
        foreach($rs->resultados as $key => $value){
            $numero = "";
            $anio="";
            $cveJuzgado="";
            
                
            
            
         foreach($value as $key2 => $value2){
             if($key2 == "totalCJ"){
             $ArrCausas[$key][$key2] = ($value2);
             }else if($key2 == "totalCount"){
                 $ArrCausas[$key][$key2] = ($value2);
             }else{
                 $ArrCausas[$key][$key2] = ($value2);
             }
             
            }
            
        }
        $ArrCausas2["resultados"] = $ArrCausas;
        
        return json_encode($ArrCausas2);
    }

  


}
