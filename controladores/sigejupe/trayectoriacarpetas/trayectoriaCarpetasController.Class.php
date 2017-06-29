<?php

if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("America/Mexico_City");
error_reporting(E_ALL);
ini_set('max_execution_time', 600);

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposresoluciones/TiposresolucionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposresoluciones/TiposresolucionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class trajectoriasCarpetas {

    private $proveedor;

    public function __construct() {
        
    }

    public function selectTrayectoria($carpetasdto, $param = null, $proveedor = null) {
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

        $actuacionesDto = new ActuacionesDTO();
        $actuacionesDao = new ActuacionesDAO();

        $tipoActuacionDto = new TiposactuacionesDTO();
        $tipoActuacionDao = new TiposactuacionesDAO();

        $tiposResolucionesDto = new TiposresolucionesDTO();
        $tiposResolucionesDao = new TiposresolucionesDAO();

        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();

        $delitosDao = new DelitosDAO();
        $delitosDto = new DelitosDTO();

        $etapasProcesalesDao = new EtapasprocesalesDAO();
        $etapasProcesalesDto = new EtapasprocesalesDTO();

        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();

        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();
        $carpetasdto->setActivo("S");
        $carpetasdto->setCveEstatusCarpeta(1);
        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';
            //catalogos
            $tiposResolucionesDto->setActivo('S');
            $rsTipoResoluciones = $tiposResolucionesDao->selectTiposresoluciones($tiposResolucionesDto, "", $this->proveedor);

            $tipoActuacionDto->setActivo('S');
            $tipoActuacionres = $tipoActuacionDao->selectTiposactuaciones($tipoActuacionDto, "", $this->proveedor);

            $juzgadosDto->setActivo('S');
            $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);

            $distritosDto->setActivo('S');
            $rsDistritos = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);

            $tipoCarpetaDto->setActivo('S');
            $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                
                $tipoCarpetaDto->setActivo('S');
                $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
                $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

                if ($tipoCarpetares != "") {
                            $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoC->getDesTipoCarpeta())) . ",";
                }

                foreach ($rsJuzgados as $juzgado) {
                    if ($carpeta->getCveJuzgado() == $juzgado->getCveJuzgado()) {
                        $juzgadoC = $juzgado->getDesJuzgado();
                        foreach ($rsDistritos as $distrito) {
                            if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                $json .= '"juzgado":' . json_encode(utf8_encode($juzgado->getDesJuzgado())) . ",";
                                $distritoC = $distrito->getDesDistrito();
                                $json .= '"distrito":' . json_encode(utf8_encode($distrito->getDesDistrito())) . ",";
                            }
                        }
                    }
                }

                $etapasProcesalesDto->setCveEtapaProcesal($carpeta->getCveEtapaProcesal());
                $etapasres = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                if ($etapasres != "") {
                    $json .= '"etapaProcesal":' . json_encode(utf8_encode($etapasres[0]->getDesEtapaProcesal())) . ",";
                } else {
                    $json .= '"etapaProcesal":"SIN ETAPA",';
                }

                $json .= '"delitos":[';
                $delitosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $delitosCarpetasDto->setActivo("S");
                $delitosres = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                if ($delitosres != "") {
                    $w = 1;
                    foreach ($delitosres as $delitos) {
                        $json .= "{";
                        $json .= '"cveDelito":' . json_encode(utf8_encode($delitos->getcveDelito())) . ",";
                        $delitosDto->setCveDelito($delitos->getcveDelito());
                        $delitosCat = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        $json .= '"desDelito":' . json_encode(utf8_encode($delitosCat[0]->getDesDelito())) . "";
                        $json .= "}";
                        $w = $w + 1;
                        if ($w <= count($delitosres)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";
                $json .= '"actuaciones":[';
                $actuacionesDto->setIdReferencia($carpeta->getIdCarpetaJudicial());
                $actuacionesDto->setActivo("S");

                $actuacionesres = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor, " ORDER BY fechaRegistro DESC");

                $y = 1;
                $actuacionesres2 = "no";
                $sentAbsolitoria = "no";
                $totAct = 0;

                if ($actuacionesres != "") {
                    foreach ($actuacionesres as $actuaciones) {
                        $tipoRes = "";
                        $tipoAct = "";
                        if ($actuaciones->getCveTipoActuacion() == 3 && $actuaciones->getCveTipoSentencia() == 2) {
                            $sentAbsolitoria = "1";
                        } else {
                            $sentAbsolitoria = "2";
                        }
                        $json .= "{";
                        $json .= '"idActuacion":' . json_encode(utf8_encode($actuaciones->getIdActuacion())) . ",";
                        $json .= '"aniActuacion":' . json_encode(utf8_encode($actuaciones->getNumActuacion())) . ",";
                        $json .= '"numActuacion":' . json_encode(utf8_encode($actuaciones->getAniActuacion())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuaciones->getFechaRegistro())) . ",";

                        if ((int) $actuaciones->getCveTipoActuacion() === 2) {

                            foreach ($rsTipoResoluciones as $tipoResolucion) {
                                if ($actuaciones->getCveTipoResolucion() == $tipoResolucion->getCveTipoResolucion()) {
                                    $tipoRes = $tipoResolucion->getDesTipoResolucion();
                                }
                            }
                            if ($tipoRes != "") {
                                $json .= '"sintesis":' . json_encode(utf8_encode($tipoRes)) . ",";
                            } else {
                                $json .= '"sintesis":' . json_encode("ACUERDO") . ",";
                            }
                        } else {
                            $json .= '"sintesis":' . json_encode($actuaciones->getSintesis()) . ",";
                        }
                        $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuaciones->getCveTipoActuacion())) . ",";
                        $json .= '"sentAbsolutoria":' . json_encode(utf8_encode($sentAbsolitoria)) . ",";
                        foreach ($tipoActuacionres as $tipoActuacion) {
                            if ($actuaciones->getCveTipoActuacion() == $tipoActuacion->getCveTipoActuacion()) {
                                $tipoAct = $tipoActuacion->getDesTipoActuacion();
                            }
                        }
                        if ($tipoAct != "") {
                            $json .= '"tipoActuacion":' . json_encode(utf8_encode($tipoAct)) . "";
                        }
                        if ($param["fechaSin"] != "") {
                            if ($actuaciones->getFechaRegistro() >= $param["fechaSin"] . " 00:00:00") {
                                if ($actuaciones->getFechaRegistro() <= $param['fechaHasta'] . " 23:59:59") {
                                    $actuacionesres2 = "si";
                                } else {
                                    $actuacionesres2 = "no";
                                }
                            }
                        } else {
                            $actuacionesres2 = "si";
                        }
                        $totAct = +1;
                        $json .= "}";
                        $y = $y + 1;
                        if ($y <= count($actuacionesres)) {
                            $json .= ",";
                        }
                    }
                } else {
                    if ($param["fechaSin"] != "") {
                        $actuacionesres2 = "no";
                    } else {
                        $actuacionesres2 = "si";
                    }
                }
                $json .= ']';
                if ($actuacionesres2 == "si") {
                    $json .= ',"actividad":"1"';
                } else {
                    $json .= ',"actividad":"2"';
                }
                $json .= ',"totalActuaciones":' . json_encode($totAct);
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($carpetasRes)) {
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

    public function selectTrazabilidad($carpetasdto, $param = null, $proveedor = null) {
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

        $actuacionesDto = new ActuacionesDTO();
        $actuacionesDao = new ActuacionesDAO();

        $tipoActuacionDto = new TiposactuacionesDTO();
        $tipoActuacionDao = new TiposactuacionesDAO();

        $tiposResolucionesDto = new TiposresolucionesDTO();
        $tiposResolucionesDao = new TiposresolucionesDAO();

        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();

        $delitosDao = new DelitosDAO();
        $delitosDto = new DelitosDTO();

        $etapasProcesalesDao = new EtapasprocesalesDAO();
        $etapasProcesalesDto = new EtapasprocesalesDTO();

        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();

        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();

        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';
            //catalogos
            $tiposResolucionesDto->setActivo('S');
            $rsTipoResoluciones = $tiposResolucionesDao->selectTiposresoluciones($tiposResolucionesDto, "", $this->proveedor);

            $tipoActuacionDto->setActivo('S');
            $tipoActuacionres = $tipoActuacionDao->selectTiposactuaciones($tipoActuacionDto, "", $this->proveedor);

            $juzgadosDto->setActivo('S');
            $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);

            $distritosDto->setActivo('S');
            $rsDistritos = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);

            $tipoCarpetaDto->setActivo('S');
            $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"cveCarpeta":' . json_encode(utf8_encode($carpeta->getCveTipoCarpeta())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                
                $tipoCarpetaDto->setActivo('S');
                $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
                $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

                if ($tipoCarpetares != "") {
//                    foreach ($tipoCarpetares as $tipoC) {
//                        var_dump($tipoC->getCveTipoCarpeta());
//                        if ($carpeta->getCveTipoCarpeta() == $tipoC->getCveTipoCarpeta()) {
                            $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoCarpetares[0]->getDesTipoCarpeta())) . ",";
