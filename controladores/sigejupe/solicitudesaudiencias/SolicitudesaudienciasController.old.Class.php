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

/*
 * auto de apertura a juicio
 */

ini_set('memory_limit', '1024M');

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/aperturasjuicio/AperturasjuicioDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/aperturasjuicio/AperturasjuicioDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
/*
 * iMPUTADOS SOLICITUDES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputados/TutoresimputadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");
/*
 * OFENDIDOS SOLICITUDES
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");

/*
 * DELITOS SOLICITUDES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");

/*
 * RELACION DE DELITOS, OFENDIDOS E IMPUTADOS SOLICITUDES DE AUDIENCIA
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

/*
 * EFECTOS OFENDIDOS DE LA SOLICITUD 
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");

/*
 * trATA DE PERSONAS DE LA SOLICITUD
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");

/*
 * VIOLENCIA DE GENERO
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");

/*
 * ACOSO Y HOSTIGAMIENTO SEXUAL
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");

/*
 * EFECTOS SEXUALES DE LA SOLICITUD
 */
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectossexuales/EfectossexualesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectossexuales/EfectossexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");


/*
 * CATALOGOS DE LA SOLICITUD
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasdistritos/AudienciasdistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");


/*
 * DATOS DE LA CARPETA JUDICIAL PARA COPIAR A LA SOLICITUD DE AUDIENCIA
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
/*
 * IMPUTADOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");

/*
 * DELITOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

/*
 * RELACION DE DELITOS,OFENDIDOS E IMPUTADOS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

/*
 * EFECTOS OFENDIDOS CARPETAS JUDICIALES 
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");

/*
 * TRATA DE PERSONAS CARPETAS JUDICIALES
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");

/*
 * VIOLENCIA DE GENERO
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");


/*
 * ACOSO Y HOSTIGAMIENTO SEXUAL
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");

/*
 * EFECTOS SEXUALES DE LA SOLICITUD
 */
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectossexualescarpetas/EfectossexualescarpetasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectossexualescarpetas/EfectossexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
//Termina la informacion de las carpetas

/*
 * BITACORA DE ASIGNACION
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraasignaciones/BitacoraasignacionesDAO.Class.php");

/*
 * SALAS DE AUDIENCIAS ASIGNADAS A JUZGADORES
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salasjuzgadores/SalasjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlsalas/ControlsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraasignaciones/BitacoraasignacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/calendario/CalendarioDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/calendario/CalendarioDTO.Class.php");


include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresController.Class.php");


include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../aplicacion/configuracion.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/fechas/Fechas.Class.php");


/*
 * metodo para generar carpetas judiciales desde una solicitud
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesService.Class.php");
include_once(dirname(__FILE__) . "/BuscarJuzgadoresController.Class.php");

/*
 * metodo para buscar en toca web service y copiar datos a solicitudes audiencias
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/segundainstanciatoca/TocaElectronicoService.Class.php");

class SolicitudesaudienciasController {

    private $proveedor;
    private $bitacoraAsignacion = array();

    public function __construct() {
        
    }

    public function validarSolicitudesaudiencias($SolicitudesaudienciasDto) {
        $SolicitudesaudienciasDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getidSolicitudAudiencia()))));
        $SolicitudesaudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveCatAudiencia()))));
        $SolicitudesaudienciasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveJuzgadoDesahoga()))));
        $SolicitudesaudienciasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveJuzgado()))));
        $SolicitudesaudienciasDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveConsignacion()))));
        $SolicitudesaudienciasDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveEtapaProcesal()))));
        $SolicitudesaudienciasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getidReferencia()))));
        $SolicitudesaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getfechaRegistro()))));
        $SolicitudesaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getfechaActualizacion()))));
        $SolicitudesaudienciasDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getfechaEnvio()))));
        $SolicitudesaudienciasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveTipoCarpeta()))));
        $SolicitudesaudienciasDto->setnumero(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getnumero()))));
        $SolicitudesaudienciasDto->setanio(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getanio()))));
        $SolicitudesaudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getactivo()))));
        $SolicitudesaudienciasDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcarpetaInv()))));
        $SolicitudesaudienciasDto->setnuc(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getnuc()))));
        $SolicitudesaudienciasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveUsuario()))));
        $SolicitudesaudienciasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveAdscripcionSolicita()))));
        $SolicitudesaudienciasDto->setmismoJuzgador(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getmismoJuzgador()))));
        $SolicitudesaudienciasDto->setcveEstatusSolicitud(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveEstatusSolicitud()))));
        $SolicitudesaudienciasDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getobservaciones()))));
        $SolicitudesaudienciasDto->setnumImputados(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getnumImputados()))));
        $SolicitudesaudienciasDto->setnumDelitos(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getnumDelitos()))));
        $SolicitudesaudienciasDto->setnumOfendidos(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getnumOfendidos()))));
        $SolicitudesaudienciasDto->setcveNaturaleza(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveNaturaleza()))));
        $SolicitudesaudienciasDto->setcveTipoAudiencia(strtoupper(str_ireplace("'", "", trim($SolicitudesaudienciasDto->getcveTipoAudiencia()))));

        return $SolicitudesaudienciasDto;
    }

    public function selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param, $proveedor = null) {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//        $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param, "", $proveedor);
        $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->selectSolicitudesaudienciasGeneral($SolicitudesaudienciasDto, null, "", $param, null);

        return $SolicitudesaudienciasDto;
    }

    public function getPaginas($SolicitudesaudienciasDto, $param) {
        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
        $numTot = $SolicitudesaudienciasDao->selectSolicitudesaudienciasGeneral($SolicitudesaudienciasDto, null, "", $param, " count(idSolicitudAudiencia) as totalCount ");

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index ++) {
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x ++;
                if ($x <= ($totPages)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }


        return $json;
    }

    public function guardarSolicitudDeAudiencia($SolicitudesaudienciasDto, $proveedor = null) {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
//        var_dump($SolicitudesaudienciasDto);
        $logger = new Logger("/../../logs/", "SolicitudDeAudiencias");
        $logger->w_onError("**********COMIENZA EL PROGRAMA DE SOLICITUD DE AUDIENCIAS**********");

        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();

        if ($validacion->num(0, 2, (int) $SolicitudesaudienciasDto->getNumImputados())) {
            if ((int) $SolicitudesaudienciasDto->getNumImputados() <= 0) {
                $logger->w_onError("NO INGRESO EL NUMERO DE IMPUTADOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumImputados());
                $msg[] = array("El numero de imputados es un campo requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("NO INGRESO EL NUMERO DE IMPUTADOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumImputados());
            $msg[] = array("El numero de imputados es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $SolicitudesaudienciasDto->getNumOfendidos())) {
            if ((int) $SolicitudesaudienciasDto->getNumOfendidos() <= 0) {
                $logger->w_onError("NO INGRESO EL NUMERO DE OFENDIDOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumOfendidos());
                $msg[] = array("El numero de ofendidos es un campo requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("NO INGRESO EL NUMERO DE OFENDIDOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumOfendidos());
            $msg[] = array("El numero de ofendidos es un campo requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $SolicitudesaudienciasDto->getNumDelitos())) {
            if ((int) $SolicitudesaudienciasDto->getNumDelitos() <= 0) {
                $logger->w_onError("NO INGRESO EL NUMERO DE DELITOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumOfendidos());
                $msg[] = array("El numero de delitos es un campo requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("NO INGRESO EL NUMERO DE DELITOS Y ES UN CAMPO REQUERIDO  " . $SolicitudesaudienciasDto->getNumOfendidos());
            $msg[] = array("El numero de delitos es un campo requerido");
            $error = true;
        }

        if (((int) $SolicitudesaudienciasDto->getCveTipoCarpeta() > 0) && ((string) $SolicitudesaudienciasDto->getCveTipoCarpeta() != "")) {
            $logger->w_onError("EL TIPO DE CARPETA ES DIFERENTE DE VACIO Y MAYOR A CERO");
            if ($validacion->num(0, 4, (int) $SolicitudesaudienciasDto->getNumero())) {
                if ((int) $SolicitudesaudienciasDto->getNumero() <= 0) {
                    $logger->w_onError("EL NUMERO DE CARPETA ES UN CAMPO REQUERIDO");
                    $msg[] = array("El numero de caarpeta es un campo requerido");
                    $error = true;
                }
            } else {
                $logger->w_onError("EL NUMERO DE CARPETA ES UN CAMPO REQUERIDO");
                $msg[] = array("El numero de carpeta es un campo requerido");
                $error = true;
            }
            if ($validacion->num(3, 4, (int) $SolicitudesaudienciasDto->getAnio())) {
                if ((int) $SolicitudesaudienciasDto->getAnio() <= 0) {
                    $logger->w_onError("EL ANIO ES UN CAMPO REQUERIDO");
                    $msg[] = array("El anio es un campo requerido");
                    $error = true;
                }
            } else {
                $logger->w_onError("EL ANIO ES UN CAMPO REQUERIDO");
                $msg[] = array("El anio es un campo requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("EL TIPO DE CARPETA ES IGUAL A VACIO O MENOR IGUAL A CERO");
////            if ($validacion->textNum(1, 30, (string) $SolicitudesaudienciasDto->getNuc())) {
//                if ( $SolicitudesaudienciasDto->getNuc() == "") {
//                    $logger->w_onError("EL NUMERO DE CARPETA DE INVESTIGACION Y/O NUC ES UN CAMPO REQUERIDO");
//                    $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
//                    $error = true;
//                }
//            } else {
//                if ($validacion->textNum(1, 30, (string) $SolicitudesaudienciasDto->getCarpetaInv())) {
            if (($SolicitudesaudienciasDto->getCarpetaInv() == "") && ($SolicitudesaudienciasDto->getNuc() == "")) {
                $logger->w_onError("EL NUMERO DE CARPETA DE INVESTIGACION Y/O NUC ES UN CAMPO REQUERIDO");
                $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
                $error = true;
            }
//            if ($SolicitudesaudienciasDto->getNuc() == "") {
//                $logger->w_onError("EL NUMERO DE CARPETA DE INVESTIGACION Y/O NUC ES UN CAMPO REQUERIDO");
//                $msg[] = array("El numero de Carpeta de Investigacion y/o NUC es un campo requerido");
//                $error = true;
//            }
//            }
        }

        if ($validacion->num(0, 5, (int) $SolicitudesaudienciasDto->getCveCatAudiencia())) {
            if ((int) $SolicitudesaudienciasDto->getCveCatAudiencia() <= 0) {
                $logger->w_onError("LA CLAVE DE AUDIENCIA ES UN CAMPO REQUERIDO");
                $msg[] = array("El tipo de Audiencia es requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("LA CLAVE DE AUDIENCIA ES UN CAMPO REQUERIDO");
            $error = true;
        }

        if ($validacion->num(0, 11, (int) $SolicitudesaudienciasDto->getCveJuzgado())) {
            if ((int) $SolicitudesaudienciasDto->getCveJuzgado() <= 0) {
                $logger->w_onError("EL JUZGADO ES UN CAMPO REQUERIDO");
                $msg[] = array("El Juzgado es requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("EL JUZGADO ES UN CAMPO REQUERIDO");
            $msg[] = array("El juzgado es requerido");
            $error = true;
        }

        if ($validacion->num(0, 2, (int) $SolicitudesaudienciasDto->getCveConsignacion())) {
            if ((int) $SolicitudesaudienciasDto->getCveConsignacion() <= 0) {
                $logger->w_onError("EL TIPO CONSIGNACION ES REQUERIDO");
                $msg[] = array("El tipo consignacion es requerido");
                $error = true;
            }
        } else {
            $logger->w_onError("EL TIPO CONSIGNACION ES REQUERIDO");
            $msg[] = array("El tipo consignacion es requerido");
            $error = true;
        }

        if ((!$error) && (count($msg) == 0)) {
            $logger->w_onError("HASTA EL MOMENTO TODO VA BIEN CON LA INFORMACION DE LA SOLICITUD DE AUDIENCIA");

            if ((int) $SolicitudesaudienciasDto->getIdSolicitudAudiencia() <= 0) {
                $logger->w_onError("LA SOLICITUD ES NUEVA");
                //GUARDA UN NUEVO REGISTRO DE LA SOLICITUD DE AUDIENCIA
                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                $tiposCarpetasDao = new TiposcarpetasDAO();
                $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                $logger->w_onError("BUSCAMOS LA INFORMACION DEL TIPO DE CARPETA CON LA CUAL ESTAN SOLICITANDO LA AUDIENCIA");
                if ($tiposCarpetasDto != "") {
                    $logger->w_onError("SE DETERMINA QUE EL TIPO DE CARPETA EXISTE EN EL CATALOGO DE TIPOS DE CARPETAS ");
                    $tiposCarpetasDto = $tiposCarpetasDto[0];
                } else {
                    $SolicitudesaudienciasDto->setCveTipoCarpeta("");
                }

                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                if (((int) $SolicitudesaudienciasDto->getCveTipoCarpeta() <= 0) || ((string) $SolicitudesaudienciasDto->getCveTipoCarpeta() == "")) {
                    $logger->w_onError("BUSCAMOS LA INFORMACION EN CARPETAS JUDICIALES PARA DETERMINAR SI EXISTEN ANTECEDENTES");
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                    $carpetasJudicialesDto->setActivo("S");
                    $orden = " " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " And carpetaInv=" . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . " " . (($SolicitudesaudienciasDto->getNuc() != "") ? " And nuc=" . $SolicitudesaudienciasDto->getNuc() . " " : " ");
                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, $orden);

                    if (sizeof($carpetasJudicialesDto) <= 2) {
                        if ($SolicitudesaudienciasDto->getCarpetaInv() != "") { //BUSCAMOS LA INFORMACION CON LA CARPETA DE INVESTIGACION Y TIPO DE CARPETA DE CONTROL
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                            $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                                $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else {//SIN O SE ENCUENTRAN COINCIDENCIAS CON LA CARPETA DE INVESGACION SE BUSCA POR EL NUC
                                    if ($SolicitudesaudienciasDto->getNuc() != "") {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                        $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                                        $carpetasJudicialesDto->setActivo("S"); // CARPETA DE CONTROL

                                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                        if ($carpetasJudicialesDto != "") {
                                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                        } else {
                                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                            $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                            $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                            if ($carpetasJudicialesDto != "") {
                                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                            }
                                        }
                                    }
                                }
                            }
                        } else if ($SolicitudesaudienciasDto->getNuc() != "") {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                            $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                }
                            }
                        }
                    } else if (sizeof($carpetasJudicialesDto) >= 3) {
                        $logger->w_onError("LOS DATOS PROPORCIONADOS " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " carpetaInv: " . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . (($SolicitudesaudienciasDto->getNuc() != "") ? " nuc: " . $SolicitudesaudienciasDto->getNuc() . " " : " ") . " CUENTA CON MAS DE DOS CARPETAS JUDICIALES RADICADAS VERIFIQUE");
                        $msg[] = array("LOS DATOS PROPORCIONADOS " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " carpetaInv: " . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . (($SolicitudesaudienciasDto->getNuc() != "") ? " nuc: " . $SolicitudesaudienciasDto->getNuc() . " " : " ") . " CUENTA CON MAS DE DOS CARPETAS JUDICIALES RADICADAS VERIFIQUE");
                        $error = true;
                    }
                } else {
                    if ($SolicitudesaudienciasDto->getCveTipoCarpeta() == 1) {
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta(1); // Buscamos si tiene una carpeta de control
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            $antecedescarpetasDto = new AntecedescarpetasDTO();
                            $antecedescarpetasDto->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                            $antecedescarpetasDto->setCveTipoCarpeta(2);
                            $antecedescarpetasDto->setActivo("S");
                            $antecedescarpetasDao = new AntecedescarpetasDAO();
                            $antecedescarpetasDto = $antecedescarpetasDao->selectAntecedescarpetas($antecedescarpetasDto, "");
                            if ($antecedescarpetasDto != "") {
                                $antecedescarpetasDto = $antecedescarpetasDto[0];
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setIdCarpetaJudicial($antecedescarpetasDto->getIdCarpetaHija());
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else {
                                    $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                                    $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                                    $error = true;
                                }
                            }
                        } else {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                            $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                            $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                            $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                                $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                                $error = true;
                            }
                        }
                    } else if ($SolicitudesaudienciasDto->getCveTipoCarpeta() == 6) {


                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                        } else {

                            $tocaElectronicoService = new TocaElectronicoService();

                            $data = [
                                'numero' => $SolicitudesaudienciasDto->getNumero(),
                                'anio' => $SolicitudesaudienciasDto->getAnio(),
                                'sala' => $SolicitudesaudienciasDto->getCveJuzgado()
                            ];

                            $responseTocaElectronicoService = $tocaElectronicoService->consultaToca($SolicitudesaudienciasDto->getCveCatAudiencia(), $data);

                            if ($responseTocaElectronicoService['estatus'] == 'error') {

                                $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE: LINEA" . __LINE__);
                                $msg[] = array($responseTocaElectronicoService['mensaje']);

                                $error = true;
                            } else {

                                $tmpDto = new SolicitudesaudienciasDTO();
                                $tmpDto->setIdSolicitudAudiencia($responseTocaElectronicoService['idSolicitudAudiencia']);
                                $tmpDao = new SolicitudesaudienciasDAO();
                                $tmpDto = $tmpDao->selectSolicitudesaudiencias($tmpDto, "", "", $this->proveedor);
                                $listaResultados = array();
                                if ($tmpDto != "") {
                                    $resultado = array(
                                        "idSolicitudAudiencia" => $tmpDto[0]->getidSolicitudAudiencia(),
                                        "cveCatAudiencia" => $tmpDto[0]->getcveCatAudiencia(),
                                        "cveJuzgadoDesahoga" => $tmpDto[0]->getcveJuzgadoDesahoga(),
                                        "cveJuzgado" => $tmpDto[0]->getcveJuzgado(),
                                        "cveConsignacion" => $tmpDto[0]->getcveConsignacion(),
                                        "cveEtapaProcesal" => $tmpDto[0]->getcveEtapaProcesal(),
                                        "idReferencia" => $tmpDto[0]->getidReferencia(),
                                        "fechaRegistro" => $tmpDto[0]->getfechaRegistro(),
                                        "fechaActualizacion" => $tmpDto[0]->getfechaActualizacion(),
                                        "fechaEnvio" => $tmpDto[0]->getfechaEnvio(),
                                        "cveTipoCarpeta" => $tmpDto[0]->getcveTipoCarpeta(),
                                        "numero" => $tmpDto[0]->getnumero(),
                                        "anio" => $tmpDto[0]->getanio(),
                                        "activo" => $tmpDto[0]->getactivo(),
                                        "carpetaInv" => $tmpDto[0]->getcarpetaInv(),
                                        "nuc" => $tmpDto[0]->getnuc(),
                                        "cveUsuario" => $tmpDto[0]->getcveUsuario(),
                                        "cveAdscripcionSolicita" => $tmpDto[0]->getcveAdscripcionSolicita(),
                                        "mismoJuzgador" => $tmpDto[0]->getmismoJuzgador(),
                                        "cveEstatusSolicitud" => $tmpDto[0]->getcveEstatusSolicitud(),
                                        "observaciones" => utf8_encode($tmpDto[0]->getobservaciones()),
                                        "numImputados" => $tmpDto[0]->getnumImputados(),
                                        "numDelitos" => $tmpDto[0]->getnumDelitos(),
                                        "numOfendidos" => $tmpDto[0]->getnumOfendidos(),
                                        "cveNaturaleza" => $tmpDto[0]->getcveNaturaleza(),
                                        "cveTipoAudiencia" => $tmpDto[0]->getcveTipoAudiencia()
                                    );
                                    array_push($listaResultados, $resultado);
                                    $result = array("status" => "Ok", "msj" => "La solicitud se registro de forma correcta", "resultado" => $listaResultados);
                                    $result = json_encode($result);
                                }

                                return $result;
                            }
                        }
                    } else {
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                        } else {
                            $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                            $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                            $error = true;
                        }
                    }
                }

                if ($carpetasJudicialesDto != "") {
                    $SolicitudesaudienciasDto->setIdReferencia($carpetasJudicialesDto->getIdCarpetaJudicial());
                    $SolicitudesaudienciasDto->setNumero($carpetasJudicialesDto->getNumero());
                    $SolicitudesaudienciasDto->setAnio($carpetasJudicialesDto->getAnio());
                    $SolicitudesaudienciasDto->setCarpetaInv($carpetasJudicialesDto->getCarpetaInv());
                    $SolicitudesaudienciasDto->setNuc($carpetasJudicialesDto->getNuc());
                    $SolicitudesaudienciasDto->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
                    $SolicitudesaudienciasDto->setCveConsignacion($carpetasJudicialesDto->getCveConsignacion());

                    $logger->w_onError("EL NUMERO DE CARPETA JUDICIAL SI EXISTE IDCARPETA: " . $carpetasJudicialesDto->getIdCarpetaJudicial() . " NUMERO: " . $carpetasJudicialesDto->getNumero() . " ANIO: " . $carpetasJudicialesDto->getAnio());
                    $logger->w_onError(json_encode($carpetasJudicialesDto->toString()));
                } else {
                    $SolicitudesaudienciasDto->setIdReferencia(0);
                    $logger->w_onError("SE DETERMINA QUE NO EXISTE UN ANTECEDENTE");
                }

                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);

                if ($juzgadosDto != "") {
                    $SolicitudesaudienciasDto->setCveJuzgadoDesahoga($SolicitudesaudienciasDto->getCveJuzgado());
                    $logger->w_onError("LA SOLICITUD QUE SE ESTA REALIZANDO AL JUZGADO CVEJUZGADO: " . $juzgadosDto[0]->getCveJuzgado() . " DESCRIPCION : " . $juzgadosDto[0]->getDesJuzgado());
                } else {
                    $msg[] = array("La clave del Juzgado no existe");
                    $logger->w_onError("LA CLAVE DEL JUZGADO NO EXISTE");
                    $error = true;
                }

                $catAudienciasDto = new CataudienciasDTO();
                $catAudienciasDto->setCveCatAudiencia($SolicitudesaudienciasDto->getCveCatAudiencia());
                $catAudienciasDao = new CataudienciasDAO();
                $catAudienciasDto = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

                $etapaProcesalDeAudienciaSolicitada = $catAudienciasDto[0]->getCveEtapaProcesal();

                if ($catAudienciasDto != "") {
                    $catAudienciasDto = $catAudienciasDto[0];
                    $SolicitudesaudienciasDto->setCveNaturaleza($catAudienciasDto->getCveNaturaleza());
                    $SolicitudesaudienciasDto->setCveTipoAudiencia($catAudienciasDto->getCveTipoAudiencia());
                    $SolicitudesaudienciasDto->setCveEtapaProcesal($catAudienciasDto->getCveEtapaProcesal());
                    $logger->w_onError("AUDIENCIA: " . $catAudienciasDto->getDesCatAudiencia());
                } else {
                    $msg[] = array("La clave de la audiencia no existe");
                    $error = true;
                }

                $consignacionesDto = new ConsignacionesDTO();
                $consignacionesDto->setCveConsignacion($SolicitudesaudienciasDto->getCveConsignacion());
                $consignacionesDao = new ConsignacionesDAO();
                $consignacionesDao->selectConsignaciones($consignacionesDto);
                if ($consignacionesDto == "") {
                    $msg[] = array("La clave de consignacion no existe");
                    $error = true;
                }


                if ((!$error) && (count($msg) <= 0)) {
                    if ($proveedor == null) {
                        $this->proveedor = new Proveedor('mysql', 'sigejupe');
                        $this->proveedor->connect();
                    } else {
                        $this->proveedor = $proveedor;
                    }
                    $logger->w_onError("COMENZAMOS CON LA TRANSACCION");
                    $this->proveedor->execute("BEGIN");
                    $SolicitudesaudienciasDto->setActivo('S');
                    $SolicitudesaudienciasDto->setMismoJuzgador('N');
                    $SolicitudesaudienciasDto->setCveEstatusSolicitud(1);
                    $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                    $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->insertSolicitudesaudiencias($SolicitudesaudienciasDto, $this->proveedor);

//                    var_dump($SolicitudesaudienciasDto);

                    if ($SolicitudesaudienciasDto != "") {
                        $logger->w_onError("Datos de Solicitud: " . json_encode($SolicitudesaudienciasDto[0]->toString()));
                        if (($SolicitudesaudienciasDto[0]->getIdReferencia() > 0) && ($SolicitudesaudienciasDto[0]->getIdReferencia() != null) && ($SolicitudesaudienciasDto[0]->getIdReferencia() != "")) {
                            //Aqui vamos a copiar todo de la carpeta judicial a la solicitud
                            /*
                             * COMENZAMOS                              
                             */
//                            echo "COMENZAMOS CON LA COPIA DE LA INFORMACION<br>";
                            $logger->w_onError("COMENZAMOS A COPIAR LA INFORMACION");
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setIdCarpetaJudicial($SolicitudesaudienciasDto[0]->getIdReferencia());

                            $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, "", $this->proveedor);
//                            echo "BUSCAMOS LA INFORMACION DE LA CARPETA JUDICIAL<br>";
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];

                                //FASE DE LA CARPETA
////////////////////////////////Modificaciones kary
                                $faceActual = "";
                                if (($carpetasJudicialesDto->getCveTipoCarpeta() == "1") || ($carpetasJudicialesDto->getCveTipoCarpeta() == "2")) {
                                    //Auxiliar y COntrol
                                    $faceActual = "1,2";
                                } else if (($carpetasJudicialesDto->getCveTipoCarpeta() == "3") || ($carpetasJudicialesDto->getCveTipoCarpeta() == "4")) {
                                    //Juicio y tribunal 
                                    $faceActual = "3";
                                } else if (($carpetasJudicialesDto->getCveTipoCarpeta() == "5")) {
                                    //Ejecucion de sentencias (Expediente)
                                    $logger->w_onError("Fase: 4");
                                    $faceActual = "4";
                                } else if ($carpetasJudicialesDto->getCveTipoCarpeta() == "6") {
                                    $faceActual = "6";
                                    $logger->w_onError("Fase: 6");
                                }

                                $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                                $imputadoscarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());

                                /*
                                 * Comenzamos a copiar los imputados de la carpeta judicial al solicitud de audiencia
                                 */

