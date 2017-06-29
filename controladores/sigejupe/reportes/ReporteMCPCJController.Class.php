<?php

//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteMCPCJController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteMCPCJPrevio($MCPCJDto, $datos, $paginacion) {
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
                if ($datos["checkDetalle"] != "") {
                    if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                        
                    } else {
                        if ($datos['opcCheck'] != "0") {
                            $datos["orders"] = " anio DESC, numero DESC";
                        } else {
                            $datos["orders"] = "cj.anio DESC, cj.numero DESC";
                        }
                    }
                } else {
                    $datos["groups"] = " cj.idCarpetaJudicial";
                }
                break;
        }
        $consulta = $this->reporteMCPCJ($MCPCJDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteMCPCJ($MCPCJDto, $datos, $paginacion) {
        $params = array();
        $params["fields"] .= "r.desRegion,d.desDistrito,j.desJuzgado,cj.idCarpetaJudicial,tc.desTipoCarpeta,
            cj.numero,cj.anio,cj.fechaRadicacion,oc.nombre AS oNombre,oc.paterno AS oPaterno,
            oc.materno AS oMaterno,oc.nombreMoral AS oNombreMoral,mp.idMedidaProteccion,tp.desTipoProteccion,
            mp.fechaInicio as fechaInicioMP,mp.fechaTermino as fechaTerminoMP,de.desDelito,ic.nombre AS iNombre,ic.paterno AS iPaterno,
            ic.materno AS iMaterno,ic.nombreMoral AS iNombreMoral,mc.idMedidaCautelar,
            tmc.desTipoMedidaCautelar,mc.fechaInicio as fechaInicioMC,mc.fechaTermina as fechaTerminaMC";
        $params["tables"] = "tblcarpetasjudiciales cj
            INNER JOIN tbltiposcarpetas tc ON (cj.cveTipoCarpeta=tc.cveTipoCarpeta AND tc.activo='S')
            INNER JOIN tblimpofedelcarpetas ioc ON (cj.idCarpetaJudicial=ioc.idCarpetaJudicial AND ioc.activo='S')
            INNER JOIN tblimputadoscarpetas ic ON (ioc.idImputadoCarpeta=ic.idImputadoCarpeta AND cj.idCarpetaJudicial=ic.idCarpetaJudicial AND ic.activo='S')
            INNER JOIN tblofendidoscarpetas oc ON (ioc.idOfendidoCarpeta=oc.idOfendidoCarpeta AND cj.idCarpetaJudicial=oc.idCarpetaJudicial AND oc.activo='S')
            INNER JOIN tbldelitoscarpetas dc ON (cj.idCarpetaJudicial=dc.idCarpetaJudicial AND ioc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.activo='S')
            INNER JOIN tbldelitos de ON (dc.cveDelito=de.cveDelito AND de.activo='S')
            INNER JOIN tbljuzgados j ON (cj.cveJuzgado=j.cveJuzgado AND j.activo='S')
            INNER JOIN tbldistritos d ON (j.cveDistrito=d.cveDistrito AND d.activo='S')
            INNER JOIN tblregiones r ON (d.cveRegion=r.cveRegion AND r.activo='S')
            LEFT JOIN tblmedidascautelares mc ON (ic.idImputadoCarpeta=mc.idImputadoCarpeta AND mc.activo='S')
            LEFT JOIN tbltiposmedidascautelares tmc ON (mc.cveTipoMedidaCautelar=tmc.cveTipoMedidaCautelar AND tmc.activo='S')
            LEFT JOIN tblmedidasprotecciones mp ON (oc.idOfendidoCarpeta=mp.idOfendidoCarpeta AND mp.activo='S')
            LEFT JOIN tbltiposprotecciones tp ON (mp.cveTipoProteccion=tp.cveTipoProteccion AND tp.activo='S')";
        $params["conditions"] = " cj.activo='S'";
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND (year(cj.fechaRadicacion))=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(cj.fechaRadicacion))=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(cj.fechaRadicacion))=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
        }
        
        $params["orders"] = " cj.fechaRadicacion DESC";
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
//        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
//                $aux = "count(x.totalCount) as totalCount";
//            if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
//                $aux = "count(distinct(x.idCarpetaJudicial)) as totalCount";
//            }
//            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
//            $params["orders"].=") as x";
//        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
