<?php

/**
 * Class: ConsultaexternaFacade - ConsultaexternaFacade.Class.php 
 *
 * @author Esaud Israel <@e_israel> on Feb 16, 2016 6:44:19 PM
 * @version 1.0
 */
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/documentosimg/DocumentosimgController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/ImagenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposactuaciones/TiposactuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/exhortos/ExhortosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/amparos/AmparosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposresoluciones/TiposresolucionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/antecedesactuaciones/AntecedesactuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesestatus/ActuacionesestatusController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
ini_set("error_log", dirname(__FILE__) . "/ConsultaExternaServidor.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

class ConsultaExternaServidor {

    public function __construct() {

    }

    /**
     * busca si tiene carpetas la persona logueada, si tiene devuelve los juzgados y carpetas de cada uno
     * @param int $IdPersonaautorizada id de la sesi�n
     * @return json => si hay carpetas -> carpetas judiciales de la persona; otro caso => error
     */
    public function getCarpetasJudicialesPorPersona($IdPersonaautorizada,$cveRegion) {
        $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
        $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada($IdPersonaautorizada);
        $RelacionexpedientejuzgadoDto->setActivo('S');
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = NULL);
        if ($RelacionexpedientejuzgadoDto != NULL) {
            $juzgados = array();
            #recorre para obtener juzgados, agrupa carpetas por juzgado
            foreach ($RelacionexpedientejuzgadoDto as $j) {
                $carpeta = json_decode($this->getDetalleCarpeta(1, $j->getIdCarpetajudicial(), $j->getCveTipoCarpeta())); # convierte json to array()
                $carpeta = $carpeta->carpeta; # quita propiedades como count o estatus
                if (!in_array($carpeta->cveJuzgado, $juzgados)) {
                    # guarda nombre del juzgado
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($carpeta->cveJuzgado);
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, '', $proveedor = NULL);
                    if($cveRegion == $juzgadosDto[0]->getCveRegion() && $cveRegion != 0 && $cveRegion != "0"){
                        # guarda Id de Juzgado
                        $juzgados[$carpeta->cveJuzgado]['cveJuzgado'] = $carpeta->cveJuzgado;
                        $juzgados[$carpeta->cveJuzgado]['desJuzgado'] = $juzgadosDto[0]->getDesJuzgado();
                        # recorre para obtener carpetas del juzgado
                        $tmp = array(); # para ir guardando las carpetas y no se dupliquen
                        foreach ($RelacionexpedientejuzgadoDto as $c) {
                            $car = json_decode($this->getDetalleCarpeta(1, $c->getIdCarpetajudicial(), $c->getCveTipoCarpeta()));
                            $car = $car->carpeta; # quita propiedades como count o estatus
                            # verifica que la carpeta pertenezca al juzgado
                            if ($car->cveJuzgado == $carpeta->cveJuzgado) {
                                if (!in_array($carpeta->idCarpetaJudicial, $tmp))
                                    $juzgados[$carpeta->cveJuzgado]['expedientes'][] = $carpeta;
                                $tmp[] = $carpeta->idCarpetaJudicial;
                            }
                        }
                    } else if($cveRegion == 0 || $cveRegion == "0"){
                        # guarda Id de Juzgado
                        $juzgados[$carpeta->cveJuzgado]['cveJuzgado'] = $carpeta->cveJuzgado;
                        $juzgados[$carpeta->cveJuzgado]['desJuzgado'] = $juzgadosDto[0]->getDesJuzgado();
                        # recorre para obtener carpetas del juzgado
                        $tmp = array(); # para ir guardando las carpetas y no se dupliquen
                        foreach ($RelacionexpedientejuzgadoDto as $c) {
                            $car = json_decode($this->getDetalleCarpeta(1, $c->getIdCarpetajudicial(), $c->getCveTipoCarpeta()));
                            $car = $car->carpeta; # quita propiedades como count o estatus
                            # verifica que la carpeta pertenezca al juzgado
                            if ($car->cveJuzgado == $carpeta->cveJuzgado) {
                                if (!in_array($carpeta->idCarpetaJudicial, $tmp))
                                    $juzgados[$carpeta->cveJuzgado]['expedientes'][] = $carpeta;
                                $tmp[] = $carpeta->idCarpetaJudicial;
                            }
                        }
                    }
                }
            }

            # reorden de �ndices del arreglo
            $i = 0;
            foreach ($juzgados as $j) {
                $juzgados[$i++] = $juzgados[$j['cveJuzgado']];
                unset($juzgados[$j['cveJuzgado']]);
            }
            return json_encode(array('estatus' => 'ok', 'resultados' => $juzgados));
        } else {
            return utf8_encode(json_encode(array(
                'estatus' => 'FAIL',
                'totalCount' => 0,
                'resultados' => NULL,
                'text' => 'Consulta por IdPersonaautorizada: ' . $IdPersonaautorizada,
                'mnj' => 'La persona autorizada no tiene registros.'
            )));
        }
    }

