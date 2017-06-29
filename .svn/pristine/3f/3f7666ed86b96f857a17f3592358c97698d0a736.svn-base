<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

Class ReporteCargaJuecesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function reporteCarga($datos, $paginacion, $accion = null) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";
        if($accion == "ConsultarCargaJueces_ReporteGeneral"){
            switch ($datos["nivel"]) {
                case 1:
                    $datos["groups"] .= " js.idJuzgador ";
                    $datos["orders"] = " total desc";
                    break;
                case 2:
                    $datos["groups"] .= " j.cveJuzgado ";
                    $datos["orders"] = "totalCount desc";
                    break;
                case 3:
                    $datos["orders"] = "a.anio, a.numero DESC";
                    break;
            }
        }else{
            switch ($datos["nivel"]) {
                case 1:
                    $datos["groups"] .= " js.idJuzgador ";
                    $datos["orders"] = " total desc";
                    break;
                case 2:
                    $datos["orders"] = "a.anio, a.numero DESC";
                    break;
            }
        }
        $consulta = $this->selectReporteCargaJueces($datos, $paginacion, $bandera,$accion);
        return $consulta;
    }

    public function reporteCargaIndicadores($datos, $paginacion, $accion = null) {
        $consulta = "";
        $estatusCarpeta = "";
        $bandera = null;
        $datos["groups"] = "";
        $datos["orders"] = "";
        if ($accion != null) {
            if ($accion == "ConsultarCargaJueces_Indicador" || $accion == "ConsultarPromCausasTerJuezCtrl_Indicador" || $accion == "ConsultarCargaJuecesJuicio_Indicador" || $accion =="ConsultarProductividadJuezJuicio_Indicador") {
                switch ($datos["nivel"]) {
                    case 1:
                        //$datos["orders"] = " a.fechaInicial";
                        break;
                    case 2:
                        $datos["groups"] = "r.desRegion";
                      //  $datos["orders"] = "a.anio, a.numero DESC";
                        break;
                    case 3:
                        $datos["groups"] = "d.desDistrito";
                      //  $datos["orders"] = "a.anio, a.numero DESC";
                        break;
                    case 4:
                        $datos["groups"] = "j.cveJuzgado";
                      //  $datos["orders"] = "a.anio, a.numero DESC";
                        break;
                }
            }
        } 
        $consulta = $this->selectReporteCargaJuecesIndicadores($datos, $paginacion, $bandera,$accion);
        return $consulta;
    }

    public function selectReporteCargaJueces($datos, $paginacion, $bandera,$accion) {
        $sqlIntervalo = "";
        $tablas = "";
        $campos = "";
        $condiciones = "";
        $otrascond = "";

        
        if ($datos["nivel"] < "2") {

            if ($datos["checkProgramada"] != "") {
                $campos .=",
sum(CASE WHEN (sa.cveTipoAudiencia =1) THEN 1 ELSE 0 END) programada,
sum(CASE WHEN (sa.cveTipoAudiencia =2) THEN 1 ELSE 0 END) urgente,
sum(CASE WHEN (sa.cveTipoAudiencia =3) THEN 1 ELSE 0 END) mixta";
                $tables = "";
            }
            if ($datos["checkPrivada"] != "") {
                $campos .=",
sum(CASE WHEN (sa.cveNaturaleza =1) THEN 1 ELSE 0 END) publica,
sum(CASE WHEN (sa.cveNaturaleza =2) THEN 1 ELSE 0 END) privada";
            }
            $campos .=",
sum(CASE WHEN (a.cveEstatusAudiencia =1) THEN 1 ELSE 0 END) celebrada,
sum(CASE WHEN (a.cveEstatusAudiencia =2) THEN 1 ELSE 0 END) noCelebrada,
sum(CASE WHEN (a.cveEstatusAudiencia =3) THEN 1 ELSE 0 END) cancelada, count(*) as total";
        }else if($datos["nivel"] < "3" && $accion == "ConsultarCargaJueces_ReporteGeneral"){
            $campos .=",count(a.idAudiencia) as TotalCount";
        }

        if ($datos['detalles'] != "") {
            if ($datos["checkProgramada"] != "") {
                $campos .=",ta.desTipoAudiencia, ta.cveTipoAudiencia";
                $tablas .= ", tbltiposaudiencias ta";
                $condiciones .= " AND ta.cveTipoAudiencia = sa.cveTipoAudiencia AND ta.activo = 'S'";
            } else if ($datos["checkPrivada"] != "") {
                $campos .=",n.desNaturaleza, n.cveNaturaleza";
                $tablas .= ", tblnaturalezas n";
                $condiciones .= " AND n.cveNaturaleza = sa.cveNaturaleza AND n.activo = 'S'";
            }
            $campos .=",ea.desEstatusAudiencia, ea.cveEstatusAudiencia, ca.desCatAudiencia, ca.cveCatAudiencia";
            $tablas .= ", tblcataudiencias ca";
            $condiciones .= " AND ca.cveCatAudiencia= sa.cveCatAudiencia AND ca.activo='S'";
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
            $sqlIntervalo = " AND a.fechaInicial >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  a.fechaInicial <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }

        $params = array();
        $params["orders"] = "";


        $params["fields"] = "js.titulo, js.nombre, js.paterno,js.materno,js.idJuzgador,a.numero,a.anio,s.CveSala,s.desSala, j.desJuzgado,j.cveJuzgado,a.fechaInicial,a.detenido, tj.desTipoJuzgador" . $campos;

        $params["tables"] = "tbljuzgadores js , tblsalas s,tblaudienciasjuzgador aj, tbljuzgados j, tblaudiencias a , tblsolicitudesaudiencias sa ,tblestatusaudiencias ea,tbltiposjuzgadores tj" . $tablas;

// se quito esta condicion --> AND s.activo='S'
        $params["conditions"] =  /*js.activo='S' AND*/" a.cveJuzgado=j.cveJuzgado  AND a.idSolicitudAudiencia= sa.idSolicitudAudiencia AND a.activo='S' 
AND sa.activo='S'
AND s.CveSala = a.CveSala
AND ea.cveEstatusAudiencia = a.cveEstatusAudiencia
AND a.idAudiencia = aj.idAudiencia 
AND aj.idJuzgador = js.idJuzgador
AND aj.activo = 'S'
AND ea.activo = 'S'
AND tj.activo = 'S'
AND tj.cveTipoJuzgador = js.cveTipoJuzgador
" . $condiciones . $otrascond;

        if ($datos["orders"] != "") {
            $params["orders"] = $datos["orders"];
        }


        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        $params["groups"] = $datos["groups"];

        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {

            $aux = "count(x.cveDelito) as totalCount";

            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            if ($params["orders"] != "") {
                $params["orders"].=") as x";
            } else if ($params["groups"] != "") {
                $params["groups"].= ") as x";
            } else {
                $params["conditions"].= ") as x";
            }
        }
        $bar = "";
        $bar = $datos['bar'];
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

    public function selectReporteCargaJuecesIndicadores($datos, $paginacion, $bandera,$accion) {
        $sqlIntervalo = "";
        $tablas = "";
        $campos = "";
        $condiciones = "";
        $otrascond = "";

         if ($accion == "ConsultarCargaJueces_Indicador" || $accion == "ConsultarPromCausasTerJuezCtrl_Indicador") {
            $campos .= ", year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as mes";
            $condiciones = "AND (js.cveTipoJuzgador = 1 OR js.cveTipoJuzgador = 3) AND cj.idCarpetaJudicial = jc.idCarpetaJudicial AND cj.activo='S' AND cj.cveJuzgado = j.cveJuzgado";
            $tablas = ", tblcarpetasjudiciales cj";
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo .= " AND cj.fechaRadicacion >= date_add('" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00',INTERVAL -1 month) ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaRadicacion <= LAST_DAY('" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ') ";
            }
                   $datos["groups"] .= "year(cj.fechaRadicacion), month(cj.fechaRadicacion)";                    
        }else if($accion == "ConsultarCargaJuecesJuicio_Indicador" ){
             $campos .= ", year(cj.fechaRadicacion) as year,month(cj.fechaRadicacion) as mes";
            $condiciones = "AND (js.cveTipoJuzgador = 2 OR js.cveTipoJuzgador = 3) AND cj.idCarpetaJudicial = jc.idCarpetaJudicial AND cj.activo='S' AND cj.cveJuzgado = j.cveJuzgado";
            $tablas = ", tblcarpetasjudiciales cj";
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo .= " AND cj.fechaRadicacion >= date_add('" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00',INTERVAL -1 month) ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaRadicacion <= LAST_DAY('" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ') ";
            }
                   $datos["groups"] .= "year(cj.fechaRadicacion), month(cj.fechaRadicacion)";  
        }else if( $accion="ConsultarProductividadJuezJuicio_Indicador"){
             $campos .= ", year(so.fechaRegistro) as year,month(so.fechaRegistro) as mes";
            $condiciones = "AND (js.cveTipoJuzgador = 2 OR js.cveTipoJuzgador = 3) AND so.idSolicitudOrden = jo.idSolicitudOrden AND jo.activo='S' AND so.cveJuzgado = j.cveJuzgado";
            $tablas = ", tblsolicitudesordenes so,tbljuzgadoresordenes jo";
            $fechaInicio = explode("/", $datos["fechaDesde"]);
            $sqlIntervalo .= " AND so.fechaRegistro >= date_add('" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00',INTERVAL -1 month) ";
            if ($datos["fechaHasta"] != "") {
                $fechaFinal = explode("/", $datos["fechaHasta"]);
                $sqlIntervalo.=" AND  so.fechaRegistro <= LAST_DAY('" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ') ";
            }
                   $datos["groups"] .= "year(so.fechaRegistro), month(so.fechaRegistro)";  
        }
        
        if ($datos["cveDistrito"] != "") {
                $condiciones .=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["cveRegion"] != "") {
                $condiciones.=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveJuzgado"] != "") {
                $condiciones .= " AND j.cveJuzgado=" . $datos["cveJuzgado"];
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
        if ($datos["anio"] != "") {
                $condiciones.=" AND cj.anio=" . $datos["anio"];
        }
        
        if ($datos["porMes"] != "") {
            $mesAnio = $datos["porMes"];
            $condiciones .= " AND (month(cj.fechaRadicacion)=$mesAnio)";
        }
//        if ($datos["fechaDesde"] != "") {
//            $fechaInicio = explode("/", $datos["fechaDesde"]);
//            // var_dump($fechaInicio);
//            $sqlIntervalo = " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
//            if ($datos["fechaHasta"] != "") {
//                $fechaFinal = explode("/", $datos["fechaHasta"]);
//                $sqlIntervalo.=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
//            }
//        }

        $params = array();
        $params["orders"] = "";


        $params["fields"] = "count(*) as totalCount,js.titulo, js.nombre, js.paterno,js.materno,js.idJuzgador,j.desJuzgado,j.cveJuzgado,r.cveRegion,r.desRegion,d.cveDistrito,d.desDistrito " . $campos;
        $params["tables"] = "tbljuzgadores js,  tbljuzgadoresjuzgados jj,tbljuzgadorescarpetas jc , tbljuzgados j,tblregiones r, tbldistritos d  " . $tablas;
        $params["conditions"] = " js.idJuzgador = jj.idJuzgador AND js.activo='S' AND jj.activo='S' AND j.cveJuzgado = jj.cveJuzgado AND j.activo='S' AND r.cveRegion = j.cveRegion AND r.activo='S' AND d.cveDistrito = j.cveDistrito AND d.activo='S' AND jc.idJuzgador = js.idJuzgador AND jc.activo='S'" . $condiciones . $otrascond;

        if ($datos["orders"] != "") {
            $params["orders"] = $datos["orders"];
        }


        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        $params["groups"] = $datos["groups"];

        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {

            $aux = "count(x.cveDelito) as totalCount";

            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            if ($params["orders"] != "") {
                $params["orders"].=") as x";
            } else if ($params["groups"] != "") {
                $params["groups"].= ") as x";
            } else {
                $params["conditions"].= ") as x";
            }
        }

        $bar = "";
        $bar = $datos['bar'];
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $SelectDao = new SelectDAO();
         $rs = json_decode($SelectDao->selectDAO($params, $this->proveedor, $paginacion, $bar));
        
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
