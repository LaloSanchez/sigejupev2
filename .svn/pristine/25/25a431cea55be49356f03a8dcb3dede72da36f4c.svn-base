<?php
set_time_limit(300);
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
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

class ReporteAudienciasController {

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
        
        if ($datos["detalles"] == "detalle" || $datos["nivel"]==5) {
            //$params["orders"] = "";
            $params["fields"] = " a.idAudiencia,a.fechaInicial,a.fechaFinal,TIMEDIFF(a.fechaFinal,a.fechaInicial) AS duracionAudiencia, cj.nuc, concat(juz.nombre,' ',juz.paterno, ' ', juz.materno ) as juzgador, ";
            $params["fields"] .= " CASE WHEN (isol.cveTipoPersona=1) then concat(isol.nombre,' ',isol.paterno, ' ', isol.materno) else 'na' end as nombreImputado, ";
            $params["fields"] .= " CASE WHEN (isol.cveTipoPersona>1) then isol.nombreMoral else 'na' end as nombreMoralImputado , ";
            $params["fields"] .= " cata.desCatAudiencia,sa.cveUsuario,ea.desEstatusAudiencia, CASE WHEN (dis.cveTipoDefensor = 1) then dis.nombre else 'na' end  as defensor, ";
            $params["fields"] .= " CASE WHEN (dis.cveTipoDefensor = 2) then dis.nombre else 'na' end  as defensorPrivado, ";
            $params["fields"] .= " CASE WHEN (dis.cveTipoDefensor in (7,9)) then dis.nombre else 'na' end  as asesorJuridico, ";
            $params["fields"] .= " tj.cveTipoJuzgado,tj.desTipoJuzgado,j.desJuzgado,j.cveJuzgado,r.desRegion,r.cveRegion, sa.observaciones, ";
            $params["fields"] .= " d.cveDistrito,d.desDistrito,ep.cveEtapaProcesal,ep.desEtapaProcesal  ";
            
            
            if ($datos["checkDetalle"] != "") {
                $params["orders"] = " a.idAudiencia DESC,a.anio DESC,a.numero ASC,a.fechaInicial ASC ";
            } else {
//                $params["orders"] = "a.anio DESC,a.numero ASC,a.fechaInicial ASC";
            }
        }
        
