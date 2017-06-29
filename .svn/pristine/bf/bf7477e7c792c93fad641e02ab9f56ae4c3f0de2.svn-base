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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionapelacateos/ProgramacionapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionapelacateos/ProgramacionapelacateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresapelacateos/JuzgadoresapelacateosDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
//Para el simuladore de apelacion de cateos
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesaudiencias/BuscarJuzgadoresApelacionCateos.Class.php");

class ProgramacionapelacateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto->setidProgramacionApelaCateo(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getidProgramacionApelaCateo()))));
        $ProgramacionapelacateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getidJuzgador()))));
        $ProgramacionapelacateosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getcveJuzgado()))));
        $ProgramacionapelacateosDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getfechaInicio()))));
        $ProgramacionapelacateosDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getfechaFinal()))));
        $ProgramacionapelacateosDto->setactivo(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getactivo()))));
        $ProgramacionapelacateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getfechaRegistro()))));
        $ProgramacionapelacateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ProgramacionapelacateosDto->getfechaActualizacion()))));
        return $ProgramacionapelacateosDto;
    }

    public function selectProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor = null) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosDao = new ProgramacionapelacateosDAO();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosDao->selectProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor);
        return $ProgramacionapelacateosDto;
    }

    public function insertProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor = null) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosDao = new ProgramacionapelacateosDAO();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosDao->insertProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor);
        return $ProgramacionapelacateosDto;
    }

    public function updateProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor = null) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosDao = new ProgramacionapelacateosDAO();
//$tmpDto = new ProgramacionapelacateosDTO();
//$tmpDto = $ProgramacionapelacateosDao->selectProgramacionapelacateos($ProgramacionapelacateosDto,$proveedor);
//if($tmpDto!=""){//$ProgramacionapelacateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacionapelacateosDto = $ProgramacionapelacateosDao->updateProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor);
        return $ProgramacionapelacateosDto;
