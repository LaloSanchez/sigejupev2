<?php

//hola modificacion P mayuscula
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/PromocionesServer.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
class PromocionesServer {

    public function __construct() {
        
    }

    public function obtenerCarpetas() {
        include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");

        $obtengoCarpetas = new TiposcarpetasController();
        $obtentoCarpetasDto = new TiposcarpetasDTO();
        $resultTiposcarpetas = $obtengoCarpetas->selectTiposcarpetas($obtentoCarpetasDto);
        $dtoToJson = new DtoToJson($resultTiposcarpetas);
        return $dtoToJson->toJson();
//      regreso cveTipoCarpeta y descTipoCarpeta
    }

    public function obtenerJuzgados() {
        include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");

        $obtengoJuzgados = new JuzgadosController();
        $obtengoJuzgadosDto = new juzgadosDTO();
        $resultJuzgados = $obtengoJuzgados->selectJuzgados($obtengoJuzgadosDto);
        $dtoToJson = new DtoToJson($resultJuzgados);
        return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }

    public function obtenerGeneros() {
        include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php");

        $obtengoGeneros = new GenerosDAO();
        $obtengoGenerosDto = new GenerosDTO();
        $resultGeneros = $obtengoGeneros->selectGeneros($obtengoGenerosDto);
        $dtoToJson = new DtoToJson($resultGeneros);
        return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }

    public function obtenerTipoPersonas() {
        include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");

        $obtengoTiposPersonas = new TipospersonasDAO();
        $obtengoTiposPersonasDto = new TipospersonasDTO();
        $resultTiposPersonas = $obtengoTiposPersonas->selectTipospersonas($obtengoTiposPersonasDto);
        $dtoToJson = new DtoToJson($resultTiposPersonas);
        return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }

    public function guardarPromocion($u, $p, $jsonPromocionCausa, $listaPromoventes) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");

