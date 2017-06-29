<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/reclusos/ReclusosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../ingresosceresos/IngresosceresosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ingresosceresos/IngresosceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../ceresos/CeresosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../policiasministeriales/PoliciasministerialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/policiasministeriales/PoliciasministerialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../generos/GenerosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../ceresosadscripciones/CeresosadscripcionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresosadscripciones/CeresosadscripcionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../atencionceresos/AtencionceresosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionceresos/AtencionceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
////Solicitud de audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ingresosceresos/IngresosceresosDAO.Class.php");
// web service de gestion
include_once(dirname(__FILE__) . "/../../../webservice/cliente/adscripciones/AdscripcionesCliente.php");
class ReclusosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarReclusos($ReclusosDto) {
        $ReclusosDto->setidRecluso(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getidRecluso()))));
        $ReclusosDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getidIngresoCereso()))));
        $ReclusosDto->setnombre(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getnombre()))));
        $ReclusosDto->setpaterno(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getpaterno()))));
        $ReclusosDto->setmaterno(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getmaterno()))));
        $ReclusosDto->setalias(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getalias()))));
        $ReclusosDto->setdetenido(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getdetenido()))));
        $ReclusosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getcveGenero()))));
        $ReclusosDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim($ReclusosDto->getcveEstadoPsicofisico()))));
        return $ReclusosDto;
    }

    public function selectReclusos($ReclusosDto, $proveedor = null) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosDao = new ReclusosDAO();
        $ReclusosDto = $ReclusosDao->selectReclusos($ReclusosDto, $proveedor);
        return $ReclusosDto;
    }

    public function insertReclusos($ReclusosDto, $proveedor = null) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosDao = new ReclusosDAO();
        $ReclusosDto = $ReclusosDao->insertReclusos($ReclusosDto, $proveedor);
        return $ReclusosDto;
    }

    public function updateReclusos($ReclusosDto, $proveedor = null) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosDao = new ReclusosDAO();
//$tmpDto = new ReclusosDTO();
//$tmpDto = $ReclusosDao->selectReclusos($ReclusosDto,$proveedor);
//if($tmpDto!=""){//$ReclusosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ReclusosDto = $ReclusosDao->updateReclusos($ReclusosDto, $proveedor);
        return $ReclusosDto;
