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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/notificaciones/NotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/notificaciones/NotificacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

###PASADO DE ACTUACIONES

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

//Ofendidos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");

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
//Telefonos Imputados Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
//Telefonos Ofendidos  Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
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


####--------------------
if (!isset($_SESSION)) {
    session_start();
}

class NotificacionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarNotificaciones($NotificacionesDto) {
        $NotificacionesDto->setidNotificacion(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getidNotificacion()))));
        $NotificacionesDto->setidJuzgadoGestion(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getidJuzgadoGestion()))));
        $NotificacionesDto->setidAcuerdo(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getidAcuerdo()))));
        $NotificacionesDto->setFechaNotificacion(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getFechaNotificacion()))));
        $NotificacionesDto->setidNotificador(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getidNotificador()))));
        $NotificacionesDto->setNotificador(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getNotificador()))));
        $NotificacionesDto->setTipoDoc(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getTipoDoc()))));
        $NotificacionesDto->setAcuerdo(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getAcuerdo()))));
        $NotificacionesDto->setNumCarpeta(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getNumCarpeta()))));
        $NotificacionesDto->setTipoCarpeta(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getTipoCarpeta()))));
        $NotificacionesDto->setTipoJuzgado(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getTipoJuzgado()))));
        $NotificacionesDto->setAnexo(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getAnexo()))));
        $NotificacionesDto->setidsDocumentos(strtoupper(str_ireplace("'", "", trim($NotificacionesDto->getidsDocumentos()))));
        return $NotificacionesDto;
    }

    public function selectNotificaciones($NotificacionesDto, $proveedor = null) {
        $NotificacionesDto = $this->validarNotificaciones($NotificacionesDto);
        $NotificacionesDao = new NotificacionesDAO();
        $NotificacionesDto = $NotificacionesDao->selectNotificaciones($NotificacionesDto, $proveedor);
        return $NotificacionesDto;
    }

    public function insertNotificaciones($NotificacionesDto, $proveedor = null) {
        $NotificacionesDto = $this->validarNotificaciones($NotificacionesDto);
        $NotificacionesDao = new NotificacionesDAO();
        $NotificacionesDto = $NotificacionesDao->insertNotificaciones($NotificacionesDto, $proveedor);
        return $NotificacionesDto;
    }

    public function updateNotificaciones($NotificacionesDto, $proveedor = null) {
        $NotificacionesDto = $this->validarNotificaciones($NotificacionesDto);
        $NotificacionesDao = new NotificacionesDAO();
//$tmpDto = new NotificacionesDTO();
//$tmpDto = $NotificacionesDao->selectNotificaciones($NotificacionesDto,$proveedor);
//if($tmpDto!=""){//$NotificacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $NotificacionesDto = $NotificacionesDao->updateNotificaciones($NotificacionesDto, $proveedor);
        return $NotificacionesDto;
//}
//return "";
    }

    public function deleteNotificaciones($NotificacionesDto, $proveedor = null) {
        $NotificacionesDto = $this->validarNotificaciones($NotificacionesDto);
        $NotificacionesDao = new NotificacionesDAO();
        $NotificacionesDto = $NotificacionesDao->deleteNotificaciones($NotificacionesDto, $proveedor);
        return $NotificacionesDto;
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


    
        #-------------------------CONSULTA DE ACTUACIONES, IMPUTADOS Y OFENDIDOS--------------------------------------------------------
    public function ConsultarActuacionesImpOf($ActuacionesDto,$param) {
//        print_r($ActuacionesDto);
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " AND (cveTipoActuacion=2 OR cveTipoActuacion=5 OR cveTipoActuacion=6) ORDER BY idActuacion DESC ", null, null);
        //print_r($ActuacionesDto);
        if ($ActuacionesDto!= "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalActuaciones":"' . count($ActuacionesDto) . '",';
            $json .= '"data":[';
            $x = 1;

            foreach ($ActuacionesDto as $Actuacion) {
                $json .= "{";
                $json .= '"idActuacion":' . json_encode(utf8_encode($Actuacion->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($Actuacion->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($Actuacion->getAniActuacion())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($Actuacion->getIdReferencia())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($Actuacion->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($Actuacion->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($Actuacion->getCveTipoCarpeta())) . ",";
                
                $TiposActuacionesDto = new TiposactuacionesDTO();
                $TiposActuacionesDao = new TiposactuacionesDAO();
                $TiposActuacionesDto->setCveTipoActuacion($Actuacion->getCveTipoActuacion());
                $TiposActuacionesDto = $TiposActuacionesDao->selectTiposactuaciones($TiposActuacionesDto);
                $json .= '"TipoActuacion":' . json_encode(utf8_encode($TiposActuacionesDto[0]->getDesTipoActuacion())) . ",";                
                $json .= '"CveTipoActuacion":' . json_encode(utf8_encode($TiposActuacionesDto[0]->getCveTipoActuacion())) . ",";                
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Actuacion->getCveJuzgado())) . ",";
                $json .= '"sintesis":' . json_encode($Actuacion->getSintesis()) . ",";
                // verificar esta linia cuando el texto es demasiado grande
                if ($param["vcveTipoCarpeta"] != "7"){
                    $json .= '"observaciones":' . json_encode($Actuacion->getObservaciones()) . ",";
                }else{
                    $json .= '"observaciones":' . json_encode($Actuacion->getObservaciones()) . ",";
                }
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Actuacion->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Actuacion->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($Actuacion->getCveTipoResolucion())) . ",";
                if ($Actuacion->getCveTipoResolucion()!= "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolDAO = new TiposresolucionesDAO();
                    $tipoResolDTO->setCveTipoResolucion($Actuacion->getCveTipoResolucion());
                    $tipoResolDTO = $tipoResolDAO->selectTiposresoluciones($tipoResolDTO);
                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion()));
                }else{$json .='"descTipoResolucion": ""';}
                $json .= "}";
                $x++;
                if ($x <= count($ActuacionesDto)) {
                    $json .= ",";
}
            } 
                $json .= '],';

                $cveTipoCarpeta=$param["vcveTipoCarpeta"];
                switch ($cveTipoCarpeta) {
                case "7": // exhorto
                    //echo "--EXHORTO--";
                    $ImputadosexhortosDto = new ImputadosexhortosDTO();
                    $ImputadosexhortosDao = new ImputadosexhortosDAO();
                    $ImputadosexhortosDto->setIdExhorto($param["IdCarpetaJudicial"]);
                    //print_r($ImputadoscarpetasDto);
                    $ImputadosexhortosDto->setActivo('S');
                    $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);
                    if($ImputadosexhortosDto != ""){
                    $json .= '"totalCountImputados":"' . count($ImputadosexhortosDto). '",';
                    }else{
                        $json .= '"totalCountImputados":"0",';
                    }
    //                var_dump($ImputadoscarpetasDto);

                    $json .= '"Imputados": [';
                    if($ImputadosexhortosDto!=""){
                    $y = 1;
                        foreach ($ImputadosexhortosDto as $Imputado) {
                            $json .= "{";
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoExhorto())) . ",";
                            $json .='"tipo": "Imputado",';    
                            if($Imputado->getCveTipoPersona()==1){
                                if($Imputado->getNombre()!="")
                                    {$json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                                    }else{$json .='"nombre": "",';}
                                if($Imputado->getPaterno()!="")
                                    {$json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                                    }else{$json .='"paterno": "",';}
                                if($Imputado->getMaterno()!="")
                                {$json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                                }else{$json .='"materno": "",';}
                            }
                            else
                            {
                              if($Imputado->getNombreMoral()!="")
                              {
                                $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                              }
                              else{
                                $json .='"materno": "-",';
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                              }
                            }
                                $json .= '"ImputadosEmail": [';
                                        $json .= "{";
                                        $json .='"emailImputado": ""';
                                        $json .= "}";
                                #Fin Emails
                                $json .= '],';
                            //--------
                            $json .= '"totalCountEmailsImputados":"0",';                           
                                $json .='"idDefensorImputado": "",';
                                $json .='"TipoDefensor": "-",';
                                $json .='"NombreDefensor": "-",';
                                $json .='"EmailDefensor": "-"';
                            $json .= "}";
                            $y++;
                            if ($y <= count($ImputadosexhortosDto)) {
                                $json .= ",";
                            }
                        }
                    }
                    #Fin Emputados
                    $json .= '],';

                    $OfenfendidosexhortosDto = new OfenfendidosexhortosDTO();
                    $OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
                    $OfenfendidosexhortosDto->setIdExhorto($param["IdCarpetaJudicial"]);
                    $OfenfendidosexhortosDto->setActivo('S');
                    $OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto);

                    if($OfenfendidosexhortosDto != ""){
                    $json .= '"totalCountOfendidos":"' . count($OfenfendidosexhortosDto). '",';
                    }else{
                        $json .= '"totalCountOfendidos":"0",';
                    }

                    $json .= '"Ofendidos": [';
                    if($OfenfendidosexhortosDto!=""){
                    $y = 1;
                        foreach ($OfenfendidosexhortosDto as $Ofendido) {
                            $json .= "{";
                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfenfendidoExhorto())) . ",";

                            if($Ofendido->getCveTipoPersona()==1){
                                if($Ofendido->getNombre()!="")
                                    {$json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                                    }else{$json .='"nombre": "",';}
                                if($Ofendido->getPaterno()!="")
                                    {$json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                                    }else{$json .='"paterno": "",';}
                                if($Ofendido->getMaterno()!="")
                                {$json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                                }else{$json .='"materno": "",';}
                            }
                            else
                            {
                              if($Ofendido->getNombreMoral()!="")
                              {
                                $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                              }
                            }
                            //--------
                                $json .= '"OfendidosEmail": [';
                                        $json .= "{";
                                        $json .='"emailOfendido": ""';
                                        $json .= "}";
                                #Fin Ofendidos
                                $json .= '],';
                            $json .= '"totalCountEmailsOfendidos":"0",';
                            //--------
                                $json .='"tipo": "Ofendido",';
                                $json .='"IdDefensorOfendidoCarpeta": "",';
                                $json .='"TipoDefensor": "-",';
                                $json .='"NombreDefensor": "-",';
                                $json .='"EmailDefensor": "-"';
                                $json .= "}";
                            $y++;
                            if ($y <= count($OfenfendidosexhortosDto)) {
                                $json .= ",";
                            }
                        }

                    }
                    #Fin Ofendidos
