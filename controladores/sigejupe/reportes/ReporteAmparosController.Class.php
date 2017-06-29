<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipoamparo/TipoamparoController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");
//Select dao
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteAmparosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAmparos($AmparosDto) {
        $AmparosDto->setidAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getidAmparo()))));
        $AmparosDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($AmparosDto->getidCarpetaJudicial()))));
        $AmparosDto->setcveTipoAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcveTipoAmparo()))));
        $AmparosDto->setnumAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumAmparo()))));
        $AmparosDto->setaniAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getaniAmparo()))));
        $AmparosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcveJuzgado()))));
        $AmparosDto->setautoridadProcedencia(strtoupper(str_ireplace("'", "", trim($AmparosDto->getautoridadProcedencia()))));
        $AmparosDto->setnumeroProcedencia(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumeroProcedencia()))));
        $AmparosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcarpetaInv()))));
        $AmparosDto->setnumOficio(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumOficio()))));
        $AmparosDto->settoca(strtoupper(str_ireplace("'", "", trim($AmparosDto->gettoca()))));
        $AmparosDto->setexhorto(strtoupper(str_ireplace("'", "", trim($AmparosDto->getexhorto()))));
        $AmparosDto->setnumSala(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumSala()))));
        $AmparosDto->setactoReclamado(strtoupper(str_ireplace("'", "", trim($AmparosDto->getactoReclamado()))));
        $AmparosDto->setobservaciones((str_ireplace("'", "", trim($AmparosDto->getobservaciones()))));
        $AmparosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AmparosDto->getfechaRegistro()))));
        $AmparosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AmparosDto->getfechaActualizacion()))));
        return $AmparosDto;
    }

    public function reporteAmparosPrevio($amparosDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                if ($datos["cveTipoAmparo"] == 0 && $datos["filtroTA"] == true) {
                    $datos["groups"] = "a.cveTipoAmparo";
                } else if ($datos["cveEstatusAmparo"] == 0 && $datos["filtroEA"] == true) {
                    $datos["groups"] = "a.cveEstatusAmparo";
                } else {
                    $datos["groups"] = "";
                }
                break;
            case 2:
                if ($datos["cveTipoAmparo"] == 0 && $datos["filtroTA"] == true) {
                    $datos["groups"] = "r.desRegion,a.cveTipoAmparo";
                } else if ($datos["cveEstatusAmparo"] == 0 && $datos["filtroEA"] == true) {
                    $datos["groups"] = "r.desRegion,a.cveEstatusAmparo";
                } else {
                    $datos["groups"] = "r.desRegion";
                }
                break;
            case 3:
                if ($datos["cveTipoAmparo"] == 0 && $datos["filtroTA"] == true) {
                    $datos["groups"] = "d.desDistrito,a.cveTipoAmparo";
                } else if ($datos["cveEstatusAmparo"] == 0 && $datos["filtroEA"] == true) {
                    $datos["groups"] = "d.desDistrito,a.cveEstatusAmparo";
                } else {
                    $datos["groups"] = "d.desDistrito";
                }
                break;
            case 4:
                if ($datos["cveTipoAmparo"] == 0 && $datos["filtroTA"] == true) {
                    $datos["groups"] = "j.desJuzgado,a.cveTipoAmparo";
                } else if ($datos["cveEstatusAmparo"] == 0 && $datos["filtroEA"] == true) {
                    $datos["groups"] = "j.desJuzgado,a.cveEstatusAmparo";
                } else {
                    $datos["groups"] = "j.desJuzgado";
                }
                break;
            case 5:
                break;
        }
        $consulta = $this->reporteAmparos($amparosDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteAmparos($amparosDto, $datos, $paginacion) {
        $amparosDto = $this->validarAmparos($amparosDto);
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(a.idAmparo) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            $params["fields"] = "";
            $params["orders"] = "a.aniAmparo DESC,a.numAmparo ASC,a.actoReclamado ASC";
        }
        $params["fields"] .= "a.aniAmparo,a.fechaRegistro,a.numAmparo,a.idAmparo,a.actoReclamado,a.autoridadProcedencia,a.numeroProcedencia,a.carpetaInv,
            j.cveJuzgado,j.desJuzgado,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,
            d.cveDistrito,d.desDistrito,
            r.cveRegion,r.desRegion";
        $params["tables"] = "tblamparos a 
            LEFT JOIN tbljuzgados j ON a.cveJuzgado = j.cveJuzgado
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "d.activo='S' AND r.activo='S' 
            AND tj.activo='S' AND j.activo='S' AND a.activo='S'";
        if ($datos["filtroTA"] == true) {
            $params["fields"] .= ",a.cveTipoAmparo,ta.DesTipoAmparo";
            $params["tables"] .= " INNER JOIN tbltipoamparo ta ON a.CveTipoAmparo = ta.cveTipoAmparo";
        }
        if ($datos["filtroEA"] == true) {
            $params["fields"] .= ",a.cveEstatusAmparo,ea.desEstatus";
            $params["tables"] .= " INNER JOIN tblestatusamparos ea ON a.cveEstatusAmparo = ea.cveEstatusAmparo";
             $params["conditions"] .= " AND ea.activo='S'";
        }
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
            $params["conditions"].=" AND a.aniAmparo=" . $datos["anio"];
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
        if ($datos["cveTipoCarpeta"] != "") {
            $params["conditions"].=" AND a.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveTipoAmparo"] != 0) {
            $params["conditions"].=" AND a.cveTipoAmparo=" . $datos["cveTipoAmparo"];
        }
        if ($datos["cveEstatusAmparo"] != 0) {
            $params["conditions"].=" AND a.cveEstatusAmparo=" . $datos["cveEstatusAmparo"];
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
                $aux = "count(x.idAmparo) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $SelectDao = new SelectDAO();
        $rs =  json_decode($SelectDao->selectDAO($params, $this->proveedor, $paginacion));
        
        $ArrCausas=array();
        $ArrCausas2=array();
        $ArrCausas2["Estatus"] =  $rs->Estatus;
        $ArrCausas2["totalCount"] = $rs->totalCount;
        $ArrCausas2["mnj"] =  $rs->mnj;
        
        foreach($rs->resultados as $key => $value){
            $numero = "";
            $anio="";
            $cveJuzgado="";
            
         foreach($value as $key2 => $value2){
             if($key2 == "totalCount"){
                 $ArrCausas[$key][$key2] = number_format($value2);
             }else{
                 $ArrCausas[$key][$key2] = ($value2);
             }
            
            }
            
        }
        $ArrCausas2["resultados"] = $ArrCausas;
        
        //echo json_encode($ArrCausas2);
        return json_encode($ArrCausas2);
    }

}