//                                $imputadoscarpetasDto->setCveEtapaProcesal($catAudienciasDto->getCveEtapaProcesal());
                                $imputadoscarpetasDto->setActivo("S");

                                $impuatdosSolicitud = array(); //Seran los imputados que se registraran en la solicitud
                                $ofendidosSolicitud = array(); // Seran los ofendidos que se registran en la solicitud
                                $delitosSolicitud = array(); // Seran los delitos que se registran en la solicitud
                                $impOfeDelRelSolicitud = array(); // Sera la relacion de los imputados ofendidos y delitos


                                $countImputados = 0; //saber cuantos imputados se agregaran
                                $countOfendidos = 0; //saber cuantos ofendidos se agregaran
                                $countDelitos = 0; //saber cuantos delitos se agregaran


                                $imputadoscarpetasDao = new ImputadoscarpetasDAO();

                                //consultar al imputado dependiendo a la etapa procesal correspondiente
                                $imputadoscarpetasInicialDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, " AND cveEtapaProcesal in (" . $faceActual . ")", $this->proveedor);


                                if ($imputadoscarpetasInicialDto != "") {

                                    $imputadosConAutoJuicio = 0;

                                    $impofedelcarpetasAuxDto = new ImpofedelcarpetasDTO();
                                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                                    //foeach para consultar las relaciones de la etapa procesal correspondiente
                                    foreach ($imputadoscarpetasInicialDto as $imputadoscarpetas) {

                                        /*
                                         * validar que al menos un imputado de la carpeta a copiar tenga un auto de apertura a juicio
                                         * si al menos un imputado tiene un auto de apertura a juicio,
                                         * copiar solo los imputados que tienen un auto de apertura a juicio
                                         */

                                        $autoAperturaJuicioDao = new AperturasjuicioDAO();
                                        $autoAperturaJuicioDto = new AperturasjuicioDTO();

                                        $autoAperturaJuicioDto->setIdImputadoCarpeta($imputadoscarpetas->getIdImputadoCarpeta());
                                        $autoAperturaJuicioDto->setActivo('S');

                                        $responseAutoApertura = $autoAperturaJuicioDao->selectAperturasjuicio($autoAperturaJuicioDto, ' And IdAudienciaJuicio is Null', $this->proveedor);

                                        if ($etapaProcesalDeAudienciaSolicitada == 3 && $carpetasJudicialesDto->getCveTipoCarpeta() == "2") {

                                            if ($responseAutoApertura == '') {
                                                $copiarImputado = false;
                                            } else {
                                                $copiarImputado = true;
                                                $imputadosConAutoJuicio ++;
                                            }
                                        } else {
                                            $copiarImputado = true;
                                            $imputadosConAutoJuicio ++;
                                        }

                                        if ($copiarImputado) {

                                            $logger->w_onError("COPIA IMPUTADOS");
                                            $impofedelcarpetasAuxDto->setIdImputadoCarpeta($imputadoscarpetas->getIdImputadoCarpeta());
                                            $impofedelcarpetasAuxDto->setActivo("S");
//consultar las relaciones del imputado

                                            $rsImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasAuxDto, "", $this->proveedor);
//                                        print_r($rsImpofedelcarpetasDto);
                                            if ($rsImpofedelcarpetasDto) {
                                                foreach ($rsImpofedelcarpetasDto as $rsImpofedelcarpetas) {
                                                    $logger->w_onError("COMIENZA CICLO PARA OBTENER EL IMPUTADO DE LA RELACION Y A SUS VEZ LOS OFENDIDOS " . $rsImpofedelcarpetas->getIdImputadoCarpeta());

                                                    $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                                                    $imputadoscarpetasDto->setIdImputadoCarpeta($rsImpofedelcarpetas->getIdImputadoCarpeta());
                                                    $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);
                                                    if ($imputadoscarpetasDto != "") {
                                                        for ($index = 0; $index < count($imputadoscarpetasDto); $index ++) {
                                                            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                                                            ////comprobar si existe el imputado ya, si existe no insertar
                                                            $imputadossolicitudesExisteDto = new ImputadossolicitudesDTO();
                                                            $imputadossolicitudesExisteDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                            $imputadossolicitudesExisteDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                            $imputadossolicitudesExisteDto->setActivo('S');
                                                            $rsExiste = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesExisteDto, "", $this->proveedor);
                                                            if ($rsExiste != "") {
//                                                            Se asigna el id del imputado ya registrado para guardar la relacion
                                                                $idImputadoSolicitud = $rsExiste[0]->getIdImputadoSolicitud();
                                                            } else {
                                                                //Se da de alta al imputado para registrar la relacion
                                                                $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                                                                $imputadossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                                $imputadossolicitudesDto->setactivo($imputadoscarpetasDto[$index]->getActivo());
                                                                $imputadossolicitudesDto->setdetenido($imputadoscarpetasDto[$index]->getDetenido());
                                                                $imputadossolicitudesDto->setnombre($imputadoscarpetasDto[$index]->getNombre());
                                                                $imputadossolicitudesDto->setpaterno($imputadoscarpetasDto[$index]->getPaterno());
                                                                $imputadossolicitudesDto->setmaterno($imputadoscarpetasDto[$index]->getMaterno());
                                                                $imputadossolicitudesDto->setrfc($imputadoscarpetasDto[$index]->getRfc());
                                                                $imputadossolicitudesDto->setcurp($imputadoscarpetasDto[$index]->getCurp());
                                                                $imputadossolicitudesDto->setcveTipoDetencion($imputadoscarpetasDto[$index]->getCveTipoDetencion());
                                                                $imputadossolicitudesDto->setcveGenero($imputadoscarpetasDto[$index]->getCveGenero());
                                                                $imputadossolicitudesDto->setalias($imputadoscarpetasDto[$index]->getAlias());
                                                                $imputadossolicitudesDto->setfechaDeclaracion($imputadoscarpetasDto[$index]->getFechaDeclaracion());
                                                                $imputadossolicitudesDto->setcvePaisNacimiento($imputadoscarpetasDto[$index]->getCvePaisNacimiento());
                                                                $imputadossolicitudesDto->setcveEstadoNacimiento($imputadoscarpetasDto[$index]->getCveEstadoNacimiento());
                                                                $imputadossolicitudesDto->setcveMunicipioNacimiento($imputadoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                                                $imputadossolicitudesDto->setfechaNacimiento($imputadoscarpetasDto[$index]->getFechaNacimiento());
                                                                $imputadossolicitudesDto->setedad($imputadoscarpetasDto[$index]->getEdad());
                                                                $imputadossolicitudesDto->setcveTipoPersona($imputadoscarpetasDto[$index]->getCveTipoPersona());
                                                                $imputadossolicitudesDto->setCveTipoReligion($imputadoscarpetasDto[$index]->getCveTipoReligion());
                                                                $imputadossolicitudesDto->setnombreMoral($imputadoscarpetasDto[$index]->getNombreMoral());
                                                                $imputadossolicitudesDto->setcveNivelInstruccion($imputadoscarpetasDto[$index]->getCveNivelInstruccion());
                                                                $imputadossolicitudesDto->setcveEstadoCivil($imputadoscarpetasDto[$index]->getCveEstadoCivil());
                                                                $imputadossolicitudesDto->setcveEspanol($imputadoscarpetasDto[$index]->getCveEspanol());
                                                                $imputadossolicitudesDto->setcveAlfabetismo($imputadoscarpetasDto[$index]->getCveAlfabetismo());
                                                                $imputadossolicitudesDto->setcveDialectoIndigena($imputadoscarpetasDto[$index]->getCveDialectoIndigena());
                                                                $imputadossolicitudesDto->setcveTipoFamiliaLinguistica($imputadoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                                                $imputadossolicitudesDto->setcveOcupacion($imputadoscarpetasDto[$index]->getCveOcupacion());
                                                                $imputadossolicitudesDto->setcveInterprete($imputadoscarpetasDto[$index]->getCveInterprete());
                                                                $imputadossolicitudesDto->setcveEstadoPsicofisico($imputadoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                                                $imputadossolicitudesDto->setfechaImputacion($imputadoscarpetasDto[$index]->getFechaImputacion());
                                                                $imputadossolicitudesDto->setfechaControlDet($imputadoscarpetasDto[$index]->getFechaControlDet());
                                                                $imputadossolicitudesDto->setfecTerminoCons($imputadoscarpetasDto[$index]->getFecTerminoCons());
                                                                $imputadossolicitudesDto->setfecCierreInv($imputadoscarpetasDto[$index]->getFecCierreInv());
                                                                $imputadossolicitudesDto->setestadoNacimiento($imputadoscarpetasDto[$index]->getEstadoNacimiento());
                                                                $imputadossolicitudesDto->setmunicipioNacimiento($imputadoscarpetasDto[$index]->getMunicipioNacimiento());
                                                                $imputadossolicitudesDto->setrelacionMoral($imputadoscarpetasDto[$index]->getRelacionMoral());
                                                                $imputadossolicitudesDto->setpersonaMoral($imputadoscarpetasDto[$index]->getPersonaMoral());
                                                                $imputadossolicitudesDto->setcveCereso($imputadoscarpetasDto[$index]->getCveCereso());
                                                                $imputadossolicitudesDto->setCveEtapaProcesal($imputadoscarpetasDto[$index]->getCveEtapaProcesal());
                                                                $imputadossolicitudesDto->setcveTipoReincidencia($imputadoscarpetasDto[$index]->getCveTipoReincidencia());
                                                                $imputadossolicitudesDto->setingresoMensual($imputadoscarpetasDto[$index]->getIngresoMensual());
                                                                $imputadossolicitudesDto->setcveGrupoEdnico($imputadoscarpetasDto[$index]->getCveGrupoEdnico());
                                                                $imputadossolicitudesDto->setTieneSobreseimiento($imputadoscarpetasDto[$index]->getTieneSobreseimiento());
                                                                $imputadossolicitudesDto->setFechaSobreseimiento($imputadoscarpetasDto[$index]->getFechaSobreseimiento());
                                                                $imputadossolicitudesDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                $imputadossolicitudesDto->setActivo("S");
                                                                $imputadossolicitudesDto = $imputadossolicitudesDao->insertImputadossolicitudes($imputadossolicitudesDto, $this->proveedor);
                                                                if ($imputadossolicitudesDto != "") {
                                                                    $idImputadoSolicitud = $imputadossolicitudesDto[0]->getIdImputadoSolicitud();
                                                                    $countImputados ++;
                                                                    $impuatdosSolicitud[] = array("idImputadoCarpetaJudicial" => $imputadoscarpetasDto[$index]->getIdCarpetaJudicial(), "idImputadoSolicitudAudiencia" => $imputadossolicitudesDto[0]->getIdImputadoSolicitud());

                                                                    $nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                                                                    $nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $nacionalidadesimputadoscarpetasDto->setActivo("S");
                                                                    $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
//                                                                print_r($nacionalidadesimputadoscarpetasDto);
                                                                    $nacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto, "", $this->proveedor);
//                                                                print_r($nacionalidadesimputadoscarpetasDto);

                                                                    if ($nacionalidadesimputadoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($nacionalidadesimputadoscarpetasDto); $x ++) {
                                                                            $nacionalidadesimputadossolicitudesDto = new NacionalidadesimputadossolicitudesDTO();
                                                                            $nacionalidadesimputadossolicitudesDto->setcvePais($nacionalidadesimputadoscarpetasDto[$x]->getCvePais());
                                                                            $nacionalidadesimputadossolicitudesDto->setactivo("S");
                                                                            $nacionalidadesimputadossolicitudesDto->setidImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());

                                                                            $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
                                                                            $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto, $this->proveedor);

                                                                            if ($nacionalidadesimputadossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar las nacionalidades de los imputados");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }


                                                                    $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                                                                    $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $domiciliosimputadoscarpetasDto->setActivo("S");
                                                                    $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                                                                    $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $this->proveedor);
                                                                    if ($domiciliosimputadoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($domiciliosimputadoscarpetasDto); $x ++) {
                                                                            $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                                                                            $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                            $domiciliosimputadossolicitudesDto->setDomicilioProcesal($domiciliosimputadoscarpetasDto[$x]->getDomicilioProcesal());
                                                                            $domiciliosimputadossolicitudesDto->setCvePais($domiciliosimputadoscarpetasDto[$x]->getCvePais());
                                                                            $domiciliosimputadossolicitudesDto->setCveEstado($domiciliosimputadoscarpetasDto[$x]->getCveEstado());
                                                                            $domiciliosimputadossolicitudesDto->setCveMunicipio($domiciliosimputadoscarpetasDto[$x]->getCveMunicipio());
                                                                            $domiciliosimputadossolicitudesDto->setDireccion($domiciliosimputadoscarpetasDto[$x]->getDireccion());
                                                                            $domiciliosimputadossolicitudesDto->setColonia($domiciliosimputadoscarpetasDto[$x]->getColonia());
                                                                            $domiciliosimputadossolicitudesDto->setNumInterior($domiciliosimputadoscarpetasDto[$x]->getNumInterior());
                                                                            $domiciliosimputadossolicitudesDto->setNumExterior($domiciliosimputadoscarpetasDto[$x]->getNumExterior());
                                                                            $domiciliosimputadossolicitudesDto->setCp($domiciliosimputadoscarpetasDto[$x]->getCp());
                                                                            $domiciliosimputadossolicitudesDto->setLatitud($domiciliosimputadoscarpetasDto[$x]->getLatitud());
                                                                            $domiciliosimputadossolicitudesDto->setLongitud($domiciliosimputadoscarpetasDto[$x]->getLongitud());
                                                                            $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($domiciliosimputadoscarpetasDto[$x]->getRecidenciaHabitual());
                                                                            $domiciliosimputadossolicitudesDto->setEstado($domiciliosimputadoscarpetasDto[$x]->getEstado());
                                                                            $domiciliosimputadossolicitudesDto->setMunicipio($domiciliosimputadoscarpetasDto[$x]->getMunicipio());
                                                                            $domiciliosimputadossolicitudesDto->setCveConvivencia($domiciliosimputadoscarpetasDto[$x]->getCveConvivencia());
                                                                            $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($domiciliosimputadoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                                            $domiciliosimputadossolicitudesDto->setActivo("S");


                                                                            $domiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                                                                            $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesDao->insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $this->proveedor);

                                                                            if ($domiciliosimputadossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los domicilios");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    } else {
                                                                        //$msg[] = array("La carpeta no cuenta con domicilios para el imputado para copiar a la solicitud");
                                                                        //$error = true;
                                                                    }

                                                                    $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                                                                    $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $defensoresimputadoscarpetasDto->setActivo("S");
                                                                    $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                                                                    $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $this->proveedor);

                                                                    if ($defensoresimputadoscarpetasDto != "") {

                                                                        for ($x = 0; $x < count($defensoresimputadoscarpetasDto); $x ++) {
                                                                            $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                                                                            $defensoresimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                            $defensoresimputadossolicitudesDto->setCveTipoDefensor($defensoresimputadoscarpetasDto[$x]->getCveTipoDefensor());
                                                                            $defensoresimputadossolicitudesDto->setNombre($defensoresimputadoscarpetasDto[$x]->getNombre());
                                                                            $defensoresimputadossolicitudesDto->setTelefono($defensoresimputadoscarpetasDto[$x]->getTelefono());
                                                                            $defensoresimputadossolicitudesDto->setCelular($defensoresimputadoscarpetasDto[$x]->getCelular());
                                                                            $defensoresimputadossolicitudesDto->setEmail($defensoresimputadoscarpetasDto[$x]->getEmail());
                                                                            $defensoresimputadossolicitudesDto->setActivo("S");

                                                                            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
                                                                            $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $this->proveedor);

                                                                            if ($defensoresimputadossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los defensores");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    } else {
                                                                        $msg[] = array("La carpeta no cuenta con defensores para el imputado para copiar a la solicitud. ");
                                                                        $error = true;
                                                                    }

                                                                    $tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();
                                                                    $tutoresimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $tutoresimputadoscarpetasDto->setActivo("S");
                                                                    $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
                                                                    $tutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto, "", $this->proveedor);

                                                                    if ($tutoresimputadoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($tutoresimputadoscarpetasDto); $x ++) {
                                                                            $tutoresimputadosDto = new TutoresimputadosDTO();
                                                                            $tutoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                            $tutoresimputadosDto->setCveGenero($tutoresimputadoscarpetasDto[$x]->getCveGenero());
                                                                            $tutoresimputadosDto->setCveTipoTutor($tutoresimputadoscarpetasDto[$x]->getCveTipoTutor());
                                                                            $tutoresimputadosDto->setProvDef($tutoresimputadoscarpetasDto[$x]->getProvDef());
                                                                            $tutoresimputadosDto->setNombre($tutoresimputadoscarpetasDto[$x]->getNombre());
                                                                            $tutoresimputadosDto->setPaterno($tutoresimputadoscarpetasDto[$x]->getPaterno());
                                                                            $tutoresimputadosDto->setMaterno($tutoresimputadoscarpetasDto[$x]->getMaterno());
                                                                            $tutoresimputadosDto->setFechaNacimiento($tutoresimputadoscarpetasDto[$x]->getFechaNacimiento());
                                                                            $tutoresimputadosDto->setEdad($tutoresimputadoscarpetasDto[$x]->getEdad());
                                                                            $tutoresimputadosDto->setActivo("S");
                                                                            $tutoresimputadosDao = new TutoresimputadosDAO();
                                                                            $tutoresimputadosDto = $tutoresimputadosDao->insertTutoresimputados($tutoresimputadosDto, $this->proveedor);
                                                                            if ($tutoresimputadosDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los tutores");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }

                                                                    $telefonosImputadoscarpetasDto = new TelefonosImputadoscarpetasDTO();
                                                                    $telefonosImputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $telefonosImputadoscarpetasDto->setActivo("S");
                                                                    $telefonosImputadoscarpetasDao = new TelefonosImputadoscarpetasDAO();
                                                                    $telefonosImputadoscarpetasDto = $telefonosImputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadoscarpetasDto, "", $this->proveedor);

                                                                    if ($telefonosImputadoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($telefonosImputadoscarpetasDto); $x ++) {
                                                                            $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                                                                            $telefenosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                            $telefenosimputadossolicitudesDto->setTelefono($telefonosImputadoscarpetasDto[$x]->getTelefono());
                                                                            $telefenosimputadossolicitudesDto->setCelular($telefonosImputadoscarpetasDto[$x]->getCelular());
                                                                            $telefenosimputadossolicitudesDto->setEmail($telefonosImputadoscarpetasDto[$x]->getEmail());
                                                                            $telefenosimputadossolicitudesDto->setActivo("S");
                                                                            $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                                                                            $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->insertTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $this->proveedor);
                                                                            if ($telefenosimputadossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los telefonos");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }
                                                                    $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();
                                                                    $imputadosdrogascarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                                    $imputadosdrogascarpetasDto->setActivo("S");
                                                                    $imputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
                                                                    $imputadosdrogascarpetasDto = $imputadosdrogascarpetasDao->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto, "", $this->proveedor);

                                                                    if ($imputadosdrogascarpetasDto != "") {
                                                                        for ($x = 0; $x < count($imputadosdrogascarpetasDto); $x ++) {
                                                                            $imputadosdrogasDto = new ImputadosdrogasDTO();
                                                                            $imputadosdrogasDto->setidImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                            $imputadosdrogasDto->setcveDroga($imputadosdrogascarpetasDto[$x]->getCveDroga());
                                                                            $imputadosdrogasDto->setactivo("S");

                                                                            $ImputadosdrogasDao = new ImputadosdrogasDAO();
                                                                            $imputadosdrogasDto = $ImputadosdrogasDao->insertImputadosdrogas($imputadosdrogasDto, $this->proveedor);
                                                                            if ($imputadosdrogasDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar las drogas a la solicitud");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }
//                                            ImputadosdrogasDTO ImputadosdrogascarpetasDTO
                                                                } else {
                                                                    $msg[] = array("El imputado no se logro copiar a la solicitud");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("Error la refencia base no tiene imputados para copiar a la solicitud  <br> o la etapa procesal del imputado no corresponse con la etapa procesal actual.");
                                                        $error = true;
                                                    }

                                                    /*
                                                     * Terminamos de coapiar los imputados de la carpeta judicial a la solicitud de audiencia
                                                     */

                                                    /*
                                                     * Comenzamos a copiar los ofendidos de la carpeta judicial a la solicitud de audiencia
                                                     */
                                                    $logger->w_onError("COMIENZA CICLO PARA OBTENER EL IMPUTADO DE LA RELACION Y A SUS VEZ LOS OFENDIDOS idOfendido" . $rsImpofedelcarpetas->getIdOfendidoCarpeta());
                                                    $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                                                    $ofendidoscarpetasDto->setIdOfendidoCarpeta($rsImpofedelcarpetas->getIdOfendidoCarpeta());
                                                    $ofendidoscarpetasDto->setActivo("S");
                                                    $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                                                    $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
                                                    if ($ofendidoscarpetasDto != "") {
                                                        for ($index = 0; $index < count($ofendidoscarpetasDto); $index ++) {
                                                            $ofendidossolicitudesDao = new OfendidossolicitudesDAO();
                                                            ////comprobar si existe el ofendido, si existe no insertar
                                                            $ofendidossolicitudesExisteDto = new OfendidossolicitudesDTO();
                                                            $ofendidossolicitudesExisteDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                            $logger->w_onError("Buscamos que no este registrado el ofendido: " . json_encode($ofendidoscarpetasDto[$index]->toString()));
                                                            if ((int) ($ofendidoscarpetasDto[$index]->getCveTipoPersona()) === 1) {
                                                                $ofendidossolicitudesExisteDto->setNombre($ofendidoscarpetasDto[$index]->getNombre());
                                                                $ofendidossolicitudesExisteDto->setPaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                                                $ofendidossolicitudesExisteDto->setMaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                                                $logger->w_onError("Fisica-->Buscamos que no este registrado el ofendido: " . $ofendidoscarpetasDto[$index]->getNombre() . " " . $ofendidoscarpetasDto[$index]->getPaterno() . " " . $ofendidoscarpetasDto[$index]->getMaterno());
                                                            } else {
                                                                $ofendidossolicitudesExisteDto->setNombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                                                $logger->w_onError("Moral u Otro-->Buscamos que no este registrado el ofendido: " . $ofendidoscarpetasDto[$index]->getNombreMoral());
                                                            }
                                                            $ofendidossolicitudesExisteDto->setActivo('S');
                                                            $rsExisteOfendido = $ofendidossolicitudesDao->selectOfendidossolicitudes($ofendidossolicitudesExisteDto, "", $this->proveedor);
                                                            if ($rsExisteOfendido != "" && count($rsExisteOfendido) != 0 && $rsExisteOfendido != null) {
                                                                $idOfendidoSolicitud = $rsExisteOfendido[0]->getIdOfendidoSolicitud();
                                                                 $idOfendidoSolicitud = ((int) ($rsExisteOfendido[0]->getIdOfendidoSolicitud()));
                                                                $ofendidossolicitudesDto = $rsExisteOfendido;
                                                                $logger->w_onError("El ofendido ya existe en la solicitud de audiencia");
                                                                $logger->w_onError("idOfendido: " . $idOfendidoSolicitud);
                                                            } else {
                                                                $logger->w_onError("El ofendido no existe en la solicitud de audiencia");
                                                                $ofendidossolicitudesDto = new OfendidossolicitudesDTO();
                                                                $ofendidossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                                $ofendidossolicitudesDto->setactivo($ofendidoscarpetasDto[$index]->getActivo());
                                                                $ofendidossolicitudesDto->setnombre($ofendidoscarpetasDto[$index]->getNombre());
                                                                $ofendidossolicitudesDto->setpaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                                                $ofendidossolicitudesDto->setmaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                                                $ofendidossolicitudesDto->setrfc($ofendidoscarpetasDto[$index]->getRfc());
                                                                $ofendidossolicitudesDto->setcurp($ofendidoscarpetasDto[$index]->getCurp());
                                                                $ofendidossolicitudesDto->setfechaNacimiento($ofendidoscarpetasDto[$index]->getFechaNacimiento());
                                                                $ofendidossolicitudesDto->setcveOcupacion($ofendidoscarpetasDto[$index]->getCveOcupacion());
                                                                $ofendidossolicitudesDto->setcveTipoPersona($ofendidoscarpetasDto[$index]->getCveTipoPersona());
                                                                $ofendidossolicitudesDto->setcveGenero($ofendidoscarpetasDto[$index]->getCveGenero());
                                                                $ofendidossolicitudesDto->setCveTipoParte($ofendidoscarpetasDto[$index]->getCveTipoParte());
                                                                $ofendidossolicitudesDto->setCveTipoReligion($ofendidoscarpetasDto[$index]->getCveTipoReligion());
                                                                $ofendidossolicitudesDto->setedad($ofendidoscarpetasDto[$index]->getEdad());
                                                                $ofendidossolicitudesDto->setcvePaisNacimiento($ofendidoscarpetasDto[$index]->getCvePaisNacimiento());
                                                                $ofendidossolicitudesDto->setcveEstadoNacimiento($ofendidoscarpetasDto[$index]->getCveEstadoNacimiento());
                                                                $ofendidossolicitudesDto->setestadoNacimiento($ofendidoscarpetasDto[$index]->getEstadoNacimiento());
                                                                $ofendidossolicitudesDto->setcveMunicipioNacimiento($ofendidoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                                                $ofendidossolicitudesDto->setmunicipioNacimiento($ofendidoscarpetasDto[$index]->getMunicipioNacimiento());
                                                                $ofendidossolicitudesDto->setcveEstadoCivil($ofendidoscarpetasDto[$index]->getCveEstadoCivil());
                                                                $ofendidossolicitudesDto->setcveAlfabetismo($ofendidoscarpetasDto[$index]->getCveAlfabetismo());
                                                                $ofendidossolicitudesDto->setcveNivelInstruccion($ofendidoscarpetasDto[$index]->getCveNivelInstruccion());
                                                                $ofendidossolicitudesDto->setcveEspanol($ofendidoscarpetasDto[$index]->getCveEspanol());
                                                                $ofendidossolicitudesDto->setcveDialectoIndigena($ofendidoscarpetasDto[$index]->getCveDialectoIndigena());
                                                                $ofendidossolicitudesDto->setcveTipoFamiliaLinguistica($ofendidoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                                                $ofendidossolicitudesDto->setcveInterprete($ofendidoscarpetasDto[$index]->getCveInterprete());
                                                                $ofendidossolicitudesDto->setcveOrdenProteccion($ofendidoscarpetasDto[$index]->getCveOrdenProteccion());
                                                                $ofendidossolicitudesDto->setcveEstadoPsicofisico($ofendidoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                                                $ofendidossolicitudesDto->setnombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                                                $ofendidossolicitudesDto->setcveVictimaDeLaDelincuenciaOrganizada($ofendidoscarpetasDto[$index]->getCveVictimaDeLaDelincuenciaOrganizada());
                                                                $ofendidossolicitudesDto->setcveVictimaDeViolenciaDeGenero($ofendidoscarpetasDto[$index]->getCveVictimaDeViolenciaDeGenero());
                                                                $ofendidossolicitudesDto->setcveVictimaDeTrata($ofendidoscarpetasDto[$index]->getCveVictimaDeTrata());
                                                                $ofendidossolicitudesDto->setCveVictimaDeAcoso($ofendidoscarpetasDto[$index]->getCveVictimaDeAcoso());
                                                                $ofendidossolicitudesDto->setDesaparecido($ofendidoscarpetasDto[$index]->getDesaparecido());
                                                                $ofendidossolicitudesDto->setnumHijos($ofendidoscarpetasDto[$index]->getNumHijos());
                                                                $ofendidossolicitudesDto->setembarazada($ofendidoscarpetasDto[$index]->getEmbarazada());
                                                                $ofendidossolicitudesDto->setcveGrupoEdnico($ofendidoscarpetasDto[$index]->getCveGrupoEdnico());
                                                                $ofendidossolicitudesDto->setActivo("S");


                                                                $ofendidossolicitudesDto = $ofendidossolicitudesDao->insertOfendidossolicitudes($ofendidossolicitudesDto, $this->proveedor);
                                                                if ($ofendidossolicitudesDto != "") {
                                                                    $countOfendidos ++;
                                                                    $idOfendidoSolicitud = $ofendidossolicitudesDto[0]->getIdOfendidoSolicitud();
                                                                    $logger->w_onError("idOfendido: " . $idOfendidoSolicitud);
                                                                    $ofendidosSolicitud[] = array("idOfendidoCarpetaJudicial" => $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta(), "idOfendidoSolicitud" => $ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                                    $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                                                                    $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
                                                                    $domiciliosofendidoscarpetasDto->setActivo("S");
                                                                    $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
//                                                                print_r($domiciliosofendidoscarpetasDto);
                                                                    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $this->proveedor);

                                                                    if ($domiciliosofendidoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($domiciliosofendidoscarpetasDto); $x ++) {
                                                                            $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                                                            $domiciliosofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                                            $domiciliosofendidossolicitudesDto->setDomicilioProcesal($domiciliosofendidoscarpetasDto[$x]->getDomicilioProcesal());
                                                                            $domiciliosofendidossolicitudesDto->setcvePais($domiciliosofendidoscarpetasDto[$x]->getCvePais());
                                                                            $domiciliosofendidossolicitudesDto->setcveEstado($domiciliosofendidoscarpetasDto[$x]->getcveEstado());
                                                                            $domiciliosofendidossolicitudesDto->setcveMunicipio($domiciliosofendidoscarpetasDto[$x]->getCveMunicipio());
                                                                            $domiciliosofendidossolicitudesDto->setdireccion($domiciliosofendidoscarpetasDto[$x]->getDireccion());
                                                                            $domiciliosofendidossolicitudesDto->setcolonia($domiciliosofendidoscarpetasDto[$x]->getColonia());
                                                                            $domiciliosofendidossolicitudesDto->setnumInterior($domiciliosofendidoscarpetasDto[$x]->getNumInterior());
                                                                            $domiciliosofendidossolicitudesDto->setnumExterior($domiciliosofendidoscarpetasDto[$x]->getNumExterior());
                                                                            $domiciliosofendidossolicitudesDto->setcp($domiciliosofendidoscarpetasDto[$x]->getCp());
                                                                            $domiciliosofendidossolicitudesDto->setlatitud($domiciliosofendidoscarpetasDto[$x]->getLatitud());
                                                                            $domiciliosofendidossolicitudesDto->setlongitud($domiciliosofendidoscarpetasDto[$x]->getLongitud());
                                                                            $domiciliosofendidossolicitudesDto->setrecidenciaHabitual($domiciliosofendidoscarpetasDto[$x]->getRecidenciaHabitual());
                                                                            $domiciliosofendidossolicitudesDto->setestado($domiciliosofendidoscarpetasDto[$x]->getEstado());
                                                                            $domiciliosofendidossolicitudesDto->setmunicipio($domiciliosofendidoscarpetasDto[$x]->getMunicipio());
                                                                            $domiciliosofendidossolicitudesDto->setcveConvivencia($domiciliosofendidoscarpetasDto[$x]->getCveConvivencia());
                                                                            $domiciliosofendidossolicitudesDto->setcveTipoDeVivienda($domiciliosofendidoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                                            $domiciliosofendidossolicitudesDto->setActivo("S");
                                                                            $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                                                                            $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $this->proveedor);
                                                                            if ($domiciliosofendidossolicitudesDto == "") {
                                                                                $msg[] = array("Error al copiar el domicilio al ofendido");
                                                                                $error = true;
                                                                            }
                                                                        }
//                                                                    } else {
//                                                                        $msg[] = array("La referencia no cuenta con domicilios para el ofendido");
//                                                                        $error = true;
                                                                    }

                                                                    $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                                                                    $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
                                                                    $defensoresofendidoscarpetasDto->setActivo("S");
                                                                    $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                                                                    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $this->proveedor);

                                                                    if ($defensoresofendidoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($defensoresofendidoscarpetasDto); $x ++) {
                                                                            $defensoresofendidossolicitudesDto = new DefensoresofendidossolicitudesDTO();
                                                                            $defensoresofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                                            $defensoresofendidossolicitudesDto->setcveTipoAsesor($defensoresofendidoscarpetasDto[$x]->getCveTipoDefensor());
                                                                            $defensoresofendidossolicitudesDto->setnombre($defensoresofendidoscarpetasDto[$x]->getNombre());
                                                                            $defensoresofendidossolicitudesDto->settelefono($defensoresofendidoscarpetasDto[$x]->getTelefono());
                                                                            $defensoresofendidossolicitudesDto->setcelular($defensoresofendidoscarpetasDto[$x]->getCelular());
                                                                            $defensoresofendidossolicitudesDto->setemail($defensoresofendidoscarpetasDto[$x]->getEmail());
                                                                            $defensoresofendidossolicitudesDto->setactivo("S");
                                                                            $defensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
                                                                            $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $this->proveedor);
                                                                            if ($defensoresofendidossolicitudesDto == "") {
                                                                                $msg[] = array("Erro al copiar el defensor a la solicitud de audienciaf");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    } else {
                                                                        $msg[] = array("La referencia no cuenta con defensores para el ofendido");
                                                                        $error = true;
                                                                    }

                                                                    $telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                                                                    $telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                                                                    $telefonosofendidoscarpetasDto->setActivo("S");
                                                                    $telefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                                                                    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, "", $this->proveedor);

                                                                    if ($telefonosofendidoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($telefonosofendidoscarpetasDto); $x ++) {
                                                                            $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                                                                            $telefonosofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                                            $telefonosofendidossolicitudesDto->settelefono($telefonosofendidoscarpetasDto[$x]->getTelefono());
                                                                            $telefonosofendidossolicitudesDto->setcelular($telefonosofendidoscarpetasDto[$x]->getCelular());
                                                                            $telefonosofendidossolicitudesDto->setemail($telefonosofendidoscarpetasDto[$x]->getEmail());
                                                                            $telefonosofendidossolicitudesDto->setactivo("S");

                                                                            $telefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
                                                                            $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $this->proveedor);
                                                                            if ($telefonosofendidossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un erro al copiar los telefonos a la solicitudF");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }

                                                                    $nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                                                                    $nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                                                                    $nacionalidadesofendidoscarpetasDto->setActivo("S");
                                                                    $nacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                                                                    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, "", $this->proveedor);

                                                                    if ($nacionalidadesofendidoscarpetasDto != "") {
                                                                        for ($x = 0; $x < count($nacionalidadesofendidoscarpetasDto); $x ++) {
                                                                            $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                                                                            $nacionalidadesofendidossolicitudesDto->setcvePais($nacionalidadesofendidoscarpetasDto[$x]->getCvePais());
                                                                            $nacionalidadesofendidossolicitudesDto->setactivo("S");
                                                                            $nacionalidadesofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
//print_r($nacionalidadesofendidossolicitudesDto);
                                                                            $nacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                                                                            $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $this->proveedor);
//print_r($nacionalidadesofendidossolicitudesDto);
                                                                            if ($nacionalidadesofendidossolicitudesDto == "") {
                                                                                $msg[] = array("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                                                $error = true;
                                                                                $logger->w_onError("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                                            }
                                                                        }
                                                                    }
                                                                } else {
                                                                    $msg[] = array("No se logro registra el ofendido en la solicitud de audiencia");
                                                                    $error = true;
                                                                    $logger->w_onError("No se logro registra el ofendido en la solicitud de audiencia");
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("Error la refencia base no tiene ofendidos para copiar a la soloicitud");
                                                        $error = true;
                                                        $logger->w_onError("Error la refencia base no tiene ofendidos para copiar a la soloicitud");
                                                    }


                                                    $tutoresOfendidosCarpetasDto = new TutoresofendidoscarpetasDTO();
                                                    $tutoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                                                    $tutoresOfendidosCarpetasDto->setActivo("S");
                                                    $tutoresOfendidosCarpetasDao = new TutoresofendidoscarpetasDAO();
                                                    $tutoresOfendidosCarpetasDto = $tutoresOfendidosCarpetasDao->selectTutoresofendidoscarpetas($tutoresOfendidosCarpetasDto);
                                                    if ($tutoresOfendidosCarpetasDto != "") {
                                                        for ($x = 0; $x < count($tutoresOfendidosCarpetasDto); $x ++) {
                                                            $tutoresOfendidosSolicitudesDto = new TutoresofendidosDTO();
                                                            $tutoresOfendidosSolicitudesDto->setIdOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                            $tutoresOfendidosSolicitudesDto->setCveTipoTutor($tutoresOfendidosCarpetasDto[$x]->getCveTipoTutor());
                                                            $tutoresOfendidosSolicitudesDto->setProvDef($tutoresOfendidosCarpetasDto[$x]->getProvDef());
                                                            $tutoresOfendidosSolicitudesDto->setNombre($tutoresOfendidosCarpetasDto[$x]->getNombre());
                                                            $tutoresOfendidosSolicitudesDto->setPaterno($tutoresOfendidosCarpetasDto[$x]->getPaterno());
                                                            $tutoresOfendidosSolicitudesDto->setMaterno($tutoresOfendidosCarpetasDto[$x]->getMaterno());
                                                            $tutoresOfendidosSolicitudesDto->setFechaNacimiento($tutoresOfendidosCarpetasDto[$x]->getFechaNacimiento());
                                                            $tutoresOfendidosSolicitudesDto->setEdad($tutoresOfendidosCarpetasDto[$x]->getEdad());
                                                            $tutoresOfendidosSolicitudesDto->setcveGenero($tutoresOfendidosCarpetasDto[$x]->getCveGenero());
                                                            $tutoresOfendidosSolicitudesDto->setActivo("S");

                                                            $tutoresOfendidosSolicitudesDao = new TutoresofendidosDAO();

                                                            $tutoresOfendidosSolicitudesDto = $tutoresOfendidosSolicitudesDao->insertTutoresofendidos($tutoresOfendidosSolicitudesDto, $this->proveedor);
                                                            if ($tutoresOfendidosSolicitudesDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar los tutores del ofendido");
                                                                $error = true;
                                                                $logger->w_onError("Ocurrio un erro al copiar los tutores del ofendido");
                                                            }
                                                        }
                                                    }

                                                    /*
                                                     * Terminamos de coapira los ofendidos de la carpeta judicial a la solicitud de audiencia
                                                     *
                                                     */
                                                    /*
                                                     * comenzamos a copiar los delitos de la carpeta judicial a la solicitude de audiancia
                                                     */
                                                    $delitoscarpetasDto = new DelitoscarpetasDTO();
                                                    $delitoscarpetasDto->setIdDelitoCarpeta($rsImpofedelcarpetas->getIdDelitoCarpeta());
                                                    $delitoscarpetasDto->setActivo("S");
                                                    $delitoscarpetasDao = new DelitoscarpetasDAO();
//                                                print_r($delitoscarpetasDto);
                                                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
                                                    if ($delitoscarpetasDto != "") {
                                                        for ($index = 0; $index < count($delitoscarpetasDto); $index ++) {
                                                            $delitossolicitudesDao = new DelitossolicitudesDAO();
                                                            ////comprobar si existe el delito, si existe no insertar
                                                            $delitossolicitudesExisteDto = new DelitossolicitudesDTO();
                                                            $delitossolicitudesExisteDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                            $delitossolicitudesExisteDto->setcveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                                            $delitossolicitudesExisteDto->setActivo('S');
                                                            $rsExiste = $delitossolicitudesDao->selectDelitossolicitudes($delitossolicitudesExisteDto, "", $this->proveedor);
                                                            if ($rsExiste != "") {
                                                                $idDelitoSolicitud = $rsExiste[0]->getIdDelitoSolicitud();
                                                            } else {
                                                                $delitossolicitudesDto = new DelitossolicitudesDTO();
                                                                $delitossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                                $delitossolicitudesDto->setcveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                                                $delitossolicitudesDto->setactivo("S");

                                                                $delitossolicitudesDto = $delitossolicitudesDao->insertDelitossolicitudes($delitossolicitudesDto, $this->proveedor);
                                                                if ($delitossolicitudesDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar el delito a la solicitud");
                                                                    $error = true;
                                                                    $logger->w_onError("Ocurrio un error al copiar el delito a la solicitud");
                                                                } else {
                                                                    $countDelitos ++;
                                                                    $idDelitoSolicitud = $delitossolicitudesDto[0]->getIdDelitoSolicitud();
                                                                    $delitosSolicitud[] = array("idDelitoCarpeta" => $delitoscarpetasDto[$index]->getIdDelitoCarpeta(), "idDelitoSolicitud" => $delitossolicitudesDto[0]->getIdDelitoSolicitud());
                                                                }
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con delitos definidos para copiar a la solicitud");
                                                        $error = true;
                                                        $logger->w_onError("La referencia no cuenta con delitos definidos para copiar a la solicitud");
                                                    }
                                                    /*
                                                     * Terminamos de copiar los delitos de la carpeta judicial a la solicitud de audiencia
                                                     */
                                                    /*
                                                     * COMENZAMOS A COPIAR LA RELACION DE DELITOS, OFENDIDOS Y DELITOS DE CARPETAS JUDICIALES A SOLICITUDES DE AUDIENCIA
                                                     */

                                                    $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                                    $impofedelcarpetasDto->setIdImpOfeDelCarpeta($rsImpofedelcarpetas->getIdImpOfeDelCarpeta());
                                                    $impofedelcarpetasDto->setActivo("S");

                                                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                                                    $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $this->proveedor);
                                                    if ($impofedelcarpetasDto != "") {
                                                        $index = 0;
                                                        $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                                                        $impofedelsolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                        $impofedelsolicitudesDto->setidImputadoSolicitud($idImputadoSolicitud);
                                                        $impofedelsolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                        $impofedelsolicitudesDto->setidDelitoSolicitud($idDelitoSolicitud);
                                                        $impofedelsolicitudesDto->setcveModalidad($impofedelcarpetasDto[$index]->getCveModalidad());
                                                        $impofedelsolicitudesDto->setcveComision($impofedelcarpetasDto[$index]->getCveComision());
                                                        $impofedelsolicitudesDto->setcveConcurso($impofedelcarpetasDto[$index]->getCveConcurso());
                                                        $impofedelsolicitudesDto->setcveClasificacionDelitoOrden($impofedelcarpetasDto[$index]->getCveClasificacionDelitoOrden());
                                                        $impofedelsolicitudesDto->setcveElementoComision($impofedelcarpetasDto[$index]->getCveElementoComision());
                                                        $impofedelsolicitudesDto->setcveClasificacionDelito($impofedelcarpetasDto[$index]->getCveClasificacionDelito());
                                                        $impofedelsolicitudesDto->setcveFormaAccion($impofedelcarpetasDto[$index]->getCveFormaAccion());
                                                        $impofedelsolicitudesDto->setcveConsumacion($impofedelcarpetasDto[$index]->getCveConsumacion());
                                                        $impofedelsolicitudesDto->setcveMunicipio($impofedelcarpetasDto[$index]->getCveMunicipio());
                                                        $impofedelsolicitudesDto->setcveEntidad($impofedelcarpetasDto[$index]->getCveEntidad());
                                                        $impofedelsolicitudesDto->setcveGradoParticipacion($impofedelcarpetasDto[$index]->getCveGradoParticipacion());
                                                        $impofedelsolicitudesDto->setcveRelacionImpOfe($impofedelcarpetasDto[$index]->getCveRelacionImpOfe());
                                                        $impofedelsolicitudesDto->setCveTerminacion($impofedelcarpetasDto[$index]->getCveTerminacion());
                                                        $impofedelsolicitudesDto->setactivo("S");
                                                        $impofedelsolicitudesDto->setfechaDelito($impofedelcarpetasDto[$index]->getFechaDelito());
                                                        $impofedelsolicitudesDto->setdireccion($impofedelcarpetasDto[$index]->getDireccion());
                                                        $impofedelsolicitudesDto->setcolonia($impofedelcarpetasDto[$index]->getColonia());
                                                        $impofedelsolicitudesDto->setnumInterior($impofedelcarpetasDto[$index]->getNumInterior());
                                                        $impofedelsolicitudesDto->setnumExterior($impofedelcarpetasDto[$index]->getNumExterior());
                                                        $impofedelsolicitudesDto->setcp($impofedelcarpetasDto[$index]->getCp());

                                                        $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                                                        $impofedelsolicitudesDto = $impofedelsolicitudesDao->insertImpofedelsolicitudes($impofedelsolicitudesDto, $this->proveedor);
                                                        if ($impofedelsolicitudesDto == "") {
                                                            $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                                            $error = true;
                                                        } else {
                                                            $impOfeDelRelSolicitud[] = array("idImpOfeDelCarpeta" => $impofedelcarpetasDto[$index]->getIdImpOfeDelCarpeta(), "idImpOfeDelSolicitud" => $impofedelsolicitudesDto[0]->getIdImpOfeDelSolicitud());
                                                        }
//                                                    }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con relacion de delitos, imputados y ofendidos");
                                                        $error = true;
                                                    }

                                                    /*
                                                     * COPIAMOS LOS EFECTOS DEL DELITO y OFENDIDO
                                                     */

                                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                                        $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                                                        $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                                        $efectosofendidoscarpetasDto->setActivo("S");
                                                        $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                                                        $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $this->proveedor);

                                                        if ($efectosofendidoscarpetasDto != "") {
                                                            for ($x = 0; $x < count($efectosofendidoscarpetasDto); $x ++) {
                                                                $efectosofendidosDto = new EfectosofendidosDTO();
                                                                $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$x]->getCveDetalleEfecto());
                                                                $efectosofendidosDto->setidImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                                $efectosofendidosDto->setactivo("S");

                                                                $efectosofendidosDao = new EfectosofendidosDAO();
                                                                $efectosofendidosDto = $efectosofendidosDao->insertEfectosofendidos($efectosofendidosDto, $this->proveedor);
                                                                if ($efectosofendidosDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar los efectos de la victima a la solicitud");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    /*
                                                     * TERMINAMOS DE COPIAR LOS EFECTOS DEL DELITO ASIA EL OFENDIDO
                                                     */

                                                    /*
                                                     * COMENZAMOS A COPIAR LOS DATOS DE TRATA DE PERSONAS
                                                     */

                                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                                        $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                                                        $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                                        $trataspersonascarpetasDto->setActivo("S");
                                                        $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                                                        $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $this->proveedor);

                                                        if ($trataspersonascarpetasDto != "") {
                                                            for ($x = 0; $x < count($trataspersonascarpetasDto); $x ++) {
                                                                $trataspersonasDto = new TrataspersonasDTO();
                                                                $trataspersonasDto->setcveEstadoDestino($trataspersonascarpetasDto[$x]->getCveEstadoDestino());
                                                                $trataspersonasDto->setcveMunicipioDestino($trataspersonascarpetasDto[$x]->getCveMunicipioDestino());
                                                                $trataspersonasDto->setcvePaisDestino($trataspersonascarpetasDto[$x]->getCvePaisDestino());
                                                                $trataspersonasDto->setestadoDestino($trataspersonascarpetasDto[$x]->getEstadoDestino());
                                                                $trataspersonasDto->setmunicipioDestino($trataspersonascarpetasDto[$x]->getMunicipioDestino());
                                                                $trataspersonasDto->setcveEstadoOrigen($trataspersonascarpetasDto[$x]->getCveEstadoOrigen());
                                                                $trataspersonasDto->setcveMunicipioOrigen($trataspersonascarpetasDto[$x]->getCveMunicipioOrigen());
                                                                $trataspersonasDto->setcvePaisOrigen($trataspersonascarpetasDto[$x]->getCvePaisOrigen());
                                                                $trataspersonasDto->setestadoOrigen($trataspersonascarpetasDto[$x]->getEstadoOrigen());
                                                                $trataspersonasDto->setmunicipioOrigen($trataspersonascarpetasDto[$x]->getMunicipioOrigen());
                                                                $trataspersonasDto->setcveTipoTrata($trataspersonascarpetasDto[$x]->getCveTipoTrata());
                                                                $trataspersonasDto->setcveTrasportacion($trataspersonascarpetasDto[$x]->getCveTrasportacion());
                                                                $trataspersonasDto->setidImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                                $trataspersonasDto->setActivo("S");

                                                                $trataspersonasDao = new TrataspersonasDAO();
                                                                $trataspersonasDto = $trataspersonasDao->insertTrataspersonas($trataspersonasDto, $this->proveedor);
                                                                if ($trataspersonasDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar las tratas de personas a la solicitud");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    /*
                                                     * TERMINAMOS DE COPIAR LA INFORMACION DE TRATA DE PERSONAS
                                                     */

                                                    /*
                                                     * COMENZAMOS A COPIAR LA VIOLENCIA DE GENERO
                                                     */

                                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                                        $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                                                        $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                                        $violenciadegenerocarpetasDto->setActivo("S");

                                                        $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                                                        $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $this->proveedor);
//                                                    PRINT_R($violenciadegenerocarpetasDto);
                                                        if ($violenciadegenerocarpetasDto != "") {
                                                            for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x ++) {
                                                                $violenciadegeneroDto = new ViolenciadegeneroDTO();
                                                                $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                                                                $violenciadegeneroDto->setIdImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                                $violenciadegeneroDto->setActivo("S");

                                                                $violenciadegeneroDao = new ViolenciadegeneroDAO();
//                                                            print_r($violenciadegeneroDto);
                                                                $violenciadegeneroDto = $violenciadegeneroDao->selectViolenciadegenero($violenciadegeneroDto, "", $this->proveedor);
                                                                if ($violenciadegeneroDto != "") {
                                                                    $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                                                    $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                                                    $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                                                                    $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                                                    $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $this->proveedor);

                                                                    if ($violenciahomicidiosdolososcarpetasDto != "") {
                                                                        for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y ++) {
                                                                            $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
                                                                            $violenciahomicidiosdolososDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                                                            $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso());
                                                                            $violenciahomicidiosdolososDto->setActivo("S");

                                                                            $violenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
                                                                            $violenciahomicidiosdolososDto = $violenciahomicidiosdolososDao->insertViolenciahomicidiosdolosos($violenciahomicidiosdolososDto, $this->proveedor);
                                                                            if ($violenciahomicidiosdolososDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }

                                                                    $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                                                    $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                                                    $violenciafactoressocialescarpetasDto->setActivo("S");

                                                                    $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                                                    $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                                                                    if ($violenciafactoressocialescarpetasDto != "") {
                                                                        for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y ++) {
                                                                            $violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
                                                                            $violenciafactoressocialesDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                                                            $violenciafactoressocialesDto->setActivo("S");
                                                                            $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());
                                                                            $violenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
                                                                            $violenciafactoressocialesDto = $violenciafactoressocialesDao->insertViolenciafactoressociales($violenciafactoressocialesDto, $this->proveedor);
                                                                            if ($violenciafactoressocialesDto != "") {
                                                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }
                                                                } else {
//                                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud");
//                                                                $error = true;
                                                                }
                                                            }
                                                        }
                                                    }

                                                    /*
                                                     * TERMINAMOS DE COPIAR LA VIOLENCIA DE GENERO
                                                     */

                                                    /*
                                                     * HOSTIGAMIENTO Y ACOSO SEXUAL
                                                     */
//                                                print_r($impOfeDelRelSolicitud);
                                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                                        $sexualescarpetasDto = new SexualescarpetasDTO();
                                                        $sexualescarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                                        $sexualescarpetasDto->setActivo("S");

                                                        $sexualescarpetasDao = new SexualescarpetasDAO();
                                                        $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $this->proveedor);
                                                        if ($sexualescarpetasDto != "") {
                                                            for ($x = 0; $x < count($sexualescarpetasDto); $x ++) {
                                                                $sexualesDto = new SexualesDTO();
                                                                $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                                                                $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                                                                $sexualesDto->setIdImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                                $sexualesDto->setActivo("S");
                                                                $sexualesDao = new SexualesDAO();

                                                                $sexualesDto = $sexualesDao->insertSexuales($sexualesDto, $this->proveedor);
//                                                            PRINT_R($sexualesDto);

                                                                if ($sexualesDto != "") {
                                                                    //Sexuales conductas
                                                                    $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                                                    $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                                                    $sexualesconductascarpetasDto->setActivo("S");
                                                                    $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                                                    $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $this->proveedor);

                                                                    if ($sexualesconductascarpetasDto != "") {
                                                                        for ($y = 0; $y < count($sexualesconductascarpetasDto); $y ++) {
                                                                            $sexualesconductasDto = new SexualesconductasDTO();
                                                                            $sexualesconductasDto->setIdSexual($sexualesDto[0]->getIdSexual());
                                                                            $sexualesconductasDto->setActivo("S");
                                                                            $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());
                                                                            $sexualesconductasDao = new SexualesconductasDAO();
                                                                            $sexualesconductasDto = $sexualesconductasDao->insertSexualesconductas($sexualesconductasDto, $this->proveedor);
                                                                            if ($sexualesconductasDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }

                                                                    //Los efectos sexuales
//                                                $efectossexualescarpetasDto = new EfectossexualescarpetasDTO();
//                                                $efectossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                                $efectossexualescarpetasDto->setActivo("S");
//
//                                                $efectossexualescarpetasDao = new EfectossexualescarpetasDAO();
//                                                $efectossexualescarpetasDto = $efectossexualescarpetasDao->selectEfectossexualescarpetas($efectossexualescarpetasDto, "", $this->proveedor);
//
//                                                if ($efectossexualescarpetasDto != "") {
//                                                    for ($y = 0; $y < count($efectossexualescarpetasDto); $y++) {
//                                                        $efectossexualesDto = new EfectossexualesDTO();
//                                                        $efectossexualesDto->setCveDetalleEfecto($efectossexualescarpetasDto[$y]->getCveDetalleEfecto());
//                                                        $efectossexualesDto->setIdSexual($sexualesDto[0]->getIdSexual());
//                                                        $efectossexualesDto->setActivo("S");
//                                                        $efectossexualesDao = new EfectossexualesDAO();
//                                                        $efectossexualesDto = $efectossexualesDao->insertEfectossexuales($efectossexualesDto, $this->proveedor);
//
//                                                        if ($efectossexualesDto == "") {
//                                                            $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
//                                                            $error = true;
//                                                        }
//                                                    }
//                                                }
                                                                    //Los testigos sexuales
                                                                    $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                                                    $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                                                    $testigossexualescarpetasDto->setActivo("S");
                                                                    $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                                                    $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $this->proveedor);

                                                                    if ($testigossexualescarpetasDto != "") {
                                                                        for ($y = 0; $y < count($testigossexualescarpetasDto); $y ++) {
                                                                            $testigossexualesDto = new TestigossexualesDTO();
                                                                            $testigossexualesDto->setidSexual($sexualesDto[0]->getIdSexual());
                                                                            $testigossexualesDto->setpaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                                                            $testigossexualesDto->setmaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                                                            $testigossexualesDto->setnombre($testigossexualescarpetasDto[$y]->getNombre());
                                                                            $testigossexualesDto->setcveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                                                            $testigossexualesDto->setactivo("S");

                                                                            $testigossexualesDao = new TestigossexualesDAO();
                                                                            $testigossexualesDto = $testigossexualesDao->insertTestigossexuales($testigossexualesDto, $this->proveedor);

                                                                            if ($testigossexualesDto == "") {
                                                                                $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                                                $error = true;
                                                                            }
                                                                        }
                                                                    }
                                                                } else {
                                                                    $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
                                                    }

                                                    /*
                                                     * TERMINAMOS HOSTIGAMIENTO Y ACOSO SEXUAL
                                                     */
                                                }
                                            }
                                        }
                                    }

                                    if ($imputadosConAutoJuicio == 0) {
                                        $msg[] = array("Error al guardar, No hay ningun imputado con auto de apertura a juicio, por favor verificar.");
                                        $error = true;
                                    }
                                } else {
                                    $msg[] = array("Error la refencia base no tiene imputados para copiar a la solicitud");
                                    $error = true;
                                }
                                /*
                                 * TERMINAMOS DE COPIAR LA RELACION DE DELITOS, OFENDIDOS y DELITOS DE CARPETAS JUDICIALES A SOLICITUDES DE AUDIENCIA
                                 */
                                if (!$error) {
                                    $tmpDto = new SolicitudesaudienciasDTO();
                                    $tmpDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                    $tmpDto->setNumDelitos($countDelitos);
                                    $tmpDto->setNumImputados($countImputados);
                                    $tmpDto->setNumOfendidos($countOfendidos);

                                    $tmpDao = new SolicitudesaudienciasDAO();
                                    $tmpDto = $tmpDao->updateSolicitudesaudiencias($tmpDto, $this->proveedor);

                                    if ($tmpDto == "") {
                                        $msg[] = array("Ocurrio un error al actualizar los datos de la solicitud de audiencia");
                                        $error = true;
                                    }
                                }
                            } else {
                                $msg[] = array("No se logro registrar la solicitud debido a que no se encontro la referencia");
                                $error = true;
                            }
                        }
                    } else {
                        $msg[] = array("No se logro registrar la solicitud debido a algun error en la transaccion ");
                        $error = true;
                    }
                    if ((!$error)) {
                        $this->proveedor->execute("COMMIT");
                        $tmpDto = new SolicitudesaudienciasDTO();
                        $tmpDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                        $tmpDao = new SolicitudesaudienciasDAO();
                        $tmpDto = $tmpDao->selectSolicitudesaudiencias($tmpDto, "", "", $this->proveedor);
                        $listaResultados = array();
                        if ($tmpDto != "") {
                            $resultado = array(
                                "idSolicitudAudiencia" => $tmpDto[0]->getidSolicitudAudiencia(),
                                "cveCatAudiencia" => $tmpDto[0]->getcveCatAudiencia(),
                                "cveJuzgadoDesahoga" => $tmpDto[0]->getcveJuzgadoDesahoga(),
                                "cveJuzgado" => $tmpDto[0]->getcveJuzgado(),
                                "cveConsignacion" => $tmpDto[0]->getcveConsignacion(),
                                "cveEtapaProcesal" => $tmpDto[0]->getcveEtapaProcesal(),
                                "idReferencia" => $tmpDto[0]->getidReferencia(),
                                "fechaRegistro" => $tmpDto[0]->getfechaRegistro(),
                                "fechaActualizacion" => $tmpDto[0]->getfechaActualizacion(),
                                "fechaEnvio" => $tmpDto[0]->getfechaEnvio(),
                                "cveTipoCarpeta" => $tmpDto[0]->getcveTipoCarpeta(),
                                "numero" => $tmpDto[0]->getnumero(),
                                "anio" => $tmpDto[0]->getanio(),
                                "activo" => $tmpDto[0]->getactivo(),
                                "carpetaInv" => $tmpDto[0]->getcarpetaInv(),
                                "nuc" => $tmpDto[0]->getnuc(),
                                "cveUsuario" => $tmpDto[0]->getcveUsuario(),
                                "cveAdscripcionSolicita" => $tmpDto[0]->getcveAdscripcionSolicita(),
                                "mismoJuzgador" => $tmpDto[0]->getmismoJuzgador(),
                                "cveEstatusSolicitud" => $tmpDto[0]->getcveEstatusSolicitud(),
                                "observaciones" => utf8_encode($tmpDto[0]->getobservaciones()),
                                "numImputados" => $tmpDto[0]->getnumImputados(),
                                "numDelitos" => $tmpDto[0]->getnumDelitos(),
                                "numOfendidos" => $tmpDto[0]->getnumOfendidos(),
                                "cveNaturaleza" => $tmpDto[0]->getcveNaturaleza(),
                                "cveTipoAudiencia" => $tmpDto[0]->getcveTipoAudiencia()
                            );
                            array_push($listaResultados, $resultado);
                            $result = array("status" => "Ok", "msj" => "La solicitud se registro de forma correcta", "resultado" => $listaResultados);
                            $result = json_encode($result);
                        }
                    } else {
//                        $this->proveedor->execute("COMMIT");
                        $this->proveedor->execute("ROLLBACK");
                        $result = array("status" => "error", "Error" => $msg);
                        $result = json_encode($result);
                    }
                } else {
                    $result = array("status" => "error", "Error" => $msg);
                    $result = json_encode($result);
                }
            } else {
                //ACTUALIZAMOS LA SOLICITUD DE AUDIENCIA SELECCIONADA
                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                $tiposCarpetasDao = new TiposcarpetasDAO();
                $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                if ($tiposCarpetasDto != "") {
                    $tiposCarpetasDto = $tiposCarpetasDto[0];
                } else {
                    $SolicitudesaudienciasDto->setCveTipoCarpeta("");
                }

                $carpetasJudicialesDao = new CarpetasjudicialesDAO();

                if (((int) $SolicitudesaudienciasDto->getCveTipoCarpeta() <= 0) || ((string) $SolicitudesaudienciasDto->getCveTipoCarpeta() == "")) {

                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                    $carpetasJudicialesDto->setActivo("S");
                    $orden = " " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " And carpetaInv=" . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . " " . (($SolicitudesaudienciasDto->getNuc() != "") ? " And nuc=" . $SolicitudesaudienciasDto->getNuc() . " " : " ");
                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, $orden);

                    if (sizeof($carpetasJudicialesDto) <= 2) {
                        if ($SolicitudesaudienciasDto->getCarpetaInv() != "") { //BUSCAMOS LA INFORMACION CON LA CARPETA DE INVESTIGACION Y TIPO DE CARPETA DE CONTROL
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                            $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                                $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else if ($SolicitudesaudienciasDto->getNuc() != "") {//SIN O SE ENCUENTRAN COINCIDENCIAS CON LA CARPETA DE INVESGACION SE BUSCA POR EL NUC
                                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                    $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                    $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                                    $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                    if ($carpetasJudicialesDto != "") {
                                        $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                    } else {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                        $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                        if ($carpetasJudicialesDto != "") {
                                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                        }
                                    }
                                }
                            }
                        } else if ($SolicitudesaudienciasDto->getNuc() != "") {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                            $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                }
                            }
                        }
                    } else if (sizeof($carpetasJudicialesDto) >= 3) {
                        $logger->w_onError("LOS DATOS PROPORCIONADOS " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " carpetaInv: " . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . (($SolicitudesaudienciasDto->getNuc() != "") ? " nuc: " . $SolicitudesaudienciasDto->getNuc() . " " : " ") . " CUENTA CON MAS DE DOS CARPETAS JUDICIALES RADICADAS VERIFIQUE");
                        $msg[] = array("LOS DATOS PROPORCIONADOS " . (($SolicitudesaudienciasDto->getCarpetaInv() != "") ? " carpetaInv: " . $SolicitudesaudienciasDto->getCarpetaInv() . " " : " ") . (($SolicitudesaudienciasDto->getNuc() != "") ? " nuc: " . $SolicitudesaudienciasDto->getNuc() . " " : " ") . " CUENTA CON MAS DE DOS CARPETAS JUDICIALES RADICADAS VERIFIQUE");
                        $error = true;
                    }
                } else {

                    if ($SolicitudesaudienciasDto->getCveTipoCarpeta() == 1) {
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta(1); // Buscamos si tiene una carpeta de control
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            $antecedescarpetasDto = new AntecedescarpetasDTO();
                            $antecedescarpetasDto->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                            $antecedescarpetasDto->setCveTipoCarpeta(2);
                            $antecedescarpetasDto->setActivo("S");
                            $antecedescarpetasDao = new AntecedescarpetasDAO();
                            $antecedescarpetasDto = $antecedescarpetasDao->selectAntecedescarpetas($antecedescarpetasDto, "");
                            if ($antecedescarpetasDto != "") {
                                $antecedescarpetasDto = $antecedescarpetasDto[0];
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setIdCarpetaJudicial($antecedescarpetasDto->getIdCarpetaHija());
                                $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else {
                                    $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                                    $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                                    $error = true;
                                }
                            }
                        } else {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                            $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                            $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                            $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                            $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                                $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                                $error = true;
                            }
                        }
                    } else if ($SolicitudesaudienciasDto->getCveTipoCarpeta() == 6) {
                        /*
                         * si el tipo de carpeta es toca
                         */

                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                        } else {
                            $carpetasJudicialesDto = '';
                        }
                    } else {
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                        $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                        $carpetasJudicialesDto->setActivo("S"); // ACTIVO
                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                        if ($carpetasJudicialesDto != "") {
                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                        } else {
                            $logger->w_onError("EL NUMERO DE " . $tiposCarpetasDto->getDesTipoCarpeta() . " " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . " NO EXISTE VERIFIQUE");
                            $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                            $error = true;
                        }
                    }
                }
