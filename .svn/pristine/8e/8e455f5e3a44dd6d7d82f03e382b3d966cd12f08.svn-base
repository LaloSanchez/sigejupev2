<?php
include_once(dirname(__FILE__) . "/../actuaciones/ActuacionesController.Class.php");

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/AutosvinculacionController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
/**
* Clase para los Autos de Vinculacion
*/
class AutovinculacionController extends ActuacionesController
{
	
	function __construct()
	{
	}

    public function obtenerAuto_AutoVinculacion($ActuacionesDto) {
        $fechaRegistro = '';
        $medidasAplicadas = array();
        $imputadosIds = array();
        $imputadosPrevios = array();
        $tmpNumero = $ActuacionesDto->getNumero();
        $tmpAnio = $ActuacionesDto->getAnio();
        $tmpCveTipoCarpeta = $ActuacionesDto->getCveTipoCarpeta();
        $tmpCveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtencion del Id de Referencia de acuerdo a la carpeta seleccionada
        $idReferencia = $this->tipoCarpeta($ActuacionesDto);
        if ($idReferencia > 0) { //si existe el registro con los datos proporcionados
            //buscar que no exista duplicidad en los datos en -tblactuaciones-
            $ActuacionesDTO = new ActuacionesDTO();
            $ActuacionesDAO = new ActuacionesDAO();
            $ActuacionesDTO->setIdReferencia($idReferencia);
            $ActuacionesDTO->setCveTipoActuacion('5');
            $ActuacionesDTO->setNumero($tmpNumero);
            $ActuacionesDTO->setAnio($tmpAnio);
            $ActuacionesDTO->setCveTipoCarpeta($tmpCveTipoCarpeta);
            $ActuacionesDTO->setCveJuzgado($tmpCveJuzgado);
            $ActuacionesDTO->setActivo('S');
            $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, '', ' AND numActuacion<>0 AND aniActuacion<>0 ');
            error_log('[INFO] consulta actuaciones: $ActuacionesDTO: '.print_r($ActuacionesDTO,true));
            if ($ActuacionesDTO == '') { //obtiene los datos del auto
                //obtencion de los imputados desde -tblimputadoscarpetas-
                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                $imputados = '';
                $nombre = '';
                if ($ImputadosCarpetasDTO != '') { //SI hay imputados relacionados
                    foreach ($ImputadosCarpetasDTO as $Imputadoscarpetas) {
                        if ($Imputadoscarpetas->getCveTipoPersona() == 1) { //persona fisica
                            $nombre = utf8_encode($Imputadoscarpetas->getPaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getMaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getNombre());
                        } else {
                            $nombre = utf8_encode($Imputadoscarpetas->getNombreMoral());
                        }
                        $imputados[] = array('idImputadoCarpeta' => $Imputadoscarpetas->getIdImputadoCarpeta(), 'nombre' => $nombre);
                    }
                    $datos = array('numero' => $tmpNumero,
                        'anio' => $tmpAnio,
                        'cveTipoCarpeta' => $tmpCveTipoCarpeta,
                        'cveJuzgado' => $tmpCveJuzgado,
                        'idReferencia' => $idReferencia,
                        'imputados' => $imputados
                    );
                    $salida = array('status' => 'OK', 'totalCount' => count($ImputadosCarpetasDTO), 'data' => $datos);
                } else {//no hay imputados
                    $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE.');
                }
            } else { //ya existe un registro previo, se ubicaran los datos previos
        		$imputadosPrevios = array();
            	foreach ($ActuacionesDTO as $actuacion) {
	            	$idActuacion = $actuacion->getIdActuacion();
	            	$SelectDAO = new SelectDAO();
			        $params["fields"] = "IC.idImputadoCarpeta, A.fechaRegistro";
			        $params["tables"] = "tblactuaciones A
						INNER JOIN tblautosimputados AI ON (AI.idActuacion=A.idActuacion AND AI.activo='S')
						INNER JOIN tblimputadoscarpetas IC ON (IC.idImputadoCarpeta=AI.idImputadoCarpeta)";
			        $params["conditions"] = "AI.idActuacion=" . $idActuacion;
			        $imputados = json_decode($SelectDAO->selectDAO($params));
	            	foreach ($imputados->resultados as $imputado) {
	            		$imputadosPrevios[] = array('idImputado'=>$imputado->idImputadoCarpeta, 'fechaRegistro'=>$this->formatoFecha($imputado->fechaRegistro, 'fechaHora', 'pjem', 'fechaHora') );
	            	}
	            	error_log('[INFO] $imputadosPrevios: '.print_r($imputadosPrevios,true));
            	}
                //obtencion de los imputados desde -tblimputadoscarpetas-
                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                $imputados = '';
                $nombre = '';
                if ($ImputadosCarpetasDTO != '') { //SI hay imputados relacionados
                    foreach ($ImputadosCarpetasDTO as $Imputadoscarpetas) {
                        if ($Imputadoscarpetas->getCveTipoPersona() == 1) { //persona fisica
                            $nombre = utf8_encode($Imputadoscarpetas->getPaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getMaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getNombre());
                        } else {
                            $nombre = utf8_encode($Imputadoscarpetas->getNombreMoral());
                        }
                        $imputados[] = array('idImputadoCarpeta' => $Imputadoscarpetas->getIdImputadoCarpeta(), 'nombre' => $nombre);
                    }
                    $datos = array('numero' => $tmpNumero,
                        'anio' => $tmpAnio,
                        'cveTipoCarpeta' => $tmpCveTipoCarpeta,
                        'cveJuzgado' => $tmpCveJuzgado,
                        'idReferencia' => $idReferencia,
                        'imputados' => $imputados,
                        'imputadosPrevios' => $imputadosPrevios
                    );
                    $salida = array('status' => 'OK', 'totalCount' => count($ImputadosCarpetasDTO), 'data' => $datos);
                } else {//no hay imputados
                    $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE.');
                }
            }
        } else { //no existe relacion
            $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'LOS DATOS DE RELACION NO EXISTEN, VERIFIQUE.');
        }
        return json_encode($salida);
    }

    public function buscarAutos($ActuacionesDto, $param) {
        //obtiene los datos de la actuacion
        $proveedor = null;
        $json = '';
        $imputadosPrevios = array();
        //obtencion de las actuaciones. obtiene 1 solo registro
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto->setCveJuzgado(explode('/', $ActuacionesDto->getCveJuzgado())[0]);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, '', $param);
        $totalRows = count($ActuacionesDto);
        $counter = 0;
        $content = false;
        //recorre los registros en busca de certificaciones
        if ($ActuacionesDto != '') {
            error_log('**************contiene actuacion');
            foreach ($ActuacionesDto as $Actuaciones) {
		        $imputadosPrevios = array();
                //obtencion de los imputados desde -imputados carpetas-
                $ImputadosCarpetasDTO = new ImputadosCarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadosCarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($Actuaciones->getIdReferencia());
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO, '', $proveedor);
                $imputados = '';
                $nombre = '';
                if ($ImputadosCarpetasDTO != '') {
                    error_log('**************contiene imputados carpetas');
                    foreach ($ImputadosCarpetasDTO as $ImputadoCarpeta) {
                        if ($ImputadoCarpeta->getCveTipoPersona() == 1) { //es persona fisica
                            error_log('************** es fisica');
                            $nombre = utf8_encode($ImputadoCarpeta->getPaterno()) . ' ' . utf8_encode($ImputadoCarpeta->getMaterno()) . ' ' . utf8_encode($ImputadoCarpeta->getNombre());
                        } else { //es persona moral u otra
                            error_log('************** es moral');
                            $nombre = utf8_encode($ImputadoCarpeta->getNombreMoral());
                        }
                        $imputados[] = array('idImputado' => $ImputadoCarpeta->getIdImputadoCarpeta(), 'nombre' => $nombre);
                    }
                }

                //obtencion de los imputados previos
            	$idActuacion = $Actuaciones->getIdActuacion();
            	$SelectDAO = new SelectDAO();
		        $params["fields"] = "IC.idImputadoCarpeta, A2.fechaRegistro";
		        $params["tables"] = "tblactuaciones A
					INNER JOIN tblactuaciones A2 ON (A2.cveTipoActuacion=A.cveTipoActuacion AND A2.numero=A.numero AND A2.anio=A.anio AND A2.cveJuzgado=A.cveJuzgado AND A2.activo='S' AND A2.idActuacion!=A.idActuacion)
					INNER JOIN tblautosimputados AI ON (AI.idActuacion=A2.idActuacion and AI.activo='S')
					INNER JOIN tblimputadoscarpetas IC ON (IC.idImputadoCarpeta=AI.idImputadoCarpeta AND IC.activo='S')";
		        $params["conditions"] = "A.idActuacion=" . $idActuacion;
		        $imputadosPrev = json_decode($SelectDAO->selectDAO($params));
		        error_log('[INFO] $idActuacion: '.$idActuacion);
		        error_log('[INFO] $imputadosPrev: '.print_r($imputadosPrev, true));
		        error_log('[INFO] $imputadosPrevios: '.print_r($imputadosPrevios,true));
                if( $imputadosPrev->totalCount > '0'){
                	foreach ($imputadosPrev->resultados as $imputado) {
                		$imputadosPrevios[] = array('idImputado'=>$imputado->idImputadoCarpeta, 'fechaRegistro'=>$this->formatoFecha($imputado->fechaRegistro, 'fechaHora', 'pjem', 'fechaHora') );
                	}
                }
		        error_log('[INFO] $imputadosPrevios2: '.print_r($imputadosPrevios,true));


                //El ID de actuaciOn de cada registro se valida en la tabla -tblautosimputados-
                $idActuacion = $Actuaciones->getIdActuacion();
                $AutosimputadosDto = new AutosimputadosDTO();
                $AutosimputadosDao = new AutosimputadosDAO();
                $AutosimputadosDto->setIdActuacion($idActuacion);
                $AutosimputadosDto->setActivo('S');
                $AutosimputadosDto = $AutosimputadosDao->selectAutosimputados($AutosimputadosDto, $proveedor);
                //si la consulta de -tblautosimputados- trae informaciOn y la fecha de registro esta dentro de los parametros asignados
                if ($AutosimputadosDto != '') {
                    error_log('************** tiene imputados asignados');
                    //obtiene la descripcion del TipoCarpeta
                    $TipoCarpetaDTO = new TiposcarpetasDTO();
                    $TipoCarpetaDAO = new TiposcarpetasDAO();
                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
                    if ($TipoCarpetaDTO != '') {
                        error_log('**************obtiene los tipos de carpetas');
                        $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();
                        $content = true;
                    }
                    //validacion de vinculaciOn con la tabla -tblautosimputados-
                    $jsonImp = '';
                    if ($AutosimputadosDto != '') {
                        foreach ($AutosimputadosDto as $AutoImputado) {
                            $taa_idAutoApelado = 0;
                            $taa_idAutoImputado = 0;
                            $taa_cveSentido = 0;
                            $taa_numToca = '';
                            $taa_numAnio = '';
                            $taa_cveSala = 0;
                            $taa_fechaRegistro = '';
                            $taa_fechaActualizacion = '';
                            if ($AutoImputado->getApelacion() == 'S') {
                                //obtiene los datos de la apelacion en -tblautosapelados-
                                $AutosapeladosDTO = new AutosapeladosDTO();
                                $AutosapeladosDAO = new AutosapeladosDAO();
                                //asigan el Id del -AutoImputado-
                                $AutosapeladosDTO->setIdAutoImputado($AutoImputado->getIdAutoImputado());
                                //busca el la tabla 
                                $AutosapeladosDTO = $AutosapeladosDAO->selectAutosapelados($AutosapeladosDTO);
                                if ($AutosapeladosDTO != '') {
                                    error_log('************** obtiene las apelaciones');
                                    $taa_idAutoApelado = $AutosapeladosDTO[0]->getIdAutoApelado();
                                    $taa_idAutoImputado = $AutosapeladosDTO[0]->getIdAutoImputado();
                                    $taa_cveSentido = $AutosapeladosDTO[0]->getCveSentido();
                                    $taa_numToca = $AutosapeladosDTO[0]->getNumToca();
                                    $taa_numAnio = $AutosapeladosDTO[0]->getAnioToca();
                                    $taa_cveSala = $AutosapeladosDTO[0]->getCveSala();
                                    $taa_fechaRegistro = $AutosapeladosDTO[0]->getFechaRegistro();
                                    $taa_fechaActualizacion = $AutosapeladosDTO[0]->getFechaActualizacion();
                                    //                    echo $taa_fechaActualizacion;
                                }
                            }
                            $apelacion = array('idAutoApelado' => $taa_idAutoApelado,
                                'idAutoImputado' => $taa_idAutoImputado,
                                'cveSentido' => $taa_cveSentido,
                                'numToca' => $taa_numToca,
                                'numAnio' => $taa_numAnio,
                                'cveSala' => $taa_cveSala,
                                'fechaRegistro' => $taa_fechaRegistro,
                                'fechaActualizacion' => $taa_fechaActualizacion);

                            $imputadosInfo[] = array('idAutosImputados' => $AutoImputado->getIdAutoImputado(),
                                'idActuacion' => $AutoImputado->getIdActuacion(),
                                'idImputadoCarpeta' => $AutoImputado->getIdImputadoCarpeta(),
                                'Apelacion' => $AutoImputado->getApelacion(),
                                'autosapelados' => $apelacion);
                        }
                    }
                    //generacion del nuevo JSON con datos cruzados
                    $actuacion[] = array('idActuacion' => $Actuaciones->getIdActuacion(),
                        'numActuacion' => $Actuaciones->getNumActuacion(),
                        'aniActuacion' => $Actuaciones->getAniActuacion(),
                        'cveTipoActuacion' => $Actuaciones->getCveTipoActuacion(),
                        'idReferencia' => $Actuaciones->getIdReferencia(),
                        'numero' => $Actuaciones->getNumero(),
                        'anio' => $Actuaciones->getAnio(),
                        'cveTipocarpeta' => $Actuaciones->getCveTipocarpeta(),
                        'cveJuzgado' => $Actuaciones->getCveJuzgado(),
                        'sintesis' => $Actuaciones->getSintesis(),
                        'observaciones' => $Actuaciones->getObservaciones(),
                        'cveUsuario' => $Actuaciones->getCveUsuario(),
                        'activo' => $Actuaciones->getActivo(),
                        'fechaRegistro' => $Actuaciones->getFechaRegistro(),
                        'fechaActualizacion' => $Actuaciones->getFechaActualizacion(),
                        'cveTipoNotificacion' => $Actuaciones->getCveTipoNotificacion(),
                        'cveTipoAuto' => $Actuaciones->getCveTipoAuto(),
                        'descTipoCarpeta' => $descTipoCarpeta,
                        'imputados' => $imputados,
                        'imputadosPrevios' => $imputadosPrevios,
                        'cveEstatus' => $this->consultaEstatusActuacion($Actuaciones->getIdActuacion()),
                        'autosimputados' => $imputadosInfo);
                    $counter++;
                }
            }
        }
        if ($content) {
            $jsonData = json_encode($actuacion);
            $json = '{"status":"OK","totalCount":"' . $counter . '","data":' . $jsonData . '}';
        } else {
            $json = '{"status":"ERROR","totalCount":"0","data":[{}]}';
        }
        return $json;
    }

    public function consultaEstatusActuacion($idActuacion){
        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();
        $actEstatusDTO->setIdActuacion($idActuacion);
        $actEstatusDTO->setActivo("S");
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
        if($actEstatusDTO != ""){
            return $actEstatusDTO[0]->getCveEstatus();
        }else{
            return 0;
        }
    }


}
