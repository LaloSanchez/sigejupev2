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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasdistritos/AudienciasdistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audienciasdistritos/AudienciasdistritosController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autoresaudiencias/AutoresaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autoresaudiencias/AutoresaudienciasController.Class.php");


include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/naturalezas/NaturalezasController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/naturalezas/NaturalezasDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposaudiencias/TiposaudienciasController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/etapasprocesales/EtapasprocesalesController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/distritos/DistritosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios

class CataudienciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCataudiencias($CataudienciasDto) {
        $CataudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcveCatAudiencia()))));
        $CataudienciasDto->setdesCatAudiencia(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getdesCatAudiencia()))));
        $CataudienciasDto->setfechaInicia(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getfechaInicia()))));
        $CataudienciasDto->setfechaVigencia(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getfechaVigencia()))));
        $CataudienciasDto->setcausa(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcausa()))));
        $CataudienciasDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcveEtapaProcesal()))));
        $CataudienciasDto->setcveNaturaleza(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcveNaturaleza()))));
        $CataudienciasDto->setcveTipoAudiencia(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcveTipoAudiencia()))));
        $CataudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getactivo()))));
        $CataudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getfechaRegistro()))));
        $CataudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getfechaActualizacion()))));
        $CataudienciasDto->setcveCodigo(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getcveCodigo()))));
        $CataudienciasDto->setaudienciaInicial(strtoupper(str_ireplace("'", "", trim($CataudienciasDto->getaudienciaInicial()))));
        return $CataudienciasDto;
    }

    public function selectCataudiencias($CataudienciasDto, $proveedor = null) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();
        $CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto, $proveedor);
        return $CataudienciasDto;
    }

    public function consultaraudienciasdistritos($CataudienciasDto, $proveedor = null) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();
        $consulta = $CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto, $proveedor);

        $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
        $AudienciasdistritosDTO = new AudienciasdistritosDTO();

        $validacion = new Validacion();
        $cveCatAudiencia = "";
        $desCatAudiencia = "";
        $cveNaturaleza = "";
        $cveEtapaProcesal = "";
        $cveTipoAudiencia = "";
        $causa = "";
        $cveDistrito = "";
        $cveCodigo = "";
        $fechaInicia = "";
        $fechaVigencia = "";
        //$finSemana = "";
        $audienciaInicial = "";
        $activo = "";
        //$minDuracion = "";
        //$maxDuracion = "";
        //$holgura = "";
        //$minHorasDesahogar = "";
        //$maxHorasDesahogar = "";

        $sancionesE = "";
        $sancionesE = array();
        $sancionesEnvia = "";
        $sancionesEnvia = array();
        $respuesta = "";
        $respuesta = array();

        if ($consulta != "") {
            foreach ($consulta as $cataudiencias) {
                $cveCatAudiencia = $cataudiencias->getCveCatAudiencia();
                ;
                $desCatAudiencia = utf8_encode($cataudiencias->getDesCatAudiencia());
                $cveNaturaleza = $cataudiencias->getCveNaturaleza();
                $cveEtapaProcesal = $cataudiencias->getCveEtapaProcesal();
                ;
                $cveTipoAudiencia = $cataudiencias->getCveTipoAudiencia();
                $causa = $cataudiencias->getCausa();
                $fechaInicia = $validacion->mysqlToNormal($cataudiencias->getFechaInicia());
                $fechaVigencia = $validacion->mysqlToNormal($cataudiencias->getFechaVigencia());
                //$finSemana = $cataudiencias->getFinSemana();
                $audienciaInicial = $cataudiencias->getAudienciaInicial();
                $activo = $cataudiencias->getActivo();
                //$minDuracion = $cataudiencias->getMinDuracion();
                //$maxDuracion = $cataudiencias->getMaxDuracion();
                //$holgura = $cataudiencias->getHolgura();
                //$minHorasDesahogar = $cataudiencias->getMinHorasDesahogar();
                //$maxHorasDesahogar = $cataudiencias->getMaxHorasDesahogar();
                $cveCodigo = $cataudiencias->getCveCodigo();
            }

            $AudienciasdistritosDTO->setActivo("S");
            $AudienciasdistritosDTO->setCveCatAudiencia($cveCatAudiencia);
            $distritosctl = $AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO, $proveedor);

            if ($distritosctl != "") {
                foreach ($distritosctl as $audienciasdistritos) {
                    $cveDistrito = $audienciasdistritos->getCveDistrito();
                }
            } else {
                
            }

            $sancionesE = array("cveCatAudiencia" => $cveCatAudiencia,
                "desCatAudiencia" => $desCatAudiencia,
                "cveNaturaleza" => $cveNaturaleza,
                "cveEtapaProcesal" => $cveEtapaProcesal,
                "cveTipoAudiencia" => $cveTipoAudiencia,
                "causa" => $causa,
                "fechaInicia" => $fechaInicia,
                "fechaVigencia" => $fechaVigencia,
                //"finSemana" => $finSemana,
                "audienciaInicial" => $audienciaInicial,
                "activo" => $activo,
                //"minDuracion" => $minDuracion,
                //"maxDuracion" => $maxDuracion,
                //"holgura" => $holgura,
                //"minHorasDesahogar" => $minHorasDesahogar,
                //"maxHorasDesahogar" => $maxHorasDesahogar,
                "cveCodigo" => $cveCodigo
            );

            array_push($sancionesEnvia, $sancionesE);
            $respuesta = array("TotalCountCataudiencias" => count($sancionesEnvia), "datoscataudiencias" => $sancionesEnvia, "cveDistrito" => $cveDistrito, "estatus" => "ok", "mensaje" => "Registros Encontrados");
        } else {
            $respuesta = array("TotalCountCataudiencias" => "0", "datoscataudiencias" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }
        return $respuesta;
    }

    
    
    public function consultarDescripciones2($CataudienciasDto, $param, $proveedor = null) {
        $registro = "";
        $registro = array();
        
        $resultado = "";
        $resultado = array();
        
        $registro2 = [];
        $distritobusqueda=$_POST['distr'];
        $contadorsentencia = 0;
        $contadoraudiencias=0;
        //$registro2 = array();
        
        $resultado2 = "";
        $resultado2 = array();

        $respuesta = "";
        $respuesta = array();
        
        //$validacion = new Validacion();
        //$CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        //print_r($CataudienciasDto);
        $AudienciasdistritosbusquedaController = new AudienciasdistritosController();                    //$ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null      
        $AudienciasdistritosbusquedaDTO= new AudienciasdistritosDTO();
        $AudienciasdistritosbusquedaDTO->setCveDistrito($distritobusqueda);
        
        $AudienciasdistritosbusquedaDTO = $AudienciasdistritosbusquedaController->selectAudienciasdistritos($AudienciasdistritosbusquedaDTO);
                
        if ($AudienciasdistritosbusquedaDTO != "") {
            
            
            
            $desnaturaleza="";            
            $tipaudiencia="";
            $etapasprocesales="";
            
            $descripciondelaaudiencia="";
            $idnaturaleza = "";
            $idetapa="";
            $idtipoaudiencia="";
            $causa="";
               
            
            foreach ($AudienciasdistritosbusquedaDTO as $auddis) {
                    
                    //$desnaturaleza="";                    
                    //$etapasprocesales="";                    
                    //$tipaudiencia="";
                    $holgura="";
                    $maxduracion="";                
                    $minduracion="";
                    $horasdesahogomax="";
                    $horasdesahogomin="";
                    $finsemana="";
                    $activo="";
                    $cvedistrito="";
                    $descripciondistrito="";    
                    $cveaudiencia = utf8_encode($auddis->getCveCatAudiencia());
                    $holgura = utf8_encode($auddis->getHolgura());
                    $maxduracion = utf8_encode($auddis->getMaxDuracion());                                            
                    $minduracion = utf8_encode($auddis->getMinDuracion());                                            
                    $horasdesahogomax = utf8_encode($auddis->getMaxHorasDesahogar());                                            
                    $horasdesahogomin = utf8_encode($auddis->getMinHorasDesahogar());                                            
                    $finsemana=utf8_encode($auddis->getFinSemana());
                    $activo=utf8_encode($auddis->getActivo());
                    $cvedistrito=$auddis->getCveDistrito();
                    
                    
                    $DistritosController = new DistritosController(); 
                    $DistritosDTO = new DistritosDTO();
                    $DistritosDTO->setCveDistrito($cvedistrito);
                    $DistritosDTO->setActivo("S");
                    //print_r($DistritosDTO);
                    $DistritosDTO = $DistritosController->selectDistritos($DistritosDTO);
                        
                    foreach ($DistritosDTO as $dtodistritos) 
                    {
                        if($cvedistrito==$dtodistritos->getCveDistrito())
                        {    
                            $descripciondistrito=$dtodistritos->getDesDistrito();                                                    
                            break;
                        }
                        
                    }
                    
                    $CataudienciasbusquedaController = new CataudienciasController();
                    $CataudienciasDto= new CataudienciasDTO();
                    $CataudienciasDto->setCveCatAudiencia($cveaudiencia);
                    $CataudienciasDto->setActivo("S");
                    
                    $CataudienciasDto=$CataudienciasbusquedaController->selectCataudiencias($CataudienciasDto, " order by desCatAudiencia ASC");
                    
                    
                    if($CataudienciasDto!="")
                    {
                        foreach ($CataudienciasDto as $ceresoAds) {    

                            if($cveaudiencia==$ceresoAds->getCveCatAudiencia())
                            {
                                $descripciondelaaudiencia=$ceresoAds->getDesCatAudiencia();
                                $idnaturaleza = $ceresoAds->getCveNaturaleza();
                                $idetapa = $ceresoAds->getCveEtapaProcesal();                
                                $idtipoaudiencia = $ceresoAds->getCveTipoAudiencia();
                                $causa=$ceresoAds->getCausa();


                                $NaturalezasController = new NaturalezasController();    // para registrar un nuevo cataudienciasdistritos
                                $NaturalezasDTO = new NaturalezasDTO();
                                $NaturalezasDTO->setCveNaturaleza($idnaturaleza);
                                $NaturalezasDTO->setActivo("S");
                                $NaturalezasDTO = $NaturalezasController->selectNaturalezas($NaturalezasDTO);
                                    //print_r($NaturalezasDTO);
                                foreach ($NaturalezasDTO as $nat) {                    
                                    if($nat->getCveNaturaleza() == $idnaturaleza) {
                                        $desnaturaleza = utf8_encode($nat->getDesNaturaleza());                          
                                        break;
                                    }
                                            //$desnaturaleza = $nat->getDesNaturaleza();                    
                                }

                                $EtapasprocesalesController = new EtapasprocesalesController();    // para registrar un nuevo cataudienciasdistritos
                                $EtapasprocesalesDTO = new EtapasprocesalesDTO();
                                $EtapasprocesalesDTO->setCveEtapaProcesal($idetapa);
                                $EtapasprocesalesDTO->setActivo("S");
                                $EtapasprocesalesDTO = $EtapasprocesalesController->selectEtapasprocesales($EtapasprocesalesDTO);

                                foreach ($EtapasprocesalesDTO as $et) {
                                    if($idetapa==$et->getCveEtapaProcesal())
                                    {    
                                        $etapasprocesales = $et->getDesEtapaProcesal();
                                        break;
                                    }
                                }

                                $TiposaudienciasController = new TiposaudienciasController();    // para registrar un nuevo cataudienciasdistritos
                                $TiposaudienciasDTO = new TiposaudienciasDTO();
                                $TiposaudienciasDTO->setCveTipoAudiencia($idtipoaudiencia);
                                $TiposaudienciasDTO->setActivo("S");
                                $TiposaudienciasDTO = $TiposaudienciasController->selectTiposaudiencias($TiposaudienciasDTO);

                                foreach ($TiposaudienciasDTO as $tipos) {
                                    if($idtipoaudiencia==$tipos->getCveTipoAudiencia())
                                    {
                                        $tipaudiencia = $tipos->getDesTipoAudiencia();
                                        break;
                                    }                                
                                }


                                $registro2[$contadorsentencia] = array("cveaudiencia" => utf8_encode($cveaudiencia), 
                                    "holgura" => utf8_encode($holgura), 
                                    "maxduracion" => utf8_encode($maxduracion),
                                    "minduracion"=>  utf8_encode($minduracion),
                                    "Descripcionaud"=>  utf8_encode($descripciondelaaudiencia),
                                    "desnaturaleza" => utf8_encode($desnaturaleza),
                                    "etapasprocesales" => utf8_encode($etapasprocesales),
                                    "tipaudiencia" => utf8_encode($tipaudiencia),
                                    "causa" => utf8_encode($causa),
                                    "horasdesahogomax" => utf8_encode($horasdesahogomax),
                                    "horasdesahogomin" => utf8_encode($horasdesahogomin),
                                    "finsemana" => utf8_encode($finsemana),
                                    "activodistrito" => utf8_encode($activo),
                                    "descripciondistrito"=>  utf8_encode($descripciondistrito)
                                );
                                $contadorsentencia++;
                                
                                //Ordenar de Forma Ascendente
                                foreach ($registro2 as $key => $row) {
                                    $aux[$key] = $row['Descripcionaud'];
                                }
                                array_multisort($aux, SORT_ASC, $registro2);
                                //Fin de Ordenar de Forma Ascendente
                                
                            }


    //                        $cvecataudiencia="";
    //                        $cvecataudiencia=$ceresoAds->getCveCatAudiencia();
    //                        $cveaudiencia="";
    //
    //                        $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
    //                        $AudienciasdistritosDTO = new AudienciasdistritosDTO();
    //                        $AudienciasdistritosDTO->setCveCatAudiencia($cvecataudiencia);
    //                        //$AudienciasdistritosDTO->setActivo("S");
    //                        $AudienciasdistritosDTO = $AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO);
    //
    //
    //                        
    //                        if($AudienciasdistritosDTO!="")
    //                        {
    //
    //
    //
    //
    //                        $contadoraudiencias++;
    //                        }

                            //$sentencias[$contadorsentencia] = array("idimpofe" => $Impsent->getidImpOfeDelCarpeta(), "setIdImputadoSentencia" => $Impsent->getidImputadoSentencia(), "impofedel" => utf8_encode($imputado . "/" . $ofendido . "/" . $delito), "sanciones" => $arrsanc, "beneficios"=>$arrbeneficios,"totalSancion" => $contadorsanciones,"contadorbeneficios"=>$contadorbeneficios, "apelacion" => $apelacion);

                        }
                    }
                    
                                            
                }
            
            
            
            
            
            
            $respuesta = array("TotalCountdistritosaudiencia" => $contadorsentencia,"TotalCountcataudiencias" => $contadoraudiencias,"datosdistrito" => $registro2, "estatus" => "ok", "mensaje" => "Registros Encontrados");
            return $respuesta;
        } else {
            return "";
        }
    }

    
    
    
    
    public function consultarDescripciones($CataudienciasDto, $param, $proveedor = null) {

        //$validacion = new Validacion();
        $descaudiencia="";
        
        if ($param["desAudiencia"] != "") {                
            $descaudiencia .=" and desCatAudiencia like '%" . $param["desAudiencia"] . "%'";                         
        }
        
        
        
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();                    //$ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null      
        $CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto, " ".$descaudiencia." order by desCatAudiencia ASC", $proveedor, $param, null);
        $idnaturaleza = "";