        $params["tables"] = "tblaudiencias a LEFT JOIN tbljuzgados j ON a.cveJuzgado = j.cveJuzgado    
            LEFT JOIN tbltiposjuzgados tj ON (j.cveTipojuzgado = tj.cveTipoJuzgado AND tj.activo='S')
            LEFT JOIN tbldistritos d ON (j.cveDistrito  = d.cveDistrito AND d.activo='S')
            LEFT JOIN tblregiones r ON (j.cveRegion = r.cveRegion AND r.activo='S')
            INNER JOIN tblcataudiencias cata ON (a.cveCatAudiencia=cata.cveCatAudiencia)
            INNER JOIN tblsolicitudesaudiencias sa ON (a.idSolicitudAudiencia=sa.idSolicitudAudiencia and sa.activo = 'S')
            INNER JOIN tbltiposcarpetas tc ON (a.cveTipoCarpeta=tc.cveTipoCarpeta)
            INNER JOIN tblcarpetasjudiciales cj ON  (sa.idReferencia = cj.idCarpetaJudicial and cj.activo = 'S')
            INNER JOIN tblimpofedelsolicitudes ios on (sa.idSolicitudAudiencia = ios.idSolicitudAudiencia and ios.activo = 'S')
            INNER JOIN tblimputadossolicitudes isol on (ios.idImputadoSolicitud = isol.idImputadoSolicitud and isol.activo = 'S' )
            INNER JOIN tbldefensoresimputadossolicitudes dis on (isol.idImputadoSolicitud = dis.idImputadoSolicitud and dis.activo = 'S')
            INNER JOIN tblaudienciasjuzgador ajuz on (a.idAudiencia = ajuz.idAudiencia and ajuz.activo = 'S')
            INNER JOIN tbljuzgadores juz on (ajuz.idJuzgador = juz.idJuzgador)
            INNER JOIN tblsalas sala ON (a.cveSala=sala.cveSala)
            INNER JOIN tblnaturalezas n ON (cata.cveNaturaleza=n.cveNaturaleza AND n.activo='S')
            INNER JOIN tblestatusaudiencias ea ON (a.cveEstatusAudiencia=ea.cveEstatusAudiencia  )
            INNER JOIN tbletapasprocesales ep ON (cata.cveEtapaProcesal=ep.cveEtapaProcesal AND ep.activo='S')";
        
        
        $params["conditions"] = "sala.cveSala=a.cveSala AND a.cveEstatusAudiencia=ea.cveEstatusAudiencia AND tc.cveTipoCarpeta=a.cveTipoCarpeta AND tc.activo='S' AND a.activo='S' AND cata.activo='S'  
            AND j.activo='S'  AND TIMEDIFF(a.fechaFinal,a.fechaInicial)>0 ";

        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($datos["cveTipoCarpeta"] != 0) {
            $params["conditions"].=" AND a.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
        }
        if ($datos["cveEstatusAudiencia"] != 0) {
            $params["conditions"].=" AND ea.cveEstatusAudiencia=" . $datos["cveEstatusAudiencia"];
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
        $json = $SelectDao->selectDAO($params, $this->proveedor, $paginacion);
        $arrayAudiencias = json_decode($json);
        $defensorArray = array();
        $defensorPrivArray = array();
        $asesorJurArray = array();
        $ampArray = array();
        $idAudAux = 0;
        $cont = 0;
        $contAudiencias = 0;
        $idMP = "";
        $totalAud = 0;
        
        $mesesArray = array(
            "01" => "Enero",
            "02" => "Febrero",
            "03" => "Marzo",
            "04" => "Abril",
            "05" => "Mayo",
            "06" => "Junio",
            "07" => "Julio",
            "08" => "Agosto",
            "09" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre",
        );
        
        // llena vectores de defensores
        if($arrayAudiencias->totalCount == 0){
            echo "no hay valores...";
        }
        
        foreach ($arrayAudiencias->resultados as $audiencias){
//            echo "--> ".$audiencias->idAudiencia;
                
            if($idAudAux != $audiencias->idAudiencia){
                $idMP .= $audiencias->cveUsuario.",";
                $defensorArray[$cont][$audiencias->idAudiencia] = $audiencias->defensor."/".$audiencias->idAudiencia;
                $defensorPrivArray[$cont][$audiencias->idAudiencia] = $audiencias->defensorPrivado."/".$audiencias->idAudiencia;
                $asesorJurArray[$cont][$audiencias->idAudiencia] = $audiencias->asesorJuridico."/".$audiencias->idAudiencia;
                $contAudiencias++;
            }else{
                $defensorArray[$cont][$audiencias->idAudiencia] = $audiencias->defensor."/".$audiencias->idAudiencia;
                $defensorPrivArray[$cont][$audiencias->idAudiencia] = $audiencias->defensorPrivado."/".$audiencias->idAudiencia;
                $asesorJurArray[$cont][$audiencias->idAudiencia] = $audiencias->asesorJuridico."/".$audiencias->idAudiencia;
            }
            $cont++;
            $idAudAux = $audiencias->idAudiencia;
        } 
//        print_r($defensorArray);
//        print_r($defensorPrivArray);
//        print_r($asesorJurArray);
//        echo $idMP;
        
        $idMP = substr($idMP, 0, -1);
        
//        $usuarioExt = new UsuarioCliente();
//        $listado = $usuarioExt->getUsuarios($idMP);
//        $listadoUsuariosArray = json_decode($listado);
//        print_r($listadoUsuariosArray);

        // generar json principal
                
            $json = "";
            $json .= '{"Estatus":"OK",';
            $json .= '"totalCount":"' . $contAudiencias . '",';
            $json .= '"mnj":"Consulta exitosa",';
            $json .= '"resultados":[';
            $x = 1;
            $idAudAux2 = 0;
            foreach ($arrayAudiencias->resultados as $audiencias){
                if($idAudAux2 != $audiencias->idAudiencia){
                    $json .= "{";
                    $json .= '"idAudiencia":' . json_encode(utf8_encode($audiencias->idAudiencia)) . ",";
                    $json .= '"fechaInicial":' . json_encode(utf8_encode($audiencias->fechaInicial)) . ",";
                    
                    $mesesLetra = explode(" ", $audiencias->fechaInicial);
                    $mesesL = explode("-", $mesesLetra[0]);
                    $json .= '"mes":' . json_encode(utf8_encode($mesesArray[$mesesL[1]])) . ",";
                    $json .= '"hrInicio":' . json_encode(utf8_encode($mesesLetra[1])) . ",";
                    
                    $mesesLetraFin = explode(" ", $audiencias->fechaFinal);
//                    print_r($mesesLetraFin);
                    $json .= '"hrFinal":' . json_encode(utf8_encode($mesesLetraFin[1])) . ",";
                    $json .= '"duracionAudiencia":' . json_encode(utf8_encode($audiencias->duracionAudiencia)) . ",";
                    $json .= '"juzgador":' . json_encode(($audiencias->juzgador)) . ",";
                    $json .= '"desCatAudiencia":' . json_encode(utf8_encode($audiencias->desCatAudiencia)) . ",";
                    $json .= '"observaciones":' . json_encode(utf8_encode($audiencias->observaciones)) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($audiencias->nuc)) . ",";
//*************************** mostrar solicitante ***********************************************************
//                    $json .= '"amp":' . json_encode(utf8_encode("Personal del juzgado")) . ",";
//                    foreach ($listadoUsuariosArray->data as $usuarioAud){
////                        echo "[".$audiencias->cveUsuario." == ". $usuarioAud->cveUsuario."]";
//                        if($audiencias->cveUsuario == $usuarioAud->cveUsuario ){
////                            print_r($usuarioAud);
//                            if ( $usuarioAud->cveGrupo == 103){
//                                $json .= '"amp":' . json_encode(utf8_encode($usuarioAud->nombre." ".$usuarioAud->paterno." ".$usuarioAud->materno)) . ",";
//                            }else{
//                                $json .= '"amp":' . json_encode(utf8_encode("Personal del juzgado")) . ",";
//                            }
//                        }    
//                    }
//***********************************************************************************************************                    
                    $json .= '"defensor":[';
//*************************** defensores  *************************************************************
                    $jsonAux = "";
                    foreach ($defensorArray as $defensor){
//                        echo "<".$defensor[$audiencias->idAudiencia].">";
                          $usuarioAud = explode("/", $defensor[$audiencias->idAudiencia]) ;
//                          echo "<br>[".$usuarioAud[0]."] y [".$usuarioAud[1]."]";
                          if($usuarioAud[1] == $audiencias->idAudiencia){
                                $jsonAux .= "{";
                                $jsonAux .= '"nombreDef":' . json_encode(utf8_encode($usuarioAud[0])) . "";    
                                $jsonAux .= "},";
                                
                          }
                            
                        
                    }
                    $jsonAux = substr($jsonAux, 0, -1);
                    $json .= $jsonAux;
                    $json .= "],";
                    
//*************************** defensores privado *******************************************************
                    $json .= '"defensorPrivado":[';
                    $jsonAux1 = "";
                    foreach ($defensorPrivArray as $defensorPriv){
//                        echo "<".$defensor[$audiencias->idAudiencia].">";
                          $usuarioAud = explode("/", $defensorPriv[$audiencias->idAudiencia]) ;
//                          echo "<br>[".$usuarioAud[0]."] y [".$usuarioAud[1]."]";
                          if($usuarioAud[1] == $audiencias->idAudiencia){
                                $jsonAux1 .= "{";
                                $jsonAux1 .= '"nombreDefPriv":' . json_encode(utf8_encode($usuarioAud[0])) . "";    
                                $jsonAux1 .= "},";
                                
                          }
                            
                        
                    }
                    $jsonAux1 = substr($jsonAux1, 0, -1);
                    $json .= $jsonAux1;
                    $json .= "],";
                    
//*************************** asesor juridico *******************************************************
                    $json .= '"asesorJuridico":[';
                    $jsonAux2 = "";
                    foreach ($asesorJurArray as $asesorJur){
//                        echo "<".$defensor[$audiencias->idAudiencia].">";
                          $usuarioAud = explode("/", $asesorJur[$audiencias->idAudiencia]) ;
//                          echo "<br>[".$usuarioAud[0]."] y [".$usuarioAud[1]."]";
                          if($usuarioAud[1] == $audiencias->idAudiencia){
                                $jsonAux2 .= "{";
                                $jsonAux2 .= '"nombreAsesorJur":' . json_encode(utf8_encode($usuarioAud[0])) . "";    
                                $jsonAux2 .= "},";
                                
                          }

                    }
                    $jsonAux2 = substr($jsonAux2, 0, -1);
                    $json .= $jsonAux2;
                    $json .= "]";
//***************************************** termina json principal *************************************
                    $json .= "}";
                    
                    $x++;
                    if ($x <= $contAudiencias) {
                        $json .= ",";
                    }
                }
                    
                $idAudAux2 = $audiencias->idAudiencia;
            }
        
