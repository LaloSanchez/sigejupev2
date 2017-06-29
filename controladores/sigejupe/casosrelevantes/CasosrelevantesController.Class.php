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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/personaautorizadas/PersonaautorizadasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/personasautorizadaselectronico/PersonasautorizadaselectronicoCliente.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
//Tipos de Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../tiposcarpetas/TiposcarpetasController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../tiposresoluciones/TiposresolucionesController.Class.php");    // para descripcion de la resolucion de la consulta de acuerdos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposresoluciones/TiposresolucionesDTO.Class.php");    // para descripcion de la relacion de la consulta de acuerdos
include_once(dirname(__FILE__) . "/../tiposnotificaciones/TiposnotificacionesController.Class.php");    // para descripcion de la resolucion de la consulta de acuerdos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposnotificaciones/TiposnotificacionesDTO.Class.php");    // para descripcion de la relacion de la consulta de acuerdos

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/certificaciones/CertificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/certificaciones/CertificacionesDAO.Class.php");

//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

//imputados carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

//webservice para tblJuzgados en GestiOn
include_once(dirname(__FILE__) . "/../../../webservice/cliente/juzgados/JuzgadoCliente.php");

//AutosImputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autosimputados/AutosimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autosimputados/AutosimputadosDAO.Class.php");

//AutosApelados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autosapelados/AutosapeladosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autosapelados/AutosapeladosDAO.Class.php");

//Medidas Cautelares
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/medidascautelares/MedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/medidascautelares/MedidascautelaresDAO.Class.php");

//Medidas Apeladas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/medidasapeladas/MedidasapeladasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/medidasapeladas/MedidasapeladasDAO.Class.php");

//Medidas ProtecciOn
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/medidasprotecciones/MedidasproteccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/medidasprotecciones/MedidasproteccionesDTO.Class.php");

//Ofendidos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");

//Medidas proteccion apeladas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/medidasproapeladas/MedidasproapeladasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/medidasproapeladas/MedidasproapeladasDAO.Class.php");

//Audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");

//Actas Audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actasaudiencias/ActasaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actasaudiencias/ActasaudienciasDTO.Class.php");

//Catalogo de Audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

//Imputados Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");

//Ofendidos Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");
//Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/promoventesactuaciones/PromoventesactuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/promoventesactuaciones/PromoventesactuacionesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesestatus/ActuacionesestatusController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatus/EstatusController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/../antecedesactuaciones/AntecedesactuacionesController.Class.php");    // relacionar entre actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposmedidascautelares/TiposmedidascautelaresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposmedidascautelares/TiposmedidascautelaresDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autoridadesemisoras/AutoridadesemisorasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoridadesemisoras/AutoridadesemisorasDTO.Class.php");

//imputados exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");

//sentidos resoluciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sentidosresoluciones/SentidosresolucionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sentidosresoluciones/SentidosresolucionesDAO.Class.php");

//Tipos Protecciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposprotecciones/TiposproteccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposprotecciones/TiposproteccionesDAO.Class.php");
//Comparecencias
//
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comparecencias/ComparecenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/comparecencias/ComparecenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comparecencias/ComparecenciasDTO.Class.php");
//Comparecencias personas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personascomparecencias/PersonascomparecenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personascomparecencias/PersonascomparecenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../personascomparecencias/PersonascomparecenciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/personal/PersonalCliente.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generos/GenerosController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossanciones/ImputadossancionesDAO.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoressentencias/JuzgadoressentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formulacionimputaciones/FormulacionimputacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
//Imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
//Ofendidos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
//Tipos de Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//Personas Notificar Tradicional
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personasnotificartradicional/PersonasnotificartradicionalDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personasnotificartradicional/PersonasnotificartradicionalDAO.Class.php");
//Defensores Imputados Carpetas 
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
//DefensoresOfendidos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
//Tipos Defensores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposdefensores/TiposdefensoresDAO.Class.php");
//Resoluciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposresoluciones/TiposresolucionesDAO.Class.php");

//Relacion Expediente Juzgado
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/relacionexpedientejuzgado/RelacionexpedientejuzgadoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/relacionexpedientejuzgado/RelacionexpedientejuzgadoDAO.Class.php");
//Personas Notificar
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personasnotificar/PersonasnotificarDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personasnotificar/PersonasnotificarDAO.Class.php");
//Tipos Partes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospartes/TipospartesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospartes/TipospartesDAO.Class.php");
//Antecedes Notificaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesnotificaciones/AntecedesnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesnotificaciones/AntecedesnotificacionesDAO.Class.php");
//Imputados exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");
//Ofendidos exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");
//Incompetencias 
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/incompetencias/IncompetenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/incompetencias/IncompetenciasDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/ImagenesController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");
//Documenteos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");

//error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

if (!isset($_SESSION)) {
    session_start();
}

class CasosrelevantesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarActuaciones($ActuacionesDto) {
        $ActuacionesDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getidActuacion()))));
        $ActuacionesDto->setnumActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getnumActuacion()))));
        $ActuacionesDto->setaniActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getaniActuacion()))));
        $ActuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoActuacion()))));
        $ActuacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getidReferencia()))));
        $ActuacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getnumero()))));
        $ActuacionesDto->setanio(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getanio()))));
        $ActuacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoCarpeta()))));
        $ActuacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveJuzgado()))));
        $ActuacionesDto->setsintesis(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getsintesis()))));
        $ActuacionesDto->setobservaciones((str_ireplace("'", "", trim($ActuacionesDto->getobservaciones()))));
        $ActuacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveUsuario()))));
        $ActuacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getactivo()))));
        $ActuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaRegistro()))));
        $ActuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaActualizacion()))));
        $ActuacionesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveEstado()))));
        $ActuacionesDto->setcveJuzgadoDestino(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveJuzgadoDestino()))));
        $ActuacionesDto->setjuzgadoDestino(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getjuzgadoDestino()))));
        $ActuacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoNotificacion()))));
        $ActuacionesDto->setcveTipoSentencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoSentencia()))));
        $ActuacionesDto->setcveTipoAuto(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoAuto()))));
        $ActuacionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoResolucion()))));
        $ActuacionesDto->setcveTipoOrden(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoOrden()))));
        $ActuacionesDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoProcedimiento()))));
        $ActuacionesDto->setfechaSentencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaSentencia()))));
        $ActuacionesDto->setfechaEjecutoria(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaEjecutoria()))));
        $ActuacionesDto->setIdJuzgadorAcuerdo(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getIdJuzgadorAcuerdo()))));

        return $ActuacionesDto;
    }

    public function updateActuacion($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $tmpActuacionesDTO = new ActuacionesDTO();
        //obtencion de los datos previos a la actualizacion
        $tmpActuacionesDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
        $tmpActuacionesDTO = $ActuacionesDao->selectActuaciones($tmpActuacionesDTO);
        //actualizacion
        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(29, 'tblactuaciones', 'dto', $ActuacionesDto, $tmpActuacionesDTO);
        return $ActuacionesDto;
    }

    public function obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor) {
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($cveJuzgado);
        $contadoresDto->setCveTipoActuacion($cveTipoActuacion);
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta("");
        //var_dump($contadoresDto);
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
        return $contadoresDto;
    }

    public function toText($string) {
        return json_encode(utf8_encode($string));
    }

