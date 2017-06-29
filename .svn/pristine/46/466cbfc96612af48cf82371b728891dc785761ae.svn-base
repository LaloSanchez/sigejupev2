<?php

if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("America/Mexico_City");
error_reporting(E_ALL);
ini_set('max_execution_time', 600);


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");



class VictimasProcesadosController {
    private $proveedor;

    public function __construct() {
        
    }
    public function selectVictimasProcesados($carpetasdto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $json = "";
        $x = 1;
        $carpetaDao = new CarpetasjudicialesDAO();

        $tipoCarpetaDto = new TiposcarpetasDTO();
        $tipoCarpetaDao = new TiposcarpetasDAO();
        
        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();
        
        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();
        
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
        
        if ($param["juzgado"] != "") {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND cveJuzgado=" . $param["juzgado"] . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } 
        else if ($param["juzgado"] == "" && $param["distrito"] != "") {
            $juzgadosDto->setCveDistrito($param["distrito"]);
            $juzgadosciclo = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            $cons = "IN (";
            $vari = 1;
            if ($juzgadosciclo != "") {
                foreach ($juzgadosciclo as $juzg) {
                    $cons .= $juzg->getCveJuzgado();
                    $vari ++;
                    if ($vari <= count($juzgadosciclo)) {
                        $cons .= ",";
                    }
                }
            }
            $cons .= ")";
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, " AND cveJuzgado " . $cons . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } 
        else if ($param["juzgado"] == "" && $param["distrito"] == "" && $param["region"] != "") {
            $juzgadosDto->setCveRegion($param["region"]);
            $juzgadosciclo = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            $cons = "IN (";
            $vari = 1;
            if ($juzgadosciclo != "") {
                foreach ($juzgadosciclo as $juzg) {
                    $cons .= $juzg->getCveJuzgado();
                    $vari ++;
                    if ($vari <= count($juzgadosciclo)) {
                        $cons .= ",";
                    }
                }
            }
            $cons .= ")";
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, " AND cveJuzgado " . $cons . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } else {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        }
        
//        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';
//            //juzgados
            $juzgadosDto->getActivo('S');
            $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            
            $distritosDto->getActivo('S');
            $rsDistritos = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);
            $n = 1;
            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
                $tipoCarpetaDto->setActivo('S');
                $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);
                if ($tipoCarpetares != "") {
                    $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoCarpetares[0]->getDesTipoCarpeta())) . ",";
                }
                foreach ($rsJuzgados as $juzgado){
                    if ($carpeta->getCveJuzgado() == $juzgado->getCveJuzgado()) {
                    foreach ($rsDistritos as $distrito) {
                        if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                            $json .= '"juzgado":' . json_encode(utf8_encode($juzgado->getDesJuzgado())) . ",";
                            $json .= '"distrito":' . json_encode(utf8_encode($distrito->getDesDistrito())) . ",";
                            }
                        }
                    }
                }
                $hombres=0;
                $mujeres=0;
                $indefinido=0;
                $imputadosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $imputadosCarpetasDto->setActivo("S");
//                $fields = ' idImputadoCarpeta, SUM(CASE WHEN cveGenero = 1 THEN 1 ELSE 0 END) AS ImputadosHombres, SUM(CASE WHEN cveGenero = 2 THEN 1 ELSE 0 END) AS ImputadosMujeres  ';
                $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto,'', $this->proveedor);
                if ($rsImputadosCarpetas != "") {
                    foreach ($rsImputadosCarpetas as $imputado){
                        if ($imputado->getCveGenero() == 1) {
                            $hombres++;
                        }elseif($imputado->getCveGenero() == 2){
                            $mujeres++;
                        }else{
                            $indefinido++;
                        }
                    }
                $json .= '"imputadosHombres":' . json_encode(utf8_encode($hombres)) . ",";
                $json .= '"imputadosMujeres":' . json_encode(utf8_encode($mujeres)) . ",";
                $json .= '"imputadosIndefinidos":' . json_encode(utf8_encode($indefinido)) . ",";
                }
                
                $ofendidosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $ofendidosCarpetasDto->setActivo("S");