//                        }
//                    }
                }
                foreach ($rsJuzgados as $juzgado) {
                    if ($carpeta->getCveJuzgado() == $juzgado->getCveJuzgado()) {
                        $juzgadoC = $juzgado->getDesJuzgado();
                        foreach ($rsDistritos as $distrito) {
                            if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                $json .= '"juzgado":' . json_encode(utf8_encode($juzgado->getDesJuzgado())) . ",";
                                $distritoC = $distrito->getDesDistrito();
                                $json .= '"distrito":' . json_encode(utf8_encode($distrito->getDesDistrito())) . ",";
                            }
                        }
                    }
                }

                $etapasProcesalesDto->setCveEtapaProcesal($carpeta->getCveEtapaProcesal());
                $etapasres = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                if ($etapasres != "") {
                    $json .= '"etapaProcesal":' . json_encode(utf8_encode($etapasres[0]->getDesEtapaProcesal())) . ",";
                } else {
                    $json .= '"etapaProcesal":"SIN ETAPA",';
                }

                $json .= '"delitos":[';
                $delitosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $delitosCarpetasDto->setActivo("S");
                $delitosres = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                if ($delitosres != "") {
                    $w = 1;
                    foreach ($delitosres as $delitos) {
                        $json .= "{";
                        $json .= '"cveDelito":' . json_encode(utf8_encode($delitos->getcveDelito())) . ",";
                        $delitosDto->setCveDelito($delitos->getcveDelito());
                        $delitosCat = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        $json .= '"desDelito":' . json_encode(utf8_encode($delitosCat[0]->getDesDelito())) . "";
                        $json .= "}";
                        $w = $w + 1;
                        if ($w <= count($delitosres)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";
                $json .= '"actuaciones":[';
                $actuacionesDto->setIdReferencia($carpeta->getIdCarpetaJudicial());
                $actuacionesDto->setActivo("S");
//                $actuacionesDto->setNumero($carpeta->getNumero());
//                $actuacionesDto->setAnio($carpeta->getAnio());
//                $actuacionesDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
//                $actuacionesDto->setCveJuzgado($carpeta->getcveJuzgado());
                $parametr["cantxPag"] = 1;
                $parametr["paginacion"] = true;
                $parametr["fechaDesde"] = "";
                $parametr["fechaHasta"] = "";
                $parametr["pag"] = "";
//                $fieldsAct = " idActuacion, aniActuacion, numActuacion, fechaRegistro, cveTipoActuacion, cveTipoSentencia, cveTipoResolucion, cveTipoCarpeta, Sintesis ";
                $actuacionesres = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor, " ORDER BY fechaRegistro DESC ", $parametr);
//                $actuacionesres = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor, " ORDER BY fechaRegistro DESC");
                $y = 1;
                $actuacionesres2 = "no";
                $sentAbsolitoria = "no";
                $totAct = 0;
                if ($actuacionesres != "") {
                    foreach ($actuacionesres as $actuaciones) {
                        $tipoRes = "";
                        $tipoAct = "";
                        $sentAbsolitoria = "";
                        if ($actuaciones->getCveTipoActuacion() == 3 && $actuaciones->getCveTipoSentencia() == 2) {

                            $sentAbsolitoria = "1";
                        } else {
                            $sentAbsolitoria = "2";
                        }
                        $json .= "{";
                        $json .= '"idActuacion":' . json_encode(utf8_encode($actuaciones->getIdActuacion())) . ",";
                        $json .= '"aniActuacion":' . json_encode(utf8_encode($actuaciones->getNumActuacion())) . ",";
                        $json .= '"numActuacion":' . json_encode(utf8_encode($actuaciones->getAniActuacion())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuaciones->getFechaRegistro())) . ",";
                        if ((int) $actuaciones->getCveTipoActuacion() === 2) {
                            foreach ($rsTipoResoluciones as $tipoResolucion) {
                                if ($actuaciones->getCveTipoResolucion() == $tipoResolucion->getCveTipoResolucion()) {
                                    $tipoRes = $tipoResolucion->getDesTipoResolucion();
                                }
                            }
                            if ($tipoRes != "") {
                                $json .= '"sintesis":' . json_encode(utf8_encode($tipoRes)) . ",";
                            } else {
                                $json .= '"sintesis":' . json_encode("ACUERDO") . ",";
                            }
                        } else {
                            $json .= '"sintesis":' . json_encode($actuaciones->getSintesis()) . ",";
                        }
                        $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuaciones->getCveTipoActuacion())) . ",";
                        $json .= '"sentAbsolutoria":' . json_encode(utf8_encode($sentAbsolitoria)) . ",";
                        foreach ($tipoActuacionres as $tipoActuacion) {
                            if ($actuaciones->getCveTipoActuacion() == $tipoActuacion->getCveTipoActuacion()) {
                                $tipoAct = $tipoActuacion->getDesTipoActuacion();
                            }
                        }
                        if ($tipoAct != "") {
                            $json .= '"tipoActuacion":' . json_encode(utf8_encode($tipoAct)) . "";
                        }
                        if ($param["fechaSin"] != "") {
                            if ($actuaciones->getFechaRegistro() >= $param["fechaSin"] . " 00:00:00" && $actuaciones->getFechaRegistro() <= $param['fechaHasta'] . " 23:59:59") {
                                $actuacionesres2 = "si";
                            } else {
                                $actuacionesres2 = "no";
                            }
//                            }
                        } else {
                            $actuacionesres2 = "si";
                        }
                        $totAct = +1;
                        $json .= "}";
                        $y = $y + 1;
                        if ($y <= count($actuacionesres)) {
                            $json .= ",";
                        }
                    }
                } else {
                    if ($param["fechaSin"] != "") {
//                        if ($carpeta->getFechaRegistro() >= $param["fechaSin"]." 00:00:00" && $carpeta->getFechaRegistro() <= $param['fechaHasta']." 23:59:59") {
                        $actuacionesres2 = "no";
//                        } else {
//                            $actuacionesres2 = "si";
//                        }
                    } else {
                        $actuacionesres2 = "si";
                    }
                }
                $json .= ']';
                if ($actuacionesres2 == "si") {
                    $json .= ',"actividad":"1"';
                } else {
                    $json .= ',"actividad":"2"';
                }
                $json .= ',"totalActuaciones":' . json_encode($totAct);
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($carpetasRes)) {
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
    public function selectTrazabilidadRSP($carpetasdto, $param = null, $proveedor = null) {
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

        $actuacionesDto = new ActuacionesDTO();
        $actuacionesDao = new ActuacionesDAO();

        $tipoActuacionDto = new TiposactuacionesDTO();
        $tipoActuacionDao = new TiposactuacionesDAO();

        $tiposResolucionesDto = new TiposresolucionesDTO();
        $tiposResolucionesDao = new TiposresolucionesDAO();

        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();

        $delitosDao = new DelitosDAO();
        $delitosDto = new DelitosDTO();

        $etapasProcesalesDao = new EtapasprocesalesDAO();
        $etapasProcesalesDto = new EtapasprocesalesDTO();

        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();

        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();

        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';
            //catalogos
            $tiposResolucionesDto->setActivo('S');
            $rsTipoResoluciones = $tiposResolucionesDao->selectTiposresoluciones($tiposResolucionesDto, "", $this->proveedor);

            $tipoActuacionDto->setActivo('S');
            $tipoActuacionres = $tipoActuacionDao->selectTiposactuaciones($tipoActuacionDto, "", $this->proveedor);

            $juzgadosDto->setActivo('S');
            $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);

            $distritosDto->setActivo('S');
            $rsDistritos = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);

            $tipoCarpetaDto->setActivo('S');
            $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"cveCarpeta":' . json_encode(utf8_encode($carpeta->getCveTipoCarpeta())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                
                $tipoCarpetaDto->setActivo('S');
                $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
                $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);

                if ($tipoCarpetares != "") {
//                    foreach ($tipoCarpetares as $tipoC) {
//                        var_dump($tipoC->getCveTipoCarpeta());
//                        if ($carpeta->getCveTipoCarpeta() == $tipoC->getCveTipoCarpeta()) {
                            $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoCarpetares[0]->getDesTipoCarpeta())) . ",";