//                var_dump($carpetasJudicialesDto);
                if ($carpetasJudicialesDto != "") {
                    $SolicitudesaudienciasDto->setIdReferencia($carpetasJudicialesDto->getIdCarpetaJudicial());
                    $SolicitudesaudienciasDto->setNumero($carpetasJudicialesDto->getNumero());
                    $SolicitudesaudienciasDto->setAnio($carpetasJudicialesDto->getAnio());
                    $SolicitudesaudienciasDto->setCarpetaInv($carpetasJudicialesDto->getCarpetaInv());
                    $SolicitudesaudienciasDto->setNuc($carpetasJudicialesDto->getNuc());
                    $SolicitudesaudienciasDto->setCveTipoCarpeta($carpetasJudicialesDto->getCveTipoCarpeta());
                    //$SolicitudesaudienciasDto->setCveConsignacion($carpetasJudicialesDto->getCveConsignacion());
                } else {
                    $SolicitudesaudienciasDto->setIdReferencia("0");
                }

                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);

                if ($juzgadosDto != "") {
                    $SolicitudesaudienciasDto->setCveJuzgadoDesahoga($SolicitudesaudienciasDto->getCveJuzgado());
                } else {
                    $msg[] = array("La clave del Juzgado no existe");
                    $error = true;
                }

                $catAudienciasDto = new CataudienciasDTO();
                $catAudienciasDto->setCveCatAudiencia($SolicitudesaudienciasDto->getCveCatAudiencia());
                $catAudienciasDao = new CataudienciasDAO();
                $catAudienciasDto = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

                $etapaProcesalDeAudienciaSolicitada = $catAudienciasDto[0]->getCveEtapaProcesal();

                if ($catAudienciasDto != "") {
                    $catAudienciasDto = $catAudienciasDto[0];
                    $SolicitudesaudienciasDto->setCveNaturaleza($catAudienciasDto->getCveNaturaleza());
                    $SolicitudesaudienciasDto->setCveTipoAudiencia($catAudienciasDto->getCveTipoAudiencia());
                    $SolicitudesaudienciasDto->setCveEtapaProcesal($catAudienciasDto->getCveEtapaProcesal());
                } else {
                    $msg[] = array("La clave de la audiencia no existe");
                    $error = true;
                }

                $consignacionesDto = new ConsignacionesDTO();
                $consignacionesDto->setCveConsignacion($SolicitudesaudienciasDto->getCveConsignacion());
                $consignacionesDao = new ConsignacionesDAO();
                $consignacionesDao->selectConsignaciones($consignacionesDto);
                if ($consignacionesDto == "") {
                    $msg[] = array("La clave de consignacion no existe");
                    $error = true;
                }


                if ((!$error) && (count($msg) <= 0)) {
                    if ($proveedor == null) {
                        $this->proveedor = new Proveedor('mysql', 'sigejupe');
                        $this->proveedor->connect();
                    } else {
                        $this->proveedor = $proveedor;
                    }

                    $this->proveedor->execute("BEGIN");
                    $SolicitudesaudienciasDto->setActivo('S');
                    $SolicitudesaudienciasDto->setMismoJuzgador('N');
                    $SolicitudesaudienciasDto->setCveEstatusSolicitud(1);

                    $solicitudTmp = new SolicitudesaudienciasDTO();
                    $solicitudTmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());

                    $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                    $solicitudTmp = $SolicitudesaudienciasDao->selectSolicitudesaudiencias($solicitudTmp, "", "", $this->proveedor);

                    if ($solicitudTmp[0]->getCveEstatusSolicitud() == "1") {
                        if ($solicitudTmp != "") {
                            $solicitudTmp = $solicitudTmp[0];
                        }
                        $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($SolicitudesaudienciasDto, $this->proveedor);
//                        var_dump($SolicitudesaudienciasDto);
                        if ($SolicitudesaudienciasDto != "") {
//                        if ($SolicitudesaudienciasDto[0]->getIdReferencia() > 0) {
//                        if ($solicitudTmp->getIdReferencia() == $SolicitudesaudienciasDto[0]->getIdReferencia()) {
//                            var_dump($SolicitudesaudienciasDto);
                            if (($solicitudTmp->getIdReferencia() === $SolicitudesaudienciasDto[0]->getIdReferencia()) || ($SolicitudesaudienciasDto[0]->getIdReferencia() === 0) || ($SolicitudesaudienciasDto[0]->getIdReferencia() === null)) {
                                //SI SON IGUALES LAS REFERENCIAS NO HACEMOS NADA O no EXISTE la carpeta
                            } else {
                                //SI SON DIFERENTES SE TIENE QUE HACER UN BORRADO LOGICO DE TODA LA INFORMACION DE LA SOLICITUD
                                //BUSCAMOS LOS IMPUTADOS
                                $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                                $imputadossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                $imputadossolicitudesDto->setActivo("S");
                                $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                                $imputadossolicitudesDto = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);

                                if ($imputadossolicitudesDto != "") {//COMENZAMOS A DAR DE BAJA A LOS IMPUTADOS DE LA SOLICITUD
                                    for ($index = 0; $index < count($imputadossolicitudesDto); $index ++) {
                                        $imputadosdrogasDto = new ImputadosdrogasDTO();
                                        $imputadosdrogasDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                        $imputadosdrogasDto->setActivo("S");
                                        $imputadosdrogasDao = new ImputadosdrogasDAO();
                                        $imputadosdrogasDto = $imputadosdrogasDao->selectImputadosdrogas($imputadosdrogasDto, "", $this->proveedor);

                                        if ($imputadosdrogasDto != "") {
                                            for ($x = 0; $x < count($imputadosdrogasDto); $x ++) {
                                                $imputadosdrogasDto[$x]->setActivo("N");
                                                $tmpDrogas = $imputadosdrogasDao->updateImputadosdrogas($imputadosdrogasDto[$x], $this->proveedor);
                                                if ($tmpDrogas == "") {
                                                    $msg[] = array("No se logro dar de baja la droga seleccionada del imputado");
                                                    $logger->w_onError("No se logro dar de baja la droga seleccionada del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se dieron de baja las drogas del imputado");
                                                }
                                            }
                                        }

                                        $telefonosImputadosDto = new TelefonosImputadossolicitudesDTO();
                                        $telefonosImputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                        $telefonosImputadosDto->setActivo("S");
                                        $telefonosImputadosDao = new TelefonosimputadossolicitudesDAO();
                                        $telefonosImputadosDto = $telefonosImputadosDao->selectTelefonosimputadossolicitudes($telefonosImputadosDto, "", $this->proveedor);

                                        if ($telefonosImputadosDto != "") {
                                            for ($x = 0; $x < count($telefonosImputadosDto); $x ++) {
                                                $telefonosImputadosDto[$x]->setActivo("N");
                                                $tmptelefonos = $telefonosImputadosDao->updateTelefonosimputadossolicitudes($telefonosImputadosDto[$x], $this->proveedor);
                                                if ($tmptelefonos == "") {
                                                    $msg[] = array("No se logro dar de baja el telefono del imputado");
                                                    $logger->w_onError("No se logro dar de baja el telefono del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el telefono del imputado");
                                                }
                                            }
                                        }

                                        $tutoresimputadosDto = new TutoresimputadosDTO();
                                        $tutoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                        $tutoresimputadosDto->setActivo("S");
                                        $tutoresimputadosDao = new TutoresimputadosDAO();
                                        $tutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputados($tutoresimputadosDto, "", $this->proveedor);

                                        if ($tutoresimputadosDto != "") {
                                            for ($x = 0; $x < count($tutoresimputadosDto); $x ++) {
                                                $tutoresimputadosDto[$x]->setActivo("N");
                                                $tmpTutores = $tutoresimputadosDao->updateTutoresimputados($tutoresimputadosDto[$x], $this->proveedor);
                                                if ($tmpTutores == "") {
                                                    $msg[] = array("No se logro dar de baja el tutor del imputado");
                                                    $logger->w_onError("No se logro dar de baja el tutor del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el tutor del imputado");
                                                }
                                            }
                                        }


                                        $defensoresimputadosDto = new DefensoresimputadossolicitudesDTO();
                                        $defensoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                        $defensoresimputadosDto->setActivo("S");
                                        $defensoresimputadosDao = new DefensoresimputadossolicitudesDAO();
                                        $defensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadossolicitudes($defensoresimputadosDto, "", $this->proveedor);

                                        if ($defensoresimputadosDto != "") {
                                            for ($x = 0; $x < count($defensoresimputadosDto); $x ++) {
                                                $defensoresimputadosDto[$x]->setActivo("N");
                                                $tmpDefensores = $defensoresimputadosDao->updateDefensoresimputadossolicitudes($defensoresimputadosDto[$x], $this->proveedor);
                                                if ($tmpDefensores == "") {
                                                    $msg[] = array("No se logro dar de baja el defensor del imputado");
                                                    $logger->w_onError("No se logro dar de baja el defensor del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el defensor del imputado");
                                                }
                                            }
                                        }


                                        $domiciliosimputadosDto = new DomiciliosimputadossolicitudesDTO();
                                        $domiciliosimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());

                                        $domiciliosimputadosDao = new DomiciliosimputadossolicitudesDAO();
                                        $domiciliosimputadosDto = $domiciliosimputadosDao->selectDomiciliosimputadossolicitudes($domiciliosimputadosDto, "", $this->proveedor);

                                        if ($domiciliosimputadosDto) {
                                            for ($x = 0; $x < count($domiciliosimputadosDto); $x ++) {
                                                $domiciliosimputadosDto[$x]->setActivo("N");
                                                $tmpDomicilios = $domiciliosimputadosDao->updateDomiciliosimputadossolicitudes($domiciliosimputadosDto[$x], $this->proveedor);
                                                if ($tmpDomicilios == "") {
                                                    $msg[] = array("No se logro dar de baja el domicilio del imputado");
                                                    $logger->w_onError("No se logro dar de baja el domicilio del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el domicilio del imputado");
                                                }
                                            }
                                        }

                                        $nacionalidadesimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                                        $nacionalidadesimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());

                                        $nacionalidadesimputadosDao = new NacionalidadesimputadossolicitudesDAO();
                                        $nacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadosDto, "", $this->proveedor);

                                        if ($nacionalidadesimputadosDto) {
                                            for ($x = 0; $x < count($nacionalidadesimputadosDto); $x ++) {
                                                $nacionalidadesimputadosDto[$x]->setActivo("N");
                                                $tmpNacionalidades = $nacionalidadesimputadosDao->updateNacionalidadesimputadossolicitudes($nacionalidadesimputadosDto[$x], $this->proveedor);
                                                if ($tmpNacionalidades == "") {
                                                    $msg[] = array("No se logro dar de baja la nacionalidad del imputado");
                                                    $logger->w_onError("No se logro dar de baja la nacionalidad del imputado");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja la nacionalidad del imputado");
                                                }
                                            }
                                        }


                                        if (!$error) {
                                            $impCart = new ImputadossolicitudesDTO();
                                            $impCart->setIdImputadoSolicitud($imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                            $impCart->setActivo("N");
                                            //$imputadossolicitudesDto[$index]->setActivo("N");
//                                            $impCart = $imputadossolicitudesDao->updateImputadossolicitudes($imputadossolicitudesDto[$index], $this->proveedor);
                                            $impCart = $imputadossolicitudesDao->eliminarImputadoByIdImputadoSolicitud($impCart, "", $this->proveedor);
                                            if ($impCart === false) {
                                                $logger->w_onError("No se elimino de forma correcta");
                                                $logger->w_onError("idImputado: " . $imputadossolicitudesDto[$index]->getIdImputadoSolicitud());
                                            } else {
                                                $logger->w_onError("Todo va bien se da de baja el imputado");
//                                            $logger->w_onError("idImputado: ".  json_encode($impCart[0]->toString()));  
                                            }
                                        }
                                    }
                                }


                                $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();
                                $ofendidosSolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                $ofendidosSolicitudesDto->setActivo("S");
                                $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();
                                $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, "", $this->proveedor);

                                if ($ofendidosSolicitudesDto != "") {//DAMOS DEBAJA A TODOS LOS AOFENDIDOS DE LA SOLICITUD
                                    for ($index = 0; $index < count($ofendidosSolicitudesDto); $index ++) {
                                        $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                                        $nacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud());
                                        $nacionalidadesofendidossolicitudesDto->setActivo("S");
                                        $nacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                                        $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->selectNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, "", $this->proveedor);

                                        if ($nacionalidadesofendidossolicitudesDto != "") {
                                            for ($x = 0; $x < count($nacionalidadesofendidossolicitudesDto); $x ++) {
                                                $nacionalidadesofendidossolicitudesDto[$x]->setActivo("N");
                                                $tmpnacionalidades = $nacionalidadesofendidossolicitudesDao->updateNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto[$x], $this->proveedor);
                                                if ($tmpnacionalidades == "") {
                                                    $msg[] = array("No se logro dar de baja la nacionalidad seleccionada del ofendido");
                                                    $logger->w_onError("No se logro dar de baja la nacionalidad seleccionada del ofendido");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja la nacionalidad seleccionada del ofendido");
                                                }
                                            }
                                        }

