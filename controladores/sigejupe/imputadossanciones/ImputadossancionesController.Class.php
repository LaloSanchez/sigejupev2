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
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossanciones/ImputadossancionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/beneficioses/BeneficiosesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/beneficioses/BeneficiosesController.Class.php");    // para registrar un nevo beneficio

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossanciones/TipossancionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sentenciasapeladas/SentenciasapeladasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sentenciasapeladas/SentenciasapeladasDAO.Class.php");

class ImputadossancionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadossanciones($ImputadossancionesDto) {
        $ImputadossancionesDto->setidImputadoSancion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getidImputadoSancion()))));
        $ImputadossancionesDto->setidImputadoSentencia(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getidImputadoSentencia()))));
        $ImputadossancionesDto->setcveTipoSancion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getcveTipoSancion()))));
        $ImputadossancionesDto->setanioPrision(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getanioPrision()))));
        $ImputadossancionesDto->setmesPrision(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getmesPrision()))));
        $ImputadossancionesDto->setdiasPrision(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getdiasPrision()))));
        $ImputadossancionesDto->setcantidadMulta(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getcantidadMulta()))));
        $ImputadossancionesDto->setcantidadReparacion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getcantidadReparacion()))));
        $ImputadossancionesDto->setamonestacion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getamonestacion()))));
        $ImputadossancionesDto->setespecificacion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getespecificacion()))));
        $ImputadossancionesDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getfechaInicio()))));
        $ImputadossancionesDto->setfechaTermina(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getfechaTermina()))));
        $ImputadossancionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getactivo()))));
        $ImputadossancionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getfechaRegistro()))));
        $ImputadossancionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadossancionesDto->getfechaActualizacion()))));
        return $ImputadossancionesDto;
    }

    public function selectImputadossanciones($ImputadossancionesDto, $proveedor = null) {
        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();
        $ImputadossancionesDto = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto, $proveedor);

        return $ImputadossancionesDto;
    }

    public function imputadossanciones($ImputadossancionesDto, $proveedor = null) {
        $ImputadossancionesDTO = new ImputadossancionesDTO();
        $ImputadossancionesDao = new ImputadossancionesDAO();
        $especificacion = "";
        $cveTipoSancion = "";
        $fechaInicio = "";
        $fechaTermina = "";
        $cantidadMulta = "";
        $consulta = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto);
        $sancionesE = "";
        $sancionesE = array();
        $sancionesEnvia = "";
        $sancionesEnvia = array();
        $respuesta = "";
        $respuesta = array();
        $formato = 0.00;
        if ($consulta != "") {
            foreach ($consulta as $imputadosancion) {
                $especificacion = utf8_encode($imputadosancion->getespecificacion());
                $cveTipoSancion = utf8_encode($imputadosancion->getCveTipoSancion());
                $fechaInicio = utf8_encode($imputadosancion->getFechaInicio());
                $fechaTermina = utf8_encode($imputadosancion->getFechaTermina());
                $cantidadMulta = utf8_encode($imputadosancion->getCantidadMulta());
                $formato = round($cantidadMulta, 2);
            }
            $sancionesE = array("especificacion" => $especificacion, "cveTipoSancion" => $cveTipoSancion, "fechaInicio" => $fechaInicio, "fechaTermina" => $fechaTermina, "cantidadMulta" => $formato);

            array_push($sancionesEnvia, $sancionesE);
            $respuesta = array("TotalCountImputadossanciones" => count($sancionesEnvia), "datosImputadosanciones" => $sancionesEnvia, "estatus" => "ok", "mensaje" => "Registros Encontrados");
        } else {
            print_r("no se encontraron imptadossanciones");
        }
        return $respuesta;
    }

    public function eliminacionlogica($ImputadossancionesDto, $proveedor = null) {

        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("select CURDATE() as fecha,CURTIME() as hora;");
        $st = $proveedor->fetch_object($proveedor->stmt);
        $fechaserver = $st[0]['fecha'] . " " . $st[0]['hora'];
        $elimino = false;
        $error = false;
        $ImputadossancionesDto->setFechaActualizacion($fechaserver);
        $ImputadossancionesDto = $ImputadossancionesDao->updateImputadossanciones($ImputadossancionesDto, $proveedor);



        if ($ImputadossancionesDto != "") {
            $elimino = true;

            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(281); // ELIMINACION  de sentencia 
            $bitacoraDTO->setFechaMovimiento($fechaserver); //
            $dtoToJson = new DtoToJson($ImputadossancionesDto);
            $dtoToJson->toJson("ELIMINACION DE SANCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION")); //
            $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
            $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
            $estb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            if ($estb == "") {
                $error = true;
            }
        } else {
            $error = true;
        }


        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }




        $proveedor->close();



        return $elimino;
    }

    public function selectSancionessentencias($ImputadossancionesDto, $dts) {

        $imputado = "";
        $ofendido = "";
        $delito = "";
        $tipodesancion = "";
        $sancion = "";
        $datos = [];
        $contdat = 0;

        $causa = $dts['causa'];
        $num = $dts['numero'];
        $anio = $dts['anio'];
        $fechaInicial = $dts['fechainicial'];
        $fechafin = $dts['fechadfinal'];
        /////////////////////////////////////////////////////////////////////id carpeta judicial
        $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
        $CarpetasjudicialesDTO->setAnio($anio);
        $CarpetasjudicialesDTO->setActivo('S');
        $CarpetasjudicialesDTO->setNumero($num);
        $CarpetasjudicialesDTO->setCveJuzgado($_SESSION['cveAdscripcion']);
        $CarpetasjudicialesDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $CarpetasjudicialesDTO->setCveTipoCarpeta($causa);
        $CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasjudicialesDTO);
        $idcarpeta = 0;
        if ($CarpetasjudicialesDTO != "") {
            foreach ($CarpetasjudicialesDTO as $tt) {
                $idcarpeta = $tt->getIdCarpetaJudicial();
            }
        }
        if ($idcarpeta != 0) {



            /////////////////////////////////////////////////////////////////////// fin idcarpeta
            /////////////////////////////////consulta ofendididos carpetas con id de carpeta
            $impofeDAO = new ImpofedelcarpetasDAO;
            $impofeDTO = new ImpofedelcarpetasDTO;
            $impofeDTO->setIdCarpetaJudicial($idcarpeta);
            $impofeDTO->setActivo('S');
            $consda = $impofeDAO->selectImpofedelcarpetas($impofeDTO);
            $fechaInicial = $fechaInicial[6] . $fechaInicial[7] . $fechaInicial[8] . $fechaInicial[9] . "-" . $fechaInicial[3] . $fechaInicial[4] . "-" . $fechaInicial[0] . $fechaInicial[1];
            $fechafin = $fechafin[6] . $fechafin[7] . $fechafin[8] . $fechafin[9] . "-" . $fechafin[3] . $fechafin[4] . "-" . $fechafin[0] . $fechafin[1];
            $idsenten = 0;
            if ($consda != "") {

                foreach ($consda as $colcs) {

                    $dineromulta = "";
                    $anio = "";
                    $mes = "";
                    $dia = "";
                    $dinrepara = "";
                    $amonesta = "";
                    $delito = "";
                    $imputado = $colcs->getIdImputadoCarpeta();
                    $ofendido = $colcs->getIdOfendidoCarpeta();
                    $delitp = $colcs->getIdDelitoCarpeta();

                    $delitoscarpetasDto = new DelitoscarpetasDTO();
                    $delitoscarpetasDto->setIdDelitoCarpeta($delitp);
                    // $delitoscarpetasDto->setActivo("S");
                    $delitoscarpetasDao = new DelitoscarpetasDAO();
                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "");
                    //var_dump($delitoscarpetasDto);
                    if ($delitoscarpetasDto != "") {
                        foreach ($delitoscarpetasDto as $dca) {
                            $delitosDto = new DelitosDTO();
                            $delitosDto->setCveDelito($dca->getcveDelito());
                            //$delitosDto->setActivo('S');

                            $delitosDao = new DelitosDAO();
                            $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);

                            foreach ($delitosDto as $descdel) {
                                $delito = $descdel->getDesDelito();
                            }
                        }
                    }



                    $ofendDAO = new OfendidoscarpetasDAO();
                    $ofendDTO = new OfendidoscarpetasDTO();
                    $ofendDTO->setIdOfendidoCarpeta($ofendido);
                    $consof = $ofendDAO->selectOfendidoscarpetas($ofendDTO);
                    foreach ($consof as $tg) {
                        $ofendido = $tg->getPaterno() . ' ' . $tg->getMaterno() . ' ' . $tg->getNombre();
                    }

                    $impDAO = new ImputadoscarpetasDAO();
                    $impDTO = new ImputadoscarpetasDTO();
                    $impDTO->setIdImputadoCarpeta($imputado);
                    $cv = $impDAO->selectImputadoscarpetas($impDTO);
                    foreach ($cv as $ttc) {
                        $imputado = $ttc->getPaterno() . ' ' . $ttc->getMaterno() . ' ' . $ttc->getNombre();
                    }


                    // echo "<br>cons--->".$colcs->getIdImpOfeDelCarpeta();
                    ///////////////////////quien tiene sentencia y que se encuentre en rango de fechas
                    $orden = "and fechaRegistro>='" . $fechaInicial . " 00:00:00' and fechaRegistro<='" . $fechafin . " 23:59:59'";
                    $impsentDTO = new ImputadossentenciasDTO();
                    $impsancDAO = new ImputadossentenciasDAO();
                    $impsentDTO->setIdImpOfeDelCarpeta($colcs->getIdImpOfeDelCarpeta());
                    $impsentDTO->setActivo('S');
                    $con = $impsancDAO->selectImputadossentencias($impsentDTO, $orden);


                    if ($con != "") {
                        foreach ($con as $dd) {
                            $idsenten = $dd->getIdImputadoSentencia();
                        }



                        ////////////////////////consultamos sus sanciones
                        $ImputadossancionesDto = new ImputadossancionesDTO();
                        $ImputadossancionesDAO = new ImputadossancionesDAO();
                        $ImputadossancionesDto->setIdImputadoSentencia($idsenten);
                        $ImputadossancionesDto->setActivo('S');
                        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
                        $ImputadossancionesDto = $ImputadossancionesDAO->selectImputadossanciones($ImputadossancionesDto);
                        $descsanc = " ";

                        $missanc = [];
                        $contmiss = 0;
                        if ($ImputadossancionesDto != "") {///////////////tipo sancion
                            foreach ($ImputadossancionesDto as $rosanc) {
                                $idsanc = $rosanc->getCveTipoSancion();
                                $dineromulta = $rosanc->getCantidadMulta();
                                $anio = $rosanc->getAnioPrision();
                                $mes = $rosanc->getMesPrision();
                                $dia = $rosanc->getDiasPrision();
                                $dinrepara = $rosanc->getCantidadReparacion();
                                $amonesta = $rosanc->getAmonestacion();

                                $tipossanDTO = new TipossancionesDTO();
                                $tipossanDAO = new TipossancionesDAO();
                                $tipossanDTO->setCveTipoSancion($idsanc);
                                $dess = $tipossanDAO->selectTipossanciones($tipossanDTO);

                                if ($dess != "") {
                                    foreach ($dess as $rowttsa) {
                                        $tipodesancion = $rowttsa->getDesTipoSancion();
                                    }
                                }

                                $missanc[$contmiss] = array('aniop' => $anio,
                                            'mesp' => $mes,
                                            'diap' => $dia,
                                            'mmulta' => number_format($dineromulta, 2),
                                            'dinrepara' => number_format($dinrepara, 2),
                                            'amonestad0' => $amonesta,
                                            'tiposanc' => $idsanc
                                );
                                $contmiss++;
                            }
                        }


                        $datos[$contdat] = array(
                            'imputado' => $imputado,
                            'ofendido' => $ofendido,
                            'tipsanc' => $tipodesancion,
                            'delito' => $delito,
                            'sanciones' => $missanc
                        );

                        $contdat++;
                    }
                    ///////////////////////fin quien tiene sentencia y que se encuentre en rango de fechas
                }
            }
        } else {///////////no existe carpeta
        }


        if (count($datos) == 0) {
            $datos[0] = array('totalCount' => 0);
        } else {
            $datos = array('totalCount' => $contdat, 'data' => $datos);
        }
