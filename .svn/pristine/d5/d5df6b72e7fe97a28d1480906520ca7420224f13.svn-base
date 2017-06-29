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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionceresos/AtencionceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionceresos/AtencionceresosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // 
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // 
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

//ceresos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos


class AtencionceresosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAtencionceresos($AtencionceresosDto) {
        $AtencionceresosDto->setidAtencionCereso(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getidAtencionCereso()))));
        $AtencionceresosDto->setcveCereso(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getcveCereso()))));
        $AtencionceresosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getcveJuzgado()))));
        $AtencionceresosDto->setactivo(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getactivo()))));
        $AtencionceresosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getfechaRegistro()))));
        $AtencionceresosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AtencionceresosDto->getfechaActualizacion()))));
        return $AtencionceresosDto;
    }

    public function selectAtencionceresos($AtencionceresosDto, $proveedor = null) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosDao = new AtencionceresosDAO();
        $AtencionceresosDto = $AtencionceresosDao->selectAtencionceresos($AtencionceresosDto, $proveedor);
        return $AtencionceresosDto;
    }

    public function insertAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession, $proveedor = null) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosDao = new AtencionceresosDAO();
        // verificar que no exista un dublicado
        $AtencionceresosDtoAux = $this->selectAtencionceresos($AtencionceresosDto);
        
        if($AtencionceresosDtoAux == ""){
    //        print_r($AtencionceresosDto);
            $AtencionceresosDto = $AtencionceresosDao->insertAtencionceresos($AtencionceresosDto, $proveedor);
    //        print_r($AtencionceresosDto);
            if($AtencionceresosDto != ""){
                $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion($cveAccion); //
                    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($AtencionceresosDto);
                    $bitacoraDTO->setObservaciones("INSERCION ATENCION CERESO: " . $dtoToJson->toJson("Insercion")); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                    $bitacoraDTO->setCveUsuario($paramSession["cveUsuarioSesion"]);
                    $bitacoraDTO->setCvePerfil($paramSession["cvePerfilSesion"]); // variable de session
                    $bitacoraDTO->setCveAdscripcion($paramSession["juzgadoSesion"]); // variable de session

                    $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            }
        }else{
            $AtencionceresosDto = "existe";
        }
        
        return $AtencionceresosDto;
    }

    public function updateAtencionceresos($AtencionceresosDto,$cveAccion,$paramSession, $proveedor = null) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosDao = new AtencionceresosDAO();
        $AtencionceresosDtoAux = new AtencionceresosDTO();
        
        $AtencionceresosDtoAux->setCveCereso($AtencionceresosDto->getCveCereso());
        $AtencionceresosDtoAux->setCveJuzgado($AtencionceresosDto->getCveJuzgado());
        $AtencionceresosDtoAux->setActivo("S");
        $AtencionceresosDtoAux = $this->selectAtencionceresos($AtencionceresosDtoAux);
        
        if($cveAccion =="251"){

            $AtencionceresosDto = $AtencionceresosDao->updateAtencionceresos($AtencionceresosDto, $proveedor);

            if($AtencionceresosDto != ""){
                $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion($cveAccion); //
                    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($AtencionceresosDto);
                    if($cveAccion =="251"){
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
            if($AtencionceresosDtoAux == ""){
                
                $AtencionceresosDto = $AtencionceresosDao->updateAtencionceresos($AtencionceresosDto, $proveedor);

                if($AtencionceresosDto != ""){
                    $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion($cveAccion); //
                        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                        $dtoToJson = new DtoToJson($AtencionceresosDto);
                        if($cveAccion =="251"){
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
                $AtencionceresosDto = "existe";
            }
        }
        
        
        return $AtencionceresosDto;

    }

    public function deleteAtencionceresos($AtencionceresosDto, $proveedor = null) {
        $AtencionceresosDto = $this->validarAtencionceresos($AtencionceresosDto);
        $AtencionceresosDao = new AtencionceresosDAO();
        $AtencionceresosDto = $AtencionceresosDao->deleteAtencionceresos($AtencionceresosDto, $proveedor);
        return $AtencionceresosDto;
    }
    
    public function consultarDescripciones($AtencionceresosDto,$param, $proveedor = null) {
        
        $validacion = new Validacion();
        
        $AtencionceresosDto = $this->verificaCeros($AtencionceresosDto);
        $AtencionceresosDto->setActivo("S");
        $AtencionceresosDao = new AtencionceresosDAO();                     //$ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null      
        $AtencionceresosDto = $AtencionceresosDao->selectAtencionceresos($AtencionceresosDto, $proveedor,"order by idAtencionCereso desc",$param,null);
        
        if($AtencionceresosDto != ""){
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($AtencionceresosDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($AtencionceresosDto as $atencionCer){
                $json .= "{";
                $json .= '"idAtencioncereso":' . json_encode(utf8_encode($atencionCer->getIdAtencionCereso())) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($atencionCer->getCveCereso())) . ",";
                $ceresoDTO = new CeresosDTO();
                $ceresoDAO = new CeresosDAO();
                $ceresoDTO->setCveCereso($atencionCer->getCveCereso());
                $ceresoDTO->setActivo("S");
                $ceresoDTO = $ceresoDAO->selectCeresos($ceresoDTO);
                
                if($ceresoDTO != ""){
                    $json .= '"desCereso":' . json_encode(utf8_encode($ceresoDTO[0]->getDesCereso())) . ",";
                }
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($atencionCer->getCveJuzgado())) . ",";
                $juzgadoDTO = new JuzgadosDTO();
                $juzgadoDAO = new JuzgadosDAO();
                $juzgadoDTO->setCveJuzgado($atencionCer->getCveJuzgado());
                $juzgadoDTO->setActivo("S");
                $juzgadoDTO = $juzgadoDAO->selectJuzgados($juzgadoDTO); 
                if($juzgadoDTO != ""){
                    $json .= '"desJuzgado":'.json_encode($juzgadoDTO[0]->getDesJuzgado()) . ",";
                }
                $json .= '"activo":' . json_encode(utf8_encode($atencionCer->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($atencionCer->getFechaRegistro()))) . "";
                
                $json .= "}";
                $x++;
                if ($x <= count($AtencionceresosDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($AtencionceresosDto) . '"';
            $json .= "}";

            return $json;
        }else{
            return "";
        }
        
    }
    
    public function getPaginas($AtencionceresosDto,$param){
        $AtencionceresosDao = new AtencionceresosDAO();
        $AtencionceresosDto = $this->verificaCeros($AtencionceresosDto);
        $numTot = $AtencionceresosDao->selectAtencionceresos($AtencionceresosDto, null, "", $param, " count(idAtencionCereso) as totalCount ");

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
    
    public function verificaCeros($AtencionceresosDto){
        if($AtencionceresosDto->getCveCereso() == "0"){
           $AtencionceresosDto->setCveCereso("") ;
        }
        if($AtencionceresosDto->getCveJuzgado() == "0"){
           $AtencionceresosDto->setCveJuzgado("") ;
        }
        
        return $AtencionceresosDto;
    }

}

?>