//                        }
//                    }
                }
                foreach ($rsJuzgados as $juzgado) {
                    if ($carpeta->getCveJuzgado() == $juzgado->getCveJuzgado()) {
                        $juzgadoC = $juzgado->getDesJuzgado();
                        foreach ($rsDistritos as $distrito) {
                            if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                $json .= '"juzgado":' . json_encode(utf8_encode($juzgado->getDesJuzgado())) . ",";
                                $distritoC = $distrito->getDesDistrito();
                                $json .= '"distrito":' . json_encode(utf8_encode($distrito->getDesDistrito())) . ",";
                            }
                        }
                    }
                }

                $etapasProcesalesDto->setCveEtapaProcesal($carpeta->getCveEtapaProcesal());
                $etapasres = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                if ($etapasres != "") {
                    $json .= '"etapaProcesal":' . json_encode(utf8_encode($etapasres[0]->getDesEtapaProcesal())) . ",";
                } else {
                    $json .= '"etapaProcesal":"SIN ETAPA",';
                }

                $json .= '"delitos":[';
                $delitosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $delitosCarpetasDto->setActivo("S");
                $delitosres = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                if ($delitosres != "") {
                    $w = 1;
                    foreach ($delitosres as $delitos) {
                        $json .= "{";
                        $json .= '"cveDelito":' . json_encode(utf8_encode($delitos->getcveDelito())) . ",";
                        $delitosDto->setCveDelito($delitos->getcveDelito());
                        $delitosCat = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        $json .= '"desDelito":' . json_encode(utf8_encode($delitosCat[0]->getDesDelito())) . "";
                        $json .= "}";
                        $w = $w + 1;
                        if ($w <= count($delitosres)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";
                $json .= '"actuaciones":[';
                $actuacionesDto->setIdReferencia($carpeta->getIdCarpetaJudicial());
                $actuacionesDto->setActivo("S");
//                $actuacionesDto->setNumero($carpeta->getNumero());
//                $actuacionesDto->setAnio($carpeta->getAnio());
//                $actuacionesDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
//                $actuacionesDto->setCveJuzgado($carpeta->getcveJuzgado());
                $parametr["cantxPag"] = 1;
                $parametr["paginacion"] = true;
                $parametr["fechaDesde"] = "";
                $parametr["fechaHasta"] = "";
                $parametr["pag"] = "";
//                $fieldsAct = " idActuacion, aniActuacion, numActuacion, fechaRegistro, cveTipoActuacion, cveTipoSentencia, cveTipoResolucion, cveTipoCarpeta, Sintesis ";
                $actuacionesres = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor, " ORDER BY fechaRegistro DESC ", $parametr);
//                $actuacionesres = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor, " ORDER BY fechaRegistro DESC");
                $y = 1;
                $actuacionesres2 = "no";
                $sentAbsolitoria = "no";
                $totAct = 0;
                if ($actuacionesres != "") {
                    foreach ($actuacionesres as $actuaciones) {
                        $tipoRes = "";
                        $tipoAct = "";
                        $sentAbsolitoria = "";
                        if ($actuaciones->getCveTipoActuacion() == 3 && $actuaciones->getCveTipoSentencia() == 2) {

                            $sentAbsolitoria = "1";
                        } else {
                            $sentAbsolitoria = "2";
                        }
                        $json .= "{";
                        $json .= '"idActuacion":' . json_encode(utf8_encode($actuaciones->getIdActuacion())) . ",";
                        $json .= '"aniActuacion":' . json_encode(utf8_encode($actuaciones->getNumActuacion())) . ",";
                        $json .= '"numActuacion":' . json_encode(utf8_encode($actuaciones->getAniActuacion())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($actuaciones->getFechaRegistro())) . ",";
                        if ((int) $actuaciones->getCveTipoActuacion() === 2) {
                            foreach ($rsTipoResoluciones as $tipoResolucion) {
                                if ($actuaciones->getCveTipoResolucion() == $tipoResolucion->getCveTipoResolucion()) {
                                    $tipoRes = $tipoResolucion->getDesTipoResolucion();
                                }
                            }
                            if ($tipoRes != "") {
                                $json .= '"sintesis":' . json_encode(utf8_encode($tipoRes)) . ",";
                            } else {
                                $json .= '"sintesis":' . json_encode("ACUERDO") . ",";
                            }
                        } else {
                            $json .= '"sintesis":' . json_encode($actuaciones->getSintesis()) . ",";
                        }
                        $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuaciones->getCveTipoActuacion())) . ",";
                        $json .= '"sentAbsolutoria":' . json_encode(utf8_encode($sentAbsolitoria)) . ",";
                        foreach ($tipoActuacionres as $tipoActuacion) {
                            if ($actuaciones->getCveTipoActuacion() == $tipoActuacion->getCveTipoActuacion()) {
                                $tipoAct = $tipoActuacion->getDesTipoActuacion();
                            }
                        }
                        if ($tipoAct != "") {
                            $json .= '"tipoActuacion":' . json_encode(utf8_encode($tipoAct)) . "";
                        }
                        if ($param["fechaSin"] != "") {
                            if ($actuaciones->getFechaRegistro() >= $param["fechaSin"] . " 00:00:00" && $actuaciones->getFechaRegistro() <= $param['fechaHasta'] . " 23:59:59") {
                                $actuacionesres2 = "si";
                            } else {
                                $actuacionesres2 = "no";
                            }
//                            }
                        } else {
                            $actuacionesres2 = "si";
                        }
                        $totAct = +1;
                        $json .= "}";
                        $y = $y + 1;
                        if ($y <= count($actuacionesres)) {
                            $json .= ",";
                        }
                    }
                } else {
                    if ($param["fechaSin"] != "") {
//                        if ($carpeta->getFechaRegistro() >= $param["fechaSin"]." 00:00:00" && $carpeta->getFechaRegistro() <= $param['fechaHasta']." 23:59:59") {
                        $actuacionesres2 = "no";
//                        } else {
//                            $actuacionesres2 = "si";
//                        }
                    } else {
                        $actuacionesres2 = "si";
                    }
                }
                $json .= ']';
                if ($actuacionesres2 == "si") {
                    $json .= ',"actividad":"1"';
                } else {
                    $json .= ',"actividad":"2"';
                }
                $json .= ',"totalActuaciones":' . json_encode($totAct);
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($carpetasRes)) {
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

    public function getPaginasTrayectorias($carpetasdto, $param = null, $proveedor = null) {
        $carpetaDao = new CarpetasjudicialesDAO();
        $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59'", $this->proveedor, $param);
        $numTot = count($carpetasRes);
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
        $json .= '"data":[';
        $x = 1;
        //var_dump($totPages);
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }

        //var_dump($json);
        return $json;
    }

    public function generarAcuerdo($idsCarpetas, $param = null, $proveedor = null) {
        $idsCarpetas = json_decode($idsCarpetas);
         $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"No se recibieron los acuerdos a generar"';
            $tmp .= "}";
            $error = false;
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        if ($idsCarpetas != "" && $idsCarpetas != null) {
            $this->proveedor->execute("BEGIN");
            $actuacionesDto = new ActuacionesDTO();
            $actuacionesController = new ActuacionesController();
            foreach ($idsCarpetas as $idCarpeta) {
                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();
                $carpetaJudicialDto->setIdCarpetaJudicial($idCarpeta);
                $carpetaJudicialDto = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto);
                if ($carpetaJudicialDto != "") {

                    $actuacionesDto->setIdReferencia($idCarpeta);
                    $actuacionesDto->setCveTipoActuacion(2);
                    $actuacionesDto->setIdJuzgadorAcuerdo(195);
                    $actuacionesDto->setCveTipoNotificacion(4);
                    $actuacionesDto->setCveTipoResolucion(10);
                    $actuacionesDto->setActivo("S");
                    $actuacionesDto->setObservaciones("Actualizame");
                    $actuacionesDto->setNumero($carpetaJudicialDto[0]->getNumero());
                    $actuacionesDto->setAnio($carpetaJudicialDto[0]->getAnio());
                    $actuacionesDto->setCveJuzgado($carpetaJudicialDto[0]->getCveJuzgado());
                    $actuacionesDto->setCveTipoCarpeta($carpetaJudicialDto[0]->getCveTipoCarpeta());
                    //var_dump($actuacionesDto);
                    $rsAcuerdos = $actuacionesController->guardarOficio($actuacionesDto, 38, 2, "", $this->proveedor);
                    if ($rsAcuerdos != "") {
                        $error = false;
                        
                    } else {
                        $error = true;
                    }
                }
            }

            if ($error != true) {
                $tmp = '{"Estatus":"ok",';
                $tmp .= '"mnj":"Registro exitoso"';
                $tmp .= "}";
            } else {
                $this->proveedor->execute('ROLLBACK');
                $tmp = '{"Estatus":"error",';
                $tmp .= '"mnj":"No se registraron acuerdos correctamente"';
                $tmp .= "}";
            }
        } else {
            $tmp = '{"Estatus":"error",';
            $tmp .= '"mnj":"No se recibieron los acuerdos a generar"';
            $tmp .= "}";
        }
        
        return $tmp;
    }

}

?>
