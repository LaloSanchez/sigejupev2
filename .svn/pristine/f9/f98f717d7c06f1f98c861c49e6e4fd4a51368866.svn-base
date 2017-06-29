<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

class ReporteSolicitudesAudienciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteSolicitudesAudiencias( $datos, $paginacion) {
        $consulta = "";
        $estatusSolicitud = "";
        $bandera = null;
        $datos["groups"] = "";


        switch ($datos["nivel"]) {
            case 1:
                if ($datos['opcCheck'] != "0") {
                    $datos["orders"] = "totalCJ DESC";
                } else {
                    $datos["orders"] = "totalCount DESC";
                }
                if ($datos["cveEstatusSolicitud"] != "") {
                    $datos["groups"] .= "es.desEstatusSolicitud ";
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
                        $datos["groups"] = " del.cveDelito ";
                    } else {
                        $datos["groups"] .= ", del.cveDelito ";
                    }
                }
                if ($datos["checkClasDelitos"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " del.cveClasificacionDelito ";
                    } else {
                        $datos["groups"] .= ", del.cveClasificacionDelito ";
                    }
                }
                if ($datos["checkClasDelitos"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " cdelor.cveClasificacionDelitoOrden ";
                    } else {
                        $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                    }
                }
                if ($datos["checkTerminaciones"] != "") {

                    if ($datos["groups"] == "") {
                        $datos["groups"] = " ct.cveTerminacion ";
                    } else {
                        $datos["groups"] .= ", ct.cveTerminacion ";
                    }
                }
                if ($datos["checkClasDelitos"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " conc.cveConcurso ";
                    } else {
                        $datos["groups"] .= ", conc.cveConcurso ";
                    }
                }
                if ($datos["checkCarEjecu"] != "") {

                    if ($datos["groups"] == "") {
                        $datos["groups"] = " com.cveComision ";
                    } else {
                        $datos["groups"] .= ", com.cveComision ";
                    }
                }
                if ($datos["checkCarEjecu"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " fa.cveFormaAccion ";
                    } else {
                        $datos["groups"] .= ", fa.cveFormaAccion ";
                    }
                }

                if ($datos["checkCarEjecu"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " moda.cveModalidad ";
                    } else {
                        $datos["groups"] .= ", moda.cveModalidad ";
                    }
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", elemcom.cveElementocomision ";
                }

                if ($datos["checkDetenido"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] .= " cg.desConsignacion ";
                    } else {
                        $datos["groups"] .= ", cg.desConsignacion ";
                    }
                }

                break;
            case 2:
                if ($datos['opcCheck'] != "0") {
                    $datos["orders"] = "totalCJ DESC";
                } else {
                    $datos["orders"] = "totalCount DESC";
                }
                $datos["groups"] = "r.desRegion";

                if ($datos["cveEstatusSolicitud"] != "") {
                    $datos["groups"] .= ",es.desEstatusSolicitud ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ",tj.desTipoJuzgado ";
                }

                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }

                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ",del.cveDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ",del.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkTerminaciones"] != "") {
                    $datos["groups"] .= ", ct.cveTerminacion ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", conc.cveConcurso ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", com.cveComision ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", fa.cveFormaAccion ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", moda.cveModalidad ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", elemcom.cveElementocomision ";
                }
                break;
            case 3:
                if ($datos['opcCheck'] != "0") {
                    $datos["orders"] = "totalCJ DESC";
                } else {
                    $datos["orders"] = "totalCount DESC";
                }
                $datos["groups"] = "d.desDistrito ";
                if ($datos["cveEstatusSolicitud"] != "") {
                    $datos["groups"] .= ",es.desEstatusSolicitud ";
                }
                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ", tj.desTipoJuzgado ";
                }

                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ", con.cveConsumacion ";
                }
                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ", del.cveDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", del.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkTerminaciones"] != "") {
                    $datos["groups"] .= ", ct.cveTerminacion ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", conc.cveConcurso ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", com.cveComision ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", fa.cveFormaAccion ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", moda.cveModalidad ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", elemcom.cveElementocomision ";
                }
                break;
            case 4:
                if ($datos['opcCheck'] != "0") {
                    $datos["orders"] = "totalCJ DESC";
                } else {
                    $datos["orders"] = "totalCount DESC";
                }
                $datos["groups"] = "r.desRegion,d.desDistrito,j.desJuzgado ";

                if ($datos["cveEstatusSolicitud"] != "") {
                    $datos["groups"] .= ",es.desEstatusSolicitud ";
                }
                if ($datos["checkConsumaciones"] != "") {
                    $datos["groups"] .= ",con.cveConsumacion ";
                }
                if ($datos["cveTipoJuzgado"] != "") {
                    $datos["groups"] .= ", tj.desTipoJuzgado ";
                }
                if ($datos["checkDelitos"] != "") {
                    $datos["groups"] .= ", del.cveDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", del.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkTerminaciones"] != "") {
                    $datos["groups"] .= ", ct.cveTerminacion ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", conc.cveConcurso ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", com.cveComision ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", fa.cveFormaAccion ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", moda.cveModalidad ";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $datos["groups"] .= ", elemcom.cveElementocomision ";
                }
                break;
            case 5:

