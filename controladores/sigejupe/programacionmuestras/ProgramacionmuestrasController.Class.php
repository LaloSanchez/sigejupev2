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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionmuestras/ProgramacionmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
//Grupos muestras juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDAO.Class.php");
//juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
//juzgadores juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");
//juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//rol juzgador
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
//Programacion juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionjuzgadores/ProgramacionjuzgadoresDAO.Class.php");
//Juzgadores cateos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresmuestras/JuzgadoresmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresmuestras/JuzgadoresmuestrasDAO.Class.php");
//Grupos muestras
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestras/GruposmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestras/GruposmuestrasDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class ProgramacionmuestrasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto->setidProgramacionMuestra(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getidProgramacionMuestra()))));
        $ProgramacionmuestrasDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getidJuzgador()))));
        $ProgramacionmuestrasDto->setcveGrupoMuestraJuzgado(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getcveGrupoMuestraJuzgado()))));
        $ProgramacionmuestrasDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getfechaInicio()))));
        $ProgramacionmuestrasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getfechaFinal()))));
        $ProgramacionmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getactivo()))));
        $ProgramacionmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getfechaRegistro()))));
        $ProgramacionmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ProgramacionmuestrasDto->getfechaActualizacion()))));
        return $ProgramacionmuestrasDto;
    }

    public function selectProgramacionmuestras($ProgramacionmuestrasDto, $proveedor = null) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasDao = new ProgramacionmuestrasDAO();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasDao->selectProgramacionmuestras($ProgramacionmuestrasDto, $proveedor);
        return $ProgramacionmuestrasDto;
    }
    
    public function selectProgramacionMuestrasReporte($ProgramacionmuestrasDto, $cveUsuario, $mes, $anio, $tipo, $proveedor = null) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);        
        
        $juzgadoresDTO = new JuzgadoresDTO();
        $juzgadoresDTO->setCveUsuario($cveUsuario);
        $juzgadoresDAO = new JuzgadoresDAO();
        
        $juzgadores = $juzgadoresDAO->selectJuzgadoreCveUsario($juzgadoresDTO);   
        if($tipo == 1){
         $orden = " AND fechaInicio >= '" . $anio.$mes . "01' 
                                           AND fechaFinal <= '" . $anio.$mes . "31' 
                                        ORDER BY fechaInicio, idJuzgador";
        }
        if($tipo == 2){
            $fini = $mes;
            $ffin = $anio;
            $fini = str_replace("/", "-", $fini);
            $ffin = str_replace("/", "-", $ffin);
            $partesF1 = explode("-", $fini);
            $armoFini = $partesF1[2]."-".$partesF1[1]."-".$partesF1[0];
            $partesF2 = explode("-", $ffin);
            $armoFfin = $partesF2[2]."-".$partesF2[1]."-".$partesF2[0];
            $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $armoFini . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $armoFfin . "' 
                                        ORDER BY fechaInicio, idJuzgador";
        }
        $ProgramacionmuestrasDao = new ProgramacionmuestrasDAO();
        if($juzgadores != ""){
        $ProgramacionmuestrasDto->setIdJuzgador($juzgadores[0]->getIdJuzgador());
        }
        $ProgramacionmuestrasDto = $ProgramacionmuestrasDao->selectProgramacionmuestras($ProgramacionmuestrasDto, $orden, $proveedor);
        
        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if($ProgramacionmuestrasDto != ""){
            foreach ($ProgramacionmuestrasDto as $Res){
                $fechaAux = explode(" ", $Res->getFechaInicio());
                $fechaTmp = explode("-", $fechaAux[0]);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));        
                $Res->setFechaActualizacion($dias[$diaSemana]); 
            }
        }
        return $ProgramacionmuestrasDto;
    }

    public function insertProgramacionmuestras($ProgramacionmuestrasDto, $proveedor = null) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasDao = new ProgramacionmuestrasDAO();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasDao->insertProgramacionmuestras($ProgramacionmuestrasDto, $proveedor);
        return $ProgramacionmuestrasDto;
    }

    public function updateProgramacionmuestras($ProgramacionmuestrasDto, $proveedor = null) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasDao = new ProgramacionmuestrasDAO();
        //$tmpDto = new ProgramacionmuestrasDTO();
        //$tmpDto = $ProgramacionmuestrasDao->selectProgramacionmuestras($ProgramacionmuestrasDto,$proveedor);
        //if($tmpDto!=""){//$ProgramacionmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacionmuestrasDto = $ProgramacionmuestrasDao->updateProgramacionmuestras($ProgramacionmuestrasDto, $proveedor);
        return $ProgramacionmuestrasDto;
        //}
        //return "";
    }

    public function deleteProgramacionmuestras($ProgramacionmuestrasDto, $proveedor = null) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasDao = new ProgramacionmuestrasDAO();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasDao->deleteProgramacionmuestras($ProgramacionmuestrasDto, $proveedor);
        return $ProgramacionmuestrasDto;
    }
    
    public function reporteProgramacionMuestras($ProgramacionmuestrasDto, $GruposMuestrasJuzgadosDto, $porDistrito = "N", $proveedor = null) {
        //var_dump($ProgramacionmuestrasDto);
        $datos = array();
        $result = array();
        $order = "";
        $idJuzgados = array();
        $cadenaJuzgados = "";
        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
//        if ( $porDistrito == 'S' ) {
//            if (isset($_SESSION['cveAdscripcion'])) {
//                $juzgadoTmp = new JuzgadosDTO();
//                $juzgadosDao = new JuzgadosDAO();
//                $juzgadoTmp->setCveJuzgado($_SESSION['cveAdscripcion']);
//                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
//                if ( $juzgadoTmp != "" ) {
//                    $juzgadosTmp = new JuzgadosDTO();
//                    $juzgadosTmp->setCveDistrito($juzgadoTmp[0]->getCveDistrito());
//                    $juzgadosTmp->setActivo("S");
//                    $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
//                    if ( $juzgadosTmp != "" ) {
//                        foreach ( $juzgadosTmp as $juzgado ) {
//                            $idJuzgados[] = $juzgado->getCveJuzgado();
//                        }
//                        $cadenaJuzgados = implode(",", $idJuzgados);
//                        $order = " AND cveJuzgado IN(" . $cadenaJuzgados . ")";
//                    }
//                }
//            }
//        }
        $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
        $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($GruposMuestrasJuzgadosDto->getCveGrupoMuestra());
        if($ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado()!="") {
            $gruposMuestrasJuzgadosDto->setCveGrupoMuestraJuzgado($ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
        }
        $gruposMuestrasJuzgadosDto->setActivo("S");
        $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, $order, $this->proveedor);
        
        if ($gruposMuestrasJuzgadosDto != "") {
            
            foreach($gruposMuestrasJuzgadosDto as $grupoJuzgado) {
                $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresjuzgadosDto->setCveJuzgado($grupoJuzgado->getCveJuzgado());
                $juzgadoresjuzgadosDto->setActivo("S");
                if ($ProgramacionmuestrasDto->getIdJuzgador() != "") {
                    $juzgadoresjuzgadosDto->setIdJuzgador($ProgramacionmuestrasDto->getIdJuzgador());
                }
                $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
                $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " ORDER BY idJuzgador ASC ", $this->proveedor);


                //if ($juzgadoresjuzgadosDto != "") {
                    //for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {

                        //if ($juzgadoresDto != "") {

                            $programacionMuestrasDto = new ProgramacionmuestrasDTO();
                            //$programacionMuestrasDto->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                            if ($ProgramacionmuestrasDto->getIdJuzgador() != "") {
                                $programacionMuestrasDto->setIdJuzgador($ProgramacionmuestrasDto->getIdJuzgador());
                            }
                            /*if ($ProgramacionmuestrasDto->getCveGrupoJuzgado() != "") {
                                $programacionMuestrasDto->setCveGrupoJuzgado($ProgramacionmuestrasDto->getCveGrupoJuzgado());
                            }*/
                            $programacionMuestrasDto->setCveGrupoMuestraJuzgado($grupoJuzgado->getCveGrupoMuestraJuzgado());
                            if ($ProgramacionmuestrasDto->getFechaInicio() != "" && $ProgramacionmuestrasDto->getFechaFinal() != "") {
                                $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $ProgramacionmuestrasDto->getFechaInicio() . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $ProgramacionmuestrasDto->getFechaFinal() . "' 
                                        ORDER BY fechaInicio, idJuzgador ";
                            } else {
                                $orden = " ORDER BY fechaInicio, idJuzgador";
                            }
                            $programacionMuestrasDto->setActivo("S");
                            $programacionMuestrasDao = new ProgramacionmuestrasDAO();

                            $programacionMuestrasDto = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestrasDto, $orden, $this->proveedor);

                            if ($programacionMuestrasDto != "") {
                                //echo $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno() . "<br>";

                                foreach ($programacionMuestrasDto as $programacionMuestra) {
                                    //echo "Horario: " . $programacionMuestra->getFechaInicio() . " " . $programacionMuestra->getFechaFinal() . "<br>";
//                                    $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
//                                    $rolesjuzgadoresDto->setCveRolJuzgador($programacionMuestra->getCveRolJuzgador());
//                                    $rolesjuzgadoresDto->setActivo("S");
//                                    $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
//                                    $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto);
//                                    if ($rolesjuzgadoresDto != "") {
//                                        //echo "ROl: " .  $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "<br>";
//                                        $rol = $rolesjuzgadoresDto[0]->getDesRolJuzgador();
//                                        $cveRol = $rolesjuzgadoresDto[0]->getCveRolJuzgador();
//                                    } else {
//                                        $rol = "";
//                                        $cveRol = 0;
//                                    }
                                    $juzgadoresDto = new JuzgadoresDTO();
                                    $juzgadoresDto->setIdJuzgador($programacionMuestra->getIdJuzgador());
                                    $juzgadoresDto->setActivo("S");
                                    $juzgadoresDao = new JuzgadoresDAO();
                                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                                    $juzgadoresDto = $juzgadoresDto[0];
                                    
                                    $fechaAux = explode(" ", $programacionMuestra->getFechaInicio());
                                    $fechaTmp = explode("-", $fechaAux[0]);
                                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                    $datos[] = array(
                                        "FechaInicio"            => $programacionMuestra->getFechaInicio(),
                                        "idProgramacionMuestra"  => $programacionMuestra->getIdProgramacionMuestra(),
                                        "Nombre"                 => utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno()),
                                        "IdJuzgador"             => $juzgadoresDto->getIdJuzgador(),
                                        "FechaFin"               => $programacionMuestra->getFechaFinal(),
                                        "cveGrupoMuestraJuzgado" => $programacionMuestra->getCveGrupoMuestraJuzgado(),
                                        "Dia"                    => $dias[$diaSemana]
                                    );
                                }
                            }
                        //}
                    //}
                //}
            }

        } else {
            $datos = null;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        if (count($datos) > 0) {
            array_multisort($datos);
        }
        return $datos;
    }
    
    public function selectJuzgadoresMuestras($gruposMuestrasDto, $juzgadosDto, $porDistrito = "N", $proveedor = null){
        $idJuzgador = array();
        $result = array();
        $orden = "";
        $idJuzgados = array();
        $cadenaJuzgados = "";
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        
        if ( $porDistrito == "S" ) {
            if (isset($_SESSION['cveAdscripcion'])) {
                $juzgadoTmp = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $juzgadoTmp->setCveJuzgado($_SESSION['cveAdscripcion']);
                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
                if ( $juzgadoTmp != "" ) {
                    $juzgadosTmp = new JuzgadosDTO();
                    $juzgadosTmp->setCveDistrito($juzgadoTmp[0]->getCveDistrito());
                    $juzgadosTmp->setActivo("S");
                    $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
                    if ( $juzgadosTmp != "" ) {
                        foreach ( $juzgadosTmp as $juzgado ) {
                            $idJuzgados[] = $juzgado->getCveJuzgado();
                        }
                        $cadenaJuzgados = implode(",", $idJuzgados);
                        $orden = " AND cveJuzgado IN(" . $cadenaJuzgados . ")";
                    }
                }
            }
        }
        
        /*
         * Obtener el listado de juzgados que pertenecen al grupo seleccionado por el usuario
         */
        $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
        $gruposMuestrasJuzgadosDto->setActivo("S");
        $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposMuestrasDto->getCveGrupoMuestra());
        if ( $juzgadosDto->getCveJuzgado() != "" ) {
            $gruposMuestrasJuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
        }
        $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, $orden, $this->proveedor); 
        if ( $gruposMuestrasJuzgadosDto != "" ) {
            foreach ( $gruposMuestrasJuzgadosDto as $grupoJuzgado ) {
                $juzgadoresJuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresJuzgadosDao = new JuzgadoresjuzgadosDAO();
                $juzgadoresJuzgadosDto->setCveJuzgado($grupoJuzgado->getCveJuzgado());
                $juzgadoresJuzgadosDto->setActivo("S");
                $juzgadoresJuzgadosDto = $juzgadoresJuzgadosDao->selectJuzgadoresjuzgados($juzgadoresJuzgadosDto, "", $this->proveedor);
                if ( $juzgadoresJuzgadosDto != "" ) {
                    foreach ( $juzgadoresJuzgadosDto as $juzgadorJuzgado ) {
                        $idJuzgador[] = $juzgadorJuzgado->getIdJuzgador();
                    }
                }
            }
        }
        if ( count($idJuzgador) > 0 ) {
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDao = new JuzgadoresDAO();
            $juzgadoresDto->setActivo("S");
            $cadenaJuzgadores = implode(",", $idJuzgador);
            $orden = " AND idJuzgador IN(" . $cadenaJuzgadores . ")";
            $orden .= " ORDER BY nombre";
            $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, $orden, $this->proveedor);
            if ( $juzgadoresDto != "" ) {
                foreach ( $juzgadoresDto as $juzgador ) {
                    $result[] = array(
                        "idJuzgador" => $juzgador->getIdJuzgador(),
                        "nombre"     => utf8_encode($juzgador->getNombre()),
                        "paterno"    => utf8_encode($juzgador->getPaterno()),
                        "materno"    => utf8_encode($juzgador->getMaterno())
                    );
                }
            }
        }
        return $result;
    }
    
    public function programacionMuestrasManual($ProgramacionmuestrasDto, $proveedor = null){
        //var_dump($ProgramacionmuestrasDto);
        $error = false;
        $year = "";
        $mes = "";
        $dias = array();
        $diasFestivos = array();
        $juzgadores = array();
        $roles = array();
        $horaInicio = "";
        $horaFin = "";
        $mensajeError = "";
        $fechaActual = "";
        $idProgramacionesInsert = array();
        $idProgramacionesUpdate = array();
        $logger = new Logger("/../../logs/", "ProgramacionMuestras");
        $logger->w_onError("**********COMIENZA EL PROCESO MANUAL DE PROGRAMACION DE MUESTRAS**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE REGISTRO");
        $fechaInicial = $ProgramacionmuestrasDto->getFechaInicio();
        $fechaInicialAux = explode(" ", $fechaInicial);
        $fechaInicioAux = $fechaInicialAux[0];
        $horaInicioAux = $fechaInicialAux[1];
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $ProgramacionmuestrasDto->getFechaFinal();
        $fechaFinalAux = explode(" ", $fechaFinal);
        $fechaFinAux = $fechaFinalAux[0];
        $horaFinAux = $fechaFinalAux[1];
        $horaInicioTmp = "";
        $horaFinTmp = "";
        $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);
        $logger->w_onError("**********BUSCAMOS LOS DIAS FESTIVOS EN GESTION");
        $calendario = new Calendario();
        $strJSON = "{";
        $strJSON .= "\"type\": \"select\",";
        $strJSON .= "\"calendario\": {";
        $strJSON .= "\"idDiasFestivos\": \"\",";
        $strJSON .= "\"Tipo\": \"\",";
        $strJSON .= "\"Fecha\": \"\",";
        $strJSON .= "\"Descripcion\": \"\"";
        $strJSON .= "},";
        $strJSON .= "\"params\": {";
        $strJSON .= "\"FechaInicio\": \"" . $fechaInicioAux . "\","; // ejem. 2015-07-01
        $strJSON .= "\"FechaFin\": \"" . $fechaFinAux . "\","; // ejem. 2015-07-31
        $strJSON .= "\"Orden\": \"Fecha ASC\""; // Fecha ASC
        $strJSON .= "}";
        $strJSON .= "}";
        $logger->w_onError("**********JSON DE PETICION: " . $strJSON);
        $festivos = $calendario->getCalendario($strJSON);
        $logger->w_onError("**********JSON DE RESPUESTA: " . $festivos);

        $json = new Decode_JSON();
        $festivos = $json->decode($festivos, true);

        for ($index = 0; $index < count($festivos["data"]); $index++) {
            $diasFestivos[] = $festivos["data"][$index]->Fecha;
        }
        //print_r($diasFestivos);
        
        $logger->w_onError("**********CONSULTAR LOS JUZGADOS QUE PERTENEZCAN AL GRUPO DEL JUZGADO: " . $ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposmuestrasjuzgadosDTO();
        $gruposJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $gruposJuzgadosDto->setCveGrupoMuestraJuzgado($ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposmuestrasjuzgados($gruposJuzgadosDto, '', $this->proveedor);
        if ( $gruposJuzgadosDto != "" ) {
            $gruposMuestrasDto = new GruposmuestrasDTO();
            $gruposMuestrasDao = new GruposmuestrasDAO();
            $gruposMuestrasDto->setCveGrupoMuestra($gruposJuzgadosDto[0]->getCveGrupoMuestra());
            $gruposMuestrasDto->setActivo('S');
            $gruposMuestrasDto = $gruposMuestrasDao->selectGruposmuestras($gruposMuestrasDto, "", $this->proveedor);
            if ( $gruposMuestrasDto != "" ) {
                $gruposMuestrasJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosTmp->setCveGrupoMuestra($gruposMuestrasDto[0]->getCveGrupoMuestra());
                $gruposMuestrasJuzgadosTmp->setActivo('S');
                $gruposMuestrasJuzgadosTmp = $gruposJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosTmp, '', $this->proveedor);
                if ( $gruposMuestrasJuzgadosTmp != "" ) {
                    foreach ( $gruposMuestrasJuzgadosTmp as $grupoJuzgado ) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoMuestraJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $arrJuzgados);
                }
            }
        }
        $logger->w_onError("**********GRUPOS JUZGADOS A VALIDAR: " . $cadenaJuzgados);
        
        if ($horaInicioAux != "" && $horaFinAux != "") {
            $logger->w_onError("**********HORA INICIAL: " . $horaInicioAux);
            $logger->w_onError("**********HORA FINAL: " . $horaFinAux);
            $horaInicioTmp = explode(":" , $horaInicioAux);
            $horaFinTmp = explode(":", $horaFinAux);
            
            while ($fechaInicioAux <= $fechaFinAux) {
                $fechaTmp = explode("-", $fechaInicioAux);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                $dias[] = $fechaInicioAux;
                $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicioAux));
                $fechaInicioAux = date('Y-m-d', $fechaInicialTmp);
            }
            
            if(count($dias) > 0){
                for ($n = 0; $n < count($dias); $n++) {
                    if ( (int)$horaInicioTmp[0] >= (int)$horaFinTmp[0] && 
                         (int)$horaInicioTmp[1] > (int)$horaFinTmp[1] ) {
//                        if ( (int)$horaFinTmp[0] >= 7 ) {
//                            $error = true;
//                            $mensajeError = "No se puede guardar los registros entre el horario indicado: " . $horaInicioAux . " - " . $horaFinAux . " favor de revisar";
//                            break;
//                        }
                        $diaInicio = $dias[$n];
                        $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
                        $diaFin = date('Y-m-d', $diasTmp);
                    } else {
                        
                        $diaInicio = $dias[$n];
                        $diaFin = $dias[$n];
                    }
                    $diaInicio .= " " . $horaInicioAux;
                    $diaFin .= " " . $horaFinAux;
                    
                    $logger->w_onError("**********FECHA INICIAL DE PROGRAMACION: " . $diaInicio);
                    $logger->w_onError("**********FECHA FINAL DE PROGRAMACION: " . $diaFin);
                    
                    $programacion = new ProgramacionmuestrasDTO();
                    //$programacion->setIdJuzgador($ProgramacionmuestrasDto->getIdJuzgador());
                    $programacion->setCveGrupoMuestraJuzgado($ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
                    $programacion->setActivo("S");
                    //$programacion->setFechaInicio($diaInicio);
                    //$programacion->setFechaFinal($diaFin);
                    /*$order = " AND fechaInicio LIKE '%" . $dias[$n] . "%'";
                    $order .= " AND (CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                                AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal)
                                OR
                                (CAST('" . $diaFin . "' AS DATETIME) >= fechaInicio
                                AND CAST('" . $diaFin . "' AS DATETIME) <= fechaFinal)";*/
                    
                    /*$order = " AND FechaInicio LIKE'%" . $dias[$n] . "%'";
                    $order .= " AND FechaFinal LIKE'%" . $dias[$n] . "%'";
                    $order .= " AND CAST('" . $horaInicioAux . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                                AND CAST('" . $horaInicioAux . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";*/
                    $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                               AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
                               AND cveGrupoMuestraJuzgado IN(" . $cadenaJuzgados . ")"; 
                    
                    $programacionMuestrasDao = new ProgramacionmuestrasDAO();
                    $dto = new ProgramacionmuestrasDTO();
                    $dto = $programacionMuestrasDao->selectProgramacionmuestras($programacion, $order, $this->proveedor);
                    //print_r($dto);
                    //if ($dto == "") {
                        //$fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                        //$fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                        $programacion = new ProgramacionmuestrasDTO();
                        $programacion->setIdJuzgador($ProgramacionmuestrasDto->getIdJuzgador());
                        $programacion->setCveGrupoMuestraJuzgado($ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
                        $programacion->setFechaInicio($diaInicio);
                        $programacion->setFechaFinal($diaFin);
                        $programacion->setActivo("S");
                        $programacion = $programacionMuestrasDao->insertProgramacionmuestras($programacion, $this->proveedor);
                        //$programacion = "";
                        if ($programacion != "") {
                            $error = false;
                            $idProgramacionesInsert[] = $programacion[0]->getIdProgramacionMuestra();
                            $logger->w_onError("**********SE AGREGA EL REGISTRO CON ID DE PROGRAMACION MUESTRA: " . $programacion[0]->getIdProgramacionMuestra());
                        } else {
                            $error = true;
                            $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO");
                            $logger->w_onError("**********ID JUZGADOR: " . $ProgramacionmuestrasDto->getIdJuzgador());
                            $logger->w_onError("**********CVE GRUPO MUESTRA JUZGADO: " . $ProgramacionmuestrasDto->getCveGrupoMuestraJuzgado());
                            $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                            $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                            $mensajeError = "OCURRIO UN ERROR AL INSERTAR EL REGISTRO";
                        }
                        if ($error) {
                            break;
                            $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                        }
                    //} else {
//                        $logger->w_onError("**********EL ID DE PROGRAMACION MUESTRAS ES: " . $dto[0]->getIdProgramacionMuestra());
//                        $error = true;
//                        $hInicio = explode(" ",$dto[0]->getFechaInicio());
//                        $hFin = explode(" ",$dto[0]->getFechaFinal());
//                        $mensajeError = "Ya existe un registro de programacion para el dia: " . $dias[$n]. " , para el juzgado seleccionado entre el horario: " . $hInicio[1] . " y " . $hFin[1];
                        /*
                         * Actualizar los registros encontrados
                         */
                        /*$inicioTmp = $dto[0]->getFechaInicio();
                        $finTmp = $dto[0]->getFechaInicio();
                        $fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                        $fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                        $programacion = new ProgramacionmuestrasDTO();
                        $programacion->setIdProgramacionCateo($dto[0]->getIdProgramacionCateo());
                        $programacion->setIdJuzgador($ProgramacionmuestrasDto->getIdJuzgador());
                        $programacion->setCveGrupoJuzgado($ProgramacionmuestrasDto->getCveGrupoJuzgado());
                        $programacion->setFechaInicio($fechaHoraInicio);
                        $programacion->setFechaFinal($fechaHoraFin);
                        $programacion->setActivo("S");
                        $logger->w_onError("**********ID JUZGADOR: " . $ProgramacionmuestrasDto->getIdJuzgador());
                        $logger->w_onError("**********CVE GRUPO JUZGADO: " . $ProgramacionmuestrasDto->getCveGrupoJuzgado());
                        $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                        $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                        $logger->w_onError("**********ID PROGRAMACION CATEO: " . $dto[0]->getIdProgramacionCateo());

                        $programacion = $programacionMuestrasDao->updateProgramacioncateos($programacion, $this->proveedor);
                        if($programacion != ""){
                            $error = false;
                            $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                            $idProgramacionesUpdate[] = $programacion[0]->getIdProgramacionCateo();
                        } else {
                            $error = true;
                            $logger->w_onError("**********ERROR AL ACTUALIZAR EL REGISTRO");
                            $mensajeError = "NO SE PUDO ACTUALIZAR EL REGISTRO";
                        }*/
                        
//                        if($error){
//                            break;
//                            $logger->w_onError("**********OCURRI� UN ERROR AL ACTUALIZAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
//                        }
                    //}
                    
                }
            } else {
                $error = true;
                $logger->w_onError("**********SE DETERMINA QUE NO SE PUEDE REALIZAR LA PROGRAMACION EN LOS DIAS SELECCIONADOS");
                $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS EN LAS FECHAS SELECCIONADAS";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECIONADAS");
            $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS";
        }
         
        if ($proveedor == null) {
            if (!$error) {
                
                if(count($idProgramacionesInsert) > 0){
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",",$idProgramacionesInsert);
                    $cveAccion = 366;
                    $descripcion = "INSERT tabla tblprogramacionmuestras registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosDAO();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                } else if(count($idProgramacionesUpdate) > 0){
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",",$idProgramacionesUpdate);
                    $cveAccion = 367;
                    $descripcion = "UPDATE tabla tblprogramacionmuestras registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosDAO();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                }
                $this->proveedor->execute("COMMIT");
                $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS GUARDADOS DE FORMA CORRECTA"));
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO UN ERROR, SE DESHACEN LOS CAMBIOS EN LA BASE DE DATOS Y TERMINA EL PROCESO");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL INSERTAR LOS REGISTROS: " . $mensajeError));
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }
    
    public function modificarProgramacionMuestras($programacionMuestrasDto, $proveedor = null){
        //var_dump($programacionMuestrasDto);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $programacionMuestrasDto = $this->validarProgramacionmuestras($programacionMuestrasDto);
        $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
        $programacionMuestrasDao = new ProgramacionmuestrasDAO();
        $error = false;
        $msg = array();
        $result = array();
        $listaResult = array();
        $fechaInicio = explode(" ", $programacionMuestrasDto->getFechaInicio());
        $fechaFin = explode(" ", $programacionMuestrasDto->getFechaFinal());
        $horaInicioTmp = explode(":", $fechaInicio[1]);
        $horaFinTmp = explode(":", $fechaFin[1]);
        if ( (int)$horaInicioTmp[0] >= (int)$horaFinTmp[0] && 
             (int)$horaInicioTmp[1] > (int)$horaFinTmp[1]) {
//            if ( (int)$horaFinTmp[0] >= 7 ) {
//                $error = true;
//                $msg = array("No se puede guardar los registros entre el horario indicado: " . $fechaInicio[1] . " - " . $fechaFin[1] . " favor de revisar");
//            }
            $diaInicio = $fechaInicio[0];
            $diasTmp = strtotime('+1 day', strtotime($fechaInicio[0]));
            $diaFin = date('Y-m-d', $diasTmp);
        } else {

            $diaInicio = $fechaInicio[0];
            $diaFin = $fechaInicio[0];
        }
        if(!$error) {
            $diaInicio .= " " . $fechaInicio[1];
            $diaFin .= " " . $fechaFin[1];

            $programacionMuestrasTmp->setIdProgramacionMuestra($programacionMuestrasDto->getIdProgramacionMuestra());
//            $programacionMuestrasTmp->setCveGrupoMuestraJuzgado($programacionMuestrasDto->getCveGrupoMuestraJuzgado());
            $programacionMuestrasTmp->setActivo("S");
            //$programacionMuestrasTmp->setIdJuzgador($programacionMuestrasDto->getIdJuzgador());
            //$programacionMuestrasTmp->setFechaInicio($diaInicio);
            //$programacionMuestrasTmp->setFechaFinal($diaFin);
//            $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
//                       AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
//                       AND idJuzgador<>'" . $programacionMuestrasDto->getIdJuzgador() . "'";
            $order = "";
            /*$order = " AND FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
            $order .= " AND FechaFinal LIKE'%" . $fechaFin[0] . "%'";
            $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                        AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";
            $order .= " AND idJuzgador<>'" . $programacionMuestrasDto->getIdJuzgador() . "'";*/
            
            $programacionMuestrasTmp = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestrasTmp, $order, $this->proveedor);
            //if($programacionMuestrasTmp == "") {
                $programacionMuestrasDto->setFechaInicio($diaInicio);
                $programacionMuestrasDto->setFechaFinal($diaFin);
                $programacionMuestrasDto = $programacionMuestrasDao->updateProgramacionmuestras($programacionMuestrasDto, $this->proveedor);
                if($programacionMuestrasDto != "") {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $cveAccion = 367;
                    $descripcion = "UPDATE tabla tblprogramacionmuestras registro antes de modificar: " . json_encode($programacionMuestrasTmp[0]->toString()) . ", registro modificado: " . json_encode($programacionMuestrasDto[0]->toString());
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosDAO();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                    if ( $insertarBitacora != "" ) {
                        $error = false;
                    } else {
                        $error = true;
                        $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
                    }
                    $msg[] = array("Registro actualizado correctamente");
                    $listaResult = array(
                        "idProgramacionMuestra"  => $programacionMuestrasDto[0]->getIdProgramacionMuestra(),
                        "idJuzgador"             => $programacionMuestrasDto[0]->getIdJuzgador(),
                        "cveGrupoMuestraJuzgado" => $programacionMuestrasDto[0]->getCveGrupoMuestraJuzgado(),
                        "fechaInicio"            => $programacionMuestrasDto[0]->getFechaInicio(),
                        "fechaFinal"             => $programacionMuestrasDto[0]->getFechaFinal()
                    );
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al actualizar el registro");
                }
//            } else {
//                $horaInicioAux = explode(" ",$programacionMuestrasTmp[0]->getFechaInicio());
//                $horaFinAux = explode(" ", $programacionMuestrasTmp[0]->getFechaFinal());
//                $error = true;
//                $msg[] = array("No se puede actualizar el registro debido a que hay un horario activo entre: " . $horaInicioAux[1] . " y " . $horaFinAux[1] . " favor de verificar");
//            }
        }
        if (!$error) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                "totalCount" => 1,
                "text"       => $msg,
                "data"       => $listaResult
            );
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                "totalCount" => 0,
                "text"       => $msg
            );
        }
        return json_encode($result);
    }
    
    public function bajaProgramacionMuestrasManual($programacionMuestrasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionMuestras");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO DE PROGRAMACION MUESTRAS**********");
        $idProgramacionMuestras = array();
        $dias = array();
        $error = true;
        
        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
        $fechaInicial = $programacionMuestrasDto->getFechaInicio();
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $programacionMuestrasDto->getFechaFinal();
        $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);

        while ($fechaInicial <= $fechaFinal) {
            $dias[] = $fechaInicial;
            $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicial));
            $fechaInicial = date('Y-m-d', $fechaInicialTmp);
        }
        //print_r($dias);
        $programacionMuestraDto = new ProgramacionmuestrasDTO();
        $programacionMuestraDto->setCveGrupoMuestraJuzgado($programacionMuestrasDto->getCveGrupoMuestraJuzgado());
        $programacionMuestraDto->setIdJuzgador($programacionMuestrasDto->getIdJuzgador());
        $programacionMuestraDto->setActivo("S");
        $programacionMuestrasDao = new ProgramacionmuestrasDAO();
        $programacionMuestraDto = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestraDto, ' ORDER BY fechaInicio ', $this->proveedor);
        $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION MUESTRAS");
        $logger->w_onError("**********CVE GRUPO MUESTRA JUZGADO: " . $programacionMuestrasDto->getCveGrupoMuestraJuzgado());
        $logger->w_onError("**********ID JUZGADOR: " . $programacionMuestrasDto->getIdJuzgador());
        
        if ($programacionMuestraDto != "") {
            $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
            for ($n = 0; $n < count($programacionMuestraDto); $n++) {
                $dia = $programacionMuestraDto[$n]->getFechaInicio();
                //echo $dia . "<br>";
                $fechaInicio = explode(" ", $dia);
                $fechaTmp = $fechaInicio[0];
                //echo $fechaTmp . "<br>";
                if (in_array($fechaTmp, $dias)) {
                    $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
                    $programacionMuestrasTmp->setIdProgramacionMuestra($programacionMuestraDto[$n]->getIdProgramacionMuestra());
                    $programacionMuestrasTmp->setActivo("N");
                    $programacionMuestrasTmp = $programacionMuestrasDao->updateProgramacionmuestras($programacionMuestrasTmp, $this->proveedor);
                    if ($programacionMuestrasTmp != "") {
                        $error = false;
                        $idProgramacionMuestras[] = $programacionMuestrasTmp[0]->getIdProgramacionMuestra();
                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION MUESTRA: " . $programacionMuestrasTmp[0]->getIdProgramacionMuestra());
                    } else {
                        $error = true;
                        $logger->w_onError("**********ERROR AL BORRAR LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION MUESTRA: " . $programacionMuestraDto[$n]->getIdProgramacionMuestra());
                        $mensajeError = "NO SE PUDO BORRAR EL REGISTRO";
                    }
                } else {
                    $logger->w_onError("**********NO SE DEBEN ELIMINAR LOS REGISTROS DE PROGRAMACIONES EN LA FECHA: " . $fechaTmp);
                    continue;
                    $mensajeError = "NO HAY DATOS A ELIMINAR";
                }
                if ($error) {
                    break;
                }
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION MUESTRAS, TERMINA EL PROCESO");
            $mensajeError = "NO HAY DATOS A ELIMINAR";
        }
        $fecha = date("Y-m-d H:i:s");
        $cveAccion = 368;
        $programacionMuestras = implode(",", $idProgramacionMuestras);
        $descripcion = "borrado logico en tblprogramacionmuestras idProgramacionMuestras: " . $programacionMuestras;
        $bitacoramovimientosDto = new BitacoramovimientosDTO();
        $bitacoramovimientosDto->setCveAccion($cveAccion);
        $bitacoramovimientosDto->setFechaMovimiento($fecha);
        $bitacoramovimientosDto->setObservaciones($descripcion);
        $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
        $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
        $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
        $daoBitacora = new BitacoramovimientosDAO();
        $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
        if ( $insertarBitacora != "" ) {
            $error = false;
        } else {
            $error = true;
            $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
        }
        
        if ($proveedor == null) {
            if (!$error) {
                $this->proveedor->execute("COMMIT");
                
                $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS ELIMINADOS DE FORMA CORRECTA"));
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO UN ERROR, SE DESHACEN LOS CAMBIOS EN LA BASE DE DATOS Y TERMINA EL PROCESO");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL BORRAR LOS REGISTROS: " . $mensajeError));
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }
    
    public function eliminarProgramacionMuestras($programacionmuestrasDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $result = array();
        $listaResult = array();
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $programacionMuestrasDao = new ProgramacionmuestrasDAO();
        $programacionmuestrasDto->setActivo("N");
        $programacionmuestrasDto->setFechaActualizacion($fechaActual);
        $programacionmuestrasDto = $programacionMuestrasDao->updateProgramacionmuestras($programacionmuestrasDto, $this->proveedor);
        if($programacionmuestrasDto != "") {
            $fecha = date("Y-m-d H:i:s");
            $cveAccion = 368;
            $descripcion = "borrado logico en tblprogramacionmuestras idProgramacionMuestras: " . $programacionmuestrasDto[0]->getIdProgramacionMuestra();
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $daoBitacora = new BitacoramovimientosDAO();
            $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            
            $listaResult = array(
                "idProgramacionMuestra"  => $programacionmuestrasDto[0]->getIdProgramacionMuestra(),
                "idJuzgador"             => $programacionmuestrasDto[0]->getIdJuzgador(),
                "cveGrupoMuestraJuzgado" => $programacionmuestrasDto[0]->getCveGrupoMuestraJuzgado(),
                "fechaInicio"            => $programacionmuestrasDto[0]->getFechaInicio(),
                "fechaFinal"             => $programacionmuestrasDto[0]->getFechaFinal()
            );
            $result = array(
                "estatus"    => "ok",
                "totalCount" => 1,
                "text"       => "Registro eliminado correctamente",
                "data"       => $listaResult
            );
        } else {
            $result = array(
                "estatus"    => "error",
                "totalCount" => 0,
                "text"       => "Ocurrio un error al eliminar el registro"
            );
        }
        return json_encode($result);
    }
    
    public function juezTomaDeMuestra($juzgadoDto, $programacionMuestrasDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $msg = "";
        $result = array();
        $datos = array();
        $idJuzgadorMuestra = 0;
        $muestras = array();
        $idJuzgadores = array();
        $fecha = $programacionMuestrasDto->getFechaInicio();
        $fechaInicio = explode(" ", $programacionMuestrasDto->getFechaInicio());
        $fechaInicioJuzgadorCateo = $fechaInicio[0] . " 00:00:00";
        $fechaFinJuzgadorCateo = $fechaInicio[0] . " 23:59:59";
        //$fechaFin = explode(" ", $programacionMuestrasDto->getFechaFinal());
        
        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposmuestrasjuzgadosDTO();
        $gruposJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $gruposJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposmuestrasjuzgados($gruposJuzgadosDto, '', $this->proveedor);
        if ( $gruposJuzgadosDto != "" ) {
            $gruposMuestrasDto = new GruposmuestrasDTO();
            $gruposMuestrasDao = new GruposmuestrasDAO();
            $gruposMuestrasDto->setCveGrupoMuestra($gruposJuzgadosDto[0]->getCveGrupoMuestra());
            $gruposMuestrasDto->setActivo('S');
            $gruposMuestrasDto = $gruposMuestrasDao->selectGruposmuestras($gruposMuestrasDto, "", $this->proveedor);
            if ( $gruposMuestrasDto != "" ) {
                $gruposMuestrasJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosTmp->setCveGrupoMuestra($gruposMuestrasDto[0]->getCveGrupoMuestra());
                $gruposMuestrasJuzgadosTmp->setActivo('S');
                $gruposMuestrasJuzgadosTmp = $gruposJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosTmp, '', $this->proveedor);
                if ( $gruposMuestrasJuzgadosTmp != "" ) {
                    foreach ( $gruposMuestrasJuzgadosTmp as $grupoJuzgado ) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoMuestraJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $arrJuzgados);
                }
            }
        }
        
        /*
         * Consultar los datos del juzgado
         */
        $juzgadoTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $juzgadoTmp->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
        /*
         * Consultar el grupo al que pertenece el juzgado enviado como par�metro
         */
        $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
        $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $gruposMuestrasJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposMuestrasJuzgadosDto->setActivo("S");
        $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, "", $this->proveedor);
        if ( $gruposMuestrasJuzgadosDto != "" ) {
            foreach ( $gruposMuestrasJuzgadosDto as $grupoJuzgado ) {
                /*
                 * Consultar en la tabla tblprogramacionmuestras si existe un registro 
                 * entre la fecha y hora enviadas como par�metro para saber que
                 * juez est� disponible para realizar la toma de muestra
                 */
                $programacionMuestrasDto = new ProgramacionmuestrasDTO();
                $programacionMuestrasDao = new ProgramacionmuestrasDAO();
                //$programacionMuestrasDto->setCveGrupoMuestraJuzgado($grupoJuzgado->getCveGrupoMuestraJuzgado());
                $programacionMuestrasDto->setActivo("S");
                /*$order = " AND (FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
                $order .= " OR FechaFinal LIKE'%" . $fechaInicio[0] . "%')";
                $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                            AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";*/
                $order = " AND CAST('" . $fecha . "' AS DATETIME) >= fechaInicio
                           AND CAST('" . $fecha . "' AS DATETIME) <= fechaFinal
                           AND cveGrupoMuestraJuzgado IN (" . $cadenaJuzgados . ")";
                $programacionMuestrasDto = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestrasDto, $order, $this->proveedor);
                if($programacionMuestrasDto!= "") {
                    /*
                     * Se encontraron resultados, verificar si existe m�s de un juzgador disponible
                     * en la fecha y hora enviadas como par�metro, en caso de haber m�s de un juzgador
                     * revisar el numero de toma de muestras tiene asignados, retornar el id del juzgador que tenga
                     * menos tomas de muestra
                     */
                    if ( count($programacionMuestrasDto) > 1 ) {
                        foreach ( $programacionMuestrasDto as $programacionJuzgador ){
                            $idJuzgadores[] = $programacionJuzgador->getIdJuzgador();
                            $juzgadoresMuestrasDto = new JuzgadoresmuestrasDTO();
                            $juzgadoresMuestrasDao = new JuzgadoresmuestrasDAO();
                            $juzgadoresMuestrasDto->setActivo("S");
                            $juzgadoresMuestrasDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                            $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgadorCateo . "'
                                       AND fechaRegistro <= '" . $fechaFinJuzgadorCateo . "'";
                            $juzgadoresMuestrasDto = $juzgadoresMuestrasDao->selectJuzgadoresmuestras($juzgadoresMuestrasDto, "", $orden, $this->proveedor);
                            if ( $juzgadoresMuestrasDto != "" ) {
                                $muestras[] = array(
                                    "muestras"   => count($juzgadoresMuestrasDto),
                                    "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                );
                            } else {
                                $muestras[] = array(
                                    "muestras"   => 0,
                                    "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                );
                            }
                        }
                        /*
                         * Ordenar el arreglo que contiene el numero de toma de muestras
                         * para saber cual juzgador tiene menos tomas de muestras asignadas
                         */
                        array_multisort($muestras);
//                        echo "<pre>";
//                        print_r($muestras);
//                        echo "</pre>";
                        /*
                         * Seleccionar el id del juzgador con menos tomas de muestras asignadas
                         */
                        $idJuzgadorMuestra = $muestras[0]['idJuzgador'];
                        //echo "idJuzgador: " . $idJuzgadorMuestra;
                    } else {
                        /*
                         * Solo existe un juzgador en el horario asigando, regresar el id encontrado
                         */
                        $idJuzgadorMuestra = $programacionMuestrasDto[0]->getIdJuzgador();
                    }
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($idJuzgadorMuestra);
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                    if ( $juzgadoresDto != "" ) {
                        $idJuzgador = $juzgadoresDto[0]->getIdJuzgador();
                        $nombreJuzgador = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                        /*
                         * Obtener los datos del rol del juez
                         */
                        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
                        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
                        $programacionJuzgadoresDto->setIdJuzgador($juzgadoresDto[0]->getIdJuzgador());
                        $orden = " AND fechaInicio LIKE'%" . $fechaInicio[0] . "%' 
                                   AND fechaFinal LIKE'%" . $fechaInicio[0] . "%'";
                        $programacionJuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionJuzgadoresDto, $orden, $this->proveedor);
                        if ( $programacionJuzgadoresDto != "" ) {
                            $cveRolJuzgador = $programacionJuzgadoresDto[0]->getCveRolJuzgador();
                            $rolesJuzgadoresDto = new RolesjuzgadoresDTO();
                            $rolesJuzgadoresDao = new RolesjuzgadoresDAO();
                            $rolesJuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);
                            $rolesJuzgadoresDto = $rolesJuzgadoresDao->selectRolesjuzgadores($rolesJuzgadoresDto, "", $this->proveedor);
                            if($rolesJuzgadoresDto != "") {
                                $desRolJuzgador = utf8_encode($rolesJuzgadoresDto[0]->getDesRolJuzgador());
                            } else {
                                $desRolJuzgador = "";
                            }
                        } else {
                            $cveRolJuzgador = 0;
                            $desRolJuzgador = "";
                        }
                        $result = array(
                            "idJuzgador"     => $idJuzgador,
                            "nombreJuzgador" => $nombreJuzgador,
                            "cveRolJuzgador" => $cveRolJuzgador,
                            "desRolJuzgador" => $desRolJuzgador
                        );
                    } else {
                        $error = true;
                        $msg = " Ocurrrio un error al consultar los datos del juez";
                    }
                } else {
                    $error = true;
                    $msg = " No se encontraron jueces programados para atender toma de muestras para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado()) . " en el dia " . $fechaInicio[0] . " a las " . $fechaInicio[1];
                }
            }
        } else {
            $error = true;
            $msg = " No se encontraron datos de programacion de toma de muestras para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado());
        }
        if ( !$error ) {
            $datos = array(
                "estatus"    => "ok",
                "totalCount" => 1,
                "text"       => "Resultados de la consulta",
                "data"       => $result
            );
        } else {
            $datos = array(
                "estatus"    => "error",
                "totalCount" => 0,
                "text"       => $msg
            );
        }
        return $datos;
    }
    
    public function simuladorMuestras($juzgadosDto, $programacionmuestrasDto, $proveedor = null){
        $juzgadosDto->setCveJuzgado(10322);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $msg = "";
        $result = array();
        $datos = array();
        $dias = array();
        $datosVespertino = array();
        $diasSemana = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        $diaInicio = $programacionmuestrasDto->getFechaInicio();
        $diaFin = $programacionmuestrasDto->getFechaFinal();
        /*
         * Ciclo para definir los d�as en que se mostrar�n los datos para el simulador
         */
        while($diaInicio <= $diaFin){
            $dias[] = $diaInicio;
            $inicio = $diaInicio;
            $diasTmp = strtotime('+1 day', strtotime($inicio));
            $diaInicio = date('Y-m-d', $diasTmp);   
        }
        for( $n = 0; $n < count($dias); $n++ ) {
            /*
             * Para cada uno de los d�as verificar que juez puede atender algun catoe
             */
            $horarioMatutinoMuestras = $dias[$n] . " 07:00:00";
            $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
            $programacionMuestrasTmp->setFechaInicio($horarioMatutinoMuestras);
            $datos = $this->juezTomaDeMuestra($juzgadosDto, $programacionMuestrasTmp, $this->proveedor);
            if($datos['estatus'] == "ok") {
                $juezMatutino[] = $datos['data']['nombreJuzgador'] . " - " . $datos['data']['desRolJuzgador'];
            } else {
                $juezMatutino[] = "No hay juez disponible para este horario";
            }
            
            $horarioMatutinoMuestrasFin = $dias[$n] . " 16:59:59";
            $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
            $programacionMuestrasTmp->setFechaInicio($horarioMatutinoMuestrasFin);
            $datosVespertino = $this->juezTomaDeMuestra($juzgadosDto, $programacionMuestrasTmp, $this->proveedor);
            if($datosVespertino['estatus'] == "ok") {
                $juezMatutinoFin[] = $datosVespertino['data']['nombreJuzgador'] . " - " . $datosVespertino['data']['desRolJuzgador'];
            } else {
                $juezMatutinoFin[] = "No hay juez disponible para este horario";
            }
            
            $horarioVespetinoMuestra = $dias[$n] . " 17:00:00";
            $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
            $programacionMuestrasTmp->setFechaInicio($horarioVespetinoMuestra);
            $datosVespertinoMuestras = $this->juezTomaDeMuestra($juzgadosDto, $programacionMuestrasTmp, $this->proveedor);
            if($datosVespertinoMuestras['estatus'] == "ok") {
                $juezVespertinoInicio[] = $datosVespertinoMuestras['data']['nombreJuzgador'] . " - " . $datosVespertinoMuestras['data']['desRolJuzgador'];
            } else {
                $juezVespertinoInicio[] = "No hay juez disponible para este horario";
            }
            
            $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
            $dia = date('Y-m-d', $diasTmp);
            
            $horarioVespetinoMuestrasFin = $dia . " 06:59:59";
            $programacionMuestrasTmp = new ProgramacionmuestrasDTO();
            $programacionMuestrasTmp->setFechaInicio($horarioVespetinoMuestrasFin);
            $datosVespertinoMuestrasFin = $this->juezTomaDeMuestra($juzgadosDto, $programacionMuestrasTmp, $this->proveedor);
            if($datosVespertinoMuestrasFin['estatus'] == "ok") {
                $juezVespertinoFin[] = $datosVespertinoMuestrasFin['data']['nombreJuzgador'] . " - " . $datosVespertinoMuestrasFin['data']['desRolJuzgador'];
            } else {
                $juezVespertinoFin[] = "No hay juez disponible para este horario";
            }
                
        }
        
        for ( $c = 0; $c < count($dias); $c++ ) {
            $fechaTmp = explode("-", $dias[$c]);
            $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
            $result[] = array(
                "fecha"                  => $dias[$c],
                "dia"                    => $diasSemana[$diaSemana],
                "juzgadorMatutinoInicio" => $juezMatutino[$c],
                "juezMatutinoFin"        => $juezMatutinoFin[$c],
                "juezVespertinoInicio"   => $juezVespertinoInicio[$c],
                "juezVespertinoFin"      => $juezVespertinoFin[$c]
            );
        }
        return $result;
    }
    
    public function eliminarSeleccionados($programacionmuestrasDto, $param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $result = array();
        $error = false;
        $msg = array();
        $idRegistrosUpdate = array();
        $cadenaIdRegistros = "";
        
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        
        $programacionMuestrasDao = new ProgramacionmuestrasDAO();
        
        $datos = json_decode($param['idProgramacionesMuestras']);
        //print_r($datos);
        if ( $datos != "" ) {
            for ( $n = 0; $n < count($datos); $n++ ) {
                if ( (int)$datos[$n]->idProgramacionMuestra != 0 ) {
                    $programacionMuestrasDto = new ProgramacionmuestrasDTO();
                    $programacionMuestrasDto->setIdProgramacionMuestra($datos[$n]->idProgramacionMuestra);
                    $programacionMuestrasDto->setActivo("N");
                    $programacionMuestrasDto->setFechaActualizacion($fechaActual);
                    $programacionMuestrasDto = $programacionMuestrasDao->updateProgramacionmuestras($programacionMuestrasDto, $this->proveedor);
                    if($programacionMuestrasDto != "") {
                        $error = false;
                        $idRegistrosUpdate[] = $programacionMuestrasDto[0]->getIdProgramacionMuestra();
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurrio un error al eliminar el registro!'));
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurrio un error al recibir los datos a eliminar!'));
                }
                if ( $error ) {
                    break;
                }
            }
            
        } else {
            $error = true;
            $msg[] = array('No se recibieron datos a eliminar');
        }
        
        if ( !$error ) {
            $cadenaIdRegistros = implode(',', $idRegistrosUpdate);
            $cveAccion = 368;
            $descripcion = "borrado logico en tblprogramacionmuestras idRegistros: " . $cadenaIdRegistros;
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $daoBitacora = new BitacoramovimientosDAO();
            $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if ( $insertarBitacora == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Ocurrio un error al registrar la accion realizada!'));
            } else {
                $error = false;
            }
        }
        
        if ( !$error ) {
            $this->proveedor->execute('COMMIT');
            $result = [
                'estatus'    => 'ok',
                'totalCount' => '1',
                'text'       => 'Registros eliminados correctamente'
            ];
        } else {
            $this->proveedor->execute('ROLLBACK');
            $result = [
                'estatus'    => 'error',
                'totalCount' => '0',
                'text'       => $msg
            ];
        }
        return json_encode($result);
    }

}

?>