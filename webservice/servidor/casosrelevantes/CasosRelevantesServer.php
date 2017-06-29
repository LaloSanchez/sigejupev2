<?php
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/casosrelevantes/CasosrelevantesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");


class CasosRelevantesServer {
    
    public function consultarCasosRelevantes($json) {
        $response = array('estatus'=>'', 'mensaje'=>'', 'data'=>'');
        $status = 'error';
        $message = '';
        $data = '';
        $pagina = 1;
        try {
            $obj = json_decode($json);
//            echo "<pre>";
//            print_r($obj);
//            echo "</pre>";
            if (json_last_error() === JSON_ERROR_NONE) {
                $ActuacionesDao = new ActuacionesDAO();
                $actuacionesDto = new ActuacionesDTO();
                $tiposActuacionesDao = new TiposactuacionesDAO();
                $tiposcarpetasDAO = new TiposcarpetasDAO();
                $juzgadosDao = new JuzgadosDAO();
                $impOfeDelCarpetasController = new ImpofedelcarpetasController();
                $casosRelevantesController = new CasosrelevantesController();
                
                $actuacionesDto->setCveJuzgado($obj->juzgado);
                $actuacionesDto->setAnio($obj->anio);
                $actuacionesDto->setNumero($obj->numero);
                $actuacionesDto->setCveTipoActuacion(26);
                $actuacionesDto->setActivo('S');
                $param['fechaDesde'] = $obj->fecha_inicio;
                $param['fechaHasta'] = $obj->fecha_fin;
                $param['paginacion'] = true;
                $param['pag'] = $obj->pag;
                $param['cantxPag'] = $obj->cantxPag;
                $orden = ' ORDER BY fechaRegistro DESC';
                $pagina = $obj->pag;
                //print_r($actuacionesDto);
                $actuacionesDto = $ActuacionesDao->selectActuaciones($actuacionesDto, null, $orden, $param);
                if ( $actuacionesDto != '' ) {
                    $status = 'ok';
                    foreach ( $actuacionesDto as $actuacionDto ) {
                        $arrDatosPartes = array();
                        $datosPartes = array();
                        $arrAdjuntos = array();
                        $adjuntos = array();
                        $tiposActuacionesDto = new TiposactuacionesDTO();
                        $tiposActuacionesDto->setCveTipoActuacion($actuacionDto->getCveTipoActuacion());
                        $tiposActuacionesDto->setActivo("S");
                        $rsTipoActuacion = $tiposActuacionesDao->selectTiposactuaciones($tiposActuacionesDto);
                        if ( $rsTipoActuacion != '' ) {
                            $desTipoActuacion = utf8_encode($rsTipoActuacion[0]->getDesTipoActuacion());
                        } else {
                            $desTipoActuacion = '';
                        }
                        $tiposcarpetasDTO = new TiposcarpetasDTO();
                        $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                        $tiposcarpetasDTO->setActivo("S");
                        $rsTipoCarpeta = $tiposcarpetasDAO->selectTiposcarpetas($tiposcarpetasDTO);
                        if ( $rsTipoCarpeta != '' ) {
                            $desTipoCarpeta = utf8_encode($rsTipoCarpeta[0]->getDesTipoCarpeta());
                        } else {
                            $desTipoCarpeta = '';
                        }
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($actuacionDto->getCveJuzgado());
                        $juzgadosDto->setActivo("S");
                        $resJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto);
                        if ( $resJuzgado != '' ) {
                            $desJuzgado = utf8_encode($resJuzgado[0]->getDesJuzgado());
                        } else {
                            $desJuzgado = '';
                        }
//                        $impOfeDelCarpetasDto = new ImpofedelcarpetasDTO();
//                        $impOfeDelCarpetasDto->setIdCarpetaJudicial($actuacionDto->getIdReferencia());
//                        $impOfeDelCarpetasDto->setActivo('S');
//                        $rsDatosPartes = $impOfeDelCarpetasController->consultaImpOfeDel($impOfeDelCarpetasDto);
//                        $arrDatosPartes = json_decode($rsDatosPartes);
//                        
//                        if ( $arrDatosPartes->status == 'ok' ) {
//                            foreach ( $arrDatosPartes->data as $d ) {
//                                $datosPartes[] = array(
//                                    'idCarpeta' => $d->idCarpetaJudicial,
//                                    'nombreImputado' => $d->nombreImputado,
//                                    'nombreOfendido' => $d->nombreOfendido,
//                                    'nombreDelito' => $d->nombreDelito
//                                );
//                            }
//                            //$datosPartes = $arrDatosPartes->data;
//                        } else {
//                            $datosPartes = array();
//                        }
                        //var_dump($datosPartes);
                        $actuacionAuxDto = new ActuacionesDTO();
                        $actuacionAuxDto->setIdActuacion($actuacionDto->getIdActuacion());
                        $arrAdjuntos = $casosRelevantesController->consultarAdjuntos($actuacionAuxDto);
                        if ( $arrAdjuntos['Estatus'] == 'Ok' ) {
                            $adjuntos = $arrAdjuntos['data'];
                        } else {
                            $adjuntos = array();
                        }
                        $data[] = array(
                            'idActuacion' => $actuacionDto->getIdActuacion(),
                            'numActuacion' => $actuacionDto->getNumActuacion(),
                            'aniActuacion' => $actuacionDto->getAniActuacion(),
                            'cveTipoActuacion' => $actuacionDto->getCveTipoActuacion(),
                            'desTipoActuacion' => $desTipoActuacion,
                            'idReferencia' => $actuacionDto->getIdReferencia(),
                            'numero' => $actuacionDto->getNumero(),
                            'anio' => $actuacionDto->getAnio(),
                            'cveTipoCarpeta' => $actuacionDto->getCveTipoCarpeta(),
                            'descTipoCarpeta' => $desTipoCarpeta,
                            'cveJuzgado' => $actuacionDto->getCveJuzgado(),
                            'desJuzgado' => $desJuzgado,
                            'sintesis' => utf8_encode($actuacionDto->getSintesis()),
                            'observaciones' => utf8_encode(strip_tags($actuacionDto->getObservaciones())),
                            'fechaRegistro' => $actuacionDto->getFechaRegistro(),
                            'fechaActualizacion' => $actuacionDto->getFechaActualizacion(),
                            //'datosPartes' => $datosPartes,
                            'adjuntos' => $adjuntos
                        );
                        
                    }
                } else {
                    $message .= 'No se encontraron datos';
                }
            } else {
                $message .= 'JSON incorrecto';
            }
        } catch(Exception $e) {
            $message = $e->getMessage();
        }
        $response['estatus'] = $status;
        $response['mensaje'] = $message;
        $response['totalCount'] = count($data);
        $response['data'] = $data;
        $response['pagina'] = $pagina;
        $response = json_encode( $response );
        return $response;
        
    }
    
    public function obtenerPaginas($json) {
        $datos = '';
        try {
            $obj = json_decode($json);
            if (json_last_error() === JSON_ERROR_NONE) {
                $actuacionesDto = new ActuacionesDTO();
                $casosRelevantesController = new CasosrelevantesController();
                
                $actuacionesDto->setCveJuzgado($obj->juzgado);
                $actuacionesDto->setAnio($obj->anio);
                $actuacionesDto->setNumero($obj->numero);
                $actuacionesDto->setCveTipoActuacion(26);
                $actuacionesDto->setActivo('S');
                $param['fechaDesde'] = $obj->fecha_inicio;
                $param['fechaHasta'] = $obj->fecha_fin;
                $param['pag'] = $obj->pag;
                $param['cantxPag'] = $obj->cantxPag;
                $datos = $casosRelevantesController->getPaginas($actuacionesDto, $param);
            }
        } catch(Exception $e){
            $datos = '';
        }
        return $datos;
    }
    
}
//$casosRelevantesServer = new CasosRelevantesServer();
//$idJuzgado = 791;
//$txtNumero = '';
//$txtAnio = '';
//$strFechaInicio = '';
//$strFechaFin = '';
//$pag = 1;
//$cantXPag = 10;
//$strJSON = "{";
//$strJSON .= "\"juzgado\": \"" . $idJuzgado . "\",";
//$strJSON .= "\"numero\":\"" . $txtNumero . "\",";
//$strJSON .= "\"anio\":\"" . $txtAnio . "\",";
//$strJSON .= "\"fecha_inicio\":\"" . $strFechaInicio . "\",";
//$strJSON .= "\"fecha_fin\":\"" . $strFechaFin . "\",";
//$strJSON .= "\"pag\":\"" . $pag . "\",";
//$strJSON .= "\"cantxPag\":\"" . $cantXPag . "\"";
//$strJSON .= "}";
//
//$result = $casosRelevantesServer->consultarCasosRelevantes($strJSON);
//$datos = json_decode($result);
//echo "<pre>";
//echo $result;
//echo "</pre>";
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("CasosRelevantesScramble.wsdl");
$server->setClass("CasosRelevantesServer");
$server->handle();