//                    $json .= ']';
                break;
                default:
                    //echo "--carpeta--";
                $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                $ImputadoscarpetasDto->setIdCarpetaJudicial($param["IdCarpetaJudicial"]);
                //print_r($ImputadoscarpetasDto);
                $ImputadoscarpetasDto->setActivo('S');
                $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
                if($ImputadoscarpetasDto != ""){
                $json .= '"totalCountImputados":"' . count($ImputadoscarpetasDto). '",';
                }else{
                    $json .= '"totalCountImputados":"0",';
                }
//                var_dump($ImputadoscarpetasDto);
                
                $json .= '"Imputados": [';
                if($ImputadoscarpetasDto!=""){
                $y = 1;
                    foreach ($ImputadoscarpetasDto as $Imputado) {
                        $json .= "{";
                        $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";
                        $json .='"tipo": "Imputado",';    
                        if($Imputado->getCveTipoPersona()==1){
                            if($Imputado->getNombre()!="")
                                {$json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                                }else{$json .='"nombre": "",';}
                            if($Imputado->getPaterno()!="")
                                {$json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                                }else{$json .='"paterno": "",';}
                            if($Imputado->getMaterno()!="")
                            {$json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                            }else{$json .='"materno": "",';}
                        }
                        else
                        {
                          if($Imputado->getNombreMoral()!="")
                          {
                            $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                          }
                        }
                        $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                        $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())).",";
                        
                        $TelefonosimputadoscarpetasDto= new TelefonosimputadoscarpetasDTO();
                        $TelefonosimputadoscarpetasDao= new TelefonosimputadoscarpetasDAO();
                        $TelefonosimputadoscarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                        $TelefonosimputadoscarpetasDto->setActivo('S');

                        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
                        //--------
                            $TotalEmails=0;
                            $json .= '"ImputadosEmail": [';
                            if($TelefonosimputadoscarpetasDto!=""){
                            $g = 1;
                                foreach ($TelefonosimputadoscarpetasDto as $Email) {
                                    $json .= "{";
                                    $json .= '"emailImputado":' . json_encode(utf8_encode($Email->getEmail()));
                                    $json .= "}";
                                    if($Email->getEmail()!=""){$TotalEmails=$TotalEmails+1;}
                                    $g++;
                                    if ($g <= count($TelefonosimputadoscarpetasDto)) {
                                        $json .= ",";
                                    }
                                }

                            }
                            #Fin Emails
                            $json .= '],';
                        //--------
                        $json .= '"totalCountEmailsImputados":"' . $TotalEmails. '",';

                        $DefensoresimputadoscarpetasDto= new DefensoresimputadoscarpetasDTO();
                        $DefensoresimputadoscarpetasDao= new DefensoresimputadoscarpetasDAO();
                        $DefensoresimputadoscarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                        $DefensoresimputadoscarpetasDto->setActivo('S');
                        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
                       
                        if($DefensoresimputadoscarpetasDto!=""){$totalDefensoresImp=count($DefensoresimputadoscarpetasDto);}
                        else{$totalDefensoresImp=0;}
                        $json .= '"totalDefensoresImp":"' .$totalDefensoresImp. '",';

                        $json .= '"DefensoresImputados": [';
                        if($DefensoresimputadoscarpetasDto!="")
                        {
                            $t=1;
                            foreach ($DefensoresimputadoscarpetasDto as $Defensor) {
                                $json .= "{";
                            $TiposdefensoresDto= new TiposdefensoresDTO();
                            $TiposdefensoresDao= new TiposdefensoresDAO();
                                $TiposdefensoresDto->setCveTipoDefensor($Defensor->getCveTipoDefensor());
                            $TiposdefensoresDto->setActivo('S');
                            $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                            if($TiposdefensoresDto[0]->getDesTipoDefensor()!='SIN DEFENSOR'){
                                    $json.= '"idDefensorImputado":' . json_encode(utf8_encode($Defensor->getIdDefensorImputadoCarpeta())) . ",";
                                $json.= '"TipoDefensor":' . json_encode(utf8_encode($TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                    $json.= '"NombreDefensor":' . json_encode(utf8_encode($Defensor->getNombre())) . ",";
                                    $json.= '"EmailDefensor":' . json_encode(utf8_encode($Defensor->getEmail())) . "";
                            }
                            else
                            {
                                $json .='"idDefensorImputado": "",';
                                $json .='"TipoDefensor": "-",';
                                $json .='"NombreDefensor": "-",';
                                $json .='"EmailDefensor": "-"';
                            }
                                $json .= "}";
                                $t++;
                                if ($t <= count($DefensoresimputadoscarpetasDto)) {
                                    $json .= ",";
                        }
                        }
                        }
                        $json .= ']';
                        
                        $json .= "}";
                        $y++;
                        if ($y <= count($ImputadoscarpetasDto)) {
                            $json .= ",";
                        }
                    }
                
                }
                #Fin Emputados
                $json .= '],';

                $OfendidosCarpetasDto = new OfendidoscarpetasDTO();
                $OfendidosCarpetasDao = new OfendidoscarpetasDAO();
                $OfendidosCarpetasDto->setIdCarpetaJudicial($param["IdCarpetaJudicial"]);
                $OfendidosCarpetasDto->setActivo($OfendidosCarpetasDto->getActivo());
                $OfendidosCarpetasDto = $OfendidosCarpetasDao->selectOfendidoscarpetas($OfendidosCarpetasDto);
                
                if($OfendidosCarpetasDto != ""){
                $json .= '"totalCountOfendidos":"' . count($OfendidosCarpetasDto). '",';
                }else{
                    $json .= '"totalCountOfendidos":"0",';
                }
                
                $json .= '"Ofendidos": [';
                if($OfendidosCarpetasDto!=""){
                $k = 1;
                    foreach ($OfendidosCarpetasDto as $Ofendido) {
                        $json .= "{";
                        $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";

                        if($Ofendido->getCveTipoPersona()==1){
                            if($Ofendido->getNombre()!="")
                                {$json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                                }else{$json .='"nombre": "",';}
                            if($Ofendido->getPaterno()!="")
                                {$json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                                }else{$json .='"paterno": "",';}
                            if($Ofendido->getMaterno()!="")
                            {$json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                            }else{$json .='"materno": "",';}
                        }
                        else
                        {
                          if($Ofendido->getNombreMoral()!="")
                          {
                            $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombreMoral())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                          }
                        }
                        $TelefonosofendidoscarpetasDto= new TelefonosofendidoscarpetasDTO();
                        $TelefonosofendidoscarpetasDao= new TelefonosofendidoscarpetasDAO();
                        $TelefonosofendidoscarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
                        if($TelefonosofendidoscarpetasDto!=""){$totalEmails=count($TelefonosofendidoscarpetasDto);}
                        else{$totalEmails=0;}
                        //--------
                            $json .= '"OfendidosEmail": [';
                            if($TelefonosofendidoscarpetasDto!=""){
                            $y = 1;
                                foreach ($TelefonosofendidoscarpetasDto as $Email) {
                                    $json .= "{";
                                    $json .= '"emailOfendido":' . json_encode(utf8_encode($Email->getEmail()));
                                    $json .= "}";
                                    $y++;
                                    if ($y <= count($TelefonosofendidoscarpetasDto)) {
                                        $json .= ",";
                                    }
                                }
                            }
                            #Fin Ofendidos
                            $json .= '],';
                        $json .= '"totalCountEmailsOfendidos":"' .$totalEmails. '",';
                        //--------
                        $json .='"tipo": "Ofendido",';
                        $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                        $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())).",";
                        
                        $DefensoresofendidoscarpetasDto= new DefensoresofendidoscarpetasDTO();
                        $DefensoresofendidoscarpetasDao= new DefensoresofendidoscarpetasDAO();
                        $DefensoresofendidoscarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                        $DefensoresofendidoscarpetasDto->setActivo('S');
                        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);

                        if($DefensoresofendidoscarpetasDto!=""){$totalDefensoresOf=count($DefensoresofendidoscarpetasDto);}
                        else{$totalDefensoresOf=0;}
                        $json .= '"totalDefensoresOf":"' .$totalDefensoresOf. '",';                        
                        
                        
                        $json .= '"DefensoresOfendidos": [';
                        if($DefensoresofendidoscarpetasDto!="")
                        {
                            $t=1;
                            foreach ($DefensoresofendidoscarpetasDto as $Defensor) {
                            $json .= "{";
                            $TiposdefensoresDto= new TiposdefensoresDTO();
                            $TiposdefensoresDao= new TiposdefensoresDAO();
                                $TiposdefensoresDto->setCveTipoDefensor($Defensor->getCveTipoDefensor());
                            $TiposdefensoresDto->setActivo('S');
                            $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                            if($TiposdefensoresDto[0]->getDesTipoDefensor()!='SIN DEFENSOR'){
                                    $json.= '"IdDefensorOfendidoCarpeta":' . json_encode(utf8_encode($Defensor->getIdDefensorOfendidoCarpeta())) . ",";
                                $json.= '"TipoDefensor":' . json_encode(utf8_encode($TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                    $json.= '"NombreDefensor":' . json_encode(utf8_encode($Defensor->getNombre())) . ",";
                                    $json.= '"EmailDefensor":' . json_encode(utf8_encode($Defensor->getEmail())) . "";
                            }
                            else
                            {
                                $json .='"IdDefensorOfendidoCarpeta": "",';
                                $json .='"TipoDefensor": "-",';
                                $json .='"NombreDefensor": "-",';
                                $json .='"EmailDefensor": "-"';
                            }
                            $json .= "}";
                            $t++;
                            if ($t <= count($DefensoresofendidoscarpetasDto)) {
                                $json .= ",";
                        }
                        }
                    }    
                    $json .= ']';
                        $json .= "}";
                        $k++;
                        if ($k <= count($OfendidosCarpetasDto)) {
                            $json .= ",";
                        }
                    }
                break;
        }
        
        }
                #Fin Ofendidos
        $json .= ']';
        $json .= "}";
        
        //echo $json.'--Json--';
        return $json;

    }    
    else
    {
        $json  = '{"type":"OK",';
        $json .= '"totalActuaciones":"0",';
        $json .= '"totalCountImputados":"0",';
        $json .= '"totalCountOfendidos":"0"';
        $json .= '}';
        return $json;
    }
}    
   
    #----------GUARDAR NOTIFICACIONES-----------------------------------------------------------------------------------------------
    public function GuardarNotificacion($ActuacionesDto, $param) {
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $idActuacionPadre = $param["idActuacionPadre"];
        $cveTipoCarpeta= $param["vcveTipoCarpeta"];
        if ($param["fechaNotificacion"] != "") {
            $fecha = explode("/", $param["fechaNotificacion"]);
            $fechaNotificacion = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
        } else {
            $fechaNotificacion = "";
        }

        $transaccion = 0;
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe'); //sigejupe
        $proveedor->connect();
        $proveedor->execute("BEGIN");


        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion()); // tipo de actuacion
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);

        if ($contadoresDto != "") {
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDao = new ActuacionesDAO();

            $Actuacionestmp = New ActuacionesDTO();
            $Actuacionestmp = $ActuacionesDao->selectActuaciones($Actuacionestmp, null, " ORDER BY idActuacion DESC LIMIT 1 ", null, " idActuacion+1 idActuacion ");
            //print_r($Actuacionestmp);
            foreach ($Actuacionestmp as $id) {
                $idActuacion = $id["idActuacion"];
            }
            $ActuacionesDto->setidActuacion($idActuacion);
            $ActuacionesDto->setActivo("S");
            
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
            if ($ActuacionesDto != "") {
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();
                $actEstatusDTO->setIdActuacion($idActuacion);
                $actEstatusDTO->setCveEstatus(25); //Registrar Notificación Tradicional
                $actEstatusDTO->setActivo("S");
                $actEstatusDTO = $actEstatusCtrl->insertActuacionesestatus($actEstatusDTO, $proveedor); //????checar
                if ($actEstatusDTO != "") {
                    $antecedeActCtrl = new AntecedesactuacionesController();
                    $antecedeActDTO = new AntecedesactuacionesDTO();
                    $antecedeActDTO->setIdActuacionPadre($idActuacionPadre);
                    $antecedeActDTO->setIdActuacionHija($idActuacion);
                    $antecedeActDTO->setActivo("S");
                    $antecedeActDTO = $antecedeActCtrl->insertAntecedesactuaciones($antecedeActDTO, $proveedor);
                    if ($antecedeActDTO) {
                        if ($param["CadenaImputados"] != "") {
                            $Imputados = explode("-", $param["CadenaImputados"]);
                            foreach ($Imputados as $IdImputado) {
                                if ($IdImputado != "I" and $IdImputado != "") {
                                    //echo 'id= '.$IdImputado;
                                    $IdImputado = trim($IdImputado);
                                    $PersonasnotificartradicionalDto = New PersonasnotificartradicionalDTO();
                                    $PersonasnotificartradicionalDao = New PersonasnotificartradicionalDAO();

                                    $PersonasnotificartradicionalDto->setIdActuacion($idActuacion);
                                    $PersonasnotificartradicionalDto->setIdReferenciaParte($IdImputado);
                                    if($cveTipoCarpeta!='7'){
                                    $PersonasnotificartradicionalDto->setCveTipoParte(1);
                                    }
                                    else{
                                        $PersonasnotificartradicionalDto->setCveTipoParte(8);//Imputado exhorto
                                    }
                                    $PersonasnotificartradicionalDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificartradicionalDto->setActivo('S');
                                    $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->insertPersonasnotificartradicional($PersonasnotificartradicionalDto, $proveedor);
                                    if ($PersonasnotificartradicionalDto != "") {
                                        $transaccion = 0;
                                    } else {
                                        $transaccion = 1;
                                        echo "Tuve errores al insertar la notificación del IMPUTADO";
                                        break;
                                    }
                                }
                            }
                        }

                        if ($param["CadenaDefensoresOfendidos"] != "") {
                            $DefensoresOfendidos = explode("-", $param["CadenaDefensoresOfendidos"]);
                            foreach ($DefensoresOfendidos as $idDefensor) {
                                if ($idDefensor != "D" and $idDefensor != "") {
                                    //echo 'idDO= '.$idDefensor;
                                    $idDefensor = trim($idDefensor);
                                    $PersonasnotificartradicionalDto = New PersonasnotificartradicionalDTO();
                                    $PersonasnotificartradicionalDao = New PersonasnotificartradicionalDAO();

                                    $PersonasnotificartradicionalDto->setIdActuacion($idActuacion);
                                    $PersonasnotificartradicionalDto->setIdReferenciaParte($idDefensor);
                                    $PersonasnotificartradicionalDto->setCveTipoParte(7); //Defensor Ofendido
                                    $PersonasnotificartradicionalDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificartradicionalDto->setActivo('S');
                                    //print_r($PersonasnotificartradicionalDto);
                                    $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->insertPersonasnotificartradicional($PersonasnotificartradicionalDto, $proveedor);
                                    if ($PersonasnotificartradicionalDto != "") {
                                        $transaccion = 0;
                                    } else {
                                        $transaccion = 1;
                                        echo "Tuve errores al insertar la notificación del DEFENSORE OFENDIDO";
                                        break;
                                    }
                                }
                            }
                        }

                        if ($param["CadenaOfendidos"] != "" and $param["CadenaOfendidos"] != "O-O") {
                            $Ofendidos = explode("-", $param["CadenaOfendidos"]);
                            foreach ($Ofendidos as $IdOfendido) {
                                if ($IdOfendido != "O" and $IdOfendido != "") {
                                    $IdOfendido = trim($IdOfendido);
                                    //echo 'id= '.$IdOfendido;
                                    $PersonasnotificartradicionalDto = New PersonasnotificartradicionalDTO();
                                    $PersonasnotificartradicionalDao = New PersonasnotificartradicionalDAO();

                                    $PersonasnotificartradicionalDto->setIdActuacion($idActuacion);
                                    $PersonasnotificartradicionalDto->setIdReferenciaParte($IdOfendido);
                                    $PersonasnotificartradicionalDto->setCveTipoParte(2); //Ofendido
                                    
                                    if($cveTipoCarpeta!='7'){
                                        $PersonasnotificartradicionalDto->setCveTipoParte(2); //Ofendido
                                    }
                                    else{
                                        $PersonasnotificartradicionalDto->setCveTipoParte(9); //Ofendido exhorto
                                    }
                                    
                                    $PersonasnotificartradicionalDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificartradicionalDto->setActivo('S');
                                    $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->insertPersonasnotificartradicional($PersonasnotificartradicionalDto, $proveedor);
                                    if ($PersonasnotificartradicionalDto != "") {
                                        $transaccion = 0;
                                    } else {
                                        $transaccion = 1;
                                        echo "Tuve errores al insertar la notificación del DEFENSOR IMPUTADO";
                                        break;
                                    }
                                }
                            }
                        }
                        if ($param["CadenaDefensoresImputados"] != "") {
                            $DefensoresImputados = explode("-", $param["CadenaDefensoresImputados"]);
                            foreach ($DefensoresImputados as $idDefensor) {
                                if ($idDefensor != "D" and $idDefensor != "") {
                                    //echo 'idDI= '.$idDefensor;
                                    $idDefensor = trim($idDefensor);
                                    $PersonasnotificartradicionalDto = New PersonasnotificartradicionalDTO();
                                    $PersonasnotificartradicionalDao = New PersonasnotificartradicionalDAO();

                                    $PersonasnotificartradicionalDto->setIdActuacion($idActuacion);
                                    $PersonasnotificartradicionalDto->setIdReferenciaParte($idDefensor);
                                    $PersonasnotificartradicionalDto->setCveTipoParte(6); //Defensor Imputado
                                    $PersonasnotificartradicionalDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificartradicionalDto->setActivo('S');
                                    $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->insertPersonasnotificartradicional($PersonasnotificartradicionalDto, $proveedor);
                                    if ($PersonasnotificartradicionalDto != "") {
                                        $transaccion = 0;
                                    } else {
                                        $transaccion = 1;
                                        echo "Tuve errores al insertar la notificación del DEFENSOR IMPUTADO";
                                        break;
                                    }
                                }
                            }
                        }

                        if ($transaccion == 0) {
                            $proveedor->execute("COMMIT");
                        } else {
                            $proveedor->execute("ROLLBACK");
                            //$proveedor->execute("COMMIT");
                            echo "Tuve errores al insertar en personasnotificarTradicional";
                        }
                    } else {
                        $proveedor->execute("ROLLBACK");
                        echo "Error al insertar en insertAntecedesactuaciones";
                    }
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo "Error al insertar en insertActuacionesestatus";
                }
            } else {
                $proveedor->execute("ROLLBACK");
                echo "Error al insertar en insertActuaciones";
            }
        } else {
            $proveedor->execute("ROLLBACK");
            echo "Error al intentar obtener contador en contadoresDto";
        }

        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion(28); // insercion de actuacion
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($ActuacionesDto);
        $dtoToJson->toJson("INSERCION");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
        $bitacoraDTO->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
        $bitacoraDTO->setCvePerfil("100"); // variable de session
        $bitacoraDTO->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

        $proveedor->close();

        return $ActuacionesDto;
    }

    //-----------------CONSULTA DE NOTIFICACIONES--------------------------------------
    public function consultarNotificaciones($ActuacionesDto, $param) {
    //print_r($param);
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
                $json .= '"idActuacionHija":' . json_encode(utf8_encode($actuacionDto->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacionDto->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacionDto->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoActuacion())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($actuacionDto->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($actuacionDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacionDto->getCveTipoCarpeta())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacionDto->getIdReferencia())) . ",";
                $json .= '"observacionesHijo":' . json_encode($actuacionDto->getObservaciones()) . ",";
//                $json .= '"observacionesHijo":' . json_encode(htmlentities($actuacionDto->getObservaciones())) . ',';
                
                $antecedeActCtrl = new AntecedesactuacionesController();
                $antecedeActDTO = new AntecedesactuacionesDTO();
                $antecedeActDTO->setIdActuacionHija($actuacionDto->getIdActuacion());
                //$antecedeActDTO->setActivo("S");
                $antecedeActDTO = $antecedeActCtrl->selectAntecedesactuaciones($antecedeActDTO);
                //print_r($antecedeActDTO);
                if($antecedeActDTO!=""){
                $idActuacionPadre=$antecedeActDTO[0]->getIdActuacionPadre();
                //echo $idActuacionPadre.'Padre';
                }
                $ActuacionesDtoPadre = new ActuacionesDTO();
                $ActuacionesDaoPadre = new ActuacionesDAO();
                $ActuacionesDtoPadre->setIdActuacion($idActuacionPadre);
                //print_r($ActuacionesDtoPadre);
                $ActuacionesDtoPadre = $ActuacionesDaoPadre->selectActuaciones($ActuacionesDtoPadre);
                if($ActuacionesDtoPadre!=""){
                $json .= '"idActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getIdactuacion())) . ",";
                $json .= '"ActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getCveTipoActuacion())) . ",";
                $json .= '"numActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getNumActuacion()).'/') . ",";
                $json .= '"aniActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getAniActuacion())) . ",";
                $json .= '"observacionesPadre":' . json_encode(($ActuacionesDtoPadre[0]->getObservaciones())) . ",";
//                $json .= '"observacionesPadre":' . json_encode(htmlentities($ActuacionesDtoPadre[0]->getObservaciones())) . ',';
                
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==2){$Origen="ACUERDO";}
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==5){$Origen="AUTO";}
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==6){$Origen="ACTA MINIMA";}
                $json .= '"Origen":' . json_encode(utf8_encode($Origen)) . ",";
                }
                else{
                    $json .='"idActuacionPadre": "",';   
                    $json .='"ActuacionPadre": "",';   
                    $json .='"numActuacionPadre": "",';   
                    $json .='"aniActuacionPadre": "",';   
                    $json .='"observacionesPadre": "",';   
                    $json .='"Origen": "-",';   
                }
                $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";

                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoNotificacion())) . ",";
                if ($actuacionDto->getCveTipoNotificacion() != "") {
                    $tipoNotifDTO = new TiposnotificacionesDTO();
                    $tipoNotifCtrl = new TiposnotificacionesController();
                    $tipoNotifDTO->setCveTipoNotificacion($actuacionDto->getCveTipoNotificacion());
                    $tipoNotifDTO = $tipoNotifCtrl->selectTiposnotificaciones($tipoNotifDTO);

                    $json .= '"descTipoNotificacion":' . json_encode(utf8_encode($tipoNotifDTO[0]->getDesTipoNotificacion())) . ",";
                }
                $fechaRegistrotmp=$actuacionDto->getFechaRegistro();
                $tmpFecha = explode(' ', $fechaRegistrotmp);
                $fecha= explode('-', $tmpFecha[0]);
                $fechaRegistro = $fecha[2].'/'.$fecha[1].'/'.$fecha[0]; 
                $json .= '"fechaRegistro":' . json_encode($fechaRegistro.' '.$tmpFecha[1]) . ",";
                $PersonasnotificartradicionalDto = new PersonasnotificartradicionalDTO();
                $PersonasnotificartradicionalDao = new PersonasnotificartradicionalDAO();
                $PersonasnotificartradicionalDto->setIdActuacion($actuacionDto->getIdActuacion());
                $PersonasnotificartradicionalDto->setActivo("S");
                
                $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->selectPersonasnotificartradicional($PersonasnotificartradicionalDto);
                if($PersonasnotificartradicionalDto!="" and $PersonasnotificartradicionalDto!=null)
                {
                $json .= '"totalNotificaciones":' . json_encode(count($PersonasnotificartradicionalDto)) . ",";    
                }
                else{$json .= '"totalNotificaciones":' . json_encode(0) . ",";  }
                $json .= '"DetalleNotificacion": [';
                $y = 1;
                if($PersonasnotificartradicionalDto!=""){
                     foreach ($PersonasnotificartradicionalDto as $Notificacion){        
                       $json.='{';
                       if($Notificacion->getCveTipoParte()==1){
                           $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                           $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                           $ImputadoscarpetasDto->setIdImputadoCarpeta($Notificacion->getIdReferenciaParte());
                           $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
                           $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getIdImputadoCarpeta())) . ",";
                           $json .='"tipo": "IMPUTADO",';    
                           if($ImputadoscarpetasDto[0]->getCveTipoPersona()==1){
                               if($ImputadoscarpetasDto[0]->getNombre()!=""){$json .= '"nombre":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getNombre())) . ",";}else{$json .='"nombre": "",';}
                               if($ImputadoscarpetasDto[0]->getPaterno()!=""){$json .= '"paterno":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getPaterno())) . ",";}else{$json .='"paterno": "",';}
                               if($ImputadoscarpetasDto[0]->getMaterno()!=""){$json .= '"materno":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getMaterno())) . ",";}else{$json .='"materno": "",';}
                           }
                           else
                           {
                               $json .= '"nombre":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getNombreMoral())) . ",";
                               $json .='"paterno": "",';
                               $json .='"materno": "",';
                           }
                       }
                       if($Notificacion->getCveTipoParte()==2){
                           $OfendidosCarpetasDto = new OfendidoscarpetasDTO();
                           $OfendidosCarpetasDao = new OfendidoscarpetasDAO();
                           $OfendidosCarpetasDto->setIdOfendidoCarpeta($Notificacion->getIdReferenciaParte());
                           $OfendidosCarpetasDto = $OfendidosCarpetasDao->selectOfendidoscarpetas($OfendidosCarpetasDto);

                           $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getIdOfendidoCarpeta())) . ",";
                           $json .='"tipo": "OFENDIDO",';    
                           if($OfendidosCarpetasDto[0]->getCveTipoPersona()==1){
                               if($OfendidosCarpetasDto[0]->getNombre()!=""){$json .= '"nombre":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getNombre())) . ",";}else{$json .='"nombre": "",';}
                               if($OfendidosCarpetasDto[0]->getPaterno()!=""){$json .= '"paterno":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getPaterno())) . ",";}else{$json .='"paterno": "",';}
                               if($OfendidosCarpetasDto[0]->getMaterno()!=""){$json .= '"materno":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getMaterno())) . ",";}else{$json .='"materno": "",';}
                           }
                           else
                           {
                               $json .= '"nombre":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getNombreMoral())) . ",";
                               $json .='"paterno": "",';
                               $json .='"materno": "",';
                           }
                       }    

                       if($Notificacion->getCveTipoParte()==6){   
                        $DefensoresimputadoscarpetasDto= new DefensoresimputadoscarpetasDTO();
                        $DefensoresimputadoscarpetasDao= new DefensoresimputadoscarpetasDAO();
                        $DefensoresimputadoscarpetasDto->setIdDefensorImputadoCarpeta($Notificacion->getIdReferenciaParte());
                        //$DefensoresimputadoscarpetasDto->setActivo('S');
                        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
                        if($DefensoresimputadoscarpetasDto!="")
                        {
                            $TiposdefensoresDto= new TiposdefensoresDTO();
                            $TiposdefensoresDao= new TiposdefensoresDAO();
                            $TiposdefensoresDto->setCveTipoDefensor($DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor());
                            //$TiposdefensoresDto->setActivo('S');
                            $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                                $json.= '"idDefensorImputado":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta())) . ",";
                                $json.= '"tipo":' . json_encode(utf8_encode('DEFENSOR IMPUTADO: '.$TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                $json.= '"nombre":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre())) . ",";
                                $json.= '"email":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getEmail())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                        }
                       }
                       
                       if($Notificacion->getCveTipoParte()==7){   
                            $DefensoresofendidoscarpetasDto= new DefensoresofendidoscarpetasDTO();
                            $DefensoresofendidoscarpetasDao= new DefensoresofendidoscarpetasDAO();
                            $DefensoresofendidoscarpetasDto->setIdDefensorOfendidoCarpeta($Notificacion->getIdReferenciaParte());
                            $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
                        if($DefensoresofendidoscarpetasDto!="")
                        {
                            $TiposdefensoresDto= new TiposdefensoresDTO();
                            $TiposdefensoresDao= new TiposdefensoresDAO();
                            $TiposdefensoresDto->setCveTipoDefensor($DefensoresofendidoscarpetasDto[0]->getCveTipoDefensor());
                            //$TiposdefensoresDto->setActivo('S');
                            $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);

                            $json.= '"IdDefensorOfendidoCarpeta":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getIdDefensorOfendidoCarpeta())) . ",";
                            $json.= '"tipo":' . json_encode(utf8_encode('DEFENSOR OFENDIDO: '.$TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                            $json.= '"nombre":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getNombre())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                            $json.= '"email":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getEmail())) . ",";
                        }
                       }    
                       
                        if($Notificacion->getCveTipoParte()==8){
                           $ImputadosexhortosDto = new ImputadosexhortosDTO();
                           $ImputadosexhortosDao = new ImputadosexhortosDAO();
                           $ImputadosexhortosDto->setIdImputadoExhorto($Notificacion->getIdReferenciaParte());
                           $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);
                           $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getIdImputadoExhorto())) . ",";
                           $json .='"tipo": "IMPUTADO",';    
                           if($ImputadosexhortosDto[0]->getCveTipoPersona()==1){
                               if($ImputadosexhortosDto[0]->getNombre()!=""){$json .= '"nombre":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getNombre())) . ",";}else{$json .='"nombre": "",';}
                               if($ImputadosexhortosDto[0]->getPaterno()!=""){$json .= '"paterno":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getPaterno())) . ",";}else{$json .='"paterno": "",';}
                               if($ImputadosexhortosDto[0]->getMaterno()!=""){$json .= '"materno":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getMaterno())) . ",";}else{$json .='"materno": "",';}
                           }
                           else
                           {
                               $json .= '"nombre":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getNombreMoral())) . ",";
                               $json .='"paterno": "",';
                               $json .='"materno": "",';
                           }
                       }
                    if($Notificacion->getCveTipoParte()==9){
                            $OfenfendidosexhortosDto = new OfenfendidosexhortosDTO();
                            $OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
                            $OfenfendidosexhortosDto->setIdOfenfendidoExhorto($Notificacion->getIdReferenciaParte());
                            $OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto);

                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getIdOfenfendidoExhorto())) . ",";
                            $json .='"tipo": "OFENDIDO",';    
                            if($OfenfendidosexhortosDto[0]->getCveTipoPersona()==1){
                                if($OfenfendidosexhortosDto[0]->getNombre()!=""){$json .= '"nombre":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getNombre())) . ",";}else{$json .='"nombre": "",';}
                                if($OfenfendidosexhortosDto[0]->getPaterno()!=""){$json .= '"paterno":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getPaterno())) . ",";}else{$json .='"paterno": "",';}
                                if($OfenfendidosexhortosDto[0]->getMaterno()!=""){$json .= '"materno":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getMaterno())) . ",";}else{$json .='"materno": "",';}
                            }
                            else
                            {
                                $json .= '"nombre":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                    }    


                       
                           $fechaNotificaciontmp=$Notificacion->getFechaNotificacion();
                           $tmpFecha = explode(' ', $fechaNotificaciontmp);
                           $fecha= explode('-', $tmpFecha[0]);
                           $fechaNotificacion = $fecha[2].'/'.$fecha[1].'/'.$fecha[0]; 
                           $json .= '"fechaNotificacion":' . json_encode($fechaNotificacion) . ",";
                           $json .= '"Instructivo":' . json_encode($Notificacion->getInstructivo()) . ",";
                           $json .= '"Correo":' . json_encode($Notificacion->getCorreo()) . "";

                           $json.='}';
                           $y++;
                           if ($y<=count($PersonasnotificartradicionalDto)) {
                               $json .= ",";
                           }
                     }
                }

                $json .= ']';

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
            //echo $json.'--Json--';
            return $json;
        } else {
            return "";
        }
    } 
    #-------------------------------------------------------------------------------------------------------------------------------
    #-------------------------CONSULTA DE ACTUACIONES Y PERSONAS NOTIFICAR--------------------------------------------------------
    public function ConsultarActuacionesImpOfElectronica($ActuacionesDto,$param) {
//        print_r($ActuacionesDto);
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " AND (cveTipoActuacion=2 OR cveTipoActuacion=5) ORDER BY idActuacion DESC ", null, null);
        //print_r($ActuacionesDto);
        if ($ActuacionesDto!= "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalActuaciones":"' . count($ActuacionesDto) . '",';
            $json .= '"data":[';
            $x = 1;

            foreach ($ActuacionesDto as $Actuacion) {
                $json .= "{";
                $json .= '"idActuacion":' . json_encode(utf8_encode($Actuacion->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($Actuacion->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($Actuacion->getAniActuacion())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($Actuacion->getIdReferencia())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($Actuacion->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($Actuacion->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($Actuacion->getCveTipoCarpeta())) . ",";
                
                $TiposActuacionesDto = new TiposactuacionesDTO();
                $TiposActuacionesDao = new TiposactuacionesDAO();
                $TiposActuacionesDto->setCveTipoActuacion($Actuacion->getCveTipoActuacion());
                $TiposActuacionesDto = $TiposActuacionesDao->selectTiposactuaciones($TiposActuacionesDto);
                $json .= '"TipoActuacion":' . json_encode(utf8_encode($TiposActuacionesDto[0]->getDesTipoActuacion())) . ","; 
                $json .= '"CveTipoActuacion":' . json_encode(utf8_encode($TiposActuacionesDto[0]->getCveTipoActuacion())) . ",";  
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Actuacion->getCveJuzgado())) . ",";
                $json .= '"sintesis":' . json_encode($Actuacion->getSintesis()) . ",";
                $json .= '"observaciones":' . json_encode($Actuacion->getObservaciones()) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Actuacion->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Actuacion->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($Actuacion->getCveTipoResolucion())) . ",";
                if ($Actuacion->getCveTipoResolucion()!= "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolDAO = new TiposresolucionesDAO();
                    $tipoResolDTO->setCveTipoResolucion($Actuacion->getCveTipoResolucion());
                    $tipoResolDTO = $tipoResolDAO->selectTiposresoluciones($tipoResolDTO);
                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion()));
                }else{$json .='"descTipoResolucion": ""';}
                $json .= "}";
                $x++;
                if ($x <= count($ActuacionesDto)) {
                    $json .= ",";
                }
            } 
                $json .= '],';   

            $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
            $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
            $RelacionexpedientejuzgadoDto->setIdCarpetaJudicial($param["IdCarpetaJudicial"]);
            $RelacionexpedientejuzgadoDto->setActivo('S');
            $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
            
            if($RelacionexpedientejuzgadoDto!="" or $RelacionexpedientejuzgadoDto!=null){
            $json .= '"totalCountPersonasExpediente":' . json_encode(count($RelacionexpedientejuzgadoDto)) . ",";    
            $json .= '"totalCountPersonas":' . json_encode(count($RelacionexpedientejuzgadoDto)) . ",";    
            }else{
                $json .= '"totalCountPersonas":' . json_encode(0) . ","; 
                $json .= '"PersonaAutorizadas":[';
            }
            $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
     if($RelacionexpedientejuzgadoDto!=""){
            $json .= '"PersonaAutorizadas":[';
            foreach ($RelacionexpedientejuzgadoDto as $Relacion) {
                $jsonAux = '{';
                $jsonAux .= '"totalCount":"1",';
                $jsonAux .= '"idPersonaAutorizada":[';
                    $jsonAux .= json_encode(utf8_encode($Relacion->getIdPersonaAutorizada()));
                $jsonAux .= ']}';   
            $respuesta=$personaAutorizadaCliente->selectPersonaAutorizada($jsonAux);//RAM
            $respuesta=json_decode($respuesta);
              
            
            if($respuesta->Tipo == "OK"){
                    $totalCount = $respuesta->totalCount;
            }else{
                $totalCount=0;
            }
            
            $y=1;
//            $json .= '"totalCountPersonas":"' . $totalCount . '",';
//            $json .= '"PersonaAutorizadas":[';
            if($totalCount>0){
                foreach ($respuesta->data as $datos) {
                    $json .= '{';
                    $json .= '"idrelacionExpedienteJuzgado":'.json_encode($Relacion->getIdRelacionExpedienteJuzgado()) . ",";
                    $json .= '"idPersonaAutorizada":'.json_encode($datos->idPersonaAutorizada) . ",";
                    $json .= '"nombre":'.json_encode($datos->nombre) . ",";
                    $json .= '"paterno":'.json_encode($datos->paterno) . ",";
                    $json .= '"materno":'.json_encode($datos->materno) . ",";
                    $json .= '"cedula":'.json_encode($datos->cedula) . ",";
                    $json .= '"email":'.json_encode($datos->email) . ",";
                        $EstatusRegistro=$datos->cveEstatusRegistro;
                        $EstatusCorreo=$datos->statusGenercionCorreo;
                    if($EstatusRegistro=='2' and $EstatusCorreo=='2'){$mostrar='Si';}else{$mostrar='No';}
                    $json .= '"permiso":'.json_encode($mostrar) . ",";
                    
                        #----------------CC Detalle
                    $AntecedesNotificacionesDto = new AntecedesnotificacionesDTO();
                    $AntecedesNotificacionesDao = new AntecedesnotificacionesDAO();
                    $AntecedesNotificacionesDto->setIdPersonaAutorizadaPadre($datos->idPersonaAutorizada);
                    $AntecedesNotificacionesDto->setActivo('S');
                    $AntecedesNotificacionesDto = $AntecedesNotificacionesDao->selectAntecedesnotificaciones($AntecedesNotificacionesDto);
                    
                    if($AntecedesNotificacionesDto!=0){$totalcc=count($AntecedesNotificacionesDto);}else{$totalcc=0;}
                    $json .= '"totalCopias":'.json_encode($totalcc) . ",";
                         $json .= '"ConCopia":[';
                                if($AntecedesNotificacionesDto!=0){
                                        $w=1;
                                        foreach ($AntecedesNotificacionesDto as $copiar){
                                            $jsonAux = '{';
                                            $jsonAux .= '"totalCount":"1",';
                                            $jsonAux .= '"idPersonaAutorizada":[';
                                            $jsonAux .= json_encode(utf8_encode($copiar->getIdPersonaAutorizadaHijo()));
                                            $jsonAux .= ']}';   
                                            $respuestaCopia=$personaAutorizadaCliente->selectPersonaAutorizada($jsonAux);//RAM
                                            $respuestaCopia=json_decode($respuestaCopia);
                                            
                                            if(isset($respuestaCopia->totalCount)){
                                                if($respuestaCopia!="" or $respuestaCopia!=null){
                                                    $totalCountCopia = $respuestaCopia->totalCount;
                                                }else{$totalCountCopia=0;}
                                            } 
                                            else{$totalCountCopia=0;}
                              //            print_r($respuesta);
                                                $json .= '{';
                                            if($totalCountCopia>0){
                                                foreach ($respuestaCopia->data as $datos) {
                                                $json .= '"idPersonaAutorizadacc":'.json_encode($datos->idPersonaAutorizada) . ",";
                                                $json .= '"nombrecc":'.json_encode($datos->nombre) . ",";
                                                $json .= '"paternocc":'.json_encode($datos->paterno) . ",";
                                                $json .= '"maternocc":'.json_encode($datos->materno) . ",";
                                                $json .= '"cedulacc":'.json_encode($datos->cedula) . ",";
                                                $json .= '"emailcc":'.json_encode($datos->email) . ",";
                                                
                                                $EstatusRegistro=$datos->cveEstatusRegistro;
                                                $EstatusCorreo=$datos->statusGenercionCorreo;
                                                if($EstatusRegistro=='2' and $EstatusCorreo=='2'){$mostrar='Si';}else{$mostrar='No';}
                                                $json .= '"permiso":'.json_encode($mostrar);
                                                }
                                            }    
                                                $json .= "}";
                                        $w++;
                                        if($w <= $totalcc) {
                                            $json .= ",";
                                        }

                                    } 
                                }
                                    //echo '--jsonAux--'.$jsonAux;
                               // }    
                            $json .= ']';                                              
                        #-----------------
                        break;
                    $json .= "}";
                            } 
                        }
                        
                    else{
                        $json .= '{';
                        $json .= '"idrelacionExpedienteJuzgado":"NA",';
                        $json .= '"ConCopia":[]';  
//                        $json .= "}";
                    }     
                    $y++;
                    $json .= "}";
                    if($y <= count($RelacionexpedientejuzgadoDto)) {
                        $json .= ",";
                    }
                } 
        }    
            $json .= ']';             
        $json .= "}";
                
        //echo '--Json--'.$json.'--Json--';
        return $json;
    }    
    else
    {
        $json = '{"type":"OK",';
        $json .= '"totalActuaciones":"0",';
        $json .= '"totalCountPersonas":"0"';
        $json .= '}';
        return $json;
    }
}    


    #----------GUARDAR NOTIFICACIONES-----------------------------------------------------------------------------------------------
     public function GuardarNotificacionElectronica($ActuacionesDto,$param) {
         //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $idActuacionPadre=$param["idActuacionPadre"];
        if($param["fechaNotificacion"]!=""){
            $fecha = explode("/", $param["fechaNotificacion"]);
            $fechaNotificacion=$fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
            $fecha=$param["fechaNotificacion"];
        }else{$fechaNotificacion="";$fecha="";}

        $transaccion=0;
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe');//sigejupe
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion

        $contadoresDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion()); // tipo de actuacion
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);

        if ($contadoresDto != "") {
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDao = new ActuacionesDAO();
            
            $Actuacionestmp= New ActuacionesDTO();
            $Actuacionestmp = $ActuacionesDao->selectActuaciones($Actuacionestmp,null, " ORDER BY idActuacion DESC LIMIT 1 ",null, " idActuacion+1 idActuacion ");
            //print_r($Actuacionestmp);
            foreach ($Actuacionestmp as $id)
            {
            $idActuacion=$id["idActuacion"];
            }
            $ActuacionesDto->setidActuacion($idActuacion);
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
            if ($ActuacionesDto != ""){ 
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();
                $actEstatusDTO->setIdActuacion($idActuacion);
                $actEstatusDTO->setCveEstatus(22);//Registrar Notificación Electrónica
                $actEstatusDTO->setActivo("S");
                $actEstatusDTO = $actEstatusCtrl->insertActuacionesestatus($actEstatusDTO, $proveedor);//????checar
                if($actEstatusDTO!=""){
                    $antecedeActCtrl = new AntecedesactuacionesController();
                    $antecedeActDTO = new AntecedesactuacionesDTO();
                    $antecedeActDTO->setIdActuacionPadre($idActuacionPadre);
                    $antecedeActDTO->setIdActuacionHija($idActuacion);
                    $antecedeActDTO->setActivo("S");
                    $antecedeActDTO = $antecedeActCtrl->insertAntecedesactuaciones($antecedeActDTO, $proveedor);
                        if($antecedeActDTO){
                            if($param["CadenaPersonas"]!="" ){
                                $Personas = explode("-", $param["CadenaPersonas"]);
                                //$CadenaEmails = explode("/", $param["CadenaEmails"]);
                                $CadenaNombres = explode("/", $param["CadenaNombres"]); 
                                $CadenaCedulas = explode("/", $param["CadenaCedulas"]); 
                                $y=0;
                                foreach ($Personas as $idPersona) {
                                    if($idPersona!="P" and $idPersona!=""){
                                        //echo 'id= '.$idPersona;
                                    $idPersona=trim($idPersona);
                                    $PersonasnotificarDto= New PersonasnotificarDTO();
                                    $PersonasnotificarDao= New PersonasnotificarDAO();
                                        
                                    $PersonasnotificarDto->setIdActuacion($idActuacion);
                                    $PersonasnotificarDto->setIdRelacionExpedienteJuzgado($idPersona);
                                    $idRelacionExpedienteJuzgado=$idPersona;
                                    $PersonasnotificarDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificarDto->setCorreo($CadenaCedulas[$y].'@pjedomex.gob.mx');
                                    $Cadena=str_replace("Ã±", "ñ", $CadenaCedulas[$y]);
                                    $emailok=utf8_decode($Cadena).'@pjedomex.gob.mx';
                                    $cedula=$CadenaCedulas[$y];
                                    $nombrePersona=utf8_decode($CadenaNombres[$y]);
                                    $PersonasnotificarDto->setActivo('S');
                                    
                                        #------------------------------CUERPO: INSTRUCTIVO

                                        $numero=$ActuacionesDto[0]->getNumero();
                                        $anio=$ActuacionesDto[0]->getAnio();

                                        $TiposCarpetaDto = new TiposcarpetasDTO();
                                        $TiposCarpetaDao = new TiposcarpetasDAO();
                                        $TiposCarpetaDto->setCveTipoCarpeta($ActuacionesDto[0]->getCveTipoCarpeta());
                                        $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                                        $DesCarpeta=$TiposCarpetaDto[0]->getDesTipoCarpeta();
                                        $Carpeta=$DesCarpeta.' '.$numero.'/'.$anio;

                                        $JuzgadosDto = new JuzgadosDTO();
                                        $JuzgadosDao = new JuzgadosDAO();
                                        $JuzgadosDto->setCveJuzgado($ActuacionesDto[0]->getCveJuzgado());
                                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                                        $DesJuzgado=$JuzgadosDto[0]->getDesJuzgado();

                                        $RelacionExpedienteJuzgadoDto = new RelacionexpedientejuzgadoDTO();
                                        $RelacionExpedienteJuzgadoDao = new RelacionexpedientejuzgadoDAO();
                                        $RelacionExpedienteJuzgadoDto->setIdRelacionExpedienteJuzgado($idRelacionExpedienteJuzgado);
                                        $RelacionExpedienteJuzgadoDto = $RelacionExpedienteJuzgadoDao->selectRelacionexpedientejuzgado($RelacionExpedienteJuzgadoDto);

                                        $TiposPartesDto = new TipospartesDTO();
                                        $TiposPartesDao = new TipospartesDAO();
                                        $TiposPartesDto->setCveTipoParte($RelacionExpedienteJuzgadoDto[0]->getCveTipoParte());
                                        $TiposPartesDto = $TiposPartesDao->selectTipospartes($TiposPartesDto);
                                        $TipoParte=$TiposPartesDto[0]->getDescTipoParte();

                                        $strCuerpoEmail = '<html><head><title>Poder Judicial del Estado de M&eacute;xico</title></head><body style="background: #F2F2F2; font-family: arial;">';
                                        $strCuerpoEmail .= '<div style="width:700px; height:auto; background:#E3E3E3; margin: 0 auto 0 auto;">';
                                        $strCuerpoEmail .= '<div style="width:700px; border-bottom: 1px solid #CCCCCC; border-top: 5px solid #669900; padding-top:10px; padding-buttom:10px; background:#FFFFFF; text-align:center; height:50px; font-size:30px; color:#555555;">';
                                        $strCuerpoEmail .= 'Notificaci&oacute;n Electr&oacute;nica</div>';
                                        $strCuerpoEmail .= '<br>';

                                        $strCuerpoEmail .= '<div style="background: #FFFFFF; width:660px; height:100px; padding:10px; margin:0 auto 0 auto; border: 1px solid #999999;">';
                                        $strCuerpoEmail .= '<table border="0" cellpadding="0" cellspacing="0" border="0" width="90%" align="center" style="font-size: 12px; color:#555555;">';
                                        $strCuerpoEmail .= '<tr><td align="right"><b>DESTINATARIO:</b> </td><td align="left"><div style="text-transform: uppercase; padding-left:5px;">' . $nombrePersona . '</div></td></tr>';
                                        $strCuerpoEmail .= '<tr><td align="right"><b>CARPETA ADMINISTRATIVA: </b> </td><td align="left"><div style="padding-left:5px;">' . $Carpeta  . '</div></td></tr>';
                                        $strCuerpoEmail .= '<tr><td align="right"><b>JUZGADO:</b> </td><td align="left"><div style="padding-left:5px;">' . $DesJuzgado . '</div></td></tr>';
                                        $strCuerpoEmail .= '</table>';
                                        $strCuerpoEmail .= '</div>';
                                        $strCuerpoEmail .= '<br>';

                                        $strCuerpoEmail .= '<div style="background: #FFFFFF; width:660px; height: auto; padding: 10px; margin:0 auto 0 auto; border: 1px solid #CCCCCC; text-align: justify; font-size: 14px; color:#777777;\">';
                                        $strCuerpoEmail .= 'SE NOTIFICA PROVE&Iacute;DO AL FISCAL Y DEFENSA PRIVADA. </br>';
                                        $strCuerpoEmail .= 'RAZ&Oacute;N DE NOTIFICACI&Oacute;N. ';
                                        $strCuerpoEmail .= ' SIENDO LAS ' . date('H', time()) . ":" . date('i', time()) . ":" . date('s', time()) . ' HORAS DEL D&Iacute;A ';
                                        $strCuerpoEmail .= date('d', time()) . '/' . date('m', time()) . ' DEL A&Ntilde;O ' . date('Y', time());
                                        $strCuerpoEmail .= ', el suscrito Notificador <strong>'.$_SESSION["nombre"]. ' </strong> en t&eacute;rminos de lo dispuesto por los art&iacute;culos 100, 102, 103 y 105 del Código de Procedimientos Penales vigente en el Estado de M&eacute;xico, en el domicilio se&ntilde;alado en autos para o&iacute;r y recibir notificaciones por el Defensor P&uacute;blico, consistente en el correo electr&oacute;nico <strong>' .$cedula.'@pjedomex.gob.mx </strong>, procedo a notificarle la resoluci&oacute;n de fecha ';
                                        $strCuerpoEmail .= '<strong> '.$fecha.'</strong>';
                                        $strCuerpoEmail .= '  del a&ntilde;o en curso, emitido en la <strong>CARPETA  ADMINISTRATIVA  ' .$Carpeta. '  , </strong> del <strong> ' . $DesJuzgado . ' </strong>, mediante el documento que se adjunta al presente correo electr&oacute;nico, surtiendo efectos de notificaci&oacute;n en forma personal, lo que asienta para debida constancia legal. ';
                                        $strCuerpoEmail .= '</br>DOY FE.</br>';
                                        $strCuerpoEmail .= '</br></br>';
                                        $strCuerpoEmail .= '<strong>NOTIFICADOR</strong></br>';
                                        $strCuerpoEmail .= $_SESSION["nombre"].'</br>';
                                        $strCuerpoEmail .= '</div>';
                                        $strCuerpoEmail .= "<br>";
                                        $strCuerpoEmail .= "</div>";
                                        $strCuerpoEmail .= "</div></body></html>";
                                        #------------------------------                                            

                                    
                                    $PersonasnotificarDto->setInstructivo($strCuerpoEmail);    
                                    $PersonasnotificarDto=$PersonasnotificarDao->insertPersonasnotificar($PersonasnotificarDto, $proveedor);
                                        if($PersonasnotificarDto!="")
                                        {
//                                           echo $cedula.'--cedula--' ;
//                                           echo $nombrePersona.'--nombre--' ;
//                                           print_r($ActuacionesDto);
                                            // **************************************+ envio de correo ********************
                                            $subject="Notificacion Electronica";
                                            $envioCorreo = $this->generaCorreo($cedula,$nombrePersona,$fecha,$subject,$strCuerpoEmail);
                                            if($envioCorreo){
                                            $transaccion=0;
                                        }
                                            #Envío de correo CC
                                            if($param["CadenaEmailscc"]!=""){
                                                $CadenaEmailscc = explode("/", $param["CadenaEmailscc"]);
                                                $subject="Copia: Notificacion Electronica";
                                                foreach ($CadenaEmailscc as $emailcc) {
                                                    if($emailcc!="C" and $emailcc!=""){
                                                    $emailcc=trim($emailcc);
                                                            $envioCorreo = $this->generaCorreo($cedula,$nombrePersona,$fecha,$subject,$strCuerpoEmail);
                                                            if($envioCorreo){
                                                            $transaccion=0;
                                                        }
                                                    }
                                                }
                                            }  
                                            // **************************************+ envio de correo ********************
                                        }
                                        else{
                                            $transaccion=1;
                                            echo "Tuve errores al insertar la notificación";
                                            break;
                                        }
                                    }
                                    $y=$y+1;
                                }
                            }
                            if ($transaccion==0 ) {
                                $proveedor->execute("COMMIT");
                            } 
                            else {
                                $proveedor->execute("ROLLBACK");
                                //$proveedor->execute("COMMIT");
                                echo "Tuve errores al insertar en personasnotificar";
                            }
                        }else {
                            $proveedor->execute("ROLLBACK");
                            echo "Error al insertar en insertAntecedesactuaciones";
                        }
                    }else {
                        $proveedor->execute("ROLLBACK");
                        echo "Error al insertar en insertActuacionesestatus";
                    }
                }else {
                    $proveedor->execute("ROLLBACK");
                    echo "Error al insertar en insertActuaciones";
                }
            }else {
                $proveedor->execute("ROLLBACK");
                echo "Error al intentar obtener contador en contadoresDto";
            }                           

        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion(28); // insercion de actuacion
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($ActuacionesDto);
        $dtoToJson->toJson("INSERCION");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
        $bitacoraDTO->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
        $bitacoraDTO->setCvePerfil("100"); // variable de session
        $bitacoraDTO->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

        $proveedor->close();

        return $ActuacionesDto;
    }
    
    public function generaCorreo($cedula,$nombrePersona,$fecha,$subject,$strCuerpoEmail){
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

          $mail->AddAddress($cedula."@pjedomex.gob.mx");
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
 
          $mail->AddAttachment($zipname);*/

     
         $mail->IsHTML(true);
         $mail->MsgHTML($strCuerpoEmail);
         $mail->WordWrap = 50;
         $mensaje="";
     
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
    
    //-----------------CONSULTA DE NOTIFICACIONES ELECTRÓNICAS--------------------------------------
    public function consultarDetalleElectronica($ActuacionesDto, $param) {
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();
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
                $json .= '"idActuacionHija":' . json_encode(utf8_encode($actuacionDto->getIdActuacion())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($actuacionDto->getNumActuacion())) . ",";
                $json .= '"aniActuacion":' . json_encode(utf8_encode($actuacionDto->getAniActuacion())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoActuacion())) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($actuacionDto->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($actuacionDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($actuacionDto->getCveTipoCarpeta())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($actuacionDto->getIdReferencia())) . ",";
                $json .= '"observacionesHijo":' . json_encode($actuacionDto->getObservaciones()) . ",";
                
                $antecedeActCtrl = new AntecedesactuacionesController();
                $antecedeActDTO = new AntecedesactuacionesDTO();
                $antecedeActDTO->setIdActuacionHija($actuacionDto->getIdActuacion());
                //$antecedeActDTO->setActivo("S");
                $antecedeActDTO = $antecedeActCtrl->selectAntecedesactuaciones($antecedeActDTO);
                //print_r($antecedeActDTO);
                if($antecedeActDTO!=""){
                $idActuacionPadre=$antecedeActDTO[0]->getIdActuacionPadre();
                //echo $idActuacionPadre.'Padre';
                }
                $ActuacionesDtoPadre = new ActuacionesDTO();
                $ActuacionesDaoPadre = new ActuacionesDAO();
                $ActuacionesDtoPadre->setIdActuacion($idActuacionPadre);
                //print_r($ActuacionesDtoPadre);
                $ActuacionesDtoPadre = $ActuacionesDaoPadre->selectActuaciones($ActuacionesDtoPadre);
                if($ActuacionesDtoPadre!=""){
                $json .= '"idActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getIdactuacion())) . ",";
                $json .= '"ActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getCveTipoActuacion())) . ",";
                $json .= '"numActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getNumActuacion()).'/') . ",";
                $json .= '"aniActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getAniActuacion())) . ",";
                $json .= '"observacionesPadre":' . json_encode($ActuacionesDtoPadre[0]->getObservaciones()) . ",";
                
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==2){$Origen="ACUERDO";}
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==5){$Origen="AUTO";}
                if($ActuacionesDtoPadre[0]->getCveTipoActuacion()==6){$Origen="ACTA MINIMA";}
                $json .= '"Origen":' . json_encode(utf8_encode($Origen)) . ",";
                }
                else{
                    $json .='"idActuacionPadre": "",';   
                    $json .='"ActuacionPadre": "",';   
                    $json .='"numActuacionPadre": "",';   
                    $json .='"aniActuacionPadre": "",';   
                    $json .='"observacionesPadre": "",';   
                    $json .='"Origen": "-",';   
                }
                $tiposcarpetasDTO->setCveTipoCarpeta($actuacionDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";

                $json .= '"cveJuzgado":' . json_encode(utf8_encode($actuacionDto->getCveJuzgado())) . ",";
                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoNotificacion())) . ",";
                if ($actuacionDto->getCveTipoNotificacion() != "") {
                    $tipoNotifDTO = new TiposnotificacionesDTO();
                    $tipoNotifCtrl = new TiposnotificacionesController();
                    $tipoNotifDTO->setCveTipoNotificacion($actuacionDto->getCveTipoNotificacion());
                    $tipoNotifDTO = $tipoNotifCtrl->selectTiposnotificaciones($tipoNotifDTO);

                    $json .= '"descTipoNotificacion":' . json_encode(utf8_encode($tipoNotifDTO[0]->getDesTipoNotificacion())) . ",";
                }
                $fechaRegistrotmp=$actuacionDto->getFechaRegistro();
                $tmpFecha = explode(' ', $fechaRegistrotmp);
                $fecha= explode('-', $tmpFecha[0]);
                $fechaRegistro = $fecha[2].'/'.$fecha[1].'/'.$fecha[0]; 
                $json .= '"fechaRegistro":' . json_encode($fechaRegistro.' '.$tmpFecha[1]) . ",";

                $PersonasnotificarDto = new PersonasnotificarDTO();
                $PersonasnotificarDao = new PersonasnotificarDAO();
                $PersonasnotificarDto->setIdActuacion($actuacionDto->getIdActuacion());
                $PersonasnotificarDto->setActivo("S");
                
                $PersonasnotificarDto = $PersonasnotificarDao->selectPersonasnotificar($PersonasnotificarDto);
                if($PersonasnotificarDto!="" or $PersonasnotificarDto!=null){
                $json .= '"totalNotificaciones":' . json_encode(count($PersonasnotificarDto)) . ",";    
                }else{$json .= '"totalNotificaciones":' . json_encode(count(0)) . ","; }
                
                $json .= '"DetalleNotificacion": [';
                $y = 1;
                if($PersonasnotificarDto!=""){
                     foreach ($PersonasnotificarDto as $Notificacion){        
                       $json.='{';  
                           $json .= '"idActuacion":' . json_encode($Notificacion->getIdActuacion()) . ",";
                           $json .= '"idRelacionExp":' . json_encode($Notificacion->getIdRelacionExpedienteJuzgado()) . ",";
                           
                            $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
                            $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
                            $RelacionexpedientejuzgadoDto->setIdRelacionExpedienteJuzgado($Notificacion->getIdRelacionExpedienteJuzgado());
                            //$RelacionexpedientejuzgadoDto->setActivo('S');
                            $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
                            $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
                            if($RelacionexpedientejuzgadoDto!="")
                            {   
                                $jsonAux = '{';
                                $jsonAux .= '"totalCount":"1",';
                                //$jsonAux .= '"totalCount":"' . count($ActuacionesDto) . '",';
                                $jsonAux .= '"idPersonaAutorizada":[';
                                $jsonAux .= json_encode(utf8_encode($RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada()));
                                $jsonAux .= ']}';   
                                $respuesta=$personaAutorizadaCliente->selectPersonaAutorizada($jsonAux);//RAM
                                $respuesta=json_decode($respuesta);
                  //            print_r($respuesta);
                                $totalCount = $respuesta->totalCount;
                                
                                foreach ($respuesta->data as $datos) {
                                    if ($RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada()==$datos->idPersonaAutorizada) {
                                        $json .= '"idPersonaAutorizada":'.json_encode($datos->idPersonaAutorizada) . ",";
                                        $json .= '"nombre":'.json_encode($datos->nombre) . ",";
                                        $json .= '"paterno":'.json_encode($datos->paterno) . ",";
                                        $json .= '"materno":'.json_encode($datos->materno) . ",";
                                        $json .= '"email":'.json_encode(($datos->cedula).'@pjedomex.gob.mx'). ",";

                                        #----------------CC Detalle
                                        $AntecedesNotificacionesDto = new AntecedesnotificacionesDTO();
                                        $AntecedesNotificacionesDao = new AntecedesnotificacionesDAO();
                                        $AntecedesNotificacionesDto->setIdPersonaAutorizadaPadre($datos->idPersonaAutorizada);
                                        $AntecedesNotificacionesDto->setActivo('S');
                                        $AntecedesNotificacionesDto = $AntecedesNotificacionesDao->selectAntecedesnotificaciones($AntecedesNotificacionesDto);
                                        var_dump($AntecedesNotificacionesDto);
                                        if($AntecedesNotificacionesDto!=0){$totalcc=count($AntecedesNotificacionesDto);}else{$totalcc=0;}
                                        $json .= '"totalCopias":'.json_encode($totalcc) . ",";
                                             $json .= '"ConCopia":[';
                                                    if($AntecedesNotificacionesDto!=0){
                                                        $w=1;
                                                        foreach ($AntecedesNotificacionesDto as $copiar){
                                                            $jsonAux = '{';
                                                            $jsonAux .= '"totalCount":"1",';
                                                            $jsonAux .= '"idPersonaAutorizada":[';
                                                            $jsonAux .= json_encode(utf8_encode($copiar->getIdPersonaAutorizadaHijo()));
                                                            $jsonAux .= ']}';   
                                                            $respuestaCopia=$personaAutorizadaCliente->selectPersonaAutorizada($jsonAux);//RAM
                                                            $respuestaCopia=json_decode($respuestaCopia);
                                              //            print_r($respuesta);
                                                            $totalCount = $respuestaCopia->totalCount;

                                                            $json .= '{';
                                                         foreach ($respuestaCopia->data as $datos) {   
                                                            $json .= '"idPersonaAutorizadacc":'.json_encode($datos->idPersonaAutorizada) . ",";
                                                            $json .= '"nombrecc":'.json_encode($datos->nombre) . ",";
                                                            $json .= '"paternocc":'.json_encode($datos->paterno) . ",";
                                                            $json .= '"maternocc":'.json_encode($datos->materno) . ",";
                                                            $json .= '"cedulacc":'.json_encode($datos->cedula) . ",";
                                                            $json .= '"emailcc":'.json_encode($datos->email);
                                                         }    
                                                            $json .= "}";

                                                            $w++;
                                                            if($w <= $totalcc) {
                                                                $json .= ",";
                                                            }

                                                        } 
                                                    }        
                                               // }    
                                            $json .= '],';                                              
                                        #-----------------
                                        break;
                                    }
                                }
                            }
                            
                           $fechaNotificaciontmp=$Notificacion->getFechaNotificacion();
                           if($fechaNotificaciontmp!="" and $fechaNotificaciontmp!="2016"){
                           $tmpFecha = explode(' ', $fechaNotificaciontmp);
                           $fecha= explode('-', $tmpFecha[0]);
                           $fechaNotificacion = $fecha[2].'/'.$fecha[1].'/'.$fecha[0]; 
                           }else{$fechaNotificacion="";}
                           $json .= '"fechaNotificacion":' . json_encode($fechaNotificacion) . ",";
                           //$json .= '"Instructivo":' . json_encode($Notificacion->getInstructivo()) . ",";
                           $json .= '"Correo":' . json_encode($Notificacion->getCorreo()) . "";
                           $json.='}';
                           $y++;
                           if ($y<=count($PersonasnotificarDto)) {
                               $json .= ",";
                           }
                     }
                }

                $json .= ']';

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
            //echo $json.'--Json--';
            return $json;
        } else {
            return "";
        }
    } 
    #-------------------------------------------------------------------------------------------------------------------------------
    #------------------------Comienza Formulacion de imputacion---------------------------------------



}

?>