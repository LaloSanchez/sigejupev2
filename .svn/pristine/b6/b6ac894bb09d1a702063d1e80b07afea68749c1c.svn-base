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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacioncateos/ProgramacioncateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
//Grupos juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposjuzgados/GruposjuzgadosDAO.Class.php");
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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");
//Grupos cateos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposcateos/GruposcateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposcateos/GruposcateosDAO.Class.php");
//bitacora
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class ProgramacioncateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto->setidProgramacionCateo(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getidProgramacionCateo()))));
        $ProgramacioncateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getidJuzgador()))));
        $ProgramacioncateosDto->setcveGrupoJuzgado(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getcveGrupoJuzgado()))));
        $ProgramacioncateosDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getfechaInicio()))));
        $ProgramacioncateosDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getfechaFinal()))));
        $ProgramacioncateosDto->setactivo(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getactivo()))));
        $ProgramacioncateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getfechaRegistro()))));
        $ProgramacioncateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ProgramacioncateosDto->getfechaActualizacion()))));
        return $ProgramacioncateosDto;
    }

    public function selectProgramacioncateos($ProgramacioncateosDto, $proveedor = null) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosDao = new ProgramacioncateosDAO();
        $ProgramacioncateosDto = $ProgramacioncateosDao->selectProgramacioncateos($ProgramacioncateosDto, $proveedor);
        return $ProgramacioncateosDto;
    }

    public function selectProgramacioncateosReporte($ProgramacioncateosDto, $cveUsuario, $mes, $anio, $tipo, $proveedor = null) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);

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
        $ProgramacioncateosDao = new ProgramacioncateosDAO();
        if ($juzgadores != "") {
            $ProgramacioncateosDto->setIdJuzgador($juzgadores[0]->getIdJuzgador());
        }
        $ProgramacioncateosDto = $ProgramacioncateosDao->selectProgramacioncateos($ProgramacioncateosDto, $orden, $proveedor);

        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if ($ProgramacioncateosDto != "") {
            foreach ($ProgramacioncateosDto as $Res) {
                $fechaAux = explode(" ", $Res->getFechaInicio());
                $fechaTmp = explode("-", $fechaAux[0]);
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                $Res->setFechaActualizacion($dias[$diaSemana]);
            }
        }
        return $ProgramacioncateosDto;
    }

    public function insertProgramacioncateos($ProgramacioncateosDto, $proveedor = null) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosDao = new ProgramacioncateosDAO();
        $ProgramacioncateosDto = $ProgramacioncateosDao->insertProgramacioncateos($ProgramacioncateosDto, $proveedor);
        return $ProgramacioncateosDto;
    }

    public function updateProgramacioncateos($ProgramacioncateosDto, $proveedor = null) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosDao = new ProgramacioncateosDAO();
        //$tmpDto = new ProgramacioncateosDTO();
        //$tmpDto = $ProgramacioncateosDao->selectProgramacioncateos($ProgramacioncateosDto,$proveedor);
        //if($tmpDto!=""){//$ProgramacioncateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacioncateosDto = $ProgramacioncateosDao->updateProgramacioncateos($ProgramacioncateosDto, $proveedor);
        return $ProgramacioncateosDto;
        //}
        //return "";
    }

    public function deleteProgramacioncateos($ProgramacioncateosDto, $proveedor = null) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosDao = new ProgramacioncateosDAO();
        $ProgramacioncateosDto = $ProgramacioncateosDao->deleteProgramacioncateos($ProgramacioncateosDto, $proveedor);
        return $ProgramacioncateosDto;
    }

    public function reporteProgramacionCateos($ProgramacioncateosDto, $GruposJuzgadosDto, $porDistrito = "N", $proveedor = null) {
        //var_dump($ProgramacioncateosDto);
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
        $gruposJuzgadosDto = new GruposjuzgadosDTO();
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        $gruposJuzgadosDto->setCveGrupoCateo($GruposJuzgadosDto->getCveGrupoCateo());
        if ($ProgramacioncateosDto->getCveGrupoJuzgado() != "") {
            $gruposJuzgadosDto->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
        }
        $gruposJuzgadosDto->setActivo("S");
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, $order, $this->proveedor);

        if ($gruposJuzgadosDto != "") {

            foreach ($gruposJuzgadosDto as $grupoJuzgado) {
//                $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
//                $juzgadoresjuzgadosDto->setCveJuzgado($grupoJuzgado->getCveJuzgado());
//                $juzgadoresjuzgadosDto->setActivo("S");
//                if ($ProgramacioncateosDto->getIdJuzgador() != "") {
//                    $juzgadoresjuzgadosDto->setIdJuzgador($ProgramacioncateosDto->getIdJuzgador());
//                }
//                $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
//                $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " ORDER BY idJuzgador ASC ", $this->proveedor);


                //if ($juzgadoresjuzgadosDto != "") {
                    //for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {

                        //if ($juzgadoresDto != "") {

                            $programacionCateosDto = new ProgramacioncateosDTO();
                            //$programacionCateosDto->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                            if ($ProgramacioncateosDto->getIdJuzgador() != "") {
                                $programacionCateosDto->setIdJuzgador($ProgramacioncateosDto->getIdJuzgador());
                            }
                            /* if ($ProgramacioncateosDto->getCveGrupoJuzgado() != "") {
                              $programacionCateosDto->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
                              } */
                            $programacionCateosDto->setCveGrupoJuzgado($grupoJuzgado->getCveGrupoJuzgado());
                            if ($ProgramacioncateosDto->getFechaInicio() != "" && $ProgramacioncateosDto->getFechaFinal() != "") {
                                $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $ProgramacioncateosDto->getFechaInicio() . "' 
                                           AND SUBSTRING(fechaFinal, 1, 10) <= '" . $ProgramacioncateosDto->getFechaFinal() . "' 
                                        ORDER BY fechaInicio, idJuzgador ";
                            } else {
                                $orden = " ORDER BY fechaInicio, idJuzgador";
                            }
                            $programacionCateosDto->setActivo("S");
                            $programacionCateosDao = new ProgramacioncateosDAO();

                            $programacionCateosDto = $programacionCateosDao->selectProgramacioncateos($programacionCateosDto, $orden, $this->proveedor);

                            if ($programacionCateosDto != "") {
                                //echo $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno() . "<br>";

                                foreach ($programacionCateosDto as $programacionCateo) {
                                    //echo "Horario: " . $programacionCateo->getFechaInicio() . " " . $programacionCateo->getFechaFinal() . "<br>";
//                                    $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
//                                    $rolesjuzgadoresDto->setCveRolJuzgador($programacionCateo->getCveRolJuzgador());
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
                                    $juzgadoresDto->setIdJuzgador($programacionCateo->getIdJuzgador());
                                    $juzgadoresDto->setActivo("S");
                                    $juzgadoresDao = new JuzgadoresDAO();
                                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                                    $juzgadoresDto = $juzgadoresDto[0];
                                    
                                    $fechaAux = explode(" ", $programacionCateo->getFechaInicio());
                                    $fechaTmp = explode("-", $fechaAux[0]);
                                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                    $datos[] = array(
                                        "FechaInicio" => $programacionCateo->getFechaInicio(),
                                        "idProgramacionCateo" => $programacionCateo->getIdProgramacionCateo(),
                                        "Nombre" => utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno()),
                                        "IdJuzgador" => $juzgadoresDto->getIdJuzgador(),
                                        "FechaFin" => $programacionCateo->getFechaFinal(),
                                        "cveGrupoJuzgado" => $programacionCateo->getCveGrupoJuzgado(),
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

    public function selectJuzgadoresCateos($gruposCateosDto, $juzgadosDto, $porDistrito = "N", $proveedor = null) {
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

        if ($porDistrito == "S") {
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
                        $orden = " AND cveJuzgado IN(" . $cadenaJuzgados . ")";
                    }
                }
            }
        }

        /*
         * Obtener el listado de juzgados que pertenecen al grupo seleccionado por el usuario
         */
        $gruposJuzgadosDto = new GruposjuzgadosDTO();
        $gruposJuzgadosDto->setActivo("S");
        $gruposJuzgadosDto->setCveGrupoCateo($gruposCateosDto->getCveGrupoCateo());
        if ($juzgadosDto->getCveJuzgado() != "") {
            $gruposJuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
        }
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, $orden, $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            foreach ($gruposJuzgadosDto as $grupoJuzgado) {
                $juzgadoresJuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresJuzgadosDao = new JuzgadoresjuzgadosDAO();
                $juzgadoresJuzgadosDto->setCveJuzgado($grupoJuzgado->getCveJuzgado());
                $juzgadoresJuzgadosDto->setActivo("S");
                $juzgadoresJuzgadosDto = $juzgadoresJuzgadosDao->selectJuzgadoresjuzgados($juzgadoresJuzgadosDto, "", $this->proveedor);
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

    public function programacionCateosManual($ProgramacioncateosDto, $proveedor = null) {
        //var_dump($ProgramacioncateosDto);
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
        $logger = new Logger("/../../logs/", "ProgramacionCateos");
        $logger->w_onError("**********COMIENZA EL PROCESO MANUAL DE PROGRAMACION DE CATEOS**********");
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
        $fechaInicial = $ProgramacioncateosDto->getFechaInicio();
        $fechaInicialAux = explode(" ", $fechaInicial);
        $fechaInicioAux = $fechaInicialAux[0];
        $horaInicioAux = $fechaInicialAux[1];
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $ProgramacioncateosDto->getFechaFinal();
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
        $logger->w_onError("**********CONSULTAR LOS JUZGADOS QUE PERTENEZCAN AL GRUPO DEL JUZGADO: " . $ProgramacioncateosDto->getCveGrupoJuzgado());
        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposjuzgadosDTO();
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        $gruposJuzgadosDto->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, '', $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            $gruposCateosDto = new GruposcateosDTO();
            $gruposCateosDao = new GruposcateosDAO();
            $gruposCateosDto->setCveGrupoCateo($gruposJuzgadosDto[0]->getCveGrupoCateo());
            $gruposCateosDto->setActivo('S');
            $gruposCateosDto = $gruposCateosDao->selectGruposcateos($gruposCateosDto, "", $this->proveedor);
            if ($gruposCateosDto != "") {
                $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                $gruposJuzgadosTmp->setCveGrupoCateo($gruposCateosDto[0]->getCveGrupoCateo());
                $gruposJuzgadosTmp->setActivo('S');
                $gruposJuzgadosTmp = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosTmp, '', $this->proveedor);
                if ($gruposJuzgadosTmp != "") {
                    foreach ($gruposJuzgadosTmp as $grupoJuzgado) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoJuzgado();
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

                    $logger->w_onError("**********FECHA INICIAL PROGRAMACION: " . $diaInicio);
                    $logger->w_onError("**********FECHA FINAL PROGRAMACION: " . $diaFin);

                    $programacion = new ProgramacioncateosDTO();
                    //$programacion->setIdJuzgador($ProgramacioncateosDto->getIdJuzgador());
                    //$programacion->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
                    $programacion->setActivo("S");
                    //$programacion->setFechaInicio($diaInicio);
                    //$programacion->setFechaFinal($diaFin);
                    /* $order = " AND fechaInicio LIKE '%" . $dias[$n] . "%'";
                      $order .= " AND (CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                      AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal)
                      OR
                      (CAST('" . $diaFin . "' AS DATETIME) >= fechaInicio
                      AND CAST('" . $diaFin . "' AS DATETIME) <= fechaFinal)"; */

                    /* $order = " AND FechaInicio LIKE'%" . $dias[$n] . "%'";
                      $order .= " AND FechaFinal LIKE'%" . $dias[$n] . "%'";
                      $order .= " AND CAST('" . $horaInicioAux . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                      AND CAST('" . $horaInicioAux . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)"; */
                    $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
                               AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
                               AND cveGrupoJuzgado IN (" . $cadenaJuzgados . ")";

                    $programacionCateosDao = new ProgramacioncateosDAO();
                    $dto = new ProgramacioncateosDTO();
                    $dto = $programacionCateosDao->selectProgramacioncateos($programacion, $order, $this->proveedor);
                    //print_r($dto);
                    //if ($dto == "") {
                    //$fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                    //$fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                    $programacion = new ProgramacioncateosDTO();
                    $programacion->setIdJuzgador($ProgramacioncateosDto->getIdJuzgador());
                    $programacion->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
                    $programacion->setFechaInicio($diaInicio);
                    $programacion->setFechaFinal($diaFin);
                    $programacion->setActivo("S");
                    $programacion = $programacionCateosDao->insertProgramacioncateos($programacion, $this->proveedor);
                    //$programacion = "";
                    if ($programacion != "") {
                        $error = false;
                        $idProgramacionesInsert[] = $programacion[0]->getIdProgramacionCateo();
                        $logger->w_onError("**********SE AGREGA EL REGISTRO CON ID DE PROGRAMACION CATEOS: " . $programacion[0]->getIdProgramacionCateo());
                    } else {
                        $error = true;
                        $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO");
                        $logger->w_onError("**********ID JUZGADOR: " . $ProgramacioncateosDto->getIdJuzgador());
                        $logger->w_onError("**********CVE GRUPO JUZGADO: " . $ProgramacioncateosDto->getCveGrupoJuzgado());
                        $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                        $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                        $mensajeError = "OCURRIO UN ERROR AL INSERTAR EL REGISTRO";
                    }
                    if ($error) {
                        break;
                        $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                    }
                    //} else {
//                        $logger->w_onError("**********EL ID DE PROGRAMACION DEL CATEO ES " . $dto[0]->getIdProgramacionCateo() . ", SE ACTUALIZARAN LOS DATOS");
//                        $error = true;
//                        $hInicio = explode(" ",$dto[0]->getFechaInicio());
//                        $hFin = explode(" ",$dto[0]->getFechaFinal());
//                        $mensajeError = "Ya existen registros de programacion cateos para el dia: " . $dias[$n]. " , para el grupo de cateos seleccionado entre el horario: " . $hInicio[1] . " y " . $hFin[1];
                    /*
                     * Actualizar los registros encontrados
                     */
                    /* $inicioTmp = $dto[0]->getFechaInicio();
                      $finTmp = $dto[0]->getFechaInicio();
                      $fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                      $fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                      $programacion = new ProgramacioncateosDTO();
                      $programacion->setIdProgramacionCateo($dto[0]->getIdProgramacionCateo());
                      $programacion->setIdJuzgador($ProgramacioncateosDto->getIdJuzgador());
                      $programacion->setCveGrupoJuzgado($ProgramacioncateosDto->getCveGrupoJuzgado());
                      $programacion->setFechaInicio($fechaHoraInicio);
                      $programacion->setFechaFinal($fechaHoraFin);
                      $programacion->setActivo("S");
                      $logger->w_onError("**********ID JUZGADOR: " . $ProgramacioncateosDto->getIdJuzgador());
                      $logger->w_onError("**********CVE GRUPO JUZGADO: " . $ProgramacioncateosDto->getCveGrupoJuzgado());
                      $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                      $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                      $logger->w_onError("**********ID PROGRAMACION CATEO: " . $dto[0]->getIdProgramacionCateo());

                      $programacion = $programacionCateosDao->updateProgramacioncateos($programacion, $this->proveedor);
                      if($programacion != ""){
                      $error = false;
                      $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                      $idProgramacionesUpdate[] = $programacion[0]->getIdProgramacionCateo();
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

                if (count($idProgramacionesInsert) > 0) {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",", $idProgramacionesInsert);
                    $cveAccion = 339;
                    $descripcion = "INSERT tabla tblprogramacioncateos registros: " . $registrosInsert;
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
                    $cveAccion = 340;
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

    public function modificarProgramacioncateos($programacionCateosDto, $proveedor = null) {
        //var_dump($programacionCateosDto);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $programacionCateosDto = $this->validarProgramacioncateos($programacionCateosDto);
        $programacionCateosTmp = new ProgramacioncateosDTO();
        $programacionCateosDao = new ProgramacioncateosDAO();
        $error = false;
        $msg = array();
        $result = array();
        $listaResult = array();
        $fechaInicio = explode(" ", $programacionCateosDto->getFechaInicio());
        $fechaFin = explode(" ", $programacionCateosDto->getFechaFinal());
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

            $programacionCateosTmp->setIdProgramacionCateo($programacionCateosDto->getIdProgramacionCateo());
            //$programacionCateosTmp->setCveGrupoJuzgado($programacionCateosDto->getCveGrupoJuzgado());
            $programacionCateosTmp->setActivo("S");
            //$programacionCateosTmp->setIdJuzgador($programacionCateosDto->getIdJuzgador());
            //$programacionCateosTmp->setFechaInicio($diaInicio);
            //$programacionCateosTmp->setFechaFinal($diaFin);
//            $order = " AND CAST('" . $diaInicio . "' AS DATETIME) >= fechaInicio
//                       AND CAST('" . $diaInicio . "' AS DATETIME) <= fechaFinal
//                       AND idJuzgador<>'" . $programacionCateosDto->getIdJuzgador() . "'";
            $order = "";
            /* $order = " AND FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
              $order .= " AND FechaFinal LIKE'%" . $fechaFin[0] . "%'";
              $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
              AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)";
              $order .= " AND idJuzgador<>'" . $programacionCateosDto->getIdJuzgador() . "'"; */

            $programacionCateosTmp = $programacionCateosDao->selectProgramacioncateos($programacionCateosTmp, $order, $this->proveedor);
            //if($programacionCateosTmp == "") {
            $programacionCateosDto->setFechaInicio($diaInicio);
            $programacionCateosDto->setFechaFinal($diaFin);
            $programacionCateosDto = $programacionCateosDao->updateProgramacioncateos($programacionCateosDto, $this->proveedor);
            if ($programacionCateosDto != "") {
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 340;
                $descripcion = "UPDATE tabla tblprogramacioncateos, registro antes de modificar: " . json_encode($programacionCateosTmp[0]->toString()) . ", registro modificado: " . json_encode($programacionCateosDto[0]->toString());
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
                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
                }
                $msg[] = array("Registro actualizado correctamente");
                $listaResult = array(
                    "idProgramacionCateo" => $programacionCateosDto[0]->getIdProgramacionCateo(),
                    "idJuzgador" => $programacionCateosDto[0]->getIdJuzgador(),
                    "cveGrupoJuzgado" => $programacionCateosDto[0]->getCveGrupoJuzgado(),
                    "fechaInicio" => $programacionCateosDto[0]->getFechaInicio(),
                    "fechaFinal" => $programacionCateosDto[0]->getFechaFinal()
                );
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al actualizar el registro");
            }
//            } else {
//                $horaInicioAux = explode(" ",$programacionCateosTmp[0]->getFechaInicio());
//                $horaFinAux = explode(" ", $programacionCateosTmp[0]->getFechaFinal());
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

    public function bajaProgramacionCateosManual($programacionCateosDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionCateos");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO DE PROGRAMACION CATEOS**********");
        $idProgramacionCateos = array();
        $dias = array();
        $error = true;

        $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
        $fechaInicial = $programacionCateosDto->getFechaInicio();
        $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
        $fechaFinal = $programacionCateosDto->getFechaFinal();
        $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);

        while ($fechaInicial <= $fechaFinal) {
            $dias[] = $fechaInicial;
            $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicial));
            $fechaInicial = date('Y-m-d', $fechaInicialTmp);
        }
        //print_r($dias);
        $programacionCateoDto = new ProgramacioncateosDTO();
        $programacionCateoDto->setCveGrupoJuzgado($programacionCateosDto->getCveGrupoJuzgado());
        $programacionCateoDto->setIdJuzgador($programacionCateosDto->getIdJuzgador());
        $programacionCateoDto->setActivo("S");
        $programacionCateosDao = new ProgramacioncateosDAO();
        $programacionCateoDto = $programacionCateosDao->selectProgramacioncateos($programacionCateoDto, ' ORDER BY fechaInicio ', $this->proveedor);
        $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION CATEOS");
        $logger->w_onError("**********CVE GRUPO JUZGADO: " . $programacionCateosDto->getCveGrupoJuzgado());
        $logger->w_onError("**********ID JUZGADOR: " . $programacionCateosDto->getIdJuzgador());

        if ($programacionCateoDto != "") {
            $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
            for ($n = 0; $n < count($programacionCateoDto); $n++) {
                $dia = $programacionCateoDto[$n]->getFechaInicio();
                //echo $dia . "<br>";
                $fechaInicio = explode(" ", $dia);
                $fechaTmp = $fechaInicio[0];
                //echo $fechaTmp . "<br>";
                if (in_array($fechaTmp, $dias)) {
                    $programacionCateosTmp = new ProgramacioncateosDTO();
                    $programacionCateosTmp->setIdProgramacionCateo($programacionCateoDto[$n]->getIdProgramacionCateo());
                    $programacionCateosTmp->setActivo("N");
                    $programacionCateosTmp = $programacionCateosDao->updateProgramacioncateos($programacionCateosTmp, $this->proveedor);
                    if ($programacionCateosTmp != "") {
                        $error = false;
                        $idProgramacionCateos[] = $programacionCateosTmp[0]->getIdProgramacionCateo();
                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION CATEO: " . $programacionCateosTmp[0]->getIdProgramacionCateo());
                    } else {
                        $error = true;
                        $logger->w_onError("**********ERROR AL BORRAR LOGICAMENTE EL REGISTRO CON ID DE PROGRAMACION CATEO: " . $programacionCateoDto[$n]->getIdProgramacionCateo());
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
            $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION CATEOS, TERMINA EL PROCESO");
            $mensajeError = "NO HAY DATOS A ELIMINAR";
        }
        $fecha = date("Y-m-d H:i:s");
        $cveAccion = 341;
        $programacionCateos = implode(",", $idProgramacionCateos);
        $descripcion = "borrado logico en tblprogramacioncateos idProgramacionCateos: " . $programacionCateos;
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

    public function eliminarProgramacioncateos($programacioncateosDto, $proveedor = null) {
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
        $programacionCateosDao = new ProgramacioncateosDAO();
        $programacioncateosDto->setActivo("N");
        $programacioncateosDto->setFechaActualizacion($fechaActual);
        $programacioncateosDto = $programacionCateosDao->updateProgramacioncateos($programacioncateosDto, $this->proveedor);
        if ($programacioncateosDto != "") {
            $fecha = date("Y-m-d H:i:s");
            $cveAccion = 341;
            $descripcion = "borrado logico en tblprogramacioncateos idProgramacionCateos: " . $programacioncateosDto[0]->getIdProgramacionCateo();
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
                "idProgramacionCateo" => $programacioncateosDto[0]->getIdProgramacionCateo(),
                "idJuzgador" => $programacioncateosDto[0]->getIdJuzgador(),
                "cveGrupoJuzgado" => $programacioncateosDto[0]->getCveGrupoJuzgado(),
                "fechaInicio" => $programacioncateosDto[0]->getFechaInicio(),
                "fechaFinal" => $programacioncateosDto[0]->getFechaFinal()
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

    public function juezCateo($juzgadoDto, $programacionCateosDto, $proveedor = null) {
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
        $idJuzgadorCateo = 0;
        $cateos = array();
        $idJuzgadores = array();

        $fecha = $programacionCateosDto->getFechaInicio();
        $fechaInicio = explode(" ", $programacionCateosDto->getFechaInicio());
        $fechaInicioJuzgadorCateo = $fechaInicio[0] . " 08:30:00";
        $fechaFinJuzgadorCateo = $fechaInicio[0] . " 08:29:59";

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
            $fechaInicioJuzgadorCateo = $nuevafecha->format('Y-m-d') . " 08:30:00";
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
            $fechaFinJuzgadorCateo = $nuevafecha->format('Y-m-d') . " 08:29:59";
        }

        $arrJuzgados = array();
        $cadenaJuzgados = "";
        $gruposJuzgadosDto = new GruposjuzgadosDTO();
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        $gruposJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposJuzgadosDto->setActivo('S');
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, ' FOR UPDATE ', $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            $gruposCateosDto = new GruposcateosDTO();
            $gruposCateosDao = new GruposcateosDAO();
            $gruposCateosDto->setCveGrupoCateo($gruposJuzgadosDto[0]->getCveGrupoCateo());
            $gruposCateosDto->setActivo('S');
            $gruposCateosDto = $gruposCateosDao->selectGruposcateos($gruposCateosDto, " FOR UPDATE ", $this->proveedor);
            if ($gruposCateosDto != "") {
                $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                $gruposJuzgadosTmp->setCveGrupoCateo($gruposCateosDto[0]->getCveGrupoCateo());
                $gruposJuzgadosTmp->setActivo('S');
                $gruposJuzgadosTmp = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosTmp, '', $this->proveedor);
                if ($gruposJuzgadosTmp != "") {
                    foreach ($gruposJuzgadosTmp as $grupoJuzgado) {
                        $arrJuzgados[] = $grupoJuzgado->getCveGrupoJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $arrJuzgados);
                }
            }
        }

        //$fechaFin = explode(" ", $programacionCateosDto->getFechaFinal());
        /*
         * Consultar los datos del juzgado
         */
        $juzgadoTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $juzgadoTmp->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, " FOR UPDATE ", $this->proveedor);
        /*
         * Consultar el grupo al que pertenece el juzgado enviado como par�metro
         */
        $gruposJuzgadosDto = new GruposjuzgadosDTO();
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        $gruposJuzgadosDto->setCveJuzgado($juzgadoDto->getCveJuzgado());
        $gruposJuzgadosDto->setActivo("S");
        $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, " FOR UPDATE ", $this->proveedor);
        if ($gruposJuzgadosDto != "") {
            foreach ($gruposJuzgadosDto as $grupoJuzgado) {
                /*
                 * Consultar en la tabla tblprogramacioncateos si existe un registro 
                 * entre la fecha y hora enviadas como par�metro para saber que
                 * juez est� disponible para realizar el cateo
                 */
                $programacionCateosDto = new ProgramacioncateosDTO();
                $programacionCateosDao = new ProgramacioncateosDAO();
                //$programacionCateosDto->setCveGrupoJuzgado($grupoJuzgado->getCveGrupoJuzgado());
                $programacionCateosDto->setActivo("S");
                /* $order = " AND (FechaInicio LIKE'%" . $fechaInicio[0] . "%'";
                  $order .= " OR FechaFinal LIKE'%" . $fechaInicio[0] . "%')";
                  $order .= " AND CAST('" . $fechaInicio[1] . "' AS TIME) >= CAST(SUBSTRING(fechaInicio,11,9) AS TIME)
                  AND CAST('" . $fechaInicio[1] . "' as TIME) <= CAST(SUBSTRING(fechaFinal,11,9) AS TIME)"; */
                $order = " AND CAST('" . $fecha . "' AS DATETIME) >= fechaInicio
                           AND CAST('" . $fecha . "' AS DATETIME) <= fechaFinal AND cveGrupoJuzgado IN (" . $cadenaJuzgados . ") FOR UPDATE";
                $programacionCateosDto = $programacionCateosDao->selectProgramacioncateos($programacionCateosDto, $order, $this->proveedor);
                if ($programacionCateosDto != "") {
                    /*
                     * Se encontraron resultados, verificar si existe m�s de un juzgador disponible
                     * en la fecha y hora enviadas como par�metro, en caso de haber m�s de un juzgador
                     * revisar cu�ntos cateos tiene asignados, retornar el id del juzgador que tenga
                     * menos cateos
                     */
                    $idJuez = array();
                    $cadenaJuez = "";
                    if (count($programacionCateosDto) > 1) {
                        foreach ( $programacionCateosDto as $prog ) {
                            $idJuez[] = $prog->getIdJuzgador();
                        }
                        $cadenaJuez = implode(",", $idJuez);
                        $juezCateoDto = new JuzgadorescateosDTO();
                        $juzgadoresCateosDao = new JuzgadorescateosDAO();
                        $juezCateoDto->setActivo('S');
                        $ordenTmp = " AND fechaRegistro >= '" . $fechaInicioJuzgadorCateo . "'
                                      AND fechaRegistro <= '" . $fechaFinJuzgadorCateo . "' 
                                      AND idJuzgador IN (" . $cadenaJuez . ") FOR UPDATE";
                        $juezCateoDto = $juzgadoresCateosDao->selectJuzgadorescateos($juezCateoDto, "", $ordenTmp, $this->proveedor);
                        if ( $juezCateoDto != "" ) {
                            foreach ($programacionCateosDto as $programacionJuzgador) {
                                $idJuzgadores[] = $programacionJuzgador->getIdJuzgador();
                                $juzgadoresCateosDto = new JuzgadorescateosDTO();
                                $juzgadoresCateosDao = new JuzgadorescateosDAO();
                                $juzgadoresCateosDto->setActivo("S");
                                $juzgadoresCateosDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgadorCateo . "'
                                           AND fechaRegistro <= '" . $fechaFinJuzgadorCateo . "' ORDER BY idJuzgadorCateo DESC FOR UPDATE";
                                $juzgadoresCateosDto = $juzgadoresCateosDao->selectJuzgadorescateos($juzgadoresCateosDto, "", $orden, $this->proveedor);
                                if ($juzgadoresCateosDto != "") {
                                    $cateos[] = array(
                                        "cateos" => count($juzgadoresCateosDto),
                                        "idJuzgadorCateo" => $juzgadoresCateosDto[0]->getIdJuzgadorCateo(),
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador(),
                                        "fechaRegistro" => $juzgadoresCateosDto[0]->getFechaRegistro()
                                    );
                                } else {
                                    $cateos[] = array(
                                        "cateos" => 0,
                                        "idJuzgadorCateo" => 0,
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador(),
                                        "fechaRegistro" => ""
                                    );
                                }
                            }
                        } else {
                            foreach ($programacionCateosDto as $programacionJuzgador) {
                                $tmpFecha = explode(" ", $programacionJuzgador->getFechaInicio());
                                $tmpProgramacion = new ProgramacioncateosDTO();
                                $tmpProgramacion->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $tmpProgramacion->setActivo('S');
                                $tmpOrden = "AND CAST(fechaInicio AS DATE) < CAST('" . $tmpFecha[0] . "' AS DATE) ORDER BY fechaInicio DESC LIMIT 1 FOR UPDATE";
                                $tmpProgramacion = $programacionCateosDao->selectProgramacioncateos($tmpProgramacion, $tmpOrden, $this->proveedor);
                                if ( $tmpProgramacion != "" ) {
                                    $fechaInicioJuzgador = $tmpProgramacion[0]->getFechaInicio();
                                    $fechaFinJuzgador = $tmpProgramacion[0]->getFechaFinal();
                                }

                                $idJuzgadores[] = $programacionJuzgador->getIdJuzgador();
                                $juzgadoresCateosTmpDto = new JuzgadorescateosDTO();
                                $juzgadoresCateosDao = new JuzgadorescateosDAO();
                                $juzgadoresCateosTmpDto->setActivo("S");
                                $juzgadoresCateosTmpDto->setIdJuzgador($programacionJuzgador->getIdJuzgador());
                                $orden = " AND fechaRegistro >= '" . $fechaInicioJuzgador . "'
                                           AND fechaRegistro <= '" . $fechaFinJuzgador . "' ORDER BY idJuzgadorCateo DESC FOR UPDATE";
                                $juzgadoresCateosTmpDto = $juzgadoresCateosDao->selectJuzgadorescateos($juzgadoresCateosTmpDto, "", $orden, $this->proveedor);
                                if ($juzgadoresCateosTmpDto != "") {
                                    $cateos[] = array(
                                        "cateos" => count($juzgadoresCateosTmpDto),
                                        "idJuzgadorCateo" => $juzgadoresCateosTmpDto[0]->getIdJuzgadorCateo(),
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador(),
                                        "fechaRegistro" => $juzgadoresCateosTmpDto[0]->getFechaRegistro()
                                    );
                                } else {
                                    $cateos[] = array(
                                        "cateos" => 0,
                                        "idJuzgadorCateo" => 0,
                                        "idJuzgador" => $programacionJuzgador->getIdJuzgador(),
                                        "fechaRegistro" => ""
                                    );
                                }
                            }
                        }
                        
                        /*
                         * Ordenar el arreglo que contiene el numero de cateos
                         * para saber cual juzgador tiene menos cateos
                         */
                        array_multisort($cateos);
                        /*
                         * Seleccionar el id del juzgador con menos cateos
                         */
                        $idJuzgadorCateo = $cateos[0]['idJuzgador'];
                        $fechaRegistro = $cateos[0]['fechaRegistro'];
                        //echo "idJuzgador: " . $idJuzgadorCateo;
                    } else {
                        /*
                         * Solo existe un juzgador en el horario asigando, regresar el id encontrado
                         */
                        $idJuzgadorCateo = $programacionCateosDto[0]->getIdJuzgador();
                        $fechaRegistro = "";
                    }
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($idJuzgadorCateo);
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
                                   AND fechaFinal LIKE'%" . $fechaInicio[0] . "%' FOR UPDATE ";
                        $programacionJuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionJuzgadoresDto, $orden, $this->proveedor);
                        if ($programacionJuzgadoresDto != "") {
                            $cveRolJuzgador = $programacionJuzgadoresDto[0]->getCveRolJuzgador();
                            $rolesJuzgadoresDto = new RolesjuzgadoresDTO();
                            $rolesJuzgadoresDao = new RolesjuzgadoresDAO();
                            $rolesJuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);
                            $rolesJuzgadoresDto = $rolesJuzgadoresDao->selectRolesjuzgadores($rolesJuzgadoresDto, "", $this->proveedor);
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
                            "desRolJuzgador" => $desRolJuzgador,
                            "fechaRegistro"  => $fechaRegistro
                        );
                    } else {
                        $error = true;
                        $msg = " Ocurrrio un error al consultar los datos del juez";
                    }
                } else {
                    $error = true;
                    $msg = " No se encontraron jueces programados para atender cateos para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado()) . " en el dia " . $fechaInicio[0] . " a las " . $fechaInicio[1];
                }
            }
        } else {
            $error = true;
            $msg = " No se encontraron datos de programacion de cateos para el juzgado " . utf8_encode($juzgadoTmp[0]->getDesJuzgado());
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

    public function simuladorCateos($juzgadosDto, $programacioncateosDto, $proveedor = null) {
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
        $diaInicio = $programacioncateosDto->getFechaInicio();
        $diaFin = $programacioncateosDto->getFechaFinal();
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
             * Para cada uno de los d�as verificar que juez puede atender algun catoe
             */
            $horarioMatutinoCateo = $dias[$n] . " 07:00:00";
            $programacionCateosTmp = new ProgramacioncateosDTO();
            $programacionCateosTmp->setFechaInicio($horarioMatutinoCateo);
            $datos = $this->juezCateo($juzgadosDto, $programacionCateosTmp, $this->proveedor);
            if ($datos['estatus'] == "ok") {
                $juezMatutino[] = $datos['data']['nombreJuzgador'] . " - " . $datos['data']['desRolJuzgador'];
            } else {
                $juezMatutino[] = "No hay juez disponible en este horario";
            }

            $horarioMatutinoCateoFin = $dias[$n] . " 16:59:59";
            $programacionCateosTmp = new ProgramacioncateosDTO();
            $programacionCateosTmp->setFechaInicio($horarioMatutinoCateoFin);
            $datosVespertino = $this->juezCateo($juzgadosDto, $programacionCateosTmp, $this->proveedor);
            if ($datosVespertino['estatus'] == "ok") {
                $juezMatutinoFin[] = $datosVespertino['data']['nombreJuzgador'] . " - " . $datosVespertino['data']['desRolJuzgador'];
            } else {
                $juezMatutinoFin[] = "No hay juez disponible en este horario";
            }

            $horarioVespetinoCateo = $dias[$n] . " 17:00:00";
            $programacionCateosTmp = new ProgramacioncateosDTO();
            $programacionCateosTmp->setFechaInicio($horarioVespetinoCateo);
            $datosVespertinoCateo = $this->juezCateo($juzgadosDto, $programacionCateosTmp, $this->proveedor);
            if ($datosVespertinoCateo['estatus'] == "ok") {
                $juezVespertinoInicio[] = $datosVespertinoCateo['data']['nombreJuzgador'] . " - " . $datosVespertinoCateo['data']['desRolJuzgador'];
            } else {
                $juezVespertinoInicio[] = "No hay juez disponible en este horario";
            }

            $diasTmp = strtotime('+1 day', strtotime($dias[$n]));
            $dia = date('Y-m-d', $diasTmp);

            $horarioVespetinoCateoFin = $dia . " 06:59:59";
            $programacionCateosTmp = new ProgramacioncateosDTO();
            $programacionCateosTmp->setFechaInicio($horarioVespetinoCateoFin);
            $datosVespertinoCateoFin = $this->juezCateo($juzgadosDto, $programacionCateosTmp, $this->proveedor);
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

    public function eliminarSeleccionados($programacioncateosDto, $param, $proveedor = null) {
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

        $programacionCateosDao = new ProgramacioncateosDAO();

        $datos = json_decode($param['idProgramacionesCateos']);
        //print_r($datos);
        if ($datos != "") {
            for ($n = 0; $n < count($datos); $n++) {
                if ((int) $datos[$n]->idProgramacionCateo != 0) {
                    $programacionCateosDto = new ProgramacioncateosDTO();
                    $programacionCateosDto->setIdProgramacionCateo($datos[$n]->idProgramacionCateo);
                    $programacionCateosDto->setActivo("N");
                    $programacionCateosDto->setFechaActualizacion($fechaActual);
                    $programacionCateosDto = $programacionCateosDao->updateProgramacioncateos($programacionCateosDto, $this->proveedor);
                    if ($programacionCateosDto != "") {
                        $error = false;
                        $idRegistrosUpdate[] = $programacionCateosDto[0]->getIdProgramacionCateo();
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
            $cveAccion = 341;
            $descripcion = "borrado logico en tblprogramacioncateos idRegistros: " . $cadenaIdRegistros;
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

//  $juzgadosDto = new JuzgadosDTO();
//  $juzgadosDto->setCveJuzgado(10322);
//  $programacionCateosDto = new ProgramacioncateosDTO();
//  $programacionCateosDto->setFechaInicio("2016-06-21 19:15:07");
//  $pogramacionCateos = new ProgramacioncateosController();
//  $datos = $pogramacionCateos->juezCateo($juzgadosDto, $programacionCateosDto);
//  echo "<pre>";
//  print_r($datos);
//  echo "</pre>";

/* $juzgadosDto = new JuzgadosDTO();
  $juzgadosDto->setCveJuzgado(762);
  $programacionCateosDto = new ProgramacioncateosDTO();
  $programacionCateosDto->setFechaInicio("2016-02-16");
  $programacionCateosDto->setFechaFinal("2016-02-17");
  $pogramacionCateos = new ProgramacioncateosController();
  $datos = $pogramacionCateos->simuladorCateos($juzgadosDto, $programacionCateosDto);
  echo "<pre>";
  print_r($datos);
  echo "</pre>"; */
?>