# cierra getCarpetasJudicialesPorPersona

    /**
     * @param type $actuacionesDTO DTO de Actuaciones
     */
    public function llenaPadresActuaciones($actuacionesDTO) {
        $padresActuaciones = array();
        $len = count($actuacionesDTO);
        array_push($padresActuaciones, '#'); //Llena padre vacio, lo cual indica que su padre es la carpeta judicial
        for ($i = 0; $i < $len; $i++) {
            array_push($padresActuaciones, $actuacionesDTO[$i]->getIdActuacion());
        }
        return $padresActuaciones;
    }

    /**
     * @param type int $idActuacion 
     */
    public function muestraEstatusAcuerdo($idActuacion) {
        error_log($idActuacion);
        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();
        $actEstatusDTO->setIdActuacion($idActuacion);
        $actEstatusDTO->setActivo("S");
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
        error_log(print_r($actEstatusDTO));
        if (count($actEstatusDTO) > 0 && $actEstatusDTO != "") {
            $cveEstatus = $actEstatusDTO[0]->getCveEstatus();
        } else {
            $cveEstatus = "";
        }
        return $cveEstatus;
    }

    /**
     * @param type $tipo n:Carpeta judicial, 7:exhorto, 8:actuacion
     * @param type $IdCarpetajudicial
     * 
     * @return JSON => de actuaciones relacionadas a carpeta -> carpeta judicial solicitada; otro caso => error
     * Ojo con nombres de variables, el filtro por tipo se solicit� despu�s de programar el m�dulo 1
     */
    public function getActuaciones($tipo, $IdCarpetajudicial, $quees = null) {
        
        #echo $tipo.' '.$IdCarpetajudicial.' '.$quees;
        $CarpetasjudicialesDto = NULL;
        if ($tipo == 8) {
            $AmparosDto = new AmparosDTO();
            $AmparosDto->setIdAmparo($IdCarpetajudicial);
            $AmparosDto->setId($IdCarpetajudicial);
            $AmparosController = new AmparosController();
            $CarpetasjudicialesDto = $AmparosController->selectAmparos($AmparosDto, $proveedor = NULL);
        } elseif ($tipo == 7) {
            $ExhortosDto = new ExhortosDTO();
            $ExhortosDto->setIdExhorto($IdCarpetajudicial);
            $ExhortosController = new ExhortosController();
            $CarpetasjudicialesDto = $ExhortosController->selectExhortos($ExhortosDto, NULL, $proveedor = NULL);
        } else {
            # busca carpeta judicial
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDto->setIdCarpetaJudicial($IdCarpetajudicial);
            $CarpetasjudicialesDto->setActivo('S');
            $CarpetasjudicialesController = new CarpetasjudicialesController();
            $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = NULL);
        }

        if ($CarpetasjudicialesDto != NULL) {
            if ($tipo == 7) { # exhorto
                $numero = $CarpetasjudicialesDto['data'][0]['numExhorto'];
                $anio = $CarpetasjudicialesDto['data'][0]['aniExhorto'];
                $cveTipoCarpeta = $CarpetasjudicialesDto['data'][0]['cveTipoCarpeta'];
                $cveJuzgado = $CarpetasjudicialesDto['data'][0]['cveJuzgado'];
            } elseif ($tipo == 8) { # amparo
                $numero = $CarpetasjudicialesDto['data'][0]['numAmparo'];
                $anio = $CarpetasjudicialesDto['data'][0]['aniAmparo'];
                $cveTipoCarpeta = $CarpetasjudicialesDto['data'][0]['cveTipoAmparo'];
                $cveJuzgado = $CarpetasjudicialesDto['data'][0]['cveJuzgado'];
            } else {
                $numero = $CarpetasjudicialesDto[0]->getNumero();
                $anio = $CarpetasjudicialesDto[0]->getAnio();
                $cveTipoCarpeta = $CarpetasjudicialesDto[0]->getCveTipoCarpeta();
                $cveJuzgado = $CarpetasjudicialesDto[0]->getCveJuzgado();
            }
            
            $ActuacionesDto = new ActuacionesDTO();
            $ActuacionesDto->setIdReferencia($IdCarpetajudicial);
            $ActuacionesDto->setNumero($numero);
            $ActuacionesDto->setAnio($anio);
            $ActuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
            $ActuacionesDto->setCveJuzgado($cveJuzgado);
            $ActuacionesDto->setActivo('S');
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectActuaciones($ActuacionesDto, $proveedor = NULL,'ORDER BY fechaRegistro DESC');

            $actuaciones = array(); # arreglo que se devuelve
            $i = 0;
            if ($ActuacionesDto != '') {
                $padresActuaciones = $this->llenaPadresActuaciones($ActuacionesDto);
            foreach ($ActuacionesDto as $a) {
                    $cveEstatus = '';
                    $cveEstatus = $this->muestraEstatusAcuerdo($a->getIdActuacion());
                    $idActuacionHija = $a->getIdActuacion();
                $actuaciones[$i] = array();
                    /* Obtiene los antecedes de actuaciones */
                    $AntecedesActuacionesDto = new AntecedesactuacionesDTO();
                    $AntecedesActuacionesDto->setIdActuacionHija($idActuacionHija);
                    $AntecedesActuacionesDto->setActivo('S');
                    $AntecedesActuacionesController = new AntecedesactuacionesController();
                    $AntecedesActuacionesDto = $AntecedesActuacionesController->selectAntecedesactuaciones($AntecedesActuacionesDto, $proveedor = NULL);
                    if ($AntecedesActuacionesDto != '') {
                        $idActuacionPadre = $AntecedesActuacionesDto[0]->getIdActuacionPadre();
                    } else {
                        $idActuacionPadre = '#';
                    }
                    if (($cveEstatus !== 1 || $cveEstatus !== 2) && in_array($idActuacionPadre, $padresActuaciones)) {//Obtiene todas las actuaciones excepto los acuerdos NO PUBLICADOS
                $actuaciones[$i]['idActuacion'] = $a->getIdActuacion();
                $actuaciones[$i]['numero'] = $a->getNumActuacion();
                $actuaciones[$i]['anio'] = $a->getAniActuacion();
                $actuaciones[$i]['noFojas'] = $a->getNoFojas();
                        $tiposresolucionesDto = new TiposresolucionesDTO();
                        $tiposresolucionesDto->setCveTipoResolucion($a->getCveTipoResolucion());
                        $tiposresolucionesDto->setActivo('S');
                        $tiposresolucionesController = new TiposresolucionesController();
                        $tiposresolucionesDto = $tiposresolucionesController->selectTiposresoluciones($tiposresolucionesDto, $proveedor = null);
                        if($tiposresolucionesDto!="" && $a->getCveTipoActuacion()==2){//Si es un acuerdo mostrar en el arbol la descripcion de la resolucion
                            $actuaciones[$i]["descArbol"] = $tiposresolucionesDto[0]->getDesTipoResolucion();
                        } else{
                            $actuaciones[$i]["descArbol"] = $a->getSintesis();
                        }
                $actuaciones[$i]['Sintesis'] = $a->getSintesis();
                $actuaciones[$i]['fechaRegistro'] = $a->getFechaRegistro();
                #obtiene detalle tipo carpeta
                $tiposactuacionesDto = new TiposactuacionesDTO();
                $tiposactuacionesDto->setCveTipoActuacion($a->getCveTipoActuacion());
                $tiposactuacionesController = new TiposactuacionesController();
                $tiposactuacionesDto = $tiposactuacionesController->selectTiposactuaciones($tiposactuacionesDto, $proveedor = NULL);
                $actuaciones[$i]['tipoCarpeta'] = $tiposactuacionesDto[0]->getDesTipoActuacion();
                        $actuaciones[$i]['cveEstatus'] = $cveEstatus;
                        if ($AntecedesActuacionesDto != "") {
                            $actuaciones[$i]['idActuacionPadre'] = $AntecedesActuacionesDto[0]->getIdActuacionPadre();
                            $actuaciones[$i]['idActuacioHija'] = $AntecedesActuacionesDto[0]->getIdActuacionHija();
                        } else {
                            $actuaciones[$i]['idActuacionPadre'] = "";
                            $actuaciones[$i]['idActuacionHija'] = "";
                        }
                    }
                $i++;
            }
            }
            return ($actuaciones != NULL) ? utf8_encode(json_encode(array('status' => 'ok', 'total' => count($actuaciones), 'data' => $actuaciones))) : utf8_encode(json_encode(
                    array(
                        'status' => 'FAIL',
                        'total' => 0,
                        'text' => 'Consulta actuaciones: ' . $IdCarpetajudicial,
                        'mnj' => 'No se encontraron registros de cactuaciones.')
            ));
        } else {
            return utf8_encode(json_encode(
                            array(
                                'status' => 'FAIL',
                                'total' => 0,
                                'text' => 'Consulta actuaciones de carpeta judicial: ' . $IdCarpetajudicial,
                                'mnj' => 'No se encontraron registros de actuaciones.')
            ));
        }
    }