//                $fields = ' idImputadoCarpeta, SUM(CASE WHEN cveGenero = 1 THEN 1 ELSE 0 END) AS ImputadosHombres, SUM(CASE WHEN cveGenero = 2 THEN 1 ELSE 0 END) AS ImputadosMujeres  ';
                $rsOfendidosCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto,'', $this->proveedor);
                if ($rsOfendidosCarpetas != "") {
                    $Ohombres=0;
                    $Omujeres=0;
                    $Oindefinidos=0;
                    foreach ($rsOfendidosCarpetas as $ofendido){
                        if ($ofendido->getCveGenero() == 1) {
                            $Ohombres++;
                        }elseif($ofendido->getCveGenero() == 2){
                            $Omujeres++;
                        }else{
                            $Oindefinidos++;
                        }
                    }
                $json .= '"ofendidosHombres":' . json_encode(utf8_encode($Ohombres)) . ",";
                $json .= '"ofendidosMujeres":' . json_encode(utf8_encode($Omujeres)) . ",";
                $json .= '"ofendidosIndefinidos":' . json_encode(utf8_encode($Oindefinidos)) . "";
                }
                
                
                $json .= "}" . "\n";
                $n ++;
                if ($n <= count($carpetasRes)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }
    
    public function selectVictimasProcesadosDelitos($carpetasdto, $param = null, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $json = "";
        $x = 1;
        $carpetaDao = new CarpetasjudicialesDAO();

        $tipoCarpetaDto = new TiposcarpetasDTO();
        $tipoCarpetaDao = new TiposcarpetasDAO();
        
        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();
        
        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();
        
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
        
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();
        
        $impDao = new ImpofedelcarpetasDAO();
        $impDto = new ImpofedelcarpetasDTO();
        
        $ofeDao = new ImpofedelcarpetasDAO();
        $ofeDto = new ImpofedelcarpetasDTO();
        
        $delDao = new ImpofedelcarpetasDAO();
        $delDto = new ImpofedelcarpetasDTO();
        
        $delitosDao = new DelitosDAO();
        $delitosDto = new DelitosDTO();
        
        //para prueba
//        $carpetasdto = new CarpetasjudicialesDTO();
//        $carpetasdto->setIdCarpetaJudicial(12);
        if ($param["juzgado"] != "") {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND cveJuzgado=" . $param["juzgado"] . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } 
        else if ($param["juzgado"] == "" && $param["distrito"] != "") {
            $juzgadosDto->setCveDistrito($param["distrito"]);
            $juzgadosciclo = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            $cons = "IN (";
            $vari = 1;
            if ($juzgadosciclo != "") {
                foreach ($juzgadosciclo as $juzg) {
                    $cons .= $juzg->getCveJuzgado();
                    $vari ++;
                    if ($vari <= count($juzgadosciclo)) {
                        $cons .= ",";
                    }
                }
            }
            $cons .= ")";
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, " AND cveJuzgado " . $cons . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } 
        else if ($param["juzgado"] == "" && $param["distrito"] == "" && $param["region"] != "") {
            $juzgadosDto->setCveRegion($param["region"]);
            $juzgadosciclo = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            $cons = "IN (";
            $vari = 1;
            if ($juzgadosciclo != "") {
                foreach ($juzgadosciclo as $juzg) {
                    $cons .= $juzg->getCveJuzgado();
                    $vari ++;
                    if ($vari <= count($juzgadosciclo)) {
                        $cons .= ",";
                    }
                }
            }
            $cons .= ")";
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, " AND cveJuzgado " . $cons . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } else {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        }
        
//        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';
            //juzgados
            $juzgadosDto->getActivo('S');
            $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            
            $distritosDto->getActivo('S');
            $rsDistritos = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);
            
//            $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
            $tipoCarpetaDto->setActivo('S');
            $rsTipoCarpeta = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);
            
            $n = 1;
            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                if ($rsTipoCarpeta != "") {
                    foreach ($rsTipoCarpeta as $tipoC) {
                        if ($tipoC->getCveTipoCarpeta() == $carpeta->getCveTipoCarpeta()) {
                            $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoC->getDesTipoCarpeta())) . ",";
                        }
                    }
                }
                foreach ($rsJuzgados as $juzgado){
                    if ($carpeta->getCveJuzgado() == $juzgado->getCveJuzgado()) {
                    foreach ($rsDistritos as $distrito) {
                        if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                            $json .= '"juzgado":' . json_encode(utf8_encode($juzgado->getDesJuzgado())) . ",";
                            $json .= '"distrito":' . json_encode(utf8_encode($distrito->getDesDistrito())) . ",";
                            }
                        }
                    }
                }
                $delDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
