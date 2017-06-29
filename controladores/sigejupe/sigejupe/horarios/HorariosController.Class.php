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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/horarios/HorariosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/horarios/HorariosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
//Configuraciones salas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/configuracionessalas/ConfiguracionessalasDAO.Class.php");
//Programacion Salas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/programacionsalas/ProgramacionsalasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class HorariosController {
    private $proveedor;
    public function __construct() {
    }
    public function validarHorarios($HorariosDto){
        $HorariosDto->setcveHorario(strtoupper(str_ireplace("'","",trim($HorariosDto->getcveHorario()))));
        $HorariosDto->setdesHorario(strtoupper(str_ireplace("'","",trim($HorariosDto->getdesHorario()))));
        $HorariosDto->setactivo(strtoupper(str_ireplace("'","",trim($HorariosDto->getactivo()))));
        $HorariosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($HorariosDto->getfechaRegistro()))));
        $HorariosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($HorariosDto->getfechaActualizacion()))));
        $HorariosDto->sethorarioInicial(strtoupper(str_ireplace("'","",trim($HorariosDto->gethorarioInicial()))));
        $HorariosDto->sethorarioFinal(strtoupper(str_ireplace("'","",trim($HorariosDto->gethorarioFinal()))));
        $HorariosDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim($HorariosDto->getcveJuzgado()))));
        return $HorariosDto;
    }
    public function selectHorarios($HorariosDto, $param = null, $proveedor=null){
        $HorariosDto=$this->validarHorarios($HorariosDto);
        $HorariosDao = new HorariosDAO();
        $order = " AND desHorario LIKE'%" . $HorariosDto->getDesHorario() . "%'";
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
        $horarioDto = new HorariosDTO();
        $horarioDto->setCveHorario($HorariosDto->getCveHorario());
        $horarioDto->setActivo("S");
        $horarioDto->setCveJuzgado($HorariosDto->getCveJuzgado());
        
        $HorariosDto = $HorariosDao->selectHorarios($horarioDto, $order,null);
        return $HorariosDto;
    }
    
    public function selectSalasJuzgado($HorariosDto,$proveedor=null){
        $HorariosDao = new HorariosDAO();
        $salasDto = new SalasDTO();
        $orden = " ORDER BY s.desSala";
        $salasDto = $HorariosDao->selectSalasJuzgado($HorariosDto,$orden,$proveedor);
        return $salasDto;
    }
    
    public function insertHorarios($HorariosDto,$proveedor=null){
        $HorariosDto=$this->validarHorarios($HorariosDto);
        $HorariosDao = new HorariosDAO();
        $HorariosDto = $HorariosDao->insertHorarios($HorariosDto,$proveedor);
        return $HorariosDto;
    }
    
    public function updateHorarios($HorariosDto,$proveedor=null){
        $HorariosDto=$this->validarHorarios($HorariosDto);
        $HorariosDao = new HorariosDAO();
        //$tmpDto = new HorariosDTO();
        //$tmpDto = $HorariosDao->selectHorarios($HorariosDto,$proveedor);
        //if($tmpDto!=""){//$HorariosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $HorariosDto = $HorariosDao->updateHorarios($HorariosDto,$proveedor);
        return $HorariosDto;
        //}
        //return "";
    }
    
    public function deleteHorarios($HorariosDto,$proveedor=null){
        $HorariosDto=$this->validarHorarios($HorariosDto);
        $HorariosDao = new HorariosDAO();
        $HorariosDto = $HorariosDao->deleteHorarios($HorariosDto,$proveedor);
        return $HorariosDto;
    }
    
    public function getPaginasHorarios($horariosDto,$param) {
        $totalRegistros = 0;
        $horariosDto = $this->validarHorarios($horariosDto);
        $HorariosDao = new HorariosDAO();
        $order = " AND desHorario LIKE'%" . $horariosDto->getDesHorario() . "%'";
        $horarioDto = new HorariosDTO();
        $horarioDto->setCveHorario($horariosDto->getCveHorario());
        $horarioDto->setActivo("S");
        $horarioDto->setCveJuzgado($horariosDto->getCveJuzgado());
        $horariosDto = $HorariosDao->selectHorarios($horarioDto, $order, null);
        if ( $horariosDto != "" ) {
            $totalRegistros = count($horariosDto);
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
    
    public function modificarHorarios($horarioDto, $param, $proveedor = null ) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $msg = array();
        $listaResultados = array();
        $horarioDto = $this->validarHorarios($horarioDto);
        $horarioDao = new HorariosDAO();
        $horarios = $horarioDao->selectHorarios($horarioDto, '', $this->proveedor);
        
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
        //if(!$horarios){
        $configuraciones = new ConfiguracionessalasDTO();
        $configuracionessalasDao = new ConfiguracionessalasDAO();
        $horarioDto->setFechaActualizacion($fechaActual);
        $horarioDto = $horarioDao->updateHorarios($horarioDto, $this->proveedor);
        if ( $horarioDto != "" ) {
            $resultado = array(
                'cveHorario'         => $horarioDto[0]->getCveHorario(),
                'desHorario'         => utf8_encode($horarioDto[0]->getDesHorario()),
                'activo'             => $horarioDto[0]->getActivo(),
                'fechaRegistro'      => $horarioDto[0]->getFechaRegistro(),
                'fechaActualizacion' => $horarioDto[0]->getFechaActualizacion(),
                'horarioInicial'     => $horarioDto[0]->getHorarioInicial(),
                'horarioFinal'       => $horarioDto[0]->getHorarioFinal(),
                'cveJuzgado'         => $horarioDto[0]->getCveJuzgado()
            );
            array_push($listaResultados, $resultado);
            $configuraciones->setCveHorario($horarioDto[0]->getCveHorario());
            $baja = $configuracionessalasDao->deleteLogicConfiguracionessalas($configuraciones, $this->proveedor);
            if ( $baja == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Ocurrió un error al actualizar el registro'));
            } else {
                if (array_key_exists('cveSala', $param) && $param['cveSala'] != "" ) {
                    for($s = 0; $s < count($param['cveSala']); $s++){
                        /*
                         * Verificar si la sala ya existe en la base de datos, se actualiza el registro
                         * en otro caso, si no existe, se inserta un nuevo registro
                         */
                        $tmpConfiguracion = new ConfiguracionessalasDTO();
                        $tmpConfiguracion->setCveHorario($horarioDto[0]->getCveHorario());
                        $tmpConfiguracion->setCveSala($param['cveSala'][$s]);
                        $tmpConfiguracion = $configuracionessalasDao->selectConfiguracionessalas($tmpConfiguracion, '', $this->proveedor);
                        if ( $tmpConfiguracion != "" ) {
                            $configuracionessalasDto = new ConfiguracionessalasDTO();
                            $configuracionessalasDto->setIdConfiguracionSala($tmpConfiguracion[0]->getIdConfiguracionSala());
                            $configuracionessalasDto->setActivo('S');
                            $configuracionessalasDto = $configuracionessalasDao->updateConfiguracionessalas($configuracionessalasDto, $this->proveedor);
                            if ( $configuracionessalasDto != "" ) {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar la configuración de horarios'));
                            }
                        } else {
                            $configuracionessalasDto = new ConfiguracionessalasDTO();
                            $configuracionessalasDto->setCveHorario($horarioDto[0]->getCveHorario());
                            $configuracionessalasDto->setCveSala($param['cveSala'][$s]);
                            $configuracionessalasDto->setActivo("S");
                            $configuracionessalasDto = $configuracionessalasDao->insertConfiguracionessalas($configuracionessalasDto, $this->proveedor);
                            if ( $configuracionessalasDto != "" ) {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar la configuración de horarios'));
                            }
                        }
                        if ( $error ) {
                            break;
                        }
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('No se recibieron datos de salas para la configuración'));
                }
            }
            
            if ( !$error ) {
                /*
                 * Actualizar el horario de cada uno de los registro de la programacion de salas
                 * para el mes actual y el mes siguiente, en caso de que existan los registros
                 */
                $mesSiguiente = $mesActual + 1;
                $cadena = $mesActual . "," . $mesSiguiente;
                $orden = " AND p.cveMes IN(" . $cadena . ")";
                $programacionesDto = new ProgramacionesDTO();
                $programacionesDao = new ProgramacionesDAO();
                $programacionesDto->setAnio($anioActual);
                $programacionesDto->setCveJuzgado($horarioDto[0]->getCveJuzgado());
                $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, $orden, $this->proveedor);
                if ( $programacionesDto != "" ) {
                    foreach ( $programacionesDto as $programacion ) {
                        $programacionSalasDto = new ProgramacionsalasDTO();
                        $programacionSalasDao = new ProgramacionsalasDAO();
                        $programacionSalasDto->setIdProgramacion($programacion->getIdProgramacion());
                        $programacionSalasDto = $programacionSalasDao->selectProgramacionsalas($programacionSalasDto, '', $this->proveedor);
                        if ( $programacionSalasDto != "" ) {
                            foreach ( $programacionSalasDto as $programacionSala ) {
                                $fechaInicial = explode(" ", $programacionSala->getFechaInicio());
                                $fechaFinal = explode(" ", $programacionSala->getFechaTermino());
                                
                                $fechaInicio = $fechaInicial[0] . " " . $horarioDto[0]->getHorarioInicial();
                                $fechaTermino = $fechaFinal[0] . " " . $horarioDto[0]->getHorarioFinal();
                                
                                $tmpProgramacion = new ProgramacionsalasDTO();
                                $tmpProgramacion->setIdDisponibilidadSala($programacionSala->getIdDisponibilidadSala());
                                $tmpProgramacion->setFechaInicio($fechaInicio);
                                $tmpProgramacion->setFechaTermino($fechaTermino);
                                $tmpProgramacion = $programacionSalasDao->updateProgramacionsalas($tmpProgramacion, $this->proveedor);
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
            $cveAccion = 22;
            $observaciones = "UPDATE TABLE tblhorarios id: " . $horarioDto[0]->getCveHorario();
            
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
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