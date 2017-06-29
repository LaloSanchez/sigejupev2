<?php

//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteOrdenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteOrdenesPrevio($ordenesDto, $datos, $paginacion) {
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
                $datos["groups"] = "o.idOrden";
                break;
        }
        $consulta = $this->reporteOrdenes($ordenesDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteOrdenes($ordenesDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(o.idOrden) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            $params["fields"] = "";
            $params["orders"] = "o.anioOrden DESC,o.numeroOrden ASC,jz.nombre ASC,so.fechaRegistro ASC";
        }
        $params["fields"] .= "o.idOrden,o.anioOrden,o.numeroOrden,
            jz.nombre,jz.materno,jz.paterno,
            so.fechaRegistro,
            eso.cveEstatusSolicitudOrdenes,eso.desEstatusSolicitudOrdenes,
            j.desJuzgado,j.cveJuzgado,tj.desTipoJuzgado,
            r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["tables"] = "tblordenes o
            INNER JOIN tblsolicitudesordenes so ON o.idSolicitudOrden=so.idSolicitudOrden
            INNER JOIN tblestatussolicitudesordenes eso ON so.cveEstatusSolicitudOrden=eso.cveEstatusSolicitudOrdenes
            LEFT JOIN tbljuzgadoresordenes jo ON so.idSolicitudOrden=jo.idSolicitudOrden
            INNER JOIN tbljuzgadores jz ON jo.idJuzgador=jz.idJuzgador
            LEFT JOIN tbljuzgados j ON so.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "eso.activo='S' AND jo.activo='S' AND jz.activo='S' AND d.activo='S' AND r.activo='S' AND tj.activo='S' AND j.activo='S' AND so.cveEstatusSolicitudOrden <=3";
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND o.anioOrden=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(so.fechaRegistro)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(so.fechaRegistro)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND so.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  so.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND so.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveEstatusSolicitudOrden"] != 0) {
            $params["conditions"].=" AND so.cveEstatusSolicitudOrden=" . $datos["cveEstatusSolicitudOrden"];
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
                $aux = "count(x.idOrden) as totalCount";
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