//*******************************************************************************************//
//******************* funciones para formulario de Oficios version 14/01/2015 **********************************//

    public function obntenerContadorOficio($actuacionesDto) {

        $contadorCrl = new ContadoresController();

        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($actuacionesDto->getCveJuzgado());     // variable de seSion
        $contadoresDto->setCveTipoActuacion($actuacionesDto->getCveTipoActuacion()); // tipo de actuacion Oficios
        $contadoresDto->setAnio(date("Y"));
//$contadoresDto->setCveTipoCarpeta(1);

        $contadoresDto = $contadorCrl->selectContadores($contadoresDto);

//var_dump($contadoresDto)

        return $contadoresDto;
    }
    

    public function obtenerEstatusActuacion($ActuacionesDto, $cveEstatus, $proveedor) {

        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();

        $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
        $actEstatusDTO->setCveEstatus($cveEstatus);
        $actEstatusDTO->setActivo("S");

        $actEstatusDTO = $actEstatusCtrl->insertActuacionesestatus($actEstatusDTO, $proveedor);

        return $actEstatusDTO;
    }

    public function desactivarEstatusActuacion($ActuacionesDto, $cveEstatus, $proveedor) {

        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();
        $resultado = "";

        $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
        $actEstatusDTO->setActivo("S");
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
        $actEstatusDTO[0]->setActivo("N");

        $actEstatusDTOaux = $actEstatusCtrl->updateActuacionesestatus($actEstatusDTO[0], $proveedor); // por updateActuacionesestatus

        if ($actEstatusDTOaux != "") {
            $dtoToJson = new DtoToJson($actEstatusDTOaux);
            $resultado = $dtoToJson->toJson("estatus anterior");
        }

        return $resultado; // devuelve true si correcto y false si falla
    }
    

    public function getPaginasComparecencias($actuacionesDto, $param, $cveTipoParte) {
        //echo "*\n * getPaginas comparecencias Actuaciones controller *\n*";
        //var_dump($ActuacionesDto);
        $fechaInicio = explode("/", $param["fechaDesde"]);
        $fechaFinal = explode("/", $param["fechaHasta"]);
//        var_dump($fechaInicio);
//        var_dump($fechaFinal);
        $campos = " count(a.idActuacion) as totalCount ";
        $orden = " a , tblcomparecencias c, tblpersonascomparecencias pc ";
        $orden .= " WHERE ";
        $orden .= " a.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        $orden .= " AND pc.activo  ='S'";
        if ($fechaInicio[0] != "") {
            $orden .= " AND a.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $orden .= " AND  a.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        if ($actuacionesDto->getCveTipoCarpeta() != 0)
            $orden .= " AND a.cveTipoCarpeta = " . $actuacionesDto->getCveTipoCarpeta() . "";
        if ($actuacionesDto->getCveJuzgado() != "")
            $orden .= " AND a.cveJuzgado = " . $actuacionesDto->getCveJuzgado() . "";
        if ($actuacionesDto->getNumero() != "")
            $orden .= " AND  a.numero = " . $actuacionesDto->getNumero() . "";
        if ($actuacionesDto->getAnio() != "")
            $orden .= " AND a.anio = " . $actuacionesDto->getAnio() . "";
        if ($actuacionesDto->getCveTipoActuacion() != "")
            $orden .= " AND a.cveTipoActuacion = " . $actuacionesDto->getCveTipoActuacion() . "";
        $orden .= " AND a.idActuacion = c.idActuacion";
        $orden .= " AND c.idComparecencia = pc.idComparecencia";
        if ($cveTipoParte != "")
            $orden .= " AND pc.cveTipoParte = " . $cveTipoParte . "";

        $orden .= " GROUP BY pc.idComparecencia ";
        //var_dump($param);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = new ActuacionesDTO();
        //var_dump($actuacionesDto);
        $param["paginacion"] = "false";
//        unset($param);
        //var_dump($param);
        $JsonResponse = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $orden, null, $campos);
        //var_dump($JsonResponse);
        $numTot = count($JsonResponse);
        //var_dump($numTot);
//        if($JsonResponse != ""){
//            $datos = array("estatus" => "ok", "totalCount" => "", "pagina" => "", "total" => "", "mensaje" => "Resultados", "datos" => array("personas" => array()));
//        }else{
//            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
//        }
//        $numTot = count($ActuacionesDto);
//        var_dump($numTot);
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
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

        //var_dump($json);
        return $json;
    }

    public function getPaginas($ActuacionesDto, $param) {
        //print_r($param);
        //print_r($ActuacionesDto);
        $juzgadosTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $cveDistrito = 0;
        $order = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        /*
         * Consultar los juzgados correspondientes a la adscripcion del usuario
         * logueado
         */
        if ( $param["consultaDistrito"] == "S" ) {
            $juzgadosTmp->setCveJuzgado($_SESSION["cveAdscripcion"]);
            $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
            if ( $juzgadosTmp != "" ) {
                $cveDistrito = $juzgadosTmp[0]->getCveDistrito();
                $juzgados = new JuzgadosDTO();
                $juzgados->setCveDistrito($cveDistrito);
                $juzgados->setActivo("S");
                $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
                if ( $juzgados != "" ) {
                    foreach ( $juzgados as $juzgado ) {
                        $cveJuzgado[] = $juzgado->getCveJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $cveJuzgado);
                    $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ")  ";
                }
            } else {
                //$order .= " ORDER BY idActuacion DESC ";
            }
        } else {
            $juzgados = new JuzgadosDTO();
            $juzgados->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $juzgados->setCveInstancia($param["cveInstancia"]);
            $juzgados->setCveMateria($param["cveMateria"]);
            $juzgados->setCveRegion($param["cveRegion"]);
            $juzgados->setCveDistrito($param["cveDistrito"]);
            $juzgados->setActivo("S");
            $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
            if ( $juzgados != "" ) {
                foreach ( $juzgados as $juzgado ) {
                    $cveJuzgado[] = $juzgado->getCveJuzgado();
                }
                $cadenaJuzgados = implode(",", $cveJuzgado);
                $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ")  ";
            }
        }
        $casosRelevantesController = new CasosrelevantesController();
        if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
            $order .= " and fechaRegistro >= '" . $casosRelevantesController->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
            $order .= " and fechaRegistro <= '" . $casosRelevantesController->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
                
        }
        $order .= " ORDER BY idActuacion DESC ";
        //var_dump($order);
        $ActuacionesDao = new ActuacionesDAO();
        //$ActuacionesDto = $this->verificaCeros($ActuacionesDto);
//                                                     $actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null    
        $numTot = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $order, null, " count(idActuacion) as totalCount ");