//                                        echo $ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud();

                                        $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                                        $telefonosofendidossolicitudesDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud());
                                        $telefonosofendidossolicitudesDto->setActivo("S");
                                        $telefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
                                        $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesDao->selectTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, "", $this->proveedor);

                                        if ($telefonosofendidossolicitudesDto != "") {
                                            for ($x = 0; $x < count($telefonosofendidossolicitudesDto); $x ++) {
                                                $telefonosofendidossolicitudesDto[$x]->setActivo("N");
                                                $tmptelefonos = $telefonosofendidossolicitudesDao->updateTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto[$x], $this->proveedor);
                                                if ($tmptelefonos == "") {
                                                    $msg[] = array("No se logro dar de baja el telefono seleccionada del ofendido");
                                                    $logger->w_onError("No se logro dar de baja el telefono seleccionada del ofendido");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el telefono seleccionada del ofendido");
                                                }
                                            }
                                        }

                                        $defensoresofendidossolicitudesDto = new DefensoresofendidossolicitudesDTO();
                                        $defensoresofendidossolicitudesDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud());
                                        $defensoresofendidossolicitudesDto->setActivo("S");
                                        $defensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
                                        $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesDao->selectDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, "", $this->proveedor);

                                        if ($defensoresofendidossolicitudesDto != "") {
                                            for ($x = 0; $x < count($defensoresofendidossolicitudesDto); $x ++) {
                                                $defensoresofendidossolicitudesDto[$x]->setActivo("N");
                                                $tmpDefensores = $defensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto[$x], $this->proveedor);
                                                if ($tmpDefensores == "") {
                                                    $msg[] = array("No se logro dar de baja el defensor seleccionada del ofendido");
                                                    $logger->w_onError("No se logro dar de baja el defensor seleccionada del ofendido");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el defensor seleccionada del ofendido");
                                                }
                                            }
                                        }

                                        $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                        $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud());
                                        $domiciliosofendidossolicitudesDto->setActivo("S");
                                        $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                                        $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->selectDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, "", $this->proveedor);

                                        if ($domiciliosofendidossolicitudesDto != "") {
                                            for ($x = 0; $x < count($domiciliosofendidossolicitudesDto); $x ++) {
                                                $domiciliosofendidossolicitudesDto[$x]->setActivo("N");
                                                $tmpDomicilios = $domiciliosofendidossolicitudesDao->updateDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto[$x], $this->proveedor);
                                                if ($tmpDomicilios == "") {
                                                    $msg[] = array("No se logro dar de baja el domicilio seleccionada del ofendido");
                                                    $logger->w_onError("No se logro dar de baja el domicilio seleccionada del ofendido");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el domicilio seleccionada del ofendido");
                                                }
                                            }
                                        }

                                        if (!$error) {
                                            $ofeCarp = new OfendidossolicitudesDTO();
                                            $ofeCarp->setIdOfendidoSolicitud($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud());
                                            $ofeCarp->setActivo("N");

                                            $ofendidosSolicitudesDto[$index]->setActivo("N");
//                                            $ofendidosSolicitudesDao->updateOfendidossolicitudes($ofendidosSolicitudesDto[$index], $this->proveedor);
                                            $ofeCarp = $ofendidosSolicitudesDao->updateOfendidossolicitudes($ofeCarp, $this->proveedor);
                                            if ($ofeCarp === "") {
                                                $logger->w_onError("No se logro dar de baja el ofendido");
                                            } else {
                                                $logger->w_onError("Todo va bien damos de baja al ofendido");
                                            }
                                        }
                                    }
                                }

                                $delitossolicitudesDto = new DelitossolicitudesDTO();
                                $delitossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                $delitossolicitudesDto->setActivo("S");
                                $delitossolicitudesDao = new DelitossolicitudesDAO();
                                $delitossolicitudesDto = $delitossolicitudesDao->selectDelitossolicitudes($delitossolicitudesDto, "", $this->proveedor);

                                if ($delitossolicitudesDto != "") {//DAMOS DE BAJA LOS DELITOS DE LAS SOLICITUDES
                                    for ($index = 0; $index < count($delitossolicitudesDto); $index ++) {
                                        $delitossolicitudesDto[$index]->setActivo("N");
                                        $tmpDelitos = $delitossolicitudesDao->updateDelitossolicitudes($delitossolicitudesDto[$index], $this->proveedor);
                                        if ($tmpDelitos == "") {
                                            $msg[] = array("No se logro dar de baja el delito seleccionada de la solicitud");
                                            $logger->w_onError("No se logro dar de baja el delito seleccionada de la solicitud");
                                            $error = true;
                                        } else {
                                            $logger->w_onError("Se logro dar de baja el delito seleccionada de la solicitud");
                                        }
                                    }
                                }

                                $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                                $impofedelsolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                $impofedelsolicitudesDto->setActivo("S");
                                $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                                $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectImpofedelsolicitudes($impofedelsolicitudesDto, "", $this->proveedor);

                                if ($impofedelsolicitudesDto != "") {//Damos de baja las relaciones de ofendidos, imputados y delitos
                                    for ($index = 0; $index < count($impofedelsolicitudesDto); $index ++) {

                                        $efectosofendidosDto = new EfectosofendidosDTO();
                                        $efectosofendidosDto->setIdImpOfeDelSolicitud($impofedelsolicitudesDto[$index]->getIdImpOfeDelSolicitud());
                                        $efectosofendidosDao = new EfectosofendidosDAO();
                                        $efectosofendidosDto = $efectosofendidosDao->selectEfectosofendidos($efectosofendidosDto, "", $this->proveedor);

                                        if ($efectosofendidosDto != "") {
                                            for ($x = 0; $x < count($efectosofendidosDto); $x ++) {
                                                $efectosofendidosDto[$x]->setActivo("N");
                                                $tmpEfectosOfendidos = $efectosofendidosDao->updateEfectosofendidos($efectosofendidosDto[$x], $this->proveedor);
                                                if ($tmpEfectosOfendidos == "") {
                                                    $msg[] = array("No se logro dar de baja el ofendido con respecto al delito de la solicitud");
                                                    $logger->w_onError("No se logro dar de baja el ofendido con respecto al delito de la solicitud");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja el ofendido con respecto al delito de la solicitud");
                                                }
                                            }
                                        }


                                        $trataspersonasDto = new TrataspersonasDTO();
                                        $trataspersonasDto->setIdImpOfeDelSolicitud($impofedelsolicitudesDto[$index]->getIdImpOfeDelSolicitud());
                                        $trataspersonasDao = new TrataspersonasDAO();
                                        $trataspersonasDto = $trataspersonasDao->selectTrataspersonas($trataspersonasDto, "", $this->proveedor);

                                        if ($trataspersonasDto != "") {
                                            for ($x = 0; $x < count($trataspersonasDto); $x ++) {
                                                $trataspersonasDto[$x]->setActivo("N");
                                                $tmpTrataPersonas = $trataspersonasDao->updateTrataspersonas($trataspersonasDto[$x], $this->proveedor);
                                                if ($tmpTrataPersonas == "") {
                                                    $msg[] = array("No se logro dar de baja la trata de personas de la solicitud");
                                                    $logger->w_onError("No se logro dar de baja la trata de personas de la solicitud");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja la trata de personas de la solicitud");
                                                }
                                            }
                                        }

                                        $violenciadegeneroDto = new ViolenciadegeneroDTO();
                                        $violenciadegeneroDto->setIdImpOfeDelSolicitud($impofedelsolicitudesDto[$index]->getIdImpOfeDelSolicitud());
                                        $violenciadegeneroDao = new ViolenciadegeneroDAO();
                                        $violenciadegeneroDto = $violenciadegeneroDao->selectViolenciadegenero($violenciadegeneroDto, "", $this->proveedor);

                                        if ($violenciadegeneroDto != "") {
                                            for ($x = 0; $x < count($violenciadegeneroDto); $x ++) {

                                                /*
                                                 * COMIENZA EL APARTADO DE VIOLECNIA DE GENERO
                                                 */
                                                $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
                                                $violenciahomicidiosdolososDto->setIdViolenciaDeGenero($violenciadegeneroDto[$x]->getIdViolenciaDeGenero());
                                                $violenciahomicidiosdolososDto->setActivo("S");
                                                $violenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
                                                $violenciahomicidiosdolososDto = $violenciahomicidiosdolososDao->selectViolenciahomicidiosdolosos($violenciahomicidiosdolososDto, "", $this->proveedor);

                                                if ($violenciahomicidiosdolososDto != "") {
                                                    for ($y = 0; $y < count($violenciahomicidiosdolososDto); $y ++) {
                                                        $violenciahomicidiosdolososDto[$y]->setActivo("N");
                                                        $tmpViolenciaHomicidiosDolosos = $violenciahomicidiosdolososDao->updateViolenciahomicidiosdolosos($violenciahomicidiosdolososDto[$y], $this->proveedor);
                                                        if ($tmpViolenciaHomicidiosDolosos == "") {
                                                            $msg[] = array("No se logro dar de baja la violencia homicidios dolosos solicitudes");
                                                            $logger->w_onError("No se logro dar de baja la violencia homicidios dolosos solicitudes");
                                                            $error = true;
                                                        } else {
                                                            $logger->w_onError("Se logro dar de baja la violencia homicidios dolosos solicitudes");
                                                        }
                                                    }
                                                }

                                                $violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
                                                $violenciafactoressocialesDto->setIdViolenciaDeGenero($violenciadegeneroDto[$x]->getIdViolenciaDeGenero());
                                                $violenciafactoressocialesDto->setActivo("S");
                                                $violenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
                                                $violenciafactoressocialesDto = $violenciafactoressocialesDao->selectViolenciafactoressociales($violenciafactoressocialesDto, "", $this->proveedor);

                                                if ($violenciafactoressocialesDto != "") {
                                                    for ($y = 0; $y < count($violenciafactoressocialesDto); $y ++) {
                                                        $violenciafactoressocialesDto[$y]->setActivo("N");
                                                        $tmpViolenciaFactoresSociales = $violenciafactoressocialesDao->updateViolenciafactoressociales($violenciafactoressocialesDto[$y], $this->proveedor);
                                                        if ($tmpViolenciaFactoresSociales == "") {
                                                            $msg[] = array("No se logro dar de baja la violencia factores sociales de la  solicitudes");
                                                            $logger->w_onError("No se logro dar de baja la violencia factores sociales de la  solicitudes");
                                                            $error = true;
                                                        } else {
                                                            $logger->w_onError("Se logro dar de baja la violencia factores sociales de la  solicitudes");
                                                        }
                                                    }
                                                }

                                                /*
                                                 * TERMINAMOS CON EL APARTADO DE VIOLENCIA DE GENERO
                                                 */

                                                $violenciadegeneroDto[$x]->setActivo("N");
                                                $tmpViolenciaGenero = $violenciadegeneroDao->updateViolenciadegenero($violenciadegeneroDto[$x], $this->proveedor);
                                                if ($tmpViolenciaGenero == "") {
                                                    $msg[] = array("No se logro dar de baja la violencia de genero de la solicitud");
                                                    $logger->w_onError("No se logro dar de baja la violencia de genero de la solicitud");
                                                    $error = true;
                                                } else {
                                                    $logger->w_onError("Se logro dar de baja la violencia de genero de la solicitud");
                                                }
                                            }
                                        }

                                        /*
                                         * COMENZAMOS CON EL APARTADO DE HOSTIGAMIENTO Y ACOSO SEXUAL
                                         */

                                        $sexualesDto = new SexualesDTO();
                                        $sexualesDto->setIdImpOfeDelSolicitud($impofedelsolicitudesDto[$index]->getIdImpOfeDelSolicitud());
                                        $sexualesDto->setActivo("S");
                                        $sexualesDao = new SexualesDAO();
                                        $sexualesDto = $sexualesDao->selectSexuales($sexualesDto, "", $this->proveedor);

                                        if ($sexualesDto != "") {
                                            for ($x = 0; $x < count($sexualesDto); $x ++) {
                                                $sexualesconductasDto = new SexualesconductasDTO();
                                                $sexualesconductasDto->setIdSexual($sexualesDto[$x]->getIdSexual());
                                                $sexualesconductasDto->setActivo("S");

                                                $sexualesconductasDao = new SexualesconductasDAO();
                                                $sexualesconductasDto = $sexualesconductasDao->selectSexualesconductas($sexualesconductasDto, "", $this->proveedor);

                                                if ($sexualesconductasDto != "") {
                                                    for ($y = 0; $y < count($sexualesconductasDto); $y ++) {
                                                        $sexualesconductasDto[$y]->setActivo("N");
                                                        $tmpSexualesConducta = $sexualesconductasDao->updateSexualesconductas($sexualesconductasDto[$y], $this->proveedor);
                                                        if ($tmpSexualesConducta == "") {
                                                            $msg[] = array("No se logro dar de baja los sexuales conducta de la solicitud");
                                                            $logger->w_onError("No se logro dar de baja los sexuales conducta de la solicitud");
                                                            $error = true;
                                                        } else {
                                                            $logger->w_onError("Se logro dar de baja los sexuales conducta de la solicitud");
                                                        }
                                                    }
                                                }

//                                            $efectossexualesDto = new EfectossexualesDTO();
//                                            $efectossexualesDto->setIdSexual($sexualesDto[$x]->getIdSexual());
//                                            $efectossexualesDto->setActivo("S");
//                                            $efectossexualesDao = new EfectossexualesDAO();
//                                            $efectossexualesDto = $efectossexualesDao->selectEfectossexuales($efectossexualesDto, "", $this->proveedor);
//
//                                            if ($efectossexualesDto != "") {
//                                                for ($y = 0; $y < count($efectossexualesDto); $y++) {
//                                                    $efectossexualesDto[$y]->setActivo("N");
//                                                    $tmpEfectosSexuales = $efectossexualesDao->updateEfectossexuales($efectossexualesDto[$y], $this->proveedor);
//
//                                                    if ($tmpEfectosSexuales != "") {
//                                                        $msg[] = array("No se logro dar de baja los efectos sexuales de la solicitud");
//                                                        $error = true;
//                                                    }
//                                                }
//                                            }

                                                $testigossexualesDto = new TestigossexualesDTO();
                                                $testigossexualesDto->setIdSexual($sexualesDto[$x]->getIdSexual());
                                                $testigossexualesDto->setActivo("S");
                                                $testigossexualesDao = new TestigossexualesDAO();
                                                $testigossexualesDto = $testigossexualesDao->selectTestigossexuales($testigossexualesDto, "", $this->proveedor);

                                                if ($testigossexualesDto != "") {
                                                    for ($y = 0; $y < count($testigossexualesDto); $y ++) {
                                                        $testigossexualesDto[$y]->setActivo("N");
                                                        $tmpTestigosSexuales = $testigossexualesDao->selectTestigossexuales($testigossexualesDto[$y], $this->proveedor);
                                                        if ($tmpTestigosSexuales == "") {
                                                            $msg[] = array("No se logro dar de baja los testigos de la solicitud");
                                                            $logger->w_onError("No se logro dar de baja los testigos de la solicitud");
                                                            $error = true;
                                                        } else {
                                                            $logger->w_onError("Se logro dar de baja los testigos de la solicitud");
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        /*
                                         * TERMINAMOS CON EL APARTADO DE HOSTIGAMIENTO Y ACOSO SEXUAL
                                         */


                                        if (!$error) {
                                            $ofeCarp = new ImpofedelsolicitudesDTO();
                                            $ofeCarp->setIdImpOfeDelSolicitud($impofedelsolicitudesDto[$index]->getIdImpOfeDelSolicitud());
                                            $ofeCarp->setActivo("N");
                                            $impofedelsolicitudesDto[$index]->setActivo("N");
                                            $ofeCarp = $impofedelsolicitudesDao->eliminaImpodelsolicitudes($impofedelsolicitudesDto[$index], $this->proveedor);
                                            if ($ofeCarp === false) {
                                                $logger->w_onError("No se logro dar de baja la relacion del solicitud");
                                            } else {
                                                $logger->w_onError("Se logro dar de baja los testigos de la solicitud");
                                            }
                                        }
                                    }
                                }
                                /*
                                 * TERMINAMOS DE DAR DE BAJA TODO LO QUE CONTENIA LA SOLICITUD ANTERIOR MENTE
                                 */

                                /*
                                 * COMENZAMOS CON LA COPIA DE LA INFORMACION DE LA CARPETA JUDICIAL A LA SOLICITUD
                                 */


                                //Aqui vamos a copiar todo de la carpeta judicial a la solicitud
                                /*
                                 * COMENZAMOS                              
                                 */
//                            echo "COMENZAMOS CON LA COPIA DE LA INFORMACION<br>";
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setIdCarpetaJudicial($SolicitudesaudienciasDto[0]->getIdReferencia());

                                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, "", $this->proveedor);
//                            echo "BUSCAMOS LA INFORMACION DE LA CARPETA JUDICIAL<br>";
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];

                                    //FASE DE LA CARPETA
//                                    if ($carpetasJudicialesDto->getCveTipoCarpeta() == "1") {
//                                        $faceActual = "C";
//                                    } else if ($carpetasJudicialesDto->getCveTipoCarpeta() == "2") {
//                                        $faceActual = "A";
//                                    }else{
//					$faseActual="";
//				    }	

                                    $faceActual = "";
                                    if (($carpetasJudicialesDto->getCveTipoCarpeta() == "1") || ($carpetasJudicialesDto->getCveTipoCarpeta() == "2")) {
                                        //Auxiliar y COntrol
                                        $faceActual = "1,2";
                                    } else if (($carpetasJudicialesDto->getCveTipoCarpeta() == "3") || ($carpetasJudicialesDto->getCveTipoCarpeta() == "4")) {
                                        //Juicio y tribunal 
                                        $faceActual = "3";
                                    } else if (($carpetasJudicialesDto->getCveTipoCarpeta() == "5")) {
                                        //Ejecucion de sentencias (Expediente)
                                        $logger->w_onError("Fase: 4");
                                        $faceActual = "4";
                                    } else if ($carpetasJudicialesDto->getCveTipoCarpeta() == "6") {
                                        $faceActual = "6";
                                        $logger->w_onError("Fase: 6");
                                    }


                                    $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                                    $imputadoscarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());

                                    /*
                                     * Comenzamos a copiar los imputados de la carpeta judicial al solicitude de auediencia
                                     */

                                    @$imputadoscarpetasDto->setCveEtapaProcesal($faceActual);
                                    $imputadoscarpetasDto->setActivo("S");

                                    $impuatdosSolicitud = array(); //Seran los imputados que se registraran en la solicitud
                                    $ofendidosSolicitud = array(); // Seran los ofendidos que se registran en la solicitud
                                    $delitosSolicitud = array(); // Seran los delitos que se registran en la solicitud
                                    $impOfeDelRelSolicitud = array(); // Sera la relacion de los imputados ofendidos y delitos

                                    $imputadoscarpetasDao = new ImputadoscarpetasDAO();
                                    $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);

                                    if ($imputadoscarpetasDto != "") {

                                        $imputadosConAutoJuicio = 0;

                                        for ($index = 0; $index < count($imputadoscarpetasDto); $index ++) {

                                            /*
                                             * validar que al menos un imputado de la carpeta a copiar tenga un auto de apertura a juicio
                                             * si al menos un imputado tiene un auto de apertura a juicio,
                                             * copiar solo los imputados que tienen un auto de apertura a juicio
                                             */

                                            $autoAperturaJuicioDao = new AperturasjuicioDAO();
                                            $autoAperturaJuicioDto = new AperturasjuicioDTO();

                                            $autoAperturaJuicioDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                            $autoAperturaJuicioDto->setActivo('S');

                                            $responseAutoApertura = $autoAperturaJuicioDao->selectAperturasjuicio($autoAperturaJuicioDto, ' And IdAudienciaJuicio is Null', $this->proveedor);

                                            if ($etapaProcesalDeAudienciaSolicitada == 3 && $carpetasJudicialesDto->getCveTipoCarpeta() == "2") {

                                                if ($responseAutoApertura == '') {
                                                    $copiarImputado = false;
                                                } else {
                                                    $copiarImputado = true;
                                                    $imputadosConAutoJuicio ++;
                                                }
                                            } else {
                                                $copiarImputado = true;
                                                $imputadosConAutoJuicio ++;
                                            }

                                            if ($copiarImputado) {
                                                ////comprobar si existe el imputado ya, si existe no insertar
                                                $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                                                $imputadossolicitudesExisteDto = new ImputadossolicitudesDTO();
                                                $imputadossolicitudesExisteDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                $imputadossolicitudesExisteDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                $imputadossolicitudesExisteDto->setActivo('S');
                                                $logger->w_onError("Buscamos el imputado si no esta registrado en la solicitud de audiencia");
                                                $rsExiste = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesExisteDto, "", $this->proveedor);
                                                if ($rsExiste != "") {
//                                                            Se asigna el id del imputado ya registrado para guardar la relacion
                                                    $idImputadoSolicitud = $rsExiste[0]->getIdImputadoSolicitud();
                                                    $logger->w_onError("Ya esta registrado " . $idImputadoSolicitud);
                                                } else {
                                                    $logger->w_onError("No esta registrado se crea");
                                                    $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                                                    $imputadossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                    $imputadossolicitudesDto->setactivo($imputadoscarpetasDto[$index]->getActivo());
                                                    $imputadossolicitudesDto->setdetenido($imputadoscarpetasDto[$index]->getDetenido());
                                                    $imputadossolicitudesDto->setnombre($imputadoscarpetasDto[$index]->getNombre());
                                                    $imputadossolicitudesDto->setpaterno($imputadoscarpetasDto[$index]->getPaterno());
                                                    $imputadossolicitudesDto->setmaterno($imputadoscarpetasDto[$index]->getMaterno());
                                                    $imputadossolicitudesDto->setrfc($imputadoscarpetasDto[$index]->getRfc());
                                                    $imputadossolicitudesDto->setcurp($imputadoscarpetasDto[$index]->getCurp());
                                                    $imputadossolicitudesDto->setcveTipoDetencion($imputadoscarpetasDto[$index]->getCveTipoDetencion());
                                                    $imputadossolicitudesDto->setcveGenero($imputadoscarpetasDto[$index]->getCveGenero());
                                                    $imputadossolicitudesDto->setalias($imputadoscarpetasDto[$index]->getAlias());
                                                    $imputadossolicitudesDto->setfechaDeclaracion($imputadoscarpetasDto[$index]->getFechaDeclaracion());
                                                    $imputadossolicitudesDto->setcvePaisNacimiento($imputadoscarpetasDto[$index]->getCvePaisNacimiento());
                                                    $imputadossolicitudesDto->setcveEstadoNacimiento($imputadoscarpetasDto[$index]->getCveEstadoNacimiento());
                                                    $imputadossolicitudesDto->setcveMunicipioNacimiento($imputadoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                                    $imputadossolicitudesDto->setfechaNacimiento($imputadoscarpetasDto[$index]->getFechaNacimiento());
                                                    $imputadossolicitudesDto->setedad($imputadoscarpetasDto[$index]->getEdad());
                                                    $imputadossolicitudesDto->setcveTipoPersona($imputadoscarpetasDto[$index]->getCveTipoPersona());
                                                    $imputadossolicitudesDto->setCveTipoReligion($imputadoscarpetasDto[$index]->getCveTipoReligion());
                                                    $imputadossolicitudesDto->setnombreMoral($imputadoscarpetasDto[$index]->getNombreMoral());
                                                    $imputadossolicitudesDto->setcveNivelInstruccion($imputadoscarpetasDto[$index]->getCveNivelInstruccion());
                                                    $imputadossolicitudesDto->setcveEstadoCivil($imputadoscarpetasDto[$index]->getCveEstadoCivil());
                                                    $imputadossolicitudesDto->setcveEspanol($imputadoscarpetasDto[$index]->getCveEspanol());
                                                    $imputadossolicitudesDto->setcveAlfabetismo($imputadoscarpetasDto[$index]->getCveAlfabetismo());
                                                    $imputadossolicitudesDto->setcveDialectoIndigena($imputadoscarpetasDto[$index]->getCveDialectoIndigena());
                                                    $imputadossolicitudesDto->setcveTipoFamiliaLinguistica($imputadoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                                    $imputadossolicitudesDto->setcveOcupacion($imputadoscarpetasDto[$index]->getCveOcupacion());
                                                    $imputadossolicitudesDto->setcveInterprete($imputadoscarpetasDto[$index]->getCveInterprete());
                                                    $imputadossolicitudesDto->setcveEstadoPsicofisico($imputadoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                                    $imputadossolicitudesDto->setfechaImputacion($imputadoscarpetasDto[$index]->getFechaImputacion());
                                                    $imputadossolicitudesDto->setfechaControlDet($imputadoscarpetasDto[$index]->getFechaControlDet());
                                                    $imputadossolicitudesDto->setfecTerminoCons($imputadoscarpetasDto[$index]->getFecTerminoCons());
                                                    $imputadossolicitudesDto->setfecCierreInv($imputadoscarpetasDto[$index]->getFecCierreInv());
                                                    $imputadossolicitudesDto->setestadoNacimiento($imputadoscarpetasDto[$index]->getEstadoNacimiento());
                                                    $imputadossolicitudesDto->setmunicipioNacimiento($imputadoscarpetasDto[$index]->getMunicipioNacimiento());
                                                    $imputadossolicitudesDto->setrelacionMoral($imputadoscarpetasDto[$index]->getRelacionMoral());
                                                    $imputadossolicitudesDto->setpersonaMoral($imputadoscarpetasDto[$index]->getPersonaMoral());
//                                        $imputadossolicitudesDto->setcveNacionalidad($imputadoscarpetasDto[$index]->getCveNacionalidad());
                                                    $imputadossolicitudesDto->setcveCereso($imputadoscarpetasDto[$index]->getCveCereso());
                                                    $imputadossolicitudesDto->setCveEtapaProcesal($imputadoscarpetasDto[$index]->getCveEtapaProcesal());
                                                    $imputadossolicitudesDto->setcveTipoReincidencia($imputadoscarpetasDto[$index]->getCveTipoReincidencia());
                                                    $imputadossolicitudesDto->setingresoMensual($imputadoscarpetasDto[$index]->getIngresoMensual());
                                                    $imputadossolicitudesDto->setcveGrupoEdnico($imputadoscarpetasDto[$index]->getCveGrupoEdnico());
                                                    $imputadossolicitudesDto->setTieneSobreseimiento($imputadoscarpetasDto[$index]->getTieneSobreseimiento());
                                                    $imputadossolicitudesDto->setFechaSobreseimiento($imputadoscarpetasDto[$index]->getFechaSobreseimiento());
                                                    $imputadossolicitudesDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                    $imputadossolicitudesDto->setActivo("S");


                                                    $imputadossolicitudesDto = $imputadossolicitudesDao->insertImputadossolicitudes($imputadossolicitudesDto, $this->proveedor);
//                                        echo $this->proveedor->error();
//                                        var_dump($imputadossolicitudesDto);
                                                    if ($imputadossolicitudesDto != "") {
                                                        $impuatdosSolicitud[] = array("idImputadoCarpetaJudicial" => $imputadoscarpetasDto[$index]->getIdImputadoCarpeta(), "idImputadoSolicitudAudiencia" => $imputadossolicitudesDto[0]->getIdImputadoSolicitud());


                                                        $nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                                                        $nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $nacionalidadesimputadoscarpetasDto->setActivo("S");
                                                        $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                                                        $nacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto, "", $this->proveedor);

                                                        if ($nacionalidadesimputadoscarpetasDto != "") {
                                                            for ($x = 0; $x < count($nacionalidadesimputadoscarpetasDto); $x ++) {
                                                                $nacionalidadesimputadossolicitudesDto = new NacionalidadesimputadossolicitudesDTO();
                                                                $nacionalidadesimputadossolicitudesDto->setcvePais($nacionalidadesimputadoscarpetasDto[$x]->getCvePais());
                                                                $nacionalidadesimputadossolicitudesDto->setactivo("S");
                                                                $nacionalidadesimputadossolicitudesDto->setidImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());

                                                                $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
                                                                $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto, $this->proveedor);

                                                                if ($nacionalidadesimputadossolicitudesDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar las nacionalidades de los imputados");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }


                                                        $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
                                                        $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $domiciliosimputadoscarpetasDto->setActivo("S");
                                                        $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();
                                                        $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto, "", $this->proveedor);

                                                        if ($domiciliosimputadoscarpetasDto != "") {
                                                            for ($x = 0; $x < count($domiciliosimputadoscarpetasDto); $x ++) {
                                                                $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                                                                $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                $domiciliosimputadossolicitudesDto->setDomicilioProcesal($domiciliosimputadoscarpetasDto[$x]->getDomicilioProcesal());
                                                                $domiciliosimputadossolicitudesDto->setCvePais($domiciliosimputadoscarpetasDto[$x]->getCvePais());
                                                                $domiciliosimputadossolicitudesDto->setCveEstado($domiciliosimputadoscarpetasDto[$x]->getCveEstado());
                                                                $domiciliosimputadossolicitudesDto->setCveMunicipio($domiciliosimputadoscarpetasDto[$x]->getCveMunicipio());
                                                                $domiciliosimputadossolicitudesDto->setDireccion($domiciliosimputadoscarpetasDto[$x]->getCvePais());
                                                                $domiciliosimputadossolicitudesDto->setColonia($domiciliosimputadoscarpetasDto[$x]->getDireccion());
                                                                $domiciliosimputadossolicitudesDto->setNumInterior($domiciliosimputadoscarpetasDto[$x]->getNumInterior());
                                                                $domiciliosimputadossolicitudesDto->setNumExterior($domiciliosimputadoscarpetasDto[$x]->getNumExterior());
                                                                $domiciliosimputadossolicitudesDto->setCp($domiciliosimputadoscarpetasDto[$x]->getCp());
                                                                $domiciliosimputadossolicitudesDto->setLatitud($domiciliosimputadoscarpetasDto[$x]->getLatitud());
                                                                $domiciliosimputadossolicitudesDto->setLongitud($domiciliosimputadoscarpetasDto[$x]->getLongitud());
                                                                $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($domiciliosimputadoscarpetasDto[$x]->getRecidenciaHabitual());
                                                                $domiciliosimputadossolicitudesDto->setEstado($domiciliosimputadoscarpetasDto[$x]->getEstado());
                                                                $domiciliosimputadossolicitudesDto->setMunicipio($domiciliosimputadoscarpetasDto[$x]->getMunicipio());
                                                                $domiciliosimputadossolicitudesDto->setCveConvivencia($domiciliosimputadoscarpetasDto[$x]->getCveConvivencia());
                                                                $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($domiciliosimputadoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                                $domiciliosimputadossolicitudesDto->setActivo("S");


                                                                $domiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                                                                $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesDao->insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $this->proveedor);

                                                                if ($domiciliosimputadossolicitudesDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar los domicilios");
                                                                    $error = true;
                                                                }
                                                            }
//                                                    } else {
//                                                        $msg[] = array("La carpeta no cuenta con domicilios para el imputado para copiar a la solicitud");
//                                                        $error = true;
                                                        }

                                                        $defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();
                                                        $defensoresimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $defensoresimputadoscarpetasDto->setActivo("S");
                                                        $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
                                                        $defensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto, "", $this->proveedor);

                                                        if ($defensoresimputadoscarpetasDto != "") {

                                                            for ($x = 0; $x < count($defensoresimputadoscarpetasDto); $x ++) {
                                                                $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                                                                $defensoresimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                $defensoresimputadossolicitudesDto->setCveTipoDefensor($defensoresimputadoscarpetasDto[$x]->getCveTipoDefensor());
                                                                $defensoresimputadossolicitudesDto->setNombre($defensoresimputadoscarpetasDto[$x]->getNombre());
                                                                $defensoresimputadossolicitudesDto->setTelefono($defensoresimputadoscarpetasDto[$x]->getTelefono());
                                                                $defensoresimputadossolicitudesDto->setCelular($defensoresimputadoscarpetasDto[$x]->getCelular());
                                                                $defensoresimputadossolicitudesDto->setEmail($defensoresimputadoscarpetasDto[$x]->getEmail());
                                                                $defensoresimputadossolicitudesDto->setActivo("S");

                                                                $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
                                                                $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $this->proveedor);

                                                                if ($defensoresimputadossolicitudesDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar los defensores");
                                                                    $error = true;
                                                                }
                                                            }
                                                        } else {
                                                            $msg[] = array("La carpeta no cuenta con defensores para el imputado para copiar a la solicitud. ");
                                                            $error = true;
                                                        }

                                                        $tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();
                                                        $tutoresimputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $tutoresimputadoscarpetasDto->setActivo("S");
                                                        $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
                                                        $tutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto, "", $this->proveedor);

                                                        if ($tutoresimputadoscarpetasDto != "") {
                                                            for ($x = 0; $x < count($tutoresimputadoscarpetasDto); $x ++) {
                                                                $tutoresimputadosDto = new TutoresimputadosDTO();
                                                                $tutoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                $tutoresimputadosDto->setProvDef($tutoresimputadoscarpetasDto[$x]->getProvDef());
                                                                $tutoresimputadosDto->setCveGenero($tutoresimputadoscarpetasDto[$x]->getCveGenero());
                                                                $tutoresimputadosDto->setCveTipoTutor($tutoresimputadoscarpetasDto[$x]->getCveTipoTutor());
                                                                $tutoresimputadosDto->setNombre($tutoresimputadoscarpetasDto[$x]->getNombre());
                                                                $tutoresimputadosDto->setPaterno($tutoresimputadoscarpetasDto[$x]->getPaterno());
                                                                $tutoresimputadosDto->setMaterno($tutoresimputadoscarpetasDto[$x]->getMaterno());
                                                                $tutoresimputadosDto->setFechaNacimiento($tutoresimputadoscarpetasDto[$x]->getFechaNacimiento());
                                                                $tutoresimputadosDto->setEdad($tutoresimputadoscarpetasDto[$x]->getEdad());
                                                                $tutoresimputadosDto->setActivo("S");
                                                                $tutoresimputadosDao = new TutoresimputadosDAO();
                                                                $tutoresimputadosDto = $tutoresimputadosDao->insertTutoresimputados($tutoresimputadosDto, $this->proveedor);
                                                                if ($tutoresimputadosDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar los tutores");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }

                                                        $telefonosImputadoscarpetasDto = new TelefonosImputadoscarpetasDTO();
                                                        $telefonosImputadoscarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $telefonosImputadoscarpetasDto->setActivo("S");
                                                        $telefonosImputadoscarpetasDao = new TelefonosImputadoscarpetasDAO();
                                                        $telefonosImputadoscarpetasDto = $telefonosImputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadoscarpetasDto, "", $this->proveedor);

                                                        if ($telefonosImputadoscarpetasDto != "") {
                                                            for ($x = 0; $x < count($telefonosImputadoscarpetasDto); $x ++) {
                                                                $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                                                                $telefenosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                $telefenosimputadossolicitudesDto->setTelefono($telefonosImputadoscarpetasDto[$x]->getTelefono());
                                                                $telefenosimputadossolicitudesDto->setCelular($telefonosImputadoscarpetasDto[$x]->getCelular());
                                                                $telefenosimputadossolicitudesDto->setEmail($telefonosImputadoscarpetasDto[$x]->getEmail());
                                                                $telefenosimputadossolicitudesDto->setActivo("S");
                                                                $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                                                                $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->insertTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $this->proveedor);
                                                                if ($telefenosimputadossolicitudesDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar los telefonos");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
                                                        $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();
                                                        $imputadosdrogascarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[$index]->getIdImputadoCarpeta());
                                                        $imputadosdrogascarpetasDto->setActivo("S");
                                                        $imputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
                                                        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasDao->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto, "", $this->proveedor);

                                                        if ($imputadosdrogascarpetasDto != "") {
                                                            for ($x = 0; $x < count($imputadosdrogascarpetasDto); $x ++) {
                                                                $imputadosdrogasDto = new ImputadosdrogasDTO();
                                                                $imputadosdrogasDto->setidImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                                                $imputadosdrogasDto->setcveDroga($imputadosdrogascarpetasDto[$x]->getCveDroga());
                                                                $imputadosdrogasDto->setactivo("S");

                                                                $ImputadosdrogasDao = new ImputadosdrogasDAO();
                                                                $imputadosdrogasDto = $ImputadosdrogasDao->insertImputadosdrogas($imputadosdrogasDto, $this->proveedor);
                                                                if ($imputadosdrogasDto == "") {
                                                                    $msg[] = array("Ocurrio un error al copiar las drogas a la solicitud");
                                                                    $error = true;
                                                                }
                                                            }
                                                        }
//                                            ImputadosdrogasDTO ImputadosdrogascarpetasDTO
                                                    } else {
                                                        $msg[] = array("El imputado no se logro copiar a la solicitud");
                                                        $error = true;
                                                    }
                                                }
                                            }
                                        }

                                        if ($imputadosConAutoJuicio == 0) {
                                            $msg[] = array("Error al editar, No hay ningun imputado con auto de apertura a juicio, por favor verificar.");
                                            $error = true;
                                        }
                                    } else {
                                        $msg[] = array("Error la refencia base no tiene imputados para copiar a la solicitud");
                                        $error = true;
                                    }
                                    /*
                                     * Terminamos de coapiar los imputados de la carpeta judicial a la solicitud de audiencia
                                     */

                                    /*
                                     * Comenzamos a copiar los ofendidos de la carpeta judicial a la solicitud de audiencia
                                     */
                                    $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                                    $ofendidoscarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                                    $ofendidoscarpetasDto->setActivo("S");
                                    $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                                    $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);