//$CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto,$proveedor);
//  $adscripciones = new AdscripcionesCliente(); 
//  $arrayAds = json_decode($adscripciones->getAdscripciones());
//        
        if ($CataudienciasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($CataudienciasDto) . '",';
            
            $json .= '"data":[';
            $x = 1;
            $holgura="";
            
            foreach ($CataudienciasDto as $ceresoAds) {    
                $json .= "{";
                $json .= '"cvecataudiencia":' . json_encode(utf8_encode($ceresoAds->getCveCatAudiencia())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($ceresoAds->getActivo())) . ",";
                $json .= '"causa":' . json_encode(utf8_encode($ceresoAds->getCausa())) . ",";
                //$json .= '"duracionminima":' . json_encode(utf8_encode($ceresoAds->getMinDuracion())) . ",";
                //$json .= '"duracionmaxima":' . json_encode(utf8_encode($ceresoAds->getMaxDuracion())) . ",";
                //$json .= '"desahogohoramin":' . json_encode(utf8_encode($ceresoAds->getMinHorasDesahogar())) . ",";
                //$json .= '"desahogohoramax":' . json_encode(utf8_encode($ceresoAds->getMaxHorasDesahogar())) . ",";
            
                
                $json .= '"descripcion":' . json_encode(utf8_encode($ceresoAds->getDesCatAudiencia())) . ",";
                $idnaturaleza = $ceresoAds->getCveNaturaleza();
                $idtipoaudiencia = $ceresoAds->getCveTipoAudiencia();
                $idetapa = $ceresoAds->getCveEtapaProcesal();

                $NaturalezasController = new NaturalezasController();    // para registrar un nuevo cataudienciasdistritos
                $NaturalezasDTO = new NaturalezasDTO();
                $NaturalezasDTO->setCveNaturaleza($idnaturaleza);
                $NaturalezasDTO->setActivo("S");
                $NaturalezasDTO = $NaturalezasController->selectNaturalezas($NaturalezasDTO);

                foreach ($NaturalezasDTO as $nat) {
                    $desnaturaleza = $nat->getDesNaturaleza();
                    $json .= '"desnaturaleza":' . json_encode(utf8_encode($desnaturaleza)) . ",";
                }


                $TiposaudienciasController = new TiposaudienciasController();    // para registrar un nuevo cataudienciasdistritos
                $TiposaudienciasDTO = new TiposaudienciasDTO();
                $TiposaudienciasDTO->setCveTipoAudiencia($idtipoaudiencia);
                $TiposaudienciasDTO->setActivo("S");
                $TiposaudienciasDTO = $TiposaudienciasController->selectTiposaudiencias($TiposaudienciasDTO);

                foreach ($TiposaudienciasDTO as $tipos) {
                    $tipaudiencia = $tipos->getDesTipoAudiencia();
                    $json .= '"tipoaudiencia":' . json_encode(utf8_encode($tipaudiencia)) . ",";
                }

                $EtapasprocesalesController = new EtapasprocesalesController();    // para registrar un nuevo cataudienciasdistritos
                $EtapasprocesalesDTO = new EtapasprocesalesDTO();
                $EtapasprocesalesDTO->setCveEtapaProcesal($idetapa);
                $EtapasprocesalesDTO->setActivo("S");
                $EtapasprocesalesDTO = $EtapasprocesalesController->selectEtapasprocesales($EtapasprocesalesDTO);

                foreach ($EtapasprocesalesDTO as $et) {
                    $etapasprocesales = $et->getDesEtapaProcesal();
                    $json .= '"etapaprocesal":' . json_encode(utf8_encode($etapasprocesales)) . ",";
                }
                
                

//          $ceresoDTO = new CeresosDTO();
//          $ceresoDAO = new CeresosDAO();
//          $ceresoDTO->setCveCereso($ceresoAds->getCveCereso());
//          $ceresoDTO->setActivo("S");
//          $ceresoDTO = $ceresoDAO->selectCeresos($ceresoDTO);
//                
//          if($ceresoDTO != ""){
//              $json .= '"desCereso":' . json_encode(utf8_encode($ceresoDTO[0]->getDesCereso())) . ",";
//          }
//              $json .= '"cveAdscripcion":' . json_encode(utf8_encode($ceresoAds->getCveAdscripcion())) . ",";
//
//              foreach ($arrayAds->data as $datos){
//                  if($ceresoAds->getCveAdscripcion() == $datos->cveAdscripcion){
//                      $json .= '"nomAdscripcion":'.json_encode($datos->nomAdscripcion) . ",";
//                      break;
//                  }
//              }
//                
//          $json .= '"activo":' . json_encode(utf8_encode($ceresoAds->getActivo())) . ",";
//          $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($ceresoAds->getFechaRegistro()))) . "";
//                
                $json .= "}";
                $x++;
                if ($x <= count($CataudienciasDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($CataudienciasDto) . '"';
            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    public function getPaginas($CataudienciasDto, $param) {
        //$CataudienciasDto=$this->validarCataudiencias($CataudienciasDto);
        $descaudiencia="";
        
        if ($param["desAudiencia"] != "") {                
            $descaudiencia .=" and desCatAudiencia like '%" . $param["desAudiencia"] . "%' ";                         
        }
        
        $CataudienciasDao = new CataudienciasDAO();


//        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
//        $CeresosadscripcionesDto = $this->verificaCeros($CeresosadscripcionesDto);
        $numTot = $CataudienciasDao->selectCataudiencias($CataudienciasDto, $descaudiencia, "", $param, " count(cveCatAudiencia) as totalCount ");

        $Pages = (int) $numTot[0] / $param["cantxPag"];

        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages > 1) {
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


        return $json;
    }

    public function insertcataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $cataudienciasDto->getcveCatAudiencia();
        $proveedor->execute("BEGIN");
        $respuesta = array();
        $error = false;
        $mensaje = "";
        $idcataudiencia = 0;
        $cataudienciasDto = $this->validarCataudiencias($cataudienciasDto);
        $CataudienciasDAO = new CataudienciasDAO();
        
        $cataudienciasDto = $CataudienciasDAO->insertCataudiencias($cataudienciasDto, $proveedor);
        $array_cadena = array();

        if ($cataudienciasDto != "") {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(293); // insercion de SANCION 
            $bitacoraDTO->setFechaMovimiento($fechaserver); //
            $dtoToJson = new DtoToJson($cataudienciasDto);
            //$dtoToJson->toJson("INSERCION DE CATAUDIENCIAS");
            $bitacoraDTO->setObservaciones("INSERCION DE CATAUDIENCIAS: " . $dtoToJson->toJson("INSERCION")); //
            $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            if ($insb == "") {
                $error = true;
            }



            foreach ($cataudienciasDto as $insertaudienciasdistritos) {
                $idcataudiencia = $insertaudienciasdistritos->getCveCatAudiencia();
                $laholgura = $paramdistrito["holgura"];
                $laminduracion = $paramdistrito["minDuracion"];
                $lamaxduracion = $paramdistrito["maxDuracion"];
                $lamaxhorasdesahogo = $paramdistrito["maxHorasDesahogar"];
                $laminhorasdesahogo = $paramdistrito["minHorasDesahogar"];
                $findesemana = $paramdistrito["finSemana"];
                $activo=$paramdistrito["activo"];
            }
            if ($idcataudiencia != 0) {

                $array_cadena_distrito=explode(',', $paramdistrito["cadenadistritos"]);
                //esta linea cuenta cuantos elementos tiene nuestro arreglo
                $countcadena = count($array_cadena_distrito);        
                // Aqui va a insertar un insert por cada uno de los elementos contados anteriormente
                for($j = 0; $j <$countcadena; $j++)
                {
                //traigo los elementos de la lista y se los asigno a la variable idtienda
                    $cad = $array_cadena_distrito[$j];

                $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
                $AudienciasdistritosDTO = new AudienciasdistritosDTO();
                $AudienciasdistritosDTO->setCveCatAudiencia($idcataudiencia);
                $AudienciasdistritosDTO->setHolgura($laholgura);
                $AudienciasdistritosDTO->setMinDuracion($laminduracion);
                $AudienciasdistritosDTO->setMaxDuracion($lamaxduracion);                
                $AudienciasdistritosDTO->setMaxHorasDesahogar($lamaxhorasdesahogo);
                $AudienciasdistritosDTO->setMinHorasDesahogar($laminhorasdesahogo);
                $AudienciasdistritosDTO->setFinSemana($findesemana);
                $AudienciasdistritosDTO->setCveDistrito($cad);
                $AudienciasdistritosDTO->setActivo($activo);
                //print_r($AudienciasdistritosDTO);
                $AudienciasdistritosDTO = $AudienciasdistritosController->insertAudienciasdistritos($AudienciasdistritosDTO, $proveedor);
                }

                if ($AudienciasdistritosDTO == "") {
                    $error = true;
                } else {

                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(294); // insercion de SANCION 
                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                    $dtoToJson = new DtoToJson($AudienciasdistritosDTO);
                    //$dtoToJson->toJson("INSERCION DE AUDIENCIAS DISTRITOS");
                    $bitacoraDTO->setObservaciones("INSERCION DE AUDIENCIAS DISTRITOS: " . $dtoToJson->toJson("INSERCION")); //
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                    $insertabeneficios = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

                    if ($insertabeneficios == "") {
                        $error = true;
                    }

                    $array_cadena = explode(',', $paramdistrito["cadena"]);

                    //esta linea cuenta cuantos elementos tiene nuestro arreglo
                    $count = count($array_cadena);

                    // Aqui va a insertar un insert por cada uno de los elementos contados anteriormente
                    for ($j = 0; $j < $count; $j++) {
                        //traigo los elementos de la lista y se los asigno a la variable idtienda
                        $cad = $array_cadena[$j];

                        $AutoresaudienciasController = new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
                        $AutoresaudienciasDTO = new AutoresaudienciasDTO();
                        $AutoresaudienciasDTO->setActivo("S");
                        $AutoresaudienciasDTO->setCveCatAudiencia($idcataudiencia);
                        $AutoresaudienciasDTO->setCveGrupo($cad);
                        $AutoresaudienciasDTO = $AutoresaudienciasController->insertAutoresaudiencias($AutoresaudienciasDTO, $proveedor);
                    }


                    if ($AutoresaudienciasDTO == "") {
                        $error = true;
                    } else {
                        $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion(287); // insercion de SANCION 
                        $bitacoraDTO->setFechaMovimiento($fechaserver); //
                        $dtoToJson = new DtoToJson($AutoresaudienciasDTO);
                        //$dtoToJson->toJson("UPDATE DE IMPUTADOSSANCIONES");
                        $bitacoraDTO->setObservaciones("INSERCION DE AUTORES AUDIENCIAS: " . $dtoToJson->toJson("INSERCION")); //
                        $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                        $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                        $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                        $insertabeneficios = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                        if ($insertabeneficios == "") {
                            $error = true;
                        }
                    }
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }

        if ($error == false) {

            $proveedor->execute("COMMIT");
            //$respuesta = array("Estatus" => "Error", "Mensaje" => "Se ha agregado correctamente");
            $respuesta = array("totalCount" => "1", "cveCataudiencia" => $idcataudiencia, "estatus" => "ok", "mensaje" => "Se ha agregado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            //$respuesta = array("Estatus" => "Error","totalCount" => "1", "Mensaje" => "Ocrrio un error al gardar el beneficio");
            // echo "Ocurrio un error al agregar";
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al agregar");
        }
        $proveedor->close();

        return $respuesta;
    }

    public function updatecataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $cataudienciasDto->getcveCatAudiencia();
        $proveedor->execute("BEGIN");
        $respuesta = array();
        $error = false;
        $mensaje = "";
        $idcataudiencia = 0;
        $sientra = 1;
        $array_cadena = array();
        $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
        $AudienciasdistritosDTO = new AudienciasdistritosDTO();
        $AudienciasdistritosDTO->setCveCatAudiencia($id);
        $AudienciasdistritosDTO->setActivo("S");
        $AudienciasdistritosDTO = $AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO);
        $modaudienciasdistritos = 5;
        $agdaudienciasdistritos = 5;
        $idarray = "";
        $elselecs = array();
        $sancionesE = "";
        $sancionesE = array();
        $fechaserver = $proveedor->getfechaActual();
        //print_r($AudienciasdistritosDTO);

//        if ($AudienciasdistritosDTO == "") {
//
//            $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
//            $AudienciasdistritosDTO = new AudienciasdistritosDTO();
//            $AudienciasdistritosDTO->setCveCatAudiencia($id);
//            $AudienciasdistritosDTO->setHolgura($paramdistrito["holgura"]);
//            $AudienciasdistritosDTO->setMinDuracion($paramdistrito["minDuracion"]);
//            $AudienciasdistritosDTO->setMaxDuracion($paramdistrito["maxDuracion"]);
//            $AudienciasdistritosDTO->setCveDistrito($paramdistrito["cveDistrito"]);
//            $AudienciasdistritosDTO->setActivo("S");
//
//            $agdaudienciasdistritos = $AudienciasdistritosDTO = $AudienciasdistritosController->insertAudienciasdistritos($AudienciasdistritosDTO, $proveedor);
//        } else {
//            $AudienciasdistritosDTO[0]->setActivo("S");
//            $AudienciasdistritosDTO[0]->setHolgura($paramdistrito["holgura"]);
//            $AudienciasdistritosDTO[0]->setMinDuracion($paramdistrito["minDuracion"]);
//            $AudienciasdistritosDTO[0]->setMaxDuracion($paramdistrito["maxDuracion"]);
//            $AudienciasdistritosDTO[0]->setCveDistrito($paramdistrito["cveDistrito"]);
//            $modaudienciasdistritos = $AudienciasdistritosDTOaux = $AudienciasdistritosController->updateAudienciasdistritos($AudienciasdistritosDTO[0], $proveedor);
//        }
        if ($modaudienciasdistritos == 5 || $agdaudienciasdistritos == 5) {
            
            //Aqui empieza la funcion de modificar e insertar sin tener que agregar multiples a la hora de modificar 
            $AudienciasdistritosController3 = new AudienciasdistritosController();
            $AudienciasdistritosDTO3 = new AudienciasdistritosDTO();
            $AudienciasdistritosDTO3->setCveCatAudiencia($id);
            //$AudienciasdistritosDTO3->setActivo("N");
            $AudienciasdistritosDTO3 = $AudienciasdistritosController3->selectAudienciasdistritos($AudienciasdistritosDTO3);
            //print_r($AudienciasdistritosDTO3);
            $array_distrito2 = explode(',', $paramdistrito["cadenadistritos"]);
            
            if($paramdistrito["cadenadistritos"]!=null||$paramdistrito["cadenadistritos"]!="")
            {
                if ($AudienciasdistritosDTO3 == "") {
                    //$this->desactivarmarcadosdistrito($id, $array_distrito2, $proveedor,$paramdistrito,$fechaserver);

                    foreach ($array_distrito2 as $arraydistrito2) {
                        $AudienciasdistritosController5 = new AudienciasdistritosController();
                        $AudienciasdistritosDTO5 = new AudienciasdistritosDTO();
                        $AudienciasdistritosDTO5->setCveCatAudiencia($id);
                        $AudienciasdistritosDTO5->setActivo("S");
                        $AudienciasdistritosDTO5->setCveDistrito($arraydistrito2);
                        $AudienciasdistritosDTO5 = $AudienciasdistritosController5->selectAudienciasdistritos($AudienciasdistritosDTO5);

                        if ($AudienciasdistritosDTO5 == "") {
                            $AudienciasdistritosController7 = new AudienciasdistritosController();
                            $AudienciasdistritosDTO7 = new AudienciasdistritosDTO();

                            $AudienciasdistritosDTO7->setMaxDuracion($paramdistrito["maxDuracion"]);
                            $AudienciasdistritosDTO7->setMinDuracion($paramdistrito["minDuracion"]);
                            $AudienciasdistritosDTO7->setHolgura($paramdistrito["holgura"]);
                            $AudienciasdistritosDTO7->setMaxHorasDesahogar($paramdistrito["maxHorasDesahogar"]);
                            $AudienciasdistritosDTO7->setMinHorasDesahogar($paramdistrito["minHorasDesahogar"]);
                            $AudienciasdistritosDTO7->setFinSemana($paramdistrito["finSemana"]);

                            $AudienciasdistritosDTO7->setActivo($paramdistrito["activo"]);
                            $AudienciasdistritosDTO7->setCveCatAudiencia($id);
                            $AudienciasdistritosDTO7->setCveDistrito($arraydistrito2);
                            $AudienciasdistritosDTO7 = $AudienciasdistritosController7->insertAudienciasdistritos($AudienciasdistritosDTO7, $proveedor);
                        }
                    }
                } else {
                    foreach ($array_distrito2 as $arraydistrito2) {
                        $AudienciasdistritosController9 = new AudienciasdistritosController();
                        $AudienciasdistritosDTO9 = new AudienciasdistritosDTO();
                        $AudienciasdistritosDTO9->setCveCatAudiencia($id);
                        //$AudienciasdistritosDTO9->setActivo("N");
                        $AudienciasdistritosDTO9->setCveDistrito($arraydistrito2);
                        $AudienciasdistritosDTO9 = $AudienciasdistritosController9->selectAudienciasdistritos($AudienciasdistritosDTO9);
                        

                        if ($AudienciasdistritosDTO9 != "") {
                            foreach ($AudienciasdistritosDTO9 as $Distritos9) { 
                                //echo "entro";
                                $idselectn = $Distritos9->getIdAudienciaDistrito();
                                $AudienciasdistritosController7 = new AudienciasdistritosController();
                                $AudienciasdistritosDTO7 = new AudienciasdistritosDTO();

                                $AudienciasdistritosDTO7->setMaxDuracion($paramdistrito["maxDuracion"]);
                                $AudienciasdistritosDTO7->setMinDuracion($paramdistrito["minDuracion"]);
                                $AudienciasdistritosDTO7->setHolgura($paramdistrito["holgura"]);
                                $AudienciasdistritosDTO7->setMaxHorasDesahogar($paramdistrito["maxHorasDesahogar"]);
                                $AudienciasdistritosDTO7->setMinHorasDesahogar($paramdistrito["minHorasDesahogar"]);
                                $AudienciasdistritosDTO7->setFinSemana($paramdistrito["finSemana"]);
                                $AudienciasdistritosDTO7->setActivo($paramdistrito["activo"]);                            
                                $AudienciasdistritosDTO7->setCveCatAudiencia($id);
                                $AudienciasdistritosDTO7->setCveDistrito($arraydistrito2);
                                $AudienciasdistritosDTO7->setIdAudienciaDistrito($idselectn);
                                $AudienciasdistritosDTO7->setFechaActualizacion($fechaserver);
                                //print_r($AudienciasdistritosDTO7);
                                $AudienciasdistritosDTO7 = $AudienciasdistritosController7->updateAudienciasdistritos($AudienciasdistritosDTO7, $proveedor);
                            }
                        } else {
                            $AudienciasdistritosController5 = new AudienciasdistritosController();
                            $AudienciasdistritosDTO5 = new AudienciasdistritosDTO();
                            $AudienciasdistritosDTO5->setCveCatAudiencia($id);
                            $AudienciasdistritosDTO5->setActivo("S");
                            $AudienciasdistritosDTO5->setCveDistrito($arraydistrito2);
                            $AudienciasdistritosDTO5 = $AudienciasdistritosController5->selectAudienciasdistritos($AudienciasdistritosDTO5);
                            if ($AudienciasdistritosDTO5 == "") {
                                $AudienciasdistritosController7 = new AudienciasdistritosController();
                                $AudienciasdistritosDTO7 = new AudienciasdistritosDTO();

                                $AudienciasdistritosDTO7->setMaxDuracion($paramdistrito["maxDuracion"]);
                                $AudienciasdistritosDTO7->setMinDuracion($paramdistrito["minDuracion"]);
                                $AudienciasdistritosDTO7->setHolgura($paramdistrito["holgura"]);
                                $AudienciasdistritosDTO7->setMaxHorasDesahogar($paramdistrito["maxHorasDesahogar"]);
                                $AudienciasdistritosDTO7->setMinHorasDesahogar($paramdistrito["minHorasDesahogar"]);
                                $AudienciasdistritosDTO7->setFinSemana($paramdistrito["finSemana"]);
                                $AudienciasdistritosDTO7->setActivo($paramdistrito["activo"]);
                                $AudienciasdistritosDTO7->setCveCatAudiencia($id);
                                $AudienciasdistritosDTO7->setCveDistrito($arraydistrito2);
                                $AudienciasdistritosDTO7 = $AudienciasdistritosController7->insertAudienciasdistritos($AudienciasdistritosDTO7, $proveedor);
                            }
                            //$this->desactivarmarcados($id, $array_cadena2,$proveedor);
                        }
                    }
                    //$this->desactivarmarcadosdistrito($id, $array_distrito2, $proveedor,$paramdistrito,$fechaserver);
                }
            }
            //fin
            
            
            
            
            
            
            //Aqui empieza la funcion de modificar e insertar sin tener que agregar multiples a la hora de modificar 
            $AutoresaudienciasController3 = new AutoresaudienciasController();
            $AutoresaudienciasDTO3 = new AutoresaudienciasDTO();
            $AutoresaudienciasDTO3->setCveCatAudiencia($id);
            $AutoresaudienciasDTO3->setActivo("N");
            $AutoresaudienciasDTO3 = $AutoresaudienciasController3->selectAutoresaudiencias($AutoresaudienciasDTO3);

            $array_cadena2 = explode(',', $paramdistrito["cadena"]);


            if ($AutoresaudienciasDTO3 == "") {
                $this->desactivarmarcados($id, $array_cadena2, $proveedor);

                foreach ($array_cadena2 as $array2) {
                    $AutoresaudienciasController5 = new AutoresaudienciasController();
                    $AutoresaudienciasDTO5 = new AutoresaudienciasDTO();
                    $AutoresaudienciasDTO5->setCveCatAudiencia($id);
                    $AutoresaudienciasDTO5->setActivo("S");
                    $AutoresaudienciasDTO5->setCveGrupo($array2);
                    $AutoresaudienciasDTO5 = $AutoresaudienciasController5->selectAutoresaudiencias($AutoresaudienciasDTO5);

                    if ($AutoresaudienciasDTO5 == "") {
                        $AutoresaudienciasController7 = new AutoresaudienciasController();
                        $AutoresaudienciasDTO7 = new AutoresaudienciasDTO();
                        $AutoresaudienciasDTO7->setActivo("S");
                        $AutoresaudienciasDTO7->setCveCatAudiencia($id);
                        $AutoresaudienciasDTO7->setCveGrupo($array2);
                        $AutoresaudienciasDTO7 = $AutoresaudienciasController7->insertAutoresaudiencias($AutoresaudienciasDTO7, $proveedor);
                    }
                }
            } else {
                foreach ($array_cadena2 as $array2) {
                    $AutoresaudienciasController9 = new AutoresaudienciasController();
                    $AutoresaudienciasDTO9 = new AutoresaudienciasDTO();
                    $AutoresaudienciasDTO9->setCveCatAudiencia($id);
                    $AutoresaudienciasDTO9->setActivo("N");
                    $AutoresaudienciasDTO9->setCveGrupo($array2);
                    $AutoresaudienciasDTO9 = $AutoresaudienciasController9->selectAutoresaudiencias($AutoresaudienciasDTO9);

                    if ($AutoresaudienciasDTO9 != "") {
                        foreach ($AutoresaudienciasDTO9 as $Autoresa9) {
                            $idselectn = $Autoresa9->getIdAutorAudiencia();
                            $AutoresaudienciasController7 = new AutoresaudienciasController();
                            $AutoresaudienciasDTO7 = new AutoresaudienciasDTO();
                            $AutoresaudienciasDTO7->setActivo("S");
                            $AutoresaudienciasDTO7->setCveCatAudiencia($id);
                            $AutoresaudienciasDTO7->setCveGrupo($array2);
                            $AutoresaudienciasDTO7->setIdAutorAudiencia($idselectn);
                            $AutoresaudienciasDTO7 = $AutoresaudienciasController7->updateAutoresaudiencias($AutoresaudienciasDTO7, $proveedor);
                        }
                    } else {
                        $AutoresaudienciasController5 = new AutoresaudienciasController();
                        $AutoresaudienciasDTO5 = new AutoresaudienciasDTO();
                        $AutoresaudienciasDTO5->setCveCatAudiencia($id);
                        $AutoresaudienciasDTO5->setActivo("S");
                        $AutoresaudienciasDTO5->setCveGrupo($array2);
                        $AutoresaudienciasDTO5 = $AutoresaudienciasController5->selectAutoresaudiencias($AutoresaudienciasDTO5);
                        if ($AutoresaudienciasDTO5 == "") {
                            $AutoresaudienciasController7 = new AutoresaudienciasController();
                            $AutoresaudienciasDTO7 = new AutoresaudienciasDTO();
                            $AutoresaudienciasDTO7->setActivo("S");
                            $AutoresaudienciasDTO7->setCveCatAudiencia($id);
                            $AutoresaudienciasDTO7->setCveGrupo($array2);
                            $AutoresaudienciasDTO7 = $AutoresaudienciasController7->insertAutoresaudiencias($AutoresaudienciasDTO7, $proveedor);
                        }
                        //$this->desactivarmarcados($id, $array_cadena2,$proveedor);
                    }
                }
                $this->desactivarmarcados($id, $array_cadena2, $proveedor);
            }
            
            //Aqui termina la funcion
            
            if ($sientra = 5) {
                $CataudienciasDAO = new CataudienciasDAO();
                $CataudienciasDTO = new CataudienciasDTO();
                $CataudienciasDTO->setActivo("S");
                $CataudienciasDTO->setCveCatAudiencia($id);
                $CataudienciasDTO->setDesCatAudiencia($cataudienciasDto->getDesCatAudiencia());
                $CataudienciasDTO->setCveNaturaleza($cataudienciasDto->getCveNaturaleza());
                $CataudienciasDTO->setCveEtapaProcesal($cataudienciasDto->getCveEtapaProcesal());
                $CataudienciasDTO->setCveTipoAudiencia($cataudienciasDto->getCveTipoAudiencia());
                $CataudienciasDTO->setCausa($cataudienciasDto->getCausa());
                $CataudienciasDTO->setCveCodigo($cataudienciasDto->getCveCodigo());
                $CataudienciasDTO->setFechaInicia($cataudienciasDto->getFechaInicia());
                $CataudienciasDTO->setFechaVigencia($cataudienciasDto->getFechaVigencia());
                //$CataudienciasDTO->setFinSemana($cataudienciasDto->getFinSemana());
                $CataudienciasDTO->setAudienciaInicial($cataudienciasDto->getAudienciaInicial());
                //$CataudienciasDTO->setMinDuracion($cataudienciasDto->getMinDuracion());
                //$CataudienciasDTO->setMaxDuracion($cataudienciasDto->getMaxDuracion());
                //$CataudienciasDTO->setHolgura($cataudienciasDto->getHolgura());
                //$CataudienciasDTO->setMinHorasDesahogar($cataudienciasDto->getMinHorasDesahogar());
                //$CataudienciasDTO->setMaxHorasDesahogar($cataudienciasDto->getMaxHorasDesahogar());
                $CataudienciasDTO = $CataudienciasDAO->updateCataudiencias($CataudienciasDTO, $proveedor);
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }

        if ($error == false) {

            $proveedor->execute("COMMIT");
            //$respuesta = array("Estatus" => "Error", "Mensaje" => "Se ha agregado correctamente");
            $respuesta = array("totalCount" => "1", "cveCataudiencia" => $idcataudiencia, "estatus" => "ok", "mensaje" => "Se ha modificado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            //$respuesta = array("Estatus" => "Error","totalCount" => "1", "Mensaje" => "Ocrrio un error al gardar el beneficio");
            // echo "Ocurrio un error al agregar";
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al modificar");
        }
        $proveedor->close();

        return $respuesta;
    }

    public function desactivarmarcados($id, $array_cadena2, $proveedor) {
        //funcion para desactivar
        $AutoresaudienciasController15 = new AutoresaudienciasController();
        $AutoresaudienciasDTO1 = new AutoresaudienciasDTO();
        $AutoresaudienciasDTO1->setCveCatAudiencia($id);
        $AutoresaudienciasDTO1->setActivo("S");
        //$AutoresaudienciasDTO1->setCveGrupo($array2);
        $AutoresaudienciasDTO1 = $AutoresaudienciasController15->selectAutoresaudiencias($AutoresaudienciasDTO1);

        foreach ($AutoresaudienciasDTO1 as $Autoresa1) {
            $activado = false;
            $CveGrupo = $Autoresa1->getCveGrupo();
            $IdAutorAudiencia = $Autoresa1->getIdAutorAudiencia();

            foreach ($array_cadena2 as $arrayn) {
                if ($CveGrupo == $arrayn) {
                    $activado = true;
                }
            }

            if (!$activado) {
                //echo "quitar".$CveGrupo;            
                $AutoresaudienciasController7 = new AutoresaudienciasController();
                $AutoresaudienciasDTO7 = new AutoresaudienciasDTO();
                $AutoresaudienciasDTO7->setActivo("N");
                $AutoresaudienciasDTO7->setCveCatAudiencia($id);
                $AutoresaudienciasDTO7->setCveGrupo($CveGrupo);
                $AutoresaudienciasDTO7->setIdAutorAudiencia($IdAutorAudiencia);
                $AutoresaudienciasDTO7 = $AutoresaudienciasController7->updateAutoresaudiencias($AutoresaudienciasDTO7, $proveedor);
            }
        }
        //fin desactivar    
    }
    
    public function desactivarmarcadosdistrito($id, $array_distrito2, $proveedor,$paramdistrito,$fechaserver) {
        //funcion para desactivar
        $AudienciasdistritosController15 = new AudienciasdistritosController();
        $AudienciasdistritosDTO1 = new AudienciasdistritosDTO();
        $AudienciasdistritosDTO1->setCveCatAudiencia($id);
        $AudienciasdistritosDTO1->setActivo("S");
        //$AutoresaudienciasDTO1->setCveGrupo($array2);
        $AudienciasdistritosDTO1 = $AudienciasdistritosController15->selectAudienciasdistritos($AudienciasdistritosDTO1);
        
        if($AudienciasdistritosDTO1!="")
        {    
            foreach ($AudienciasdistritosDTO1 as $Distrito1) {
            $activado = false;
            $CveDistrito = $Distrito1->getCveDistrito();
            $IdAudienciaDistrito = $Distrito1->getIdAudienciaDistrito();

            foreach ($array_distrito2 as $arrayn) {
                if ($CveDistrito == $arrayn) {
                    $activado = true;
                }
            }

            if (!$activado) {
                //echo "quitar".$CveDistrito;            
                
                $AudienciasdistritosController7 = new AudienciasdistritosController();
                $AudienciasdistritosDTO7 = new AudienciasdistritosDTO();
                $AudienciasdistritosDTO7->setMaxDuracion($paramdistrito["maxDuracion"]);
                $AudienciasdistritosDTO7->setMinDuracion($paramdistrito["minDuracion"]);
                $AudienciasdistritosDTO7->setHolgura($paramdistrito["holgura"]);
                $AudienciasdistritosDTO7->setMaxHorasDesahogar($paramdistrito["maxHorasDesahogar"]);
                $AudienciasdistritosDTO7->setMinHorasDesahogar($paramdistrito["minHorasDesahogar"]);
                $AudienciasdistritosDTO7->setFinSemana($paramdistrito["finSemana"]);
                $AudienciasdistritosDTO7->setActivo($paramdistrito["activo"]);
                $AudienciasdistritosDTO7->setCveCatAudiencia($id);
                $AudienciasdistritosDTO7->setCveDistrito($CveDistrito);
                $AudienciasdistritosDTO7->setIdAudienciaDistrito($IdAudienciaDistrito);
                $AudienciasdistritosDTO7->setFechaActualizacion($fechaserver);
                print_r($AudienciasdistritosDTO7);
                $AudienciasdistritosDTO7 = $AudienciasdistritosController7->updateAudienciasdistritos($AudienciasdistritosDTO7, $proveedor);
            }
        }
        }
        //fin desactivar    
    }

//
//public function updatecataudienciasdistritos($cataudienciasDto,$paramSession,$paramdistrito,$proveedor=null){
//
//    $proveedor = new Proveedor('mysql', 'sigejupe');
//    $proveedor->connect();
//    $fechaserver=$proveedor->getfechaActual();
//    $id=$cataudienciasDto->getcveCatAudiencia();
//    $proveedor->execute("BEGIN");
//    $respuesta = array();
//    $error=false;
//    $mensaje = "";
//    $idcataudiencia=0;
//    $sientra=1;
//    $array_cadena=array();
//    $AudienciasdistritosController=new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
//    $AudienciasdistritosDTO=new AudienciasdistritosDTO();
//    $AudienciasdistritosDTO->setCveCatAudiencia($id);
//    $AudienciasdistritosDTO->setActivo("S");
//    $AudienciasdistritosDTO=$AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO);    
//    $modaudienciasdistritos=5;
//    $agdaudienciasdistritos=5;
//    //print_r($AudienciasdistritosDTO);
//    
//    if($AudienciasdistritosDTO=="")
//    {
//        
//        $AudienciasdistritosController=new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
//        $AudienciasdistritosDTO=new AudienciasdistritosDTO();
//        $AudienciasdistritosDTO->setCveCatAudiencia($id);
//        $AudienciasdistritosDTO->setHolgura($paramdistrito["holgura"]);
//        $AudienciasdistritosDTO->setMinDuracion($paramdistrito["minDuracion"]);
//        $AudienciasdistritosDTO->setMaxDuracion($paramdistrito["maxDuracion"]);
//        $AudienciasdistritosDTO->setCveDistrito($paramdistrito["cveDistrito"]);
//        $AudienciasdistritosDTO->setActivo("S");
//        
//        $agdaudienciasdistritos=$AudienciasdistritosDTO=$AudienciasdistritosController->insertAudienciasdistritos($AudienciasdistritosDTO,$proveedor);
//
//    }
//    else
//    {    
//        $AudienciasdistritosDTO[0]->setActivo("S");
//        $AudienciasdistritosDTO[0]->setHolgura($paramdistrito["holgura"]);
//        $AudienciasdistritosDTO[0]->setMinDuracion($paramdistrito["minDuracion"]);
//        $AudienciasdistritosDTO[0]->setMaxDuracion($paramdistrito["maxDuracion"]);
//        $AudienciasdistritosDTO[0]->setCveDistrito($paramdistrito["cveDistrito"]);
//        $modaudienciasdistritos=$AudienciasdistritosDTOaux = $AudienciasdistritosController->updateAudienciasdistritos($AudienciasdistritosDTO[0], $proveedor); 
//    }
//        if($modaudienciasdistritos!=5 || $agdaudienciasdistritos!=5)
//        {
//            $AutoresaudienciasController=new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
//            $AutoresaudienciasDTO=new AutoresaudienciasDTO();
//            $AutoresaudienciasDTO->setCveCatAudiencia($id); 
//            $AutoresaudienciasDTO->setActivo("S"); 
//            $AutoresaudienciasDTO=$AutoresaudienciasController->selectAutoresaudiencias($AutoresaudienciasDTO);        
//
//            if($AutoresaudienciasDTO=="")
//            {
//                
//                $sientra=5;
//                
//                $array_cadena=explode(',', $paramdistrito["cadena"]);
//
//                //esta linea cuenta cuantos elementos tiene nuestro arreglo
//                $count = count($array_cadena);        
//
//                // Aqui va a insertar un insert por cada uno de los elementos contados anteriormente
//                for($j = 0; $j <$count; $j++)
//                {
//                    //traigo los elementos de la lista y se los asigno a la variable idtienda
//                    $cad = $array_cadena[$j];
//
//                    $AutoresaudienciasController=new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
//                    $AutoresaudienciasDTO=new AutoresaudienciasDTO();
//                    $AutoresaudienciasDTO->setActivo("S");
//                    $AutoresaudienciasDTO->setCveCatAudiencia($id);
//                    $AutoresaudienciasDTO->setCveGrupo($cad);
//                    $AutoresaudienciasDTO=$AutoresaudienciasController->insertAutoresaudiencias($AutoresaudienciasDTO, $proveedor);                 
//                }
//            }
//            else
//            {
//                $sientra=5;
//                $array_cadena=$AutoresaudienciasDTO;
//                    
//                //esta linea cuenta cuantos elementos tiene nuestro arreglo
//                $count = count($array_cadena);        
//
//                for($j = 0; $j <$count; $j++)
//                {            
//                    $cad = $array_cadena[$j];
//                    $num56=$cad->getIdAutorAudiencia();
//
//                    $AutoresaudienciasController2=new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
//                    $AutoresaudienciasDTO2=new AutoresaudienciasDTO();
//                    $AutoresaudienciasDTO2->setIdAutorAudiencia($num56);
//                    $AutoresaudienciasDTO2->setActivo("N");
//                    $AutoresaudienciasDTO2=$AutoresaudienciasController2->updateAutoresaudiencias($AutoresaudienciasDTO2, $proveedor);                 
//                }
//                
//                $array_cadena=explode(',', $paramdistrito["cadena"]);
//                
//                //esta linea cuenta cuantos elementos tiene nuestro arreglo
//                $count = count($array_cadena);        
//
//                // Aqui va a insertar un insert por cada uno de los elementos contados anteriormente
//                for($j = 0; $j <$count; $j++)
//                {
//                    //traigo los elementos de la lista y se los asigno a la variable idtienda
//                    $cad = $array_cadena[$j];
//
//                    $AutoresaudienciasController=new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
//                    $AutoresaudienciasDTO=new AutoresaudienciasDTO();
//                    $AutoresaudienciasDTO->setActivo("S");
//                    $AutoresaudienciasDTO->setCveCatAudiencia($id);
//                    $AutoresaudienciasDTO->setCveGrupo($cad);
//                    $AutoresaudienciasDTO=$AutoresaudienciasController->insertAutoresaudiencias($AutoresaudienciasDTO, $proveedor);                 
//                }
//                
//            }
//            
//            
//                if($sientra=5)
//                {
//                    $CataudienciasDAO = new CataudienciasDAO();
//                    $CataudienciasDTO= new CataudienciasDTO();
//                    $CataudienciasDTO->setActivo("S");
//                    $CataudienciasDTO->setCveCatAudiencia($id);
//                    $CataudienciasDTO->setDesCatAudiencia($cataudienciasDto->getDesCatAudiencia());
//                    $CataudienciasDTO->setCveNaturaleza($cataudienciasDto->getCveNaturaleza());
//                    $CataudienciasDTO->setCveEtapaProcesal($cataudienciasDto->getCveEtapaProcesal());
//                    $CataudienciasDTO->setCveTipoAudiencia($cataudienciasDto->getCveTipoAudiencia());
//                    $CataudienciasDTO->setCausa($cataudienciasDto->getCausa());
//                    $CataudienciasDTO->setCveCodigo($cataudienciasDto->getCveCodigo());
//                    $CataudienciasDTO->setFechaInicia($cataudienciasDto->getFechaInicia());
//                    $CataudienciasDTO->setFechaVigencia($cataudienciasDto->getFechaVigencia());
//                    $CataudienciasDTO->setFinSemana($cataudienciasDto->getFinSemana());
//                    $CataudienciasDTO->setAudienciaInicial($cataudienciasDto->getAudienciaInicial());
//                    $CataudienciasDTO->setMinDuracion($cataudienciasDto->getMinDuracion());
//                    $CataudienciasDTO->setMaxDuracion($cataudienciasDto->getMaxDuracion());
//                    $CataudienciasDTO->setHolgura($cataudienciasDto->getHolgura());
//                    $CataudienciasDTO->setMinHorasDesahogar($cataudienciasDto->getMinHorasDesahogar());
//                    $CataudienciasDTO->setMaxHorasDesahogar($cataudienciasDto->getMaxHorasDesahogar());
//                    $CataudienciasDTO= $CataudienciasDAO->updateCataudiencias($CataudienciasDTO,$proveedor);
//
//                }
//                else
//                {
//                    $error=true;
//                }
//
//
//        }
//        else{
//            $error=true;
//        }
//        
//    if ($error == false) {        
//        
//        $proveedor->execute("COMMIT");
//        //$respuesta = array("Estatus" => "Error", "Mensaje" => "Se ha agregado correctamente");
//        $respuesta = array("totalCount" => "1", "cveCataudiencia" => $idcataudiencia, "estatus" => "ok", "mensaje" => "Se ha modificado correctamente");
//    } else {
//        
//        $proveedor->execute("ROLLBACK");
//        //$respuesta = array("Estatus" => "Error","totalCount" => "1", "Mensaje" => "Ocrrio un error al gardar el beneficio");
//       // echo "Ocurrio un error al agregar";
//        $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al modificar");
//    }
//    $proveedor->close();
//      
//    return $respuesta;
//}



    public function eliminaraudienciasdistritos($cataudienciasDto, $paramSession, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $cataudienciasDto->getcveCatAudiencia();
        $proveedor->execute("BEGIN");
        $respuesta = array();
        $error = false;
        $mensaje = "";
        $idcataudiencia = 0;
        $array_cadena = array();
        $moaudienciasdistritos = 5;
        $AudienciasdistritosController = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
        $AudienciasdistritosDTO = new AudienciasdistritosDTO();
        $AudienciasdistritosDTO->setCveCatAudiencia($id);
        $AudienciasdistritosDTO->setActivo("S");
        $AudienciasdistritosDTO = $AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO);
        $estaono = "";
        if ($AudienciasdistritosDTO == "") {
            $moaudienciasdistritos = 6;
        } else {
            
            $array_distrito = $AudienciasdistritosDTO;
            
            //esta linea cuenta cuantos elementos tiene nuestro arreglo
                $count2 = count($array_distrito);

                for ($j = 0; $j < $count2; $j++) {
                    $cad = $array_distrito[$j];
                    $num56 = $cad->getIdAudienciaDistrito();

                    $AudienciasdistritosController2 = new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
                    $AudienciasdistritosDTO2 = new AudienciasdistritosDTO();
                    $AudienciasdistritosDTO2->setIdAudienciaDistrito($num56);
                    $AudienciasdistritosDTO2->setActivo("N");
                    $moaudienciasdistritos = $AudienciasdistritosDTO2 = $AudienciasdistritosController2->updateAudienciasdistritos($AudienciasdistritosDTO2, $proveedor);
                }
            
//            $AudienciasdistritosDTO[0]->setActivo("N");
//            $moaudienciasdistritos = $AudienciasdistritosDTOaux = $AudienciasdistritosController->updateAudienciasdistritos($AudienciasdistritosDTO[0], $proveedor);

            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(296); // insercion de SANCION 
            $bitacoraDTO->setFechaMovimiento($fechaserver); // 
            $dtoToJson = new DtoToJson($AudienciasdistritosDTO2);
            //$dtoToJson->toJson("INSERCION DE AUDIENCIAS DISTRITOS");
            $bitacoraDTO->setObservaciones("UPDATE DE AUDIENCIAS DISTRITOS: " . $dtoToJson->toJson("UPDATE")); //
            $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $insertabeneficios1 = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
        }

        if ($moaudienciasdistritos != 5) {

            $AutoresaudienciasController = new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
            $AutoresaudienciasDTO = new AutoresaudienciasDTO();
            $AutoresaudienciasDTO->setCveCatAudiencia($id);
            $AutoresaudienciasDTO->setActivo("S");
            $AutoresaudienciasDTO = $AutoresaudienciasController->selectAutoresaudiencias($AutoresaudienciasDTO);

            if ($AutoresaudienciasDTO == "") {
                $estaono = "no esta";

                //echo "entro";
            } else {
                //echo "no";
                $array_cadena = $AutoresaudienciasDTO;

                //esta linea cuenta cuantos elementos tiene nuestro arreglo
                $count = count($array_cadena);

                for ($j = 0; $j < $count; $j++) {
                    $cad = $array_cadena[$j];
                    $num56 = $cad->getIdAutorAudiencia();

                    $AutoresaudienciasController2 = new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
                    $AutoresaudienciasDTO2 = new AutoresaudienciasDTO();
                    $AutoresaudienciasDTO2->setIdAutorAudiencia($num56);
                    $AutoresaudienciasDTO2->setActivo("N");
                    $estaono = $AutoresaudienciasDTO2 = $AutoresaudienciasController2->updateAutoresaudiencias($AutoresaudienciasDTO2, $proveedor);
                }

                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(297); // insercion de SANCION 
                $bitacoraDTO->setFechaMovimiento($fechaserver); // 
                $dtoToJson = new DtoToJson($estaono);
                //$dtoToJson->toJson("INSERCION DE AUDIENCIAS DISTRITOS");
                $bitacoraDTO->setObservaciones("UPDATE DE AUTORES AUDIENCIAS: " . $dtoToJson->toJson("UPDATE")); //
                $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                $insertabeneficios2 = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            }

            if ($estaono != "") {
                $CataudienciasDAO = new CataudienciasDAO();
                $CataudienciasDTO = new CataudienciasDTO();
                $CataudienciasDTO->setActivo("N");
                $CataudienciasDTO->setCveCatAudiencia($id);
                $CataudienciasDTO = $CataudienciasDAO->updateCataudiencias($CataudienciasDTO, $proveedor);

                if ($CataudienciasDTO != "") {
                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(298); // insercion de SANCION 
                    $bitacoraDTO->setFechaMovimiento($fechaserver); // 
                    $dtoToJson = new DtoToJson($CataudienciasDTO);
                    //$dtoToJson->toJson("INSERCION DE AUDIENCIAS DISTRITOS");
                    $bitacoraDTO->setObservaciones("UPDATE DE CATAUDIENCIAS: " . $dtoToJson->toJson("UPDATE")); //
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                    $insertabeneficios3 = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                } else {
                    $error = true;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }

        if ($error == false) {

            $proveedor->execute("COMMIT");
            //$respuesta = array("Estatus" => "Error", "Mensaje" => "Se ha agregado correctamente");
            $respuesta = array("totalCount" => "1", "estatus" => "ok", "mensaje" => "Se ha eliminado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            //$respuesta = array("Estatus" => "Error","totalCount" => "1", "Mensaje" => "Ocrrio un error al gardar el beneficio");
            // echo "Ocurrio un error al agregar";
            $respuesta = array("totalCount" => "0", "estatus" => "error", "mensaje" => "Ocurrio un error al eliminar");
        }
        $proveedor->close();

        return $respuesta;
    }

    public function insertCataudiencias($CataudienciasDto, $proveedor = null) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();
        $CataudienciasDto = $CataudienciasDao->insertCataudiencias($CataudienciasDto, $proveedor);
        return $CataudienciasDto;
    }

    public function updateCataudiencias($CataudienciasDto, $proveedor = null) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();
//$tmpDto = new CataudienciasDTO();
//$tmpDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto,$proveedor);
//if($tmpDto!=""){//$CataudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $CataudienciasDto = $CataudienciasDao->updateCataudiencias($CataudienciasDto, $proveedor);
        return $CataudienciasDto;
//}
//return "";
    }

    public function deleteCataudiencias($CataudienciasDto, $proveedor = null) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasDao = new CataudienciasDAO();
        $CataudienciasDto = $CataudienciasDao->deleteCataudiencias($CataudienciasDto, $proveedor);
        return $CataudienciasDto;
    }

}

?>