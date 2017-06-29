<?php

//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReportePromocionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reportePromocionesPrevio($promocionesDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                $datos["groups"] = "a.cveTipoCarpeta";
                break;
            case 2:
                $datos["groups"] = "r.desRegion,a.cveTipoCarpeta";
                break;
            case 3:
                $datos["groups"] = "d.desDistrito,a.cveTipoCarpeta";
                break;
            case 4:
                $datos["groups"] = "j.desJuzgado,a.cveTipoCarpeta";
                break;
            case 5:
//                $datos["groups"] = "a.idActuacion,a.cveTipoCarpeta";
                break;
        }
        $consulta = $this->reportePromociones($promocionesDto, $datos, $paginacion);
        return $consulta;
    }

    public function reportePromociones($promocionesDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " count(a.idActuacion) as totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            $params["fields"] = "";
            $params["orders"] = "a.aniActuacion DESC,a.numActuacion ASC,a.fechaRegistro ASC";
        }
        /*PARA OBTENER SOLO LAS CARPETAS DE TIPO AUXILIAR Y DE JUICIO*/
        //$promociones=" AND (a.cveTipoCarpeta=1 OR a.cveTipoCarpeta=3)";
        /*PARA OBTENER TODAS LAS CARPETAS*/
        $promociones="";
        $params["fields"] .= "a.idActuacion,a.numActuacion,a.aniActuacion,a.fechaRegistro,
            ta.cveTipoActuacion,ta.desTipoActuacion,
            tc.cveTipoCarpeta,tc.desTipoCarpeta,
            tj.desTipoJuzgado,
            j.desJuzgado,j.cveJuzgado,
            r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["tables"] = "tblactuaciones a 
            INNER JOIN tbltiposactuaciones ta ON a.cveTipoActuacion=ta.cveTipoActuacion
            INNER JOIN tbltiposcarpetas tc ON a.cveTipoCarpeta=tc.cveTipoCarpeta
            LEFT JOIN tbljuzgados j ON a.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "a.activo='S' AND a.cveTipoActuacion=17 AND ta.activo='S' 
            AND tc.activo='S' AND d.activo='S' AND r.activo='S' AND tj.activo='S' AND j.activo='S'".$promociones;
        
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND a.aniActuacion=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(a.fechaRegistro)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(a.fechaRegistro)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND a.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND a.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveTipoCarpeta"] != 0) {
            $params["conditions"].=" AND a.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
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
                $aux = "count(x.idActuacion) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