//                                echo $this->proveedor->erreor();
                                    if ($ofendidoscarpetasDto != "") {
                                        for ($index = 0; $index < count($ofendidoscarpetasDto); $index ++) {
                                            $ofendidossolicitudesDao = new OfendidossolicitudesDAO();
                                            ////comprobar si existe el ofendido, si existe no insertar
                                            $ofendidossolicitudesExisteDto = new OfendidossolicitudesDTO();
                                            $ofendidossolicitudesExisteDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                            if ($ofendidoscarpetasDto[$index]->getCveTipoPersona() === 1) {
                                                $ofendidossolicitudesExisteDto->setNombre($ofendidoscarpetasDto[$index]->getNombre());
                                                $ofendidossolicitudesExisteDto->setPaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                                $ofendidossolicitudesExisteDto->setMaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                            } else {
                                                $ofendidossolicitudesExisteDto->setNombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                            }
                                            $ofendidossolicitudesExisteDto->setActivo('S');
                                            $logger->w_onError("Buscamo al ofendido si ya esta registrado en la solicitud");
                                            $rsExisteOfendido = $ofendidossolicitudesDao->selectOfendidossolicitudes($ofendidossolicitudesExisteDto, "", $this->proveedor);
                                            if ($rsExisteOfendido != "" && count($rsExisteOfendido) != 0 && $rsExisteOfendido != null) {
                                                $idOfendidoSolicitud = $rsExisteOfendido[0]->getIdOfendidoSolicitud();
                                                $logger->w_onError("Ya esta registrado " . $idOfendidoSolicitud);
                                            } else {
                                                $logger->w_onError("No esta registrado se crea");
                                                $ofendidossolicitudesDto = new OfendidossolicitudesDTO();
                                                $ofendidossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                                $ofendidossolicitudesDto->setactivo($ofendidoscarpetasDto[$index]->getActivo());
                                                $ofendidossolicitudesDto->setnombre($ofendidoscarpetasDto[$index]->getNombre());
                                                $ofendidossolicitudesDto->setpaterno($ofendidoscarpetasDto[$index]->getPaterno());
                                                $ofendidossolicitudesDto->setmaterno($ofendidoscarpetasDto[$index]->getMaterno());
                                                $ofendidossolicitudesDto->setrfc($ofendidoscarpetasDto[$index]->getRfc());
                                                $ofendidossolicitudesDto->setcurp($ofendidoscarpetasDto[$index]->getCurp());
                                                $ofendidossolicitudesDto->setfechaNacimiento($ofendidoscarpetasDto[$index]->getFechaNacimiento());
                                                $ofendidossolicitudesDto->setcveOcupacion($ofendidoscarpetasDto[$index]->getCveOcupacion());
                                                $ofendidossolicitudesDto->setcveTipoPersona($ofendidoscarpetasDto[$index]->getCveTipoPersona());
                                                $ofendidossolicitudesDto->setcveGenero($ofendidoscarpetasDto[$index]->getCveGenero());
                                                $ofendidossolicitudesDto->setCveTipoParte($ofendidoscarpetasDto[$index]->getCveTipoParte());
                                                $ofendidossolicitudesDto->setCveTipoReligion($ofendidoscarpetasDto[$index]->getCveTipoReligion());
                                                $ofendidossolicitudesDto->setedad($ofendidoscarpetasDto[$index]->getEdad());
                                                $ofendidossolicitudesDto->setcvePaisNacimiento($ofendidoscarpetasDto[$index]->getCvePaisNacimiento());
                                                $ofendidossolicitudesDto->setcveEstadoNacimiento($ofendidoscarpetasDto[$index]->getCveEstadoNacimiento());
                                                $ofendidossolicitudesDto->setestadoNacimiento($ofendidoscarpetasDto[$index]->getEstadoNacimiento());
                                                $ofendidossolicitudesDto->setcveMunicipioNacimiento($ofendidoscarpetasDto[$index]->getCveMunicipioNacimiento());
                                                $ofendidossolicitudesDto->setmunicipioNacimiento($ofendidoscarpetasDto[$index]->getMunicipioNacimiento());
                                                $ofendidossolicitudesDto->setcveEstadoCivil($ofendidoscarpetasDto[$index]->getCveEstadoCivil());
                                                $ofendidossolicitudesDto->setcveAlfabetismo($ofendidoscarpetasDto[$index]->getCveAlfabetismo());
                                                $ofendidossolicitudesDto->setcveNivelInstruccion($ofendidoscarpetasDto[$index]->getCveNivelInstruccion());
                                                $ofendidossolicitudesDto->setcveEspanol($ofendidoscarpetasDto[$index]->getCveEspanol());
                                                $ofendidossolicitudesDto->setcveDialectoIndigena($ofendidoscarpetasDto[$index]->getCveDialectoIndigena());
                                                $ofendidossolicitudesDto->setcveTipoFamiliaLinguistica($ofendidoscarpetasDto[$index]->getCveTipoFamiliaLinguistica());
                                                $ofendidossolicitudesDto->setcveInterprete($ofendidoscarpetasDto[$index]->getCveInterprete());
                                                $ofendidossolicitudesDto->setcveOrdenProteccion($ofendidoscarpetasDto[$index]->getCveOrdenProteccion());
                                                $ofendidossolicitudesDto->setcveEstadoPsicofisico($ofendidoscarpetasDto[$index]->getCveEstadoPsicofisico());
                                                $ofendidossolicitudesDto->setnombreMoral($ofendidoscarpetasDto[$index]->getNombreMoral());
                                                $ofendidossolicitudesDto->setcveVictimaDeLaDelincuenciaOrganizada($ofendidoscarpetasDto[$index]->getCveVictimaDeLaDelincuenciaOrganizada());
                                                $ofendidossolicitudesDto->setcveVictimaDeViolenciaDeGenero($ofendidoscarpetasDto[$index]->getCveVictimaDeViolenciaDeGenero());
                                                $ofendidossolicitudesDto->setcveVictimaDeTrata($ofendidoscarpetasDto[$index]->getCveVictimaDeTrata());
                                                $ofendidossolicitudesDto->setCveVictimaDeAcoso($ofendidoscarpetasDto[$index]->getCveVictimaDeAcoso());
                                                $ofendidossolicitudesDto->setdesaparecido($ofendidoscarpetasDto[$index]->getDesaparecido());
                                                $ofendidossolicitudesDto->setnumHijos($ofendidoscarpetasDto[$index]->getNumHijos());
                                                $ofendidossolicitudesDto->setembarazada($ofendidoscarpetasDto[$index]->getEmbarazada());
                                                $ofendidossolicitudesDto->setcveGrupoEdnico($ofendidoscarpetasDto[$index]->getCveGrupoEdnico());
                                                $ofendidossolicitudesDto->setActivo("S");


                                                $ofendidossolicitudesDto = $ofendidossolicitudesDao->insertOfendidossolicitudes($ofendidossolicitudesDto, $this->proveedor);

                                                if ($ofendidossolicitudesDto != "") {
                                                    $ofendidosSolicitud[] = array("idOfendidoCarpetaJudicial" => $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta(), "idOfendidoSolicitud" => $ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                    $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
                                                    $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
                                                    $domiciliosofendidoscarpetasDto->setActivo("S");
                                                    $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
                                                    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto, "", $this->proveedor);

                                                    if ($domiciliosofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($domiciliosofendidoscarpetasDto); $x ++) {
                                                            $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                                            $domiciliosofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                            $domiciliosofendidossolicitudesDto->setDomicilioProcesal($domiciliosofendidoscarpetasDto[$x]->getDomicilioProcesal());
                                                            $domiciliosofendidossolicitudesDto->setcvePais($domiciliosofendidoscarpetasDto[$x]->getCvePais());
                                                            $domiciliosofendidossolicitudesDto->setcveEstado($domiciliosofendidoscarpetasDto[$x]->getcveEstado());
                                                            $domiciliosofendidossolicitudesDto->setcveMunicipio($domiciliosofendidoscarpetasDto[$x]->getCveMunicipio());
                                                            $domiciliosofendidossolicitudesDto->setdireccion($domiciliosofendidoscarpetasDto[$x]->getDireccion());
                                                            $domiciliosofendidossolicitudesDto->setcolonia($domiciliosofendidoscarpetasDto[$x]->getColonia());
                                                            $domiciliosofendidossolicitudesDto->setnumInterior($domiciliosofendidoscarpetasDto[$x]->getNumInterior());
                                                            $domiciliosofendidossolicitudesDto->setnumExterior($domiciliosofendidoscarpetasDto[$x]->getNumExterior());
                                                            $domiciliosofendidossolicitudesDto->setcp($domiciliosofendidoscarpetasDto[$x]->getCp());
                                                            $domiciliosofendidossolicitudesDto->setlatitud($domiciliosofendidoscarpetasDto[$x]->getLatitud());
                                                            $domiciliosofendidossolicitudesDto->setlongitud($domiciliosofendidoscarpetasDto[$x]->getLongitud());
                                                            $domiciliosofendidossolicitudesDto->setrecidenciaHabitual($domiciliosofendidoscarpetasDto[$x]->getRecidenciaHabitual());
                                                            $domiciliosofendidossolicitudesDto->setestado($domiciliosofendidoscarpetasDto[$x]->getEstado());
                                                            $domiciliosofendidossolicitudesDto->setmunicipio($domiciliosofendidoscarpetasDto[$x]->getMunicipio());
                                                            $domiciliosofendidossolicitudesDto->setcveConvivencia($domiciliosofendidoscarpetasDto[$x]->getCveConvivencia());
                                                            $domiciliosofendidossolicitudesDto->setcveTipoDeVivienda($domiciliosofendidoscarpetasDto[$x]->getCveTipoDeVivienda());
                                                            $domiciliosofendidossolicitudesDto->setActivo("S");
                                                            $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                                                            $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, $this->proveedor);
                                                            if ($domiciliosofendidossolicitudesDto == "") {
                                                                $msg[] = array("Error al copiar el domicilio al ofendido");
                                                                $error = true;
                                                            }
                                                        }
//                                                } else {
//                                                    $msg[] = array("La referencia no cuenta con domicilios para el ofendido");
//                                                    $error = true;
                                                    }

                                                    $defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();
                                                    $defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta());
                                                    $defensoresofendidoscarpetasDto->setActivo("S");
                                                    $defensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
                                                    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, "", $this->proveedor);

                                                    if ($defensoresofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($defensoresofendidoscarpetasDto); $x ++) {
                                                            $defensoresofendidossolicitudesDto = new DefensoresofendidossolicitudesDTO();
                                                            $defensoresofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                            $defensoresofendidossolicitudesDto->setcveTipoAsesor($defensoresofendidoscarpetasDto[$x]->getCveTipoDefensor());
                                                            $defensoresofendidossolicitudesDto->setnombre($defensoresofendidoscarpetasDto[$x]->getNombre());
                                                            $defensoresofendidossolicitudesDto->settelefono($defensoresofendidoscarpetasDto[$x]->getTelefono());
                                                            $defensoresofendidossolicitudesDto->setcelular($defensoresofendidoscarpetasDto[$x]->getCelular());
                                                            $defensoresofendidossolicitudesDto->setemail($defensoresofendidoscarpetasDto[$x]->getEmail());
                                                            $defensoresofendidossolicitudesDto->setactivo("S");
                                                            $defensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
                                                            $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $this->proveedor);
                                                            if ($defensoresofendidossolicitudesDto == "") {
                                                                $msg[] = array("Erro al copiar el defensor a la solicitud de audienciaf");
                                                                $error = true;
                                                            }
                                                        }
                                                    } else {
                                                        $msg[] = array("La referencia no cuenta con defensores para el ofendido");
                                                        $error = true;
                                                    }

                                                    $telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();
                                                    $telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                    $telefonosofendidoscarpetasDto->setActivo("S");
                                                    $telefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
                                                    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, "", $this->proveedor);

                                                    if ($telefonosofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($telefonosofendidoscarpetasDto); $x ++) {
                                                            $telefonosofendidossolicitudesDto = new TelefonosofendidossolicitudesDTO();
                                                            $telefonosofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                            $telefonosofendidossolicitudesDto->settelefono($telefonosofendidoscarpetasDto[$x]->getTelefono());
                                                            $telefonosofendidossolicitudesDto->setcelular($telefonosofendidoscarpetasDto[$x]->getCelular());
                                                            $telefonosofendidossolicitudesDto->setemail($telefonosofendidoscarpetasDto[$x]->getEmail());
                                                            $telefonosofendidossolicitudesDto->setactivo("S");

                                                            $telefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
                                                            $telefonosofendidossolicitudesDto = $telefonosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($telefonosofendidossolicitudesDto, $this->proveedor);
                                                            if ($telefonosofendidossolicitudesDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar los telefonos a la solicitudF");
                                                                $error = true;
                                                            }
                                                        }
                                                    }

                                                    $nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                                                    $nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                    $nacionalidadesofendidoscarpetasDto->setActivo("S");
                                                    $nacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                                                    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, "", $this->proveedor);

                                                    if ($nacionalidadesofendidoscarpetasDto != "") {
                                                        for ($x = 0; $x < count($nacionalidadesofendidoscarpetasDto); $x ++) {
                                                            $nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();
                                                            $nacionalidadesofendidossolicitudesDto->setcvePais($nacionalidadesofendidoscarpetasDto[$x]->getCvePais());
                                                            $nacionalidadesofendidossolicitudesDto->setactivo("S");
                                                            $nacionalidadesofendidossolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());

                                                            $nacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                                                            $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $this->proveedor);
                                                            if ($nacionalidadesofendidossolicitudesDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar las nacionalidades del ofendido");
                                                                $error = true;
                                                            }
                                                        }
                                                    }


                                                    $tutoresOfendidosCarpetasDto = new TutoresofendidoscarpetasDTO();
                                                    $tutoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                    $tutoresOfendidosCarpetasDto->setActivo("S");
                                                    $tutoresOfendidosCarpetasDao = new TutoresofendidoscarpetasDAO();
                                                    $tutoresOfendidosCarpetasDto = $tutoresOfendidosCarpetasDao->selectTutoresofendidoscarpetas($tutoresOfendidosCarpetasDto);
                                                    if ($tutoresOfendidosCarpetasDto != "") {
                                                        for ($x = 0; $x < count($tutoresOfendidosCarpetasDto); $x ++) {
                                                            $tutoresOfendidosSolicitudesDto = new TutoresofendidosDTO();
                                                            $tutoresOfendidosSolicitudesDto->setIdOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
                                                            $tutoresOfendidosSolicitudesDto->setCveTipoTutor($tutoresOfendidosCarpetasDto[$x]->getCveTipoTutor());
                                                            $tutoresOfendidosSolicitudesDto->setProvDef($tutoresOfendidosCarpetasDto[$x]->getProvDef());
                                                            $tutoresOfendidosSolicitudesDto->setNombre($tutoresOfendidosCarpetasDto[$x]->getNombre());
                                                            $tutoresOfendidosSolicitudesDto->setPaterno($tutoresOfendidosCarpetasDto[$x]->getPaterno());
                                                            $tutoresOfendidosSolicitudesDto->setMaterno($tutoresOfendidosCarpetasDto[$x]->getMaterno());
                                                            $tutoresOfendidosSolicitudesDto->setFechaNacimiento($tutoresOfendidosCarpetasDto[$x]->getFechaNacimiento());
                                                            $tutoresOfendidosSolicitudesDto->setEdad($tutoresOfendidosCarpetasDto[$x]->getEdad());
                                                            $tutoresOfendidosSolicitudesDto->setGenero($tutoresOfendidosCarpetasDto[$x]->getCveGenero());
                                                            $tutoresOfendidosSolicitudesDto->setActivo("S");

                                                            $tutoresOfendidosSolicitudesDao = new TutoresofendidosDAO();
                                                            $tutoresOfendidosSolicitudesDto = $tutoresOfendidosSolicitudesDao->insertTutoresofendidos($tutoresOfendidosSolicitudesDto, $this->proveedor);
                                                            if ($tutoresOfendidosSolicitudesDto == "") {
                                                                $msg[] = array("Ocurrio un erro al copiar los tutores del ofendido");
                                                                $error = true;
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("No se logro registra el ofendido en la solicitud de audiencia");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    } else {
                                        $msg[] = array("Error la refencia base no tiene ofendidos para copiar a la soloicitud");
                                        $error = true;
                                    }


                                    /*
                                     * Terminamos de coapira los ofendidos de la carpeta judicial a la solicitud de audiencia
                                     * 
                                     */
                                    /*
                                     * comenzamos a copiar los delitos de la carpeta judicial a la solicitude de audiancia
                                     */
                                    $delitoscarpetasDto = new DelitoscarpetasDTO();
                                    $delitoscarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                                    $logger->w_onError("idCarpetaJudicial: " . $carpetasJudicialesDto->getIdCarpetaJudicial());
                                    $delitoscarpetasDto->setActivo("S");
                                    $delitoscarpetasDao = new DelitoscarpetasDAO();
                                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);

                                    if ($delitoscarpetasDto != "") {
                                        for ($index = 0; $index < count($delitoscarpetasDto); $index ++) {
                                            $delitossolicitudesDto = new DelitossolicitudesDTO();
                                            $delitossolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                            $delitossolicitudesDto->setcveDelito($delitoscarpetasDto[$index]->getCveDelito());
                                            $delitossolicitudesDto->setactivo("S");

                                            $delitossolicitudesDao = new DelitossolicitudesDAO();
                                            $delitossolicitudesDto = $delitossolicitudesDao->insertDelitossolicitudes($delitossolicitudesDto, $this->proveedor);
                                            if ($delitossolicitudesDto == "") {
                                                $msg[] = array("Ocurrio un error al copiar el delito a la solicitud");
                                                $error = true;
                                            } else {
                                                $logger->w_onError("Delitos: " . json_encode($delitoscarpetasDto[$index]->toString()));
                                                $delitosSolicitud[] = array("idDelitoCarpeta" => $delitoscarpetasDto[$index]->getIdDelitoCarpeta(), "idDelitoSolicitud" => $delitossolicitudesDto[0]->getIdDelitoSolicitud());
                                            }
                                        }
                                    } else {
                                        $logger->w_onError("La referencia no cuenta con delitos definidos para copiar a la solicitud2");
                                        $msg[] = array("La referencia no cuenta con delitos definidos para copiar a la solicitud2");
                                        $error = true;
                                    }
                                    /*
                                     * Terminamos de copiar los delitos de la carpeta judicial a la solicitud de audiencia
                                     */
                                    /*
                                     * COMENZAMOS A COPIAR LA RELACION DE DELITOS, OFENDIDOS Y DELITOS DE CARPETAS JUDICIALES A SOLICITUDES DE AUDIENCIA
                                     */

                                    $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                    $impofedelcarpetasDto->setIdCarpetaJudicial($carpetasJudicialesDto->getIdCarpetaJudicial());
                                    $impofedelcarpetasDto->setActivo("S");
                                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                                    $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $this->proveedor);
//                                $impuatdosSolicitud = array(); //Seran los imputados que se registraran en la solicitud
//                                $ofendidosSolicitud = array(); // Seran los ofendidos que se registran en la solicitud
//                                $delitosSolicitud = array(); // Seran los delitos que se registran en la solicitud
//                                  $impOfeDelRelSolicitud = array() // Sera la relacion de los imputados ofendidos y delitos
                                    $logger->w_onError("Imputados: " . json_encode($impuatdosSolicitud));
                                    $logger->w_onError("ofendidos: " . json_encode($ofendidosSolicitud));
                                    $logger->w_onError("delitos: " . json_encode($delitosSolicitud));
                                    if ($impofedelcarpetasDto != "") {

                                        for ($index = 0; $index < count($impofedelcarpetasDto); $index ++) {

                                            $logger->w_onError("Relacion CarpetaJudicial : " . json_encode($impofedelcarpetasDto[$index]->toString()));
                                            $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                                            $impofedelsolicitudesDto->setidSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());

                                            $idImputadoSolicitud = 0;
                                            $idOfendidoSolicitud = 0;
                                            $idDelitoSolicitu = 0;
//                                        var_dump($impuatdosSolicitud);
                                            for ($x = 0; $x < count($impuatdosSolicitud); $x ++) {//Buscamos el imputado en el arreglo
                                                if ($impuatdosSolicitud[$x]["idImputadoCarpetaJudicial"] == $impofedelcarpetasDto[$index]->getIdImputadoCarpeta()) {
                                                    $idImputadoSolicitud = $impuatdosSolicitud[$x]["idImputadoSolicitudAudiencia"];
                                                    break;
                                                }
                                            }
//                                        var_dump($ofendidosSolicitud);
                                            for ($x = 0; $x < count($ofendidosSolicitud); $x ++) {//Buscamos el imputado en el arreglo
                                                if ($ofendidosSolicitud[$x]["idOfendidoCarpetaJudicial"] == $impofedelcarpetasDto[$index]->getIdOfendidoCarpeta()) {
                                                    $idOfendidoSolicitud = $ofendidosSolicitud[$x]["idOfendidoSolicitud"];
                                                    break;
                                                }
                                            }

                                            for ($x = 0; $x < count($delitosSolicitud); $x ++) {//Buscamos el imputado en el arreglo
                                                $logger->w_onError("x= " . $x . "   idDelitoCarpeta: " . $delitosSolicitud[$x]["idDelitoCarpeta"] . "=== idDelitoCarepatRelacion" . $impofedelcarpetasDto[$index]->getIdDelitoCarpeta());
                                                if ($delitosSolicitud[$x]["idDelitoCarpeta"] == $impofedelcarpetasDto[$index]->getIdDelitoCarpeta()) {
                                                    $idDelitoSolicitu = $delitosSolicitud[$x]["idDelitoSolicitud"];

                                                    break;
                                                }
                                            }

//                                        var_dump($delitosSolicitud);
                                            $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                                            $impofedelsolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                            $impofedelsolicitudesDto->setidImputadoSolicitud($idImputadoSolicitud);
                                            $impofedelsolicitudesDto->setidOfendidoSolicitud($idOfendidoSolicitud);
                                            $impofedelsolicitudesDto->setidDelitoSolicitud($idDelitoSolicitu);
                                            $impofedelsolicitudesDto->setcveModalidad($impofedelcarpetasDto[$index]->getCveModalidad());
                                            $impofedelsolicitudesDto->setcveComision($impofedelcarpetasDto[$index]->getCveComision());
                                            $impofedelsolicitudesDto->setcveConcurso($impofedelcarpetasDto[$index]->getCveConcurso());
                                            $impofedelsolicitudesDto->setcveClasificacionDelitoOrden($impofedelcarpetasDto[$index]->getCveClasificacionDelitoOrden());
                                            $impofedelsolicitudesDto->setcveElementoComision($impofedelcarpetasDto[$index]->getCveElementoComision());
                                            $impofedelsolicitudesDto->setcveClasificacionDelito($impofedelcarpetasDto[$index]->getCveClasificacionDelito());
                                            $impofedelsolicitudesDto->setcveFormaAccion($impofedelcarpetasDto[$index]->getCveFormaAccion());
                                            $impofedelsolicitudesDto->setcveConsumacion($impofedelcarpetasDto[$index]->getCveConsumacion());
                                            $impofedelsolicitudesDto->setcveMunicipio($impofedelcarpetasDto[$index]->getCveMunicipio());
                                            $impofedelsolicitudesDto->setcveEntidad($impofedelcarpetasDto[$index]->getCveEntidad());
                                            $impofedelsolicitudesDto->setcveGradoParticipacion($impofedelcarpetasDto[$index]->getCveGradoParticipacion());
                                            $impofedelsolicitudesDto->setcveRelacionImpOfe($impofedelcarpetasDto[$index]->getCveRelacionImpOfe());
                                            $impofedelsolicitudesDto->setCveTerminacion($impofedelcarpetasDto[$index]->getCveTerminacion());
                                            $impofedelsolicitudesDto->setactivo("S");
                                            $impofedelsolicitudesDto->setfechaDelito($impofedelcarpetasDto[$index]->getFechaDelito());
                                            $impofedelsolicitudesDto->setdireccion($impofedelcarpetasDto[$index]->getDireccion());
                                            $impofedelsolicitudesDto->setcolonia($impofedelcarpetasDto[$index]->getColonia());
                                            $impofedelsolicitudesDto->setnumInterior($impofedelcarpetasDto[$index]->getNumInterior());
                                            $impofedelsolicitudesDto->setnumExterior($impofedelcarpetasDto[$index]->getNumExterior());
                                            $impofedelsolicitudesDto->setcp($impofedelcarpetasDto[$index]->getCp());


                                            $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                                            $logger->w_onError("");
                                            $logger->w_onError("Relacion: " . json_encode($impofedelsolicitudesDto->toString()));
                                            $logger->w_onError("");
                                            $impofedelsolicitudesDto = $impofedelsolicitudesDao->insertImpofedelsolicitudes($impofedelsolicitudesDto, $this->proveedor);
//                                        echo $this->proveedor->error();
                                            if ($impofedelsolicitudesDto == "") {
                                                $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                                $logger->w_onError("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
                                                $error = true;
                                            } else {
                                                $impOfeDelRelSolicitud[] = array("idImpOfeDelCarpeta" => $impofedelcarpetasDto[$index]->getIdImpOfeDelCarpeta(), "idImpOfeDelSolicitud" => $impofedelsolicitudesDto[0]->getIdImpOfeDelSolicitud());
                                            }
                                        }
                                    } else {
                                        $msg[] = array("La referencia no cuenta con relacion de delitos, imputados y ofendidos");
                                        $logger->w_onError("La referencia no cuenta con relacion de delitos, imputados y ofendidos");
                                        $error = true;
                                    }


