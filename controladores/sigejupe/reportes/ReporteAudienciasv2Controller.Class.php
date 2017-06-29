<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");


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

class ReporteAudienciasv2Controller {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAudiencias($AudienciasDto) {
        $AudienciasDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidAudiencia()))));
        $AudienciasDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidSolicitudAudiencia()))));
        $AudienciasDto->setnumero(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getnumero()))));
        $AudienciasDto->setanio(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getanio()))));
        $AudienciasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveTipoCarpeta()))));
        $AudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getactivo()))));
        $AudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaRegistro()))));
        $AudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaActualizacion()))));
        $AudienciasDto->setfechaInicial(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaInicial()))));
        $AudienciasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaFinal()))));
        $AudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveCatAudiencia()))));
        $AudienciasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveJuzgado()))));
        $AudienciasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveJuzgadoDesahoga()))));
        $AudienciasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveAdscripcionSolicita()))));
        $AudienciasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveUsuario()))));
        $AudienciasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidReferencia()))));
        $AudienciasDto->setdetenido(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getdetenido()))));
        $AudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveEstatusAudiencia()))));
        $AudienciasDto->setcveSala(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveSala()))));
        $AudienciasDto->setpeso(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getpeso()))));
        $AudienciasDto->setvariable(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getvariable()))));

        return $AudienciasDto;
    }

    public function reporteAudienciasPrevio($audienciasDto, $datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                if ($datos["cveJuzgador"] == 0 && $datos["filtroPorJuez"] == true) {
                    $datos["groups"] = "jz.idJuzgador";
                } else if ($datos["audienciasDeJuicio"] == true && $datos["porJuez"] == false) {
                    $datos["groups"] = "ep.cveEtapaProcesal";
                } else if ($datos["porJuez"] == true && $datos["audienciasDeJuicio"] == true) {
                    $datos["groups"] = "jz.idJuzgador";
                } else if ($datos["filtroPorEtapaProcesal"] == true) {
                    $datos["groups"] = "ep.cveEtapaProcesal";
                } else if ($datos["audienciasAJDC"] == true) {
                    $datos["groups"] = "ta.cveTipoAudiencia";
                } else {
                    $datos["groups"] = "";
                }
                break;
            case 2:
                if ($datos["cveJuzgador"] == 0 && $datos["filtroPorJuez"] == true) {
                    $datos["groups"] = "r.desRegion,jz.idJuzgador";
                } else if ($datos["audienciasDeJuicio"] == true && $datos["porJuez"] == false) {
                    $datos["groups"] = "r.desRegion,ep.cveEtapaProcesal";
                } else if ($datos["porJuez"] == true && $datos["audienciasDeJuicio"] == true) {
                    $datos["groups"] = "r.desRegion,jz.idJuzgador";
                } else if ($datos["promedioDuracionAudiencias"] == true) {
                    $datos["groups"] = "r.desRegion";
                    if ($datos["filtroPorEtapaProcesal"] == true) {
                        $datos["groups"].= ",ep.cveEtapaProcesal";
                    }
                } else if ($datos["audienciasAJDC"] == true) {
                    $datos["groups"] = "r.desRegion,ta.cveTipoAudiencia";
                } else {
                    $datos["groups"] = "r.desRegion";
                }
                break;
            case 3:
                if ($datos["cveJuzgador"] == 0 && $datos["filtroPorJuez"] == true) {
                    $datos["groups"] = "d.desDistrito,jz.idJuzgador";
                } else if ($datos["audienciasDeJuicio"] == true && $datos["porJuez"] == false) {
                    $datos["groups"] = "d.desDistrito,ep.cveEtapaProcesal";
                } else if ($datos["porJuez"] == true && $datos["audienciasDeJuicio"] == true) {
                    $datos["groups"] = "d.desDistrito,jz.idJuzgador";
                } else if ($datos["promedioDuracionAudiencias"] == true) {
                    $datos["groups"] = "d.desDistrito";
                    if ($datos["filtroPorEtapaProcesal"] == true) {
                        $datos["groups"].= ",ep.cveEtapaProcesal";
                    }
                } else if ($datos["audienciasAJDC"] == true) {
                    $datos["groups"] = "d.desDistrito,ta.cveTipoAudiencia";
                } else {
                    $datos["groups"] = "d.desDistrito";
                }
                break;
            case 4:
                if ($datos["filtroPorJuez"] == true) {
                    $datos["groups"] = "j.desJuzgado,jz.idJuzgador";
                } else if ($datos["audienciasDeJuicio"] == true && $datos["porJuez"] == false) {
                    $datos["groups"] = "j.desJuzgado,ep.cveEtapaProcesal";
                } else if ($datos["porJuez"] == true && $datos["audienciasDeJuicio"] == true) {
                    $datos["groups"] = "j.desJuzgado,jz.idJuzgador";
                } else if ($datos["promedioDuracionAudiencias"] == true) {
                    $datos["groups"] = "j.desJuzgado";
                    if ($datos["filtroPorEtapaProcesal"] == true) {
                        $datos["groups"].= ",ep.cveEtapaProcesal";
                    }
                } else if ($datos["audienciasAJDC"] == true) {
                    $datos["groups"] = "j.desJuzgado,ta.cveTipoAudiencia";
                } else {
                    $datos["groups"] = "j.desJuzgado";
                }
                break;
            case 5:

                break;
        }
        $consulta = $this->reporteAudiencias($audienciasDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteAudiencias($audienciasDto, $datos, $paginacion) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " COUNT(a.idAudiencia) AS totalCount,";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
            //$params["orders"] = "";
            $params["fields"] = "n.desNaturaleza,cata.desCatAudiencia,tc.desTipoCarpeta,a.detenido,sala.desSala, ea.desEstatusAudiencia,";
            if ($datos["checkDetalle"] != "") {
                $params["orders"] = "r.desRegion ASC,d.desDistrito ASC,j.desJuzgado ASC,a.anio DESC,a.numero ASC";
            } else {
                $params["orders"] = "a.anio DESC,a.numero ASC,a.fechaInicial ASC";
            }
        }
        $params["fields"] .= "a.idAudiencia,a.numero,a.anio,a.fechaInicial,a.fechaFinal,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,j.desJuzgado,j.cveJuzgado,r.desRegion,r.cveRegion,
            d.cveDistrito,d.desDistrito";
        $params["tables"] = "tblaudiencias a LEFT JOIN tbljuzgados j ON a.cveJuzgado = j.cveJuzgado    
            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion 
            INNER JOIN tblcataudiencias cata ON a.cveCatAudiencia=cata.cveCatAudiencia 
            INNER JOIN tblsolicitudesaudiencias sa ON a.idSolicitudAudiencia=sa.idSolicitudAudiencia
            INNER JOIN tbltiposcarpetas tc ON a.cveTipoCarpeta=tc.cveTipoCarpeta
            INNER JOIN tblsalas sala ON a.cveSala=sala.cveSala
            INNER JOIN tblnaturalezas n ON cata.cveNaturaleza=n.cveNaturaleza
            INNER JOIN tblestatusaudiencias ea ON a.cveEstatusAudiencia=ea.cveEstatusAudiencia ";
        $params["conditions"] = "sala.cveSala=a.cveSala AND a.cveEstatusAudiencia=ea.cveEstatusAudiencia AND tc.cveTipoCarpeta=a.cveTipoCarpeta AND tc.activo='S' AND a.activo='S' AND cata.activo='S' AND sa.activo='S' AND d.activo='S' AND r.activo='S' 
            AND tj.activo='S' AND j.activo='S' AND n.activo='S' AND TIMEDIFF(a.fechaFinal,a.fechaInicial)>0 ";

        if ($datos["filtroPorJuez"] == true) {
            $params["fields"].=",jz.nombre,jz.paterno,jz.materno,jz.idJuzgador";
            $params["tables"].=" INNER JOIN tblaudienciasjuzgador aj ON a.idAudiencia=aj.idAudiencia"
                    . " INNER JOIN tbljuzgadores jz ON aj.idJuzgador=jz.idJuzgador";
            if ($datos["cveJuzgador"] != 0) {
                $params["conditions"].=" AND aj.activo='S' AND jz.idJuzgador=" . $datos["cveJuzgador"];
            } else {
                $params["conditions"].=" AND aj.activo='S'";
            }
            if ($datos["cveEstatusAudiencia"] != 0) {
                $params["conditions"].=" AND ea.cveEstatusAudiencia=" . $datos["cveEstatusAudiencia"];
            }

            if ($datos["cveEtapaProcesal"] != 0) {
                $params["conditions"].=" AND cata.cveEtapaProcesal=" . $datos["cveEtapaProcesal"];
            }
        }
        if ($datos["audienciasDeIniciales"] == true) {
            $params["fields"].="";
            $params["conditions"].=" AND cata.activo='S' AND cata.audienciaInicial='S' ";
        }
        if ($datos["audienciasAJDC"] == true) {
            $params["fields"] .= ",ta.cveTipoAudiencia,ta.desTipoAudiencia,jz.nombre,jz.paterno,jz.materno";
            if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
                $params["fields"].="";
            } else {
                $params["fields"].=",SUM(CASE WHEN (cata.audienciaInicial='S') THEN 1 ELSE 0 END) audienciasIniciales,
                SUM(CASE WHEN (sa.cveEtapaProcesal=2) THEN 1 ELSE 0 END) audienciasIntermedias,
                SUM(CASE WHEN (sa.cveEtapaProcesal=5) THEN 1 ELSE 0 END) audienciasProcedimientoAbreviado,
                SUM(CASE WHEN (sa.cveEtapaProcesal=1 AND sa.cveNaturaleza=2) THEN 1 ELSE 0 END) audienciasPrivadasInvestigacion";
            }
            /* TOMANDO EN CUENTA EL JUZGADOR, TAL Y COMO PIDE EL REPORTE */
            $params["tables"] .= " INNER JOIN tbltiposaudiencias ta ON cata.cveTipoAudiencia= ta.cveTipoAudiencia
                INNER JOIN tbletapasprocesales ep ON sa.cveEtapaProcesal= ep.cveEtapaProcesal
                INNER JOIN tblaudienciasjuzgador aj ON a.idAudiencia=aj.idAudiencia
                INNER JOIN tbljuzgadores jz ON aj.idJuzgador=jz.idJuzgador";
            $params["conditions"] .= " AND ep.activo='S' AND ta.activo='S' AND aj.activo='S'
                AND jz.cveTipoJuzgador=1 AND (sa.cveEtapaProcesal=5 || sa.cveEtapaProcesal=2 || (sa.cveEtapaProcesal=1 AND sa.cveNaturaleza=2) || cata.audienciaInicial='S')";