//var_dump($numTot);
//        echo "[".."]";

        $Pages = (int) $numTot[0]["totalCount"] / $param["cantxPag"];
        $restoPages = $numTot[0]["totalCount"] % $param["cantxPag"];

        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0]['totalCount'] . '",';

        $json .= '"data":[';
        $x = 1;

        if ($totPages > 0) {
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
        } else {
            $json .= "]}";
        }
        return $json;
    }

    public function consultarOficios($ActuacionesDto, $param, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " ORDER BY idActuacion DESC ", $param, null);

        if ($ActuacionesDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($ActuacionesDto) . '",';
            $json .= '"data":[';
            $x = 1;

            foreach ($ActuacionesDto as $actuacionDto) {
                $tiposcarpeta = new TiposcarpetasController();
                $tiposcarpetasDTO = new TiposcarpetasDTO();
                $json .= "{";
                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacionDto->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacionDto->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacionDto->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoActuacion())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacionDto->getIdReferencia())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($actuacionDto->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($actuacionDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacionDto->getCveTipoCarpeta())) . ",";

                $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";

                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $json .= '"sintesis":' . json_encode(htmlentities($actuacionDto->getSintesis())) . ',';
                $json .= '"observaciones":' . json_encode(htmlentities($actuacionDto->getObservaciones())) . ',';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacionDto->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($actuacionDto->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($actuacionDto->getCveTipoResolucion())) . ",";
                if ($actuacionDto->getCveTipoResolucion() != "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolCtrl = new TiposresolucionesController();
                    $tipoResolDTO->setCveTipoResolucion($actuacionDto->getCveTipoResolucion());
                    $tipoResolDTO->setActivo("S");
                    $tipoResolDTO = $tipoResolCtrl->selectTiposresoluciones($tipoResolDTO);

                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion())) . ",";
                }
                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoNotificacion())) . ",";
                if ($actuacionDto->getCveTipoNotificacion() != "") {
                    $tipoNotifDTO = new TiposnotificacionesDTO();
                    $tipoNotifCtrl = new TiposnotificacionesController();
                    $tipoNotifDTO->setCveTipoNotificacion($actuacionDto->getCveTipoNotificacion());
                    $tipoNotifDTO->setActivo("S");
                    $tipoNotifDTO = $tipoNotifCtrl->selectTiposnotificaciones($tipoNotifDTO);

                    $json .= '"descTipoNotificacion":' . json_encode(utf8_encode($tipoNotifDTO[0]->getDesTipoNotificacion())) . ",";
                }
                // buscar estatus de actuacion
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();
                $actEstatusDTO->setIdActuacion($actuacionDto->getIdActuacion());
                $actEstatusDTO->setActivo("S");
                $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
                if ($actEstatusDTO != "") {
                    $json .= '"cveEstatus":' . json_encode(utf8_encode($actEstatusDTO[0]->getCveEstatus())) . ",";
                    // mostrar descripcion de estatus de actuacion
                    $estatusCtrl = new EstatusController();
                    $estatusDTO = new EstatusDTO();
                    $estatusDTO->setCveEstatus($actEstatusDTO[0]->getCveEstatus());
                    $estatusDTO = $estatusCtrl->selectEstatus($estatusDTO);
                    $json .= '"descEstatus":' . json_encode(utf8_encode($estatusDTO[0]->getDescEstatus())) . ",";
                } else {
                    $json .= '"cveEstatus": "",';
                    $json .= '"descEstatus": "",';
                }

                $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaRegistro()))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaActualizacion()))) . "";


                $json .= "}";
                $x++;
                if ($x <= count($ActuacionesDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($ActuacionesDto) . '"';
            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    public function verificaCeros($ActuacionesDto) {
        if ($ActuacionesDto->getCveTipoCarpeta() == "0") {
            $ActuacionesDto->setCveTipoCarpeta("");
        }
        if ($ActuacionesDto->getCveTipoNotificacion() == "0") {
            $ActuacionesDto->setCveTipoNotificacion("");
        }
        if ($ActuacionesDto->getCveTipoResolucion() == "0") {
            $ActuacionesDto->setCveTipoResolucion("");
        }

        return $ActuacionesDto;
    }

    public function muestraEstatusActuacion($ActuacionesDto, $proveedor = null) {
        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();
        $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
        $actEstatusDTO->setActivo("S");
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

        if ($actEstatusDTO != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($ActuacionesDto) . '",';
            $json .= '"data":[';
            $json .= "{";
            $json .= '"cveEstatus":' . json_encode(utf8_encode($actEstatusDTO[0]->getCveEstatus())) . ",";
            // mostrar descripcion de estatus de actuacion
            $estatusCtrl = new EstatusController();
            $estatusDTO = new EstatusDTO();
            $estatusDTO->setCveEstatus($actEstatusDTO[0]->getCveEstatus());
            $estatusDTO = $estatusCtrl->selectEstatus($estatusDTO);
            $json .= '"descEstatus":' . json_encode(utf8_encode($estatusDTO[0]->getDescEstatus())) . "";
            $json .= "}";
            $json .= "],";
            $json .= '"pagina":' . count($actEstatusDTO) . ",";
            $json .= '"total":"' . count($actEstatusDTO) . '"';
            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    public function buscaActuacionPadre($idActHija) {
        $antecedeActCtrl = new AntecedesactuacionesController();
        $antecedeActDTO = new AntecedesactuacionesDTO();
        $antecedeActDTO->setIdActuacionHija($idActHija);
        $antecedeActDTO->setActivo("S");
        $antecedeActDTO = $antecedeActCtrl->selectAntecedesactuaciones($antecedeActDTO);

        $actuacionDTO = "";

        if ($antecedeActDTO != "") {
            $ActuacionesDao = new ActuacionesDAO();
            $actuacionDTO = new ActuacionesDTO();

            $actuacionDTO->setIdActuacion($antecedeActDTO[0]->getIdActuacionPadre());
            $actuacionDTO = $ActuacionesDao->selectActuaciones($actuacionDTO);
        } else {
            return "";
        }

        return $actuacionDTO;
    }

    public function eliminaAntecede($ActuacionesDto, $proveedor) {
        $eliminado = false;

        $antecedeActCtrl = new AntecedesactuacionesController();
        $antecedeActDTO = new AntecedesactuacionesDTO();
        $antecedeActDTO->setIdActuacionHija($ActuacionesDto->getIdActuacion());
        $antecedeActDTO->setActivo("S");
        $antecedeActDTO = $antecedeActCtrl->selectAntecedesactuaciones($antecedeActDTO);

        $actuacionDTO = "";

        if ($antecedeActDTO != "") {
            // VERIFICAR TIPO DE ACTUACION, SI ES PROMOCION CAMBIAR ESTATUS DE LA PROMOCION Y ELIMNAR EL ANTECEDE
            $actuacionCtrl = new ActuacionesController();
            $actuacionDTO = new ActuacionesDTO();
            $actuacionDTO->setIdActuacion($antecedeActDTO[0]->getIdActuacionPadre());
            $actuacionDTO = $actuacionCtrl->selectActuaciones($actuacionDTO);

            if ($actuacionDTO != "") {
                // elimina antecede
                $antecedeActDTO[0]->setActivo("N");
                $antecedeActDTO = $antecedeActCtrl->updateAntecedesactuaciones($antecedeActDTO[0], $proveedor);

                if ($actuacionDTO[0]->getCveTipoActuacion() == "1") { // si es promocion cambiar estatus de promocion a REGISTRADA
                    $actEstatusCtrl = new ActuacionesestatusController();
                    $actEstatusDTO = new ActuacionesestatusDTO();

                    $actEstatusDTO->setIdActuacion($actuacionDTO[0]->getIdActuacion());
                    $actEstatusDTO->setCveEstatus(8); //promocion acordada
                    $actEstatusDTO->setActivo("S");
                    $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

                    $actEstatusDTO[0]->setCveEstatus(7); //promocion registrada
                    $actEstatusDTO[0]->setActivo("S");
                    $actEstatusDTO = $actEstatusCtrl->updateActuacionesestatus($actEstatusDTO[0]);

                    // actualizar fecha de actualizacion de la promcion
                    $ActuacionesDao = new ActuacionesDAO();
                    $ActuacionesDTOaux = new ActuacionesDTO();

                    $ActuacionesDTOaux->setIdActuacion($actuacionDTO[0]->getIdActuacion());
                    $ActuacionesDTOaux = $ActuacionesDao->selectActuaciones($ActuacionesDTOaux, $proveedor);
                    $ActuacionesDTOaux[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
//                                print_r($ActuacionesDTOaux);
                    $ActuacionesDTOaux = $ActuacionesDao->updateActuaciones($ActuacionesDTOaux[0], $proveedor);
                    // fin de actualizacion de la promcion
                    // desactiva estatus actuacion eliminada
                    $actEstatusCtrl2 = new ActuacionesestatusController();
                    $actEstatusDTO2 = new ActuacionesestatusDTO();
                    $actEstatusDTO2->setIdActuacion($ActuacionesDto->getIdActuacion());
                    $actEstatusDTO2->setActivo("S");
                    $actEstatusDTO2 = $actEstatusCtrl2->selectActuacionesestatus($actEstatusDTO2, $proveedor);

                    $actEstatusDTO2[0]->setActivo("N");
                    $actEstatusDTO2 = $actEstatusCtrl2->updateActuacionesestatus($actEstatusDTO2[0], $proveedor);
                    // fin desactiva estatus actuacion eliminada
                    if ($actEstatusDTO != "" && $ActuacionesDTOaux != "" && $actEstatusDTO2 != "") {
                        $eliminado = true;
                    }
                } else {// desactiva estaus de actuacion
                    $actEstatusCtrl = new ActuacionesestatusController();
                    $actEstatusDTO = new ActuacionesestatusDTO();
                    $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
                    $actEstatusDTO->setActivo("S");
                    $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

                    $actEstatusDTO[0]->setActivo("N");
                    $actEstatusDTO = $actEstatusCtrl->updateActuacionesestatus($actEstatusDTO[0]);

                    if ($actEstatusDTO != "") {
                        $eliminado = true;
                    }
                }
            }
        } else {
            // desactiva estaus
            $actEstatusCtrl = new ActuacionesestatusController();
            $actEstatusDTO = new ActuacionesestatusDTO();
            $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
            $actEstatusDTO->setActivo("S");
            $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

            $actEstatusDTO[0]->setActivo("N");
            $actEstatusDTO = $actEstatusCtrl->updateActuacionesestatus($actEstatusDTO[0]);

            if ($actEstatusDTO != "") {
                $eliminado = true;
            }

            return $eliminado;
        }

        return $eliminado;
    }
    

    public function getSalas() {
        $juzgados = new JuzgadoCliente();
        return $juzgados->getJuzgadoInstancia('14,17');
    }


    public function tipoCarpeta($ActuacionesDto) {
        $carpeta = $ActuacionesDto->getCveTipoCarpeta();
        $idReferencia = 0;
        if ($carpeta == 7) { //exhorto
            $ExhortosDTO = new ExhortosDTO();
            $ExhortosDAO = new ExhortosDAO();
            $ExhortosDTO->setNumExhorto($ActuacionesDto->getNumero());
            $ExhortosDTO->setAniExhorto($ActuacionesDto->getAnio());
            $ExhortosDTO->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ExhortosDTO->setActivo('S');
            $ExhortosDTO = $ExhortosDAO->selectExhortos($ExhortosDTO);
            if ($ExhortosDTO != '') {
                $idReferencia = $ExhortosDTO[0]->getIdExhorto();
            }
        } else { //carpeta judicial
            $CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
            $CarpetasjudicialesDTO->setNumero($ActuacionesDto->getNumero());
            $CarpetasjudicialesDTO->setAnio($ActuacionesDto->getAnio());
            $CarpetasjudicialesDTO->setCveTipoCarpeta($ActuacionesDto->getCveTipoCarpeta());
            $CarpetasjudicialesDTO->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $CarpetasjudicialesDTO->setActivo($ActuacionesDto->getActivo());
            $CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasjudicialesDTO);
            if ($CarpetasjudicialesDTO != '') {
                $idReferencia = $CarpetasjudicialesDTO[0]->getIdCarpetaJudicial();
            }
        }
        return $idReferencia;
    }

    
    /**
     * FunciOn para transformar el formato de salida o entrada, segUn sea el caso
     * @param date|datetime $fechaEntrada Opciones: AAAA-MM-DD | AAAA-MM-DD HH:MM:SS | DD/MM/AAAA | DD/MM/AAAA HH:MM:SSS Es la fecha de entrada
     * @param text $fechaEntrada Opciones: fecha | fechaHora Es el formato en que se recibe la fecha
     * @param text $formatoSalida Opciones: pjem | mysql Corresponde al formato de salida. pjem: DD/MM/AAAA | DD/MM/AAA HH:MM:SS, mysql: AAAA-MM-DD | AAAA-MM-DD HH:MM:SS
     */
    public function formatoFecha($fechaEntrada, $tipo, $formatoSalida, $tipoSalida) {
        $fechaEntrada = ( $fechaEntrada != '' ) ? $fechaEntrada : '0000-00-00 00:00:00';
        $formatoSalida = ( $formatoSalida == 'pjem') ? 'pjem' : 'mysql';
        $tipo = ( $tipo == 'fecha' ) ? 'fecha' : 'fechaHora';
        $tipoSalida = ( $tipoSalida == 'fecha') ? 'fecha' : 'fechaHora';
        $delimitador = ( $formatoSalida == 'mysql' ) ? array('origen' => '/', 'destino' => '-') : array('origen' => '-', 'destino' => '/');
        $fechaSalida = '';
        if ($tipo == 'fecha') {
            $tmpFecha = explode($delimitador['origen'], $fechaEntrada);
            $fechaSalida = $tmpFecha[2] . $delimitador['destino'] . $tmpFecha[1] . $delimitador['destino'] . $tmpFecha[0];
            if ($tipoSalida == 'fechaHora') {
                $fechaSalida .= ' 00:00:00';
            }
        } elseif ($tipo == 'fechaHora') {
            $tmpCompleto = explode(' ', $fechaEntrada);
            $tmpFecha = explode($delimitador['origen'], $tmpCompleto[0]);
            $fechaSalida = $tmpFecha[2] . $delimitador['destino'] . $tmpFecha[1] . $delimitador['destino'] . $tmpFecha[0];
            if ($tipoSalida == 'fechaHora') {
                $fechaSalida .= ' ' . $tmpCompleto[1];
            }
        }
        return $fechaSalida;
    }

    
    public function generaCorreo($cedula, $nombrePersona, $fecha, $subject, $strCuerpoEmail) {
        include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
        require_once(dirname(__FILE__) . "/../../../tribunal/correo/PHPMailer/class.phpmailer.php" );

        $objDatCorreo = $subject;
        $mail = new PHPMailer(true);
        $mail->IsSMTP();  // telling the class to use SMTP     
        $mail->SMTPSecure = "";
        $mail->SMTPAuth = "";

//        $mail->SMTPSecure = "ssl";
//        $mail->SMTPAuth = true;
//        $mail->Username = "notificacion.electronica";
//        $mail->Password = "electronica2014";
//        $mail->CharSet = "iso-8859-1"; //UTF-8
//        $mail->Host = "10.22.151.70"; // SMTP server
//        $mail->SetFrom("notificacion.electronica@mail3.pjedomex.gob.mx", 'Notificacion Electronica');
//        $mail->Port = "465";

        $mail->Username = "notificacion.electronica.penal";
        $mail->Password = "electronica2015";
        $mail->CharSet = "iso-8859-1"; //UTF-8
        $mail->Host = "10.22.157.26"; // SMTP server
        $mail->SetFrom("notificacion.electronica.penal@pjedomex.gob.mx", 'Notificacion Electronica');
        $mail->Port = "25";

        $mail->AddAddress($cedula . "@pjedomex.gob.mx");
        //$mail->AddAddress("tmp.fernanda.ortega@pjedomex.gob.mx");
//          $mail->AddAddress("julio.moreno@mail3.pjedomex.gob.mx");//!!!!!!!
        $mail->Subject = $objDatCorreo;
        $mail->AltBody = 'Para visualizar este mensaje utilice un visor compatible con HTML';

        /*

          $nombreZip = "Acuerdos";
          $zipname = '../../zip/' . $nombreZip . '.zip';
          $zip = new ZipArchive;
          $zip->open($zipname, ZipArchive::CREATE);
          foreach ($rutas as $file) {
          $rutaCompleta = explode("/", $file);
          $nombreArchivo = array_pop($rutaCompleta);

          $zip->addFile($file, $nombreArchivo);

          }
          $zip->close();

          $mail->AddAttachment($zipname); */


        $mail->IsHTML(true);
        $mail->MsgHTML($strCuerpoEmail);
        $mail->WordWrap = 50;
        $mensaje = "";

        $varSendMail = false;
        try {
            $exito = FALSE;
            $intentos = 0;
            $exito = $mail->Send();
            //
            if ($mail->ErrorInfo == "SMTP Error: Data not accepted") {
                $exito = true;
            }
        } catch (phpmailerException $e) {
            $varSendMail = false;
            // $mensaje .= " <p>Problemas al enviar el correo a: " . $cedula . "@mail3.pjedomex.gob.mx </p>" . " " . $nombrePersona;
            $mensaje .= " <p>Problemas al enviar el correo a: " . $cedula . "@pjedomex.gob.mx</p>" . " " . $nombrePersona;
        } catch (ErrorException $e) {
            $varSendMail = false;
            $mensaje .= " <p>Problemas al enviar el correo a: " . $cedula . "@pjedomex.gob.mx</p>" . " " . $nombrePersona;
        } catch (Exception $e) {
            $varSendMail = false;
            $mensaje .= " <p>Problemas al enviar el correo a: " . $cedula . "@pjedomex.gob.mx</p>" . " " . $nombrePersona;
        }

        return $exito;
    }

    
    //*********************** generar json **************************************************************

    public function generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo) {


        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();
//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {

        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " ORDER BY idActuacion DESC ", null, null);


        if ($ActuacionesDto != "") {
            $json = "";
            $json .= '{"type":"generaPdfFirma",';
            $json .= '"totalCount":"' . count($ActuacionesDto) . '",';

            $imagenesCtrl = new ImagenesController();
            $Arrayruta = $imagenesCtrl->insertaImagenGlogal($cveTipo, $ActuacionesDto[0]->getIdActuacion(), $cveTipoDocumento, null); // tipo se refiere a cualquier tipo de actuacion = 2 o carpeta = 1

            $json .= '"rutaDestino":"' . $Arrayruta["ruta"] . '",';
            $json .= '"idImagen":"' . $Arrayruta["idImagen"] . '",';

            foreach ($ActuacionesDto as $actuacionDto) {
                $tiposcarpeta = new TiposcarpetasController();
                $tiposcarpetasDTO = new TiposcarpetasDTO();

                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($actuacionDto->getIdReferencia())) . ",";
                $json .= '"numCarpeta":' . json_encode(utf8_encode($actuacionDto->getNumero())) . ",";
                $json .= '"anioCarpeta":' . json_encode(utf8_encode($actuacionDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacionDto->getCveTipoCarpeta())) . ",";

                $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";

                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacionDto->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacionDto->getNumActuacion())) . ",";
                $json .= '"anioActuacion":' . json_encode(utf8_encode($actuacionDto->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoActuacion())) . ",";

                if ($actuacionDto->getCveTipoActuacion() != "") {
                    $tiposActuacionesDAO = new TiposactuacionesDAO();
                    $tiposActuacionesDTO = new TiposactuacionesDTO();
                    $tiposActuacionesDTO->setCveTipoActuacion($actuacionDto->getCveTipoActuacion());
                    $tiposActuaciones = $tiposActuacionesDAO->selectTiposactuaciones($tiposActuacionesDTO);
//                    print_r($tiposActuaciones);
//                    $desTipoActuacion = $tiposActuaciones[0]->getdesTipoActuacion();
                    $json .= '"descTipoActuacion":' . json_encode(utf8_encode($tiposActuaciones[0]->getDesTipoActuacion())) . ",";
                }

                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($actuacionDto->getCveJuzgado());
                $juzgado = $juzgadosDao->selectJuzgados($juzgadosDto);
                $json .= '"descJuzgado":' . json_encode(utf8_encode($juzgado[0]->getdesJuzgado())) . ',';
                $json .= '"siglasJuzgados":' . json_encode(utf8_encode($juzgado[0]->getSiglas())) . ',';

//                $ActuacionesDto[0]->setCveJuzgado($juzgado[0]->getDesJuzgado());

                $json .= '"sintesis":' . json_encode(utf8_encode($actuacionDto->getSintesis())) . ',';
                $json .= '"texto":' . json_encode(html_entity_decode($actuacionDto->getObservaciones())) . ',';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacionDto->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($actuacionDto->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($actuacionDto->getCveTipoResolucion())) . ",";
                if ($actuacionDto->getCveTipoResolucion() != "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolCtrl = new TiposresolucionesController();
                    $tipoResolDTO->setCveTipoResolucion($actuacionDto->getCveTipoResolucion());
                    $tipoResolDTO->setActivo("S");
                    $tipoResolDTO = $tipoResolCtrl->selectTiposresoluciones($tipoResolDTO);

                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion())) . ",";
                }
                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoNotificacion())) . ",";
                if ($actuacionDto->getCveTipoNotificacion() != "") {
                    $tipoNotifDTO = new TiposnotificacionesDTO();
                    $tipoNotifCtrl = new TiposnotificacionesController();
                    $tipoNotifDTO->setCveTipoNotificacion($actuacionDto->getCveTipoNotificacion());
                    $tipoNotifDTO->setActivo("S");
                    $tipoNotifDTO = $tipoNotifCtrl->selectTiposnotificaciones($tipoNotifDTO);

                    $json .= '"descTipoNotificacion":' . json_encode(utf8_encode($tipoNotifDTO[0]->getDesTipoNotificacion())) . ",";
                }
                // buscar estatus de actuacion
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();
                $actEstatusDTO->setIdActuacion($actuacionDto->getIdActuacion());
                $actEstatusDTO->setActivo("S");
                $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
                if ($actEstatusDTO != "") {
                    $json .= '"cveEstatus":' . json_encode(utf8_encode($actEstatusDTO[0]->getCveEstatus())) . ",";
                    // mostrar descripcion de estatus de actuacion
                    $estatusCtrl = new EstatusController();
                    $estatusDTO = new EstatusDTO();
                    $estatusDTO->setCveEstatus($actEstatusDTO[0]->getCveEstatus());
                    $estatusDTO = $estatusCtrl->selectEstatus($estatusDTO);
                    $json .= '"descEstatus":' . json_encode(utf8_encode($estatusDTO[0]->getDescEstatus())) . ",";
                } else {
                    $json .= '"cveEstatus": "",';
                    $json .= '"descEstatus": "",';
                }

                $json .= '"fechaRegistro":' . json_encode(utf8_encode(($actuacionDto->getFechaRegistro()))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode(($actuacionDto->getFechaActualizacion()))) . ",";
            }

            $json .= '"firmantes":[';