//                                    $impofedelcarpetasDto = new ImpofedelcarpetasDTO();
//                                                    $impofedelcarpetasDto->setIdImpOfeDelCarpeta($rsImpofedelcarpetas->getIdImpOfeDelCarpeta());
//                                                    $impofedelcarpetasDto->setActivo("S");
//
//                                                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
//                                                    $impofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($impofedelcarpetasDto, "", $this->proveedor);
//                                                    if ($impofedelcarpetasDto != "") {
//                                                        $index = 0;
//                                                        $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
//                                                        $impofedelsolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
//                                                        $impofedelsolicitudesDto->setidImputadoSolicitud($idImputadoSolicitud);
//                                                        $impofedelsolicitudesDto->setidOfendidoSolicitud($ofendidossolicitudesDto[0]->getIdOfendidoSolicitud());
//                                                        $impofedelsolicitudesDto->setidDelitoSolicitud($idDelitoSolicitud);
//                                                        $impofedelsolicitudesDto->setcveModalidad($impofedelcarpetasDto[$index]->getCveModalidad());
//                                                        $impofedelsolicitudesDto->setcveComision($impofedelcarpetasDto[$index]->getCveComision());
//                                                        $impofedelsolicitudesDto->setcveConcurso($impofedelcarpetasDto[$index]->getCveConcurso());
//                                                        $impofedelsolicitudesDto->setcveClasificacionDelitoOrden($impofedelcarpetasDto[$index]->getCveClasificacionDelitoOrden());
//                                                        $impofedelsolicitudesDto->setcveElementoComision($impofedelcarpetasDto[$index]->getCveElementoComision());
//                                                        $impofedelsolicitudesDto->setcveClasificacionDelito($impofedelcarpetasDto[$index]->getCveClasificacionDelito());
//                                                        $impofedelsolicitudesDto->setcveFormaAccion($impofedelcarpetasDto[$index]->getCveFormaAccion());
//                                                        $impofedelsolicitudesDto->setcveConsumacion($impofedelcarpetasDto[$index]->getCveConsumacion());
//                                                        $impofedelsolicitudesDto->setcveMunicipio($impofedelcarpetasDto[$index]->getCveMunicipio());
//                                                        $impofedelsolicitudesDto->setcveEntidad($impofedelcarpetasDto[$index]->getCveEntidad());
//                                                        $impofedelsolicitudesDto->setcveGradoParticipacion($impofedelcarpetasDto[$index]->getCveGradoParticipacion());
//                                                        $impofedelsolicitudesDto->setcveRelacionImpOfe($impofedelcarpetasDto[$index]->getCveRelacionImpOfe());
//                                                        $impofedelsolicitudesDto->setCveTerminacion($impofedelcarpetasDto[$index]->getCveTerminacion());
//                                                        $impofedelsolicitudesDto->setactivo("S");
//                                                        $impofedelsolicitudesDto->setfechaDelito($impofedelcarpetasDto[$index]->getFechaDelito());
//                                                        $impofedelsolicitudesDto->setdireccion($impofedelcarpetasDto[$index]->getDireccion());
//                                                        $impofedelsolicitudesDto->setcolonia($impofedelcarpetasDto[$index]->getColonia());
//                                                        $impofedelsolicitudesDto->setnumInterior($impofedelcarpetasDto[$index]->getNumInterior());
//                                                        $impofedelsolicitudesDto->setnumExterior($impofedelcarpetasDto[$index]->getNumExterior());
//                                                        $impofedelsolicitudesDto->setcp($impofedelcarpetasDto[$index]->getCp());
//
//                                                        $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
//                                                        $impofedelsolicitudesDto = $impofedelsolicitudesDao->insertImpofedelsolicitudes($impofedelsolicitudesDto, $this->proveedor);
//                                                        if ($impofedelsolicitudesDto == "") {
//                                                            $msg[] = array("Ocurrio un error al registar la relacion del imputado, delito y ofendido");
//                                                            $error = true;
//                                                        } else {
//                                                            $impOfeDelRelSolicitud[] = array("idImpOfeDelCarpeta" => $impofedelcarpetasDto[$index]->getIdImpOfeDelCarpeta(), "idImpOfeDelSolicitud" => $impofedelsolicitudesDto[0]->getIdImpOfeDelSolicitud());
//                                                        }
////                                                    }
//                                                    } else {
//                                                        $msg[] = array("La referencia no cuenta con relacion de delitos, imputados y ofendidos");
//                                                        $error = true;
//                                                    }

                                    /*
                                     * COPIAMOS LOS EFECTOS DEL DELITO y OFENDIDO
                                     */
                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                        $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                                        $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                        $efectosofendidoscarpetasDto->setActivo("S");
                                        $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                                        $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $this->proveedor);

                                        if ($efectosofendidoscarpetasDto != "") {
                                            for ($x = 0; $x < count($efectosofendidoscarpetasDto); $x ++) {
                                                $efectosofendidosDto = new EfectosofendidosDTO();
                                                $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$x]->getCveDetalleEfecto());
                                                $efectosofendidosDto->setidImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                $efectosofendidosDto->setactivo("S");

                                                $efectosofendidosDao = new EfectosofendidosDAO();
                                                $efectosofendidosDto = $efectosofendidosDao->insertEfectosofendidos($efectosofendidosDto, $this->proveedor);
                                                if ($efectosofendidosDto == "") {
                                                    $msg[] = array("Ocurrio un error al copiar los efectos de la victima a la solicitud");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    }
                                    /*
                                     * TERMINAMOS DE COPIAR LOS EFECTOS DEL DELITO ASIA EL OFENDIDO
                                     */

                                    /*
                                     * COMENZAMOS A COPIAR LOS DATOS DE TRATA DE PERSONAS
                                     */

                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                        $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                                        $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                        $trataspersonascarpetasDto->setActivo("S");

                                        $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                                        $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $this->proveedor);

                                        if ($trataspersonascarpetasDto != "") {
                                            for ($x = 0; $x < count($trataspersonascarpetasDto); $x ++) {
                                                $trataspersonasDto = new TrataspersonasDTO();
                                                $trataspersonasDto->setcveEstadoDestino($trataspersonascarpetasDto[$x]->getCveEstadoDestino());
                                                $trataspersonasDto->setcveMunicipioDestino($trataspersonascarpetasDto[$x]->getCveMunicipioDestino());
                                                $trataspersonasDto->setcvePaisDestino($trataspersonascarpetasDto[$x]->getCvePaisDestino());
                                                $trataspersonasDto->setestadoDestino($trataspersonascarpetasDto[$x]->getEstadoDestino());
                                                $trataspersonasDto->setmunicipioDestino($trataspersonascarpetasDto[$x]->getMunicipioDestino());
                                                $trataspersonasDto->setcveEstadoOrigen($trataspersonascarpetasDto[$x]->getCveEstadoOrigen());
                                                $trataspersonasDto->setcveMunicipioOrigen($trataspersonascarpetasDto[$x]->getCveMunicipioOrigen());
                                                $trataspersonasDto->setcvePaisOrigen($trataspersonascarpetasDto[$x]->getCvePaisOrigen());
                                                $trataspersonasDto->setestadoOrigen($trataspersonascarpetasDto[$x]->getEstadoOrigen());
                                                $trataspersonasDto->setmunicipioOrigen($trataspersonascarpetasDto[$x]->getMunicipioOrigen());
                                                $trataspersonasDto->setcveTipoTrata($trataspersonascarpetasDto[$x]->getCveTipoTrata());
                                                $trataspersonasDto->setcveTrasportacion($trataspersonascarpetasDto[$x]->getCveTrasportacion());
                                                $trataspersonasDto->setidImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                $trataspersonasDto->setActivo("S");

                                                $trataspersonasDao = new TrataspersonasDAO();
                                                $trataspersonasDto = $trataspersonasDao->insertTrataspersonas($trataspersonasDto, $this->proveedor);
                                                if ($trataspersonasDto == "") {
                                                    $msg[] = array("Ocurrio un error al copiar las tratas de personas a la solicitud");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    }
                                    /*
                                     * TERMINAMOS DE COPIAR LA INFORMACION DE TRATA DE PERSONAS
                                     */

                                    /*
                                     * COMENZAMOS A COPIAR LA VIOLENCIA DE GENERO
                                     */

                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                        $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                                        $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                        $violenciadegenerocarpetasDto->setActivo("S");

                                        $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                                        $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $this->proveedor);

                                        if ($violenciadegenerocarpetasDto != "") {
                                            for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x ++) {
                                                $violenciadegeneroDto = new ViolenciadegeneroDTO();
                                                $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                                                $violenciadegeneroDto->setIdImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                $violenciadegeneroDto->setActivo("S");

                                                $violenciadegeneroDao = new ViolenciadegeneroDAO();
                                                $violenciadegeneroDto = $violenciadegeneroDao->selectViolenciadegenero($violenciadegeneroDto, "", $this->proveedor);

                                                if ($violenciadegeneroDto != "") {
                                                    $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                                    $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                                                    $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                                    $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $this->proveedor);

                                                    if ($violenciahomicidiosdolososcarpetasDto != "") {
                                                        for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y ++) {
                                                            $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
                                                            $violenciahomicidiosdolososDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                                            $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso());
                                                            $violenciahomicidiosdolososDto->setActivo("S");

                                                            $violenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
                                                            $violenciahomicidiosdolososDto = $violenciahomicidiosdolososDao->insertViolenciahomicidiosdolosos($violenciahomicidiosdolososDto, $this->proveedor);
                                                            if ($violenciahomicidiosdolososDto == "") {
                                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud1");
                                                                $error = true;
                                                            }
                                                        }
                                                    }

                                                    $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                                    $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                                    $violenciafactoressocialescarpetasDto->setActivo("S");

                                                    $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                                    $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                                                    if ($violenciafactoressocialescarpetasDto != "") {
                                                        for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y ++) {
                                                            $violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
                                                            $violenciafactoressocialesDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                                            $violenciafactoressocialesDto->setActivo("S");
                                                            $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());
                                                            $violenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
                                                            $violenciafactoressocialesDto = $violenciafactoressocialesDao->insertViolenciafactoressociales($violenciafactoressocialesDto, $this->proveedor);
                                                            if ($violenciafactoressocialesDto != "") {
                                                                $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud2");
                                                                $error = true;
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("Ocurrio un error al copiar los registros de violencia de genero a la solicitud3");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    }
                                    /*
                                     * TERMINAMOS DE COPIAR LA VIOLENCIA DE GENERO
                                     */

                                    /*
                                     * HOSTIGAMIENTO Y ACOSO SEXUAL
                                     */
                                    for ($index = 0; $index < count($impOfeDelRelSolicitud); $index ++) {
                                        $sexualescarpetasDto = new SexualescarpetasDTO();
                                        $sexualescarpetasDto->setIdImpOfeDelCarpeta($impOfeDelRelSolicitud[$index]["idImpOfeDelCarpeta"]);
                                        $sexualescarpetasDto->setActivo("S");

                                        $sexualescarpetasDao = new SexualescarpetasDAO();
                                        $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $this->proveedor);

                                        if ($sexualescarpetasDto != "") {
                                            for ($x = 0; $x < count($sexualescarpetasDto); $x ++) {
                                                $sexualesDto = new SexualesDTO();
                                                $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                                                $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                                                $sexualesDto->setIdImpOfeDelSolicitud($impOfeDelRelSolicitud[$index]["idImpOfeDelSolicitud"]);
                                                $sexualesDto->setActivo("S");
                                                $sexualesDao = new SexualesDAO();
                                                $sexualesDto = $sexualesDao->insertSexuales($sexualesDto, $this->proveedor);
                                                if ($sexualesDto == "") {
                                                    //Sexuales conductas
                                                    $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                                    $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                                    $sexualesconductascarpetasDto->setActivo("S");
                                                    $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                                    $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $this->proveedor);

                                                    if ($sexualesconductascarpetasDto != "") {
                                                        for ($y = 0; $y < count($sexualesconductascarpetasDto); $y ++) {
                                                            $sexualesconductasDto = new SexualesconductasDTO();
                                                            $sexualesconductasDto->setIdSexual($sexualesDto[0]->getIdSexual());
                                                            $sexualesconductasDto->setActivo("S");
                                                            $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());
                                                            $sexualesconductasDao = new SexualesconductasDAO();
                                                            $sexualesconductasDto = $sexualesconductasDao->insertSexualesconductas($sexualesconductasDto, $this->proveedor);
                                                            if ($sexualesconductasDto == "") {
                                                                $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                                $error = true;
                                                            }
                                                        }
                                                    }

//                                                //Los efectos sexuales
//                                                $efectossexualescarpetasDto = new EfectossexualescarpetasDTO();
//                                                $efectossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
//                                                $efectossexualescarpetasDto->setActivo("S");
//
//                                                $efectossexualescarpetasDao = new EfectossexualescarpetasDAO();
//                                                $efectossexualescarpetasDto = $efectossexualescarpetasDao->selectEfectossexualescarpetas($efectossexualescarpetasDto, "", $this->proveedor);
//
//                                                if ($efectossexualescarpetasDto != "") {
//                                                    for ($y = 0; $y < count($efectossexualescarpetasDto); $y++) {
//                                                        $efectossexualesDto = new EfectossexualesDTO();
//                                                        $efectossexualesDto->setCveDetalleEfecto($efectossexualescarpetasDto[$y]->getCveDetalleEfecto());
//                                                        $efectossexualesDto->setIdSexual($sexualesDto[0]->getIdSexual());
//                                                        $efectossexualesDto->setActivo("S");
//                                                        $efectossexualesDao = new EfectossexualesDAO();
//                                                        $efectossexualesDto = $efectossexualesDao->insertEfectossexuales($efectossexualesDto, $this->proveedor);
//
//                                                        if ($efectossexualesDto == "") {
//                                                            $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
//                                                            $error = true;
//                                                        }
//                                                    }
//                                                }
                                                    //Los testigos sexuales
                                                    $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                                    $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                                    $testigossexualescarpetasDto->setActivo("S");
                                                    $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                                    $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $this->proveedor);

                                                    if ($testigossexualescarpetasDto != "") {
                                                        for ($y = 0; $y < count($testigossexualescarpetasDto); $y ++) {
                                                            $testigossexualesDto = new TestigossexualesDTO();
                                                            $testigossexualesDto->setidSexual($sexualesDto[0]->getIdSexual());
                                                            $testigossexualesDto->setpaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                                            $testigossexualesDto->setmaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                                            $testigossexualesDto->setnombre($testigossexualescarpetasDto[$y]->getNombre());
                                                            $testigossexualesDto->setcveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                                            $testigossexualesDto->setactivo("S");

                                                            $testigossexualesDao = new TestigossexualesDAO();
                                                            $testigossexualesDto = $testigossexualesDao->insertTestigossexuales($testigossexualesDto, $this->proveedor);

                                                            if ($testigossexualesDto == "") {
                                                                $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                                $error = true;
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    $msg[] = array("Ocurrio un error al copiar el acoso y hostigamiento sexual");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    }
                                    /*
                                     * TERMINAMOS HOSTIGAMIENTO Y ACOSO SEXUAL
                                     */

                                    /*
                                     * TERMINAMOS DE COPIAR LA RELACION DE DELITOS, OFENDIDOS y DELITOS DE CARPETAS JUDICIALES A SOLICITUDES DE AUDIENCIA
                                     */
                                    if (!$error) {
                                        $tmpDto2 = new SolicitudesaudienciasDTO();
                                        $tmpDto2->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                        $tmpDto = new SolicitudesaudienciasDTO();
                                        $tmpDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                                        if (($solicitudTmp->getIdReferencia() === $SolicitudesaudienciasDto[0]->getIdReferencia()) || ($SolicitudesaudienciasDto[0]->getIdReferencia() === 0) || ($SolicitudesaudienciasDto[0]->getIdReferencia() === null)) {
                                            $logger->w_onError("El iDReferencia es igual: " . $solicitudTmp->getIdReferencia());
                                            $tmpDto->setNumDelitos((count($delitosSolicitud)));
                                            $tmpDto->setNumImputados((count($impuatdosSolicitud)));
                                            $tmpDto->setNumOfendidos((count($ofendidosSolicitud)));
                                        } else {
                                            $logger->w_onError("El iDReferencia no es igual: " . $solicitudTmp->getIdReferencia());
//                                            $tmpDto->setNumDelitos($SolicitudesaudienciasDto[0]->getNumDelitos());
//                                            $tmpDto->setNumImputados($SolicitudesaudienciasDto[0]->getNumImputados());
//                                            $tmpDto->setNumOfendidos($SolicitudesaudienciasDto[0]->getNumOfendidos());
                                            $tmpDto->setNumDelitos((count($delitosSolicitud)));
                                            $tmpDto->setNumImputados((count($impuatdosSolicitud)));
                                            $tmpDto->setNumOfendidos((count($ofendidosSolicitud)));
                                        }
                                        $logger->w_onError("Se actualiza el numero de imputados y ofendidos y delitos");
                                        $logger->w_onError("Imputados: " . $tmpDto->getNumImputados());
                                        $logger->w_onError("Ofendidos" . $tmpDto->getNumOfendidos());
                                        $logger->w_onError("Delitos" . $tmpDto->getNumDelitos());


                                        $logger->w_onError("Datos" . json_encode($tmpDto->toString()));

                                        $tmpDao = new SolicitudesaudienciasDAO();
                                        $tmpDto = $tmpDao->updateSolicitudesaudiencias($tmpDto, $this->proveedor);

                                        if ($tmpDto == "") {
                                            $msg[] = array("Ocurrio un error al actualizar los datos de la solicitud de audiencia");
                                            $error = true;
                                        } else {
                                            json_encode($tmpDto[0]->toString());
                                        }
                                    }
                                } else if ($SolicitudesaudienciasDto[0]->getIdReferencia() > 0) {
                                    $msg[] = array("No se logro registrar la solicitud debido a que no se encontro la referencia");
                                    $error = true;
                                }


                                /*
                                 * TERMINAMOS DE REALIZAR LA COPIA DE LA INFORMACION DE LA CARPETA JUDICIAL A LA SOLICITUD
                                 */
                            }
