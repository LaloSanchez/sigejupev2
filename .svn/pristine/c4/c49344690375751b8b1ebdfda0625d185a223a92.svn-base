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
ini_set("error_log", dirname(__FILE__) . "/../../../logs/DefensoresimputadospeticionesController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/personaautorizadas/PersonaautorizadasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelantescarpetas/ApelantescarpetasController.Class.php");
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

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesestatusrad/ActuacionesestatusradController.Class.php");    // para registrar estatus del acuerdo de radicacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatusrad/ActuacionesestatusradDTO.Class.php");


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
include_once(dirname(__FILE__) . "/../impofedelcarpetas/ImpofedelcarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoressentencias/JuzgadoressentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formulacionimputaciones/FormulacionimputacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
//Imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../imputadoscarpetas/ImputadoscarpetasController.Class.php");

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
//Remisiones Apelaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelaciones/RemisionapelacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../remisionapelaciones/RemisionapelacionesController.Class.php");
//Remisiones Apelaciones Imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelacionesimputados/RemisionapelacionesimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelacionesimputados/RemisionapelacionesimputadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../remisionapelacionesimputados/RemisionapelacionesimputadosController.Class.php");
//Apelantes Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantescarpetas/ApelantescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../apelantescarpetas/ApelantescarpetasController.Class.php");
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
// includes para remision de apelacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelaciones/RemisionapelacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelacionesimputados/RemisionapelacionesimputadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelacionesimputados/RemisionapelacionesimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/numerosdefensores/NumerosdefensoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/numerosdefensores/NumerosdefensoresDTO.Class.php");

// error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

if (!isset($_SESSION)) {
    session_start();
}

class DefensoresimputadospeticionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function peticionesRemisionApelacion() {
        $respuesta = '';
        $error = false;
        $error2 = false;
        $errorDesc = '';
        $carpetasJudicialesArr = [];
//($ActuacionesDto);
        $defensoresimputadoscarpetasDAO = new DefensoresimputadoscarpetasDAO();
        $defensoresimputadoscarpetasDTO = new DefensoresimputadoscarpetasDTO();

        $defensoresimputadoscarpetasDTO->setActivo('S');
        $defensoresimputadoscarpetasDTO->setCveTipoDefensor(6);
        $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO);
        //var_dump($defensoresimputadoscarpetasDTO);
        foreach ($defensoresimputadoscarpetasDTO as $defensoresimputados) {
            $imputadoscarpetasDao = new ImputadoscarpetasDAO();
            $imputadoscarpetasDto = new ImputadoscarpetasDTO();
            $imputadoscarpetasDto->setIdImputadoCarpeta($defensoresimputados->getIdImputadoCarpeta());
            $imputadoscarpetasDto->setActivo("S");
            $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "");
            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
            $carpetasJudicialesDao = new CarpetasjudicialesDAO();
            $carpetasJudicialesDto->setIdCarpetaJudicial((int) $imputadoscarpetasDto[0]->getIdCarpetaJudicial());
            $carpetasJudicialesDto->setActivo("S");
            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
            if (array_search($carpetasJudicialesDto[0]->getIdCarpetaJudicial(), $carpetasJudicialesArr)) {
                
            } else {
                $carpetasJudicialesArr[] = $carpetasJudicialesDto[0]->getIdCarpetaJudicial();
            }
        }


        for ($i = 0; $i < count($carpetasJudicialesArr); $i++) {
            //print_r($carpetasJudicialesArr[$i].",");
            $NumerosdefensoresDTO = new NumerosdefensoresDTO();
            $NumerosdefensoresDAO = new NumerosdefensoresDAO();
            $NumerosdefensoresDTO->setEstatusEnvio(1);
            $NumerosdefensoresDTO->setIdCarpetaJudicial($carpetasJudicialesArr[$i]);
            $NumerosdefensoresDTO = $NumerosdefensoresDAO->selectNumerosdefensores($NumerosdefensoresDTO);
            //var_dump($NumerosdefensoresDTO);
            if ($NumerosdefensoresDTO != "") {
                //print_r($NumerosdefensoresDTO[0]->getIdCarpetaJudicial());
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($NumerosdefensoresDTO[0]->getIdCarpetaJudicial());
                $carpetasJudicialesDto->setActivo("S");
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                $tiposCarpetasDao = new TiposcarpetasDAO();
                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDto->setCveTipoCarpeta($carpetasJudicialesDto[0]->getCveTipoCarpeta());
                $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "", $this->proveedor);
                $tipoCarpeta = $tiposCarpetasDto[0]->getDesTipoCarpeta();
                $fecha = date("d/m/Y");
                $hora = date("H:i:s");
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto->setCveJuzgado($carpetasJudicialesDto[0]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
                $resultWebService = '{"tipoPeticion":"apelacion",' .
                        '"numCausa":"' . $carpetasJudicialesDto[0]->getIdCarpetaJudicial() . '-' . $carpetasJudicialesDto[0]->getAnio() . '-' . $tipoCarpeta . '-' . $carpetasJudicialesDto[0]->getNumero() . '",' .
                        '"procedencia":"PJE",' .
                        '"cargoSolicita":"' . $_SESSION["cveGrupo"] . '",' .
                        '"fechaSolicitud":"' . $fecha . '",' .
                        '"horaLlegada":"' . $hora . '",' .
                        '"fechaAudiencia":"' . '",' .
                        '"horaAudiencia":"' . '",' .
                        '"nombreRemite":"' . $_SESSION["Nombre"] . '",' .
                        '"distritoJudicial":"' . $juzgadosDto[0]->getDesDistrito() . '",' .
                        '"juzgado":"' . $juzgadosDto[0]->getDesJuzgado() . '",' . //pendiente
                        '"solicitudes":[';
                foreach ($NumerosdefensoresDTO as $numeroDefensor) {
                    $defensoresimputadoscarpetasDAO = new DefensoresimputadoscarpetasDAO();
                    $defensoresimputadoscarpetasDTO = new DefensoresimputadoscarpetasDTO();
                    $defensoresimputadoscarpetasDTO->setIdDefensorImputadoCarpeta($numeroDefensor->getIdDefensorImputadoCarpeta());
                    $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO);
                    $imputadoscarpetasDao = new ImputadoscarpetasDAO();
                    $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                    $imputadoscarpetasDto->setIdImputadoCarpeta($numeroDefensor->getIdImputadoCarpeta());
                    $imputadoscarpetasDto->setActivo("S");
                    $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "");
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                    $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                    $carpetasJudicialesDto->setIdCarpetaJudicial((int) $imputadoscarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetasJudicialesDto->setActivo("S");
                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                    $valDefensor = true;
                    //var_dump($listaDefensores);
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");

                    //foreach ($listaDefensores as $Defensores) {

                    if ($imputadoscarpetasDto != "") {

//                          var_dump($defensoresimputadoscarpetasDTO);
                        if ($defensoresimputadoscarpetasDTO != "") {
                            if ((int) $imputadoscarpetasDto[0]->getCveTipoPersona() == 1) {
                                $nombre = utf8_encode($imputadoscarpetasDto[0]->getNombre());
                            } else {
                                $nombre = utf8_encode($imputadoscarpetasDto[0]->getNombreMoral());
                            }
                            $generosDto = new GenerosDTO();
                            $generosDao = new GenerosDAO();
                            $generosDto->setCveGenero($imputadoscarpetasDto[0]->getCveGenero());
                            $generosDto = $generosDao->selectGeneros($generosDto);
                            $resultWebService .='{ "idReferencia":"' . $defensoresimputadoscarpetasDTO[0]->getIdDefensorImputadoCarpeta() . '",' .
                                    '"nombre":"' . $nombre . '",' .
                                    '"paterno":"' . utf8_encode($imputadoscarpetasDto[0]->getPaterno()) . '",' .
                                    '"materno":"' . utf8_encode($imputadoscarpetasDto[0]->getMaterno()) . '",' .
                                    '"NUC":"' . $carpetasJudicialesDto[0]->getNuc() . '",' .
                                    '"curp":"' . $imputadoscarpetasDto[0]->getCurp() . '",' .
                                    '"sexo":"' . $generosDto[0]->getDesGenero() . '",' .
                                    '"numAbogado":"' . $numeroDefensor->getNumeroDefensor() . '"},';
                        } else {
                            $valDefensor = false;
                        }


                        //aqui hacer la peticion del defensor con Karina para identificar que defensor se mandara el numero de defensor $Defensores->numeroDefensor                            
                    } else {
                        $msg[] = array("Error al agregar defensor de imputados");
                        $error = true;
                    }
                    //}
                }
                $resultWebService = trim($resultWebService, ',');
                $resultWebService .= "]}";
                if ($valDefensor) {

                    $respuestaWebService2 = json_decode($this->peticionDefensorWebService($resultWebService));
                    //$respuestaWebService2 = json_decode('{"status":"OK","response":[{"Folio":"IDP/EDOMEX/DRO/100/2016","FechaSolicitud":"13/10/2016","FechaRegistro":"13/10/2016","HoraSolicitud":"09:53:20","Estatus":"Autorizada","IdReferencia":"162061","Tipo":"apelacion"},{"Folio":"IDP/EDOMEX/DRO/101/2016","FechaSolicitud":"13/10/2016","FechaRegistro":"13/10/2016","HoraSolicitud":"09:53:20","Estatus":"Autorizada","IdReferencia":"162234","Tipo":"apelacion"}]}');
                    $respuestaWebService3 = $respuestaWebService2;

                    if ($respuestaWebService3->status == "OK") {
                        for ($u = 0; $u < count($respuestaWebService3->response); $u++) {
                            if ($respuestaWebService3->response[$u]->Estatus == "Autorizada") {
                                $defensoresimputadoscarpetasDAO = new DefensoresimputadoscarpetasDAO();
                                $defensoresimputadoscarpetasDTO = new DefensoresimputadoscarpetasDTO();
                                $defensoresimputadoscarpetasDTO->setIdDefensorImputadoCarpeta((int) $respuestaWebService3->response[$u]->IdReferencia);
                                $defensoresimputadoscarpetasDTO->setActivo("S");
                                $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO, '', $this->proveedor);
                                if ($defensoresimputadoscarpetasDTO != "") {
                                    $defensoresimputadoscarpetasDTO[0]->setTelefono($respuestaWebService3->response[$u]->Folio . "|" . $respuestaWebService3->response[$u]->Estatus);
                                    $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->updateDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO[0], $this->proveedor);
                                    $numerosDefensoresDAO = new NumerosdefensoresDAO();
                                    $numerosDefensoresDTO = new NumerosdefensoresDTO();
                                    $numerosDefensoresDTO->setIdDefensorImputadoCarpeta((int) $respuestaWebService3->response[$u]->IdReferencia);
                                    $numerosDefensoresDTO = $numerosDefensoresDAO->selectNumerosdefensores($numerosDefensoresDTO);

                                    if ($numerosDefensoresDTO != "") {
                                        $numerosDefensoresDTO[0]->setEstatusEnvio(2);
                                        $numerosDefensoresDTO = $numerosDefensoresDAO->updateNumerosdefensores($numerosDefensoresDTO[0], $this->proveedor);
                                    }
                                }
                            }
                        }
                    } else {
                        //comparar el tipo de error para ver si se actualizar el status
                    }
                    // como actualizar los status de peticion de los defensores (numerosdefensores)