//            foreach ($ActuacionesDto as $actuacionDto) {

            $json .= "{";
            $json .= '"nombre":"ilhuitemoc ricardo",';
            $json .= '"curp":"qwerty12345",';
            $json .= '"firma":"tVpEqgd-gxrdiN46kpZK6ZT6Hf8bJVJySIob1K1BUDYb9xAzkFtk1qTQEPVNGB",';
            $json .= '"fechaFirma":"' . date("Y-m-d") . '",';
            $json .= '"numEmpleado":"7512"';
            $json .= "}";

//            }
            $json .= "]";

            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    //*********************** generar json **************************************************************
    
    /*
     * Insertar casos relevantes
     */
    public function guardarCasosRelevantes($actuacionesDto, $param, $proveedor = null) {
        //var_dump($actuacionesDto);
        //error_reporting(E_ALL);
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        } else {
            $proveedor = $proveedor;
        }
        $error = false;
        $msg = "";
        //$result = array();
        $listaResultados = array();
        $fechaActual = "";
        $anioActual = "";
        $proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS anio");
        if ( !$proveedor->error() ) {
            if ( $proveedor->rows($proveedor->stmt) > 0 ) {
                while ( $row = $proveedor->fetch_array($proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        $fileActuacion = $param["fileActuacion"];
        $actuacionesDao = new ActuacionesDAO();
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $actuacionesTmp = new ActuacionesDTO();
        $actuacionesTmp->setCveTipoActuacion($actuacionesDto->getCveTipoActuacion());
        $actuacionesTmp->setIdReferencia($actuacionesDto->getIdReferencia());
        $actuacionesTmp->setNumero($actuacionesDto->getNumero());
        $actuacionesTmp->setAnio($actuacionesDto->getAnio());
        $actuacionesTmp->setCveTipoCarpeta($actuacionesDto->getCveTipoCarpeta());
        $actuacionesTmp->setCveJuzgado($actuacionesDto->getCveJuzgado());
        $actuacionesTmp->setActivo('S');
        //var_dump($actuacionesDto);
        $rsActuaciones = $actuacionesDao->selectActuaciones($actuacionesTmp, $proveedor, "");
        //var_dump($rsActuaciones);
        if ( $rsActuaciones == "" ) {
            $numActuacion = $this->obtenerContadorActuacion($actuacionesDto->getCveJuzgado(), $actuacionesDto->getCveTipoActuacion(), $proveedor);
            //var_dump($numActuacion);
            if ( ($numActuacion != "") && ($numActuacion != null) ) {
                if (($actuacionesDto->getobservaciones() == "") && ($fileActuacion == "")) {
                    $error = true;
                    $msg .= " Se debe capturar las observaciones o bien adjuntar un archivo, favor de verificar ";
                } else {
                    if (strlen($actuacionesDto->getobservaciones()) > 16777000) {
                        $error = true;
                        $msg .= " Se excedio la longitud del campo de observaciones, favor de verificar ";
                    }
                }
                
                if ( !$error ) {
                    
                    $numActuacion = $numActuacion[0]->getNumero();
                    $actuacionesDto->setNumActuacion($numActuacion);
                    $actuacionesDto->setAniActuacion($anioActual);
                    $actuacionesDto->setCveTipoActuacion(26);
                    $actuacionesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $actuacionesDto->setActivo('S');
                    $actuacionesDto = $actuacionesDao->insertActuaciones($actuacionesDto, $proveedor);
                    if ( $actuacionesDto != "" ) {
                        /*
                         * Guardar el estatus de la actuacion
                         */
                        $actuacionesEstatusDto = new ActuacionesestatusDTO();
                        $actuacionesEstatusDao = new ActuacionesestatusDAO();
                        $actuacionesEstatusDto->setIdActuacion($actuacionesDto[0]->getIdActuacion());
                        $actuacionesEstatusDto->setCveEstatus(7);
                        $actuacionesEstatusDto->setActivo('S');
                        $actuacionesEstatusDto = $actuacionesEstatusDao->insertActuacionesestatus($actuacionesEstatusDto, $proveedor);
                        if ( $actuacionesEstatusDto != "" ) {
                            $error = false;
                            $msg .= " Se guardó el estatus de la actuación correctamente ";
                        } else {
                            $error = true;
                            $msg .= " No se pudo guardar el estatus de la actuación ";
                        }

                        if ( !$error ) {
                            
                            $totalArchivos = count($fileActuacion["name"]);
                            if (($totalArchivos >= 1) && 
                                ($fileActuacion["name"][0] != "") && 
                                ($fileActuacion["tmp_name"][0] != "") && 
                                ($fileActuacion["name"][0] != "undefined") ) {
                                try {
                                    $imagenesfachada = new ImagenesFacade();
                                    $paramImagenes = array();
                                    $paramImagenes["cveTipoDocumento"] = 26;
                                    $paramImagenes["idCarpetaJudicial"] = $actuacionesDto[0]->getIdReferencia();
                                    $paramImagenes["idActuacion"] = $actuacionesDto[0]->getIdActuacion();
                                    $paramImagenes["archivo"] = $fileActuacion;
                                    $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                                    $imagenes = json_decode($imagenes, true);
                                    if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                                        $msg .= " Adjunto agregado correctamente ";
                                    } else {
                                        $msg .= " Ocurrió un error al subir el archivo adjunto ";
                                        //$tmp = array("type" => "Error", "text" => $imagenes["text"]);
                                        //$error = true;
                                    }
                                } catch(Exception $e) {
                                    $msg .= " Ocurrió un error al subir el archivo adjunto " . $e;
                                }
                                
                            } else {
                                $msg .= " Ocurrió un error al subir el archivo adjunto";
                            }
                    
                        }

                        if ( !$error ) {
                            $resultado = array(
                                "idActuacion"        => $actuacionesDto[0]->getIdActuacion(),
                                "numActuacion"       => $actuacionesDto[0]->getNumActuacion(),
                                "anioActuacion"      => $actuacionesDto[0]->getAniActuacion(),
                                "cveTipoActuacion"   => $actuacionesDto[0]->getCveTipoActuacion(),
                                "idReferencia"       => $actuacionesDto[0]->getIdReferencia(),
                                "numero"             => $actuacionesDto[0]->getNumero(),
                                "anio"               => $actuacionesDto[0]->getAnio(),
                                "cveTipoCarpeta"     => $actuacionesDto[0]->getCveTipoCarpeta(),
                                "cveJuzgado"         => $actuacionesDto[0]->getCveJuzgado(),
                                "Sintesis"           => utf8_encode($actuacionesDto[0]->getSintesis()),
                                "observaciones"      => utf8_encode($actuacionesDto[0]->getObservaciones()),
                                "activo"             => $actuacionesDto[0]->getActivo(),
                                "fechaRegistro"      => $actuacionesDto[0]->getFechaRegistro(),
                                "fechaActualizacion" => $actuacionesDto[0]->getFechaActualizacion()
                            );
                            array_push($listaResultados, $resultado);
                            /*
                             * Guardar en bitacora la accion realizada
                             */
                            $bitacora = new BitacoramovimientosController();
                            $rsBitacora = $bitacora->agregar(351, 'Insercion de casos relevantes actuaciones', 'txt', serialize($actuacionesDto[0]), '', $proveedor);
                            if (!count($rsBitacora)) {
                                $error = true;
                                $msg .= 'No se pudo insertar en bitacora acción borrado lógico de casos relevantes actuaciones';
                            }
                        }
                    } else {
                        $error = true;
                        $msg .= " Ocurrió un error al guardar la actuación ";
                    }
                } else {
                    $error = true;
                    $msg .= " Ocurrió un error ";
                }
            } else {
                $error = true;
                $msg .= " Ocurrió un error al obtener el contador de actuaciones ";
            }
                     
        } else {
            $error = true;
            $msg .= " Ya existe una actuación capturada para el número de causa solicitado ";
        }
        //print_r($listaResultados);
        //exit;
        if ( !$error ) {
            $proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => count($listaResultados),
                        "text"       => utf8_encode($msg),
                        "data"       => $listaResultados
                    );
        } else {
            $proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => utf8_encode($msg)
                    );
        }
        return $result;
    }
    
    public function actualizarCasosRelevantes($actuacionesDto,$param, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        } else {
            $proveedor = $proveedor;
        }
        $error = false;
        $msg = "";
        //$result = array();
        $listaResultados = array();
        $fechaActual = "";
        $anioActual = "";
        $proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS anio");
        if ( !$proveedor->error() ) {
            if ( $proveedor->rows($proveedor->stmt) > 0 ) {
                while ( $row = $proveedor->fetch_array($proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        $fileActuacion = $param["fileActuacion"];
        if (($actuacionesDto->getobservaciones() == "") && ($fileActuacion == "")) {
            $error = true;
            $msg .= " Se debe capturar las observaciones o bien adjuntar un archivo, favor de verificar ";
        } else {
            if (strlen($actuacionesDto->getobservaciones()) > 16777000) {
                $error = true;
                $msg .= " Se excedio la longitud del campo de observaciones, favor de verificar ";
            } 
        }
        
        if ( !$error ) {
            $actuacionesDao = new ActuacionesDAO();
            $actuacionesDto = $this->validarActuaciones($actuacionesDto);
            $actuacionesTmp = new ActuacionesDTO();
            $actuacionesTmp->setIdActuacion($actuacionesDto->getIdActuacion());
            $actuacionesTmp->setSintesis($actuacionesDto->getSintesis());
            $actuacionesTmp->setObservaciones($actuacionesDto->getObservaciones());
            $actuacionesTmp->setFechaActualizacion($fechaActual);
            $actuacionesTmp->setActivo("S");
            $actuacionesDto = $actuacionesDao->updateActuaciones($actuacionesDto);
            if ( $actuacionesDto != "" ) {
                $error = false;
                $msg .= " Registro actualizado correctamente";
            } else {
                $error = true;
                $msg .= " Ocurrió un error al actualizar el registro";
            }
        }
        
        if ( !$error ) {
            
            $resultado = array(
                "idActuacion"        => $actuacionesDto[0]->getIdActuacion(),
                "numActuacion"       => $actuacionesDto[0]->getNumActuacion(),
                "anioActuacion"      => $actuacionesDto[0]->getAniActuacion(),
                "cveTipoActuacion"   => $actuacionesDto[0]->getCveTipoActuacion(),
                "idReferencia"       => $actuacionesDto[0]->getIdReferencia(),
                "numero"             => $actuacionesDto[0]->getNumero(),
                "anio"               => $actuacionesDto[0]->getAnio(),
                "cveTipoCarpeta"     => $actuacionesDto[0]->getCveTipoCarpeta(),
                "cveJuzgado"         => $actuacionesDto[0]->getCveJuzgado(),
                "Sintesis"           => utf8_encode($actuacionesDto[0]->getSintesis()),
                "observaciones"      => utf8_encode($actuacionesDto[0]->getObservaciones()),
                "activo"             => $actuacionesDto[0]->getActivo(),
                "fechaRegistro"      => $actuacionesDto[0]->getFechaRegistro(),
                "fechaActualizacion" => $actuacionesDto[0]->getFechaActualizacion()
            );
            array_push($listaResultados, $resultado);
            
            $totalArchivos = count($fileActuacion["name"]);
            if (($totalArchivos >= 1) && 
                ($fileActuacion["name"][0] != "") && 
                ($fileActuacion["tmp_name"][0] != "") && 
                ($fileActuacion["name"][0] != "undefined") ) {
                try {
                    $imagenesfachada = new ImagenesFacade();
                    $paramImagenes = array();
                    $paramImagenes["cveTipoDocumento"] = 26;
                    $paramImagenes["idCarpetaJudicial"] = $actuacionesDto[0]->getIdReferencia();
                    $paramImagenes["idActuacion"] = $actuacionesDto[0]->getIdActuacion();
                    $paramImagenes["archivo"] = $fileActuacion;
                    $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                    $imagenes = json_decode($imagenes, true);
                    if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                        $msg .= " Adjunto agregado correctamente";
                    } else {
                        $msg .= " Ocurrió un error al subir el archivo adjunto";
                        //$tmp = array("type" => "Error", "text" => $imagenes["text"]);
                        //$error = true;
                    }
                } catch (Exception $e) {
                    $msg .= " Ocurrió un error al subir el archivo adjunto " . $e;
                }
                
            } else {
                $msg .= " Ocurrió un error al subir el archivo adjunto";
            }
            /*
             * Guardar en bitacora la accion realizada
             */
            $bitacora = new BitacoramovimientosController();
            $rsBitacora = $bitacora->agregar(352, 'Modificacion de casos relevantes actuaciones', 'txt', serialize($actuacionesDto[0]), '', $proveedor);
            if (!count($rsBitacora)) {
                $error = true;
                $msg .= 'No se pudo insertar en bitacora acción borrado lógico de casos relevantes actuaciones';
            }
        }
        
        if ( !$error )  {
            $proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => count($listaResultados),
                        "text"       => utf8_encode($msg),
                        "data"       => $listaResultados
                    );
        } else {
            $proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => utf8_encode($msg)
                    );
        }
        
        return $result;
        
    }
    
    public function eliminarCasosRelevantes($actuacionesDto, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        } else {
            $proveedor = $proveedor;
        }
        $error = false;
        $msg = "";
        $fechaActual = "";
        $anioActual = "";
        $result = array();
        $proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS anio");
        if ( !$proveedor->error() ) {
            if ( $proveedor->rows($proveedor->stmt) > 0 ) {
                while ( $row = $proveedor->fetch_array($proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        $actuacionesDao = new ActuacionesDAO();
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        
        /*
         * Consultar el registro de estatus de la actuacion
         */
        $actuacionesEstatusDto = new ActuacionesestatusDTO();
        $actuacionesEstatusDao = new ActuacionesestatusDAO();
        
        $actuacionesEstatusDto->setIdActuacion($actuacionesDto->getIdActuacion());
        $actuacionesEstatusDto->setActivo("S");
        $actuacionesEstatusDto = $actuacionesEstatusDao->selectActuacionesestatus($actuacionesEstatusDto, "", $proveedor);
        if ( $actuacionesEstatusDto != "" ) {
            foreach ( $actuacionesEstatusDto as $estatus ) {
                $estatusTmp = new ActuacionesestatusDTO();
                $estatusTmp->setIdActuacionesEstatus($estatus->getIdActuacionesEstatus());
                $estatusTmp->setFechaActualizacion($fechaActual);
                $estatusTmp->setActivo("N");
                $estatusTmp = $actuacionesEstatusDao->updateActuacionesestatus($estatusTmp, $proveedor);
                if ( $estatusTmp != "" ) {
                    $error = false;
                    $msg .= " Estatus de la actuación eliminado correctamente ";
                } else {
                     $error = true;
                     $msg .= " Ocurrió un error al eliminar el estatus de la actuación";
                }
            }
        }
        if ( !$error ) {
            $actuacionesDto->setFechaActualizacion($fechaActual);
            $actuacionesDto = $actuacionesDao->updateActuaciones($actuacionesDto, $proveedor);
            if ( $actuacionesDto != "" ) {
                $error = false;
                $msg .= " Registro eliminado correctamente ";
                /*
                 * Guardar en bitacora la accion
                 */
                $bitacora = new BitacoramovimientosController();
                $rsBitacora = $bitacora->agregar(353, 'Borrado logico casos relevantes actuaciones', 'txt', serialize($actuacionesDto[0]), '', $proveedor);
                if (!count($rsBitacora)) {
                    $error = true;
                    $msg .= 'No se pudo insertar en bitacora acción borrado lógico de casos relevantes actuaciones';
                }
            } else {
                $error = true;
                $msg .= " Ocurrio un error al eliminar el registro de actuaciones ";
            }
        }
        
        if ( !$error ) {
            $proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => 1,
                        "text"       => utf8_encode($msg)
                    );
        } else {
            $proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => utf8_encode($msg)
                    );
        }
        return $result;
    } 
    
    public function consultarCasosRelevantes($actuacionesDto, $param, $proveedor = null) {
        $x = 1;
        $json = "";
        $validacion = new Validacion();
        $juzgadosTmp = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $cveDistrito = 0;
        $order = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        $cveJuzgado = array();
        $cadenaJuzgados = "";
        /*
         * Consultar los juzgados correspondientes a la adscripcion del usuario
         * logueado
         */
        if ( $param["consultaDistrito"] == "S" ) {
            $juzgadosTmp->setCveJuzgado($_SESSION["cveAdscripcion"]);
            $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp, "", $this->proveedor);
            if ( $juzgadosTmp != "" ) {
                $cveDistrito = $juzgadosTmp[0]->getCveDistrito();
                $juzgados = new JuzgadosDTO();
                $juzgados->setCveDistrito($cveDistrito);
                $juzgados->setActivo("S");
                $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
                if ( $juzgados != "" ) {
                    foreach ( $juzgados as $juzgado ) {
                        $cveJuzgado[] = $juzgado->getCveJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $cveJuzgado);
                    $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ") ORDER BY idActuacion DESC ";
                }
            } else {
                $order .= " ORDER BY idActuacion DESC ";
            }
        } else {
            $juzgados = new JuzgadosDTO();
            $juzgados->setCveJuzgado($actuacionesDto->getCveJuzgado());
            $juzgados->setCveInstancia($param["cveInstancia"]);
            $juzgados->setCveMateria($param["cveMateria"]);
            $juzgados->setCveRegion($param["cveRegion"]);
            $juzgados->setCveDistrito($param["cveDistrito"]);
            $juzgados->setActivo("S");
            $juzgados = $juzgadosDao->selectJuzgados($juzgados, "", $this->proveedor);
            if ( $juzgados != "" ) {
                foreach ( $juzgados as $juzgado ) {
                    $cveJuzgado[] = $juzgado->getCveJuzgado();
                }
                $cadenaJuzgados = implode(",", $cveJuzgado);
                $order .= " AND cveJuzgado IN (" . $cadenaJuzgados . ") ORDER BY idActuacion DESC ";
            }
        }
        
        $ActuacionesDao = new ActuacionesDAO();
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $actuacionesDto = $ActuacionesDao->selectActuaciones($actuacionesDto, null, $order, $param, null);

        if ($actuacionesDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($actuacionesDto) . '",';
            $json .= '"data":[';
            $x = 1;

            foreach ($actuacionesDto as $actuacionDto) {
                $tiposcarpeta = new TiposcarpetasController();
                $tiposcarpetasDTO = new TiposcarpetasDTO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $tiposActuacionesDto = new TiposactuacionesDTO();
                $tiposActuacionesDao = new TiposactuacionesDAO();
                $json .= "{";
                $json .= '"idActuacion":' . json_encode(utf8_encode($actuacionDto->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacionDto->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacionDto->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoActuacion())) . ",";
                
                $tiposActuacionesDto->setCveTipoActuacion($actuacionDto->getCveTipoActuacion());
                $tiposActuacionesDto->setActivo("S");
                $rsTipoActuacion = $tiposActuacionesDao->selectTiposactuaciones($tiposActuacionesDto);
                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($rsTipoActuacion[0]->getDesTipoActuacion())) . ",";
                
                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacionDto->getIdReferencia())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($actuacionDto->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($actuacionDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacionDto->getCveTipoCarpeta())) . ",";

                $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                
                $juzgadosDto->setCveJuzgado($actuacionDto->getCveJuzgado());
                $juzgadosDto->setActivo("S");
                $resJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto);
                $json .= '"desJuzgado":' . json_encode(utf8_encode($resJuzgado[0]->getDesJuzgado())) . ",";
                
                $json .= '"sintesis":' . json_encode($actuacionDto->getSintesis()) . ',';
                $json .= '"observaciones":' . json_encode($actuacionDto->getObservaciones()) . ',';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacionDto->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($actuacionDto->getActivo())) . ",";
                
                // buscar estatus de actuacion
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();
                $actEstatusDTO->setIdActuacion($actuacionDto->getIdActuacion());
                $actEstatusDTO->setActivo("S");
                $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
                if ($actEstatusDTO != "") {
                    $json .= '"cveEstatus":' . json_encode(utf8_encode($actEstatusDTO[0]->getCveEstatus())) . ",";
                    // mostrar descripcion de estatus de actuacion
                    $estatusCtrl = new EstatusController();
                    $estatusDTO = new EstatusDTO();
                    $estatusDTO->setCveEstatus($actEstatusDTO[0]->getCveEstatus());
                    $estatusDTO = $estatusCtrl->selectEstatus($estatusDTO);
                    $json .= '"descEstatus":' . json_encode(utf8_encode($estatusDTO[0]->getDescEstatus())) . ",";
                } else {
                    $json .= '"cveEstatus": "",';
                    $json .= '"descEstatus": "",';
                }

                $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaRegistro()))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaActualizacion()))) . "";


                $json .= "}";
                $x++;
                if ($x <= count($actuacionesDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($actuacionesDto) . '"';
            $json .= "}";

            return $json;
        } else {
            $json .= '{"type":"Error",';
            $json .= '"text":"No se encontraron resultados",';
            $json .= '"totalCount":"0"';
            $json .= '}';
            return $json;
        }
    }
    /*
     * Consulta de documentos adjuntos
     */
    public function consultarAdjuntos($actuacionesDto, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        } else {
            $proveedor = $proveedor;
        }
        $error = false;
        $adjuntos = array();
        $result = array();
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        
        $documentosImgDto = new DocumentosimgDTO();
        $documentosImgDao = new DocumentosimgDAO();
        
        $imagenesDao = new ImagenesDAO();
        
        $documentosImgDto->setIdActuacion($actuacionesDto->getIdActuacion());
        $documentosImgDto->setActivo("S");
        $documentosImgDto = $documentosImgDao->selectDocumentosimg($documentosImgDto, "", $proveedor);
        if ( $documentosImgDto != "" ) {
            foreach ( $documentosImgDto as $documento ) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documento->getIdDocumentoImg());
                $imagenesDto->setActivo("S");
                $imagenesDto->setAdjunto("S");
                $orden = " ORDER BY posicion";
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto, $orden, $proveedor);
                if ( $imagenesDto != "" ) {
                    foreach ( $imagenesDto as $imagen ) {
                        $adjuntos[] = array(
                            "idImagen"       => $imagen->getIdImagen(),
                            "idDocumentoImg" => $imagen->getIdDocumentoImg(),
                            "fojas"          => $imagen->getFojas(),
                            "ruta"           => $imagen->getRuta(),
                            "posicion"       => $imagen->getPosicion(),
                            "adjunto"        => $imagen->getAdjunto()
                        );
                    }
                } else {
                    $error = false;
                }
            }
        } else {
            $error = false;
        }
        if ( !$error ) {
            $result = array(
                "Estatus"    => "Ok",
                "totalCount" => count($adjuntos),
                "data"       => $adjuntos
            );
        } else {
            $result = array(
                "Estatus"    => "Error",
                "totalCount" => 0,
                "text"       => "Sin resultados"
            );
        }
        return $result;
    }
    
    public function eliminarAdjuntos($imagenes, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        } else {
            $proveedor = $proveedor;
        }
        $error = false;
        $adjuntos = array();
        $result = array();
        $msg = "";
        $fechaActual = "";
        $anioActual = "";
        $result = array();
        $proveedor->execute("SELECT NOW() AS FechaActual, YEAR(CURDATE()) AS anio");
        if ( !$proveedor->error() ) {
            if ( $proveedor->rows($proveedor->stmt) > 0 ) {
                while ( $row = $proveedor->fetch_array($proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                    $anioActual = $row['anio'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
                $anioActual = date("Y");
            }
        }
        $imagenesDao = new ImagenesDAO();
        if ( count($imagenes) > 0 ) {
            for ( $x = 0; $x < count($imagenes); $x++ ) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdImagen($imagenes[$x]);
                $imagenesDto->setActivo("N");
                $imagenesDto->setFechaActualizacion($fechaActual);
                $imagenesDto = $imagenesDao->updateImagenActivo($imagenesDto, $proveedor);
                if ( $imagenesDto != "" ) {
                    $error = false;
                } else {
                    $error = true;
                }
                if ( $error ) {
                    break;
                }
            }
            if ( !$error ) {
                $msg .= " Registros eliminados correctamente ";
            } else {
                $msg .= " Ocurrió un error al eliminar alguno de los registros";
            }
        } else {
            $error = true;
            $msg .= " No se recibieron datos de adjuntos a eliminar ";
        }
        
        if ( !$error ) {
            $proveedor->execute("COMMIT");
            $result = array(
                "estatus" => "Ok",
                "totalCount" => "1",
                "text" => utf8_encode($msg)
            );
        } else  {
            $proveedor->execute("ROLLBACK");
            $result = array(
                "estatus" => "Error",
                "totalCount" => "0",
                "text" => utf8_encode($msg)
            );
        }
        return $result;
    }
    
    public function normalToMysql($text)
    {
        $casosRelevantesController = new CasosrelevantesController();
        if ($casosRelevantesController->date($text)) {
            $fecha = explode("/", $text);

            return $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
        } else if ($casosRelevantesController->dateTime($text)) {
            $fechaHora = explode(" ", $text);
            $fecha = explode("/", $fechaHora[0]);

            return $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0] . " " . $fechaHora[1];
        }
    }
    
    public function date($text)
    {
        $patron = "/^(0[1-9]|1[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/\d{4}$/";

        return preg_match($patron, (string) $text);
    }

    public function dateTime($text)
    {
        $patron = "/^(0[1-9]|1[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/\d{4}\ (0[0-9]|1[0-9]|2[0-4])\:(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])\:(0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])$/";

        return preg_match($patron, (string) $text);
    }
    
}

//$casosRelevantesController = new CasosrelevantesController();
//$actuacionesDto = new ActuacionesDTO();
////$actuacionesDto->setAnio(2016);
////$actuacionesDto->setNumero(2);
//$actuacionesDto->setCveJuzgado("");
//$actuacionesDto->setCveTipoCarpeta("");
//$actuacionesDto->setCveTipoActuacion(26);
//$actuacionesDto->setActivo('S');
//$param["pag"] = 2;
//$param["cantxPag"] = 10;
////$param["fechaDesde"] = '01/05/2016';
////$param["fechaHasta"] = '12/05/2016';
//$param["consultaDistrito"] = 'S';
//$param["cveRegion"] = "";
//$param["cveDistrito"] = "";
//$param["cveMateria"] = "";
//$param["cveInstancia"] = "";
//$param["paginacion"] = false;
//$datos = $casosRelevantesController->getPaginas($actuacionesDto, $param);
//print_r($datos);