        include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");
        #USUARIO CONTRASE�A: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonPromocionCausa != "") {
            if ($this->isJSON($jsonPromocionCausa)) {
                $recibi = $arrayPromocionCausa;
                $arrayPromocionCausa = json_decode($jsonPromocionCausa, true);


                error_log("JSON RECIBIDO => " . print_r($recibi, true));
                $errorGeneral = false;
                $mensajeError = "";

                #VALIDAMOS QUE CONTENGA LOS CAMPOS OBLIGATORIOS EN LA ESTRUCTURA DEL JSON Y VALIDAMOS QUE LA INFORMACION DEL CAMPO SEA VALIDA
                $mensajeErrorArray = " No se encontraron los siguientes campos en el JSON enviado: ";
                $mensajeErrorArray = " Los siguientes campos no son validos por venir vacios o en cero: ";

//                cve clave del tipo de carpeta que se genarar

                if (!array_key_exists("cveTipoCarpeta", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveTipoCarpeta, ";
                } else {
                    if ($arrayPromocionCausa["cveTipoCarpeta"] == "" || $arrayPromocionCausa["cveTipoCarpeta"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " cveTipoCarpeta, ";
                    } else if ($arrayPromocionCausa["cveTipoCarpeta"] != "" || $arrayPromocionCausa["cveTipoCarpeta"] != "0") {
                        $obtengoCarpetas = new TiposcarpetasController();
                        $obtentoCarpetasDto = new TiposcarpetasDTO();
                        $obtentoCarpetasDto->setCveTipoCarpeta($arrayPromocionCausa["cveTipoCarpeta"]);
                        $resultTiposcarpetas = $obtengoCarpetas->selectTiposcarpetas($obtentoCarpetasDto);
                        if ($resultTiposcarpetas != "") {
                            
                        } else {
                            $errorGeneral = true;
                            $mensajeErrorArray .= "TipoCarpeta no existe ";
                        }
                    }
                }
              
                if (!array_key_exists("txtnumero", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " txtnumero, ";
                } else {
                    if ($arrayPromocionCausa["txtnumero"] == "" || $arrayPromocionCausa["txtnumero"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " txtnumero, ";
                    } else if ($arrayPromocionCausa["txtnumero"] != "" || $arrayPromocionCausa["txtnumero"] != "0") {
                        $CarpetasjudicialesController = new CarpetasjudicialesController();
                        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                        $CarpetasjudicialesDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $CarpetasjudicialesDto->setAnio($arrayPromocionCausa["txtAnio"]);
                        $CarpetasjudicialesDto->setNumero($arrayPromocionCausa["txtnumero"]);
                        $ResCarpetasjudiciales = $CarpetasjudicialesController->selectCarpetaExhortoAmparo($CarpetasjudicialesDto);

                        if ($ResCarpetasjudiciales != "") {
                            
                        } else {
                            $errorGeneral = true;
                            $mensajeErrorArray .= "Numero sin relacion ";
                        }
                    }
                }
                if (!array_key_exists("txtAnio", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " txtAnio, ";
                } else {
                    if ($arrayPromocionCausa["txtAnio"] == "" || $arrayPromocionCausa["txtAnio"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " txtAnio, ";
                    } else if ($arrayPromocionCausa["txtAnio"] != "" || $arrayPromocionCausa["txtAnio"] != "0") {
                        $CarpetasjudicialesController = new CarpetasjudicialesController();
                        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                        $CarpetasjudicialesDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $CarpetasjudicialesDto->setAnio($arrayPromocionCausa["txtAnio"]);
                        $CarpetasjudicialesDto->setNumero($arrayPromocionCausa["txtnumero"]);
                        $ResCarpetasjudiciales = $CarpetasjudicialesController->selectCarpetaExhortoAmparo($CarpetasjudicialesDto);

                        if ($ResCarpetasjudiciales != "") {
                            
                        } else {
                            $errorGeneral = true;
                            $mensajeErrorArray .= "Anio sin relacion ";
                        }
                    }
                }
//                numero de hojas de la promociona que genera causa NUMERICO
                
                if (!array_key_exists("noFojas", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " noFojas, ";
                } else {
                    if ($arrayPromocionCausa["noFojas"] == "") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " noFojas, ";
                    }
                }
//                sintesis de la promocion que genera causa
                if (!array_key_exists("sintesis", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " sintesis, ";
                } else {
                    if ($arrayPromocionCausa["sintesis"] == "") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " sintesis, ";
                    }
                }
                 
//                ACCION CON VALOR = guardarCarpeta_Judicializada
                if (!array_key_exists("accion", $arrayPromocionCausa)) {
                    $arrayPromocionCausa["accion"] = "guardarCarpeta_Judicializada";
                }
//                texto con las observaciones notas de la promocion
                if (!array_key_exists("txtNotas", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " txtNotas, ";
                }
                //                cveTipoActuacion CON VALOR = 17
                if (!array_key_exists("cveTipoActuacion", $arrayPromocionCausa)) {
                    $arrayPromocionCausa["cveTipoActuacion"] = 1;
                }
                //                cve clave del usuario POR DEFAULT VACIO
                if (!array_key_exists("cveUsuario", $arrayPromocionCausa)) {
                    $arrayPromocionCausa["cveUsuario"] = '';
                }
                
                 
//                cve sesion del juzgado
                if (!array_key_exists("cveJuzgado", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveJuzgado, ";
                } else {
                    if ($arrayPromocionCausa["cveJuzgado"] == "" || $arrayPromocionCausa["cveJuzgado"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " cveJuzgado, ";
                    } else if ($arrayPromocionCausa["cveJuzgado"] != "" || $arrayPromocionCausa["cveJuzgado"] != "0") {
                        $obtengoJuzgados = new juzgadosController();
                        $obtengoJuzgadosDto = new juzgadosDTO();
                        $obtengoJuzgadosDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $resultJuzgados = $obtengoJuzgados->selectJuzgados($obtengoJuzgadosDto);
                        if ($resultJuzgados != "") {
                            
                        } else {
                            $errorGeneral = true;
                            $mensajeErrorArray .= " cveJuzgado no existe, ";
                        }
                    }
                }
                
              

                if ($this->isJSON($listaPromoventes)) {
                    if ($listaPromoventes != "") {
                        $promoventes = json_decode($listaPromoventes, true);
//                            COMPRUEBO CVE TIPOPERSONA
                        foreach ($promoventes as $respro) {
                            $obtengoTiposPersonas = new TipospersonasDAO();
                            $obtengoTiposPersonasDto = new TipospersonasDTO();
                            $obtengoTiposPersonasDto->setCveTipoPersona($respro['cveTipoPersona']);
                            $resultTiposPersonas = $obtengoTiposPersonas->selectTipospersonas($obtengoTiposPersonasDto);
                            if ($resultTiposPersonas != "") {
                                
                            } else {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " cveTipoPersona no existe, ";
                            }
                        }
//                            COMPRUEBO CVE GENERO
                        foreach ($promoventes as $resGEN) {
                            $obtengoGeneros = new GenerosDAO();
                            $obtengoGenerosDto = new GenerosDTO();
                            $obtengoGenerosDto->setCveGenero($resGEN['cveGenero']);
                            $resultGeneros = $obtengoGeneros->selectGeneros($obtengoGenerosDto);
                            if ($resultGeneros != "") {
                                
                            } else {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " cveGenero no existe, ";
                            }
                        }
                    } else {
                        return "ERROR: PROMOVENTES VACIO";
                    }
                } else {
                    return "ERROR: JSON INCORRECTO";
                }
               
               
                
              

                

                if (!array_key_exists("documentos", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " documentos, ";
                } else {
                    if ($arrayPromocionCausa["documentos"] == "") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " documentos, ";
                    }
                }
                if (!array_key_exists("idReferencia", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " idReferencia, ";
                } else {
                    if ($arrayPromocionCausa["idReferencia"] == "") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " No envio idReferencia, ";
                    }
                }
                if ($errorGeneral) {
                    $mensajeError .= substr($mensajeErrorArray, 0, -2);
                }

                if (!$errorGeneral) {
                    $PromocionDto = new ActuacionesDTO();
                    $PromocionDto->setCveTipoCarpeta($arrayPromocionCausa["cveTipoCarpeta"]);
                    $PromocionDto->setNoFojas($arrayPromocionCausa["noFojas"]);
                    $PromocionDto->setSintesis($arrayPromocionCausa["sintesis"]);
                    $PromocionDto->setObservaciones($arrayPromocionCausa["txtNotas"]);
                    $PromocionDto->setCveTipoActuacion($arrayPromocionCausa["cveTipoActuacion"]);
                    $PromocionDto->setCveUsuario($arrayPromocionCausa["cveUsuario"]);
                    $PromocionDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                    $PromocionDto->setAnio($arrayPromocionCausa["txtAnio"]);
                    $PromocionDto->setNumero($arrayPromocionCausa["txtnumero"]);
                    $PromocionDto->setIdReferencia($arrayPromocionCausa["idReferencia"]);
                    $PromocionDto->setNumActuacion("");
                    $PromocionDto->setAniActuacion("");

                    $PromocionController = new ActuacionesController();
                    $PromocionResult = $PromocionController->guardarActuacion_PromocionServer($PromocionDto, "", $listaPromoventes);
                    if ($PromocionResult != "") {
                        foreach ($PromocionResult as $res) {
                            $desJuzgado = $res->getCveJuzgado();
                            $idActuacion = $res->getIdActuacion();
                            $aniActuacion = $res->getAniActuacion();
                            $numActuacion = $res->getNumActuacion();
                        }
                        $respuesta = array("desJuzgado" => $desJuzgado, "idActuacion" => $idActuacion
                            , "aniActuacion" => $aniActuacion, "numActuacion" => $numActuacion, "Estatus" => "Ok");
                        $resultado = json_encode($respuesta);

                        $documentos = $arrayPromocionCausa["documentos"];
                        error_log("se recibieron documentos");
                        $nombreArch = $idActuacion . $arrayPromocionCausa["cveJuzgado"] . 'mypdf.zip';
                        $folder = $idActuacion . $arrayPromocionCausa["cveJuzgado"] . 'mypdf';
                        file_put_contents($idActuacion . $arrayPromocionCausa["cveJuzgado"] . 'mypdf.zip', base64_decode($documentos));

                        error_log("Folder => " . $folder);

                        $zip = new ZipArchive;
                        $res = $zip->open($nombreArch);
                        if ($res === TRUE) {
                            $zip->extractTo($folder);
                            $zip->close();
                        } else {
                            
                        }

                        $files1 = scandir($folder, 1);
                        $files1 = array_filter(scandir($folder), function($item) {
                            return !is_dir($folder . $item);
                        });

                        foreach ($files1 as $file) {
                            if ($file != "." && $file != "..") {
                                $archivo = $file;
                                $tmpfile = $folder . "/" . $file;
                                $param["cveTipoDocumento"] = "13";
                                $param["idActuacion"] = $idActuacion;
                                $param["idExhorto"] = '0';
                                $param["archivo"]["name"] = $file;
                                $param["archivo"]["path"] = dirname(__FILE__) . '/' . $tmpfile;
                                print_r($param);
                                unlink( $param["archivo"]["path"]);
                                $ImagenesFacade = new ImagenesFacade();
                                $response = $ImagenesFacade->insertImagenesRecibidasPromociones($param, $proveedor);
                            }
                        }
                        unlink($folder);
                        unlink($nombreArch);

                        return "[" . $resultado . "," . $response . "]";
                    }
                } else {
                    return "ERROR: " . $mensajeError;
                }
            }
            return "ERROR: JSON INCORRECTO";
        } else {
            return "ERROR: JSON VACIO";
        }
    }

    private function isJSON($string) {
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }

    public function consultaPromocion($json) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
        $camposCarpeta = json_decode($json, true);
        $actuacionesDto = new ActuacionesDTO();
        $actuacionesDto->setIdActuacion($camposCarpeta["idActuacion"]);
        $PromocionController = new ActuacionesController();
        $PromocionResult = $PromocionController->consultarActuacion_Promocion($actuacionesDto);
        error_log("Resultado Consulta Promocion" . print_r($PromocionResult, true));
        //$dtoToJson = new DtoToJson($PromocionResult);
        return json_encode($PromocionResult);
//      regreso totalCount = cantidad numerica mayor a 0
    }
    
    public function guardarPromocionPerito($json){ //Usuario para pruebas: genriqueze7047e
        error_log(print_r('hola si entro',true));
        error_log(print_r($json,true));
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/firmapdf/FirmaPdfController.Class.php");
        include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");        
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/promoventesactuaciones/PromoventesactuacionesDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/promoventesactuaciones/PromoventesactuacionesController.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $jsonRespuesta = '';
        $estatus = '';
        $json = json_decode($json);
        $accion = $json->accion;
        if($accion == "registrarPromocion"){
            $datosCarpeta = $json->datosCarpeta;
            $datosPromocion = $json->datosPromocion;
            $datosPromoventes = $json->datosPromoventes;
            $datosUsuario = $json->datosUsuario;
            $contadoresController = new ContadoresController();
            $actuacionesController = new ActuacionesController();
            $promoventesActuacionesController = new PromoventesactuacionesController();
            for($i = 0; $i < count($datosCarpeta); $i++){
                if($datosCarpeta[$i]->idReferencia == 0 || $datosCarpeta[$i]->idReferencia == ""){
                    //Va a buscar los datos de la referecia (Carpeta, Exhorto o Amparo) para insertarlos en la actuacion
                    $carpetasjudicialesDTO = new CarpetasjudicialesDTO();
                    $carpetasjudicialesDTO->setCveJuzgado($datosCarpeta[$i]->cveJuzgado);
                    $carpetasjudicialesDTO->setNumero($datosCarpeta[$i]->numero);
                    $carpetasjudicialesDTO->setAnio($datosCarpeta[$i]->anio);
                    $carpetasjudicialesDTO->setCveTipoCarpeta($datosCarpeta[$i]->cveTipoCarpeta);
                    $carpetasjudicialesDTO = $this->selectCarpetaExhortoAmparo($carpetasjudicialesDTO);
                    $jsonAux = json_decode($carpetasjudicialesDTO);
                    if($jsonAux->idReferencia > 0){
                        $estatus = true;
                        $contadoresDTO = new ContadoresDTO();
                        $contadoresDTO->setCveTipoActuacion(1);//1:PROMOCION
                        $contadoresDTO->setCveJuzgado($datosCarpeta[$i]->cveJuzgado);
                        $contadoresDTO->setActivo('S');
                        $contadoresDTO = $contadoresController->getContador($contadoresDTO, $proveedor);
                        if($contadoresDTO != ""){
                            $estatus = true;
                            $numActuacion = $contadoresDTO[0]->getNumero();
                            $aniActuacion = $contadoresDTO[0]->getAnio();
                            $actuacionesDTO = new ActuacionesDTO();
                            $actuacionesDTO->setNumActuacion($numActuacion);
                            $actuacionesDTO->setAniActuacion($aniActuacion);
                            $actuacionesDTO->setCveTipoActuacion(1);//1: PROMOCION
                            $actuacionesDTO->setIdReferencia($jsonAux->idReferencia);
                            $actuacionesDTO->setNumero($jsonAux->numero);
                            $actuacionesDTO->setAnio($jsonAux->anio);
                            $actuacionesDTO->setNoFojas($datosPromocion[$i]->noFojas);
                            $actuacionesDTO->setCveTipoCarpeta($datosCarpeta[$i]->cveTipoCarpeta);
                            $actuacionesDTO->setCveJuzgado($jsonAux->cveJuzgado);
                            $actuacionesDTO->setSintesis(utf8_decode($datosPromocion[$i]->Sintesis));
                            $actuacionesDTO->setObservaciones(utf8_decode($datosPromocion[$i]->observaciones));
                            error_log(print_r($actuacionesDTO,true));
                            $actuacionesDTO = $actuacionesController->insertActuaciones($actuacionesDTO, $proveedor);
                            error_log(print_r($actuacionesDTO,true));
                            if($actuacionesDTO != ""){
                                $promoventesActuacionesDTO = new PromoventesactuacionesDTO();
                                $promoventesActuacionesDTO->setIdActuacion($actuacionesDTO[0]->getIdActuacion());
                                $promoventesActuacionesDTO->setCveTipoParte(5);//5: PROMOVENTE
                                $promoventesActuacionesDTO->setCveTipoPersona($datosPromoventes[$i]->cveTipoPersona);
                                if($datosPromoventes[$i]->cveTipoPersona == 1){
                                    $promoventesActuacionesDTO->setNombre(utf8_decode($datosPromoventes[$i]->nombre));
                                    $promoventesActuacionesDTO->setPaterno(utf8_decode($datosPromoventes[$i]->paterno));
                                    $promoventesActuacionesDTO->setMaterno(utf8_decode($datosPromoventes[$i]->materno));
                                } else{
                                    $promoventesActuacionesDTO->setNombrePersonaMoral('NO APLICA EN ESTE CASO');
                                }
                                $promoventesActuacionesDTO->setCveGenero($datosPromoventes[$i]->cveGenero);
                                $promoventesActuacionesDTO = $promoventesActuacionesController->insertPromoventesactuaciones($promoventesActuacionesDTO, $proveedor);
                                if($promoventesActuacionesDTO != ""){
                                    $estatus = true;
                                    $datosPermisos = array();
                                    $datosPermisos["cedula"] = $datosUsuario[$i]->cedulaPerito;
                                    $datosPermisos["idPerito"] = $datosUsuario[$i]->idPerito;
                                    $datosPermisos["idReferencia"] = $jsonAux->idReferencia;
                                    $datosPermisos["cveTipoCarpeta"] = $datosCarpeta[$i]->cveTipoCarpeta;
                                    $resultPermisosCarpeta = $this->autorizarPermisoWeb($datosPermisos, $proveedor);
                                    $resultPermisosCarpeta = json_decode($resultPermisosCarpeta);
                                    if(isset($resultPermisosCarpeta->resultados)){
                                        $estatus = true;
                                        $usuario = $resultPermisosCarpeta->resultados[0]->usuarioPerito;
                                        $pass = $resultPermisosCarpeta->resultados[0]->passwordPerito;
                                    } else{
                                        $estatus = false;
                                    }
                                } else{
                                    $estatus = false;
                                }
                            } else{
                                $estatus = false;
                                $jsonRespuesta = '{"Estatus":"Fail","msj":"No se logro registrar la promocion"}';
                            }
                        } else{
                            $estatus = false;
                            $jsonRespuesta = '{"Estatus":"Fail","msj":"No se encontraron contadores"}';
                        }
                    } else{
                        $estatus = false;
                        $jsonRespuesta = '{"Estatus":"Fail","msj":"No se encontro la carpeta judicial"}';
                    }
                } else{
                    $acuerdosDTO = new ActuacionesDTO();
                    $acuerdosDTO->setIdActuacion($datosCarpeta[$i]->idReferencia);
                    $acuerdosDTO->setActivo('S');
                    $acuerdosDTO = $actuacionesController->selectActuaciones($acuerdosDTO,$proveedor);
                    if($acuerdosDTO != ""){
                        $estatus = true;
                        $contadoresDTO = new ContadoresDTO();
                        $contadoresDTO->setCveTipoActuacion(1);//1:PROMOCION
                        $contadoresDTO->setCveJuzgado($datosCarpeta[$i]->cveJuzgado);
                        $contadoresDTO->setActivo('S');
                        $contadoresDTO = $contadoresController->getContador($contadoresDTO, $proveedor);
                        if($contadoresDTO != ""){
                            $estatus = true;
                            $numActuacion = $contadoresDTO[0]->getNumero();
                            $aniActuacion = $contadoresDTO[0]->getAnio();
                            $actuacionesDTO = new ActuacionesDTO();
                            $actuacionesDTO->setNumActuacion($numActuacion);
                            $actuacionesDTO->setAniActuacion($aniActuacion);
                            $actuacionesDTO->setCveTipoActuacion(1);//1: PROMOCION
                            $actuacionesDTO->setIdReferencia($acuerdosDTO[0]->getIdReferencia());
                            $actuacionesDTO->setNumero($datosCarpeta[$i]->numero);
                            $actuacionesDTO->setAnio($datosCarpeta[$i]->anio);
                            $actuacionesDTO->setNoFojas($datosPromocion[$i]->noFojas);
                            $actuacionesDTO->setCveTipoCarpeta($datosCarpeta[$i]->cveTipoCarpeta);
                            $actuacionesDTO->setCveJuzgado($datosCarpeta[$i]->cveJuzgado);
                            $actuacionesDTO->setSintesis(utf8_decode($datosPromocion[$i]->Sintesis));
                            $actuacionesDTO->setObservaciones(utf8_decode($datosPromocion[$i]->observaciones));
                            error_log(print_r($actuacionesDTO,true));
                            $actuacionesDTO = $actuacionesController->insertActuaciones($actuacionesDTO, $proveedor);
                            error_log(print_r($actuacionesDTO,true));
                            if($actuacionesDTO != ""){
                                $promoventesActuacionesDTO = new PromoventesactuacionesDTO();
                                $promoventesActuacionesDTO->setIdActuacion($actuacionesDTO[0]->getIdActuacion());
                                $promoventesActuacionesDTO->setCveTipoParte(5);//5: PROMOVENTE
                                $promoventesActuacionesDTO->setCveTipoPersona($datosPromoventes[$i]->cveTipoPersona);
                                if($datosPromoventes[$i]->cveTipoPersona == 1){
                                    $promoventesActuacionesDTO->setNombre(utf8_decode($datosPromoventes[$i]->nombre));
                                    $promoventesActuacionesDTO->setPaterno(utf8_decode($datosPromoventes[$i]->paterno));
                                    $promoventesActuacionesDTO->setMaterno(utf8_decode($datosPromoventes[$i]->materno));
                                } else{
                                    $promoventesActuacionesDTO->setNombrePersonaMoral('NO APLICA EN ESTE CASO');
                                }
                                $promoventesActuacionesDTO->setCveGenero($datosPromoventes[$i]->cveGenero);
                                $promoventesActuacionesDTO = $promoventesActuacionesController->insertPromoventesactuaciones($promoventesActuacionesDTO, $proveedor);
                                if($promoventesActuacionesDTO != ""){
                                    $estatus = true;
                                    $datosPermisos = array();
                                    $datosPermisos["cedula"] = $datosUsuario[$i]->cedulaPerito;
                                    $datosPermisos["idPerito"] = $datosUsuario[$i]->idPerito;
                                    $datosPermisos["idReferencia"] = $acuerdosDTO[0]->getIdReferencia();
                                    $datosPermisos["cveTipoCarpeta"] = $datosCarpeta[$i]->cveTipoCarpeta;
                                    $resultPermisosCarpeta = $this->autorizarPermisoWeb($datosPermisos, $proveedor);
                                    $resultPermisosCarpeta = json_decode($resultPermisosCarpeta);
                                    if(isset($resultPermisosCarpeta->resultados)){
                                        $estatus = true;
                                        $usuario = $resultPermisosCarpeta->resultados[0]->usuarioPerito;
                                        $pass = $resultPermisosCarpeta->resultados[0]->passwordPerito;
                                    } else{
                                        $estatus = false;
                                    }
                                } else{
                                    $estatus = false;
                                }
                            } else{
                                $estatus = false;
                                $jsonRespuesta = '{"Estatus":"Fail","msj":"No se logro registrar la promocion"}';
                            }
                        } else{
                            $estatus = false;
                            $jsonRespuesta = '{"Estatus":"Fail","msj":"No se encontraron contadores"}';
                        }
                    } else{
                        $estatus = false;
                        $jsonRespuesta = '{"Estatus":"Fail","msj":"No existe la referencia para generar la promocion"}';
                    }
                }
            }
        } else{
            $jsonRespuesta = '{"Estatus":"Fail","msj":"La accion es invalida"}';
        }
        if($estatus == true){
            $cveUsuario = 0;
            $cvePerfil = 0;
            $accion = "INSERCCION DE PROMOCION POR PERITO:";
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraController = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(92); //92: INSERCCION DE PROMOCION
            $observaciones = array("idActuacion"=>$actuacionesDTO[0]->getIdActuacion(),"numActuacion"=>$actuacionesDTO[0]->getNumActuacion(),
                "aniActuacion"=>$actuacionesDTO[0]->getAniActuacion());
            $observaciones = json_encode($observaciones);
            $bitacoraDTO->setObservaciones(strtoupper($accion." ".$observaciones)); 
            $bitacoraDTO->setCveUsuario($cveUsuario);
            $bitacoraDTO->setCvePerfil($cvePerfil);
            $bitacoraDTO->setCveAdscripcion($datosCarpeta[0]->cveJuzgado); 
            $bitacoraController->insertBitacoramovimientos($bitacoraDTO, $proveedor);
            $proveedor->execute("COMMIT");
            $tiposCarpetasController = new TiposcarpetasController();
            $tiposCarpetasDTO = new TiposcarpetasDTO();
            $tiposCarpetasDTO->setCveTipoCarpeta($actuacionesDTO[0]->getCveTipoCarpeta());
            $tiposCarpetasDTO->setActivo('S');
            $tiposCarpetasDTO = $tiposCarpetasController->selectTiposcarpetas($tiposCarpetasDTO);
            $juzgadosController = new JuzgadosController();
            $juzgadosDTO = new JuzgadosDTO();
            $juzgadosDTO->setCveJuzgado($actuacionesDTO[0]->getCveJuzgado());
            $juzgadosDTO->setActivo('S');
            $juzgadosDTO = $juzgadosController->selectJuzgados($juzgadosDTO);
            error_log(print_r($actuacionesDTO,true));
            
            $datosJson = array();
            $datosJson["idActuacion"] = $actuacionesDTO[0]->getIdActuacion();
            $datosJson["numActuacion"] = $actuacionesDTO[0]->getNumActuacion();
            $datosJson["aniActuacion"] = $actuacionesDTO[0]->getAniActuacion();
            $datosJson["numero"] = $actuacionesDTO[0]->getNumero();
            $datosJson["anio"] = $actuacionesDTO[0]->getAnio();
            $datosJson["observaciones"] = json_encode($actuacionesDTO[0]->getObservaciones());
            $datosJson["noFojas"] = $actuacionesDTO[0]->getNoFojas();
            $datosJson["tipoCarpeta"] = $tiposCarpetasDTO[0]->getDesTipoCarpeta();
            $datosJson["desJuzgado"] = $juzgadosDTO[0]->getDesJuzgado();
            $datosJson["fechaRegistro"] = json_encode($actuacionesDTO[0]->getFechaRegistro());
            $datosJson["sintesis"] = json_encode(utf8_encode($actuacionesDTO[0]->getSintesis()));
            $datosJson["promovente"] = json_encode(utf8_encode($promoventesActuacionesDTO[0]->getNombre().' '.$promoventesActuacionesDTO[0]->getPaterno().' '.$promoventesActuacionesDTO[0]->getMaterno()));
            
            $cveTipoDocumento = 13; //13:PROMOCION
            $cveTipo = 2; //cveTipo: 2:ACTUACION, 1:CARPETA
            $dtoAux = new ActuacionesDTO();
            $dtoAux->setIdActuacion($actuacionesDTO[0]->getIdActuacion());
            $generarPDF = $actuacionesController->generarJson($dtoAux,$cveTipoDocumento,$cveTipo);
            $firmaPdfController = new FirmaPdfController();
            $jsonDecode = new Decode_JSON();
            @$params = json_decode($generarPDF,true);
            if (array_key_exists('type', $params)) {
                if ($params["type"] == "generaPdf") {
                    $respuesta = $firmaPdfController->generaPdf($params, false);
                }   
            }
            
            $datosJson["generoPDF"] = "Fail";
            if($respuesta["estatus"] == "ok"){
                $datosJson["generoPDF"] = "Ok";
            }
            $datosJson["usuario"] = $usuario;
            $datosJson["password"] = $pass;
            $jsonRespuesta = $this->jsonPromocionGenerada($datosJson);
            error_log(print_r($jsonRespuesta,true));
        } else{
            $proveedor->execute('ROLLBACK');
        }
        $proveedor->close();
        return $jsonRespuesta;
    }
    
    public function autorizarPermisoWeb($datos, $proveedor) {
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/relacionexpedientejuzgado/RelacionExpedienteJuzgadoDAO.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/relacionexpedientejuzgado/RelacionExpedienteJuzgadoDTO.Class.php");
        /*         * OTORGA PERMISOS AL PERITO PARA QUE PUEDA VER EL EXPEDIENTE COMPLETO DESDE EL SISTEMA DE CONSULTA WEB */
        if ($datos["cedula"] == "") {
            return '{"estatus":"faild","totalCount":"0","msj":"ERROR. EL PERITO NO POSEE CEDULA, COMUNIQUESE CON LA DIRECCION DE PERITOS."}';
        }
        ini_set("default_socket_timeout", 600);
        ini_set("soap.wsdl_cache_enabled", "0");
        $consultarElectronico = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
        $json = '{"fields":"idtblPersonasAutorizadas,Usuario,Password",';
        $json .= '"tables":"tblpersonasautorizadas",';
        $json .= '"conditions":"Activo=1 AND Cedula=' . $datos["cedula"] . '"}';
        try {
            $respuesta = $consultarElectronico->selectDAO($json);
        } catch (Exception $e) {
            return '{"estatus":"faild","totalCount":"0","msj":"ERROR AL CONSULTAR AL PERITO. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DEL EXPEDIENTE ELECTRONICO. INTENTELO NUEVAMENTE"}';
        }
        $respuesta = json_decode($respuesta);
        $idPersonaAutorizada = 0;
        $passwordPerito = '';
        $usuarioPerito = '';
        if (isset($respuesta->resultados)) {
            $idPersonaAutorizada = $respuesta->resultados[0]->idtblPersonasAutorizadas;
            $passwordPerito = $respuesta->resultados[0]->Password;
            $usuarioPerito = $respuesta->resultados[0]->Usuario;
        }
        //consultamos los datos del perito (SISTEMA DE PERITOS)
        ini_set("default_socket_timeout", 500);
        ini_set("soap.wsdl_cache_enabled", "0");
        $consultarPerito = new SoapClient("http://dticursos.pjedomex.gob.mx/peritos/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
        $json = '{"fields":"*",';
        $json .= '"tables":"tblperitos",';
        $json .= '"conditions":"idPerito=' . $datos["idPerito"] . '"}';
        try {
            $respuesta = $consultarPerito->selectDAO($json);
        } catch (Exception $e) {
            return '{"estatus":"faild","totalCount":"0","msj":"ERROR. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DE PERITOS. INTENTELO NUEVAMENTE"}';
        }
        $respuesta = json_decode($respuesta);
        if (!isset($respuesta->resultados)) {
            return '{"estatus":"faild","totalCount":"0","msj":"ERROR. NO SE ENCONTRO EL PERITO (idPerito=' . $datos["idPerito"] . ') EN EL SISTEMA DE PERITOS."}';
        }
        $respuesta = $respuesta->resultados[0];
        if ($idPersonaAutorizada == 0) {//en caso de que no exista el registro, lo guardamos en la base de datos del sistema del expediente electronico (tblpersonasautorizadas)
            $pass = $this->crearLlave();
            $passwordPerito = $pass;
            $pwdCifrado = crypt($pass); //se realiza un hash a la llave
            ini_set("default_socket_timeout", 500);
            ini_set("soap.wsdl_cache_enabled", "0");
            $soapClient = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/personasautorizadassigejupe/PersonasautorizadasServer.php?wsdl");
            $json = '{"personaAutorizada":{';
            $json .= '"activo":"1",';
            $json .= '"curp":"' . $respuesta->CURP . '",';
            $json .= '"cedula":"' . $respuesta->cedula . '",';
            $json .= '"ciudad":' . json_encode($respuesta->ciudadPerito) . ',';
            $json .= '"cveEstado":"15",';
            $json .= '"cveEstatusRegistro":"2",'; //significa que el perito ya esta registrado de manera correcta
            $json .= '"cveRegistroComprobante":"",';
            $json .= '"cveTipoAbogado":"5",'; //perito
            $json .= '"direccion":' . json_encode($respuesta->direccionPerito) . ',';
            $json .= '"email":"' . $respuesta->email . '",';
            $json .= '"emailAlternativo":"' . $respuesta->email . '",';
            $json .= '"fechaBaja":"",';
            $json .= '"fechaNacimiento":"",';
            $json .= '"idtblPersonasAutorizadas":"",';
            $json .= '"materno":' . json_encode($respuesta->maternoPerito) . ',';
            $json .= '"nombre":' . json_encode($respuesta->nombrePerito) . ',';
            $json .= '"password":"' . $pass . '",';
            $json .= '"passwordCifrado":"' . $pwdCifrado . '",';
            $json .= '"paterno":' . json_encode($respuesta->paternoPerito) . ',';
            $json .= '"perito":"S",';
            $json .= '"selloDigital":"actualizame",';
            $json .= '"statusGenercionCorreo":"2",'; //Significa que se ha generado correctamente el correo del perito
            $json .= '"telefono":"' . $respuesta->telefono2 . '",';
            $json .= '"titulo":' . json_encode($respuesta->titulo) . ',';
            $json .= '"usuario":"' . $respuesta->cedula . '"}}';
            $usuarioPerito = $respuesta->cedula;
            try {
                $respuesta = $soapClient->guardarPersonaAutorizada($json);
            } catch (Exception $e) {
                return '{"estatus":"faild","totalCount":"0","msj":"ERROR AL REGISTRAR EL PERITO. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DEL EXPEDIENTE ELECTRONICO. INTENTELO NUEVAMENTE"}';
            }
            $respuesta = json_decode($respuesta);
            if (!isset($respuesta->resultados)) {
                return '{"estatus":"faild","totalCount":"0","msj":"SERVICIO WEB (SISTEMA ELECTRONICO): ' . $respuesta->msj . '"}';
            }
            $idPersonaAutorizada = $respuesta->resultados[0]->idtblPersonasAutorizadas;
        }
        //otrogamos el permiso del perito para que pueda consultar el expediente en el sistema de consulta web
        $relacionExpedienteJuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $relacionExpedienteJuzgadoDto = new RelacionexpedientejuzgadoDTO();
        $relacionExpedienteJuzgadoDto->setActivo("S");
        $relacionExpedienteJuzgadoDto->setIdPersonaAutorizada($idPersonaAutorizada);
        $relacionExpedienteJuzgadoDto->setIdCarpetajudicial($datos["idReferencia"]);
        $relacionExpedienteJuzgadoDto->setCveTipoParte("15"); //cveTipoParte = 15 = perito
        $relacionExpedienteJuzgadoDto->setCveTipoCarpeta($datos["cveTipoCarpeta"]);
        $respuesta = $relacionExpedienteJuzgadoDao->selectRelacionexpedientejuzgado($relacionExpedienteJuzgadoDto, "", $proveedor);
        $registro = 'S';
        if ($respuesta == "") {//si no posse el permiso
            $respuesta = $relacionExpedienteJuzgadoDao->insertRelacionexpedientejuzgado($relacionExpedienteJuzgadoDto, $proveedor);
            if ($respuesta == "") {
                return '{"estatus":"faild","totalCount":"0","msj":"ERROR. NO SE LOGRO OTORGAR EL PERMISO AL PERITO, PARA QUE PUEDA CONSULTAR EL EXPEDIENTE"}';
            }
        } else {
            $registro = 'N';
        }
        $respuesta = $respuesta[0];
        $json = '{"estatus":"ok","totalCount":"1","msj":"PERMISO OTORGADO EXITOSAMENTE AL PERITO (idPerito=' . $datos["idPerito"] . ')","resultados":[{';
        $json .= '"registroNuevo":"' . $registro . '",';
        $json .= '"usuarioPerito":"' . $usuarioPerito . '",';
        $json .= '"passwordPerito":"' . $passwordPerito . '",';
        $json .= '"idRelacionExpedienteJuzgado":"' . $respuesta->getIdRelacionExpedienteJuzgado() . '",';
        $json .= '"idPersonaAutorizada":"' . $respuesta->getIdPersonaAutorizada() . '",';
        $json .= '"idCarpetaJudicial":"' . $respuesta->getIdCarpetajudicial() . '",';
        $json .= '"cveTipoCarpeta":"' . $respuesta->getCveTipoCarpeta() . '",';
        $json .= '"cveTipoParte":"' . $respuesta->getCveTipoParte() . '",';
        $json .= '"fechaRegistro":"' . $respuesta->getFechaRegistro() . '"}]}';
        return $json;
    }

    private function crearLlave() {//genera una cadena aleatoria de longitud 10
        $str = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz1234567890";
        $intNumCar = 10;
        $cad = "";
        for ($i = 0; $i < $intNumCar; $i++) {
            $cad .= substr($str, rand(0, strlen($str)), 1);
        }
        return $cad;
    }
    public function selectCarpetaExhortoAmparo($CarpetasjudicialesDto) {
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
        
        $activo = $CarpetasjudicialesDto->getActivo();
        if ($activo == "") {
            $activo = "S";
        }
        $datos = array();
        $datos["idReferencia"] = 0;
        $datos["numero"] = 0;
        $datos["anio"] = 0;
        $datos["cveJuzgado"] = 0;
        switch ($CarpetasjudicialesDto->getCveTipoCarpeta()) {
            case "8": // amparo
                $amparoDTO = new AmparosDTO();
                $amparoDAO = new AmparosDAO();
                $amparoDTO->setIdAmparo($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $amparoDTO->setNumAmparo($CarpetasjudicialesDto->getNumero());
                $amparoDTO->setAniAmparo($CarpetasjudicialesDto->getAnio());
                $amparoDTO->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                $amparoDTO->setActivo($activo);
                $amparoDTO = $amparoDAO->selectAmparos($amparoDTO);
                if($amparoDTO != ""){
                    $datos["idReferencia"] = $amparoDTO[0]->getIdAmparo();
                    $datos["numero"] = $amparoDTO[0]->getNumAmparo();
                    $datos["anio"] = $amparoDTO[0]->getAniAmparo();
                    $datos["cveJuzgado"] = $amparoDTO[0]->getCveJuzgado();
                }
                break;
            case "7": // exhorto
                $exhortoDTO = new ExhortosDTO();
                $exhortoDAO = new ExhortosDAO();
                $exhortoDTO->setIdExhorto($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $exhortoDTO->setNumExhorto($CarpetasjudicialesDto->getNumero());
                $exhortoDTO->setAniExhorto($CarpetasjudicialesDto->getAnio());
                $exhortoDTO->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                $exhortoDTO->setActivo($activo);
                $exhortoDTO = $exhortoDAO->selectExhortos($exhortoDTO);
                if($exhortoDTO != ""){
                    $datos["idReferencia"] = $exhortoDTO[0]->getIdExhorto();
                    $datos["numero"] = $exhortoDTO[0]->getNumExhorto();
                    $datos["anio"] = $exhortoDTO[0]->getAniExhorto();
                    $datos["cveJuzgado"] = $exhortoDTO[0]->getCveJuzgado();
                }
                break;
            default :
                $CarpetasjudicialesDto->setActivo("S");
                $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
                $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
                if($CarpetasjudicialesDto != ""){
                    $datos["idReferencia"] = $CarpetasjudicialesDto[0]->getIdCarpetaJudicial();
                    $datos["numero"] = $CarpetasjudicialesDto[0]->getNumero();
                    $datos["anio"] = $CarpetasjudicialesDto[0]->getAnio();
                    $datos["cveJuzgado"] = $CarpetasjudicialesDto[0]->getCveJuzgado();
                }
                break;
        }
        return json_encode($datos);
    }
    
    public function jsonPromocionGenerada($datosJson){
        $json = '';
        if($datosJson != ""){
            $json.='{"Estatus":"Ok","msj":"Se registro la promocion",';
            $json.='"idActuacion":"'.$datosJson["idActuacion"].'",';
            $json.='"numActuacion":"'.$datosJson["numActuacion"].'",';
            $json.='"aniActuacion":"'.$datosJson["aniActuacion"].'",';
            $json.='"numero":"'.$datosJson["numero"].'",';
            $json.='"anio":"'.$datosJson["anio"].'",';
            $json.='"observaciones":'.$datosJson["observaciones"].',';
            $json.='"noFojas":"'.$datosJson["noFojas"].'",';
            $json.='"tipoCarpeta":"'.$datosJson["tipoCarpeta"].'",';
            $json.='"desJuzgado":"'.$datosJson["desJuzgado"].'",';
            $json.='"fechaRegistro":'.$datosJson["fechaRegistro"].',';
            $json.='"sintesis":'.$datosJson["sintesis"].',';
            $json.='"promovente":'.$datosJson["promovente"].',';
            $json.='"generoPDF":"'.$datosJson["generoPDF"].'",';
            $json.='"usuario":"'.$datosJson["usuario"].'",';
            $json.='"password":"'.$datosJson["password"].'"';
            $json.='}';
        }
      
        return $json;
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("PromocionesServerScramble.wsdl");
$server->setClass("PromocionesServer");
$server->handle();
?>

