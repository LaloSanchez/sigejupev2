<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatuscarpetas/EstatuscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatuscarpetas/EstatuscarpetasDTO.Class.php");
class JuzgadorescarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarJuzgadorescarpetas($JuzgadorescarpetasDto){
        $JuzgadorescarpetasDto->setidJuzgadorCarpeta(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getidJuzgadorCarpeta()))));
        $JuzgadorescarpetasDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getidJuzgador()))));
        $JuzgadorescarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getidCarpetaJudicial()))));
        $JuzgadorescarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getactivo()))));
        $JuzgadorescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getfechaRegistro()))));
        $JuzgadorescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadorescarpetasDto->getfechaActualizacion()))));
        return $JuzgadorescarpetasDto;
    }
    public function selectJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor=null){
        $JuzgadorescarpetasDto=$this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
        $JuzgadorescarpetasDao = new JuzgadorescarpetasDAO();
        $JuzgadorescarpetasDto = $JuzgadorescarpetasDao->selectJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor);
        return $JuzgadorescarpetasDto;
    }
    public function insertJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor=null){
        $JuzgadorescarpetasDto=$this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
        $JuzgadorescarpetasDao = new JuzgadorescarpetasDAO();
        $JuzgadorescarpetasDto = $JuzgadorescarpetasDao->insertJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor);
        return $JuzgadorescarpetasDto;
    }
    public function updateJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor=null){
        $JuzgadorescarpetasDto=$this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
        $JuzgadorescarpetasDao = new JuzgadorescarpetasDAO();
        //$tmpDto = new JuzgadorescarpetasDTO();
        //$tmpDto = $JuzgadorescarpetasDao->selectJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor);
        //if($tmpDto!=""){//$JuzgadorescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $JuzgadorescarpetasDto = $JuzgadorescarpetasDao->updateJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor);
        return $JuzgadorescarpetasDto;
        //}
        //return "";
    }
    public function deleteJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor=null){
        $JuzgadorescarpetasDto=$this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
        $JuzgadorescarpetasDao = new JuzgadorescarpetasDAO();
        $JuzgadorescarpetasDto = $JuzgadorescarpetasDao->deleteJuzgadorescarpetas($JuzgadorescarpetasDto,$proveedor);
        return $JuzgadorescarpetasDto;
    }
    
    public function carpetasJuzgadores($carpetasJudicialesDto, $param, $proveedor=null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $datos = array();
        $juzgadosTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $cveDistrito = 0;
        $order = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        /*
         * Consultar los juzgados correspondientes a la adscripcion del usuario
         * logueado
         */
        $juzgadosTmp->setCveJuzgado($_SESSION["cveAdscripcion"]);
        $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
        if ( $juzgadosTmp != "" ) {
            $cveDistrito = $juzgadosTmp[0]->getCveDistrito();
            $juzgados = new JuzgadosDTO();
            $juzgados->setCveDistrito($cveDistrito);
            $juzgados->setActivo("S");
            $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
            if ( $juzgados != "" ) {
                foreach ( $juzgados as $juzgado ) {
                    $cveJuzgado[] = $juzgado->getCveJuzgado();
                }
                $cadenaJuzgados = implode(",", $cveJuzgado);
                if ( !array_key_exists('porRegion', $param) || $param['porRegion'] == "" ) {
                    $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ")";
                }
            }
        }
        
        if ( 
             $carpetasJudicialesDto->getCveTipoCarpeta() == "" &&
             $carpetasJudicialesDto->getNumero() == "" &&
             $carpetasJudicialesDto->getAnio() == "" ) {
            if ( $param["fechaInicio"] != "" && $param["fechaFin"] != "" ) {
                $fInicio = explode('/', $param['fechaInicio']);
                $fFin = explode('/', $param['fechaFin']);
                $fechaInicio = $fInicio[2] . '-' . $fInicio[1] . '-' . $fInicio[0];
                $fechaFin = $fFin[2] . '-' . $fFin[1] . '-' . $fFin[0];
                $order .= " AND CAST(fechaRadicacion AS DATE) >= CAST('" . $fechaInicio . "' AS DATE) 
                            AND CAST(fechaRadicacion AS DATE) <= CAST('" . $fechaFin . "' AS DATE) ";
            }
        }
        
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $order .= " ORDER BY numero, anio";
        $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, $order, $this->proveedor, $param);
        //var_dump($param);
        if ( $carpetasjudicialesDto !="" ) {
            for( $n = 0; $n < count($carpetasjudicialesDto); $n++ ) {
                
                $juzgadosDto = new JuzgadosDTO();
                
                $juzgadosDto->setCveJuzgado($carpetasjudicialesDto[$n]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                if($juzgadosDto != ""){
                    $desJuzgado = $juzgadosDto[0]->getDesJuzgado();
                } else {
                    $desJuzgado = "";
                }
                
                $tiposcarpetasDto = new TiposcarpetasDTO();
                $tiposcarpetasDao = new TiposcarpetasDAO();
                $tiposcarpetasDto->setCveTipoCarpeta($carpetasjudicialesDto[$n]->getCveTipoCarpeta());
                $tiposcarpetasDto = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto, "", $this->proveedor);
                if($tiposcarpetasDto != ""){
                    $desTipoCarpeta = $tiposcarpetasDto[0]->getDesTipoCarpeta();
                } else {
                    $desTipoCarpeta = "";
                }
                $juzgadorescarpetaDto = new JuzgadorescarpetasDTO();
                $juzgadorescarpetaDao = new JuzgadorescarpetasDAO();
                $juzgadorescarpetaDto->setIdCarpetaJudicial($carpetasjudicialesDto[$n]->getIdCarpetaJudicial());
                $juzgadorescarpetaDto->setActivo("S");
                $juzgadorescarpetaDto = $juzgadorescarpetaDao->selectJuzgadorescarpetas($juzgadorescarpetaDto, "", $this->proveedor);
                if($juzgadorescarpetaDto != ""){
                    $idJuzgador = $juzgadorescarpetaDto[0]->getIdJuzgador();
                    $idJuzgadorCarpeta = $juzgadorescarpetaDto[0]->getIdJuzgadorCarpeta();
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($juzgadorescarpetaDto[0]->getIdJuzgador());
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                    if($juzgadoresDto != ""){
                        $juzgador = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                    } else {
                        $juzgador = "";
                    }
                } else {
                    $idJuzgador = 0;
                    $idJuzgadorCarpeta = 0;
                    $juzgador = "";
                }
                $etapasProcesalesDto = new EtapasprocesalesDTO();
                $etapasProcesalesDao = new EtapasprocesalesDAO();
                $etapasProcesalesDto->setCveEtapaProcesal($carpetasjudicialesDto[$n]->getCveEtapaProcesal());
                $etapasProcesalesDto->setActivo("S");
                $etapasProcesalesDto = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                if($etapasProcesalesDto != ""){
                    $desEtapaprocesal = utf8_encode($etapasProcesalesDto[0]->getDesEtapaProcesal());
                } else {
                    $desEtapaprocesal = "";
                }
                $estatusCarpetasDto = new EstatuscarpetasDTO();
                $estatusCarpetasDao = new EstatuscarpetasDAO();
                $estatusCarpetasDto->setCveEstatusCarpeta($carpetasjudicialesDto[$n]->getCveEstatusCarpeta());
                $estatusCarpetasDto->setActivo("S");
                $estatusCarpetasDto = $estatusCarpetasDao->selectEstatuscarpetas($estatusCarpetasDto, "", $this->proveedor);
                if($estatusCarpetasDto != "") {
                    $desEstatusCarpeta = $estatusCarpetasDto[0]->getDesEstatusCarpeta();
                } else {
                    $desEstatusCarpeta = "";
                }
                $datos[] = array(
                                    "idCarpetaJudicial" => $carpetasjudicialesDto[$n]->getIdCarpetaJudicial(),
                                    "numero" => $carpetasjudicialesDto[$n]->getNumero(),
                                    "anio" => $carpetasjudicialesDto[$n]->getAnio(),
                                    "desJuzgado" => utf8_encode($desJuzgado),
                                    "desEtapaProcesal" => utf8_encode($desEtapaprocesal),
                                    "desTipoCarpeta" => utf8_encode($desTipoCarpeta),
                                    "desEstatusCarpeta" => utf8_encode($desEstatusCarpeta),
                                    "idJuzgadorCarpeta" => $idJuzgadorCarpeta,
                                    "idJuzgador" => $idJuzgador,
                                    "juzgador" => $juzgador,
                                    "nuc" => utf8_encode($carpetasjudicialesDto[$n]->getNuc()),
                                    "carpetaInv" => utf8_encode($carpetasjudicialesDto[$n]->getCarpetaInv()),
                                    "fechaRegistro" => $carpetasjudicialesDto[$n]->getFechaRegistro(),
                                    "fechaRadicacion" => $carpetasjudicialesDto[$n]->getFechaRadicacion()
                                );
            }
        }
        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return $datos;
    }
}
?>