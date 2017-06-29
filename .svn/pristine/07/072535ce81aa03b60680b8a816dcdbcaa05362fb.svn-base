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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consumaciones/ConsumacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formasacciones/FormasaccionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidades/ModalidadesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/concursos/ConcursosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/comisiones/ComisionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/regiones/RegionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/codigos/CodigosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/codigos/CodigosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposJuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposJuzgados/TiposjuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class causasRadicadasDetalleController {

    private $proveedor;

    public function __construct() {
        
    }

    public function selectCausas($carpetasdto, $param = null, $proveedor = null) {
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

        $impofedelDto = new ImpofedelcarpetasDTO();
        $impofedelDao = new ImpofedelcarpetasDAO();

        $consumacionDao = new ConsumacionesDAO();
        $consumacionDto = new ConsumacionesDTO();

        $formasAccionesDao = new FormasaccionesDAO();
        $formasAccionesDto = new FormasaccionesDTO();

        $modalidadesDao = new ModalidadesDAO();
        $modalidadesDto = new ModalidadesDTO();

        $concursosDao = new ConcursosDAO();
        $concursosDto = new ConcursosDTO();

        $comisionesDao = new ComisionesDAO();
        $comisionesDto = new ComisionesDTO();

        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();

        $distritosDao = new DistritosDAO();
        $distritosDto = new DistritosDTO();

        $regionesDao = new RegionesDAO();
        $regionesDto = new RegionesDTO();

        $tiposJuzgadosDao = new TiposjuzgadosDAO();
        $tiposJuzgadosDto = new TiposjuzgadosDTO();

        $audienciasDao = new AudienciasDAO();
        $audienciasDto = new AudienciasDTO();

        $catAudienciasDao = new CataudienciasDAO();
        $cataudienciasDto = new CataudienciasDTO();

        $codigosDao = new CodigosDAO();
        $codigosDto = new CodigosDTO();

        if ($param["juzgado"] != "") {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND cveJuzgado=" . $param["juzgado"] . " AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        } else if ($param["juzgado"] == "" && $param["distrito"] != "") {
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
        } else if ($param["juzgado"] == "" && $param["distrito"] == "" && $param["region"] != "") {
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
//            print_r($carpetasRes);
//            exit;
        } else {
            $carpetasRes = $carpetaDao->selectCarpetasjudiciales($carpetasdto, "AND fechaRadicacion >= '" . $param['fechaDesde'] . " 00:00:00' AND fechaRadicacion <= '" . $param['fechaHasta'] . " 23:59:59' AND cveEstatusCarpeta='1' ORDER BY numero ASC, anio DESC", $this->proveedor, $param);
        }
        if ($carpetasRes != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($carpetasRes) . '",';
            $json .= '"data":[';

            foreach ($carpetasRes as $carpeta) {
                $json .= "{";
                #infoCarpeta
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($carpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($carpeta->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($carpeta->getAnio())) . ",";
                $json .= '"fechaRadicacion":' . json_encode(utf8_encode($carpeta->getFechaRadicacion())) . ",";
                $json .= '"CarpInv":' . json_encode(utf8_encode($carpeta->getCarpetaInv())) . ",";
                $json .= '"NUC":' . json_encode(utf8_encode($carpeta->getNuc())) . ",";

                #tipo carpeta
                $tipoCarpetaDto->setCveTipoCarpeta($carpeta->getCveTipoCarpeta());
                $tipoCarpetares = $tipoCarpetaDao->selectTiposcarpetas($tipoCarpetaDto, "", $this->proveedor);
                if ($tipoCarpetares != "") {
                    $json .= '"tipoCarpeta":' . json_encode(utf8_encode($tipoCarpetares[0]->getDesTipoCarpeta())) . ",";
                } else {
                    $json .= '"tipoCarpeta":' . json_encode(utf8_encode("N/A")) . ",";
                }
                #juzgado
                $juzgadosDto->setCveJuzgado($carpeta->getCveJuzgado());
                $juzgadores = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);

                if ($juzgadores != "") {
                    $json .= '"Juzgado":' . json_encode(utf8_encode($juzgadores[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"Juzgado":' . json_encode(utf8_encode("N/A")) . ",";
                }
                #distrito
                $distritosDto->setCveDistrito($juzgadores[0]->getCveDistrito());
                $distritosres = $distritosDao->selectDistritos($distritosDto, "", $this->proveedor);
                if ($distritosres) {
                    $json .= '"Distrito":' . json_encode(utf8_encode($distritosres[0]->getDesDistrito())) . ",";
                } else {
                    $json .= '"Distrito":' . json_encode(utf8_encode("N/A")) . ",";
                }
                #región
                $regionesDto->setCveRegion($juzgadores[0]->getCveRegion());
                $regionres = $regionesDao->selectRegiones($regionesDto, "", $this->proveedor);
                if ($regionres != "") {
                    $json .= '"Region":' . json_encode(utf8_encode($regionres[0]->getDesRegion())) . ",";
                } else {
                    $json .= '"Region":' . json_encode(utf8_encode("N/A")) . ",";
                }
                #codigo
                $audienciasDto->setIdReferencia($carpeta->getIdCarpetaJudicial());
                $audienciasres = $audienciasDao->selectAudiencias($audienciasDto, "", $this->proveedor);
                if ($audienciasres != "") {
                    $cataudienciasDto->setCveCatAudiencia($audienciasres[0]->getCveCatAudiencia());
                    $cataudienciares = $catAudienciasDao->selectCataudiencias($cataudienciasDto, "", $this->proveedor);
                    if ($cataudienciares != "") {
                        $codigosDto->setCveCodigo($cataudienciares[0]->getCveCodigo());
                        $codigosres = $codigosDao->selectCodigos($codigosDto, "", $this->proveedor);
                        if ($codigosres != "") {
                            $codigoo = $codigosres[0]->getDesCodigo();
                        } else {
                            $codigoo = "NO ESPECIFICADO";
                        }
                    } else {
                        $codigoo = "NO ESPECIFICADO";
                    }
                } else {
                    $codigoo = "NO ESPECIFICADO";
                }
                #delitos
                $json .= '"delitos":[';
                $delitosCarpetasDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                $delitosCarpetasDto->setActivo("S");
                $delitosres = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);

                if ($delitosres != "") {
                    $w = 1;
                    foreach ($delitosres as $delitos) {
                        $json .= "{";
                        $impofedelDto->setIdCarpetaJudicial($carpeta->getIdCarpetaJudicial());
                        $impofedelDto->setIdDelitoCarpeta($delitos->getIdDelitoCarpeta());
                        $delitosres2 = $impofedelDao->selectImpofedelcarpetas($impofedelDto, "limit 0,1", $this->proveedor);
                        $json .= '"cveDelito":' . json_encode(utf8_encode($delitos->getCveDelito())) . ",";

                        $delitosDto->setCveDelito($delitos->getCveDelito());
                        $delitosCat = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        if ($delitosCat != "") {
                            $json .= '"desDelito":' . json_encode(utf8_encode($delitosCat[0]->getDesDelito())) . ",";
                        } else {
                            $json .= '"desDelito":' . json_encode(utf8_encode("N/A")) . ",";
                        }
                        if ($delitosres2 != "") {
                            $consumacionDto->setCveConsumacion($delitosres2[0]->getCveConsumacion());
                            $consumacionres = $consumacionDao->selectConsumaciones($consumacionDto, "", $this->proveedor);
                            if ($consumacionres != "") {
                                $json .= '"consumacion":' . json_encode(utf8_encode($consumacionres[0]->getDesConsumacion())) . ",";
                            } else {
                                $json .= '"consumacion":' . json_encode(utf8_encode("N/A")) . ",";
                            }

                            $formasAccionesDto->setCveFormaAccion($delitosres2[0]->getCveFormaAccion());
                            $formasRes = $formasAccionesDao->selectFormasacciones($formasAccionesDto, "", $this->proveedor);
                            if ($formasRes != "") {
                                $json .= '"FormaAccion":' . json_encode(utf8_encode($formasRes[0]->getDesFormaAccion())) . ",";
                            } else {
                                $json .= '"FormaAccion":' . json_encode(utf8_encode("N/A")) . ",";
                            }

                            $modalidadesDto->setCveModalidad($delitosres2[0]->getCveModalidad());
                            $modalidadesRes = $modalidadesDao->selectModalidades($modalidadesDto, "", $this->proveedor);
                            if ($modalidadesRes != "") {
                                $json .= '"Modalidad":' . json_encode(utf8_encode($modalidadesRes[0]->getDesModalidad())) . ",";
                            } else {
                                $json .= '"Modalidad":' . json_encode(utf8_encode("N/A")) . ",";
                            }
                            $concursosDto->setCveConcurso($delitosres2[0]->getCveConcurso());
                            $concursosres = $concursosDao->selectConcursos($concursosDto, "", $this->proveedor);
                            if ($concursosres != "") {
                                $json .= '"Concurso":' . json_encode(utf8_encode($concursosres[0]->getDesConcurso())) . ",";
                            } else {
                                $json .= '"Concurso":' . json_encode(utf8_encode("N/A")) . ",";
                            }
                            $comisionesDto->setCveComision($delitosres2[0]->getCveComision());
                            $comisionesres = $comisionesDao->selectComisiones($comisionesDto, "", $this->proveedor);
                            if ($comisionesres != "") {
                                $json .= '"Comision":' . json_encode(utf8_encode($comisionesres[0]->getDesComision())) . ",";
                            } else {
                                $json .= '"Comision":' . json_encode(utf8_encode("N/A")) . ",";
                            }
                            $json .= '"Procedimiento":' . json_encode(utf8_encode($codigoo)) . "";
                            
                        } else {
                            $json .= '"consumacion":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . ",";
                            $json .= '"FormaAccion":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . ",";
                            $json .= '"Modalidad":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . ",";
                            $json .= '"Concurso":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . ",";
                            $json .= '"Comision":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . ",";
                            $json .= '"Procedimiento":' . json_encode(utf8_encode("SIN RELACI&Oacute;N")) . "";
                        }
                        $json .= "}";
                        $w = $w + 1;
                        if ($w <= count($delitosres)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= ']}';
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

}

?>