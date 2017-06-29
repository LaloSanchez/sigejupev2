<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

Class ReporteDelitosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteDelitos( $datos, $paginacion) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";


        switch ($datos["nivel"]) {
            case 1:
                $datos["orders"] = " totalCount DESC";
                if ($datos["cveEstatusCarpeta"] != "") {
                    $datos["groups"] .= "cj.cveEstatusCarpeta ";
                }

                if ($datos["cveTipoJuzgado"] != "") {

                    if ($datos["groups"] == "") {
                        $datos["groups"] = " tj.desTipoJuzgado ";
                    } else {
                        $datos["groups"] .= ", tj.desTipoJuzgado ";
                    }
                }


                if ($datos["checkConsumaciones"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " con.cveConsumacion ";
                    } else {
                        $datos["groups"] .= ", con.cveConsumacion ";
                    }
                }

                if ($datos["checkDelitos"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " d.cveDelito ";
                    } else {
                        $datos["groups"] .= ", d.cveDelito ";
                    }
                }
                if ($datos["checkMunicipio"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " iodc.cveMunicipio";
                    } else {
                        $datos["groups"] .= ", iodc.cveMunicipio ";
                    }
                }
                
                break;
            case 2:
                $datos["orders"] = " totalCount DESC";
                $datos["groups"] = "r.desRegion";

                if ($datos["cveEstatusCarpeta"] != "") {
                    $datos["groups"] .= ",cj.cveEstatusCarpeta ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ",tj.desTipoJuzgado ";
                }

                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }

                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ",d.cveDelito ";
                }
                if ($datos["checkMunicipio"] != "") {
                    $datos["groups"] .= ",iodc.cveMunicipio ";
                }
               
                break;
            case 3:
                $datos["orders"] = " totalCount DESC";
                $datos["groups"] = "dis.desDistrito ";
                if ($datos["cveEstatusCarpeta"] != "") {
                    $datos["groups"] .= ",cj.cveEstatusCarpeta ";
                }
                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ", tj.desTipoJuzgado ";
                }
                if ($datos["checkMunicipio"] != "") {
                    $datos["groups"] .= ",iodc.cveMunicipio ";
                    
                }
                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ", con.cveConsumacion ";
                }
                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ", d.cveDelito ";
                }
                
                break;
            case 4:
                $datos["orders"] = " totalCount DESC";
                $datos["groups"] = "r.desRegion,dis.desDistrito,j.desJuzgado ";

                if ($datos["cveEstatusCarpeta"] != "") {
                    $datos["groups"] .= ",cj.cveEstatusCarpeta ";
                }
                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ", tj.desTipoJuzgado ";
                }
                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ", d.cveDelito ";
                }
                if ($datos["checkMunicipio"] != "") {
                    $datos["groups"] .= ",iodc.cveMunicipio ";
                }
                break;
            case 5:
                if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
                }else{
                    $datos["orders"] = "cj.anio DESC, cj.numero DESC";
                }
                
                break;
            case 6:

                break;
        }


        $consulta = $this->selectReporteDelitos( $datos, $paginacion, $bandera);
        return $consulta;
    }

    public function selectReporteDelitos($datos, $paginacion, $bandera) {
        $sqlIntervalo = "";
        $tablas = "";
        $campos = "";
        $condiciones = "";
        

        if ($datos["nivel"] != "5") {
            if ($datos["checkClasDelitos"] != "") {
                
                $campos .=",
sum(CASE WHEN (iodc.cveClasificacionDelito =1) THEN 1 ELSE 0 END) grave,
sum(CASE WHEN (iodc.cveClasificacionDelito =2) THEN 1 ELSE 0 END) noGrave,
sum(CASE WHEN (iodc.cveClasificacionDelito =3) THEN 1 ELSE 0 END) noAplica,
sum(CASE WHEN (iodc.cveClasificacionDelito =4) THEN 1 ELSE 0 END) noEspecificado,
sum(CASE WHEN (cdelor.cveClasificacionDelitoOrden =1) THEN 1 ELSE 0 END) instantaneo,
sum(CASE WHEN (cdelor.cveClasificacionDelitoOrden =2) THEN 1 ELSE 0 END) permanente,
sum(CASE WHEN (cdelor.cveClasificacionDelitoOrden =3) THEN 1 ELSE 0 END) continuo,
sum(CASE WHEN (cdelor.cveClasificacionDelitoOrden =4) THEN 1 ELSE 0 END) noAplica2,
sum(CASE WHEN (cdelor.cveClasificacionDelitoOrden =5) THEN 1 ELSE 0 END) noEspecificado2,
sum(CASE WHEN (conc.cveConcurso =1) THEN 1 ELSE 0 END) ideal,
sum(CASE WHEN (conc.cveConcurso =2) THEN 1 ELSE 0 END) real3,
sum(CASE WHEN (conc.cveConcurso =3) THEN 1 ELSE 0 END) noAplica3,
sum(CASE WHEN (conc.cveConcurso =4) THEN 1 ELSE 0 END) noEspecificado3";
            }
            
        }
        if ($datos["cveClasificacionDelito"] != "") {
                $condiciones .= " AND iodc.cveClasificacionDelito =" . $datos["cveClasificacionDelito"];
            
        }
        if ($datos["cveComision"] != "") {
                $condiciones .= " AND com.cveComision =" . $datos["cveComision"];
            
        }
        if ($datos["cveFormaAccion"] != "") {
                $condiciones .= " AND fa.cveFormaAccion =" . $datos["cveFormaAccion"];
           
        }
        if ($datos["cveModalidad"] != "") {
                $condiciones .= " AND moda.cveModalidad =" . $datos["cveModalidad"];
            
        }
        if ($datos["cveConsignacion"] != "") {
            $condiciones .= " AND cg.cveConsignacion =" . $datos["cveConsignacion"];
        }
        if ($datos["cveClasificacionDelitoOrden"] != "") {
                $condiciones .= " AND iodc.cveClasificacionDelitoOrden =" . $datos["cveClasificacionDelitoOrden"];
            
        }
       
        if ($datos["cveConcurso"] != "") {
                $condiciones .= " AND iodc.cveConcurso =" . $datos["cveConcurso"];
            
        }
        if ($datos["cveElementoComision"] != "") {
                $condiciones .= " AND elemcom.cveElementoComision =" . $datos["cveElementoComision"];
           
        }
        if ($datos["checkConsumaciones"] != "") {
            $campos .= ",con.cveConsumacion,con.desConsumacion";
            $tablas = " ,tblconsumaciones con";
            $condiciones .= " AND con.cveConsumacion = iodc.cveConsumacion";
        }
        if ($datos["checkMunicipio"] != "") {
            $campos .= ",mun.cveMunicipio,mun.desMunicipio";
            $tablas = " ,tblmunicipios mun";
            $condiciones .= " AND iodc.cveMunicipio = mun.cveMunicipio";
        }
        if ($datos["cveConsumacion"] != "") {
            $condiciones .= " AND con.cveConsumacion =" . $datos["cveConsumacion"];
        }

        if ($datos["cveDelito"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND d.cveDelito=" . $datos["cveDelito"];
            } else {
                $condiciones .= " d.cveDelito=" . $datos["cveDelito"];
            }
        }
        if ($datos["cveMunicipio"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND iodc.cveMunicipio=" . $datos["cveMunicipio"];
            } else {
                $condiciones .= " iodc.cveMunicipio=" . $datos["cveMunicipio"];
            }
        }


        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdel.cveClasificacionDelito,cdel.desClasificacionDelito";
            $condiciones .= " AND cdel.cveClasificacionDelito=iodc.cveClasificacionDelito ";
            $tablas .= ", tblclasificacionesdelitos cdel ";
        }
        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdelor.cveClasificacionDelitoOrden,cdelor.desClasificacionDelitoOrden";
            if ($condiciones != "") {
                $condiciones .= " AND cdelor.cveClasificacionDelitoOrden=iodc.cveClasificacionDelitoOrden ";
            } else {
                $condiciones .= " cdelor.cveClasificacionDelitoOrden=iodc.cveClasificacionDelitoOrden ";
            }

            $tablas .= ", tblclasificacionesdelitosorden cdelor";
        }

        if ($datos["checkClasDelitos"] != "") {
            $campos .= ",conc.cveConcurso,conc.desConcurso";
            if ($condiciones != "") {
                $condiciones .= " AND conc.cveConcurso=iodc.cveConcurso ";
            } else {
                $condiciones .= " conc.cveConcurso=iodc.cveConcurso ";
            }

            $tablas .= " ,tblconcursos conc";
        }
        if ($datos["nivel"] != "5") {
            if ($datos["checkCarEjecu"] != "") {
                $campos .=",sum(CASE WHEN (com.cveComision =1) THEN 1 ELSE 0 END) doloso,
sum(CASE WHEN (com.cveComision =2) THEN 1 ELSE 0 END) culposo,
sum(CASE WHEN (com.cveComision =3) THEN 1 ELSE 0 END) noAplica,
sum(CASE WHEN (com.cveComision =4) THEN 1 ELSE 0 END) noEspecificado,
sum(CASE WHEN (fa.cveFormaAccion =1) THEN 1 ELSE 0 END) conViolencia,
sum(CASE WHEN (fa.cveFormaAccion =2) THEN 1 ELSE 0 END) sinViolencia,
sum(CASE WHEN (fa.cveFormaAccion =3) THEN 1 ELSE 0 END) noAplica2,
sum(CASE WHEN (fa.cveFormaAccion =4) THEN 1 ELSE 0 END) noEspecificado2,
sum(CASE WHEN (moda.cveModalidad =1) THEN 1 ELSE 0 END) agravado,
sum(CASE WHEN (moda.cveModalidad =2) THEN 1 ELSE 0 END) atenuado,
sum(CASE WHEN (moda.cveModalidad =3) THEN 1 ELSE 0 END) calificado,
sum(CASE WHEN (moda.cveModalidad =4) THEN 1 ELSE 0 END) calificadoAgravado,
sum(CASE WHEN (moda.cveModalidad =5) THEN 1 ELSE 0 END) simple,
sum(CASE WHEN (moda.cveModalidad =6) THEN 1 ELSE 0 END) noAplica3,
sum(CASE WHEN (moda.cveModalidad =7) THEN 1 ELSE 0 END) noEspecificado3,
sum(CASE WHEN (moda.cveModalidad =1) THEN 1 ELSE 0 END) parteCuerpo,
sum(CASE WHEN (moda.cveModalidad =2) THEN 1 ELSE 0 END) armaBlanca,
sum(CASE WHEN (moda.cveModalidad =3) THEN 1 ELSE 0 END) armaFuego,
sum(CASE WHEN (moda.cveModalidad =4) THEN 1 ELSE 0 END) otroElemento,
sum(CASE WHEN (moda.cveModalidad =5) THEN 1 ELSE 0 END) noAplica4,
sum(CASE WHEN (moda.cveModalidad =6) THEN 1 ELSE 0 END) noEspecificado4";
            }
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",com.cveComision,com.desComision";

            $condiciones .= " AND com.cveComision=iodc.cveComision ";


            $tablas .= ", tblcomisiones com";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",fa.cveFormaAccion,fa.desFormaAccion";
            if ($condiciones != "") {
                $condiciones .= " AND fa.cveFormaAccion=iodc.cveFormaAccion ";
            } else {
                $condiciones .= " fa.cveFormaAccion=iodc.cveFormaAccion ";
            }

            $tablas .= ", tblformasacciones fa ";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",moda.cveModalidad,moda.desModalidad";
            if ($condiciones != "") {
                $condiciones .= " AND moda.cveModalidad=iodc.cveModalidad ";
            } else {
                $condiciones .= " moda.cveModalidad=iodc.cveModalidad ";
            }

            $tablas .= ", tblmodalidades moda ";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",elemcom.cveElementoComision,elemcom.desElementoComision";
            if ($condiciones != "") {
                $condiciones .= " AND elemcom.cveElementoComision=iodc.cveElementoComision ";
            } else {
                $condiciones .= " elemcom.cveElementoComision=iodc.cveElementoComision ";
            }

            $tablas .= ", tblelementoscomisiones elemcom ";
        }


        if ($datos["fechaDesde"] != "") {
            $fechaInicio = explode("/", $datos["fechaDesde"]);
           // var_dump($fechaInicio);
         $sqlIntervalo = " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        $params = array();
        $params["orders"] = "";
        if ($datos["porMes"] != "") {
            $mesAnio = $datos["porMes"];
            $condiciones .= " AND (month(cJ.fechaRadicacion)=$mesAnio)";
        }
        


        $params["fields"] = "d.cveDelito,d.desDelito,j.desJuzgado,r.desRegion,r.cveRegion,dis.desDistrito,dis.cveDistrito,j.cveJuzgado,cj.carpetaInv " . $campos;

        $params["tables"] = "tbldelitoscarpetas dc, tbldelitos d
,tblcarpetasJudiciales cj,tbljuzgados j,tblregiones r,tbldistritos dis, tblimpofedelcarpetas iodc , tbltiposJuzgados tj" . $tablas;


        $params["conditions"] = "iodc.activo='S' AND iodc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.activo='S'
AND d.cveDelito=dc.cveDelito AND d.activo='S' 
ANd cj.idCarpetaJudicial = iodc.idCarpetaJudicial
AND cj.activo='S'
AND j.cveJuzgado=cj.cveJuzgado
AND j.activo='S'
AND r.cveRegion=j.cveRegion
AND r.activo='S'
AND dis.cveDistrito=j.cveDistrito
AND dis.activo='S'
AND tj.cveTipoJuzgado=j.cveTipoJuzgado
AND tj.activo='S'
AND cj.cveTipoCarpeta <= 5 " . $condiciones;
        
        if($datos["orders"] != ""){
            $params["orders"] = $datos["orders"];
        }
        


        if ($datos["cveRegion"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
            } else {
                $params["conditions"].="r.cveRegion=" . $datos["cveRegion"];
            }
        }
        if ($datos["cveEstatusCarpeta"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND  cj.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
            } else {
                $params["conditions"].="  cj.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
            }
        }

        if ($datos["cveDistrito"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND dis.cveDistrito=" . $datos["cveDistrito"];
            } else {
                $params["conditions"].="  dis.cveDistrito=" . $datos["cveDistrito"];
            }
        }

        if ($datos["numero"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND cj.numero=" . $datos["numero"];
            } else {
                $params["conditions"].="  cj.numero=" . $datos["numero"];
            }
        }

        if ($datos["anio"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND cj.anio=" . $datos["anio"];
            } else {
                $params["conditions"].="  cj.anio=" . $datos["anio"];
            }
        }

        if ($datos["cveJuzgado"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
            } else {
                $params["conditions"].=" cj.cveJuzgado=" . $datos["cveJuzgado"];
            }
        }

        if ($datos["cveTipoCarpeta"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            } else {
                $params["conditions"].=" cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            }
        }

        if ($datos["cveTipoJuzgado"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            } else {
                $params["conditions"].=" tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            }
        }

        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }



        $params["groups"] = $datos["groups"];


        if ($datos['opcCheck'] != "0") {
            if ($datos["groups"] == "") {
                $params["groups"] = "";
            }
        }
        if ($datos["detalles"] == "DETALLE") {
            $params['fields'].=",oc.nombre as onombre,oc.paterno as opaterno, oc.materno as omaterno,oc.nombreMoral as onombreMoral,oc.cveTipoPersona as ocveTipoPersona,ic.nombre as inombre,ic.paterno as ipaterno, ic.materno as imaterno,ic.nombreMoral as inombreMoral,ic.cveTipoPersona as icveTipoPersona,iodc.fechaDelito,cj.numero,cj.anio,cj.cvetipoCarpeta,tc.desTipoCarpeta,tj.desTipoJuzgado";
            $params['conditions'].=" AND iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta AND oc.activo='S' AND ic.activo='S' AND cj.cveTipoCarpeta=tc.cveTipoCarpeta AND tc.activo='S'";
            $params['tables'].= ",tblofendidosCarpetas oc, tblimputadosCarpetas ic,tbltiposCarpetas tc";
        } else {
            $params['fields'].=",oc.nombre as onombre,oc.paterno as opaterno, oc.materno as omaterno,oc.nombreMoral as onombreMoral,oc.cveTipoPersona as ocveTipoPersona,ic.nombre as inombre,ic.paterno as ipaterno, ic.materno as imaterno,ic.nombreMoral as inombreMoral,ic.cveTipoPersona as icveTipoPersona,iodc.fechaDelito,cj.numero,cj.anio,cj.cvetipoCarpeta,tc.desTipoCarpeta";
            $params['conditions'].=" AND iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta AND oc.activo='S' AND ic.activo='S' AND cj.cveTipoCarpeta=tc.cveTipoCarpeta AND tc.activo='S'";
            $params['tables'].= ",tblofendidosCarpetas oc, tblimputadosCarpetas ic,tbltiposCarpetas tc";

            $params['fields'].= ",count(iodc.idImpOfeDelCarpeta) as totalCount";
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {

            $aux = "count(x.cveDelito) as totalCount";

            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
             if ($params["groups"] != "") {
                $params["groups"].= ") as x";
            } else {
                $params["conditions"].= ") as x";
            }
        }
        $SelectDao = new SelectDAO();
        
        echo $SelectDao->selectDAO($params, null, $paginacion);
    }

}
