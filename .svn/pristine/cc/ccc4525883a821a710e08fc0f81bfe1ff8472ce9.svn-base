<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ReporteCausasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteCausas($datos, $paginacion, $accion = null, $reporte = null) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";
//

        switch ($datos["nivel"]) {
            case 1:
                if ($datos['opcCheck'] != "0") {
                    $datos["orders"] = "totalCJ DESC";
                } else {
                    $datos["orders"] = "totalCount DESC";
                }

//                if ($datos["cveEstatusCarpeta"] != "") {
//                    $datos["groups"] .= "ec.desEstatusCarpeta ";
//                }

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
                        $datos["groups"] = " iodc.cveClasificacionDelito ";
                    } else {
                        $datos["groups"] .= ", iodc.cveClasificacionDelito ";
                    }
                }
                if ($datos["checkClasDelitos"] != "") {
                    if ($datos["groups"] == "") {
                        $datos["groups"] = " cdelor.cveClasificacionDelitoOrden ";
                    } else {
                        $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                    }
                }
                if ($datos["checkConclusiones"] != "") {

                    if ($datos["groups"] == "") {
                        $datos["groups"] = " cnc.cveConclusion ";
                    } else {
                        $datos["groups"] .= ", cnc.cveConclusion ";
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

//                if ($datos["cveEstatusCarpeta"] != "") {
//                    $datos["groups"] .= ",ec.desEstatusCarpeta ";
//                }
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
                    $datos["groups"] .= ",iodc.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkConclusiones"] != "") {
                    $datos["groups"] .= ", cnc.cveConclusion ";
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
//                if ($datos["cveEstatusCarpeta"] != "") {
//                    $datos["groups"] .= ",ec.desEstatusCarpeta ";
//                }
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
                    $datos["groups"] .= ", iodc.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkConclusiones"] != "") {
                    $datos["groups"] .= ", cnc.cveConclusion ";
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

//                if ($datos["cveEstatusCarpeta"] != "") {
//                    $datos["groups"] .= ",ec.desEstatusCarpeta ";
//                }
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
                    $datos["groups"] .= ", iodc.cveClasificacionDelito ";
                }
                if ($datos["checkClasDelitos"] != "") {
                    $datos["groups"] .= ", cdelor.cveClasificacionDelitoOrden ";
                }
                if ($datos["checkConclusiones"] != "") {
                    $datos["groups"] .= ", cnc.cveConclusion ";
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
            case 6:

                break;
        }


        $consulta = $this->selectCarpetaCausasRadicadas($datos, $paginacion, $bandera, $accion, $reporte);
        return $consulta;
    }

    public function selectCarpetaCausasRadicadas($datos, $paginacion, $bandera, $accion = null, $reporte = null) {


        $sqlIntervalo = "";
        $tables = "";
        $condiciones = "";
        $campos = "";

        if ($reporte == "CausaJuicio") {
            $campos .= " ,js.nombre,js.titulo,js.paterno,js.materno ,year(cj.fechaTermino) as year ,month(cj.fechaTermino) as mes";
            $tables .= " ,tbljuzgadores js, tbljuzgadorescarpetas jc";
            $condiciones .= " AND jc.activo = 'S' AND jc.idJuzgador = js.idJuzgador AND cj.idCarpetaJudicial = jc.idCarpetaJudicial AND cj.cveTipoCarpeta <= 2  ";
            $fechaInicio .= explode("/", $datos["fechaDesde"]);
            $sqlIntervalo = " AND cj.fechaTermino >= date_add('" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00',INTERVAL -1 month) ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaTermino <= LAST_DAY('" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ') ";
            }
            $datos["groups"] .= "year(cj.fechaTermino), month(cj.fechaTermino)";
        } else if ($reporte == "CausaControl") {
            $campos .= " ,js.nombre,js.titulo,js.paterno,js.materno ,year(cj.fechaTermino) as year ,month(cj.fechaTermino) as mes";
            $tables = " ,tbljuzgadores js, tbljuzgadorescarpetas jc";
            $condiciones .= " AND jc.activo = 'S' AND jc.idJuzgador = js.idJuzgador AND cj.idCarpetaJudicial = jc.idCarpetaJudicial AND cj.cveTipoCarpeta = 2  ";
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo = " AND cj.fechaTermino >= date_add('" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00',INTERVAL -1 month)";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaTermino <= LAST_DAY('" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ') ";
            }
            $datos["groups"] .= "year(cj.fechaTermino), month(cj.fechaTermino)";
        } else {
            if ($datos["fechaDesde"] != "") {
                $fechaInicio = explode("/", $datos["fechaDesde"]);
                $sqlIntervalo = " AND cj.fechaTermino >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($datos["fechaHasta"] != "") {
                    $fechaFinal = explode("/", $datos["fechaHasta"]);
                    $sqlIntervalo.=" AND  cj.fechaTermino <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
        }

        if ($datos["checkConsumaciones"] != "") {
            $campos .= ",con.cveConsumacion,con.desConsumacion";
            $tables = "JOIN tblimpofedelcarpetas iodc ON (cj.idCarpetaJudicial = iodc.idCarpetaJudicial) JOIN tblconsumaciones con ON (con.cveConsumacion = iodc.cveConsumacion)";
            $condiciones .= " AND iodc.activo = 'S' AND con.activo = 'S'";
        }
        if ($datos["checkDetenido"] != "") {
            $campos .= ",cg.desConsignacion,cg.cveConsignacion";
            $tables = "LEFT JOIN tblconsignaciones cg ON (cg.cveConsignacion = cj.cveConsignacion)";
            $condiciones .= " AND cg.activo = 'S'";
        }
        if ($datos["checkIncompetencia"] != "") {
            $condiciones .= " AND cj.incompetencia ='S'";
        }

        if ($datos["cveConsumacion"] != "") {
            $condiciones .= " AND con.cveConsumacion =" . $datos["cveConsumacion"];
        }

        if ($datos["checkConclusiones"] != "") {
            $campos .= ",cnc.cveConclusion,cnc.desConclusion";
            $condiciones .= " AND icc.idImputadoCarpeta=ic.idImputadoCarpeta AND ic.activo = 'S' AND icc.activo = 'S' AND cnc.activo = 'S'";

            $tables .= "LEFT JOIN tblImputadosCarpetas ic ON (cj.idCarpetaJudicial=ic.idCarpetaJudicial) LEFT JOIN tblimputadoscarpetasconclusiones icc ON (ic.idImputadoCarpeta = icc.idImputadoCarpeta) LEFT JOIN tblconclusiones cnc ON (cnc.cveConclusion = icc.cveConclusion)";
        }
        if ($datos["cveConclusion"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND cnc.cveConclusion =" . $datos["cveConclusion"];
            } else {
                $condiciones .= " cnc.cveConclusion =" . $datos["cveConclusion"];
            }
        }
        if ($datos["checkDelitos"] != "") {
            $campos .= ",del.cveDelito,del.desDelito";
            $tables .= "LEFT JOIN tbldelitoscarpetas dc ON (iodc.idDelitoCarpeta = dc.idDelitoCarpeta) LEFT JOIN tbldelitos del ON (dc.cveDelito = del.cveDelito)";
            $condiciones .= " AND dc.activo = 'S' AND del.activo = 'S'";
        }

        if ($datos["cveDelito"] != "") {

            $condiciones .= " AND del.cveDelito=" . $datos["cveDelito"];
        }
        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdel.cveClasificacionDelito,cdel.desClasificacionDelito";
            $condiciones .= " AND cdel.cveClasificacionDelito=iodc.cveClasificacionDelito AND cdel.activo = 'S' ";
            $tables .= "LEFT JOIN tblclasificacionesdelitos cdel ON (cdel.cveClasificacionDelito = iodc.cveClasificacionDelito)";
        }
        if ($datos["checkClasDelitos"] != "") {

            $campos .= ",cdelor.cveClasificacionDelitoOrden,cdelor.desClasificacionDelitoOrden";
            if ($condiciones != "") {
                $condiciones .= " AND cdelor.cveClasificacionDelitoOrden=iodc.cveClasificacionDelitoOrden ";
            } else {
                $condiciones .= " cdelor.cveClasificacionDelitoOrden=iodc.cveClasificacionDelitoOrden ";
            }

            $tables .= "LEFT JOIN tblclasificacionesdelitosorden cdelor ON (cdelor.cveClasificacionDelitoOrden = iodc.cveClasificacionDelitoOrden)";
            $condiciones .= " AND cdelor.activo = 'S'";
        }

        if ($datos["checkClasDelitos"] != "") {
            $campos .= ",conc.cveConcurso,conc.desConcurso";
            if ($condiciones != "") {
                $condiciones .= " AND conc.cveConcurso=iodc.cveConcurso ";
            } else {
                $condiciones .= " conc.cveConcurso=iodc.cveConcurso ";
            }

            $tables .= "LEFT JOIN tblconcursos conc ON (conc.cveConcurso = iodc.cveConcurso)";
            $condiciones .= " AND conc.activo = 'S'";
        }

        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",com.cveComision,com.desComision";

            $condiciones .= " AND com.cveComision=iodc.cveComision ";


            $tables .= "LEFT JOIN tblcomisiones com ON (com.cveComision = iodc.cveComision)";
            $condiciones .= " AND com.activo = 'S'";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",fa.cveFormaAccion,fa.desFormaAccion";
            if ($condiciones != "") {
                $condiciones .= " AND fa.cveFormaAccion=iodc.cveFormaAccion ";
            } else {
                $condiciones .= " fa.cveFormaAccion=iodc.cveFormaAccion ";
            }

            $tables .= "LEFT JOIN tblformasacciones fa ON (fa.cveFormaAccion=iodc.cveFormaAccion)";
            $condiciones .= " AND fa.activo = 'S'";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",moda.cveModalidad,moda.desModalidad";
            if ($condiciones != "") {
                $condiciones .= " AND moda.cveModalidad=iodc.cveModalidad AND moda.activo = 'S' ";
            } else {
                $condiciones .= " moda.cveModalidad=iodc.cveModalidad AND moda.activo = 'S'";
            }

            $tables .= "LEFT JOIN tblmodalidades moda ON (moda.cveModalidad=iodc.cveModalidad)";
        }
        if ($datos["checkCarEjecu"] != "") {
            $campos .= ",elemcom.cveElementoComision,elemcom.desElementoComision";
            if ($condiciones != "") {
                $condiciones .= " AND elemcom.cveElementoComision=iodc.cveElementoComision AND elemcom.activo = 'S'";
            } else {
                $condiciones .= " elemcom.cveElementoComision=iodc.cveElementoComision AND elemcom.activo = 'S'";
            }

            $tables .= "LEFT JOIN tblelementoscomisiones elemcom ON (elemcom.cveElementoComision=iodc.cveElementoComision)";
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

        $params = array();
        if ($datos["nivel"] != "5") {
            $params["fields"] = "";
            if ($datos['opcCheck'] == "0") {
                $params["fields"] = "count(cj.idCarpetaJudicial) as totalCount,";
            }
        } else {
            $params["fields"] = "";
        }
        $params["orders"] = $datos["orders"];

        if ($datos["porMes"] != "") {
            $mesAnio = $datos["porMes"];
            $condiciones .= " AND (month(cJ.fechaTermino)=$mesAnio)";
        }



        $params["fields"] .= "ec.desEstatusCarpeta,cj.cveEstatusCarpeta, cj.idCarpetaJudicial,tj.cveTipoJuzgado,tj.desTipoJuzgado,cj.numero,cj.anio,r.desRegion,r.cveRegion,d.desDistrito,d.cveDistrito,cj.fechaTermino,"
                . "j.cveJuzgado,j.desJuzgado,tc.cveTipoCarpeta,tc.desTipoCarpeta,cj.carpetaInv,cj.nuc" . $campos;


        $params["tables"] = "tblcarpetasjudiciales cj LEFT JOIN tbljuzgados j ON(j.cveJuzgado=cj.CveJuzgado) LEFT JOIN tbltiposjuzgados tj ON (j.cveTipojuzgado = tj.cveTipojuzgado) "
                . "LEFT JOIN tblestatuscarpetas ec ON (cj.cveEstatusCarpeta=ec.cveEstatusCarpeta) LEFT JOIN tblregiones r ON (j.cveRegion=r.cveRegion) LEFT JOIN tbldistritos d ON (j.cveDistrito=d.cveDistrito) JOIN tbltiposcarpetas tc ON (cj.cveTipoCarpeta = tc.cveTipoCarpeta)"
                . $tables;


        $params["conditions"] = "cj.activo = 'S' AND j.activo = 'S' AND tj.activo = 'S' AND ec.activo = 'S' AND r.activo = 'S' AND d.activo = 'S' AND tc.activo = 'S' AND tj.activo = 'S' AND fechaTermino is not null AND cj.cveTipoCarpeta <= 5  " . $condiciones;

        if ($datos["checkDetalle"] != "") {
            
        } else {
            $params["groups"] = " a.idActuacion";
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
                $params["conditions"].=" AND  ec.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
            } else {
                $params["conditions"].="  ec.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
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
                $params["conditions"].=" AND cj.numero=" . $datos["numero"];
            } else {
                $params["conditions"].="  cj.numero=" . $datos["numero"];
            }
        }

        if ($datos["anio"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND year(cJ.fechaTermino)=" . $datos["anio"];
            } else {
                $params["conditions"].="  year(cJ.fechaTermino)=" . $datos["anio"];
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
                $params["groups"] .= " ,cj.idCarpetaJudicial";
            } else {
                $params["groups"] = " cj.idCarpetaJudicial";
            }

            if ($datos["nivel"] != "5") {

                $inicio = " *,count(idCarpetaJudicial) as totalCJ FROM (";
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
                if ($datos["checkConclusiones"] != "") {
                    $fin .= "cveConclusion";
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
                $inicio = " *,count(idCarpetaJudicial) as totalCJ FROM (";
                $params["fields"] = $inicio . " SELECT " . $params["fields"];
                $fin = ") as x GROUP BY  idCarpetaJudicial ";
                if ($params["groups"] != "") {
                    $params["groups"].= $fin;
                } else {
                    $params["conditions"].= $fin;
                }
            }
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            if ($datos["checkDetalle"] != "") {
                
            } else {
                $aux = "count(x.idCarpetaJudicial) as totalCount";
                if ($datos["detalles"] == "detalle") {
                    $aux = "count(x.idCarpetaJudicial) as totalCount";
                    if ($datos["checkDetalle"] != "") {
                        
                    } else {
                        $params["orders"] = "cj.anio DESC,cj.numero ASC ";
                    }
                }
                $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
                if ($params["groups"] != "") {
                    $params["groups"].= ") as x";
                } else {
                    $params["conditions"].= ") as x";
                }
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
        if($rs->totalCount > 0){
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
        }

        return json_encode($ArrCausas2);
    }

}
