<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

Class ReporteCargaMagistradosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteCargaToca($datos, $paginacion, $accion = null) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";
        if ($accion == "ConsultarCargaJueces_ReporteGeneralTocas") {
            switch ($datos["nivel"]) {
                case 1:
                    $datos["groups"] .= " js.idJuzgador ";
//                    $datos["orders"] = " totalCount desc";
                    break;
                case 2:
                    $datos["groups"] .= " j.cveJuzgado ";
//                    $datos["orders"] = "totalCount desc";
                    break;
                case 3:
                    $datos["orders"] = "cj.anio, cj.numero DESC";
                    break;
            }
        } else {
            switch ($datos["nivel"]) {
                case 1:
                    $datos["groups"] .= " js.idJuzgador ";
//                    $datos["orders"] = " totalCount desc";
                    break;
                case 2:
                    $datos["orders"] = "cj.anio, cj.numero DESC";
                    break;
            }
        }
        $consulta = $this->selectReporteCargaJueces($datos, $paginacion, $bandera, $accion);
        return $consulta;
    }

    public function selectReporteCargaJueces($datos, $paginacion, $bandera, $accion) {
        $sqlIntervalo = "";
        $tablas = "";
        $campos = "";
        $condiciones = "";
        $otrascond = "";

         if ($datos["nivel"] < 3 && $accion == "ConsultarCargaJueces_ReporteGeneralTocas") {
            $campos .=",count(cj.idCarpetaJudicial) as totalCount";
        }

        if ($datos['detalles'] != "") {
            $campos .=" ,st.cveTipoSentencia, ts.desTipoSentencia";
            $tablas .= " left join tblsentenciastocas st on (st.idToca=cj.idCarpetaJudicial) left join  tbltipossentencias ts on (ts.cvetipoSentencia=st.cveTipoSentencia)";
            if ($datos['cveTipoSentencia'] != ""){
                $condiciones .= "  AND st.cveTipoSentencia= ".$datos['cveTipoSentencia'];
            }
        }else if ($datos['cveTipoSentencia'] != "") {
                $campos .=" ,st.cveTipoSentencia, ts.desTipoSentencia";
            $tablas .= " inner join tblsentenciastocas st on (st.idToca=cj.idCarpetaJudicial) inner join  tbltipossentencias ts on (ts.cvetipoSentencia=st.cveTipoSentencia)";
            $condiciones .= "  AND st.cveTipoSentencia= ".$datos['cveTipoSentencia'];
        }
        if ($datos['cveEstatusCarpeta'] != "") {
                $condiciones .= " AND cj.cveEstatusCarpeta=" . $datos["cveEstatusCarpeta"];
        }

        if ($datos["cveJuzgado"] != "") {
            if ($condiciones != "") {
                $condiciones .= " AND j.cveJuzgado=" . $datos["cveJuzgado"];
            } else {
                $condiciones .= " AND j.cveJuzgado=" . $datos["cveJuzgado"];
            }
        } else {
            if ($datos['cveJuzgadoArray'] != "") {
                $cveJuzgadoArray = explode("-", $datos['cveJuzgadoArray']);
                $otrascond .=" AND (";
                for ($i = 1; $i < count($cveJuzgadoArray); $i++) {
                    if ($i == count($cveJuzgadoArray) - 1) {
                        $otrascond .= "j.cveJuzgado = " . $cveJuzgadoArray[$i];
                    } else {
                        $otrascond .= "j.cveJuzgado = " . $cveJuzgadoArray[$i] . " or ";
                    }
                }
                $otrascond.=")";
            }
        }
        if ($datos["idJuzgador"] != "") {
            $condiciones .= " AND js.idJuzgador=" . $datos["idJuzgador"];
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


        $params["fields"] = "cj.*,js.*,tj.desTipoJuzgador,j.desJuzgado,ec.desEstatusCarpeta,cj.cveEstatusCarpeta" . $campos;

        $params["tables"] = "tbljuzgadores js ,tbljuzgadorescarpetas jc, tbljuzgados j ,tbltiposjuzgadores tj,tblestatusCarpetas ec,tblcarpetasjudiciales cj" . $tablas;

// se quito esta condicion --> AND s.activo='S'
        $params["conditions"] = "js.idJuzgador=jc.idJuzgador and jc.idCarpetaJudicial=cj.idCarpetaJudicial and j.cveJuzgado=cj.cveJuzgado and js.cveTipoJuzgador=tj.cveTipoJuzgador and cj.cveEstatuscarpeta=ec.cveestatuscarpeta and cj.activo='S' and jc.activo='S'" . $condiciones . $otrascond;
        if ($datos["orders"] != "") {
            $params["orders"] = $datos["orders"];
        }


        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        $params["groups"] = $datos["groups"];

        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {

//            $aux = "count(x.idCarpetaJudicial) as totalCount";
//
//            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
//            if ($params["orders"] != "") {
//                $params["orders"].=") as x";
//            } else if ($params["groups"] != "") {
//                $params["groups"].= ") as x";
//            } else {
//                $params["conditions"].= ") as x";
//            }
        }
        $bar = "";
        $bar = $datos['bar'];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $SelectDao = new SelectDAO();

        $rs = json_decode($SelectDao->selectDAO($params, $this->proveedor, $paginacion,null));
        if ($rs->Estatus != "Fail") {
            if ($rs->totalCount > 0) {
                $ArrCausas = array();
                $ArrCausas2 = array();
                $ArrCausas2["Estatus"] = $rs->Estatus;
                $ArrCausas2["totalCount"] = number_format($rs->totalCount);
                $ArrCausas2["mnj"] = $rs->mnj;

                foreach ($rs->resultados as $key => $value) {
                    $numero = "";
                    $anio = "";
                    $cveJuzgado = "";




                    foreach ($value as $key2 => $value2) {
                        if ($key2 == "totalCJ") {
                            $ArrCausas[$key][$key2] = number_format($value2);
                        } else if ($key2 == "totalCount") {
                            $ArrCausas[$key][$key2] = number_format($value2);
                        } else {
                            $ArrCausas[$key][$key2] = ($value2);
                        }
                    }
                }
                $ArrCausas2["resultados"] = $ArrCausas;
            } else {
                $ArrCausas2 = $rs;
            }
        } else {
            $ArrCausas2 = $rs;
        }


        return json_encode($ArrCausas2);
    }

}