# cierra getCarpetaJudicial

    /**
     * devuelve el detalle de la carpeta
     * @param string $tipo 1:carpeta judicial, 2:actuacion, 7:exhorto, 8:amparo
     * @param int $id de la carpeta a buscar
     * 
     * @return JSON con detalle de la carpeta
     */
    public function getDetalleCarpeta($tipo, $id, $quees = null) {
        if ($tipo != 2) { # no es actuacion
            if ($quees == 7) {# es Exhorto
                $ExhortosDto = new ExhortosDTO();
                $ExhortosDto->setIdExhorto($id);
                $ExhortosController = new ExhortosController();
                $ExhortosDto = $ExhortosController->selectExhortos($ExhortosDto, array(), $proveedor = NULL);
                if ($ExhortosDto != NULL) {
                    # arma arreglo personalizado
                    $carpeta['idCarpetaJudicial'] = $ExhortosDto['data'][0]['idExhorto'];
                    $carpeta['numero'] = $ExhortosDto['data'][0]['numExhorto'];
                    $carpeta['anio'] = $ExhortosDto['data'][0]['aniExhorto'];
                    $carpeta['cveTipoNumero'] = 0;/** @todo verificar Quetza */
                    $carpeta['nvaInstancia'] = 0;/** @todo verificar Quetza */
                    $carpeta['cveJuzgado'] = $ExhortosDto['data'][0]['cveJuzgado'];
                    $carpeta['cveMateria'] = 0;/** @todo verificar Quetza */
                    $carpeta['cveOficialia'] = 0;/** @todo verificar Quetza */
                    $carpeta['fechaRegistro'] = $ExhortosDto['data'][0]['fechaRegistro'];
                    $carpeta['fechaRadicacion'] = $ExhortosDto['data'][0]['fechaRadicacion'];
                    $carpeta['carpetaInv'] = 0;/** @todo verificar Quetza */
                    $carpeta['observaciones'] = utf8_encode($ExhortosDto['data'][0]['observaciones']);
//                    $carpeta['cveTipoCarpeta'] = $ExhortosDto['data'][0]['cveTipoCarpeta'];
                    $carpeta['cveTipoCarpeta'] = 7;
                    $carpeta['tipoCarpeta'] = 'Exhorto';
                    $carpeta['queEs'] = 7;

                    return json_encode(array('status' => 'ok', 'carpeta' => $carpeta));
                } else {
                    return utf8_encode(json_encode(
                        array(
                            'status' => 'FAIL',
                            'totalCount' => 0,
                            'text' => 'Consulta detalle Carpeta Judicial: ' . $id,
                            'mnj' => 'No se encontraron registros de carpetas judiciales.')
                    ));
                }
            } elseif ($quees == 8) {# es amparo
                $AmparosDto = new AmparosDTO();
                $AmparosDto->setIdAmparo($id);
                $AmparosController = new AmparosController();
                $AmparosDto = $AmparosController->selectAmparos($AmparosDto, NULL, NULL);
                
                if ($AmparosDto != NULL) {
                    # arma arreglo personalizado
                    $carpeta['idCarpetaJudicial'] = $AmparosDto['datos'][0]['idAmparo'];
                    $carpeta['numero'] = $AmparosDto['datos'][0]['numeroAmparo'];
                    $carpeta['anio'] = $AmparosDto['datos'][0]['anioAmparo'];
                    $carpeta['cveTipoNumero'] = 0;/** @todo verificar Quetza */
                    $carpeta['nvaInstancia'] = 0;/** @todo verificar Quetza */
                    $carpeta['cveJuzgado'] = $AmparosDto['datos'][0]['cveJuzgado'];
                    $carpeta['cveMateria'] = 0;/** @todo verificar Quetza */
                    $carpeta['cveOficialia'] = 0;/** @todo verificar Quetza */
                    $carpeta['fechaRegistro'] = $AmparosDto['datos'][0]['fechaRegistro'];
                    $carpeta['carpetaInv'] = 0;/** @todo verificar Quetza */
                    $carpeta['observaciones'] = utf8_encode($AmparosDto['datos'][0]['observaciones']);
//                    $carpeta['cveTipoCarpeta'] = $AmparosDto['datos'][0]['cveTipoCarpeta'];
                    $carpeta['cveTipoCarpeta'] = 8;
                    $carpeta['tipoCarpeta'] = 'Amparo';
                    $carpeta['queEs'] = 8;
                    
                    return json_encode(array('status' => 'ok', 'carpeta' => $carpeta));
                } else {
                    return utf8_encode(json_encode(
                        array(
                            'status' => 'FAIL',
                            'totalCount' => 0,
                            'text' => 'Consulta detalle Carpeta Judicial: ' . $id,
                            'mnj' => 'No se encontraron registros de carpetas judiciales.')
                    ));
                }
            } else { # si es carpeta judicial
                $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                $CarpetasjudicialesDto->setIdCarpetaJudicial($id);
                $CarpetasjudicialesDto->setActivo('S');
                $CarpetasjudicialesController = new CarpetasjudicialesController();
                $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = NULL);
                
                if ($CarpetasjudicialesDto != NULL) {
                    #obtiene detalle tipo carpeta
                    $tiposcarpetasDto = new TiposcarpetasDTO();
                    $tiposcarpetasDto->setCveTipoCarpeta($CarpetasjudicialesDto[0]->getCveTipoCarpeta());
                    $tiposCarpetasController = new TiposcarpetasController();
                    $tiposcarpetasDto = $tiposCarpetasController->selectTiposCarpetasActivadas($tiposcarpetasDto, $proveedor = NULL);

                    # arma arreglo personalizado
                    $carpeta['idCarpetaJudicial'] = $CarpetasjudicialesDto[0]->getIdCarpetaJudicial();
                    $carpeta['numero'] = $CarpetasjudicialesDto[0]->getNumero();
                    $carpeta['anio'] = $CarpetasjudicialesDto[0]->getAnio();
                    $carpeta['cveTipoNumero'] = $CarpetasjudicialesDto[0]->getCveTipoCarpeta();
                    $carpeta['nvaInstancia'] = 1;/** @todo verificar con Quetza */
                    $carpeta['cveJuzgado'] = $CarpetasjudicialesDto[0]->getCveJuzgado();
                    $carpeta['cveMateria'] = 3;/** @todo verificar con Quetza, 3 es Juzgado */
                    $carpeta['cveOficialia'] = 0;/** @todo verificar con Quetza */
                    $carpeta['fechaRegistro'] = $CarpetasjudicialesDto[0]->getFechaRegistro();
                    $carpeta['fechaRadicacion'] = $CarpetasjudicialesDto[0]->getFechaRadicacion();
                    $carpeta['carpetaInv'] = $CarpetasjudicialesDto[0]->getCarpetaInv();
                    $carpeta['observaciones'] = utf8_encode($CarpetasjudicialesDto[0]->getObservaciones());
                    $carpeta['cveTipoCarpeta'] = $CarpetasjudicialesDto[0]->getCveTipoCarpeta();
                    $carpeta['tipoCarpeta'] = $tiposcarpetasDto['datos'][0]['Descripcion'];
                    $carpeta['queEs'] = $CarpetasjudicialesDto[0]->getCveTipoCarpeta();
                    return utf8_encode(json_encode(array('status' => 'ok', 'carpeta' => $carpeta)));
                } else {
                    return utf8_encode(json_encode(
                        array(
                            'status' => 'FAIL',
                            'totalCount' => 0,
                            'text' => 'Consulta detalle Carpeta Judicial: ' . $id,
                            'mnj' => 'No se encontraron registros de carpetas judiciales.')
                    ));
                }
            }
        } else {  #es actuacion
            $ActuacionesDto = new ActuacionesDTO();
            $ActuacionesDto->setIdActuacion($id);
            $ActuacionesDto->setActivo('S');
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectActuaciones($ActuacionesDto, $proveedor = NULL);
            if ($ActuacionesDto != NULL) {
                $carpeta = array(); # la que se devuelve
                #obtiene detalle tipo actuaci�n
                $tiposactuacionesDto = new TiposactuacionesDTO();
                $tiposactuacionesDto->setCveTipoActuacion($ActuacionesDto[0]->getCveTipoActuacion());
                $tiposactuacionesController = new TiposactuacionesController();
                $tiposactuacionesDto = $tiposactuacionesController->selectTiposactuaciones($tiposactuacionesDto, $proveedor = NULL);

                # arma arreglo personalizado
                $carpeta['idActuacion'] = $ActuacionesDto[0]->getIdActuacion();
                $carpeta['numActuacion'] = $ActuacionesDto[0]->getNumActuacion();
                $carpeta['anioActuacion'] = $ActuacionesDto[0]->getAniActuacion();
                $carpeta['cveTipoActuacion'] = $ActuacionesDto[0]->getCveTipoActuacion();
                $carpeta['tipoActuacion'] = $tiposactuacionesDto[0]->getDesTipoActuacion();
                $carpeta['noFojas'] = $ActuacionesDto[0]->getNoFojas();
                $carpeta['cveJuzgado'] = $ActuacionesDto[0]->getCveJuzgado();
                $carpeta['Sintesis'] = $ActuacionesDto[0]->getSintesis();
                $tiposresolucionesDto = new TiposresolucionesDTO();
                $tiposresolucionesDto->setCveTipoResolucion($ActuacionesDto[0]->getCveTipoResolucion());
                $tiposresolucionesDto->setActivo('S');
                $tiposresolucionesController = new TiposresolucionesController();
                $tiposresolucionesDto = $tiposresolucionesController->selectTiposresoluciones($tiposresolucionesDto, $proveedor = null);
                if($ActuacionesDto[0]->getCveTipoActuacion()== 2){//Si es un acuerdo mostrar en el arbol la descripcion de la resolucion
                    $carpeta['resolucion'] = $tiposresolucionesDto[0]->getDesTipoResolucion();
                } else{
                    $carpeta['resolucion'] = "";
                }
                $carpeta['observaciones'] = utf8_encode($ActuacionesDto[0]->getObservaciones());
                $carpeta['fechaRegistro'] = $ActuacionesDto[0]->getFechaRegistro();
                $carpeta['idReferencia'] = $ActuacionesDto[0]->getIdReferencia();
                $carpeta['queEs'] = 2;
                return json_encode(array('status' => 'ok', 'actuacion' => $carpeta));
            } else {
                return utf8_encode(json_encode(
                    array(
                        'status' => 'FAIL',
                        'totalCount' => 0,
                        'text' => 'Consulta detalle Actuacion ' . $id,
                        'mnj' => 'No se encontraron registros de actuaciones.')
                ));
            }
        }# cierra ifels de tipo 
    }

