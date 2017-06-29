<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class ReporteCausasTerminadasDetalleController {

    private $proveedor;

    public function __construct() {
        
    }

    public function consultarCausasTerminadasDetalle($datos, $paginacion) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";
//

        switch ($datos["nivel"]) {
            case 5:
                $datos["groups"] = " cj.idCarpetaJudicial";
                break;
        }


        $consulta = $this->causasTerminadasDetalle($datos, $paginacion, $bandera);
        return $consulta;
    }

    public function causasTerminadasDetalle($datos, $paginacion, $bandera) {


        $sqlIntervalo = "";
        $tables = "";
        $condiciones = "";
        $campos = "";


        if ($datos["fechaDesde"] != "") {
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo = " AND cj.fechaTermino >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaTermino <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }

        $params = array();

        $params["fields"] = "";
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


        $params["conditions"] = "cj.activo = 'S' AND j.activo = 'S' AND tj.activo = 'S' AND ec.activo = 'S' AND r.activo = 'S' AND d.activo = 'S' AND tc.activo = 'S' AND tj.activo = 'S' AND fechaTermino is not null AND cj.cveTipoCarpeta <= 5 AND  ec.cveEstatusCarpeta=2  " . $condiciones;

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

        if ($datos["cveDistrito"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
            } else {
                $params["conditions"].="  d.cveDistrito=" . $datos["cveDistrito"];
            }
        }

        if ($datos["cveJuzgado"] != "") {
            if ($params["conditions"] != "") {
                $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
            } else {
                $params["conditions"].=" cj.cveJuzgado=" . $datos["cveJuzgado"];
            }
        }

        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }


        $params["groups"] = "";
        $params["groups"] = $datos["groups"];


//        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
//                $params["fields"] = "count(*) as totalCount";
//        }
$this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params, $this->proveedor, $paginacion));

        $ArrCausas2["Estatus"] = $rs->Estatus;
        $ArrCausas2["totalCount"] = $rs->totalCount;
        $ArrCausas2["mnj"] = $rs->mnj;
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
                $numero = "";
                $anio = "";
                $cveJuzgado = "";




                foreach ($value as $key2 => $value2) {
                    if($key2 == "totalCJ"){
             $ArrCausas[$key][$key2] = number_format($value2);
             }else if($key2 == "totalCount"){
                 $ArrCausas[$key][$key2] = number_format($value2);
             }else{
                 $ArrCausas[$key][$key2] = ($value2);
             }
                    if ($key2 == "idCarpetaJudicial") {
                        $idCarpetaJudicial = $value2;
                    }
                }
                $ArrCausas[$key]["imputado"] = $this->getImputadoCarpeta($idCarpetaJudicial,$this->proveedor); //
                $ArrCausas[$key]["delitos"] = $this->getDelitos($idCarpetaJudicial,$this->proveedor); //
                $ArrCausas[$key]["suspencion"] = $this->getSuspencion($idCarpetaJudicial,$this->proveedor); //
                $ArrCausas[$key]["acuerdoReparatorio"] = $this->getAcuerdoReparatorio($idCarpetaJudicial,$this->proveedor); //
            }
            $ArrCausas2["resultados"] = $ArrCausas;

            echo json_encode($ArrCausas2);
        } else {
            echo json_encode($rs);
        }
    }

    public function getImputadoCarpeta($idCarpetaJudicial,$proveedor) {
        $params["fields"] = "ic.*,c.desConclusion,c.cveConclusion";
        $params["tables"] = "tblimputadosCarpetas ic left join tblimputadoscarpetasconclusiones  icc on (ic.idImputadoCarpeta = icc.idImputadoCarpeta) left join tblconclusiones c on (icc.cveConclusion=c.cveConclusion)";
        $params["conditions"] = "idCarpetaJudicial=" . $idCarpetaJudicial;

        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params,$proveedor));

        $ArrCausas2["Estatus"] = $rs->Estatus;
        $ArrCausas2["totalCount"] = $rs->totalCount;
        $ArrCausas2["mnj"] = $rs->mnj;
        if ($rs->totalCount > 0) {

            foreach ($rs->resultados as $key => $value) {
                $numero = "";
                $anio = "";
                $cveJuzgado = "";
                foreach ($value as $key2 => $value2) {
                    $ArrCausas[$key][$key2] = $value2;
                    if ($key2 == "idCarpetaJudicial") {
                        $idCarpetaJudicial = $value2;
                    }
                    if ($key2 == "idImputadoCarpeta") {
                        $idImputadoCarpeta = $value2;
                    }
                }

                $ArrCausas[$key]["sentencias"] = $this->getSentenciasDeTermino($idImputadoCarpeta,$proveedor); //
            }
            $ArrCausas2["resultados"] = $ArrCausas;
        }


        return ($ArrCausas2);
    }

    public function getDelitos($idCarpetaJudicial,$proveedor) {
        $params["fields"] = "*";
        $params["tables"] = "tbldelitoscarpetas dc inner join tbldelitos d on (dc.cveDelito=d.cveDelito)";
        $params["conditions"] = "dc.activo='S' and d.activo='S' and dc.idCarpetaJudicial=" . $idCarpetaJudicial;

        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params,$proveedor));

        $ArrCausas2["Estatus"] = $rs->Estatus;
        $ArrCausas2["totalCount"] = $rs->totalCount;
        $ArrCausas2["mnj"] = $rs->mnj;