//}
//return "";
    }

    public function deleteProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor = null) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosDao = new ProgramacionapelacateosDAO();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosDao->deleteProgramacionapelacateos($ProgramacionapelacateosDto, $proveedor);
        return $ProgramacionapelacateosDto;
    }
    
    public function selectProgramacionApelaCateosReporte($programacionApelaCateosDto, $cveUsuario, $mes, $anio, $tipo, $proveedor = null) {
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);        
        
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
        $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
        if($juzgadores != ""){
            $programacionApelaCateosDto->setIdJuzgador($juzgadores[0]->getIdJuzgador());
        }
        $programacionApelaCateosDto = $programacionApelaCateosDao->selectProgramacionapelacateos($programacionApelaCateosDto, $orden, $proveedor);
        
        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if($programacionApelaCateosDto != ""){
            foreach ($programacionApelaCateosDto as $Res){
                $fechaAux = explode(" ", $Res->getFechaInicio());
                $fechaTmp = explode("-", $fechaAux[0]);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));        
                $Res->setFechaActualizacion($dias[$diaSemana]); 
            }
        }
        return $programacionApelaCateosDto;
    }
    
    public function reporteProgramacionApelaCateos($programacionApelaCateosDto, $porDistrito = "N", $proveedor = null) {
        //var_dump($programacionApelaCateosDto);
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
        if ( $porDistrito == 'S' ) {
            if (isset($_SESSION['cveAdscripcion'])) {
                $juzgadoTmp = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $juzgadoTmp->setCveJuzgado($_SESSION['cveAdscripcion']);
                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp);
                if ( $juzgadoTmp != "" ) {
                    $juzgadosTmp = new JuzgadosDTO();
                    $juzgadosTmp->setCveDistrito($juzgadoTmp[0]->getCveDistrito());
                    $juzgadosTmp->setActivo("S");
                    $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp);
                    if ( $juzgadosTmp != "" ) {
                        foreach ( $juzgadosTmp as $juzgado ) {
                            $idJuzgados[] = $juzgado->getCveJuzgado();
                        }
                        $cadenaJuzgados = implode(",", $idJuzgados);
                        $order = " AND cveJuzgado IN(" . $cadenaJuzgados . ")";
                    }
                }
            }
        }
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        if($programacionApelaCateosDto->getCveJuzgado()!="") {
            $juzgadosDto->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
        }
        $juzgadosDto->setCveTipojuzgado(5);
        $juzgadosDto->setActivo("S");
        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, $order, $this->proveedor);
        
        if ($juzgadosDto != "") {
            
            foreach($juzgadosDto as $juzgado) {
//                $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
//                $juzgadoresjuzgadosDto->setCveJuzgado($juzgado->getCveJuzgado());
//                $juzgadoresjuzgadosDto->setActivo("S");
//                if ($programacionApelaCateosDto->getIdJuzgador() != "") {
//                    $juzgadoresjuzgadosDto->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
//                }
//                $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
//                $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " ORDER BY idJuzgador ASC ", $this->proveedor);


                //if ($juzgadoresjuzgadosDto != "") {
                    //for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {

                        //if ($juzgadoresDto != "") {
                            
                            $fechaFinal = $programacionApelaCateosDto->getFechaFinal();
                            $fechaInicio = $programacionApelaCateosDto->getFechaInicio();
                            
                            $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
                            if ($programacionApelaCateosDto->getIdJuzgador() != "") {
                                $programacionApelaCateosTmp->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
                            }
                            //$programacionApelaCateosTmp->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                            /*if ($programacionApelaCateosDto->getCveGrupoJuzgado() != "") {
                                $programacionApelaCateosDto->setCveGrupoJuzgado($programacionApelaCateosDto->getCveGrupoJuzgado());
                            }*/
                            
                            $programacionApelaCateosTmp->setCveJuzgado($juzgado->getCveJuzgado());
                            if ($fechaInicio != "" && $fechaFinal != "") {
                                $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $fechaInicio . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $fechaFinal . "' 
                                        ORDER BY fechaInicio, idJuzgador ";
                            } else {
                                $orden = " ORDER BY fechaInicio, idJuzgador";
                            }
                            $programacionApelaCateosTmp->setActivo("S");
                            $programacionApelaCateosDao = new ProgramacionapelacateosDAO();

                            $programacionApelaCateosTmp = $programacionApelaCateosDao->selectProgramacionapelacateos($programacionApelaCateosTmp, $orden, $this->proveedor);

                            if ($programacionApelaCateosTmp != "") {
                                //echo $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno() . "<br>";

                                foreach ($programacionApelaCateosTmp as $programacionApelaCateo) {
                                    
                                    $juzgadoresDto = new JuzgadoresDTO();
                                    $juzgadoresDto->setIdJuzgador($programacionApelaCateo->getIdJuzgador());
                                    $juzgadoresDto->setActivo("S");
                                    $juzgadoresDao = new JuzgadoresDAO();
                                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                                    $juzgadoresDto = $juzgadoresDto[0];
                                    
                                    $juzgadoTmpDto = new JuzgadosDTO();
                                    $juzgadoTmpDto->setCveJuzgado($programacionApelaCateo->getCveJuzgado());
                                    $juzgadoTmpDto = $juzgadosDao->selectJuzgados($juzgadoTmpDto, "", $this->proveedor);
                                    
                                    
                                    $fechaAux = explode(" ", $programacionApelaCateo->getFechaInicio());
                                    $fechaTmp = explode("-", $fechaAux[0]);
                                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                    $datos[] = array(
                                        "FechaInicio"              => $programacionApelaCateo->getFechaInicio(),
                                        "idProgramacionApelaCateo" => $programacionApelaCateo->getIdProgramacionApelaCateo(),
                                        "Nombre"                   => utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno()),
                                        "IdJuzgador"               => $juzgadoresDto->getIdJuzgador(),
                                        "FechaFin"                 => $programacionApelaCateo->getFechaFinal(),
                                        "cveJuzgado"               => $programacionApelaCateo->getCveJuzgado(),
                                        "desJuzgado"               => utf8_encode($juzgadoTmpDto[0]->getDesJuzgado()),
                                        "Dia"                      => $dias[$diaSemana]
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
    
    public function programacionApelaCateosManual($programacionApelaCateosDto, $proveedor = null){
        //var_dump($programacionApelaCateosDto);
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
        $logger = new Logger("/../../logs/", "ProgramacionApelaCateos");
        $logger->w_onError("**********COMIENZA EL PROCESO MANUAL DE PROGRAMACION DE APELACION CATEOS**********");
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
        $fechaInicial = $programacionApelaCateosDto->getFechaInicio();
        $fechaInicialAux = explode(" ", $fechaInicial);
        $fechaInicioAux = $fechaInicialAux[0];
        $horaInicioAux = $fechaInicialAux[1];
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $programacionApelaCateosDto->getFechaFinal();
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
                    if ( (int)$horaInicioTmp[0] > (int)$horaFinTmp[0] ) {
                        if ( (int)$horaFinTmp[0] >= 7 ) {
                            $error = true;
                            $mensajeError = "No se puede guardar los registros entre el horario indicado: " . $horaInicioAux . " - " . $horaFinAux . " favor de revisar";
                            break;
                        }
                        $diaInicio = $dias[$n];
                        $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
                        $diaFin = date('Y-m-d', $diasTmp);
                    } else {
                        
                        $diaInicio = $dias[$n];
                        $diaFin = $dias[$n];
                    }
                    $diaInicio .= " " . $horaInicioAux;
                    $diaFin .= " " . $horaFinAux;
                    $programacion = new ProgramacionapelacateosDTO();
                    //$programacion->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
                    $programacion->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
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
                               AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal"; 
                    
                    $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
                    $dto = new ProgramacionapelacateosDTO();
                    $dto = $programacionApelaCateosDao->selectProgramacionapelacateos($programacion, $order, $this->proveedor);
                    //print_r($dto);
                    if ($dto == "") {
                        //$fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                        //$fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                        $programacion = new ProgramacionapelacateosDTO();
                        $programacion->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
                        $programacion->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
                        $programacion->setFechaInicio($diaInicio);
                        $programacion->setFechaFinal($diaFin);
                        $programacion->setActivo("S");
                        $programacion = $programacionApelaCateosDao->insertProgramacionapelacateos($programacion, $this->proveedor);
                        //$programacion = "";
                        if ($programacion != "") {
                            $error = false;
                            $idProgramacionesInsert[] = $programacion[0]->getIdProgramacionApelaCateo();
                            $logger->w_onError("**********SE AGREGA EL REGISTRO CON ID DE PROGRAMACION APELA CATEOS: " . $programacion[0]->getIdProgramacionApelaCateo());
                        } else {
                            $error = true;
                            $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO");
                            $logger->w_onError("**********ID JUZGADOR: " . $programacionApelaCateosDto->getIdJuzgador());
                            $logger->w_onError("**********CVE JUZGADO: " . $programacionApelaCateosDto->getCveJuzgado());
                            $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                            $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                            $mensajeError = "OCURRIO UN ERROR AL INSERTAR EL REGISTRO";
                        }
                        if ($error) {
                            break;
                            $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                        }
                    } else {
                        $logger->w_onError("**********EL ID DE PROGRAMACION DE APELACION CATEO ES " . $dto[0]->getIdProgramacionApelaCateo() . ", SE ACTUALIZARAN LOS DATOS");
                        $error = true;
                        $hInicio = explode(" ",$dto[0]->getFechaInicio());
                        $hFin = explode(" ",$dto[0]->getFechaFinal());
                        $mensajeError = "Ya existe un registro de apelacion cateo para el dia: " . $dias[$n]. " , para el juzgado seleccionado entre el horario: " . $hInicio[1] . " y " . $hFin[1];
                        /*
                         * Actualizar los registros encontrados
                         */
                        /*$inicioTmp = $dto[0]->getFechaInicio();
                        $finTmp = $dto[0]->getFechaInicio();
                        $fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                        $fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                        $programacion = new ProgramacioncateosDTO();
                        $programacion->setIdProgramacionCateo($dto[0]->getIdProgramacionCateo());
                        $programacion->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
                        $programacion->setCveGrupoJuzgado($programacionApelaCateosDto->getCveGrupoJuzgado());
                        $programacion->setFechaInicio($fechaHoraInicio);
                        $programacion->setFechaFinal($fechaHoraFin);
                        $programacion->setActivo("S");
                        $logger->w_onError("**********ID JUZGADOR: " . $programacionApelaCateosDto->getIdJuzgador());
                        $logger->w_onError("**********CVE GRUPO JUZGADO: " . $programacionApelaCateosDto->getCveGrupoJuzgado());
                        $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                        $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                        $logger->w_onError("**********ID PROGRAMACION CATEO: " . $dto[0]->getIdProgramacionCateo());

                        $programacion = $programacionApelaCateosDao->updateProgramacioncateos($programacion, $this->proveedor);
                        if($programacion != ""){
                            $error = false;
                            $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                            $idProgramacionesUpdate[] = $programacion[0]->getIdProgramacionCateo();
                        } else {
                            $error = true;
                            $logger->w_onError("**********ERROR AL ACTUALIZAR EL REGISTRO");
                            $mensajeError = "NO SE PUDO ACTUALIZAR EL REGISTRO";
                        }*/
                        
                        if($error){
                            break;
                            $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                        }
                    }
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
                    $cveAccion = 369;
                    $descripcion = "INSERT tabla tblprogramacionapelacateos registros: " . $registrosInsert;
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
                    $cveAccion = 370;
                    $descripcion = "UPDATE tabla tblprogramacioncateos registros: " . $registrosInsert;
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
    
    public function modificarProgramacionApelaCateos($programacionApelaCateosDto, $proveedor = null){
        //var_dump($programacionApelaCateosDto);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);
        $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
        $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
        $error = false;
        $msg = array();
        $result = array();
        $listaResult = array();
        $fechaInicio = explode(" ", $programacionApelaCateosDto->getFechaInicio());
        $fechaFin = explode(" ", $programacionApelaCateosDto->getFechaFinal());
        $horaInicioTmp = explode(":", $fechaInicio[1]);
        $horaFinTmp = explode(":", $fechaFin[1]);
        if ( (int)$horaInicioTmp[0] > (int)$horaFinTmp[0] ) {
            if ( (int)$horaFinTmp[0] >= 7 ) {
                $error = true;
                $msg = array("No se puede guardar los registros entre el horario indicado: " . $fechaInicio[1] . " - " . $fechaFin[1] . " favor de revisar");
            }
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

//            $programacionApelaCateosTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            $programacionApelaCateosTmp->setIdProgramacionApelaCateo($programacionApelaCateosDto->getIdProgramacionApelaCateo());
            $programacionApelaCateosTmp->setActivo("S");
            //$programacionApelaCateosTmp->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
            //$programacionApelaCateosTmp->setFechaInicio($diaInicio);
            //$programacionApelaCateosTmp->setFechaFinal($diaFin);
//            $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
//                       AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
//                       AND idJuzgador<>'" . $programacionApelaCateosDto->getIdJuzgador() . "'";
            $order = "";
            /*$order = " AND FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
            $order .= " AND FechaFinal LIKE'%" . $fechaFin[0] . "%'";
            $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                        AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";
            $order .= " AND idJuzgador<>'" . $programacionApelaCateosDto->getIdJuzgador() . "'";*/
            
            $programacionApelaCateosTmp = $programacionApelaCateosDao->selectProgramacionapelacateos($programacionApelaCateosTmp, $order, $this->proveedor);
            //if($programacionApelaCateosTmp == "") {
                $programacionApelaCateosDto->setFechaInicio($diaInicio);
                $programacionApelaCateosDto->setFechaFinal($diaFin);
                $programacionApelaCateosDto = $programacionApelaCateosDao->updateProgramacionapelacateos($programacionApelaCateosDto, $this->proveedor);
                if($programacionApelaCateosDto != "") {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $cveAccion = 370;
                    $descripcion = "UPDATE tabla tblprogramacionapelacioncateoscateos registro antes de modificar: " . json_encode($programacionApelaCateosTmp[0]->toString()) . ", registro modificado: " . json_encode($programacionApelaCateosDto[0]->toString());
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
                        "idProgramacionApelaCateo" => $programacionApelaCateosDto[0]->getIdProgramacionApelaCateo(),
                        "idJuzgador"               => $programacionApelaCateosDto[0]->getIdJuzgador(),
                        "cveJuzgado"               => $programacionApelaCateosDto[0]->getCveJuzgado(),
                        "fechaInicio"              => $programacionApelaCateosDto[0]->getFechaInicio(),
                        "fechaFinal"               => $programacionApelaCateosDto[0]->getFechaFinal()
                    );
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al actualizar el registro");
                }
//            } else {
//                $horaInicioAux = explode(" ",$programacionApelaCateosTmp[0]->getFechaInicio());
//                $horaFinAux = explode(" ", $programacionApelaCateosTmp[0]->getFechaFinal());
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
    
    public function bajaProgramacionApelaCateosManual($programacionApelaCateosDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionApelaCateos");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO DE PROGRAMACION APELACION CATEOS**********");
        $idProgramacionCateos = array();
        $dias = array();
        $error = true;
        
        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
        $fechaInicial = $programacionApelaCateosDto->getFechaInicio();
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $programacionApelaCateosDto->getFechaFinal();
        $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);

        while ($fechaInicial <= $fechaFinal) {
            $dias[] = $fechaInicial;
            $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicial));
            $fechaInicial = date('Y-m-d', $fechaInicialTmp);
        }
        //print_r($dias);
        $programacionCateoDto = new ProgramacionapelacateosDTO();
        $programacionCateoDto->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
        $programacionCateoDto->setIdJuzgador($programacionApelaCateosDto->getIdJuzgador());
        $programacionCateoDto->setActivo("S");
        $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
        $programacionCateoDto = $programacionApelaCateosDao->selectProgramacionapelacateos($programacionCateoDto, ' ORDER BY fechaInicio ', $this->proveedor);
        $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION APELA CATEOS");
        $logger->w_onError("**********CVE JUZGADO: " . $programacionApelaCateosDto->getCveJuzgado());
        $logger->w_onError("**********ID JUZGADOR: " . $programacionApelaCateosDto->getIdJuzgador());
        
        if ($programacionCateoDto != "") {
            $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
            for ($n = 0; $n < count($programacionCateoDto); $n++) {
                $dia = $programacionCateoDto[$n]->getFechaInicio();
                //echo $dia . "<br>";
                $fechaInicio = explode(" ", $dia);
                $fechaTmp = $fechaInicio[0];
                //echo $fechaTmp . "<br>";
                if (in_array($fechaTmp, $dias)) {
                    $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
                    $programacionApelaCateosTmp->setIdProgramacionApelaCateo($programacionCateoDto[$n]->getIdProgramacionApelaCateo());
                    $programacionApelaCateosTmp->setActivo("N");
                    $programacionApelaCateosTmp = $programacionApelaCateosDao->updateProgramacionapelacateos($programacionApelaCateosTmp, $this->proveedor);
                    if ($programacionApelaCateosTmp != "") {
                        $error = false;
                        $idProgramacionCateos[] = $programacionApelaCateosTmp[0]->getIdProgramacionApelaCateo();
                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION APELA CATEO: " . $programacionApelaCateosTmp[0]->getIdProgramacionApelaCateo());
                    } else {
                        $error = true;
                        $logger->w_onError("**********ERROR AL BORRAR LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION APELA CATEO: " . $programacionCateoDto[$n]->getIdProgramacionApelaCateo());
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
            $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION APELA CATEOS, TERMINA EL PROCESO");
            $mensajeError = "NO HAY DATOS A ELIMINAR";
        }
        $fecha = date("Y-m-d H:i:s");
        $cveAccion = 371;
        $programacionCateos = implode(",", $idProgramacionCateos);
        $descripcion = "borrado logico en tblprogramacionapelacateos idProgramacionCateos: " . $programacionCateos;
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
    
    public function eliminarProgramacionApelaCateos($programacionApelaCateosDto, $proveedor = null){
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
        $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
        $programacionApelaCateosDto->setActivo("N");
        $programacionApelaCateosDto->setFechaActualizacion($fechaActual);
        $programacionApelaCateosDto = $programacionApelaCateosDao->updateProgramacionapelacateos($programacionApelaCateosDto, $this->proveedor);
        if($programacionApelaCateosDto != "") {
            $fecha = date("Y-m-d H:i:s");
            $cveAccion = 371;
            $descripcion = "borrado logico en tblprogramacionapelacateos idProgramacionCateos: " . $programacionApelaCateosDto[0]->getIdProgramacionApelaCateo();
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
                "idProgramacionApelaCateo" => $programacionApelaCateosDto[0]->getIdProgramacionApelaCateo(),
                "idJuzgador"               => $programacionApelaCateosDto[0]->getIdJuzgador(),
                "cveJuzgado"               => $programacionApelaCateosDto[0]->getCveJuzgado(),
                "fechaInicio"              => $programacionApelaCateosDto[0]->getFechaInicio(),
                "fechaFinal"               => $programacionApelaCateosDto[0]->getFechaFinal()
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
    
    public function juezApelaCateo($programacionApelaCateosDto, $proveedor = null){
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
        $idJuzgadorApelaCateo = 0;
        $cateos = array();
        $idJuzgadores = array();
        $fecha = $programacionApelaCateosDto->getFechaInicio();
        $fechaInicio = explode(" ", $programacionApelaCateosDto->getFechaInicio());
        $fechaInicioJuzgadorCateo = $fechaInicio[0] . " 00:00:00";
        $fechaFinJuzgadorCateo = $fechaInicio[0] . " 23:59:59";
        //$fechaFin = explode(" ", $programacionApelaCateosDto->getFechaFinal());
        /*
         * Consultar los datos del juzgado
         */
        $juzgadoTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $juzgadoTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
        $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
        
        if ( $juzgadoTmp != "" ) {
            foreach ( $juzgadoTmp as $juzgado ) {
                /*
                 * Consultar en la tabla tblprogramacionapelacateos si existe un registro 
                 * entre la fecha y hora enviadas como par�metro para saber que
                 * juez est� disponible para realizar la apelacion de cateo
                 */
                $programacionApelaCateosDto = new ProgramacionapelacateosDTO();
                $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
                $programacionApelaCateosDto->setCveJuzgado($juzgado->getCveJuzgado());
                $programacionApelaCateosDto->setActivo("S");
                /*$order = " AND (FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
                $order .= " OR FechaFinal LIKE'%" . $fechaInicio[0] . "%')";
                $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                            AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";*/
                $order = " AND CAST('" . $fecha . "' AS DATETIME) >= fechaInicio
                           AND CAST('" . $fecha . "' AS DATETIME) <= fechaFinal";
                $programacionApelaCateosDto = $programacionApelaCateosDao->selectProgramacionapelacateos($programacionApelaCateosDto, $order, $this->proveedor);
                if($programacionApelaCateosDto!= "") {
                    /*
                     * Se encontraron resultados, verificar si existe m�s de un juzgador disponible
                     * en la fecha y hora enviadas como par�metro, en caso de haber m�s de un juzgador
                     * revisar cu�ntas apelaciones de cateos tiene asignados, retornar el id del juzgador que tenga
                     * menos apelaciones de cateos
                     */
                    if ( count($programacionApelaCateosDto) > 1 ) {
                        foreach ( $programacionApelaCateosDto as $programacionJuzgador ){
                            $idJuzgadores[] = $programacionJuzgador->getIdJuzgador();
                            $juzgadoresApelaCateosDto = new JuzgadoresapelacateosDTO();
                            $juzgadoresApelaCateosDao = new JuzgadoresapelacateosDAO();
                            $juzgadoresApelaCateosDto->setActivo("S");
                            $juzgadoresApelaCateosDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                            $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgadorCateo . "'
                                       AND fechaRegistro <= '" . $fechaFinJuzgadorCateo . "'";
                            $juzgadoresApelaCateosDto = $juzgadoresApelaCateosDao->selectJuzgadoresapelacateos($juzgadoresApelaCateosDto, "", $orden, $this->proveedor);
                            if ( $juzgadoresApelaCateosDto != "" ) {
                                $cateos[] = array(
                                    "cateos"     => count($juzgadoresApelaCateosDto),
                                    "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                );
                            } else {
                                $cateos[] = array(
                                    "cateos"     => 0,
                                    "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                );
                            }
                        }
                        /*
                         * Ordenar el arreglo que contiene el numero de apelacion cateos
                         * para saber cual juzgador retornar
                         */
                        array_multisort($cateos);
//                        echo "<pre>";
//                        print_r($cateos);
//                        echo "</pre>";
                        /*
                         * Seleccionar el id del juzgador con menos apelaciones de cateos
                         */
                        $idJuzgadorApelaCateo = $cateos[0]['idJuzgador'];
                        //echo "idJuzgador: " . $idJuzgadorApelaCateo;
                    } else {
                        /*
                         * Solo existe un juzgador en el horario asigando, regresar el id encontrado
                         */
                        $idJuzgadorApelaCateo = $programacionApelaCateosDto[0]->getIdJuzgador();
                    }
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($idJuzgadorApelaCateo);
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
                    $msg = " No se encontraron jueces programados para atender apelaciones de cateos para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado()) . " en el dia " . $fechaInicio[0] . " a las " . $fechaInicio[1];
                }
            }
        } else {
            $error = true;
            $msg = " No se encontraron datos de programacion de cateos para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado());
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
    
    public function simuladorApelaCateos($programacionApelaCateosDto, $proveedor = null){
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
        $diaInicio = $programacionApelaCateosDto->getFechaInicio();
        $diaFin = $programacionApelaCateosDto->getFechaFinal();
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
             * Para cada uno de los d�as verificar que juez puede atender alguna apelacion de cateo
             */
            $horarioMatutinoCateo = $dias[$n] . " 07:00:00";
            $horarioMatutinoCateoFin = $dias[$n] . " 16:59:59";
            
//            $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
//            $programacionApelaCateosTmp->setFechaInicio($horarioMatutinoCateo);
//            $programacionApelaCateosTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            $juezApelaCateos = new BuscarJuzgadoresApelacionCateo();
            $juzgadoDto = new JuzgadosDTO();
            $juzgadoDto->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            
            $datos = $juezApelaCateos->obtenerSecretario($juzgadoDto, $horarioMatutinoCateo, $horarioMatutinoCateo, $this->proveedor);
            
            if(is_array($datos) && array_key_exists('idSecretario', $datos)) {
                //print_r($datos);
                /*
                 * Consultar datos del secretario de sala
                 */
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto->setIdJuzgador($datos['idSecretario']);
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, '', $this->proveedor);
                $juezMatutino[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                //$juezMatutinoFin[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
            } else {
                $juezMatutino[] = "No hay juez disponible en este horario";
                //$juezMatutinoFin[] = "No hay juez disponible para este horario";
            }
            
            
//            $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
//            $programacionApelaCateosTmp->setFechaInicio($horarioMatutinoCateoFin);
//            $programacionApelaCateosTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            $datosVespertino = $juezApelaCateos->obtenerSecretario($juzgadoDto, $horarioMatutinoCateoFin, $horarioMatutinoCateoFin, $this->proveedor);
            if(is_array($datosVespertino) && array_key_exists('idSecretario', $datos)) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto->setIdJuzgador($datosVespertino['idSecretario']);
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, '', $this->proveedor);
                $juezMatutinoFin[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
            } else {
                $juezMatutinoFin[] = "No hay juez disponible para este horario";
            }
            
            $horarioVespetinoCateo = $dias[$n] . " 17:00:00";
            $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
            $dia = date('Y-m-d', $diasTmp);
            
            $horarioVespetinoCateoFin = $dia . " 06:59:59";
            
//            $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
//            $programacionApelaCateosTmp->setFechaInicio($horarioVespetinoCateo);
//            $programacionApelaCateosTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            
            $juzgadoDto = new JuzgadosDTO();
            $juzgadoDto->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            
            $datosVespertinoCateo = $juezApelaCateos->obtenerSecretario($juzgadoDto,$horarioVespetinoCateo,$horarioVespetinoCateo, $this->proveedor);
            
            if(is_array($datosVespertinoCateo) && array_key_exists('idSecretario', $datos)) {
                //print_r($datosVespertinoCateo);
                //consultar los datos del secretario de sala
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto->setIdJuzgador($datos['idSecretario']);
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, '', $this->proveedor);
                $juezVespertinoInicio[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                //$juezVespertinoFin[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
            } else {
                $juezVespertinoInicio[] = "No hay juez disponible para este horario";
                //$juezVespertinoFin[] = "No hay juez disponible para este horario";
            }
            
            
//            $programacionApelaCateosTmp = new ProgramacionapelacateosDTO();
//            $programacionApelaCateosTmp->setFechaInicio($horarioVespetinoCateoFin);
//            $programacionApelaCateosTmp->setCveJuzgado($programacionApelaCateosDto->getCveJuzgado());
            $datosVespertinoCateoFin = $juezApelaCateos->obtenerSecretario($juzgadoDto,$horarioVespetinoCateoFin,$horarioVespetinoCateoFin, $this->proveedor);
            if(is_array($datosVespertinoCateoFin) && array_key_exists('idSecretario', $datos)) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto->setIdJuzgador($datos['idSecretario']);
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, '', $this->proveedor);
                $juezVespertinoFin[] = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
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
    
    public function eliminarSeleccionados($programacionApelaCateosDto, $param, $proveedor = null) {
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
        
        $programacionApelaCateosDao = new ProgramacionapelacateosDAO();
        
        $datos = json_decode($param['idProgramacionesApelaCateos']);
        //print_r($datos);
        if ( $datos != "" ) {
            for ( $n = 0; $n < count($datos); $n++ ) {
                if ( (int)$datos[$n]->idProgramacionApelaCateo != 0 ) {
                    $programacionApelaCateosDto = new ProgramacionapelacateosDTO();
                    $programacionApelaCateosDto->setIdProgramacionApelaCateo($datos[$n]->idProgramacionApelaCateo);
                    $programacionApelaCateosDto->setActivo("N");
                    $programacionApelaCateosDto->setFechaActualizacion($fechaActual);
                    $programacionApelaCateosDto = $programacionApelaCateosDao->updateProgramacionapelacateos($programacionApelaCateosDto, $this->proveedor);
                    if($programacionApelaCateosDto != "") {
                        $error = false;
                        $idRegistrosUpdate[] = $programacionApelaCateosDto[0]->getIdProgramacionApelaCateo();
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
            $cveAccion = 371;
            $descripcion = "borrado logico en tblprogramacionapelacateos idRegistros: " . $cadenaIdRegistros;
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
                $msg[] = array(utf8_encode('Ocurrio un error al registrar la acci�n realizada!'));
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