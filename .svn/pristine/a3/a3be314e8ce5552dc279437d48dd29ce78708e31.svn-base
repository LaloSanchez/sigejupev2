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
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossanciones/TipossancionesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossentencias/TipossentenciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatus/EstatusDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoressentencias/JuzgadoressentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesestatus/ActuacionesestatusController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossanciones/ImputadossancionesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");


//webservice para tblJuzgados en GestiOn
include_once(dirname(__FILE__) . "/../../../webservice/cliente/juzgados/JuzgadoCliente.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sentenciasapeladas/SentenciasapeladasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/sentenciasapeladas/SentenciasapeladasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/beneficioses/BeneficiosesController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");

class ImputadossentenciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadossentencias($ImputadossentenciasDto) {
        $ImputadossentenciasDto->setidImputadoSentencia(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getidImputadoSentencia()))));
        $ImputadossentenciasDto->setidActuacion(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getidActuacion()))));
        $ImputadossentenciasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getidImpOfeDelCarpeta()))));
        $ImputadossentenciasDto->setApelacion(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getApelacion()))));
        $ImputadossentenciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getactivo()))));
        $ImputadossentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getfechaRegistro()))));
        $ImputadossentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadossentenciasDto->getfechaActualizacion()))));
        return $ImputadossentenciasDto;
    }

    public function selectImputadossentencias($ImputadossentenciasDto, $proveedor = null) {
        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
        $ImputadossentenciasDao = new ImputadossentenciasDAO();
        $ImputadossentenciasDto = $ImputadossentenciasDao->selectImputadossentencias($ImputadossentenciasDto, $proveedor);
        return $ImputadossentenciasDto;
    }

    public function getSalas() {
        $juzgados = new JuzgadoCliente();
        return $juzgados->getJuzgadoInstancia('14,17');
    }

    public function eliminarsentencia($ImputadossentenciasDto, $proveedor = null) {
        $idsentencia = $ImputadossentenciasDto->getidImputadoSentencia();
        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);

        $ImputadossentenciasDao = new ImputadossentenciasDAO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();
        $elimino = false;
        $error = false;
        $ImputadossentenciasDto->setFechaActualizacion($fechaserver);
        $ImputadossentenciasDto = $ImputadossentenciasDao->updateImputadossentencias($ImputadossentenciasDto);
        if ($ImputadossentenciasDto != "") {


            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(280); // insercion de sentencia ACTUACION
            $bitacoraDTO->setFechaMovimiento($fechaserver); //
            $dtoToJson = new DtoToJson($ImputadossentenciasDto);
            $dtoToJson->toJson("ACTUALIZACION DE SENTENCIA");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("ACTUALIZACION")); //
            $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
            $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
            $estb = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            if ($estb == "") {
                $error = true;
            } else {
                $elimino = true;
            }
        }



        if ($elimino == true) {//eliminar hijos
            $elimsancDTO = new ImputadossancionesDTO();
            $elimsancDTO2 = new ImputadossancionesDTO();

            $elimsancDAO = new ImputadossancionesDAO();

            $elimsancDTO->setIdImputadoSentencia($idsentencia);
            $elimsancDTO->setActivo('S');
            $cons = $elimsancDAO->selectImputadossanciones($elimsancDTO);
            if ($cons != "") {
                foreach ($cons as $dd) {
                    $elimsancDTO2->setActivo('N');
                    $elimsancDTO2->setIdImputadoSancion($dd->getIdImputadoSancion());
                    $elimsancDTO2->setFechaActualizacion($fechaserver);
                    $bja = $elimsancDAO->updateImputadossanciones($elimsancDTO2, $proveedor);

                    if ($elimsancDTO2 != "") {
                        $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion(281); // insercion de sentencia ACTUACION
                        $bitacoraDTO->setFechaMovimiento($fechaserver); //
                        $dtoToJson = new DtoToJson($bja);
                        $dtoToJson->toJson("ELIMINACION DE SANCION");
                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION")); //
                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                        $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

                        if ($bitacoraDTO == "") {
                            $error = true;
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

        return $elimino;
    }

    public function consultarsentencias($ImputadossentenciasDto, $rec, $proveedor = null) {

        $fechaInicial = "";
        $fechafin = "";
        $tiposente = "";
        $desestatus="";
        $actDAO = new ActuacionesDAO();
        $actDTO = new ActuacionesDTO();



        $tipsentDTO = new TipossentenciasDTO();
        $tipsentDAO = new TipossentenciasDAO();

        
        $adscripcion = $rec['juzgado'];
        $fojas = $rec['fojas'];
        $mostrarpag = $rec['numpag'];


        $cap = 0; ///contarapartir

        $totalreg = 0;
        $paginas = 0;
        $regporpag = 0; ///registros por pagina
        $regporpag2 = 0; ///registros por pagina     


        $orden = "";

        if (strlen($rec['causa']) > 0) {
            $actDTO->setCveTipoCarpeta($rec['causa']);
            $orden.=" and CveTipoCarpeta=" . $rec['causa'];
        }
        if (strlen($rec['numero']) > 0) {
            $actDTO->setNumero($rec['numero']);
            $orden.=" and Numero=" . $rec['numero'];
        }
        if (strlen($rec['anio']) > 0) {
            $actDTO->setAnio($rec['anio']);
            $orden.=" and Anio=" . $rec['anio'];
        }

        if (strlen($rec['numactuacion']) > 0) {
            $actDTO->setNumActuacion($rec['numactuacion']);
            $orden.=" and numActuacion=" . $rec['numactuacion'];
        }
        if (strlen($rec['anioactuacion']) > 0) {
            $actDTO->setAniActuacion($rec['anioactuacion']);
            $orden.=" and aniActuacion=" . $rec['anioactuacion'];
        }

        if (strlen($rec['juzgado']) > 0 && $rec['juzgado'] != 0) {
            $actDTO->setCveJuzgado($rec['juzgado']);
            $orden.=" and cveJuzgado=" . $rec['juzgado'];
        }

        if (strlen($rec['fechainicial']) > 0 && strlen($rec['fechadfinal']) > 0) {
//            $fechaInicial = $rec['fechainicial'];
            $fechafin = explode("/", $rec['fechadfinal']);
            $fechaInicial = explode("/", $rec['fechainicial']);
            $fechaInicial = $fechaInicial[2] . "-" . $fechaInicial[1] . "-" . $fechaInicial[0];
            $fechafin = $fechafin[2] . "-" . $fechafin[1] . "-" . $fechafin[0];
            $orden.=" and fechaSentencia>='" . $fechaInicial . " 00:00:00' and fechaSentencia<='" . $fechafin . " 23:59:59' ";
        }

        //echo $orden;


        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("select count(*) as total from tblactuaciones where  `cveTipoActuacion`=3 " . $orden . "  and activo='S' order by fechaSentencia desc");
        //echo "               select count(*) as total from tblactuaciones where  `cveTipoActuacion`=3 " . $orden . "  and activo='S' order by fechaSentencia desc";
        //echo "select count(*) as total from tblactuaciones where `cveJuzgado`=" . $adscripcion . " and `cveTipoActuacion`=9 " . $orden . "  and activo='S' order by fechaSentencia desc"; 
        $st = $proveedor->fetch_object($proveedor->stmt);
        $totalreg = $st[0]['total'];
        $paginas = $totalreg / $fojas;


        $cap = $fojas * ($mostrarpag - 1) + 1;


        if ($totalreg % $fojas != 0) {
            $paginas++;
        }



        $regporpag = $mostrarpag * $fojas;
        $empieza = 0;

        if ($fojas > $totalreg) {
            $fojas = $totalreg;
            $regporpag = $totalreg;
            $mostrarpag = 1;
            $cap = 1;
        }
        if ($cap > $totalreg) {
            $cap = 1;
        }

//     echo ($mostrarpag-1)*$fojas;


        if ($mostrarpag > 1) {
            $regporpag2 = ($mostrarpag - 1) * $fojas;
        }


        $idejuzgado = "";
        $ord = "";
        if (strlen($rec['juzgado']) > 0 && $rec['juzgado'] != 0) {
            $idejuzgado = $rec['juzgado'];
            $ord = "and  `cveJuzgado`=" . $rec['juzgado'];
        }




        $actDTO->setCveJuzgado($idejuzgado);
        $actDTO->setCveTipoActuacion(3);
        $actDTO->setActivo('S');



        $proveedor->execute("SELECT MIN(idActuacion) as maximo FROM 
(SELECT idActuacion FROM tblactuaciones where  cveTipoActuacion=3  and activo='S' " . $orden . "   ORDER BY fechaSentencia desc  LIMIT " . (($mostrarpag * $fojas)) . ") 
as minimo;");

//        echo "SELECT MIN(idActuacion) as maximo FROM 
//(SELECT idActuacion FROM tblactuaciones where  cveTipoActuacion=3  and activo='S' ".$orden. "   ORDER BY fechaSentencia desc  LIMIT " . (($mostrarpag * $fojas)) . ") 
//as minimo";

        $st3 = @$proveedor->fetch_rows($proveedor->stmt);
        //print_r($st3);
        $empieza = $st3[0];
        $proveedor->execute("SELECT idActuacion FROM tblactuaciones where  cveTipoActuacion=3  " . $ord . "   and  activo='S' and idActuacion>=" . $empieza . "  LIMIT  " . $fojas . " ");
        $st2 = @$proveedor->fetch_rows($proveedor->stmt);
        $termina = $st2[0]; /////////////////// donde termina
        //$orden.="  ORDER BY idActuacion  LIMIT  " . $fojas . " ";
        //Asi estaba antes filtraba si el id de la actuacion era mayor o igual es donde marcaba error
        $orden.=" and idActuacion>=" . $empieza . "  ORDER BY idActuacion  LIMIT  " . $fojas . " ";


        //echo "SELECT idActuacion FROM tblactuaciones where  cveTipoActuacion=3  ".$ord. "   and  activo='S' and idActuacion>=" . $empieza . "  LIMIT  " . $fojas . " ";
        //print_r($actDTO);
        $actDTO = $actDAO->selectActuaciones($actDTO, $a = "", $orden);


        $datos = [];
        $contdat = 0;
        if ($actDTO != "") {

            foreach ($actDTO as $actuaciones) {
                
                $fs = "";
                $fej = "";
                $tipsentDTO->setCveTipoSentencia($actuaciones->getCveTipoSentencia());
                
                $cons = $tipsentDAO->selectTipossentencias($tipsentDTO);
                foreach ($cons as $f) {
                    $tiposente = $f->getDesTipoSentencia();
                }


                $juzgdao = new JuzgadoressentenciasDAO();
                $juzgdto = new JuzgadoressentenciasDTO();



                $actdDAO = new ActuacionesestatusDAO();
                $actdDTO = new ActuacionesestatusDTO();

                $actdDTO->setIdActuacion($actuaciones->getIdActuacion());
                $actdDTO->setActivo('S');
                $estact = $actdDAO->selectActuacionesestatus($actdDTO);
                $idestact = "";
                if ($estact != 0) {
                    foreach ($estact as $cves) {
                        $estact = $cves->getCveEstatus();
                        $idestact = $cves->getIdActuacionesEstatus();
                        
                    }
                } else {
                    $estact = 0;
                }
                
                if($estact!=0)
                {
                    $est1="";
                    $EstatusDAO = new EstatusDAO();
                    $EstatusDTO = new EstatusDTO();
                    $EstatusDTO->setActivo('S');
                    $EstatusDTO->setCveEstatus($estact);
                    $est1=$EstatusDAO->selectEstatus($EstatusDTO);
               
                    
                    foreach ($est1 as $est) {
                        $desestatus = utf8_encode($est->getDescEstatus());                        
                    }
                }


                $juzgdto->setIdActuacion($actuaciones->getIdActuacion());
                $juzgdto->setActivo('S');
                $juzgdto = $juzgdao->selectJuzgadoressentencias($juzgdto);
                $juez = "";
                if ($juzgdto != "") {
                    foreach ($juzgdto as $ccjuez) {
                        $juez = $ccjuez->getIdJuzgador();
                    }
                } else {
                    $juez = 0;
                }



                $fs = $actuaciones->getFechaSentencia();
                $fej = $actuaciones->getFechaEjecutoria();

                $f1 = $fs[8] . $fs[9] . "/" . $fs[5] . $fs[6] . "/" . $fs[0] . $fs[1] . $fs[2] . $fs[3];
                $f2 = $fej[8] . $fej[9] . "/" . $fej[5] . $fej[6] . "/" . $fej[0] . $fej[1] . $fej[2] . $fej[3];

                $datos[$contdat] = array(
                    "Tipsente" => $tiposente,
                    "idActuacion" => $actuaciones->getIdActuacion(),
                    "icarp" => $actuaciones->getIdReferencia(),
                    "numero" => $actuaciones->getNumActuacion(),
                    "anio" => $actuaciones->getAniActuacion(),
                    "fechasent" => $f1, "fechaejec" => $f2,
                    "sintesis" => $actuaciones->getSintesis(),
                    "numcausa" => $actuaciones->getNumero() . "/" . $actuaciones->getAnio(),
                    "juez" => $juez,
                    "estat" => $estact,
                    "descestatus"=>$desestatus,
                    "contapartir" => $cap,
                    "paginas" => $paginas,
                    "paginaselecciona" => $rec['numpag'],
                    "total" => $totalreg
                );

                $f2 = "";
                $f1 = "";

                $contdat++;
            }
        }
        if ($contdat == 0) {
            $datos = array("totalCount" => 0);
        } else {
            $datos = array("totalCount" => $contdat, "data" => $datos);
        }


        return $datos;
    }

    public function consultarsentenciasconsanciones($ImputadossentenciasDto) {
        
        $sentencias = [];
        $sanciones = [];
        $contadorsentencia = 0;
        $contadorsanciones = 0;



        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
        $ImputadossentenciasDao = new ImputadossentenciasDAO();
        $ImputadossentenciasDto->setActivo('S');
        $ImputadossentenciasDto = $ImputadossentenciasDao->selectImputadossentencias($ImputadossentenciasDto);
        if ($ImputadossentenciasDto != "") {
        foreach ($ImputadossentenciasDto as $imposen) {
            $idimpofedel = $imposen->getIdImpOfeDelCarpeta();

            $ImpofedelcarpetasDTO2 = new ImpofedelcarpetasDTO();
            $ImpofedelcarpetasDAO2 = new ImpofedelcarpetasDAO();
            $ImpofedelcarpetasDTO2->setidImpOfeDelCarpeta($idimpofedel);
            $ImpofedelcarpetasDTO2->setActivo('S');
            $ImpofedelcarpetasDTO2 = $ImpofedelcarpetasDAO2->selectImpofedelcarpetas($ImpofedelcarpetasDTO2);


            if ($ImpofedelcarpetasDTO2 != "") {
                foreach ($ImpofedelcarpetasDTO2 as $dto2) {

                    $ImputadossentenciasDto2 = new ImputadossentenciasDTO();
                    $ImputadossentenciasDao2 = new ImputadossentenciasDAO();
                    $ImputadossentenciasDto2->setActivo('S');
                    $ImputadossentenciasDto2->setIdImpOfeDelCarpeta($dto2->getIdImpOfeDelCarpeta());
                    $ImputadossentenciasDto2 = $ImputadossentenciasDao2->selectImputadossentencias($ImputadossentenciasDto2);


                    if ($ImputadossentenciasDto2 != "") {
                        foreach ($ImputadossentenciasDto2 as $Impsent) {
                            $apelacion = "";

                            $imputado = "";
                            $ofendido = "";
                            $delito = "";
                            $idimp = 0;
                            $idimp = $Impsent->getidImpOfeDelCarpeta();

                            $ImpofedelcarpetasDTO = new ImpofedelcarpetasDTO();
                            $ImpofedelcarpetasDAO = new ImpofedelcarpetasDAO();
                            $ImpofedelcarpetasDTO->setActivo('S');
                            $ImpofedelcarpetasDTO->setidImpOfeDelCarpeta($Impsent->getidImpOfeDelCarpeta());
                            $ImpofedelcarpetasDTO = $ImpofedelcarpetasDAO->selectImpofedelcarpetas($ImpofedelcarpetasDTO);
                            if ($ImpofedelcarpetasDTO != "") {
                                foreach ($ImpofedelcarpetasDTO as $imp) {

                                    $ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
                                    $ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
                                    $ImputadoscarpetasDTO->setidImputadoCarpeta($imp->getIdimputadoCarpeta());
                                    $ImputadoscarpetasDTO->setActivo("S");
                                    //print_r($ImputadoscarpetasDTO);
                                    $ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadosCarpetas($ImputadoscarpetasDTO);
                                    if ($ImputadoscarpetasDTO != "") {
                                        foreach ($ImputadoscarpetasDTO as $impcarp) {

                                            if ($impcarp->getCveTipopersona() == 1) {////////Fisica
                                                $imputado = $impcarp->getPaterno() . " " . $impcarp->getMaterno() . " " . $impcarp->getNombre();
                                            } else {
                                                $imputado = $impcarp->getnombreMoral();
                                            }
                                        }
                                    }



                                    $OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
                                    $OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
                                    $OfendidoscarpetasDTO->setidOfendidoCarpeta($imp->getIdOfendidoCarpeta());
                                    $OfendidoscarpetasDTO->setActivo("S");
                                    $OfendidoscarpetasDTO = $OfendidoscarpetasDAO->selectOfendidosCarpetas($OfendidoscarpetasDTO);
                                    if ($OfendidoscarpetasDTO != "") {
                                        foreach ($OfendidoscarpetasDTO as $ofcarp) {
                                            if ($ofcarp->getCveTipopersona() == 1) {////////Fisica
                                                $ofendido = $ofcarp->getPaterno() . " " . $ofcarp->getMaterno() . " " . $ofcarp->getNombre();
                                            } else {
                                                $ofendido = $ofcarp->getnombreMoral();
                                            }
                                        }
                                    }


                                    $DelitosCarpetasDAO = new DelitosCarpetasDAO();
                                    $DelitosCarpetasDTO = new DelitosCarpetasDTO();
                                    $DelitosCarpetasDTO->setActivo("S");
                                    $DelitosCarpetasDTO->setidDelitoCarpeta($imp->getidDelitoCarpeta());
                                    $DelitosCarpetasDTO = $DelitosCarpetasDAO->selectDelitoscarpetas($DelitosCarpetasDTO);
                                    if ($DelitosCarpetasDTO != "") {

                                        foreach ($DelitosCarpetasDTO as $delitos) {
                                            $DelitosDAO = new DelitosDAO();
                                            $DelitosDTO = new DelitosDTO();
                                            $DelitosDTO->setcveDelito($delitos->getcveDelito());
                                            $DelitosDTO->setActivo("S");
                                            $DelitosDTO = $DelitosDAO->selectDelitos($DelitosDTO);
                                            if ($DelitosDTO != "") {

                                                foreach ($DelitosDTO as $delito) {
                                                    $delito = $delito->getdesDelito();
                                                }
                                            }
                                        }
                                    }
                                }







                            $sentenciasApeladasDTO = new sentenciasApeladasDTO();
                            $sentenciasApeladasDAO = new sentenciasApeladasDAO();
                            $sentenciasApeladasDTO->setIdImputadoSentencia($Impsent->getidImputadoSentencia());
                            $sentenciasApeladasDTO->setActivo('S');
                            $sentapela = $sentenciasApeladasDAO->selectSentenciasapeladas($sentenciasApeladasDTO);
                            $apelacion = "";
                            if ($sentapela != "") {

                                foreach ($sentapela as $rowapela) {
                                    $apelacion = array("numtoca" => $rowapela->getNumToca(),
                                        "aniotoca" => $rowapela->getAnioToca(),
                                        "sala" => $rowapela->getCveSala(),
                                        "sentido" => $rowapela->getcveSentido());
                                }
                            }











                            $contadorsanciones = 0;
                            $arrsanc = "";

                            $contadorbeneficios = 0;
                            $arrbeneficios = "";
                            $Beneficioses = "";
                            $ImputadossancionesDTO = new ImputadossancionesDTO();
                            $ImputadossancionesDAO = new ImputadossancionesDAO();
                            $ImputadossancionesDTO->setActivo('S');
                            $ImputadossancionesDTO->setIdImputadoSentencia($Impsent->getidImputadoSentencia());
                            $ImputadossancionesDTO = $ImputadossancionesDAO->selectImputadossanciones($ImputadossancionesDTO);
                            if ($ImputadossancionesDTO != "") {



                                $BeneficiosesController = new BeneficiosesController();
                                foreach ($ImputadossancionesDTO as $sanciones) {


                                    $destiposancion = "";

                                    if ($sanciones->getcveTiposancion() != "") {
                                        $TipossancionesDTO = new TipossancionesDTO();
                                        $TipossancionesDAO = new TipossancionesDAO();
                                        $TipossancionesDTO->setActivo('S');
                                        $TipossancionesDTO->setCveTipoSancion($sanciones->getcveTiposancion());
                                        $TipossancionesDTO = $TipossancionesDAO->selectTipossanciones($TipossancionesDTO);

                                        foreach ($TipossancionesDTO as $tiposancion) {
                                            //if($tiposancion->getCveTipoSancion()!=3)
                                            //{
                                                $destiposancion = utf8_encode($tiposancion->getDesTipoSancion());
                                            //}
                                        }
                                    }
                                    
                                    $arrsanc[$contadorsanciones] = array("tipo" => $sanciones->getcveTiposancion(),
                                        "destiposancion" => $destiposancion,
                                        "anio" => $sanciones->getanioPrision(),
                                        "mes" => $sanciones->getmesPrision(),
                                        "dia" => $sanciones->getdiasPrision(),
                                        "multa" => $sanciones->getcantidadMulta(),
                                        "repara" => $sanciones->getCantidadReparacion(),
                                        "amonestado" => $sanciones->getAmonestacion(),
                                        "idsancion" => $sanciones->getIdImputadoSancion(),
                                        "especificacion" => utf8_encode($sanciones->getEspecificacion()),
                                        "idimp" => $idimp,
                                        "fechinicio" => date('d/m/Y', strtotime(str_replace('-', '/', $sanciones->getFechaInicio()))),
                                        "fechtermina" => date('d/m/Y', strtotime(str_replace('-', '/', $sanciones->getFechaTermina())))
                                    );
                                    $contadorsanciones++;

                                    $BeneficiosesDTO = new BeneficiosesDTO();
                                    $BeneficiosesController = new BeneficiosesController();
                                    $BeneficiosesDTO->setActivo("S");
                                    $BeneficiosesDTO->setIdImputadoSancionNvo($sanciones->getIdImputadoSancion());
                                    $Beneficioses = $BeneficiosesDTO = $BeneficiosesController->selectBeneficioses($BeneficiosesDTO);
                                    
                                    
                                    if (is_array($Beneficioses) || is_object($Beneficioses)) {
                                        foreach ($Beneficioses as $bene) {

                                            $idimputadosancionbene = $bene->getIdImputadoSancionNvo();


                                            $ImputadossancionesDTO2 = new ImputadossancionesDTO();
                                            $ImputadossancionesDAO2 = new ImputadossancionesDAO();
                                            $ImputadossancionesDTO2->setActivo('S');
                                            $ImputadossancionesDTO2->setIdImputadoSancion($idimputadosancionbene);
                                            $ImputadossancionesDTO2 = $ImputadossancionesDAO2->selectImputadossanciones($ImputadossancionesDTO2);


                                            if (is_array($ImputadossancionesDTO2) || is_object($ImputadossancionesDTO2)) {

                                                foreach ($ImputadossancionesDTO2 as $beneficios) {

                                                    if ($sanciones->getcveTiposancion() >= 5) {
                                                        $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $sanciones->getfechaInicio())));
                                                        $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $sanciones->getfechaTermina())));
                                                        $fecha = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                    } else {
                                                        $fecha = "";
                                                    }

                                                    $desctiposancion = "";
                                                    if ($sanciones->getcveTiposancion() == 5) {
                                                        $desctiposancion = "MULTA";
                                                    } else {
                                                        if ($sanciones->getcveTiposancion() == 6) {
                                                            $desctiposancion = "TRATAMIENTO DE LA LIBERTAD";
                                                        } else {
                                                            if ($sanciones->getcveTiposancion() == 7) {
                                                                $desctiposancion = "TRATAMIENTO DE SEMILIBERTAD";
                                                            } else {
                                                                if ($sanciones->getcveTiposancion() == 8) {
                                                                    $desctiposancion = "JORNADAS DE TRABAJO";
                                                                } else {
                                                                    if ($sanciones->getcveTiposancion() == 9) {
                                                                        $desctiposancion = "DIAS DE CONFINAMIENTO";
                                                                    } else {
                                                                        if ($sanciones->getcveTiposancion() == 10) {
                                                                            $desctiposancion = "RESTITUCION DEL BIEN";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }

                                                    $arrbeneficios[$contadorbeneficios] = array(
                                                        "idBeneficioES" => $bene->getIdBeneficioES(),
                                                        "especificacion" => utf8_encode($sanciones->getEspecificacion()),
                                                        "fecha" => $fecha,
                                                        "idsancion" => $bene->getIdImputadoSancion(),
                                                        "idsancionnuevo" => $bene->getIdImputadoSancionNvo(),
                                                        "desctiposancion" => $desctiposancion,
                                                        "multa" => $sanciones->getcantidadMulta(),
                                                        "tipo" => $sanciones->getcveTiposancion()
                                                    );
                                                    $contadorbeneficios++;
                                                }
                                            }
                                        }
                                    }
                                }

                                //print_r($arrsanc);


                                $sentencias[$contadorsentencia] = array("idimpofe" => $Impsent->getidImpOfeDelCarpeta(), "setIdImputadoSentencia" => $Impsent->getidImputadoSentencia(), "impofedel" => utf8_encode($imputado . "/" . $ofendido . "/" . $delito), "sanciones" => $arrsanc, "beneficios" => $arrbeneficios, "totalSancion" => $contadorsanciones, "contadorbeneficios" => $contadorbeneficios, "apelacion" => $apelacion);
                                $contadorsentencia++;
                            } else {

                                $sentencias[$contadorsentencia] = array("idimpofe" => $Impsent->getidImpOfeDelCarpeta(), "setIdImputadoSentencia" => $Impsent->getidImputadoSentencia(), "impofedel" => utf8_encode($imputado . "/" . $ofendido . "/" . $delito), "sanciones" => "", "totalSancion" => 0, "apelacion" => $apelacion);
                                $contadorsentencia++;
                            }
                        }
                    }
                }
            }
        }
            }
        }



        $response = [];
        if ($contadorsentencia > 0) {
            $response = array("totalCount" => $contadorsentencia, "data" => $sentencias);
        } else {
            $response = array("totalCount" => 0);
        }

        //print_r($response);
        return $response;
    }

    public function insertImputadossentencias($ImputadossentenciasDto, $proveedor = null) {
        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
        $ImputadossentenciasDao = new ImputadossentenciasDAO();
        $ImputadossentenciasDto = $ImputadossentenciasDao->insertImputadossentencias($ImputadossentenciasDto, $proveedor);
        return $ImputadossentenciasDto;
    }

    public function updateImputadossentencias($ImputadossentenciasDto, $proveedor = null) {
        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
        $ImputadossentenciasDao = new ImputadossentenciasDAO();
//$tmpDto = new ImputadossentenciasDTO();
//$tmpDto = $ImputadossentenciasDao->selectImputadossentencias($ImputadossentenciasDto,$proveedor);
//if($tmpDto!=""){//$ImputadossentenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImputadossentenciasDto = $ImputadossentenciasDao->updateImputadossentencias($ImputadossentenciasDto, $proveedor);
        return $ImputadossentenciasDto;
//}
//return "";
    }

    public function deleteImputadossentencias($ImputadossentenciasDto, $proveedor = null) {
        $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
        $ImputadossentenciasDao = new ImputadossentenciasDAO();
        $ImputadossentenciasDto = $ImputadossentenciasDao->deleteImputadossentencias($ImputadossentenciasDto, $proveedor);
        return $ImputadossentenciasDto;
    }

}

?>