# cierra getDetalleCarpeta
    /**
     * 
     * @param int $tipo 1:idCarpetaJudicial, 2:idActuacion
     * @param int $id  id de lo que es
     * @quees int n:carpeta judicial, 7:exhorto, 8:amparo
     * 
     * @return objeto documentoImagenes
     * 
     * 
     */

    public static function getDocumentosImagenes($tipo, $id) {
        $DocumentosimgDto = new DocumentosimgDTO();
        $DocumentosimgDto->setActivo('S');
        if ($tipo == 2) {# es actuaci�n
            $DocumentosimgDto->setIdActuacion($id);
            $DocumentosimgDto->setIdCarpetaJudicial(0);
        } else {# es carpeta judicial
            $DocumentosimgDto->setIdCarpetaJudicial($id);
            $DocumentosimgDto->setIdActuacion(0);
        }
        $DocumentosimgController = new DocumentosimgController();
        $DocumentosimgDto = $DocumentosimgController->selectDocumentosimg($DocumentosimgDto, $proveedor = null);

        if ($DocumentosimgDto != NULL)
            return $DocumentosimgDto[0];# regresa el documento que encontr�
        else {
            return FALSE;
        }
    }

# cierra getdocumentosImagenes

    /**
     * 
     * @param int $tipo 1:carpeta judicial, 2:actuaci�n
     * @param int $id id de quees
     * @param int $quees n:carpeta judicial, 7:exhosrto, 8:amparo
     * @return json Detalle de las imagenes del documento
     */
    public function getImagenes($tipo, $id, $quees = null) {
        # se convierte en arreglo para mezclarlo con las imagenes
        $documento = array();
        #$documento['carpeta'] = json_decode($this->getDetalleCarpeta($tipo, $id));
        $documentoImg = $this->getDocumentosImagenes($tipo, $id);
        if ($documentoImg) { # si no trae error
            $idDocumentoImg = $documentoImg->getIdDocumentoImg();
            
            $ImagenesDto = new ImagenesDTO();
            $ImagenesDto->setIdDocumentoImg($idDocumentoImg);
            $ImagenesDto->setAdjunto('S');
            $ImagenesDto->setActivo('S');
            $ImagenesController = new ImagenesController();
            $ImagenesDto = $ImagenesController->selectImagenes($ImagenesDto);

            if ($ImagenesDto != NULL) {
                $i = 0;
                foreach ($ImagenesDto as $img) {
                    $documento['imagenes'][$i] = array();
                    $documento['imagenes'][$i]['idImagen'] = $img->getIdImagen();
                    $documento['imagenes'][$i]['idDocumentoImg'] = $idDocumentoImg;
                    $documento['imagenes'][$i]['ruta'] = $img->getRuta();
                    $documento['imagenes'][$i]['posicion'] = $img->getPosicion();
                    $documento['imagenes'][$i]['activo'] = $img->getActivo();
                    $documento['imagenes'][$i]['fechaImagen'] = $img->getFechaImagen();
                    $documento['imagenes'][$i]['fechaActualizacion'] = $img->getFechaActualizacion();
                    $documento['imagenes'][$i]['fechaRegistro'] = $img->getFechaRegistro();
                    $documento['imagenes'][$i]['adjunto'] = $img->getAdjunto();
                    $documento['imagenes'][$i]['fojas'] = $img->getFojas();
                    $carpeta = json_decode($this->getDetalleCarpeta($tipo, $id));
                    if ($tipo == "1") {
                        $documento['imagenes'][$i]['DatosCarpetajudicial'] = $carpeta->carpeta;
                    } else {
                        $carpeta = json_decode($this->getDetalleCarpeta("1", $carpeta->actuacion->idReferencia));
                        $documento['imagenes'][$i]['DatosCarpetajudicial'] = $carpeta->carpeta;
                    }
                    $i++;
                }

                $arr['totalCount'] = count($documento['imagenes']);
                $arr['text'] = '';
                $arr['data'] = $documento['imagenes'];

                $arr['tipoDocumento']['idDocumentoImg'] = $documentoImg->getIdDocumentoImg();
                $arr['tipoDocumento']['cveTipoDocumento'] = $documentoImg->getCveTipoDocumento();
                $arr['tipoDocumento']['idReferencia'] = $id;
                # se obtiene el tipo del documento
                $tiposdocumentosDto = new TiposdocumentosDTO();
                $tiposdocumentosDto->setCveTipoDocumento($documentoImg->getCveTipoDocumento());
                $tiposdocumentosDao = new TiposdocumentosDAO();
                $tiposdocumentosDto = $tiposdocumentosDao->selectTiposdocumentos($tiposdocumentosDto, '', $proveedor = NULL);
                $arr['tipoDocumento']['descTipoDocumento'] = $tiposdocumentosDto[0]->getDescTipoDocumento();
                $arr['tipoDocumento']['extencion'] = $tiposdocumentosDto[0]->getExtencion();
                $arr['tipoDocumento']['cveDocumento'] = $tiposdocumentosDto[0]->getCveTipoDocumento();
                $arr['tipoDocumento']['cveTipoActuacion'] = 0;
                $arr['tipoDocumento']['principal'] = ($tipo == 1) ? 'S' : 'N';
                
                #print_r($arr);
                #exit();
                
                return utf8_encode(json_encode($arr));
            } else {
                return utf8_encode(json_encode(
                    array(
                        #'status' => 'FAIL',
                        'totalCount' => 0,
                        'data' => array('type' => 'Error', 'text' => 'No existen registros de imagenes del documento. ')
                )));
            }
        } else {
            return utf8_encode(json_encode(
                array(
                    #'status' => 'FAIL',
                    'totalCount' => 0,
                    'data' => array('type' => 'Error', 'text' => 'No existen registros del documento.')
            )));
        }
    }
    
