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
// version 17/02/2016

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ingresosceresos/IngresosceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ingresosceresos/IngresosceresosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
// web service de gestion
include_once(dirname(__FILE__) . "/../../../webservice/cliente/adscripciones/AdscripcionesCliente.php");

include_once(dirname(__FILE__) . "/../reclusos/ReclusosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/reclusos/ReclusosDAO.Class.php");

include_once(dirname(__FILE__) . "/../policiasministeriales/PoliciasministerialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/policiasministeriales/PoliciasministerialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/policiasministeriales/PoliciasministerialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../imputadoscarpetas/ImputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/reclusosdelitos/ReclusosdelitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusosdelitos/ReclusosdelitosDTO.Class.php");//

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadoresexternos/ContadoresexternosDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadoresexternos/ContadoresexternosController.Class.php");

error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

//define('WP_DEBUG', true); // enable debugging mode
//ini_set("error_log", dirname(__FILE__) . "/../../../logs/IngresoCeresoController.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
    session_start();
}

class IngresosceresosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarIngresosceresos($IngresosceresosDto) {
        $IngresosceresosDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getidIngresoCereso()))));
        $IngresosceresosDto->setoficio(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getoficio()))));
        $IngresosceresosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getcarpetaInv()))));
        $IngresosceresosDto->setnuc(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getnuc()))));
        $IngresosceresosDto->setcveCereso(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getcveCereso()))));
        $IngresosceresosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getfechaRegistro()))));
        $IngresosceresosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($IngresosceresosDto->getfechaActualizacion()))));
        return $IngresosceresosDto;
    }

    public function selectIngresosceresos($IngresosceresosDto, $proveedor = null) {
        $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = $IngresosceresosDao->selectIngresosceresos($IngresosceresosDto, $proveedor);
        return $IngresosceresosDto;
    }

    public function insertIngresosceresos($IngresosceresosDto, $proveedor = null) {
        $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = $IngresosceresosDao->insertIngresosceresos($IngresosceresosDto, $proveedor);
        return $IngresosceresosDto;
    }

    public function updateIngresosceresos($IngresosceresosDto, $proveedor = null) {
        $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
        $IngresosceresosDao = new IngresosceresosDAO();
//        $tmpDto = new IngresosceresosDTO();
//        $tmpDto = $IngresosceresosDao->selectIngresosceresos($IngresosceresosDto, $proveedor);
//        if ($tmpDto != "") {//$IngresosceresosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $IngresosceresosDto = $IngresosceresosDao->updateIngresosceresos($IngresosceresosDto, $proveedor);
        return $IngresosceresosDto;
//        }
//        return "";
    }

    public function deleteIngresosceresos($IngresosceresosDto, $proveedor = null) {
        $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = $IngresosceresosDao->deleteIngresosceresos($IngresosceresosDto, $proveedor);
        return $IngresosceresosDto;
    }

    public function selectAdscripciones() {//
        $adscripciones = new AdscripcionesCliente();
        $jsonAds = $adscripciones->selectTipoAdscripciones(2); // tipo de adscripciones Juzgados

        return $jsonAds;
    }

    public function listarAdscripcionesTodas() {
        $adscripciones = new AdscripcionesCliente();
        $jsonAds = $adscripciones->selectTipoAdscripciones(5); // tipo de adscripciones Juzgados
        //$jsonAds = $adscripciones->getAdscripciones(); // tipo de adscripciones ministerio publico 

        return $jsonAds;
    }

    public function guardarIngresoCereso($ingresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion) {
//        print_r($ingresosceresosDto);
//        print_r($paramRecluso);  IngresosceresosDAO PoliciasministerialesDTO ReclusosDTO
//        print_r($paramPoliM);
        $mensaje = "";
        $transaccion = true;

        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = new IngresosceresosDTO();

        $policiasministerialesDto = new PoliciasministerialesDTO();
        $policiasministerialesDao = new PoliciasministerialesDAO();

        $reclusosDao = new ReclusosDAO();

        $reclusoDelDAO = new ReclusosDelitosDAO();

        $validacion = new Validacion();
        $fechaIngreso = $validacion->normalToMysql($ingresosceresosDto->getFechaHoraIngreso());
        $ingresosceresosDto->setFechaHoraIngreso($fechaIngreso);
//        $ingresosceresosDto->setObservaciones(utf8_decode($ingresosceresosDto->getObservaciones()));
//        echo "<".$fechaIngreso."> <".$ingresosceresosDto->getFechaHoraIngreso().">";

        $contadorCrl = new ContadoresexternosController();
        $contadoresDto = new ContadoresexternosDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $contadoresDto->setCveAdscripcion($_SESSION['cveAdscripcion']);             // variable de sesion
        $contadoresDto->setCveTipoActuacion("31"); // tipo de actuacion Oficios // 31- ingreso a cereso
        $contadoresDto->setAnio(date("Y"));
        
        $contadoresDto = $contadorCrl->getContadorExterno($contadoresDto, $proveedor);
        
        //print_r($contadoresDto);
        
        if ($contadoresDto != "") {
            $ingresosceresosDto->setNumOficio($contadoresDto[0]->getNumero());
            $ingresosceresosDto->setAniOficio($contadoresDto[0]->getAnio());
            
        $IngresosceresosDto = $IngresosceresosDao->insertIngresosceresos($ingresosceresosDto, $proveedor);
            
        if ($IngresosceresosDto != "") {
            // ingresar poilicia ministerial
            $policiasministerialesDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
            $policiasministerialesDto->setNombre(($paramPoliM["nombre"]));
            $policiasministerialesDto->setPaterno(($paramPoliM["paterno"]));
            $policiasministerialesDto->setMaterno(($paramPoliM["materno"]));
            $policiasministerialesDto->setCveAdscripcionMP($paramPoliM["cveAdscripcionMP"]);

            $policiasministerialesDto = $this->validarPoliciasministeriales($policiasministerialesDto);
            $policiasministerialesDto = $policiasministerialesDao->insertPoliciasministeriales($policiasministerialesDto, $proveedor);


//                print_r($policiasministerialesDto);
            if ($policiasministerialesDto != "") {
//                print_r($paramRecluso);
                $nombresReclusos = explode(",", $paramRecluso["nombre"]);
                $paternoReclusos = explode(",", $paramRecluso["paterno"]);
                $maternoReclusos = explode(",", $paramRecluso["materno"]);
                $aliasReclusos = explode(",", $paramRecluso["alias"]);
                $detenidoReclusos = explode(",", $paramRecluso["detenido"]);
                $cveGeneroReclusos = explode(",", $paramRecluso["cveGenero"]);
                $edoPsicoReclusos = explode(",", $paramRecluso["cveEstadoPsicofisico"]);
                    $conjuntodelitos = explode(",", $paramRecluso["conjuntodelitos"]);


                for ($i = 0; $i < count($nombresReclusos); $i++) {

                    $reclusosDto = new ReclusosDTO();
                    $reclusosDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                    $reclusosDto->setNombre($nombresReclusos[$i]);
                    $reclusosDto->setPaterno($paternoReclusos[$i]);
                    $reclusosDto->setMaterno($maternoReclusos[$i]);
                    $reclusosDto->setAlias($aliasReclusos[$i]);
                    $reclusosDto->setDetenido($detenidoReclusos[$i]);
                    $reclusosDto->setCveGenero($cveGeneroReclusos[$i]);
                    $reclusosDto->setCveEstadoPsicofisico($edoPsicoReclusos[$i]);

                    $reclusosDto = $this->validarReclusos($reclusosDto);
                    $reclusosDto = $reclusosDao->insertReclusos($reclusosDto, $proveedor);

                        if($reclusosDto != ""){

                            for($j = 0;$j < count($conjuntodelitos); $j++){
                                $numReclusoDel = explode("/", $conjuntodelitos[$j]);

                                if(($i+1) == $numReclusoDel[0]){
                                    $reclusoDelDTO = new ReclusosDelitosDTO();

                                    $reclusoDelDTO->setIdRecluso($reclusosDto[0]->getIdRecluso());
                                    $reclusoDelDTO->setCveDelito($numReclusoDel[1]);
                                    $reclusoDelDTO->setActivo("S");

                                    $reclusoDelDTO = $reclusoDelDAO->insertReclusosdelitos($reclusoDelDTO,$proveedor);

                                    if($reclusoDelDTO != ""){
                                        $transaccion = true;
                                    }else{
                                        $transaccion = false;
                                        break;
                }
                                }
                            }

                        }else{
                            $transaccion = false;
                            break;
                        }

                    }

                    if ($transaccion) {
                    $proveedor->execute("COMMIT");
                    $mensaje .= "Se registro corretamente..";
                    $transaccion = true;
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo $mensaje .= "No se registro el recluso..";
                    $transaccion = false;
                }
            } else {
                $proveedor->execute("ROLLBACK");
                $mensaje .= "No se registro el policia ministarial..";
                $transaccion = false;
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $mensaje .= "No se registro en ingreso ceresos";
            $transaccion = false;
        }
        }else{
            $proveedor->execute("ROLLBACK");
            $mensaje .= "No se obtuvo el numero de folio (contador)";
            echo "No se obtuvo el numero de folio (contador)";

            $transaccion = false;
        }
            
        $proveedor->close();

        if ($transaccion) {
            $bitacoraDTO1 = new BitacoramovimientosDTO();
            $bitacoraDTO2 = new BitacoramovimientosDTO();
            $bitacoraDTO3 = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();

            $bitacoraDTO1->setCveAccion($cveAccion); // REGISTRA BITACORA EN INGRESOS A CERESOS
            $bitacoraDTO1->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($IngresosceresosDto);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO1->setObservaciones($dtoToJson->toJson("INSERCION")); //
            $bitacoraDTO1->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO1->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO1->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO1);

            $bitacoraDTO2->setCveAccion("261"); // REGISTRA BITACORA EN POLICIAS MINISTERIALES
            $bitacoraDTO2->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonPol = new DtoToJson($policiasministerialesDto);
            $dtoToJsonPol->toJson("INSERCION");
            $bitacoraDTO2->setObservaciones($dtoToJsonPol->toJson("INSERCION")); //
            $bitacoraDTO2->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO2->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO2->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO2);

            $bitacoraDTO3->setCveAccion("258"); // REGISTRA BITACORA EN reclusos
            $bitacoraDTO3->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonRec = new DtoToJson($reclusosDto);
            $dtoToJsonRec->toJson("INSERCION");
            $bitacoraDTO3->setObservaciones($dtoToJsonRec->toJson("INSERCION")); //
            $bitacoraDTO3->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO3->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO3->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO3);

            return $IngresosceresosDto;
        } else {
            return "";
        }
    }

    public function consultarImputadosCereso($ingresosceresosDto, $param) {

        $validacion = new Validacion();

        $adscripciones = new AdscripcionesCliente();
        $arrayAds = json_decode($adscripciones->selectTipoAdscripciones(2)); // tipo de adscripciones ministerio publico

        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = new IngresosceresosDTO();
        $ingresosceresosDto->setActivo("S");
//                                                                       $ingresosceresosDto, $proveedor = null,$orden = "", $param = null, $fields = null
        $IngresosceresosDto = $IngresosceresosDao->selectIngresosceresos($ingresosceresosDto, null, " order by idIngresoCereso desc ", $param, null);
//        print_r($IngresosceresosDto);
        if ($IngresosceresosDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($IngresosceresosDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($IngresosceresosDto as $ingresoCereso) {
                $json .= "{";
                $json .= '"idIngresoCereso":' . json_encode(utf8_encode($ingresoCereso->getIdIngresoCereso())) . ",";
                $json .= '"oficio":' . json_encode(utf8_encode($ingresoCereso->getOficio())) . ",";
                $json .= '"numOficio":' . json_encode(utf8_encode($ingresoCereso->getNumOficio())) . ",";
                $json .= '"aniOficio":' . json_encode(utf8_encode($ingresoCereso->getAniOficio())) . ",";
                $json .= '"carpetaInv":' . json_encode(utf8_encode($ingresoCereso->getCarpetaInv())) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($ingresoCereso->getNuc())) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($ingresoCereso->getCveCereso())) . ",";
                $json .= '"FechaHoraIngreso":' . json_encode(utf8_encode($validacion->mysqlToNormal($ingresoCereso->getFechaHoraIngreso()))) . ",";
                $json .= '"observaciones":' . json_encode(utf8_encode($ingresoCereso->getObservaciones())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($ingresoCereso->getActivo())) . ",";

                $policiasministerialesDto = new PoliciasministerialesDTO();
                $policiasministerialesDao = new PoliciasministerialesDAO();
                $policiasministerialesDto->setIdIngresoCereso($ingresoCereso->getIdIngresoCereso());
                $policiasministerialesDto = $policiasministerialesDao->selectPoliciasministeriales($policiasministerialesDto);

                $json .= '"policiaMinisterial": [';
                $y = 1;

                foreach ($policiasministerialesDto as $poliMinisterial) {
                    $json .= '{';
                    $json .= '"idPoliciaMinisterial":' . json_encode(utf8_encode($poliMinisterial->getIdPoliciaMinisterial())) . ",";
                    $json .= '"idIngresoCereso":' . json_encode(utf8_encode($poliMinisterial->getIdIngresoCereso())) . ",";
                    $json .= '"nombre":' . json_encode(utf8_encode($poliMinisterial->getNombre())) . ',';
                    $json .= '"paterno":' . json_encode(utf8_encode($poliMinisterial->getPaterno())) . ',';
                    $json .= '"materno":' . json_encode(utf8_encode($poliMinisterial->getMaterno())) . ',';
                    $json .= '"cveAdscripcionMP":' . json_encode(utf8_encode($poliMinisterial->getCveAdscripcionMP())) . ",";
                    foreach ($arrayAds->data as $datos) {
                        if ($poliMinisterial->getCveAdscripcionMP() == $datos->cveAdscripcion) {
                            $json .= '"nomAdscripcion":' . json_encode($datos->nomAdscripcion) . ",";
                            break;
                        }
                    }
                    $json .= '"activo":' . json_encode(utf8_encode($poliMinisterial->getActivo())) . "";
                    $json .= "}";
                    $y++;
                    if ($y <= count($policiasministerialesDto)) {
                        $json .= ",";
                    }
                }
                $json .= '],'; // fin de pilicia ministerial

                $reclusosDto = new ReclusosDTO();
                $reclusosDao = new ReclusosDAO();
                $reclusosDto->setIdIngresoCereso($ingresoCereso->getIdIngresoCereso());
                $reclusosDto->setActivo("S");
                $reclusosDto = $reclusosDao->selectReclusos($reclusosDto);
//                print_r($reclusosDto);

                $json .= '"recluso": [';
                $z = 1;
                foreach ($reclusosDto as $recluso) {
                    $json .= '{';
                    $json .= '"idRecluso":' . json_encode(utf8_encode($recluso->getIdRecluso())) . ",";
                    $json .= '"idIngresoCereso":' . json_encode(utf8_encode($recluso->getIdIngresoCereso())) . ",";
                    $json .= '"nombre":' . json_encode(utf8_encode($recluso->getNombre())) . ",";
                    $json .= '"paterno":' . json_encode(utf8_encode($recluso->getPaterno())) . ",";
                    $json .= '"materno":' . json_encode(utf8_encode($recluso->getMaterno())) . ",";
                    $json .= '"alias":' . json_encode(utf8_encode($recluso->getAlias())) . ",";
                    $json .= '"detenido":' . json_encode(utf8_encode($recluso->getDetenido())) . ",";
                    $json .= '"cveGenero":' . json_encode(utf8_encode($recluso->getCveGenero())) . ",";
                    
                    $generoDTO = new GenerosDTO();
                    $generoDAO = new GenerosDAO();
                    $generoDTO->setCveGenero($recluso->getCveGenero());
                    $generoDTO->setActivo("S");
                    
                    $generoDTO = $generoDAO->selectGeneros($generoDTO);
                    $json .= '"desGenero":' . json_encode(utf8_encode($generoDTO[0]->getDesGenero())) . ",";
                    
                    $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($recluso->getCveEstadoPsicofisico())) . ",";
                    $json .= '"activo":' . json_encode(utf8_encode($recluso->getActivo())) . ",";
                    
                    $reclusoDelDAO = new ReclusosDelitosDAO();
                    $reclusoDelDTO = new ReclusosDelitosDTO();
                    $reclusoDelDTO->setIdRecluso($recluso->getIdRecluso());
                    $reclusoDelDTO->setActivo("S");
                    $reclusoDelDTO = $reclusoDelDAO->selectReclusosdelitos($reclusoDelDTO);
                    
                    $json .= '"delitos": [';
                    $w = 1;
                    if($reclusoDelDTO != ""){
                        foreach ($reclusoDelDTO as $reclusoDel) {
                            $json .= '{';
                            $json .= '"idReclusoDelito":' . json_encode(utf8_encode($reclusoDel->getIdReclusoDelito())) . ",";
                            $json .= '"cveDelito":' . json_encode(utf8_encode($reclusoDel->getCveDelito())) . ",";
                            $delitosDAO = new DelitosDAO();
                            $delitosDTO = new DelitosDTO();
                            $delitosDTO->setCveDelito($reclusoDel->getCveDelito());
                            $delitosDTO->setActivo("S");
                            $delitosDTO = $delitosDAO->selectDelitos($delitosDTO);
                            if($delitosDTO != ""){
                                $json .= '"desDelito":' . json_encode(utf8_encode($delitosDTO[0]->getDesDelito())) . ",";
                            }else{
                                $json .= '"desDelito":"" ';
                            }

                            $json .= '"idRecluso":' . json_encode(utf8_encode($reclusoDel->getIdRecluso())) . "";
                    $json .= "}";
                            $w++;
                            if ($w <= count($reclusoDelDTO)) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    
                    $json .= "}";
                    $z++;
                    if ($z <= count($reclusosDto)) {
                        $json .= ",";
                    }
                }
                $json .= ']'; // fin de pilicia ministerial


                $json .= "}";
                $x++;
                if ($x <= count($IngresosceresosDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($IngresosceresosDto) . '"';
            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    public function getPaginas($ingresosceresosDto, $param) {
        $IngresosceresosDao = new IngresosceresosDAO();
        $ingresosceresosDto->setActivo("S");

        //$CeresosadscripcionesDto = $this->verificaCeros($CeresosadscripcionesDto);
        $numTot = $IngresosceresosDao->selectIngresosceresos($ingresosceresosDto, null, "", $param, " count(idIngresoCereso) as totalCount ");

        $Pages = (int) $numTot[0]["totalCount"] / $param["cantxPag"];
        $restoPages = $numTot[0]["totalCount"] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0]["totalCount"] . '",';
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

    public function bajaIngresoCereso($ingresosceresosDto, $cveAccion, $paramSession) {

        $mensaje = "";
        $transaccion = true;

        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = new IngresosceresosDTO();

        $policiasministerialesDto = new PoliciasministerialesDTO();
        $policiasministerialesDao = new PoliciasministerialesDAO();

        $reclusosDto = new ReclusosDTO();
        $reclusosDao = new ReclusosDAO();

        $validacion = new Validacion();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $ingresosceresosDto->setActivo("N");
        $IngresosceresosDto = $IngresosceresosDao->updateIngresosceresos($ingresosceresosDto, $proveedor);
//        print_r($IngresosceresosDto);
        if ($IngresosceresosDto != "") {
            // ingresar poilicia ministerial
            $policiasministerialesDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
            $policiasministerialesDto = $policiasministerialesDao->selectPoliciasministeriales($policiasministerialesDto);
            $policiasministerialesDto[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
            $policiasministerialesDto[0]->setActivo("N");
            $policiasministerialesDto = $policiasministerialesDao->updatePoliciasministeriales($policiasministerialesDto[0], $proveedor);

            if ($policiasministerialesDto != "") {
//                print_r($policiasministerialesDto);
                $reclusosDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                $reclusosDto = $reclusosDao->selectReclusos($reclusosDto);
                $reclusosDto[0]->setActivo("N");
//                $reclusosDto[0]->setFechaActualizacion(date("Y-m-d H:i:s"));

                $reclusosDto = $reclusosDao->updateReclusos($reclusosDto[0], $proveedor);
//                print_r($reclusosDto);//
                if ($reclusosDto != "") {
                    $proveedor->execute("COMMIT");
                    $mensaje .= "Se registro corretamente..";
                    $transaccion = true;
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo $mensaje .= "No se registro el recluso..";
                    $transaccion = false;
                }
            } else {
                $proveedor->execute("ROLLBACK");
                $mensaje .= "No se registro el policia ministarial..";
                $transaccion = false;
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $mensaje .= "No se registro en ingreso ceresos";
            $transaccion = false;
        }

        $proveedor->close();

        if ($transaccion) {
            $bitacoraDTO1 = new BitacoramovimientosDTO();
            $bitacoraDTO2 = new BitacoramovimientosDTO();
            $bitacoraDTO3 = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();

            $bitacoraDTO1->setCveAccion($cveAccion); // REGISTRA BITACORA EN INGRESOS A CERESOS
            $bitacoraDTO1->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($IngresosceresosDto);
            $dtoToJson->toJson("Elimicacion logica");
            $bitacoraDTO1->setObservaciones($dtoToJson->toJson("Elimicacion logica")); //
            $bitacoraDTO1->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO1->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO1->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO1);

            $bitacoraDTO2->setCveAccion("263"); // REGISTRA BITACORA EN POLICIAS MINISTERIALES
            $bitacoraDTO2->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonPol = new DtoToJson($policiasministerialesDto);
            $dtoToJsonPol->toJson("Elimicacion logica");
            $bitacoraDTO2->setObservaciones($dtoToJsonPol->toJson("Elimicacion logica")); //
            $bitacoraDTO2->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO2->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO2->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO2);

            $bitacoraDTO3->setCveAccion("260"); // REGISTRA BITACORA EN reclusos
            $bitacoraDTO3->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonRec = new DtoToJson($reclusosDto);
            $dtoToJsonRec->toJson("Elimicacion logica");
            $bitacoraDTO3->setObservaciones($dtoToJsonRec->toJson("Elimicacion logica")); //
            $bitacoraDTO3->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO3->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO3->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO3);

            return $IngresosceresosDto;
        } else {
            return "";
        }
    }

    public function actualizarIngresoCereso($ingresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion) {

//        print_r($ingresosceresosDto);
//        print_r($paramRecluso);  IngresosceresosDAO PoliciasministerialesDTO ReclusosDTO
//        print_r($paramPlicioM);
        $mensaje = "";
        $transaccion = true;

        $IngresosceresosDao = new IngresosceresosDAO();
        $IngresosceresosDto = new IngresosceresosDTO();

        $policiasministerialesDto = new PoliciasministerialesDTO();
        $policiasministerialesDao = new PoliciasministerialesDAO();

        $reclusosDao = new ReclusosDAO();

        $validacion = new Validacion();
        $fechaIngreso = $validacion->normalToMysql($ingresosceresosDto->getFechaHoraIngreso());
        $ingresosceresosDto->setFechaHoraIngreso($fechaIngreso);
//        echo "<".$fechaIngreso."> <".$ingresosceresosDto->getFechaHoraIngreso().">";

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $IngresosceresosDto = $IngresosceresosDao->updateIngresosceresos($ingresosceresosDto, $proveedor);
//        print_r($IngresosceresosDto);
        if ($IngresosceresosDto != "") {
            // ingresar poilicia ministerial
            $policiasministerialesDto->setIdPoliciaMinisterial($paramPoliM["idPoliciaMinisterial"]);
            $policiasministerialesDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
            $policiasministerialesDto->setNombre($paramPoliM["nombre"]);
            $policiasministerialesDto->setPaterno($paramPoliM["paterno"]);
            $policiasministerialesDto->setMaterno($paramPoliM["materno"]);
            $policiasministerialesDto->setCveAdscripcionMP($paramPoliM["cveAdscripcionMP"]);

            $policiasministerialesDto = $this->validarPoliciasministeriales($policiasministerialesDto);
            $policiasministerialesDto = $policiasministerialesDao->updatePoliciasministeriales($policiasministerialesDto, $proveedor);

//          print_r($policiasministerialesDto);
            if ($policiasministerialesDto != "") {
//                  print_r($paramRecluso);
                $idReclusos = explode(",", $paramRecluso["idRecluso"]);
                $nombresReclusos = explode(",", $paramRecluso["nombre"]);
                $paternoReclusos = explode(",", $paramRecluso["paterno"]);
                $maternoReclusos = explode(",", $paramRecluso["materno"]);
                $aliasReclusos = explode(",", $paramRecluso["alias"]);
                $detenidoReclusos = explode(",", $paramRecluso["detenido"]);
                $cveGeneroReclusos = explode(",", $paramRecluso["cveGenero"]);
                $edoPsicoReclusos = explode(",", $paramRecluso["cveEstadoPsicofisico"]);
                $conjuntodelitos = explode(",", $paramRecluso["conjuntodelitos"]);

                //******************** verificar existentes ****************************************
                $reclusosDtoAux = new ReclusosDTO();
                $reclusosDtoAux->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                $reclusosDtoAux->setActivo("S");
                $reclusosDtoAux = $reclusosDao->selectReclusos($reclusosDtoAux, "", $proveedor);
//                echo "consulta: <".count($reclusosDtoAux)."> == vista: ".count($nombresReclusos);
                //**********************************************************************************
                $transaccion = true;
//                // si la cantidad de reclusos igual a los registrados en BD y la vista
                if (count($reclusosDtoAux) == count($nombresReclusos)) {
                    for ($i = 0; $i < count($nombresReclusos); $i++) {

                        $reclusosDto = new ReclusosDTO();
                        $reclusosDto->setIdRecluso($idReclusos[$i]);
                        $reclusosDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                        $reclusosDto->setNombre($nombresReclusos[$i]);
                        $reclusosDto->setPaterno($paternoReclusos[$i]);
                        $reclusosDto->setMaterno($maternoReclusos[$i]);
                        $reclusosDto->setAlias($aliasReclusos[$i]);
                        $reclusosDto->setDetenido($detenidoReclusos[$i]);
                        $reclusosDto->setCveGenero($cveGeneroReclusos[$i]);
                        $reclusosDto->setCveEstadoPsicofisico($edoPsicoReclusos[$i]);

                        $reclusosDto = $this->validarReclusos($reclusosDto);
                        $reclusosDto = $reclusosDao->updateReclusos($reclusosDto, $proveedor);
                        //                    print_r($reclusosDto);
                        if ($reclusosDto == "") {
                            $transaccion = false;
                        }else{
                            $transaccion = $this->verificaDelitos($reclusosDto,$i,$conjuntodelitos,$nombresReclusos,$proveedor);
                        }
                    }
                } else if (count($reclusosDtoAux) > count($nombresReclusos)) { // si los registrados en la BD mayor que los de la vista
                    $existe = false;
                    for ($i = 0; $i < count($reclusosDtoAux); $i++) {// recorrer desde los existentes en BD
                        $existe = false;
                        for ($j = 0; $j < count($idReclusos); $j++) {
                            if ($idReclusos[$j] == $reclusosDtoAux[$i]->getIdRecluso()) {
                                $existe = true;
                                break;
                            }
                        }
                        if (!$existe) {
//                            echo "eliminar registro de la bd: ".print_r($reclusosDtoAux[$i]);
                            $reclusosDto = new ReclusosDTO();
                            $reclusosDto->setIdRecluso($reclusosDtoAux[$i]->getIdRecluso());
                            $reclusosDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                            $reclusosDto->setActivo("N");

                            $reclusosDto = $reclusosDao->updateReclusos($reclusosDto, $proveedor);
//                            print_r($reclusosDto);

                            if ($reclusosDto == "") {
                                $transaccion = false;
                            }else{
                                $transaccion = $this->verificaDelitos($reclusosDto,$i,$conjuntodelitos,$nombresReclusos,$proveedor);
                            }
                        }
                    }
                } else if (count($reclusosDtoAux) < count($nombresReclusos)) { // si los registros de la BD menor que los de la vista
//                    echo " entra ";
                    $existe = false;
                    for ($i = 0; $i < count($idReclusos); $i++) {// recorrer desde los que vienen de la vista
                        $existe = false;
                        for ($j = 0; $j < count($reclusosDtoAux); $j++) {
                            if ($idReclusos[$i] == $reclusosDtoAux[$j]->getIdRecluso()) {
                                $existe = true;
                                break;
                            }
                        }
                        if (!$existe) {
//                            echo "<<".$i.">> insertar en la bd registro: ".$nombresReclusos[$i];
                            $reclusosDto = new ReclusosDTO();
                            $reclusosDto->setIdRecluso($idReclusos[$i]);
                            $reclusosDto->setIdIngresoCereso($IngresosceresosDto[0]->getIdIngresoCereso());
                            $reclusosDto->setNombre($nombresReclusos[$i]);
                            $reclusosDto->setPaterno($paternoReclusos[$i]);
                            $reclusosDto->setMaterno($maternoReclusos[$i]);
                            $reclusosDto->setAlias($aliasReclusos[$i]);
                            $reclusosDto->setDetenido($detenidoReclusos[$i]);
                            $reclusosDto->setCveGenero($cveGeneroReclusos[$i]);
                            $reclusosDto->setCveEstadoPsicofisico($edoPsicoReclusos[$i]);

                            $reclusosDto = $this->validarReclusos($reclusosDto);
                            $reclusosDto = $reclusosDao->insertReclusos($reclusosDto, $proveedor);
//                            print_r($reclusosDto);
                            if ($reclusosDto == "") {
                                $transaccion = false;
                            }else{
//                                echo "insert de delitos directos...";
                                //$transaccion = $this->verificaDelitos($reclusosDto,$i,$conjuntodelitos,$nombresReclusos,$proveedor);
                                $reclusoDelDTOAux = new ReclusosDelitosDTO();                
                                $reclusoDelDAO = new ReclusosDelitosDAO();                
                                $reclusoDelDTOAux->setIdRecluso($reclusosDto[0]->getIdRecluso());
                                $reclusoDelDTOAux->setActivo("S");
                                $reclusoDelDTOAux = $reclusoDelDAO->selectReclusosdelitos($reclusoDelDTOAux);
//                                echo "<br> i: <".$i.">";
//                                print_r($reclusoDelDTOAux);
//                                print_r($conjuntodelitos);
                                $numDelitoVista = array();
//
                                for($k = 0;$k < count($conjuntodelitos); $k++){
                                    $pestDelito = explode("/", $conjuntodelitos[$k]);
                                    if(($i+1) == $pestDelito[0]){
                                        array_push($numDelitoVista, $pestDelito[1]);
                            }
                        }
//                                print_r($numDelitoVista);
                                
                                for($j = 0;$j < count($numDelitoVista); $j++){
                                    $reclusoDelDTO = new ReclusosDelitosDTO();
                                    $reclusoDelDTO->setIdRecluso($reclusosDto[0]->getIdRecluso());
                                    $reclusoDelDTO->setCveDelito($numDelitoVista[$j]);
                                    $reclusoDelDTO->setActivo("S");
//                                    print_r($reclusoDelDTO);
                                    $reclusoDelDTO = $reclusoDelDAO->insertReclusosdelitos($reclusoDelDTO, $proveedor);

//                                    print_r($reclusoDelDTO);
                                    if ($reclusoDelDTO == "") {
                                        $transaccion = false;
                    }
                }

                            }
                        }
                    }
                }
                  
                if ($reclusosDto != "" && $transaccion) {
//                    $proveedor->execute("ROLLBACK");
                    $proveedor->execute("COMMIT");
                    $mensaje .= "Se registro corretamente..";
                    $transaccion = true;
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo $mensaje .= "No se registro el recluso..";
                    $transaccion = false;
                }
            } else {
                $proveedor->execute("ROLLBACK");
                $mensaje .= "No se registro el policia ministarial..";
                $transaccion = false;
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $mensaje .= "No se registro en ingreso ceresos";
            $transaccion = false;
        }

        $proveedor->close();

        if ($transaccion) {
            $bitacoraDTO1 = new BitacoramovimientosDTO();
            $bitacoraDTO2 = new BitacoramovimientosDTO();
            $bitacoraDTO3 = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();

            $bitacoraDTO1->setCveAccion($cveAccion); // REGISTRA BITACORA EN INGRESOS A CERESOS
            $bitacoraDTO1->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($IngresosceresosDto);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO1->setObservaciones($dtoToJson->toJson("INSERCION")); //
            $bitacoraDTO1->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO1->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO1->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO1);

            $bitacoraDTO2->setCveAccion("261"); // REGISTRA BITACORA EN POLICIAS MINISTERIALES
            $bitacoraDTO2->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonPol = new DtoToJson($policiasministerialesDto);
            $dtoToJsonPol->toJson("INSERCION");
            $bitacoraDTO2->setObservaciones($dtoToJsonPol->toJson("INSERCION")); //
            $bitacoraDTO2->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO2->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO2->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO2);

            $bitacoraDTO3->setCveAccion("258"); // REGISTRA BITACORA EN reclusos
            $bitacoraDTO3->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJsonRec = new DtoToJson($reclusosDto);
            $dtoToJsonRec->toJson("INSERCION");
            $bitacoraDTO3->setObservaciones($dtoToJsonRec->toJson("INSERCION")); //
            $bitacoraDTO3->setCveUsuario($paramSession["cveUsuarioSesion"]);
            $bitacoraDTO3->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
            $bitacoraDTO3->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO3);

            return $IngresosceresosDto;
        } else {
            return "";
        }
    }

    public function verificaDelitos($reclusosDto,$i,$conjuntodelitos,$nombresReclusos,$proveedor){
        
               $transaccion = true;
        //******************** verificar existentes ****************************************
                $reclusoDelDTOAux = new ReclusosDelitosDTO();                
                $reclusoDelDAO = new ReclusosDelitosDAO();                
                $reclusoDelDTOAux->setIdRecluso($reclusosDto[0]->getIdRecluso());
                $reclusoDelDTOAux->setActivo("S");
                $reclusoDelDTOAux = $reclusoDelDAO->selectReclusosdelitos($reclusoDelDTOAux);
//                echo "<br> i: <".$i.">";
//                print_r($reclusoDelDTOAux);
//                print_r($conjuntodelitos);
                $numDelitoVista = array();
                
                for($k = 0;$k < count($conjuntodelitos); $k++){
                    $pestDelito = explode("/", $conjuntodelitos[$k]);
                    if(($i+1) == $pestDelito[0]){
                        array_push($numDelitoVista, $pestDelito[1]);
                    }
                }
//                print_r($numDelitoVista);
//                echo "consulta: <".count($reclusoDelDTOAux)."> == vista: ".count($numDelitoVista);
        //**********************************************************************************
                // si la cantidad de reclusos igual a los registrados en BD y la vista
                $reclusoDelDTOAuxTot = 0;
                if ($reclusoDelDTOAux == ""){
                    $reclusoDelDTOAuxTot = 0;
                }else{
                    $reclusoDelDTOAuxTot = count($reclusoDelDTOAux);
                }
                
                
                if ($reclusoDelDTOAuxTot == count($numDelitoVista) ) {
                    
                        for ($i = 0; $i < count($numDelitoVista); $i++) {

                            $reclusoDelDTO = new ReclusosDelitosDTO(); 
                            $reclusoDelDTO->setIdReclusoDelito($reclusoDelDTOAux[$i]->getIdReclusoDelito());
                            $reclusoDelDTO->setIdRecluso($reclusosDto[0]->getIdRecluso());
                            $reclusoDelDTO->setCveDelito($numDelitoVista[$i]);

                            $reclusoDelDTO = $reclusoDelDAO->updateReclusosdelitos($reclusoDelDTO, $proveedor);

                            if ($reclusoDelDTO == "") {
                                $transaccion = false;
                            }
                        }
                    
                } else if ($reclusoDelDTOAuxTot > count($numDelitoVista)) { // si los registrados en la BD mayor que los de la vista
                    $existe = false;
                    for ($i = 0; $i < $reclusoDelDTOAuxTot; $i++) {// recorrer desde los existentes en BD
                        $existe = false;
                        for ($j = 0; $j < count($numDelitoVista); $j++) {
                            if ($numDelitoVista[$j] == $reclusoDelDTOAux[$i]->getCveDelito()) {
                                $existe = true;
                                break;
                            }
                        }
                        if (!$existe) {
//                            echo "eliminar registro de la bd: ".print_r($reclusosDtoAux[$i]);
                            $reclusoDelDTO = new ReclusosDelitosDTO();
                            $reclusoDelDTO->setIdReclusoDelito($reclusoDelDTOAux[$i]->getIdReclusoDelito());
                            $reclusoDelDTO->setActivo("N");
                            
                            $reclusoDelDTO = $reclusoDelDAO->updateReclusosdelitos($reclusoDelDTO, $proveedor);
//                            print_r($reclusoDelDTO);
                            if ($reclusosDto == "") {
                                $transaccion = false;
                            }
                        }
                    }
                } else if ($reclusoDelDTOAuxTot < count($numDelitoVista)) { // si los registros de la BD menor que los de la vista
//                    echo " entra ";
                    $existe = false;
                    for ($i = 0; $i < count($numDelitoVista); $i++) {// recorrer desde los que vienen de la vista
                        $existe = false;
                        for ($j = 0; $j < $reclusoDelDTOAuxTot; $j++) {
                            if ($numDelitoVista[$i] == $reclusoDelDTOAux[$j]->getCveDelito()) {
                                $existe = true;
                                break;
                            }
                        }
                        if (!$existe) {
//                            echo "<<".$i.">> insertar en la bd registro: ".$nombresReclusos[$i];
                            $reclusoDelDTO = new ReclusosDelitosDTO();
                            $reclusoDelDTO->setIdRecluso($reclusosDto[0]->getIdRecluso());
                            $reclusoDelDTO->setCveDelito($numDelitoVista[$i]);
                            $reclusoDelDTO->setActivo("S");

                            $reclusoDelDTO = $reclusoDelDAO->insertReclusosdelitos($reclusoDelDTO, $proveedor);

//                            print_r($reclusoDelDTO);
                            if ($reclusosDto == "") {
                                $transaccion = false;
                            }
                        }
                    }
                }

        return $transaccion;
    }

    public function validarPoliciasministeriales($PoliciasministerialesDto) {
        $PoliciasministerialesDto->setidPoliciaMinisterial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getidPoliciaMinisterial(), "utf8") : strtoupper($PoliciasministerialesDto->getidPoliciaMinisterial()))))));
        if ($this->esFecha($PoliciasministerialesDto->getidPoliciaMinisterial())) {
            $PoliciasministerialesDto->setidPoliciaMinisterial($this->fechaMysql($PoliciasministerialesDto->getidPoliciaMinisterial()));
        }
        $PoliciasministerialesDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getidIngresoCereso(), "utf8") : strtoupper($PoliciasministerialesDto->getidIngresoCereso()))))));
        if ($this->esFecha($PoliciasministerialesDto->getidIngresoCereso())) {
            $PoliciasministerialesDto->setidIngresoCereso($this->fechaMysql($PoliciasministerialesDto->getidIngresoCereso()));
        }
        $PoliciasministerialesDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getnombre(), "utf8") : strtoupper($PoliciasministerialesDto->getnombre()))))));
        if ($this->esFecha($PoliciasministerialesDto->getnombre())) {
            $PoliciasministerialesDto->setnombre($this->fechaMysql($PoliciasministerialesDto->getnombre()));
        }
        $PoliciasministerialesDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getpaterno(), "utf8") : strtoupper($PoliciasministerialesDto->getpaterno()))))));
        if ($this->esFecha($PoliciasministerialesDto->getpaterno())) {
            $PoliciasministerialesDto->setpaterno($this->fechaMysql($PoliciasministerialesDto->getpaterno()));
        }
        $PoliciasministerialesDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getmaterno(), "utf8") : strtoupper($PoliciasministerialesDto->getmaterno()))))));
        if ($this->esFecha($PoliciasministerialesDto->getmaterno())) {
            $PoliciasministerialesDto->setmaterno($this->fechaMysql($PoliciasministerialesDto->getmaterno()));
        }
        $PoliciasministerialesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getactivo(), "utf8") : strtoupper($PoliciasministerialesDto->getactivo()))))));
        if ($this->esFecha($PoliciasministerialesDto->getactivo())) {
            $PoliciasministerialesDto->setactivo($this->fechaMysql($PoliciasministerialesDto->getactivo()));
        }
        $PoliciasministerialesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getfechaRegistro(), "utf8") : strtoupper($PoliciasministerialesDto->getfechaRegistro()))))));
        if ($this->esFecha($PoliciasministerialesDto->getfechaRegistro())) {
            $PoliciasministerialesDto->setfechaRegistro($this->fechaMysql($PoliciasministerialesDto->getfechaRegistro()));
        }
        $PoliciasministerialesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($PoliciasministerialesDto->getfechaActualizacion(), "utf8") : strtoupper($PoliciasministerialesDto->getfechaActualizacion()))))));
        if ($this->esFecha($PoliciasministerialesDto->getfechaActualizacion())) {
            $PoliciasministerialesDto->setfechaActualizacion($this->fechaMysql($PoliciasministerialesDto->getfechaActualizacion()));
        }
        return $PoliciasministerialesDto;
    }

    public function validarReclusos($ReclusosDto) {
        $ReclusosDto->setidRecluso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getidRecluso(), "utf8") : strtoupper($ReclusosDto->getidRecluso()))))));
        if ($this->esFecha($ReclusosDto->getidRecluso())) {
            $ReclusosDto->setidRecluso($this->fechaMysql($ReclusosDto->getidRecluso()));
        }
        $ReclusosDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getidIngresoCereso(), "utf8") : strtoupper($ReclusosDto->getidIngresoCereso()))))));
        if ($this->esFecha($ReclusosDto->getidIngresoCereso())) {
            $ReclusosDto->setidIngresoCereso($this->fechaMysql($ReclusosDto->getidIngresoCereso()));
        }
        $ReclusosDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getnombre(), "utf8") : strtoupper($ReclusosDto->getnombre()))))));
        if ($this->esFecha($ReclusosDto->getnombre())) {
            $ReclusosDto->setnombre($this->fechaMysql($ReclusosDto->getnombre()));
        }
        $ReclusosDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getpaterno(), "utf8") : strtoupper($ReclusosDto->getpaterno()))))));
        if ($this->esFecha($ReclusosDto->getpaterno())) {
            $ReclusosDto->setpaterno($this->fechaMysql($ReclusosDto->getpaterno()));
        }
        $ReclusosDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getmaterno(), "utf8") : strtoupper($ReclusosDto->getmaterno()))))));
        if ($this->esFecha($ReclusosDto->getmaterno())) {
            $ReclusosDto->setmaterno($this->fechaMysql($ReclusosDto->getmaterno()));
        }
        $ReclusosDto->setalias(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getalias(), "utf8") : strtoupper($ReclusosDto->getalias()))))));
        if ($this->esFecha($ReclusosDto->getalias())) {
            $ReclusosDto->setalias($this->fechaMysql($ReclusosDto->getalias()));
        }
        $ReclusosDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getdetenido(), "utf8") : strtoupper($ReclusosDto->getdetenido()))))));
        if ($this->esFecha($ReclusosDto->getdetenido())) {
            $ReclusosDto->setdetenido($this->fechaMysql($ReclusosDto->getdetenido()));
        }
        $ReclusosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getcveGenero(), "utf8") : strtoupper($ReclusosDto->getcveGenero()))))));
        if ($this->esFecha($ReclusosDto->getcveGenero())) {
            $ReclusosDto->setcveGenero($this->fechaMysql($ReclusosDto->getcveGenero()));
        }
        $ReclusosDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ReclusosDto->getcveEstadoPsicofisico(), "utf8") : strtoupper($ReclusosDto->getcveEstadoPsicofisico()))))));
        if ($this->esFecha($ReclusosDto->getcveEstadoPsicofisico())) {
            $ReclusosDto->setcveEstadoPsicofisico($this->fechaMysql($ReclusosDto->getcveEstadoPsicofisico()));
        }
        return $ReclusosDto;
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    //*************************** formulacion imputracion **************************************

    private function hayInvolucradosReclusos($idIngresoCereso) {
        $ReclusosDao = new ReclusosDAO();
        $reclusosDto = new ReclusosDTO();
        $reclusosDto->setActivo("S");
        $reclusosDto->setIdIngresoCereso($idIngresoCereso);
        $auxReclusosDaoS = $ReclusosDao->selectReclusos($reclusosDto);
        if (($auxReclusosDaoS != "") && (count($auxReclusosDaoS) > 1)) {
            return true;
        }
        return false;
    }

    public function cambiarSentenciadoDeCereso($IngresosceresosDto, $datos) {
        $respuesta = "OK";
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        if ($datos["origen"] == 1) {//Recluso
            $recluso = $this->updateIngresosceresosCambioCereso($IngresosceresosDto, $datos["idRecluso"]);
            if ($recluso != "") {
                $idIm = $recluso->getIdImputadoCarpeta();
                if (($idIm != null) && ($idIm != "") && ($idIm != 0)) {
                    $carpetasJudicialesController = new CarpetasjudicialesController();
                    $respuesta = $carpetasJudicialesController->actualizarImputadoCarpeta($carpetasJudicialesDto, $idIm, $IngresosceresosDto->getCveCereso());
                    if (!$respuesta) {//ocurrio un error
                        $respuesta = "ERROR AL CAMBIAR AL IMPUTADO_RECLUSO";
                    }
                }
            } else {//ocurrio un error
                $respuesta = "ERROR AL CAMBIAR AL RECLUSO";
            }
        } else {//imputado
            $carpetasJudicialesController = new CarpetasjudicialesController();
            $respuestaIC = $carpetasJudicialesController->actualizarImputadoCarpeta($carpetasJudicialesDto, $datos["idImputadoCarpeta"], $IngresosceresosDto->getCveCereso());
            if ($respuestaIC) {
                $ReclusosDao = new ReclusosDAO();
                $reclusosDto = new ReclusosDTO();
                $reclusosDto->setActivo("S");
                $reclusosDto->setIdImputadoCarpeta($datos["idImputadoCarpeta"]);
                $auxReclusosDaoS = $ReclusosDao->selectReclusos($reclusosDto);
                if ($auxReclusosDaoS != "") {
                    $IngresosceresosDto->setIdIngresoCereso($auxReclusosDaoS[0]->getIdIngresoCereso());
                    $recluso = $this->updateIngresosceresosCambioCereso($IngresosceresosDto, $datos["idRecluso"]);
                    if ($recluso == "") {
                        $respuesta = "ERROR AL CAMBIAR AL RECLUSO_IMPUTADO";
                    }
                }
            } else {//ocurrio un error
                $respuesta = "ERROR AL CAMBIAR AL IMPUTADO";
            }
        }
        $json = '{"type":"OK",';
        $json .= '"msj":"' . $respuesta . '"}';
        if ($respuesta == "OK") {
            return $json;
        }
        $json = '{"type":"FAIL",';
        $json .= '"msj":"' . $respuesta . '"}';
        return $json;
    }

    public function updateIngresosceresosCambioCereso($IngresosceresosDto, $idRecluso) {
        $IngresosceresosDao = new IngresosceresosDAO();
        $cveCereso = $IngresosceresosDto->getCveCereso();
        $tranSaccionExitosa = true;
        $auxIngresCereso = new IngresosceresosDTO();
        $auxIngresCereso->setIdIngresoCereso($IngresosceresosDto->getIdIngresoCereso());
        $auxIngresCereso->setActivo("S");
        $auxIngresCeresos = $IngresosceresosDao->selectIngresosceresos($auxIngresCereso);
        $hayMasReclusos = $this->hayInvolucradosReclusos($IngresosceresosDto->getIdIngresoCereso());
        $bitacoraController = new BitacoramovimientosController();
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        if (!$hayMasReclusos) {
            $auxIngresCeresos[0]->setActivo("N");
            $accionActualizar = $IngresosceresosDao->updateIngresosceresos($auxIngresCeresos[0], $proveedor);
            //             * Registro en bitacora: BORRADO LOGICO INGRESO A CERESO 
            if ($accionActualizar != "") {
                $bitacoraController->agregar(257, 'tblingresosceresos', 'dto', $accionActualizar, null, $proveedor);
            } else {
                $tranSaccionExitosa = false;
            }
        }
        $auxIngresCeresos[0]->setActivo("S");
        $auxIngresCeresos[0]->setIdIngresoCereso("");
        $auxIngresCeresos[0]->setOficio($IngresosceresosDto->getOficio());
        $auxIngresCeresos[0]->setCarpetaInv($IngresosceresosDto->getCarpetaInv());
        $auxIngresCeresos[0]->setCveCereso($cveCereso);
        $auxIngresCeresos[0]->setFechaActualizacion("");
        $auxIngresCeresos[0]->setFechaRegistro("");
        $c = $IngresosceresosDao->insertIngresosceresos($auxIngresCeresos[0], $proveedor);
        //             * Registro en bitacora:  INSERCION INGRESO A CERESO 
        if ($c != "") {
            $bitacoraController->agregar(255, 'tblingresosceresos', 'dto', $c, null, $proveedor);
        } else {
            $tranSaccionExitosa = false;
        }
        $ReclusosDao = new ReclusosDAO();
        $reclusosDto = new ReclusosDTO();
        $reclusosDto->setActivo("S");
        //if ($hayMasReclusos) {
        $reclusosDto->setIdRecluso($idRecluso);
        // } else {
        //$reclusosDto->setIdIngresoCereso($IngresosceresosDto->getIdIngresoCereso());
        //} 
        $auxReclusosDaoS = $ReclusosDao->selectReclusos($reclusosDto);
        $auxReclusosDaoS[0]->setActivo("N");
        $rU = $ReclusosDao->updateReclusos($auxReclusosDaoS[0], $proveedor);
        //         * Registro en bitacora:  BORRADO LOGICO RECLUSO 
        if ($rU != "") {
            $bitacoraController->agregar(260, 'tblreclusos', 'dto', $rU, null, $proveedor);
        } else {
            $tranSaccionExitosa = false;
        }
        $auxReclusosDaoS[0]->setActivo("S");
        $auxReclusosDaoS[0]->setIdRecluso("");
        //if ($hayMasReclusos) {
        //  $auxReclusosDaoS[0]->setIdIngresoCereso($IngresosceresosDto->getIdIngresoCereso());
        //} else {
        $auxReclusosDaoS[0]->setIdIngresoCereso($c[0]->getIdIngresoCereso());
        //}
        $rI = $ReclusosDao->insertReclusos($auxReclusosDaoS[0], $proveedor);
        //         * Registro en bitacora:  INSERCION RECLUSO 
        if ($rI != "") {
            $bitacoraController->agregar(258, 'tblreclusos', 'dto', $rI, null, $proveedor);
        } else {
            $tranSaccionExitosa = false;
        }
        $PoliciasMinisterialesDao = new PoliciasministerialesDAO();
        $policiasMinisterialesDto = new PoliciasministerialesDTO();
        $policiasMinisterialesDto->setActivo("S");
        $policiasMinisterialesDto->setIdIngresoCereso($IngresosceresosDto->getIdIngresoCereso());
        $auxPoliciasMinisterialesDaoS = $PoliciasMinisterialesDao->selectPoliciasministeriales($policiasMinisterialesDto);
        if ($auxPoliciasMinisterialesDaoS != "") {
            foreach ($auxPoliciasMinisterialesDaoS as $auxPoliciasMinisterialesDao) {
                if (!$hayMasReclusos) {
                    $auxPoliciasMinisterialesDao->setActivo("N");
                    $pU = $PoliciasMinisterialesDao->updatePoliciasministeriales($auxPoliciasMinisterialesDao, $proveedor);
                    //                 * Registro en bitacora:  BORRADO LOGICO POLICIA MINISTERIAL 
                    if ($pU != "") {
                        $bitacoraController->agregar(263, 'tblpoliciasministeriales', 'dto', $pU, null, $proveedor);
                    } else {
                        $tranSaccionExitosa = false;
                    }
                }
                $auxPoliciasMinisterialesDao->setActivo("S");
                $auxPoliciasMinisterialesDao->setIdPoliciaMinisterial("");
                $auxPoliciasMinisterialesDao->setIdIngresoCereso($c[0]->getIdIngresoCereso());
                $pI = $PoliciasMinisterialesDao->insertPoliciasministeriales($auxPoliciasMinisterialesDao, $proveedor);
                //                 * Registro en bitacora:  INSERCION POLICIA MINISTERIAL 
                if ($pI != "") {
                    $bitacoraController->agregar(261, 'tblpoliciasministeriales', 'dto', $pI, null, $proveedor);
                } else {
                    $tranSaccionExitosa = false;
                }
            }
        }
        if (!$tranSaccionExitosa) {
            $proveedor->execute("ROLLBACK");
        } else {
            $proveedor->execute('COMMIT');
        }
        $proveedor->close();
        if ($tranSaccionExitosa) {
            return $rI[0];
        }
        return "";
    }

}

?>