//                $delDto->setIdCarpetaJudicial(12);
                $delDto->setActivo('S');
                $fields="distinct idDelitoCarpeta";
                $rsDel = $delDao->selectImpofedelcarpetas($delDto,'', $this->proveedor,'',$fields);
                
                if ($rsDel != "") {
                    $d =1;
                    $json .= '"totalDelitos":' . json_encode(utf8_encode(count($rsDel))) . "";
                    $json .= ', "delitos":[';
                    
                    foreach ($rsDel as $del){
                         $json .= '{';
                        $json .= '"idDelito":' . json_encode(utf8_encode($del['idDelitoCarpeta'])) . ",";
                        $delitosCarpetasDto->setIdDelitoCarpeta($del['idDelitoCarpeta']);
                        $delitosCarpetasDto->setActivo("S");
                        $rsDelito = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, '' , $this->proveedor );
                        $json .= '"cveDelito":' . json_encode(utf8_encode($rsDelito[0]->getCveDelito())) . ",";
                        
                        $delitosDto->setActivo('S');
                        $delitosDto->setCveDelito($rsDelito[0]->getCveDelito());
                        $rsDelitos = $delitosDao->selectDelitos($delitosDto, '', $this->proveedor);
                        $json .= '"desDelito":' . json_encode(utf8_encode($rsDelitos[0]->getDesDelito())) . ",";
                        
                        
                        $impDto->setIdDelitoCarpeta($del['idDelitoCarpeta']);
                        $impDto->setActivo("S");
                        $Impfields="distinct idImputadoCarpeta";
                        $rsImp = $impDao->selectImpofedelcarpetas($impDto,'', $this->proveedor,'',$Impfields);
                        if($rsImp!=''){
                            $Ihombres=0;
                            $Imujeres=0;
                            $Iindefinido=0;
                            foreach($rsImp as $imp){
                                $imputadosCarpetasDto->setIdImputadoCarpeta($imp['idImputadoCarpeta']);
                                $imputadosCarpetasDto->setActivo("S");
                                $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto,'', $this->proveedor);
                                if ($rsImputadosCarpetas != "") {
                                    foreach ($rsImputadosCarpetas as $imputado){
                                        if ($imputado->getCveGenero() == 1) {
                                        $Ihombres++;
                                        }elseif($imputado->getCveGenero() == 2){
                                        $Imujeres++;
                                        }else{
                                        $Iindefinido++;
                                        }
                                    }
                                }
                            }
                            $json .= '"imputadosHombres":' . json_encode(utf8_encode($Ihombres)) . ",";
                            $json .= '"imputadosMujeres":' . json_encode(utf8_encode($Imujeres)) . ",";
                            $json .= '"imputadosIndefinidos":' . json_encode(utf8_encode($Iindefinido)) . ",";
                        }
                        $ofeDto->setIdDelitoCarpeta($del['idDelitoCarpeta']);
                        $ofeDto->setActivo("S");
                        $Ofefields="distinct idOfendidoCarpeta";
                        $rsOfe = $ofeDao->selectImpofedelcarpetas($impDto,'', $this->proveedor,'',$Ofefields);
                        
                        if($rsOfe != ''){
                            $Ohombres=0;
                            $Omujeres=0;
                            $Oindefinidos=0;
                            foreach($rsOfe as $ofe){
                                $ofendidosCarpetasDto->setIdOfendidoCarpeta($ofe['idOfendidoCarpeta']);
                                $ofendidosCarpetasDto->setActivo("S");
                                $rsOfendidosCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto,'', $this->proveedor);
                                if ($rsOfendidosCarpetas != "") {
                                    foreach ($rsOfendidosCarpetas as $ofendido){
                                        if ($ofendido->getCveGenero() == 1) {
                                            $Ohombres++;
                                        }elseif($ofendido->getCveGenero() == 2){
                                            $Omujeres++;
                                        }else{
                                            $Oindefinidos++;
                                        }
                                    }
                                }
                            }
                            $json .= '"ofendidosHombres":' . json_encode(utf8_encode($Ohombres)) . ",";
                            $json .= '"ofendidosMujeres":' . json_encode(utf8_encode($Omujeres)) . ",";
                            $json .= '"ofendidosIndefinidos":' . json_encode(utf8_encode($Oindefinidos)) . "";
                        }
                        $json .= '}';
                        $d++;
                        if ($d <= count($rsDel)) {
                        $json .= ",";
                        }
                    }
                     $json .= ']';
                }else {
                     $json .= '"totalDelitos": 0';
                }
                