# cierra getImagenes

    /**
     * 
     * @param type $tipo puede ser 1 carpeta judicial, 2 actuacion, 7 exhorto, 8 amparo
     * @param type $id ID de lo que es
     * @return type
     */
    public function getListadoPdf($tipo, $id, $quees) {
        # se convierte en arreglo para mezclarlo con las imagenes
        $documento = array();
        $documento['params'] = 'tipo: ' . $tipo . ' id: ' . $id . ' quees: ' . $quees;
        $documento['carpeta'] = json_decode($this->getDetalleCarpeta($tipo, $id, $quees));
        #print_r($documento['carpeta']);
        #exit();
        $documentoImg = $this->getDocumentosImagenes($tipo, $id, $quees);
        if ($documentoImg != NULL) { # si no trae error
            $documento['documentoImg']['idDocumentoImg'] = $documentoImg->getIdDocumentoImg();
            $documento['documentoImg']['cveTipoDocumento'] = $documentoImg->getCveTipoDocumento();
            $documento['documentoImg']['fechaRegistro'] = $documentoImg->getFechaRegistro();
            $tiposdocumentosDto = new TiposdocumentosDTO();
            $tiposdocumentosDto->setCveTipoDocumento($documento['documentoImg']['cveTipoDocumento']);
            $tiposdocumentosDao = new TiposdocumentosDAO();
            $tiposdocumentosDto = $tiposdocumentosDao->selectTiposdocumentos($tiposdocumentosDto, '', $proveedor = NULL);
            $documento['documentoImg']['tipoDocumento'] = $tiposdocumentosDto[0]->getDescTipoDocumento();
            $arr['status'] = 'ok';
            $arr['resultados'] = $documento;
            return utf8_encode(json_encode($arr));
        } else {
            return utf8_encode(json_encode(
                array(
                    'resultados' => array('carpeta' => $documento['carpeta'], 'params' => $documento['params']),
                    'status' => 'FAIL',
                    'totalCount' => 0,
                    'txt' => 'Consulta de de documentoImg: tipo ' . $tipo . '; id: ' . $id,
                    'mnj' => 'No existen registros de del documento.')
            ));
        }
    }
    
    /**
     * 
     * @param type $ruta es una cadena de las rutas de los archivos a descargar
     * @param type $nombreZip es el nombre del zip que se va a descargar
     */
    
    public function descargaImagen($ruta, $nombreZip) {
        //Se crea el ZIP
        $ruta = substr($ruta, 0, -1);
        $ruta = explode(",", $ruta);
        error_log(print_r($ruta,true));
        $zipname = $nombreZip . '.zip';
        $zip = new ZipArchive;
        $zip->open($zipname, ZipArchive::CREATE);
        foreach ($ruta as $ruta) {
            $rutaCompleta = explode("/", $ruta);
            $totalNiveles = count($rutaCompleta);
            $nombre = $rutaCompleta[$totalNiveles-1];
            $zip->addFile($ruta,$nombre);
        }
        $zip->close();
        $zip2 = file_get_contents($zipname);
        $zip64 = base64_encode($zip2);
        //Se elimina el ZIP
        unlink($zipname);
        return $zip64;
    }

# cierra getImagenes
}

# cierra clase

ini_set("soap.wsdl_cache_enabled", 0);
$server = new SoapServer('ConsultaExternaScramble.wsdl');
$server->setClass('ConsultaExternaServidor');
$server->handle();
exit();
# para debug

$ConsultaExternaServidor = new ConsultaExternaServidor();
echo '<pre>';
#print_r($ConsultaExternaServidor->getCarpetasJudicialesPorPersona(2187) );
#print_r($ConsultaExternaServidor->getDetalleCarpeta(1, 411, 8));
print_r($ConsultaExternaServidor->getActuaciones(2, 1999));
#print_r($ConsultaExternaServidor->getImagenes(2, 3430));
print_r($ConsultaExternaServidor->getListadoPdf(1, 411, 8));
echo '</pre>';
?>