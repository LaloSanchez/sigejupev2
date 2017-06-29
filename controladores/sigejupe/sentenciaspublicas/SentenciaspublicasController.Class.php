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

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/SentenciasPublicasController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

include_once dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sentenciaspublicas/SentenciaspublicasDTO.Class.php";
include_once dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sentenciaspublicas/SentenciaspublicasDAO.Class.php";
include_once dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php";
//archivos adicionales
include_once dirname(__FILE__) . "/../../../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php";
//Actuaciones
include_once dirname(__FILE__) . "/../../../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php";
include_once dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php";
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
//Tipo de Carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Tipo de Sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossentencias/TipossentenciasDAO.Class.php");
//Tipo de Procedimientos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposprocedimientos/TiposprocedimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposprocedimientos/TiposprocedimientosDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//WebService para Tocas
include_once(dirname(__FILE__) . "/../../../webservice/cliente/tocas/Tocas.php");
//Contadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
//BitAcora
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");
//Documentos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../documentosimg/DocumentosimgController.Class.php");
//Imagenes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../imagenes/ImagenesController.Class.php");
//Correcciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/correcciones/CorreccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../correcciones/CorreccionesController.Class.php");
//pdf
// require dirname(__FILE__) . "/../../../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php";

class SentenciaspublicasController
{
    private $proveedor;
    private $tipoActuacion;
    public function __construct()
    {
        $this->tipoActuacion = 31;
    }
    public function validarSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto->setIdSentenciaP(strtoupper(str_ireplace("'", "", trim($SentenciaspublicasDto->getIdSentenciaP()))));
        $SentenciaspublicasDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim($SentenciaspublicasDto->getIdActuacion()))));
        $SentenciaspublicasDto->setdefiniciones(strtoupper(str_ireplace("'", "", trim($SentenciaspublicasDto->getdefiniciones()))));
        $SentenciaspublicasDto->setestado(strtoupper(str_ireplace("'","",trim($SentenciaspublicasDto->getestado()))));
        return $SentenciaspublicasDto;
    }
    public function selectSentenciaspublicas($SentenciaspublicasDto, $proveedor = null)
    {
        $SentenciaspublicasDto = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasDao = new SentenciaspublicasDAO();
        $SentenciaspublicasDto = $SentenciaspublicasDao->selectSentenciaspublicas($SentenciaspublicasDto, $proveedor);
        return $SentenciaspublicasDto;
    }
    public function insertSentenciaspublicas($SentenciaspublicasDto, $proveedor = null)
    {
        $SentenciaspublicasDto = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasDao = new SentenciaspublicasDAO();
        $SentenciaspublicasDto = $SentenciaspublicasDao->insertSentenciaspublicas($SentenciaspublicasDto, $proveedor);
        return $SentenciaspublicasDto;
    }
    public function updateSentenciaspublicas($SentenciaspublicasDto, $proveedor = null)
    {
        $SentenciaspublicasDto = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasDao = new SentenciaspublicasDAO();
        $SentenciaspublicasDto = $SentenciaspublicasDao->updateSentenciaspublicas($SentenciaspublicasDto, $proveedor);
        return $SentenciaspublicasDto;
    }
    public function deleteSentenciaspublicas($SentenciaspublicasDto, $proveedor = null)
    {
        $SentenciaspublicasDto = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasDao = new SentenciaspublicasDAO();
        $SentenciaspublicasDto = $SentenciaspublicasDao->deleteSentenciaspublicas($SentenciaspublicasDto, $proveedor);
        return $SentenciaspublicasDto;
    }

    public function obtenerContadorActuacion($cveJuzgado) {
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($cveJuzgado);
        $contadoresDto->setCveTipoActuacion( $this->tipoActuacion );
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta("");
        $contadoresDto = $contadorCrl->getContador($contadoresDto); 
        return $contadoresDto;
    }    

    /**
    * FunciOn para consultar un expediente a travEs del controller de Actuaciones
    **/
    public function consultarExpediente($parametros='')
    {
        $existeExpediente = '';
        $idReferencia = '';
        $status = 'error';
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();
        $Actuaciones = new ActuacionesController();
        $ActuacionesDTO->setNumero( $parametros['numero'] );
        $ActuacionesDTO->setAnio( $parametros['anio'] );
        $ActuacionesDTO->setCveTipoCarpeta( $parametros['carpeta'] );
        $ActuacionesDTO->setCveJuzgado( $parametros['juzgado'] );
        $ActuacionesDTO->setActivo( 'S' );
        //Invoca una funciOn para validar que los datos existan en carpetas judiciales o expediente
        $respuesta = $Actuaciones->tipoCarpeta($ActuacionesDTO);
        //si la informaciOn es valida, buscarA que no este ya registrada una sentencia con los mismos datos
        if ( $respuesta != 0 && $respuesta > 0 ){
            $ActuacionesDTO->setCveTipoActuacion( $this->tipoActuacion );
            $ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO );
            if( $ActuacionesDTO == '' ){ //los datos no existen en la tabla Actuaciones, se puede ingresar uno nuevo
                //regresa el id de la carpeta relacionada (idReferencia)
                $idReferencia = $respuesta;
                $status = 'ok';
            }else{
                $status = 'existente';
            }

        }
        $existeExpediente = array( 'status' => $status, 'data' => $idReferencia  );
        return $existeExpediente;
    }

    /**
    * FunciOn para consultar una toca a travEs de WS al Expediente ElectOnico
    **/
    public function consultarToca($parametros='')
    {
        $existeExpediente = '';
        $idReferencia = '';
        $status = 'error';
        $numero = $parametros['numero'];
        $anio = $parametros['anio'];
        $sala = $parametros['juzgado'];

        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();
        $ActuacionesDTO->setNumero( $numero );
        $ActuacionesDTO->setAnio( $anio );
        $ActuacionesDTO->setCveTipoCarpeta( $parametros['carpeta'] );
        $ActuacionesDTO->setCveJuzgado( $sala );
        $ActuacionesDTO->setActivo( 'S' );
        $ActuacionesDTO->setCveTipoActuacion( $this->tipoActuacion );

        $data = array("numero"=>$numero, "anio"=>$anio, "sala"=>$sala);
        $Tocas = new Tocas();
        $respuesta = json_decode( $Tocas->consultar( $data ) );
        if( $respuesta->status == 'ok' ){

            $ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO );
            if( $ActuacionesDTO == '' ){ //los datos no existen en la tabla Actuaciones, se puede ingresar uno nuevo
                //regresa el id de la carpeta relacionada (idReferencia)
                $idReferencia = $respuesta->toca[0]->idCarpetaJudicial;
                $status = 'ok';
            }else{
                $status = 'existente';
            }

        }
        $existeExpediente = array( 'status' => $status, 'data' => $idReferencia  );
        return $existeExpediente;
    }

    /**
    * FunciOn para guardar la sentencia pUblica en la tabla de Actuaciones y en SentenciasPublicas
    **/
    public function guardarSentenciaPublica( $SentenciaspublicasDto, $parametros='' )
    {
        @session_start();
        $error = '';
        $respuestaActuaciones = array( "id"=>"", "numeroAct"=>"", "anioAct"=>"", "idTipoAct"=>"", "ref"=>"", "numero"=>"", "anio"=>"", "carpeta"=>"", "juzgado"=>"", "sintesis"=>"", "observaciones"=>"", "tipoResolucion"=>"", "tipoProcedimiento"=>"", "registro"=>"", "definiciones"=>"" );
        $respuestaDefiniciones = '';
        $estadoSentencia = '1'; //corresponde a la base, 'Pendiente'

        $ActuacionesFacade = new ActuacionesFacade();


        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $transaccion = 0;       
        //$tipoActuacion = 31; //valor fijo acorde a la tabla TiposActuaciones
        $activo = 'S';
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        $cveJuzgado = $parametros["juzgado"];
        $tipoRespuesta = $parametros["tipoRespuesta"];

        //obtencion del contador de la actuacion
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $this->tipoActuacion);
        $numActuacion = $numActuacion[0]->getNumero();

        //insercion en Actuaciones
        $ActuacionesDTO->setNumActuacion( $numActuacion );
        $ActuacionesDTO->setAniActuacion( date("Y") );
        $ActuacionesDTO->setCveTipoActuacion( $this->tipoActuacion );
        $ActuacionesDTO->setIdReferencia( $parametros["idReferencia"] );
        $ActuacionesDTO->setNumero( $parametros["numero"] );
        $ActuacionesDTO->setAnio( $parametros["anio"] );
        $ActuacionesDTO->setCveTipoCarpeta( $parametros["carpeta"] );
        $ActuacionesDTO->setCveJuzgado( $parametros["juzgado"] );
        $ActuacionesDTO->setSintesis( $parametros["sintesis"] );
        // $ActuacionesDTO->setObservaciones( $parametros["observaciones"] );
        $ActuacionesDTO->setObservaciones( utf8_decode( $parametros["observaciones"] ) );
        $ActuacionesDTO->setCveUsuario( $cveUsuario );
        $ActuacionesDTO->setActivo( $activo );
        $ActuacionesDTO->setCveTipoResolucion( $parametros["tipoResolucion"] );
        $ActuacionesDTO->setCveTipoProcedimiento( $parametros["tipoProcedimiento"] );
        // error_log(print_r($ActuacionesDTO,true));
        $ActuacionesDTO = $ActuacionesFacade->validarActuaciones( $ActuacionesDTO );

        $ActuacionesDTO = $ActuacionesDAO->insertActuaciones( $ActuacionesDTO, $proveedor );

        //inserciOn en sentenciaspublicas
        $nvaActuacion = $ActuacionesDTO[0]; 
        $nvaActuacionFull = $ActuacionesDTO; 
        $idActuacion = $nvaActuacion->getIdActuacion();     
        if( $ActuacionesDTO =! ''){
            //InserciOn en bitAcora
            $BitacoramovimientosController = new BitacoramovimientosController();
            $BitacoramovimientosController->agregar('369','INSERCION DE SENTENCIA PUBLICA','dto',$nvaActuacionFull,'',$proveedor);
            
            $SentenciaspublicasDAO = new SentenciaspublicasDAO();
            $SentenciaspublicasDTO = new SentenciaspublicasDTO();

            // $SentenciaspublicasFacade = new SentenciaspublicasFacade();

            $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
            $SentenciaspublicasDTO->setDefiniciones( $SentenciaspublicasDto->getDefiniciones() );
            $SentenciaspublicasDTO->setEstado( $estadoSentencia );

            $SentenciaspublicasDTO = $SentenciaspublicasDAO->insertSentenciaspublicas( $SentenciaspublicasDTO, $proveedor );
            $nvaSentencia = $SentenciaspublicasDTO[0];
            $nvaSentenciaFull = $SentenciaspublicasDTO;
            if( $SentenciaspublicasDTO != '' ){
                //InserciOn en bitAcora
                $BitacoramovimientosController->agregar('373','INSERCION DE DEFINICIONES PARA LA SENTENCIA PUBLICA','dto',$nvaSentenciaFull,'',$proveedor);
                $respuestaDefiniciones = array("id"=>$nvaSentencia->getIdSentenciaP(), "actuacion"=>$nvaSentencia->getIdActuacion(), "definiciones"=>$nvaSentencia->getDefiniciones());

                $respuestaActuaciones["id"] = $nvaActuacion->getIdActuacion();
                $respuestaActuaciones["numeroAct"] = $nvaActuacion->getNumActuacion();
                $respuestaActuaciones["anioAct"] = $nvaActuacion->getAniActuacion();
                $respuestaActuaciones["idTipoAct"] = $nvaActuacion->getCveTipoActuacion();
                $respuestaActuaciones["ref"] = $nvaActuacion->getIdReferencia();
                $respuestaActuaciones["numero"] = $nvaActuacion->getNumero();
                $respuestaActuaciones["anio"] = $nvaActuacion->getAnio();
                $respuestaActuaciones["carpeta"] = $nvaActuacion->getCveTipoCarpeta();
                $respuestaActuaciones["juzgado"] = $nvaActuacion->getCveJuzgado();
                $respuestaActuaciones["sintesis"] = $nvaActuacion->getSintesis();
                $respuestaActuaciones["observaciones"] = $nvaActuacion->getObservaciones();
                $respuestaActuaciones["tipoResolucion"] = $nvaActuacion->getCveTipoResolucion();
                $respuestaActuaciones["tipoProcedimiento"] = $nvaActuacion->getCveTipoProcedimiento();
                $respuestaActuaciones["registro"] = $nvaActuacion->getFechaRegistro();
                $respuestaActuaciones["definiciones"] = $respuestaDefiniciones;

                $transaccion = 1;
                $error .= 'Se insertaron las definiciones. ';
            }else{
                $error .= 'No se insertaron las definiciones. ';
                $transaccion = 0; 
            }
            $error .= 'Se inserto la actuacion. ';
        }else{
            $error .= 'No se inserto la actuacion. ';
            $transaccion = 0; 
        }


        if( $transaccion == 1){
            $proveedor->execute("COMMIT");
            if( $tipoRespuesta == 'compacta' ){
                $data = array( "id" => $nvaActuacion->getIdActuacion() );   
            }elseif ( $tipoRespuesta == 'completa' ) {
                $data = $respuestaActuaciones;  
            }
            $respuesta = array("status"=>"true", "mensaje"=>"El registro se guard&oacute; correctamente.", "data"=>$data);
            $stat = 'ok';
        }else{
            $proveedor->execute("ROLLBACK");
            $respuesta = array("status"=>"false", "mensaje"=>"No se guardo el registro. Intente de nuevo.");
            $stat = 'err';
        }
        $proveedor->close();
        return $respuesta;
    }

    /**
    * FunciOn para actualizar la sentencia pUblica en la tabla de Actuaciones y en SentenciasPublicas
    **/
    public function actualizarSentenciaPublica( $SentenciaspublicasDto, $parametros )
    {
        @session_start();
        $error = '';
        $respuestaActuaciones = array( "id"=>"", "numeroAct"=>"", "anioAct"=>"", "idTipoAct"=>"", "ref"=>"", "numero"=>"", "anio"=>"", "carpeta"=>"", "juzgado"=>"", "sintesis"=>"", "observaciones"=>"", "tipoResolucion"=>"", "tipoProcedimiento"=>"", "registro"=>"", "definiciones"=>"" );
        $respuestaDefiniciones = '';
        $estadoSentencia = '1'; 

        $ActuacionesFacade = new ActuacionesFacade();

        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDTOPrev = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $transaccion = 0;       
        //$tipoActuacion = 31; //valor fijo acorde a la tabla TiposActuaciones
        $activo = 'S';
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        $tipoRespuesta = $parametros["tipoRespuesta"];

        //ObtenciOn de los datos previos
        $ActuacionesDTOPrev->setIdActuacion( $parametros["idActuacion"] );
        $ActuacionesDTOPrev = $ActuacionesDAO->selectActuaciones( $ActuacionesDTOPrev, $proveedor );
        $datosPrevios = $ActuacionesDTOPrev;
        //variables a actualizar
        $ActuacionesDTO->setIdActuacion( $parametros["idActuacion"] );
        $ActuacionesDTO->setSintesis( $parametros["sintesis"] );
        // $ActuacionesDTO->setObservaciones( $parametros["observaciones"] );
        $ActuacionesDTO->setObservaciones( utf8_decode( $parametros["observaciones"] ) );
        $ActuacionesDTO->setCveUsuario( $cveUsuario );
        $ActuacionesDTO->setActivo( $activo );
        $ActuacionesDTO->setCveTipoResolucion( $parametros["tipoResolucion"] );
        $ActuacionesDTO->setCveTipoProcedimiento( $parametros["tipoProcedimiento"] );
        $ActuacionesDTO->setFechaActualizacion( date("Y-m-d H:i:s") );

        $ActuacionesDTO = $ActuacionesFacade->validarActuaciones( $ActuacionesDTO );

        $ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDTO, $proveedor );

        //inserciOn en sentenciaspublicas
        $nvaActuacion = $ActuacionesDTO[0]; 
        $nvaActuacionFull = $ActuacionesDTO; 
        $idActuacion = $nvaActuacion->getIdActuacion();     
        if( $ActuacionesDTO =! ''){
            //InserciOn en bitAcora
            $BitacoramovimientosController = new BitacoramovimientosController();
            $BitacoramovimientosController->agregar('370','ACTUALIZACION DE SENTENCIA PUBLICA','dto',$nvaActuacionFull,$datosPrevios,$proveedor);

            $SentenciaspublicasDAO = new SentenciaspublicasDAO();
            $SentenciaspublicasDTO = new SentenciaspublicasDTO();
            $SentenciaspublicasDTO2 = new SentenciaspublicasDTO();

            $SentenciaspublicasFacade = new SentenciaspublicasFacade();

            //obtenciOn del ID anterior
            $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
            $SentenciaspublicasDTO = $SentenciaspublicasDAO->selectSentenciaspublicas( $SentenciaspublicasDTO );
            if( $SentenciaspublicasDTO != '' ){
                $SentenciaspublicasDTO2->setIdSentenciaP( $SentenciaspublicasDTO[0]->getIdSentenciaP() );
                $SentenciaspublicasDTO2->setDefiniciones( $SentenciaspublicasDto->getDefiniciones() );
                $SentenciaspublicasDTO2->setEstado( $estadoSentencia );

                $SentenciaspublicasDTO2 = $SentenciaspublicasDAO->updateSentenciaspublicas( $SentenciaspublicasDTO2, $proveedor );
                $nvaSentencia = $SentenciaspublicasDTO2[0];
                if( $SentenciaspublicasDTO2 != '' ){
                    //InserciOn en bitAcora
                    $BitacoramovimientosController->agregar('375','ACTUALIZACION DE DEFINICIONES','dto',$SentenciaspublicasDTO2,$SentenciaspublicasDTO,$proveedor);
                    
                    $respuestaDefiniciones = array("id"=>$nvaSentencia->getIdSentenciaP(), "actuacion"=>$nvaSentencia->getIdActuacion(), "definiciones"=>$nvaSentencia->getDefiniciones());

                    $respuestaActuaciones["id"] = $nvaActuacion->getIdActuacion();
                    $respuestaActuaciones["numeroAct"] = $nvaActuacion->getNumActuacion();
                    $respuestaActuaciones["anioAct"] = $nvaActuacion->getAniActuacion();
                    $respuestaActuaciones["idTipoAct"] = $nvaActuacion->getCveTipoActuacion();
                    $respuestaActuaciones["ref"] = $nvaActuacion->getIdReferencia();
                    $respuestaActuaciones["numero"] = $nvaActuacion->getNumero();
                    $respuestaActuaciones["anio"] = $nvaActuacion->getAnio();
                    $respuestaActuaciones["carpeta"] = $nvaActuacion->getCveTipoCarpeta();
                    $respuestaActuaciones["juzgado"] = $nvaActuacion->getCveJuzgado();
                    $respuestaActuaciones["sintesis"] = $nvaActuacion->getSintesis();
                    $respuestaActuaciones["observaciones"] = $nvaActuacion->getObservaciones();
                    $respuestaActuaciones["tipoResolucion"] = $nvaActuacion->getCveTipoResolucion();
                    $respuestaActuaciones["tipoProcedimiento"] = $nvaActuacion->getCveTipoProcedimiento();
                    $respuestaActuaciones["registro"] = $nvaActuacion->getFechaRegistro();
                    $respuestaActuaciones["definiciones"] = $respuestaDefiniciones;

                    $transaccion = 1;
                    $error .= 'Se actualizaron las definiciones. ';
                }else{
                    $error .= 'No se actualizaron las definiciones. ';
                    $transaccion = 0; 
                }
                $error .= 'Se actualizo la actuacion. ';
            }else{
                //ocurrio un error
            }
        }else{
            $error .= 'No se actualizo la actuacion. ';
            $transaccion = 0; 
        }


        if( $transaccion == 1){
            $proveedor->execute("COMMIT");
            if( $tipoRespuesta == 'compacta' ){
                $data = array( "id" => $nvaActuacion->getIdActuacion() );   
            }elseif ( $tipoRespuesta == 'completa' ) {
                $data = $respuestaActuaciones;  
            }
            $respuesta = array("status"=>"true", "mensaje"=>"El registro se actualiz&oacute; correctamente.", "data"=>$data);
        }else{
            $proveedor->execute("ROLLBACK");
            $respuesta = array("status"=>"false", "mensaje"=>"No se actualiz&oacute; el registro. Intente de nuevo.");
        }
        $proveedor->close();
        return $respuesta;
    }

    /**
    * FunciOn para buscar Sententencias PUblicas
    **/
    public function buscarSentenciaPublica( $parametros )
    {
        //$parametros = array('numero' => $numero, 'anio' => $anio, 'carpeta' => $carpeta, 'juzgado' => $juzgado, 'idActuacion' => $idActuacion, 'idReferencia' => $idReferencia, 'sintesis' => $sintesis, 'observaciones' => $observaciones, 'tipoSentencia' => $tipoSentencia, 'tipoProcedimiento' => $tipoProcedimiento, "tipoRespuesta" => $tipoRespuesta, 'finicio' => $txtFecInicialBusqueda, 'ffinal' => $txtFecFinalBusqueda);
        $activo = 'S';
        $status = 'false';
        $mensaje = '';
        $data = '';
        $juzgadoId = '';
        $juzgadoTipo = '';
        $juzgadoDesc = '';
        if( $parametros['juzgado'] != '' ){
            $juzgadoId = explode( '/', $parametros['juzgado'] )[0];
            $juzgadoTipo = explode( '/', $parametros['juzgado'] )[1];
        }
        $respuesta = array( "status" => "", "mensaje" => "", "data" => "");
        $respuestaDefiniciones = '';
        $arrTiposCarpetas = array();
        $arrTiposSentencias = array();
        $arrTiposProcedimientos = array();
        $arrJuzgados = array();
        $tipoFiltro = $parametros['tipoFiltro'];
        if( $tipoFiltro == 0 ){
            $tipoFiltro = " AND estado >= 0 ";
        }else{
            $tipoFiltro = " AND estado = " . $tipoFiltro;
        }
        $estatusRegistro = false;
        $hayRegistros = false;

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();

        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();

        $paramDAO = array( "fechaDesde" => $parametros['finicio'], "fechaHasta" => $parametros['ffinal'] , "paginacion" => "true", "pag" => $parametros['pag'], "cantxPag" => $parametros['cantxPag']);

        $ActuacionesDTO->setIdActuacion( $parametros['idActuacion'] );
        $ActuacionesDTO->setActivo( $activo );
        $ActuacionesDTO->setCveTipoActuacion( $this->tipoActuacion );
        $ActuacionesDTO->setCveJuzgado( $juzgadoId );
        $ActuacionesDTO->setCveTipoCarpeta( $parametros['carpeta'] );
        $ActuacionesDTO->setNumero( $parametros['numero'] );
        $ActuacionesDTO->setAnio( $parametros['anio'] );
        $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, $proveedor, " ORDER BY fechaRegistro DESC", $paramDAO);
        if( $ActuacionesDTO != ''){
            //obtener los datos del juzgado
            $JuzgadosDTO = new JuzgadosDTO();
            $JuzgadosDAO = new JuzgadosDAO();
            $JuzgadosDTO->setActivo('S');
            $JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO, '', $proveedor);
            if( $JuzgadosDTO != '' ){
                foreach ($JuzgadosDTO as $juzgado) {
                    $arrJuzgados[] = array('id' => $juzgado->getCveJuzgado(), 'desc' => $juzgado->getDesJuzgado(), 'tipo' => $juzgado->getCveTipojuzgado() );
                }
            }

            //obtencion del tipo de carpeta
            $TiposcarpetasDAO = new TiposcarpetasDAO();
            $TiposcarpetasDTO = new TiposcarpetasDTO();
            $TiposcarpetasDTO->setActivo( $activo );
            $TiposcarpetasDTO = $TiposcarpetasDAO->selectTiposcarpetas( $TiposcarpetasDTO, '', $proveedor );
            if( $TiposcarpetasDTO != '' ){
                foreach ($TiposcarpetasDTO as $tipoCarpeta) {
                    $arrTiposCarpetas[] = array( 'id' => $tipoCarpeta->getCveTipoCarpeta(), "desc" => $tipoCarpeta->getDesTipoCarpeta() );
                }
            }

            //obtencion de tipo de resolucion
            $SentidosresolucionesDAO = new SentidosresolucionesDAO();
            $SentidosresolucionesDTO = new SentidosresolucionesDTO();
            $SentidosresolucionesDTO->setActivo( $activo );
            $SentidosresolucionesDTO = $SentidosresolucionesDAO->selectSentidosresoluciones( $SentidosresolucionesDTO, '', $proveedor );
            if( $SentidosresolucionesDTO != '' ){
                foreach ($SentidosresolucionesDTO as $sentidoResolucion) {
                    $arrTiposResoluciones[] = array( 'id' => $sentidoResolucion->getCveSentido(), "desc" => $sentidoResolucion->getDesSentido() );
                }
            }

            //obtencion de procedimiento
            $TiposprocedimientosDAO = new TiposprocedimientosDAO();
            $TiposprocedimientosDTO = new TiposprocedimientosDTO();
            $TiposprocedimientosDTO->setActivo( $activo );
            $TiposprocedimientosDTO = $TiposprocedimientosDAO->selectTiposprocedimientos( $TiposprocedimientosDTO, '', $proveedor );
            if( $TiposprocedimientosDTO != '' ){
                foreach ($TiposprocedimientosDTO as $tipoProcedimiento) {
                    $arrTiposProcedimientos[] = array( 'id' => $tipoProcedimiento->getCveTipoProcedimiento(), "desc" => $tipoProcedimiento->getDesTipoProcedimiento() );
                }
            }

            //obtencion del las sentencias
            $SentenciaspublicasDAO = new SentenciaspublicasDAO();
            foreach ($ActuacionesDTO as $actuacion) {
                $estatusRegistro = false;
                $SentenciaspublicasDTO = new SentenciaspublicasDTO();
                $idActuacion = $actuacion->getIdActuacion();
                $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
                $SentenciaspublicasDTO = $SentenciaspublicasDAO->selectSentenciaspublicas( $SentenciaspublicasDTO, $tipoFiltro, $proveedor );
                if( $SentenciaspublicasDTO != '' ){
                    $estadoDescripcion = '';
                    switch( $SentenciaspublicasDTO[0]->getEstado() ){
                        case '1':
                            $estadoDescripcion = 'Pendiente';
                            break;
                        case '2':
                            $estadoDescripcion = 'Aprobada';
                            break;
                        case '3':
                            $estadoDescripcion = 'Correcci&oacute;n';
                            break;
                        default:
                            $estadoDescripcion = '---------';
                            break;
                    }
                    $respuestaDefiniciones = array("id"=>$SentenciaspublicasDTO[0]->getIdSentenciaP(), "definiciones"=>$SentenciaspublicasDTO[0]->getDefiniciones(), "estado"=>$estadoDescripcion, 'idEstado'=>$SentenciaspublicasDTO[0]->getEstado());

                    //obtencion del historico de correcciones
                    $correcciones = $this->historicoCorrecciones( $idActuacion, $SentenciaspublicasDTO[0]->getIdSentenciaP() );
                    $estatusRegistro = true;
                }else{
                    $respuestaDefiniciones = array("id"=>"error", "definiciones"=>"error");
                }

                //validaciOn del tipo de carpeta
                $descTipoCarpeta = 'No disponible';
                foreach ($arrTiposCarpetas as $tipoCarpeta) {
                    if( $actuacion->getCveTipoCarpeta() == $tipoCarpeta['id'] ){
                        $descTipoCarpeta = $tipoCarpeta['desc'];
                    }
                }

                //validar tipo de resolucion
                foreach ($arrTiposResoluciones as $tipoResolucion) {
                    if( $actuacion->getCveTipoResolucion() == $tipoResolucion['id'] ){
                        $descTipoResolucion = $tipoResolucion['desc'];
                    }
                }

                //validacion del tipo de procedimiento
                foreach ($arrTiposProcedimientos as $tipoProcedimiento) {
                    if( $actuacion->getCveTipoProcedimiento() == $tipoProcedimiento['id'] ){
                        $descTipoProcedimiento = $tipoProcedimiento['desc'];
                    }
                }

                foreach ($arrJuzgados as $juzgado) {
                    if( $actuacion->getCveJuzgado() == $juzgado['id'] ){
                        $juzgadoId = $juzgado['id'];
                        $juzgadoTipo = $juzgado['tipo'];
                        $juzgadoDesc = $juzgado['desc'];
                    }
                }
                if( $estatusRegistro ){
                    $respuestaActuaciones[] = array(
                                    "id"=>$actuacion->getIdActuacion(),
                                    "numeroAct"=>$actuacion->getNumActuacion(),
                                    "anioAct"=>$actuacion->getAniActuacion(),
                                    "idTipoAct"=>$actuacion->getCveTipoActuacion(),
                                    "ref"=>$actuacion->getIdReferencia(),
                                    "numero"=>$actuacion->getNumero(),
                                    "anio"=>$actuacion->getAnio(),
                                    "carpeta"=>$actuacion->getCveTipoCarpeta(),
                                    "descCarpeta"=>$descTipoCarpeta,
                                    "juzgado"=>$juzgadoId,
                                    "tipoJuzgado"=>$juzgadoTipo,
                                    "descJuzgado"=>$juzgadoDesc,
                                    "sintesis"=>$actuacion->getSintesis(),
                                    "descSintesis"=>substr( $actuacion->getSintesis(), 0,49 ) . '...',
                                    "observaciones"=>$actuacion->getObservaciones(),
                                    "tipoResolucion"=>$actuacion->getCveTipoResolucion(),
                                    "descTipoResolucion"=>$descTipoResolucion,
                                    "tipoProcedimiento"=>$actuacion->getCveTipoProcedimiento(),
                                    "descTipoProcedimiento"=>$descTipoProcedimiento,
                                    "registro"=>$actuacion->getFechaRegistro(),
                                    "definiciones"=>$respuestaDefiniciones,
                                    "correcciones"=>$correcciones );
                    $hayRegistros = true;
                }
            }

            if( $hayRegistros ){
                $status = 'true';
                $mensaje = 'Registros encontrados.';
                $data = $respuestaActuaciones;
            }else{
                $status = 'false';
                $mensaje = 'No se encontraron registros con los parametros de b&uacute;squeda. Intente con otros. ERROR:002';
                $data = '';
            }
        }else{
            $status = 'false';
            $mensaje = 'No se encontraron registros con los parametros de b&uacute;squeda. Intente con otros. ERROR:001';
            $data = '';
        }
        $proveedor->close();

        $respuesta["status"] = $status;
        $respuesta["mensaje"] = $mensaje;
        $respuesta["data"] = $data;
        return $respuesta;
    }

    /**
    * FunciOn para eliminar de forma lOgica las sentencias pUblicas
    **/
    public function eliminaSentenciaPublica($SentenciaspublicasDto)
    {
        $activo = 'N';
        $transaccion = 0;

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDTOP = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();

        //obtencion de datos previos. Se coloca esta linea debido a que en el DAO, al actualizar, si no se especifican las observacioens, se elimina el contenido de estas.
        $observaciones = '';
        $ActuacionesDTOP->setIdActuacion( $SentenciaspublicasDto->getIdActuacion() );
        $ActuacionesDTOP = $ActuacionesDAO->selectActuaciones( $ActuacionesDTOP, $proveedor );
        if( $ActuacionesDTOP != '' ){
            $observaciones = $ActuacionesDTOP[0]->getObservaciones();
        }

        $ActuacionesDTO->setIdActuacion( $SentenciaspublicasDto->getIdActuacion() );
        $ActuacionesDTO->setObservaciones( $observaciones );
        $ActuacionesDTO->setActivo( $activo );
        $ActuacionesDTO->setFechaActualizacion( date("Y-m-d H:i:s") );
        $ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDTO, $proveedor );

        if( $ActuacionesDTO != '' ){
            //InserciOn en bitAcora
            $BitacoramovimientosController = new BitacoramovimientosController();
            $BitacoramovimientosController->agregar('371','BORRADO LOGICO DE SENTENCIA PUBLICA','dto',$ActuacionesDTO,'',$proveedor);
            $transaccion = 1;
        }else{
            $transaccion = 0;
        }

        if( $transaccion == 1 ){
            $proveedor->execute("COMMIT");
            $mensaje = 'El registro se elimin&oacute; correctamente.';
            $status = true;
        }elseif ( $transaccion == 0 ) {
            $proveedor->execute("ROLLBACK");
            $mensaje = 'No fue posible eliminar el registro. Intente de nuevo.';
            $status = false;
        }
        $proveedor->close();

        return array( "status" => $status, "mensaje" => $mensaje );
    }

    public function estadoSentencia( $SentenciaspublicasDto, $parametros=null ){

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $transaccion = false;
        $idCorreccion = '';
        $correcciones = array();

        $sentencia = array('idActuacion'=>'','idSentenciaPublica'=>'','estado'=>'');
        $respuesta = array('status'=>'', 'message'=>'', 'data'=>'');

        $SentenciaspublicasDTO = new SentenciaspublicasDTO();
        $SentenciaspublicasDTO2 = new SentenciaspublicasDTO();
        $SentenciaspublicasDAO = new SentenciaspublicasDAO();
        $CorreccionesController = new CorreccionesController();

        //busca sentencia publica con el ID de ActuaciOn
        $idActuacion = $SentenciaspublicasDto->getIdActuacion();
        $idEstado = $SentenciaspublicasDto->getEstado();
        $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
        $SentenciaspublicasDTO = $SentenciaspublicasDAO->selectSentenciaspublicas( $SentenciaspublicasDTO );
        //obtiene un solo registro
        if( $SentenciaspublicasDTO != '' ){
            $idSentenciaPublica = $SentenciaspublicasDTO[0]->getIdSentenciaP();

            //Actualiza el estado de la sentencia
            $SentenciaspublicasDTO2->setIdSentenciaP( $idSentenciaPublica );
            $SentenciaspublicasDTO2->setEstado( $idEstado );
            $SentenciaspublicasDTO2 = $SentenciaspublicasDAO->updateSentenciaspublicas( $SentenciaspublicasDTO2, $proveedor );
            if( $SentenciaspublicasDTO2 != '' ){

                if( $idEstado == '3' ){ //es correcciOn
                    $correccion = $parametros['correccion'];
                    $idCorreccion = $parametros['idCorreccion'];
                    //insercion de la correccion
                    $CorreccionesDTO = new CorreccionesDTO();
                    $CorreccionesDTO->setIdSentenciaP( $idSentenciaPublica );
                    $CorreccionesDTO->setCorreccion( $correccion );
                    $CorreccionesDTO->setFechaRegistro( date("Y-m-d H:i:s") );
                    if( $idCorreccion == 0 ){ //es la primera insercion
                        $CorreccionesDTO = $CorreccionesController->insertCorrecciones( $CorreccionesDTO, $proveedor );
                    }elseif ( $idCorreccion > 0) { //es actualizcion
                        $CorreccionesDTO->setIdCorreccion( $idCorreccion );
                        $CorreccionesDTO = $CorreccionesController->updateCorrecciones( $CorreccionesDTO, $proveedor );
                    }
                    if( $CorreccionesDTO != '' ){
                        $idCorreccion = $CorreccionesDTO[0]->getIdCorreccion();
                    }else{ //no se insertO
                        $transaccion = false;
                        $sentencia = '';
                        $status = 'error';
                        $message = 'Error: No se logr&oacute; guardar la informaci&oacute; de la corecci&oacute;n. Intente de nuevo.';
                    }
                }

                //la sentencia se actualizO
                $sentencia['idActuacion'] = $SentenciaspublicasDTO2[0]->getIdActuacion();
                $sentencia['idSentenciaPublica'] = $SentenciaspublicasDTO2[0]->getIdSentenciaP();
                $sentencia['estado'] = $SentenciaspublicasDTO2[0]->getEstado();
                $sentencia['idCorreccion'] = $idCorreccion;
                $status = 'ok';
                $message = 'Registro Actualizado Correctamente.';
                $transaccion = true;

            }else{
                //la sentencia no se actualizO
                // error_log('error al actualizar sentencia');
                $sentencia = '';
                $status = 'error';
                $message = 'Error: No se logr&oacute; cambiar el estado del registro. Intente de nuevo.';
            }
        }else{
            //no se encontro el registro de la sentencia
            $status = 'error';
            $message = 'Error: No se encuentra el registro. Intente de nuevo.';
            $sentencia = '';
        }

        if( $transaccion ){
            $proveedor->execute("COMMIT");
            //obtiene el historico de correcciones
            $correcciones = $this->historicoCorrecciones( $idActuacion, $idSentenciaPublica, $proveedor );
            $sentencia['correcciones'] = $correcciones;
        }else{
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();

        $respuesta = array('status'=>$status, 'message'=>$message, 'data'=>$sentencia);
        return $respuesta;
    }

    /**
    * fUNCIoN PARA CONSULTAR EL HISTORICO DE CORRECCIONES
    **/
    public function historicoCorrecciones( $idActuacion, $idSentenciaPublica){
        $proveedor2 = new Proveedor('mysql', 'sigejupe');
        $proveedor2->connect();
        $proveedor2->execute("BEGIN");
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesController = new ActuacionesController();
        $CorreccionesController = new CorreccionesController();
        $CorreccionesDTO = new CorreccionesDTO();
        $correcciones = array();

        //consulta del historico de correcciones
        $ActuacionesDTO->setIdActuacion( $idActuacion );
        $ActuacionesDTO->setActivo( 'S' );
        $ActuacionesDTO = $ActuacionesController->selectActuaciones( $ActuacionesDTO, $proveedor2 );
        if( $ActuacionesDTO != '' ){
            $fechaActualizacionActuacion = $ActuacionesDTO[0]->getFechaActualizacion();
            $CorreccionesDTO->setIdSentenciaP( $idSentenciaPublica );
            $CorreccionesDTO->setActivo( 'S' );
            $CorreccionesDTO = $CorreccionesController->selectCorrecciones( $CorreccionesDTO, ' ORDER BY fechaRegistro DESC ', $proveedor2 );
            if( $CorreccionesDTO != '' ){
                foreach ($CorreccionesDTO as $correccion) {
                    $correcciones[] = array('fechaRegistro' => $this->fechaNormal( $correccion->getFechaRegistro() ),
                                            'correccion' => $correccion->getCorreccion(),
                                            'fechaActualizacionSP' => $this->fechaNormal( $fechaActualizacionActuacion ) );
                }
            }
        }else{ //no se obtuivieron datos de la actuacion
            $correcciones[] = array('fechaRegistro' => 'Error',
                                    'correccion' => 'Error',
                                    'fechaActualizacionSP' => 'Error' );
        }
        $proveedor2->close();
        return $correcciones;
    }


    /**
    * FunciOn para buscar Sententencias PUblicas
    **/
    public function buscarSentenciaPublicaWS( $parametros )
    {
        // $parametros = array('juzgado' => $court,
        //                     'carpeta' => $folder,
        //                     'numero' => $number,
        //                     'anio' => $year,
        //                     'sintesis' => $synthesis,
        //                     'finicio' => $initialDate,
        //                     'ffinal' => $finalDate);
        $estadoSentencia = '2'; //aprobada
        $estadoDescripcion = 'Aprobada';
        $activo = 'S';
        $status = 'false';
        $mensaje = '';
        $data = '';
        $juzgadoTipo = '';
        $juzgadoDesc = '';
        $juzgadoId = $parametros['juzgado'];
        $sqlSintesis = '';
        if( $parametros['sintesis'] != '' ){
            $sqlSintesis = " AND sintesis REGEXP('" . $parametros['sintesis'] . "') ";
        }

        $respuesta = array( "status" => "", "mensaje" => "", "data" => "");
        $arrTiposCarpetas = array();
        $arrTiposSentencias = array();
        $arrTiposProcedimientos = array();
        $arrJuzgados = array();
        $estatusRegistro = false;

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();

        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();

        $paramDAO = array( "fechaDesde" => $parametros['finicio'], "fechaHasta" => $parametros['ffinal'] , "paginacion" => "true", "pag" => "0", "cantxPag" => "10");

        $ActuacionesDTO->setActivo( $activo );
        $ActuacionesDTO->setCveTipoActuacion( $this->tipoActuacion );
        $ActuacionesDTO->setCveTipoCarpeta( $parametros['carpeta'] );
        $ActuacionesDTO->setNumero( $parametros['numero'] );
        $ActuacionesDTO->setAnio( $parametros['anio'] );
        $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, $proveedor, " AND cveJuzgado IN(" . $juzgadoId . ") " . $sqlSintesis . " ORDER BY fechaRegistro DESC", $paramDAO);
        if( $ActuacionesDTO != ''){

            //obtener los datos del juzgado
            $JuzgadosDTO = new JuzgadosDTO();
            $JuzgadosDAO = new JuzgadosDAO();
            $JuzgadosDTO->setActivo('S');
            $JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO, '', $proveedor);
            if( $JuzgadosDTO != '' ){
                foreach ($JuzgadosDTO as $juzgado) {
                    $arrJuzgados[] = array('id' => $juzgado->getCveJuzgado(), 'desc' => $juzgado->getDesJuzgado(), 'tipo' => $juzgado->getCveTipojuzgado() );
                }
            }


            //obtencion del tipo de carpeta
            $TiposcarpetasDAO = new TiposcarpetasDAO();
            $TiposcarpetasDTO = new TiposcarpetasDTO();
            $TiposcarpetasDTO->setActivo( $activo );
            $TiposcarpetasDTO = $TiposcarpetasDAO->selectTiposcarpetas( $TiposcarpetasDTO, '', $proveedor );
            if( $TiposcarpetasDTO != '' ){
                foreach ($TiposcarpetasDTO as $tipoCarpeta) {
                    $arrTiposCarpetas[] = array( 'id' => $tipoCarpeta->getCveTipoCarpeta(), "desc" => $tipoCarpeta->getDesTipoCarpeta() );
                }
            }

            //obtencion del sentido de la resolucion
            $SentidosresolucionesDAO = new SentidosresolucionesDAO();
            $SentidosresolucionesDTO = new SentidosresolucionesDTO();
            $SentidosresolucionesDTO->setActivo( $activo );
            $SentidosresolucionesDTO = $SentidosresolucionesDAO->selectSentidosresoluciones( $SentidosresolucionesDTO, '', $proveedor );
            if( $SentidosresolucionesDTO != '' ){
                foreach ($SentidosresolucionesDTO as $sentidoResolucion) {
                    $arrSentidosResoluciones[] = array( 'id' => $sentidoResolucion->getCveSentido(), "desc" => $sentidoResolucion->getDesSentido() );
                }
            }

            //obtencion de procedimiento
            $TiposprocedimientosDAO = new TiposprocedimientosDAO();
            $TiposprocedimientosDTO = new TiposprocedimientosDTO();
            $TiposprocedimientosDTO->setActivo( $activo );
            $TiposprocedimientosDTO = $TiposprocedimientosDAO->selectTiposprocedimientos( $TiposprocedimientosDTO, '', $proveedor );
            if( $TiposprocedimientosDTO != '' ){
                foreach ($TiposprocedimientosDTO as $tipoProcedimiento) {
                    $arrTiposProcedimientos[] = array( 'id' => $tipoProcedimiento->getCveTipoProcedimiento(), "desc" => $tipoProcedimiento->getDesTipoProcedimiento() );
                }
            }

            //obtencion del las sentencias
            $SentenciaspublicasDAO = new SentenciaspublicasDAO();
            foreach ($ActuacionesDTO as $actuacion) {
                $idActuacionSP = '';
                $SentenciaspublicasDTO = new SentenciaspublicasDTO();
                $idActuacion = $actuacion->getIdActuacion();
                $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
                $SentenciaspublicasDTO->setEstado( $estadoSentencia );
                $SentenciaspublicasDTO = $SentenciaspublicasDAO->selectSentenciaspublicas( $SentenciaspublicasDTO, '', $proveedor );
                if( $SentenciaspublicasDTO != '' ){
                    $idActuacionSP = $SentenciaspublicasDTO[0]->getIdActuacion();
                }

                //validaciOn del tipo de carpeta
                $descTipoCarpeta = 'No disponible';
                foreach ($arrTiposCarpetas as $tipoCarpeta) {
                    if( $actuacion->getCveTipoCarpeta() == $tipoCarpeta['id'] ){
                        $descTipoCarpeta = $tipoCarpeta['desc'];
                    }
                }

                //validacion del tipo de sentencia
                foreach ($arrSentidosResoluciones as $sentidoResolucion) {
                    if( $actuacion->getCveTipoResolucion() == $sentidoResolucion['id'] ){
                        $descSentidoResolucion = $sentidoResolucion['desc'];
                    }
                }

                //validacion del tipo de procedimiento
                foreach ($arrTiposProcedimientos as $tipoProcedimiento) {
                    if( $actuacion->getCveTipoProcedimiento() == $tipoProcedimiento['id'] ){
                        $descTipoProcedimiento = $tipoProcedimiento['desc'];
                    }
                }

                foreach ($arrJuzgados as $juzgado) {
                    if( $actuacion->getCveJuzgado() == $juzgado['id'] ){
                        $juzgadoId = $juzgado['id'];
                        $juzgadoTipo = $juzgado['tipo'];
                        $juzgadoDesc = $juzgado['desc'];
                    }
                }

                //obtencion de las imagenes de la sentencia publica
                $DocumentosimgDTO = new DocumentosimgDTO();
                $DocumentosimgController = new DocumentosimgController();
                $ImagenesController = new ImagenesController();
                $imagenes = '';

                $DocumentosimgDTO->setIdActuacion( $actuacion->getIdActuacion() );
                $DocumentosimgDTO->setActivo( 'S' );
                $DocumentosimgDTO = $DocumentosimgController->selectDocumentosimg( $DocumentosimgDTO , '', $proveedor);
                if( $DocumentosimgDTO != '' ){
                    foreach ($DocumentosimgDTO as $documento) {
                        $ImagenesDTO = new ImagenesDTO();
                        $ImagenesDTO->setIdDocumentoImg( $documento->getIdDocumentoImg() );
                        $ImagenesDTO->setActivo('S');
                        $ImagenesDTO = $ImagenesController->selectImagenes( $ImagenesDTO, '', $proveedor );
                        if( $ImagenesDTO != '' ){
                            foreach ($ImagenesDTO as $imagen) {
                                $imagenes = $imagen->getRuta();
                            }
                        }
                    }
                }
                if( $idActuacion == $idActuacionSP ){
                    $respuestaActuaciones[] = array( 
                                    "id"=>$actuacion->getIdActuacion(),
                                    "numeroAct"=>$actuacion->getNumActuacion(),
                                    "anioAct"=>$actuacion->getAniActuacion(),
                                    "ref"=>$actuacion->getIdReferencia(),
                                    "numero"=>$actuacion->getNumero(),
                                    "anio"=>$actuacion->getAnio(),
                                    "carpeta"=>$actuacion->getCveTipoCarpeta(),
                                    "descCarpeta"=>$descTipoCarpeta,
                                    "juzgado"=>$juzgadoId,
                                    "tipoJuzgado"=>$juzgadoTipo,
                                    "descJuzgado"=>$juzgadoDesc,
                                    "sintesis"=>$actuacion->getSintesis(),
                                    "descSintesis"=>substr( $actuacion->getSintesis(), 0,49 ) . '...',
                                    "tipoResolucion"=>$actuacion->getCveTipoResolucion(),
                                    "descSentidoResolucion"=>$descSentidoResolucion,
                                    "tipoProcedimiento"=>$actuacion->getCveTipoProcedimiento(),
                                    "descTipoProcedimiento"=>$descTipoProcedimiento,
                                    "registro"=>$actuacion->getFechaRegistro(),
                                    "rutaPDF"=>$imagenes);
                    $estatusRegistro = true;
                }
            }
            if( $estatusRegistro ){
                $status = 'true';
                $mensaje = 'Registros encontrados.';
                $data = $respuestaActuaciones;
            }else{
                $status = 'error';
                $mensaje = 'No se encontraron registros con los parametros de b&uacute;squeda. Intente con otros.';
                $data = '';
            }
        }else{
            $status = 'error';
            $mensaje = 'No se encontraron registros con los parametros de b&uacute;squeda. Intente con otros.';
            $data = '';
        }
        $proveedor->close();

        $respuesta["status"] = $status;
        $respuesta["mensaje"] = $mensaje;
        $respuesta["data"] = $data;
        return $respuesta;
    }

    /**
    * FunciOn para aprobar de forma masiva sentencias
    **/
    public function aprobacionMasiva($parametros)
    {
        //proceso, obtencion del id de cada sentencia a traves del id de actuacion
        //actualizacion del status de 1 a 2 (pendiente a aprobado) de cada sentencia

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $idsAprobacion = $parametros['idsAprobacion'];
        $SentenciaspublicasController = new SentenciaspublicasController();
        $transaccion = false;
        $idSentenciaPublica = '';
        $registrosAprobados = 0;
        $respuesta = array('estatus' => '', 'mensaje' => '');
        $errMsg = '';

        // foreach ($idsAprobacion as $idActuacion) {
        $idActuacion = $idsAprobacion;
        {
            //obtencion del id de la sentencia publica
            $SentenciaspublicasDTO = new SentenciaspublicasDTO();
            $SentenciaspublicasDTO->setIdActuacion( $idActuacion );
            $SentenciaspublicasDTO = $SentenciaspublicasController->selectSentenciaspublicas( $SentenciaspublicasDTO, '', $proveedor );
            if( $SentenciaspublicasDTO != '' ){
                $idSentenciaPublica = $SentenciaspublicasDTO[0]->getIdSentenciaP();
                //colocacion del texto al pie del contenido de la actuacion
                $respuestaPie = $this->piePaginaActuacion( $idActuacion, $proveedor );
                if( $respuestaPie ){
                    //actualizacion del status de la sentencia
                    $SentenciaspublicasDTOAct = new SentenciaspublicasDTO();
                    $SentenciaspublicasDTOAct->setIdSentenciaP( $idSentenciaPublica );
                    $SentenciaspublicasDTOAct->setEstado('2');
                    $SentenciaspublicasDTOAct = $SentenciaspublicasController->updateSentenciaspublicas( $SentenciaspublicasDTOAct, $proveedor);
                    if( $SentenciaspublicasDTOAct != '' ){
                        //actualizar el pdf
                        // $jsonResp = $this->actualizaPDF( $idActuacion );
                        // error_log('$jsonResp');
                        // error_log( print_r( $jsonResp,true ));
                        $registrosAprobados++;
                        $transaccion = true;
                    }else{
                        $transaccion = false;
                        $errMsg = 'ERR:SPA02'; //No se logrO actualizar el registro de la sentencia publica
                        return false;
                    }
                }else{
                    $transaccion = false;
                    $errMsg = 'ERR:SPA03'; //no se actualizo con el pie de pagina
                    return false;
                }
            }else{
                $transaccion = false;
                $errMsg = 'ERR:SPA01'; //No se encuentra el registro de la sentencia publica
                return false;
            }
        }
        if( $transaccion ){
            $proveedor->execute("COMMIT");
            $respuesta['estatus'] = 'ok';
            $respuesta['mensaje'] = 'Se aprobaron ' . $registrosAprobados . ' registros.';
        }else{
            $proveedor->execute("ROLLBACK");
            $respuesta['estatus'] = 'error';
            $respuesta['mensaje'] = 'Error en la Aprobaci&oacute;n. Intente de nuevo. ' . $errMsg;
        }
        $proveedor->close();
        return $respuesta;
    }

    public function piePaginaActuacion( $idActuacion , $proveedor ){
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDTOpie = new ActuacionesDTO();
        $ActuacionesController = new ActuacionesController();
        $contenidoDocumento = '';
        $transaccion = false;

        //ontencion del contenido actual
        $ActuacionesDTO->setIdActuacion( $idActuacion );
        $ActuacionesDTO = $ActuacionesController->selectActuaciones( $ActuacionesDTO, $proveedor );
        if( $ActuacionesDTO != '' ){

            //asignacion del nuevo contenido
            $contenidoDocumento = utf8_decode( $ActuacionesDTO[0]->getObservaciones() ) . $this->descripcionPie();
            $ActuacionesDTOpie->setIdActuacion( $idActuacion );
            $ActuacionesDTOpie->setObservaciones( $contenidoDocumento );
            $ActuacionesDTOpie = $ActuacionesController->validarActuaciones( $ActuacionesDTOpie );
            $ActuacionesDTOpie = $ActuacionesController->updateActuaciones( $ActuacionesDTOpie, $proveedor );
            if( $ActuacionesDTOpie != '' ){
                $transaccion = true;
            }else{
                //no se logro actualizar el contenido de la sentencia y colocar el texto en el pie de pagina
            }

        }else{
            //no existe el registro
        }
        return $transaccion;
    }

    public function descripcionPie(){
        $pie = utf8_decode('<p>&nbsp;</p><p style="text-align: center; font-weight: bold; font-size: 125%;"><b>"La presente es copia del original que se tuvo a la vista y que obra en los archivos de esta dependencia y concuerda fielmente en las partes no testadas, se entrega en versión pública en términos del artículo 2, fracción XIV de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios por contener datos clasificados en términos de los artículos 20 y 25 del citado ordenamiento legal."</b></p>');
        return $pie;
    }

    public function actualizaPDF($idActuacion='0')
    {
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesController = new ActuacionesController();

        $ActuacionesDTO->setIdActuacion( $idActuacion );
        $jsonPDF = utf8_encode( $ActuacionesController->generarJson( $ActuacionesDTO, '33', '2') );
        //error_log('$jsonPDF');
        echo($jsonPDF);

        $FirmaPdfFacade = new FirmaPdfFacade();
        $respuesta = $FirmaPdfFacade->generaPdf( json_decode( $jsonPDF ), false);
        return json_encode($respuesta);        
    }


    private function fechaNormal($fecha)
    {
        list($fecha, $hora) = explode(' ', $fecha);
        list($anio, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $anio . " " . $hora;
    }
}