//        foreach ($rs->resultados as $key => $value) {
//            $numero = "";
//            $anio = "";
//            $cveJuzgado = "";
//            foreach ($value as $key2 => $value2) {
//                $ArrCausas[$key][$key2] = $value2;
//                if ($key2 == "idCarpetaJudicial") {
//                    $idCarpetaJudicial = $value2;
//                }
//             
//            }
//        }
//        $ArrCausas2["resultados"] = $ArrCausas;
        $ArrCausas2["resultados"] = $rs->resultados;


        return ($ArrCausas2);
    }

    public function getSuspencion($idCarpetaJudicial,$proveedor) {
        $params["fields"] = "a.*,ta.desTipoActuacion";
        $params["tables"] = "tblactuaciones a inner join tbltiposactuaciones ta on (a.cveTipoActuacion = ta.cveTipoActuacion)  ";
        $params["conditions"] = " ta.activo = 'S' and a.activo='S'  and a.cveTipoActuacion in (24) and a.idReferencia=" . $idCarpetaJudicial;

        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params,$proveedor));
        return ($rs);
    }

    public function getAcuerdoReparatorio($idCarpetaJudicial,$proveedor) {
        $params["fields"] = "a.*,ta.desTipoActuacion,tr.desTipoResolucion";
        $params["tables"] = "tblactuaciones a inner join tbltiposactuaciones ta on (a.cveTipoActuacion = ta.cveTipoActuacion) left join tbltiposresoluciones tr on (a.cveTipoResolucion=tr.cveTipoResolucion )";
        $params["conditions"] = " ta.activo = 'S' and a.activo='S' and a.cveTipoResolucion=41 and a.cveTipoActuacion in (2) and a.idReferencia=" . $idCarpetaJudicial;

        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params,$proveedor));
        return ($rs);
    }

    public function getSentenciasDeTermino($idImputadoCarpeta,$proveedor) {
        $params["fields"] = "*";
        $params["tables"] = "tblactuaciones a left join tbltiposprocedimientos tp on (a.cvetipoprocedimiento = tp.cvetipoprocedimiento) left join tbltipossentencias ts on (ts.cveTipoSentencia = a.cveTipoSentencia) left join tblimputadosSentencias ims on (ims.idActuacion = a.idActuacion) left join tblimpofedelcarpetas iodc on (iodc.idImpOfeDelCarpeta=ims.idImpOfeDelCarpeta) ";
        $params["conditions"] = " ims.activo='S' and iodc.activo='S' and a.activo='S' and a.cveTipoActuacion =3 and iodc.idImputadoCarpeta=" . $idImputadoCarpeta;

        $SelectDao = new SelectDAO();
        $rs = json_decode($SelectDao->selectDAO($params,$proveedor));
        return ($rs);
    }

}