//////uno solo
//$impofeDTO->setIdImpOfeDelCarpeta();
/// muchos



        return $datos;
    }

    public function selectImputadossancionesestatus($ImputadossancionesDto, $proveedor = null) {
        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();
        $orden = "ORDER BY cveTipoSancion DESC";
        $ImputadossancionesDto = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto, $orden, $proveedor);

        return $ImputadossancionesDto;
    }

    public function guardarsanciones($ImputadossancionesDto, $arreglo) {
        $validaImputadossancionesDTO = "";

        $idactuacion = $arreglo['idActuacion'];

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $ImputadossancionesDto->getIdImputadoSancion();
        $insrt = "";

        $error = false;
        @$sancionesarr = $arreglo['sanciones'];
        $idsentencia = "";
        @$opcion = $arreglo['opcion'];
        @$apelaciones = $arreglo['arrapelacion'];




        $activarapelacion = '';

        if (count(@$apelaciones) > 1) {


            for ($contap = 0; $contap < count($apelaciones); $contap++) {

                if ($apelaciones[$contap][5] == 1) {//activar
                    $activarapelacion = 'S';
                } else {//Inacttivar
                    $activarapelacion = 'N';
                }

                if ($apelaciones[$contap][0] != 0 && $apelaciones[$contap][2] != 0 && $apelaciones[$contap][3] != 0) { ////tiene apelaciones 
                    $ImputadossentenciasDTO2 = new ImputadossentenciasDTO();
                    $ImputadossentenciasDAO2 = new ImputadossentenciasDAO();
                    $ImputadossentenciasDAO = new ImputadossentenciasDAO();

//$ImputadossentenciasDTO2->setApelacion('S');
                    $ImputadossentenciasDTO2->setIdActuacion($idactuacion);
                    $ImputadossentenciasDTO2->setIdImpOfeDelCarpeta($apelaciones[$contap][0]);
                    $RegImputados = $ImputadossentenciasDAO2->selectImputadossentencias($ImputadossentenciasDTO2);



                    if ($RegImputados != "") {
                        $idimputsnc = "";
                        foreach ($RegImputados as $cmb) {
                            $idimputsnc = $cmb->getidImputadoSentencia();
                        }



                        $ImputadossentenciasDTO3 = new ImputadossentenciasDTO();

                        $ImputadossentenciasDTO3->setApelacion('S');
                        $ImputadossentenciasDTO3->setIdImputadoSentencia($idimputsnc);
                        $ImputadossentenciasDTO3 = $ImputadossentenciasDAO->updateImputadossentencias($ImputadossentenciasDTO3, $proveedor);


                        if ($ImputadossentenciasDTO3 != "") {


                            $sentenciasApeladasDTO = new sentenciasApeladasDTO();
                            $sentenciasApeladasDAO = new sentenciasApeladasDAO();
                            $sentenciasApeladasDTO->setIdImputadoSentencia($idimputsnc);
                            $sentenciasApeladasDTO->setActivo('S');
                            $sentapela = $sentenciasApeladasDAO->selectSentenciasapeladas($sentenciasApeladasDTO);
                            $sentenciasApeladasDTO2 = new sentenciasApeladasDTO();
                            $sentenciasApeladasDAO2 = new sentenciasApeladasDAO();

                            if ($sentapela == "") {

                                $sentenciasApeladasDTO2->setIdImputadoSentencia($idimputsnc);
                                $sentenciasApeladasDTO2->setActivo('S');
                                $sentenciasApeladasDTO2->setcveSentido($apelaciones[$contap][1]);
                                $sentenciasApeladasDTO2->setnumToca($apelaciones[$contap][2]);
                                $sentenciasApeladasDTO2->setanioToca($apelaciones[$contap][3]);
                                $sentenciasApeladasDTO2->setcveSala($apelaciones[$contap][4]);
                                $sentencias = $sentenciasApeladasDAO2->insertSentenciasapeladas($sentenciasApeladasDTO2, $orden = "", $proveedor);


                                if ($sentencias != "") {

                                    $bitacoraDTO = new BitacoramovimientosDTO();
                                    $bitacoraCtrl = new BitacoramovimientosController();
                                    $bitacoraDTO->setCveAccion(290); // insercion de SANCION 
                                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                                    $dtoToJson = new DtoToJson($sentencias);
                                    $dtoToJson->toJson("INSERCION DE SENTENCIAS APELADAS");
                                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                                    $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                    $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                                    $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                                    $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                                    if ($insb == "") {
                                        $error = true;
                                    } else {

                                        $error = true;
                                    }
                                }
                            } else {

                                foreach ($sentapela as $valactual) {
                                    $idSentenciaApelada = $valactual->getidSentenciaApelada();
                                }



                                $sentenciasApeladasDTO2->setidSentenciaApelada($idSentenciaApelada);
                                $sentenciasApeladasDTO2->setcveSentido($apelaciones[$contap][1]);
                                $sentenciasApeladasDTO2->setnumToca($apelaciones[$contap][2]);
                                $sentenciasApeladasDTO2->setanioToca($apelaciones[$contap][3]);
                                $sentenciasApeladasDTO2->setcveSala($apelaciones[$contap][4]);
                                $sentenciasApeladasDTO2->setActivo($activarapelacion);
                                $sentenciasApeladasDTO2->setFechaActualizacion($fechaserver);
                                $sentencias = $sentenciasApeladasDAO2->updateSentenciasapeladas($sentenciasApeladasDTO2, $orden = "", $proveedor);

                                if ($sentencias != "") {
                                    if ($activarapelacion == 'S') {


                                        $bitacoraDTO = new BitacoramovimientosDTO();
                                        $bitacoraCtrl = new BitacoramovimientosController();
                                        $bitacoraDTO->setCveAccion(291); // insercion de SANCION 
                                        $bitacoraDTO->setFechaMovimiento($fechaserver); //
                                        $dtoToJson = new DtoToJson($sentencias);
                                        $dtoToJson->toJson("ACTUALIZACION  DE SENTENCIAS APELADAS");
                                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("ACTUALIZACION")); //
                                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                                        $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                                        if ($insb == "") {
                                            $error = true;
                                        } else {

                                            $error = true;
                                        }
                                    } else {

                                        $bitacoraDTO = new BitacoramovimientosDTO();
                                        $bitacoraCtrl = new BitacoramovimientosController();
                                        $bitacoraDTO->setCveAccion(292); // insercion de SANCION 
                                        $bitacoraDTO->setFechaMovimiento($fechaserver); //
                                        $dtoToJson = new DtoToJson($sentencias);
                                        $dtoToJson->toJson("ELIMINACION   DE SENTENCIAS APELADAS");
                                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION")); //
                                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                                        $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                                        if ($insb == "") {
                                            $error = true;
                                        } else {

                                            $error = true;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


        if (@$opcion == 1) {/////////insert individual
            $ImputadossancionesDAO = new ImputadossancionesDAO();
            $ImputadossancionesDTO = new ImputadossancionesDTO();
            $ImputadossancionesDTO->setidImputadoSentencia($arreglo['idsentencia']);
            $ImputadossancionesDTO->setActivo('S');

            $anio = 0;
            $mes = 0;
            $dia = 0;
            $dinero = 0;
            $amonestado = "N";
            $fechi = null;
            $fechf = null;
            $observacionuevo="";

            $ImputadossancionesDTO->setCveTipoSancion($sancionesarr[1]);
            $validaImputadossancionesDTO = new ImputadossancionesDTO();
            
            switch ($sancionesarr[1]) {
                case 1:
                    list($dia1, $mes1, $anio1) = explode("/", $sancionesarr[10]);
                    list($dia2, $mes2, $anio2) = explode("/", $sancionesarr[11]);
                    $anio = $sancionesarr[2];
                    $mes = $sancionesarr[3];
                    $dia = $sancionesarr[4];
                    $fechi = $anio1 . "/" . $mes1 . "/" . $dia1;
                    $fechf = $anio2 . "/" . $mes2 . "/" . $dia2;
                    $ImputadossancionesDTO->setAnioPrision($anio);
                    $ImputadossancionesDTO->setMesPrision($mes);
                    $ImputadossancionesDTO->setDiasPrision($dia);
                    $ImputadossancionesDTO->setFechaInicio($fechi);
                    $ImputadossancionesDTO->setFechaTermina($fechf);

                    break;
                case 2:
                    $dinero = $sancionesarr[5];
                    $ImputadossancionesDTO->setCantidadMulta($dinero);
                    break;
                case 3:
                    $dinero = $sancionesarr[5];
                    $ImputadossancionesDTO->setCantidadReparacion($dinero);
                    break;
                case 4:
                    $amonestado = $sancionesarr[6];
                    $ImputadossancionesDTO->setAmonestacion($amonestado);
                    break;
                case 26:
//                    print_r('case 26');
//                    print_r($ImputadossancionesDTO);
//                    $amonestado = $sancionesarr[6];
//                    $ImputadossancionesDTO->setAmonestacion($amonestado);
                    break;
            
                default:
                    list($dia1, $mes1, $anio1) = explode("/", $sancionesarr[10]);
                    list($dia2, $mes2, $anio2) = explode("/", $sancionesarr[11]);
                    $anio = $sancionesarr[2];
                    $mes = $sancionesarr[3];
                    $dia = $sancionesarr[4];
                    $fechi = $anio1 . "/" . $mes1 . "/" . $dia1;
                    $fechf = $anio2 . "/" . $mes2 . "/" . $dia2;
                    $observacionuevo=$sancionesarr[13];
                    $ImputadossancionesDTO->setEspecificacion($observacionuevo);
                    $ImputadossancionesDTO->setFechaInicio($fechi);
                    $ImputadossancionesDTO->setFechaTermina($fechf);
                    break;
            }

            $validaImputadossancionesDTO->setIdImputadoSentencia($arreglo['idsentencia']);
            $validaImputadossancionesDTO->setCveTipoSancion($sancionesarr[1]);
            $validaImputadossancionesDTO->setActivo('S');
            $validaImputadossancionesDTO = $this->validarImputadossanciones($validaImputadossancionesDTO);
            $validaImputadossancionesDTO = $ImputadossancionesDAO->selectImputadossanciones($validaImputadossancionesDTO);    
            if ($validaImputadossancionesDTO == "") {
                
                $ImputadossancionesDTO->setIdImputadoSentencia($arreglo['idsentencia']);
                $ImputadossancionesDTO->setActivo('S');
                $ImputadossancionesDTO = $this->validarImputadossanciones($ImputadossancionesDTO);
//print_r($ImputadossancionesDTO);
                $validaImputadossancionesDTO = $ImputadossancionesDAO->insertImputadossanciones($ImputadossancionesDTO);


                if ($validaImputadossancionesDTO != "") {

                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(271); // insercion de SANCION 
                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                    $dtoToJson = new DtoToJson($validaImputadossancionesDTO);
                    $dtoToJson->toJson("INSERCION DE SANCION");
                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                    $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                    $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                    $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                    if ($insb == "") {
                        $error = true;
                    } else {
                        return $validaImputadossancionesDTO;
                    }
                } else {

                    $error = true;
                }
            }else{
//                print_r($validaImputadossancionesDTO);
            }
        } else {


            if (count($sancionesarr) > 0) {


                /*
                  1 PRISION
                  2 MULTA
                  3 REPARACION DEL DAÑO
                  4 AMONESTACION PUBLICA
                 */
                $ImputadossentenciasDAO = new ImputadossentenciasDAO();
                for ($a = 0; $a < count($sancionesarr); $a++) {


                    $ImputadossancionesDAO = new ImputadossancionesDAO();
                    $ImputadossancionesDTO = new ImputadossancionesDTO();


                    $ImputadossancionesDTO->setActivo('S');


                    $ImputadossentenciasDTO = new ImputadossentenciasDTO();
                    $ImputadossentenciasDTO->setIdActuacion($idactuacion);
                    $ImputadossentenciasDTO->setActivo('S');




                    $idimpofe = $sancionesarr[$a][0];
                    $idsentencia = 0;
                    $ImputadossentenciasDTO->setIdImpOfeDelCarpeta($idimpofe);

                    
                    $ImputadossentenciasDTO = $ImputadossentenciasDAO->selectImputadossentencias($ImputadossentenciasDTO);

                    if ($ImputadossentenciasDTO != "") {
                        foreach ($ImputadossentenciasDTO as $ims) {
                            $idsentencia = $ims->getIdImputadoSentencia();
                        }

                        if ($idsentencia != 0) {
                            $anio = 0;
                            $mes = 0;
                            $dia = 0;
                            $dinero = 0;
                            $amonestado = "N";
                            $fechi = null;
                            $fechf = null;



                            $ImputadossancionesDTO->setCveTipoSancion($sancionesarr[$a][1]);
                            $validaImputadossancionesDTO = new ImputadossancionesDTO();
                            switch ($sancionesarr[$a][1]) {
                                case 1:
                                    list($dia3, $mes3, $anio3) = explode("/", $sancionesarr[$a][10]);
                                    list($dia4, $mes4, $anio4) = explode("/", $sancionesarr[$a][11]);
                                    $anio = $sancionesarr[$a][2];
                                    $mes = $sancionesarr[$a][3];
                                    $dia = $sancionesarr[$a][4];
                                    $fechi = $anio3 . "/" . $mes3 . "/" . $dia3;
                                    $fechf = $anio4 . "/" . $mes4 . "/" . $dia4;
                                    $ImputadossancionesDTO->setAnioPrision($anio);
                                    $ImputadossancionesDTO->setMesPrision($mes);
                                    $ImputadossancionesDTO->setDiasPrision($dia);
                                    $ImputadossancionesDTO->setFechaInicio($fechi);
                                    $ImputadossancionesDTO->setFechaTermina($fechf);

                                    break;
                                case 2:
                                    $dinero = $sancionesarr[$a][5];
                                    $ImputadossancionesDTO->setCantidadMulta($dinero);
                                    break;
                                case 3:
                                    $dinero = $sancionesarr[$a][5];
                                    $ImputadossancionesDTO->setCantidadReparacion($dinero);
                                    break;
                                case 4:
                                    $amonestado = $sancionesarr[$a][6];
                                    $ImputadossancionesDTO->setAmonestacion($amonestado);
                                    break;
                                case $sancionesarr[$a][1]>=12:
                                    list($dia1, $mes1, $anio1) = explode("/", $sancionesarr[$a][10]);
                                    list($dia2, $mes2, $anio2) = explode("/", $sancionesarr[$a][11]);
                                    $anio = $sancionesarr[$a][2];
                                    $mes = $sancionesarr[$a][3];
                                    $dia = $sancionesarr[$a][4];
                                    $fechi = $anio1 . "/" . $mes1 . "/" . $dia1;
                                    $fechf = $anio2 . "/" . $mes2 . "/" . $dia2;
                                    $observacionuevo=$sancionesarr[$a][13];
                                    $ImputadossancionesDTO->setEspecificacion($observacionuevo);
                                    $ImputadossancionesDTO->setFechaInicio($fechi);
                                    $ImputadossancionesDTO->setFechaTermina($fechf);
                                    break;
                            }



                            $validaImputadossancionesDTO->setIdImputadoSentencia($idsentencia);
                            $validaImputadossancionesDTO->setCveTipoSancion($sancionesarr[$a][1]);
                            $validaImputadossancionesDTO->setActivo('S');
                            $validaImputadossancionesDTO = $this->validarImputadossanciones($validaImputadossancionesDTO);
                            $validaImputadossancionesDTO = $ImputadossancionesDAO->selectImputadossanciones($validaImputadossancionesDTO);
                            if ($validaImputadossancionesDTO == "") {
                                $ImputadossancionesDTO->setIdImputadoSentencia($idsentencia);
                                $ImputadossancionesDTO->setActivo('S');

                                $ImputadossancionesDTO = $this->validarImputadossanciones($ImputadossancionesDTO);

                                $validaImputadossancionesDTO = $ImputadossancionesDAO->insertImputadossanciones($ImputadossancionesDTO);



                                if ($validaImputadossancionesDTO != "") {

                                    $bitacoraDTO = new BitacoramovimientosDTO();
                                    $bitacoraCtrl = new BitacoramovimientosController();
                                    $bitacoraDTO->setCveAccion(271); // insercion de SANCION 
                                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                                    $dtoToJson = new DtoToJson($validaImputadossancionesDTO);
                                    $dtoToJson->toJson("INSERCION DE SANCION");
                                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                                    $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                    $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                                    $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                                    $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                                    if ($insb == "") {
                                        $error = true;
                                    }
                                } else {

                                    $error = true;
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();



        return $validaImputadossancionesDTO;
    }

    public function insertImputadossanciones($ImputadossancionesDto, $proveedor = null) {



        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $ImputadossancionesDto->getIdImputadoSancion();
        $insrt = "";
        $proveedor->execute("BEGIN");

        $error = false;




        if ($id == 0) {///////////ALTA
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesDto->setActivo('S');
            $ImputadossancionesDao = new ImputadossancionesDAO();
            $existe = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto);
            if ($existe == "") {
                $insrt = $ImputadossancionesDto = $ImputadossancionesDao->insertImputadossanciones($ImputadossancionesDto, $proveedor);
                if ($insrt == "") {
                    $error = true;
                }

                $bitacoraDTO = new BitacoramovimientosDTO();

                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(271); // insercion de SANCION 
                $bitacoraDTO->setFechaMovimiento($fechaserver); //
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                $dtoToJson->toJson("INSERCION DE SANCION");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($insb == "") {
                    $error = true;
                }
            }
        } else {////Actualizacion
            $ImputadosDTO = new ImputadossancionesDTO();
            $ImputadosDTO->setAmonestacion($ImputadossancionesDto->getAmonestacion());
            $ImputadosDTO->setAnioPrision($ImputadossancionesDto->getAnioPrision());
            $ImputadosDTO->setCantidadMulta($ImputadossancionesDto->getCantidadMulta());
            $ImputadosDTO->setCantidadReparacion($ImputadossancionesDto->getCantidadReparacion());
            $ImputadosDTO->setMesPrision($ImputadossancionesDto->getMesPrision());
            $ImputadosDTO->setDiasPrision($ImputadossancionesDto->getDiasPrision());
            $ImputadosDTO->setFechaActualizacion($fechaserver);
            $ImputadosDTO->setIdImputadoSancion($id);

            $isDto = $this->validarImputadossanciones($ImputadosDTO);
            $ImputadosDAO = new ImputadossancionesDAO();
            $tb = $ImputadosDAO->updateImputadossanciones($isDto, $proveedor);
            if ($tb == "") {
                $error = true;
            }

            $ImputadossancionesDto = $tb;
            $bitacorDTO = new BitacoramovimientosDTO();
            $bitacorCtrl = new BitacoramovimientosController();
            $bitacorDTO->setCveAccion(279); // insercion de SANCION 
            $bitacorDTO->setFechaMovimiento($fechaserver); //
            $dtoToJson2 = new DtoToJson($tb);
            $dtoToJson2->toJson("ACTUALIZO DE SANCION");
            $bitacorDTO->setObservaciones($dtoToJson2->toJson("ACTUALIZACION")); //
            $bitacorDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacorDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
            $bitacorDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
            $insrt = $bitacorCtrl->insertBitacoramovimientos($bitacorDTO);
            if ($insrt == "") {
                $error = true;
            }
        }


        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();



        return $insrt;
    }

    public function eliminaimputadosybeneficios($imputadossancionesDto, $paramSession, $imputadobeneficionvo, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $proveedor->execute("BEGIN");
        $result_select = "";
        $respuesta = array();
        $error = false;
        $idsancion = $imputadossancionesDto->getIdImputadoSancion();


        $BeneficiosCller = new BeneficiosesController();
        $Beneficiosdto = new BeneficiosesDTO();
        $Beneficiosdto->setIdImputadoSancionNvo($imputadobeneficionvo);
        $result_select = $Beneficiosdto = $BeneficiosCller->selectBeneficioses($Beneficiosdto);

        if ($result_select != "") {
            $idbeneficioES = 0;
            $idimputadosancion = 0;
            foreach ($result_select as $result) {
                $idbeneficioES = $result->getIdBeneficioES();
                $idimputadosancion = $result->getIdImputadoSancion();
            }
            //echo $idbeneficioES."ddddd";
            if ($idbeneficioES != 0) {
                $BeneficiosCller = new BeneficiosesController();
                $Beneficiosdto = new BeneficiosesDTO();
                $Beneficiosdto->setIdBeneficioES($idbeneficioES);
                $Beneficiosdto->setActivo("N");
                $delete_beneficioEs = $BeneficiosCller->updateBeneficioses($Beneficiosdto, $proveedor);


                if ($delete_beneficioEs != "") {

                    $ImputadossancionesDao = new ImputadossancionesDAO();
                    $ImputadossancionesDto = new ImputadossancionesDTO();
                    $ImputadossancionesDto->setIdImputadoSancion($imputadossancionesDto->getIdImputadoSancion());
                    $ImputadossancionesDto->setActivo("N");
                    $deleteimputadossanciones = $ImputadossancionesDao->updateImputadossanciones($ImputadossancionesDto, $proveedor);
                    if ($deleteimputadossanciones == "") {
                        $error = true;
                    } else {

                        $ImputadossancionesDtoupdate = new ImputadossancionesDTO();
                        $ImputadossancionesDtoupdate->setActivo("S");
                        $ImputadossancionesDtoupdate->setIdImputadoSancion($idimputadosancion);
                        $ImputadossancionesDtoupdate = $ImputadossancionesDao->updateImputadossanciones($ImputadossancionesDtoupdate, $proveedor);
                        if ($ImputadossancionesDtoupdate == "") {
                            $error = true;
                        }

                        $bitacorDTO = new BitacoramovimientosDTO();
                        $bitacorCtrl = new BitacoramovimientosController();
                        $bitacorDTO->setCveAccion(289); // insercion de SANCION 
                        $bitacorDTO->setFechaMovimiento($fechaserver); //
                        $dtoToJson2 = new DtoToJson($ImputadossancionesDtoupdate);
                        $dtoToJson2->toJson("ACTUALIZO DE IMPUTADOS SANCIONES");
                        $bitacorDTO->setObservaciones($dtoToJson2->toJson("ACTUALIZACION")); //
                        $bitacorDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $bitacorDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                        $bitacorDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                        $insrt = $bitacorCtrl->insertBitacoramovimientos($bitacorDTO);
                        if ($insrt == "") {
                            $error = true;
                        }
                    }
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
            $respuesta = array("totalCount" => "1", "datos" => "", "estatus" => "ok", "mensaje" => "Se ha eliminado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al eliminar");
        }
        $proveedor->close();

        return $respuesta;
    }

//modificaimputadossancionesybeneficios


    public function modificaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $ImputadossancionesDto->getIdImputadoSancion();
        $proveedor->execute("BEGIN");
        $tipodesancion = $ImputadossancionesDto->getCveTipoSancion();
        $fechainicio = $ImputadossancionesDto->getFechaInicio();
        $fechatermina = $ImputadossancionesDto->getFechaTermina();
        $error = false;
        $respuesta = array();
        if ($id != "") {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesDao = new ImputadossancionesDAO();
            if ($tipodesancion != 5) {
                $ImputadossancionesDto->setCantidadMulta("0.00");
            }
            $ImputadossancionesDto = $ImputadossancionesDao->updateImputadossanciones($ImputadossancionesDto, $proveedor);

            if ($ImputadossancionesDto != "") {
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(288); // MODIFICACION de SANCION 
                $bitacoraDTO->setFechaMovimiento($fechaserver); //
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                $dtoToJson->toJson("UPDATE DE SANCION");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("UPDATE")); //
                $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($insb == "") {
                    $error = true;
                }


                $BeneficiosCller = new BeneficiosesController();
                $Beneficiosdto = new BeneficiosesDTO();
                $Beneficiosdto->setIdImputadoSancionNvo($id);
                $Beneficiosdto = $BeneficiosCller->selectBeneficioses($Beneficiosdto);
                if ($Beneficiosdto != "") {
                    $idbeneficioses = "";
                    foreach ($Beneficiosdto as $beneficioses) {
                        $idbeneficioses = $beneficioses->getIdBeneficioES();
                    }


                    if ($idbeneficioses != "") {
                        $Beneficiosdtoupdate = new BeneficiosesDTO();
                        $Beneficiosdtoupdate->setIdBeneficioES($idbeneficioses);
                        $Beneficiosdtoupdate->setFechaInicio($fechainicio);
                        $Beneficiosdtoupdate->setFechaTermina($fechatermina);
                        $Beneficiosdtoupdate->setCveTipoBeneficioES($tipodesancion);
                        $Beneficiosdtoupdate = $BeneficiosCller->updateBeneficioses($Beneficiosdtoupdate, $proveedor);
                    } else {
                        $error = true;
                    }
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
            $respuesta = array("totalCount" => "1", "datos" => "", "estatus" => "ok", "mensaje" => "Se ha modificado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al modificar");
        }
        $proveedor->close();

        return $respuesta;
    }

    public function insertaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession, $parambeneficio, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $id = $ImputadossancionesDto->getIdImputadoSancion();
        $proveedor->execute("BEGIN");
        $respuesta = array();
        $error = false;
        $mensaje = "";
        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();
        $ImputadossancionesDto = $ImputadossancionesDao->insertImputadossanciones($ImputadossancionesDto, $proveedor);

        if ($ImputadossancionesDto != "") {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(285); // insercion de SANCION 
            $bitacoraDTO->setFechaMovimiento($fechaserver); //
            $dtoToJson = new DtoToJson($ImputadossancionesDto);
            $dtoToJson->toJson("INSERCION DE SANCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
            $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $insb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            if ($insb == "") {
                $error = true;
            }
            $idimputado = 0;

            foreach ($ImputadossancionesDto as $insertbeneficioses) {
                $idimputadosancion = $insertbeneficioses->getIdImputadoSancion();
                $idimputado = $insertbeneficioses->getIdImputadoSancion();
                $fechI = $insertbeneficioses->getFechaInicio();
                $fechT = $insertbeneficioses->getFechaTermina();
                $tiposancion = $insertbeneficioses->getCveTipoSancion();
            }
            if ($idimputado != 0) {
                $BeneficiosCller = new BeneficiosesController();    // para registrar un nevo beneficio
                $Beneficiosdto = new BeneficiosesDTO();
                $Beneficiosdto->setIdActuacion($parambeneficio["idactuacion"]);
                $Beneficiosdto->setIdImputadoCarpeta($parambeneficio["iddelimputadocarpeta"]);
                $Beneficiosdto->setIdImputadoSancion($parambeneficio["iddelimputadosancion"]);
                $Beneficiosdto->setIdImputadoSancionNvo($idimputado);
                $Beneficiosdto->setApelada("N");
                $Beneficiosdto->setFechaInicio($fechI);
                $Beneficiosdto->setFechaTermina($fechT);
                $Beneficiosdto->setCveTipoSancion($parambeneficio["CveTipoSancion"]); //falta
                $Beneficiosdto->setCveTipoBeneficioES($tiposancion);
                $Beneficiosdto->setActivo('S');

                $Beneficiosdto = $BeneficiosCller->insertBeneficioses($Beneficiosdto);

                if ($Beneficiosdto == "") {
                    $error = true;
                } else {

                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(286); // insercion de SANCION 
                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                    $dtoToJson = new DtoToJson($Beneficiosdto);
                    $dtoToJson->toJson("INSERCION DE BENEFICIOS");
                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
                    $insertabeneficios = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                    if ($insertabeneficios == "") {
                        $error = true;
                    }


//                $ImputadossancionesCRLLER = new ImputadossancionesController();
//                $ImputadossancionesDTOupdate = new ImputadossancionesDTO();
//                $ImputadossancionesDTOupdate->setActivo("N");
//                $ImputadossancionesDTOupdate->setIdImputadoSancion($parambeneficio["iddelimputadosancion"]);
//                $ImputadossancionesDTOupdate=$this->validarImputadossanciones($ImputadossancionesDTOupdate);
//                $ImputadossancionesDtoupdate= $ImputadossancionesCRLLER->updateImputadossanciones($ImputadossancionesDTOupdate,$proveedor);
//
//                if($ImputadossancionesDtoupdate=="")
//                {
//                    $error=true;
//                }
//                else{
//                    $bitacoraDTO = new BitacoramovimientosDTO();
//                    $bitacoraCtrl = new BitacoramovimientosController();
//                    $bitacoraDTO->setCveAccion(287); // insercion de SANCION 
//                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
//                    $dtoToJson = new DtoToJson($ImputadossancionesDtoupdate);
//                    $dtoToJson->toJson("UPDATE DE IMPUTADOSSANCIONES");
//                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("UPDATE")); //
//                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
//                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
//                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
//                    $insertabeneficios=$bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
//                    if($insertabeneficios=="")
//                    {
//                            $error=true;   
//                    }
//                }
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
            $respuesta = array("totalCount" => "1", "datos" => "", "estatus" => "ok", "mensaje" => "Se ha agregado correctamente");
        } else {

            $proveedor->execute("ROLLBACK");
            //$respuesta = array("Estatus" => "Error","totalCount" => "1", "Mensaje" => "Ocrrio un error al gardar el beneficio");
            // echo "Ocurrio un error al agregar";
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "Ocurrio un error al agregar");
        }
        $proveedor->close();

        return $respuesta;
    }

    public function updateImputadossanciones($ImputadossancionesDto, $proveedor = null) {
        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();
//$tmpDto = new ImputadossancionesDTO();
//$tmpDto = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto,$proveedor);
//if($tmpDto!=""){//$ImputadossancionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImputadossancionesDto = $ImputadossancionesDao->updateImputadossanciones($ImputadossancionesDto, $proveedor);
        return $ImputadossancionesDto;
//}
//return "";
    }

    public function deleteImputadossanciones($ImputadossancionesDto, $proveedor = null) {
        $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
        $ImputadossancionesDao = new ImputadossancionesDAO();
        $ImputadossancionesDto = $ImputadossancionesDao->deleteImputadossanciones($ImputadossancionesDto, $proveedor);
        return $ImputadossancionesDto;
    }

}

?>
