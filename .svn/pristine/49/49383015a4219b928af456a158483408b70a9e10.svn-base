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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/horariosjuzgadores/HorariosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/horariosjuzgadores/HorariosjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
//Programacion juzgadores
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/configuracionesjuzgadores/ConfiguracionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/programacionjuzgadores/ProgramacionjuzgadoresDAO.Class.php");

class HorariosjuzgadoresController {
    private $proveedor;
    public function __construct() {
    }
    public function validarHorariosjuzgadores($HorariosjuzgadoresDto){
        $HorariosjuzgadoresDto->setIdHorarioJuzgador(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getIdHorarioJuzgador()))));
        $HorariosjuzgadoresDto->setDesHorario(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getDesHorario()))));
        $HorariosjuzgadoresDto->setHorarioInicial(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getHorarioInicial()))));
        $HorariosjuzgadoresDto->setHorarioFinal(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getHorarioFinal()))));
        $HorariosjuzgadoresDto->setCveJuzgado(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getCveJuzgado()))));
        $HorariosjuzgadoresDto->setCveTipoJuzgador(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getCveTipoJuzgador()))));
        $HorariosjuzgadoresDto->setActivo(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getActivo()))));
        $HorariosjuzgadoresDto->setFechaRegistro(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getFechaRegistro()))));
        $HorariosjuzgadoresDto->setFechaActualizacion(strtoupper(str_ireplace("'","",trim($HorariosjuzgadoresDto->getFechaActualizacion()))));
        return $HorariosjuzgadoresDto;
    }
    public function selectHorariosjuzgadores($HorariosjuzgadoresDto, $param = null,$proveedor=null){
        $HorariosjuzgadoresDto=$this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        
        $order = " AND desHorario LIKE'%" . $HorariosjuzgadoresDto->getDesHorario() . "%'";
        $order .= " ORDER BY desHorario";
        if ( $param != null ) {
            if ( $param["paginacion"] == "S" ) {
                if ($param["pagina"] > 0) {
                    $inicial = ($param["pagina"] - 1) * $param["cantidadPorPagina"];
                } else {
                    $inicial = 0;
                }
                $order .= " LIMIT " . $inicial . "," . $param["cantidadPorPagina"];
            }
        }
        $horarioDto = new HorariosjuzgadoresDTO();
        $horarioDto->setIdHorarioJuzgador($HorariosjuzgadoresDto->getIdHorarioJuzgador());
        $horarioDto->setActivo("S");
        $horarioDto->setCveJuzgado($HorariosjuzgadoresDto->getCveJuzgado());
        $horarioDto->setCveTipoJuzgador($HorariosjuzgadoresDto->getCveTipoJuzgador());
        
        $HorariosjuzgadoresDto = $HorariosjuzgadoresDao->selectHorariosjuzgadores($horarioDto, $order,null);
        return $HorariosjuzgadoresDto;
    }
    public function selectJuzgadores($HorariosjuzgadoresDto,$proveedor=null){
        $HorariosjuzgadoresDto=$this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        $juzgadoresDto = new JuzgadoresDTO();
        $juzgadoresDto = $HorariosjuzgadoresDao->selectJuzgadores($HorariosjuzgadoresDto,$proveedor);
        return $juzgadoresDto;
    }
    public function insertHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor=null){
        $HorariosjuzgadoresDto=$this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        $HorariosjuzgadoresDto = $HorariosjuzgadoresDao->insertHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor);
        return $HorariosjuzgadoresDto;
    }
    public function updateHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor=null){
        $HorariosjuzgadoresDto=$this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        //$tmpDto = new HorariosjuzgadoresDTO();
        //$tmpDto = $HorariosjuzgadoresDao->selectHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor);
        //if($tmpDto!=""){//$HorariosjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $HorariosjuzgadoresDto = $HorariosjuzgadoresDao->updateHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor);
        return $HorariosjuzgadoresDto;
        //}
        //return "";
    }
    public function deleteHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor=null){
        $HorariosjuzgadoresDto=$this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        $HorariosjuzgadoresDto = $HorariosjuzgadoresDao->deleteHorariosjuzgadores($HorariosjuzgadoresDto,$proveedor);
        return $HorariosjuzgadoresDto;
    }
    
    public function getPaginasHorariosJuzgadores($horariosjuzgadoresDto,$param) {
        //var_dump($horariosjuzgadoresDto);
        $totalRegistros = 0;
        $horariosjuzgadoresDto = $this->validarHorariosjuzgadores($horariosjuzgadoresDto);
        $HorariosjuzgadoresDao = new HorariosjuzgadoresDAO();
        $order = " AND desHorario LIKE'%" . $horariosjuzgadoresDto->getDesHorario() . "%'";
        $horarioDto = new HorariosjuzgadoresDTO();
        $horarioDto->setIdHorarioJuzgador($horariosjuzgadoresDto->getIdHorarioJuzgador());
        $horarioDto->setActivo("S");
        $horarioDto->setCveJuzgado($horariosjuzgadoresDto->getCveJuzgado());
        $horarioDto->setCveTipoJuzgador($horariosjuzgadoresDto->getCveTipoJuzgador());
        $horariosjuzgadoresDto = $HorariosjuzgadoresDao->selectHorariosjuzgadores($horarioDto, $order, null);
        if ( $horariosjuzgadoresDto != "" ) {
            $totalRegistros = count($horariosjuzgadoresDto);
        } else {
            $totalRegistros = 0;
        }
        $Pages = (int) $totalRegistros / $param["cantidadPorPagina"];
        $restoPages = $totalRegistros % $param["cantidadPorPagina"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $totalRegistros . '",';
        $json .= '"data":[';
        $x = 1;
        //var_dump($totPages);
        if ($totPages >= 1) {
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
        //print_r($json).'Jsonnn';
        return $json;
    }
    
    public function modificarHorariosJuzgadores($horariosjuzgadoresDto,$param, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $msg = array();
        $resultado = array();
        $listaResultados = array();
        $fechaActual = "";
        $anioActual = "";
        $mesActual = "";
        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio, MONTH(CURDATE()) AS Mes");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = (int)$row['Anio'];
                    $mesActual = (int)$row['Mes'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = (int)date("Y");
                $mesActual = (int)date('m');
            }
        }
        $horariosjuzgadoresDto = $this->validarHorariosjuzgadores($horariosjuzgadoresDto);
        $horariosJuzgadoresDao = new HorariosjuzgadoresDAO();
        $configuraciones = new ConfiguracionesjuzgadoresDTO();
        $configuracionesJuzgadoresDao = new ConfiguracionesjuzgadoresDAO();

        $horariosjuzgadoresDto = $horariosJuzgadoresDao->updateHorariosjuzgadores($horariosjuzgadoresDto, $this->proveedor);
        
        if( $horariosjuzgadoresDto != "" ) {
            $result = array(
                'idHorarioJuzgador'  => $horariosjuzgadoresDto[0]->getIdHorarioJuzgador(),
                'desHorario'         => utf8_encode($horariosjuzgadoresDto[0]->getDesHorario()),
                'horarioInicial'     => $horariosjuzgadoresDto[0]->getHorarioInicial(),
                'horarioFinal'       => $horariosjuzgadoresDto[0]->getHorarioFinal(),
                'cveJuzgado'         => $horariosjuzgadoresDto[0]->getCveJuzgado(),
                'cveTipoJuzgador'    => $horariosjuzgadoresDto[0]->getCveTipoJuzgador(),
                'activo'             => $horariosjuzgadoresDto[0]->getActivo(),
                'fechaRegistro'      => $horariosjuzgadoresDto[0]->getFechaRegistro(),
                'fechaActualizacion' => $horariosjuzgadoresDto[0]->getFechaActualizacion()
            );
            array_push($listaResultados, $result);
            $configuraciones->setIdHorarioJuzgador($horariosjuzgadoresDto[0]->getIdHorarioJuzgador());
            $baja = $configuracionesJuzgadoresDao->deleteLogicConfiguracionesjuzgadores($configuraciones, $this->proveedor);
            if ( $baja == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Ocurrió un error al actualizar el registro'));
            } else {
                if (array_key_exists('idJuzgador', $param) && $param['idJuzgador'] != "" ) {
                    for ( $s = 0; $s < count($param['idJuzgador']); $s++ ) {
                        /*
                         * Verificar si el juez ya se encuentra en la configuracion,
                         * si no se encuentra, insertar el registro
                         */
                        $tmpConfiguraciones = new ConfiguracionesjuzgadoresDTO();
                        $tmpConfiguraciones->setIdHorarioJuzgador($horariosjuzgadoresDto[0]->getIdHorarioJuzgador());
                        $tmpConfiguraciones->setIdJuzgador($param['idJuzgador'][$s]);
                        $tmpConfiguraciones = $configuracionesJuzgadoresDao->selectConfiguracionesjuzgadores($tmpConfiguraciones, '', $this->proveedor);
                        if ( $tmpConfiguraciones != "" ) {
                            $configuracionesjuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                            $configuracionesjuzgadoresDto->setIdConfiguracionJuzgador($tmpConfiguraciones[0]->getIdConfiguracionJuzgador());
                            $configuracionesjuzgadoresDto->setActivo('S');
                            $configuracionesjuzgadoresDto = $configuracionesJuzgadoresDao->updateConfiguracionesjuzgadores($configuracionesjuzgadoresDto, $this->proveedor);
                            if ( $configuracionesjuzgadoresDto != "" ) {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar la configuración de horarios'));
                            }
                        } else {
                            $configuracionesjuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                            
                            $configuracionesjuzgadoresDto->setIdHorarioJuzgador($horariosjuzgadoresDto[0]->getIdHorarioJuzgador());
                            $configuracionesjuzgadoresDto->setIdJuzgador($param['idJuzgador'][$s]);
                            $configuracionesjuzgadoresDto->setActivo("S");
                            $configuracionesjuzgadoresDto = $configuracionesJuzgadoresDao->insertConfiguracionesjuzgadores($configuracionesjuzgadoresDto, $this->proveedor);
                            if ( $configuracionesjuzgadoresDto != "" ) {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar la configuración de horarios'));
                            }
                        }
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('No se recibieron datos de jueces para la configuración'));
                }
            }
            
            if ( !$error ) {
                /*
                 * Actualizar el horario de cada uno de los registros de programacion de juzgadores
                 * para el mes actual y el mes siguiente, en caso de que existan datos
                 */
                $mesSiguiente = $mesActual + 1;
                $cadena = $mesActual . "," . $mesSiguiente;
                $orden = " AND p.cveMes IN(" . $cadena . ")";
                $programacionesDto = new ProgramacionesDTO();
                $programacionesDao = new ProgramacionesDAO();
                $programacionesDto->setAnio($anioActual);
                $programacionesDto->setCveJuzgado($horariosjuzgadoresDto[0]->getCveJuzgado());
                $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, $orden, $this->proveedor);
                if ( $programacionesDto != "" ) {
                    foreach ( $programacionesDto as $programacion ) {
                        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
                        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
                        $programacionJuzgadoresDto->setIdProgramacion($programacion->getIdProgramacion());
                        $programacionJuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionJuzgadoresDto, '', $this->proveedor);
                        if ( $programacionJuzgadoresDto != "" ) {
                            foreach ( $programacionJuzgadoresDto as $programacionJuzgador ) {
                                $fechaInicial = explode(" ", $programacionJuzgador->getFechaInicio());
                                $fechaFinal = explode(" ", $programacionJuzgador->getFechaFinal());
                                
                                $fechaInicio = $fechaInicial[0] . " " . $horariosjuzgadoresDto[0]->getHorarioInicial();
                                $fechaTermino = $fechaFinal[0] . " " . $horariosjuzgadoresDto[0]->getHorarioFinal();
                                
                                $tmpProgramacion = new ProgramacionjuzgadoresDTO();
                                $tmpProgramacion->setIdProgramacionJuzgador($programacionJuzgador->getIdProgramacionJuzgador());
                                $tmpProgramacion->setFechaInicio($fechaInicio);
                                $tmpProgramacion->setFechaFinal($fechaTermino);
                                $tmpProgramacion = $programacionJuzgadoresDao->updateProgramacionjuzgadores($tmpProgramacion, $this->proveedor);
                                if ( $tmpProgramacion != "" ) {
                                    $error = false;
                                } else {
                                    $error = true;
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        }
                        if ( $error ) {
                            break;
                        }
                    }
                }
            }
            
            //guardar en bitacora la actualizacion del registro en tblhorarios
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccion = 43;
            $observaciones = "UPDATE TABLE tblhorariosjuzgadores id: " . $horariosjuzgadoresDto[0]->getIdHorarioJuzgador();
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($observaciones);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $bitacoraMovimientosDao = new BitacoramovimientosDAO();
            $insertar = $bitacoraMovimientosDao->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if ( $insertar == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Ocurrió un error al registrar la acción realizada por el usuario'));
            }
        } else {
            $error = true;
            $msg[] = array(utf8_encode('Ocurrió un error al actualizar el horario'));
        }
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $resultado = array(
                'estatus'    => 'ok',
                'totalCount' => count($listaResultados),
                'data'       => $listaResultados
            );
        } else {
            if ( $proveedor == null ) {
                $this->proveedor->execute('ROLLBACK');
            }
            $resultado = array(
                'estatus'    => 'error',
                'totalCount' => '0',
                'text'       => $msg
            );
        }
        return json_encode($resultado);
        
    }
    
}
?>