//                $datos["groups"] = "" . $tipoJuzgado; //. $EstatusSolicitud;
//                if ($datos["cveEstatusSolicitud"] != "") {
//                    // $datos["groups"] = "es.desEstatusSolicitud";
//                }
////                if ($datos["cveDelito"] != "") {
//                if ($datos["groups"] != "") {
//                    $datos["groups"] .= ",ic.idImputadoSolicitud";
//                } else {
//                    $datos["groups"] .= "ic.idImputadoSolicitud";
//                }
//                }
                break;
            case 6:

                break;
        }


        $consulta = $this->selectSolicitudesAudiencias( $datos, $paginacion, $bandera);
        return $consulta;
    }

    public function selectSolicitudesAudiencias( $datos, $paginacion, $bandera) {


        $sqlIntervalo = "";
        $tables = "";
        $condiciones = "";
        $campos = "";
        if ($datos["checkConsumaciones"] != "") {
            $campos .= ",con.cveConsumacion,con.desConsumacion";
            $tables = "JOIN tblimpofedelsolicitudes iods ON (sa.idSolicitudAudiencia = iods.idSolicitudAudiencia) JOIN tblconsumaciones con ON (con.cveConsumacion = iods.cveConsumacion)";
            $condiciones = " AND iods.activo = 'S' AND con.activo = 'S'";
        }
        if ($datos["checkDetenido"] != "") {
            $campos .= ",cg.desConsignacion,cg.cveConsignacion";
            $tables = "LEFT JOIN tblconsignaciones cg ON (cg.cveConsignacion = sa.cveConsignacion)";
            $condiciones = " AND cg.activo = 'S'";
        }
//        if ($datos["checkIncompetencia"] != "") {
//            $condiciones = " AND sa.incompetencia ='S'";
//        }

        if ($datos["cveConsumacion"] != "") {
            $condiciones .= " AND con.cveConsumacion =" . $datos["cveConsumacion"];
        }

        if ($datos["checkTerminaciones"] != "") {
            $campos .= ",ct.cveTerminacion,ct.desTerminacion";
            $condiciones .= "  AND ct.activo = 'S' ";

            $tables .= "JOIN tblimpofedelsolicitudes iods ON (sa.idSolicitudAudiencia = iods.idSolicitudAudiencia) LEFT JOIN tblterminaciones ct ON (ct.cveTerminacion =iods.CveTerminacion)";
        }
        if ($datos["cveTerminacion"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND iods.CveTerminacion =" . $datos["cveTerminacion"];
            } else {
                $condiciones .= " iods.CveTerminacion =" . $datos["cveTerminacion"];
            }
        }
        
        if ($datos["checkDelitos"] != "") {
            $campos .= ",del.cveDelito,del.desDelito";
            $tables .= "LEFT JOIN tbldelitosSolicitudes dc ON (iods.idDelitoSolicitud = dc.idDelitoSolicitud) LEFT JOIN tbldelitos del ON (dc.cveDelito = del.cveDelito)";
            $condiciones .= " AND dc.activo = 'S' AND del.activo = 'S'";
            
        }

        if ($datos["cveDelito"] != "") {
            $condiciones .= " AND del.cveDelito=" . $datos["cveDelito"];
        }
        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdel.cveClasificacionDelito,cdel.desClasificacionDelito";
            $condiciones .= " AND cdel.cveClasificacionDelito=del.cveClasificacionDelito AND cdel.activo = 'S' ";
            $tables .= "LEFT JOIN tblclasificacionesdelitos cdel ON (cdel.cveClasificacionDelito = del.cveClasificacionDelito)";
        }
        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdelor.cveClasificacionDelitoOrden,cdelor.desClasificacionDelitoOrden";
            if ($condiciones != "") {
                $condiciones .= " AND cdelor.cveClasificacionDelitoOrden=iods.cveClasificacionDelitoOrden ";
            } else {
                $condiciones .= " cdelor.cveClasificacionDelitoOrden=iods.cveClasificacionDelitoOrden ";
            }

            $tables .= "LEFT JOIN tblclasificacionesdelitosorden cdelor ON (cdelor.cveClasificacionDelitoOrden = iods.cveClasificacionDelitoOrden)";
            $condiciones .= " AND cdelor.activo = 'S'";
        }

        if ($datos["checkClasDelitos"] != "") {
            $campos .= ",conc.cveConcurso,conc.desConcurso";
            if ($condiciones != "") {
                $condiciones .= " AND conc.cveConcurso=iods.cveConcurso ";
            } else {
                $condiciones .= " conc.cveConcurso=iods.cveConcurso ";
            }

            $tables .= "LEFT JOIN tblconcursos conc ON (conc.cveConcurso = iods.cveConcurso)";
            $condiciones .= " AND conc.activo = 'S'";
        }

        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",com.cveComision,com.desComision";

            $condiciones .= " AND com.cveComision=iods.cveComision ";


            $tables .= "LEFT JOIN tblcomisiones com ON (com.cveComision = iods.cveComision)";
            $condiciones .= " AND com.activo = 'S'";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",fa.cveFormaAccion,fa.desFormaAccion";
            if ($condiciones != "") {
                $condiciones .= " AND fa.cveFormaAccion=iods.cveFormaAccion ";
            } else {
                $condiciones .= " fa.cveFormaAccion=iods.cveFormaAccion ";
            }

            $tables .= "LEFT JOIN tblformasacciones fa ON (fa.cveFormaAccion=iods.cveFormaAccion)";
            $condiciones = " AND fa.activo = 'S'";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",moda.cveModalidad,moda.desModalidad";
            if ($condiciones != "") {
                $condiciones .= " AND moda.cveModalidad=iods.cveModalidad AND moda.activo = 'S' ";
            } else {
                $condiciones .= " moda.cveModalidad=iods.cveModalidad AND moda.activo = 'S'";
            }

            $tables .= "LEFT JOIN tblmodalidades moda ON (moda.cveModalidad=iods.cveModalidad)";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",elemcom.cveElementoComision,elemcom.desElementoComision";
            if ($condiciones != "") {
                $condiciones .= " AND elemcom.cveElementoComision=iods.cveElementoComision AND elemcom.activo = 'S'";
            } else {
                $condiciones .= " elemcom.cveElementoComision=iods.cveElementoComision AND elemcom.activo = 'S'";
            }

            $tables .= "LEFT JOIN tblelementoscomisiones elemcom ON (elemcom.cveElementoComision=iods.cveElementoComision)";
        }

        if ($datos["cveClasificacionDelito"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND cdel.cveClasificacionDelito =" . $datos["cveClasificacionDelito"];
            } else {
                $condiciones .= " cdel.cveClasificacionDelito =" . $datos["cveClasificacionDelito"];
            }
        }
        if ($datos["cveComision"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND com.cveComision =" . $datos["cveComision"];
            } else {
                $condiciones .= " com.cveComision =" . $datos["cveComision"];
            }
        }
        if ($datos["cveFormaAccion"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND fa.cveFormaAccion =" . $datos["cveFormaAccion"];
            } else {
                $condiciones .= " fa.cveFormaAccion =" . $datos["cveFormaAccion"];
            }
        }
        if ($datos["cveModalidad"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND moda.cveModalidad =" . $datos["cveModalidad"];
            } else {
                $condiciones .= " moda.cveModalidad =" . $datos["cveModalidad"];
            }
        }
        if ($datos["cveConsignacion"] != "") {
            $condiciones .= " AND cg.cveConsignacion =" . $datos["cveConsignacion"];
        }
        if ($datos["cveClasificacionDelitoOrden"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND cdelor.cveClasificacionDelitoOrden =" . $datos["cveClasificacionDelitoOrden"];
            } else {
                $condiciones .= " cdelor.cveClasificacionDelitoOrden =" . $datos["cveClasificacionDelitoOrden"];
            }
        }

        if ($datos["cveConcurso"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND conc.cveConcurso =" . $datos["cveConcurso"];
            } else {
                $condiciones .= " conc.cveConcurso =" . $datos["cveConcurso"];
            }
        }
        if ($datos["cveElementoComision"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND elemcom.cveElementoComision =" . $datos["cveElementoComision"];
            } else {
                $condiciones .= " elemcom.cveElementoComision =" . $datos["cveElementoComision"];
            }
        }
        if ($datos["fechaDesde"] != "") {
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo = " AND sa.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  sa.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        $params = array();
        if ($datos["nivel"] != "5") {
            $params["fields"] = "";
            if ($datos['opcCheck'] == "0") {
                $params["fields"] = "count(sa.idSolicitudAudiencia) as totalCount,";
            }
        } else {
            $params["fields"] = "";
        }
        $params["orders"] = "";

        if ($datos["porMes"] != "") {
            $mesAnio = $datos["porMes"];
            $condiciones .= " AND (month(sa.fechaRegistro)=$mesAnio)";
        }



        $params["fields"] .= "es.desEstatusSolicitud,sa.cveEstatusSolicitud, sa.idSolicitudAudiencia,tj.cveTipoJuzgado,tj.desTipoJuzgado,sa.numero,sa.anio,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,"
                . "j.cveJuzgado,j.desJuzgado,tc.cveTipoCarpeta,tc.desTipoCarpeta,sa.carpetaInv" . $campos;


        $params["tables"] = "tblsolicitudesaudiencias sa LEFT JOIN tbljuzgados j ON(j.cveJuzgado=sa.CveJuzgado) LEFT JOIN tbltiposjuzgados tj ON (j.cveTipojuzgado = tj.cveTipojuzgado) "
                . "LEFT JOIN tblestatusSolicitudes es ON (sa.cveEstatusSolicitud=es.cveEstatusSolicitud) LEFT JOIN tblregiones r ON (j.cveRegion=r.cveRegion) LEFT JOIN tbldistritos d ON (j.cveDistrito=d.cveDistrito) JOIN tbltiposCarpetas tc ON (sa.cvetipoCarpeta = tc.cvetipoCarpeta)"
                . $tables;


        $params["conditions"] = "sa.activo = 'S' AND j.activo = 'S' AND tj.activo = 'S' AND es.activo = 'S' AND r.activo = 'S' AND d.activo = 'S' AND tc.activo = 'S' AND tj.activo = 'S' AND sa.cvetipoCarpeta <= 5  " . $condiciones;

        if ($datos["cveRegion"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
            } else {
                $params["conditions"].="r.cveRegion=" . $datos["cveRegion"];
            }
        }
        if ($datos["cveEstatusSolicitud"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND  es.cveEstatusSolicitud=" . $datos["cveEstatusSolicitud"];
            } else {
                $params["conditions"].="  es.cveEstatusSolicitud=" . $datos["cveEstatusSolicitud"];
            }
        }

        if ($datos["cveDistrito"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
            } else {
                $params["conditions"].="  d.cveDistrito=" . $datos["cveDistrito"];
            }
        }

        if ($datos["numero"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND sa.numero=" . $datos["numero"];
            } else {
                $params["conditions"].="  sa.numero=" . $datos["numero"];
            }
        }

        if ($datos["anio"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND sa.anio=" . $datos["anio"];
            } else {
                $params["conditions"].="  sa.anio=" . $datos["anio"];
            }
        }

        if ($datos["cveJuzgado"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND sa.cveJuzgado=" . $datos["cveJuzgado"];
            } else {
                $params["conditions"].=" sa.cveJuzgado=" . $datos["cveJuzgado"];
            }
        }

        if ($datos["cvetipoCarpeta"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND sa.cvetipoCarpeta=" . $datos["cvetipoCarpeta"];
            } else {
                $params["conditions"].=" sa.cvetipoCarpeta=" . $datos["cvetipoCarpeta"];
            }
        }

        if ($datos["cveTipoJuzgado"] != "" && $datos["cveTipoJuzgado"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            } else {
                $params["conditions"].=" tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            }
        }

        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }


        $params["groups"] = "";
        $params["groups"] = $datos["groups"];


        if ($datos['opcCheck'] != "0") {
            if ($datos["groups"] == "") {
                $params["groups"] = "";
            }

            if ($params["groups"] != "") {
                $params["groups"] .= " ,sa.idSolicitudAudiencia";
            } else {
                $params["groups"] = " sa.idSolicitudAudiencia";
            }

            if ($datos["nivel"] != "5") {

                $inicio = " *,count(idSolicitudAudiencia) as totalCJ FROM (";
                $params["fields"] = $inicio . " SELECT " . $params["fields"];
                $fin = ") as x";

//                if ($datos["nivel"] == "1") {

                $fin .= " group by ";

                if ($datos["checkConsumaciones"] != "") {
                    $fin .= " cveConsumacion ";
                }
                if ($datos["checkDetenido"] != "") {
                    $fin .= "desConsignacion ";
                }
                if ($datos["checkTerminaciones"] != "") {
                    $fin .= "cveTerminacion";
                }
                if ($datos["checkDelitos"] != "") {
                    $fin .= ", cveDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $fin .= ", cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $fin .= ", cveClasificacionDelitoOrden";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $fin .= ", cveConcurso";
                }


                if ($datos["checkCarEjecu"] != "") {
                    $fin .= ", cveComision";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $fin .= ", cveFormaAccion";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $fin .= ", cveModalidad";
                }
                if ($datos["checkCarEjecu"] != "") {
                    $fin .= ", cveElementoComision";
                }


                if ($datos["nivel"] == "2") {
                    $fin .= ", cveRegion";
                }
                if ($datos["nivel"] == "3") {
                    $fin .= ", cveRegion, cveDistrito";
                }
                if ($datos["nivel"] == "4") {
                    $fin .= ", cveRegion, cveDistrito,desJuzgado";
                }
                if ($params["groups"] != "") {
                    $params["groups"].= $fin;
                } else {
                    $params["conditions"].= $fin;
                }
            } else {
                $inicio = " *,count(idSolicitudAudiencia) as totalCJ FROM (";
                $params["fields"] = $inicio . " SELECT " . $params["fields"];
                $fin = ") as x GROUP BY  idSolicitudAudiencia ";
                if ($params["groups"] != "") {
                    $params["groups"].= $fin;
                } else {
                    $params["conditions"].= $fin;
                }
            }
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            $aux = "count(x.idSolicitudAudiencia) as totalCount";
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idSolicitudAudiencia) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            if ($params["orders"] != "") {
                $params["orders"].=") as x";
            } else if ($params["groups"] != "") {
                $params["groups"].= ") as x";
            } else {
                $params["conditions"].= ") as x";
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

}