//                        }
                        } else {
                            $msg[] = array("No se logro registrar la solicitud debido a algun error en la transaccion ");
                            $error = true;
                        }
                    } else {
                        $msg[] = array("No se puede modificar la solictud, ya que se encuentra enviada.");
                        $error = true;
                    }
                    if ((!$error)) {
                        $this->proveedor->execute("COMMIT");
                        $listaResultados = array();
                        $resultado = array(
                            "idSolicitudAudiencia" => $SolicitudesaudienciasDto[0]->getidSolicitudAudiencia(),
                            "cveCatAudiencia" => $SolicitudesaudienciasDto[0]->getcveCatAudiencia(),
                            "cveJuzgadoDesahoga" => $SolicitudesaudienciasDto[0]->getcveJuzgadoDesahoga(),
                            "cveJuzgado" => $SolicitudesaudienciasDto[0]->getcveJuzgado(),
                            "cveConsignacion" => $SolicitudesaudienciasDto[0]->getcveConsignacion(),
                            "cveEtapaProcesal" => $SolicitudesaudienciasDto[0]->getcveEtapaProcesal(),
                            "idReferencia" => $SolicitudesaudienciasDto[0]->getidReferencia(),
                            "fechaRegistro" => $SolicitudesaudienciasDto[0]->getfechaRegistro(),
                            "fechaActualizacion" => $SolicitudesaudienciasDto[0]->getfechaActualizacion(),
                            "fechaEnvio" => $SolicitudesaudienciasDto[0]->getfechaEnvio(),
                            "cveTipoCarpeta" => $SolicitudesaudienciasDto[0]->getcveTipoCarpeta(),
                            "numero" => $SolicitudesaudienciasDto[0]->getnumero(),
                            "anio" => $SolicitudesaudienciasDto[0]->getanio(),
                            "activo" => $SolicitudesaudienciasDto[0]->getactivo(),
                            "carpetaInv" => $SolicitudesaudienciasDto[0]->getcarpetaInv(),
                            "nuc" => $SolicitudesaudienciasDto[0]->getnuc(),
                            "cveUsuario" => $SolicitudesaudienciasDto[0]->getcveUsuario(),
                            "cveAdscripcionSolicita" => $SolicitudesaudienciasDto[0]->getcveAdscripcionSolicita(),
                            "mismoJuzgador" => $SolicitudesaudienciasDto[0]->getmismoJuzgador(),
                            "cveEstatusSolicitud" => $SolicitudesaudienciasDto[0]->getcveEstatusSolicitud(),
                            "observaciones" => utf8_encode($SolicitudesaudienciasDto[0]->getobservaciones()),
                            "numImputados" => $SolicitudesaudienciasDto[0]->getnumImputados(),
                            "numDelitos" => $SolicitudesaudienciasDto[0]->getnumDelitos(),
                            "numOfendidos" => $SolicitudesaudienciasDto[0]->getnumOfendidos(),
                            "cveNaturaleza" => $SolicitudesaudienciasDto[0]->getcveNaturaleza(),
                            "cveTipoAudiencia" => $SolicitudesaudienciasDto[0]->getcveTipoAudiencia()
                        );
                        array_push($listaResultados, $resultado);
                        $result = array("status" => "Ok", "msj" => "La solicitud se actualizo de forma correcta", "resultado" => $listaResultados);
                        $result = json_encode($result);
                    } else {
                        $this->proveedor->execute("ROLLBACK");
                        $result = array("status" => "error", "Error" => $msg);
                        $result = json_encode($result);
                    }
                } else {
                    $this->proveedor->execute("ROLLBACK");
                    $result = array("status" => "error", "Error" => $msg);
                    $result = json_encode($result);
                }
                $this->proveedor->stmt = $this->proveedor->free_result($this->proveedor->stmt);
                $this->proveedor->close();
            }
        } else { // Aqui termina la validacion de los campos requeridos
            $logger->w_onError("EL PROCESO NO PUEDE CONTINUAR PORQUE LAS VALIDACIONES BASICAS DE CAMPOS REQUERIDOS NO FUERON EXITOSAS");
            $result = array("Error" => $msg);
            $result = json_encode($result);
        }

        $logger->w_onError("RESPUESTA DEL PROCESO ");
        $logger->w_onError($result);

        return $result;
    }

    public function actualizadmin($SolicitudesaudienciasDto, $proveedor = null) {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();

        $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($SolicitudesaudienciasDto);
        if ($SolicitudesaudienciasDto != "") {
            $result = array("status" => "Ok", "msj" => "Se actualizo de forma correcta");
            $result = ($result);

            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("311");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("actualizo informacion. Imputados: " . $SolicitudesaudienciasDto[0]->getNumImputados() . "  ofendidos: " . $SolicitudesaudienciasDto[0]->getNumOfendidos() . "  delitos: " . $SolicitudesaudienciasDto[0]->getNumDelitos());
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        } else {
            $result = array("status" => "Error", "msj" => "Error al actualizar.");
            $result = ($result);
        }

        return json_encode($result);
    }

    public function enviarSolicitud($SolicitudesaudienciasDto, $imputadosReclusos = null, $proveedor = null) {
        /*
         * Declaramos las variables necesaria para el programa
         */

        $error = false;
        $year = "";
        $mes = "";
        $dia = "";
        $horas = "";
        $minutos = "";
        $segundos = "";

        $diasFestivos = array();
        $horasMinXSumar = 0;
        $horasMaxXSumar = 0;

        $horaMaxParaSumar = 0;

        $fechaPosibleAudiencia = "";

        $especial = "N";
        $radicada = "N";

        $delitosConEspecilidad = array();

        $rolJuzgador = 0;

        $juzgadoresGeneral = array();
        $juzgadoresAux = array();
        $juzgadoresFinal = array();

        $fechaMovimiento = "";

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }


        $logger = new Logger("/../../logs/", "EnvioSolicitudDeAudiencias");
        $logger->w_onError("**********COMIENZA EL PROGRAMA PARA EL ENVIO DE LA SOLICITUD DE AUDIENCIA**********");

        $this->proveedor->execute("BEGIN");

        $this->proveedor->execute("Select date_format(now(),'%Y') as Year, date_format(now(),'%m') as mes,date_format(now(),'%d') as dias,date_format(now(),'%H') as horas,date_format(now(),'%i') as minutos,date_format(now(),'%s') as segundos,now() as FechaMovimiento");

        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0);
                $fechaMovimiento = $year = $row["FechaMovimiento"];
                $year = $row["Year"];
                $yearActual = $row["Year"];
                $mes = $row["mes"];
                $mesActual = $row["mes"];
                $dia = $row["dias"];
                $horas = $row["horas"];
                $minutos = $row["minutos"];
                $segundos = $row["segundos"];
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }

        $bitacoraAsignaciones = array();
        $movimiento = "**********COMIENZA EL PROGRAMA PARA EL ENVIO DE LA SOLICITUD DE AUDIENCIA**********<br>";
        $movimiento .= "**********A�o Actual: " . $yearActual . "<br>";
        $movimiento .= "**********Mes Actual: " . $mesActual . "<br>";
        $movimiento .= "**********A�o: " . $year . "<br>";
        $movimiento .= "**********Mes: " . $mes . "<br>";
        $movimiento .= "**********dia: " . $dia . "<br>";
        $movimiento .= "**********horas: " . $horas . "<br>";
        $movimiento .= "**********minutos: " . $minutos . "<br>";
        $movimiento .= "**********segundos: " . $segundos . "<br>";

        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $solicitudAux = new SolicitudesaudienciasDTO();
        $solicitudAux->setMismoJuzgador($SolicitudesaudienciasDto->getMismoJuzgador());
        $solicitudAux->setTribunal($SolicitudesaudienciasDto->getTribunal());
        $solicitudAux->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());

        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();

        $solicitudAux = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($solicitudAux, $this->proveedor);

        if ($solicitudAux != "") {
            $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->selectSolicitudesaudiencias($SolicitudesaudienciasDto, "", "", $this->proveedor);

            if ($SolicitudesaudienciasDto != "") {
                $SolicitudesaudienciasDto = $SolicitudesaudienciasDto[0];
                if (($SolicitudesaudienciasDto->getCveEstatusSolicitud() == 1)) {//|| ($SolicitudesaudienciasDto->getCveEstatusSolicitud() == 2)
                    if (($SolicitudesaudienciasDto->getIdReferencia() <= 0) || ($SolicitudesaudienciasDto->getIdReferencia() == "")) {
                        $carpetasJudicialesDto = "";
                        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                        if (((int) $SolicitudesaudienciasDto->getCveTipoCarpeta() <= 0) || ((string) $SolicitudesaudienciasDto->getCveTipoCarpeta() == "")) {
                            /*
                             * Esta condicion solo aplica para solicitudes de ministerio publico
                             */
                            if ($SolicitudesaudienciasDto->getCarpetaInv() != "") { //BUSCAMOS LA INFORMACION CON LA CARPETA DE INVESTIGACION Y TIPO DE CARPETA DE CONTROL
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                                $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA CONTROL
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else {
                                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                    $carpetasJudicialesDto->setCarpetaInv($SolicitudesaudienciasDto->getCarpetaInv());
                                    $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                    if ($carpetasJudicialesDto != "") {
                                        $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                    } else {//SIN O SE ENCUENTRAN COINCIDENCIAS CON LA CARPETA DE INVESGACION SE BUSCA POR EL NUC
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                        $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                        if ($carpetasJudicialesDto != "") {
                                            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                        } else {
                                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                            $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                            $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                            if ($carpetasJudicialesDto != "") {
                                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                            }
                                        }
                                    }
                                }
                            } else if ($SolicitudesaudienciasDto->getNuc() != "") {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                $carpetasJudicialesDto->setCveTipoCarpeta(2); // CARPETA DE CONTROL
                                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                if ($carpetasJudicialesDto != "") {
                                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                } else {
                                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                    $carpetasJudicialesDto->setNuc($SolicitudesaudienciasDto->getNuc());
                                    $carpetasJudicialesDto->setCveTipoCarpeta(1); // NUMERO AUXILIAR
                                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                                    if ($carpetasJudicialesDto != "") {
                                        $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                                    }
                                }
                            }
                        } else {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
                            $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
                            $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                            $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                            if ($carpetasJudicialesDto != "") {
                                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                            } else {
                                //Falta incluir las solicitudes que provienen de un exhorto platicarlo con moy
                                $msg[] = array("El numero de " . $tiposCarpetasDto->getDesTipoCarpeta() . " : " . $SolicitudesaudienciasDto->getNumero() . "/" . $SolicitudesaudienciasDto->getAnio() . "  no existe verifique");
                                $error = true;
                            }
                        }

                        if ($carpetasJudicialesDto != "") {
                            $SolicitudesaudienciasDto->setIdReferencia($carpetasJudicialesDto->getIdCarpetaJudicial());
                        }
                    }

                    /*
                     * Validamos que la solicitud contenga la informacion necesaria para dar por 
                     * completa la solicitud de audiencias
                     */
                    $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                    $imputadossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                    $imputadossolicitudesDto->setActivo("S");
                    $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                    $imputadossolicitudesDto = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);

                    if (($imputadossolicitudesDto == "")) {
                        $error = true;
                        $logger->w_onError("LA SOLICITUD NO CUENTA CON ALMENOS UN INPUTADO");
                        $movimiento .= "LA SOLICITUD NO CUENTA CON ALMENOS UN INPUTADO<br>";
                    }

                    $ofendidossolicitudesDto = new OfendidossolicitudesDTO();
                    $ofendidossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                    $ofendidossolicitudesDto->setActivo("S");

                    $ofendidossolicitudesDao = new OfendidossolicitudesDAO();
                    $ofendidossolicitudesDto = $ofendidossolicitudesDao->selectOfendidossolicitudes($ofendidossolicitudesDto, "", $this->proveedor);

                    if (($ofendidossolicitudesDto == "")) {
                        $error = true;
                        $logger->w_onError("LA SOLICITUD NO CUENTA CON ALMENOS UN OFENDIDO");
                        $bitacoraAsignaciones[] = new BitacoraasignacionesDTO();
                        $movimiento .= "LA SOLICITUD NO CUENTA CON ALMENOS UN OFENDIDO<br>";
                    }

                    $delitossolicitudesDto = new DelitossolicitudesDTO();
                    $delitossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                    $delitossolicitudesDto->setActivo("S");
                    $delitossolicitudesDao = new DelitossolicitudesDAO();
                    $delitossolicitudesDto = $delitossolicitudesDao->selectDelitossolicitudes($delitossolicitudesDto, "", $this->proveedor);

                    if (($delitossolicitudesDto == "")) {
                        $error = true;
                        $logger->w_onError("LA SOLICITUD NO CUENTA CON ALMENOS UN DELITO");
                        $movimiento .= "LA SOLICITUD NO CUENTA CON ALMENOS UN DELITO<br>";
                    } else { // Buscamos si alguno de los delitos requieren alguna especialidad
                        $delitosDao = new DelitosDAO();
                        $encontro = false;
                        for ($index = 0; $index < count($delitossolicitudesDto); $index ++) {
                            $delitosDto = new DelitosDTO();
                            $encontro = false;
                            $delitosDto->setCveDelito($delitossolicitudesDto[$index]->getCveDelito());
                            $delitosDto = $delitosDao->selectDelitos($delitosDto, " And cveEspecialidad <> 1 ", $this->proveedor);

                            if ($delitosDto != "") {
                                for ($x = 0; $x < count($delitosConEspecilidad); $x ++) {
                                    if ($delitosConEspecilidad[$x]->getCveEspecialidad() == $delitosDto[0]->getCveEspecialidad()) {
                                        $encontro = true;
                                        break;
                                    }
                                }

                                if (!$encontro) {
                                    $delitosConEspecilidad[] = $delitosDto[0];
                                }
                            }
                        }
                    }


                    $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                    $impofedelsolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                    $impofedelsolicitudesDto->setActivo("S");
                    $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectImpofedelsolicitudes($impofedelsolicitudesDto, "", $this->proveedor);
                    $logger->w_onError(json_encode($impofedelsolicitudesDto));
                    if (($impofedelsolicitudesDto == "")) {
                        $error = true;
                        $logger->w_onError("LA SOLICITUD NO CUENTA CON LA RELACION DE IMPUTADOS, OFENDIDOS Y DELITOS");
                        $movimiento .= "LA SOLICITUD NO CUENTA CON LA RELACION DE IMPUTADOS, OFENDIDOS Y DELITOS<br>";
                    }


                    if (!$error) {
                        $imputadosSinRelacion = array();
                        $ofendidosSinRelacion = array();
                        $delitosSinRelacion = array();

                        for ($y = 0; $y < count($imputadossolicitudesDto); $y ++) {
                            $encontrado = false;
                            for ($x = 0; $x < count($impofedelsolicitudesDto); $x ++) {
                                if ($impofedelsolicitudesDto[$x]->getIdImputadoSolicitud() == $imputadossolicitudesDto[$y]->getIdImputadoSolicitud()) {
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                $imputadosSinRelacion[] = array("idImputadoSolicitud" => $imputadossolicitudesDto[$y]->getIdImputadoSolicitud(),
                                    "nombre" => $imputadossolicitudesDto[$y]->getNombre(),
                                    "paterno" => $imputadossolicitudesDto[$y]->getPaterno(),
                                    "materno" => $imputadossolicitudesDto[$y]->getMaterno(),
                                    "tipoPersona" => $imputadossolicitudesDto[$y]->getCveTipoPersona(),
                                    "personaMoral" => $imputadossolicitudesDto[$y]->getNombreMoral());
                            }
                        }

                        for ($y = 0; $y < count($ofendidossolicitudesDto); $y ++) {
                            $encontrado = false;
                            $logger->w_onError(json_encode($impofedelsolicitudesDto));
                            for ($x = 0; $x < count($impofedelsolicitudesDto); $x ++) {

                                if ($impofedelsolicitudesDto[$x]->getIdOfendidoSolicitud() == $ofendidossolicitudesDto[$y]->getIdOfendidoSolicitud()) {
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                $ofendidosSinRelacion[] = array("idOfendidoSolicitud" => $ofendidossolicitudesDto[$y]->getIdOfendidoSolicitud(),
                                    "nombre" => $ofendidossolicitudesDto[$y]->getNombre(),
                                    "paterno" => $ofendidossolicitudesDto[$y]->getPaterno(),
                                    "materno" => $ofendidossolicitudesDto[$y]->getMaterno(),
                                    "tipoPersona" => $ofendidossolicitudesDto[$y]->getCveTipoPersona(),
                                    "personaMoral" => $ofendidossolicitudesDto[$y]->getNombreMoral());
                            }
                        }

                        for ($y = 0; $y < count($delitossolicitudesDto); $y ++) {
                            $encontrado = false;
                            for ($x = 0; $x < count($impofedelsolicitudesDto); $x ++) {
                                if ($impofedelsolicitudesDto[$x]->getIdDelitoSolicitud() == $delitossolicitudesDto[$y]->getIdDelitoSolicitud()) {
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                $delitosSinRelacion[] = array("idDelitaSolicitud" => $delitossolicitudesDto[$y]->getIdDelitoSolicitud());
                            }
                        }

                        if ((count($ofendidosSinRelacion) > 0) || (count($delitosSinRelacion) > 0) || (count($imputadosSinRelacion) > 0)) {
                            $error = true;
                            $logger->w_onError("EXISTEN IMPUTADOS, OFENDIDOS Y/O DELITOS DE LA SOLICITUD QUE NO SE ENCUENTRAN RELACIONADOS EN LA SOLICITUD VERIFIQUE");
                            $logger->w_onError(json_encode($ofendidosSinRelacion));
                            $logger->w_onError(json_encode($delitosSinRelacion));
                            $logger->w_onError(json_encode($imputadosSinRelacion));

                            $movimiento .= "EXISTEN IMPUTADOS, OFENDIDOS Y/O DELITOS DE LA SOLICITUD QUE NO SE ENCUENTRAN RELACIONADOS EN LA SOLICITUD VERIFIQUE<br>";
                        }
                    }
//                echo $movimiento;
//                echo "Revizando : ".$error;
                    if (!$error) {

                        $logger->w_onError("BUSCAMOS LA CLAVE DE LA AUDIENCIA EN EL CATALOGO DE AUDIENCIAS");
                        $movimiento .= "BUSCAMOS LA CLAVE DE LA AUDIENCIA EN EL CATALOGO DE AUDIENCIAS<br>";
                        $cataudienciasDto = new CataudienciasDTO();
                        $cataudienciasDto->setCveCatAudiencia($SolicitudesaudienciasDto->getCveCatAudiencia());
                        $cataudienciasDao = new CataudienciasDAO();
                        $cataudienciasDto = $cataudienciasDao->selectCataudiencias($cataudienciasDto, "", $this->proveedor);

                        if ($cataudienciasDto != "") {
                            $cataudienciasDto = $cataudienciasDto[0];
                            $logger->w_onError("LA CLAVE DE LA AUDIENCIA SI EXISTE EN EL CATALOGO");
                            $movimiento .= "LA CLAVE DE LA AUDIENCIA SI EXISTE EN EL CATALOGO<br>";
                            $logger->w_onError("Audiencia: " . $cataudienciasDto->getDesCatAudiencia());
                            $movimiento .= "Audiencia: <b>" . $cataudienciasDto->getDesCatAudiencia() . "</b><br>";
                            $logger->w_onError("EtapaProcesal: " . $cataudienciasDto->getCveEtapaProcesal());
                            $movimiento .= "EtapaProcesal: " . $cataudienciasDto->getCveEtapaProcesal() . "<br>";

                            $carpetaJudicialService = new CarpetasjudicialesService();
                            $generaCarpeta = $carpetaJudicialService->generarCarpetaDesdeSolicitud($SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $this->proveedor, $imputadosReclusos);
//                        var_dump($generaCarpeta);
                            if ($generaCarpeta['estatus'] == 'error') {//Aqui por algun motivo no se logro crear la carpeta judicial
                                $error = true;
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
//                            $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                            } else if ($generaCarpeta['estatus'] == 'igual') { //Aqui no existe cambio alguno
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
                                $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                            } else if ($generaCarpeta['estatus'] == 'genero carpeta') { //Aqui se genera carpeta judicial 
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
                                $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                                $radicada = "S";
                            } else if ($generaCarpeta['estatus'] == 'cambio etapa') { //Aqui solo se cambia la etapa procesal ya que la audiencia no requiere que se genere carpeta
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
                                $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                            } else if ($generaCarpeta['estatus'] == 'ejecucion') { //Aqui ya se habia generado una carpeta de tipo expediente , y no se creo una carpeta nueva
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
                                $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                            } else if ($generaCarpeta['estatus'] == 'procedimientos especiales') {
                                $logger->w_onError($generaCarpeta['mensaje']);
                                $movimiento .= $generaCarpeta['mensaje'] . "<br>";
                                $SolicitudesaudienciasDto = $generaCarpeta["data"][0];
                            }

                            $calendarioDto = new CalendarioDTO();
                            $calendarioDao = new CalendarioDAO();
                            $calendarioDto = $calendarioDao->selectCalendario($calendarioDto, " Where fecha>='" . $year . "-" . $mes . "-" . $dia . "'", $this->proveedor);
                            $logger->w_onError("Un total de dias festivos: " . sizeof($calendarioDto));
                            for ($dias = 0; $dias < sizeof($calendarioDto); $dias ++) {
                                $diasFestivos[] = array("fecha" => $calendarioDto[$dias]->getFecha(), "Tipo" => $calendarioDto[$dias]->getTipo());
                                $logger->w_onError("Dia festivo: " . $calendarioDto[$dias]->getFecha());
                            }
                            $logger->w_onError("Buscamos los dias festivos");
                            if (!$error) {
                                $logger->w_onError("OBTENEMOS LOS DIAS FESTIVOS: " . json_encode($diasFestivos));
                                $movimiento.="OBTENEMOS LOS DIAS FESTIVOS: " . json_encode($diasFestivos);
                                $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                                $logger->w_onError("OBTENEMOS EL DITRITO DEL JUZGADO PARA BUSCAR LA CONFIGURACION DE AUDIENCIA ");
                                $movimiento .= "-->OBTENEMOS EL DITRITO DEL JUZGADO PARA BUSCAR LA CONFIGURACION DE AUDIENCIA<br>";
                                $juzgadoDto = new JuzgadosDTO();
                                $juzgadoDto->setCveJuzgado($cveJuzgado);

                                $juzgadoDao = new JuzgadosDAO();
                                $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto, "", $this->proveedor);

                                if ($juzgadoDto != "") {
                                    $logger->w_onError("BUSCAMOS LA CONFIGURACION DE LA AUDIENCIA ");
                                    $movimiento .= "-->BUSCAMOS LA CONFIGURACION DE LA AUDIENCIA<br>";
                                    $audienciasDistritosDto = new AudienciasdistritosDTO();
                                    $audienciasDistritosDto->setCveDistrito($juzgadoDto[0]->getCveDistrito());
                                    $audienciasDistritosDto->setCveCatAudiencia($cataudienciasDto->getCveCatAudiencia());
                                    $audienciasDistritosDto->setActivo('S');
                                    $logger->w_onError("DISTRITO BUSCADO:  " . $juzgadoDto[0]->getCveDistrito());
                                    $movimiento .= "-->DISTRITO BUSCADO:  " . $juzgadoDto[0]->getCveDistrito();
                                    $logger->w_onError("AUDIENCIA:  " . $cataudienciasDto->getCveCatAudiencia());
                                    $movimiento .= "-->AUDIENCIA BUSCADO:  " . $cataudienciasDto->getCveCatAudiencia();
                                    $audienciasDistritosDao = new AudienciasdistritosDAO();
                                    $audienciasDistritosDto = $audienciasDistritosDao->selectAudienciasdistritos($audienciasDistritosDto, "", $this->proveedor);


                                    if ($audienciasDistritosDto != "") {
                                        $audienciasDistritosDto = $audienciasDistritosDto[0];
                                        $fechas = new Fechas($logger);
                                        $logger->w_onError("OPTENEMOS EL NUMERO DE HORAS MINIMO PARA DESAHOGAR ");
                                        $movimiento .= "-->OPTENEMOS EL NUMERO DE HORAS MINIMO PARA DESAHOGAR ";

//                                        $horasMinXSumar = $cataudienciasDto->getMinHorasDesahogar();
                                        $horasMinXSumar = $audienciasDistritosDto->getMinHorasDesahogar();
                                        $logger->w_onError("HORAS: " . $horasMinXSumar);
                                        $movimiento .= "<b>" . $horasMinXSumar . "</b> HORAS <br>";

                                        $logger->w_onError("OPTENEMOS EL NUMERO DE HORAS MAXIMO PARA DESAHOGAR");
                                        $movimiento .= "OPTENEMOS EL NUMERO DE HORAS MAXIMO PARA DESAHOGAR ";

                                        $horasMaxXSumar = $audienciasDistritosDto->getMaxHorasDesahogar();
                                        $logger->w_onError("HORAS: " . $horasMaxXSumar);

                                        $movimiento .= "<b>" . $horasMaxXSumar . "</b> Horas<br>";
//                                        $tiempoUtilizacion = $fechas->tiempoUtilizacion($imputadossolicitudesDto, $ofendidossolicitudesDto, $cataudienciasDto);
                                        $tiempoUtilizacion = $fechas->tiempoUtilizacion($imputadossolicitudesDto, $ofendidossolicitudesDto, $audienciasDistritosDto);
                                        $movimiento .= "Tiempo de Utilizacion: <b>" . $tiempoUtilizacion . " Minutos</b><br>";

                                        /*
                                         * COMENZAMOS CON EL CALCULO DE LAS FECHAS INICIALES Y FECHAS FINALES
                                         * 
                                         */
                                        if (($cataudienciasDto->getCveTipoAudiencia() == 1) || ($cataudienciasDto->getCveTipoAudiencia() == 3)) {//AUDIENCIA DE TIPO PROGRAMADA O MIXTA
                                            /*
                                             * PONEMOS LAS AUDIENCIAS PROGRAMADAS A LAS 9 DE LA MA�ANA
                                             */
                                            $rolJuzgador = 1;
                                            $movimiento .= "-->Verificamos el tipo del roll del juez que necesita que es <b>PROGRAMADAS</b> para desahogar la audiencia<br>";
                                            $movimiento .= "-->Identificamos si es una audiencia de tipo programada que requiere un trato especial<br>";

                                            if ($cataudienciasDto->getCveTipoAudiencia() == 3) {
                                                $especial = 'S';
                                                $movimiento .= "-->Si es una audiencia que requiere trato especial";
                                            } else {
                                                $especial = 'N';
                                                $movimiento .= "-->No es una audiencia que requiere trato especial";
                                            }
                                            $fechaPosibleAudiencia = date("Y-m-d H:i", mktime($horas, $minutos, 0, $mes, $dia, $year));
                                            $movimiento .= "-->Fecha Inicial de la audiencia: <b>" . $fechaPosibleAudiencia . "</b><br>";

                                            $auxFechaPosibleAudiencia = $fechaPosibleAudiencia;
                                            $horaMinParaSumar = $fechas->avanzaDiaXHora($fechaPosibleAudiencia, $horasMinXSumar, true, $diasFestivos, $especial, 0);
                                            $movimiento .= "-->Minimo de horas para sumar: <b>" . $horaMinParaSumar . "</b><br>";
                                            $horaMaxParaSumar = $fechas->avanzaDiaXHora($fechaPosibleAudiencia, $horasMaxXSumar, true, $diasFestivos, $especial, 8);
                                            $movimiento .= "Maximo de horas para sumar: <b>" . $horaMaxParaSumar . "</b><br>";
                                        } else {// AUDIENCIA DE TIPO URGENTE
                                            $movimiento .= "-->Verificamos el tipo del roll del juez que necesita que es <b>URGENTES</b> para desahogar la audiencia<br>";
                                            $horaMinParaSumar = $horasMinXSumar;
                                            $movimiento .= "-->Minimo de horas para sumar: <b>" . $horaMinParaSumar . "</b><br>";
                                            $horaMaxParaSumar = $horasMaxXSumar;
                                            $movimiento .= "-->Maximo de horas para sumar: <b>" . $horaMaxParaSumar . "</b><br>";
                                            $rolJuzgador = 2;
                                        }

                                        $logger->w_onError("-->Minimo de horas para sumar: <b>" . $horaMinParaSumar . "</b><br>");
                                        $logger->w_onError("Maximo de horas para sumar: <b>" . $horaMaxParaSumar . "</b><br>");

                                        /*
                                         * TERMINA DE REALIZAR EL CALCULO DE FECHAS
                                         */
                                        $fechaPosibleAudiencia = date("Y-m-d H:i", mktime($horas + $horaMinParaSumar, $minutos, 0, $mes, $dia, $year));
                                        $movimiento .= "-->Fecha posible de la audiencia: <b>" . $fechaPosibleAudiencia . "</b><br>";
                                        $logger->w_onError("-->Fecha posible de la audiencia: <b>" . $fechaPosibleAudiencia . "</b><br>");
                                        $fechaInicialAudiencia = $fechaPosibleAudiencia;
                                        $tmpFechaAudiencia = $fechaPosibleAudiencia;
                                        $fechaMinAudiencia = mktime($horas + $horaMinParaSumar, $minutos, 0, $mes, $dia, $year);

                                        $fechaMaxPosibleAudiencia = date("Y-m-d H:i", mktime($horas + $horaMaxParaSumar, $minutos, 0, $mes, $dia, $year));
                                        $tmpFechaMaxAudiencia = $fechaMaxPosibleAudiencia;

                                        $movimiento .= "-->Fecha Final posible de la audiencia: <b>" . $fechaMaxPosibleAudiencia . "</b><br>";
                                        $logger->w_onError("-->Fecha Final posible de la audiencia: <b>" . $fechaMaxPosibleAudiencia . "</b><br>");
                                        $fechaMaxAudiencia = mktime($horas + $horaMaxParaSumar, $minutos, 0, $mes, $dia, $year);

                                        $horasParaSumar = 0;

                                        $cveFuncionJuzgador = array();

                                        $fechaAudiencia = $fechaMinAudiencia;

                                        $juzgadores = array(); //Arreglo que me permitira mantener el historial de los juzgadores que ya tengo para 
                                        //Asignar audiencia  


                                        $movimiento .= "-->Se buscan todos los juzgadores del juzgado al que se solicita la audiencia<br>";
                                        $logger->w_onError("-->Se buscan todos los juzgadores del juzgado al que se solicita la audiencia<br>");
                                        /*
                                         * Comenzamos con la obtencion de los juzgadores del juzgado y que cumplan con ciertos criterios
                                         */

                                        $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                                        $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
                                        $juzgadoresjuzgadosDto->setActivo("S");
                                        $programacionjuzgadoresController = new ProgramacionjuzgadoresController();
                                        $juzgadoresGeneral = $programacionjuzgadoresController->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); // $fechaInicialAudiencia,$fechaMaxPosibleAudiencia,

                                        for ($index = 0; $index < count($juzgadoresGeneral); $index ++) {
                                            if (count($delitosConEspecilidad) > 0) {//Verificamos si la solicitud requiere un juez con especialidad
                                                if ($delitosConEspecilidad[0]->getCveEspecialidad() == $juzgadoresGeneral[$index]["cveEspecialidad"]) {
                                                    if ($programacionjuzgadoresController->juezParaSorteo($juzgadoresGeneral[$index]["idJuzgador"], $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $rolJuzgador, $this->proveedor) == true) {
                                                        $juzgadoresFinal[] = $juzgadoresGeneral[$index];
                                                    }
                                                }
                                            } else {
                                                if ($juzgadoresGeneral[$index]["cveEspecialidad"] == 1) { //Juesgador sin especialidad
                                                    if ($programacionjuzgadoresController->juezParaSorteo($juzgadoresGeneral[$index]["idJuzgador"], $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $rolJuzgador, $this->proveedor) == true) {
                                                        $juzgadoresFinal[] = $juzgadoresGeneral[$index];
                                                    }
                                                }
                                            }
                                        }
                                        $movimiento .= "-->Se encontro un total de <b>" . sizeof($juzgadoresFinal) . "</b> juzgadores [" . json_encode($juzgadoresFinal) . "]";
                                        $logger->w_onError("-->Se encontro un total de <b>" . sizeof($juzgadoresFinal) . "</b> juzgadores ");
                                        $juez = 0;
                                        $sala = 0;

                                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

                                        if ($error == false) {
//                                var_dump($this->bitacoraAsignacion);
                                            $buscarJuzgadores = new BuscarJuzgadores($this->bitacoraAsignacion, $logger);

                                            $sorteo = $buscarJuzgadores->obtenerJuzgador($SolicitudesaudienciasDto, $SolicitudesaudienciasDto->getCveJuzgado(), $rolJuzgador, $delitosConEspecilidad, $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $cataudienciasDto, $diasFestivos, $especial, $tiempoUtilizacion, $mes, $year, $fechaMovimiento, $mesActual, $yearActual, $audienciasDistritosDto, $SolicitudesaudienciasDto->getTribunal(), $this->proveedor);
                                            $this->bitacoraAsignacion = $sorteo["bitacora"];
                                            if (($sorteo["Estatus"] == "correcto") && ($sorteo["jueces"] > 0) && ($sorteo["sala"] > 0)) {

                                                if ($sorteo["Nuevo"] == "S") { // Significa que no existia antecedente de audiencias celebradas con anterioridad
                                                    if ($radicada == "N") { // Significa que la carpeta ya existia pero no tenia audiencia 
                                                        $radicada = "S";
                                                    }
                                                }

                                                if ($sorteo["TipoJuez"] == "Unitario") {
                                                    $resultado = $this->registraAudienciaUnitario($fechaMovimiento, $radicada, $impofedelsolicitudesDto, $imputadossolicitudesDto, $SolicitudesaudienciasDto, $SolicitudesaudienciasDto->getCveJuzgado(), $tiempoUtilizacion, $sorteo["cveFuncionJuzgador"], $sorteo["jueces"], $sorteo["sala"], $sorteo["FechaInicial"]/* $fechaPosibleAudiencia */, $sorteo["FechaFinal"]/* $fechaMaxPosibleAudiencia */, $mesActual, $yearActual, $this->proveedor);
                                                    if ($resultado["Estatus"] == "error") {
                                                        $error = true;
                                                    } else {
                                                        $audienciasDto = $resultado["audiencia"];
                                                    }
                                                } else if ($sorteo["TipoJuez"] == "Tribunal") {
                                                    //Aqui falta registrar la audiencia para el tribunal 
                                                    $resultado = $this->registraAudienciaTribunal($fechaMovimiento, $radicada, $impofedelsolicitudesDto, $imputadossolicitudesDto, $SolicitudesaudienciasDto, $SolicitudesaudienciasDto->getCveJuzgado(), $tiempoUtilizacion, $sorteo["cveFuncionJuzgador"], $sorteo["jueces"], $sorteo["sala"], $sorteo["FechaInicial"]/* $fechaPosibleAudiencia */, $sorteo["FechaFinal"]/* $fechaMaxPosibleAudiencia */, $mesActual, $yearActual, $this->proveedor);
                                                    if ($resultado["Estatus"] == "error") {
                                                        $error = true;
                                                    } else {
                                                        $audienciasDto = $resultado["audiencia"];
                                                    }
                                                }
                                            } else {
                                                $movimiento = "-->No se logro realizar la asignacion de la audiencia porque <b>" . $sorteo["Mensaje"] . "</b>";
                                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                                                $error = true;
                                            }
                                        } else {
                                            $movimiento = "-->-->-->No se encontraron jueces con el tipo de roll que necesitan el sistema<br>";
                                            $movimiento .= "-->-->-->talvez no se corrio la programacion de los juzgadores";
                                            $movimiento .= "-->-->--> o existen inconsistencias en la programacion";
                                            $movimiento .= "-->No se logro registrar la audiencia por algun error";
                                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                                            $error = true;
                                        }

                                        /*
                                         * Terminamos con el filtrado de los juzgadores
                                         */
//                            $index = 0;
//                        $juez = 0;
//                        $sala = 0;
                                        //BitacoraasignacionesDTO
//                            $error = true;
//                        var_dump($bitacoraAsignaciones);
                                        if ($error == false) {
//                            echo "-->Fin exitoso de solicitud de audiencia para el juez: $juez en la sala: $sala en la fecha inicial: $fechaInicialAudiencia hasta $fechaFinalAudiencia<br>";
                                            $this->proveedor->execute("COMMIT");
                                        } else {
//                            echo "-->Solicitud de audiencia fallida para el juez: $juez en la sala: $sala en la fecha inicial: $fechaInicialAudiencia hasta $fechaFinalAudiencia<br>";
                                            $this->proveedor->execute("ROLLBACK");
                                        }
                                    } else {
                                        $logger->w_onError("**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR NOSE ENCONTRO CONFIGURACION DE LA AUDIENCIA**********");
                                        $movimiento = "**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR NOSE ENCONTRO CONFIGURACION DE LA AUDIENCIA**********";
                                        $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                                        $this->proveedor->execute("ROLLBACK");
                                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                                        $error = true;
                                    }
                                } else {
                                    $logger->w_onError("**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR NO ENCONTRO JUZGADO CON LA CLAVE SOLICITADA**********");
                                    $movimiento = "**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR NO ENCONTRO JUZGADO CON LA CLAVE SOLICITADA**********";
                                    $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                                    $this->proveedor->execute("ROLLBACK");
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                                    $error = true;
                                }
                            } else {
                                $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                                $logger->w_onError("CveJuzgado: " . $cveJuzgado);
                                $logger->w_onError("**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR**********");
                                $movimiento .= "**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR**********";
                                $this->proveedor->execute("ROLLBACK");

                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                                $error = true;
                            }
                        } else {
                            $error = true;
                            $movimiento = "LA CLAVE DE LA AUDIENCIA NO EXISTE EN EL CATALOGO DE AUDIENCIAS";
                            $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                            $this->proveedor->execute("ROLLBACK");
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                            $logger->w_onError("LA CLAVE DE LA AUDIENCIA NO EXISTE EN EL CATALOGO DE AUDIENCIAS");
                        }
                    } else {
                        $error = true;
                        $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                        $logger->w_onError("CveJuzgado: " . $cveJuzgado);
                        $logger->w_onError("**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR**********");
                        $movimiento .= "**********EL PROGRAMA TERMINA PORQUE SE ENCONTRO UN ERROR**********";
                        $this->proveedor->execute("ROLLBACK");
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                        $error = true;
                    }
                } else {
                    //El estatus de la solicitud es diferente a registrado por lo que talvez ya cuenta con un a audiencia o talvez
                    // fue cancelada.
                    $error = true;
                    $movimiento = "El estatus de la solicitud es diferente a registrada por lo que talvez ya cuenta con una audiencia o fue cancelada";
                    $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                    $logger->w_onError("El estatus de la solicitud es diferente a registrada por lo que talvez ya cuenta con una audiencia o fue cancelada");
                    $this->proveedor->execute("ROLLBACK");

                    $audienciasDto = new AudienciasDTO();
                    $audienciasDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());

                    $audienciasDao = new AudienciasDAO();
                    $audienciasDto = $audienciasDao->selectAudienciasBetween($audienciasDto, "", $this->proveedor);
                    if ($audienciasDto != "") {
                        $audienciasDto = $audienciasDto[0];
                    }
                }
            } else {
                $error = true; //No existe el idSolicitud en la bd
                $movimiento = "El id de la solicitud no existe en el sistema verifique";
                $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
                $this->proveedor->execute("ROLLBACK");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                $logger->w_onError("El id de la solicitud no existe en el sistema verifique");
            }
        } else {
            $error = true; //No existe el idSolicitud en la bd
            $movimiento = "No se logro realizar la actualizacion de MismoJuzgador Y Requiere Tribunal de la solicitud de audiencia";
            $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();
            $this->proveedor->execute("ROLLBACK");
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
            $logger->w_onError("No se logro realizar la actualizacion de MismoJuzgador Y Requiere Tribunal de la solicitud de audiencia");
        }

        $bitacoraasignacionesDao = new BitacoraasignacionesDAO();
//        var_dump($this->bitacoraAsignacion);
        for ($index = 0; $index < sizeof($this->bitacoraAsignacion); $index ++) {
            $bitacoraasignacionesDao->insertBitacoraasignaciones($this->bitacoraAsignacion[$index]);
//            $this->bitacoraAsignacion = new BitacoraasignacionesDTO();
            $logger->w_onError("Movimiento-->" . $this->bitacoraAsignacion[$index]->getObservaciones() . " ");
            $logger->w_onError("IdSolicitud-->" . $this->bitacoraAsignacion[$index]->getIdSolicitudAudiencia() . " ");
            $logger->w_onError("cveAudiencia-->" . $this->bitacoraAsignacion[$index]->getCveAdscripcionSolicita() . " ");
        }

        if (!$error) {
            $audiencia = array("status" => "ok", "idAudiencia" => $audienciasDto->getIdAudiencia(), "fechaInicial" => $audienciasDto->getFechaInicial(), "fechaFinal" => $audienciasDto->getFechaFinal(), "cveJuzgado" => $audienciasDto->getCveJuzgado(), "cveJuzgadoDes" => $audienciasDto->getCveJuzgadoDesahoga(), "texto" => "Solicitud enviada de forma correcta");
        } else {
            $tmp = new SolicitudesaudienciasDTO();
            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());

            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
            $tmp = $SolicitudesaudienciasDao->selectSolicitudesaudiencias($tmp, "", "", $this->proveedor);

            if ($tmp != "") {
                if ($tmp[0]->getCveEstatusSolicitud() == 1) {
                    $audiencia = array("status" => "error", "idAudiencia" => "", "fechaInicial" => "", "fechaFinal" => "", "cveJuzgado" => "", "cveJuzgadoDes" => "", "texto" => "Se intent&oacute; registrar la audiencia sin tener exito p&oacute;ngase en contacto con el administrador del juzgado");
                } else if ($tmp[0]->getCveEstatusSolicitud() == 2) {
                    $audiencia = array("status" => "error", "idAudiencia" => "", "fechaInicial" => "", "fechaFinal" => "", "cveJuzgado" => "", "cveJuzgadoDes" => "", "texto" => "La solicitud de audiencia ya ha sido enviada con anterioridad");
                }
            } else {
                $audiencia = array("status" => "error", "idAudiencia" => "", "fechaInicial" => "", "fechaFinal" => "", "cveJuzgado" => "", "cveJuzgadoDes" => "", "texto" => "La clave de la solicitud de audiencia no se encontro");
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }

        /*
         * Liberamos la memoria de las variables
         */
        unset($error);
        unset($year);
        unset($mes);
        unset($dia);
        unset($horas);
        unset($minutos);
        unset($segundos);
        unset($diasFestivos);
        unset($horasMinXSumar);
        unset($horasMaxXSumar);
        unset($horaMaxParaSumar);
        unset($fechaPosibleAudiencia);
        unset($especial);
        unset($juzgadoresGeneral);
        unset($juzgadoresAux);
        unset($juzgadoresFinal);

        return json_encode($audiencia);
    }

    public function registraAudienciaTribunal($fechaMovimiento, $radicada = "S", $impofedelsolicitudesDto, $imputadossolicitudesDto, $SolicitudesaudienciasDto, $cveJuzgado, $tiempoUtilizacion, $cveFuncionJuzgador, $juez, $sala, $fechaInicialAudiencia, $fechaFinalAudiencia, $mesActual, $yearActual, $proveedor = null) {
        $error = false;
        $tmp = $proveedor;
        $detenido = "N";

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        /*
         * Todo este proceso se realiza solo para el juzgador queestara en funciones de presidente
         */


        if ((sizeof($juez) == 3) && ($sala != 0)) {
            $movimiento = "-->-->Se logro conseguir un juez presidente: " . $juez["presidente"] . " y una sala " . $sala . "<br>";
            $movimiento .= "-->-->Se logro conseguir un juez secretario: " . $juez["secretario"] . " y una sala " . $sala . "<br>";
            $movimiento .= "-->-->Se logro conseguir un juez vocal: " . $juez["vocal"] . " y una sala " . $sala . "<br>";
            $movimiento .= "-->-->Para fijar audiencia el dia: " . $fechaInicialAudiencia . " hasta " . $fechaFinalAudiencia . "<br>";
            $movimiento .= "-->-->Comenzaremos a copiar la informacion de la solicitud a la carpeta<br>";
            $movimiento .= "-->-->Registramos la audiencia en la tabla de audiencias<br>";

            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
            $peso = $this->ponderacionAsunto($impofedelsolicitudesDto, "N", $proveedor);
            $detenido = $this->detenido($imputadossolicitudesDto);

            $audienciasDto = new AudienciasDTO();
            $audienciasDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
            $audienciasDto->setIdReferencia($SolicitudesaudienciasDto->getIdReferencia()); //$fechaInicialAudiencia, $fechaFinalAudiencia
            $audienciasDto->setFechaInicial($fechaInicialAudiencia);
            $audienciasDto->setFechaFinal($fechaFinalAudiencia);
            $audienciasDto->setAnio($SolicitudesaudienciasDto->getAnio());
            $audienciasDto->setNumero($SolicitudesaudienciasDto->getNumero());
            $audienciasDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
            $audienciasDto->setActivo("S");
            $audienciasDto->setCveCatAudiencia($SolicitudesaudienciasDto->getCveCatAudiencia());
            $audienciasDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
            $audienciasDto->setCveJuzgadoDesahoga($SolicitudesaudienciasDto->getCveJuzgadoDesahoga());
            $audienciasDto->setCveAdscripcionSolicita($SolicitudesaudienciasDto->getCveAdscripcionSolicita());
            $audienciasDto->setCveUsuario($SolicitudesaudienciasDto->getCveUsuario());
            $audienciasDto->setPeso($peso);

            $audienciasDto->setDetenido($detenido); //Corregir esto deacuerdo a los datos de la solicitud

            $audienciasDto->setCveEstatusAudiencia(1); //Se coloca la audiencia como no celebrada
            $audienciasDto->setCveSala($sala); //Se asigna la sala que se obtubo del sorteo

            $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
            /////////////////////////////////
            $audienciasDto = $audienciasDao->insertAudiencias($audienciasDto, $proveedor);
//            var_dump($audienciasDto);
            if ($audienciasDto != "") {
                $audienciasDto = $audienciasDto[0];
                $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciasJuzgadorDto->setActivo("S");
                $audienciasJuzgadorDto->setIdJuzgador($juez["presidente"]);
                $audienciasJuzgadorDto->setIdAudiencia($audienciasDto->getIdAudiencia());
                $audienciasJuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);

                $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                $audienciasJuzgadorDto = $audienciasJuzgadorDao->insertAudienciasjuzgador($audienciasJuzgadorDto, $proveedor);
                if ($audienciasJuzgadorDto != "") {
                    if ($radicada == "S") {
                        $control = $this->controlCargas(true, $fechaMovimiento, $SolicitudesaudienciasDto, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $juez["presidente"], $sala, $cveFuncionJuzgador[0], $tiempoUtilizacion, $yearActual, $mesActual, $peso, $proveedor);
                        if ($control == true) {
                            $error = true;
                        }
                    } else {
                        echo "-->-->-->No se encontro antecedente en el control salas";
                        $controlsalasDao = new ControlsalasDAO();
                        $controlsalasDto = new ControlsalasDTO();
                        $controlsalasDto->setCveSala($sala);

                        $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);

                        if ($controlsalasDto != "") {
                            $controlsalasDto = $controlsalasDto[0];
                            $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
                            if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
//Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                                $tmp = new SolicitudesaudienciasDTO();
                                $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                                $tmp->setCveEstatusSolicitud(2);
                                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                                $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                                if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                                } else {
//No se logro actualizar el estatus de la solicitud 
                                    $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $error = true;
                                }
                            } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                                $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
                            $controlsalasDto = $controlsalasDto[0];
                            $controlsalasDao = new ControlsalasDAO();
                            $controlsalasDto = new ControlsalasDTO();
                            $controlsalasDto->setCveMes($mesActual);
                            $controlsalasDto->setAnio($yearActual);
                            $controlsalasDto->setCveSala($sala);
                            $controlsalasDto->setControl(0);
                            $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
                            if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
                                //Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                                $tmp = new SolicitudesaudienciasDTO();
                                $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                                $tmp->setCveEstatusSolicitud(2);
                                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                                $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                                if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                                } else {
//No se logro actualizar el estatus de la solicitud 
                                    $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $error = true;
                                }
                            } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                                $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        }