//                        else if($respuestaWebService3->status == "error") {
//                            for ($u = 0; $u < count($idTablaDefensores); $u++) {
//                                $defensoresimputadoscarpetasDAO = new DefensoresimputadoscarpetasDAO();
//                                $defensoresimputadoscarpetasDTO = new DefensoresimputadoscarpetasDTO();
//                                $defensoresimputadoscarpetasDTO->setIdDefensorImputadoCarpeta((int) $idTablaDefensores[$u]);
//                                $defensoresimputadoscarpetasDTO->setActivo("S");
//                                $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO, '', $this->proveedor);
//                                $defensoresimputadoscarpetasDTO[0]->setTelefono($respuestaWebService3->Folio . "|" . $respuestaWebService3->Estatus);
//                                $defensoresimputadoscarpetasDTO = $defensoresimputadoscarpetasDAO->updateDefensoresimputadoscarpetas($defensoresimputadoscarpetasDTO[0], $this->proveedor);
//                                $numerosDefensoresDAO = new NumerosdefensoresDAO();
//                                    $numerosDefensoresDTO = new NumerosdefensoresDTO();
//                                    $numerosDefensoresDTO->setIdDefensorImputadoCarpeta((int) $respuestaWebService3->response[$w]->IdReferencia);
//                                    $numerosDefensoresDTO = $numerosDefensoresDAO->selectNumerosdefensores($numerosDefensoresDTO);
//                                    if ($numerosDefensoresDTO != "") {
//                                        $numerosDefensoresDTO[0]->setEstatusEnvio(2);
//                                        $numerosDefensoresDTO = $numerosDefensoresDAO->updateNumerosdefensores($numerosDefensoresDTO[0], $this->proveedor);
//                                    }
//                            }
//                        }
                } else {
                    $rollback = true;
                    $msg[] = array("Error al realizar la solicitud del defensor");
                }
            }
        }




        if ($rollback == true) {
            //$this->proveedor->execute('ROLLBACK');
            $result = array(
                "status" => "Error",
                "msj" => $msg
            );
            return json_encode($result);
        } else {
            // $this->proveedor->execute('COMMIT');
// debo regresar numero y anio de toca y la sala a la cual se asigno el caso 
// regresar el id de la toca y de la remision
// 
            $msg = array("Registro Actualizado Correctamente");
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "msj" => $msg,
                "resultados" => $listaResultados,
            );
            return json_encode($result);
        }
    }

    public function peticionDefensorWebService($resultWebSerice) {
        $textError = "";
        ob_start();
        try {
            $curl = curl_init();
//            curl_setopt_array($curl, array(
//                CURLOPT_PORT => "9000",
//                CURLOPT_URL => "http://sigedepu.idpedomex.gob.mx:9000/ws/solicitud/save",
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_ENCODING => "",
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 30,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => "POST",
//                CURLOPT_POSTFIELDS => $resultWebSerice,
//                CURLOPT_HTTPHEADER => array(
//                    "Authorization: Basic cmVjZXB0b3Iuc29saWNpdHVkLnBqZTo5Qmc4WjloYU5vTW9XMmlR",
//                    "cache-control: no-cache",
//                    "content-type: application/x-www-form-urlencoded"
//                ),
//            ));
//            $resultWebSerice="idReferencia=1063708&nombreRemite=KARINA MILLAN MANJARREZ&procedencia=PJE&cargoSolicita=91&fechaSolicitud=//2016-07-12&horaLlegada=10:45:00&nombre=BRANDON DAVID CHAVEZ GUTIERREZ&paterno=&materno=&NUC=120121000001916&distritoJudicial=TENANGO DEL VALLE&curp=&sexo=";

            curl_setopt_array($curl, array(
                CURLOPT_PORT => "9015",
                CURLOPT_URL => "http://mini.evomatik.net:9015/ws/solicitud/save",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $resultWebSerice,
                CURLOPT_HTTPHEADER => array(
//                    "Authorization: Basic cmVjZXB0b3JTb2xpY2l0dWQxOnNlY3JldA==",
                    "Authorization: Basic cmVjZXB0b3JTb2xpY2l0dWQxOnNlY3JldA==",
                    "cache-control: no-cache",
                    "content-type: application/json"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            json_decode($response);

            print_r($response);
            if (json_last_error() == JSON_ERROR_SYNTAX) {
                throw new Exception("{error: Los parametros no son correctos}");
            } else {
                $textError = $response;
            }
        } catch (Exception $e) {

            json_decode($response);
            ob_end_clean();
            //$response = "{\"errors\":\"" . $e->getMessage() . "\"}";
            $textError = $response;
        }/*  finally { */
        $bitacoraWsDto = new BitacorawsDTO();
        $BitacoraWsRespDto = new BitacorawsDTO();
        $bitacoraWsDao = new BitacorawsDAO();
        $fechaRegistro = date("Y-m-d H:i:s");
        $bitacoraWsDto->setCveAccionws(21);
        $bitacoraWsDto->setObservacionesOrigen($resultWebSerice);
        json_decode($textError);
        var_dump($textError);
        if (json_last_error() == JSON_ERROR_SYNTAX) {
            $bitacoraWsDto->setDescEstatusBitacoraws("Error. Respuesta invalida");
            $bitacoraWsDto->setObservacionesDestino(base64_encode($textError));
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO ALGO DIFERENTE A UN JSON");
        } else {
            $bitacoraWsDto->setDescEstatusBitacoraws("respuesta valida");
            $bitacoraWsDto->setObservacionesDestino($textError);
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO UN JSON VALIDO");
        }
        $bitacoraWsDto->setFechaRegistro($fechaRegistro);
        $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
        /* } */
        return $response;
    }

    public function peticionDefensorWebServiceOfendido($resultWebSerice) {
//        $textError = "";
//        ob_start();
//        try {
//            $curl = curl_init();
//
//            curl_setopt_array($curl, array(
//                CURLOPT_PORT => "9010",
//                CURLOPT_URL => "http://mini.evomatik.net:9010/ws/solicitud/save",
////                CURLOPT_PORT => "9000",
////                CURLOPT_URL => "http://sigedepu.idpedomex.gob.mx:9000",
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_ENCODING => "",
//                CURLOPT_SSL_VERIFYPEER => false,
//                CURLOPT_SSL_VERIFYHOST => false,
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 30,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => "POST",
//                CURLOPT_POSTFIELDS => $resultWebSerice,
//                CURLOPT_HTTPHEADER => array(
//                    "Authorization: Basic cmVjZXB0b3JTb2xpY2l0dWQxOnNlY3JldA==",
//                    "cache-control: no-cache",
//                    "content-type: application/x-www-form-urlencoded"
//                ),
//            ));
//
//            $response = curl_exec($curl);
//            $err = curl_error($curl);
//            curl_close($curl);
//            json_decode($response);
//            if (json_last_error() == JSON_ERROR_SYNTAX) {
//                throw new Exception("Error en la comunicacion con el webService");
//            } else {
//                $textError = $response;
//            }
//        } catch (Exception $e) {
//            ob_end_clean();
//            $response = $e->getMessage();
//            $response = "{\"error\":\"" . $e->getMessage() . "\"}";
//            $textError = $response;
//        } finally {
//            $bitacoraWsDto = new BitacorawsDTO();
//            $BitacoraWsRespDto = new BitacorawsDTO();
//            $bitacoraWsDao = new BitacorawsDAO();
//            $fechaRegistro = date("Y-m-d H:i:s");
//            $bitacoraWsDto->setCveAccionws(17);
//            $bitacoraWsDto->setObservacionesOrigen($resultWebSerice);
//            json_decode($textError);
//            if (json_last_error() == JSON_ERROR_SYNTAX) {
//                $bitacoraWsDto->setDescEstatusBitacoraws("Error. Respuesta invalida");
//                $bitacoraWsDto->setObservacionesDestino(base64_encode($textError));
//                $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO ALGO DIFERENTE A UN JSON");
//            } else {
//                $bitacoraWsDto->setDescEstatusBitacoraws("respuesta valida");
//                $bitacoraWsDto->setObservacionesDestino($textError);
//                $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO UN JSON VALIDO");
//            }
//            $bitacoraWsDto->setFechaRegistro($fechaRegistro);
//            $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
//        }
//        return $response;
    }

    //*********************** generar json **************************************************************
}
