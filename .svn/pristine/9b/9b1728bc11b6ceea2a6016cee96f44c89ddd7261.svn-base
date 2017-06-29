<?php

//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteCateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteCateosPrevio($cateosDto, $datos, $paginacion) {
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
//                $datos["groups"] = "c.idCateo";
                break;
        }
        $consulta = $this->reporteCateos($cateosDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteCateos($cateosDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(c.idCateo) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            $params["fields"] = "";
            $params["orders"] = "c.anioCateo DESC,c.numeroCateo ASC,jz.nombre ASC,sc.fechaRegistro ASC";
        }
        $params["fields"] .= "c.idCateo,c.anioCateo,c.numeroCateo,
            jz.nombre,jz.materno,jz.paterno,
            sc.fechaRegistro,
            esc.cveEstatusSolicitudCateo,esc.desEstatusSolicitudCateo,
            j.desJuzgado,j.cveJuzgado,tj.desTipoJuzgado,
            r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["tables"] = "tblcateos c
            INNER JOIN tblsolicitudescateos sc ON c.idSolicitudCateo=sc.idSolicitudCateo
            INNER JOIN tblestatussolicitudescateos esc ON sc.cveEstatusSolicitudCateo=esc.cveEstatusSolicitudCateo
            LEFT JOIN tbljuzgadorescateos jc ON sc.idSolicitudCateo=jc.idSolicitudCateo
            INNER JOIN tbljuzgadores jz ON jc.idJuzgador=jz.idJuzgador
            LEFT JOIN tbljuzgados j ON sc.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "esc.activo='S' AND jc.activo='S' AND jz.activo='S' AND d.activo='S' AND r.activo='S' AND tj.activo='S' AND j.activo='S'";
        //$params["conditions"] = "esc.activo='S' AND d.activo='S' AND r.activo='S' AND tj.activo='S' AND j.activo='S'";
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND c.anioCateo=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(sc.fechaRegistro)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(sc.fechaRegistro)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND sc.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  sc.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND sc.cveJuzgado=" . $datos["cveJuzgado"];
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
                $aux = "count(x.idCateo) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