////                        echo "-->-->-->No se encontro antecedente en el control salas";
//                        $controlsalasDao = new ControlsalasDAO();
//                        $controlsalasDto = new ControlsalasDTO();
//                        $controlsalasDto->setCveMes($mesActual);
//                        $controlsalasDto->setAnio($yearActual);
//                        $controlsalasDto->setCveSala($sala);
//                        $controlsalasDto->setControl(0);
//                        $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
//                        $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
//                        $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
//                        if ($controlsalasDto != "") {
////                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
////Actualizamos la solicitud de audiencia a enviada en lugar de registrada
//                            $tmp = new SolicitudesaudienciasDTO();
//                            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                            $tmp->setCveEstatusSolicitud(2);
//                            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                            $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                            if ($tmp != "") {
////Actulizacion del estatus de la solicitud a enviada 
//                            } else {
////No se logro actualizar el estatus de la solicitud 
//                                $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                $error = true;
//                            }
//                        } else {
////                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
//                            $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
//                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                            $error = true;
//                        }
                    }
                } else {
//                                            echo "-->-->-->No se logro guardar el juzgador con la audiencia<br>";
                    $movimiento = "-->-->-->No se logro guardar el juzgador con la audiencia<br>";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    $error = true;
                }
            } else {
                $error = true;
            }
        }

        /*
         * Esta parte termina
         */


        if ($error == false) {
            $movimiento = "-->-->-->Guardamos al juzgador que estara en funciones de secretario<br>";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["secretario"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//            var_dump($cveFuncionJuzgador);
            $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
            $audienciasJuzgadorDto->setActivo("S");
            $audienciasJuzgadorDto->setIdJuzgador($juez["secretario"]);
            $audienciasJuzgadorDto->setIdAudiencia($audienciasDto->getIdAudiencia());
            $audienciasJuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador[1]);

            $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
            $audienciasJuzgadorDto = $audienciasJuzgadorDao->insertAudienciasjuzgador($audienciasJuzgadorDto, $proveedor);

            if ($audienciasJuzgadorDto == "") {
                $error = true;
            } else {
                if ($radicada == "S") {
                    $control = $this->controlCargas(false, $fechaMovimiento, $SolicitudesaudienciasDto, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $juez["secretario"], $sala, $cveFuncionJuzgador[1], $tiempoUtilizacion, $yearActual, $mesActual, $peso, $proveedor);
                    if ($control == true) {
                        $error = true;
                    }
                }
                $movimiento = "-->-->-->Guardamos al juzgador que estara en funciones de vocal<br>";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["vocal"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciasJuzgadorDto->setActivo("S");
                $audienciasJuzgadorDto->setIdJuzgador($juez["vocal"]);
                $audienciasJuzgadorDto->setIdAudiencia($audienciasDto->getIdAudiencia());
                $audienciasJuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador[2]);

                $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                $audienciasJuzgadorDto = $audienciasJuzgadorDao->insertAudienciasjuzgador($audienciasJuzgadorDto, $proveedor);
                if ($audienciasJuzgadorDto == "") {
                    $error = true;
                } else {
                    if ($radicada == "S") {
                        $control = $this->controlCargas(false, $fechaMovimiento, $SolicitudesaudienciasDto, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $juez["vocal"], $sala, $cveFuncionJuzgador[2], $tiempoUtilizacion, $yearActual, $mesActual, $peso, $proveedor);
                        if ($control == true) {
                            $error = true;
                        }
                    }
                }
            }
        }


        if (!$error) {
            if ($radicada == "S") {
                $ligarcarpetaJuzgador = $this->asignaCarpetaJuzgador($fechaMovimiento, $radicada = "S", $cveJuzgado, $juez["presidente"], $sala, $SolicitudesaudienciasDto, $audienciasDto, $proveedor);
                if ($ligarcarpetaJuzgador == false) {
                    $error = true;
                }
            }
        }


        if ($tmp == null) {
            $proveedor->close();
        }

        if (!$error) {
            $movimiento = "-->-->-->Fin exitoso de la solicitud de audiencia";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

            return array("Estatus" => "correcto", "audiencia" => $audienciasDto);
        } else {
            $movimiento = "-->-->-->Ocurrio un error no se logro registrar la audiencia";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez["presidente"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

            return array("Estatus" => "error", "audiencia" => array());
        }
    }

    public function registraAudienciaUnitario($fechaMovimiento, $radicada = "S", $impofedelsolicitudesDto, $imputadossolicitudesDto, $SolicitudesaudienciasDto, $cveJuzgado, $tiempoUtilizacion, $cveFuncionJuzgador, $juez, $sala, $fechaInicialAudiencia, $fechaFinalAudiencia, $mesActual, $yearActual, $proveedor = null) {
        $error = false;
        $tmp = $proveedor;
        $detenido = "N";
//        $fechaMovimiento = "";
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

//        var_dump($SolicitudesaudienciasDto);

        if (($juez != 0) && ($sala != 0)) {
            $movimiento = "-->-->Se logro conseguir un juez: " . $juez . " y una sala " . $sala . "<br>";
            $movimiento .= "-->-->Para fijar audiencia el dia: " . $fechaInicialAudiencia . " hasta " . $fechaFinalAudiencia . "<br>";
            $movimiento .= "-->-->Comenzaremos a copiar la informacion de la solicitud a la carpeta<br>";
            $movimiento .= "-->-->Registramos la audiencia en la tabla de audiencias<br>";

            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
            $peso = $this->ponderacionAsunto($impofedelsolicitudesDto, "N", $proveedor);
            $detenido = $this->detenido($imputadossolicitudesDto);

            $audienciasDto = new AudienciasDTO();
            $audienciasDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
            $audienciasDto->setIdReferencia($SolicitudesaudienciasDto->getIdReferencia()); //$fechaInicialAudiencia, $fechaFinalAudiencia
            $audienciasDto->setFechaInicial($fechaInicialAudiencia);
            $audienciasDto->setFechaFinal($fechaFinalAudiencia);
            $audienciasDto->setAnio($SolicitudesaudienciasDto->getAnio());
            $audienciasDto->setNumero($SolicitudesaudienciasDto->getNumero());
            $audienciasDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta());
            $audienciasDto->setActivo("S");
            $audienciasDto->setCveCatAudiencia($SolicitudesaudienciasDto->getCveCatAudiencia());
            $audienciasDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
            $audienciasDto->setCveJuzgadoDesahoga($SolicitudesaudienciasDto->getCveJuzgadoDesahoga());
            $audienciasDto->setCveAdscripcionSolicita($SolicitudesaudienciasDto->getCveAdscripcionSolicita());
            $audienciasDto->setCveUsuario($SolicitudesaudienciasDto->getCveUsuario());
            $audienciasDto->setPeso($peso);

            $audienciasDto->setDetenido($detenido); //Corregir esto deacuerdo a los datos de la solicitud

            $audienciasDto->setCveEstatusAudiencia(1); //Se coloca la audiencia como no celebrada
            $audienciasDto->setCveSala($sala); //Se asigna la sala que se obtubo del sorteo
            $movimiento = "Datos de la audiencia Antes de guardar: " . json_encode($audienciasDto->toString());
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
            $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
            /////////////////////////////////
            $audienciasDto = $audienciasDao->insertAudiencias($audienciasDto, $proveedor);
//            var_dump($audienciasDto);
            if ($audienciasDto != "") {
                $audienciasDto = $audienciasDto[0];
                $movimiento = "Datos de la audiencia Despues de guardar: " . json_encode($audienciasDto->toString());
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciasJuzgadorDto->setActivo("S");
                $audienciasJuzgadorDto->setIdJuzgador($juez);
                $audienciasJuzgadorDto->setIdAudiencia($audienciasDto->getIdAudiencia());
                $audienciasJuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);
                $movimiento = "Ligamos la audiencia con el juzgador antes : " . json_encode($audienciasJuzgadorDto->toString());
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                $audienciasJuzgadorDto = $audienciasJuzgadorDao->insertAudienciasjuzgador($audienciasJuzgadorDto, $proveedor);
                if ($audienciasJuzgadorDto != "") {
                    if ($radicada == "S") {

                        $cataudienciasDto = new CataudienciasDTO();
                        $cataudienciasDto->setCveCatAudiencia($audienciasDto->getCveCatAudiencia());
                        $cataudienciasDao = new CataudienciasDAO();
                        $cataudienciasDto = $cataudienciasDao->selectCataudiencias($cataudienciasDto, "", $this->proveedor);

                        if ($cataudienciasDto != "") {
                            $cataudienciasDto = $cataudienciasDto[0];


//                            if ($audienciasDto->getCveCatAudiencia() == 62 || $audienciasDto->getCveCatAudiencia() == 135 || $audienciasDto->getCveCatAudiencia() == 89) {
                            if ($cataudienciasDto->getAudienciaInicial() == 'S') {
                                /*
                                 * Se agrega la condicion para que solo contabilice asuntos de las audiencias de control de detencion y audiencia inicial fecha de la modificacion	
                                 * Fecha 14/07/2016 14:38
                                 */
                                $movimiento = "La audiencia solicitada esta marcada como audiencia inicial";
                                $movimiento .= "Procedemos a actualizar la informacion del control cargas";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $control = $this->controlCargas(true, $fechaMovimiento, $SolicitudesaudienciasDto, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $juez, $sala, $cveFuncionJuzgador[0], $tiempoUtilizacion, $yearActual, $mesActual, $peso, $proveedor);
                                if ($control == true) {
                                    $error = true;
                                }
                            } else {
                                $tmp = new SolicitudesaudienciasDTO();
                                $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                                $tmp->setCveEstatusSolicitud(2);
                                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                                $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                                if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                                } else {
//No se logro actualizar el estatus de la solicitud 
                                    $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $error = true;
                                }
                            }
                        }
//                        $controlcargasDao = new ControlcargasDAO();
//                        $controlcargasDto = new ControlcargasDTO ( );
//                        $controlcargasDto->setIdJuzgador($juez);
//                        $controlcargasDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);
//                        $controlcargasDto->setCveJuzgado($cveJuzgado);
//                        $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga='" . $yearActual . "' And cveMes='" . $mesActual . "' ORDER BY totalPuntaje ASC FOR UPDATE", $proveedor);
//                        if ($controlcargasDto != "") {
//                            $controlcargasDto = $controlcargasDto [0];
//                            $controlcargasDto->setTotalAsignado($controlcargasDto->getTotalAsignado() + $peso);
//                            $controlcargasDto->setTotalPuntaje($controlcargasDto->getTotalPuntaje() + $peso);
//                            $controlcargasDto = $controlcargasDao->updateControlcargas($controlcargasDto, $proveedor);
//                            if ($controlcargasDto != "") {
//                                $controlsalasDao = new ControlsalasDAO();
//                                $controlsalasDto = new ControlsalasDTO();
//                                $controlsalasDto->setCveSala($sala);
//
//                                $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);
//
//                                if ($controlsalasDto != "") {
//                                    $controlsalasDto = $controlsalasDto[0];
//                                    $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
//                                    if ($controlsalasDto != "") {
//                                        $tmp = new SolicitudesaudienciasDTO();
//                                        $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                                        $tmp->setCveEstatusSolicitud(2);
//                                        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                                        $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                                        if ($tmp != "") {
//                                            //Actulizacion del estatus de la solicitud a enviada 
//                                        } else {
//                                            //No se logro actualizar el estatus de la solicitud 
//                                            $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                            $error = true;
//                                        }
//                                    } else {
//                                        $error = true;
//                                    }
//                                } else {
//                                    $controlsalasDto = new ControlsalasDTO ( );
//                                    $controlsalasDto->setCveMes($mesActual);
//                                    $controlsalasDto->setAnio($yearActual);
//                                    $controlsalasDto->setCveSala($sala);
//                                    $controlsalasDto->setControl(0);
//                                    $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
//                                    if ($controlsalasDto != "") {
//                                        $tmp = new SolicitudesaudienciasDTO();
//                                        $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                                        $tmp->setCveEstatusSolicitud(2);
//                                        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                                        $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                                        if ($tmp != "") {
//                                            //Actulizacion del estatus de la solicitud a enviada 
//                                        } else {
//                                            //No se logro actualizar el estatus de la solicitud 
//                                            $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                            $error = true;
//                                        }
//                                    } else {
////                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                        $error = true;
//                                    }
//                                }
//                            } else {
////                                                    echo "-->-->-->No se logro actulizar el control carga del juzgador";
//                                $movimiento = "-->-->-->No se logro actulizar el control carga del juzgador";
//                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                $error = true;
//                            }
//                        } else {
////                                                echo "-->-->-->No se encontro antecedente en el control carga<br>";
//                            $controlcargasDto = new ControlcargasDTO();
//                            $controlcargasDto->setIdJuzgador($juez);
//                            $controlcargasDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);
//                            $controlcargasDto->setCveJuzgado($cveJuzgado);
//                            $controlcargasDto->setCveMes($mesActual);
//                            $controlcargasDto->setAnioCarga($yearActual);
//                            $controlcargasDto->setTotalAsignado($peso);
//                            $controlcargasDto->setTotalPuntaje($peso);
//                            $controlcargasDto = $controlcargasDao->insertControlcargas($controlcargasDto, $proveedor);
//                            if ($controlcargasDto != "") {
////                                                    echo "<br>";
////                                                    echo "-->-->-->Se actualizo el control de carga del juzgador de forma correcta<br>";
////                                                    echo "-->-->-->Se incrementara el total de horas asignadas para que se realice el balanceo de cargas<br>";
//                                //                                                    echo "-->-->-->entre las salas<br>";
//
//                                $controlsalasDao = new ControlsalasDAO();
//                                $controlsalasDto = new ControlsalasDTO();
//                                $controlsalasDto->setCveSala($sala);
//
//                                $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);
//
//                                if ($controlsalasDto != "") {
//                                    $controlsalasDto = $controlsalasDto[0];
//                                    $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
//                                    if ($controlsalasDto != "") {
////                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
////Actualizamos la solicitud de audiencia a enviada en lugar de registrada
//                                        $tmp = new SolicitudesaudienciasDTO();
//                                        $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                                        $tmp->setCveEstatusSolicitud(2);
//                                        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                                        $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                                        if ($tmp != "") {
////Actulizacion del estatus de la solicitud a enviada 
//                                        } else {
////No se logro actualizar el estatus de la solicitud 
//                                            $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                            $error = true;
//                                        }
//                                    } else {
////                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                        $error = true;
//                                    }
//                                } else {
////                                                        echo "-->-->-->No se encontro antecedente en el control salas";
//                                    $controlsalasDto = new ControlsalasDTO ( );
//                                    $controlsalasDto->setCveMes($mesActual);
//                                    $controlsalasDto->setAnio($yearActual);
//                                    $controlsalasDto->setCveSala($sala);
//                                    $controlsalasDto->setControl(0);
//                                    $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
//                                    $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
//                                    if ($controlsalasDto != "") {
////                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
////Actualizamos la solicitud de audiencia a enviada en lugar de registrada
//                                        $tmp = new SolicitudesaudienciasDTO();
//                                        $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                                        $tmp->setCveEstatusSolicitud(2);
//                                        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                                        $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                                        if ($tmp != "") {
////Actulizacion del estatus de la solicitud a enviada 
//                                        } else {
////No se logro actualizar el estatus de la solicitud 
//                                            $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                            $error = true;
//                                        }
//                                    } else {
////                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
//                                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                        $error = true;
//                                    }
//                                }
//                            } else {
////                                                    echo "-->-->-->No se logro actulizar el control carga del juzgador";
//                                $movimiento = "-->-->-->No se logro actulizar el control carga del juzgador";
//                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                                $error = true;
//                            }
//                        }
                    } else {
//                        echo "-->-->-->No se encontro antecedente en el control salas";
                        $controlsalasDao = new ControlsalasDAO();
                        $controlsalasDto = new ControlsalasDTO();
                        $controlsalasDto->setCveSala($sala);

                        $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);

                        if ($controlsalasDto != "") {
                            $controlsalasDto = $controlsalasDto[0];
                            $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
                            if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
//Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                                $tmp = new SolicitudesaudienciasDTO();
                                $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                                $tmp->setCveEstatusSolicitud(2);
                                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                                $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                                if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                                } else {
//No se logro actualizar el estatus de la solicitud 
                                    $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $error = true;
                                }
                            } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                                $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
//                            $controlsalasDto = $controlsalasDto;
                            $controlsalasDao = new ControlsalasDAO();
                            $controlsalasDto = new ControlsalasDTO();
                            $controlsalasDto->setCveMes($mesActual);
                            $controlsalasDto->setAnio($yearActual);
                            $controlsalasDto->setCveSala($sala);
                            $controlsalasDto->setControl(0);
                            $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
                            $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
                            if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
                                //Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                                $tmp = new SolicitudesaudienciasDTO();
                                $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                                $tmp->setCveEstatusSolicitud(2);
                                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                                $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                                if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                                } else {
//No se logro actualizar el estatus de la solicitud 
                                    $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $error = true;
                                }
                            } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                                $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        }
                    }
                } else {
//                                            echo "-->-->-->No se logro guardar el juzgador con la audiencia<br>";
                    $movimiento = "-->-->-->No se logro guardar el juzgador con la audiencia<br>";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    $error = true;
                }
            } else {
                $error = true;
            }
        }


        if (!$error) {
            if ($radicada == "S") {
                $ligarcarpetaJuzgador = $this->asignaCarpetaJuzgador($fechaMovimiento, $radicada = "S", $cveJuzgado, $juez, $sala, $SolicitudesaudienciasDto, $audienciasDto, $proveedor);
                if ($ligarcarpetaJuzgador == false) {
                    $error = true;
                }
            }
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        if (!$error) {
            $movimiento = "-->-->-->Fin exitoso de la solicitud de audiencia";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

            return array("Estatus" => "correcto", "audiencia" => $audienciasDto);
        } else {
            $movimiento = "-->-->-->Ocurrio un error no se logro registrar la audiencia";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

            return array
                ("Estatus" => "error", "audiencia" => array());
        }
    }

    public function controlCargas($controlSala = true, $fechaMovimiento, $SolicitudesaudienciasDto, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $juez, $sala, $cveFuncionJuzgador, $tiempoUtilizacion, $yearActual, $mesActual, $peso, $proveedor) {
        $error = false;
        $controlcargasDao = new ControlcargasDAO();
        $controlcargasDto = new ControlcargasDTO();
        $controlcargasDto->setIdJuzgador($juez);
        $controlcargasDto->setCveFuncionJuzgador($cveFuncionJuzgador);
        $controlcargasDto->setCveJuzgado($cveJuzgado);
        $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga='" . $yearActual . "' And cveMes='" . $mesActual . "' ORDER BY totalPuntaje ASC FOR UPDATE", $proveedor);



        if ($controlcargasDto != "") {
            $controlcargasDto = $controlcargasDto[0];
            $movimiento = "-->-->-->Informacion del control carga: " . json_encode($controlcargasDto->toString());
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
            $controlcargasDto->setTotalAsignado($controlcargasDto->getTotalAsignado() + $peso);
            $controlcargasDto->setTotalPuntaje($controlcargasDto->getTotalPuntaje() + $peso);

            $movimiento = "-->-->-->Actualizamos el control carga: " . json_encode($controlcargasDto->toString());
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

            $controlcargasDto = $controlcargasDao->updateControlcargas($controlcargasDto, $proveedor);


            if ($controlcargasDto != "") {


                if ($controlSala == true) {
                    $controlsalasDao = new ControlsalasDAO();
                    $controlsalasDto = new ControlsalasDTO();
                    $controlsalasDto->setCveSala($sala);

                    $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);

                    if ($controlsalasDto != "") {
                        $controlsalasDto = $controlsalasDto[0];
                        $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
                        if ($controlsalasDto != "") {
                            $tmp = new SolicitudesaudienciasDTO();
                            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                            $tmp->setCveEstatusSolicitud(2);
                            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                            $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                            if ($tmp != "") {
                                //Actulizacion del estatus de la solicitud a enviada 
                            } else {
                                //No se logro actualizar el estatus de la solicitud 
                                $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
                            $error = true;
                        }
                    } else {
                        $controlsalasDto = new ControlsalasDTO();
                        $controlsalasDto->setCveMes($mesActual);
                        $controlsalasDto->setAnio($yearActual);
                        $controlsalasDto->setCveSala($sala);
                        $controlsalasDto->setControl(0);
                        $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
                        if ($controlsalasDto != "") {
                            $tmp = new SolicitudesaudienciasDTO();
                            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                            $tmp->setCveEstatusSolicitud(2);
                            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                            $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                            if ($tmp != "") {
                                //Actulizacion del estatus de la solicitud a enviada 
                            } else {
                                //No se logro actualizar el estatus de la solicitud 
                                $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                            $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            $error = true;
                        }
                    }
                } else {
//                    $tmp = new SolicitudesaudienciasDTO();
//                    $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                    $tmp->setCveEstatusSolicitud(2);
//                    $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                    $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                    if ($tmp != "") {
//                        //Actulizacion del estatus de la solicitud a enviada 
//                    } else {
//                        //No se logro actualizar el estatus de la solicitud 
//                        $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                        $error = true;
//                    }
                }
            } else {
//                                                    echo "-->-->-->No se logro actulizar el control carga del juzgador";
                $movimiento = "-->-->-->No se logro actulizar el control carga del juzgador";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                $error = true;
            }
        } else {
//                                                echo "-->-->-->No se encontro antecedente en el control carga<br>";
            $controlcargasDto = new ControlcargasDTO();
            $controlcargasDto->setIdJuzgador($juez);
            $controlcargasDto->setCveFuncionJuzgador($cveFuncionJuzgador);
            $controlcargasDto->setCveJuzgado($cveJuzgado);
            $controlcargasDto->setCveMes($mesActual);
            $controlcargasDto->setAnioCarga($yearActual);
            $controlcargasDto->setTotalAsignado($peso);
            $controlcargasDto->setTotalPuntaje($peso);
            $controlcargasDto = $controlcargasDao->insertControlcargas($controlcargasDto, $proveedor);
            if ($controlcargasDto != "") {
//                                                    echo "<br>";
//                                                    echo "-->-->-->Se actualizo el control de carga del juzgador de forma correcta<br>";
//                                                    echo "-->-->-->Se incrementara el total de horas asignadas para que se realice el balanceo de cargas<br>";
//                                                    echo "-->-->-->entre las salas<br>";
                if ($controlSala == true) {
                    $controlsalasDao = new ControlsalasDAO();
                    $controlsalasDto = new ControlsalasDTO();
                    $controlsalasDto->setCveSala($sala);

                    $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mesActual . "' AND anio='" . $yearActual . "' ORDER BY totalHoras ASC FOR UPDATE ", $proveedor);

                    if ($controlsalasDto != "") {
                        $controlsalasDto = $controlsalasDto[0];
                        $controlsalasDto->setTotalHoras($controlsalasDto->getTotalHoras() + (ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto->setTotalAsignados($controlsalasDto->getTotalAsignados() + (ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto = $controlsalasDao->updateControlsalas($controlsalasDto, $proveedor);
                        if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
//Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                            $tmp = new SolicitudesaudienciasDTO();
                            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                            $tmp->setCveEstatusSolicitud(2);
                            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                            $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                            if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                            } else {
//No se logro actualizar el estatus de la solicitud 
                                $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                            $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            $error = true;
                        }
                    } else {
//                                                        echo "-->-->-->No se encontro antecedente en el control salas";
                        $controlsalasDto = new ControlsalasDTO();
                        $controlsalasDto->setCveMes($mesActual);
                        $controlsalasDto->setAnio($yearActual);
                        $controlsalasDto->setCveSala($sala);
                        $controlsalasDto->setControl(0);
                        $controlsalasDto->setTotalHoras((ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto->setTotalAsignados((ceil($tiempoUtilizacion / 60)));
                        $controlsalasDto = $controlsalasDao->insertControlsalas($controlsalasDto, $proveedor);
                        if ($controlsalasDto != "") {
//                                                            echo "-->-->-->Se actulizo el control carga de las salas de forma correcta";
//Actualizamos la solicitud de audiencia a enviada en lugar de registrada
                            $tmp = new SolicitudesaudienciasDTO();
                            $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
                            $tmp->setCveEstatusSolicitud(2);
                            $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                            $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
                            if ($tmp != "") {
//Actulizacion del estatus de la solicitud a enviada 
                            } else {
//No se logro actualizar el estatus de la solicitud 
                                $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $error = true;
                            }
                        } else {
//                                                            echo "-->-->-->No se logro actualizr el control carga de las salas";
                            $movimiento = "-->-->-->No se logro actualizr el control carga de las salas";
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            $error = true;
                        }
                    }
                } else {
//                    $tmp = new SolicitudesaudienciasDTO();
//                    $tmp->setIdSolicitudAudiencia($SolicitudesaudienciasDto->getIdSolicitudAudiencia());
//                    $tmp->setCveEstatusSolicitud(2);
//                    $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
//                    $tmp = $SolicitudesaudienciasDao->updateSolicitudesaudiencias($tmp, $proveedor);
//                    if ($tmp != "") {
//                        //Actulizacion del estatus de la solicitud a enviada 
//                    } else {
//                        //No se logro actualizar el estatus de la solicitud 
//                        $movimiento = "-->-->-->No se logro actualizar el estatus de la solicitud";
//                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//                        $error = true;
//                    }
                }
            } else {
//                                                    echo "-->-->-->No se logro actulizar el control carga del juzgador";
                $movimiento = "-->-->-->No se logro actulizar el control carga del juzgador";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                $error = true;
            }
        }

        return $error;
    }

    public function asignaCarpetaJuzgador($fechaMovimiento, $radicada = "S", $cveJuzgado, $juez, $sala, $SolicitudesaudienciasDto, $audienciasDto, $proveedor) {
        $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
        $juzgadoresCarpetasDto->setIdCarpetaJudicial($audienciasDto->getIdReferencia());
        $juzgadoresCarpetasDto->setIdJuzgador($juez);
        $juzgadoresCarpetasDto->setActivo("S");
        $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
        $juzgadoresCarpetasDto = $juzgadoresCarpetasDao->insertJuzgadorescarpetas($juzgadoresCarpetasDto, $proveedor);

        if ($juzgadoresCarpetasDto != "") {
            $movimiento = "-->-->-->Se ligo la carpeta judicial con el juzgador $juez del juzgado $cveJuzgado que celebrara la audiencia con idCarpetaJudicial " . $audienciasDto->getIdReferencia();
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $audienciasDto->getFechaInicial(), $audienciasDto->getFechaFinal());

            return true;
        } else {

            $movimiento = "-->-->-->Ocurrio un error no se logro ligar la carpeta judicial con el juzgador que celebrara la audiencia ";
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juez, $sala, $cveJuzgado, $audienciasDto->getFechaInicial(), $audienciasDto->getFechaFinal());

            return false;
        }
    }

    public function bitacoraAsignacion($movimiento, $fechaMovimiento, $idSolicitud, $idJuzgador, $cveSala, $cveJuzgado, $fechaInicial, $fechaFinal) {
        $this->bitacoraAsignacion[] = new BitacoraasignacionesDTO();
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setObservaciones($movimiento);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaMovimiento($fechaMovimiento);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setIdSolicitudAudiencia($idSolicitud);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setIdJuzgador($idJuzgador);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setCveSala($cveSala);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setCveJuzgado($cveJuzgado);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaInicial($fechaInicial);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaFInal($fechaFinal);
    }

    public function ponderacionAsunto($impofedel, $asunto, $proveedor) {
//        var_dump($impofedel);
        if ($asunto == "S") {
            $peso = 0;
            $delitosDao = new DelitosDAO();
            $delitosSolicitudesDao = new DelitossolicitudesDAO();
            $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
            for ($index = 0; $index < sizeof($impofedel); $index ++) {
                $delitosSolicitudesDto = new DelitossolicitudesDTO();
                $delitosSolicitudesDto->setIdDelitoSolicitud($impofedel[$index]->getIdDelitoSolicitud());
                $delitosSolicitudesDto->setActivo("S");

                $delitosSolicitudesDto = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto, "", $proveedor);

                if ($delitosSolicitudesDto != "") {
                    $delitosDto = new DelitosDTO();
                    $delitosDto->
                            setCveDelito($delitosSolicitudesDto[0]->getCveDelito());
                    $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $proveedor);
                    if ($delitosDto != "") {
                        $peso += 1 + 1 + $delitosDto [0]->getPeso();
                    }
                }

//                    $impofedelsolicitudesDto->getIdDelitoSolicitud();
            }
        } else {
            $peso = 1;
        }

        return $peso;
    }

    public function detenido($imputadossolicitudesDto) {
        $detenido = "N";
        for ($index = 0; $index < sizeof($imputadossolicitudesDto); $index ++) {
            if ($imputadossolicitudesDto[$index]->getDetenido() == "S") {
                $detenido = "S";

                break;
            }
        }

        return $detenido;
    }

    public function deleteSolicitudesaudiencias($SolicitudesaudienciasDto, $proveedor = null) {
        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->deleteSolicitudesaudiencias($SolicitudesaudienciasDto, $proveedor);

        return $SolicitudesaudienciasDto;
    }

}

//$SolicitudesaudienciasDto = new SolicitudesaudienciasDTO();
//$SolicitudesaudienciasDto->setIdSolicitudAudiencia(2893);
////
//$SolicitudesaudienciasDto->setCveTipoCarpeta("1");
//$SolicitudesaudienciasDto->setNumero("1");
//$SolicitudesaudienciasDto->setAnio("2015");
//$SolicitudesaudienciasDto->setNuc("");
//$SolicitudesaudienciasDto->setCarpetaInv("");
//$SolicitudesaudienciasDto->setNumImputados(1);
//$SolicitudesaudienciasDto->setNumDelitos(1);
//$SolicitudesaudienciasDto->setNumOfendidos(1);
//$SolicitudesaudienciasDto->setCveCatAudiencia(14);
//$SolicitudesaudienciasDto->setCveConsignacion(1);
//$SolicitudesaudienciasDto->setCveJuzgado(762);
////
//
//$SolicitudesaudienciasController = new SolicitudesaudienciasController();
//$SolicitudesaudienciasController->guardarSolicitudDeAudiencia($SolicitudesaudienciasDto);
//echo $SolicitudesaudienciasController->enviarSolicitud($SolicitudesaudienciasDto);
?>