            $json .= "]";
            $json .= "}";
            
        echo $json;
        //return $SelectDao->selectDAO($params, null, $paginacion);
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

//    public function indicadorAudiencias($datos, $paginacion) {
//        $params = array();
//        $anio = "";
//        $mes = "";
//        $rango_fecha = "";
//        $region = "";
//        $distrito = "";
//        $tipo_juzgado = "";
//        $cveJuzgado = "";
//        if ($datos["cveTipoJuzgado"] != 0) {
//            $tipo_juzgado .= " AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
//        }
//        if ($datos["cveRegion"] != "") {
//            $region .= " AND r.cveRegion=" . $datos["cveRegion"];
//        }
//        if ($datos["cveDistrito"] != "") {
//            $distrito .=" AND d.cveDistrito=" . $datos["cveDistrito"];
//        }
//        if ($datos["cveJuzgado"] != "") {
//            $cveJuzgado.=" AND a.cveJuzgado=" . $datos["cveJuzgado"];
//        }
//        if ($datos["anio"] != "") {
//            $anio .= " AND a.anio=" . $datos["anio"];
//        }
//        if ($datos["mes"] != 0) {
//            $mes.= " AND (month(a.fechaInicial)=" . $datos['mes'] . ")";
//            if ($datos["anioMes"] != "") {
//                $mes.= " AND (year(a.fechaInicial)=" . $datos['anioMes'] . ")";
//            }
//        }
//        if ($datos["fechaInicial"] != "") {
//            $fechaInicio = explode("/", $datos["fechaInicial"]);
//            $rango_fecha.= " AND a.fechaInicial >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
//            if ($datos["fechaFinal"] != "") {
//                $fechaFinal = explode("/", $datos["fechaFinal"]);
//                $rango_fecha.=" AND  a.fechaFinal <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
//            }
//        }
//        $params["fields"] = " COUNT(c.idAudiencia) AS totalCount,";
//        $regs = "a.idAudiencia,a.numero,a.anio,a.fechaInicial,a.fechaFinal,
//            r.desRegion,r.cveRegion,
//            d.cveDistrito,d.desDistrito,
//            j.desJuzgado,j.cveJuzgado,
//            tj.cveTipoJuzgado,tj.desTipoJuzgado,";
//        $tablas = "tblaudiencias a 
//            INNER JOIN tblsolicitudesaudiencias sa ON a.idSolicitudAudiencia=sa.idSolicitudAudiencia 
//            LEFT JOIN tbljuzgados j ON a.cveJuzgado = j.cveJuzgado    
//            LEFT JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado
//            LEFT JOIN tbldistritos d ON j.cveDistrito  = d.cveDistrito
//            LEFT JOIN tblregiones r ON j.cveRegion = r.cveRegion ";
//        $condiciones = "a.activo='S' AND sa.activo='S' AND r.activo='S' AND d.activo='S' "
//                . "AND j.activo='S' AND tj.activo='S'" . $cveJuzgado . $anio . $mes . $rango_fecha . $region . $distrito . $tipo_juzgado /* . $idJuzgador */;
//        if ($datos["TipoIndicador"] == 1) {
//            $regs .= "ea.cveEstatusAudiencia,ea.desEstatusAudiencia,
//            ep.cveEtapaProcesal, ep.desEtapaProcesal,
//            TIME_TO_SEC(TIMEDIFF(a.fechaFinal,a.fechaInicial)) AS diferencia,
//            SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(a.fechaFinal,a.fechaInicial))) AS duracionAudiencia";
//            $tablas .= " INNER JOIN tblestatusaudiencias ea ON a.cveEstatusAudiencia=ea.cveEstatusAudiencia
//                    INNER JOIN tbletapasprocesales ep ON sa.cveEtapaProcesal=ep.cveEtapaProcesal";
//            $condiciones .= " AND ea.activo='S' AND ep.activo='S'"
//                    . "AND ea.cveEstatusAudiencia=2 AND (ep.cveEtapaProcesal=1 OR ep.cveEtapaProcesal=2)";
//            $params["fields"] .= "SEC_TO_TIME(SUM(c.diferencia)/COUNT(c.idAudiencia)) AS duracionPromedio,sum(c.diferencia)/count(c.idAudiencia) as tiempo,";
//        } else if ($datos["TipoIndicador"] == 2) {
//            $regs .= "ea.cveEstatusAudiencia,ea.desEstatusAudiencia,
//                ep.cveEtapaProcesal, ep.desEtapaProcesal,
//                ta.cveTipoAudiencia,ta.desTipoAudiencia,
//                SUM(CASE WHEN (ea.cveEstatusAudiencia=2) THEN 1 ELSE 0 END) audienciasCELEBRADAS,COUNT(a.idAudiencia) totalCount";
//            $tablas .= " INNER JOIN tblestatusaudiencias ea ON a.cveEstatusAudiencia=ea.cveEstatusAudiencia
//                INNER JOIN tbltiposaudiencias ta ON sa.cveTipoAudiencia=ta.cveTipoAudiencia 
//                INNER JOIN tbletapasprocesales ep ON sa.cveEtapaProcesal=ep.cveEtapaProcesal";
//            $condiciones .= " AND ea.activo='S' AND ep.activo='S'"
//                    . " AND (ep.cveEtapaProcesal=1 OR ep.cveEtapaProcesal=2) AND ta.cveTipoAudiencia=1";
//        }
//        $params["tables"] = " (SELECT " . $regs . " FROM " . $tablas . " WHERE " . $condiciones . ") as c ";
//        $params["conditions"] = " c.idAudiencia IS NOT NULL";
//        $params["orders"] = " totalCount ASC";
//        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
//            $params["fields"] = "";
//            $params["orders"] = "c.anio DESC,c.numero ASC,c.fechaInicial DESC";
//        }
//        $params["fields"] .= "c.idAudiencia,c.numero,c.anio,c.fechaInicial,c.fechaFinal,
//            c.desRegion,c.cveRegion,
//            c.cveDistrito,c.desDistrito,
//            c.desJuzgado,c.cveJuzgado,
//            c.cveTipoJuzgado,c.desTipoJuzgado";
//        if ($datos["TipoIndicador"] == 1) {
//            $params["fields"] .= ",c.cveEstatusAudiencia,c.desEstatusAudiencia,
//                c.cveEtapaProcesal, c.desEtapaProcesal,
//                c.diferencia,c.duracionAudiencia";
//        } else if ($datos["TipoIndicador"] == 2) {
//            $params["fields"] .= ",c.cveEstatusAudiencia,c.desEstatusAudiencia,
//                c.cveTipoAudiencia,c.desTipoAudiencia,
//                c.cveEtapaProcesal,c.desEtapaProcesal,
//                ((c.audienciasCELEBRADAS/c.totalCount)*100) as porcentajeAudienciasRealizadas";
//        }
//        if ($datos["groups"] != "") {
//            $params["groups"] = $datos["groups"];
//        }
//        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
//            if ($datos["checkDetalle"] != "") {
//                
//            } else {
//                $aux = "count(x.totalCount) as totalCount";
//                if ($datos["detalles"] == "detalle" || $datos["nivel"] == 5) {
//                    $aux = "count(x.idAudiencia) as totalCount";
//                }
//                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
//                $params["orders"].=") as x";
//            }
//        }
//        $SelectDao = new SelectDAO();
//        return $SelectDao->selectDAO($params, null, $paginacion);
//    }

}
