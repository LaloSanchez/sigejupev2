<?php


class PromocionesterminoServer {

    public function __construct() {
        
    }
    public function obtenerCarpetas(){      
      include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
      include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");  
      
      $obtengoCarpetas = new TiposcarpetasController();
      $obtentoCarpetasDto = new TiposcarpetasDTO();
      $resultTiposcarpetas = $obtengoCarpetas->selectTiposcarpetas($obtentoCarpetasDto);
      $dtoToJson = new DtoToJson($resultTiposcarpetas);
      return $dtoToJson->toJson();
//      regreso cveTipoCarpeta y descTipoCarpeta
    }
      public function obtenerJuzgados(){
      include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
      include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");  
      
      $obtengoJuzgados = new JuzgadosController();
      $obtengoJuzgadosDto = new juzgadosDTO();
      $resultJuzgados = $obtengoJuzgados->selectJuzgados($obtengoJuzgadosDto);
      $dtoToJson = new DtoToJson($resultJuzgados);
      return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }
     public function obtenerGeneros(){
      include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
      include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php");  
      
      $obtengoGeneros = new GenerosDAO();
      $obtengoGenerosDto = new GenerosDTO();
      $resultGeneros = $obtengoGeneros->selectGeneros($obtengoGenerosDto);
      $dtoToJson = new DtoToJson($resultGeneros);
      return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }
     public function obtenerTipoPersonas(){
      include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
      include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");  
      
      $obtengoTiposPersonas = new TipospersonasDAO();
      $obtengoTiposPersonasDto = new TipospersonasDTO();
      $resultTiposPersonas = $obtengoTiposPersonas->selectTipospersonas($obtengoTiposPersonasDto);
      $dtoToJson = new DtoToJson($resultTiposPersonas);
      return $dtoToJson->toJson();
//      regreso totalCount = cantidad numerica mayor a 0
    }
    public function guardarPromociontermino($u, $p, $jsonPromocionCausa, $listaPromoventes) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");              
              include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");  
              include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
              include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php"); 
              include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
              include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonPromocionCausa != "") {            
            if ($this->isJSON($jsonPromocionCausa)) {
                $arrayPromocionCausa = json_decode($jsonPromocionCausa, true);

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
                    }
                    else if($arrayPromocionCausa["cveTipoCarpeta"] != "" || $arrayPromocionCausa["cveTipoCarpeta"] != "0"){                        
                        $obtengoCarpetas = new TiposcarpetasController();
                        $obtentoCarpetasDto = new TiposcarpetasDTO();
                        $obtentoCarpetasDto->setCveTipoCarpeta($arrayPromocionCausa["cveTipoCarpeta"]);
                        $resultTiposcarpetas = $obtengoCarpetas->selectTiposcarpetas($obtentoCarpetasDto);
                        if($resultTiposcarpetas != ""){
                           
                        }else{
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
                    }else if($arrayPromocionCausa["txtnumero"] != "" || $arrayPromocionCausa["txtnumero"] != "0"){                        
                        $CarpetasjudicialesController = new CarpetasjudicialesController();
                        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                        $CarpetasjudicialesDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $CarpetasjudicialesDto->setAnio($arrayPromocionCausa["txtAnio"]);
                        $CarpetasjudicialesDto->setNumero($arrayPromocionCausa["txtnumero"]);
                        $ResCarpetasjudiciales = $CarpetasjudicialesController->selectCarpetaExhortoAmparo($CarpetasjudicialesDto);
                        
                        if($ResCarpetasjudiciales != ""){
                           
                        }else{
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
                    }
                    else if($arrayPromocionCausa["txtAnio"] != "" || $arrayPromocionCausa["txtAnio"] != "0"){                        
                        $CarpetasjudicialesController = new CarpetasjudicialesController();
                        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                        $CarpetasjudicialesDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $CarpetasjudicialesDto->setAnio($arrayPromocionCausa["txtAnio"]);
                        $CarpetasjudicialesDto->setNumero($arrayPromocionCausa["txtnumero"]);
                        $ResCarpetasjudiciales = $CarpetasjudicialesController->selectCarpetaExhortoAmparo($CarpetasjudicialesDto);
                        
                        if($ResCarpetasjudiciales != ""){
                           
                        }else{
                            $errorGeneral = true;
                                $mensajeErrorArray .= "Anio sin relacion ";
                        }
                }
                }
//                numero de hojas de la promociona que genera causa NUMERICO
                if (!array_key_exists("noFojas", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " noFojas, ";
                }else{
                    if($arrayPromocionCausa["noFojas"] == ""){
                        $errorGeneral = true;
                        $mensajeErrorArray .= " noFojas, ";
                    }
                }                                               
//                sintesis de la promocion que genera causa
                if (!array_key_exists("sintesis", $arrayPromocionCausa)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " sintesis, ";
                }else{
                    if($arrayPromocionCausa["sintesis"] == ""){
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
                            $arrayPromocionCausa["cveTipoActuacion"] = 13;
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
                    }else if($arrayPromocionCausa["cveJuzgado"] != "" || $arrayPromocionCausa["cveJuzgado"] != "0"){
                        $obtengoJuzgados = new juzgadosController();
                        $obtengoJuzgadosDto = new juzgadosDTO();
                        $obtengoJuzgadosDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);
                        $resultJuzgados = $obtengoJuzgados->selectJuzgados($obtengoJuzgadosDto);
                        if($resultJuzgados != ""){
                            
                        }else{
                            $errorGeneral = true;
                            $mensajeErrorArray .= " cveJuzgado no existe, ";
                        }
                    }
                }
            //                asigNumero CON VALOR = 0
                            if (!array_key_exists("asigNumero", $arrayPromocionCausa)) {
                                $arrayPromocionCausa["asigNumero"] = 0;
                            }

//                json con los valores parametros 
//                    Generales
//                        cveTipoPersona:
//                          valor  1 es persona fisica
//                          valor 2 es persona moral
//                        idPromovente = contador numerico de los promoventes agregados
//                        cveGeneros:
//                          hombre es valor 1
//                          mujer es valor 2
//                          no identificado es valor 3
//                        nombre:
        //                    si es persona fisica cveTipoPersona = 1
        //                        nombre, paterno, materno  
//                    si es persona moral cveTipoPersona = 2 y cveGenero = 3
//                        nombrepersonamoral
                    if($this->isJSON($listaPromoventes)){
                        if ($listaPromoventes != "") {
                            $promoventes = json_decode($listaPromoventes, true);
//                            COMPRUEBO CVE TIPOPERSONA
                            foreach ($promoventes as $respro){
                                $obtengoTiposPersonas = new TipospersonasDAO();
                                $obtengoTiposPersonasDto = new TipospersonasDTO();
                                $obtengoTiposPersonasDto->setCveTipoPersona($respro['cveTipoPersona']);
                                $resultTiposPersonas = $obtengoTiposPersonas->selectTipospersonas($obtengoTiposPersonasDto);
                                if($resultTiposPersonas != ""){
                                    
                                }else{
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " cveTipoPersona no existe, ";
                                }
                            }
//                            COMPRUEBO CVE GENERO
                            foreach ($promoventes as $resGEN){
                                $obtengoGeneros = new GenerosDAO();
                                $obtengoGenerosDto = new GenerosDTO();
                                $obtengoGenerosDto->setCveGenero($resGEN['cveGenero']);
                                $resultGeneros = $obtengoGeneros->selectGeneros($obtengoGenerosDto);
                                if($resultGeneros != ""){
                                    
                                }else{
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " cveGenero no existe, ";
                                }
                            }
                        }else {
                            return "ERROR: PROMOVENTES VACIO";
                        }                           
                    }else{
                        return "ERROR: JSON INCORRECTO";
                    }
                if ($errorGeneral) {
                    $mensajeError .= substr($mensajeErrorArray, 0, -2);
                }

                if (!$errorGeneral) {
                        $PromocionterminoDto = new ActuacionesDTO();
                        $PromocionterminoDto->setCveTipoCarpeta($arrayPromocionCausa["cveTipoCarpeta"]);
                        $PromocionterminoDto->setNoFojas($arrayPromocionCausa["noFojas"]);
                        $PromocionterminoDto->setSintesis($arrayPromocionCausa["sintesis"]);
                        $PromocionterminoDto->setObservaciones($arrayPromocionCausa["txtNotas"]);
                        $PromocionterminoDto->setCveTipoActuacion($arrayPromocionCausa["cveTipoActuacion"]);
                        $PromocionterminoDto->setCveUsuario($arrayPromocionCausa["cveUsuario"]);
                        $PromocionterminoDto->setCveJuzgado($arrayPromocionCausa["cveJuzgado"]);  
                        $PromocionterminoDto->setNumActuacion("");
                        $PromocionterminoDto->setAniActuacion("");
                        
                      $PromocionterminoController = new ActuacionesController();
                      $PromocionterminoResult = $PromocionterminoController->guardarActuacion_PromocionterminoServer($PromocionterminoDto, "", $listaPromoventes);
                        if($PromocionterminoResult != ""){
                            foreach ($PromocionterminoResult as $res){
                                $desJuzgado = $res->getCveJuzgado();
                                $idActuacion = $res->getIdActuacion();
                                $aniActuacion = $res->getAniActuacion();
                                $numActuacion = $res->getNumActuacion();
                            }
                             $respuesta = array("desJuzgado"=>$desJuzgado,"idActuacion"=>$idActuacion
                                    ,"aniActuacion"=>$aniActuacion,"numActuacion"=>$numActuacion,"Estatus"=>"Ok");
                             return json_encode($respuesta);
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
    
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("PromocionesterminoServerScramble.wsdl");
$server->setClass("PromocionesterminoServer");
$server->handle();
?>