//}
//return "";
    }

    public function deleteReclusos($ReclusosDto, $proveedor = null) {
        $ReclusosDto = $this->validarReclusos($ReclusosDto);
        $ReclusosDao = new ReclusosDAO();
        $ReclusosDto = $ReclusosDao->deleteReclusos($ReclusosDto, $proveedor);
        return $ReclusosDto;
    }

    public function reclusosSolicitudes($param, $proveedor = null) {
        $json = "";
        $valida = false;

        $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
        $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

        $solicitudesAudienciasDto->setIdSolicitudAudiencia($param["idSolicitudAudiencia"]);
        $rsSolicituAudiencias = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
        if ($rsSolicituAudiencias != "") {
            if ($rsSolicituAudiencias[0]->getCarpetaInv() != "") {
                $ingresosCeresosDto = new IngresosceresosDTO();
                $ingresosCeresosDao = new IngresosceresosDAO();
//                $ingresosCeresosDto->setNuc($rsSolicituAudiencias[0]->getNuc());
                $ingresosCeresosDto->setCarpetaInv($rsSolicituAudiencias[0]->getCarpetaInv());
                $ingresosCeresosDto->setActivo("S");
                $rsIngresosCeresos = $ingresosCeresosDao->selectIngresosceresos($ingresosCeresosDto);
                if ($rsIngresosCeresos != "") {
                    $json .= "{";
                    $json .= '"status":"ok",';
                    $json .= '"totalCount":"' . count($rsIngresosCeresos) . '",';
                    $json .= '"data":[';
                    $reclusosDto = new ReclusosDTO();
                    $reclusosDao = new ReclusosDAO();
                    foreach ($rsIngresosCeresos as $rsIngresCereso) {
                        $reclusosDto->setIdIngresoCereso($rsIngresCereso->getIdIngresoCereso());
                        $reclusosDto->setActivo("S");
                        $x = 1;


                        $rsReclusos = $reclusosDao->selectReclusos($reclusosDto);
                        if ($rsReclusos != "") {
                            foreach ($rsReclusos as $recluso) {
                                $json .= "{";
                                $json .= '"idRecluso":' . json_encode(utf8_encode($recluso->getIdRecluso())) . ",";
                                $json .= '"idIngresoCereso":' . json_encode(utf8_encode($recluso->getIdIngresoCereso())) . ",";
                                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($recluso->getIdImputadoCarpeta())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($recluso->getNombre())) . ",";
                                $json .= '"paterno":' . json_encode(utf8_encode($recluso->getPaterno())) . ",";
                                $json .= '"materno":' . json_encode(utf8_encode($recluso->getMaterno())) . ",";
                                $json .= '"alias":' . json_encode(utf8_encode($recluso->getAlias())) . ",";
                                $json .= '"detenido":' . json_encode(utf8_encode($recluso->getDetenido())) . ",";
                                $json .= '"cveGenero":' . json_encode(utf8_encode($recluso->getcveGenero())) . ",";
                                $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($recluso->getCveEstadoPsicofisico())) . "";
                                $json .= "}" . "\n";
                                $x ++;
                                if ($x <= count($rsIngresosCeresos)) {
                                    $json .= ",";
                                }
                            }
                        } else {
                            $json = "";
                            $json .= '{"status":"Fail",';
                            $json .= '"mnj":"No se encontro reclusos. Verifique."}';
                        }
                    }
                    $json .= "]";
                    $json .= "}";
                } else {
                    $json = "";
                    $json .= '{"status":"Fail",';
                    $json .= '"mnj":"No se encontro ingresos ceresos. Verifique."}';
                }
            } else {
                $json = "";
                $json .= '{"status":"Fail",';
                $json .= '"mnj":"La solicitud de audeincia no se cuenta con NUC. Verifique."}';
            }
        } else {
            $json = "";
            $json .= '{"status":"Fail",';
            $json .= '"mnj":"No se encontro la solicitud audiencia. Verifique."}';
        }
        echo $json;
    }

    private function obtenerCeresos() {
        $listaCeresos = "";
        $ceresosDTO = new CeresosDTO();
        $ceresos = new CeresosDAO();
        $ceresosDTO->setActivo("S");
        $orden = "ORDER BY desCereso ASC";
        $infCeresos = $ceresos->selectCeresos($ceresosDTO, $orden);
        $totalCeresos = count($infCeresos);
        for ($i = 0; $i < $totalCeresos; $i++) {
            $listaCeresos .=$infCeresos[$i]->getDesCereso() . ",";
            $listaCeresos .=$infCeresos[$i]->getCveCereso() . ",";
        }
        return $listaCeresos;
    }

    public function consultarCeresosPermitidos() {
        if (session_status() == PHP_SESSION_NONE) {
            @session_start();
        }
        $cveJuzgado = $_SESSION['cveAdscripcion'];
        $campos = " c.cveCereso,
                    c.desCereso";
        $orden = " c, tblatencionceresos ac";
        $orden .= " WHERE c.cveCereso = ac.cveCereso";
        $orden .= " AND  ac.cveJuzgado = " . $cveJuzgado;
        $orden .= " AND c.activo = 'S'";
        $orden .= " AND ac.activo = 'S'";
        $orden .= " ORDER BY c.desCereso ASC";
        $CeresosDtoVacio = new CeresosDTO();
        $CeresosDao = new CeresosDAO();
        $listaCeresos = $CeresosDao->selectCeresos($CeresosDtoVacio, $orden, null, null, $campos);
        $json = "";
        if ($listaCeresos != "") {
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($listaCeresos) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($listaCeresos as $cereso) {
                $json .= "{";
                $json .= '"desCereso":' . json_encode(utf8_encode($cereso["desCereso"])) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($cereso["cveCereso"]));
                $json .= "}";
                $x++;
                if ($x <= count($listaCeresos)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        }
        return $json;
    }
    
    private function obtenerMP($idIngresoCereso){
        $policiasministerialesDto = new PoliciasministerialesDTO();
        $policiasministerialesDao = new PoliciasministerialesDAO();
        $policiasministerialesDto->setIdIngresoCereso($idIngresoCereso);
        $policiasministerialesDto = $policiasministerialesDao->selectPoliciasministeriales($policiasministerialesDto);
        $json='"desAdscripcionMP":';
        if($policiasministerialesDto!=""){
            $adscripciones = new AdscripcionesCliente();
            $arrayAds = json_decode($adscripciones->getAdscripciones($policiasministerialesDto[0]->getCveAdscripcionMP())); 
            $json.=json_encode($arrayAds->data[0]->nomAdscripcion);
        }
        $json.='';
        return $json;
    }

    public function consultarDetallesRecluso($ReclusosDto, $datos, $paginacion) {
        $params = array();
        $params["orders"] = "ic.FechaHoraIngreso DESC";
        $params["fields"] = "r.idRecluso,r.idIngresoCereso,r.nombre,r.paterno,r.materno,ic.FechaHoraIngreso,
             ic.carpetaInv,ic.oficio,ic.nuc,ic.cveCereso";
        $params["tables"] = "tblreclusos r 
LEFT JOIN tblreclusosdelitos rd ON(r.idRecluso=rd.idRecluso AND rd.activo='S')
LEFT JOIN tbldelitos d ON(d.cveDelito=rd.cveDelito AND d.activo='S')
LEFT JOIN tblcatdelitos cd ON(cd.cvecatDelito=d.cvecatDelito AND cd.activo='S'),
tblingresosceresos ic,tblgeneros g,tblpoliciasministeriales pm";
        $params["conditions"] = "r.activo='S' AND ic.activo='S' AND g.activo='S' AND  pm.activo='S'
AND r.idIngresoCereso=ic.idIngresoCereso AND g.cveGenero=r.cveGenero AND ic.idIngresoCereso=pm.idIngresoCereso";
        if($ReclusosDto->getIdRecluso()==""){
            $params["groups"]="r.idRecluso";
        }else{
            $params["conditions"] .=" AND r.idRecluso=".$ReclusosDto->getIdRecluso();
            $params["fields"]="pm.nombre as nombreP,pm.paterno as paternoP,pm.materno as maternoP,
                 d.desDelito,rd.fechaRegistro,cd.desCatDelito,g.desGenero";
        }
        if($datos["nombreCompleto"]!=""){
            $arrayNombre=  explode(" ",$datos["nombreCompleto"]);
            $total=count($arrayNombre);
            $params["conditions"] .=" AND (";
            for($i=0;$i<$total;$i++){
                $params["conditions"] .=" (r.nombre like '%" . $arrayNombre[$i] . "%'";
                $params["conditions"] .=" OR r.paterno like '%" . $arrayNombre[$i] . "%'";
                $params["conditions"] .=" OR r.materno like '%" . $arrayNombre[$i] . "%')";
                if($i+1<$total){
                    $params["conditions"].=" OR";
                }
            }
            $params["conditions"].=")";
        }
        if ($datos["cveCereso"] != "") {
            $params["conditions"] .= " AND  ic.cveCereso = " . $datos["cveCereso"];
        }
        if ($datos["carpetaInv"] != "") {
            $params["conditions"] .=" AND ic.carpetaInv = '" . $datos["carpetaInv"] . "'";
        }
        if ($datos["nuc"] != "") {
            $params["conditions"] .=" AND ic.nuc = '" . $datos["nuc"] . "'";
        }
        if ($paginacion["fechaDesde"] != "") {
            $fechaInicio = explode("/", $paginacion["fechaDesde"]);
            $fechaFinal = explode("/", $paginacion["fechaHasta"]);
            $params["conditions"].= " AND ic.FechaHoraIngreso >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $params["conditions"].=" AND  ic.FechaHoraIngreso <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        if (($paginacion["paginacion"] == "false")&&($ReclusosDto->getIdRecluso()=="")) {
            $params["fields"] = "count(*) as totalCount FROM( SELECT ".$params["fields"];
            $params["orders"].=") as c";
        }
        $SelectDao = new SelectDAO();
        $respuesta= $SelectDao->selectDAO($params, null, $paginacion);
        if($ReclusosDto->getIdRecluso()!=""){
            $respuesta=substr($respuesta, 0, -1);
            return $respuesta.",".$this->obtenerMP($ReclusosDto->getIdIngresoCereso())."}";
        }
        return $respuesta;
    }

    public function consultarReclusos($ReclusosDto, $datos, $paginacion) {
        $sqlIntervalo = "";
        $sqlIntervalo2 = "";
        $condicionCveCereso = "";
        if ($datos["cveCereso"] != "") {
            $condicionCveCereso = " AND  c.cveCereso = " . $datos["cveCereso"];
        }
        if ($paginacion["fechaDesde"] != "") {
            $fechaInicio = explode("/", $paginacion["fechaDesde"]);
            $fechaFinal = explode("/", $paginacion["fechaHasta"]);
            $sqlIntervalo = " AND ic.FechaHoraIngreso >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo.=" AND  ic.FechaHoraIngreso <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            $sqlIntervalo2 = " AND ic.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo2.=" AND  ic.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        $params = array();
        if ($paginacion["paginacion"] == "true") {
            $params["fields"] = "c.idRecluso,c.idImputadoCarpeta,c.nombre,c.paterno, c.materno,
                c.cveCereso,c.carpetaInv,c.nuc,c.FechaHoraIngreso,c.desGenero,
                c.idIngresoCereso,c.oficio,c.origen";
        } else {
            $params["fields"] = "count(c.idRecluso) as totalCount";
        }
        $params["tables"] = "(SELECT r.idRecluso,r.idImputadoCarpeta,r.nombre,r.paterno, r.materno,
                    c.cveCereso,ic.carpetaInv,ic.nuc,ic.FechaHoraIngreso,g.desGenero,
                    ic.idIngresoCereso,ic.oficio, 1 as origen ";
        $params["tables"] .= "FROM tblreclusos r, tblingresosceresos ic, tblceresos c,tblgeneros g
                     WHERE r.idIngresoCereso = ic.idIngresoCereso AND  ic.cveCereso = c.cveCereso
                    AND  r.cveGenero = g.cveGenero AND r.detenido='S'
                    AND (r.idImputadoCarpeta=0 OR r.idImputadoCarpeta is null)
                    " . $condicionCveCereso;
        $condicionSubQuery = "";
        if ($ReclusosDto->getNombre() != "") {
            $params["tables"] .=" AND r.nombre like '%" . $ReclusosDto->getNombre() . "%'";
            $condicionSubQuery = " AND r.nombre like '%" . $ReclusosDto->getNombre() . "%'";
        }
        if ($ReclusosDto->getPaterno() != "") {
            $params["tables"] .=" AND r.paterno like '%" . $ReclusosDto->getPaterno() . "%'";
            $condicionSubQuery .=" AND r.paterno like '%" . $ReclusosDto->getPaterno() . "%'";
        }
        if ($ReclusosDto->getMaterno() != "") {
            $params["tables"] .=" AND r.materno like '%" . $ReclusosDto->getMaterno() . "%'";
            $condicionSubQuery .=" AND r.materno like '%" . $ReclusosDto->getMaterno() . "%'";
        }
        if ($datos["carpetaInv"] != "") {
            $params["tables"].=" AND ic.carpetaInv = '" . $datos["carpetaInv"] . "'";
            $condicionSubQuery.=" AND ic.carpetaInv = '" . $datos["carpetaInv"] . "'";
        }
        if ($datos["nuc"] != "") {
            $params["tables"].=" AND ic.nuc = '" . $datos["nuc"] . "'";
            $condicionSubQuery.=" AND ic.nuc = '" . $datos["nuc"] . "'";
        }
        $params["tables"] .= " AND r.activo  ='S' AND ic.activo  ='S' AND c.activo  ='S' AND g.activo  ='S'";
        if ($sqlIntervalo != "") {
            $params["tables"] .= $sqlIntervalo;
        }
        $params["tables"] .= "UNION SELECT c.idRecluso,c.idImputadoCarpeta,c.nombre,c.paterno, c.materno,
                c.cveCereso,c.carpetaInv,c.nuc,c.FechaHoraIngreso,c.desGenero,
                c.idIngresoCereso,c.oficio,c.origen FROM (SELECT r.idRecluso,r.idImputadoCarpeta,r.nombre,r.paterno, r.materno,
                    c.cveCereso,ic.carpetaInv,ic.nuc,ic.FechaHoraIngreso,g.desGenero,
                    ic.idIngresoCereso,ic.oficio, 1 as origen FROM tblreclusos r, tblingresosceresos ic, tblceresos c,tblgeneros g
                     WHERE r.idIngresoCereso = ic.idIngresoCereso AND  ic.cveCereso = c.cveCereso
                    AND r.cveGenero = g.cveGenero AND r.activo  ='S' AND ic.activo  ='S' 
                    AND c.activo ='S' AND g.activo ='S' AND r.detenido='S'" . $condicionCveCereso . $condicionSubQuery;
        if ($sqlIntervalo != "") {
            $params["tables"] .= $sqlIntervalo;
        }
        $params["tables"] .=" UNION ALL SELECT cj.idCarpetaJudicial,ic.idImputadoCarpeta,ic.nombre, ic.paterno, ic.materno,ic.cveCereso,
                        cj.carpetaInv,cj.nuc,cj.fechaRegistro,g.desGenero,ic.cveTipoPersona,ic.nombreMoral, 2 as origen
                        FROM tblcarpetasjudiciales cj, tblimputadoscarpetas ic,tblgeneros g, tblceresos c
                        WHERE ic.idCarpetaJudicial = cj.idCarpetaJudicial AND  c.cveCereso = ic.cveCereso AND  ic.cveGenero = g.cveGenero
                        AND ic.activo='S' AND cj.activo='S' AND c.activo='S' AND g.activo='S' AND ic.detenido='S'" . $condicionCveCereso;
        if ($datos["carpetaInv"] != "") {
            $params["tables"].=" AND cj.carpetaInv = '" . $datos["carpetaInv"] . "'";
        }
        if ($datos["nuc"] != "") {
            $params["tables"].=" AND cj.nuc = '" . $datos["nuc"] . "'";
        }
        if (($ReclusosDto->getNombre() != "") || ($ReclusosDto->getPaterno() != "") || ($ReclusosDto->getMaterno() != "")) {
            $params["tables"] .= " AND(";
            $control = 0;
            if ($ReclusosDto->getNombre() != "") {
                $params["tables"] .=" (ic.nombreMoral like '%" . $ReclusosDto->getNombre() . "%'";
                $params["tables"] .=" OR ic.nombre like '%" . $ReclusosDto->getNombre() . "%')";
                $control = 1;
            }
            if ($ReclusosDto->getPaterno() != "") {
                if ($control == 1) {
                    $params["tables"] .=" AND (ic.nombreMoral like '%" . $ReclusosDto->getPaterno() . "%'";
                } else {
                    $params["tables"] .=" (ic.nombreMoral like '%" . $ReclusosDto->getPaterno() . "%'";
                }
                $params["tables"] .=" OR ic.paterno like '%" . $ReclusosDto->getPaterno() . "%')";
                $control = 1;
            }
            if ($ReclusosDto->getMaterno() != "") {
                if ($control == 1) {
                    $params["tables"] .=" AND (ic.nombreMoral like '%" . $ReclusosDto->getMaterno() . "%'";
                } else {
                    $params["tables"] .=" (ic.nombreMoral like '%" . $ReclusosDto->getMaterno() . "%'";
                }
                $params["tables"] .=" OR ic.materno like '%" . $ReclusosDto->getMaterno() . "%')";
            }
            $params["tables"] .= ")";
        }
        if ($sqlIntervalo2 != "") {
            $params["tables"] .= $sqlIntervalo2;
        }
        if ($paginacion["paginacion"] == "true") {
            $params["tables"] .= ") as c WHERE c.idImputadoCarpeta>0 GROUP BY c.idImputadoCarpeta
                    ) as c  ORDER BY c.FechaHoraIngreso DESC";
        } else {
            $params["tables"] .= ") as c WHERE c.idImputadoCarpeta>0 GROUP BY c.idImputadoCarpeta) as c";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
