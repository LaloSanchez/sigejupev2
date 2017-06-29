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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresosadscripciones/CeresosadscripcionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresosadscripciones/CeresosadscripcionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

//ceresos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");

include_once(dirname(__FILE__)."/../../../webservice/cliente/adscripciones/AdscripcionesCliente.php");

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // 
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // 
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos

class CeresosadscripcionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCeresosadscripciones($CeresosadscripcionesDto) {
        $CeresosadscripcionesDto->setidCeresoAdscripcion(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getidCeresoAdscripcion()))));
        $CeresosadscripcionesDto->setcveCereso(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getcveCereso()))));
        $CeresosadscripcionesDto->setcveAdscripcion(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getcveAdscripcion()))));
        $CeresosadscripcionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getactivo()))));
        $CeresosadscripcionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getfechaRegistro()))));
        $CeresosadscripcionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($CeresosadscripcionesDto->getfechaActualizacion()))));
        return $CeresosadscripcionesDto;
    }

    public function selectCeresosadscripciones($CeresosadscripcionesDto, $proveedor = null) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
        $CeresosadscripcionesDto = $CeresosadscripcionesDao->selectCeresosadscripciones($CeresosadscripcionesDto, $proveedor);
        return $CeresosadscripcionesDto;
    }

    public function insertCeresosadscripciones($CeresosadscripcionesDto, $cveAccion,$paramSession, $proveedor = null) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
        // verificar que no exista un dublicado
        $CeresosadscripcionesDtoAux = $this->selectCeresosadscripciones($CeresosadscripcionesDto);
        
        if($CeresosadscripcionesDtoAux == ""){
        
            $CeresosadscripcionesDto = $CeresosadscripcionesDao->insertCeresosadscripciones($CeresosadscripcionesDto, $proveedor);

            if($CeresosadscripcionesDto != ""){
                $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion($cveAccion); //
                    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
                    $bitacoraDTO->setObservaciones("INSERCION CERESO ADSCRIPCION: " . $dtoToJson->toJson("Insercion")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session

                    $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            }
        }else{
            $CeresosadscripcionesDto = "existe";
        }    
        
        return $CeresosadscripcionesDto;
    }

    public function updateCeresosadscripciones($CeresosadscripcionesDto,$cveAccion,$paramSession, $proveedor = null) {
        //$CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
        $CeresosadscripcionesDtoAux  = new CeresosadscripcionesDTO();
                
        $CeresosadscripcionesDtoAux->setCveCereso($CeresosadscripcionesDto->getCveCereso());
        $CeresosadscripcionesDtoAux->setCveAdscripcion($CeresosadscripcionesDto->getCveAdscripcion());
        $CeresosadscripcionesDtoAux->setActivo("S");
        $CeresosadscripcionesDtoAux = $this->selectCeresosadscripciones($CeresosadscripcionesDtoAux);
        
//        echo "<".$cveAccion.">";
//        print_r($CeresosadscripcionesDtoAux);
        
        if($cveAccion =="244"){
            $CeresosadscripcionesDto = $CeresosadscripcionesDao->updateCeresosadscripciones($CeresosadscripcionesDto, $proveedor);

            if($CeresosadscripcionesDto != ""){
                $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion($cveAccion); //
                    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
                    if($cveAccion =="244"){
                        $bitacoraDTO->setObservaciones("Eliminacion logica: " . $dtoToJson->toJson("Borrado logico")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                    }else{
                        $bitacoraDTO->setObservaciones("Modificacion: " . $dtoToJson->toJson("Modificacion")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                    }
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session

                    $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            }
        }else{
            if($CeresosadscripcionesDtoAux == ""){
                $CeresosadscripcionesDto = $CeresosadscripcionesDao->updateCeresosadscripciones($CeresosadscripcionesDto, $proveedor);

                if($CeresosadscripcionesDto != ""){
                    $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion($cveAccion); //
                        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                        $dtoToJson = new DtoToJson($CeresosadscripcionesDto);
                        if($cveAccion =="244"){
                            $bitacoraDTO->setObservaciones("Eliminacion logica: " . $dtoToJson->toJson("Borrado logico")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                        }else{
                            $bitacoraDTO->setObservaciones("Modificacion: " . $dtoToJson->toJson("Modificacion")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                        }
                        $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                        $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                        $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session

                        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                }
            }else{
                $CeresosadscripcionesDto = "existe";
            }
        }
        
        return $CeresosadscripcionesDto;

    }

    public function deleteCeresosadscripciones($CeresosadscripcionesDto,$proveedor = null) {
        $CeresosadscripcionesDto = $this->validarCeresosadscripciones($CeresosadscripcionesDto);
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
        $CeresosadscripcionesDto = $CeresosadscripcionesDao->deleteCeresosadscripciones($CeresosadscripcionesDto, $proveedor);
               
        return $CeresosadscripcionesDto;
    }
    
//                                          $ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null   
    public function consultarDescripciones($CeresosadscripcionesDto,$param, $proveedor = null) {
        
        $validacion = new Validacion();
        
        $CeresosadscripcionesDto = $this->verificaCeros($CeresosadscripcionesDto);
        $CeresosadscripcionesDto->setActivo("S");
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();                     //$ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null      
        $CeresosadscripcionesDto = $CeresosadscripcionesDao->selectCeresosadscripciones($CeresosadscripcionesDto, $proveedor,"order by idCeresoAdscripcion desc",$param,null);
        
        $adscripciones = new AdscripcionesCliente();
        $arrayAds = json_decode($adscripciones->getAdscripciones());
        
        if($CeresosadscripcionesDto != ""){
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($CeresosadscripcionesDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($CeresosadscripcionesDto as $ceresoAds){
                $json .= "{";
                $json .= '"idCeresoAdscripcion":' . json_encode(utf8_encode($ceresoAds->getIdCeresoAdscripcion())) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($ceresoAds->getCveCereso())) . ",";
                $ceresoDTO = new CeresosDTO();
                $ceresoDAO = new CeresosDAO();
                $ceresoDTO->setCveCereso($ceresoAds->getCveCereso());
                $ceresoDTO->setActivo("S");
                $ceresoDTO = $ceresoDAO->selectCeresos($ceresoDTO);
                
                if($ceresoDTO != ""){
                    $json .= '"desCereso":' . json_encode(utf8_encode($ceresoDTO[0]->getDesCereso())) . ",";
                }
                $json .= '"cveAdscripcion":' . json_encode(utf8_encode($ceresoAds->getCveAdscripcion())) . ",";

                foreach ($arrayAds->data as $datos){
                    if($ceresoAds->getCveAdscripcion() == $datos->cveAdscripcion){
                        $json .= '"nomAdscripcion":'.json_encode($datos->nomAdscripcion) . ",";
                        break;
                    }
                }
                
                $json .= '"activo":' . json_encode(utf8_encode($ceresoAds->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($ceresoAds->getFechaRegistro()))) . "";
                
                $json .= "}";
                $x++;
                if ($x <= count($CeresosadscripcionesDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($CeresosadscripcionesDto) . '"';
            $json .= "}";

            return $json;
        }else{
            return "";
        }
        
    }
    
    public function getPaginas($CeresosadscripcionesDto,$param){
        $CeresosadscripcionesDao = new CeresosadscripcionesDAO();
        $CeresosadscripcionesDto = $this->verificaCeros($CeresosadscripcionesDto);
        $numTot = $CeresosadscripcionesDao->selectCeresosadscripciones($CeresosadscripcionesDto, null, "", $param, " count(idCeresoAdscripcion) as totalCount ");

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
    
    public function verificaCeros($CeresosadscripcionesDto){
        if($CeresosadscripcionesDto->getCveCereso() == "0"){
           $CeresosadscripcionesDto->setCveCereso("") ;
        }
        if($CeresosadscripcionesDto->getCveAdscripcion() == "0"){
           $CeresosadscripcionesDto->setCveAdscripcion("") ;
        }
        
        return $CeresosadscripcionesDto;
    }
    
}

?>