//                $hombres=0;
//                $mujeres=0;
//                $indefinido=0;
//                $imputadosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
//                $imputadosCarpetasDto->setIdImputadoCarpeta($carpeta->getIdCarpetaJudicial());
//                $imputadosCarpetasDto->setActivo("S");
////                $fields = ' idImputadoCarpeta, SUM(CASE WHEN cveGenero = 1 THEN 1 ELSE 0 END) AS ImputadosHombres, SUM(CASE WHEN cveGenero = 2 THEN 1 ELSE 0 END) AS ImputadosMujeres  ';
//                $rsImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto,'', $this->proveedor);
//                if ($rsImputadosCarpetas != "") {
//                    foreach ($rsImputadosCarpetas as $imputado){
//                        if ($imputado->getCveGenero() == 1) {
//                            $hombres++;
//                        }elseif($imputado->getCveGenero() == 2){
//                            $mujeres++;
//                        }else{
//                            $indefinido++;
//                        }
//                    }
//                $json .= '"imputadosHombres":' . json_encode(utf8_encode($hombres)) . ",";
//                $json .= '"imputadosMujeres":' . json_encode(utf8_encode($mujeres)) . ",";
//                $json .= '"imputadosIndefinidos":' . json_encode(utf8_encode($indefinido)) . ",";
//                }
                
//                $ofendidosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
//                $ofendidosCarpetasDto->setActivo("S");
////                $fields = ' idImputadoCarpeta, SUM(CASE WHEN cveGenero = 1 THEN 1 ELSE 0 END) AS ImputadosHombres, SUM(CASE WHEN cveGenero = 2 THEN 1 ELSE 0 END) AS ImputadosMujeres  ';
//                $rsOfendidosCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto,'', $this->proveedor);
//                if ($rsOfendidosCarpetas != "") {
//                    foreach ($rsOfendidosCarpetas as $ofendido){
//                        if ($ofendido->getCveGenero() == 1) {
//                            $Ohombres++;
//                        }elseif($ofendido->getCveGenero() == 2){
//                            $Omujeres++;
//                        }else{
//                            $Oindefinidos++;
//                        }
//                    }
//                $json .= '"ofendidosHombres":' . json_encode(utf8_encode($Ohombres)) . ",";
//                $json .= '"ofendidosMujeres":' . json_encode(utf8_encode($Omujeres)) . ",";
//                $json .= '"ofendidosIndefinidos":' . json_encode(utf8_encode($Oindefinidos)) . "";
//                }
                
                
                $json .= "}" . "\n";
                $n ++;
                if ($n <= count($carpetasRes)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

}
?>



