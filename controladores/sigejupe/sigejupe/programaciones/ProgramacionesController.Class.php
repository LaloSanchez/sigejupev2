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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionsalas/ProgramacionsalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ultimoroljuzgador/UltimoroljuzgadorController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class ProgramacionesController {
    private $proveedor;
    public function __construct() {
    }
    public function validarProgramaciones($ProgramacionesDto){
        $ProgramacionesDto->setIdProgramacion(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getIdProgramacion()))));
        $ProgramacionesDto->setCveMes(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getCveMes()))));
        $ProgramacionesDto->setAnio(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getAnio()))));
        $ProgramacionesDto->setFechaInicial(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getFechaInicial()))));
        $ProgramacionesDto->setFechaFinal(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getFechaFinal()))));
        $ProgramacionesDto->setFechaRegistro(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getFechaRegistro()))));
        $ProgramacionesDto->setFechaActualizacion(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getFechaActualizacion()))));
        $ProgramacionesDto->setCveJuzgado(strtoupper(str_ireplace("'","",trim($ProgramacionesDto->getCveJuzgado()))));
        return $ProgramacionesDto;
    }
    public function selectProgramaciones($ProgramacionesDto, $param = null,$proveedor=null){
        $ProgramacionesDto=$this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesDao = new ProgramacionesDAO();
        $order = " ORDER BY p.anio, p.cveMes";
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
        $ProgramacionesDto = $ProgramacionesDao->selectProgramaciones($ProgramacionesDto, $order,null);
        return $ProgramacionesDto;
    }
    public function insertProgramaciones($ProgramacionesDto,$proveedor=null){
        $ProgramacionesDto=$this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesDao = new ProgramacionesDAO();
        $ProgramacionesDto = $ProgramacionesDao->insertProgramaciones($ProgramacionesDto,$proveedor);
        return $ProgramacionesDto;
    }
    public function updateProgramaciones($ProgramacionesDto,$proveedor=null){
        $ProgramacionesDto=$this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesDao = new ProgramacionesDAO();
        //$tmpDto = new ProgramacionesDTO();
        //$tmpDto = $ProgramacionesDao->selectProgramaciones($ProgramacionesDto,$proveedor);
        //if($tmpDto!=""){//$ProgramacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ProgramacionesDto = $ProgramacionesDao->updateProgramaciones($ProgramacionesDto,$proveedor);
        return $ProgramacionesDto;
        //}
        //return "";
    }
    public function deleteProgramaciones($ProgramacionesDto,$proveedor=null){
        $ProgramacionesDto=$this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesDao = new ProgramacionesDAO();
        $ProgramacionesDto = $ProgramacionesDao->deleteProgramaciones($ProgramacionesDto,$proveedor);
        return $ProgramacionesDto;
    }
    //M√©todo para obtener la fecha inicial y la fecha final de un mes seleccionado
    //tomando en cuenta que se deben tomar semanas completas
    public function ObtenerFechas($programacionesDto,$proveedor=null){
        $dto = new ProgramacionesDTO();
        $cveMes = $programacionesDto->getCveMes();
        $anio = $programacionesDto->getAnio();
        $cveJuzgado = $programacionesDto->getCveJuzgado();
        $idProgramacion = "";
        switch($cveMes) {
            case '1': {$mesAnterior = 12; $anioAnterior = $anio - 1;} 
                break;
            default : {$mesAnterior = $cveMes - 1; $anioAnterior = $anio;} 
                break;
        }
        //revisar la fecha final del √∫ltimo registro de programaciones del mes
        //inmediato anterior
        $dto->setCveJuzgado($cveJuzgado);
        $dto->setAnio($anioAnterior);
        $dto->setCveMes($mesAnterior);
        $programacionesDao = new ProgramacionesDAO();
        $orden = " order by idProgramacion desc limit 1";
        $datos = $programacionesDao->selectProgramaciones($dto, $orden, $proveedor);
        //Si no existe el registro, se calcular√° la fecha de inicio para el mes seleccionado
        //tomando en cuenta que los meses son en semanas completas
        if (!$datos ) {
            //echo 'No hay datos<br>';
            $diaInicio = '01';
            //consultar el d√≠a de la semana para la fecha de inicio del mes
            $diaSemana = date("w",mktime(0,0,0,$cveMes,$diaInicio,$anio));
            //echo $diaSemana.'<br>';
            //para obtener la semana completa, se calcula el primer lunes a partir del
            //d√≠a 1 de cada mes
            if ( $diaSemana == 0 ) {
                $agregarDias = 1;
            } else if ( $diaSemana == 1 ) {
                $agregarDias = 0;
            } else {
                $agregarDias = (7 - $diaSemana) + 1;
            }
            $fecha = $anio . '-' . $cveMes . '-' . $diaInicio;
            $diaAuxiliar = strtotime ( '+' . $agregarDias . ' day' , strtotime ( $fecha ) );
            $primerDia = date('Y-m-d', $diaAuxiliar);
            $ultimoDia = date("Y-m-d",(mktime(0,0,0,$cveMes+1,1,$anio)-1));

        } else {
            //echo 'Si hay datos<br>';
            $primerDia = strtotime ( '+1 day' , strtotime ( $datos[0]->getFechaFinal() ) );
            $primerDia = date('Y-m-d', $primerDia);
            $ultimoDia = date("Y-m-d",(mktime(0,0,0,$cveMes+1,1,$anio)-1));
        }
        //Verificar que el d√≠a de la ultima fecha sea domingo, si no es domingo, sumar
        //n n√∫mero de d√≠as hasta llegar a domingo para completar la semana
        $fechaTmp = explode("-",$ultimoDia);
        $diaSemana = date("w",mktime(0,0,0,$fechaTmp[1],$fechaTmp[2],$fechaTmp[0]));
        if ( $diaSemana == 0 ) {
            $diasSumar = 0;
        } else {
            $diasSumar = 7 - $diaSemana;
        }
        if ( $diasSumar > 0 ) {
            $diaAuxiliar = strtotime ( '+' . $diasSumar . ' day' , strtotime ( $ultimoDia ) );
            $ultimoDia = date('Y-m-d', $diaAuxiliar);
        }
        $fechasDto[0] = new ProgramacionesDTO();
        $fechasDto[0]->setIdProgramacion($idProgramacion);
        $fechasDto[0]->setCveMes($cveMes);
        $fechasDto[0]->setAnio($anio);
        $fechasDto[0]->setFechaInicial($primerDia);
        $fechasDto[0]->setFechaFinal($ultimoDia);
        $fechasDto[0]->setCveJuzgado($cveJuzgado);
        return $fechasDto;
    }
    
    public function agregarProgramacionMensual($programacionesDto,$proveedor=null){
        
        $result = array();
        $msg = array();
        $listaResultados = array();
        /* $controller = new ProgramacionesController();
          $datos = $controller->selectProgramaciones($programacionesDto); */
        $dto = new ProgramacionesDTO();
        $dto->setAnio($programacionesDto->getAnio());
        $dto->setCveJuzgado($programacionesDto->getCveJuzgado());
        $dto->setCveMes($programacionesDto->getCveMes());

        $controller = new ProgramacionesController();
        $datos = $controller->selectProgramaciones($dto);
        //verificar si el registro ya existe en la base de datos, si no existe se inserta
        //si existe, enviar un mensaje al usuario indicando que los datos ya existen
        if (!$datos) {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($programacionesDto->getCveJuzgado());
            
            $programacionjuzgadoresController = new ProgramacionjuzgadoresController();
            $programacionesDto = $programacionjuzgadoresController->programacion($juzgadosDto, $programacionesDto);
            //$programacionesDto=$programacionesFacade->insertProgramaciones($programacionesDto);
            //echo $programacionesDto;
            $datosProgramaciones = json_decode($programacionesDto);
            if(isset($datosProgramaciones->totalCount) && $datosProgramaciones->totalCount > 0){
                $msg[] = array("La programacion se genero correctamente");
                
//                $idProgramaciones = $datosProgramaciones->data[0]->idProgramacion;
//                $mes = $datosProgramaciones->data[0]->cveMes;
//                $anio = $datosProgramaciones->data[0]->anio;
//                $juzgado = $datosProgramaciones->data[0]->cveJuzgado;
//                $dto = new ProgramacionesDTO();
//                $dto->setAnio($anio);
//                $dto->setCveMes($mes);
//                $dto->setCveJuzgado($juzgado);
//                $programacionSalas = new ProgramacionsalasController();
//                $datosProgramacionsalas = $programacionSalas->programacionSalas($dto);
//                if($datosProgramacionsalas["status"] == "ok"){
//                    
//                } else {
//                    $msg[] = array($datosProgramacionsalas["text"]);
//                }
                //registrar en bitacora la insercion realizada en tblprogramaciones
                if ( $datosProgramaciones->data[0] != "" ) {
                    $resultado = array(
                        "idProgramacion" => $datosProgramaciones->data[0]->idProgramacion,
                        "cveMes" => $datosProgramaciones->data[0]->cveMes,
                        "anio" => $datosProgramaciones->data[0]->anio,
                        "cveJuzgado" => $datosProgramaciones->data[0]->cveJuzgado
                    );
                    array_push($listaResultados, $resultado);
                }
                $result = array("totalCount" => 1, "text" => $msg, "data" => $listaResultados);
                
            } else {
                $msg[] = array($datosProgramaciones);
                $result = array("totalCount" => 0, "text" => $msg);
            }
        } else {
            $msg[] = array("La programacion ya existe para el mes y juzgado seleccionados! ");
            //si a˙n no se ha generado la programacion menusla de salas, agregar los registros
            /*$dto = new ProgramacionesDTO();
            $dto->setAnio($datos[0]->getAnio());
            $dto->setCveMes($datos[0]->getCveMes());
            $dto->setCveJuzgado($datos[0]->getCveJuzgado());
            $programacionSalas = new ProgramacionsalasController();
            $datosProgramacionsalas = $programacionSalas->programacionSalas($dto);
            if($datosProgramacionsalas["status"] == "ok"){
                //registrar en bitacora la insercion realizada en tblprogramaciones
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 17;
                $observaciones = "INSERT TABLA tblprogramacionsalas idProgramacion: " . $datos[0]->getidProgramacion();
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                //$bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                //$bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertar = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                $msg[] = array("Programacion de salas guardada correctamente");
                $result = array("totalCount" => 1, "text" => $msg);
            } else {
                $msg[] = array($datosProgramacionsalas["text"]);
                $result = array("totalCount" => 0, "text" => $msg);
            }*/
            $result = array("totalCount" => 0, "text" => $msg);
        }
        
        return json_encode($result);
        
    }
    
    public function eliminarProgramaciones($ProgramacionesDto,$proveedor=null){
        $logger = new Logger("/../../logs/", "Programaciones");
        $idUltimoJuzgador = array();
        $idProgramacionJuzgador = array();
        $idProgramacionSala = array();
        $logger->w_onError("**********COMIENZA PROCESO TRANSACCIONAL DE BORRADO FÕSICO DE PROGRAMACIONES**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $error = array();
        $bandera = true;
        $ultimoRolJuzgadorDto = new UltimoroljuzgadorDTO();
        $ultimoRolJuzgadorDto->setIdProgramacion($ProgramacionesDto->getIdProgramacion());
        $roljuzgador = new UltimoroljuzgadorDAO();
        $ultimoRolJuzgadorDto = $roljuzgador->selectUltimoroljuzgador($ultimoRolJuzgadorDto,"", $this->proveedor);
        $logger->w_onError("**********VERIFICAR SI EXISTEN REGISTROS EN TBLULTIMOROLJUZGADOR CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
        if(!$ultimoRolJuzgadorDto){
            $logger->w_onError("**********NO SE ENCONTRARON REGISTROS EN TBLULTIMOROLJUZGADOR CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
            $error[] = false;
        } else {
            for($n = 0; $n < count($ultimoRolJuzgadorDto); $n++){
                $dtoUltimorolJuzgador = new UltimoroljuzgadorDTO();
                $dtoUltimorolJuzgador->setIdUltimoRolJuzgador($ultimoRolJuzgadorDto[$n]->getIdUltimoRolJuzgador());
                $borradoUltimoRolJuzgador = $roljuzgador->deleteUltimoroljuzgador($dtoUltimorolJuzgador,$this->proveedor);
                if ($borradoUltimoRolJuzgador) {
                    $error[] = false;
                    $logger->w_onError("**********BORRADO FÕSICO EN TBLULTIMOROLJUZGADOR CON IDULTIMOROLJUZGADOR: " . $ultimoRolJuzgadorDto[$n]->getIdUltimoRolJuzgador() . "**********");
                    $idUltimoJuzgador[] = $ultimoRolJuzgadorDto[$n]->getIdUltimoRolJuzgador();
                } else {
                    $error[] = true;
                    $logger->w_onError("**********OCURRI” UN ERROR AL BORRAR EL REGISTRO CON IDULTIMOROLJUZGADOR: " . $ultimoRolJuzgadorDto[$n]->getIdUltimoRolJuzgador() . "**********");
                }
            }
            if(!in_array(true, $error)){
                $idUltimoJuzgadorEliminados = implode(",", $idUltimoJuzgador);
                //Guardar en bit·cora cuando se elimine logicamente un registro
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 47;
                //print_r($programacionesDto);
                $observaciones = "BORRADO FISICO TABLA: tblultimoroljuzgador, idUltimoRolJuzgador: " . $idUltimoJuzgadorEliminados;
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertarBitacoraUltimoRolJuzgador = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            }
        }
        $logger->w_onError("**********VERIFICAR SI EXISTEN REGISTROS EN TBLPROGRAMACIONJUZGADORES CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
        $programacionJuzgadoresDto->setIdProgramacion($ProgramacionesDto->getIdProgramacion());
        $programacionJuzgadoresController = new ProgramacionjuzgadoresController();
        $programacionJuzgadoresDto = $programacionJuzgadoresController->selectProgramacionjuzgadores($programacionJuzgadoresDto, $this->proveedor);
        if(!$programacionJuzgadoresDto){
            $logger->w_onError("**********NO SE ENCONTRARON REGISTROS EN TBLPROGRAMACIONJUZGADORES CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
            $error[] = false;
        } else {
            for($j = 0; $j < count($programacionJuzgadoresDto); $j++){
                $dtoProgramacionJuzgadores = new ProgramacionjuzgadoresDTO();
                $dtoProgramacionJuzgadores->setIdProgramacionJuzgador($programacionJuzgadoresDto[$j]->getIdProgramacionJuzgador());
                $borradoProgramacionJuzgadores = $programacionJuzgadoresController->deleteProgramacionjuzgadores($dtoProgramacionJuzgadores, $this->proveedor);
                if ($borradoProgramacionJuzgadores) {
                    $error[] = false;
                    $logger->w_onError("**********BORRADO FÕSICO EN TBLPROGRAMACIONJUZGADORES CON IDPROGRAMACIONJUZGADOR: " . $programacionJuzgadoresDto[$j]->getIdProgramacionJuzgador() . "**********");
                    $idProgramacionJuzgador[] = $programacionJuzgadoresDto[$j]->getIdProgramacionJuzgador();
                } else {
                    $error[] = true;
                    $logger->w_onError("**********OCURRI” UN ERROR AL BORRAR EL REGISTRO CON IDPROGRAMACIONJUZGADOR: " . $programacionJuzgadoresDto[$j]->getIdProgramacionJuzgador() . "**********");
                }
            }
            if(!in_array(true, $error)){
                $idProgramacionJuzgadorEliminados = implode(",", $idProgramacionJuzgador);
                //Guardar en bit·cora cuando se elimine logicamente un registro
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 50;
                //print_r($programacionesDto);
                $observaciones = "BORRADO FISICO TABLA: tblprogramacionjuzgadores, idProgramacionJuzgador: " . $idProgramacionJuzgadorEliminados;
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertarBitacoraProgramacionJuzgador = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            }
        }
        $logger->w_onError("**********VERIFICAR SI EXISTEN REGISTROS EN TBLPROGRAMACIONSALAS CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
        $programacionSalasDto = new ProgramacionsalasDTO();
        $programacionSalasDto->setIdProgramacion($ProgramacionesDto->getIdProgramacion());
        $programacionSalasController = new ProgramacionsalasController();
        $programacionSalasDto = $programacionSalasController->selectProgramacionsalas($programacionSalasDto, $this->proveedor);
        if(!$programacionSalasDto){
            $logger->w_onError("**********NO SE ENCONTRARON REGISTROS EN TBLPROGRAMACIONSALAS CON ID DE PROGRAMACI”N: " . $ProgramacionesDto->getIdProgramacion() . "**********");
            $error[] = false;
        } else {
            for($s = 0; $s < count($programacionSalasDto); $s++){
                $dtoProgramacionSalas = new ProgramacionsalasDTO();
                $dtoProgramacionSalas->setIdDisponibilidadSala($programacionSalasDto[$s]->getIdDisponibilidadSala());
                $borradoProgramacionSalas = $programacionSalasController->deleteProgramacionsalas($dtoProgramacionSalas, $this->proveedor);
                if ($borradoProgramacionSalas) {
                    $error[] = false;
                    $logger->w_onError("**********BORRADO FÕSICO EN TBLPROGRAMACIONSALAS CON IDDISPONIBILIDADSALA: " . $programacionSalasDto[$s]->getIdDisponibilidadSala() . "**********");
                    $idProgramacionSala[] = $programacionSalasDto[$s]->getIdDisponibilidadSala();
                } else {
                    $error[] = true;
                    $logger->w_onError("**********OCURRI” UN ERROR AL BORRAR EL REGISTRO CON IDDISPONIBILIDADSALA: " . $programacionSalasDto[$s]->getIdDisponibilidadSala() . "**********");
                }
            }
            if(!in_array(true, $error)){
                $idProgramacionSalasEliminados = implode(",", $idProgramacionSala);
                //Guardar en bit·cora cuando se elimine logicamente un registro
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 20;
                //print_r($programacionesDto);
                $observaciones = "BORRADO FISICO TABLA: tblprogramacionsalas, idDisponibilidadSala: " . $idProgramacionSalasEliminados;
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertarBitacoraProgramacionSalas = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            }
        }
        if(in_array(true, $error)){
            $logger->w_onError("**********OCURRI” UN ERROR AL BORRAR ALGUNO DE LOS REGISTROS**********");
            $bandera = false;
        } else {
            $bandera = true;
            $logger->w_onError("**********LA ELIMINACI”N HA SIDO SATISFACTORIA, SE PROCEDE A BORRAR EL REGISTRO DE PROGRAMACION CON ID: " . $ProgramacionesDto->getIdProgramacion() . "**********");
            $borrarProgramacion = $this->deleteProgramaciones($ProgramacionesDto, $this->proveedor);
            if($borrarProgramacion){
                $bandera = true;
                //Guardar en bit·cora cuando se elimine logicamente un registro
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 19;
                //print_r($programacionesDto);
                $observaciones = "BORRADO FISICO TABLA: tblprogramaciones, idProgramacion: " . $ProgramacionesDto->getIdProgramacion();
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertarBitacoraProgramacionSalas = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            } else {
                $bandera = false;
            }
        }
        if ($proveedor == null) {
            if ($bandera) {
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
    
    public function getPaginasProgramaciones($programacionesDto,$param) {
        $totalRegistros = 0;
        $programacionesDto = $this->validarProgramaciones($programacionesDto);
        $programacionesDao = new ProgramacionesDAO();
        $order = " ORDER BY p.anio, p.cveMes ";
        $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, $order, null);
        if ( $programacionesDto != "" ) {
            $totalRegistros = count($programacionesDto);
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
    
}
?>