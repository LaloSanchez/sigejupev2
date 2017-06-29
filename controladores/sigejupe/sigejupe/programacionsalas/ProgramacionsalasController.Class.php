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
ini_set('max_execution_time', 300);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionsalas/ProgramacionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/condiciones/CondicionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/condiciones/CondicionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/configuracionessalas/ConfiguracionessalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/horarios/HorariosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/horarios/HorariosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

class ProgramacionsalasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionsalas($ProgramacionsalasDto) {
        $ProgramacionsalasDto->setIdDisponibilidadSala(strtoupper(str_ireplace("'", "", trim($ProgramacionsalasDto->getIdDisponibilidadSala()))));
        $ProgramacionsalasDto->setFechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacionsalasDto->getFechaInicio()))));
        $ProgramacionsalasDto->setFechaTermino(strtoupper(str_ireplace("'", "", trim($ProgramacionsalasDto->getFechaTermino()))));
        $ProgramacionsalasDto->setCveSala(strtoupper(str_ireplace("'", "", trim($ProgramacionsalasDto->getCveSala()))));
        $ProgramacionsalasDto->setIdProgramacion(strtoupper(str_ireplace("'", "", trim($ProgramacionsalasDto->getIdProgramacion()))));
        return $ProgramacionsalasDto;
    }

    public function selectProgramacionsalas($ProgramacionsalasDto, $proveedor = null) {
        $ProgramacionsalasDto = $this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasDao = new ProgramacionsalasDAO();
        $ProgramacionsalasDto = $ProgramacionsalasDao->selectProgramacionsalas($ProgramacionsalasDto, "", $proveedor);
        return $ProgramacionsalasDto;
    }

    public function selectAtencionsalas($ProgramacionsalasDto, $salas = "", $proveedor = null) {
        $ProgramacionsalasDto = $this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasDao = new ProgramacionsalasDAO();
        $ProgramacionsalasDto = $ProgramacionsalasDao->selectAtencionsalas($ProgramacionsalasDto, $salas, $proveedor);
//        print_r($ProgramacionsalasDto);
        return $ProgramacionsalasDto;
    }

    public function insertProgramacionsalas($ProgramacionsalasDto, $proveedor = null) {
        $ProgramacionsalasDto = $this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasDao = new ProgramacionsalasDAO();
        $ProgramacionsalasDto = $ProgramacionsalasDao->insertProgramacionsalas($ProgramacionsalasDto, $proveedor);
        return $ProgramacionsalasDto;
    }

    public function updateProgramacionsalas($ProgramacionsalasDto, $proveedor = null) {
        $ProgramacionsalasDto = $this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasDao = new ProgramacionsalasDAO();
        //$tmpDto = new ProgramacionsalasDTO();
        //$tmpDto = $ProgramacionsalasDao->selectProgramacionsalas($ProgramacionsalasDto,$proveedor);
        //if($tmpDto!=""){//$ProgramacionsalasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacionsalasDto = $ProgramacionsalasDao->updateProgramacionsalas($ProgramacionsalasDto, $proveedor);
        return $ProgramacionsalasDto;
        //}
        //return "";
    }

    public function deleteProgramacionsalas($ProgramacionsalasDto, $proveedor = null) {
        $ProgramacionsalasDto = $this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasDao = new ProgramacionsalasDAO();
        $ProgramacionsalasDto = $ProgramacionsalasDao->deleteProgramacionsalas($ProgramacionsalasDto, $proveedor);
        return $ProgramacionsalasDto;
    }

    /*
     * Método que permite obtener el detalle de la programación mensual de salas
     * por juzgado, mes y año, recíbe como parámetro un objeto de tipo Programaciones
     * para obtener el id de la Programación para el mes, Juzgado y año enviados
     * por el usuario y devuelve un objeto de tipo PorgramacionSalas con los datos
     * default en caso de no existir registros en la base de datos para la tabla tblprogramacionsalas
     * o bien, los datos para cada sala que pertenezca al juzgado almacenados en la bd
     */

    public function obtenerProgramacionsalas($ProgramacionesDto, $salas = "", $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $programacionesController = new ProgramacionesController();
        $programacionesDao = new ProgramacionesDAO();
        $datos = $programacionesDao->selectProgramaciones($ProgramacionesDto, "", $this->proveedor);
//        print_r($datos);
        $arrDias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        $fechaInicio = "";
        $fechaFin = "";
        $idProgramacion = 0;
        $cveJuzgado = 0;
        $dias = 0;
        $msg = array();
        /*
         * Revisar si ya existe la programación de acuerdo a los datos enviados, si ya existe
         * se almacenan en variables los datos: idProgramacion, fechaInicio y fechaFin
         */
        if (!$datos) {
            $programacionesDto = new ProgramacionesDTO();
            $programacionesDto = $programacionesController->ObtenerFechas($ProgramacionesDto, $this->proveedor);
            //print_r($programacionesDto);
            $dto = new ProgramacionesDTO();
            $dto = $programacionesController->insertProgramaciones($programacionesDto[0], $this->proveedor);

            $fechaInicio = $dto[0]->getFechaInicial();
            $fechaFin = $dto[0]->getFechaFinal();
            $idProgramacion = $dto[0]->getIdProgramacion();
            $cveJuzgado = $dto[0]->getCveJuzgado();
            /*
             * Cuando se inserte una nueva programacion, guardar en bitacora el 
             * registro insertado
             */
        } else {
            $fechaInicio = $datos[0]->getFechaInicial();
            $fechaFin = $datos[0]->getfechaFinal();
            $idProgramacion = $datos[0]->getIdProgramacion();
            $cveJuzgado = $datos[0]->getCveJuzgado();
        }
        //calcular los días que hay entre fechaInicio y fechaFin
        $dias = (strtotime($fechaInicio) - strtotime($fechaFin)) / 86400;
        $dias = abs($dias);
        $dias = floor($dias);
        $dias += 1;
        //echo $dias . "<br>";
        $semanas = $dias / 7;
        //echo $semanas . "<br>";
        //Obtener las salas que pertenecen al juzgado seleccionado
        $programacionSalasDto = new ProgramacionsalasDTO();
        $programacionSalasDto->setCveJuzgado($cveJuzgado);
        //print_r($programacionSalasDto);
        $datos = $this->selectAtencionsalas($programacionSalasDto, $salas, $this->proveedor);
//        echo "despues de select VALUE ->" . $datos . "<- VALUE";
        if (!$datos) {
            //$msg[] = array("Estatus" => "Error", "text" => "No hay horarios configurados para el juzgado seleccionado, favor de verificar");
            return $datos;
        } else {
            $dia = 0;
            $arregloDias = array();
            $arregloHoraInicio = array();
            $arregloHoraFin = array();
            $arregloIdHorario = array();
            $arregloSala = array();
            $arregloJuzgado = array();
            $arregloDesSala = array();
            $arregloDiaSemana = array();
            $arregloCondicion = array();
            $arregloIdCondicion = array();
            $arregloDia = array();
            $registros = $dias * count($datos);
            $numeroSemana = 0;
            //for ( $s = 0; $s < $semanas; $s++ ){
            /*
             * Se llenan los arreglos bidimencionales de la siguiente manera: para cada una de las salas
             * se va almacenando los valores correspondientes a las salas por cada uno 
             * de los días que hay entre fechaInicio y fechaFin
             */
            for ($n = 0; $n < $dias; $n++) {
                $fechaInicio = strtotime('+' . $dia . ' day', strtotime($fechaInicio));
                $fechaInicio = date('Y-m-d', $fechaInicio);
                $fechaTmp = explode("-", $fechaInicio);
                /*
                 * si el día de la semana es lunes, se incrementa en 1 la variable
                 * $numeroSemana, para indicar que un grupo de registros pertenece a 
                 * una semana en particular 
                 */
                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                if ($diaSemana == 1) {
                    $numeroSemana++;
                }
                for ($d = 0; $d < count($datos); $d++) {
                    $arregloDias[$n][$d] = $fechaInicio;
                    $arregloSala[$n][$d] = $datos[$d]->getCveSala();
                    $arregloJuzgado[$n][$d] = $datos[$d]->getCveJuzgado();
                    $arregloDesSala[$n][$d] = $datos[$d]->getDesSala();
                    $arregloDiaSemana[$n][$d] = $numeroSemana;
                    $arregloDia[$n][$d] = $arrDias[$diaSemana];
                    $arregloCondicion[$n][$d] = $datos[$d]->getDesCondicion();
                    $arregloHoraInicio[$n][$d] = $datos[$d]->getHorarioInicial();
                    $arregloHoraFin[$n][$d] = $datos[$d]->getHorarioFinal();
                    $arregloIdHorario[$n][$d] = $datos[$d]->getCveHorario();
                    $arregloIdCondicion[$n][$d] = $datos[$d]->getCveCondicion();
                }
                $dia = 1;
            }
            /*
             * Se requiere que el objeto retornado sea unidimencional, para ello, cada arreglo
             * se transforma a unidimencional
             */
            $dtoDias = array();
            $dtoSalas = array();
            $dtoJuzgado = array();
            $dtoDesSala = array();
            $dtoDiaSemana = array();
            $dtoCondicion = array();
            $dtoHoraInicio = array();
            $dtoHoraFin = array();
            $dtoIdHorario = array();
            $dtoIdCondicion = array();
            $dtoDia = array();
            foreach ($arregloDias as $k => $v) {
                foreach ($v as $t)
                    $dtoDias[] = $t;
            }
            foreach ($arregloSala as $k => $v) {
                foreach ($v as $t)
                    $dtoSalas[] = $t;
            }
            foreach ($arregloJuzgado as $k => $v) {
                foreach ($v as $t)
                    $dtoJuzgado[] = $t;
            }
            foreach ($arregloDesSala as $k => $v) {
                foreach ($v as $t)
                    $dtoDesSala[] = $t;
            }
            foreach ($arregloDiaSemana as $k => $v) {
                foreach ($v as $t)
                    $dtoDiaSemana[] = $t;
            }
            foreach ($arregloCondicion as $k => $v) {
                foreach ($v as $t)
                    $dtoCondicion[] = $t;
            }
            foreach ($arregloHoraInicio as $k => $v) {
                foreach ($v as $t)
                    $dtoHoraInicio[] = $t;
            }
            foreach ($arregloHoraFin as $k => $v) {
                foreach ($v as $t)
                    $dtoHoraFin[] = $t;
            }
            foreach ($arregloDia as $k => $v) {
                foreach ($v as $t)
                    $dtoDia[] = $t;
            }
            foreach ($arregloIdHorario as $k => $v) {
                foreach ($v as $t)
                    $dtoIdHorario[] = $t;
            }
            foreach ($arregloIdCondicion as $k => $v) {
                foreach ($v as $t)
                    $dtoIdCondicion[] = $t;
            }
            /*
             * llenar el objeto con los datos que se mostraran en pantalla para verificar
             * la disponibilidad de cada sala, en los días establecidos
             */
            $result = array();
            for ($a = 0; $a < count($dtoDias); $a++) {
                $dto[$a] = new ProgramacionsalasDTO();
                $dto[$a]->setCveJuzgado($dtoJuzgado[$a]);
                /* Verificar si ya existen los registros en la tabla tblprogramacionsalas
                 * para la sala y fechas de inicio y fin indicadas, en caso de no
                 * haber registros, se envían los datos obtenidos de la configuracion de salas
                 * si exisrte el registro, se envían los datos de fecha y hora registrados
                 * en la base de datos
                 */
                
                $dtoProgramacionSalas = new ProgramacionsalasDTO();
                $dtoProgramacionSalas->setCveSala($dtoSalas[$a]);
                $dtoProgramacionSalas->setFechaInicio($dtoDias[$a]);
                $dtoProgramacionSalas->setFechaTermino($dtoDias[$a]);
                $dtoProgramacionSalas->setIdProgramacion($idProgramacion);
                //print_r($dtoProgramacionSalas);
                $programacionSalas = new ProgramacionsalasDTO();
                $programacionSalas = $this->selectProgramacionsalas($dtoProgramacionSalas, $this->proveedor);
                if (!$programacionSalas) {
                    $dto[$a]->setIdDisponibilidadSala(0);
                    $fechaInicial = $dtoDias[$a] . " " . $dtoHoraInicio[$a];
                    $fechaTermino = $dtoDias[$a] . " " . $dtoHoraFin[$a];
                    $dto[$a]->setFechaInicio($fechaInicial);
                    $dto[$a]->setFechaTermino($fechaTermino);
                } else {
                    $dto[$a]->setIdDisponibilidadSala($programacionSalas[0]->getIdDisponibilidadSala());
                    $dto[$a]->setFechaInicio($programacionSalas[0]->getFechaInicio());
                    $dto[$a]->setFechaTermino($programacionSalas[0]->getFechaTermino());
                }
                //agregamos el día de la semana incluyendolo en la descripcon del juzgado
                
                $dto[$a]->setCveSala($dtoSalas[$a]);
                $dto[$a]->setDesSala($dtoDesSala[$a]);
                $dto[$a]->setDiaSemana($dtoDia[$a]);
                $dto[$a]->setDesCondicion($dtoCondicion[$a]);
                $dto[$a]->setIdProgramacion($idProgramacion);
                $dto[$a]->setCveHorario($dtoIdHorario[$a]);
                $dto[$a]->setCveCondicion($dtoIdCondicion[$a]);
            }
            return $dto;
        }
    }

    public function programacionSalas($ProgramacionesDto, $proveedor = null){
        //var_dump($ProgramacionesDto);
        $logger = new Logger("/../../logs/", "ProgramacionSalas");
        $logger->w_onError("**********COMIENZA PROCESO TRANSACCIONAL DE PROGRAMACIÓN DE SALAS**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $error = true;
        $msg = array();
        /*
         * Programacion automatica de salas
         */
        $dto = new ProgramacionSalasDTO();
        $controller = new ProgramacionsalasController();
        $dto = $controller->obtenerProgramacionsalas($ProgramacionesDto);
        //print_r($dto);
        //echo $dto[0]["Estatus"];
        if ( $dto != "" ) {
            if( count($dto) > 0 ) {
                for($n = 0; $n < count($dto); $n++){
                    $logger->w_onError("**********VERIFICAR SI EL REGISTRO EXISTE EN LA BASE DE DATOS**********");
                    if((int)$dto[$n]->getIdDisponibilidadSala() == 0){
                        $logger->w_onError("**********EL ID DE DISPONIBILIDAD SALA ES 0, SIGNIFICA QUE EL REGISTRO NO EXISTE**********");
                        //echo "<br>Se inserta: " . $dto[$n]->getIdProgramacion() . " - " . $dto[$n]->getCveJuzgado() . " - " . $dto[$n]->getCveSala() . " - " . $dto[$n]->getFechaInicio() . " - " . $dto[$n]->getFechaTermino();
                        $programacionSalasDto = new ProgramacionsalasDTO();
                        $programacionSalasDto->setFechaInicio($dto[$n]->getFechaInicio());
                        $programacionSalasDto->setFechaTermino($dto[$n]->getFechaTermino());
                        $programacionSalasDto->setCveSala($dto[$n]->getCveSala());
                        $programacionSalasDto->setIdProgramacion($dto[$n]->getIdProgramacion());
                        $programacionSalasDto->setCveCondicion($dto[$n]->getCveCondicion());
                        $programacionSalasDto->setCveHorario($dto[$n]->getCveHorario());
                        $logger->w_onError("**********ID DE PROGRAMACION: " . $dto[$n]->getIdProgramacion());
                        $logger->w_onError("**********CVE SALA: " . $dto[$n]->getCveSala());
                        $logger->w_onError("**********CVE CONDICION: " . $dto[$n]->getCveCondicion());
                        $logger->w_onError("**********CVE HORARIO: " . $dto[$n]->getCveHorario());
                        $logger->w_onError("**********FECHA INICIO: " . $dto[$n]->getFechaInicio());
                        $logger->w_onError("**********FECHA TERMINO: " . $dto[$n]->getFechaTermino());

                        $programacionSalasDao = new ProgramacionsalasDAO();
                        $programacionSalasDto = $programacionSalasDao->insertProgramacionsalas($programacionSalasDto, $this->proveedor);
                        if($programacionSalasDto == ""){
                            $error = true;
                            $logger->w_onError("**********OCURRIÓ UN ERROR AL INSERTAR EL REGISTRO**********");
                            $msg[] = array("Ocurrio un error al insertar el registro de programacion de salas");
                        } else {
                            $error = false;
                            $logger->w_onError("**********EL REGISTRO FUE INSERTADO CORRECTAMENTE**********");
                        }
                        if($error){
                            break;
                            $logger->w_onError("**********OCURRIÓ UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK**********");
                        }
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE ENCONTRARON REGISTROS DE SALAS O NO HAY HORARIOS ASIGNADOS**********");
                $msg[] = array("No se encontraron registros de salas o no hay horarios asignados");
            }
        } else {
            $error = true;
            $msg[] = array("El juzgado no cuenta con una configuracion de horarios, favor de verificar");
            $logger->w_onError("**********EL JUZGADO NO CUENTA CON CONFIGURACION DE HORARIOS**********");
        }
        
        if ($proveedor == null) {
            if (!$error) {
                $logger->w_onError("**********TERMINA EL PROCESO CORRECTAMENTE**********");
                $this->proveedor->execute("COMMIT");
                $result = array("status" => "ok", "text" => "La programacion de salas se guardo correctamente");
                
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********TERMINA EL PROCESO CON ALGUN ERROR, APLICAR ROLLBACK**********");
                $result = array("status" => "error", "text" => $msg);
                
            }
        }
        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return $result;
    }
    
    public function reporteProgramacionSalas($programacionesDto, $programacionsalasDto = "", $proveedor = null){
        $datos = array();
        $result = array();
        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $programacionesDao = new ProgramacionesDAO();
        $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, "", $this->proveedor);

        if ($programacionesDto != "") {
            $programacionesDto = $programacionesDto[0];
            $atencionSalasDto = new AtencionsalasDTO();
            $atencionSalasDto->setCveJuzgado($programacionesDto->getCveJuzgado());
            if($programacionsalasDto->getCveSala() != ""){
                $atencionSalasDto->setCveSala($programacionsalasDto->getCveSala());
            }
            $atencionSalasDao = new AtencionsalasDAO();
            $atencionSalasDto = $atencionSalasDao->selectAtencionsalas($atencionSalasDto, "", $this->proveedor);
            
            if($atencionSalasDto != ""){
                for ($index = 0; $index < count($atencionSalasDto); $index++) {

                    $salasDto = new SalasDTO();
                    $salasDto->setCveSala($atencionSalasDto[$index]->getCveSala());
                    $salasDto->setActivo("S");
                    $salasDao = new SalasDAO();
                    $salasDto = $salasDao->selectSalas($salasDto, "", $this->proveedor);
                    //var_dump($salasDto);
                    if (count($salasDto) > 0) {
                        $salasDto = $salasDto[0];
                        
                        $programacionSalasDto = new ProgramacionsalasDTO();
                        $programacionSalasDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                        $programacionSalasDto->setCveSala($salasDto->getCveSala());
                        $programacionSalasDao = new ProgramacionsalasDAO();
                        if($programacionsalasDto->getFechaInicio() != ""
                           && $programacionsalasDto->getFechaTermino() != ""){
                            $orden = " AND SUBSTRING(fechaInicio, 1 ,10) >= '" . $programacionsalasDto->getFechaInicio() . "' 
                                       AND SUBSTRING(fechaInicio, 1 ,10) <= '" . $programacionsalasDto->getFechaTermino() . "' 
                                    ORDER BY fechaInicio";
                        } else {
                            $orden = " ORDER BY fechaInicio";
                        }
                        
                        $programacionSalasDto = $programacionSalasDao->selectProgramacionsalas($programacionSalasDto, $orden, $this->proveedor);
                        
                        if ($programacionSalasDto != "") {
                            //echo $salasDto->getDesSala() . "<br>";
                            
                            foreach ($programacionSalasDto as $programacionsalaDto) {
                                //echo "Horario: " . $programacionsalaDto->getFechaInicio() . " " . $programacionsalaDto->getFechaTermino() . "<br>";
                                $condicionesDto = new CondicionesDTO();
                                $condicionesDto->setCveCondicion($programacionsalaDto->getCveCondicion());
                                $condicionesDao = new CondicionesDAO();
                                $condicionesDto = $condicionesDao->selectCondiciones($condicionesDto);
                                if ($condicionesDto != ""){
                                   $condicion = $condicionesDto[0]->getDesCondicion();
                                } else {
                                    $condicion = "";
                                }
                                //echo "ROl: " .  $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "<br>";
                                $fechaAux = explode(" ",$programacionsalaDto->getFechaInicio());
                                $fechaTmp = explode("-", $fechaAux[0]);
                                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                $datos[] = array(
                                    "FechaInicio" => $programacionsalaDto->getFechaInicio(),
                                    "FechaFin" => $programacionsalaDto->getFechaTermino(),
                                    "Sala" => utf8_encode($salasDto->getDesSala()),
                                    "IdSala" => $salasDto->getCveSala(),
                                    "IdDisponibilidadSala" => $programacionsalaDto->getIdDisponibilidadSala(),
                                    "Condicion" => $condicion,
                                    "Dia" => $dias[$diaSemana]
                                );
                            }
                        }
                    } else{
                        continue;
                    }
                }
            
            }
        } else {
            $datos = null;
        }
        //print_r($datos);
        if(count($datos) > 0){
            array_multisort($datos, SORT_ASC);
        }
        return $datos;
    }
    
    public function obtenerSala(){
        
    }

    public function programacionSalasManual($programacionesDto, $programacionSalasDto, $proveedor = null){
        $idProgramacionesInsert = array();
        $idProgramacionesUpdate = array();
        $idHorario = array();
        $arrHorarioInicial = array();
        $arrHorarioFinal = array();
        $condicion = 1;
        $mensajeError = "";
        $dias = array();
        $logger = new Logger("/../../logs/", "ProgramacionSalas");
        $logger->w_onError("**********COMIENZA PROCESO TRANSACCIONAL DE PROGRAMACIÓN MANUAL DE SALAS**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $error = true;
        $programacionDto = new ProgramacionesDTO();
        $programacionesController = new ProgramacionesController();
        $programacionDto = $programacionesController->selectProgramaciones($programacionesDto);
        $logger->w_onError("**********BUSCAMOS LA PROGRAMACION MENSUAL CON LOS DATOS ENVIADOS:");
        $logger->w_onError("**********JUZGADO : " . $programacionesDto->getCveJuzgado());
        $logger->w_onError("**********MES : " . $programacionesDto->getCveMes());
        $logger->w_onError("**********AÑO : " . $programacionesDto->getAnio());
        
        if($programacionDto != "") {
            $programacionDto = $programacionDto[0];
            $logger->w_onError("**********SE OBTUVO EL ID DE PROGRAMACION : " . $programacionDto->getIdProgramacion());
            $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA INICIAR EL CICLO");
            $fechaInicio = $programacionSalasDto->getFechaInicio();
            $fechaInicialAux = explode(" ", $fechaInicio);
            $fechaInicial = $fechaInicialAux[0];
            $horaInicial = $fechaInicialAux[1];
            $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
            $fechaFin = $programacionSalasDto->getFechaTermino();
            $fechaFinalAux = explode(" ", $fechaFin);
            $fechaFinal = $fechaFinalAux[0];
            $horaFinal = $fechaFinalAux[1];
            $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);
            while($fechaInicial <= $fechaFinal){
                $dias[] = $fechaInicial;
                $fechaInicialTmp = strtotime ( '+1 day' , strtotime ( $fechaInicial ) );
                $fechaInicial = date('Y-m-d', $fechaInicialTmp);
            }
            $logger->w_onError("**********SE DETERMINA LA CONFIGURACION PARA LA SALA");
            $configuracionessalasDto = new ConfiguracionessalasDTO();
            $configuracionessalasDto->setCveSala($programacionSalasDto->getCveSala());
            $configuracionessalasDto->setActivo("S");
            $configuracionessalasDao = new ConfiguracionessalasDAO();
            $configuracionessalasDto = $configuracionessalasDao->selectConfiguracionessalas($configuracionessalasDto,"", $this->proveedor);
            if($configuracionessalasDto != ""){
                for($c = 0; $c < count($configuracionessalasDto); $c++){
                    $horariosDto = new HorariosDTO();
                    $horariosDto->setActivo("S");
                    $horariosDto->setCveHorario($configuracionessalasDto[$c]->getCveHorario());
                    $horariosDto->setCveJuzgado($programacionDto->getCveJuzgado());
                    $horariosDao = new HorariosDAO();
                    $horariosDto = $horariosDao->selectHorarios($horariosDto,"",$this->proveedor);
                    if($horariosDto != ""){
                        $idHorario[] = $horariosDto[0]->getCveHorario();
                        $arrHorarioInicial[] = $horariosDto[0]->getHorarioInicial();
                        $arrHorarioFinal[] = $horariosDto[0]->getHorarioFinal();
                        break;
                    }
                }
                if(count($idHorario) > 0){
                    $logger->w_onError("**********OBTENER EL ID DE CONDICON DE LA SALA");
                    $atencionSalasDto = new AtencionsalasDTO();
                    $atencionSalasDto->setCveJuzgado($programacionDto->getCveJuzgado());
                    $atencionSalasDto->setCveSala($programacionSalasDto->getCveSala());
                    $atencionSalasDao = new AtencionsalasDAO();
                    $atencionSalasDto = $atencionSalasDao->selectAtencionsalas($atencionSalasDto, "", $this->proveedor);
                    if($atencionSalasDto != ""){
                        $condicion = $atencionSalasDto[0]->getCveCondicion();
                        $logger->w_onError("**********ID CONDICION: " . $condicion);
                    } else {
                        $error = true;
                        $logger->w_onError("**********ERROR AL OBTENER LA CLAVE DE CONDICION DE LA SALA");
                        $mensajeError = "NO SE PUDO OBTENER LA CLAVE DE CONDICION PARA LA SALA";
                    }
                    if(count($dias) > 0){
                        for($n = 0; $n < count($dias); $n++){
                            $logger->w_onError("**********VERIFICAR SI EL REGISTRO EXISTE EN LA BASE DE DATOS**********");
                            $programacionsalasDto = new ProgramacionsalasDTO();
                            $programacionsalasDto->setFechaInicio($dias[$n]);
                            $programacionsalasDto->setFechaTermino($dias[$n]);
                            $programacionsalasDto->setCveSala($programacionSalasDto->getCveSala());
                            $programacionsalasDto->setIdProgramacion($programacionDto->getIdProgramacion());
                            $programacionsalasDao = new ProgramacionsalasDAO();
                            $programacionsalasDto = $programacionsalasDao->selectProgramacionsalas($programacionsalasDto,"", $this->proveedor);
                            if($programacionsalasDto == ""){
                                $logger->w_onError("**********SE DETERMINA QUE EL REGISTRO PARA EL DÍA " . $dias[$n] . " NO EXISTE, POR LO TANTO SE INSERTARA");
                                //echo "<br>Se inserta: " . $dto[$n]->getIdProgramacion() . " - " . $dto[$n]->getCveJuzgado() . " - " . $dto[$n]->getCveSala() . " - " . $dto[$n]->getFechaInicio() . " - " . $dto[$n]->getFechaTermino();
                                $fechaHoraInicio = $dias[$n] . " " . $arrHorarioInicial[0];
                                $fechaHoraFin = $dias[$n] . " " . $arrHorarioFinal[0];
                                $programacionesSalasDto = new ProgramacionsalasDTO();
                                $programacionesSalasDto->setFechaInicio($fechaHoraInicio);
                                $programacionesSalasDto->setFechaTermino($fechaHoraFin);
                                $programacionesSalasDto->setCveSala($programacionSalasDto->getCveSala());
                                $programacionesSalasDto->setIdProgramacion($programacionDto->getIdProgramacion());
                                $programacionesSalasDto->setCveCondicion($condicion);
                                $programacionesSalasDto->setCveHorario($idHorario[0]);

                                $logger->w_onError("**********ID DE PROGRAMACION: " . $programacionDto->getIdProgramacion());
                                $logger->w_onError("**********CVE SALA: " . $programacionSalasDto->getCveSala());
                                $logger->w_onError("**********CVE CONDICION: " . $condicion);
                                $logger->w_onError("**********CVE HORARIO: " . $idHorario[0]);
                                $logger->w_onError("**********FECHA INICIO: " . $fechaHoraInicio);
                                $logger->w_onError("**********FECHA TERMINO: " . $fechaHoraFin);

                                $programacionSalasDao = new ProgramacionsalasDAO();
                                $programacionesSalasDto = $programacionSalasDao->insertProgramacionsalas($programacionesSalasDto, $this->proveedor);
                                if($programacionesSalasDto == ""){
                                    $error = true;
                                    $logger->w_onError("**********OCURRIÓ UN ERROR AL INSERTAR EL REGISTRO");
                                    $mensajeError = "NO SE PUDO INSERTAR EL REGISTRO";
                                } else {
                                    $error = false;
                                    $logger->w_onError("**********EL REGISTRO FUE INSERTADO CORRECTAMENTE");
                                    $idProgramacionesInsert[] = $programacionesSalasDto[0]->getIdDisponibilidadSala();
                                }
                                if($error){
                                    break;
                                    $logger->w_onError("**********OCURRIÓ UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                                }

                            } else {
                                $logger->w_onError("**********EL ID DE DISPONIBILIDAD SALA ES " . $programacionsalasDto[0]->getIdDisponibilidadSala() . ", SE ACTUALIZARAN LOS DATOS");
                                $fechaHoraInicio = $dias[$n] . " " . $horaInicial;
                                $fechaHoraFin = $dias[$n] . " " . $horaFinal;
                                $programacionesSalasDto = new ProgramacionsalasDTO();
                                $programacionesSalasDto->setIdDisponibilidadSala($programacionsalasDto[0]->getIdDisponibilidadSala());
                                $programacionesSalasDto->setFechaInicio($fechaHoraInicio);
                                $programacionesSalasDto->setFechaTermino($fechaHoraFin);
                                $programacionesSalasDto->setCveSala($programacionSalasDto->getCveSala());
                                $programacionesSalasDto->setIdProgramacion($programacionDto->getIdProgramacion());

                                $logger->w_onError("**********ID DE DISPONIBILIDAD SALA: " . $programacionsalasDto[0]->getIdDisponibilidadSala());
                                $logger->w_onError("**********ID DE PROGRAMACION: " . $programacionDto->getIdProgramacion());
                                $logger->w_onError("**********CVE SALA: " . $programacionSalasDto->getCveSala());
                                $logger->w_onError("**********FECHA INICIO: " . $fechaHoraInicio);
                                $logger->w_onError("**********FECHA TERMINO: " . $fechaHoraFin);
                                $programacionSalasDao = new ProgramacionsalasDAO();
                                $programacionesSalasDto = $programacionSalasDao->updateProgramacionsalas($programacionesSalasDto, $this->proveedor);
                                if($programacionesSalasDto == ""){
                                    $error = true;
                                    $logger->w_onError("**********OCURRIÓ UN ERROR AL ACTUALIZAR EL REGISTRO");
                                    $mensajeError = "NO SE PUDO ACTUALIZAR EL REGISTRO";
                                } else {
                                    $error = false;
                                    $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                                    $idProgramacionesUpdate[] = $programacionesSalasDto[0]->getIdDisponibilidadSala();
                                }
                                if($error){
                                    break;
                                    $logger->w_onError("**********OCURRIÓ UN ERROR AL ACTUALIZAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                                }
                            }
                        }
                    } else {
                        $error = true;
                        $logger->w_onError("**********NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECIONADAS");
                        $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS";
                    }
                } else {
                    $error = true;
                    $logger->w_onError("**********NO SE ENCONTRARON HORARIOS PARA LA SALA, TERMINA EL PROCESO");
                    $mensajeError = "NO SE ENCONTRARON HORARIOS PARA LA SALA";
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE ENCONTRO LA CONFIGURACION DE LA SALA, TERMINA EL PROCESO");
                $mensajeError = "NO SE ENCONTRO LA CONFIGURACION PARA LA SALA SELECCIONADA";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE ENCONTRO EL ID DE PROGRAMACION, TERMINA EL PROCESO");
            $mensajeError = "NO SE ENCONTRO LA PROGRAMACION PARA EL JUZGADO, MES Y AÑO SELECCIONADOS";
        }
        if ($proveedor == null) {
            if (!$error) {
                if(count($idProgramacionesInsert) > 0){
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",",$idProgramacionesInsert);
                    $cveAccion = 17;
                    $descripcion = "INSERT tabla tblprogramacionsalas registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosController();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                } else if(count($idProgramacionesUpdate) > 0){
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",",$idProgramacionesUpdate);
                    $cveAccion = 18;
                    $descripcion = "UPDATE tabla tblprogramacionsalas registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosController();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                }
                $logger->w_onError("**********TERMINA EL PROCESO CORRECTAMENTE**********");
                $this->proveedor->execute("COMMIT");
                return true;
            } else {
                $this->proveedor->execute("ROLLBACK");
                return false;
            }
        }
        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }
    
    public function bajaProgramacionSalasManual($programacionesDto, $programacionSalasDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionSalas");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO FISICO DE PROGRAMACION DE SALAS**********");
        $idProgramacionSalas = array();
        $dias = array();
        $error = true;
        $programacionDto = new ProgramacionesDTO();
        $programacionesController = new ProgramacionesController();
        $programacionDto = $programacionesController->selectProgramaciones($programacionesDto);
        $logger->w_onError("**********BUSCAMOS LA PROGRAMACION MENSUAL CON LOS DATOS ENVIADOS:");
        $logger->w_onError("**********JUZGADO : " . $programacionesDto->getCveJuzgado());
        $logger->w_onError("**********MES : " . $programacionesDto->getCveMes());
        $logger->w_onError("**********AÑO : " . $programacionesDto->getAnio());
        
        if($programacionDto != ""){
            $programacionDto = $programacionDto[0];
            $logger->w_onError("**********SE OBTUVO EL ID DE PROGRAMACION : " . $programacionDto->getIdProgramacion());
            $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
            $fechaInicial = $programacionSalasDto->getFechaInicio();
            $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
            $fechaFinal = $programacionSalasDto->getFechaTermino();
            $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);
            while($fechaInicial <= $fechaFinal){
                $dias[] = $fechaInicial;
                $fechaInicialTmp = strtotime ( '+1 day' , strtotime ( $fechaInicial ) );
                $fechaInicial = date('Y-m-d', $fechaInicialTmp);
            }
            //print_r($dias);
            $programacionsalasDto = new ProgramacionsalasDTO();
            $programacionsalasDto->setCveSala($programacionSalasDto->getCveSala());
            $programacionsalasDto->setIdProgramacion($programacionDto->getIdProgramacion());
            $programacionSalasDao = new ProgramacionsalasDAO();
            $programacionsalasDto = $programacionSalasDao->selectProgramacionsalas($programacionsalasDto, ' ORDER BY fechaInicio ', $this->proveedor);
            $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION SALAS");
            $logger->w_onError("**********CVE SALA: " . $programacionSalasDto->getCveSala());
            $logger->w_onError("**********ID PROGRAMACION: " . $programacionDto->getIdProgramacion());
            if($programacionsalasDto != ""){
                $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
                for($n = 0; $n < count($programacionsalasDto); $n++){
                    $dia = $programacionsalasDto[$n]->getFechaInicio();
                    //echo $dia . "<br>";
                    $fechaInicio = explode(" ", $dia);
                    $fechaTmp = $fechaInicio[0];
                    //echo $fechaTmp . "<br>";
                    if(in_array($fechaTmp, $dias)){
                        $daoProgramacionSalas = new ProgramacionsalasDAO();
                        $eliminar = $daoProgramacionSalas->deleteProgramacionsalas($programacionsalasDto[$n], $this->proveedor);
                        if($eliminar){
                            $error = false;
                            $idProgramacionSalas[] = $programacionsalasDto[$n]->getIdDisponibilidadSala();
                            $logger->w_onError("**********SE BORRA FISICAMENTE EL REGISTRO CON ID DE PROGRAMACION SALA: " . $programacionsalasDto[$n]->getIdDisponibilidadSala());
                        } else {
                            $error = true;
                            $logger->w_onError("**********ERROR AL BORRAR FISICAMENTE EL REGISTRO CON ID DE PROGRAMACION SALAS: " . $programacionsalasDto[$n]->getIdDisponibilidadSala());
                            $mensajeError = "NO SE PUDO BORRAR FISICAMENTE EL REGISTRO";
                        }
                    } else {
                        $logger->w_onError("**********NO SE DEBEN ELIMINAR LOS REGISTROS DE PROGRAMACIONES EN LA FECHA: " . $fechaTmp);
                        continue;
                    }
                    if($error){
                        break;
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION SALAS, TERMINA EL PROCESO");
                $mensajeError = "NO HAY REGISTROS A ELIMINAR";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE ENCONTRO EL ID DE PROGRAMACION, TERMINA EL PROCESO");
            $mensajeError = "NO SE ENCONTRO LA PROGRAMACION PARA EL JUZGADO, MES Y AÑO SELECCIONADOS";
        }
        if ($proveedor == null) {
            if (!$error) {
                $this->proveedor->execute("COMMIT");
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 20;
                $programacionSalas = implode(",", $idProgramacionSalas);
                $descripcion = "borrado fisico en tblprogramacionsalas idDisponibilidadSala: " . $programacionSalas;
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
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount"=>"1","text"=>"REGISTROS ELIMINADOS DE FORMA CORRECTA"));
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO UN ERROR, SE DESHACEN LOS CAMBIOS EN LA BASE DE DATOS Y TERMINA EL PROCESO");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL BORRAR LOS REGISTROS: " . $mensajeError));
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }
    
}
?>