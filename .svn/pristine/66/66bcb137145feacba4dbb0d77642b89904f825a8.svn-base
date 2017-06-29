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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class JuzgadoresjuzgadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto->setidJuzgadorJuzgado(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getidJuzgadorJuzgado()))));
        $JuzgadoresjuzgadosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getidJuzgador()))));
        $JuzgadoresjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getcveJuzgado()))));
        $JuzgadoresjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getactivo()))));
        $JuzgadoresjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getfechaRegistro()))));
        $JuzgadoresjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($JuzgadoresjuzgadosDto->getfechaActualizacion()))));
        return $JuzgadoresjuzgadosDto;
    }

    public function selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor = null) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosDao->selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor);
        return $JuzgadoresjuzgadosDto;
    }

    public function insertJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor = null) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosDao->insertJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor);
        return $JuzgadoresjuzgadosDto;
    }

    public function updateJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor = null) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
//$tmpDto = new JuzgadoresjuzgadosDTO();
//$tmpDto = $JuzgadoresjuzgadosDao->selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoresjuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosDao->updateJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor);
        return $JuzgadoresjuzgadosDto;
//}
//return "";
    }

    public function deleteJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor = null) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosDao->deleteJuzgadoresjuzgados($JuzgadoresjuzgadosDto, $proveedor);
        return $JuzgadoresjuzgadosDto;
    }

    public function detalleJuzgadores($JuzgadoresjuzgadosDto) {
        $result = array();
        $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosDao->selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto, null);

        if ($JuzgadoresjuzgadosDto != "") {
            foreach ($JuzgadoresjuzgadosDto as $juzgadores) {
                $juzgadores->getCveJuzgado();
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setActivo("S");
                $juzgadoresDto->setCveJuzgado($juzgadores->getCveJuzgado());
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto = $juzgadoresDao->selectJuzgadoresGenericoJuzgado($juzgadoresDto, "", null);
                if ($juzgadoresDto != "") {
                    $juzgadoresArray = array();
                    foreach ($juzgadoresDto as $juzgador) {
                        $juzgadoresArray[] = array_map("utf8_encode", $juzgador->toString());
                    }
                    $result["type"] = "OK";
                    $result["data"] = $juzgadoresArray;
                } else {
                    $result["type"] = "Error";
                    $result["text"] = "NO SE ENCONTRARON JUZGADORES RELACIONADOS CON ESTE JUZGADO";
                }
            }
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENCONTRARON JUZGADORES RELACIONADOS CON ESTE JUZGADO";
        }

        return json_encode($result);
    }

    public function getinfojuzgadores($param) {
        $result = array();
        if (isset($param["juzgadores"]) != "") {
            $juzgadores = json_decode($param["juzgadores"], true);
            $audienciaJuzgadorArray = array();
            for ($i = 0; $i < count($juzgadores); $i++) {
                $idJuzgador = $juzgadores[$i];
                $etiqueta = "audienciaOrigen";
                $etiqueta2 = "carpetaOrigen";
                if ($i == 1) {
                    $etiqueta = "audienciaDestino";
                    $etiqueta2 = "carpetaDestino";
                }

                // --> OBTENEMOS LAS AUDIENCIAS
                $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciasJuzgadorDto->setActivo("S");
                $audienciasJuzgadorDto->setIdJuzgador($idJuzgador);
                $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                $audienciasJuzgadorDto = $audienciasJuzgadorDao->selectAudienciasjuzgador($audienciasJuzgadorDto);

                if ($audienciasJuzgadorDto != "") {
                    $audienciaArray = array();
                    $countAudi = 0;
                    foreach ($audienciasJuzgadorDto as $audienciaJuzgador) {
                        $audienciaDto = new AudienciasDTO();
                        $audienciaDto->setActivo("S");
                        $audienciaDto->setIdAudiencia($audienciaJuzgador->getIdAudiencia());
                        $audienciaDao = new AudienciasDAO();
                        $audienciaDto = $audienciaDao->selectAudiencias($audienciaDto);
                        if ($audienciaDto != "") {
                            $audienciaDto = $audienciaDto[0];
                            $tiposCarpetasDto = new TiposcarpetasDTO();
                            $tiposCarpetasDto->setActivo("S");
                            $tiposCarpetasDto->setCveTipoCarpeta($audienciaDto->getCveTipoCarpeta());
                            $tiposCarpetasDao = new TiposcarpetasDAO();
                            $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                            if ($tiposCarpetasDto != "") {
                                $audiencias["idAudienciaJuez"] = $audienciaJuzgador->getIdAudienciaJuez();
                                $audiencias["idAudiencia"] = $audienciaDto->getIdAudiencia();
                                $audiencias["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                                $audiencias["numero"] = $audienciaDto->getNumero();
                                $audiencias["anio"] = $audienciaDto->getAnio();
                                $audiencias["peso"] = $audienciaDto->getPeso();
                                $audiencias["tipoAudiencia"] = $tiposCarpetasDto[0]->getDesTipoCarpeta();
                            }

                            // --> Obtenemos el Catalogo de Audiencias
                            $catAudienciasDto = new CataudienciasDTO();
                            $catAudienciasDto->setActivo("S");
                            $catAudienciasDto->setCveCatAudiencia($audienciaDto->getCveCatAudiencia());
                            $catAudienciasDao = new CataudienciasDAO();
                            $catAudienciasDto = $catAudienciasDao->selectCataudiencias($catAudienciasDto);
                            if ($catAudienciasDto != 0) {
                                $audiencias["catAudiencia"] = utf8_encode($catAudienciasDto[0]->getDesCatAudiencia());
                            }

                            $audienciaArray[$countAudi] = $audiencias;
                            $countAudi++;
                            $audienciaJuzgadorArray[$etiqueta] = $audienciaArray;
                        } else {
                            $audienciaJuzgadorArray[$etiqueta] = "";
                        }
                    }
                } else {
                    $audienciaJuzgadorArray[$etiqueta] = "";
                }

                // --> OBTENEMOS LAS CARPETAS
                $carpetasJuzgadoresDto = new JuzgadorescarpetasDTO();
                $carpetasJuzgadoresDto->setActivo("S");
                $carpetasJuzgadoresDto->setIdJuzgador($idJuzgador);
                $carpetasJuzgadoresDao = new JuzgadorescarpetasDAO();
                $carpetasJuzgadoresDto = $carpetasJuzgadoresDao->selectJuzgadorescarpetas($carpetasJuzgadoresDto);
                if ($carpetasJuzgadoresDto != "") {
                    $count = 0;
                    $carpetasJudicialesArray = array();
                    foreach ($carpetasJuzgadoresDto as $carpetasJuzgadores) {
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setActivo("S");
                        $carpetasJudicialesDto->setIdCarpetaJudicial($carpetasJuzgadores->getIdCarpetaJudicial());
                        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            $tiposCarpetasCDto = new TiposcarpetasDTO();
                            $tiposCarpetasCDto->setActivo("S");
                            $tiposCarpetasCDto->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
                            $tiposCarpetasCDao = new TiposcarpetasDAO();
                            $tiposCarpetasCDto = $tiposCarpetasCDao->selectTiposcarpetas($tiposCarpetasCDto);
                            $carpetas = array();
                            if ($tiposCarpetasCDto != "") {
                                $carpetas["idJuzgadorCarpeta"] = $carpetasJuzgadores->getIdJuzgadorCarpeta();
                                $carpetas["idCarpetaJudicial"] = $carpetasJudicialesDto->getIdCarpetaJudicial();
                                $carpetas["numero"] = $carpetasJudicialesDto->getNumero();
                                $carpetas["anio"] = $carpetasJudicialesDto->getAnio();
                                $carpetas["peso"] = $carpetasJudicialesDto->getPonderacion();
                                $carpetas["tipoCarpeta"] = $tiposCarpetasCDto[0]->getDesTipoCarpeta();
                                $carpetas["fechaRadicacion"] = $carpetasJudicialesDto->getFechaRadicacion();
                            }
                            $carpetasJudicialesArray[$count] = $carpetas;
                            $count++;
                        } else {
                            $audienciaJuzgadorArray[$etiqueta2] = "";
                        }
                    }
                    $audienciaJuzgadorArray[$etiqueta2] = $carpetasJudicialesArray;
                } else {
                    $audienciaJuzgadorArray[$etiqueta2] = "";
                }

                $result["type"] = "OK";
                $result["data"] = $audienciaJuzgadorArray;
            }
        } else {
            $result["error"] = "Error";
            $result["text"] = "NO SE ENVI&Oacute; INFORMACI&Oacute;N";
        }
        return json_encode($result);
    }

    public function changeInfoJuzgador($param) {
        $juzgadoOrigen = $param["juzgadoOrigen"];
        $juzgadoDestino = $param["juzgadoDestino"];
        $juzgadorDestino = $param["juzgadorDestino"];
        $juzgadorOrigen = $param["juzgadorOrigen"];
        $carpetasDestino = $param["carpetasDestino"];
        $carpetasOrigen = $param["carpetasOrigen"];
        $audienciasDestino = $param["audienciasDestino"];
        $audienciasOrigen = $param["audienciasOrigen"];
        $result = array();
        if ($juzgadorDestino != "" && $juzgadorOrigen != "") {

            $carpetasOrigen = json_decode($carpetasOrigen, true);
            if (count($carpetasOrigen) != 0) {
                foreach ($carpetasOrigen as $carpetaOrigen) {
                    if ($carpetaOrigen != "" || $carpetaOrigen != null) {
                        $idJuzgadorCarpeta = $carpetaOrigen["idJuzgadorCarpeta"];
                        $juzgadorCarpetaDto = new JuzgadorescarpetasDTO();
                        $juzgadorCarpetaDto->setIdJuzgadorCarpeta($idJuzgadorCarpeta);
                        $juzgadorCarpetaDto->setActivo("N");
                        $juzgadorCarpetaDao = new JuzgadorescarpetasDAO();
                        $juzgadorCarpetaDto = $juzgadorCarpetaDao->updateJuzgadorescarpetas($juzgadorCarpetaDto);
                        if ($juzgadorCarpetaDto != "") {
                            $juzgadorCarpetaInsertCtr = new JuzgadorescarpetasDTO();
                            $juzgadorCarpetaInsertCtr->setActivo("S");
                            $juzgadorCarpetaInsertCtr->setIdJuzgador($juzgadorDestino);
                            $juzgadorCarpetaInsertCtr->setIdCarpetaJudicial($juzgadorCarpetaDto[0]->getIdCarpetaJudicial());
                            $juzgadorCarpetaInsertCtr = $juzgadorCarpetaDao->insertJuzgadorescarpetas($juzgadorCarpetaInsertCtr);
                        }
                        // Calculamos la ponderacion
                        $peso = $carpetaOrigen["peso"];
                        $fechaRadicacion = $carpetaOrigen["fechaRadicacion"];
                        $mes = date("m", strtotime($fechaRadicacion));
                        $anio = date("Y", strtotime($fechaRadicacion));
                        $param = array();
                        $param["mes"] = $mes;
                        $param["anio"] = $anio;
                        $param["peso"] = $peso;
                        $param["juzgadoOrigen"] = $juzgadoOrigen;
                        $param["juzgadoDestino"] = $juzgadoDestino;
                        $param["juzgadorOrigen"] = $juzgadorOrigen;
                        $param["juzgadorDestino"] = $juzgadorDestino;
                        $this->ponderaciones($param);
                    }
                }
            }

            $audienciasOrigen = json_decode($audienciasOrigen, true);
            if (count($audienciasOrigen) != 0) {
                foreach ($audienciasOrigen as $audienciaOrigen) {
                    if ($audienciaOrigen != "" || $audienciaOrigen != null) {
                        $idJuzgadorAudiencia = $audienciaOrigen["idAudienciaJuez"];
                        $audienciaOrigenDto = new AudienciasjuzgadorDTO();
                        $audienciaOrigenDto->setActivo("N");
                        $audienciaOrigenDto->setIdAudienciaJuez($idJuzgadorAudiencia);
                        $audienciaOrigenDao = new AudienciasjuzgadorDAO();
                        $audienciaOrigenDto = $audienciaOrigenDao->updateAudienciasjuzgador($audienciaOrigenDto);
                        if ($audienciaOrigenDto != "") {
                            $audienciaInsertDto = new AudienciasjuzgadorDTO();
                            $audienciaInsertDto->setIdAudiencia($audienciaOrigenDto[0]->getIdAudiencia());
                            $audienciaInsertDto->setIdJuzgador($juzgadorDestino);
                            $audienciaInsertDto->setCveFuncionJuzgador($audienciaOrigenDto[0]->getCveFuncionJuzgador());
                            $audienciaInsertDto->setActivo("S");
                            $audienciaInsertDto = $audienciaOrigenDao->insertAudienciasjuzgador($audienciaInsertDto);
                        }
                    }
                }
            }

            $carpetasDestino = json_decode($carpetasDestino, true);
            if (count($carpetasDestino) != 0) {
                foreach ($carpetasDestino as $carpetaDestino) {
                    if ($carpetaDestino != "" || $carpetaDestino != null) {
                        $idJuzgadorCarpeta = $carpetaDestino["idJuzgadorCarpeta"];
                        $juzgadorCarpetasDto = new JuzgadorescarpetasDTO();
                        $juzgadorCarpetasDto->setActivo("N");
                        $juzgadorCarpetasDto->setIdJuzgadorCarpeta($idJuzgadorCarpeta);
                        $juzgadorCarpetasDao = new JuzgadorescarpetasDAO();
                        $juzgadorCarpetasDto = $juzgadorCarpetasDao->updateJuzgadorescarpetas($juzgadorCarpetasDto);
                        if ($juzgadorCarpetasDto != "") {
                            $juzgadorCarpetaInsertsCtr = new JuzgadorescarpetasDTO();
                            $juzgadorCarpetaInsertsCtr->setActivo("S");
                            $juzgadorCarpetaInsertsCtr->setIdJuzgador($juzgadorOrigen);
                            $juzgadorCarpetaInsertsCtr->setIdCarpetaJudicial($juzgadorCarpetasDto[0]->getIdCarpetaJudicial());
                            $juzgadorCarpetaInsertsCtr = $juzgadorCarpetasDao->insertJuzgadorescarpetas($juzgadorCarpetaInsertsCtr);
                        }
                        // Calculamos la ponderacion
                        $peso = $carpetaDestino["peso"];
                        $fechaRadicacion = $carpetaDestino["fechaRadicacion"];
                        $mes = date("m", strtotime($fechaRadicacion));
                        $anio = date("Y", strtotime($fechaRadicacion));
                        $param = array();
                        $param["mes"] = $mes;
                        $param["anio"] = $anio;
                        $param["peso"] = $peso;
                        $param["juzgadoOrigen"] = $juzgadoDestino;
                        $param["juzgadoDestino"] = $juzgadoOrigen;
                        $param["juzgadorOrigen"] = $juzgadorDestino;
                        $param["juzgadorDestino"] = $juzgadorOrigen;
                        $this->ponderaciones($param);
                    }
                }
            }

            $audienciasDestino = json_decode($audienciasDestino, true);
            if (count($audienciasDestino) != 0) {
                foreach ($audienciasDestino as $audienciaDestino) {
                    if ($audienciaDestino != "" || $audienciaDestino != null) {
                        $idJuzgadorAudiencia = $audienciaDestino["idAudienciaJuez"];
                        $audienciaOrigensDto = new AudienciasjuzgadorDTO();
                        $audienciaOrigensDto->setActivo("N");
                        $audienciaOrigensDto->setIdAudienciaJuez($idJuzgadorAudiencia);
                        $audienciaOrigensDao = new AudienciasjuzgadorDAO();
                        $audienciaOrigensDto = $audienciaOrigensDao->updateAudienciasjuzgador($audienciaOrigensDto);
                        if ($audienciaOrigensDto != "") {
                            $audienciaInsertsDto = new AudienciasjuzgadorDTO();
                            $audienciaInsertsDto->setIdAudiencia($audienciaOrigensDto[0]->getIdAudiencia());
                            $audienciaInsertsDto->setIdJuzgador($juzgadorOrigen);
                            $audienciaInsertsDto->setCveFuncionJuzgador($audienciaOrigensDto[0]->getCveFuncionJuzgador());
                            $audienciaInsertsDto->setActivo("S");
                            $audienciaInsertsDto = $audienciaOrigensDao->insertAudienciasjuzgador($audienciaInsertsDto);
                        }
                    }
                }
            }
        } else {
            $result["type"] = "ERROR";
            $result["text"] = "ERROR NO HAS SELECCIONADO JUZGADORES";
        }
        $params = array();
        $juzgadores = array($juzgadorOrigen, $juzgadorDestino);
        $juzgados = array($juzgadoOrigen, $juzgadoDestino);
        $params["juzgadores"] = json_encode($juzgadores);
        $params["juzgado"] = json_encode($juzgados);
        return $this->getinfojuzgadores($params);
    }

    private function ponderaciones($param) {
        if (is_array($param)) {
            if ($param["mes"] != "" && $param["anio"] != "") {
                // --> Origen
                $controlCargasDto = new ControlcargasDTO();
                $controlCargasDto->setCveMes($param["mes"]);
                $controlCargasDto->setAnioCarga($param["anio"]);
                $controlCargasDto->setCveJuzgado($param["juzgadoOrigen"]);
                $controlCargasDto->setIdJuzgador($param["juzgadorOrigen"]);
                $controlCargasDao = new ControlcargasDAO();
                $controlCargasDto = $controlCargasDao->selectControlcargas($controlCargasDto);
                if ($controlCargasDto != "") {
                    if ($param["peso"] != "") {
                        $totalPuntaje = $controlCargasDto[0]->getTotalPuntaje() - $param["peso"];
                        $totalAsigando = $controlCargasDto[0]->getTotalAsignado() - $param["peso"];
                        if ($totalAsigando > 0 || $totalPuntaje > 0) {
                            $controlCargasUDto = new ControlcargasDTO();
                            $controlCargasUDto->setCveMes($param["mes"]);
                            $controlCargasUDto->setAnioCarga($param["anio"]);
                            $controlCargasUDto->setCveJuzgado($param["juzgadoOrigen"]);
                            $controlCargasUDto->setIdJuzgador($param["juzgadorOrigen"]);
                            $controlCargasUDto->setTotalAsignado("$totalAsigando");
                            $controlCargasUDto->setTotalPuntaje("$totalPuntaje");
                            $controlCargasUDto->setIdControlCarga($controlCargasDto[0]->getIdControlCarga());
                            $controlCargasUDto->setCveFuncionJuzgador("1");
                            $controlCargasUDto = $controlCargasDao->updateControlcargas($controlCargasUDto);
                        } else {
                            $controlCargasUDto = new ControlcargasDTO();
                            $controlCargasUDto->setCveMes($param["mes"]);
                            $controlCargasUDto->setAnioCarga($param["anio"]);
                            $controlCargasUDto->setCveJuzgado($param["juzgadoOrigen"]);
                            $controlCargasUDto->setIdJuzgador($param["juzgadorOrigen"]);
                            $controlCargasUDto->setTotalAsignado("0");
                            $controlCargasUDto->setTotalPuntaje("0");
                            $controlCargasUDto->setIdControlCarga($controlCargasDto[0]->getIdControlCarga());
                            $controlCargasUDto->setCveFuncionJuzgador(1);
                            $controlCargasUDto = $controlCargasDao->updateControlcargas($controlCargasUDto);
                        }
                    }
                }

                // --> Destino
                $controlCargasDto = new ControlcargasDTO();
                $controlCargasDto->setCveMes($param["mes"]);
                $controlCargasDto->setAnioCarga($param["anio"]);
                $controlCargasDto->setCveJuzgado($param["juzgadoDestino"]);
                $controlCargasDto->setIdJuzgador($param["juzgadorDestino"]);
                $controlCargasDto = $controlCargasDao->selectControlcargas($controlCargasDto);
                if ($controlCargasDto != "") {
                    $totalPuntaje = $controlCargasDto[0]->getTotalPuntaje() + $param["peso"];
                    $totalAsigando = $controlCargasDto[0]->getTotalAsignado() + $param["peso"];
                    $controlCargasUDto = new ControlcargasDTO();
                    $controlCargasUDto->setCveMes($param["mes"]);
                    $controlCargasUDto->setAnioCarga($param["anio"]);
                    $controlCargasUDto->setCveJuzgado($param["juzgadoDestino"]);
                    $controlCargasUDto->setIdJuzgador($param["juzgadorDestino"]);
                    $controlCargasUDto->setTotalAsignado("$totalAsigando");
                    $controlCargasUDto->setTotalPuntaje("$totalPuntaje");
                    $controlCargasUDto->setCveFuncionJuzgador(1);
                    $controlCargasUDto->setIdControlCarga($controlCargasDto[0]->getIdControlCarga());
                    $controlCargasUDto = $controlCargasDao->updateControlcargas($controlCargasUDto);
                } else {
                    $controlCargasInsertDto = new ControlcargasDTO();
                    $controlCargasInsertDto->setAnioCarga($param["anio"]);
                    $controlCargasInsertDto->setCveMes($param["mes"]);
                    $controlCargasInsertDto->setCveJuzgado($param["juzgadoDestino"]);
                    $controlCargasInsertDto->setIdJuzgador($param["juzgadorDestino"]);
                    $controlCargasInsertDto->setControl("0");
                    $controlCargasInsertDto->setCveFuncionJuzgador("1");
                    $controlCargasInsertDto->setTotalPuntaje($param["peso"]);
                    $controlCargasInsertDto->setTotalAsignado($param["peso"]);
                    $controlCargasInsertDto->setCveFuncionJuzgador(1);
                    $controlCargasInsertDto = $controlCargasDao->insertControlcargas($controlCargasInsertDto);
                }
            }
        }
    }

    public function consultaJuzgadoresAdmin($juzgadoresjuzgadosDto, $proveedor = null) {

        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto->setActivo("S");
        $rsJuzgadoresJuzgados = $juzgadoresjuzgadosDao->selectJuzgadoresInfo($juzgadoresjuzgadosDto);
        $json = "";
        $x = 1;
        if ($rsJuzgadoresJuzgados != "") {
            $JuzgadoresDto = new JuzgadoresDTO();
            $JuzgadoresDao = new JuzgadoresDAO();
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($rsJuzgadoresJuzgados) . '",';
            $json .= '"data":[';
            foreach ($rsJuzgadoresJuzgados as $rsJuzgador) {
                $json .= "{";
                $json .= '"idJuzgadorJuzgado":' . json_encode(($rsJuzgador["idJuzgadorJuzgado"])) . ",";
                $json .= '"idJuzgador":' . json_encode(($rsJuzgador["idJuzgador"])) . ",";
                $json .= '"cveJuzgado":' . json_encode(($rsJuzgador["cveJuzgado"])) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($rsJuzgador["nombre"] . " " . $rsJuzgador["paterno"] . " " . $rsJuzgador["materno"])) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsJuzgadoresJuzgados)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function guardaJuzgadoreJuzgado($juzgadoresjuzgadosDto, $proveedor = null) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $json = "";
        $juzgadoresjuzgadosDto->setActivo("S");

        $rsJuzgadoresJuzgado = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto);
        if ($rsJuzgadoresJuzgado == "") {
            $rsJuzgadoresJuz = $juzgadoresjuzgadosDao->insertJuzgadoresjuzgados($juzgadoresjuzgadosDto);
            if ($rsJuzgadoresJuz != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($rsJuzgadoresJuz) . '",';
                $json .= '"data":[';
                $json .= "{";
                $json .= '"idJuzgadorJuzgado":' . json_encode(utf8_encode($rsJuzgadoresJuz[0]->getIdJuzgadorJuzgado())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($rsJuzgadoresJuz[0]->getCveJuzgado())) . ",";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgadoresJuz[0]->getIdJuzgador())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($rsJuzgadoresJuz[0]->getActivo())) . "";
                $json .= "}";
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"Error al guardar el registro."}';
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"El registro ya se encuentra dado de alta."}';
        }
        return $json;
    }

    public function getPaginas($juzgadoresjuzgadosDto, $param) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $numTot = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgadosGeneral($juzgadoresjuzgadosDto, null, "", $param, " count(idJuzgadorJuzgado) as totalCount ");

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index ++) {
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x ++;
                if ($x <= ($totPages)) {
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

    public function getPaginasJuzgador($juzgadoresjuzgadosDto, $param) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $numTot = $juzgadoresjuzgadosDao->selectJuzgadoresGeneral($juzgadoresjuzgadosDto, null, "", $param, " count(idJuzgador) as totalCount ");

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index ++) {
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x ++;
                if ($x <= ($totPages)) {
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

    public function consultarJuzgadoresJuz($juzgadoresjuzgadosDto, $param) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $rsJuzgadoresJuzgado = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgadosGeneral($juzgadoresjuzgadosDto, null, "", $param, null);
        $json = "";
        $x = 1;
        if ($rsJuzgadoresJuzgado != "") {
            $tipoJuzgadorDto = new TiposjuzgadoresDTO();
            $tipoJuzgadorDao = new TiposjuzgadoresDAO();


            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($rsJuzgadoresJuzgado) . '",';
            $json .= '"data":[';
            foreach ($rsJuzgadoresJuzgado as $rsJuzgador) {
                $tipoJuzgadorDto->setCveTipoJuzgador($rsJuzgador["cveTipoJuzgador"]);
                $tipo = $tipoJuzgadorDao->selectTiposjuzgadores($tipoJuzgadorDto);
                $json .= "{";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgador["idJuzgador"])) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($rsJuzgador["cveUsuario"])) . ",";
                $json .= '"numEmpleado":' . json_encode(utf8_encode($rsJuzgador["numEmpleado"])) . ",";
                $json .= '"titulo":' . json_encode(utf8_encode($rsJuzgador["titulo"])) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($rsJuzgador["paterno"])) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($rsJuzgador["materno"])) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($rsJuzgador["nombre"])) . ",";
                $json .= '"cveTipoJuzgador":' . json_encode(utf8_encode($rsJuzgador["cveTipoJuzgador"])) . ",";
                if ($tipo != "") {
                    $json .= '"desTipoJuzgador":' . json_encode(utf8_encode($tipo[0]->getDesTipoJuzgador())) . ",";
                } else {
                    $json .= '"desTipoJuzgador":""';
                }
                $json .= '"CveEspecialidad":' . json_encode(utf8_encode($rsJuzgador["CveEspecialidad"])) . ",";
                $json .= '"sorteo":' . json_encode(utf8_encode($rsJuzgador["sorteo"])) . ",";
                $json .= '"programable":' . json_encode(utf8_encode($rsJuzgador["programable"])) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($rsJuzgador["activo"])) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsJuzgadoresJuzgado)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($rsJuzgadoresJuzgado) . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function consultarJuzgadores($juzgadoresjuzgadosDto, $param) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $rsJuzgadoresJuzgado = $juzgadoresjuzgadosDao->selectJuzgadoresGeneral($juzgadoresjuzgadosDto, null, "", $param, null);
        $json = "";
        $x = 1;
        if ($rsJuzgadoresJuzgado != "") {
            $tipoJuzgadorDto = new TiposjuzgadoresDTO();
            $tipoJuzgadorDao = new TiposjuzgadoresDAO();


            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($rsJuzgadoresJuzgado) . '",';
            $json .= '"data":[';
            foreach ($rsJuzgadoresJuzgado as $rsJuzgador) {
                $tipoJuzgadorDto->setCveTipoJuzgador($rsJuzgador["cveTipoJuzgador"]);
                $tipo = $tipoJuzgadorDao->selectTiposjuzgadores($tipoJuzgadorDto);
                $json .= "{";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgador["idJuzgador"])) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($rsJuzgador["cveUsuario"])) . ",";
                $json .= '"numEmpleado":' . json_encode(utf8_encode($rsJuzgador["numEmpleado"])) . ",";
                $json .= '"titulo":' . json_encode(utf8_encode($rsJuzgador["titulo"])) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($rsJuzgador["paterno"])) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($rsJuzgador["materno"])) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($rsJuzgador["nombre"])) . ",";
                $json .= '"cveTipoJuzgador":' . json_encode(utf8_encode($rsJuzgador["cveTipoJuzgador"])) . ",";
                if ($tipo != "") {
                    $json .= '"desTipoJuzgador":' . json_encode(utf8_encode($tipo[0]->getDesTipoJuzgador())) . ",";
                } else {
                    $json .= '"desTipoJuzgador":""';
                }
                $json .= '"CveEspecialidad":' . json_encode(utf8_encode($rsJuzgador["CveEspecialidad"])) . ",";
                $json .= '"sorteo":' . json_encode(utf8_encode($rsJuzgador["sorteo"])) . ",";
                $json .= '"programable":' . json_encode(utf8_encode($rsJuzgador["programable"])) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($rsJuzgador["activo"])) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsJuzgadoresJuzgado)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($rsJuzgadoresJuzgado) . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function detalleJuzgados($juzgadoresjuzgadosDto) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $rsJuzgadoresJuzgado = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto);
        $json = "";
        $x = 1;
        if ($rsJuzgadoresJuzgado != "") {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();


            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($rsJuzgadoresJuzgado) . '",';
            $json .= '"data":[';
            foreach ($rsJuzgadoresJuzgado as $rsJuzgador) {
                $juzgadosDto->setCveJuzgado($rsJuzgador->getCveJuzgado());
                $tipo = $juzgadosDao->selectJuzgados($juzgadosDto);
                $json .= "{";
                $json .= '"idJuzgadorJuzgado":' . json_encode(utf8_encode($rsJuzgador->getIdJuzgadorJuzgado())) . ",";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgador->getIdJuzgador())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($rsJuzgador->getCveJuzgado())) . ",";
                if ($tipo != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($tipo[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado":""';
                }
                $json .= '"activo":' . json_encode(utf8_encode($rsJuzgador->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsJuzgadoresJuzgado)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function eliminar($juzgadoresjuzgadosDto) {
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();

        $juzgadoresjuzgadosDto->setActivo("N");
        $rsJuzgadoresJuzgado = $juzgadoresjuzgadosDao->updateJuzgadoresjuzgados($juzgadoresjuzgadosDto);
        $json = "";
        if ($rsJuzgadoresJuzgado != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"mnj":"Se elimino de forma correcta el juzgado"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

}

?>