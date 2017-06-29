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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetas/ImputadoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidoscarpetas/OfendidoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitoscarpetas/DelitoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossentencias/ImputadossentenciasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossentencias/TipossentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipossentencias/TipossentenciasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossanciones/ImputadossancionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossanciones/ImputadossancionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossanciones/TipossancionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipossanciones/TipossancionesController.Class.php");

/*
 * TIPOS DE CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
/*
 * IMPUTADOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
/*
 * OFENDIDOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");

/*
 * LOGGER Y VALIDACION
 */
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
/*
 * ANTECEDENTES CARPETAS
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
/*
 * Contadores
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/contadores/ContadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
/*
 * Juzgados
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../ceresos/CeresosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposformulaciones/TiposformulacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposformulaciones/TiposformulacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/beneficioses/BeneficiosesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipossanciones/TipossancionesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
//juzgadores carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");
//incompetencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/incompetencias/IncompetenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/incompetencias/IncompetenciasDAO.Class.php");

class CarpetasjudicialesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getidCarpetaJudicial()))));
        $CarpetasjudicialesDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveEtapaProcesal()))));
        $CarpetasjudicialesDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveConsignacion()))));
        $CarpetasjudicialesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveTipoCarpeta()))));
        $CarpetasjudicialesDto->setnumero(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnumero()))));
        $CarpetasjudicialesDto->setanio(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getanio()))));
        $CarpetasjudicialesDto->setfechaRadicacion(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getfechaRadicacion()))));
        $CarpetasjudicialesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getfechaRegistro()))));
        $CarpetasjudicialesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getfechaActualizacion()))));
        $CarpetasjudicialesDto->setactivo(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getactivo()))));
        $CarpetasjudicialesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveJuzgado()))));
        $CarpetasjudicialesDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcarpetaInv()))));
        $CarpetasjudicialesDto->setnuc(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnuc()))));
        $CarpetasjudicialesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveUsuario()))));
        $CarpetasjudicialesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getobservaciones()))));
        $CarpetasjudicialesDto->setnumImputados(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnumImputados()))));
        $CarpetasjudicialesDto->setnumOfendidos(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnumOfendidos()))));
        $CarpetasjudicialesDto->setnumDelitos(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnumDelitos()))));
        $CarpetasjudicialesDto->setcveEstatusCarpeta(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveEstatusCarpeta()))));
        $CarpetasjudicialesDto->setincompetencia(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getincompetencia()))));
        $CarpetasjudicialesDto->setcveTipoIncompetencia(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveTipoIncompetencia()))));
        $CarpetasjudicialesDto->setacumulado(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getacumulado()))));
        $CarpetasjudicialesDto->setnumAcumulado(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getnumAcumulado()))));
        $CarpetasjudicialesDto->setfechaTermino(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getfechaTermino()))));
        $CarpetasjudicialesDto->setcveConclucion(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getcveConclucion()))));
        $CarpetasjudicialesDto->setponderacion(strtoupper(str_ireplace("'", "", trim($CarpetasjudicialesDto->getponderacion()))));
        return $CarpetasjudicialesDto;
    }

    public function selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = null) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);

        return $CarpetasjudicialesDto;
    }

    public function validaCampos($CarpetasjudicialesDto) {
        $validacion = new Validacion();
        $juzgado = $CarpetasjudicialesDto->getCveJuzgado();
        $carpeta = $CarpetasjudicialesDto->getCveTipoCarpeta();
        $numero = $CarpetasjudicialesDto->getNumero();
        $anio = $CarpetasjudicialesDto->getAnio();
        $estatus = true;
        $mensaje = [];
        if ($juzgado == 0) {
            $mensaje["mensaje"] = "Debes elegir un Juzgado";
            $estatus = false;
        } else if ($carpeta == 0) {
            $mensaje["mensaje"] = "Debes elegir un tipo de carpeta";
            $estatus = false;
        } else if ($numero == "" || $anio == "") {
            $mensaje["mensaje"] = utf8_encode("El campo N�mero de Causa esta vacio");
            $estatus = false;
        }
        if ($estatus == true) {
            $estatus = array("status" => "ok");
        } else {
            $estatus = array("status" => "error");
        }
        $respuesta = array_merge(array("mensaje" => array_merge($estatus, $mensaje)));

        return $respuesta;
    }

    public function selectCarpetasjudicialeseliminar($CarpetasjudicialesDto, $proveedor = null) {
        $respuesta = array();
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $validaCampos = $this->validaCampos($CarpetasjudicialesDto);
        if ($validaCampos['mensaje']['status'] != "ok") {
            exit(json_encode($validaCampos));
        }
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);
        if ($CarpetasjudicialesDto != "") {
            $respuesta["mensaje"] = array("status" => "ok", "mensaje" => "EXISTE EL REGISTRO");
            foreach ($CarpetasjudicialesDto as $CarpetajudicialDto) {
                $respuesta["datos"] = array("idCarpetaJudicial" => utf8_encode($CarpetajudicialDto->getIdCarpetaJudicial()), "carpetaInv" => utf8_encode($CarpetajudicialDto->getCarpetaInv()), "observaciones" => utf8_encode($CarpetajudicialDto->getObservaciones()));
                $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                $ImputadoscarpetasDto->setIdCarpetaJudicial($CarpetajudicialDto->getIdCarpetaJudicial());
                $ImputadoscarpetasDto->setActivo("S");
                $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
                /*
                  IMPUTADOS
                 */
                foreach ($ImputadoscarpetasDto as $ImputadocarpetaDto) {
                    $respuesta["imputados"][] = array("idImputadoCarpeta" => utf8_encode($ImputadocarpetaDto->getIdImputadoCarpeta()), "idCarpetaJudicial" => utf8_encode($ImputadocarpetaDto->getIdCarpetaJudicial()), "nombre" => utf8_encode($ImputadocarpetaDto->getNombre() . " " . $ImputadocarpetaDto->getPaterno() . " " . $ImputadocarpetaDto->getMaterno()), "alias" => utf8_encode($ImputadocarpetaDto->getAlias()), "cveGenero" => utf8_encode($ImputadocarpetaDto->getCveGenero()));
                }
                /*
                  GENERO IMPUTADO
                 */
                foreach ($respuesta['imputados'] as $indexgenero => $genero) {
                    $generosDto = new GenerosDTO();
                    $generosDto->setCveGenero($genero['cveGenero']);
                    $generosDao = new GenerosDAO();
                    $generosDto = $generosDao->selectgeneros($generosDto, "", $this->proveedor);
                    foreach ($generosDto as $valueGenero) {
                        $respuesta['imputados'][$indexgenero]['genero'][] = array("cveGenero" => $valueGenero->getCveGenero(), "desGenero" => $valueGenero->getDesGenero());
                    }
                }
                /*
                  DOMICILIO IMPUTADO
                 */
                foreach ($respuesta['imputados'] as $indexdomicilio => $domicilio) {
                    $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                    $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($domicilio['idImputadoCarpeta']);
                    $domiciliosimputadoscarpetasDto->setActivo("S");
                    $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                    $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectdomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $this->proveedor);
                    if ($domiciliosimputadoscarpetasDto != "") {
                        foreach ($domiciliosimputadoscarpetasDto as $valueDomicilio) {
                            $respuesta['imputados'][$indexdomicilio]['domicilio'][] = array("idDomicilioImputadoCarpeta" => $valueDomicilio->getIdDomicilioImputadoCarpeta(), "direccion" => utf8_encode($valueDomicilio->getDireccion()), "colonia" => utf8_encode($valueDomicilio->getColonia()), "numExterior" => utf8_encode($valueDomicilio->getNumExterior()), "numInterior" => utf8_encode($valueDomicilio->getNumInterior()), "cp" => utf8_encode($valueDomicilio->getCp()));
                        }
                    } else {
                        $respuesta['imputados'][$indexdomicilio]['domicilio'][] = array("idDomicilioImputadoCarpeta" => "", "direccion" => "", "colonia" => "", "numExterior" => "", "numInterior" => "", "cp" => "");
                    }
                }
                /*
                  DEFENSOR IMPUTADO
                 */
                foreach ($respuesta['imputados'] as $indexdefensor => $defensor) {
                    $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                    $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($defensor['idImputadoCarpeta']);
                    $defensoresimputadoscarpetasDto->setActivo("S");
                    $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                    $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectdefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $this->proveedor);
                    if ($defensoresimputadoscarpetasDto != "") {
                        foreach ($defensoresimputadoscarpetasDto as $valueDefensor) {
                            $respuesta['imputados'][$indexdefensor]['defensor'][] = array("idDefensorImputadoCarpeta" => $valueDefensor->getIdDefensorImputadoCarpeta(), "nombre" => utf8_encode($valueDefensor->getNombre()));
                        }
                    } else {
                        $respuesta['imputados'][$indexdefensor]['defensor'][] = array("idDefensorImputadoCarpeta" => "", "nombre" => "");
                    }
                }
                $OfendidosCarpetasDto = new OfendidosCarpetasDTO();
                $OfendidosCarpetasDto->setIdCarpetaJudicial($CarpetajudicialDto->getIdCarpetaJudicial());
                $OfendidosCarpetasDto->setActivo("S");
                $OfendidosCarpetasDao = new OfendidosCarpetasDAO();
                $OfendidosCarpetasDto = $OfendidosCarpetasDao->selectOfendidosCarpetas($OfendidosCarpetasDto, $proveedor);
                /*
                  OFENDIDOS
                 */
                foreach ($OfendidosCarpetasDto as $OfendidoCarpetaDto) {
                    $respuesta["ofendidos"][] = array("idOfendidoCarpeta" => utf8_encode($OfendidoCarpetaDto->getIdOfendidoCarpeta()), "idCarpetaJudicial" => utf8_encode($OfendidoCarpetaDto->getIdCarpetaJudicial()), "nombre" => utf8_encode($OfendidoCarpetaDto->getNombre() . " " . $OfendidoCarpetaDto->getPaterno() . " " . $OfendidoCarpetaDto->getMaterno()), "cveGenero" => utf8_encode($OfendidoCarpetaDto->getCveGenero()));
                }
                /*
                  GENERO OFENDIDO
                 */
                foreach ($respuesta['ofendidos'] as $indexgenero => $genero) {
                    $generosDto = new GenerosDTO();
                    $generosDto->setCveGenero($genero['cveGenero']);
                    $generosDao = new GenerosDAO();
                    $generosDto = $generosDao->selectgeneros($generosDto, "", $this->proveedor);
                    foreach ($generosDto as $valueGenero) {
                        $respuesta['ofendidos'][$indexgenero]['genero'][] = array("cveGenero" => $valueGenero->getCveGenero(), "desGenero" => $valueGenero->getDesGenero());
                    }
                }
                /*
                  DOMICILIO OFENDIDO
                 */
                foreach ($respuesta['ofendidos'] as $indexdomicilioofendido => $domicilioofendido) {
                    $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                    $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($domicilioofendido['idOfendidoCarpeta']);
                    $domiciliosofendidoscarpetasDto->setActivo("S");
                    $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
                    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectdomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $this->proveedor);
                    if ($domiciliosofendidoscarpetasDto != "") {
                        foreach ($domiciliosofendidoscarpetasDto as $valueDomicilioofendido) {
                            $respuesta['ofendidos'][$indexdomicilioofendido]['domicilio'][] = array("idDomicilioOfendidoCarpeta" => $valueDomicilioofendido->getIdDomicilioOfendidoCarpeta(), "direccion" => utf8_encode($valueDomicilioofendido->getDireccion()), "colonia" => utf8_encode($valueDomicilioofendido->getColonia()), "numExterior" => utf8_encode($valueDomicilioofendido->getNumExterior()), "numInterior" => utf8_encode($valueDomicilioofendido->getNumInterior()), "cp" => utf8_encode($valueDomicilioofendido->getCp()));
                        }
                    } else {
                        $respuesta['ofendidos'][$indexdomicilioofendido]['domicilio'][] = array("idDomicilioOfendidoCarpeta" => "", "direccion" => "", "colonia" => "", "numExterior" => "", "numInterior" => "", "cp" => "");
                    }
                }
                /*
                  DEFENSOR OFENDIDO
                 */
                foreach ($respuesta['ofendidos'] as $indexdefensorofendido => $defensorofendido) {
                    $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                    $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($defensorofendido['idOfendidoCarpeta']);
                    $defensoresofendidoscarpetasDto->setActivo("S");
                    $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectdefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $this->proveedor);
                    if ($defensoresofendidoscarpetasDto != "") {
                        foreach ($defensoresofendidoscarpetasDto as $valueDefensorOfendido) {
                            $respuesta['ofendidos'][$indexdefensorofendido]['defensor'][] = array("idDefensorOfendidoCarpeta" => $valueDefensorOfendido->getIdDefensorOfendidoCarpeta(), "nombre" => utf8_encode($valueDefensorOfendido->getNombre()));
                        }
                    } else {
                        $respuesta['ofendidos'][$indexdefensorofendido]['defensor'][] = array("idDefensorOfendidoCarpeta" => "", "nombre" => "");
                    }
                }
                $DelitosCarpetasDto = new DelitosCarpetasDTO();
                $DelitosCarpetasDto->setIdCarpetaJudicial($CarpetajudicialDto->getIdCarpetaJudicial());
                $DelitosCarpetasDto->setActivo("S");
                $DelitosCarpetasDao = new DelitosCarpetasDAO();
                $DelitosCarpetasDto = $DelitosCarpetasDao->selectDelitosCarpetas($DelitosCarpetasDto, $proveedor);
                /*
                  DELITOS
                 */
                foreach ($DelitosCarpetasDto as $DelitoCarpetaDto) {
                    $respuesta["delitos"][] = array("idDelitoCarpeta" => utf8_encode($DelitoCarpetaDto->getIdDelitoCarpeta()), "cveDelito" => utf8_encode($DelitoCarpetaDto->getCveDelito()));
                }
                /*
                  DESCRIPCION DELITO
                 */
                foreach ($respuesta['delitos'] as $indexdelito => $delito) {
                    $delitosDto = new DelitosDTO();
                    $delitosDto->setCveDelito($delito['cveDelito']);
                    $delitosDao = new DelitosDAO();
                    $delitosDto = $delitosDao->selectdelitos($delitosDto, "", $this->proveedor);
                    if ($delitosDto != "") {
                        foreach ($delitosDto as $valueDelitos) {
                            $respuesta['delitos'][$indexdelito]['descripcion'][] = array("cveDelito" => $valueDelitos->getCveDelito(), "desDelito" => utf8_encode($valueDelitos->getDesDelito()));
                        }
                    }
                }
            }
        } else {
            $respuesta["mensaje"] = array("status" => "error", "mensaje" => "NO EXISTE NINGUN REGISTRO");
        }
        return json_encode($respuesta);
    }

    public function insertCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = null) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->insertCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);
        return $CarpetasjudicialesDto;
    }

    public function updateCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = null) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
//$tmpDto = new CarpetasjudicialesDTO();
//$tmpDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto,$proveedor);
//if($tmpDto!=""){//$CarpetasjudicialesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->updateCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);
        return $CarpetasjudicialesDto;
//}
//return "";
    }

    public function eliminarCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute('BEGIN');
        /*
          DESACTIVA CARPETAS JUDICIALES
         */
        try {
            $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
            $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
            $CarpetasjudicialesDto = $CarpetasjudicialesDao->updateCarpetasjudiciales($CarpetasjudicialesDto, $this->proveedor);
            if ($CarpetasjudicialesDto == "") {
                $resultado = array("status" => "error", "mensaje" => utf8_encode("El registro no existe"));
                return json_encode($resultado);
            }
            /*
              DESACTIVA IMPOFEDELCARPETAS
             */
            $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
            $ImpofedelcarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $ImpofedelcarpetasDto->setActivo("S");
            $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
            if ($ImpofedelcarpetasDto != "") {
                foreach ($ImpofedelcarpetasDto as $ImpofedelcarpetaDto) {
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetaDto->getIdImpOfeDelCarpeta());
                    $ImpofedelcarpetasDto->setActivo("N");
                    $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                    if ($ImpofedelcarpetasDto == "")
                        throw new Exception('ERROR AL MODIFICAR IMPOFEDEL CARPETAS');
                    /*
                      DESACTIVA EFECTOS OFENDIDOS CARPETAS
                     */
                    $EfectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                    $EfectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetaDto->getIdImpOfeDelCarpeta());
                    $EfectosofendidoscarpetasDto->setActivo("S");
                    $EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                    $EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, "", $this->proveedor);
                    if ($EfectosofendidoscarpetasDto != "") {
                        foreach ($EfectosofendidoscarpetasDto as $EfectoofendidocarpetaDto) {
                            $EfectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                            $EfectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta($EfectoofendidocarpetaDto->getIdEfectoOfendidoCarpeta());
                            $EfectosofendidoscarpetasDto->setActivo("N");
                            $EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                            $EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto, $this->proveedor);
                            if ($EfectosofendidoscarpetasDto == "")
                                throw new Exception('ERROR AL MODIFICAR EFECTOS OFENDIDOS CARPETAS');
                        }
                    }
                    /*
                      DESACTIVA VIOLENCIA DE GENERO CARPETAS
                     */
                    $ViolenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                    $ViolenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetaDto->getIdImpOfeDelCarpeta());
                    $ViolenciadegenerocarpetasDto->setActivo("S");
                    $ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                    $ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, "", $this->proveedor);
                    if ($ViolenciadegenerocarpetasDto != "") {
                        foreach ($ViolenciadegenerocarpetasDto as $ViolenciadegenerocarpetaDto) {
                            $ViolenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                            $ViolenciadegenerocarpetasDto->setIdViolenciaDeGeneroCarpeta($ViolenciadegenerocarpetaDto->getIdViolenciaDeGeneroCarpeta());
                            $ViolenciadegenerocarpetasDto->setActivo("N");
                            $ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                            $ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto, $this->proveedor);
                            if ($ViolenciadegenerocarpetasDto == "")
                                throw new Exception('ERROR VIOLENCIA DE GENEROS CARPETAS');
                            /*
                              DESACTIVA VIOLENCIA FACTORES SOCIALES CARPETAS
                             */
                            $ViolenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                            $ViolenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($ViolenciadegenerocarpetaDto->getIdViolenciaDeGeneroCarpeta());
                            $ViolenciafactoressocialescarpetasDto->setActivo("S");
                            $ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                            $ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, "", $this->proveedor);
                            if ($ViolenciafactoressocialescarpetasDto != "") {
                                foreach ($ViolenciafactoressocialescarpetasDto as $ViolenciafactorsocialcarpetasDto) {
                                    $ViolenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                    $ViolenciafactoressocialescarpetasDto->setIdViolenciaFactorSocialCarpeta($ViolenciafactorsocialcarpetasDto->getIdViolenciaFactorSocialCarpeta());
                                    $ViolenciafactoressocialescarpetasDto->setActivo("N");
                                    $ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                    $ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto, "", $this->proveedor);
                                    if ($ViolenciafactoressocialescarpetasDto == "")
                                        throw new Exception('ERROR VIOLENCIA FACTORES SOCIALES CARPETAS');
                                }
                            }
                            /*
                              DESACTIVA VIOLENCIA HOMICIDIOS DOLOSOS CARPETAS
                             */
                            $ViolenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                            $ViolenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($ViolenciadegenerocarpetaDto->getIdViolenciaDeGeneroCarpeta());
                            $ViolenciahomicidiosdolososcarpetasDto->setActivo("S");
                            $ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                            $ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, "", $this->proveedor);
                            if ($ViolenciahomicidiosdolososcarpetasDto != "") {
                                foreach ($ViolenciahomicidiosdolososcarpetasDto as $ViolenciahomicidiodolosocarpetaDto) {
                                    $ViolenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                    $ViolenciahomicidiosdolososcarpetasDto->setidViolenciaHomicidioDolosoCarpeta($ViolenciahomicidiodolosocarpetaDto->getidViolenciaHomicidioDolosoCarpeta());
                                    $ViolenciahomicidiosdolososcarpetasDto->setActivo("N");
                                    $ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                    $ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto, "", $this->proveedor);
                                    if ($ViolenciahomicidiosdolososcarpetasDto == "")
                                        throw new Exception('ERROR VIOLENCIA HOMICIDIOS DOLOSOS CARPETAS');
                                }
                            }
                        }
                    }
                    /*
                      DESACTIVA TRATA PERSONAS CARPETAS
                     */
                    $TrataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                    $TrataspersonascarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetaDto->getIdImpOfeDelCarpeta());
                    $TrataspersonascarpetasDto->setActivo("S");
                    $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                    $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->selectTrataspersonascarpetas($TrataspersonascarpetasDto, "", $this->proveedor);
                    if ($TrataspersonascarpetasDto != "") {
                        foreach ($TrataspersonascarpetasDto as $TratapersonacarpetaDto) {
                            $TrataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                            $TrataspersonascarpetasDto->setIdTrataPersonaCarpeta($TratapersonacarpetaDto->getIdTrataPersonaCarpeta());
                            $TrataspersonascarpetasDto->setActivo("N");
                            $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                            $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->updateTrataspersonascarpetas($TrataspersonascarpetasDto, "", $this->proveedor);
                            if ($TrataspersonascarpetasDto == "")
                                throw new Exception('ERROR TRATA PERSONAS CARPETAS');
                        }
                    }
                    /*
                      DESACTIVA SEXUALES CARPETAS
                     */
                    $SexualescarpetasDto = new SexualescarpetasDTO();
                    $SexualescarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetaDto->getIdImpOfeDelCarpeta());
                    $SexualescarpetasDto->setActivo("S");
                    $SexualescarpetasDao = new SexualescarpetasDAO();
                    $SexualescarpetasDto = $SexualescarpetasDao->selectSexualescarpetas($SexualescarpetasDto, "", $this->proveedor);
                    if ($SexualescarpetasDto != "") {
                        foreach ($SexualescarpetasDto as $SexualcarpetaDto) {
                            $SexualescarpetasDto = new SexualescarpetasDTO();
                            $SexualescarpetasDto->setIdSexualCarpeta($SexualcarpetaDto->getIdSexualCarpeta());
                            $SexualescarpetasDto->setActivo("N");
                            $SexualescarpetasDao = new SexualescarpetasDAO();
                            $SexualescarpetasDto = $SexualescarpetasDao->updateSexualescarpetas($SexualescarpetasDto, "", $this->proveedor);
                            if ($SexualescarpetasDto == "")
                                throw new Exception('ERROR SEXUALES CARPETAS');
                            /*
                              DESACTIVA TESTIGOS SEXUALES CARPETAS
                             */
                            $TestigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                            $TestigossexualescarpetasDto->setIdSexualCarpeta($SexualcarpetaDto->getIdSexualCarpeta());
                            $TestigossexualescarpetasDto->setActivo("S");
                            $TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                            $TestigossexualescarpetasDto = $TestigossexualescarpetasDao->selectTestigossexualescarpetas($TestigossexualescarpetasDto, "", $this->proveedor);
                            if ($TestigossexualescarpetasDto != "") {
                                foreach ($TestigossexualescarpetasDto as $TestigosexualcarpetaDto) {
                                    $TestigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                    $TestigossexualescarpetasDto->setIdTestigoSexualCarpeta($TestigosexualcarpetaDto->getIdTestigoSexualCarpeta());
                                    $TestigossexualescarpetasDto->setActivo("N");
                                    $TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                    $TestigossexualescarpetasDto = $TestigossexualescarpetasDao->updateTestigossexualescarpetas($TestigossexualescarpetasDto, "", $this->proveedor);
                                    if ($TestigossexualescarpetasDto == "")
                                        throw new Exception('ERROR TESTIGOS SEXUALES CARPETAS');
                                }
                            }
                            /*
                              DESACTIVA SEXUALES CONDUCTAS CARPETAS
                             */
                            $SexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                            $SexualesconductascarpetasDto->setIdSexualCarpeta($SexualcarpetaDto->getIdSexualCarpeta());
                            $SexualesconductascarpetasDto->setActivo("S");
                            $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                            $SexualesconductascarpetasDto = $SexualesconductascarpetasDao->selectSexualesconductascarpetas($SexualesconductascarpetasDto, "", $this->proveedor);
                            if ($SexualesconductascarpetasDto != "") {
                                foreach ($SexualesconductascarpetasDto as $SexualconductacarpetaDto) {
                                    $SexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                    $SexualesconductascarpetasDto->setIdSexualConductaCarpeta($SexualconductacarpetaDto->getIdSexualConductaCarpeta());
                                    $SexualesconductascarpetasDto->setActivo("N");
                                    $SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                    $SexualesconductascarpetasDto = $SexualesconductascarpetasDao->updateSexualesconductascarpetas($SexualesconductascarpetasDto, "", $this->proveedor);
                                    if ($SexualesconductascarpetasDto == "")
                                        throw new Exception('ERROR SEXUALES CONDUCTAS CARPETAS');
                                    /*
                                      DESACTIVA DETALLES SEXUALES CONDUCTAS CARPETAS
                                     */
                                    $DetallessexualesconductascarpetasDto = new DetallessexualesconductascarpetasDTO();
                                    $DetallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($SexualconductacarpetaDto->getIdSexualConductaCarpeta());
                                    $DetallessexualesconductascarpetasDto->setActivo("S");
                                    $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
                                    $DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto, "", $this->proveedor);
                                    if ($DetallessexualesconductascarpetasDto != "") {
                                        foreach ($DetallessexualesconductascarpetasDto as $DetallesexualconductacarpetaDto) {
                                            $DetallessexualesconductascarpetasDto = new DetallessexualesconductascarpetasDTO();
                                            $DetallessexualesconductascarpetasDto->setIdDetalleSexualConductaCarpeta($DetallesexualconductacarpetaDto->getIdDetalleSexualConductaCarpeta());
                                            $DetallessexualesconductascarpetasDto->setActivo("N");
                                            $DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
                                            $DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->updateDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto, "", $this->proveedor);
                                            if ($SexualesconductascarpetasDto == "")
                                                throw new Exception('ERROR DETALLES SEXUALES CONDUCTAS CARPETAS');
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            /*
              DESACTIVA RELACION IMPUTADOS
             */
            $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
            $ImputadoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $ImputadoscarpetasDto->setActivo("S");
            $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
            $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto, "", $this->proveedor);
            if ($ImputadoscarpetasDto != "") {
                foreach ($ImputadoscarpetasDto as $ImputadocarpetaDto) {
                    $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                    $ImputadoscarpetasDto->setIdImputadoCarpeta($ImputadocarpetaDto->getIdImputadoCarpeta());
                    $ImputadoscarpetasController = new ImputadoscarpetasController();
                    $ImputadoscarpetasController = $ImputadoscarpetasController->eliminaImputado($ImputadoscarpetasDto);
                    $resultadoControllerImputado = json_decode($ImputadoscarpetasController);
                    if ($resultadoControllerImputado->status != "Ok")
                        throw new Exception('ERROR EN IMPUTADOS CARPETAS');
                }
            }
            /*
              DESACTIVA RELACION OFENDIDOS
             */
            $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
            $OfendidoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $OfendidoscarpetasDto->setActivo("S");
            $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
            $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto, "", $this->proveedor);
            if ($OfendidoscarpetasDto != "") {
                foreach ($OfendidoscarpetasDto as $OfendidocarpetaDto) {
                    $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
                    $OfendidoscarpetasDto->setIdOfendidoCarpeta($OfendidocarpetaDto->getIdOfendidoCarpeta());
                    $OfendidoscarpetasController = new OfendidoscarpetasController();
                    $OfendidoscarpetasController = $OfendidoscarpetasController->eliminarOfendido($OfendidoscarpetasDto);
                }
            }
            /*
              DESACTIVA RELACION DELITOS
             */
            $DelitoscarpetasDto = new DelitoscarpetasDTO();
            $DelitoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $DelitoscarpetasDto->setActivo("S");
            $DelitoscarpetasDao = new DelitoscarpetasDAO();
            $DelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto, "", $this->proveedor);
            if ($DelitoscarpetasDto != "") {
                foreach ($DelitoscarpetasDto as $DelitocarpetaDto) {
                    $DelitoscarpetasDto = new DelitoscarpetasDTO();
                    $DelitoscarpetasDto->setIdDelitoCarpeta($DelitocarpetaDto->getIdDelitoCarpeta());
                    $DelitoscarpetasDto->setActivo("N");
                    $DelitoscarpetasDao = new DelitoscarpetasDAO();
                    $DelitoscarpetasDto = $DelitoscarpetasDao->updateDelitoscarpetas($DelitoscarpetasDto, "", $this->proveedor);
                    if ($CarpetasjudicialesDto == "")
                        throw new Exception('ERROR EN DELITOS CARPETAS');
                }
            }
            $this->proveedor->execute('COMMIT');
            $resultado = array("status" => "ok", "mensaje" => utf8_encode("SE ELIMINO LA CARPETA CORRECTAMENTE"));
            return json_encode($resultado);
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');
            $resultado = array("status" => "error", "mensaje" => utf8_encode($e->getMessage()));
            return json_encode($resultado);
        }
    }

    public function deleteCarpetasjudiciales($CarpetasjudicialesDto, $proveedor = null) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->deleteCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);
        return $CarpetasjudicialesDto;
    }

    public function selectDetalleCarpetasjudicialesCateos($CarpetasjudicialesDto = "", $proveedor = null) {
        $tmp = "";
        if ($CarpetasjudicialesDto != "") {
            $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
            $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
            $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, $proveedor);

            if ($CarpetasjudicialesDto != "" && count($CarpetasjudicialesDto) > 0) {
                $CarpetasjudicialesDto = $CarpetasjudicialesDto[0];
                $tmp = array("carpetasJudiciales" => array(), "imputadosCarpetas" => array(), "ofendidosCarpetas" => array(), "delitosCarpetas" => array());
                array_push($tmp["carpetasJudiciales"], $CarpetasjudicialesDto);

                ###
                #Aqui consulta la informaci�n de los imputados, delitos y ofendidos relacionados a la carpeta judicial seleccionada
                ##
                $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                $ImputadoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
                if ($ImputadoscarpetasDto != "" && count($ImputadoscarpetasDto) > 0) {
                    foreach ($ImputadoscarpetasDto as $imputadoCarpeta) {
                        $domImputadoDto = new DomiciliosimputadoscarpetasDTO();
                        $domImputadoDao = new DomiciliosimputadoscarpetasDAO();
                        $domImputadoDto->setActivo("S");
                        $domImputadoDto->setIdImputadoCarpeta($imputadoCarpeta->getIdImputadoCarpeta());
                        $domImputadoDto = $domImputadoDao->selectDomiciliosimputadoscarpetas($domImputadoDto);
                        if ($domImputadoDto != "") {
                            $imputadoCarpeta->setEstadoNacimiento($domImputadoDto[0]->getDireccion());
                        }
                    }
                    array_push($tmp["imputadosCarpetas"], $ImputadoscarpetasDto);
                }

                $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
                $OfendidoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $OfendidoscarpetasDao = new OfendidoscarpetasDao();
                $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto, $proveedor);
                if ($OfendidoscarpetasDto != "" && count($OfendidoscarpetasDto) > 0) {
                    foreach ($OfendidoscarpetasDto as $ofendidoCarpeta) {
                        $domOfendidoDto = new DomiciliosofendidoscarpetasDTO();
                        $domOfendidoDao = new DomiciliosofendidoscarpetasDAO();
                        $domOfendidoDto->setActivo("S");
                        $domOfendidoDto->setIdOfendidoCarpeta($ofendidoCarpeta->getIdOfendidoCarpeta());
                        $domOfendidoDto = $domOfendidoDao->selectDomiciliosofendidoscarpetas($domOfendidoDto);
                        if ($domOfendidoDto != "") {
                            $ofendidoCarpeta->setEstadoNacimiento($domOfendidoDto[0]->getDireccion());
                        }
                    }
                    array_push($tmp["ofendidosCarpetas"], $OfendidoscarpetasDto);
                }

                $DelitoscarpetasDto = new DelitoscarpetasDTO();
                $DelitoscarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $DelitoscarpetasDao = new DelitoscarpetasDAO();
                $DelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto, $proveedor);
                if ($DelitoscarpetasDto != "" && count($DelitoscarpetasDto) > 0) {
                    array_push($tmp["delitosCarpetas"], $DelitoscarpetasDto);
                }
            }
        }
        return $tmp;
    }

    public function selectCarpetaExhortoAmparoById($idEAC, $cvetipoCarpeta) {
        switch ($cvetipoCarpeta) {
            case "8": // amparo
                $amparoDTO = new AmparosDTO();
                $amparoDAO = new AmparosDAO();
                $amparoDTO->setIdAmparo($idEAC);
                $amparoDTO = $amparoDAO->selectAmparos($amparoDTO);
                return $amparoDTO;
                break;
            case "7": // exhorto
                $exhortoDTO = new ExhortosDTO();
                $exhortoDAO = new ExhortosDAO();
                $exhortoDTO->setIdExhorto($idEAC);
                $exhortoDTO = $exhortoDAO->selectExhortos($exhortoDTO);
                return $exhortoDTO;
                break;
            default :
                $carpetasJudicialiesDto = new CarpetasjudicialesDTO();
                $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
                $carpetasJudicialiesDto->setIdCarpetaJudicial($idEAC);
                $carpetasJudicialiesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($carpetasJudicialiesDto);
                return $carpetasJudicialiesDto;
                break;
        }
    }

    public function selectCarpetaExhortoAmparo($CarpetasjudicialesDto) {
        $activo = $CarpetasjudicialesDto->getActivo();
        if ($activo == "") {
            $activo = "S";
        }
        switch ($CarpetasjudicialesDto->getCveTipoCarpeta()) {
            case "8": // amparo
                $amparoDTO = new AmparosDTO();
                $amparoDAO = new AmparosDAO();
                $amparoDTO->setIdAmparo($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $amparoDTO->setNumAmparo($CarpetasjudicialesDto->getNumero());
                $amparoDTO->setAniAmparo($CarpetasjudicialesDto->getAnio());
                $amparoDTO->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                $amparoDTO->setActivo($activo);
                $amparoDTO = $amparoDAO->selectAmparos($amparoDTO);
                return $amparoDTO;
                break;
            case "7": // exhorto
                $exhortoDTO = new ExhortosDTO();
                $exhortoDAO = new ExhortosDAO();
                $exhortoDTO->setIdExhorto($CarpetasjudicialesDto->getIdCarpetaJudicial());
                $exhortoDTO->setNumExhorto($CarpetasjudicialesDto->getNumero());
                $exhortoDTO->setAniExhorto($CarpetasjudicialesDto->getAnio());
                $exhortoDTO->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                $exhortoDTO->setActivo($activo);
                $exhortoDTO = $exhortoDAO->selectExhortos($exhortoDTO);
                return $exhortoDTO;
                break;
            default :
                $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
                $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
                $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
                return $CarpetasjudicialesDto;
                break;
        }
    }

    public function selectCarpetasImputadosActivos($carpetasjudicialesDto) {
        $tipo = $carpetasjudicialesDto->getcveTipoCarpeta();
        $num = $carpetasjudicialesDto->getnumero();
        $anio = $carpetasjudicialesDto->getanio();
        $juzgado = $carpetasjudicialesDto->getcveJuzgado();



        $imputadosController = new ImputadoscarpetasController();
        $actuacionesController = new ActuacionesController();
        $impofedelcarpetasController = new ImpofedelcarpetasController();

        $imputadossentenciasController = new ImputadossentenciasController();
        $actuacionesController = new ActuacionesController();
        $tipossentencias = new TipossentenciasController();
        $imputadossanciones = new ImputadossancionesController();
        $tipossancionesController = new TipossancionesController();

        $imputadosDto = new ImputadoscarpetasDTO();
        $actuacionesDto = new ActuacionesDTO();
        $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
        $imputadossentenciasDto = new ImputadossentenciasDTO();
        $actuacionesDto = new ActuacionesDTO();
        $tipossentenciasDto = new TipossentenciasDTO();
        $imputadossancionesDto = new ImputadossancionesDTO();
        $tipossancionesDto = new TipossancionesDTO();


        $carpetasjudicialesDto->setactivo("S");
        //print_r($carpetasjudicialesDto);
        $carpetas = $this->selectCarpetasjudiciales($carpetasjudicialesDto);

        $idCarpetaJudicial = "";
        if ($carpetas != "") {
            $idCarpetaJudicial = $carpetas[0]->getIdCarpetaJudicial();
        }


        $impofedelcarpetasDto->setActivo("S");
        $impofedelcarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        //print_r($impofedelcarpetasDto);
        $impofedelCarpetas = $impofedelcarpetasController->selectImpofedelcarpetas($impofedelcarpetasDto);


        ////////////////////////DECLARACION DE AREGLOS////////////////////
        $registro = "";
        $registro = array();

        $resultado = "";
        $resultado = array();

        $sancionesE = "";
        $sancionesE = array();

        $sancionesEnvia = "";
        $sancionesEnvia = array();

        $sancion = "";
        $sancion = array();

        $respuesta = "";
        $respuesta = array();
        /////////////////////////VARIABLES DENTRO DE IF DE IMPUTADOS/////////////////////////////
        $nombre = "";
        $paterno = "";
        $materno = "";
        $idimputadocarpeta = "";

        $intermedia = "";
        $idImpofe = "";
        $idActuacionImputado = "";
        $idImputSentencia = "";
        $claveSentencia = "";
        $desSentencia = "";
        $imputadoSen = "";
        $sanciones = "";
        $sancion = "";
        $fechamulta = "";
        $imputadoSan = "";
        $especificacion = "";
        $desTipoSancion = "";
        $tipo = "";
        $fecha = "";
        $contador = 0;
        $tipos = "";
        $idSancion = "";
        $cuentaSanciones = 0;
        $imputadoSentencia = "";
        $idCarpeta = "";
        $tblsanidmpsent = "";

        //////////////BUSQUEDA DE LOS IDENTIFICADORES DE LAS CARPETAS JUDICIALES PARA PODER BUSCAR A LOS IMPUTADOS/////////////////////////////////
        $idCarpetas = "";
        $cadena = "";


        if ($carpetas != "" && $impofedelCarpetas != "") {
            // foreach ($carpetas as $carpeta) {
            $idCarpetas = $carpetas[0]->getIdCarpetaJudicial();


            $cadena = substr($cadena, 1);

            $imputadosDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $imputadosDto->setActivo("S");

            $imputados = $imputadosController->selectImputadoscarpetas($imputadosDto);

            if ($imputados != "") {

                foreach ($imputados as $imputado) {
                    /////////////////////////OBTENCION DE INFORMACION DEL IMPUTADO//////////////////////////////////////
                    $idimputadocarpeta = $imputado->getidimputadocarpeta();
                    $nombre = "";
                    $paterno = "";
                    $materno = "";
                    $cveTipoPersona = $imputado->getCveTipoPersona();
                    if ($imputado->getCveTipoPersona() == 1) {
                        $nombre = utf8_encode($imputado->getnombre());
                        $paterno = utf8_encode($imputado->getpaterno());
                        $materno = utf8_encode($imputado->getmaterno());
                    } else {
                        $nombre = utf8_encode($imputado->getnombreMoral());
                        $paterno = "";
                        $materno = "";
                    }
                    //limpiar variables
                    $cuentaSanciones = 0;
                    $sancionesEnvia = array();

                    foreach ($impofedelCarpetas as $intermedia) {



                        if ($intermedia->getidImputadoCarpeta() == $imputado->getidImputadoCarpeta()) {
                            //echo "<pre>";
                            //echo $intermedia->getidImputadoCarpeta()."|".$imputado->getidImputadoCarpeta();
                            $idImpofe = $intermedia->getidImpOfeDelCarpeta();
                            $idCarpeta = $intermedia->getIdCarpetaJudicial();
                            $imputadossentenciasDto->setActivo("S");
                            $imputadossentenciasDto->setIdImpOfeDelCarpeta($idImpofe);
                            $imputadosSentencias = $imputadossentenciasController->selectImputadossentencias($imputadossentenciasDto);



                            if ($imputadosSentencias != "") {

                                foreach ($imputadosSentencias as $imputadoSentencia) {
                                    $idActuacionImputado = $imputadoSentencia->getidActuacion();
                                    $idImputSentencia = $imputadoSentencia->getidImputadoSentencia();


                                    $imputadossancionesDto->setActivo("S");
                                    $imputadossancionesDto->setIdImputadoSentencia($idImputSentencia);
                                    $imputadosSanciones = $imputadossanciones->selectImputadossanciones($imputadossancionesDto);

                                    $tipossancionesDto->setActivo("S");
                                    $tiposSanciones = $tipossancionesController->selectTipossanciones($tipossancionesDto);
                                    //echo "<pre>";
                                    //print_r($imputadosSanciones);        

                                    if ($imputadosSanciones != "") {

                                        foreach ($imputadosSanciones as $imputadosancion) {
                                            $imputadoSan = $imputadosancion->getcveTipoSancion();
                                            $idSancion = $imputadosancion->getidImputadoSancion();
                                            $tblsanidmpsent = $imputadosancion->getidImputadoSentencia();
                                            $especificacion = utf8_encode($imputadosancion->getespecificacion());
                                            foreach ($tiposSanciones as $tipossancion) {
                                                if ($tipossancion->getcveTipoSancion() == $imputadoSan) {
                                                    $desTipoSancion = utf8_encode($tipossancion->getdesTipoSancion());
                                                    $tipo = $tipossancion->getBeneficio();
                                                    break;
                                                }
                                            }
                                            $cuentaSanciones++;

                                            if ($imputadosancion->getcveTipoSancion() == "1") {
                                                $tipos = "1";

                                                //$sancion=array("anio"=>$imputadosancion->getanioPrision(),"mes"=>$imputadosancion->getmesPrision(),"dias"=>$imputadosancion->getdiasPrision());
                                                $sancion = "A&ntilde;o:" . $imputadosancion->getanioPrision() . " Mes:" . $imputadosancion->getmesPrision() . " Dias:" . $imputadosancion->getdiasPrision();
                                            } else {
//                                                                                            
                                                if ($imputadosancion->getcveTipoSancion() == "2") {
                                                    $tipos = "2";
                                                    $sancion = round($imputadosancion->getcantidadMulta(), 2);
                                                } else {
                                                    if ($imputadosancion->getcveTipoSancion() == "3") {
                                                        $tipos = "3";
                                                        $sancion = round($imputadosancion->getcantidadReparacion(), 2);
                                                    } else {
                                                        if ($imputadosancion->getcveTipoSancion() == "4") {
                                                            $tipos = "4";
                                                            $sancion = $imputadosancion->getamonestacion();
                                                        } else {
                                                            if ($imputadosancion->getcveTipoSancion() == "5") {
                                                                $tipos = "5";
                                                                $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                $fechamulta = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                $sancion = round($imputadosancion->getcantidadMulta(), 2);
                                                            } else {
                                                                if ($imputadosancion->getcveTipoSancion() == "6") {
                                                                    $tipos = "6";
                                                                    $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                    $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                    $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                } else {
                                                                    if ($imputadosancion->getcveTipoSancion() == "7") {
                                                                        $tipos = "7";
                                                                        $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                        $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                        $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                    } else {
                                                                        if ($imputadosancion->getcveTipoSancion() == "8") {
                                                                            $tipos = "8";
                                                                            $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                            $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                            $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                        } else {
                                                                            if ($imputadosancion->getcveTipoSancion() == "9") {
                                                                                $tipos = "9";
                                                                                $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                                $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                                $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                            } else {
                                                                                if ($imputadosancion->getcveTipoSancion() == "10") {
                                                                                    $tipos = "10";
                                                                                    $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                                                    $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                                                    $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }



                                            $sancionesE = array("descripcionMulta" => $desTipoSancion, "Beneficio" => $tipo, "sancion" => $sancion, "fechamulta" => $fechamulta, "especificacion" => $especificacion, "idimputadosentencia" => $tblsanidmpsent, "tipoDeSentencia" => $tipos, "idSancion" => $idSancion);

                                            array_push($sancionesEnvia, $sancionesE);
                                        }
                                    } else {
                                        
                                    }
                                }
                            } else {
                                
                            }
                        }
                    }



                    $registro = array("cveTipoPersona" => $cveTipoPersona, "nombre" => $nombre, "paterno" => $paterno, "materno" => $materno, "descripcionDeSentencia" => $desSentencia, "sanciones" => $sancionesEnvia, "totalSancion" => $cuentaSanciones, "actuaciones" => $idActuacionImputado, "imputadoSentencia" => $idImputSentencia, "idCarpetaJudicial" => $idCarpeta, "idimputadocarpeta" => $idimputadocarpeta);
                    array_push($resultado, $registro);
                }
                $respuesta = array("TotalCountImputados" => count($resultado), "datosImputado" => $resultado, "estatus" => "ok", "mensaje" => "Registros Encontrados");
            } else {
                //print_r("no hay imputados en esta carpeta");
                $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
            }
            // }
        } else {
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
            // print_r("no se encontaron coinsidencias");
        }
        return $respuesta;
    }

    public function selectBeneficios($carpetasjudicialesDto, $parambeneficios) {

        ////////////////DECLARACION DE VARIABLES//////////////////////////
        $intermedia = "";
        $idImpofe = "";
        $idActuacionImputado = "";
        $idImputSentencia = "";
        $claveSentencia = "";
        $desSentencia = "";
        $imputadoSen = "";
        $sanciones = "";
        $sancion = "";
        $fechamulta = "";
        $imputadoSan = "";
        $idimputadocarpeta = "";
        $idbeneficioes = "";
        $especificacion = "";
        $desTipoSancion = "";
        $idTipoSancion = "";
        $tipo = "";
        $fecha = "";
        $contador = 0;
        $tipos = "";
        $idSancion = "";
        $cuentaSanciones = 0;
        $imputadoSentencia = "";
        $idCarpeta = "";
        $tblsanidmpsent = "";



        ////////////////////////DECLARACION DE AREGLOS////////////////////
        $registro = "";
        $registro = array();

        $resultado = "";
        $resultado = array();

        $sancionesE = "";
        $sancionesE = array();

        $sancionesEnvia = "";
        $sancionesEnvia = array();

        $sancion = "";
        $sancion = array();

        $respuesta = "";
        $respuesta = array();
        /////////////////////////VARIABLES DENTRO DE IF DE IMPUTADOS/////////////////////////////
        $BeneficiosesController = new BeneficiosesController();
        $BeneficiosesDTO = new BeneficiosesDTO();
        $BeneficiosesDTO->setActivo("S");
        $BeneficiosesDTO->setIdImputadoSancion($parambeneficios["idimputadosancion"]);
        $BeneficiosesDTO = $BeneficiosesController->selectBeneficioses($BeneficiosesDTO);


        $tipossancionesController = new TipossancionesController();
        $tipossancionesDto = new TipossancionesDTO();
        $tipossancionesDto->setActivo("S");
        $tipossancionesDto->setBeneficio("S");
        $tiposSanciones = $tipossancionesController->selectTipossanciones($tipossancionesDto);
        //print_r($tiposSanciones);

        $todosdesc = "";
        $todosid = "";
        foreach ($tiposSanciones as $todos) {
            $todosid = utf8_encode($todos->getCveTipoSancion());
            $todosdesc = utf8_encode($todos->getdesTipoSancion());

            $registro = array("todosid" => $todosid, "todosdesc" => $todosdesc);
            array_push($resultado, $registro);
        }



        if ($BeneficiosesDTO != "") {

            foreach ($BeneficiosesDTO as $beneficioses) {
                $idimputadosancionnuevo = $beneficioses->getIdImputadoSancionNvo();
                $idimputadocarpeta = $beneficioses->getIdImputadoCarpeta();
                $idbeneficioes = $beneficioses->getIdBeneficioES();
                $ImputadossancionesController = new ImputadossancionesController();
                $ImputadossancionesDTO = new ImputadossancionesDTO();
                $ImputadossancionesDTO->setActivo("S");
                $ImputadossancionesDTO->setIdImputadoSancion($idimputadosancionnuevo);
                $ImputadossancionesDTO = $ImputadossancionesController->selectImputadossanciones($ImputadossancionesDTO);


                foreach ($ImputadossancionesDTO as $imputadosancion) {
                    $imputadoSan = $imputadosancion->getcveTipoSancion();
                    $idSancion = $imputadosancion->getidImputadoSancion();
                    $tblsanidmpsent = $imputadosancion->getidImputadoSentencia();
                    $especificacion = utf8_encode($imputadosancion->getespecificacion());
                    foreach ($tiposSanciones as $tipossancion) {

                        if ($tipossancion->getcveTipoSancion() == $imputadoSan) {
                            $idTipoSancion = utf8_encode($tipossancion->getCveTipoSancion());
                            $desTipoSancion = utf8_encode($tipossancion->getdesTipoSancion());
                            $tipo = $tipossancion->getBeneficio();
                            break;
                        }
                    }
                    $cuentaSanciones++;

                    if ($imputadosancion->getcveTipoSancion() == "1") {
                        $tipos = "1";

                        //$sancion=array("anio"=>$imputadosancion->getanioPrision(),"mes"=>$imputadosancion->getmesPrision(),"dias"=>$imputadosancion->getdiasPrision());
                        $sancion = "A&ntilde;o:" . $imputadosancion->getanioPrision() . " Mes:" . $imputadosancion->getmesPrision() . " Dias:" . $imputadosancion->getdiasPrision();
                    } else {
                        if ($imputadosancion->getcveTipoSancion() == "2") {
                            $tipos = "2";
                            $sancion = round($imputadosancion->getcantidadMulta(), 2);
                        } else {
                            if ($imputadosancion->getcveTipoSancion() == "3") {
                                $tipos = "3";
                                $sancion = round($imputadosancion->getcantidadReparacion(), 2);
                            } else {
                                if ($imputadosancion->getcveTipoSancion() == "4") {
                                    $tipos = "4";
                                    $sancion = $imputadosancion->getamonestacion();
                                } else {
                                    if ($imputadosancion->getcveTipoSancion() == "5") {
                                        $tipos = "5";
                                        $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                        $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                        $fechamulta = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                        $sancion = round($imputadosancion->getcantidadMulta(), 2);
                                    } else {
                                        if ($imputadosancion->getcveTipoSancion() == "6") {
                                            $tipos = "6";
                                            $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                            $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                            $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                        } else {
                                            if ($imputadosancion->getcveTipoSancion() == "7") {
                                                $tipos = "7";
                                                $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                            } else {
                                                if ($imputadosancion->getcveTipoSancion() == "8") {
                                                    $tipos = "8";
                                                    $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                    $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                    $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                } else {
                                                    if ($imputadosancion->getcveTipoSancion() == "9") {
                                                        $tipos = "9";
                                                        $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                        $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                        $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                    } else {
                                                        if ($imputadosancion->getcveTipoSancion() == "10") {
                                                            $tipos = "10";
                                                            $date1 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaInicio())));
                                                            $date2 = date('d/m/Y', strtotime(str_replace('-', '/', $imputadosancion->getfechaTermina())));

                                                            $sancion = "Fecha Inicio:" . $date1 . " Fecha Termina:" . $date2;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $sancionesE = array("idTipoSancion" => $idTipoSancion, "descripcionMulta" => $desTipoSancion, "Beneficio" => $tipo, "sancion" => $sancion, "fechamulta" => $fechamulta, "especificacion" => $especificacion, "idimputadosentencia" => $tblsanidmpsent, "tipoDeSentencia" => $tipos, "idSancion" => $idSancion, "idimputadocarpeta" => $idimputadocarpeta, "idbeneficioes" => $idbeneficioes);
                    array_push($sancionesEnvia, $sancionesE);
                }
                if ($ImputadossancionesDTO != "") {
                    $respuesta = array("tiposdesanciones" => $resultado, "sanciones" => $sancionesEnvia, "totalSancion" => $cuentaSanciones, "estatus" => "ok", "mensaje" => "Registros Encontrados");
                } else {
                    $respuesta = array("totalSancion" => "0", "datos" => "", "estatus" => "sin datos", "mensaje" => "La sancion no tiene beneficios");
                }
            }
        } else {
            $respuesta = array("totalSancion" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }

        return $respuesta;
    }

    /*
     * Guardar los datos de la nueva carpeta judicial
     */

    public function guardarCarpetaJudicial($carpetasJudicialesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $anioActual = "";
        $numero = "";
        $anio = "";
        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['Anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        /*
         * Obtener la fecha del servidor de mysql
         */

        $carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        //var_dump($carpetasJudicialesDto);
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $listaResultados = array();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        /*
         * validar los datos enviados por el usuario
         */
        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumImputados())) {
            if ((int) $carpetasJudicialesDto->getNumImputados() <= 0) {
                $msg[] = array("El numero de imputados es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de imputados es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumOfendidos())) {
            if ((int) $carpetasJudicialesDto->getNumOfendidos() <= 0) {
                $msg[] = array("El numero de ofendidos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de ofendidos es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumDelitos())) {
            if ((int) $carpetasJudicialesDto->getNumDelitos() <= 0) {
                $msg[] = array("El numero de delitos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de delitos es un campo requerido");
            $error = true;
        }

        if (((int) $carpetasJudicialesDto->getCveTipoCarpeta() > 0) && ( (string) $carpetasJudicialesDto->getCveTipoCarpeta() != "")) {
            if ($validacion->num(0, 4, (int) $carpetasJudicialesDto->getNumero())) {
                if ((int) $carpetasJudicialesDto->getNumero() <= 0) {
                    $msg[] = array("El numero de caarpeta es un campo requerido");
                    $error = true;
                }
            } else {
                $msg[] = array("El numero de carpeta es un campo requerido");
                $error = true;
            }
            if ($validacion->num(3, 4, (int) $carpetasJudicialesDto->getAnio())) {
                if ((int) $carpetasJudicialesDto->getAnio() <= 0) {
                    $msg[] = array("El anio es un campo requerido");
                    $error = true;
                }
            } else {
                $msg[] = array("El anio es un campo requerido");
                $error = true;
            }
        } else {
            if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getNuc())) {
                if ((string) $carpetasJudicialesDto->getNuc() == "") {
                    $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                    $error = true;
                }
            } else {
                if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getCarpetaInv())) {
                    if ((string) $carpetasJudicialesDto->getCarpetaInv() == "") {
                        $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                        $error = true;
                    }
                } else {
                    $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                    $error = true;
                }
            }
        }

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveConsignacionA())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacionA() <= 0) {
                $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveJuzgado())) {
            if ((int) $carpetasJudicialesDto->getCveJuzgado() <= 0) {
                $msg[] = array("El Juzgado es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El juzgado es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveConsignacion())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacion() <= 0) {
                $msg[] = array("El tipo consignacion es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo consignacion es requerido");
            $error = true;
        }
        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEtapaProcesal())) {
            if ((int) $carpetasJudicialesDto->getCveEtapaProcesal() <= 0) {
                $msg[] = array("La etapa procesal es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("La etapa procesal es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEstatusCarpeta())) {
            if ((int) $carpetasJudicialesDto->getCveEstatusCarpeta() <= 0) {
                $msg[] = array("El estatus de carpeta judicial es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El estatus de carpeta judicial es un campo requerido");
            $error = true;
        }

        if (!$error && count($msg) == 0) {
            /*
             * Guardar los datos de la nueva carpeta judicial
             */
            if (((int) $carpetasJudicialesDto->getCveTipoCarpeta() > 0) && ( (string) $carpetasJudicialesDto->getCveTipoCarpeta() != "")) {
                $contadorCrl = new ContadoresController();
                $contadoresDto = new ContadoresDTO();
                $contadoresDto->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
                $contadoresDto->setCveTipoActuacion("");
                $contadoresDto->setAnio($anioActual);
                $contadoresDto->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
                $contadoresDto = $contadorCrl->getContador($contadoresDto, $this->proveedor);
                if ($contadoresDto != "") {
                    $numero = $contadoresDto[0]->getNumero();
                    $anio = $contadoresDto[0]->getAnio();
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un errro al ontener el numero de contador para el juzgado seleccionado");
                    $numero = "";
                    $anio = "";
                }
            } else {
                $numero = "";
                $anio = "";
                /*
                 * Si el usuario no selecciona el tipo de carpeta, por defaul se guarda
                 * como tipo Auxiliar
                 */
                $carpetasJudicialesDto->setCveTipoCarpeta(1);
            }
            $carpetasJudicialesDto->setNumero($numero);
            $carpetasJudicialesDto->setAnio($anio);
            $carpetasJudicialesDto->setFechaRadicacion($fechaActual);
            $carpetasJudicialesDto->setIncompetencia(1);
            $carpetasJudicialesDto->setCveTipoIncompetencia(1);
            $carpetasJudicialesDto->setAcumulado("N");
            $carpetasJudicialesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $carpetasJudicialesDto = $carpetasJudicialesDao->insertCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
            if ($carpetasJudicialesDto != "") {
                $resultado = array(
                    "idCarpetaJudicial" => $carpetasJudicialesDto[0]->getIdCarpetaJudicial(),
                    "cveEtapaProcesal" => $carpetasJudicialesDto[0]->getCveEtapaProcesal(),
                    "cveConsignacion" => $carpetasJudicialesDto[0]->getCveConsignacion(),
                    "cveTipoCarpeta" => $carpetasJudicialesDto[0]->getCveTipoCarpeta(),
                    "cveConsignacionA" => $carpetasJudicialesDto[0]->getCveConsignacionA(),
                    "numero" => $carpetasJudicialesDto[0]->getNumero(),
                    "anio" => $carpetasJudicialesDto[0]->getAnio(),
                    "fechaRadicacion" => $carpetasJudicialesDto[0]->getFechaRadicacion(),
                    "fechaRegistro" => $carpetasJudicialesDto[0]->getFechaRegistro(),
                    "fechaActualizacion" => $carpetasJudicialesDto[0]->getFechaActualizacion(),
                    "activo" => $carpetasJudicialesDto[0]->getActivo(),
                    "cveJuzgado" => $carpetasJudicialesDto[0]->getCveJuzgado(),
                    "carpetaInv" => $carpetasJudicialesDto[0]->getCarpetaInv(),
                    "nuc" => $carpetasJudicialesDto[0]->getNuc(),
                    "cveUsuario" => $carpetasJudicialesDto[0]->getCveUsuario(),
                    "observaciones" => utf8_encode($carpetasJudicialesDto[0]->getObservaciones()),
                    "numImputados" => $carpetasJudicialesDto[0]->getNumImputados(),
                    "numOfendidos" => $carpetasJudicialesDto[0]->getNumOfendidos(),
                    "numDelitos" => $carpetasJudicialesDto[0]->getNumDelitos(),
                    "cveEstatusCarpeta" => $carpetasJudicialesDto[0]->getCveEstatusCarpeta(),
                    "incompetencia" => $carpetasJudicialesDto[0]->getIncompetencia(),
                    "cveTipoIncompetencia" => $carpetasJudicialesDto[0]->getCveTipoIncompetencia(),
                    "acumulado" => $carpetasJudicialesDto[0]->getAcumulado(),
                    "numAcumulado" => $carpetasJudicialesDto[0]->getNumAcumulado(),
                    "fechaTermino" => $carpetasJudicialesDto[0]->getFechaTermino(),
                    "cveConclucion" => $carpetasJudicialesDto[0]->getCveConclucion(),
                    "ponderacion" => $carpetasJudicialesDto[0]->getPonderacion()
                );
                array_push($listaResultados, $resultado);
                $result = array(
                    "status" => "Ok",
                    "totalCount" => count($listaResultados),
                    "resultado" => $listaResultados,
                    "msj" => $msg
                );
            } else {
                $result = array("status" => "Error", "msj" => "Ocurrio un error al guardar los datos");
                $result = ($result);
            }
        } else {
            /*
             * Ocurrio algun error en la validacion de datos
             */
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function actualizarCarpetaJudicial($carpetasJudicialesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $fechaActual = "";
        $anioActual = "";
        $listaResultados = array();
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['Anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        $terminacion = 0;
        $carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        //var_dump($carpetasJudicialesDto);
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $copiarCarpeta = false;
        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumImputados())) {
            if ((int) $carpetasJudicialesDto->getNumImputados() <= 0) {
                $msg[] = array("El numero de imputados es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de imputados es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumOfendidos())) {
            if ((int) $carpetasJudicialesDto->getNumOfendidos() <= 0) {
                $msg[] = array("El numero de ofendidos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de ofendidos es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumDelitos())) {
            if ((int) $carpetasJudicialesDto->getNumDelitos() <= 0) {
                $msg[] = array("El numero de delitos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de delitos es un campo requerido");
            $error = true;
        }

        if (((int) $carpetasJudicialesDto->getCveTipoCarpeta() > 0) && ( (string) $carpetasJudicialesDto->getCveTipoCarpeta() != "")) {
            if ($validacion->num(0, 4, (int) $carpetasJudicialesDto->getNumero())) {
                if ((int) $carpetasJudicialesDto->getNumero() <= 0) {
                    $msg[] = array("El numero de caarpeta es un campo requerido");
                    $error = true;
                }
            } else {
                $msg[] = array("El numero de carpeta es un campo requerido");
                $error = true;
            }
            if ($validacion->num(3, 4, (int) $carpetasJudicialesDto->getAnio())) {
                if ((int) $carpetasJudicialesDto->getAnio() <= 0) {
                    $msg[] = array("El anio es un campo requerido");
                    $error = true;
                }
            } else {
                $msg[] = array("El anio es un campo requerido");
                $error = true;
            }
        } else {
            if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getNuc())) {
                if ((string) $carpetasJudicialesDto->getNuc() == "") {
                    $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                    $error = true;
                }
            } else {
                if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getCarpetaInv())) {
                    if ((string) $carpetasJudicialesDto->getCarpetaInv() == "") {
                        $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                        $error = true;
                    }
                } else {
                    $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                    $error = true;
                }
            }
        }

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveConsignacionA())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacionA() <= 0) {
                $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveJuzgado())) {
            if ((int) $carpetasJudicialesDto->getCveJuzgado() <= 0) {
                $msg[] = array("El Juzgado es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El juzgado es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveConsignacion())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacion() <= 0) {
                $msg[] = array("El tipo consignacion es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo consignacion es requerido");
            $error = true;
        }
        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEtapaProcesal())) {
            if ((int) $carpetasJudicialesDto->getCveEtapaProcesal() <= 0) {
                $msg[] = array("La etapa procesal es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("La etapa procesal es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEstatusCarpeta())) {
            if ((int) $carpetasJudicialesDto->getCveEstatusCarpeta() <= 0) {
                $msg[] = array("El estatus de carpeta judicial es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El estatus de carpeta judicial es un campo requerido");
            $error = true;
        }
        //echo count($msg);
        if ($error == false && count($msg) == 0) {
            //Etapa Procesal enviada por el usuario
            $cveEtapaProcesal = $carpetasJudicialesDto->getCveEtapaProcesal();
            //Etapa procesal original de la carpeta judicial
            $dto = new CarpetasjudicialesDTO();
            $dao = new CarpetasjudicialesDAO();
            $dto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
            $dto = $dao->selectCarpetasjudiciales($dto, "", $this->proveedor);
            //if($dto != "") {}
            //var_dump($dto);
            /*
             * Verificar si se cambia de etapa procesal, si la carpeta se mueve
             * a una etapa posterior, se cierra la carpeta actual y se crea una
             * nueva con la etapa requerida
             */
            if ((int) $cveEtapaProcesal > (int) $dto[0]->getCveEtapaProcesal()) {
                if ((int) $dto[0]->getCveEtapaProcesal() == 1 && (int) $cveEtapaProcesal == 3) {
                    $error = true;
                    $msg[] = array("No se puede pasar de una Etapa Procesal Auxiliar a una Etapa Procesal de Juicio o Ejecucion directamente, favor de verificar");
                } else if ((int) $cveEtapaProcesal == 1 || (int) $cveEtapaProcesal == 2) {
                    /*
                     * En esta etapa procesal no se radica una nueva carpeta debido
                     * a que pertenece a control al igual que en la etapa Auxuliar
                     */
                    $carpetasJudicialesDto->setCveTipoCarpeta(2);
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
                    $juzgadosDto->setActivo("S");
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                    if ($juzgadosDto != "") {
                        $error = false;
                        $juzgadoTmp = new JuzgadosDTO();
                        $juzgadoTmp->setCveDistrito($juzgadosDto[0]->getCveDistrito());
                        $juzgadoTmp->setCveTipojuzgado(1);
                        $juzgadoTmp->setActivo("S");
                        $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
                        if ($juzgadoTmp != "") {
                            $errro = false;
                            $cveJuzgado = $juzgadoTmp[0]->getCveJuzgado();
                        } else {
                            $error = true;
                            $msg[] = array("Error al obtener el juzgado");
                            $cveJuzgado = $carpetasJudicialesDto->getCveJuzgado();
                        }
                    }
                    $carpetasJudicialesDto->setCveJuzgado($cveJuzgado);

                    $contadorCrl = new ContadoresController();
                    $contadoresDto = new ContadoresDTO();
                    $contadoresDto->setCveJuzgado($cveJuzgado);
                    $contadoresDto->setCveTipoActuacion("");
                    $contadoresDto->setAnio($anioActual);
                    $contadoresDto->setCveTipoCarpeta(2);
                    $contadoresDto = $contadorCrl->getContador($contadoresDto, $this->proveedor);

                    $carpetasJudicialesDto->setNumero($contadoresDto[0]->getNumero());
                    $carpetasJudicialesDto->setAnio($contadoresDto[0]->getAnio());
                    $carpetasJudicialesDto->setFechaActualizacion($fechaActual);
                    $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                    if ($carpetasJudicialesDto != "") {
                        $error = false;
                        $msg[] = array("Datos actualizados correctamente");
                        $imputadosTmp = new ImputadoscarpetasDTO();
                        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
                        $imputadosTmp->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                        $imputadosTmp->setActivo("S");
                        $imputadosTmp = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                        if ($imputadosTmp != "") {
                            foreach ($imputadosTmp as $imputado) {
                                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                                $imputadosCarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                                $imputadosCarpetasDto->setCveEtapaProcesal($carpetasJudicialesDto[0]->getCveEtapaProcesal());
                                $imputadosCarpetasDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto, $this->proveedor);
                                if ($imputadosCarpetasDto != "") {
                                    $error = false;
                                    $msg[] = array("Se actualiza la etapa procesal de los imputados activos correspondientes a la carpeta judicial");
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al actualizar la etapa procesal de los imputados");
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array("No se encontraron imputados activos en la carpeta judicial");
                        }
                    } else {
                        $error = true;
                        $msg[] = array("Ocurri&oacute; un error al actualizar los datos");
                    }
                } else if ((int) $cveEtapaProcesal == 4) {
                    /*
                     * Si la etapa procesal enviada por el usuario es Ejecucion de Sentencia
                     * se genera una carpeta por cada imputado existente en la carpeta origen
                     */
                    $cveTipoCarpeta = 5;
                    $imputadoCarpetaDto = new ImputadoscarpetasDTO();
                    $imputadoCarpetaDao = new ImputadoscarpetasDAO();
                    $imputadoCarpetaDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                    $imputadoCarpetaDto->setActivo("S");
                    $imputadoCarpetaDto = $imputadoCarpetaDao->selectImputadoscarpetas($imputadoCarpetaDto, "", $this->proveedor);
                    if ($imputadoCarpetaDto != "") {
                        foreach ($imputadoCarpetaDto as $imputado) {
                            $carpetaJudicialTmp = new CarpetasjudicialesDTO();
                            $carpetaJudicialDao = new CarpetasjudicialesDAO();
                            /*
                             * Obtener la clave del juzgado para la nueva carpeta judicial
                             */
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDao = new JuzgadosDAO();
                            $juzgadosDto->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
                            $juzgadosDto->setActivo("S");
                            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                            if ($juzgadosDto != "") {
                                $error = false;
                                $juzgadoTmp = new JuzgadosDTO();
                                $juzgadoTmp->setCveDistrito($juzgadosDto[0]->getCveDistrito());
                                $juzgadoTmp->setCveTipojuzgado(3);
                                $juzgadoTmp->setActivo("S");
                                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
                                if ($juzgadoTmp != "") {
                                    $errro = false;
                                    $cveJuzgado = $juzgadoTmp[0]->getCveJuzgado();
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al obtener la clave de juzgado para la nueva carpeta judicial");
                                    $cveJuzgado = 0;
                                }
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al consultar los datos del juzgado de la carpeta origen");
                            }
                            /*
                             * Obtener el numero de contador para la nueva carpeta judicial
                             */
                            $contadorCrl = new ContadoresController();
                            $contadoresDto = new ContadoresDTO();
                            $contadoresDto->setCveJuzgado($cveJuzgado);
                            $contadoresDto->setCveTipoActuacion("");
                            $contadoresDto->setAnio($anioActual);
                            $contadoresDto->setCveTipoCarpeta($cveTipoCarpeta);
                            $contadoresDto = $contadorCrl->getContador($contadoresDto, $this->proveedor);
                            if ($contadoresDto != "") {
                                $numero = $contadoresDto[0]->getNumero();
                                $anio = $contadoresDto[0]->getAnio();
                            } else {
                                $error = true;
                                $numero = 0;
                                $anio = 0;
                                $msg[] = array("Ocurrio un errro al ontener el numero de contador para el juzgado: " . $cveJuzgado);
                            }
                            $carpetaJudicialTmp->setCveEtapaProcesal($carpetasJudicialesDto->getCveEtapaProcesal());
                            $carpetaJudicialTmp->setCveConsignacion($carpetasJudicialesDto->getCveConsignacion());
                            $carpetaJudicialTmp->setCveTipoCarpeta($cveTipoCarpeta);
                            $carpetaJudicialTmp->setCveConsignacionA($carpetasJudicialesDto->getCveConsignacionA());
                            $carpetaJudicialTmp->setNumero($numero);
                            $carpetaJudicialTmp->setAnio($anio);
                            $carpetaJudicialTmp->setFechaRadicacion($fechaActual);
                            $carpetaJudicialTmp->setActivo("S");
                            $carpetaJudicialTmp->setCveJuzgado($cveJuzgado);
                            $carpetaJudicialTmp->setCarpetaInv($carpetasJudicialesDto->getCarpetaInv());
                            $carpetaJudicialTmp->setNuc($carpetasJudicialesDto->getNuc());
                            $carpetaJudicialTmp->setCveUsuario($cveUsuario);
                            $carpetaJudicialTmp->setObservaciones($carpetasJudicialesDto->getObservaciones());
                            $carpetaJudicialTmp->setNumImputados($carpetasJudicialesDto->getNumImputados());
                            $carpetaJudicialTmp->setNumOfendidos($carpetasJudicialesDto->getNumOfendidos());
                            $carpetaJudicialTmp->setNumDelitos($carpetasJudicialesDto->getNumDelitos());
                            $carpetaJudicialTmp->setCveEstatusCarpeta(1);
                            $carpetaJudicialTmp->setIncompetencia(1);
                            $carpetaJudicialTmp->setCveTipoIncompetencia(1);
                            $carpetaJudicialTmp->setAcumulado($carpetasJudicialesDto->getAcumulado());
                            $carpetaJudicialTmp->setNumAcumulado($carpetasJudicialesDto->getNumAcumulado());
                            $carpetaJudicialTmp->setPonderacion($carpetasJudicialesDto->getPonderacion());

                            $carpetaJudicialTmp = $carpetaJudicialDao->insertCarpetasjudiciales($carpetaJudicialTmp, $this->proveedor);
                            if ($carpetaJudicialTmp != "") {
                                $carpetaJudicialTmp = $carpetaJudicialTmp[0];
                                /*
                                 * Copiar los datos hacia la carpeta judicial creada
                                 */
                                if ($this->copiarCarpetasJudiciales($carpetaJudicialTmp, $imputado, $this->proveedor)) {
                                    $error = false;
                                    $msg[] = array("Se copian los datos hacia una nueva carpeta judicial");
                                    /*
                                     * Agregar registro a la tabla antecedescarpeta
                                     */
                                    $antecedesCarpetasDto = new AntecedescarpetasDTO();
                                    $antecedesCarpetasDao = new AntecedescarpetasDAO();
                                    $antecedesCarpetasDto->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                                    $antecedesCarpetasDto->setIdCarpetaHija($carpetaJudicialTmp->getIdCarpetaJudicial());
                                    $antecedesCarpetasDto->setCveTipoCarpeta($carpetaJudicialTmp->getCveTipoCarpeta());
                                    $antecedesCarpetasDto->setActivo("S");
                                    $antecedesCarpetasDto = $antecedesCarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $this->proveedor);

                                    if ($antecedesCarpetasDto != "") {
                                        $error = false;
                                    } else {
                                        $msg[] = array("Ocurrio un error al insertar el registro en la tabla antecedescarpetas");
                                        $error = true;
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al copiar los datos hacia la nueva carpeta judicial");
                                }
                            } else {
                                $error = true;
                                $msg[] = array("No se pudo generar la carpeta judicial en la etapa procesal solicitada");
                            }
                            if ($error) {
                                $msg[] = array("Ocurrio un error al copiar los datos hacia la carpeta con etapa procesal solicitada");
                                break;
                            }
                        }

                        /*
                         * Si se copian los datos correctamente, terminar la carpeta judicial origen
                         */
                        if (!$error) {
//                            if ( (int) $dto[0]->getCveEtapaProcesal() == 2 ) {
//                                $terminacion = 3;
//                            } else if ( (int) $dto[0]->getCveEtapaProcesal() == 3 ) {
//                                $terminacion = 9;
//                            } else {
//                                $terminacion = 14;
//                            }
                            $carpetaTmp = new CarpetasjudicialesDTO();
                            $carpetaTmp->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                            $carpetaTmp->setFechaActualizacion($fechaActual);
                            //$carpetaTmp->setCveConclucion($terminacion);
                            $carpetaTmp->setFechaTermino($fechaActual);
                            $carpetaTmp->setCveEstatusCarpeta(2);
                            $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetaTmp, $this->proveedor);
                        }
                    } else {
                        $error = true;
                        $msg[] = array("La carpeta judicial no tiene imputados activos");
                    }
                } else if ((int) $cveEtapaProcesal > 4) {
                    $error = true;
                    $msg[] = array("La etapa procesal seleccionada no aplica para carpetas judiciales, favor de verificar");
                } else {
                    $copiarCarpeta = $this->radicarCarpeta($carpetasJudicialesDto, $this->proveedor);

                    /*
                     * Si el procedimiento de copia de carpetas judiciales se ejecuta correctamente
                     * terminar la carpeta judicial origen
                     */

                    if ($copiarCarpeta) {
//                        if ((int) $dto[0]->getCveEtapaProcesal() == 2 && (int) $cveEtapaProcesal == 3) {
//                            $terminacion = 2;
//                        } else {
//                            $terminacion = 14;
//                        }
                        $error = false;
                        $msg[] = array("Se ha copiado la informacion hacia una nueva carpeta judicial");
                        $carpetaTmp = new CarpetasjudicialesDTO();
                        $carpetaTmp->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                        $carpetaTmp->setFechaActualizacion($fechaActual);
                        //$carpetaTmp->setCveConclucion($terminacion);
                        $carpetaTmp->setFechaTermino($fechaActual);
                        $carpetaTmp->setCveEstatusCarpeta(2);
                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetaTmp, $this->proveedor);
                    } else {
                        $error = true;
                        $msg[] = array("No se pudo copiar la informacion hacia una nueva carpeta judicial");
                    }
                }
            } else if ((int) $carpetasJudicialesDto->getCveEstatusCarpeta() == 2) {
                /*
                 * Si el usuario desea terminar una carpeta, verificar que todos
                 * los imputados est�n en una etapa procesal superior para terminar la carpeta actual
                 */
                $totalImputados = 0;
                $numeroImputados = (int) $carpetasJudicialesDto->getNumImputados();

                $imputadosDto = new ImputadoscarpetasDTO();
                $imputadosDao = new ImputadoscarpetasDAO();
                $imputadosDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                $imputadosDto->setCveEtapaProcesal($carpetasJudicialesDto->getCveEtapaProcesal());
                $imputadosDto->setActivo("S");
                $imputadosDto->setTieneSobreseimiento("N");
                $imputadosDto = $imputadosDao->selectImputadoscarpetas($imputadosDto, "", $this->proveedor);
                if ($imputadosDto != "") {
                    $totalImputados = count($imputadosDto);
                } else {
                    $totalImputados = 0;
                }
                /*
                 * si todos los imputados de la carpeta se encuentran en una etapa procesal diferente
                 * terminar la carpeta judicial
                 */
                //var_dump($numeroImputados);
                //var_dump($totalImputados);
                if ($totalImputados == 0) {
                    $error = false;
                    $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una etapa posterior o no hay imputados activos");

                    $carpetasJudicialesDto->setFechaActualizacion($fechaActual);
                    //$carpetasJudicialesDto->setCveConclucion(14);
                    $carpetasJudicialesDto->setFechaTermino($fechaActual);
                    $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                } else {
                    $error = true;
                    $msg[] = array("La carpeta no se puede terminar debido a que hay imputados en la etapa procesal actual");
                }
            } else {
                $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                if ($carpetasJudicialesDto != "") {
                    $error = false;
                    $msg[] = array("Datos actualizados correctamente");
                } else {
                    $error = true;
                    $msg[] = array("Ocurri&oacute; un error al actualizar los datos");
                }
            }

            if (!$error) {
                $resultado = array(
                    "idCarpetaJudicial" => $carpetasJudicialesDto[0]->getIdCarpetaJudicial(),
                    "cveEtapaProcesal" => $carpetasJudicialesDto[0]->getCveEtapaProcesal(),
                    "cveConsignacion" => $carpetasJudicialesDto[0]->getCveConsignacion(),
                    "cveTipoCarpeta" => $carpetasJudicialesDto[0]->getCveTipoCarpeta(),
                    "cveConsignacionA" => $carpetasJudicialesDto[0]->getCveConsignacionA(),
                    "numero" => $carpetasJudicialesDto[0]->getNumero(),
                    "anio" => $carpetasJudicialesDto[0]->getAnio(),
                    "fechaRadicacion" => $carpetasJudicialesDto[0]->getFechaRadicacion(),
                    "fechaRegistro" => $carpetasJudicialesDto[0]->getFechaRegistro(),
                    "fechaActualizacion" => $carpetasJudicialesDto[0]->getFechaActualizacion(),
                    "activo" => $carpetasJudicialesDto[0]->getActivo(),
                    "cveJuzgado" => $carpetasJudicialesDto[0]->getCveJuzgado(),
                    "carpetaInv" => $carpetasJudicialesDto[0]->getCarpetaInv(),
                    "nuc" => $carpetasJudicialesDto[0]->getNuc(),
                    "cveUsuario" => $carpetasJudicialesDto[0]->getCveUsuario(),
                    "observaciones" => utf8_encode($carpetasJudicialesDto[0]->getObservaciones()),
                    "numImputados" => $carpetasJudicialesDto[0]->getNumImputados(),
                    "numOfendidos" => $carpetasJudicialesDto[0]->getNumOfendidos(),
                    "numDelitos" => $carpetasJudicialesDto[0]->getNumDelitos(),
                    "cveEstatusCarpeta" => $carpetasJudicialesDto[0]->getCveEstatusCarpeta(),
                    "incompetencia" => $carpetasJudicialesDto[0]->getIncompetencia(),
                    "cveTipoIncompetencia" => $carpetasJudicialesDto[0]->getCveTipoIncompetencia(),
                    "acumulado" => $carpetasJudicialesDto[0]->getAcumulado(),
                    "numAcumulado" => $carpetasJudicialesDto[0]->getNumAcumulado(),
                    "fechaTermino" => $carpetasJudicialesDto[0]->getFechaTermino(),
                    "cveConclucion" => $carpetasJudicialesDto[0]->getCveConclucion(),
                    "ponderacion" => $carpetasJudicialesDto[0]->getPonderacion()
                );
                array_push($listaResultados, $resultado);
                $result = array(
                    "status" => "Ok",
                    "totalCount" => count($listaResultados),
                    "resultado" => $listaResultados,
                    "msj" => $msg
                );
            } else {
                $result = array("status" => "Error", "msj" => $msg);
                $result = ($result);
            }
            echo json_encode($result);
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
            echo json_encode($result);
        }
    }

    public function consultarCarpetaByEtapaProcesal($carpetasJudicialesDto, $proveedor = null) {
        /*
         * Consultar los datos de la carpeta por id
         */
        $listaResultados = array();
        $msg = array();
        $error = false;
        $idCarpetas = array();
        $carpetas = "";
        $order = "";
        $carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        $carpetaDto = new CarpetasjudicialesDTO();
        $carpetaDao = new CarpetasjudicialesDAO();
        $carpetaDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
        $carpetaDto = $carpetaDao->selectCarpetasjudiciales($carpetaDto);

        if ($carpetaDto != "") {
            /*
             * Consultar los registros de antecedes carpetas 
             */

            $antecedesCarpetasDao = new AntecedescarpetasDAO();

            if ((int) $carpetaDto[0]->getCveEtapaProcesal() < (int) $carpetasJudicialesDto->getCveEtapaProcesal()) {
                $antecedesCarpetasDto = new AntecedescarpetasDTO();
                $antecedesCarpetasDto->setIdCarpetaPadre($carpetaDto[0]->getIdCarpetaJudicial());
                $antecedesCarpetasDto->setActivo("S");

                $antecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesCarpetasDto);

                if ($antecedesCarpetasDto != "") {
                    $error = false;
                    foreach ($antecedesCarpetasDto as $antecedes) {
                        $idCarpetas[] = $antecedes->getIdCarpetaHija();
                    }
                    $carpetas = implode(",", $idCarpetas);
                } else {
                    $error = true;
                }
            } else {
                $antecedesCarpetasDto = new AntecedescarpetasDTO();
                $antecedesCarpetasDto->setIdCarpetaHija($carpetaDto[0]->getIdCarpetaJudicial());
                $antecedesCarpetasDto->setActivo("S");

                $antecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesCarpetasDto);

                if ($antecedesCarpetasDto != "") {
                    $error = false;
                    foreach ($antecedesCarpetasDto as $antecedes) {
                        $idCarpetas[] = $antecedes->getIdCarpetaPadre();
                    }
                    $carpetas = implode(",", $idCarpetas);
                } else {
                    $error = true;
                }
            }

            if (!$error) {
                $carpetaTmpDto = new CarpetasjudicialesDTO();
                $carpetaTmpDto->setCveEtapaProcesal($carpetasJudicialesDto->getCveEtapaProcesal());
                //$carpetaTmpDto->setCarpetaInv($carpetaDto[0]->getCarpetaInv());
                //$carpetaTmpDto->setNuc($carpetaDto[0]->getNuc());
                $carpetaTmpDto->setActivo("S");
                if ($carpetas != "") {
                    $order = " AND idCarpetaJudicial IN(" . $carpetas . ")";
                } else {
                    $order = "";
                }

                $carpetaTmpDto = $carpetaDao->selectCarpetasjudiciales($carpetaTmpDto, $order, null);
                if ($carpetaTmpDto != "") {
                    foreach ($carpetaTmpDto as $tmp) {
                        $etapaDto = new EtapasprocesalesDTO();
                        $etapaDao = new EtapasprocesalesDAO();
                        $etapaDto->setCveEtapaProcesal($tmp->getCveEtapaProcesal());
                        $etapaDto = $etapaDao->selectEtapasprocesales($etapaDto);
                        if ($etapaDto != "") {
                            $desEtapaProcesal = $etapaDto[0]->getDesEtapaProcesal();
                        } else {
                            $desEtapaProcesal = "";
                        }
                        $resultado = array(
                            "idCarpetaJudicial" => $tmp->getIdCarpetaJudicial(),
                            "cveEtapaProcesal" => $tmp->getCveEtapaProcesal(),
                            "cveConsignacion" => $tmp->getCveConsignacion(),
                            "cveTipoCarpeta" => $tmp->getCveTipoCarpeta(),
                            "desEtapaProcesal" => utf8_encode($desEtapaProcesal),
                            "cveConsignacionA" => $tmp->getCveConsignacionA(),
                            "numero" => $tmp->getNumero(),
                            "anio" => $tmp->getAnio(),
                            "fechaRadicacion" => $tmp->getFechaRadicacion(),
                            "fechaRegistro" => $tmp->getFechaRegistro(),
                            "fechaActualizacion" => $tmp->getFechaActualizacion(),
                            "activo" => $tmp->getActivo(),
                            "cveJuzgado" => $tmp->getCveJuzgado(),
                            "carpetaInv" => utf8_encode($tmp->getCarpetaInv()),
                            "nuc" => utf8_encode($tmp->getNuc()),
                            "cveUsuario" => $tmp->getCveUsuario(),
                            "observaciones" => utf8_encode($tmp->getObservaciones()),
                            "numImputados" => $tmp->getNumImputados(),
                            "numOfendidos" => $tmp->getNumOfendidos(),
                            "numDelitos" => $tmp->getNumDelitos(),
                            "cveEstatusCarpeta" => $tmp->getCveEstatusCarpeta(),
                            "incompetencia" => $tmp->getIncompetencia(),
                            "cveTipoIncompetencia" => $tmp->getCveTipoIncompetencia(),
                            "acumulado" => $tmp->getAcumulado(),
                            "numAcumulado" => $tmp->getNumAcumulado(),
                            "fechaTermino" => $tmp->getFechaTermino(),
                            "cveConclucion" => $tmp->getCveConclucion(),
                            "ponderacion" => $tmp->getPonderacion()
                        );
                        array_push($listaResultados, $resultado);
                    }


                    $result = array(
                        "status" => "Ok",
                        "totalCount" => count($listaResultados),
                        "data" => $listaResultados,
                        "msj" => $msg
                    );
                } else {
                    $result = array(
                        "status" => "Error",
                        "msj" => "No se encontraron resultados"
                    );
                }
            } else {
                $result = array(
                    "status" => "Error",
                    "msj" => "No se encontraron resultados"
                );
            }
        } else {
            $result = array(
                "status" => "Error",
                "msj" => "No se encontraron resultados"
            );
        }
        return json_encode($result);
    }

    public function copiarCarpetasJudiciales($carpetasJudicialesDto, $imputadosCarpetasDto, $proveedor = null, $param = null) {
        $logger = new Logger("/../../logs/", "CarpetasJudiciales");
        $logger->w_onError("**********COMIENZA EL PROGRAMA DE COPIA DE IMPUTADOS HACIA CARPETAS JUDICIALES DE UNA ETAPA PROCESAL POSTERIOR**********");
        $error = false;
        $result = "";
        $resultado = false;
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }

        $fechaActual = "";
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $carpetasDto = new CarpetasjudicialesDTO();
        $impuatdosCarpetas = array(); //Seran los imputados que se registraran en la carpeta
        $ofendidosCarpetas = array(); // Seran los ofendidos que se registran en la carpeta
        $delitosCarpetas = array(); // Seran los delitos que se registran en la carpeta
        $impOfeDelRelCarpetas = array(); // Sera la relacion de los imputados ofendidos y delitos
        $idOfendido = 0;
        $idImputado = 0;
        $idDelito = 0;
        $idRelacionImpofedel = 0;
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $logger->w_onError("**********OBTENER LA FECHA ACTUAL DEL SERVIDOR MYSQL");

        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = "";
            }
        }

        $logger->w_onError("**********FECHA ACTUAL: " . $fechaActual);
        $carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        /*
         * consultar datos de la carpeta judicial con la etapa procesal solicitada
         */

        $carpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());

        $carpetasDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasDto, "", $this->proveedor);

        if ($carpetasDto != "") {
            $logger->w_onError("**********CONSULTAR DATOS DE LA CARPETA CON LA ETAPA PROCESAL SOLICITADA");
            $logger->w_onError("**********ID CARPETA JUDICIAL: " . $carpetasDto[0]->getIdCarpetaJudicial());
            $logger->w_onError("**********FECHA ACTUAL: " . $fechaActual);
            $logger->w_onError("**********ETAPA PROCESAL: " . $carpetasDto[0]->getCveEtapaProcesal());
            $logger->w_onError("**********NUMERO: " . $carpetasDto[0]->getNumero());
            $logger->w_onError("**********ANIO: " . $carpetasDto[0]->getAnio());
            $logger->w_onError("**********CARPETA INVESTIGACION: " . $carpetasDto[0]->getCarpetaInv());
            $logger->w_onError("**********NUC: " . $carpetasDto[0]->getNuc());
            /*
             * Se revisa si la carpeta solicitada tiene estatus Terminada para aperturarla
             */
            if ($carpetasDto[0]->getCveEstatusCarpeta() == 2) {
                $logger->w_onError("**********SE DETERMINA QUE LA CARPETA JUDICIAL TIENE ESTATUS TERMINADA");
                $carpetaJudicialTmp = new CarpetasjudicialesDTO();
                $carpetaJudicialTmp->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $carpetaJudicialTmp->setCveEstatusCarpeta(1);
                $carpetaJudicialTmp = $carpetasJudicialesDao->aperturarCarpeta($carpetaJudicialTmp, $this->proveedor);
                if ($carpetaJudicialTmp != "") {
                    $error = false;
                    $logger->w_onError("**********SE APERTURA LA CARPETA JUDICIAL CON ID: " . $carpetasDto[0]->getIdCarpetaJudicial());
                } else {
                    $error = true;
                    $logger->w_onError("**********SE DETERMINA QUE OCURRIO UN ERROR AL APERTURAR LA CARPETA");
                    $msg[] = array("Ocurrio un error al aperturar la carpeta judicial");
                }
            }
            if (!$error) {
                /*
                 * Agregar a la carpeta judicial los imputados en la etapa procesal solicitada
                 */
                $logger->w_onError("**********AGREGAR A LA CARPETA JUDICIAL LOS IMPUTADOS EN LA ETAPA PROCESAL SOLICITADA");
                $impofedelcarpetasAuxDto = new ImpofedelcarpetasDTO();
                $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $imputadoTmp = new ImputadoscarpetasDTO();
                $imputadoTmp->setIdImputadoCarpeta($imputadosCarpetasDto->getIdImputadoCarpeta());
                $imputadoTmp = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoTmp, "", $this->proveedor);
                foreach ($imputadoTmp as $imputado) {
                    $logger->w_onError("**********CONSULTAR DATOS GENERALES DEL IMPUTADO");
                    $imputadoDto = new ImputadoscarpetasDTO();
                    $imputadoDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                    $imputadoDto->setActivo("S");
                    $imputadoDto->setDetenido($imputado->getDetenido());
                    $imputadoDto->setNombre($imputado->getNombre());
                    $imputadoDto->setPaterno($imputado->getPaterno());
                    $imputadoDto->setMaterno($imputado->getMaterno());
                    $imputadoDto->setRfc($imputado->getRfc());
                    $imputadoDto->setCurp($imputado->getCurp());
                    $imputadoDto->setCveTipoDetencion($imputado->getCveTipoDetencion());
                    $imputadoDto->setLegalDetencion($imputado->getLegalDetencion());
                    $imputadoDto->setCveGenero($imputado->getCveGenero());
                    $imputadoDto->setCveTipoReligion($imputado->getCveTipoReligion());
                    $imputadoDto->setAlias($imputado->getAlias());
                    $imputadoDto->setFechaDeclaracion($imputado->getFechaDeclaracion());
                    $imputadoDto->setCvePaisNacimiento($imputado->getCvePaisNacimiento());
                    $imputadoDto->setCveEstadoNacimiento($imputado->getCveEstadoNacimiento());
                    $imputadoDto->setCveMunicipioNacimiento($imputado->getCveMunicipioNacimiento());
                    $imputadoDto->setFechaNacimiento($imputado->getFechaNacimiento());
                    $imputadoDto->setEdad($imputado->getEdad());
                    $imputadoDto->setCveTipoPersona($imputado->getCveTipoPersona());
                    $imputadoDto->setNombreMoral($imputado->getNombreMoral());
                    $imputadoDto->setCveNivelInstruccion($imputado->getCveNivelInstruccion());
                    $imputadoDto->setCveEstadoCivil($imputado->getCveEstadoCivil());
                    $imputadoDto->setCveEspanol($imputado->getCveEspanol());
                    $imputadoDto->setCveAlfabetismo($imputado->getCveAlfabetismo());
                    $imputadoDto->setCveDialectoIndigena($imputado->getCveDialectoIndigena());
                    $imputadoDto->setCveTipoFamiliaLinguistica($imputado->getCveTipoFamiliaLinguistica());
                    $imputadoDto->setCveOcupacion($imputado->getCveOcupacion());
                    $imputadoDto->setCveInterprete($imputado->getCveInterprete());
                    $imputadoDto->setCveEstadoPsicofisico($imputado->getCveEstadoPsicofisico());
                    $imputadoDto->setFechaImputacion($imputado->getFechaImputacion());
                    $imputadoDto->setFechaControlDet($imputado->getFechaControlDet());
                    $imputadoDto->setFecTerminoCons($imputado->getFecTerminoCons());
                    $imputadoDto->setFecCierreInv($imputado->getFecCierreInv());
                    $imputadoDto->setEstadoNacimiento($imputado->getEstadoNacimiento());
                    $imputadoDto->setMunicipioNacimiento($imputado->getMunicipioNacimiento());
                    $imputadoDto->setRelacionMoral($imputado->getRelacionMoral());
                    $imputadoDto->setPersonaMoral($imputado->getPersonaMoral());
                    $imputadoDto->setCveCereso($imputado->getCveCereso());
                    //$imputadoDto->setCveEtapaProcesal($carpetasDto[0]->getCveEtapaProcesal());
                    $imputadoDto->setCveTipoReincidencia($imputado->getCveTipoReincidencia());
                    $imputadoDto->setIngresoMensual($imputado->getIngresoMensual());
                    $imputadoDto->setCveGrupoEdnico($imputado->getCveGrupoEdnico());
                    $imputadoDto->setTieneSobreseimiento("N");
                    //$imputadoDto->setFechaSobreseimiento($imputado->getFechaSobreseimiento());

                    $tmpImputadosDto = new ImputadoscarpetasDTO();
                    $logger->w_onError("**********VERIFICAR SI EXISTE EL IMPUTADO EN LA ETAPA PROCESAL SOLICITADA");
                    $tmpImputadosDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoDto, "", $this->proveedor);
                    if ($tmpImputadosDto == "") {
                        $imputadoDto->setCveEtapaProcesal($carpetasDto[0]->getCveEtapaProcesal());
                        $imputadoDto = $imputadosCarpetasDao->insertImputadoscarpetas($imputadoDto, $this->proveedor);
                        if ($imputadoDto != "") {
                            $idImputado = $imputadoDto[0]->getIdImputadoCarpeta();
                            $error = false;
                            $logger->w_onError("**********SE REGISTRA AL IMPUTADO CON ID: " . $imputadoDto[0]->getIdImputadoCarpeta());
                            /*
                             * Registrar las nacionalidades correspondientes al imputado
                             */
                            $nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                            $nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $nacionalidadesimputadoscarpetasDto->setActivo("S");
                            $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                            $nacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto, "", $this->proveedor);

                            if ($nacionalidadesimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($nacionalidadesimputadoscarpetasDto); $x++) {
                                    $nacionalidadesDto = new NacionalidadesimputadoscarpetasDTO();
                                    $nacionalidadesDto->setcvePais($nacionalidadesimputadoscarpetasDto[$x]->getCvePais());
                                    $nacionalidadesDto->setactivo("S");
                                    $nacionalidadesDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadocarpeta());

                                    $nacionalidadesDto = $nacionalidadesimputadoscarpetasDao->insertNacionalidadesimputadoscarpetas($nacionalidadesDto, $this->proveedor);

                                    if ($nacionalidadesDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar las nacionalidades de los imputados");
                                        $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA NACIONALIDAD");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE REGISTRO LA NACIONALIDAD DEL IMPUTADO CON ID: " . $nacionalidadesDto[0]->getIdNacionalidadImputadoCarpeta());
                                        /*
                                         * Borrar logicamente el registro de nacionalidad imputado origen
                                         */
//                                        $nacionalidadImputadoTmp = new NacionalidadesimputadoscarpetasDTO();
//                                        $nacionalidadImputadoTmp->setIdNacionalidadImputadoCarpeta($nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        $nacionalidadImputadoTmp->setActivo("N");
//                                        $nacionalidadImputadoTmp = $nacionalidadesimputadoscarpetasDao->updateNacionalidadesimputadoscarpetas($nacionalidadImputadoTmp, $this->proveedor);
//                                        if ($nacionalidadImputadoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE LA NACIONALIDAD DEL IMPUTADO CON ID: " . $nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA NACIONALIDAD DEL IMPUTADO CON ID: " . $nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $error = false;
                                $msg[] = array("El imputado no cuenta con nacionalidades activas");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
                            }
                            /*
                             * Agregar los domicilios del imputado
                             */
                            $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                            $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $domiciliosimputadoscarpetasDto->setActivo("S");
                            $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                            $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $this->proveedor);

                            if ($domiciliosimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($domiciliosimputadoscarpetasDto); $x++) {
                                    $domiciliosDto = new DomiciliosimputadoscarpetasDTO();
                                    $domiciliosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $domiciliosDto->setDomicilioProcesal($domiciliosimputadoscarpetasDto[$x]->getDomicilioProcesal());
                                    $domiciliosDto->setCvePais($domiciliosimputadoscarpetasDto[$x]->getCvePais());
                                    $domiciliosDto->setCveEstado($domiciliosimputadoscarpetasDto[$x]->getCveEstado());
                                    $domiciliosDto->setCveMunicipio($domiciliosimputadoscarpetasDto[$x]->getCveMunicipio());
                                    $domiciliosDto->setDireccion($domiciliosimputadoscarpetasDto[$x]->getDireccion());
                                    $domiciliosDto->setColonia($domiciliosimputadoscarpetasDto[$x]->getColonia());
                                    $domiciliosDto->setNumInterior($domiciliosimputadoscarpetasDto[$x]->getNumInterior());
                                    $domiciliosDto->setNumExterior($domiciliosimputadoscarpetasDto[$x]->getNumExterior());
                                    $domiciliosDto->setCp($domiciliosimputadoscarpetasDto[$x]->getCp());
                                    $domiciliosDto->setLatitud($domiciliosimputadoscarpetasDto[$x]->getLatitud());
                                    $domiciliosDto->setLongitud($domiciliosimputadoscarpetasDto[$x]->getLongitud());
                                    $domiciliosDto->setRecidenciaHabitual($domiciliosimputadoscarpetasDto[$x]->getRecidenciaHabitual());
                                    $domiciliosDto->setEstado($domiciliosimputadoscarpetasDto[$x]->getEstado());
                                    $domiciliosDto->setMunicipio($domiciliosimputadoscarpetasDto[$x]->getMunicipio());
                                    $domiciliosDto->setCveConvivencia($domiciliosimputadoscarpetasDto[$x]->getCveConvivencia());
                                    $domiciliosDto->setCveTipoDeVivienda($domiciliosimputadoscarpetasDto[$x]->getCveTipoDeVivienda());
                                    $domiciliosDto->setActivo("S");

                                    $domiciliosDto = $domiciliosimputadoscarpetasDao->insertDomiciliosimputadoscarpetas($domiciliosDto, $this->proveedor);

                                    if ($domiciliosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los domicilios del imputado");
                                        $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR EL DOMICILIO");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("SE AGREGA EL DOMICILIO CON ID: " . $domiciliosDto[0]->getIdDomicilioImputadoCarpeta());
                                        $error = false;
                                        /*
                                         * Borrar logicamente el registro del domicilio imputado origen
                                         */
//                                        $domicilioImputadoTmp = new DomiciliosimputadoscarpetasDTO();
//                                        $domicilioImputadoTmp->setIdDomicilioImputadoCarpeta($domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        $domicilioImputadoTmp->setActivo("N");
//                                        $domicilioImputadoTmp = $domiciliosimputadoscarpetasDao->updateDomiciliosimputadoscarpetas($domicilioImputadoTmp, $this->proveedor);
//                                        if ($domicilioImputadoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("SE BORRA LOGICAMENTE EL DOMICILIO CON ID: " . $domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DOMICILIO CON ID: " . $domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("La carpeta no cuenta con domicilios para el imputado");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
                            }
                            /*
                             * Agregar los defensores del imputado correspondiente
                             */
                            $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                            $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $defensoresimputadoscarpetasDto->setActivo("S");
                            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                            $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $this->proveedor);

                            if ($defensoresimputadoscarpetasDto != "") {

                                for ($x = 0; $x < count($defensoresimputadoscarpetasDto); $x++) {
                                    $defensoresDto = new DefensoresimputadoscarpetasDTO();
                                    $defensoresDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $defensoresDto->setCveTipoDefensor($defensoresimputadoscarpetasDto[$x]->getCveTipoDefensor());
                                    $defensoresDto->setNombre($defensoresimputadoscarpetasDto[$x]->getNombre());
                                    $defensoresDto->setTelefono($defensoresimputadoscarpetasDto[$x]->getTelefono());
                                    $defensoresDto->setCelular($defensoresimputadoscarpetasDto[$x]->getCelular());
                                    $defensoresDto->setEmail($defensoresimputadoscarpetasDto[$x]->getEmail());
                                    $defensoresDto->setActivo("S");

                                    $defensoresDto = $defensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($defensoresDto, $this->proveedor);

                                    if ($defensoresDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los defensores");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL AGREGAR AL DEFENSOR : ");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("**********SE AGREGO AL DEFENSOR CON ID : " . $defensoresDto[0]->getIdDefensorImputadoCarpeta());
                                        $error = false;
                                        /*
                                         * Borrar logicamente el registro del defensor imputado origen
                                         */
//                                        $defensorImputadoTmp = new DefensoresimputadoscarpetasDTO();
//                                        $defensorImputadoTmp->setIdDefensorImputadoCarpeta($defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        $defensorImputadoTmp->setActivo("N");
//                                        $defensorImputadoTmp = $defensoresimputadoscarpetasDao->updateDefensoresimputadoscarpetas($defensorImputadoTmp, $this->proveedor);
//                                        if ($defensorImputadoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE AL DEFENSOR CON ID : " . $defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL DEFENSOR CON ID : " . $defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("La carpeta no cuenta con defensores para el imputado.");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON DEFENSORES");
                            }
                            /*
                             * Agregar los tutores para el imputado
                             */

                            $tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();
                            $tutoresimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $tutoresimputadoscarpetasDto->setActivo("S");
                            $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
                            $tutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto, "", $this->proveedor);

                            if ($tutoresimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($tutoresimputadoscarpetasDto); $x++) {
                                    $tutoresimputadosDto = new TutoresimputadoscarpetasDTO();
                                    $tutoresimputadosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $tutoresimputadosDto->setCveGenero($tutoresimputadoscarpetasDto[$x]->getCveGenero());
                                    $tutoresimputadosDto->setCveTipoTutor($tutoresimputadoscarpetasDto[$x]->getCveTipoTutor());
                                    $tutoresimputadosDto->setProvDef($tutoresimputadoscarpetasDto[$x]->getProvDef());
                                    $tutoresimputadosDto->setNombre($tutoresimputadoscarpetasDto[$x]->getNombre());
                                    $tutoresimputadosDto->setPaterno($tutoresimputadoscarpetasDto[$x]->getPaterno());
                                    $tutoresimputadosDto->setMaterno($tutoresimputadoscarpetasDto[$x]->getMaterno());
                                    $tutoresimputadosDto->setFechaNacimiento($tutoresimputadoscarpetasDto[$x]->getFechaNacimiento());
                                    $tutoresimputadosDto->setEdad($tutoresimputadoscarpetasDto[$x]->getEdad());
                                    $tutoresimputadosDto->setActivo("S");

                                    $tutoresimputadosDto = $tutoresimputadoscarpetasDao->insertTutoresimputadoscarpetas($tutoresimputadosDto, $this->proveedor);
                                    if ($tutoresimputadosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los tutores");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR : ");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresimputadosDto[0]->getIdTutorImputadoCarpeta());
                                        /*
                                         * Borrar logicamente el registro del tutor imputado origen
                                         */
//                                        $tutorImputadoTmp = new TutoresimputadoscarpetasDTO();
//                                        $tutorImputadoTmp->setIdTutorImputadoCarpeta($tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        $tutorImputadoTmp->setActivo("N");
//                                        $tutorImputadoTmp = $tutoresimputadoscarpetasDao->updateTutoresimputadoscarpetas($tutorImputadoTmp, $this->proveedor);
//                                        if ($tutorImputadoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE AL TUTOR CON ID : " . $tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL TUTOR CON ID : " . $tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con tutores");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON TUTORES");
                            }
                            /*
                             * Agregar los telefonos del imputado
                             */
                            $telefonosImputadoscarpetasDto = new TelefonosImputadoscarpetasDTO();
                            $telefonosImputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $telefonosImputadoscarpetasDto->setActivo("S");
                            $telefonosImputadoscarpetasDao = new TelefonosImputadoscarpetasDAO();
                            $telefonosImputadoscarpetasDto = $telefonosImputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadoscarpetasDto, "", $this->proveedor);

                            if ($telefonosImputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($telefonosImputadoscarpetasDto); $x++) {
                                    $telefenosDto = new TelefonosimputadoscarpetasDTO();
                                    $telefenosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $telefenosDto->setTelefono($telefonosImputadoscarpetasDto[$x]->getTelefono());
                                    $telefenosDto->setCelular($telefonosImputadoscarpetasDto[$x]->getCelular());
                                    $telefenosDto->setEmail($telefonosImputadoscarpetasDto[$x]->getEmail());
                                    $telefenosDto->setActivo("S");

                                    $telefenosDto = $telefonosImputadoscarpetasDao->insertTelefonosimputadoscarpetas($telefenosDto, $this->proveedor);
                                    if ($telefenosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los telefonos");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR EL TELEFONO : ");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE REGISTRO EL TELEFONO CON ID : " . $telefenosDto[0]->getIdTelefonoImputadosCarpeta());
                                        /*
                                         * Borrar logicamente el telefono del imputado origen
                                         */
//                                        $telefonoImputadoTmp = new TelefonosimputadoscarpetasDTO();
//                                        $telefonoImputadoTmp->setIdTelefonoImputadosCarpeta($telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        $telefonoImputadoTmp->setActivo("N");
//                                        $telefonoImputadoTmp = $telefonosImputadoscarpetasDao->updateTelefonosimputadoscarpetas($telefonoImputadoTmp, $this->proveedor);
//                                        if ($telefonoImputadoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL TELEFONO CON ID : " . $telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL TELEFONO CON ID : " . $telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con telefonos");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUN NUMERO TELEFONICO : ");
                            }
                            /*
                             * Agregar las drogas correspondientes al imputado
                             */
                            $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();
                            $imputadosdrogascarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $imputadosdrogascarpetasDto->setActivo("S");
                            $imputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
                            $imputadosdrogascarpetasDto = $imputadosdrogascarpetasDao->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto, "", $this->proveedor);

                            if ($imputadosdrogascarpetasDto != "") {
                                for ($x = 0; $x < count($imputadosdrogascarpetasDto); $x++) {
                                    $imputadosdrogasDto = new ImputadosdrogascarpetasDTO();
                                    $imputadosdrogasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $imputadosdrogasDto->setcveDroga($imputadosdrogascarpetasDto[$x]->getCveDroga());
                                    $imputadosdrogasDto->setactivo("S");

                                    $imputadosdrogasDto = $imputadosdrogascarpetasDao->insertImputadosdrogascarpetas($imputadosdrogasDto, $this->proveedor);
                                    if ($imputadosdrogasDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar la droga");
                                        $logger->w_onError("**********SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA DROGA : ");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("**********SE REGISTRA LA DROGA CON ID : " . $imputadosdrogasDto[0]->getIdImputadoDrogaCarpeta());
                                        $error = false;
//                                        $imputadoDrogaTmp = new ImputadosdrogascarpetasDTO();
//                                        $imputadoDrogaTmp->setIdImputadoDrogaCarpeta($imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        $imputadoDrogaTmp->setActivo("N");
//                                        $imputadoDrogaTmp = $imputadosdrogascarpetasDao->updateImputadosdrogascarpetas($imputadoDrogaTmp, $this->proveedor);
//                                        if ($imputadoDrogaTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE LA DROGA CON ID : " . $imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA DROGA CON ID : " . $imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con drogas registradas");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUNA DROGA REGISTRADA : ");
                            }
                            /*
                             * Termina el proceso de copia de datos de imputados, si no hay error
                             * se procede a eliminar l�gicamente al imputado de la carpeta origen
                             */
//                            $imputadoTmp = new ImputadoscarpetasDTO();
//                            $imputadoTmp->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
//                            $imputadoTmp->setCveEtapaProcesal($carpetasDto[0]->getCveEtapaProcesal());
//                            $imputadoTmp->setActivo("N");
//                            $imputadoTmp = $imputadosCarpetasDao->updateImputadoscarpetas($imputadoTmp, $this->proveedor);
//                            if ($imputadoTmp != "") {
//                                $error = false;
//                                $logger->w_onError("**********SE BORRA LOGICAMENTE AL IMPUTADO CON ID : " . $imputado->getIdImputadoCarpeta());
//                            } else {
//                                $error = true;
//                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL IMPUTADO CON ID : " . $imputado->getIdImputadoCarpeta());
//                            }
                            /*
                             * Actualizar la etapa procesal del imputado origen
                             */
                            if ($param['etapaProcesal'] == "S") {
                                $dtoImputado = new ImputadoscarpetasDTO();
                                $dtoImputado->setIdImputadoCarpeta($imputadosCarpetasDto->getIdImputadoCarpeta());
                                $dtoImputado->setCveEtapaProcesal($carpetasDto[0]->getCveEtapaProcesal());
                                $dtoImputado = $imputadosCarpetasDao->updateImputadoscarpetas($dtoImputado, $this->proveedor);
                                if ($dtoImputado != "") {
                                    $logger->w_onError("**********SE MUEVE AL IMPUTADO CON ID : " . $imputadosCarpetasDto->getIdImputadoCarpeta());
                                    $logger->w_onError("**********EN LA ETAPA PROCESAL : " . $carpetasDto[0]->getCveEtapaProcesal());
                                    $error = false;
                                    $msg[] = array("Se cambia la etapa procesal solicitada al imputado");
                                } else {
                                    $logger->w_onError("**********OCURRIO UN ERROR AL CAMBIAR LA ETAPA PROCESAL DEL IMPUTADO CON ID : " . $imputadosCarpetasDto->getIdImputadoCarpeta());
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al cambiar la etapa procesal del imputado");
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al copiar los datos del imputado");
                            $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR AL IMPUTADO : ");
                            $logger->w_onError("**********NOMBRE : " . $imputado->getNombre());
                            $logger->w_onError("**********APELLIDO PATERNO : " . $imputado->getPaterno());
                            $logger->w_onError("**********APELLIDO MATERNO : " . $imputado->getMaterno());
                        }
                    } else {
                        $logger->w_onError("**********EL IMPUTADO EN LA ETAPA PROCESAL SOLICITADA YA EXISTE, ID : " . $tmpImputadosDto[0]->getIdImputadoCarpeta());
                        $imputadoDto = new ImputadoscarpetasDTO();
                        $logger->w_onError("**********ACTUALIZAR LA ETAPA PROCESAL DEL IMPUTADO CON : " . $imputadosCarpetasDto->getIdImputadoCarpeta());
                        $imputadoDto->setIdImputadoCarpeta($tmpImputadosDto[0]->getIdImputadoCarpeta());
                        $imputadoDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoDto, "", $this->proveedor);

                        $dtoImputado = new ImputadoscarpetasDTO();
                        $dtoImputado->setIdImputadoCarpeta($imputadosCarpetasDto->getIdImputadoCarpeta());
                        $dtoImputado->setCveEtapaProcesal($carpetasDto[0]->getCveEtapaProcesal());
                        $dtoImputado = $imputadosCarpetasDao->updateImputadoscarpetas($dtoImputado, $this->proveedor);
                        if ($dtoImputado != "") {
                            $logger->w_onError("**********SE MUEVE AL IMPUTADO CON ID : " . $imputadosCarpetasDto->getIdImputadoCarpeta());
                            $logger->w_onError("**********EN LA ETAPA PROCESAL : " . $carpetasDto[0]->getCveEtapaProcesal());
                            $error = false;
                            $msg[] = array("Se cambia la etapa procesal solicitada al imputado");
                        } else {
                            $logger->w_onError("**********OCURRIO UN ERROR AL CAMBIAR LA ETAPA PROCESAL DEL IMPUTADO CON ID : " . $imputadosCarpetasDto->getIdImputadoCarpeta());
                            $error = true;
                            $msg[] = array("Ocurrio un error al cambiar la etapa procesal del imputado");
                        }
                    }

                    /*
                     * Consultar la relacion impofedel para obtener el id del
                     * ofendido relacionado con cada imputado
                     */
                    $logger->w_onError("**********CONSULTAR LA RELACION IMPOFEDEL CARPETAS : ");
                    $impofedelcarpetasAuxDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                    $impofedelcarpetasAuxDto->setActivo("S");
                    //consultar las relaciones del imputado 
                    $rsImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasAuxDto, "", $this->proveedor);
                    if ($rsImpofedelcarpetasDto != "") {
                        foreach ($rsImpofedelcarpetasDto as $impofedel) {
                            $logger->w_onError("**********ID DE RELACION IMPOFEDEL CARPETAS : " . $impofedel->getIdImpOfeDelCarpeta());
                            /*
                             * Copiar a los ofendidos correspondientes a la carpeta judicial
                             */
                            $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                            $ofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                            //$ofendidoscarpetasDto->setActivo("S");
                            $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                            $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
                            $logger->w_onError("**********CONSULTAR LOS OFENDIDOS RELACIONADOS CON CADA IMPUTADO : ");

                            if ($ofendidoscarpetasDto != "") {
                                for ($index = 0; $index < count($ofendidoscarpetasDto); $index++) {
                                    $ofendidosDto = new OfendidoscarpetasDTO();
                                    $logger->w_onError("**********ID DE OFENDIDO : " . $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());

                                    $ofendidosDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                                    $ofendidosDto->setActivo("S");
                                    $ofendidosDto->setNombre($ofendidoscarpetasDto[$index]->getNombre());
                                    $ofendidosDto->setPaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                    $ofendidosDto->setMaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                    $ofendidosDto->setRfc($ofendidoscarpetasDto[$index]->getRfc());
                                    $ofendidosDto->setCurp($ofendidoscarpetasDto[$index]->getCurp());
                                    $ofendidosDto->setFechaNacimiento($ofendidoscarpetasDto[$index]->getFechaNacimiento());
                                    $ofendidosDto->setCveOcupacion($ofendidoscarpetasDto[$index]->getCveOcupacion());
                                    $ofendidosDto->setCveTipoPersona($ofendidoscarpetasDto[$index]->getCveTipoPersona());
                                    $ofendidosDto->setCveGenero($ofendidoscarpetasDto[$index]->getCveGenero());
                                    $ofendidosDto->setCveTipoParte($ofendidoscarpetasDto[$index]->getCveTipoParte());
                                    $ofendidosDto->setCveTipoReligion($ofendidoscarpetasDto[$index]->getCveTipoReligion());
                                    $ofendidosDto->setEdad($ofendidoscarpetasDto[$index]->getEdad());
                                    $ofendidosDto->setCvePaisNacimiento($ofendidoscarpetasDto[$index]->getCvePaisNacimiento());
                                    $ofendidosDto->setCveEstadoNacimiento($ofendidoscarpetasDto[$index]->getCveEstadoNacimiento());
                                    $ofendidosDto->setEstadoNacimiento($ofendidoscarpetasDto[$index]->getEstadoNacimiento());
                                    $ofendidosDto->setCveMunicipioNacimiento($ofendidoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                    $ofendidosDto->setMunicipioNacimiento($ofendidoscarpetasDto[$index]->getMunicipioNacimiento());
                                    $ofendidosDto->setCveEstadoCivil($ofendidoscarpetasDto[$index]->getCveEstadoCivil());
                                    $ofendidosDto->setCveAlfabetismo($ofendidoscarpetasDto[$index]->getCveAlfabetismo());
                                    $ofendidosDto->setCveNivelInstruccion($ofendidoscarpetasDto[$index]->getCveNivelInstruccion());
                                    $ofendidosDto->setCveEspanol($ofendidoscarpetasDto[$index]->getCveEspanol());
                                    $ofendidosDto->setCveDialectoIndigena($ofendidoscarpetasDto[$index]->getCveDialectoIndigena());
                                    $ofendidosDto->setCveTipoFamiliaLinguistica($ofendidoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                    $ofendidosDto->setCveInterprete($ofendidoscarpetasDto[$index]->getCveInterprete());
                                    $ofendidosDto->setCveOrdenProteccion($ofendidoscarpetasDto[$index]->getCveOrdenProteccion());
                                    $ofendidosDto->setCveEstadoPsicofisico($ofendidoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                    $ofendidosDto->setNombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                    $ofendidosDto->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoscarpetasDto[$index]->getCveVictimaDeLaDelincuenciaOrganizada());
                                    $ofendidosDto->setCveVictimaDeViolenciaDeGenero($ofendidoscarpetasDto[$index]->getCveVictimaDeViolenciaDeGenero());
                                    $ofendidosDto->setCveVictimaDeTrata($ofendidoscarpetasDto[$index]->getCveVictimaDeTrata());
                                    $ofendidosDto->setCveVictimaDeAcoso($ofendidoscarpetasDto[$index]->getCveVictimaDeAcoso());
                                    $ofendidosDto->setDesaparecido($ofendidoscarpetasDto[$index]->getDesaparecido());
                                    $ofendidosDto->setNumHijos($ofendidoscarpetasDto[$index]->getNumHijos());
                                    $ofendidosDto->setEmbarazada($ofendidoscarpetasDto[$index]->getEmbarazada());
                                    $ofendidosDto->setCveGrupoEdnico($ofendidoscarpetasDto[$index]->getCveGrupoEdnico());

                                    $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                                    $rsOfendidosCarpetas = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidosDto, "", $this->proveedor);
                                    /*
                                     * Verificamos si el ofendido ya se encuentra registrado en la base de datos
                                     */
                                    $logger->w_onError("**********REVISAR SI EL OFENDIDO SE ENCUENTRA EN LA CARPETA JUDICIAL SOLICITADA");
                                    if ($rsOfendidosCarpetas == "") {
                                        $logger->w_onError("**********SE DETERMINA QUE EL OFENDIDO NO SE ENCUENTRA EN LA CARPETA JUDICIAL SOLICITADA, SE PROCEDE A INSERTARLO ");
                                        $ofendidosDto = $ofendidoscarpetasDao->insertOfendidoscarpetas($ofendidosDto, $this->proveedor);
                                        if ($ofendidosDto != "") {
                                            $logger->w_onError("**********ID DE OFENDIDO INSERTADO : " . $ofendidosDto[0]->getIdOfendidoCarpeta());
                                            $ofendidosCarpetas[] = array("idOfendidoCarpetaJudicial" => $ofendidosDto[0]->getIdOfendidoCarpeta());
                                            $ofendidosDto = $ofendidosDto[0];
                                            /*
                                             * Se copian los datos de domicilios del ofendido
                                             */
                                            $logger->w_onError("**********COPIAR LOS DATOS DE DOMICILIOS DEL OFENDIDO");
                                            $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                                            $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                            $domiciliosofendidoscarpetasDto->setActivo("S");
                                            $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
                                            $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $this->proveedor);

                                            if ($domiciliosofendidoscarpetasDto != "") {
                                                for ($x = 0; $x < count($domiciliosofendidoscarpetasDto); $x++) {
                                                    $domiciliosDto = new DomiciliosofendidoscarpetasDTO();
                                                    $domiciliosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                    $domiciliosDto->setDomicilioProcesal($domiciliosofendidoscarpetasDto[$x]->getDomicilioProcesal());
                                                    $domiciliosDto->setCvePais($domiciliosofendidoscarpetasDto[$x]->getCvePais());
                                                    $domiciliosDto->setCveEstado($domiciliosofendidoscarpetasDto[$x]->getcveEstado());
                                                    $domiciliosDto->setCveMunicipio($domiciliosofendidoscarpetasDto[$x]->getCveMunicipio());
                                                    $domiciliosDto->setDireccion($domiciliosofendidoscarpetasDto[$x]->getDireccion());
                                                    $domiciliosDto->setColonia($domiciliosofendidoscarpetasDto[$x]->getColonia());
                                                    $domiciliosDto->setNumInterior($domiciliosofendidoscarpetasDto[$x]->getNumInterior());
                                                    $domiciliosDto->setNumExterior($domiciliosofendidoscarpetasDto[$x]->getNumExterior());
                                                    $domiciliosDto->setCp($domiciliosofendidoscarpetasDto[$x]->getCp());
                                                    $domiciliosDto->setLatitud($domiciliosofendidoscarpetasDto[$x]->getLatitud());
                                                    $domiciliosDto->setLongitud($domiciliosofendidoscarpetasDto[$x]->getLongitud());
                                                    $domiciliosDto->setRecidenciaHabitual($domiciliosofendidoscarpetasDto[$x]->getRecidenciaHabitual());
                                                    $domiciliosDto->setEstado($domiciliosofendidoscarpetasDto[$x]->getEstado());
                                                    $domiciliosDto->setMunicipio($domiciliosofendidoscarpetasDto[$x]->getMunicipio());
                                                    $domiciliosDto->setCveConvivencia($domiciliosofendidoscarpetasDto[$x]->getCveConvivencia());
                                                    $domiciliosDto->setCveTipoDeVivienda($domiciliosofendidoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                    $domiciliosDto->setActivo("S");

                                                    $domiciliosDto = $domiciliosofendidoscarpetasDao->insertDomiciliosofendidoscarpetas($domiciliosDto, $this->proveedor);
                                                    if ($domiciliosDto == "") {
                                                        $msg[] = array("Error al copiar el domicilio al ofendido");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE DOMICILIOS DEL OFENDIDO");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********ID DE DOMICILIO OFENDIDO INSERTADO: " . $domiciliosDto[0]->getIdDomicilioOfendidoCarpeta());
                                                    }
                                                }
                                            } else {
                                                $msg[] = array("La referencia no cuenta con domicilios para el ofendido");
                                                $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DOMICILIOS PARA EL OFENDIDO");
                                                //$error = true;
                                            }
                                            /*
                                             * Copiar datos de defensores para el ofendido
                                             */
                                            $logger->w_onError("**********COPIAR DATOS DE DEFENSORES DEL OFENDIDO");
                                            $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                                            $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                            $defensoresofendidoscarpetasDto->setActivo("S");
                                            $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                                            $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $this->proveedor);

                                            if ($defensoresofendidoscarpetasDto != "") {
                                                for ($x = 0; $x < count($defensoresofendidoscarpetasDto); $x++) {
                                                    $defensoresofendidosDto = new DefensoresofendidoscarpetasDTO();
                                                    $defensoresofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                    $defensoresofendidosDto->setCveTipoDefensor($defensoresofendidoscarpetasDto[$x]->getCveTipoDefensor());
                                                    $defensoresofendidosDto->setNombre($defensoresofendidoscarpetasDto[$x]->getNombre());
                                                    $defensoresofendidosDto->setTelefono($defensoresofendidoscarpetasDto[$x]->getTelefono());
                                                    $defensoresofendidosDto->setCelular($defensoresofendidoscarpetasDto[$x]->getCelular());
                                                    $defensoresofendidosDto->setEmail($defensoresofendidoscarpetasDto[$x]->getEmail());
                                                    $defensoresofendidosDto->setActivo("S");

                                                    $defensoresofendidosDto = $defensoresofendidoscarpetasDao->insertDefensoresofendidoscarpetas($defensoresofendidosDto, $this->proveedor);
                                                    if ($defensoresofendidosDto == "") {
                                                        $msg[] = array("Erro al copiar el defensor a la carpeta judicial");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL DEFENSOR");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********ID DEL DEFENSOR OFENDIDO INSERTADO: " . $defensoresofendidosDto[0]->getIdDefensorOfendidoCarpeta());
                                                    }
                                                }
                                            } else {
                                                $msg[] = array("La referencia no cuenta con defensores para el ofendido");
                                                $logger->w_onError("**********EL OFENDIDO NO CUENTA CON DEFENSORES");
                                                //$error = true;
                                            }
                                            /*
                                             * Copiar datos de telefonos del ofendido
                                             */
                                            $logger->w_onError("**********COPIAR DATOS DE LOS TELEFONOS CORRESPONDIENTES AL OFENDIDO");
                                            $telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                                            $telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                            $telefonosofendidoscarpetasDto->setActivo("S");
                                            $telefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                                            $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, "", $this->proveedor);

                                            if ($telefonosofendidoscarpetasDto != "") {
                                                for ($x = 0; $x < count($telefonosofendidoscarpetasDto); $x++) {
                                                    $telefonosofendidosDto = new TelefonosofendidoscarpetasDTO();
                                                    $telefonosofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                    $telefonosofendidosDto->setTelefono($telefonosofendidoscarpetasDto[$x]->getTelefono());
                                                    $telefonosofendidosDto->setCelular($telefonosofendidoscarpetasDto[$x]->getCelular());
                                                    $telefonosofendidosDto->setEmail($telefonosofendidoscarpetasDto[$x]->getEmail());
                                                    $telefonosofendidosDto->setActivo("S");

                                                    $telefonosofendidosDto = $telefonosofendidoscarpetasDao->insertTelefonosofendidoscarpetas($telefonosofendidosDto, $this->proveedor);
                                                    if ($telefonosofendidosDto == "") {
                                                        $msg[] = array("Ocurrio un erro al copiar los telefonos a la carpeta judicial");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO A LA CARPETA JUDICIAL");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********ID DEL TELEFONO OFENDIDO INSERTADO: " . $telefonosofendidosDto[0]->getIdTelefonoOfendidoCarpeta());
                                                    }
                                                }
                                            } else {
                                                $msg[] = array("La referencia no cuenta con telefonos para el ofendido");
                                                $logger->w_onError("**********EL OFENDIDO NO CUENTA CON TELEFONOS");
                                                //$error = true;
                                            }

                                            /*
                                             * Copiar datos de nacionalidades del ofendido
                                             */
                                            $logger->w_onError("**********COPIAR DATOS DE NACIONALIDADES DEL OFENDIDO");
                                            $nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                                            $nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                            $nacionalidadesofendidoscarpetasDto->setActivo("S");
                                            $nacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                                            $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, "", $this->proveedor);

                                            if ($nacionalidadesofendidoscarpetasDto != "") {
                                                for ($x = 0; $x < count($nacionalidadesofendidoscarpetasDto); $x++) {
                                                    $nacionalidadesofendidosDto = new NacionalidadesofendidoscarpetasDTO();
                                                    $nacionalidadesofendidosDto->setcvePais($nacionalidadesofendidoscarpetasDto[$x]->getCvePais());
                                                    $nacionalidadesofendidosDto->setactivo("S");
                                                    $nacionalidadesofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());

                                                    $nacionalidadesofendidosDto = $nacionalidadesofendidoscarpetasDao->insertNacionalidadesofendidoscarpetas($nacionalidadesofendidosDto, $this->proveedor);
                                                    if ($nacionalidadesofendidosDto == "") {
                                                        $msg[] = array("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA NACIONALIDAD DEL OFENDIDO");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********ID DE LA NACIONALIDAD OFENDIDO INSERTADA: " . $nacionalidadesofendidosDto[0]->getIdNacionalidadOfendidoCarpeta());
                                                    }
                                                }
                                            } else {
                                                $msg[] = array("La referencia no cuenta con nacionalidades para el ofendido");
                                                $logger->w_onError("**********EL OFENDIDO NO CUENTA CON NACIONALIDADES");
                                                //$error = true;
                                            }

                                            /*
                                             * Copiar datos de tutores del ofendido
                                             */
                                            $logger->w_onError("**********COPIAR DATOS DE TUTORES DEL OFENDIDO");
                                            $tutoresofendidoscarpetasDto = new TutoresofendidoscarpetasDTO();
                                            $tutoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                            $tutoresofendidoscarpetasDto->setActivo("S");
                                            $tutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
                                            $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, "", $this->proveedor);

                                            if ($tutoresofendidoscarpetasDto != "") {
                                                for ($x = 0; $x < count($tutoresofendidoscarpetasDto); $x++) {
                                                    $tutoresofendidosDto = new TutoresofendidoscarpetasDTO();
                                                    $tutoresofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                    $tutoresofendidosDto->setCveGenero($tutoresofendidoscarpetasDto[$x]->getCveGenero());
                                                    $tutoresofendidosDto->setCveTipoTutor($tutoresofendidoscarpetasDto[$x]->getCveTipoTutor());
                                                    $tutoresofendidosDto->setProvDef($tutoresofendidoscarpetasDto[$x]->getProvDef());
                                                    $tutoresofendidosDto->setNombre($tutoresofendidoscarpetasDto[$x]->getNombre());
                                                    $tutoresofendidosDto->setPaterno($tutoresofendidoscarpetasDto[$x]->getPaterno());
                                                    $tutoresofendidosDto->setMaterno($tutoresofendidoscarpetasDto[$x]->getMaterno());
                                                    $tutoresofendidosDto->setFechaNacimiento($tutoresofendidoscarpetasDto[$x]->getFechaNacimiento());
                                                    $tutoresofendidosDto->setEdad($tutoresofendidoscarpetasDto[$x]->getEdad());
                                                    $tutoresofendidosDto->setActivo("S");

                                                    $tutoresofendidosDto = $tutoresofendidoscarpetasDao->insertTutoresofendidoscarpetas($tutoresofendidosDto, $this->proveedor);
                                                    if ($tutoresofendidosDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los tutores");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR CORRESPONDIENTE AL OFENDIDO ");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresofendidosDto[0]->getIdTutorOfendidoCarpeta());
                                                    }
                                                }
                                            } else {
                                                $msg[] = array("El ofendido no cuenta con tutores");
                                                $logger->w_onError("**********SE DETERMINA QUE EL OFENDIDO NO CUENTA CON TUTORES");
                                            }
                                        } else {
                                            $msg[] = array("No se logro registra el ofendido en la carpeta judicial");

                                            $error = true;
                                        }
                                    } else {
                                        $logger->w_onError("**********SE DETERMINA QUE EL OFENDIDO YA SE ENCUENTRA REGISTRADO EN LA CARPETA JUDICIAL, ID DEL OFENDIDO: " . $rsOfendidosCarpetas[0]->getIdOfendidoCarpeta());
                                        $ofendidosDto = new OfendidoscarpetasDTO();
                                        $ofendidosDto->setIdOfendidoCarpeta($rsOfendidosCarpetas[0]->getIdOfendidoCarpeta());
                                        $ofendidosDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidosDto, "", $this->proveedor);
                                        //$ofendidosDto[0] = $rsOfendidosCarpetas[0];
                                        $ofendidosDto = $ofendidosDto[0];
                                    }
                                }
                            } else {
                                $msg[] = array("Error la refencia base no tiene ofendidos para copiar a la carpeta");
                                $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO CUENTA CON OFENDIDOS PARA COPIAR A LA CARPETA");
                                $error = true;
                            }

                            /*
                             * Terminamos de coapira los ofendidos de la carpeta judicial
                             * 
                             */
                            $logger->w_onError("**********SE COPIAN LOS DELITOS EXISTENTES EN LA RELACION IMPOFEDEL CARPETAS");
                            /*
                             * comenzamos a copiar los delitos de la carpeta judicial
                             */
                            $delitoscarpetasDto = new DelitoscarpetasDTO();
                            $delitoscarpetasDto->setIdDelitoCarpeta($impofedel->getIdDelitoCarpeta());
                            //$delitoscarpetasDto->setActivo("S");
                            $delitoscarpetasDao = new DelitoscarpetasDAO();
                            $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
                            if ($delitoscarpetasDto != "") {
                                for ($index = 0; $index < count($delitoscarpetasDto); $index++) {
                                    $delitosDto = new DelitoscarpetasDTO();
                                    $delitosDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                                    $delitosDto->setCveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                    $delitosDto->setActivo("S");
                                    $rsDelito = $delitoscarpetasDao->selectDelitoscarpetas($delitosDto, "", $this->proveedor);
                                    if ($rsDelito == "") {
                                        $delitosDto = $delitoscarpetasDao->insertDelitoscarpetas($delitosDto, $this->proveedor);
                                        if ($delitosDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar el delito a la carpeta judicial");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DELITO A LA CARPETA JUDICIAL");
                                            $error = true;
                                        } else {
                                            $delitosDto = $delitosDto[0];
                                            $delitosCarpetas[] = array("idDelitoCarpeta" => $delitosDto->getIdDelitoCarpeta());
                                            $logger->w_onError("**********ID DEL DELITO INSERTADO: " . $delitosDto->getIdDelitoCarpeta());
                                        }
                                    } else {
                                        $delitosDto = $rsDelito[0];
                                        $logger->w_onError("**********EL DELITO YA ESTA REGISTRADO EN LA BASE DE DATOS: " . $delitosDto->getIdDelitoCarpeta());
                                    }
                                }
                            } else {
                                $msg[] = array("La referencia no cuenta con delitos definidos para copiar a la carpeta");
                                $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DELITOS PARA COPIAR A LA CARPETA JUDICIAL");
                                $error = true;
                            }

                            /*
                             * Copiar la relacion impofedel
                             */
                            $logger->w_onError("**********COPIAR LA RELACION IMPOFEDEL CARPETAS");
                            $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
                            //$impofedelcarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                            $impofedelcarpetasDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                            $impofedelcarpetasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                            $impofedelcarpetasDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                            $impofedelcarpetasDto->setIdDelitoCarpeta($delitosDto->getIdDelitoCarpeta());
                            $impofedelcarpetasDto->setActivo("S");
                            $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                            $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $this->proveedor);

                            if ($impofedelcarpetasDto == "") {
                                $index = 0;
                                $impofedelDto = new ImpofedelcarpetasDTO();
                                $impofedelDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                                $impofedelDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                $impofedelDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                $impofedelDto->setIdDelitoCarpeta($delitosDto->getIdDelitoCarpeta());
                                $impofedelDto->setCveModalidad($impofedel->getCveModalidad());
                                $impofedelDto->setCveComision($impofedel->getCveComision());
                                $impofedelDto->setCveConcurso($impofedel->getCveConcurso());
                                $impofedelDto->setCveClasificacionDelitoOrden($impofedel->getCveClasificacionDelitoOrden());
                                $impofedelDto->setCveElementoComision($impofedel->getCveElementoComision());
                                $impofedelDto->setCveClasificacionDelito($impofedel->getCveClasificacionDelito());
                                $impofedelDto->setCveMunicipio($impofedel->getCveMunicipio());
                                $impofedelDto->setCveEntidad($impofedel->getCveEntidad());
                                $impofedelDto->setCveFormaAccion($impofedel->getCveFormaAccion());
                                $impofedelDto->setCveConsumacion($impofedel->getCveConsumacion());
                                $impofedelDto->setCveGradoParticipacion($impofedel->getCveGradoParticipacion());
                                $impofedelDto->setCveRelacionImpOfe($impofedel->getCveRelacionImpOfe());
                                $impofedelDto->setCveTerminacion($impofedel->getCveTerminacion());
                                $impofedelDto->setActivo("S");
                                $impofedelDto->setFechaDelito($impofedel->getFechaDelito());
                                $impofedelDto->setDireccion($impofedel->getDireccion());
                                $impofedelDto->setColonia($impofedel->getColonia());
                                $impofedelDto->setNumInterior($impofedel->getNumInterior());
                                $impofedelDto->setNumExterior($impofedel->getNumExterior());
                                $impofedelDto->setCp($impofedel->getCp());

                                $impofedelDto = $impofedelcarpetasDao->insertImpofedelcarpetas($impofedelDto, $this->proveedor);

                                if ($impofedelDto == "") {
                                    $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA RELACION DEL IMPUTADO, DELITO Y OFENDIDO");
                                    $error = true;
                                } else {
                                    $error = false;
                                    $logger->w_onError("**********ID IMPOFEDEL CARPETAS: " . $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                    $impOfeDelRelCarpetas[] = array("idImpOfeDelCarpeta" => $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                }
//                                                    }

                                /*
                                 * Copiar datos de trata de personas
                                 */
                                $logger->w_onError("**********COPIAR DATOS DE TRATA DE PERSONAS");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                                $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $trataspersonascarpetasDto->setActivo("S");

                                $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                                $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $this->proveedor);

                                if ($trataspersonascarpetasDto != "") {
                                    for ($x = 0; $x < count($trataspersonascarpetasDto); $x++) {
                                        $trataspersonasDto = new TrataspersonascarpetasDTO();
                                        $trataspersonasDto->setCveEstadoDestino($trataspersonascarpetasDto[$x]->getCveEstadoDestino());
                                        $trataspersonasDto->setCveMunicipioDestino($trataspersonascarpetasDto[$x]->getCveMunicipioDestino());
                                        $trataspersonasDto->setCvePaisDestino($trataspersonascarpetasDto[$x]->getCvePaisDestino());
                                        $trataspersonasDto->setEstadoDestino($trataspersonascarpetasDto[$x]->getEstadoDestino());
                                        $trataspersonasDto->setMunicipioDestino($trataspersonascarpetasDto[$x]->getMunicipioDestino());
                                        $trataspersonasDto->setCveEstadoOrigen($trataspersonascarpetasDto[$x]->getCveEstadoOrigen());
                                        $trataspersonasDto->setCveMunicipioOrigen($trataspersonascarpetasDto[$x]->getCveMunicipioOrigen());
                                        $trataspersonasDto->setCvePaisOrigen($trataspersonascarpetasDto[$x]->getCvePaisOrigen());
                                        $trataspersonasDto->setEstadoOrigen($trataspersonascarpetasDto[$x]->getEstadoOrigen());
                                        $trataspersonasDto->setMunicipioOrigen($trataspersonascarpetasDto[$x]->getMunicipioOrigen());
                                        $trataspersonasDto->setCveTipoTrata($trataspersonascarpetasDto[$x]->getCveTipoTrata());
                                        $trataspersonasDto->setCveTrasportacion($trataspersonascarpetasDto[$x]->getCveTrasportacion());
                                        $trataspersonasDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $trataspersonasDto->setActivo("S");

                                        $trataspersonasDto = $trataspersonascarpetasDao->insertTrataspersonascarpetas($trataspersonasDto, $this->proveedor);
                                        if ($trataspersonasDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar las tratas de personas a la carpeta");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE TRATA DE PERSONAS");
                                            $error = true;
                                        } else {
                                            $logger->w_onError("**********ID DE TRATA DE PERSONAS: " . $trataspersonasDto[0]->getIdTrataPersonaCarpeta());
                                            $error = false;
                                            /*
                                             * Borrar logicamente el registro de trata de personas origen
                                             */
                                            //                                        $trataPersonasTmp = new TrataspersonascarpetasDTO();
                                            //                                        $trataPersonasTmp->setIdTrataPersonaCarpeta($trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
                                            //                                        $trataPersonasTmp->setActivo("N");
                                            //                                        $trataPersonasTmp = $trataspersonascarpetasDao->updateTrataspersonascarpetas($trataPersonasTmp, $this->proveedor);
                                            //                                        if ($trataPersonasTmp != "") {
                                            //                                            $error = false;
                                            //                                            $logger->w_onError("**********ID DE TRATA DE PERSONAS BORRADO LOGICAMENTE: " . $trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
                                            //                                        } else {
                                            //                                            $error = true;
                                            //                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE TRATA DE PERSONAS : " . $trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
                                            //                                        }
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE TRATA DE PERSONAS");
                                }
                                //}
                                /*
                                 * Copiar datos de violencia de genero
                                 */
                                $logger->w_onError("**********COPIAR LODS DATOS DE VIOLENCIA DE GENERO");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                                $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $violenciadegenerocarpetasDto->setActivo("S");

                                $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                                $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $this->proveedor);

                                if ($violenciadegenerocarpetasDto != "") {
                                    $logger->w_onError("**********SE ENCONTRARON DATOS DE VIOLENCIA DE GENERO EN LA CARPETA PADRE PARA EL IMPUTADO SELECCIONADO");
                                    for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x++) {
                                        $violenciadegeneroDto = new ViolenciadegenerocarpetasDTO();
                                        $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                                        $violenciadegeneroDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $violenciadegeneroDto->setActivo("S");

                                        $violenciadegeneroDto = $violenciadegenerocarpetasDao->insertViolenciadegenerocarpetas($violenciadegeneroDto, $this->proveedor);

                                        if ($violenciadegeneroDto != "") {
                                            $logger->w_onError("**********SE INSERTA EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                            $error = false;

                                            /*
                                             * Copiar efectos del delito
                                             */
                                            $logger->w_onError("**********COPIAR LOS EFECTOS DEL DELITO");
                                            //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                            $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                                            $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                            $efectosofendidoscarpetasDto->setIdReferencia($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $efectosofendidoscarpetasDto->setActivo("S");
                                            $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                                            $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $this->proveedor);

                                            if ($efectosofendidoscarpetasDto != "") {
                                                for ($e = 0; $e < count($efectosofendidoscarpetasDto); $e++) {
                                                    $efectosofendidosDto = new EfectosofendidoscarpetasDTO();
                                                    $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$e]->getCveDetalleEfecto());
                                                    $efectosofendidosDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                                    $efectosofendidosDto->setIdReferencia($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $efectosofendidosDto->setOrigen($efectosofendidoscarpetasDto[$e]->getOrigen());
                                                    $efectosofendidosDto->setactivo("S");

                                                    $efectosofendidosDto = $efectosofendidoscarpetasDao->insertEfectosofendidoscarpetas($efectosofendidosDto, $this->proveedor);
                                                    if ($efectosofendidosDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los efectos de la victima a la carpeta");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS EFECTOS DE LA VICTIMA");
                                                        $error = true;
                                                    } else {
                                                        $logger->w_onError("**********ID DEL EFECTO OFENDIDO CARPETA INSERTADO : " . $efectosofendidosDto[0]->getIdEfectoOfendidoCarpeta());
                                                        $error = true;
                                                        /*
                                                         * Borrar logicamente efectosofendidoscarpetas
                                                         */
                                                        //                                                    $efectoOfendidoTmp = new EfectosofendidoscarpetasDTO();
                                                        //                                                    $efectoOfendidoTmp->setIdEfectoOfendidoCarpeta($efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
                                                        //                                                    $efectoOfendidoTmp->setActivo("N");
                                                        //                                                    $efectoOfendidoTmp = $efectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($efectoOfendidoTmp, $this->proveedor);
                                                        //                                                    if ($efectoOfendidoTmp != "") {
                                                        //                                                        $error = false;
                                                        //                                                        $logger->w_onError("**********ID DEL EFECTO DE LA VICTIMA BORRADO LOGICAMENTE: " . $efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
                                                        //                                                    } else {
                                                        //                                                        $error = true;
                                                        //                                                        $logger->w_onError("**********OCURRIO UN ERRROR AL BORRAR LOGICAMENTE EL EFECTO DE LA VICTIMA : " . $efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
                                                        //                                                    }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN EFECTOS DE LA VICTIMA");
                                            }

                                            $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                            $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                                            $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                            $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $this->proveedor);

                                            if ($violenciahomicidiosdolososcarpetasDto != "") {
                                                for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y++) {
                                                    $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                                    $violenciahomicidiosdolososDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto[$y]->getCveHomicidioDoloso());
                                                    $violenciahomicidiosdolososDto->setActivo("S");

                                                    $violenciahomicidiosdolososDto = $violenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososDto, $this->proveedor);
                                                    if ($violenciahomicidiosdolososDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero homicidios dolosos a la solicitud");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososDto[0]->getIdViolenciaHomicidioDolosoCarpeta());
                                                        /*
                                                         * Eliminar el registro origen de violencia de genero homicidios dolosos
                                                         */
                                                        //                                                    $violenciaHomicidioDolosoTmp = new ViolenciahomicidiosdolososcarpetasDTO();
                                                        //                                                    $violenciaHomicidioDolosoTmp->setIdViolenciaHomicidioDolosoCarpeta($violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
                                                        //                                                    $violenciaHomicidioDolosoTmp->setActivo("N");
                                                        //                                                    $violenciaHomicidioDolosoTmp = $violenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($violenciaHomicidioDolosoTmp, $this->proveedor);
                                                        //                                                    if ($violenciaHomicidioDolosoTmp != "") {
                                                        //                                                        $error = false;
                                                        //                                                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
                                                        //                                                    } else {
                                                        //                                                        $error = true;
                                                        //                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
                                                        //                                                    }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS");
                                            }

                                            $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                            $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $violenciafactoressocialescarpetasDto->setActivo("S");

                                            $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                            $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                                            if ($violenciafactoressocialescarpetasDto != "") {
                                                for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y++) {
                                                    $violenciafactoressocialesDto = new ViolenciafactoressocialescarpetasDTO();
                                                    $violenciafactoressocialesDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciafactoressocialesDto->setActivo("S");
                                                    $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());

                                                    $violenciafactoressocialesDto = $violenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($violenciafactoressocialesDto, $this->proveedor);
                                                    if ($violenciafactoressocialesDto != "") {
                                                        $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialesDto[0]->getIdViolenciaFactorSocialCarpeta());
                                                        $error = false;
                                                        /*
                                                         * Borrar logicamente el registro origen de violencia factores sociales
                                                         */
                                                        //                                                    $violenciaFactorSocialTmp = new ViolenciafactoressocialescarpetasDTO();
                                                        //                                                    $violenciaFactorSocialTmp->setIdViolenciaFactorSocialCarpeta($violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
                                                        //                                                    $violenciaFactorSocialTmp->setActivo("N");
                                                        //                                                    $violenciaFactorSocialTmp = $violenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($violenciaFactorSocialTmp, $this->proveedor);
                                                        //                                                    if ($violenciaFactorSocialTmp != "") {
                                                        //                                                        $error = false;
                                                        //                                                        $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
                                                        //                                                    } else {
                                                        //                                                        $error = true;
                                                        //                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
                                                        //                                                    }
                                                    } else {
                                                        $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero factor social a la carpeta judicial");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS REGISTROS DE VIOLENCIA DE GENERO FACTOR SOCIAL A LA CARPETA JUDICIAL");
                                                        $error = true;
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO FACTOR SOCIAL");
                                            }
                                            /*
                                             * Eliminar el registro origen de violencia de genero
                                             */
                                            //                                        $violenciaDeGeneroTmp = new ViolenciadegenerocarpetasDTO();
                                            //                                        $violenciaDeGeneroTmp->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            //                                        $violenciaDeGeneroTmp->setActivo("N");
                                            //                                        $violenciaDeGeneroTmp = $violenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($violenciaDeGeneroTmp, $this->proveedor);
                                            //                                        if ($violenciaDeGeneroTmp != "") {
                                            //                                            $error = false;
                                            //                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            //                                        } else {
                                            //                                            $error = true;
                                            //                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            //                                        }
                                        } else {
                                            $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la carpeta");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                            $error = true;
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                }
                                //}

                                /*
                                 * Copiar hostigamiento y acoso sexual
                                 */
                                $logger->w_onError("**********COPIAR DATOS DE HOSTIGAMIENTO Y ACOSOS SEXUAL");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $sexualescarpetasDto = new SexualescarpetasDTO();
                                $sexualescarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $sexualescarpetasDto->setActivo("S");

                                $sexualescarpetasDao = new SexualescarpetasDAO();
                                $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $this->proveedor);

                                if ($sexualescarpetasDto != "") {
                                    $error = false;
                                    for ($x = 0; $x < count($sexualescarpetasDto); $x++) {
                                        $sexualesDto = new SexualescarpetasDTO();
                                        $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                                        $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                                        $sexualesDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $sexualesDto->setActivo("S");

                                        $sexualesDto = $sexualescarpetasDao->insertSexualescarpetas($sexualesDto, $this->proveedor);
                                        if ($sexualesDto != "") {
                                            $logger->w_onError("**********SE INSERTO EL REGISTRO DE SEXUALES CARPETAS CON ID: " . $sexualesDto[0]->getIdSexualCarpeta());
                                            $error = false;
                                            //Sexuales conductas
                                            $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                            $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            $sexualesconductascarpetasDto->setActivo("S");
                                            $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                            $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $this->proveedor);

                                            if ($sexualesconductascarpetasDto != "") {
                                                for ($y = 0; $y < count($sexualesconductascarpetasDto); $y++) {
                                                    $sexualesconductasDto = new SexualesconductascarpetasDTO();
                                                    $sexualesconductasDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                    $sexualesconductasDto->setActivo("S");
                                                    $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());

                                                    $sexualesconductasDto = $sexualesconductascarpetasDao->insertSexualesconductascarpetas($sexualesconductasDto, $this->proveedor);
                                                    if ($sexualesconductasDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA CONDUCTA SEXUAL A LA CARPETA");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTA EL REGISTRO DE CONDUCTAS SEXUALES CARPETAS CON ID: " . $sexualesconductasDto[0]->getIdSexualConductaCarpeta());

                                                        $detallesSexualesConductasCarpetasDto = new DetallessexualesconductascarpetasDTO();
                                                        $detallesSexualesConductasCarpetasDao = new DetallessexualesconductascarpetasDAO();
                                                        $detallesSexualesConductasCarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                        $detallesSexualesConductasCarpetasDto->setActivo("S");
                                                        $detallesSexualesConductasCarpetasDto = $detallesSexualesConductasCarpetasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasCarpetasDto, "", $this->proveedor);
                                                        if ($detallesSexualesConductasCarpetasDto != "") {
                                                            for ($d = 0; $d < count($detallesSexualesConductasCarpetasDto); $d++) {
                                                                $detallesSexualesConductasDto = new DetallessexualesconductascarpetasDTO();
                                                                $detallesSexualesConductasDto->setCveDetalleConducta($detallesSexualesConductasCarpetasDto[$d]->getCveDetalleConducta());
                                                                $detallesSexualesConductasDto->setIdSexualConductaCarpeta($sexualesconductasDto[0]->getIdSexualConductaCarpeta());
                                                                $detallesSexualesConductasDto->setActivo("S");

                                                                $detallesSexualesConductasDto = $detallesSexualesConductasCarpetasDao->insertDetallessexualesconductascarpetas($detallesSexualesConductasDto, $this->proveedor);
                                                                if ($detallesSexualesConductasDto != "") {
                                                                    $logger->w_onError("**********SE INSERTA EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasDto[0]->getIdDetalleSexualConductaCarpeta());
                                                                    $error = false;
                                                                    /*
                                                                     * Borrar logicamente el registro origen de detalle conductas sexuales carpetas
                                                                     */
                                                                    //                                                                $detalleSexualConductaTmp = new DetallessexualesconductascarpetasDTO();
                                                                    //                                                                $detalleSexualConductaTmp->setIdDetalleSexualConductaCarpeta($detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
                                                                    //                                                                $detalleSexualConductaTmp->setActivo("N");
                                                                    //                                                                $detalleSexualConductaTmp = $detallesSexualesConductasCarpetasDao->updateDetallessexualesconductascarpetas($detalleSexualConductaTmp, $this->proveedor);
                                                                    //                                                                if ($detalleSexualConductaTmp != "") {
                                                                    //                                                                    $error = false;
                                                                    //                                                                    $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
                                                                    //                                                                } else {
                                                                    //                                                                    $error = true;
                                                                    //                                                                    $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
                                                                    //                                                                }
                                                                } else {
                                                                    $msg[] = array("Ocurrio un error al copiar el detalle de conductas sexuales a la carpeta judicial");
                                                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DETALLE DE CONDUCTA SEXUAL A LA CARPETA");
                                                                    $error = true;
                                                                }
                                                            }
                                                        } else {
                                                            //No hay datos de detalles sexuales conductas
                                                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN REGISTROS DE DETALLE DE CONDUCTA SEXUAL");
                                                        }
                                                        /*
                                                         * Borrar el registro origen de sexuales conductas carpetas
                                                         */
                                                        //                                                    $sexualesConductasTmp = new SexualesconductascarpetasDTO();
                                                        //                                                    $sexualesConductasTmp->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                        //                                                    $sexualesConductasTmp->setActivo("N");
                                                        //                                                    $sexualesConductasTmp = $sexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesConductasTmp, $this->proveedor);
                                                        //                                                    if ($sexualesConductasTmp != "") {
                                                        //                                                        $error = false;
                                                        //                                                        $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO SEXUALES CONDUCTAS CARPETAS CON ID : " . $sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                        //                                                    } else {
                                                        //                                                        $error = true;
                                                        //                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO SEXUALES CONDUCTAS CARPETAS CON ID : " . $sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                        //                                                    }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE CONDUCTAS SEXUALES CARPETAS");
                                            }

                                            //Los testigos sexuales
                                            $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                            $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            $testigossexualescarpetasDto->setActivo("S");
                                            $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                            $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $this->proveedor);

                                            if ($testigossexualescarpetasDto != "") {
                                                for ($y = 0; $y < count($testigossexualescarpetasDto); $y++) {
                                                    $testigossexualesDto = new TestigossexualescarpetasDTO();
                                                    $testigossexualesDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                    $testigossexualesDto->setPaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                                    $testigossexualesDto->setMaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                                    $testigossexualesDto->setNombre($testigossexualescarpetasDto[$y]->getNombre());
                                                    $testigossexualesDto->setCveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                                    $testigossexualesDto->setActivo("S");

                                                    $testigossexualesDto = $testigossexualescarpetasDao->insertTestigossexualescarpetas($testigossexualesDto, $this->proveedor);

                                                    if ($testigossexualesDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los datos del testigo de acoso sexual");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL TESTIGO SEXUAL");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTA EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualesDto[0]->getIdTestigoSexualCarpeta());
                                                        /*
                                                         * Borrado logico de testigos sexuales carpetas
                                                         */
                                                        //                                                    $testigoSexualTmp = new TestigossexualescarpetasDTO();
                                                        //                                                    $testigoSexualTmp->setIdTestigoSexualCarpeta($testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
                                                        //                                                    $testigoSexualTmp->setActivo("N");
                                                        //                                                    $testigoSexualTmp = $testigossexualescarpetasDao->updateTestigossexualescarpetas($testigoSexualTmp, $this->proveedor);
                                                        //                                                    if ($testigoSexualTmp != "") {
                                                        //                                                        $error = false;
                                                        //                                                        $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
                                                        //                                                    } else {
                                                        //                                                        $error = true;
                                                        //                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
                                                        //                                                    }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE TESTIGOS SEXUALES");
                                            }
                                            /*
                                             * Borrar logicamente el registro origen de sexuales carpetas
                                             */
                                            //                                        $sexualesTmp = new SexualescarpetasDTO();
                                            //                                        $sexualesTmp->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            //                                        $sexualesTmp->setActivo("N");
                                            //                                        $sexualesTmp = $sexualescarpetasDao->updateSexualescarpetas($sexualesTmp, $this->proveedor);
                                            //                                        if ($sexualesTmp != "") {
                                            //                                            $error = false;
                                            //                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            //                                        } else {
                                            //                                            $error = true;
                                            //                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            //                                        }
                                        } else {
                                            $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL ACOSO Y HOSTIGAMIENTO SEXUAL");
                                            $error = true;
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********NO SE ENCONTRARON REGISTROS DE SEXUALES CARPETAS");
                                }
                            } else {
                                $msg[] = array("La referencia con relacion de delitos, imputados y ofendidos ya est� registrada");
                                $error = true;
                                $logger->w_onError("**********YA EXISTE LA RELACION IMPOFEDEL CARPETAS, ID: " . $impofedelcarpetasDto[0]->getIdImpOfeDelCarpeta());
                                $logger->w_onError("**********ID IMPUTADO: " . $impofedelcarpetasDto[0]->getIdImputadoCarpeta());
                                $logger->w_onError("**********ID OFENDIDO: " . $impofedelcarpetasDto[0]->getIdOfendidoCarpeta());
                                $logger->w_onError("**********ID DELITO: " . $impofedelcarpetasDto[0]->getIdDelitoCarpeta());
                                $impofedelDto[0] = $impofedelcarpetasDto[0];
                            }


                            //}
                            //}
                        }
                    } else {
                        $msg[] = array("Error la refencia base no tiene relacion impofedel carpetas");
                        $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO TIENE RELACION IMPOFEDEL CARPETAS");
                        $error = true;
                    }
                    if ($error) {
                        $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE LA COPIA DE DATOS, TERMINA EL PROCESO");
                        break;
                    }
                }
                /*
                 * Actualizar el numero de imputados, ofendidos y delitos de la carpeta judicial destino
                 */
                $logger->w_onError("**********SE PROCEDE A ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS, DELITOS Y PONDERACION DE LA CARPETA JUDICIAL CON ID: " . $carpetasDto[0]->getIdCarpetaJudicial());
                $imputados = new ImputadoscarpetasDTO();
                $imputadosDao = new ImputadoscarpetasDAO();
                $imputados->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $imputados->setActivo("S");
                //$imputados->setTieneSobreseimiento("N");
                $imputados = $imputadosDao->selectImputadoscarpetas($imputados, "", $this->proveedor);
                if ($imputados != "") {
                    $numImputados = count($imputados);
                } else {
                    $numImputados = 0;
                }
                $logger->w_onError("**********NUMERO DE IMPUTADOS: " . $numImputados);
                $ofendidos = new OfendidoscarpetasDTO();
                $ofendidosDao = new OfendidoscarpetasDAO();
                $ofendidos->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $ofendidos->setActivo("S");
                $ofendidos = $ofendidosDao->selectOfendidoscarpetas($ofendidos, "", $this->proveedor);
                if ($ofendidos != "") {
                    $numOfendidos = count($ofendidos);
                } else {
                    $numOfendidos = 0;
                }
                $logger->w_onError("**********NUMERO DE OFENDIDOS: " . $numOfendidos);
                $delitos = new DelitoscarpetasDTO();
                $delitosDao = new DelitoscarpetasDAO();
                $delitos->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $delitos->setActivo("S");
                $delitos = $delitosDao->selectDelitoscarpetas($delitos, "", $this->proveedor);
                if ($delitos != "") {
                    $numDelitos = count($delitos);
                } else {
                    $numDelitos = 0;
                }
                $pesoDelito = 0;
                $logger->w_onError("**********NUMERO DE DELITOS: " . $numDelitos);
                //if( $numImputados > 0 && $numDelitos > 0 && $numImputados > 0 ) {
                /*
                 * Obtener el peso de los delitos correspondientes a la carpeta judicial
                 */
                $impofedel = new ImpofedelcarpetasDTO();
                $impofedelCarpetaDao = new ImpofedelcarpetasDAO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();
                $delitoDao = new DelitosDAO();
                $impofedel->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $impofedel->setActivo("S");
                $impofedel = $impofedelCarpetaDao->selectImpofedelcarpetas($impofedel, "", $this->proveedor);
                if ($impofedel != "") {

                    for ($x = 0; $x < count($impofedel); $x++) {
                        /*
                         * Obtener el peso de cada delito
                         */
                        $delitosCarpetasDto = new DelitoscarpetasDTO();
                        $delitosCarpetasDto->setIdDelitoCarpeta($impofedel[$x]->getIdDelitoCarpeta());
                        $delitosCarpetasDto->setActivo("S");
                        $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                        if ($delitosCarpetasDto != "") {
                            for ($d = 0; $d < count($delitosCarpetasDto); $d++) {
                                $delitosDto = new DelitosDTO();
                                $delitosDto->setCveDelito($delitosCarpetasDto[$d]->getCveDelito());
                                $delitosDto->setActivo("S");
                                $delitosDto = $delitoDao->selectDelitos($delitosDto, "", $this->proveedor);
                                if ($delitosDto != "") {
                                    for ($y = 0; $y < count($delitosDto); $y++) {
                                        $pesoDelito += $delitosDto[$y]->getPeso();
                                    }
                                }
                            }
                        }
                    }
                } else {
                    $pesoDelito = 0;
                }
                $ponderacion = $pesoDelito + $numImputados + $numDelitos;

                $carpetasTmp = new CarpetasjudicialesDTO();
                $carpetasDao = new CarpetasjudicialesDAO();
                $carpetasTmp->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $carpetasTmp->setNumDelitos($numDelitos);
                $carpetasTmp->setNumImputados($numImputados);
                $carpetasTmp->setNumOfendidos($numOfendidos);
                $carpetasTmp->setPonderacion($ponderacion);
                $carpetasTmp = $carpetasDao->updateCarpetasjudiciales($carpetasTmp, $this->proveedor);
                if ($carpetasTmp != "") {
                    $error = false;
                    $logger->w_onError("**********SE MODIFICA EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL : " . $carpetasTmp[0]->getIdCarpetaJudicial());
                    $logger->w_onError("**********NUM IMPUTADOS : " . $carpetasTmp[0]->getNumImputados());
                    $logger->w_onError("**********NUM OFENDIDOS : " . $carpetasTmp[0]->getNumOfendidos());
                    $logger->w_onError("**********NUM DELITOS : " . $carpetasTmp[0]->getNumDelitos());
                    $logger->w_onError("**********PONDERACION : " . $carpetasTmp[0]->getPonderacion());
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al modificar el numero de imputados, ofendidos y delitos de la carpeta judicial");
                    $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL ");
                }
                //}
                $imputadosOrigenDto = new ImputadoscarpetasDTO();
                $imputadosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $imputadosOrigenDto->setActivo("S");
                $imputadosOrigenDto = $imputadosDao->selectImputadoscarpetas($imputadosOrigenDto, "", $this->proveedor);
                if ($imputadosOrigenDto != "") {
                    $numeroImputadosOrigen = count($imputadosOrigenDto);
                } else {
                    $numeroImputadosOrigen = 0;
                }
                $ofendidosOrigenDto = new OfendidoscarpetasDTO();
                $ofendidosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $ofendidosOrigenDto->setActivo("S");
                $ofendidosOrigenDto = $ofendidosDao->selectOfendidoscarpetas($ofendidosOrigenDto, "", $this->proveedor);
                if ($ofendidosOrigenDto != "") {
                    $numeroOfendidosOrigen = count($ofendidosOrigenDto);
                } else {
                    $numeroOfendidosOrigen = 0;
                }
                $delitosOrigenDto = new DelitoscarpetasDTO();
                $delitosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $delitosOrigenDto->setActivo("S");
                $delitosOrigenDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosOrigenDto, "", $this->proveedor);
                if ($delitosOrigenDto != "") {
                    $numeroDelitosOrigen = count($delitosOrigenDto);
                } else {
                    $numeroDelitosOrigen = 0;
                }
//                $logger->w_onError("**********ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA ORIGEN: " . $carpetasDto[0]->getIdCarpetaJudicial());
//                $logger->w_onError("**********IMPUTADOS: " . $numeroImputadosOrigen);
//                $logger->w_onError("**********OFENDIDOS: " . $numeroOfendidosOrigen);
//                $logger->w_onError("**********DELITOS: " . $numeroDelitosOrigen);
//                $carpetaOrigenDto = new CarpetasjudicialesDTO();
//                $carpetaOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
//                $carpetaOrigenDto->setNumImputados($numeroImputadosOrigen);
//                $carpetaOrigenDto->setNumOfendidos($numeroOfendidosOrigen);
//                $carpetaOrigenDto->setNumDelitos($numeroDelitosOrigen);
//                $carpetaOrigenDto = $carpetasDao->updateCarpetasjudiciales($carpetaOrigenDto, $this->proveedor);
//                if ($carpetaOrigenDto != "") {
//                    $error = false;
//                    $logger->w_onError("**********SE MODIFICA EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL : " . $carpetaOrigenDto[0]->getIdCarpetaJudicial());
//                    $logger->w_onError("**********NUM IMPUTADOS : " . $carpetaOrigenDto[0]->getNumImputados());
//                    $logger->w_onError("**********NUM OFENDIDOS : " . $carpetaOrigenDto[0]->getNumOfendidos());
//                    $logger->w_onError("**********NUM DELITOS : " . $carpetaOrigenDto[0]->getNumDelitos());
//                } else {
//                    $error = true;
//                    $msg[] = array("Ocurrio un error al modificar el numero de imputados, ofendidos y delitos de la carpeta judicial : " . $carpetasDto[0]->getIdCarpetaJudicial());
//                    $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL: " . $carpetasDto[0]->getIdCarpetaJudicial());
//                } 
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al aperturar la carpeta judicial");
                $logger->w_onError("**********OCURRIO UN ERROR AL APERTURAR LA CARPETA JUDICIAL : ");
            }
            if (!$error) {
                if ($proveedor == null) {
                    $this->proveedor->execute("COMMIT");
                }
                $logger->w_onError("**********LA COPIA DE DATOS TERMINA CORRECTAMENTE");
                $resultado = true;
            } else {
                if ($proveedor == null) {
                    $this->proveedor->execute("ROLLBACK");
                }
                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS");
                $resultado = false;
            }
        } else {
            $error = true;
            $msg[] = array("No se encontro la carpeta destino solicitada");
            $logger->w_onError("**********NO SE ENCONTRO LA CARPETA JUDICIAL SOLICITADA");
            $resultado = false;
        }
        //Termina el proceso
        return $resultado;
    }

    /*
     * Se radicara una carpeta judicial con la etapa procesal solicitada
     * por el usuario para el caso de Etapas Procesales Control y Juicio
     */

    public function radicarCarpeta($carpetasJudicialesDto, $proveedor = null) {
        $logger = new Logger("/../../logs/", "CarpetasJudiciales");
        $logger->w_onError("**********COMIENZA EL PROGRAMA DE RADICACION DE CARPETAS JUDICIALES**********");
        $error = false;
        $result = "";
        $resultado = false;
        $msg = array();
        $fechaActual = "";
        $anioActual = "";
        $imputadosCarpetas = array();
        $delitosCarpetas = array();
        $ofendidosCarpetas = array();
        $idCarpetaJudicial = 0;
        $numImputados = 0;
        $numOfendidos = 0;
        $numDelitos = 0;
        $numero = 0;
        $anio = 0;
        $indexImpofedel = 0;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $logger->w_onError("**********OBTENER LA FECHA ACTUAL DEL SERVIDOR MYSQL");

        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['Anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }

        $logger->w_onError("**********FECHA ACTUAL: " . $fechaActual);
        /*
         * Inicia la transaccion
         */
        $this->proveedor->execute("BEGIN");
        $logger->w_onError("**********SE CREA UNA CARPETAS JUDICIAL CON LA ETAPA PROCESAL SOLICITADA");
        $carpetasDto = new CarpetasjudicialesDTO();
        $carpetasJudciialesDao = new CarpetasjudicialesDAO();
        $etapaProcesal = $carpetasJudicialesDto->getCveEtapaProcesal();
        $cveUsuario = $_SESSION["cveUsuarioSistema"];
        $cveEstatusCarpeta = 1;
        $cveConclusion = 0;
//        $numero = $carpetasDto[0]->getNumero();
//        $numero += 1;
        $cveJuzgado = 0;
        $tipoJuzgado = 0;
        $cveTipoCarpeta = 0;
        switch ($etapaProcesal) {
            case 1: $cveTipoCarpeta = 1;
                $tipoJuzgado = 1;
                break;
            case 2: $cveTipoCarpeta = 2;
                $tipoJuzgado = 1;
                break;
            case 3: $cveTipoCarpeta = 3;
                $tipoJuzgado = 2;
                break;
            case 4: $cveTipoCarpeta = 5;
                $tipoJuzgado = 3;
                break;
            default: $cveTipoCarpeta = 1;
                $tipoJuzgado = 1;
                break;
        }

        $carpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
        $carpetasDto->setActivo("S");
        $carpetasDto = $carpetasJudciialesDao->selectCarpetasjudiciales($carpetasDto, "", $this->proveedor);
        if ($carpetasDto != "") {
            $logger->w_onError("**********ID CARPETA JUDICIAL ORIGEN: " . $carpetasDto[0]->getIdCarpetaJudicial());
            $logger->w_onError("**********NUMERO: " . $carpetasDto[0]->getNumero());
            $logger->w_onError("**********ANIO: " . $carpetasDto[0]->getAnio());
            $logger->w_onError("**********CARPETA INV: " . $carpetasDto[0]->getCarpetaInv());
            $logger->w_onError("**********NUC: " . $carpetasDto[0]->getNuc());
            $logger->w_onError("**********CVE JUZGADO: " . $carpetasDto[0]->getCveJuzgado());
            $logger->w_onError("**********CVE TIPO CARPETA: " . $carpetasDto[0]->getCveTipoCarpeta());
            $logger->w_onError("**********CVE ETAPA PROCESAL: " . $carpetasDto[0]->getCveEtapaProcesal());
            $logger->w_onError("**********FECHA DE RADICACION: " . $carpetasDto[0]->getFechaRadicacion());

            /*
             * Obtener la clave del juzgado cuando se modifique la etapa procesal
             */
            $logger->w_onError("**********OBTENER EL JUZGADO PARA LA NUEVA CARPETA JUDICIAL");
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto->setCveJuzgado($carpetasDto[0]->getCveJuzgado());
            $juzgadosDto->setActivo("S");
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
            if ($juzgadosDto != "") {
                $error = false;
                $juzgadoTmp = new JuzgadosDTO();
                $juzgadoTmp->setCveDistrito($juzgadosDto[0]->getCveDistrito());
                $juzgadoTmp->setCveTipojuzgado($tipoJuzgado);
                $juzgadoTmp->setActivo("S");
                $juzgadoTmp = $juzgadosDao->selectJuzgados($juzgadoTmp, "", $this->proveedor);
                if ($juzgadoTmp != "") {
                    $errro = false;
                    $logger->w_onError("**********CLAVE DEL JUZGADO PARA LA NUEVA CARPETA JUDICIAL : " . $juzgadoTmp[0]->getCveJuzgado());
                    $cveJuzgado = $juzgadoTmp[0]->getCveJuzgado();
                } else {
                    $error = true;
                    $logger->w_onError("**********OCURRIO UN ERROR AL OBTENER LA CLAVE DEL JUZGADO PARA LA NUEVA CARPETA JUDICIAL");
                }
            } else {
                $error = true;
                $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DEL JUSZGADO");
            }
            /*
             * Obtener el numero y a�o para la nueva carpeta judicial
             */
            $logger->w_onError("**********OBTENER EL NUMERO DE CONTADOR Y A�O PARA LA NUEVA CARPETA JUDICIAL");
            $contadorCrl = new ContadoresController();
            $contadoresDto = new ContadoresDTO();
            $contadoresDto->setCveJuzgado($cveJuzgado);
            $contadoresDto->setCveTipoActuacion("");
            $contadoresDto->setAnio($anioActual);
            $contadoresDto->setCveTipoCarpeta($cveTipoCarpeta);
            $contadoresDto = $contadorCrl->getContador($contadoresDto, $this->proveedor);
            if ($contadoresDto != "") {
                $logger->w_onError("**********NUMERO DE CONTADOR: " . $contadoresDto[0]->getNumero());
                $logger->w_onError("**********A�O : " . $contadoresDto[0]->getAnio());
                $numero = $contadoresDto[0]->getNumero();
                $anio = $contadoresDto[0]->getAnio();
            } else {
                $error = true;
                $logger->w_onError("**********OCURRIO UN ERROR AL OBTENER EL NUMERO DE CONTADOR PARA EL JUZGADO: " . $cveJuzgado);
                $msg[] = array("Ocurrio un errro al ontener el numero de contador para el juzgado: " . $cveJuzgado);
            }

            $carpetaJudicial = new CarpetasjudicialesDTO();
            $carpetaJudicial->setCveEtapaProcesal($etapaProcesal);
            $carpetaJudicial->setCveConsignacion($carpetasDto[0]->getCveConsignacion());
            $carpetaJudicial->setCveTipoCarpeta($cveTipoCarpeta);
            $carpetaJudicial->setCveConsignacionA($carpetasDto[0]->getCveConsignacionA());
            $carpetaJudicial->setNumero($numero);
            $carpetaJudicial->setAnio($anio);
            $carpetaJudicial->setFechaRadicacion($fechaActual);
            $carpetaJudicial->setActivo("S");
            $carpetaJudicial->setCveJuzgado($cveJuzgado);
            $carpetaJudicial->setCarpetaInv($carpetasDto[0]->getCarpetaInv());
            $carpetaJudicial->setNuc($carpetasDto[0]->getNuc());
            $carpetaJudicial->setCveUsuario($cveUsuario);
            $carpetaJudicial->setObservaciones($carpetasDto[0]->getObservaciones());
            $carpetaJudicial->setNumImputados($carpetasDto[0]->getNumImputados());
            $carpetaJudicial->setNumOfendidos($carpetasDto[0]->getNumOfendidos());
            $carpetaJudicial->setNumDelitos($carpetasDto[0]->getNumDelitos());
            $carpetaJudicial->setCveEstatusCarpeta($cveEstatusCarpeta);
            $carpetaJudicial->setIncompetencia($carpetasDto[0]->getIncompetencia());
            $carpetaJudicial->setCveTipoIncompetencia($carpetasDto[0]->getCveTipoIncompetencia());
            $carpetaJudicial->setAcumulado($carpetasDto[0]->getAcumulado());
            $carpetaJudicial->setNumAcumulado($carpetasDto[0]->getNumAcumulado());
            $carpetaJudicial->setPonderacion($carpetasDto[0]->getPonderacion());

            $carpetaJudicial = $carpetasJudciialesDao->insertCarpetasjudiciales($carpetaJudicial, $this->proveedor);
            if ($carpetaJudicial != "") {
                $error = false;
                $idCarpetaJudicial = $carpetaJudicial[0]->getIdCarpetaJudicial();
                $logger->w_onError("**********SE REGISTRA UNA NUEVA CARPETA JUDICIAL CON ID: " . $carpetaJudicial[0]->getIdCarpetaJudicial());
                $logger->w_onError("**********NUMERO: " . $carpetaJudicial[0]->getNumero());
                $logger->w_onError("**********ANIO: " . $carpetaJudicial[0]->getAnio());
                $logger->w_onError("**********CARPETA INV: " . $carpetaJudicial[0]->getCarpetaInv());
                $logger->w_onError("**********NUC: " . $carpetaJudicial[0]->getNuc());
                $logger->w_onError("**********CVE JUZGADO: " . $carpetaJudicial[0]->getCveJuzgado());
                $logger->w_onError("**********CVE TIPO CARPETA: " . $carpetaJudicial[0]->getCveTipoCarpeta());
                $logger->w_onError("**********CVE ETAPA PROCESAL: " . $carpetaJudicial[0]->getCveEtapaProcesal());
                $logger->w_onError("**********FECHA DE RADICACION: " . $carpetaJudicial[0]->getFechaRadicacion());
                /*
                 * Crear un registro en la tabla antecedescarpetas
                 */
                $logger->w_onError("**********AGREGAR UN REGISTRO A LA TABLA ANTECEDESCARPETAS");
                $antecedesCarpetasDto = new AntecedescarpetasDTO();
                $antecedesCarpetasDao = new AntecedescarpetasDAO();
                $antecedesCarpetasDto->setIdCarpetaPadre($carpetasDto[0]->getIdCarpetaJudicial());
                $antecedesCarpetasDto->setIdCarpetaHija($carpetaJudicial[0]->getIdCarpetaJudicial());
                $antecedesCarpetasDto->setCveTipoCarpeta($carpetaJudicial[0]->getCveTipoCarpeta());

                $antecedesCarpetasDto->setActivo("S");
                $antecedesCarpetasDto = $antecedesCarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $this->proveedor);
                if ($antecedesCarpetasDto != "") {
                    $logger->w_onError("**********AGREGAR EL REGISTRO EN ANTECEDESCARPETAS CON ID: " . $antecedesCarpetasDto[0]->getIdAntecedeCarpeta());
                    $error = false;
                } else {
                    $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO EN LA TABLA ANTECEDESCARPETAS");
                    $msg[] = array("Ocurrio un error al insertar el registro en la tabla antecedescarpetas");
                    $error = true;
                }
                /*
                 * Se procede a copiar los datos de imputados que corresponden a la carpeta judicial origen
                 */
                $logger->w_onError("**********AGREGAR A LA CARPETA JUDICIAL LOS IMPUTADOS EN LA FASE SOLICITADA");
                $impofedelcarpetasAuxDto = new ImpofedelcarpetasDTO();
                $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $logger->w_onError("**********CONSULTAR DATOS DE LOS IMPUTADOS ACTIVOS DE LA CARPETA JUDICIAL");
                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                $imputadosCarpetasDao = new ImputadoscarpetasDAO();
                $imputadosCarpetasDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $imputadosCarpetasDto->setActivo("S");
                $imputadosCarpetasDto->setTieneSobreseimiento("N");
                $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
                /*
                 * Si se encontraron imputados activos en la carpeta judicial, copiar los datos hacia la nueva carpeta
                 */
                if ($imputadosCarpetasDto != "") {
                    foreach ($imputadosCarpetasDto as $imputado) {
                        $imputadoDto = new ImputadoscarpetasDTO();
                        $imputadoDto->setIdCarpetaJudicial($carpetaJudicial[0]->getIdCarpetaJudicial());
                        $imputadoDto->setActivo("S");
                        $imputadoDto->setDetenido($imputado->getDetenido());
                        $imputadoDto->setNombre($imputado->getNombre());
                        $imputadoDto->setPaterno($imputado->getPaterno());
                        $imputadoDto->setMaterno($imputado->getMaterno());
                        $imputadoDto->setRfc($imputado->getRfc());
                        $imputadoDto->setCurp($imputado->getCurp());
                        $imputadoDto->setCveTipoDetencion($imputado->getCveTipoDetencion());
                        $imputadoDto->setLegalDetencion($imputado->getLegalDetencion());
                        $imputadoDto->setCveGenero($imputado->getCveGenero());
                        $imputadoDto->setCveTipoReligion($imputado->getCveTipoReligion());
                        $imputadoDto->setAlias($imputado->getAlias());
                        $imputadoDto->setFechaDeclaracion($imputado->getFechaDeclaracion());
                        $imputadoDto->setCvePaisNacimiento($imputado->getCvePaisNacimiento());
                        $imputadoDto->setCveEstadoNacimiento($imputado->getCveEstadoNacimiento());
                        $imputadoDto->setCveMunicipioNacimiento($imputado->getCveMunicipioNacimiento());
                        $imputadoDto->setFechaNacimiento($imputado->getFechaNacimiento());
                        $imputadoDto->setEdad($imputado->getEdad());
                        $imputadoDto->setCveTipoPersona($imputado->getCveTipoPersona());
                        $imputadoDto->setNombreMoral($imputado->getNombreMoral());
                        $imputadoDto->setCveNivelInstruccion($imputado->getCveNivelInstruccion());
                        $imputadoDto->setCveEstadoCivil($imputado->getCveEstadoCivil());
                        $imputadoDto->setCveEspanol($imputado->getCveEspanol());
                        $imputadoDto->setCveAlfabetismo($imputado->getCveAlfabetismo());
                        $imputadoDto->setCveDialectoIndigena($imputado->getCveDialectoIndigena());
                        $imputadoDto->setCveTipoFamiliaLinguistica($imputado->getCveTipoFamiliaLinguistica());
                        $imputadoDto->setCveOcupacion($imputado->getCveOcupacion());
                        $imputadoDto->setCveInterprete($imputado->getCveInterprete());
                        $imputadoDto->setCveEstadoPsicofisico($imputado->getCveEstadoPsicofisico());
                        $imputadoDto->setFechaImputacion($imputado->getFechaImputacion());
                        $imputadoDto->setFechaControlDet($imputado->getFechaControlDet());
                        $imputadoDto->setFecTerminoCons($imputado->getFecTerminoCons());
                        $imputadoDto->setFecCierreInv($imputado->getFecCierreInv());
                        $imputadoDto->setEstadoNacimiento($imputado->getEstadoNacimiento());
                        $imputadoDto->setMunicipioNacimiento($imputado->getMunicipioNacimiento());
                        $imputadoDto->setRelacionMoral($imputado->getRelacionMoral());
                        $imputadoDto->setPersonaMoral($imputado->getPersonaMoral());
                        $imputadoDto->setCveCereso($imputado->getCveCereso());
                        $imputadoDto->setCveEtapaProcesal($carpetaJudicial[0]->getCveEtapaProcesal());
                        $imputadoDto->setCveTipoReincidencia($imputado->getCveTipoReincidencia());
                        $imputadoDto->setIngresoMensual($imputado->getIngresoMensual());
                        $imputadoDto->setCveGrupoEdnico($imputado->getCveGrupoEdnico());
                        $imputadoDto->setTieneSobreseimiento("N");
                        //$imputadoDto->setFechaSobreseimiento($imputado->getFechaSobreseimiento());

                        $imputadoDto = $imputadosCarpetasDao->insertImputadoscarpetas($imputadoDto, $this->proveedor);
                        if ($imputadoDto != "") {
                            $error = false;
                            $logger->w_onError("**********SE REGISTRO AL IMPUTADO CON ID: " . $imputadoDto[0]->getIdImputadoCarpeta());
                            $imputadosCarpetas[] = $imputadoDto[0]->getIdImputadoCarpeta();
                            /*
                             * Registrar las nacionalidades correspondientes al imputado
                             */
                            $logger->w_onError("**********AGREGAR A LA CARPETA JUDICIAL LA NACIONALIDAD DEL IMPUTADO");
                            $nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                            $nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $nacionalidadesimputadoscarpetasDto->setActivo("S");
                            $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                            $nacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto, "", $this->proveedor);

                            if ($nacionalidadesimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($nacionalidadesimputadoscarpetasDto); $x++) {
                                    $nacionalidadesDto = new NacionalidadesimputadoscarpetasDTO();
                                    $nacionalidadesDto->setcvePais($nacionalidadesimputadoscarpetasDto[$x]->getCvePais());
                                    $nacionalidadesDto->setactivo("S");
                                    $nacionalidadesDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadocarpeta());

                                    $nacionalidadesDto = $nacionalidadesimputadoscarpetasDao->insertNacionalidadesimputadoscarpetas($nacionalidadesDto, $this->proveedor);

                                    if ($nacionalidadesDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar las nacionalidades de los imputados");
                                        $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA NACIONALIDAD");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE REGISTRO LA NACIONALIDAD DEL IMPUTADO CON ID: " . $nacionalidadesDto[0]->getIdNacionalidadImputadoCarpeta());
                                        /*
                                         * Borrado logico de nacionalidad origen
                                         */
//                                        $logger->w_onError("BORRADO LOGICO DE LA NACIONALIDAD: " . $nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        $nacionalidadTmp = new NacionalidadesimputadoscarpetasDTO();
//                                        $nacionalidadTmp->setIdNacionalidadImputadoCarpeta($nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        $nacionalidadTmp->setActivo("S");
//                                        $nacionalidadTmp = $nacionalidadesimputadoscarpetasDao->updateNacionalidadesimputadoscarpetas($nacionalidadTmp, $this->proveedor);
//                                        if ($nacionalidadTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("SE BORRA LOGICAMENTE LA NACIONALIDAD: " . $nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("ERROR AL BORRAR LOGICAMENTE LA NACIONALIDAD: " . $nacionalidadesimputadoscarpetasDto[$x]->getIdNacionalidadImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $error = true;
                                $msg[] = array("El imputado no cuenta con nacionalidades activas");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
                            }
                            /*
                             * Agregar los domicilios del imputado
                             */
                            $logger->w_onError("AGREGAR A LA CARPETA JUDICIAL EL DOMICILIO DEL IMPUTADO");
                            $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                            $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $domiciliosimputadoscarpetasDto->setActivo("S");
                            $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                            $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $this->proveedor);

                            if ($domiciliosimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($domiciliosimputadoscarpetasDto); $x++) {
                                    $domiciliosDto = new DomiciliosimputadoscarpetasDTO();
                                    $domiciliosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $domiciliosDto->setDomicilioProcesal($domiciliosimputadoscarpetasDto[$x]->getDomicilioProcesal());
                                    $domiciliosDto->setCvePais($domiciliosimputadoscarpetasDto[$x]->getCvePais());
                                    $domiciliosDto->setCveEstado($domiciliosimputadoscarpetasDto[$x]->getCveEstado());
                                    $domiciliosDto->setCveMunicipio($domiciliosimputadoscarpetasDto[$x]->getCveMunicipio());
                                    $domiciliosDto->setDireccion($domiciliosimputadoscarpetasDto[$x]->getDireccion());
                                    $domiciliosDto->setColonia($domiciliosimputadoscarpetasDto[$x]->getColonia());
                                    $domiciliosDto->setNumInterior($domiciliosimputadoscarpetasDto[$x]->getNumInterior());
                                    $domiciliosDto->setNumExterior($domiciliosimputadoscarpetasDto[$x]->getNumExterior());
                                    $domiciliosDto->setCp($domiciliosimputadoscarpetasDto[$x]->getCp());
                                    $domiciliosDto->setLatitud($domiciliosimputadoscarpetasDto[$x]->getLatitud());
                                    $domiciliosDto->setLongitud($domiciliosimputadoscarpetasDto[$x]->getLongitud());
                                    $domiciliosDto->setRecidenciaHabitual($domiciliosimputadoscarpetasDto[$x]->getRecidenciaHabitual());
                                    $domiciliosDto->setEstado($domiciliosimputadoscarpetasDto[$x]->getEstado());
                                    $domiciliosDto->setMunicipio($domiciliosimputadoscarpetasDto[$x]->getMunicipio());
                                    $domiciliosDto->setCveConvivencia($domiciliosimputadoscarpetasDto[$x]->getCveConvivencia());
                                    $domiciliosDto->setCveTipoDeVivienda($domiciliosimputadoscarpetasDto[$x]->getCveTipoDeVivienda());
                                    $domiciliosDto->setActivo("S");

                                    $domiciliosDto = $domiciliosimputadoscarpetasDao->insertDomiciliosimputadoscarpetas($domiciliosDto, $this->proveedor);

                                    if ($domiciliosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los domicilios del imputado");
                                        $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR EL DOMICILIO");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("SE AGREGA EL DOMICILIO CON ID: " . $domiciliosDto[0]->getIdDomicilioImputadoCarpeta());
                                        $error = false;
//                                        $logger->w_onError("BORRADO LOGICO DEL DOMICILIO CON ID: " . $domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        $domicilioTmp = new DomiciliosimputadoscarpetasDTO();
//                                        $domicilioTmp->setIdDomicilioImputadoCarpeta($domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        $domicilioTmp->setActivo("N");
//                                        $domicilioTmp = $domiciliosimputadoscarpetasDao->updateDomiciliosimputadoscarpetas($domicilioTmp, $this->proveedor);
//                                        if ($domicilioTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("SE BORRA LOGICAMENTE EL DOMICILIO CON ID: " . $domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DOMICILIO CON ID: " . $domiciliosimputadoscarpetasDto[$x]->getIdDomicilioImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("La carpeta no cuenta con domicilios para el imputado");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
                                $error = true;
                            }
                            /*
                             * Agregar los defensores del imputado correspondiente
                             */
                            $logger->w_onError("AGREGAR DEFENSOR DEL IMPUTADO A LA CARPETA JUDICIAL");
                            $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                            $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $defensoresimputadoscarpetasDto->setActivo("S");
                            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                            $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $this->proveedor);

                            if ($defensoresimputadoscarpetasDto != "") {

                                for ($x = 0; $x < count($defensoresimputadoscarpetasDto); $x++) {
                                    $defensoresDto = new DefensoresimputadoscarpetasDTO();
                                    $defensoresDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $defensoresDto->setCveTipoDefensor($defensoresimputadoscarpetasDto[$x]->getCveTipoDefensor());
                                    $defensoresDto->setNombre($defensoresimputadoscarpetasDto[$x]->getNombre());
                                    $defensoresDto->setTelefono($defensoresimputadoscarpetasDto[$x]->getTelefono());
                                    $defensoresDto->setCelular($defensoresimputadoscarpetasDto[$x]->getCelular());
                                    $defensoresDto->setEmail($defensoresimputadoscarpetasDto[$x]->getEmail());
                                    $defensoresDto->setActivo("S");

                                    $defensoresDto = $defensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($defensoresDto, $this->proveedor);

                                    if ($defensoresDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los defensores");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL AGREGAR AL DEFENSOR : ");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("**********SE AGREGO AL DEFENSOR CON ID : " . $defensoresDto[0]->getIdDefensorImputadoCarpeta());
                                        $error = false;
//                                        $defensorTmp = new DefensoresimputadoscarpetasDTO();
//                                        $defensorTmp->setIdDefensorImputadoCarpeta($defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        $defensorTmp->setActivo("N");
//                                        $defensorTmp = $defensoresimputadoscarpetasDao->updateDefensoresimputadoscarpetas($defensorTmp, $this->proveedor);
//                                        if ($defensorTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("SE BORRA LOGICAMENTE AL DEFENSOR CON ID: " . $defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL DEFENSOR CON ID: " . $defensoresimputadoscarpetasDto[$x]->getIdDefensorImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("La carpeta no cuenta con defensores para el imputado.");
                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON DEFENSORES");
                                $error = true;
                            }
                            /*
                             * Agregar los tutorea para el imputado
                             */
                            $logger->w_onError("AGREGAR EL TUTOR DEL IMPUTADO A LA CARPETA JUDICIAL");
                            $tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();
                            $tutoresimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $tutoresimputadoscarpetasDto->setActivo("S");
                            $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
                            $tutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto, "", $this->proveedor);

                            if ($tutoresimputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($tutoresimputadoscarpetasDto); $x++) {
                                    $tutoresimputadosDto = new TutoresimputadoscarpetasDTO();
                                    $tutoresimputadosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $tutoresimputadosDto->setCveGenero($tutoresimputadoscarpetasDto[$x]->getCveGenero());
                                    $tutoresimputadosDto->setCveTipoTutor($tutoresimputadoscarpetasDto[$x]->getCveTipoTutor());
                                    $tutoresimputadosDto->setProvDef($tutoresimputadoscarpetasDto[$x]->getProvDef());
                                    $tutoresimputadosDto->setNombre($tutoresimputadoscarpetasDto[$x]->getNombre());
                                    $tutoresimputadosDto->setPaterno($tutoresimputadoscarpetasDto[$x]->getPaterno());
                                    $tutoresimputadosDto->setMaterno($tutoresimputadoscarpetasDto[$x]->getMaterno());
                                    $tutoresimputadosDto->setFechaNacimiento($tutoresimputadoscarpetasDto[$x]->getFechaNacimiento());
                                    $tutoresimputadosDto->setEdad($tutoresimputadoscarpetasDto[$x]->getEdad());
                                    $tutoresimputadosDto->setActivo("S");

                                    $tutoresimputadosDto = $tutoresimputadoscarpetasDao->insertTutoresimputadoscarpetas($tutoresimputadosDto, $this->proveedor);
                                    if ($tutoresimputadosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los tutores");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR : ");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresimputadosDto[0]->getIdTutorImputadoCarpeta());
//                                        $tutorTmp = new TutoresimputadoscarpetasDTO();
//                                        $tutorTmp->setIdTutorImputadoCarpeta($tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        $tutorTmp->setActivo("N");
//                                        $tutorTmp = $tutoresimputadoscarpetasDao->updateTutoresimputadoscarpetas($tutorTmp, $this->proveedor);
//                                        if ($tutorTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE AL TUTOR CON ID : " . $tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL TUTOR CON ID : " . $tutoresimputadoscarpetasDto[$x]->getIdTutorImputadoCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con tutores");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON TUTORES");
                                $error = true;
                            }
                            /*
                             * Agregar los telefonos del imputado
                             */
                            $logger->w_onError("**********AGREGAR DATOS DE NUMEROS TELEFONICOS CORRESPONDIENTES AL IMPUTADO");
                            $telefonosImputadoscarpetasDto = new TelefonosImputadoscarpetasDTO();
                            $telefonosImputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $telefonosImputadoscarpetasDto->setActivo("S");
                            $telefonosImputadoscarpetasDao = new TelefonosImputadoscarpetasDAO();
                            $telefonosImputadoscarpetasDto = $telefonosImputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadoscarpetasDto, "", $this->proveedor);

                            if ($telefonosImputadoscarpetasDto != "") {
                                for ($x = 0; $x < count($telefonosImputadoscarpetasDto); $x++) {
                                    $telefenosDto = new TelefonosimputadoscarpetasDTO();
                                    $telefenosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $telefenosDto->setTelefono($telefonosImputadoscarpetasDto[$x]->getTelefono());
                                    $telefenosDto->setCelular($telefonosImputadoscarpetasDto[$x]->getCelular());
                                    $telefenosDto->setEmail($telefonosImputadoscarpetasDto[$x]->getEmail());
                                    $telefenosDto->setActivo("S");

                                    $telefenosDto = $telefonosImputadoscarpetasDao->insertTelefonosimputadoscarpetas($telefenosDto, $this->proveedor);
                                    if ($telefenosDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar los telefonos");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR EL TELEFONO : ");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE REGISTRO EL TELEFONO CON ID : " . $telefenosDto[0]->getIdTelefonoImputadosCarpeta());
//                                        $telefonoTmp = new TelefonosimputadoscarpetasDTO();
//                                        $telefonoTmp->setIdTelefonoImputadosCarpeta($telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        $telefonoTmp->setActivo("N");
//                                        $telefonoTmp = $telefonosImputadoscarpetasDao->updateTelefonosimputadoscarpetas($telefonoTmp, $this->proveedor);
//                                        if ($telefonoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL TELEFONO CON ID : " . $telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL TELEFONO CON ID : " . $telefonosImputadoscarpetasDto[$x]->getIdTelefonoImputadosCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con telefonos");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUN NUMERO TELEFONICO : ");
                            }
                            /*
                             * Agregar las drogas correspondientes al imputado
                             */
                            $logger->w_onError("**********AGREGAR DATOS DE DROGAS CORRESPONDIENTES AL IMPUTADO");
                            $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();
                            $imputadosdrogascarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $imputadosdrogascarpetasDto->setActivo("S");
                            $imputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
                            $imputadosdrogascarpetasDto = $imputadosdrogascarpetasDao->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto, "", $this->proveedor);

                            if ($imputadosdrogascarpetasDto != "") {
                                for ($x = 0; $x < count($imputadosdrogascarpetasDto); $x++) {
                                    $imputadosdrogasDto = new ImputadosdrogascarpetasDTO();
                                    $imputadosdrogasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $imputadosdrogasDto->setcveDroga($imputadosdrogascarpetasDto[$x]->getCveDroga());
                                    $imputadosdrogasDto->setactivo("S");

                                    $imputadosdrogasDto = $imputadosdrogascarpetasDao->insertImputadosdrogascarpetas($imputadosdrogasDto, $this->proveedor);
                                    if ($imputadosdrogasDto == "") {
                                        $msg[] = array("Ocurrio un error al copiar la droga");
                                        $logger->w_onError("**********SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA DROGA : ");
                                        $error = true;
                                    } else {
                                        $logger->w_onError("**********SE REGISTRA LA DROGA CON ID : " . $imputadosdrogasDto[0]->getIdImputadoDrogaCarpeta());
                                        $error = false;
//                                        $drogasTmp = new ImputadosdrogascarpetasDTO();
//                                        $drogasTmp->setIdImputadoDrogaCarpeta($imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        $drogasTmp->setActivo("N");
//                                        $drogasTmp = $imputadosdrogascarpetasDao->updateImputadosdrogascarpetas($drogasTmp, $this->proveedor);
//                                        if ($drogasTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LA DROGA CON ID : " . $imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LA DROGA CON ID : " . $imputadosdrogascarpetasDto[$x]->getIdImputadoDrogaCarpeta());
//                                        }
                                    }
                                }
                            } else {
                                $msg[] = array("El imputado no cuenta con drogas registradas");
                                $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUNA DROGA REGISTRADA : ");
                            }
                            /*
                             * Borrar l�gicamente al imputado de la carpeta origen
                             */
//                            $logger->w_onError("**********BORRADO LOGICO DE EL IMPUTADO: " . $imputado->getIdImputadoCarpeta());
//                            $imputadoTmpDto = new ImputadoscarpetasDTO();
//                            $imputadoTmpDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
//                            $imputadoTmpDto->setCveEtapaProcesal($carpetaJudicial[0]->getCveEtapaProcesal());
//                            $imputadoTmpDto->setActivo("N");
//                            $imputadoTmpDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadoTmpDto, $this->proveedor);
//                            if ($imputadoTmpDto != "") {
//                                $error = false;
//                                $logger->w_onError("**********BORRADO LOGICO DEL IMPUTADO : " . $imputado->getIdImputadoCarpeta());
//                            } else {
//                                $error = true;
//                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL IMPUTADO : " . $imputado->getIdImputadoCarpeta());
//                            }

                            /*
                             * Actualizar la etapa procesal del imputado origen
                             */
                            $dtoImputado = new ImputadoscarpetasDTO();
                            $dtoImputado->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $dtoImputado->setCveEtapaProcesal($etapaProcesal);
                            $dtoImputado = $imputadosCarpetasDao->updateImputadoscarpetas($dtoImputado, $this->proveedor);
                            if ($dtoImputado != "") {
                                $logger->w_onError("**********SE MUEVE AL IMPUTADO CON ID : " . $imputado->getIdImputadoCarpeta());
                                $logger->w_onError("**********EN LA ETAPA PROCESAL : " . $etapaProcesal);
                                $error = false;
                                $msg[] = array("Se cambia la etapa procesal solicitada al imputado");
                            } else {
                                $logger->w_onError("**********OCURRIO UN ERROR AL CAMBIAR LA ETAPA PROCESAL DEL IMPUTADO CON ID : " . $imputado->getIdImputadoCarpeta());
                                $error = true;
                                $msg[] = array("Ocurrio un error al cambiar la etapa procesal del imputado");
                            }
                            /*
                             * Agregar la terminacion a cada imputado
                             */
                            $observacion = "";
                            if ((int) $imputado->getCveEtapaProcesal() == 1 && $etapaProcesal == 4) { //Procedimiento abreviado
                                $cveConclusion = 3;
                                $observacion = "PROCEDIMIENTO ABREVIADO";
                            } else if ((int) $imputado->getCveEtapaProcesal() == 2 && $etapaProcesal == 3) {
                                $cveConclusion = 2;
                                $observacion = "CAMBIO A JUICIO";
                            } else if ((int) $imputado->getCveEtapaProcesal() == 3 && $etapaProcesal == 4) {
                                $cveConclusion = 9;
                                $observacion = "SENTENCIA";
                            }
                            $imputadosConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                            $conclusionesDao = new ImputadoscarpetasconclusionesDAO();
                            $imputadosConclusionesDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                            $imputadosConclusionesDto->setActivo("S");
                            $imputadosConclusionesDto = $conclusionesDao->selectImputadoscarpetasconclusiones($imputadosConclusionesDto, "", $this->proveedor);
                            if ($imputadosConclusionesDto != "") {
                                foreach ($imputadosConclusionesDto as $conclusion) {
                                    $imputadosConclusionesTmp = new ImputadoscarpetasconclusionesDTO();
                                    $imputadosConclusionesTmp->setIdImputadoCarpetaConclusion($conclusion->getIdImputadoCarpetaConclusion());
                                    $imputadosConclusionesTmp->setActivo("N");
                                    $imputadosConclusionesTmp = $conclusionesDao->updateImputadoscarpetasconclusiones($imputadosConclusionesTmp, $this->proveedor);
                                    if ($imputadosConclusionesTmp != "") {
                                        $error = false;
                                        $logger->w_onError("**********ELIMINACION LOGICA DEL REGISTRO IMPUTADOSCARPETASCONCLUSIONES CON ID : " . $imputadosConclusionesTmp[0]->getIdImputadoCarpetaConclusion());
                                    } else {
                                        $error = true;
                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENE EL REGISTRO IMPUTADOSCARPETASCONCLUSIONES CON ID : " . $conclusion->getIdImputadoCarpetaConclusion());
                                    }
                                }
                            }
                            if (!$error) {
                                if ($cveConclusion > 0) {
                                    $conclusionesDto = new ImputadoscarpetasconclusionesDTO();
                                    $conclusionesDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                                    $conclusionesDto->setCveConclusion($cveConclusion);
                                    $conclusionesDto->setMontoTotalAcordado(0);
                                    $conclusionesDto->setMontoTotalPagado(0);
                                    $conclusionesDto->setObservaciones($observacion);
                                    $conclusionesDto->setActivo("S");
                                    $conclusionesDto = $conclusionesDao->insertImputadoscarpetasconclusiones($conclusionesDto, $this->proveedor);
                                    if ($conclusionesDto != "") {
                                        $error = false;
                                        $logger->w_onError("**********SE AGREGA EL REGISTRO IMPUTADOSCARPETASCONCLUSIONES CON ID : " . $conclusionesDto[0]->getIdImputadoCarpetaConclusion());
                                    } else {
                                        $error = true;
                                        $logger->w_onError("**********OCURRIO UN ERROR AL AGREGAR LA TERMINACION AL IMPUTADO CON ID: " . $imputado->getIdImputadoCarpeta());
                                    }
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al copiar los datos del imputado");
                            $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR AL IMPUTADO : ");
                            $logger->w_onError("**********NOMBRE : " . $imputado->getNombre());
                            $logger->w_onError("**********APELLIDO PATERNO : " . $imputado->getPaterno());
                            $logger->w_onError("**********APELLIDO MATERNO : " . $imputado->getMaterno());
                        }
                        /*
                         * Consultar la relacion impofedel para obtener el id del
                         * ofendido relacionado con cada imputado
                         */
                        $logger->w_onError("**********CONSULTAR LA RELACION IMPOFEDEL CARPETAS : ");
                        $impofedelcarpetasAuxDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $impofedelcarpetasAuxDto->setActivo("S");
                        //consultar las relaciones del imputado 
                        $rsImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasAuxDto, "", $this->proveedor);
                        if ($rsImpofedelcarpetasDto != "") {
                            foreach ($rsImpofedelcarpetasDto as $impofedel) {
                                $logger->w_onError("**********ID DE RELACION IMPOFEDEL CARPETAS : " . $impofedel->getIdImpOfeDelCarpeta());
                                /*
                                 * Copiar a los ofendidos correspondientes a la carpeta judicial
                                 */
                                $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                                $ofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                //$ofendidoscarpetasDto->setActivo("S");
                                $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                                $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);

                                if ($ofendidoscarpetasDto != "") {
                                    for ($index = 0; $index < count($ofendidoscarpetasDto); $index++) {
                                        $ofendidosDto = new OfendidoscarpetasDTO();

                                        $ofendidosDto->setIdCarpetaJudicial($carpetaJudicial[0]->getIdCarpetaJudicial());
                                        $ofendidosDto->setActivo("S");
                                        $ofendidosDto->setNombre($ofendidoscarpetasDto[$index]->getNombre());
                                        $ofendidosDto->setPaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                        $ofendidosDto->setMaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                        $ofendidosDto->setRfc($ofendidoscarpetasDto[$index]->getRfc());
                                        $ofendidosDto->setCurp($ofendidoscarpetasDto[$index]->getCurp());
                                        $ofendidosDto->setFechaNacimiento($ofendidoscarpetasDto[$index]->getFechaNacimiento());
                                        $ofendidosDto->setCveOcupacion($ofendidoscarpetasDto[$index]->getCveOcupacion());
                                        $ofendidosDto->setCveTipoPersona($ofendidoscarpetasDto[$index]->getCveTipoPersona());
                                        $ofendidosDto->setCveGenero($ofendidoscarpetasDto[$index]->getCveGenero());
                                        $ofendidosDto->setCveTipoParte($ofendidoscarpetasDto[$index]->getCveTipoParte());
                                        $ofendidosDto->setCveTipoReligion($ofendidoscarpetasDto[$index]->getCveTipoReligion());
                                        $ofendidosDto->setEdad($ofendidoscarpetasDto[$index]->getEdad());
                                        $ofendidosDto->setCvePaisNacimiento($ofendidoscarpetasDto[$index]->getCvePaisNacimiento());
                                        $ofendidosDto->setCveEstadoNacimiento($ofendidoscarpetasDto[$index]->getCveEstadoNacimiento());
                                        $ofendidosDto->setEstadoNacimiento($ofendidoscarpetasDto[$index]->getEstadoNacimiento());
                                        $ofendidosDto->setCveMunicipioNacimiento($ofendidoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                        $ofendidosDto->setMunicipioNacimiento($ofendidoscarpetasDto[$index]->getMunicipioNacimiento());
                                        $ofendidosDto->setCveEstadoCivil($ofendidoscarpetasDto[$index]->getCveEstadoCivil());
                                        $ofendidosDto->setCveAlfabetismo($ofendidoscarpetasDto[$index]->getCveAlfabetismo());
                                        $ofendidosDto->setCveNivelInstruccion($ofendidoscarpetasDto[$index]->getCveNivelInstruccion());
                                        $ofendidosDto->setCveEspanol($ofendidoscarpetasDto[$index]->getCveEspanol());
                                        $ofendidosDto->setCveDialectoIndigena($ofendidoscarpetasDto[$index]->getCveDialectoIndigena());
                                        $ofendidosDto->setCveTipoFamiliaLinguistica($ofendidoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                        $ofendidosDto->setCveInterprete($ofendidoscarpetasDto[$index]->getCveInterprete());
                                        $ofendidosDto->setCveOrdenProteccion($ofendidoscarpetasDto[$index]->getCveOrdenProteccion());
                                        $ofendidosDto->setCveEstadoPsicofisico($ofendidoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                        $ofendidosDto->setNombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                        $ofendidosDto->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoscarpetasDto[$index]->getCveVictimaDeLaDelincuenciaOrganizada());
                                        $ofendidosDto->setCveVictimaDeViolenciaDeGenero($ofendidoscarpetasDto[$index]->getCveVictimaDeViolenciaDeGenero());
                                        $ofendidosDto->setCveVictimaDeTrata($ofendidoscarpetasDto[$index]->getCveVictimaDeTrata());
                                        $ofendidosDto->setCveVictimaDeAcoso($ofendidoscarpetasDto[$index]->getCveVictimaDeAcoso());
                                        $ofendidosDto->setDesaparecido($ofendidoscarpetasDto[$index]->getDesaparecido());
                                        $ofendidosDto->setNumHijos($ofendidoscarpetasDto[$index]->getNumHijos());
                                        $ofendidosDto->setEmbarazada($ofendidoscarpetasDto[$index]->getEmbarazada());
                                        $ofendidosDto->setCveGrupoEdnico($ofendidoscarpetasDto[$index]->getCveGrupoEdnico());

                                        $ofendidoscarpetasDao = new OfendidoscarpetasDAO();

                                        $rsOfendido = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidosDto, "", $this->proveedor);
                                        if ($rsOfendido == "") {

                                            $logger->w_onError("**********COPIAR DATOS DEL OFENDIDO A LA NUEVA CARPETA JUDICIAL");
                                            $ofendidosDto = $ofendidoscarpetasDao->insertOfendidoscarpetas($ofendidosDto, $this->proveedor);
                                            if ($ofendidosDto != "") {
                                                $ofendidosDto = $ofendidosDto[0];
                                                $logger->w_onError("**********ID DE OFENDIDO INSERTADO : " . $ofendidosDto->getIdOfendidoCarpeta());
                                                $ofendidosCarpetas[] = $ofendidosDto->getIdOfendidoCarpeta();
                                                /*
                                                 * Se copian los datos de domicilios del ofendido
                                                 */
                                                $logger->w_onError("**********COPIAR LOS DATOS DE DOMICILIOS DEL OFENDIDO");
                                                $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                                                $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                $domiciliosofendidoscarpetasDto->setActivo("S");
                                                $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
                                                $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $this->proveedor);

                                                if ($domiciliosofendidoscarpetasDto != "") {
                                                    for ($x = 0; $x < count($domiciliosofendidoscarpetasDto); $x++) {
                                                        $domiciliosDto = new DomiciliosofendidoscarpetasDTO();
                                                        $domiciliosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                        $domiciliosDto->setDomicilioProcesal($domiciliosofendidoscarpetasDto[$x]->getDomicilioProcesal());
                                                        $domiciliosDto->setCvePais($domiciliosofendidoscarpetasDto[$x]->getCvePais());
                                                        $domiciliosDto->setCveEstado($domiciliosofendidoscarpetasDto[$x]->getcveEstado());
                                                        $domiciliosDto->setCveMunicipio($domiciliosofendidoscarpetasDto[$x]->getCveMunicipio());
                                                        $domiciliosDto->setDireccion($domiciliosofendidoscarpetasDto[$x]->getDireccion());
                                                        $domiciliosDto->setColonia($domiciliosofendidoscarpetasDto[$x]->getColonia());
                                                        $domiciliosDto->setNumInterior($domiciliosofendidoscarpetasDto[$x]->getNumInterior());
                                                        $domiciliosDto->setNumExterior($domiciliosofendidoscarpetasDto[$x]->getNumExterior());
                                                        $domiciliosDto->setCp($domiciliosofendidoscarpetasDto[$x]->getCp());
                                                        $domiciliosDto->setLatitud($domiciliosofendidoscarpetasDto[$x]->getLatitud());
                                                        $domiciliosDto->setLongitud($domiciliosofendidoscarpetasDto[$x]->getLongitud());
                                                        $domiciliosDto->setRecidenciaHabitual($domiciliosofendidoscarpetasDto[$x]->getRecidenciaHabitual());
                                                        $domiciliosDto->setEstado($domiciliosofendidoscarpetasDto[$x]->getEstado());
                                                        $domiciliosDto->setMunicipio($domiciliosofendidoscarpetasDto[$x]->getMunicipio());
                                                        $domiciliosDto->setCveConvivencia($domiciliosofendidoscarpetasDto[$x]->getCveConvivencia());
                                                        $domiciliosDto->setCveTipoDeVivienda($domiciliosofendidoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                        $domiciliosDto->setActivo("S");

                                                        $domiciliosDto = $domiciliosofendidoscarpetasDao->insertDomiciliosofendidoscarpetas($domiciliosDto, $this->proveedor);
                                                        if ($domiciliosDto == "") {
                                                            $msg[] = array("Error al copiar el domicilio al ofendido");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE DOMICILIOS DEL OFENDIDO");
                                                            $error = true;
                                                        } else {
                                                            $error = false;
                                                            $logger->w_onError("**********ID DE DOMICILIO OFENDIDO INSERTADO: " . $domiciliosDto[0]->getIdDomicilioOfendidoCarpeta());
                                                            /*
                                                             * Borrar logicamente el domicilio del ofendido
                                                             */
//                                                            $domicilioOfendidoTmp = new DomiciliosofendidoscarpetasDTO();
//                                                            $domicilioOfendidoTmp->setIdDomicilioOfendidoCarpeta($domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            $domicilioOfendidoTmp->setActivo("N");
//                                                            $domicilioOfendidoTmp = $domiciliosofendidoscarpetasDao->updateDomiciliosofendidoscarpetas($domicilioOfendidoTmp, $this->proveedor);
//                                                            if ($domicilioOfendidoTmp != "") {
//                                                                $error = false;
//                                                                $logger->w_onError("**********DOMICILIO DEL OFENDIDO BORRADO LOGICAMENTE: " . $domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            } else {
//                                                                $error = true;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DOMICILIO DEL OFENDIDO: " . $domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("La referencia no cuenta con domicilios para el ofendido");
                                                    $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DOMICILIOS PARA EL OFENDIDO");
                                                    $error = true;
                                                }
                                                /*
                                                 * Copiar datos de defensores para el ofendido
                                                 */
                                                $logger->w_onError("**********COPIAR DATOS DE DEFENSORES DEL OFENDIDO");
                                                $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                                                $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                $defensoresofendidoscarpetasDto->setActivo("S");
                                                $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                                                $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $this->proveedor);

                                                if ($defensoresofendidoscarpetasDto != "") {
                                                    for ($x = 0; $x < count($defensoresofendidoscarpetasDto); $x++) {
                                                        $defensoresofendidosDto = new DefensoresofendidoscarpetasDTO();
                                                        $defensoresofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                        $defensoresofendidosDto->setCveTipoDefensor($defensoresofendidoscarpetasDto[$x]->getCveTipoDefensor());
                                                        $defensoresofendidosDto->setNombre($defensoresofendidoscarpetasDto[$x]->getNombre());
                                                        $defensoresofendidosDto->setTelefono($defensoresofendidoscarpetasDto[$x]->getTelefono());
                                                        $defensoresofendidosDto->setCelular($defensoresofendidoscarpetasDto[$x]->getCelular());
                                                        $defensoresofendidosDto->setEmail($defensoresofendidoscarpetasDto[$x]->getEmail());
                                                        $defensoresofendidosDto->setActivo("S");

                                                        $defensoresofendidosDto = $defensoresofendidoscarpetasDao->insertDefensoresofendidoscarpetas($defensoresofendidosDto, $this->proveedor);
                                                        if ($defensoresofendidosDto == "") {
                                                            $msg[] = array("Erro al copiar el defensor a la carpeta judicial");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL DEFENSOR");
                                                            $error = true;
                                                        } else {
                                                            $error = false;
                                                            $logger->w_onError("**********ID DEL DEFENSOR OFENDIDO INSERTADO: " . $defensoresofendidosDto[0]->getIdDefensorOfendidoCarpeta());
//                                                            $defensorOfendidoTmp = new DefensoresofendidoscarpetasDTO();
//                                                            $defensorOfendidoTmp->setIdDefensorOfendidoCarpeta($defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            $defensorOfendidoTmp->setActivo("N");
//                                                            $defensorOfendidoTmp = $defensoresofendidoscarpetasDao->updateDefensoresofendidoscarpetas($defensorOfendidoTmp, $this->proveedor);
//                                                            if ($defensorOfendidoTmp != "") {
//                                                                $error = false;
//                                                                $logger->w_onError("**********ID DEL DEFENSOR OFENDIDO BORRADO LOGICAMENTE: " . $defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            } else {
//                                                                $error = true;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DEFENSOR OFENDIDO : " . $defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("La referencia no cuenta con defensores para el ofendido");
                                                    $logger->w_onError("**********EL OFENDIDO NO CUENTA CON DEFENSORES");
                                                    $error = true;
                                                }
                                                /*
                                                 * Copiar datos de telefonos del ofendido
                                                 */
                                                $logger->w_onError("**********COPIAR DATOS DE LOS TELEFONOS CORRESPONDIENTES AL OFENDIDO");
                                                $telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                                                $telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                $telefonosofendidoscarpetasDto->setActivo("S");
                                                $telefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                                                $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, "", $this->proveedor);

                                                if ($telefonosofendidoscarpetasDto != "") {
                                                    for ($x = 0; $x < count($telefonosofendidoscarpetasDto); $x++) {
                                                        $telefonosofendidosDto = new TelefonosofendidoscarpetasDTO();
                                                        $telefonosofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                        $telefonosofendidosDto->setTelefono($telefonosofendidoscarpetasDto[$x]->getTelefono());
                                                        $telefonosofendidosDto->setCelular($telefonosofendidoscarpetasDto[$x]->getCelular());
                                                        $telefonosofendidosDto->setEmail($telefonosofendidoscarpetasDto[$x]->getEmail());
                                                        $telefonosofendidosDto->setActivo("S");

                                                        $telefonosofendidosDto = $telefonosofendidoscarpetasDao->insertTelefonosofendidoscarpetas($telefonosofendidosDto, $this->proveedor);
                                                        if ($telefonosofendidosDto == "") {
                                                            $msg[] = array("Ocurrio un erro al copiar los telefonos a la carpeta judicial");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO A LA CARPETA JUDICIAL");
                                                            $error = true;
                                                        } else {
                                                            $error = false;
                                                            $logger->w_onError("**********ID DEL TELEFONO OFENDIDO INSERTADO: " . $telefonosofendidosDto[0]->getIdTelefonoOfendidoCarpeta());
//                                                            $telefonoOfendidoTmp = new TelefonosofendidoscarpetasDTO();
//                                                            $telefonoOfendidoTmp->setIdTelefonoOfendidoCarpeta($telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            $telefonoOfendidoTmp->setActivo("N");
//                                                            $telefonoOfendidoTmp = $telefonosofendidoscarpetasDao->updateTelefonosofendidoscarpetas($telefonoOfendidoTmp, $this->proveedor);
//                                                            if ($telefonoOfendidoTmp != "") {
//                                                                $error = false;
//                                                                $logger->w_onError("**********ID DEL TELEFONO OFENDIDO BORRADO LOGICAMENTE: " . $telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            } else {
//                                                                $error = true;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL TELEFONO OFENDIDO : " . $telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("La referencia no cuenta con telefonos para el ofendido");
                                                    $logger->w_onError("**********EL OFENDIDO NO CUENTA CON TELEFONOS");
                                                    //$error = true;
                                                }

                                                /*
                                                 * Copiar datos de nacionalidades del ofendido
                                                 */
                                                $logger->w_onError("**********COPIAR DATOS DE NACIONALIDADES DEL OFENDIDO");
                                                $nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                                                $nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                $nacionalidadesofendidoscarpetasDto->setActivo("S");
                                                $nacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                                                $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, "", $this->proveedor);

                                                if ($nacionalidadesofendidoscarpetasDto != "") {
                                                    for ($x = 0; $x < count($nacionalidadesofendidoscarpetasDto); $x++) {
                                                        $nacionalidadesofendidosDto = new NacionalidadesofendidoscarpetasDTO();
                                                        $nacionalidadesofendidosDto->setcvePais($nacionalidadesofendidoscarpetasDto[$x]->getCvePais());
                                                        $nacionalidadesofendidosDto->setactivo("S");
                                                        $nacionalidadesofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());

                                                        $nacionalidadesofendidosDto = $nacionalidadesofendidoscarpetasDao->insertNacionalidadesofendidoscarpetas($nacionalidadesofendidosDto, $this->proveedor);
                                                        if ($nacionalidadesofendidosDto == "") {
                                                            $msg[] = array("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA NACIONALIDAD DEL OFENDIDO");
                                                            $error = true;
                                                        } else {
                                                            $error = false;
                                                            $logger->w_onError("**********ID DE LA NACIONALIDAD OFENDIDO INSERTADA: " . $nacionalidadesofendidosDto[0]->getIdNacionalidadOfendidoCarpeta());
                                                            /*
                                                             * Borrar logicamente la nacionalidad del ofendido
                                                             */
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE LAS NACIONALIDADES DEL OFENDIDO ");
//                                                            $nacionalidadOfendidoTmp = new NacionalidadesofendidoscarpetasDTO();
//                                                            $nacionalidadOfendidoTmp->setIdNacionalidadOfendidoCarpeta($nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            $nacionalidadOfendidoTmp->setActivo("N");
//                                                            $nacionalidadOfendidoTmp = $nacionalidadesofendidoscarpetasDao->updateNacionalidadesofendidoscarpetas($nacionalidadOfendidoTmp, $this->proveedor);
//                                                            if ($nacionalidadOfendidoTmp != "") {
//                                                                $error = false;
//                                                                $logger->w_onError("**********ID DE LA NACIONALIDAD OFENDIDO BORRADA LOGICAMENTE: " . $nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            } else {
//                                                                $error = true;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA NACIONALIDAD DEL OFENDIDO: " . $nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("La referencia no cuenta con nacionalidades para el ofendido");
                                                    $logger->w_onError("**********EL OFENDIDO NO CUENTA CON NACIONALIDADES");
                                                    $error = true;
                                                }

                                                /*
                                                 * Copiar datos de tutores del ofendido
                                                 */
                                                $logger->w_onError("**********COPIAR DATOS DE TUTORES DEL OFENDIDO");
                                                $tutoresofendidoscarpetasDto = new TutoresofendidoscarpetasDTO();
                                                $tutoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                $tutoresofendidoscarpetasDto->setActivo("S");
                                                $tutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
                                                $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, "", $this->proveedor);

                                                if ($tutoresofendidoscarpetasDto != "") {
                                                    for ($x = 0; $x < count($tutoresofendidoscarpetasDto); $x++) {
                                                        $tutoresofendidosDto = new TutoresofendidoscarpetasDTO();
                                                        $tutoresofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                        $tutoresofendidosDto->setCveGenero($tutoresofendidoscarpetasDto[$x]->getCveGenero());
                                                        $tutoresofendidosDto->setCveTipoTutor($tutoresofendidoscarpetasDto[$x]->getCveTipoTutor());
                                                        $tutoresofendidosDto->setProvDef($tutoresofendidoscarpetasDto[$x]->getProvDef());
                                                        $tutoresofendidosDto->setNombre($tutoresofendidoscarpetasDto[$x]->getNombre());
                                                        $tutoresofendidosDto->setPaterno($tutoresofendidoscarpetasDto[$x]->getPaterno());
                                                        $tutoresofendidosDto->setMaterno($tutoresofendidoscarpetasDto[$x]->getMaterno());
                                                        $tutoresofendidosDto->setFechaNacimiento($tutoresofendidoscarpetasDto[$x]->getFechaNacimiento());
                                                        $tutoresofendidosDto->setEdad($tutoresofendidoscarpetasDto[$x]->getEdad());
                                                        $tutoresofendidosDto->setActivo("S");

                                                        $tutoresofendidosDto = $tutoresofendidoscarpetasDao->insertTutoresofendidoscarpetas($tutoresofendidosDto, $this->proveedor);
                                                        if ($tutoresofendidosDto == "") {
                                                            $msg[] = array("Ocurrio un error al copiar los tutores");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR CORRESPONDIENTE AL OFENDIDO ");
                                                            $error = true;
                                                        } else {
                                                            $error = false;
                                                            $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresofendidosDto[0]->getIdTutorOfendidoCarpeta());
//                                                            $tutorOfendidoTmp = new TutoresofendidoscarpetasDTO();
//                                                            $tutorOfendidoTmp->setIdTutorOfendidoCarpeta($tutoresofendidoscarpetasDto[$x]->getIdTutorOfendidoCarpeta());
//                                                            $tutorOfendidoTmp->setActivo("N");
//                                                            $tutorOfendidoTmp = $tutoresofendidoscarpetasDao->updateTutoresofendidoscarpetas($tutorOfendidoTmp, $this->proveedor);
//                                                            if ($tutorOfendidoTmp != "") {
//                                                                $error = false;
//                                                                $logger->w_onError("**********SE BORRA LOGICAMENTE AL TUTOR DEL OFENDIDO CON ID : " . $tutoresofendidoscarpetasDto[$x]->getIdTutorOfendidoCarpeta());
//                                                            } else {
//                                                                $error = true;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL  BORRAR LOGICAMENTE AL TUTOR DEL OFENDIDO CON ID : " . $tutoresofendidoscarpetasDto[$x]->getIdTutorOfendidoCarpeta());
//                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("El ofendido no cuenta con tutores");
                                                    $logger->w_onError("**********SE DETERMINA QUE EL OFENDIDO NO CUENTA CON TUTORES");
                                                }
                                            } else {
                                                $msg[] = array("No se logro registra el ofendido en la carpeta judicial");
                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL OFENDIDO HACIA LA NUEVA CARPETA JUDICIAL");
                                                $error = true;
                                            }
                                        } else {
                                            $ofendidosDto = $rsOfendido[0];
                                            $logger->w_onError("**********EL OFENDIDO YA ESTA REGISTRADO EN LA BASE DE DATOS CON ID: " . $rsOfendido[0]->getIdOfendidoCarpeta());
                                        }

                                        /*
                                         * Borrar logicamente al ofendido
                                         */
//                                        $ofendidoTmp = new OfendidoscarpetasDTO();
//                                        $ofendidoTmp->setIdOfendidoCarpeta($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
//                                        $ofendidoTmp->setActivo("N");
//                                        $ofendidoTmp = $ofendidoscarpetasDao->updateOfendidoscarpetas($ofendidoTmp, $this->proveedor);
//                                        if ($ofendidoTmp != "") {
//                                            $error = false;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE AL OFENDIDO CON ID :" . $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
//                                        } else {
//                                            $error = true;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL OFENDIDO CON ID :" . $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
//                                        }
                                    }
                                } else {
                                    //$ofendidosDto = $ofendidoscarpetasDto[0];
                                    $msg[] = array("Error la refencia base no tiene ofendidos para copiar a la carpeta");
                                    $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO CUENTA CON OFENDIDOS PARA COPIAR A LA CARPETA");
                                    $error = true;
                                }

                                /*
                                 * Terminamos de coapira los ofendidos de la carpeta judicial
                                 * 
                                 */
                                $logger->w_onError("**********SE COPIAN LOS DELITOS EXISTENTES EN LA RELACION IMPOFEDEL CARPETAS");
                                /*
                                 * comenzamos a copiar los delitos de la carpeta judicial
                                 */
                                $delitoscarpetasDto = new DelitoscarpetasDTO();
                                $delitoscarpetasDto->setIdDelitoCarpeta($impofedel->getIdDelitoCarpeta());
                                //$delitoscarpetasDto->setActivo("S");
                                $delitoscarpetasDao = new DelitoscarpetasDAO();
                                $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
                                if ($delitoscarpetasDto != "") {
                                    for ($index = 0; $index < count($delitoscarpetasDto); $index++) {
                                        $delitosDto = new DelitoscarpetasDTO();
                                        $delitosDto->setIdCarpetaJudicial($carpetaJudicial[0]->getIdCarpetaJudicial());
                                        $delitosDto->setCveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                        $delitosDto->setActivo("S");
                                        $rsDelito = $delitoscarpetasDao->selectDelitoscarpetas($delitosDto, "", $this->proveedor);
                                        if ($rsDelito == "") {
                                            $delitosDto = $delitoscarpetasDao->insertDelitoscarpetas($delitosDto, $this->proveedor);
                                            if ($delitosDto == "") {
                                                $msg[] = array("Ocurrio un error al copiar el delito a la carpeta judicial");
                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DELITO A LA CARPETA JUDICIAL");
                                                $error = true;
                                            } else {
                                                $delitosDto = $delitosDto[0];
                                                $delitosCarpetas[] = $delitosDto->getIdDelitoCarpeta();
                                                $logger->w_onError("**********ID DEL DELITO INSERTADO: " . $delitosDto->getIdDelitoCarpeta());
//                                                $delitoTmp = new DelitoscarpetasDTO();
//                                                $delitoTmp->setIdDelitoCarpeta($delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                $delitoTmp->setActivo("N");
//                                                $delitoTmp = $delitoscarpetasDao->updateDelitoscarpetas($delitoTmp, $this->proveedor);
//                                                if ($delitoTmp != "") {
//                                                    $error = false;
//                                                    $logger->w_onError("**********ID DEL DELITO BORRADO LOGICAMENTE: " . $delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                } else {
//                                                    $error = true;
//                                                    $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DELITO CON ID: " . $delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                }
                                            }
                                        } else {
                                            $delitosDto = $rsDelito[0];
                                            $logger->w_onError("**********EL DELITO YA ESTA REGISTRADO EN LA BASE DE DATOS: " . $delitosDto->getIdDelitoCarpeta());
                                        }
                                    }
                                } else {
                                    $msg[] = array("La referencia no cuenta con delitos definidos para copiar a la carpeta");
                                    $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DELITOS PARA COPIAR A LA CARPETA JUDICIAL");
                                    $error = true;
                                }

                                /*
                                 * Copiar la relacion impofedel
                                 */
                                $logger->w_onError("**********COPIAR LA RELACION IMPOFEDEL CARPETAS");
                                $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                //$impofedelcarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $impofedelcarpetasDto->setIdCarpetaJudicial($carpetaJudicial[0]->getIdCarpetaJudicial());
                                $impofedelcarpetasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                $impofedelcarpetasDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                $impofedelcarpetasDto->setIdDelitoCarpeta($delitosDto->getIdDelitoCarpeta());
                                $impofedelcarpetasDto->setActivo("S");
                                $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                                $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $this->proveedor);

                                if ($impofedelcarpetasDto == "") {
                                    $index = 0;
                                    $impofedelDto = new ImpofedelcarpetasDTO();
                                    $impofedelDto->setIdCarpetaJudicial($carpetaJudicial[0]->getIdCarpetaJudicial());
                                    $impofedelDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $impofedelDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                    $impofedelDto->setIdDelitoCarpeta($delitosDto->getIdDelitoCarpeta());
                                    $impofedelDto->setCveModalidad($impofedel->getCveModalidad());
                                    $impofedelDto->setCveComision($impofedel->getCveComision());
                                    $impofedelDto->setCveConcurso($impofedel->getCveConcurso());
                                    $impofedelDto->setCveClasificacionDelitoOrden($impofedel->getCveClasificacionDelitoOrden());
                                    $impofedelDto->setCveElementoComision($impofedel->getCveElementoComision());
                                    $impofedelDto->setCveClasificacionDelito($impofedel->getCveClasificacionDelito());
                                    $impofedelDto->setCveMunicipio($impofedel->getCveMunicipio());
                                    $impofedelDto->setCveEntidad($impofedel->getCveEntidad());
                                    $impofedelDto->setCveFormaAccion($impofedel->getCveFormaAccion());
                                    $impofedelDto->setCveConsumacion($impofedel->getCveConsumacion());
                                    $impofedelDto->setCveGradoParticipacion($impofedel->getCveGradoParticipacion());
                                    $impofedelDto->setCveRelacionImpOfe($impofedel->getCveRelacionImpOfe());
                                    $impofedelDto->setCveTerminacion($impofedel->getCveTerminacion());
                                    $impofedelDto->setActivo("S");
                                    $impofedelDto->setFechaDelito($impofedel->getFechaDelito());
                                    $impofedelDto->setDireccion($impofedel->getDireccion());
                                    $impofedelDto->setColonia($impofedel->getColonia());
                                    $impofedelDto->setNumInterior($impofedel->getNumInterior());
                                    $impofedelDto->setNumExterior($impofedel->getNumExterior());
                                    $impofedelDto->setCp($impofedel->getCp());

                                    $impofedelDto = $impofedelcarpetasDao->insertImpofedelcarpetas($impofedelDto, $this->proveedor);

                                    if ($impofedelDto == "") {
                                        $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA RELACION DEL IMPUTADO, DELITO Y OFENDIDO");
                                        $error = true;
                                    } else {
                                        $error = false;
                                        $logger->w_onError("**********SE INSERTA LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $impOfeDelRelCarpetas[] = array("idImpOfeDelCarpeta" => $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                    }
                                    //                                                    }
                                } else {
                                    $msg[] = array("La referencia con relacion de delitos, imputados y ofendidos ya est� registrada");
                                    $error = true;
                                    $logger->w_onError("**********YA EXISTE LA RELACION IMPOFEDEL CARPETAS, ID: " . $impofedelcarpetasDto[0]->getIdImpOfeDelCarpeta());
                                    $logger->w_onError("**********ID IMPUTADO: " . $impofedelcarpetasDto[0]->getIdImputadoCarpeta());
                                    $logger->w_onError("**********ID OFENDIDO: " . $impofedelcarpetasDto[0]->getIdOfendidoCarpeta());
                                    $logger->w_onError("**********ID DELITO: " . $impofedelcarpetasDto[0]->getIdDelitoCarpeta());
                                    $impofedelDto[0] = $impofedelcarpetasDto[0];
                                }


                                //}
                                /*
                                 * Copiar datos de trata de personas
                                 */
                                $logger->w_onError("**********COPIAR DATOS DE TRATA DE PERSONAS");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                                $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $trataspersonascarpetasDto->setActivo("S");

                                $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                                $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $this->proveedor);

                                if ($trataspersonascarpetasDto != "") {
                                    for ($x = 0; $x < count($trataspersonascarpetasDto); $x++) {
                                        $trataspersonasDto = new TrataspersonascarpetasDTO();
                                        $trataspersonasDto->setCveEstadoDestino($trataspersonascarpetasDto[$x]->getCveEstadoDestino());
                                        $trataspersonasDto->setCveMunicipioDestino($trataspersonascarpetasDto[$x]->getCveMunicipioDestino());
                                        $trataspersonasDto->setCvePaisDestino($trataspersonascarpetasDto[$x]->getCvePaisDestino());
                                        $trataspersonasDto->setEstadoDestino($trataspersonascarpetasDto[$x]->getEstadoDestino());
                                        $trataspersonasDto->setMunicipioDestino($trataspersonascarpetasDto[$x]->getMunicipioDestino());
                                        $trataspersonasDto->setCveEstadoOrigen($trataspersonascarpetasDto[$x]->getCveEstadoOrigen());
                                        $trataspersonasDto->setCveMunicipioOrigen($trataspersonascarpetasDto[$x]->getCveMunicipioOrigen());
                                        $trataspersonasDto->setCvePaisOrigen($trataspersonascarpetasDto[$x]->getCvePaisOrigen());
                                        $trataspersonasDto->setEstadoOrigen($trataspersonascarpetasDto[$x]->getEstadoOrigen());
                                        $trataspersonasDto->setMunicipioOrigen($trataspersonascarpetasDto[$x]->getMunicipioOrigen());
                                        $trataspersonasDto->setCveTipoTrata($trataspersonascarpetasDto[$x]->getCveTipoTrata());
                                        $trataspersonasDto->setCveTrasportacion($trataspersonascarpetasDto[$x]->getCveTrasportacion());
                                        $trataspersonasDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $trataspersonasDto->setActivo("S");

                                        $trataspersonasDto = $trataspersonascarpetasDao->insertTrataspersonascarpetas($trataspersonasDto, $this->proveedor);
                                        if ($trataspersonasDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar las tratas de personas a la carpeta");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE TRATA DE PERSONAS");
                                            $error = true;
                                        } else {
                                            $logger->w_onError("**********ID DE TRATA DE PERSONAS: " . $trataspersonasDto[0]->getIdTrataPersonaCarpeta());
                                            $error = false;
                                            /*
                                             * Borrar logicamente el registro de trata de personas origen
                                             */
//                                            $trataPersonasTmp = new TrataspersonascarpetasDTO();
//                                            $trataPersonasTmp->setIdTrataPersonaCarpeta($trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
//                                            $trataPersonasTmp->setActivo("N");
//                                            $trataPersonasTmp = $trataspersonascarpetasDao->updateTrataspersonascarpetas($trataPersonasTmp, $this->proveedor);
//                                            if ($trataPersonasTmp != "") {
//                                                $error = false;
//                                                $logger->w_onError("**********ID DE TRATA DE PERSONAS BORRADO LOGICAMENTE: " . $trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
//                                            } else {
//                                                $error = true;
//                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE TRATA DE PERSONAS : " . $trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
//                                            }
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE TRATA DE PERSONAS");
                                }
                                //}
                                /*
                                 * Copiar datos de violencia de genero
                                 */
                                $logger->w_onError("**********COPIAR LOS DATOS DE VIOLENCIA DE GENERO");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                                $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $violenciadegenerocarpetasDto->setActivo("S");

                                $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                                $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $this->proveedor);

                                if ($violenciadegenerocarpetasDto != "") {
                                    for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x++) {
                                        $logger->w_onError("**********ID VIOLENCIA DE GENERO CARPETAS A COPIAR: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta() . " , " . $x);
                                        $violenciadegeneroDto = new ViolenciadegenerocarpetasDTO();
                                        $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                                        $violenciadegeneroDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $violenciadegeneroDto->setActivo("S");

                                        $violenciadegeneroDto = $violenciadegenerocarpetasDao->insertViolenciadegenerocarpetas($violenciadegeneroDto, $this->proveedor);

                                        if ($violenciadegeneroDto != "") {
                                            $logger->w_onError("**********SE INSERTA EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                            $error = false;

                                            /*
                                             * Copiar efectos del delito
                                             */
                                            $logger->w_onError("**********COPIAR LOS EFECTOS DEL DELITO");
                                            //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                            $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                                            $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                            $efectosofendidoscarpetasDto->setIdReferencia($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $efectosofendidoscarpetasDto->setActivo("S");
                                            $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                                            $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $this->proveedor);

                                            if ($efectosofendidoscarpetasDto != "") {
                                                for ($e = 0; $e < count($efectosofendidoscarpetasDto); $e++) {
                                                    $efectosofendidosDto = new EfectosofendidoscarpetasDTO();
                                                    $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$e]->getCveDetalleEfecto());
                                                    $efectosofendidosDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                                    $efectosofendidosDto->setIdReferencia($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $efectosofendidosDto->setOrigen($efectosofendidoscarpetasDto[$e]->getOrigen());
                                                    $efectosofendidosDto->setactivo("S");

                                                    $efectosofendidosDto = $efectosofendidoscarpetasDao->insertEfectosofendidoscarpetas($efectosofendidosDto, $this->proveedor);
                                                    if ($efectosofendidosDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los efectos de la victima a la carpeta");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS EFECTOS DE LA VICTIMA");
                                                        $error = true;
                                                    } else {
                                                        $logger->w_onError("**********ID DEL EFECTO DE LA VICTIMA INSERTADO: " . $efectosofendidosDto[0]->getIdEfectoOfendidoCarpeta());
                                                        $error = true;
//                                                        $efectoOfendidoTmp = new EfectosofendidoscarpetasDTO();
//                                                        $efectoOfendidoTmp->setIdEfectoOfendidoCarpeta($efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
//                                                        $efectoOfendidoTmp->setActivo("N");
//                                                        $efectoOfendidoTmp = $efectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($efectoOfendidoTmp, $this->proveedor);
//                                                        if ($efectoOfendidoTmp != "") {
//                                                            $error = false;
//                                                            $logger->w_onError("**********ID DEL EFECTO DE LA VICTIMA BORRADO LOGICAMENTE: " . $efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
//                                                        } else {
//                                                            $error = true;
//                                                            $logger->w_onError("**********OCURRIO UN ERRROR AL BORRAR LOGICAMENTE EL EFECTO DE LA VICTIMA : " . $efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
//                                                        }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN EFECTOS DE LA VICTIMA");
                                            }

                                            $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                            $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                                            $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                            $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $this->proveedor);

                                            if ($violenciahomicidiosdolososcarpetasDto != "") {
                                                for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y++) {
                                                    $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                                    $violenciahomicidiosdolososDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto[$y]->getCveHomicidioDoloso());
                                                    $violenciahomicidiosdolososDto->setActivo("S");

                                                    $violenciahomicidiosdolososDto = $violenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososDto, $this->proveedor);
                                                    if ($violenciahomicidiosdolososDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero homicidios dolosos a la solicitud");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososDto[0]->getIdViolenciaHomicidioDolosoCarpeta());
                                                        /*
                                                         * Eliminar el registro origen de violencia de genero homicidios dolosos
                                                         */
//                                                        $violenciaHomicidioDolosoTmp = new ViolenciahomicidiosdolososcarpetasDTO();
//                                                        $violenciaHomicidioDolosoTmp->setIdViolenciaHomicidioDolosoCarpeta($violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        $violenciaHomicidioDolosoTmp->setActivo("N");
//                                                        $violenciaHomicidioDolosoTmp = $violenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($violenciaHomicidioDolosoTmp, $this->proveedor);
//                                                        if ($violenciaHomicidioDolosoTmp != "") {
//                                                            $error = false;
//                                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        } else {
//                                                            $error = true;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS");
                                            }

                                            $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                            $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                            $violenciafactoressocialescarpetasDto->setActivo("S");

                                            $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                            $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                                            if ($violenciafactoressocialescarpetasDto != "") {
                                                for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y++) {
                                                    $violenciafactoressocialesDto = new ViolenciafactoressocialescarpetasDTO();
                                                    $violenciafactoressocialesDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciafactoressocialesDto->setActivo("S");
                                                    $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());

                                                    $violenciafactoressocialesDto = $violenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($violenciafactoressocialesDto, $this->proveedor);
                                                    if ($violenciafactoressocialesDto != "") {
                                                        $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialesDto[0]->getIdViolenciaFactorSocialCarpeta());
                                                        $error = false;
                                                        /*
                                                         * Borrar logicamente el registro origen de violencia factores sociales
                                                         */
//                                                        $violenciaFactorSocialTmp = new ViolenciafactoressocialescarpetasDTO();
//                                                        $violenciaFactorSocialTmp->setIdViolenciaFactorSocialCarpeta($violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        $violenciaFactorSocialTmp->setActivo("N");
//                                                        $violenciaFactorSocialTmp = $violenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($violenciaFactorSocialTmp, $this->proveedor);
//                                                        if ($violenciaFactorSocialTmp != "") {
//                                                            $error = false;
//                                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        } else {
//                                                            $error = true;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        }
                                                    } else {
                                                        $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero factor social a la carpeta judicial");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS REGISTROS DE VIOLENCIA DE GENERO FACTOR SOCIAL A LA CARPETA JUDICIAL");
                                                        $error = true;
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO FACTOR SOCIAL");
                                            }

                                            /*
                                             * Eliminar el registro origen de violencia de genero
                                             */
//                                            $violenciaDeGeneroTmp = new ViolenciadegenerocarpetasDTO();
//                                            $violenciaDeGeneroTmp->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            $violenciaDeGeneroTmp->setActivo("N");
//                                            $violenciaDeGeneroTmp = $violenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($violenciaDeGeneroTmp, $this->proveedor);
//                                            if ($violenciaDeGeneroTmp != "") {
//                                                $error = false;
//                                                $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            } else {
//                                                $error = true;
//                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            }
                                        } else {
                                            $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la carpeta");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                            $error = true;
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                }
                                //}

                                /*
                                 * Copiar hostigamiento y acoso sexual
                                 */
                                $logger->w_onError("**********COPIAR DATOS DE HOSTIGAMIENTO Y ACOSOS SEXUAL");
                                //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                $sexualescarpetasDto = new SexualescarpetasDTO();
                                $sexualescarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                $sexualescarpetasDto->setActivo("S");

                                $sexualescarpetasDao = new SexualescarpetasDAO();
                                $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $this->proveedor);

                                if ($sexualescarpetasDto != "") {
                                    for ($x = 0; $x < count($sexualescarpetasDto); $x++) {
                                        $sexualesDto = new SexualescarpetasDTO();
                                        $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                                        $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                                        $sexualesDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        $sexualesDto->setActivo("S");

                                        $sexualesDto = $sexualescarpetasDao->insertSexualescarpetas($sexualesDto, $this->proveedor);
                                        if ($sexualesDto != "") {
                                            $logger->w_onError("**********SE INSERTO EL REGISTRO DE SEXUALES CARPETAS CON ID: " . $sexualesDto[0]->getIdSexualCarpeta());
                                            $error = false;
                                            //Sexuales conductas
                                            $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                            $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            $sexualesconductascarpetasDto->setActivo("S");
                                            $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                            $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $this->proveedor);

                                            if ($sexualesconductascarpetasDto != "") {
                                                for ($y = 0; $y < count($sexualesconductascarpetasDto); $y++) {
                                                    $sexualesconductasDto = new SexualesconductascarpetasDTO();
                                                    $sexualesconductasDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                    $sexualesconductasDto->setActivo("S");
                                                    $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());

                                                    $sexualesconductasDto = $sexualesconductascarpetasDao->insertSexualesconductascarpetas($sexualesconductasDto, $this->proveedor);
                                                    if ($sexualesconductasDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA CONDUCTA SEXUAL A LA CARPETA");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTA EL REGISTRO DE CONDUCTAS SEXUALES CARPETAS CON ID: " . $sexualesconductasDto[0]->getIdSexualConductaCarpeta());

                                                        $detallesSexualesConductasCarpetasDto = new DetallessexualesconductascarpetasDTO();
                                                        $detallesSexualesConductasCarpetasDao = new DetallessexualesconductascarpetasDAO();
                                                        $detallesSexualesConductasCarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                        $detallesSexualesConductasCarpetasDto->setActivo("S");
                                                        $detallesSexualesConductasCarpetasDto = $detallesSexualesConductasCarpetasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasCarpetasDto, "", $this->proveedor);
                                                        if ($detallesSexualesConductasCarpetasDto != "") {
                                                            for ($d = 0; $d < count($detallesSexualesConductasCarpetasDto); $d++) {
                                                                $detallesSexualesConductasDto = new DetallessexualesconductascarpetasDTO();
                                                                $detallesSexualesConductasDto->setCveDetalleConducta($detallesSexualesConductasCarpetasDto[$d]->getCveDetalleConducta());
                                                                $detallesSexualesConductasDto->setIdSexualConductaCarpeta($sexualesconductasDto[0]->getIdSexualConductaCarpeta());
                                                                $detallesSexualesConductasDto->setActivo("S");

                                                                $detallesSexualesConductasDto = $detallesSexualesConductasCarpetasDao->insertDetallessexualesconductascarpetas($detallesSexualesConductasDto, $this->proveedor);
                                                                if ($detallesSexualesConductasDto != "") {
                                                                    $logger->w_onError("**********SE INSERTA EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasDto[0]->getIdDetalleSexualConductaCarpeta());
                                                                    $error = false;
                                                                    /*
                                                                     * Borrar logicamente el registro origen de detalle conductas sexuales carpetas
                                                                     */
//                                                                    $detalleSexualConductaTmp = new DetallessexualesconductascarpetasDTO();
//                                                                    $detalleSexualConductaTmp->setIdDetalleSexualConductaCarpeta($detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    $detalleSexualConductaTmp->setActivo("N");
//                                                                    $detalleSexualConductaTmp = $detallesSexualesConductasCarpetasDao->updateDetallessexualesconductascarpetas($detalleSexualConductaTmp, $this->proveedor);
//                                                                    if ($detalleSexualConductaTmp != "") {
//                                                                        $error = false;
//                                                                        $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    } else {
//                                                                        $error = true;
//                                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    }
                                                                } else {
                                                                    $msg[] = array("Ocurrio un error al copiar el detalle de conductas sexuales a la carpeta judicial");
                                                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DETALLE DE CONDUCTA SEXUAL A LA CARPETA");
                                                                    $error = true;
                                                                }
                                                            }
                                                        } else {
                                                            //No hay datos de detalles sexuales conductas
                                                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN REGISTROS DE DETALLE DE CONDUCTA SEXUAL");
                                                        }
                                                        /*
                                                         * Borrar el registro origen de sexuales conductas carpetas
                                                         */
//                                                        $sexualesConductasTmp = new SexualesconductascarpetasDTO();
//                                                        $sexualesConductasTmp->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
//                                                        $sexualesConductasTmp->setActivo("N");
//                                                        $sexualesConductasTmp = $sexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesConductasTmp, $this->proveedor);
//                                                        if ($sexualesConductasTmp != "") {
//                                                            $error = false;
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO SEXUALES CONDUCTAS CARPETAS CON ID : " . $sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
//                                                        } else {
//                                                            $error = true;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO SEXUALES CONDUCTAS CARPETAS CON ID : " . $sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
//                                                        }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE CONDUCTAS SEXUALES CARPETAS");
                                            }

                                            //Los testigos sexuales
                                            $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                            $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                            $testigossexualescarpetasDto->setActivo("S");
                                            $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                            $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $this->proveedor);

                                            if ($testigossexualescarpetasDto != "") {
                                                for ($y = 0; $y < count($testigossexualescarpetasDto); $y++) {
                                                    $testigossexualesDto = new TestigossexualescarpetasDTO();
                                                    $testigossexualesDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                    $testigossexualesDto->setPaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                                    $testigossexualesDto->setMaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                                    $testigossexualesDto->setNombre($testigossexualescarpetasDto[$y]->getNombre());
                                                    $testigossexualesDto->setCveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                                    $testigossexualesDto->setActivo("S");

                                                    $testigossexualesDto = $testigossexualescarpetasDao->insertTestigossexualescarpetas($testigossexualesDto, $this->proveedor);

                                                    if ($testigossexualesDto == "") {
                                                        $msg[] = array("Ocurrio un error al copiar los datos del testigo de acoso sexual");
                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL TESTIGO SEXUAL");
                                                        $error = true;
                                                    } else {
                                                        $error = false;
                                                        $logger->w_onError("**********SE INSERTA EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualesDto[0]->getIdTestigoSexualCarpeta());
//                                                        $testigoSexualTmp = new TestigossexualescarpetasDTO();
//                                                        $testigoSexualTmp->setIdTestigoSexualCarpeta($testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
//                                                        $testigoSexualTmp->setActivo("N");
//                                                        $testigoSexualTmp = $testigossexualescarpetasDao->updateTestigossexualescarpetas($testigoSexualTmp, $this->proveedor);
//                                                        if ($testigoSexualTmp != "") {
//                                                            $error = false;
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
//                                                        } else {
//                                                            $error = true;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
//                                                        }
                                                    }
                                                }
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE TESTIGOS SEXUALES");
                                            }

                                            /*
                                             * Borrar logicamente el registro origen de sexuales carpetas
                                             */
//                                            $sexualesTmp = new SexualescarpetasDTO();
//                                            $sexualesTmp->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                            $sexualesTmp->setActivo("N");
//                                            $sexualesTmp = $sexualescarpetasDao->updateSexualescarpetas($sexualesTmp, $this->proveedor);
//                                            if ($sexualesTmp != "") {
//                                                $error = false;
//                                                $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                            } else {
//                                                $error = true;
//                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                            }
                                        } else {
                                            $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL ACOSO Y HOSTIGAMIENTO SEXUAL");
                                            $error = true;
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE CONDUCTAS SEXUALES");
                                }
                                //}
//                                $impofedelTmp = new ImpofedelcarpetasDTO();
//                                $impofedelTmp->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
//                                $impofedelTmp->setActivo("N");
//                                $impofedelTmp = $impofedelcarpetasDao->updateImpofedelcarpetas($impofedelTmp, $this->proveedor);
//                                if ($impofedelTmp != "") {
//                                    $error = false;
//                                    $logger->w_onError("**********SE BORRA LOGICAMENTE LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedel->getIdImpOfeDelCarpeta());
//                                } else {
//                                    $error = true;
//                                    $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedel->getIdImpOfeDelCarpeta());
//                                }
                            }
                        } else {
                            $msg[] = array("Error la refencia base no tiene relacion impofedel carpetas");
                            $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO TIENE RELACION IMPOFEDEL CARPETAS");
                            $error = true;
                        }
                        if ($error) {
                            $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE LA COPIA DE DATOS, TERMINA EL PROCESO");
                            break;
                        }
                    }//termina el ciclo foreach  
                    //termina el if de consulta de imputados carpetas
                } else {
                    $error = true;
                    $msg[] = array("No se encontraron imputados activos en la carpeta judicial solicitada");
                    $logger->w_onError("**********NO SE ENCONTRARON IMPUTADOS ACTIVOS EN LA CARPETA JUDICIAL SOLICITADA");
                }
                /*
                 * Actualizar el numero de imputados, ofendidos y delitos de la nueva carpeta judicial
                 */
                $carpetasTmp = new CarpetasjudicialesDTO();
                $numImputados = count($imputadosCarpetas);
                $numOfendidos = count($ofendidosCarpetas);
                $numDelitos = count($delitosCarpetas);
                $carpetasTmp->setIdCarpetaJudicial($idCarpetaJudicial);
                $carpetasTmp->setNumDelitos($numDelitos);
                $carpetasTmp->setNumImputados($numImputados);
                $carpetasTmp->setNumOfendidos($numOfendidos);
                $carpetasTmp = $carpetasJudciialesDao->updateCarpetasjudiciales($carpetasTmp, $this->proveedor);
                if ($carpetasTmp != "") {
                    $error = false;
                    $logger->w_onError("**********SE ACTUALIZA EL NUMERO DE IMPUTADOS, DELITOS Y OFENDIDOS DE LA NUEVA CARPETA");
                    $logger->w_onError("**********NUMERO DE IMPUTADOS: " . $carpetasTmp[0]->getNumImputados());
                    $logger->w_onError("**********NUMERO DE OFENDIDOS: " . $carpetasTmp[0]->getNumOfendidos());
                    $logger->w_onError("**********NUMERO DE DELITOS: " . $carpetasTmp[0]->getNumDelitos());
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al actualizar el numero de imputados, delitos y ofendidos");
                    $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS, DELITOS Y OFENDIDOS DE LA NUEVA CARPETA");
                }
                /*
                 * Actualizar el numero de imputados, ofendidos y delitos de la carpeta
                 * judicial origen
                 */
                $imputadosOrigenDto = new ImputadoscarpetasDTO();
                $imputadosDao = new ImputadoscarpetasDAO();
                $imputadosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $imputadosOrigenDto->setActivo("S");
                $imputadosOrigenDto = $imputadosDao->selectImputadoscarpetas($imputadosOrigenDto, "", $this->proveedor);
                if ($imputadosOrigenDto != "") {
                    $numeroImputadosOrigen = count($imputadosOrigenDto);
                } else {
                    $numeroImputadosOrigen = 0;
                }
                $ofendidosOrigenDto = new OfendidoscarpetasDTO();
                $ofendidosDao = new OfendidoscarpetasDAO();
                $ofendidosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $ofendidosOrigenDto->setActivo("S");
                $ofendidosOrigenDto = $ofendidosDao->selectOfendidoscarpetas($ofendidosOrigenDto, "", $this->proveedor);
                if ($ofendidosOrigenDto != "") {
                    $numeroOfendidosOrigen = count($ofendidosOrigenDto);
                } else {
                    $numeroOfendidosOrigen = 0;
                }
                $delitosOrigenDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();
                $delitosOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
                $delitosOrigenDto->setActivo("S");
                $delitosOrigenDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosOrigenDto, "", $this->proveedor);
                if ($delitosOrigenDto != "") {
                    $numeroDelitosOrigen = count($delitosOrigenDto);
                } else {
                    $numeroDelitosOrigen = 0;
                }
//                $logger->w_onError("**********ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA ORIGEN: " . $carpetasDto[0]->getIdCarpetaJudicial());
//                $logger->w_onError("**********IMPUTADOS: " . $numeroImputadosOrigen);
//                $logger->w_onError("**********OFENDIDOS: " . $numeroOfendidosOrigen);
//                $logger->w_onError("**********DELITOS: " . $numeroDelitosOrigen);
//                $carpetaOrigenDto = new CarpetasjudicialesDTO();
//                $carpetasDao = new CarpetasjudicialesDAO();
//                $carpetaOrigenDto->setIdCarpetaJudicial($carpetasDto[0]->getIdCarpetaJudicial());
//                $carpetaOrigenDto->setNumImputados($numeroImputadosOrigen);
//                $carpetaOrigenDto->setNumOfendidos($numeroOfendidosOrigen);
//                $carpetaOrigenDto->setNumDelitos($numeroDelitosOrigen);
//                $carpetaOrigenDto = $carpetasDao->updateCarpetasjudiciales($carpetaOrigenDto, $this->proveedor);
//                if ($carpetaOrigenDto != "") {
//                    $error = false;
//                    $logger->w_onError("**********SE MODIFICA EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL : " . $carpetaOrigenDto[0]->getIdCarpetaJudicial());
//                    $logger->w_onError("**********NUM IMPUTADOS : " . $carpetaOrigenDto[0]->getNumImputados());
//                    $logger->w_onError("**********NUM OFENDIDOS : " . $carpetaOrigenDto[0]->getNumOfendidos());
//                    $logger->w_onError("**********NUM DELITOS : " . $carpetaOrigenDto[0]->getNumDelitos());
//                } else {
//                    $error = true;
//                    $msg[] = array("Ocurrio un error al modificar el numero de imputados, ofendidos y delitos de la carpeta judicial : " . $carpetasDto[0]->getIdCarpetaJudicial());
//                    $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL: " . $carpetasDto[0]->getIdCarpetaJudicial());
//                }
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al generar la nueva carpeta");
                $logger->w_onError("**********OCURRIO UN ERROR AL GENERAR LA NUEVA CARPETA");
            }
        } else {
            $error = true;
            $msg[] = array("Ocurrio un error al obtener datos de la carpeta judicial origen");
            $logger->w_onError("**********OCURRIO UN ERROR AL OBTENER DATOS DE LA CARPETA JUDICIAL ORIGEN");
        }
        /*
         * Verificar si el proceso se ejecut� correctamente para aplicar commit, o, en caso contrario aplicar rollback
         */
        if (!$error) {
            //aplicar commit
            $this->proveedor->execute("COMMIT");
            $logger->w_onError("**********LA COPIA DE DATOS TERMINA CORRECTAMENTE" . $error . " " . count($msg));
            $resultado = true;
        } else {
            //aplicar rollback
            $this->proveedor->execute("ROLLBACK");
            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS HACIA LA NUEVA CARPETA" . $error . " " . count($msg));
            $logger->w_onError("**********TERMINA LA TRANZACCION Y APLICAR ROLLBACK");
            $resultado = false;
        }
        return $resultado;
    }

    //********************************************** formulacion de imputacion *************************************

    private function obtenerCeresos() {
        $listaCeresos = "";
        $ceresosDTO = new CeresosDTO();
        $ceresosDTO->setActivo("S");
        $ceresos = new CeresosController();
        $infCeresos = $ceresos->selectCeresos($ceresosDTO);
        $totalCeresos = count($infCeresos);
        for ($i = 0; $i < $totalCeresos; $i++) {
            $listaCeresos .=$infCeresos[$i]->getDesCereso() . ",";
            $listaCeresos .=$infCeresos[$i]->getCveCereso() . ",";
        }
        return $listaCeresos;
    }

    public function getPaginasImputadosCarpeta($CarpetasjudicialesDto, $param, $cveCereso) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $sqlIntervalo = "";
        if ($param["fechaDesde"] != "") {
            $fechaInicio = explode("/", $param["fechaDesde"]);
            $fechaFinal = explode("/", $param["fechaHasta"]);
            $sqlIntervalo = " AND ic.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo.=" AND  ic.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        $campos = " count(ic.idImputadoCarpeta) as totalCount ";
        $orden = " cj , tblimputadoscarpetas ic,tblgeneros g, tbltiposcarpetas tc,tbljuzgados j, tblceresos c";
        $orden .= " WHERE ic.idCarpetaJudicial = cj.idCarpetaJudicial";
        $orden .= " AND  cj.cveTipoCarpeta = tc.cveTipoCarpeta";
        $orden .= " AND  cj.cveJuzgado = j.cveJuzgado";
        $orden .= " AND  c.cveCereso = ic.cveCereso";
        $orden .= " AND  ic.cveGenero = g.cveGenero";
        $orden .= " AND ic.cveCereso = $cveCereso";
        if ($CarpetasjudicialesDto->getCarpetaInv() != "") {
            $orden.=" AND cj.carpetaInv = '" . $CarpetasjudicialesDto->getCarpetaInv() . "'";
        }
        if ($CarpetasjudicialesDto->getNuc() != "") {
            $orden.=" AND cj.nuc = '" . $CarpetasjudicialesDto->getNuc() . "'";
        }
        $orden .= " AND cj.activo  ='S'";
        $orden .= " AND ic.activo  ='S'";
        $orden .= " AND tc.activo  ='S'";
        $orden .= " AND g.activo  ='S'";
        $orden .= " AND j.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        if ($sqlIntervalo != "") {
            $orden .= $sqlIntervalo;
        }
        $orden .= " GROUP BY ic.idImputadoCarpeta ";
        $CarpetasjudicialesDtoVacio = new CarpetasjudicialesDTO();
        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $param["paginacion"] = "false";
        $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDtoVacio, $orden, null, $param, $campos);
        $json = "";
        if ($carpetasjudicialesDto != "" && count($carpetasjudicialesDto) > 0) {
            $numTot = count($carpetasjudicialesDto);
            $Pages = (int) $numTot / $param["cantxPag"];
            $restoPages = $numTot % $param["cantxPag"];
            $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . $carpetasjudicialesDto[0]["totalCount"] . '",';
            $json .= '"data":[';
            $x = 1;
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
        }
        return $json;
    }

    public function getPaginasFormulacionImputacion($carpetasjudicialesDto, $param) {
        $consulta = $this->selectCarpetasjudiciales($carpetasjudicialesDto, null);
        $json = "";
        if (($consulta != "") && (count($consulta) > 0)) {
            $idCarpetaJudicial = $consulta[0]->getIdCarpetaJudicial();
            $campos = " count(iodc.idImpOfeDelCarpeta) as totalCount ";
            $orden = " iodc , tblimputadoscarpetas ic, tblofendidoscarpetas oc, tbldelitoscarpetas dc, tbldelitos d, tblmodalidades m, tblcomisiones c";
            $orden .= " WHERE iodc.idImputadoCarpeta = ic.idImputadoCarpeta";
            $orden .= " AND  iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta";
            $orden .= " AND  iodc.idDelitoCarpeta = dc.idDelitoCarpeta";
            $orden .= " AND  dc.cveDelito = d.cveDelito";
            $orden .= " AND  iodc.cveModalidad = m.cveModalidad";
            $orden .= " AND  iodc.cveComision = c.cveComision";
            $orden .= " AND iodc.activo  ='S'";
            $orden .= " AND ic.activo  ='S'";
            $orden .= " AND oc.activo  ='S'";
            $orden .= " AND dc.activo  ='S'";
            $orden .= " AND d.activo  ='S'";
            $orden .= " AND m.activo  ='S'";
            $orden .= " AND c.activo  ='S'";
            $orden .= " AND iodc.IdCarpetaJudicial = " . $idCarpetaJudicial;
            $param["paginacion"] = "false";
            $ImpofedelCarpetaDtoVacio = new ImpofedelcarpetasDTO();
            $ImpofedelCarpetaDao = new ImpofedelcarpetasDAO(); //($impofedelcarpetasDto, $orden = "", $proveedor = null, $param = null,$fields=null) 
            $ImpofedelCarpetaDaoS = $ImpofedelCarpetaDao->selectImpofedelcarpetas($ImpofedelCarpetaDtoVacio, $orden, null, $param, $campos);
            if ($ImpofedelCarpetaDaoS != "") {
                $json .= '{"type":"OK",';
                $json .= '"totalCount":"' . $ImpofedelCarpetaDaoS[0]["totalCount"] . '",';
                $json .= '"pagina":' . json_encode(utf8_encode($param["paginacion"]));
                $json .= "}";
            }
        }
        return $json;
    }

    public function selectCarpetasJudicialImpofedel($CarpetasjudicialesDto, $param) {
        $consulta = $this->selectCarpetasjudiciales($CarpetasjudicialesDto, null);
        $json = "";
        if (($consulta != "") && (count($consulta) > 0)) {
            $idCarpetaJudicial = $consulta[0]->getIdCarpetaJudicial();
            $campos = " iodc.idImpOfeDelCarpeta,
                ic.nombre as icnombre,
                ic.paterno as icpaterno,
                ic.materno as icmaterno,
                ic.nombreMoral as icnombreMoral,
                ic.cveTipoPersona as iccveTipoPersona,
                iodc.fechaDelito,
                oc.nombre as ocnombre,
                oc.paterno as ocpaterno,
                oc.materno as ocmaterno,
                oc.nombreMoral as ocnombreMoral,
                oc.cveTipoPersona as occveTipoPersona,
                d.desDelito,
                m.desModalidad,
                c.desComision ";
            $orden = " iodc , tblimputadoscarpetas ic, tblofendidoscarpetas oc, tbldelitoscarpetas dc, tbldelitos d, tblmodalidades m, tblcomisiones c";
            $orden .= " WHERE iodc.idImputadoCarpeta = ic.idImputadoCarpeta";
            $orden .= " AND  iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta";
            $orden .= " AND  iodc.idDelitoCarpeta = dc.idDelitoCarpeta";
            $orden .= " AND  dc.cveDelito = d.cveDelito";
            $orden .= " AND  iodc.cveModalidad = m.cveModalidad";
            $orden .= " AND  iodc.cveComision = c.cveComision";
            $orden .= " AND iodc.activo  ='S'";
            $orden .= " AND ic.activo  ='S'";
            $orden .= " AND oc.activo  ='S'";
            $orden .= " AND dc.activo  ='S'";
            $orden .= " AND d.activo  ='S'";
            $orden .= " AND m.activo  ='S'";
            $orden .= " AND c.activo  ='S'";
            $orden .= " AND iodc.IdCarpetaJudicial = " . $idCarpetaJudicial;
            $orden .= " GROUP BY iodc.idImpOfeDelCarpeta ";
            $ImpofedelCarpetaDtoVacio = new ImpofedelcarpetasDTO();
            $ImpofedelCarpetaDao = new ImpofedelcarpetasDAO(); //($impofedelcarpetasDto, $orden = "", $proveedor = null, $param = null,$fields=null) 
            $ImpofedelCarpetaDaoS = $ImpofedelCarpetaDao->selectImpofedelcarpetas($ImpofedelCarpetaDtoVacio, $orden, null, $param, $campos);
            if ($ImpofedelCarpetaDaoS != "") {
                $total = count($ImpofedelCarpetaDaoS);
                $json .= '{"type":"OK",';
                $json .= '"totalCount":"' . $total . '",';
                $json .= '"data":[';
                $x = 1;
                $validacion = new Validacion();
                foreach ($ImpofedelCarpetaDaoS as $registrosDto) {
                    $json .= "{";
                    $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($registrosDto["idImpOfeDelCarpeta"])) . ",";
                    $json .= '"icnombre":' . json_encode(utf8_encode($registrosDto["icnombre"])) . ",";
                    $json .= '"icpaterno":' . json_encode(utf8_encode($registrosDto["icpaterno"])) . ",";
                    $json .= '"icmaterno":' . json_encode(utf8_encode($registrosDto["icmaterno"])) . ",";
                    $json .= '"iccveTipoPersona":' . json_encode(utf8_encode($registrosDto["iccveTipoPersona"])) . ",";
                    $json .= '"icnombreMoral":' . json_encode(utf8_encode($registrosDto["icnombreMoral"])) . ",";
                    $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($idCarpetaJudicial)) . ",";
                    $json .= '"ocnombre":' . json_encode(utf8_encode($registrosDto["ocnombre"])) . ",";
                    $json .= '"ocpaterno":' . json_encode(utf8_encode($registrosDto["ocpaterno"])) . ",";
                    $json .= '"ocmaterno":' . json_encode(utf8_encode($registrosDto["ocmaterno"])) . ",";
                    $json .= '"occveTipoPersona":' . json_encode(utf8_encode($registrosDto["occveTipoPersona"])) . ",";
                    $json .= '"ocnombreMoral":' . json_encode(utf8_encode($registrosDto["ocnombreMoral"])) . ",";
                    $json .= '"desDelito":' . json_encode(utf8_encode($registrosDto["desDelito"])) . ",";
                    $json .= '"desModalidad":' . json_encode(utf8_encode($registrosDto["desModalidad"])) . ",";
                    $json .= '"desComision":' . json_encode(utf8_encode($registrosDto["desComision"])) . ",";
                    $json .= '"fechaDelito":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaDelito"])));
                    $json .= "}";
                    $x++;
                    if ($x <= $total) {
                        $json .= ",";
                    }
                }
                $json .= "],";
                $json .= '"numero":' . json_encode(utf8_encode($consulta[0]->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($consulta[0]->getAnio())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($consulta[0]->getCveJuzgado())) . ",";
                $json .= $this->tipoActuacion();
                //$json .= $this->comboJuzgadores();
                //$json .= $this->juzgado($CarpetasjudicialesDto->getCveJuzgado());
                //$json .= '"pagina":' . json_encode(utf8_encode($param["paginacion"])) . ",";
                //$json .= '"total":"' . $total . '"';
                $json .= "}";
            }
        }
        return $json;
    }

    public function combosTActuacionJuzgadores($carpetasjudicialesDto) {
        $json = '{"type":"OK",';
        $json .= $this->comboTiposFormulaciones() . ",";
        $json .= $this->tipoActuacion() . ",";
        $json .= $this->comboJuzgadores($carpetasjudicialesDto->getCveJuzgado());
        //$json .= $this->juzgado($carpetasjudicialesDto->getCveJuzgado());
        $json .= "}";
        return $json;
    }

    /* private function juzgado($cveJuzgado) {
      $JuzgadosDto = new JuzgadosDTO();
      $JuzgadosDto->setActivo("S");
      $JuzgadosDto->setCveJuzgado($cveJuzgado);
      $juzgadosDao = new JuzgadosDAO();
      $consulta = $juzgadosDao->selectJuzgados($JuzgadosDto);
      $total = 0;
      $json = '"totalJuzgados":"' . $total . '"';
      if ($consulta!="") {
      $total = count($consulta);
      $json = '"totalJuzgados":"' . $total . '",';
      $json .= '"datosJuzgados":[';
      $json .= "{";
      $json.='"cveJuzgado":' . json_encode(utf8_encode($cveJuzgado)) . ",";
      $json.='"desJuzgado":' . json_encode(utf8_encode($consulta[0]->getDesJuzgado()));
      $json .= "}]";
      }
      return $json;
      } */

    public function selectImputadosCarpeta($CarpetasjudicialesDto, $param, $cveCereso) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $sqlIntervalo = "";
        if ($param["fechaDesde"] != "") {
            $fechaInicio = explode("/", $param["fechaDesde"]);
            $fechaFinal = explode("/", $param["fechaHasta"]);
            $sqlIntervalo = " AND ic.fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo.=" AND  ic.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        $campos = " ic.idImputadoCarpeta,
                    ic.nombre, 
                    ic.paterno, 
                    ic.materno, 
                    ic.fechaImputacion,
                    ic.cveCereso,
                    cj.idCarpetaJudicial,
                    tc.desTipoCarpeta,
                    j.desJuzgado,
                    c.desCereso,
                    g.desGenero ";
        $orden = " cj , tblimputadoscarpetas ic,tblgeneros g, tbltiposcarpetas tc,tbljuzgados j, tblceresos c";
        $orden .= " WHERE ic.idCarpetaJudicial = cj.idCarpetaJudicial";
        $orden .= " AND  cj.cveTipoCarpeta = tc.cveTipoCarpeta";
        $orden .= " AND  cj.cveJuzgado = j.cveJuzgado";
        $orden .= " AND  c.cveCereso = ic.cveCereso";
        $orden .= " AND  ic.cveGenero = g.cveGenero";
        $orden .= " AND ic.cveCereso = $cveCereso";
        if ($CarpetasjudicialesDto->getCarpetaInv() != "") {
            $orden.=" AND cj.carpetaInv = '" . $CarpetasjudicialesDto->getCarpetaInv() . "'";
        }
        if ($CarpetasjudicialesDto->getNuc() != "") {
            $orden.=" AND cj.nuc = '" . $CarpetasjudicialesDto->getNuc() . "'";
        }
        $orden .= " AND cj.activo  ='S'";
        $orden .= " AND ic.activo  ='S'";
        $orden .= " AND tc.activo  ='S'";
        $orden .= " AND g.activo  ='S'";
        $orden .= " AND j.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        if ($sqlIntervalo != "") {
            $orden .= $sqlIntervalo;
        }
        $orden .= " GROUP BY ic.idImputadoCarpeta ";
        $CarpetasjudicialesDtoVacio = new CarpetasjudicialesDTO();
        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDtoVacio, $orden, null, $param, $campos);
        $json = "";
        if ($carpetasjudicialesDto != "" && count($carpetasjudicialesDto) > 0) {
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($carpetasjudicialesDto) . '",';
            $json .= '"data":[';
            $x = 1;
            $bandera = false;
            $validacion = new Validacion();
            foreach ($carpetasjudicialesDto as $cJudicialesDto) {
                $idImputadoCarpeta = $cJudicialesDto["idImputadoCarpeta"];
                $nombre = $cJudicialesDto["nombre"];
                $paterno = $cJudicialesDto["paterno"];
                $materno = $cJudicialesDto["materno"];
                $fechaImputacion = $cJudicialesDto["fechaImputacion"];
                $cveCereso = $cJudicialesDto["cveCereso"];
                $idCarpetaJudicial = $cJudicialesDto["idCarpetaJudicial"];
                $desTipoCarpeta = $cJudicialesDto["desTipoCarpeta"];
                $desJuzgado = $cJudicialesDto["desJuzgado"];
                $desGenero = $cJudicialesDto["desGenero"];
                $desCereso = $cJudicialesDto["desCereso"];
                $json .= "{";
                if (!$bandera) {
                    $bandera = true;
                    $json .= '"listaCeresos":' . json_encode(utf8_encode($this->obtenerCeresos())) . ",";
                }
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($idImputadoCarpeta)) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($nombre)) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($paterno)) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($materno)) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($idCarpetaJudicial)) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($cveCereso)) . ",";
                $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($desTipoCarpeta)) . ",";
                $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                $json .= '"desGenero":' . json_encode(utf8_encode($desGenero)) . ",";
                $json .= '"desCereso":' . json_encode(utf8_encode($desCereso)) . ",";
                $json .= '"fechaImputacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($fechaImputacion)));
                $json .= "}";
                $x++;
                if ($x <= count($carpetasjudicialesDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["paginacion"])) . ",";
            $json .= '"total":"' . count($carpetasjudicialesDto) . '"';
            $json .= "}";
        }
        return $json;
    }

    private function tipoActuacion($cveTipoActuacion = null) {
        $TiposactuacionesDto = new TiposactuacionesDTO();
        $TiposactuacionesDto->setActivo("S");
        if ($cveTipoActuacion == null) {
            $cveTipoActuacion = 19;
        }
        $TiposactuacionesDto->setCveTipoActuacion($cveTipoActuacion); //Formulacion de imputacion
        $tipoactuacionDao = new TiposactuacionesDAO();
        $consulta = $tipoactuacionDao->selectTiposactuaciones($TiposactuacionesDto);
        $total = 0;
        $json = '"totalTipoActuacion":"' . $total . '"';
        if ($consulta != "") {
            $total = count($consulta);
            $json = '"totalTipoActuacion":"' . $total . '",';
            $json .= '"datosTipoActuacion":[';
            $json .= "{";
            if ($total > 0) {
                $json.='"cveTipoActuacion":' . json_encode(utf8_encode($cveTipoActuacion)) . ",";
                $json.='"desTipoActuacion":' . json_encode(utf8_encode($consulta[0]->getDesTipoActuacion()));
            }
            $json .= "}]";
        }
        return $json;
    }

    private function comboJuzgadores($cveJuzgado) {
        $campos = " j.idJuzgador,
                    j.titulo,
                    j.nombre, 
                    j.paterno, 
                    j.materno";
        $orden = " j , tbljuzgadoresjuzgados jj";
        $orden .= " WHERE j.idJuzgador = jj.idJuzgador";
        $orden .= " AND  jj.cveJuzgado = " . $cveJuzgado; //$_SESSION["cveAdscripcion"];
        $orden .= " AND  jj.activo= 'S'";
        $orden .= " AND  j.activo = 'S'";
        $orden .= " ORDER BY j.paterno,j.materno,j.nombre ASC";
        $JuzgadoresDtoVacio = new JuzgadoresDTO();
        $juzgadoresDao = new JuzgadoresDAO();
        $Respuesta = $juzgadoresDao->selectJuzgadores($JuzgadoresDtoVacio, $orden, null, null, $campos);
        $total = 0;
        $json = '"totalJuzgadores":"' . $total . '"';
        if ($Respuesta != "") {
            $total = count($Respuesta);
            $json = '"totalJuzgadores":"' . $total . '",';
            $x = 1;
            $json .= '"comboJuzgadores":[';
            foreach ($Respuesta as $registro) {
                $json .= "{";
                $json.='"id":' . json_encode(utf8_encode($registro["idJuzgador"])) . ",";
                $json.='"titulo":' . json_encode(utf8_encode($registro["titulo"])) . ",";
                $json.='"nombre":' . json_encode(utf8_encode($registro["nombre"])) . ",";
                $json.='"paterno":' . json_encode(utf8_encode($registro["paterno"])) . ",";
                $json.='"materno":' . json_encode(utf8_encode($registro["materno"]));
                $json .= "}";
                $x++;
                if ($x <= $total) {
                    $json .= ",";
                }
            }
            $json .= "]";
        }
        return $json;
    }

    private function comboTiposFormulaciones() {
        $TiposformulacionesDto = new TiposformulacionesDTO();
        $TiposformulacionesDto->setActivo("S");
        $tiposFormulacionesDao = new TiposformulacionesDAO();
        $orden = " ORDER BY desTipoFormulacion ASC";
        $Consulta = $tiposFormulacionesDao->selectTiposformulaciones($TiposformulacionesDto, $orden);
        $total = 0;
        $json = '"totalTiposFormulaciones":"' . $total . '"';
        if ($Consulta != "") {
            $x = 1;
            $total = count($Consulta);
            $json = '"totalTiposFormulaciones":"' . $total . '",';
            $json .= '"comboTiposFormulaciones":[';
            foreach ($Consulta as $registro) {
                $json .= "{";
                $json.='"cveTipoFormulacion":' . json_encode(utf8_encode($registro->getCveTipoFormulacion())) . ",";
                $json.='"desTipoFormulacion":' . json_encode(utf8_encode($registro->getDesTipoFormulacion()));
                $json .= "}";
                $x++;
                if ($x <= $total) {
                    $json .= ",";
                }
            }
            $json .= "]";
        }
        return $json;
    }

    public function actualizarImputadoCarpeta($CarpetasjudicialesDto, $idImputadoCarpeta, $cveCereso) {
        $tranSaccionExitosa = true;
        $bitacoraController = new BitacoramovimientosController();
        $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
        $ImputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
        $ImputadoscarpetasDto->setActivo("S");
        $Imputadoscarpetas = new ImputadoscarpetasDAO();
        $ciC = $Imputadoscarpetas->selectImputadoscarpetas($ImputadoscarpetasDto);
        $ciC[0]->setActivo("N");
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $aiC = $Imputadoscarpetas->updateImputadoscarpetas($ciC[0], $proveedor);

        if ($aiC != "") {
            $bitacoraController->agregar(170, 'tblimputadoscarpetas', 'dto', $aiC, null, $proveedor);
        } else {
            $tranSaccionExitosa = false;
        }
        $ciC[0]->setActivo("S");
        $ciC[0]->setIdImputadoCarpeta("");
        $ciC[0]->setCveCereso($cveCereso);
        $ciC[0]->setFechaRegistro("");
        $ciC[0]->setFechaActualizacion("");

//        print_r($ciC);
        $iiC = $Imputadoscarpetas->insertImputadoscarpetas($ciC[0], $proveedor);
//        print_r($iiC);
        if ($iiC != "") {
            $bitacoraController->agregar(168, 'tblimputadoscarpetas', 'dto', $iiC, null, $proveedor);
        } else {
            $tranSaccionExitosa = false;
        }
        if (!$tranSaccionExitosa) {
            $proveedor->execute("ROLLBACK");
        } else {
            $proveedor->execute('COMMIT');
        }
        $proveedor->close();
        return $tranSaccionExitosa;
    }

    //********************************************** formulacion de imputacion *************************************
    //********************************************** formulacion de imputacion *************************************

    /*
     * Paginacion Carpetas judiciales
     */
    public function getPaginasCarpetas($carpetasjudicialesDto, $param) {
        $totalRegistros = 0;
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $juzgadosTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $cveDistrito = 0;
        $order = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        /*
         * Consultar los juzgados correspondientes a la adscripcion del usuario
         * logueado
         */
        $juzgadosTmp->setCveJuzgado($_SESSION["cveAdscripcion"]);
        $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
        if ($juzgadosTmp != "") {
            $cveDistrito = $juzgadosTmp[0]->getCveDistrito();
            $juzgados = new JuzgadosDTO();
            $juzgados->setCveDistrito($cveDistrito);
            $juzgados->setActivo("S");
            $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
            if ($juzgados != "") {
                foreach ($juzgados as $juzgado) {
                    $cveJuzgado[] = $juzgado->getCveJuzgado();
                }
                $cadenaJuzgados = implode(",", $cveJuzgado);
                $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ")";
            }
        }
        $carpetasjudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto, $order, null);
        if ($carpetasjudicialesDto != "") {
            $totalRegistros = count($carpetasjudicialesDto);
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

    //********************************************** Eliminar carpetas judiciales *************************************
    public function consultaEliminaCausa($carpetasjudicialesDto) {
        if (isset($_SESSION["cveAdscripcion"]) && $_SESSION["cveAdscripcion"] !== "") {
            $carpetasjudicialesDao = new CarpetasjudicialesDAO();
            $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
            $json = "";
            $i = 1;
            $o = 1;
            $h = 1;
            $carpetasjudicialesDto->setActivo("S");
            $rsCarpetasJudiciales = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto);

            if ($rsCarpetasJudiciales != "") {

                $imputadosDto = new ImputadoscarpetasDTO();
                $imputadosDao = new ImputadoscarpetasDAO();

                $domiciliosImputadosDto = new DomiciliosimputadoscarpetasDTO();
                $domiciliosImputadosDao = new DomiciliosimputadoscarpetasDAO();

                $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
                $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();

                $ofendidosDto = new OfendidoscarpetasDTO();
                $ofendidosDao = new OfendidoscarpetasDAO();

                $DomiciliosOfendidosDto = new DomiciliosofendidoscarpetasDTO();
                $DomiciliosOfendidosDao = new DomiciliosofendidoscarpetasDAO();

                $defensoresOfendidosDto = new DefensoresofendidoscarpetasDTO();
                $defensoresOfendidosDao = new DefensoresofendidoscarpetasDAO();

                $delitosDto = new DelitoscarpetasDTO();
                $delitosDao = new DelitoscarpetasDAO();

                $x = 1;
                $json .= '{"status":"ok",';
                $json .= '"totalCount":"' . count($rsCarpetasJudiciales) . '",';
                $json .= '"data":[';
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getIdCarpetaJudicial())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCveTipoCarpeta())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getAnio())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCveJuzgado())) . ",";
                $json .= '"carpetaInv":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCarpetaInv())) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNuc())) . ",";
                $json .= '"observaciones":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getObservaciones())) . ",";
                $json .= '"imputados":[';


                $imputadosDto->setIdCarpetaJudicial($rsCarpetasJudiciales[0]->getIdCarpetaJudicial());
                $imputadosDto->setActivo("S");
                $rsImputados = $imputadosDao->selectImputadoscarpetas($imputadosDto);
                if ($rsImputados != "") {
                    $i = 1;
                    $j = 1;
                    foreach ($rsImputados as $imputado) {
                        $json .= "{";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($imputado->getCveTipoPersona())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($imputado->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($imputado->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($imputado->getMaterno())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ",";
                        $json .= '"alias":' . json_encode(utf8_encode($imputado->getAlias())) . ",";
                        $json .= '"domicilio":[';
                        $domiciliosImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $domiciliosImputadosDto->setActivo("S");
                        $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosDto);
                        if ($rsDomiciliosimputadosDto != "") {
                            foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                                $json .= "{";
                                $json .= '"direccion":' . json_encode(utf8_encode($domicilioImputado->getDireccion())) . ",";
                                $json .= '"colonia":' . json_encode(utf8_encode($domicilioImputado->getColonia())) . ",";
                                $json .= '"numInterior":' . json_encode(utf8_encode($domicilioImputado->getNumInterior())) . ",";
                                $json .= '"numExterior":' . json_encode(utf8_encode($domicilioImputado->getNumExterior())) . ",";
                                $json .= '"cp":' . json_encode(utf8_encode($domicilioImputado->getCp())) . "";
                                $json .= "}";
                                $x ++;
                                if ($x <= count($rsDomiciliosimputadosDto)) {
                                    $json .= ",";
                                }
                            }
                        }

                        $json .= "],";
                        $json .= '"defensores":[';
                        $defensoresImputadosDto->setActivo("S");
                        $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                        $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                        if ($rsDefensoresImputadosDto != "") {
                            foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                                $json .= "{";
                                $json .= '"tipoDefensor":' . json_encode(utf8_encode($defensorImputados->getCveTipoDefensor())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($defensorImputados->getNombre())) . "";
                                $json .= "}";
                                $j ++;
                                if ($j <= count($rsDefensoresImputadosDto)) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                        $i ++;
                        if ($i <= count($rsImputados)) {
                            $json .= ",";
                        }
                    }
                }

                $json .= "],";
                $json .= '"ofendidos":[';
                $ofendidosDto->setIdCarpetaJudicial($rsCarpetasJudiciales[0]->getIdCarpetaJudicial());
                $ofendidosDto->setActivo("S");
                $ofendidosDto = $ofendidosDao->selectOfendidoscarpetas($ofendidosDto);
                if ($ofendidosDto != "") {
                    foreach ($ofendidosDto as $ofendido) {
                        $x = 1;
                        $j = 1;
                        $json .= "{";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ofendido->getCveTipoPersona())) . ",";
                        $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . ",";
                        $json .= '"domicilio":[';
                        $DomiciliosOfendidosDto->setActivo("S");
                        $DomiciliosOfendidosDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                        $rsDomiciliosOfendidosDto = $DomiciliosOfendidosDao->selectDomiciliosofendidoscarpetas($DomiciliosOfendidosDto);
                        if ($rsDomiciliosOfendidosDto != "") {
                            foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                                $json .= "{";
                                $json .= '"direccion":' . json_encode(utf8_encode($domicilioOfendido->getDireccion())) . ",";
                                $json .= '"colonia":' . json_encode(utf8_encode($domicilioOfendido->getColonia())) . ",";
                                $json .= '"numInterior":' . json_encode(utf8_encode($domicilioOfendido->getNumInterior())) . ",";
                                $json .= '"numExterior":' . json_encode(utf8_encode($domicilioOfendido->getNumExterior())) . ",";
                                $json .= '"cp":' . json_encode(utf8_encode($domicilioOfendido->getCp())) . "";
                                $json .= "}";
                                $x ++;
                                if ($x <= count($rsDomiciliosOfendidosDto)) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= "],";
                        $json .= '"defensores":[';
                        $defensoresOfendidosDto->setActivo("S");
                        $defensoresOfendidosDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                        $rsDefensoresOfendidosDto = $defensoresOfendidosDao->selectDefensoresofendidoscarpetas($defensoresOfendidosDto);
                        if ($rsDefensoresOfendidosDto != "") {
                            foreach ($rsDefensoresOfendidosDto as $defensor) {
                                $json .= "{";
                                $json .= '"tipoDefensor":' . json_encode(($defensor->getCveTipoDefensor())) . ",";
                                $json .= '"nombre":' . json_encode(utf8_encode($defensor->getNombre())) . "";
                                $json .= "}";
                                $j ++;
                                if ($j <= count($rsDefensoresOfendidosDto)) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                        $o ++;
                        if ($o <= count($ofendidosDto)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "],";
                $json .= '"delitos":[';


                $descDelitosDto = new DelitosDTO();
                $descDelitosDao = new DelitosDAO();


                $delitosDto->setIdCarpetaJudicial($rsCarpetasJudiciales[0]->getIdCarpetaJudicial());
                $delitosDto->setActivo("S");
                $rsDelitos = $delitosDao->selectDelitoscarpetas($delitosDto);
                if ($rsDelitos != "") {
                    foreach ($rsDelitos as $delito) {
                        $descDelitosDto->setCveDelito($delito->getCveDelito());
                        $rsDescDelitosDto = $descDelitosDao->selectDelitos($descDelitosDto);

                        if ($rsDescDelitosDto != "") {
                            $descDelito = $rsDescDelitosDto[0]->getDesDelito();
                        } else {
                            $descDelito = "";
                        }

                        $json .= "{";
                        $json .= '"delito":' . json_encode(utf8_encode($delito->getCveDelito())) . ",";
                        $json .= '"descDelito":' . json_encode(utf8_encode($descDelito)) . "";
                        $json .= "}";
                        $h ++;
                        if ($h <= count($rsDelitos)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= "]";
                $json .= "}]";
                $json .= "}";
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"msj":"No se encontraron resultados"}';
            }

            return $json;
        } else {
            $result = array("status" => "Fail", "msj" => "La sesion caduco. Inicie sesion de nuevo");
            return json_encode($result);
        }
    }

    public function eliminaCausa($carpetasjudicialesDto, $proveedor = null) {
        if (isset($_SESSION["cveAdscripcion"]) && $_SESSION["cveAdscripcion"] !== "") {
            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            $this->proveedor->execute("BEGIN");

            $activoBusca = "S"; //variable para hacer la busqueda em activo
            $activoElimina = "N"; //variable para inactivar los registros
            $error = false;
            $mensaje = "";
            $msg = array();

            $actuacionesDto = new ActuacionesDTO();
            $actuacionesDao = new ActuacionesDAO();

            //Se verifica que la carpeta judicial no cuente con actuaciones
            $actuacionesDto->setIdReferencia($carpetasjudicialesDto->getIdCarpetaJudicial());
            $actuacionesDto->setActivo("S");
            $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $this->proveedor);
            if ($actuacionesDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que cuenta con actuaciones";
                $error = true;
            }

            //Se verifica que la carpeta judicial no cuente con ordenes de aprehension
            $solicitudesOrdenesDto = new SolicitudesordenesDTO();
            $solicitudesOrdenesDao = new SolicitudesordenesDAO();
            $solicitudesOrdenesDto->setIdReferencia($carpetasjudicialesDto->getIdCarpetaJudicial());
            $solicitudesOrdenesDto = $solicitudesOrdenesDao->selectSolicitudesordenes($solicitudesOrdenesDto, "", $this->proveedor);
            if ($solicitudesOrdenesDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que cuenta con solicitud ordenes de aprehension";
                $error = true;
            }

            //Se verifica que la carpeta judicial no cuente con solicitud de cateos
            $solicitudesCateosDto = new SolicitudescateosDTO();
            $solicitudesCateosDao = new SolicitudescateosDAO();
            $solicitudesCateosDto->setIdReferencia($carpetasjudicialesDto->getIdCarpetaJudicial());
            $solicitudesCateosDto = $solicitudesCateosDao->selectSolicitudescateos($solicitudesCateosDto, "", "", $this->proveedor);
            if ($solicitudesCateosDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que cuenta con solicitud de cateo";
                $error = true;
            }
            //Se verifica que la carpeta judicial no cuente con toma de muestra
            $solicitudesMuestrasDto = new SolicitudesmuestrasDTO();
            $solicitudesMuestrasDao = new SolicitudesmuestrasDAO();
            $solicitudesMuestrasDto->setIdReferencia($carpetasjudicialesDto->getIdCarpetaJudicial());
            $solicitudesMuestrasDto = $solicitudesMuestrasDao->selectSolicitudesmuestras($solicitudesMuestrasDto, "", "", $this->proveedor);
            if ($solicitudesMuestrasDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que cuenta con solicitud de toma de muestras";
                $error = true;
            }
            //Se verifica que la carpeta judicial no sea padre en antecedesCarpetasJudiciales
            $antecedesCarpetasDao = new AntecedescarpetasDAO;
            $AuxAntecedesCarpetasDto = new AntecedescarpetasDTO;
            $AuxAntecedesCarpetasDto->setIdCarpetaPadre($carpetasjudicialesDto->getIdCarpetaJudicial());
            $AuxAntecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($AuxAntecedesCarpetasDto, "", "", $this->proveedor);
            if ($AuxAntecedesCarpetasDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que es carpeta padre";
                $error = true;
            }



            //Se verifica que la carpeta judicial no cuente con solicitudes de audiencias
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdReferencia($carpetasjudicialesDto->getIdCarpetaJudicial());
            $solicitudesAudienciasDto->setActivo("S");
            $solicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto, "", "", $this->proveedor);
            if ($solicitudesAudienciasDto != "") {
                $msg[] = "La causa no se puede eliminar, ya que cuenta con solicitud de audiencias";
                $error = true;
            }

            if (!$error) {

                //se elimina carpetas judiciales
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetasjudicialesDto->setActivo($activoElimina);
                $rsCarpetasjudicialesDto = $carpetasJudicialesDao->eliminaCarpetaJudicial($carpetasjudicialesDto, $this->proveedor);
                if ($rsCarpetasjudicialesDto == "") {
                    $msg[] = "No se pudo eliminar carpetasjudiciales";
                    $error = true;
                }
                //Se eliminan a los imputados carpetas
                $imputadosController = new ImputadoscarpetasController();
                $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                $imputadoscarpetasAuxDto = new ImputadoscarpetasDTO();
                $imputadoscarpetasDao = new ImputadoscarpetasDAO();

                //Se buscan imputados para poder eliminarlos
                $imputadoscarpetasDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
                $imputadoscarpetasDto->setActivo($activoBusca);
                $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);

                if ($imputadoscarpetasDto != "") {
                    foreach ($imputadoscarpetasDto as $imputadocarpeta) {
                        $imputadoscarpetasAuxDto->setIdImputadoCarpeta($imputadocarpeta->getIdImputadoCarpeta());
                        $rsimputadosController = $imputadosController->eliminaImputado($imputadoscarpetasAuxDto, $this->proveedor);
                        $rsImputadosController = (json_decode($rsimputadosController, true));
                        if ($rsImputadosController['status'] == 'Error') {
                            $msg[] = array($rsImputadosController['msj']);
                            $error = true;
                        }
                    }
                }
                //Se buscan ofendidos  para poder eliminarlos
                $ofendidosController = new OfendidoscarpetasController();
                $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                $ofendidoscarpetasAuxDto = new OfendidoscarpetasDTO();
                $ofendidoscarpetasDao = new OfendidoscarpetasDAO();

                $ofendidoscarpetasDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
                $ofendidoscarpetasDto->setActivo($activoBusca);
                $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
                if ($ofendidoscarpetasDto != "") {
                    foreach ($ofendidoscarpetasDto as $ofendidocarpeta) {
                        $ofendidoscarpetasAuxDto->setIdOfendidoCarpeta($ofendidocarpeta->getIdOfendidoCarpeta());
                        $rsofendidosController = $ofendidosController->eliminarOfendido($ofendidoscarpetasAuxDto, $this->proveedor);
//                    $resulofendidosController = (json_decode($rsofendidosController, true));
                        if ($rsofendidosController['status'] == 'Error') {
                            $msg[] = array($rsofendidosController['msj']);
                            $error = true;
                        }
                    }
                }

                //Se buscan delitos, de existir, se elimina delitos,  impofedelsolicitudes, violencia de genero
                $delitosController = new DelitoscarpetasController();
                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasAuxDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();

                $delitosCarpetasDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
                $delitosCarpetasDto->setActivo($activoBusca);
                $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                if ($delitosCarpetasDto != "") {
                    foreach ($delitosCarpetasDto as $delitoCarpeta) {
                        $delitosCarpetasAuxDto->setIdDelitoCarpeta($delitoCarpeta->getIdDelitoCarpeta());
                        $rsdelitosController = $delitosController->bajaDelitosCarpetasCausa($delitosCarpetasAuxDto, $this->proveedor);
                        if ($rsdelitosController['status'] == 'error') {
                            $msg[] = array($rsdelitosController['msj']);
                            $error = true;
                        }
                    }
                }

                ///Se elimina antecedescarpetas
                $antecedesCarpetasDto = new AntecedescarpetasDTO;
                $antecedesCarpetasAuxDto = new AntecedescarpetasDTO;


                $antecedesCarpetasDto->setIdCarpetaHija($carpetasjudicialesDto->getIdCarpetaJudicial());
                $antecedesCarpetasDto->setActivo("S");

                $antecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesCarpetasDto);
                if ($antecedesCarpetasDto != "") {
                    foreach ($antecedesCarpetasDto as $antecedesCarpeta) {
                        $antecedesCarpetasAuxDto->setIdAntecedeCarpeta($antecedesCarpeta->getIdAntecedeCarpeta());
                        $antecedesCarpetasAuxDto->setActivo("N");
                        $antecedes = $antecedesCarpetasDao->updateAntecedescarpetas($antecedesCarpetasAuxDto, $this->proveedor);
                        if ($antecedes == "") {
                            $msg[] = array("No se puede eliminar el antecede carpeta");
                            $error = true;
                        }
                    }
                }
            }////////////////Fin condicion


            if (!$error) {
                $this->proveedor->execute('COMMIT');
                $resultado = array("status" => "ok", "mensaje" => "SE ELIMINO LA CARPETA CORRECTAMENTE");

                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("316");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("SE ELIMINO LA CAUSA CON ID:" . $carpetasjudicialesDto->getIdCarpetaJudicial());
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                return json_encode($resultado);
            } else {
                $this->proveedor->execute('ROLLBACK');
                $resultado = array("status" => "error", "mensaje" => $msg);
                return json_encode($resultado);
            }
        } else {
            $result = array("status" => "error", "mensaje" => "La sesion caduco. Inicie sesion de nuevo");
            return json_encode($result);
        }
    }

    //********************************************** fin Eliminar carpetas judiciales *************************************

    /*
     * Metodo para radicar una nueva carpeta, recibe como parametro el objeto de 
     * tipo carpeta y el idCarpetaPadre para generar el regitro en antecedescarpetas
     */
    public function radicarCarpetaJudicial($carpetasJudicialesDto, $juzgadoresCarpetasDto, $incompetenciasDto, $param, $proveedor = null) {
//        print_r($carpetasJudicialesDto);
//        print_r($juzgadoresCarpetasDto);
//        print_r($param);
//        exit;
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $copiarDatos = false;
        $fechaActual = "";

        $anioActual = "";
        $numero = "";
        $anio = "";
        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['Anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        /*
         * Obtener la fecha del servidor de mysql
         */

        $carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        //var_dump($carpetasJudicialesDto);
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $listaResultados = array();
        //$fechaRadicacion = $validacion->normalToMysql($carpetasJudicialesDto->getFechaRadicacion());
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        /*
         * validar los datos enviados por el usuario
         */
        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveJuzgado())) {
            if ((int) $carpetasJudicialesDto->getCveJuzgado() <= 0) {
                $msg[] = array("El Juzgado es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El juzgado es requerido");
            $error = true;
        }

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveTipoCarpeta())) {
            if ((int) $carpetasJudicialesDto->getCveTipoCarpeta() <= 0) {
                $msg[] = array("El Tipo de Carpeta es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El Tipo de Carpeta es requerido");
            $error = true;
        }

        if ($validacion->num(0, 4, (int) $carpetasJudicialesDto->getNumero())) {
            if ((int) $carpetasJudicialesDto->getNumero() <= 0) {
                $msg[] = array("El numero de carpeta es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de carpeta es un campo requerido");
            $error = true;
        }
        if ($validacion->num(3, 4, (int) $carpetasJudicialesDto->getAnio())) {
            if ((int) $carpetasJudicialesDto->getAnio() <= 0) {
                $msg[] = array("El anio es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El anio es un campo requerido");
            $error = true;
        }


        if ((string) $carpetasJudicialesDto->getFechaRadicacion() == "") {
            $msg[] = array(utf8_encode("La fecha de radicaci�n es requerida"));
            $error = true;
        }

        if ((int) $carpetasJudicialesDto->getCveTipoCarpeta() >= 3) {
            if ( $carpetasJudicialesDto->getIncompetencia() == 'N' ) {
                if (array_key_exists("idCarpetaPadre", $param)) {
                    if ((int) $param['idCarpetaPadre'] <= 0) {
                        $msg[] = array("Se debe indicar una causa padre para radicar una causa de juicio o de ejecucion de sentencia");
                        $error = true;
                    }
                } else {
                    $msg[] = array("Se debe indicar una causa padre para radicar una causa de juicio o de ejecucion de sentencia");
                    $error = true;
                }
            } else {
                if ( (int)$incompetenciasDto->getCveTipoIncompetencia() == 1 ) {
                    if (array_key_exists("idCarpetaPadre", $param)) {
                        if ((int) $param['idCarpetaPadre'] <= 0) {
                            $msg[] = array("Se debe indicar una causa padre para radicar una causa de juicio o de ejecucion de sentencia");
                            $error = true;
                        }
                    } else {
                        $msg[] = array("Se debe indicar una causa padre para radicar una causa de juicio o de ejecucion de sentencia");
                        $error = true;
                    }
                }
            }
                
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumImputados())) {
            if ((int) $carpetasJudicialesDto->getNumImputados() <= 0) {
                $msg[] = array("El numero de imputados es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de imputados es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumOfendidos())) {
            if ((int) $carpetasJudicialesDto->getNumOfendidos() <= 0) {
                $msg[] = array("El numero de ofendidos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de ofendidos es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getNumDelitos())) {
            if ((int) $carpetasJudicialesDto->getNumDelitos() <= 0) {
                $msg[] = array("El numero de delitos es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El numero de delitos es un campo requerido");
            $error = true;
        }

        /* if (((int) $carpetasJudicialesDto->getCveTipoCarpeta() > 0) && ( (string) $carpetasJudicialesDto->getCveTipoCarpeta() != "")) {

          } else {
          if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getNuc())) {
          if ((string) $carpetasJudicialesDto->getNuc() == "") {
          $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
          $error = true;
          }
          } else {
          if ($validacion->textNum(1, 30, (string) $carpetasJudicialesDto->getCarpetaInv())) {
          if ((string) $carpetasJudicialesDto->getCarpetaInv() == "") {
          $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
          $error = true;
          }
          } else {
          $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
          $error = true;
          }
          }
          } */

        if ($validacion->num(0, 11, (int) $carpetasJudicialesDto->getCveConsignacionA())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacionA() <= 0) {
                $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo de Consignaciones acciones es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveConsignacion())) {
            if ((int) $carpetasJudicialesDto->getCveConsignacion() <= 0) {
                $msg[] = array("El tipo consignacion es requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El tipo consignacion es requerido");
            $error = true;
        }
        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEtapaProcesal())) {
            if ((int) $carpetasJudicialesDto->getCveEtapaProcesal() <= 0) {
                $msg[] = array("La etapa procesal es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("La etapa procesal es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $carpetasJudicialesDto->getCveEstatusCarpeta())) {
            if ((int) $carpetasJudicialesDto->getCveEstatusCarpeta() <= 0) {
                $msg[] = array("El estatus de carpeta judicial es un campo requerido");
                $error = true;
            }
        } else {
            $msg[] = array("El estatus de carpeta judicial es un campo requerido");
            $error = true;
        }
        if ( (int)$carpetasJudicialesDto->getCveTipoCarpeta() != 4 ) {
            if ( (int)$juzgadoresCarpetasDto->getIdJuzgador() <= 0 ) {
                $error = true;
                $msg[] = array('Debe indicar un juez propietario para la causa a radicar');
            }
        }
        
        if ( $carpetasJudicialesDto->getIncompetencia() == "S" ) {
            if ( $incompetenciasDto->getCveTipoIncompetencia() == "" ) {
                $error = true;
                $msg[] = array('El tipo de Juzgado Origen es requerido');
            } else {
                if ( (int)$incompetenciasDto->getCveTipoIncompetencia() == 1 ) {
                    if ( $incompetenciasDto->getCveJuzgadoOrigen() == "" ) {
                        $error = true;
                        $msg[] = array('El Juzgado Origen es requerido');
                    }
                    if ( $incompetenciasDto->getCveTipoCarpetaOrigen() == "" ) {
                        $error = true;
                        $msg[] = array('El Tipo de Carpeta origen es requerido');
                    }
                } else if ( (int)$incompetenciasDto->getCveTipoIncompetencia() > 1 ) {
                    if ( $incompetenciasDto->getOtroTipoCarpetaOrigen() == "" ) {
                        $error = true;
                        $msg[] = array('Capture el Tipo de Carpeta Origen');
                    }
                    if ( $incompetenciasDto->getOtroJuzgadoOrigen() == "" )  {
                        $error = true;
                        $msg[] = array('Capture el Tipo de juzgado Origen');
                    }
                }
            }
            if ( $incompetenciasDto->getNumero() == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Capture el n�mero de Carpeta Origen'));
            }
            if ( $incompetenciasDto->getAnio() == "" ) {
                $error = true;
                $msg[] = array(utf8_encode('Capture el a�o de la Carpeta Origen'));
            }
        }
        /*
         * Verificar que la carpeta judicial solicitada con el juzgado, tipo de carpeta
         * numero y anio, no este registrada en la base de datos, en caso de que ya exista
         * notificar al usuario
         */

        if (!$error) {
            $tmpCarpeta = new CarpetasjudicialesDTO();
            $tmpCarpeta->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
            $tmpCarpeta->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
            $tmpCarpeta->setNumero($carpetasJudicialesDto->getNumero());
            $tmpCarpeta->setAnio($carpetasJudicialesDto->getAnio());
            $tmpCarpeta->setActivo("S");

            $tmpCarpeta = $carpetasJudicialesDao->selectCarpetasjudiciales($tmpCarpeta, "", $this->proveedor);
            if ($tmpCarpeta != "") {
                $msg[] = array(utf8_encode("La carpeta judicial solicitada para el juzgado, numero y a�o ya existe, favor de verificar"));
                $error = true;
            } else {
                $error = false;
            }
        }
        
        /*
         * Validar que el numero y anio enviados por el usuario no sea mayor al numero
         * y anio de tblcontadores para el juzgado y tipo de carpeta enviados
         */
        if ( !$error ) {
            $contadoresDto = new ContadoresDTO();
            $contadoresDao = new ContadoresDAO();
            $contadoresDto->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
            $contadoresDto->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
            $contadoresDto->setActivo('S');
            $contadoresDto = $contadoresDao->selectContadores($contadoresDto, '', $this->proveedor);
            if ( $contadoresDto != "" ) {
                if (  ((int)$carpetasJudicialesDto->getAnio() == (int)$contadoresDto[0]->getAnio()) &&
                       ((int)$carpetasJudicialesDto->getNumero() > (int)$contadoresDto[0]->getNumero()) ) {
                    $error = true;
                    $txt = 'El n�mero y a�o de la carpeta solicitada: ' . $carpetasJudicialesDto->getNumero() . '/' . $carpetasJudicialesDto->getAnio() . ' no puede ser mayor al n�mero y a�o del contador actual: ' . $contadoresDto[0]->getNumero() . '/' . $contadoresDto[0]->getAnio();
                    $msg[] = array(utf8_encode($txt));
                } else {
                    $error = false;
                }
            } else {
                $error = true;
                $msg[] = array(utf8_encode('Ocurri� un error al obtener el contadore actual para el juzgado y tipo de carpeta requeridos'));
            }
        }
        
        if (!$error && count($msg) == 0) {
            /*
             * Guardar los datos de la nueva carpeta judicial
             */
            if ($param != null && $param['idCarpetaPadre'] != "") {
                $causaOrigen = new CarpetasjudicialesDTO();
                $causaOrigen->setIdCarpetaJudicial($param['idCarpetaPadre']);
                $causaOrigen = $carpetasJudicialesDao->selectCarpetasjudiciales($causaOrigen, "", $this->proveedor);
                if ($causaOrigen != "") {
                    $carpetasJudicialesDto->setCarpetaInv($causaOrigen[0]->getCarpetaInv());
                    $carpetasJudicialesDto->setNuc($causaOrigen[0]->getNuc());
                }
            } else {
                if ( $carpetasJudicialesDto->getIncompetencia() == 'S' && $param['idCarpetaPadre'] == "" ) {
                    $selectjuzgadoDto = new JuzgadosDTO();
                    $selectjuzgadoDto->setCveJuzgado($carpetasJudicialesDto->getCveJuzgado());
                    $selectjuzgadoDto->setSiglas('');
                    $selectjuzgado = new JuzgadosDAO;
                    $selectjuzgadores = $selectjuzgado->selectJuzgados($selectjuzgadoDto, "", $this->proveedor);
                    if ($selectjuzgadores != "") {
                        foreach ($selectjuzgadores as $rowjuz) {
                            $siglasJuzgado = $rowjuz->getSiglas();
                        }
                    }
                    $txtCarpetaInv = $carpetasJudicialesDto->getNumero() . "-" . $carpetasJudicialesDto->getAnio() . "-" . $siglasJuzgado;
                    $carpetasJudicialesDto->setCarpetaInv($txtCarpetaInv);
                    $carpetasJudicialesDto->setNuc($txtCarpetaInv);
                }
                
            }

            //$carpetasJudicialesDto->setFechaRadicacion($fechaRadicacion);
            $carpetasJudicialesDto->setAcumulado("N");
            $carpetasJudicialesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);

            $carpetasJudicialesDto = $carpetasJudicialesDao->insertCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
            if ($carpetasJudicialesDto != "") {
                $error = false;
                /*
                 * Cuando sea una causa de juicio o de sentencia, registrar en la tabla tblantecedescarpetas
                 * el registro de la carpeta padre envaida por el usuario y como idCarpetaHija el id
                 * de la carpeta radicada, esto solo si no se trata de una incompetencia
                 */
                if ( $carpetasJudicialesDto[0]->getIncompetencia() == 'N' ) {
                    if ((int) $carpetasJudicialesDto[0]->getCveTipoCarpeta() >= 3) {
                    
                        $antecedesCarpetasDto = new AntecedescarpetasDTO();
                        $antecedesCarpetasDto->setIdCarpetaPadre($param['idCarpetaPadre']);
                        $antecedesCarpetasDto->setIdCarpetaHija($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                        $antecedesCarpetasDto->setCveTipoCarpeta($carpetasJudicialesDto[0]->getCveTipoCarpeta());
                        $antecedesCarpetasDto->setActivo("S");

                        $antecedescarpetasDao = new AntecedescarpetasDAO();

                        $antecedesCarpetasDto = $antecedescarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $this->proveedor);
                        if ($antecedesCarpetasDto != "") {
                            $error = false;
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al guardar en antecedes carpetas");
                        }
                    }
                    
                    
                    /*
                     * Copiar los datos de la causa padre hacia la nueva causa, s�lo si se 
                     * cuentan con los datos de la carpeta origen
                     */
                    if (!$error) {
                        /*
                         * Consultar los imputados activos de la carpeta padre
                         */
                        $param['etapaProcesal'] = "N";
                        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
                        $imputadosCarpetasDto->setIdCarpetaJudicial($param['idCarpetaPadre']);
                        $imputadosCarpetasDto->setActivo("S");

                        $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
                        if ($imputadosCarpetasDto != "") {
                            foreach ($imputadosCarpetasDto as $imputado) {
                                $copiarDatos = $this->copiarCarpetasJudiciales($carpetasJudicialesDto[0], $imputado, $this->proveedor, $param);
                                if (!$copiarDatos) {
                                    $error = true;
                                }
                                if ($error) {
                                    break;
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array('La carpeta judicial de origen no tiene datos a copiar, favor de verificar');
                        }
                        
                    }
                } else {
                    /*
                     * Si es una incompetencia, insertar el registro en tblincompetencias
                     */
                    $incompetenciaDao = new IncompetenciasDAO();
                    $incompetenciasDto = $incompetenciaDao->insertIncompetencias($incompetenciasDto, $this->proveedor);
                    if ( $incompetenciasDto != "" ) {
                        $error = false;
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al agregar el registro de incompetencias'));
                    }
                    
                    if ( !$error ) {
                        if ( (int)$carpetasJudicialesDto[0]->getCveTipoIncompetencia() == 1 ) {
                            $param['etapaProcesal'] = "N";
                            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                            $imputadosCarpetasDao = new ImputadoscarpetasDAO();
                            $imputadosCarpetasDto->setIdCarpetaJudicial($param['idCarpetaPadre']);
                            $imputadosCarpetasDto->setActivo("S");

                            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
                            if ($imputadosCarpetasDto != "") {
                                foreach ($imputadosCarpetasDto as $imputado) {
                                    $copiarDatos = $this->copiarCarpetasJudiciales($carpetasJudicialesDto[0], $imputado, $this->proveedor, $param);
                                    if (!$copiarDatos) {
                                        $error = true;
                                    }
                                    if ($error) {
                                        break;
                                    }
                                }
                            } else {
                                
                                $error = true;
                                $msg[] = array('La carpeta judicial de origen no tiene datos a copiar, favor de verificar');
                                
                            }
                        } else {
                            
                            /*
                             * Si la carpeta no cuenta con datos a copiar se registran datos ACTUALIZAME
                             */
                            if ( $param['idCarpetaPadre'] != "" ) {
                              
                                $param['etapaProcesal'] = "N";
                                $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                                $imputadosCarpetasDao = new ImputadoscarpetasDAO();
                                $imputadosCarpetasDto->setIdCarpetaJudicial($param['idCarpetaPadre']);
                                $imputadosCarpetasDto->setActivo("S");

                                $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
                                if ($imputadosCarpetasDto != "") {
                                    foreach ($imputadosCarpetasDto as $imputado) {
                                        $copiarDatos = $this->copiarCarpetasJudiciales($carpetasJudicialesDto[0], $imputado, $this->proveedor, $param);
                                        if (!$copiarDatos) {
                                            $error = true;
                                        }
                                        if ($error) {
                                            break;
                                        }
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array('La carpeta judicial de origen no tiene datos a copiar, favor de verificar');
                                }
                                
                            } else {
                                
                                $generoimputadosDto = new ImputadoscarpetasDTO();
                                $generoimputadosDto->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $generoimputadosDto->setCveEtapaProcesal($carpetasJudicialesDto[0]->getCveEtapaProcesal());
                                $generoimputadosDto->setCveTipoDetencion(4);
                                $generoimputadosDto->setCveNivelInstruccion(11);
                                $generoimputadosDto->setCveEstadoCivil(3);
                                $generoimputadosDto->setCveEspanol(4);
                                $generoimputadosDto->setCveAlfabetismo(4);
                                $generoimputadosDto->setCveDialectoIndigena(3);
                                $generoimputadosDto->setCveTipoFamiliaLinguistica(15);
                                $generoimputadosDto->setCveOcupacion(15);
                                $generoimputadosDto->setCveInterprete(3);
                                $generoimputadosDto->setCveEstadoPsicofisico(6);
                                $generoimputadosDto->setCveCereso(1);
                                $generoimputadosDto->setCveTipoReincidencia(5);
                                $generoimputadosDto->setTieneSobreseimiento('N');
                                $generoimputadosDto->setActivo('S');
                                $generoimputadosDto->setCveTipoPersona(3);
                                $generoimputadosDto->setCvePaisNacimiento(119);
                                $generoimputadosDto->setCveGrupoEdnico(72);
                                $generoimputadosDto->setCveGenero(3);
                                $generoimputadosDto->setNombre('Actualizame');
                                $generoimputadosDto->setPaterno('Actualizame');
                                $generoimputadosDto->setMaterno('Actualizame');
                                $generoimputadosDto->setNombreMoral('Actualizame');
                                $generoimputadosDto->setEstadoNacimiento('Actualizame');
                                $generoimputadosDto->setcveEstadoNacimiento(15);
                                $generoimputadosDto->setMunicipioNacimiento('Actualizame');
                                $generoimputadosDto->setPersonaMoral('Actualizame');
                                $generoimputadosDto->setRfc('Actualizame');
                                $generoimputadosDto->setCurp('Actualizame');
                                $generoimputadosDto->setAlias('Actualizame');
                                $generoimputadosDto->setCveTipoReligion(8);
                                
                                $inputadosDao = new ImputadoscarpetasDAO;
                                $generoimputadosres = $inputadosDao->insertImputadoscarpetas($generoimputadosDto, $this->proveedor);
                                $generoimputadosDtoTmp = $generoimputadosres;
                                if ( $generoimputadosDtoTmp == "" ) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrri� un error al guardar los datos del imputado para la nueva carpeta'));
                                }
                                //genero ofendidos 

                                $generoOfendidosDto = new OfendidoscarpetasDTO();
                                $generoOfendidosDto->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $generoOfendidosDto->setActivo('S');
                                $generoOfendidosDto->setNombre('Actualizame');
                                $generoOfendidosDto->setPaterno('Actualizame');
                                $generoOfendidosDto->setMaterno('Actualizame');
                                $generoOfendidosDto->setNombreMoral('Actualizame');
                                $generoOfendidosDto->setEstadoNacimiento('Actualizame');
                                $generoOfendidosDto->setMunicipioNacimiento('Actualizame');
                                $generoOfendidosDto->setRfc('Actualizame');
                                $generoOfendidosDto->setCurp('Actualizame');
                                $generoOfendidosDto->setCvePaisNacimiento(119);
                                $generoOfendidosDto->setCveEstadoNacimiento(15);
                                $generoOfendidosDto->setCveEspanol(4);
                                $generoOfendidosDto->setCveNivelInstruccion(11);
                                $generoOfendidosDto->setCveEstadoCivil(3);
                                $generoOfendidosDto->setCveOcupacion(15);
                                $generoOfendidosDto->setCveTipoPersona(3);
                                $generoOfendidosDto->setCveDialectoIndigena(3);
                                $generoOfendidosDto->setCveTipoFamiliaLinguistica(15);
                                $generoOfendidosDto->setCveEstadoPsicofisico(6);
                                $generoOfendidosDto->setCveAlfabetismo(4);
                                $generoOfendidosDto->setCveInterprete(3);
                                $generoOfendidosDto->setCveOrdenProteccion(8);
                                $generoOfendidosDto->setCveVictimaDeLaDelincuenciaOrganizada(3);
                                $generoOfendidosDto->setCveVictimaDeViolenciaDeGenero(3);
                                $generoOfendidosDto->setCveVictimaDeTrata(3);
                                $generoOfendidosDto->setCveGrupoEdnico(72);
                                $generoOfendidosDto->setCveGenero(3);
                                $generoOfendidosDto->setCveVictimaDeAcoso(3);
                                $generoOfendidosDto->setCveTipoReligion(8);
                                $generoOfendidosDto->setCveTipoParte(2);

                                $OfendidosDao = new OfendidoscarpetasDAO();
                                $generoOfendidosres = $OfendidosDao->insertOfendidoscarpetas($generoOfendidosDto, $this->proveedor);
                                if ( $generoOfendidosres == "" ) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar los datos del ofendido para la nueva carpeta'));
                                }
                                $generoOfendidosDtoTmp = $generoOfendidosres;
                                $ofendidosDto = $generoOfendidosres;
                                //genero insert delitos carpeta
                                $delitosCarpetaDto = new DelitoscarpetasDTO();
                                $delitosCarpetaDto->setActivo('S');
                                $delitosCarpetaDto->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $delitosCarpetaDto->setCveDelito(134);

                                $delitosCarpetaDao = new DelitoscarpetasDAO();
                                $delitosCarpetares = $delitosCarpetaDao->insertDelitoscarpetas($delitosCarpetaDto, $this->proveedor);
                                if ( $delitosCarpetares == "" ) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar el delito para la nueva carpeta'));
                                }
                                $delitosCarpetaresDtoTmp = $delitosCarpetares;
                                $delitosDto = $delitosCarpetares;

                                //genero relacioanes imputados-delitos-ofendidos
                                $idImputadoCarpeta = '';
                                $idOfendidoCapeta = '';
                                $idDelitoCarpeta = '';
                                if ($generoimputadosres != "" & $generoOfendidosres != "" & $delitosCarpetares != "") {
                                    foreach ($generoimputadosres as $rowimp) {
                                        $idImputadoCarpeta = $rowimp->getIdImputadoCarpeta();
                                    }
                                    foreach ($generoOfendidosres as $rowofen) {
                                        $idOfendidoCapeta = $rowofen->getIdOfendidoCarpeta();
                                    }
                                    foreach ($delitosCarpetares as $rowdel) {
                                        $idDelitoCarpeta = $rowdel->getIdDelitoCarpeta();
                                    }
                                }
                                $generoRelacionesimpofedel = new ImpofedelcarpetasDTO();
                                $generoRelacionesimpofedel->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $generoRelacionesimpofedel->setIdImputadoCarpeta($idImputadoCarpeta);
                                $generoRelacionesimpofedel->setIdOfendidoCarpeta($idOfendidoCapeta);
                                $generoRelacionesimpofedel->setIdDelitoCarpeta($idDelitoCarpeta);
                                $generoRelacionesimpofedel->setDireccion('Actualizame');
                                $generoRelacionesimpofedel->setColonia('Actualizame');
                                $generoRelacionesimpofedel->setActivo('S');
                                $generoRelacionesimpofedel->setCveClasificacionDelito(4);
                                $generoRelacionesimpofedel->setCveRelacionImpOfe(10);
                                $generoRelacionesimpofedel->setCveClasificacionDelitoOrden(5);
                                $generoRelacionesimpofedel->setCveConsumacion(4);
                                $generoRelacionesimpofedel->setCveFormaAccion(4);
                                $generoRelacionesimpofedel->setCveModalidad(7);
                                $generoRelacionesimpofedel->setCveComision(4);
                                $generoRelacionesimpofedel->setCveConcurso(4);
                                $generoRelacionesimpofedel->setCveElementoComision(6);
                                $generoRelacionesimpofedel->setCveTerminacion(1);

                                $impofedelDao = new ImpofedelcarpetasDAO();
                                $generoRelacionesimpofedelres = $impofedelDao->insertImpofedelcarpetas($generoRelacionesimpofedel, $this->proveedor);
                                if ( $generoRelacionesimpofedelres == "" ) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar la relaci�n de imputados ofendidos y delitos para la nueva carpeta'));
                                }
                                $generorelacionesDtoTmp = $generoRelacionesimpofedelres;
                                
                                /*
                                 * Actualizar el numero de imputados ofendidos y delitos de la carpeta radicada
                                 */
                                $carpetaTmp = new CarpetasjudicialesDTO();
                                $carpetaTmp->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $carpetaTmp->setNumDelitos(1);
                                $carpetaTmp->setNumImputados(1);
                                $carpetaTmp->setNumOfendidos(1);
                                $carpetaDao = new CarpetasjudicialesDAO();
                                $carpetaTmp = $carpetaDao->updateCarpetasjudiciales($carpetaTmp, $this->proveedor);
                                if ( $carpetaTmp == "" ) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al actualizar los datos de imputados, ofendidos y delitos de la carpeta judicial'));
                                }
                            }
                        }
                    }
                    
                }
                
                
                if ( !$error ) {
                    /*
                     * insertar el registro de juzgadores carpetas
                     */
                    if ( (int)$carpetasJudicialesDto[0]->getCveTipoCarpeta() == 4 ) {
                        if (array_key_exists('idJuzgador', $param) ) {
                            for ( $x = 0; $x < count($param['idJuzgador']); $x++ ) {
                                $juzgadoresCarpetas = new JuzgadorescarpetasDTO();
                                $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
                                $juzgadoresCarpetas->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                                $juzgadoresCarpetas->setIdJuzgador($param['idJuzgador'][$x]);
                                $juzgadoresCarpetas->setActivo('S');
                                $juzgadoresCarpetas = $juzgadoresCarpetasDao->insertJuzgadorescarpetas($juzgadoresCarpetas, $this->proveedor);
                                if ( $juzgadoresCarpetas != "" ) {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar el registro del juez propietario de la causa radicada'));
                                }
                                if ( $error ) {
                                    break;
                                }
                            } 
                        } else {
                            $error = true;
                            $msg[] = array('No se recibieron datos del juez propietario para la causa solicitada');
                        }
                    } else {
                        if ( $juzgadoresCarpetasDto->getIdJuzgador() != "" ) {
                            $juzgadoresCarpetas = new JuzgadorescarpetasDTO();
                            $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
                            $juzgadoresCarpetas->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                            $juzgadoresCarpetas->setIdJuzgador($juzgadoresCarpetasDto->getIdJuzgador());
                            $juzgadoresCarpetas->setActivo('S');
                            $juzgadoresCarpetas = $juzgadoresCarpetasDao->insertJuzgadorescarpetas($juzgadoresCarpetas, $this->proveedor);
                            if ( $juzgadoresCarpetas != "" ) {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al guardar el registro del juez propietario de la causa radicada'));
                            }
                        } else {
                            $error = true;
                            $msg[] = array('No se recibieron datos del juez propietario, favor de verificar');
                        }

                    }
                    
                }
                
                $bitacora = new BitacoramovimientosController();
                $bitacoraCarpeta = $bitacora->agregar(253, 'Insercion tblicarpetasjudiciales', 'txt', serialize($carpetasJudicialesDto[0]), '', $this->proveedor);

                if (!count($bitacoraCarpeta)) {
                    $error = true;
                    $msg[] = array(utf8_encode("Error al guardar la acci�n del usuario en bitacora"));
                }
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al guardar los datos");
            }

            if (!$error) {
                $this->proveedor->execute("COMMIT");
                $resultado = array(
                    "idCarpetaJudicial"    => $carpetasJudicialesDto[0]->getIdCarpetaJudicial(),
                    "cveEtapaProcesal"     => $carpetasJudicialesDto[0]->getCveEtapaProcesal(),
                    "cveConsignacion"      => $carpetasJudicialesDto[0]->getCveConsignacion(),
                    "cveTipoCarpeta"       => $carpetasJudicialesDto[0]->getCveTipoCarpeta(),
                    "cveConsignacionA"     => $carpetasJudicialesDto[0]->getCveConsignacionA(),
                    "numero"               => $carpetasJudicialesDto[0]->getNumero(),
                    "anio"                 => $carpetasJudicialesDto[0]->getAnio(),
                    "fechaRadicacion"      => $carpetasJudicialesDto[0]->getFechaRadicacion(),
                    "fechaRegistro"        => $carpetasJudicialesDto[0]->getFechaRegistro(),
                    "fechaActualizacion"   => $carpetasJudicialesDto[0]->getFechaActualizacion(),
                    "activo"               => $carpetasJudicialesDto[0]->getActivo(),
                    "cveJuzgado"           => $carpetasJudicialesDto[0]->getCveJuzgado(),
                    "carpetaInv"           => utf8_encode($carpetasJudicialesDto[0]->getCarpetaInv()),
                    "nuc"                  => utf8_encode($carpetasJudicialesDto[0]->getNuc()),
                    "cveUsuario"           => $carpetasJudicialesDto[0]->getCveUsuario(),
                    "observaciones"        => utf8_encode($carpetasJudicialesDto[0]->getObservaciones()),
                    "numImputados"         => $carpetasJudicialesDto[0]->getNumImputados(),
                    "numOfendidos"         => $carpetasJudicialesDto[0]->getNumOfendidos(),
                    "numDelitos"           => $carpetasJudicialesDto[0]->getNumDelitos(),
                    "cveEstatusCarpeta"    => $carpetasJudicialesDto[0]->getCveEstatusCarpeta(),
                    "incompetencia"        => $carpetasJudicialesDto[0]->getIncompetencia(),
                    "cveTipoIncompetencia" => $carpetasJudicialesDto[0]->getCveTipoIncompetencia(),
                    "acumulado"            => $carpetasJudicialesDto[0]->getAcumulado(),
                    "numAcumulado"         => $carpetasJudicialesDto[0]->getNumAcumulado(),
                    "fechaTermino"         => $carpetasJudicialesDto[0]->getFechaTermino(),
                    "cveConclucion"        => $carpetasJudicialesDto[0]->getCveConclucion(),
                    "ponderacion"          => $carpetasJudicialesDto[0]->getPonderacion()
                );
                array_push($listaResultados, $resultado);
                $result = array(
                    "status"     => "Ok",
                    "totalCount" => count($listaResultados),
                    "resultado"  => $listaResultados,
                    "msj"        => "Datos guardados correctamente"
                );
                $result = ($result);
            } else {
                $this->proveedor->execute("ROLLBACK");
                $result = array(
                    "status"     => "Error",
                    "totalCount" => "0",
                    "msj"        => $msg);
                $result = ($result);
            }
        } else {
            /*
             * Ocurrio algun error en la validacion de datos
             */
            $result = array(
                "status"     => "Error",
                "totalCount" => "0",
                "msj"        => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    /*
     * metodo para copiar datos de una carpeta judicial a otra
     */

    public function copiarDatosCarpetaJudicial($carpetasJudicialesDto, $param, $proveedor = null) {
        //var_dump($carpetasJudicialesDto);
        //var_dump($param);
        //error_reporting(E_ALL);
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $copiarDatos = false;
        $fechaActual = "";
        $fechaRadicacion = "";
        $anioActual = "";
        $carpetaInvestigacion = "";
        $nuc = "";
        $this->proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS Anio");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['Anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        /*
         * Obtener la fecha del servidor de mysql
         */

        //$carpetasJudicialesDto = $this->validarCarpetasjudiciales($carpetasJudicialesDto);
        //var_dump($carpetasJudicialesDto);
        $error = false;
        $result = "";
        //$validacion = new Validacion();
        $msg = array();
        $listaResultados = array();
        $actualizarCarpeta = 0;
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        /*
         * validar los datos enviados por el usuario
         */

        if ((int) $carpetasJudicialesDto->getIdCarpetaJudicial() <= 0) {
            $msg[] = array(utf8_encode("No se seleccion� ninguna carpeta de origen para la copia de datos"));
            $error = true;
        }

        if (array_key_exists("idCarpetaJudicialDestino", $param)) {
            if ((int) $param['idCarpetaJudicialDestino'] <= 0) {
                $msg[] = array(utf8_encode('No se seleccion� ninguna carpeta destino para la copia de datos'));
                $error = true;
            }
        } else {
            $msg[] = array(utf8_encode('No se seleccion� ninguna carpeta destino para la copia de datos'));
            $error = true;
        }

        /*
         * COnsultar los datos de la carpeta judicial destino
         */
        $carpetaJudicialDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $carpetaJudicialDto->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
        $carpetaJudicialDto->setActivo('S');
        $carpetaJudicialDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaJudicialDto, "", $this->proveedor);

        if ($carpetaJudicialDto != "") {
            $error = false;
            $resultado = array(
                "idCarpetaJudicial"    => $carpetaJudicialDto[0]->getIdCarpetaJudicial(),
                "cveEtapaProcesal"     => $carpetaJudicialDto[0]->getCveEtapaProcesal(),
                "cveConsignacion"      => $carpetaJudicialDto[0]->getCveConsignacion(),
                "cveTipoCarpeta"       => $carpetaJudicialDto[0]->getCveTipoCarpeta(),
                "cveConsignacionA"     => $carpetaJudicialDto[0]->getCveConsignacionA(),
                "numero"               => $carpetaJudicialDto[0]->getNumero(),
                "anio"                 => $carpetaJudicialDto[0]->getAnio(),
                "fechaRadicacion"      => $carpetaJudicialDto[0]->getFechaRadicacion(),
                "fechaRegistro"        => $carpetaJudicialDto[0]->getFechaRegistro(),
                "fechaActualizacion"   => $carpetaJudicialDto[0]->getFechaActualizacion(),
                "activo"               => $carpetaJudicialDto[0]->getActivo(),
                "cveJuzgado"           => $carpetaJudicialDto[0]->getCveJuzgado(),
                "carpetaInv"           => utf8_encode($carpetaJudicialDto[0]->getCarpetaInv()),
                "nuc"                  => utf8_encode($carpetaJudicialDto[0]->getNuc()),
                "cveUsuario"           => $carpetaJudicialDto[0]->getCveUsuario(),
                "observaciones"        => utf8_encode($carpetaJudicialDto[0]->getObservaciones()),
                "numImputados"         => $carpetaJudicialDto[0]->getNumImputados(),
                "numOfendidos"         => $carpetaJudicialDto[0]->getNumOfendidos(),
                "numDelitos"           => $carpetaJudicialDto[0]->getNumDelitos(),
                "cveEstatusCarpeta"    => $carpetaJudicialDto[0]->getCveEstatusCarpeta(),
                "incompetencia"        => $carpetaJudicialDto[0]->getIncompetencia(),
                "cveTipoIncompetencia" => $carpetaJudicialDto[0]->getCveTipoIncompetencia(),
                "acumulado"            => $carpetaJudicialDto[0]->getAcumulado(),
                "numAcumulado"         => $carpetaJudicialDto[0]->getNumAcumulado(),
                "fechaTermino"         => $carpetaJudicialDto[0]->getFechaTermino(),
                "cveConclucion"        => $carpetaJudicialDto[0]->getCveConclucion(),
                "ponderacion"          => $carpetaJudicialDto[0]->getPonderacion()
            );
            array_push($listaResultados, $resultado);
        } else {
            $error = true;
            $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos de la carpeta destino'));
        }

        /*
         * Consultar los datos de la carpeta origen
         */
        $tmpCarpetaJudicialDto = new CarpetasjudicialesDTO();
        $tmpCarpetaJudicialDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
        $tmpCarpetaJudicialDto->setActivo('S');

        $tmpCarpetaJudicialDto = $carpetasJudicialesDao->selectCarpetasjudiciales($tmpCarpetaJudicialDto, "", $this->proveedor);
        if ($tmpCarpetaJudicialDto != "") {
            $error = false;
            $carpetaInvestigacion = $tmpCarpetaJudicialDto[0]->getCarpetaInv();
            $nuc = $tmpCarpetaJudicialDto[0]->getNuc();
        } else {
            $error = true;
            $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos de la carpeta judicial origen'));
        }

        if (!$error) {
            /*
             * Consultar si la carpeta judicial destino contiene datos actualizame
             * de ser as�, borrarlos logicamente
             */
            $imputadosDto = new ImputadoscarpetasDTO();
            $imputadosDao = new ImputadoscarpetasDAO();
            $imputadosController = new ImputadoscarpetasController();

            $imputadosDto->setIdCarpetaJudicial($carpetaJudicialDto[0]->getIdCarpetaJudicial());
            $imputadosDto->setActivo('S');
            $ordenImputados = " AND nombre LIKE '%actualizame%' AND paterno LIKE '%actualizame%' 
                                AND materno LIKE '%actualizame%' AND nombreMoral LIKE '%actualizame%'";
            $imputadosDto = $imputadosDao->selectImputadoscarpetas($imputadosDto, $ordenImputados, $this->proveedor);
            if ($imputadosDto != "") {
                foreach ($imputadosDto as $imputado) {
                    //eliminado logico de imputados con datos actualizame
                    $imputadoTmp = new ImputadoscarpetasDTO();
                    $imputadoTmp->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                    $imputadoTmp->setIdCarpetaJudicial($imputado->getIdCarpetaJudicial());
                    $imputadoTmp->setActivo("S");

                    $resultImputado = $imputadosController->eliminaImputado($imputadoTmp, $this->proveedor, $actualizarCarpeta);
                    $rsImputado = json_decode($resultImputado);
                    if ($rsImputado->status == 'Ok') {
                        $error = false;
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al borrar datos actualizame de imputados'));
                    }
                    if ($error) {
                        break;
                    }
                }
            }
        }
        /*
         * Consultar si hay ofendidos con datos actualizame para borrarlos logicamente
         */
        if (!$error) {
            $ofendidosDto = new OfendidoscarpetasDTO();
            $ofendidosDao = new OfendidoscarpetasDAO();
            $ofendidosController = new OfendidoscarpetasController();
            $ofendidosDto->setIdCarpetaJudicial($carpetaJudicialDto[0]->getIdCarpetaJudicial());
            $ofendidosDto->setActivo('S');
            $ordenOfendidos = " AND nombre LIKE'%actualizame%' AND paterno LIKE '%actualizame%' 
                                AND materno LIKE '%actualizame%' AND nombreMoral LIKE '%actualizame%'";
            $ofendidosDto = $ofendidosDao->selectOfendidoscarpetas($ofendidosDto, $ordenOfendidos, $this->proveedor);
            if ($ofendidosDto != "") {
                foreach ($ofendidosDto as $ofendido) {
                    $ofendidosTmp = new OfendidoscarpetasDTO();
                    $ofendidosTmp->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                    $ofendidosTmp->setIdCarpetaJudicial($ofendido->getIdCarpetaJudicial());
                    $ofendidosTmp->setActivo('S');

                    $resultOfendido = $ofendidosController->eliminarOfendido($ofendidosTmp, $this->proveedor, $actualizarCarpeta);
                    if ($resultOfendido['status'] == 'ok') {
                        $error = false;
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al borrar los datos actualizame de ofendidos'));
                    }
                    if ($error) {
                        break;
                    }
                }
            }
        }

        /*
         * Si no ha ocurrido ningun error, copiar los datos de la carpeta origen hacia
         * la carpeta destino
         */

        if (!$error) {
            $param['etapaProcesal'] = "N";
            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasDao = new ImputadoscarpetasDAO();
            $imputadosCarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
            $imputadosCarpetasDto->setActivo("S");

            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
            if ($imputadosCarpetasDto != "") {
                foreach ($imputadosCarpetasDto as $imputado) {
                    $copiarDatos = $this->copiarCarpetasJudiciales($carpetaJudicialDto[0], $imputado, $this->proveedor, $param);
                    if (!$copiarDatos) {
                        $error = true;
                    }
                    if ($error) {
                        break;
                    }
                }
            } else {
                $error = true;
                $msg[] = array('La carpeta judicial de origen no tiene datos a copiar, favor de verificar');
            }

            if (!$error) {
                /*
                 * Verificar si ya existe el registro de antecedescarpeta, si no existe
                 * insertarlo
                 */
                $antecedesTmp = new AntecedescarpetasDTO();
                $antecedesCarpetasDao = new AntecedescarpetasDAO();
                $antecedesTmp->setIdCarpetaHija($param['idCarpetaJudicialDestino']);
                $antecedesTmp->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                $antecedesTmp->setActivo('S');
                $antecedesTmp = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesTmp, "", $this->proveedor);
                if ($antecedesTmp == "") {
                    //el registro no existe, se procede a insertarlo

                    $antecedesCarpetasDto = new AntecedescarpetasDTO();
                    $antecedesCarpetasDto->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                    $antecedesCarpetasDto->setIdCarpetaHija($carpetaJudicialDto[0]->getIdCarpetaJudicial());
                    $antecedesCarpetasDto->setActivo('S');
                    $antecedesCarpetasDto->setCveTipoCarpeta($carpetaJudicialDto[0]->getCveTipoCarpeta());

                    $antecedesCarpetasDto = $antecedesCarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $this->proveedor);
                    if ($antecedesCarpetasDto != "") {
                        $error = false;
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al insertar el registro antecedes carpetas'));
                    }
                }

                /*
                 * Actualizar el numero de investigacion y nuc de la carpeta destino
                 * se copiar� numero de investigacion y nuc de la carpeta origen
                 */
                if ($nuc != "" && $carpetaInvestigacion != "") {
                    $tmpCarpeta = new CarpetasjudicialesDTO();
                    $tmpCarpeta->setIdCarpetaJudicial($carpetaJudicialDto[0]->getIdCarpetaJudicial());
                    $tmpCarpeta->setNuc($nuc);
                    $tmpCarpeta->setCarpetaInv($carpetaInvestigacion);
                    $tmpCarpeta->setActivo('S');
                    $tmpCarpeta = $carpetasJudicialesDao->updateCarpetasjudiciales($tmpCarpeta, $this->proveedor);
                    if ($tmpCarpeta == "") {
                        $error = true;
                        $msg[] = array(utf8_encode("Ocurri� un error al actualizar el n�mero de investigaci�n y NUC de la carpeta judicial destino"));
                    }
                }

                /*
                 * Guardar la accion en bitacora
                 */
                $bitacora = new BitacoramovimientosController();
                $bitacoraCarpeta = $bitacora->agregar(357, 'Modificacion tblicarpetasjudiciales', 'txt', serialize($carpetaJudicialDto[0]), '', $this->proveedor);

                if (!count($bitacoraCarpeta)) {
                    $error = true;
                    $msg[] = array(utf8_encode("Error al guardar la acci�n del usuario en bitacora"));
                }
            }
        }

        if (!$error) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                "status"     => "Ok",
                "totalCount" => count($listaResultados),
                "data"       => $listaResultados,
                "msj"        => "Datos guardados correctamente"
            );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                "status"     => "Error",
                "totalCount" => "0",
                "msj"        => $msg);
            $result = ($result);
        }

        return json_encode($result);
    }

    public function buscarPersonas($carpetasjudicialesDto, $param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $msg = array();
        $listaResultados = array();
        $personas = array();
        $result = array();
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto, "", $this->proveedor);
        if ($carpetasjudicialesDto != "") {
            /*
             * Consultar datos del tipo de persona enviada como parametro
             */
            if (array_key_exists('tipoPersona', $param)) {

                $tiposPersonasDao = new TipospersonasDAO();

                $generoDao = new GenerosDAO();

                if ((int) $param['tipoPersona'] == 1) {
                    /*
                     * S econsultan datos de imputados activos
                     */
                    $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                    $imputadosCarpetasDao = new ImputadoscarpetasDAO();

                    $imputadosCarpetasDto->setIdCarpetaJudicial($carpetasjudicialesDto[0]->getIdCarpetaJudicial());
                    $imputadosCarpetasDto->setActivo('S');
                    $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, " ORDER BY nombre, paterno, materno, nombreMoral", $this->proveedor);
                    if ($imputadosCarpetasDto != "") {
                        foreach ($imputadosCarpetasDto as $imputado) {
                            $tiposPersonasDto = new TipospersonasDTO();
                            $tiposPersonasDto->setCveTipoPersona($imputado->getCveTipoPersona());
                            $tiposPersonasDto->setActivo('S');
                            $rsTipoPersonas = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto, "", $this->proveedor);
                            if ($rsTipoPersonas != "") {
                                $tipoPersona = utf8_encode($rsTipoPersonas[0]->getDesTipoPersona());
                            } else {
                                $tipoPersona = "N/A";
                            }
                            $generoDto = new GenerosDTO();
                            $generoDto->setCveGenero($imputado->getCveGenero());
                            $generoDto->setActivo('S');
                            $rsGenero = $generoDao->selectGeneros($generoDto, "", $this->proveedor);
                            if ($rsGenero != "") {
                                $genero = utf8_encode($rsGenero[0]->getDesGenero());
                            } else {
                                $genero = "N/A";
                            }
                            $respuesta = array(
                                'tipoPersona' => $param['tipoPersona'],
                                'idCarpetaJudicial'   => $imputado->getIdCarpetaJudicial(),
                                'idImputadoCarpeta'   => $imputado->getIdImputadoCarpeta(),
                                'cveTipoPersona'      => $imputado->getCveTipoPersona(),
                                'cveEtapaProcesal'    => $imputado->getCveEtapaProcesal(),
                                'nombre'              => utf8_encode($imputado->getNombre()),
                                'paterno'             => utf8_encode($imputado->getPaterno()),
                                'materno'             => utf8_encode($imputado->getMaterno()),
                                'nombreMoral'         => utf8_encode($imputado->getNombreMoral()),
                                'desGenero'           => $genero,
                                'desTipoPersona'      => $tipoPersona,
                                'TienesobreSeimiento' => $imputado->getTieneSobreseimiento()
                            );
                            array_push($personas, $respuesta);
                        }
                    } else {
                        $error = true;
                        $msg[] = array("No se encontraron imputados activos para la carpeta judicial solicitada");
                    }
                } else if ((int) $param['tipoPersona'] == 2) {
                    /*
                     * Se consultan datos de ofendidos
                     */
                    $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
                    $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
                    $ofendidosCarpetasDto->setIdCarpetaJudicial($carpetasjudicialesDto[0]->getIdCarpetaJudicial());
                    $ofendidosCarpetasDto->setActivo('S');

                    $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, "", $this->proveedor);
                    if ($ofendidosCarpetasDto != "") {
                        foreach ($ofendidosCarpetasDto as $ofendido) {
                            $tiposPersonasDto = new TipospersonasDTO();
                            $tiposPersonasDto->setCveTipoPersona($ofendido->getCveTipoPersona());
                            $tiposPersonasDto->setActivo('S');
                            $rsTipoPersonas = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto, "", $this->proveedor);
                            if ($rsTipoPersonas != "") {
                                $tipoPersona = utf8_encode($rsTipoPersonas[0]->getDesTipoPersona());
                            } else {
                                $tipoPersona = "N/A";
                            }
                            $generoDto = new GenerosDTO();
                            $generoDto->setCveGenero($ofendido->getCveGenero());
                            $generoDto->setActivo('S');
                            $rsGenero = $generoDao->selectGeneros($generoDto, "", $this->proveedor);
                            if ($rsGenero != "") {
                                $genero = utf8_encode($rsGenero[0]->getDesGenero());
                            } else {
                                $genero = "N/A";
                            }
                            $respuesta = array(
                                'tipoPersona'       => $param['tipoPersona'],
                                'idCarpetaJudicial' => $ofendido->getIdCarpetaJudicial(),
                                'idOfendidoCarpeta' => $ofendido->getIdOfendidoCarpeta(),
                                'cveTipoPersona'    => $ofendido->getCveTipoPersona(),
                                'nombre'            => utf8_encode($ofendido->getNombre()),
                                'paterno'           => utf8_encode($ofendido->getPaterno()),
                                'materno'           => utf8_encode($ofendido->getMaterno()),
                                'nombreMoral'       => utf8_encode($ofendido->getNombreMoral()),
                                'desGenero'         => $genero,
                                'desTipoPersona'    => $tipoPersona
                            );
                            array_push($personas, $respuesta);
                        }
                    } else {
                        $error = true;
                        $msg[] = array('No se encontraron sujetos pasivos del delito activos para la carpeta judicial solicitada');
                    }
                }
            } else {
                $error = true;
                $msg[] = array('No se recibieron datos del tipo de persona a consultar');
            }
        } else {
            $error = true;
            $msg[] = array(utf8_encode('No se encontraron datos de la carpeta judicial solicitada'));
        }

        if (!$error) {
            $result = array(
                'estatus'    => 'ok',
                'totalCount' => count($personas),
                'data'       => $personas
            );
        } else {
            $result = array(
                'estatus'    => 'error',
                'totalCount' => '0',
                'msj'        => $msg
            );
        }
        return json_encode($result);
    }

}

?>