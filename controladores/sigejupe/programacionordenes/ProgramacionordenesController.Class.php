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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionordenes/ProgramacionordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
//Grupos ordenes juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenesjuzgados/GruposordenesjuzgadosDAO.Class.php");
//Juzgadores juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");
//Juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//Programacionjuzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionjuzgadores/ProgramacionjuzgadoresDAO.Class.php");
//roles juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
//Juzgadores ordenes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresordenes/JuzgadoresordenesDAO.Class.php");
//bitacora
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
//Grupos ordenes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenes/GruposordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenes/GruposordenesDAO.Class.php");

class ProgramacionordenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto->setidProgramacionOrden(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getidProgramacionOrden()))));
        $ProgramacionordenesDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getidJuzgador()))));
        $ProgramacionordenesDto->setcveGrupoOrdenJuzgado(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getcveGrupoOrdenJuzgado()))));
        $ProgramacionordenesDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getfechaInicio()))));
        $ProgramacionordenesDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getfechaFinal()))));
        $ProgramacionordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getactivo()))));
        $ProgramacionordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getfechaRegistro()))));
        $ProgramacionordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ProgramacionordenesDto->getfechaActualizacion()))));
        return $ProgramacionordenesDto;
    }

    public function selectProgramacionordenesReporte($ProgramacionordenesDto, $cveUsuario, $mes, $anio, $tipo, $proveedor = null) {

        $juzgadoresDTO = new JuzgadoresDTO();
        $juzgadoresDTO->setCveUsuario($cveUsuario);
        $juzgadoresDAO = new JuzgadoresDAO();

        $juzgadores = $juzgadoresDAO->selectJuzgadoreCveUsario($juzgadoresDTO);
        if ($tipo == 1) {
            $orden = " AND fechaInicio >= '" . $anio . $mes . "01' 
                                           AND fechaFinal <= '" . $anio . $mes . "31' 
                                        ORDER BY fechaInicio, idJuzgador";
        }
        if ($tipo == 2) {
            $fini = $mes;
            $ffin = $anio;
            $fini = str_replace("/", "-", $fini);
            $ffin = str_replace("/", "-", $ffin);
            $partesF1 = explode("-", $fini);
            $armoFini = $partesF1[2] . "-" . $partesF1[1] . "-" . $partesF1[0];
            $partesF2 = explode("-", $ffin);
            $armoFfin = $partesF2[2] . "-" . $partesF2[1] . "-" . $partesF2[0];
            $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $armoFini . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $armoFfin . "' 
                                        ORDER BY fechaInicio, idJuzgador";
        }
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        if ($juzgadores != "") {
            $ProgramacionordenesDto->setIdJuzgador($juzgadores[0]->getIdJuzgador());
        }
        $ProgramacionordenesDao = new ProgramacionordenesDAO();
        $ProgramacionordenesDto = $ProgramacionordenesDao->selectProgramacionordenes($ProgramacionordenesDto, $orden, $proveedor);

        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if ($ProgramacionordenesDto != "") {
            foreach ($ProgramacionordenesDto as $Res) {
                $fechaAux = explode(" ", $Res->getFechaInicio());
                $fechaTmp = explode("-", $fechaAux[0]);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                $Res->setFechaActualizacion($dias[$diaSemana]);
            }
        }

        return $ProgramacionordenesDto;
    }

    public function selectProgramacionordenes($ProgramacionordenesDto, $proveedor = null) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesDao = new ProgramacionordenesDAO();
        $ProgramacionordenesDto = $ProgramacionordenesDao->selectProgramacionordenes($ProgramacionordenesDto, $proveedor);
        return $ProgramacionordenesDto;
    }

    public function insertProgramacionordenes($ProgramacionordenesDto, $proveedor = null) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesDao = new ProgramacionordenesDAO();
        $ProgramacionordenesDto = $ProgramacionordenesDao->insertProgramacionordenes($ProgramacionordenesDto, $proveedor);
        return $ProgramacionordenesDto;
    }

    public function updateProgramacionordenes($ProgramacionordenesDto, $proveedor = null) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesDao = new ProgramacionordenesDAO();
        //$tmpDto = new ProgramacionordenesDTO();
        //$tmpDto = $ProgramacionordenesDao->selectProgramacionordenes($ProgramacionordenesDto,$proveedor);
        //if($tmpDto!=""){//$ProgramacionordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacionordenesDto = $ProgramacionordenesDao->updateProgramacionordenes($ProgramacionordenesDto, $proveedor);
        return $ProgramacionordenesDto;
        //}
        //return "";
    }

    public function deleteProgramacionordenes($ProgramacionordenesDto, $proveedor = null) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesDao = new ProgramacionordenesDAO();
        $ProgramacionordenesDto = $ProgramacionordenesDao->deleteProgramacionordenes($ProgramacionordenesDto, $proveedor);
        return $ProgramacionordenesDto;
    }

    public function reporteProgramacionOrdenes($ProgramacionordenesDto, $GruposOrdenesJuzgadosDto, $porDistrito = 'N', $proveedor = null) {
        //var_dump($ProgramacionordenesDto);
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
//                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp);
//                if ( $juzgadoTmp != "" ) {
//                    $juzgadosTmp = new JuzgadosDTO();
//                    $juzgadosTmp->setCveDistrito($juzgadoTmp[0]->getCveDistrito());
//                    $juzgadosTmp->setActivo("S");
//                    $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp);
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

        $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
        $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
        $gruposOrdenesJuzgadosDto->setCveGrupoOrden($GruposOrdenesJuzgadosDto->getCveGrupoOrden());
        $gruposOrdenesJuzgadosDto->setActivo("S");
        $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, $order, $this->proveedor);

        if ($gruposOrdenesJuzgadosDto != "") {

            foreach ($gruposOrdenesJuzgadosDto as $grupoOrdenJuzgado) {
                $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresjuzgadosDto->setCveJuzgado($grupoOrdenJuzgado->getCveJuzgado());
                $juzgadoresjuzgadosDto->setActivo("S");
                if ($ProgramacionordenesDto->getIdJuzgador() != "") {
                    $juzgadoresjuzgadosDto->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
                }
                $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
                $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " ORDER BY idJuzgador ASC ", $this->proveedor);


                //if ($juzgadoresjuzgadosDto != "") {
                    //for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {

                        //if ($juzgadoresDto != "") {

                            $programacionOrdenesDto = new ProgramacionordenesDTO();
                            //$programacionOrdenesDto->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                            if ($ProgramacionordenesDto->getIdJuzgador() != "") {
                                $programacionOrdenesDto->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
                            }
                            /* if ($ProgramacionordenesDto->getCveGrupoOrdenJuzgado() != "") {
                              $programacionOrdenesDto->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                              } */
                            $programacionOrdenesDto->setCveGrupoOrdenJuzgado($grupoOrdenJuzgado->getCveGrupoOrdenJuzgado());
                            if ($ProgramacionordenesDto->getFechaInicio() != "" && $ProgramacionordenesDto->getFechaFinal() != "") {
                                $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $ProgramacionordenesDto->getFechaInicio() . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $ProgramacionordenesDto->getFechaFinal() . "' 
                                        ORDER BY fechaInicio, idJuzgador";
                            } else {
                                $orden = " ORDER BY fechaInicio, idJuzgador";
                            }
                            $programacionOrdenesDto->setActivo("S");
                            $programacionOrdenesDao = new ProgramacionordenesDAO();

                            $programacionOrdenesDto = $programacionOrdenesDao->selectProgramacionordenes($programacionOrdenesDto, $orden, $this->proveedor);

                            if ($programacionOrdenesDto != "") {
                                //echo $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno() . "<br>";

                                foreach ($programacionOrdenesDto as $programacionOrden) {
                                    //echo "Horario: " . $programacionOrden->getFechaInicio() . " " . $programacionOrden->getFechaFinal() . "<br>";
//                                    $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
//                                    $rolesjuzgadoresDto->setCveRolJuzgador($programacionOrden->getCveRolJuzgador());
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
                                    $juzgadoresDto->setIdJuzgador($programacionOrden->getIdJuzgador());
                                    $juzgadoresDto->setActivo("S");
                                    $juzgadoresDao = new JuzgadoresDAO();
                                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                                    $juzgadoresDto = $juzgadoresDto[0];
                                    
                                    $fechaAux = explode(" ", $programacionOrden->getFechaInicio());
                                    $fechaTmp = explode("-", $fechaAux[0]);
                                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                    $datos[] = array(
                                        "FechaInicio" => $programacionOrden->getFechaInicio(),
                                        "idProgramacionOrden" => $programacionOrden->getIdProgramacionOrden(),
                                        "Nombre" => utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno()),
                                        "IdJuzgador" => $juzgadoresDto->getIdJuzgador(),
                                        "FechaFin" => $programacionOrden->getFechaFinal(),
                                        "cveGrupoOrdenJuzgado" => $programacionOrden->getCveGrupoOrdenJuzgado(),
                                        "Dia" => $dias[$diaSemana]
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

    public function selectJuzgadoresOrdenes($gruposOrdenesDto, $juzgadosDto, $porDistrito = 'N', $proveedor = null) {
        $idJuzgador = array();
        $result = array();
        $order = "";
        $idJuzgados = array();
        $cadenaJuzgados = "";
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        /*
         * Obtener el listado de juzgados que pertenecen al grupo seleccionado por el usuario
         */
        $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
        $gruposOrdenesJuzgadosDto->setActivo("S");
        $gruposOrdenesJuzgadosDto->setCveGrupoOrden($gruposOrdenesDto->getCveGrupoOrden());
        if ($juzgadosDto->getCveJuzgado() != "") {
            $gruposOrdenesJuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
        }

        if ($porDistrito == 'S') {
            if (isset($_SESSION['cveAdscripcion'])) {
                $juzgadoTmp = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $juzgadoTmp->setCveJuzgado($_SESSION['cveAdscripcion']);
                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp);
                if ($juzgadoTmp != "") {
                    $juzgadosTmp = new JuzgadosDTO();
                    $juzgadosTmp->setCveDistrito($juzgadoTmp[0]->getCveDistrito());
                    $juzgadosTmp->setActivo("S");
                    $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp);
                    if ($juzgadosTmp != "") {
                        foreach ($juzgadosTmp as $juzgado) {
                            $idJuzgados[] = $juzgado->getCveJuzgado();
                        }
                        $cadenaJuzgados = implode(",", $idJuzgados);
                        $order = " AND cveJuzgado IN(" . $cadenaJuzgados . ")";
                    }
                }
            }
        }

        $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
        $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, "", $this->proveedor);
        if ($gruposOrdenesJuzgadosDto != "") {
            foreach ($gruposOrdenesJuzgadosDto as $grupoJuzgado) {
                $juzgadoresJuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresJuzgadosDao = new JuzgadoresjuzgadosDAO();
                $juzgadoresJuzgadosDto->setCveJuzgado($grupoJuzgado->getCveJuzgado());
                $juzgadoresJuzgadosDto->setActivo("S");
                $juzgadoresJuzgadosDto = $juzgadoresJuzgadosDao->selectJuzgadoresjuzgados($juzgadoresJuzgadosDto, $order, $this->proveedor);
                if ($juzgadoresJuzgadosDto != "") {
                    foreach ($juzgadoresJuzgadosDto as $juzgadorJuzgado) {
                        $idJuzgador[] = $juzgadorJuzgado->getIdJuzgador();
                    }
                }
            }
        }
        if (count($idJuzgador) > 0) {
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDao = new JuzgadoresDAO();
            $juzgadoresDto->setActivo("S");
            $cadenaJuzgadores = implode(",", $idJuzgador);
            $orden = " AND idJuzgador IN(" . $cadenaJuzgadores . ")";
            $orden .= " ORDER BY nombre";
            $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, $orden, $this->proveedor);
            if ($juzgadoresDto != "") {
                foreach ($juzgadoresDto as $juzgador) {
                    $result[] = array(
                        "idJuzgador" => $juzgador->getIdJuzgador(),
                        "nombre" => utf8_encode($juzgador->getNombre()),
                        "paterno" => utf8_encode($juzgador->getPaterno()),
                        "materno" => utf8_encode($juzgador->getMaterno())
                    );
                }
            }
        }
        return $result;
    }

    public function programacionOrdenesManual($ProgramacionordenesDto, $proveedor = null) {
        //var_dump($ProgramacionordenesDto);
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
        $logger = new Logger("/../../logs/", "ProgramacionOrdenes");
        $logger->w_onError("**********COMIENZA EL PROCESO MANUAL DE PROGRAMACION DE ORDENES**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE REGISTRO");
        $fechaInicial = $ProgramacionordenesDto->getFechaInicio();
        $fechaInicialAux = explode(" ", $fechaInicial);
        $fechaInicioAux = $fechaInicialAux[0];
        $horaInicioAux = $fechaInicialAux[1];
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $ProgramacionordenesDto->getFechaFinal();
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

        $logger->w_onError("**********CONSULTAR LOS JUZGADOS QUE PERTENEZCAN AL GRUPO DEL JUZGADO: " . $ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposordenesjuzgadosDTO();
        $gruposJuzgadosDao = new GruposordenesjuzgadosDAO();
        $gruposJuzgadosDto->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposordenesjuzgados($gruposJuzgadosDto, '', $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            $gruposOrdenesDto = new GruposordenesDTO();
            $gruposOrdenesDao = new GruposordenesDAO();
            $gruposOrdenesDto->setCveGrupoOrden($gruposJuzgadosDto[0]->getCveGrupoOrden());
            $gruposOrdenesDto->setActivo('S');
            $gruposOrdenesDto = $gruposOrdenesDao->selectGruposordenes($gruposOrdenesDto, "", $this->proveedor);
            if ($gruposOrdenesDto != "") {
                $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                $gruposOrdenesJuzgadosTmp->setCveGrupoOrden($gruposOrdenesDto[0]->getCveGrupoOrden());
                $gruposOrdenesJuzgadosTmp->setActivo('S');
                $gruposOrdenesJuzgadosTmp = $gruposJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, '', $this->proveedor);
                if ($gruposOrdenesJuzgadosTmp != "") {
                    foreach ($gruposOrdenesJuzgadosTmp as $grupoJuzgado) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoOrdenJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $arrJuzgados);
                }
            }
        }
        $logger->w_onError("**********GRUPOS JUZGADOS A VALIDAR: " . $cadenaJuzgados);

        if ($horaInicioAux != "" && $horaFinAux != "") {
            $logger->w_onError("**********HORA INICIAL: " . $horaInicioAux);
            $logger->w_onError("**********HORA FINAL: " . $horaFinAux);
            $horaInicioTmp = explode(":", $horaInicioAux);
            $horaFinTmp = explode(":", $horaFinAux);
            while ($fechaInicioAux <= $fechaFinAux) {
                $fechaTmp = explode("-", $fechaInicioAux);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                $dias[] = $fechaInicioAux;
                $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicioAux));
                $fechaInicioAux = date('Y-m-d', $fechaInicialTmp);
            }
            if (count($dias) > 0) {
                for ($n = 0; $n < count($dias); $n++) {
                    if (((int) $horaInicioTmp[0] > (int) $horaFinTmp[0]) ||
                            ((int) $horaInicioTmp[0] === (int) $horaFinTmp[0] && (int) $horaInicioTmp[1] > (int) $horaFinTmp[1] )) {
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

                    $programacion = new ProgramacionordenesDTO();
                    //$programacion->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
                    //$programacion->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                    $programacion->setActivo("S");
                    //$programacion->setFechaInicio($diaInicio);
                    //$programacion->setFechaFinal($diaFin);
                    $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                               AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
                               AND cveGrupoOrdenJuzgado IN(" . $cadenaJuzgados . ")";
                    /* $order = " AND (CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                      AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal)
                      OR
                      (CAST('" . $diaFin . "' AS DATETIME) >= fechaInicio
                      AND CAST('" . $diaFin . "' AS DATETIME) <= fechaFinal)"; */

                    /* $order = " AND FechaInicio LIKE'%" . $dias[$n] . "%'";
                      $order .= " AND FechaFinal LIKE'%" . $dias[$n] . "%'";
                      $order .= " AND CAST('" . $horaInicioAux . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                      AND CAST('" . $horaInicioAux . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)"; */
                    //$order .= " AND SUBSTRING(fechaInicio,11) like'%" . $horaInicioAux . "%'";
                    //$order .= " AND SUBSTRING(fechaFinal,11) like'%" . $horaFinAux . "%'";
                    $logger->w_onError("**********VERIFICAR SI EXISTE EL REGISTRO EN LA BASE DE DATOS");
                    $programacionOrdensDao = new ProgramacionordenesDAO();
                    $dto = new ProgramacionordenesDTO();
                    $dto = $programacionOrdensDao->selectProgramacionordenes($programacion, $order, $this->proveedor);
                    //print_r($dto);
                    //if ($dto == "") {
                    $logger->w_onError("**********EL REGISTRO NO EXISTE, SE AGREGARA");
                    //$fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                    //$fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                    $programacion = new ProgramacionordenesDTO();
                    $programacion->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
                    $programacion->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                    $programacion->setFechaInicio($diaInicio);
                    $programacion->setFechaFinal($diaFin);
                    $programacion->setActivo("S");
                    $programacion = $programacionOrdensDao->insertProgramacionordenes($programacion, $this->proveedor);
                    //$programacion = "";
                    if ($programacion != "") {
                        $error = false;
                        $idProgramacionesInsert[] = $programacion[0]->getIdProgramacionOrden();
                        $logger->w_onError("**********SE AGREGA EL REGISTRO CON ID DE PROGRAMACION ORDEN: " . $programacion[0]->getIdProgramacionOrden());
                    } else {
                        $error = true;
                        $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO");
                        $logger->w_onError("**********ID JUZGADOR: " . $ProgramacionordenesDto->getIdJuzgador());
                        $logger->w_onError("**********CVE GRUPO ORDEN JUZGADO: " . $ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                        $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                        $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                        $mensajeError = "OCURRIO UN ERROR AL INSERTAR EL REGISTRO";
                    }
                    if ($error) {
                        break;
                        $logger->w_onError("**********OCURRI� UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                    }
                    //} else {
//                        $logger->w_onError("**********EXISTEN REGISTROS DE PROGRAMACION ORDEN PARA EL DIA: " . $dias[$n]);
//                        //$logger->w_onError("**********VERIFICAR EL HORARIO EXISTENTE PARA EL DIA: " . $dias[$n]);
//                        $error = true;
//                        $hInicio = explode(" ",$dto[0]->getFechaInicio());
//                        $hFin = explode(" ",$dto[0]->getFechaFinal());
//                        $mensajeError = "Ya existe un registro de orden de aprehension el dia: " . $dias[$n] . " , para el grupo solicitado entre el horario: " . $hInicio[1] . " y " . $hFin[1];

                    /* $inicioTmp = $dto[0]->getFechaInicio();
                      $finTmp = $dto[0]->getFechaInicio();

                      $fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                      $fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                      $programacion = new ProgramacionordenesDTO();
                      $programacion->setIdProgramacionOrden($dto[0]->getIdProgramacionOrden());
                      $programacion->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
                      $programacion->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                      $programacion->setFechaInicio($fechaHoraInicio);
                      $programacion->setFechaFinal($fechaHoraFin);
                      $programacion->setActivo("S");
                      $logger->w_onError("**********ID JUZGADOR: " . $ProgramacionordenesDto->getIdJuzgador());
                      $logger->w_onError("**********CVE GRUPO ORDEN JUZGADO: " . $ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
                      $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                      $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                      $logger->w_onError("**********ID PROGRAMACION ORDEN: " . $dto[0]->getIdProgramacionOrden());

                      $programacion = $programacionOrdensDao->updateProgramacionordenes($programacion, $this->proveedor);
                      if($programacion != ""){
                      $error = false;
                      $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                      $idProgramacionesUpdate[] = $programacion[0]->getIdProgramacionOrden();
                      } else {
                      $error = true;
                      $logger->w_onError("**********ERROR AL ACTUALIZAR EL REGISTRO");
                      $mensajeError = "NO SE PUDO ACTUALIZAR EL REGISTRO";
                      } */

//                        if($error){
//                            break;
//                            $logger->w_onError("**********OCURRI� UN ERROR AL ACTUALIZAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
//                        }
                    //}
                }
            } else {
                $error = true;
                $logger->w_onError("**********SE DETERMINA QUE NO SE PUEDE REALIZAR LA PROGRAMACI�N EN LOS D�AS SELECCIONADOS");
                $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS EN LAS FECHAS SELECCIONADAS";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECIONADAS");
            $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS";
        }

        if ($proveedor == null) {
            if (!$error) {

                if (count($idProgramacionesInsert) > 0) {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",", $idProgramacionesInsert);
                    $cveAccion = 342;
                    $descripcion = "INSERT tabla tblprogramacionordenes registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosDAO();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                } else if (count($idProgramacionesUpdate) > 0) {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",", $idProgramacionesUpdate);
                    $cveAccion = 343;
                    $descripcion = "UPDATE tabla tblprogramacionordenes registros: " . $registrosInsert;
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

    public function modificarProgramacionOrdenes($ProgramacionordenesDto, $proveedor = null) {
        //var_dump($programacionOrdenesDto);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $programacionOrdenTmp = new ProgramacionordenesDTO();
        $programacionOrdenDao = new ProgramacionordenesDAO();
        $error = false;
        $msg = array();
        $result = array();
        $listaResult = array();
        $fechaInicio = explode(" ", $ProgramacionordenesDto->getFechaInicio());
        $fechaFin = explode(" ", $ProgramacionordenesDto->getFechaFinal());
        $horaInicioTmp = explode(":", $fechaInicio[1]);
        $horaFinTmp = explode(":", $fechaFin[1]);

        if (((int) $horaInicioTmp[0] > (int) $horaFinTmp[0]) ||
                ((int) $horaInicioTmp[0] === (int) $horaFinTmp[0] && (int) $horaInicioTmp[1] > (int) $horaFinTmp[1] )) {
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
        if (!$error) {
            $diaInicio .= " " . $fechaInicio[1];
            $diaFin .= " " . $fechaFin[1];

            $programacionOrdenTmp->setIdProgramacionOrden($ProgramacionordenesDto->getIdProgramacionOrden());
//            $programacionOrdenTmp->setCveGrupoOrdenJuzgado($ProgramacionordenesDto->getCveGrupoOrdenJuzgado());
            $programacionOrdenTmp->setActivo("S");
            //$programacionOrdenTmp->setIdJuzgador($ProgramacionordenesDto->getIdJuzgador());
            //$programacionOrdenTmp->setFechaInicio($diaInicio);
            //$programacionOrdenTmp->setFechaFinal($diaFin);
            /* $order = " AND FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
              $order .= " AND FechaFinal LIKE'%" . $fechaFin[0] . "%'";
              $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
              AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";
              $order .= " AND idJuzgador<>'" . $ProgramacionordenesDto->getIdJuzgador() . "'"; */
//            $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
//                       AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
//                       AND idJuzgador<>'" . $ProgramacionordenesDto->getIdJuzgador() . "'";
            $order = "";

            $programacionOrdenTmp = $programacionOrdenDao->selectProgramacionordenes($programacionOrdenTmp, $order, $this->proveedor);
            //if($programacionOrdenTmp == "") {
            $ProgramacionordenesDto->setFechaInicio($diaInicio);
            $ProgramacionordenesDto->setFechaFinal($diaFin);
            $ProgramacionordenesDto = $programacionOrdenDao->updateProgramacionordenes($ProgramacionordenesDto, $this->proveedor);
            if ($ProgramacionordenesDto != "") {
                /*
                 * Guardar en bitacora la accion realizada
                 */
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 343;
                $descripcion = "UPDATE tabla tblprogramacionordenes registro antes de modificar: " . json_encode($programacionOrdenTmp[0]->toString()) . ", registro modificado: " . json_encode($ProgramacionordenesDto[0]->toString());
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($descripcion);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosDAO();
                $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                if ($insertarBitacora != "") {
                    $error = false;
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al guardar en bitacora la modificacion del registro");
                }
                $msg[] = array("Registro actualizado correctamente");
                $listaResult = array(
                    "idProgramacionOrden" => $ProgramacionordenesDto[0]->getIdProgramacionOrden(),
                    "idJuzgador" => $ProgramacionordenesDto[0]->getIdJuzgador(),
                    "cveGrupoOrdenJuzgado" => $ProgramacionordenesDto[0]->getCveGrupoOrdenJuzgado(),
                    "fechaInicio" => $ProgramacionordenesDto[0]->getFechaInicio(),
                    "fechaFinal" => $ProgramacionordenesDto[0]->getFechaFinal()
                );
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al actualizar el registro");
            }
//            } else {
//                $horaInicioAux = explode(" ",$programacionOrdenTmp[0]->getFechaInicio());
//                $horaFinAux = explode(" ", $programacionOrdenTmp[0]->getFechaFinal());
//                $error = true;
//                $msg[] = array("No se puede actualizar el registro debido a que hay un horario activo entre: " . $horaInicioAux[1] . " y " . $horaFinAux[1] . " favor de verificar");
//            }
        }

        if (!$error) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                "totalCount" => 1,
                "text" => $msg,
                "data" => $listaResult
            );
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                "totalCount" => 0,
                "text" => $msg
            );
        }
        return json_encode($result);
    }

    public function bajaProgramacionOrdenesManual($programacionOrdensDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionOrdenes");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO DE PROGRAMACION ORDENES**********");
        $idProgramacionOrdenes = array();
        $dias = array();
        $error = true;

        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
        $fechaInicial = $programacionOrdensDto->getFechaInicio();
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $programacionOrdensDto->getFechaFinal();
        $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);

        while ($fechaInicial <= $fechaFinal) {
            $dias[] = $fechaInicial;
            $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicial));
            $fechaInicial = date('Y-m-d', $fechaInicialTmp);
        }
        //print_r($dias);
        $programacionOrdenDto = new ProgramacionordenesDTO();
        $programacionOrdenDto->setCveGrupoOrdenJuzgado($programacionOrdensDto->getCveGrupoOrdenJuzgado());
        $programacionOrdenDto->setIdJuzgador($programacionOrdensDto->getIdJuzgador());
        $programacionOrdenDto->setActivo("S");
        $programacionOrdensDao = new ProgramacionordenesDAO();
        $programacionOrdenDto = $programacionOrdensDao->selectProgramacionordenes($programacionOrdenDto, ' ORDER BY fechaInicio ', $this->proveedor);
        $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION ORDENES");
        $logger->w_onError("**********CVE GRUPO ORDEN JUZGADO: " . $programacionOrdensDto->getCveGrupoOrdenJuzgado());
        $logger->w_onError("**********ID JUZGADOR: " . $programacionOrdensDto->getIdJuzgador());

        if ($programacionOrdenDto != "") {
            $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
            for ($n = 0; $n < count($programacionOrdenDto); $n++) {
                $dia = $programacionOrdenDto[$n]->getFechaInicio();
                //echo $dia . "<br>";
                $fechaInicio = explode(" ", $dia);
                $fechaTmp = $fechaInicio[0];
                //echo $fechaTmp . "<br>";
                if (in_array($fechaTmp, $dias)) {
                    $programacionOrdensTmp = new ProgramacionordenesDTO();
                    $programacionOrdensTmp->setIdProgramacionOrden($programacionOrdenDto[$n]->getIdProgramacionOrden());
                    $programacionOrdensTmp->setActivo("N");
                    $programacionOrdensTmp = $programacionOrdensDao->updateProgramacionordenes($programacionOrdensTmp, $this->proveedor);
                    if ($programacionOrdensTmp != "") {
                        $error = false;
                        $idProgramacionOrdenes[] = $programacionOrdensTmp[0]->getIdProgramacionOrden();
                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION ORDEN: " . $programacionOrdensTmp[0]->getIdProgramacionOrden());
                    } else {
                        $error = true;
                        $logger->w_onError("**********ERROR AL BORRAR LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION ORDEN: " . $programacionOrdenDto[$n]->getIdProgramacionOrden());
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
            $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION ORDENES, TERMINA EL PROCESO");
            $mensajeError = "NO HAY DATOS A ELIMINAR";
        }
        $fecha = date("Y-m-d H:i:s");
        $cveAccion = 344;
        $programacionOrdenes = implode(",", $idProgramacionOrdenes);
        $descripcion = "borrado logico en tblprogramacionordenes idProgramacionOrdenes: " . $programacionOrdenes;
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
        if ($insertarBitacora != "") {
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

    public function eliminarProgramacionOrdenes($programacionordenesDto, $proveedor = null) {
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
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $programacionordenesDao = new ProgramacionordenesDAO();
        $programacionordenesDto->setActivo("N");
        $programacionordenesDto->setFechaActualizacion($fechaActual);
        $programacionordenesDto = $programacionordenesDao->updateProgramacionordenes($programacionordenesDto, $this->proveedor);
        if ($programacionordenesDto != "") {
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccion = 344;
            $descripcion = "Borrado logico tabla tblprogramacionordenes idProgramacionOrden: " . $programacionordenesDto[0]->getIdProgramacionOrden();
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $controllerBitacora = new BitacoramovimientosDAO();
            $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);

            $listaResult = array(
                "idProgramacionOrden" => $programacionordenesDto[0]->getIdProgramacionOrden(),
                "idJuzgador" => $programacionordenesDto[0]->getIdJuzgador(),
                "cveGrupoOrdenJuzgado" => $programacionordenesDto[0]->getCveGrupoOrdenJuzgado(),
                "fechaInicio" => $programacionordenesDto[0]->getFechaInicio(),
                "fechaFinal" => $programacionordenesDto[0]->getFechaFinal()
            );
            $result = array(
                "estatus" => "ok",
                "totalCount" => 1,
                "text" => "Registro eliminado correctamente",
                "data" => $listaResult
            );
        } else {
            $result = array(
                "estatus" => "error",
                "totalCount" => 0,
                "text" => "Ocurrio un error al eliminar el registro"
            );
        }
        return json_encode($result);
    }

    public function juezOrden($juzgadoDto, $programacionOrdenesDto, $proveedor = null) {
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
        $idJuzgadorOrden = 0;
        $ordenes = array();
        $idJuzgadores = array();
        $fecha = $programacionOrdenesDto->getFechaInicio();
        $fechaInicio = explode(" ", $programacionOrdenesDto->getFechaInicio());
        $fechaInicioJuzgadorOrden = $fechaInicio[0] . " 08:30:00";
        $fechaFinJuzgadorOrden = $fechaInicio[0] . " 08:29:59";

        $horasFecha = explode(":", $fechaInicio[1]);
        $ajustaDiaInicio = false;
        if ((int) $horasFecha[0] < 8) {
            $ajustaDiaInicio = true;
        } else {
            if ((int) $horasFecha[0] == 8) {
                if ((int) $horasFecha[1] < 30) {
                    $ajustaDiaInicio = true;
                }
            }
        }
        if ($ajustaDiaInicio) {
            $nuevafecha = new DateTime($fechaInicio[0]);
            $nuevafecha->modify('-1 day');
            $fechaInicioJuzgadorOrden = $nuevafecha->format('Y-m-d') . " 08:30:00";
        }

        $ajustaDiaFinal = false;
        if ((int) $horasFecha[0] >= 9) {
            $ajustaDiaFinal = true;
        } else {
            if ((int) $horasFecha[0] == 8) {
                if ((int) $horasFecha[1] > 30) {
                    $ajustaDiaFinal = true;
                }
            }
        }

        if ($ajustaDiaFinal) {
            $nuevafecha = new DateTime($fechaInicio[0]);
            $nuevafecha->modify('+1 day');
            $fechaFinJuzgadorOrden = $nuevafecha->format('Y-m-d') . " 08:29:59";
        }


        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposordenesjuzgadosDTO();
        $gruposJuzgadosDao = new GruposordenesjuzgadosDAO();
        $gruposJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposordenesjuzgados($gruposJuzgadosDto, ' FOR UPDATE ', $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            $gruposOrdenesDto = new GruposordenesDTO();
            $gruposOrdenesDao = new GruposordenesDAO();
            $gruposOrdenesDto->setCveGrupoOrden($gruposJuzgadosDto[0]->getCveGrupoOrden());
            $gruposOrdenesDto->setActivo('S');
            $gruposOrdenesDto = $gruposOrdenesDao->selectGruposordenes($gruposOrdenesDto, " FOR UPDATE ", $this->proveedor);
            if ($gruposOrdenesDto != "") {
                $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                $gruposOrdenesJuzgadosTmp->setCveGrupoOrden($gruposOrdenesDto[0]->getCveGrupoOrden());
                $gruposOrdenesJuzgadosTmp->setActivo('S');
                $gruposOrdenesJuzgadosTmp = $gruposJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, ' FOR UPDATE ', $this->proveedor);
                if ($gruposOrdenesJuzgadosTmp != "") {
                    foreach ($gruposOrdenesJuzgadosTmp as $grupoJuzgado) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoOrdenJuzgado();
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
        $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
        $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
        $gruposOrdenesJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposOrdenesJuzgadosDto->setActivo("S");
        $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, " FOR UPDATE ", $this->proveedor);
        if ($gruposOrdenesJuzgadosDto != "") {
            foreach ($gruposOrdenesJuzgadosDto as $grupoJuzgado) {
                /*
                 * Consultar en la tabla tblprogramacionordenes si existe un registro 
                 * entre la fecha y hora enviadas como par�metro para saber que
                 * juez est� disponible para realizar el cateo
                 */
                $programacionOrdenesDto = new ProgramacionordenesDTO();
                $programacionOrdenesDao = new ProgramacionordenesDAO();
                //$programacionOrdenesDto->setCveGrupoOrdenJuzgado($grupoJuzgado->getCveGrupoOrdenJuzgado());
                $programacionOrdenesDto->setActivo("S");
                /* $order = " AND (FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
                  $order .= " OR FechaFinal LIKE'%" . $fechaInicio[0] . "%')";
                  $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                  AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)"; */
                $order = " AND CAST('" . $fecha . "' AS DATETIME) >= fechaInicio
                           AND CAST('" . $fecha . "' AS DATETIME) <= fechaFinal
                           AND cveGrupoOrdenJuzgado IN (" . $cadenaJuzgados . ") FOR UPDATE ";
                $programacionOrdenesDto = $programacionOrdenesDao->selectProgramacionordenes($programacionOrdenesDto, $order, $this->proveedor);
                if ($programacionOrdenesDto != "") {
                    /*
                     * Se encontraron resultados, verificar si existe m�s de un juzgador disponible
                     * en la fecha y hora enviadas como par�metro, en caso de haber m�s de un juzgador
                     * revisar cu�ntos ordenes tiene asignados, retornar el id del juzgador que tenga
                     * menos ordenes
                     */
                    $idJuez = array();
                    $cadenaJuez = "";
                    if (count($programacionOrdenesDto) > 1) {
                        foreach ( $programacionOrdenesDto as $prog ) {
                            $idJuez[] = $prog->getIdJuzgador();
                        }
                        $cadenaJuez = implode(",", $idJuez);
                        $juezOrdenDto = new JuzgadoresordenesDTO();
                        $juzgadoresOrdenesDao = new JuzgadoresordenesDAO();
                        $juezOrdenDto->setActivo('S');
                        $ordenTmp = " AND fechaRegistro >= '" . $fechaInicioJuzgadorOrden . "'
                                      AND fechaRegistro <= '" . $fechaFinJuzgadorOrden . "' 
                                      AND idJuzgador IN(" . $cadenaJuez . ") FOR UPDATE";
                        $juezOrdenDto = $juzgadoresOrdenesDao->selectJuzgadoresordenes($juezOrdenDto, $ordenTmp, $this->proveedor);
                        if ( $juezOrdenDto != "" ) {
                            foreach ($programacionOrdenesDto as $programacionJuzgador) {
                                $juzgadoresOrdenesDto = new JuzgadoresordenesDTO();
                                $juzgadoresOrdenesDao = new JuzgadoresordenesDAO();
                                $juzgadoresOrdenesDto->setActivo("S");
                                $juzgadoresOrdenesDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgadorOrden . "'
                                           AND fechaRegistro <= '" . $fechaFinJuzgadorOrden . "' ORDER BY idJuzgadorOrden DESC FOR UPDATE ";
                                $juzgadoresOrdenesDto = $juzgadoresOrdenesDao->selectJuzgadoresordenes($juzgadoresOrdenesDto, $orden, $this->proveedor);
                                if ($juzgadoresOrdenesDto != "") {
                                    $ordenes[] = array(
                                        "ordenes" => count($juzgadoresOrdenesDto),
                                        "idJuzgadorOrden" => $juzgadoresOrdenesDto[0]->getIdJuzgadorOrden(),
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                    );
                                } else {
                                    $ordenes[] = array(
                                        "ordenes" => 0,
                                        "idJuzgadorOrden" => 0,
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                    );
                                }
                            }
                        } else {
                            foreach ($programacionOrdenesDto as $programacionJuzgador) {
                                $tmpFecha = explode(" ", $programacionJuzgador->getFechaInicio());
                                $tmpProgramacion = new ProgramacionordenesDTO();
                                $tmpProgramacion->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $tmpProgramacion->setActivo('S');
                                $tmpOrden = "AND CAST(fechaInicio AS DATE) < CAST('" . $tmpFecha[0] . "' AS DATE) ORDER BY fechaInicio DESC LIMIT 1 FOR UPDATE ";
                                $tmpProgramacion = $programacionOrdenesDao->selectProgramacionordenes($tmpProgramacion, $tmpOrden, $this->proveedor);
                                if ( $tmpProgramacion != "" ) {
                                    $fechaInicioJuzgadorOrden = $tmpProgramacion[0]->getFechaInicio();
                                    $fechaFinJuzgadorOrden = $tmpProgramacion[0]->getFechaFinal();
                                }

                                $juzgadoresTmpOrdenesDto = new JuzgadoresordenesDTO();
                                $juzgadoresOrdenesDao = new JuzgadoresordenesDAO();
                                $juzgadoresTmpOrdenesDto->setActivo("S");
                                $juzgadoresTmpOrdenesDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgadorOrden . "'
                                           AND fechaRegistro <= '" . $fechaFinJuzgadorOrden . "' ORDER BY idJuzgadorOrden DESC FOR UPDATE ";
                                $juzgadoresTmpOrdenesDto = $juzgadoresOrdenesDao->selectJuzgadoresordenes($juzgadoresTmpOrdenesDto, $orden, $this->proveedor);
                                if ($juzgadoresTmpOrdenesDto != "") {
                                    $ordenes[] = array(
                                        "ordenes" => count($juzgadoresTmpOrdenesDto),
                                        "idJuzgadorOrden" => $juzgadoresTmpOrdenesDto[0]->getIdJuzgadorOrden(),
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                    );
                                } else {
                                    $ordenes[] = array(
                                        "ordenes" => 0,
                                        "idJuzgadorOrden" => 0,
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador()
                                    );
                                }
                            }
                        }
                        
                        /*
                         * Ordenar el arreglo que contiene el numero de ordenes
                         * para saber cual juzgador tiene menos ordenes
                         */
                        array_multisort($ordenes);
//                        echo "<pre>";
//                        print_r($ordenes);
//                        echo "</pre>";
                        /*
                         * Seleccionar el id del juzgador con menos ordenes
                         */
                        $idJuzgadorOrden = $ordenes[0]['idJuzgador'];
                        //echo "idJuzgador: " . $idJuzgadorOrden;
                    } else {
                        /*
                         * Solo existe un juzgador en el horario asigando, regresar el id encontrado
                         */
                        $idJuzgadorOrden = $programacionOrdenesDto[0]->getIdJuzgador();
                    }
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($idJuzgadorOrden);
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, " FOR UPDATE ", $this->proveedor);
                    if ($juzgadoresDto != "") {
                        $idJuzgador = $juzgadoresDto[0]->getIdJuzgador();
                        $nombreJuzgador = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                        /*
                         * Obtener los datos del rol del juez
                         */
                        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
                        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
                        $programacionJuzgadoresDto->setIdJuzgador($juzgadoresDto[0]->getIdJuzgador());
                        $orden = " AND fechaInicio LIKE'%" . $fechaInicio[0] . "%' 
                                   AND fechaFinal LIKE'%" . $fechaInicio[0] . "%' FOR UPDATE";
                        $programacionJuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionJuzgadoresDto, $orden, $this->proveedor);
                        if ($programacionJuzgadoresDto != "") {
                            $cveRolJuzgador = $programacionJuzgadoresDto[0]->getCveRolJuzgador();
                            $rolesJuzgadoresDto = new RolesjuzgadoresDTO();
                            $rolesJuzgadoresDao = new RolesjuzgadoresDAO();
                            $rolesJuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);
                            $rolesJuzgadoresDto = $rolesJuzgadoresDao->selectRolesjuzgadores($rolesJuzgadoresDto, " FOR UPDATE ", $this->proveedor);
                            if ($rolesJuzgadoresDto != "") {
                                $desRolJuzgador = utf8_encode($rolesJuzgadoresDto[0]->getDesRolJuzgador());
                            } else {
                                $desRolJuzgador = "";
                            }
                        } else {
                            $cveRolJuzgador = 0;
                            $desRolJuzgador = "";
                        }
                        $result = array(
                            "idJuzgador" => $idJuzgador,
                            "nombreJuzgador" => $nombreJuzgador,
                            "cveRolJuzgador" => $cveRolJuzgador,
                            "desRolJuzgador" => $desRolJuzgador
                        );
                    } else {
                        $error = true;
                        $msg = " Ocurrri� un error al consultar los datos del juez";
                    }
                } else {
                    $error = true;
                    $msg = " No se encontraron jueces programados para atender ordenes de aprehension para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado()) . " en el d�a " . $fechaInicio[0] . " a las " . $fechaInicio[1];
                }
            }
        } else {
            $error = true;
            $msg = " No se encontraron datos de programaci�n de ordenes de aprehension para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado());
        }
        if (!$error) {
            $datos = array(
                "estatus" => "ok",
                "totalCount" => 1,
                "text" => "Resultados de la consulta",
                "data" => $result
            );
        } else {
            $datos = array(
                "estatus" => "error",
                "totalCount" => 0,
                "text" => $msg
            );
        }
        return $datos;
    }

    public function simuladorOrdenes($juzgadosDto, $programacionordenesDto, $proveedor = null) {
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
        $diaInicio = $programacionordenesDto->getFechaInicio();
        $diaFin = $programacionordenesDto->getFechaFinal();
        /*
         * Ciclo para definir los d�as en que se mostrar�n los datos para el simulador
         */
        while ($diaInicio <= $diaFin) {
            $dias[] = $diaInicio;
            $inicio = $diaInicio;
            $diasTmp = strtotime('+1 day', strtotime($inicio));
            $diaInicio = date('Y-m-d', $diasTmp);
        }
        for ($n = 0; $n < count($dias); $n++) {
            /*
             * Para cada uno de los d�as verificar que juez puede atender alguna orden de aprehension
             */
            $horarioMatutinoCateo = $dias[$n] . " 07:00:00";
            $programacionOrdenesTmp = new ProgramacionordenesDTO();
            $programacionOrdenesTmp->setFechaInicio($horarioMatutinoCateo);
            $datos = $this->juezOrden($juzgadosDto, $programacionOrdenesTmp, $this->proveedor);
            if ($datos['estatus'] == "ok") {
                $juezMatutino[] = $datos['data']['nombreJuzgador'] . " - " . $datos['data']['desRolJuzgador'];
            } else {
                $juezMatutino[] = "No hay juez disponible en este horario";
            }

            $horarioMatutinoCateoFin = $dias[$n] . " 16:59:59";
            $programacionOrdenesTmp = new ProgramacionordenesDTO();
            $programacionOrdenesTmp->setFechaInicio($horarioMatutinoCateoFin);
            $datosVespertino = $this->juezOrden($juzgadosDto, $programacionOrdenesTmp, $this->proveedor);
            if ($datosVespertino['estatus'] == "ok") {
                $juezMatutinoFin[] = $datosVespertino['data']['nombreJuzgador'] . " - " . $datosVespertino['data']['desRolJuzgador'];
            } else {
                $juezMatutinoFin[] = "No hay juez disponible en este horario";
            }

            $horarioVespetinoCateo = $dias[$n] . " 17:00:00";
            $programacionOrdenesTmp = new ProgramacionordenesDTO();
            $programacionOrdenesTmp->setFechaInicio($horarioVespetinoCateo);
            $datosVespertinoCateo = $this->juezOrden($juzgadosDto, $programacionOrdenesTmp, $this->proveedor);
            if ($datosVespertinoCateo['estatus'] == "ok") {
                $juezVespertinoInicio[] = $datosVespertinoCateo['data']['nombreJuzgador'] . " - " . $datosVespertinoCateo['data']['desRolJuzgador'];
            } else {
                $juezVespertinoInicio[] = "No hay juez disponible en este horario";
            }

            $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
            $dia = date('Y-m-d', $diasTmp);

            $horarioVespetinoCateoFin = $dia . " 06:59:59";
            $programacionOrdenesTmp = new ProgramacionordenesDTO();
            $programacionOrdenesTmp->setFechaInicio($horarioVespetinoCateoFin);
            $datosVespertinoCateoFin = $this->juezOrden($juzgadosDto, $programacionOrdenesTmp, $this->proveedor);
            if ($datosVespertinoCateoFin['estatus'] == "ok") {
                $juezVespertinoFin[] = $datosVespertinoCateoFin['data']['nombreJuzgador'] . " - " . $datosVespertinoCateoFin['data']['desRolJuzgador'];
            } else {
                $juezVespertinoFin[] = "No hay juez disponible en este horario";
            }
        }

        for ($c = 0; $c < count($dias); $c++) {
            $fechaTmp = explode("-", $dias[$c]);
            $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
            $result[] = array(
                "fecha" => $dias[$c],
                "dia" => $diasSemana[$diaSemana],
                "juzgadorMatutinoInicio" => $juezMatutino[$c],
                "juezMatutinoFin" => $juezMatutinoFin[$c],
                "juezVespertinoInicio" => $juezVespertinoInicio[$c],
                "juezVespertinoFin" => $juezVespertinoFin[$c]
            );
        }
        return $result;
    }

    public function eliminarSeleccionados($programacionordenesDto, $param, $proveedor = null) {
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
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }

        $programacionOrdenesDao = new ProgramacionordenesDAO();

        $datos = json_decode($param['idProgramacionesOrdenes']);
        //print_r($datos);
        if ($datos != "") {
            for ($n = 0; $n < count($datos); $n++) {
                if ((int) $datos[$n]->idProgramacionOrden != 0) {
                    $programacionOrdenesDto = new ProgramacionordenesDTO();
                    $programacionOrdenesDto->setIdProgramacionOrden($datos[$n]->idProgramacionOrden);
                    $programacionOrdenesDto->setActivo("N");
                    $programacionOrdenesDto->setFechaActualizacion($fechaActual);
                    $programacionOrdenesDto = $programacionOrdenesDao->updateProgramacionordenes($programacionOrdenesDto, $this->proveedor);
                    if ($programacionOrdenesDto != "") {
                        $error = false;
                        $idRegistrosUpdate[] = $programacionOrdenesDto[0]->getIdProgramacionOrden();
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al eliminar el registro!'));
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurri� un error al recibir los datos a eliminar!'));
                }
                if ($error) {
                    break;
                }
            }
        } else {
            $error = true;
            $msg[] = array('No se recibieron datos a eliminar');
        }

        if (!$error) {
            $cadenaIdRegistros = implode(',', $idRegistrosUpdate);
            $cveAccion = 350;
            $descripcion = "borrado logico en tblprogramacionordenes idRegistros: " . $cadenaIdRegistros;
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $daoBitacora = new BitacoramovimientosDAO();
            $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if ($insertarBitacora == "") {
                $error = true;
                $msg[] = array(utf8_encode('Ocurri� un error al registrar la acci�n realizada!'));
            } else {
                $error = false;
            }
        }

        if (!$error) {
            $this->proveedor->execute('COMMIT');
            $result = [
                'estatus' => 'ok',
                'totalCount' => '1',
                'text' => 'Registros eliminados correctamente'
            ];
        } else {
            $this->proveedor->execute('ROLLBACK');
            $result = [
                'estatus' => 'error',
                'totalCount' => '0',
                'text' => $msg
            ];
        }
        return json_encode($result);
    }
    
}

// $juzgadosDto = new JuzgadosDTO();
//  $juzgadosDto->setCveJuzgado(10322);
//  $programacionOrdenesDto = new ProgramacionordenesDTO();
//  $programacionOrdenesDto->setFechaInicio("2016-06-27 08:59:59");
//  $pogramacionOrdenes = new ProgramacionordenesController();
//  $datos = $pogramacionOrdenes->juezOrden($juzgadosDto, $programacionOrdenesDto);
//  echo "<pre>";
//  print_r($datos);
//  echo "</pre>";

/* $juzgadosDto = new JuzgadosDTO();
  $juzgadosDto->setCveJuzgado(762);
  $programacionOrdenesDto = new ProgramacionordenesDTO();
  $programacionOrdenesDto->setFechaInicio("2016-02-05");
  $programacionOrdenesDto->setFechaFinal("2016-02-05");
  $pogramacionOrdenes = new ProgramacionordenesController();
  $datos = $pogramacionOrdenes->simuladorOrdenes($juzgadosDto, $programacionOrdenesDto);
  echo "<pre>";
  print_r($datos);
  echo "</pre>"; */
?>