//                /*DESPRECIANDO AL JUZGADOR*/
//            $params["tables"] .= " INNER JOIN tbltiposaudiencias ta ON cata.cveTipoAudiencia= ta.cveTipoAudiencia
//                INNER JOIN tbletapasprocesales ep ON sa.cveEtapaProcesal= ep.cveEtapaProcesal
//                INNER JOIN tblestatusaudiencias ea ON a.cveEstatusAudiencia= ea.cveEstatusAudiencia
//                INNER JOIN tblnaturalezas n ON sa.cveNaturaleza= n.cveNaturaleza";
//            $params["conditions"] .= " AND ep.activo='S' AND n.activo='S' AND (sa.cveEtapaProcesal=5 || sa.cveEtapaProcesal=2 || (sa.cveEtapaProcesal=1 AND sa.cveNaturaleza=2) || cata.audienciaInicial='S')";     
        }
        if ($datos["audienciasDeJuicio"] == true) {
            $params["fields"].=",ep.cveEtapaProcesal,ep.desEtapaProcesal";
            $params["tables"].=" INNER JOIN tbletapasprocesales ep ON sa.cveEtapaProcesal= ep.cveEtapaProcesal";
            $params["conditions"] .= " AND ep.activo='S'";
            if ($datos["cveEtapaProcesal"] != 0) {
                $params["conditions"].=" AND sa.cveEtapaProcesal=" . $datos["cveEtapaProcesal"];
            }
            if ($datos["porJuez"] == true) {
                $params["fields"].=",jz.nombre,jz.paterno,jz.materno,jz.idJuzgador";
                $params["tables"].=" INNER JOIN tblaudienciasjuzgador aj ON a.idAudiencia=aj.idAudiencia"
                        . " LEFT JOIN tbljuzgadores jz ON aj.idJuzgador=jz.idJuzgador";
                $params["conditions"].=" AND aj.activo='S' AND cata.cveEtapaProcesal=" . $datos["cveEtapaProcesal"];
                if ($datos["cveJuzgador"] != 0) {
                    $params["conditions"].=" AND jz.idJuzgador=" . $datos["cveJuzgador"];
                }
            }
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["checkDelito"] != "") {
            $params["fields"].=",d.desDelito ";
            $params["tables"].=" INNER JOIN tblimpofedelsolicitudes iods ON sa.idSolicitudAudiencia=iods.idSolicitudAudiencia"
                    . " INNER JOIN tbldelitossolicitudes ds ON ds.idDelitoSolicitud=iods.idDelitoSolicitud"
                    . " INNER JOIN tbldelitos d ON ds.cveDelito=d.cveDelito";
        }


        if ($datos["cveCatAudiencia"] != "") {
            $params["conditions"].=" AND a.cveCatAudiencia=" . $datos["cveCatAudiencia"];
        }
        if ($datos["cveTipoCarpeta"] != 0) {
            $params["conditions"].=" AND a.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
        }
        if ($datos["cveEstatusAudiencia"] != 0) {
            $params["conditions"].=" AND ea.cveEstatusAudiencia=" . $datos["cveEstatusAudiencia"];
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
            $params["conditions"].=" AND year(a.fechaInicial)=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(a.fechaInicial)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(a.fechaInicial)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND a.fechaInicial >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  a.fechaFinal <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND a.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoAudiencia"] != "") {
            $params["conditions"].=" AND cata.cveTipoAudiencia=" . $datos["cveTipoAudiencia"];
        }
        if ($datos["promedioDuracionAudiencias"] == true) {
            $params["tables"] .=" INNER JOIN tbletapasprocesales ep ON cata.cveEtapaProcesal=ep.cveEtapaProcesal ";
            $params["conditions"] .= " AND ep.activo='S'";
            if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
                $params["fields"].=",TIMEDIFF(a.fechaFinal,a.fechaInicial) AS duracionAudiencia,ep.cveEtapaProcesal,ep.desEtapaProcesal";
            } else {
                $params["fields"].=",SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF(a.fechaFinal,a.fechaInicial)))/COUNT(a.idAudiencia)) AS duracionAudiencia,ep.cveEtapaProcesal,ep.desEtapaProcesal";
            }
            if ($datos["cveEtapaProcesal"] != 0) {
                $params["conditions"].=" AND cata.cveEtapaProcesal=" . $datos["cveEtapaProcesal"];
            }
        }
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            if ($datos["checkDetalle"] != "") {
                
            } else {
                if ($datos["promedioDuracionAudiencias"] == true) {
                    $aux = "count(*) as totalCount";
                } else if ($datos["audienciasAJDC"] == true) {
                    $aux = "count(x.audienciasIniciales+x.audienciasIntermedias+x.audienciasProcedimientoAbreviado+x.audienciasPrivadasInvestigacion) as totalCount";
                } else {
                    $aux = "count(x.totalCount) as totalCount";
                }
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.idAudiencia) as totalCount";
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

    public function indicadorAudienciasPrevio($datos, $paginacion) {
        $consulta = "";
        switch ($datos["nivel"]) {
            case 1:
                $datos["groups"] = "";
                break;
            case 2:
                $datos["groups"] = "c.cveRegion";
                break;
            case 3:
                $datos["groups"] = "c.cveDistrito";
                break;
            case 4:
                $datos["groups"] = "c.cveJuzgado";
                break;
            case 5:
                break;
        }
        $consulta = $this->indicadorAudiencias($datos, $paginacion);
        return $consulta;
    }

}
