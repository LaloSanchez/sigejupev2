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
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/ActuacionesController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
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
//Incompetencias 
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/incompetencias/IncompetenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/incompetencias/IncompetenciasDAO.Class.php");
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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
/*
 * 
 * OFENDIDOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/ImagenesController.Class.php");    // para registrar estatus de las actuaciones
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php"); //Para NotificaciOn por correo
// error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

if (!isset($_SESSION)) {
    session_start();
}

class ActuacionesController {

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

    public function selectActuaciones($ActuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        //paginacion
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, $orden, $param, $fields);
        return $ActuacionesDto;
    }

    public function selectActuacionesAR($ActuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        //paginacion
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, $orden, $param, $fields);
        return $ActuacionesDto;
    }

    public function selectActuacionesCR($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->selectActuacionesCR($ActuacionesDto, " ORDER BY fechaRegistro DESC", $proveedor);
        return $ActuacionesDto;
    }

    public function insertActuaciones($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
        return $ActuacionesDto;
    }

    public function updateActuaciones($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
//$tmpDto = new ActuacionesDTO();
//$tmpDto = $ActuacionesDao->selectActuaciones($ActuacionesDto,$proveedor);
//if($tmpDto!=""){//$ActuacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
        return $ActuacionesDto;
//}
//return "";
    }

    public function deleteActuaciones($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->deleteActuaciones($ActuacionesDto, $proveedor);
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
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
        return $contadoresDto;
    }

    /**     * *************************************************************************************** */

    /**     * ************ METODOS PARA LAS CERTIFICACIONES ***************************************** */
    public function guardarActuacion_Certificacion($ActuacionesDto, $proveedor = null) {
        //buscar si no hay un registro previo con borrado lOgico
        //dato fijo por ser Certificacion
        $cveTipoActuacion = $ActuacionesDto->getCveTipoActuacion();
        //definiciOn de variables para obtener los valores del contador
        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtenciOn de nUmero de la tabla contadores
        $proveedor = null;
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor);
        $numActuacion = $numActuacion[0]->getNumero();
        //asignaciOn de variables en el DTO de las actuaciones
        $ActuacionesDto->setNumActuacion($numActuacion);
        $ActuacionesDto->setAniActuacion(date("Y"));
        //inserciOn de la ActuaciOn
        /* $ActuacionesDto->setObservaciones( utf8_decode( $ActuacionesDto->getObservaciones() ));
          error_log($ActuacionesDto->getObservaciones()); */
        $ActuacionesDto = $this->insertActuaciones($ActuacionesDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(51, 'INSERCION tblactuaciones', 'dto', $ActuacionesDto);
        return $ActuacionesDto;
    }

    public function toText($string) {
        return json_encode(utf8_encode($string));
    }

    public function eliminacionsentencia($ActuacionesDto) {
        $ActuacionesDTO = new ActuacionesDTO();
        $idactuac = $ActuacionesDto->getIdActuacion();
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $fechaserver = $proveedor->getfechaActual();

        $ImputadossentenciasDAO = new ImputadossentenciasDAO();
        $ImputadossentenciasDTO = new ImputadossentenciasDTO();

        $ImputadossentenciasDTO->setIdActuacion($idactuac);
        $ImputadossentenciasDTO->setActivo('S');
        $idSentencia = 0;
        $ImputadossentenciasDTO = $ImputadossentenciasDAO->selectImputadossentencias($ImputadossentenciasDTO);
        $error = false;
        if ($ImputadossentenciasDTO != "") {

            foreach ($ImputadossentenciasDTO as $row) {////////////recorre cada sentencia
                $idSentencia = $row->getIdImputadoSentencia(); //// id de sentenci para desactivar sus sanciones




                $ImputadossancionesDAO = new ImputadossancionesDAO();
                $ImputadossancionesDTO = new ImputadossancionesDTO();

                $ImputadossancionesDTO->setIdImputadoSentencia($idSentencia);
                $ImputadossancionesDTO->setActivo('S');
                $ImputadossancionesDTO = $ImputadossancionesDAO->selectImputadossanciones($ImputadossancionesDTO);

                if ($ImputadossancionesDTO != "") {

                    foreach ($ImputadossancionesDTO as $rs) {
                        $ImputadossancionesDTO2 = new ImputadossancionesDTO();
                        $ImputadossancionesDTO2->setActivo('N');
                        $ImputadossancionesDTO2->setIdImputadoSancion($rs->getIdImputadoSancion());
                        $ImputadossancionesDTO2->setFechaActualizacion($fechaserver);
                        $ImputadossancionesDTO2 = $ImputadossancionesDAO->updateImputadossanciones($ImputadossancionesDTO2, $proveedor);
                        if ($ImputadossancionesDTO2 != "") {///////////insertamos en bitacora la baja de las sanciones
                            $bitacoraDTO = new BitacoramovimientosDTO();
                            $bitacoraCtrl = new BitacoramovimientosController();
                            $bitacoraDTO->setCveAccion(281); // insercion de sentencia ACTUACION
                            $bitacoraDTO->setFechaMovimiento($fechaserver); //
                            $dtoToJson = new DtoToJson($ImputadossancionesDTO2);
                            $dtoToJson->toJson("ELIMINACION DE SANCIONES");
                            $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION DE SANCIONES")); //
                            $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                            $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                            $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                            if ($bitacoraDTO == "") {
                                $error = true;
                            }
                        }
                    }
                }

                ////////////////////fin baja sanciones

                $Imputadossentencias2DTO = new ImputadossentenciasDTO();
                $Imputadossentencias2DTO->setIdImputadoSentencia($idSentencia);
                $Imputadossentencias2DTO->setActivo('N');
                $Imputadossentencias2DTO->setFechaActualizacion($fechaserver);
                $Imputadossentencias2DTO = $ImputadossentenciasDAO->updateImputadossentencias($Imputadossentencias2DTO, $proveedor);
                if ($Imputadossentencias2DTO != "") {///////////insertamos en bitacora la baja de las sanciones
                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(280); // insercion de sentencia ACTUACION
                    $bitacoraDTO->setFechaMovimiento($fechaserver); //
                    $dtoToJson = new DtoToJson($ImputadossancionesDTO);
                    $dtoToJson->toJson("ELIMINACION DE SENTENCIA");
                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION DE SENTENCIA")); //
                    $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                    $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                    $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                    if ($bitacoraDTO == "") {
                        $error = true;
                    }
                }
            }
        }

        if ($idactuac != 0) {
            $ActuacionesDAO = new ActuacionesDAO();

            $ActuacionesDTO = $this->validarActuaciones($ActuacionesDTO);
            $ActuacionesDTO->setActivo('N');
            $ActuacionesDTO->setFechaActualizacion($fechaserver);
            $ActuacionesDTO->setIdActuacion($idactuac);
            $ActuacionesDTO = $ActuacionesDAO->updateActuaciones($ActuacionesDTO, $proveedor);
            if ($ActuacionesDTO != "") {
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(30); // insercion de sentencia ACTUACION
                $bitacoraDTO->setFechaMovimiento($fechaserver); //
                $dtoToJson = new DtoToJson($ActuacionesDTO);
                $dtoToJson->toJson("ELIMINACION DE ACTUACION (SENTENCIA)");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION DE ACTUACION(SENTENCIA)")); //
                $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($bitacoraDTO == "") {
                    $error = true;
                }
            }
        }





        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();
        return $ActuacionesDTO;
    }

    public function guardarSentencias($ActuacionesDto, $parametros, $datos) {
        $impofeDTO = new ImpofedelcarpetasDTO();
        $impofeDAO = new ImpofedelcarpetasDAO();
        $cveTipoActuacion = $datos['cveTipoActuacion'];
        $idreferencia = $datos['idReferencia'];
        $numero = $datos['numero'];
        $anio = $datos['anio'];
        $tipocareta = $datos['cveTipoCarpeta'];
        $cveJuzgado = $datos['cveJuzgado'];
        $sintesis = utf8_decode($datos['sintesis']);
        $sintesis = strtoupper($sintesis);
        $sintes = $sintesis;
        $sancion = $datos['sancion'];
        $idActuacionvigente = $datos['idaddaactuacion'];
        $resinsert = "";
        $cveUsuario = $datos['cveUsuario'];
        $activo = $datos['activo'];
        $cveTipoSentencia = $datos['cveTipoSentencia'];
        $cveTipoProcedimiento = $datos['cveTipoProcedimiento'];
        $fechaSentencia = $datos['fechaSentencia'];
        $fechaEjecutoria = $datos['fechaEjecutoria'];
        $fechaSentencia = $fechaSentencia[6] . $fechaSentencia[7] . $fechaSentencia[8] . $fechaSentencia[9] . '-' . $fechaSentencia[3] . $fechaSentencia[4] . '-' . $fechaSentencia[0] . $fechaSentencia[1];
        $fechaEjecutoria = $fechaEjecutoria[6] . $fechaEjecutoria[7] . $fechaEjecutoria[8] . $fechaEjecutoria[9] . '-' . $fechaEjecutoria[3] . $fechaEjecutoria[4] . '-' . $fechaEjecutoria[0] . $fechaEjecutoria[1];
        $idImpofedelcarpeta = $datos['idImpOfeDelCarpeta'];
        $idactuacion = $datos['idActuacion'];
        $juez = $datos['juez'];
        $estatussentencia = $datos['estatussent'];
        $observ = utf8_decode($datos['observaciones']);
        $txteditor = utf8_decode($datos['texteditor']);


        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();


        $fechaserver = $proveedor->getfechaActual();
        $fechaserver2 = $proveedor->getfechaActual();




        $error = false;
        $numactuacion = "";
        $anioactuacion = "";
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();



        $ActuacionesDTO->setCveTipoActuacion($cveTipoActuacion);
        $ActuacionesDTO->setIdReferencia($idreferencia);

        $ActuacionesDTO->setNumero($numero);
        $ActuacionesDTO->setAnio($anio);
        $ActuacionesDTO->setCveTipoCarpeta($tipocareta);
        $ActuacionesDTO->setCveJuzgado($cveJuzgado);
        $ActuacionesDTO->setCveUsuario($cveUsuario);
        $ActuacionesDTO->setActivo('S');
          $ActuacionesDTO->setObservaciones($observ);
        if ($txteditor == "estatus") {

            $ActuacionesDTO->setObservaciones($observ);
        } else {
            if ($txteditor != "estatus") {
                $ActuacionesDTO->setObservaciones($txteditor);
            }
        }

        $ActuacionesDTO->setCveTipoSentencia($cveTipoSentencia);
        $ActuacionesDTO->setCveTipoProcedimiento($cveTipoProcedimiento);
      
        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($cveJuzgado);
        $contadoresDto->setCveTipoActuacion(3);
        // $contadoresDto->setCveTipoCarpeta($tipocareta);
        $contadoresDto->setAnio(date("Y"));

        $ActuacionesDTO->setFechaSentencia($fechaSentencia);
        $ActuacionesDTO->setFechaEjecutoria($fechaEjecutoria);
        $ActuacionesDTO->setSintesis($sintesis);

        $ActuacionesDTO = $this->validarActuaciones($ActuacionesDTO);



        if ($idActuacionvigente != 0) {///////////Update a actuacion y juzgado
            $anterior = "";
            $resinsert = "";
            $ActuacionesDTO->setIdActuacion($idactuacion);
            $anterior = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, $proveedor);
            $ActuacionesDTO->setFechaActualizacion($fechaserver);
            //print_r($ActuacionesDTO);
             // error_log("actuaciones" . print_r($ActuacionesDto, true));
            $resinsert = $ActuacionesDAO->updateActuaciones($ActuacionesDto, $proveedor);





            for ($t = 0; $t < count($datos['idsagrega']); $t++) {

                if ($datos['idsagrega'][$t] != 0) {/////Si lleva valor en posicion inserto.

                    /*  $impofeDTO->set($datos['idsagrega'][$t]);
                      $impofeDTO->setActivo('S');
                      $cl=$impofeDAO->selectImpofedelcarpetas($impofeDTO);
                      $idImpofedelcarpeta=0;
                      if($cl!=""){
                      foreach($cl as $t){
                      $idImpofedelcarpeta=$t->getIdImpOfeDelCarpeta();
                      } */

                    $impsentDAO = new ImputadossentenciasDAO();
                    $impsentDTO = new ImputadossentenciasDTO();
                    $impsentDTO->setActivo('S');
                    $impsentDTO->setIdActuacion($idactuacion);
                    $impsentDTO->setIdImpOfeDelCarpeta($datos['idsagrega'][$t]);

                    $validaexiste = $impsentDAO->selectImputadossentencias($impsentDTO);

                    if ($validaexiste == "") {
                        $consexist = $impsentDAO->insertImputadossentencias($impsentDTO);

                        if ($consexist != "") {
                            $bitacoraDTO = new BitacoramovimientosDTO();
                            $bitacoraCtrl = new BitacoramovimientosController();
                            $bitacoraDTO->setCveAccion(270); // insercion de sentencia ACTUACION
                            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                            $dtoToJson = new DtoToJson($consexist);
                            $dtoToJson->toJson("INSERCION SENTENCIA");
                            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                            $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                            $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                            $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                            if ($bitacoraDTO == "") {
                                $error = true;
                            }
                        } else {
                            $error = true;
                        }
                    }
                }
            }











            if ($resinsert == "") {
                $error = true;
            } else {



                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(29); // insercion de sentencia ACTUACION
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                $dtoToJson = new DtoToJson($resinsert);
                $dtoToJson->toJson("ACTUALIZACION DE SENTENCIA");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("ACTUALIZACION")); //
                $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($bitacoraDTO == "") {
                    $error = true;
                }

                ///////////////insert juezgadoressentencias


                for ($cjz = 0; $cjz < count($juez); $cjz++) {

                    $juzgdao = new JuzgadoressentenciasDAO();
                    $juzgdto2 = new JuzgadoressentenciasDTO();

                    $juzgdto = new JuzgadoressentenciasDTO();
                    $juzgdto->setIdJuzgador($juez[$cjz]);
                    $juzgdto->setIdActuacion($idactuacion);
                    $juzgdto->setActivo('S');
                    $consup = $juzgdao->selectJuzgadoressentencias($juzgdto);

                    $idaupd = 0;
                    $juezactual = 0;

                    if ($consup != "") {
                        
                    } else {



                        $juzgdto2->setIdJuzgador($juez[$cjz]);
                        // $juzgdto2->setFechaActualizacion($fechaserver);
                        $juzgdto2->setIdActuacion($idActuacionvigente);
                        $UPDJ = $juzgdao->insertJuzgadoressentencias($juzgdto2);

                        if ($UPDJ != "") {

                            $bitacoraDTO = new BitacoramovimientosDTO();
                            $bitacoraCtrl = new BitacoramovimientosController();
                            $bitacoraDTO->setCveAccion(278); // insercion de sentencia ACTUACION
                            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                            $dtoToJson = new DtoToJson($UPDJ);
                            $dtoToJson->toJson("INSERCION DE JUZGADORES SENTENCIAS");
                            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION DE JUZGADORES SENTENCIAS")); //
                            $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                            $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                            $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                            if ($bitacoraDTO == "") {
                                $error = true;
                            }
                        }
                    }
                }
                ///////////////////////////////////////////////// insert actuaciones estatus


                $actest = new ActuacionesestatusController();    // para registrar estatus de las actuaciones
                $actdto = new ActuacionesestatusDTO();
                $actdto->setActivo('S');
                $actdt = new ActuacionesestatusDTO();
                $actdto->setIdActuacion($idactuacion);
                $const = $actest->selectActuacionesestatus($actdto);


                $estactual = 0;
                if ($const != "") {
                    $idass = 0;
                    foreach ($const as $cc) {
                        $idass = $cc->getIdActuacionesEstatus();
                        $estactual = $cc->getCveEstatus();
                    }




                    if ($idass != 0 && $estactual != $estatussentencia) {

                        // echo "inicio update";
                        $actdt->setCveEstatus($estatussentencia);
                        $actdt->setIdActuacionesEstatus($idass);
                        $actdt->setFechaActualizacion($fechaserver);
                        $res = $actest->updateActuacionesestatus($actdt);

                        $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion(276); // insercion de sentencia ACTUACION
                        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                        $dtoToJson = new DtoToJson($res);
                        $dtoToJson->toJson("ACTUALIZACION DE SENTENCIA EN ACTUACIONES");
                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("ACTUALIZACION DE SENTENCIA EN ACTUACIONES")); //
                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                        $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                        if ($bitacoraDTO == "") {
                            $error = true;
                        }
                    }
                }
            }


            $idactuacion = $idActuacionvigente;
        } else {///////////////insert actuacion
            $DelitoscateosDto = new ContadoresController();
            $contadoresDto = $DelitoscateosDto->getContador($contadoresDto, $proveedor);
            if ($contadoresDto != "" && count($contadoresDto) > 0) {
                $contadoresDto = $contadoresDto[0];
                $error = false;
                //  return;
            } else {
                $error = true;
                $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE CATEO DEL JUZGADO");
            }

            $insertoactuacion = false;
            $arregloinser = "";

            $numactuacion = $contadoresDto->getNumero();
            $anioactuacion = $contadoresDto->getAnio();

            $ActuacionesDTO->setNumActuacion($numactuacion);
            $ActuacionesDTO->setAniActuacion($anioactuacion);





            $resinsert = $ActuacionesDAO->insertActuaciones($ActuacionesDTO, $proveedor);
            $idactuacion = 0;
            if ($resinsert == "") {
                $error = true;
            } else {



                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(28); // insercion de sentencia ACTUACION
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                $dtoToJson = new DtoToJson($resinsert);
                $dtoToJson->toJson("INSERCION ACTUACION SENTENCIA");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($bitacoraDTO == "") {
                    $error = true;
                }

                foreach ($resinsert as $rc) {
                    $idactuacion = $rc->getIdActuacion();
                }

                ///////////////insert juezgadoressentencias
                for ($cjz = 0; $cjz < count($juez); $cjz++) {

                    $juzgdao = new JuzgadoressentenciasDAO();
                    $juzgdto = new JuzgadoressentenciasDTO();

                    $juzgdto->setIdActuacion($idactuacion);
                    $juzgdto->setIdJuzgador($juez[$cjz]);
                    $juzgdto->setActivo('S');
                    $insjg = $juzgdao->insertJuzgadoressentencias($juzgdto);
                    if ($insjg != "") {
                        $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion(277); // insercion de sentencia ACTUACION
                        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                        $dtoToJson = new DtoToJson($insjg);
                        $dtoToJson->toJson("INSERCION DE JUZGADORES SENTENCIAS");
                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                        $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                        if ($bitacoraDTO == "") {
                            $error = true;
                        }
                    }
                }

                ///////////////////////////////////////////////// insert actuaciones estatus
                $actest = new ActuacionesestatusController();    // para registrar estatus de las actuaciones
                $actdto = new ActuacionesestatusDTO();
                $actdto->setIdActuacion($idactuacion);
                $actdto->setCveEstatus($estatussentencia);
                $insb = $actest->insertActuacionesestatus($actdto);

                if ($insb != "") {
                    $bitacoraDTO = new BitacoramovimientosDTO();
                    $bitacoraCtrl = new BitacoramovimientosController();
                    $bitacoraDTO->setCveAccion(275); // insercion de sentencia ACTUACION
                    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($insb);
                    $dtoToJson->toJson("INSERCION DE SENTENCIA EN ACTUACIONES");
                    $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                    $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                    $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                    $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

                    if ($bitacoraDTO == "") {
                        $error = true;
                    }
                }
            }
        }

        for ($t = 0; $t < count($datos['idsagrega']); $t++) {

            if ($datos['idsagrega'][$t] != 0) {/////Si lleva valor en posicion inserto.
                /*  $impofeDTO->set($datos['idsagrega'][$t]);
                  $impofeDTO->setActivo('S');
                  $cl=$impofeDAO->selectImpofedelcarpetas($impofeDTO);
                  $idImpofedelcarpeta=0;
                  if($cl!=""){
                  foreach($cl as $t){
                  $idImpofedelcarpeta=$t->getIdImpOfeDelCarpeta();
                  } */

                $impsentDAO = new ImputadossentenciasDAO();
                $impsentDTO = new ImputadossentenciasDTO();
                $impsentDTO->setActivo('S');
                $impsentDTO->setIdActuacion($idactuacion);
                $impsentDTO->setIdImpOfeDelCarpeta($datos['idsagrega'][$t]);
                $validaexiste = $impsentDAO->selectImputadossentencias($impsentDTO);
                if ($validaexiste == "") {
                    $consexist = $impsentDAO->insertImputadossentencias($impsentDTO);

                    if ($consexist != "") {
                        $bitacoraDTO = new BitacoramovimientosDTO();
                        $bitacoraCtrl = new BitacoramovimientosController();
                        $bitacoraDTO->setCveAccion(270); // insercion de sentencia ACTUACION
                        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                        $dtoToJson = new DtoToJson($consexist);
                        $dtoToJson->toJson("INSERCION SENTENCIA");
                        $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
                        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
                        $bitacoraDTO = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                        if ($bitacoraDTO == "") {
                            $error = true;
                        }
                    } else {
                        $error = true;
                    }
                }
            }
        }




        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();
        return $resinsert;
    }

    public function guardarSancion($ActuacionesDto, $parametros, $datos) {



        $cveTipoActuacion = $datos['cveTipoActuacion'];
        $idreferencia = $datos['idReferencia'];
        $numero = $datos['numero'];
        $anio = $datos['anio'];
        $tipocareta = $datos['cveTipoCarpeta'];
        $cveJuzgado = $datos['cveJuzgado'];
        $sintesis = $datos['sintesis'];
        $sintesis = strtoupper($sintesis);
        $sintes = iconv('UTF-8', 'ISO-8859-1', $sintesis);
        $sancion = $datos['sancion'];


        $cveUsuario = $datos['cveUsuario'];
        $activo = $datos['activo'];
        $cveTipoSentencia = $datos['cveTipoSentencia'];
        $cveTipoProcedimiento = $datos['cveTipoProcedimiento'];
        $fechaSentencia = $datos['fechaSentencia'];
        $fechaEjecutoria = $datos['fechaEjecutoria'];

        $fechaSentencia = $fechaSentencia[6] . $fechaSentencia[7] . $fechaSentencia[8] . $fechaSentencia[9] . '-' . $fechaSentencia[3] . $fechaSentencia[4] . '-' . $fechaSentencia[0] . $fechaSentencia[1];
        $fechaEjecutoria = $fechaEjecutoria[6] . $fechaEjecutoria[7] . $fechaEjecutoria[8] . $fechaEjecutoria[9] . '-' . $fechaEjecutoria[3] . $fechaEjecutoria[4] . '-' . $fechaEjecutoria[0] . $fechaEjecutoria[1];

        $aniopris = $datos['aniopris'];
        $mespris = $datos['mespris'];
        $diapris = $datos['diapris'];
        $multa = $datos['multa'];
        $reparacio = $datos['reparacio'];
        $amonestacion = $datos['amonetacion'];
        $idImpofedelcarpeta = $datos['idImpOfeDelCarpeta'];
        $idactuacion = $datos['idActuacion'];


        //print_r($datos);


        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $error = false;


        $numactuacion = "";
        $anioactuacion = "";
        $ActuacionesDTO = new ActuacionesDTO();
        $ActuacionesDAO = new ActuacionesDAO();


        $ActuacionesDTO->setCveTipoActuacion($cveTipoActuacion);
        $ActuacionesDTO->setIdReferencia($idreferencia);

        $ActuacionesDTO->setNumero($numero);
        $ActuacionesDTO->setAnio($anio);
        $ActuacionesDTO->setCveTipoCarpeta($tipocareta);
        $ActuacionesDTO->setCveJuzgado($cveJuzgado);
        $ActuacionesDTO->setCveUsuario($cveUsuario);
        $ActuacionesDTO->setActivo('S');
        $ActuacionesDTO->setCveTipoSentencia($cveTipoSentencia);
        $ActuacionesDTO->setCveTipoProcedimiento($cveTipoProcedimiento);

        $consDAO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO);


        if ($consDAO != "") {
            foreach ($consDAO as $columna) {
                $idactuacion = $columna->getIdActuacion();
            }
        }




        if ($idactuacion == 0) {
            // echo "insertamos actuacion";
            $contadoresDto = new ContadoresDTO();
            $contadoresDto->setCveJuzgado($cveJuzgado);
            $contadoresDto->setCveTipoActuacion(3);
            $contadoresDto->setCveTipoCarpeta($tipocareta);
            $contadoresDto->setAnio(date("Y"));
            $DelitoscateosDto = new ContadoresController();
            $contadoresDto = $DelitoscateosDto->getContador($contadoresDto, $proveedor);
            if ($contadoresDto != "" && count($contadoresDto) > 0) {
                $contadoresDto = $contadoresDto[0];

                error == false;
            } else {
                $error = true;
                $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE CATEO DEL JUZGADO");
            }




            $numactuacion = $contadoresDto->getNumero();
            $anioactuacion = $contadoresDto->getAnio();
            $ActuacionesDTO->setNumActuacion($numactuacion);
            $ActuacionesDTO->setAniActuacion($anioactuacion);
            $ActuacionesDTO->setFechaSentencia($fechaSentencia);
            $ActuacionesDTO->setFechaEjecutoria($fechaEjecutoria);
            $ActuacionesDTO->setSintesis($sintesis);

            $ActuacionesDTO = $this->validarActuaciones($ActuacionesDTO);
            $impsentDAO = new ImputadossentenciasDAO();
            $impsentDTO = new ImputadossentenciasDTO();
            $impsentDTO->setActivo('S');
            $impsentDTO->setIdImpOfeDelCarpeta($idImpofedelcarpeta);
            $consexist = $impsentDAO->selectImputadossentencias($impsentDTO);
            if ($consexist != "") {

                foreach ($consexist as $cmp) {
                    $idactuacion = $cmp->getIdActuacion();
                }
            } else {
                $resinsert = $ActuacionesDAO->insertActuaciones($ActuacionesDTO, $proveedor);

                if ($resinsert == "") {
                    $error = true;
                } else {
                    foreach ($resinsert as $rc) {
                        $idactuacion = $rc->getIdActuacion();
                    }
                }
            }











            // echo "iserta------------------";
            //  print_r($resinsert);            
        }


        $impsentDAO = new ImputadossentenciasDAO();
        $impsentDTO = new ImputadossentenciasDTO();
        $impsentDTO->setIdActuacion($idactuacion);
        $impsentDTO->setActivo('S');
        $impsentDTO->setIdImpOfeDelCarpeta($idImpofedelcarpeta);
        $consexist = $impsentDAO->selectImputadossentencias($impsentDTO);
        $existesancion = 0;
        $idimpsent = 0;
        if ($consexist != "") {//////////////////si no existe sentencia insertamos
            // echo "ya existe en sentencia";
            foreach ($consexist as $imptsent) {
                $idimpsent = $imptsent->getIdImputadoSentencia();
            }

            // echo "fin ya existe en sentencia---------------------";
            $error = true;
        } else {
            $impsentDTO->setActivo('S');
            $cons = $impsentDAO->insertImputadossentencias($impsentDTO, $proveedor);
            if ($cons == "") {
                echo "error al insertar sentencia";
                $error = true;
            } else {

                foreach ($cons as $imptsent) {
                    $idimpsent = $imptsent->getIdImputadoSentencia();
                }
            }
        }


        ////////////////////id de sentencia
        $impsancionDAO = new ImputadossancionesDAO();
        $impsancionDTO = new ImputadossancionesDTO();
        $impsancionDTO->setIdImputadoSentencia($idimpsent);
        $impsancionDTO->setCveTipoSancion($sancion);
        $impsancionDTO->setActivo('S');

        $consimpsanc = $impsancionDAO->selectImputadossanciones($impsancionDTO);

        if ($consimpsanc != "") {
            $existesancion = 1;
            $error = true;
        } else {


            if ($sancion == 1) {///Prision
                $impsancionDTO->setAnioPrision($aniopris);
                $impsancionDTO->setMesPrision($mespris);
                $impsancionDTO->setDiasPrision($diapris);
            }
            if ($sancion == 2) {///multa
                $impsancionDTO->setCantidadMulta($multa);
            }
            if ($sancion == 3) {///reparacion de daño
                $impsancionDTO->setCantidadReparacion($reparacio);
            }
            if ($sancion == 4) {///amonestacion
                $impsancionDTO->setAmonestacion($amonestacion);
            }


            $conssancion = $impsancionDAO->insertImputadossanciones($impsancionDTO, $proveedor);
            //  echo "sancion insertada------------------------------";
            if ($conssancion == "") {
                $error = true;
            } else {
                $existesancion = 2;
            }
        }


        if ($error == false) {
            $proveedor->execute("COMMIT");
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();

        /* estatus==1   existe
         * estatus==2  lo inserto
         * 
         */

        $response = array('estatus' => $existesancion);



        return $response;
    }

    public function consultarCertificaciones($ActuacionesDto, $parametros) {
        $proveedor = null;
        $json = '';
        //obtencion de las actuaciones. obtiene 1 solo registro
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $orden = "";
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, $orden);
        $totalRows = count($ActuacionesDto);
        $counter = 0;
        $content = false;
        $respuesta = '';
        $respGlobal = '';
        //recorre los registros en busca de certificaciones
        if ($ActuacionesDto != '') {
            foreach ($ActuacionesDto as $Actuaciones) {
                //El ID de actuaciOn de cada registro se valida en la tabla -tblcertificaciones-
                $idActuacion = $Actuaciones->getIdActuacion();
                $CertificacionesDto = new CertificacionesDTO();
                $CertificacionesDao = new CertificacionesDAO();
                $CertificacionesDto->setIdActuacion($idActuacion);
                $CertificacionesDto = $CertificacionesDao->selectCertificaciones($CertificacionesDto, $proveedor);
                //si la consulta de las certificaciones trae informaciOn 
                if ($CertificacionesDto != "") { //la actuacion tiene una certificacion
                    //obtiene la descripcion del TipoCarpeta
                    $TipoCarpetaDTO = new TiposcarpetasDTO();
                    $TipoCarpetaDAO = new TiposcarpetasDAO();
                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
                    $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();
                    $content = true;
                    //array de respuesta
                    $respuesta[] = array("idCertificacion" => $CertificacionesDto[0]->getIdCertificacion(),
                        "idActuacion" => $CertificacionesDto[0]->getIdActuacion(),
                        "numEmpleadoAutCertificacion" => $CertificacionesDto[0]->getNumEmpleadoAutCertificacion(),
                        "lugarCertificacion" => utf8_encode($CertificacionesDto[0]->getLugarCertificacion()),
                        "horaCertificacion" => $CertificacionesDto[0]->getHoraCertificacion(),
                        "idActuacion" => $Actuaciones->getIdActuacion(),
                        "numActuacion" => $Actuaciones->getNumActuacion(),
                        "aniActuacion" => $Actuaciones->getAniActuacion(),
                        "cveTipoActuacion" => $Actuaciones->getCveTipoActuacion(),
                        "idReferencia" => $Actuaciones->getIdReferencia(),
                        "numero" => $Actuaciones->getNumero(),
                        "anio" => $Actuaciones->getAnio(),
                        "cveTipocarpeta" => $Actuaciones->getCveTipocarpeta(),
                        "cveJuzgado" => $Actuaciones->getCveJuzgado(),
                        "sintesis" => $Actuaciones->getSintesis(),
                        "observaciones" => $Actuaciones->getObservaciones(),
                        "cveUsuario" => $Actuaciones->getCveUsuario(),
                        "activo" => $Actuaciones->getActivo(),
                        "fechaRegistro" => $Actuaciones->getFechaRegistro(),
                        "fechaActualizacion" => $Actuaciones->getFechaActualizacion(),
                        "descTipoCarpeta" => $descTipoCarpeta);
                    $counter++;
                }
            }
        }
        if ($content) {
            $respGlobal = array("status" => "OK", "totalCount" => $counter, "data" => $respuesta);
        } else {
            $respGlobal = array("status" => "ERROR", "totalCount" => "0", "data" => "");
        }
        return json_encode($respGlobal);
    }

    public function actualizarActuacion_Certificacion($ActuacionesDto, $proveedor = null) {
        //obtencion de datos previos a la actualizacion
        $ActuacionDTOPrevios = new ActuacionesDTO();
        $ActuacionDAOPrevio = new ActuacionesDAO();
        $ActuacionDTOPrevios->setIdActuacion($ActuacionesDto->getIdActuacion());
        $ActuacionDTOPrevios = $ActuacionDAOPrevio->selectActuaciones($ActuacionDTOPrevios);
        //actualizacion
        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
        //insercion en bitacora
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(52, 'ACTUALIZACION tblactuaciones', 'dto', $ActuacionesDto, $ActuacionDTOPrevios);
        return $ActuacionesDto;
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

    public function guardarOficio($ActuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede, $proveedor = null) {

        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");


        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion()); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio(date("Y"));
//$contadoresDto->setCveTipoCarpeta(1);                                                         

        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);

        if ($contadoresDto != "") {

            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());

            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            // pa que no truene en la consulta
//            $ActuacionesDto->setSintesis(htmlspecialchars($ActuacionesDto->getSintesis()));
//            $ActuacionesDto->setObservaciones(htmlspecialchars($ActuacionesDto->getObservaciones()));
            // pa que no truene en la consulta

            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

            if ($ActuacionesDto != "") {
                $estatusAct = $this->obtenerEstatusActuacion($ActuacionesDto[0], $estatusActuacion, $proveedor); // cuando es oficio segundo parametro de la funcion obtenerEstatusActuacion: insert, update, 
                if ($estatusAct != "") {
                    if ($idActuacionAntecede != "") { // verificar si la actuacion a guardar tiene una actuacion padre
                        $antecedeAct = $this->guardarAntecedeActuacion($ActuacionesDto[0], $idActuacionAntecede, $proveedor);
                        if ($antecedeAct != "") {
                            $proveedor->execute("COMMIT");
                        } else {
                            $proveedor->execute("ROLLBACK");
                            echo "No se pudo Realizar el registro, intente mas tarde, el registro en antecedes actuaciones no fue realizado...";
                        }
                    } else {
                        $proveedor->execute("COMMIT");
                    }
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo "No se pudo Realizar el registro, intente mas tarde, el estatus de actuacion no realizada...";
                }
            } else {
                $proveedor->execute("ROLLBACK");
                echo "No se pudo Realizar el registro, intente mas tarde...";
            }
        } else {
            $proveedor->execute("ROLLBACK");
            echo "No se pudo obtener el contador del oficio, intente mas tarde...";
        }

        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion($cveAccion); // insercion de oficio / acuerdo
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($ActuacionesDto);
        $dtoToJson->toJson("INSERCION");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
        $bitacoraDTO->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
        $bitacoraDTO->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

        $proveedor->close();

        return $ActuacionesDto;
    }

    public function guardarAntecedeActuacion($ActuacionesDto, $idActuacionAntecede, $proveedor) {
        $transaccion = true;
        $arrayIdAntecedes = explode(",", $idActuacionAntecede);
//        var_dump($arrayIdAntecedes);
        for ($i=0; $i< count($arrayIdAntecedes); $i++){
        // verificar si actuacion es una promocion
        $actuacionCtrl = new ActuacionesController();
        $actuacionDTO = new ActuacionesDTO();
            $actuacionDTO->setIdActuacion($arrayIdAntecedes[$i]);
        $actuacionDTO = $actuacionCtrl->selectActuaciones($actuacionDTO, $proveedor);

        if ($actuacionDTO != "") {

            $antecedeActCtrl = new AntecedesactuacionesController();
            $antecedeActDTO = new AntecedesactuacionesDTO();
                $antecedeActDTO->setIdActuacionPadre($arrayIdAntecedes[$i]);
            $antecedeActDTO->setIdActuacionHija($ActuacionesDto->getIdActuacion());
            $antecedeActDTO->setActivo("S");
            $antecedeActDTO = $antecedeActCtrl->insertAntecedesactuaciones($antecedeActDTO, $proveedor);
//                print_r($antecedeActDTO);
            // verifica si actuacion padre es una promocion / promcion de termino / promocion que genera causa
            if ($actuacionDTO[0]->getCveTipoActuacion() == "1" || $actuacionDTO[0]->getCveTipoActuacion() == "13" || $actuacionDTO[0]->getCveTipoActuacion() == "17") { // si es promocion cambiar estatus de promocion a acordada
                $actEstatusCtrl = new ActuacionesestatusController();
                $actEstatusDTO = new ActuacionesestatusDTO();

                    $actEstatusDTO->setIdActuacion($arrayIdAntecedes[$i]);
                $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

                $actEstatusDTOaux = $actEstatusCtrl->deleteActuacionesestatus($actEstatusDTO[0], $proveedor); // por updateActuacionesestatus

                if ($actEstatusDTOaux) {
                    $actEstatusNuevo = new ActuacionesestatusDTO();
                    $actEstatusNuevo->setIdActuacion($actEstatusDTO[0]->getIdActuacion());
                    $actEstatusNuevo->setCveEstatus(8); // promocion acordada
                    $actEstatusNuevo = $actEstatusCtrl->insertActuacionesestatus($actEstatusNuevo, $proveedor); // actualiza estatus de promocion a acordada
//                        print_r($actEstatusNuevo);
                    if ($actEstatusNuevo != "") {
//                            return $antecedeActDTO;
                            $transaccion = true;
                    } else {
                        $antecedeActDTO = "";
                            $transaccion = false;
                    }
                } else {
                    echo "NO actualizo estatus de promocion..";
                        $transaccion = false;
                }
            }
        } else {
            $antecedeActDTO = "";
                $transaccion = false;
        }

        }

        if($transaccion){
        return $antecedeActDTO;
        }else{
            return "";
    }

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

    public function updateOficios($ActuacionesDto, $accion, $estatusActuacion, $proveedor = null) {
        $observaciones = "ACTUACION ACTUALIZADA";
        $estatusActual = "";
        $registradoBitacora = false;
        $publicado = false;

        $publicado = $this->verificarPublicacion($ActuacionesDto);
        if (!$publicado) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDTOaux = new ActuacionesDTO();

            $ActuacionesDTOaux->setIdActuacion($ActuacionesDto->getIdActuacion());
            $ActuacionesDTOaux = $ActuacionesDao->selectActuaciones($ActuacionesDTOaux, $proveedor);
            //print_r($ActuacionesDTOaux);

            if ($accion == "26" || $accion == "40") {
                $observaciones = "BORRADO LOGICO";
                //ACTUALIZACION SIMPLE eliminacion logica
                $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
                $eliminaAntecede = $this->eliminaAntecede($ActuacionesDto[0], $proveedor);
            } else {// cuando la actualizacion implica que la actuacion se cambie entre carpetas 
                if ($ActuacionesDto->getCveTipoCarpeta() == "" || $ActuacionesDto->getCveTipoCarpeta() == "null" || $ActuacionesDto->getCveTipoCarpeta() == null) {
                    //print_r($ActuacionesDto);
                    $ActuacionesDto->setIdActuacion("");
                    $ActuacionesDto->setFechaActualizacion("");
                    $ActuacionesDto->setNumActuacion($ActuacionesDTOaux[0]->getNumActuacion());
                    $ActuacionesDto->setAniActuacion($ActuacionesDTOaux[0]->getAniActuacion());
                    $cveAccion = $accion; //bitacora
                    $ActuacionesDto = $this->guardarOficioManual($ActuacionesDto, $ActuacionesDTOaux[0]->getIdActuacion(), $cveAccion, $estatusActuacion);
                    $registradoBitacora = true;
                } else {
                    //ACTUALIZACION SIMPLE sin cambiar entre carpetas
                    $actEstatusAnterior = $this->desactivarEstatusActuacion($ActuacionesDto, $estatusActuacion, $proveedor);

                    if ($actEstatusAnterior != "") {
                        $actEstatusActual = $this->obtenerEstatusActuacion($ActuacionesDto, $estatusActuacion, $proveedor);
                        $dtoToJson2 = new DtoToJson($actEstatusActual);
                        $estatusActual = $dtoToJson2->toJson("estatus Actual");
                        if ($actEstatusActual != "") {
                            $ActuacionesDto->setNumActuacion($ActuacionesDTOaux[0]->getNumActuacion());
                            $ActuacionesDto->setAniActuacion($ActuacionesDTOaux[0]->getAniActuacion());
                            $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
                        } else {
                            echo "no se realizo insert al nuevo estatus..";
                            $ActuacionesDto = "";
                        }
                    } else {
                        echo "no se desactivo el estatus actual..";
                        $ActuacionesDto = "";
                    }
                }
            }

            if ($ActuacionesDto != "" && !$registradoBitacora) {
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion($accion); //
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //

                $dtoToJson = new DtoToJson($ActuacionesDto);

                $dtoToJson1 = new DtoToJson($ActuacionesDTOaux);

                if ($accion == "26" || $accion == "40") {
                    $bitacoraDTO->setObservaciones("ELIMINACION LOGICA: " . $dtoToJson->toJson($observaciones)); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                } else {
                    $bitacoraDTO->setObservaciones("DE: " . $dtoToJson1->toJson("actuacion anterior") . " a " . $dtoToJson->toJson($observaciones) . " -> estatus de " . $actEstatusAnterior . " a " . $estatusActual); //.$dtoToJson2->toJson("ESTATUS ACTUAL")
                }
                $bitacoraDTO->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

                $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
            } else if ($ActuacionesDto != "" && $registradoBitacora) {
                return $ActuacionesDto;
            } else {
                $ActuacionesDto = "";
            }
        } else {
            //echo "la actuacion a sido publicada..";
            $ActuacionesDtoAux = new ActuacionesDTO();
            $ActuacionesDtoAux->setObservaciones("publicado");
            $ActuacionesDto = array($ActuacionesDtoAux);
            return $ActuacionesDto;
        }
        return $ActuacionesDto;
    }

    public function verificarPublicacion($ActuacionesDto) {
        $publicado = false;
        $estatusPublicados = array("3", "12", "14"); //cveEstatus de actuaciones publicadas, acuerdo,sentencias, oficios

        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();
        $actEstatusDTO->setIdActuacion($ActuacionesDto->getIdActuacion());
        $actEstatusDTO->setActivo("S");
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

        for ($i = 0; $i < count($estatusPublicados); $i++) {
            if ($actEstatusDTO[0]->getCveEstatus() == $estatusPublicados[$i]) {
                //actuacion publicada
                $publicado = true;
                break;
            }
        }

        return $publicado;
    }

    public function deleteActuacionesOficios($ActuacionesDto, $proveedor = null) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);

        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion(26); //
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($ActuacionesDto);
        $dtoToJson->toJson("Borrado");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("Borrado Logico")); //
        $bitacoraDTO->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
        $bitacoraDTO->setCvePerfil("100"); // variable de session
        $bitacoraDTO->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

        print_r($bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO));

        return $ActuacionesDto;
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

        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
//                                                     $actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null    
        $numTot = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, "", $param, " count(idActuacion) as totalCount ");
//print_r($numTot);
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

    public function deleteActuacionesAntecedes($idActuacion, $idActuacionPadre){
        $eliminado = false;
        
        $ActuacionesDto = new ActuacionesDTO();
        $ActuacionesDto->setIdActuacion($idActuacion);

        $antecedeActCtrl = new AntecedesactuacionesController();
        $antecedeActDTO = new AntecedesactuacionesDTO();
        $antecedeActDTO->setIdActuacionHija($ActuacionesDto->getIdActuacion());
        $antecedeActDTO->setIdActuacionPadre($idActuacionPadre);
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
                $antecedeActDTO = $antecedeActCtrl->updateAntecedesactuaciones($antecedeActDTO[0]);

                if ($actuacionDTO[0]->getCveTipoActuacion() == "1" || $actuacionDTO[0]->getCveTipoActuacion() == "13" || $actuacionDTO[0]->getCveTipoActuacion() == "17") { // si es promocion cambiar estatus de promocion a REGISTRADA
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
                    $ActuacionesDTOaux = $ActuacionesDao->selectActuaciones($ActuacionesDTOaux);
                    $ActuacionesDTOaux[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
//                                print_r($ActuacionesDTOaux);
                    $ActuacionesDTOaux = $ActuacionesDao->updateActuaciones($ActuacionesDTOaux[0]);
                    // fin de actualizacion de la promcion
                    
                    if ($actEstatusDTO != "" && $ActuacionesDTOaux != "" ) {
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
        }
        
        if($eliminado){
            return $ActuacionesDTOaux;
        }  else {
            return "";
        }
        
    }

    public function guardarOficioManual($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion, $proveedor = null) {

        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDTO = new ActuacionesDTO();

        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $ActuacionesDTO->setIdActuacion($idActEliminar);
        $ActuacionesDTO = $ActuacionesDao->selectActuaciones($ActuacionesDTO);
        $cveAccionElim = 0;

        if ($ActuacionesDTO[0]->getCveTipoActuacion() == "7") {
            $cveAccionElim = 27;
        } else if ($ActuacionesDTO[0]->getCveTipoActuacion() == "2") {
            $cveAccionElim = 41;
        }

        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion($cveAccionElim); //
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($ActuacionesDTO);
        $dtoToJson->toJson("BORRADO FISICO");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("BORRADO FISICO")); //
        $bitacoraDTO->setCveUsuario($ActuacionesDTO[0]->getCveUsuario());
        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session 
        $bitacoraDTO->setCveAdscripcion($ActuacionesDTO[0]->getCveJuzgado()); // variable de session

        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO, $proveedor);

        $actEstatusDTO->setIdActuacion($idActEliminar);
        $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);

        $estatusActBorrada = $actEstatusCtrl->deleteActuacionesestatus($actEstatusDTO[0], $proveedor);
        $actuacionBorrada = $ActuacionesDao->deleteActuaciones($ActuacionesDTO[0], $proveedor);

//        print_r($estatusActBorrada);
//        print_r($actuacionBorrada);

        if ($actuacionBorrada && $estatusActBorrada) {
//                print_r($contadoresDto);
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

            if ($ActuacionesDto != "") {
                $estatusAct = $this->obtenerEstatusActuacion($ActuacionesDto[0], $estatusActuacion, $proveedor); // cuando es oficio segundo parametro de la funcion obtenerEstatusActuacion: insert, update, 
                if ($estatusAct != "") {
                    $bitacoraDTOins = new BitacoramovimientosDTO();
                    $bitacoraCtrlins = new BitacoramovimientosController();
                    $bitacoraDTOins->setCveAccion($cveAccion); //
                    $bitacoraDTOins->setFechaMovimiento(date("Y-m-d H:i:s")); //
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    $dtoToJson1 = new DtoToJson($estatusAct);
                    $dtoToJson2 = new DtoToJson($actEstatusDTO);
                    $dtoToJson3 = new DtoToJson($ActuacionesDTO);

                    $bitacoraDTOins->setObservaciones("actuacion anterior: " . $dtoToJson3->toJson("ANTERIOR") . " a :" . $dtoToJson->toJson("INSERCION-ACTUALIZADO") . " de estatus: " . $dtoToJson2->toJson("estatus anterior") . " a: " . $dtoToJson1->toJson("INSERCION estatus")); //
                    $bitacoraDTOins->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
                    $bitacoraDTOins->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                    $bitacoraDTOins->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

                    $bitacoraCtrlins->insertBitacoramovimientos($bitacoraDTOins, $proveedor);

                    $proveedor->execute("COMMIT");
                } else {
                    $proveedor->execute("ROLLBACK");
                    echo "No se pudo Realizar el registro, intente mas tarde, el estatus de actuacion no realizada...";
                    $ActuacionesDto = "";
                }
            } else {
                $proveedor->execute("ROLLBACK");
                echo "No se pudo Realizar el registro, intente mas tarde 1...";
                $ActuacionesDto = "";
            }
        } else {
            $proveedor->execute("ROLLBACK");
            echo "no se pudo limpiar la informacion del oficio anterior 2...";
            $ActuacionesDto = "";
        }



        $proveedor->close();

        return $ActuacionesDto;
    }

    public function guardarOficioResagado($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion, $proveedor = null) {

        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();

        $actEstatusCtrl = new ActuacionesestatusController();
        $actEstatusDTO = new ActuacionesestatusDTO();

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

        if ($ActuacionesDto != "") {
            $estatusAct = $this->obtenerEstatusActuacion($ActuacionesDto[0], $estatusActuacion, $proveedor); // cuando es oficio segundo parametro de la funcion obtenerEstatusActuacion: insert, update, 
            if ($estatusAct != "") {
                $bitacoraDTOins = new BitacoramovimientosDTO();
                $bitacoraCtrlins = new BitacoramovimientosController();
                $bitacoraDTOins->setCveAccion($cveAccion); //
                $bitacoraDTOins->setFechaMovimiento(date("Y-m-d H:i:s")); //
                $dtoToJson = new DtoToJson($ActuacionesDto);
                $dtoToJson1 = new DtoToJson($estatusAct);

                $bitacoraDTOins->setObservaciones($dtoToJson->toJson("INSERCION-ACTUALIZADO") . " - " . $dtoToJson1->toJson("INSERCION estatus")); //
                $bitacoraDTOins->setCveUsuario($ActuacionesDto[0]->getCveUsuario());
                $bitacoraDTOins->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTOins->setCveAdscripcion($ActuacionesDto[0]->getCveJuzgado()); // variable de session

                $bitacoraCtrlins->insertBitacoramovimientos($bitacoraDTOins, $proveedor);

                $proveedor->execute("COMMIT");
            } else {
                $proveedor->execute("ROLLBACK");
                echo "No se pudo Realizar el registro, intente mas tarde, el estatus de actuacion no realizada...";
                $ActuacionesDto = "";
            }
        } else {
            $proveedor->execute("ROLLBACK");
            echo "No se pudo Realizar el registro, intente mas tarde 1...";
            $ActuacionesDto = "";
        }

        $proveedor->close();

        return $ActuacionesDto;
    }

    public function guardarCarpeta_Judicializada($judicializadasDto, $proveedor = null, $listaPromoventes, $param) {
        error_log("================================================================================================= \n");
        $msg = array();
        $logger = new Logger("../../../logs/", "CarpetasJudiciales");
        $logger->w_onError("**********COMIENZA EL PROGRAMA DE RADICACION DE CARPETAS JUDICIALES**********");
        $logger->w_onError("****** parametros recibidos " . print_r($param, true));
        $logger->w_onError("****** parametros judicializadas " . print_r($judicializadasDto, true));
//        exit();
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);
        $mensaje = "";
        // parametros para contadores
        $contadoresDto->setCveJuzgado($judicializadasDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion(1); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio($partes_fecha[0]);
//        $contadoresDto->setCveTipoCarpeta(1);
        if ($judicializadasDto->getNumActuacion() != "" && $judicializadasDto->getAniActuacion() != "") {
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($judicializadasDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($judicializadasDto->getAniActuacion());
            $ActuacionesCompDto->setCveJuzgado($judicializadasDto->getCveJuzgado());
            $ActuacionesCompDto->setActivo("S");
            $ActuacionesCompDto->setCveTipoActuacion($judicializadasDto->getCveTipoActuacion());
            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);
            if ($existe != "") {
                $mensaje = "Existe el registro, seleccionar contador automatico";
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
                $transaccion = 0;
            } else {
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);
                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $judicializadasDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $judicializadasDto->getNumActuacion()) {
                        $mensaje = "El numero excede al contador actual de promociones";
                        error_log("El numero excede al contador actual de promociones");
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $judicializadasDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $judicializadasDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
        }

        if ($asignaContador == true) {
            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $judicializadasDto->setNumActuacion($contadoresDto[0]->getNumero());
            $judicializadasDto->setAniActuacion($contadoresDto[0]->getAnio());
        }
        if ($contadoresDto != "" && $transaccion == 1) {
            $ActuacionesDao = new ActuacionesDAO();
            $judicializadasDto->setActivo("S");
            $judicializadasDto = $ActuacionesDao->insertActuaciones($judicializadasDto, $proveedor);
            $judicializadasDtoTmp = $judicializadasDto;
            $logger->w_onError("****** respuesta insert Actuaciones " . print_r($judicializadasDto, true));
            if ($judicializadasDto != "") {
                $judicializadasDto = $judicializadasDto[0];
                $listaPromoventes = json_decode($listaPromoventes, true);
                $promoventesActuacionesDao = new PromoventesactuacionesDAO();
                foreach ($listaPromoventes as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();
                    $promoventesActuacionesDto->setIdActuacion($judicializadasDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    $promoventesDtoTmp = $promoventesActuaciones;
                    if ($promoventesActuaciones == "") {
                        $mensaje = "Error al registrar promoventes";
                        $transaccion = 0;
                        error_log("error al registrar promoventes" . $proveedor->error());
                        break;
                    }
                }
                if ($transaccion == 1) {
                    $estatusActuacion = $this->obtenerEstatusActuacion($judicializadasDto, 7, $proveedor);
                    if ($estatusActuacion == "") {
                        $mensaje = "Error en estatus actuaciones";
                        $transaccion = 0;
                        error_log("error en estatus actuaciones");
                    }
                }

                // genero guardo carpeta judicializada                        
                $carpetasJudicializadasDao = new CarpetasjudicialesDAO();
                $id_etapaprocesal = "";
                switch ($judicializadasDto->getCveTipoCarpeta()) {
                    case 1:
                    case 2:
                        $id_etapaprocesal = 1;
                        break;
                    case 3:
                    case 4:
                        $id_etapaprocesal = 3;
                        break;
                    case 5:
                        $id_etapaprocesal = 4;
                }
                //consulta de siglas juzgado para la carpetaInv y nuc
                $selectjuzgadoDto = new JuzgadosDTO();
                $selectjuzgadoDto->setCveJuzgado($judicializadasDto->getCveJuzgado());
                $selectjuzgadoDto->setSiglas('');
                $selectjuzgado = new JuzgadosDAO;
                $selectjuzgadores = $selectjuzgado->selectJuzgados($selectjuzgadoDto, "", $proveedor);
                if ($selectjuzgadores != "") {
                    foreach ($selectjuzgadores as $rowjuz) {
                        $siglasJuzgado = $rowjuz->getSiglas();
                    }
                }
                $carpetaInv = $judicializadasDto->getNumActuacion() . "-" . $judicializadasDto->getAniActuacion() . "-" . $siglasJuzgado;
                // parametros para contadores de carpeta judicializada numero  año      
                $contadorCarpetaDto = new ContadoresDTO();
                $contadorCarpetaDto->setCveTipoCarpeta($judicializadasDto->getCveTipoCarpeta()); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
                $contadorCarpetaDto->setCveJuzgado($judicializadasDto->getCveJuzgado());
                $contadorCarpetaDto->setAnio($partes_fecha[0]);
                $contadorCarpetaDto = $contadorCrl->getContador($contadorCarpetaDto, $proveedor);
                $numero = '';
                $anio = '';
                if ($contadorCarpetaDto == '') {
                    $mensaje = "Error al obtener contadores ";
                    $transaccion = 0;
                    error_log("error al obtener contadores" . $proveedor->error());
                } else {
                    $numero = $contadorCarpetaDto[0]->getNumero();
                    $anio = $contadorCarpetaDto[0]->getAnio();
                }
                if ($param["esIncompetencia"] == "S" & $param["tipoIncompetencia"] == 1) {
                    $logger->w_onError("****** entro a incompetencias tipo 1 ");
                    $generojudicializadasDto = new CarpetasjudicialesDTO();
                    $generojudicializadasDto->setIdCarpetaJudicial($param["idCarpetaInc"]);
                    $generojudicializadasDto->setActivo("S");
                    $RescarpetasJudicializadasDto = $carpetasJudicializadasDao->selectCarpetasjudiciales($generojudicializadasDto);
//    print_r($RescarpetasJudicializadasDto);
                    $RescarpetasJudicializadasDto[0]->setIdCarpetaJudicial("");
                    $RescarpetasJudicializadasDto[0]->setNumero($numero);
                    $RescarpetasJudicializadasDto[0]->setAnio($anio);
                    $RescarpetasJudicializadasDto[0]->setCveJuzgado($judicializadasDto->getCveJuzgado());
                    $RescarpetasJudicializadasDto[0]->setIncompetencia($param["esIncompetencia"]);
                    $RescarpetasJudicializadasDto[0]->setCveTipoIncompetencia($param["tipoIncompetencia"]);
                    $carpetasJudicializadas = $carpetasJudicializadasDao->insertCarpetasjudiciales($RescarpetasJudicializadasDto[0], $proveedor);
                    $logger->w_onError("****** insert carpeta judicial  " . $proveedor->error());
                    $carpetasJudicialilzadasDtoTmp = $carpetasJudicializadas;
                    $incompetenciaDTO = new IncompetenciasDTO();
                    $incompetenciaDAO = new IncompetenciasDAO();
                    $incompetenciaDTO->setIdActuacion($judicializadasDto->getidActuacion());
                    $incompetenciaDTO->setCveTipoIncompetencia($param["tipoIncompetencia"]);
                    $incompetenciaDTO->setCveJuzgadoOrigen($param["juzgadoOrigen"]);
                    $incompetenciaDTO->setCveTipoCarpetaOrigen($param["tipoCarpetaInc"]);
                    $incompetenciaDTO->setNumero($param["numeroInc"]);
                    $incompetenciaDTO->setAnio($param["anioInc"]);
                    $incompetenciaDTO->setOtroTipoCarpetaOrigen($param["texttipoCarpetaInc"]);
                    $incompetenciaDTO->setOtroJuzgadoOrigen($param["textJuzgadoOrigenInc"]);
                    $incompetenciaDTO->setActivo("S");
                    $incompetenciaDTO->setFechaRegistro($judicializadasDto->getFechaRegistro());
                    $incompetenciaDTO->setFechaActualizacion($judicializadasDto->getFechaRegistro());
                    $Resincompetencia = $incompetenciaDAO->insertIncompetencias($incompetenciaDTO, $proveedor);
                    $logger->w_onError("****** insert incompetencias  " . $proveedor->error());
                } else {
                    $generojudicializadasDto = new CarpetasjudicialesDTO();
                    if ($param["esIncompetencia"] == "S" & $param["tipoIncompetencia"] != "0") {
                        $logger->w_onError("****** entro a incompetencias tipo diferente 0 ");

                        $incompetenciaDTO = new IncompetenciasDTO();
                        $incompetenciaDAO = new IncompetenciasDAO();
                        $incompetenciaDTO->setIdActuacion($judicializadasDto->getidActuacion());
                        $incompetenciaDTO->setCveTipoIncompetencia($param["tipoIncompetencia"]);
                        $incompetenciaDTO->setCveJuzgadoOrigen($param["juzgadoOrigen"]);
                        $incompetenciaDTO->setCveTipoCarpetaOrigen($param["tipoCarpetaInc"]);
                        $incompetenciaDTO->setNumero($param["numeroInc"]);
                        $incompetenciaDTO->setAnio($param["anioInc"]);
                        $incompetenciaDTO->setOtroTipoCarpetaOrigen($param["texttipoCarpetaInc"]);
                        $incompetenciaDTO->setOtroJuzgadoOrigen($param["textJuzgadoOrigenInc"]);
                        $incompetenciaDTO->setActivo("S");
                        $incompetenciaDTO->setFechaRegistro($judicializadasDto->getFechaRegistro());
                        $incompetenciaDTO->setFechaActualizacion($judicializadasDto->getFechaRegistro());
                        $Resincompetencia = $incompetenciaDAO->insertIncompetencias($incompetenciaDTO, $proveedor);

                        $generojudicializadasDto->setCveTipoIncompetencia($param["tipoIncompetencia"]);
                        $generojudicializadasDto->setIncompetencia($param["esIncompetencia"]);
                    }
                    $generojudicializadasDto->setCveTipoCarpeta($judicializadasDto->getCveTipoCarpeta());
                    $generojudicializadasDto->setCveUsuario($judicializadasDto->getCveUsuario());
                    $generojudicializadasDto->setNumero($numero);
                    $generojudicializadasDto->setAnio($anio);
                    $generojudicializadasDto->setCveEtapaProcesal($id_etapaprocesal);
                    $generojudicializadasDto->setCveConsignacion(4);
                    $generojudicializadasDto->setCveConsignacionA(2);
                    $generojudicializadasDto->setCveEstatusCarpeta(1);
                    $generojudicializadasDto->setCveTipoIncompetencia(4);
                    $generojudicializadasDto->setCarpetaInv($carpetaInv);
                    $generojudicializadasDto->setNuc($carpetaInv);
                    $generojudicializadasDto->setActivo('S');
                    $generojudicializadasDto->setNumImputados(1);
                    $generojudicializadasDto->setNumOfendidos(1);
                    $generojudicializadasDto->setNumDelitos(1);
                    $generojudicializadasDto->setObservaciones('Actualizame');
                    $generojudicializadasDto->setNumAcumulado('Actualizame');
                    $generojudicializadasDto->setCveJuzgado($judicializadasDto->getCveJuzgado());
                    $generojudicializadasDto->setFechaRadicacion($judicializadasDto->getFechaRegistro());
                    $carpetasJudicializadas = $carpetasJudicializadasDao->insertCarpetasjudiciales($generojudicializadasDto, $proveedor);
                    $carpetasJudicialilzadasDtoTmp = $carpetasJudicializadas;
                }
                if ($carpetasJudicializadas == "") {
                    $mensaje = "Error al registrar carpetas judicializadas";
                    $transaccion = 0;
                    error_log("error al registrar carpetas judicializadas" . $proveedor->error());
                    $logger->w_onError("****** carpeta judicial vacia  " . $mensaje);
                } else {

                    // ERROR DEBES DEJAR EL FOR EACH DE ABAJO DENTRO DE LA CONDICION DE ARRIBA YA QUE SI VIENE VACIO $carpetasJudicializadas VA A MARCAR ERROR 
                    // actualizo carpeta actuaciones Promociones con idreferencia de carpeta judicializada
                    $idReferencia = "";
                    foreach ($carpetasJudicializadas as $rowcp) {
                        $idReferencia = $rowcp->getIdCarpetaJudicial();
                        $numero = $rowcp->getNumero();
                        $anio = $rowcp->getAnio();
                    }
                }
                $actuacionesupdateidreferencia = new ActuacionesDTO();
                $actuacionesupdateidreferencia->setNumero($numero);
                $actuacionesupdateidreferencia->setAnio($anio);
                $actuacionesupdateidreferencia->setIdReferencia($idReferencia);
                $actuacionesupdateidreferencia->setIdActuacion($judicializadasDto->getidActuacion());
                $actuacionesupdateidreferencia->setObservaciones($judicializadasDto->getObservaciones());
                $actuacionesupdate = $ActuacionesDao->updateActuaciones($actuacionesupdateidreferencia, $proveedor);

                $logger->w_onError("****** actualizar actuacion  " . $proveedor->error());

                if ($actuacionesupdate == "") {
                    //echo "error:405 ";
                    $mensaje = "Error al actualizar actuaciones";
                    $transaccion = 0;
                    $logger->w_onError("****** no actualizo  " . $mensaje);
                }
                $actuacionesupdateDtoTmp = $actuacionesupdate;
                // genero carpeta imputados referencia idcarpeta judicializada
                $imputadoDto = "";
                $impofedelDto = "";
                $ofendidosDto = "";
                $delitosDto = "";
                if ($param["esIncompetencia"] == "S" & $param["tipoIncompetencia"] == 1) {

                    $logger->w_onError("genero carpeta imputados referencia idcarpeta judicializada");
                    $generoimputadosDto = new ImputadoscarpetasDTO();
                    $inputadosDao = new ImputadoscarpetasDAO();
                    $generoimputadosDto->setActivo("S");
                    $generoimputadosDto->setIdCarpetaJudicial($param["idCarpetaInc"]);

                    $logger->w_onError("Parametros para buscar imputados" . print_r($generoimputadosDto, true));
                    $Resgeneroimputados = $inputadosDao->selectImputadoscarpetas($generoimputadosDto, "", $proveedor);
                    $logger->w_onError("imputados de la  carpeta =>" . print_r($Resgeneroimputados, true) . "Provedor " . $proveedor->error());
                    $imputadoDto = "";
                    $impofedelDto = "";
                    $ofendidosDto = "";
                    $delitosDto = "";
                    if ($Resgeneroimputados != "") {
                        foreach ($Resgeneroimputados as $imputado) {
                            $idumputadoReal = $imputado->getIdImputadoCarpeta();
                            $imputado->setIdImputadoCarpeta("");
                            $imputado->setIdCarpetaJudicial($idReferencia);
                            $imputadoDto = $inputadosDao->insertImputadoscarpetas($imputado, $proveedor);
                            if ($imputadoDto != "") {
                                $transaccion = 1;
                                $logger->w_onError("**********SE REGISTRO AL IMPUTADO CON ID: " . $imputadoDto[0]->getIdImputadoCarpeta());
                                $imputadosCarpetas[] = $imputadoDto[0]->getIdImputadoCarpeta();
                                /*
                                 * Registrar las nacionalidades correspondientes al imputado
                                 */
                                $logger->w_onError("**********AGREGAR A LA CARPETA JUDICIAL LA NACIONALIDAD DEL IMPUTADO");
                                $nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                                $nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $nacionalidadesimputadoscarpetasDto->setActivo("S");
                                $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                                $nacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto, "", $proveedor);

                                if ($nacionalidadesimputadoscarpetasDto != "") {
                                    for ($x = 0; $x < count($nacionalidadesimputadoscarpetasDto); $x++) {
                                        $nacionalidadesDto = new NacionalidadesimputadoscarpetasDTO();
                                        $nacionalidadesDto->setcvePais($nacionalidadesimputadoscarpetasDto[$x]->getCvePais());
                                        $nacionalidadesDto->setactivo("S");
                                        $nacionalidadesDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadocarpeta());

                                        $nacionalidadesDto = $nacionalidadesimputadoscarpetasDao->insertNacionalidadesimputadoscarpetas($nacionalidadesDto, $proveedor);

                                        if ($nacionalidadesDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar las nacionalidades de los imputados");
                                            $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA NACIONALIDAD");
                                            $transaccion = 0;
                                        } else {
                                            $transaccion = 1;
                                            $logger->w_onError("**********SE REGISTRO LA NACIONALIDAD DEL IMPUTADO CON ID: " . $nacionalidadesDto[0]->getIdNacionalidadImputadoCarpeta());
                                        }
                                    }
                                } else {
                                    $transaccion = 0;
                                    $msg[] = array("El imputado no cuenta con nacionalidades activas");
//                                $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
                                }
                                /*
                                 * Agregar los domicilios del imputado
                                 */
                                $logger->w_onError("AGREGAR A LA CARPETA JUDICIAL EL DOMICILIO DEL IMPUTADO");
                                $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                                $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $domiciliosimputadoscarpetasDto->setActivo("S");
                                $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                                $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $proveedor);

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

                                        $domiciliosDto = $domiciliosimputadoscarpetasDao->insertDomiciliosimputadoscarpetas($domiciliosDto, $proveedor);

                                        if ($domiciliosDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar los domicilios del imputado");
                                            $logger->w_onError("SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR EL DOMICILIO");
                                            $transaccion = 0;
                                        } else {
                                            $logger->w_onError("SE AGREGA EL DOMICILIO CON ID: " . $domiciliosDto[0]->getIdDomicilioImputadoCarpeta());
                                            $transaccion = 1;
                                        }
                                    }
                                } else {
                                    $msg[] = array("La carpeta no cuenta con domicilios para el imputado");
                                    $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON NACIONALIDADES ACTIVAS");
//                                $transaccion = 0;
                                }
                                /*
                                 * Agregar los defensores del imputado correspondiente
                                 */
                                $logger->w_onError("AGREGAR DEFENSOR DEL IMPUTADO A LA CARPETA JUDICIAL");
                                $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                                $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $defensoresimputadoscarpetasDto->setActivo("S");
                                $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                                $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $proveedor);

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

                                        $defensoresDto = $defensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($defensoresDto, $proveedor);

                                        if ($defensoresDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar los defensores");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL AGREGAR AL DEFENSOR : ");
                                            $transaccion = 0;
                                        } else {
                                            $logger->w_onError("**********SE AGREGO AL DEFENSOR CON ID : " . $defensoresDto[0]->getIdDefensorImputadoCarpeta());
                                            $transaccion = 1;
                                        }
                                    }
                                } else {
                                    $msg[] = array("La carpeta no cuenta con defensores para el imputado.");
                                    $logger->w_onError("SE DETERMINA QUE EL IMPUTADO NO CUENTA CON DEFENSORES");
//                                $transaccion = 0;
                                }
                                /*
                                 * Agregar los tutorea para el imputado
                                 */
                                $logger->w_onError("AGREGAR EL TUTOR DEL IMPUTADO A LA CARPETA JUDICIAL");
                                $tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();
                                $tutoresimputadoscarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $tutoresimputadoscarpetasDto->setActivo("S");
                                $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
                                $tutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto, "", $proveedor);

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

                                        $tutoresimputadosDto = $tutoresimputadoscarpetasDao->insertTutoresimputadoscarpetas($tutoresimputadosDto, $proveedor);
                                        if ($tutoresimputadosDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar los tutores");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR : ");
                                            $transaccion = 0;
                                        } else {
                                            $transaccion = 1;
                                            $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresimputadosDto[0]->getIdTutorImputadoCarpeta());
//                                     
                                        }
                                    }
                                } else {
                                    $msg[] = array("El imputado no cuenta con tutores");
                                    $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON TUTORES");
//                                $transaccion = 0;
                                }
                                /*
                                 * Agregar los telefonos del imputado
                                 */
//                            $logger->w_onError("**********AGREGAR DATOS DE NUMEROS TELEFONICOS CORRESPONDIENTES AL IMPUTADO");
                                $telefonosImputadoscarpetasDto = new TelefonosImputadoscarpetasDTO();
                                $telefonosImputadoscarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $telefonosImputadoscarpetasDto->setActivo("S");
                                $telefonosImputadoscarpetasDao = new TelefonosImputadoscarpetasDAO();
                                $telefonosImputadoscarpetasDto = $telefonosImputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadoscarpetasDto, "", $proveedor);

                                if ($telefonosImputadoscarpetasDto != "") {
                                    for ($x = 0; $x < count($telefonosImputadoscarpetasDto); $x++) {
                                        $telefenosDto = new TelefonosimputadoscarpetasDTO();
                                        $telefenosDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                        $telefenosDto->setTelefono($telefonosImputadoscarpetasDto[$x]->getTelefono());
                                        $telefenosDto->setCelular($telefonosImputadoscarpetasDto[$x]->getCelular());
                                        $telefenosDto->setEmail($telefonosImputadoscarpetasDto[$x]->getEmail());
                                        $telefenosDto->setActivo("S");

                                        $telefenosDto = $telefonosImputadoscarpetasDao->insertTelefonosimputadoscarpetas($telefenosDto, $proveedor);
                                        if ($telefenosDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar los telefonos");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR EL TELEFONO : ");
                                            $transaccion = 0;
                                        } else {
                                            $transaccion = 1;
                                            $logger->w_onError("**********SE REGISTRO EL TELEFONO CON ID : " . $telefenosDto[0]->getIdTelefonoImputadosCarpeta());
//                                      
                                        }
                                    }
                                } else {
                                    $msg[] = array("El imputado no cuenta con telefonos");
                                    $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUN NUMERO TELEFONICO : ");
                                }
                                /*
                                 * Agregar las drogas correspondientes al imputado
                                 */
//                            $logger->w_onError("**********AGREGAR DATOS DE DROGAS CORRESPONDIENTES AL IMPUTADO");
                                $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();
                                $imputadosdrogascarpetasDto->setIdImputadoCarpeta($idumputadoReal);
                                $imputadosdrogascarpetasDto->setActivo("S");
                                $imputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
                                $imputadosdrogascarpetasDto = $imputadosdrogascarpetasDao->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto, "", $proveedor);

                                if ($imputadosdrogascarpetasDto != "") {
                                    for ($x = 0; $x < count($imputadosdrogascarpetasDto); $x++) {
                                        $imputadosdrogasDto = new ImputadosdrogascarpetasDTO();
                                        $imputadosdrogasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                        $imputadosdrogasDto->setcveDroga($imputadosdrogascarpetasDto[$x]->getCveDroga());
                                        $imputadosdrogasDto->setactivo("S");

                                        $imputadosdrogasDto = $imputadosdrogascarpetasDao->insertImputadosdrogascarpetas($imputadosdrogasDto, $proveedor);
                                        if ($imputadosdrogasDto == "") {
                                            $msg[] = array("Ocurrio un error al copiar la droga");
                                            $logger->w_onError("**********SE DETERMINA QUE OCURRIO UN ERROR AL REGISTRAR LA DROGA : ");
                                            $transaccion = 0;
                                        } else {
                                            $logger->w_onError("**********SE REGISTRA LA DROGA CON ID : " . $imputadosdrogasDto[0]->getIdImputadoDrogaCarpeta());
                                            $transaccion = 1;
//                                       
                                        }
                                    }
                                } else {
                                    $msg[] = array("El imputado no cuenta con drogas registradas");
                                    $logger->w_onError("**********SE DETERMINA QUE EL IMPUTADO NO CUENTA CON ALGUNA DROGA REGISTRADA : " . $transaccion);
                                }
                            } else {
                                $transaccion = 0;
                                $msg[] = array("Ocurrio un error al copiar los datos del imputado");
                                $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR AL IMPUTADO : ");
//                            $logger->w_onError("**********NOMBRE : " . $imputado->getNombre());
//                            $logger->w_onError("**********APELLIDO PATERNO : " . $imputado->getPaterno());
//                            $logger->w_onError("**********APELLIDO MATERNO : " . $imputado->getMaterno());
                            }

                            /*
                             * Consultar la relacion impofedel para obtener el id del
                             * ofendido relacionado con cada imputado
                             */
                            $impofedelcarpetasAuxDto = new ImpofedelcarpetasDTO();
                            $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                            $logger->w_onError("**********CONSULTAR LA RELACION IMPOFEDEL CARPETAS : ");
                            $impofedelcarpetasAuxDto->setIdImputadoCarpeta($idumputadoReal);
                            $impofedelcarpetasAuxDto->setActivo("S");
                            //consultar las relaciones del imputado 
                            $rsImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasAuxDto, "", $proveedor);
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
                                    $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $proveedor);

                                    if ($ofendidoscarpetasDto != "") {
                                        for ($index = 0; $index < count($ofendidoscarpetasDto); $index++) {
                                            $ofendidosDto = new OfendidoscarpetasDTO();

                                            $ofendidosDto->setIdCarpetaJudicial($idReferencia);
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

                                            $rsOfendido = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidosDto, "", $proveedor);
                                            if ($rsOfendido == "") {

                                                $logger->w_onError("**********COPIAR DATOS DEL OFENDIDO A LA NUEVA CARPETA JUDICIAL");
                                                $ofendidosDto = $ofendidoscarpetasDao->insertOfendidoscarpetas($ofendidosDto, $proveedor);
                                                $generoOfendidosDtoTmp = "";
                                                if ($ofendidosDto != "") {
                                                    $generoOfendidosDtoTmp = $ofendidosDto;
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
                                                    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $proveedor);

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

                                                            $domiciliosDto = $domiciliosofendidoscarpetasDao->insertDomiciliosofendidoscarpetas($domiciliosDto, $proveedor);
                                                            if ($domiciliosDto == "") {
                                                                $msg[] = array("Error al copiar el domicilio al ofendido");
                                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE DOMICILIOS DEL OFENDIDO");
                                                                $transaccion = 0;
                                                            } else {
                                                                $transaccion = 1;
                                                                $logger->w_onError("**********ID DE DOMICILIO OFENDIDO INSERTADO: " . $domiciliosDto[0]->getIdDomicilioOfendidoCarpeta());
                                                                /*
                                                                 * Borrar logicamente el domicilio del ofendido
                                                                 */
//                                                            $domicilioOfendidoTmp = new DomiciliosofendidoscarpetasDTO();
//                                                            $domicilioOfendidoTmp->setIdDomicilioOfendidoCarpeta($domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            $domicilioOfendidoTmp->setActivo("N");
//                                                            $domicilioOfendidoTmp = $domiciliosofendidoscarpetasDao->updateDomiciliosofendidoscarpetas($domicilioOfendidoTmp, $proveedor);
//                                                            if ($domicilioOfendidoTmp != "") {
//                                                                $transaccion = 1;
//                                                                $logger->w_onError("**********DOMICILIO DEL OFENDIDO BORRADO LOGICAMENTE: " . $domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            } else {
//                                                                $transaccion = 0;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DOMICILIO DEL OFENDIDO: " . $domiciliosofendidoscarpetasDto[$x]->getIdDomicilioOfendidoCarpeta());
//                                                            }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con domicilios para el ofendido");
                                                        $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DOMICILIOS PARA EL OFENDIDO");
                                                        $transaccion = 0;
                                                    }
                                                    /*
                                                     * Copiar datos de defensores para el ofendido
                                                     */
                                                    $logger->w_onError("**********COPIAR DATOS DE DEFENSORES DEL OFENDIDO");
                                                    $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                                                    $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                    $defensoresofendidoscarpetasDto->setActivo("S");
                                                    $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                                                    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $proveedor);

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

                                                            $defensoresofendidosDto = $defensoresofendidoscarpetasDao->insertDefensoresofendidoscarpetas($defensoresofendidosDto, $proveedor);
                                                            if ($defensoresofendidosDto == "") {
                                                                $msg[] = array("Erro al copiar el defensor a la carpeta judicial");
                                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL DEFENSOR");
                                                                $transaccion = 0;
                                                            } else {
                                                                $transaccion = 1;
                                                                $logger->w_onError("**********ID DEL DEFENSOR OFENDIDO INSERTADO: " . $defensoresofendidosDto[0]->getIdDefensorOfendidoCarpeta());
//                                                            $defensorOfendidoTmp = new DefensoresofendidoscarpetasDTO();
//                                                            $defensorOfendidoTmp->setIdDefensorOfendidoCarpeta($defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            $defensorOfendidoTmp->setActivo("N");
//                                                            $defensorOfendidoTmp = $defensoresofendidoscarpetasDao->updateDefensoresofendidoscarpetas($defensorOfendidoTmp, $proveedor);
//                                                            if ($defensorOfendidoTmp != "") {
//                                                                $transaccion = 1;
//                                                                $logger->w_onError("**********ID DEL DEFENSOR OFENDIDO BORRADO LOGICAMENTE: " . $defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            } else {
//                                                                $transaccion = 0;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DEFENSOR OFENDIDO : " . $defensoresofendidoscarpetasDto[$x]->getIdDefensorOfendidoCarpeta());
//                                                            }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con defensores para el ofendido");
                                                        $logger->w_onError("**********EL OFENDIDO NO CUENTA CON DEFENSORES");
                                                        $transaccion = 0;
                                                    }
                                                    /*
                                                     * Copiar datos de telefonos del ofendido
                                                     */
                                                    $logger->w_onError("**********COPIAR DATOS DE LOS TELEFONOS CORRESPONDIENTES AL OFENDIDO");
                                                    $telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                                                    $telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                    $telefonosofendidoscarpetasDto->setActivo("S");
                                                    $telefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                                                    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, "", $proveedor);

                                                    if ($telefonosofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($telefonosofendidoscarpetasDto); $x++) {
                                                            $telefonosofendidosDto = new TelefonosofendidoscarpetasDTO();
                                                            $telefonosofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                                            $telefonosofendidosDto->setTelefono($telefonosofendidoscarpetasDto[$x]->getTelefono());
                                                            $telefonosofendidosDto->setCelular($telefonosofendidoscarpetasDto[$x]->getCelular());
                                                            $telefonosofendidosDto->setEmail($telefonosofendidoscarpetasDto[$x]->getEmail());
                                                            $telefonosofendidosDto->setActivo("S");

                                                            $telefonosofendidosDto = $telefonosofendidoscarpetasDao->insertTelefonosofendidoscarpetas($telefonosofendidosDto, $proveedor);
                                                            if ($telefonosofendidosDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar los telefonos a la carpeta judicial");
                                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO A LA CARPETA JUDICIAL");
                                                                $transaccion = 0;
                                                            } else {
                                                                $transaccion = 1;
                                                                $logger->w_onError("**********ID DEL TELEFONO OFENDIDO INSERTADO: " . $telefonosofendidosDto[0]->getIdTelefonoOfendidoCarpeta());
//                                                            $telefonoOfendidoTmp = new TelefonosofendidoscarpetasDTO();
//                                                            $telefonoOfendidoTmp->setIdTelefonoOfendidoCarpeta($telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            $telefonoOfendidoTmp->setActivo("N");
//                                                            $telefonoOfendidoTmp = $telefonosofendidoscarpetasDao->updateTelefonosofendidoscarpetas($telefonoOfendidoTmp, $proveedor);
//                                                            if ($telefonoOfendidoTmp != "") {
//                                                                $transaccion = 1;
//                                                                $logger->w_onError("**********ID DEL TELEFONO OFENDIDO BORRADO LOGICAMENTE: " . $telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            } else {
//                                                                $transaccion = 0;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL TELEFONO OFENDIDO : " . $telefonosofendidoscarpetasDto[$x]->getIdTelefonoOfendidoCarpeta());
//                                                            }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con telefonos para el ofendido");
                                                        $logger->w_onError("**********EL OFENDIDO NO CUENTA CON TELEFONOS");
                                                        //$transaccion = 0;
                                                    }

                                                    /*
                                                     * Copiar datos de nacionalidades del ofendido
                                                     */
                                                    $logger->w_onError("**********COPIAR DATOS DE NACIONALIDADES DEL OFENDIDO");
                                                    $nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                                                    $nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                    $nacionalidadesofendidoscarpetasDto->setActivo("S");
                                                    $nacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                                                    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, "", $proveedor);

                                                    if ($nacionalidadesofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($nacionalidadesofendidoscarpetasDto); $x++) {
                                                            $nacionalidadesofendidosDto = new NacionalidadesofendidoscarpetasDTO();
                                                            $nacionalidadesofendidosDto->setcvePais($nacionalidadesofendidoscarpetasDto[$x]->getCvePais());
                                                            $nacionalidadesofendidosDto->setactivo("S");
                                                            $nacionalidadesofendidosDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());

                                                            $nacionalidadesofendidosDto = $nacionalidadesofendidoscarpetasDao->insertNacionalidadesofendidoscarpetas($nacionalidadesofendidosDto, $proveedor);
                                                            if ($nacionalidadesofendidosDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA NACIONALIDAD DEL OFENDIDO");
                                                                $transaccion = 0;
                                                            } else {
                                                                $transaccion = 1;
                                                                $logger->w_onError("**********ID DE LA NACIONALIDAD OFENDIDO INSERTADA: " . $nacionalidadesofendidosDto[0]->getIdNacionalidadOfendidoCarpeta());
                                                                /*
                                                                 * Borrar logicamente la nacionalidad del ofendido
                                                                 */
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE LAS NACIONALIDADES DEL OFENDIDO ");
//                                                            $nacionalidadOfendidoTmp = new NacionalidadesofendidoscarpetasDTO();
//                                                            $nacionalidadOfendidoTmp->setIdNacionalidadOfendidoCarpeta($nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            $nacionalidadOfendidoTmp->setActivo("N");
//                                                            $nacionalidadOfendidoTmp = $nacionalidadesofendidoscarpetasDao->updateNacionalidadesofendidoscarpetas($nacionalidadOfendidoTmp, $proveedor);
//                                                            if ($nacionalidadOfendidoTmp != "") {
//                                                                $transaccion = 1;
//                                                                $logger->w_onError("**********ID DE LA NACIONALIDAD OFENDIDO BORRADA LOGICAMENTE: " . $nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            } else {
//                                                                $transaccion = 0;
//                                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA NACIONALIDAD DEL OFENDIDO: " . $nacionalidadesofendidoscarpetasDto[$x]->getIdNacionalidadOfendidoCarpeta());
//                                                            }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con nacionalidades para el ofendido");
                                                        $logger->w_onError("**********EL OFENDIDO NO CUENTA CON NACIONALIDADES");
                                                        $transaccion = 0;
                                                    }

                                                    /*
                                                     * Copiar datos de tutores del ofendido
                                                     */
                                                    $logger->w_onError("**********COPIAR DATOS DE TUTORES DEL OFENDIDO");
                                                    $tutoresofendidoscarpetasDto = new TutoresofendidoscarpetasDTO();
                                                    $tutoresofendidoscarpetasDto->setIdOfendidoCarpeta($impofedel->getIdOfendidoCarpeta());
                                                    $tutoresofendidoscarpetasDto->setActivo("S");
                                                    $tutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
                                                    $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, "", $proveedor);

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

                                                            $tutoresofendidosDto = $tutoresofendidoscarpetasDao->insertTutoresofendidoscarpetas($tutoresofendidosDto, $proveedor);
                                                            if ($tutoresofendidosDto == "") {
                                                                $msg[] = array("Ocurrio un error al copiar los tutores");
                                                                $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR LOS DATOS DEL TUTOR CORRESPONDIENTE AL OFENDIDO ");
                                                                $transaccion = 0;
                                                            } else {
                                                                $transaccion = 1;
                                                                $logger->w_onError("**********SE AGREGO AL TUTOR CON ID : " . $tutoresofendidosDto[0]->getIdTutorOfendidoCarpeta());
//                                                            $tutorOfendidoTmp = new TutoresofendidoscarpetasDTO();
//                                                            $tutorOfendidoTmp->setIdTutorOfendidoCarpeta($tutoresofendidoscarpetasDto[$x]->getIdTutorOfendidoCarpeta());
//                                                            $tutorOfendidoTmp->setActivo("N");
//                                                            $tutorOfendidoTmp = $tutoresofendidoscarpetasDao->updateTutoresofendidoscarpetas($tutorOfendidoTmp, $proveedor);
//                                                            if ($tutorOfendidoTmp != "") {
//                                                                $transaccion = 1;
//                                                                $logger->w_onError("**********SE BORRA LOGICAMENTE AL TUTOR DEL OFENDIDO CON ID : " . $tutoresofendidoscarpetasDto[$x]->getIdTutorOfendidoCarpeta());
//                                                            } else {
//                                                                $transaccion = 0;
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
                                                    $transaccion = 0;
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
//                                        $ofendidoTmp = $ofendidoscarpetasDao->updateOfendidoscarpetas($ofendidoTmp, $proveedor);
//                                        if ($ofendidoTmp != "") {
//                                            $transaccion = 1;
//                                            $logger->w_onError("**********SE BORRA LOGICAMENTE AL OFENDIDO CON ID :" . $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
//                                        } else {
//                                            $transaccion = 0;
//                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE AL OFENDIDO CON ID :" . $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
//                                        }
                                        }
                                    } else {
                                        //$ofendidosDto = $ofendidoscarpetasDto[0];
                                        $msg[] = array("Error la refencia base no tiene ofendidos para copiar a la carpeta");
                                        $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO CUENTA CON OFENDIDOS PARA COPIAR A LA CARPETA");
                                        $transaccion = 0;
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
                                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $proveedor);
                                    if ($delitoscarpetasDto != "") {
                                        for ($index = 0; $index < count($delitoscarpetasDto); $index++) {
                                            $delitosDto = new DelitoscarpetasDTO();
                                            $delitosDto->setIdCarpetaJudicial($idReferencia);
                                            $delitosDto->setCveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                            $delitosDto->setActivo("S");
                                            $rsDelito = $delitoscarpetasDao->selectDelitoscarpetas($delitosDto, "", $proveedor);
                                            if ($rsDelito == "") {
                                                $delitosDto = $delitoscarpetasDao->insertDelitoscarpetas($delitosDto, $proveedor);
                                                $delitosCarpetaresDtoTmp = "";
                                                if ($delitosDto == "") {
                                                    $msg[] = array("Ocurrio un error al copiar el delito a la carpeta judicial");
                                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DELITO A LA CARPETA JUDICIAL");
                                                    $transaccion = 0;
                                                } else {
                                                    $delitosDto = $delitosDto[0];
                                                    $delitosCarpetas[] = $delitosDto->getIdDelitoCarpeta();
                                                    $logger->w_onError("**********ID DEL DELITO INSERTADO: " . $delitosDto->getIdDelitoCarpeta());
//                                                $delitoTmp = new DelitoscarpetasDTO();
//                                                $delitoTmp->setIdDelitoCarpeta($delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                $delitoTmp->setActivo("N");
//                                                $delitoTmp = $delitoscarpetasDao->updateDelitoscarpetas($delitoTmp, $proveedor);
//                                                if ($delitoTmp != "") {
//                                                    $transaccion = 1;
//                                                    $logger->w_onError("**********ID DEL DELITO BORRADO LOGICAMENTE: " . $delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                } else {
//                                                    $transaccion = 0;
//                                                    $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL DELITO CON ID: " . $delitoscarpetasDto[$index]->getIdDelitoCarpeta());
//                                                }
                                                    $delitosCarpetaresDtoTmp = $delitosDto;
                                                }
                                            } else {
                                                $delitosDto = $rsDelito[0];
                                                $logger->w_onError("**********EL DELITO YA ESTA REGISTRADO EN LA BASE DE DATOS: " . $delitosDto->getIdDelitoCarpeta());
                                            }
                                        }
                                    } else {
                                        $msg[] = array("La referencia no cuenta con delitos definidos para copiar a la carpeta");
                                        $logger->w_onError("**********LA REFERENCIA NO CUENTA CON DELITOS PARA COPIAR A LA CARPETA JUDICIAL");
                                        $transaccion = 0;
                                    }

                                    /*
                                     * Copiar la relacion impofedel
                                     */
                                    $logger->w_onError("**********COPIAR LA RELACION IMPOFEDEL CARPETAS");
                                    $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                    //$impofedelcarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                    $impofedelcarpetasDto->setIdCarpetaJudicial($idReferencia);
                                    $impofedelcarpetasDto->setIdImputadoCarpeta($imputadoDto[0]->getIdImputadoCarpeta());
                                    $impofedelcarpetasDto->setIdOfendidoCarpeta($ofendidosDto->getIdOfendidoCarpeta());
                                    $impofedelcarpetasDto->setIdDelitoCarpeta($delitosDto->getIdDelitoCarpeta());
                                    $impofedelcarpetasDto->setActivo("S");
                                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                                    $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $proveedor);
                                    $logger->w_onError("Respuesta de select impodefe " . print_r($impofedelcarpetasDto, true));
                                    if ($impofedelcarpetasDto == "") {
                                        $index = 0;
                                        $impofedelDto = new ImpofedelcarpetasDTO();
                                        $impofedelDto->setIdCarpetaJudicial($idReferencia);
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

                                        $impofedelDto = $impofedelcarpetasDao->insertImpofedelcarpetas($impofedelDto, $proveedor);
                                        $logger->w_onError("Respuesta de insert impodefe " . print_r($impofedelDto, true));
                                        if ($impofedelDto == "") {
                                            $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA RELACION DEL IMPUTADO, DELITO Y OFENDIDO");
                                            $transaccion = 0;
                                        } else {
                                            $transaccion = 1;
                                            $logger->w_onError("**********SE INSERTA LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                            $impOfeDelRelCarpetas[] = array("idImpOfeDelCarpeta" => $impofedelDto[0]->getIdImpOfeDelCarpeta());
                                        }
                                        //                                                    }
                                    } else {
                                        $msg[] = array("La referencia con relacion de delitos, imputados y ofendidos ya est� registrada");
                                        $transaccion = 0;
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
                                    $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $proveedor);

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

                                            $trataspersonasDto = $trataspersonascarpetasDao->insertTrataspersonascarpetas($trataspersonasDto, $proveedor);
                                            if ($trataspersonasDto == "") {
                                                $msg[] = array("Ocurrio un error al copiar las tratas de personas a la carpeta");
                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE TRATA DE PERSONAS");
                                                $transaccion = 0;
                                            } else {
                                                $logger->w_onError("**********ID DE TRATA DE PERSONAS: " . $trataspersonasDto[0]->getIdTrataPersonaCarpeta());
                                                $transaccion = 1;
                                                /*
                                                 * Borrar logicamente el registro de trata de personas origen
                                                 */
//                                            $trataPersonasTmp = new TrataspersonascarpetasDTO();
//                                            $trataPersonasTmp->setIdTrataPersonaCarpeta($trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
//                                            $trataPersonasTmp->setActivo("N");
//                                            $trataPersonasTmp = $trataspersonascarpetasDao->updateTrataspersonascarpetas($trataPersonasTmp, $proveedor);
//                                            if ($trataPersonasTmp != "") {
//                                                $transaccion = 1;
//                                                $logger->w_onError("**********ID DE TRATA DE PERSONAS BORRADO LOGICAMENTE: " . $trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
//                                            } else {
//                                                $transaccion = 0;
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
                                    $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $proveedor);

                                    if ($violenciadegenerocarpetasDto != "") {
                                        for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x++) {
                                            $logger->w_onError("**********ID VIOLENCIA DE GENERO CARPETAS A COPIAR: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta() . " , " . $x);
                                            $violenciadegeneroDto = new ViolenciadegenerocarpetasDTO();
                                            $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                                            $violenciadegeneroDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                            $violenciadegeneroDto->setActivo("S");

                                            $violenciadegeneroDto = $violenciadegenerocarpetasDao->insertViolenciadegenerocarpetas($violenciadegeneroDto, $proveedor);

                                            if ($violenciadegeneroDto != "") {
                                                $logger->w_onError("**********SE INSERTA EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                $transaccion = 1;

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
                                                $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $proveedor);

                                                if ($efectosofendidoscarpetasDto != "") {
                                                    for ($e = 0; $e < count($efectosofendidoscarpetasDto); $e++) {
                                                        $efectosofendidosDto = new EfectosofendidoscarpetasDTO();
                                                        $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$e]->getCveDetalleEfecto());
                                                        $efectosofendidosDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                                        $efectosofendidosDto->setIdReferencia($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                        $efectosofendidosDto->setOrigen($efectosofendidoscarpetasDto[$e]->getOrigen());
                                                        $efectosofendidosDto->setactivo("S");

                                                        $efectosofendidosDto = $efectosofendidoscarpetasDao->insertEfectosofendidoscarpetas($efectosofendidosDto, $proveedor);
                                                        if ($efectosofendidosDto == "") {
                                                            $msg[] = array("Ocurrio un error al copiar los efectos de la victima a la carpeta");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS EFECTOS DE LA VICTIMA");
                                                            $transaccion = 0;
                                                        } else {
                                                            $logger->w_onError("**********ID DEL EFECTO DE LA VICTIMA INSERTADO: " . $efectosofendidosDto[0]->getIdEfectoOfendidoCarpeta());

//                                                        $efectoOfendidoTmp = new EfectosofendidoscarpetasDTO();
//                                                        $efectoOfendidoTmp->setIdEfectoOfendidoCarpeta($efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
//                                                        $efectoOfendidoTmp->setActivo("N");
//                                                        $efectoOfendidoTmp = $efectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($efectoOfendidoTmp, $proveedor);
//                                                        if ($efectoOfendidoTmp != "") {
//                                                            $transaccion = 1;
//                                                            $logger->w_onError("**********ID DEL EFECTO DE LA VICTIMA BORRADO LOGICAMENTE: " . $efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
//                                                        } else {
//                                                            $transaccion = 0;
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
                                                $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $proveedor);

                                                if ($violenciahomicidiosdolososcarpetasDto != "") {
                                                    for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y++) {
                                                        $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                                        $violenciahomicidiosdolososDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                        $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto[$y]->getCveHomicidioDoloso());
                                                        $violenciahomicidiosdolososDto->setActivo("S");

                                                        $violenciahomicidiosdolososDto = $violenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososDto, $proveedor);
                                                        if ($violenciahomicidiosdolososDto == "") {
                                                            $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero homicidios dolosos a la solicitud");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS");
                                                            $transaccion = 0;
                                                        } else {
                                                            $transaccion = 1;
                                                            $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososDto[0]->getIdViolenciaHomicidioDolosoCarpeta());
                                                            /*
                                                             * Eliminar el registro origen de violencia de genero homicidios dolosos
                                                             */
//                                                        $violenciaHomicidioDolosoTmp = new ViolenciahomicidiosdolososcarpetasDTO();
//                                                        $violenciaHomicidioDolosoTmp->setIdViolenciaHomicidioDolosoCarpeta($violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        $violenciaHomicidioDolosoTmp->setActivo("N");
//                                                        $violenciaHomicidioDolosoTmp = $violenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($violenciaHomicidioDolosoTmp, $proveedor);
//                                                        if ($violenciaHomicidioDolosoTmp != "") {
//                                                            $transaccion = 1;
//                                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        } else {
//                                                            $transaccion = 0;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS CARPETAS CON ID: " . $violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
//                                                        }
                                                        }
                                                    }
                                                } else {
                                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO HOMICIDIOS DOLOSOS" . $transaccion);
                                                }

                                                $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                                $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                                $violenciafactoressocialescarpetasDto->setActivo("S");

                                                $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                                $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $proveedor);

                                                if ($violenciafactoressocialescarpetasDto != "") {
                                                    for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y++) {
                                                        $violenciafactoressocialesDto = new ViolenciafactoressocialescarpetasDTO();
                                                        $violenciafactoressocialesDto->setIdViolenciaDeGeneroCarpeta($violenciadegeneroDto[0]->getIdViolenciaDeGeneroCarpeta());
                                                        $violenciafactoressocialesDto->setActivo("S");
                                                        $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());

                                                        $violenciafactoressocialesDto = $violenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($violenciafactoressocialesDto, $proveedor);
                                                        if ($violenciafactoressocialesDto != "") {
                                                            $logger->w_onError("**********SE INSERTO EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialesDto[0]->getIdViolenciaFactorSocialCarpeta());
                                                            $transaccion = 1;
                                                            /*
                                                             * Borrar logicamente el registro origen de violencia factores sociales
                                                             */
//                                                        $violenciaFactorSocialTmp = new ViolenciafactoressocialescarpetasDTO();
//                                                        $violenciaFactorSocialTmp->setIdViolenciaFactorSocialCarpeta($violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        $violenciaFactorSocialTmp->setActivo("N");
//                                                        $violenciaFactorSocialTmp = $violenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($violenciaFactorSocialTmp, $proveedor);
//                                                        if ($violenciaFactorSocialTmp != "") {
//                                                            $transaccion = 1;
//                                                            $logger->w_onError("**********SE BORRA LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        } else {
//                                                            $transaccion = 0;
//                                                            $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA FACTOR SOCIAL CARPETAS CON ID: " . $violenciafactoressocialescarpetasDto[$y]->getIdViolenciaFactorSocialCarpeta());
//                                                        }
                                                        } else {
                                                            $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero factor social a la carpeta judicial");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS REGISTROS DE VIOLENCIA DE GENERO FACTOR SOCIAL A LA CARPETA JUDICIAL");
                                                            $transaccion = 0;
                                                        }
                                                    }
                                                } else {
                                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO FACTOR SOCIAL" . $transaccion);
                                                }

                                                /*
                                                 * Eliminar el registro origen de violencia de genero
                                                 */
//                                            $violenciaDeGeneroTmp = new ViolenciadegenerocarpetasDTO();
//                                            $violenciaDeGeneroTmp->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            $violenciaDeGeneroTmp->setActivo("N");
//                                            $violenciaDeGeneroTmp = $violenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($violenciaDeGeneroTmp, $proveedor);
//                                            if ($violenciaDeGeneroTmp != "") {
//                                                $transaccion = 1;
//                                                $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            } else {
//                                                $transaccion = 0;
//                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE VIOLENCIA DE GENERO CARPETAS CON ID: " . $violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
//                                            }
                                            } else {
                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la carpeta");
                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                                $transaccion = 0;
                                            }
                                        }
                                    } else {
                                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE VIOLENCIA DE GENERO CARPETAS");
                                    }
                                    //}

                                    /*
                                     * Copiar hostigamiento y acoso sexual
                                     */
                                    $logger->w_onError("**********COPIAR DATOS DE HOSTIGAMIENTO Y ACOSOS SEXUAL" . $transaccion);
                                    //for ($index = 0; $index < count($impOfeDelRelCarpetas); $index++) {
                                    $sexualescarpetasDto = new SexualescarpetasDTO();
                                    $sexualescarpetasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                    $sexualescarpetasDto->setActivo("S");

                                    $sexualescarpetasDao = new SexualescarpetasDAO();
                                    $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $proveedor);

                                    if ($sexualescarpetasDto != "") {
                                        for ($x = 0; $x < count($sexualescarpetasDto); $x++) {
                                            $sexualesDto = new SexualescarpetasDTO();
                                            $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                                            $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                                            $sexualesDto->setIdImpOfeDelCarpeta($impofedelDto[0]->getIdImpOfeDelCarpeta());
                                            $sexualesDto->setActivo("S");

                                            $sexualesDto = $sexualescarpetasDao->insertSexualescarpetas($sexualesDto, $proveedor);
                                            if ($sexualesDto != "") {
                                                $logger->w_onError("**********SE INSERTO EL REGISTRO DE SEXUALES CARPETAS CON ID: " . $sexualesDto[0]->getIdSexualCarpeta());
                                                $transaccion = 1;
                                                //Sexuales conductas
                                                $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                                $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                                $sexualesconductascarpetasDto->setActivo("S");
                                                $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                                $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $proveedor);

                                                if ($sexualesconductascarpetasDto != "") {
                                                    for ($y = 0; $y < count($sexualesconductascarpetasDto); $y++) {
                                                        $sexualesconductasDto = new SexualesconductascarpetasDTO();
                                                        $sexualesconductasDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                        $sexualesconductasDto->setActivo("S");
                                                        $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());

                                                        $sexualesconductasDto = $sexualesconductascarpetasDao->insertSexualesconductascarpetas($sexualesconductasDto, $proveedor);
                                                        if ($sexualesconductasDto == "") {
                                                            $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LA CONDUCTA SEXUAL A LA CARPETA");
                                                            $transaccion = 0;
                                                        } else {
                                                            $transaccion = 1;
                                                            $logger->w_onError("**********SE INSERTA EL REGISTRO DE CONDUCTAS SEXUALES CARPETAS CON ID: " . $sexualesconductasDto[0]->getIdSexualConductaCarpeta());

                                                            $detallesSexualesConductasCarpetasDto = new DetallessexualesconductascarpetasDTO();
                                                            $detallesSexualesConductasCarpetasDao = new DetallessexualesconductascarpetasDAO();
                                                            $detallesSexualesConductasCarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                                            $detallesSexualesConductasCarpetasDto->setActivo("S");
                                                            $detallesSexualesConductasCarpetasDto = $detallesSexualesConductasCarpetasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasCarpetasDto, "", $proveedor);
                                                            if ($detallesSexualesConductasCarpetasDto != "") {
                                                                for ($d = 0; $d < count($detallesSexualesConductasCarpetasDto); $d++) {
                                                                    $detallesSexualesConductasDto = new DetallessexualesconductascarpetasDTO();
                                                                    $detallesSexualesConductasDto->setCveDetalleConducta($detallesSexualesConductasCarpetasDto[$d]->getCveDetalleConducta());
                                                                    $detallesSexualesConductasDto->setIdSexualConductaCarpeta($sexualesconductasDto[0]->getIdSexualConductaCarpeta());
                                                                    $detallesSexualesConductasDto->setActivo("S");

                                                                    $detallesSexualesConductasDto = $detallesSexualesConductasCarpetasDao->insertDetallessexualesconductascarpetas($detallesSexualesConductasDto, $proveedor);
                                                                    if ($detallesSexualesConductasDto != "") {
                                                                        $logger->w_onError("**********SE INSERTA EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasDto[0]->getIdDetalleSexualConductaCarpeta());
                                                                        $transaccion = 1;
                                                                        /*
                                                                         * Borrar logicamente el registro origen de detalle conductas sexuales carpetas
                                                                         */
//                                                                    $detalleSexualConductaTmp = new DetallessexualesconductascarpetasDTO();
//                                                                    $detalleSexualConductaTmp->setIdDetalleSexualConductaCarpeta($detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    $detalleSexualConductaTmp->setActivo("N");
//                                                                    $detalleSexualConductaTmp = $detallesSexualesConductasCarpetasDao->updateDetallessexualesconductascarpetas($detalleSexualConductaTmp, $proveedor);
//                                                                    if ($detalleSexualConductaTmp != "") {
//                                                                        $transaccion = 1;
//                                                                        $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    } else {
//                                                                        $transaccion = 0;
//                                                                        $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE DETALLE CONDUCTAS SEXUALES CARPETAS CON ID: " . $detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
//                                                                    }
                                                                    } else {
                                                                        $msg[] = array("Ocurrio un error al copiar el detalle de conductas sexuales a la carpeta judicial");
                                                                        $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DETALLE DE CONDUCTA SEXUAL A LA CARPETA");
                                                                        $transaccion = 0;
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
//                                                        $sexualesConductasTmp = $sexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesConductasTmp, $proveedor);
//                                                        if ($sexualesConductasTmp != "") {
//                                                            $transaccion = 1;
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO SEXUALES CONDUCTAS CARPETAS CON ID : " . $sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
//                                                        } else {
//                                                            $transaccion = 0;
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
                                                $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $proveedor);

                                                if ($testigossexualescarpetasDto != "") {
                                                    for ($y = 0; $y < count($testigossexualescarpetasDto); $y++) {
                                                        $testigossexualesDto = new TestigossexualescarpetasDTO();
                                                        $testigossexualesDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                                                        $testigossexualesDto->setPaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                                        $testigossexualesDto->setMaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                                        $testigossexualesDto->setNombre($testigossexualescarpetasDto[$y]->getNombre());
                                                        $testigossexualesDto->setCveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                                        $testigossexualesDto->setActivo("S");

                                                        $testigossexualesDto = $testigossexualescarpetasDao->insertTestigossexualescarpetas($testigossexualesDto, $proveedor);

                                                        if ($testigossexualesDto == "") {
                                                            $msg[] = array("Ocurrio un error al copiar los datos del testigo de acoso sexual");
                                                            $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR LOS DATOS DEL TESTIGO SEXUAL");
                                                            $transaccion = 0;
                                                        } else {
                                                            $transaccion = 1;
                                                            $logger->w_onError("**********SE INSERTA EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualesDto[0]->getIdTestigoSexualCarpeta());
//                                                        $testigoSexualTmp = new TestigossexualescarpetasDTO();
//                                                        $testigoSexualTmp->setIdTestigoSexualCarpeta($testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
//                                                        $testigoSexualTmp->setActivo("N");
//                                                        $testigoSexualTmp = $testigossexualescarpetasDao->updateTestigossexualescarpetas($testigoSexualTmp, $proveedor);
//                                                        if ($testigoSexualTmp != "") {
//                                                            $transaccion = 1;
//                                                            $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DEL TESTIGO DE ACOSO SEXUAL CON ID: " . $testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
//                                                        } else {
//                                                            $transaccion = 0;
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
//                                            $sexualesTmp = $sexualescarpetasDao->updateSexualescarpetas($sexualesTmp, $proveedor);
//                                            if ($sexualesTmp != "") {
//                                                $transaccion = 1;
//                                                $logger->w_onError("**********BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                            } else {
//                                                $transaccion = 0;
//                                                $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE EL REGISTRO DE ACOSO Y HOSTIGAMIENTO SEXUAL CON ID: " . $sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                            }
                                            } else {
                                                $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL ACOSO Y HOSTIGAMIENTO SEXUAL");
                                                $transaccion = 0;
                                            }
                                        }
                                    } else {
                                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS DE CONDUCTAS SEXUALES" . $transaccion);
                                    }
                                    //}
//                                $impofedelTmp = new ImpofedelcarpetasDTO();
//                                $impofedelTmp->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
//                                $impofedelTmp->setActivo("N");
//                                $impofedelTmp = $impofedelcarpetasDao->updateImpofedelcarpetas($impofedelTmp, $proveedor);
//                                if ($impofedelTmp != "") {
//                                    $transaccion = 1;
//                                    $logger->w_onError("**********SE BORRA LOGICAMENTE LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedel->getIdImpOfeDelCarpeta());
//                                } else {
//                                    $transaccion = 0;
//                                    $logger->w_onError("**********OCURRIO UN ERROR AL BORRAR LOGICAMENTE LA RELACION IMPOFEDEL CARPETAS CON ID: " . $impofedel->getIdImpOfeDelCarpeta());
//                                }
                                }
                            } else {
                                $msg[] = array("Error la refencia base no tiene relacion impofedel carpetas");
                                $logger->w_onError("**********SE DETERMINA QUE LA REFERENCIA BASE NO TIENE RELACION IMPOFEDEL CARPETAS");
                                $transaccion = 0;
                            }
                            if ($transaccion == 0) {
                                $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE LA COPIA DE DATOS, TERMINA EL PROCESO");
                                break;
                            }
                        }
                    }
                    $generoimputadosres = $imputadoDto;
                    $generoimputadosDtoTmp = $imputadoDto;
                    $generorelacionesDtoTmp = $impofedelDto;
                    $generoRelacionesimpofedelres = $impofedelDto;
                } else {

                    $generoimputadosDto = new ImputadoscarpetasDTO();
                    $generoimputadosDto->setIdCarpetaJudicial($idReferencia);
                    $generoimputadosDto->setCveEtapaProcesal($id_etapaprocesal);
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
                    $generoimputadosres = $inputadosDao->insertImputadoscarpetas($generoimputadosDto, $proveedor);
                    $generoimputadosDtoTmp = $generoimputadosres;

                    //genero ofendidos 

                    $generoOfendidosDto = new OfendidoscarpetasDTO();
                    $generoOfendidosDto->setIdCarpetaJudicial($idReferencia);
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
                    $generoOfendidosres = $OfendidosDao->insertOfendidoscarpetas($generoOfendidosDto, $proveedor);
                    $generoOfendidosDtoTmp = $generoOfendidosres;
                    $ofendidosDto = $generoOfendidosres;
                    //genero insert delitos carpeta
                    $delitosCarpetaDto = new DelitoscarpetasDTO();
                    $delitosCarpetaDto->setActivo('S');
                    $delitosCarpetaDto->setIdCarpetaJudicial($idReferencia);
                    $delitosCarpetaDto->setCveDelito(134);

                    $delitosCarpetaDao = new DelitoscarpetasDAO();
                    $delitosCarpetares = $delitosCarpetaDao->insertDelitoscarpetas($delitosCarpetaDto, $proveedor);
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
                    $generoRelacionesimpofedel->setIdCarpetaJudicial($idReferencia);
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
                    $generoRelacionesimpofedelres = $impofedelDao->insertImpofedelcarpetas($generoRelacionesimpofedel, $proveedor);

                    $generorelacionesDtoTmp = $generoRelacionesimpofedelres;
                }
                if ($generoimputadosres == "") {
                    $mensaje = "Error al registrar imputados";
                    $transaccion = 0;
                    error_log("error al registrar imputados" . $proveedor->error());
                }

                //Genero carpeta ofendidos

                if ($ofendidosDto == "") {
                    $mensaje = "Error al registrar ofendidos, no existen ofendidos en esta carpeta";
                    $transaccion = 0;
                    error_log("error al registrar ofendidos, no existen ofendidos en esta carpeta" . $proveedor->error());
                }



                if ($delitosDto == "") {
                    $mensaje = "Error al registrar delitos, no existe delitos en esta carpeta";
                    $transaccion = 0;
                    error_log("error al registrar carpeta delitos" . $proveedor->error());
                }


                if ($generoRelacionesimpofedelres == "") {
                    $mensaje = "Error no hay imputados para esta carpeta";
                    $transaccion = 0;
                    error_log("error no existen imputados en esta carpeta" . $proveedor->error());
                    $logger->w_onError("error al registrar relaciones impofedel" . $proveedor->error());
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en al insertar la promocion";
            }
        } else {
            $transaccion = 0;
            $mensaje = "Error en contadores, el numero de promocion ya existe o es mayor al contador actual, Seleccione Automatico";
            error_log($mensaje);
        }
        $respuesta = array();
        if ($transaccion == 1) {
            // ERROR NO SE DEBE INGRESAR LA BITACORA CON UN CICLO YA QUE DEBE SER CON CADA INSERT QUE SE HACE Y SE DEBE ENVIAR EN $dtoToJson EL RESULTADO DE CADA REGISTRO INSERTADO
            for ($i = 0; $i < 7; $i++) {

                switch ($i) {
                    case 0:
                        $accion = 'INSERCION';
                        $cveaccion = 252;
                        $observacion = 'INSERCION PROMOCION QUE GENERA CAUSA';
                        $dtoToJson = new DtoToJson($judicializadasDtoTmp);
                        break;
                    case 1:
                        $accion = 'INSERCION';
                        $cveaccion = 168;
                        $observacion = 'INSERCION IMPUTADOS';
                        $dtoToJson = new DtoToJson($generoimputadosDtoTmp);
                        break;
                    case 2:
                        $accion = 'INSERCION';
                        $cveaccion = 189;
                        $observacion = 'INSERCION OFENDIDOS';
                        $dtoToJson = new DtoToJson($generoOfendidosDtoTmp);
                        break;
                    case 3:
                        $accion = 'INSERCION';
                        $cveaccion = 253;
                        $observacion = 'INSERCION CARPETA JUDICIALIZADA';
                        $dtoToJson = new DtoToJson($carpetasJudicialilzadasDtoTmp);
                        break;
                    case 4:
                        $accion = 'ACTUALIZA';
                        $cveaccion = 254;
                        $observacion = 'ACTUALIZA PROMOCION QUE GENERA CAUSA';
                        $dtoToJson = new DtoToJson($actuacionesupdateDtoTmp);
                        break;
                    case 5:
                        $accion = 'INSERCION';
                        $cveaccion = 209;
                        $observacion = 'INSERCION DE RELACION IMPOFEDELCARPETA ';
                        $dtoToJson = new DtoToJson($generorelacionesDtoTmp);
                        break;
                    case 6:
                        $accion = 'INSERCION';
                        $cveaccion = 207;
                        $observacion = 'INSERCION DE DELITOS CARPETA ';
                        $dtoToJson = new DtoToJson($delitosCarpetaresDtoTmp);
                        break;
                }

                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion($cveaccion); // insercion de oficio / acuerdo
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //

                $dtoToJson->toJson($accion);
                $bitacoraDTO->setObservaciones($dtoToJson->toJson($observacion)); //
                $bitacoraDTO->setCveUsuario($judicializadasDto->getCveUsuario());
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($judicializadasDto->getCveJuzgado()); // variable de session
                $resultBitacora = $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                if ($resultBitacora == "") {
                    $transaccion = 0;
                }
            }
            if ($transaccion == 0) {
                $proveedor->execute("ROLLBACK");
                $judicializadasDto = "";
                $respuesta = array("Estatus" => "Error al insertar bitacora", "Mensaje" => $mensaje);
                error_log($mensaje);
            } else {
                $proveedor->execute("COMMIT");
                $respuesta = array("Estatus" => "Ok", "totalCount" => "1", "Mensaje" => "Se registro la promocion", "idActuacion" => $judicializadasDto->getIdActuacion(),
                    "numActuacion" => $judicializadasDto->getNumActuacion(), "aniActuacion" => $judicializadasDto->getAniActuacion(),
                    "numero" => $actuacionesupdate[0]->getNumero(), "anio" => $actuacionesupdate[0]->getAnio(), "idCarpetaJudicializada" => $actuacionesupdate[0]->getIdReferencia(),
                    "ActuacionesDto" => $judicializadasDtoTmp);
                $judicializadasDto = $judicializadasDtoTmp;
            }
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $judicializadasDto = "";
            $respuesta = array("Estatus" => "Error al insertar datos", "Mensaje" => $mensaje);
            error_log($mensaje);
        }
//        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $respuesta;
    }

    public function consultarActuacion_CarpetaJudicializada($judicializadasDto = "", $param = null) {
        $ActuacionesDao = new ActuacionesDAO();
        $promoventesActuacionesDao = new PromoventesactuacionesDAO();
        $promoventesActuacionesDto = new PromoventesactuacionesDTO();
        if ($judicializadasDto->getCveTipoCarpeta() == 0) {
            $judicializadasDto->setCveTipoCarpeta("");
        }
//        $validacion = new Validacion();
        $judicializadasDto->setActivo("S");
        error_log(print_r($param, true));
        $numTot = "0";
        $totPages = "0";
        if ($param["pag"] == 1) {
            $validacion = new Validacion();
            $fechaDesde = $validacion->normalToMysql($param["fechaDesde"]);
            $fechaHasta = $validacion->normalToMysql($param["fechaHasta"]);

            $fechas = "";
            if ($fechaDesde != "" && $fechaHasta != "") {
                $fechas = " AND fechaRegistro>='" . $fechaDesde . "' AND fechaRegistro<='" . $fechaHasta . "'";
            }

            $numTot = $ActuacionesDao->selectActuaciones($judicializadasDto, null, $fechas, null, " count(idActuacion) as totalCount ");
            if ($numTot == "") {
                error_log(print_r($numTot, true) . " ");
            }
            $Pages = (int) $numTot[0] / $param["cantxPag"];
            $restoPages = $numTot[0] % $param["cantxPag"];
//            error_log("resto paginas => ".$restoPages);
//            error_log(" paginas => ".$Pages);
            $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        } else {
            error_log("no cuenta");
        }
//        public function selectActuaciones($judicializadasDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $judicializadasDto = $ActuacionesDao->selectActuaciones($judicializadasDto, null, "ORDER BY fechaRegistro DESC", $param, null);
        error_log(print_r($judicializadasDto, true));
        $datos = "";
        if ($judicializadasDto != "") {
            $datos = array("estatus" => "ok", "mensaje" => "Resultados", "datos" => array());
            $tiposCarpetasDao = new TiposcarpetasDAO();
            $tiposCarpetasDto = new TiposcarpetasDTO();
            $tiposCarpetasDto->getActivo("S");
            $tiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);

            error_log("tipos carpetas" . print_r($tiposCarpetas, true));
            $generosController = new GenerosController();
            $GenerosDto = new GenerosDTO();
            $GenerosDto->setActivo("S");
            $tiposPersonasController = new TipospersonasController();
            $TipospersonasDto = new TipospersonasDTO();
            $TipospersonasDto->setActivo("S");
            $listaGeneros = $generosController->selectGeneros($GenerosDto);
            $listaTiposPersonas = $tiposPersonasController->selectTipospersonas($TipospersonasDto);
            error_log(print_r($listaTiposPersonas, true));
            $listaUsuarios = "";
            error_log("===================================================");
            if ($judicializadasDto != "") {
                foreach ($judicializadasDto as $actuacion) {
                    error_log(print_r($actuacion, true));
                    $listaUsuarios.=$actuacion->getCveUsuario() . ",";
                }
            }
            $usuarios = "";
            if ($listaUsuarios != "") {
                $listaUsuarios = trim($listaUsuarios, ",");
                error_log("lista usuarios => " . $listaUsuarios);
                $usuarioCliente = new UsuarioCliente();
                $usuarios = $usuarioCliente->selectUsuarios_In($listaUsuarios);
                $usuarios = json_decode($usuarios, true);
            } else {
                
            }
            if ($judicializadasDto != "") {
                foreach ($judicializadasDto as $actuacion) {
                    $promoventesActuacionesDto->setIdActuacion($actuacion->getIdActuacion());
                    $promoventesActuaciones = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);
                    error_log("PRomoventes " . print_r($promoventesActuaciones, true));
                    $listPromovente = array();
                    if ($promoventesActuaciones != "") {
                        foreach ($promoventesActuaciones as $promovente) {
                            $descGenero = "";
                            foreach ($listaGeneros as $genero) {
                                if ($promovente->getCveGenero() == $genero->getCveGenero()) {
                                    $descGenero = $genero->getDesGenero();
                                    break;
                                }
                            }
                            $desTipoPersona = "";
                            foreach ($listaTiposPersonas as $tipoPersona) {
                                if ($tipoPersona->getCveTipoPersona() == $promovente->getCveTipoPersona()) {
                                    $desTipoPersona = $tipoPersona->getDesTipoPersona();
                                    break;
                                }
                            }
                            $prom = array("idPromoventeActuacion" => $promovente->getIdPromoventeActuacion(),
                                "cveTipoParte" => $promovente->getCveTipoParte(),
                                "cveTipoPersona" => $promovente->getCveTipoPersona(),
                                "descTipoPersona" => $desTipoPersona,
                                "nombre" => utf8_encode(utf8_decode($promovente->getNombre())),
                                "paterno" => utf8_encode(utf8_decode($promovente->getPaterno())),
                                "materno" => utf8_encode(utf8_decode($promovente->getMaterno())),
                                "nombrePersonaMoral" => utf8_encode(utf8_decode($promovente->getNombrePersonaMoral())),
//                                "nombre" => ($promovente->getNombre()),
//                                "paterno" => ($promovente->getPaterno()),
//                                "materno" => ($promovente->getMaterno()),
//                                "nombrePersonaMoral" => ($promovente->getNombrePersonaMoral()),
                                "cveGenero" => $promovente->getCveGenero(),
                                "descGenero" => $descGenero
                            );
                            array_push($listPromovente, $prom);
                        }
                    }
                    $descCarpeta = "";
                    foreach ($tiposCarpetas as $tipoCarpeta) {
                        if ($tipoCarpeta->getCveTipoCarpeta() == $actuacion->getCveTipoCarpeta()) {
                            $descCarpeta = $tipoCarpeta->getDesTipoCarpeta();
                            break;
                        }
                    }
                    $nombrePerCaptura = "";
                    if ($usuarios != "") {
                        foreach ($usuarios["data"] as $usuario) {
                            $nombrePerCaptura = $usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"];
                        }
                    }

                    $variableObservaciones = utf8_encode($actuacion->getObservaciones());
                    $dato = array("idActuacion" => $actuacion->getIdActuacion(),
                        "numActuacion" => $actuacion->getNumActuacion(),
                        "aniActuacion" => $actuacion->getAniActuacion(),
                        "cveTipoCarpeta" => $actuacion->getCveTipoCarpeta(),
                        "descTipoCarpeta" => $descCarpeta,
                        "numero" => $actuacion->getNumero(),
                        "anio" => $actuacion->getAnio(),
                        "idReferencia" => $actuacion->getIdReferencia(),
                        "fojas" => $actuacion->getNoFojas(),
                        "sintesis" => $actuacion->getSintesis(),
                        "observaciones" => utf8_decode($variableObservaciones),
                        "fechaRegistro" => $actuacion->getFechaRegistro(),
                        "nombrePerCaptura" => utf8_encode($nombrePerCaptura),
                        "promoventes" => $listPromovente);
                    array_push($datos["datos"], $dato);
                }
            }
//            $dtoToJson = new DtoToJson($judicializadasDto);
//            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            ($datos["totalCount"] = $numTot[0]);
            ($datos["total"] = $totPages);
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
//        print_r($datos);
        return $datos;
    }

    public function consultarActuacion_Comparecencia($actuacionesDto = "", $param = null, $cveTipoParte = "") {
        $fechaInicio = explode("/", $param["fechaDesde"]);
        $fechaFinal = explode("/", $param["fechaHasta"]);
//        var_dump($fechaInicio);
//        var_dump($fechaFinal);
        $campos = " a.idActuacion, 
                    a.numero, 
                    a.anio, 
                    a.idReferencia,
                    a.cveTipoActuacion,
                    a.cveTipoCarpeta, 
                    a.Sintesis,
                    a.observaciones,
                    c.idComparecencia,
                    c.numEmpleadoFePublica,
                    c.Nombre,
                    c.lugarComparecencia,
                    c.horaComparecencia ";
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
        $param["fechaDesde"] = "";
        $param["fechaHasta"] = "";
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = new ActuacionesDTO();
        $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion(246); // insercion de oficio / acuerdo
        $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
        $dtoToJson = new DtoToJson($actuacionesDto);
        $dtoToJson->toJson("CONSULTAR");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("CONSULTAR")); //
        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
        $bitacoraDTO->setCveAdscripcion($actuacionesDto->getCveJuzgado()); // variable de session
        $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
        //var_dump($actuacionesDto);
        $actuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $orden, $param, $campos);
        error_log(print_r($actuacionesDto, true));
        if ($actuacionesDto != "") {
            $personasComparecenciasList = array();
            $datos = array("estatus" => "ok", "totalCount" => "", "fepublica" => array(), "pagina" => $param["pag"], "total" => "", "mensaje" => "Resultados", "datos" => array("personas" => array()));
            $numFePublica = "";
            foreach ($actuacionesDto as $actuacion) {
                //var_dump($actuacion);
                $personasControl = new PersonascomparecenciasController();
                $personasComparecencias = array();
                $personasComparecencias = $personasControl->obtenerListaPersonas($actuacion["idComparecencia"], $cveTipoParte);
                //array_push($personasComparecenciasList, $personasComparecencias);
                $numFePublica .= $actuacion["numEmpleadoFePublica"] . ",";
                array_push($datos["datos"], $actuacion);
                array_push($datos["datos"]["personas"], $personasComparecencias);
            }
            $numFePublica = substr($numFePublica, 0, -1);
            //echo $numFePublica;
            $personaCliente = new PersonalCliente();
            $JSONpersonasFePublica = $personaCliente->getNumEmpleado($numFePublica);

            $datos["totalCount"] = count($datos["datos"]) - 1;
            array_push($datos["fepublica"], json_decode($JSONpersonasFePublica));
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }

        return $datos;
        //echo "\nConsultaActuaciones_Comparecencia\n";
//        if($param["cantxPag"] == "")
//            var_dump($param);
//        $personasCompArray = array();
//        $actuacionesCompPerArray = array();
//        $listActuaciones = array();
//        $ActuacionesDao = new ActuacionesDAO();
//        $actArray = "";
//        
//        if($actuacionesDto->getCveTipoCarpeta() == 0){
//            $actuacionesDto->setCveTipoCarpeta("");
//        }
//        $actuacionesDto->setActivo("S");
//        $actuacionesDto = $ActuacionesDao->selectActuaciones($actuacionesDto, null, "", $param, null);
//        $datos = "";
//        if($actuacionesDto != ""){
//            $actArray = array(
//                "idActuacion" => "",
//                "numActuacion" => "",
//                "aniActuacion" => "",
//                "cveTipoActuacion" => "",
//                "idReferencia" => "",
//                "numero" => "",
//                "anio" => "",
//                "cveTipoCarpeta" => "",
//                "cveJuzgado" => "",
//                "Sintesis" => "",
//                "observaciones" => "",
//                "cveUsuario" => "",
//                "idComparecencia" => "",
//                "numEmpleadoFePublica" => "",
//                "lugarComparecencia" => "",
//                "horaComparecencia" => "",
//                "personasComparecencia" => array()
//            );
//            //echo "\n If actuacionesDto \n";
//            $datos = array("estatus" => "ok", "totalCount" => "", "pagina" => "", "total" => "", "mensaje" => "Resultados", "datos" => array());
//            $comparecenciasDao = new ComparecenciasDAO();
//            $comparecenciasDto = new ComparecenciasDTO();
//            
//            $comparecenciasDto->setActivo("S");
//            $compArray = array();
//            foreach ($actuacionesDto as $actuaciones) {
//                //echo "\n Foreach Actuaciones \n";
//    
//                $comparecenciasDto->setIdActuacion($actuaciones->getIdActuacion());
//                $comparecencias = $comparecenciasDao->selectComparecencias($comparecenciasDto, "", null);
//                if($comparecencias != ""){
//                    //echo "\n IF Comparecencias \n";
//                    $personasComparecenciasDao = new PersonascomparecenciasDAO();
//                    $personasComparecenciasDto = new PersonascomparecenciasDTO();
//                    $personasComparecenciasDto->setActivo("S");
//                    //echo "\n Foreach Comparecencias  \n";
//                    $personasControl = new PersonascomparecenciasController();
//                    $personasComparecencias = array();
//                    $personasComparecencias  = $personasControl->obtenerListaPersonas($comparecencias[0], $cveTipoParte);
//                    if($personasComparecencias != ""){
//                        $actArray["idActuacion"] = $actuaciones->getIdActuacion();
//                        $actArray["numActuacion"] = $actuaciones->getNumActuacion();
//                        $actArray["aniActuacion"] = $actuaciones->getAniActuacion();
//                        $actArray["cveTipoActuacion"] = $actuaciones->getCveTipoActuacion();
//                        $actArray["idReferencia"] = $actuaciones->getIdReferencia();
//                        $actArray["numero"] = $actuaciones->getNumero();
//                        $actArray["anio"] = $actuaciones->getAnio();
//                        $actArray["cveTipoCarpeta"] = $actuaciones->getCveTipoCarpeta();
//                        $actArray["cveJuzgado"] = $actuaciones->getCveJuzgado();
//                        $actArray["Sintesis"] = $actuaciones->getSintesis();
//                        $actArray["observaciones"] = $actuaciones->getObservaciones();
//                        $actArray["cveUsuario"] = $actuaciones->getCveUsuario();
//                        $actArray["idComparecencia"] = $comparecencias[0]->getIdComparecencia();
//                        $actArray["numEmpleadoFePublica"] = $comparecencias[0]->getNumEmpleadoFePublica();
//                        $actArray["nombreEmpleadoFePublica"] = $comparecencias[0]->getNumEmpleadoFePublica();
//                        $actArray["lugarComparecencia"] = $comparecencias[0]->getLugarComparecencia();
//                        $actArray["horaComparecencia"] = $comparecencias[0]->getHoraComparecencia();
//                        $actArray["personasComparecencia"] = $personasComparecencias;
//                        if($actuaciones->getIdActuacion() == $comparecencias[0]->getIdActuacion()){
//                            //echo "\n\n\nASIGNA ARRAY LISTA ACTUACIONES\n\n\n";
//                            
//                            array_push($datos["datos"], $actArray);
//                            $datos["totalCount"] = count($datos["datos"]);
//                            $datos["pagina"] = $param["pag"];
//                            $datos["total"] = count($datos["datos"]);
//                        }
//                    } 
//                }else{
//                    $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
//                }
//                
//            }
//            //var_dump($datos);
//        }  else {
//            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
//        }
//        return $datos;
    }

    public function consultarActuacion_ComparecenciaBy($ActuacionesDto) {
        $campos = " a.idActuacion, 
                    a.numero, 
                    a.anio, 
                    a.idReferencia,
                    a.cveTipoActuacion,
                    a.cveTipoCarpeta, 
                    a.Sintesis,
                    a.observaciones,
                    c.idComparecencia,
                    c.Nombre,
                    c.numEmpleadoFePublica,
                    c.lugarComparecencia,
                    c.horaComparecencia ";
        $orden = " a , tblcomparecencias c, tblpersonascomparecencias pc ";
        $orden .= " WHERE a.idActuacion = " . $ActuacionesDto->getIdActuacion();
        $orden .= " AND a.idActuacion = c.idActuacion";
        $orden .= " AND c.idComparecencia = pc.idComparecencia";
        $orden .= " AND a.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        $orden .= " AND pc.activo  ='S'";
        $orden .= " GROUP BY pc.idComparecencia ";
        //var_dump($param);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = new ActuacionesDTO();

        $actuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $orden, null, $campos);
        //var_dump($actuacionesDto);
        if ($actuacionesDto != "") {
            $personasComparecenciasList = array();
            $datos = array("estatus" => "ok", "totalCount" => "", "fepublica" => array(), "total" => "", "mensaje" => "Resultados", "datos" => array("personas" => array()));
            $numFePublica = "";
            foreach ($actuacionesDto as $actuacion) {
//                var_dump($actuacion);
                $personasControl = new PersonascomparecenciasController();
                $personasComparecencias = array();
                $personasComparecencias = $personasControl->obtenerListaPersonas($actuacion["idComparecencia"], null);
                //array_push($personasComparecenciasList, $personasComparecencias);
                $numFePublica .= $actuacion["numEmpleadoFePublica"] . ",";
                array_push($datos["datos"], $actuacion);
                array_push($datos["datos"]["personas"], $personasComparecencias);
            }
            $numFePublica = substr($numFePublica, 0, -1);
            //echo $numFePublica;
            $personaCliente = new PersonalCliente();
            $JSONpersonasFePublica = $personaCliente->getNumEmpleado($numFePublica);

            $datos["totalCount"] = count($datos["datos"]) - 1;
            array_push($datos["fepublica"], json_decode($JSONpersonasFePublica));
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
        //var_dump($datos);
        return $datos;
    }

    public function actualizarActuacion_Comparecencia($ActuacionesDto, $proveedor = null, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica) {
        error_log("================================================================================================= \n");
        //echo "\nActuacionesController --> function: guardarActuacion_Comparecencia";
        //echo "\n antes de validar";
        //var_dump($ActuacionesDto);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        //echo "\n despues de validar";
        //var_dump($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";


        if ($transaccion == 1) {
//            echo "\nentra a contador != transaccion == 1";
            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            error_log(print_r($ActuacionesDto, true));
            $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
//            echo "\nImpime actuacionesDTO";
//            var_dump($ActuacionesDto);
            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                //echo "\n entra a actuacion DTO != vacio";
                $ActuacionesDto = $ActuacionesDto[0];
                $ComparecenciasDto = new ComparecenciasDTO();
                $ComparecenciasDao = new ComparecenciasDAO();
                $ComparecenciasDto->setIdActuacion($ActuacionesDto->getIdActuacion());
                $ComparecenciasDto->setNumEmpleadoFePublica($numEmpleadoFePublica);
                $ComparecenciasDto->setActivo("S");
                $ComparecenciasDto->setLugarComparecencia(utf8_decode($lugarComparecencia));
                $ComparecenciasDto->setHoraComparecencia($horaComparecencia);
                $ComparecenciasDto->setNombre($nombrePersonaFePublica);

//                echo "\nimprime comparecencia DTO antes de update\n";
//                var_dump($ComparecenciasDto);
                $comparecenciasDTOAUX = new ComparecenciasDTO();
                $comparecenciasDTOAUX->setIdActuacion($ActuacionesDto->getIdActuacion());
//                var_dump($comparecenciasDTOAUX);
                $comparecenciasDTOAUX = $ComparecenciasDao->selectComparecencias($comparecenciasDTOAUX, "", null);
//                var_dump($comparecenciasDTOAUX[0]);
                $ComparecenciasDto->setIdComparecencia($comparecenciasDTOAUX[0]->getIdComparecencia());
//                var_dump($ComparecenciasDto);
                $ComparecenciasDto = $ComparecenciasDao->updateComparecencias($ComparecenciasDto, $proveedor);
//                var_dump($ComparecenciasDto);
//                echo "\nimprime comparecencia DTO\n";
//                var_dump($ComparecenciasDto);
                $ComparecenciasDtoTmp = $ComparecenciasDto;

                if ($ComparecenciasDto != "") {
//                    echo "\nentra comparecencias diferente de vacio";
                    //var_dump($ComparecenciasDto);
                    $ComparecenciasDto = $ComparecenciasDto[0];

                    $listaComparecentes = json_decode($listaComparecentes, true);
                    $personasComparecenciasDao = new PersonascomparecenciasDAO();

                    foreach ($listaComparecentes as $comparecente) {
//                        echo "\n entra al foreach\n";
//                        var_dump($comparecente);
                        $personasComparecenciasDto = new PersonascomparecenciasDTO();
                        $personasComparecenciasDto->setIdPersonacomparecencia($comparecente["idPersonacomparecencia"]);
                        $personasComparecenciasDto->setIdComparecencia($ComparecenciasDto->getIdComparecencia());
                        $personasComparecenciasDto->setCveTipoParte($comparecente['cveTipoParte']);
                        $personasComparecenciasDto->setCveTipoPersona($comparecente['cveTipoPersona']);
                        $personasComparecenciasDto->setCveGenero($comparecente['cveGenero']);
                        $personasComparecenciasDto->setActivo($comparecente['activo']);

                        if ($comparecente['cveTipoPersona'] == 1) {
                            $personasComparecenciasDto->setMaterno($comparecente['materno']);
                            $personasComparecenciasDto->setPaterno($comparecente['paterno']);
                            $personasComparecenciasDto->setNombre($comparecente['nombre']);
                            //$personasComparecenciasDto->setFechaActualizacion("now()");
                            //$personasComparecenciasDto->setFechaRegistro("now()");
//                           echo "\n entra a comparecente tipo persona 1\n";
                        } elseif ($comparecente["cveTipoPersona"] == 2 || $comparecente["cveTipoPersona"] == 3) {
                            $personasComparecenciasDto->setNombrePersonaMoral($comparecente['nombre']);
//                            echo "\n entra a comparecente tipo persona 2 3\n";
                        }
//                        echo "\nimprime persona comparecencias DTO\n";
//                        var_dump($personasComparecenciasDto);
//                        $personasComparecenciasAUX = new PersonascomparecenciasDTO();
//                        $personasComparecenciasAUX->setIdComparecencia($ComparecenciasDto->getIdComparecencia());
//                        var_dump($personasComparecenciasAUX);
//                        $personasComparecenciasDto = $personasComparecenciasDao->selectPersonascomparecencias($personasComparecenciasAUX, "", null);
//                      
//                          echo "\n----------------------------------------------\n";
//                        var_dump($personasComparecenciasDto);
                        if ($personasComparecenciasDto->getIdPersonacomparecencia() == 0)
                            $personasComparecenciasDto = $personasComparecenciasDao->insertPersonascomparecencias($personasComparecenciasDto, $proveedor);
                        else
                            $personasComparecenciasDto = $personasComparecenciasDao->updatePersonascomparecencias($personasComparecenciasDto, $proveedor);
//                        echo "\nPrepara UP\n";
                        //var_dump($personasComparecenciasDto);
                        if ($personasComparecenciasDto == "") {
//                            echo "\n entra a personas comparecentes vacio\n";
                            $transaccion = 0;
                            break;
                        }
                    }
                    if ($transaccion == 1) {
//                        echo "\n entra a transaccion == 1\n";
                        $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                        if ($estatusActuacion == "") {
                            //echo "\n entra a estatus actuacion vacio";
                            $transaccion = 0;
                        }
                    }
                } else {
                    $transaccion = 0;
//                    echo "\n error al insertar la comparecencia\n";
                    $mensaje = "error al insertar la comparecencia\n";
                    error_log("error " . $mensaje . " " . $proveedor->error());
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en contadores";
//                echo "\nerror en contadores\n";
            }
            $respuesta = array();
            if ($transaccion == 1) {
//                echo "\nOK\n";
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(247); // insercion de oficio / acuerdo
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
                $dtoToJson->toJson("ACTUALIZAR");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("ACTUALIZAR")); //
                $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
                $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                $proveedor->execute("COMMIT");
                $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                    "numActuacion" => $ActuacionesDto->getNumActuacion(), $ActuacionesDto->getAniActuacion());
                $ActuacionesDto = $ActuacionesDtoTmp;
            } else if ($transaccion == 0) {
//                echo "\nFAIL\n";
                $proveedor->execute("ROLLBACK");
                $ActuacionesDto = "";
                $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            }
            $respuesta = json_encode($respuesta);
            $proveedor->close();
            return $ActuacionesDto;
        }
    }

    public function eliminarActuacion_Comparecencia($ActuacionesDto, $idComparecencia, $listaComparecentes) {
        error_log("================================================================================================= \n");
        //echo "\nActuacionesController --> function: guardarActuacion_Comparecencia";
        //echo "\n antes de validar";
        //var_dump($ActuacionesDto);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        //echo "\n despues de validar";
        //var_dump($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";


        if ($transaccion == 1) {
            //echo "\nentra a contador != transaccion == 1";
            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("N");
            error_log(print_r($ActuacionesDto, true));
            $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
            //echo "\nImpime actuacionesDTO";
            //var_dump($ActuacionesDto);
            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                //echo "\n entra a actuacion DTO != vacio";
                $ActuacionesDto = $ActuacionesDto[0];
                $ComparecenciasDto = new ComparecenciasDTO();
                $ComparecenciasDao = new ComparecenciasDAO();
                $ComparecenciasDto->setActivo("N");
                $ComparecenciasDto->setIdComparecencia($idComparecencia);
                //echo "\nimprime comparecencia DTO antes de delete";
                //var_dump($ComparecenciasDto);
                //echo "\nimprime comparecencia DTO despues de insertar";
                $ComparecenciasDto = $ComparecenciasDao->updateComparecencias($ComparecenciasDto, $proveedor);
                //echo '#########################################';
                //var_dump($ComparecenciasDto);
                $ComparecenciasDtoTmp = $ComparecenciasDto;

                if ($ComparecenciasDto != "") {
                    //echo "\nentra comparecencias diferente de vacio";
                    //var_dump($ComparecenciasDto);
                    $ComparecenciasDto = $ComparecenciasDto[0];

                    $listaComparecentes = json_decode($listaComparecentes, true);
                    $personasComparecenciasDao = new PersonascomparecenciasDAO();

                    foreach ($listaComparecentes as $comparecente) {
                        //echo "\n entra al foreach";
                        $personasComparecenciasDto = new PersonascomparecenciasDTO();
                        $personasComparecenciasDto->setIdPersonacomparecencia($comparecente["idPersonacomparecencia"]);
                        $personasComparecenciasDto->setIdComparecencia($idComparecencia);
                        $personasComparecenciasDto->setActivo("N");
                        $personasComparecenciasDto = $personasComparecenciasDao->updatePersonascomparecencias($personasComparecenciasDto, $proveedor);
                        //echo "imprime insercion de personas comparecencnias";
                        //var_dump($personasComparecenciasDto);
                        if ($personasComparecenciasDto == "") {
                            //echo "\n entra a personas comparecentes vacio";
                            $transaccion = 0;
                            break;
                        }
                    }
                    if ($transaccion == 1) {
                        //echo "\n entra a transaccion == 1";
                        $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                        if ($estatusActuacion == "") {
                            //echo "\n entra a estatus actuacion vacio";
                            $transaccion = 0;
                        }
                    }
                } else {
                    $transaccion = 0;
                    //echo "\n error al insertar la comparecencia";
                    $mensaje = "error al eliminar la comparecencia";
                    error_log("error " . $mensaje . " " . $proveedor->error());
                }
            } else {
                $transaccion = 0;
                $mensaje = "error update";
                //echo "\nerror en update";
            }
            $respuesta = array();
            if ($transaccion == 1) {
                //echo "OK";
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(248); // insercion de oficio / acuerdo
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
                $dtoToJson->toJson("BORRADO LOGICO");
                $bitacoraDTO->setObservaciones($dtoToJson->toJson("BORRADO LOGICO")); //
                $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
                $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
                $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                $proveedor->execute("COMMIT");
                $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se elimino", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                    "numActuacion" => $ActuacionesDto->getNumActuacion(), $ActuacionesDto->getAniActuacion());
                $ActuacionesDto = $ActuacionesDtoTmp;
            } else if ($transaccion == 0) {
                //echo "FAIL";
                $proveedor->execute("ROLLBACK");
                $ActuacionesDto = "";
                $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            }
            //$respuesta = ($respuesta);
            $proveedor->close();
            return $respuesta;
        }
    }

    public function guardarActuacion_Comparecencia($ActuacionesDto, $proveedor = null, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica) {
        error_log("================================================================================================= \n");
        //echo "\nActuacionesController --> function: guardarActuacion_Comparecencia";
        //echo "\n antes de validar";
        //var_dump($ActuacionesDto);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        //echo "\n despues de validar";
        //var_dump($ActuacionesDto);
        $resultadoJSON = array("actuacion" => array(), "comparecencia" => array(), "personas" => array());
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";

        // parametros para contadores
        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion()); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio(date("Y"));
//        $contadoresDto->setCveTipoCarpeta(1);

        if ($ActuacionesDto->getNumActuacion() != "" && $ActuacionesDto->getAniActuacion() != "") {
            //echo '\n numero actuacion';
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($ActuacionesDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($ActuacionesDto->getAniActuacion());
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            $ActuacionesCompDto->setIdReferencia($ActuacionesDto->getIdReferencia());
            $ActuacionesCompDto->setNumero($ActuacionesDto->getNumero());
            $ActuacionesCompDto->setAnio($ActuacionesDto->getAnio());
            $ActuacionesCompDto->setCveTipoCarpeta($ActuacionesDto->getCveTipoCarpeta());
            $ActuacionesCompDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ActuacionesCompDto->setSintesis(htmlspecialchars($ActuacionesDto->getSintesis()));
            $ActuacionesCompDto->setObservaciones(htmlspecialchars($ActuacionesDto->getObservaciones()));
            $ActuacionesCompDto->setCveUsuario($ActuacionesDto->getCveUsuario());
            $ActuacionesCompDto->setActivo("S");
            //$ActuacionesCompDto->setFechaRegistro("now()");
            //$ActuacionesCompDto->setFechaActualizacion("now()");
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);

            if ($existe != "") {
                //echo "\n existe el registro, seleccionar contador automatico";
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
            } else {
                //echo "\nNo existe  el registro, buscar el ultimo contador";
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);

                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $ActuacionesDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $ActuacionesDto->getNumActuacion()) {
                        //echo "\nEl numero excede al contador actual de promociones";
                        error_log("El numero excede al contador actual de promociones");
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
            //echo "\nAsignar contador";
            error_log("Asignar contador");
        }

        if ($asignaContador == true) {
            //echo "\nentra a asignar contador == true";
            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            if ($contadoresDto == "") {
                $transaccion = 0;
                error_log("error =>" . $proveedor->error());
            }
        }

        if ($contadoresDto != "" && $transaccion == 1) {
            //echo "\nentra a contador != transaccion == 1";
            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            error_log(print_r($ActuacionesDto, true));
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
            //echo "\nImpime actuacionesDTO";
            //var_dump($ActuacionesDto);
            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                //echo "\n entra a actuacion DTO != vacio";
                $ActuacionesDto = $ActuacionesDto[0];
                $ComparecenciasDto = new ComparecenciasDTO();
                $ComparecenciasDao = new ComparecenciasDAO();
                $ComparecenciasDto->setIdActuacion($ActuacionesDto->getIdActuacion());
                $ComparecenciasDto->setNumEmpleadoFePublica($numEmpleadoFePublica);
                $ComparecenciasDto->setActivo("S");
                $ComparecenciasDto->setLugarComparecencia(utf8_decode($lugarComparecencia));
                $ComparecenciasDto->setHoraComparecencia($horaComparecencia);
                $ComparecenciasDto->setNombre($nombrePersonaFePublica);

                //echo "\nimprime comparecencia DTO antes de insertar";
                //var_dump($ComparecenciasDto);
                //echo "\nimprime comparecencia DTO despues de insertar";
                $ComparecenciasDto = $ComparecenciasDao->insertComparecencias($ComparecenciasDto, $proveedor);
                //echo '#########################################';
//                print_r($ComparecenciasDto);
                $ComparecenciasDtoTmp = $ComparecenciasDto;

                if ($ComparecenciasDto != "") {
//                    echo "\nentra comparecencias diferente de vacio";
                    //var_dump($ComparecenciasDto);
                    $ComparecenciasDto = $ComparecenciasDto[0];

                    $listaComparecentes = json_decode($listaComparecentes, true);
                    $personasComparecenciasDao = new PersonascomparecenciasDAO();
//                    print_r($listaComparecentes);
                    foreach ($listaComparecentes as $comparecente) {
//                        echo "\n entra al foreach";
                        $personasComparecenciasDto = new PersonascomparecenciasDTO();

                        $personasComparecenciasDto->setIdComparecencia($ComparecenciasDto->getIdComparecencia());
                        $personasComparecenciasDto->setCveTipoParte($comparecente['cveTipoParte']);
                        $personasComparecenciasDto->setCveTipoPersona($comparecente['cveTipoPersona']);
                        $personasComparecenciasDto->setCveGenero($comparecente['cveGenero']);
                        $personasComparecenciasDto->setActivo($comparecente['activo']);
                        if ($comparecente['cveTipoPersona'] == 1) {
                            $personasComparecenciasDto->setMaterno(htmlspecialchars($comparecente['materno']));
                            $personasComparecenciasDto->setPaterno(htmlspecialchars($comparecente['paterno']));
                            $personasComparecenciasDto->setNombre(htmlspecialchars($comparecente['nombre']));
                            //$personasComparecenciasDto->setFechaActualizacion("now()");
                            //$personasComparecenciasDto->setFechaRegistro("now()");
                            //echo "\n entra a comparecente tipo persona 1";
                        } elseif ($comparecente["cveTipoPersona"] == 2 || $comparecente["cveTipoPersona"] == 3) {
                            $personasComparecenciasDto->setNombrePersonaMoral(htmlspecialchars($comparecente['nombre']));
                            //echo "\n entra a comparecente tipo persona 2 3";
                        }
                        //echo "imprime persona comparecencias DTO";
                        //var_dump($personasComparecenciasDto);
                        $personasComparecenciasDto = $personasComparecenciasDao->insertPersonascomparecencias($personasComparecenciasDto, $proveedor);
//                        print_r($personasComparecenciasDto);
                        //echo "imprime insercion de personas comparecencnias";
                        //var_dump($personasComparecenciasDto);
                        array_push($resultadoJSON['personas'], $personasComparecenciasDto);
                        if ($personasComparecenciasDto == "") {
                            //echo "\n entra a personas comparecentes vacio";
                            $transaccion = 0;
                            break;
                        }
                    }
                    if ($transaccion == 1) {
                        //echo "\n entra a transaccion == 1";
                        $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 30, $proveedor);
                        if ($estatusActuacion == "") {
                            //echo "\n entra a estatus actuacion vacio";
                            $transaccion = 0;
                        }
                    }
                    array_push($resultadoJSON['comparecencia'], $ComparecenciasDto);
                } else {
                    $transaccion = 0;
                    echo "\n error al insertar la comparecencia";
                    $mensaje = "error al insertar la comparecencia";
                    error_log("error " . $mensaje . " " . $proveedor->error());
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en contadores";
                //echo "\nerror en contadores";
            }
            $respuesta = array();
            if ($transaccion == 1) {
                array_push($resultadoJSON['actuacion'], $ActuacionesDto);
                //var_dump($resultadoJSON);
                $bitacoraDTO = new BitacoramovimientosDTO();
                $bitacoraCtrl = new BitacoramovimientosController();
                $bitacoraDTO->setCveAccion(245); // insercion de oficio / acuerdo
                $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
                //$dtoToJson = new DtoToJson($ActuacionesDto);
                //$dtoToJson->toJson("INSERTAR");
                //$bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERTAR")); //
                //$bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
                //$bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
                //$bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
                //$bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);
                //echo "OK";
                $proveedor->execute("COMMIT");
                $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la comparecencia", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                    "numActuacion" => $ActuacionesDto->getNumActuacion(), $ActuacionesDto->getAniActuacion());
                $ActuacionesDto = $ActuacionesDtoTmp;
            } else if ($transaccion == 0) {
                //echo "FAIL";
                $proveedor->execute("ROLLBACK");
                $ActuacionesDto = "";
                $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            }
            $respuesta = json_encode($respuesta);
            $proveedor->close();
            return $ActuacionesDto;
        }
    }

    public function guardarActuacion_PromocionServer($ActuacionesDto, $proveedor = null, $listaPromoventes) {
        error_log("================================================================================================= \n");
//echo 'guardarActuacion_Promocion';
        error_log("proveedor " . gettype($proveedor));
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);
        $mensaje = "";


        // parametros para contadores
        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion(1); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio($partes_fecha[0]);
//        $contadoresDto->setCveTipoCarpeta(1);

        if ($ActuacionesDto->getNumActuacion() != "" && $ActuacionesDto->getAniActuacion() != "") {
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($ActuacionesDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($ActuacionesDto->getAniActuacion());
            $ActuacionesCompDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ActuacionesCompDto->setActivo("S");
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            error_log("consultamos actuaciones");

            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);

            if ($existe != "") {
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
            } else {
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);

                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $ActuacionesDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $ActuacionesDto->getNumActuacion()) {
                        error_log("El numero excede al contador actual de promociones");
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
        }


        if ($asignaContador == true) {


            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
        }


        if ($contadoresDto != "" && $transaccion == 1) {

            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($ActuacionesDto[0]->getCveJuzgado());
            $juzgado = $juzgadosDao->selectJuzgados($juzgadosDto);

            $ActuacionesDto[0]->setCveJuzgado($juzgado[0]->getDesJuzgado());
            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                $ActuacionesDto = $ActuacionesDto[0];
                $listaPromoventes = json_decode($listaPromoventes, true);

                $promoventesActuacionesDao = new PromoventesactuacionesDAO();

                foreach ($listaPromoventes as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes" . $proveedor->error());
                        break;
                    }
                }
                if ($transaccion == 1) {
                    $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                    if ($estatusActuacion == "") {
                        $transaccion = 0;
                        error_log("error en estatus actuaciones");
                    }
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en al insertar la promocion";
            }
        } else {
            $transaccion = 0;
            $mensaje = "error en contadores";
            error_log($mensaje);
        }






        $respuesta = array();
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION PROMOCION NORMAL")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil($_SESSION["cvePerfil"]); // variable de session

            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO, $proveedor);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                "numActuacion" => $ActuacionesDto->getNumActuacion(), "aniActuacion" => $ActuacionesDto->getAniActuacion());
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            error_log($mensaje);
        }
        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function guardarActuacion_PromocionterminoServer($ActuacionesDto, $proveedor = null, $listaPromoventes) {
        error_log("================================================================================================= \n");
//echo 'guardarActuacion_Promocion';
        error_log("proveedor " . gettype($proveedor));
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);
        $mensaje = "";


        // parametros para contadores
        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion(1); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio($partes_fecha[0]);
//        $contadoresDto->setCveTipoCarpeta(1);

        if ($ActuacionesDto->getNumActuacion() != "" && $ActuacionesDto->getAniActuacion() != "") {
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($ActuacionesDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($ActuacionesDto->getAniActuacion());
            $ActuacionesCompDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ActuacionesCompDto->setActivo("S");
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            error_log("consultamos actuaciones");

            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);

            if ($existe != "") {
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
            } else {
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);

                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $ActuacionesDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $ActuacionesDto->getNumActuacion()) {
                        error_log("El numero excede al contador actual de promociones");
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
        }


        if ($asignaContador == true) {


            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
        }


        if ($contadoresDto != "" && $transaccion == 1) {

            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($ActuacionesDto[0]->getCveJuzgado());
            $juzgado = $juzgadosDao->selectJuzgados($juzgadosDto);

            $ActuacionesDto[0]->setCveJuzgado($juzgado[0]->getDesJuzgado());
            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                $ActuacionesDto = $ActuacionesDto[0];
                $listaPromoventes = json_decode($listaPromoventes, true);

                $promoventesActuacionesDao = new PromoventesactuacionesDAO();

                foreach ($listaPromoventes as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes" . $proveedor->error());
                        break;
                    }
                }
                if ($transaccion == 1) {
                    $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                    if ($estatusActuacion == "") {
                        $transaccion = 0;
                        error_log("error en estatus actuaciones");
                    }
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en al insertar la promocion";
            }
        } else {
            $transaccion = 0;
            $mensaje = "error en contadores";
            error_log($mensaje);
        }






        $respuesta = array();
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(283); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION PROMOCION TERMINO")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil($_SESSION["cvePerfil"]); // variable de session

            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO, $proveedor);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                "numActuacion" => $ActuacionesDto->getNumActuacion(), "aniActuacion" => $ActuacionesDto->getAniActuacion());
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            error_log($mensaje);
        }
        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function guardarActuacion_Promociontermino($ActuacionesDto, $proveedor = null, $listaPromoventes) {
        error_log("================================================================================================= \n");
//echo 'guardarActuacion_Promocion';
        error_log("proveedor " . gettype($proveedor));
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);
        $mensaje = "";


        // parametros para contadores
        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion(1); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio($partes_fecha[0]);
//        $contadoresDto->setCveTipoCarpeta(1);

        if ($ActuacionesDto->getNumActuacion() != "" && $ActuacionesDto->getAniActuacion() != "") {
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($ActuacionesDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($ActuacionesDto->getAniActuacion());
            $ActuacionesCompDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ActuacionesCompDto->setActivo("S");
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            error_log("consultamos actuaciones");

            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);

            if ($existe != "") {
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
            } else {
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);

                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $ActuacionesDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $ActuacionesDto->getNumActuacion()) {
                        error_log("El numero excede al contador actual de promociones");
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
        }


        if ($asignaContador == true) {


            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
            $ActuacionesDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
        }


        if ($contadoresDto != "" && $transaccion == 1) {

            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

            $ActuacionesDtoTmp = $ActuacionesDto;

            if ($ActuacionesDto != "") {
                $ActuacionesDto = $ActuacionesDto[0];
                $listaPromoventes = json_decode($listaPromoventes, true);

                $promoventesActuacionesDao = new PromoventesactuacionesDAO();

                foreach ($listaPromoventes as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes" . $proveedor->error());
                        break;
                    }
                }
                if ($transaccion == 1) {
                    $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                    if ($estatusActuacion == "") {
                        $transaccion = 0;
                        error_log("error en estatus actuaciones");
                    }
                }
            } else {
                $transaccion = 0;
                $mensaje = "error en al insertar la promocion";
            }
        } else {
            $transaccion = 0;
            $mensaje = "error en contadores";
            error_log($mensaje);
        }






        $respuesta = array();
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(283); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION PROMOCION TERMINO")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil($_SESSION["cvePerfil"]); // variable de session

            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO, $proveedor);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                "numActuacion" => $ActuacionesDto->getNumActuacion(), "aniActuacion" => $ActuacionesDto->getAniActuacion());
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
            error_log($mensaje);
        }
        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function consultarPromocion_Termino($promocionesTerminoDto = "", $param = null) {


        $ActuacionesDao = new ActuacionesDAO();
        $promoventesActuacionesDao = new PromoventesactuacionesDAO();
        $promoventesActuacionesDto = new PromoventesactuacionesDTO();
        if ($promocionesTerminoDto->getCveTipoCarpeta() == 0) {
            $promocionesTerminoDto->setCveTipoCarpeta("");
        }
        if ($promocionesTerminoDto->getCveJuzgado() == 0) {
            $promocionesTerminoDto->setCveJuzgado("");
        }
//        $validacion = new Validacion();
        $promocionesTerminoDto->setActivo("S");
        error_log(print_r($param, true));

        $numTot = "0";
        $totPages = "0";
        if ($param["pag"] == 1) {
            $validacion = new Validacion();

            $fechaDesde = $validacion->normalToMysql($param["fechaDesde"]);
            $fechaHasta = $validacion->normalToMysql($param["fechaHasta"]);

            $fechas = "";
            if ($fechaDesde != "" && $fechaHasta != "") {
                $fechas = " AND fechaRegistro>='" . $fechaDesde . "' AND fechaRegistro<='" . $fechaHasta . "'";
            }

            $numTot = $ActuacionesDao->selectActuaciones($promocionesTerminoDto, null, $fechas, null, " count(idActuacion) as totalCount ");
            if ($numTot == "") {
                error_log(print_r($numTot, true) . " ");
            }
            $Pages = (int) $numTot[0] / $param["cantxPag"];
            $restoPages = $numTot[0] % $param["cantxPag"];
//            error_log("resto paginas => ".$restoPages);
//            error_log(" paginas => ".$Pages);
            $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        } else {
            error_log("no cuenta");
        }
//        public function selectActuaciones($promocionesTerminoDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $promocionesTerminoDto = $ActuacionesDao->selectActuaciones($promocionesTerminoDto, null, "ORDER BY fechaRegistro DESC", $param, null);
        error_log(print_r($promocionesTerminoDto, true));

        $datos = "";
        if ($promocionesTerminoDto != "") {
            $datos = array("estatus" => "ok", "mensaje" => "Resultados", "datos" => array());
            $tiposCarpetasDao = new TiposcarpetasDAO();
            $tiposCarpetasDto = new TiposcarpetasDTO();

            $tiposCarpetasDto->getActivo("S");
            $tiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);

            $generosController = new GenerosController();
            $GenerosDto = new GenerosDTO();
            $GenerosDto->setActivo("S");

            $tiposPersonasController = new TipospersonasController();
            $TipospersonasDto = new TipospersonasDTO();
            $TipospersonasDto->setActivo("S");
            $listaGeneros = $generosController->selectGeneros($GenerosDto);
            $listaTiposPersonas = $tiposPersonasController->selectTipospersonas($TipospersonasDto);
            $listaUsuarios = "";
            error_log("===================================================");
            foreach ($promocionesTerminoDto as $actuacion) {
                error_log(print_r($actuacion, true));
                $listaUsuarios.=$actuacion->getCveUsuario() . ",";
            }
            $usuarios = "";
            if ($listaUsuarios != "") {
                $listaUsuarios = trim($listaUsuarios, ",");
                error_log("lista usuarios => " . $listaUsuarios);
                $usuarioCliente = new UsuarioCliente();
                $usuarios = $usuarioCliente->selectUsuarios_In($listaUsuarios);
                $usuarios = json_decode($usuarios, true);
            }
            foreach ($promocionesTerminoDto as $actuacion) {
                $promoventesActuacionesDto->setIdActuacion($actuacion->getIdActuacion());
                $promoventesActuaciones = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);
                $listPromovente = array();
                if ($promoventesActuaciones != "") {
                    foreach ($promoventesActuaciones as $promovente) {
                        $descGenero = "";
                        foreach ($listaGeneros as $genero) {
                            if ($promovente->getCveGenero() == $genero->getCveGenero()) {
                                $descGenero = $genero->getDesGenero();
                                break;
                            }
                        }
                        $desTipoPersona = "";
                        foreach ($listaTiposPersonas as $tipoPersona) {
                            if ($tipoPersona->getCveTipoPersona() == $promovente->getCveTipoPersona()) {
                                $desTipoPersona = $tipoPersona->getDesTipoPersona();
                                break;
                            }
                        }
                        $prom = array("idPromoventeActuacion" => $promovente->getIdPromoventeActuacion(),
                            "cveTipoParte" => $promovente->getCveTipoParte(),
                            "cveTipoPersona" => $promovente->getCveTipoPersona(),
                            "descTipoPersona" => $desTipoPersona,
                            "nombre" => utf8_encode(utf8_decode($promovente->getNombre())),
                            "paterno" => utf8_encode(utf8_decode($promovente->getPaterno())),
                            "materno" => utf8_encode(utf8_decode($promovente->getMaterno())),
                            "nombrePersonaMoral" => utf8_encode(utf8_decode($promovente->getNombrePersonaMoral())),
//                          
//                            "nombre" => $promovente->getNombre(),
//                            "paterno" => $promovente->getPaterno(),
//                            "materno" => $promovente->getMaterno(),
//                            "nombrePersonaMoral" => $promovente->getNombrePersonaMoral(),
                            "cveGenero" => $promovente->getCveGenero(),
                            "descGenero" => $descGenero
                        );
                        array_push($listPromovente, $prom);
                    }
                }
                $descCarpeta = "";
                foreach ($tiposCarpetas as $tipoCarpeta) {
                    if ($tipoCarpeta->getCveTipoCarpeta() == $actuacion->getCveTipoCarpeta()) {
                        $descCarpeta = $tipoCarpeta->getDesTipoCarpeta();
                        break;
                    }
                }
                $nombrePerCaptura = "";
                if ($usuarios != "") {
                    foreach ($usuarios["data"] as $usuario) {
                        $nombrePerCaptura = $usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"];
                    }
                }

                $JuzgadosDao = new juzgadosDAO();
                $JuzgadosDto = new juzgadosDTO();
                $JuzgadosDto->getActivo("S");
                $JuzgadosDto->setCveJuzgado($actuacion->getCveJuzgado());
                $descJuzgados = $JuzgadosDao->selectJuzgados($JuzgadosDto);
//                print_r($descJuzgados);
                if ($descJuzgados == "") {
                    return "Error al obtener Juzgados";
                } else {
                    foreach ($descJuzgados as $juzgado) {
                        $desJuzgado = $juzgado->getDesJuzgado();
                    }
                }

//                $variableObservaciones = utf8_decode($actuacion->getObservaciones());
                $dato = array("idActuacion" => $actuacion->getIdActuacion(),
                    "numActuacion" => $actuacion->getNumActuacion(),
                    "aniActuacion" => $actuacion->getAniActuacion(),
                    "cveTipoCarpeta" => $actuacion->getCveTipoCarpeta(),
                    "descTipoCarpeta" => $descCarpeta,
                    "cveJuzgado" => $actuacion->getCveJuzgado(),
                    "descJuzgado" => $desJuzgado,
                    "numero" => $actuacion->getNumero(),
                    "anio" => $actuacion->getAnio(),
                    "idReferencia" => $actuacion->getIdReferencia(),
                    "fojas" => $actuacion->getNoFojas(),
                    "sintesis" => $actuacion->getSintesis(),
                    "observaciones" => $actuacion->getObservaciones(),
                    "fechaRegistro" => $actuacion->getFechaRegistro(),
                    "nombrePerCaptura" => utf8_encode($nombrePerCaptura),
                    "promoventes" => $listPromovente);
                array_push($datos["datos"], $dato);
            }
//            $dtoToJson = new DtoToJson($promocionesTerminoDto);
//            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            ($datos["totalCount"] = $numTot[0]);
            ($datos["total"] = $totPages);
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
//        print_r($datos);
        return $datos;
    }

    public function actualizarActuacion_Promociontermino($ActuacionesDto, $proveedor, $listaPromoventes) {
//echo 'guardarActuacion_Promocion';
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);

        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $mensaje = "";
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        //== evitar que el contador del la promocion se modifique
        $ActuacionesDto->setNumActuacion("");
        $ActuacionesDto->setAniActuacion("");


        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
        $ActuacionesDtoTmp = $ActuacionesDto;
        if ($ActuacionesDto != "") {
            $ActuacionesDto = $ActuacionesDto[0];
            $listaPromoventes = json_decode($listaPromoventes, true);

            $promoventesActuacionesDao = new PromoventesactuacionesDAO();
            $promoventesActuacionesDto = new PromoventesactuacionesDTO();
            $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getIdActuacion());
            $promoventes = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);

            foreach ($listaPromoventes as $promovente) {
                if ($promovente["idPromoventeActuacion"] == 0) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes");
                        break;
                    }
                }
            }


            error_log(print_r($promoventes, true));
            foreach ($promoventes as $otherPromovente) {
                $encontrado = false;
                foreach ($listaPromoventes as $promovente) {
                    if ($otherPromovente->getIdPromoventeActuacion() == $promovente["idPromoventeActuacion"]) {
                        $encontrado = true;
                        $promoventesActuacionesDto = new PromoventesactuacionesDTO();
                        //$promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                        $promoventesActuacionesDto->setCveTipoParte("5");
                        $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                        $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                        $promoventesActuacionesDto->setIdPromoventeActuacion($promovente["idPromoventeActuacion"]);
                        if ($promovente["cveTipoPersona"] == 1) {
                            $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                            $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                            $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                        } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                            $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                        }
                        $promoventesActuaciones = $promoventesActuacionesDao->updatePromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                        if ($promoventesActuaciones == "") {
                            $transaccion = 0;
                        }
                        break;
                    }
                }
                if (!$encontrado) {
                    $promoventesActuacionesDto->setIdPromoventeActuacion($otherPromovente->getIdPromoventeActuacion());
                    $promoventesActuaciones = $promoventesActuacionesDao->deletePromoventesactuaciones($promoventesActuacionesDto, $proveedor);

                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("no se pudo eliminar el promovente " . $otherPromovente->getIdPromoventeActuacion());
                        break;
                    }
                }
            }
        } else {
            $transaccion = 0;
            echo "error en al insertar la promocion";
        }


        $respuesta = array();
        //error_log("la hora exacta es : " . $proveedor->getfechaActual());
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(284); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("MODIFICACION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("MODIFICACION PROMOCION TERMINO")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil("100"); // variable de session
            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            $proveedor->execute("COMMIT");

            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se actualizo la promocion", "ActuacionesDto" => $ActuacionesDtoTmp);
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
        }
        //$respuesta = json_encode($respuesta);
        $proveedor->close();

        return $respuesta;
    }

    public function guardarActuacion_Promocion($ActuacionesDto, $proveedor = null, $listaPromoventes) {

        error_log("================================================================================================= \n");
        error_log("datos recibidos => " . print_r($ActuacionesDto, true));
//echo 'guardarActuacion_Promocion';
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $asignaContador = false;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";


        // parametros para contadores
        $contadoresDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion()); // tipo de actuacion Oficios // 7-oficios, 2-acuerdos
        $contadoresDto->setAnio(date("Y"));
//        $contadoresDto->setCveTipoCarpeta(1);

        if ($ActuacionesDto->getNumActuacion() != "" && $ActuacionesDto->getAniActuacion() != "") {
            $ActuacionesCompDto = new ActuacionesDTO();
            $ActuacionesCompDto->setNumActuacion($ActuacionesDto->getNumActuacion());
            $ActuacionesCompDto->setAniActuacion($ActuacionesDto->getAniActuacion());
            $ActuacionesCompDto->setCveJuzgado($ActuacionesDto->getCveJuzgado());
            $ActuacionesCompDto->setActivo("S");
            $ActuacionesCompDto->setCveTipoActuacion($ActuacionesDto->getCveTipoActuacion());
            error_log("consultamos actuaciones");

            $existe = $ActuacionesDao->selectActuaciones($ActuacionesCompDto);

            if ($existe != "") {
                error_log("Existe el registro, seleccionar contador automatico");
                $asignaContador = true;
            } else {
                error_log("No existe  el registro, buscar el ultimo contador");
                $contador = $contadorCrl->selectContadores($contadoresDto);

                if ($contador != "") {
                    error_log($contador[0]->getNumero() . "<" . $ActuacionesDto->getNumActuacion());
                    if ($contador[0]->getNumero() < $ActuacionesDto->getNumActuacion()) {
                        error_log("El numero de promoci? excede al contador actual de promociones");
                        $mensaje .= "El numero de promoci&oacute;n  excede al contador actual de promociones";
                        $transaccion = 0;
                    } else {
//                        error_log("El numero no excede  y no es igual al contador actual de promociones");
//                        $transaccion = 0;
//                        $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
//                        $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                    }
                }
            }
        } else {
            $asignaContador = true;
        }


        if ($asignaContador == true) {


            $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
            $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
            $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
        }


        if ($contadoresDto != "" && $transaccion == 1) {



            $ActuacionesDao = new ActuacionesDAO();
            $ActuacionesDto->setActivo("S");
            $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
            $ActuacionesDtoTmp = $ActuacionesDto;
            if ($ActuacionesDto != "") {
                $ActuacionesDto = $ActuacionesDto[0];
                $listaPromoventes = json_decode($listaPromoventes, true);

                $promoventesActuacionesDao = new PromoventesactuacionesDAO();

                foreach ($listaPromoventes as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno($promovente["materno"]);
                        $promoventesActuacionesDto->setPaterno($promovente["paterno"]);
                        $promoventesActuacionesDto->setNombre($promovente["nombre"]);
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral($promovente["nombre"]);
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes" . $proveedor->error());
                        break;
                    }
                }
                if ($transaccion == 1) {
                    $estatusActuacion = $this->obtenerEstatusActuacion($ActuacionesDto, 7, $proveedor);
                    if ($estatusActuacion == "") {
                        $transaccion = 0;
                        error_log("error en estatus actuaciones");
                    }
                }
            } else {
                $transaccion = 0;
                $mensaje .= "error en al insertar la promocion";
            }
        } else {
            $transaccion = 0;
            //$mensaje .= "error en contadores";
            error_log($mensaje);
        }






        $respuesta = array();
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("INSERCION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil($_SESSION["cvePerfil"]); // variable de session

            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO, $proveedor);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "mensaje" => "Se registro la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                "numActuacion" => $ActuacionesDto->getNumActuacion(), "aniActuacion" => $ActuacionesDto->getAniActuacion(), "actuacion" => $ActuacionesDtoTmp);
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "mensaje" => $mensaje, "actuacion" => $ActuacionesDto);
            error_log($mensaje);
        }
//        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $respuesta;
    }

    public function actualizarActuacion_Promocion($ActuacionesDto, $proveedor, $listaPromoventes, $param) {
//echo 'guardarActuacion_Promocion';
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        error_log("datos recibidos => " . print_r($ActuacionesDto, true));
        $ActuacionesDao = new ActuacionesDAO();
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $mensaje = "";
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        //== evitar que el contador del la promocion se modifique
        $ActuacionesDto->setNumActuacion("");
        $ActuacionesDto->setAniActuacion("");

//        $ActuacionesDto->setObservaciones(utf8_decode($ActuacionesDto->getObservaciones()));
//        $ActuacionesDto->setObservaciones(utf8_encode($ActuacionesDto->getObservaciones()));

        error_log("Actuacion antes de insertar =>" . print_r($ActuacionesDto, true));
        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
        $ActuacionesDtoTmp = $ActuacionesDto;
        if ($ActuacionesDto != "") {
            $ActuacionesDto = $ActuacionesDto[0];
            $listaPromoventes = json_decode($listaPromoventes, true);

            $promoventesActuacionesDao = new PromoventesactuacionesDAO();
            $promoventesActuacionesDto = new PromoventesactuacionesDTO();
            $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getIdActuacion());
            $promoventes = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);

            foreach ($listaPromoventes as $promovente) {
                if ($promovente["idPromoventeActuacion"] == 0) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();

                    $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                    $promoventesActuacionesDto->setCveTipoParte("5");
                    $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                    $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                    if ($promovente["cveTipoPersona"] == 1) {
                        $promoventesActuacionesDto->setMaterno(utf8_decode($promovente["materno"]));
                        $promoventesActuacionesDto->setPaterno(utf8_decode($promovente["paterno"]));
                        $promoventesActuacionesDto->setNombre(utf8_decode($promovente["nombre"]));
                    } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                        $promoventesActuacionesDto->setNombrePersonaMoral(utf8_decode($promovente["nombre"]));
                    }
                    $promoventesActuaciones = $promoventesActuacionesDao->insertPromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("error al registrar promoventes");
                        break;
                    }
                }
            }


            error_log(print_r($promoventes, true));
            foreach ($promoventes as $otherPromovente) {
                $encontrado = false;
                foreach ($listaPromoventes as $promovente) {
                    if ($otherPromovente->getIdPromoventeActuacion() == $promovente["idPromoventeActuacion"]) {
                        $encontrado = true;
                        $promoventesActuacionesDto = new PromoventesactuacionesDTO();
                        //$promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getidActuacion());
                        $promoventesActuacionesDto->setCveTipoParte("5");
                        $promoventesActuacionesDto->setCveTipoPersona($promovente["cveTipoPersona"]);
                        $promoventesActuacionesDto->setCveGenero($promovente["cveGenero"]);
                        $promoventesActuacionesDto->setIdPromoventeActuacion($promovente["idPromoventeActuacion"]);
                        if ($promovente["cveTipoPersona"] == 1) {
                            $promoventesActuacionesDto->setMaterno(utf8_decode($promovente["materno"]));
                            $promoventesActuacionesDto->setPaterno(utf8_decode($promovente["paterno"]));
                            $promoventesActuacionesDto->setNombre(utf8_decode($promovente["nombre"]));
                        } else if ($promovente["cveTipoPersona"] == 2 || $promovente["cveTipoPersona"] == 3) {
                            $promoventesActuacionesDto->setNombrePersonaMoral(utf8_decode($promovente["nombre"]));
                        }
                        $promoventesActuaciones = $promoventesActuacionesDao->updatePromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                        if ($promoventesActuaciones == "") {
                            $transaccion = 0;
                        }
                        break;
                    }
                }
                if (!$encontrado) {
                    $promoventesActuacionesDto->setIdPromoventeActuacion($otherPromovente->getIdPromoventeActuacion());
                    $promoventesActuaciones = $promoventesActuacionesDao->deletePromoventesactuaciones($promoventesActuacionesDto, $proveedor);

                    if ($promoventesActuaciones == "") {
                        $transaccion = 0;
                        error_log("no se pudo eliminar el promovente " . $otherPromovente->getIdPromoventeActuacion());
                        break;
                    }
                }
            }
        } else {
            $transaccion = 0;
            echo "error en al insertar la promocion";
        }


        $respuesta = array();
        //error_log("la hora exacta es : " . $proveedor->getfechaActual());
        if ($transaccion == 1) {
            $bitacoraDTO = new BitacoramovimientosDTO();
            $bitacoraCtrl = new BitacoramovimientosController();
            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
            $dtoToJson->toJson("MODIFICACION");
            $bitacoraDTO->setObservaciones($dtoToJson->toJson("MODIFICACION")); //
            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
            $bitacoraDTO->setCvePerfil("100"); // variable de session
            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            $proveedor->execute("COMMIT");

            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se actualizo la promocion", "ActuacionesDto" => $ActuacionesDtoTmp);
            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
        }
        //$respuesta = json_encode($respuesta);
        $proveedor->close();

        return $respuesta;
    }

    public function consultarActuacion_Promocion($actuacionesDto = "", $param = null, $usuario = "") {


        $ActuacionesDao = new ActuacionesDAO();
        $promoventesActuacionesDao = new PromoventesactuacionesDAO();
        $promoventesActuacionesDto = new PromoventesactuacionesDTO();
        if ($actuacionesDto->getCveTipoCarpeta() == 0) {
            $actuacionesDto->setCveTipoCarpeta("");
        }
//        $validacion = new Validacion();
        $actuacionesDto->setActivo("S");
        error_log(print_r($param, true));

        $numTot = "0";
        $totPages = "0";
        error_log(print_r($param, true));
        if ($param["pag"] == 1) {
            $validacion = new Validacion();

            $fechaDesde = $validacion->normalToMysql($param["fechaDesde"]);
            $fechaHasta = $validacion->normalToMysql($param["fechaHasta"]);

            $fechas = "";
            if ($fechaDesde != "" && $fechaHasta != "") {
                $fechas = " AND fechaRegistro>='" . $fechaDesde . " 00:00:00' AND fechaRegistro<='" . $fechaHasta . " 23:59:59'";
            }
            $numTot = $ActuacionesDao->selectActuaciones($actuacionesDto, null, $fechas, null, " count(idActuacion) as totalCount ");
            if ($numTot == "") {
                error_log("Numero Total de registros =>" . print_r($numTot, true) . " ");
            }
            error_log("Numero Total de registros =>" . print_r($numTot, true) . " ");
            $Pages = (int) $numTot[0]["totalCount"] / $param["cantxPag"];
            $numTotal = $numTot[0];
            $restoPages = $numTot[0] % $param["cantxPag"];
            error_log("resto paginas => " . $restoPages);
            error_log(" paginas => " . $Pages);
//            $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
            $totPages = $Pages;
        } else {
            error_log("no cuenta");
        }
//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        error_log("datos recibidos" . print_r($actuacionesDto, true));
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($actuacionesDto, null, "ORDER BY fechaRegistro DESC", $param, null);
        // error_log("La consulta regresa => ".print_r($ActuacionesDto, true));

        $datos = "";
        if ($ActuacionesDto != "") {
            $datos = array("estatus" => "ok", "mensaje" => "Resultados", "datos" => array());
            $tiposCarpetasDao = new TiposcarpetasDAO();
            $tiposCarpetasDto = new TiposcarpetasDTO();


            $tiposCarpetasDto->getActivo("S");
            $tiposCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
            $generosController = new GenerosController();
            $GenerosDto = new GenerosDTO();
            $GenerosDto->setActivo("S");

            $tiposPersonasController = new TipospersonasController();
            $TipospersonasDto = new TipospersonasDTO();
            $TipospersonasDto->setActivo("S");
            $listaGeneros = $generosController->selectGeneros($GenerosDto);
            $listaTiposPersonas = $tiposPersonasController->selectTipospersonas($TipospersonasDto);
            $listaUsuarios = "";
            $DesJuzgado = "";
            $cveJuzgado = "";
            error_log("===================================================");
            if ($usuario != "") {
                error_log("la consulta requiere el nombre del usuario");
                foreach ($ActuacionesDto as $actuacion) {
                    error_log(print_r($actuacion, true));
                    $listaUsuarios.=$actuacion->getCveUsuario() . ",";
                }
                $usuarios = "";
                if ($listaUsuarios != "") {
                    $listaUsuarios = trim($listaUsuarios, ",");
                    error_log("lista usuarios => " . $listaUsuarios);
                    $usuarioCliente = new UsuarioCliente();
                    $usuarios = $usuarioCliente->selectUsuarios_In($listaUsuarios);
                    $usuarios = json_decode($usuarios, true);
                }
            }
            error_log("Recorriendo las actuaciones  ");
            foreach ($ActuacionesDto as $actuacion) {
                if (count($ActuacionesDto) == 1) {
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto->setCveJuzgado($actuacion->getCveJuzgado());
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                    $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                    $cveJuzgado = $JuzgadosDto[0]->getCveJuzgado();
                }
                $tiposActuacionesDAO = new TiposactuacionesDAO();
                $tiposActuacionesDTO = new TiposactuacionesDTO();
                $tiposActuacionesDTO->setCveTipoActuacion($actuacion->getCveTipoActuacion());
                $tiposActuaciones = $tiposActuacionesDAO->selectTiposactuaciones($tiposActuacionesDTO);
//                print_r($tiposActuaciones);
                $desTipoActuacion = $tiposActuaciones[0]->getdesTipoActuacion();

                $promoventesActuacionesDto->setIdActuacion($actuacion->getIdActuacion());
                $promoventesActuaciones = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);
                $listPromovente = array();
                if ($promoventesActuaciones != "") {
                    foreach ($promoventesActuaciones as $promovente) {
                        $descGenero = "";
                        foreach ($listaGeneros as $genero) {
                            if ($promovente->getCveGenero() == $genero->getCveGenero()) {
                                $descGenero = $genero->getDesGenero();
                                break;
                            }
                        }
                        $desTipoPersona = "";
                        foreach ($listaTiposPersonas as $tipoPersona) {
                            if ($tipoPersona->getCveTipoPersona() == $promovente->getCveTipoPersona()) {
                                $desTipoPersona = $tipoPersona->getDesTipoPersona();
                                break;
                            }
                        }
                        $prom = array("idPromoventeActuacion" => $promovente->getIdPromoventeActuacion(),
                            "cveTipoParte" => $promovente->getCveTipoParte(),
                            "cveTipoPersona" => $promovente->getCveTipoPersona(),
                            "descTipoPersona" => $desTipoPersona,
//                        "fojas" => $promovente->getNoFojas(),
                            "nombre" => utf8_encode(utf8_decode($promovente->getNombre())),
                            "paterno" => utf8_encode(utf8_decode($promovente->getPaterno())),
                            "materno" => utf8_encode(utf8_decode($promovente->getMaterno())),
                            "nombrePersonaMoral" => utf8_encode(utf8_decode($promovente->getNombrePersonaMoral())),
                            "cveGenero" => $promovente->getCveGenero(),
                            "descGenero" => $descGenero
                        );
                        error_log(print_r($promovente, true));
                        array_push($listPromovente, $prom);
                    }
                }
                $descCarpeta = "";
                foreach ($tiposCarpetas as $tipoCarpeta) {
                    if ($tipoCarpeta->getCveTipoCarpeta() == $actuacion->getCveTipoCarpeta()) {
                        $descCarpeta = $tipoCarpeta->getDesTipoCarpeta();
                        break;
                    }
                }
                $datosIncompetencia = array();
                $incompetenciaDTO = new IncompetenciasDTO();
                $incompetenciaDAO = new IncompetenciasDAO();
                $incompetenciaDTO->setActivo("S");
                $incompetenciaDTO->setIdActuacion($actuacion->getIdActuacion());
                $Resincompetencia = $incompetenciaDAO->selectIncompetencias($incompetenciaDTO);
                if ($Resincompetencia != "") {
                    foreach ($Resincompetencia as $resinc) {
                        $inc = array(
                            "idIncompetencias" => $resinc->getIdIncompetencias(),
                            "cveTipoIncompetencia" => $resinc->getCveTipoIncompetencia(),
                            "cveJuzgadoOrigen" => $resinc->getCveJuzgadoOrigen(),
                            "cveTipoCarpetaOrigen" => $resinc->getCveTipoCarpetaOrigen(),
                            "numero" => $resinc->getNumero(),
                            "anio" => $resinc->getAnio(),
                            "otroTipoCarpetaOrigen" => $resinc->getOtroTipoCarpetaOrigen(),
                            "otroJuzgadoOrigen" => $resinc->getOtroJuzgadoOrigen(),
                            "activo" => $resinc->getActivo()
                        );
                        array_push($datosIncompetencia, $inc);
                    }
                }

                $nombrePerCaptura = "";
                if ($usuario != "") {
                    if ($usuarios != "") {
                        foreach ($usuarios["data"] as $usuario) {
                            $nombrePerCaptura = utf8_encode($usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"]);
                        }
                    }
                }

                $dato = array("idActuacion" => $actuacion->getIdActuacion(),
                    "numActuacion" => $actuacion->getNumActuacion(),
                    "aniActuacion" => $actuacion->getAniActuacion(),
                    "cveTipoCarpeta" => $actuacion->getCveTipoCarpeta(),
                    "descTipoCarpeta" => $descCarpeta,
                    "desJuzgado" => $DesJuzgado,
                    "cveJuzgado" => $cveJuzgado,
                    "cveTipoActuacion" => $actuacion->getCveTipoActuacion(),
                    "numero" => $actuacion->getNumero(),
                    "anio" => $actuacion->getAnio(),
                    "idReferencia" => $actuacion->getIdReferencia(),
                    "fojas" => $actuacion->getNoFojas(),
                    "sintesis" => json_encode($actuacion->getSintesis()) == "" ? utf8_encode($actuacion->getSintesis()) : $actuacion->getSintesis(),
                    "observaciones" => ($actuacion->getObservaciones()),
                    "fechaRegistro" => $actuacion->getFechaRegistro(),
                    "nombrePerCaptura" => $nombrePerCaptura,
                    "promoventes" => ($listPromovente),
                    "desTipoActuacion" => $desTipoActuacion,
                    "datosIncompetencia" => $datosIncompetencia);
                array_push($datos["datos"], $dato);
            }
//            $dtoToJson = new DtoToJson($ActuacionesDto);
//            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            ($datos["totalCount"] = $numTot[0]);
            ($datos["total"] = ceil($totPages));
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
        error_log("los registros obtenidos" . print_r($datos, true));
        return $datos;
    }

    public function eliminarActuacion_Promocion($ActuacionesDto = "") {
        $transaccion = 1;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        if ($ActuacionesDto != "") {
            $promoventesActuacionesDao = new PromoventesactuacionesDAO();
            $promoventesActuacionesDto = new PromoventesactuacionesDTO();
            $promoventesActuacionesDto->setIdActuacion($ActuacionesDto->getIdActuacion());
            $promoventesActuaciones = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto, "", $proveedor);
            error_log(print_r($promoventesActuaciones, true));
            if ($promoventesActuaciones != "") {
                foreach ($promoventesActuaciones as $promovente) {
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();
                    $promoventesActuacionesDto->setIdPromoventeActuacion($promovente->getIdPromoventeActuacion());
                    $promoventesActuacionesDto->setActivo("N");
//                    $promoventesActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                    $resultado = $promoventesActuacionesDao->updatePromoventesactuaciones($promoventesActuacionesDto, $proveedor);
                    if ($resultado) {
                        error_log("Se elimino el promovente");
                    } else {
                        error_log("No se elimino el promovente");
                        $transaccion = 0;
                        error_log($proveedor->error());
                        break;
                    }
                }
            }
            if ($transaccion == 1) {
                $actuacionesestatusController = new ActuacionesestatusController();
                $ActuacionesestatusDto = new ActuacionesestatusDTO();
                $ActuacionesestatusDto->setIdActuacion($ActuacionesDto->getIdActuacion());
                $actuacionesEstatus = $actuacionesestatusController->selectActuacionesestatus($ActuacionesestatusDto);
                if ($actuacionesEstatus != "") {
                    foreach ($actuacionesEstatus as $actuacionEstatus) {
                        $ActuacionesestatusDto = new ActuacionesestatusDTO();
                        $ActuacionesestatusDto->setIdActuacionesEstatus($actuacionEstatus->getIdActuacionesEstatus());
                        $ActuacionesestatusDto->setActivo("N");
                        $resultado = $actuacionesestatusController->updateActuacionesestatus($ActuacionesestatusDto, $proveedor);
                        if ($resultado) {
                            error_log("Se elimino la actuacion estatus");
                        } else {
                            error_log("No se elimino la acutacion estatus");
                            $transaccion = 0;
                            break;
                        }
                    }
                }
            }
            if ($transaccion == 1) {
                $ActuacionesDao = new ActuacionesDAO();
                $ActuacionesDto->setActivo("N");
                $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                $resultado = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
                if ($resultado) {
                    error_log("Se elimino la promocion");
                } else {
                    error_log("No se elimino la promocion");
                    $transaccion = 0;
                }
            }
        } else {
            $transaccion = 0;
        }
        if ($transaccion == 1) {
//            $bitacoraDTO = new BitacoramovimientosDTO();
//            $bitacoraCtrl = new BitacoramovimientosController();
//            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
//            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
//            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
//            $dtoToJson->toJson("MODIFICACION");
//            $bitacoraDTO->setObservaciones($dtoToJson->toJson("MODIFICACION")); //
//            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
//            $bitacoraDTO->setCvePerfil("100"); // variable de session
//            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
//            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se elimino la promocion", "idActuacion" => $ActuacionesDto->getIdActuacion(),
                "numActuacion" => $ActuacionesDto->getNumActuacion(), $ActuacionesDto->getAniActuacion());
//            $ActuacionesDto = $ActuacionesDtoTmp;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ActuacionesDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => "No se elimino la promocion");
        }
        return $respuesta;
    }

//******************* funciones para formulario de Oficios **********************************//
//*******************************************************************************************//

    /*     * ********************  INICIO DE METODOS PARA AUTOS DE VINCULACION  ******************* */

    /**
     * Obtiene a travEs del webservice la lista de salas disponibles 
     */
    public function getSalas() {
        $juzgados = new JuzgadoCliente();
        return $juzgados->getJuzgadoInstancia('14,17');
    }

    public function guardaAuto($ActuacionesDto, $listaImputados, $apelaciones) {
        $respuesta = '';
        $error = false;
        $errorDesc = '';
        //GUARDA DATOS EN -tblactuaciones-
        //dato fijo por ser Certificacion
        $cveTipoActuacion = $ActuacionesDto->getCveTipoActuacion();
        //definiciOn de variables para obtener los valores del contador
        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtenciOn de nUmero de la tabla contadores
        $proveedor = null;
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor);
        if (isset($numActuacion[0])) {
            $numActuacion = $numActuacion[0]->getNumero();
        } elseif (isset($numActuacion)) {
            $numActuacion = $numActuacion->getNumero();
        }
        //asignaciOn de variables en el DTO de las actuaciones
        $ActuacionesDto->setNumActuacion($numActuacion);
        $ActuacionesDto->setAniActuacion(date("Y"));
        //inserciOn de la ActuaciOn
        $ActuacionesDto = $this->insertActuaciones($ActuacionesDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(80, 'tblactuaciones', 'dto', $ActuacionesDto);
        /*         * ******* INSERCION DE AUTOS IMPUTADOS ******** */
        $idActuacion = $ActuacionesDto[0]->getIdActuacion();
        foreach ($listaImputados as $imputado) {
            $AutosimputadosDTO = new AutosimputadosDTO();
            $AutosimputadosDAO = new AutosimputadosDAO();
            $AutosimputadosDTO->setIdActuacion($idActuacion);
            $AutosimputadosDTO->setIdImputadoCarpeta($imputado['idImputado']);
            $AutosimputadosDTO->setApelacion($imputado['apelacion']);
            $AutosimputadosDTO = $AutosimputadosDAO->insertAutosimputados($AutosimputadosDTO);
            if ($AutosimputadosDTO != '') { //se inserto el imputado
                //guardar en bitacora
                $bitacoraController->agregar(84, 'tblautosimputados', 'dto', $AutosimputadosDTO);
                /*                 * ******* INSERCION DE AUTOS APELADOS ******** */
                if ($imputado['apelacion'] == 'S') {
                    $idAutoImputado = $AutosimputadosDTO[0]->getIdAutoImputado();
                    foreach ($apelaciones as $apelacion) {
                        if ($apelacion['idImputadoCarpeta'] == $imputado['idImputado']) {
                            //inserciOn de la apelaciOn
                            $AutosapeladosDTO = new AutosapeladosDTO();
                            $AutosapeladosDAO = new AutosapeladosDAO();
                            $AutosapeladosDTO->setIdAutoImputado($idAutoImputado);
                            $AutosapeladosDTO->setCveSentido($apelacion['apelacionSentido']);
                            $AutosapeladosDTO->setNumToca($apelacion['apelacionNumero']);
                            $AutosapeladosDTO->setAnioToca($apelacion['apelacionAnio']);
                            $AutosapeladosDTO->setCveSala($apelacion['apelacionSala']);
                            $AutosapeladosDTO = $AutosapeladosDAO->insertAutosapelados($AutosapeladosDTO);
                            if (is_array($AutosapeladosDTO)) { //se realizO la insercion de la apelacion
                                //guardar en bitacora
                                $bitacoraController->agregar(88, 'tblautosapelados', 'dto', $AutosapeladosDTO);
                            } else {
                                $error = true;
                                $errorDesc = 'No se inserto la apelacion';
                                //guardar en bitacora
                                $bitacoraController->agregar(88, 'tblautosapelados', 'txt', $errorDesc);
                            }
                        } else { //fin validacion del imputado con apelacion
                            $errorDesc = 'imputado sin apelacion';
                        }
                    }//fin del recorrido del array de apelaciones
                } else {// fin de la validacion del imputado con apelacion
                    $errorDesc = 'no tiene apelacion';
                }
            } else {//fin de la insercion del Auto
                $error = true;
                $errorDesc = 'No se inserto el imputado';
                //guardar en bitacora
                $bitacoraController->agregar(84, 'tblautosimputados', 'txt', $errorDesc);
            }
        }//fin foreach del array de imputados
        /*        if($error){
          $respuesta = '{"totalCount":"0","text":"OCURRIO UN ERROR AL REALIZAR EL REGISTRO - AUTO"}';
          }else{
          $dtoToJson = new DtoToJson($ActuacionesDto);
          $respuesta = $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - AUTO");
          }
         */
        if ($error) {
            $ActuacionesDto = '';
        }
        return $ActuacionesDto;
    }

    public function actualizaAuto($ActuacionesDto, $listaImputados, $apelaciones) {
        $proveedor = null;
        //Id de la actuacion
        $idActuacion = $ActuacionesDto->getIdActuacion();
        //obtencion de los datos previos
        $tmpActuacionesDto = new ActuacionesDTO();
        $tmpActuacionesDao = new ActuacionesDAO();
        $tmpActuacionesDto->setIdActuacion($idActuacion);
        $tmpActuacionesDto = $tmpActuacionesDao->selectActuaciones($tmpActuacionesDto);
        //asigna fecha de actualizacion
        $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        //ActualizaciOn de la ActuaciOn
        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(81, 'tblactuaciones', 'dto', $ActuacionesDto, $tmpActuacionesDto);
        /*         * ******* ELIMINACION DE AUTOS APELADOS ******** */
        /*         * ****** Obtencion de los IDs de los imputados **** */
        $idActuacion = $ActuacionesDto[0]->getIdActuacion();
        $tmpAutosimputadosDTO = new AutosimputadosDTO();
        $AutosimputadosDTO = new AutosimputadosDTO();
        $AutosimputadosDAO = new AutosimputadosDAO();
        $AutosimputadosDTO->setIdActuacion($idActuacion);
        $AutosimputadosDTO = $AutosimputadosDAO->selectAutosimputados($AutosimputadosDTO);
        //no se hace validacion del DTO ya que siempre debe de tener al menos un imputado relacionado
        //eliminación logica de las apelaciones y los imputados
        foreach ($AutosimputadosDTO as $Autosimputados) {
            $idAutoImputado = $Autosimputados->getIdAutoImputado();
            //eliminacion de la apelacion
            $AutosapeladosDTO = new AutosapeladosDTO();
            $AutosapeladosDAO = new AutosapeladosDAO();
            $AutosapeladosDTO->setIdAutoImputado($idAutoImputado);
            $AutosapeladosDTO = $AutosapeladosDAO->selectAutosapelados($AutosapeladosDTO);
            if ($AutosapeladosDTO != '') {
                $AutosapeladosDTO[0]->setActivo('N');
                $AutosapeladosDTO = $AutosapeladosDAO->updateAutosapelados($AutosapeladosDTO[0], $proveedor);
                if ($AutosapeladosDTO != '') { //se actualizó a 'N' la apelación
                    $bitacoraController->agregar(91, 'tblautosapelados', 'dto', $AutosapeladosDTO, '', $proveedor);
                } else {
                    // no existe apelacion relacionada al imputado
                }
            }
            $bitacoraController->agregar(87, 'tblautosimputados', 'dto', $Autosimputados);
            //eliminacion del imputado
            $tmpAutosimputadosDTO = new AutosimputadosDTO();
            $tmpAutosimputadosDAO = new AutosimputadosDAO();
            $tmpAutosimputadosDTO->setIdAutoImputado($idAutoImputado);
            $tmpAutosimputadosDTO = $tmpAutosimputadosDAO->selectAutosimputados($tmpAutosimputadosDTO);
            if ($tmpAutosimputadosDTO != '') {
                $tmpAutosimputadosDTO[0]->setActivo('N');
                $tmpAutosimputadosDTO[0]->setApelacion('N');
                $tmpAutosimputadosDTO = $tmpAutosimputadosDAO->updateAutosimputados($tmpAutosimputadosDTO[0], $proveedor);
            }
        }
        //insercion o actualizacion de los nuevos datos
        foreach ($listaImputados as $imputado) {
            //busqueda de posible registro previo
            $AutosimputadosDTO = new AutosimputadosDTO();
            $AutosimputadosDTO2 = new AutosimputadosDTO();
            $AutosimputadosDAO = new AutosimputadosDAO();
            $AutosimputadosDTO->setIdActuacion($idActuacion);
            $AutosimputadosDTO->setIdImputadoCarpeta($imputado['idImputado']);
            $AutosimputadosDTO = $AutosimputadosDAO->selectAutosimputados($AutosimputadosDTO, '', $proveedor);
            $DTOresultado = '';
            if ($AutosimputadosDTO != '') { //el registro existe, se actualiza
                $AutosimputadosDTO[0]->setActivo('S');
                $AutosimputadosDTO[0]->setApelacion($imputado['apelacion']);
                $AutosimputadosDTO = $AutosimputadosDAO->updateAutosimputados($AutosimputadosDTO[0], $proveedor);
                $DTOresultado = $AutosimputadosDTO;
            } else { //no existe registro previo, se inserta
                $AutosimputadosDTO2->setIdActuacion($idActuacion);
                $AutosimputadosDTO2->setIdImputadoCarpeta($imputado['idImputado']);
                $AutosimputadosDTO2->setApelacion($imputado['apelacion']);
                $AutosimputadosDTO2->setActivo('S');
                $AutosimputadosDTO2 = $AutosimputadosDAO->insertAutosimputados($AutosimputadosDTO2);
                $DTOresultado = $AutosimputadosDTO2;
            }
            if ($DTOresultado != '') { //se inserto o actualizo
                //bitacora
                $bitacoraController->agregar(84, 'tblautosimputados', 'dto', $DTOresultado);
                //insercion/actualizacion de la apelacion
                if ($imputado['apelacion'] == 'S') {
                    $idAutoImputado = $DTOresultado[0]->getIdAutoImputado();
                    foreach ($apelaciones as $apelacion) {
                        if ($apelacion['idImputadoCarpeta'] == $imputado['idImputado']) {
                            //busca si existe un registro previo
                            $AutosapeladosDTO = new AutosapeladosDTO();
                            $AutosapeladosDTO2 = new AutosapeladosDTO();
                            $AutosapeladosDAO = new AutosapeladosDAO();
                            $AutosapeladosDTO->setIdAutoImputado($idAutoImputado);
                            $AutosapeladosDTO->setActivo('N');
                            $AutosapeladosDTO = $AutosapeladosDAO->selectAutosapelados($AutosapeladosDTO, '', $proveedor);
                            $DTOresultadoApelacion = '';
                            if ($AutosapeladosDTO != '') { //ya existe el registro, se actualiza
                                $AutosapeladosDTO[0]->setCveSentido($apelacion['apelacionSentido']);
                                $AutosapeladosDTO[0]->setNumToca($apelacion['apelacionNumero']);
                                $AutosapeladosDTO[0]->setAnioToca($apelacion['apelacionAnio']);
                                $AutosapeladosDTO[0]->setCveSala($apelacion['apelacionSala']);
                                $AutosapeladosDTO[0]->setActivo('S');
                                $AutosapeladosDTO[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
                                $AutosapeladosDTO = $AutosapeladosDAO->updateAutosapelados($AutosapeladosDTO[0], $proveedor);
                                $DTOresultadoApelacion = $AutosapeladosDTO;
                            } else { //no existe el registro, se inserta
                                $AutosapeladosDTO2->setIdAutoImputado($idAutoImputado);
                                $AutosapeladosDTO2->setCveSentido($apelacion['apelacionSentido']);
                                $AutosapeladosDTO2->setNumToca($apelacion['apelacionNumero']);
                                $AutosapeladosDTO2->setAnioToca($apelacion['apelacionAnio']);
                                $AutosapeladosDTO2->setCveSala($apelacion['apelacionSala']);
                                $AutosapeladosDTO2 = $AutosapeladosDAO->insertAutosapelados($AutosapeladosDTO2);
                                $DTOresultadoApelacion = $AutosapeladosDTO2;
                            }
                            if ($DTOresultadoApelacion != '') { //se realizO la actualizacion/insercion de la apelacion
                                //guardar en bitacora
                                $bitacoraController->agregar(88, 'tblautosapelados', 'dto', $DTOresultadoApelacion);
                            } else {
                                $error = true;
                                $errorDesc = 'No se inserto la apelacion';
                                //guardar en bitacora
                                $bitacoraController->agregar(88, 'tblautosapelados', 'txt', $errorDesc);
                            }
                        }
                    }//fin del recorrido del array de apelaciones
                }
            } else { //no se inserto o actualizo
                //bitacora
            }

            /*            $AutosimputadosDTO->setIdActuacion($idActuacion);
              $AutosimputadosDTO->setIdImputadoCarpeta($imputado['idImputado']);
              $AutosimputadosDTO->setApelacion($imputado['apelacion']);
              $AutosimputadosDTO = $AutosimputadosDAO->insertAutosimputados($AutosimputadosDTO);
              if (is_array($AutosimputadosDTO)) { //se inserto el imputado
              //guardar en bitacora

              } else {//fin de la insercion del Auto
              $error = true;
              $errorDesc = 'No se inserto el imputado';
              //guardar en bitacora
              $bitacoraController->agregar(84, 'tblautosimputados', 'txt', $errorDesc);
              } */
        }//fin foreach del array de imputados

        return $ActuacionesDto;
    }

    public function borraAuto($ActuacionesDto) {
        $proveedor = null;
        //asigna fecha de actualizacion
        $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        //Borrado lOgico de la ActuaciOn
        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(82, 'tblactuaciones', 'dto', $ActuacionesDto);
        return $ActuacionesDto;
    }

    public function buscarAutos($ActuacionesDto, $param) {
        //obtiene los datos de la actuacion
        $proveedor = null;
        $json = '';
        //obtencion de las actuaciones. obtiene 1 solo registro
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto->setCveJuzgado(explode('/', $ActuacionesDto->getCveJuzgado())[0]);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, '', $param);
        $totalRows = count($ActuacionesDto);
        $counter = 0;
        $content = false;
        //recorre los registros en busca de certificaciones
        if ($ActuacionesDto != '') {
            error_log('**************contiene actuacion');
            foreach ($ActuacionesDto as $Actuaciones) {
                //obtencion de los imputados desde -imputados carpetas-
                $ImputadosCarpetasDTO = new ImputadosCarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadosCarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($Actuaciones->getIdReferencia());
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO, '', $proveedor);
                $imputados = '';
                $nombre = '';
                if ($ImputadosCarpetasDTO != '') {
                    error_log('**************contiene imputados carpetas');
                    foreach ($ImputadosCarpetasDTO as $ImputadoCarpeta) {
                        if ($ImputadoCarpeta->getCveTipoPersona() == 1) { //es persona fisica
                            error_log('************** es fisica');
                            $nombre = utf8_encode($ImputadoCarpeta->getPaterno()) . ' ' . utf8_encode($ImputadoCarpeta->getMaterno()) . ' ' . utf8_encode($ImputadoCarpeta->getNombre());
                        } else { //es persona moral u otra
                            error_log('************** es moral');
                            $nombre = utf8_encode($ImputadoCarpeta->getNombreMoral());
                        }
                        $imputados[] = array('idImputado' => $ImputadoCarpeta->getIdImputadoCarpeta(), 'nombre' => $nombre);
                    }
                }
                //El ID de actuaciOn de cada registro se valida en la tabla -tblautosimputados-
                $idActuacion = $Actuaciones->getIdActuacion();
                $AutosimputadosDto = new AutosimputadosDTO();
                $AutosimputadosDao = new AutosimputadosDAO();
                $AutosimputadosDto->setIdActuacion($idActuacion);
                $AutosimputadosDto->setActivo('S');
                $AutosimputadosDto = $AutosimputadosDao->selectAutosimputados($AutosimputadosDto, $proveedor);
                //si la consulta de -tblautosimputados- trae informaciOn y la fecha de registro esta dentro de los parametros asignados
                if ($AutosimputadosDto != '') {
                    error_log('************** tiene imputados asignados');
                    //obtiene la descripcion del TipoCarpeta
                    $TipoCarpetaDTO = new TiposcarpetasDTO();
                    $TipoCarpetaDAO = new TiposcarpetasDAO();
                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
                    if ($TipoCarpetaDTO != '') {
                        error_log('**************obtiene los tipos de carpetas');
                        $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();
                        $content = true;
                    }
                    //validacion de vinculaciOn con la tabla -tblautosimputados-
                    $jsonImp = '';
                    if ($AutosimputadosDto != '') {
                        foreach ($AutosimputadosDto as $AutoImputado) {
                            $taa_idAutoApelado = 0;
                            $taa_idAutoImputado = 0;
                            $taa_cveSentido = 0;
                            $taa_numToca = '';
                            $taa_numAnio = '';
                            $taa_cveSala = 0;
                            $taa_fechaRegistro = '';
                            $taa_fechaActualizacion = '';
                            if ($AutoImputado->getApelacion() == 'S') {
                                //obtiene los datos de la apelacion en -tblautosapelados-
                                $AutosapeladosDTO = new AutosapeladosDTO();
                                $AutosapeladosDAO = new AutosapeladosDAO();
                                //asigan el Id del -AutoImputado-
                                $AutosapeladosDTO->setIdAutoImputado($AutoImputado->getIdAutoImputado());
                                //busca el la tabla 
                                $AutosapeladosDTO = $AutosapeladosDAO->selectAutosapelados($AutosapeladosDTO);
                                if ($AutosapeladosDTO != '') {
                                    error_log('************** obtiene las apelaciones');
                                    $taa_idAutoApelado = $AutosapeladosDTO[0]->getIdAutoApelado();
                                    $taa_idAutoImputado = $AutosapeladosDTO[0]->getIdAutoImputado();
                                    $taa_cveSentido = $AutosapeladosDTO[0]->getCveSentido();
                                    $taa_numToca = $AutosapeladosDTO[0]->getNumToca();
                                    $taa_numAnio = $AutosapeladosDTO[0]->getAnioToca();
                                    $taa_cveSala = $AutosapeladosDTO[0]->getCveSala();
                                    $taa_fechaRegistro = $AutosapeladosDTO[0]->getFechaRegistro();
                                    $taa_fechaActualizacion = $AutosapeladosDTO[0]->getFechaActualizacion();
                                    //                    echo $taa_fechaActualizacion;
                                }
                            }
                            $apelacion = array('idAutoApelado' => $taa_idAutoApelado,
                                'idAutoImputado' => $taa_idAutoImputado,
                                'cveSentido' => $taa_cveSentido,
                                'numToca' => $taa_numToca,
                                'numAnio' => $taa_numAnio,
                                'cveSala' => $taa_cveSala,
                                'fechaRegistro' => $taa_fechaRegistro,
                                'fechaActualizacion' => $taa_fechaActualizacion);

                            $imputadosInfo[] = array('idAutosImputados' => $AutoImputado->getIdAutoImputado(),
                                'idActuacion' => $AutoImputado->getIdActuacion(),
                                'idImputadoCarpeta' => $AutoImputado->getIdImputadoCarpeta(),
                                'Apelacion' => $AutoImputado->getApelacion(),
                                'autosapelados' => $apelacion);
                        }
                    }
                    //generacion del nuevo JSON con datos cruzados
                    $actuacion[] = array('idActuacion' => $Actuaciones->getIdActuacion(),
                        'numActuacion' => $Actuaciones->getNumActuacion(),
                        'aniActuacion' => $Actuaciones->getAniActuacion(),
                        'cveTipoActuacion' => $Actuaciones->getCveTipoActuacion(),
                        'idReferencia' => $Actuaciones->getIdReferencia(),
                        'numero' => $Actuaciones->getNumero(),
                        'anio' => $Actuaciones->getAnio(),
                        'cveTipocarpeta' => $Actuaciones->getCveTipocarpeta(),
                        'cveJuzgado' => $Actuaciones->getCveJuzgado(),
                        'sintesis' => $Actuaciones->getSintesis(),
                        'observaciones' => $Actuaciones->getObservaciones(),
                        'cveUsuario' => $Actuaciones->getCveUsuario(),
                        'activo' => $Actuaciones->getActivo(),
                        'fechaRegistro' => $Actuaciones->getFechaRegistro(),
                        'fechaActualizacion' => $Actuaciones->getFechaActualizacion(),
                        'cveTipoNotificacion' => $Actuaciones->getCveTipoNotificacion(),
                        'cveTipoAuto' => $Actuaciones->getCveTipoAuto(),
                        'descTipoCarpeta' => $descTipoCarpeta,
                        'imputados' => $imputados,
                        'autosimputados' => $imputadosInfo);
                    $counter++;
                }
            }
        }
        if ($content) {
            $jsonData = json_encode($actuacion);
            $json = '{"status":"OK","totalCount":"' . $counter . '","data":' . $jsonData . '}';
        } else {
            $json = '{"status":"ERROR","totalCount":"0","data":[{}]}';
        }
        return $json;
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

    public function obtenerAuto_AutoVinculacion($ActuacionesDto) {
        $fechaRegistro = '';
        $medidasAplicadas = array();
        $imputadosIds = array();
        $tmpNumero = $ActuacionesDto->getNumero();
        $tmpAnio = $ActuacionesDto->getAnio();
        $tmpCveTipoCarpeta = $ActuacionesDto->getCveTipoCarpeta();
        $tmpCveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtencion del Id de Referencia de acuerdo a la carpeta seleccionada
        $idReferencia = $this->tipoCarpeta($ActuacionesDto);
        if ($idReferencia > 0) { //si existe el registro con los datos proporcionados
            //buscar que no exista duplicidad en los datos en -tblactuaciones-
            $ActuacionesDTO = new ActuacionesDTO();
            $ActuacionesDAO = new ActuacionesDAO();
            $ActuacionesDTO->setIdReferencia($idReferencia);
            $ActuacionesDTO->setCveTipoActuacion('5');
            $ActuacionesDTO->setNumero($tmpNumero);
            $ActuacionesDTO->setAnio($tmpAnio);
            $ActuacionesDTO->setCveTipoCarpeta($tmpCveTipoCarpeta);
            $ActuacionesDTO->setCveJuzgado($tmpCveJuzgado);
            $ActuacionesDTO->setActivo('S');
            $ActuacionesDTO = $ActuacionesDAO->selectActuaciones($ActuacionesDTO, '', ' AND numActuacion<>0 AND aniActuacion<>0 ');
            if ($ActuacionesDTO == '') { //obtiene los datos del auto
                //obtencion de los imputados desde -tblimputadoscarpetas-
                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                $imputados = '';
                $nombre = '';
                if ($ImputadosCarpetasDTO != '') { //SI hay imputados relacionados
                    foreach ($ImputadosCarpetasDTO as $Imputadoscarpetas) {
                        if ($Imputadoscarpetas->getCveTipoPersona() == 1) { //persona fisica
                            $nombre = utf8_encode($Imputadoscarpetas->getPaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getMaterno()) . ' ' . utf8_encode($Imputadoscarpetas->getNombre());
                        } else {
                            $nombre = utf8_encode($Imputadoscarpetas->getNombreMoral());
                        }
                        $imputados[] = array('idImputadoCarpeta' => $Imputadoscarpetas->getIdImputadoCarpeta(), 'nombre' => $nombre);
                    }
                    $datos = array('numero' => $tmpNumero,
                        'anio' => $tmpAnio,
                        'cveTipoCarpeta' => $tmpCveTipoCarpeta,
                        'cveJuzgado' => $tmpCveJuzgado,
                        'idReferencia' => $idReferencia,
                        'imputados' => $imputados
                    );
                    $salida = array('status' => 'OK', 'totalCount' => count($ImputadosCarpetasDTO), 'data' => $datos);
                } else {//no hay imputados
                    $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE.');
                }
            } else { //ya existe un registro previo, no se puede continuar
                $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'LOS DATOS YA SE ENCUENTRAN RELACIONADOS. VERIFIQUE.');
            }
        } else { //no existe relacion
            $salida = array('status' => 'ERROR', 'totalCount' => '0', 'text' => 'LOS DATOS DE RELACION NO EXISTEN, VERIFIQUE.');
        }
        return json_encode($salida);
    }

    public function obtenerAuto($ActuacionesDto) {
        $fechaRegistro = '';
        $medidasAplicadas = array();
        $imputadosIds = array();
        $tmpNumero = $ActuacionesDto->getNumero();
        $tmpAnio = $ActuacionesDto->getAnio();
        $tmpCveTipoCarpeta = $ActuacionesDto->getCveTipoCarpeta();
        $tmpCveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtencion del Id de Referencia de acuerdo a la carpeta seleccionada
        $idReferencia = $this->tipoCarpeta($ActuacionesDto);
        if ($idReferencia > 0) { //si existe el registro con los datos proporcionados
            //buscar que no este duplicado el registro en -tblactuaciones-
            $ActuacionesDAO = new ActuacionesDAO(); //inicio validacion de un solo regitro de medidas cautelares
            $ActuacionesDto->setIdReferencia($idReferencia);
            $ActuacionesDto = $ActuacionesDAO->selectActuaciones($ActuacionesDto);
            if ($ActuacionesDto != '') { //el registro ya existe en la tabla, obtiene los datos de la fecha de registro y los imputados vinculados
                $sqlMedidas = '';
                foreach ($ActuacionesDto as $Actuaciones) {
                    //busca en medidas cautelares
                    $MedidascautelaresDTOtemp = new MedidascautelaresDTO();
                    $MedidascautelaresDAOtemp = new MedidascautelaresDAO();
                    $MedidascautelaresDTOtemp->setActivo('S');
                    $MedidascautelaresDTOtemp->setIdActuacion($Actuaciones->getIdActuacion());
                    $MedidascautelaresDTOtemp = $MedidascautelaresDAOtemp->selectMedidascautelares($MedidascautelaresDTOtemp, ' GROUP BY idImputadoCarpeta ');
                    if ($MedidascautelaresDTOtemp != '') { //si existen datos previos registrados
                        foreach ($MedidascautelaresDTOtemp as $medidasTmp) {
                            $medidasAplicadas[] = array('idImputado' => $medidasTmp->getIdImputadoCarpeta(), 'fecha' => $this->formatoFecha($Actuaciones->getFechaRegistro(), 'fechaHora', 'pjem', 'fechaHora'));
                        }
                    }
                } //fin foreach
            }
            //Validacion de la carpeta, obtencion de los imputados desde la carpeta judicial o de la carpeta de exhortos
            $GenericoDTO = '';
            if ($tmpCveTipoCarpeta == 7) { //carpeta de exhortos
                $ImputadosexhortosDAO = new ImputadosexhortosDAO();
                $ImputadosexhortosDTO = new ImputadosexhortosDTO();
                $ImputadosexhortosDTO->setIdImputadoExhorto($idReferencia);
                $ImputadosexhortosDTO->setActivo('S');
                $ImputadosexhortosDTO = $ImputadosexhortosDAO->selectImputadosexhortos($ImputadosexhortosDTO);
                $GenericoDTO = $ImputadosexhortosDTO;
            } else { //carpeta judicial
                //obtencion de los imputados desde -tblimputadoscarpetas-
                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
                $ImputadosCarpetasDTO->setActivo('S');
                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                $GenericoDTO = $ImputadosCarpetasDTO;
            }
            if (is_array($GenericoDTO)) { //SI hay imputados relacionados
                foreach ($GenericoDTO as $Imputadoscarpetas) {
                    $Imputadoscarpetas->setNombreMoral(utf8_encode($Imputadoscarpetas->getNombreMoral()));
                    $Imputadoscarpetas->setNombre(utf8_encode($Imputadoscarpetas->getNombre()));
                    $Imputadoscarpetas->setPaterno(utf8_encode($Imputadoscarpetas->getPaterno()));
                    $Imputadoscarpetas->setMaterno(utf8_encode($Imputadoscarpetas->getMaterno()));
                }
                $referencia = '[{"numero":"' . $tmpNumero . '","anio":"' . $tmpAnio . '","cveTipoCarpeta":"' . $tmpCveTipoCarpeta . '","cveJuzgado":"' . $tmpCveJuzgado . '","idReferencia":"' . $idReferencia . '","medidasImputados":' . json_encode($medidasAplicadas) . '}]';
                $dataTemp = new DtoToJson($GenericoDTO);
                $salida = $dataTemp->toJson("RESULTADOS\",\"referencia\":" . $referencia . ",\"STATUS\":\"OK");
            } else {//no hay imputados
                $salida = '{"status":"ERROR","totalCount":"0","text":"NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE."}';
            }
            //} //fin validacion unico registro de medidas cautelares
        } else { //no existe relacion
            $salida = '{"status":"ERROR","totalCount":"0","text":"LOS DATOS DE RELACION NO EXISTEN, VERIFIQUE."}';
        }
        return $salida;
    }

    /*     * *******************  TERMINO DE METODOS PARA AUTOS DE VINCULACION  ****************** */
    /*     * ******************* INICIO DE METODOS PARA MEDIDAS CAUTELARES *********************** */

    public function guardaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $transaccion = false;
        //guarda en tabla -tblactuaciones-
        $respuesta = '';
        $error = false;
        $errorDesc = '';
        //GUARDA DATOS EN -tblactuaciones-
        //dato fijo por ser Certificacion
        $cveTipoActuacion = $ActuacionesDto->getCveTipoActuacion();
        //definiciOn de variables para obtener los valores del contador
        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtenciOn de nUmero de la tabla contadores
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor);
        if (isset($numActuacion[0])) {
            $numActuacion = $numActuacion[0]->getNumero();
        } elseif (isset($numActuacion)) {
            $numActuacion = $numActuacion->getNumero();
        }
        //asignaciOn de variables en el DTO de las actuaciones
        $ActuacionesDto->setNumActuacion($numActuacion);
        $ActuacionesDto->setAniActuacion(date("Y"));
        //$ActuacionesDto->setObservaciones(addslashes($ActuacionesDto->getObservaciones()));
        //inserciOn de la ActuaciOn
        $ActuacionesDto = $this->insertActuaciones($ActuacionesDto, $proveedor);
        if ($ActuacionesDto != '') { // se insertO
            $transaccion = true;
            //INSERCION EN BITACORA
            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(97, 'tblactuaciones', 'dto', $ActuacionesDto, '', '', $proveedor);
            //guarda en tabla -tblmedidascautelares-
            /*             * ******* insercion de la relacion actuacion-imputado ************ */
            //obtencion del id de actuacion
            $idActuacion = $ActuacionesDto[0]->getIdActuacion();
            foreach ($medidas as $medida) {
                $tmpFechaInicio = explode('/', $medida['finicial']);
                $tmpFechaFinal = explode('/', $medida['ffinal']);
                $fechaInicio = $tmpFechaInicio[2] . '-' . $tmpFechaInicio[1] . '-' . $tmpFechaInicio[0];
                $fechaFinal = $tmpFechaFinal[2] . '-' . $tmpFechaFinal[1] . '-' . $tmpFechaFinal[0];
                $MedidascautelaresDTO = new MedidascautelaresDTO();
                $MedidascautelaresDAO = new MedidascautelaresDAO();
                $MedidascautelaresDTO->setIdActuacion($idActuacion);
                $MedidascautelaresDTO->setIdImputadoCarpeta($medida['idImputadoCarpeta']);
                $MedidascautelaresDTO->setApelada($medida['apelacion']);
                $MedidascautelaresDTO->setActivo('S');
                $MedidascautelaresDTO->setFechaInicio($fechaInicio);
                $MedidascautelaresDTO->setFechaTermina($fechaFinal);
                $MedidascautelaresDTO->setCveTipoMedidaCautelar($medida['idMedida']);
                $MedidascautelaresDTO->setCveAutoridadEmisora($medida['autoridad']);
                $MedidascautelaresDTO = $MedidascautelaresDAO->insertMedidascautelares($MedidascautelaresDTO, $proveedor);
                if ($MedidascautelaresDTO != '') {
                    $transaccion = true;
                    //se inserto un registro
                    //insercion en bitacroa
                    $bitacoraController->agregar(101, 'tblmedidascautelares', 'dto', $MedidascautelaresDTO, '', $proveedor);
                    //se inserta la apelacion relacionada
                    if ($MedidascautelaresDTO[0]->getApelada() == 'S') {
                        if (count($apelaciones) > 0) {
                            foreach ($apelaciones as $apelacion) {
                                if ($apelacion['idImputadoCarpeta'] == $MedidascautelaresDTO[0]->getIdImputadoCarpeta()) {
                                    //EL IMPUTADO TIENE UNA APELACION ESTABLECIDA
                                    //se inserta la apelacion
                                    //guarda en table -tblmedidasapeladas-
                                    $MedidasapeladasDTO = new MedidasapeladasDTO();
                                    $MedidasapeladasDAO = new MedidasapeladasDAO();
                                    $MedidasapeladasDTO->setIdMedidaCautelar($MedidascautelaresDTO[0]->getIdMedidaCautelar());
                                    $MedidasapeladasDTO->setCveSentido($apelacion['apelacionSentido']);
                                    $MedidasapeladasDTO->setNumToca($apelacion['apelacionNumero']);
                                    $MedidasapeladasDTO->setAnioToca($apelacion['apelacionAnio']);
                                    $MedidasapeladasDTO->setCveSala($apelacion['apelacionSala']);
                                    $MedidasapeladasDTO = $MedidasapeladasDAO->insertMedidasapeladas($MedidasapeladasDTO, $proveedor);
                                    if (is_array($MedidasapeladasDTO)) {
                                        //se inserto el registro
                                        $transaccion = true;
                                        //insercion en bitacroa
                                        $bitacoraController->agregar(105, 'tblmedidascautelares', 'dto', $MedidascautelaresDTO, '', $proveedor);
                                    } else {
                                        $transaccion = false;
                                        $error = 'OCURRIO UN ERROR AL TRATAR DE INSERTAR LA APELACION DE LA MEDIDA CAUTELAR.';
                                        break;
                                    }
                                }
                            } // foreach/
                        }
                    }
                } else {
                    $transaccion = false;
                    $error = 'OCURRIO UN ERROR AL TRATAR DE INSERTAR LA MEDIDA CAUTELAR.';
                    break;
                }
            }
        } else { // no se insertó
            $transaccion = false;
        }
        if ($transaccion) {
            $proveedor->execute("COMMIT");
            //enviar correo electrOnico
            $ActuacionesDTO = new ActuacionesDTO();
            $ActuacionesDTO->setIdActuacion($idActuacion);
            $param = array("fechaDesde" => "", "fechaHasta" => "", "paginacion" => "true", "cantxPag" => "10", "pag" => "1");
            $datosCorreo = $this->buscarMedidasCautelares($ActuacionesDTO, $param);
            $this->enviaCorreoMcautelares($datosCorreo);
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function actualizaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
        //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $transaccion = false;
        //actualiza la tabla actuaciones
        //Id de la actuacion
        $idActuacion = $ActuacionesDto->getIdActuacion();
        //obtencion de los datos previos
        $tmpActuacionesDto = new ActuacionesDTO();
        $tmpActuacionesDao = new ActuacionesDAO();
        $tmpActuacionesDto->setIdActuacion($idActuacion);
        $tmpActuacionesDto = $tmpActuacionesDao->selectActuaciones($tmpActuacionesDto, $proveedor);
        //asigna fecha de actualizacion
        $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        //ActualizaciOn de la ActuaciOn
        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
        if ($ActuacionesDto != '') {
            $transaccion = true;
            //INSERCION EN BITACORA
            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(98, 'tblactuaciones', 'dto', $ActuacionesDto, $tmpActuacionesDto, $proveedor);

            $idActuacion = $ActuacionesDto[0]->getIdActuacion();
            $tmpMedidasCautelares = new MedidascautelaresDTO();
            $MedidasCautelaresDTO = new MedidascautelaresDTO();
            $MedidasCautelaresDAO = new MedidascautelaresDAO();
            $MedidasCautelaresDTO->setIdActuacion($idActuacion);
            $MedidasCautelaresDTO = $MedidasCautelaresDAO->selectMedidascautelares($MedidasCautelaresDTO, '', $proveedor);

            if ($MedidasCautelaresDTO != '') {
                foreach ($MedidasCautelaresDTO as $MedidasCautelares) {
                    $idMedidaCautelar = $MedidasCautelares->getIdMedidaCautelar();
                    /*                     * ***** busqueda y eliminacion logica de las medidas apeladas ******* */
                    $MedidasapeladasDTO = new MedidasapeladasDTO();
                    $MedidasapeladasDAO = new MedidasapeladasDAO();
                    $MedidasapeladasDTO->setIdMedidaCautelar($idMedidaCautelar);
                    $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasapeladas($MedidasapeladasDTO, '', $proveedor);
                    if ($MedidasapeladasDTO != '') { //si existe una apelacion relacionada al imputado
                        //bitacora
                        $bitacoraController->agregar(107, 'tblmedidasapeladas', 'dto', $MedidasapeladasDTO, '', $proveedor);
                        //eliminacion lOgica
                        $MedidasapeladasDTO[0]->setActivo('N');
                        $MedidasapeladasDTO[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
                        $MedidasapeladasDTO = $MedidasapeladasDAO->updateMedidasapeladas($MedidasapeladasDTO[0], $proveedor);
                        if ($MedidasapeladasDTO != '') {
                            $transaccion = true;
                        } else {
                            $transaccion = false;
                            break;
                        }
                    }
                    //bitacora
                    $bitacoraController->agregar(103, 'tblmadidascautelares', 'dto', $MedidasCautelares, '', $proveedor);
                    //eliminacion logica de la medida cautelar
                    $tmpMedidasCautelaresDTO = new MedidascautelaresDTO();
                    $tmpMedidasCautelaresDAO = new MedidascautelaresDAO();
                    $tmpMedidasCautelaresDTO->setIdMedidaCautelar($idMedidaCautelar);
                    $tmpMedidasCautelaresDTO->setActivo('N');
                    $tmpMedidasCautelaresDTO = $tmpMedidasCautelaresDAO->updateMedidascautelares($tmpMedidasCautelaresDTO, $proveedor);
                    if ($tmpMedidasCautelaresDTO != '') {
                        //se actualizo
                        $MedidasapeladasDTO = true;
                        $transaccion = true;
                    } else {
                        //no se actualizo
                        $transaccion = false;
                        break;
                    }
                } //fin foreach
            } else {
                //no existen medidas cautelares asignadas a la actuacion
            }
            /*             * ******** INSERCION DE LOS NUEVOS DATOS ************ */
            /*             * ******* insercion de la relacion actuacion-imputado ************ */
            /*             * ********insercion nueva************* */
            foreach ($medidas as $medida) {
                $banderaMedida = false;
                //busca si ya existe una previa
                $MedidascautelaresDTO = new MedidascautelaresDTO();
                $MedidascautelaresDTO2 = new MedidascautelaresDTO();
                $MedidascautelaresDAO = new MedidascautelaresDAO();
                $MedidascautelaresDTO->setIdActuacion($idActuacion);
                $MedidascautelaresDTO->setIdImputadoCarpeta($medida['idImputadoCarpeta']);
                $MedidascautelaresDTO->setCveTipoMedidaCautelar($medida['idMedida']);
                $MedidascautelaresDTO = $MedidascautelaresDAO->selectMedidascautelares($MedidascautelaresDTO, '', $proveedor);
                if ($MedidascautelaresDTO != '') {
                    //actualiza la medida existente
                    $MedidascautelaresDTO2->setIdMedidaCautelar($MedidascautelaresDTO[0]->getIdMedidaCautelar());
                    $MedidascautelaresDTO2->setApelada($medida['apelacion']);
                    $MedidascautelaresDTO2->setActivo('S');
                    $MedidascautelaresDTO2->setFechaInicio($this->formatoFecha($medida['finicial'], 'fecha', 'mysql', 'fecha'));
                    $MedidascautelaresDTO2->setFechaTermina($this->formatoFecha($medida['ffinal'], 'fecha', 'mysql', 'fecha'));
                    $MedidascautelaresDTO2->setCveAutoridadEmisora($medida['autoridad']);
                    $MedidascautelaresDTO2 = $MedidascautelaresDAO->updateMedidascautelares($MedidascautelaresDTO2, $proveedor);
                    if ($MedidascautelaresDTO2 != '') {
                        $transaccion = true;
                        //se actualizO la medida
                        $banderaMedida = true;
                        $idMedidaCautelar = $MedidascautelaresDTO2[0]->getIdMedidaCautelar();
                    } else {
                        $transaccion = false;
                        break;
                        //no se actualizO la medida
                    }
                } else {
                    //no existe la medida, la inserta
                    $MedidascautelaresDTO2->setIdActuacion($idActuacion);
                    $MedidascautelaresDTO2->setIdImputadoCarpeta($medida['idImputadoCarpeta']);
                    $MedidascautelaresDTO2->setApelada($medida['apelacion']);
                    $MedidascautelaresDTO2->setActivo('S');
                    $MedidascautelaresDTO2->setFechaInicio($this->formatoFecha($medida['finicial'], 'fecha', 'mysql', 'fecha'));
                    $MedidascautelaresDTO2->setFechaTermina($this->formatoFecha($medida['ffinal'], 'fecha', 'mysql', 'fecha'));
                    $MedidascautelaresDTO2->setCveTipoMedidaCautelar($medida['idMedida']);
                    $MedidascautelaresDTO2->setCveAutoridadEmisora($medida['autoridad']);
                    $MedidascautelaresDTO2 = $MedidascautelaresDAO->insertMedidascautelares($MedidascautelaresDTO2, $proveedor);
                    if ($MedidascautelaresDTO2 != '') {
                        $transaccion = true;
                        //se insertO la medida
                        $banderaMedida = true;
                        $idMedidaCautelar = $MedidascautelaresDTO2[0]->getIdMedidaCautelar();
                    } else {
                        //no se insertO la medida
                        $transaccion = false;
                        break;
                    }
                }

                //validacion de actualizaciOn o inserciOn de la apelacion
                if ($banderaMedida == true) {
                    if (count($apelaciones) > 0) {
                        foreach ($apelaciones as $apelacion) {
                            if ($medida['apelacion'] == 'S' && $apelacion['idImputadoCarpeta'] == $medida['idImputadoCarpeta'] && $apelacion['idMedidaCautelar'] == $medida['idMedida']) {
                                $MedidasapeladasDTO = new MedidasapeladasDTO();
                                $MedidasapeladasDTO2 = new MedidasapeladasDTO();
                                $MedidasapeladasDAO = new MedidasapeladasDAO();
                                $MedidasapeladasDTO->setIdMedidaCautelar($idMedidaCautelar);
                                $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasapeladas($MedidasapeladasDTO, '', $proveedor);
                                if ($MedidasapeladasDTO != '') {
                                    //existe la apelacion, se actualiza
                                    $MedidasapeladasDTO2->setIdMedidaApelada($MedidasapeladasDTO[0]->getIdMedidaApelada());
                                    $MedidasapeladasDTO2->setCveSentido($apelacion['apelacionSentido']);
                                    $MedidasapeladasDTO2->setNumToca($apelacion['apelacionNumero']);
                                    $MedidasapeladasDTO2->setAnioToca($apelacion['apelacionAnio']);
                                    $MedidasapeladasDTO2->setCveSala($apelacion['apelacionSala']);
                                    $MedidasapeladasDTO2->setActivo('S');
                                    $MedidasapeladasDTO2->setFechaActualizacion(date("Y-m-d H:i:s"));
                                    $MedidasapeladasDTO2 = $MedidasapeladasDAO->updateMedidasapeladas($MedidasapeladasDTO2, $proveedor);
                                    if ($MedidasapeladasDTO2 != '') {
                                        //seactualizO la apelaciOn
                                        $transaccion = true;
                                    } else {
                                        //no se actualizO la apelaciOn
                                        $transaccion = false;
                                        break;
                                    }
                                } else {
                                    //no existe la apelacion, se inserta
                                    $MedidasapeladasDTO2->setIdMedidaCautelar($idMedidaCautelar);
                                    $MedidasapeladasDTO2->setCveSentido($apelacion['apelacionSentido']);
                                    $MedidasapeladasDTO2->setNumToca($apelacion['apelacionNumero']);
                                    $MedidasapeladasDTO2->setAnioToca($apelacion['apelacionAnio']);
                                    $MedidasapeladasDTO2->setCveSala($apelacion['apelacionSala']);
                                    $MedidasapeladasDTO2->setActivo('S');
                                    $MedidasapeladasDTO2 = $MedidasapeladasDAO->insertMedidasapeladas($MedidasapeladasDTO2, $proveedor);
                                    if ($MedidasapeladasDTO2 != '') {
                                        //se actualizO la apelaciOn
                                        $transaccion = true;
                                    } else {
                                        //no se actualizO la apelaciOn
                                        $transaccion = false;
                                        break;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $transaccion = false;
        }
        if ($transaccion) {
            $proveedor->execute("COMMIT");
            //enviar correo electrOnico
            $ActuacionesDTO = new ActuacionesDTO();
            $ActuacionesDTO->setIdActuacion($idActuacion);
            $param = array("fechaDesde" => "", "fechaHasta" => "", "paginacion" => "true", "cantxPag" => "10", "pag" => "1");
            $datosCorreo = $this->buscarMedidasCautelares($ActuacionesDTO, $param);
            $this->enviaCorreoMcautelares($datosCorreo);
        } else {
            $proveedor->execute("ROLLBACK");
        }
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function buscarMedidasCautelares($ActuacionesDto, $param) {
        error_log(print_r($ActuacionesDto, true));
        error_log(print_r($param, true));
        //obtiene los datos de la actuacion
        $proveedor = null;
        $json = array();
        //obtencion de las actuaciones. obtiene 1 solo registro
        $ActuacionesDto->setCveJuzgado(explode('/', $ActuacionesDto->getCveJuzgado())[0]);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, " ORDER BY fechaRegistro DESC", $param);
        error_log(print_r($ActuacionesDto, true));
        $totalRows = count($ActuacionesDto);
        $counter = 0;
        $content = false;
        //recorre los registros en busca de certificaciones
        if ($ActuacionesDto != '') {
            $cveJuzgado = $ActuacionesDto[0]->getCveJuzgado();
            foreach ($ActuacionesDto as $Actuaciones) {
                $imputadosInfo = array();
                //El ID de actuaciOn de cada registro se valida en la tabla -tblautosimputados-
                $idActuacion = $Actuaciones->getIdActuacion();
                $idReferencia = $Actuaciones->getIdReferencia();
                $MedidascautelaresDto = new MedidascautelaresDTO();
                $MedidascautelaresDao = new MedidascautelaresDAO();
                $MedidascautelaresDto->setIdActuacion($idActuacion);
                $MedidascautelaresDto->setActivo('S');
                $MedidascautelaresDto = $MedidascautelaresDao->selectMedidascautelares($MedidascautelaresDto, $proveedor);
                //si la consulta de -tblmedidascautelares- trae informaciOn
                if ($MedidascautelaresDto != '') { //la medida cautelar tiene datos
                    //obtencion de los imputados
                    $GenericoDTO = '';
                    if ($MedidascautelaresDto[0]->getCveTipoMedidaCautelar() == 7) {
                        //los imputados provienen de un exhorto
                        $ImputadosexhortosDAO = new ImputadosexhortosDAO();
                        $ImputadosexhortosDTO = new ImputadosexhortosDTO();
                        $ImputadosexhortosDTO->setIdImputadoExhorto($idReferencia);
                        $ImputadosexhortosDTO->setActivo('S');
                        $ImputadosexhortosDTO = $ImputadosexhortosDAO->selectImputadosexhortos($ImputadosexhortosDTO);
                        $GenericoDTO = $ImputadosexhortosDTO;
                    } else {
                        //los imputados provienen de la imputadoscarpeta
                        $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                        $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                        $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
                        $ImputadosCarpetasDTO->setActivo('S');
                        $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                        $GenericoDTO = $ImputadosCarpetasDTO;
                    }
                    if ($GenericoDTO != '') { //SI hay imputados relacionados
                        foreach ($GenericoDTO as $Imputado) {
                            $idImputado = '';
                            if ($MedidascautelaresDto[0]->getCveTipoMedidaCautelar() == 7) { //proviene de exhortos
                                $idImputado = $Imputado->getIdImputadoExhorto();
                            } else { //proviene de carpeta
                                $idImputado = $Imputado->getIdImputadoCarpeta();
                            }
                            $nombre = '';
                            if ($Imputado->getCveTipoPersona() == 1) { // es persona fisica
                                $nombre = utf8_encode($Imputado->getPaterno() . ' ' . $Imputado->getMaterno() . ' ' . $Imputado->getNombre());
                            } else { //es otro tipo de persona
                                $nombre = utf8_encode($Imputado->getNombreMoral());
                            }
                            //recorre las medidas en busca de las asigandas a los imputados vinculados a la carpeta o exhortos
                            $imputadoCheck = false;
                            $imputadoFechaRegistro = '';
                            foreach ($MedidascautelaresDto as $medidaCautelar) {
                                if ($medidaCautelar->getIdImputadoCarpeta() == $idImputado) {
                                    $imputadoCheck = true;
                                    $imputadoFechaRegistro = $this->formatoFecha($Actuaciones->getFechaRegistro(), 'fechaHora', 'pjem', 'fechaHora');
                                    break;
                                }
                            }
                            $imputadoActivoDiferenteActuacion = '';
                            //busca si el imputado esta vinculado a una medida cautelar distinta a la activa
                            $MedidasCautelaresDTOotros = new MedidascautelaresDTO();
                            $MedidasCautelaresDAOotros = new MedidascautelaresDAO();
                            $MedidasCautelaresDTOotros->setIdImputadoCarpeta($idImputado);
                            $MedidasCautelaresDTOotros->setActivo('S');
                            $MedidasCautelaresDTOotros = $MedidasCautelaresDAOotros->selectMedidascautelares($MedidasCautelaresDTOotros, ' AND idActuacion<>' . $MedidascautelaresDto[0]->getIdActuacion() . ' GROUP BY idActuacion');
                            if ($MedidasCautelaresDTOotros != '') {
                                $sqlOtros = '';
                                foreach ($MedidasCautelaresDTOotros as $medidasOtros) {
                                    $sqlOtros .= $medidasOtros->getIdActuacion() . ',';
                                }
                                $sqlOtros = rtrim($sqlOtros, ",");
                                if (strlen($sqlOtros) > 0) {
                                    //busqueda de las actuaciones coincidentes para verificar si el imputado esta activo en alguna de ellas
                                    $ActuacionesDTOotros = new ActuacionesDTO();
                                    $ActuacionesDAOotros = new ActuacionesDAO();
                                    $ActuacionesDTOotros->setActivo('S');
                                    $ActuacionesDTOotros = $ActuacionesDAOotros->selectActuaciones($ActuacionesDTOotros, '', ' AND idActuacion in (' . $sqlOtros . ')');
                                    if ($ActuacionesDTOotros != '') {
                                        //el imputado esta activo en otra actuacion
                                        $imputadoActivoDiferenteActuacion = $this->formatoFecha($ActuacionesDTOotros[0]->getFechaRegistro(), 'fechaHora', 'pjem', 'fechaHora');
                                    }
                                }
                            }

                            $imputadosInfo[] = array('status' => 'ok', 'imputadoCheck' => $imputadoCheck, 'idImputado' => $idImputado, 'nombreImputado' => $nombre, 'tipoPersona' => $Imputado->getCveTipoPersona(), 'fechaRegistro' => $imputadoFechaRegistro, 'imputadoActivoDiferenteActuacion' => $imputadoActivoDiferenteActuacion);
                        }
                    } else {//no hay imputados
                        $imputadosInfo = array('status' => 'error', 'mensaje' => 'NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE.');
                    }

                    //obtiene la descripcion del TipoCarpeta
                    $TipoCarpetaDTO = new TiposcarpetasDTO();
                    $TipoCarpetaDAO = new TiposcarpetasDAO();
                    $TipoCarpetaDTO->setActivo('S');
                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
                    $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();

                    //obtener tipo de juzgado
                    $cveTipoJuzgado = 0;
                    $desTipoJuzgado = '';
                    $JuzgadosDTO = new JuzgadosDTO();
                    $JuzgadosDAO = new JuzgadosDAO();
                    $JuzgadosDTO->setCveJuzgado($cveJuzgado);
                    $JuzgadosDTO = $JuzgadosDAO->selectJuzgados($JuzgadosDTO);
                    if ($JuzgadosDTO != '') { //el registro de juzgados tiene informaciOn
                        $cveTipoJuzgado = $JuzgadosDTO[0]->getCveTipoJuzgado();
                        $desTipoJuzgado = $JuzgadosDTO[0]->getDesJuzgado();
                    }

                    //obtener tipo de notificacion
                    $descTipoNotificacion = '';
                    $TiposnotificacionesDTO = new TiposnotificacionesDTO();
                    $TiposnotificacionesDAO = new TiposnotificacionesDAO();
                    $TiposnotificacionesDTO->setCveTipoNotificacion($Actuaciones->getCveTipoNotificacion());
                    $TiposnotificacionesDTO = $TiposnotificacionesDAO->selectTiposnotificaciones($TiposnotificacionesDTO);
                    if ($TiposnotificacionesDTO != '') {
                        $descTipoNotificacion = $TiposnotificacionesDTO[0]->getDesTipoNotificacion();
                    }

                    $content = true;
                    //validacion de vinculaciOn con la tabla -tblautosimputados-
                    $jsonImp = array();
                    foreach ($MedidascautelaresDto as $MedidaCautelar) {
                        //obtiene la descripcion de la medida cautelar
                        $TiposmedidascautelaresDTO = new TiposmedidascautelaresDTO();
                        $TiposmedidascautelaresDAO = new TiposmedidascautelaresDAO();
                        $TiposmedidascautelaresDTO->setCveTipoMedidaCautelar($MedidaCautelar->getCveTipoMedidaCautelar());
                        $TiposmedidascautelaresDTO->setActivo('S');
                        $TiposmedidascautelaresDTO = $TiposmedidascautelaresDAO->selectTiposmedidascautelares($TiposmedidascautelaresDTO);
                        $desMedida = '';
                        if ($TiposmedidascautelaresDTO != '') {
                            $desMedida = $TiposmedidascautelaresDTO[0]->getDesTipoMedidaCautelar();
                        }
                        //datos de la apelacion
                        $apelacion = array();
                        $tma_idMedidaApelada = '';
                        $tma_idMedidaCautelar = '';
                        $tma_cveSentido = 0;
                        $tma_numToca = '';
                        $tma_numAnio = '';
                        $tma_cveSala = 0;
                        $tma_fechaRegistro = '';
                        $tma_fechaActualizacion = '';
                        if ($MedidaCautelar->getApelada() == 'S') {
                            //obtiene los datos de la apelacion en -tblautosapelados-
                            $MedidasapeladasDTO = new MedidasapeladasDTO();
                            $MedidasapeladasDAO = new MedidasapeladasDAO();
                            //asigan el Id del -MedidaCautelar-
                            $MedidasapeladasDTO->setIdMedidaCautelar($MedidaCautelar->getIdMedidaCautelar());
                            //busca en la tabla 
                            $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasapeladas($MedidasapeladasDTO);
                            if ($MedidasapeladasDTO != '' && is_array($MedidasapeladasDTO)) {
                                $tma_idMedidaApelada = $MedidasapeladasDTO[0]->getIdMedidaApelada();
                                $tma_idMedidaCautelar = $MedidasapeladasDTO[0]->getIdMedidaCautelar();
                                $tma_cveSentido = $MedidasapeladasDTO[0]->getCveSentido();
                                $tma_numToca = $MedidasapeladasDTO[0]->getNumToca();
                                $tma_numAnio = $MedidasapeladasDTO[0]->getAnioToca();
                                $tma_cveSala = $MedidasapeladasDTO[0]->getCveSala();
                                $tma_fechaRegistro = $MedidasapeladasDTO[0]->getFechaRegistro();
                                $tma_fechaActualizacion = $MedidasapeladasDTO[0]->getFechaActualizacion();
                            }
                        }
                        $apelacion['idMedidaApelada'] = $tma_idMedidaApelada;
                        $apelacion['idMedidaCautelar'] = $tma_idMedidaCautelar;
                        $apelacion['cveSentido'] = $tma_cveSentido;
                        $apelacion['numToca'] = $tma_numToca;
                        $apelacion['numAnio'] = $tma_numAnio;
                        $apelacion['cveSala'] = $tma_cveSala;
                        $apelacion['fechaRegistro'] = $this->formatoFecha($tma_fechaRegistro, 'fechaHora', 'pjem', 'fecha');
                        $apelacion['fechaActualizacion'] = $this->formatoFecha($tma_fechaActualizacion, 'fechaHora', 'pjem', 'fecha');

                        $jsonImp[] = array('idMedidaCautelar' => $MedidaCautelar->getIdMedidaCautelar(),
                            'desMedidaCautelar' => $desMedida,
                            'idActuacion' => $MedidaCautelar->getIdActuacion(),
                            'idImputadoCarpeta' => $MedidaCautelar->getIdImputadoCarpeta(),
                            'fechaInicio' => $this->formatoFecha($MedidaCautelar->getFechaInicio(), 'fechaHora', 'pjem', 'fecha'),
                            'fechaTermina' => $this->formatoFecha($MedidaCautelar->getFechaTermina(), 'fechaHora', 'pjem', 'fecha'),
                            'cveTipoMedidaCautelar' => $MedidaCautelar->getCveTipoMedidaCautelar(),
                            'cveAutoridadEmisora' => $MedidaCautelar->getCveAutoridadEmisora(),
                            'Apelada' => $MedidaCautelar->getApelada(),
                            'autosapelados' => $apelacion);
                    }
                    //datos de la actuacion
                    $json[] = array('idActuacion' => $Actuaciones->getIdActuacion(),
                        'numActuacion' => $Actuaciones->getNumActuacion(),
                        'aniActuacion' => $Actuaciones->getAniActuacion(),
                        'cveTipoActuacion' => $Actuaciones->getCveTipoActuacion(),
                        'idReferencia' => $Actuaciones->getIdReferencia(),
                        'numero' => $Actuaciones->getNumero(),
                        'anio' => $Actuaciones->getAnio(),
                        'cveTipocarpeta' => $Actuaciones->getCveTipocarpeta(),
                        'cveJuzgado' => $Actuaciones->getCveJuzgado(),
                        'cveTipojuzgado' => $cveTipoJuzgado,
                        'desTipoJuzgado' => $desTipoJuzgado,
                        'sintesis' => $Actuaciones->getSintesis(),
                        'observaciones' => ($Actuaciones->getObservaciones()),
                        'cveUsuario' => $Actuaciones->getCveUsuario(),
                        'activo' => $Actuaciones->getActivo(),
                        'fechaRegistro' => $this->formatoFecha($Actuaciones->getFechaRegistro(), 'fechaHora', 'pjem', 'fechaHora'),
                        'fechaActualizacion' => $this->formatoFecha($Actuaciones->getFechaActualizacion(), 'fechaHora', 'pjem', 'fechaHora'),
                        'cveTipoNotificacion' => $Actuaciones->getCveTipoNotificacion(),
                        'descTipoNotificacion' => $descTipoNotificacion,
                        'descTipoCarpeta' => $descTipoCarpeta,
                        'imputados' => $imputadosInfo,
                        'medidascautelares' => $jsonImp);
                    $counter++;
                }
            }
        }
        if ($content) {
            $jsonFinal = json_encode(array('status' => 'OK', 'totalCount' => $counter, 'data' => $json));
        } else {
            $jsonFinal = json_encode(array('status' => 'ERROR', 'totalCount' => '0', 'data' => ''));
        }
        return $jsonFinal;
    }

    public function borraMedidaCautelar($ActuacionesDto) {
        $idActuacion = $ActuacionesDto->getIdActuacion();
        //eliminaciOn lOgica de la actuacOn
        $ActuacionesDTOtmp = new ActuacionesDTO();
        $ActuacionesDAOtmp = new ActuacionesDAO();
        $ActuacionesDTOtmp = $ActuacionesDAOtmp->updateActuaciones($ActuacionesDto);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(99, 'tblactuaciones', 'txt', 'Id eliminado lOgicamente:' . $idActuacion, '');
        return $ActuacionesDTOtmp;
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

    public function enviaCorreoMcautelares($json) {
        $objeto = json_decode($json);
        // print_r($objeto->status);
        $dt = $objeto->data[0];
        $desJuzgado = $dt->desTipoJuzgado;
        $desCarpeta = $dt->descTipoCarpeta;
        $numero = $dt->numero;
        $anio = $dt->anio;
        $sintesis = $dt->sintesis;
        $tipoNotificacion = $dt->descTipoNotificacion;
        $documento = $dt->observaciones;
        $imputados = $dt->imputados;
        $medidascautelares = $dt->medidascautelares;
        $listaImputados = '<ul>';
        foreach ($imputados as $imputado) {
            $listaImputados .= '<li><i>- Imputado: </i>' . $imputado->nombreImputado . '<br/>';
            foreach ($medidascautelares as $medidacautelar) {
                if ($imputado->idImputado == $medidacautelar->idImputadoCarpeta) {
                    $apelacion = ( $medidacautelar->Apelada == 'S' ) ? 'SI' : 'NO';
                    $listaImputados .= '<ul><li>Medida cautelar: ' . $medidacautelar->desMedidaCautelar . '<br/><ul>'
                            . '<li>Fecha inicio: ' . $medidacautelar->fechaInicio . '</li>'
                            . '<li>Fecha fin: ' . $medidacautelar->fechaTermina . '</li>'
                            . '<li>Medida apelada: ' . $apelacion . '</li>'
                            . '</ul></li></ul>';
                }
            }
            $listaImputados .= '</li>';
        }
        $listaImputados .= '</ul>';

        $respuesta = '';
        $cedula = 'cemecaedomex'; //'tmp.israel.hernandez';
        $nombrePersona = '';
        $fecha = '';
        $subject = 'MC - ' . $desJuzgado . ' - ' . $desCarpeta . ' ' . $numero . ' / ' . $anio;
        $strCuerpoEmail = '<b>* Sintesis:</b>' . $sintesis . '<br/><br/>'
                . '<b>* Tipo de Notificacion:</b>' . $tipoNotificacion . '<br/><br/>'
                . '<b>* Medidas cautelares:</b><br/>' . $listaImputados . '<br/>'
                . '<b>* Contenido del documento:</b><br/>'
                . $documento . '<br/><br/><br/>'
                . 'Fecha Registro: ' . $dt->fechaRegistro . ' - Fecha Actualizaci&oacute;n: ' . $dt->fechaActualizacion . '</br></br></br>'
                . '<a href="http://sigejupe2.pjedomex.gob.mx/" target="_blank">Ingrese al Sistema</a> para ver el detalle completo de esta(s) Medida(s) Cautelar(es). ';

        $NotificacionesController = new NotificacionesController();
        $respuesta = $NotificacionesController->generaCorreo($cedula, $nombrePersona, $fecha, $subject, $strCuerpoEmail);
        if ($respuesta) {
            $respuesta = 'OK';
        } else {
            $respuesta = 'ERROR';
        }
        error_log('Estado del envio de correo a Medida Cautelares: ' . $respuesta);
        return $respuesta;
    }

    /*     * ******************** TERMINO DE METODOS PARA MEDIDAS CAUTELARES ********************* */
    /*     * ******************** INICIO DE MEDIDAS DE PROTECCION ******************************** */

    public function mp_obtenerAuto($ActuacionesDto) {
        $tmpNumero = $ActuacionesDto->getNumero();
        $tmpAnio = $ActuacionesDto->getAnio();
        $tmpCveTipoCarpeta = $ActuacionesDto->getCveTipoCarpeta();
        $tmpCveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtencion del Id de Referencia de acuerdo a la carpeta seleccionada
        $idReferencia = $this->tipoCarpeta($ActuacionesDto);
        //$CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasjudicialesDTO);
        if ($idReferencia > 0) { //si existe el registro con los datos proporcionados
            //buscar que no este duplicado el registro en -tblactuaciones-
            $ActuacionesDAO = new ActuacionesDAO();
            $ActuacionesDto->setIdReferencia($idReferencia);
            $ActuacionesDto = $ActuacionesDAO->selectActuaciones($ActuacionesDto);
            if (is_array($ActuacionesDto)) { //el registro ya existe en la tabla, no se puede continuar
                $salida = '{"status":"ERROR","totalCount":"0","text":"EL REGISTRO YA EXISTE, VERIFIQUE."}';
            } else { //el registro no existe, se puede insertar
                //Validacion de la carpeta, obtencion de los imputados desde la carpeta judicial o de la carpeta de exhortos
                $GenericoDTO = '';
                if ($tmpCveTipoCarpeta == 7) { //carpeta de exhortos
                    $OfenfendidosexhortosDAO = new OfenfendidosexhortosDAO();
                    $OfenfendidosexhortosDTO = new OfenfendidosexhortosDTO();
                    $OfenfendidosexhortosDTO->setIdOfenfendidoExhorto($idReferencia);
                    $OfenfendidosexhortosDTO->setActivo('S');
                    $OfenfendidosexhortosDTO = $OfenfendidosexhortosDAO->selectOfenfendidosexhortos($OfenfendidosexhortosDTO);
                    $GenericoDTO = $OfenfendidosexhortosDTO;
                } else { //carpeta judicial
                    //obtencion de los imputados desde -tblimputadoscarpetas-
                    $OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
                    $OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
                    $OfendidoscarpetasDTO->setIdCarpetaJudicial($idReferencia);
                    $OfendidoscarpetasDTO->setActivo('S');
                    $OfendidoscarpetasDTO = $OfendidoscarpetasDAO->selectOfendidoscarpetas($OfendidoscarpetasDTO);
                    $GenericoDTO = $OfendidoscarpetasDTO;
                }
                if (is_array($GenericoDTO)) { //SI hay imputados relacionados
                    foreach ($GenericoDTO as $Imputadoscarpetas) {
                        $Imputadoscarpetas->setNombreMoral(($Imputadoscarpetas->getNombreMoral()));
                        $Imputadoscarpetas->setNombre(($Imputadoscarpetas->getNombre()));
                        $Imputadoscarpetas->setPaterno(($Imputadoscarpetas->getPaterno()));
                        $Imputadoscarpetas->setMaterno(($Imputadoscarpetas->getMaterno()));
                    }
                    $referencia = '[{"numero":"' . $tmpNumero . '","anio":"' . $tmpAnio . '","cveTipoCarpeta":"' . $tmpCveTipoCarpeta . '","cveJuzgado":"' . $tmpCveJuzgado . '","idReferencia":"' . $idReferencia . '"}]';
                    $dataTemp = new DtoToJson($GenericoDTO);
                    $salida = $dataTemp->toJson("RESULTADOS\",\"referencia\":" . $referencia . ",\"STATUS\":\"OK");
                } else {//no hay ofendidos
                    $salida = '{"status":"ERROR","totalCount":"0","text":"NO EXISTEN OFENDIDOS RELACIONADOS, VERIFIQUE."}';
                }
            }
        } else { //no existe relacion
            $salida = '{"status":"ERROR","totalCount":"0","text":"LOS DATOS DE RELACION NO EXISTEN, VERIFIQUE."}';
        }
        return $salida;
        //procesar los ofendidos
    }

    public function mp_guardar($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $transaccion = false;
        //guarda en tabla -tblactuaciones-
        $respuesta = '';
        $error = false;
        $errorDesc = '';
        //GUARDA DATOS EN -tblactuaciones-
        //dato fijo por ser Certificacion
        $cveTipoActuacion = $ActuacionesDto->getCveTipoActuacion();
        //definiciOn de variables para obtener los valores del contador
        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
        //obtenciOn de nUmero de la tabla contadores
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor);
        if (isset($numActuacion[0])) {
            $numActuacion = $numActuacion[0]->getNumero();
        } elseif (isset($numActuacion)) {
            $numActuacion = $numActuacion->getNumero();
        }
        //asignaciOn de variables en el DTO de las actuaciones
        $ActuacionesDto->setNumActuacion($numActuacion);
        $ActuacionesDto->setAniActuacion(date("Y"));
        //inserciOn de la ActuaciOn
        $ActuacionesDto = $this->insertActuaciones($ActuacionesDto, $proveedor);
        if ($ActuacionesDto != '') {
            $transaccion = true;
            //INSERCION EN BITACORA
            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(109, 'tblactuaciones', 'dto', $ActuacionesDto, '', $proveedor);
            //guarda en tabla -tblmedidascautelares-
            /*             * ******* insercion de la relacion actuacion-imputado ************ */
            //obtencion del id de actuacion
            $idActuacion = $ActuacionesDto[0]->getIdActuacion();
            foreach ($medidas as $medida) {
                $fechaInicio = explode('/', $medida['finicial']);
                $fechaFinal = explode('/', $medida['ffinal']);
                $MedidasproteccionesDTO = new MedidasproteccionesDTO();
                $MedidasproteccionesDAO = new MedidasproteccionesDAO();
                $MedidasproteccionesDTO->setIdActuacion($idActuacion);
                $MedidasproteccionesDTO->setIdOfendidoCarpeta($medida['idOfendidoCarpeta']);
                $MedidasproteccionesDTO->setApelada($medida['apelacion']);
                $MedidasproteccionesDTO->setFechaInicio($fechaInicio[2] . '-' . $fechaInicio[1] . '-' . $fechaInicio[0]);
                $MedidasproteccionesDTO->setFechaTermino($fechaFinal[2] . '-' . $fechaFinal[1] . '-' . $fechaFinal[0]);
                $MedidasproteccionesDTO->setCveTipoProteccion($medida['medida']);
                $MedidasproteccionesDTO->setCveAutoridadEmisora($medida['autoridad']);
                $MedidasproteccionesDTO = $MedidasproteccionesDAO->insertMedidasprotecciones($MedidasproteccionesDTO, $proveedor);
                if ($MedidasproteccionesDTO != '') {
                    $transaccion = true;
                    //se inserto un registro
                    //insercion en bitacroa
                    $bitacoraController->agregar(113, 'tblmedidasprotecciones', 'dto', $MedidasproteccionesDTO, '', $proveedor);
                    //se inserta la apelacion relacionada
                    if ($MedidasproteccionesDTO[0]->getApelada() == 'S') {
                        if (count($apelaciones) > 0) {
                            foreach ($apelaciones as $apelacion) {
                                if ($apelacion['idOfendidoCarpeta'] == $MedidasproteccionesDTO[0]->getIdOfendidoCarpeta()) {
                                    //EL IMPUTADO TIENE UNA APELACION ESTABLECIDA
                                    //se inserta la apelacion
                                    //guarda en table -tblmedidasapeladas-
                                    $MedidasproapeladasDTO = new MedidasproapeladasDTO();
                                    $MedidasproapeladasDAO = new MedidasproapeladasDAO();
                                    $MedidasproapeladasDTO->setIdMedidaProteccion($MedidasproteccionesDTO[0]->getIdMedidaProteccion());
                                    $MedidasproapeladasDTO->setCveSentido($apelacion['apelacionSentido']);
                                    $MedidasproapeladasDTO->setNumToca($apelacion['apelacionNumero']);
                                    $MedidasproapeladasDTO->setAnioToca($apelacion['apelacionAnio']);
                                    $MedidasproapeladasDTO->setCveSala($apelacion['apelacionSala']);
                                    $MedidasproapeladasDTO = $MedidasproapeladasDAO->insertMedidasproapeladas($MedidasproapeladasDTO, $proveedor);
                                    if (is_array($MedidasproapeladasDTO)) {
                                        //se inserto el registro
                                        $transaccion = true;
                                        //insercion en bitacroa
                                        $bitacoraController->agregar(117, 'tblmedidasproapeladas', 'dto', $MedidasproapeladasDTO);
                                    } else {
                                        $transaccion = false;
                                        $error = 'Ocurri&oacute; un error al tratar de insertar la Apelaci&oacute;n de la Medida de Proteccio&oacute;n.';
                                        break;
                                    }
                                }
                            } // foreach apelaciones/
                        }
                    }
                } else {
                    $transaccion = false;
                    $error = 'Ocurri&oacute; un error al tratar de insertar la Medida de Protecci&oacute;n.';
                    break;
                }
            }
        } else {
            $transaccion = false;
        }

        if ($transaccion == false) {
            $proveedor->execute("ROLLBACK");
        } elseif ($transaccion == true) {
            $proveedor->execute("COMMIT");
        }
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function mp_actualizar($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $transaccion = false;
        //actualiza la tabla actuaciones
        //Id de la actuacion
        $idActuacion = $ActuacionesDto->getIdActuacion();
        //obtencion de los datos previos
        $tmpActuacionesDto = new ActuacionesDTO();
        $tmpActuacionesDao = new ActuacionesDAO();
        $tmpActuacionesDto->setIdActuacion($idActuacion);
        $tmpActuacionesDto = $tmpActuacionesDao->selectActuaciones($tmpActuacionesDto, $proveedor);
        //asigna fecha de actualizacion
        $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        //ActualizaciOn de la ActuaciOn
        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
        if ($ActuacionesDto != '') {
            $transaccion = true;
            //INSERCION EN BITACORA
            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(110, 'tblactuaciones', 'dto', $ActuacionesDto, $tmpActuacionesDto, $proveedor);
            /*             * ******* ELIMINACION DE MEDIDAS APELADAS ******** */
            /*             * ****** Obtencion de los IDs de los imputados **** */
            $idActuacion = $ActuacionesDto[0]->getIdActuacion();
            $tmpMedidasCautelares = new MedidasproteccionesDTO();
            $MedidasCautelaresDTO = new MedidasproteccionesDTO();
            $MedidasCautelaresDAO = new MedidasproteccionesDAO();
            $MedidasCautelaresDTO->setIdActuacion($idActuacion);
            $MedidasCautelaresDTO = $MedidasCautelaresDAO->selectMedidasprotecciones($MedidasCautelaresDTO, '', $proveedor);
            if ($MedidasCautelaresDTO != '') {
                foreach ($MedidasCautelaresDTO as $MedidasCautelares) {
                    $idMedidaCautelar = $MedidasCautelares->getIdMedidaProteccion();
                    /*                     * ***** busqueda y eliminacion fisica de autosapelados ******* */
                    $MedidasapeladasDTO = new MedidasproapeladasDTO();
                    $MedidasapeladasDAO = new MedidasproapeladasDAO();
                    $MedidasapeladasDTO->setIdMedidaProteccion($idMedidaCautelar);
                    $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasproapeladas($MedidasapeladasDTO, '', $proveedor);
                    if ($MedidasapeladasDTO != '') { //si existe una apelacion relacionada al imputado
                        //bitacora
                        $bitacoraController->agregar(119, 'tblmedidasproapeladas', 'dto', $MedidasapeladasDTO);
                        //eliminacion lOgica
                        $MedidasapeladasDTO[0]->setActivo('N');
                        $MedidasapeladasDTO[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
                        $MedidasapeladasDTO = $MedidasapeladasDAO->updateMedidasproapeladas($MedidasapeladasDTO[0], $proveedor);
                        if ($MedidasapeladasDTO != '') {
                            $transaccion = true;
                        } else {
                            $transaccion = false;
                            break;
                        }
                    }
                    //bitacora
                    $bitacoraController->agregar(115, 'tblmedidasprotecciones', 'dto', $MedidasCautelares);
                    //eliminacion del imputado
                    $tmpMedidasCautelaresDTO = new MedidasproteccionesDTO();
                    $tmpMedidasCautelaresDAO = new MedidasproteccionesDAO();
                    $tmpMedidasCautelaresDTO->setIdMedidaProteccion($idMedidaCautelar);
                    $tmpMedidasCautelaresDTO->setActivo('N');
                    $tmpMedidasCautelaresDTO = $tmpMedidasCautelaresDAO->updateMedidasprotecciones($tmpMedidasCautelaresDTO, $proveedor);
                    if ($tmpMedidasCautelaresDTO != '') {
                        $transaccion = true;
                    } else {
                        $transaccion = false;
                        break;
                    }
                } //fin foreach
            }
            /*             * ******** INSERCION DE LOS NUEVOS DATOS ************ */
            //obtencion del id de actuacion
            foreach ($medidas as $medida) {
                $fechaInicio = explode('/', $medida['finicial']);
                $fechaFinal = explode('/', $medida['ffinal']);
                $MedidasproteccionesDTO = new MedidasproteccionesDTO();
                $MedidasproteccionesDAO = new MedidasproteccionesDAO();
                $MedidasproteccionesDTO->setIdActuacion($idActuacion);
                $MedidasproteccionesDTO->setIdOfendidoCarpeta($medida['idOfendidoCarpeta']);
                //busca en la tabla un registro con los datos de actuacion e id de imputado
                $MedidasproteccionesDTO = $MedidasproteccionesDAO->selectMedidasprotecciones($MedidasproteccionesDTO, '', $proveedor);
                if ($MedidasproteccionesDTO != '') {
                    //si existe un registro, se actualiza activo a 'S' y tambien el resto de los campos
                    //asignacion del resto de las variables
                    $MedidasproteccionesDTO = $MedidasproteccionesDTO[0];
                    $MedidasproteccionesDTO->setActivo('S');
                    $MedidasproteccionesDTO->setApelada($medida['apelacion']);
                    $MedidasproteccionesDTO->setFechaInicio($fechaInicio[2] . '-' . $fechaInicio[1] . '-' . $fechaInicio[0]);
                    $MedidasproteccionesDTO->setFechaTermino($fechaFinal[2] . '-' . $fechaFinal[1] . '-' . $fechaFinal[0]);
                    $MedidasproteccionesDTO->setCveTipoProteccion($medida['medida']);
                    $MedidasproteccionesDTO->setCveAutoridadEmisora($medida['autoridad']);
                    $MedidasproteccionesDTO = $MedidasproteccionesDAO->updateMedidasprotecciones($MedidasproteccionesDTO, $proveedor);
                } else {
                    //no existe el registro, se inserta
                    //asignacion del resto de las variables
                    $MedidasproteccionesDTO = new MedidasproteccionesDTO();
                    $MedidasproteccionesDAO = new MedidasproteccionesDAO();
                    $MedidasproteccionesDTO->setIdActuacion($idActuacion);
                    $MedidasproteccionesDTO->setIdOfendidoCarpeta($medida['idOfendidoCarpeta']);
                    $MedidasproteccionesDTO->setActivo('S');
                    $MedidasproteccionesDTO->setApelada($medida['apelacion']);
                    $MedidasproteccionesDTO->setFechaInicio($fechaInicio[2] . '-' . $fechaInicio[1] . '-' . $fechaInicio[0]);
                    $MedidasproteccionesDTO->setFechaTermino($fechaFinal[2] . '-' . $fechaFinal[1] . '-' . $fechaFinal[0]);
                    $MedidasproteccionesDTO->setCveTipoProteccion($medida['medida']);
                    $MedidasproteccionesDTO->setCveAutoridadEmisora($medida['autoridad']);
                    $MedidasproteccionesDTO = $MedidasproteccionesDAO->insertMedidasprotecciones($MedidasproteccionesDTO, $proveedor);
                }
                if ($MedidasproteccionesDTO != '') {
                    $transaccion = true;
                    //se inserto un registro
                    //insercion en bitacroa
                    $bitacoraController->agregar(113, 'tblmedidasprotecciones', 'dto', $MedidasproteccionesDTO, '', $proveedor);
                    //se inserta la apelacion relacionada
                    if ($MedidasproteccionesDTO[0]->getApelada() == 'S') {
                        if (count($apelaciones) > 0) {
                            foreach ($apelaciones as $apelacion) {
                                if ($apelacion['idOfendidoCarpeta'] == $MedidasproteccionesDTO[0]->getIdOfendidoCarpeta()) {
                                    //EL IMPUTADO TIENE UNA APELACION ESTABLECIDA
                                    //se inserta la apelacion
                                    //guarda en table -tblmedidasapeladas-
                                    $MedidasapeladasDTO = new MedidasproapeladasDTO();
                                    $MedidasapeladasDAO = new MedidasproapeladasDAO();
                                    $MedidasapeladasDTO->setIdMedidaProteccion($MedidasproteccionesDTO[0]->getIdMedidaProteccion());
                                    //consulta la tabla para encontrar registros 
                                    $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasproapeladas($MedidasapeladasDTO, '', $proveedor);
                                    if ($MedidasapeladasDTO != '' && is_array($MedidasapeladasDTO)) {
                                        //existe el registro, lo actualiza
                                        //asignacion del resto de las variables
                                        $MedidasapeladasDTO = $MedidasapeladasDTO[0];
                                        $MedidasapeladasDTO->setActivo('S');
                                        $MedidasapeladasDTO->setCveSentido($apelacion['apelacionSentido']);
                                        $MedidasapeladasDTO->setNumToca($apelacion['apelacionNumero']);
                                        $MedidasapeladasDTO->setAnioToca($apelacion['apelacionAnio']);
                                        $MedidasapeladasDTO->setCveSala($apelacion['apelacionSala']);
                                        $MedidasapeladasDTO->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $MedidasapeladasDTO = $MedidasapeladasDAO->updateMedidasproapeladas($MedidasapeladasDTO, $proveedor);
                                    } else {
                                        //no existe registro, lo inserta
                                        //asignacion del resto de las variables
                                        $MedidasapeladasDTO = new MedidasproapeladasDTO();
                                        $MedidasapeladasDAO = new MedidasproapeladasDAO();
                                        $MedidasapeladasDTO->setIdMedidaProteccion($MedidasproteccionesDTO[0]->getIdMedidaProteccion());
                                        $MedidasapeladasDTO->setActivo('S');
                                        $MedidasapeladasDTO->setCveSentido($apelacion['apelacionSentido']);
                                        $MedidasapeladasDTO->setNumToca($apelacion['apelacionNumero']);
                                        $MedidasapeladasDTO->setAnioToca($apelacion['apelacionAnio']);
                                        $MedidasapeladasDTO->setCveSala($apelacion['apelacionSala']);
                                        $MedidasapeladasDTO = $MedidasapeladasDAO->insertMedidasproapeladas($MedidasapeladasDTO, $proveedor);
                                    }
                                    if (is_array($MedidasapeladasDTO)) {
                                        //se inserto el registro
                                        $transaccion = true;
                                        //insercion en bitacroa
                                        $bitacoraController->agregar(117, 'tblmedidasproapeladas', 'dto', $MedidasapeladasDTO, '', $proveedor);
                                    } else {
                                        $transaccion = false;
                                        $error = 'Ocurri&oacute;n un error al tratar de insertar la Apelaci&oacute;n de la Medida de Protecci&oacute;n.';
                                    }
                                }
                            } // foreach apelacion/
                        }
                    }
                } else {
                    $transaccion = false;
                    $error = 'Ocurri&oacute; un error al tratar de insertar la Medida de Protecci&oacute;n.';
                }
            } //foreach medidas/
        } else {
            $transaccion = false;
        }
        if ($transaccion == false) {
            $proveedor->execute("ROLLBACK");
        } elseif ($transaccion == true) {
            $proveedor->execute("COMMIT");
        }
        $proveedor->close();
        return $ActuacionesDto;
    }

    public function mp_buscar($ActuacionesDto, $param) {
        //obtiene los datos de la actuacion
        $proveedor = null;
        $json = '';
        //definicion de el numero de pagina y los renglones por cada una
        $page = ( isset($param['pag']) ? $param['pag'] : 1 );
        $numRows = ( isset($param['cantxPag']) ? $param['cantxPag'] : 999999 );
        $position = ( $page - 1 ) * $numRows;
        //obtencion de las actuaciones. obtiene 1 solo registro
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, " ORDER BY fechaRegistro DESC ", $param);
        $totalRows = count($ActuacionesDto);
        $counter = 0;
        $content = false;
        //recorre los registros en busca de certificaciones
        if ($ActuacionesDto != '' && is_array($ActuacionesDto)) {
            foreach ($ActuacionesDto as $Actuaciones) {
                //El ID de actuaciOn de cada registro se valida en la tabla -tblautosimputados-
                $idActuacion = $Actuaciones->getIdActuacion();
                $MedidascautelaresDto = new MedidasproteccionesDTO();
                $MedidascautelaresDao = new MedidasproteccionesDAO();
                $MedidascautelaresDto->setIdActuacion($idActuacion);
                $MedidascautelaresDto->setActivo('S');
                $MedidascautelaresDto = $MedidascautelaresDao->selectMedidasprotecciones($MedidascautelaresDto, $proveedor);
                //si la consulta de -tblmedidascautelares- trae informaciOn
                if ($MedidascautelaresDto != '' && is_array($MedidascautelaresDto)) { //la actuacion tiene datos
                    //obtiene la descripcion del TipoCarpeta
                    $TipoCarpetaDTO = new TiposcarpetasDTO();
                    $TipoCarpetaDAO = new TiposcarpetasDAO();
                    $TipoCarpetaDTO->setActivo('S');
                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
                    $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();
                    $content = true;
                    //validacion de vinculaciOn con la tabla -tblautosimputados-
                    $jsonImp = '';
                    if (is_array($MedidascautelaresDto)) {
                        foreach ($MedidascautelaresDto as $MedidaCautelar) {
                            $jsonImp .= '{"idMedidaProteccion":' . $this->toText($MedidaCautelar->getIdMedidaProteccion()) . ",";
                            $jsonImp .= '"idActuacion":' . $this->toText($MedidaCautelar->getIdActuacion()) . ",";
                            $jsonImp .= '"idOfendidoCarpeta":' . $this->toText($MedidaCautelar->getIdOfendidoCarpeta()) . ",";
                            $jsonImp .= '"fechaInicio":' . $this->toText($MedidaCautelar->getFechaInicio()) . ",";
                            $jsonImp .= '"fechaTermina":' . $this->toText($MedidaCautelar->getFechaTermino()) . ",";
                            $jsonImp .= '"cveTipoMedidaProteccion":' . $this->toText($MedidaCautelar->getCveTipoProteccion()) . ",";
                            $jsonImp .= '"cveAutoridadEmisora":' . $this->toText($MedidaCautelar->getCveAutoridadEmisora()) . ",";
                            $jsonImp .= '"Apelada":' . $this->toText($MedidaCautelar->getApelada()) . ",";
                            //datos de la apelacion
                            $jsonImp .= '"autosapelados":[{';
                            $tma_idMedidaApelada = '';
                            $tma_idMedidaCautelar = '';
                            $tma_cveSentido = 0;
                            $tma_numToca = '';
                            $tma_numAnio = '';
                            $tma_cveSala = 0;
                            $tma_fechaRegistro = '';
                            $tma_fechaActualizacion = '';
                            if ($MedidaCautelar->getApelada() == 'S') {
                                //obtiene los datos de la apelacion en -tblautosapelados-
                                $MedidasapeladasDTO = new MedidasproapeladasDTO();
                                $MedidasapeladasDAO = new MedidasproapeladasDAO();
                                //asigan el Id del -MedidaCautelar-
                                $MedidasapeladasDTO->setIdMedidaProteccion($MedidaCautelar->getIdMedidaProteccion());
                                //busca en la tabla 
                                $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasproapeladas($MedidasapeladasDTO);
                                if ($MedidasapeladasDTO != '' && is_array($MedidasapeladasDTO)) {
                                    $tma_idMedidaApelada = $MedidasapeladasDTO[0]->getIdMedidaProApelada();
                                    $tma_idMedidaCautelar = $MedidasapeladasDTO[0]->getIdMedidaProteccion();
                                    $tma_cveSentido = $MedidasapeladasDTO[0]->getCveSentido();
                                    $tma_numToca = $MedidasapeladasDTO[0]->getNumToca();
                                    $tma_numAnio = $MedidasapeladasDTO[0]->getAnioToca();
                                    $tma_cveSala = $MedidasapeladasDTO[0]->getCveSala();
                                    $tma_fechaRegistro = $MedidasapeladasDTO[0]->getFechaRegistro();
                                    $tma_fechaActualizacion = $MedidasapeladasDTO[0]->getFechaActualizacion();
                                }
                            }
                            $jsonImp .= '"idMedidaProApelada":' . $this->toText($tma_idMedidaApelada) . ",";
                            $jsonImp .= '"idMedidaProteccion":' . $this->toText($tma_idMedidaCautelar) . ",";
                            $jsonImp .= '"cveSentido":' . $this->toText($tma_cveSentido) . ",";
                            $jsonImp .= '"numToca":' . $this->toText($tma_numToca) . ",";
                            $jsonImp .= '"numAnio":' . $this->toText($tma_numAnio) . ",";
                            $jsonImp .= '"cveSala":' . $this->toText($tma_cveSala) . ",";
                            $jsonImp .= '"fechaRegistro":' . $this->toText($tma_fechaRegistro) . ",";
                            $jsonImp .= '"fechaActualizacion":' . $this->toText($tma_fechaActualizacion) . "";

                            $jsonImp .= '}]},';
                        }
                    }
                    //eliminacion de la ultima ','
                    $tmpJson = rtrim($jsonImp, ",") . ']';

                    //generacion del nuevo JSON con datos cruzados
                    $json .= '{';
                    //datos de la actuacion
                    $json .= '"idActuacion":' . $this->toText($Actuaciones->getIdActuacion()) . ",";
                    $json .= '"numActuacion":' . $this->toText($Actuaciones->getNumActuacion()) . ",";
                    $json .= '"aniActuacion":' . $this->toText($Actuaciones->getAniActuacion()) . ",";
                    $json .= '"cveTipoActuacion":' . $this->toText($Actuaciones->getCveTipoActuacion()) . ",";
                    $json .= '"idReferencia":' . $this->toText($Actuaciones->getIdReferencia()) . ",";
                    $json .= '"numero":' . $this->toText($Actuaciones->getNumero()) . ",";
                    $json .= '"anio":' . $this->toText($Actuaciones->getAnio()) . ",";
                    $json .= '"cveTipocarpeta":' . $this->toText($Actuaciones->getCveTipocarpeta()) . ",";
                    $json .= '"cveJuzgado":' . $this->toText($Actuaciones->getCveJuzgado()) . ",";
                    $json .= '"sintesis":"' . $Actuaciones->getSintesis() . '",';
                    $json .= '"observaciones":"' . $Actuaciones->getObservaciones() . '",';
                    $json .= '"cveUsuario":' . $this->toText($Actuaciones->getCveUsuario()) . ",";
                    $json .= '"activo":' . $this->toText($Actuaciones->getActivo()) . ",";
                    $json .= '"fechaRegistro":' . $this->toText($Actuaciones->getFechaRegistro()) . ",";
                    $json .= '"fechaActualizacion":' . $this->toText($Actuaciones->getFechaActualizacion()) . ",";
                    $json .= '"cveTipoNotificacion":' . $this->toText($Actuaciones->getCveTipoNotificacion()) . ",";
                    $json .= '"descTipoCarpeta":' . $this->toText($descTipoCarpeta) . ",";
                    //datos de -autosimputados-
                    $json .= '"medidasproteccion":[';
                    $json .= $tmpJson;
                    $json .= '},';
                    $counter++;
                }
            }
        }
        if ($content) {
            //if($json != ''){
            //elimina la ultima ',' y da formato al JSON
            $jsonData = '[' . rtrim($json, ",") . ']';
            $json = '{"status":"OK","totalCount":"' . $counter . '","data":' . $jsonData . '}';
        } else {
            $json = '{"status":"ERROR","totalCount":"0","data":[{}]}';
        }
        //echo $json;
        return $json;
    }

    public function mp_borrar($ActuacionesDto) {
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $transaccion = false;
        $idActuacion = $ActuacionesDto->getIdActuacion();
        //eliminaciOn lOgica de la actuacOn
        $ActuacionesDTOtmp = new ActuacionesDTO();
        $ActuacionesDAOtmp = new ActuacionesDAO();
        $ActuacionesDTOtmp = $ActuacionesDAOtmp->updateActuaciones($ActuacionesDto, $proveedor);
        if ($ActuacionesDTOtmp != '') {
            $transaccion = true;
        }
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(111, 'tblactuaciones', 'txt', 'Id eliminado lOgicamente:' . $idActuacion, '', $proveedor);
        if ($transaccion == false) {
            $proveedor->execute("ROLLBACK");
        } elseif ($transaccion == true) {
            $proveedor->execute("COMMIT");
        }
        $proveedor->close();
        return $ActuacionesDTOtmp;
    }

    /*     * ******************** TERMINO DE MEDIDAS DE PROTECCION ******************************* */

//*****************************************************************************************************************
    public function consultarMedidas($ActuacionesDto, $param, $cveMedidaCaut) {

        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

        //public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " ORDER BY idActuacion DESC ", $param, null);

        $juzgados = new JuzgadoCliente();
        $salas = json_decode($juzgados->getJuzgadoInstancia('14,17'));

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
                $json .= '"sintesis":"' . $actuacionDto->getSintesis() . '",';
                //$json .= '"observaciones":"' . $actuacionDto->getObservaciones() . "\",";
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
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaActualizacion()))) . ",";

                $medidasCatDTO = new MedidascautelaresDTO();
                $medidasCatDAO = new MedidascautelaresDAO();
                $medidasCatDTO->setIdActuacion($actuacionDto->getIdActuacion());
                $medidasCatDTO->setActivo("S");

                $medidasCatDTO = $medidasCatDAO->selectMedidascautelares($medidasCatDTO);

                $json .= '"medidaCautelar": [';
                $y = 1;
                if ($medidasCatDTO != "") {
                    foreach ($medidasCatDTO as $medida) {
                        if ($actuacionDto->getIdActuacion() == $medida->getIdActuacion()) {
                            $json .= '{';
                            $json .= '"idMedidaCautelar":' . json_encode(utf8_encode($medida->getIdMedidaCautelar())) . ",";
                            $json .= '"idMedidasapeladas": [';
                            //********************** medidas apeladas ************************************************************************************************
                            if ($medida->getApelada() == "S") {
                                $MedidasapeladasDTO = new MedidasapeladasDTO();
                                $MedidasapeladasDAO = new MedidasapeladasDAO();
                                $MedidasapeladasDTO->setIdMedidaCautelar($medida->getIdMedidaCautelar());
                                $MedidasapeladasDTO = $MedidasapeladasDAO->selectMedidasapeladas($MedidasapeladasDTO);
                                if ($MedidasapeladasDTO != "") {
                                    foreach ($MedidasapeladasDTO as $medidaAp) {
                                        $json .= '{';
                                        $json .= '"idMedidaApelada":' . json_encode(utf8_encode($medidaAp->getIdMedidaApelada())) . ",";
                                        $json .= '"idMedidaCautelar":' . json_encode(utf8_encode($medidaAp->getIdMedidaCautelar())) . ",";
                                        $json .= '"cveSentido":' . json_encode(utf8_encode($medidaAp->getCveSentido())) . ",";

                                        $sentidosResolDTO = new SentidosresolucionesDTO();
                                        $sentidosResolDAO = new SentidosresolucionesDAO();
                                        $sentidosResolDTO->setcveSentido($medidaAp->getCveSentido());
                                        $sentidosResolDTO = $sentidosResolDAO->selectSentidosresoluciones($sentidosResolDTO);

                                        if ($sentidosResolDTO != "") {
                                            $json .= '"desSentido":' . json_encode(utf8_encode($sentidosResolDTO[0]->getDesSentido())) . ",";
                                        }

                                        $json .= '"NumToca":' . json_encode(utf8_encode($medidaAp->getNumToca())) . ",";
                                        $json .= '"AnioToca":' . json_encode(utf8_encode($medidaAp->getAnioToca())) . ",";
                                        $json .= '"CveSala":' . json_encode(utf8_encode($medidaAp->getCveSala())) . ",";
                                        foreach ($salas->data as $datos) {
                                            if ($medidaAp->getCveSala() == $datos->idJuzgado) {
                                                //echo "<".$datos->desJuz.">";
                                                $json .= '"desSala":' . json_encode(utf8_encode($datos->desJuz)) . ",";
                                                break;
                                            }
                                        }

                                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($medidaAp->getFechaRegistro())) . "";
                                        $json .= '}';
                                    }
                                }
                            }
                            $json .= '],';
                            //********************** medidas apeladas ************************************************************************************************

                            $json .= '"idActuacion":' . json_encode(utf8_encode($medida->getIdActuacion())) . ",";
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($medida->getIdImputadoCarpeta())) . ",";
                            //************* nombre de imputado determina si viene de carpeta judicial o de exhorto **************************************************

                            switch ($actuacionDto->getCveTipoCarpeta()) {
                                case "7":
                                    $ImputadosExhortosDTO = new ImputadosexhortosDTO();
                                    $ImputadosExhortosDAO = new ImputadosexhortosDAO();
                                    $ImputadosExhortosDTO->setIdImputadoExhorto($medida->getIdImputadoCarpeta());
                                    $ImputadosExhortosDTO->setActivo('S');
                                    $ImputadosExhortosDTO = $ImputadosExhortosDAO->selectImputadosexhortos($ImputadosExhortosDTO);
                                    if ($ImputadosExhortosDTO != "") {
                                        $json .= '"idImputado": ' . json_encode(utf8_encode($ImputadosExhortosDTO[0]->getIdImputadoExhorto())) . ",";
                                        if ($ImputadosExhortosDTO[0]->getCveTipoPersona() == "1") {
                                            $json .= '"Nombre": ' . json_encode(utf8_encode($ImputadosExhortosDTO[0]->getNombre() . " " . $ImputadosExhortosDTO[0]->getPaterno() . " " . $ImputadosExhortosDTO[0]->getMaterno())) . ",";
                                        } else {
                                            $json .= '"Nombre": ' . json_encode(utf8_encode($ImputadosExhortosDTO[0]->getNombreMoral() . " * ")) . ",";
                                        }
                                    } else {
                                        $json .= '"Nombre": "N/A",';
                                    }
                                    break;
                                default :
                                    $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
                                    $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
                                    $ImputadosCarpetasDTO->setIdImputadoCarpeta($medida->getIdImputadoCarpeta());
                                    //$ImputadosCarpetasDTO->setActivo('S');
                                    $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
                                    //print_r($ImputadosCarpetasDTO);
                                    if ($ImputadosCarpetasDTO != "") {
                                        $json .= '"idImputado": ' . json_encode(utf8_encode($ImputadosCarpetasDTO[0]->getIdImputadoCarpeta())) . ",";
                                        if ($ImputadosCarpetasDTO[0]->getCveTipoPersona() == "1") {
                                            $json .= '"Nombre": ' . json_encode(utf8_encode($ImputadosCarpetasDTO[0]->getNombre() . " " . $ImputadosCarpetasDTO[0]->getPaterno() . " " . $ImputadosCarpetasDTO[0]->getMaterno())) . ",";
                                        } else {
                                            $json .= '"Nombre": ' . json_encode(utf8_encode($ImputadosCarpetasDTO[0]->getNombreMoral() . " * ")) . ",";
                                        }
                                    }
                                    break;
                            };


                            //************* nombre del imputado**************************************************
                            $json .= '"Apelada": ' . json_encode(utf8_encode($medida->getApelada())) . ",";
                            $fechaRegistro = $medida->getFechaInicio();
                            $tmpFecha = explode(' ', $fechaRegistro);
                            $fecha = explode('-', $tmpFecha[0]);
                            $fechaInicio = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                            $json .= '"fechaInicio":' . json_encode($fechaInicio) . ",";

                            $fechaRegistro = $medida->getFechaTermina();
                            $tmpFecha = explode(' ', $fechaRegistro);
                            $fecha = explode('-', $tmpFecha[0]);
                            $fechaTermino = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                            $json .= '"fechaTermina":' . json_encode($fechaTermino) . ",";

                            //$json .= '"fechaFechaTermina":' . json_encode(utf8_encode($validacion->mysqlToNormal($medida->getFechaTermina()))) . ",";
                            $json .= '"cveTipoMedidaCautelar": ' . json_encode(utf8_encode($medida->getCveTipoMedidaCautelar())) . ",";

                            //************ descripcion medida cautelar********************************************
                            $tiposMedCatDTO = new TiposmedidascautelaresDTO;
                            $tiposMedCatDAO = new TiposmedidascautelaresDAO;
                            $tiposMedCatDTO->setCveTipoMedidaCautelar($medida->getCveTipoMedidaCautelar());
                            $tiposMedCatDTO->setActivo("S");
                            $tiposMedCatDTO = $tiposMedCatDAO->selectTiposmedidascautelares($tiposMedCatDTO);
                            if ($tiposMedCatDTO != "") {
                                $json .= '"desTipoMedidaCautelar": ' . json_encode(utf8_encode($tiposMedCatDTO[0]->getDesTipoMedidaCautelar())) . ",";
                            }

                            //************* descripcion medida cautelar*****************************************
                            //************* descripcion autoridad emisora *****************************************

                            $autEmisaraDTO = new AutoridadesemisorasDTO();
                            $autEmisaraDAO = new AutoridadesemisorasDAO();
                            $autEmisaraDTO->setCveAutoridadEmisora($medida->getCveAutoridadEmisora());
                            $autEmisaraDTO->setActivo("S");
                            $autEmisaraDTO = $autEmisaraDAO->selectAutoridadesemisoras($autEmisaraDTO);
                            if ($autEmisaraDTO != "") {
                                $json .= '"desAutoridadEmisora": ' . json_encode(utf8_encode($autEmisaraDTO[0]->getDesAutoridadEmisora())) . ",";
                            }

                            //************* descripcion autoridad emisora *****************************************

                            $json .= '"cveAutoridadEmisora": ' . json_encode(utf8_encode($medida->getCveAutoridadEmisora())) . "";
                            $json .= '}';

                            $y++;
                            if ($y <= count($medidasCatDTO)) {
                                $json .= ",";
                            }
                        }
                    }
                }
                // termina de recorrer medidas cautelares

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

            return $json;
        } else {
            return "";
        }
    }

    public function imputadosMedidaCautelar($ActuacionesDto) {
        /*
         * Proceso:
         * 1 Obtencion de los id's de Actuación de -tblactuaciones- a través de idReferencia y activo 'S'
         * 2 Obtencion de idActuacion y idImputadoCarpeta de -tblmedidascautelares- a través de los ids del punto 1
         * 3 Obtencion del idActuacion y fechaRegistro de -tblactuaciones- a través de los ids de Actuación del punto 2
         * 4 Unir los datos del punto 2 con el punto 3
         */

        $proveedor = new Proveedor('mysql', 'sigejupe'); //sigejupe
        $proveedor->connect();

        $ActuacionesDAO = new ActuacionesDAO();
        $ActuacionesDAO2 = new ActuacionesDAO();
        $ActuacionesDTOp1 = new ActuacionesDTO();
        $ActuacionesDTOp3 = new ActuacionesDTO();
        $MedidascautelaresDTO = new MedidascautelaresDTO();
        $MedidascautelaresDAO = new MedidascautelaresDAO();

        $idsActuacionesP1 = '';
        $idsActuacionesP2 = '';
        $idsActuacionesP3 = '';

        $respuesta = array('imputadosMC' => '');
        $respuestaMC = array();
        $idActuacionActivo = $ActuacionesDto->getIdActuacion();
        $ActuacionesDto->setIdActuacion('');

        //***** P1
        $ActuacionesDTOp1->setIdReferencia($ActuacionesDto->getIdReferencia());
        $ActuacionesDTOp1->setActivo('S');
        $ActuacionesDTOp1 = $ActuacionesDAO->selectActuaciones($ActuacionesDTOp1, $proveedor, '');
        if ($ActuacionesDTOp1 != '') {
            foreach ($ActuacionesDTOp1 as $Actuaciones) {
                $idsActuacionesP1 .= $Actuaciones->getIdActuacion() . ',';
            }
            $idsActuacionesP1 = substr($idsActuacionesP1, 0, strlen($idsActuacionesP1) - 1);
        }

        //***** P2
        $MedidascautelaresDTO->setActivo('S');
        $MedidascautelaresDTO = $MedidascautelaresDAO->selectMedidascautelares($MedidascautelaresDTO, ' AND idActuacion in (' . $idsActuacionesP1 . ') AND idActuacion!=' . $idActuacionActivo, $proveedor);
        if ($MedidascautelaresDTO != '') {
            foreach ($MedidascautelaresDTO as $Medidascautelares) {
                $idsActuacionesP2 .= $Medidascautelares->getIdActuacion() . ',';
                $respuestaMC[] = array('idActuacion' => $Medidascautelares->getIdActuacion(),
                    'idImputado' => $Medidascautelares->getIdImputadoCarpeta(),
                    'fecha' => '');
            }
            $idsActuacionesP2 = substr($idsActuacionesP2, 0, strlen($idsActuacionesP2) - 1);
        }

        //***** P3
        $ActuacionesDTOp3->setActivo('S');
        $ActuacionesDTOp3 = $ActuacionesDAO2->selectActuaciones($ActuacionesDTOp3, $proveedor, ' AND idActuacion in (' . $idsActuacionesP2 . ')');
        if ($ActuacionesDTOp3 != '') {
            foreach ($ActuacionesDTOp3 as $Actuaciones) {
                $contador = 0;
                foreach ($respuestaMC as $respuestaM) {
                    if ($Actuaciones->getIdActuacion() == $respuestaM['idActuacion']) {
                        $tmpFecha = explode(' ', $Actuaciones->getFechaRegistro());
                        $fecha = explode('-', $tmpFecha[0]);
                        $fecha = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] . ' ' . $tmpFecha[1];
                        $respuestaMC[$contador]['fecha'] = $fecha;
                    }
                    $contador++;
                }
            }
        }
        $proveedor->close();
        $respuesta['imputadosMC'] = $respuestaMC;
        return json_encode($respuesta);
    }

    /*     * ****************** TERMINO DE CONSULTA DE MEDIDAS CAUTELARES ************************** */

    /*     * *********************** CONSULTA DE MEDIDAS DE PROTECCIÓN **************************** */

    public function consultarMedidasProteccion($ActuacionesDto, $param, $cveMedidaCaut) {

        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

        //public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " ORDER BY idActuacion DESC ", $param, null);

        $juzgados = new JuzgadoCliente();
        $salas = json_decode($juzgados->getJuzgadoInstancia('14,17'));
        //print_r($salas);
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
                $json .= '"sintesis":"' . $actuacionDto->getSintesis() . '",';
                //$json .= '"observaciones":"' . $actuacionDto->getObservaciones() . "\",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($actuacionDto->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($actuacionDto->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($actuacionDto->getCveTipoResolucion())) . ",";
                if ($actuacionDto->getCveTipoResolucion() != "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolCtrl = new TiposresolucionesController();
                    $tipoResolDTO->setCveTipoResolucion($actuacionDto->getCveTipoResolucion());
                    $tipoResolDTO = $tipoResolCtrl->selectTiposresoluciones($tipoResolDTO);

                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion())) . ",";
                }
                $json .= '"cveTipoNotificacion":' . json_encode(utf8_encode($actuacionDto->getCveTipoNotificacion())) . ",";
                if ($actuacionDto->getCveTipoNotificacion() != "") {
                    $tipoNotifDTO = new TiposnotificacionesDTO();
                    $tipoNotifCtrl = new TiposnotificacionesController();
                    $tipoNotifDTO->setCveTipoNotificacion($actuacionDto->getCveTipoNotificacion());
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
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($actuacionDto->getFechaActualizacion()))) . ",";

                $medidasProteccionesDTO = new MedidasProteccionesDTO();
                $medidasProteccionesDAO = new MedidasProteccionesDAO();
                $medidasProteccionesDTO->setIdActuacion($actuacionDto->getIdActuacion());
                $medidasProteccionesDTO->setActivo("S");

                $medidasProteccionesDTO = $medidasProteccionesDAO->selectMedidasprotecciones($medidasProteccionesDTO);

                $json .= '"medidaProteccion": [';
                $y = 1;
                foreach ($medidasProteccionesDTO as $medida) {
                    if ($actuacionDto->getIdActuacion() == $medida->getIdActuacion()) {//si el idActuacion de tblaactuaciones es el mismo que en protecciones, entonces...
                        $json .= '{';
                        $json .= '"idMedidaProteccion":' . json_encode(utf8_encode($medida->getIdMedidaProteccion())) . ",";
                        $json .= '"fechaInicio":' . json_encode(utf8_encode($medida->getFechaInicio())) . ",";
                        $json .= '"fechaTermino":' . json_encode(utf8_encode($medida->getFechaTermino())) . ",";
                        $json .= '"MedidasProapeladas": [';
                        //********************** medidas apeladas ************************************************************************************************
                        if ($medida->getApelada() == "S") {
                            $MedidasproapeladasDTO = new MedidasproapeladasDTO();
                            $MedidasproapeladasDAO = new MedidasproapeladasDAO();
                            $MedidasproapeladasDTO->setIdMedidaProteccion($medida->getIdMedidaProteccion());
                            $MedidasproapeladasDTO = $MedidasproapeladasDAO->selectMedidasproapeladas($MedidasproapeladasDTO);
                            if ($MedidasproapeladasDTO != "") {
                                foreach ($MedidasproapeladasDTO as $medidaAp) {
                                    $json .= '{';
                                    $json .= '"idMedidaProApelada":' . json_encode(utf8_encode($medidaAp->getIdMedidaProApelada())) . ",";
                                    $json .= '"idMedidaProteccion":' . json_encode(utf8_encode($medidaAp->getIdMedidaProteccion())) . ",";
                                    $json .= '"cveSentido":' . json_encode(utf8_encode($medidaAp->getCveSentido())) . ",";

                                    $sentidosResolDTO = new SentidosresolucionesDTO();
                                    $sentidosResolDAO = new SentidosresolucionesDAO();
                                    $sentidosResolDTO->setcveSentido($medidaAp->getCveSentido());
                                    $sentidosResolDTO = $sentidosResolDAO->selectSentidosresoluciones($sentidosResolDTO);

                                    if ($sentidosResolDTO != "") {
                                        $json .= '"desSentido":' . json_encode(utf8_encode($sentidosResolDTO[0]->getDesSentido())) . ",";
                                    }

                                    $json .= '"NumToca":' . json_encode(utf8_encode($medidaAp->getNumToca())) . ",";
                                    $json .= '"AnioToca":' . json_encode(utf8_encode($medidaAp->getAnioToca())) . ",";
                                    $json .= '"CveSala":' . json_encode(utf8_encode($medidaAp->getCveSala())) . ",";
                                    foreach ($salas->data as $datos) {
                                        if ($medidaAp->getCveSala() == $datos->idJuzgado) {
                                            //echo "desSala: ".$datos->desJuz."---";
                                            $json .= '"desSala":' . json_encode(utf8_encode($datos->desJuz)) . ",";
                                            break;
                                        }
                                    }

                                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($medidaAp->getFechaRegistro())) . "";
                                    $json .= '}';
                                }
                            }
                        }
                        $json .= '],';
                        //********************** Medidas ProApeladas ************************************************************************************************

                        $json .= '"idActuacion":' . json_encode(utf8_encode($medida->getIdActuacion())) . ",";
                        $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($medida->getIdOfendidoCarpeta())) . ",";
                        //************* con el IdOfendido consulto en tblofendidosCarpetas**************************************************

                        $OfendidosCarpetasDTO = new OfendidoscarpetasDTO();
                        $OfendidosCarpetasDAO = new OfendidoscarpetasDAO();
                        $OfendidosCarpetasDTO->setIdOfendidoCarpeta($medida->getIdOfendidoCarpeta());
                        //$OfendidosCarpetasDTO->setActivo('S');
                        $OfendidosCarpetasDTO = $OfendidosCarpetasDAO->selectOfendidoscarpetas($OfendidosCarpetasDTO);
                        //print_r($OfendidosCarpetasDTO);
                        if ($OfendidosCarpetasDTO != "") {
                            if ($OfendidosCarpetasDTO[0]->getCveTipoPersona() == "1") {
                                $json .= '"Nombre": ' . json_encode(utf8_encode($OfendidosCarpetasDTO[0]->getNombre() . " " . $OfendidosCarpetasDTO[0]->getPaterno() . " " . $OfendidosCarpetasDTO[0]->getMaterno())) . ",";
                            } else {
                                $json .= '"Nombre": ' . json_encode(utf8_encode($OfendidosCarpetasDTO[0]->getNombreMoral() . " * ")) . ",";
                            }
                        } else {
                            $json .= '"Nombre": "",';
                        }

                        //$json .= '"Nombre": "Sin nombre",';
                        //************* nombre del imputado**************************************************
                        $json .= '"Apelada": ' . json_encode(utf8_encode($medida->getApelada())) . ",";

                        $fechaRegistro = $medida->getFechaInicio();
                        $tmpFecha = explode(' ', $fechaRegistro);
                        $fecha = explode('-', $tmpFecha[0]);
                        $fechaInicio = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                        $json .= '"fechaInicio":' . json_encode($fechaInicio) . ",";

                        $fechaRegistro = $medida->getFechaTermino();
                        $tmpFecha = explode(' ', $fechaRegistro);
                        $fecha = explode('-', $tmpFecha[0]);
                        $fechaTermino = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                        $json .= '"fechaTermino":' . json_encode($fechaTermino) . ",";

                        //$json .= '"fechaInicio":' . json_encode(utf8_encode($validacion->mysqlToNormal($medida->getFechaInicio()))) . ",";
                        //$json .= '"fechaFechaTermina":' . json_encode(utf8_encode($validacion->mysqlToNormal($medida->getFechaTermino()))) . ",";
                        $json .= '"cveTipoProteccion": ' . json_encode(utf8_encode($medida->getCveTipoProteccion())) . ",";

                        //************ descripcion Tipos Protecciones********************************************
                        $tiposProteccionesDTO = new TiposproteccionesDTO;
                        $tiposProteccionesDAO = new TiposproteccionesDAO;
                        $tiposProteccionesDTO->setCveTipoProteccion($medida->getCveTipoProteccion());
                        $tiposProteccionesDTO->setActivo("S");
                        $tiposProteccionesDTO = $tiposProteccionesDAO->selectTiposprotecciones($tiposProteccionesDTO);
                        if ($tiposProteccionesDTO != "") {
                            $json .= '"desTipoProteccion": ' . json_encode(utf8_encode($tiposProteccionesDTO[0]->getDesTipoProteccion())) . ",";
                        }

                        //************* descripcion medida de protección*****************************************
                        //************* descripcion autoridad emisora *****************************************

                        $autEmisaraDTO = new AutoridadesemisorasDTO();
                        $autEmisaraDAO = new AutoridadesemisorasDAO();
                        $autEmisaraDTO->setCveAutoridadEmisora($medida->getCveAutoridadEmisora());
                        $autEmisaraDTO->setActivo("S");
                        $autEmisaraDTO = $autEmisaraDAO->selectAutoridadesemisoras($autEmisaraDTO);
                        if ($autEmisaraDTO != "") {
                            $json .= '"desAutoridadEmisora": ' . json_encode(utf8_encode($autEmisaraDTO[0]->getDesAutoridadEmisora())) . ",";
                        }

                        //************* descripcion autoridad emisora *****************************************

                        $json .= '"cveAutoridadEmisora": ' . json_encode(utf8_encode($medida->getCveAutoridadEmisora())) . "";
                        $json .= '}';

                        $y++;
                        if ($y <= count($medidasProteccionesDTO)) {
                            $json .= ",";
                        }
                    }
                }
                // termina de recorrer medidas cautelares

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

            return $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE MEDIDAS DE PROTECCI? **************************************************** */
    #-------------------------CONSULTA DE ACTUACIONES, IMPUTADOS Y OFENDIDOS--------------------------------------------------------

    public function ConsultarActuacionesImpOf($ActuacionesDto, $param) {
//        print_r($ActuacionesDto);
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " AND (cveTipoActuacion=2 OR cveTipoActuacion=5) ORDER BY idActuacion DESC ", null, null);
        //print_r($ActuacionesDto);
        if ($ActuacionesDto != "") {
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
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Actuacion->getCveJuzgado())) . ",";
                $json .= '"sintesis":"' . $Actuacion->getSintesis() . '",';
                $json .= '"observaciones":"' . $Actuacion->getObservaciones() . '",';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Actuacion->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Actuacion->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($Actuacion->getCveTipoResolucion())) . ",";
                if ($Actuacion->getCveTipoResolucion() != "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolDAO = new TiposresolucionesDAO();
                    $tipoResolDTO->setCveTipoResolucion($Actuacion->getCveTipoResolucion());
                    $tipoResolDTO = $tipoResolDAO->selectTiposresoluciones($tipoResolDTO);
                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion()));
                } else {
                    $json .='"descTipoResolucion": ""';
                }
                $json .= "}";
                $x++;
                if ($x <= count($ActuacionesDto)) {
                    $json .= ",";
                }
            }
            $json .= '],';

            $cveTipoCarpeta = $param["vcveTipoCarpeta"];
            switch ($cveTipoCarpeta) {
                case "7": // exhorto
                    //echo "--EXHORTO--";
                    $ImputadosexhortosDto = new ImputadosexhortosDTO();
                    $ImputadosexhortosDao = new ImputadosexhortosDAO();
                    $ImputadosexhortosDto->setIdExhorto($param["IdCarpetaJudicial"]);
                    //print_r($ImputadoscarpetasDto);
                    $ImputadosexhortosDto->setActivo('S');
                    $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);
                    if ($ImputadosexhortosDto != "") {
                        $json .= '"totalCountImputados":"' . count($ImputadosexhortosDto) . '",';
                    } else {
                        $json .= '"totalCountImputados":"0",';
                    }
                    //                var_dump($ImputadoscarpetasDto);

                    $json .= '"Imputados": [';
                    if ($ImputadosexhortosDto != "") {
                        $y = 1;
                        foreach ($ImputadosexhortosDto as $Imputado) {
                            $json .= "{";
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoExhorto())) . ",";
                            $json .='"tipo": "Imputado",';
                            if ($Imputado->getCveTipoPersona() == 1) {
                                if ($Imputado->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($Imputado->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($Imputado->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                if ($Imputado->getNombreMoral() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                                    $json .='"paterno": "",';
                                    $json .='"materno": "",';
                                } else {
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

                    if ($OfenfendidosexhortosDto != "") {
                        $json .= '"totalCountOfendidos":"' . count($OfenfendidosexhortosDto) . '",';
                    } else {
                        $json .= '"totalCountOfendidos":"0",';
                    }

                    $json .= '"Ofendidos": [';
                    if ($OfenfendidosexhortosDto != "") {
                        $y = 1;
                        foreach ($OfenfendidosexhortosDto as $Ofendido) {
                            $json .= "{";
                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfenfendidoExhorto())) . ",";

                            if ($Ofendido->getCveTipoPersona() == 1) {
                                if ($Ofendido->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($Ofendido->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($Ofendido->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                if ($Ofendido->getNombreMoral() != "") {
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
                    $json .= ']';
                    break;
                default:
                    //echo "--carpeta--";
                    $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                    $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                    $ImputadoscarpetasDto->setIdCarpetaJudicial($param["IdCarpetaJudicial"]);
                    //print_r($ImputadoscarpetasDto);
                    $ImputadoscarpetasDto->setActivo('S');
                    $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
                    if ($ImputadoscarpetasDto != "") {
                        $json .= '"totalCountImputados":"' . count($ImputadoscarpetasDto) . '",';
                    } else {
                        $json .= '"totalCountImputados":"0",';
                    }
//                var_dump($ImputadoscarpetasDto);

                    $json .= '"Imputados": [';
                    if ($ImputadoscarpetasDto != "") {
                        $y = 1;
                        foreach ($ImputadoscarpetasDto as $Imputado) {
                            $json .= "{";
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";
                            $json .='"tipo": "Imputado",';
                            if ($Imputado->getCveTipoPersona() == 1) {
                                if ($Imputado->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($Imputado->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($Imputado->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                if ($Imputado->getNombreMoral() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                                    $json .='"paterno": "",';
                                    $json .='"materno": "",';
                                }
                            }
                            $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                            $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())) . ",";

                            $TelefonosimputadoscarpetasDto = new TelefonosimputadoscarpetasDTO();
                            $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
                            $TelefonosimputadoscarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                            $TelefonosimputadoscarpetasDto->setActivo('S');

                            $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
                            //--------
                            $TotalEmails = 0;
                            $json .= '"ImputadosEmail": [';
                            if ($TelefonosimputadoscarpetasDto != "") {
                                $y = 1;
                                foreach ($TelefonosimputadoscarpetasDto as $Email) {
                                    $json .= "{";
                                    $json .= '"emailImputado":' . json_encode(utf8_encode($Email->getEmail()));
                                    $json .= "}";
                                    if ($Email->getEmail() != "") {
                                        $TotalEmails = $TotalEmails + 1;
                                    }
                                    $y++;
                                    if ($y <= count($TelefonosimputadoscarpetasDto)) {
                                        $json .= ",";
                                    }
                                }
                            }
                            #Fin Emails
                            $json .= '],';
                            //--------
                            $json .= '"totalCountEmailsImputados":"' . $TotalEmails . '",';

                            $DefensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                            $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                            $DefensoresimputadoscarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                            $DefensoresimputadoscarpetasDto->setActivo('S');
                            $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);

                            if ($DefensoresimputadoscarpetasDto != "") {
                                $totalDefensoresImp = count($DefensoresimputadoscarpetasDto);
                            } else {
                                $totalDefensoresImp = 0;
                            }
                            $json .= '"totalDefensoresImp":"' . $totalDefensoresImp . '",';

                            $json .= '"DefensoresImputados": [';
                            if ($DefensoresimputadoscarpetasDto != "") {
                                $t = 1;
                                foreach ($DefensoresimputadoscarpetasDto as $Defensor) {
                                    $json .= "{";
                                    $TiposdefensoresDto = new TiposdefensoresDTO();
                                    $TiposdefensoresDao = new TiposdefensoresDAO();
                                    $TiposdefensoresDto->setCveTipoDefensor($Defensor->getCveTipoDefensor());
                                    $TiposdefensoresDto->setActivo('S');
                                    $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                                    if ($TiposdefensoresDto[0]->getDesTipoDefensor() != 'SIN DEFENSOR') {
                                        $json.= '"idDefensorImputado":' . json_encode(utf8_encode($Defensor->getIdDefensorImputadoCarpeta())) . ",";
                                        $json.= '"TipoDefensor":' . json_encode(utf8_encode($TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                        $json.= '"NombreDefensor":' . json_encode(utf8_encode($Defensor->getNombre())) . ",";
                                        $json.= '"EmailDefensor":' . json_encode(utf8_encode($Defensor->getEmail())) . "";
                                    } else {
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

                    if ($OfendidosCarpetasDto != "") {
                        $json .= '"totalCountOfendidos":"' . count($OfendidosCarpetasDto) . '",';
                    } else {
                        $json .= '"totalCountOfendidos":"0",';
                    }

                    $json .= '"Ofendidos": [';
                    if ($OfendidosCarpetasDto != "") {
                        $k = 1;
                        foreach ($OfendidosCarpetasDto as $Ofendido) {
                            $json .= "{";
                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";

                            if ($Ofendido->getCveTipoPersona() == 1) {
                                if ($Ofendido->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($Ofendido->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($Ofendido->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                if ($Ofendido->getNombreMoral() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombreMoral())) . ",";
                                    $json .='"paterno": "",';
                                    $json .='"materno": "",';
                                }
                            }
                            $TelefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                            $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                            $TelefonosofendidoscarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                            $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
                            if ($TelefonosofendidoscarpetasDto != "") {
                                $totalEmails = count($TelefonosofendidoscarpetasDto);
                            } else {
                                $totalEmails = 0;
                            }
                            //--------
                            $json .= '"OfendidosEmail": [';
                            if ($TelefonosofendidoscarpetasDto != "") {
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
                            $json .= '"totalCountEmailsOfendidos":"' . $totalEmails . '",';
                            //--------
                            $json .='"tipo": "Ofendido",';
                            $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                            $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())) . ",";

                            $DefensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                            $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                            $DefensoresofendidoscarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                            $DefensoresofendidoscarpetasDto->setActivo('S');
                            $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);

                            if ($DefensoresofendidoscarpetasDto != "") {
                                $totalDefensoresOf = count($DefensoresofendidoscarpetasDto);
                            } else {
                                $totalDefensoresOf = 0;
                            }
                            $json .= '"totalDefensoresOf":"' . $totalDefensoresOf . '",';


                            $json .= '"DefensoresOfendidos": [';
                            if ($DefensoresofendidoscarpetasDto != "") {
                                $t = 1;
                                foreach ($DefensoresofendidoscarpetasDto as $Defensor) {
                                    $json .= "{";
                                    $TiposdefensoresDto = new TiposdefensoresDTO();
                                    $TiposdefensoresDao = new TiposdefensoresDAO();
                                    $TiposdefensoresDto->setCveTipoDefensor($Defensor->getCveTipoDefensor());
                                    $TiposdefensoresDto->setActivo('S');
                                    $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                                    if ($TiposdefensoresDto[0]->getDesTipoDefensor() != 'SIN DEFENSOR') {
                                        $json.= '"IdDefensorOfendidoCarpeta":' . json_encode(utf8_encode($Defensor->getIdDefensorOfendidoCarpeta())) . ",";
                                        $json.= '"TipoDefensor":' . json_encode(utf8_encode($TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                        $json.= '"NombreDefensor":' . json_encode(utf8_encode($Defensor->getNombre())) . ",";
                                        $json.= '"EmailDefensor":' . json_encode(utf8_encode($Defensor->getEmail())) . "";
                                    } else {
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
                        #Fin Ofendidos
                        $json .= ']';

                        break;
                    }
            }
            $json .= "}";

            //echo $json.'--Json--';
            return $json;
        } else {
            $json = '{"type":"OK",';
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
        $cveTipoCarpeta = $param["vcveTipoCarpeta"];
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
                                    if ($cveTipoCarpeta != '7') {
                                        $PersonasnotificartradicionalDto->setCveTipoParte(1);
                                    } else {
                                        $PersonasnotificartradicionalDto->setCveTipoParte(8); //Imputado exhorto
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

                                    if ($cveTipoCarpeta != '7') {
                                        $PersonasnotificartradicionalDto->setCveTipoParte(2); //Ofendido
                                    } else {
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

                $antecedeActCtrl = new AntecedesactuacionesController();
                $antecedeActDTO = new AntecedesactuacionesDTO();
                $antecedeActDTO->setIdActuacionHija($actuacionDto->getIdActuacion());
                //$antecedeActDTO->setActivo("S");
                $antecedeActDTO = $antecedeActCtrl->selectAntecedesactuaciones($antecedeActDTO);
                //print_r($antecedeActDTO);
                if ($antecedeActDTO != "") {
                    $idActuacionPadre = $antecedeActDTO[0]->getIdActuacionPadre();
                    //echo $idActuacionPadre.'Padre';
                }
                $ActuacionesDtoPadre = new ActuacionesDTO();
                $ActuacionesDaoPadre = new ActuacionesDAO();
                $ActuacionesDtoPadre->setIdActuacion($idActuacionPadre);
                //print_r($ActuacionesDtoPadre);
                $ActuacionesDtoPadre = $ActuacionesDaoPadre->selectActuaciones($ActuacionesDtoPadre);
                if ($ActuacionesDtoPadre != "") {
                    $json .= '"idActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getIdactuacion())) . ",";
                    $json .= '"ActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getCveTipoActuacion())) . ",";
                    $json .= '"numActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getNumActuacion()) . '/') . ",";
                    $json .= '"aniActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getAniActuacion())) . ",";
                    $json .= '"observacionesPadre":' . json_encode($ActuacionesDtoPadre[0]->getObservaciones()) . ",";

                    if ($ActuacionesDtoPadre[0]->getCveTipoActuacion() == 2) {
                        $Origen = "ACUERDO";
                    } else {
                        $Origen = "AUTO";
                    }
                    $json .= '"Origen":' . json_encode(utf8_encode($Origen)) . ",";
                } else {
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
                $fechaRegistrotmp = $actuacionDto->getFechaRegistro();
                $tmpFecha = explode(' ', $fechaRegistrotmp);
                $fecha = explode('-', $tmpFecha[0]);
                $fechaRegistro = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                $json .= '"fechaRegistro":' . json_encode($fechaRegistro . ' ' . $tmpFecha[1]) . ",";
                $PersonasnotificartradicionalDto = new PersonasnotificartradicionalDTO();
                $PersonasnotificartradicionalDao = new PersonasnotificartradicionalDAO();
                $PersonasnotificartradicionalDto->setIdActuacion($actuacionDto->getIdActuacion());
                $PersonasnotificartradicionalDto->setActivo("S");

                $PersonasnotificartradicionalDto = $PersonasnotificartradicionalDao->selectPersonasnotificartradicional($PersonasnotificartradicionalDto);
                if ($PersonasnotificartradicionalDto != "" and $PersonasnotificartradicionalDto != null) {
                    $json .= '"totalNotificaciones":' . json_encode(count($PersonasnotificartradicionalDto)) . ",";
                } else {
                    $json .= '"totalNotificaciones":' . json_encode(0) . ",";
                }
                $json .= '"DetalleNotificacion": [';
                $y = 1;
                if ($PersonasnotificartradicionalDto != "") {
                    foreach ($PersonasnotificartradicionalDto as $Notificacion) {
                        $json.='{';
                        if ($Notificacion->getCveTipoParte() == 1) {
                            $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                            $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                            $ImputadoscarpetasDto->setIdImputadoCarpeta($Notificacion->getIdReferenciaParte());
                            $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getIdImputadoCarpeta())) . ",";
                            $json .='"tipo": "IMPUTADO",';
                            if ($ImputadoscarpetasDto[0]->getCveTipoPersona() == 1) {
                                if ($ImputadoscarpetasDto[0]->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($ImputadoscarpetasDto[0]->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($ImputadoscarpetasDto[0]->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                $json .= '"nombre":' . json_encode(utf8_encode($ImputadoscarpetasDto[0]->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                        }
                        if ($Notificacion->getCveTipoParte() == 2) {
                            $OfendidosCarpetasDto = new OfendidoscarpetasDTO();
                            $OfendidosCarpetasDao = new OfendidoscarpetasDAO();
                            $OfendidosCarpetasDto->setIdOfendidoCarpeta($Notificacion->getIdReferenciaParte());
                            $OfendidosCarpetasDto = $OfendidosCarpetasDao->selectOfendidoscarpetas($OfendidosCarpetasDto);

                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getIdOfendidoCarpeta())) . ",";
                            $json .='"tipo": "OFENDIDO",';
                            if ($OfendidosCarpetasDto[0]->getCveTipoPersona() == 1) {
                                if ($OfendidosCarpetasDto[0]->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($OfendidosCarpetasDto[0]->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($OfendidosCarpetasDto[0]->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                $json .= '"nombre":' . json_encode(utf8_encode($OfendidosCarpetasDto[0]->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                        }

                        if ($Notificacion->getCveTipoParte() == 6) {
                            $DefensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                            $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                            $DefensoresimputadoscarpetasDto->setIdDefensorImputadoCarpeta($Notificacion->getIdReferenciaParte());
                            //$DefensoresimputadoscarpetasDto->setActivo('S');
                            $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
                            if ($DefensoresimputadoscarpetasDto != "") {
                                $TiposdefensoresDto = new TiposdefensoresDTO();
                                $TiposdefensoresDao = new TiposdefensoresDAO();
                                $TiposdefensoresDto->setCveTipoDefensor($DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor());
                                //$TiposdefensoresDto->setActivo('S');
                                $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);
                                $json.= '"idDefensorImputado":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta())) . ",";
                                $json.= '"tipo":' . json_encode(utf8_encode('DEFENSOR IMPUTADO: ' . $TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                $json.= '"nombre":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre())) . ",";
                                $json.= '"email":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getEmail())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                        }

                        if ($Notificacion->getCveTipoParte() == 7) {
                            $DefensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                            $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                            $DefensoresofendidoscarpetasDto->setIdDefensorOfendidoCarpeta($Notificacion->getIdReferenciaParte());
                            $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
                            if ($DefensoresofendidoscarpetasDto != "") {
                                $TiposdefensoresDto = new TiposdefensoresDTO();
                                $TiposdefensoresDao = new TiposdefensoresDAO();
                                $TiposdefensoresDto->setCveTipoDefensor($DefensoresofendidoscarpetasDto[0]->getCveTipoDefensor());
                                //$TiposdefensoresDto->setActivo('S');
                                $TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto);

                                $json.= '"IdDefensorOfendidoCarpeta":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getIdDefensorOfendidoCarpeta())) . ",";
                                $json.= '"tipo":' . json_encode(utf8_encode('DEFENSOR OFENDIDO: ' . $TiposdefensoresDto[0]->getDesTipoDefensor())) . ",";
                                $json.= '"nombre":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getNombre())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                                $json.= '"email":' . json_encode(utf8_encode($DefensoresofendidoscarpetasDto[0]->getEmail())) . ",";
                            }
                        }

                        if ($Notificacion->getCveTipoParte() == 8) {
                            $ImputadosexhortosDto = new ImputadosexhortosDTO();
                            $ImputadosexhortosDao = new ImputadosexhortosDAO();
                            $ImputadosexhortosDto->setIdImputadoExhorto($Notificacion->getIdReferenciaParte());
                            $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);
                            $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getIdImputadoExhorto())) . ",";
                            $json .='"tipo": "IMPUTADO",';
                            if ($ImputadosexhortosDto[0]->getCveTipoPersona() == 1) {
                                if ($ImputadosexhortosDto[0]->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($ImputadosexhortosDto[0]->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($ImputadosexhortosDto[0]->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                $json .= '"nombre":' . json_encode(utf8_encode($ImputadosexhortosDto[0]->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                        }
                        if ($Notificacion->getCveTipoParte() == 9) {
                            $OfenfendidosexhortosDto = new OfenfendidosexhortosDTO();
                            $OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
                            $OfenfendidosexhortosDto->setIdOfenfendidoExhorto($Notificacion->getIdReferenciaParte());
                            $OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto);

                            $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getIdOfenfendidoExhorto())) . ",";
                            $json .='"tipo": "OFENDIDO",';
                            if ($OfenfendidosexhortosDto[0]->getCveTipoPersona() == 1) {
                                if ($OfenfendidosexhortosDto[0]->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getNombre())) . ",";
                                } else {
                                    $json .='"nombre": "",';
                                }
                                if ($OfenfendidosexhortosDto[0]->getPaterno() != "") {
                                    $json .= '"paterno":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getPaterno())) . ",";
                                } else {
                                    $json .='"paterno": "",';
                                }
                                if ($OfenfendidosexhortosDto[0]->getMaterno() != "") {
                                    $json .= '"materno":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getMaterno())) . ",";
                                } else {
                                    $json .='"materno": "",';
                                }
                            } else {
                                $json .= '"nombre":' . json_encode(utf8_encode($OfenfendidosexhortosDto[0]->getNombreMoral())) . ",";
                                $json .='"paterno": "",';
                                $json .='"materno": "",';
                            }
                        }



                        $fechaNotificaciontmp = $Notificacion->getFechaNotificacion();
                        $tmpFecha = explode(' ', $fechaNotificaciontmp);
                        $fecha = explode('-', $tmpFecha[0]);
                        $fechaNotificacion = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                        $json .= '"fechaNotificacion":' . json_encode($fechaNotificacion) . ",";
                        $json .= '"Instructivo":' . json_encode($Notificacion->getInstructivo()) . ",";
                        $json .= '"Correo":' . json_encode($Notificacion->getCorreo()) . "";

                        $json.='}';
                        $y++;
                        if ($y <= count($PersonasnotificartradicionalDto)) {
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

    public function ConsultarActuacionesImpOfElectronica($ActuacionesDto, $param) {
//        print_r($ActuacionesDto);
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();

//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $ActuacionesDto = $this->verificaCeros($ActuacionesDto);
        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " AND (cveTipoActuacion=2 OR cveTipoActuacion=5) ORDER BY idActuacion DESC ", null, null);
        //print_r($ActuacionesDto);
        if ($ActuacionesDto != "") {
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
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Actuacion->getCveJuzgado())) . ",";
                $json .= '"sintesis":"' . $Actuacion->getSintesis() . '",';
                $json .= '"observaciones":"' . $Actuacion->getObservaciones() . '",';
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Actuacion->getCveUsuario())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Actuacion->getActivo())) . ",";
                $json .= '"cveTipoResolucion":' . json_encode(utf8_encode($Actuacion->getCveTipoResolucion())) . ",";
                if ($Actuacion->getCveTipoResolucion() != "") {
                    $tipoResolDTO = new TiposresolucionesDTO();
                    $tipoResolDAO = new TiposresolucionesDAO();
                    $tipoResolDTO->setCveTipoResolucion($Actuacion->getCveTipoResolucion());
                    $tipoResolDTO = $tipoResolDAO->selectTiposresoluciones($tipoResolDTO);
                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion()));
                } else {
                    $json .='"descTipoResolucion": ""';
                }
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

            if ($RelacionexpedientejuzgadoDto != "" or $RelacionexpedientejuzgadoDto != null) {
                $json .= '"totalCountPersonas":' . json_encode(count($RelacionexpedientejuzgadoDto)) . ",";
            } else {
                $json .= '"totalCountPersonas":' . json_encode(0) . ",";
                $json .= '"PersonaAutorizadas":[';
            }
            $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
            if ($RelacionexpedientejuzgadoDto != "") {
                foreach ($RelacionexpedientejuzgadoDto as $Relacion) {
                    $jsonAux = '{';
                    $jsonAux .= '"totalCount":"1",';
                    $jsonAux .= '"idPersonaAutorizada":[';
                    $jsonAux .= json_encode(utf8_encode($Relacion->getIdPersonaAutorizada()));
                    $jsonAux .= ']}';
                    $respuesta = $personaAutorizadaCliente->selectPersonaAutorizada($jsonAux); //RAM
                    $respuesta = json_decode($respuesta);
                    //            print_r($respuesta);                
                    if (isset($respuesta->totalCount)) {
                        if ($respuesta != "" or $respuesta != null) {
                            $totalCount = $respuesta->totalCount;
                        } else {
                            $totalCount = 0;
                        }
                    } else {
                        $totalCount = 0;
                    }
                    $y = 1;
                    $json .= '"totalCountPersonas":"' . $totalCount . '",';
                    $json .= '"PersonaAutorizadas":[';
                    if ($totalCount > 0) {
                        foreach ($respuesta->data as $datos) {
                            $json .= '{';
                            $json .= '"idrelacionExpedienteJuzgado":' . json_encode($Relacion->getIdRelacionExpedienteJuzgado()) . ",";
                            $json .= '"idPersonaAutorizada":' . json_encode($datos->idPersonaAutorizada) . ",";
                            $json .= '"nombre":' . json_encode($datos->nombre) . ",";
                            $json .= '"paterno":' . json_encode($datos->paterno) . ",";
                            $json .= '"materno":' . json_encode($datos->materno) . ",";
                            $json .= '"cedula":' . json_encode($datos->cedula) . ",";
                            $json .= '"email":' . json_encode($datos->email) . ",";
                            $EstatusRegistro = $datos->cveEstatusRegistro;
                            $EstatusCorreo = $datos->statusGenercionCorreo;
                            if ($EstatusRegistro == '2' and $EstatusCorreo == '2') {
                                $mostrar = 'Si';
                            } else {
                                $mostrar = 'No';
                            }
                            $json .= '"permiso":' . json_encode($mostrar) . ",";

                            #----------------CC Detalle
                            $AntecedesNotificacionesDto = new AntecedesnotificacionesDTO();
                            $AntecedesNotificacionesDao = new AntecedesnotificacionesDAO();
                            $AntecedesNotificacionesDto->setIdPersonaAutorizadaPadre($datos->idPersonaAutorizada);
                            $AntecedesNotificacionesDto->setActivo('S');
                            $AntecedesNotificacionesDto = $AntecedesNotificacionesDao->selectAntecedesnotificaciones($AntecedesNotificacionesDto);
                            if ($AntecedesNotificacionesDto != 0) {
                                $totalcc = count($AntecedesNotificacionesDto);
                            } else {
                                $totalcc = 0;
                            }
                            $json .= '"totalCopias":' . json_encode($totalcc) . ",";
                            $json .= '"ConCopia":[';
                            if ($AntecedesNotificacionesDto != 0) {
                                $w = 1;
                                foreach ($AntecedesNotificacionesDto as $copiar) {
                                    $jsonAux = '{';
                                    $jsonAux .= '"totalCount":"1",';
                                    $jsonAux .= '"idPersonaAutorizada":[';
                                    $jsonAux .= json_encode(utf8_encode($copiar->getIdPersonaAutorizadaHijo()));
                                    $jsonAux .= ']}';
                                    $respuestaCopia = $personaAutorizadaCliente->selectPersonaAutorizada($jsonAux); //RAM
                                    $respuestaCopia = json_decode($respuestaCopia);

                                    if (isset($respuestaCopia->totalCount)) {
                                        if ($respuestaCopia != "" or $respuestaCopia != null) {
                                            $totalCountCopia = $respuestaCopia->totalCount;
                                        } else {
                                            $totalCountCopia = 0;
                                        }
                                    } else {
                                        $totalCountCopia = 0;
                                    }
                                    //            print_r($respuesta);
                                    $json .= '{';
                                    if ($totalCountCopia > 0) {
                                        foreach ($respuestaCopia->data as $datos) {
                                            $json .= '"idPersonaAutorizadacc":' . json_encode($datos->idPersonaAutorizada) . ",";
                                            $json .= '"nombrecc":' . json_encode($datos->nombre) . ",";
                                            $json .= '"paternocc":' . json_encode($datos->paterno) . ",";
                                            $json .= '"maternocc":' . json_encode($datos->materno) . ",";
                                            $json .= '"cedulacc":' . json_encode($datos->cedula) . ",";
                                            $json .= '"emailcc":' . json_encode($datos->email) . ",";

                                            $EstatusRegistro = $datos->cveEstatusRegistro;
                                            $EstatusCorreo = $datos->statusGenercionCorreo;
                                            if ($EstatusRegistro == '2' and $EstatusCorreo == '2') {
                                                $mostrar = 'Si';
                                            } else {
                                                $mostrar = 'No';
                                            }
                                            $json .= '"permiso":' . json_encode($mostrar);
                                        }
                                    }
                                    $json .= "}";
                                    $w++;
                                    if ($w <= $totalcc) {
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
                    $y++;
                    $json .= "}";
                    if ($y <= $totalCount) {
                        $json .= ",";
                    }
                }
            }
            $json .= ']';
            $json .= "}";

            //echo '--Json--'.$json.'--Json--';
            return $json;
        } else {
            $json = '{"type":"OK",';
            $json .= '"totalActuaciones":"0",';
            $json .= '"totalCountPersonas":"0"';
            $json .= '}';
            return $json;
        }
    }

    #----------GUARDAR NOTIFICACIONES-----------------------------------------------------------------------------------------------

    public function GuardarNotificacionElectronica($ActuacionesDto, $param) {
        //print_r($param);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $idActuacionPadre = $param["idActuacionPadre"];
        if ($param["fechaNotificacion"] != "") {
            $fecha = explode("/", $param["fechaNotificacion"]);
            $fechaNotificacion = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
            $fecha = $param["fechaNotificacion"];
        } else {
            $fechaNotificacion = "";
            $fecha = "";
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
                $actEstatusDTO->setCveEstatus(22); //Registrar Notificación Electrónica
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
                        if ($param["CadenaPersonas"] != "") {
                            $Personas = explode("-", $param["CadenaPersonas"]);
                            //$CadenaEmails = explode("/", $param["CadenaEmails"]);
                            $CadenaNombres = explode("/", $param["CadenaNombres"]);
                            $CadenaCedulas = explode("/", $param["CadenaCedulas"]);
                            $y = 0;
                            foreach ($Personas as $idPersona) {
                                if ($idPersona != "P" and $idPersona != "") {
                                    //echo 'id= '.$idPersona;
                                    $idPersona = trim($idPersona);
                                    $PersonasnotificarDto = New PersonasnotificarDTO();
                                    $PersonasnotificarDao = New PersonasnotificarDAO();

                                    $PersonasnotificarDto->setIdActuacion($idActuacion);
                                    $PersonasnotificarDto->setIdRelacionExpedienteJuzgado($idPersona);
                                    $idRelacionExpedienteJuzgado = $idPersona;
                                    $PersonasnotificarDto->setFechaNotificacion($fechaNotificacion);
                                    $PersonasnotificarDto->setCorreo($CadenaCedulas[$y] . '@pjedomex.gob.mx');
                                    $Cadena = str_replace("Ã±", "ñ", $CadenaCedulas[$y]);
                                    $emailok = utf8_decode($Cadena) . '@pjedomex.gob.mx';
                                    $cedula = $CadenaCedulas[$y];
                                    $nombrePersona = utf8_decode($CadenaNombres[$y]);
                                    $PersonasnotificarDto->setActivo('S');

                                    #------------------------------CUERPO: INSTRUCTIVO

                                    $numero = $ActuacionesDto[0]->getNumero();
                                    $anio = $ActuacionesDto[0]->getAnio();

                                    $TiposCarpetaDto = new TiposcarpetasDTO();
                                    $TiposCarpetaDao = new TiposcarpetasDAO();
                                    $TiposCarpetaDto->setCveTipoCarpeta($ActuacionesDto[0]->getCveTipoCarpeta());
                                    $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                                    $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                                    $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;

                                    $JuzgadosDto = new JuzgadosDTO();
                                    $JuzgadosDao = new JuzgadosDAO();
                                    $JuzgadosDto->setCveJuzgado($ActuacionesDto[0]->getCveJuzgado());
                                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                                    $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();

                                    $RelacionExpedienteJuzgadoDto = new RelacionexpedientejuzgadoDTO();
                                    $RelacionExpedienteJuzgadoDao = new RelacionexpedientejuzgadoDAO();
                                    $RelacionExpedienteJuzgadoDto->setIdRelacionExpedienteJuzgado($idRelacionExpedienteJuzgado);
                                    $RelacionExpedienteJuzgadoDto = $RelacionExpedienteJuzgadoDao->selectRelacionexpedientejuzgado($RelacionExpedienteJuzgadoDto);

                                    $TiposPartesDto = new TipospartesDTO();
                                    $TiposPartesDao = new TipospartesDAO();
                                    $TiposPartesDto->setCveTipoParte($RelacionExpedienteJuzgadoDto[0]->getCveTipoParte());
                                    $TiposPartesDto = $TiposPartesDao->selectTipospartes($TiposPartesDto);
                                    $TipoParte = $TiposPartesDto[0]->getDescTipoParte();

                                    $strCuerpoEmail = '<html><head><title>Poder Judicial del Estado de M&eacute;xico</title></head><body style="background: #F2F2F2; font-family: arial;">';
                                    $strCuerpoEmail .= '<div style="width:700px; height:auto; background:#E3E3E3; margin: 0 auto 0 auto;">';
                                    $strCuerpoEmail .= '<div style="width:700px; border-bottom: 1px solid #CCCCCC; border-top: 5px solid #669900; padding-top:10px; padding-buttom:10px; background:#FFFFFF; text-align:center; height:50px; font-size:30px; color:#555555;">';
                                    $strCuerpoEmail .= 'Notificaci&oacute;n Electr&oacute;nica</div>';
                                    $strCuerpoEmail .= '<br>';

                                    $strCuerpoEmail .= '<div style="background: #FFFFFF; width:660px; height:100px; padding:10px; margin:0 auto 0 auto; border: 1px solid #999999;">';
                                    $strCuerpoEmail .= '<table border="0" cellpadding="0" cellspacing="0" border="0" width="90%" align="center" style="font-size: 12px; color:#555555;">';
                                    $strCuerpoEmail .= '<tr><td align="right"><b>DESTINATARIO:</b> </td><td align="left"><div style="text-transform: uppercase; padding-left:5px;">' . $nombrePersona . '</div></td></tr>';
                                    $strCuerpoEmail .= '<tr><td align="right"><b>CARPETA ADMINISTRATIVA: </b> </td><td align="left"><div style="padding-left:5px;">' . $Carpeta . '</div></td></tr>';
                                    $strCuerpoEmail .= '<tr><td align="right"><b>JUZGADO:</b> </td><td align="left"><div style="padding-left:5px;">' . $DesJuzgado . '</div></td></tr>';
                                    $strCuerpoEmail .= '</table>';
                                    $strCuerpoEmail .= '</div>';
                                    $strCuerpoEmail .= '<br>';

                                    $strCuerpoEmail .= '<div style="background: #FFFFFF; width:660px; height: auto; padding: 10px; margin:0 auto 0 auto; border: 1px solid #CCCCCC; text-align: justify; font-size: 14px; color:#777777;\">';
                                    $strCuerpoEmail .= 'SE NOTIFICA PROVE&Iacute;DO AL FISCAL Y DEFENSA PRIVADA. </br>';
                                    $strCuerpoEmail .= 'RAZ&Oacute;N DE NOTIFICACI&Oacute;N. ';
                                    $strCuerpoEmail .= ' SIENDO LAS ' . date('H', time()) . ":" . date('i', time()) . ":" . date('s', time()) . ' HORAS DEL D&Iacute;A ';
                                    $strCuerpoEmail .= date('d', time()) . '/' . date('m', time()) . ' DEL A&Ntilde;O ' . date('Y', time());
                                    $strCuerpoEmail .= ', el suscrito Notificador <strong>' . $nombrePersona . ' </strong> en t&eacute;rminos de lo dispuesto por los art&iacute;culos 100, 102, 103 y 105 del Código de Procedimientos Penales vigente en el Estado de M&eacute;xico, en el domicilio se&ntilde;alado en autos para o&iacute;r y recibir notificaciones por el Defensor P&uacute;blico, consistente en el correo electr&oacute;nico <strong>' . $cedula . '@pjedomex.gob.mx </strong>, procedo a notificarle la resoluci&oacute;n de fecha ';
                                    $strCuerpoEmail .= '<strong> ' . $fecha . '</strong>';
                                    $strCuerpoEmail .= '  del a&ntilde;o en curso, emitido en la <strong>CARPETA  ADMINISTRATIVA  ' . $Carpeta . '  , </strong> del <strong> ' . $DesJuzgado . ' </strong>, mediante el documento que se adjunta al presente correo electr&oacute;nico, surtiendo efectos de notificaci&oacute;n en forma personal, lo que asienta para debida constancia legal. ';
                                    $strCuerpoEmail .= '</br>DOY FE.</br>';
                                    $strCuerpoEmail .= '</br></br>';
                                    $strCuerpoEmail .= '<strong>NOTIFICADOR</strong></br>';
                                    $strCuerpoEmail .= $nombrePersona . '</br>';
                                    $strCuerpoEmail .= '</div>';
                                    $strCuerpoEmail .= "<br>";
                                    $strCuerpoEmail .= "</div>";
                                    $strCuerpoEmail .= "</div></body></html>";
                                    #------------------------------                                            


                                    $PersonasnotificarDto->setInstructivo($strCuerpoEmail);
                                    $PersonasnotificarDto = $PersonasnotificarDao->insertPersonasnotificar($PersonasnotificarDto, $proveedor);
                                    if ($PersonasnotificarDto != "") {
//                                           echo $cedula.'--cedula--' ;
//                                           echo $nombrePersona.'--nombre--' ;
//                                           print_r($ActuacionesDto);
                                        // **************************************+ envio de correo ********************
                                        $subject = "Notificacion Electronica";
                                        $envioCorreo = $this->generaCorreo($cedula, $nombrePersona, $fecha, $subject, $strCuerpoEmail);
                                        if ($envioCorreo) {
                                            $transaccion = 0;
                                        }
                                        #Envío de correo CC
                                        if ($param["CadenaEmailscc"] != "") {
                                            $CadenaEmailscc = explode("/", $param["CadenaEmailscc"]);
                                            $subject = "Copia: Notificacion Electronica";
                                            foreach ($CadenaEmailscc as $emailcc) {
                                                if ($emailcc != "C" and $emailcc != "") {
                                                    $emailcc = trim($emailcc);
                                                    $envioCorreo = $this->generaCorreo($cedula, $nombrePersona, $fecha, $subject, $strCuerpoEmail);
                                                    if ($envioCorreo) {
                                                        $transaccion = 0;
                                                    }
                                                }
                                            }
                                        }
                                        // **************************************+ envio de correo ********************
                                    } else {
                                        $transaccion = 1;
                                        echo "Tuve errores al insertar la notificación";
                                        break;
                                    }
                                }
                                $y = $y + 1;
                            }
                        }
                        if ($transaccion == 0) {
                            $proveedor->execute("COMMIT");
                        } else {
                            $proveedor->execute("ROLLBACK");
                            //$proveedor->execute("COMMIT");
                            echo "Tuve errores al insertar en personasnotificar";
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
                if ($antecedeActDTO != "") {
                    $idActuacionPadre = $antecedeActDTO[0]->getIdActuacionPadre();
                    //echo $idActuacionPadre.'Padre';
                }
                $ActuacionesDtoPadre = new ActuacionesDTO();
                $ActuacionesDaoPadre = new ActuacionesDAO();
                $ActuacionesDtoPadre->setIdActuacion($idActuacionPadre);
                //print_r($ActuacionesDtoPadre);
                $ActuacionesDtoPadre = $ActuacionesDaoPadre->selectActuaciones($ActuacionesDtoPadre);
                if ($ActuacionesDtoPadre != "") {
                    $json .= '"idActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getIdactuacion())) . ",";
                    $json .= '"ActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getCveTipoActuacion())) . ",";
                    $json .= '"numActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getNumActuacion()) . '/') . ",";
                    $json .= '"aniActuacionPadre":' . json_encode(utf8_encode($ActuacionesDtoPadre[0]->getAniActuacion())) . ",";
                    $json .= '"observacionesPadre":' . json_encode($ActuacionesDtoPadre[0]->getObservaciones()) . ",";

                    if ($ActuacionesDtoPadre[0]->getCveTipoActuacion() == 2) {
                        $Origen = "ACUERDO";
                    } else {
                        $Origen = "AUTO";
                    }
                    $json .= '"Origen":' . json_encode(utf8_encode($Origen)) . ",";
                } else {
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
                $fechaRegistrotmp = $actuacionDto->getFechaRegistro();
                $tmpFecha = explode(' ', $fechaRegistrotmp);
                $fecha = explode('-', $tmpFecha[0]);
                $fechaRegistro = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                $json .= '"fechaRegistro":' . json_encode($fechaRegistro . ' ' . $tmpFecha[1]) . ",";

                $PersonasnotificarDto = new PersonasnotificarDTO();
                $PersonasnotificarDao = new PersonasnotificarDAO();
                $PersonasnotificarDto->setIdActuacion($actuacionDto->getIdActuacion());
                $PersonasnotificarDto->setActivo("S");

                $PersonasnotificarDto = $PersonasnotificarDao->selectPersonasnotificar($PersonasnotificarDto);
                if ($PersonasnotificarDto != "" or $PersonasnotificarDto != null) {
                    $json .= '"totalNotificaciones":' . json_encode(count($PersonasnotificarDto)) . ",";
                } else {
                    $json .= '"totalNotificaciones":' . json_encode(count(0)) . ",";
                }

                $json .= '"DetalleNotificacion": [';
                $y = 1;
                if ($PersonasnotificarDto != "") {
                    foreach ($PersonasnotificarDto as $Notificacion) {
                        $json.='{';
                        $json .= '"idActuacion":' . json_encode($Notificacion->getIdActuacion()) . ",";
                        $json .= '"idRelacionExp":' . json_encode($Notificacion->getIdRelacionExpedienteJuzgado()) . ",";

                        $RelacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();
                        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
                        $RelacionexpedientejuzgadoDto->setIdRelacionExpedienteJuzgado($Notificacion->getIdRelacionExpedienteJuzgado());
                        //$RelacionexpedientejuzgadoDto->setActivo('S');
                        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
                        $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
                        if ($RelacionexpedientejuzgadoDto != "") {
                            $jsonAux = '{';
                            $jsonAux .= '"totalCount":"1",';
                            //$jsonAux .= '"totalCount":"' . count($ActuacionesDto) . '",';
                            $jsonAux .= '"idPersonaAutorizada":[';
                            $jsonAux .= json_encode(utf8_encode($RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada()));
                            $jsonAux .= ']}';
                            $respuesta = $personaAutorizadaCliente->selectPersonaAutorizada($jsonAux); //RAM
                            $respuesta = json_decode($respuesta);
                            //            print_r($respuesta);
                            $totalCount = $respuesta->totalCount;

                            foreach ($respuesta->data as $datos) {
                                if ($RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada() == $datos->idPersonaAutorizada) {
                                    $json .= '"idPersonaAutorizada":' . json_encode($datos->idPersonaAutorizada) . ",";
                                    $json .= '"nombre":' . json_encode($datos->nombre) . ",";
                                    $json .= '"paterno":' . json_encode($datos->paterno) . ",";
                                    $json .= '"materno":' . json_encode($datos->materno) . ",";
                                    $json .= '"email":' . json_encode(($datos->cedula) . '@pjedomex.gob.mx') . ",";

                                    #----------------CC Detalle
                                    $AntecedesNotificacionesDto = new AntecedesnotificacionesDTO();
                                    $AntecedesNotificacionesDao = new AntecedesnotificacionesDAO();
                                    $AntecedesNotificacionesDto->setIdPersonaAutorizadaPadre($datos->idPersonaAutorizada);
                                    $AntecedesNotificacionesDto->setActivo('S');
                                    $AntecedesNotificacionesDto = $AntecedesNotificacionesDao->selectAntecedesnotificaciones($AntecedesNotificacionesDto);
                                    if ($AntecedesNotificacionesDto != 0) {
                                        $totalcc = count($AntecedesNotificacionesDto);
                                    } else {
                                        $totalcc = 0;
                                    }
                                    $json .= '"totalCopias":' . json_encode($totalcc) . ",";
                                    $json .= '"ConCopia":[';
                                    if ($AntecedesNotificacionesDto != 0) {
                                        $w = 1;
                                        foreach ($AntecedesNotificacionesDto as $copiar) {
                                            $jsonAux = '{';
                                            $jsonAux .= '"totalCount":"1",';
                                            $jsonAux .= '"idPersonaAutorizada":[';
                                            $jsonAux .= json_encode(utf8_encode($copiar->getIdPersonaAutorizadaHijo()));
                                            $jsonAux .= ']}';
                                            $respuestaCopia = $personaAutorizadaCliente->selectPersonaAutorizada($jsonAux); //RAM
                                            $respuestaCopia = json_decode($respuestaCopia);
                                            //            print_r($respuesta);
                                            $totalCount = $respuestaCopia->totalCount;

                                            $json .= '{';
                                            foreach ($respuestaCopia->data as $datos) {
                                                $json .= '"idPersonaAutorizadacc":' . json_encode($datos->idPersonaAutorizada) . ",";
                                                $json .= '"nombrecc":' . json_encode($datos->nombre) . ",";
                                                $json .= '"paternocc":' . json_encode($datos->paterno) . ",";
                                                $json .= '"maternocc":' . json_encode($datos->materno) . ",";
                                                $json .= '"cedulacc":' . json_encode($datos->cedula) . ",";
                                                $json .= '"emailcc":' . json_encode($datos->email);
                                            }
                                            $json .= "}";

                                            $w++;
                                            if ($w <= $totalcc) {
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

                        $fechaNotificaciontmp = $Notificacion->getFechaNotificacion();
                        if ($fechaNotificaciontmp != "" and $fechaNotificaciontmp != "2016") {
                            $tmpFecha = explode(' ', $fechaNotificaciontmp);
                            $fecha = explode('-', $tmpFecha[0]);
                            $fechaNotificacion = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                        } else {
                            $fechaNotificacion = "";
                        }
                        $json .= '"fechaNotificacion":' . json_encode($fechaNotificacion) . ",";
                        //$json .= '"Instructivo":' . json_encode($Notificacion->getInstructivo()) . ",";
                        $json .= '"Correo":' . json_encode($Notificacion->getCorreo()) . "";
                        $json.='}';
                        $y++;
                        if ($y <= count($PersonasnotificarDto)) {
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

    public function actualizarActuacionFormulacionImputacion($actuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion, $idFormulacionImputacion) {
        $actuacionesDao = new ActuacionesDAO();
        $bitacoraController = new BitacoramovimientosController();
        $tranSaccionExitosa = true;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $idActuacion = "";
        $ua = $actuacionesDao->updateActuaciones($actuacionesDto, $proveedor);
        $mensaje = "";
        if (($ua != "") || ($ua != null)) {
            $idActuacion = $ua[0]->getIdActuacion();
            $bitacora = $bitacoraController->agregar(29, 'tblactuaciones', 'dto', $ua, null, $proveedor);
            if (($bitacora == "") || ($bitacora == null)) {
                $mensaje.="ERROR. NOSE PUDO ACTUALIZAR EN BITACORA ";
                $tranSaccionExitosa = false;
            }
            $formulacionImputacionesDto = new FormulacionimputacionesDTO();
            $formulacionImputacionesDto->setIdFormulacionImputacion($idFormulacionImputacion);
            $formulacionImputacionesDto->setIdActuacion($ua[0]->getIdActuacion());
            //$formulacionImputacionesDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
            $formulacionImputacionesDto->setCveTipoFormulacion($cveTipoFormulacion);
            $formulacionImputacionesDto->setIdJuzgador($idJuzgador);
            $formulacionImputacionesDto->setActivo("S");
            $formulacionImputacionesDto->setFechaFormulacion($fechaFormulacion);
            $FormulacionImputacionesDao = new FormulacionimputacionesDAO();
            $ifi = $FormulacionImputacionesDao->updateFormulacionimputaciones($formulacionImputacionesDto, $proveedor);
            if (($ifi != "") && ($ifi != null)) {
                $idFormulacionImputacion = $ifi[0]->getIdFormulacionImputacion();
                $bitacora = $bitacoraController->agregar(274, 'tblformulacionimputaciones', 'dto', $ifi, null, $proveedor);
                if (($bitacora == "") || ($bitacora == null)) {
                    $mensaje.="ERROR. NOSE PUDO GUARDAR EN BITACORA ";
                    $tranSaccionExitosa = false;
                }
            } else {
                $mensaje.="ERROR. NO SE PUDO ACTUALIZAR LA FORMULACION DE IMPUTACION ";
                $tranSaccionExitosa = false;
            }
        } else {
            $tranSaccionExitosa = false;
            $mensaje.="ERROR AL ACTUALIZAR LA ACTUACION";
        }
        $transaccion = -1;
        if (!$tranSaccionExitosa) {
            $proveedor->execute("ROLLBACK");
            $transaccion = 0;
        } else {
            $proveedor->execute('COMMIT');
            $transaccion = 1;
            $mensaje = "ACTUALIZACION CORRECTA!";
        }
        $json = '{"transaccion":"' . $transaccion . '",';
        $json .= '"mensaje":' . json_encode(utf8_encode($mensaje)) . ",";
        $json .= '"idActuacion":' . $idActuacion . ",";
        $json .= '"idFormulacionImputacion":"' . $idFormulacionImputacion . '"';
        $json .= "}";
        $proveedor->close();
        return $json;
    }

    private function actualizaFechaFormulacionByIdImpOfeDelCarpeta($idImpOfeDelCarpeta, $fechaImputacion, $proveedor) {
        $ImpOfeDelCarpetaDto = new ImpofedelcarpetasDTO();
        $ImpOfeDelCarpetaDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
        $ImpOfeDelCarpetaDao = new ImpofedelcarpetasDAO();
        $consulta = $ImpOfeDelCarpetaDao->selectImpofedelcarpetas($ImpOfeDelCarpetaDto);
        if ($consulta != "") {
            $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
            $ImputadoscarpetasDto->setIdImputadoCarpeta($consulta[0]->getIdImputadoCarpeta());
            $ImputadoscarpetasDto->setFechaImputacion($fechaImputacion);
            $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
            $actualizacion = $ImputadoscarpetasDao->updateImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
            if ($actualizacion != "") {
                $bitacoraController = new BitacoramovimientosController();
                $bitacora = $bitacoraController->agregar(169, 'tblimputadoscarpetas', 'dto', $actualizacion, null, $proveedor);
                if ($bitacora != "") {
                    return true;
                }
            } else {
                return false;
            }
        }
        return false;
    }

    public function guardarActuacionFormulacionImputacion($actuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion) {
        $actuacionesDao = new ActuacionesDAO();
        $bitacoraController = new BitacoramovimientosController();
        $tranSaccionExitosa = true;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $numActuacion = $this->obtenerContadorActuacion($actuacionesDto->getCveJuzgado(), $actuacionesDto->getCveTipoActuacion(), $proveedor);
        $ia = null;
        $idFormulacionImputacion = "";
        $idActuacion = "";
        $mensaje = "";
        if (($numActuacion != "") && ($numActuacion != null)) {
            $numActuacion = $numActuacion[0]->getNumero();
            $actuacionesDto->setNumActuacion($numActuacion);
            $actuacionesDto->setAniActuacion(date("Y"));
            $fecha = date("Y/m/d");
            $actuacionesDto->setFechaRegistro($fecha);
            $actuacionesDto->setFechaActualizacion($fecha);
            $ia = $actuacionesDao->insertActuaciones($actuacionesDto, $proveedor);
            if ($ia != "") {
                $idActuacion = $ia[0]->getIdActuacion();
                $bitacora = $bitacoraController->agregar(28, 'tblactuaciones', 'dto', $ia, null, $proveedor);
                if (($bitacora == "") || ($bitacora == null)) {
                    $mensaje.="ERROR. NOSE PUDO GUARDAR EN BITACORA ";
                    $tranSaccionExitosa = false;
                }
            } else {
                $mensaje.="ERROR. NO SE PUDO INSERTAR LA ACTUACION ";
                $tranSaccionExitosa = false;
            }
            $tranSaccionExitosa = true;
        }
        if (($ia != "") && ($ia != null)) {
            $formulacionImputacionesDto = new FormulacionimputacionesDTO();
            $formulacionImputacionesDto->setIdActuacion($ia[0]->getIdActuacion());
            $formulacionImputacionesDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
            $formulacionImputacionesDto->setCveTipoFormulacion($cveTipoFormulacion);
            $formulacionImputacionesDto->setIdJuzgador($idJuzgador);
            $formulacionImputacionesDto->setActivo("S");
            $formulacionImputacionesDto->setFechaFormulacion($fechaFormulacion);
            $FormulacionImputacionesDao = new FormulacionimputacionesDAO();
            $ifi = $FormulacionImputacionesDao->insertFormulacionimputaciones($formulacionImputacionesDto, $proveedor);
            if (($ifi != "") && ($ifi != null)) {
                $idFormulacionImputacion = $ifi[0]->getIdFormulacionImputacion();
                $bitacora = $bitacoraController->agregar(274, 'tblformulacionimputaciones', 'dto', $ifi, null, $proveedor);
                if (($bitacora == "") || ($bitacora == null)) {
                    $mensaje.="ERROR. NOSE PUDO GUARDAR EN BITACORA ";
                    $tranSaccionExitosa = false;
                }
                $respuesta = $this->actualizaFechaFormulacionByIdImpOfeDelCarpeta($idImpOfeDelCarpeta, $fechaFormulacion, $proveedor);
                if (!$respuesta) {
                    $mensaje.="ERROR. NOSE PUDO ACTUALIZAR FECHA IMPUTACION ";
                    $tranSaccionExitosa = false;
                }
            } else {
                $mensaje.="ERROR. NO SE PUDO INSERTAR LA FORMULACION DE IMPUTACION ";
                $tranSaccionExitosa = false;
            }
        } else {
            $mensaje.="ERROR. NO SE PUDO INSERTAR LA ACTUACION ";
            $tranSaccionExitosa = false;
        }
        $transaccion = -1;
        if (!$tranSaccionExitosa) {
            $proveedor->execute("ROLLBACK");
            $transaccion = 0;
        } else {
            $proveedor->execute('COMMIT');
            $transaccion = 1;
            $mensaje = "REGISTRO EXITOSO!";
        }
        $json = '{"transaccion":"' . $transaccion . '",';
        $json .= '"mensaje":' . json_encode(utf8_encode($mensaje)) . ",";
        $json .= '"idActuacion":' . $idActuacion . ",";
        $json .= '"idFormulacionImputacion":"' . $idFormulacionImputacion . '"';
        $json .= "}";
        $proveedor->close();
        return $json;
    }

    #------------------------Termina Formulacion de imputacion---------------------------------------
    //*********************** generar json **************************************************************

    public function generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo) {


        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesDao = new ActuacionesDAO();
        $validacion = new Validacion();
//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {

        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, " ORDER BY idActuacion DESC ", null, null);


        if ($ActuacionesDto != "") {
            $json = "";
            $json .= '{"type":"generaPdf",';
            $json .= '"totalCount":"' . count($ActuacionesDto) . '",';

            $imagenesCtrl = new ImagenesController();
            $Arrayruta = $imagenesCtrl->insertaImagenGlobal($cveTipo, $ActuacionesDto[0]->getIdActuacion(), $cveTipoDocumento, null); // tipo se refiere a cualquier tipo de actuacion = 2 o carpeta = 1

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
}
